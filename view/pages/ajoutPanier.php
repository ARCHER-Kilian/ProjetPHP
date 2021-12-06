<?php
$c = $_GET['Aid'];

if (!isset($_SESSION['Aid'])) {
	$_SESSION['Aid'] = array();
}

array_push($_SESSION['Aid'], $_GET['Aid']);

?>
<p> Produit a été ajouté a votre panier 
	<a href="index.php?action=readPanier"> Voir votre panier</a>
</p>