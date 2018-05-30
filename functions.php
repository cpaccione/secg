<?php

// Load Styles and Scripts here
function theme_styles() {
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/js/all.js');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'google-font-lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,700');
	wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/css/secg.css' );
	//wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Bootstrap 3.0 Nav registration
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Declare sidebar widget zone
function create_widget( $name, $id, $description ) {

	$args = array(
		'name'			=> __( $name ),
		'id'			=> $id,
		'description' 	=> $description,
		'before_widget' => '',
		'after_widget' 	=> '',
		'before_title' 	=> '<h3>',
		'after_title' 	=> '</h3>'
		);

		register_sidebar( $args );
}

create_widget( 'Blog Sidebar', 'blog_side', 'Blog Sidebar' );
create_widget( 'Contact Sidebar', 'contact_side',  'Contact Sidebar' );

?>
