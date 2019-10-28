-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Nov 2016 pada 01.06
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `load_unload`
--

CREATE TABLE IF NOT EXISTS `load_unload` (
  `Id_Loun` int(10) NOT NULL AUTO_INCREMENT,
  `Id_LO` mediumint(9) NOT NULL,
  `No_Lot` tinyint(3) NOT NULL,
  `Jam_Load` time NOT NULL,
  `Jam_Un` time NOT NULL,
  `Proses` char(5) NOT NULL,
  `Jumlah` mediumint(9) NOT NULL,
  `Jumlah_Tipis` mediumint(9) NOT NULL,
  `Jumlah_Meler` mediumint(9) NOT NULL,
  `Jumlah_Serabut` mediumint(9) NOT NULL,
  `Jumlah_Lecet` mediumint(9) NOT NULL,
  `Jumlah_Kotor` mediumint(9) NOT NULL,
  `Jumlah_Bintik` mediumint(9) NOT NULL,
  `Keterangan` text NOT NULL,
  PRIMARY KEY (`Id_Loun`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `load_unload`
--

INSERT INTO `load_unload` (`Id_Loun`, `Id_LO`, `No_Lot`, `Jam_Load`, `Jam_Un`, `Proses`, `Jumlah`, `Jumlah_Tipis`, `Jumlah_Meler`, `Jumlah_Serabut`, `Jumlah_Lecet`, `Jumlah_Kotor`, `Jumlah_Bintik`, `Keterangan`) VALUES
(1, 10001, 1, '08:00:00', '13:00:00', 'F', 40, 1, 0, 2, 0, 0, 0, ''),
(2, 10001, 2, '08:00:00', '13:00:00', 'F', 40, 0, 0, 1, 1, 1, 0, ''),
(3, 10001, 3, '09:00:00', '14:00:00', 'F', 40, 0, 0, 0, 1, 0, 2, ''),
(4, 10001, 4, '11:00:00', '15:00:00', 'F', 40, 2, 1, 0, 0, 0, 0, ''),
(5, 10001, 5, '10:00:00', '15:00:00', 'F', 40, 0, 0, 2, 2, 0, 0, ''),
(6, 10012, 1, '08:00:00', '13:00:00', 'F', 40, 2, 2, 1, 1, 0, 0, ''),
(7, 10002, 1, '08:00:00', '13:00:00', 'F', 40, 0, 0, 0, 2, 2, 1, ''),
(8, 10002, 2, '08:00:00', '13:00:00', 'F', 40, 1, 1, 0, 1, 0, 0, ''),
(9, 10002, 3, '08:00:00', '13:00:00', 'F', 0, 0, 0, 3, 0, 0, 3, ''),
(10, 10002, 4, '10:00:00', '15:00:00', 'R1', 40, 2, 0, 0, 1, 0, 0, ''),
(11, 10002, 5, '10:00:00', '15:00:00', 'R1', 40, 4, 0, 2, 0, 0, 0, ''),
(12, 10003, 1, '08:00:00', '13:15:00', 'F', 40, 2, 0, 2, 2, 0, 0, ''),
(13, 10003, 2, '08:00:00', '13:00:00', 'F', 40, 0, 0, 4, 1, 0, 0, ''),
(14, 10003, 3, '09:15:00', '14:27:00', 'R1', 40, 2, 0, 1, 1, 0, 1, ''),
(15, 10003, 4, '09:15:00', '14:33:00', 'F', 40, 0, 0, 1, 1, 2, 0, ''),
(16, 10003, 5, '10:16:00', '15:41:00', 'F', 40, 1, 0, 0, 2, 0, 1, ''),
(17, 10004, 1, '08:17:00', '13:11:00', 'F', 40, 2, 0, 2, 1, 0, 1, ''),
(18, 10004, 2, '08:19:00', '13:31:00', 'F', 40, 0, 0, 0, 2, 2, 2, ''),
(19, 10004, 3, '08:33:00', '13:49:00', 'F', 40, 2, 0, 0, 0, 0, 1, ''),
(20, 10004, 4, '09:14:00', '14:12:00', 'F', 40, 0, 0, 1, 1, 1, 1, ''),
(21, 10004, 5, '09:33:00', '15:12:00', 'R1', 40, 0, 0, 0, 0, 1, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loun`
--

CREATE TABLE IF NOT EXISTS `loun` (
  `Id_LO` mediumint(5) NOT NULL AUTO_INCREMENT,
  `Id_User` tinyint(3) NOT NULL,
  `Id_Produk` char(5) NOT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(25) NOT NULL,
  `Total_Tipis` mediumint(9) NOT NULL,
  `Total_Meler` mediumint(9) NOT NULL,
  `Total_Serabut` mediumint(9) NOT NULL,
  `Total_Lecet` mediumint(9) NOT NULL,
  `Total_Kotor` mediumint(9) NOT NULL,
  `Total_Bintik` mediumint(9) NOT NULL,
  `Total_NG` mediumint(9) NOT NULL,
  `Total_OK` mediumint(9) NOT NULL,
  PRIMARY KEY (`Id_LO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10005 ;

--
-- Dumping data untuk tabel `loun`
--

INSERT INTO `loun` (`Id_LO`, `Id_User`, `Id_Produk`, `Tanggal`, `Status`, `Total_Tipis`, `Total_Meler`, `Total_Serabut`, `Total_Lecet`, `Total_Kotor`, `Total_Bintik`, `Total_NG`, `Total_OK`) VALUES
(10001, 3, 'AC001', '2016-11-01', 'Disetujui', 3, 1, 5, 4, 1, 2, 16, 184),
(10002, 3, 'AC002', '2016-11-02', 'Disetujui', 7, 1, 5, 4, 2, 4, 23, 137),
(10003, 3, 'AC003', '2016-11-03', 'Disetujui', 5, 0, 8, 7, 2, 2, 24, 176),
(10004, 3, 'AC002', '2016-11-04', 'Disetujui', 4, 0, 3, 4, 4, 6, 21, 179);

-- --------------------------------------------------------

--
-- Struktur dari tabel `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `Id_Note` smallint(6) NOT NULL AUTO_INCREMENT,
  `Id_User` tinyint(3) NOT NULL,
  `Tanggal` date NOT NULL,
  `Periode` varchar(25) NOT NULL,
  `Divisi` varchar(20) NOT NULL,
  `Saran` text NOT NULL,
  PRIMARY KEY (`Id_Note`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10003 ;

--
-- Dumping data untuk tabel `note`
--

INSERT INTO `note` (`Id_Note`, `Id_User`, `Tanggal`, `Periode`, `Divisi`, `Saran`) VALUES
(10001, 1, '2016-10-02', '', 'Painting', 'Perhatikan Proses Pengecatan Jangan Sampai Banyak Produk Reject yang Disebabkan Keteledoran Operator'),
(10002, 2, '2016-10-31', '2016-10-01 s.d. 20-10-30', 'Painting', 'Pehatikan Proses pengecatan pada unit produk karna banyak ditemukan produk reject yang diakibatkan cat yang meler');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `Id_Produk` char(5) NOT NULL,
  `Nama_Produk` varchar(30) NOT NULL,
  `Tipe` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`Id_Produk`, `Nama_Produk`, `Tipe`) VALUES
('AC001', 'Accumulator', 'White'),
('AC002', 'Accumulator', 'Blue Ekspor'),
('AC003', 'Accumulator', 'Blue Lokal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id_User` tinyint(5) NOT NULL AUTO_INCREMENT,
  `Nama_Lengkap` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Jabatan` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id_User`, `Nama_Lengkap`, `Username`, `Password`, `Jabatan`) VALUES
(1, 'Egana Pertiwi', 'gena', '12345', 'QC Office'),
(2, 'Annisa Setiawati', 'barbara', '12345', 'Leader Produksi'),
(3, 'Riswandi', 'ris', '12345', 'Operator'),
(4, 'Haura Artha', 'haura', '12345', 'Manajer Produksi'),
(6, 'kaka', 'kaka', '12345', 'Foreman');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
