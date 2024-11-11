<?php 

$array = range('a', 'e');
$array[] = ['c', 'a'];
print_r($array);
echo "<br>";
print_r(count($array));
echo "<br>";
print_r($array[5]);