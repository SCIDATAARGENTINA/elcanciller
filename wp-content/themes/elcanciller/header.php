<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Playfair+Display:400,400i,700,700i|Lato:300,400,400i,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<?php wp_head(); ?>
	<meta http-equiv="refresh" content="180">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="top-bar">
		<div class="container">

			<div class="logo">
				<a href="<?php echo bloginfo('url') ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/brand-logo-w.svg" height="15" alt="El Canciller"></a>
			</div><!-- end logo -->
			<div class="user-bar">
				<div class="trending-bar">
					<a href="#"><i class="fas fa-bomb"></i></a>
					<a href="#"><i class="fas fa-star"></i></a>
				</div><!-- trending-bar -->
				<div class="current-user-avatar">
					<?php

					if ( is_user_logged_in() ) {
						$current_user = wp_get_current_user();
						if ( ($current_user instanceof WP_User) ) {
								echo get_avatar( $current_user->ID, 26 );
						}
					}

					 ?>
				</div><!-- avatar -->
			</div><!-- user-bar -->
		</div><!-- container -->

	</div><!-- end top-bar -->

	<?php get_template_part('template-parts/header/search', 'bar') ?>

		<header id="masthead" >

			<div class="menu-bar container">
				<nav class="header-navigation" aria-label="<?php esc_attr_e( 'Primary', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_class'     => 'header-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			</div><!-- end menu-bar -->

		</header><!-- #masthead -->

	<div id="content" class="site-content">
