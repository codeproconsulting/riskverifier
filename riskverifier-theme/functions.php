<?php
/**
 * Risk Verifier Theme Functions and definitions
 *
 * @package RiskVerifier
 * @version 2.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function riskverifier_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register primary navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Navigation Menu', 'riskverifier'),
        'footer'  => __('Footer Navigation Menu', 'riskverifier'),
    ));

    // Enable HTML5 markup support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Custom Logo support
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // === Elementor & Page Builder Compatibility ===
    // Enables Elementor's full-width and canvas page layouts
    add_theme_support('align-wide');

    // Custom header support (used by Elementor Header & Footer Builder)
    add_theme_support('custom-header');

    // Editor color palette — keeps brand colours available in Gutenberg & Elementor
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => __('Brand Blue', 'riskverifier'),
            'slug'  => 'brand-blue',
            'color' => '#083d77',
        ),
        array(
            'name'  => __('Deep Navy', 'riskverifier'),
            'slug'  => 'deep-navy',
            'color' => '#071d3e',
        ),
        array(
            'name'  => __('Accent Blue', 'riskverifier'),
            'slug'  => 'accent-blue',
            'color' => '#2563eb',
        ),
    ));

    // Responsive embeds support
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'riskverifier_theme_setup');

/**
 * Set Elementor-compatible content width
 */
if (!isset($content_width)) {
    $content_width = 1280;
}

/**
 * Elementor Compatibility
 * - Removes default content padding so Elementor sections render edge-to-edge.
 * - Registers the theme as Elementor-ready.
 */
add_action('elementor/theme/register_conditions', function($manager) {
    // Allow Elementor to control which pages use its templates
}, 10, 1);

/**
 * Add Elementor body classes so CSS overrides work correctly
 */
add_filter('body_class', function($classes) {
    if (defined('ELEMENTOR_VERSION')) {
        $classes[] = 'riskverifier-elementor-active';
    }
    return $classes;
});


/**
 * Enqueue scripts and styles
 */
function riskverifier_enqueue_scripts() {
    // Google Fonts: Plus Jakarta Sans & Inter
    wp_enqueue_style(
        'riskverifier-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Main Theme CSS
    wp_enqueue_style(
        'riskverifier-main-style',
        get_template_directory_uri() . '/assets/css/theme-style.css',
        array(),
        '2.0.0'
    );

    // WordPress Root style.css
    wp_enqueue_style(
        'riskverifier-style',
        get_stylesheet_uri(),
        array('riskverifier-main-style'),
        '2.0.0'
    );

    // Framer Motion Animation Engine
    wp_enqueue_script(
        'framer-motion',
        get_template_directory_uri() . '/assets/js/motion.umd.js',
        array(),
        '11.11.17',
        true
    );

    // Main Theme JavaScript
    wp_enqueue_script(
        'riskverifier-main-script',
        get_template_directory_uri() . '/assets/js/theme-main.js',
        array('framer-motion'),
        '2.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'riskverifier_enqueue_scripts');

/**
 * Generate Services Mega Menu HTML Markup
 */
function riskverifier_get_services_mega_menu_html() {
    $services_url = esc_url(home_url('/services/'));
    
    ob_start();
    ?>
    <div class="mega-dropdown-menu" id="servicesMegaDropdown" role="region" aria-label="Services Menu">
      <div class="mega-dropdown-inner">
        <!-- Mega Menu Header -->
        <div class="mega-menu-top">
          <h3 class="mega-menu-heading">Our Services</h3>
          <p class="mega-menu-subheading">Direct-source background screening, corporate due diligence and risk intelligence across 100+ countries.</p>
        </div>

        <!-- Mega Menu Content Grid -->
        <div class="mega-menu-content">
          <!-- 12 Service Cards Grid (4 Columns x 3 Rows) -->
          <div class="mega-cards-grid">
            <!-- 1. Criminal Records Check -->
            <a href="<?php echo $services_url; ?>#criminal-records" class="mega-service-card" data-service="criminal-records">
              <div class="mega-card-icon icon-indigo">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                  <path d="M9 12l2 2 4-4"></path>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Criminal Records Check</div>
              </div>
            </a>

            <!-- 2. Civil Records Search -->
            <a href="<?php echo $services_url; ?>#civil-records" class="mega-service-card" data-service="civil-records">
              <div class="mega-card-icon icon-amber">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                  <polyline points="2 17 12 22 22 17"></polyline>
                  <polyline points="2 12 12 17 22 12"></polyline>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Civil Records Search</div>
              </div>
            </a>

            <!-- 3. Credit & Finance Reports -->
            <a href="<?php echo $services_url; ?>#credit-finance" class="mega-service-card" data-service="credit-finance">
              <div class="mega-card-icon icon-purple">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="12" y1="1" x2="12" y2="23"></line>
                  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Credit &amp; Finance Reports</div>
              </div>
            </a>

            <!-- 4. Vital Records Verification -->
            <a href="<?php echo $services_url; ?>#vital-records" class="mega-service-card" data-service="vital-records">
              <div class="mega-card-icon icon-rose">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <path d="M12 18v-6"></path>
                  <path d="M9 15l3 3 3-3"></path>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Vital Records Verification</div>
              </div>
            </a>

            <!-- 5. Identity & Credentials -->
            <a href="<?php echo $services_url; ?>#identity-credentials" class="mega-service-card" data-service="identity-credentials">
              <div class="mega-card-icon icon-sky">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="16" rx="3"></rect>
                  <circle cx="9" cy="10" r="2"></circle>
                  <line x1="15" y1="9" x2="15" y2="9.01"></line>
                  <line x1="15" y1="13" x2="15" y2="13.01"></line>
                  <path d="M6 16c1-1.5 2-2 3-2s2 .5 3 2"></path>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Identity &amp; Credentials</div>
              </div>
            </a>

            <!-- 6. Property & Asset Searches -->
            <a href="<?php echo $services_url; ?>#property-asset" class="mega-service-card" data-service="property-asset">
              <div class="mega-card-icon icon-emerald">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Property &amp; Asset Searches</div>
              </div>
            </a>

            <!-- 7. Driving & Motor Vehicle Records -->
            <a href="<?php echo $services_url; ?>#driving-records" class="mega-service-card" data-service="driving-records">
              <div class="mega-card-icon icon-blue">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.5 2.8C2.1 11.1 2 11.5 2 12v4c0 .6.4 1 1 1h2"></path>
                  <circle cx="7" cy="17" r="2"></circle>
                  <path d="M9 17h6"></path>
                  <circle cx="17" cy="17" r="2"></circle>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Driving &amp; MVR Records</div>
              </div>
            </a>

            <!-- 8. Verifications & References -->
            <a href="<?php echo $services_url; ?>#verifications-references" class="mega-service-card" data-service="verifications-references">
              <div class="mega-card-icon icon-teal">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <polyline points="16 11 18 13 22 9"></polyline>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Verifications &amp; References</div>
              </div>
            </a>

            <!-- 9. Due Diligence & Sanctions Screening -->
            <a href="<?php echo $services_url; ?>#due-diligence" class="mega-service-card" data-service="due-diligence">
              <div class="mega-card-icon icon-cyan">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                  <line x1="12" y1="8" x2="12" y2="12"></line>
                  <line x1="12" y1="16" x2="12.01" y2="16"></line>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Due Diligence &amp; Sanctions</div>
              </div>
            </a>

            <!-- 10. Media Analytics -->
            <a href="<?php echo $services_url; ?>#media-analytics" class="mega-service-card" data-service="media-analytics">
              <div class="mega-card-icon icon-orange">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Media Analytics</div>
              </div>
            </a>

            <!-- 11. Bespoke Research -->
            <a href="<?php echo $services_url; ?>#bespoke-research" class="mega-service-card" data-service="bespoke-research">
              <div class="mega-card-icon icon-violet">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8"></circle>
                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                  <line x1="11" y1="8" x2="11" y2="14"></line>
                  <line x1="8" y1="11" x2="14" y2="11"></line>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Bespoke Research</div>
              </div>
            </a>

            <!-- 12. Geopolitical Advisory -->
            <a href="<?php echo $services_url; ?>#geopolitical-advisory" class="mega-service-card" data-service="geopolitical-advisory">
              <div class="mega-card-icon icon-pink">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="2" y1="12" x2="22" y2="12"></line>
                  <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                </svg>
              </div>
              <div class="mega-card-info">
                <div class="mega-card-title">Geopolitical Advisory</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
    return ob_get_clean();
}

/**
 * Add mega-dropdown classes to Primary Menu item for Services
 */
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location === 'primary') {
        if (strcasecmp(trim($item->title), 'Services') === 0 || strpos($item->url, '/services') !== false) {
            $classes[] = 'has-dropdown';
            $classes[] = 'mega-dropdown-parent';
        }
    }
    return $classes;
}, 10, 3);

/**
 * Inject Services Mega Dropdown HTML and arrow into wp_nav_menu
 */
add_filter('walker_nav_menu_start_el', function ($item_output, $item, $depth, $args) {
    if (isset($args->theme_location) && $args->theme_location === 'primary' && $depth === 0) {
        if (strcasecmp(trim($item->title), 'Services') === 0 || strpos($item->url, '/services') !== false) {
            $arrow_svg = '<svg class="nav-dropdown-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>';
            $item_output = preg_replace('/(<\/a>)/i', ' ' . $arrow_svg . '$1', $item_output);
            $item_output .= riskverifier_get_services_mega_menu_html();
        }
    }
    return $item_output;
}, 10, 4);

/**
 * =========================================================================
 * Automatic Core Pages Setup & Permalinks Management
 * =========================================================================
 * Ensures that on theme activation/loading, essential pages ('services',
 * 'about-us', 'how-it-works', 'contact-us', 'login', 'signup') are
 * automatically created as real WordPress Pages in the database with their
 * templates assigned and permalinks set to /%postname%/.
 */
function riskverifier_ensure_theme_pages() {
    $initialized = get_option('riskverifier_pages_v3_ready');

    $pages = array(
        'services' => array(
            'title'    => 'Services',
            'template' => 'page-services.php',
        ),
        'about-us' => array(
            'title'    => 'About Us',
            'template' => 'page-about.php',
            'alt_slug' => 'about',
        ),
        'how-it-works' => array(
            'title'    => 'How It Works',
            'template' => 'page-how-it-works.php',
        ),
        'contact-us' => array(
            'title'    => 'Contact Us',
            'template' => 'page-contact.php',
            'alt_slug' => 'contact',
        ),
        'login' => array(
            'title'    => 'Client Portal Login',
            'template' => 'page-login.php',
        ),
        'signup' => array(
            'title'    => 'Get Started / Sign Up',
            'template' => 'page-signup.php',
            'alt_slug' => 'sign-up',
        ),
    );

    // If not yet initialized or in admin screen, make sure pages exist
    if (!$initialized || is_admin()) {
        $did_modify = false;

        foreach ($pages as $slug => $data) {
            $page_obj = get_page_by_path($slug);
            if (!$page_obj && !empty($data['alt_slug'])) {
                $page_obj = get_page_by_path($data['alt_slug']);
            }

            if (!$page_obj) {
                $new_page_id = wp_insert_post(array(
                    'post_title'     => $data['title'],
                    'post_name'      => $slug,
                    'post_status'    => 'publish',
                    'post_type'      => 'page',
                    'comment_status' => 'closed',
                    'ping_status'    => 'closed',
                ));

                if ($new_page_id && !is_wp_error($new_page_id)) {
                    update_post_meta($new_page_id, '_wp_page_template', $data['template']);
                    $did_modify = true;
                }
            } else {
                $current_tmpl = get_post_meta($page_obj->ID, '_wp_page_template', true);
                if (empty($current_tmpl) || $current_tmpl === 'default') {
                    update_post_meta($page_obj->ID, '_wp_page_template', $data['template']);
                }
            }
        }

        // Ensure pretty permalinks are configured
        $current_structure = get_option('permalink_structure');
        if (empty($current_structure)) {
            global $wp_rewrite;
            if (isset($wp_rewrite)) {
                $wp_rewrite->set_permalink_structure('/%postname%/');
                $did_modify = true;
            }
        }

        if ($did_modify || !$initialized) {
            flush_rewrite_rules(false);
            update_option('riskverifier_pages_v3_ready', 1);
        }
    }
}
add_action('init', 'riskverifier_ensure_theme_pages', 5);

add_action('after_switch_theme', function() {
    delete_option('riskverifier_pages_v3_ready');
    riskverifier_ensure_theme_pages();
});

/**
 * Register Custom Rewrite Rules
 */
add_action('init', function() {
    add_rewrite_rule('^services/?$', 'index.php?pagename=services', 'top');
    add_rewrite_rule('^about-us/?$', 'index.php?pagename=about-us', 'top');
    add_rewrite_rule('^about/?$', 'index.php?pagename=about-us', 'top');
    add_rewrite_rule('^how-it-works/?$', 'index.php?pagename=how-it-works', 'top');
    add_rewrite_rule('^contact-us/?$', 'index.php?pagename=contact-us', 'top');
    add_rewrite_rule('^contact/?$', 'index.php?pagename=contact-us', 'top');
    add_rewrite_rule('^login/?$', 'index.php?pagename=login', 'top');
    add_rewrite_rule('^signup/?$', 'index.php?pagename=signup', 'top');
    add_rewrite_rule('^sign-up/?$', 'index.php?pagename=signup', 'top');
}, 10);

/**
 * Bulletproof Fallback Router
 * If WordPress receives a request that results in 404 or missing page for any theme
 * route (e.g. /services, /about-us, /contact-us, /how-it-works, /login, /signup),
 * this filter guarantees the proper template is served with HTTP 200 OK.
 */
add_filter('template_include', function ($template) {
    if (is_404() || !is_singular('page')) {
        $raw_uri = $_SERVER['REQUEST_URI'] ?? '';
        $path = trim(parse_url($raw_uri, PHP_URL_PATH) ?? '', '/');

        // Strip subfolder if WordPress is inside a subdirectory
        $home_path = trim(parse_url(home_url(), PHP_URL_PATH) ?? '', '/');
        if ($home_path !== '' && strpos($path, $home_path) === 0) {
            $path = trim(substr($path, strlen($home_path)), '/');
        }

        // Clean out index.php prefix if present
        $path = preg_replace('/^index\.php\/?/', '', $path);

        $route_map = array(
            'services'     => 'page-services.php',
            'about-us'     => 'page-about.php',
            'about'        => 'page-about.php',
            'how-it-works' => 'page-how-it-works.php',
            'contact-us'   => 'page-contact.php',
            'contact'      => 'page-contact.php',
            'login'        => 'page-login.php',
            'signup'       => 'page-signup.php',
            'sign-up'      => 'page-signup.php',
        );

        if (isset($route_map[$path])) {
            global $wp_query;
            $wp_query->is_404 = false;
            status_header(200);

            // Populate queried object so get_the_ID(), wp_title(), and body classes function properly
            $page_obj = get_page_by_path($path);
            if (!$page_obj) {
                if ($path === 'about') $page_obj = get_page_by_path('about-us');
                if ($path === 'contact') $page_obj = get_page_by_path('contact-us');
                if ($path === 'sign-up') $page_obj = get_page_by_path('signup');
            }
            if ($page_obj) {
                $wp_query->queried_object = $page_obj;
                $wp_query->queried_object_id = $page_obj->ID;
                $wp_query->is_page = true;
                $wp_query->is_singular = true;
                $wp_query->posts = array($page_obj);
                $wp_query->post_count = 1;
            }

            $matched_template = locate_template(array($route_map[$path]));
            if ($matched_template) {
                return $matched_template;
            }
        }
    }
    return $template;
}, 99);


