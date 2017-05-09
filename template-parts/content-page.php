<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

?>
    <article class="page">
      <div class="shelf-header ">
        <h1>
          <?php the_title() ?>
        </h1>
        <img src="<?php vt_resize(get_the_ID(), 1200, 284, true) ?>" alt="<?php the_title() ?> image" class="img-responsive hidden-xs">
        <img src="<?php vt_resize(get_the_ID(), 767, 587, true) ?>" alt="<?php the_title() ?> image" class="img-responsive visible-xs">
      </div><!-- .shelf-header -->

      <?php
        the_content();
      ?>

      <?php
        if ( current_user_can('edit_post') ) :
          echo '<p class="text-center"><a href="' . get_edit_post_link() . '" class="btn btn-info">Edit Page</a>';
        endif;
      ?>

    </article><!-- .page -->