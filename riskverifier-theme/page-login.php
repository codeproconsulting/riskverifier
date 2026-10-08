<?php
/**
 * Template Name: Login Page
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
        <span class="banner-tagline">SECURE CLIENT ACCESS</span>
        <h1 class="banner-title">CLIENT LOGIN</h1>
        <div class="banner-breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
          <span class="sep">/</span>
          <span class="current">Login</span>
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
