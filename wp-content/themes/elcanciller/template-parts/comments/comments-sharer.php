<?php
/**
 * Template part for displaying comments with share links
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<?php 
   $comments = get_comments(
      array(
         'post_id' => $post->ID,
         'number' => 5,                  
      ));
   echo $comments;
?>