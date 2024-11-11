<?php 

$array = [
    "coba",
    "cookie",
    "session"
];

// foreach($array as $item) {
//     echo $item;
//     echo "<br>";
// }

$array[] = "coba";
$array[3] = 3;

$siswa = [
    "nama" => "Devan",
    "prodi" => "PTI",
    "nim" => 22,
];

$siswa["ipk"] = 3.5;

$detailSiswa = [
    "kelas" => "B",
    "matkul" => "PEMWEB",
    "list_siswa" => [
        [
            "nama" => "Devan",
            "nim" => "2201",
            "prodi" => "PTI",
            "fakultas" => "FIB",
            "list_matkul" => [
                [
                    "nama_matkul" => "PEMDAS",
                    "predikat" => "A",
                ],
                [
                    "nama_matkul" => "PBO",
                    "predikat" => "A",
                ],
            ]
        ],
        [
            "nama" => "Aldo",
            "nim" => "2203",
            "prodi" => "TI",
            "fakultas" => "FEB",
            "list_matkul" => [
                [
                    "nama_matkul" => "ASD",
                    "predikat" => "A",
                ],
                [
                    "nama_matkul" => "DAP",
                    "predikat" => "A",
                ],
            ]
        ],
        [
            "nama" => "Yusuf",
            "nim" => "2202",
            "prodi" => "TIF",
            "fakultas" => "FILKOM",
            "list_matkul" => [
                [
                    "nama_matkul" => "SOK",
                    "predikat" => "A",
                ],
                [
                    "nama_matkul" => "JARKOM",
                    "predikat" => "A",
                ],
            ]
        ]
    ]
];

echo "<h2>Mata Kuliah : " . $detailSiswa["matkul"] . "</h2>";
echo "<h3>Kelas : " . $detailSiswa["kelas"] . "</h3>";
echo "<p>List Siswa</p>";
echo "<table border='1'>";
echo "
<thead>
<tr>
    <th>Nama</th>
    <th>NIM</th>
    <th>Prodi</th>
    <th>Fakultas</th>
    <th>Matkul</th>
</tr>
</thead>";
echo "<tbody>";
foreach($detailSiswa["list_siswa"] as $siswa) {
    echo "<tr>";
    echo "<td>" . $siswa["nama"] ."</td>";
    echo "<td>" . $siswa["nim"] ."</td>";
    echo "<td>" . $siswa["prodi"] ."</td>";
    echo "<td>" . $siswa["fakultas"] ."</td>";
    echo "<td>"; 
    foreach($siswa['list_matkul'] as $matkul) {
        echo $matkul["nama_matkul"] . ", ";
    }
    echo "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";