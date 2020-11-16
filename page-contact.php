<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>


<main>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
        <div class="google-wrapper">
            <div id="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4114.023358802373!2d0.1159320825869075!3d51.3904904185964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761d34009fdc8f%3A0x4e9c83308cd45b0f!2sLzo%20Media!5e1!3m2!1sen!2suk!4v1605027698537!5m2!1sen!2suk" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div id="google-map-overlay">
                <h1 class="text-center" title="about our web development company" style="margin-top:10vh">
		            <?php the_title() ?>
                </h1>
                <h2 class="text-center lead-text">
		            <?php the_excerpt(); ?>
                </h2>
            </div>
        </div>
        <section class="container" style="margin-top: 5vh">
            <div class="row ">
                <div class="col-lg-12">
	                <?php the_content(); ?>
                </div>
            </div>
        </section>
	<?php endwhile; ?>
</main>


<?php get_footer(); ?>
