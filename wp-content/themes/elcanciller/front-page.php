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

<section id="primary" class="content-area">
	<main id="main" class="site-main">

		<div class="front-page-content inner container">
			<div class="sidebar">
				<?php get_template_part('template-parts/sidebar/sidebar', 'front') ?>
			</div><!-- sidebar -->
			<div class="content">

				<?php get_template_part('template-parts/home/trending', 'front') ?>
				<div class="loader">Cargando...</div>
				<div class="render-posts col-3" data-quantity="3" data-offset="0"></div>
				<div class="render-posts col-3" data-quantity="2" data-offset="3">
					<div id="publi1">
						<?php the_field('anuncio_1', $page_id) ?>
					</div>
				</div>
				<?php include( locate_template( 'template-parts/sections/section-encuesta.php', false, false ) ); ?>
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
			<div class="loader">Cargando...</div>
			<div class="render-posts col-3" data-quantity="2" data-offset="5">
				<div id="publi2">
					<?php the_field('anuncio_6', $page_id) ?>
				</div>
			</div>
			<div class="col-1-2">
				<div class="advertical">
					<?php the_field('anuncio_7', $page_id) ?>
				</div>
				<div class="render-posts col-2-2" data-quantity="4" data-offset="7"></div>
				<?php //echo do_shortcode('[posts cantidad="4" offset="7"]') ?>
			</div>
		</div><!-- outer-container -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
