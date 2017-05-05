<?php
/**
 * Template Name: About Us page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

get_header(); ?>

        <div class="block">
          <div class="row">
            <div class="col-xs-12">
              <h1><?php the_title() ?></h1>
              <?php the_content() ?>
              
              <?php get_template_part( 'template-parts/grid', 'menus-main' ); ?>

            </div><!-- .col-xs-12 -->
          </div><!-- .row -->
        </div><!-- .block -->

<?php
// get_sidebar();
get_footer();