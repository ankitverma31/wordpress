<?php

function an_enqueue()
{
    $uri =  get_theme_file_uri();
    $ver = AN_DEV_MODE ? time() : false;
    /**Registering styles */
    wp_register_style( 'an_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], $ver );
    wp_register_style( 'an_bootstrap', $uri . '/assets/css/bootstrap.css', [], $ver );
    wp_register_style( 'an_style', $uri . '/assets/css/style.css', [], $ver );
    wp_register_style( 'an_dark', $uri . '/assets/css/dark.css', [], $ver );
    wp_register_style( 'an_font-icons', $uri . '/assets/css/font-icons.css', [], $ver );
    wp_register_style( 'an_animate', $uri . '/assets/css/animate.css', [], $ver );
    wp_register_style( 'an_magnific-popop', $uri . '/assets/css/magnific-popop.css', [], $ver );
    wp_register_style( 'an_custom', $uri . '/assets/css/custom.css', [], $ver );
    wp_register_style( 'an_responsive', $uri . '/assets/css/responsive.css', [], $ver );
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
    wp_register_style( 'an_plugins', $uri . '/assets/js/plugins.js', [], $ver, true );
    wp_register_style( 'an_functions', $uri . '/assets/js/functions.js', [], $ver, true );

    /**Adding scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('an_plugins');
    wp_enqueue_script('an_functions');

}