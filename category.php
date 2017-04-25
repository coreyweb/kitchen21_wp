<?php
/**
 * The template for displaying Morning Mirror Category
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

get_header(); ?>
  
  <?php 

    if ( have_posts() ) : // if there's content in this category, run the loop

  ?>

  <article class="">

    <?php if ( has_post_thumbnail() ) : ?>

      <a href="<?php the_permalink() ?>">
       <img src="<?php vt_resize(get_the_ID(), 400, 256, true) ?>" alt="<?php the_title() ?>" class="img-responsive">
      </a>

    <?php endif; ?>

    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>

    <p class="excerpt"><?php echo(get_the_excerpt()); ?></p>
  
    <p class="post-link-wrap">
      <a href="<?php the_permalink() ?>">Read More</a>
    </p>

  </article><!-- .grid-item.category -->


  <?php 
  	else : 	// If no content, include the "No posts found" template.

  		get_template_part( 'template-parts/content', 'none' );

  	endif;

  ?>

<?php
get_sidebar();
get_footer();