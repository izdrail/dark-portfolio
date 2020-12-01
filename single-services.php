<?php
/**
 * The Template for displaying all single posts.
 *
 * @package dark_portfolio
 */

get_header();

?>

<main style="overflow-x: hidden" class="site__main row">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
        <div class="bgimage" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8)), url(<?php echo $image[0];?>)">
            <div class="container-md">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:15vh;padding-bottom: 15vh">
                        <h2 class="text-center lead-text" title="<?php the_title() ?>">
							<?php the_title() ?>
                        </h2>
                        <h3 class="text-center ">
							<?php the_excerpt(); ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-left:30px; margin-bottom: 5vh">
            <div class="row">
                <div class="col-lg-12">
                    <div class="entry__meta" style="text-align: center;font-size: 1.6rem;">
                        <p class="post-meta">
	                        <?php blm_basic_posted_on(); ?>
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <main id="primary" class="content block__left">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="content__area" style="text-align: center;">
				                <?php the_content(); ?>
                            </div>
                        </article><!-- #post-## -->
                    </main><!-- #primary -->
                </div>
            </div>
        </div><!-- .container-md -->
	<?php endwhile; ?>
</main><!-- .site__main -->

<?php get_footer(); ?>
