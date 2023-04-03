<?php 
if (isset($_GET['start'])) { // when the form is submitted
	$start = $_GET["start"];
	$end = $_GET["end"];
	$lines = $_GET["lines"];
} else { // when form is not submitted
	$start = 1;
	$end = 10;
	$lines = 10;
}

?>
<h1>Multiplication Tables</h1>
<form>
	Start: <input type="number" name="start" value="<?php echo $start; ?>">
	<br>
	End: <input type="number" name="end" value="<?php echo $end; ?>">
	<br>
	Lines: <input type="number" min="1" max="100" name="lines" value="<?php echo $lines; ?>">
	<br>
	<button>Show Tables</button>
</form>

<?php

if (isset($start)) {
	for($i=$start;$i<=$end;$i++){ 
		echo '<div>';
		for ($l=1; $l <= $lines; $l++) { 
			echo '<br>' . $i . ' x ' . $l . ' = '. ($i*$l);
		}
		echo '</div>';
	}
}

?>

<style type="text/css">
	div{
		display: inline-block;
		background-color: pink;
		border: 2px solid black;
		margin: 5px;
		padding: 5px;
	}
</style>