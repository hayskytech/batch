<?php

$file = fopen('student.csv', "r");

echo '<table border="1">';
while (! feof($file)){

	$line = fgets($file);
	$line_array = explode(',', $line);
	echo '<tr>';
	foreach ($line_array as $word) {
		echo '<td>'.$word.'</td>';
	}
	echo '</tr>';

}
echo '</table>';