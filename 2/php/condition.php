<?php
$age = 28;
if ($age >= 18) {
	echo $age . ": Eligible for voting.";
} else {
	echo $age . ": Not Eligible for voting.";
}

echo "<hr>";

$year = 2024;
$rem = $year % 4;
if ($rem == 0) {
	echo $year . " is Leap year.";
} else {
	echo $year . " is not a Leap year.";
}

echo "<hr>";

$num = 6;
$rem = $num % 2;
if ($rem == 0) {
	echo $num . " is Even Number.";
} else {
	echo $num . " is Odd Number.";
}