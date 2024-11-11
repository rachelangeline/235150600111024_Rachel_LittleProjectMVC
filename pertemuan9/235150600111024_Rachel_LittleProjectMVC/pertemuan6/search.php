<?php 

echo "Hasil Pencarian : " . $_GET["search"];
echo "<br>";
echo "Harga Minimal : " . $_GET["harga_minimal"];
echo "<br>";

if (isset($_GET["test"])) {
    echo "Query test ada, hasilnya : " . $_GET["test"];    
} else {
    echo "Query test tidak ada";
}