<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kitchen21
 */

get_header(); ?>
  
	<?php
  	while ( have_posts() ) : the_post();
  ?>

    <div class="block">
      <div class="row">
        <article class="menu-wrap">
          <div class="shelf-header header-menu">
            <h1><?php the_title() ?></h1>

            <?php if ( has_post_thumbnail() ) : ?>

            <img src="<?php vt_resize(get_the_ID(), 1000, 300, true) ?>" alt="<?php the_title() ?> image" class="img-responsive hidden-xs">
            <img src="<?php vt_resize(get_the_ID(), 767, 767, true) ?>" alt="<?php the_title() ?> image" class="img-responsive visible-xs">

            <?php endif; ?>

          </div><!-- .shelf-header -->

          <?php the_content() ?>        

          <div class="menu">
            <?php 
              if ( get_post_meta($post->ID, 'menu_pdf', true) ) :
                echo get_post_meta($post->ID, 'menu_pdf', true);
              endif;
            ?>
            
            <?php
              if ( current_user_can('edit_post') ) :
                echo '<p class="text-center"><a href="' . get_edit_post_link() . '" class="btn btn-info">Edit Page</a>';
              endif;
            ?>
            
          </div><!-- .menu -->
        </article><!-- .menu-wrap -->
      </div><!-- .row -->
    </div><!-- .block -->

  <?php
  	endwhile; // End of the loop.
	?>

<?php
get_sidebar();
get_footer();