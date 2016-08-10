<form role="form" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div class="form-group">
		<div class="input-group">
			<input class="form-control" placeholder='Keywords, e.g."Interview"' type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
			<input class="input-group-addon" type="submit" id="searchsubmit" value="Search" />
		</div>
	</div>
</form>