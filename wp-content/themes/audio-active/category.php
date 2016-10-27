<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reed Career Advice
 */

get_header(); ?>
	<style>.breadcrumbs {
			display: none;
		}</style>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

						<?php

						if (have_posts()) {

						?>

						<h1><?php single_cat_title('', true); ?></h1>
					</div><!-- .col -->
				</div><!-- .row -->


				<?php
				//check to see if this is News
				if (is_category('News')) {
					//get template part for block based category page
					get_template_part('template-parts/category', 'news');
					get_template_part('template-parts/pagination', 'none');

				//} else if (is_category('Our work')){
					//get template part for accordian based category page
					// || is_category('Music & Artist Development') || is_category('Social Justice')
					//get_template_part('template-parts/category', 'our_work');

				   /* switch between News and all other categories */

				} else {
					// If no content, include the "No posts found" template.
					//get_template_part('content', 'none');
					get_template_part('template-parts/category', 'our_work');

				}
				}
				?>
			</div><!-- .container -->
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_footer();
