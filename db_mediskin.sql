-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2018 pada 02.25
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mediskin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_clinic`
--

CREATE TABLE `data_clinic` (
  `id` int(11) NOT NULL,
  `klinik` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(25) NOT NULL,
  `berlangganan` varchar(25) NOT NULL,
  `telepon` char(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jadwal_klinik` text NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_clinic`
--

INSERT INTO `data_clinic` (`id`, `klinik`, `nama_pemilik`, `email`, `password`, `berlangganan`, `telepon`, `alamat`, `jadwal_klinik`, `foto`) VALUES
(3, 'MdGlowing Klinik', 'medina zein', 'mdglowingskin@gmail.com', '123mdku', 'Perempuan', '02652751506', 'jln. Aceh No.60, Merdeka,Kota Bandung', 'Senin    09.00-18.00\r\nSelasa   09.00-18.00\r\nrabu     09.00-18.00', ''),
(4, 'Rich Amor Klinik', 'dr.wahyuningsih', 'rich-amorku@gmail.com', '123rich', 'Rp.69.999', '02228500150', 'jln. antapani no 33', 'senin  : 09.00-18.00\r\nselasa : 09.00-18.00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` char(30) NOT NULL,
  `password` char(30) NOT NULL,
  `umur` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `telepon` text NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id`, `nama_user`, `username`, `email`, `password`, `umur`, `gender`, `telepon`, `alamat`) VALUES
(4, 'Rina Anjari', 'rinaanjari', 'rinaanjari75@gmail.com', '123Anjari', 20, 'Perempuan', '085220572002', 'jln Cilengkrang 1 no 30'),
(7, 'rana altari', 'ranaa', 'ranaaltari75@gmail.com', '123rana', 20, 'Perempuan', '081226370517', 'jln. Margahayu no 33'),
(8, '', '', '', '', 0, '', '', ''),
(9, 'Lita Arina', 'litaarinda', 'litaaarinda55@gmail.com', '123lita', 19, 'Perempuan', '085220572002', 'Jln.Palintang'),
(10, '', '', '', '', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_clinic`
--
ALTER TABLE `data_clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_clinic`
--
ALTER TABLE `data_clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
