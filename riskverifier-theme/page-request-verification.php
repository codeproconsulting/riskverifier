<?php
/**
 * Template Name: Request Verification
 *
 * @package RiskVerifier
 */

$is_elementor = false;
if (is_singular()) {
    $pid = get_the_ID();
    if ($pid) {
        if (defined('ELEMENTOR_VERSION') && class_exists('\Elementor\Plugin')) {
            $is_elementor = \Elementor\Plugin::$instance->db->is_built_with_elementor($pid);
        }
        if (!$is_elementor && function_exists('get_post_meta')) {
            $is_elementor = (get_post_meta($pid, '_elementor_edit_mode', true) === 'builder');
        }
    }
}

if ($is_elementor) {
    $page_layout = is_singular() ? get_post_meta(get_the_ID(), '_wp_page_template', true) : '';
    if ($page_layout === 'elementor_canvas') {
        while (have_posts()) { the_post(); the_content(); }
        return;
    }
    get_header();
    echo '<main id="main-content" class="elementor-content-container">';
    while (have_posts()) { the_post(); the_content(); }
    echo '</main>';
    get_footer();
    return;
}

get_header();
?>
  <main>
    <!-- Vector Header Banner -->
        <!-- Vector Header Banner (Reference Match Wave Layout) -->
    <section class="vector-header-banner" aria-label="Page Header">
      <!-- SVG Dynamic 3D Wave Layers (Reference Match) -->
      <div class="wave-banner-backdrop" aria-hidden="true">
        <svg viewBox="0 0 1440 220" preserveAspectRatio="none" class="wave-banner-svg" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="waveNavy" x1="0%" y1="0%" x2="100%" y2="80%">
              <stop offset="0%" stop-color="#05264b" />
              <stop offset="50%" stop-color="#083d77" />
              <stop offset="100%" stop-color="#0c4a8a" />
            </linearGradient>
            <linearGradient id="waveCyan" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#00e5ff" />
              <stop offset="45%" stop-color="#0284c7" />
              <stop offset="100%" stop-color="#0369a1" />
            </linearGradient>
            <linearGradient id="waveAzure" x1="0%" y1="0%" x2="100%" y2="50%">
              <stop offset="0%" stop-color="#e0f2fe" stop-opacity="0.8" />
              <stop offset="50%" stop-color="#bae6fd" stop-opacity="0.7" />
              <stop offset="100%" stop-color="#38bdf8" stop-opacity="0.5" />
            </linearGradient>
            <filter id="waveShadowL1" x="-10%" y="-10%" width="120%" height="140%">
              <feDropShadow dx="-3" dy="6" stdDeviation="8" flood-color="#05264b" flood-opacity="0.25" />
            </filter>
            <filter id="waveShadowL2" x="-10%" y="-10%" width="120%" height="140%">
              <feDropShadow dx="-2" dy="5" stdDeviation="6" flood-color="#0284c7" flood-opacity="0.20" />
            </filter>
          </defs>

          <rect width="1440" height="220" fill="#f8fafc" />

          <pattern id="bannerGrid" width="24" height="24" patternUnits="userSpaceOnUse">
            <path d="M 24 0 L 0 0 0 24" fill="none" stroke="rgba(8,61,119,0.03)" stroke-width="1"/>
          </pattern>
          <rect width="1440" height="220" fill="url(#bannerGrid)" />

          <!-- Layer 1: Bottom Light Azure Wave Ribbon -->
          <path d="M 0 220 Q 320 200 540 160 T 1100 70 Q 1280 35 1440 15 L 1440 220 Z" fill="url(#waveAzure)" />

          <!-- Layer 2: White Contour Spacer Under Cyan Ribbon -->
          <path d="M -20 220 C 180 220 380 180 590 135 C 820 85 1060 42 1460 10 L 1460 220 Z" fill="#ffffff" filter="url(#waveShadowL2)" />

          <!-- Layer 3: Vibrant Cyan Ribbon Wave -->
          <path d="M -20 220 C 180 220 370 186 580 141 C 810 92 1050 50 1460 18 L 1460 220 Z" fill="url(#waveCyan)" />

          <!-- Layer 4: White Contour Spacer Under Navy Wave -->
          <path d="M 440 220 C 660 210 840 142 1040 90 C 1220 44 1350 20 1460 6 L 1460 220 Z" fill="#ffffff" filter="url(#waveShadowL1)" />

          <!-- Layer 5: Deep Brand Navy Wave (Top-Right Surge) -->
          <path d="M 460 220 C 680 210 850 146 1050 94 C 1230 48 1360 24 1460 10 L 1460 220 Z" fill="url(#waveNavy)" />

          <!-- Decorative Accent Glow inside Navy Curve -->
          <circle cx="1280" cy="100" r="130" fill="#00e5ff" opacity="0.08" />
        </svg>
      </div>

      <div class="container wave-banner-container">
        <!-- Left Content: Modern Ribbon Hierarchy -->
        <div class="wave-banner-left">
          <div class="wave-banner-kicker">
            <span class="kicker-brand-name">RISK VERIFIER</span>
            <span class="kicker-sep">•</span>
            <span class="kicker-desc">DIRECT-SOURCE INTELLIGENCE &amp; BACKGROUND SCREENING</span>
          </div>

          <div class="wave-ribbon-title-wrap">
            <h1 class="wave-ribbon-title">
              <span class="ribbon-text">REQUEST A VERIFICATION</span>
              <span class="ribbon-stripes" aria-hidden="true">
                <i></i><i></i><i></i>
              </span>
            </h1>
          </div>

          <div class="wave-breadcrumb-pill">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <span class="sep">/</span>
            <span class="current">Request Verification</span>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!-- Interactive Verification Request & Quote Section -->
    <section class="section quote-section" id="quote-form-section" style="padding: 40px 0 80px;">
      <div class="container">
        <div class="quote-wrapper">
          <div class="quote-grid">
            
            <!-- Left: Checkbox Selector & Form -->
            <div class="quote-left">
              <h3>Request a Verification Package</h3>
              <p>Select the checks you need for your candidates or partners and submit your details for an immediate proposal and SLA schedule.</p>
              
              <div id="formResponseAlert" style="display:none;"></div>

              <form id="verificationRequestForm" class="quote-form">
                <label style="font-size:0.875rem; font-weight:800; color:#083d77; margin-bottom: -4px;">Select Required Verification Checks:</label>
                <div class="services-checkbox-grid">
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="criminal-records">
                    <span>Criminal Records</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="civil-records">
                    <span>Civil Records</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="credit-finance">
                    <span>Credit & Finance</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="identity-credentials">
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
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="bespoke-research">
                    <span>Bespoke Research</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="geopolitical-advisory">
                    <span>Geopolitical Advisory</span>
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
                    <strong id="selectedCount" style="color:#083d77; font-size:1.1rem;">0</strong>
                  </li>
                  <li class="summary-item">
                    <span>Estimated Turnaround:</span>
                    <strong id="selectedTurnaround">Select services to calculate</strong>
                  </li>
                  <li class="summary-item">
                    <span>Coverage Scope:</span>
                    <strong>100+ Countries</strong>
                  </li>
                </ul>

                <div style="margin-bottom: 20px;">
                  <span style="font-size:0.8rem; font-weight:700; color:rgba(8,61,119,0.7); text-transform:uppercase; letter-spacing:0.04em; display:block; margin-bottom:8px;">Included in Request:</span>
                  <ul id="selectedServicesList" style="list-style:none; display:flex; flex-direction:column; gap:6px;">
                    <li style="color:rgba(8,61,119,0.5); font-size:0.85rem;">No checks selected yet</li>
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

  </main>
<?php
get_footer();

