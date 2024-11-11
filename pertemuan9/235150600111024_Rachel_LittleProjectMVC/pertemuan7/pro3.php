<?php

$kata = "Fakultas";

echo "Kata tas mulai dari index ke: " . strpos($kata, "tas");
echo "<br>";

$kataBaruV1 = str_replace("Faku", "uni", $kata);

echo $kataBaruV1;