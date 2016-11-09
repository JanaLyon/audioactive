<?php
$newsPostArgs = array(
	'posts_per_page' => 12,
	'orderby' => 'date',
	'cat' => 'News'
);
$news_query = new WP_Query($newsPostArgs);
?>

<div class="row">
	<div class="col-xs-12">
		<h1><?php single_cat_title('', true); ?></h1>
	</div><!-- .col -->
</div><!-- .row -->
<div class="row">
	<div class="three-col-articles">
		<?php
		while ($news_query->have_posts()) {
			$news_query->the_post();
			get_template_part('template-parts/article_module', 'three_columns');
		}
		wp_reset_postdata();
		?>
	</div>
</div>
				