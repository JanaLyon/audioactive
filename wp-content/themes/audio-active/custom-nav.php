<?php
$menu_name = 'primary';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menuitems = wp_get_nav_menu_items( $menu->term_id, array() );
?>

	<ul class="main-nav drawer-menu">
		<li><a class="drawer-menu-item" href="/" class="title">Branding</a></li>
		<?php
		$count = 0;
		$submenu = false;
		foreach( $menuitems as $item ):
			$link = $item->url;
			$title = $item->title;
			// item does not have a parent so menu_item_parent equals 0 (false)
			if ( !$item->menu_item_parent ):
				// save this id for later comparison with sub-menu items
				$parent_id = $item->ID;
				?>

				<li><a class="drawer-menu-item" href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
			<?php

			endif;

			if ( $parent_id == $item->menu_item_parent ):

				if ( !$submenu ): $submenu = true; ?>

					<li class="drawer-dropdown">

					<a class="drawer-menu-item" data-target="#" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
						<?php echo $title; ?><span class="drawer-caret"></span>
					</a>

					<ul class="drawer-dropdown-menu">

				<?php endif; ?>

						<li class="item drawer-dropdown">
							<a class="drawer-dropdown-menu-item" href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
						</li>

			<?php if ( !isset($menu_items[ $count + 1 ]) || $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
					</ul>
				<?php $submenu = false; endif;

			endif;

			if ( !isset($menu_items[ $count + 1 ]) || $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
			</li>
			<?php $submenu = false; endif;

			$count++; endforeach; ?>

	</ul>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--script src="https://cdn.rawgit.com/ungki/bootstrap.dropdown/3.3.5/dropdown.min.js"></script-->
<script src="/wp-content/themes/audio-active/js/drawer.min.js" charset="utf-8"></script>
<script>
	$(document).ready(function() {
		$('.drawer').drawer();
	});
</script>