<?php
	if (function_exists('category_image_src')) {
		$category_image = category_image_src( array( 'size' => 'full' ) , false );
	} else {
		$category_image = '';
	}
?>
<header class="archive-header <?php if ($category_image==true) echo 'category-image'; ?>">

<?php if ($category_image) : ?>

<!-- category featured image -->
<div class="page-image">
	<img src="<?php echo $category_image; ?>" alt="<?php single_cat_title();?>" desc="<?php echo wp_strip_all_tags( category_description() );?>"/>
</div>

<?php endif; ?>