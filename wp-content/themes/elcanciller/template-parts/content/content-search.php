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
$taxonomy = 'category';
$terms = wp_get_post_terms( $post_id, $taxonomy );
$term = $terms[0];
$cat_color = get_field('color', $term->taxonomy . '_' . $term->term_id);
echo '<style> .' . $term->slug . ':before'. '{ background: ' . $cat_color . ';} </style>';
?>

<div id="search-<?php echo $post->ID ?>" data-id="<?php echo $post->ID ?>" class="search">
    <div class="imagen">
        <img src="<?php echo $featured_img_url ?>" alt="<?php echo $alt ?>">
    </div>
    <div class="search-content">
        <a style="color: <?php $cat_color ?>" href="<?php get_term_link($term) ?>"><?php $term->name ?></a>
        <h3><?php the_title(); ?></h3>
    </div>
</div><!-- end search-article -->