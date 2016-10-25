<?php

	function logo_link_activation (){
		if( is_front_page() ){
			$logo_link = "<img src='/wp-content/themes/audio-active/images/full_logo.svg' alt='AudioActive Logo' width='195px' />";
		}else{
			$logo_link = "<a href='/'><img src='/wp-content/themes/audio-active/images/full_logo.svg' alt='AudioActive Logo' width='195px' /></a>";
		}
		return $logo_link;
	}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="icon" type="image/png" href="/wp-content/themes/audio-active/images/audioactive_favicon32x32.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<h1 class="hidden">AudioActive home page</h1>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="container-fluid">
			<div class="row site-branding">
				<!-- AA full logo -->
				<?php echo logo_link_activation(); ?>
				<!-- container for donate and social -->
				<div class="pull-right">
					<!-- donate -->
					<a class="btn btn-action" data-toggle="tooltip" title="Donate" href="">Donate <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					<!-- soundcloud -->
					<a class="btn top-bar-links" data-toggle="tooltip" title="Soundcloud" href=""><i class="fa fa-soundcloud" aria-hidden="true"></i></a>
					<!-- facebook -->
					<a class="btn top-bar-links" data-toggle="tooltip" title="Facebook" href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<!-- twitter -->
					<a class="btn top-bar-links" data-toggle="tooltip" title="Twitter" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<!-- instagram -->
					<a class="btn top-bar-links" data-toggle="tooltip" title="Instagram" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<!-- youtube -->
					<a class="btn top-bar-links" data-toggle="tooltip" title="Youtube" href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</div><!-- social container -->
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
					<?php get_template_part('custom-nav', ''); ?>

				</nav><!-- #site-navigation -->

			</div><!-- .drawer-container -->
		</div><!-- second header -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
