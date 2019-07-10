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
<div class="comentarios-noshare">
   <?php
   $comments = get_comments(
      array(
         'post_id' => $post->ID,
         'number' => 5,
      )
   );
   ?>
   <div class="comment-icon">
      <i class="far fa-comment-dots"></i>
   </div>
   <div class="comment-container">
      <div class="comentarios">

         <?php foreach ($comments as $comment) : ?>

            <div class="comentario">
               <span class="comment-author">
                  <?php echo '@' . $comment->comment_author ?>
               </span>
               <span class="comment-text">
                  <?php echo substrwords($comment->comment_content , 30); ?>
               </span>
            </div>

         <?php endforeach; ?>
      </div><!-- comentarios -->
   </div><!-- comment-container -->
</div><!-- comentarios-nosharer -->