<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    //wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
//
// Your code goes below
//

function custom_scripts() {
   wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/slick/slick.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('mf-js', get_stylesheet_directory_uri() . '/js/magnific/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'skycons-js', get_stylesheet_directory_uri() . '/js/skycons.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script('comments-js', get_stylesheet_directory_uri() . '/template-parts/comments/comments.js', array('jquery'), '1.0.0', true);
  wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/slick/slick.css' );
  wp_enqueue_style( 'mf-css', get_stylesheet_directory_uri() . '/js/magnific/magnific-popup.css' );
  //wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/slick/slick-theme.css' );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

add_action( 'widgets_init', 'sidebar_register' );
function sidebar_register() {
  $args = array(
    'name'          => 'Sidebar Single Post',
    'id'            => 'sidebar-single',
    'description'   => 'Este sidebar se muestra en la parte lateral de las noticias unicas.',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>'
  );

  register_sidebar( $args );

}


// Register Custom Post Type
function custom_post_type_cancilleram()
{

  $labels = array(
    'name'                  => _x('El Canciller AM', 'Post Type General Name', 'elcanciller'),
    'singular_name'         => _x('Canciller AM', 'Post Type Singular Name', 'elcanciller'),
    'menu_name'             => __('El Canciller AM', 'elcanciller'),
    'name_admin_bar'        => __('Canciller AM', 'elcanciller'),
    'archives'              => __('Archivo', 'elcanciller'),
    'attributes'            => __('Atributos', 'elcanciller'),
    'parent_item_colon'     => __('Padre:', 'elcanciller'),
    'all_items'             => __('Todos los items', 'elcanciller'),
    'add_new_item'          => __('Agregar nuevo', 'elcanciller'),
    'add_new'               => __('Agregar nuevo', 'elcanciller'),
    'new_item'              => __('Nuevo', 'elcanciller'),
    'edit_item'             => __('Editar', 'elcanciller'),
    'update_item'           => __('Actualizar', 'elcanciller'),
    'view_item'             => __('Ver', 'elcanciller'),
    'view_items'            => __('Ver', 'elcanciller'),
    'search_items'          => __('Buscar', 'elcanciller'),
    'not_found'             => __('No encontrado', 'elcanciller'),
    'not_found_in_trash'    => __('No encontrado en la papelera', 'elcanciller'),
    'featured_image'        => __('Imagen destacada', 'elcanciller'),
    'set_featured_image'    => __('Agregar imagen destacada', 'elcanciller'),
    'remove_featured_image' => __('Borrar imagen destacada', 'elcanciller'),
    'use_featured_image'    => __('Usar como imagen destacada', 'elcanciller'),
    'insert_into_item'      => __('Insertar', 'elcanciller'),
    'uploaded_to_this_item' => __('Cargado', 'elcanciller'),
    'items_list'            => __('Listado', 'elcanciller'),
    'items_list_navigation' => __('Navegacion del listado', 'elcanciller'),
    'filter_items_list'     => __('Filtrar listado', 'elcanciller'),
  );
  $args = array(
    'label'                 => __('El Canciller AM', 'elcanciller'),
    'description'           => __('Modulo de administración de El Canciller AM', 'elcanciller'),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'author', 'thumbnail'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_icon'             => 'dashicons-welcome-widgets-menus',
    'menu_position'         => 5,
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => false,
    'show_in_rest'          => true,
    'rest_base'             => 'cancilleram',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'capability_type'       => 'page',
  );
  register_post_type('cancilleram', $args);
}
add_action('init', 'custom_post_type_cancilleram', 0);

function custom_post_type_videos()
{

  $labels = array(
    'name'                  => _x('Videos', 'Post Type General Name', 'elcanciller'),
    'singular_name'         => _x('Video', 'Post Type Singular Name', 'elcanciller'),
    'menu_name'             => __('Videos', 'elcanciller'),
    'name_admin_bar'        => __('Video', 'elcanciller'),
    'archives'              => __('Archivo', 'elcanciller'),
    'attributes'            => __('Atributos', 'elcanciller'),
    'parent_item_colon'     => __('Padre:', 'elcanciller'),
    'all_items'             => __('Todos los items', 'elcanciller'),
    'add_new_item'          => __('Agregar nuevo', 'elcanciller'),
    'add_new'               => __('Agregar nuevo', 'elcanciller'),
    'new_item'              => __('Nuevo', 'elcanciller'),
    'edit_item'             => __('Editar', 'elcanciller'),
    'update_item'           => __('Actualizar', 'elcanciller'),
    'view_item'             => __('Ver', 'elcanciller'),
    'view_items'            => __('Ver', 'elcanciller'),
    'search_items'          => __('Buscar', 'elcanciller'),
    'not_found'             => __('No encontrado', 'elcanciller'),
    'not_found_in_trash'    => __('No encontrado en la papelera', 'elcanciller'),
    'featured_image'        => __('Imagen destacada', 'elcanciller'),
    'set_featured_image'    => __('Agregar imagen destacada', 'elcanciller'),
    'remove_featured_image' => __('Borrar imagen destacada', 'elcanciller'),
    'use_featured_image'    => __('Usar como imagen destacada', 'elcanciller'),
    'insert_into_item'      => __('Insertar', 'elcanciller'),
    'uploaded_to_this_item' => __('Cargado', 'elcanciller'),
    'items_list'            => __('Listado', 'elcanciller'),
    'items_list_navigation' => __('Navegacion del listado', 'elcanciller'),
    'filter_items_list'     => __('Filtrar listado', 'elcanciller'),
  );
  $args = array(
    'label'                 => __('Videos', 'elcanciller'),
    'description'           => __('Modulo de administración de Videos', 'elcanciller'),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'thumbnail'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_icon'             => 'dashicons-video-alt3',
    'menu_position'         => 6,
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => false,
    'show_in_rest'          => true,
    'rest_base'             => 'video',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'capability_type'       => 'page',
  );
  register_post_type('video', $args);
}
add_action('init', 'custom_post_type_videos', 0);

function custom_post_type_opinion()
{

  $labels = array(
    'name'                  => _x('Opiniones', 'Post Type General Name', 'elcanciller'),
    'singular_name'         => _x('Opinión', 'Post Type Singular Name', 'elcanciller'),
    'menu_name'             => __('Opinión', 'elcanciller'),
    'name_admin_bar'        => __('Opinión', 'elcanciller'),
    'archives'              => __('Archivo', 'elcanciller'),
    'attributes'            => __('Atributos', 'elcanciller'),
    'parent_item_colon'     => __('Padre:', 'elcanciller'),
    'all_items'             => __('Todos los items', 'elcanciller'),
    'add_new_item'          => __('Agregar nuevo', 'elcanciller'),
    'add_new'               => __('Agregar nuevo', 'elcanciller'),
    'new_item'              => __('Nuevo', 'elcanciller'),
    'edit_item'             => __('Editar', 'elcanciller'),
    'update_item'           => __('Actualizar', 'elcanciller'),
    'view_item'             => __('Ver', 'elcanciller'),
    'view_items'            => __('Ver', 'elcanciller'),
    'search_items'          => __('Buscar', 'elcanciller'),
    'not_found'             => __('No encontrado', 'elcanciller'),
    'not_found_in_trash'    => __('No encontrado en la papelera', 'elcanciller'),
    'featured_image'        => __('Imagen destacada', 'elcanciller'),
    'set_featured_image'    => __('Agregar imagen destacada', 'elcanciller'),
    'remove_featured_image' => __('Borrar imagen destacada', 'elcanciller'),
    'use_featured_image'    => __('Usar como imagen destacada', 'elcanciller'),
    'insert_into_item'      => __('Insertar', 'elcanciller'),
    'uploaded_to_this_item' => __('Cargado', 'elcanciller'),
    'items_list'            => __('Listado', 'elcanciller'),
    'items_list_navigation' => __('Navegacion del listado', 'elcanciller'),
    'filter_items_list'     => __('Filtrar listado', 'elcanciller'),
  );
  $args = array(
    'label'                 => __('Opinión', 'elcanciller'),
    'description'           => __('Modulo de administración de Opinión', 'elcanciller'),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
    'taxonomies'            => array('category', 'post_tag'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 6,
    'menu_icon'             => 'dashicons-testimonial',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'show_in_rest'          => true,
    'rest_base'             => 'opinion',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'capability_type'       => 'post',
  );
  register_post_type('opinion', $args);
}
add_action('init', 'custom_post_type_opinion', 0);

function custom_post_type_placa()
{

  $labels = array(
    'name'                  => _x('Placas', 'Post Type General Name', 'elcanciller'),
    'singular_name'         => _x('Placa', 'Post Type Singular Name', 'elcanciller'),
    'menu_name'             => __('Placa', 'elcanciller'),
    'name_admin_bar'        => __('Placas', 'elcanciller'),
    'archives'              => __('Archivo', 'elcanciller'),
    'attributes'            => __('Atributos', 'elcanciller'),
    'parent_item_colon'     => __('Padre:', 'elcanciller'),
    'all_items'             => __('Todos los items', 'elcanciller'),
    'add_new_item'          => __('Agregar nuevo', 'elcanciller'),
    'add_new'               => __('Agregar nuevo', 'elcanciller'),
    'new_item'              => __('Nuevo', 'elcanciller'),
    'edit_item'             => __('Editar', 'elcanciller'),
    'update_item'           => __('Actualizar', 'elcanciller'),
    'view_item'             => __('Ver', 'elcanciller'),
    'view_items'            => __('Ver', 'elcanciller'),
    'search_items'          => __('Buscar', 'elcanciller'),
    'not_found'             => __('No encontrado', 'elcanciller'),
    'not_found_in_trash'    => __('No encontrado en la papelera', 'elcanciller'),
    'featured_image'        => __('Imagen destacada', 'elcanciller'),
    'set_featured_image'    => __('Agregar imagen destacada', 'elcanciller'),
    'remove_featured_image' => __('Borrar imagen destacada', 'elcanciller'),
    'use_featured_image'    => __('Usar como imagen destacada', 'elcanciller'),
    'insert_into_item'      => __('Insertar', 'elcanciller'),
    'uploaded_to_this_item' => __('Cargado', 'elcanciller'),
    'items_list'            => __('Listado', 'elcanciller'),
    'items_list_navigation' => __('Navegacion del listado', 'elcanciller'),
    'filter_items_list'     => __('Filtrar listado', 'elcanciller'),
  );
  $args = array(
    'label'                 => __('Placa', 'elcanciller'),
    'description'           => __('Modulo de administración de Placas', 'elcanciller'),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'author', 'thumbnail'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 6,
    'menu_icon'             => 'dashicons-align-center',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'show_in_rest'          => true,
    'rest_base'             => 'placa',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'capability_type'       => 'post',
  );
  register_post_type('placa', $args);
}
add_action('init', 'custom_post_type_placa', 0);

//Crear taxonomia personalizada para videos.
add_action( 'init', 'cat_videos_custom_taxonomy', 0 );
 
//Crear taxonomia personalizada para videos.
function cat_videos_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Categorias', 'taxonomy general name' ),
    'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
    'search_items' =>  __( 'Buscar categorias' ),
    'all_items' => __( 'Todas las categorias' ),
    'parent_item' => __( 'Categoria padre' ),
    'parent_item_colon' => __( 'Categoria padre:' ),
    'edit_item' => __( 'Editar categoria' ), 
    'update_item' => __( 'Actualizar categoria' ),
    'add_new_item' => __( 'Agregar nueva categoria' ),
    'new_item_name' => __( 'Nombre de nueva categoria' ),
    'menu_name' => __( 'Categorias' ),
  ); 	
 
  register_taxonomy('categoria_videos',array('video'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categoria_videos' ),
  ));
}


function substrwords($text, $maxchar, $end = '...'){

  if (strlen($text) > $maxchar || $text == '') {
    $words = preg_split('/\s/', $text);
    $output = '';
    $i      = 0;
    while (1) {
      $length = strlen($output) + strlen($words[$i]);
      if ($length > $maxchar) {
        break;
      } else {
        $output .= " " . $words[$i];
        ++$i;
      }
    }
    $output .= $end;
  } else {
    $output = $text;
  }
  return $output;
}

if ( ! function_exists( 't5_comment_mod_links' ) )
{
    add_filter( 'edit_comment_link', 't5_comment_mod_links', 10, 2 );

    /**
     * Adds Spam and Delete links to the Sdit link.
     *
     * @wp-hook edit_comment_link
     * @param   string  $link Edit link markup
     * @param   int $id Comment ID
     * @return  string
     */
    function t5_comment_mod_links( $link, $id )
    {
        $template = ' <a class="comment-edit-link" href="%1$s%2$s">%3$s</a>';
        $admin_url = admin_url( "comment.php?c=$id&action=" );

        // Mark as Spam.
        $link .= sprintf( $template, $admin_url, 'cdc&dt=spam', __( 'spam' ) );
        // Delete.
        $link .= sprintf( $template, $admin_url, 'cdc', __( 'borrar' ) );

        // Approve or unapprove.
        $comment = get_comment( $id );

        if ( '0' === $comment->comment_approved )
        {
            $link .= sprintf( $template, $admin_url, 'approvecomment', __( 'aprobar' ) );
        }

        return $link;
    }
}


class Canciller_Walker_Comment extends Walker_Comment {

	/**
	 * Outputs a comment in the HTML5 format.
	 *
	 * @see wp_list_comments()
	 *
	 * @param WP_Comment $comment Comment to display.
	 * @param int        $depth   Depth of the current comment.
	 * @param array      $args    An array of arguments.
	 */
	protected function html5_comment( $comment, $depth, $args ) {

		$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

		?>
    <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?>>
      <div class="comment-actions">
        <?php
          $edit_comment_icon = twentynineteen_get_icon_svg( 'edit', 16 );
          edit_comment_link( __( $edit_comment_icon , 'twentynineteen' ), '<span class="edit-link">' , '</span>' );
        ?>
        <?php if ( '0' == $comment->comment_approved ) : ?>
        <?php wp_set_comment_status(comment_ID(), 'approve' ); ?>
        <?php endif; ?>
      </div><!-- .comment-actions -->
      <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
        <div class="comment-author">
          <?php
          $comment_author_url = get_comment_author_url( $comment );
          $comment_author     = get_comment_author( $comment );
          $avatar             = get_avatar( $comment, $args['avatar_size'] );
          ?>
          <span class="reply-author">@<?php echo $comment_author ?></span>
        </div><!-- .comment-author -->
        <div class="comment-content">
          <?php comment_text(); ?>
        </div><!-- .comment-content -->
        <?php
			comment_reply_link(
				array_merge(
					$args,
					array(
						'add_below' => 'div-comment',
						'depth'     => $depth,
            'max_depth' => $args['max_depth'],
            'reply_text' => '#responder',
						'before'    => '<div class="comment-reply">',
						'after'     => '</div>',
					)
				)
			);
			?>
			</article><!-- .comment-body -->
		<?php
	}
}


function time_ago() {
	return __( 'Hace' ).' '.human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) );
}
 

function get_tags_in_use($category_ID, $type = 'name'){
    // Set up the query for our posts
    $my_posts = new WP_Query(array(
      'cat' => $category_ID, // Your category id
      'posts_per_page' => -1 // All posts from that category
    ));

    // Initialize our tag arrays
    $tags_by_id = array();
    $tags_by_name = array();
    $tags_by_slug = array();

    // If there are posts in this category, loop through them
    if ($my_posts->have_posts()): while ($my_posts->have_posts()): $my_posts->the_post();

      // Get all tags of current post
      $post_tags = wp_get_post_tags($my_posts->post->ID);

      // Loop through each tag
      foreach ($post_tags as $tag):

        // Set up our tags by id, name, and/or slug
        $tag_id = $tag->term_id;
        $tag_name = $tag->name;
        $tag_slug = $tag->slug;

        // Push each tag into our main array if not already in it
        if (!in_array($tag_id, $tags_by_id))
          array_push($tags_by_id, $tag_id);

        if (!in_array($tag_name, $tags_by_name))
          array_push($tags_by_name, $tag_name);

        if (!in_array($tag_slug, $tags_by_slug))
          array_push($tags_by_slug, $tag_slug);

      endforeach;
    endwhile; endif;

    // Return value specified
    if ($type == 'id')
        return $tags_by_id;

    if ($type == 'name')
        return $tags_by_name;

    if ($type == 'slug')
        return $tags_by_slug;
}

function post_recomendado($atts){
  $a = shortcode_atts( array(
    'postid' => '0'
  ), $atts );
  $title = get_the_title($a['postid']);
  $link = get_the_permalink($a['postid']);
 

  return '<div class="post-recomendado">
    <div class="encabezado"><span>Te recomendamos leer</span></div>
    <div class="titulo">
      <img src="' . get_bloginfo('url') . '/wp-content/uploads/2019/07/fire-marron.svg" alt="">
      <a href="' . $link . '"><h3>' . $title . '</h3></a>
    </div>
  </div>';

}

add_shortcode( 'recomendado', 'post_recomendado' );

// AJAX LOAD MORE

function load_more_scripts() {
 
	global $wp_query; 
 
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');
 
	// register our main script but do not enqueue it yet
	wp_register_script( 'loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
 
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'loadmore', 'loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'loadmore' );
}
 
add_action( 'wp_enqueue_scripts', 'load_more_scripts' );


function loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();
 
			// look into your theme code how the posts are inserted, but you can use your own HTML of course
      // do you remember? - my example is adapted for Twenty Seventeen theme

      if(is_tax() == 1){
        get_template_part( 'template-parts/content/content' );

      }else{
        get_template_part( 'template-parts/content/content', 'search' );
      }
			// for the test purposes comment the line above and uncomment the below one
			// the_title();
 
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); // wp_ajax_nopriv_{action}