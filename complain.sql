-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2019 pada 12.09
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

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
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `nik`, `pass`, `lokasi`, `folder`, `poto`, `gender`, `level`, `sekolah`, `alamat`, `jurusan`, `bergabung`, `last_online`, `divisi`, `status`) VALUES
(12, 'Andi Gunawan', 'Andi', '201504546', '123456', 'Lantai 8', '', 'images (1).jpeg', 'pria', 'client', '', '', '', '', '2019-07-12/04:54:14', '', 'offline'),
(13, 'Dasep Depiyawan', 'Depiyawan', '201504546', 'depiyawan', 'Lantai 8', 'profile/', 'IMG_20190516_172434_237.jpg', 'pria', 'IT', 'SMK DWI PUTRA', 'Jl Raya Sindangkerta, jln 10 Kab Bandung Barat ', 'Teknik Komputer Jaringan', '2019-05-12', '2019-07-12/05:07:57', 'Teknologi & Informasi ( IT SUPPORT )', 'online'),
(43, 'Sri Ay Mulyati', 'Sri', '201698630', '123456', 'Lantai 14', 'profile/', 'Screenshot_20190518-054904.png', '', 'client', '', '', '', '', '2019-07-12/04:55:49', 'Instalasi Software Enginering', 'online'),
(46, 'Febri Haryadi', 'Febri', '201635685', '123456', 'Lantai 2', 'profile/', '', 'pria', 'client', '', '', '', '', '2019-07-11/08:30:18', '', 'offline'),
(52, 'Ahmad Daripai', 'Ahmad', '20169863', '123456', 'Lantai 8', 'profile/', 'IMG-20181231-WA0021.jpeg', 'Perempuan', 'Client', '', '', '', '2019-07-10', '2019-07-12/04:24:03', 'Teknologi & Informasi ( IT SUPPORT )', 'offline');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
