<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reed Career Advice
 */

?>

<div class="container content-bg">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php

			$categories = get_the_category();

			the_post_thumbnail();

			echo "<p class='post-author'>by ";
			the_author();
			echo "</p>";
			the_content();

			?>
			<?php
			wp_link_pages(array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'audio_active'),
				'after' => '</div>',
			));
			?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php audio_active_entry_footer() ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div><!-- .container -->



