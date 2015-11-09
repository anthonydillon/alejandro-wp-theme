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
			$image_attributes = wp_get_attachment_image_src( $image, 'medium' );
			if( $image_attributes ) :
		?>
			<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
		<?php endif; ?>
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_post_permalink() ) ), '</a></h2>' );
			endif;
		?>

		<div class="six-col">
			<?php
				the_content();
			?>
		</div>

		<div class="three-col last-col">
			<h4>Related artwork</h4>
			<ul class="list">
			<?php
				$currentID = $post->ID;
				$loop = new WP_Query( array( 'post_type' => 'picture', 'posts_per_page' => -1,  ) );
				while ( $loop->have_posts() ) : $loop->the_post();
					$books = get_post_meta($post->ID, 'books');
					if (count($books) > 0) :
						$books = $books[0];
						if (in_array($currentID, $books)) {
							the_title( sprintf( '<li><a href="%s">', esc_url( get_post_permalink() ) ), '</a></li>' );
						}
					endif;
				endwhile;
				wp_reset_query();
			?>
			</ul>
		</div>

		<?php edit_post_link('Edit book', '<p>', '</p>'); ?>
	</div>
</article>
