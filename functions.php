<?php
/**
 * WhatIsBitcoin theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'WIB_THEME_VERSION', '1.0.0' );

define( 'WIB_THEME_DIR', get_template_directory() );
define( 'WIB_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function wib_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'customize-selective-refresh-widgets' );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'whatisbitcoin' ),
            'footer'  => __( 'Footer Menu', 'whatisbitcoin' ),
        )
    );
}
add_action( 'after_setup_theme', 'wib_setup' );

/**
 * Enqueue scripts and styles
 */
function wib_enqueue_assets() {
    wp_enqueue_style(
        'wib-theme-css',
        WIB_THEME_URI . '/assets/css/theme.css',
        array(),
        WIB_THEME_VERSION
    );

    wp_enqueue_script(
        'wib-theme-js',
        WIB_THEME_URI . '/assets/js/theme.js',
        array(),
        WIB_THEME_VERSION,
        true
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'wib_enqueue_assets' );

/**
 * Add custom page templates to the dropdown
 */
function wib_page_templates( $templates ) {
    $templates['page-landing.php']     = __( 'Landing Page', 'whatisbitcoin' );
    $templates['page-buy-bitcoin.php'] = __( 'Buy Bitcoin Page', 'whatisbitcoin' );
    $templates['page-articles.php']    = __( 'Articles Page', 'whatisbitcoin' );
    $templates['page-books.php']       = __( 'Books Page', 'whatisbitcoin' );
    $templates['page-glossary.php']    = __( 'Glossary Page', 'whatisbitcoin' );
    $templates['page-tools.php']       = __( 'Tools Page', 'whatisbitcoin' );
    return $templates;
}
add_filter( 'theme_page_templates', 'wib_page_templates' );

/**
 * Custom excerpt length
 */
function wib_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wib_excerpt_length', 999 );
