<?php

$namaFile = "data/tulis.txt";
$file = fopen($namaFile, "a") or die("Tidak bisa membuka file");

$newContent = "\nKonten baru 2";

fwrite($file, $newContent);