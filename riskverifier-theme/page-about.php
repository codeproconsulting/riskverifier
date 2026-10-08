<?php
/**
 * Template Name: About Us Page
 *
 * @package RiskVerifier
 */

get_header();
?>
  <main>
    <!-- Vector Header Banner -->
    <section class="vector-header-banner">
      <!-- Left Vector Wing -->
      <div class="banner-vector-left" aria-hidden="true">
        <svg viewBox="0 0 340 160" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="cyanGradL" x1="0%" y1="0%" x2="100%" y2="80%">
              <stop offset="0%" stop-color="#00e5ff" />
              <stop offset="50%" stop-color="#00b4d8" />
              <stop offset="100%" stop-color="#0077b6" />
            </linearGradient>
            <linearGradient id="navyGradL" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#05264b" />
              <stop offset="100%" stop-color="#083d77" />
            </linearGradient>
            <filter id="vectorDropShadowL" x="-30%" y="-30%" width="160%" height="160%">
              <feDropShadow dx="5" dy="4" stdDeviation="6" flood-color="#05264b" flood-opacity="0.35" />
            </filter>
            <filter id="bevelShadowL" x="-20%" y="-20%" width="140%" height="140%">
              <feDropShadow dx="2" dy="2" stdDeviation="3" flood-color="#000000" flood-opacity="0.18" />
            </filter>
          </defs>
          <path d="M 0 28 L 95 38 L 155 160 L 0 160 Z" fill="url(#navyGradL)" />
          <path d="M 70 0 L 105 0 L 132 46 L 95 38 Z" fill="#e2e8f0" filter="url(#bevelShadowL)" />
          <path d="M 0 0 L 85 0 L 132 46 L 180 160 L 155 160 L 95 38 L 0 28 Z" fill="url(#cyanGradL)" filter="url(#vectorDropShadowL)" />
        </svg>
      </div>

      <!-- Center Text Content -->
      <div class="banner-content-box">
        <span class="banner-tagline">ACCURATE INFORMATION &bull; REDUCED RISK &bull; TRUST</span>
        <h1 class="banner-title">ABOUT US</h1>
        <div class="banner-breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
          <span class="sep">/</span>
          <span class="current">About Us</span>
        </div>
      </div>

      <!-- Right Vector Wing -->
      <div class="banner-vector-right" aria-hidden="true">
        <svg viewBox="0 0 340 160" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="cyanGradR" x1="0%" y1="0%" x2="100%" y2="80%">
              <stop offset="0%" stop-color="#00e5ff" />
              <stop offset="50%" stop-color="#00b4d8" />
              <stop offset="100%" stop-color="#0077b6" />
            </linearGradient>
            <linearGradient id="navyGradR" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#05264b" />
              <stop offset="100%" stop-color="#083d77" />
            </linearGradient>
            <filter id="vectorDropShadowR" x="-30%" y="-30%" width="160%" height="160%">
              <feDropShadow dx="5" dy="4" stdDeviation="6" flood-color="#05264b" flood-opacity="0.35" />
            </filter>
            <filter id="bevelShadowR" x="-20%" y="-20%" width="140%" height="140%">
              <feDropShadow dx="2" dy="2" stdDeviation="3" flood-color="#000000" flood-opacity="0.18" />
            </filter>
          </defs>
          <path d="M 0 28 L 95 38 L 155 160 L 0 160 Z" fill="url(#navyGradR)" />
          <path d="M 70 0 L 105 0 L 132 46 L 95 38 Z" fill="#e2e8f0" filter="url(#bevelShadowR)" />
          <path d="M 0 0 L 85 0 L 132 46 L 180 160 L 155 160 L 95 38 L 0 28 Z" fill="url(#cyanGradR)" filter="url(#vectorDropShadowR)" />
        </svg>
      </div>
    </section>

    <!-- Top 2 Pillar Cards (Interactive Hover States) -->
    <section class="about-pillars-section">
      <div class="container">
        <div class="about-pillars-grid">
          <!-- Left Card: Default Blue, Hover White -->
          <div class="about-pillar-card pillar-left">
            <h3 class="about-pillar-title">Deliver accurate information, reduce risk, and build trust.</h3>
            <p class="about-pillar-desc">
              At Risk Verifier, we assist organizations make confident decisions by providing reliable background screening, due diligence, verification, and risk management services. We are committed to delivering accurate, relevant, and practical information that helps businesses reduce uncertainty, protect their interests, and build trusted relationships.
            </p>
            <svg class="about-pillar-watermark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              <polyline points="9 12 11 14 15 10"></polyline>
            </svg>
          </div>

          <!-- Right Card: Default White, Hover Blue -->
          <div class="about-pillar-card pillar-right">
            <h3 class="about-pillar-title">The trusted global partner for risk intelligence.</h3>
            <p class="about-pillar-desc">
              To become a trusted global partner for organizations seeking to understand and manage risk. We aim to set a high standard for professional screening, verification, and due diligence by combining thorough research, responsible practices, and practical risk solutions that support safer hiring and stronger business decisions.
            </p>
            <svg class="about-pillar-watermark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="2" y1="12" x2="22" y2="12"></line>
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- Who We Are & What We Do -->
    <section class="about-who-section">
      <div class="container">
        <div class="about-who-title-wrap">
          <h2 class="about-who-title">Who We Are & What We Do</h2>
          <div class="about-title-underline"></div>
        </div>

        <div class="about-who-grid">
          <!-- Left: High-Tech Intelligence Image -->
          <div class="about-image-card">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/about-team.jpg'); ?>" alt="Risk Verifier Corporate Intelligence Analysts" class="about-team-image">
          </div>

          <!-- Right: Text Content -->
          <div class="about-who-content">
            <p class="about-who-p">
              <strong>Risk Verifier is a risk management</strong>, employment screening, and due diligence company helping organizations make informed decisions with greater confidence. We provide reliable verification, screening, research, and risk assessment services that help businesses hire the right people, evaluate potential partners, and identify potential risks before they become problems.
            </p>
            <p class="about-who-p">
              Our services cover a comprehensive range of business and people-risk needs, including background checks, employment screening, criminal records checks, civil record checks, driving record verification, credit and financial checks, identity and document verification, due diligence, corporate risk assessments, media analytics, bespoke research work, and geopolitical advisories.
            </p>
            <p class="about-who-p">
              Working with government and private organizations, employers, companies, we deliver reliable and evidence-based risk screening, risk management, and informed decision making.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- The Principles Behind Our Work - Interactive Hero Panel & Horizontal Carousel -->
    <section class="about-principles-section" id="principles-carousel-section">
      <div class="container">
        <div class="principles-layout">
          <!-- Left: Fixed/Hero Blue Panel matching reference image -->
          <div class="principles-hero-panel">
            <div class="principles-hero-top">
              <span class="principles-hero-badge">Core Principles</span>
              <h2 class="principles-hero-title">
                The Principles<br>
                Behind Our<br>
                Work
              </h2>
              <p class="principles-hero-subtitle">
                Guiding operational standards that guarantee authentic, compliant, and actionable intelligence for critical organizational decisions.
              </p>
            </div>

            <!-- Bottom 3D Security Isometric Badges matching reference screenshot -->
            <div class="principles-hero-badges" aria-hidden="true">
              <!-- Shield Isometric -->
              <div class="hero-3d-badge" title="Verified Security">
                <svg viewBox="0 0 48 48" fill="none" class="badge-3d-svg">
                  <path d="M24 4L8 11V23C8 32.5 14.8 41.3 24 44C33.2 41.3 40 32.5 40 23V11L24 4Z" fill="url(#heroShieldGradWp)" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" />
                  <path d="M17 24L22 29L31 19" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <defs>
                    <linearGradient id="heroShieldGradWp" x1="8" y1="4" x2="40" y2="44" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#00e5ff" />
                      <stop offset="1" stop-color="#0284c7" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>

              <!-- Search Node Isometric -->
              <div class="hero-3d-badge" title="Direct Investigation">
                <svg viewBox="0 0 48 48" fill="none" class="badge-3d-svg">
                  <circle cx="21" cy="21" r="14" fill="url(#heroSearchGradWp)" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" />
                  <circle cx="21" cy="21" r="8" fill="rgba(255,255,255,0.2)" />
                  <line x1="31" y1="31" x2="43" y2="43" stroke="#00e5ff" stroke-width="4.5" stroke-linecap="round" />
                  <defs>
                    <linearGradient id="heroSearchGradWp" x1="7" y1="7" x2="35" y2="35" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#38bdf8" />
                      <stop offset="1" stop-color="#0369a1" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>

              <!-- Global Grid Isometric -->
              <div class="hero-3d-badge" title="Global Scope">
                <svg viewBox="0 0 48 48" fill="none" class="badge-3d-svg">
                  <circle cx="24" cy="24" r="18" fill="url(#heroGlobeGradWp)" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" />
                  <ellipse cx="24" cy="24" rx="8" ry="18" stroke="rgba(255,255,255,0.7)" stroke-width="1.5" />
                  <line x1="6" y1="24" x2="42" y2="24" stroke="rgba(255,255,255,0.7)" stroke-width="1.5" />
                  <line x1="9" y1="14" x2="39" y2="14" stroke="rgba(255,255,255,0.5)" stroke-width="1.2" />
                  <line x1="9" y1="34" x2="39" y2="34" stroke="rgba(255,255,255,0.5)" stroke-width="1.2" />
                  <defs>
                    <linearGradient id="heroGlobeGradWp" x1="6" y1="6" x2="42" y2="42" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#60a5fa" />
                      <stop offset="1" stop-color="#1d4ed8" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>
            </div>
          </div>

          <!-- Right: Horizontal Carousel Container with Track & Controls -->
          <div class="principles-carousel-wrapper">
            <!-- Scroll Viewport (Mouse drag, wheel, touch enabled) -->
            <div class="principles-carousel-viewport" id="principlesViewport" tabindex="0" role="region" aria-label="Principles Carousel">
              <div class="principles-carousel-track" id="principlesTrack">
                <!-- Card 1: Reliable Verification -->
                <div class="principle-carousel-card">
                  <div class="principle-card-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                      <polyline points="9 12 11 14 15 10"></polyline>
                    </svg>
                  </div>
                  <h3 class="principle-card-title">Reliable Verification</h3>
                  <p class="principle-card-desc">
                    We base reports on verified, authentic records sourced from official databases, court registries, and relevant authorities.
                  </p>
                  <!-- Bottom Tech Telemetry Waveform matching reference image -->
                  <div class="principle-card-chart" aria-hidden="true">
                    <svg viewBox="0 0 200 45" fill="none" class="chart-mini-svg">
                      <path d="M0 32 C30 35, 45 15, 75 22 C105 29, 125 10, 155 18 C175 24, 185 8, 200 12" stroke="#0284c7" stroke-width="2" stroke-linecap="round" />
                      <circle cx="75" cy="22" r="3.5" fill="#ffffff" stroke="#0284c7" stroke-width="2" />
                      <circle cx="155" cy="18" r="3.5" fill="#ffffff" stroke="#0284c7" stroke-width="2" />
                      <path d="M0 38 L200 38" stroke="rgba(2, 132, 199, 0.2)" stroke-dasharray="3 3" />
                    </svg>
                  </div>
                </div>

                <!-- Card 2: Comprehensive Screening -->
                <div class="principle-carousel-card">
                  <div class="principle-card-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="11" cy="11" r="8"></circle>
                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                      <path d="M8 12l2-3 2 4 2-2"></path>
                    </svg>
                  </div>
                  <h3 class="principle-card-title">Comprehensive Screening</h3>
                  <p class="principle-card-desc">
                    From single checks to complete multi-vector inquiry portfolios, our inquiries leave no blind spots in risk analysis.
                  </p>
                  <!-- Bottom Bar Telemetry matching reference image -->
                  <div class="principle-card-chart" aria-hidden="true">
                    <svg viewBox="0 0 200 45" fill="none" class="chart-mini-svg">
                      <rect x="15" y="28" width="8" height="14" rx="2" fill="rgba(2,132,199,0.3)" />
                      <rect x="35" y="22" width="8" height="20" rx="2" fill="rgba(2,132,199,0.4)" />
                      <rect x="55" y="16" width="8" height="26" rx="2" fill="rgba(2,132,199,0.5)" />
                      <rect x="75" y="24" width="8" height="18" rx="2" fill="rgba(2,132,199,0.4)" />
                      <rect x="95" y="12" width="8" height="30" rx="2" fill="#0284c7" />
                      <rect x="115" y="8" width="8" height="34" rx="2" fill="#083d77" />
                      <rect x="135" y="18" width="8" height="24" rx="2" fill="rgba(2,132,199,0.6)" />
                      <rect x="155" y="14" width="8" height="28" rx="2" fill="#0284c7" />
                      <rect x="175" y="22" width="8" height="20" rx="2" fill="rgba(2,132,199,0.4)" />
                    </svg>
                  </div>
                </div>

                <!-- Card 3: Practical Insights -->
                <div class="principle-carousel-card">
                  <div class="principle-card-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="18" y1="20" x2="18" y2="10"></line>
                      <line x1="12" y1="20" x2="12" y2="4"></line>
                      <line x1="6" y1="20" x2="6" y2="14"></line>
                      <path d="M3 10l6-4 6 5 6-7"></path>
                    </svg>
                  </div>
                  <h3 class="principle-card-title">Practical Insights</h3>
                  <p class="principle-card-desc">
                    Clear findings presented in an executive, actionable format to directly support hiring, investment, and operational decisions.
                  </p>
                  <!-- Bottom Scatter Trend Line matching reference image -->
                  <div class="principle-card-chart" aria-hidden="true">
                    <svg viewBox="0 0 200 45" fill="none" class="chart-mini-svg">
                      <path d="M10 38 Q60 32, 100 24 T190 8" stroke="#083d77" stroke-width="2" fill="none" />
                      <circle cx="25" cy="36" r="3" fill="#0284c7" />
                      <circle cx="65" cy="30" r="3.5" fill="#38bdf8" />
                      <circle cx="105" cy="22" r="4" fill="#0284c7" />
                      <circle cx="145" cy="15" r="3" fill="#38bdf8" />
                      <circle cx="180" cy="9" r="4.5" fill="#083d77" />
                    </svg>
                  </div>
                </div>

                <!-- Card 4: Strict Confidentiality -->
                <div class="principle-carousel-card">
                  <div class="principle-card-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                      <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                  </div>
                  <h3 class="principle-card-title">Strict Confidentiality</h3>
                  <p class="principle-card-desc">
                    We handle client and subject data with utmost security, strict encryption, and in strict compliance with global privacy regulations.
                  </p>
                  <!-- Bottom Cryptographic Wave matching reference image -->
                  <div class="principle-card-chart" aria-hidden="true">
                    <svg viewBox="0 0 200 45" fill="none" class="chart-mini-svg">
                      <path d="M5 25 Q35 5, 65 25 T125 25 T185 25" stroke="#0284c7" stroke-width="2" stroke-dasharray="4 2" />
                      <circle cx="65" cy="25" r="4" fill="#083d77" />
                      <circle cx="125" cy="25" r="4" fill="#0284c7" />
                      <circle cx="185" cy="25" r="4" fill="#083d77" />
                    </svg>
                  </div>
                </div>

                <!-- Card 5: Business-Focused Approach -->
                <div class="principle-carousel-card">
                  <div class="principle-card-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                      <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"></path>
                      <line x1="12" y1="12" x2="12.01" y2="12"></line>
                    </svg>
                  </div>
                  <h3 class="principle-card-title">Business-Focused Approach</h3>
                  <p class="principle-card-desc">
                    Our solutions are designed around real-world business needs and commercial risk thresholds, not just data collection.
                  </p>
                  <!-- Bottom Strategy Trend Line -->
                  <div class="principle-card-chart" aria-hidden="true">
                    <svg viewBox="0 0 200 45" fill="none" class="chart-mini-svg">
                      <path d="M10 35 L50 25 L90 28 L130 15 L170 18 L195 6" stroke="#083d77" stroke-width="2" stroke-linecap="round" />
                      <circle cx="50" cy="25" r="3.5" fill="#0284c7" />
                      <circle cx="130" cy="15" r="3.5" fill="#0284c7" />
                      <circle cx="195" cy="6" r="4" fill="#083d77" />
                    </svg>
                  </div>
                </div>

                <!-- Card 6: Global Jurisdiction Scope -->
                <div class="principle-carousel-card">
                  <div class="principle-card-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="2" y1="12" x2="22" y2="12"></line>
                      <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                    </svg>
                  </div>
                  <h3 class="principle-card-title">Global Jurisdiction Scope</h3>
                  <p class="principle-card-desc">
                    Active screening footprint across 100+ countries with localized expertise and on-the-ground capability.
                  </p>
                  <!-- Bottom Global Nodes -->
                  <div class="principle-card-chart" aria-hidden="true">
                    <svg viewBox="0 0 200 45" fill="none" class="chart-mini-svg">
                      <path d="M10 24 Q50 6, 100 24 T190 24" stroke="#0284c7" stroke-width="2" />
                      <circle cx="35" cy="16" r="3.5" fill="#38bdf8" />
                      <circle cx="100" cy="24" r="4.5" fill="#083d77" />
                      <circle cx="165" cy="16" r="3.5" fill="#38bdf8" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>

            <!-- Bottom Progress Track & Navigation Arrows matching reference screenshot -->
            <div class="principles-carousel-controls">
              <div class="carousel-progress-track">
                <div class="carousel-progress-thumb" id="principlesProgressThumb"></div>
              </div>
              <div class="carousel-nav-arrows">
                <button type="button" class="carousel-arrow-btn" id="principlesPrevBtn" aria-label="Previous Slide">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                  </svg>
                </button>
                <button type="button" class="carousel-arrow-btn" id="principlesNextBtn" aria-label="Next Slide">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
