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
		<?php while ( have_posts() ) : the_post(); 

				$service_title1 = get_field('service_title1');
				$service_title2 = get_field('service_title2');
				$service_title3 = get_field('service_title3');
				$service_title4 = get_field('service_title4');

				$service1 = get_field('service1');
				$service2 = get_field('service2');
				$service3 = get_field('service3');
				$service4 = get_field('service4');

				$image1 = get_field('image1');
				$image2 = get_field('image2');
				$image3 = get_field('image3');
				$image3 = get_field('image3');

				$size = "full";
			?>

			<div class="homepage-hero">
				<div class="site-content about-title">
					<p><span class="green-text">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
				</div><!-- .site-content -->
			</div>
		<?php endwhile; // end of the loop. ?>
</section><!-- .home-page -->

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			
				


				<section class ="our-services">
					
					<?php the_content(); ?>
						
				</section>

				<section class="about-main">

					<div class="service-block">

						<div class="image-float-left">

							<?php if($image1) { 
							echo wp_get_attachment_image( $image1, $size );
							} ?>
						
						<div class="text-float-right" id="service1">
							<h3><?php echo $service_title1; ?></h3>
							<p><?php echo $service1; ?></p>
						</div>

					</div>

				</section>
	
		</div><!-- #content -->



	</div><!-- #primary -->

<?php get_footer(); ?>
