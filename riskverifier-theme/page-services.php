<?php
/**
 * Template Name: Services Page
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
        <span class="banner-tagline">GLOBAL SCREENING &amp; RISK SOLUTIONS</span>
        <h1 class="banner-title">SERVICES</h1>
        <div class="banner-breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
          <span class="sep">/</span>
          <span class="current">Services</span>
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

    <!-- Services Hub Section (Favif Digital Console Layout) -->
    <section class="section section-white" id="services-hub">
      <div class="container">
        <!-- Section Header -->
        <div class="svc-header-container">
          <h2 class="svc-main-title">
            <span class="svc-title-light">OUR</span> CAPABILITIES
          </h2>
          <div class="svc-title-underline"></div>
          <p class="svc-header-desc">
            Evidence-based background screening, corporate due diligence, and risk intelligence across 100+ countries. Direct-source verified, legally compliant, and auditable.
          </p>
        </div>

        <!-- Interactive Console Layout -->
        <div class="services-console-layout">
          <!-- Left Sidebar Tabs -->
          <div class="services-console-sidebar" id="servicesConsoleSidebar">
            <button class="services-sidebar-tab active" data-target="criminal-records">
              <span class="tab-num">01</span>
              <div class="tab-text">
                <span class="tab-category">Legal Screening</span>
                <span class="tab-title">Criminal Records Check</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
            <button class="services-sidebar-tab " data-target="civil-records">
              <span class="tab-num">02</span>
              <div class="tab-text">
                <span class="tab-category">Legal Screening</span>
                <span class="tab-title">Civil Records Search</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
            <button class="services-sidebar-tab " data-target="credit-finance">
              <span class="tab-num">03</span>
              <div class="tab-text">
                <span class="tab-category">Financial Risk</span>
                <span class="tab-title">Credit & Finance Reports</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
            <button class="services-sidebar-tab " data-target="vital-records">
              <span class="tab-num">04</span>
              <div class="tab-text">
                <span class="tab-category">Identity Records</span>
                <span class="tab-title">Vital Records Verification</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
            <button class="services-sidebar-tab " data-target="identity-credentials">
              <span class="tab-num">05</span>
              <div class="tab-text">
                <span class="tab-category">Identity & Credentials</span>
                <span class="tab-title">Identity & Credentials Verification</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
            <button class="services-sidebar-tab " data-target="property-asset">
              <span class="tab-num">06</span>
              <div class="tab-text">
                <span class="tab-category">Asset Intelligence</span>
                <span class="tab-title">Property & Asset Searches</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
            <button class="services-sidebar-tab " data-target="driving-records">
              <span class="tab-num">07</span>
              <div class="tab-text">
                <span class="tab-category">Motor Vehicle Records</span>
                <span class="tab-title">Driving & Motor Vehicle Records (MVR)</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
            <button class="services-sidebar-tab " data-target="verifications-references">
              <span class="tab-num">08</span>
              <div class="tab-text">
                <span class="tab-category">HR & Employment</span>
                <span class="tab-title">Verifications & References</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
            <button class="services-sidebar-tab " data-target="due-diligence">
              <span class="tab-num">09</span>
              <div class="tab-text">
                <span class="tab-category">Corporate Intelligence</span>
                <span class="tab-title">Due Diligence & Sanctions Screening</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
            <button class="services-sidebar-tab " data-target="media-analytics">
              <span class="tab-num">10</span>
              <div class="tab-text">
                <span class="tab-category">Risk Intelligence</span>
                <span class="tab-title">Media Analytics</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
            <button class="services-sidebar-tab " data-target="bespoke-research">
              <span class="tab-num">11</span>
              <div class="tab-text">
                <span class="tab-category">Custom Intelligence</span>
                <span class="tab-title">Bespoke Research</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
            <button class="services-sidebar-tab " data-target="geopolitical-advisory">
              <span class="tab-num">12</span>
              <div class="tab-text">
                <span class="tab-category">Strategic Advisory</span>
                <span class="tab-title">Geopolitical Advisory</span>
              </div>
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="tab-arrow" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
              </svg>
            </button>
          </div>

          <!-- Right Showcase Panes -->
          <div class="services-console-showcase" id="servicesConsoleShowcase">
          <!-- Showcase Pane: Criminal Records Check -->
          <div class="service-showcase-pane" id="showcase-criminal-records" style="display: block;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/criminal-record-check.png" alt="Criminal Records Check">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">Legal Screening</span>
                <h2 class="showcase-title">Criminal Records Check</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: 24–72 hours</span>
            </div><p class="showcase-desc">Risk Verifier provides comprehensive criminal background check services to help organizations ensure safety, compliance, and informed decision-making. Our solutions verify criminal history, validate official certificates, and identify potential risks across multiple jurisdictions. We deliver accurate and confidential reports while complying with local legal and data protection requirements.</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/criminal-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Criminal Background Screening &amp; Verification</h4><div class="sub-card-desc"><p>It encompasses all three areas:</p><p>Criminal Record Checks — searching legally accessible Police/Court criminal records.</p><p>Criminal Conduct Checks — identifying relevant criminal proceedings or offense information where legally accessible.</p><p>Criminal Certificate Verification — verifying the authenticity and issuing authority of criminal conduct/clearance certificates.</p></div></div></div></div><h3 class="showcase-section-heading">Compliance &amp; Confidentiality</h3><div class="showcase-source-section"><p>Risk Verifier ensures:</p><ul><li>All services are conducted in accordance with applicable laws and privacy regulations in the respective countries.</li><li>Strict data privacy and confidentiality</li><li>Ethical and authorized data sourcing</li></ul></div><h3 class="showcase-section-heading">Why Choose Risk Verifier</h3><div class="showcase-source-section"><ul><li>Accurate and verified criminal data</li><li>Global screening capabilities</li><li>Fast turnaround (24–72 hours)</li><li>Secure and confidential reports</li><li>Trusted by businesses worldwide</li></ul></div><h3 class="showcase-section-heading">How It Works</h3><div class="showcase-source-section"><p>1. Submit your request</p><p>2. Select criminal check type</p><p>3. Provide subject details</p><p>4. Receive verified report</p></div>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('criminal-records')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Criminal Records Check" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          <!-- Showcase Pane: Civil Records Search -->
          <div class="service-showcase-pane" id="showcase-civil-records" style="display: none;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/civil-record-check.png" alt="Civil Records Search">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">Legal Screening</span>
                <h2 class="showcase-title">Civil Records Search</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: 2 to 7 days depending on country</span>
            </div><p class="showcase-desc">Risk Verifier provides comprehensive civil records searches to help businesses identify legal risks, financial disputes, and litigation history. Our civil background checks offer accurate insights into non-criminal legal matters across multiple jurisdictions.</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/civil-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Civil Record Checks</h4><div class="sub-card-desc"><p>Search civil court records to uncover lawsuits, disputes, and legal actions involving individuals or companies. This helps organizations identify potential risks before making business decisions</p><ul><li>Civil lawsuits and disputes</li><li>Court case details</li><li>Judgments and settlements</li><li>Plaintiff/defendant information</li><li>Legal history insights</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/civil-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Bankruptcy Records Check</h4><div class="sub-card-desc"><p>Identify individuals or businesses that have filed for bankruptcy. This report provides critical financial risk indicators and helps you evaluate creditworthiness and reliability.</p><ul><li>Bankruptcy filing status</li><li>Filing date and case details</li><li>Court jurisdiction</li><li>Type of bankruptcy (where applicable)</li><li>Financial risk indicators</li><li>Financial risk assessment</li><li>Lending decisions</li><li>Tenant screening</li><li>Business partnerships</li></ul></div></div></div></div><h3 class="showcase-section-heading">Compliance &amp; Confidentiality</h3><div class="showcase-source-section"><p>Risk Verifier ensures:</p><ul><li>All services are conducted in accordance with applicable laws and privacy regulations in the respective countries.</li><li>Strict data privacy and confidentiality</li><li>Ethical and authorized data sourcing</li></ul></div><h3 class="showcase-section-heading">Why Choose Risk Verifier</h3><div class="showcase-source-section"><ul><li>Accurate and verified criminal data</li><li>Global screening capabilities</li><li>Fast turnaround (2 to 7 days depending on country)</li><li>Secure and confidential reports</li><li>Trusted by businesses worldwide</li></ul></div><h3 class="showcase-section-heading">How It Works</h3><div class="showcase-source-section"><p>1. Submit your request</p><p>2. Select Civil record check type</p><p>3. Provide subject details</p><p>4. Receive verified report</p></div>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('civil-records')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Civil Records Search" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          <!-- Showcase Pane: Credit & Finance Reports -->
          <div class="service-showcase-pane" id="showcase-credit-finance" style="display: none;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/credit-record-check.png" alt="Credit & Finance Reports">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">Financial Risk</span>
                <h2 class="showcase-title">Credit &amp; Finance Reports</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: 2 to 7 days; may take longer depending on country</span>
            </div><p class="showcase-desc">Risk Verifier provides comprehensive credit and financial intelligence reports to help businesses assess risk, verify credibility, and make informed decisions.</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/credit-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Personal Credit Report</h4><div class="sub-card-desc"><p>Access individual credit data to evaluate financial reliability. Ideal for tenant screening, lending decisions, and identity verification.</p></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/credit-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Business Credit Report</h4><div class="sub-card-desc"><p>Get detailed insights into a company’s financial health, creditworthiness, and risk profile. Our business credit reports include credit scores, payment behavior, financial history, and risk indicators.</p><ul><li>Company credit score &amp; rating</li><li>Payment history &amp; trends</li><li>Outstanding debts &amp; liabilities</li><li>Financial stability analysis</li><li>Risk grading</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/credit-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Business Registration Search</h4><div class="sub-card-desc"><p>Verify the legal existence and registration details of a company. This service confirms whether a business is officially registered and compliant with local regulations.</p><ul><li>Company registration status</li><li>Registration number &amp; date</li><li>Legal structure</li><li>Registered address</li><li>Business activity details</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/credit-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Directorship Search</h4><div class="sub-card-desc"><p>Identify directors and key individuals associated with a company. This helps uncover hidden risks and connections between businesses.</p><ul><li>Director names &amp; profiles</li><li>Linked companies</li><li>Historical directorships</li><li>Corporate relationships</li></ul></div></div></div></div><h3 class="showcase-section-heading">Compliance &amp; Confidentiality</h3><div class="showcase-source-section"><p>Risk Verifier ensures:</p><ul><li>All services are conducted in accordance with applicable laws and privacy regulations in the respective countries.</li><li>Strict data privacy and confidentiality</li><li>Ethical and authorized data sourcing</li></ul></div><h3 class="showcase-section-heading">Why Choose Risk Verifier</h3><div class="showcase-source-section"><ul><li>Accurate and verified criminal data</li><li>Global screening capabilities</li><li>Normally it takes 2 to 7 days, although it may take longer depending on the Country</li><li>Secure and confidential reports</li><li>Trusted by businesses worldwide</li></ul></div><h3 class="showcase-section-heading">How It Works</h3><div class="showcase-source-section"><p>1. Submit your request</p><p>2. Select Credit &amp; Finance Report</p><p>3. Provide subject details</p><p>4. Receive verified report</p></div>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('credit-finance')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Credit & Finance Reports" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          <!-- Showcase Pane: Vital Records Verification -->
          <div class="service-showcase-pane" id="showcase-vital-records" style="display: none;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/vital-record-check.png" alt="Vital Records Verification">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">Identity Records</span>
                <h2 class="showcase-title">Vital Records Verification</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: 24 hours to 7 days depending on country</span>
            </div><p class="showcase-desc">Risk Verifier provides reliable vital records verification services to confirm key life events and identity information. These records are essential for legal compliance, identity validation, and due diligence processes.</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/vital-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">1. Birth Record Verification</h4><div class="sub-card-desc"><p>Verify an individual’s birth details to confirm identity, age, and nationality. This service ensures the authenticity of official birth records.</p><ul><li>Full name verification</li><li>Date and place of birth</li><li>Registration details</li><li>Issuing authority validation</li><li>Record authenticity check</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/vital-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">2. Death Record Verification</h4><div class="sub-card-desc"><p>Confirm official death records for individuals. This service is essential for legal, financial, and insurance-related processes.</p><ul><li>Date of death confirmation</li><li>Place of death</li><li>Registration details</li><li>Issuing authority verification</li><li>Record authenticity</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/vital-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">3. Marriage Record Verification</h4><div class="sub-card-desc"><p>Verify marital status and marriage records for individuals. This service confirms the legality and authenticity of marital relationships.</p><ul><li>Marriage status confirmation</li><li>Spouse details</li><li>Date and place of marriage</li><li>Registration authority verification</li><li>Record validation</li></ul></div></div></div></div><h3 class="showcase-section-heading">Compliance &amp; Confidentiality</h3><div class="showcase-source-section"><p>Risk Verifier ensures:</p><ul><li>All services are conducted in accordance with applicable laws and privacy regulations in the respective countries.</li><li>Strict data privacy and confidentiality</li><li>Ethical and authorized data sourcing</li></ul></div><h3 class="showcase-section-heading">Why Choose Risk Verifier</h3><div class="showcase-source-section"><ul><li>Access to official and trusted sources</li><li>Accurate and verified records</li><li>Fast turnaround times (2 to 7 days)</li><li>Confidential and secure processing</li><li>Global verification expertise</li></ul></div><h3 class="showcase-section-heading">How It Works</h3><div class="showcase-source-section"><p>1. Submit your request</p><p>2. Select record type</p><p>3. Provide required details</p><p>4. Receive verified report</p></div><h3 class="showcase-section-heading">FAQ</h3><details class="showcase-faq"><summary>What are vital records?</summary><p>Vital records include birth, death, and marriage certificates used to verify identity and legal status.</p></details><details class="showcase-faq"><summary>How long does verification take?</summary><p>Most requests are completed within 24 hours to 7 days depending on the Country.</p></details><details class="showcase-faq"><summary>Are these records legally valid?</summary><p>Yes, we verify records through official and authorized sources.</p></details>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('vital-records')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Vital Records Verification" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          <!-- Showcase Pane: Identity & Credentials Verification -->
          <div class="service-showcase-pane" id="showcase-identity-credentials" style="display: none;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/identity-check.png" alt="Identity & Credentials Verification">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">Identity & Credentials</span>
                <h2 class="showcase-title">Identity &amp; Credentials Verification</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: 24 hours to 7 days depending on country and document type</span>
            </div><p class="showcase-desc">Risk Verifier provides credible identity and credential verification services to help organizations confirm the authenticity of personal identification documents. Our solutions reduce fraud, strengthen compliance, and ensure that individuals are who they claim to be.</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/identity-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Government ID Verification</h4><div class="sub-card-desc"><p>Verify the authenticity of government-issued identification documents such as national ID cards, driver IDs, and other official identity records.</p><ul><li>Government ID authenticity check</li><li>Name and identity matching</li><li>Document validity verification</li><li>Issuing authority confirmation</li><li>Passport Verification</li><li>Legal status/citizenship</li></ul></div></div></div></div><h3 class="showcase-section-heading">Security &amp; Compliance</h3><div class="showcase-source-section"><p>Risk Verifier ensures:</p><ul><li>All services are conducted in accordance with applicable laws and privacy regulations in the respective countries.</li><li>Strict identity protection protocols</li><li>Secure and encrypted data handling</li><li>Compliance with global verification laws</li><li>Strict data privacy and confidentiality</li><li>Ethical and authorized data sourcing</li></ul></div><h3 class="showcase-section-heading">Why Choose Risk Verifier</h3><div class="showcase-source-section"><ul><li>Highly accurate identity validation</li><li>Global document verification capability</li><li>Fast processing times (24 Hours to 7 days)</li><li>Fraud detection intelligence</li><li>Trusted by financial and corporate sectors</li></ul></div><h3 class="showcase-section-heading">How It Works</h3><div class="showcase-source-section"><p>1. Submit ID or passport details</p><p>2. Select verification type</p><p>3. We validate through authorized sources</p><p>4. Receive secure verification report</p></div><h3 class="showcase-section-heading">FAQ</h3><details class="showcase-faq"><summary>What is identity verification?</summary><p>It is the process of confirming that a person’s identity documents are real and belong to them.</p></details><details class="showcase-faq"><summary>How long does verification take?</summary><p>Most checks are completed within 24 hours to 7 days depending on country and document type.</p></details>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('identity-credentials')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Identity & Credentials Verification" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          <!-- Showcase Pane: Property & Asset Searches -->
          <div class="service-showcase-pane" id="showcase-property-asset" style="display: none;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/property-record-check.png" alt="Property & Asset Searches">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">Asset Intelligence</span>
                <h2 class="showcase-title">Property &amp; Asset Searches</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: 2 to 7 days; may take longer depending on country</span>
            </div><p class="showcase-desc">Risk Verifier provides reliable property and asset verification services to help businesses assess financial strength, confirm ownership, and prevent fraud. Our solutions enable organizations to verify physical addresses and identify property ownership details across multiple jurisdictions.</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/property-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Physical Address Confirmation</h4><div class="sub-card-desc"><p>Verify whether a given address exists and is associated with an individual or business. This service confirms location authenticity and helps detect fraudulent or fake addresses.</p><ul><li>Address existence verification</li><li>Occupancy confirmation (where available)</li><li>Standardized address validation</li><li>Location authenticity check</li><li>Site Visit</li><li>Risk indicators for suspicious addresses</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/property-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Property Ownership Search</h4><div class="sub-card-desc"><p>Identify ownership details of residential or commercial properties. This service helps verify assets and assess financial credibility.</p><ul><li>Property ownership details</li><li>Owner name and records</li><li>Property type (residential/commercial)</li><li>Registration and title information</li><li>Historical ownership data (where available)</li></ul></div></div></div></div><h3 class="showcase-section-heading">Compliance &amp; Confidentiality</h3><div class="showcase-source-section"><p>Risk Verifier ensures:</p><ul><li>All services are conducted in accordance with applicable laws and privacy regulations in the respective countries.</li><li>Strict data privacy and confidentiality</li><li>Ethical and authorized data sourcing</li></ul></div><h3 class="showcase-section-heading">Why Choose Risk Verifier</h3><div class="showcase-source-section"><ul><li>Accurate property and asset data</li><li>Global verification capabilities</li><li>Fast and reliable reporting</li><li>Easy-to-read insights</li><li>Trusted by financial and legal professionals</li></ul></div><h3 class="showcase-section-heading">How It Works</h3><div class="showcase-source-section"><p>1. Submit property or address details</p><p>2. Select service type</p><p>3. We verify official records</p><p>4. Receive your report</p></div><h3 class="showcase-section-heading">FAQ</h3><details class="showcase-faq"><summary>What is a property ownership search?</summary><p>It identifies the legal owner of a property along with related registration details.</p></details><details class="showcase-faq"><summary>Why is address verification important?</summary><p>It helps prevent fraud and ensures accurate identity and location validation.</p></details><details class="showcase-faq"><summary>How long does it take?</summary><p>Normally (2 to 7 days) may take longer depending on the Country.</p></details>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('property-asset')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Property & Asset Searches" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          <!-- Showcase Pane: Driving & Motor Vehicle Records (MVR) -->
          <div class="service-showcase-pane" id="showcase-driving-records" style="display: none;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/driving-record-check.png" alt="Driving & Motor Vehicle Records (MVR)">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">Motor Vehicle Records</span>
                <h2 class="showcase-title">Driving &amp; Motor Vehicle Records (MVR)</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: 24 hours to 7 days depending on country</span>
            </div><p class="showcase-desc">Risk Verifier provides reliable driving and motor vehicle record (MVR) checks to help businesses ensure road safety, regulatory compliance, and responsible hiring. Our services verify driver credentials and identify past violations, helping organizations reduce risk and maintain operational standards.</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/driving-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Driver License Verification</h4><div class="sub-card-desc"><p>Confirm the authenticity and status of a driver’s license. This service verifies whether a license is valid, active, and issued by the appropriate authority.</p><ul><li>License validity and status</li><li>Issuing authority verification</li><li>Expiry date confirmation</li><li>License class/category</li><li>Identity matching</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/driving-record-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Traffic Violation Check</h4><div class="sub-card-desc"><p>Access driving history and identify traffic violations, penalties, or infractions associated with an individual.</p><ul><li>Traffic offense records</li><li>Violation history</li><li>Fines and penalties (where available)</li><li>License suspension or points (if applicable)</li><li>Risk profile indicators</li></ul></div></div></div></div><h3 class="showcase-section-heading">Compliance &amp; Safety</h3><div class="showcase-source-section"><p>Risk Verifier ensures:</p><ul><li>Compliance with local transport regulations</li><li>Secure and confidential handling of driver data</li><li>Accurate reporting from authorized sources</li></ul></div><h3 class="showcase-section-heading">Why Choose Risk Verifier</h3><div class="showcase-source-section"><ul><li>All services are conducted in accordance with applicable laws and privacy regulations in the respective countries.</li><li>Verified motor vehicle records</li><li>Fast turnaround times</li><li>Multi-country coverage</li><li>Easy-to-understand reports</li><li>Trusted by logistics and transportation companies</li></ul></div><h3 class="showcase-section-heading">How It Works</h3><div class="showcase-source-section"><p>1. Submit driver details</p><p>2. Select verification service</p><p>3. We check official databases</p><p>4. Receive detailed report</p></div><h3 class="showcase-section-heading">FAQ</h3><details class="showcase-faq"><summary>What is a motor vehicle record (MVR)?</summary><p>An MVR contains a driver’s license status, driving history, and any traffic violations.</p></details><details class="showcase-faq"><summary>Why is driver license verification important?</summary><p>It ensures the driver is legally authorized and reduces risk for employers.</p></details><details class="showcase-faq"><summary>How long does it take?</summary><p>Most reports are delivered within 24 hours to 7 days depending on country</p></details>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('driving-records')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Driving & Motor Vehicle Records (MVR)" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          <!-- Showcase Pane: Verifications & References -->
          <div class="service-showcase-pane" id="showcase-verifications-references" style="display: none;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/reference-check.png" alt="Verifications & References">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">HR & Employment</span>
                <h2 class="showcase-title">Verifications &amp; References</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: 2 to 7 days; may take longer depending on country and educational institution SOPs</span>
            </div><p class="showcase-desc">Risk Verifier provides comprehensive verification and reference checking services to help organizations make safe, informed, and compliant decisions. We validate personal, educational, employment, and professional records using trusted and authorized data sources across multiple countries.</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/reference-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">1. Address Verification</h4><div class="sub-card-desc"><p>Confirm the authenticity of residential or business addresses to ensure accurate identity and location details.</p><ul><li>Address existence validation</li><li>Residential/business confirmation</li><li>Formatting and postal verification</li><li>Fraud risk detection</li><li>Site Visit for verification</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/reference-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">2. Education Verification</h4><div class="sub-card-desc"><p>Verify academic qualifications and degrees to ensure candidates hold genuine educational credentials.</p><ul><li>Degree and diploma verification</li><li>Institution authenticity check</li><li>Graduation date confirmation</li><li>Qualification validation</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/reference-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">3. Employment Verification</h4><div class="sub-card-desc"><p>Confirm previous employment history, job titles, and tenure with past employers.</p><ul><li>Job title verification</li><li>Employment duration check</li><li>Employer confirmation</li><li>Work history validation</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/reference-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">4. Personal References</h4><div class="sub-card-desc"><p>Validate personal references provided by candidates to ensure authenticity and reliability.</p><ul><li>Reference identity confirmation</li><li>Relationship validation</li><li>Contact authenticity checks</li><li>Behavioral insights (where available)</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/reference-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">5. Professional Association Verification</h4><div class="sub-card-desc"><p>Verify membership in professional organizations and associations relevant to a candidate’s field.</p><ul><li>Membership validation</li><li>Association authenticity check</li><li>Active/inactive status</li><li>Industry affiliation confirmation</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/reference-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">6. Professional License Verification</h4><div class="sub-card-desc"><p>Confirm the validity of professional licenses such as medical, legal, engineering, or financial certifications.</p><ul><li>License authenticity check</li><li>Issuing authority verification</li><li>Expiry and status validation</li><li>Disciplinary action checks (if available)</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/reference-check.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">7. Professional Reference Verification</h4><div class="sub-card-desc"><p>Validate references from professional contacts to confirm skills, experience, and work behavior.</p><ul><li>Employer reference confirmation</li><li>Skill validation</li><li>Performance feedback checks</li><li>Reference authenticity</li></ul></div></div></div></div><h3 class="showcase-section-heading">Compliance &amp; Security</h3><div class="showcase-source-section"><p>Risk Verifier ensures:</p><ul><li>Secure handling of sensitive personal data</li><li>Ethical and authorized data sourcing</li><li>Confidential reporting standards</li><li>All services are conducted in accordance with applicable laws and privacy regulations in the respective the Countries and SOPs of educational institutions.</li></ul></div><h3 class="showcase-section-heading">Why Choose Risk Verifier</h3><div class="showcase-source-section"><ul><li>Accurate multi-country verification service</li><li>Trusted by HR &amp; compliance teams</li><li>Fraud prevention focused</li><li>Easy-to-read verification reports</li></ul></div><h3 class="showcase-section-heading">How It Works</h3><div class="showcase-source-section"><p>1. Submit candidate details</p><p>2. Select verification type(s)</p><p>3. We validate through official sources</p><p>4. Receive detailed verification report</p></div><h3 class="showcase-section-heading">FAQ</h3><details class="showcase-faq"><summary>Why is employment verification important?</summary><p>It ensures candidates have genuine work experience and reduces hiring risk.</p></details><details class="showcase-faq"><summary>How long does verification take?</summary><p>Normally, it takes 2 to 7 days, although it may take longer depending on the Country and Educational Institutions SOPs.</p></details><details class="showcase-faq"><summary>Are your verification services compliant?</summary><p>Yes, we follow international standards including GDPR and FCRA where applicable.</p></details>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('verifications-references')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Verifications & References" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          <!-- Showcase Pane: Due Diligence & Sanctions Screening -->
          <div class="service-showcase-pane" id="showcase-due-diligence" style="display: none;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/due-diligence.png" alt="Due Diligence & Sanctions Screening">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">Corporate Intelligence</span>
                <h2 class="showcase-title">Due Diligence</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: One week to several weeks, depending on scope and jurisdictions</span>
            </div><p class="showcase-desc">Risk Verifier offers comprehensive due diligence and media screening services to help organizations identify reputational, financial, and regulatory risks. Our solutions include sanctions checks, adverse media searches, and global risk intelligence. We support businesses in maintaining compliance with international regulations while protecting their reputation and operations.</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/due-diligence.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Sanctions &amp; Adverse Media Search</h4><div class="sub-card-desc"><p>This service combines global sanctions screening with adverse media analysis to identify individuals or entities linked to financial crime, regulatory violations, or negative press coverage.</p><ul><li>Global sanctions list screening (OFAC, UN, EU, etc.)</li><li>Adverse media monitoring (negative news coverage)</li><li>Politically Exposed Persons (PEPs) screening</li><li>Risk classification and alerts</li></ul></div></div></div></div><h3 class="showcase-section-heading">Compliance &amp; Risk Management</h3><div class="showcase-source-section"><p>Risk Verifier helps you comply with:</p><ul><li>AML (Anti-Money Laundering) regulations</li><li>KYC (Know Your Customer) requirements</li><li>International sanctions frameworks</li><li>Data protection laws (GDPR, etc.)</li></ul></div><h3 class="showcase-section-heading">Why Choose Risk Verifier</h3><div class="showcase-source-section"><ul><li>Accurate and actionable insights</li><li>Fast and secure reporting</li><li>Trusted by financial and corporate sectors</li></ul></div><h3 class="showcase-section-heading">How It Works</h3><div class="showcase-source-section"><p>1. Submit entity or individual details</p><p>2. Select due diligence service</p><p>3. We perform global screening</p><p>4. Receive detailed risk report</p></div><h3 class="showcase-section-heading">FAQ</h3><details class="showcase-faq"><summary>What is adverse media screening?</summary><p>It involves searching global news sources for negative information related to an individual or business.</p></details><details class="showcase-faq"><summary>How long does due diligence report take?</summary><p>The turnaround time typically ranges from one week to several weeks, depending on the scope, complexity, jurisdictions involved, and information required for the report.</p></details>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('due-diligence')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Due Diligence & Sanctions Screening" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          <!-- Showcase Pane: Media Analytics -->
          <div class="service-showcase-pane" id="showcase-media-analytics" style="display: none;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/media-analytics.png" alt="Media Analytics">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">Risk Intelligence</span>
                <h2 class="showcase-title">Media Analytics</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: Contact us for timing</span>
            </div><p class="showcase-desc">We track traditional and digital media across a wide range of sources, languages and geographies to bring you a clear picture of how events are being reported and discussed. Whether it&#x27;s mainstream press, niche publications or international outlets, our analysts distil large volumes of content into meaningful patterns, highlighting key messages and stakeholder perspectives. Our monitoring covers ongoing developments and long-term trends, providing you with timely awareness of what&#x27;s gaining traction and why it matters.</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/media-analytics.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Digital Media</h4><div class="sub-card-desc"><p>Our digital media analytics offer:</p><ul><li>Analysis of social media platforms</li><li>Tracking of narratives</li><li>Thematic clustering and visualization of conversations</li><li>Single and multi-regional focus</li><li>A blend of technological and human judgement to detect what algorithms alone often miss</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/media-analytics.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">TV Channels and Newspapers</h4><div class="sub-card-desc"><p>Traditional media insights help you decode the stories that influence public opinion, policy discourse and reputational dynamics. We cover:</p><ul><li>Wide range of sources, languages and geographies</li><li>Mainstream press, niche publications or international outlets</li><li>Distilling large volumes of content into meaningful patterns</li><li>Highlights of key messages and stakeholder perspectives</li><li>Source credibility assessments</li><li>Thematic mapping</li><li>Anticipation of reputational risks</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/media-analytics.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Customized Reports</h4><div class="sub-card-desc"><p>We provide fully customised digital media analysis, aligned with your strategic priorities. Oru reports include:</p><ul><li>Daily updates</li><li>Rapid alerts</li><li>Long-term campaign tracking</li><li>In-depth periodic analyses</li></ul></div></div></div></div><h3 class="showcase-section-heading">FAQ</h3><details class="showcase-faq"><summary>What is adverse media screening?</summary><p>It involves searching global news sources for negative information related to an individual or business.</p></details><details class="showcase-faq"><summary>What are sanctions lists?</summary><p>Sanctions lists include individuals or entities restricted by governments or international organizations.</p></details><details class="showcase-faq"><summary>Why is sanctions screening important?</summary><p>It helps businesses avoid legal penalties, financial risks, and reputational damage.</p></details>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('media-analytics')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Media Analytics" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          <!-- Showcase Pane: Bespoke Research -->
          <div class="service-showcase-pane" id="showcase-bespoke-research" style="display: none;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/bespoke-research.png" alt="Bespoke Research">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">Custom Intelligence</span>
                <h2 class="showcase-title">Bespoke Research</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: Contact us for timing</span>
            </div><p class="showcase-desc">Our research is designed to keep you ahead of the curve in an increasingly complex world. Our research reports provide: • In-depth analysis of the geopolitical and social developments • Clear and concise assessments • Highlights on emerging risks and opportunities • From periodic situation reports to thematic assessments</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/bespoke-research.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Tailored to Your Needs</h4><div class="sub-card-desc"><p>For clients with specific questions, unique requirements or strategic priorities, our bespoke research service offers fully customised solutions. We work closely with you to: • Understand the sensitive to the context of your organisation</p><ul><li>Define the scope, objectives and intended outcomes of each project</li><li>Help you enter a new market, assess reputational risks or prepare for policy engagement</li><li>Provide depth, nuance and strategic value</li><li>Draw on our interdisciplinary expertise</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/bespoke-research.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Tailored to Your Format</h4><div class="sub-card-desc"><p>Bespoke research can range from:</p><ul><li>Short-term briefings</li><li>Long-form studies</li><li>Regional case studies</li><li>Comprehensive policy impact assessments</li></ul></div></div></div></div><h3 class="showcase-section-heading">FAQ</h3><details class="showcase-faq"><summary>What is adverse media screening?</summary><p>It involves searching global news sources for negative information related to an individual or business.</p></details><details class="showcase-faq"><summary>What are sanctions lists?</summary><p>Sanctions lists include individuals or entities restricted by governments or international organizations.</p></details><details class="showcase-faq"><summary>Why is sanctions screening important?</summary><p>It helps businesses avoid legal penalties, financial risks, and reputational damage.</p></details>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('bespoke-research')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Bespoke Research" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          <!-- Showcase Pane: Geopolitical Advisory -->
          <div class="service-showcase-pane" id="showcase-geopolitical-advisory" style="display: none;">
<div class="showcase-header-row">
              <div class="showcase-icon-badge">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/geopolitical-advisory.png" alt="Geopolitical Advisory">
              </div>
              <div class="showcase-title-area">
                <span class="showcase-category-pill">Strategic Advisory</span>
                <h2 class="showcase-title">Geopolitical Advisory</h2>
              </div>
              <span class="showcase-turnaround-badge">Turnaround: Contact us for timing</span>
            </div><p class="showcase-desc">In today&#x27;s volatile environment, having access to high-quality research isn’t just an advantage, it&#x27;s a necessity. We support you with the advisory you need to navigate uncertainty and seize opportunities.</p><h3 class="showcase-section-heading">Service details</h3><div class="showcase-subservices-grid"><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/geopolitical-advisory.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Geopolitical Analysis</h4><div class="sub-card-desc"><p>Our geopolitical advisory offers:</p><ul><li>Analysis of political, economic and security developments</li><li>Monitoring of regional and global geopolitical trends</li><li>Assessment of key stakeholders, interests and strategic dynamics</li><li>Identification of emerging risks and opportunities</li><li>Scenario analysis and forward-looking assessments</li><li>A blend of technological tools and human judgement to provide depth, context and nuance</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/geopolitical-advisory.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Country and Regional Assessments</h4><div class="sub-card-desc"><p>Our country and regional insights help you understand the political and strategic environments that shape markets and policy. We cover:</p><ul><li>Political and institutional developments</li><li>Regional power dynamics and international relations</li><li>Government and stakeholder assessments</li><li>Policy and regulatory developments</li><li>Security and stability considerations</li><li>Anticipation of geopolitical risks and potential disruptions</li></ul></div></div></div><div class="showcase-sub-card"><div class="sub-card-icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/geopolitical-advisory.png" alt=""></div><div class="sub-card-text"><h4 class="sub-card-title">Strategic Briefings</h4><div class="sub-card-desc"><p>We provide tailored geopolitical briefings aligned with your strategic priorities. Our briefings include:</p><ul><li>Rapid assessments of emerging developments</li><li>Executive briefings</li><li>Early-warning alerts</li><li>Scenario and contingency assessments</li><li>Periodic geopolitical updates</li><li>In-depth thematic analyses</li></ul></div></div></div></div><h3 class="showcase-section-heading">FAQ</h3><details class="showcase-faq"><summary>What is adverse media screening?</summary><p>It involves searching global news sources for negative information related to an individual or business.</p></details><details class="showcase-faq"><summary>What are sanctions lists?</summary><p>Sanctions lists include individuals or entities restricted by governments or international organizations.</p></details><details class="showcase-faq"><summary>Why is sanctions screening important?</summary><p>It helps businesses avoid legal penalties, financial risks, and reputational damage.</p></details>
<div class="showcase-actions">
              <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-md">
                Request This Verification Check
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14"></path><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button class="btn btn-secondary btn-md" onclick="openServiceModal('geopolitical-advisory')">
                Quick Summary &amp; Scope
              </button>
              <a href="https://wa.me/13862431035?text=Hello%20Risk%20Verifier%2C%20I%20would%20like%20to%20inquire%20about%20Geopolitical Advisory" target="_blank" class="btn btn-outline btn-md">
                Direct WhatsApp Inquiry
              </a>
            </div>
          </div>
          </div>
        </div>

      </div>
    </section>

    <!-- 5-Step Verification Process Section -->
    <section class="section section-white" id="how-it-works">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">How Risk Verification Works</h2>
          <p class="section-subtitle">
            A secure, streamlined 5-step process delivering accurate findings while maintaining strict compliance and confidentiality.
          </p>
        </div>

        <div class="timeline-process-container">
          <!-- Animated Vertical Track -->
          <div class="process-timeline-track">
            <div class="process-timeline-progress"></div>
          </div>

          <div class="process-timeline-items">
            
            <!-- Step 01 -->
            <div class="process-timeline-row step-item-1">
              <div class="timeline-node">
                <div class="timeline-node-inner"></div>
              </div>
              <div class="timeline-connector"></div>

              <div class="process-pill-card">
                <div class="pill-number-wrap">
                  <div class="pill-number-ring">
                    <div class="pill-number-circle">01</div>
                  </div>
                </div>

                <div class="pill-card-content">
                  <h3 class="pill-card-title">Submit Your Request</h3>
                  <p class="pill-card-desc">
                    Tell us what you need to verify and provide the relevant individual, company, document, property, or other subject details. Required authorization or consent is collected securely.
                  </p>
                </div>

                <div class="pill-icon-wrap" title="Request Submission">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="12" y1="18" x2="12" y2="12"></line>
                    <line x1="9" y1="15" x2="15" y2="15"></line>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Step 02 -->
            <div class="process-timeline-row step-item-2">
              <div class="timeline-node">
                <div class="timeline-node-inner"></div>
              </div>
              <div class="timeline-connector"></div>

              <div class="process-pill-card">
                <div class="pill-number-wrap">
                  <div class="pill-number-ring">
                    <div class="pill-number-circle">02</div>
                  </div>
                </div>

                <div class="pill-card-content">
                  <h3 class="pill-card-title">Select Your Verification Services</h3>
                  <p class="pill-card-desc">
                    Choose the checks that match your requirements—from identity, criminal, and civil records to credit, driving records, vital records, due diligence, and bespoke research.
                  </p>
                </div>

                <div class="pill-icon-wrap" title="Service Selection">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 11 12 14 22 4"></polyline>
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Step 03 -->
            <div class="process-timeline-row step-item-3">
              <div class="timeline-node">
                <div class="timeline-node-inner"></div>
              </div>
              <div class="timeline-connector"></div>

              <div class="process-pill-card">
                <div class="pill-number-wrap">
                  <div class="pill-number-ring">
                    <div class="pill-number-circle">03</div>
                  </div>
                </div>

                <div class="pill-card-content">
                  <h3 class="pill-card-title">We Research, Verify & Assess</h3>
                  <p class="pill-card-desc">
                    Our team queries authorized official registries, court archives, credit bureaus, and global sanctions databases to undertake tailored research and risk analysis.
                  </p>
                </div>

                <div class="pill-icon-wrap" title="Research & Verification">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    <path d="M11 8v6"></path>
                    <path d="M8 11h6"></path>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Step 04 -->
            <div class="process-timeline-row step-item-4">
              <div class="timeline-node">
                <div class="timeline-node-inner"></div>
              </div>
              <div class="timeline-connector"></div>

              <div class="process-pill-card">
                <div class="pill-number-wrap">
                  <div class="pill-number-ring">
                    <div class="pill-number-circle">04</div>
                  </div>
                </div>

                <div class="pill-card-content">
                  <h3 class="pill-card-title">Receive Your Verified Report</h3>
                  <p class="pill-card-desc">
                    Receive a clear, evidentiary, detailed report presenting verified information and objective risk indicators designed to evaluate credibility and compliance.
                  </p>
                </div>

                <div class="pill-icon-wrap" title="Verified Report">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <polyline points="9 12 11 14 15 10"></polyline>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Step 05 -->
            <div class="process-timeline-row step-item-5">
              <div class="timeline-node">
                <div class="timeline-node-inner"></div>
              </div>
              <div class="timeline-connector"></div>

              <div class="process-pill-card">
                <div class="pill-number-wrap">
                  <div class="pill-number-ring">
                    <div class="pill-number-circle">05</div>
                  </div>
                </div>

                <div class="pill-card-content">
                  <h3 class="pill-card-title">Make Confident Decisions</h3>
                  <p class="pill-card-desc">
                    Use verified intelligence to support safer hiring, stronger due diligence, fraud prevention, financial transactions, and proactive risk management.
                  </p>
                </div>

                <div class="pill-icon-wrap" title="Confident Decisions">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                  </svg>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div style="margin-top: 40px; text-align: center;">
          <div style="display: inline-block; padding: 14px 26px; background-color: #ffffff; border: 1.5px solid #083d77; border-radius: 12px; font-size: 0.9rem; color: #083d77; font-weight: 700;">
            <strong>Turnaround:</strong> Timing varies by service and country. See each service for its published timeframe.
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Risk Verifier -->
    <section class="section section-why-dark">
      <!-- Circuit Cyber Glow Watermark at Corners -->
      <div class="circuit-decoration circuit-left" aria-hidden="true">
        <svg width="320" height="180" viewBox="0 0 320 180" fill="none">
          <path d="M0 150 H100 L140 110 H220 L240 90 H300" stroke="#06b6d4" stroke-width="1.5" stroke-opacity="0.3" stroke-dasharray="4 4"/>
          <path d="M0 170 H130 L160 140 H250 L270 120 H320" stroke="#38bdf8" stroke-width="1.5" stroke-opacity="0.25"/>
          <path d="M40 180 L80 140 H130" stroke="#0ea5e9" stroke-width="1" stroke-opacity="0.2"/>
          <circle cx="300" cy="90" r="4" fill="#06b6d4" fill-opacity="0.5"/>
          <circle cx="220" cy="110" r="3" fill="#38bdf8" fill-opacity="0.5"/>
          <circle cx="270" cy="120" r="3" fill="#06b6d4" fill-opacity="0.4"/>
        </svg>
      </div>
      <div class="circuit-decoration circuit-right" aria-hidden="true">
        <svg width="320" height="180" viewBox="0 0 320 180" fill="none">
          <path d="M320 150 H220 L180 110 H100 L80 90 H20" stroke="#06b6d4" stroke-width="1.5" stroke-opacity="0.3" stroke-dasharray="4 4"/>
          <path d="M320 170 H190 L160 140 H70 L50 120 H0" stroke="#38bdf8" stroke-width="1.5" stroke-opacity="0.25"/>
          <path d="M280 180 L240 140 H190" stroke="#0ea5e9" stroke-width="1" stroke-opacity="0.2"/>
          <circle cx="20" cy="90" r="4" fill="#06b6d4" fill-opacity="0.5"/>
          <circle cx="100" cy="110" r="3" fill="#38bdf8" fill-opacity="0.5"/>
          <circle cx="50" cy="120" r="3" fill="#06b6d4" fill-opacity="0.4"/>
        </svg>
      </div>

      <div class="container" style="position: relative; z-index: 2;">
        <div class="section-header">
          <h2 class="section-title">Why Global Organizations Choose Us</h2>
          <p class="section-subtitle">
            Every business relationship and hiring decision carries risk. We make that risk transparent, manageable, and measurable.
          </p>
        </div>

        <div class="why-grid">
          <div class="why-card">
            <div class="why-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </div>
            <h4>Reliable Verification</h4>
            <p>We source information directly from government registers, verified police bureaus, and authorized court systems to ensure utmost accuracy.</p>
          </div>

          <div class="why-card">
            <div class="why-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><path d="M9 15l2 2 4-4"></path></svg>
            </div>
            <h4>Comprehensive Screening</h4>
            <p>Bring 12 different risk screening dimensions into a single unified dashboard, eliminating the need to coordinate multiple vendors.</p>
          </div>

          <div class="why-card">
            <div class="why-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
            </div>
            <h4>Practical Insights</h4>
            <p>We don't just dump raw data. We deliver clear, risk-weighted executive summaries that enable immediate executive and HR decisions.</p>
          </div>

          <div class="why-card">
            <div class="why-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            </div>
            <h4>Strict Confidentiality</h4>
            <p>Subject and client data is protected with bank-grade security and treated with discrete protocols conforming to GDPR and regional privacy laws.</p>
          </div>

          <div class="why-card">
            <div class="why-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
            </div>
            <h4>100+ Countries Coverage</h4>
            <p>Whether you need a criminal check in North America, credential validation in Asia, or due diligence in Europe, we have on-ground capability.</p>
          </div>

          <div class="why-card">
            <div class="why-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
            </div>
            <h4>Speed & Dedication</h4>
            <p>Fast turnaround times with dedicated account managers and direct WhatsApp lines for urgent, time-sensitive executive vetting.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Verification Request & Quote Section -->
    <section class="section quote-section" id="quote-form-section">
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
                    <input type="checkbox" name="services" value="criminal-records" checked>
                    <span>Criminal Records</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="civil-records">
                    <span>Civil Records</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="credit-finance" checked>
                    <span>Credit & Finance</span>
                  </label>
                  <label class="checkbox-pill">
                    <input type="checkbox" name="services" value="identity-credentials" checked>
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
                    <strong id="selectedCount" style="color:#083d77; font-size:1.1rem;">3</strong>
                  </li>
                  <li class="summary-item">
                    <span>Estimated Turnaround:</span>
                    <strong id="selectedTurnaround">24 – 48 Hours</strong>
                  </li>
                  <li class="summary-item">
                    <span>Coverage Scope:</span>
                    <strong>100+ Countries</strong>
                  </li>
                  <li class="summary-item">
                    <span>Compliance Protocol:</span>
                    <strong>FCRA & GDPR Ready</strong>
                  </li>
                </ul>

                <div style="margin-bottom: 20px;">
                  <span style="font-size:0.8rem; font-weight:700; color:rgba(8,61,119,0.7); text-transform:uppercase; letter-spacing:0.04em; display:block; margin-bottom:8px;">Included in Request:</span>
                  <ul id="selectedServicesList" style="list-style:none; display:flex; flex-direction:column; gap:6px;">
                    <!-- Populated dynamically via JS -->
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

    <!-- Regional Offices Showcase -->
    <section class="section section-white" id="offices">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Our Regional Offices</h2>
          <p class="section-subtitle">
            Local knowledge with global capability. Reach out directly to our dedicated regional teams across North America, Europe, and Asia.
          </p>
        </div>

        <div class="offices-grid">
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
              <a href="tel:+13862431035" class="office-contact-link">
                📞 +1 (386) 243-1035
              </a>
              <a href="mailto:info@riskverifier.com" class="office-contact-link">
                ✉️ info@riskverifier.com
              </a>
              <a href="https://wa.me/13862431035" target="_blank" class="office-whatsapp-btn">
                WhatsApp Austin Desk
              </a>
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
              <a href="tel:+14168221904" class="office-contact-link">
                📞 +1 (416) 822-1904
              </a>
              <a href="mailto:info.ca@riskverifier.com" class="office-contact-link">
                ✉️ info.ca@riskverifier.com
              </a>
              <a href="https://wa.me/14168221904" target="_blank" class="office-whatsapp-btn">
                WhatsApp Ottawa Desk
              </a>
            </div>
          </div>

          <!-- United Kingdom -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/flags/gb.svg'); ?>" alt="United Kingdom" class="office-flag-img"></div>
              <h3 class="office-region">United Kingdom</h3>
            </div>
            <p class="office-address">
              Reading, United Kingdom
            </p>
            <div class="office-contacts">
              <a href="tel:+447973499517" class="office-contact-link">
                📞 +44 7973 499517
              </a>
              <a href="mailto:info.uk@riskverifier.com" class="office-contact-link">
                ✉️ info.uk@riskverifier.com
              </a>
              <a href="https://wa.me/447973499517" target="_blank" class="office-whatsapp-btn">
                WhatsApp UK Desk
              </a>
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
              <a href="tel:+923005555884" class="office-contact-link">
                📞 +92 300 5555884
              </a>
              <a href="mailto:info@riskverifier.com" class="office-contact-link">
                ✉️ info@riskverifier.com
              </a>
              <a href="https://wa.me/923005555884" target="_blank" class="office-whatsapp-btn">
                WhatsApp Islamabad Desk
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section section-subtle">
      <div class="container" style="max-width: 860px;">
        <div class="section-header">
          <h2 class="section-title">Common Questions & Compliance</h2>
          <p class="section-subtitle">Everything you need to know about our international screening protocols.</p>
        </div>

        <div style="display:flex; flex-direction:column; gap:16px;">
          <details style="background:#ffffff; border:1.5px solid rgba(8,61,119,0.15); border-radius:12px; padding:20px; cursor:pointer;" open>
            <summary style="font-weight:700; color:#083d77; font-size:1.05rem;">How fast is the turnaround time for international checks?</summary>
            <p style="margin-top:12px; color:rgba(8,61,119,0.8); font-size:0.925rem; line-height:1.6;">
              Criminal checks typically take 24–72 hours. Other verification times vary by country, records and institution; due diligence can take one week to several weeks. See the selected service for details.
            </p>
          </details>

          <details style="background:#ffffff; border:1.5px solid rgba(8,61,119,0.15); border-radius:12px; padding:20px; cursor:pointer;">
            <summary style="font-weight:700; color:#083d77; font-size:1.05rem;">Are the checks legally compliant and authorized?</summary>
            <p style="margin-top:12px; color:rgba(8,61,119,0.8); font-size:0.925rem; line-height:1.6;">
              Yes. All Risk Verifier checks adhere strictly to local jurisdiction privacy statutes, GDPR in Europe, and FCRA standards in the United States. Where required by law, subject consent forms are collected prior to executing queries.
            </p>
          </details>

          <details style="background:#ffffff; border:1.5px solid rgba(8,61,119,0.15); border-radius:12px; padding:20px; cursor:pointer;">
            <summary style="font-weight:700; color:#083d77; font-size:1.05rem;">Can Risk Verifier handle volume corporate hiring?</summary>
            <p style="margin-top:12px; color:rgba(8,61,119,0.8); font-size:0.925rem; line-height:1.6;">
              Absolutely. We serve multinational corporations, staffing agencies, and government contractors with bulk pre-employment screening packages, automated reporting portals, and tailored corporate SLA agreements.
            </p>
          </details>
        </div>
      </div>
    </section>

  </main>

<?php
get_footer();