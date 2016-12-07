<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reed Career Advice
 */
get_header();
?>
	<style>.breadcrumbs {display: none;}</style>

	<section id="primary" class="content-area">
		<div id="content" role="main">
			<div class="container content-bg">
				<?php
				if (have_posts()) {
				//check to see if this is News
				if (is_category('News')) {
					//get template part for block based category page
					get_template_part('template-parts/category', 'news');
					get_template_part('template-parts/pagination', 'none');

				} else {
					// If no content, include the "No posts found" template.
					get_template_part('template-parts/category', 'our_work');
				}
				}
				?>
			</div><!-- .container -->
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_footer();
