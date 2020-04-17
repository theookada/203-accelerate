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

<div id="primary" class="site-content sidebar">
	<div class="main-content" role="main">
    <div class="case-study-archive">
      <ul>

		      <?php while ( have_posts() ) : the_post();

	         $services = get_field('services');
	         $client = get_field('client');
	         $link = get_field('site_link');
	         $image_1 = get_field('image_1');
	         $size = "full";
	        ?>
          <li>
	           <article class="case-study">
		             <aside class="case-study-sidebar">
			                <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                      </a>
			                   <h5><?php echo $services; ?></h5>
			                      <h6>Client: <?php echo $client; ?></h6>

			           <?php the_excerpt(); ?>

			           <p><a href="<?php echo $link; ?>">Visit Live Site ></a></p>
		             </aside>

		             <div class="case-study-images">
			                <a href="<?php the_permalink(); ?>">
                        <?php if($image_1) {
				                      echo wp_get_attachment_image( $image_1, $size );
			                  } ?>
                      </a>
		             </div>
	           </article>
           </li>
			<?php endwhile; // end of the loop. ?>

    </ul>
    </div>
	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>
