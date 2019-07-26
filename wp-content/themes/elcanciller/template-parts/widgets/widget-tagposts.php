<?php
/**
 * Template part for displaying tagposts WIDGET
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
<pre><?php print_r($tag_principal) ?></pre>
<div class="tagposts-widget container">
    <div class="current-tag">
        <i class="fas fa-hashtag"></i>
        <a href="<?php echo get_term_link( $tag_principal , 'post_tag' ) ?>"><?php echo $tag_principal->name ?></a>
    </div><!-- tags-icon -->
    <ul class="tagposts-list">
       <?php $args = array(
                        'posts_per_page' => 3,
                        'tag_id' => $tag_principal->term_id
                    );
                    $query = new WP_Query( $args );
                    while( $query->have_posts() ) {
                        $query->the_post(); ?>

                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        
                    <?php }
                    // Restore original Post Data
                    wp_reset_postdata(); ?>
    </ul><!-- tag-list -->
</div><!-- end tagsrelated widget container -->