-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jul 2017 pada 05.33
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(20) NOT NULL,
  `nama_cabang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`) VALUES
(1, 'Jagorawi'),
(2, 'Kalimalang'),
(3, 'Jatiwaringin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_kerja`
--

CREATE TABLE `program_kerja` (
  `id_pk` int(255) NOT NULL,
  `MA` varchar(1000) NOT NULL,
  `nama_pk` text NOT NULL,
  `id_cabang` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_kerja`
--

INSERT INTO `program_kerja` (`id_pk`, `MA`, `nama_pk`, `id_cabang`) VALUES
(6, '0001', 'Apa', 1),
(7, '222', 'App', 1),
(8, '808080', 'Coba Program', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_program`
--

CREATE TABLE `sub_program` (
  `id_sp` int(255) NOT NULL,
  `nama_sp` varchar(1000) NOT NULL,
  `id_pk` int(10) NOT NULL,
  `id_cabang` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_program`
--

INSERT INTO `sub_program` (`id_sp`, `nama_sp`, `id_pk`, `id_cabang`) VALUES
(7, 'Apa1', 6, 1),
(8, 'Apa2', 6, 2),
(9, 'Alala', 7, 2),
(10, 'Alala', 6, 3),
(11, 'Apa1', 7, 3),
(12, 'Apa2', 7, 1),
(13, 'Coba', 7, 2),
(14, 'Coba', 6, 1),
(16, 'Coba Program AA', 8, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tw_rc`
--

CREATE TABLE `tw_rc` (
  `id_twrc` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `stat_twrc` int(1) NOT NULL,
  `rkap` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tw_rc`
--

INSERT INTO `tw_rc` (`id_twrc`, `id_sp`, `tahun`, `stat_twrc`, `rkap`) VALUES
(57, 7, 2016, 1, '1'),
(58, 7, 2016, 2, '1'),
(59, 7, 2016, 3, '1'),
(60, 7, 2016, 4, '1'),
(61, 7, 2016, 1, '3'),
(62, 7, 2016, 2, '3'),
(63, 7, 2016, 3, '3'),
(64, 7, 2016, 4, '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tw_real`
--

CREATE TABLE `tw_real` (
  `id_twrl` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `stat_twrl` int(1) NOT NULL,
  `stat_akhirrl` decimal(20,0) NOT NULL,
  `realisasi_rl` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `id_cabang` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `id_cabang`) VALUES
(1, 'selfiq', '123456', 'user', 1),
(2, 'rachel', '12345', 'user', 2),
(3, 'amostiberio', 'amos123', 'user', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

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
-- Indexes for table `tw_rc`
--
ALTER TABLE `tw_rc`
  ADD PRIMARY KEY (`id_twrc`);

--
-- Indexes for table `tw_real`
--
ALTER TABLE `tw_real`
  ADD PRIMARY KEY (`id_twrl`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `program_kerja`
--
ALTER TABLE `program_kerja`
  MODIFY `id_pk` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sub_program`
--
ALTER TABLE `sub_program`
  MODIFY `id_sp` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tw_rc`
--
ALTER TABLE `tw_rc`
  MODIFY `id_twrc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `tw_real`
--
ALTER TABLE `tw_real`
  MODIFY `id_twrl` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
