<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer class="footer">
<div class="footer__pages">
<?php 
			// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
			wp_nav_menu( array( 
				'theme_location' => 'main-menu',
				'menu_class' => 'navbar-nav d-flex w-100 justify-content-between',
				'menu_id' => 'nav-menu', 
				'list_item_class' => 'nav-item',
				'link_item_class' => 'nav-link' ) );
		?>
        <!--<a href="" class="footer__item">Accueil</a>
        <a href="" class="footer__item">Nouvelles</a>
        <a href="" class="footer__item">Services</a>
        <a href="" class="footer__item">Équipes</a>
        <a href="" class="footer__item">FAQ</a>-->
    </div>
    <div class="footer__coordonnees">
        <p class="footer_item">- Nous joindre</p>
        <p class="footer_item">- Par téléphone :<br>(514) 521-1485<br>1-(800) 566-9662</p>
        <p class="footer_item">- Par courriel :<br>info@flhlmq.com</p>
        <p class="footer_item">- Par télécopieur :<br>(514) 521-6444</p>
    </div>
    <div class="footer__plus">
        <p class="footer__logo">FLHLMQ</p>
        <p class="footer__item">- Par la poste :<br>2520, av. Lionel-Groulx<br>local 202<br>Montréal, Québec<br>H3J 1J8</p>
        <button class="footer__button">Soutenir</button>
        <p class="footer__item"><a href=""></a><a href=""><a href=""></a><a href=""></a></p>
    </div>
    <div class="footer__copyright">
        <p><?php echo get_bloginfo( 'name' ); ?> -  @<?php the_time('Y'); ?> - Programmeur du Sous-sol</p>
    </div>
<p></p>
</footer>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
