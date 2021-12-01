<?php

if (iiset($_SESSION['cart'])) {
	$_SESSION['cart'] = array() ;
}

$_SESSION['cart'][$_POST()];

?>
<p> Produit a été ajouté a votre panier 
	<a href="index.php?action=readPanier"> Voir votre panier</a>
</p>