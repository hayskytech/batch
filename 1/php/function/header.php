<div class="menu">
	<a href="index.php">Home</a>
	<a href="admin.php">Admin</a>
	<a href="booking.php">Booking</a>
</div>
<style type="text/css">
	.menu a{
		display: inline-block;
		padding: 10px;
		background-color: darkblue;
		color: white;
		font-weight: bold;
		border: 2px solid;
		font-size: 20px;
		text-decoration: none;
	}
	*{
		font-family: Arial;
	}
</style>


<?php
error_reporting( E_ERROR | E_PARSE);
$conn = new mysqli("localhost","root","","mydb");
?>