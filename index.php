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

	<main id="primary" class="site-main">

	<main class="page">
			<div class="page__container">
				<div class="page__body body__page">
					<div class="body__page_content">
						<h1 class="body__page_title">"Where every slice is a piece of heaven."</h1>
						<h2 class="body__page_subtitle">Join us for a cozy and comfortable atmosphere, paired with the best baked goods in town at our bakery and cake cafe</h2>
						<a href="#" data-popup="#popup" class="body__page_btn"><span class="page_btn-span">Reservation</span></a>
					</div>
					<div class="body__page_img-wrapper">
						<picture><source srcset=<?echo get_template_directory_uri() . "/assets/img/main-img.webp" ?> type="image/webp"><img src=<?echo get_template_directory_uri() . "/assets/img/main-img.jpg" ?> alt="img" class="body__page_img-wrapper-img"></picture>
					</div>
				</div>
			</div>
			<section class="bakery-slider">
				<div class="bakery-slider__container">
					<div class="bakery-slider__body">

						<div class="bakery-slider__titles">
							<h2 class="bakery-slider__title">our confectionery</h2>
							<h3 class="bakery-slider__subtitle">Indulge in our sweet treats and let your taste buds be delighted by the perfect blend of flavors and textures. Our confectionery selection includes something for every palate, from classic favorites to new and innovative creations</h3>
						</div>

						<div class="bakery-slider__content-wrapper">

							<div class="bakery-slider__contents">
								<div class="bakery-slider__content-text">
									<span class="bakery-slider__content-text_text1">Welcome to our sweet laboratory, where we conduct delicious experiments every day. Our team of skilled pastry chefs and bakers is dedicated to bringing you the best possible experience, inspired by the Michelin standards and industry best practices.
									</span>

									<span class="bakery-slider__content-text_text2">So come and visit us at our place, where you can experience the magic of our experiments and taste the results of our dedication to excellence. </span>
								</div>
								<a href="#" class="bekery-slider__btn" data-popup="#popup"><span class="bakery-slider__btn_text">Reservation</span></a>
							</div>

							<div class="bakery-slider-slid">
								<div class="bakery-slider-slid__slider swiper">
									<div class="bakery-slider-slid__wrapper swiper-wrapper">
										<div class="bakery-slider-slid__slide swiper-slide">
											<picture>
												<source srcset=<? echo get_template_directory_uri() . "/assets/img/simg/layer_2.webp" ?> type="image/webp">
												<img src=<? echo get_template_directory_uri() ."/assets/img/simg/layer_2.png"?> alt="slide bakery-slider-img" class="bakery-slider__slider-img">
											</picture>
										</div>
										<div class="bakery-slider-slid__slide swiper-slide">
											<picture>
												<source srcset=<? echo get_template_directory_uri() . "/assets/img/simg/layer_3.webp" ?> type="image/webp"><img src=<? echo get_template_directory_uri() . "/assets/img/simg/layer_3.png" ?> alt="slide bakery-slider-img" class="bakery-slider__slider-img">
											</picture>
										</div>
										<div class="bakery-slider-slid__slide swiper-slide">
											<picture>
												<source srcset=<? echo get_template_directory_uri() . "/assets/img/simg/layer_4.webp" ?> type="image/webp"><img src=<? echo get_template_directory_uri() . "/assets/img/simg/layer_4.png" ?> alt="slide bakery-slider-img" class="bakery-slider__slider-img">
											</picture>
										</div>
										<div class="bakery-slider-slid__slide swiper-slide"><picture><source srcset=<? echo get_template_directory_uri() . "/assets/img/simg/layer_4.webp" ?> type="image/webp"><img src=<? echo get_template_directory_uri() . "/assets/img/simg/layer_4.png" ?> alt="slide bakery-slider-img" class="bakery-slider__slider-img"></picture></div>
										<div class="bakery-slider-slid__slide swiper-slide"><picture><source srcset=<? echo get_template_directory_uri() . "/assets/img/simg/layer_4.webp" ?> type="image/webp"><img src=<? echo get_template_directory_uri() . "/assets/img/simg/layer_4.png" ?> alt="slide bakery-slider-img" class="bakery-slider__slider-img"></picture></div>
									</div>
									<div class="bakery-slider__navigation">
										<button type="button" class="swiper-button-prev slider-bakery-arrows-left">
										</button>
										<button type="button" class="swiper-button-next slider-bakery-arrows-right">
										</button>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<div class="bakery">
				<div class="bakery-titles">
					<h2 class="bakery-title">our bakery</h2>
					<h3 class="bakery-subtitle">Where every bite is a delight - welcome to our bakery store!</h3>
				</div>
				<div class="bakery-gallery">
					
					<a href="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_1.jpg'?>" class="bakery-gallery-link">
						<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_1.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_1.jpg'?>" alt="img" class="bakery-gallery-img"></picture>
					</a>
					<a href="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_2.jpg" class="bakery-gallery-link'?>">
						<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_2.webp'?>" type="image/webp"><img src="img/gallery-img/layout_2.jpg" alt="img" class="bakery-gallery-img"></picture>
					</a>
					<a href="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_3.jpg'?>" class="bakery-gallery-link">
						<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_3.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_3.jpg'?>" alt="img" class="bakery-gallery-img"></picture>
					</a>
					<a href="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_4.jpg'?>" class="bakery-gallery-link">
						<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_4.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_4.jpg'?>" alt="img" class="bakery-gallery-img"></picture>
					</a>
					<a href="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_5.jpg'?>" class="bakery-gallery-link">
						<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_5.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_5.jpg'?>" alt="img" class="bakery-gallery-img"></picture>
					</a>
					<a href="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_6.jpg'?>" class="bakery-gallery-link">
						<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_6.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_6.jpg'?>" alt="img" class="bakery-gallery-img"></picture>
					</a>
					<a href="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_7.jpg'?>" class="bakery-gallery-link">
						<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_7.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_7.jpg'?>" alt="img" class="bakery-gallery-img"></picture>
					</a>
					<a href="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_8.jpg'?>" class="bakery-gallery-link">
						<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_8.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_8.jpg'?>" alt="img" class="bakery-gallery-img"></picture>
					</a>
					<a href="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_9.jpg'?>" class="bakery-gallery-link">
						<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_9.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/gallery-img/layout_9.jpg'?>" alt="img" class="bakery-gallery-img"></picture>
					</a>
				</div>
				<div class="bakery-text">
					Our laboratory is a place where we can be creative, have fun, and bring joy to our customers through our delicious treats. We are passionate about what we do, and we are always striving to improve our skills and techniques to deliver the best possible experience to our customers.
				</div>
			</div>
			<div class="work">
				<picture>
					<source srcset="<?echo get_template_directory_uri() . '/assets/img/work-bcg.webp'?>" type="image/webp">
					<img src="<?echo get_template_directory_uri() . '/assets/img/work-bcg.png'?>" alt="image" class="work-bcg-img">
				</picture>

				<div class="work-container">
					<h2 class="work-title">how we works</h2>
					<div class="work-text-left">
						<span class="work-text">
							We believe that a cozy and funny place is essential to creating a memorable experience for our guests. That's why we've designed our space with warm lighting, comfortable seating, and fun decor that reflects our personality and sense of humor.
						</span>
						<span class="work-text">
							When you visit us, you can expect to be greeted with a smile and treated like family. We take pride in our place, and we are constantly striving to create an atmosphere that is both inviting and enjoyable.
						</span>
						<span class="work-text">
							Our menu features a wide variety of dishes and drinks, all made with the freshest and highest quality ingredients. We are constantly updating our offerings to ensure that there is always something new and exciting for you to try.
						</span>
						<span class="work-text">
							Whether you're looking for a quick cup of coffee or a relaxing meal with friends and family, we have something for everyone. And with our commitment to high-end service, you can always expect to be treated with the utmost respect and care.
						</span>
						<span class="work-text">
							So why not come and visit us today? We would love to welcome you to us and show you what makes us different.
						</span>
					</div>
					<div class="work-text-right">
						<span class="work-text2">
							Our catering service is perfect for any occasion, whether you're hosting a business meeting or a family gathering. We offer a variety of options to suit your needs, from light snacks and refreshments to full meals and buffets. Our team will work with you to create a custom menu that perfectly matches your tastes and preferences.
						</span>
						<span class="work-text2">
							And if you're looking to invite your friends and family to your birthday party, why not let us handle the details? We can create a custom invitation that perfectly matches your theme and style, and we can even provide decorations and party favors to make your celebration extra special.
						</span>
						<span class="work-text2">
							So why not get in touch with us to see how we can help you? We would be honored to be a part of your special occasion and to help you create memories that will last a lifetime.
						</span>
					</div>
				</div>
			</div>
			<div class="team">
				<div class="team-container">
					<h3 class="team-title">our team</h3>
					<div class="team__slider swiper">
						<div class="team__wrapper swiper-wrapper">


							<div class="team__slide swiper-slide">
								<h3 class="team__slider-title">Olivia Fu</h3>
								<div class="team-swiper-img-wrapper">
									<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_1.webp' ?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_1.png'?>" alt="photo" class="team-swiper-img"></picture>
								</div>
								<span class="team-swiper-subtitle">pastry-chef</span>
								<span class="team-swiper-text">Whether it's crafting intricate cakes, perfecting delicate pastries, or experimenting with unique flavor combinations, I take pride in every aspect of the creative process.</span>
							</div>




							<div class="team__slide swiper-slide">
								<h3 class="team__slider-title">Solomon Grey</h3>
								<div class="team-swiper-img-wrapper">
									<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_2.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_2.png'?>" alt="photo" class="team-swiper-img"></picture>
								</div>
								<span class="team-swiper-subtitle">pastry-chef</span>
								<span class="team-swiper-text">Whether it's crafting intricate cakes, perfecting delicate pastries, or experimenting with unique flavor combinations, I take pride in every aspect of the creative process.</span>
							</div>
							<div class="team__slide swiper-slide">
								<h3 class="team__slider-title">Liza Flex</h3>
								<div class="team-swiper-img-wrapper">
									<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_3.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_3.png'?>" alt="photo" class="team-swiper-img"></picture>
								</div>
								<span class="team-swiper-subtitle">pastry-chef</span>
								<span class="team-swiper-text">As a pastry chef with four years of experience, I have had the pleasure of creating delicious and visually stunning desserts that have delighted countless customers.</span>
							</div>
							<div class="team__slide swiper-slide">
								<h3 class="team__slider-title">Li Chong</h3>
								<div class="team-swiper-img-wrapper">
									<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_4.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_4.png'?>" alt="photo" class="team-swiper-img"></picture>
								</div>
								<span class="team-swiper-subtitle">pastry-chef</span>
								<span class="team-swiper-text">From traditional favorites to inventive creations, my passion for pastry has driven me to constantly innovate and push the boundaries of what is possible in the world of baking.</span>
							</div>
							<div class="team__slide swiper-slide">
								<h3 class="team__slider-title">Li Chong</h3>
								<div class="team-swiper-img-wrapper">
									<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_4.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_4.png'?>" alt="photo" class="team-swiper-img"></picture>
								</div>
								<span class="team-swiper-subtitle">pastry-chef</span>
								<span class="team-swiper-text">Whether it's crafting intricate cakes, perfecting delicate pastries, or experimenting with unique flavor combinations, I take pride in every aspect of the creative process.</span>
							</div>
							<div class="team__slide swiper-slide">
								<h3 class="team__slider-title">Olivia Fu</h3>
								<div class="team-swiper-img-wrapper">
									<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_1.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_1.png'?>" alt="photo" class="team-swiper-img"></picture>
								</div>
								<span class="team-swiper-subtitle">pastry-chef</span>
								<span class="team-swiper-text">Whether it's crafting intricate cakes, perfecting delicate pastries, or experimenting with unique flavor combinations, I take pride in every aspect of the creative process.</span>
							</div>
							<div class="team__slide swiper-slide">
								<h3 class="team__slider-title">Olivia Fu</h3>
								<div class="team-swiper-img-wrapper">
									<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_1.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_1.png'?>" alt="photo" class="team-swiper-img"></picture>
								</div>
								<span class="team-swiper-subtitle">pastry-chef</span>
								<span class="team-swiper-text">Whether it's crafting intricate cakes, perfecting delicate pastries, or experimenting with unique flavor combinations, I take pride in every aspect of the creative process.</span>
							</div>
							<div class="team__slide swiper-slide">
								<h3 class="team__slider-title">Solomon Grey</h3>
								<div class="team-swiper-img-wrapper">
									<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_2.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_2.png'?>" alt="photo" class="team-swiper-img"></picture>
								</div>
								<span class="team-swiper-subtitle">pastry-chef</span>
								<span class="team-swiper-text">As a pastry chef with four years of experience, I have had the pleasure of creating delicious and visually stunning desserts that have delighted countless customers.</span>
							</div>
							<div class="team__slide swiper-slide">
								<h3 class="team__slider-title">Liza Flex</h3>
								<div class="team-swiper-img-wrapper">
									<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_3.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_3.png'?>" alt="photo" class="team-swiper-img"></picture>
								</div>
								<span class="team-swiper-subtitle">pastry-chef</span>
								<span class="team-swiper-text">From traditional favorites to inventive creations, my passion for pastry has driven me to constantly innovate and push the boundaries of what is possible in the world of baking.</span>
							</div>
							<div class="team__slide swiper-slide">
								<h3 class="team__slider-title">Li Chong</h3>
								<div class="team-swiper-img-wrapper">
									<picture><source srcset="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_4.webp'?>" type="image/webp"><img src="<?echo get_template_directory_uri() . '/assets/img/team-img/layout_4.png" alt="photo'?>" class="team-swiper-img"></picture>
								</div>
								<span class="team-swiper-subtitle">pastry-chef</span>
								<span class="team-swiper-text">Whether it's crafting intricate cakes, perfecting delicate pastries, or experimenting with unique flavor combinations, I take pride in every aspect of the creative process.</span>
							</div>
						</div>
						<div class="team-slider-navigation-wrapper">
							<button type="button" class="swiper-button-prev arrow-left">
								<img src="img/arrows/arrow-left.svg" alt="arrow">
							</button>
							<button type="button" class="swiper-button-next arrow-right">
								<img src="img/arrows/arrow-right.svg" alt="arrow">
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="desserts">
				<h2 class="desserts-title">Our Desserts</h2>
				<div class="desserts-show">
					<ul class="dessert-show__content">
					<?
						$postslist = get_posts( array(
							'posts_per_page' => -1,
							'order'          => 'DESC',
							'orderby'        => 'title'
						) );
								
						if ( $postslist ) {
							foreach ( $postslist as $post ) :
								setup_postdata( $post );
								?>
								<li class="dessert-show_item">
									<a href="<? echo the_permalink();?>" class="dessert-card">
									<div class="dessert-card-img-wrapper">
									<picture>
										<img src="<?echo get_the_post_thumbnail_url() ?>" alt="image" class="dessert-card-img">
									</picture>
									</div>
									<h4 class="dessert-title"><? the_title();?></h4>
									<span class="dessert-text">
										<? the_excerpt(); ?>
									</span>
									<?php if ( get_field('price') ) { ?>
										<div class="dessert-cost"><? the_field('price');?></div>
									<?php } ?>
									<span class="dessert-btn">read more...</span>
								</a>
							</li>
						<?php
							endforeach; 
							wp_reset_postdata();
						}
							
							
							
							
							?>
									
									
								
							
						
						




















						


					</ul>
					<button type="submit" class="show-more">Показать ещё</button>
				</div>
			</div>

		</main>

	</main><!-- #main -->

<?php
get_footer();
