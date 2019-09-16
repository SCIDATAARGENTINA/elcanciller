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

      <?php while ($trending_post->have_posts()) : $trending_post->the_post() ?>

      <?php get_template_part('template-parts/home/trending-front', 'content') ?>

      <?php endwhile ?>

   <?php endif ?>
</div>
<div class="ad-long">
   <img src="http://142.93.24.13/wp-content/uploads/2019/09/caba.png">
   
   <!-- /21749555895/Home-Superior-970x90 -->
   <div id='div-gpt-ad-1539356941944-0' style='height:90px; width:728px;margin: 0 auto;    margin-bottom: 2%;' >
      <script>
         googletag.cmd.push(function() { googletag.display('div-gpt-ad-1539356941944-0'); });
      </script>
   </div>

   <!-- /21749555895/Home-Superior-330x350 -->
   <div id='div-gpt-ad-1539356967377-0' style='height:350px; width:330px;margin: 0 auto;' >
      <script>
         googletag.cmd.push(function() { googletag.display('div-gpt-ad-1539356967377-0'); });
      </script>
   </div>

   <!-- /21749555895/Home-Inferior-970x90 -->
   <div id='div-gpt-ad-1539357298531-0' style='height:90px; width:970px;margin: 0 auto;' >
      <script>
         googletag.cmd.push(function() { googletag.display('div-gpt-ad-1539357298531-0'); });
      </script>
   </div>

   <!-- /21749555895/Home-Inferior-330x350 -->
   <div id='div-gpt-ad-1539357335280-0' style='height:350px; width:330px;margin: 0 auto;    margin-bottom: 2%;' >
      <script>
         googletag.cmd.push(function() { googletag.display('div-gpt-ad-1539357335280-0'); });
      </script>
   </div>
</div>