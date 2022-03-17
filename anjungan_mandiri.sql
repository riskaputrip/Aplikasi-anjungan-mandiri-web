-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2022 pada 08.53
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(4) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_telp`) VALUES
(1, '1234567891011234', 'Munif Ahsani', 'Laki-Laki', 'Madiun', '1992-01-01', 'jl pahlawan', '087889120120'),
(2, '9900998877467345', 'Lulu Lutpiyah', 'Perempuan', 'Kuningan', '2002-03-12', 'Ciawi,jawa barat', '08798763574');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_bpjs`
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
-- Dumping data untuk tabel `peserta_bpjs`
--

INSERT INTO `peserta_bpjs` (`id_pesertabpjs`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `no_bpjs`) VALUES
(1, '1234567891011223', 'Riska Putri ', 'Kuningan', '2001-05-20', 'Perempuan', '087889120120', 'Kuningan,Jabar', '9876543212345678'),
(4, '123456789876', 'tes', 'tes', '2022-03-01', 'laki', '080808', 'tes', '123456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(15) NOT NULL,
  `id_pasien` int(16) NOT NULL,
  `id_pesertabpjs` int(15) NOT NULL,
  `poli` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_antrian`
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
-- Dumping data untuk tabel `tbl_antrian`
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
(117, 0, 0, '2022-03-10', 1, '0', NULL, 'POLI GIGI & MULUT'),
(118, 0, 0, '2022-03-10', 3, '0', NULL, 'POLI UMUM'),
(119, 0, 0, '2022-03-10', 4, '0', NULL, 'POLI UMUM'),
(120, 0, 0, '2022-03-10', 1, '1', '2022-03-10 11:35:46', 'POLI KB'),
(121, 0, 0, '2022-03-10', 2, '1', '2022-03-10 11:35:51', 'POLI KB'),
(122, 0, 0, '2022-03-10', 2, '0', NULL, 'POLI GIGI & MULUT'),
(123, 0, 0, '2022-03-10', 5, '0', NULL, 'POLI UMUM'),
(124, 0, 0, '2022-03-10', 3, '0', NULL, 'POLI GIGI & MULUT'),
(125, 0, 0, '2022-03-11', 1, '0', NULL, 'POLI KB'),
(126, 0, 0, '2022-03-11', 1, '0', NULL, 'POLI UMUM'),
(127, 0, 0, '2022-03-11', 2, '0', NULL, 'POLI UMUM'),
(128, 0, 0, '2022-03-11', 1, '0', NULL, 'POLI GIGI & MULUT'),
(129, 0, 0, '2022-03-12', 1, '1', '2022-03-12 15:47:09', 'POLI GIGI & MULUT'),
(130, 0, 0, '2022-03-12', 1, '1', '2022-03-12 13:18:01', 'POLI UMUM'),
(131, 0, 0, '2022-03-12', 2, '0', NULL, 'POLI UMUM'),
(132, 0, 0, '2022-03-12', 3, '0', NULL, 'POLI UMUM'),
(133, 0, 0, '2022-03-12', 4, '0', NULL, 'POLI UMUM'),
(134, 0, 0, '2022-03-12', 5, '0', NULL, 'POLI UMUM'),
(135, 0, 0, '2022-03-12', 2, '1', '2022-03-12 15:47:04', 'POLI GIGI & MULUT'),
(136, 0, 0, '2022-03-12', 3, '1', '2022-03-12 15:47:06', 'POLI GIGI & MULUT'),
(137, 0, 0, '2022-03-12', 4, '1', '2022-03-12 15:47:06', 'POLI GIGI & MULUT'),
(138, 0, 0, '2022-03-12', 5, '1', '2022-03-12 15:47:07', 'POLI GIGI & MULUT'),
(139, 0, 0, '2022-03-12', 1, '1', '2022-03-12 22:50:12', 'LABORATORIUM'),
(140, 0, 0, '2022-03-12', 6, '0', NULL, 'POLI GIGI & MULUT'),
(141, 0, 0, '2022-03-12', 7, '0', NULL, 'POLI GIGI & MULUT'),
(142, 0, 0, '2022-03-12', 6, '0', NULL, 'POLI UMUM'),
(143, 0, 0, '2022-03-13', 1, '1', '2022-03-13 22:46:15', 'POLI UMUM'),
(144, 0, 0, '2022-03-13', 1, '0', NULL, 'POLI REFRAKSI'),
(145, 0, 0, '2022-03-14', 1, '1', '2022-03-14 09:19:58', 'POLI PERSALINAN'),
(146, 0, 0, '2022-03-14', 1, '1', '2022-03-14 13:19:00', 'POLI GIGI & MULUT'),
(147, 0, 0, '2022-03-14', 2, '0', NULL, 'POLI GIGI & MULUT'),
(148, 0, 0, '2022-03-14', 3, '0', NULL, 'POLI GIGI & MULUT'),
(149, 0, 0, '2022-03-14', 1, '1', '2022-03-14 13:23:20', 'POLI UMUM');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `peserta_bpjs`
--
ALTER TABLE `peserta_bpjs`
  ADD PRIMARY KEY (`id_pesertabpjs`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `no_bpjs` (`no_bpjs`);

--
-- Indeks untuk tabel `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_pesertabpjs` (`id_pesertabpjs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `peserta_bpjs`
--
ALTER TABLE `peserta_bpjs`
  MODIFY `id_pesertabpjs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
