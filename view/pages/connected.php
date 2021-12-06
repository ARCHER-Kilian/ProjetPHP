<<<<<<< HEAD
<?php
 
 $conn = mysqli_connect("webinfo","cornetl","07C4XV00FY6");

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
					<a  href='index.php?action=readAdmin'>menu</a>";
			exit();
		}else{
			echo "erreur de login";
		}
	/*	$query=mysqli_query($conn,"select * from utilisateur where id='".$_COOKIE['id']."'");
		$row=mysqli_fetch_assoc($query);*/

		$pdo = Model::getPDO();	
		$query = $pdo->query("SELECT * FROM utilisateur WHERE id='".$_COOKIE['id']."'");
	    $query->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
	    $row = $query->fetchAll();

=======
<?php
 
 $conn = mysqli_connect("webinfo","cornetl","07C4XV00FY6");

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
					<a  href='index.php?action=readAdmin'>menu</a>";
			exit();
		}else{
			echo "erreur de login";
		}
	/*	$query=mysqli_query($conn,"select * from utilisateur where id='".$_COOKIE['id']."'");
		$row=mysqli_fetch_assoc($query);*/

		$pdo = Model::getPDO();	
		$query = $pdo->query("SELECT * FROM utilisateur WHERE id='".$_COOKIE['id']."'");
	    $query->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
	    $row = $query->fetchAll();

>>>>>>> 95eaae1f7ca617f4f9ec0ed2f12e79b4b9b0858a
?>