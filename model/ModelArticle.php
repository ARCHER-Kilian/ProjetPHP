<?php

require_once(File::build_path(array("model","Model.php")));

class ModelArticle extends Model {

	protected static $object = 'article';
   
    private $name;
    private $categorie;
    private $id;  
    private $image; 
    private $desc;
    private $prix;
    
    // un constructeur
  	public function __construct($m = NULL, $c = NULL, $i = NULL) {
  		if (!is_null($m) && !is_null($c) && !is_null($i)) {
		    // Si aucun de $m, $c et $i sont nuls,
		    // c'est forcement qu'on les a fournis
		    // donc on retombe sur le constructeur à 3 arguments
		    $this->name = $n;
		    $this->categorie = $c;
		    $this->id = $id;
		    $this->image = $im;
		    $this->desc = $desc;
		    $this->prix = $prix;
  		}
	}

	public function save() {
        $pdo = Model::getPDO()->prepare('INSERT INTO $object VALUES (:id, :name, :categorie, :image, :desc, :prix;');
        
        $values = array(
            "id" => $this->id,
            "name" => $this->name,
            "categorie" => $this->categorie,
            "image" => $this->image,
            "desc" => $this->desc,
            "prix" => $this->prix
        );
        $pdo->execute($values);
	}

	public function getDetailArticle($id) {
        $pdo = Model::getPDO();
	    	$rep = $pdo->query("SELECT detail FROM $object");
	    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelCategorie');
	    	$det = $rep->fetchAll();
	    	return $det;

	}



	public function  getID(){
		return $this -> id;
	}

	public function  getName(){
		return $this -> name;
	}
	public function  getImage(){
		return $this -> image;
	}
	
	public function  getcategorie(){
		return $this -> categorie;
	}

	public function  getDesc(){
		return $this -> desc;
	}

	public function getPrix(){
		return $this-> prix;
	} 

	

}
?>