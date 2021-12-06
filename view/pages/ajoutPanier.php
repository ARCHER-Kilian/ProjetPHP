<?php
<<<<<<< HEAD
$c = $_GET['Aid'];

if (!isset($_SESSION['Aid'])) {
	$_SESSION['Aid'] = array();
}

array_push($_SESSION['Aid'], $_GET['Aid']);
=======
$d = $_POST['detail'];
	var_dump($d);
	die;

if (isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array() ;
}

array_push($_SESSION['cart'], $_GET['id']);
>>>>>>> 95eaae1f7ca617f4f9ec0ed2f12e79b4b9b0858a

?>
<p> Produit a été ajouté a votre panier 
	<a href="index.php?action=readPanier"> Voir votre panier</a>
</p>