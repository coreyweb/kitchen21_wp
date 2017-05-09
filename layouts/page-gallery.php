<?php
/**
 * Template Name: Gallery page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

get_header(); ?>

    <article class="gallery">
      <h1 class="heading-alone"><?php the_title() ?></h1>

      <?php
        the_content();
      ?>
      
<!-- BEGIN STATIC -->

      <div class="row row-tight">
        <div class="col-sm-6">
          <div class="gallery-item">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/sCGuSqBjhfE?rel=0&showinfo=0" allowfullscreen class="embed-responsive-item"></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="gallery-item">
            <img src="https://placeholdit.imgix.net/~text?w=767&h=432&bg=111111" alt="Gallery Item 1" class="img-responsive">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="gallery-item">
            <img src="https://placeholdit.imgix.net/~text?w=767&h=432&bg=111111" alt="Gallery Item 1" class="img-responsive">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="gallery-item">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/nam90gorcPs?rel=0&showinfo=0" allowfullscreen class="embed-responsive-item"></iframe>
            </div>
          </div>
        </div>
      </div>

<!-- END STATIC -->


      <?php
        if ( current_user_can('edit_post') ) :
          echo '<p class="text-center"><a href="' . get_edit_post_link() . '" class="btn btn-info">Edit Page</a>';
        endif;
      ?>
      
    </article><!-- .gallery -->
    
<?php
get_footer();