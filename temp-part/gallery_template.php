<?
/**
 * Template Name: about-page
 * Template Post Type: post, page, product
 */

?> 

<?

    $posts = get_posts([
        'post_type' => 'bakery_gallery',
        'post_per_page' => -1,
        'category' => '',
        'numberposts' => -1,
        'order'       => 'ASC',
    ]);
    ?>
    <div class="bakery">
        <div class="bakery-titles">
            <h2 class="bakery-title">our bakery</h2>
            <h3 class="bakery-subtitle">Where every bite is a delight - welcome to our bakery store!</h3>
        </div>
	<div class="bakery-gallery">

    <? foreach($posts as $post) {
        setup_postdata($post);?>

    <a href="<?the_permalink();?>" class="bakery-gallery-link">
        <img src="<? the_field('bakegallery');?>" alt=<?the_title();?> class="bakery-gallery-img">
    </a>
        
    <?}
    wp_reset_postdata(); ?>
    </div>
		<div class="bakery-text">
			Our laboratory is a place where we can be creative, have fun, and bring joy to our customers through our delicious treats. We are passionate about what we do, and we are always striving to improve our skills and techniques to deliver the best possible experience to our customers.
		</div>
    </div>

