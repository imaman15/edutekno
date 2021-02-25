-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2018 at 04:45 PM
-- Server version: 10.1.36-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ftiunsera_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `kd_kelas` varchar(10) NOT NULL,
  `kd_user` varchar(10) NOT NULL,
  `tgl_masuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`kd_kelas`, `kd_user`, `tgl_masuk`) VALUES
('cornWX', 'USR010', '2018-11-08 12:15:30'),
('mgOBdV', 'USR004', '2018-11-08 13:41:46'),
('NIMrNx', 'USR004', '2018-11-08 13:42:20'),
('YKNVuG', 'USR008', '2018-11-08 15:12:40'),
('qYZtJA', 'USR008', '2018-11-08 15:16:47'),
('QeGXKB', 'USR017', '2018-11-08 15:18:14'),
('qJanAl', 'USR003', '2018-11-08 16:42:46'),
('TfGkPL', 'USR019', '2018-11-08 17:30:00'),
('hzuUBn', 'USR009', '2018-11-08 19:15:10'),
('pqJCdy', 'USR010', '2018-11-08 19:51:44'),
('qSaMSA', 'USR024', '2018-11-08 20:10:54'),
('QeGXKB', 'USR031', '2018-11-08 21:06:33'),
('mgOBdV', 'USR036', '2018-11-08 21:07:33'),
('hzuUBn', 'USR029', '2018-11-08 21:12:45'),
('NIMrNx', 'USR044', '2018-11-08 21:13:53'),
('NIMrNx', 'USR045', '2018-11-08 21:14:31'),
('NIMrNx', 'USR048', '2018-11-08 21:24:13'),
('YGCVSN', 'USR180', '2018-11-09 11:51:33'),
('uqGESB', 'USR180', '2018-11-09 11:57:43'),
('elpcQv', 'USR183', '2018-11-09 13:00:51'),
('FkalMV', 'USR006', '2018-11-09 13:03:17'),
('mSSNBE', 'USR006', '2018-11-09 13:04:00'),
('qJanAl', 'USR151', '2018-11-09 13:15:55'),
('qJanAl', 'USR156', '2018-11-09 13:16:35'),
('qjanAl', 'USR127', '2018-11-09 13:16:39'),
('qjanAl', 'USR169', '2018-11-09 13:18:00'),
('qJanAl', 'USR047', '2018-11-09 13:18:46'),
('qJanAl', 'USR086', '2018-11-09 13:19:59'),
('qJanAl', 'USR084', '2018-11-09 13:20:34'),
('qJanAl', 'USR069', '2018-11-09 13:21:24'),
('qJanAl', 'USR068', '2018-11-09 13:23:05'),
('qJanAL', 'USR191', '2018-11-09 13:26:34'),
('qJanAl', 'USR090', '2018-11-09 13:28:09'),
('qcubUf', 'USR007', '2018-11-09 13:28:25'),
('qJanAl', 'USR190', '2018-11-09 13:29:13'),
('qJanAl', 'USR192', '2018-11-09 13:29:32'),
('MsidBq', 'USR007', '2018-11-09 13:31:00'),
('qJanAl', 'USR195', '2018-11-09 13:43:17'),
('qJanAl', 'USR042', '2018-11-09 13:48:15'),
('qJanaL', 'USR193', '2018-11-09 13:48:15'),
('qJanaL', 'USR196', '2018-11-09 13:48:52'),
('qJanAl', 'USR197', '2018-11-09 13:52:08'),
('MWUucg', 'USR003', '2018-11-09 13:56:36'),
('qJanAl', 'USR159', '2018-11-09 13:57:19'),
('MWUucg', 'USR140', '2018-11-09 14:03:33'),
('QJanAl', 'USR199', '2018-11-09 14:04:10'),
('MWUucg', 'USR163', '2018-11-09 14:05:37'),
('MWUucg', 'USR123', '2018-11-09 14:07:21'),
('MWUucg', 'USR028', '2018-11-09 14:07:42'),
('MWUucg', 'USR055', '2018-11-09 14:09:06'),
('MWUucg', 'USR088', '2018-11-09 14:09:13'),
('MWUucg', 'USR201', '2018-11-09 14:09:28'),
('MWUucg', 'USR128', '2018-11-09 14:10:09'),
('MWUucg', 'USR203', '2018-11-09 14:10:53'),
('MWUucg', 'USR204', '2018-11-09 14:14:01'),
('MWUucg', 'USR206', '2018-11-09 14:16:25'),
('RXnHRx', 'USR003', '2018-11-09 14:17:10'),
('qJanAl', 'USR200', '2018-11-09 14:19:45'),
('MWUucg', 'USR153', '2018-11-09 14:21:04'),
('MWUucg', 'USR208', '2018-11-09 14:22:10'),
('MWUucg', 'USR125', '2018-11-09 14:23:20'),
('qJanAl', 'USR104', '2018-11-09 14:25:16'),
('MWUucg', 'USR209', '2018-11-09 14:26:04'),
('RXnHRx', 'USR125', '2018-11-09 14:26:31'),
('MWUucg', 'USR080', '2018-11-09 14:26:51'),
('RXnHRx', 'USR206', '2018-11-09 14:28:37'),
('MWUucg', 'USR032', '2018-11-09 14:29:16'),
('qJanAl', 'USR210', '2018-11-09 14:30:09'),
('MWUucg', 'USR112', '2018-11-09 14:30:30'),
('MWUucg', 'USR033', '2018-11-09 14:31:07'),
('RXnHRx', 'USR123', '2018-11-09 14:33:16'),
('RXnHRx', 'USR128', '2018-11-09 14:35:42'),
('MWUucg', 'USR211', '2018-11-09 14:37:09'),
('MWUucg', 'USR138', '2018-11-09 14:37:19'),
('RXnHRx', 'USR138', '2018-11-09 14:37:48'),
('RXnHRx', 'USR211', '2018-11-09 14:37:57'),
('RXnHRx', 'USR203', '2018-11-09 14:38:29'),
('MWUucg', 'USR161', '2018-11-09 14:41:40'),
('sEfnlx', 'USR014', '2018-11-09 14:41:59'),
('MWUucg', 'USR102', '2018-11-09 14:42:00'),
('MWUucg', 'USR066', '2018-11-09 14:42:30'),
('RXnHRx', 'USR161', '2018-11-09 14:42:55'),
('RXnHRx', 'USR066', '2018-11-09 14:45:00'),
('MWUucg', 'USR212', '2018-11-09 14:46:12'),
('sIxEuz', 'USR014', '2018-11-09 14:46:15'),
('RXnHRx', 'USR212', '2018-11-09 14:47:21'),
('xpGkjg', 'USR014', '2018-11-09 14:48:51'),
('DvTEob', 'USR020', '2018-11-09 14:53:26'),
('qcubUf', 'USR055', '2018-11-09 14:53:54'),
('qcubUf', 'USR080', '2018-11-09 14:54:00'),
('HSItxZ', 'USR020', '2018-11-09 14:54:49'),
('nbMOra', 'USR021', '2018-11-09 14:56:42'),
('iEfRgH', 'USR021', '2018-11-09 14:57:45'),
('qcubUf', 'USR198', '2018-11-09 14:58:10'),
('qcubUf', 'USR213', '2018-11-09 14:58:55'),
('OmZCtB', 'USR022', '2018-11-09 14:59:17'),
('qcubUf', 'USR214', '2018-11-09 14:59:40'),
('HELryn', 'USR022', '2018-11-09 14:59:56'),
('YKNVuG', 'USR213', '2018-11-09 15:00:37'),
('YKNVug', 'USR055', '2018-11-09 15:00:47'),
('qcubUf', 'USR215', '2018-11-09 15:01:47'),
('NwgYVF', 'USR023', '2018-11-09 15:02:09'),
('MWUucg', 'USR121', '2018-11-09 15:02:21'),
('MWUucg', 'USR216', '2018-11-09 15:02:47'),
('zpSmga', 'USR023', '2018-11-09 15:02:57'),
('qcubUf', 'USR217', '2018-11-09 15:03:48'),
('RXnHRx', 'USR216', '2018-11-09 15:04:30'),
('qcubUf', 'USR218', '2018-11-09 15:05:56'),
('qcubUf', 'USR219', '2018-11-09 15:06:30'),
('tNoAjx', 'USR023', '2018-11-09 15:06:31'),
('RXnHRx', 'USR121', '2018-11-09 15:06:52'),
('qcubUf', 'USR220', '2018-11-09 15:08:21'),
('qcubUf', 'USR039', '2018-11-09 15:08:51'),
('CNnIHh', 'USR023', '2018-11-09 15:09:15'),
('qcubUf', 'USR221', '2018-11-09 15:10:57'),
('wVDXAq', 'USR023', '2018-11-09 15:11:27'),
('qcubUf', 'USR222', '2018-11-09 15:13:55'),
('qcubUf', 'USR223', '2018-11-09 15:13:56'),
('qcubuf', 'USR224', '2018-11-09 15:14:20'),
('HgbjoL', 'USR183', '2018-11-09 15:16:29'),
('qcubUf', 'USR225', '2018-11-09 15:17:17'),
('MWUucg', 'USR226', '2018-11-09 15:17:22'),
('ESOiHj', 'USR164', '2018-11-09 15:18:44'),
('MWUucg', 'USR143', '2018-11-09 15:20:50'),
('MWUucg', 'USR133', '2018-11-09 15:20:52'),
('qcubuf', 'USR228', '2018-11-09 15:21:32'),
('MWUucg', 'USR227', '2018-11-09 15:21:37'),
('yRBGsv', 'USR164', '2018-11-09 15:22:23'),
('qjanAl', 'USR122', '2018-11-09 15:38:04'),
('AhPwcM', 'USR230', '2018-11-09 15:40:46'),
('AhPwcM', 'USR187', '2018-11-09 15:42:30'),
('RZFxuv', 'USR164', '2018-11-09 15:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `kd_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `nama_kelas`, `jurusan`, `warna`, `kd_user`) VALUES
('AhPwcM', 'Pemrograman WEB', '', '', 'USR230'),
('CNnIHh', 'Manajemen Proyek Software', 'Teknik Informatika', '', 'USR023'),
('cornWX', 'Kecerdasan Buatan', 'Teknik Informatika', 'rgba(34,57,230,0.76)', 'USR010'),
('DvTEob', 'Peng. Program Komputer', 'Teknik Informatika', 'rgba(252,15,15,0.89)', 'USR020'),
('elpcQv', 'TI/VI/A1', 'Pemrograman', '', 'USR183'),
('ESOiHj', 'Arsitektur Dan Organisasi', 'Teknik Informatika', '#db3131', 'USR164'),
('FkalMV', 'Pemrograman Web II', 'Teknik Informatika', '#cf1111', 'USR006'),
('HELryn', 'Struktur Data', 'Teknik Informatika', '#f0efef', 'USR022'),
('HgbjoL', 'TI/VII/A1', 'Pemrograman', '', 'USR183'),
('HSItxZ', 'IMK', 'Teknik Informatika', '#940707', 'USR020'),
('hzuUBn', 'Jaringan Komputer', '', '', 'USR009'),
('iEfRgH', 'Pengenalan PBO', 'Teknik Informatika', '#b1de65', 'USR021'),
('mgOBdV', 'Data Mining', 'TI-A1', '', 'USR004'),
('MsidBq', 'Peng Hardware Informatika', 'Teknik Informatika', '#f2c5c5', 'USR007'),
('mSSNBE', 'Pemrograman Web III', 'Teknik Informatika', '#946b6b', 'USR006'),
('MWUucg', 'Algoritma A2 2017/2018', 'Informatika', '', 'USR003'),
('nbMOra', 'PBO lanjut', 'Teknik Informatika', '#1d0dd6', 'USR021'),
('NIMrNx', 'Data Mining', 'TI-A2', '', 'USR004'),
('NwgYVF', 'Aljabar Linear & Matriks', 'Teknik Informatika', 'rgba(0,0,0,0.5)', 'USR023'),
('OmZCtB', 'Algoritma', 'Teknik Informatika', '#c23636', 'USR022'),
('pqJCdy', 'Data Mining', 'Teknik Informatika', '', 'USR010'),
('qcubUf', 'Pengantar Pemrograman Web', 'Teknik Informatika', '#c24444', 'USR007'),
('QeGXKB', 'AAAA', 'AAAA', '', 'USR017'),
('qJanAl', 'algoritma', 'teknik Informatika', '', 'USR003'),
('qSaMSA', 'A3', 'Teknik informatik', '#22359c', 'USR024'),
('qYZtJA', 'Manaj. Basis Data + SQL', 'Teknik Informatika', '', 'USR008'),
('RXnHRx', 'ManPro Sis Informasi', 'Informatika', '', 'USR003'),
('RZFxuv', 'Data Mining', 'Teknik Informatika', '#4d0f0f', 'USR164'),
('sEfnlx', 'IMK', 'Informatika', '', 'USR014'),
('sIxEuz', 'Komputer dan Masyarakat', 'Informatika', '', 'USR014'),
('TfGkPL', 'mata Kuliah IMK', '', '', 'USR019'),
('tNoAjx', 'Manajemen Proyek Software', 'Teknik Informatika', '#4542d1', 'USR023'),
('uqGESB', 'A1 English 5', 'TI Pemrograman', '', 'USR180'),
('wVDXAq', 'Sistem Operasi', 'Teknik Informatika', '#ab2020', 'USR023'),
('xpGkjg', 'Manajemen Basis Data SQL', 'Informatika', '', 'USR014'),
('YGCVSN', 'A2 English 1', 'SI', 'rgba(209,33,86,0.72)', 'USR180'),
('YKNVuG', 'Pemrograman Client Server', 'Teknik Informatika', '', 'USR008'),
('yRBGsv', 'Arsitektur Dan Organisasi', 'Teknik Informatika', '', 'USR164'),
('zpSmga', 'ARSKOM', 'Teknik Informatika', '#d15757', 'USR023');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `kd_komen` varchar(10) NOT NULL,
  `isi_komen` text NOT NULL,
  `tgl_komen` datetime NOT NULL,
  `kd_user` varchar(10) NOT NULL,
  `kd_upload` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`kd_komen`, `isi_komen`, `tgl_komen`, `kd_user`, `kd_upload`) VALUES
('KOM001', 'test', '2018-11-08 21:15:20', 'USR045', 'FUP005'),
('KOM002', 'uit', '2018-11-08 21:16:28', 'USR044', 'FUP005'),
('KOM003', 'uihh kapan tuh?', '2018-11-08 21:16:44', 'USR045', 'FUP038'),
('KOM004', 'nanti desember berangkat', '2018-11-08 21:17:09', 'USR044', 'FUP038'),
('KOM005', 'Silakan di pelajari kemudian buat rangkuman sebagai bahan persiapan  Quis', '2018-11-09 11:29:41', 'USR003', 'FUP018'),
('KOM006', 'terimakasih pak namun untuk materi yang percabangan mohon bisa diulang kembali', '2018-11-09 13:20:50', 'USR127', 'FUP018'),
('KOM007', 'Pa tugas yang kemarin sudah di email..', '2018-11-09 13:25:14', 'USR169', 'FUP018'),
('KOM008', 'Pak, untuk materi perulangan, apa bisa di pakai untuk masalah peminjaman buku di perpustakaan? Sebelumnya terima kasih', '2018-11-09 13:26:28', 'USR084', 'FUP018'),
('KOM009', 'Pa tugas yang kemarin sudah di email.', '2018-11-09 13:28:38', 'USR069', 'FUP018'),
('KOM010', 'Terima kasih pa, namun untuk materi yang percabangan  mohon di ulang kembali. ', '2018-11-09 13:29:45', 'USR047', 'FUP019'),
('KOM011', 'Pa tugas yang kemarin sudah di email.', '2018-11-09 13:32:13', 'USR191', 'FUP018'),
('KOM012', 'Pak, tugas kemarin sudah di email terimakasih...', '2018-11-09 13:32:48', 'USR190', 'FUP019'),
('KOM013', 'pak terimakasih tugas kemarin sudah masuk email', '2018-11-09 13:33:55', 'USR192', 'FUP019'),
('KOM014', 'terimakasih pak tugas kemarin sudah ada di email', '2018-11-09 13:43:17', 'USR195', 'FUP019'),
('KOM015', 'Terima kasih pa, namun untuk materi yang percabangan mohon bisa di ulang kembali.', '2018-11-09 13:46:39', 'USR086', 'FUP019'),
('KOM016', 'Terima kasih pa, namun untuk materi yang percabangan mohon di ulang kembali.', '2018-11-09 13:48:53', 'USR196', 'FUP019'),
('KOM017', 'Mohon maaf pa kemarin saya tidak bisa masuk kuliah, karena sedang ada tugas untuk perlombaan di jakarta..', '2018-11-09 13:52:09', 'USR197', 'FUP019'),
('KOM018', '2. Untuk studi kasus perulangan apakah bisa digunakan untuk aplikasi penjualan?', '2018-11-09 13:55:51', 'USR193', 'FUP019'),
('KOM019', '2. Untuk studi kasus perulangan apakah bisa digunakan untuk aplikasi penjualan?', '2018-11-09 13:56:18', 'USR193', 'FUP017'),
('KOM020', 'Terima kasih pa, namun untuk materi yang percabangan mohon bisa di ulang kembali.', '2018-11-09 13:57:51', 'USR042', 'FUP019'),
('KOM021', 'Terima kasih pa, namun untuk materi yang percabangan mohon di ulang kembali.', '2018-11-09 14:01:35', 'USR159', 'FUP019'),
('KOM022', 'Terima kasih pak, namun untuk materi percabangan mohon di jelaskan kembali pak. ', '2018-11-09 14:04:23', 'USR151', 'FUP019'),
('KOM023', 'Terima kasih pa, namun untuk materi yang percabangan mohon bisa di ulang kembali.', '2018-11-09 14:25:16', 'USR104', 'FUP019'),
('KOM024', 'Tugas terakhir sudah saya email pak, terima kasih', '2018-11-09 14:30:30', 'USR156', 'FUP018'),
('KOM025', 'Tugas yang kemaren sudah saya email pak, terima kasih', '2018-11-09 14:35:00', 'USR210', 'FUP018'),
('KOM026', 'Terimakasih pak untuk materinya, berguna untuk kuis minggu depan', '2018-11-09 14:57:31', 'USR163', 'FUP061'),
('KOM027', 'Terima kasih Pak Akip untuk materinya, sangat bermanfaat untuk kami', '2018-11-09 15:00:12', 'USR206', 'FUP060'),
('KOM028', 'Terimakasih pak untuk materinya..', '2018-11-09 15:05:31', 'USR128', 'FUP059'),
('KOM029', 'Terimakasih pak untuk materinya ', '2018-11-09 15:09:30', 'USR125', 'FUP061'),
('KOM030', 'Terimakasih pak untuk materinya ', '2018-11-09 15:09:51', 'USR125', 'FUP060'),
('KOM031', 'Terimakasih pak untuk materinya ', '2018-11-09 15:10:10', 'USR125', 'FUP058'),
('KOM032', 'Hallo', '2018-11-09 15:10:40', 'USR220', 'FUP052'),
('KOM033', 'heyy tayo', '2018-11-09 15:10:57', 'USR221', 'FUP051'),
('KOM034', 'UNCH', '2018-11-09 15:11:19', 'USR219', 'FUP052'),
('KOM035', 'silahkan buat tugas dengan menggunakan if masing - masing berbeda, dikumpulkan dengan mengirim email mysellyn@gmail.com', '2018-11-09 15:11:38', 'USR007', 'FUP052'),
('KOM036', 'siappp :)', '2018-11-09 15:11:59', 'USR198', 'FUP052'),
('KOM037', 'Uy', '2018-11-09 15:13:55', 'USR222', 'FUP052'),
('KOM038', 'assalamualaikum', '2018-11-09 15:19:11', 'USR039', 'FUP052'),
('KOM039', 'Terimakasih pak untuk materinya', '2018-11-09 15:28:23', 'USR121', 'FUP057'),
('KOM040', 'Makasih pak untuk materinya', '2018-11-09 15:31:01', 'USR133', 'FUP061'),
('KOM041', 'sudah saya kirim ya bu tugasnya di email ibu.', '2018-11-09 15:37:05', 'USR055', 'FUP052'),
('KOM042', 'Tes', '2018-11-09 15:38:42', 'USR213', 'FUP052'),
('KOM043', 'Tugas sudah saya kirim melalui email, terima kasih', '2018-11-09 15:38:53', 'USR213', 'FUP052'),
('KOM044', 'Terima kasih pak untuk materi nya', '2018-11-09 15:40:12', 'USR212', 'FUP057'),
('KOM045', 'Terimakasih pak untuk materinya', '2018-11-09 15:41:49', 'USR121', 'FUP058'),
('KOM046', 'Tugas yang kemaren sudah saya email pak,  terima kasih', '2018-11-09 15:43:35', 'USR122', 'FUP018'),
('KOM047', 'Terima kasih pak untuk materinya', '2018-11-09 15:53:47', 'USR143', 'FUP058');

-- --------------------------------------------------------

--
-- Table structure for table `masukan`
--

CREATE TABLE `masukan` (
  `id_masukan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masukan`
--

INSERT INTO `masukan` (`id_masukan`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'Sahrun alan', 'sahrunalan@gmail.com', 'Progrees belajar', 'Saya ingin belajar pemogramaan');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `kd_upload` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `namafile` varchar(50) NOT NULL,
  `tgl_post` datetime NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `kd_user` varchar(10) NOT NULL,
  `keterangan` enum('Catatan','Tugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`kd_upload`, `judul`, `deskripsi`, `namafile`, `tgl_post`, `kd_kelas`, `kd_user`, `keterangan`) VALUES
('FUP001', '', 'Selamat datang Riyan Naufal Hay\'s di kelas Kecerdasan Buatan. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2016-11-08 12:15:30', 'cornWX', 'USR001', 'Catatan'),
('FUP002', '', 'Assalamualaikum Wr Wb\r\nDiberitahukan bagi mahasiswa yang mengambil matakuliah Kecerdasan Buatan Dosen Riyan Naufal Hay\'s, M.Kom.\r\nModul dapat kalian unduh disini.', 'FUP002.ppt', '2016-11-08 12:15:31', 'cornWX', 'USR010', 'Catatan'),
('FUP003', '', 'Assalamualaikum Wr Wb..\r\nModul ke-2 Matakuliah Kecerdasan Buatan.\r\nTerima Kasih', 'FUP003.ppt', '2016-11-08 13:32:40', 'cornWX', 'USR010', 'Catatan'),
('FUP004', '', 'Selamat datang tb.ai Munandar di kelas Data Mining. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2016-11-08 13:41:46', 'mgOBdV', 'USR001', 'Catatan'),
('FUP005', '', 'Selamat datang tb.ai Munandar di kelas Data Mining. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2016-11-08 13:42:20', 'NIMrNx', 'USR001', 'Catatan'),
('FUP006', '', 'Kami informasikan modul kecerdasan buatan', 'FUP006.ppt', '2016-11-08 14:02:42', 'cornWX', 'USR010', 'Catatan'),
('FUP007', '', 'Saya himbau dapat berdiskusi pada forum di bawah ini', 'FUP007.pptx', '2016-11-08 14:05:48', 'cornWX', 'USR010', 'Catatan'),
('FUP009', '', 'Selamat datang Muhamad Ibrohim di kelas Pemrograman Client Server. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2016-11-08 15:12:40', 'YKNVuG', 'USR001', 'Catatan'),
('FUP010', '', 'Selamat datang Muhamad Ibrohim di kelas Manaj. Basis Data + SQL. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2016-11-08 15:16:47', 'qYZtJA', 'USR001', 'Catatan'),
('FUP011', '', 'Selamat datang aaa di kelas AAAA. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2016-11-08 15:18:14', 'QeGXKB', 'USR001', 'Catatan'),
('FUP012', '', 'AAA', 'FUP012.pdf', '2016-11-08 15:21:45', 'QeGXKB', 'USR017', 'Catatan'),
('FUP013', '', 'AAA', 'FUP013.txt', '2016-11-08 15:21:56', 'QeGXKB', 'USR017', 'Catatan'),
('FUP014', '', 'Modul ini mengulas pengembangan aplikasi client server dengan bahasa pemrograman berorientasi object (power builder) mulai dari topik-topik dasar hingga pembahasan tingkat lanjut yang perlu dipelajari untuk membuat aplikasi yang lengkap, diuraikan secara deskriptif dan dibantu dengan gambar-gambar ilustrasi sehingga memudahkan pembaca untuk mengikutinya. Sementara itu, pembaca juga dipandu untuk mengerjakan latihan-latihan dalam setiap pembahasan.', 'FUP014.pdf', '2016-11-08 15:29:21', 'YKNVuG', 'USR008', 'Catatan'),
('FUP015', '', 'Database merupakan struktur dasar dalam pengembangan aplikasi. Dalam hal ini, penguasaan analisis dan perancangan yang  dituangkan dalam sebuah database menentukan kualitas sebuah sistem informasi yang terintegrasi.', 'FUP015.pdf', '2016-11-08 15:30:38', 'qYZtJA', 'USR008', 'Catatan'),
('FUP016', '', 'Basis data atau disebut juga dengan Database dibentuk dari kata Data dan Base (Basis). Data  adalah kejadian nyata yang mengandung arti bisa berupa kata, gambar, atau simbol. Didalam basis data, data bisa disimpan, diolah dan diorganisasi sehingga menghasilkan informasi yang berkualitas dan efisien', 'FUP016.pptx', '2016-11-08 15:37:21', 'qYZtJA', 'USR008', 'Catatan'),
('FUP017', '', 'Selamat datang Akip Suhendar di kelas algoritma. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2016-11-08 16:42:46', 'qJanAl', 'USR001', 'Catatan'),
('FUP018', '', 'materi 1 Algoritma', 'FUP018.ppt', '2016-11-08 16:42:46', 'qJanAl', 'USR003', 'Catatan'),
('FUP019', '', 'materi manajemen project', 'FUP019.ppt', '2016-11-08 16:51:45', 'qJanAl', 'USR003', 'Catatan'),
('FUP020', '', 'Selamat datang Wahyuddin di kelas mata Kuliah IMK. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-03-08 17:30:00', 'TfGkPL', 'USR001', 'Catatan'),
('FUP021', '', 'selamat dastang di beranda wahyudin berikut materi mata kuliah IMK', 'FUP021.ppt', '2018-03-08 17:30:00', 'TfGkPL', 'USR019', 'Catatan'),
('FUP022', '', 'Selamat datang M. Thoha Nurhadiyan di kelas Jaringan Komputer. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-03-08 00:00:00', 'hzuUBn', 'USR001', 'Catatan'),
('FUP023', '', 'pertemuan ke 1', 'FUP023.ppt', '2018-03-10 19:15:11', 'hzuUBn', 'USR009', 'Catatan'),
('FUP024', '', 'pertemuan ke dua', 'FUP024.ppt', '2018-04-11 00:00:00', 'hzuUBn', 'USR009', 'Catatan'),
('FUP025', '', 'pertemuan ke tiga', 'FUP025.ppt', '2018-04-20 19:19:15', 'hzuUBn', 'USR009', 'Catatan'),
('FUP026', '', 'pertemuan ke empat', 'FUP026.ppt', '2018-04-21 19:19:39', 'hzuUBn', 'USR009', 'Catatan'),
('FUP027', '', 'pertemuan ke lima', 'FUP027.ppt', '2018-04-14 19:20:12', 'hzuUBn', 'USR009', 'Catatan'),
('FUP028', '', 'pertemuan ke enam', 'FUP028.ppt', '2018-04-15 19:21:05', 'hzuUBn', 'USR009', 'Catatan'),
('FUP029', '', 'pertemuan ke tujuh', 'FUP029.ppt', '2018-05-08 19:21:29', 'hzuUBn', 'USR009', 'Catatan'),
('FUP030', '', 'pertemuan ke delapan', 'FUP030.ppt', '2018-05-08 19:22:39', 'hzuUBn', 'USR009', 'Catatan'),
('FUP031', '', 'pertemuan ke sembilan', 'FUP031.ppt', '2018-11-08 19:23:13', 'hzuUBn', 'USR009', 'Catatan'),
('FUP032', '', 'pertemuan ke sepuluh', 'FUP032.ppt', '2018-11-08 19:24:34', 'hzuUBn', 'USR009', 'Catatan'),
('FUP033', '', 'pertemuan ke sebelas', 'FUP033.ppt', '2018-11-08 19:25:07', 'hzuUBn', 'USR009', 'Catatan'),
('FUP034', '', 'pertemuan ke duabelas', 'FUP034.ppt', '2018-11-08 19:26:44', 'hzuUBn', 'USR009', 'Catatan'),
('FUP035', '', 'Selamat datang Riyan Naufal Hay\'s di kelas Data Mining. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-08 19:51:44', 'pqJCdy', 'USR001', 'Catatan'),
('FUP036', '', 'Assalamualaikum..\r\nBersama ini saya lampirkan bahan modul pembelajaran Data Mining..\r\nTerima Kasih.', 'FUP036.ppt', '2018-11-08 19:51:44', 'pqJCdy', 'USR010', 'Catatan'),
('FUP037', '', 'Selamat datang Muhamad zidan  di kelas A3. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-08 20:10:54', 'qSaMSA', 'USR001', 'Catatan'),
('FUP038', '', 'bayu alamsyah  goes to indian, for big data contest 2019', 'FUP038.jpg', '2018-11-08 21:14:53', 'NIMrNx', 'USR044', 'Catatan'),
('FUP039', '', 'Selamat datang Erma Perwitasari di kelas A2 English 1. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 11:51:33', 'YGCVSN', 'USR001', 'Catatan'),
('FUP040', '', 'Selamat datang Erma Perwitasari di kelas A1 English 5. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 11:57:43', 'uqGESB', 'USR001', 'Catatan'),
('FUP041', '', 'Hello, everyone :)\r\nWe\'ve been already come to half of this semester and....it\'s time for reviewing our whole discussions.\r\nHope you \'ll be ready for your mid test...hmmmm.\r\n\r\nA. PREDICATE \r\nIndicate whether a sentence has its predicate/predicates. The predicate/s may be in Active or Passive Voice. It have to be in agreement with the Subject and the tenses as well. Therefore, It is very important for you to remember Predicate Forms and Tenses, Auxiliary Forms, Adverb as modifier of verbs.\r\nWhen you find out Connector/s in a sentence, it means that there\'s Sub-Clause/s in it so more predicates will be found.\r\nCAUTIONS!! \r\ndifferentiate  Predicate construction from Participle (V-ing/V3) and Gerund (V-ing).\r\nExample.\r\nFaculty of Information Technology  owning Unsera Command and Innovation Center will be assessed this week.\r\n>> \"owning\" <<< is not Predicate. It \'s  a Participle ( = yang memiliki) as modifier of Faculty of Information Technology.\r\n>\"will be assessed\"<< is Predicate in Future Tense construction.\r\n', 'FUP041.docx', '2018-11-09 11:57:44', 'uqGESB', 'USR180', 'Catatan'),
('FUP042', '', 'Mari Kita Diskusikan materi di bawah ini', 'FUP042.ppt', '2018-11-09 12:52:35', 'pqJCdy', 'USR010', 'Catatan'),
('FUP043', '', 'Bismilah, Forum kita buka kembali', 'FUP043.ppt', '2018-11-09 13:00:05', 'pqJCdy', 'USR010', 'Catatan'),
('FUP044', '', 'Bismillah', 'FUP044.ppt', '2018-11-09 13:00:32', 'pqJCdy', 'USR010', 'Catatan'),
('FUP045', '', 'Selamat datang Agus Irawan di kelas Pemrograman Web II. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 13:03:17', 'FkalMV', 'USR001', 'Catatan'),
('FUP046', '', 'Selamat datang Agus Irawan di kelas Pemrograman Web III. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 13:04:00', 'mSSNBE', 'USR001', 'Catatan'),
('FUP047', '', 'Saya lampirkan modul pembelajaran web II', 'FUP047.doc', '2018-11-09 13:09:38', 'FkalMV', 'USR006', 'Catatan'),
('FUP048', '', 'Materi Pembelajaran', 'FUP048.ppt', '2018-11-09 13:10:01', 'FkalMV', 'USR006', 'Catatan'),
('FUP049', '', 'CATATAN PEMROGRAMAN WEB 3\r\n', 'FUP049.ppt', '2018-11-09 13:13:25', 'mSSNBE', 'USR006', 'Catatan'),
('FUP050', '', 'Catatan Pem. Web III Frame work CI', 'FUP050.ppt', '2018-11-09 13:18:18', 'mSSNBE', 'USR006', 'Catatan'),
('FUP051', '', 'Selamat datang Maya Selvia Lauryn di kelas Pengantar Pemrograman Web. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 13:28:25', 'qcubUf', 'USR001', 'Catatan'),
('FUP052', '', 'Mari kita diskusikan modul di bawah ini', 'FUP052.pdf', '2018-11-09 13:28:26', 'qcubUf', 'USR007', 'Catatan'),
('FUP053', '', 'Selamat datang Maya Selvia Lauryn di kelas Peng Hardware Informatika. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 13:31:00', 'MsidBq', 'USR001', 'Catatan'),
('FUP054', '', 'Perhatikan Modul Pembelajaran di bawah ini', 'FUP054.ppt', '2018-11-09 13:31:05', 'MsidBq', 'USR007', 'Catatan'),
('FUP055', '', 'Modul Pengenalan Hardware', 'FUP055.ppt', '2018-11-09 13:36:43', 'MsidBq', 'USR007', 'Catatan'),
('FUP056', '', 'Selamat datang Akip Suhendar di kelas Algoritma A2 2017/2018. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 13:56:36', 'MWUucg', 'USR001', 'Catatan'),
('FUP057', '', 'Selamat datang Akip Suhendar di kelas ManPro Sis Informasi. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 14:17:10', 'RXnHRx', 'USR001', 'Catatan'),
('FUP058', '', 'Materi Perkuliahan Algoritma', 'FUP058.pptx', '2018-11-09 14:40:24', 'MWUucg', 'USR003', 'Catatan'),
('FUP059', '', 'Materi Algoritma Variabel dan Type Data', 'FUP059.pptx', '2018-11-09 14:41:15', 'MWUucg', 'USR003', 'Catatan'),
('FUP060', '', 'Materi Algoritma Percabangan IF dan Case', 'FUP060.ppt', '2018-11-09 14:42:01', 'MWUucg', 'USR003', 'Catatan'),
('FUP061', '', 'Materi Algoritma Sequence Perulangan', 'FUP061.pptx', '2018-11-09 14:42:37', 'MWUucg', 'USR003', 'Catatan'),
('FUP062', '', 'Selamat datang Haris Triono Sigit  di kelas Manajemen Basis Data SQL. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 14:48:51', 'xpGkjg', 'USR001', 'Catatan'),
('FUP063', '', 'Selamat datang Diki Susandi di kelas Peng. Program Komputer. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 14:53:26', 'DvTEob', 'USR001', 'Catatan'),
('FUP064', '', 'Selamat datang Diki Susandi di kelas IMK. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 14:54:49', 'HSItxZ', 'USR001', 'Catatan'),
('FUP065', '', 'Selamat datang Agung Triayudi di kelas PBO lanjut. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 14:56:42', 'nbMOra', 'USR001', 'Catatan'),
('FUP066', '', 'Selamat datang Agung Triayudi di kelas Pengenalan PBO. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 14:57:45', 'iEfRgH', 'USR001', 'Catatan'),
('FUP067', '', 'Selamat datang Sulistiyono di kelas Algoritma. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 14:59:17', 'OmZCtB', 'USR001', 'Catatan'),
('FUP068', '', 'Selamat datang Sulistiyono di kelas Struktur Data. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 14:59:56', 'HELryn', 'USR001', 'Catatan'),
('FUP069', '', 'Materi 4', 'FUP069.pptx', '2018-11-09 14:59:57', 'elpcQv', 'USR183', 'Catatan'),
('FUP070', '', 'Materi 5', 'FUP070.pptx', '2018-11-09 15:00:31', 'elpcQv', 'USR183', 'Catatan'),
('FUP071', '', 'Selamat datang Agus Setyawan di kelas Aljabar Linear & Matriks. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 15:02:09', 'NwgYVF', 'USR001', 'Catatan'),
('FUP072', '', 'Selamat datang Agus Setyawan di kelas ARSKOM. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 15:02:57', 'zpSmga', 'USR001', 'Catatan'),
('FUP073', '', 'Materi 1', 'FUP073.pptx', '2018-11-09 15:04:26', 'elpcQv', 'USR183', 'Catatan'),
('FUP074', '', 'Materi 2', 'FUP074.pptx', '2018-11-09 15:04:53', 'elpcQv', 'USR183', 'Catatan'),
('FUP075', '', 'Materi 3', 'FUP075.pptx', '2018-11-09 15:05:34', 'elpcQv', 'USR183', 'Catatan'),
('FUP076', '', 'Materi 6', 'FUP076.pptx', '2018-11-09 15:06:12', 'elpcQv', 'USR183', 'Catatan'),
('FUP077', '', 'Materi 7', 'FUP077.pptx', '2018-11-09 15:06:54', 'elpcQv', 'USR183', 'Catatan'),
('FUP078', '', 'Materi 8', 'FUP078.pptx', '2018-11-09 15:07:47', 'elpcQv', 'USR183', 'Catatan'),
('FUP079', '', 'Selamat datang Agus Setyawan di kelas Manajemen Proyek Software. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 15:09:15', 'CNnIHh', 'USR001', 'Catatan'),
('FUP080', '', 'Assalamualkum Wr Wb\r\nMari kita diskusikan bahan ajar di bawah ini.', 'FUP080.ppt', '2018-11-09 15:09:24', 'CNnIHh', 'USR023', 'Catatan'),
('FUP081', '', 'Selamat datang Agus Setyawan di kelas Sistem Operasi. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 15:11:27', 'wVDXAq', 'USR001', 'Catatan'),
('FUP082', '', 'Materi 11', 'FUP082.pptx', '2018-11-09 15:12:46', 'elpcQv', 'USR183', 'Catatan'),
('FUP083', '', 'Materi 12', 'FUP083.docx', '2018-11-09 15:13:19', 'elpcQv', 'USR183', 'Catatan'),
('FUP084', '', 'Materi 9', 'FUP084.pptx', '2018-11-09 15:14:31', 'elpcQv', 'USR183', 'Catatan'),
('FUP085', '', 'Materi 10', 'FUP085.xlsx', '2018-11-09 15:14:57', 'elpcQv', 'USR183', 'Catatan'),
('FUP086', '', 'Yuk Gabung sini', 'FUP086.ppt', '2018-11-09 15:15:32', 'wVDXAq', 'USR023', 'Catatan'),
('FUP087', '', 'Materi 1', 'FUP087.ppt', '2018-11-09 15:16:46', 'HgbjoL', 'USR183', 'Catatan'),
('FUP088', '', 'Materi 2', 'FUP088.ppt', '2018-11-09 15:17:46', 'HgbjoL', 'USR183', 'Catatan'),
('FUP089', '', 'Materi 3', 'FUP089.ppt', '2018-11-09 15:18:34', 'HgbjoL', 'USR183', 'Catatan'),
('FUP090', '', 'Materi 4', 'FUP090.ppt', '2018-11-09 15:19:12', 'HgbjoL', 'USR183', 'Catatan'),
('FUP091', '', 'Materi 5', 'FUP091.ppt', '2018-11-09 15:20:16', 'HgbjoL', 'USR183', 'Catatan'),
('FUP092', '', 'Materi 6', 'FUP092.ppt', '2018-11-09 15:21:12', 'HgbjoL', 'USR183', 'Catatan'),
('FUP093', '', 'Selamat datang Ahmad Sugiyarta, ST., M.Kom di kelas Arsitektur Dan Organisasi. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 15:22:23', 'yRBGsv', 'USR001', 'Catatan'),
('FUP094', '', 'Materi 7', 'FUP094.ppt', '2018-11-09 15:22:36', 'HgbjoL', 'USR183', 'Catatan'),
('FUP095', '', 'Materi 8', 'FUP095.ppt', '2018-11-09 15:23:06', 'HgbjoL', 'USR183', 'Catatan'),
('FUP096', '', 'Materi 9', 'FUP096.ppt', '2018-11-09 15:23:45', 'HgbjoL', 'USR183', 'Catatan'),
('FUP097', '', 'Materi 10', 'FUP097.ppt', '2018-11-09 15:24:17', 'HgbjoL', 'USR183', 'Catatan'),
('FUP098', '', 'Materi 11', 'FUP098.ppt', '2018-11-09 15:24:43', 'HgbjoL', 'USR183', 'Catatan'),
('FUP099', '', 'Materi 12', 'FUP099.ppt', '2018-11-09 15:25:25', 'HgbjoL', 'USR183', 'Catatan'),
('FUP100', '', '', 'FUP100.php', '2018-11-09 15:27:02', 'qcubuf', 'USR228', 'Catatan'),
('FUP101', '', '', 'FUP101.php', '2018-11-09 15:38:55', 'qcubuf', 'USR228', 'Catatan'),
('FUP102', '', 'Selamat datang Dosen di kelas Pemrograman WEB. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 15:40:46', 'AhPwcM', 'USR001', 'Catatan'),
('FUP103', '', 'Testing', 'FUP103.gif', '2018-11-09 15:40:48', 'AhPwcM', 'USR230', 'Catatan'),
('FUP104', '', 'Tugas 2 (IF)', 'FUP104.php', '2018-11-09 15:46:03', 'qcubUf', 'USR220', 'Catatan'),
('FUP105', '', 'Tugas if (kondisi)', 'FUP105.php', '2018-11-09 15:49:50', 'qcubUf', 'USR223', 'Catatan'),
('FUP106', '', 'Selamat datang Ahmad Sugiyarta, ST., M.Kom di kelas Data Mining. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-11-09 15:58:36', 'RZFxuv', 'USR001', 'Catatan'),
('FUP107', '', 'Data Mining Presntasi', 'FUP107.pptx', '2018-11-09 16:01:11', 'RZFxuv', 'USR164', 'Catatan'),
('FUP108', '', 'Presentasi Arskom Hari Ini', 'FUP108.ppt', '2018-11-09 16:04:09', 'yRBGsv', 'USR164', 'Catatan'),
('FUP109', '', 'Materi awal : Apa itu IMK dan apa tujuan mempelajarinya...', 'FUP109.pptx', '2018-11-09 16:39:02', 'sEfnlx', 'USR014', 'Catatan'),
('FUP110', '', 'Materi 2 membahas tentang Faktor Manusia sebagai objek dan subjek dalam IMK', 'FUP110.pptx', '2018-11-09 16:41:27', 'sEfnlx', 'USR014', 'Catatan'),
('FUP111', '', 'Materi 3 : Membahas tentang sejarah perkembangan komputer', 'FUP111.pptx', '2018-11-09 16:43:31', 'sEfnlx', 'USR014', 'Catatan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kd_user` varchar(10) NOT NULL,
  `no_induk` varchar(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenkel` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha','Konghucu') NOT NULL,
  `alamat` text NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `foto` varchar(50) NOT NULL,
  `pekerjaan` text,
  `status` enum('Pengajar','Pelajar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kd_user`, `no_induk`, `nama_user`, `email`, `password`, `jenkel`, `agama`, `alamat`, `tgl_daftar`, `foto`, `pekerjaan`, `status`) VALUES
('USR001', '', 'Edutekno Admin', '', '', 'Laki-laki', 'Islam', '', '0000-00-00 00:00:00', 'USR001.png', '', 'Pengajar'),
('USR002', '12345678', 'AA', 'qwe@gmail.com', 'Cj1GJqxKInw=', 'Laki-laki', 'Islam', 'Serang', '2016-11-08 10:23:28', 'USR002.png', 'Mahasiswa', 'Pelajar'),
('USR003', '0425068401', 'Akip Suhendar', 'akip.suhendar@gmail.com', 'DsYROFNkZN8=', 'Laki-laki', 'Islam', 'cilegon', '2016-11-08 11:32:51', 'USR003.png', 'dosen', 'Pengajar'),
('USR004', '0413098403', 'Dr. Tb. Ai Munandar, MT', 'tbaimunandar@gmail.com', 'nIYUx7A53MM=', 'Laki-laki', 'Islam', 'Kota Serang', '2016-11-08 11:37:34', 'USR004.png', 'Dosen', 'Pengajar'),
('USR005', '0402057806', 'Ahmad Dedi Jubaedi', 'dedhiest@gmail.com', 'Xx7FFPI/o4s=', 'Laki-laki', 'Islam', 'serang', '2016-11-08 11:39:54', 'USR005.png', 'dosen', 'Pengajar'),
('USR006', '0405088504', 'Agus Irawan', 'irawanagus.2015@gmail.com', 'Zx17kJCF/mBsJH32mijjfQ==', 'Laki-laki', 'Islam', 'Cipocok Jaya Serang', '2016-11-08 11:44:14', 'USR006.JPG', 'Dosen Tetap', 'Pengajar'),
('USR007', '0407028801', 'Maya Selvia Lauryn', 'mysellyn@gmail.com', 'pWpp4yIEqr5sJH32mijjfQ==', 'Perempuan', 'Islam', 'Cilegon', '2016-11-08 11:45:00', 'USR007.JPG', 'Dosen Tetap', 'Pengajar'),
('USR008', '0415028101', 'Muhamad Ibrohim', 'b41m.cyber@gmail.com', '6oyHK8PB2ItsJH32mijjfQ==', 'Laki-laki', 'Islam', 'Kramatwatu Kabupaten Serang', '2016-11-08 11:48:40', 'USR008.JPG', 'Dosen Tetap', 'Pengajar'),
('USR009', '0430018003', 'M. Thoha Nurhadiyan', 'thoha.nurhadiyan@gmail.com', 'LLjcY8jJuohUgnbR576m3g==', 'Laki-laki', 'Islam', 'Kasemen Serang', '2016-11-08 11:57:09', 'USR009.JPG', 'Dosen Tetap', 'Pengajar'),
('USR010', '0422038902', 'Riyan Naufal Hay\'s', 'riyan.unsera@gmail.com', 'lxntjt0KANhUgnbR576m3g==', 'Laki-laki', 'Islam', 'Pelamunan Kabupaten Serang', '2016-11-08 12:02:49', 'USR010.JPG', 'Dosen Tetap', 'Pengajar'),
('USR011', '0425077404', 'Suherman', 'suherman.unsera@gmail.com', 'DaYm0KpAOvk=', 'Laki-laki', 'Islam', 'cilegon', '2016-11-08 12:10:47', 'USR011.jpg', 'dosen', 'Pengajar'),
('USR012', '0415106805', 'ahmad kautsar', 'agus@capcx.com', 'MfvI/ufHN7o=', 'Laki-laki', 'Islam', 'cilegon', '2016-11-08 12:19:33', 'USR012.jpg', 'dosen', 'Pengajar'),
('USR013', '0408047202', 'subandi wahyudi', 'subandiwahyudi@gmail.com', 'ijzcTYkkXRg=', 'Laki-laki', 'Islam', 'cilegon', '2016-11-08 12:24:53', 'USR013.jpg', 'dosen', 'Pengajar'),
('USR014', '0405057711', 'Haris Triono Sigit ', 'haris.t.sigit@gmail.com', '0dHz5Ws2rMA=', 'Laki-laki', 'Islam', 'serang', '2016-11-08 13:04:08', 'USR014.jpg', 'dosen', 'Pengajar'),
('USR015', '0404017701', 'Saleh Dwiyatno', 'salehdwiyatno@gmail.com', '42ZXlzJy8bo=', 'Laki-laki', 'Islam', 'serang', '2016-11-08 13:08:56', 'USR015.jpg', 'dosen', 'Pengajar'),
('USR016', '0424018403', 'Eva Safaah', 'safaah.unsera@gmail.com', 'eOGmE0TOO+U=', 'Perempuan', 'Islam', 'Cilegon', '2016-11-08 15:01:22', 'USR016.JPG', 'Dosen Tetap', 'Pengajar'),
('USR017', '12341234', 'aaa', 'aa@gmail.com', 'ukMsfghcNwM=', 'Laki-laki', 'Islam', 'Serang', '2016-11-08 15:17:15', 'USR017.jpg', 'QWE', 'Pengajar'),
('USR018', '0423017702', 'Ngatono ', 'ngatono077@gmail.com', '5xvZahSX4QE=', 'Laki-laki', 'Islam', 'cilegon', '2016-11-08 16:16:07', 'USR018.jpg', 'dosen', 'Pengajar'),
('USR019', '0414066905', 'Wahyuddin', 'wahyuddin.unsera@gmail.com', 'B1VTCRIRYvM=', 'Laki-laki', 'Islam', 'cilegon', '2016-11-08 17:25:18', 'USR019.jpg', 'dosen', 'Pengajar'),
('USR020', '0413128901', 'Diki Susandi', 'unsera.diky@gmail.com', 'b3AbfnzsjVxsJH32mijjfQ==', 'Laki-laki', 'Islam', 'Persada Banten Ciruas', '2016-11-08 18:55:30', 'USR020.JPG', 'Dosen Tetap', 'Pengajar'),
('USR021', '0419068604', 'Agung Triayudi', 'agung.triayudi@gmail.com', 'zYzdTaHd8C1UgnbR576m3g==', 'Laki-laki', 'Islam', 'Cilegon', '2016-11-08 19:02:34', 'USR021.jpg', 'Dosen Tetap', 'Pengajar'),
('USR022', '0419097202', 'Sulistiyono', 'sulistiyonoputro@yahoo.com', 'aykT5fW5hGhUgnbR576m3g==', 'Laki-laki', 'Islam', 'Serang', '2016-11-08 19:03:59', 'USR022.JPG', 'Dosen Tetap', 'Pengajar'),
('USR023', '0420088004', 'Agus Setyawan', 'agus.setyawan@hotmail.com', '2Ko/Dv6veNNUgnbR576m3g==', 'Laki-laki', 'Islam', 'Cilegon', '2016-11-08 19:09:19', 'USR023.JPG', 'Dosen Tetap', 'Pengajar'),
('USR024', '11218108', 'Muhamad zidan ', '709zidan@gmail.com', 'ASyJYQEiJn/WGA0pJmIUQg==', 'Laki-laki', 'Islam', 'Pandeglang', '2016-11-08 20:03:09', 'USR024.jpg', 'Pelajar', 'Pengajar'),
('USR025', '12118108', 'Muhamad zidan', '709zidan@gmail.com', 'ASyJYQEiJn/WGA0pJmIUQg==', 'Laki-laki', 'Islam', 'Pandeglang', '2016-11-08 20:06:48', 'USR025.jpg', 'mahasiswa', 'Pengajar'),
('USR026', '11218139', 'Rijaldi Fauzan Azhari', 'rijaldifauzan2@gmail.com', 'Te8l/mQSViN+ZBAOfZp3Q/qRV4Acewr0', 'Laki-laki', 'Islam', 'Jl. Ir.  Sutami Link. Krenceng', '2016-11-08 20:08:39', 'USR026.jpg', 'Mahasiswa', 'Pengajar'),
('USR027', '11218018', 'Ananda Desfithania Sari', 'Anandadesfithania@gmail.com', 'SgaBMWIeV/xuV8zBXPnnOA==', 'Perempuan', 'Islam', 'Komplek Rss Pemda C5 No. 20, Banjarsari, Cipocok Jaya, Kota Serang Banten', '2016-11-08 20:21:27', 'USR027.jpg', 'Mahasiswi', 'Pengajar'),
('USR028', '11217083', 'Yoga Nugraha', 'nugrahay007@gmail.com', '+QxCeXV5pg4=', 'Laki-laki', 'Islam', 'Lebak,Banten', '2016-11-08 20:49:52', 'USR028.jpg', NULL, 'Pelajar'),
('USR029', '11215215', 'Imam Agustian Nugraha', 'imamagustiannugraha@ymail.com', '062e03GVu7A=', 'Laki-laki', 'Islam', 'Pandeglang', '2016-11-08 20:52:49', 'USR029.png', '', 'Pelajar'),
('USR030', '11218048', 'Eko Teguh Muhammadi', 'ekohunterz@gmail.com', 'i4TCGywZNoyqeVub/NMNtA==', 'Laki-laki', 'Islam', 'Link.bebulak timur 03/11, kebondalem, cilegon', '2016-11-08 20:53:47', 'USR030.jpg', '', 'Pelajar'),
('USR031', '11216097', 'Muhamad Sidik', 'sidikmuhamad1998@gmail.com', 'zT4RC9AmMdTB0eJlkervHA==', 'Laki-laki', 'Islam', 'Cikande', '2016-11-08 20:54:04', 'USR031.jpg', '', 'Pelajar'),
('USR032', '11217084', 'Muhammad Indi Nurulhak', 'muahamadindi9@gmail.com', 'k43pZ4NOByAIa0ju5gDxzw==', 'Laki-laki', 'Islam', 'Kp. Kadu pandak - Des. Sinarjaya - Kec. Mandalawangi - Kab. Pandeglang', '2016-11-08 20:56:17', 'USR032.jpg', '', 'Pelajar'),
('USR033', '11217024', 'Riko Dwi Suseno', 'ricod126@gmail.com', '1k56V/75yLFA0CeX+XEwIg==', 'Laki-laki', 'Islam', 'Kp. Ciroke Ds. Tambak Kec. Kibin Kab. Serang-Banten', '2016-11-08 20:57:12', 'USR033.JPG', 'Mahasiswa', 'Pelajar'),
('USR034', '11214322', 'AYU ASTRIYANI KIRNIA SUHANDA', 'ayuastriyani96@gmail.com', 'SBCMbawWx5c=', 'Perempuan', 'Islam', 'Pejaten, Kramatwatu, Serang', '2018-11-08 20:59:36', 'USR034.jpg', '', 'Pelajar'),
('USR035', '11215130', 'Riyad Mansur', 'omdayier21@gmail.com', 'z4C0avqzdyk=', 'Laki-laki', 'Islam', 'Rangkasbitung', '2018-11-08 21:00:03', 'USR035.jpg', '', 'Pelajar'),
('USR036', '11215157', 'Mohammad Rizki Maulana', 'emrizkiem@pln.co.id', 'VRtghyC+uSf9cf2VA/CJKcMMt6DVEYwN', 'Laki-laki', 'Islam', 'Cilegon', '2018-11-08 21:02:16', 'USR036.jpg', '', 'Pelajar'),
('USR037', '11215206', 'Aji Permana', 'ajipermana100@gmail.com', '9uEVV9muk8yM/JSAftzz1g==', 'Laki-laki', 'Islam', 'Pandeglang', '2018-11-08 21:03:13', 'USR037.jpg', '', 'Pelajar'),
('USR038', '11217143', 'Gita Pramesti', 'pramestifuadi99@gmail.com', 'xhgLp4d4R5Wd60owFuyq+A==', 'Perempuan', 'Islam', 'Pandeglang', '2018-11-08 21:04:58', 'USR038.jpg', '', 'Pelajar'),
('USR039', '11216053', 'Fathan Qorib', 'fathanqorib8@gmail.com', '7YjYOvLTiw6BW2oIMEiAgQ==', 'Laki-laki', 'Islam', 'Ciujung damai F No.08 15/08', '2018-11-08 21:05:56', 'USR039.png', '', 'Pelajar'),
('USR040', '11218099', 'Mohamad Wildan Rofiadz Darojat', 'wildanrofiadz@example.com', 'MMFkg1UxF28DEvP+eQkQag==', 'Laki-laki', 'Islam', 'Taman mutiara indah', '2018-11-08 21:06:32', 'USR040.jpg', '', 'Pelajar'),
('USR041', '11215053', 'garin agung setiawan', 'garinsetiawana2@gmail.com', 'TISaJf4VznM=', 'Laki-laki', 'Islam', 'mancak', '2018-11-08 21:07:55', 'USR041.jpg', '', 'Pelajar'),
('USR042', '11218065', 'Gibran Ramadhans Alrachmis', 'gibran.alrac@yahoo.co.id', '/uh80m+zrqxmeTuZYmNlRA==', 'Laki-laki', 'Islam', 'Kp.Ciroke Ds.Tambak Kec.Kibin Kab.Serang', '2018-11-08 21:09:03', 'USR042.jpg', 'Pelajar', 'Pelajar'),
('USR043', '11215048', 'ilham ari haeryanto', 'Ilhamari615@gmail.com', 'YwYa5PB+zrg=', 'Laki-laki', 'Islam', 'Cikulur', '2018-11-08 21:10:15', 'USR043.jpg', '', 'Pelajar'),
('USR044', '11216101', 'bayu alamsyah', 'dayfineday@gmail.com', '7VFon8GdM5w=', 'Laki-laki', 'Islam', 'jogjakarta', '2018-11-08 21:12:01', 'USR044.jpg', '', 'Pelajar'),
('USR045', '11216123', 'Ucok Silaban', 'ucoksilaban@gmail.com', '9xIOGrJj82hvgEPY2VVgJw==', 'Perempuan', 'Konghucu', 'Medan', '2018-11-08 21:12:46', 'USR045.png', '', 'Pelajar'),
('USR046', '11215045', 'Rizky Aditya Pratama', 'rd.privasion@gmail.com', 'Cj1GJqxKInw=', 'Laki-laki', 'Islam', 'Kp.cimas serang', '2018-11-08 21:14:14', 'USR046.jpg', '', 'Pelajar'),
('USR047', '11218033', 'BELLA APRILLIA', 'belaaprilia137@gmail.com', 't+yqzxvRF6SEjjk52bh0Lg==', 'Perempuan', 'Islam', 'Jl. Tb suwandi cikulur jelawe serang- banten', '2018-11-08 21:19:58', 'USR047.jpg', '', 'Pelajar'),
('USR048', '11216047', 'Hamonangan Iman Hasoloan', 'hamonanganiman@gmail.com', 't6pjHzJnOvkF1IAroqvr9A==', 'Laki-laki', 'Kristen', 'Sumampir Timur Gg.Bhakti Rt02 Rw04 No 143 Cilegon Banten', '2018-11-08 21:22:42', 'USR048.jpg', '', 'Pelajar'),
('USR049', '11216063', 'Amarudin', 'can9kir@gmail.com', 'gfub5SA5JjY=', 'Laki-laki', 'Islam', 'Kragilan', '2018-11-08 21:23:36', 'USR049.jpg', '', 'Pelajar'),
('USR050', '11216137', 'Nur amri soleh', 'nuramri.sholeh@gmail.com', '/Xjg8Oz/QAU5wVFIqc3hBA==', 'Laki-laki', 'Islam', 'Kp. Kejambulan Ds. Gosara', '2018-11-08 21:25:04', 'USR050.jpg', '', 'Pelajar'),
('USR051', '11316080', 'Moch syahrul Nugraha ', 'syahrulnugraha309@gmail.com', 'nmAY8hJauAjQ+mZU7hnUBg==', 'Laki-laki', 'Islam', 'Kp. Solok jengkol Ds. Kencang Kec.Cipeucang Pandeglang-Banten', '2018-11-08 21:26:50', 'USR051.jpg', '', 'Pelajar'),
('USR052', '11217133', 'Arif Fauzan', 'ariffauzan768@gmail.com', '5mLTtBq4v/mBW2oIMEiAgQ==', 'Laki-laki', 'Islam', 'Lopang gede Serang banten II rt03 rw01', '2018-11-08 21:29:48', 'USR052.jpg', '', 'Pelajar'),
('USR053', '11215027', 'iin nuraeni', 'niin9899@gmail.com', 'TT06z4z9p2s=', 'Perempuan', 'Islam', 'kp. kamurang', '2018-11-08 21:32:25', 'USR053.jpg', '', 'Pelajar'),
('USR054', '11216036', 'Dede Galvin', 'dedegalvin@gmail.com', 'hUcXz6lNn1psffGH2RFZlw==', 'Laki-laki', 'Islam', 'Pandeglang', '2018-11-08 21:34:59', 'USR054.jpg', '', 'Pelajar'),
('USR055', '11216067', 'Rizka Amariah', 'rizkaamariah06@gmail.com', 'h4bqy4QVteQ=', 'Perempuan', 'Islam', 'kp.Ciagel Ds.Mongpok Kec.Cikeusal', '2018-11-08 21:39:10', 'USR055.jpg', '', 'Pelajar'),
('USR056', '11218051', 'Erza Okta Trihendrawan', 'octa.erza@gmail.com', 'r9D2V+vRJU5ij7reQlCd5w==', 'Laki-laki', 'Islam', 'Link.Pakupatan Prisma RT001/RW012', '2018-11-08 21:40:59', 'USR056.jpg', 'Pelajar', 'Pelajar'),
('USR057', '11216027', 'Bayu Nugraha ', 'bayunugraha193@gmail.com', 'V4DeeMmp8lZx6H6jGPuEhw==', 'Laki-laki', 'Islam', 'Ciruas ', '2018-11-08 21:41:50', 'USR057.JPG', '', 'Pelajar'),
('USR058', '11216031', 'Santinah', 'Santinah111@yahoo.com', 'j1aJjgUWnbc=', 'Perempuan', 'Islam', 'Pamarayan serang ', '2018-11-08 21:42:54', 'USR058.jpg', '', 'Pelajar'),
('USR059', '11316065', 'Muhammad rizky', 'm_riski10@yahoo.com', 'MpGk6ZkfKs8=', 'Laki-laki', 'Islam', 'Desa pejaten ', '2018-11-08 21:46:10', 'USR059.jpg', '', 'Pelajar'),
('USR060', '11316076', 'Naga Kemala', 'naga.kemala@gmail.com', '0Apsn7z2MF0=', 'Laki-laki', 'Kristen', 'Jalan tirtayasa no 17', '2018-11-08 21:48:16', 'USR060.JPG', '', 'Pelajar'),
('USR061', '11215259', 'Ade tabrani', 'adetabrani13@gmail.com', 'YW8lLzJizDo=', 'Laki-laki', 'Islam', 'Cikande permai', '2018-11-08 21:49:34', 'USR061.jpg', '', 'Pelajar'),
('USR062', '11216075', 'MUHAMAD FAJAR SAKTI', 'muhammadfajarsakti123@gmail.com', 'DsRKl1td7/cTa38BSI/JHg==', 'Laki-laki', 'Islam', 'Serdang, perum GSI Blok F3 No3', '2018-11-08 21:52:22', 'USR062.png', 'Pelajar', 'Pelajar'),
('USR063', '11216124', 'Kamal nurdianto', 'kamalnurdianto@gmail.com', 'OFy84I1BTKY=', 'Laki-laki', 'Islam', 'Kramatwatu', '2018-11-08 21:54:06', 'USR063.jpg', '', 'Pelajar'),
('USR064', '11216079', 'Hanif Nurmajid ', 'hanifnurmajid@gmail.com', '75aWsADzjy7orUBiCXONmQ==', 'Laki-laki', 'Islam', 'Ciruas ', '2018-11-08 21:55:27', 'USR064.jpg', '', 'Pelajar'),
('USR065', '11216154', 'Harilinda Septeana Anisah Rouhoh Nuur Jannah', 'harilh80@gmail.com', '5uOw1DrnQ4U=', 'Perempuan', 'Islam', 'Taman Krakatau', '2018-11-08 21:58:01', 'USR065.jpg', '', 'Pelajar'),
('USR066', '11218091', 'mardiyana', 'mardiyana16@gmail.com', 'xFJ+Ha2xFYU=', 'Perempuan', 'Islam', 'kp. tunggul jaya Rt07/01.lebakwana, kec. kramatwatu, serang, banten', '2018-11-08 21:58:55', 'USR066.jpg', '', 'Pelajar'),
('USR067', '11218414', 'sorry salah nim ', '-@gmail.com', '12312312', 'Laki-laki', 'Islam', '-', '2018-11-08 22:01:42', 'USR067.jpg', 'pelajar', 'Pelajar'),
('USR068', '11218161', 'Wahid', 'wahidihzakusuma@gmail.com', 'TmM2Ldbo0h8=', 'Laki-laki', 'Islam', 'Btn mandala ,rangkasbitung,lebak,banten', '2018-11-08 22:05:21', 'USR068.jpg', '', 'Pelajar'),
('USR069', '11218123', 'Patria pamungkas', 'patriapamungkas@gmail.com', 'H4ncJbQrcART4aVgPWVrsA==', 'Laki-laki', 'Islam', 'Lebak, banten', '2018-11-08 22:06:04', 'USR069.jpg', '', 'Pelajar'),
('USR070', '11216084', 'Siti Istiqomah', 'sitiistiqomahh11@gmail.com', 'vNvSx5GJ6Po=', 'Perempuan', 'Islam', 'Griya Cilegon C4 No 16 Jl. Kerinci. ', '2018-11-08 22:08:36', 'USR070.jpg', '', 'Pelajar'),
('USR071', '11217087', 'Roisul umam', 'roisulumam1699@gmail.com', 'ZfGFe03iSTd4rhgRPmVuyw==', 'Laki-laki', 'Islam', 'Kp rancagede lebak banten', '2018-11-08 22:12:42', 'USR071.jpg', '', 'Pelajar'),
('USR072', '11216098', 'FAJAR AL - ZUHRUF', 'fajarrtf@gmail.com', '1Pi8jh/AmNQ=', 'Laki-laki', 'Islam', 'btn bukit kaduagung utama rt/rw. 02/02, blok.m, no.10\r\n\r\nRangkasbitung Lebak Banten', '2018-11-08 22:15:07', 'USR072.jpg', 'Mahasiswa', 'Pelajar'),
('USR073', '11215124', 'Chaisar Faksi Dewangga', 'chaisar.faksidewangga@gmail.com', 'MV8SblOnWKk=', 'Laki-laki', 'Islam', 'Rangkasbitung', '2018-11-08 22:18:16', 'USR073.jpg', 'Mahasiswa', 'Pelajar'),
('USR074', '11217049', 'Mochammad khaifa SatyaYuga', 'satyayuga4499@gmail.com', 'tidNStXOIjYmhRAqAv5d3Q==', 'Laki-laki', 'Islam', 'Komp BMI ciracas serang', '2018-11-08 22:19:53', 'USR074.jpg', '', 'Pelajar'),
('USR075', '11216087', 'Siti Raudah ', 'sitiraudoh998@gmail.com', 'fHURqLCaFbc=', 'Perempuan', 'Islam', 'Kp/Ds. Nagara rt/rw. 003/001', '2018-11-08 22:23:14', 'USR075.jpg', '', 'Pelajar'),
('USR076', '11218147', 'Satio Bayu Nugroho', 'no6338@gmail.com', 'PTNhP1y2S3Ytt5NDcvNkrw==', 'Laki-laki', 'Islam', 'Komp.PCI Blok B 38/ 07 Cilegon ', '2018-11-08 22:24:26', 'USR076.jpg', '', 'Pelajar'),
('USR077', '11215001', 'Amal Hamzah', 'edhonamal@gmail.com', 'QE0PbP1W6wpsJH32mijjfQ==', 'Laki-laki', 'Islam', 'Jln. Re Martadinata merak', '2018-11-08 22:25:57', 'USR077.jpg', '', 'Pelajar'),
('USR078', '11216029 ', 'Melisa', 'melisatheresia993@gmail.com', 'TmIAHc2wFLw=', 'Perempuan', 'Kristen', 'Jalan ramanuju baru rt 01 rw 09 nomor 113 cilegon', '2018-11-08 22:29:02', 'USR078.jpg', '', 'Pelajar'),
('USR079', '11218113', 'Muhammad hafizh', 'muhammadhafizh555@gmail.com', 'lNuX+OUOGG7I6D/cc1rbsQ==', 'Laki-laki', 'Islam', 'Citraland puri serang', '2018-11-08 22:32:47', 'USR079.jpg', '', 'Pelajar'),
('USR080', '11215142', 'Miftahul Ulum', 'mifulum14@gmail.com', 'fWW1/WCGJtQ=', 'Laki-laki', 'Islam', 'Kp. Kosambi Dalam Ds. Kosambi Dalam Kec. Mekar Baru Kab. Tangerang - Banten', '2018-11-08 22:39:36', 'USR080.jpg', '', 'Pelajar'),
('USR081', '11218031', 'Bayu Aji Herlambang', 'bajih222@gmail.com', 'IKfPlFY4eFw7TVU6d689Xw==', 'Laki-laki', 'Islam', 'Komplek BSD Blok DD 8 No.16', '2018-11-08 22:42:01', 'USR081.jpg', 'Mahasiswa', 'Pelajar'),
('USR082', '11218142', 'Rizal Fahmi Wisata', 'rizalfahmiwisata@gmail.com', 'aLUCpa+/j8pmeTuZYmNlRA==', 'Laki-laki', 'Islam', 'Kragilan, Serang, Banten', '2018-11-08 22:42:57', 'USR082.jpg', '', 'Pelajar'),
('USR083', '11216057', 'Alamsyah ', 'alamsyahms2@gmail.com', 'l6f7TGA8wnrPCGShdnnsVg==', 'Laki-laki', 'Islam', 'Serang', '2018-11-08 22:45:24', 'USR083.jpg', '', 'Pelajar'),
('USR084', '11218126', 'Raden Muhammad Kurnia Tri Dipoyudho', 'radenyudho@gmail.com', 'Eifu966NKr2KfpmL+4Nw9Q==', 'Laki-laki', 'Islam', 'Perumahan taman warnasari indah blok FWA 144 no.6-7', '2018-11-08 22:49:21', 'USR084.jpg', 'Pelajar', 'Pelajar'),
('USR085', '11218128', 'Raja Danu Rahman', 'rajadanur@gmail.com', '3d3GMGKe1gU=', 'Laki-laki', 'Islam', 'Kp.kd kolecer,desa ramaya,kabupaten pandeglang', '2018-11-08 22:52:23', 'USR085.jpg', '', 'Pelajar'),
('USR086', '11218134', 'REPI REPALDI', 'Repirepaldi12011999@gmail.com', 'Qm7YCgLmiMu4vZc/Edh1jQ==', 'Laki-laki', 'Islam', 'Kp.sukahujan masjid rt/rw :007/003 des.pondok panjang  kec.cihara kab.lebak', '2018-11-08 23:00:19', 'USR086.jpg', '', 'Pelajar'),
('USR087', '11218010', 'Akmal Satria Irawan', 'akmalsatria518@gmail.com', '5UqpVmd4nUg=', 'Laki-laki', 'Islam', 'Cikande permai ', '2018-11-08 23:03:17', 'USR087.jpg', '', 'Pelajar'),
('USR088', '3601170606', 'Jihan pahriyansyah', 'jihan@exampel.com', 'Cj1GJqxKInw=', 'Laki-laki', 'Islam', 'Mandalawangi Pandeglang banten', '2018-11-08 23:05:20', 'USR088.jpg', '', 'Pelajar'),
('USR089', '11118049', 'Krisdiyanto', 'Kriesdyt24@examplel.com', 'MzgduzaB5hc=', 'Laki-laki', 'Islam', 'Bangka belitung', '2018-11-08 23:10:16', 'USR089.jpg', '', 'Pelajar'),
('USR090', '11218097', 'Mohamad Fikri', 'mohammadfikri423@gmail.com', 'G0em/QGTb4I=', 'Laki-laki', 'Islam', 'Cilegon. Pci, Blok E 24 No 3', '2018-11-08 23:12:44', 'USR090.jpg', 'Pelajar', 'Pelajar'),
('USR091', '11215017', 'Zulkaromi Muttaqin', 'zulkaromim@gmail.com', '2HMwsq2tkkU=', 'Laki-laki', 'Islam', 'Jl.Banten No.007 | Link.Kebaharan | Rt.002/Rw.003', '2018-11-08 23:18:25', 'USR091.jpg', '', 'Pelajar'),
('USR092', '11216012', 'APRIANTO', 'aprianto486@example.com', 'UgYxfHIW9GdDvpTH+oHBhg==', 'Laki-laki', 'Islam', 'Kp.jelalang rt/rw.011/004 ds.pangampelan kec.walantaka kota serang provinsi banten', '2018-11-08 23:24:24', 'USR092.jpg', '', 'Pelajar'),
('USR093', '11215244', 'Hendra sumindra', 'hendrasumindra123@gmail.com', '9Z/2dP2Xud7tfu0W/obAWw==', 'Laki-laki', 'Islam', 'Panimbang', '2018-11-08 23:29:13', 'USR093.jpg', '', 'Pelajar'),
('USR094', '11316053', 'Wahyudin', 'Wahyudin173.wd@gmail.com', 'FX5yjo6b5YYZUVEAYkaOWA==', 'Laki-laki', 'Islam', 'Pandeglang', '2018-11-08 23:32:31', 'USR094.jpg', 'Mahasiswa', 'Pelajar'),
('USR095', '11216038', 'ilham agustian k', 'ilhamagustian123@gmail.com', 'L2oplvWWO8CTiizFflvMvA==', 'Laki-laki', 'Islam', 'pandeglang', '2018-11-08 23:41:01', 'USR095.jpg', 'Mahasiswa', 'Pelajar'),
('USR096', '11218095', 'Muhammad Raihan Fajar Lintang', 'muhammadraihanfl@gmail.com', 'Cj1GJqxKInw=', 'Laki-laki', 'Islam', 'Taman Banjar Agung  Blok F 34 No2', '2018-11-08 23:45:39', 'USR096.jpg', 'Mahasiswa', 'Pelajar'),
('USR097', '11216210', 'Hendra Irawan', 'hendra.irawan135@gmail.com', 'NTxcHx/dcYdmeTuZYmNlRA==', 'Laki-laki', 'Islam', 'Pandeglang', '2018-11-08 23:49:27', 'USR097.jpg', 'Mahasiswa', 'Pelajar'),
('USR098', '11317001', 'Mar\'i Muhamad', 'marimuhamad464@gmail.com', 'CzU8A5gi+DCBW2oIMEiAgQ==', 'Laki-laki', 'Islam', 'Kp.Citeras RT/RW 005/001  Desa.Cemplang kec.Jawilan', '2018-11-09 00:06:19', 'USR098.jpg', 'Mahasiswa', 'Pelajar'),
('USR099', '11316054', 'Alan Elfaroq', 'alan.elfaroq05@gmail.com', 'jFcsg1ggTb6U0s+tqJbzKg==', 'Laki-laki', 'Islam', 'Serang', '2018-11-09 00:09:40', 'USR099.jpg', 'Mahasiswa', 'Pelajar'),
('USR100', '11316013', 'Habibi Nabil Khairi', 'habibinabil22@gmail.com', '8FMOiA2BZeUvKpjIN7RLbA==', 'Laki-laki', 'Islam', 'Citra Garden BMW Blok C07/08', '2018-11-09 00:13:12', 'USR100.jpg', 'Mahasiswa', 'Pelajar'),
('USR101', '11216112', 'Hafizh Abror Wafa', 'hafizh1121611@gmail.com', 'jTHEruDwlw8=', 'Laki-laki', 'Islam', 'Gerem Raya, Cilegon, Banten', '2018-11-09 00:15:08', 'USR101.png', 'Mahasiswa', 'Pelajar'),
('USR102', '11218168', 'yusufmaulana', 'yusufYM@mail.com', 'E2x8HiW05Ro=', 'Laki-laki', 'Islam', 'cilegon', '2018-11-09 00:20:01', 'USR102.jpg', 'Mahasiswa', 'Pelajar'),
('USR103', '11215023', 'Ridwan Nurdiansyah', 'rnurdiansyah77@gmail.com', 'IFNRvf5plP9meTuZYmNlRA==', 'Laki-laki', 'Islam', 'kp kadu pandak rt 09 rw 11', '2018-11-09 00:22:00', 'USR103.jpg', 'Mahasiswa', 'Pelajar'),
('USR104', '11218032', 'Bayu Desta Permana', 'bayudesta89@gmail.com', '81sgpFTojuwlHjuYqIFKzg==', 'Laki-laki', 'Islam', 'ciujung damai blok c 14 no 21', '2018-11-09 00:27:04', 'USR104.jpg', 'Mahasiswa', 'Pelajar'),
('USR105', '11316039', 'Dede Ryan Hidayat', 'ryanhidayatrezfectorcity@gmail.com', 'U7zBtaSuYt4xNHW5O4UvqA==', 'Laki-laki', 'Islam', 'Pandeglang', '2018-11-09 00:30:35', 'USR105.jpg', 'Mahasiswa', 'Pelajar'),
('USR106', '11316032', 'Oki Gustiawan', 'okigustiawan@gmail.com', 'iORLeFm3TuPi20EUjAgxQw==', 'Laki-laki', 'Islam', 'Kp. Parindang Rt/Rw 03/04 Ds. Panancangan Kec. Lebak - Banten', '2018-11-09 00:35:21', 'USR106.jpg', 'Mahasiswa', 'Pelajar'),
('USR107', '11316084', 'Shella Nurhaliza', 'shellan596@gmail.com', '1JRVkz3oFjg=', 'Perempuan', 'Islam', 'Perum graha walantaka blok e1 no 18', '2018-11-09 00:45:10', 'USR107.png', 'Mahasiswa', 'Pelajar'),
('USR108', '11316005', 'Muhammad syarif sihabudin', 'sihabudin2712@gmail.com', '/R/bIoVfdaI=', 'Laki-laki', 'Islam', 'Kragilan serang', '2018-11-09 00:53:39', 'USR108.jpg', 'Mahasiswa', 'Pelajar'),
('USR109', '11216044', 'Dila Fadhilah', 'dilafadhilah85@gmail.com', 'uYkTqbt16h0xNHW5O4UvqA==', 'Perempuan', 'Islam', 'Komplek Mandala citra indah ', '2018-11-09 01:03:24', 'USR109.jpg', 'Mahasiswa', 'Pelajar'),
('USR110', '11214358', 'Iman Arpah', 'imanarpah96@gmail.com', '3C1WwAzFeM9lij8yYpfaMA==', 'Laki-laki', 'Islam', 'Perum pesona wibawa praja blok G5 no 28 cisoka tangerang', '2018-11-09 01:16:08', 'USR110.jpg', 'Mahasiswa', 'Pelajar'),
('USR111', '11216171', 'Dian Octaviani', 'dianoctaviani18@gmail.com', '9FFMFHhA48fQ+mZU7hnUBg==', 'Perempuan', 'Islam', 'Link pringori, cilegon', '2018-11-09 01:22:46', 'USR111.jpg', 'Mahasiswa', 'Pelajar'),
('USR112', '11217067', 'Rian Gabia Wijaya', 'riangabiawijaya@gmail.com', 'je0RHcNWicA=', 'Laki-laki', 'Islam', 'Kp jayanti', '2018-11-09 01:48:03', 'USR112.jpg', 'Mahasiswa', 'Pelajar'),
('USR113', '11215022', 'Ade Fiqri Mutaqin', 'adefiqri603@gmail.com', 'ZkFU+WEPLLs=', 'Laki-laki', 'Islam', 'Pandeglang', '2018-11-09 02:02:41', 'USR113.jpg', 'Mahasiswa', 'Pelajar'),
('USR114', '11218027', 'Aris hariyanto', 'haryantoaris481@gmail.com', 'dM8syAo0gsWDrtlssTtSgg==', 'Laki-laki', 'Islam', 'Kragilan, serang-banten', '2018-11-09 02:10:38', 'USR114.jpg', 'Mahasiswa', 'Pelajar'),
('USR115', '11218088', 'Luthfi Naufal Fakhri', 'luthfinaufal0719@exampel.com', 'ZaM0TCv1K4udrtro5GcPUg==', 'Laki-laki', 'Islam', 'Link.daliran kec.purwakarta  kel.kebondalem rt/rw 001/002', '2018-11-09 02:13:30', 'USR115.jpg', 'Mahasiswa', 'Pelajar'),
('USR116', '11217103', 'GUSTIKA AULIA FEBRIANI', 'gustikaaulia02@gmail.com', 'PjhpUra487M=', 'Perempuan', 'Islam', 'Pandeglang', '2018-11-09 02:21:38', 'USR116.jpg', 'Mahasiswa', 'Pelajar'),
('USR117', '11218150', 'Taufik Hidayat', 'taufikth@example.com', '9ierrIlfuKk=', 'Laki-laki', 'Islam', 'Kp. Gunung Tanggeran kec.cipeucang kab. Pandeglang Banten', '2018-11-09 02:41:11', 'USR117.jpg', 'Mahasiswa', 'Pelajar'),
('USR118', '11317006', 'sodikin', 'diktoing12@gmail.com', 'j9stGrkJEN6nFk1bR8arjg==', 'Laki-laki', 'Islam', 'kp. majasaruni rt/rw 001/002 kecamatan majasari. kabupaten pandeglang. ', '2018-11-09 03:25:59', 'USR118.jpg', 'Mahasiswa', 'Pelajar'),
('USR119', '11317035', 'Lutfia Amalia', 'lutfiaamalia8@gmail.com', 'DKjsUWIVr3xGI6JjtPUBFQ==', 'Perempuan', 'Islam', 'Kp. Kesatrian rt/rw 002/008 kec. Kasemen kel. Banten', '2018-11-09 04:46:32', 'USR119.jpg', 'Mahasiswa', 'Pelajar'),
('USR120', '11317011', 'Nover Fridolin Tuah', 'noverfridolintuah058@gmail.com', 'aJYV0wXYAgM=', 'Laki-laki', 'Kristen', 'Kp. Ampian ds. Pipitan kec. Walantaka', '2018-11-09 04:53:17', 'USR120.jpg', 'Mahasiswa', 'Pelajar'),
('USR121', '11218159', 'UMI ARIANTI HANIFAH', 'UMIHANIFAH@gmail.com', 'HVL2rTXx1Lo=', 'Perempuan', 'Islam', 'Ciruas,Blok c No 7', '2018-11-09 05:00:25', 'USR121.jpg', 'Mahasiswa', 'Pelajar'),
('USR122', '11218001', 'Aa Bayu Saputra', 'bayusaputratea@gmail.com', 't4kcZNMcS5MoM+MrvvLShw==', 'Laki-laki', 'Islam', 'KP. Pengkolan asem', '2018-11-09 05:09:48', 'USR122.jpg', 'Mahasiswa', 'Pelajar'),
('USR123', '11218086', 'Lilik Ashari', 'lilik.ashari29@gmail.com', 'YfOICMeBHwZ5+2n31NbGqA==', 'Laki-laki', 'Islam', 'Perum cikande permai blok o5 no 11 rt 001 rw 007 serang banten', '2018-11-09 05:21:18', 'USR123.jpg', 'Mahasiswa', 'Pelajar'),
('USR124', '11215139', 'Puput Purnamasari', 'purnamasaripuput52@gmail.com', 'ussm9oQbSxVmeTuZYmNlRA==', 'Perempuan', 'Islam', 'Cilegon Banten', '2018-11-09 05:29:32', 'USR124.jpg', 'Mahasiswa', 'Pelajar'),
('USR125', '11218016', 'Alvin Firdaus', 'alvianfidaus97@gmail.com', 'ZsE4vs1TeqPbgysT1HuzXA==', 'Laki-laki', 'Islam', 'Graha Walantaka B2. No.3 RT/RW 020/006 Kecamatan Pengampelan Kota Serang', '2018-11-09 05:39:40', 'USR125.jpg', 'Mahasiswa', 'Pelajar'),
('USR126', '11218111', 'Muhammad Firdaus', 'firdaus041195@gmail.com', 'wItoM3dOs+ep9V8KPdXP0w==', 'Laki-laki', 'Islam', 'Ciceri Permai 4 Blok G3 No.12', '2018-11-09 05:42:50', 'USR126.jpg', 'Mahasiswa', 'Pelajar'),
('USR127', '11218043', 'della fatimatul hajah', 'dellafatimatulhj@gmail.com', 'UZMhx3Y8UZ0=', 'Perempuan', 'Islam', 'kp.sawah baros serang banten', '2018-11-09 05:51:04', 'USR127.jpg', 'Mahasiswa', 'Pelajar'),
('USR128', '11218021', 'Annas Nurrizki', 'annasnurrizki@gmail.com', '21Qi0FfuSWQ=', 'Laki-laki', 'Islam', 'Kp.bajeg', '2018-11-09 06:10:13', 'USR128.jpg', 'Mahasiswa', 'Pelajar'),
('USR129', '11217047', 'Muhamad Odih', 'muhamadodih@example.com', 'VZGEYr376axsJH32mijjfQ==', 'Laki-laki', 'Islam', 'Pandeglang', '2018-11-09 06:20:43', 'USR129.jpg', 'Mahasiswa', 'Pelajar'),
('USR130', '11218002', 'Abdillah rifai', 'abdillahrifai@gmail.com', 'xgyEz3ruQxs=', 'Laki-laki', 'Islam', 'Kp. Maja barat Rt/Rw 02/03 kec. Majasari kel. Sukaratu ', '2018-11-09 06:23:01', 'USR130.jpg', 'mahasiswa ', 'Pengajar'),
('USR131', '11316082', 'khusnul khotimah', 'khusnul19971203@gmail.com', 's6W+Vx7PVik=', 'Perempuan', 'Islam', 'Labuan pandeglang', '2018-11-09 06:46:16', 'USR131.jpg', 'Mahasiswa', 'Pelajar'),
('USR132', '11216003', 'Fahriyanti', 'Fahriyantiagustin08@gmail.com', '1WEW36Hr7Pw=', 'Perempuan', 'Islam', 'Kp.kemeranggen Des.Taman Baru kec.Taktakan, Serang-Banten', '2018-11-09 06:51:25', 'USR132.jpg', 'Mahasiswa', 'Pelajar'),
('USR133', '11218090', 'Maimunah', 'May63278@gmail.com', 'h/ItXXwtXVJGI6JjtPUBFQ==', 'Perempuan', 'Islam', 'Cilegon', '2018-11-09 06:56:28', 'USR133.jpg', 'Mahasiswa', 'Pelajar'),
('USR134', '11316038', 'Noercholish Madjid Sutardi', 'noercholish.ms@gmail.com', '3iu9AqgSnv2UXgADnTL1TA==', 'Laki-laki', 'Islam', 'Cikande Permai Blok D1/7A Rt/Rw 01/02 ke. Cikande kab. Serang', '2018-11-09 07:02:55', 'USR134.jpg', 'Mahasiswa', 'Pelajar'),
('USR135', '11218137', 'Ridwan', 'ridwanskensa@example.com', 'Cj1GJqxKInw=', 'Laki-laki', 'Islam', 'kp.pancur, rt/rw 02/05, ds.bojongleles, kec.cibadak, kab.lebak, prov.banten', '2018-11-09 07:10:32', 'USR135.jpg', 'Mahasiswa', 'Pelajar'),
('USR136', '11316063', 'Egi Arji Riqianto', 'egiarzzy@gmail.com', 'adTZNux4qJLdKZCAxGCYZQ==', 'Laki-laki', 'Islam', 'Bojonegara', '2018-11-09 07:17:41', 'USR136.jpg', 'Mahasiswa', 'Pelajar'),
('USR137', '11218114', 'Muhammad Hilal Akbar Johan ', 'hilalakbar323@gmail.com', 'XlLFZGrznP5meTuZYmNlRA==', 'Laki-laki', 'Islam', 'Komplek bumi mukti indah blok A6 NO.3 RT.03 RW.09 ', '2018-11-09 07:22:39', 'USR137.png', 'Mahasiswa', 'Pelajar'),
('USR138', '11218055', 'Fahri Ramadya Wibowo', 'kiyamahiroto4@gmail.com', 'ZHZVazauKwmBW2oIMEiAgQ==', 'Laki-laki', 'Islam', 'Puri Krakatau Hijau Blok D4 no.24-25, Kec. Gerogol', '2018-11-09 07:25:19', 'USR138.png', 'Mahasiswa', 'Pelajar'),
('USR139', '11218093', 'MOCH REZKI ISMAWANDI', 'rezkyismawandi51@gmail.com', 'odhUskr0GPw=', 'Laki-laki', 'Islam', 'PABUARAN BARU RT 04 RW 04 KEL UNYUR', '2018-11-09 07:28:31', 'USR139.JPG', 'Mahasiswa', 'Pelajar'),
('USR140', '11218025', 'Ari Muhamad Hafidz ', 'aridaviq220@Gmail.com', 'fD7oHqmI5/h0aqu5WqMu3w==', 'Laki-laki', 'Islam', 'Taman Banten lestari blok C 19B No.25 ', '2018-11-09 07:29:54', 'USR140.jpg', 'Mahasiswa', 'Pelajar'),
('USR141', '11316030', 'Difha Haerunnisa', 'dipa394@gmail.com', 'lVOQwHP8Omk=', 'Perempuan', 'Islam', 'Taman mutiara Indah ', '2018-11-09 07:32:48', 'USR141.jpg', 'Mahasiswa', 'Pelajar'),
('USR142', '11217046', 'Sudrajat', 'sudrajatazat001@gmail.com', 'nakxkcT9V3x1Is7EUwwuTA==', 'Laki-laki', 'Islam', 'Banjar-Pandeglang', '2018-11-09 07:38:22', 'USR142.jpg', 'Mahasiswa', 'Pelajar'),
('USR143', '11218034', 'Berliana Viarisci Saputri', 'Berlianvairsici@gmail.com', 'PNgHAnyxZAg=', 'Perempuan', 'Islam', 'serang-banten', '2018-11-09 07:38:46', 'USR143.jpg', 'Mahasiswa', 'Pelajar'),
('USR144', '11218156', 'Tb mochamad eki masruri', 'tubagusekie@gmail.com', 'izUw0Dow6Vc=', 'Laki-laki', 'Islam', 'Kp.ciekek karaton ', '2018-11-09 07:42:30', 'USR144.jpg', 'Mahasiswa', 'Pengajar'),
('USR145', '11217027', 'Annisa Febyan', 'annisafebyan2@gmail.com', 'ipk0/a+HucI=', 'Perempuan', 'Islam', 'Link.Acing', '2018-11-09 07:50:11', 'USR145.jpg', 'Mahasiswa', 'Pelajar'),
('USR146', '11218067', 'Gugun Mulyana', 'gugunmulyana7@gmail.com', 'BDQ3nGyMFrllij8yYpfaMA==', 'Laki-laki', 'Islam', 'Kp.ciparay kec.cinangka Ds.sindanglaya Serang-Banten', '2018-11-09 08:06:47', 'USR146.jpg', 'Mahasiswa', 'Pelajar'),
('USR147', '11218151', 'Taufik miladi', 'taufikmldi12@example.com', 'EIB2H8gI3/9meTuZYmNlRA==', 'Laki-laki', 'Islam', 'Kp.setu pasar waringin kurung rt/rw 01/01', '2018-11-09 08:12:56', 'USR147.jpg', 'Mahasiswa', 'Pelajar'),
('USR148', '11216032', 'DZIKRY KURNIAWAN', 'dzikry060698@gmail.com', 'VYEAWrohaT4=', 'Laki-laki', 'Islam', 'kp ciparay', '2018-11-09 08:20:46', 'USR148.jpg', 'Mahasiswa', 'Pelajar'),
('USR149', '3602151302', 'Didin Saprudin', 'didinsaprudin649@gmail.com', '3DNOT4uxZu3p06ARmXL6RQ==', 'Laki-laki', 'Islam', 'Cibuah/Warungunung', '2018-11-09 08:27:40', 'USR149.jpg', 'Mahasiswa', 'Pelajar'),
('USR150', '11316103', 'Dede Juanda', 'djuandalucifer@gmail.com', '74UAH/pzW08=', 'Laki-laki', 'Islam', 'Munjul, Pandeglang', '2018-11-09 08:36:36', 'USR150.jpg', 'Mahasiswa', 'Pelajar'),
('USR151', '11218131', 'Rayhan Adeintama ', 'rayhanadeintama10@gmail.com', 'c5DyWD9hI3s=', 'Laki-laki', 'Islam', 'Bumi agung permai 1 blok u4 no 12', '2018-11-09 08:45:28', 'USR151.jpg', 'Mahasiswa', 'Pelajar'),
('USR152', '11217008', 'Irman Dwiyana', 'irmandwiyana@gmail.com', 'feWK3y0JdbZzNGJnafOC0Q==', 'Laki-laki', 'Islam', 'Jl bhayangkara Asrama polisi blok d41', '2018-11-09 08:51:25', 'USR152.jpg', 'Mahasiswa', 'Pelajar'),
('USR153', '11218163', 'Waliyudin hakim', 'waliyudinhakim15@gmail.com', 'K7fOzHS+SdHVv7DH3Ss4cw==', 'Laki-laki', 'Islam', 'Link Tegal tong  RT 04 RW 05', '2018-11-09 08:55:27', 'USR153.jpg', 'Mahasiswa', 'Pelajar'),
('USR154', '11316014', 'Syarifah ghraida', 'ghreysha@gmail.com', 'lgZnyOVhkHw=', 'Perempuan', 'Islam', 'Bpp sankyu blok c2 no 08', '2018-11-09 08:58:35', 'USR154.jpg', 'Mahasiswa', 'Pelajar'),
('USR155', '11218026', 'Ari Nurmansyah', 'ariyonzhune@gmail.com', 'NHvJ/qiJlvHp2CtRd9koCA==', 'Laki-laki', 'Islam', 'Link.Baru Rt/Rw 01/03 kebondalem, Cilegon, Banten', '2018-11-09 09:00:05', 'USR155.jpg', 'Mahasiswa', 'Pengajar'),
('USR156', '11218052', 'Eugenia Audrey', 'eugenia.audrey@live.com', 'yV8l1xmfM8E=', 'Perempuan', 'Kristen', 'Serang', '2018-11-09 09:07:54', 'USR156.jpg', 'Mahasiswa', 'Pelajar'),
('USR157', '11216090', 'Maelisa', 'maelisa@gmail.com', 'FRTH/TUx71qxzKKGc1wd8g==', 'Perempuan', 'Islam', 'kramatwatu', '2018-11-09 09:14:26', 'USR157.jpg', 'Mahasiswa', 'Pelajar'),
('USR158', '11217064', 'Davidt Rajasa', 'davidt.rajasa@yahoo.com', 'F4DRh6CjAY4nLdwxq8/wHA==', 'Laki-laki', 'Islam', 'Sempu', '2018-11-09 09:23:46', 'USR158.jpg', 'Mahasiswa', 'Pelajar'),
('USR159', '11218133', 'Renaldi Setya Putra', '19aldie@example.com', '5TG3EQp8apB1qxAXqP+GGA==', 'Laki-laki', 'Islam', 'Kp Kalapa Lima Rt/Rw 01/02 Des. sukamanah Kec. Baros Kab.  Serang', '2018-11-09 09:29:24', 'USR159.jpg', 'Mahasiswa', 'Pelajar'),
('USR160', '3604092801', 'Anzal Rahman', 'anzalrahman28@gmail.com', 'JWs8N3G6DnpjDWTBcL2duNEXOFV8Tp37', 'Laki-laki', 'Islam', 'Taman Ciruas Permai', '2018-11-09 09:32:05', 'USR160.jpg', 'Mahasiswa', 'Pelajar'),
('USR161', '11218164', 'Wicaksono Eppri Permono', 'wicaksonoepri12@gmail.com', 'qU6eRd/xrhhMVT8dpqD0Zw==', 'Laki-laki', 'Islam', 'Kavling Blok.C Cilegon', '2018-11-09 09:47:36', 'USR161.png', 'Mahasiswa', 'Pelajar'),
('USR162', '11316009', 'Raihan Marta Syakira', 'deaf.raihan@gmail.com', '3SLmncZMYCiEjjk52bh0Lg==', 'Laki-laki', 'Islam', 'Jl.KH Sulaeman kec Keagungan kel Serang Cantilan RT 05 / RW 09, Serang Banten', '2018-11-09 09:54:43', 'USR162.jpg', 'Mahasiswa', 'Pelajar'),
('USR163', '11218074', 'Hilmy Bahy Ridwan', 'hilmyjbwkz14@gmail.com', 'y0e/FIFUAtzBJaVWrkzvNQ==', 'Laki-laki', 'Islam', 'Panimbang Pandeglang Banten', '2018-11-09 09:59:26', 'USR163.jpg', 'Mahasiswa', 'Pelajar'),
('USR164', '0401108001', 'Ahmad Sugiyarta, ST., M.Kom', 'ahmad.sugiyarta@yahoo.com', '140Ngl1gsKsRjXvO1SA4PWZ5O5liY2VE', 'Laki-laki', 'Islam', 'Serang', '2018-11-09 10:05:38', 'USR164.JPG', 'Dosen', 'Pengajar'),
('USR165', '0303039001', 'Ayu Purnama Sari, S.Kom., M.Kom', 'ayupurnamasarifaliza@gmail.com', 'WdfOqqIh7nRDbkuo90xYUmZ5O5liY2VE', 'Perempuan', 'Islam', 'Serang', '2018-11-09 10:10:39', 'USR165.JPG', 'Dosen', 'Pengajar'),
('USR166', '0417048301', 'Anharudin, S.Kom., M.Kom', 'andra.yhoed@gmail.com', '2AFVWjm3x7y+UxZGwtBDEw==', 'Laki-laki', 'Islam', 'Serang', '2018-11-09 10:12:41', 'USR166.JPG', 'Dosen', 'Pengajar'),
('USR167', '0429128102', 'Wahyudin Nor Achmad, ST., M.Kom', 'wahyou@gmail.com', 'WuvAdPpkOfhi/qj/je2fUqmecHE+4GwK', 'Laki-laki', 'Islam', 'Cilegon', '2018-11-09 10:15:12', 'USR167.JPG', 'Dosen', 'Pengajar'),
('USR168', '11217006', 'Tb. Muhammad Elfandy', 'm.elfandy9@gmail.com', 'O/ts8AdKdPo=', 'Laki-laki', 'Islam', 'Pandeglang', '2018-11-09 10:20:32', 'USR168.png', 'Mahasiswa', 'Pelajar'),
('USR169', '11218012', 'Aldi irawan', 'aldyirawan25555@gmail.com', 'AQcyn6vUigE=', 'Laki-laki', 'Islam', 'Pandeglang banten', '2018-11-09 10:26:09', 'USR169.jpg', 'Mahasiswa', 'Pelajar'),
('USR170', '0411087604', 'Saefudin, S.Kom., M.Kom', 'saefudin12@gmail.com', '/Y4OUR8s34v/+FUt9R7p/Q==', 'Laki-laki', 'Islam', 'Serang', '2018-11-09 10:32:28', 'USR170.JPG', 'Dosen', 'Pengajar'),
('USR171', '11217001', 'Genta rizma febriansyah', 'gentafebriansyah025@gmail.com', 'ZsBnG6ovxwiBq4K9lziVdg==', 'Laki-laki', 'Islam', 'Link. Sukasari, kel .Randakari', '2018-11-09 10:33:27', 'USR171.jpg', 'Mahasiswa', 'Pelajar'),
('USR172', '11316037', 'Alin Putri Jutika', 'alinjutika59@gmail.com', '/wZ4EFfmr0E=', 'Perempuan', 'Islam', 'Kp.Tanjung Harapan rt.001/006 Pegadingan-Kramatwatu', '2018-11-09 10:39:36', 'USR172.png', 'Mahasiswa', 'Pelajar'),
('USR173', '0420128105', 'Siswanto, ST., MT', 'fitrakbar06@gmail.com', 'aPenDPOAa3n/+FUt9R7p/Q==', 'Laki-laki', 'Islam', 'Cilegon', '2018-11-09 10:50:33', 'USR173.JPG', 'Dosen', 'Pengajar'),
('USR174', '0417067708', 'Dwi Bayu Rendro, S.Kom., MT', 'dwibayurendra@gmail.com', 'VfoJofZFRfNer3DWOyTk4A==', 'Laki-laki', 'Islam', 'Tangerang', '2018-11-09 10:52:42', 'USR174.JPG', 'Dosen', 'Pengajar'),
('USR175', '11316068', 'SYUKRON ROSADI', 'rosadisyukron@gmail.com', '/iIOw35ISEQ=', 'Laki-laki', 'Islam', 'Serang', '2018-11-09 10:54:10', 'USR175.jpg', 'Mahasiswa', 'Pelajar'),
('USR176', '0401058002', 'Mochamad Natsir, ST., MT', 'ziyaulhaq09@gmail.com', '67KQOA7pj0IGkeuyHbJLsGZ5O5liY2VE', 'Laki-laki', 'Islam', 'Cilegon', '2018-11-09 10:59:48', 'USR176.JPG', 'Dosen', 'Pengajar'),
('USR177', '0423017206', 'Sunny Samsuni, M.Kom', 'SUNNYSAMSUNI@gmail.com', 'cA96vGcyOYVc/pk/1lKcsA==', 'Laki-laki', 'Islam', 'Serang', '2018-11-09 11:06:22', 'USR177.JPG', 'Dosen', 'Pengajar'),
('USR178', '11317037', 'Awang Isnindito', 'key3769@gmail.com', 'rZaIc5zl8KM=', 'Laki-laki', 'Islam', 'Komp.Citra Gading Blok f7 no.24', '2018-11-09 11:11:56', 'USR178.jpg', 'Mahasiswa', 'Pelajar'),
('USR179', '11218118', 'Naufalmusthofa', 'Naufalmusthofa@fti.com', '64IJBEvprIY=', 'Laki-laki', 'Islam', 'Link. Kaligandu komplek', '2018-11-09 11:21:00', 'USR179.jpg', 'Mahasiswa', 'Pelajar'),
('USR180', '0428126902', 'Erma Perwitasari', 'perwitasarierma@gmail.com', '3+cKeAZOjqo=', 'Perempuan', 'Islam', 'Serang', '2018-11-09 11:35:57', 'USR180.jpg', 'Dosen', 'Pengajar'),
('USR181', '11316023', 'Dimas Wahyu Wibowo', 'dimaswahyuw13@gmail.com', 'tO8V2OBhqg//+FUt9R7p/Q==', 'Laki-laki', 'Islam', 'kp.kuaron baru rt01/03 kec.ciruas', '2018-11-09 12:34:17', 'USR181.jpg', 'Mahasiswa', 'Pelajar'),
('USR182', '11316022', 'YUSUP JAJI PERMANA', 'yusupjajipermana@gmail.com', 'XdTQe88aVAeo4cyvmrYP0Q==', 'Laki-laki', 'Islam', 'Cibaliung , pandeglang,banten ', '2018-11-09 12:40:28', 'USR182.jpg', 'Mahasiswa', 'Pelajar'),
('USR183', '0424067702', 'Vidila Rosalina', 'vidila.suhendarsah@gmail.com', '7OoLZlSr7kg=', 'Perempuan', 'Islam', 'GCI D1/5', '2018-11-09 12:52:06', 'USR183.jpg', 'Dosen', 'Pengajar'),
('USR184', '11316052', 'Fajar Padilah', 'fviruskomputer@gmail.com', 'UD+RlzbNVrI=', 'Laki-laki', 'Islam', 'Jln TNUK KP. SUKASARI DS. KERTAMUKTI, KEC. SUMUR, KAB. PANDEGLANG - BANTEN', '2018-11-09 13:01:46', 'USR184.jpg', 'Mahasiswa', 'Pelajar'),
('USR185', '11317047', 'Muhammad Rifqi Farhan', 'muhfarhan54@gmail.com', 'vbSdfN7ZQHmjn+S5YVzzDw==', 'Laki-laki', 'Islam', 'Komp GSI Serang', '2018-11-09 13:05:36', 'USR185.jpg', 'Mahasiswa', 'Pelajar'),
('USR186', '11214183', 'Fransyah', 'fransyah10.5@gmail.com', '6QOXRofmlVPYj+4+hgAi2g==', 'Laki-laki', 'Islam', 'Jl.bhayangkara cipocok jaya', '2018-11-09 13:08:30', 'USR186.jpg', 'Mahasiswa', 'Pelajar'),
('USR187', '11111111', 'Troll', 'troll@troll.com', '5aeOzfFfryE=', 'Laki-laki', 'Islam', 'adfa', '2018-11-09 13:13:25', 'USR187.png', 'Mahasiswa', 'Pelajar'),
('USR188', '11218136', 'Ricky Eka Ramadhan', 'rickyllo181200@gmail.com', 'p06DRWRasoYGd7cvJA6W2Q==', 'Laki-laki', 'Islam', 'Serang,kragilan,ciujung damai blok c17 no11', '2018-11-09 13:15:27', 'USR188.jpg', 'Mahasiswa', 'Pelajar'),
('USR189', '11216173', 'Suhendra Saepudin', 'suhendrasaepudin@gmail.com', 'soozx2nhzv9meTuZYmNlRA==', 'Laki-laki', 'Islam', 'Menes, Pandeglang, Banten', '2018-11-09 13:22:16', 'USR189.jpg', 'Mahasiswa', 'Pelajar'),
('USR190', '11218072', 'Hanif Izzuddin', 'yuukicrystal219101@gmail.com', '4RkUh/WpOaw=', 'Laki-laki', 'Islam', 'permata banjar asri b7 no 23 cipocok jaya', '2018-11-09 13:22:55', 'USR190.jpg', 'Mahasiswa', 'Pelajar'),
('USR191', '112181401', 'Rio Jerryyan Putra ', 'riojp248@gmail.com', 'X73eHAuyFOs=', 'Laki-laki', 'Islam', 'Komplek Bumi Serang baru serang banten', '2018-11-09 13:24:58', 'USR191.jpg', 'Mahasiswa', 'Pelajar'),
('USR192', '11218015', 'Alfin Fauzan', 'alfinfauzan173@gmail.com', 'L850VdLBXoxUgnbR576m3g==', 'Laki-laki', 'Islam', 'Pandeglang labuan', '2018-11-09 13:27:07', 'USR192.jpg', 'Mahasiswa', 'Pelajar'),
('USR193', '112181061', 'Muhamad Restu Dayani', 'muhamadrestudayani@gmail.com', 'aOBBYGby62E=', 'Laki-laki', 'Islam', 'Ciruas', '2018-11-09 13:29:09', 'USR193.jpg', 'Mahasiswa', 'Pelajar'),
('USR194', '11316036', 'Ferli Setiawan', 'ferlisetiawanxii@gmail.com', 'krOwaEQGU8tGI6JjtPUBFQ==', 'Laki-laki', 'Islam', 'Komp tumaritis indah blok D.1 cipocok jaya, Serang, Banten', '2018-11-09 13:32:19', 'USR194.jpg', 'Mahasiswa', 'Pelajar'),
('USR195', '11218057', 'fajarotun nufus', 'fajarotunnufus15@yahoo.com', '2HJBZ2MjYatmeTuZYmNlRA==', 'Perempuan', 'Islam', 'kramat', '2018-11-09 13:39:12', 'USR195.jpg', 'Mahasiswa', 'Pelajar'),
('USR196', '112180281', 'Asep Hidayatullah ', 'asepht00@gmail.com', 'VpjsfVgV17rlXiA4zlrtDw==', 'Laki-laki', 'Islam', 'Ds. Curuglanglang Kp. Sudimara Kec. Munjul Kab. Pandeglang Prov. Banten ', '2018-11-09 13:45:35', 'USR196.jpg', 'Mahasiswa', 'Pelajar'),
('USR197', '11210001', 'Agus Safaat', 'tes1@gmail.com', 'clYKLKWh/Ds=', 'Laki-laki', 'Islam', 'Serang banten', '2018-11-09 13:47:48', 'USR197.jpg', 'Mahasiswa', 'Pelajar'),
('USR198', '11216073', 'Luthfi', 'luthfisekawan@gmail.com', 'nV+OZCaVqHY=', 'Laki-laki', 'Islam', 'Kp.seupang kec.sajira kab.lebak', '2018-11-09 13:50:58', 'USR198.jpg', 'Mahasiswa', 'Pelajar'),
('USR199', '112180712', 'Haerunisa', 'muhammad.haeru@gmail.com', 'p2oiSjUdtc//+FUt9R7p/Q==', 'Laki-laki', 'Islam', 'Barokah Cilegon Banten', '2018-11-09 13:56:21', 'USR199.jpg', 'Mahasiswa', 'Pelajar'),
('USR200', '11218046', 'Dimas Sultan Arifiandy', 'samidnatlus@gmail.com', 'XcCuM9omEpAvPVjWtXOjnw==', 'Laki-laki', 'Islam', 'Bukit Gading Blok M No.16 Balaraja', '2018-11-09 14:03:07', 'USR200.jpg', 'Mahasiswa', 'Pelajar'),
('USR201', '11218077', 'Idad Musyadad', 'musyadad26@gmail.com', 'HdlULl3QjjD1abhNt412mg==', 'Laki-laki', 'Islam', 'jln raya cipanas km 11 perum korpri kab. lebak', '2018-11-09 14:06:19', 'USR201.jpg', 'Mahasiswa', 'Pelajar'),
('USR202', '11216058', 'Diat Kusnaedi', 'jhangkhiskhan@gmail.com', 'CDRQ/JLp2TE=', 'Laki-laki', 'Islam', 'Serang Banten', '2018-11-09 14:07:25', 'USR202.jpg', 'Mahasiswa', 'Pelajar'),
('USR203', '11218109', 'Muhammad Dhaiful Imam', 'mdhaifulimam@gmail.com', 'J3MdZm3TP/4DKcB/kDWK2A==', 'Laki-laki', 'Islam', 'Komp Pu kejaksaan Negeri serang sempu', '2018-11-09 14:09:17', 'USR203.jpg', 'Mahasiswa', 'Pelajar'),
('USR204', '11217156', 'Mochamad Farhan Ardi Maulana', 'farhanardi89@example.com', 'EkGvTufucy+V4k4KnrFljQ==', 'Laki-laki', 'Islam', 'Jl.Jiwantaka I', '2018-11-09 14:10:02', 'USR204.JPG', 'Mahasiswa', 'Pelajar'),
('USR205', '11216092', 'Parkiyah', 'parkiyah2@gmail.com', '/EplPVQqaMN08u/PHhTaWA==', 'Perempuan', 'Islam', 'Ciruas', '2018-11-09 14:11:59', 'USR205.jpg', 'Mahasiswa', 'Pelajar'),
('USR206', '11218087', 'Lutfi Hamdan Eka Putra', 'lutfihamdanekaputra@gmail.com', 'lN1wJxchW84SI8uNVEPI0A==', 'Laki-laki', 'Islam', 'Perumahan Bukit Pelamunan Permai Blok B2 No. 22 Rt. 09 Rw. 03 Kramatwatu, Serang, Banten', '2018-11-09 14:13:08', 'USR206.jpg', 'Mahasiswa', 'Pelajar'),
('USR207', '11215166', 'Nurul Muhgidin', 'nurulmuhyidin31@gmail.com', '4c7on82Ze5xmeTuZYmNlRA==', 'Laki-laki', 'Islam', 'Kaujon Tengah', '2018-11-09 14:17:12', 'USR207.jpg', 'Mahasiswa', 'Pelajar'),
('USR208', '11217099', 'Verdy Yusufrani', 'verdy66@gmail.com', 'JDBq1ghMzfawZhN8KhlpOw==', 'Laki-laki', 'Islam', 'Jl. Raya Anyar-Sirih KP.Bojong NO.1 RT.001/ RW.004 Des.Cikoneng Kec.Anyar Kab.Serang- Banten 42166 (depan menara mercusuar bojong)', '2018-11-09 14:20:07', 'USR208.jpg', 'Mahasiswa', 'Pelajar'),
('USR209', '11217146', 'Gilang Gialdi', 'gilanggialdi@gmail.com', 'rL5ztNMO+cNnuzNElPFB0g==', 'Laki-laki', 'Islam', 'Cilegon', '2018-11-09 14:23:41', 'USR209.jpg', 'Mahasiswa', 'Pelajar'),
('USR210', '11218038', 'Carina Cahyani', 'carinacahyani08@gmail.com', 'FCnSN+V/gEo=', 'Perempuan', 'Islam', 'PCI Blok D 51 No. 12', '2018-11-09 14:28:15', 'USR210.jpg', 'Mahasiswa', 'Pelajar'),
('USR211', '11218045', 'Deylana Afreza', 'deylanaafreza03@gmail.com', 'VpmAEIjM114=', 'Perempuan', 'Kristen', 'Graha Walantaka blok J5/04 RT. 21/05 Kec. Walantaka Kota Serang', '2018-11-09 14:36:06', 'USR211.jpg', 'Mahasiswa', 'Pelajar'),
('USR212', '11218054', 'Fahri Noviar', 'fahri.noviar.ayi@gmail.com', '6aPVclo2+L0UTCjiObwlVg==', 'Laki-laki', 'Islam', 'Jl.Maulana Yusuf, Link.Kubang Lesung, Rt/rw 03/01 Kel.Taman Baru, Kec.Citangkil, Kota Cilegon-Banten', '2018-11-09 14:40:51', 'USR212.jpg', 'Mahasiswa', 'Pelajar'),
('USR213', '11216115 ', 'Imam utomo ', 'imamutomo222@gmail.com', 'G8lXHTdy2SpDmgPRm+Cavg==', 'Laki-laki', 'Islam', 'Graha walantaka blok J7no.09 RT21 RW 05 kel pengampelan Kec walantaka ', '2018-11-09 14:54:31', 'USR213.jpg', 'Mahasiswa', 'Pelajar'),
('USR214', '11216130', 'Gifari Rachman', 'giperchmn@gmail.com', 'BqPVYfmG1Fx08u/PHhTaWA==', 'Laki-laki', 'Islam', 'serang banten', '2018-11-09 14:58:15', 'USR214.jpg', 'Mahasiswa', 'Pelajar'),
('USR215', '11216151', 'Mochammad Mulyadi', 'mochammadmulyadi182@gmail.com', 'gV391lBr552uZEbLQqQibA==', 'Laki-laki', 'Islam', 'Kompleks Bumi Krakatau Permai Blok VE/9A', '2018-11-09 14:59:12', 'USR215.jpg', 'Mahasiswa', 'Pelajar'),
('USR216', '12218044', 'Deny Nikmatul Rosita', 'sita.denyy@gmail.com', 'aSwND4FvlQF1qxAXqP+GGA==', 'Perempuan', 'Islam', 'asrama brimob', '2018-11-09 15:00:22', 'USR216.jpg', 'Mahasiswa', 'Pelajar'),
('USR217', '11216094', 'Iqbal dwi Putranto', 'iqbaldwi.putranto11@yahoo.co.id', 'vSfZoSDu4L4=', 'Laki-laki', 'Islam', 'Komplek Bpp Sankyu Blok D6/16 Kramatwatu  serang banten', '2018-11-09 15:02:27', 'USR217.jpg', 'Mahasiswa', 'Pelajar'),
('USR218', '11216040', 'Rijal Fauji', 'rijalfauji11@gmail.com', 'miB/x22i8go3sSx+9WzPTQ==', 'Laki-laki', 'Islam', 'serang', '2018-11-09 15:03:44', 'USR218.png', 'Mahasiswa', 'Pelajar'),
('USR219', '11216165', 'Tb reka ramanda', 'rekaramanda1995@gmail.com', 'HqOaoI+FYxJsJH32mijjfQ==', 'Laki-laki', 'Islam', 'munjul pandeglang banten', '2018-11-09 15:04:58', 'USR219.jpg', 'Mahasiswa', 'Pelajar'),
('USR220', '11216064', 'Thyanda Gusti Rozza', 'thyanda12@gmail.com', 'GbTT5TrmXXk=', 'Laki-laki', 'Islam', 'Cisoka', '2018-11-09 15:05:59', 'USR220.jpg', 'Mahasiswa', 'Pelajar'),
('USR221', '11216157', 'ALDY PRATAMA ANSORY', 'aldibombastix@ymail.com', 'Cj1GJqxKInyV4k4KnrFljQ==', 'Laki-laki', 'Islam', 'kaloran brimob', '2018-11-09 15:07:31', 'USR221.jpg', 'Mahasiswa', 'Pelajar'),
('USR222', '11216028', 'RIFKI M ZAENI', 'rifkyzaeni@gmail.com', 'gE68fR7mgZNGI6JjtPUBFQ==', 'Laki-laki', 'Islam', 'Kp.Lebakcempaka RT/RW 005/002, Ds.Gunungkencana, Kec. Gunungkencana, Kab. Lebak, Prov. Banten, kode ps 42354', '2018-11-09 15:08:39', 'USR222.jpg', 'Mahasiswa', 'Pelajar'),
('USR223', '11216007', 'asep febri lesmana', 'febriladonasher2@gmail.com', 'lesmanaaa', 'Laki-laki', 'Islam', 'jakarta timur', '2018-11-09 15:10:18', 'USR223.jpg', 'Mahasiswa', 'Pelajar'),
('USR224', '11215046', 'tb moch rizky s', 'tbtugas94@gmail.com', 'JSMLw2/wLM8sqypNGD2IGA==', 'Laki-laki', 'Islam', 'kp batubolong,desa selaraja,kec warunggunung', '2018-11-09 15:10:49', 'USR224.png', 'Mahasiswa', 'Pelajar'),
('USR225', '11215109', 'Aldi Wahyudi', 'aldistroomp11@gmail.com', 'vs0XrVQldf35kCPCIxSvww==', 'Laki-laki', 'Islam', 'rangkasbitung banten lama', '2018-11-09 15:11:43', 'USR225.jpg', 'Mahasiswa', 'Pelajar'),
('USR226', '11217025', 'Bagas Rizayanto', 'brizayanto@gmail.com', 'xBu03z/K7MQleeabKakbWA==', 'Laki-laki', 'Islam', 'Taman Banjar Agung Indah F16/14 RT06/RW09', '2018-11-09 15:14:00', 'USR226.jpg', 'Mahasiswa', 'Pelajar'),
('USR227', '11217134', 'Christopher Glenn', 'mahimegln@gmail.com', '5i0vGvip9qg=', 'Laki-laki', 'Kristen', 'Kasemen Serang', '2018-11-09 15:16:54', 'USR227.jpg', 'Mahasiswa', 'Pelajar'),
('USR228', '11216141', 'RifkiNurrachman', 'rifky029.rn@gmail.com', 'Cj1GJqxKInyV4k4KnrFljQ==', 'Laki-laki', 'Islam', 'serang banten', '2018-11-09 15:19:40', 'USR228.jpg', 'Mahasiswa', 'Pelajar'),
('USR229', '11217005', 'Hajiji Saputra', 'Hajijipkp@gmail.com', 'NQ9kcizY2u+x0KVTqMg6eA==', 'Laki-laki', 'Islam', 'Serang Banten', '2018-11-09 15:29:57', 'USR229.jpg', 'Mahasiswa', 'Pelajar'),
('USR230', '22222222', 'Dosen', 'dosen@dosen.com', 'r6a1I3quR10=', 'Laki-laki', 'Islam', 'adfa', '2018-11-09 15:39:21', 'USR230.png', 'Dosen', 'Pengajar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD KEY `kd_kelas` (`kd_kelas`),
  ADD KEY `kd_user` (`kd_user`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`),
  ADD KEY `kd_user` (`kd_user`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`kd_komen`),
  ADD KEY `kd_user` (`kd_user`),
  ADD KEY `kd_upload` (`kd_upload`);

--
-- Indexes for table `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`id_masukan`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`kd_upload`),
  ADD KEY `kd_kelas` (`kd_kelas`),
  ADD KEY `kd_user` (`kd_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masukan`
--
ALTER TABLE `masukan`
  MODIFY `id_masukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anggota_ibfk_2` FOREIGN KEY (`kd_user`) REFERENCES `user` (`kd_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kd_user`) REFERENCES `user` (`kd_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`kd_user`) REFERENCES `user` (`kd_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`kd_upload`) REFERENCES `upload` (`kd_upload`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upload_ibfk_2` FOREIGN KEY (`kd_user`) REFERENCES `user` (`kd_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
