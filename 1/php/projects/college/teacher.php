<?php
include 'menu.php';
?>
<style type="text/css">
	.teacher{
		background-color: orange;
	}
</style>
<h1>Teachers</h1>

<?php
error_reporting( E_ERROR | E_PARSE);
$conn = new mysqli("localhost","root","","mydb");
$table_name = 'teacher';
if(isset($_POST["add"])){
	$teacher = $_POST["teacher"];
	$phone = $_POST["phone"];
	$salary = $_POST["salary"];
	$subject = $_POST["subject"];
	$sql = "INSERT INTO $table_name (teacher,phone,salary,subject) VALUES ('$teacher','$phone','$salary','$subject')";
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
            <td>Teacher</td>
            <td><input type="text" name="teacher" >
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" >
            </td>
        </tr>
        <tr>
            <td>Salary</td>
            <td><input type="text" name="salary" >
            </td>
        </tr>
        <tr>
            <td>Subject</td>
            <td><input type="text" name="subject" >
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
	$data["teacher"] = $row["teacher"];
	$data["phone"] = $row["phone"];
	$data["salary"] = $row["salary"];
	$data["subject"] = $row["subject"];
	?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js">
	</script>
    <script type="text/javascript">
        jQuery('input[name=teacher]').val('<?php echo $data["teacher"]; ?>');
        jQuery('input[name=phone]').val('<?php echo $data["phone"]; ?>');
        jQuery('input[name=salary]').val('<?php echo $data["salary"]; ?>');
        jQuery('input[name=subject]').val('<?php echo $data["subject"]; ?>');
    </script>
	<?php
}
if(isset($_POST["save"])){
	$id = $_POST["id"];
	$teacher = $_POST["teacher"];
	$phone = $_POST["phone"];
	$salary = $_POST["salary"];
	$subject = $_POST["subject"];
	$sql = "UPDATE $table_name SET teacher = '$teacher',phone = '$phone',salary = '$salary',subject = '$subject' WHERE id = $id";
	$conn->query($sql);
}
?>
<hr>
<table>
	<thead>
		<tr>
			<th>Teacher</th>
			<th>Phone</th>
			<th>Salary</th>
			<th>Subject</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$sql = "SELECT * FROM $table_name";
		$rows = $conn->query($sql);
		while($row = $rows->fetch_assoc()){
			echo '<tr row-id="'.$row["id"].'">';
			echo '<td>'.$row["teacher"].'</td>';
			echo '<td>'.$row["phone"].'</td>';
			echo '<td>'.$row["salary"].'</td>';
			echo '<td>'.$row["subject"].'</td>';
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