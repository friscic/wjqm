<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  
  <title><?php wp_title(":", true, "right"); ?> <?php bloginfo("name"); ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto+Condensed'>
  <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> onload="prettyPrint()">
    
  <div data-role="page" style="background: #000 url('<?php echo get_background_image(); ?>') no-repeat;">

    <div class="ui-bar ui-bar-a">

      <?php include("navigation.php"); ?>
 
        </div>
        
        <div class="ui-content" data-role="content" data-theme="a">