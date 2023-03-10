<?php 
$txt = "hello world";


echo strlen($txt);

echo str_word_count($txt);

echo strrev($txt);

echo strpos($txt, 'e');

echo str_replace('l', 'b', $txt).' ';

echo strtoupper($txt);

echo '<hr>';

define('x', '20');

// x = 40; // will give error

echo x;

