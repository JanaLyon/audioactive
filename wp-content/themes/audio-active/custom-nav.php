<?php

function addItem($_title, $_link){
	echo '<li class="item">
		<a class="drawer-menu-item" href="'.$_link.'" class="title">'.$_title.'</a>
</li>';
}
function startDrawer($_title){
	echo '<li class="drawer-dropdown">
			<a 
			class="drawer-menu-item" 
			data-target="#" 
			href="#" 
			data-toggle="dropdown" 
			role="button" 
			aria-expanded="false">'.
				$_title
				.'<i class="fa fa-chevron-down" aria-hidden="true"></i>
			</a>
			<ul class="drawer-dropdown-menu">';
}
function closeDrawer(){
	echo '</ul></li>';
}
function addMenu() {
	$menu_name = 'primary';
	$locations = get_nav_menu_locations();
	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
	$menuitems = wp_get_nav_menu_items( $menu->term_id, array('orderby' => 'menu_order'));

	$menuArr = [];
	foreach($menuitems as $item){
		$menuArr[$item->menu_item_parent][] = $item;
	}
	menu($menuArr);
}
function menu($_menuArr, $_parent = 0) {

	foreach ($_menuArr[$_parent] as $item){
		//top level items
		if (!isset($_menuArr[$item->ID])){
			// this item has no children
			addItem($item->title, $item->url);
		}else{
			//this item does have children
			startDrawer($item->title);
			//now the fun part recursion!
			$tempArray = $_menuArr;
			unset($tempArray[$_parent]);
			menu($tempArray, $item->ID);
			//close drawer
			closeDrawer();
		}
	}
}
?>

	<ul class="main-nav drawer-menu">
<?php
		addMenu();
?>
	</ul>

<script>
	$(document).ready(function() {
		$('.drawer').drawer();
	});
</script>