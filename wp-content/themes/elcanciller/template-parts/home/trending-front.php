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

<?php if($trending_post->have_posts()) : ?>

   <?php while($trending_post->have_posts()) : $trending_post->the_post() ?>
      <div class='title'>
         <?php the_title(); ?>
      </div>
   <?php endwhile ?>

<?php endif ?>
</div>