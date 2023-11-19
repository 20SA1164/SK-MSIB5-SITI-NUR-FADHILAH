-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2023 pada 05.14
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
  `foto_hotel` varchar(225) NOT NULL,
  `nama_hotel` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `bintang` varchar(30) NOT NULL,
  `fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id_nama_hotel`, `foto_hotel`, `nama_hotel`, `alamat`, `bintang`, `fasilitas`) VALUES
(2, 'https://ik.imagekit.io/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10007029-800x742-FIT_AND_TRIM-53a4dd6288074ec127c384eb897fbb61.jpeg?_src=imagekit&tr=c-at_max,h-360,q-40,w-640', 'Aston Internasional', 'Purwokerto', '4', '<i class=\"fa-solid fa-fan\"></i> AC <br/>  <i class=\"fa-solid fa-utensils\"></i> Restoran <br/>  <i class=\"fa-solid fa-water-ladder\"></i> Kolam Renang <br/>  <i class=\"fa-solid fa-bell-concierge\"></i> Resepsionis 24 Jam <br/> <i class=\"fa-solid fa-square-parking\"></i> Parkir <br/>  <i class=\"fa-solid fa-elevator\"></i> Lift <br/> <i class=\"fa-solid fa-wifi\"></i> WiFi'),
(3, 'https://www.panggon.com/wp-content/uploads/2014/08/Hotel-Dominic-Purwokerto.jpg', 'Dominic Hotel', 'Purbalingga', '2', '<i class=\"fa-solid fa-fan\"></i> AC <br/>  <i class=\"fa-solid fa-utensils\"></i> Restoran <br/>  <i class=\"fa-solid fa-bell-concierge\"></i> Resepsionis 24 Jam <br/> <i class=\"fa-solid fa-square-parking\"></i> Parkir <br/>  <i class=\"fa-solid fa-elevator\"></i> Lift <br/> <i class=\"fa-solid fa-wifi\"></i> WiFi'),
(4, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/0e/2f/0b/main-building.jpg?w=1200&h=-1&s=1', 'Java Heritage', 'Cilacap', '4', '<i class=\"fa-solid fa-fan\"></i> AC <br/>  <i class=\"fa-solid fa-utensils\"></i> Restoran <br/>  <i class=\"fa-solid fa-bell-concierge\"></i> Resepsionis 24 Jam <br/> <i class=\"fa-solid fa-square-parking\"></i> Parkir <br/>  <i class=\"fa-solid fa-elevator\"></i> Lift <br/> <i class=\"fa-solid fa-wifi\"></i> WiFi'),
(5, 'https://liburanyuk.co.id/wp-content/uploads/2021/11/cor-hotel-purwokerto-653x393.jpg', 'COR Hotel Purwokerto', 'Kebumen', '3', '<i class=\"fa-solid fa-fan\"></i> AC <br/>  <i class=\"fa-solid fa-utensils\"></i> Restoran <br/>  <i class=\"fa-solid fa-bell-concierge\"></i> Resepsionis 24 Jam <br/> <i class=\"fa-solid fa-square-parking\"></i> Parkir <br/>  <i class=\"fa-solid fa-elevator\"></i> Lift <br/> <i class=\"fa-solid fa-wifi\"></i> WiFi'),
(6, 'https://ik.imagekit.io/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/20055615-64991677955ac2ee6a625110ea463ff9.jpeg?_src=imagekit&tr=c-at_max,h-360,q-40,w-640', 'Elsotel by Daphna', 'Banjarnegara', '3', '<i class=\"fa-solid fa-fan\"></i> AC <br/>  <i class=\"fa-solid fa-utensils\"></i> Restoran <br/>  <i class=\"fa-solid fa-bell-concierge\"></i> Resepsionis 24 Jam <br/> <i class=\"fa-solid fa-square-parking\"></i> Parkir <br/>  <i class=\"fa-solid fa-elevator\"></i> Lift <br/> <i class=\"fa-solid fa-wifi\"></i> WiFi');

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
(30, 'A-002', 2, 'images/suite aston.png', 2, 'Info Kamar : <br/> - tamu 2 <br/> - 44.0 m² <br/> Fasilitas Yang Mungkin Anda Sukai <br/> - Shower <br/> - Kulkas <br/> - Ac <br> - Brankas <br/> - Air Panas <br/> - Bathtub <br/> - WiFI ', 1560000, 15, 10, '2023-11-13 02:45:37', '2023-11-16 11:48:02'),
(58, 'A-001', 2, 'images/deluxe aston.png', 1, 'Info Kamar : <br/> - tamu 2 <br/> - 26.0 m² <br/> Fasilitas Yang Mungkin Anda Sukai <br/> - Shower <br/> - Kulkas <br/> - Ac <br> - WiFI <br/> - Televisi', 950000, 10, 10, '2023-11-15 23:46:46', '2023-11-16 11:46:46'),
(60, 'D-001', 3, 'images/supperior dominic.png', 5, 'Info Kamar : <br/> - tamu 2 <br/> - 24.0 m² <br/> Fasilitas Yang Mungkin Anda Sukai <br/> - Shower <br/> - Kulkas <br/> - Ac <br> - Air Panas <br/> - WiFI', 415000, 10, 10, '2023-11-15 23:52:35', '2023-11-16 11:52:35'),
(61, 'D-002', 3, 'images/deluxe dominic.png', 1, 'Info Kamar : <br/> - tamu 2 <br/> - 44.0 m² <br/> Fasilitas Yang Mungkin Anda Sukai <br/> - Shower <br/> - Kulkas <br/> - Ac <br> - Brankas <br/> - Air Panas <br/> - Bathtub <br/> - WiFI <br/> - Brankas', 500000, 10, 10, '2023-11-15 23:55:04', '2023-11-16 11:55:04'),
(62, 'J-001', 4, 'images/standard java heritage.png', 4, 'Info Kamar : <br/> - tamu 2 <br/> - 26.0 m² <br/> Fasilitas Yang Mungkin Anda Sukai <br/> - Shower <br/> - Kulkas <br/> - Ac <br/> - Air Panas <br/> - Bathtub <br/> - WiFI', 560000, 5, 5, '2023-11-15 23:56:06', '2023-11-16 11:56:06'),
(63, 'C-001', 5, 'images/deluxe cor.png', 1, 'Info Kamar : <br/> - tamu 2 <br/> - 26.0 m² <br/> Fasilitas Yang Mungkin Anda Sukai <br/> - Shower <br/> - Kulkas <br/> - Ac <br> - Brankas <br/> - Air Panas <br/> - Bathtub <br/> - WiFI', 400000, 7, 7, '2023-11-15 23:58:47', '2023-11-16 11:58:47'),
(64, 'E-001', 6, 'images/supperior room elsotel.png', 5, 'Info Kamar : <br/> - tamu 2 <br/> - 22.0 m² <br/> Fasilitas Yang Mungkin Anda Sukai <br/> - Shower <br/> - Kulkas <br/> - Ac <br> - Brankas <br/> - Air Panas <br/> - Bathtub <br/> - WiFI', 850000, 10, 10, '2023-11-16 00:00:49', '2023-11-16 12:00:49'),
(65, 'E-002', 6, 'images/family room elsotel.jpg', 3, 'Info Kamar : <br/> - tamu 2 <br/> - 44.0 m² <br/> Fasilitas Yang Mungkin Anda Sukai <br/> - Shower <br/> - Kulkas <br/> - Ac <br> - Brankas <br/> - Air Panas <br/> - Bathtub <br/> - WiFI', 1200000, 10, 10, '2023-11-16 00:02:44', '2023-11-16 12:02:44'),
(66, 'C-002', 3, 'images/Gambar Executive Deluxe.jpg', 3, 'Info Kamar : <br/> - tamu 2 <br/> - 44.0 m² <br/> Fasilitas Yang Mungkin Anda Sukai <br/> - Shower <br/> - Kulkas <br/> - Ac <br> - Brankas <br/> - Air Panas <br/> - Bathtub <br/> - WiFI', 500000, 10, 5, '2023-11-16 00:55:00', '2023-11-16 12:55:17');

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
  MODIFY `id_nama_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  MODIFY `id_nama_jenis_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

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
