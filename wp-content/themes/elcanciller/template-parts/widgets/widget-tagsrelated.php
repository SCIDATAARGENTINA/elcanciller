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
?>

<div class="tagsrelated-widget container">
    <?php echo $postID ?>
</div><!-- end tagsrelated widget container -->