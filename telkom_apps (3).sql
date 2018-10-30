-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 06:26 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkom_apps`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti_transaksi_user`
--

CREATE TABLE `bukti_transaksi_user` (
  `id_bukti` int(8) NOT NULL,
  `id_user` int(8) DEFAULT NULL,
  `point_user` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bukti_transaksi_user`
--

INSERT INTO `bukti_transaksi_user` (`id_bukti`, `id_user`, `point_user`) VALUES
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(11, 1, 1),
(12, 1, 1),
(13, 1, 1),
(14, 1, 1),
(15, 7, 1),
(16, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `caption_apps`
--

CREATE TABLE `caption_apps` (
  `id_caption` int(8) NOT NULL,
  `caption` text,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caption_apps`
--

INSERT INTO `caption_apps` (`id_caption`, `caption`, `status`) VALUES
(1, 'terimakasih yah', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user_apps`
--

CREATE TABLE `user_apps` (
  `id_user` int(8) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `wilayah_user` varchar(100) DEFAULT NULL,
  `no_hp_user` varchar(14) DEFAULT NULL,
  `total_point` varchar(8) DEFAULT '0',
  `username_user` varchar(50) DEFAULT NULL,
  `password_user` varchar(50) DEFAULT NULL,
  `rule` varchar(50) DEFAULT NULL,
  `status_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_apps`
--

INSERT INTO `user_apps` (`id_user`, `nama_user`, `wilayah_user`, `no_hp_user`, `total_point`, `username_user`, `password_user`, `rule`, `status_user`) VALUES
(1, 'Ade Fajr Ariav', 'Semarang', '083838191709', '7', 'iav', '123', 'Teknisi', 'Aktif'),
(6, 'Yusuf Anwar', 'Semarang', '085427854236', '1', 'Yus', '542085', 'Teknisi', 'Aktif'),
(7, 'Petugas Regional 1', 'Telkom Pusat', '083838191709', '7', 'reg1', '123', 'Regional', 'Aktif'),
(8, 'Petugas Wilayah DIY', 'DIY', '083838191709', NULL, 'wil1', '123', 'Wilayah', 'Aktif'),
(9, 'Iav Tamvan', 'Yogyakarta', '983274823344', '6', 'yap', '123', 'Teknisi', 'Aktif'),
(10, 'Iav Hercules', 'Yogyakarta', '783267883993', '10', 'yap1', '123', 'Teknisi', 'Aktif'),
(11, 'Petugas Wilayah JATENG', 'Jawa Tengah', '083838191709', NULL, 'wil2', '123', 'Wilayah', 'Aktif'),
(12, 'Iav Hercules', 'Solo', '783267883993', '4', 'solo', '123', 'Teknisi', 'Aktif'),
(13, 'Iav Hercules', 'Kudus', '783267883993', '45', 'kudus', '123', 'Teknisi', 'Aktif'),
(14, 'Iav Hercules', 'Magelang', '783267883993', '123', 'magelang', '123', 'Teknisi', 'Aktif'),
(15, 'Iav Hercules', 'Purwokerto', '783267883993', '5', 'purwokerto', '123', 'Teknisi', 'Aktif'),
(16, 'Iav Hercules', 'Pekalongan', '783267883993', '88', 'pekalongan', '123', 'Teknisi', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah_poin_apps`
--

CREATE TABLE `wilayah_poin_apps` (
  `id_wilayah` int(8) NOT NULL,
  `nama_wilayah` varchar(100) DEFAULT NULL,
  `jumlah_poin_wilayah` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_transaksi_user`
--
ALTER TABLE `bukti_transaksi_user`
  ADD PRIMARY KEY (`id_bukti`),
  ADD KEY `FK_bukti_transaksi_user_user_apps` (`id_user`);

--
-- Indexes for table `caption_apps`
--
ALTER TABLE `caption_apps`
  ADD PRIMARY KEY (`id_caption`);

--
-- Indexes for table `user_apps`
--
ALTER TABLE `user_apps`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wilayah_poin_apps`
--
ALTER TABLE `wilayah_poin_apps`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_transaksi_user`
--
ALTER TABLE `bukti_transaksi_user`
  MODIFY `id_bukti` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `caption_apps`
--
ALTER TABLE `caption_apps`
  MODIFY `id_caption` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_apps`
--
ALTER TABLE `user_apps`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wilayah_poin_apps`
--
ALTER TABLE `wilayah_poin_apps`
  MODIFY `id_wilayah` int(8) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukti_transaksi_user`
--
ALTER TABLE `bukti_transaksi_user`
  ADD CONSTRAINT `FK_bukti_transaksi_user_user_apps` FOREIGN KEY (`id_user`) REFERENCES `user_apps` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
