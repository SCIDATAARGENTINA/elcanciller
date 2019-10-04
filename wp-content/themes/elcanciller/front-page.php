<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
$page_id  = get_queried_object_id();
$encuesta_pequena = get_field('encuesta_pequena');
$encuesta_grande = get_field('encuesta_grande');
?>
<script>
	jQuery( document ).ready(function() {
	setTimeout(function() {
		location.reload();
	}, 300000);
});
</script>

<section id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php echo get_field('encuesta_pequena') ?>
		<div class="front-page-content inner container">
			<div class="sidebar">
				<?php get_template_part('template-parts/sidebar/sidebar', 'front') ?>
			</div><!-- sidebar -->
			<div class="content">
				<?php get_template_part('template-parts/sections/section', 'live') ?>
				<?php get_template_part('template-parts/sections/section', 'ultimomomento') ?>
				<?php get_template_part('template-parts/home/trending', 'front') ?>
				<div class="col-3" data-quantity="3" data-offset="0">
				
				<?php // Cambia el Layout si no hay encuesta pequeña
				if ($encuesta_pequena){
					echo do_shortcode('[posts cantidad="2" offset="0" encuesta_id="'.$encuesta_pequena.'" encuesta_pos="3"]');
				}else{
					echo do_shortcode('[posts cantidad="3" offset="0"]');
				}
				?>
				</div>
				<?php 
				if($encuesta_grande){
					include( locate_template( 'template-parts/sections/section-encuesta.php', false, false ) ); 
				}else if($encuesta_pequena){
					?><div class="col-3"> <?php
					echo do_shortcode('[posts cantidad="3" offset="2"]'); // Con encuesta pequeña sin encuesta grande - offset 2 total: 5
					?></div> <?php 
				}else{
					?><div class="col-3"> <?php
					echo do_shortcode('[posts cantidad="3" offset="3"]'); // Sin encuestas offset 3 total: 6
					?></div> <?php 
				}
				?>
				<div class="col-3 order-2" data-quantity="2" data-offset="3">
					<div id="publi1">
						<?php the_field('anuncio_1', $page_id) ?>
					</div>
					<?php 
					if ($encuesta_pequena && $encuesta_grande){
						echo do_shortcode('[posts cantidad="2" offset="2"]'); // Con encuesta grande y pequeña offset: 2 total: 4
					}else if($encuesta_pequena && !$encuesta_grande){ 
						echo do_shortcode('[posts cantidad="2" offset="5"]'); // Con encuesta pequeña sin encuesta grande - offset 5 total: 7 
					}else if(!$encuesta_pequena && $encuesta_grande){
						echo do_shortcode('[posts cantidad="2" offset="3"]'); // Sin encuesta pequeña con encuesta grande - offset 3 total: 5
					}else {
						echo do_shortcode('[posts cantidad="2" offset="6"]'); // Sin encuestas - offset 6 total: 8
					}
					?>
				</div>
				<?php //get_template_part('template-parts/sections/section', 'encuesta') ?> 
				<?php get_template_part('template-parts/sections/section', 'opinion') ?>

			</div><!-- content -->

		</div><!-- inner container -->
		<div class="outer-container">
			<div class="ad-long"><?php the_field('anuncio_2', $page_id) ?></div>
			<?php get_template_part('template-parts/sections/section', 'placas') ?>
			<div class="ad-long"><?php the_field('anuncio_3', $page_id) ?></div>
			<?php get_template_part('template-parts/sections/section', 'instagram') ?>
			<div class="ad-long"><?php the_field('anuncio_4', $page_id) ?></div>
			<?php get_template_part('template-parts/sections/section', 'videos') ?>
			<div class="ad-long"><?php the_field('anuncio_5', $page_id) ?></div>
			<div class="col-3" data-quantity="2" data-offset="5">
				<div id="publi2">
					<?php the_field('anuncio_6', $page_id) ?>
				</div>
				<?php
				if ($encuesta_pequena && $encuesta_grande){
					echo do_shortcode('[posts cantidad="2" offset="4"]'); // Con encuesta grande y pequeña offset: 4 total: 6
				}else if($encuesta_pequena && !$encuesta_grande){ 
					echo do_shortcode('[posts cantidad="2" offset="7"]'); // Con encuesta pequeña sin encuesta grande - offset 7 total: 9 
				}else if(!$encuesta_pequena && $encuesta_grande){
					echo do_shortcode('[posts cantidad="2" offset="5"]'); // Sin encuesta pequeña con encuesta grande - offset 5 total: 7
				}else {
					echo do_shortcode('[posts cantidad="2" offset="8"]'); // Sin encuestas - offset 8 total: 10
				}
				?>
			</div>
			<div class="col-1-2">
				<div class="advertical">
					<?php the_field('anuncio_7', $page_id) ?>
				</div>
				<div class="col-2-2">
				<?php
				if ($encuesta_pequena && $encuesta_grande){
					echo do_shortcode('[posts cantidad="4" offset="6"]'); // Con encuesta grande y pequeña offset: 6 total: 10
				}else if($encuesta_pequena && !$encuesta_grande){ 
					echo do_shortcode('[posts cantidad="4" offset="9"]'); // Con encuesta pequeña sin encuesta grande - offset 9 total: 13 
				}else if(!$encuesta_pequena && $encuesta_grande){
					echo do_shortcode('[posts cantidad="4" offset="7"]'); // Sin encuesta pequeña con encuesta grande - offset 7 total: 11
				}else {
					echo do_shortcode('[posts cantidad="4" offset="10"]'); // Sin encuestas - offset 10 total: 14
				}
				?>
				</div>				
			</div>
		</div><!-- outer-container -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
