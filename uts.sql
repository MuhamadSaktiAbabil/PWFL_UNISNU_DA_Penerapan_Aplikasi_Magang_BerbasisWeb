-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 06:27 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

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
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_pinjam` int(11) NOT NULL,
  `tgl_pencatatan` datetime NOT NULL,
  `id_mahasiswa` int(4) NOT NULL,
  `id_dosen` int(4) NOT NULL,
  `nama_kp` varchar(50) NOT NULL,
  `alamat_kp` varchar(50) NOT NULL,
  `no_kp` varchar(12) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_pinjam`, `tgl_pencatatan`, `id_mahasiswa`, `id_dosen`, `nama_kp`, `alamat_kp`, `no_kp`, `status`) VALUES
(21, '2019-12-26 10:43:55', 15, 15, 'DKPP', 'Pendopo Jepara', '123', ''),
(22, '2019-12-26 10:53:07', 16, 15, 'DKPP', 'Pendopo Jepara', '123', ''),
(23, '2019-12-30 18:15:21', 17, 15, 'DKPP', 'Pendiopo Kabupaten', '123', ''),
(24, '2019-12-30 18:15:43', 18, 16, 'DKPP', 'Pendiopo Kabupaten', '123', ''),
(25, '2019-12-30 18:16:28', 19, 16, 'DKPP', 'Pendopo Jepara', '123', ''),
(26, '2019-12-30 18:16:49', 20, 16, 'DKPP', 'Pendopo Jepara', '123', ''),
(27, '2019-12-30 18:17:05', 21, 15, 'DKPP', 'Pendopo Jepara', '123', ''),
(28, '2019-12-30 18:17:19', 22, 16, 'DKPP', 'Pendopo Jepara', '123', ''),
(29, '2019-12-30 18:17:34', 23, 16, 'DKPP', 'Pendopo Jepara', '123', ''),
(30, '2019-12-30 18:17:48', 24, 16, 'DPRD', 'Saripan Jepara', '124', ''),
(31, '2019-12-30 18:18:17', 25, 16, 'DPRD', 'Saripan Jepara', '124', '');

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
(15, 'Nur Aeni Widiastuti', 'Kudus', '12345'),
(16, 'Akhmad Khanif Zyen', 'Kauman', '123');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(5) NOT NULL,
  `nama_mahasiswa` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `angkatan` varchar(30) NOT NULL,
  `nim` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `jenis_kelamin`, `no_telp`, `alamat`, `angkatan`, `nim`) VALUES
(16, 'Ibrahim Dasuki', 'L', '0895422655006', 'Kuwasen', '2016', '161240000550'),
(15, 'Muhammad Azhar Salim', 'L', '082221293118', 'Potroyudan Jepara', '2016', '161240000590'),
(17, 'Hikam Ihsanillah', 'L', '089562700942', 'Kauman, Jepara', '2016', '161240000503'),
(18, 'Diki Daryono', 'L', '089400123580', 'Kalongan ', '2016', '161240000500'),
(19, 'Farid Hernando', 'L', '0896657000899', 'Bondo', '2016', '161240000501'),
(20, 'Ana Nurul Fatmawati', 'P', '089663113800', 'Bandengan', '2016', '161240000566'),
(21, 'Sigma Luxvian', 'P', '081225424799', 'Cepogo', '2016', '161240000321'),
(22, 'Catur Juliaming R.P.', 'L', '089541227561', 'Pengkol', '2016', '161240000571'),
(23, 'Muhamad Sakti Ababil', 'L', '089322590095', 'Pengkol', '2016', '161240000558'),
(24, 'Yusril Rosyadi', 'L', '081225678119', 'Tahunan', '2016', '161240000601'),
(25, 'Walia Maulana R.', 'L', '088751338701', 'Pecangaan', '2016', '161240000548');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

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
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
