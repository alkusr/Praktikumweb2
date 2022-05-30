<?php
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman</title>
</head>
<body>
    <input type="button" value="Go back!" onclick="history.back()"><br>
    <a href="FormPeminjaman.php"><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("peminjaman") ?>
    </table>
</body>
</html>