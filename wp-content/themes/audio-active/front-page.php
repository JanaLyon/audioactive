<?php
	/**
	 *	The template for displaying the homepage
	 *	Includes multiple loops
	 */ 
	 /*
	 Template Name: Front page
	 */
	get_header();
?>
<div class="container">

	<div id="primary" class="">
		<main id="main" class="site-main" role="main">
			
			<h1><?php echo get_bloginfo( 'description' ); ?></h1>
	
				<?php
					//get template part carousel - max 5 stories marked Hero
				?>

		</main><!-- #main -->
	</div><!-- #primary -->			
</div><!-- .container -->

<div class="container">
	<div>
		<main class="site-main" role="main">	
			<div class="row">
			<?php

			//get 3 latest news blocks and a view all button
			//Our work block
			//Support section
			//Rizzle Kicks quote

			?>
			
			</div><!-- .row -->
		</main><!-- #main -->			
	</div><!--  -->	
</div><!-- .container -->	


<?php
	get_footer();
?>