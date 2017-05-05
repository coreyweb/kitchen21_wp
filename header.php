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

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great%7CRoboto+Slab:300,400,700" rel="stylesheet">

<?php get_template_part('template-parts/meta', 'head-contents'); ?>

<?php wp_head(); ?>

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#191919">
<meta name="theme-color" content="#191919">

</head>

<body class="menu-closed">

<?php include 'inc/header/svg.php'; ?>

<div id="page">
  <div id="header-wrap">
    <header id="header">
      <div id="logo-simple">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo-simple.svg" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive"></a>
      </div><!-- #logo -->
      <nav id="menu">
        <?php
          wp_nav_menu(array(
           'menu'=>'mainmenu' ,
           'container' => false, 
           'items_wrap' => '<ul>%3$s</ul>',
           'theme_location' => 'primary')
           );
        ?>
      </nav><!-- #menu -->
      <a href="#" class="menu-toggle" data-toggle="menu">
        <svg class="icon-menu"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-menu"></use></svg>
        <svg class="icon-close"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close"></use></svg>
      </a>
    </header><!-- #header -->
  </div><!-- #header-wrap -->
  
  <main>
    <div class="content">
      <div class="container-fluid">