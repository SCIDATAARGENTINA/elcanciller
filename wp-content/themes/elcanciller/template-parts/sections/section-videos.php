<?php
/**
 * Template part for displaying CANCILLER SECCION VIDEOS
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<div class="videos-section container">

    <div class="videos-title-list">
        <div class="profile-data">
            <div class="videos-title">
                <div class="videos-pic">
                    <a href="#"><img src="<?php bloginfo('url') ?>/wp-content/uploads/2019/07/videos-logo.svg" alt="El CancillerVideos"></a>
                </div><!-- end videos-pic -->
                <div class="videos-data">
                    <h4><a href="#">Streaming</a></h4>
                    <a href="#"><p>elcancillercom/videos/</p></a>
                </div><!-- end videos-data -->
            </div><!-- end videos-title -->
            <div class="videos-list">
                
            </div><!-- end logo -->
        </div><!-- end profile data -->
    </div><!-- videos-title-list -->

    <div class="videos-feed">
        <?php $args = array(
                        'posts_per_page' => 2,
                        'post_type' => 'video'
                    );
                    $query = new WP_Query( $args );
                    while( $query->have_posts() ) {
                        $query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                        $thumbnail_id = get_post_thumbnail_id($post->ID);
                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                        ?>
                        
                        <div class="video" style="background-image: url('<?php echo $featured_img_url ?>');">
                            <div class="player-icon">
                                <img src="<?php bloginfo('url') ?>/wp-content/uploads/2019/07/videos-icon.svg" alt="<?php echo $alt ?>">
                            </div><!-- player icon -->
                        </div><!-- video -->

                    <?php 
                    }
                    // Restore original Post Data
                    wp_reset_postdata(); ?> 
    </div><!-- end videos-feed -->
    
</div><!-- end videos widget container -->