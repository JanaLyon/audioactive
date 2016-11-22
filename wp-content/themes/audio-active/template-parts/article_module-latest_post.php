<div class="article-module col-xs-12 col-sm-3 col-md-3 col-lg-3">
	<div class="image-container">
		<a href="<?php the_permalink(); ?>">
			<?php 
			if(has_post_thumbnail()){
				the_post_thumbnail('article');
			}else {
				echo "<img src='/wp-content/themes/audio-active/images/fallback_image.jpg' />";
			}
			?>
		</a>
	</div>
	<div class="text-container">
		<?php the_date('d M Y', '<p class="article-date">', '</p>'); ?>
		<p class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
	</div>
	<?php get_template_part('template-parts/read_more_btn', 'none')?>
</div>

