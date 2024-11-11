<?php

$nama = "Devan Ferrel Yusuf Leo";

$array = explode(" ", $nama);

print_r($array);
echo "<br>";

$siswa = [
    "nama" => "Dengklek",
    "nim" => "22",
    "ipk" => 3,
    "fakultas" => "FILKOM"
];

extract($siswa);

$listSiswa = compact('nama', 'nim', 'fakultassss');

print_r($listSiswa);

echo "<br>";

$arr = array("1", 2);
print_r($arr);