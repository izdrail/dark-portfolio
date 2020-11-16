<?php
/**
 * Master Template. This template will be used to display your blog posts and pages if page.php does not exist.
 *
 * @package dark_portfolio
 */

get_header(); ?>

<main class="site__main row">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="single-title" style="padding-top:5vh">
                    My Blog
                </h1>
                <p class="post-meta"><span>Written with love, By <a href="#">Stefan</a>  </span></p>

                <h2 class="text-center">
                   <i>
                       My everyday thoughts on technology, news, social media, marketing, seo and more.
                   </i>
                </h2>
            </div>
        </div>
    </div>
    <section class="container container-masonry">
        <div class="row grid">
	        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

		        get_template_part( 'content' );

	        endwhile; else: ?>

            <div class="col-lg-12">
                <h3 class="text-center">
                    <i>
                        No posts found
                    </i>
                </h3>
            </div>

            <?php endif;?>
        </div>
    </section><!-- .container -->

    <section class="container">
        <div class="row">
            <div class="col-lg-12">
			    <?php blm_basic_paging_nav(); ?>
            </div>
        </div>
    </section>
</main><!-- .site__main -->
<?php get_footer(); ?>
