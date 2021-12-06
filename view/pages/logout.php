<<<<<<< HEAD
<?php
	session_destroy();
 
	if (isset($_COOKIE["id"]) AND isset($_COOKIE["password"])){
		setcookie("id", '', time() - (3600));
		setcookie("password", '', time() - (3600));
	}
 
	header('location: index.php?action=readAllArticle');
=======
<?php
	session_destroy();
 
	if (isset($_COOKIE["id"]) AND isset($_COOKIE["password"])){
		setcookie("id", '', time() - (3600));
		setcookie("password", '', time() - (3600));
	}
 
	header('location: index.php?action=readAllArticle');
>>>>>>> 95eaae1f7ca617f4f9ec0ed2f12e79b4b9b0858a
?>