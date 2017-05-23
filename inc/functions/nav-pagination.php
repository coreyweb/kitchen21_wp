<?php
/**
 * Template part for improved pagination (categories, etc.)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

// Reference: http://codex.wordpress.org/Function_Reference/paginate_links

// Improved Category pagination (instead of previous and next)
// Reference: http://codex.wordpress.org/Function_Reference/paginate_links
  function pagination($prev = 'Prev', $next = 'Next') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'mid_size' => 3,
        'end_size' => 2,
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

    echo paginate_links( $pagination );
};

// Determine if there's pagination on category/archive pages
function show_posts_nav() {
    global $wp_query;
    return ($wp_query->max_num_pages > 1);
}