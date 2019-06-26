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
				<div class="render-posts" data-quantity="4" data-random="1">
					<div class="post-rendered trending" style="background-image: url('http://142.93.24.13/wp-content/uploads/2019/06/macri-vidal.jpg')">
						<div class="hovered">
							<div class="action-links">
								<i class="fab fa-twitter"></i>
								<i class="fab fa-facebook-f"></i>
								<i class="fas fa-sign-out-alt"></i>
								<i class="fas fa-heart"></i>
							</div><!-- action-links -->
							<div class="post-data"></div>
						</div><!-- hovered -->
					</div><!-- post-rendered -->
				</div>
				<hr>
				<div class="render-posts" data-quantity="9"></div>

			</div><!-- content -->
		</div><!-- inner container -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
