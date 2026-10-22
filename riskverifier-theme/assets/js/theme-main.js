/**
 * Risk Verifier - Interactive Frontend Logic
 */

document.addEventListener('DOMContentLoaded', () => {
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
      if (window.innerWidth > 991) {
        openDropdown();
      }
    });

    parent.addEventListener('mousemove', () => {
      if (window.innerWidth > 991) {
        if (parent.classList.contains('dropdown-closed')) {
          parent.classList.remove('dropdown-closed');
        }
        if (!parent.classList.contains('is-open')) {
          openDropdown();
        }
      }
    });

    parent.addEventListener('mouseleave', () => {
      if (window.innerWidth > 991) {
        scheduleClose();
      }
    });

    if (menu) {
      menu.addEventListener('mouseenter', () => {
        if (window.innerWidth > 991) {
          openDropdown();
        }
      });
      menu.addEventListener('mouseleave', () => {
        if (window.innerWidth > 991) {
          scheduleClose();
        }
      });
    }

    if (toggle) {
      toggle.addEventListener('click', (e) => {
        if (window.innerWidth <= 991) {
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

    // When clicking any link inside mega dropdown, dismiss immediately
    parent.querySelectorAll('a').forEach(link => {
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
    'criminal-records': {
      title: 'Criminal Records Check',
      category: 'legal',
      turnaround: '24–72 Hours',
      desc: 'Conduct comprehensive criminal background checks across multiple jurisdictions to ensure safe hiring, regulatory compliance, and risk mitigation.',
      details: [
        'Legally accessible Police & Court criminal record searches',
        'Felony, misdemeanor, and active warrant cross-referencing',
        'Official criminal clearance certificate authenticity verification',
        'Full compliance with local privacy, FCRA, and GDPR regulations'
      ]
    },
    'civil-records': {
      title: 'Civil Records Search',
      category: 'legal',
      turnaround: '24–48 Hours',
      desc: 'Access civil litigation records, court filings, bankruptcies, and commercial legal disputes to uncover hidden liabilities.',
      details: [
        'Superior, district, and municipal court civil dispute indexes',
        'Contract disputes, breach of fiduciary duty, and tort claims',
        'Judgments, liens, and corporate entity legal histories',
        'Cross-jurisdictional litigation profile synthesis'
      ]
    },
    'credit-finance': {
      title: 'Credit & Finance Reports',
      category: 'financial',
      turnaround: '24–48 Hours',
      desc: 'Gain deep insights into financial behavior with individual and corporate credit reports to evaluate fiscal stability and fraud exposure.',
      details: [
        'Official credit bureau score and payment history checks',
        'Public records: bankruptcies, foreclosures, and tax liens',
        'Corporate debt ratios, credit rating & solvency status',
        'Authorized consent-driven compliant credit assessments'
      ]
    },
    'vital-records': {
      title: 'Vital Records Verification',
      category: 'identity',
      turnaround: '2–5 Business Days',
      desc: 'Verify essential registry records including birth certificates, marital status, and government death records for conclusive identity confirmation.',
      details: [
        'Government registry verification and official apostille validation',
        'Cross-referencing vital records against civil status archives',
        'Anti-fraud document security feature inspection',
        'International civil registry authentication across 100+ nations'
      ]
    },
    'identity-credentials': {
      title: 'Identity & Credentials Verification',
      category: 'identity',
      turnaround: '24–48 Hours',
      desc: 'Authenticate government-issued IDs, academic degrees, and professional licensing to eliminate resume fraud and identity theft.',
      details: [
        'Passport, National ID, and Driving License biometric checks',
        'Direct registrar degree and higher education institution verification',
        'Professional association and regulatory licensing validation',
        'AI-assisted tamper detection and biometric liveness checks'
      ]
    },
    'property-asset': {
      title: 'Property & Asset Searches',
      category: 'financial',
      turnaround: '2–4 Business Days',
      desc: 'Identify real estate deeds, corporate asset registrations, and vehicle ownership to evaluate financial strength and uncover hidden assets.',
      details: [
        'Land registry and cadastral property deed investigations',
        'Commercial property, plant, and high-value asset registries',
        'Lien, mortgage, and encumbrance tracking',
        'Beneficial ownership structures and entity asset mapping'
      ]
    },
    'driving-records': {
      title: 'Driving & Motor Vehicle Records (MVR)',
      category: 'identity',
      turnaround: '24–48 Hours',
      desc: 'Verify driver history, license validity, suspension orders, and moving violations to protect fleet operations and workplace safety.',
      details: [
        'Department of Motor Vehicles (DMV) official record pulling',
        'Traffic violation history, DUI/DWI records, and penalty points',
        'Commercial driver license (CDL) endorsement verification',
        'Fleet driver compliance monitoring and re-screening'
      ]
    },
    'verifications-references': {
      title: 'Verifications & References',
      category: 'identity',
      turnaround: '2–4 Business Days',
      desc: 'Structured verification of past employment history, job titles, responsibilities, tenure, and professional supervisor references.',
      details: [
        'Direct HR contact verification of employment dates and titles',
        'Eligibility for rehire and separation reason confirmation',
        'In-depth telephone supervisor reference interviews',
        'Standardized behavioral and competency reference reports'
      ]
    },
    'due-diligence': {
      title: 'Due Diligence & Sanctions Screening',
      category: 'advisory',
      turnaround: '3–5 Business Days',
      desc: 'Analyze executive and corporate profiles against international sanctions, PEP lists, watchlists, and adverse intelligence.',
      details: [
        'Global PEP (Politically Exposed Persons) & sanctions database screening',
        'Adverse media and negative press investigations',
        'UBO (Ultimate Beneficial Ownership) and corporate hierarchy tracking',
        'Bribery, FCPA, and AML (Anti-Money Laundering) risk checks'
      ]
    },
    'media-analytics': {
      title: 'Media Analytics',
      category: 'advisory',
      turnaround: '2–4 Business Days',
      desc: 'Monitor, scrape, and analyze digital news, regulatory alerts, social channels, and media exposure to safeguard brand reputation.',
      details: [
        'Sentiment analysis across tier-1 news, trade press, and blogs',
        'Social footprint risk assessment and digital footprint analysis',
        'Crisis detection and PR impact scoring',
        'Historical news coverage archive search'
      ]
    },
    'bespoke-research': {
      title: 'Bespoke Research',
      category: 'advisory',
      turnaround: 'Tailored Scope',
      desc: 'Tailored, customized intelligence reports designed around specific corporate M&A transactions, executive vetting, and unique needs.',
      details: [
        'Discreet corporate intelligence and strategic competitor profiling',
        'Market entry risk analysis and local counterparty profiling',
        'Deep-web investigative research and open-source intelligence (OSINT)',
        'Custom evidentiary deliverables prepared by senior analysts'
      ]
    },
    'geopolitical-advisory': {
      title: 'Geopolitical Advisory',
      category: 'advisory',
      turnaround: 'Continuous / Scoped',
      desc: 'Actionable analysis on cross-border political stability, sovereign risk, regulatory shifts, and emerging operational threats.',
      details: [
        'Country risk assessment and regulatory stability analysis',
        'Cross-border supply chain security and sovereign risk reporting',
        'Emerging market operational barrier assessments',
        'Executive travel security briefs and geopolitical forecasts'
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
        <span>${item}</span>
      `;
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
      } else if (checked.length <= 2) {
        selectedTurnaroundEl.textContent = '24 – 48 Hours';
      } else {
        selectedTurnaroundEl.textContent = '2 – 5 Business Days';
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
      animate(portalRows, { opacity: [0, 1], transform: ['translateY(30px)', 'translateY(0px)'] }, {
        delay: stagger(0.12),
        duration: 0.6,
        easing: [0.16, 1, 0.3, 1]
      });
      animate(portalNodes, { opacity: [0, 1], scale: [0.5, 1.15, 1] }, {
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
      animate(faqNodes, { opacity: [0, 1], scale: [0, 1.25, 1] }, {
        delay: stagger(0.12),
        duration: 0.5,
        easing: [0.34, 1.56, 0.64, 1]
      });
      animate(faqCards, { opacity: [0, 1], transform: ['translateX(35px)', 'translateX(0px)'] }, {
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

    // High DPI scaling
    const dpr = Math.min(window.devicePixelRatio || 1, 2);
    const size = 600;
    canvas.width = size * dpr;
    canvas.height = size * dpr;
    ctx.scale(dpr, dpr);

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

