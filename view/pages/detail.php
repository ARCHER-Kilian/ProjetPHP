<?php 

<<<<<<< HEAD
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
=======
	$d = $_POST['detail'];
	var_dump($d);
	die;

	
	/*$descr = ModelArticle::getDescByID($d);
	foreach ($tab_d as $descr){
		echo "$descr"
	}*/
>>>>>>> 95eaae1f7ca617f4f9ec0ed2f12e79b4b9b0858a

?>