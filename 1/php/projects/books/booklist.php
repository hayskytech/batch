<?php
include 'menu.php';
$conn = new mysqli("localhost","root",'','mydb');

if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	$sql = "DELETE FROM book WHERE id = $id";

	if ($conn->query($sql) === true) {
		echo "Book deleted.";
	} else {
		echo $conn->error;
	}

}

$sql = "SELECT * FROM book";
$result = $conn->query($sql);
?>

<table>
	<tr>
		<th>Book</th>
		<th>Year</th>
		<th>Price</th>
	</tr>
	<?php
	while ($b = $result->fetch_assoc()) {
		?>

		<tr>
			<td><?php echo $b["book"]; ?></td>
			<td><?php echo $b["year"]; ?></td>
			<td><?php echo $b["price"]; ?></td>
			<td>
				<form method="POST">
					<input type="hidden" name="id" value="<?php echo $b["id"]; ?>">
					<input type="submit" name="delete" value="Delete">
				</form>
			</td>
		</tr>

		<?php
	}
	?>
</table>
<script type="text/javascript">
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>