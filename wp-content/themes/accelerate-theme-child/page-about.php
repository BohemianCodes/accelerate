<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<section class="home-page">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="homepage-hero">
				<div class="site-content about-title">
					<p><span class="green-text">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
				</div><!-- .site-content -->
			</div>
		<?php endwhile; // end of the loop. ?>
</section><!-- .home-page -->

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<section class ="our-services">
					
					<?php the_content(); ?>
						
				</section>

				<section class="about-main">
					


				</section>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->



	</div><!-- #primary -->

<?php get_footer(); ?>
