<?php
$myFile ="testFile.txt";
$fh = fopen($myFile, "a") or die ("tidak bisa membuka file");
$stringData = "New stuff 1\n";
fwrite($fh, $stringData);
$stringData = "New stuff 2\n";
fwrite($fh, $stringData);
fclose($fh);