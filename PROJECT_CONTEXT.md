---
title: Risk Verifier — Project Context
aliases:
  - Risk Verifier Context Vault
  - RiskVerifier Website Context
created: 2026-10-23
updated: 2026-10-23
tags:
  - riskverifier
  - website
  - wordpress
  - project-context
---

# Risk Verifier project context

This is the portable context note for the Risk Verifier website. Open this repository folder as an Obsidian vault, or open this Markdown file in an existing vault. Keep the note in Git so it is available on another PC after pulling the repository. It is deliberately **not ignored**. No Obsidian plugin or machine-specific vault settings are required.

## Project identity

- Live reference website: [riskverifier.com](https://riskverifier.com/).
- Git remote: `git@github.com:codeproconsulting/riskverifier.git`.
- Current working branch: `main`.
- Product: background screening, record verification, corporate due diligence, media analysis, research and geopolitical advisory.
- Regional contacts: USA (Texas), Canada (Ottawa), UK (Reading), Pakistan (Islamabad).
- Main design: white backgrounds, brand navy `#083d77`, restrained blue accents, Plus Jakarta Sans / Inter.
- Theme version after the current updates: **2.0.5**.

## What is in the repository

There are two implementations of the site, maintained together:

| Purpose | Static preview | WordPress theme |
| --- | --- | --- |
| Home | `index.html` | `riskverifier-theme/front-page.php` |
| Services | `services.html` | `riskverifier-theme/page-services.php` |
| How It Works | `how-it-works.html` | `riskverifier-theme/page-how-it-works.php` |
| About | `about.html` | `riskverifier-theme/page-about.php` |
| Contact | `contact.html` | `riskverifier-theme/page-contact.php` |
| Login | `login.html` | `riskverifier-theme/page-login.php` |
| Signup | `signup.html` | `riskverifier-theme/page-signup.php` |
| Shared CSS | `css/style.css` | `riskverifier-theme/assets/css/theme-style.css` |
| Shared JavaScript | `js/main.js` | `riskverifier-theme/assets/js/theme-main.js` |

Static pages repeat the navigation/footer markup. WordPress shares `header.php` / `footer.php`, with Services navigation generated in `functions.php`. Generic WordPress pages and posts use `page.php`, `single.php`, `index.php` and `404.php`.

`riskverifier-theme.zip` is the installable artifact. Upload this ZIP under WordPress **Appearance → Themes → Add New → Upload Theme**. The repository root itself is not a WordPress theme.

Related notes: [[README]] and [[WORDPRESS_INSTALLATION_GUIDE]].

## WordPress execution and routes

`riskverifier-theme/functions.php` is the automatic setup entry point; there is no separate installer URL or executable to run manually.

1. Theme setup registers title management, thumbnails, menus, logos, responsive embeds and builder support.
2. `wp_enqueue_scripts` loads fonts, design CSS, root `style.css`, the bundled Motion library and the main JavaScript.
3. Asset versions use file-content hashes to invalidate browser cache when CSS/JS changes. The root `style.css` contains theme metadata and no longer imports the design CSS a second time.
4. `riskverifier_ensure_theme_pages()` runs at `init` priority 20, with a stored setup version to avoid provisioning on every request. Activation resets the setup flag. An older active installation also runs the setup on upgrade if the version flag is absent/outdated.
5. Missing real WordPress pages are created, published and assigned the included templates. Existing content, publication status and non-default/custom templates are preserved.
6. Home becomes the static homepage only if no front page is already configured and the Home page is published.
7. Pretty permalinks are enabled only when no structure is configured. Rewrite rules are refreshed once on `wp_loaded`; a hard flush attempts to update server rewrite configuration when allowed.

| Route | Template / behavior |
| --- | --- |
| `/` | `front-page.php` |
| `/home/` | Real Home page; WordPress normally canonicalizes the configured front page |
| `/services/` | `page-services.php` |
| `/about-us/` | `page-about.php` |
| `/how-it-works/` | `page-how-it-works.php` |
| `/contact-us/` | `page-contact.php` |
| `/login/` | `page-login.php` |
| `/signup/` | `page-signup.php` |
| `/about/`, `/contact/`, `/sign-up/` | Legacy aliases when no existing real page occupies that path |

Native WordPress page routing now supplies the query state, title and template. The old fallback that served templates with a forced HTTP 200 was removed. Internal theme links use `home_url()` so subdirectory installations work. Hosting must still forward pretty URL requests to WordPress; the theme cannot override an incompatible server configuration. Clear page/CDN caches after replacing the ZIP.

Elementor-built pages can render their builder content instead of the hardcoded theme sections. Existing custom builder templates are intentionally retained.

## Responsive design decisions

The original 4K problem came from fixed maximums: shared content around 1240px, the hero at 1280px, its heading at 52px and globe at 580px. These left most of a large screen unused.

The large-display rules begin at **1600 CSS pixels**. Shared containers grow up to **2880px**; the hero heading, copy, buttons, metrics and globe grow together. The globe caps at **1200px** and its canvas backing resolution follows its displayed width and device pixel ratio (capped at 2). The hero height is capped to avoid an excessively empty banner on very tall displays.

Existing hero/mobile/tablet rules below 1600px remain in effect. Screen resolution and browser CSS viewport width differ when OS/browser scaling or zoom is enabled.

Shared container growth benefits other sections and the footer. There has been no separate footer redesign; the user intends to provide further footer requirements later.

## Services navigation

The user asked for a calmer dropdown without the cluttered, multicolored basic icon tiles. It now has three labeled groups of text links:

- Background screening.
- Verification & records.
- Intelligence & advisory.

Each group has four links. An explicit **Explore all services** link opens the Services page. Service links select the corresponding detail panel by URL fragment.

Desktop behavior: hover and keyboard focus open the menu; Escape/outside interaction dismisses it. Mobile behavior: the navigation button opens the menu, and Services expands within it. Mobile navigation uses automatic height and its own scroll area. The Services toggle is excluded from the link handler that closes the menu. JavaScript and CSS use the same 992px navigation breakpoint.

Keep static navigation and the WordPress-generated navigation consistent when changing labels or groups.

## Service copy and its source of truth

The user explicitly requested the real live service details while retaining the Services page design. The copy was retrieved on **2026-10-23** from [the live Services listing](https://riskverifier.com/services/) and all twelve linked service pages.

The checked-in source is `riskverifier-theme/assets/data/services.json`. It stores the retrieval date, listing URL, each service's source URL, title, listing summary, detailed sections, FAQs and turnaround. It is a saved snapshot, not a runtime feed; WordPress and the static preview do not depend on a live network fetch for service copy.

The twelve source pages are:

1. [Criminal Records Check](https://riskverifier.com/criminal-records-check/)
2. [Civil Records Search](https://riskverifier.com/civil-records-search/)
3. [Credit & Finance Reports](https://riskverifier.com/credit-finance-reports/)
4. [Vital Records Verification](https://riskverifier.com/vital-records-verification/)
5. [Identity & Credentials Verification](https://riskverifier.com/identity-credentials-verification/)
6. [Property & Asset Searches](https://riskverifier.com/property-asset-searches/)
7. [Driving & Motor Vehicle Records](https://riskverifier.com/driving-motor-vehicle-records-mvr/)
8. [Verifications & References](https://riskverifier.com/verifications-references/)
9. [Due Diligence](https://riskverifier.com/due-diligence/)
10. [Media Analytics](https://riskverifier.com/media-analytics/)
11. [Bespoke Research](https://riskverifier.com/bespoke-research/)
12. [Geopolitical Advisory](https://riskverifier.com/geopolitical-advisory/)

Do not restore the earlier invented scopes or blanket SLAs. In particular, the live due diligence page states **one week to several weeks**, depending on scope and jurisdictions. Some advisory pages do not publish timing, so the UI asks visitors to contact the team. Some live pages contain inconsistent timing or repeated generic FAQ text; the source copy is retained, with country/document/scope qualifications where published. This is not a claim that those source inconsistencies have been corrected by the business.

Run the builder after editing the JSON:

```sh
python3 scripts/build-services.py
```

This regenerates the static and WordPress Services panels, homepage service-card summaries and the embedded JavaScript modal data. Existing page design, sidebar navigation and action controls remain. The script is idempotent. It does not fetch the website. Avoid manually editing generated service copy unless also changing the source JSON/builder.

The quote summary now uses selected services' timing instead of inferring delivery time from the number of checked boxes.

## Homepage How It Works preview

The user requested a compact homepage overview with headings only, while keeping the full dedicated How It Works design.

The homepage now has five short numbered steps:

1. Submit your request.
2. Choose your checks.
3. We verify the details.
4. Receive your report.
5. Make your decision.

The steps form a five-column row on large screens, a two-column layout on intermediate widths, and compact single-column rows on phones. Following feedback that the first preview was too plain, it now uses a frosted-glass process window with a floating verification brief, five stage-specific preview cards, selectable framed numbers, a progress line and one short caption. Selecting a step replaces the card content: request form, selected checks, source verification, consolidated report, then decision summary. The stage heading and status badge update with it. Hover, focus or tap a step to explore it; arrow keys, Home and End also work. Steps do not advance automatically. The user requested removing the pause control. Decorative movement now finishes within four seconds, with brief transitions on selection; reduced-motion preferences disable it. The process window is an illustration, not a live check or a submitted request. Long descriptions remain on the dedicated page. **See more details** links to `how-it-works.html` in the static site and `/how-it-works/` in WordPress.

The `.home-process-*` classes and the `processShell` JavaScript are scoped to this preview. Do not simplify or redesign the dedicated process page as a side effect. Its full timeline and explanations are intentionally retained.

## JavaScript features and boundaries

`js/main.js` / `theme-main.js` handle navigation, Services filters/panels, modal summaries, quote selection, WhatsApp inquiries, FAQs, animations, the About carousel and the canvas globe.

- Motion is bundled locally; code guards empty animation targets to avoid runtime exceptions on pages with different process markup.
- Service modals use the saved service data. Plain source text is inserted as text content in summary bullet spans.
- The quote form builds an on-page response and a regional WhatsApp follow-up link. It does **not** currently persist inquiries to a backend, send email, or guarantee that a request has reached the team.
- Login and signup forms currently prevent submission and display placeholder alerts. They are **not** integrated authentication/registration flows. Portal/backend integration is a separate remaining task.
- The hero globe is a visual demonstration, not a live verification or intelligence feed.
- Some older marketing, compliance and coverage claims remain elsewhere in the site; importing service copy was not a full legal/content audit of every page.

## Build and upload workflow

No npm/frontend bundler is required for the site itself. Python 3 standard-library scripts rebuild content and the upload archive.

```sh
python3 scripts/build-services.py
python3 scripts/package-theme.py
```

After editing shared CSS or JS, keep each static/theme pair byte-identical. Rebuild the ZIP after **all** theme changes, not before the last edit. `package-theme.py` excludes hidden files, preserves one top-level `riskverifier-theme/` folder, and verifies every archived file against the source bytes.

For a portable static preview, run:

```sh
python3 -m http.server 5178
```

Then open `http://localhost:5178/`. The preview requires no database. WordPress activation/runtime checks require a separate WordPress installation with PHP; the theme metadata requires PHP 7.4+ and WordPress 5.8+.

For upload, select `riskverifier-theme.zip`. If replacing an existing copy, use **Replace current with uploaded**. Automatic page setup does not require manually recreating the pages. Keep an existing configured homepage/custom content unless deliberately changing it.

## Validation and remaining work

Current implementation checks have included:

- Headless Chrome checks from phone widths through 3840px, including 320/375, tablet, desktop and 4K.
- Measurements confirming that the original hero dimensions below the new wide-screen breakpoint are preserved.
- Dropdown hover, mobile expansion/navigation, all twelve service panels and modal interaction.
- Comparison of service panel text/FAQs with the saved live source.
- Shared CSS/JS equality and idempotent service generation.
- JavaScript syntax checks and PHP parsing with PHP 7.4 syntax settings.
- ZIP integrity and source-byte comparisons.

The homepage process preview needs to remain part of responsive checks after future changes. Browser results validate the static preview; PHP parsing validates syntax, **not live WordPress execution or plugin compatibility**. No live-site deployment has been performed as part of these changes.

The previous completed WordPress setup fix was committed as `45b248b`. Consult Git history for the later responsive/services/context-note commit rather than relying on a hardcoded hash in this file.

## Working preferences from the user

- Make the site use available space on large/4K displays without damaging mobile layouts.
- Prefer clear, restrained Services navigation over decorative icon tiles.
- Preserve the Services page design and use real business content from the live site.
- Keep the homepage process brief and direct visitors to the full dedicated page.
- Defer a separate footer redesign until further instructions.
- Keep this context note in the repository and out of `.gitignore` so it can be pulled on another PC.

Update this note when architecture, service sourcing, deployment, important limitations or accepted design decisions change. Do not store credentials, private customer records or machine-specific secrets here.
