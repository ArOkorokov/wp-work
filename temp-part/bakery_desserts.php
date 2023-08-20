<?
    /***
     * 
     * @package bakery
     */
?>

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
				get_template_part('temp-part/page_content');
			endforeach; 
			wp_reset_postdata();
		}
		?>	
	</ul>
	<button type="submit" class="show-more">Показать ещё</button>
</div>
