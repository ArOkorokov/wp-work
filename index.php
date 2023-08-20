<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bakery
 */

get_header();
?>

<main class="page">
	<?
		get_template_part('temp-part/main_block');
	?>

	<?
		get_template_part('temp-part/bakerySlider_template');
	?>

	<?
		get_template_part('temp-part/gallery_template');
	?>

	<div class="work">
	<?   
		get_template_part('temp-part/bakery_work');
	?>
	</div>

	<div class="team">
		<div class="team-container">
			<? get_template_part('temp-part/team_content'); ?>
		</div>
	</div>

	<div class="desserts">
		<?
			get_template_part('temp-part/bakery_desserts');
		?>
	</div>

	</main>

<?php
get_footer();
