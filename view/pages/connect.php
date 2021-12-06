<<<<<<< HEAD

	<h2>Login Form</h2>

	<form method="POST" action="index.php?action=connected">
	<label>Username:</label> <input type="text" value="<?php if (isset($_COOKIE["id"])){echo $_COOKIE["id"];}?>" name="id">

	<label>Password:</label> <input type="password" value="<?php if (isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>" name="password">

	<br>
	<br>

	<input type="checkbox" name="remember" 

	<?php 
	if (isset($_COOKIE["id"]) && isset($_COOKIE["password"])){echo "checked";}?>> 

	Remember me

	<br>
	<br>

	<input href="index.php?action=connected" type="submit" value="Login" name="login">
	</form>
 
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
=======

	<h2>Login Form</h2>

	<form method="POST" action="index.php?action=connected">
	<label>Username:</label> <input type="text" value="<?php if (isset($_COOKIE["id"])){echo $_COOKIE["id"];}?>" name="id">

	<label>Password:</label> <input type="password" value="<?php if (isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>" name="password">

	<br>
	<br>

	<input type="checkbox" name="remember" 

	<?php 
	if (isset($_COOKIE["id"]) && isset($_COOKIE["password"])){echo "checked";}?>> 

	Remember me

	<br>
	<br>

	<input href="index.php?action=connected" type="submit" value="Login" name="login">
	</form>
 
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
>>>>>>> 95eaae1f7ca617f4f9ec0ed2f12e79b4b9b0858a
	</span>