<?php
function run(){
	echo "hello<br>";
}
run();
run();

echo '<hr>';


function addition( $x , $y ){
	echo $x + $y;
	echo '<br>';
}


addition(5,6);
addition(15, 56);
addition(105,266);

echo '<hr>';

function mul($a=1, $b=1, $c=1){
	echo $a * $b * $c ;
	echo '<br>';
}

mul(2,3);
mul(2,3,5);
mul(5);
mul();

echo '<hr>';

function add($x,$y){
	return $x + $y;
}

$sum = add(5,6);
$sum2 = add(10,20);

$total = $sum + $sum2;
