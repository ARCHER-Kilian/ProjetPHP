<?php
require_once(File::build_path(array("model","ModelArticle.php")));

class ControllerArticle {

	protected static $object = 'article';

	public static function readAllArticle() {
	    $tab_a = ModelArticle::selectAll();     //appel au modèle pour gerer la BD
	    $controller='pages';
	    $view='acceuil';
	    $pagetitle='Liste des Articles';
	    /*require_once("/home/ann2/cornetl/public_html/ProjetPHP/lib/../view/view.php");*/
	  /*  var_dump(File::build_path(array("view")));
	    die();*/
	    require_once(File::build_path(array("view","view.php")));
  //"redirige" vers la vue
	}

	public static function readDesc() {
	    $controller='pages';
	    $view='detail';
	    $pagetitle='Detail Article';
	    require_once(File::build_path(array("view","view.php")));

	}




	public static function contact() {
	    $tab_a = ModelArticle::selectAll();     //appel au modèle pour gerer la BD
	    $controller='pages';
	    $view='contact';
	    $pagetitle='Contacter nous';
	    /*require_once("/home/ann2/cornetl/public_html/ProjetPHP/lib/../view/view.php");*/
	  /*  var_dump(File::build_path(array("view")));
	    die();*/
	    require_once(File::build_path(array("view","view.php")));
  //"redirige" vers la vue
	}

	public static function FAQ() {
	    $tab_a = ModelArticle::selectAll();     
	    $controller='pages';
	    $view='faq';
	    $pagetitle='FAQ';
	    require_once(File::build_path(array("view","view.php")));
	}

	public static function signIn() {
	    $tab_a = ModelArticle::selectAll();     
	    $controller='pages';
	    $view='SignIn';
	    $pagetitle='Sign In';
	    require_once(File::build_path(array("view","view.php")));
	}

	public static function monCompte() {
	    $tab_a = ModelArticle::selectAll();     
	    $controller='pages';
	    $view='monCompt';
	    $pagetitle='Mon Compte';
	    require_once(File::build_path(array("view","view.php")));
	}

	public static function readPanier() {
	    $tab_a = ModelArticle::selectAll();     
	    $controller='pages';
	    $view='panier';
	    $pagetitle='Mon Panier';
	    require_once(File::build_path(array("view","view.php")));
	}

	public static function ajoutPanier() {
	    $tab_a = ModelArticle::selectAll();     
	    $controller='pages';
	    $view='ajoutPanier';
	    $pagetitle='Mon Panier';
	    require_once(File::build_path(array("view","view.php")));
	}

	public static function error(){ // Erreur de base
		$tab_a = ModelArticle::selectAll();  
		$controller='pages/erreur';
        $view = 'erreurActionNonExistante';
        $pagetitle = "Page d'erreur";
        require (File::build_path(array("view","","view.php"))); // On affiche la page d'erreur de base 
    }

    public static function create(){ // Creation d'une voiture
    $view = 'update';
    $pagetitle = "Création d'une voiture";
    $path_array = array('view/view.php');
    require (File::build_Path($path_array));
	}

    public static function created(){ // Voiture créée 
      	$immat = $_POST['name'];
        $marque = $_POST['categorie'];
        $id = $_POST['id'];
        $image = $_POST['image'];
        $desc = $_POST['desc'];
        $prix = $_POST['prix'];
        $article = new ModelArticle($name, $categorie, $id, $image, $desc, $prix);
        $test = $article->save();
        if ($test === false){
        	$view = 'erreur/erreurCreated';
        	$pagetitle = "Erreur création d'un Article";
        	$path_array = array('view/view.php');
            require File::build_Path($path_array);

        } else {
            $view = 'created';
            $pagetitle = 'Article créée';
           	$path_array = array('view/view.php');
            require (File::build_Path($path_array));  
        }
    }

    public static function update(){ // Mise a jour d'une voiture
	    $immat=$_GET['id'];
	    $article = ModelArticle::select($id);
	    if ($article === false){
	        $view = 'erreur/erreurUpdate';
	        $pagetitle = "Erreur creation formulaire de modification d'un article";
	        $path_array = array('view/view.php');
	        require (File::build_Path($path_array)); // On affiche la page errorUpdate
	    } else {
	        $view = 'update';
	        $pagetitle = "Modification d'une article";
	        $path_array = array('view/view.php');
	        require (File::build_Path($path_array)); // On affiche la page update
	    }
    }


    public static function updated(){ // On a mis a jour une voiture
        $data = array(
	           	'immat' => $_POST['name'],
		        'marque' => $_POST['categorie'],
		        'id' => $_POST['id'],
		        'image' => $_POST['image'],
		        'desc' => $_POST['desc'],
		        'prix' => $_POST['prix'],
            );
        $test = ModelArticle::update($data);
        if ($test === false){
            $view = 'error/errorUpdated';
            $pagetitle = "Erreur modification d'un Article";
            $path_array = array('view/view.php');
            require File::build_Path($path_array); // On affiche la vue errorUpdated

        } else {
            $view = 'updated';
            $pagetitle = 'Article modifiée';
            $path_array = array('view/view.php');
            require (File::build_Path($path_array)); // On affiche la vue updated  
            }
        }
}
// Ce code me semble assez similaire au code de l'ancien fichier voiture.php, cependant il est mieu organisé et les methodes qui touchent l'affichage sont gerer par les controlleurs et  liste.
?>

<!-- File::build_path(array("view",$controller ,"$view.php")) -->