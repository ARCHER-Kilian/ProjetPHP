<?php
$c = $_GET['Aid'];

unset($_SESSION['Aid'], $_GET['Aid']);



?>
<p> Produit a été enlevé de votre panier 
	<a href="index.php?action=readPanier"> Voir votre panier</a>
</p>