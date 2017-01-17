<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package audio-active
 */

?>
<div class="container content-bg">
	<div class="row">
		<div class="col-md-8">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">
					<div class="post-image-container">
					<?php the_post_thumbnail('article'); ?>
					</div>
					<?php
					if ('post' === get_post_type()) : ?>
						<div class="entry-meta">
							<?php the_date('d M Y', '<p class="article-date">', '</p>'); ?>
						</div><!-- .entry-meta -->
						<?php
					endif;
					the_title('<h1 class="entry-title">', '</h1>');
					?>
				</header><!-- .entry-header -->

				<div class="entry-content latest-articles-post">
					<?php
					the_content();
					//get 4 latest news blocks
					get_template_part("template-parts/latest_articles", "post");
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php audio_active_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->
		</div><!-- .col -->
		<div class="col-md-4">
			<?php get_sidebar(); ?>
	</div>
</div><!-- .container -->