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

	public static function readAdmin() {
	    $tab_a = ModelArticle::selectAll();     //appel au modèle pour gerer la BD
	    $controller='pages';
	    $view='acceuilAdmin';
	    $pagetitle='Liste des Articles';
	    require_once(File::build_path(array("view","view.php")));
	}

	public static function readCart() {
	    $tab_a = ModelArticle::selectAll();     //appel au modèle pour gerer la BD
	    $controller='pages';
	    $view='panier';
	    $pagetitle='Panier';
	    require_once(File::build_path(array("view","view.php")));
	}

	public static function readDescr() {
		$id = $_GET['id'];
		$tab_d = ModelArticle::getDescByID($id);
	    $controller='pages';
	    $view='detail';
	    $pagetitle='Detail Article';
	    require_once(File::build_path(array("view","view.php")));

	}

	public static function ajoutPanier() {
	    $tab_a = ModelArticle::selectAll();     
	    $controller='pages';
	    $view='ajoutPanier';
	    $pagetitle='Mon Panier';
	    require_once(File::build_path(array("view","view.php")));
	}


	public static function readDescrByID($id) {

		
		$tab_d = ModelArticle::getDescr();
	    $controller='pages';
	    $view='detail';
	    $pagetitle='Detail Article';
	    require_once(File::build_path(array("view","view.php")));

	}


	public static function connect(){ 
            $view = 'connect';
            $pagetitle = "Connexion";
	    	$controller='pages';
            $path_array = array('view/view.php');
            require (File::build_Path($path_array));
        }

    public static function TOC(){ 
            $view = 'TermsAndConditions';
            $pagetitle = "TOC";
	    	$controller='pages';
            $path_array = array('view/view.php');
            require (File::build_Path($path_array));
        }

    public static function erreurConnect(){ 
            $view = 'erreurConnexion';
            $pagetitle = "Erreur Connexion";
	    	$controller='pages/erreur';
            $path_array = array('view/view.php');
            require (File::build_Path($path_array));
        }

    public static function connected(){ 
            $view = 'connected';
            $pagetitle = "Connecté";
	    	$controller='pages';
            $path_array = array('view/view.php');
            require (File::build_Path($path_array));
        }

    public static function logout(){ 
            $view = 'logout';
            $pagetitle = "acceuil";
	    	$controller='pages';
            $path_array = array('view/view.php');
            require (File::build_Path($path_array));
        }

    public static function signUp(){ 
            $view = 'inscription';
            $pagetitle = "Inscription";
	    	$controller='pages';
            $path_array = array('view/view.php');
            require (File::build_Path($path_array));
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


	public static function error(){ // Erreur de base
		$tab_a = ModelArticle::selectAll();  
		$controller='pages/erreur';
        $view = 'erreurActionNonExistante';
        $pagetitle = "Page d'erreur";
        require (File::build_path(array("view","","view.php"))); // On affiche la page d'erreur de base 
    }

    public static function ajoutArticle(){ // Creation d'une voiture
    $controller='pages';
    $view = 'ajoutArticle';
    $pagetitle = "Création d'une voiture";
    $path_array = array('view/view.php');
    require (File::build_Path($path_array));
	}

	public static function deleteArticle(){ // Creation d'une voiture
    $controller='pages';
    $view = 'deleteArticle';
    $pagetitle = "Création d'une voiture";
    $path_array = array('view/view.php');
    require (File::build_Path($path_array));
	}

    public static function createdA(){ 
    	$id = $_POST['idArt'];
      	$n = $_POST['name'];
        $cat = $_POST['CAT'];
        $image = $_POST['IMG'];
        $desc = $_POST['Desc'];
        $prix = $_POST['Prix'];
        $article = new ModelArticle($id, $n, $image, $cat, $prix, $desc);
        $test = $article->save();
        $controller='pages';
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

      public static function createdU(){
                                // Utilisateur créé
                $idU = $_POST['id'];
                $nomU = $_POST['nom'];
                $prenomU = $_POST['prenom'];
                $mdpU = $_POST['mdp'];
                $numtelU = $_POST['numtel'];
                $emailU = $_POST['email'];
                $adpoU = $_POST['adpo'] ;

            $utilisateur = new ModelUtilisateur($idU, $nomU, $prenomU, $mdpU, $numtelU, $emailU, $adpoU);
            $test = $utilisateur->save();
             $controller='pages';
            if ($test === false){
                $view = 'erreur/erreurCreated';
                $pagetitle = "Erreur création d'un utilisateur";
                $path_array = array('view/view.php');
                require File::build_Path($path_array); // On affiche la vue errorCreated

            } else {
                $view = 'inscris';
                $pagetitle = 'Utilisateur créé';
                $path_array = array('view/view.php');
                require (File::build_Path($path_array)); // On affiche la vue created 
                
            }
        }

    public static function deleted(){ 
    	$id = $_POST['idArt'];
      	$n = $_POST['name'];
        $article = new ModelArticle($id, $n);
        $test = $article->delete($id);
        $controller='pages';
        if ($test === false){
        	$view = 'erreur/erreurDeleted';
        	$pagetitle = "Erreur delete d'un Article";
        	$path_array = array('view/view.php');
            require File::build_Path($path_array);

        } else {
            $view = 'deleted';
            $pagetitle = 'Article suprimé';
           	$path_array = array('view/view.php');
            require (File::build_Path($path_array));  
        }
    }

    public static function update(){ 
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


    public static function updated(){ 
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