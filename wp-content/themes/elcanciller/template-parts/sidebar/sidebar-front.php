<?php
/**
 * Template part for displaying sidebar
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
  <a href="#"><i class="fab fa-facebook-square"></i></a>
  <a href="#"><i class="fab fa-twitter-square"></i></a>
  <a href="#"><i class="fab fa-vimeo-square"></i></a>
</div><!-- social-links -->
<div class="tiempo">
  <div class="canva-tiempo">
    <canvas id="icon1" width="60" height="60"></canvas>
  </div><!-- canvia-tiempo -->
  <div class="info-tiempo">
    <span class="fech"><?php echo date_i18n('D j M Y'); ?></span>
  </div><!-- info-tiempo -->
</div><!-- tiempo -->
