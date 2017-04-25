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
      <?php pagination('&larr; Prev', 'Next &rarr;'); ?>
    </div><!-- .pagination -->
  </div><!-- .pagination-wrap -->

<?php endif; ?>