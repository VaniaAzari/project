-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 08:10 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bismillah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `nama`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Administrator\r\n', 'admin123', 'myXs3BuCS1RhsbxYTYKTq8hr20O2buOu1le9hePP8ILuknrClGIc1ZTw0f1l', '2018-07-20 05:58:00', '2018-07-20 05:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `username`, `nama`, `jenis_kelamin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '123456', 'Puput', 'Perempuan', 'puput', '5mP7E7MBDoLPTAqWWzKA47YR9iLCLNSJXgo2qtpfZ61BCjNbBjIYXkvB3enL', '2018-07-20 20:58:32', '2018-07-20 20:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `filetable`
--

CREATE TABLE `filetable` (
  `id` int(11) UNSIGNED NOT NULL,
  `file_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_matkuls` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filetable`
--

INSERT INTO `filetable` (`id`, `file_title`, `id_matkuls`, `konten`, `file_name`, `created_at`, `updated_at`) VALUES
(3, 'Pertemuan 1', 'Kapita Selekta', '<p><span>Dear all,</span><br /><br /><span>Berikut ini adalah panduan pelaksanaan perkuliahan Kapita Selekta 2018.</span><br /><br /><span>Untuk \"Laporan Mandiri\" silahkan diprint masing-masing per orang dan dibawa setiap perkuliahan \"Kapita Selekta\". Di laporan ini, kamu akan catat materi di hari itu. Hardfile dikumpulkan ke ketua kelas, ketua kelas akan mengumpulkan ke koordinator kelas. Softfile diupload di Google Classroom. Hardfile dan Softfile sudah dikumpul sebelum jam 12:00 WIB di hari itu juga.</span><br /><br /><span>Untuk \"Laporan Kegiatan Kelompok Pelaksana\" dikumpul hanya oleh ketua pelaksana maksimal 1 minggu setelah acara selesai.&nbsp;</span><br /><br /><span>Setiap Ketua mendaftarkan data pembicara pada Link terlampir. Silahkan klik dan isi data dengan lengkap.</span><br /><br /><span>Selamat belajar menjadi EO....</span><br /><span>Selamat menikmati kuliah umum yang menambah wawasan...</span><br /><span>Semoga semua bisa wisuda tepat waktu tahun ini! Semoga 3 TI bisa menyusul wisuda tepat waktu juga 2019 nanti :-)</span><br /><br /><span>Salam,</span><br /><br /><span>[Panitia Dosen Kapita Selekta 2018]</span></p>', 'Cara Membuat Web Dinamis Sederhana.docx', '2018-07-23 21:17:56', '2018-07-23 21:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, '4SIA', '2018-07-22 00:06:07', '2018-07-22 00:06:07'),
(2, '4SIB', '2018-07-22 00:06:12', '2018-07-22 00:06:12'),
(3, '4SIC', '2018-07-22 00:06:19', '2018-07-22 00:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kls` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `username`, `nama`, `jenis_kelamin`, `id_prodi`, `id_kls`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1457301093', 'Vania Azari', 'Perempuan', 'Sistem Informasi', '4SIA', 'vania', 'j2Z5DaPVYIMrdNRjNEFOKJWfOHMeOT2a67g9kh2I1YDq8qxsm9D5DiJNloOj', '2018-07-22 00:12:55', '2018-07-22 00:12:55'),
(2, '1457301005', 'Aminda Pramita Sani', 'Perempuan', 'Sistem Informasi', '4SIB', 'aminda', 'VK78hacCR8Cvce5LYDgMTfyGJHNgj27IWOibewhdnM2yM7m5TR7CIDev2DZC', '2018-07-22 00:55:09', '2018-07-22 00:55:09'),
(3, '1457301020', 'Dea An Nisa', 'Perempuan', 'Sistem Informasi', '4SIA', 'dea', 'PMdkmW6tTM3ZrQhNU3i6WU3MtwOgamgvfG93WFEtBZ36G8w70FaY9tKuunbk', '2018-07-22 01:33:41', '2018-07-22 01:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `nama_matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama_matkul`, `created_at`, `updated_at`) VALUES
(5, 'Kapita Selekta', '2018-07-22 00:11:45', '2018-07-23 20:29:28'),
(9, 'Kewirausahaan', '2018-07-23 21:04:12', '2018-07-23 21:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliahkelas`
--

CREATE TABLE `matakuliahkelas` (
  `id` int(11) NOT NULL,
  `id_matkul` varchar(255) NOT NULL,
  `id_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliahkelas`
--

INSERT INTO `matakuliahkelas` (`id`, `id_matkul`, `id_kelas`, `created_at`, `updated_at`) VALUES
(1, 'Kapita Selekta', '4SIA', '2018-07-23 21:14:00', '2018-07-23 21:14:00'),
(2, 'Kapita Selekta', '4SIB', '2018-07-23 21:15:06', '2018-07-23 21:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_20_085142_create_filetable_table', 1),
(2, '2018_07_20_085207_create_kelas_table', 1),
(3, '2018_07_20_085237_create_matakuliah_table', 1),
(4, '2018_07_20_085305_create_pengumuman_table', 1),
(5, '2018_07_20_085333_create_prodi_table', 1),
(6, '2018_07_20_085402_create_tugas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Pengumpulan Tugas Kapita Selekta', '<p><span style=\"font-size: small;\"><strong>Reminder</strong></span></p>\r\n<p><span style=\"font-size: small;\">Pengumpulan tugas kapita selekta terakhir tanggal 22 July 2018 jam 16.00 wib</span></p>\r\n<p>&nbsp;</p>', '2018-07-22 00:44:34', '2018-07-22 00:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama_prodi`, `created_at`, `updated_at`) VALUES
(1, 'Sistem Informasi', '2018-07-21 23:57:59', '2018-07-21 23:57:59'),
(2, 'Teknik Informatika', '2018-07-21 23:58:05', '2018-07-21 23:58:05'),
(3, 'Teknik Komputer', '2018-07-21 23:58:11', '2018-07-21 23:58:11'),
(4, 'Akuntansi', '2018-07-21 23:58:24', '2018-07-21 23:58:24'),
(5, 'Teknik Elektronika', '2018-07-21 23:58:35', '2018-07-21 23:58:35'),
(6, 'Teknik Telekomunikasi', '2018-07-21 23:58:44', '2018-07-21 23:58:44'),
(7, 'Teknik Elektronika Telekomunikasi', '2018-07-21 23:58:59', '2018-07-21 23:58:59'),
(8, 'Teknik Mekatronika', '2018-07-21 23:59:08', '2018-07-21 23:59:08'),
(9, 'Teknik Listrik', '2018-07-21 23:59:33', '2018-07-21 23:59:33'),
(10, 'Teknik Mesin', '2018-07-21 23:59:46', '2018-07-21 23:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `id_matkul` varchar(255) NOT NULL,
  `id_kelas` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `file` varchar(2000) DEFAULT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `id_matkul`, `id_kelas`, `konten`, `file`, `tanggal_masuk`, `tanggal_akhir`, `created_at`, `updated_at`) VALUES
(1, 'Kapita Selekta', '4SIA', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'ADAM AIR.docx', '2018-07-22', '2018-07-23', '2018-07-22 09:43:42', '2018-07-22 02:43:42'),
(5, 'Kapita Selekta', '4SIB', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', NULL, '2018-07-24', '2018-07-25', '2018-07-23 22:02:26', '2018-07-23 22:02:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filetable`
--
ALTER TABLE `filetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliahkelas`
--
ALTER TABLE `matakuliahkelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `filetable`
--
ALTER TABLE `filetable`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `matakuliahkelas`
--
ALTER TABLE `matakuliahkelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
