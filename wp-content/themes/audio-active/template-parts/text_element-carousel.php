<h1><?php the_title(); ?></h1>

<p class="carousel-body">
	<?php echo substr(get_the_excerpt(), 0,90) . '...<br>'; ?>
</p>

<a href="<?php the_permalink(); ?>" class="module-spacer btn btn-uniqlo">
	<?php
	$custom_text = get_post_meta(get_the_ID(), "read_more_button_custom_text", true);
	if (! empty($custom_text)){
		echo $custom_text;
	} else {
		echo "Continue reading";
	}
	?>
</a>