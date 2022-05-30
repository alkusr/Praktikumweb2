<?php
session_start();
require('./Model.php');
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>

<body>
    <input type="button" value="Go back!" onclick="history.back()"><br>
    <a href="FormBuku.php"><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Judul Buku</th>
            <th>Penulis Bukur</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("buku") ?>
    </table>
</body>

</html>