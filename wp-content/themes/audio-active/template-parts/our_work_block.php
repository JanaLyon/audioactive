<div class="col-md-4">
	<?php the_content(); ?>
</div>
<div class="col-md-8">
	<a class="article-image"">
	<?php
	if (has_post_thumbnail()) {
		the_post_thumbnail('our-work-home');
	} else {
		echo "<img src='/wp-content/themes/audio-active/images/fallback_image.jpg' />";
	}
	?>
	</a>
</div>