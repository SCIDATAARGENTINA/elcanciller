<?php
/**
 * Template part for opinion content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<?php 
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
$thumbnail_id = get_post_thumbnail_id($post->ID);
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
?>

<div id="encuesta-<?php echo $post->ID ?>" class="encuesta">
    <div class="encuesta-container">
        <div class="encabezado">
            <img src="<?php bloginfo('url') ?>/wp-content/uploads/2019/08/encuesta-logo.svg" alt="">
            <div class="titulo">
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('subtitulo'); ?></p>
            </div><!-- titulo -->
        </div>
        <div class="opciones">
            <?php 
            // check if the repeater field has rows of data
            if( have_rows('opciones') ):

                // loop through the rows of data
                while ( have_rows('opciones') ) : the_row(); 
                $opcion = get_sub_field('opcion')
                ?>
                
                    <div class="opcion">
                        <div class="image-container">
                        <img src="<?php echo wp_get_attachment_url( $opcion['imagen'] ) ?>" alt="<?php get_post_meta($opcion['imagen'], '_wp_attachment_image_alt', true); ?>">
                        </div>
                        <div class="titulo-opcion">
                            <?php echo $opcion['nombre'] ?>
                        </div><!-- titulo opcion -->
                    </div><!-- opcion -->

                <?php endwhile;

            else :

                // no rows found

            endif;
            ?>
        </div>
    </div>
</div><!-- end opinion -->