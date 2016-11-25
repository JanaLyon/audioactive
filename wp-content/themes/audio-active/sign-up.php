<?php
	/**
	 *	The template for displaying the homepage
	 *	Includes multiple loops
	 */ 
	 /*
	 Template Name: Sign up
	 */
	get_header();
?>
<div class="container">

	<div id="primary" class="">
		<main id="main" class="site-main" role="main">

			<?php
			$signUpPostArgs = array(
				'posts_per_page' => 12,
				'orderby' => 'date',
				'cat' => 'Sign up forms'
			);
			$signUp = new WP_Query($signUpPostArgs);
			?>

			<div class="row">
				<div class="col-xs-12">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div><!-- .col -->
			</div><!-- .row -->
			<div class="row">
				<div class="three-col-articles">
					<?php
					while ($signUp->have_posts()) {
						$signUp->the_post();
						get_template_part('template-parts/article_module', 'three_columns');
					}
					wp_reset_postdata();
					?>
				</div>
			</div>

		</main><!-- #main -->			
	</div><!-- #primary  -->
</div><!-- .container -->	


<?php
	get_footer();
?>