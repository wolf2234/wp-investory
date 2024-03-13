<?php
add_action( 'wp_enqueue_scripts', 'invest_theme_styles' );
add_action( 'wp_footer', 'invest_theme_styles_footer' );
add_action( 'wp_enqueue_scripts', 'jquery_lib' );


function jquery_lib(){
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.min.js' );
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.js', array('jquery'), null, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
    wp_enqueue_script( 'powerange-js', get_template_directory_uri() . '/assets/js/powerange.min.js', array('jquery'), null, true);
}


function invest_theme_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');

}


function invest_theme_styles_footer() {
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css');
}

function powerange(){
	if ( is_page( 17 ) ){
		wp_enqueue_style( 'powerange-css', get_template_directory_uri() . '/assets/css/powerange.min.css');
		wp_enqueue_script( 'power', get_template_directory_uri() . '/assets/js/powerange.min.js');
	}
}
add_action('wp_enqueue_scripts', 'powerange');
add_theme_support('custom-logo');
add_theme_support( 'post-thumbnails' );
add_image_size( 'object-preview', 371, 141, true );
add_image_size( 'directions-preview', 170, 170, true );
add_image_size( 'sidebar-preview', 350, 200, true );


