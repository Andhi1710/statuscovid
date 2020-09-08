-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 Agu 2020 pada 15.18
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_naivebayes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_training`
--

CREATE TABLE `tbl_training` (
  `id_training` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jml_odp` int(50) NOT NULL,
  `jml_pdp` int(50) NOT NULL,
  `aktif` int(50) NOT NULL,
  `sembuh` int(20) NOT NULL,
  `meninggal` int(20) NOT NULL,
  `status_zona` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_training`
--

INSERT INTO `tbl_training` (`id_training`, `nama`, `jml_odp`, `jml_pdp`, `aktif`, `sembuh`, `meninggal`, `status_zona`) VALUES
(20012, 'Kota Sukabumi', 278, 41, 49, 13, 0, 'biru'),
(20013, 'Kabupaten Cianjur', 890, 105, 13, 2, 1, 'kuning'),
(20014, 'Kota Bogor', 1359, 350, 114, 28, 13, 'kuning'),
(20020, 'Kabupaten Bandung', 1642, 344, 74, 15, 5, 'kuning'),
(20021, 'Kabupaten Bandung Barat', 743, 32, 57, 9, 3, 'biru'),
(20022, 'Kabupaten Bekasi', 3440, 959, 173, 60, 9, 'merah'),
(20023, 'Kabupaten Bogor', 1476, 1365, 176, 19, 8, 'kuning'),
(20024, 'Kabupaten Ciamis', 1965, 66, 6, 3, 0, 'kuning'),
(20025, 'Kabupaten Cirebon', 203, 57, 6, 4, 1, 'kuning'),
(20026, 'Kabupaten Garut', 2606, 66, 13, 7, 2, 'biru'),
(20027, 'Kabupaten Indramayu', 923, 180, 16, 1, 2, 'kuning'),
(20028, 'Kabupaten Karawang', 5020, 416, 20, 20, 0, 'kuning'),
(20029, 'Kabupaten Kuningan', 1711, 141, 16, 2, 2, 'kuning'),
(20030, 'Kabupaten majalengka', 542, 52, 5, 1, 1, 'kuning'),
(20031, 'Kabupaten Pangandaran', 544, 10, 3, 1, 0, 'biru'),
(20032, 'Kabupaten Purwakarta', 561, 128, 30, 13, 0, 'kuning'),
(20033, 'Kabupaten Subang', 5654, 61, 38, 6, 2, 'kuning'),
(20034, 'Kabupaten Sukabumi', 4471, 245, 25, 5, 0, 'kuning'),
(20035, 'Kabupaten Sumedang', 967, 60, 15, 3, 0, 'biru'),
(20036, 'Kabupaten Tasikmalaya', 1528, 29, 5, 0, 0, 'kuning'),
(20037, 'Kota Bandung', 3929, 949, 307, 55, 36, 'kuning'),
(20038, 'Kota Banjar', 431, 114, 7, 6, 1, 'kuning'),
(20039, 'Kota Bekasi', 3842, 1097, 462, 161, 29, 'merah'),
(20040, 'Kota Cimahi', 528, 50, 83, 31, 3, 'merah'),
(20041, 'Kota Cirebon', 341, 11, 10, 1, 1, 'kuning'),
(20042, 'Kota Depok', 3734, 1429, 453, 148, 24, 'kuning'),
(20043, 'Kota Tasikmalaya', 1255, 40, 26, 5, 1, 'kuning');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD PRIMARY KEY (`id_training`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_training`
--
ALTER TABLE `tbl_training`
  MODIFY `id_training` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20044;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
