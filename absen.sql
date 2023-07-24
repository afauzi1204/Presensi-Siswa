-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2022 pada 14.23
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `singkatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`, `singkatan`) VALUES
(1, 'Teknik Kendaraan Ringan Otomotif', 'TKRO'),
(2, 'Teknik dan Bisnis Sepeda Motor', 'TBSM'),
(3, 'Akuntansi dan Keuangan Lembaga', 'AKL'),
(4, 'Perbankan Syariah', 'BANK'),
(5, 'Rekayasa Perangkat Lunak', 'RPL'),
(6, 'Teknik Elektronika Industri', 'ELIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `time` date NOT NULL,
  `time1` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`uid`, `id`, `state`, `time`, `time1`) VALUES
(0, 1, 1, '2019-10-31', '00:29:07'),
(1, 2, 1, '2019-10-31', '00:29:09'),
(2, 2, 1, '2019-10-31', '00:52:58'),
(3, 2, 1, '2019-10-31', '00:56:18'),
(4, 2, 1, '2019-10-31', '01:29:17'),
(5, 2, 1, '2022-06-02', '20:57:29'),
(6, 2, 1, '2022-06-02', '20:57:45'),
(7, 2, 1, '2022-06-02', '20:59:32'),
(8, 2, 1, '2022-06-02', '21:10:07'),
(9, 2, 1, '2022-06-03', '08:01:45'),
(10, 2, 1, '2022-06-03', '08:20:33'),
(11, 2, 1, '2022-06-03', '08:21:25'),
(12, 2, 1, '2022-06-03', '08:22:43'),
(13, 2, 3, '2022-06-03', '08:23:27'),
(14, 1, 1, '2022-06-03', '08:28:49'),
(15, 2, 1, '2022-06-03', '08:46:24'),
(16, 2, 1, '2022-06-03', '08:58:10'),
(17, 2, 1, '2022-06-03', '09:09:21'),
(18, 1, 1, '2022-06-03', '09:29:58'),
(19, 1, 1, '2022-06-03', '10:53:57'),
(20, 2, 1, '2022-06-03', '10:54:31'),
(21, 3, 1, '2022-06-03', '10:57:57'),
(22, 1, 1, '2022-06-06', '06:54:44'),
(23, 1, 1, '2022-07-07', '16:59:39'),
(24, 1, 1, '2022-07-07', '08:49:55'),
(25, 1, 1, '2022-06-09', '08:33:40'),
(26, 1, 1, '2022-06-12', '10:31:28'),
(27, 3, 1, '2022-06-12', '10:32:04'),
(28, 2, 1, '2022-06-30', '21:48:35'),
(29, 2, 1, '2022-07-04', '00:59:43'),
(30, 4, 1, '2022-07-04', '01:04:08'),
(31, 2, 1, '2022-07-04', '01:40:31'),
(32, 5, 1, '2022-07-05', '18:53:39'),
(33, 5, 1, '2022-07-05', '19:05:23'),
(34, 2, 1, '2022-07-05', '19:05:34'),
(35, 2, 1, '2022-07-05', '19:24:27'),
(36, 2, 1, '2022-07-05', '21:15:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`uid`, `id`, `name`, `level`, `password`) VALUES
(1, 1, 'Apip', 0, 0),
(2, 2, 'Andi', 0, 0),
(3, 3, 'Fauzi', 0, 0),
(4, 4, 'Ahmad', 0, 0),
(5, 5, 'Ahmad Fauzi', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
