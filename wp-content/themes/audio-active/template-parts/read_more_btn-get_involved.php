<a href="<?php the_permalink(); ?>" class="btn btn-action">
	<?php
	$custom_text = get_post_meta(get_the_ID(), "read_more_button_custom_text", true);
	if (! empty($custom_text)){
		echo $custom_text . " <i class='fa fa-chevron-right' aria-hidden='true'></i>";
	} else {
		echo "Continue reading <i class='fa fa-chevron-right' aria-hidden='true'></i>";
	}
	?>
</a>