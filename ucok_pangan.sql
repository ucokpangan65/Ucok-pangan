-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2020 at 08:14 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_pangan`
--

-- --------------------------------------------------------
--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id_person` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `telepon` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id_person`, `nama`, `email`, `password`, `telepon`, `alamat`) VALUES
(2, 'astri', 'astrirumahorbo22@gmail.com', '12345678', '081314582988','jl. Meruya Selatan'),
(3, 'marta', 'marta65@gmail.com', '12345678', '081345678900', 'ciputat');

--
-- Indexes for dumped tables
--

-- --
-- -- Indexes for table `buku`
-- --
-- ALTER TABLE `buku`
--   ADD PRIMARY KEY (`id_buku`);

-- --
-- -- Indexes for table `denda`
-- --
-- ALTER TABLE `denda`
--   ADD PRIMARY KEY (`id_denda`);

-- --
-- -- Indexes for table `judul`
-- --
-- ALTER TABLE `judul`
--   ADD PRIMARY KEY (`id_judul`);

-- --
-- -- Indexes for table `kelas`
-- --
-- ALTER TABLE `kelas`
--   ADD PRIMARY KEY (`in_pinjam`);

-- --
-- -- Indexes for table `kota`
-- --
-- ALTER TABLE `kota`
--   ADD PRIMARY KEY (`id_kota`);

-- --
-- -- Indexes for table `peminjaman`
-- --
-- ALTER TABLE `peminjaman`
--   ADD PRIMARY KEY (`id_pinjam`);

-- --
-- -- Indexes for table `provinsi`
-- --
-- ALTER TABLE `provinsi`
--   ADD PRIMARY KEY (`id_provinsi`);

-- --
-- -- Indexes for table `siswa`
-- --
-- ALTER TABLE `siswa`
--   ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`);

--
-- AUTO_INCREMENT for dumped tables
--

-- --
-- -- AUTO_INCREMENT for table `buku`
-- --
-- ALTER TABLE `buku`
--   MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

-- --
-- -- AUTO_INCREMENT for table `denda`
-- --
-- ALTER TABLE `denda`
--   MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- --
-- -- AUTO_INCREMENT for table `judul`
-- --
-- ALTER TABLE `judul`
--   MODIFY `id_judul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- --
-- -- AUTO_INCREMENT for table `kelas`
-- --
-- ALTER TABLE `kelas`
--   MODIFY `in_pinjam` int(11) NOT NULL AUTO_INCREMENT;

-- --
-- -- AUTO_INCREMENT for table `kota`
-- --
-- ALTER TABLE `kota`
--   MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

-- --
-- -- AUTO_INCREMENT for table `peminjaman`
-- --
-- ALTER TABLE `peminjaman`
--   MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

-- --
-- -- AUTO_INCREMENT for table `provinsi`
-- --
-- ALTER TABLE `provinsi`
--   MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

-- --
-- -- AUTO_INCREMENT for table `siswa`
-- --
-- ALTER TABLE `siswa`
--   MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
