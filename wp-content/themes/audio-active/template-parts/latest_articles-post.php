<?php
$recentPostArgs = array(
	'posts_per_page' => 4,
	'orderby' => 'date',
	'cat' => 0
);
$recent_query = new WP_Query($recentPostArgs);
?>

<div id="latest-articles-block" class="latest-articles-post">
	<div class="row">
		<h2 class="col-xs-12">Latest Articles</h2>
	</div>
	<div id="latest-articles" class="latest-articles">
		<div class="row">
			<?php
			while ($recent_query->have_posts()) {
				$recent_query->the_post();
				get_template_part('template-parts/article_module', 'latest_post');
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>