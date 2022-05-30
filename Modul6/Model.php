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
          align: center;

        }
    </style>
<body>
<?php
require("./Koneksi.php");

// membuat fungsi tampil
function tampildata($nama_tabel)
{
    $stmt = koneksi()->prepare("SELECT * FROM $nama_tabel");
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (!empty($result)) {
        if ($nama_tabel == "member") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['nomor_member'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row["tgl_mendaftar"] . "</td>";
                echo "<td>" . $row["tgl_terakhir_bayar"] . "</td>";
                echo "<td>";
                echo "<a href='FormMember.php?id_member=" . $row['id_member'] . "'>edit</a>";
                echo " | ";
                echo "<a href='Member.php?id_member=" . $row['id_member'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }

        elseif ($nama_tabel == "buku") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['judul_buku'] . "</td>";
                echo "<td>" . $row['penulis'] . "</td>";
                echo "<td>" . $row['penerbit'] . "</td>";
                echo "<td>" . $row["tahun_terbit"] . "</td>";
                echo "<td>";
                echo "<a href='FormBuku.php?id_buku=" . $row['id_buku'] . "'>edit</a>";
                echo " | ";
                echo "<a href='Buku.php?id_buku=" . $row['id_buku'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }

        elseif ($nama_tabel == "peminjaman") {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row["tgl_pinjam"] . "</td>";
                echo "<td>" . $row["tgl_kembali"] . "</td>";
                echo "<td>";
                echo "<a href='FormPeminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "'>edit</a>";
                echo " | ";
                echo "<a href='Peminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "' onclick=\"return confirm('Yakin Hapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
    }
}?>
</body>
<?php
// membuat fungsi tambah
function tambahdatamember($nama, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
{
    $sql = "INSERT INTO `member` ( `nama`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES (:nama,:nomor_member,:alamat,:tgl_mendaftar,:tgl_terakhir_bayar)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':nama' => $nama, ':nomor_member' => $nomor_member, ':alamat' => $alamat, ':tgl_mendaftar' => $tgl_mendaftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
    if (!empty($result)) {
        header('location:Member.php');
    }
}

function tambahdatabuku($judul,$penulis,$penerbit,$thnterbit){
    $sql = "INSERT INTO `buku` ( `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES (:judul,:penulis,:penerbit,:tahun_terbit)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':judul' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun_terbit' => $thnterbit));
    if (!empty($result)) {
        header('location:Buku.php');
    }
}

function tambahdatapeminjaman($tglpinjam, $tglkembali)
{
    $sql = "INSERT INTO `peminjaman` (`tgl_pinjam`, `tgl_kembali`) VALUES (:tglpinjam,:tglkembali)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute(array(':tglpinjam' => $tglpinjam, ':tglkembali'=> $tglkembali));

    if (!empty($result)) {
        header('location:Peminjaman.php');
    }
}

// membuat fungsi edit
function editmember()
{
    $stmt = koneksi()->prepare("SELECT * FROM member where id_member=" . $_GET["id_member"]);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function editbuku()
{
    $stmt = koneksi()->prepare("SELECT * FROM buku where id_buku=" . $_GET["id_buku"]);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function editpeminjaman(){
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman =". $_GET['id_peminjaman']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}


// membuat fungsi update
function updatemember($id, $nama, $no_member, $almt, $tgl_daftar, $tgl_terakhir_bayar)
{
    $pdo_statement = koneksi()->prepare(
        "update member set nama='" . $nama . "', nomor_member='" . $no_member . "', alamat='" . $almt . "', tgl_mendaftar='" . $tgl_daftar . "', tgl_terakhir_bayar='" . $tgl_terakhir_bayar . "' where id_member=" . $id
    );
    $result = $pdo_statement->execute();
    if ($result) {
        header('location:Member.php');
    }
}

function updatebuku($id, $judul, $penulis, $penerbit, $thnterbit)
{
    $pdo_statement = koneksi()->prepare(
        "update buku set judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $thnterbit . "' where id_buku=" . $id
    );
    $result = $pdo_statement->execute();
    if ($result) {
        header('location:Buku.php');
    }
}

function updatepeminjaman($id, $tglpinjam, $tglkembali) 
{
    $pdo_statement = koneksi()->prepare(
        "UPDATE peminjaman SET tgl_pinjam='" . $tglpinjam ."', tgl_kembali='" . $tglkembali . "' WHERE id_peminjaman = ". $id
    );
    $res = $pdo_statement->execute();
    if (!empty($res)) {
        header('location:Peminjaman.php');
    }
}


// membuat fungsi untuk hapus data

function hapusmember($id_member)
{
    $stmt = koneksi()->prepare("DELETE FROM member where id_member=" . $id_member);
    $result = $stmt->execute();
    if ($result) {
        header('location:Member.php');
    }

}
function hapusbuku($id_buku)
{
    $stmt = koneksi()->prepare("DELETE FROM buku where id_buku=" . $id_buku);
    $result = $stmt->execute();
    if ($result) {
        header('location:Buku.php');
    }
}
function hapuspeminjaman($id_peminjaman)
{
    $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman=" . $id_peminjaman);
    $result = $stmt->execute();
    if ($result) {
        header('location:Peminjaman.php');
    }
}?>