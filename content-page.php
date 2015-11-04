<?php
/**
 * The template used for displaying page content
 *
 * @package Alejandro theme
 * @since 1.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<?php
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_post_permalink() ) ), '</a></h2>' );
	?>
	<p class="entry-reg">Reg: <?php echo get_post_meta($post->ID, 'reg-no', $single = true); ?></p>
	<p class="entry-date">Date: <?php echo get_post_meta($post->ID, 'date', $single = true); ?></p>
	<p class="entry-size">Size: <?php echo get_post_meta($post->ID, 'width', $single = true); ?> x <?php echo get_post_meta($post->ID, 'height', $single = true); ?></p>
	<p class="entry-technique">Technique: <?php echo get_post_meta($post->ID, 'technique', $single = true); ?></p>
	<?php echo wp_get_attachment_image( get_post_meta($post->ID, 'image', $single = true), large ); ?>
</article>
