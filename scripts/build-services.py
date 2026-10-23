#!/usr/bin/env python3
"""Build service panels, homepage summaries and modal data from the saved live copy."""
import html
import json
import re
from pathlib import Path
from urllib.parse import quote

ROOT = Path(__file__).resolve().parents[1]
DATA = json.loads((ROOT / 'riskverifier-theme/assets/data/services.json').read_text())['services']
ESC = html.escape


def block_end(text, start):
    depth = 0
    for match in re.finditer(r'<div\b[^>]*>|</div>', text[start:]):
        depth += -1 if match.group().startswith('</') else 1
        if depth == 0:
            return start + match.end()
    raise ValueError('Unclosed content block')


def read(path):
    raw = path.read_bytes()
    return raw.decode().replace('\r\n', '\n'), b'\r\n' in raw


def write(path, text, crlf):
    path.write_bytes(text.replace('\n', '\r\n').encode() if crlf else text.encode())


def paragraphs(lines):
    result = []
    for line in lines:
        if line.startswith('•'):
            result.append('<li>' + ESC(line[1:].strip()) + '</li>')
        else:
            result.append('<p>' + ESC(line) + '</p>')
    # Group consecutive bullet items in valid lists.
    markup = ''.join(result)
    return re.sub(r'(?:<li>.*?</li>)+', lambda m: '<ul>' + m.group() + '</ul>', markup)


def core_sections(service):
    return [section for section in service['sections'][1:] if not section['title'].startswith(('Compliance', 'Security', 'Why Choose', 'How It Works'))]


for rel in ['services.html', 'riskverifier-theme/page-services.php']:
    path = ROOT / rel
    text, crlf = read(path)
    for service in reversed(DATA):
        key = service['id']
        match = re.search(r'<div class="service-showcase-pane" id="showcase-' + key + r'"[^>]*>', text)
        start, end = match.start(), block_end(text, match.start())
        old = text[start:end]
        header = re.search(r'<div class="showcase-header-row">.*?</div>\s*<span class="showcase-turnaround-badge">.*?</span>\s*</div>', old, re.S).group()
        header = re.sub(r'(<h2 class="showcase-title">).*?(</h2>)', lambda m: m[1] + ESC(service['title']) + m[2], header, flags=re.S)
        header = re.sub(r'(<span class="showcase-turnaround-badge">).*?(</span>)', lambda m: m[1] + 'Turnaround: ' + ESC(service['turnaround']) + m[2], header, flags=re.S)
        icon = re.search(r"<img\b(?:[^\"'>]|\"[^\"]*\"|'[^']*')*>", header).group()
        icon = re.sub(r'alt="[^"]*"', 'alt=""', icon)
        cards = ''.join('<div class="showcase-sub-card"><div class="sub-card-icon-wrap">' + icon + '</div><div class="sub-card-text"><h4 class="sub-card-title">' + ESC(section['title']) + '</h4><div class="sub-card-desc">' + paragraphs(section['lines']) + '</div></div></div>' for section in core_sections(service))
        remaining = [section for section in service['sections'][1:] if section not in core_sections(service)]
        details = ''.join('<h3 class="showcase-section-heading">' + ESC(section['title']) + '</h3><div class="showcase-source-section">' + paragraphs(section['lines']) + '</div>' for section in remaining)
        faqs = ''.join('<details class="showcase-faq"><summary>' + ESC(faq['question']) + '</summary><p>' + ESC(faq['answer']) + '</p></details>' for faq in service['faqs'])
        actions = old[old.index('<div class="showcase-actions">'):]
        # Drop the old pane's final closing div; retain its original action controls.
        actions = actions[:actions.rfind('</div>')]
        pane = match.group() + '\n' + header + '<p class="showcase-desc">' + ESC(' '.join(service['sections'][0]['lines'])) + '</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid">' + cards + '</div>' + details
        if faqs:
            pane += '<h3 class="showcase-section-heading">FAQ</h3>' + faqs
        pane += '\n' + actions + '</div>'
        text = text[:start] + pane + text[end:]
    text = text.replace('Most standard background checks (Criminal record searches, Credit reports, and Identity verifications) are returned within <strong>24 to 72 hours</strong>. Complex international checks or deep educational registrar verifications typically take 2 to 7 business days depending on the country.', 'Criminal checks typically take 24–72 hours. Other verification times vary by country, records and institution; due diligence can take one week to several weeks. See the selected service for details.')
    text = text.replace('⚡ <strong>Turnaround SLA:</strong> Most background reports are completed within <strong>2 to 7 business days</strong>.', '<strong>Turnaround:</strong> Timing varies by service and country. See each service for its published timeframe.')
    write(path, text, crlf)

short_times = ['24–72 hours', '2–7 days*', '2–7 days*', '24h–7 days*', '24h–7 days*', '2–7 days*', '24h–7 days*', '2–7 days*', 'One to several weeks*', 'Contact us', 'Contact us', 'Contact us']
for rel in ['index.html', 'riskverifier-theme/front-page.php']:
    path = ROOT / rel
    text, crlf = read(path)
    for service, timing in zip(DATA, short_times):
        match = re.search(r'<div class="favif-bento-card"[^>]*onclick="openServiceModal\(\'' + service['id'] + r"'\)\"[^>]*>", text)
        assert match, service['id']
        start, end = match.start(), block_end(text, match.start())
        card = text[start:end]
        for tag, cls, value in [('h3', 'favif-card-title', service['title']), ('p', 'favif-card-desc', service['summary']), ('span', 'favif-card-sla', timing)]:
            card = re.sub(r'(<'+tag+' class="'+cls+'">).*?(</'+tag+'>)', lambda m: m[1]+ESC(value)+m[2], card, flags=re.S)
        text = text[:start] + card + text[end:]
    text = re.sub(r'⚡ <strong>Turnaround SLA:</strong> Standard background verification delivered in <strong>24 to 72 hours</strong>\. Complex global due diligence in 2 to 7 business days\.', '<strong>* Turnaround varies by service and country.</strong> Some checks may take longer. View service details for scope and timing.', text)
    write(path, text, crlf)

modal = {}
for service in DATA:
    details = [section['title'] for section in core_sections(service)]
    if len(details) == 1:
        details = [re.sub(r'^•\s*', '', line) for line in core_sections(service)[0]['lines'] if not line.endswith(':')]
    modal[service['id']] = {'title':service['title'], 'category':service['category'], 'turnaround':service['turnaround'], 'desc':service['summary'], 'details':details}
for rel in ['js/main.js','riskverifier-theme/assets/js/theme-main.js']:
    path = ROOT / rel
    text, crlf = read(path)
    start = text.index('  const servicesData = ')
    end = text.index('\n\n  // Service Tabs Filtering', start)
    text = text[:start] + '  const servicesData = ' + json.dumps(modal, ensure_ascii=False, indent=2) + ';' + text[end:]
    write(path, text, crlf)
print('Built 12 service panels, homepage cards and modal summaries for static and WordPress versions.')
