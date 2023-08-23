<?

/*
Template Name: Main page
Template Post Type: page
*/

?>

<? get_header();?>

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


<?get_footer();?>