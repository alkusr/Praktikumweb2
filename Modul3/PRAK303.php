<title>Prak3 No.3 | Muhammad Alkausar</title>

<form action="" method="post">
    Batas Bawah <br> <input type="text" name="bawah"><br>
    Batas Atas <br> <input type="text" name="atas"><br>
    <input type="submit" value="cetak" name="hitung">
</form>

<?php
if (isset($_POST['hitung'])) {

    $bawah = $_POST['bawah'];
    $atas = $_POST['atas'];
    $iniGambar = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
    
    do {
        if (($bawah + 7) % 5 == 0) {
            echo "<img src='$iniGambar' height=\"30\" width=\"30\">";
        } else {
            echo "$bawah ";
        }
        $bawah++;
    } while ($bawah <= $atas);
}
?>