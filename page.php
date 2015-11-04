<?php
/**
 * The template for displaying pages
 *
 * @package Alejandro theme
 * @since 1.0
 */

get_header(); ?>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

		// End the loop.
		endwhile;
		?>

<?php get_footer(); ?>
