<?php 
/**
 * 	Template Name: Team
 * Template Post Type: post, page, product, membre
 * 	Identique à page, mais avec une barre latérale
 */

// Alexandre
get_header(); // Affiche header.php?>
<div class="team">
        <div class="savior">
            <div class="savior__hero">
                <div class="savior__icon">
                  <img src="<?php bloginfo('template_url'); ?>/images/team.png" alt="">  
                </div>
                <h2 class="savior__title">Équipe de la FLHLMQ</h2>
            </div>
        </div>
        <h1 class="team__title">Équipe</h1>
        <hr>
        <div class="team__members">
		<?php
if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
	$member = array(
		'orderby' => array(
			// Ordonne le tableau par les nouvelles les plus récentes d'abord.
			'date' => 'ASC',
		),
		// collecte les post types des nouvelles
		'post_type' => 'membre',
	);
	$article = new WP_Query($member);
	?>
            <div class="card__member">
                <div class="card__member__image card__member__image--robert" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
                <p class="card__member__description"><?php the_title() ?>, <?php the_content() ?></p>
            </div>
			<?php endwhile ?>
        </div>
    </div>
<?php
else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>