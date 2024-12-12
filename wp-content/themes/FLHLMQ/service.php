<?php 
/**
 * 	Template Name: Service
 * Template Post Type: post, page, product
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

?>


<article itemscope itemtype="https://schema.org/NewsArticle">
<?php
				// Check si y'a des posts
				if (have_posts()) :
					// Crée un tableau avec les nouvelles ordonnées
					$service = array(
						'orderby' => array(
							// Ordonne le tableau par les nouvelles les plus récentes d'abord.
							'date' => 'DESC',
						),
						// collecte les post types des nouvelles
						'post_type' => 'service',  'posts_per_page' => 1
					);
					$article = new WP_Query($service);
					while ($article->have_posts()) : $article->the_post();

				?>
	

			<article itemscope itemtype="https://schema.org/NewsArticle">
        <div class="linkInTime">
            <p class="linkInTime__ariane">Accueil / <a href="#">Services</a></p>
            <div class="linkInTime__time" itemprop="author dateCreated">Par 
                <p itemprop="author">Rédaction</p> - 
                <p itemprop="author dateCreated">Jeu 22/08/2024</p>
            </div>          
        </div>

        <div class="savior">
            <div class="savior__hero">
                <div class="savior__icon">
                  <img src="<?php bloginfo('template_url'); ?>/images/upGraph_white.png" itemprop="image">  
                </div>
                <h2 class="savior__title" itemprop="name contentLocation"><?php the_title(); // Titre de la page ?></h2>
            </div>
            <img class="savior__image" src="<?php the_post_thumbnail_url() ?>" alt="">
        </div>
        <div class="content">
		
		<h2 ><?php the_title()?></h2>
<?php the_content(); // Contenu principal de la page ?>


		</div>
        </div>
		
	</article>
<?php endwhile; // Fermeture de la boucle



else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>