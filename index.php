<?php
/**
 * The homepage template file
 *
 * @package Alejandro theme
 * @since 1.0
 */

get_header(); ?>

<?php
	$args = array(
		'posts_per_page' => 100,
		'post_type' => 'picture'
	);
	query_posts($args);
	if (have_posts()) : while (have_posts()) : the_post();
?>
	<article id="post-<?php the_ID(); ?>" class="picture clearfix">
		<?php $image = get_post_meta($post->ID, 'image', $single = true); ?>

		<div class="three-col">
			<a href="<?php the_permalink(); ?>">
			<?php
				$image_attributes = wp_get_attachment_image_src( $image );
				if( $image_attributes ) :
			?>
				<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>">
			<?php else : ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/no-image-available.png" alt="">
			<?php endif; ?>
			</a>
		</div>
		<div class="six-col last-col">
			<h2 class="picture-header"><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>
			<p class="entry-reg">Reg: <?php echo get_post_meta($post->ID, 'reg-no', $single = true); ?></p>
			<p class="entry-date">Fecha: <?php echo get_post_meta($post->ID, 'date', $single = true); ?></p>
			<p class="entry-size">Dimensiones: <?php echo get_post_meta($post->ID, 'width', $single = true); ?> x <?php echo get_post_meta($post->ID, 'height', $single = true); ?></p>
			<p class="entry-technique">Técnica: <?php echo get_post_meta($post->ID, 'technique', $single = true); ?></p>
		</div>
	</article>
<?php
endwhile;

else :
	get_template_part( 'content', 'none' );

endif;
?>

<?php get_footer(); ?>
