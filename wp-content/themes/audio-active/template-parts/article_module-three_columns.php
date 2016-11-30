<div class="article-module col-xs-12 col-sm-4 col-md-4 col-lg-4">
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
		<?php the_date('d M Y', '<p class="article-date">', '</p>'); ?>
		<p class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
		<div class="article-excerpt"><?php echo substr(get_the_excerpt(), 0,60) . '...<br>'; ?></div>
	</div>
	<div class="ourwork-articles-button">
		<?php get_template_part('template-parts/read_more_btn', 'none')?>
	</div>
</div>
