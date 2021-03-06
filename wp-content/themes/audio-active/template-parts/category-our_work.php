<?php
/**
 * Created by PhpStorm.
 * User: jlyon
 * Date: 06/09/2016
 * Time: 16:04
 */
?>
<?php
$counter = 1;
function is_first_post($counter)
{
	$str_bool = "true";
	$collapse_class = "collapsed";
	if ($counter > 1) {
		$str_bool = "false";
		$collapse_class = "collapsed";
	}
	$postObj = (object)['is_expanded' => $str_bool, 'state_class' => $collapse_class];
	return $postObj;
}

function is_first_active_post($counter)
{
	if ($counter == 1) {
		$collapse_class = "active-panel";
		return $collapse_class;
	}
}

?>
<div class="row">
	<?php get_template_part('template-parts/image_element', 'category'); ?>
	<?php get_template_part('template-parts/text_element', 'category'); ?>
</div>
<div class="row">
	<div class="col-md-8">
		<div class="page-content-corner">
			<h1><?php single_cat_title('', true); ?></h1>
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php
				while (have_posts()) {
					the_post();
					?>
					<div class="panel panel-ourwork <?php echo is_first_active_post($counter) ?>">
						<div class="panel-heading" role="tab" id="heading<?php echo $counter ?>">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion"
								   href="#collapse<?php echo $counter; ?>"
								   aria-expanded="<?php echo is_first_post($counter)->is_expanded; ?>"
								   aria-controls="collapse<?php echo $counter; ?>"
								   class="<?php echo is_first_post($counter)->state_class; ?>">
									<?php the_title(); ?><i
											class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
								</a>
							</h4>
						</div>
						<div id="collapse<?php echo $counter;
						?>" class="panel-collapse collapse<?php echo $counter == 1 ? ' in' : '' ?>" role="tabpanel"
							 aria-labelledby="heading<?php echo $counter ?>">
							<div class="panel-body">
								<?php the_excerpt(); ?>
								<?php get_template_part('template-parts/read_more_link', 'none') ?>
							</div>
						</div>
					</div>
					<?php
					//	echo 'Counter' . $counter;
					$counter++;
				}
				?>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>
<script>
	//js for active element
	(function () {
		$('.panel-group .active-panel i').css({"transform": "rotate(180deg)"});
		$('.panel-group .panel-ourwork a').click(function () {
			if( $(this).is('.panel-group .active-panel .panel-heading a') ){
				TweenMax.to('.panel-group .active-panel i', 0.5, {rotation: 0});
				$('.panel-group .active-panel').toggleClass('active-panel');
			} else {
				TweenMax.to('.panel-group .active-panel i', 0.5, {rotation: 0});
				$('.panel-group .active-panel').toggleClass('active-panel');
				$(this).parent().parent().parent().toggleClass("active-panel");
				TweenMax.to('.panel-group .active-panel i', 0.5, {rotation: 180});
			}
		});
	})();
</script>