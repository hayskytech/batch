<?php
$conn = new mysqli("localhost","root","","mydb");
session_start();
error_reporting( E_ERROR | E_PARSE);


if (isset($_POST['register'])) {
  $user = $_POST['user'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE user='$user'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
  	echo "<h2>User Already Exists.</h2>";
  } else {
	  $sql = "INSERT INTO user (user,password) VALUES ('$user','$password')";
	  $conn->query($sql);
	  echo "<h2>User Registered.</h2>";
  }
}
?>





<h2>Registration Form</h2>
<form method="POST">
	Username: <input type="text" name="user"><br><br>
	Password: <input type="password" name="password"><br><br>
	<input type="submit" name="register" value="Register">
</form>
