<?php
/**
 * Template part for video content inside popup
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<div id="video-popup-<?php echo $post->ID ?>" class="player-content mfp-hide">
    <div class="popup-content">
        <div class="videos-title">
            <div class="videos-pic">
                <a href="#"><img src="<?php bloginfo('url') ?>/wp-content/uploads/2019/07/videos-logo.svg" alt="El Canciller - Videos"></a>
            </div><!-- end videos-pic -->
            <div class="videos-data">
                <h4><a href="<?php echo $term_link ?>"><?php echo $categories[0]->name ?></a></h4>
                <h3><?php the_title(); ?></h3>
            </div><!-- end videos-data -->
        </div><!-- end videos-title -->
        <?php echo get_the_content(); ?>
    </div>
</div>