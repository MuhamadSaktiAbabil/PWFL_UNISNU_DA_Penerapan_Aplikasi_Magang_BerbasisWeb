-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 01:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `alamat`, `no_hp`) VALUES
(1, 'saya', 'aku', 'kamu'),
(2, 'muhammad', 'jepara', '1'),
(3, '1', '1', '1'),
(4, '2', '2', '2'),
(5, '3', '3', '3'),
(6, '4', '4', '4'),
(7, '5', '5', '5'),
(8, '6', '6', '6'),
(9, '7', '7', '7'),
(10, '8', '8', '8'),
(11, '9', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `id_mahasiswa` varchar(20) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `nama_mahasiswa` varchar(20) DEFAULT NULL,
  `no_hp_lama` varchar(20) DEFAULT NULL,
  `no_hp_baru` varchar(20) DEFAULT NULL,
  `tgl_diubah` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mahasiswa` varchar(20) NOT NULL,
  `nomer_hp` varchar(12) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `nama_kp` varchar(30) NOT NULL,
  `alamat_kp` varchar(30) NOT NULL,
  `no_kp` varchar(12) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama_mahasiswa`, `nomer_hp`, `angkatan`, `nama_kp`, `alamat_kp`, `no_kp`, `status`) VALUES
(38, '1', '1', '1', '2016', 'kosong', 'kosong', 'kosong', 'belum');

--
-- Triggers `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `before_update` BEFORE UPDATE ON `mahasiswa` FOR EACH ROW BEGIN
    INSERT INTO log
    set id_mahasiswa = OLD.id_mahasiswa,
	nim = OLD.nim,
	nama_mahasiswa = OLD.nama_mahasiswa,
	no_hp_lama=old.nomer_hp,
    	no_hp_baru=new.nomer_hp,
	tgl_diubah = NOW(); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil`
-- (See below for the actual view)
--
CREATE TABLE `tampil` (
);

-- --------------------------------------------------------

--
-- Structure for view `tampil`
--
DROP TABLE IF EXISTS `tampil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil`  AS  (select `mahasiswa`.`id_mahasiswa` AS `id_mahasiswa`,`mahasiswa`.`nim` AS `nim`,`mahasiswa`.`nama_mahasiswa` AS `nama_mahasiswa`,`mahasiswa`.`jenis_kelamin` AS `jenis_kelamin`,`mahasiswa`.`alamat` AS `alamat`,`mahasiswa`.`nomer_hp` AS `nomer_hp` from `mahasiswa`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
