<?php
error_reporting( E_ERROR | E_PARSE);
$conn = new mysqli("localhost","root","","mydb");
$table_name = 'book';
if(isset($_POST["add"])){
	$book = $_POST["book"];
	$price = $_POST["price"];
	$year = $_POST["year"];
	$sql = "INSERT INTO $table_name (book,price,year) VALUES ('$book','$price','$year')";
	$conn->query($sql);
}
if(isset($_POST["delete"])){
	$id = $_POST["id"];
	$conn->query("DELETE FROM $table_name WHERE id = $id");
}
?>
<h1>Add New</h1>
<form method="POST" enctype="multipart/form-data">
	<table class="ui blue striped table collapsing">
        <tr>
            <td>Book</td>
            <td><input type="text" name="book" >
            </td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" >
            </td>
        </tr>
        <tr>
            <td>Year</td>
            <td><input type="text" name="year" >
            </td>
        </tr>
				<tr>
					<td></td>
					<td><input type="submit" name="add" value="Add"></td>
				</tr>
	</table>
</form>
<hr>
<table>
	<thead>
		<tr>
			<th>Book</th>
			<th>Price</th>
			<th>Year</th>
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
			echo '<td>'.$row["price"].'</td>';
			echo '<td>'.$row["year"].'</td>';
			echo '<td>
				<form method="post">
					<input type="hidden" name="id" value="'.$row["id"].'">
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