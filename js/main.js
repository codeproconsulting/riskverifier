/**
 * Risk Verifier - Interactive Frontend Logic
 */

document.addEventListener('DOMContentLoaded', () => {
  // Compact, user-controlled homepage process preview.
  const processShell = document.querySelector('.home-process-shell');
  if (processShell) {
    const buttons = Array.from(processShell.querySelectorAll('.home-process-button'));
    const caption = processShell.querySelector('.home-process-caption');
    const position = processShell.querySelector('.home-process-position');
    const captions = [
      'Tell us what you need verified.',
      'Select the checks that fit your needs.',
      'We research and validate the information.',
      'Review your verified findings in one report.',
      'Use the findings to decide with confidence.'
    ];
    const stageTitles = ['Your request, clearly defined.', 'The right checks, selected.', 'Details checked at the source.', 'Your findings, brought together.', 'Your next move, informed.'];
    const stageStates = ['Request received', 'Scope selected', 'Verifying sources', 'Report prepared', 'Ready to decide'];
    const previewCard = processShell.querySelector('.process-document');
    const previewBody = processShell.querySelector('.process-document-body');
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    const previews = [
      {
        title: 'Your request', subtitle: '01 / REQUEST INTAKE',
        content: '<div class="process-intake-field"><span>Contact details</span><i></i></div><div class="process-intake-field"><span>Your organization</span><i></i></div><div class="process-intake-action">Verification request <span>↗</span></div>'
      },
      {
        title: 'Build your scope', subtitle: '02 / SELECT YOUR CHECKS',
        content: '<div class="process-scope-row"><b>✓</b><span>Criminal records</span><em>Selected</em></div><div class="process-scope-row"><b>✓</b><span>Credentials</span><em>Selected</em></div><div class="process-scope-row"><b>✓</b><span>Credit &amp; finance</span><em>Selected</em></div><div class="process-preview-footnote">A scope tailored to your needs</div>'
      },
      {
        title: 'Source verification', subtitle: '03 / RESEARCH & VALIDATE',
        content: '<div class="process-source-map"><span>Request</span><i></i><b>RV</b><i></i><span>Source</span><div class="process-source-signal"></div></div><div class="process-source-row"><span>Issuing authority</span><b>Checking</b></div><div class="process-source-row"><span>Record matching</span><b>In progress</b></div><div class="process-source-progress"><i></i></div>'
      },
      {
        title: 'Your findings report', subtitle: '04 / CONSOLIDATED FINDINGS',
        content: '<div class="process-report-heading"><span>Verification summary</span><b>↓ PDF</b></div><div class="process-report-grid"><span>Identity<b>✓</b></span><span>Records<b>✓</b></span><span>Sources<b>✓</b></span></div><div class="process-report-lines"><i></i><i></i><i></i></div>'
      },
      {
        title: 'An informed next step', subtitle: '05 / REVIEW & DECIDE',
        content: '<div class="process-decision"><span class="process-decision-mark">✓</span><strong>Clarity for your next move</strong><span>The findings are yours to act on.</span></div><div class="process-decision-steps"><span>Review</span><i>→</i><span>Decide</span><i>→</i><span>Proceed</span></div>'
      }
    ];
    let currentStep = 0;
    let cardTransition;
    const selectStep = (index) => {
      buttons.forEach((button, i) => {
        button.setAttribute('aria-pressed', String(i === index));
        button.closest('.home-process-step').classList.toggle('is-active', i === index);
        button.closest('.home-process-step').classList.toggle('is-complete', i < index);
      });
      processShell.style.setProperty('--process-progress', `${index / (buttons.length - 1) * 100}%`);
      caption.textContent = captions[index];
      processShell.dataset.phase = String(index);
      processShell.querySelector('.home-process-stage-title').textContent = stageTitles[index];
      processShell.querySelector('.process-state-text').textContent = stageStates[index];
      position.textContent = `${String(index + 1).padStart(2, '0')} / 05`;
      if (index !== currentStep) {
        processShell.querySelector('.process-document-title').textContent = previews[index].title;
        processShell.querySelector('.process-document-subtitle').textContent = previews[index].subtitle;
        previewBody.innerHTML = previews[index].content;
        if (!reducedMotion.matches) {
          cardTransition?.cancel();
          cardTransition = previewCard.animate([
            { opacity: 0.65, transform: 'translateY(5px) rotate(-2deg)' },
            { opacity: 1, transform: 'translateY(0) rotate(-4deg)' }
          ], { duration: 260, easing: 'ease-out' });
        }
        currentStep = index;
      }
    };
    reducedMotion.addEventListener('change', (event) => {
      if (event.matches) cardTransition?.cancel();
    });
    buttons.forEach((button, index) => {
      button.addEventListener('pointerenter', (event) => {
        if (event.pointerType === 'mouse') selectStep(index);
      });
      button.addEventListener('focus', () => selectStep(index));
      button.addEventListener('click', () => selectStep(index));
      button.addEventListener('keydown', (event) => {
        let next;
        if (event.key === 'ArrowRight' || event.key === 'ArrowDown') next = (index + 1) % buttons.length;
        if (event.key === 'ArrowLeft' || event.key === 'ArrowUp') next = (index + buttons.length - 1) % buttons.length;
        if (event.key === 'Home') next = 0;
        if (event.key === 'End') next = buttons.length - 1;
        if (next !== undefined) {
          event.preventDefault();
          buttons[next].focus();
        }
      });
    });
  }

  // Mega Dropdown & Mobile Nav Logic
  const mobileToggle = document.getElementById('mobileNavToggle');
  const navMenu = document.getElementById('navMenu');
  const megaParents = document.querySelectorAll('.mega-dropdown-parent');

  const closeAllDropdowns = () => {
    megaParents.forEach(p => {
      p.classList.remove('is-open');
      p.classList.remove('mobile-open');
      p.classList.add('dropdown-closed');
      const toggle = p.querySelector('.nav-link-dropdown-toggle, .dropdown-toggle');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
    });
    // Only blur if the focused element is actually within a mega dropdown or navigation toggle
    if (document.activeElement && typeof document.activeElement.blur === 'function') {
      if (document.activeElement.closest && document.activeElement.closest('.mega-dropdown-parent, .site-header, .mobile-nav-toggle')) {
        document.activeElement.blur();
      }
    }
  };

  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      navMenu.classList.toggle('active');
    });
  }

  // Handle dropdown interactions (Desktop & Mobile)
  let closeTimer = null;
  let isMouseOverHeader = false;
  const siteHeader = document.querySelector('.site-header');

  if (siteHeader) {
    siteHeader.addEventListener('mouseenter', () => { isMouseOverHeader = true; });
    siteHeader.addEventListener('mouseleave', () => { isMouseOverHeader = false; });
  }

  megaParents.forEach(parent => {
    const toggle = parent.querySelector('.nav-link-dropdown-toggle, .dropdown-toggle');
    const menu = parent.querySelector('.mega-dropdown-menu');

    const openDropdown = () => {
      if (closeTimer) {
        clearTimeout(closeTimer);
        closeTimer = null;
      }
      parent.classList.remove('dropdown-closed');
      parent.classList.add('is-open');
      if (toggle) toggle.setAttribute('aria-expanded', 'true');
    };

    const scheduleClose = () => {
      if (closeTimer) clearTimeout(closeTimer);
      closeTimer = setTimeout(() => {
        parent.classList.remove('is-open');
        if (toggle) toggle.setAttribute('aria-expanded', 'false');
      }, 220);
    };

    // Desktop hover handlers with smooth debounce grace period
    parent.addEventListener('mouseenter', () => {
      if (window.innerWidth > 992) {
        openDropdown();
      }
    });

    parent.addEventListener('mousemove', () => {
      if (window.innerWidth > 992) {
        if (parent.classList.contains('dropdown-closed')) {
          parent.classList.remove('dropdown-closed');
        }
        if (!parent.classList.contains('is-open')) {
          openDropdown();
        }
      }
    });

    parent.addEventListener('mouseleave', () => {
      if (window.innerWidth > 992) {
        scheduleClose();
      }
    });

    if (menu) {
      menu.addEventListener('mouseenter', () => {
        if (window.innerWidth > 992) {
          openDropdown();
        }
      });
      menu.addEventListener('mouseleave', () => {
        if (window.innerWidth > 992) {
          scheduleClose();
        }
      });
    }

    if (toggle) {
      toggle.addEventListener('click', (e) => {
        if (window.innerWidth <= 992) {
          e.preventDefault();
          e.stopPropagation();
          parent.classList.remove('dropdown-closed');
          parent.classList.toggle('mobile-open');
          const isExpanded = parent.classList.contains('mobile-open');
          toggle.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
        } else {
          // On desktop, clicking the toggle can dismiss or toggle it
          if (parent.classList.contains('is-open') && !parent.classList.contains('dropdown-closed')) {
            parent.classList.add('dropdown-closed');
            parent.classList.remove('is-open');
            toggle.setAttribute('aria-expanded', 'false');
            if (document.activeElement && document.activeElement.closest && document.activeElement.closest('.mega-dropdown-parent')) {
              document.activeElement.blur();
            }
          } else {
            openDropdown();
          }
        }
      });
    }

    parent.addEventListener('focusin', () => {
      if (window.innerWidth > 992) openDropdown();
    });
    parent.addEventListener('focusout', (event) => {
      if (window.innerWidth > 992 && !parent.contains(event.relatedTarget)) scheduleClose();
    });

    // When clicking any link inside mega dropdown, dismiss immediately
    parent.querySelectorAll('.mega-dropdown-menu a').forEach(link => {
      link.addEventListener('click', () => {
        closeAllDropdowns();
        if (navMenu) navMenu.classList.remove('active');
      });
    });
  });

  // Clicking ANYWHERE on the page (outside the dropdown) dismisses it immediately
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.mega-dropdown-parent')) {
      const anyOpen = Array.from(megaParents).some(p => p.classList.contains('is-open') || p.classList.contains('mobile-open'));
      if (anyOpen) {
        closeAllDropdowns();
      }
    }
    if (navMenu && mobileToggle && !navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
      navMenu.classList.remove('active');
    }
  });

  // Close on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeAllDropdowns();
      if (navMenu) navMenu.classList.remove('active');
    }
  });

  // Smooth scroll handler: close on actual page scroll if cursor is not on header/dropdown
  window.addEventListener('scroll', () => {
    if (isMouseOverHeader) return;
    megaParents.forEach(p => {
      if (!p.classList.contains('mobile-open')) {
        p.classList.remove('is-open');
      }
    });
  }, { passive: true });

  // 12 Services Data Object
  const servicesData = {
  "criminal-records": {
    "title": "Criminal Records Check",
    "category": "legal",
    "turnaround": "24–72 hours",
    "desc": "Conduct comprehensive criminal background checks across multiple jurisdictions to ensure safe hiring and risk mitigation.",
    "details": [
      "Criminal Record Checks — searching legally accessible Police/Court criminal records.",
      "Criminal Conduct Checks — identifying relevant criminal proceedings or offense information where legally accessible.",
      "Criminal Certificate Verification — verifying the authenticity and issuing authority of criminal conduct/clearance certificates."
    ]
  },
  "civil-records": {
    "title": "Civil Records Search",
    "category": "legal",
    "turnaround": "2 to 7 days depending on country",
    "desc": "Access civil litigation records, court filings, and legal disputes to identify potential risks associated with individuals or organizations.",
    "details": [
      "Civil Record Checks",
      "Bankruptcy Records Check"
    ]
  },
  "credit-finance": {
    "title": "Credit & Finance Reports",
    "category": "financial",
    "turnaround": "2 to 7 days; may take longer depending on country",
    "desc": "Gain deep insights into financial behavior with our credit reporting services. We provide both individual and business credit reports to help assess financial stability and risk.",
    "details": [
      "Personal Credit Report",
      "Business Credit Report",
      "Business Registration Search",
      "Directorship Search"
    ]
  },
  "vital-records": {
    "title": "Vital Records Verification",
    "category": "identity",
    "turnaround": "24 hours to 7 days depending on country",
    "desc": "Verify essential documents such as birth certificates, marriage records, and death records for identity confirmation and legal compliance.",
    "details": [
      "1. Birth Record Verification",
      "2. Death Record Verification",
      "3. Marriage Record Verification"
    ]
  },
  "identity-credentials": {
    "title": "Identity & Credentials Verification",
    "category": "identity",
    "turnaround": "24 hours to 7 days depending on country and document type",
    "desc": "Authenticate personal identity, educational qualifications, and professional credentials to prevent fraud.",
    "details": [
      "Verify the authenticity of government-issued identification documents such as national ID cards, driver IDs, and other official identity records.",
      "Government ID authenticity check",
      "Name and identity matching",
      "Document validity verification",
      "Issuing authority confirmation",
      "Passport Verification",
      "Legal status/citizenship"
    ]
  },
  "property-asset": {
    "title": "Property & Asset Searches",
    "category": "financial",
    "turnaround": "2 to 7 days; may take longer depending on country",
    "desc": "Identify ownership of properties and assets to assess financial strength and uncover hidden risks.",
    "details": [
      "Physical Address Confirmation",
      "Property Ownership Search"
    ]
  },
  "driving-records": {
    "title": "Driving & Motor Vehicle Records (MVR)",
    "category": "identity",
    "turnaround": "24 hours to 7 days depending on country",
    "desc": "Verify driving history, license status, and violations to ensure safety and compliance for employees and contractors.",
    "details": [
      "Driver License Verification",
      "Traffic Violation Check"
    ]
  },
  "verifications-references": {
    "title": "Verifications & References",
    "category": "identity",
    "turnaround": "2 to 7 days; may take longer depending on country and educational institution SOPs",
    "desc": "Verify employment history, references, and professional background to ensure accurate candidate evaluation.",
    "details": [
      "1. Address Verification",
      "2. Education Verification",
      "3. Employment Verification",
      "4. Personal References",
      "5. Professional Association Verification",
      "6. Professional License Verification",
      "7. Professional Reference Verification"
    ]
  },
  "due-diligence": {
    "title": "Due Diligence",
    "category": "advisory",
    "turnaround": "One week to several weeks, depending on scope and jurisdictions",
    "desc": "Analyze reputational risks through media searches, sanctions lists, and adverse information to support informed business decisions.",
    "details": [
      "This service combines global sanctions screening with adverse media analysis to identify individuals or entities linked to financial crime, regulatory violations, or negative press coverage.",
      "Global sanctions list screening (OFAC, UN, EU, etc.)",
      "Adverse media monitoring (negative news coverage)",
      "Politically Exposed Persons (PEPs) screening",
      "Risk classification and alerts"
    ]
  },
  "media-analytics": {
    "title": "Media Analytics",
    "category": "advisory",
    "turnaround": "Contact us for timing",
    "desc": "Our Media Analytics service helps organizations monitor, analyze, and understand media coverage across digital and traditional platforms.",
    "details": [
      "Digital Media",
      "TV Channels and Newspapers",
      "Customized Reports"
    ]
  },
  "bespoke-research": {
    "title": "Bespoke Research",
    "category": "advisory",
    "turnaround": "Contact us for timing",
    "desc": "Our Bespoke Research service provides tailored, in-depth research designed around each client’s specific needs and objectives.",
    "details": [
      "Tailored to Your Needs",
      "Tailored to Your Format"
    ]
  },
  "geopolitical-advisory": {
    "title": "Geopolitical Advisory",
    "category": "advisory",
    "turnaround": "Contact us for timing",
    "desc": "Our Geopolitical Advisory service helps organizations understand and navigate complex global developments, political dynamics, and emerging risks.",
    "details": [
      "Geopolitical Analysis",
      "Country and Regional Assessments",
      "Strategic Briefings"
    ]
  }
};

  // Service Tabs Filtering (Favif Bento and standard)
  const tabButtons = document.querySelectorAll('.service-tab-btn, .favif-filter-btn');
  const serviceCards = document.querySelectorAll('.service-card, .svc-compact-card, .favif-bento-card');
  const timelineRows = document.querySelectorAll('.svc-timeline-row');

  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      tabButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');
      
      // Filter cards
      serviceCards.forEach(card => {
        const cat = card.getAttribute('data-category');
        if (filter === 'all' || cat === filter) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });

      // Filter timeline rows (if present)
      timelineRows.forEach(row => {
        const cat = row.getAttribute('data-category');
        if (filter === 'all' || cat === filter) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  });

  // Services Console Sidebar Tabs Switcher (services.html)
  const consoleTabs = document.querySelectorAll('.services-sidebar-tab');
  const showcasePanes = document.querySelectorAll('.service-showcase-pane');
  if (consoleTabs.length && showcasePanes.length) {
    consoleTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        consoleTabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        const targetId = tab.getAttribute('data-target');
        showcasePanes.forEach(pane => {
          if (pane.id === `showcase-${targetId}`) {
            pane.style.display = 'block';
            pane.style.opacity = '0';
            setTimeout(() => {
              pane.style.transition = 'opacity 0.25s ease';
              pane.style.opacity = '1';
            }, 10);
          } else {
            pane.style.display = 'none';
          }
        });
      });
    });

    // Auto-activate tab from URL hash (e.g., #criminal-records)
    const activateTabFromHash = () => {
      const hash = window.location.hash.replace('#', '');
      if (hash) {
        const targetTab = document.querySelector(`.services-sidebar-tab[data-target="${hash}"]`);
        if (targetTab) {
          targetTab.click();
          const hub = document.getElementById('services-hub');
          if (hub) {
            hub.scrollIntoView({ behavior: 'smooth' });
          }
        }
      }
    };
    activateTabFromHash();
    window.addEventListener('hashchange', activateTabFromHash);
  }

  // FAQ Capsule Accordion (Interactive Expand / Collapse)
  const faqCapsules = document.querySelectorAll('.faq-capsule-card');
  faqCapsules.forEach(card => {
    card.addEventListener('click', () => {
      const isAlreadyActive = card.classList.contains('active');
      faqCapsules.forEach(c => c.classList.remove('active'));
      if (!isAlreadyActive) {
        card.classList.add('active');
      }
    });
  });

  // Service Modal Handling
  const modalOverlay = document.getElementById('serviceModal');
  const modalClose = document.getElementById('modalClose');
  const modalTitle = document.getElementById('modalTitle');
  const modalDesc = document.getElementById('modalDesc');
  const modalBullets = document.getElementById('modalBullets');
  const modalTurnaround = document.getElementById('modalTurnaround');
  const modalSelectBtn = document.getElementById('modalSelectBtn');
  let currentSelectedKey = null;

  window.openServiceModal = function(key) {
    const data = servicesData[key];
    if (!data || !modalOverlay) return;

    currentSelectedKey = key;
    modalTitle.textContent = data.title;
    modalDesc.textContent = data.desc;
    modalTurnaround.textContent = 'Turnaround: ' + data.turnaround;

    modalBullets.innerHTML = '';
    data.details.forEach(item => {
      const li = document.createElement('li');
      li.innerHTML = `
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#083d77" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="20 6 9 17 4 12"></polyline>
        </svg>
        <span></span>
      `;
      li.querySelector('span').textContent = item;
      modalBullets.appendChild(li);
    });

    modalOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  };

  if (modalClose) {
    modalClose.addEventListener('click', closeModal);
  }
  if (modalOverlay) {
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) closeModal();
    });
  }

  function closeModal() {
    if (modalOverlay) {
      modalOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }
  }

  if (modalSelectBtn) {
    modalSelectBtn.addEventListener('click', () => {
      closeModal();
      if (currentSelectedKey) {
        const checkbox = document.querySelector(`input[name="services"][value="${currentSelectedKey}"]`);
        if (checkbox) {
          checkbox.checked = true;
          updateQuoteSummary();
        }
      }
      const quoteSection = document.getElementById('quote-form-section');
      if (quoteSection) {
        quoteSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  }

  // Interactive Quote Calculator & Summary
  const serviceCheckboxes = document.querySelectorAll('input[name="services"]');
  const selectedCountEl = document.getElementById('selectedCount');
  const selectedTurnaroundEl = document.getElementById('selectedTurnaround');
  const selectedListEl = document.getElementById('selectedServicesList');

  function updateQuoteSummary() {
    const checked = Array.from(serviceCheckboxes).filter(cb => cb.checked);
    if (selectedCountEl) {
      selectedCountEl.textContent = checked.length;
    }
    
    if (selectedTurnaroundEl) {
      if (checked.length === 0) {
        selectedTurnaroundEl.textContent = 'Select services to calculate';
      } else {
        const timings = [...new Set(checked.map(cb => servicesData[cb.value]?.turnaround).filter(Boolean))];
        selectedTurnaroundEl.textContent = timings.length === 1
          ? timings[0]
          : 'Varies by selected services and country; see service details';
      }
    }

    if (selectedListEl) {
      selectedListEl.innerHTML = '';
      if (checked.length === 0) {
        selectedListEl.innerHTML = '<li style="color:rgba(8,61,119,0.5); font-size:0.85rem;">No checks selected yet</li>';
      } else {
        checked.forEach(cb => {
          const key = cb.value;
          const service = servicesData[key];
          const li = document.createElement('li');
          li.style.cssText = 'font-size:0.85rem; color:#083d77; font-weight:600; display:flex; align-items:center; gap:6px;';
          li.innerHTML = `
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#083d77" stroke-width="3">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
            ${service ? service.title : key}
          `;
          selectedListEl.appendChild(li);
        });
      }
    }
  }

  serviceCheckboxes.forEach(cb => {
    cb.addEventListener('change', updateQuoteSummary);
  });
  updateQuoteSummary();

  // Verification Request Form Submission
  const verificationForm = document.getElementById('verificationRequestForm');
  if (verificationForm) {
    verificationForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('clientName')?.value || '';
      const email = document.getElementById('clientEmail')?.value || '';
      const phone = document.getElementById('clientPhone')?.value || '';
      const office = document.getElementById('preferredOffice')?.value || 'USA';
      const notes = document.getElementById('clientNotes')?.value || '';

      const checked = Array.from(serviceCheckboxes).filter(cb => cb.checked).map(cb => {
        return servicesData[cb.value]?.title || cb.value;
      });

      const checksText = checked.length > 0 ? checked.join(', ') : 'General Background Screening Inquiry';

      // WhatsApp links mapping for offices
      const officePhones = {
        'USA': '13862431035',
        'Canada': '14168221904',
        'UK': '447973499517',
        'Pakistan': '923005555884'
      };

      const selectedPhone = officePhones[office] || '13862431035';
      const message = encodeURIComponent(
        `Hello Risk Verifier,\n\nI would like to request a verification inquiry:\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nRegional Office: ${office}\nSelected Services: ${checksText}\nNotes: ${notes}`
      );

      // Show immediate feedback
      const formContainer = document.getElementById('formResponseAlert');
      if (formContainer) {
        formContainer.style.display = 'block';
        formContainer.innerHTML = `
          <div style="background-color:rgba(8,61,119,0.05); border:1.5px solid #083d77; color:#083d77; padding:16px; border-radius:10px; margin-bottom:16px;">
            <strong style="display:block; margin-bottom:4px; font-size:1.05rem;">Inquiry Registered Successfully!</strong>
            Our compliance officer for <strong>${office} Office</strong> will review your file within 2 hours.
            <div style="margin-top:12px;">
              <a href="https://wa.me/${selectedPhone}?text=${message}" target="_blank" class="btn btn-sm btn-primary" style="display:inline-flex; align-items:center; gap:6px;">
                Direct WhatsApp Follow-up (${office})
              </a>
            </div>
          </div>
        `;
        formContainer.scrollIntoView({ behavior: 'smooth' });
      }
    });
  }

  // Hero Simulator Interactive Check
  const simBtn = document.getElementById('simRunBtn');
  const simInput = document.getElementById('simSubjectInput');
  const simResults = document.getElementById('simResultsContainer');

  if (simBtn && simInput && simResults) {
    simBtn.addEventListener('click', () => {
      const subject = simInput.value.trim() || 'Johnathan Doe (Acme Holdings)';
      simBtn.textContent = 'Verifying...';
      simBtn.disabled = true;

      setTimeout(() => {
        simResults.innerHTML = `
          <div class="sim-result-row">
            <div class="sim-service-info">
              <div class="sim-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
              </div>
              <div>
                <div class="sim-name">Criminal & Court Records</div>
                <div class="sim-detail">${subject} • Clear in 3 Jurisdictions</div>
              </div>
            </div>
            <span class="sim-tag tag-verified">CLEAR</span>
          </div>

          <div class="sim-result-row">
            <div class="sim-service-info">
              <div class="sim-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                  <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                </svg>
              </div>
              <div>
                <div class="sim-name">Credit & Corporate Solvency</div>
                <div class="sim-detail">Score Index: A+ • Low Risk Assessment</div>
              </div>
            </div>
            <span class="sim-tag tag-verified">VERIFIED</span>
          </div>

          <div class="sim-result-row">
            <div class="sim-service-info">
              <div class="sim-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="2" y1="12" x2="22" y2="12"></line>
                </svg>
              </div>
              <div>
                <div class="sim-name">Global Sanctions & PEP</div>
                <div class="sim-detail">100+ International Watchlists Screened</div>
              </div>
            </div>
            <span class="sim-tag tag-verified">NO MATCH</span>
          </div>
        `;
        simBtn.textContent = 'Simulate';
        simBtn.disabled = false;
      }, 700);
    });
  }

  // -------------------------------------------------------------
  // Framer Motion Animations for How It Works & FAQ Timelines
  // -------------------------------------------------------------
  const hiwPortalSection = document.getElementById('how-it-works');
  if (hiwPortalSection && window.Motion) {
    const { animate, inView, stagger } = window.Motion;
    const portalNodes = hiwPortalSection.querySelectorAll('.svc-portal-node');
    const portalRows = hiwPortalSection.querySelectorAll('.svc-timeline-row');
    const portalTrack = hiwPortalSection.querySelector('.svc-timeline-track');
    
    portalNodes.forEach(node => { node.style.opacity = '0'; node.style.transform = 'scale(0.5)'; });
    portalRows.forEach(row => { row.style.opacity = '0'; });

    inView(hiwPortalSection, () => {
      if (portalRows.length) animate(portalRows, { opacity: [0, 1], transform: ['translateY(30px)', 'translateY(0px)'] }, {
        delay: stagger(0.12),
        duration: 0.6,
        easing: [0.16, 1, 0.3, 1]
      });
      if (portalNodes.length) animate(portalNodes, { opacity: [0, 1], scale: [0.5, 1.15, 1] }, {
        delay: stagger(0.12, { start: 0.08 }),
        duration: 0.55,
        easing: [0.34, 1.56, 0.64, 1]
      });
    }, { margin: '-10% 0px -10% 0px' });
  }

  // FAQ Capsule Timeline Animation
  const faqSection = document.getElementById('faq');
  if (faqSection && window.Motion) {
    const { animate, inView, stagger } = window.Motion;
    const faqCards = faqSection.querySelectorAll('.faq-capsule-card');
    const faqNodes = faqSection.querySelectorAll('.faq-timeline-node');
    const faqProgress = faqSection.querySelector('.faq-timeline-progress');

    faqCards.forEach(c => { c.style.opacity = '0'; c.style.transform = 'translateX(35px)'; });
    faqNodes.forEach(n => { n.style.opacity = '0'; n.style.transform = 'scale(0)'; });

    inView(faqSection, () => {
      if (faqProgress) {
        animate(faqProgress, { height: ['0%', '100%'] }, { duration: 1.1, easing: [0.16, 1, 0.3, 1] });
      }
      if (faqNodes.length) animate(faqNodes, { opacity: [0, 1], scale: [0, 1.25, 1] }, {
        delay: stagger(0.12),
        duration: 0.5,
        easing: [0.34, 1.56, 0.64, 1]
      });
      if (faqCards.length) animate(faqCards, { opacity: [0, 1], transform: ['translateX(35px)', 'translateX(0px)'] }, {
        delay: stagger(0.12, { start: 0.08 }),
        duration: 0.6,
        easing: [0.16, 1, 0.3, 1]
      });
    }, { margin: '-10% 0px -10% 0px' });
  }
  // -------------------------------------------------------------
  // What We Do: entrance animation
  // -------------------------------------------------------------
  const wwdLayout = document.querySelector('.wwd-layout');
  if (wwdLayout && window.Motion && window.Motion.animate && window.Motion.inView) {
    const { animate, inView, stagger } = window.Motion;
    const head = wwdLayout.querySelector('.wwd-head');
    const items = wwdLayout.querySelectorAll('.wwd-item');
    head.style.opacity = '0';
    items.forEach(it => { it.style.opacity = '0'; });
    inView(wwdLayout, () => {
      animate(head, { opacity: [0, 1], transform: ['translateX(-24px)', 'translateX(0px)'] }, { duration: 0.7, easing: [0.16, 1, 0.3, 1] });
      animate(items, { opacity: [0, 1], transform: ['translateY(22px)', 'translateY(0px)'] }, { delay: stagger(0.09, { start: 0.15 }), duration: 0.65, easing: [0.16, 1, 0.3, 1] });
    }, { margin: '-10% 0px -10% 0px' });
  }

  // -------------------------------------------------------------
  // About Page: Interactive Hero Panel & Horizontal Carousel (Mouse Drag & Navigation)
  // -------------------------------------------------------------
  const principlesViewport = document.getElementById('principlesViewport');
  const principlesProgressThumb = document.getElementById('principlesProgressThumb');
  const principlesPrevBtn = document.getElementById('principlesPrevBtn');
  const principlesNextBtn = document.getElementById('principlesNextBtn');

  if (principlesViewport) {
    let isDown = false;
    let startX = 0;
    let scrollLeft = 0;
    let hasDragged = false;

    const updateProgress = () => {
      const maxScroll = principlesViewport.scrollWidth - principlesViewport.clientWidth;
      if (maxScroll <= 0) {
        if (principlesProgressThumb) {
          principlesProgressThumb.style.width = '100%';
          principlesProgressThumb.style.left = '0%';
        }
        return;
      }
      const scrollRatio = principlesViewport.scrollLeft / maxScroll;
      const thumbWidthPercent = Math.max(18, Math.min(42, (principlesViewport.clientWidth / principlesViewport.scrollWidth) * 100));
      const availableTrack = 100 - thumbWidthPercent;
      const leftPos = scrollRatio * availableTrack;

      if (principlesProgressThumb) {
        principlesProgressThumb.style.width = thumbWidthPercent + '%';
        principlesProgressThumb.style.left = Math.max(0, Math.min(availableTrack, leftPos)) + '%';
      }
    };

    // Mouse Drag events
    principlesViewport.addEventListener('mousedown', (e) => {
      isDown = true;
      hasDragged = false;
      principlesViewport.classList.add('is-dragging');
      startX = e.pageX - principlesViewport.offsetLeft;
      scrollLeft = principlesViewport.scrollLeft;
    });

    window.addEventListener('mouseup', () => {
      if (isDown) {
        isDown = false;
        principlesViewport.classList.remove('is-dragging');
      }
    });

    principlesViewport.addEventListener('mouseleave', () => {
      if (isDown) {
        isDown = false;
        principlesViewport.classList.remove('is-dragging');
      }
    });

    principlesViewport.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - principlesViewport.offsetLeft;
      const walk = (x - startX) * 1.6;
      if (Math.abs(walk) > 4) hasDragged = true;
      principlesViewport.scrollLeft = scrollLeft - walk;
      updateProgress();
    });

    // Touch events
    principlesViewport.addEventListener('scroll', updateProgress, { passive: true });

    // Prevent accidental link / card click when dragging
    principlesViewport.addEventListener('click', (e) => {
      if (hasDragged) {
        e.preventDefault();
        e.stopPropagation();
      }
    });

    // Prev / Next button controls
    if (principlesPrevBtn) {
      principlesPrevBtn.addEventListener('click', () => {
        principlesViewport.scrollBy({ left: -310, behavior: 'smooth' });
      });
    }

    if (principlesNextBtn) {
      principlesNextBtn.addEventListener('click', () => {
        principlesViewport.scrollBy({ left: 310, behavior: 'smooth' });
      });
    }

    // Keyboard arrow keys accessibility
    principlesViewport.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') {
        principlesViewport.scrollBy({ left: -310, behavior: 'smooth' });
      } else if (e.key === 'ArrowRight') {
        principlesViewport.scrollBy({ left: 310, behavior: 'smooth' });
      }
    });

    // Initial update
    updateProgress();
    window.addEventListener('resize', updateProgress);
  }

  // =========================================================================
  // 3D Rotating Glowing World Map Globe Animation ("gol gol gomay")
  // =========================================================================
  const initHeroGlobe = () => {
    const canvas = document.getElementById('heroGlobeCanvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    // Keep the 600-unit drawing coordinates, but render at the displayed size
    // so the globe stays crisp on wide screens and after a viewport resize.
    const size = 600;
    const resizeCanvas = () => {
      const dpr = Math.min(window.devicePixelRatio || 1, 2);
      const pixels = Math.max(1, Math.round(canvas.getBoundingClientRect().width * dpr));
      if (canvas.width !== pixels || canvas.height !== pixels) {
        canvas.width = pixels;
        canvas.height = pixels;
        ctx.setTransform(pixels / size, 0, 0, pixels / size, 0, 0);
      }
    };
    resizeCanvas();
    if (typeof ResizeObserver !== 'undefined') {
      new ResizeObserver(resizeCanvas).observe(canvas);
    }
    window.addEventListener('resize', resizeCanvas, { passive: true });

    const cx = 300;
    const cy = 300;
    const R = 182; // Sphere radius

    // Procedural Earth Land Coordinates (Continent Dot Matrix)
    const continentBounds = [
      // North America
      { minLat: 15, maxLat: 72, minLon: -168, maxLon: -52, filter: (lat, lon) => !(lat < 30 && lon > -80) && !(lat > 55 && lon > -60 && lon < -50) },
      // South America
      { minLat: -56, maxLat: 13, minLon: -82, maxLon: -34, filter: (lat, lon) => (lat > -20 || lon > -75) && (lat > -40 || lon < -55) },
      // Europe
      { minLat: 36, maxLat: 71, minLon: -10, maxLon: 45, filter: (lat, lon) => !(lat < 42 && lon < -5) },
      // Africa
      { minLat: -35, maxLat: 37, minLon: -18, maxLon: 52, filter: (lat, lon) => !(lat < -10 && lon > 42) && !(lat > 20 && lon < -12) },
      // Asia
      { minLat: 5, maxLat: 75, minLon: 45, maxLon: 145, filter: (lat, lon) => !(lat < 20 && lon < 60) && !(lat < 10 && lon > 90) },
      // Australia & NZ
      { minLat: -44, maxLat: -10, minLon: 112, maxLon: 154, filter: () => true },
      // Japan & East Islands
      { minLat: 30, maxLat: 46, minLon: 130, maxLon: 146, filter: () => true },
      // UK & Ireland
      { minLat: 50, maxLat: 59, minLon: -10, maxLon: 2, filter: () => true }
    ];

    const landDots = [];
    for (let lat = -58; lat <= 72; lat += 3.6) {
      for (let lon = -180; lon <= 180; lon += 3.8) {
        if (continentBounds.some(c => lat >= c.minLat && lat <= c.maxLat && lon >= c.minLon && lon <= c.maxLon && c.filter(lat, lon))) {
          landDots.push({ lat, lon });
        }
      }
    }

    // Key Global Intelligence City Hubs
    const hubs = [
      { name: 'New York', lat: 40.7, lon: -74.0 },
      { name: 'London', lat: 51.5, lon: -0.1 },
      { name: 'Paris', lat: 48.8, lon: 2.3 },
      { name: 'Dubai', lat: 25.2, lon: 55.3 },
      { name: 'Islamabad', lat: 33.7, lon: 73.0 },
      { name: 'Singapore', lat: 1.3, lon: 103.8 },
      { name: 'Tokyo', lat: 35.7, lon: 139.7 },
      { name: 'Sydney', lat: -33.8, lon: 151.2 },
      { name: 'Toronto', lat: 43.6, lon: -79.4 },
      { name: 'Sao Paulo', lat: -23.5, lon: -46.6 }
    ];

    // Flight / Intelligence Verification Connections between hubs
    const connections = [
      { from: 0, to: 1 }, // NY to London
      { from: 1, to: 3 }, // London to Dubai
      { from: 3, to: 4 }, // Dubai to Islamabad
      { from: 4, to: 5 }, // Islamabad to Singapore
      { from: 5, to: 6 }, // Singapore to Tokyo
      { from: 1, to: 2 }, // London to Paris
      { from: 0, to: 8 }, // NY to Toronto
      { from: 0, to: 9 }, // NY to Sao Paulo
      { from: 6, to: 7 }  // Tokyo to Sydney
    ];

    let rotation = 0;
    const rotationSpeed = 0.0042; // Continuous smooth rotation
    const tilt = 0.18; // 3D Axial tilt (approx 10 degrees)
    let photonOffset = 0;

    const render = () => {
      ctx.clearRect(0, 0, size, size);
      rotation += rotationSpeed;
      photonOffset = (photonOffset + 0.008) % 1;

      // 1. Back Atmospheric Glow
      const glowGrad = ctx.createRadialGradient(cx, cy, R * 0.75, cx, cy, R * 1.35);
      glowGrad.addColorStop(0, 'rgba(2, 132, 199, 0.12)');
      glowGrad.addColorStop(0.55, 'rgba(56, 189, 248, 0.05)');
      glowGrad.addColorStop(1, 'rgba(2, 132, 199, 0)');
      ctx.fillStyle = glowGrad;
      ctx.beginPath();
      ctx.arc(cx, cy, R * 1.35, 0, Math.PI * 2);
      ctx.fill();

      // 2. Base Sphere (Clean Light Ice-Blue with 3D Radial Highlight)
      const oceanGrad = ctx.createRadialGradient(cx - 50, cy - 50, 20, cx, cy, R);
      oceanGrad.addColorStop(0, '#ffffff'); // Pure white illumination highlight top-left
      oceanGrad.addColorStop(0.35, '#f0f9ff'); // Soft ice tint
      oceanGrad.addColorStop(0.75, '#e0f2fe'); // Clear light sky blue
      oceanGrad.addColorStop(0.95, '#dbeafe'); // Subtle shading curve
      oceanGrad.addColorStop(1, '#93c5fd'); // 3D sphere curvature edge
      ctx.fillStyle = oceanGrad;
      ctx.beginPath();
      ctx.arc(cx, cy, R, 0, Math.PI * 2);
      ctx.fill();

      // Sphere Outer Boundary Line
      ctx.strokeStyle = 'rgba(2, 132, 199, 0.35)';
      ctx.lineWidth = 1.6;
      ctx.stroke();

      // Clip content inside the sphere
      ctx.save();
      ctx.beginPath();
      ctx.arc(cx, cy, R, 0, Math.PI * 2);
      ctx.clip();

      // Helper function to project (lat, lon) to 3D sphere coordinates
      const project = (lat, lon, altitude = 0) => {
        const radLat = (lat * Math.PI) / 180;
        const radLon = (lon * Math.PI) / 180 + rotation;
        const r = R + altitude;

        const cosLat = Math.cos(radLat);
        const sinLat = Math.sin(radLat);
        const cosLon = Math.cos(radLon);
        const sinLon = Math.sin(radLon);

        const x = cx + r * cosLat * sinLon;
        const y = cy - r * (sinLat * Math.cos(tilt) - cosLat * cosLon * Math.sin(tilt));
        const z = r * (cosLat * cosLon * Math.cos(tilt) + sinLat * Math.sin(tilt));

        return { x, y, z };
      };

      // 3. Latitude & Longitude Dotted Grid Lines
      ctx.strokeStyle = 'rgba(2, 132, 199, 0.16)';
      ctx.lineWidth = 1;
      [-50, -25, 0, 25, 50].forEach(gridLat => {
        ctx.beginPath();
        let started = false;
        for (let l = -180; l <= 180; l += 8) {
          const pt = project(gridLat, l);
          if (pt.z > 0) {
            if (!started) { ctx.moveTo(pt.x, pt.y); started = true; }
            else { ctx.lineTo(pt.x, pt.y); }
          } else {
            started = false;
          }
        }
        ctx.stroke();
      });

      // Longitude Meridians
      for (let gridLon = 0; gridLon < 360; gridLon += 40) {
        ctx.beginPath();
        let started = false;
        for (let l = -80; l <= 80; l += 5) {
          const pt = project(l, gridLon);
          if (pt.z > 0) {
            if (!started) { ctx.moveTo(pt.x, pt.y); started = true; }
            else { ctx.lineTo(pt.x, pt.y); }
          } else {
            started = false;
          }
        }
        ctx.stroke();
      }

      // 4. Draw Land Continent Dots
      for (let i = 0; i < landDots.length; i++) {
        const pt = project(landDots[i].lat, landDots[i].lon);
        if (pt.z > 0) {
          const k = pt.z / R; // 0 to 1 depth factor
          const alpha = 0.25 + k * 0.75;
          const radius = 1.15 + k * 1.35;

          // Base continent dot: Brand navy blue
          ctx.fillStyle = `rgba(8, 61, 119, ${alpha * 0.85})`;
          ctx.beginPath();
          ctx.arc(pt.x, pt.y, radius, 0, Math.PI * 2);
          ctx.fill();

          // Highlight front-facing dots with crisp vibrant cyan/blue
          if (k > 0.6) {
            ctx.fillStyle = `rgba(2, 132, 199, ${(k - 0.6) * 2.2})`;
            ctx.beginPath();
            ctx.arc(pt.x, pt.y, radius * 0.7, 0, Math.PI * 2);
            ctx.fill();
          }
        }
      }

      // 5. Draw 3D Arcs Between Intelligence City Hubs
      connections.forEach(conn => {
        const h1 = hubs[conn.from];
        const h2 = hubs[conn.to];
        const p1 = project(h1.lat, h1.lon);
        const p2 = project(h2.lat, h2.lon);

        if (p1.z > -20 || p2.z > -20) {
          // Midpoint calculated with extra altitude
          const midLat = (h1.lat + h2.lat) / 2;
          const midLon = (h1.lon + h2.lon) / 2;
          const arcHeight = 22; // Height of arc above sphere
          const midPt = project(midLat, midLon, arcHeight);

          if (midPt.z > 0) {
            const arcAlpha = Math.max(0, Math.min(1, (midPt.z / R) * 0.9));
            ctx.strokeStyle = `rgba(2, 132, 199, ${arcAlpha * 0.65})`;
            ctx.lineWidth = 1.6;
            ctx.beginPath();
            ctx.moveTo(p1.x, p1.y);
            ctx.quadraticCurveTo(midPt.x, midPt.y, p2.x, p2.y);
            ctx.stroke();

            // Traveling photon light along the arc
            const t = photonOffset;
            const qx = (1 - t) * (1 - t) * p1.x + 2 * (1 - t) * t * midPt.x + t * t * p2.x;
            const qy = (1 - t) * (1 - t) * p1.y + 2 * (1 - t) * t * midPt.y + t * t * p2.y;

            ctx.fillStyle = `rgba(8, 61, 119, ${arcAlpha})`;
            ctx.beginPath();
            ctx.arc(qx, qy, 2.6, 0, Math.PI * 2);
            ctx.fill();

            ctx.fillStyle = `rgba(2, 132, 199, ${arcAlpha * 0.75})`;
            ctx.beginPath();
            ctx.arc(qx, qy, 5, 0, Math.PI * 2);
            ctx.fill();
          }
        }
      });

      // 6. Draw City Hub Beacons & Pulsing Nodes
      const now = performance.now();
      hubs.forEach(hub => {
        const p = project(hub.lat, hub.lon, 1);
        if (p.z > 0) {
          const k = p.z / R;
          const alpha = 0.3 + k * 0.7;

          // Beacon center dot
          ctx.fillStyle = `rgba(8, 61, 119, ${alpha})`;
          ctx.beginPath();
          ctx.arc(p.x, p.y, 3.2, 0, Math.PI * 2);
          ctx.fill();

          ctx.fillStyle = `rgba(2, 132, 199, ${alpha * 0.85})`;
          ctx.beginPath();
          ctx.arc(p.x, p.y, 5.5, 0, Math.PI * 2);
          ctx.fill();

          // Expanding radar pulse ring around key hubs
          const pulsePhase = ((now * 0.0018) % 1);
          const pulseRadius = 5 + pulsePhase * 14;
          const pulseAlpha = (1 - pulsePhase) * alpha * 0.8;

          ctx.strokeStyle = `rgba(2, 132, 199, ${pulseAlpha})`;
          ctx.lineWidth = 1.4;
          ctx.beginPath();
          ctx.arc(p.x, p.y, pulseRadius, 0, Math.PI * 2);
          ctx.stroke();
        }
      });

      // 7. Inner Atmospheric Rim Glow / Soft 3D Lighting Curve
      const rim = ctx.createRadialGradient(cx, cy, R * 0.82, cx, cy, R);
      rim.addColorStop(0, 'rgba(2, 132, 199, 0)');
      rim.addColorStop(0.7, 'rgba(56, 189, 248, 0.12)');
      rim.addColorStop(1, 'rgba(2, 132, 199, 0.4)');
      ctx.fillStyle = rim;
      ctx.beginPath();
      ctx.arc(cx, cy, R, 0, Math.PI * 2);
      ctx.fill();

      ctx.restore(); // Restore clipping

      requestAnimationFrame(render);
    };

    render();
  };

  initHeroGlobe();
});


