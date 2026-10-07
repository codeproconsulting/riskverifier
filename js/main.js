/**
 * Risk Verifier - Interactive Frontend Logic
 */

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Nav Toggle
  const mobileToggle = document.getElementById('mobileNavToggle');
  const navMenu = document.getElementById('navMenu');
  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      navMenu.classList.toggle('active');
    });
  }

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
});
