<?php
//hacer referencia al tema hijo
function enqueue_styles_child_theme() {

	$parent_style = 'twentynineteen-style';
	$child_style  = 'twentynineteen-child-style';

	wp_enqueue_style( $parent_style,
				get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( $child_style,
				get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
				wp_get_theme()->get('Version')
				);
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );

// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css',
  					get_stylesheet_directory_uri() . '/css/bootstrap.min.css',
  					array(),
  					'4.3.1'
  					);
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

// Incluir Bootstrap JS
function bootstrap_js() {
	wp_enqueue_script( 'bootstrap_js',
  					get_stylesheet_directory_uri() . '/js/bootstrap.min.js',
  					array('jquery'),
  					'4.1.3',
  					true);
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');

?>
