<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		$destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
		$destacada = $destacada[0]; ?>


	<header class="entry-header container" style="background-image:url('<?php echo $destacada ?>')">
		<div class="post-category">
			<?php the_category(); ?>
		</div>
		<div class="post-info">
			<span class="posted-on">
				<?php echo  'Escrito hace ' . human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
				<br>
				<?php $post_date = get_the_date( 'l j,F Y' ); echo $post_date; ?>
			</span>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">
				<?php
					$authorId = get_the_author_id()
				 ?>
				 <?php echo get_avatar($authorId, 100); ?>
					<h5 class="author-post__title"><?php the_author() ?></h5>
			</div><!-- .meta-info -->
		</div><!-- End post-info -->
	</header>

	<div class="entry-content">
		<h1>Hola</h1>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
