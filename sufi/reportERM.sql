-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2019 at 10:30 
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reportERM`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `id` int(11) NOT NULL,
  `nik` int(50) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `jumlah_hari_kerja` varchar(10) NOT NULL,
  `jumlah_kehadiran` varchar(10) NOT NULL,
  `jumlah_absen` varchar(10) NOT NULL,
  `gaji` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nik`, `nama_karyawan`, `jumlah_hari_kerja`, `jumlah_kehadiran`, `jumlah_absen`, `gaji`) VALUES
(1, 1234567834, 'taufiq', '45', '44', '33', '4000000'),
(3, 43231, 'humam', '19', '23', '28', '3500000'),
(5, 235, 'tasdv', '34', '34', '23', '5000000');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'AdminSufi', 'admin@gmail.com', 'passwordadmin234');

-- --------------------------------------------------------

--
-- Table structure for table `cao`
--

CREATE TABLE IF NOT EXISTS `cao` (
  `id` int(10) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cao`
--

INSERT INTO `cao` (`id`, `nama_file`, `tanggal`, `file`) VALUES
(1, '45tt', '2019-04-03', 'example.xls'),
(2, '345', '2019-04-03', 'example.xls');

-- --------------------------------------------------------

--
-- Table structure for table `erm`
--

CREATE TABLE IF NOT EXISTS `erm` (
  `id_erm` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `lain_lain` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erm`
--

INSERT INTO `erm` (`id_erm`, `nama`, `alamat`, `jabatan`, `telepon`, `usia`, `jenis_kelamin`, `status`, `lain_lain`) VALUES
(86, 'Taufiq', 'Ciledug hsdfknl sef slkdjfoiwxzdfsvs sjfhweusfcbuehf  vhsdfkjs', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(87, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(88, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(89, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(90, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(91, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(92, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(93, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(94, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(95, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(96, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(97, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(98, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo'),
(99, 'Taufiq', 'Ciledug', 'oo', 'oo', 'oo', 'oo', 'oo', 'oo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cao`
--
ALTER TABLE `cao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `erm`
--
ALTER TABLE `erm`
  ADD PRIMARY KEY (`id_erm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cao`
--
ALTER TABLE `cao`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `erm`
--
ALTER TABLE `erm`
  MODIFY `id_erm` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
