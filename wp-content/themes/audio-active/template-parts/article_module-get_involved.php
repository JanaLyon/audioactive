<div class="article-module get-involved col-xs-12 col-sm-4 col-md-4 col-lg-4">
	<div class="gray-line-container">
		<div class="image-container">
			<a href="<?php the_permalink(); ?>">
				<?php
				if(has_post_thumbnail()){
					the_post_thumbnail('article');
				}else{
					echo "<img src='/wp-content/themes/audio-active/images/fallback_image.jpg' />";
				}
				?>
			</a>
		</div>
		<div class="text-container">
			<p class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			<div class="article-excerpt"><?php echo substr(get_the_excerpt(), 0,60) . '...<br>'; ?></div>
		</div>
		<div class="row get-involved-article-buttons">
			<div class="col-xs-12">
				<?php get_template_part('template-parts/read_more_link', 'get_involved')?>
			</div>
			<div class="col-xs-12 align-text">
				<?php get_template_part('template-parts/read_more_btn', 'get_involved')?>
			</div>
		</div>
	</div>
</div>
