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

$tags = get_the_tags($postID);
$tag_principal = $tags[0];

?>
<div class="tagposts-widget container">
    <div class="current-tag">
        <i class="fas fa-hashtag"></i>
        <a href=""><?php $tag_principal->name ?></a>
    </div><!-- tags-icon -->
    <ul class="tag-list">
       <?php $args = array(
                        'posts_per_page' => 2,
                        'post_type' => 'opinion'
                    );
                    $query = new WP_Query( $args );
                    while( $query->have_posts() ) {
                        $query->the_post(); 
                        
                        get_template_part('template-parts/content/content', 'opinion');
                    }
                    // Restore original Post Data
                    wp_reset_postdata(); ?>
    </ul><!-- tag-list -->
</div><!-- end tagsrelated widget container -->