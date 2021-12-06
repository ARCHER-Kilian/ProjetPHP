<?php
    $model_path_array = array('lib/File.php');
    require_once File::build_Path($model_path_array);
    $model_path_array = array('model/ModelUtilisateur.php');
    require_once File::build_Path($model_path_array); // chargement du modèle

    class ControllerUtilisateur{

        protected static $object = 'utilisateur';

        public static function readAll(){
            $tab_a = ModelUtilisateur::selectAll();
            $controller='pages';
            $view='utlisateur';
            $pagetitle='Liste des Utilisateur';
            require_once(File::build_path(array("view","view.php")));
        }

        public static function read(){
            $login = $_GET['login'];
            $utilisateur = ModelUtilisateur::select($login);
            if ($utilisateur === false){
                $view = 'erreur/erreurDetail';
                $pagetitle = "Error sur detail de l'utilisateur";
                $path_array = array('view/view.php');
                require (File::build_Path($path_array)); // On affiche la page errorDetail
            } else {
                $view = 'detail';
                $pagetitle = "Détails de l'utilisateur";
                $path_array = array('view/view.php');
                require (File::build_Path($path_array)); // On affiche la page detail
            }
        }

        public static function connect(){ // Creation d'un utilisateur
            $view = 'connect';
            $controller='pages';
            $pagetitle = "Connexion";
            $path_array = array('view/view.php');
            require (File::build_Path($path_array));
        }

        public static function connected(){ // Creation d'un utilisateur
            $view = 'connected';
            $controller='pages';
            $pagetitle = "Connecté";
            $path_array = array('view/view.php');
            require (File::build_Path($path_array));
        }

         public static function create(){ // Creation d'un utilisateur
            $view = 'update';
            $pagetitle = "Création d'un utilisateur";
            $path_array = array('view/view.php');
            require (File::build_Path($path_array));
        }

        public static function createdU(){ // Utilisateur créé
            $data = array(
                "id" => $_POST['id'],
                "nom" => $_POST['nom'],
                "prenom" => $_POST['prenom'],
                "mdp" => $_POST['mdp'],
                "numtel" => $_POST['numtel'],
                "email" => $_POST['enmail'],
                "adressePostale" => $_POST['adressePostale'],
            );
            $utilisateur = new ModelUtilisateur($data['id'], $data['nom'], $data['prenom'], $data['mdp'], $data['numtel'], $data['email'], $data['adressePostale']);
            $test = $utilisateur->save();
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

        public static function update(){ // Mise a jour d'un utilisateur
            $login=$_GET['login'];
            $utilisateur = ModelUtilisateur::select($login);
            if ($utilisateur === false){
                $view = 'erreur/erreurUpdate';
                $pagetitle = "Erreur creation formulaire de modification d'un utilisateur";
                $path_array = array('view/view.php');
                require (File::build_Path($path_array)); // On affiche la page errorUpdate
            } else {
                $view = 'update';
                $pagetitle = "Modification d'un utilsateur";
                $path_array = array('view/view.php');
                require (File::build_Path($path_array)); // On affiche la page update
            }
        }

        public static function updated(){ // On a mis a jour un utilisateur
            $data = array(
                'login' => $_POST['login'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
            );
            $test = ModelUtilisateur::update($data);
            if ($test === false){
                $view = 'erreur/erreurUpdated';
                $pagetitle = "Erreur modification d'un utilisateur";
                $path_array = array('view/view.php');
                require File::build_Path($path_array); // On affiche la vue errorUpdated

            } else {
                $view = 'updated';
                $pagetitle = 'Utilisateur modifié';
                $path_array = array('view/view.php');
                require (File::build_Path($path_array)); // On affiche la vue updated
                
            }
        }

        public static function delete(){
            $login = $_GET['login'];
            $test = ModelUtilisateur::delete($login);
            if ($test === false){
                $view = 'erreur/erreurDeleted';
                $pagetitle = "Erreur suppression d'un utilisateur";
                $path_array = array('view/view.php');
                require (File::build_Path($path_array)); // On affiche la page errorDeleted
            } else {
                $view = 'deleted';
                $pagetitle = "Suppression d'un utilisateur";
                $path_array = array('view/view.php');
                require (File::build_Path($path_array)); // On affiche la page deleted
            }
        }

        public static function error(){ // Erreur de base
            $view = 'erreur';
            $pagetitle = "Page d'erreur";
            $path_array = array('view/view.php');
            require (File::build_Path($path_array)); // On affiche la page d'erreur de base 
        }

    }

?>