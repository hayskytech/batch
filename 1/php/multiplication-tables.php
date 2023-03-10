<?php
$start = 1;
$end = 10;
$lines = 10;
if (isset($_GET['submit'])) {
	if ($_GET['start']) {
		$start = $_GET['start'];
	}
	if ($_GET['end']) {
		$end = $_GET['end'];
	}
	if ($_GET['lines'] > 0) {
		$lines = $_GET['lines'];
	}
}
?>
<h1>Dynamic Multiplication Tables using PHP HTML CSS</h1>
<form>
	Start Table:<input type="number" name="start" required value="<?php echo $start; ?>">
	End Table:<input type="number" name="end" required value="<?php echo $end; ?>">
	Lines:<input type="number" name="lines" required value="<?php echo $lines; ?>">
	<input type="submit" name="submit" value="Generate">
</form>
<?php
for ($n=$start; $n <= $end; $n++) { 
	echo '<div class="table"><div>';
	for ($i=1; $i <= $lines; $i++) { 
		echo '<p>' . $n .' x '. $i . ' = ' . ($n*$i) .'</p>';
	}
	echo '</div></div>';
}
?>
<style type="text/css">
	*{
		font-size: 18px;
		font-family: Arial;
	}
	h1{
		font-size: 25px;
		background: pink;
		padding: 10px;
	}
	.table{
		display: inline-block;
		width: 10%;
		float: left;
	}
	.table>div{
		background: skyblue;
		padding: 5px;
		margin: 2px;
		border: 1px solid;
	}
	p{
		margin: 0;
	}
</style>