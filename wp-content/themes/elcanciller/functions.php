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
        <?php wp_set_comment_status( ); ?>
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
