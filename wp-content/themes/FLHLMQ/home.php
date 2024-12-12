<?php 
/**
 * 	Template Name: Accueil
 * Template Post Type: post, page, product, news, services, witness
 * 	Identique à page, mais avec une barre latérale
 */

 // Alexandre
get_header(); // Affiche header.php
?>
<section class="hero">
        <div class="swiper hero__swipper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper hero__wrapper">
			<?php
				// Check si y'a des posts
				if (have_posts()) :
					// Crée un tableau avec les nouvelles ordonnées
					$nouvelleHero = array(
						'orderby' => array(
							// Ordonne le tableau par les nouvelles les plus récentes d'abord.
							'date' => 'DESC',
						),
						// collecte les post types des nouvelles
						'post_type' => 'nouvelle',
						'posts_per_page'=> 4,
					);
					$nouvelleGrid = array(
						'orderby' => array(
							// Ordonne le tableau par les nouvelles les plus récentes d'abord.
							'date' => 'DESC',
						),
						// collecte les post types des nouvelles
						'post_type' => 'nouvelle',
						'posts_per_page'=> 6,
					);
					$service = array(
						'orderby' => array(
							// Ordonne le tableau par les services les plus récentes d'abord.
							'date' => 'DESC',
						),
						// collecte les post types des services
						'post_type' => 'service',
					);
					$witness = array(
						'orderby' => array(
							// Ordonne le tableau par les services les plus récentes d'abord.
							'date' => 'ASC',
						),
						// collecte les post types des services
						'post_type' => 'witness',
					);
					$articleNewsHero = new WP_Query($nouvelleHero);
					$articleNewsGrid = new WP_Query($nouvelleGrid);
					$articleService = new WP_Query($service);
					$articleWitness = new WP_Query($witness);

					while ($articleNewsHero->have_posts()) : $articleNewsHero->the_post();
					?>
                <!-- Slides -->
                <div class="swiper-slide hero__nouvelles hero__nouvelles--1"><img src="<?php the_post_thumbnail_url() ?>" alt=""><div class="swiper-info hero__serviceHub"><h2><?php the_title() ?></h2></div></div>
				<?php endwhile ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination hero__pagination"></div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev hero__arrowLeft"></div>
            <div class="swiper-button-next hero__arrowRight"></div>
        </div>
    </section>
	<section class="nouvelles">
        <div class="nouvelles__boxtitre">
            <h1 class="nouvelles__titre">Nouvelles</h1>
            <a class="nouvelles__lien">Toutes les nouvelles</a>
        </div>

        <div>
            <div class="nouvelles__filtrer">
                <h3>Filtrer</h3>
            </div>
            <div class="nouvelles__grid-container">
				<?php while ($articleNewsGrid->have_posts()) : $articleNewsGrid->the_post(); ?>
                <div class="nouvelles__Item nouvelles__Item--01">
                    <img class="nouvelles__img" src="<?php the_post_thumbnail_url() ?>" alt="">
                    <h2 class="nouvelles__titreCarte"><?php the_title() ?></h2>
                    <p class="nouvelles__paraCarte"><?php echo esc_html(get_field('previewnouvelle')); ?></p>
                </div>
				<?php endwhile ?>
            </div>
        </div>
    </section>
	<section class="services">
        <h1 class="services__titre">Services Offerts</h1>
        <!-- Slider main container -->
        <div class="swiper service__swipper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
				<?php while ($articleService->have_posts()) : $articleService->the_post(); ?>
                <div class="swiper-slide services__carte">
                    <div class="services__images" style="background-image: url('<?php the_post_thumbnail_url() ?>');" id="service1"></div>
                    <h2 class="services__nom"><?php the_title() ?></h2>
                    <p class="services__texte"><?php echo esc_html(get_field('previewservice')); ?></p>
                </div>
				<?php endwhile ?>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <br>
    </section>
	<section class="temoig">
    <h1 class="temoignages__titre">Témoignages</h1>
    <div class="temoignages">
        <br>
        <div class="temoignages__container">
		<?php while ($articleWitness->have_posts()) : $articleWitness->the_post(); ?>
            <div class="temoignages__carte temoignages__carte--1" >
                <img class="temoignages__image temoignages__image--1" src="<?php the_post_thumbnail_url() ?>">
                <h2 class="temoignages__nom"><?php the_title() ?></h2>
                <p class="temoignages__description"><?php the_content() ?></p>
            </div>
			<?php endwhile ?>
        </div>
        <br>
    </div>
	</section>
	<section class="membre">
        <div class="membre_container">
            <h1 class="membre__titre">Devenez Membre</h1>
            <p class="membre__description">Votre soutien nous donne une voie plus forte au sein du 
                gouvernement provincial et fédéral afin qu’ils prennent soin 
                de nos logements. La force que vous nous donnez en étant 
                membre de notre fédération nous a permis dans les dernières 
                années de faire avancer la cause des HLM de plusieurs 
                façons.</p>
            <button class="membre__bouton">Soutenir</button>
        </div>
        <br>
    </section>
<?php
	else : // Si URL est invalide
	// Montre la page 404
		get_template_part('partials/404');
		endif;
		// Affiche le footer
		get_footer();
?>