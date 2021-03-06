<?php
/**
 * The template for displaying archive case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 

			$services = get_field('services');
			$image_1 = get_field('image_1');
			$size = "full";
			?>


		<article class="case-study">
			<aside class="case-studies-archive-sidebar">

				<h1 class="case-studies-archive-title"><?php the_title(); ?></h1>
				<h5><?php echo $services; ?></h5>

				<?php the_excerpt(); ?>

				<p><a href="<?php the_permalink(); ?>">View Project &rsaquo;</a></p>

			</aside>

			<div class="case-studies-archive-images">
				
				<?php if($image_1) { 
				echo wp_get_attachment_image( $image_1, $size );
				} ?>


			</div>

		</article>


			
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
