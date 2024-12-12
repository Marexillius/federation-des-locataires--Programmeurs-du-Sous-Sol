<?php 
/**
 * 	Template Name: Contact
 * Template Post Type: post, page, product
 * 	Identique à page, mais avec une barre latérale
 */

// Alexandre
get_header(); // Affiche header.php
if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); ?>
<div class="contact">
        <h2><?php the_title() ?></h2>
        <p class="contact__smalltalk">
		<?php the_field('contactsoustitre'); ?>
        </p>
        <div class="contact__phone">
            <h4 class="contact__text">Par téléphone : </h4>
            <p class="contact__info"><?php the_field('contactphone'); ?></p>
        </div>
        <div class="contact__telecopieur">
            <h4 class="contact__text">Par télécopieur :</h4>
            <p class="contact__info"><?php the_field('contactcopieur'); ?></p>      
        </div>
        <div class="contact__poste">
            <h4 class="contact__text">Par la poste :</h4>
            <p class="contact__info"><?php the_field('contactposte'); ?>
            </p>           
        </div>
        <div class="contact__email">
            <h4 class="contact__text">Par courriel :</h4>
            <p class="contact__info">
                <a href="mailto:info@flhlmq.com"><?php the_field('postemail'); ?></a>
            </p>    
        </div>
        <div class="form">
            <h2>Envoyez-nous un message</h2>
            <form action="post">
                <div class="form__info">
                <input class="form__name" type="text" placeholder="Nom complet">
                <input class="form__mail" type="email" placeholder="Courriel">                    
                </div>
                <textarea class="form__message" type="text" placeholder="Message"></textarea>
                <input class="form__submit" type="submit" value="Envoyer">
            </form>
        </div>
    </div>
	<?php endwhile ?>
<?php
else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>