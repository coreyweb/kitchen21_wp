<?php
/**
 * Template Name: About Us page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

get_header(); ?>

<?php
  while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/content', 'page' );

  endwhile; // End of the loop.
?>
      
    <div class="block">
      <div class="grid">

        <?php get_template_part( 'template-parts/grid', 'menus-main' ); ?>

      </div><!-- .grid -->
    </div><!-- .block -->

<?php
get_footer();