-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2026 pada 07.11
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bukutamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bukutamu`
--

CREATE TABLE `tbl_bukutamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_bukutamu`
--

INSERT INTO `tbl_bukutamu` (`id`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(1, 'Aditya', 'adit@gmail.com', 'Website nya bagus', '2026-05-12 05:10:32'),
(2, 'Rina', 'rina@gmail.com', 'Semangat terus', '2026-05-12 05:10:32'),
(3, 'Budi', 'budi@gmail.com', 'Terima kasih informasinya', '2026-05-12 05:10:32'),
(4, 'Salsa', 'salsa@gmail.com', 'Mantap sekali', '2026-05-12 05:10:32'),
(5, 'Dimas', 'dimas@gmail.com', 'Sangat membantu', '2026-05-12 05:10:32'),
(6, 'Putri', 'putri@gmail.com', 'Keren websitenya', '2026-05-12 05:10:32'),
(7, 'Andi', 'andi@gmail.com', 'Tampilan nya menarik', '2026-05-12 05:10:32'),
(8, 'Fajar', 'fajar@gmail.com', 'Good job', '2026-05-12 05:10:32'),
(9, 'Nabila', 'nabila@gmail.com', 'Sukses selalu', '2026-05-12 05:10:32'),
(10, 'Rizky', 'rizky@gmail.com', 'Pelayanan bagus', '2026-05-12 05:10:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
