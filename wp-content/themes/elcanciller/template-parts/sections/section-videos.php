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
                 <?php $args = array(
                        'posts_per_page' => 3,
                        'post_type' => 'video'
                    );
                    $videolist = new WP_Query( $args );
                    while( $videolist->have_posts() ) {
                        $videolist->the_post();
                        $categories = get_the_terms( $post->ID , array( 'categoria_videos') );
                        $term_link = get_term_link( $categories[0], array( 'categoria_videos') );
                        ?>
                        
                        <div id="video-<?php echo $post->ID ?>" data-id="<?php echo $post->ID ?>" class="video-item popup-video">
                            <h3><?php the_title(); ?></h3>
                        </div>
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
                        
                    <?php }
                    // Restore original Post Data
                    wp_reset_postdata(); ?> 
            </div><!-- end videos-list -->
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
                        
                        get_template_part('template-parts/content/content', 'video');
                    }
                    // Restore original Post Data
                    wp_reset_postdata(); ?> 
    </div><!-- end videos-feed -->
    
</div><!-- end videos widget container -->