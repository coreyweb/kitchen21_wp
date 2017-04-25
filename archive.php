<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

get_header(); ?>

  <?php
    if ( have_posts() ) :

      the_archive_title( '<h1>', '</h1>' );
      the_archive_description( '<p>', '</p>' );

      /* Start the Loop */
      while ( have_posts() ) : the_post();

        /**
         * Run the loop for the search to output the results.
         * If you want to overload this in a child theme then include a file
         * called content-search.php and that will be used instead.
         */
        get_template_part( 'template-parts/content', 'search' );

      endwhile;

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif; 

    get_template_part ( 'template-parts/pagination-archive'); // pagination for category

  ?>

<?php
get_sidebar();
get_footer();