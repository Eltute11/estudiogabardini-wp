<?php

add_action('init', 'my_register_styles_script');
function my_register_styles_script() {
    // CSS
    wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
    wp_register_style( 'nav', get_template_directory_uri() . '/css/nav.css' );
    wp_register_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );
    //wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Libre+Baskerville' );

    // JS
    wp_register_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery'));
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery'));
    wp_register_script( 'app', get_template_directory_uri() . '/js/app.js', array( 'jquery'));
    wp_register_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery'));
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery'));
    wp_register_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.7.1/js/all.js', array( 'jquery'));
}


add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );
function my_enqueue_styles() {
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('nav');
  wp_enqueue_style('owl.carousel');
  //wp_enqueue_style('google-fonts');

  # JS
  wp_enqueue_script('jQuery');
  wp_enqueue_script('main');
  wp_enqueue_script('modernizr');
  wp_enqueue_script('bootstrap-js');
  wp_enqueue_script('owl.carousel');
  wp_enqueue_script('app');
  wp_enqueue_script('fontawesome');
  
}