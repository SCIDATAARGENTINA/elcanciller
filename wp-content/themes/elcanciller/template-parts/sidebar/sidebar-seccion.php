<?php
/**
 * Template part for displaying sidebar seccion
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<div class="stories">
  <img src="<?php echo get_stylesheet_directory_uri() ?>/icons/c-stories.svg" alt="Stories - El Canciller">
</div><!-- stories -->
<div class="social-links">
<a href="https://www.facebook.com/elcancillercom/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
  <a href="https://twitter.com/elcancillercom" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter-square"></i></a>
  <a href="https://www.instagram.com/elcancillerlive/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
  <a href="https://www.youtube.com/channel/UCd9aVDXf_SH8-TNHRWj0J0g" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
</div><!-- social-links -->
<div class="tiempo">
  <div class="canva-tiempo">
    <canvas id="icon1" width="60" height="60"></canvas>
  </div><!-- canvia-tiempo -->
  <div class="info-tiempo">
    <span class="fech"><?php echo date_i18n('D j M Y'); ?></span>
  </div><!-- info-tiempo -->
</div><!-- tiempo -->
<div class="widget">
  <?php get_template_part('template-parts/widgets/widget', 'cancilleram') ?>
</div>
<div class="widget" style="margin-top: 9% !important;">
<?php get_template_part('template-parts/widgets/widget', 'autores') ?>
</div>
<div class="widget">
  <?php get_template_part('template-parts/widgets/widget', 'instagram') ?>
</div>
<div class="widget">
  <?php get_template_part('template-parts/widgets/widget', 'twitter') ?>
</div>
<div class="widget widget-contador">
  <?php echo do_shortcode('[contador postid=48914]') ?>
</div>
<div class="widget">
  <a href="https://www.gba.gob.ar/seguridad?utm_source=medios&utm_medium=cpc&utm_campaign=seguridad"><img src="https://elcanciller.com/files/juego.gif"></a>
  <!-- /21749555895/Home-Lateral-SeccionEstaPasando-250x250 -->
  <div id='div-gpt-ad-1539357193770-0' style='height:250px; width:250px;margin:0 auto;margin-left: 0px;'>
    <script>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1539357193770-0'); });</script>
  </div>
</div>