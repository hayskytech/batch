<?php
error_reporting(E_ERROR | E_PARSE);

// if(fopen("hello3.txt", "x")){
// 	echo "New file created.";
// } else {
// 	echo "File already exists.";
// }





// $names = array(
// 'sauvdyasb','saud','ysduf','sadvy','vasdy','asaaf','asdvfe'
// );

// foreach ($names as $file) {
// 	fopen($file . '.txt', "x");
// }





// $file = fopen('one.txt', "a");
// fwrite($file, " I am fine");




$file = fopen('something.txt', "r");
// echo fgets( $file ). '<br>' ;
// echo fgets( $file ). '<br>' ;
// echo fgets( $file ). '<br>' ;





$file = fopen('something.txt', "r");
while(!feof($file)) {
  echo fgets($file).'<hr>';
}
