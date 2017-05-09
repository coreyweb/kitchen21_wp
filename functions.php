<?php
/**
 * Kitchen21 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kitchen21
 */

if ( ! function_exists( 'Kitchen21_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function Kitchen21_setup() {

  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'Kitchen21' ),
    'footer' => esc_html__( 'Footer', 'Kitchen21' ),
  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
  ) );

}
endif;
add_action( 'after_setup_theme', 'Kitchen21_setup' );

/** ------------------------------------------------------------------
 *  Custom functions and shortcodes
    ------------------------------------------------------------------
 */

// Breadcrumbs
  // require ( get_template_directory() . '/inc/functions/nav_breadcrumbs.php' );

// Custom template tags for this theme.
  require ( get_template_directory() . '/inc/template-tags.php' );
  require ( get_template_directory() . '/inc/functions/category-rules.php' );

// Shortcodes
  require( get_template_directory() . '/inc/shortcodes/gallery-shortcode.php' );
  
// Image management ---------------------------------------------------------
  require( get_template_directory() . '/inc/functions/image_management.php' );
  require( get_template_directory() . '/inc/functions/image_responsive.php' );

// Replace oembed videos with responsive markup
  require( get_template_directory() . '/inc/functions/video_responsive.php' );

// Other functions ----------------------------------------------------------
  require( get_template_directory() . '/inc/functions/comment_notifications.php' );
	require( get_template_directory() . '/inc/functions/no-pingback.php' );
	require( get_template_directory() . '/inc/functions/nav-pagination.php' );
  require get_template_directory() . '/inc/functions/class-featured-post.php'; // Show featured story box in post admin

// turn off toolbar for logged in visitors and admins
  add_filter( 'show_admin_bar', '__return_false' );

// Include Mailchimp API functionality
  // require_once('lib/mailchimp/mailchimp.php' );
  
// Scripts and style rules
function load_styles() {
  wp_enqueue_style( 'Kitchen21-style', get_stylesheet_uri() );
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'load_styles' );

function load_scripts() {
  // wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/vendor/slick.min.js', array('jquery'),'1.6.0', true);
  // wp_enqueue_script('sharrre', get_template_directory_uri() . '/assets/js/vendor/jquery.sharrre.min.js', array('jquery'),'1.0', true);
  wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/dist/scripts.min.js', array('jquery'),'1.0', true);
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// move jquery to footer
function wpse_173601_enqueue_scripts() {
    wp_scripts()->add_data( 'jquery', 'group', 1 );
    wp_scripts()->add_data( 'jquery-core', 'group', 1 );
    wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
}
add_action( 'wp_enqueue_scripts', 'wpse_173601_enqueue_scripts' );

// remove emoji scripts and other unnecessary stuff
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action ('wp_head', 'rsd_link');

// Override built in rules for "excerpt" display:
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_filter( 'excerpt_length', 'ech_excerpt_length', 999 );
function ech_excerpt_length( $length ) {
	return 30;
}

// Kitchen21 built-in image compression to max settings
function my_image_quality( $quality ) {
    return 100;
}
add_filter( 'jpeg_quality', 'my_image_quality' );
add_filter( 'wp_editor_set_quality', 'my_image_quality' );

// remove auto paragraphs from category descriptions
remove_filter('term_description','wpautop');


// fix parent rules for active nav state on custom post types
add_filter('nav_menu_css_class', 'current_type_nav_class', 10, 2);
function current_type_nav_class($classes, $item) {
    // Get post_type for this post
    $post_type = get_query_var('post_type');
    // Removes current_page_parent class from blog menu item
    if ( get_post_type() == $post_type )
        $classes = array_filter($classes, "get_current_value" );
    // Go to Menus and add a menu class named: {custom-post-type}-menu-item
    // This adds a current_page_parent class to the parent menu item
    if( in_array( $post_type.'-menu-item', $classes ) )
      array_push($classes, 'current_page_parent');
    return $classes;
}
function get_current_value( $element ) {
    return ( $element != "current_page_parent" );
}