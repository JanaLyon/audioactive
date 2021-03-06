<?php
//if has a hero tag display below
$hero_query = new WP_Query('tag=hero');
if ($hero_query->have_posts()) {

$number_of_posts = $hero_query->post_count;
$counter = 0;
?>

<div id="slider" class="carousel slide carousel-cut-corner" data-interval="6000" data-ride="carousel">
	<!-- Indicators -->

	<ol class="carousel-indicators">
		<?php

		while ($counter < $number_of_posts) {
			if ($counter == 0) {
				echo '<li data-target="#slider" data-slide-to="' . $counter . '" class="active"><div class="indicator-color"></div></li>';
			} else {
				echo '<li data-target="#slider" data-slide-to="' . $counter . '"><div class="indicator-color"></div></li>';
			}
			$counter++;
		}
		?>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<?php
		while ($hero_query->have_posts()) {
		$hero_query->the_post();
		if ($hero_query->current_post == 0) {
			echo '<div class="item active">';
		} else {
			echo '<div class="item">';
		}
		?>
		<div class="hero-module">
			<div class="row">
				<div class="col-xs-12">
					<?php get_template_part('template-parts/image_element', 'carousel'); ?>
					<?php get_template_part('template-parts/text_element', 'carousel'); ?>
				</div>
			</div>
		</div>
	</div>
	<?php
	} //endwhile
	} //if ($hero_query)
	wp_reset_query(); // Restore global post data stored by the_post().
	?>
</div>

<!-- Controls -->
<div class="carousel-counter">
	<div class="slide-number-text-container">
		<i id="countNumb">1&nbsp;</i><i><?php echo "of " .$counter; ?></i>
	</div>
</div>
<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-menu-left"></span>
	<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#slider" role="button" data-slide="next">
	<span class="glyphicon glyphicon-menu-right"></span>
	<span class="sr-only">Next</span>
</a>
</div>
<script>
	jQuery(document).ready(function () {
		jQuery("#slider").swiperight(function () {
			jQuery(this).carousel('prev');
		});
		jQuery("#slider").swipeleft(function () {
			jQuery(this).carousel('next');
		});
		jQuery("#slider").on('slide.bs.carousel', function (e) {
			var slideFrom = $(this).find('.active').index();
			var slideTo = $(e.relatedTarget).index();
			var countText = slideTo + 1 + "&nbsp";
			document.getElementById("countNumb").innerHTML = countText;
		});
	});
</script>