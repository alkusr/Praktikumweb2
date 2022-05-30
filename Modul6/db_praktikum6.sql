-- phpMyAdmin SQL Dump
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2022 at 04:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_prak501`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

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

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `nomor_member`, `password`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(1, 'Name 001', '001', '$2a$12$8Bi2PcpQSIXCWf/gsgrMeOFinNyrcGEaMa2VFPEAqj2SqGjybp8Ru', 'Address 001', '2001-01-01 01:01:01', '2022-05-29'),
(2, 'Name 002', '002', '$2a$12$8Bi2PcpQSIXCWf/gsgrMeOFinNyrcGEaMa2VFPEAqj2SqGjybp8Ru', 'Address 002', '2002-02-02 02:02:02', '2022-05-29'),
(3, 'Name 003', '003', '$2a$12$8Bi2PcpQSIXCWf/gsgrMeOFinNyrcGEaMa2VFPEAqj2SqGjybp8Ru', 'Address 003', '2003-03-03 03:03:03', '2022-05-29'),
(4, 'Name 004', '004', '$2a$12$8Bi2PcpQSIXCWf/gsgrMeOFinNyrcGEaMa2VFPEAqj2SqGjybp8Ru', 'Address 004', '2004-04-04 04:04:04', '2022-05-29'),
(5, 'Name 005', '005', '$2a$12$8Bi2PcpQSIXCWf/gsgrMeOFinNyrcGEaMa2VFPEAqj2SqGjybp8Ru', 'Address 005', '2005-05-05 05:05:05', '2022-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, '2022-05-01', '2022-05-28'),
(2, '2022-05-02', '2022-05-28'),
(3, '2022-05-03', '2022-05-28'),
(4, '2022-05-04', '2022-05-28'),
(5, '2022-05-05', '2022-05-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;