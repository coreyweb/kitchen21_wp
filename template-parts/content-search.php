<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

?>

<article class="grid-item category-link category-link-col">
  <div class="row">
    <div class="col-sm-4">  
    <?php if ( has_post_thumbnail() ) : ?>

      <a href="<?php the_permalink() ?>">
        <img src="<?php vt_resize(get_the_ID(), 400, 256, true) ?>" alt="<?php the_title() ?>" class="img-responsive" >
      </a>

    <?php endif; ?>
    </div><!-- .col-sm-4 -->
    <div class="col-sm-8">  
      <h4><span class="has-lines"><?php
          $category = get_the_category();
            the_category(', ');
        ?></span></h4>
      <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
      <p class="excerpt"><?php echo(get_the_excerpt()); ?></p>    
      <p class="post-link-wrap"><a href="<?php the_permalink() ?>">
      <?php if ( get_post_meta($post->ID, 'read_more_label', true) ) : ?>
        <?php echo get_post_meta($post->ID, 'read_more_label', true) ?>
      <?php else : ?>
        Read More
      <?php endif; ?>
      </a></p>
    </div><!-- .col-sm-8 -->
  </div><!-- .row -->
</article><!-- .grid-item.category -->
