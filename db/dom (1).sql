-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 08:58 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

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
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(20) NOT NULL,
  `nama_cabang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`) VALUES
(1, 'Jagorawi'),
(2, 'Kalimalang'),
(3, 'Jatiwaringin');

-- --------------------------------------------------------

--
-- Table structure for table `program_kerja`
--

CREATE TABLE `program_kerja` (
  `id_pk` int(255) NOT NULL,
  `MA` varchar(1000) NOT NULL,
  `nama_pk` text NOT NULL,
  `id_cabang` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_kerja`
--

INSERT INTO `program_kerja` (`id_pk`, `MA`, `nama_pk`, `id_cabang`) VALUES
(6, '0001', 'Apa', 1),
(7, '222', 'App', 1),
(8, '808080', 'Coba Program', 2),
(9, '122', 'Pembangunan Toilet', 2),
(10, '12938', 'Selfi Coba Program', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_program`
--

CREATE TABLE `sub_program` (
  `id_sp` int(255) NOT NULL,
  `nama_sp` varchar(1000) NOT NULL,
  `id_pk` int(10) NOT NULL,
  `id_cabang` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_program`
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
(16, 'Coba Program AA', 8, 2),
(17, 'K', 8, 2),
(18, 'K', 9, 2),
(19, 'Coba aja', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tw_rc`
--

CREATE TABLE `tw_rc` (
  `id_twrc` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `stat_twrc` int(1) NOT NULL,
  `rkap` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tw_rc`
--

INSERT INTO `tw_rc` (`id_twrc`, `id_sp`, `tahun`, `stat_twrc`, `rkap`) VALUES
(57, 7, 2016, 1, '1'),
(58, 7, 2016, 2, '1'),
(59, 7, 2016, 3, '1'),
(60, 7, 2016, 4, '1'),
(61, 7, 2016, 1, '3'),
(62, 7, 2016, 2, '3'),
(63, 7, 2016, 3, '3'),
(64, 7, 2016, 4, '3'),
(65, 16, 2016, 1, '1'),
(66, 16, 2016, 2, '1'),
(67, 16, 2016, 3, '1'),
(68, 16, 2016, 4, '1'),
(93, 19, 2017, 1, '120'),
(94, 19, 2017, 2, '120'),
(95, 19, 2017, 3, '121'),
(96, 19, 2017, 4, '121');

-- --------------------------------------------------------

--
-- Table structure for table `tw_real`
--

CREATE TABLE `tw_real` (
  `id_twrl` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `stat_twrl` int(1) NOT NULL,
  `stat_akhirrl` decimal(20,0) NOT NULL,
  `realisasi_rl` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tw_real`
--

INSERT INTO `tw_real` (`id_twrl`, `id_sp`, `tahun`, `stat_twrl`, `stat_akhirrl`, `realisasi_rl`) VALUES
(1, 19, 2017, 1, '123123', '123123'),
(2, 19, 2016, 1, '123123', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `id_cabang` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
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
  MODIFY `id_pk` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sub_program`
--
ALTER TABLE `sub_program`
  MODIFY `id_sp` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tw_rc`
--
ALTER TABLE `tw_rc`
  MODIFY `id_twrc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `tw_real`
--
ALTER TABLE `tw_real`
  MODIFY `id_twrl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
