<?php
/**
 * The template used for displaying page content
 *
 * @package Alejandro theme
 * @since 1.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<div class="twelve-col">
		<?php
			$image_attributes = wp_get_attachment_image_src( get_post_meta($post->ID, 'image', $single = true), 'large' );
			if( $image_attributes ) :
		?>
			<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
		<?php endif; ?>
	</div>
	<div class="nine-col">
		<?php
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_post_permalink() ) ), '</a></h2>' );
		?>
		<p class="entry-reg">Reg: <?php echo get_post_meta($post->ID, 'reg-no', $single = true); ?></p>
		<p class="entry-date">Fecha: <?php echo get_post_meta($post->ID, 'date', $single = true); ?></p>
		<p class="entry-size">Dimensiones: <?php echo get_post_meta($post->ID, 'width', $single = true); ?> x <?php echo get_post_meta($post->ID, 'height', $single = true); ?></p>
		<p class="entry-technique">Técnica: <?php echo get_post_meta($post->ID, 'technique', $single = true); ?></p>
	</div>

	<div class="nine-col">
		<?php
			the_content();
		?>
		<?php edit_post_link('Obra de edición', '<p>', '</p>'); ?>
	</div>

	<div class="nine-col">
		<h4>Aparece en</h4>
		<?php
		$books = get_post_meta($post->ID, 'books');
		if (count($books) > 0) :
			$books = $books[0];?>
		<ul class="list">
			<?php for ($i = 0; $i < count($books); $i++ ) {
				echo '<li><a href="' . get_permalink( $books[$i] ) . '">' . get_the_title( $books[$i] ) . '</a></li>';
			}?>
		</ul>
		<?php else :?>
			<p>Nada actualmente</p>
		<?php endif; ?>
	</div>
</article>
