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
				<h3><?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?></h3>
			</div>
 		</div><!-- .main-content -->
 	</div><!-- #primary -->

<div class="about-services-wrapper">
	<section class="about-services-content">
		<h4>Our Services</h4>
		<p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>

		<ul>
			<?php
        $args = array( 'post_type' => 'about', 'posts_per_page' => 4 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        $image = get_field('image');
        $size = "full";
      ?>
      <li>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <div class="about-service-img">
          <?php if($image) {
                echo wp_get_attachment_image( $image, $size );
          } ?>
        </div>
      </li>
      <?php endwhile; // end of the loop. ?>
		</ul>
	</section>
</div>

<div class="about-contact-wrapper">
	<section class="about-contact-content">
		<h3>Interested in working with us?</h3>
		<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
	</section>
</div>

<?php get_footer(); ?>
