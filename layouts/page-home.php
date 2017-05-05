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
              <div class="grid">
                
                <?php 
                // show the first item in Menus custom post type
                  query_posts(
                    array(
                      'post_type' => 'menus',
                      'orderby' => 'menu_order',
                      'order' => 'ASC',
                      'showposts' => 1,
                      'post_status' => 'publish'
                    )
                  );

                  if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
                
                <div class="item item-heading">
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php vt_resize(get_the_ID(), 1600, 378, true) ?>" alt="<?php the_title() ?> image" class="img-responsive hidden-xs">
                    <img src="<?php vt_resize(get_the_ID(), 500, 500, true) ?>" alt="<?php the_title() ?> image" class="img-responsive visible-xs">
                    <div class="item-copy">
                      <h3>
                        <?php 
                          if ( get_post_meta($post->ID, 'special_title', true) ) : 

                            echo get_post_meta($post->ID, 'special_title', true); // show special title, if it exists
                      
                            else : 

                              the_title(); // if no special title exists, show the default one

                          endif; 
                        ?>
                      </h3>
                    </div><!-- .item-copy -->
                  </a>
                </div><!-- .item --> 
                
                <?php
                    endwhile; 
                  endif; 
                  wp_reset_query();
                ?>
                    
                <div class="row row-tight">

                  <?php 
                  // show the next 4 items in Menus custom post type
                    query_posts(
                      array(
                        'post_type' => 'menus',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'showposts' => 4,
                        'offset' => 1,
                        'post_status' => 'publish'
                      )
                    );

                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                  ?>

                  <div class="col-sm-6">
                    <div class="item ">
                      <a href="<?php the_permalink() ?>">
                        <img src="<?php vt_resize(get_the_ID(), 858, 540, true) ?>" alt="<?php the_title() ?> image" class="img-responsive hidden-xs">
                        <img src="<?php vt_resize(get_the_ID(), 500, 500, true) ?>" alt="<?php the_title() ?> image" class="img-responsive visible-xs">
                        <div class="item-copy">
                          <h3>
                            <?php 
                              if ( get_post_meta($post->ID, 'special_title', true) ) : 

                                echo get_post_meta($post->ID, 'special_title', true); // show special title, if it exists
                      
                                else : 

                                  the_title(); // if no special title exists, show the default one

                              endif; 
                            ?>
                          </h3>    
                          <p><?php echo(get_the_excerpt()); ?></p>    
                        </div><!-- .item-copy -->
                      </a>
                    </div><!-- .item -->          
                  </div><!-- .col-sm-6 -->

                  <?php
                      endwhile; 
                    endif; 
                    wp_reset_query();
                  ?>

                </div><!-- .row -->
              </div><!-- .grid -->
            </div><!-- .col-sm-8 -->
          </div><!-- .row -->
        </div><!-- .block -->
        <div class="block">
          <div class="row vertical-align">
            <div class="col-sm-6">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3030.550352110494!2d-73.98963468488753!3d40.573605879347205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c245cbeab87bd7%3A0x2eb9a72b4b093331!2s3051+W+21st+St%2C+Brooklyn%2C+NY+11224!5e0!3m2!1sen!2sus!4v1493843831832" width="500" height="400"></iframe>
              </div>
            </div><!-- .col-sm-6 -->
            <div class="col-sm-6">
              <div class="has-arrow-left">
                <h3 class="highlight">Stop by and grab a bite!</h3>
                <p>
                  3051 W. 21st Street Brooklyn, NY 11224<br>
                  Hours: Monday – Sunday: 11 AM – 11 PM<br>
                  <a href="tel:718-954-9801">718-954-9801</a>
                </p>
              </div><!-- .has-arrow-left -->
            </div><!-- .col-sm-6 -->
          </div><!-- .row -->
        </div><!-- .block -->

<?php
// get_sidebar();
get_footer();