<?php
	$thisCat = 'Features';
	$featuresPostArgs = array(
						'posts_per_page'	=> 1,
						'orderby'			=> 'date',
						'cat'				=> $thisCat,
						'tax_query'			=> array(
							array(
							'taxonomy'		=> 'post_tag',
							'field'			=> 'slug',
							'terms'			=> 'featured-hero'
							)
						)
					);
	$features_query = new WP_Query($featuresPostArgs);
?>
<?php while ($features_query->have_posts()) { 
	$features_query->the_post();?>
	<div class="row row-vertical-padding">
		<div id="featured-hero" class="article-module">
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<a class="image-container" href="<?php the_permalink(); ?>">	
					<?php 
						if(has_post_thumbnail()){
							the_post_thumbnail();
						}else{
							echo "<img src='/wp-content/themes/reed-career-advice/img/fallback_image.jpg'></img>";
						} 
					?>
				<div class="img-gradient"></div>
				<div class="article-arrow"></div>
				</a>
			</div>
			<div class="text-container col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<?php the_excerpt(); ?>
				<div class="hero-category-links"><?php the_category(" | "); ?></div>
			</div>
		</div>
	</div>
<?php }  
wp_reset_postdata(); ?>	