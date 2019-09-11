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

//$fecha_limite = $fecha_limite->createFromFormat('d/m/Y', get_field('fecha_limite'));
//$fecha_hoy = $fecha_hoy->createFromFormat('d/m/Y', getdate());

//$intervalo = $fecha_limite->diff($fecha_hoy);


$fecha2= $fecha_limite->createFromFormat('Y/m/d', get_field('fecha_limite'));
//$fecha1= new DateTime(date("d/m/Y")); 
$fecha01 = DateTime('Y/m/d 00:00:00');
$diff = $fecha01->diff($fecha2);

$fechaq1 = new DateTime('2009-10-11');
$fechaq2 = new DateTime('2009-10-13');
$resultado = $fechaq1->diff($fechaq2);
echo $resultado->format('%R%a días');
 
$intervalo= $diff->days;

?>

<?php if(get_field('habilitado') != 'no'){ ?>
<article id="contador-<?php the_ID(); ?>">
    <div class="contador-header">
        <h3> <?php the_title()?> </h3> <span class="contador-header-subtitulo">Faltan_</span>
    </div>
    <div class="contador-cuerpo" style="background-image: url('<?php the_field('imagen_de_fondo') ?>');background-size: cover;background-repeat: no-repeat;"> 
        <div class="contador-cuerpo-inside">
            <div class="contador-numero">
                <?php 
                $count = $intervalo;
                $numeros = str_split($count);
                foreach ($numeros as $val) {
                    if ($intervalo > 99)
                    {
                        ?><div class="number number-three"><?php echo $val ?></div><?php
                    }
                    else
                    {
                        ?><div class="number number-two"><?php echo $val ?></div><?php
                    }
                }
                ?>
            </div>
            <div class="contador-rango">DÍAS</div></div>
    </div>
    <div class="contador-footer"> <?php the_field('cuerpo')?> </div>
</article><!-- #post-${ID} -->
<?php } ?>