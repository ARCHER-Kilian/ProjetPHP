<?php 

	$d = $_POST['detail'];
	$desc = ModelArticle::getDescByID($d);
	foreach ($tab_d as $descr){
		echo "$descr"
	}

?>