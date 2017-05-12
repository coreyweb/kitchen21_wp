<?php
/**
 * Template Name: Home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

get_header(); ?>

        <div class="block">
          <div class="row">
            <div class="col-md-3">
              <div id="logo">
                <h1>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo.svg" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive"></a>
                </h1>
              </div><!-- #logo -->
              <div class="intro">
                <?php
                  while ( have_posts() ) : the_post();
                    the_content();
                  endwhile; // End of the loop.
                ?>
              </div><!-- .intro -->
            </div><!-- .col-sm-3 -->
            <div class="col-md-9">

              <?php get_template_part( 'template-parts/grid', 'menus-main' ); ?>

            </div><!-- .col-sm-9 -->
          </div><!-- .row -->
        </div><!-- .block -->
        <div class="block">
          <div class="row vertical-align">

            <div class="col-sm-6">
              <?php 
                query_posts(
                  array(
                    'post_type' => 'contact_info',
                    'showposts' => 1,
                    'post_status' => 'publish'
                  )
                );

                if ( have_posts() ) : 
                  while ( have_posts() ) : the_post();
                
                  $address = get_post_meta($post->ID, 'restaurant_address', true);

                  endwhile;
                endif; 
            ?>          
              
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3030.550352110494!2d-73.98963468488753!3d40.573605879347205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c245cbeab87bd7%3A0x2eb9a72b4b093331!2s<?php echo urlencode($address); ?>!5e0!3m2!1sen!2sus!4v1493843831832" width="500" height="400"></iframe>
              </div>
            </div><!-- .col-sm-6 -->
            
            <div class="col-sm-6">
              <div class="has-arrow-left">
                <h3 class="highlight">Stop by and grab a bite!</h3>

                <?php 
                  query_posts(
                    array(
                      'post_type' => 'contact_info',
                      'showposts' => 1,
                      'post_status' => 'publish'
                    )
                  );

                  if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>

                <p>
                  <?php if ( get_post_meta($post->ID, 'restaurant_address', true) ) : echo get_post_meta($post->ID, 'restaurant_address', true) ?><br>
                  <?php endif; ?>

                  <?php if ( get_post_meta($post->ID, 'hours', true) ) : ?>
                  Hours: <?php echo get_post_meta($post->ID, 'hours', true) ?><br>
                  <?php endif; ?>

                  <?php if ( get_post_meta($post->ID, 'phone_number', true) ) : ?>
                  <a href="tel:<?php echo get_post_meta($post->ID, 'phone_number', true) ?>"><?php echo get_post_meta($post->ID, 'phone_number', true) ?></a>
                  <?php endif; ?>                  
                </p>
                
                <?php 
                  endwhile;
                endif; 
                ?>

              </div><!-- .has-arrow-left -->
            </div><!-- .col-sm-6 -->
          </div><!-- .row -->
        </div><!-- .block -->

<?php
get_footer();