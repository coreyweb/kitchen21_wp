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
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3030.550352110494!2d-73.98963468488753!3d40.573605879347205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c245cbeab87bd7%3A0x2eb9a72b4b093331!2s3052+W+21st+St%2C+Brooklyn%2C+NY+11224!5e0!3m2!1sen!2sus!4v1493843831832" width="500" height="400"></iframe>
              </div>
            </div><!-- .col-sm-6 -->
            <div class="col-sm-6">
              <div class="has-arrow-left">
                <h3 class="highlight">Stop by and grab a bite!</h3>
                <p>
                  3052 W. 21st Street Brooklyn, NY 11224<br>
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