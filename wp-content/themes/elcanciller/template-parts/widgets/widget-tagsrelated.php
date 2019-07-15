<?php
/**
 * Template part for displaying tagsrelated WIDGET
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
global $wp_query;
$postID = $wp_query->post->ID;

$categories = get_the_category($postID);
$cat_principal = $categories[0];

$related_tags = get_tags_in_use($cat_principal->term_id, 'id');

?>
<div class="tagsrelated-widget container">
    <div class="tag-list">
        <?php 
            $args = array(
                'taxonomy'               => 'post_tag',
                'orderby'                => 'count',
                'order'                  => 'DESC',
                'hide_empty'             => true,
                'post__in' => $related_tags
            );
            $the_query = new WP_Term_Query($args);
            foreach($the_query->get_terms() as $term){ 
            ?>
                <li><?php echo $term->name." (".$term->count.")"; ?></li>
            <?php
            }
            ?>
    </div>
</div><!-- end tagsrelated widget container -->