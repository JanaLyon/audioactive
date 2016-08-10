<?php
	$recentPostArgs = array(
						'posts_per_page'	=> 4,
						'orderby'			=> 'date',
						'cat'				=> 0
					);
	$recent_query = new WP_Query($recentPostArgs);
?>

<div id="latest-articles-block">
	<h2>Latest Articles</h2>
	<div id="latest-articles" class="article-small col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="spacer col-xs-0 col-sm-0 col-md-2 col-lg-2"></div>
		<?php
			while( $recent_query->have_posts() ){ 
				$recent_query->the_post();
				get_template_part( 'template-parts/article-module-small', 'none' );
			}
			wp_reset_postdata(); 
		?>
	</div>	
	<div class="spacer col-xs-0 col-sm-0 col-md-2 col-lg-2"></div>
	<div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<a class="btn btn-more" href="/all-posts/" role="button">View all articles</a>	
	</div>					
</div>