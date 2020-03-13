-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 11:28 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

--
-- Dumping data for table `daya`
--

INSERT INTO `daya` (`id_daya`, `daya`) VALUES
(1, 450),
(2, 900),
(3, 1300),
(4, 2200),
(5, 3500),
(6, 4400),
(7, 5500),
(8, 6600),
(9, 7700),
(10, 10600),
(11, 11000),
(12, 13200),
(13, 16500),
(14, 23000),
(15, 33000),
(16, 41500),
(17, 53000),
(18, 66000),
(19, 82500),
(20, 105000),
(21, 131000),
(22, 147000),
(23, 164000),
(24, 197000);

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

--
-- Dumping data for table `email_reminder`
--

INSERT INTO `email_reminder` (`id_email`, `email1`, `email2`, `email3`, `email4`) VALUES
(1, 'jabrik.ta01@gmail.com', 'adihima.dev@gmail.com', 'sbautomedia@gmail.com', 'masedisubakir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `expired`
--

CREATE TABLE `expired` (
  `id_exp` int(11) NOT NULL,
  `desk_exp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expired`
--

INSERT INTO `expired` (`id_exp`, `desk_exp`) VALUES
(1, '777');

-- --------------------------------------------------------

--
-- Table structure for table `golongan_pelanggaran`
--

CREATE TABLE `golongan_pelanggaran` (
  `id` int(11) NOT NULL,
  `golongan_pelanggaran` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan_pelanggaran`
--

INSERT INTO `golongan_pelanggaran` (`id`, `golongan_pelanggaran`) VALUES
(1, 'K1'),
(2, 'K2'),
(3, 'P1'),
(4, 'P2'),
(5, 'P3'),
(6, 'P4');

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

--
-- Dumping data for table `harmet`
--

INSERT INTO `harmet` (`id_harmet`, `id_pelanggan`, `id_user`, `no_ba_harmet`, `tanggal_ba_harmet`, `ket_harmet`, `merk_harmet`, `no_meter_harmet`, `tahun_harmet`, `stan_harmet`, `foto_harmet`, `status_harmet`, `tanggal_penggantian_harmet`) VALUES
(1, 26, 1, NULL, NULL, NULL, 'Merk 26', 'No 26', '2019', 'Stan 26', 'Foto', '0', '2020-02-28 04:10:56'),
(2, 26, NULL, NULL, NULL, NULL, 'Merk 26 Update', 'No 26 Update', '2019 Updat', 'Stan 26 Update', NULL, '0', '2020-02-28 07:19:30'),
(3, 26, NULL, NULL, NULL, NULL, 'Merk 26', 'No 26', '2019', 'Stan 26', NULL, '1', '2020-02-28 07:20:32'),
(4, 10, NULL, NULL, NULL, NULL, '1', '2', '3', '4', NULL, '1', '2020-02-28 07:58:09'),
(5, 18, NULL, NULL, NULL, NULL, '1', '2', '3', '4', NULL, '0', '2020-02-28 08:03:10'),
(6, 18, NULL, NULL, NULL, NULL, '11', '22', '33', '44', NULL, '1', '2020-02-28 08:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'teknisi'),
(3, 'super admin');

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

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `noreg_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `tarif`, `daya`, `lat`, `lang`) VALUES
(1, '111111', 'Tamiran a', 'Jl. Ngagel Timur 5 No 334', 'R1M', 3500, 0.000000, 0.000000),
(6, '123456789', 'himawan', 'Jl. kenjeran 5 no. 11', 'S2', 1300, -7.251093, 112.748985),
(7, '987654321', 'Mas Edi s', 'Jl Kartini RT.03 RW.01 Ds.Kincang Wetan Ke.Jiwan Ka.Madiun', 'R1MT', 53000, 0.000000, 0.000000),
(9, '123123123', 'Maimunah', 'kenjeran 6', 'B1', 6600, -7.251093, 112.748985),
(11, '300003432', 'Eko Hadi', 'Jl Sawunggaling Ngajuk ', 'B1', 6600, 0.000000, 0.000000),
(12, '333333', 'ggggg', 'aaa', 'P3', 7700, 0.000000, 0.000000),
(13, '252525', 'hamham', 'jl.an', 'R1M', 3500, 0.000000, 0.000000),
(14, '441111', 'gggg', 'abc', 'S1', 450, -7.264228, 112.737907),
(16, '123789456', 'Yudha Prasetyo', 'Kutisari Utara IIIC No.05', 'R2', 4400, -7.333099, 112.749435),
(17, '55555', 'dewa', 'jl sepat', 'B2T', 131000, -7.234320, 112.761581),
(18, '3655001', 'adi', 'jl donokerto 5 surabaya', 'S1T', 23000, -7.241775, 112.753883),
(19, '12111', 'mat ali', 'Rungkut Industri 3', 'S1T', 2200, -7.351259, 112.690781),
(20, '454545', 'Moch Eka Sakti', 'Jl. Sawunggaling RT.03/06 Ds. Kwangsen Kec. Jiwan Kab. Madiun', 'S1T', 4400, -7.550819, 112.558640),
(21, '12345123', 'jeje', 'kalikepiting', 'R3', 6600, -7.121230, 122.213120),
(22, '678345', 'kiki', 'tambaksari', 'R2', 6, 0.000000, 0.000000),
(23, '45555', 'gigih', 'kenjeran', 'R1M', 6, -7.241560, 112.756012),
(24, '9090', 'dudjd', 'shsjs', 'B2', 6, -7.237934, 112.758598),
(25, '679595', 'dhdjdj', 'hsdhdu', 'R3', 10, -7.241568, 112.755249),
(26, 'djdjd', 'ehdud', 'djdjd', 'B3', 10, -7.238897, 112.758224),
(29, '90909090', 'budi', 'hhhhhh', 'S1', 450, -7.238897, 112.758224),
(30, '678', 'sisirdonk', 'jakaks', 'R2', 450, -7.239170, 112.755180),
(31, '7777', 'yuyu', 'dhdh', 'I1', 7, -7.239192, 112.758598),
(32, '222222', 'himmmmm', 'dhfjfh', 'B1', 11, -7.239192, 112.758598),
(34, '7591577', 'tofan', 'granting selatan 3', 'I1', 10, -7.237894, 112.759155),
(35, '3455', 'gugugug', 'ugug', 'B1', 6, -7.262556, 112.739067),
(36, '777755544', 'Taryono', 'Ds Widuri RT.22 RW.06 Pagotan', 'B2', 105, -7.548984, 112.610229),
(37, '65477888', 'hi try ugg', 'g to h go k g yhhhgff Ed\ng get hhgff do jk I oo', 'B2', 7, -7.548962, 112.617714),
(38, '87659877', 'hgfddgjj', 'j hi fh go to drdgggf', 'B2', 6, -7.544061, 112.621185),
(39, '65443', 'jhhfxdkj', 'jgvhjjjjj', 'B2', 5, -7.544328, 112.620232),
(40, '661717', 'Warsito Djojo', 'shshsh', 'S2', 900, -7.241696, 112.755814),
(41, '12345', 'coba comoare', 'shsh', 'R1M', 6, -7.241234, 112.755623),
(42, '77777', 'hima', 'sidotopo wetan', 'R3', 6, -7.241765, 112.757484),
(43, '7777', 'hihihi', 'ajajs', 'B2', 10, -7.241510, 112.756363),
(44, 'uuuu', 'djdh', 'djdj', 'B2', 10, -7.241254, 112.755249),
(45, '252635', 'cici', 'shsh', 'R1', 5, -7.240188, 112.756454),
(46, '65666,9', 'bgfhh', 'bhvhhbn', 'B3', 7, -7.551057, 112.558556),
(47, '35958866', 'hchjhh hgghh', 'nhghhhjhvvh', 'B1', 5, -7.550976, 112.558571),
(48, '6658869', 'hhshdbd', 'bjsshshjdjjdd', 'B1', 6, -7.550988, 112.558670),
(49, '3889', 'vhhb', 'vgcbhhh', 'R3', 7, -7.550976, 112.558563),
(50, '11111111', 'fgghg', 'byghbhhn', 'B1', 10, -7.550975, 112.558563),
(51, '00000000', 'gfbugvvh', 'bhgcghhhh hggggggg', 'R3', 4, -7.550975, 112.558563),
(52, '9999', 'fdghhhh', 'ghhbhjhh', 'B2', 5, -7.549785, 112.562820),
(53, '0000000000', 'hghnvb', 'ghbhjbh', 'R2', 5, -7.550946, 112.558693),
(54, '22222', 'hjjbn', 'vjbbnnj', 'B1', 10, -7.551029, 112.558510),
(55, '555555', 'hhhh', 'hjbjjbb', 'R2', 5, -7.550979, 112.558571),
(56, '55655', 'hdhdbd', 'bdjzhnsns', 'R2', 5, -7.550938, 112.558487),
(57, '888888', 'rfrffffc', 'hFChjgh ghbvgh', 'B1', 10, -7.550938, 112.558479),
(58, '33333333333', 'gfbkjh', 'hhmmbbh', 'R3', 3, -7.551537, 112.558807),
(59, '', 'Percobaan', 'Satu', '', 0, 0.000000, 0.000000),
(60, '312950051340', 'NURLELA', 'JL DS. IPI', 'R1M', 900, -2.478488, 121.934402),
(61, '312950051220', 'MUH. MUZAKAR', 'JL KEL. LAMBEREA', 'R1', 900, -2.542724, 121.966370),
(62, '312950008720', 'HASAN S', 'JL DS UNSONGI', 'R1', 450, -2.633250, 122.006493),
(63, '312950006220', 'YUSUP.L', 'JL UNSONGI', 'R1', 450, -2.626193, 122.002228),
(64, '312950046720', 'MOH. SYARIF', 'JL DS. UNSONGI', 'R1', 450, -2.626193, 122.002228),
(65, '312950010880', 'BASOHA', 'JL DS UNSONGI', 'R1', 450, -2.624628, 122.001160),
(66, '312950049260', 'ILIAS', 'JL DS. UNSONGI', 'R1', 450, -2.624628, 122.001160),
(67, '312110067752', 'ILMUDIN', 'DS TRANS LANONA BLOK E. 32', 'R1', 450, -2.426194, 121.883118),
(68, '312950008290', 'ARMAN SINE', 'JL DESA LAFUAFU', 'R1', 450, -2.597841, 121.989784),
(69, '312950051340', 'NURLELA', 'JL DS. IPI', 'R1M', 900, -2.478488, 121.934402),
(70, '312950051220', 'MUH. MUZAKAR', 'JL KEL. LAMBEREA', 'R1', 900, -2.542724, 121.966370),
(71, '312950008720', 'HASAN S', 'JL DS UNSONGI', 'R1', 450, -2.633250, 122.006493),
(72, '312950006220', 'YUSUP.L', 'JL UNSONGI', 'R1', 450, -2.626193, 122.002228),
(73, '312950046720', 'MOH. SYARIF', 'JL DS. UNSONGI', 'R1', 450, -2.626193, 122.002228),
(74, '312950010880', 'BASOHA', 'JL DS UNSONGI', 'R1', 450, -2.624628, 122.001160),
(75, '312950049260', 'ILIAS', 'JL DS. UNSONGI', 'R1', 450, -2.624628, 122.001160),
(76, '312110067752', 'ILMUDIN', 'DS TRANS LANONA BLOK E. 32', 'R1', 450, -2.426194, 121.883118),
(77, '312950008290', 'ARMAN SINE', 'JL DESA LAFUAFU', 'R1', 450, -2.597841, 121.989784);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `ket_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `ket_status`) VALUES
(1, 'Panggilan Ke-1'),
(2, 'Panggilan Ke-2'),
(3, 'Panggilan Ke-3'),
(4, 'Peringatan Ke-1'),
(5, 'Peringatan Ke-2'),
(6, 'Peringatan Ke-3'),
(7, 'Ok'),
(8, 'Blokir');

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

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`id_target`, `id_pelanggan`, `id_user`, `id_status`, `noba_target`, `ket_target`, `tindakan`, `golongan_pelanggaran`, `dok_target`, `dok_target2`, `dok_to`, `pdfURL`, `tgl_create`, `lat_target`, `lang_target`, `tgl_ba`, `expired`, `tgl_selesai`) VALUES
(1, 6, 2, 1, 'APS/0035-BA/19', 'Tidak ada temuan', NULL, NULL, '', '', NULL, '', '2019-10-20 00:00:00', -7.238288, 112.757858, '2019-10-29 11:43:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 11, 2, 7, 'APS/77-BA/19', 'tidak ada temuan', NULL, NULL, 'ijcnywmgjkguczzrnszu.png', '', NULL, '', '2019-10-22 06:25:17', -7.512310, 112.512299, '2019-10-19 11:00:00', '2019-10-19 11:00:00', '2019-10-29 00:00:00'),
(10, 1, 8, 8, 'ba.00264/10/23/x/2019', 'hshakksgg', NULL, 'K2', '1.jpg', '2.jpg', NULL, '', '2019-10-22 00:00:00', -2.554605, 121.968819, '2019-10-25 13:34:44', '2019-11-27 00:00:01', '0000-00-00 00:00:00'),
(13, 7, 2, 8, 'ba.00111/10/23/x/2019', 'ok', NULL, NULL, 'cxwcwxjvrhbnsupycxvh.png', '', NULL, '', '2019-10-23 13:19:35', -7.551141, 112.558266, '2019-10-18 13:39:08', '2019-11-23 00:00:01', '0000-00-00 00:00:00'),
(15, 16, 5, 3, 'ba.00077/10/23/x/2019', 'ada kerusakan pada rumah meteran', NULL, NULL, 'uigabgauxqxywezifxbw.png', '', NULL, '', '2019-10-23 08:46:10', -7.263897, 112.739532, '2019-10-23 17:20:43', '2019-11-08 00:00:00', '0000-00-00 00:00:00'),
(17, 13, 2, 8, 'APS/56-BA/2019', 'tes ba', NULL, NULL, 'qihbxyizdnxhrjmyudsa.png', '', NULL, '', '2019-10-24 16:50:24', -7.540393, 112.560631, '2019-10-24 16:58:24', '2019-12-01 00:00:02', '0000-00-00 00:00:00'),
(18, 9, 2, 1, 'BA/0025-APS/19', 'tes deskripsi', NULL, NULL, 'kjamvzvvirmstqmyuxzy.png', 'nzsnpjmxynryucyxpfcq2.png', NULL, '', '2019-10-25 13:45:15', -7.550973, 112.558472, '2019-12-04 08:27:07', '2019-12-04 08:27:07', '2019-11-01 13:36:43'),
(23, 6, 5, 7, 'ba.00038/10/23/x/2019', 'asdasd', NULL, NULL, 'asdasd', '', NULL, '', '2019-10-29 21:14:37', -7.123123, 122.123123, '2019-10-29 21:14:37', '2019-11-07 00:00:00', '2019-11-12 14:29:54'),
(24, 12, 2, 1, 'abc', 'abc', NULL, NULL, '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACAWGBwYFCAcGhwkIiAmMFA0MCwsMGJGSjpQdGZ6eHJm\ncG6AkLicgIiuim5woNqirr7', '', NULL, '', '2019-10-29 21:25:58', -7.262544, 112.739067, '2019-10-29 21:25:58', '2019-10-29 21:25:58', '0000-00-00 00:00:00'),
(25, 14, 2, 7, 'APS/0004-BA/19', 'Tidak ada temuan', NULL, NULL, '', '', NULL, '', '2019-10-29 21:38:03', -7.262552, 112.739067, '2019-10-29 21:38:03', '0000-00-00 00:00:00', '2019-10-29 21:38:03'),
(26, 17, 9, 0, '', '', NULL, NULL, '', '', NULL, '', '2019-11-03 11:08:36', 0.000000, 0.000000, '2019-11-03 11:08:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 18, 8, 0, '', '', NULL, NULL, '', '', NULL, '', '2019-11-03 15:07:13', 0.000000, 0.000000, '2019-11-03 15:07:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 23, 2, 3, '123123', 'adasdasd', NULL, NULL, 'asd', '', NULL, '', '2019-11-20 00:00:00', -10000.000000, 122.123123, '2019-11-20 00:00:00', '2019-12-05 13:00:02', '0000-00-00 00:00:00'),
(29, 29, 2, 5, '1257171', 'hshsjdj\ndjdhdh\nsjsh', NULL, NULL, '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACAWGBwYFCAcGhwkIiAmMFA0MCwsMGJGSjpQdGZ6eHJm\ncG6AkLicgIiuim5woNqirr7', '', NULL, '', '2019-11-20 14:13:07', -7.238897, 112.758224, '2019-11-20 14:13:07', '2019-12-01 10:12:38', '0000-00-00 00:00:00'),
(30, 30, 2, 3, '56718', 'shshdh', NULL, NULL, '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACAWGBwYFCAcGhwkIiAmMFA0MCwsMGJGSjpQdGZ6eHJm\ncG6AkLicgIiuim5woNqirr7', '', NULL, '', '2019-11-20 14:26:54', -7.239170, 112.755180, '2019-11-20 14:26:54', '2019-12-05 11:00:02', '0000-00-00 00:00:00'),
(31, 34, 2, 4, '56b71616', 'hdjdhdu\njdjdjud\njejej', NULL, NULL, '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACAWGBwYFCAcGhwkIiAmMFA0MCwsMGJGSjpQdGZ6eHJm\ncG6AkLicgIiuim5woNqirr7', '', NULL, '', '2019-11-20 14:38:10', -7.237894, 112.759155, '2019-11-20 14:38:10', '2019-12-02 15:18:18', '0000-00-00 00:00:00'),
(32, 0, 0, 0, '', '', NULL, NULL, '', '', NULL, 'asdasd.pdf', '0000-00-00 00:00:00', 0.000000, 0.000000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 0, 0, 0, '', '', NULL, NULL, '', '', NULL, 'asdasd.pdf', '0000-00-00 00:00:00', 0.000000, 0.000000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 35, 2, 8, '233', 'guvufyrygugy', NULL, NULL, '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACAWGBwYFCAcGhwkIiAmMFA0MCwsMGJGSjpQdGZ6eHJm\ncG6AkLicgIiuim5woNqirr7', '', NULL, '', '2019-11-26 19:15:33', -7.262556, 112.739067, '2019-11-26 19:15:33', '2019-12-16 00:00:01', '0000-00-00 00:00:00'),
(60, 0, 0, 0, '', '', NULL, NULL, '', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/35.pdf', '0000-00-00 00:00:00', 0.000000, 0.000000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 0, 0, 0, '', '', NULL, NULL, '', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/coba.pdf', '0000-00-00 00:00:00', 0.000000, 0.000000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 0, 0, 0, '', '', NULL, NULL, '', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/62.pdf', '0000-00-00 00:00:00', 0.000000, 0.000000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 40, 2, 0, '', '', NULL, NULL, 'ndgkrvuxwpdnjqscsyhi.png', 'fhrrvvdaathipxtehvru2.png', NULL, '', '2019-11-30 10:51:32', -7.550816, 112.558937, '2019-12-03 10:59:09', '2019-12-03 10:59:09', '0000-00-00 00:00:00'),
(65, 42, 2, 8, '1234556', 'shshdhdheb\nsjdhdh', NULL, NULL, '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACAWGBwYFCAcGhwkIiAmMFA0MCwsMGJGSjpQdGZ6eHJm\ncG6AkLicgIiuim5woNqirr7', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	65.pdf', '2019-11-30 11:03:44', -7.241765, 112.757484, '2019-11-30 11:03:44', '2019-12-20 00:00:03', '0000-00-00 00:00:00'),
(66, 43, 2, 8, '273737', 'bdhhcb', NULL, NULL, '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACAWGBwYFCAcGhwkIiAmMFA0MCwsMGJGSjpQdGZ6eHJm\ncG6AkLicgIiuim5woNqirr7', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	66.pdf', '2019-11-30 11:12:26', -7.241510, 112.756363, '2019-11-30 11:12:26', '2019-12-20 00:00:03', '0000-00-00 00:00:00'),
(67, 44, 2, 2, '3636', 'dhdh', NULL, NULL, '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACAWGBwYFCAcGhwkIiAmMFA0MCwsMGJGSjpQdGZ6eHJm\ncG6AkLicgIiuim5woNqirr7', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	67.pdf', '2019-11-30 11:14:36', -7.241254, 112.755249, '2019-11-30 11:14:36', '2019-12-03 00:01:01', '0000-00-00 00:00:00'),
(68, 45, 2, 2, '1232', 'shshsh\nsjdjdh\nshdhd', NULL, NULL, 'temtspiejuzbkpwmubbi.png', 'temtspiejuzbkpwmubbi2.png', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	68.pdf', '2019-11-30 11:41:37', -7.240188, 112.756454, '2019-11-30 11:41:37', '2019-12-03 00:02:02', '0000-00-00 00:00:00'),
(69, 46, 2, 2, '66999.cfhhh', 'hhghbbbhjj', NULL, NULL, 'xydedcuucczgersqicbt.png', 'xydedcuucczgersqicbt2.png', NULL, '', '2019-12-02 14:30:13', -7.551057, 112.558556, '2019-12-02 14:30:13', '2019-12-05 14:00:01', '0000-00-00 00:00:00'),
(70, 47, 2, 2, 'hgbnjjj', 'jgjbbn', NULL, NULL, 'pkskcdwgzrswnacgmbnz.png', 'pkskcdwgzrswnacgmbnz2.png', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	70.pdf', '2019-12-02 14:56:06', -7.550976, 112.558571, '2019-12-02 14:56:06', '2019-12-05 14:00:02', '0000-00-00 00:00:00'),
(71, 48, 2, 1, 'bhsjshshs', 'hcudnd', NULL, NULL, 'wqxcrwnkjbktxskdtnex.png', 'wqxcrwnkjbktxskdtnex2.png', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	71.pdf', '2019-12-02 14:59:39', -7.550988, 112.558670, '2019-12-02 14:59:39', '2019-12-02 14:59:39', '0000-00-00 00:00:00'),
(72, 49, 2, 2, 'hgvbhjj', 'bhjggvvvbb', NULL, NULL, 'kktmdeynamccpvbttpzv.png', 'kktmdeynamccpvbttpzv2.png', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	72.pdf', '2019-12-02 15:29:28', -7.550976, 112.558563, '2019-12-02 15:29:28', '2019-12-05 15:00:01', '0000-00-00 00:00:00'),
(73, 50, 2, 2, '5889.cfgh', 'vhbfhh', NULL, 'P1', 'jngzyekyajtvgmbcyzah.png', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	73.pdf', '2019-12-02 16:05:47', -7.550975, 112.558563, '2019-12-02 16:05:47', '2019-12-05 16:00:02', '0000-00-00 00:00:00'),
(74, 0, 2, 0, '00008888000', 'hfcghb hvgggg bghhg', NULL, NULL, 'buypyujdvbhjpbphygqt.png', '', NULL, '', '2020-02-28 14:33:06', -2.478000, 121.932999, '2019-12-02 16:18:26', '2019-12-05 16:00:02', '0000-00-00 00:00:00'),
(75, 52, 2, 1, 'hgvhgh', 'vhjnhjbbhh', NULL, NULL, 'xdahfzhmtxtmrfwagsfk.png', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	75.pdf', '2019-12-02 16:36:22', -7.549785, 112.562820, '2019-12-02 16:36:22', '2019-12-02 16:36:22', '0000-00-00 00:00:00'),
(76, 0, 2, 0, 'bgvhbhvgh', 'bvhhhhh.bghhbhhh\nbbjh', NULL, 'K1', 'jeptkvapginziybntpgw.png', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	76.pdf', '2020-02-28 14:49:43', -7.550946, 112.558693, '2019-12-02 16:47:31', '2019-12-02 16:47:31', '0000-00-00 00:00:00'),
(77, 54, 2, 1, 'jghbbbb', 'jgvbbjhjhhh\nbjh', NULL, NULL, 'zfzdikrrgdrzkzpzmmaw.png', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	77.pdf', '2019-12-02 16:50:12', -7.551029, 112.558510, '2019-12-02 16:50:12', '2019-12-02 16:50:12', '0000-00-00 00:00:00'),
(78, 55, 2, 1, 'hfgh', 'hhbnhj', NULL, NULL, 'rxjezcjakgyppzgnrwbv.png', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	78.pdf', '2019-12-02 17:08:47', -7.550979, 112.558571, '2019-12-02 17:08:47', '2019-12-02 17:08:47', '0000-00-00 00:00:00'),
(79, 41, 9, 0, '', '', NULL, NULL, '', '', NULL, '', '2019-12-02 19:57:22', 0.000000, 0.000000, '2019-12-02 19:57:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 56, 2, 1, 'ndhxbd', 'hdhdbsh', NULL, NULL, 'mnqncmpuhrzubjgrztdk.png', '', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	80.pdf', '2019-12-03 09:49:07', -7.550938, 112.558487, '2019-12-03 09:49:07', '2019-12-03 09:49:07', '0000-00-00 00:00:00'),
(81, 57, 2, 1, '6956656cgg', 'gfbvg gHDfgGBhh', NULL, NULL, 'zfwwazswyxxwbpnwctdw.png', 'bhjmhavxnqnbqviiyipx2.png', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	81.pdf', '2019-12-03 10:11:33', -7.550938, 112.558479, '2019-12-03 10:11:33', '2019-12-03 10:11:33', '0000-00-00 00:00:00'),
(82, 58, 2, 1, 'byfcghh', 'hghj', NULL, NULL, 'fxcnpchwbsuvdccqmuar.png', 'ekewwwhsmuzcgbdnnhek2.png', NULL, 'https://sbautomedia.com/meter/PdfUploadFolder/	82.pdf', '2019-12-05 09:38:54', -7.551537, 112.558807, '2019-12-05 09:38:54', '2019-12-05 09:38:54', '0000-00-00 00:00:00'),
(87, 12, 9, 0, '', '', NULL, NULL, '', '', '1976722046.jpg', '', '2020-03-06 13:14:27', 0.000000, 0.000000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id_tarif` int(11) NOT NULL,
  `golongan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id_tarif`, `golongan`) VALUES
(1, 'S1'),
(2, 'S2'),
(3, 'S3'),
(4, 'R1'),
(5, 'R1M'),
(6, 'R2'),
(7, 'R3'),
(8, 'B1'),
(9, 'B2'),
(10, 'B3'),
(11, 'L1'),
(12, 'L2'),
(13, 'L3'),
(14, 'P1'),
(15, 'P2'),
(16, 'P3'),
(17, 'S1T'),
(18, 'S2T'),
(19, 'R1T'),
(20, 'R1MT'),
(21, 'R2T'),
(22, 'R3T'),
(23, 'B1T'),
(24, 'B2T'),
(25, 'P1T'),
(26, 'P3T'),
(27, 'L1T');

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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `id_level`, `email_user`, `telp_user`) VALUES
(4, 'Superadmin', '461203800', '123456', 1, 'sbautomedia@gmail.com', '081777777777'),
(9, 'Teknisi', 'teknisi', '123', 2, 'traveller@bambangdjaja.com', '085608560856');

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
  MODIFY `id_harmet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
