<?php
$c = $_GET['Aid'];

if (!isset($_SESSION['Aid'])) {
	$_SESSION['Aid'] = array();
}

if (!in_array("$c", $_SESSION['Aid'])) {
	array_push($_SESSION['Aid'], $_GET['Aid']);
}else{
	echo "Ce produit est deja dans votre panier";
}


?>
<p> Produit a été ajouté a votre panier 
	<a href="index.php?action=readPanier"> Voir votre panier</a>
</p>