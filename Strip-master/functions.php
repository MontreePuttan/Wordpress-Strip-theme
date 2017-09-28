<?php
require_once('libs/wp_bootstrap_navwalker.php');

function sb_enqueue(){
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
}

function sb_theme_init(){
	add_theme_support( 'post-thumbnails' );

	add_image_size( "post-cover", 960, 9999 );
}

add_action( 'wp_enqueue_scripts', 'sb_enqueue' );
add_action( 'init', 'sb_theme_init' );



function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


register_nav_menus( array(
        'main-menu' => __( 'Primary Menu', 'Strip' ),
) );

?>