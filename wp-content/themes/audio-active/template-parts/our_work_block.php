<div class="row">
<div class="our-work-cut-corner">
		<div class="col-xs-12 col-sm-4 col-sm-push-8 col-md-4 set-text-padding">
			<?php the_content(); ?>
		</div>
		<div class="col-xs-12 col-sm-8 col-sm-pull-4 col-md-8 set-image-padding">
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
		</div>
</div>