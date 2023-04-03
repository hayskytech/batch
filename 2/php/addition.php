<form>
	Enter X: <input type="text" name="x">
	<br><br>

	Enter Y: <input type="text" name="y">

	<br><br>
	<button>Addition</button>
</form>


<?php 
$x = $_GET['x'];
$y = $_GET['y'];

echo $x + $y;

?>