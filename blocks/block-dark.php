<?php
$attachment_id = block_value( 'background' );


?>

<div class="thumb featured dark-overlay">
    <div class="photo">
        <a href="<?php echo get_home_url(); ?>/<?php echo block_field('link');?>" title="Web Development company">
	        <?php echo wp_get_attachment_image( $attachment_id, 'thumbnail' );?>
            <div class="info">
                <h2 class="big-title" style="text-align: center">
	                <?php echo block_field('title');?>
                </h2>
                <p class="excerpt">
	                <?php echo block_field('content');?>
                </p>
                <em class="arrow-right"></em>
            </div>
        </a>
    </div>
</div>
