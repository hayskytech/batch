<?php
include 'menu.php';
?>
<style type="text/css">
	.student{
		background-color: orange;
	}
</style>

<?php
error_reporting( E_ERROR | E_PARSE);
$conn = new mysqli("localhost","root","","mydb");
$table_name = 'student';
if(isset($_POST["add"])){
	$student = $_POST["student"];
	$phone = $_POST["phone"];
	$father = $_POST["father"];
	$address = $_POST["address"];
	$gender = $_POST["gender"];
	$date_of_birth = $_POST["date_of_birth"];
	$sql = "INSERT INTO $table_name (student,phone,father,address,gender,date_of_birth) VALUES ('$student','$phone','$father','$address','$gender','$date_of_birth')";
	$conn->query($sql);
}
if(isset($_POST["delete"])){
	$id = $_POST["id"];
	$conn->query("DELETE FROM $table_name WHERE id = $id");
}
?>
<aside>
<form method="POST" enctype="multipart/form-data">
	<?php
	if(isset($_POST["edit"])){
		echo '<input type="hidden" name="id" value="'.$row["id"].'">';
	}
	?>
	<table class="ui blue striped table collapsing">
        <tr>
            <td>Student</td>
            <td><input type="text" name="student" >
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" >
            </td>
        </tr>
        <tr>
            <td>Father</td>
            <td><input type="text" name="father" >
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" >
            </td>
        </tr>
        <tr>
        <td>Gender</td>
        <td><select  name="gender" >
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>Date Of Birth</td>
            <td><input type="date" name="date_of_birth" >
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
</aside>
<?php
if(isset($_POST["edit"])){
	$id = $_POST["id"];
	$result = $conn->query("SELECT * FROM $table_name WHERE id = $id");
	$row = $result->fetch_assoc();
	$data["student"] = $row["student"];
	$data["phone"] = $row["phone"];
	$data["father"] = $row["father"];
	$data["address"] = $row["address"];
	$data["gender"] = $row["gender"];
	$data["date_of_birth"] = $row["date_of_birth"];
	?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js">
	</script>
    <script type="text/javascript">
        jQuery('input[name=student]').val('<?php echo $data["student"]; ?>');
        jQuery('input[name=phone]').val('<?php echo $data["phone"]; ?>');
        jQuery('input[name=father]').val('<?php echo $data["father"]; ?>');
        jQuery('input[name=address]').val('<?php echo $data["address"]; ?>');
        jQuery('select[name=gender]').val('<?php echo $data["gender"]; ?>');
        jQuery('input[name=date_of_birth]').val('<?php echo $data["date_of_birth"]; ?>');
    </script>
	<?php
}
if(isset($_POST["save"])){
	$id = $_POST["id"];
	$student = $_POST["student"];
	$phone = $_POST["phone"];
	$father = $_POST["father"];
	$address = $_POST["address"];
	$gender = $_POST["gender"];
	$date_of_birth = $_POST["date_of_birth"];
	$sql = "UPDATE $table_name SET student = '$student',phone = '$phone',father = '$father',address = '$address',gender = '$gender',date_of_birth = '$date_of_birth' WHERE id = $id";
	$conn->query($sql);
}
?>
<main>
<h1>Students</h1>
<table>
	<thead>
		<tr>
			<th>Student</th>
			<th>Phone</th>
			<th>Father</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Date Of Birth</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$sql = "SELECT * FROM $table_name";
		$rows = $conn->query($sql);
		while($row = $rows->fetch_assoc()){
			echo '<tr row-id="'.$row["id"].'">';
			echo '<td>'.$row["student"].'</td>';
			echo '<td>'.$row["phone"].'</td>';
			echo '<td>'.$row["father"].'</td>';
			echo '<td>'.$row["address"].'</td>';
			echo '<td>'.$row["gender"].'</td>';
			echo '<td>'.$row["date_of_birth"].'</td>';
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
</main>
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

<style type="text/css">
	aside{
		float: right;
		width: 30%;
	}
	main{
		float: left;
		width: 70%;
	}
	.content{
		padding: 10px;
	}
	.sidebar{
		padding: 10px;
	}
</style>