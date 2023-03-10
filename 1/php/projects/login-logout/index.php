<?php
$conn = new mysqli("localhost","root","","mydb");
session_start();
error_reporting( E_ERROR | E_PARSE);


if (isset($_POST['login'])) {
  $user = $_POST['user'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM user WHERE user='$user' AND password='$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  	$row = $result->fetch_assoc();
  	$_SESSION['user'] = $row["user"];
  } else {
  	echo "<h2>Invalid Login Details.</h2>";
  }
}


if (isset($_POST['logout'])) {
	session_unset();
	session_destroy();
}



if ($_SESSION['user']) {
	echo "<h2>Your are logged in...</h2>";
	?>
	<form method="POST">
		<input type="submit" name="logout" value="Logout">
	</form>
	<?php


} else {

	?>
	<h2>Login Here</h2>
	<form method="POST">
		Username: <input type="text" name="user"><br><br>
		Password: <input type="password" name="password"><br><br>
		<input type="submit" name="login" value="Login">
	</form>
	<?php


}