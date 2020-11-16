<?php
/**
 * The template for displaying archive and category pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<section style="margin-top: 3vh" class="site__main row">

	<div class="container">

		<?php if (have_posts()) : ?>

        <div class="row" style="margin-top: 3vh; margin-bottom: 3vh">
            <div class="col-lg-12">
                <h1 class="title__page--archive text-center" title="<?php the_archive_title(); ?>"><?php the_archive_title(); ?> Articles</h1>

                <h2 class="lead text-center" title="articles about <?php the_archive_title(); ?>">
                    <i>
	                    This are all our articles tagged with: <br />
                        <strong title="<?php the_archive_title(); ?>">
	                        <?php the_archive_title(); ?>
                        </strong>
                    </i>
                </h2>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">


		        <?php while (have_posts()) : the_post();?>


                    <div class="box h-100" style="margin-bottom: 3vh">
                        <div class="post-box vertical clearfix">
                            <a href="<?php the_permalink() ?>" class="image-link arrow-icon dark-overlay">
						        <?php the_post_thumbnail( 'medium' );?>
                            </a>
                            <div class="extra-info">
                                <p class="meta small">
							        <?php blm_basic_posted_on(); ?>
                                </p>
                                <h2 style="font-size: 22px" title="<?php the_title(); ?>">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
								        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <p class="excerpt">
							        <?php the_excerpt(); ?>
                                </p>
                            </div>
                        </div>
                    </div>


		        <?php endwhile; ?>

		        <?php blm_basic_paging_nav(); ?>
            </div>
            <div class="col-lg-4">

		        <?php get_sidebar(); ?>

            </div>
        </div>

        <?php else: ?>


        <?php endif;?>

	</div><!-- .container -->
</section><!-- .site__main -->
<?php get_footer(); ?>
