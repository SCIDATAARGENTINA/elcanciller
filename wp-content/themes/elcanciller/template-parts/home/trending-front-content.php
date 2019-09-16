<?php
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$thumbnail_id = get_post_thumbnail_id($post->ID);
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
$categories = get_the_category($post->ID);
$cat_link = get_term_link($categories[0]->term_id );
?>

<div class="titular">
<div class="category">
    <a href="<?php echo $cat_link; ?>"><h3 class="category-name"><?php echo $categories[0]->name ?></h3></a>
    <span><img src="<?php bloginfo('url') ?>/wp-content/uploads/2019/07/fire-marron.svg" alt=""></span>
</div><!-- category -->
<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
</div><!-- titulo -->


<div class="entry">
<div class="entry-img">
    <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url ?>" alt="<?php echo $alt ?>"></a>
</div>
<?php get_template_part('template-parts/comments/comments', 'sharer') ?>
</div>