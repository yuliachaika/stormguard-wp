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


/**
 * single.php
 */
define( SINGLE_PATH, TEMPLATEPATH . '/single' );

add_filter( 'single_template', 'my_single_template' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function my_single_template( $single ) {
  global $wp_query, $post;

if ( file_exists( SINGLE_PATH . '/single-' . $post->ID . '.php' ) ) {
  return SINGLE_PATH . '/single-' . $post->ID . '.php';
}

foreach ( (array) get_the_category() as $cat ) :

  if ( file_exists( SINGLE_PATH . '/single-cat-' . $cat->slug . '.php' ) ) {
    return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
  } elseif ( file_exists( SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php' ) ) {
    return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
  }

  endforeach;

$wp_query->in_the_loop = true;
foreach ( (array) get_the_tags() as $tag ) :

  if ( file_exists( SINGLE_PATH . '/single-tag-' . $tag->slug . '.php' ) ) {
    return SINGLE_PATH . '/single-tag-' . $tag->slug . '.php';
  } elseif ( file_exists( SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php' ) ) {
    return SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php';
  }

endforeach;
$wp_query->in_the_loop = false;

if ( file_exists( SINGLE_PATH . '/single.php' ) ) {
  return SINGLE_PATH . '/single.php';
  }
  return $single;
}


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



/* Modify the read more link on the_excerpt() */
 
function et_excerpt_length($length) {
    return 75;
}
add_filter('excerpt_length', 'et_excerpt_length');
 
/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
 
function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="post__text post__text--link">Read More</a></div>';
}
add_filter('excerpt_more', 'et_excerpt_more');

