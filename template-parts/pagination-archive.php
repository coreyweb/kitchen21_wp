<?php
/**
 * Template part for pagination (for archives)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

?>

<?php if (show_posts_nav()) : ?>

  <div class="pagination-wrap">
    <div class="pagination">
      <?php posts_nav_link('&#8734;','&lsaquo; Newer Posts','Older Posts &rsaquo;'); ?>
    </div><!-- .pagination -->
  </div><!-- .pagination-wrap -->

<?php endif; ?>