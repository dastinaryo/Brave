-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 06:01 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

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
  `id` int(10) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `penulis`, `judul`, `foto`, `link`) VALUES
(3, 'Ayunda Pininta Kasih', 'Nadiem: 77 Persen Dosen Akui Kekerasan Seksual Terjadi di Kampus\"', 'https://storage.googleapis.com/skinnie-bucket/brave/3.png', 'https://www.kompas.com/edu/read/2021/11/12/175145171/nadiem-77-persen-dosen-akui-kekerasan-seksual-terjadi-di-kampus'),
(4, 'Anugrah Andriansyah', 'Komnas Perempuan: Kasus Kekerasan Seksual di Lingkungan Pendidikan, Paling Tinggi di Universitas', 'https://storage.googleapis.com/skinnie-bucket/brave/4.png', 'https://www.voaindonesia.com/a/komnas-perempuan-kasus-kekerasan-seksual-di-lingkungan-pendidikan-paling-tinggi-di-universitas/6525659.html'),
(5, 'Gita Amanda', 'Kekerasan Seksual pada Perempuan dan Anak Masih Memprihatinkan', 'https://storage.googleapis.com/skinnie-bucket/brave/5.png', 'https://www.msn.com/id-id/berita/other/kekerasan-seksual-pada-perempuan-dan-anak-masih-memprihatinkan/ar-AA1kAgC7'),
(6, 'Claudia Jessica', '5 Jenis Kekerasan yang Perlu Anak Ketahui untuk Mencegah Mereka Menjadi Korban', 'https://storage.googleapis.com/skinnie-bucket/brave/6.jpeg', 'https://www.jawaban.com/read/article/id/2023/11/28/93/231128180139/5_jenis_kekerasan_yang_perlu_anak_ketahui_untuk_mencegah_mereka_menjadi_korban');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` varchar(50) NOT NULL,
  `id_pengaduan` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `tgl_feedback` datetime NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `id_pengaduan`, `nama`, `nim`, `tgl_feedback`, `alasan`) VALUES
('onK5hNhl65h87I4z2j5uRGLRb75PiNNej8JSb2peHQIdwcLA0n', 'FVYDINL0LpkyhWve4NaAZsXi76C0wjxsXi5OVacrXNEcNVAJGp', 'Rastra Wardana Nanditama ', '2003075', '2023-11-27 01:55:35', 'Bukti Palsu'),
('gpeGPkyOByjNwhhQ0FO6KrqFc99ZntvkXttxmlFGpJpTDZCX4d', 'C4CTT8PKw48BwUG7z9l8r8X5xtLxx1ClVA7jhAmnEc2BKBQ87I', 'Dastin Aryo Atmanto', '2008869', '2023-11-27 01:56:00', 'Kasus Segera Kami Proses'),
('3QgWuRfXwGk6MK31JZYXFg83VZcQ1GwMUoXLDwn7q8cHDM1QR0', 'NyIZOqGkHROwdSblje9MOUNAxBCAi3MDBwDnmfIQKnxdlqgICB', 'Abdi Surya Perdana', '2004426', '2023-11-27 01:56:25', 'Silahkan Datang ke Kantor Pusat Kami'),
('mMp2SJ7bHaxdyW1UGqocTbzhLJmAXZzj7yLmUtXaYDRIRkemU7', 'NyIZOqGkHROwdSblje9MOUNAxBCAi3MDBwDnmfIQKnxdlqgICB', 'Abdi Surya Perdana', '2004426', '2023-11-27 01:56:46', 'Kasus Sudah Selesai'),
('k9DsIqOLrMZeKiEkP4J3LUjdccWAC5HKR0MLEo9c6idOE318Ue', 'uS7cP2hpTAaq8m9p0N3oAEdnFUw3qabMgtjhAOWjnSUZc1mICR', 'Rastra Wardana Nanditama ', '2003075', '2023-11-27 02:04:37', 'Semoga kasus ini berakhir baik, aamiin'),
('bCysLh3CreLQa5D1o1Q8eD9fy33nMvt27cmsX9NiZIGs8Takta', 'uS7cP2hpTAaq8m9p0N3oAEdnFUw3qabMgtjhAOWjnSUZc1mICR', 'Rastra Wardana Nanditama ', '2003075', '2023-11-27 06:01:06', 'Bukti Kurang Kuat');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsul` varchar(50) NOT NULL,
  `pengirim` varchar(25) NOT NULL,
  `penerima` varchar(25) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_konsultasi` datetime NOT NULL,
  `is_read` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsul`, `pengirim`, `penerima`, `judul`, `pesan`, `tgl_konsultasi`, `is_read`) VALUES
('6DKaynZKq7DUNKNfUFhxmABwdRne3szK5DoaBFKIjbzBsB5qYC', 'admin', '2008869', 'Konsultasi Pertama', 'Ini balasan konsultasi pertama, tapi revisi', '2023-11-27 11:45:44', 'read'),
('75uCsVMn4c8tOY4IdguZVMcJkNXmzrfHPhqJx3j4wlyiumaTWs', '2004426', 'admin', 'Konsultasi Pertama', 'Ini adalah Konsutasi Pertama saya', '2023-11-28 05:42:22', 'read'),
('iSWgOzq8CH23GeKr0sAKyhLBhS2nXbXZrlw6BK3YYlAAkC8Nvv', 'admin', '2004426', 'Konsultasi Ketiga', 'Ini isi dari konsultasi ketiga', '2023-11-28 06:20:43', 'unread'),
('nQkzm7VpyXApUjP5eKdBYyLlZA7MIkeSpdOoH7YPO2pqsLRXkN', 'admin', '2004426', 'Konsultasi Keempat', 'Ini adalah isi dari konsultasi keempat', '2023-11-28 06:21:24', 'unread'),
('e3vIL7QxHYMFQIeNTBXaXEyfUcaAiNYi1rywF4RQsFgeG6se2N', '2004426', 'admin', 'Konsultasi Kedua', 'ini balasan konsultasi kedua', '2023-11-28 06:26:53', 'read'),
('HQ3JOEEAh2g6lCHXquLChuS5oc7E7FYpHVofuPwJ23hyCglhck', '2004426', 'admin', 'Konsultasi Pertama', 'Ini balasan konsul baru banget', '2023-11-28 07:05:29', 'unread'),
('IXu4bq5OMMv5WyTGhq0m7XWyFfj0yBjLRVVgbRuaoQnx1HDhh1', '2004426', 'admin', 'Konsultasi Ketiga', 'Ini adalah konsultasi ketiga baru banget', '2023-11-28 07:06:34', 'unread'),
('rmaDB776JNrGLWF7PI1JqURtoBBl5mG747n8Uh9zAu7AU5C6YV', '2004426', 'admin', 'Konsultasi Keempat', 'Ini adalah konsultasi keempat saya, baru banget di edit', '2023-11-28 07:07:43', 'unread'),
('3mAAwx5BWKHKCLPsbKraNMZH6W7SVvCcyQURD1U96oAILtYMAo', '2008869', 'admin', 'Konsultasi Pertama', 'Baik, Terimakasih atas konsultasinya', '2023-11-28 10:23:17', 'unread');

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
('user', 'Abdi Surya Perdana', '2004426'),
('user', 'Ahmad Fauzan', '2007326'),
('user', 'Anisa Nur Syafia', '2008567'),
('user', 'Dastin Aryo Atmanto', '2008869'),
('user', 'Muhammad Andhika Ramadhan', '2003029'),
('user', 'Muhammad Azfa Faadhilah', '2002878'),
('user', 'Rahmawati', '2008187'),
('user', 'Rastra Wardana Nanditama ', '2003075');

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
  `tgl_aduan` datetime NOT NULL DEFAULT current_timestamp(),
  `pesan_aduan` text NOT NULL,
  `pelaku` varchar(255) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nim`, `nama`, `judul`, `tgl_kejadian`, `tgl_aduan`, `pesan_aduan`, `pelaku`, `bukti`, `status`) VALUES
('uS7cP2hpTAaq8m9p0N3oAEdnFUw3qabMgtjhAOWjnSUZc1mICR', '2003075', 'Rastra Wardana Nanditama ', 'Pengaduan Pertama', '2023-11-01', '2023-11-27 07:22:25', 'Kekerasan seksual adalah salah satu masalah yang mendalam di masyarakat kita, dan pendidikan memiliki peran krusial dalam mencegahnya. Edukasi bukan hanya tentang memberikan informasi, tetapi juga membentuk sikap, norma, dan nilai-nilai yang mendorong kesejahteraan bersama. Dalam konteks ini, mari kita bahas bagaimana edukasi dapat menjadi instrumen efektif dalam melawan kekerasan seksual.', 'Pelaku Pertama', 'bukti1.jpeg', 'process'),
('FVYDINL0LpkyhWve4NaAZsXi76C0wjxsXi5OVacrXNEcNVAJGp', '2003075', 'Rastra Wardana Nanditama ', 'Pengaduan Kedua', '2023-11-16', '2023-11-27 07:46:38', 'Kekerasan seksual adalah salah satu masalah yang mendalam di masyarakat kita, dan pendidikan memiliki peran krusial dalam mencegahnya. Edukasi bukan hanya tentang memberikan informasi, tetapi juga membentuk sikap, norma, dan nilai-nilai yang mendorong kesejahteraan bersama. Dalam konteks ini, mari kita bahas bagaimana edukasi dapat menjadi instrumen efektif dalam melawan kekerasan seksual.', 'Pelaku Kedua', 'blogpost.jpg', 'decline'),
('C4CTT8PKw48BwUG7z9l8r8X5xtLxx1ClVA7jhAmnEc2BKBQ87I', '2008869', 'Dastin Aryo Atmanto', 'Pertama Kali Saya Mengalami Kejadian Ini', '2023-11-30', '2023-11-27 07:52:39', 'Kekerasan seksual adalah salah satu masalah yang mendalam di masyarakat kita, dan pendidikan memiliki peran krusial dalam mencegahnya. Edukasi bukan hanya tentang memberikan informasi, tetapi juga membentuk sikap, norma, dan nilai-nilai yang mendorong kesejahteraan bersama. Dalam konteks ini, mari kita bahas bagaimana edukasi dapat menjadi instrumen efektif dalam melawan kekerasan seksual.', 'Pelaku Pertama Saya', 'talha.jpg', 'pending'),
('NyIZOqGkHROwdSblje9MOUNAxBCAi3MDBwDnmfIQKnxdlqgICB', '2004426', 'Abdi Surya Perdana', 'Saya Mengalami Sesuatu Hal Aneh', '2023-11-15', '2023-11-27 07:55:02', 'Pentingnya pendidikan dalam membangun kesadaran tentang kekerasan seksual tidak bisa diabaikan. Melalui kurikulum yang terintegrasi, sekolah dapat mengajarkan siswa tentang pentingnya menghormati batas-batas pribadi, mengenali perilaku tidak pantas, dan memahami konsep persetujuan dalam hubungan.', 'Gatau Siapa', 'arashmil.jpg', 'complete'),
('d3F2ZxtE7oyJOjGdrLDCm6F3WDIIvx59aRvj3K2tp8KUFs8oZk', '2008869', 'Dastin Aryo Atmanto', 'Pengaduan Kedua', '2023-11-14', '2023-11-27 17:48:29', 'Pendidikan harus menciptakan jaringan dukungan yang melibatkan komunitas, pemerintah, dan organisasi non-pemerintah. Program-program bersama dapat menciptakan lingkungan yang mendukung, dan menguatkan upaya pencegahan kekerasan seksual.', 'Pelaku Kedua', 'product9.jpeg', 'pending'),
('kdIJY6b4Q3AWGB4dgdSQE4cQU1DZf0wjTYMnzKS5BK345okKmL', '2008869', 'Dastin Aryo Atmanto', 'Pengaduan Saya Terkait Apapun itu', '2023-11-13', '2023-11-28 15:58:32', 'Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa \r\n\r\nDiharapkan untuk tetap menjaga kesehatan bersama dan datang pada jam yang telah ditentukan.\r\n\r\nTerima kasih banyak atas perhatiannya.', 'Pelaku Kedua', 'product1.jpeg', 'pending');

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
('2004426', 'Abdi Surya Perdana', 'Kamda Cibiru', 'Teknik Komputer', '2020'),
('2007326', 'Ahmad Fauzan', 'Kamda Cibiru', 'Teknik Komputer', '2020'),
('2008567', 'Anisa Nur Syafia', 'Kamda Cibiru', 'Teknik Komputer', '2020'),
('2008869', 'Dastin Aryo Atmanto', 'Kamda Cibiru', 'Teknik Komputer', '2020'),
('2003029', 'Muhammad Andhika Ramadhan', 'Kamda Cibiru', 'Teknik Komputer', '2020'),
('2002878', 'Muhammad Azfa Faadhilah', 'Kamda Cibiru', 'Teknik Komputer', '2020'),
('2008187', 'Rahmawati', 'Kamda Cibiru', 'Teknik Komputer', '2020'),
('2003075', 'Rastra Wardana Nanditama ', 'Kamda Cibiru', 'Teknik Komputer', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
