<a class="article-image"">
	<?php 
		if(has_post_thumbnail()){
			the_post_thumbnail();
		}else{
			echo "<img src='/wp-content/themes/audio-active/img/fallback_image.jpg' />";
		} 
	?>
</a>