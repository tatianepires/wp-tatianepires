<?php
/*
 * Frontend scripts
 *
 * Enqueue theme's CSS and JS
 */

function tps_frontend_scripts() {
  // Parent theme's CSS
  wp_enqueue_style('twentyseventeen', get_template_directory_uri() . '/style.css' );

  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans+Condensed:300|Raleway');

  // Font Awesome
  wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  
  // Theme's CSS
  wp_enqueue_style('tps', get_stylesheet_directory_uri() . '/css/tps.min.css', array('twentyseventeen'));

  // Remove jQuery 1.12.4
  wp_deregister_script( 'jquery' );
  // Add jQuery 2.2.4
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4', true);
  
  if( is_front_page() ) {
    wp_enqueue_script('smooth-scroll', get_stylesheet_directory_uri() . '/js/smooth-scroll.min.js', array('jquery'), false, true);
  }
}
add_action( 'wp_enqueue_scripts', 'tps_frontend_scripts' );
