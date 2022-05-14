<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman - Prak5</title>
</head>
<body>
	<center>
    <?php 
        require('./Model.php');
        if (isset($_GET['id_peminjaman'])) {
            editPeminjaman();
        }
    ?>

    <form action="" method="post">
        <label for="tgl_pinjam">Tanggal Peminjaman</label><br>
        <input type="date" name="tgl_pinjam" id="tgl_pinjam" value="<?php if(isset($_GET['id_peminjaman'])) echo $result[0]["tgl_pinjam"] ?>" required><br><br>

        <label for="tgl_kembali">Tanggal Kembali</label><br>
        <input type="date" name="tgl_kembali" id="tgl_kembali" value="<?php if(isset($_GET['id_peminjaman'])) echo $result[0]["tgl_kembali"] ?>" required><br><br>

        <?php 
            if (isset($_GET['id_peminjaman'])) {
                echo "<button type=\"submit\" name=\"update\"> Update </button>";
            }
            else {
                echo "<button type=\"submit\" name=\"tambah\"> Tambah </button>"; 
            }
        ?>
    <?php
    if (isset($_POST['update'])) {
        updatePeminjaman($_GET['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    if (isset($_POST['tambah'])) {
        insertDataPeminjaman( $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    ?>
    <br><input type="button" value="Go back!" onclick="history.back()">
    </form>
    </center>
</body>
</html>