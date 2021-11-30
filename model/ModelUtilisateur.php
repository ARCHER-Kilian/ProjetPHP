<?php
    require_once "Model.php";

    class ModelUtilisateur extends Model{

        private $login;
        private $nom;
        private $prenom;
        private $mdp;
        private $numtel;
        private $email;
        private $adressePostale;
        private $panier;
        private $commande;


        protected static $object = 'utilisateur';
        protected static $primary = 'login';
        
        public function getLogin(){
            return $this->login;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getMDP(){
            return $this->mdp;
        }

        public function getNumtel(){
            return $this->numtel;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getAdressePostale(){
            return $this->adressePostale;
        }


        public function getPanier(){
            return $this->panier;
        }

        public function getCommande(){
            return $this->commande;
        }

        public function setLogin($l){
            $this->login = $l;
        }

        public function setNom($n){
            $this->nom = $n ;
        }

        public function setPrenom($p){
            $this->prenom = $p;
        }

        public function setMDP($mdp){
            $this->mdr = $mdp;
        }

        public function setNumtel($nt){
            $this->numtel = $nt;
        }

        public function setEmail($e){
            $this->email = $e;
        }

        public function setAdressePostale($ap){
            $this->adressePostale = $ap;
        }

        public function setCommande($c){
            $this->commande = $c;
        }

        public function setPanier($pa){
            $this->panier = $pa;
        }

        public function __construct($l = NULL, $n = NULL , $p = NULL){
            if (!is_null($l) && !is_null($n) && !is_null($p) && !is_null($mdp) && !is_null($nt) && !is_null($e) && !is_null($ap) && !is_null($pa) && !is_null($c)){

                $this->login = $l;
                $this->nom = $n;
                $this->prenom = $p;
                $this->mdp = $mdp;
                $this->numtel = $nt;
                $this->email = $e;
                $this->adressePostale = $ap;
                $this->panier = $pa;
                $this->commande = $c;
            }
        }

    // une methode d'affichage.

        public function afficher(){
            echo "<p> L'utilisateur a pour login $this->login et il se nomme $this->nom $this->prenom</p>";

        }

        public function toArray(){
            $data = array(

                "login" => $this->getLogin(),
                "nom" => $this->getNom(),
                "prenom" => $this->getPrenom(),
                "mdp" => $this->getMDP(),
                "numtel" => $this->getNumtel(),
                "email" => $this->getEmail(),
                "adressePostale" => $this->getAdressePostale(),
                "panier" => $this->getPanier(),
                "commande" => $this->getCommande(),
            );
            var_dump(data);
            return $data;
        }

    }
?>