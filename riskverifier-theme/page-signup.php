<?php
/**
 * Template Name: Signup Page
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
            <span class="ribbon-text">CREATE AN ACCOUNT</span>
          </h1>
        </div>
        <div class="banner-breadcrumbs">
          <a href="<?php echo home_url('/'); ?>">Home</a> <span class="sep">/</span> <span class="current">Register</span>
        </div>
      </div>
    </section>

    <!-- Portal Section -->
    <section class="portal-section">
      <div class="container">
        <!-- Main Heading above Card matching screenshot -->
        <h2 class="portal-page-heading">Signup To The Portal</h2>

        <!-- Signup Card -->
        <div class="portal-card portal-card-signup">
          <h3 class="portal-card-subtitle">Register Now</h3>

          <form class="portal-form" id="portalSignupForm" onsubmit="event.preventDefault(); alert('Registration details submitted successfully! Our verification onboarding team will activate your portal credentials.');">
            <!-- Row 1: Full-width Your Name -->
            <div class="portal-form-group">
              <div class="portal-input-wrap has-icon">
                <svg class="portal-input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <input type="text" name="name" class="portal-input" placeholder="Your Name" required>
              </div>
            </div>

            <!-- Row 2: Mobile Number & Email -->
            <div class="portal-form-grid">
              <div class="portal-form-group">
                <div class="portal-phone-group">
                  <select class="portal-phone-select" name="country_code" aria-label="Country Code">
                    <option value="+1">🇺🇸 +1</option>
                    <option value="+44">🇬🇧 +44</option>
                    <option value="+92">🇵🇰 +92</option>
                    <option value="+91" selected>🇮🇳 +91</option>
                    <option value="+1">🇨🇦 +1</option>
                    <option value="+971">🇦🇪 +971</option>
                    <option value="+61">🇦🇺 +61</option>
                    <option value="+49">🇩🇪 +49</option>
                  </select>
                  <input type="tel" name="phone" class="portal-input portal-input-phone" placeholder="Mobile Number" required>
                </div>
              </div>

              <div class="portal-form-group">
                <div class="portal-input-wrap has-icon">
                  <svg class="portal-input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg>
                  <input type="email" name="email" class="portal-input" placeholder="Email" required>
                </div>
              </div>
            </div>

            <!-- Row 3: Address Line 1 & Address Line 2 -->
            <div class="portal-form-grid">
              <div class="portal-form-group">
                <div class="portal-input-wrap">
                  <input type="text" name="address1" class="portal-input" placeholder="Address Line 1" required>
                </div>
              </div>
              <div class="portal-form-group">
                <div class="portal-input-wrap">
                  <input type="text" name="address2" class="portal-input" placeholder="Address Line 2">
                </div>
              </div>
            </div>

            <!-- Row 4: Country & City -->
            <div class="portal-form-grid">
              <div class="portal-form-group">
                <div class="portal-input-wrap">
                  <select name="country" class="portal-select" required aria-label="Select Country">
                    <option value="" disabled selected>Country</option>
                    <option value="United States">United States</option>
                    <option value="Canada">Canada</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="India">India</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="Australia">Australia</option>
                    <option value="Germany">Germany</option>
                    <option value="Other">Other Global Jurisdiction</option>
                  </select>
                </div>
              </div>
              <div class="portal-form-group">
                <div class="portal-input-wrap">
                  <input type="text" name="city" class="portal-input" placeholder="City" required>
                </div>
              </div>
            </div>

            <!-- Row 5: State & Zip Code -->
            <div class="portal-form-grid">
              <div class="portal-form-group">
                <div class="portal-input-wrap">
                  <input type="text" name="state" class="portal-input" placeholder="State" required>
                </div>
              </div>
              <div class="portal-form-group">
                <div class="portal-input-wrap">
                  <input type="text" name="zip" class="portal-input" placeholder="Zip Code (or Postal Code)" required>
                </div>
              </div>
            </div>

            <!-- Submit Button matching screenshot -->
            <div class="portal-form-actions">
              <button type="submit" class="btn btn-primary portal-btn-signup">Signup</button>
            </div>
          </form>
        </div>

        <!-- Prompt Link -->
        <div class="portal-switch-prompt">
          Already registered? <a href="<?php echo esc_url(home_url('/login/')); ?>">Log in here</a>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
