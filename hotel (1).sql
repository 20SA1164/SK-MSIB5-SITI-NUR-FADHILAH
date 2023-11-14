-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2023 pada 14.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id_nama_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `bintang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id_nama_hotel`, `nama_hotel`, `alamat`, `bintang`) VALUES
(2, 'Aston Internasional', 'Purwokerto', '5'),
(3, 'Dominic Hotel', 'Purbalingga', '4'),
(4, 'Java Heritage', 'Cilacap', '4'),
(5, 'COR Hotel Purwokerto', 'Kebumen', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kamar`
--

CREATE TABLE `jenis_kamar` (
  `id_nama_jenis_kamar` int(11) NOT NULL,
  `jenis_kamar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_kamar`
--

INSERT INTO `jenis_kamar` (`id_nama_jenis_kamar`, `jenis_kamar`) VALUES
(1, 'Deluxe Room'),
(2, 'Suite Room'),
(3, 'Family Room'),
(4, 'Standard Room'),
(5, 'Supperior Room'),
(6, 'Single Room');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `kode_kamar` varchar(30) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `id_jenis_kamar` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` decimal(11,0) NOT NULL,
  `jumlah_kamar` int(10) NOT NULL,
  `ketersediaan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id`, `kode_kamar`, `id_hotel`, `gambar`, `id_jenis_kamar`, `deskripsi`, `harga`, `jumlah_kamar`, `ketersediaan`, `created_at`, `updated_at`) VALUES
(27, 'A-001', 2, 'images/Gambar Falimy.png', 3, 'Tamu : 4', 1200000, 10, 6, '2023-11-13 02:24:31', '2023-11-13 14:53:57'),
(28, 'D-001', 3, 'images/Gambar Executive Deluxe.jpg', 1, 'Tamu : 3', 600000, 8, 7, '2023-11-13 02:25:29', '2023-11-13 14:26:00'),
(29, 'J-001', 4, 'images/steven-ungermann-aRT5UCf2MYY-unsplash.jpg', 4, 'Tamu : 2', 560000, 15, 10, '2023-11-13 02:28:03', '2023-11-13 14:28:03'),
(30, 'A-002', 2, 'images/Gambar Superrior.jpg', 5, 'Tamu : 2', 650000, 15, 12, '2023-11-13 02:45:37', '2023-11-13 14:45:37'),
(31, 'D-002', 3, 'images/edelle-bruton-PJNO2sLlbB8-unsplash.jpg', 2, 'Tamu : 4', 980000, 10, 5, '2023-11-13 03:01:46', '2023-11-13 15:05:25'),
(32, 'J-002', 4, 'images/Gambar Superrior.jpg', 5, 'Tamu : 2', 670000, 10, 10, '2023-11-13 23:30:30', '2023-11-14 11:30:30'),
(36, 'C-001', 5, 'images/family suite.jpg', 3, 'Tamu : 6', 1500000, 12, 12, '2023-11-13 23:49:52', '2023-11-14 11:49:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_nama_hotel`);

--
-- Indeks untuk tabel `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD PRIMARY KEY (`id_nama_jenis_kamar`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hotel` (`id_hotel`,`id_jenis_kamar`),
  ADD KEY `id_jenis_kamar` (`id_jenis_kamar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_nama_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  MODIFY `id_nama_jenis_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_jenis_kamar`) REFERENCES `jenis_kamar` (`id_nama_jenis_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_nama_hotel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
