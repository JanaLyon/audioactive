<?php
// if the category has no ancestors, it is a title category 
if(count(get_ancestors(get_query_var('cat'), 'category')) == 0){

	//displays 2 featured articles picked from TAG of 'featured'
	get_template_part( 'template-parts/featured-two-hero', 'none' );							
?>			
<div class="container">
	<div class="row">
				<?php
				//Displays sub-category title.
				//Displays 3 most recent posts per sub category that do not have TAG of 'featured'
				//Does 3 lots then space for an advert (2 on first block)
				get_template_part( 'template-parts/category-set-of-3', 'none' );						
			
			// if the category has ancestors, it is a sub category 
}elseif(count(get_ancestors(get_query_var('cat'), 'category')) != 0){
			?>
<script type="text/javascript" src="https://preamp-clients.header.tech/REED_Careers_SubCat.js"></script>
<div class="container">
	<div class="row">
				<div class="category-block">
					<div class="article-regular flex_posts">
					<?php
						// Start The Loop.
						while ( have_posts() ) { 
							the_post();
							get_template_part( 'template-parts/article-module', get_post_format() );
							//replace 6th article with advert
							if( $wp_query->current_post == 4 ) { ?>
								<div class="article-module col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<div id='SubCat_MPU1' class='text-center'>
										<script type='text/javascript'>
											googletag.cmd.push(function() { googletag.display('SubCat_MPU1'); });
										</script>
									</div>
								</div>
							<?php 
							} 
							if ( $wp_query->current_post == 12 ){?>
								<div class="article-module col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<div id='SubCat_MPU2' class='text-center'>
										<script type='text/javascript'>
											googletag.cmd.push(function() { googletag.display('SubCat_MPU2'); });
										</script>
									</div>
								</div>
							<?php 
							} 
							if ( $wp_query->current_post == 20 ){?>
								<div class="article-module col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<div id='SubCat_MPU3' class='text-center'>
										<script type='text/javascript'>
											googletag.cmd.push(function() { googletag.display('SubCat_MPU3'); });
										</script>
									</div>
								</div>
							<?php 
							} 
						} ?>
					</div>
				</div>
				<?php get_template_part( 'template-parts/pagination', 'none' ); ?>
			<?php } ?>
	</div>
</div>			
				