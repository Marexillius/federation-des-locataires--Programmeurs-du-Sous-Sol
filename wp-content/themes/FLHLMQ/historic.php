<?php

/**
 * 	Template Name: historic
 *  Template Post Type: post, page, product
 * 	Identique à page, mais avec une barre latérale
 */

// Alexandre
get_header(); // Affiche header.php
?>
<section class="historic">
	<?php
	// Check si y'a des posts
	if (have_posts()) :
		// Puis affiche les posts
		while (have_posts()) : the_post();
	?>
			<div class="savior">
				<div class="savior__hero">
					<div class="savior__icon">
						<!-- L'icône du héro -->
						<img src="<?php bloginfo('template_url'); ?>/images/upGraph_white.png" alt="">
					</div>
					<!-- Le titre de la page -->
					<h2 class="savior__title"><?php the_title() ?></h2>
				</div>
				<!-- L'image principale de la page -->
				<img class="savior__image" src="<?php the_post_thumbnail_url() ?>" alt="">
			</div>
			<div class="contenu imgHistoric">
				<hr>
				<!-- Le contenu principal de notre page -->
				<?php the_content() ?>


			<?php endwhile ?>
			</div>
</section>
<?php
	else : // Si URL est invalide
		// Montre la page 404
		get_template_part('partials/404');
	endif;
	// Affiche le footer
	get_footer();
?>