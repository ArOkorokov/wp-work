<?
    /*
    Template Name: Desserts
    Template Post Type: post, page
    */
?>

<? get_header();?>
<div class="desserts-page">
	<h2 class="desserts-title">Our Desserts</h2>
	<div class="desserts-page_show" style="margin:auto;">
		<ul class="dessert-page__content">
		<?
			$postslist = get_posts( array(
				'posts_per_page' => -1,
				'order'          => 'ASC',
				'orderby'        => 'title'
			) );
					
			if ( $postslist ) {
				foreach ( $postslist as $post ) :
					setup_postdata( $post );?>
					<li class="dessert-page_item">
						<a href="<? echo the_permalink();?>" class="dessert-card">
							<div class="dessert-card-img-wrapper">
							<picture>
								<img src="<?echo get_the_post_thumbnail_url() ?>" alt="<?the_title();?>" class="dessert-card-img">
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
			<?	endforeach; 
				wp_reset_postdata();
			}
			?>	
		</ul>
</div>
</div>



<? get_footer(); ?>