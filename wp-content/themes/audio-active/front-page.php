<?php
/**
 *    The template for displaying the homepage
 *    Includes multiple loops
 */
/*
Template Name: Front page
*/
get_header();
?>
	<div class="container content-bg">

		<div id="primary" class="">
			<main id="main" class="site-main" role="main">
				<div class="row">
					<h1 class="hidden">Top stories</h1><!-- labels for semantic web -->
					<?php get_template_part("template-parts/carousel_module", "none"); ?>
				</div><!-- .row -->
				<div class="row">
					<h1 class="hidden">Latest news</h1><!-- labels for semantic web -->
					<?php
					//get 3 latest news blocks and a view all button
					get_template_part("template-parts/latest_articles", "home");
					?>
				</div><!-- .row -->
				<div class="our-work-row">
					<h1 class="hidden">Our work</h1><!-- labels for semantic web -->
					<?php
					//Our work block
					get_template_part("template-parts/our_work_block", "none");
					?>
				</div><!-- .row -->
				<div class="row">
					<h1 class="hidden">Support AudioActive</h1><!-- labels for semantic web -->
					<?php
					//Support section
					get_template_part("template-parts/support_block", "none");
					?>
				</div><!-- .row -->
				<div class="row">
					<h1 class="hidden">Rizzle Kicks quote</h1><!-- labels for semantic web -->
					<?php
					//Rizzle Kicks quote
					get_template_part('template-parts/quote_block', 'none');
					?>
				</div><!-- .row -->
			</main><!-- #main -->
		</div><!-- #primary  -->
	</div><!-- .container -->


<?php
get_footer();
?>