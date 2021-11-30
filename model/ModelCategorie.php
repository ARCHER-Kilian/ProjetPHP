<?php

require_once(File::build_path(array("model","Model.php")));

class ModelCategorie {
   
    private $cat_name;
    private $id;  

    
    // un constructeur
  	public function __construct($m = NULL, $c = NULL, $i = NULL) {
  		if (!is_null($m) && !is_null($c) && !is_null($i)) {
		    // Si aucun de $m, $c et $i sont nuls,
		    // c'est forcement qu'on les a fournis
		    // donc on retombe sur le constructeur à 3 arguments
		    $this->cat_name = $cn;
		    $this->id = $id;

  		}
	}

	public static function getAllCategories() {
	    	$pdo = Model::getPDO();
	    	$rep = $pdo->query("SELECT * FROM categorie");
	    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelCategorie');
	    	$tab_c = $rep->fetchAll();
	    	return $tab_c;

	}

	public static function getCategorieByName($name) {
	    $sql = "SELECT * from categorie WHERE cat_name='$name'"; 
	    $rep = Model::getPDO()->query($sql);
	    $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelCategorie');
	    return $rep->fetch();
	}

	public function saveCategorie() {
        $pdo = Model::getPDO()->prepare('INSERT INTO categorie VALUES (:id, :cat_name;');
        
        $values = array(
            "id" => $this->id,
            "name" => $this->cat_name,
        );
        $pdo->execute($values);
	}

	public function  getID(){
		return $this -> id;
	}

	public function  getNameCategorie(){
		return $this -> cat_name;
	}

}