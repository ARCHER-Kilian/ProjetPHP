<?php
 
 $conn = mysqli_connect("webinfo","cornetl","07C4XV00FY6");

	$cookie_value=$_POST['id'];
	setcookie("id",$cookie_value);
	$cookie_value=$_POST['password'];
	setcookie("password",$cookie_value);


$pdo = Model::getPDO();
$sql = "SELECT COUNT(*) FROM users WHERE id='".$_COOKIE['id']."'";
$req_prep = $pdo->prepare($sql);
$row = mysql_fetch_row($sql);

if ($row[0] > 0) {
    if (!isset($_COOKIE['id']) || (trim ($_COOKIE['id']) == '')) {
			header('index.php?action=connect');
			exit();
		}
	/*	$query=mysqli_query($conn,"select * from utilisateur where id='".$_COOKIE['id']."'");
		$row=mysqli_fetch_assoc($query);*/
}else{
	echo "L'utilisateur n'existe pas";
}

		$pdo = Model::getPDO();	
		$query = $pdo->query("SELECT * FROM utilisateur WHERE id='".$_COOKIE['id']."'");
	    $query->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
	    $row = $query->fetchAll();

?>

	<h2>Login Success</h2>
	<br>
	<a  href="index.php?action=logout">Logout</a>