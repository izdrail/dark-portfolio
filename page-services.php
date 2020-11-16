<?php
/**
 * Template Name: Services Page
 */
get_header();
?>


<main style="overflow-x: hidden">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
        <section class="bgimage" style="background-image:linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8)), url(<?php echo $image[0];?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:15vh">
                        <h2 class="text-center" title="Our <?php the_title() ?> as a software development company">
							<?php the_title() ?>
                        </h2>
                        <h3 class="text-center lead-text">
							<?php the_excerpt(); ?>
                        </h3>
                    </div>
                </div>
            </div>
        </section>


        <section class="container">
            <div class="row">
                <div class="col-lg-12 single-service">
	                <?php the_content(); ?>
                </div>
            </div>
        </section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
