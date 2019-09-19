<?php
/**
 * Template part for displaying sidebar front
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
    <?php get_template_part('template-parts/widgets/widget', 'tagposts') ?>
</div>
<div class="widget">
    <?php get_template_part('template-parts/widgets/widget', 'tagsrelated') ?>
</div>
<div class="widget widget-contador">
  <?php echo do_shortcode('[contador postid=48914]') ?>
</div>
<div class="widget" style="margin-top: 9% !important;">
<?php get_template_part('template-parts/widgets/widget', 'autores') ?>
</div>

<div class="widget ad-lateral-sidebar">
  <!-- /21749555895/Nota-Lateral-330x350 -->
  <div id='div-gpt-ad-1539356874237-0' style='height:350px; width:330px;'>
    <script>
      googletag.cmd.push(function() { googletag.display('div-gpt-ad-1539356874237-0'); });
    </script>
  </div>
  <!-- /21749555895/Nota-Lateral-330x350-2 -->
  <div id='div-gpt-ad-1559749382407-0'>
    <script>
      googletag.cmd.push(function() { googletag.display('div-gpt-ad-1559749382407-0'); });
    </script>
  </div>
  <!-- /21749555895/Nota-Lateral-300x600 -->
  <div id='div-gpt-ad-1539356910114-0' style='height:600px; width:300px;'>
    <script>
      googletag.cmd.push(function() { googletag.display('div-gpt-ad-1539356910114-0'); });
    </script>
  </div>
  <!-- nota-a-mano-330x350 -->
  <!-- <a href="https://www.gba.gob.ar/seguridad?utm_source=medios&utm_medium=cpc&utm_campaign=seguridad"><img src="https://elcanciller.com/files/juego.gif"></a>-->
</div>
