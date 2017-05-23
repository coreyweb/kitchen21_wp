<?php 

// ----------------------------------------------------------------------------------------
// BREADCRUMBS
// ----------------------------------------------------------------------------------------
// Breadcrumb solution - modified from this source:
// https://github.com/BenSibley/ignite/blob/master/inc/breadcrumbs.php
// originally inspired by:
// https://www.thewebtaylor.com/articles/wordpress-creating-breadcrumbs-without-a-plugin

if ( ! function_exists( 'custom_breadcrumbs' ) ) {
  function custom_breadcrumbs( $args = array() ) {

  if ( is_front_page() ) {
    return;
  }
  if ( get_theme_mod( 'Kitchen21_show_breadcrumbs_setting' ) == 'no' ) {
    return;
  }

  global $post;
  $defaults  = array(
    'home_title'          => 'Home'
  );
  $args      = apply_filters( 'custom_breadcrumbs_args', wp_parse_args( $args, $defaults ) );

  /***** Begin Markup *****/

  // Open the breadcrumbs
  $html = '<ol itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb">';

  // Add Homepage link & separator (always present)
  $html .= '<li><a href="' . get_home_url() . '" title="' . esc_attr( $args['home_title'] ) . '">' . esc_attr( $args['home_title'] ) . '</a></li>';

  // Post
  if ( is_singular( 'post' ) ) {

    $category = get_the_category();
    $category_values = array_values( $category );
    $last_category = end( $category_values );
    $cat_parents = rtrim( get_category_parents( $last_category->term_id, true, ',' ), ',' );
    $cat_parents = explode( ',', $cat_parents );

    foreach ( $cat_parents as $parent ) {
      $html .= '<li>' . wp_kses( $parent, wp_kses_allowed_html( 'a' ) ) . '</li>';
    }
  } elseif ( is_singular( 'page' ) ) {

    if ( $post->post_parent ) {
      $parents = get_post_ancestors( $post->ID );
      $parents = array_reverse( $parents );

      foreach ( $parents as $parent ) {
        $html .= '<li><a href="' . esc_url( get_permalink( $parent ) ) . '" title="' . get_the_title( $parent ) . '">' . get_the_title( $parent ) . '</a></li>';
      }
    }
  } elseif ( is_singular( 'attachment' ) ) {

    $parent_id        = $post->post_parent;
    $parent_title     = get_the_title( $parent_id );
    $parent_permalink = esc_url( get_permalink( $parent_id ) );

    $html .= '<li><a href="' . esc_url( $parent_permalink ) . '" title="' . esc_attr( $parent_title ) . '">' . esc_attr( $parent_title ) . '</a></li>';
  } elseif ( is_singular() ) {

    $post_type         = get_post_type();
    $post_type_object  = get_post_type_object( $post_type );
    $post_type_archive = get_post_type_archive_link( $post_type );

    $html .= '<li><a href="' . esc_url( $post_type_archive ) . '" title="' . esc_attr( $post_type_object->labels->name ) . '">' . esc_attr( $post_type_object->labels->name ) . '</a></li>';
    $html .= '<li>' . $post->post_title . '</li>';
  } elseif ( is_category() ) {

    $parent = get_queried_object()->category_parent;

    if ( $parent !== 0 ) {

      $parent_category = get_category( $parent );
      $category_link   = get_category_link( $parent );

      $html .= '<li><a href="' . esc_url( $category_link ) . '" title="' . esc_attr( $parent_category->name ) . '">' . esc_attr( $parent_category->name ) . '</a></li>';
    }
    $html .= '<li>' . single_cat_title( '', false ) . '</li>';
  } elseif ( is_tag() ) {
    $html .= '<li>' . single_tag_title( '', false ) . '</li>';
  } elseif ( is_author() ) {
    $html .= '<li>' . get_queried_object()->display_name . '</li>';
  } elseif ( is_day() ) {
    $html .= '<li>' . get_the_date() . '</li>';
  } elseif ( is_month() ) {
    $html .= '<li>' . get_the_date( 'F Y' ) . '</li>';
  } elseif ( is_year() ) {
    $html .= '<li>' . get_the_date( 'Y' ) . '</li>';
  } elseif ( is_archive() ) {
    $custom_tax_name = get_queried_object()->name;
    $html .= '<li>' . esc_attr( $custom_tax_name ) . '</li>';
  } elseif ( is_search() ) {
    $html .= '<li>Search results for: ' . get_search_query() . '</li>';
  } elseif ( is_404() ) {
    $html .= '<li>' . __( 'Error 404', 'ignite' ) . '</li>';
  }

  $html .= '</ol>';
  $html = apply_filters( 'custom_breadcrumbs_filter', $html );

  echo wp_kses_post( $html );
  }
}