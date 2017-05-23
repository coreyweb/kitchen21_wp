<?php
// make category use parent category template
function load_cat_parent_template($template) {

    $cat_ID = absint( get_query_var('cat') );
    $category = get_category( $cat_ID );

    $templates = array();

    if ( !is_wp_error($category) )
        $templates[] = "category-{$category->slug}.php";

    $templates[] = "category-$cat_ID.php";

    // trace back the parent hierarchy and locate a template
    if ( !is_wp_error($category) ) {
        $category = $category->parent ? get_category($category->parent) : '';

        if( !empty($category) ) {
            if ( !is_wp_error($category) )
                $templates[] = "category-{$category->slug}.php";

            $templates[] = "category-{$category->term_id}.php";
        }
    }

    $templates[] = "category.php";
    $template = locate_template($templates);

    return $template;
}
add_action('category_template', 'load_cat_parent_template');

// Set up logic to check if a post is in a subcategory
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
  function post_is_in_descendant_category( $cats, $_post = null ) {
    foreach ( (array) $cats as $cat ) {
      // get_term_children() accepts integer ID only
      $descendants = get_term_children( (int) $cat, 'category' );
      if ( $descendants && in_category( $descendants, $_post ) )
        return true;
    }
    return false;
  }
}