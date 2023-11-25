-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 05:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok6`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `penulis` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` varchar(50) NOT NULL,
  `id_pengaduan` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `tgl_feedback` date NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `id_pengaduan`, `nama`, `nim`, `tgl_feedback`, `alasan`) VALUES
('NUrRtwUd0V0eHNe9lPN5xsfWVxA7HKzUEk8sjpXpr8a9Tuuvix', '12345', 'Dastin Aryo Atmanto', '2008869', '2023-11-30', 'Kurang bukti');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsul` varchar(50) NOT NULL,
  `pengirim` varchar(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_konsultasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `hak` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`hak`, `username`, `password`) VALUES
('admin', 'admin', 'admin'),
('user', 'Dastin Aryo Atmanto', '2008869'),
('user', 'Athifa Hasna Ismayanti', '2001550');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` varchar(50) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tgl_kejadian` date NOT NULL,
  `pesan_aduan` text NOT NULL,
  `pelaku` varchar(255) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nim`, `nama`, `judul`, `tgl_kejadian`, `pesan_aduan`, `pelaku`, `bukti`, `status`) VALUES
('12345', '2008869', 'Dastin Aryo Atmanto', 'Kekerasan Pada Orang lain', '2023-11-01', ' Ini pesan aduan Ini pesan aduan Ini pesan aduanIni pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduanIni pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduanIni pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduanIni pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduanIni pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan Ini pesan aduan ', 'Inisial HDD', 'assets/img/bukti/bukti1.jpeg', 'decline');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nim` varchar(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nim`, `nama`, `fakultas`, `prodi`, `angkatan`) VALUES
('2008869', 'Dastin Aryo Atmanto', 'Kamda Cibiru', 'Teknik Komputer', '2020'),
('2001550', 'Athifa Hasna Ismayanti', 'Kamda Cibiru', 'Pendidikan Multimedia', '2020');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
