-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 05:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anjungan_mandiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(15) NOT NULL,
  `id_pesertabpjs` int(16) NOT NULL,
  `id_pasien` int(15) NOT NULL,
  `poli` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(4) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_telp`, `username`, `password`) VALUES
(1, '1234567891011234', 'Munif Ahsani', 'Laki-Laki', 'Madiun', '1992-01-01', 'jl pahlawan', '087889120120', 'munif_', 'muniff');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_bpjs`
--

CREATE TABLE `peserta_bpjs` (
  `id_pesertabpjs` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `no_bpjs` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta_bpjs`
--

INSERT INTO `peserta_bpjs` (`id_pesertabpjs`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `no_bpjs`) VALUES
(1, '1234567891011223', 'Riska Putri ', 'Kuningan', '2001-05-20', 'Perempuan', '087889120120', 'Kuningan,Jabar', '9876543212345678'),
(4, '123456789876', 'tes', 'tes', '2022-03-01', 'laki', '080808', 'tes', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(15) NOT NULL,
  `id_pasien` int(16) NOT NULL,
  `id_pesertabpjs` int(15) NOT NULL,
  `poli` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian`
--

CREATE TABLE `tbl_antrian` (
  `id` bigint(20) NOT NULL,
  `id_pasien` int(15) NOT NULL,
  `id_pesertabpjs` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL,
  `poli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antrian`
--

INSERT INTO `tbl_antrian` (`id`, `id_pasien`, `id_pesertabpjs`, `tanggal`, `no_antrian`, `status`, `updated_date`, `poli`) VALUES
(100, 0, 1, '2022-03-09', 1, '1', '2022-03-09 18:21:52', 'POLI UMUM'),
(101, 0, 1, '2022-03-09', 2, '0', NULL, 'POLI UMUM'),
(102, 0, 1, '2022-03-09', 3, '0', NULL, 'POLI UMUM'),
(103, 0, 1, '2022-03-09', 1, '1', '2022-03-09 18:23:48', 'POLI GIGI & MULUT'),
(104, 0, 1, '2022-03-09', 2, '0', NULL, 'POLI GIGI & MULUT'),
(108, 0, 1, '2022-03-09', 1, '1', '2022-03-09 20:49:34', 'POLI KIA'),
(109, 0, 1, '2022-03-09', 2, '0', NULL, 'POLI KIA'),
(110, 0, 1, '2022-03-09', 1, '0', NULL, 'LABORATORIUM'),
(111, 0, 1, '2022-03-09', 2, '1', '2022-03-09 21:13:57', 'LABORATORIUM'),
(112, 0, 1, '2022-03-09', 3, '0', NULL, 'LABORATORIUM'),
(113, 0, 1, '2022-03-09', 4, '0', NULL, 'LABORATORIUM'),
(114, 0, 0, '2022-03-10', 1, '1', '2022-03-10 11:03:12', 'POLI UMUM'),
(115, 0, 0, '2022-03-10', 2, '0', NULL, 'POLI UMUM'),
(116, 0, 0, '2022-03-10', 1, '1', '2022-03-10 11:04:38', 'LABORATORIUM'),
(117, 0, 0, '2022-03-10', 1, '0', NULL, 'POLI GIGI & MULUT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`),
  ADD UNIQUE KEY `id_pesertabpjs` (`id_pesertabpjs`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `peserta_bpjs`
--
ALTER TABLE `peserta_bpjs`
  ADD PRIMARY KEY (`id_pesertabpjs`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `no_bpjs` (`no_bpjs`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `peserta_bpjs`
--
ALTER TABLE `peserta_bpjs`
  MODIFY `id_pesertabpjs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
