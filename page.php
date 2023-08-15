<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bakery
 */

get_header();
?>

<?
	$a = $wp_query->query_vars;
	 var_dump($a['pagename']);
	?>
	<hr>
	<hr>
	<hr>
	<hr>
	<hr>
	<?
		var_dump($a)
	?>

<?php

get_footer();
