<?php
/**
 * The default template for displaying content on the blog
 *
 * Used for index/archive/search.
 *
 * @package blm_basic
 */
?>



<div class="box col-sm-4 col-md-4 col-xs-12 col-lg-4 h-100">
    <div class="post-box vertical clearfix">
        <a href="<?php the_permalink() ?>" class="image-link arrow-icon dark-overlay">
	        <?php the_post_thumbnail( 'medium' );?>
        </a>
        <div class="extra-info">
            <p class="meta small">
                <?php blm_basic_posted_on(); ?> ,
            </p>
            <h2 style="font-size: 22px" title="<?php the_title(); ?>">
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
	                <?php the_title(); ?>
                </a>
            </h2>
            <p class="excerpt">
	            <?php the_excerpt(); ?>
            </p>
	        <?php blm_basic_entry_category_and_tags(); ?>
        </div>
    </div>
</div>
