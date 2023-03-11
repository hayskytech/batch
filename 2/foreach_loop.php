<?php
$person = array(
	"fname" => "Ramesh",
	"lname" => "Kumar",
	'age' => 30
);

foreach ($person as $key => $value) {	
	echo $key . ' : ' . $value . '<br>';
}

echo '<hr>';
// Display array values in table

echo '<table border="1">';
foreach($person as $key => $value){
	echo '<tr>';
	echo '<td>'.$key.'</td>';
	echo '<td>'.$value.'</td>';
	echo '</tr>';
}
echo '</table>';