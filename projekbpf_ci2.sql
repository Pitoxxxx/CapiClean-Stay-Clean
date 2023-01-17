-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2023 pada 14.28
-- Versi server: 5.5.28
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekbpf_ci2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(30) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama_customer`, `jenis_kelamin`, `no_hp`, `alamat`) VALUES
(35, 'Alfito Dwitama', 'Laki-laki', '085210502002', 'Jundul'),
(37, 'Salman Ananda', 'Laki-laki', '085182718221', 'Limbungan'),
(38, 'Risky Ahmi', 'Perempuan', '097182917222', 'Rumbai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(30) NOT NULL,
  `masukan` varchar(300) CHARACTER SET latin1 NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `masukan`, `tanggal`) VALUES
(7, 'Saya sangat senang sekali', '2021-07-29 00:00:00'),
(9, 'Saya sangat senang sekali dengan aplikasi ini', '2021-08-03 00:00:00'),
(10, 'Saya lapar', '2021-09-14 00:00:00'),
(11, 'Saya sangat senang sekali', '2021-09-16 00:00:00'),
(12, 'tqwavdasaasshhhasA SAjsaBSBAbsjaSJAsjaSA', '2022-03-01 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT 'default.jpg',
  `no_hp` varchar(100) NOT NULL,
  `jam_kerja` varchar(250) DEFAULT NULL,
  `hari` varchar(100) DEFAULT NULL,
  `nama_poli` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `ttl`, `jenis_kelamin`, `alamat`, `gambar`, `no_hp`, `jam_kerja`, `hari`, `nama_poli`) VALUES
(43, 'Jessica Zheng', 'Pekanbaru, 01 November 2002', 'Laki-laki', 'Jundul', 'daneliya14.PNG', '085182718221', '08.00 - 10.00', 'Senin - Rabu', 0),
(44, 'Fadhil Alziqra', 'Jakarta, 27 Oktober 2002', 'Laki-laki', 'Kulim', 'pasien22.jpg', '0852201874992', '16.00 - 18.00', 'Senin - Rabu', 0),
(45, 'Chintya Ang', 'Siak, 06 Februari 2001', 'Perempuan', 'Rumbai', 'pasien62.jpg', '08162518228', '13.00 - 15.00', 'Selasa - Kamis', 0),
(46, 'Farras Fajar Hadi', 'Medan, 15 Juli 2001', 'Laki-laki', 'Pandau', 'pasien33.jpg', '086182917772', '09.00 - 11.00', 'Rabu - Jumat', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE `orderan` (
  `id` int(11) NOT NULL,
  `id_user` int(30) NOT NULL,
  `nama_customer` varchar(500) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `nama` int(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `paket` varchar(250) NOT NULL,
  `catatan` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Sedang Diproses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderan`
--

INSERT INTO `orderan` (`id`, `id_user`, `nama_customer`, `alamat`, `no_hp`, `nama`, `tanggal`, `paket`, `catatan`, `status`) VALUES
(6, 0, 'Alfito Dwitama', 'Paus', 2147483647, 43, '2023-01-18 09:51:00', 'Paket A : Bersih Rumah Full', 'Hati-hati dalam bekerja', ''),
(7, 0, 'Kevin Pratama', 'Paus', 2147483647, 43, '2023-01-18 09:52:00', 'Paket C : Bersih Halaman Rumah', 'Hati-hati dalam bekerja', ''),
(8, 0, 'Risky Ahmi', 'Rumbai', 2147483647, 43, '2023-01-07 11:25:00', 'Paket A : Bersih Rumah Full', 'Hati-hati dalam bekerja', ''),
(9, 0, 'a', 'a', 90909, 43, '2023-01-31 16:54:00', 'Paket B : Bersih Toilet', 'Tidak ada', ''),
(10, 0, 'a', 'a', 9329, 43, '2023-01-16 20:58:00', 'Paket B : Bersih Toilet', 'Tidak ada', ''),
(11, 21, 'a', 'a', 324, 43, '2023-01-27 19:39:00', 'Paket B : Bersih Toilet', '2123', 'Sedang Diproses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli`
--

CREATE TABLE `poli` (
  `id` int(30) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `ruangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `jenis_kelamin`, `alamat`, `email`, `password`, `role`, `date_created`, `gambar`) VALUES
(18, 'Alfito Dwitama', 'Laki-laki', 'Jl. Paus', 'alfito@gmail.com', '$2y$10$29A.ICD/XzA18T3upf7P5um8DeINV.CPkg72RJEQ/MgBn.m.fU3j2', 'Admin', 1670891363, 'default.jpg'),
(19, 'Risky Ahmi', 'Laki-laki', 'Rumbai', 'risky@gmail.com', '$2y$10$7seiT0IBIp5L94ObkdonX.ooEyK3Knr.Xx3Ek09MW7pLAfZjEdOiu', 'User', 1670902088, 'default.jpg'),
(20, 'Regina Trisela', 'Perempuan', 'Paus', 'regina@gmail.com', '$2y$10$uY./St3togdJ6uCvgKyteevnQb/5nFDia9oti0f2OvjXmRbhZi.iG', 'User', 1671875289, 'default.jpg'),
(21, 'a', 'Laki-laki', 'a', 'a@gmail.com', '$2y$10$NvGKHzgPsNgqv1HzsYeW5uHCBAfx1xnXyzfCLH6CgN1IXwTOffu0e', 'User', 1673863090, 'default.jpg'),
(22, 'oke', 'Laki-laki', 'Rumbai', 'admin@gmail.com', '$2y$10$GIOPJka1h9c4rmvhIK6l4eRjP7/sM7yzDODH0ncztobG2B7E2DOou', 'Admin', 1673866070, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_karyawan` (`nama`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD CONSTRAINT `nama_karyawan` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
