<?php if ( is_attachment() ) { ?>
  <meta name="robots" content="noindex, nofollow" />
<?php } ?>

<?php
  // set og:type and og:image based on page
  if (is_page('Home')) { 
    $ogType = "website";
  } else {
    $ogType = "article";
  }
  if ( has_post_thumbnail() ) {
    $image = get_vt_resize(get_the_ID(), 600, 315, true);
    $ogImage = $image['url'];
  }
  if (have_posts()) : while (have_posts()) : the_post();
    $metaDescription = get_the_excerpt();
    $category = get_the_category();
  endwhile;
  endif;

  if (is_page('Home')) { 
    $metaDescription = get_bloginfo( 'description', 'display' );
  }

  // get page URL to fix the category page stupidity where the first post is picked up instead of the category page URL
  $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>

<!-- open graph data -->
  <meta property="fb:app_id" content="768269943316422" />
  <meta property="fb:admins" content="1011710600" />
  <meta property="og:type" content="<?php echo $ogType ?>" />
<?php if (isset($ogImage)) { ?>
  <meta property="og:image" content="<?php echo esc_url( $ogImage ) ?>" />
<?php } ?>
  <meta property="og:title" content="<?php
    // generate optimized title for html <title> and og:title meta
			
    if (is_page('Home')) {
      echo bloginfo( 'name' ) .' | ' . get_bloginfo( 'description', 'display' ) . '';
    } elseif (is_page('archives')) {
      echo bloginfo( 'name' ) . ' Archives';
    } else {
      wp_title('|', true, 'right');
    }
    if ( is_author() ) {
      echo ' - Contributor';
    } elseif ( is_tag() ) {
      echo ' articles on ' . bloginfo( 'name' );
    } elseif ( is_category() ) {
      echo bloginfo( 'name' );
    } elseif ( is_singular() ) {
      echo bloginfo( 'name' );
    } elseif (is_attachment()) {
          echo ' - Attachment';
    }
    if ($paged > 1) {
      echo (' - Page ');
      echo ($paged);
    } // avoid dupe titles in category list pages
  ?>" />
  <meta property="og:site_name" content="<?php echo bloginfo( 'name' ) ?>"/>
  <meta property="og:url" content="<?php echo $url ?>" />
<?php if (!is_page('Home')) { ?>
  <meta property="article:publisher" content="https://www.facebook.com/theKitchen21social" />
<?php } ?>
<?php if ( is_category() ) { ?>
  <meta property="og:description" content="<?php echo strip_tags(category_description()); ?>" />
<?php } else { ?>
  <meta property="og:description" content="<?php echo $metaDescription; ?>" />
<?php } ?>
  <meta property="og:locale" content="en_US" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@Kitchen21">
<?php if ( get_the_author_meta( 'twitter' ) ) { ?> 
  <meta name="twitter:creator" content="@<?php the_author_meta( 'twitter' ); ?>">
<?php } ?> 
  <meta name="twitter:image" content="<?php echo $ogImage ?>">
<?php if ( is_category() ) { ?>
  <meta name="twitter:description" content="<?php echo strip_tags(category_description()); ?>" />
<?php } else { ?>
  <meta name="twitter:description" content="<?php echo $metaDescription; ?>" />
<?php } ?>

<!-- meta data -->
  <meta name="keywords" content="<?php if (is_page('Home')) { 
    echo 'Kitchen21, insert keywords';
  } else {
  $metaKeywords = get_the_tags();
  if ($metaKeywords) {
    foreach($metaKeywords as $tag) {
      echo $tag->name . ','; 
    }
  }
}
?><?php echo htmlspecialchars_decode($category[0]->cat_name); ?>" />

<?php if ( is_category() ) { ?>
  <meta name="description" content="<?php echo strip_tags(category_description()); ?>" />
<?php } else { ?>
  <meta name="description" content="<?php echo $metaDescription; ?>" />
<?php } ?>

<!-- analytics -->
<?php if ( ! is_preview() ) { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98794942-1', 'auto');
  ga('send', 'pageview');
</script>
<?php } ?>