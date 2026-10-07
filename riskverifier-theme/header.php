<?php
/**
 * The header for our theme
 *
 * @package RiskVerifier
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Top Bar: Regional Offices & Rapid Support -->
  <aside class="top-bar" aria-label="Regional Offices & Direct Contacts">
    <div class="container top-bar-content">
      <div class="top-bar-offices">
        <span>📍 <strong>Regional Hubs:</strong> USA (Texas) • Canada (Ottawa) • UK (Reading) • Pakistan (Islamabad)</span>
      </div>
      <div class="top-bar-contact">
        <a href="https://wa.me/13862431035" target="_blank" class="top-bar-link whatsapp">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
          Direct WhatsApp Support
        </a>
        <a href="mailto:info@riskverifier.com" class="top-bar-link">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          info@riskverifier.com
        </a>
      </div>
    </div>
  </aside>

  <!-- Main Navigation Header -->
  <header class="site-header">
    <div class="container nav-container">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" aria-label="Risk Verifier Home">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Logo.svg'); ?>" alt="Risk Verifier" class="brand-logo-img">
      </a>

      <nav>
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'menu_id'        => 'navMenu',
                'fallback_cb'    => false,
            ));
        } else {
        ?>
        <ul class="nav-menu" id="navMenu">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link <?php if (is_front_page()) echo 'active'; ?>">Home</a></li>
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="nav-link">Services</a></li>
          <li><a href="<?php echo esc_url(home_url('/how-it-works/')); ?>" class="nav-link">How It Works</a></li>
          <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="nav-link">About Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/#offices')); ?>" class="nav-link">Regional Offices</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="nav-link">Contact</a></li>
        </ul>
        <?php } ?>
      </nav>

      <div class="nav-actions">
        <a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>" class="btn btn-primary btn-sm">Request Verification</a>
        <button class="mobile-toggle" id="mobileNavToggle" aria-label="Toggle navigation menu">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </button>
      </div>
    </div>
  </header>
