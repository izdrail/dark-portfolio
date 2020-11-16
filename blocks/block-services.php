<?php

// Variables.
$post_type = 'services';
$category  = block_value( 'category' );
$title  = block_value( 'title' );
$description  = block_value( 'description' );


// WP_Query arguments.
$args = array(
	'post_type'      => array( $post_type ),
	'posts_per_page' => 10,
	'taxonomy'       => 'category',
	'term'           => $category,
);

// The Query.
$services_query = new WP_Query( $args );
?>


<section class="slider-services">

    <div class="title">
        <h2>
		    <?php echo $title;?>
        </h2>
    </div>

    <div class="subtitle">
	    <?php echo $description;?>
    </div>



    <div class=" owl-carousel owl-thumbs">

		<?php while ( $services_query->have_posts() ):$services_query->the_post(); ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' ); ?>
            <div class="thumb dark-overlay">
                <div class="photo">
                    <a href="<?php the_permalink() ?>" title="<?php the_title();?>">
                        <img src="<?php echo $image[0];?>" alt="<?php the_title(); ?>" />
                        <div class="info">
                            <div class="big-excerpt">
                                <h5><?php the_title(); ?></h5>
                                <p>
									<?php the_excerpt();?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


		<?php endwhile; ?>
    </div>

</section>

<style>


</style>
