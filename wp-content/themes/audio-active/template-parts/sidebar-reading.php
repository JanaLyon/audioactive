<div id="sidebar-reading" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active right-divider"><a href="#related" aria-controls="related" role="tab" data-toggle="tab">Related articles</a></li>
		<li role="presentation"><a href="#latest" aria-controls="latest" role="tab" data-toggle="tab">Latest articles</a></li>
	</ul>
	
	<div class="related-posts-sidebar posts-sidebar tab-content">
	
		<div role="tabpanel" class="tab-pane active" id="related">
			<?php
			/*$orig_post = $post;
			global $post;
			$tags = wp_get_post_tags($post->ID);

			if ($tags) {
				$tag_ids = array();
				foreach($tags as $individual_tag) 
					$tag_ids[] = $individual_tag->term_id;
					$args=array(
						'tag__in' => $tag_ids,
						'post__not_in' => array($post->ID),
						'posts_per_page'=>6, // Number of related posts to display.
						'caller_get_posts'=>1 
					);

				$my_query = new wp_query( $args );

				while( $my_query->have_posts() ) {
					$my_query->the_post();				
					get_template_part( 'template-parts/article-module-x-small', 'none' );
				}
			}
			$post = $orig_post;
			
			wp_reset_query();*/
			?>
		</div>
		
	</div>

	<div class="latest-posts-sidebar posts-sidebar tab-content">
	
		<div role="tabpanel" class="tab-pane" id="latest">
			<?php $the_query = new WP_Query( 'posts_per_page=6' );

			while ($the_query -> have_posts()) : $the_query -> the_post();

				get_template_part( 'template-parts/article-module-x-small', 'none' );

			endwhile; wp_reset_postdata(); ?>
		</div>
	
	</div>
	
</div>