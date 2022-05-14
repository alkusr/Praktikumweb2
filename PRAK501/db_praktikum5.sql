SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `db_praktikum5`

-- Struktur [buku]

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Isi [Buku]

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Tittle 001', 'Author 001', 'Publisher 001', 2001),
(2, 'Tittle 002', 'Author 002', 'Publisher 002', 2002),
(3, 'Tittle 003', 'Author 003', 'Publisher 003', 2003),
(4, 'Tittle 004', 'Author 004', 'Publisher 004', 2004),
(5, 'Tittle 005', 'Author 005', 'Publisher 005', 2005),
(6, 'Tittle 006', 'Author 006', 'Publisher 006', 2006),
(7, 'Tittle 007', 'Author 007', 'Publisher 007', 2007),
(8, 'Tittle 008', 'Author 008', 'Publisher 008', 2008),
(9, 'Tittle 009', 'Author 009', 'Publisher 009', 2009),
(10, 'Tittle 010', 'Author 010', 'Publisher 010', 2010);

-- --------------------------------------------------------

-- Struktue [Member]

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(250) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Isi [Member]

INSERT INTO `member` (`id_member`, `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(1, 'Name 001', '628000000001', 'Address 001', '2001-01-01 01:01:01', '2022-05-29'),
(2, 'Name 002', '628000000002', 'Address 002', '2002-02-02 02:02:02', '2022-05-29'),
(3, 'Name 003', '628000000003', 'Address 003', '2003-03-03 03:03:03', '2022-05-29'),
(4, 'Name 004', '628000000004', 'Address 004', '2004-04-04 04:04:04', '2022-05-29'),
(5, 'Name 005', '628000000005', 'Address 005', '2005-05-05 05:05:05', '2022-05-29');

-- --------------------------------------------------------

-- Struktur [Peminjaman]

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Isi [Peminjaman]

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, '2022-05-01', '2022-05-28'),
(2, '2022-05-02', '2022-05-28'),
(3, '2022-05-03', '2022-05-28'),
(4, '2022-05-04', '2022-05-28'),
(5, '2022-05-05', '2022-05-28');

-- Indexes for table `buku`
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

-- Indexes for table `member`
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

-- Indexes for table `peminjaman`
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

-- AUTO_INCREMENT for table `buku`
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

-- AUTO_INCREMENT for table `member`
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- AUTO_INCREMENT for table `peminjaman`
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;