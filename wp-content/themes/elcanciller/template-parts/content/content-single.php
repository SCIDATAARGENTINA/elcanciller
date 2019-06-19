<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		$destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
		$destacada = $destacada[0]; ?>


	<header class="entry-header container" style="background-image:url('<?php echo $destacada ?>')">
		<div class="post-category">
			<?php the_category(); ?>
		</div>
		<div class="post-tags">
			<p>Trends</p>
			<?php the_tags( $before = '',  $sep = '', $after = '' ); ?>
		</div>
		<div class="post-info">
			<span class="posted-on">
				<div class="timestamp">
					<?php echo  'Escrito hace ' . human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
				</div>
				<div class="post-date">
					<?php $post_date = get_the_date( 'l j, F Y' ); echo $post_date; ?>
				</div>
			</span>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-meta">
				<?php
					$authorId = get_the_author_id()
				 ?>
				 <?php echo get_avatar($authorId, 100); ?>
					<h5 class="author-post__title"><?php the_author() ?></h5>
			</div><!-- .meta-info -->
		</div><!-- End post-info -->
	</header>
	<div class="post-content container">

		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<aside class="sidebar-single">
			<div class="full-width follow-us-box md-margin">
		    <div class="title">Seguinos</div>
		    <div>Leé las últimas noticias en cualquiera de estas redes sociales!</div>
		    <div class="follow-us-box__button-row">
		      <a target="_blank" href="https://twitter.com/elcancillercom"><i class="fas fa-twitter"></i></a>
		      <a target="_blank" href="https://www.facebook.com/elcancillercom/"><i class="fa fa-facebook-f"></i></a>
		      <a target="_blank" href="https://www.instagram.com/elcancillerlive/"><i class="fa fa-instagram"></i></a>
		      <a target="_blank" href="https://www.youtube.com/channel/UCd9aVDXf_SH8-TNHRWj0J0g"><i class="fa fa-youtube"></i></a>
		    </div>
			</div><!-- End follow us box -->
			<div class="full-width subscribe-box md-margin m-b-3">
	    	<div class="title">Dejanos tu correo y recibí los principales títulos y servicios del día.</div>
	    	<div>Te enviaremos noticias de última hora directo a tu bandeja de entrada</div>
	  		<form action="https://elcanciller.com/ajax_subscribe" class="ajaxForm form-subscribe m-t-3" method="post">
	        <div class="form-group" style="width:100%">
	          <input type="email" placeholder="Tu e-mail" name="mail">
	          <button type="submit" class="btn-subscribe">Suscribirme</button>
	        </div>
	  		</form>
			</div><!-- End suscribe box -->

			<?php dynamic_sidebar( 'sidebar-single' ); ?>

		</aside><!-- end aside -->
	</div><!-- end post-content -->




	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
