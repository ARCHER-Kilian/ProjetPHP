
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
        <link rel="stylesheet" href="view/pages/CSS/main.css">
        <link rel="stylesheet" href="view/pages/CSS/footer.css">
        <link rel="stylesheet" href="view/pages/CSS/header.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body class="body">
    	<header class="header">
            <nav id="nav">

                <div class="items-nav">
                    <a href="index.php?action=readAllArticle"><img id="logo" src="view/pages/images/Manettelogo.png"></a>
                    <a href="index.php?action=contact">Contact</a>
                    <a href="index.php?action=FAQ">FAQ</a>
                    <a href="index.php?action=signIn">Sign In</a>
                    <a href="index.php?action=monCompte">Mon Compte</a>
                    <a href="index.php?action=readPanier"><img class="imgCart" src="view/pages/images/Kartgreen.png" class="cart" aria-label="View cart"></a>
                </div>
            </nav>
        </header>
        <main class="main">
            <hr>
            <div class="separationhr">
    		<?php
    		// Si $controleur='voiture' et $view='list',
    		// alors $filepath="/chemin_du_site/view/voiture/list.php"
    		$filepath = File::build_path(array("view", $controller, "$view.php"));
    		require $filepath;
    		?>
            </div>
        </main>
        <footer class="footer">
             <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Notre Entreprise</h4>
                        <ul>
                            <li><a href="#">Qui sommes nous?</a></li>
                            <li><a href="#">Nos services</a></li>
                            <li><a href="#">Politique de confidentialitÃ©</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Besoin d'aide?</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Retours</a></li>
                            <li><a href="#">Vos commandes</a></li>
                            <li><a href="#">Options de payment</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Achat en ligne</h4>
                        <ul>
                            <li><a href="#">Tour Gaming</a></li>
                            <li><a href="#">Souris Gaming</a></li>
                            <li><a href="#">Clavier Gaming</a></li>
                            <li><a href="#">Autres...</a></li>
                        </ul>
                    </div>
                    <div class="logo">
                        <img src="view/pages/images/logo-FB.png" id="facebook">
                        <a href="https://instagram.com/rgb_tek" target="-blank"><img src="view/pages/images/Insta3.png" id="instagram"></a>
                    </div>
                
        </div>
     </div>
  </footer>
    </body>
</html>


