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
              <?php /* HIDE SUBSCRIBE FOR LAUNCH
              
              <form action="#">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="enter email address">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Join Our Mailing List</button>
                  </span>
                </div><!-- .input-group -->
              </form>
              
              
              */ ?>
            </div><!-- .col-sm-4 -->
          </div><!-- .row -->
        </div><!-- .col-md-7 -->
        <div class="col-md-3">
          <div class="social-share">

            
            <?php if ( get_post_meta($post->ID, 'email_address', true) ) : ?>

            <a href="mailto:<?php echo get_post_meta($post->ID, 'email_address', true) ?>">Contact Us</a>
            
            <?php endif; ?>

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

<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "Restaurant",
  "name": "Kitchen 21",
  "url": "http://kitchen-21.com/",
  "image": "http://kitchen-21.com/schema/kitchen-21-logo.jpg",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "3052 W 21st Street",
    "addressLocality": "Brooklyn",
    "addressRegion": "NY",
    "postalCode": "11224",
    "addressCountry": "United States"
  },
  "priceRange": "$$",
  "servesCuisine": "Seafood, American",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "40.572567",
    "longitude": "-73.987455"
  },
  "hasMap": "https://www.google.com/maps/place/3052+W+21st+St,+Brooklyn,+NY+11224/@40.572891,-73.9897367,17z/data=!4m13!1m7!3m6!1s0x89c245cbf4edf861:0x8ce1ac27d8c4c3c6!2s3052+W+21st+St,+Brooklyn,+NY+11224!3b1!8m2!3d40.572891!4d-73.987548!3m4!1s0x89c245cbf4edf861:0x8ce1ac27d8c4c3c6!8m2!3d40.572891!4d-73.987548",
  "openingHours": "Mo, Tu, We, Th, Fr, Sa, Su 11:00-23:00",
  "telephone": "+1-718-954-9801"
}
 </script>

<?php wp_footer(); ?>

</body>
</html>