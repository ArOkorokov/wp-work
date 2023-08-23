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
    'order'       => 'ASC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'bakery_slider',
    'suppress_filters' => true, 
) );

global $post;
?>

<section class="bakery-slider">
	<div class="bakery-slider__container">
        <div class="bakery-slider__body">

            <div class="bakery-slider__titles">
            <?php if ( get_field('slider_title') ) { ?>
                <h2 class="bakery-slider__title"><?the_field('slider_title');?></h2>
            <?php } ?>
            <?php if ( get_field('slider_subtitle') ) { ?>
                <h3 class="bakery-slider__subtitle"><?the_field('slider_subtitle');?></h3>
            </div>
            <?php } ?>
            <div class="bakery-slider__content-wrapper">

                <div class="bakery-slider__contents">
                    <div class="bakery-slider__content-text">

                    <?php if ( get_field('slider_paragraph_1') ) { ?>
                        <span class="bakery-slider__content-text_text1">
                            <?the_field('slider_paragraph_1');?>
                        </span>
                    <?php } ?>

                    <?php if ( get_field('slider_paragraph_2') ) { ?>
                        <span class="bakery-slider__content-text_text2">
                            <?the_field('slider_paragraph_2');?>
                        </span>
                    </div>
                    <?php } ?>


                    <?php if ( get_field('second_button_text') ) { ?>
                        <a href="#" class="bekery-slider__btn" data-popup="#popup">
                            <span class="bakery-slider__btn_text"><?the_field('second_button_text');?>
                            </span>
                        </a>
                    </div>
                    <?php } ?>
                <div class="bakery-slider-slid">
                    <div class="bakery-slider-slid__slider swiper">
                        <div class="bakery-slider-slid__wrapper swiper-wrapper">
                        <?
                            foreach( $my_posts as $post ){
                            setup_postdata( $post );?>
                            
                                <div class="bakery-slider-slid__slide swiper-slide">
                                <? if(get_the_post_thumbnail_url()) { ?>
                                    <picture> 
                                        <img src="<?echo get_the_post_thumbnail_url();?>" alt="<?the_title();?>" class="bakery-slider__slider-img">
                                        <?} ?>
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











