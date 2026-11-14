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
<!-- Page Header Banner (Navy Blue with Gold Rings & Accent Bar) -->
    <section class="vector-header-banner page-header-banner" aria-label="Page Header">
      <div class="banner-gold-rings" aria-hidden="true">
        <svg viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg" class="banner-gold-rings-svg">
          <circle cx="480" cy="250" r="140" stroke="#D88F06" stroke-width="2" stroke-opacity="0.9" />
          <circle cx="480" cy="250" r="210" stroke="#D88F06" stroke-width="2" stroke-opacity="0.9" />
          <circle cx="480" cy="250" r="280" stroke="#D88F06" stroke-width="2" stroke-opacity="0.9" />
          <circle cx="480" cy="250" r="350" stroke="#D88F06" stroke-width="1.5" stroke-opacity="0.5" />
        </svg>
      </div>

      <div class="container banner-inner-container">
        <div class="banner-title-row">
          <span class="banner-gold-bar" aria-hidden="true"></span>
          <h1 class="page-banner-title">
            <span class="ribbon-text">REQUEST A VERIFICATION</span>
          </h1>
        </div>
        <div class="banner-breadcrumbs">
          <a href="<?php echo home_url('/'); ?>">Home</a> <span class="sep">/</span> <span class="current">Request Verification</span>
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

