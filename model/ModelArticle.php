<?php

require_once(File::build_path(array("model","Model.php")));

class ModelArticle extends Model {

    private $name;
    private $categorie;
    private $id;  
    private $descr;
    private $image; 
    private $prix;

    protected static $object = 'article';
    protected static $primary = 'id';
    
    // un constructeur
  	public function __construct($id = NULL, $n = NULL, $c = NULL,  $im = NULL, $descr = NULL, $prix = NULL) {
  		if (!is_null($n) && !is_null($c) && !is_null($id) && !is_null($im) && !is_null($descr) && !is_null($prix)) {
		    $this->name = $n;
		    $this->categorie = $c;
		    $this->id = $id;
		    $this->image = $im;
		    $this->descr = $descr;
		    $this->prix = $prix;
  		}
	}

	public function save() {
        $pdo = Model::getPDO()->prepare('INSERT INTO article VALUES (:id, :name, :categorie, :image, :descr, :prix);');
        
        $values = array(
            "id" => $this->id,
            "name" => $this->name,
            "categorie" => $this->categorie,
            "image" => $this->image,
            "descr" => $this->descr,
            "prix" => $this->prix
        );
        $pdo->execute($values);
	}


	public  function delete($primary_value){
        	try {
				$primary_key = static::$primary;
				$table_name = static::$object;
				$class_name = 'Model'.ucfirst($table_name);

                $pdo = Model::getPDO();
                $sql = "DELETE FROM $table_name
                        WHERE $primary_key = :primary_value";
                $req_prep = $pdo->prepare($sql);
                $values = array(
                    "primary_value" => $primary_value,
                );
                $req_prep->execute($values);
               /* var_dump($req_prep);
                die;*/
            } catch (PDOException $e) {
                if (Conf::getDebug()) {
                    echo $e->getMessage(); // affiche un message d'erreur
                } else {
                    echo 'Une erreur est survenue <a href="> retour a la page d\'accueil </a>';
                }
                return false;
                die();
            }
        }
	/*public function delete() {
        $pdo = Model::getPDO()->prepare('DELETE FROM article WHERE id = ":id" AND name = ":name";');
        $values = array(
            "id" => $this->id,
            "name" => $this->name,
        );
        $pdo->execute($values);
	}*/

	public static function getDescByID($id) {
            $pdo = Model::getPDO();
            $rep = $pdo->query("SELECT descr FROM article WHERE id = '$id'");
            $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelArticle');
            $det = $rep->fetchAll();
          /*  var_dump($det, 'SELECT descr FROM article WHERE id = "$id"');
            die;*/
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

	public function  getDescr(){
		return $this -> descr;
	}

	public function getPrix(){
		return $this-> prix;
	} 
}
?>