<?php
if (isset($_GET['n'])) {
	$n = $_GET['n'];
}
?>
<form>
	Enter Number:<input type="number" name="n" autofocus required value="<?php echo $n ?>">
	<button>Check Even / Odd</button>
</form>
<?php
if (isset($_GET['n'])) {
	$rem = $n % 2;
	if ($rem == 0) {
		echo "Even Number";
	} else {
		echo "Odd Number";
	}
}
?>