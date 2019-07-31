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

<div class="trending-post">
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
         ?>

         <div class="titular">
            <div class="category">
               <a href="<?php echo $cat_link; ?>"><h3 class="category-name"><?php echo $categories[0]->name ?></h3></a>
               <span><img src="<?php bloginfo('url') ?>/wp-content/uploads/2019/07/fire-marron.svg" alt=""></span>
            </div><!-- category -->
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
         </div><!-- titulo -->
         

         <div class="entry">
            <div class="entry-img">
               <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url ?>" alt="<?php echo $alt ?>"></a>
            </div>
            <?php get_template_part('template-parts/comments/comments', 'sharer') ?>
         </div>
      <?php endwhile ?>

   <?php endif ?>
</div>