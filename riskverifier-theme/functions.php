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
}
add_action('after_setup_theme', 'riskverifier_theme_setup');

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
