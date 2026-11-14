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
            <span class="ribbon-text">CLIENT PORTAL LOGIN</span>
          </h1>
        </div>
        <div class="banner-breadcrumbs">
          <a href="<?php echo home_url('/'); ?>">Home</a> <span class="sep">/</span> <span class="current">Login</span>
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
