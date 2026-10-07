<?php
/**
 * The template for displaying the front page
 *
 * @package RiskVerifier
 */

get_header();
?>
  <main>
    <!-- Hero Section -->
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-content">
          <div class="badge badge-blue">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Accurate • Compliant • 100+ Countries
          </div>
          <h1 class="hero-title">Business Confidence starts with <span class="highlight">Risk Verification</span></h1>
          <p class="hero-description">
            Risk Verifier helps businesses, multinational corporations, and decision-makers verify information with confidence. Fast turnaround, evidence-based background screening, corporate due diligence, and risk intelligence you can trust.
          </p>
          <div class="hero-actions">
            <a href="#quote-form-section" class="btn btn-primary btn-lg">
              Start Verification Request
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="#services-catalog" class="btn btn-outline btn-lg">Explore 12 Services</a>
          </div>

          <div class="hero-metrics">
            <div class="metric-item">
              <span class="metric-value">100+</span>
              <span class="metric-label">Countries Covered</span>
            </div>
            <div class="metric-item">
              <span class="metric-value">24–72h</span>
              <span class="metric-label">Rapid SLA Delivery</span>
            </div>
            <div class="metric-item">
              <span class="metric-value">100%</span>
              <span class="metric-label">Verified Sources</span>
            </div>
          </div>
        </div>

        <!-- Interactive Hero Simulator -->
        <div class="hero-visual">
          <div class="hero-card">
            <div class="card-header-sim">
              <span class="card-title-sim">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#083d77" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                Live Screening Portal Simulator
              </span>
              <span class="status-badge">System Live</span>
            </div>

            <div class="sim-search-box">
              <input type="text" id="simSubjectInput" class="sim-input" placeholder="Enter Subject Name or Entity..." value="Morgan Global Enterprises">
              <button id="simRunBtn" class="btn btn-primary btn-sm">Simulate</button>
            </div>

            <div class="sim-results" id="simResultsContainer">
              <div class="sim-result-row">
                <div class="sim-service-info">
                  <div class="sim-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                  </div>
                  <div>
                    <div class="sim-name">Criminal & Court Record Check</div>
                    <div class="sim-detail">Cross-jurisdictional police & court check</div>
                  </div>
                </div>
                <span class="sim-tag tag-verified">CLEAR</span>
              </div>

              <div class="sim-result-row">
                <div class="sim-service-info">
                  <div class="sim-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                  </div>
                  <div>
                    <div class="sim-name">Credit & Financial Solvency</div>
                    <div class="sim-detail">Corporate filings & payment rating</div>
                  </div>
                </div>
                <span class="sim-tag tag-verified">VERIFIED</span>
              </div>

              <div class="sim-result-row">
                <div class="sim-service-info">
                  <div class="sim-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line></svg>
                  </div>
                  <div>
                    <div class="sim-name">Sanctions & Adverse Media</div>
                    <div class="sim-detail">UN, OFAC, Interpol watchlists screened</div>
                  </div>
                </div>
                <span class="sim-tag tag-verified">NO MATCH</span>
              </div>
            </div>

            <div style="margin-top: 20px; padding: 12px 14px; background: #ffffff; border: 1px solid rgba(8,61,119,0.15); border-radius: 8px; font-size: 0.78rem; color: #083d77; display: flex; align-items: center; justify-content: space-between;">
              <span>🔒 Legally authorized consent workflow</span>
              <strong style="color: #083d77;">Confidential & Encrypted</strong>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Trust Feature Highlights Bar -->
    <section class="trust-bar">
      <div class="container">
        <div class="trust-bar-grid">
          <div class="trust-item">
            <div class="trust-icon-box">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
            </div>
            <div>
              <div class="trust-title">Global Network</div>
              <div class="trust-desc">Verification reach in 100+ countries</div>
            </div>
          </div>

          <div class="trust-item">
            <div class="trust-icon-box">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
            </div>
            <div>
              <div class="trust-title">Fast Turnaround</div>
              <div class="trust-desc">24–72 hours standard reporting</div>
            </div>
          </div>

          <div class="trust-item">
            <div class="trust-icon-box">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
            </div>
            <div>
              <div class="trust-title">100% Verified Sources</div>
              <div class="trust-desc">Official registries & vetted archives</div>
            </div>
          </div>

          <div class="trust-item">
            <div class="trust-icon-box">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            </div>
            <div>
              <div class="trust-title">Confidential & Compliant</div>
              <div class="trust-desc">GDPR, FCRA & strict privacy ethics</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="section section-subtle" id="services-catalog">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Our Professional Verification Services</h2>
          <p class="section-subtitle">
            From pre-employment screening to high-stakes due diligence and geopolitical risk assessments, we deliver evidence-based insights to protect your organization.
          </p>
        </div>

        <!-- Filter Tabs -->
        <div class="service-tabs-wrapper">
          <div class="service-tabs">
            <button class="service-tab-btn active" data-filter="all">All 12 Services</button>
            <button class="service-tab-btn" data-filter="legal">Criminal & Legal</button>
            <button class="service-tab-btn" data-filter="financial">Financial & Property</button>
            <button class="service-tab-btn" data-filter="identity">Identity & Credentials</button>
            <button class="service-tab-btn" data-filter="advisory">Due Diligence & Advisory</button>
          </div>
        </div>

        <!-- 12 Services Cards Grid -->
        <div class="services-grid" id="servicesGrid">
          
          <!-- 1. Criminal Records Check -->
          <article class="service-card card-tint-green" data-category="legal">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/criminal-record-check.png'); ?>" alt="Criminal Records Check" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>24–72h</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('criminal-records')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Criminal Records Check</h3>
            <p class="service-card-desc">
              Comprehensive criminal background checks across multiple jurisdictions to ensure safe hiring, employee compliance, and proactive risk mitigation.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Police & Court record searches</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Clearance certificate authentication</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">Criminal & Legal</span>
              <button class="service-action-pill" onclick="openServiceModal('criminal-records')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

          <!-- 2. Civil Records Search -->
          <article class="service-card card-tint-blue" data-category="legal">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/civil-record-check.png'); ?>" alt="Civil Records Search" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>24–48h</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('civil-records')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Civil Records Search</h3>
            <p class="service-card-desc">
              Access civil litigation records, court filings, and commercial legal disputes to identify liabilities associated with individuals or firms.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Contract disputes & bankruptcy filings</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Judgments and liens index search</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">Civil Litigation</span>
              <button class="service-action-pill" onclick="openServiceModal('civil-records')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

          <!-- 3. Credit & Finance Reports -->
          <article class="service-card card-tint-purple" data-category="financial">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/credit-check.png'); ?>" alt="Credit & Finance Reports" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>24–48h</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('credit-finance')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Credit & Finance Reports</h3>
            <p class="service-card-desc">
              Deep insights into financial behavior with individual and business credit reporting to evaluate fiscal stability and fraud vulnerability.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Credit ratings & default histories</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Corporate debt & liquidity profiles</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">Fiscal Stability</span>
              <button class="service-action-pill" onclick="openServiceModal('credit-finance')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

          <!-- 4. Vital Records Verification -->
          <article class="service-card card-tint-periwinkle" data-category="identity">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/vital-record-check.png'); ?>" alt="Vital Records Verification" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>2–5 Days</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('vital-records')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Vital Records Verification</h3>
            <p class="service-card-desc">
              Verify essential registry documents such as birth, marital status, and death records for identity confirmation and legal compliance.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Official civil registry confirmation</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Apostille & authentic stamp checks</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">Civil Registry</span>
              <button class="service-action-pill" onclick="openServiceModal('vital-records')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

          <!-- 5. Identity & Credentials -->
          <article class="service-card card-tint-peach" data-category="identity">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/id-check.png'); ?>" alt="Identity & Credentials" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>24–48h</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('identity-credentials')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Identity & Credentials</h3>
            <p class="service-card-desc">
              Authenticate national IDs, passports, academic degrees, and professional licenses directly with issuing regulatory bodies.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Degree & university registry checks</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Professional regulatory licenses</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">Credentials Auth</span>
              <button class="service-action-pill" onclick="openServiceModal('identity-credentials')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

          <!-- 6. Property & Asset Searches -->
          <article class="service-card card-tint-teal" data-category="financial">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/property-assets-check.png'); ?>" alt="Property & Asset Searches" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>2–4 Days</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('property-asset')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Property & Asset Searches</h3>
            <p class="service-card-desc">
              Identify real estate ownership, corporate assets, and deeds to assess financial capability, recovery options, and hidden liabilities.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Cadastral & land registry searches</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Encumbrance & mortgage verification</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">Asset Due Diligence</span>
              <button class="service-action-pill" onclick="openServiceModal('property-asset')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

          <!-- 7. Driving & Motor Vehicle Records -->
          <article class="service-card card-tint-rose" data-category="identity">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/driving-record-check.png'); ?>" alt="Driving & MVR Records" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>24–48h</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('driving-records')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Driving & MVR Records</h3>
            <p class="service-card-desc">
              Verify driving history, license validity, suspensions, and moving violations to maintain fleet safety and employee contractor compliance.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Official DMV license status pull</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Violations, points & suspension history</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">Fleet Safety</span>
              <button class="service-action-pill" onclick="openServiceModal('driving-records')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

          <!-- 8. Verifications & References -->
          <article class="service-card card-tint-cyan" data-category="identity">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/employment-reference-check.png'); ?>" alt="Verifications & References" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>2–4 Days</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('verifications-references')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Verifications & References</h3>
            <p class="service-card-desc">
              Structured validation of candidate employment tenure, job responsibilities, supervisor reference interviews, and rehire eligibility.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Direct past employer HR validation</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Comprehensive supervisor interviews</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">HR Validation</span>
              <button class="service-action-pill" onclick="openServiceModal('verifications-references')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

          <!-- 9. Due Diligence -->
          <article class="service-card card-tint-amber" data-category="advisory">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/document-verification.png'); ?>" alt="Due Diligence" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>3–5 Days</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('due-diligence')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Due Diligence</h3>
            <p class="service-card-desc">
              Reputational risk intelligence including international sanctions, Politically Exposed Persons (PEP) screening, and adverse exposure.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Global PEP & sanctions screening</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Beneficial Ownership (UBO) discovery</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">Compliance & PEP</span>
              <button class="service-action-pill" onclick="openServiceModal('due-diligence')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

          <!-- 10. Media Analytics -->
          <article class="service-card card-tint-indigo" data-category="advisory">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/media-analytics.png'); ?>" alt="Media Analytics" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>2–4 Days</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('media-analytics')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Media Analytics</h3>
            <p class="service-card-desc">
              Monitor, analyze, and map media coverage across digital and traditional platforms to detect adverse publicity and protect brand equity.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Adverse press & digital sentiment</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Executive reputational exposure tracking</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">Media Sentiment</span>
              <button class="service-action-pill" onclick="openServiceModal('media-analytics')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

          <!-- 11. Bespoke Research -->
          <article class="service-card card-tint-emerald" data-category="advisory">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/bespoke-research.png'); ?>" alt="Bespoke Research" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>Tailored</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('bespoke-research')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Bespoke Research</h3>
            <p class="service-card-desc">
              Tailored, high-depth investigative research crafted around complex cross-border transactions, market entry, and litigation support.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Open-source intelligence (OSINT)</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Custom investigative deliverables</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">Custom OSINT</span>
              <button class="service-action-pill" onclick="openServiceModal('bespoke-research')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

          <!-- 12. Geopolitical Advisory -->
          <article class="service-card card-tint-violet" data-category="advisory">
            <div class="service-card-top">
              <div class="service-badge-cluster">
                <div class="service-icon-box">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icon/geopolitical-advisory.png'); ?>" alt="Geopolitical Advisory" class="service-icon-img" loading="lazy">
                </div>
                <div class="service-pill-badge">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                  <span>Continuous</span>
                </div>
              </div>
              <button class="service-top-action" aria-label="Bookmark service" onclick="openServiceModal('geopolitical-advisory')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
              </button>
            </div>
            <h3 class="service-card-title">Geopolitical Advisory</h3>
            <p class="service-card-desc">
              Understand and navigate complex sovereign environments, emerging market risks, macroeconomic shifts, and regional security dynamics.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Sovereign & regulatory risk index</span>
              </li>
              <li class="service-feature-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Cross-border operational insights</span>
              </li>
            </ul>
            <div class="service-card-footer">
              <span class="service-footer-tag">Global Advisory</span>
              <button class="service-action-pill" onclick="openServiceModal('geopolitical-advisory')">
                <span>View Details</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </button>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- 5-Step Verification Process Section -->
    <section class="section section-white" id="how-it-works">
      <div class="container">
        <div class="section-header">
          <div class="badge badge-blue">Proven Methodology</div>
          <h2 class="section-title">How Risk Verification Works</h2>
          <p class="section-subtitle">
            A secure, streamlined 5-step process delivering accurate findings while maintaining strict compliance and confidentiality.
          </p>
        </div>

        <div class="timeline-process-container">
          <!-- Animated Vertical Track -->
          <div class="process-timeline-track">
            <div class="process-timeline-progress"></div>
          </div>

          <div class="process-timeline-items">
            
            <!-- Step 01 -->
            <div class="process-timeline-row step-item-1">
              <div class="timeline-node">
                <div class="timeline-node-inner"></div>
              </div>
              <div class="timeline-connector"></div>

              <div class="process-pill-card">
                <div class="pill-number-wrap">
                  <div class="pill-number-ring">
                    <div class="pill-number-circle">01</div>
                  </div>
                </div>

                <div class="pill-card-content">
                  <h3 class="pill-card-title">Submit Your Request</h3>
                  <p class="pill-card-desc">
                    Tell us what you need to verify and provide the relevant individual, company, document, property, or other subject details. Required authorization or consent is collected securely.
                  </p>
                </div>

                <div class="pill-icon-wrap" title="Request Submission">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="12" y1="18" x2="12" y2="12"></line>
                    <line x1="9" y1="15" x2="15" y2="15"></line>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Step 02 -->
            <div class="process-timeline-row step-item-2">
              <div class="timeline-node">
                <div class="timeline-node-inner"></div>
              </div>
              <div class="timeline-connector"></div>

              <div class="process-pill-card">
                <div class="pill-number-wrap">
                  <div class="pill-number-ring">
                    <div class="pill-number-circle">02</div>
                  </div>
                </div>

                <div class="pill-card-content">
                  <h3 class="pill-card-title">Select Your Verification Services</h3>
                  <p class="pill-card-desc">
                    Choose the checks that match your requirements—from identity, criminal, and civil records to credit, driving records, vital records, due diligence, and bespoke research.
                  </p>
                </div>

                <div class="pill-icon-wrap" title="Service Selection">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 11 12 14 22 4"></polyline>
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Step 03 -->
            <div class="process-timeline-row step-item-3">
              <div class="timeline-node">
                <div class="timeline-node-inner"></div>
              </div>
              <div class="timeline-connector"></div>

              <div class="process-pill-card">
                <div class="pill-number-wrap">
                  <div class="pill-number-ring">
                    <div class="pill-number-circle">03</div>
                  </div>
                </div>

                <div class="pill-card-content">
                  <h3 class="pill-card-title">We Research, Verify & Assess</h3>
                  <p class="pill-card-desc">
                    Our team queries authorized official registries, court archives, credit bureaus, and global sanctions databases to undertake tailored research and risk analysis.
                  </p>
                </div>

                <div class="pill-icon-wrap" title="Research & Verification">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <path d="M11 8v6"></path>
                    <path d="M8 11h6"></path>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Step 04 -->
            <div class="process-timeline-row step-item-4">
              <div class="timeline-node">
                <div class="timeline-node-inner"></div>
              </div>
              <div class="timeline-connector"></div>

              <div class="process-pill-card">
                <div class="pill-number-wrap">
                  <div class="pill-number-ring">
                    <div class="pill-number-circle">04</div>
                  </div>
                </div>

                <div class="pill-card-content">
                  <h3 class="pill-card-title">Receive Your Verified Report</h3>
                  <p class="pill-card-desc">
                    Receive a clear, evidentiary, detailed report presenting verified information and objective risk indicators designed to evaluate credibility and compliance.
                  </p>
                </div>

                <div class="pill-icon-wrap" title="Verified Report">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <polyline points="9 12 11 14 15 10"></polyline>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Step 05 -->
            <div class="process-timeline-row step-item-5">
              <div class="timeline-node">
                <div class="timeline-node-inner"></div>
              </div>
              <div class="timeline-connector"></div>

              <div class="process-pill-card">
                <div class="pill-number-wrap">
                  <div class="pill-number-ring">
                    <div class="pill-number-circle">05</div>
                  </div>
                </div>

                <div class="pill-card-content">
                  <h3 class="pill-card-title">Make Confident Decisions</h3>
                  <p class="pill-card-desc">
                    Use verified intelligence to support safer hiring, stronger due diligence, fraud prevention, financial transactions, and proactive risk management.
                  </p>
                </div>

                <div class="pill-icon-wrap" title="Confident Decisions">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                  </svg>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div style="margin-top: 40px; text-align: center;">
          <div style="display: inline-block; padding: 14px 26px; background-color: #ffffff; border: 1.5px solid #083d77; border-radius: 12px; font-size: 0.9rem; color: #083d77; font-weight: 700;">
            ⚡ <strong>Turnaround SLA:</strong> Most background reports are completed within <strong>2 to 7 business days</strong>.
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Risk Verifier -->
    <section class="section section-subtle">
      <div class="container">
        <div class="section-header">
          <div class="badge badge-blue">The Risk Verifier Advantage</div>
          <h2 class="section-title">Why Global Organizations Choose Us</h2>
          <p class="section-subtitle">
            Every business relationship and hiring decision carries risk. We make that risk transparent, manageable, and measurable.
          </p>
        </div>

        <div class="why-grid">
          <div class="why-card">
            <div class="why-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </div>
            <h4>Reliable Verification</h4>
            <p>We source information directly from government registers, verified police bureaus, and authorized court systems to ensure utmost accuracy.</p>
          </div>

          <div class="why-card">
            <div class="why-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
            </div>
            <h4>Comprehensive Screening</h4>
            <p>Bring 12 different risk screening dimensions into a single unified dashboard, eliminating the need to coordinate multiple vendors.</p>
          </div>

          <div class="why-card">
            <div class="why-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
            </div>
            <h4>Practical Insights</h4>
            <p>We don't just dump raw data. We deliver clear, risk-weighted executive summaries that enable immediate executive and HR decisions.</p>
          </div>

          <div class="why-card">
            <div class="why-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            </div>
            <h4>Strict Confidentiality</h4>
            <p>Subject and client data is protected with bank-grade security and treated with discrete protocols conforming to GDPR and regional privacy laws.</p>
          </div>

          <div class="why-card">
            <div class="why-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
            </div>
            <h4>100+ Countries Coverage</h4>
            <p>Whether you need a criminal check in North America, credential validation in Asia, or due diligence in Europe, we have on-ground capability.</p>
          </div>

          <div class="why-card">
            <div class="why-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
            </div>
            <h4>Speed & Dedication</h4>
            <p>Fast turnaround times with dedicated account managers and direct WhatsApp lines for urgent, time-sensitive executive vetting.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Verification Request & Quote Section -->
    <section class="section quote-section" id="quote-form-section">
      <div class="container">
        <div class="quote-wrapper">
          <div class="quote-grid">
            
            <!-- Left: Checkbox Selector & Form -->
            <div class="quote-left">
              <div class="badge badge-blue">Instant Inquiry</div>
              <h3>Request a Verification Package</h3>
              <p>Select the checks you need for your candidates or partners and submit your details for an immediate proposal and SLA schedule.</p>
              
              <div id="formResponseAlert" style="display:none;"></div>

              <form id="verificationRequestForm" class="quote-form">
                <label style="font-size:0.875rem; font-weight:800; color:#083d77; margin-bottom: -4px;">Select Required Verification Checks:</label>
                <div class="services-checkbox-grid">
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="criminal-records" checked>
                    <span>Criminal Records</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="civil-records">
                    <span>Civil Records</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="credit-finance" checked>
                    <span>Credit & Finance</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="identity-credentials" checked>
                    <span>ID & Credentials</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="vital-records">
                    <span>Vital Records</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="property-asset">
                    <span>Property & Assets</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="driving-records">
                    <span>Driving / MVR</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="verifications-references">
                    <span>References & HR</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="due-diligence">
                    <span>Due Diligence</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="media-analytics">
                    <span>Media Analytics</span>
                  </label>
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="clientName">Your Full Name / Entity *</label>
                    <input type="text" id="clientName" class="form-input" required placeholder="e.g. Johnathan Smith">
                  </div>
                  <div class="form-group">
                    <label for="clientEmail">Corporate Email Address *</label>
                    <input type="email" id="clientEmail" class="form-input" required placeholder="john@company.com">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="clientPhone">Phone / WhatsApp *</label>
                    <input type="tel" id="clientPhone" class="form-input" required placeholder="+1 (555) 000-0000">
                  </div>
                  <div class="form-group">
                    <label for="preferredOffice">Assigned Regional Office</label>
                    <select id="preferredOffice" class="form-select">
                      <option value="USA">USA Office (Austin, Texas)</option>
                      <option value="Canada">Canada Office (Ottawa)</option>
                      <option value="UK">UK Office (Reading)</option>
                      <option value="Pakistan">Pakistan Office (Islamabad)</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="clientNotes">Additional Details / Target Country of Subject</label>
                  <textarea id="clientNotes" class="form-textarea" placeholder="Specify subject location, volume of screenings, or specific requirements..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 8px;">
                  Submit Verification Request
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </button>
              </form>
            </div>

            <!-- Right: Dynamic Order Summary -->
            <div class="quote-right">
              <div class="quote-summary-box">
                <h4>Screening Package Summary</h4>
                
                <ul class="summary-list">
                  <li class="summary-item">
                    <span>Selected Checks:</span>
                    <strong id="selectedCount" style="color:#083d77; font-size:1.1rem;">3</strong>
                  </li>
                  <li class="summary-item">
                    <span>Estimated Turnaround:</span>
                    <strong id="selectedTurnaround">24 – 48 Hours</strong>
                  </li>
                  <li class="summary-item">
                    <span>Coverage Scope:</span>
                    <strong>100+ Countries</strong>
                  </li>
                  <li class="summary-item">
                    <span>Compliance Protocol:</span>
                    <strong>FCRA & GDPR Ready</strong>
                  </li>
                </ul>

                <div style="margin-bottom: 20px;">
                  <span style="font-size:0.8rem; font-weight:700; color:rgba(8,61,119,0.7); text-transform:uppercase; letter-spacing:0.04em; display:block; margin-bottom:8px;">Included in Request:</span>
                  <ul id="selectedServicesList" style="list-style:none; display:flex; flex-direction:column; gap:6px;">
                    <!-- Populated dynamically via JS -->
                  </ul>
                </div>

                <div class="sla-notice">
                  🛡️ <strong>Risk Verifier Guarantee:</strong> All searches are legal, consent-driven, and validated against authoritative registries. No unverified web scraping.
                </div>

                <div style="font-size:0.85rem; color:#083d77; text-align:center;">
                  Need an urgent custom quote? <br>
                  <a href="https://wa.me/13862431035" target="_blank" style="color:#083d77; font-weight:800; display:inline-flex; align-items:center; gap:4px; margin-top:4px; text-decoration:underline;">
                    Chat via WhatsApp (+1 386 243-1035) &rarr;
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Regional Offices Showcase -->
    <section class="section section-white" id="offices">
      <div class="container">
        <div class="section-header">
          <div class="badge badge-blue">Global Presence</div>
          <h2 class="section-title">Our Regional Offices</h2>
          <p class="section-subtitle">
            Local knowledge with global capability. Reach out directly to our dedicated regional teams across North America, Europe, and Asia.
          </p>
        </div>

        <div class="offices-grid">
          <!-- USA -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag">🇺🇸</div>
              <h3 class="office-region">United States</h3>
            </div>
            <p class="office-address">
              5900 Balcones Drive, STE 33098<br>
              Austin, TX 78731<br>
              United States
            </p>
            <div class="office-contacts">
              <a href="tel:+13862431035" class="office-contact-link">
                📞 +1 (386) 243-1035
              </a>
              <a href="mailto:info@riskverifier.com" class="office-contact-link">
                ✉️ info@riskverifier.com
              </a>
              <a href="https://wa.me/13862431035" target="_blank" class="office-whatsapp-btn">
                WhatsApp Austin Desk
              </a>
            </div>
          </div>

          <!-- Canada -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag">🇨🇦</div>
              <h3 class="office-region">Canada</h3>
            </div>
            <p class="office-address">
              388 Hepatica Way<br>
              Orleans, ON, K4A 0Z1<br>
              Canada
            </p>
            <div class="office-contacts">
              <a href="tel:+14168221904" class="office-contact-link">
                📞 +1 (416) 822-1904
              </a>
              <a href="mailto:info.ca@riskverifier.com" class="office-contact-link">
                ✉️ info.ca@riskverifier.com
              </a>
              <a href="https://wa.me/14168221904" target="_blank" class="office-whatsapp-btn">
                WhatsApp Ottawa Desk
              </a>
            </div>
          </div>

          <!-- United Kingdom -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag">🇬🇧</div>
              <h3 class="office-region">United Kingdom</h3>
            </div>
            <p class="office-address">
              82 Ashampstead Road<br>
              Reading, Berkshire RG30 3LG<br>
              United Kingdom
            </p>
            <div class="office-contacts">
              <a href="tel:+447973499517" class="office-contact-link">
                📞 +44 7973 499517
              </a>
              <a href="mailto:info.uk@riskverifier.com" class="office-contact-link">
                ✉️ info.uk@riskverifier.com
              </a>
              <a href="https://wa.me/447973499517" target="_blank" class="office-whatsapp-btn">
                WhatsApp UK Desk
              </a>
            </div>
          </div>

          <!-- Pakistan -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag">🇵🇰</div>
              <h3 class="office-region">Pakistan</h3>
            </div>
            <p class="office-address">
              F-16, First Floor, Galleria Mall<br>
              I-8 Markaz, Islamabad<br>
              Pakistan
            </p>
            <div class="office-contacts">
              <a href="tel:+923005555884" class="office-contact-link">
                📞 +92 300 5555884
              </a>
              <a href="mailto:info@riskverifier.com" class="office-contact-link">
                ✉️ info@riskverifier.com
              </a>
              <a href="https://wa.me/923005555884" target="_blank" class="office-whatsapp-btn">
                WhatsApp Islamabad Desk
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section section-subtle">
      <div class="container" style="max-width: 860px;">
        <div class="section-header">
          <div class="badge badge-blue">Frequently Asked Questions</div>
          <h2 class="section-title">Common Questions & Compliance</h2>
          <p class="section-subtitle">Everything you need to know about our international screening protocols.</p>
        </div>

        <div style="display:flex; flex-direction:column; gap:16px;">
          <details style="background:#ffffff; border:1.5px solid rgba(8,61,119,0.15); border-radius:12px; padding:20px; cursor:pointer;" open>
            <summary style="font-weight:700; color:#083d77; font-size:1.05rem;">How fast is the turnaround time for international checks?</summary>
            <p style="margin-top:12px; color:rgba(8,61,119,0.8); font-size:0.925rem; line-height:1.6;">
              Most standard background checks (Criminal record searches, Credit reports, and Identity verifications) are returned within <strong>24 to 72 hours</strong>. Complex international checks or deep educational registrar verifications typically take 2 to 7 business days depending on the country.
            </p>
          </details>

          <details style="background:#ffffff; border:1.5px solid rgba(8,61,119,0.15); border-radius:12px; padding:20px; cursor:pointer;">
            <summary style="font-weight:700; color:#083d77; font-size:1.05rem;">Are the checks legally compliant and authorized?</summary>
            <p style="margin-top:12px; color:rgba(8,61,119,0.8); font-size:0.925rem; line-height:1.6;">
              Yes. All Risk Verifier checks adhere strictly to local jurisdiction privacy statutes, GDPR in Europe, and FCRA standards in the United States. Where required by law, subject consent forms are collected prior to executing queries.
            </p>
          </details>

          <details style="background:#ffffff; border:1.5px solid rgba(8,61,119,0.15); border-radius:12px; padding:20px; cursor:pointer;">
            <summary style="font-weight:700; color:#083d77; font-size:1.05rem;">Can Risk Verifier handle volume corporate hiring?</summary>
            <p style="margin-top:12px; color:rgba(8,61,119,0.8); font-size:0.925rem; line-height:1.6;">
              Absolutely. We serve multinational corporations, staffing agencies, and government contractors with bulk pre-employment screening packages, automated reporting portals, and tailored corporate SLA agreements.
            </p>
          </details>
        </div>
      </div>
    </section>

  </main>

<?php
get_footer();
