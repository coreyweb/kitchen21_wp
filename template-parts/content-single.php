<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

?>

<div class="shelf-header ">
  <h4>
    <?php bloginfo( 'name' ); ?> Blog
  </h4>
    
    <img src="/wp/wp-content/uploads/2017/05/shelf-header-about-1200x284.jpg" alt="About Kitchen 21 image" class="img-responsive hidden-xs">
    <img src="/wp/wp-content/uploads/2017/05/shelf-header-about-767x587.jpg" alt="About Kitchen 21 image" class="img-responsive visible-xs">

</div><!-- .shelf-header -->

    <article class="post" id="post-<?php the_ID(); ?>">
      <h1><?php the_title() ?></h1>

      <?php if ( has_post_thumbnail() ) : ?>

      <p><img src="<?php vt_resize(get_the_ID(), 1200, 284, true) ?>" alt="<?php the_title(); ?> image" class="img-responsive"></p>

      <?php endif; ?>
      
      <?php the_content() ?>
      
      <?php
        if ( current_user_can('edit_post') ) :
          echo '<p class="text-center"><a href="' . get_edit_post_link() . '" class="btn btn-info">Edit Post</a>';
        endif;    
      ?>

      <?php /* HIDE COMMENTS
        <div class="comments-wrap">
          <h3 class="heading-light">Comments</h3>
          <?php
        	  // If comments are open or we have at least one comment, load up the comment template.
        	  if ( comments_open() || get_comments_number() ) :
        	    comments_template();
        	  endif;    
          ?>
        </div><!-- .comments-wrap -->
      */ ?>
      
    </article><!-- .post -->
      
    <?php get_template_part('template-parts/pagination', 'single') ?>