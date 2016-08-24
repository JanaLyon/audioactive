<a class="article-image" href="<?php the_permalink(); ?>">	
	<?php 
		if(has_post_thumbnail()){
			the_post_thumbnail();
			get_template_part( 'template-parts/overlaid_image_text' );
		}else{
			echo "<img src='/wp-content/themes/audio-active/img/fallback_image.jpg' />";
		} 
	?>
</a>