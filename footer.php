<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kitchen21
 */

?>
      </div><!-- .container-fluid -->
    </div><!-- .content -->
  </main>

  <?php 
    query_posts(
      array(
        'post_type' => 'contact_info',
        'orderby' => 'menu_order',
        'order'   => 'ASC',
        'showposts' => 1
      )
    );

    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>

  <footer id="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-9">
          <div class="location-details">
            
            <?php
              if ( get_post_meta($post->ID, 'restaurant_address', true) ) :
                echo get_post_meta($post->ID, 'restaurant_address', true);
              endif; 
            ?>
            
            <?php if ( get_post_meta($post->ID, 'phone_number', true) ) : ?>
            
            <span><a href="tel:<?php echo get_post_meta($post->ID, 'phone_number', true) ?>"><?php echo get_post_meta($post->ID, 'phone_number', true) ?></a></span>

            <?php endif; ?>

            <?php if ( get_post_meta($post->ID, 'hours', true) ) : ?>
            
            <span><?php echo get_post_meta($post->ID, 'hours', true); ?></span>
            
            <?php endif; ?>
            
            <?php if ( get_post_meta($post->ID, 'cafe_hours', true) ) : ?>
              
            <span class="cafe">* <?php echo get_post_meta($post->ID, 'cafe_hours', true); ?></span>

            <?php endif; ?>

          </div>
          <div class="row">
            <div class="col-md-7 col-md-offset-0 col-sm-8 col-sm-offset-2">
              <form action="#">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="enter email address">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Join Our Mailing List</button>
                  </span>
                </div><!-- .input-group -->
              </form>
            </div><!-- .col-sm-4 -->
          </div><!-- .row -->
        </div><!-- .col-md-7 -->
        <div class="col-md-3">
          <div class="social-share">

            <a href="#">Email Us</a>
            
            <?php if ( get_post_meta($post->ID, 'facebook_link', true) ) : ?>
            
            <a href="<?php echo get_post_meta($post->ID, 'facebook_link', true) ?>" class="icon-facebook">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use></svg>
            </a>
            
            <?php endif; ?>

            <?php if ( get_post_meta($post->ID, 'twitter_link', true) ) : ?>
            
            <a href="<?php echo get_post_meta($post->ID, 'twitter_link', true) ?>" class="icon-twitter">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use></svg>
            </a>
            
            <?php endif; ?>

            <?php if ( get_post_meta($post->ID, 'instagram_link', true) ) : ?>
            
            <a href="<?php echo get_post_meta($post->ID, 'instagram_link', true) ?>" class="icon-instagram">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-instagram"></use></svg>
            </a>
            
            <?php endif; ?>

          </div><!-- .social-share -->
        </div><!-- .col-md-5 -->
      </div><!-- .row -->
    </div><!-- .container-fluid -->
  </footer><!-- #footer -->
  
  <?php
      endwhile;
    endif;
    wp_reset_query();
  ?>
</div><!-- #page -->

<div class="menu-backdrop"></div>

<?php wp_footer(); ?>

</body>
</html>