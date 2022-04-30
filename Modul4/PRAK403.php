<title>PRAK 403 - Muhammad Alkausar</title>

<?php

//isi data array key 
$data =
    [
        [
            "no" => 1, 
            "nama" => "Ridho", 
            "MK" =>
            [
                "Pemrograman I",
                "Praktikum Pemrograman I",
                "Pengantar Lingkungan Lahan Basah",
                "Arsitektur Komputer"
            ], 
            "SKS" => [2, 1, 2, 3]
        ],
        [
            "no" => 2, 
            "nama" => 
            "Ratna", 
            "MK" =>
            [
                "Basis Data I",
                "Praktikum Basis Data I",
                "Kalkulus"
            ], "SKS" => [2, 1, 3]
        ],
        [
            "no" => 3, 
            "nama" => "Tono", 
            "MK" =>
            [
                "Rekayasa Perangkat Lunak",
                "Analisis dan Perancangan Sistem",
                "Komputasi Awan",
                "Kecerdasan Bisnis"
            ], "SKS" => [3, 3, 3, 3]
        ]
    ];

//kondisi revisi sks
for ($i = 0; $i < count($data); $i++) {
    //jumlah SKS
    $jumlahSKS = 0;
    foreach ($data[$i]["SKS"] as $key => $value) {
        $jumlahSKS += $value;
    }
    $data[$i]["Total SKS"] = $jumlahSKS;
    if ($jumlahSKS > 7) {
        $data[$i]["Keterangan"] = "Tidak Revisi";
    } else {
        $data[$i]["Keterangan"] = "Revisi KRS";
    }
}

//cetak table header
echo "<table border='1'>";
echo "<tr>";
foreach ($data[0] as $key => $value) {
    echo "<th>" . $key . "</th>";
}
echo "</tr>";

//cetak isi table
foreach ($data as $key => $isiData) {
    echo "<tr>";
    foreach ($isiData as $k => $v) {
        if (is_array($v)) {
            echo "<td>" . $v[0] . "</td>";
        } else {
            if ($v == "Tidak Revisi")
                echo "<td style='background-color: lightgreen;'>" . $v . "</td>";
            else if ($v == "Revisi KRS")
                echo "<td style='background-color: red;'>" . $v . "</td>";
            else
                echo "<td>" . $v . "</td>";
        }
    }
    echo "</tr>";

    for ($j = 1; $j < count($isiData["MK"]); $j++) {

        echo "<tr>";
        foreach ($isiData as $val) {
            if (is_array($val)) {
                echo "<td> $val[$j] </td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
}
echo "</table>";