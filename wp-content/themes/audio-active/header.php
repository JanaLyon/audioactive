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

<style>
	#bitnami-banner .bitnami-corner-image-div{display:none;}
</style>

<body <?php body_class(); ?>>
<h1 class="hidden">AudioActive home page</h1>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="container-fluid">
			<div class="row site-branding">
				<!-- AA full logo -->
				<?php echo logo_link_activation(); ?>
				<!-- container for donate and social -->
				<div class="pull-right hidden-xs">
					<!-- donate -->
					<div class="button-container">
						<a class="btn btn-action" data-toggle="tooltip" title="Donate" href="https://mydonate.bt.com/donation/donate.html?charity=audioactive" target="_blank">Donate <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
					<!-- soundcloud -->
					<a class="btn top-bar-links" data-toggle="tooltip" title="Soundcloud" href="https://soundcloud.com/audio_active" target="_blank"><i class="fa fa-soundcloud" aria-hidden="true"></i></a>
					<!-- facebook -->
					<a class="btn top-bar-links" data-toggle="tooltip" title="Facebook" href="https://www.facebook.com/likeaudioactive/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<!-- twitter -->
					<a class="btn top-bar-links" data-toggle="tooltip" title="Twitter" href="https://twitter.com/Audio_Active" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<!-- instagram -->
					<a class="btn top-bar-links" data-toggle="tooltip" title="Instagram" href="https://www.instagram.com/audioactive_/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<!-- youtube -->
					<a class="btn top-bar-links" data-toggle="tooltip" title="Youtube" href="https://www.youtube.com/channel/UCa4IXl4cqRZLQSa-pr2zujg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
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
					<?php get_template_part('custom-nav', ''); ?>
					<h2 class="hidden">Main navigation</h2> <!-- Keep this here, interferes with drawer nav if added before template part-->
				</nav><!-- #site-navigation -->

			</div><!-- .drawer-container -->
		</div><!-- second header -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
