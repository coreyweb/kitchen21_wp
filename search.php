<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Kitchen21
 */

get_header(); ?>
  
  <?php
    if ( have_posts() ) :
  ?>

  <h1><?php printf( esc_html__( 'Search Results for “%s”', 'Kitchen21' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
  <p>(<?php echo $wp_query->found_posts; ?> Results)</p>

  <div class="row">
    <div class="col-xs-12">

      <?php
    
        /* Start the Loop */
        while ( have_posts() ) : the_post();

          /**
           * Run the loop for the search to output the results.
           * If you want to overload this in a child theme then include a file
           * called content-search.php and that will be used instead.
           */
          get_template_part( 'template-parts/content', 'search' );

        endwhile;

      else :

        get_template_part( 'template-parts/content', 'none' );

      endif; 
  
    ?>

    </div><!-- .col-xs-12 -->
  </div><!-- .row -->

  <?php
    get_template_part ( 'template-parts/pagination-archive'); // pagination for category
  ?>    

<?php
get_sidebar();
get_footer();