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

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$thumbnail_id = get_post_thumbnail_id($post->ID);
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
$post_id = $post->ID; // this is for any other custom taxonomy
$taxonomy = 'category'; // this is for default wordpress taxonomy
$terms = wp_get_post_terms( $post_id, $taxonomy );
$term = $terms[0];
$cat_color = get_field('color', $term->taxonomy . '_' . $term->term_id);
echo '<style> .' . $term->slug . ':before'. '{ background: ' . $cat_color . '; border-color: ' . $cat_color . ';} </style>';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-imagen <?php echo $term->slug ?>">
		<div class="post-category">
			<a href="<?php get_term_link($term);  ?>"><h4 style="color: <?php echo $cat_color; ?>"><?php echo $term->name; ?></h4></a>
		</div>
		<div class="post-imagen-container">
			<img src="<?php echo $featured_img_url ?>" alt="<?php echo $alt ?>">
		</div>
	</div><!-- post-imagen -->
	<div class="post-content">
		<div class="post-author" >
			<a style="background-color: <?php echo $cat_color; ?>" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )) ?>">
			<?php echo get_avatar( get_the_author_meta('ID'), 26 ); ?>
			<span><?php echo get_the_author(); ?></span>
			</a>
		</div><!-- post-author -->
		<div class="post-meta">
			<?php $default_local_date = ucwords(utf8_encode(get_the_time('l d \d\e F \d\e Y | H:i'))); 
			$date_connectors_capital = array('De', 'Del');
			$date_connectors_lower = array('de', 'del');
			$local_date = str_replace($date_connectors_capital, $date_connectors_lower, $default_local_date);
			?>
			<span class="post-time"><?php echo $local_date; ?></span>
			<span class="time-ago"><?php echo time_ago() ?></span>
		</div><!-- post-meta -->


		<div class="post-title">

			<h1><?php the_title(); ?></h1>

			<?php if(has_excerpt()){ ?>
			<div class="resumen">
				<?php echo get_the_excerpt(); ?>
			</div><!-- resumen -->
			<?php } ?>

			<?php get_template_part('template-parts/comments/comments', 'sharer') ?>

		</div><!-- post-title -->

	<?php the_content(); ?>
	</div><!-- post content -->

	<div class="widget ad-lateral-sidebar onlymobile">
		<!-- /21749555895/Nota-Lateral-330x350 -->
		<div id="div-gpt-ad-1539356874237-0" data-google-query-id="CODs4sS_7OQCFZGBgwgdbkcGVA">
			
		<div id="google_ads_iframe_/21749555895/Nota-Lateral-330x350_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/21749555895/Nota-Lateral-330x350_0" title="3rd party ad content" name="google_ads_iframe_/21749555895/Nota-Lateral-330x350_0" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="3" data-load-complete="true"></iframe></div></div>
		<!-- /21749555895/Nota-Lateral-330x350-2 -->
		<div id="div-gpt-ad-1559749382407-0" data-google-query-id="CPjs4sS_7OQCFZGBgwgdbkcGVA">
			
		<div id="google_ads_iframe_/21749555895/Nota-Lateral-330x350-2_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/21749555895/Nota-Lateral-330x350-2_0" title="3rd party ad content" name="google_ads_iframe_/21749555895/Nota-Lateral-330x350-2_0" width="300" height="300" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="r" data-load-complete="true"></iframe></div></div>
		<!-- /21749555895/Nota-Lateral-300x600 -->
		<div id="div-gpt-ad-1539356910114-0" data-google-query-id="COHs4sS_7OQCFZGBgwgdbkcGVA">
			
		<div id="google_ads_iframe_/21749555895/Nota-Lateral-300x600_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/21749555895/Nota-Lateral-300x600_0" title="3rd party ad content" name="google_ads_iframe_/21749555895/Nota-Lateral-300x600_0" width="300" height="600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="4" data-load-complete="true"></iframe></div></div>
	</div>

</article><!-- #post-${ID} -->

<?php 

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
	comments_template();
}

?>