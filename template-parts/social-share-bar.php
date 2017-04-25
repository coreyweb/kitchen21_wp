<?php
/**
 * Template part for share bar (top and bottom of post template)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

?>

<div class="share-wrap">
  <h4>Share</h4>
  <div class="share-btns" data-text="<?php the_title() ?>" data-url="<?php the_permalink() ?>"></div>
  <div class="share-links">
    <div class="share-email" title="Email">
      <?php 
        $email_title = get_the_title(); 
        $email_title = str_replace(' ', '%20', $email_title);
 ?>
      <a href="mailto:?subject=Kitchen21:%20<?php echo $email_title ?>&body=Hi,%0D%0A%0D%0AI%20thought%20you'd%20love%20this%20story%20from%20Kitchen21:%0D%0A%0D%0A<?php the_permalink() ?>">
        <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-envelope-alt"></use></svg>
        <span class="sr-only">Email</span>
      </a>
    </div><!-- .share-email -->
  </div><!-- .share-links -->
</div><!-- share-wrap -->
