-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 11:26 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meter`
--

-- --------------------------------------------------------

--
-- Table structure for table `daya`
--

CREATE TABLE `daya` (
  `id_daya` int(11) NOT NULL,
  `daya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_reminder`
--

CREATE TABLE `email_reminder` (
  `id_email` int(11) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `email3` varchar(100) NOT NULL,
  `email4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expired`
--

CREATE TABLE `expired` (
  `id_exp` int(11) NOT NULL,
  `desk_exp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `golongan_pelanggaran`
--

CREATE TABLE `golongan_pelanggaran` (
  `id` int(11) NOT NULL,
  `golongan_pelanggaran` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `harmet`
--

CREATE TABLE `harmet` (
  `id_harmet` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_ba_harmet` varchar(20) DEFAULT NULL,
  `tanggal_ba_harmet` date DEFAULT NULL,
  `ket_harmet` text,
  `merk_harmet` varchar(20) DEFAULT NULL,
  `no_meter_harmet` varchar(20) DEFAULT NULL,
  `tahun_harmet` varchar(10) DEFAULT NULL,
  `stan_harmet` varchar(100) DEFAULT NULL,
  `foto_harmet` varchar(200) DEFAULT NULL,
  `status_harmet` varchar(10) DEFAULT NULL,
  `tanggal_penggantian_harmet` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `harmet_target`
--

CREATE TABLE `harmet_target` (
  `id_harmet_target` int(11) NOT NULL,
  `hari_harmet_target` int(11) DEFAULT NULL,
  `bulan_harmet_target` int(11) DEFAULT NULL,
  `tahun_harmet_target` int(11) DEFAULT NULL,
  `status_harmet_target` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harmet_target`
--

INSERT INTO `harmet_target` (`id_harmet_target`, `hari_harmet_target`, `bulan_harmet_target`, `tahun_harmet_target`, `status_harmet_target`) VALUES
(1, 1, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `noreg_pelanggan` varchar(12) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` varchar(500) NOT NULL,
  `tarif` varchar(50) NOT NULL,
  `daya` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lang` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `ket_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `id_target` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `noba_target` varchar(100) NOT NULL,
  `ket_target` text NOT NULL,
  `tindakan` text,
  `golongan_pelanggaran` char(5) DEFAULT NULL,
  `dok_target` varchar(100) NOT NULL,
  `dok_target2` varchar(100) NOT NULL,
  `dok_to` varchar(50) DEFAULT NULL,
  `pdfURL` varchar(255) NOT NULL,
  `tgl_create` datetime NOT NULL,
  `lat_target` float(10,6) NOT NULL,
  `lang_target` float(10,6) NOT NULL,
  `tgl_ba` datetime NOT NULL,
  `expired` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id_tarif` int(11) NOT NULL,
  `golongan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_level` int(11) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `telp_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daya`
--
ALTER TABLE `daya`
  ADD PRIMARY KEY (`id_daya`);

--
-- Indexes for table `email_reminder`
--
ALTER TABLE `email_reminder`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `expired`
--
ALTER TABLE `expired`
  ADD PRIMARY KEY (`id_exp`);

--
-- Indexes for table `golongan_pelanggaran`
--
ALTER TABLE `golongan_pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harmet`
--
ALTER TABLE `harmet`
  ADD PRIMARY KEY (`id_harmet`);

--
-- Indexes for table `harmet_target`
--
ALTER TABLE `harmet_target`
  ADD PRIMARY KEY (`id_harmet_target`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id_target`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daya`
--
ALTER TABLE `daya`
  MODIFY `id_daya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `email_reminder`
--
ALTER TABLE `email_reminder`
  MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `expired`
--
ALTER TABLE `expired`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `golongan_pelanggaran`
--
ALTER TABLE `golongan_pelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `harmet`
--
ALTER TABLE `harmet`
  MODIFY `id_harmet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `harmet_target`
--
ALTER TABLE `harmet_target`
  MODIFY `id_harmet_target` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `id_target` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
