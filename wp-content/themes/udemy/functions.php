<?php

// Setup
define('AN_DEV_MODE', true);

// Includes

// header footer imports(html, css, js)
include( get_theme_file_path( '/includes/client/enqueue.php' ) );
// theme setup
include( get_theme_file_path( '/includes/setup.php' ) );


// Hooks
add_action( 'wp_enqueue_scripts', 'an_enqueue' );
add_action('after_setup_theme', 'an_setup_theme');

// Shortcodes
