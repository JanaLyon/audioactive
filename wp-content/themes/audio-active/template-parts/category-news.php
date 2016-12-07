<?php
//$news_query = new WP_Query('category_name=News&posts_per_page=12&paged=$paged');
//$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
//$nextpost = 0;

//$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
//$current_date ="";
//$nextpost = 0;
//$args = array(
//	'posts_per_page'	=> 5,
//	'order_by'			=> 'date',
//	'category_name'		=> 'News',
//	'paged'				=> $paged
//);
//global $wp_query;
//$wp_query = new WP_Query($args);
?>
<div class="row">
		<?php get_template_part('template-parts/image_element', 'category'); ?>
		<?php get_template_part('template-parts/text_element', 'category'); ?>
</div>
<div class="row">
	<div class="our-work-block">
		<div class="three-col-articles">
			<?php
			while ($wp_query->have_posts()) {
				$wp_query->the_post();
				get_template_part('template-parts/article_module', 'three_columns');
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>
				