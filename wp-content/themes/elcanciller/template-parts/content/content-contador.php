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

$intervalo = $fecha_limite->diff($fecha_hoy);

?>

<article id="contador-<?php the_ID(); ?>">
    <div class="contador-header">
        <h3> <?php the_title()?> </h3><span>Faltan_</span>
    </div>
    <p> <?php the_field('fecha_limite')?> </p>
    <p> <?php the_field('cuerpo')?> </p>
</article><!-- #post-${ID} -->
