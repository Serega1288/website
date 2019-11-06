<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <base href="/"> -->
  <title><?php wp_title(''); ?></title>

	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<!--<meta property="og:image" content="path/to/image.jpg">-->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->


  <?php wp_head(); ?>
</head>

<body <?php if ( mobail_detect(1) == 1 ) { echo ' mobile-tablet="1" ';  } ?> <?php   body_class(); ?> >
