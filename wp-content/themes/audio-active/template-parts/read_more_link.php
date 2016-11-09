<a href="<?php the_permalink(); ?>" class="btn-more">
	<?php
	$custom_text = get_post_meta(get_the_ID(), "read_more_button_custom_text", true);
	if (! empty($custom_text)){
		echo $custom_text;
	} else {
		echo "Continue reading";
	}
	?>
</a>