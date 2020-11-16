<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package blm_basic
 */

get_header(); ?>

<section class="site__main row">
	<div class="container">

		<div class="two__column--area">

			<main id="primary" class="content" style="padding-top:3vh;padding-bottom: 3vh">

				<h1 class="text-center">
                    <i>
	                    <?php printf( __( 'Search Results for: %s', 'blm_basic' ), '<span>' . get_search_query() . '</span>' ); ?>
                    </i>
                </h1>

				<?php if ( have_posts() ) : ?>

					<?php while (have_posts()) : the_post();

						get_template_part( 'content' );

					endwhile; ?>

			   		<?php blm_basic_paging_nav(); ?>

			  	 	<?php else: ?>

				   	<div class="content__area-noresults text-center">

					   <p>
                           <i>
                               Sorry, but nothing matched your search terms. Please try again with some different keywords.
                           </i>
                       </p>

					   <?php get_search_form(); ?>

				   </div>

		  	 <?php endif; ?>

			</main><!-- #primary -->

		</div><!-- .two__column--area -->

	</div><!-- .container -->
</section><!-- .site__main -->
<?php get_footer(); ?>
