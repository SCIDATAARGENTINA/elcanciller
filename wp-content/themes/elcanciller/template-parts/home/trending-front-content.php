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
        <span><img src="<?php bloginfo('url') ?>/wp-content/uploads/2019/07/fire-marron.svg" alt="El Canciller - Noticia destacada"></span>
    </div><!-- category -->
    <div class="titulo">
        <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
    </div><!-- titulo -->
</div><!-- titular -->


<div class="entry">
<div class="entry-img">
    <div class="user-actions">
        <button class="shuffle">
            <i aria-hidden="true" class="fa fa-random" style="color: #b29f93;"></i>
        </button>
    </div>
    <div class="post-author">
        <a style="background-color: #e7d117" href="http://142.93.24.13/author/diegogenoud/">
        <img src="http://142.93.24.13/wp-content/uploads/2019/09/Diego-Genoud-Autor.png" width="26" height="26" alt="Diego Genoud" class="avatar avatar-26 wp-user-avatar wp-user-avatar-26 alignnone photo">			<span>Diego Genoud</span>
        </a>
    </div>
    <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url ?>" alt="<?php echo $alt ?>"></a>
</div>
<?php get_template_part('template-parts/comments/comments', 'sharer') ?>
</div>