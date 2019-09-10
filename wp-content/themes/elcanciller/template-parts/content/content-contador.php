<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$thumbnail_id = get_post_thumbnail_id($post->ID);
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

$fecha_limite = new DateTime();

$fecha_hoy = new DateTime();

$fecha_limite = $fecha_limite->createFromFormat('d/m/Y', get_field('fecha_limite'));
$fecha_hoy = $fecha_limite->createFromFormat('d/m/Y', getdate());

$intervalo = $fecha_limite->diff($fecha_hoy);

?>

<article id="contador-<?php the_ID(); ?>">
    <div class="contador-header">
        <h3> <?php the_title()?> </h3> <span class="contador-header-subtitulo">Faltan_</span>
    </div>
    <div class="contador-cuerpo" style="background-image: url('<?php the_field('imagen_de_fondo') ?>');background-size: cover;background-repeat: no-repeat;"> 
        <div class="contador-cuerpo-inside">
            <div class="contador-numero">
                <?php 
                $numeros = array();
                $num = 84;
                while($num != 0){ //Ahora vemos por que usamos el while.
                $numeros[] = $num % 10;
                $num = intval($num/10); //Si dividimos 1234 / 10 nos da 123.4, pero queremos que no haya decimales. intval lo que hace es quitarle la parte decimal.
                ?><div class="number"><? $num ?></div><?php
                }
                ?>
            </div>
            <div class="contador-rango">DÍAS</div></div>
    </div>
    <div class="contador-footer"> <?php the_field('cuerpo')?> </div>
</article><!-- #post-${ID} -->
