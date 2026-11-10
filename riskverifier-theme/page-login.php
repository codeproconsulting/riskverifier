<?php
/**
 * Template Name: Login Page
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
            <span class="kicker-desc">SECURE CLIENT ACCESS</span>
          </div>

          <div class="wave-ribbon-title-wrap">
            <h1 class="wave-ribbon-title">
              <span class="ribbon-text">CLIENT LOGIN</span>
              <span class="ribbon-stripes" aria-hidden="true">
                <i></i><i></i><i></i>
              </span>
            </h1>
          </div>

          <div class="wave-breadcrumb-pill">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <span class="sep">/</span>
            <span class="current">Client Login</span>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!-- Portal Section -->
    <section class="portal-section">
      <div class="container">
        <div class="portal-card portal-card-login">
          <h2 class="portal-card-title">Login In Portal</h2>

          <form class="portal-form" id="portalLoginForm" onsubmit="event.preventDefault(); alert('Login functionality connected. Please enter your authorized credentials.');">
            <!-- Email Field -->
            <div class="portal-form-group">
              <label class="portal-form-label" for="loginEmail">Email Address</label>
              <div class="portal-input-wrap has-icon">
                <svg class="portal-input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                <input type="email" id="loginEmail" name="email" class="portal-input" placeholder="Email Address" required>
              </div>
            </div>

            <!-- Password Field -->
            <div class="portal-form-group">
              <label class="portal-form-label" for="loginPassword">Password</label>
              <div class="portal-input-wrap has-icon">
                <svg class="portal-input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
                <input type="password" id="loginPassword" name="password" class="portal-input" placeholder="Password" required>
              </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary portal-btn-submit">
              <span>Login</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </button>
          </form>
        </div>

        <!-- Prompt Link -->
        <div class="portal-switch-prompt">
          If you're not logged in, please <a href="<?php echo esc_url(home_url('/signup/')); ?>">Sign up</a>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
