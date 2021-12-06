<?php 

	$id = $_GET['id'];
	

	
	$mArticle = ModelArticle::getDescByID($id);
	foreach ($tab_d as $mArticle){
		$desc = $mArticle->getDescr();
        $image = $mArticle->getImage();
        $nom = $mArticle->getName();
        $prix = $mArticle->getPrix();
		echo"
            <div class='detail'>
                <h1>$nom</h1>
                <br>
                <img class='imagedetail'  src='$image'>
                <br>
                <p>
                    $desc
                </p>
                <p>
                    Prix : $prix €
                </p>
            </div>
        ";
	}

?>