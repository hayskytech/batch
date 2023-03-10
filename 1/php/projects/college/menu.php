<?php
$conn = new mysqli("localhost","root","","mydb");
?>
<header>
	<a class="index" href="index.php">Home</a>
	<a class="about" href="about.php">About</a>
	<a class="student" href="student.php">Students</a>
	<a class="teacher" href="teacher.php">Teachers</a>
	<a class="book" href="book.php">Books</a>
</header>
<style type="text/css">
	header a{
		padding: 10px;
		border: 2px solid;
		text-decoration: none;
		display: inline-block;
	}
	header a:hover{
		background-color: white;
	}
	header{
		background-color: pink;
		padding: 10px;
		margin-bottom: 10px;
	}
	body{
		background-color: skyblue;
	}
</style>
<main>
	<div class="content">