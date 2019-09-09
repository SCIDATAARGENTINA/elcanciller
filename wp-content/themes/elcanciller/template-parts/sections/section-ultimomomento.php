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

<div class="ultimomomento-section container">
<?php // Setup arguments.
    $args = array(
      'post_type' => 'ultimomomento',
      'posts_per_page' => 1,
  );
  
  $ultimomomentosection_query = new WP_Query( $args ); 

  if($ultimomomentosection_query->have_posts()){
    while($ultimomomentosection_query->have_posts()){
      $ultimomomentosection_query->the_post();

       if(get_field('habilitado') != 'no'){ ?>
        <!-- <div class="titular" style="background-color:#000;text-align:center;">
            <h2 style="color:#fff;margin-top: 0%;padding: 2% 0% 2% 0%;"></h2>
         </div>-->

         <div class="trending-post">
          <div class="titular">
              <div class="category">
                <a href="http://142.93.24.13/categoria/politica/"><h3 class="category-name">ULTIMO MOMENTO</h3></a>
                <span><img src="http://142.93.24.13/wp-content/uploads/2019/07/fire-marron.svg" alt=""></span>
              </div><!-- category -->
              <a href="http://142.93.24.13/2018/12/el-lider-antichavista-de-la-region-la-competencia-que-enfrenta-a-macri-contra-bolsonaro/"><h2><?php get_field('texto_embebido') ?></h2></a>
          </div>
        </div>

        <?php }

    }
  }
?>
</div><!-- end opinion-section container -->