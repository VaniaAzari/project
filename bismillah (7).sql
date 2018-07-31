-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 11:18 AM
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
(1, 'Admin', 'Administrator\r\n', 'admin123', 'RqEsrHkqug9xK48XHqPM5iGAavzJ7J91i1eJHt29h1rXP36cbdh2YWmmGxaa', '2018-07-20 05:58:00', '2018-07-20 05:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
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
(1, '123456', 'Dosen', 'Perempuan', 'dosen', '9pPCQnfKnE8yt0NUF0Ik9MWDRK3ttQWyIGaSLAPLt0fc4ShmEamk5QSEinnM', '2018-07-25 00:32:39', '2018-07-29 20:30:11'),
(2, '14789', 'Dosen2', 'Perempuan', 'dosen2', 'pWNjFZ2uGNxD2sm2Isyf1dpyfa49aUcjEVP8dNFtTtzrPjeQzhe1jYZIkaIL', '2018-07-27 21:39:58', '2018-07-29 20:30:24'),
(3, '1456', 'Dosen3', 'Perempuan', 'dosen3', 'k6rdhIxpy4nrZw71jGtqhXadGrsa5qcnj81giY6UPuQ6CvUDnPxQvquInW79', '2018-07-30 02:18:27', '2018-07-30 02:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `filetable`
--

CREATE TABLE `filetable` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_matkuls` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filetable`
--

INSERT INTO `filetable` (`id`, `user_id`, `file_title`, `id_matkuls`, `id_kelas`, `konten`, `file_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pertemuan 1', 'Kapita Selekta', '4SIA', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'kuesioner ulang kembali.docx', '2018-07-29 21:27:40', '2018-07-29 21:27:40'),
(2, 1, 'Pertemuan 2', 'Kapita Selekta', '4SIA', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 2 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'Ringkasan.docx', '2018-07-29 21:28:05', '2018-07-29 21:28:05'),
(3, 1, 'Pertemuan 1', 'Kapita Selekta', '4SIB', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'kuesioner ulang kembali.docx', '2018-07-29 21:28:26', '2018-07-29 21:28:26'),
(4, 1, 'Pertemuan 3', 'Kapita Selekta', '4SIA', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 3 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'Ringkasan.docx', '2018-07-29 21:28:53', '2018-07-29 21:49:07'),
(5, 2, 'Pertemuan 1', 'Kewirausahaan', '4SIA', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'Pertemuan10.pptx', '2018-07-29 21:30:58', '2018-07-29 21:30:58'),
(6, 2, 'Pertemuan 1', 'Kewirausahaan', '4SIB', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'Pertemuan10.pptx', '2018-07-29 21:31:22', '2018-07-29 21:31:22'),
(7, 1, 'Pertemuan 4', 'Kapita Selekta', '4SIA', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 4 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'sitemapppp.docx', '2018-07-29 21:49:36', '2018-07-29 21:49:36'),
(8, 1, 'Pertemuan 2', 'Kapita Selekta', '4SIB', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 2 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'posterr.docx', '2018-07-29 21:50:11', '2018-07-29 21:50:11'),
(9, 2, 'Pertemuan 2', 'Kewirausahaan', '4SIA', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 2 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'gambarr baru.jpg', '2018-07-29 21:51:20', '2018-07-29 21:51:20'),
(10, 2, 'Pertemuan 2', 'Kewirausahaan', '4SIB', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 2 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'Skala likert.docx', '2018-07-29 21:51:55', '2018-07-29 21:51:55'),
(11, 3, 'Pertemuan 1', 'Kapita Selekta', '4SIC', '<p>dvdsvjdsvjdvjdvjdsnvdnvjsdnds vdvs</p>', 'ayam kremes.txt', '2018-07-30 02:20:49', '2018-07-30 02:20:49'),
(12, 3, 'Pertemuan 2', 'Kapita Selekta', '4SIC', '<p>ndjbjsdbjdsbvsdbnsdbsdbjvdsbjdsgjbsdjgsd</p>', 'Kisi.docx', '2018-07-30 02:22:02', '2018-07-30 02:22:02');

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
(4, '4SIC', '2018-07-30 02:19:07', '2018-07-30 02:19:07');

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
(1, '1457301093', 'Vania Azari', 'Perempuan', 'Sistem Informasi', '4SIA', 'vania', '5yF8XT4pd1LIIQy70rz7uDemsIDVzvP4lXSzDYkd7PdfnNa40eaHUA8vvRpc', '2018-07-22 00:12:55', '2018-07-22 00:12:55'),
(2, '1457301005', 'Aminda Pramita Sani', 'Perempuan', 'Sistem Informasi', '4SIA', 'aminda', 'hMJ1MzByidAgPbxfLdO676RAjrmAMlJNXZSpOVoh4Gpc4OOFAh7d7XiNxpET', '2018-07-22 00:55:09', '2018-07-29 01:33:12'),
(3, '1457301020', 'Dea An Nisa', 'Perempuan', 'Sistem Informasi', '4SIB', 'dea', 'hOLQr8dBGqMNrOJGXLHO9gJyg0uHoQMHkWmVlJJi8cNzu162P4CQ5pDaHdS2', '2018-07-22 01:33:41', '2018-07-29 17:55:27'),
(4, '1457301010', 'Ayu Anggraini', 'Perempuan', 'Sistem Informasi', '4SIB', 'ayu', 'bZRkQtdlfiTrZ11GPqXl95bYfovHNpZRnpDCOs6ea9teDuGDnF3kVRGKEMPF', '2018-07-29 18:06:40', '2018-07-29 18:06:40'),
(5, '1457301038', 'Katrina Novelia S', 'Perempuan', 'Sistem Informasi', '4SIC', 'keket', 'Oyr9NmtBVzL8m0Tvcypv6vHxEp9Slw9BMRFk6HebNqYfBu2pqhJd7AuZWq8r', '2018-07-30 02:19:39', '2018-07-30 02:19:39');

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
(1, 'Kapita Selekta', '2018-07-25 00:33:34', '2018-07-25 00:33:34'),
(3, 'Kewirausahaan', '2018-07-26 06:32:33', '2018-07-26 06:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliahkelas`
--

CREATE TABLE `matakuliahkelas` (
  `id` int(11) NOT NULL,
  `id_matkul` varchar(255) NOT NULL,
  `id_kelas` varchar(255) NOT NULL,
  `dosen_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliahkelas`
--

INSERT INTO `matakuliahkelas` (`id`, `id_matkul`, `id_kelas`, `dosen_id`, `created_at`, `updated_at`) VALUES
(1, 'Kapita Selekta', '4SIA', 'Dosen', '2018-07-30 03:31:03', '2018-07-29 20:31:03'),
(4, 'Kewirausahaan', '4SIA', 'Dosen2', '2018-07-30 03:31:11', '2018-07-29 20:31:11'),
(5, 'Kapita Selekta', '4SIB', 'Dosen', '2018-07-30 03:31:17', '2018-07-29 20:31:17'),
(6, 'Kewirausahaan', '4SIB', 'Dosen2', '2018-07-30 03:31:23', '2018-07-29 20:31:23'),
(7, 'Kapita Selekta', '4SIC', 'Dosen3', '2018-07-30 02:20:00', '2018-07-30 02:20:00');

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
  `user_id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `user_id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(2, 1, 'Reminder Tugas Kapita Selekta', '<p><strong>Reminder</strong></p>\r\n<p>Pengumpulan tugas kapita selekta sebelum&nbsp; jam 12 siang</p>', '2018-07-28 01:33:20', '2018-07-29 06:31:58'),
(3, 2, 'Reminder Tugas Kewirausahaan', '<p><strong>Reminder</strong></p>\r\n<p>Pengumpulan tugas kapita selekta sebelum&nbsp; jam 12 siang</p>', '2018-07-28 23:06:39', '2018-07-29 17:05:29');

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
  `user_id` int(11) NOT NULL,
  `id_kelas` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `id_matkul`, `user_id`, `id_kelas`, `konten`, `tanggal_masuk`, `tanggal_akhir`, `created_at`, `updated_at`) VALUES
(1, 'Kapita Selekta', 1, '4SIA', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', '2018-07-30', '2018-07-31', '2018-07-29 17:39:35', '2018-07-29 17:39:35'),
(2, 'Kapita Selekta', 1, '4SIA', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 2 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', '2018-07-31', '2018-08-01', '2018-07-29 17:39:54', '2018-07-29 17:39:54'),
(3, 'Kewirausahaan', 2, '4SIA', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', '2018-07-30', '2018-07-31', '2018-07-29 17:40:23', '2018-07-29 17:40:23'),
(4, 'Kewirausahaan', 2, '4SIA', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 2 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', '2018-07-31', '2018-08-01', '2018-07-29 17:40:43', '2018-07-29 17:40:43'),
(5, 'Kapita Selekta', 1, '4SIB', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', '2018-07-30', '2018-07-31', '2018-07-29 17:56:46', '2018-07-29 17:56:46'),
(6, 'Kapita Selekta', 1, '4SIB', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', '2018-07-31', '2018-08-01', '2018-07-29 17:59:50', '2018-07-29 17:59:50'),
(7, 'Kewirausahaan', 2, '4SIB', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', '2018-07-30', '2018-07-31', '2018-07-29 18:03:51', '2018-07-29 18:03:51'),
(8, 'Kewirausahaan', 2, '4SIB', '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 2 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', '2018-07-31', '2018-08-01', '2018-07-29 18:04:10', '2018-07-29 18:04:10'),
(9, 'Kapita Selekta', 3, '4SIC', '<p>nfjdfnjsndsjnfjfnjdsnfjdsfnjdsfnjsdf</p>', '2018-07-30', '2018-07-31', '2018-07-30 02:23:09', '2018-07-30 02:23:09'),
(11, 'Kapita Selekta', 3, '4SIC', '<p>nsfkasnfsnjasnfasnfsfnasnfsnsmsaf</p>', '2018-07-31', '2018-08-01', '2018-07-31 00:21:44', '2018-07-31 00:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `tugasmahasiswa`
--

CREATE TABLE `tugasmahasiswa` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `kelas_id` varchar(255) DEFAULT NULL,
  `matakuliah_id` varchar(255) DEFAULT NULL,
  `file_name` varchar(2000) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugasmahasiswa`
--

INSERT INTO `tugasmahasiswa` (`id`, `mahasiswa_id`, `kelas_id`, `matakuliah_id`, `file_name`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(1, 1, '4SIA', 'Kapita Selekta', 'Tugas1_Kapita_Vania.docx', '2018-07-30', '2018-07-29 17:45:46', '2018-07-29 17:45:46'),
(2, 1, '4SIA', 'Kapita Selekta', 'Tugas2_Kapita_Vania.docx', '2018-07-31', '2018-07-29 17:46:22', '2018-07-29 17:46:22'),
(3, 1, '4SIA', 'Kewirausahaan', 'Tugas1_KWU_Vania.docx', '2018-07-30', '2018-07-29 17:50:01', '2018-07-29 17:50:01'),
(4, 1, '4SIA', 'Kewirausahaan', 'Tugas2_KWU_Vania.docx', '2018-07-31', '2018-07-29 17:50:31', '2018-07-29 17:50:31'),
(5, 2, '4SIA', 'Kapita Selekta', 'Tugas1_Kapita_Aminda.docx', '2018-07-30', '2018-07-29 17:52:04', '2018-07-29 17:52:04'),
(7, 2, '4SIA', 'Kapita Selekta', 'Tugas2_Kapita_Aminda.docx', '2018-07-31', '2018-07-29 17:52:25', '2018-07-29 17:52:25'),
(8, 2, '4SIA', 'Kewirausahaan', 'Tugas1_KWU_Aminda.docx', '2018-07-30', '2018-07-29 17:52:47', '2018-07-29 17:52:47'),
(10, 2, '4SIA', 'Kewirausahaan', 'Tugas2_KWU_Aminda.docx', '2018-07-31', '2018-07-29 17:53:22', '2018-07-29 17:53:22'),
(11, 3, '4SIB', 'Kapita Selekta', 'Tugas1_Kapita_Dea.docx', '2018-07-30', '2018-07-29 18:04:50', '2018-07-29 18:04:50'),
(12, 3, '4SIB', 'Kapita Selekta', 'Tugas2_Kapita_Dea.docx', '2018-07-31', '2018-07-29 18:05:03', '2018-07-29 18:05:03'),
(13, 3, '4SIB', 'Kewirausahaan', 'Tugas1_KWU_Dea.docx', '2018-07-30', '2018-07-29 18:05:45', '2018-07-29 18:05:45'),
(14, 3, '4SIB', 'Kewirausahaan', 'Tugas2_KWU_Dea.docx', '2018-07-31', '2018-07-29 18:05:59', '2018-07-29 18:05:59'),
(15, 4, '4SIB', 'Kapita Selekta', 'Tugas1_Kapita_Ayu.docx', '2018-07-30', '2018-07-29 18:07:13', '2018-07-29 18:07:13'),
(16, 4, '4SIB', 'Kapita Selekta', 'Tugas2_Kapita_Ayu.docx', '2018-07-31', '2018-07-29 18:07:26', '2018-07-29 18:07:26'),
(17, 4, '4SIB', 'Kewirausahaan', 'Tugas1_KWU_Ayu.docx', '2018-07-30', '2018-07-29 18:07:40', '2018-07-29 18:07:40'),
(18, 4, '4SIB', 'Kewirausahaan', 'Tugas2_KWU_Ayu.docx', '2018-07-31', '2018-07-29 18:07:54', '2018-07-29 18:07:54'),
(19, 5, '4SIC', 'Kapita Selekta', 'OUTPUT3.doc', '2018-07-30', '2018-07-30 02:23:52', '2018-07-30 02:23:52'),
(20, 5, '4SIC', 'Kapita Selekta', 'ERD.xlsx', '2018-07-31', '2018-07-31 00:23:05', '2018-07-31 00:23:05');

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
-- Indexes for table `tugasmahasiswa`
--
ALTER TABLE `tugasmahasiswa`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `filetable`
--
ALTER TABLE `filetable`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matakuliahkelas`
--
ALTER TABLE `matakuliahkelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tugasmahasiswa`
--
ALTER TABLE `tugasmahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
