-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 02:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penyewaanmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `manajemenmobil`
--

CREATE TABLE `manajemenmobil` (
  `id` int(11) NOT NULL,
  `merek_mobil` varchar(200) NOT NULL,
  `model_mobil` varchar(200) NOT NULL,
  `nomor_plat` varchar(200) NOT NULL,
  `tarip_sewa_perhari` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manajemenmobil`
--

INSERT INTO `manajemenmobil` (`id`, `merek_mobil`, `model_mobil`, `nomor_plat`, `tarip_sewa_perhari`) VALUES
(2, 'avanza', 'kijang re', 'D 889 SAT', '1200.000');

-- --------------------------------------------------------

--
-- Table structure for table `peminjamanmobil`
--

CREATE TABLE `peminjamanmobil` (
  `id` int(11) NOT NULL,
  `tagal_pinjam` date NOT NULL,
  `tagal_kembali` date NOT NULL,
  `jenis_mobil` varchar(200) NOT NULL,
  `Nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `Nomor_telpon` varchar(15) NOT NULL,
  `Nomor_sim` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `Nama`, `Alamat`, `Nomor_telpon`, `Nomor_sim`) VALUES
(10, 'herlambang', 'bandung', '09873624', '234151');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manajemenmobil`
--
ALTER TABLE `manajemenmobil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merek_mobil` (`merek_mobil`,`nomor_plat`);

--
-- Indexes for table `peminjamanmobil`
--
ALTER TABLE `peminjamanmobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Nomor_sim` (`Nomor_sim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manajemenmobil`
--
ALTER TABLE `manajemenmobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjamanmobil`
--
ALTER TABLE `peminjamanmobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
