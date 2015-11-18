<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title">Nada Encontrado</h1>
	</header><!-- .page-header -->

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<?php elseif ( is_search() ) : ?>

			<p>Lo sentimos , pero no igualó los términos de búsqueda . Por favor, inténtelo de nuevo con algunas palabras clave diferentes.</p>

		<?php else : ?>

			<p>Parece que no podemos encontrar lo que estás buscando. Tal vez la búsqueda puede ayudar.</p>

		<?php endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
