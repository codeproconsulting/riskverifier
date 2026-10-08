<?php
/**
 * Template Name: About Us Page
 *
 * @package RiskVerifier
 */

get_header();
?>
  <main>
    <!-- Page Hero Banner -->
    <section class="portal-page-banner">
      <div class="container">
        <h1 class="portal-banner-title">About Us</h1>
        <div class="portal-banner-breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
          <span class="sep">/</span>
          <span class="current">About Us</span>
        </div>
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

    <!-- The Principles Behind Our Work -->
    <section class="about-principles-section">
      <div class="container">
        <div class="about-principles-title-wrap">
          <h2 class="about-principles-title">The Principles Behind Our Work</h2>
          <div class="about-title-underline"></div>
        </div>

        <div class="about-principles-grid">
          <!-- Card 1: Reliable Verification -->
          <div class="about-principle-card">
            <div class="about-principle-icon-box">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                <polyline points="9 12 11 14 15 10"></polyline>
              </svg>
            </div>
            <h3 class="about-principle-card-title">Reliable Verification</h3>
            <p class="about-principle-card-desc">
              We base reports on verified, authentic records sourced from official databases, court registries, and relevant authorities.
            </p>
          </div>

          <!-- Card 2: Comprehensive Screening -->
          <div class="about-principle-card">
            <div class="about-principle-icon-box">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                <path d="M8 12l2-3 2 4 2-2"></path>
              </svg>
            </div>
            <h3 class="about-principle-card-title">Comprehensive Screening</h3>
            <p class="about-principle-card-desc">
              From single checks to complete multi-vector inquiry portfolios, our inquiries leave no blind spots in risk analysis.
            </p>
          </div>

          <!-- Card 3: Practical Insights -->
          <div class="about-principle-card">
            <div class="about-principle-icon-box">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
                <path d="M3 10l6-4 6 5 6-7"></path>
              </svg>
            </div>
            <h3 class="about-principle-card-title">Practical Insights</h3>
            <p class="about-principle-card-desc">
              Clear findings presented in an executive, actionable format to directly support hiring, investment, and operational decisions.
            </p>
          </div>

          <!-- Card 4: Strict Confidentiality -->
          <div class="about-principle-card">
            <div class="about-principle-icon-box">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
              </svg>
            </div>
            <h3 class="about-principle-card-title">Strict Confidentiality</h3>
            <p class="about-principle-card-desc">
              We handle client and subject data with utmost security, strict encryption, and in strict compliance with global privacy regulations.
            </p>
          </div>

          <!-- Card 5: Business-Focused Approach -->
          <div class="about-principle-card">
            <div class="about-principle-icon-box">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"></path>
                <line x1="12" y1="12" x2="12.01" y2="12"></line>
              </svg>
            </div>
            <h3 class="about-principle-card-title">Business-Focused Approach</h3>
            <p class="about-principle-card-desc">
              Our solutions are designed around real-world business needs and commercial risk thresholds, not just data collection.
            </p>
          </div>

          <!-- Card 6: Global Jurisdiction Scope -->
          <div class="about-principle-card">
            <div class="about-principle-icon-box">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
              </svg>
            </div>
            <h3 class="about-principle-card-title">Global Jurisdiction Scope</h3>
            <p class="about-principle-card-desc">
              Active screening footprint across 100+ countries with localized expertise and on-the-ground capability.
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
