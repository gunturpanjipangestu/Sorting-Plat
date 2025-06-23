-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2025 pada 09.08
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nomorkendaraan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `plat_ganjil`
--

CREATE TABLE `plat_ganjil` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(50) DEFAULT NULL,
  `no_kendaraan` varchar(20) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `plat_ganjil`
--

INSERT INTO `plat_ganjil` (`id`, `nama_pemilik`, `no_kendaraan`, `waktu`) VALUES
(1, 'panjiii', '090909', '2025-06-10 13:40:03'),
(2, 'Dito', 'AA 4951 FE', '2025-06-23 07:07:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plat_genap`
--

CREATE TABLE `plat_genap` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(50) DEFAULT NULL,
  `no_kendaraan` varchar(20) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `plat_genap`
--

INSERT INTO `plat_genap` (`id`, `nama_pemilik`, `no_kendaraan`, `waktu`) VALUES
(1, 'panjii', '09090', '2025-06-10 13:16:45'),
(2, 'panjii', '09090', '2025-06-10 13:38:29'),
(3, 'Guntur', 'BH 7816 DU', '2025-06-23 06:55:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `plat_ganjil`
--
ALTER TABLE `plat_ganjil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `plat_genap`
--
ALTER TABLE `plat_genap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `plat_ganjil`
--
ALTER TABLE `plat_ganjil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `plat_genap`
--
ALTER TABLE `plat_genap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
