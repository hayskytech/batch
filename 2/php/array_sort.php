<?php
$items = array('apple', 20, 50 , 'bat', 'elephant', 'dog');
// $items = array(5, 6, 10, 3, 1);


sort($items);
echo '<pre>';
print_r($items);
echo '</pre>';

rsort($items);
echo '<pre>';
print_r($items);
echo '</pre>';

echo '<hr>';


$data = array(
	'fname' => "Ramesh",
	'lname' => "Kumar",
	'age' => "20",
	'phone' => "68684684864",
);


/*
$data = array(
	'10' => "Ramesh",
	'5' => "Kumar",
	'3' => "Madhav",
	'11' => "Suresh",
);
*/

ksort($data);
echo '<pre>';
print_r($data);
echo '</pre>';

asort($data);
echo '<pre>';
print_r($data);
echo '</pre>';

krsort($data);
echo '<pre>';
print_r($data);
echo '</pre>';

arsort($data);
echo '<pre>';
print_r($data);
echo '</pre>';