<?php 
/**
 * 	Template Name: À propos
 * Template Post Type: post, page, product
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<section>

			<div class="contenu">
            <div class="savior">
                <div class="savior__hero">
                    <div class="savior__icon">
                      <img src="<?php bloginfo('template_url'); ?>/images/presentation.png" alt="">  
                    </div>
                    <h2 class="savior__title"><?php the_title(); // Titre de la page ?></h2>
                </div>
                <img class="savior__image" src="<?php the_post_thumbnail_url() ?>" alt="">
            </div>
	
		
		
			<?php the_content(); // Contenu principal de la page ?>
		</div>
</section>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>