<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Accueil</title>
        <!--CSS -->
        <!-- <link rel="stylesheet" href="./CSS/main.css">
        <link rel="stylesheet" href="./CSS/footer.css">
        <link rel="stylesheet" href="./CSS/header.css"> -->
        <style>
        <?php 
        include 'CSS/main.css';
        include 'CSS/footer.css';
        include 'CSS/header.css'; 
        ?>
        </style>
    </head>
    <body>
        <header id="header">
            <nav id="nav">

                <div class="items-nav">

                    <a href="acceuil.php"><img id="logo" src="./images/logo.png"></a>
                    <a href="contact.php">Contact</a>
                    <a href="equipe.php">Equipe</a>
                    <a href="presse.php">Presse</a>
                    <a href="nousrejoindre.php">Nous rejoindre</a>
                    <a href="faq.php">FAQ</a>

                </div>
            </nav>
            <hr>
        </header> 
    <main>
        <?php
        echo "<p> Liste des categories : </p>";

        foreach ($tab_c as $c){
            include 'CSS/main.css';
            $n = htmlspecialchars($c -> getNameCategorie());
            echo "<p style='text-align: center;'><a href='https://webinfo.iutmontp.univ-montp2.fr/~cornetl/projetPHP/index.php?action=readAllCategories' id='categories'>$n</a></p>";

        }
        ?>
    </main>

    <footer id='footer'>

            <img src="images/logo-FB.png" id="facebook">

            <a href="https://instagram.com/bond_drone?igshid=10nkl5ci5o03i" target="-blank"><img src="images/Insta3.png" id="instagram"></a>

    </footer>
    </body>
</html>