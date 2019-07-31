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

<article id="post-<?php the_ID(); ?>" class="post-rendered">
	<div class="rendered-img" style="background-image: url('${featuredImage}')">
		<div class="hovered">
			<div class="action-links">
				<i class="fab fa-twitter" data-text="${post.title}" data-link="${post.link}"></i>
				<i class="fab fa-facebook-f" data-title="${post.title}" data-img="${featuredImage}" data-text="${post.excerpt}" data-link="${post.link}"></i>
				<a href="${post.link}"><i class="fas fa-sign-out-alt"></i></a>
				<i class="fas fa-heart like ${liked}" data-id="${post.id}" data-count="${likes}"></i>
			</div><!-- action-links -->
			<div class="post-data">
				<div class="post-title">
					<a href="${post.link}"><h3>${post.title}</h3></a>
					<span class="time-ago">${postDate}</span>
				</div>
			</div><!-- post-data -->
			<div class="post-category">
				<a href="${postCategoryLink}"><h4>${postCategory}</h4></a>
			</div>
		</div><!-- hovered -->
		<div class="render-author" style="background-color: ${postCategoryColor}">
			<span>Por: ${post.author.name}</span>
		</div><!-- render author -->
	</div><!-- rendered-img -->
	<?php get_template_part('template-parts/comments/comments', 'nosharer') ?>
</article><!-- #post-${ID} -->
