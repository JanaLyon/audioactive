<?php
/**
 * Created by PhpStorm.
 * User: jlyon
 * Date: 06/09/2016
 * Time: 16:04
 */
?>
<!-- full width letterbox image with text over it -->
<!-- sidebar underneath image -->
<!-- line with cut corner in grey -->
<!-- Title - not sure where this is coming from..? -->
<!-- loop through collapsible articles -->


<?php
$counter = 1;
function is_first_post($counter){
	$str_bool = "false";
	if($counter == 1){
		$str_bool = "true";
	}
	return $str_bool;
}
?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<?php
	while ( have_posts() ) {
	the_post();
	?>
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="heading<?php echo $counter?>">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="<?php echo $str_bool; ?>" aria-controls="collapseOne">
					<?php the_title(); ?>
				</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $counter?>">
			<div class="panel-body">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php
	$counter++;
	}
	?>
</div>