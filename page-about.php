<?php
/**
 * Template Name: About Page
 */
get_header();
?>


<main>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
        <section class="bgimage" style="background-image:linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8)), url(<?php echo $image[0];?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:15vh;padding-bottom:15vh">
                        <h1 class="text-center" title="about our web development company">
							<?php the_title() ?>
                        </h1>
                        <h2 class="text-center lead-text">
							<?php the_excerpt(); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </section>


        <section class="container">
            <div class="row">
                <div class="col-lg-12">
	                <?php the_content(); ?>
                </div>
            </div>
        </section>
	<?php endwhile; ?>





    
</main>


<?php get_footer(); ?>
