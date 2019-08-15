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
        <div class="titulo">
            <h3><?php the_title(); ?></h3>
            <p><?php the_field('subtitulo'); ?></p>
        </div><!-- titulo -->
        <div class="opciones">
            <?php 
            // check if the repeater field has rows of data
            if( have_rows('opciones') ):

                // loop through the rows of data
                while ( have_rows('opciones') ) : the_row(); ?>
                
                    <div class="opcion">
                        <img src="<?php echo wp_get_attachment_url( get_sub_field('imagen') ) ?>" alt="<?php get_post_meta(get_sub_field('imagen'), '_wp_attachment_image_alt', true); ?>">
                        <div class="titulo-opcion">
                            <?php the_sub_field('nombre') ?>
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