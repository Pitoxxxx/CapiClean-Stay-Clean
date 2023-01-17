-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2021 pada 08.32
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
-- Database: `iqbal_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pengarang` varchar(100) CHARACTER SET latin1 NOT NULL,
  `stok` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `nama`, `pengarang`, `stok`, `harga`, `gambar`) VALUES
(5, 'Algoritma Pemrograman', 'Muhammad Rahul Zein', 25, 50000, 'Algoritma-dan-Pemrograman1.png'),
(6, 'Machine Learning', 'Karni Ilyas', 200, 75000, 'machine_learning.jpg'),
(7, 'Basis data', 'Tretan Muslim', 50, 65000, 'basis_data.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `no_penjualan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`no_penjualan`, `id_user`, `id_buku`, `jumlah`, `total`) VALUES
('PJ1625294004', 13, 5, 11, 550000),
('PJ1625294004', 13, 5, 12, 600000),
('PJ1625294004', 13, 5, 12, 600000),
('PJ1625294004', 13, 5, 11, 550000),
('PJ1625294004', 13, 5, 11, 550000),
('PJ1625294059', 13, 5, 11, 550000),
('PJ1625298613', 13, 5, 10, 500000),
('PJ1625299125', 13, 5, 1, 50000),
('PJ1625656742', 13, 6, 2, 150000),
('PJ1625657024', 13, 5, 3, 150000),
('PJ1625741343', 13, 5, 5, 250000),
('PJ1626331983', 13, 7, 100, 6500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` int(15) NOT NULL,
  `inisial` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `kompetensi` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nip`, `inisial`, `email`, `prodi`, `kompetensi`, `gambar`) VALUES
(1, 'Dr. Juni Nurma Sari, S.Kom.,M.MT', 17218, 'JNS', 'juni@pcr.ac.id', 'Teknik Informatika', 'Algoritma Pemrograman', 'juni_nurma_sari3.jpg'),
(5, 'Amnur Akhyan, S.S.T., M.T', 7803, 'AMN', 'akhyan@pcr.ac.id', 'Teknik Informatika', 'Production and Manufacturing', 'amnur_akhyan2.jpg'),
(27, 'Maksum Ro\'is Adin Saf, S.Kom., M.Eng', 158803, 'MRA', 'maksum@pcr.ac.id', 'Teknik Informatika', 'Pemrograman Web, Artificial Intelligence, Web Semantik', 'maksum_rois.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `nama_kajur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `singkatan`, `nama_kajur`) VALUES
(1, 'Jurusan Teknologi Informasi', 'JTII', 1),
(9, 'Jurusan Teknologi Industri', 'JTIN', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tanggal` varchar(100) CHARACTER SET latin1 NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_user`, `id_buku`, `jumlah`, `tanggal`, `total`) VALUES
(26, 13, 5, 5, '18/07/2021', 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'bpftiabcde', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(14, 'uri:jurusan/index:get', 2, 1626589633, 'bpftiabcde'),
(15, 'uri:mahasiswa/index:get', 2, 1626589621, 'bpftiabcde'),
(16, 'uri:jurusan/index:put', 1, 1624535440, 'bpftiabcde'),
(17, 'uri:jurusan/index:post', 1, 1624530186, 'bpftiabcde'),
(18, 'uri:jurusan/index:delete', 2, 1624535559, 'bpftiabcde'),
(19, 'uri:prodi/index:get', 2, 1626589624, 'bpftiabcde'),
(20, 'uri:prodi/index:post', 1, 1624536225, 'bpftiabcde'),
(21, 'uri:prodi/index:put', 1, 1624536312, 'bpftiabcde'),
(22, 'uri:prodi/index:delete', 1, 1626320631, 'bpftiabcde'),
(23, 'uri:mahasiswa/index:put', 2, 1626178788, 'bpftiabcde');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prodi` int(11) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `email`, `prodi`, `asal_sekolah`, `no_hp`, `alamat`) VALUES
(4, 'Muhammad Taufiq Iqbal', 1955301095, 'Laki-laki', 'taufiq19ti@mahasiswa.pcr.ac.id', 15, 'SMAN 1 Pekanbaru', 2147483646, 'Jalan Banda Aceh No. 67E'),
(16, 'Raissa Nabila Maharani', 1955301088, 'Perempuan', 'raissanabiila@gmail.com', 4, 'SMAN 1 Pekanbaru', 2147483647, 'Jalan Banda Aceh No. 67E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `no_penjualan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_bayar` int(100) NOT NULL,
  `tanggal` varchar(100) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pembayaran` varchar(100) CHARACTER SET latin1 NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 NOT NULL,
  `keterangan` varchar(100) CHARACTER SET latin1 NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT 'Belum Dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `no_penjualan`, `id_user`, `total_bayar`, `tanggal`, `alamat`, `pembayaran`, `gambar`, `keterangan`, `status`) VALUES
(17, 'PJ1625656742', 13, 150000, '07/07/2021', 'Jalan Banda Aceh No. 67E', 'BRI', 'bukti_tf.JPG', 'Sudah bayar', 'Diterima'),
(18, 'PJ1625657024', 13, 150000, '07/07/2021', 'Jalan Banda Aceh No. 67E', 'BRI', 'bukti_tf1.JPG', 'Sudah bayar', 'Diterima'),
(19, 'PJ1625741343', 13, 250000, '08/07/2021', 'Jalan Banda Aceh No. 67E', 'BRI', 'bukti_tf2.JPG', 'Sudah bayar', 'Dikirim'),
(20, 'PJ1626331983', 13, 6500000, '15/07/2021', 'Jalan Banda Aceh No. 67E', 'BRI', '011.jpg', 'Sudah bayar', 'Dikirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `akreditasi` varchar(15) NOT NULL,
  `nama_kaprodi` int(11) NOT NULL,
  `tahun_berdiri` int(10) NOT NULL,
  `output_lulusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `nama`, `ruangan`, `jurusan`, `akreditasi`, `nama_kaprodi`, `tahun_berdiri`, `output_lulusan`) VALUES
(4, 'Teknik Informatika', '328', 1, 'A', 1, 2008, 'Multimedia'),
(15, 'Teknik Komputer', '121', 1, 'A', 1, 2001, 'Cisco Networking');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(13, 'Muhammad Taufiq Iqbal', 'taufiqiqbal30@gmail.com', '$2y$10$sqLrIIkdEilo26gSVTDsguCsiMQWb0CzEjz5K6/2x8L4JuBMuZRDO', 'default.jpg', 'User', 1619961663),
(14, 'Ghina Qanitah Valerie', 'ghinavalerie22@gmail.com', '$2y$10$5jiDU1bBPyS6TKFCixp15OJJiqlyiIvAx3TVClRI9JJZCH2TNl16W', 'default.jpg', 'Admin', 1619961738);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `id_user3` (`id_user`),
  ADD KEY `id_buku2` (`id_buku`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_kajur` (`nama_kajur`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi` (`prodi`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user2` (`id_user`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_kaprodi` (`nama_kaprodi`),
  ADD KEY `jurusan` (`jurusan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `id_buku2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`),
  ADD CONSTRAINT `id_user3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `nama_kajur` FOREIGN KEY (`nama_kajur`) REFERENCES `dosen` (`id`);

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `id_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `prodi` FOREIGN KEY (`prodi`) REFERENCES `prodi` (`id`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `id_user2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `jurusan` FOREIGN KEY (`jurusan`) REFERENCES `jurusan` (`id`),
  ADD CONSTRAINT `nama_kaprodi` FOREIGN KEY (`nama_kaprodi`) REFERENCES `dosen` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
