<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member - Prak5</title>
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
    if (isset($_GET['id_member'])) {
        deleteMember($_GET['id_member']);
    }
    ?>
    <h2><center>Data Member</center></h2>
    <center><a href="FormMember.php"><button>Tambah Data Member</button></a></center>
    <a href="index.php"><button>Kembali</button></a><br><br>
    <table> 
    <thead>
        <tr>
            <th>ID Member</th>
            <th>Nama Member</th>
            <th>Nomor Member</th>
            <th>Alamat Member</th>
            <th>Tanggal Mendaftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
    </thead>
        <?php readData("member") ?>
    </table>
    </center>
</body>
</html>