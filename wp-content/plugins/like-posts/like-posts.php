<?php
/**
 * Plugin Name: El Canciller - Like Posts
 * Plugin URI: https://scidata.com.ar
 * Description: Plugin que administra los likes de los posts en El Canciller.
 * Version: 1.0.0
 * Author: Ian Lucas Diaz
 * Author URI: https://scidata.com.ar
 * License: GPL2
 */

 add_action( 'wp_enqueue_scripts', 'rest_js_enqueue_scripts' );

 add_filter( 'acf/rest_api/key', function( $key, $request, $type ) {
     return 'acf_fields';
  }, 10, 3 );

 function rest_js_enqueue_scripts() {

   if(is_single()){
     wp_enqueue_script( 'like-post', plugins_url( '/likepost.js', __FILE__ ), array('jquery'), '1.0', true );
     wp_localize_script( 'like-post', 'content_data', array(
      'ajax_url' => admin_url( 'admin-ajax.php' )
    ));

   }

   wp_enqueue_script( 'cookie-js', plugins_url( '/js.cookie.js', __FILE__ ), '1.0', true );


 }

 add_action( 'wp_ajax_nopriv_ajax_call_count_likes', 'ajax_likes' );
 add_action( 'wp_ajax_ajax_call_count_likes', 'ajax_likes' );

 function ajax_likes() {

   $currentVal = $_POST['like_count'];
   $currentVal++;
   if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {

   update_field( 'likes', $currentVal, $_POST['post_id'] );

   }

 	die();
 }


?>
