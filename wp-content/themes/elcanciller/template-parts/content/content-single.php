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

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$thumbnail_id = get_post_thumbnail_id($post->ID);
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
$categories = get_the_terms( $post->ID , array( 'categoria_videos') );
$term_link = get_term_link( $categories[0], array( 'categoria_videos') );
$author_link = get_author_posts_url( get_the_author_meta('ID') );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<img src="<?php echo $featured_img_url ?>" alt="<?php echo $alt ?>">

	<div class="post-title">
		<h1><?php the_title(); ?></h1>
		<div class="resumen">
			<?php echo get_the_excerpt(); ?>
		</div><!-- resumen -->
	</div><!-- post-title -->

	<?php the_content(); ?>

</article><!-- #post-${ID} -->

<?php 

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
	comments_template();
}

?>