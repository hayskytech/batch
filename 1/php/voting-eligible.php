<?php
if (isset($_GET['age'])) {
	$age = $_GET['age'];
}
?>
<form>
	Age: <input type="number" name="age" min="1" max="100" value="<?php echo $age; ?>" autofocus>
	<button>Check</button>
</form>
<?php
if (isset($_GET['age'])) {
	if ($age >= 18) {
		echo "<h2>Eligible for voting.</h2>";
	} else {
		echo "<h2>Not Eligible for voting.</h2>";
	}
}