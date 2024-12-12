<?php

/**
 * 	Template Name: Nouvelles
 * Template Post Type: post, page, product, news
 * 	Identique à page, mais avec une barre latérale
 */


// Alexandre
get_header(); // Affiche header.php
?>
<section class="allNews">
	<div class="savior">
		<div class="savior__hero">
			<div class="savior__icon">
				<img src="<?php bloginfo('template_url'); ?>/images/newspaper_white.png">
			</div>
			<h2 class="savior__title">Nouvelles</h2>
		</div>
	</div>

	<div>
		<div class="allNews__filtrer">
			<p class="allNews__filtrer__sort">Filtrer</p>
			<select class="allNews__filtrer__selection" name="" id="filtre">
				<option value="old">Ordre décroissant</option>
				<option value="recent">Ordre croissant</option>
			</select>
		</div>
		<div class="allNews__grid-container">
			<div class="allNews__late">
				<?php
				// Check si y'a des posts
				if (have_posts()) :
					// Crée un tableau avec les nouvelles ordonnées
					$nouvelle = array(
						'orderby' => array(
							// Ordonne le tableau par les nouvelles les plus récentes d'abord.
							'date' => 'DESC',
						),
						// collecte les post types des nouvelles
						'post_type' => 'nouvelle',
					);
					$article = new WP_Query($nouvelle);
				?>
					<?php
					while ($article->have_posts()) : $article->the_post();
					?>

						<div class="allNews__Item">
							<!-- Ajoute l'image de la nouvelle wordpress -->
							<img class="allNews__img" src='<?php the_post_thumbnail_url() ?>'>
							<!-- Ajoute le titre de la nouvelle wordpress -->
							<h2 class="allNews__titreCarte"><?php the_title() ?></h2>
							<!-- Ajoute la description preview de la nouvelle wordpress -->
							<p class="allNews__paraCarte"><?php echo esc_html(get_field('previewnouvelle')); ?></p>
						</div>
					<?php endwhile ?>
			</div>
			<div class="allNews__more"> Plus de nouvelles </div>
		</div>
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