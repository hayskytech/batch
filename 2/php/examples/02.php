<?php
// frequency of an element
$numbers = array(	9,15,9,9,15,15,13 );
// print_r( array_count_values($numbers) );

$c = count($numbers);

$ans = array();
for ($i=0; $i < $c; $i++) { 
	$temp = $numbers[$i];
	if(array_key_exists($temp,$ans)){
		continue;
	}
	
	$ans[$temp] = 1;
	for ($j=$i+1; $j < $c; $j++) { 
		if ($temp == $numbers[$j]){
			$ans[$temp]++;
		}
	}
}

print_r($ans);