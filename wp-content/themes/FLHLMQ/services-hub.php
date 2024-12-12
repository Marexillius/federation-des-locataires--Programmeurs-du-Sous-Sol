<?php 
/**
 * 	Template Name: Service-hub
 * Template Post Type: post, page, product, services
 * 	Identique à page, mais avec une barre latérale
 */

// Alexandre
get_header(); // Affiche header.php
?>
<section class="hero">
        <div class="swiper hero__swipper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper hero__wrapper">
                <!-- Slides -->
				<?php
				// Check si y'a des posts
				if (have_posts()) :
					// Crée un tableau avec les services ordonnées
					$service = array(
						'orderby' => array(
							// Ordonne le tableau par les services les plus récentes d'abord.
							'date' => 'DESC',
						),
						// collecte les post types des service
						'post_type' => 'service',
					);
					$article = new WP_Query($service);

					while ($article->have_posts()) : $article->the_post();
					?>
                <div class="swiper-slide hero__nouvelles hero__nouvelles--1"><img src="<?php the_post_thumbnail_url() ?>" alt=""><div class="swiper-info hero__serviceHub"><h2><?php echo esc_html(get_field('previewservice')); ?></h2></div></div>
				<?php endwhile ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination hero__pagination"></div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev hero__arrowLeft"></div>
            <div class="swiper-button-next hero__arrowRight"></div>
            
        </div>
    </section>
    <br>
    <br>
	<section class="serviceHub">
        <div class="serviceHub__boxtitre">
            <h1 class="serviceHub__titre">Services</h1>
        </div>

        <div>
            <div class="serviceHub__filtrer">
                <h3>Filtrer</h3>
            </div>
            <div class="serviceHub__grid-container">
				<?php while ($article->have_posts()) : $article->the_post(); ?>
                <div class="serviceHub__Item serviceHub__Item--01">
                    <img class="serviceHub__img" src="<?php the_post_thumbnail_url() ?>" alt="">
                    <h2 class="serviceHub__titreCarte"><?php the_title() ?></h2>
                    <p class="serviceHub__paraCarte"><?php echo esc_html(get_field('previewservice')); ?></p>
                </div>
				<?php endwhile ?>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
<?php
	else : // Si URL est invalide
	// Montre la page 404
		get_template_part('partials/404');
		endif;
		// Affiche le footer
		get_footer();
?>