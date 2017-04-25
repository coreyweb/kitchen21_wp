<?php
/**
 * Template Name: Home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

get_header(); ?>

<div class="content content-wide">  
  <div class="carousel-wrap">
    <div class="carousel-home slider">
      <?php get_template_part( 'template-parts/module', 'home-carousel' ); ?>
    </div><!-- .carousel-home slider -->
  </div><!-- .carousel-wrap -->
</div><!-- .content content-wide -->

<div class="content">
  <div class="container-fluid">
    <div class="block post-grid">

      <h2 class="text-center"><span class="has-lines">The Daily Kitchen21</span></h2>
      <div class="row">
        <?php
            // One New Thing Category
            //$category_id = 10;
            //include get_template_directory() . '/template-parts/list-grid-category-square.php';

            ?>
            
          <?php
          /**
           * Template part for category grid (square featured images)
           *
           * @link https://codex.wordpress.org/Template_Hierarchy
           *
           * @package Kitchen21
           */

          ?>

        <?php 
            // Morning Mirror Category
            $category_id = 10;
            include get_template_directory() . '/template-parts/list-grid-category-square-home.php';

            // Morning Mirror Category
            $category_id = 11;
            include get_template_directory() . '/template-parts/list-grid-category-square-home.php';

            // #Kitchen21YOUR Category
            $category_id = 4;
            include get_template_directory() . '/template-parts/list-grid-category-square-home.php';

            // The Fix
            $category_id = 6;
            include get_template_directory() . '/template-parts/list-grid-category-square-home.php';
        ?>

      </div><!-- .row -->
      
      <div class="row">

        <?php
            // Punch Bowl Category
            $category_id = 5;
            include(locate_template('/template-parts/list-grid-category-landscape.php'));

            // Our Journey Category
            $category_id = 20;
            include get_template_directory() . '/template-parts/list-grid-story.php';

            // #Kitchen21Your Promo
            include get_template_directory() . '/template-parts/list-grid-story-Kitchen21your.php';
        ?>

      </div><!-- .row -->
    </div>
    
      <?php get_template_part( 'template-parts/module', 'video' ); ?>
    </div>
  </div>

  <?php get_template_part( 'template-parts/module', 'tagline' ); ?>

  <div class="content">
    <div class="container-fluid">
      <div class="block post-grid">
        <?php get_template_part( 'template-parts/module', 'products' ); ?>
      </div><!-- .block post-grid -->
    </div><!-- .container-fluid -->
  </div><!-- .content -->

<?php
get_sidebar();
get_footer();