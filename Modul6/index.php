<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Index - Prak6</title>
    </head>
    <body id="page-top" align="center">
        <h1>Menu<br></h1>
        <h3>
        <a href="Member.php">Data Member</a><br>
        <a href="Buku.php">Data Buku</a><br>
        <a href="Peminjaman.php">Data Peminjaman</a><br>
        <a href="Logout.php">Logout</a><br>
    </h3> <br> Praktikum Pemrograman Web 2 - Modul 6 - Muhammad Alkausar
    </body>
</html>