<div class="our-work-bottom-arrow">
	<div class="row our-work-row">
		<div class="col-xs-12 col-sm-8 col-sm-push-4 col-md-8 set-image-padding">
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
		<div class="col-xs-12 col-sm-4 col-sm-pull-8 col-md-4 set-text-padding">
			<?php the_content(); ?>
		</div>
	</div>
</div>