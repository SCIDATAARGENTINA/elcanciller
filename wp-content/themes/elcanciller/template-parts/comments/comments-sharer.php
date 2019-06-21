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
<div class="comentarios-sharer">
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
   <div class="share-container">
      <i class="fab fa-twitter"></i>
      <i class="fab fa-facebook-f"></i>
      <a href="<?php the_permalink(); ?>"><i class="fas fa-sign-in-alt"></i></a>
      <i class="fas fa-heart"></i>
   </div>

</div><!-- comentarios-sharer -->