<?php
/**
 * Template Name: Signup Page
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
        <span class="banner-tagline">ENTERPRISE ONBOARDING</span>
        <h1 class="banner-title">PORTAL SIGNUP</h1>
        <div class="banner-breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
          <span class="sep">/</span>
          <span class="current">Signup</span>
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
