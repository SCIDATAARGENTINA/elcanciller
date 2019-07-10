<?php
/**
 * Template part for opinion content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<?php 
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
$thumbnail_id = get_post_thumbnail_id($post->ID);
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
$categories = get_the_terms( $post->ID , array( 'categoria_videos') );
$term_link = get_term_link( $categories[0], array( 'categoria_videos') );
?>

<div id="opinion-<?php echo $post->ID ?>" class="opinion">
    <div class="opinion-container">
        <div class="imagen" style="background-image: url('<?php echo $featured_img_url ?>');">
            
        </div>
        <div class="autor">
            <p>@<?php the_author(); ?></p>
        </div>
        <div class="titulo">
            <h3><?php the_title(); ?></h3>
        </div>
    </div>
    <?php get_template_part('template-parts/comments/comments', 'nosharer') ?>
</div><!-- end opinion -->