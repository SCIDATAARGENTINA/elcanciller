<?php
/**
 * Template part for displaying trending post in front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<div class="trending-post">
   <?php
   $args = array(
      'post_type' => 'post',
      'posts_per_page' => 1,
      'orderby' => 'date',
      'order' => 'DESC',
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

      <?php
      $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
      $thumbnail_id = get_post_thumbnail_id($post->ID);
      $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
      $categories = get_the_category();
      ?>


      <?php while ($trending_post->have_posts()) : $trending_post->the_post() ?>
         <div class="category">
            <h3 class="category-name"><?php echo $categories[0]->name; ?></h3>
            <span><i class="fas fa-bomb"></i></span>
         </div>
         <div class="entry">
            <h2><?php the_title(); ?></h2>
            <div class="entry-img">
               <img src="<?php echo $featured_img_url ?>" alt="<?php echo $alt ?>">
            </div>
         </div>
      <?php endwhile ?>

   <?php endif ?>
</div>