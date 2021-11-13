<?php

require_once(File::build_path(array("model","Model.php")));

class ModelArticle {
   
    private $name;
    private $categorie;
    private $id;  
    private $image; 
    
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

  		}
	}

	public static function getAllArticle() {
	    	$pdo = Model::getPDO();
	    	$rep = $pdo->query("SELECT * FROM projetPHP_articles;");
	    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelArticle');
	    	$tab_art = $rep->fetchAll();
	    	return $tab_art;

	}

	public static function getArticleByName($name) {
	    $sql = "SELECT * from projetPHP_articles WHERE name='$name'"; 
	    $rep = Model::getPDO()->query($sql);
	    $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelArticle');
	    return $rep->fetch();
	}

	public function save() {
        $pdo = Model::getPDO()->prepare('INSERT INTO projetPHP_articles VALUES (:id, :name, :image, :categorie;');
        
        $values = array(
            "id" => $this->id,
            "name" => $this->name,
            "categorie" => $this->categorie,
            "image" => $this->image
        );
        $pdo->execute($values);
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

}
?>