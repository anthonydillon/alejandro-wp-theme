<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="picture">
	<?php $image = get_post_meta($post->ID, 'image', $single = true); ?>
	<div class="entry-image">
		<?php
			$image_attributes = wp_get_attachment_image_src( $image );
			if( $image_attributes ) {
		?>
			<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
		<?php endif; ?>
	</div>
	<div>
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_post_permalink() ) ), '</a></h2>' );
			endif;
		?>
		<p class="entry-reg">Reg: <?php echo get_post_meta($post->ID, 'reg-no', $single = true); ?></p>
		<p class="entry-reg">Certificación: <?php echo get_post_meta($post->ID, 'certificacion', $single = true); ?></p>
		<p class="entry-date">Date: <?php echo get_post_meta($post->ID, 'date', $single = true); ?></p>
		<p class="entry-size">Size: <?php echo get_post_meta($post->ID, 'width', $single = true); ?> x <?php echo get_post_meta($post->ID, 'height', $single = true); ?></p>
		<p class="entry-technique">Technique: <?php echo get_post_meta($post->ID, 'technique', $single = true); ?></p>
	</div>
</article>
