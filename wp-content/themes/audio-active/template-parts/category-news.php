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
				