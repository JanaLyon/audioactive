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
					//check to see if this is Career Guides
					if( is_category('Career Guides') ) :
					
						get_template_part( 'template-parts/career-guide-portal', 'none' );				
						//get_template_part( 'template-parts/ca-pagination', 'none' );

					else :

						get_template_part( 'template-parts/category-regular', 'none' );			
					endif;	/* switch between Career Guides and all other categories */
					
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
