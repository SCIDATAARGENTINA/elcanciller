<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-logo container">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/brand-logo-w.svg" alt="El Canciller">
		</div><!-- end footer-logo -->
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info">
			<div class="footer-derechos">Todos los Derechos Reservados © elCanciller 2019</div><div class="footer-iconos"><a href="">Newsletter</a><a href="https://www.facebook.com/elcancillercom/" target="_blank" rel="noopener noreferrer"><i class="fa fa-envelope"></i></a> </div>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
