-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2021 pada 18.01
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekbpf_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(30) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `nip` int(30) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `nama_poli` int(30) DEFAULT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `nip`, `jenis_kelamin`, `hari`, `jam`, `no_hp`, `nama_poli`, `gambar`) VALUES
(20, 'Martina Yulianti', 158831, 'Perempuan', 'Selasa - Kamis', '14.00 - 16.00', '082316726381', 15, 'dokter42.jpg'),
(21, 'Susanto Amnan', 158803, 'Laki-laki', 'Senin - Rabu', '09.00 - 11.00', '081352638199', 21, 'dokter11.jpg'),
(22, 'Handoko Sudarman', 158845, 'Laki-laki', 'Senin - Rabu', '09.00 - 11.00', '085371824377', 15, 'dokter21.jpg'),
(23, 'Bella Cantika', 158810, 'Perempuan', 'Rabu - Jumat', '10.00 - 12.00', '081367679142', 17, 'dokter61.jpg'),
(24, 'Melany Swinarno', 158865, 'Perempuan', 'Selasa - Kamis', '13.00 - 15.00', '081261735519', 22, 'dokter71.jpg'),
(25, 'Bakti Prakarsa', 158815, 'Laki-laki', 'Selasa - Kamis', '09.00 - 11.00', '081244780964', 24, 'dokter81.jpg'),
(26, 'Darma Rianto', 158877, 'Laki-laki', 'Rabu - Jumat', '15.00 - 17.00', '085341526783', 22, 'dokter101.jpg'),
(27, 'Beatrix Curie Panjaitan', 158822, 'Perempuan', 'Rabu - Jumat', '14.00 - 16.00', '0812668713', 23, 'dokter52.jpg'),
(28, 'Ashabul kahfi', 158843, 'Laki-laki', 'Senin - Rabu', '10.00 - 12.00', '081326175590', 22, 'dokter91.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(30) NOT NULL,
  `masukan` varchar(300) CHARACTER SET latin1 NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `masukan`, `tanggal`) VALUES
(7, 'Saya sangat senang sekali', '2021-07-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` int(30) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `penyakit` varchar(100) NOT NULL,
  `nama_poli` int(30) NOT NULL,
  `nama_dokter` int(30) NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT 'default.jpg',
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `umur`, `jenis_kelamin`, `alamat`, `penyakit`, `nama_poli`, `nama_dokter`, `gambar`, `no_hp`) VALUES
(33, 'Rangga Hendrawan', 17, 'Laki-laki', 'Jalan Pembangunan No. 1', 'Sakit Gigi Geraham', 17, 23, 'pasien21.jpg', '082362539821'),
(34, 'Raissa Nabila Maharani', 17, 'Perempuan', 'Jalan Banda Aceh No. 67E', 'Sakit Telinga', 23, 27, 'pasien61.jpg', '082392913672'),
(36, 'Haryo Wicaksono', 5, 'Laki-laki', 'Jalan Kramat No 99', 'Sakit Demam', 15, 20, 'pasien91.jpg', '081392835512'),
(37, 'Ghina Qanitah Valerie', 25, 'Perempuan', 'Jalan Durian Runtuh No 51', 'Kontraksi Perut', 22, 24, 'pasien71.jpg', '082376581140');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli`
--

CREATE TABLE `poli` (
  `id` int(30) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `ruangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `poli`
--

INSERT INTO `poli` (`id`, `nama_poli`, `ruangan`) VALUES
(15, 'Poli Anak', '11'),
(17, 'Poli gigi', '21'),
(21, 'Poli Bedah Umum', '15'),
(22, 'Poli Kebidanan', '18'),
(23, 'Poli THT', '12'),
(24, 'Poli Mata', '25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `date_created`, `gambar`) VALUES
(8, 'Muhammad Taufiq Iqbal', 'taufiqiqbal30@gmail.com', '$2y$10$o7VrchOsaukNPn4Onbs54uMFZ77a.g7q690NBzN9TwqfIo9u0yS.2', 'Admin', 1627180522, 'Iqbal.JPG'),
(11, 'Maduri', 'maduri@gmail.com', '$2y$10$agOxOnWy4l2IimXiC.DC3O8VoFXG5GnC0HbNfYHoV6gUZ2KtgBceK', 'User', 1627401538, 'madu.JPG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_poli` (`nama_poli`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_poli1` (`nama_poli`),
  ADD KEY `nama_dokter` (`nama_dokter`);

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
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `nama_poli` FOREIGN KEY (`nama_poli`) REFERENCES `poli` (`id`);

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `nama_dokter` FOREIGN KEY (`nama_dokter`) REFERENCES `dokter` (`id`),
  ADD CONSTRAINT `nama_poli1` FOREIGN KEY (`nama_poli`) REFERENCES `poli` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
