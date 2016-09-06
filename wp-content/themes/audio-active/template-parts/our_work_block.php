<div class="col-md-4">
	<div class="our-work-topbox">
		<h2>Our work</h2>
		<p></p>
		<ul>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<div class="our-work-bottombox">
		<h2>Get involved</h2>
		<p></p>
		<a href="#" class="btn btn-action">Signup</a>
	</div>
</div>
<div class="col-md-8">
	<a class="article-image"">
	<?php
	if (has_post_thumbnail()) {
		the_post_thumbnail('our-work-home');
	} else {
		echo "<img src='/wp-content/themes/audio-active/img/fallback_image.jpg' />";
	}
	?>
	</a>
</div>