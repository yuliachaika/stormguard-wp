<?php
/**
 * StormGuard functions and definitions
 */


function register__styles() {
	
  wp_register_style('style', get_template_directory_uri() . 
    '/style.css');
  wp_enqueue_style('style');

  wp_register_style('custom', get_template_directory_uri() . 
    '/css/custom.css');
  wp_enqueue_style('custom');
}

add_action( 'wp_enqueue_scripts', 'register__styles' );

function load_my_script() {

  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . 
   '/javascript/jquery.min.js');
  wp_enqueue_script('jquery');

  wp_register_script('global', get_template_directory_uri() . 
    '/javascript/global.min.js', array ('jquery'), null, true);
  wp_enqueue_script('global');
}

add_action('wp_enqueue_scripts', 'load_my_script');

/**
 * register_nav_menu('menu', 'main-menu');
 */
add_action('after_setup_theme', function(){
  register_nav_menus( array(
    'header_menu' => 'Header menu',
    'main-menu' => 'Main menu'
  ) );
});

/*
* Enable support for Post Thumbnails on posts and pages.
*/
add_theme_support( 'post-thumbnails' ); 

/*
* Add filters to remove br & span tags.
*/
add_filter('wpcf7_form_elements', function($content) {
$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
return $content;
});

add_filter( 'wpcf7_autop_or_not', '__return_false' );


/*
* Add Theme Options to Stormguard theme.
*/


if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Options',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'position'    => 22,
    'icon_url' => 'dashicons-admin-appearance', 

  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));
  
}

