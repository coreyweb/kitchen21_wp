<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kitchen21
 */

?>

<!-- BEGIN STATIC MARKUP -->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US" class="no-js">

<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kitchen21 | Kitchen21</title>
  <meta name="description" content="">
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great%7CRoboto+Slab:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

<?php wp_head(); ?>
</head>
  <body class="menu-closed">
    
    <svg style="display: none;">
  <defs>
    <symbol id="icon-facebook" viewBox="0 0 32 32">
      <path d="M8.3 10.7h3.3V7.4c0-1.4 0-3.6 1-5C13.7 1 15.2 0 17.8 0c4.1 0 5.8 0.5 5.8 0.5l-0.7 5c0 0-1.4-0.3-2.6-0.3 -1.2 0-2.4 0.5-2.4 1.7v3.8h5.2l-0.3 4.8h-5V32h-6.2V15.5H8.3V10.7z"/>
    </symbol>
    <symbol id="icon-twitter" viewBox="0 0 32 32">
      <path d="M28.7 9.5c0 0.3 0 0.6 0 0.9C28.7 19 22.1 29 10.1 29 6.4 29 2.9 27.9 0 26.1c0.5 0.1 1 0.1 1.6 0.1 3.1 0 5.9-1 8.1-2.8 -2.9-0.1-5.3-1.9-6.1-4.5 0.4 0.1 0.8 0.1 1.2 0.1 0.6 0 1.2-0.1 1.7-0.2 -3-0.6-5.3-3.2-5.3-6.4 0 0 0-0.1 0-0.1 0.9 0.5 1.9 0.8 3 0.8 -1.8-1.2-2.9-3.2-2.9-5.5 0-1.2 0.3-2.3 0.9-3.3 3.2 4 8.1 6.6 13.5 6.9 -0.1-0.5-0.2-1-0.2-1.5 0-3.6 2.9-6.6 6.6-6.6 1.9 0 3.6 0.8 4.8 2.1 1.5-0.3 2.9-0.8 4.2-1.6 -0.5 1.5-1.5 2.8-2.9 3.6 1.3-0.1 2.6-0.5 3.8-1C31.1 7.4 30 8.5 28.7 9.5z"/>
    </symbol>
    <symbol id="icon-instagram" viewBox="0 0 32 32">
      <g>
        <path d="M16 11.7c-2.3 0-4.3 2-4.3 4.3 0 2.3 2 4.3 4.3 4.3 2.3 0 4.3-2 4.3-4.3C20.3 13.7 18.3 11.7 16 11.7z"/>
        <path d="M31.9 9.4c-0.1-1.7-0.3-2.9-0.7-3.9 -0.4-1.1-1-1.9-1.8-2.8 -0.9-0.9-1.8-1.4-2.8-1.8 -1-0.4-2.2-0.7-3.9-0.7C20.9 0 20.3 0 16 0s-4.9 0-6.6 0.1C7.7 0.2 6.5 0.4 5.5 0.8c-1.1 0.4-1.9 1-2.8 1.8 -0.9 1-1.5 1.9-1.9 2.9 -0.4 1-0.7 2.2-0.7 3.9C0 11.1 0 11.7 0 16s0 4.9 0.1 6.6c0.1 1.7 0.3 2.9 0.7 3.9 0.4 1.1 1 1.9 1.8 2.8 0.9 0.9 1.8 1.4 2.8 1.8 1 0.4 2.2 0.7 3.9 0.7C11.1 32 11.7 32 16 32s4.9 0 6.6-0.1c1.7-0.1 2.9-0.3 3.9-0.7 1.1-0.4 1.9-1 2.8-1.8 0.9-0.9 1.4-1.8 1.8-2.8 0.4-1 0.7-2.2 0.7-3.9C32 20.9 32 20.3 32 16S32 11.1 31.9 9.4zM16 25.2c-5.1 0-9.2-4.1-9.2-9.2s4.1-9.2 9.2-9.2 9.2 4.1 9.2 9.2S21.1 25.2 16 25.2zM25.5 8.9c-1.3 0-2.4-1.1-2.4-2.4s1.1-2.4 2.4-2.4 2.4 1.1 2.4 2.4S26.8 8.9 25.5 8.9z"/>
      </g>
    </symbol>

    <symbol id="icon-menu" viewBox="0 0 32 32">
      <g>
        <path d="M30.8 7.6H1.2C0.5 7.6 0 7.1 0 6.4s0.5-1.2 1.2-1.2h29.6c0.7 0 1.2 0.5 1.2 1.2S31.5 7.6 30.8 7.6z"/>
        <path d="M30.8 17.2H1.2C0.5 17.2 0 16.7 0 16c0-0.7 0.5-1.2 1.2-1.2h29.6c0.7 0 1.2 0.5 1.2 1.2C32 16.7 31.5 17.2 30.8 17.2z"/>
        <path d="M30.8 26.8H1.2c-0.7 0-1.2-0.5-1.2-1.2 0-0.7 0.5-1.2 1.2-1.2h29.6c0.7 0 1.2 0.5 1.2 1.2C32 26.3 31.5 26.8 30.8 26.8z"/>
      </g>
    </symbol>
    <symbol id="icon-close" viewBox="0 0 32 32">
      <path d="M18.4 16L31.5 2.9c0.7-0.7 0.7-1.7 0-2.4 -0.7-0.7-1.7-0.7-2.4 0L16 13.6 2.9 0.5c-0.7-0.7-1.7-0.7-2.4 0 -0.7 0.7-0.7 1.7 0 2.4L13.6 16 0.5 29.1c-0.7 0.7-0.7 1.7 0 2.4C0.8 31.8 1.3 32 1.7 32s0.9-0.2 1.2-0.5L16 18.4l13.1 13.1c0.3 0.3 0.8 0.5 1.2 0.5 0.4 0 0.9-0.2 1.2-0.5 0.7-0.7 0.7-1.7 0-2.4L18.4 16z"/>
    </symbol>
  </defs>
</svg>

<!-- END STATIC MARKUP -->

<?php /* BEGIN WP CODE

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php get_template_part('template-parts/meta', 'head-contents'); ?>

<?php wp_head(); ?>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=156306871109527";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php include 'inc/header/svg.php'; ?>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <?php
        wp_nav_menu(array(
         'menu'=>'mainmenu' ,
         'container' => false, 
         'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
         'theme_location' => 'primary')
         );
      ?>
    </div><!--/.nav-collapse -->
  </div><!-- .container -->
</nav>

<div class="container">
  <div class="col-md-8">

END WORDPRESS CODE */ ?>