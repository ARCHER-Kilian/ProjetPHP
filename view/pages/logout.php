<?php
	session_destroy();
 
	if (isset($_COOKIE["id"]) AND isset($_COOKIE["password"])){
		setcookie("id", '', time() - (3600));
		setcookie("password", '', time() - (3600));
	}
 
	header('location: index.php?action=readAllArticle');
?>