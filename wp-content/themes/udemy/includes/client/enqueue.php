<?php

function an_enqueue()
{
    $uri =  get_theme_file_uri();
    /**Registering styles */
    wp_register_style( 'an_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i' );
    wp_register_style( 'an_bootstrap', $uri . '/assets/css/bootstrap.css' );
    wp_register_style( 'an_style', $uri . '/assets/css/style.css' );
    wp_register_style( 'an_dark', $uri . '/assets/css/dark.css' );
    wp_register_style( 'an_font-icons', $uri . '/assets/css/font-icons.css' );
    wp_register_style( 'an_animate', $uri . '/assets/css/animate.css' );
    wp_register_style( 'an_magnific-popop', $uri . '/assets/css/magnific-popop.css' );
    wp_register_style( 'an_custom', $uri . '/assets/css/custom.css' );
    wp_register_style( 'an_responsive', $uri . '/assets/css/responsive.css' );
    /**Adding styles */
    wp_enqueue_style('an_google_fonts');
    wp_enqueue_style('an_bootstrap');
    wp_enqueue_style('an_style');
    wp_enqueue_style('an_dark');
    wp_enqueue_style('an_font-icons');
    wp_enqueue_style('an_animate');
    wp_enqueue_style('an_magnific-popup');
    wp_enqueue_style('an_custom');
    wp_enqueue_style('an_responsive');


    /**Registering scripts */
    wp_register_style( 'an_plugins', $uri . '/assets/js/plugins.js', [], false, true );
    wp_register_style( 'an_functions', $uri . '/assets/js/functions.js', [], false, true );

    /**Adding scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('an_plugins');
    wp_enqueue_script('an_functions');

}