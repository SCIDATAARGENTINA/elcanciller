<?php
/**
 * Template part for displaying CANCILLER SECCION VIDEOS
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
?>

<div class="live-section container">
<?php // Setup arguments.
    $args = array(
      'post_type' => 'live',
      'posts_per_page' => 1,
  );
  
  $livesection_query = new WP_Query( $args ); 

  if($livesection_query->have_posts()){
    while($livesection_query->have_posts()){
      $livesection_query->the_post();

       if(get_field('habilitado') != 'no'){ ?>
        <article id="live-<?php the_ID(); ?>" style="max-width: 100%;background-color: #000;">
        <p style="background-color: #000;padding: 2% 0% 2% 0%;border-bottom: 4px solid #e7d12d;"><?php the_field('codigo_embebido'); ?> </p>
        </article><!-- #post-${ID} -->
        <?php }

    }
  }
?>
</div><!-- end opinion-section container -->