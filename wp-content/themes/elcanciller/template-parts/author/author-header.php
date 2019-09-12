<?php
/**
 * Template part for displaying trending post in archive page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
$author = get_queried_object();
$author_id = $author->ID;
echo $author_id;
$thumbnail_id = get_field('imagen_portada','user_42');
$featured_img_url = get_the_post_thumbnail_url($thumbnail_id, 'full');
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
?>

   <header class="author-header">
      <img src="<?php echo $featured_img_url ?>" alt="<?php echo $alt?>">
   </header>
         
