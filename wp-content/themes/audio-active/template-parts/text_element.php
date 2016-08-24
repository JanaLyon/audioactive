<p class="article-title">
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</p>

<p class="article-excerpt">
	<?php echo substr(get_the_excerpt(), 0,90) . '...<br>'; ?>
</p>

<div class="tag-links">
	<?php get_template_part( 'template-parts/tag_element' ); ?>
</div>

<a href="<?php the_permalink(); ?>" class="module-spacer btn btn-uniqlo">
	<?php
	$custom_text = get_post_meta(get_the_ID(), "read_more_button_custom_text", true);
	if (! empty($custom_text)){
		echo $custom_text;
	} else {
		echo "continue reading";
	}
	?>
</a>