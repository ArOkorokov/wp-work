<?
/***
 * 
 * 
 * 
 * 
 * 
 * @package bakery
 */

?>
<?


$my_posts = get_posts( array(
    'numberposts' => 5,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'bakery_slider',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;
?>

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
                        <?
                            foreach( $my_posts as $post ){
                            setup_postdata( $post );?>
                                <div class="bakery-slider-slid__slide swiper-slide">
                                    <picture>
                                        <img src=<?the_field('slider-img');?> alt="<?the_title();?>" class="bakery-slider__slider-img">
                                    </picture>
                                </div>

                            <?}

                            wp_reset_postdata();
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>











