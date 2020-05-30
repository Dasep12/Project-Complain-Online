-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 03:20 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complain`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_it`
--

CREATE TABLE `admin_it` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `sekolah` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `poto` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `last_online` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_it`
--

INSERT INTO `admin_it` (`id`, `nama`, `username`, `pass`, `nik`, `level`, `sekolah`, `jurusan`, `alamat`, `poto`, `status`, `last_online`) VALUES
(1, 'Dasep', 'Dasep', '123', '2015045465', 'IT', 'SMK DWI PUTRA', 'Teknik Komputer & Jaringan', 'Bandung', NULL, 'offline', '2020-05-30 / 08:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `complain_selesai`
--

CREATE TABLE `complain_selesai` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `isi_complain` varchar(255) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `folder` varchar(255) DEFAULT NULL,
  `pengirim` varchar(255) DEFAULT NULL,
  `tgl` varchar(20) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `no_ticket` varchar(100) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `it` varchar(100) DEFAULT NULL,
  `balasan` varchar(255) DEFAULT NULL,
  `waktu` varchar(244) DEFAULT NULL,
  `durasi` varchar(40) DEFAULT NULL,
  `tgl_selesai` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain_selesai`
--

INSERT INTO `complain_selesai` (`id`, `judul`, `category`, `isi_complain`, `filename`, `folder`, `pengirim`, `tgl`, `lokasi`, `no_ticket`, `status`, `it`, `balasan`, `waktu`, `durasi`, `tgl_selesai`) VALUES
(1, 'Minta Instal Ul', 'Software', 'Tolong Komputer Saya Perlu di instal ulang', '', '<br />\r\n<b>Notice</b>:  Undefined index: folder in <b>C:xampphtdocsProject-Complain-OnlineADMINISTRATORdetail-complain.php</b> on line <b>14</b><br />\r\n', 'Andi', '2020-05-30', 'Lantai-8', 'PTDI0530050', 'done', 'dasep', 'Coba lagi', '08:13:54', '0 jam 4 menit 4 detik', '2020-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_complain`
--

CREATE TABLE `tabel_complain` (
  `id` int(11) NOT NULL,
  `tgl` varchar(15) DEFAULT NULL,
  `lokasi` varchar(15) DEFAULT NULL,
  `category` varchar(60) DEFAULT NULL,
  `judul` varchar(60) DEFAULT NULL,
  `isi_complain` varchar(255) DEFAULT NULL,
  `pengirim` varchar(15) DEFAULT NULL,
  `no_ticket` varchar(60) DEFAULT NULL,
  `status` varchar(60) DEFAULT NULL,
  `waktu` varchar(15) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `it` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `folder` varchar(100) NOT NULL,
  `poto` varchar(100) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `level` varchar(60) NOT NULL,
  `sekolah` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `bergabung` varchar(60) NOT NULL,
  `last_online` varchar(100) NOT NULL,
  `divisi` varchar(60) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `nik`, `pass`, `lokasi`, `folder`, `poto`, `gender`, `level`, `sekolah`, `alamat`, `jurusan`, `bergabung`, `last_online`, `divisi`, `status`) VALUES
(12, 'Andi Gunawan', 'Andi', '201504546', '123456', 'Lantai 8', '', 'images (1).jpeg', 'pria', 'client', '', '', '', '', '2020-05-30 - 07:34:55', '', 'online'),
(13, 'Dasep Depiyawan', 'Depiyawan', '201504565', 'depiyawan', 'Lantai 8', 'profile/', 'IMG_20190516_172434_237.jpg', 'pria', 'IT', 'SMK DWI PUTRA', 'Jl Raya Sindangkerta, jln 10 Kab Bandung Barat ', 'Teknik Komputer Jaringan', '2019-05-12', '2019-07-12/05:07:57', 'Teknologi & Informasi ( IT SUPPORT )', 'online'),
(43, 'Sri Ay Mulyati', 'Sri', '201698630', '123456', 'Lantai 14', 'profile/', 'Screenshot_20190518-054904.png', '', 'client', '', '', '', '', '2019-07-12/04:55:49', 'Instalasi Software Enginering', 'online'),
(46, 'Febri Haryadi', 'Febri', '201635685', '123456', 'Lantai 2', 'profile/', '', 'pria', 'client', '', '', '', '', '2019-07-11/08:30:18', '', 'offline'),
(52, 'Ahmad Daripai', 'Ahmad', '20169863', '123456', 'Lantai 8', 'profile/', 'IMG-20181231-WA0021.jpeg', 'Perempuan', 'Client', '', '', '', '2019-07-10', '2019-07-12/04:24:03', 'Teknologi & Informasi ( IT SUPPORT )', 'offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_it`
--
ALTER TABLE `admin_it`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain_selesai`
--
ALTER TABLE `complain_selesai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_complain`
--
ALTER TABLE `tabel_complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_it`
--
ALTER TABLE `admin_it`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain_selesai`
--
ALTER TABLE `complain_selesai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_complain`
--
ALTER TABLE `tabel_complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
