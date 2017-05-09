<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

?>

    <div class="block">
      <div class="row">
        <div class="col-md-3">
          <div id="logo">
            <h1>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo.svg" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive"></a>
            </h1>
          </div><!-- #logo -->
          <div class="intro">
            <h2 class="highlight"><?php the_title() ?></h2>

<!-- BEGIN STATIC -->
            <p>This is a super social seafood extravaganza. The menu is focused on shareable and small plates. Flights of beer are a must, followed by growlers for the table. Loyal patrons are encouraged to bring their own growlers as well and a special growler program is geared around this experience. For more information, ask your server or bartender!</p>

<!-- IF PDF EXISTS -->
            <p class="hidden-xs hidden-sm"><a href="#" class="btn btn-primary btn-lg btn-block">Download Menu</a></p>
<!-- ENDIF PDF EXISTS -->
<!-- END STATIC -->

          </div><!-- .intro -->
        </div><!-- .col-sm-3 -->
        <div class="col-md-9">
          <article class="menu-wrap">
            <div class="shelf-header header-menu">

<!-- BEGIN STATIC -->
              <h1>
                Daily Menu
              </h1>
<!-- END STATIC -->
              
              <img src="<?php vt_resize(get_the_ID(), 1000, 300, true) ?>" alt="<?php the_title() ?> image" class="img-responsive hidden-xs">
              <img src="<?php vt_resize(get_the_ID(), 767, 767, true) ?>" alt="<?php the_title() ?> image" class="img-responsive visible-xs">
    
            </div><!-- .shelf-header -->

            <div class="menu">
              <?php the_content() ?>
              
              <?php
                if ( current_user_can('edit_post') ) :
                  echo '<p class="text-center"><a href="' . get_edit_post_link() . '" class="btn btn-info">Edit Page</a>';
                endif;
              ?>
              
              </section><!-- .menu-panel -->
            </div><!-- .menu -->
            <div class="visible-xs visible-sm">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">

<!-- BEGIN STATIC -->
                  <a href="#" class="btn btn-primary btn-lg btn-block">Download Menu</a>
<!-- END STATIC -->

                </div><!-- .col-sm-6 -->
              </div><!-- .row -->
            </div><!-- .visible-xs -->
          </article><!-- .menu-wrap -->
        </div><!-- .col-sm-8 -->
      </div><!-- .row -->
    </div><!-- .block -->