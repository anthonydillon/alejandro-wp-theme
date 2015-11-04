<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="picture clearfix">
	<div class="three-col">
		<?php
			$image_attributes = wp_get_attachment_image_src( get_post_meta($post->ID, 'image', $single = true) );
			if( $image_attributes ) :
		?>
			<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
		<?php else : ?>
			<img src="<?php bloginfo('template_directory'); ?>/img/no-image-available.png" alt="">
		<?php endif; ?>
	</div>
	<div class="six-col last-col">
		<?php
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_post_permalink() ) ), '</a></h2>' );
		?>
		<p class="entry-reg">Reg: <?php echo get_post_meta($post->ID, 'reg-no', $single = true); ?></p>
		<p class="entry-date">Date: <?php echo get_post_meta($post->ID, 'date', $single = true); ?></p>
		<p class="entry-size">Size: <?php echo get_post_meta($post->ID, 'width', $single = true); ?> x <?php echo get_post_meta($post->ID, 'height', $single = true); ?></p>
		<p class="entry-technique">Technique: <?php echo get_post_meta($post->ID, 'technique', $single = true); ?></p>
	</div>
</article>
