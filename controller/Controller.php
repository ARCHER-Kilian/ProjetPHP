<?php
require_once(File::build_path(array("model","ModelCategorie.php")));
require_once(File::build_path(array("model","ModelArticle.php")));

class Controller {

	public static function readAllCategories() {
	    ControllerArticle::getAllArticle();
  //"redirige" vers la vue
	}

	public static function readAllArticle() {
	    	ControllerArticle::getAllArticle();

	}

		public static function readArticle() {
	    $tab_a = ModelArticle::getArticleByName();     //appel au modèle pour gerer la BD
		require_once(File::build_path(array("view","pages","description.php")));
  //"redirige" vers la vue
	}
}


// Ce code me semble assez similaire au code de l'ancien fichier voiture.php, cependant il est mieu organisé et les methodes qui touchent l'affichage sont gerer par les controlleurs et  liste.
?>