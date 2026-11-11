<?php
/**
 * Risk Verifier Theme Functions and definitions
 *
 * @package RiskVerifier
 * @version 2.0.5
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
    $theme_version = '2.2.0';

    // Google Fonts: Plus Jakarta Sans & Inter
    wp_enqueue_style(
        'riskverifier-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // WordPress Primary style.css (Contains full theme stylesheet)
    wp_enqueue_style(
        'riskverifier-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    // Main Theme CSS in assets
    wp_enqueue_style(
        'riskverifier-main-style',
        get_template_directory_uri() . '/assets/css/theme-style.css',
        array(),
        $theme_version
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
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'riskverifier_enqueue_scripts');

/**
 * Generate Services Mega Menu HTML Markup
 */
function riskverifier_get_services_mega_menu_html() {
    ob_start();
    ?>
<div class="mega-dropdown-menu" id="servicesMegaDropdown" role="region" aria-label="Services Menu">
  <div class="mega-dropdown-inner">
    <div class="mega-menu-top">
      <div><h3 class="mega-menu-heading">Our services</h3><p class="mega-menu-subheading">Find the information you need to make a confident decision.</p></div>
      <a class="mega-all-services" href="<?php echo esc_url(home_url('/services/')); ?>">Explore all services <span aria-hidden="true">→</span></a>
    </div>
    <div class="mega-service-groups"><div class="mega-service-group"><h4 class="mega-group-title">Background screening</h4><ul class="mega-service-list"><li><a href="<?php echo esc_url(home_url('/services/')); ?>#criminal-records" class="mega-service-card"><span class="mega-card-title">Criminal Records Check</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li>
<li><a href="<?php echo esc_url(home_url('/services/')); ?>#civil-records" class="mega-service-card"><span class="mega-card-title">Civil Records Search</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li>
<li><a href="<?php echo esc_url(home_url('/services/')); ?>#vital-records" class="mega-service-card"><span class="mega-card-title">Vital Records Verification</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li>
<li><a href="<?php echo esc_url(home_url('/services/')); ?>#driving-records" class="mega-service-card"><span class="mega-card-title">Driving &amp; Motor Vehicle Records (MVR)</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li></ul></div><div class="mega-service-group"><h4 class="mega-group-title">Verification &amp; records</h4><ul class="mega-service-list"><li><a href="<?php echo esc_url(home_url('/services/')); ?>#credit-finance" class="mega-service-card"><span class="mega-card-title">Credit &amp; Finance Reports</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li>
<li><a href="<?php echo esc_url(home_url('/services/')); ?>#identity-credentials" class="mega-service-card"><span class="mega-card-title">Identity &amp; Credentials Verification</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li>
<li><a href="<?php echo esc_url(home_url('/services/')); ?>#property-asset" class="mega-service-card"><span class="mega-card-title">Property &amp; Asset Searches</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li>
<li><a href="<?php echo esc_url(home_url('/services/')); ?>#verifications-references" class="mega-service-card"><span class="mega-card-title">Verifications &amp; References</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li></ul></div><div class="mega-service-group"><h4 class="mega-group-title">Intelligence &amp; advisory</h4><ul class="mega-service-list"><li><a href="<?php echo esc_url(home_url('/services/')); ?>#due-diligence" class="mega-service-card"><span class="mega-card-title">Due Diligence</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li>
<li><a href="<?php echo esc_url(home_url('/services/')); ?>#media-analytics" class="mega-service-card"><span class="mega-card-title">Media Analytics</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li>
<li><a href="<?php echo esc_url(home_url('/services/')); ?>#bespoke-research" class="mega-service-card"><span class="mega-card-title">Bespoke Research</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li>
<li><a href="<?php echo esc_url(home_url('/services/')); ?>#geopolitical-advisory" class="mega-service-card"><span class="mega-card-title">Geopolitical Advisory</span><span class="mega-link-arrow" aria-hidden="true">↗</span></a></li></ul></div></div>
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
 * Provision real pages once on activation or theme upgrade. Native WordPress
 * page routing supplies the query, title, canonical URL and template together.
 */
function riskverifier_ensure_theme_pages() {
    $pages = array(
        'home' => array('Home', ''),
        'services' => array('Services', 'page-services.php'),
        'about-us' => array('About Us', 'page-about.php'),
        'how-it-works' => array('How It Works', 'page-how-it-works.php'),
        'contact-us' => array('Contact Us', 'page-contact.php'),
        'request-verification' => array('Request Verification', 'page-request-verification.php'),
        'blog' => array('Blog & Knowledge Hub', 'page-blog.php'),
        'login' => array('Client Portal Login', 'page-login.php'),
        'signup' => array('Get Started / Sign Up', 'page-signup.php'),
    );

    $needs_provisioning = false;
    foreach ($pages as $slug => $data) {
        if (!get_page_by_path($slug, OBJECT, 'page')) {
            $needs_provisioning = true;
            break;
        }
    }

    if (!$needs_provisioning && get_option('riskverifier_setup_version') === '2.0.9') {
        return;
    }

    $complete = true;
    $home_id = 0;
    foreach ($pages as $slug => $data) {
        $page = get_page_by_path($slug, OBJECT, 'page');
        if (!$page) {
            $page_id = wp_insert_post(array(
                'post_title' => $data[0],
                'post_name' => $slug,
                'post_status' => 'publish',
                'post_type' => 'page',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
            ), true);
            if (is_wp_error($page_id) || !$page_id) {
                $complete = false;
                continue;
            }
            if ($data[1]) {
                update_post_meta($page_id, '_wp_page_template', $data[1]);
            }
        } else {
            $page_id = $page->ID;
            // Preserve existing content, publication status and builder templates.
            $template = get_post_meta($page_id, '_wp_page_template', true);
            if ($data[1] && (!$template || $template === 'default')) {
                update_post_meta($page_id, '_wp_page_template', $data[1]);
            }
        }
        if ($slug === 'home') {
            $home_id = $page_id;
        }
    }

    if ($home_id && !get_option('page_on_front') && get_post_status($home_id) === 'publish') {
        update_option('page_on_front', $home_id);
        update_option('show_on_front', 'page');
    }
    if (!get_option('permalink_structure')) {
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');
    }
    // Defer flushing until all init callbacks have registered their rules.
    update_option('riskverifier_flush_rewrites', 1);
    if ($complete) {
        update_option('riskverifier_setup_version', '2.2.0');
    }

    // Auto provision the 3 Risk Verifier blog posts
    riskverifier_ensure_sample_posts();
}
add_action('init', 'riskverifier_ensure_theme_pages', 20);

/**
 * Provision the 3 cornerstone Risk Verifier intelligence articles and clean default posts.
 */
function riskverifier_ensure_sample_posts() {
    // 1. Remove default WordPress "Hello world!" post if present
    $hello_post = get_page_by_path('hello-world', OBJECT, 'post');
    if ($hello_post) {
        wp_delete_post($hello_post->ID, true);
    }
    // Also check by title
    $hello_query = get_posts(array(
        'title'        => 'Hello world!',
        'post_type'    => 'post',
        'post_status'  => 'any',
        'numberposts'  => 1
    ));
    if (!empty($hello_query)) {
        wp_delete_post($hello_query[0]->ID, true);
    }

    // 2. Ensure the 3 corporate intelligence articles exist
    $articles = array(
        array(
            'slug'    => 'global-background-checks-fcra-gdpr',
            'title'   => 'Global Background Checks: Navigating FCRA & GDPR in Cross-Border Hiring',
            'cat'     => 'Compliance',
            'excerpt' => 'Discover how multinational organizations navigate conflicting data privacy frameworks while conducting legally sound background verifications across international boundaries.',
            'content' => '<p>Operating across international jurisdictions requires corporate legal counsel and talent acquisition executives to navigate divergent data protection mandates. While the Fair Credit Reporting Act (FCRA) governs consumer reporting in the United States, cross-border verifications intersecting with the European Union or United Kingdom require strict adherence to GDPR principles including lawful basis, explicit consent, and data minimization.</p><h3>The Challenge of Jurisdictional Friction</h3><p>Multinational employers cannot simply apply domestic consent language to international candidates. Local labor laws and works council agreements frequently supersede general commercial protocols, necessitating localized compliance workflows and direct-source registry engagement.</p><h3>Evidentiary Defensibility</h3><p>By partnering with specialized global verification intelligence desks, corporations eliminate regulatory compliance liabilities while safeguarding international talent acquisition cycles.</p>'
        ),
        array(
            'slug'    => 'why-database-scrapes-fail-court-docket-verification',
            'title'   => 'Why Database Scrapes Fail: The Vital Need for Direct-Source Court Docket Verification',
            'cat'     => 'Due Diligence',
            'excerpt' => 'Automated scraping algorithms routinely miss expunged cases, seal orders, and localized jurisdiction dockets. Learn why evidential certainty requires primary-source verification.',
            'content' => '<p>Commercial background check providers frequently rely on aggregated third-party databases that sweep historical court filings at intermittent intervals. However, automated scrapers exhibit severe blind spots: delayed database updates routinely omit recent acquittals, expungement orders, or statutory record sealings.</p><h3>The False Positive Risk</h3><p>Direct-source verification involves conducting hands-on record inspections at the municipal, county, and high court registries. By verifying directly with court clerks and primary docket repositories, risk verifiers avoid false positives, mitigate actionable FCRA liability, and ensure unimpeachable evidential integrity.</p>'
        ),
        array(
            'slug'    => 'mitigating-executive-onboarding-risks',
            'title'   => 'Mitigating Executive Onboarding Risks: Beyond Standard Criminal Records',
            'cat'     => 'Risk Advisory',
            'excerpt' => 'C-suite and sensitive governance roles demand multi-layered investigation including corporate affiliations, regulatory sanctions, civil litigation histories, and conflict audits.',
            'content' => '<p>Standard pre-employment screening workflows are fundamentally inadequate for executive appointments, board directors, and high-trust leadership roles. Executive hires introduce governance risk, regulatory scrutiny, and enterprise reputational exposure that standard criminal history checks cannot reveal.</p><h3>Comprehensive Executive Screening</h3><p>A rigorous executive screening protocol encompasses comprehensive corporate directorship searches, global sanctions screening, regulatory enforcement registry checks, cross-jurisdictional civil litigation searches, and conflict-of-interest audits. Thorough vetting prior to executive announcement safeguards organizational prestige and investor trust.</p>'
        )
    );

    foreach ($articles as $art) {
        $existing = get_page_by_path($art['slug'], OBJECT, 'post');
        if (!$existing) {
            $post_id = wp_insert_post(array(
                'post_title'   => $art['title'],
                'post_name'    => $art['slug'],
                'post_content' => $art['content'],
                'post_excerpt' => $art['excerpt'],
                'post_status'  => 'publish',
                'post_type'    => 'post',
                'comment_status' => 'closed',
                'ping_status'    => 'closed'
            ));
            if ($post_id && !is_wp_error($post_id)) {
                wp_set_object_terms($post_id, $art['cat'], 'category');
            }
        }
    }
}

add_action('after_switch_theme', function() {
    delete_option('riskverifier_setup_version');
    riskverifier_ensure_theme_pages();
});

add_action('init', function() {
    // Keep legacy URLs and aliases working without masking an existing page at that URL.
    $aliases = array(
        'about'                  => 'about-us',
        'contact'                => 'contact-us',
        'sign-up'                => 'signup',
        'request-a-verification' => 'request-verification',
    );
    foreach ($aliases as $alias => $slug) {
        if (!get_page_by_path($alias, OBJECT, 'page')) {
            add_rewrite_rule('^' . $alias . '/?$', 'index.php?pagename=' . $slug, 'top');
        }
    }
}, 30);

add_action('wp_loaded', function() {
    if (get_option('riskverifier_flush_rewrites')) {
        // Also write .htaccess when permitted so a fresh installation can route pages.
        flush_rewrite_rules();
        delete_option('riskverifier_flush_rewrites');
    }
});

/**
 * Direct Fallback Router: If a theme page route hits 404 (e.g. before pages are
 * provisioned in the database or permalinks flushed), serve the template directly.
 */
add_filter('template_include', function($template) {
    if (is_404()) {
        $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        $path = trim(parse_url($request_uri, PHP_URL_PATH), '/');
        // Handle subfolder installations (e.g. /mysite/request-verification/)
        $home_path = trim(parse_url(home_url(), PHP_URL_PATH), '/');
        if ($home_path && strpos($path, $home_path) === 0) {
            $path = trim(substr($path, strlen($home_path)), '/');
        }
        $segments = explode('/', $path);
        $slug = end($segments);

        $routes = array(
            'request-verification'   => 'page-request-verification.php',
            'request-a-verification' => 'page-request-verification.php',
            'how-it-works'           => 'page-how-it-works.php',
            'about-us'               => 'page-about.php',
            'about'                  => 'page-about.php',
            'contact-us'             => 'page-contact.php',
            'contact'                => 'page-contact.php',
            'services'               => 'page-services.php',
            'blog'                   => 'page-blog.php',
            'login'                  => 'page-login.php',
            'portal-login'           => 'page-login.php',
            'signup'                 => 'page-signup.php',
            'sign-up'                => 'page-signup.php',
        );

        if (isset($routes[$slug])) {
            $file = get_template_directory() . '/' . $routes[$slug];
            if (file_exists($file)) {
                global $wp_query;
                $wp_query->is_404 = false;
                status_header(200);
                return $file;
            }
        }
    }
    return $template;
}, 99);

/** Match the fallback navigation markup when a WordPress menu is assigned. */
add_filter('nav_menu_link_attributes', function($atts, $item, $args, $depth) {
    if (isset($args->theme_location) && $args->theme_location === 'primary' && $depth === 0) {
        $classes = isset($atts['class']) ? $atts['class'] : '';
        $classes .= ' nav-link';
        if (in_array('current-menu-item', (array) $item->classes, true)) {
            $classes .= ' active';
        }
        if (strcasecmp(trim($item->title), 'Services') === 0 || strpos($item->url, '/services') !== false) {
            $classes .= ' nav-link-dropdown-toggle';
            $atts['aria-expanded'] = 'false';
            $atts['aria-haspopup'] = 'true';
        }
        $atts['class'] = trim($classes);
    }
    return $atts;
}, 10, 4);
