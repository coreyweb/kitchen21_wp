<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

?>

<article class="post" id="post-<?php the_ID(); ?>">
      
  <header class="entry-header">
    <h4 class="category-label">
      <span class="has-lines">
        <?php
          // if this post's category is a subcategory, don't show parent category name in this link
          $category = get_the_category();
          $ancestors = get_ancestors( $category[0]->term_id, 'category' );
          $parent = $ancestors[0];
                      
          foreach((get_the_category()) as $childcat):
            if (cat_is_ancestor_of($parent, $childcat)) :
              echo '<a href="'.get_category_link($childcat->cat_ID).'">';
              echo $childcat->cat_name . '</a> ';
            else:
              the_category( ' ', 'single' );
            endif;
          endforeach;
        ?>                
      </span>
    </h4>
    
    <h1><?php the_title() ?></h1>
    <?php get_template_part('template-parts/social', 'share-bar'); ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <div class="article-body">
      <?php the_content() ?>
    
      <?php
        if ( current_user_can('edit_post') ) :
          echo '<p class="text-center"><a href="' . get_edit_post_link() . '" class="btn btn-info">Edit Post</a>';
        endif;    
      ?>
    </div><!-- .article-body -->
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php get_template_part('template-parts/social', 'share-bar'); ?>

    <?php get_template_part('template-parts/content', 'related'); ?>

    <div class="comments-wrap">
      <h3 class="heading-light">Comments</h3>
      <?php
    	  // If comments are open or we have at least one comment, load up the comment template.
    	  if ( comments_open() || get_comments_number() ) :
    	    comments_template();
    	  endif;    
      ?>
    </div><!-- .comments-wrap -->

    <?php get_template_part('template-parts/pagination', 'single') ?>

  </footer><!-- .entry-footer -->
</article><!-- #post-## -->