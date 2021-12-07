<?php
	if (!isset($_SESSION['Aid'])) {
		$arrayArticle = NULL;
	}else{
			$arrayArticle = $_SESSION['Aid'];
			$prixTotal = 0;
			foreach($arrayArticle as $idArticle){
				$mArticle = ModelArticle::getDescByID($idArticle);
				foreach($mArticle as $article){
					$image = $article->getImage();
			    	$nom = $article->getName();
			    	$prix = $article->getPrix();
			    	$id = $article->getID();
			    	$prixTotal = $prixTotal + $prix;
			    	echo"
			    		<button class='button'>
		                    <a href='index.php?action=readDescr&id=$id' id='detail' name='detail'>
		                		<p>
		                        	<img class=imageArticle src='$image'>
		                        	<div class='name'>
		                        	    $nom
		                        	</div>
		                        	<div class='prix'>
		                            	$prix €
		                        	</div>
		                    	</p>
		                    </a>
		                    <hr class='addtocart'>
		                    <div class='add_cart'>
		                    <a href='index.php?action=removeFromPanier&Aid=$id' name='cart' id='cart'>
		                        <input id='addCart' type='submit' value='Remove from Cart' name='cart' required>
		                    </a>
		                    </div>
		                </button>
			    	";
				}
			}
			echo"
				<br><br><br>
				<h2 class='aDroite'>Total : $prixTotal €</h2>
				";

	}
	
	if ($arrayArticle === NULL) {
		echo "Votre panier est vide";
	}
?>