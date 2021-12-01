<?php

if (empty($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], ModelArticle::getID()])

?>
<p> Produit a été ajouté a votre panier 
	<a href="index.php?action=readPanier"> Voir votre panier</a>
</p>