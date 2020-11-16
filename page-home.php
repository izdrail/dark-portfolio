<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
<main style="background-image:linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8)), url(<?php echo $image[0];?>)">

	<div class="container">

        <div class="row">

	        <?php while ( have_posts() ) : the_post(); ?>

                <div class="content__area">
			        <?php the_content(); ?>
                </div>
                <!-- .content__area -->

	        <?php endwhile; ?>
        </div>

	</div>

</main>


<?php get_footer(); ?>
