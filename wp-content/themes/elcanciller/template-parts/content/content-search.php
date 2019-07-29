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
$post_id = $post->ID; // this is for any other custom taxonomy
$taxonomy = 'category'; // this is for default wordpress taxonomy
$terms = wp_get_post_terms( $post_id, $taxonomy );
$term = $terms[0];
$cat_color = get_field('color', $term->taxonomy . '_' . $term->term_id);
$default_local_date = ucwords(utf8_encode(get_the_time('l d \d\e F \d\e Y | H:i'))); 
$date_connectors_capital = array('De', 'Del');
$date_connectors_lower = array('de', 'del');
$local_date = str_replace($date_connectors_capital, $date_connectors_lower, $default_local_date);
echo '<style> .' . $term->slug . ':before'. '{ background: ' . $cat_color . ';} </style>';
?>

<div id="search-<?php echo $post->ID ?>" data-id="<?php echo $post->ID ?>" class="search-post">
    <div class="imagen" style="background-image:url('<?php echo $featured_img_url ?>');">
        <div class="dummy"></div>
    </div>
    <div class="search-content">
        <a style="color: <?php echo $cat_color ?>" href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a>
        <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
        <span><?php echo time_ago() ?></span>
    </div>
</div><!-- end search-article -->