<?php
/**
 * Template part for pagination on posts (prev/next post)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

?>

    <div class="pagination-wrap">
      <div class="pagination">
        <?php previous_post_link( '%link','&lsaquo; Previous' ) ?>
        <?php next_post_link( '%link','Next &rsaquo;' ) ?>  
      </div><!-- .pagination -->
    </div>