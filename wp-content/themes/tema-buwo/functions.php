<?php

//aplicar la reglas para el custom post type
flush_rewrite_rules();
//remover margin del admin wordpress
add_action('get_header', 'my_filter_head');
function my_filter_head() {
remove_action('wp_head', '_admin_bar_bump_cb');
}
//agregar css y bootstrap
function agregar_css_js(){
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrapCss', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('css', get_template_directory_uri() . '/style.css');

  //wp_enqueue_script('bootstrapJs',get_template_directory_uri(). '/js/bootstrap.min.js', array ( 'jquery' ), '1.14', true);
  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' , array('jquery'), '1.14',false );
  wp_enqueue_script( 'bootstrapJs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' , array('jquery'), '1.14',false );


}

add_action("wp_enqueue_scripts", "dcms_insertar_google_fonts");

function dcms_insertar_google_fonts(){
    $url = "https://fonts.googleapis.com/css?family=Amaranth|Archivo+Black|Hammersmith+One|Homenaje|Muli|Rubik|Ubuntu&display=swap";
    wp_enqueue_style('google_fonts', $url);
 }

add_action('wp_enqueue_scripts', 'agregar_css_js');
