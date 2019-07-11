<?php
/**
 * Template part for displaying CANCILLER SECCION PLACAS
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
     $ids = array();
     $slide = 0;
     
     $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'placa'
                    );
                    $query = new WP_Query( $args );
                    while( $query->have_posts() ) {
                        $query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        
                        array_push($ids, get_the_ID());
                        array_push($titulos, get_the_content());
                        array_push($placas, $featured_img_url);
                        
                    }
                    // Restore original Post Data
                    wp_reset_postdata(); ?> 

    <div class="placa-title">
        <div class="placa-content">
            <img src="<?php bloginfo('url') ?>/wp-content/uploads/2019/07/placa-logo.svg" alt="El Canciller Twitter">
            <div class="slider-placa-titulo">
                <?php $slide = 0; ?>
                <?php foreach($titulos as $titulo){ ?>
                    <?php $slide++; ?>
                    <h3 data-slide="<?php echo $slide; ?>"><?php echo $titulo; ?></h3>
                <?php } ?>
                <div class="placa-like">
                    <?php $slide = 0; ?>
                    <?php foreach($ids as $id){ ?>
                        <?php $slide++; ?>
                         <i data-slide="<?php echo $slide; ?>" class="fas fa-heart" data-id="<?php echo $id ?>"></i>
                    <?php } ?>
                </div>
            </div><!-- end slider placa titulo -->

        </div><!-- placa-content -->
    </div><!-- placa-title -->

    <div class="placa-image">
        <div class="slider-placa-imagen">
            <?php $slide = 0; ?>
            <?php foreach($placas as $placa){ ?>
                <?php $slide++; ?>
                <img data-slide="<?php echo $slide; ?>" src="<?php echo $placa; ?>" alt="El Canciller Live">
            <?php } ?>
        </div><!-- end slider placa imagen -->        
        <button id="next-placa" class="placa-next"></button>
    </div><!-- placa-image -->
    
</div><!-- end placas-section container -->