<?php
if (isset($_POST['login'])) {
	setcookie("user_name", $_POST['user_name'], time()+3600);
	header("Location: 2.php");
}
if (isset($_POST['logout'])) {
	// setcookie("user_name", "", time()-3600);
	header("Location: 2.php");
}
?>




<?php
if (isset($_COOKIE['user_name'])) {
	echo 'Welcome '. $_COOKIE['user_name'];

	?>
	<form method="POST">
		<input type="submit" name="logout" value="Logout">
	</form>
	<?php

} else {
	?>
	<h3>Login Form</h3>
	<form method="POST">
		Username: <input type="text" name="user_name"><br><br>
		Password: <input type="password" name="pwd"><br><br>
		<input type="submit" name="login" value="Login">
	</form>
	<?php
}

