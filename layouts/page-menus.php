<?php
/**
 * Template Name: Menus page
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
                <div class="row row-tight">

                  <?php 
                  // show the next 4 items in Menus custom post type
                    query_posts(
                      array(
                        'post_type' => 'menus',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'showposts' => -1,
                        'post_status' => 'publish'
                      )
                    );

                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                  ?>

                  <div class="col-sm-6">
                    <div class="item item-heading">
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

<?php
// get_sidebar();
get_footer();