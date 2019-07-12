<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>

</article><!-- #post-${ID} -->

<?php 

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
	comments_template();
}

?>