<?php

/* Get stylesheet */ 
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

/* Enqueue Google fonts */
function beadwow_fonts() {

	 wp_enqueue_style( 'Roboto' , 'https://fonts.googleapis.com/css?family=Roboto:400,400i,900' ); 
	 
}
add_action( 'wp_enqueue_scripts', 'beadwow_fonts', 11 );

/* Add Featured images */
add_theme_support( 'post-thumbnails' );

/* Add menus */
function register_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_menus' );

?>