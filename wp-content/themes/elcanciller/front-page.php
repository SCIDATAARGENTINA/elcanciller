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

		<div class="front-page-content inner container">
			<div class="sidebar">
				<?php get_template_part('template-parts/sidebar/sidebar', 'front') ?>
			</div><!-- sidebar -->
			<div class="content">
				<?php get_template_part('template-parts/sections/section', 'live') ?>
				<?php get_template_part('template-parts/sections/section', 'ultimomomento') ?>
				<?php get_template_part('template-parts/home/trending', 'front') ?>
				<div class="col-3" data-quantity="3" data-offset="0">
				<?php echo do_shortcode("[posts cantidad='2' offset='0' encuesta_id='".get_field('encuesta_pequena')."' encuesta_pos='3']") ?>
				</div>
				<?php include( locate_template( 'template-parts/sections/section-encuesta.php', false, false ) ); ?>
				<div class="col-3 order-2" data-quantity="2" data-offset="3">
					<div id="publi1">
						<?php the_field('anuncio_1', $page_id) ?>
					</div>
					<?php echo do_shortcode('[posts cantidad="2" offset="2"]') ?>
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
				<?php echo do_shortcode('[posts cantidad="2" offset="4"]') ?>
			</div>
			<div class="col-1-2">
				<div class="advertical">
					<?php the_field('anuncio_7', $page_id) ?>
				</div>
				<div class="col-2-2">
					<?php echo do_shortcode('[posts cantidad="4" offset="6"]') ?>
				</div>				
			</div>
		</div><!-- outer-container -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
