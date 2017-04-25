<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <div class="article-body">

      <?php
        the_content();
      ?>

    </div><!-- .article-body -->
  </div><!-- .entry-content -->

  <?php
    if ( current_user_can('edit_post') ) :
      echo '<p class="text-center"><a href="' . get_edit_post_link() . '" class="btn btn-info">Edit Page</a>';
    endif;    
  ?>

</article><!-- #post-## -->