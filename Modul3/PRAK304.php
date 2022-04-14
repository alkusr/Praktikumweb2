<!-- Tittle & CSS Ukuran Gambar -->
<title>Prak3 No.4 | Muhammad Alkausar</title>
<style>
    .gambar {
        width: 90px;
        height: 90px;
    }
</style>

<!-- Code tombol kurang & tambah -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = (int)$_POST["nilai"];
}

if (isset($_POST['tambah'])) {$nilai += 1;}
if (isset($_POST['kurang'])) {$nilai -= 1;}

// Form Awal
if (empty($nilai)) : ?>
    <form action="" method="post">
        Jumlah Bintang: <input type="text" name="nilai"> <br>
        <button type="submit" name="masuk">Submit</button>
    </form>

<!-- Tampil Hasil, Tombol Tambah & Tombol Kurang -->
<?php
endif;

$iniGambar = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";

if (!empty($nilai)) :
    echo "jumlah bintang = $nilai <br>"; 
    for ($i = 0; $i < $nilai; $i++) {
        echo "<img src='$iniGambar' class='gambar'>";
    }
    ?>

    <form action="" method="post">
        <input type="text" name="nilai" value="<?= $nilai ?>" hidden>
        <button type="submit" name="tambah" value="tambah">tambah</button>
        <button type="submit" name="kurang" value="kurang">kurang</button>
    </form>

<?php endif; ?>