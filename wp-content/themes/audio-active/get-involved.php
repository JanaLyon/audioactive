<?php
	/**
	 *	The template for displaying the homepage
	 *	Includes multiple loops
	 */ 
	 /*
	 Template Name: Get involved
	 */
	get_header();
?>
<div class="container">

	<div id="primary" class="">
		<main id="main" class="site-main" role="main">

			<?php
			$getInvolved = new WP_Query('category_name=Get involved&posts_per_page=12');
			?>

			<div class="row">
				<div class="col-xs-12 hero-block">
					<?php get_template_part('template-parts/image_element', 'page'); ?>
					<?php get_template_part('template-parts/text_element', 'page'); ?>
				</div>
			</div>

			<div class="row">
				<div class="get-involved-block">
					<div class="three-col-articles">
						<?php
						while ($getInvolved->have_posts()) {
							$getInvolved->the_post();
							get_template_part('template-parts/article_module', 'get_involved');
						}
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>

		</main><!-- #main -->			
	</div><!-- #primary  -->
</div><!-- .container -->	


<?php
	get_footer();
?>