<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
require('./Model.php');
if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
</head>

<body>
    <input type="button" value="Go back!" onclick="history.back()"><br>
    <a href="FormMember.php"><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>nomor_member</th>
            <th>alamat</th>
            <th>Tgl daftar</th>
            <th>tgl bayar</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("member") ?>
    </table>
</body>

</html>