<?php
include 'menu.php';
$conn = new mysqli("localhost","root",'','mydb');
?>

<form method="POST">
	Book:<input type="text" name="book"><br><br>
	Year:<input type="text" name="year"><br><br>
	Price:<input type="text" name="price"><br><br>
	<input type="submit" name="add" value="Add Book">
</form>

<?php
if (isset($_POST['add'])) {
	$book = $_POST['book'];
	$year = $_POST['year'];
	$price = $_POST['price'];

	$sql = "INSERT INTO book (book,year,price) VALUES ('$book','$year','$price')";
	
	if ($book!='' && $price!='' && $year!='' ) {
		$conn->query($sql);
		echo "<div class=msg>Book Added</div>";
	} else {
		echo "<div class=msg>Invalid Details</div>";
	}
}
?>

<script type="text/javascript">
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>