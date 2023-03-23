<h2>Books List  - Delete</h2>
<?php
$conn = new mysqli('localhost','root','','mydb2');

if (isset($_POST['delete'])) {     // when delete button is clicked
	$id = $_POST['id'];
	$sql = "DELETE FROM books WHERE id=$id";
	$conn->query($sql);
}

?>

<table>
	<tr>
		<th>Book</th>
		<th>Subject</th>
		<th>Year</th>
		<th>Price</th>
		<th>Action</th>
	</tr>

<?php
// Getting all books from database
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
	$id = $row["id"];
	?>
	<tr>
		<td><?php echo $row["book"]; ?></td>
		<td><?php echo $row["subject"]; ?></td>
		<td><?php echo $row["year"]; ?></td>
		<td><?php echo $row["price"]; ?></td>
		<td>
			<!-- Deleting Form / Button -->
			<form method="POST">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input type="submit" name="delete" value="Delete">
			</form>
		</td>
	</tr>
	<?php
}
echo '</table>';
?>

<style type="text/css">
	table,td{
		border: 2px solid;
		border-collapse: collapse;
		padding: 5px;
	}
	form{
		margin: 0;
	}
</style>