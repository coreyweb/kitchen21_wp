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


        <?php 
          query_posts(
            array(
              'post_type' => 'video_gallery',
              'showposts' => 4,
              'post_status' => 'publish'
            )
          );

          if ( have_posts() ) : 
        ?>

          <div class="row row-tight">
        
          <?php
            while ( have_posts() ) : the_post();
            
            $video_id = get_post_meta($post->ID, 'youtube_link', true);
              
              // Loop through each bookmark and print formatted output

              if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $video_id, $id)) {
                $value = $id[1];
              } else if (preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $video_id, $id)) {
                $value = $id[1];
              } else if (preg_match('/youtube\.com\/v\/([^\&\?\/]+)/', $video_id, $id)) {
                $value = $id[1];
              } else if (preg_match('/youtu\.be\/([^\&\?\/]+)/', $video_id, $id)) {
                $value = $id[1];
              }
              else if (preg_match('/youtube\.com\/verify_age\?next_url=\/watch%3Fv%3D([^\&\?\/]+)/', $video_id, $id)) {
                $value = $id[1];
              }
          ?>  

          <div class="col-sm-6">
            <div class="gallery-item">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/<?php echo $value ?>?rel=0&showinfo=0&iv_load_policy=3" allowfullscreen class="embed-responsive-item"></iframe>
              </div>
            </div>
          </div>

          <?php
            endwhile;
          ?>

          </div>
        
        <?php 
          endif; 
        ?>

      <?php
        if ( current_user_can('edit_post') ) :
          echo '<p class="text-center"><a href="' . get_edit_post_link(12) . '" class="btn btn-info">Edit Page</a>';
        endif;
      ?>
      
    </article><!-- .gallery -->
    
<?php
get_footer();