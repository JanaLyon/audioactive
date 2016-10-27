<div class="col-md-12">
	<div class="carousel-text-container">
		<div class="carousel-text-background"></div>
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-8">
				<div class="carousel-text">
					<h1><?php the_title(); ?></h1>

					<p class="carousel-body">
						<?php echo substr(get_the_excerpt(), 0, 90) . '...<br>'; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>