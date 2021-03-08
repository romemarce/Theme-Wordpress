<?php
// PAG FUNCIONES 

function web_insertar_style(){
    wp_enqueue_style('reset',get_stylesheet_directory_uri().'/source/css/reset.css');
    wp_enqueue_style('foundation',get_stylesheet_directory_uri().'/source/css/foundation.min.css');
    wp_enqueue_style('style-lightbox',get_stylesheet_directory_uri().'/source/css/lightbox.css');
    wp_enqueue_style('style-sass',get_stylesheet_directory_uri().'/source/css/main.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,800,900,900i', array(), null);
}
add_action('wp_enqueue_scripts','web_insertar_style');

function web_insertar_js(){
  wp_enqueue_script('lightbox-js',get_template_directory_uri().'/source/js/lightbox.js',array(),true); 
  wp_enqueue_script('foundation-js',get_template_directory_uri().'/source/js/foundation.min.js',array('jquery'),true);
  wp_enqueue_script('app-js',get_template_directory_uri().'/source/js/app.js',array(),true);
}
add_action('wp_enqueue_scripts','web_insertar_js');

function theme_enqueueLogin(){
	wp_enqueue_style('custom-login',get_stylesheet_directory_uri().'/source/css/custom-login.css');
}
add_action('login_enqueue_scripts','theme_enqueueLogin');
/**===========CREACION DE MENUS=============**/
register_nav_menus(array(
  'menu_principal' => __('Menu Principal','webBase')
));
function theme_agregarNombreEnBody($classes = array()) {
  // Agrega el slug de la página a la clase del body by Elias
  global $post;
  if (is_object($post)) {
      $classes[] = $post->post_type . '-' . $post->post_name;
      $classes[] = $post->post_name;
  }
  return $classes;
}
add_filter('body_class', 'theme_agregarNombreEnBody');
function forzarCropEnDimensiones() {
    add_image_size('medium', get_option('medium_size_w'), get_option('medium_size_h'), true);
    add_image_size('standar',390,330,true);
    add_image_size('imagen_destacada',294,238,true);
}
add_action('after_setup_theme','forzarCropEnDimensiones');

function agregarTitulos() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'agregarTitulos');

// $theme = wp_get_theme();
// define('VERSION_THEME', $theme->display('Version'));

// function enqueueFrontend() {
//     wp_register_style('app', ASSETS_URI_CSS . 'app.min.css', array('google-fonts'), VERSION_THEME);
//     wp_register_script('app', ASSETS_URI_JS.'app.min.js', array('jquery'), VERSION_THEME, true);
// }
// add_action('wp_enqueue_scripts', 'enqueueFrontend');

/**============ WIDGETS ======================**/
function wdCabureweb_widgets_init() {
    register_sidebar( array(
      'name'          => 'Widget de Ejemplo',
      'id'            => 'id-del-widget',
      'description'   => 'Descripcion.',
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ));
}
add_action( 'widgets_init', 'wdCabureweb_widgets_init' );
/**============OTROS==========================**/
// include 'includes/shortcode-ejemplo.php';