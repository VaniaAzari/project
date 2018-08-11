-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2018 at 11:21 AM
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
(1, 'Admin', 'Administrator\r\n', 'admin123', '15tnIEpucNG6aCbpKN6NzbALvzZvGSGx5blJcbOe3zsRf9N4BSmNJW925KaL', '2018-07-20 05:58:00', '2018-07-20 05:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `username`, `nama`, `jenis_kelamin`, `email`, `password`, `file_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '123456', 'Indah Lestari', 'Perempuan', 'indah@pcr.ac.id', 'dosen', 'indah.JPG', 'rSJr0PSVtIyUjL8zj5oT9NGW48aSssQuwEn2wNNJpwrruGL5MVlSycMUyHM2', '2018-08-08 19:54:12', '2018-08-09 01:28:38'),
(3, '14789', 'Nurpit Junus', 'Laki-laki', 'nurpit@pcr.ac.id', 'dosen2', 'Politeknik Caltex Riau.jpg', 'Qvb9zKTA9tU7ohZ8zgGLZYDvR7ydewLTjxSQj5Aw8MovbtZDNQ5PpibiEqrI', '2018-08-11 01:32:20', '2018-08-11 01:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `filetable`
--

CREATE TABLE `filetable` (
  `id` int(11) UNSIGNED NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `file_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filetable`
--

INSERT INTO `filetable` (`id`, `dosen_id`, `file_title`, `matakuliah_id`, `kelas_id`, `konten`, `file_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pertemuan 1', 1, 1, '<p><span>Dear all,</span><br /><br /><span>Silahkan setiap ketua kelompok pelaksana yang sudah selesai menjadi penyelenggara acara Kapita Selekta mengumpulkan laporan pelaksanaan di sini, dengan detail yang dikumpulkan adalah:</span><br /><span>1. Laporan Kegiatan Kelompok Pelaksana</span><br /><span>2. CV Pembicara</span><br /><span>3. Media Promosi atau Publikasi Acara (sebelum acara berlangsung, baik berupa gambar poster atau video, dan media lainnya).</span><br /><span>4. Dokumentasi Video Acara</span><br /><span>5. Dokumentasi foto-foto</span><br /><span>6. Form Fact Sheet Final yang pernah di-emailkan ke Pak Fajar/Bu Gita Bagian Marketing PCR pagi sebelum acara dimulai.</span><br /><br /><span>Catatan:</span><br /><span>Salah satu poin penting adalah memastikan bahwa seluruh nama mahasiswa di kelas penyelenggara tercantum di susunan kepanitiaan.</span><br /><br /><span>Demikian.</span><br /><br /><span>Salam,</span></p>', 'Kuisioner Kebutuhan Pengguna.docx', '2018-08-08 20:21:42', '2018-08-08 20:21:42'),
(4, 1, 'Pertemuan 2', 1, 1, '<p><span>Dear all,</span><br /><br /><span>Silahkan setiap ketua kelompok pelaksana yang sudah selesai menjadi penyelenggara acara Kapita Selekta mengumpulkan laporan pelaksanaan di sini, dengan detail yang dikumpulkan adalah:</span><br /><span>1. Laporan Kegiatan Kelompok Pelaksana</span><br /><span>2. CV Pembicara</span><br /><span>3. Media Promosi atau Publikasi Acara (sebelum acara berlangsung, baik berupa gambar poster atau video, dan media lainnya).</span><br /><span>4. Dokumentasi Video Acara</span><br /><span>5. Dokumentasi foto-foto</span><br /><span>6. Form Fact Sheet Final yang pernah di-emailkan ke Pak Fajar/Bu Gita Bagian Marketing PCR pagi sebelum acara dimulai.</span><br /><br /><span>Catatan:</span><br /><span>Salah satu poin penting adalah memastikan bahwa seluruh nama mahasiswa di kelas penyelenggara tercantum di susunan kepanitiaan.</span><br /><br /><span>Demikian.</span><br /><br /><span>Salam,</span></p>', 'Skalaaaa likertt.docx', '2018-08-09 00:52:46', '2018-08-09 00:52:46'),
(23, 1, 'Pertemuan 1', 1, 2, '<p><span>Dear all,</span><br /><br /><span>Silahkan setiap ketua kelompok pelaksana yang sudah selesai menjadi penyelenggara acara Kapita Selekta mengumpulkan laporan pelaksanaan di sini, dengan detail yang dikumpulkan adalah:</span><br /><span>1. Laporan Kegiatan Kelompok Pelaksana</span><br /><span>2. CV Pembicara</span><br /><span>3. Media Promosi atau Publikasi Acara (sebelum acara berlangsung, baik berupa gambar poster atau video, dan media lainnya).</span><br /><span>4. Dokumentasi Video Acara</span><br /><span>5. Dokumentasi foto-foto</span><br /><span>6. Form Fact Sheet Final yang pernah di-emailkan ke Pak Fajar/Bu Gita Bagian Marketing PCR pagi sebelum acara dimulai.</span><br /><br /><span>Catatan:</span><br /><span>Salah satu poin penting adalah memastikan bahwa seluruh nama mahasiswa di kelas penyelenggara tercantum di susunan kepanitiaan.</span><br /><br /><span>Demikian.</span><br /><br /><span>Salam,</span></p>', 'ggggg.jpg', '2018-08-11 01:09:57', '2018-08-11 01:30:44'),
(27, 1, 'Pertemuan 3', 1, 1, '<p><span>Dear all,</span><br /><br /><span>Silahkan setiap ketua kelompok pelaksana yang sudah selesai menjadi penyelenggara acara Kapita Selekta mengumpulkan laporan pelaksanaan di sini, dengan detail yang dikumpulkan adalah:</span><br /><span>1. Laporan Kegiatan Kelompok Pelaksana</span><br /><span>2. CV Pembicara</span><br /><span>3. Media Promosi atau Publikasi Acara (sebelum acara berlangsung, baik berupa gambar poster atau video, dan media lainnya).</span><br /><span>4. Dokumentasi Video Acara</span><br /><span>5. Dokumentasi foto-foto</span><br /><span>6. Form Fact Sheet Final yang pernah di-emailkan ke Pak Fajar/Bu Gita Bagian Marketing PCR pagi sebelum acara dimulai.</span><br /><br /><span>Catatan:</span><br /><span>Salah satu poin penting adalah memastikan bahwa seluruh nama mahasiswa di kelas penyelenggara tercantum di susunan kepanitiaan.</span><br /><br /><span>Demikian.</span><br /><br /><span>Salam,</span></p>', 'coba.xlsx', '2018-08-11 01:28:14', '2018-08-11 01:28:14'),
(28, 3, 'Pertemuan 1', 2, 1, '<p><span>Dear all,</span><br /><br /><span>Silahkan setiap ketua kelompok pelaksana yang sudah selesai menjadi penyelenggara acara Kapita Selekta mengumpulkan laporan pelaksanaan di sini, dengan detail yang dikumpulkan adalah:</span><br /><span>1. Laporan Kegiatan Kelompok Pelaksana</span><br /><span>2. CV Pembicara</span><br /><span>3. Media Promosi atau Publikasi Acara (sebelum acara berlangsung, baik berupa gambar poster atau video, dan media lainnya).</span><br /><span>4. Dokumentasi Video Acara</span><br /><span>5. Dokumentasi foto-foto</span><br /><span>6. Form Fact Sheet Final yang pernah di-emailkan ke Pak Fajar/Bu Gita Bagian Marketing PCR pagi sebelum acara dimulai.</span><br /><br /><span>Catatan:</span><br /><span>Salah satu poin penting adalah memastikan bahwa seluruh nama mahasiswa di kelas penyelenggara tercantum di susunan kepanitiaan.</span><br /><br /><span>Demikian.</span><br /><br /><span>Salam,</span></p>', 'buat project baru.txt', '2018-08-11 01:33:21', '2018-08-11 01:33:21'),
(29, 3, 'Pertemuan 1', 2, 2, '<p><span>Dear all</span><br /><br /><span>Silahkan setiap ketua kelompok pelaksana yang sudah selesai menjadi penyelenggara acara Kapita Selekta mengumpulkan laporan pelaksanaan di sini, dengan detail yang dikumpulkan adalah:</span><br /><span>1. Laporan Kegiatan Kelompok Pelaksana</span><br /><span>2. CV Pembicara</span><br /><span>3. Media Promosi atau Publikasi Acara (sebelum acara berlangsung, baik berupa gambar poster atau video, dan media lainnya).</span><br /><span>4. Dokumentasi Video Acara</span><br /><span>5. Dokumentasi foto-foto</span><br /><span>6. Form Fact Sheet Final yang pernah di-emailkan ke Pak Fajar/Bu Gita Bagian Marketing PCR pagi sebelum acara dimulai.</span><br /><br /><span>Catatan:</span><br /><span>Salah satu poin penting adalah memastikan bahwa seluruh nama mahasiswa di kelas penyelenggara tercantum di susunan kepanitiaan.</span><br /><br /><span>Demikian.</span><br /><br /><span>Salam,</span></p>', 'Tugas2_Kapita_Aminda.docx', '2018-08-11 01:33:55', '2018-08-11 01:34:39');

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
(1, '4SIA', '2018-08-08 19:53:04', '2018-08-08 19:53:04'),
(2, '4SIB', '2018-08-08 19:53:10', '2018-08-08 19:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `username`, `nama`, `jenis_kelamin`, `prodi_id`, `kelas_id`, `password`, `file_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1457301093', 'Vania Azari', 'Perempuan', 1, 1, '1457301093', 'vania.JPG', 'MqQBj5wfWQou4ePqswnSi29gOQd3R2zEECJsssDpQzQ4cy1vMyeVpmCW9H6M', '2018-08-08 19:56:09', '2018-08-10 23:31:20'),
(4, '1457301005', 'Aminda Pramita Sani', 'Perempuan', 1, 1, '1457301005', '1.JPG', 'V37YYNO5xOWJuBemwW6ib8mexoAT84Vf8FpTivPl6e1uURmfnwoJGFam5Hbu', '2018-08-08 20:18:03', '2018-08-10 23:31:28'),
(5, '1457301020', 'Dea An Nisa', 'Perempuan', 1, 2, '1457301020', '2.JPG', 'UOf6qwfLVZjDCeOum6bUKZhhKvchIHD3BRNAwWcNt5v44HwLA9BbSZD3aaj9', '2018-08-08 20:18:27', '2018-08-10 23:31:36'),
(6, '1457301010', 'Ayu Anggraini', 'Perempuan', 1, 2, '1457301010', '3.JPG', 'Z5fhGtAm74H435sKn41sJ7J2QzZyx93P6Uw5WxmJrrAuhQxs9PxpkY1ypRDW', '2018-08-08 20:19:07', '2018-08-10 23:31:43');

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
(1, 'Kapita Selekta', '2018-08-08 19:53:24', '2018-08-10 23:18:56'),
(2, 'Kewirausahaan', '2018-08-08 19:53:32', '2018-08-08 19:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliahkelas`
--

CREATE TABLE `matakuliahkelas` (
  `id` int(11) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliahkelas`
--

INSERT INTO `matakuliahkelas` (`id`, `matakuliah_id`, `kelas_id`, `dosen_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2018-08-08 20:15:22', '2018-08-08 20:15:22'),
(2, 1, 2, 1, '2018-08-08 20:19:22', '2018-08-08 20:19:22'),
(4, 2, 1, 3, '2018-08-11 01:32:36', '2018-08-11 01:32:36'),
(5, 2, 2, 3, '2018-08-11 01:32:45', '2018-08-11 01:32:45');

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
  `dosen_id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `dosen_id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Reminder Tugas Kapita Selekta', '<p>Remider</p>\r\n<p>Pengumpulan tugas kapita selekta berupa softfile dan hardfilr sebelum jam 12 siang sudah diletakkan di meja saya</p>', '2018-08-08 20:26:59', '2018-08-08 20:26:59');

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
(1, 'Sistem Informasi', '2018-08-08 19:52:52', '2018-08-08 19:52:52'),
(2, 'Teknik Informatika', '2018-08-09 01:33:50', '2018-08-09 01:33:50'),
(3, 'Teknik Komputer', '2018-08-09 01:33:59', '2018-08-09 01:33:59'),
(4, 'Akuntansi', '2018-08-09 01:34:10', '2018-08-09 01:34:10'),
(5, 'Teknik Telekomunikasi', '2018-08-09 01:34:24', '2018-08-09 01:34:24'),
(6, 'Teknik Elektronika', '2018-08-09 01:34:35', '2018-08-09 01:34:35'),
(7, 'Teknik Elektronika Telekomunikasi', '2018-08-09 01:35:04', '2018-08-09 01:35:04'),
(8, 'Teknik Mesin', '2018-08-09 01:35:31', '2018-08-09 01:35:31'),
(9, 'Teknik Listrik', '2018-08-09 01:35:48', '2018-08-09 01:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `konten` text NOT NULL,
  `file_name` varchar(2000) DEFAULT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `matakuliah_id`, `dosen_id`, `kelas_id`, `konten`, `file_name`, `tanggal_masuk`, `tanggal_akhir`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 1 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'kuesioner ulang kembali.docx', '2018-08-09', '2018-08-10', '2018-08-09 07:57:10', '2018-08-09 00:57:10'),
(2, 1, 1, 2, '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 15 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'Cara Membuat Web Dinamis Sederhana.docx', '2018-08-09', '2018-08-10', '2018-08-08 20:25:34', '2018-08-08 20:25:34'),
(4, 1, 1, 1, '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 2 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'gambarr baru.jpg', '2018-08-10', '2018-08-11', '2018-08-09 07:58:30', '2018-08-09 00:58:30'),
(6, 1, 1, 1, '<p><span>Dear all</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 3 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'OUTPUT3.doc', '2018-08-11', '2018-08-12', '2018-08-11 08:48:30', '2018-08-11 01:48:30'),
(7, 1, 1, 2, '<p><span>Dear all,</span><br /><br /><span>Silahkan kumpulkan laporan mandiri softfile pertemuan 2 di sini. Laporan fisik dikumpulkan ke ketua kelas dan ketua kelas silahkan meletakkan di atas meja saya (di ruang perpustakaan) sebelum jam 12 siang.</span><br /><br /><span>Salam,</span></p>', 'Fixed-revised.docx', '2018-08-11', '2018-08-12', '2018-08-11 01:45:45', '2018-08-11 01:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `tugasmahasiswa`
--

CREATE TABLE `tugasmahasiswa` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `matakuliah_id` int(11) DEFAULT NULL,
  `file_name` varchar(2000) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugasmahasiswa`
--

INSERT INTO `tugasmahasiswa` (`id`, `mahasiswa_id`, `kelas_id`, `matakuliah_id`, `file_name`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'ayam kremes.txt', '2018-08-09', '2018-08-08 20:28:55', '2018-08-08 20:28:55'),
(2, 4, 1, 1, 'ERD.xlsx', '2018-08-09', '2018-08-08 20:31:04', '2018-08-08 20:31:04'),
(3, 6, 2, 1, 'HALAMAN PENGESAHAN II.docx', '2018-08-09', '2018-08-08 20:32:36', '2018-08-08 20:32:36'),
(4, 5, 2, 1, 'ADAM AIR.docx', '2018-08-09', '2018-08-08 20:33:18', '2018-08-08 20:33:18'),
(5, 1, 1, 2, 'ayam kremes.txt', '2018-08-09', '2018-08-08 20:37:13', '2018-08-08 20:37:13'),
(6, 1, 1, 1, 'buat project baru.txt', '2018-08-10', '2018-08-09 00:59:21', '2018-08-09 00:59:21'),
(7, 4, 1, 1, 'coba.xlsx', '2018-08-10', '2018-08-09 01:04:19', '2018-08-09 01:04:19'),
(8, 4, 1, 2, 'dc.txt', '2018-08-09', '2018-08-09 01:04:56', '2018-08-09 01:04:56'),
(9, 1, 1, 2, 'posterr.docx', '2018-08-10', '2018-08-09 01:15:57', '2018-08-09 01:15:57'),
(10, 1, 1, 1, 'Tugas2_Kapita_Vania.docx', '2018-08-11', '2018-08-11 01:47:00', '2018-08-11 01:47:00');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_idx` (`dosen_id`),
  ADD KEY `kelas_idx` (`kelas_id`),
  ADD KEY `matakuliah_idx` (`matakuliah_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi_id` (`prodi_id`),
  ADD KEY `kelas_ids` (`kelas_id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliahkelas`
--
ALTER TABLE `matakuliahkelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matakuliah_id` (`matakuliah_id`),
  ADD KEY `kelas_id` (`kelas_id`),
  ADD KEY `dosens_id` (`dosen_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_id` (`dosen_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matakuliah_ids` (`matakuliah_id`),
  ADD KEY `dosen_ids` (`dosen_id`),
  ADD KEY `kelas_idd` (`kelas_id`);

--
-- Indexes for table `tugasmahasiswa`
--
ALTER TABLE `tugasmahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_idd` (`mahasiswa_id`),
  ADD KEY `kelas_iddss` (`kelas_id`),
  ADD KEY `matakuliah_idd` (`matakuliah_id`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matakuliahkelas`
--
ALTER TABLE `matakuliahkelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tugasmahasiswa`
--
ALTER TABLE `tugasmahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `filetable`
--
ALTER TABLE `filetable`
  ADD CONSTRAINT `dosen_idx` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_idx` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matakuliah_idx` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `kelas_ids` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prodi_id` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matakuliahkelas`
--
ALTER TABLE `matakuliahkelas`
  ADD CONSTRAINT `dosens_id` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_id` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matakuliah_id` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `dosen_id` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `dosen_ids` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_idd` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matakuliah_ids` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tugasmahasiswa`
--
ALTER TABLE `tugasmahasiswa`
  ADD CONSTRAINT `kelas_iddss` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_idd` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matakuliah_idd` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
