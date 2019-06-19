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
					<p>hola</p>
				</div><!-- content -->
			</div><!-- inner container -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
