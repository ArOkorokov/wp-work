<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bakery
 */

get_header();
?>

	
	<?php

$query = new WP_Query( 'post' );
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();
		?>
									
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
		<?
			if(has_post_thumbnail()) : ?>
			<picture>
				<img src="<? echo get_the_post_thumbnail_url()?>" alt="<?the_title()?>">
			</picture>
			<? else: ?><?endif ;?>
				<div class="dessert-cost"><? echo the_field('price');?>
				<? wp_reset_postdata();
										
			?>
										
		<?php
	}
	wp_reset_postdata();
}
else
	echo 'Записей нет.';
?>


	

<?php

get_footer();
