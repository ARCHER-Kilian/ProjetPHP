<?php
require_once(File::build_path(array("config","Conf.php")));

class Model {

    private static $pdo = NULL;


     private static function init() {
         $hostname = Conf::getHostname();
         $database_name = Conf::getDatabase();
         $login = Conf::getLogin();
         $password = Conf::getPassword();

         try{
   		 self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
                 	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
   		 self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   	 	}
   		catch (PDOException $e) {
   	  		if (Conf::getDebug()) {
   	 			echo $e->getMessage(); // affiche un message d'erreur
   	   		} else {
   	 			echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
   	  		}
   	   		die();
   	 	}
     }


     public static function getPDO() {
         if (is_null(self::$pdo));
        	 self::init();
     	return self::$pdo;
     }

     static public function selectAll(){ // Renvoie tous les éléments de la table 
      try {
        $table_name = static::$object;
        $class_name = 'Model' . ucfirst(static::$object);
        $rep = Model::getPDO()->query("SELECT * FROM $table_name");
        $rep->setFetchMode(PDO::FETCH_CLASS, "$class_name");
        $tab = $rep->fetchAll();
        return $tab;
      } catch (PDOException $e) {
                if (Conf::getDebug()) {
                    echo $e->getMessage(); // affiche un message d'erreur
                } else {
                    echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
                }
                die();
            }
        }

    static public function select($primary_value) {
      try{
        $primary_key = static::$primary;
        $table_name = static::$object;
        $class_name = 'Model' . ucfirst($table_name);

        $sql = "SELECT * from $table_name WHERE $primary_key=:primary_value";
        $req_prep = Model::getPDO()->prepare($sql);
        $values = array(
          "primary_value" => $primary_value,
        );   
        $req_prep->execute($values);
        $req_prep->setFetchMode(PDO::FETCH_CLASS, "$class_name");
        $tab = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab))
          return false;
        return $tab[0];
      } catch (PDOException $e){
        if (Conf::getDebug()){
          echo $e->getMessage(); // affiche un message d'erreur
        } else {
          echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
        }
        die();
      }
        }

    public function save(){       
            try {
        $primary_key = static::$primary;
        $table_name = static::$object;
        $values = array();
        $sql = "INSERT INTO $table_name (";
        $data = $this->toArray();

          foreach ($data as $key => $value) {
            $sql = $sql . "$key, ";

          }

        $sql = rtrim($sql);
        $sql = rtrim($sql, ',');
        $sql = $sql . ") VALUES (";

          foreach ($data as $key => $value) {
            $sql = $sql . ":$key, ";
            $values[$key] = $value;
          }

        $sql = rtrim($sql);
        $sql = rtrim($sql, ',');
        $sql = $sql . ');';
        var_dump($sql);
        $pdo = Model::getPDO();
                $req_prep = $pdo->prepare($sql);
                $req_prep->execute($values);
                //$sql = "INSERT INTO voiture (immatriculation, marque, couleur) VALUES ($this->, :nom_tag2, :nom_tag3)";
                
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


    public static function update($data){
            try {
        $table_name = static::$object;
        $primary_key = static::$primary;

        $sql = "UPDATE $table_name SET ";
        $values = array();
                foreach ($data as $key => $value) {
                  $sql = $sql . "$key = :$key, ";
                  $values[$key] = $value;
        }
        $sql = rtrim($sql);
        $sql = rtrim($sql, ',');
        $sql = $sql . " ";
        $sql = $sql . "WHERE $primary_key = :primary_value;";
        $values["primary_value"] = $data[$primary_key]; 
                $pdo = Model::getPDO();
                $req_prep = $pdo->prepare($sql);
                $req_prep->execute($values);
            } catch (PDOException $e){
                if (Conf::getDebug()){
                    echo $e->getMessage();
                } else {
                    echo 'Une erreur est survenue <a href="> retour a la page d\'accueil </a>';
                }
                return false;
                die();
            }
            
        }


    public static function delete($primary_value){
            try {
        $primary_key = static::$primary;
        $table_name = static::$object;
        $class_name = 'Model' . ucfirst($table_name);

                $pdo = Model::getPDO();
                $sql = "DELETE FROM $table_name
                        WHERE $primary_key = :primary_value";
                $req_prep = $pdo->prepare($sql);
                $values = array(
                    "primary_value" => $primary_value,
                );
                $req_prep->execute($values);
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

	// Connexion à la base de données            
	// Le dernier argument sert à ce que toutes les chaines de caractères 
	// en entrée et sortie de MySql soit dans le codage UTF-8
	//self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	   
	// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
	//self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

?>