<?php
/**
 * Template Name: Contact Page
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
            <span class="kicker-desc">GLOBAL DESKS &amp; REGIONAL HUBS</span>
          </div>

          <div class="wave-ribbon-title-wrap">
            <h1 class="wave-ribbon-title">
              <span class="ribbon-text">CONTACT US</span>
              <span class="ribbon-stripes" aria-hidden="true">
                <i></i><i></i><i></i>
              </span>
            </h1>
          </div>

          <div class="wave-breadcrumb-pill">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <span class="sep">/</span>
            <span class="current">Contact Us</span>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!-- Regional Offices Hub -->
    <section class="section section-white" id="offices-contact">
      <div class="container">
        <div class="offices-grid" style="margin-bottom: 60px;">
          <!-- USA -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/flags/us.svg'); ?>" alt="United States" class="office-flag-img"></div>
              <h3 class="office-region">United States</h3>
            </div>
            <p class="office-address">
              Austin, United States
            </p>
            <div class="office-contacts">
              <a href="tel:+13862431035" class="office-contact-link">📞 +1 (386) 243-1035</a>
              <a href="mailto:info@riskverifier.com" class="office-contact-link">✉️ info@riskverifier.com</a>
              <a href="https://wa.me/13862431035" target="_blank" class="office-whatsapp-btn">Direct WhatsApp Desk</a>
            </div>
          </div>

          <!-- Canada -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/flags/ca.svg'); ?>" alt="Canada" class="office-flag-img"></div>
              <h3 class="office-region">Canada</h3>
            </div>
            <p class="office-address">
              Ottawa, Canada
            </p>
            <div class="office-contacts">
              <a href="tel:+14168221904" class="office-contact-link">📞 +1 (416) 822-1904</a>
              <a href="mailto:info.ca@riskverifier.com" class="office-contact-link">✉️ info.ca@riskverifier.com</a>
              <a href="https://wa.me/14168221904" target="_blank" class="office-whatsapp-btn">Direct WhatsApp Desk</a>
            </div>
          </div>

          <!-- UK -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/flags/gb.svg'); ?>" alt="United Kingdom" class="office-flag-img"></div>
              <h3 class="office-region">United Kingdom</h3>
            </div>
            <p class="office-address">
              Reading, United Kingdom
            </p>
            <div class="office-contacts">
              <a href="tel:+447973499517" class="office-contact-link">📞 +44 7973 499517</a>
              <a href="mailto:info.uk@riskverifier.com" class="office-contact-link">✉️ info.uk@riskverifier.com</a>
              <a href="https://wa.me/447973499517" target="_blank" class="office-whatsapp-btn">Direct WhatsApp Desk</a>
            </div>
          </div>

          <!-- Pakistan -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/flags/pk.svg'); ?>" alt="Pakistan" class="office-flag-img"></div>
              <h3 class="office-region">Pakistan</h3>
            </div>
            <p class="office-address">
              Islamabad, Pakistan
            </p>
            <div class="office-contacts">
              <a href="tel:+923005555884" class="office-contact-link">📞 +92 300 5555884</a>
              <a href="mailto:info@riskverifier.com" class="office-contact-link">✉️ info@riskverifier.com</a>
              <a href="https://wa.me/923005555884" target="_blank" class="office-whatsapp-btn">Direct WhatsApp Desk</a>
            </div>
          </div>
        </div>

        <!-- Contact Form Box -->
        <div style="max-width: 800px; margin: 0 auto; background: #ffffff; border: 1.5px solid rgba(8,61,119,0.15); border-radius: 20px; padding: 40px; box-shadow: 0 10px 25px -5px rgba(8,61,119,0.06);">
          <h2 style="font-size: 1.8rem; font-weight: 800; color: #083d77; margin-bottom: 8px; text-align: center;">Leave a Message</h2>
          <p style="text-align: center; color: rgba(8,61,119,0.8); margin-bottom: 28px;">We are ready to assist you with background screening, pricing, and compliance inquiries.</p>

          <form id="generalContactForm" class="quote-form">
            <div class="form-row">
              <div class="form-group">
                <label for="contactFullName">Your Name *</label>
                <input type="text" id="contactFullName" class="form-input" required placeholder="Full Name">
              </div>
              <div class="form-group">
                <label for="contactEmail">Email Address *</label>
                <input type="email" id="contactEmail" class="form-input" required placeholder="email@company.com">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="contactPhone">Phone / WhatsApp</label>
                <input type="tel" id="contactPhone" class="form-input" placeholder="+1 ...">
              </div>
              <div class="form-group">
                <label for="contactOfficeSelect">Select Nearest Office</label>
                <select id="contactOfficeSelect" class="form-select">
                  <option value="USA">USA Office (Austin, Texas)</option>
                  <option value="Canada">Canada Office (Ottawa)</option>
                  <option value="UK">UK Office (Reading)</option>
                  <option value="Pakistan">Pakistan Office (Islamabad)</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="contactMessage">Inquiry Details *</label>
              <textarea id="contactMessage" class="form-textarea" required placeholder="Describe your verification needs..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 10px;">Send Message</button>
          </form>
          <div id="generalContactAlert" style="display: none; margin-top: 16px; padding: 16px; background: #ffffff; border: 2px solid #083d77; border-radius: 8px; color: #083d77; font-weight: 700; text-align: center;">
            ✓ Thank you! Your message has been received. Our team will contact you shortly.
          </div>
        </div>
      </div>
    </section>
  </main>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("generalContactForm");
  const alertBox = document.getElementById("generalContactAlert");
  if (form && alertBox) {
    form.addEventListener("submit", function(e) {
      e.preventDefault();
      alertBox.style.display = "block";
      form.reset();
    });
  }
});
</script>

<?php
get_footer();
