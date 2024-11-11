<?php 

$namaFile = "data/data.txt";

if (file_exists($namaFile)) {
    echo "File $namaFile ada";
} else {
    echo "File $namaFile tidak ada";
}