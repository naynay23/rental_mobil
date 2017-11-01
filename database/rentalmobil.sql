-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Nov 2017 pada 14.45
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nama_karyawan`, `alamat`, `no_telp`) VALUES
(1, 'Joko', 'Jl. Rambutan', '085312987111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_merk`
--

CREATE TABLE `tbl_merk` (
  `id_merk` int(11) NOT NULL,
  `nama_merk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_merk`
--

INSERT INTO `tbl_merk` (`id_merk`, `nama_merk`) VALUES
(1, 'Toyota'),
(2, 'Daihatsu'),
(3, 'Honda'),
(8, 'Ford'),
(9, 'Nissan'),
(10, 'Mitsubitshi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `id_mobil` int(11) NOT NULL,
  `plat_nomor` varchar(12) NOT NULL,
  `jenis_mobil` varchar(20) NOT NULL,
  `id_merk` int(11) NOT NULL,
  `warna` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id_mobil`, `plat_nomor`, `jenis_mobil`, `id_merk`, `warna`) VALUES
(1, 'L 23 NA', 'Avanza Veloz', 2, 'Hitam'),
(3, 'M 7462 DA', 'Kijang Inova', 1, 'Hitam'),
(4, 'S 44 YA', 'Juke', 9, 'Merah'),
(5, 'M 4123 HH', 'Kijang Inova', 1, 'Putih'),
(6, 'N 441 LA', 'Xenia', 2, 'Hitam'),
(7, 'L 441 NN', 'Mobilo', 3, 'Hitam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_telp`) VALUES
(1, 'Naya', 'Kamal', '085335001672'),
(3, 'Sonia', 'Sumenep', '08755271911');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tarif_sewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_karyawan`, `id_pelanggan`, `id_mobil`, `tanggal_pinjam`, `tanggal_kembali`, `tarif_sewa`) VALUES
(1, 1, 1, 1, '2017-10-28', '2017-10-29', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nayla', 'nayla.aisyah4@gmail.com', '$2y$10$GQVGsZv.LBFVEDkZF1VInOSrKUFJIckaZirP6oumtqK1TpVTGNzvW', 't5xqJRbzZjK1sDqg2GHHf1JedwnHALt3VISQsRwMVx9KGhFRK0hmhwz39JeQ', '2017-11-01 05:15:21', '2017-11-01 05:15:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_merk`
--
ALTER TABLE `tbl_merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `id_merk` (`id_merk`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_merk`
--
ALTER TABLE `tbl_merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD CONSTRAINT `tbl_mobil_ibfk_1` FOREIGN KEY (`id_merk`) REFERENCES `tbl_merk` (`id_merk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tbl_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `tbl_mobil` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_transaksi_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
