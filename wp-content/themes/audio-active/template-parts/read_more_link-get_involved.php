<?php
	$post_url = get_post_meta(get_the_ID(), "form_post", true);
	if (! empty($post_url)){
		echo "<a href='".$post_url."' class='btn-more'>More information</a>";
	} else {
		echo "<span style='color:red; font-weight: bold;'>Please input post URL</span>";
	}
?>