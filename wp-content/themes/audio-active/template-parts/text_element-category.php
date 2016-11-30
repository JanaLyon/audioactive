<div class="col-md-12">
	<div class="carousel-text-container">
		<div class="carousel-text-background"></div>
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-8">
				<div class="carousel-text">
					<h1>
						<?php
							if(! in_category('Our work')){
								single_cat_title();
							}else{
								echo "Our work";
							}
						?>
					</h1>

					<p class="carousel-body">
						<?php
							echo category_description();
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>