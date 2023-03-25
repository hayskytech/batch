<?php
$conn = new mysqli("localhost","root","","mydb2");
?>
<h2>Add New Book</h2>
<form method="POST">
	book: <input type="text" name="book"><br><br>
	subject: <input type="text" name="subject"><br><br>
	year: <input type="text" name="year"><br><br>
	price: <input type="text" name="price"><br><br>
	<input type="submit" name="add" value="ADD BOOK">
</form>

<?php


if (isset($_POST['add'])) {

	$book = $_POST['book'];
	$subject = $_POST['subject'];
	$year = $_POST['year'];
	$price = $_POST['price'];

	$sql = "INSERT INTO books (book,subject,year,price) VALUES ('$book','$subject','$year','$price')";
	if ($conn->query($sql)){
		echo "Book added";
	} else {
		echo "Error occured: " . $conn->error;
	}
}
?>
<h2>LIST of Books</h2>

<?php 
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
$i = 1;
?>
<table border="1">
	<tr>
		<th>Sl.No.</th>
		<th>Book</th>
		<th>Subject</th>
		<th>Year</th>
		<th>Price</th>
	</tr>
<?php
while ($row = $result->fetch_assoc()) {
	?>
	<tr>
		<td><?php echo $i++; ?>)</td>
		<td><?php echo $row["book"]; ?></td>
		<td><?php echo $row["subject"]; ?></td>
		<td><?php echo $row["year"]; ?></td>
		<td><?php echo $row["price"]; ?></td>
		
	</tr>
	<?php
}
?>
</table>

<style type="text/css">
	table,td,th{
		border-collapse: collapse;
		border: 2px solid blue;
	}
	td,th{
		padding: 10px;
	}
	td{
		color: white;
		background-color: darkblue;
	}
	th{
		background-color: black;
		color: white;
	}
	th,td{
		font-family: Arial;
	}
</style>