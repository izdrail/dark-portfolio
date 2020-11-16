<?php
/**
 * The Template for displaying all single posts.
 *
 * @package dark_portfolio
 */

get_header();

?>

<main class="site__main row blog">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
		?>
        <section class="bgimage" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8)), url(<?php echo $image[0];?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:15vh">
                        <h1 class="text-center lead-text" title="<?php the_title() ?>">
							<?php the_title() ?>
                        </h1>
                        <h2 class="text-center ">
							<?php the_excerpt(); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="entry__meta" style="text-align: center;font-size: 1.6rem;padding-top: 2vh;padding-bottom: 2vh">

                        <p class="post-meta">
	                        <?php blm_basic_posted_on(); ?>
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="primary" class="content block__left">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="content__area">
				                <?php the_content(); ?>
                            </div>
                        </article><!-- #post-## -->
                    </div><!-- #primary -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>

            <div class="row" style="margin-bottom: 5vh">
                <div class="col-lg-12">
			        <?php blm_basic_entry_category_and_tags(); ?>
                </div>
                <div class="col-lg-12">
                    <p class="tags">
			            <?php the_tags( 'Tags: ', ', ', '<br />' ); ?>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>

            <div class="row" style="margin-bottom: 5vh">
                <div class="col-lg-12">
	                <?php // If comments are open or we have at least one comment, load up the comment template.
	                if ( comments_open() || get_comments_number() ) {
		                comments_template();
	                } ?>
                </div>
            </div>

        </section><!-- .container -->
	<?php endwhile; ?>
</main><!-- .site__main -->

<?php get_footer(); ?>
