<?php 
/**
 * 	Template Name: Article
 * Template Post Type: post, page, product
 * 	Identique à page, mais avec une barre latérale
 
 */

get_header(); // Affiche header.php


?>

<article itemscope itemtype="https://schema.org/NewsArticle">

			<h2>
				
			</h2>

			<article itemscope itemtype="https://schema.org/NewsArticle">
        <div class="linkInTime">
            <p class="linkInTime__ariane">Accueil / <a href="#">Nouvelles</a></p>
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
                <p class="content__cat" id="manif" itemprop="genre">Manifestation</p>
            </div>
            <img class="savior__image" src="<?php the_post_thumbnail_url() ?>" alt="">
        </div>
        <div class="nextPre">
            <a href="">&lt;&lt;Nouvelles précédente</a>
            <a href="">Nouvelles suivante&gt;&gt;</a>
        </div>
        <div class="content">
		
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
						'post_type' => 'nouvelle',  'posts_per_page' => 1
					);
					$article = new WP_Query($nouvelle);
					while ($article->have_posts()) : $article->the_post();
				?><h2 ><?php the_title()?></h2>
<img  src='<?php the_post_thumbnail_url()?>'>
<p ><?php echo esc_html ( get_field( 'newsarticle' ) ); ?></p>

		</div>
        </div>
		
	</article>
	<div class="nextNews">       
            <div class="nextNews__fade"></div>
            <h1>Prochaine nouvelle</h1>
            <p>Cliquer pour passer à la prochaine nouvelle.</p>
            <div class="savior">
                <h2 class="savior__title">Demande record de HLM à Saguenay
                </h2>
                <div class="nextNews__link">&#x27A4;</div>
                <img class="savior__image" src="../../../sources/medias/hlm saguenay.png" alt="">
            </div>
    </div>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>