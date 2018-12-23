-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2018 pada 19.03
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
  `level` varchar(25) NOT NULL,
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

INSERT INTO `data_clinic` (`id`, `level`, `klinik`, `nama_pemilik`, `email`, `password`, `berlangganan`, `telepon`, `alamat`, `jadwal_klinik`, `foto`) VALUES
(3, 'klinik', 'Md Glowing Klinik', 'medina zein', 'mdglowingskin@gmail.com', '123mdku', 'Rp.69.999', '', 'jln. Aceh No.60, Merdeka, Sumur Bandung, Kota Band', 'Senin s/d Sabtu : 11.00 - 18.00', 0x6d642d636c696e69632d62792d6c617a6574612e6a7067),
(4, 'klnik', 'Rich Amor Klinik', 'dr.wahyuningsih', 'rich-amorku@gmail.com', '123rich', 'Rp.69.999', '02228500150', 'jln. antapani no 33', 'senin  : 09.00-18.00\r\nselasa : 09.00-18.00', ''),
(5, '', 'Erha Klinik', ' zein Arrahman', 'erhakliniku@gmail.com', '123erha', 'Rp.69.999', '022630757', 'Jl. Soekarno-Hatta No.575, Gumuruh, Batununggal,Ba', 'Senin\r\n09.00â€“20.00\r\n\r\nSelasa\r\n09.00â€“20.00\r\n\r\nRabu\r\n09.00â€“20.00\r\n\r\nKamis\r\n09.00â€“20.00\r\n\r\nJumat\r\n09.00â€“20.00\r\n\r\nSabtu\r\n09.00â€“20.00', 0x31312e6a7067),
(6, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `level` varchar(25) NOT NULL,
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

INSERT INTO `data_user` (`id`, `level`, `nama_user`, `username`, `email`, `password`, `umur`, `gender`, `telepon`, `alamat`) VALUES
(4, 'user', 'Rina Anjari', 'rinaanjari', 'rinaanjari75@gmail.com', '123Anjari', 20, 'Perempuan', '085220572002', 'jln Cilengkrang 1 no 30'),
(7, 'user', 'rana altari', 'ranaa', 'ranaaltari75@gmail.com', '123rana', 20, 'Perempuan', '081226370517', 'jln. Margahayu no 33'),
(9, 'user', 'Lita Arina', 'litaarinda', 'litaaarinda55@gmail.com', '123lita', 19, 'Perempuan', '085220572002', 'Jln.Palintang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `alamat_dokter` varchar(50) NOT NULL,
  `klinik_dokter` varchar(25) NOT NULL,
  `jadwal_dokter` text NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `ruangan`, `alamat_dokter`, `klinik_dokter`, `jadwal_dokter`, `gambar`) VALUES
(59, 'dr. Ina Lina,SpKk', 'ER-001', 'jln.Cilengkrang 1 no 30', 'Erha Klinik', 'Senin : 09.00 s/d 11.00', 0x496e73742d696d6167652d312e6a7067),
(60, 'dr. Yunus Ahmas, SpKk', 'ER-002', 'jln.Cilengkrang 1 no 30', 'Erha Klinik', 'Rabu : 14.00 s/d 18.00, Kamis : 11.00 s/d 16.00', 0x64722d61727468612d6c61746965662d73706d312e363030783830302e6a7067),
(61, 'dr. Isa Lina. SpKk', 'BG-001', 'jln. Aceh No.60, Merdeka,Kota Bandung', 'MD Glowing Klinik', 'Senin : 10.00 s/d 14.00,\r\nJumat : 11.00 s/d 15.30', 0x646f6b746572332e6a7067),
(64, 'dr. Ina Lina. SpKk', 'ER-001', 'Jl. Soekarno-Hatta No.575, Gumuruh, Batununggal,Ba', 'Erha Klinik', 'Senin : 10.00 s/d 14.30\r\nRabu : 10.00 s/d 14.30', 0x496e73742d696d6167652d312e6a7067),
(65, 'dr. Yunus Ahmad, SpKk', 'ER-002', 'Jl. Soekarno-Hatta No.575, Gumuruh, Batununggal,Ba', 'Erha Klinik', 'Kamis : 14.00 s/d 18.00\r\nJumat : 14.00 s/d 18.00', 0x64722d61727468612d6c61746965662d73706d312e363030783830302e6a7067);

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
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_clinic`
--
ALTER TABLE `data_clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
