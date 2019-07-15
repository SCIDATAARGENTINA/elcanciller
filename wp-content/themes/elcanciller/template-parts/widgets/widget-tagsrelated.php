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
<pre><?php print_r($related_tags); ?></pre>
<div class="tagsrelated-widget container">
    <?php echo $postID ?>
</div><!-- end tagsrelated widget container -->