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
				<div class="render-posts col-2" data-quantity="4" data-offset="0"></div>
				<?php get_template_part('template-parts/sections/section', 'opinion') ?>

			</div><!-- content -->

		</div><!-- inner container -->
		<div class="outer-container">
			<?php get_template_part('template-parts/sections/section', 'placas') ?>
			<?php get_template_part('template-parts/sections/section', 'instagram') ?>
			<?php get_template_part('template-parts/sections/section', 'videos') ?>
			<div class="loader">Cargando...</div>
			<div class="render-posts col-3" data-quantity="9" data-offset="4">
			</div>
		</div><!-- outer-container -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
