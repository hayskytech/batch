<form method="POST">
	Student: <input type="text" name="student"><br><br>
	Father: <input type="text" name="father"><br><br>
	Phone: <input type="text" name="phone"><br><br>
	<button>ADD</button>
</form>

<?php
if (isset($_POST['student'])) {

	$student = $_POST['student'];     // trying to store values
	$father = $_POST['father'];     // trying to store values
	$phone = $_POST['phone'];     // trying to store values


	$conn = new mysqli("localhost", "root", "", "mydb2");
	$sql = "INSERT INTO student (student,father,phone)

					VALUES ('$student','$father','$phone')";

	if( $conn->query($sql) === true ){
		echo "Student added successfully..";
	} else {
		echo "Error";

	}
}