<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bakery
 */
?>

	<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><? the_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<div class="header__menu menu">
					<button type="button" class="menu__icon icon-menu"><span></span></button>
					<nav class="menu__body">
						<a href="<? echo home_url();?>" class="main-logo icon-logo">
							<?the_custom_logo()?>
						</a>
						<?
							wp_nav_menu( [
								'menu'  		  => 'header',
								'container'       => 'div',
								'menu_class'      => 'menu__list',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => new HeaderWalker,
							] );
						?>
					</nav>
				</div>
			</div>
		</header>