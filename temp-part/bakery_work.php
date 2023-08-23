<?
    /***
     * 
     * @package bakery
     */
?>




<picture>
	<source srcset="<?echo get_template_directory_uri() . '/assets/img/work-bcg.webp'?>" type="image/webp">
	<img src="<?echo get_template_directory_uri() . '/assets/img/work-bcg.png'?>" alt="image" class="work-bcg-img">
</picture>

<div class="work-container">

<?php if ( get_field('work_title') ) { ?>
	<h2 class="work-title"><?the_field('work_title');?></h2>
<?php } ?>
	<div class="work-text-left">

	<?php if ( get_field('paragraph_1') ) { ?>
		<span class="work-text">
			123
			<?the_field('paragraph_1');?>
		</span>
	<?php } ?>

	<?php if ( get_field('paragraph_2') ) { ?>
		<span class="work-text">
			<?the_field('paragraph_2');?>
		</span>
	<?php } ?>

	<?php if ( get_field('paragraph_3') ) { ?>
		<span class="work-text">
			<?the_field('paragraph_3');?>
		</span>
	<?php } ?>

	<?php if ( get_field('paragraph_4') ) { ?>
		<span class="work-text">
			<?the_field('paragraph_4');?>
		</span>
	<?php } ?>

	<?php if ( get_field('paragraph_5') ) { ?>
		<span class="work-text">
			<?the_field('paragraph_5');?>
		</span>
	<?php } ?>
	</div>
	
	<div class="work-text-right">
	<?php if ( get_field('paragraph_5') ) { ?>
		<span class="work-text2">
			<?the_field('paragraph_6');?>
		</span>
	<?php } ?>

	<?php if ( get_field('paragraph_5') ) { ?>
		<span class="work-text2">
			<?the_field('paragraph_7');?>
		</span>
	<?php } ?>

	<?php if ( get_field('paragraph_8') ) { ?>
		<span class="work-text2">
			<?the_field('paragraph_8');?>
		</span>
	<?php } ?>
	</div>
</div>
