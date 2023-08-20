<?
/**
 * 
 * 
 * @package bakery
 */


?>
<h3 class="team-title">our team</h3>
<div class="team__slider swiper">

	<div class="team__wrapper swiper-wrapper">
	<?
		
		$posts = get_posts([
			'post_type' => 'customposts',
			'post_per_page' => -1,
			'category' => '',
			'numberposts' => -1,
		]);
		foreach($posts as $post) {
			setup_postdata($post); ?>
		
			<div class="team__slide swiper-slide">
			<h3 class="team__slider-title"><?the_title();?></h3>
			<div class="team-swiper-img-wrapper">
				<picture>
					<a href="<?the_permalink();?>"><img src="<?echo get_the_post_thumbnail_url();?>" alt="photo" class="team-swiper-img"></a>
				</picture>
			</div>
			<span class="team-swiper-subtitle"><?the_title();?></span>
			<span class="team-swiper-text"><? the_excerpt();?></span>
			</div>
		<?}
		wp_reset_postdata(); 
	?>
		
</div>
<div class="team-slider-navigation-wrapper">
		<button type="button" class="swiper-button-prev arrow-left">
			<img src="<?echo get_template_directory_uri() . '/assets/img/arrows/arrow-left.svg'?>" alt="arrow">
		</button>
		<button type="button" class="swiper-button-next arrow-right">
			<img src="<?echo get_template_directory_uri() . '/assets/img/arrows/arrow-right.svg'?>" alt="arrow">
		</button>
</div>
