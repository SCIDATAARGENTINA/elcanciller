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
				<?php get_template_part('template-parts/sidebar/sidebar', 'single') ?>
			</div><!-- sidebar -->
			<div class="content">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				if (is_single()) {
					$post_id = get_the_ID();
					pvc_stats_update( $post_id, 0 );
				}

				get_template_part( 'template-parts/content/content', 'single' );

			endwhile; // End of the loop.
			?>

			</div><!-- content -->

		</div><!-- inner container -->
		<div class="outer-container">
			<div class="related-posts">
				<div class="grey-band"></div>
				<div class="related-title">
					<img src="<?php bloginfo('url') ?>/wp-content/uploads/2019/07/fire-marron.svg" alt="">
					<h3>Lo que no te podés perder</h3>
				</div><!-- related-title -->
				<div class="loader">Cargando...</div>
				<div class="render-posts col-3" data-quantity="9">
				</div>
			</div>
		</div><!-- outer-container -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
