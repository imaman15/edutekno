-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 08:21 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edutekno`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `kd_kelas` varchar(10) NOT NULL,
  `kd_user` varchar(10) NOT NULL,
  `tgl_masuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`kd_kelas`, `kd_user`, `tgl_masuk`) VALUES
('GwqgHr', 'USR002', '2018-05-22 08:14:26'),
('GwqgHr', 'USR003', '2018-05-22 08:18:02'),
('UwnjEX', 'USR004', '2018-05-22 11:17:54'),
('gCutVz', 'USR007', '2018-05-22 11:55:09'),
('gCutVz', 'USR008', '2018-05-22 11:59:54'),
('oWEKfp', 'USR010', '2018-05-22 14:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
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
('gCutVz', 'PEMOGRAMAN KOMPUTER A5', 'Teknik informatika', '#e50303', 'USR007'),
('GwqgHr', 'Pemrograman Web II', 'TI/IV/A3', '#de0909', 'USR002'),
('oWEKfp', 'Pemogramman Web II', 'Teknik Informatika', '#c70c0c', 'USR010'),
('UwnjEX', 'Coba', 'dsdsdds', '#e00202', 'USR004');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
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
('KOM001', 'tes', '2018-05-22 08:32:05', 'USR003', 'FUP002'),
('KOM002', 'tes2', '2018-05-22 08:32:39', 'USR002', 'FUP002'),
('KOM003', 'Maaf bu ini tugasnya seperti ini ?', '2018-05-22 12:06:57', 'USR008', 'FUP005'),
('KOM004', 'Ini panduannya ya bu', '2018-05-22 12:07:15', 'USR008', 'FUP004'),
('KOM005', 'Tes', '2018-05-22 12:10:00', 'USR008', 'FUP005'),
('KOM006', 'Tes', '2018-05-22 12:10:39', 'USR008', 'FUP005'),
('KOM007', 'Ajshhss', '2018-05-22 12:11:11', 'USR008', 'FUP005'),
('KOM008', 'Tes ', '2018-05-22 14:23:06', 'USR011', 'FUP006'),
('KOM009', 'Operasi perhitungan yang simple, mudah dipahami.', '2018-06-26 12:18:40', 'USR002', 'FUP007');

-- --------------------------------------------------------

--
-- Table structure for table `masukan`
--

CREATE TABLE IF NOT EXISTS `masukan` (
  `id_masukan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masukan`
--

INSERT INTO `masukan` (`id_masukan`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'asd', 'asd@a', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
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
('FUP001', '', 'Selamat datang Imam Agustiann di kelas Pemrograman Web II. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_HL.docx', '2018-05-22 08:14:26', 'GwqgHr', 'USR001', 'Catatan'),
('FUP002', '', 'coba aja', 'FUP002.xlsx', '2018-05-22 08:18:17', 'GwqgHr', 'USR003', 'Catatan'),
('FUP003', '', 'Selamat datang Imaman di kelas Coba. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-05-22 11:17:54', 'UwnjEX', 'USR001', 'Catatan'),
('FUP004', '', 'Selamat datang Nisa Cahyani di kelas PEMOGRAMAN KOMPUTER A5. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-05-22 11:55:09', 'gCutVz', 'USR001', 'Catatan'),
('FUP005', '', 'Tugas doni', 'FUP005.pdf', '2018-05-22 12:04:37', 'gCutVz', 'USR008', 'Catatan'),
('FUP006', '', 'Selamat datang Ardhi Wahyudhi di kelas Pemogramman Web II. Untuk informasi selanjutnya, silahkan mengunduh panduan di bawah ini.', 'Panduan_ET.pptx', '2018-05-22 14:21:10', 'oWEKfp', 'USR001', 'Catatan'),
('FUP007', '', 'Matematika Diskrit 1', 'FUP007.xlsx', '2018-06-26 12:16:32', 'GwqgHr', 'USR003', 'Catatan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
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
  `pekerjaan` text NOT NULL,
  `status` enum('Pengajar','Pelajar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kd_user`, `no_induk`, `nama_user`, `email`, `password`, `jenkel`, `agama`, `alamat`, `tgl_daftar`, `foto`, `pekerjaan`, `status`) VALUES
('USR001', '', 'H-Learn Admin', '', 'ZOxWjarNoUk=', '', '', '', '0000-00-00 00:00:00', 'USR001.png', '', ''),
('USR002', '00', 'Imam Agustiann', 'imamagustiannugraha@gmail.com', 'a0cSZXPDcJU=', 'Laki-laki', 'Islam', 'Pandeglang', '2017-12-28 08:59:05', 'USR002.jpg', 'Dosen', 'Pengajar'),
('USR003', '0', 'Ardhi Wwww', 'ardhi12@gmail.commmmm', 'X0mQ2Db8CAs=', 'Laki-laki', 'Islam', 'Kavling Pelamunan', '2017-12-28 09:07:53', 'USR003.png', 'Web Developer', 'Pelajar'),
('USR004', '111', 'Imaman', 'imamaja@gmail', 'exDBg4Y8miw=', 'Laki-laki', 'Budha', 'Pandeglang', '2018-05-22 04:53:24', 'USR004.png', 'Dosen', 'Pengajar'),
('USR005', '45', 'sdf', 'ad@a', 'AxLz/nkJEGo=', 'Laki-laki', 'Islam', 'asdsad', '2018-05-22 05:06:16', 'USR005.png', 'asd', 'Pelajar'),
('USR006', '90', 'gg', 'qq@sd', 'exDBg4Y8miw=', 'Perempuan', 'Budha', 'jhb', '2018-05-22 10:58:35', 'USR006.png', 'fff', 'Pelajar'),
('USR007', '189678', 'Nisa Cahya Wijaya', 'nisa@gmail.com', 'PXviUZTHfOE=', 'Perempuan', 'Islam', 'Jakarta utara', '2018-05-22 11:45:40', 'USR007.jpg', 'Dosen', 'Pengajar'),
('USR008', '11215217', 'Doni wijaya', 'doni@gmail.com', 'hPIOTjzP9+I=', 'Laki-laki', 'Islam', 'Jakarta Selatan', '2018-05-22 11:55:41', 'USR008.jpg', 'Mahasiswa', 'Pelajar'),
('USR009', '999', 'asd', 'asd@a', 'wMh2d9CZpBs=', 'Laki-laki', 'Kristen', 'mm', '2018-05-22 13:47:07', 'USR009.jpg', 'nn', 'Pengajar'),
('USR010', '11216091', 'Ardhi Wahyudhi', 'ardhiwahyudhi12@gmail.com', '//hVLfUe6f0=', 'Laki-laki', 'Islam', 'Cilegon', '2018-05-22 14:11:12', 'USR010.png', 'Mahasiswa', 'Pengajar'),
('USR011', '11216043', 'Imam', 'imamaja@gmail', '//hVLfUe6f0=', 'Laki-laki', 'Islam', 'Serang', '2018-05-22 14:21:46', 'USR011.jpg', 'Mahasiswa', 'Pelajar');

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
  MODIFY `id_masukan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
