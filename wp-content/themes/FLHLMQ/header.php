<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

<header>
<div class="projet">
        <p class="projet__texte">Ceci est un travail scolaire. Cliquer sur le bouton pour visiter le site original.</p>
        <div class="popup-container projet__ButtonContainer">
            <button class="projet__OriginalSite" id="OriginalSite">Vrai Site</button>
            <button class="projet__ClosePopUp" id="ClosePopUp">X</button>
        </div>

    </div>

    <nav class="navbar navbar-dark navbar-expand-md">
        <div class="container navbar__collapse">
            
            
            <button class="navbar-toggler navbar__burger" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Affichage/masquage de la navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <!-- Hamburger button -->
            <!-- Navigation -->
<div id="mainNav" class="collapse navbar-collapse">


				<?php 
			// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
			wp_nav_menu( array( 
				'theme_location' => 'main-menu',
				'menu_class' => 'navbar-nav d-flex w-100 justify-content-between',
				'menu_id' => 'nav-menu', 
				'list_item_class' => 'nav-item',
				'link_item_class' => 'nav-link' ) );
		?>
   </div>         
            
        </div>
        <a class="navbar-brand navbar__logo" href="index.html"><a id="logo" href="<?php echo get_home_url(); ?>" class="nav-link navbar__logo">FLHLMQ</a></a>
        
        <p class="navbar__titre" >Fédération des locataires d’habitations à loyer modique du Québec</p>
        <div class="navbar__links">
            <p class="navbar__english">English</p>
            <p class="navbar__joindre">Nous-joindre</p>
            <button class="navbar__button">Soutenir</button>  
            <input class="navbar__search" type="text" placeholder="Rechercher...">
        </div>

        
        
        
        
    </nav>  
	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
		bloginfo( 'description' ); 
	?>
</header>

<main class="body"><!-- Débute le contenu principal de notre site -->
