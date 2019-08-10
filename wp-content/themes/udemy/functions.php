<?php

// Setup
define('AN_DEV_MODE', true);

// Includes
include( get_theme_file_path( '/includes/client/enqueue.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'an_enqueue' );

// Shortcodes
