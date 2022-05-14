<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - prak5</title>
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
	<center>
    <?php
        require('./Model.php');
        if (isset($_GET['id_buku'])) {
            deleteBuku($_GET['id_buku']);
        }
    ?>
    <h2><center>Data Buku</center></h2>
    <center><a href="FormBuku.php">
    	<button>Tambah Data Buku</button></a></center>
    <a href="index.php">
    	<button>Kembali</button></a><br><br>
    <table>
    <thead>   
        <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <?php readData("buku") ?>
    </table>
    </center>
</body>
</html>