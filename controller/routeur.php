<?php
require_once(File::build_path(array("controller","Controller.php")));
// On recupère l'action passée dans l'URL
$action = $_GET['action'];
// Appel de la méthode statique $action de ControllerArticle
Controller::$action();
?>