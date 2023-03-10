<?php
$start = 11;
$end = 20;
$lines = 10;

for ($n=$start; $n <= $end; $n++) { 			// each table
	echo '<div class="table">';

		for ($l=1; $l <= $lines; $l++) { 
			echo '<div>' . $n . ' x ' . $l .' = ' . ($n*$l) .'</div>'; 	// each line
		}

	echo "</div>";
}
?>
<style type="text/css">
	.table{
		background-color: pink;
		border: 2px solid;
		margin: 10px;
		padding: 5px;
		font-size: 20px;
		display: inline-block;
	}
</style>