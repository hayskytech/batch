<?php
$am = 160;
if ($am > 250) {
	echo "Lunch"; 
} else if ($am > 100){
	echo "Breakfast";
} else if ($am > 50){
	echo "snacks";
} else {
	echo "Nothing";
}
echo "<hr>";

$d = 1;

switch ($d) {
	case 1:
		echo "Monday";
		break;
	case 2:
		echo "Tues";
		break;
	default:
		echo "Invalid Day";
		break;
}
echo "<br>";
$x = 1;
while($x <= 10){

	echo $x . " - Hai <br>";
	$x++;

}

$y = 10;
while ($y >= 1) {
	echo $y . " jashbd<br>";
	$y--;
}

echo "<hr>";

for ($i=1; $i <= 10; $i++) { 
	echo $i . " Hello<br>";
}