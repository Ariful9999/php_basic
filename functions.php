<?php

//Add Theme Features
function wptd_theme_features() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'wptd_theme_features' ); 

// Include CSS and JS

add_action( 'wp_enqueue_scripts', 'wptd_theme_css_js' );

function wptd_theme_css_js() {

  wp_enqueue_style( 'wptd-style',  get_stylesheet_uri() );

  wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap' );

   wp_enqueue_script( 'wptd-custom', get_template_directory_uri() . '/assets/js/scripts.js' );
}
