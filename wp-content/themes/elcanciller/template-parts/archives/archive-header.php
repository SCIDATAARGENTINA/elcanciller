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
$term = get_queried_object();
?>

   <?php
   $args = array(
      'post_type' => 'post',
      'posts_per_page' => 1,
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'term_id',
            'terms'    => $term->term_id,
            ),
        ),
      'meta_query' => array(
         array(
            'key' => 'trending',
            'value' => 'si',
            'compare' => '='
         )
      )
   );
   $trending_post = new WP_Query($args);
   ?>

   <?php if ($trending_post->have_posts()) : ?>

      <?php while ($trending_post->have_posts()) : $trending_post->the_post() ?>

         <?php
         $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
         $thumbnail_id = get_post_thumbnail_id($post->ID);
         $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
         $categories = get_the_category($post->ID);
         $cat_link = get_term_link($categories[0]->term_id );
         $cat_color = get_field('color', $categories[0]->taxonomy . '_' . $categories[0]->term_id);
         ?>

         <header class="archive-header" style="background: <?php echo $cat_color ?>">
            <h1><?php echo $categories[0]->name ?></h1>
            <h2><?php the_title(); ?></h2>
         </header>
      <?php endwhile ?>

   <?php endif ?>
