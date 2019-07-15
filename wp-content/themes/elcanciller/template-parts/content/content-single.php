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
$product_id = $post->ID; // this is for any other custom taxonomy
$taxonomy = 'category'; // this is for default wordpress taxonomy
$terms = wp_get_post_terms( $product_id, $taxonomy );

?>

<pre><?php echo $terms; ?></pre>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<img src="<?php echo $featured_img_url ?>" alt="<?php echo $alt ?>">
	<div class="post-content">
		<div class="post-author" style="background-color: ">

		</div>
		<div class="post-meta">
			<?php $default_local_date = ucwords(utf8_encode(get_the_time('l d \d\e F \d\e Y | H:i'))); 
			$date_connectors_capital = array('De', 'Del');
			$date_connectors_lower = array('de', 'del');

			$local_date = str_replace($date_connectors_capital, $date_connectors_lower, $default_local_date);
			?>
			<span class="post-time"><?php echo $local_date; ?></span>
			<span class="time-ago"><?php echo time_ago() ?></span>
		</div>

		<div class="post-title">

			<h1><?php the_title(); ?></h1>
			<div class="resumen">
				<?php echo get_the_excerpt(); ?>
			</div><!-- resumen -->
			<?php get_template_part('template-parts/comments/comments', 'sharer') ?>

		</div><!-- post-title -->

	<?php the_content(); ?>
	</div><!-- post content -->

</article><!-- #post-${ID} -->

<?php 

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
	comments_template();
}

?>