<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
                <meta charset="UTF-8">
        <title>Accueil</title>
        <!--CSS -->
        <link rel="stylesheet" href="./CSS/main.css">
        <link rel="stylesheet" href="./CSS/footer.css">
        <link rel="stylesheet" href="./CSS/header.css"><
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

        <?php
        echo "<p> Voici la liste des différentes voitures : </p>";
        foreach ($tab_a as $a){
            $id = htmlspecialchars($a->getID());
            echo "<p> Article d'ID <a href='https://webinfo.iutmontp.univ-montp2.fr/~cornetl/projetPHP/index.php?action=readall'>$id</a></p>";
            //: <a href='../controller/router.php?action=delete&immat=$immat'>supprimer</a>
        }
      //  echo "<p> Voiture d'immatriculation <a href='../controller/routeur.php?action=read&immat=$immat'>$id</a>";
        ?>

    <main>
    </main>

    <footer id='footer'>

            <img src="./images/logo-FB.png" id="facebook">

            <a href="https://instagram.com/bond_drone?igshid=10nkl5ci5o03i" target="-blank"><img src="./images/Insta3.png" id="instagram"></a>

    </footer>
    </body>
</html>