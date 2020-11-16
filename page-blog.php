<?php
/**
 * Template Name: Blog Page
 */
get_header();
?>


<main class="site__main row blog">
	<div class="container">
        <div class="row">
	        <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h1 class="single-title no-bottom" style="margin-bottom: 3vh"><?php the_title(); ?></h1>
                    <div class="content__area">
		                <?php the_content(); ?>
                    </div><!-- .content__area -->
                </div>
	        <?php endwhile; ?>
        </div>
	</div><!-- .container -->
</main><!-- .site__main -->
<?php get_footer(); ?>
