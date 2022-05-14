<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman - Prak5</title>
    <style>
		 table {
		  border-collapse: collapse;
		}

		 td,  th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		 tr:nth-child(even){background-color: #f2f2f2;}

		 tr:hover {background-color: #ddd;}

		 th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #04AA6D;
		  color: white;
		}
	</style>
</head>
<body>
    <?php
        require('./Model.php');
        if (isset($_GET['id_peminjaman'])) {
            deletePeminjaman($_GET['id_peminjaman']);
        }
    ?>
    <center>
    <h2>Data Peminjaman</h2>
    <center><a href="FormPeminjaman.php">
    	<button>Tambah Data Peminjaman</button></a></center>
    <a href="index.php">
    	<button>Kembali</button></a><br><br>
    <table>
    <thead> 
        <tr>
            <th>ID Peminjaman</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
    </thead>
        <?php readData("peminjaman") ?>
    </table>
    </center>
</body>
</html>