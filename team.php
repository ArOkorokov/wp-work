<?
    /*
    Template Name: Team
    Template Post Type: post, page
    */
?>
<?get_header();?>




<h2 class="team-title">our team</h2>


	<?
		
		$posts = get_posts([
			'post_type' => 'customposts',
			'post_per_page' => -1,
			'category' => '',
			'numberposts' => -1,
            'order'          => 'ASC',
		]);
		foreach($posts as $post) {
			setup_postdata($post); ?>
		
			<div class="team-page_wrapper">
            <h3 class="team-page_title"><?the_title();?></h3>
				<div class="team-page_content-wrapper">
                    <div class="team-page_img-wrapper">
                        <a href="<?the_permalink();?>">
                            <img src="<?echo get_the_post_thumbnail_url();?>" alt="photo" class="">
                        </a>
                        <?php if ( get_field('job_position') ) { ?>
                            <span class="team_position"><?the_field('job_position');?></span>		
                        <?php } ?>
                    </div>
                    <div class="team-page_content">
                        <span class=""><? the_content();?></span>
                    </div>
                </div>
			</div>
		<?}
		wp_reset_postdata(); 
	?>
		





















<?get_footer();?>