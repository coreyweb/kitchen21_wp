<?php
/**
 * Template part for showing related posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kitchen21
 */

?>

<div class="related">
  <h3 class="heading-light">You May Also Like...</h3>

  <div class="row">

    <?php
      $category = get_the_category(); 

      $methods = array(
        'Related Articles:' => 'query_related_by_tag',
        sprintf('More %s', ucwords($category[0]->cat_name)) => 'query_related_by_cat'
      );

      function query_related_by_tag() {
        if ($tags = wp_get_post_tags(get_the_ID())) {
          return get_related_query('tag__in', $tags);
        }
      }

      function query_related_by_cat() {
        if ($categories = get_the_category(get_the_ID())) {
          return get_related_query('category__in', $categories);
        }
      }

      function get_related_query($term_arg, $terms) {
        $term_ids = array();
        foreach($terms as $term) {
          $term_ids[] = $term->term_id;
        }

        $args = array(
          $term_arg => $term_ids,
          'post__not_in' => array(get_the_ID()),
          'showposts' => 3, // Number of related posts that will be shown.
          'caller_get_posts' => 1
        );

        return new wp_query($args);
      }

      foreach($methods as $title => $fx) {
        if (( $my_query = call_user_func($fx) ) && $my_query->have_posts()) {
          ?>
    
          <?php while ($my_query->have_posts()) : 
            $my_query->the_post(); 
            $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' ); 
          ?> 

          <div class="col-sm-4">
            <article class="grid-item category-link ">
            
              <?php if ( has_post_thumbnail() ) : ?>

                <a href="<?php the_permalink() ?>">
                  <img src="<?php vt_resize(get_the_ID(), 400, 256, true) ?>" alt="<?php the_title(); ?>" class="img-responsive" >
                </a>

              <?php endif; ?>
              
              <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
    
              <p class="post-link-wrap">
                <a href="<?php the_permalink() ?>">Read More</a>
              </p>

            </article><!-- .grid-item.category -->

          </div><!-- .col-sm-4 -->
          
        <?php endwhile;
          wp_Kitchen21_query();
          break; // stop when we find one that works
        }
      }
    ?>
    
  </div><!-- .row -->
</div><!-- .related -->