-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2019 at 08:32 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cv_rajawali`
--

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE IF NOT EXISTS `penumpang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(10) NOT NULL,
  `no_plat` varchar(12) NOT NULL,
  `nama_penumpang` varchar(25) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `harga` int(10) NOT NULL,
  `status_pembayaran` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id`, `no_registrasi`, `no_plat`, `nama_penumpang`, `tujuan`, `tanggal_berangkat`, `harga`, `status_pembayaran`) VALUES
(4, 'RJ-1', 'BK 4523 VA', 'Ratna Sari', 'Lima Puluh', '2019-03-31', 45000, 'Bayar Ditempat'),
(5, 'RJ-2', 'BK 9012 BA', 'Octarina Siregar', 'Tebing Tinggi', '2019-03-31', 37000, 'Bayar Ditempat'),
(6, 'RJ-3', 'BK 2390 VA', 'Yulita Yulan Sari', 'Tebing Tinggi', '2019-03-31', 37000, 'Lunas'),
(7, 'RJ-4', 'BK 2390 VA', 'Melinda Sari', 'Medan', '2019-03-31', 45000, 'Lunas'),
(8, 'RJ-5', 'BK 2390 VA', 'Apinda Permata Sari', 'Medan', '2019-03-31', 45000, 'Bayar Ditempat'),
(9, 'RJ-6', 'BK 2245 VAD', 'Indah Lestari', 'Lubuk Pakam', '2019-04-01', 41000, 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('Ratna_Sari', 'stmikroyal', 'ratnasariroyal@gmail.com', 'Ratna Sari', 1, 'Staff Administrasi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
