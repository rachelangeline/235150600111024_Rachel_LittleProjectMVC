<?php

$myfile ="file.txt";
$file = fopen ($myfile,'w') or die ("Tidak bisa membuka file");

$string= "Farhan Rangga\n";
fwrite($file,$string);
$string= "Putri";
fwrite($file,$string);
fclose($file);