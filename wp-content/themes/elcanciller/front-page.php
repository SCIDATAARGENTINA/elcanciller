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
		</div><!-- outer-container -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
