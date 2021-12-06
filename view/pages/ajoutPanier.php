<?php
$d = $_POST['detail'];
	var_dump($d);
	die;

if (isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array() ;
}

array_push($_SESSION['cart'], $_GET['id']);

?>
<p> Produit a été ajouté a votre panier 
	<a href="index.php?action=readPanier"> Voir votre panier</a>
</p>