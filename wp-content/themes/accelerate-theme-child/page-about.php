<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

 get_header(); ?>
 	<div id="primary" class="home-page hero-content about-hero">
 		<div class="main-content" role="main">
			<div class="about-header-content">
				<?php while ( have_posts() ) : the_post(); ?>
	 				<?php the_content(); ?>
	 			<?php endwhile; // end of the loop. ?>
			</div>
 		</div><!-- .main-content -->
 	</div><!-- #primary -->

<div class="about-services-wrapper">
	<section class="about-services-content">
		<h4>Our Services</h4>
		<p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
	</section>
</div>

<div class="about-contact-wrapper">
	<section class="about-contact-content">
		<h3>Interested in working with us?</h3>
		<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
	</section>
</div>

<?php get_footer(); ?>
