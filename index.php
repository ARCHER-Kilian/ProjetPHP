<?php

session_start();

$DS = DIRECTORY_SEPARATOR;
$ROOT_FOLDER = __DIR__;
require_once ($ROOT_FOLDER . $DS . "lib" . $DS . "File.php");
require_once(File::build_path(array("controller","routeur.php")));
?>

<!-- Notes -->

<!-- On utilisera les sessions pour le panier (stoké sur le serveur et sous format texte, donc pas secure) -->

<!-- Un seul set cookie prend en comt un seul parametre, mais on peut aussi en instancier plusieur avec le nom prenom et mdp(avec un hacher pour la BD) -->


