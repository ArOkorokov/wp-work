<? get_header(); ?>

    <?
        $post_id = get_the_ID();
        $aa = get_post_meta($post_id);
    ?>


    <div class="single-team_wrapper">
        <div class="single-team_img-wrapper">
            <img class="single-team_img" src="<?
            if(get_the_post_thumbnail_url()){
                echo get_the_post_thumbnail_url();
            } ?>" alt="<?the_title();?>">
        </div>
        <div class="single-team_content-wrapper">
            <h3 class="single-team_content-title"><?the_title()?></h3>
            <span class="single-team_content-subtitle">
                <?
                    if(isset($aa)) {
                        echo get_post_meta($post_id, 'job_position', true);
                    }
                ?>
            </span>
            <p class="single-team_content-content"><?the_content();?></p>
        </div>
    </div>


    <?
        

	?>

<? get_footer(); ?>
