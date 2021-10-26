-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2021 pada 16.58
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `nama` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`nama`, `email`, `website`, `comment`, `gender`) VALUES
('adres', 'adres2@gmail.com', 'adres.co.id', 'hai', 'L'),
('adres', 'adres2@gmail.com', 'adres.co.id', 'hai', 'L'),
('Adres', 'adres@gmail.com', 'adres.com', 'hallo percobaan', 'L'),
('adres', 'adres3@gmail.com', 'adres.co.id', 'hallo percobaan ke 4', 'L'),
('', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
