-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jul 2017 pada 03.14
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmdom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_kerja`
--

CREATE TABLE `program_kerja` (
  `id_pk` int(255) NOT NULL,
  `MA` varchar(1000) NOT NULL,
  `nama_pk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_kerja`
--

INSERT INTO `program_kerja` (`id_pk`, `MA`, `nama_pk`) VALUES
(4, '696969', 'Tol Kalimalang'),
(6, '123', 'Program Kerja'),
(7, '123123', 'Coba Program');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_program`
--

CREATE TABLE `sub_program` (
  `id_sp` int(255) NOT NULL,
  `id_pk` int(25) NOT NULL,
  `nama_sp` varchar(255) NOT NULL,
  `total_rkap` int(100) NOT NULL,
  `total_status` int(100) NOT NULL,
  `total_realisasi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_program`
--

INSERT INTO `sub_program` (`id_sp`, `id_pk`, `nama_sp`, `total_rkap`, `total_status`, `total_realisasi`) VALUES
(3, 4, 'Tol Kalimalang 2', 0, 0, 0),
(4, 6, 'Program Kerja A', 0, 0, 0),
(5, 7, 'Coba Program B', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tw`
--

CREATE TABLE `tw` (
  `id_tw` int(255) NOT NULL,
  `status_tw` varchar(4) NOT NULL,
  `tahun` int(100) NOT NULL,
  `rkap` int(100) NOT NULL,
  `status_akhir` int(100) NOT NULL,
  `realisasi` int(100) NOT NULL,
  `id_pk` int(100) NOT NULL,
  `id_sp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tw`
--

INSERT INTO `tw` (`id_tw`, `status_tw`, `tahun`, `rkap`, `status_akhir`, `realisasi`, `id_pk`, `id_sp`) VALUES
(1, 'TW 2', 2017, 2000000, 2000000, 3000000, 4, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `cabang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `cabang`) VALUES
(1, 'selfiq', '123456', 'user', ''),
(2, 'amostiberio', 'amos123', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `program_kerja`
--
ALTER TABLE `program_kerja`
  ADD PRIMARY KEY (`id_pk`);

--
-- Indexes for table `sub_program`
--
ALTER TABLE `sub_program`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `tw`
--
ALTER TABLE `tw`
  ADD PRIMARY KEY (`id_tw`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `program_kerja`
--
ALTER TABLE `program_kerja`
  MODIFY `id_pk` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sub_program`
--
ALTER TABLE `sub_program`
  MODIFY `id_sp` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tw`
--
ALTER TABLE `tw`
  MODIFY `id_tw` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
