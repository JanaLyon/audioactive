<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reed Career Advice
 */

get_header(); ?>
<style>.breadcrumbs {display: none;}</style>
	
<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="container">
			
			<?php 
			
			if ( have_posts() ) : 
			
			?>
				
			<h1><?php single_cat_title( '', true ); ?></h1>
					
					
		</div>
					<?php
					//check to see if this is News
					if( is_category('News') ) :
					
						//get template part for block based category page
						get_template_part( 'template-parts/pagination', 'none' );

					else :

						//get template part for accordian based category page

					endif;	/* switch between News and all other categories */
					
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );
					
				endif;
				?>
			</div><!-- #content -->
		</section><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php
get_footer();
