<?php 
if (isset($_GET["submit"])) {    // when the form is submitted
	$x = $_GET['x'];
	$y = $_GET['y'];	
}
?>
<form>
	<table>
		<tr>
			<td>Enter X</td>
			<td><input type="number" name="x" value="<?php echo $x; ?>"></td>
		</tr>
		<tr>
			<td>Enter Y</td>
			<td><input type="number" name="y" value="<?php echo $y; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Multiply"></td>
		</tr>
	</table>
</form>
<?php

if (isset($_GET["submit"])) {
	echo "Product is : " . $x * $y;	
}
?>

<hr>

<?php 
if (isset($_POST["submit"])) {    // when the form is submitted
	$a = $_POST['a'];
	$b = $_POST['b'];	
}
?>
<form method="POST">
	<table>
		<tr>
			<td>Enter A</td>
			<td><input type="number" name="a" value="<?php echo $a; ?>"></td>
		</tr>
		<tr>
			<td>Enter B</td>
			<td><input type="number" name="b" value="<?php echo $b; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Multiply"></td>
		</tr>
	</table>
</form>
<?php 
if (isset($_POST['submit'])) {
	echo "Answer is : " . $a / $b;	
}
?>

