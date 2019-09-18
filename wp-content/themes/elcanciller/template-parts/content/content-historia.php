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
$thumbnail_id = get_field('imagen');
$featured_img_url = wp_get_attachment_image_src( $thumbnail_id, 'full' );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
?>

<article id="historia-<?php the_ID(); ?>">

    <h3><?php the_title(); ?></h3>

    <img src="<?php echo $featured_img_url ?>" alt="<?php echo $alt ?>">

    <?php if(get_field('link')){ ?>
        <a href="<?php get_field('link') ?>">Ver más</a>
    <?php } ?>

</article><!-- #post-${ID} -->
