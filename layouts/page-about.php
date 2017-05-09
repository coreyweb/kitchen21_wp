<?php
/**
 * Template Name: About Us page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

get_header(); ?>

    <article class="page">
      <div class="shelf-header ">
        <h1>
          <?php the_title() ?>
        </h1>
        <img src="<?php vt_resize(get_the_ID(), 1200, 284, true) ?>" alt="About Kitchen 21 image" class="img-responsive hidden-xs">
        <img src="<?php vt_resize(get_the_ID(), 767, 587, true) ?>" alt="About Kitchen 21 image" class="img-responsive visible-xs">
      </div><!-- .shelf-header -->

      <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', 'page' );

        endwhile; // End of the loop.
      ?>
      
    </article><!-- .page -->
      
    <div class="block">
      <div class="grid">

        <?php get_template_part( 'template-parts/grid', 'menus-main' ); ?>

      </div><!-- .grid -->
    </div><!-- .block -->

<?php
get_footer();