<?php
/**
 * Plugin Name: elCanciller APP
 * Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
 * Description: Integración de WebPack a web elCanciller
 * Version:     1.0.0
 * Author:      Scidata
 * Author URI:  https://scidata.com.ar
 * Text Domain: sci
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Enqueue frontend scripts.
 */
function frontend_scripts() {
	wp_enqueue_script(
	'wds-wwe-frontend-js',
	plugins_url( 'assets/js/frontend.js', __FILE__ ),
	[ 'jquery' ],
	'11272018'
	);
}
add_action( 'wp_enqueue_scripts', 'frontend_scripts' );
/**
 * Enqueue admin scripts.
 */
function admin_scripts() {
	wp_enqueue_script(
	'wds-wwe-admin-js',
	plugins_url( 'assets/js/admin.js', __FILE__ ),
	[ 'jquery' ],
	'11272018'
	);
}
add_action( 'admin_enqueue_scripts', 'admin_scripts' );


add_action( 'wp_enqueue_scripts', 'rest_js_enqueue_scripts' );

add_filter( 'acf/rest_api/key', function( $key, $request, $type ) {
    return 'acf_fields';
}, 10, 3 );

 function rest_js_enqueue_scripts() {

  wp_localize_script( 'wds-wwe-frontend-js', 'content_data', array('ajax_url' => admin_url( 'admin-ajax.php' )));

  wp_enqueue_script( 'cookie-js', plugins_url( '/js.cookie.js', __FILE__ ), '1.0', true );


 }

 add_action( 'wp_ajax_nopriv_ajax_call_count_likes', 'ajax_call_count_likes' );
 add_action( 'wp_ajax_ajax_call_count_likes', 'ajax_call_count_likes' );

 function ajax_call_count_likes() {

   $currentVal = $_POST['like_count'];
   $currentVal++;
   if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {

   update_field( 'likes', $currentVal, $_POST['post_id'] );

   }

 	die();
 }
