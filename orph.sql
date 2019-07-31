-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 12:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orph`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panti`
--

CREATE TABLE `admin_panti` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `jkel` varchar(9) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenispanti`
--

CREATE TABLE `jenispanti` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE `karya` (
  `id` int(11) NOT NULL,
  `panti_id` varchar(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `deskripsi` varchar(40) NOT NULL,
  `nama_anak` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karya`
--

INSERT INTO `karya` (`id`, `panti_id`, `judul`, `jenis`, `deskripsi`, `nama_anak`, `photo`, `created_at`, `updated_at`) VALUES
(1, '1', 'Kriya Dompet', 'Anyaman', 'Kriya Dompet uang', 'Yayang', 'ad.PNG', NULL, '2019-07-15 19:14:47'),
(2, '1', 'Dompet Lili', 'Rajutan', 'Dompet Girly', 'Lili', 'bg.png', '2019-07-15 20:35:30', '2019-07-15 20:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `kunj_undgn`
--

CREATE TABLE `kunj_undgn` (
  `id` int(11) NOT NULL,
  `panti_id` int(11) NOT NULL,
  `nik_user` varchar(16) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `durasi` int(2) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `detail` varchar(50) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panti`
--

CREATE TABLE `panti` (
  `id` int(11) NOT NULL,
  `nik_user` varchar(16) NOT NULL,
  `nik_pengurus` varchar(16) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `point_obj` varchar(22) NOT NULL,
  `butuh_fasilitas` varchar(60) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `jenispanti_id` int(11) NOT NULL,
  `jumlah_pengurus` int(11) NOT NULL,
  `nama_pimpinan` varchar(30) NOT NULL,
  `kontak` varchar(14) NOT NULL,
  `email` varchar(25) NOT NULL,
  `sosmed` varchar(35) NOT NULL,
  `status_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panti`
--

INSERT INTO `panti` (`id`, `nik_user`, `nik_pengurus`, `nama`, `alamat`, `point_obj`, `butuh_fasilitas`, `jumlah_anak`, `jenispanti_id`, `jumlah_pengurus`, `nama_pimpinan`, `kontak`, `email`, `sosmed`, `status_id`, `photo`, `created_at`, `updated_at`) VALUES
(2, '1234567890123456', '2345678901234567', 'PA Yatim PGAI', '', '-0.943403, 100.364084', 'Lemari, Kasur Tingkat, Kulkas, Lemari sambal, Meja', 28, 1, 5, 'Aisyah', '0751-72323', 'payatim.pgai@gmail.com', 'yatim_pgaipadang', 2, '', '2019-07-23 02:39:48', '0000-00-00 00:00:00'),
(3, '1234567812345678', '1234567890123451', 'Panti Asuhan Ar Rhaudhah', '', '-9081726, 100.98765', 'Lemari', 23, 1, 21, 'Siti', '0752-7890', 'Rhaudhah@gmail.com', 'rhaudhahPAdang', 3, 'run.png', '2019-07-23 03:16:05', '2019-07-22 20:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `ket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id` int(11) NOT NULL,
  `panti_id` int(11) NOT NULL,
  `nik_user` varchar(16) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `bidang` varchar(15) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `durasi` int(11) NOT NULL,
  `scan_berkas` varchar(40) NOT NULL,
  `status_id` int(11) NOT NULL,
  `detail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panti`
--
ALTER TABLE `admin_panti`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `jenispanti`
--
ALTER TABLE `jenispanti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panti_id` (`panti_id`);

--
-- Indexes for table `kunj_undgn`
--
ALTER TABLE `kunj_undgn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `panti_id` (`panti_id`),
  ADD KEY `nik_user` (`nik_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panti`
--
ALTER TABLE `panti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik_user` (`nik_user`),
  ADD KEY `nik_ap` (`nik_pengurus`),
  ADD KEY `jenispanti_id` (`jenispanti_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `nik_user` (`nik_user`),
  ADD KEY `panti_id` (`panti_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karya`
--
ALTER TABLE `karya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
