<div class="carousel-text-container">
	<div class="carousel-text-background"></div>
	<div class="col-xs-12 col-sm-12 col-md-8">
		<div class="carousel-text">
			<h1><?php the_title(); ?></h1>

			<p class="carousel-body">
				<?php echo substr(get_the_excerpt(), 0, 90) . '...<br>'; ?>
			</p>
			<?php
			get_template_part('template-parts/read_more_btn', 'none');
			?>
		</div>
	</div>
</div>