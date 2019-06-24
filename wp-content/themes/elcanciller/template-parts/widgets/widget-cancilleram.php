<?php
/**
 * Template part for displaying CANCILLER AM Widget
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<div class="cancilleram container">
     <?php
   $args = array(
      'post_type' => 'cancilleram',
      'posts_per_page' => 10,
      'orderby' => 'date',
      'order' => 'ASC',
   );

   $trending_post = new WP_Query($args);
   ?>

   <?php if ($trending_post->have_posts()) : ?>

      <?php while ($trending_post->have_posts()) : $trending_post->the_post() ?>

        <?php
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        $get_author_id = get_the_author_meta('ID');
        $get_author_name = get_the_author_meta('display_name');
        $get_author_avatar = get_avatar_url($get_author_id, array('size' => 75));
        ?>

        <div class="owl-item">
            <div class="carr-nav"></div>
            <div class="data-container">
                <img src="<?php echo $featured_img_url ?> " alt="<?php echo $alt ?>">
                <h3><?php echo get_the_content(); ?></h3>
            </div>
            <div class="author-container">
                <img src="<?php echo $get_author_avatar ?>" alt="<?php echo $get_author_name ?>">
                <span><?php echo $get_author_name ?></span>
            </div>
        </div><!-- owl-item -->

        <?php

        ?>
         
      <?php endwhile ?>

   <?php endif ?>
</div>