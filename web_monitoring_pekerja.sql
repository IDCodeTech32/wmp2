-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2024 pada 10.11
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
-- Database: `web_monitoring_pekerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menambahkan`
--

CREATE TABLE `menambahkan` (
  `id` int(100) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `target` longtext NOT NULL,
  `waktu` date NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menambahkan`
--

INSERT INTO `menambahkan` (`id`, `kategori`, `target`, `waktu`, `pic`) VALUES
(78, 'Software Development', 'fwf22', '2024-05-01', 'Ghossan Ammar Santos'),
(79, 'Hardware & Networking', 'ewfwffwfw', '2024-04-24', 'M.Abdul Sukur'),
(80, 'Hardware & Networking', 'mmmmmmm', '2024-05-01', 'Ghossan Ammar Santos'),
(81, 'Hardware & Networking', 'fwefewff', '2024-04-17', 'Dini Pratiwi'),
(82, 'Administrasi IT', 'vwegweg', '2024-05-02', 'Dini Pratiwi'),
(83, 'IT Vendor Project', 'fqfqw', '2024-05-01', 'Ghossan Ammar Santos'),
(84, 'Administrasi IT', 'ffrtgrh', '2024-04-10', 'M.Abdul Sukur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pic`
--

CREATE TABLE `pic` (
  `No` int(100) NOT NULL,
  `NIP` int(100) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `TEMPAT LAHIR` varchar(100) NOT NULL,
  `TGL LAHIR` date NOT NULL,
  `KELAMIN` varchar(100) NOT NULL,
  `DARAH` varchar(100) NOT NULL,
  `AGAMA` varchar(100) NOT NULL,
  `TGL MASUK` date NOT NULL,
  `PENDIDIKAN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pic`
--

INSERT INTO `pic` (`No`, `NIP`, `NAMA`, `ALAMAT`, `TEMPAT LAHIR`, `TGL LAHIR`, `KELAMIN`, `DARAH`, `AGAMA`, `TGL MASUK`, `PENDIDIKAN`) VALUES
(1, 2020031172, 'Muhammad Ali', 'Kav. Bukit Makmur C-89,Sengkuang', 'Serasan', '1992-04-10', 'LAKI-LAKI', 'O', 'ISLAM', '2020-03-04', 'S1'),
(2, 2008050857, 'Mochammad Abdul Sukur', 'Perum. Awal Indah Blok D19,Sekupang', 'Tuban', '1985-04-30', 'LAKI-LAKI', 'O', 'ISLAM', '2008-05-01', 'SMU/SMK'),
(3, 2020031171, 'Muhammad Iqbal', 'Rusun Batu Ampar', 'Pekan Baru', '1995-08-13', 'LAKI-LAKI', 'B', 'ISLAM', '2020-03-04', 'S1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Dehan', '$2y$10$8cfSZ5Rvy75FntjUA3QSgOamIlE2OXFViDt3I5vFG4eJZtCCU6c3O');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menambahkan`
--
ALTER TABLE `menambahkan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menambahkan`
--
ALTER TABLE `menambahkan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `pic`
--
ALTER TABLE `pic`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
