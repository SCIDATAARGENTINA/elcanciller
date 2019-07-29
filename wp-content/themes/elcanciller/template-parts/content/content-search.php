<?php
/**
 * Template part for search content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<?php 
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
$thumbnail_id = get_post_thumbnail_id($post->ID);
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
$categories = get_the_terms( $post->ID , array( 'categoria_videos') );
$term_link = get_term_link( $categories[0], array( 'categoria_videos') );
?>

<div id="search-<?php echo $post->ID ?>" data-id="<?php echo $post->ID ?>" class="search" style="background-image: url('<?php echo $featured_img_url ?>');">
    <h2><?php the_title(); ?></h2>
</div><!-- end search-article -->