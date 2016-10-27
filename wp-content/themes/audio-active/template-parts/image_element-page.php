<div class="page-image"">
	<?php 
		if(has_post_thumbnail()){
			the_post_thumbnail('banner');
		}else{
			echo "<img src='/wp-content/themes/audio-active/img/fallback_image.jpg' />";
		} 
	?>
</div>