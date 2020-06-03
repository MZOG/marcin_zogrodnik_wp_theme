<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<meta name="google-site-verification" content="Cy9la7-g340S_Xi7V8CztyElFEBGzGK-K-cosdkhL3I" />
	</head>
	<body>
		<header class="header" role="banner">
			<div class="sticky-bar"></div>
			<div class="container">
				<div class="logo">
					<a href="<?php echo home_url(); ?>" class="noe">
						marcin zogrodnik 
					</a>
				</div>
				<nav class="nav" role="navigation">
					<?php html5blank_nav(); ?>
				</nav>

				<button class="hamburger hamburger--collapse" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
		</header>
		<main class="wrapper">
