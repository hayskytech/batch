<?php
include 'menu.php';
?>
<style type="text/css">
	.book{
		background-color: orange;
	}
</style>
<h1>Books</h1>
<?php
error_reporting( E_ERROR | E_PARSE);
$conn = new mysqli("localhost","root","","mydb");
$table_name = 'book';
if(isset($_POST["add"])){
	$book = $_POST["book"];
	$year = $_POST["year"];
	$price = $_POST["price"];
	$sql = "INSERT INTO $table_name (book,year,price) VALUES ('$book','$year','$price')";
	$conn->query($sql);
}
if(isset($_POST["delete"])){
	$id = $_POST["id"];
	$conn->query("DELETE FROM $table_name WHERE id = $id");
}
?>
<form method="POST" enctype="multipart/form-data">
	<?php
	if(isset($_POST["edit"])){
		echo '<input type="hidden" name="id" value="'.$row["id"].'">';
	}
	?>
	<table class="ui blue striped table collapsing">
        <tr>
            <td>Book</td>
            <td><input type="text" name="book" >
            </td>
        </tr>
        <tr>
            <td>Year</td>
            <td><input type="text" name="year" >
            </td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" >
            </td>
        </tr>
				<tr><td></td>
					<?php
					if(isset($_POST["edit"])){
						echo '<td>
						<input type="hidden" name="id" value="'.$_POST["id"].'">
						<input type="submit" name="save" value="Save"></td>';
					} else {
						echo '<td><input type="submit" name="add" value="Add"></td>';
					}
					?>
				</tr>
	</table>
</form>
<?php
if(isset($_POST["edit"])){
	$id = $_POST["id"];
	$result = $conn->query("SELECT * FROM $table_name WHERE id = $id");
	$row = $result->fetch_assoc();
	$data["book"] = $row["book"];
	$data["year"] = $row["year"];
	$data["price"] = $row["price"];
	?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js">
	</script>
    <script type="text/javascript">
        jQuery('input[name=book]').val('<?php echo $data["book"]; ?>');
        jQuery('input[name=year]').val('<?php echo $data["year"]; ?>');
        jQuery('input[name=price]').val('<?php echo $data["price"]; ?>');
    </script>
	<?php
}
if(isset($_POST["save"])){
	$id = $_POST["id"];
	$book = $_POST["book"];
	$year = $_POST["year"];
	$price = $_POST["price"];
	$sql = "UPDATE $table_name SET book = '$book',year = '$year',price = '$price' WHERE id = $id";
	$conn->query($sql);
}
?>
<hr>
<table>
	<thead>
		<tr>
			<th>Book</th>
			<th>Year</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$sql = "SELECT * FROM $table_name";
		$rows = $conn->query($sql);
		while($row = $rows->fetch_assoc()){
			echo '<tr row-id="'.$row["id"].'">';
			echo '<td>'.$row["book"].'</td>';
			echo '<td>'.$row["year"].'</td>';
			echo '<td>'.$row["price"].'</td>';
			echo '<td>
				<form method="post">
					<input type="hidden" name="id" value="'.$row["id"].'">
					<input type="submit" name="edit" value="Edit">
					<input type="submit" name="delete" value="Delete">
				</form>
			</td>';
			echo '</tr>';
		}
		?>
	</tbody>
</table>
</div>
<script type="text/javascript">
	if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
	}
</script>
<style type="text/css">
	table,th,td{
		padding: 5px;
		border: 1px solid;
		border-collapse: collapse;
	}
	form{
		margin: 0;
	}
</style>