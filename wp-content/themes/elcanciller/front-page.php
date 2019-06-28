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
					<div class="post-rendered trending">
						<div class="rendered-img" style="background-image: url('http://142.93.24.13/wp-content/uploads/2019/06/macri-vidal.jpg')">
							<div class="hovered">
								<div class="action-links">
									<i class="fab fa-twitter"></i>
									<i class="fab fa-facebook-f"></i>
									<a href="#"><i class="fas fa-sign-out-alt"></i></a>
									<i class="fas fa-heart"></i>
								</div><!-- action-links -->
								<div class="post-data">
									<div class="post-category">
										<h4>Espectaculo</h4>
									</div>
									<div class="post-title">
										<h3>El nuevo disco de Beyonce, entre los nueve peores del año</h3>
										<span class="time-ago">HACE 2HS</span>
									</div>
								</div><!-- post-data -->
							</div><!-- hovered -->
						</div><!-- rendered-img -->
						<div class="comentarios-noshare">
							<div class="comment-icon">
								<i class="far fa-comment-dots"></i>
							</div>
							<div class="comment-container">
								<div class="comentarios">

									<div class="comentario">
										<span class="comment-author">
											@autor
										</span>
										<span class="comment-text">
											Hola esto es un comentario
										</span>
									</div><!-- comentario -->

								</div><!-- comentarios -->
							</div><!-- comment-container -->
						</div><!-- comentarios-noshare -->
					</div><!-- post-rendered -->
				</div>
				<div class="render-posts" data-quantity="9"></div>

			</div><!-- content -->
		</div><!-- inner container -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
