<?php
    require_once "Model.php";

    class ModelUtilisateur extends Model{

        private $id;
        private $nom;
        private $prenom;
        private $mdp;
        private $numtel;
        private $email;
        private $adressePostale;


        protected static $object = 'utilisateur';
        protected static $primary = 'id';
        
        public function getID(){
            return $this->id;
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

        public function setID($id){
            $this->login = $id;
        }

        public function setNom($n){
            $this->nom = $n;
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

        public function __construct($id = NULL, $n = NULL , $p = NULL, $mdp = NULL, $nt = NULL, $e = NULL, $ap = NULL){
            if (!is_null($id) && !is_null($n) && !is_null($p) && !is_null($mdp) && !is_null($nt) && !is_null($e) && !is_null($ap)){

                $this->id = $id;
                $this->nom = $n;
                $this->prenom = $p;
                $this->mdp = $mdp;
                $this->numtel = $nt;
                $this->email = $e;
                $this->adressePostale = $ap;
            }
        }

    // une methode d'affichage.

        public function afficher(){
            echo "<p> L'utilisateur a pour id $this->id et il se nomme $this->nom $this->prenom</p>";

        }

        public static function getAllID() {
            $pdo = Model::getPDO();
            $rep = $pdo->query("SELECT id FROM utilisateur");
            $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
            $det = $rep->fetchAll();
          /*  var_dump($det, 'SELECT descr FROM article WHERE id = "$id"');
            die;*/
            return $det;
    }

        public static function getAllName() {
            $pdo = Model::getPDO();
            $rep = $pdo->query("SELECT name FROM utilisateur");
            $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
            $det = $rep->fetchAll();
          /*  var_dump($det, 'SELECT descr FROM article WHERE id = "$id"');
            die;*/
            return $det;
    }

    public function save() {
        $pdo = Model::getPDO()->prepare('INSERT INTO utilisateur VALUES (:idU, :nomU, :prenomU, :mdpU, :numtelU, :emailU, :adressePostaleU);');
        
        $values = array(
                "idU" => $this->id,
                "nomU" => $this->nom,
                "prenomU" => $this->prenom,
                "mdpU" => $this->mdp,
                "numtelU" => $this->numtel,
                "emailU" => $this->email,
                "adressePostaleU" => $this->adressePostale,
        );
        $pdo->execute($values);
    }

        public function toArray(){
            $data = array(

                "id" => $this->getid(),
                "nom" => $this->getNom(),
                "prenom" => $this->getPrenom(),
                "mdp" => $this->getMDP(),
                "numtel" => $this->getNumtel(),
                "email" => $this->getEmail(),
                "adressePostale" => $this->getAdressePostale(),
            );
            var_dump($data);
            return $data;
        }

    }
?>