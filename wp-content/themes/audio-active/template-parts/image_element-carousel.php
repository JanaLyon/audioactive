<div class="page-image"">
<?php
if(has_post_thumbnail()){
	the_post_thumbnail('carousel');
}else{
	echo "<img src='/wp-content/themes/audio-active/images/fallback_image.jpg' />";}
?>
</div>