<?php
$recentPostArgs = array(
	'posts_per_page' => 3,
	'orderby' => 'date',
	'cat' => 0
);
$recent_query = new WP_Query($recentPostArgs);
?>

<div id="latest-articles-block" class="col-xs-12 latest-articles">
	<div class="row">
		<h2 class="col-xs-12">Latest Articles</h2>
	</div>
	<div id="latest-articles" class="three-col-articles">
		<div class="row">
			<?php
			while ($recent_query->have_posts()) {
				$recent_query->the_post();
				get_template_part('template-parts/article_module', 'three_columns');
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 set-view-all-padding">
			<div class="latest-arrow-bottom">
				<a class="pull-right btn btn-action" href="/category/news/" role="button">View all articles <i
						class='fa fa-chevron-right' aria-hidden='true'></i></a>
			</div>
		</div>
	</div>
</div>