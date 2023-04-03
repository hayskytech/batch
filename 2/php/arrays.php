<?php
$x1 = 'apple';
$x2 = "bat";
$x3 = "cat";

// Instead storing each valua separately 
// we use arrays 

$items = array('apple', 'bat', 'cat', 'dog', 30);
echo $items[0];
echo $items[1];

// count number of items in array
echo "<br>Count is: " . count($x);      



// Now we will try to store pair of values...
// It is called Associative array or Two dimensional Array

$person = array(
	"fname" => "Ramesh",
	"lname" => "Kumar",
	'age' => 30
);

echo "<br>";
echo $person["fname"];

// Another examples to stores ages of persons
$age = array("Ben"=>50, "John"=>30, "Kumar"=> 20);
echo '<br>'.$age["Ben"];




echo "<hr>";
// Multi dimensional Array

$scc = array(
	"s1" => array("fname"=>"Rmaesh", "lname"=> "kumar",'gender'=>"male"),
	"s2" => array("fname"=>"Suresh", "lname"=> "kumar",'gender'=>"male"),
	"s3" => array("fname"=>"Mahesh", "lname"=> "Babu",'gender'=>"male"),
	"s4" => array("fname"=>"John", "lname"=> "Moses",'gender'=>"male"),

);

echo $scc['s1']['fname'].$scc['s1']['lname'].'<br>';
echo $scc['s2']['fname'].$scc['s2']['lname'].'<br>';
echo $scc['s3']['fname'].$scc['s3']['lname'].'<br>';
echo $scc['s4']['fname'].$scc['s4']['lname'].'<br>';