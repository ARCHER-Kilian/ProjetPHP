
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
        <link rel="stylesheet" href="view/pages/CSS/main.css">
        <link rel="stylesheet" href="view/pages/CSS/footer.css">
        <link rel="stylesheet" href="view/pages/CSS/header.css">
    </head>
    <body class="body">
    	<header class="header">
            <nav id="nav">

                <div class="items-nav">
                    <a href="index.php?action=readAllArticle"><img id="logo" src="view/pages/images/logo.png"></a>
                    <a href="index.php?action=contact">Contact</a>
                    <a href="index.php?action=FAQ">FAQ</a>
                    <a href="index.php?action=signIn">Sign In</a>
                    <a href="index.php?action=monCompt">Mon Compt</a>
                    <img class="imgCart" src="view/pages/images/Kartgreen.png" href="index.php?action=panier" class="cart" aria-label="View your shopping cart">
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
    </body>
     <footer id='footer'>

            <img src="view/pages/images/logo-FB.png" id="facebook">

            <a href="https://instagram.com/rgb_tek" target="-blank"><img src="view/pages/images/Insta3.png" id="instagram"></a>

    </footer>
</html>


