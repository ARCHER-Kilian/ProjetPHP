<<<<<<< HEAD
<?php
require_once(File::build_path(array("controller","Controller.php")));
require_once(File::build_path(array("controller","ControllerArticle.php")));
require_once(File::build_path(array("controller","ControllerCategorie.php")));
require_once(File::build_path(array("controller","ControllerUtilisateur.php")));

if (isset($_GET['action'])){
	$action = $_GET['action'];
} else if (isset($_COOKIE['id'])) {
	if ($_COOKIE['id'] == "admin" && $_COOKIE['password'] == "admin") {
		$_action = 'readAdmin';
	}else{
		$action = 'readAllArticle'; 
	}
} else {
	$action = 'readAllArticle'; 
}

$controller_default = 'Article';
if(isset($_GET['controller'])){ // On recupère le controleur dans l'URL
	$controller = $_GET['controller'];
} elseif (isset($_COOKIE['preference'])){
	$controller = $_COOKIE['preference'];
} else {
	$controller = $controller_default;
}

$controller_class = 'Controller'. ucfirst($controller);

if(class_exists($controller_class)){
	$tab_methode_controller = get_class_methods($controller_class);
	if ((in_array($action, $tab_methode_controller))){
		$controller_class::$action();
	} else {
		$controller_class::error();
	}
} else {
	ControllerArticle::error();
}

/*ControllerArticle::$action();*/

	
=======
<?php
require_once(File::build_path(array("controller","Controller.php")));
require_once(File::build_path(array("controller","ControllerArticle.php")));
require_once(File::build_path(array("controller","ControllerCategorie.php")));
require_once(File::build_path(array("controller","ControllerUtilisateur.php")));

if (isset($_GET['action'])){
	$action = $_GET['action'];
} else if (isset($_COOKIE['id'])) {
	if ($_COOKIE['id'] == "admin" && $_COOKIE['password'] == "admin") {
		$_action = 'readAdmin';
	}else{
		$action = 'readAllArticle'; 
	}
} else {
	$action = 'readAllArticle'; 
}

$controller_default = 'Article';
if(isset($_GET['controller'])){ // On recupère le controleur dans l'URL
	$controller = $_GET['controller'];
} elseif (isset($_COOKIE['preference'])){
	$controller = $_COOKIE['preference'];
} else {
	$controller = $controller_default;
}

$controller_class = 'Controller'. ucfirst($controller);

if(class_exists($controller_class)){
	$tab_methode_controller = get_class_methods($controller_class);
	if ((in_array($action, $tab_methode_controller))){
		$controller_class::$action();
	} else {
		$controller_class::error();
	}
} else {
	ControllerArticle::error();
}

/*ControllerArticle::$action();*/

	
>>>>>>> 95eaae1f7ca617f4f9ec0ed2f12e79b4b9b0858a
?>	