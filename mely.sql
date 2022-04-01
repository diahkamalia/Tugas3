-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Apr 2022 pada 21.56
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mely`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `imunisasi_061`
--

CREATE TABLE `imunisasi_061` (
  `IDPasien` int(11) NOT NULL,
  `NIKOrtu` varchar(50) NOT NULL,
  `NamaOrtu` varchar(50) NOT NULL,
  `NamaAnak` varchar(50) NOT NULL,
  `UsiaAnak` varchar(50) NOT NULL,
  `JenisImun` varchar(50) NOT NULL,
  `JenisKelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `imunisasi_061`
--

INSERT INTO `imunisasi_061` (`IDPasien`, `NIKOrtu`, `NamaOrtu`, `NamaAnak`, `UsiaAnak`, `JenisImun`, `JenisKelamin`) VALUES
(1, '35299016574651', 'Katharina', 'Ulrich', '4 Bulan', 'Polio 3', 'Laki - Laki'),
(2, '35211104569993', 'Anthony', 'Kate', '3 Bulan', 'Polio 2', 'Perempuan'),
(3, '35244490193456', 'Shana', 'Hyacinth', '3 Bulan', 'Polio 2', 'Perempuan'),
(4, '35266718920110', 'Kate', 'Edwina', '1 Bulan', 'Hepatitis B', 'Perempuan'),
(5, '35267188902348', 'Troye', 'Sivan', '2 Bulan', 'Polio 1', 'Laki - Laki');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `imunisasi_061`
--
ALTER TABLE `imunisasi_061`
  ADD PRIMARY KEY (`IDPasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `imunisasi_061`
--
ALTER TABLE `imunisasi_061`
  MODIFY `IDPasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
