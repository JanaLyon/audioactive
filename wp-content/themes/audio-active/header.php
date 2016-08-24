<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href="/wp-content/themes/audio-active/css/drawer.css" rel="stylesheet">
	<link href="/wp-content/themes/audio-active/css/sandbox.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<h1 class="hidden">AudioActive home page</h1>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'audio-active' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
			</div><!-- .container -->
			<!-- menu drawer -->
			<div class="drawer drawer--right">
				<div role="banner">
					<button type="button" class="drawer-toggle drawer-hamburger">
						<span class="sr-only">toggle navigation</span>
						<span class="drawer-hamburger-icon"></span>
					</button>

					<nav id="site-navigation" class="drawer-nav" role="navigation">
						<h2 class="hidden">Main navigation</h2>
						<?php  get_template_part('custom-nav', ''); ?>

					</nav><!-- #site-navigation -->

				</div><!-- .drawer-container -->
			</div><!-- second header -->

		</header><!-- #masthead -->

		<div id="content" class="site-content">
