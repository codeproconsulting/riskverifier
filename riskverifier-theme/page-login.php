<?php
/**
 * Template Name: Login Page
 *
 * @package RiskVerifier
 */

get_header();
?>
  <main>
    <!-- Top Banner matching screenshot -->
    <section class="portal-page-banner">
      <div class="container">
        <h1 class="portal-banner-title">Login</h1>
        <div class="portal-banner-breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
          <span class="sep">/</span>
          <span class="current">Login</span>
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
