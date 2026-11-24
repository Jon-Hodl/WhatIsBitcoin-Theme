<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
        WhatIs<span>Bitcoin</span>
    </a>

    <nav class="desktop-nav">
        <a href="<?php echo esc_url( home_url( '/buy-bitcoin/' ) ); ?>" class="cta"><?php esc_html_e( 'Buy Bitcoin', 'whatisbitcoin' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/tools/' ) ); ?>"><?php esc_html_e( 'Tools', 'whatisbitcoin' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>"><?php esc_html_e( 'Articles', 'whatisbitcoin' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/books/' ) ); ?>"><?php esc_html_e( 'Books', 'whatisbitcoin' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/glossary/' ) ); ?>"><?php esc_html_e( 'Glossary', 'whatisbitcoin' ); ?></a>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'whatisbitcoin' ); ?></a>
    </nav>

    <button class="menu-toggle" id="menu-toggle" aria-label="<?php esc_attr_e( 'Open menu', 'whatisbitcoin' ); ?>">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
</header>

<div class="mobile-modal" id="mobile-modal">
    <button class="close-btn" id="menu-close" aria-label="<?php esc_attr_e( 'Close menu', 'whatisbitcoin' ); ?>">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    <a href="<?php echo esc_url( home_url( '/buy-bitcoin/' ) ); ?>" class="cta"><?php esc_html_e( 'Buy Bitcoin', 'whatisbitcoin' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/tools/' ) ); ?>"><?php esc_html_e( 'Tools', 'whatisbitcoin' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>"><?php esc_html_e( 'Articles', 'whatisbitcoin' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/books/' ) ); ?>"><?php esc_html_e( 'Books', 'whatisbitcoin' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/glossary/' ) ); ?>"><?php esc_html_e( 'Glossary', 'whatisbitcoin' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'whatisbitcoin' ); ?></a>
</div>
