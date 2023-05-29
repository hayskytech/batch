<?php
$numbers = array(	2,5,2,4,2,15,15,13 );
$c = count($numbers);
// print all items in array
$ans = 0;
for ($i=0; $i < $c; $i++) { 
	if ($numbers[$i]%2 == 0) {
		echo $numbers[$i] . ' ';
		$ans++;
	}
	// $i++;
}
echo "Odd nums: ". $ans;
// print_r( array_count_values($numbers) );

// echo min($numbers);