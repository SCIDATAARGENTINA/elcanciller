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

<div class="placas-section container">

     <?php 

     $titulos = array();
     $placas = array();
     
     $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'placa'
                    );
                    $query = new WP_Query( $args );
                    while( $query->have_posts() ) {
                        $query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                        
                        array_push($titulos, get_the_content());
                        array_push($placas, $featured_img_url);
                        
                    }
                    // Restore original Post Data
                    wp_reset_postdata(); ?> 

    <div class="placa-title">
        <div class="placa-content">
            <img src="<?php bloginfo('url') ?>/wp-content/uploads/2019/07/placa-logo.svg" alt="El Canciller Twitter">
            <?php foreach($titulos as $titulo){ ?>
            <h3><?php echo $titulo; ?></h3>
            <?php } ?>
            <div class="placa-like">
                <i class="fas fa-heart"></i>
            </div>
        </div><!-- placa-content -->

    </div><!-- placa-title -->
    <div class="placa-image">
        <?php foreach($placas as $placa){ ?>
        <img src="<?php echo $placa; ?>" alt="">
        <?php } ?>
        
        <button id="next-placa" class="placa-next"></button>
    </div><!-- placa-image -->
    
</div><!-- end placas-section container -->