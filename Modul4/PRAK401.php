<title>PRAK 401 - Muhammad Alkausar</title>

<!-- input form -->
<form action="" method="post">
    Panjang <input type="text" name="panjang"><br>
    Lebar <input type="text" name="lebar"><br>
    Nilai <input type="text" name="nilai"><br>
    <input type="submit" value="Cetak" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    // ambil nilai
    $arrayNilai = explode(" ", $_POST['nilai']);
    $arr = array_chunk($arrayNilai, 3);

    // ambil panjang & lebar
    if ($_POST['panjang'] == $_POST['lebar']) {

        // cetak table dan isinya
        echo "<table border=\"1\">";
        for ($i = 0; $i < $_POST['panjang']; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $_POST['panjang']; $j++) {
                echo "<td>" . $arr[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
    } else {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    }
}
?>