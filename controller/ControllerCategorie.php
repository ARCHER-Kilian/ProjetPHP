<?php
require_once(File::build_path(array("model","ModelCategorie.php")));

class ControllerCategorie {

	public static function readAllCategories() {
	    $tab_c = ModelCategorie::getAllCategories();     //appel au modèle pour gerer la BD
		require_once(File::build_path(array("view","pages","acceuil.php")));
  //"redirige" vers la vue
	}
}


// Ce code me semble assez similaire au code de l'ancien fichier voiture.php, cependant il est mieu organisé et les methodes qui touchent l'affichage sont gerer par les controlleurs et  liste.
?>