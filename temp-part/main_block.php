<?
/***
 * 
 * @package bakery
 */
 ?>
<?
$post_id = get_the_ID();
echo get_post_meta( get_the_ID(), 'meta_key', 1);


?>


<div class="page__container">
	<div class="page__body body__page">
		<div class="body__page_content">
			<h1 class="body__page_title"><?the_title();?></h1>
			<h2 class="body__page_subtitle"><?the_content();?></h2>
			<?php if ( get_field('main_button_text') ) { ?>
			<a href="#" data-popup="#popup" class="body__page_btn"><span class="page_btn-span"><?the_field('main_button_text');?></span></a>
			<?}?>
		</div>
		<div class="body__page_img-wrapper">
			<picture>
				<img src=<?echo get_the_post_thumbnail_url(); ?> alt="<?the_title();?>" class="body__page_img-wrapper-img">
			</picture>
		</div>
	</div>	
</div>