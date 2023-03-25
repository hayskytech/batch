<?php
$conn = new mysqli('localhost','root','','mydb2');
error_reporting(E_ERROR | E_PARSE);


// Adding Block
if (isset($_POST['add'])) {
	$student = $_POST['student'];
	$father = $_POST['father'];
	$phone = $_POST['phone'];
	$sql = "INSERT INTO student (student,father,phone) 
				VALUES ('$student','$father','$phone')";
	if($conn->query($sql)){
		echo "student added";
	} else {
		echo $conn->error;
	}
}

// Deleting Block
if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	$sql = "DELETE FROM student WHERE id='$id'";
	if($conn->query($sql)){
		echo "student deleted";
	} else {
		echo $conn->error;
	}
}

// Edit Block
if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$sql = "SELECT * FROM student WHERE id='$id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$student = $row["student"];
	$father = $row["father"];
	$phone = $row["phone"];
}

// Saving Block
if (isset($_POST['save'])) {
	$id = $_POST["id"];
	$s = $_POST['student'];
	$f = $_POST['father'];
	$p = $_POST['phone'];
	$sql = "UPDATE student SET 
					student='$s', 
					father='$f', 
					phone='$p' 
					WHERE id=$id";
	$conn->query($sql);
}

?>


<form method="POST">
	Student:<input type="text" name="student" value="<?php echo $student; ?>">
	<br><br>
	Father:<input type="text" name="father" value="<?php echo $father; ?>">
	<br><br>
	Phone:<input type="text" name="phone" value="<?php echo $phone; ?>">
	<br><br>
	<?php
	if (isset($_POST['edit'])) {
		echo '<input type="hidden" name="id" value="'.$_POST['id'].'">';
		echo '<input type="submit" name="save" value="Save">';
	} else {
		echo '<input type="submit" name="add" value="Add Student">';
	}
	?>
</form>


<?php
// Getting all students list
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
echo "<table>";
while ($row = $result->fetch_assoc()) {
	// echo '<tr><td>'.$row["student"].'</td></tr>';
	?>
	<tr>
		<td><?php echo $row["student"]; ?></td>
		<td><?php echo $row["father"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<td>
			<form method="POST">
				<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
				<input type="submit" name="edit" value="Edit">
				<input type="submit" name="delete" value="Delete">
			</form>
		</td>
	</tr>
	<?php
}
echo "</table>";

?>