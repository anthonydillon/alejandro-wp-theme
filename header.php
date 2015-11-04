<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Ales theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="author" content="Anthony Dillon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="screen" href="//assets.ubuntu.com/v1/vanilla-framework-version-0.0.55.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/style.css" />
</head>

<body>
	<header class="banner global" role="banner">
      <nav role="navigation" class="nav-primary nav-right">
          <span id="main-navigation-link"><a href="#main-navigation">Jump to site nav</a></span>
          <div class="logo">
              <a href="<?php echo site_url(); ?>">
                  <span>Aobregon Obregón</span>
              </a>
          </div>
      </nav>
  </header>

	<div class="wrapper">
		<div id="main-content" class="inner-wrapper">

			<div class="row no-border">
				<div class="three-col">
					<?php get_sidebar(); ?>
				</div>
				<div class="nine-col last-col">
