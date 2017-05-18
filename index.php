<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

get_header(); ?>
  
  <div class="shelf-header ">

    <div class="shelf-header ">
      <h1><?php bloginfo( 'name' ); ?> Blog</h1>

      <img src="<?php vt_resize(24, 1200, 284, true) ?>" alt="<?php bloginfo( 'name' ); ?> Blog image" class="img-responsive hidden-xs">
      <img src="<?php vt_resize(24, 767, 587, true) ?>" alt="<?php bloginfo( 'name' ); ?> Blog image" class="img-responsive visible-xs">

    </div><!-- .shelf-header -->
        
  
  <?php
  	if ( have_posts() ) :
  	  while ( have_posts() ) : the_post();
  ?>

  <article class="post-link">
    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

    <?php if ( has_post_thumbnail() ) : ?>

    <p><img src="<?php vt_resize(get_the_ID(), 1200, 284, true) ?>" alt="<?php the_title(); ?> image" class="img-responsive"></p>
    
    <?php endif; ?>

    <?php the_content(); ?>
  </article><!-- .post-link -->

  <?php 
      endwhile;

  	else :

  	  get_template_part( 'template-parts/content', 'none' );

  	endif; 

	  get_template_part('template-parts/pagination', 'archive')
    
  ?>


<?php
get_footer();