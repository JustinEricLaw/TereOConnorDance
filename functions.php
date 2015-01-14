<?php
// WP Menu
add_theme_support('menus');

function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu')
		)
	);
}
add_action('init', 'register_theme_menus');


// WP CSS Enqueue
function tereoc_theme_styles() {
	wp_enqueue_style('style.css', 
		get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'tereoc_theme_styles');


// WP JS Equeue
function tereoc_theme_js() {
	wp_enqueue_script('hideaddressbar.js', 
		get_template_directory_uri() . '/js/hideaddressbar.js', 
		'', '', false);
	wp_enqueue_script('respond.min.js', 
		get_template_directory_uri() . '/js/respond.min.js', 
		'', '', false);
	wp_enqueue_script('jquery.flexnav.min.js', get_template_directory_uri() . '/js/jquery.flexnav.min.js', 
		array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'tereoc_theme_js');


?>