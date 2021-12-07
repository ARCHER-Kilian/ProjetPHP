<?php
 
$conn = mysqli_connect("webinfo","cornetl","07C4XV00FY6");

$cookie_value=$_POST['id'];

$pdo = Model::getPDO();
$rep = $pdo->query("SELECT id FROM utilisateur WHERE id='$cookie_value'");
$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
$det = $rep->fetchAll();

$cookie_value=$_POST['id'];

foreach ($det as $d) {
	if ($cookie_value != $d->getID())
	{
		echo "Inscrivez vous avant de vous connecter";
	}else{
		$cookie_value=$_POST['id'];
			setcookie("id",$cookie_value);
			$cookie_value=$_POST['password'];
			setcookie("password",$cookie_value);

		if (!isset($_COOKIE['id']) || (trim ($_COOKIE['id']) == '')) {
			//il maque une verification qui id soit dans la BD
			header('index.php?action=connect');
			echo "<h2>Login Success</h2>
					<br>
					<a  href='index.php?action=logout'>Logout</a>
					<br>
					<br>
					<a  href='index.php?action=readAllArticle'>menu</a>";
		}else{
			echo "Vous etes deja connecté";
		}
  	}
}
	
	/*	$query=mysqli_query($conn,"select * from utilisateur where id='".$_COOKIE['id']."'");
		$row=mysqli_fetch_assoc($query);*/

	/*	$pdo = Model::getPDO();	
		$query = $pdo->query("SELECT * FROM utilisateur WHERE id='".$_COOKIE['id']."'");
	    $query->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
	    $row = $query->fetchAll();
*/

?>