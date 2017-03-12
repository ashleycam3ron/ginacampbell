<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#8d82b1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="Copyright <?php bloginfo('name');?> <?php echo date('Y');?>. All Rights Reserved.">
    <meta name="dc.language" CONTENT="US">
	<meta name="dc.source" CONTENT="<?php echo esc_url( home_url() ) ?>">
	<meta name="dc.title" CONTENT="<?php echo wp_title(); ?>">
	<meta name="dc.subject" CONTENT="<?php bloginfo('description');?>">
	<meta name="dc.creator" content="Ashley Cameron Design">
	<meta name="google-site-verification" content="8aDJRT67IajOx1IeL96mExLSjBcefhHg9gn69-63IAs" />
	<title><?php echo wp_title();?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico" />
    <link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon-192.png">
    <link rel="alternate" href="<?php echo esc_url( home_url() ) ?>" hreflang="en-us" />
    <link rel="image_src" href="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<h3 class="hidden"><?php bloginfo('name')?> – <?php bloginfo('description');?></h3>

<header id="header" role="banner" class="container">
	<nav class="navbar navbar-default" role="navigation">
		<h2>Primary Navigation</h2>
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>
        <a class="portal hidden-xs hidden-sm" href="https://gina-campbell.clientsecure.me" target="_blank">Book Online</a>
		<div id="navbar" class="navbar-collapse collapse navbar-ex1-collapse">
		<?php wp_nav_menu( array(
			  'menu' => 'primary',
			  'depth' => 2,
			  'container' => false,
			  'menu_class' => 'nav navbar-nav sticky',
			  'walker' => new wp_bootstrap_navwalker())
			); ?>
		</div>
	</nav>
	<a class="navbar-brand" href="<?php echo esc_url( home_url() ) ?>">
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/Gina-Campbell-Counseling-logo.png" alt="Gina Campbell Counseling logo">
	</a>
	<a class="phone pull-right" href="tel:5155124254">515.512.4254</a>
</header>
<a class="portal visible-xs visible-sm" href="https://gina-campbell.clientsecure.me" target="_blank">Book Online</a>