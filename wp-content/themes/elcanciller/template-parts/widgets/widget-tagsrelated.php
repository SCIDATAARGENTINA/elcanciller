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
        <?php foreach($related_tags as $tag_id){ ?>
            <?php 
                $tag = get_tag($tag_id); // <-- your tag ID
            ?>
            <a href="<?php echo get_tag_link($tag_id); ?>"><?php echo $tag->name; ?></a>

        <? } ?>
    </div>
</div><!-- end tagsrelated widget container -->