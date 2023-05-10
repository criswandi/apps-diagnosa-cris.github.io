-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2017 at 04:11 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtunagrahita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Namaadmin` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Namaadmin`, `Username`, `password`) VALUES
('aaa', 'aaa', 'aaa'),
('Ade Dian Fitria', 'ade', 'admin'),
('sullivan', 'sullivan', 'keren');

-- --------------------------------------------------------

--
-- Table structure for table `basispengetahuan`
--

CREATE TABLE IF NOT EXISTS `basispengetahuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Kodekelainan` varchar(10) NOT NULL,
  `Kodegejala` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`id`, `Kodekelainan`, `Kodegejala`) VALUES
(2, 'A ', '5'),
(3, 'A ', '9'),
(4, 'A ', '12'),
(5, 'A ', '13'),
(6, 'A ', '14'),
(7, 'A ', '15'),
(8, 'B ', '1'),
(9, 'B ', '6'),
(10, 'B ', '8'),
(11, 'B ', '9'),
(12, 'B ', '11'),
(13, 'B ', '13'),
(14, 'B ', '15'),
(15, 'C ', '3'),
(16, 'C ', '4'),
(17, 'C ', '7'),
(18, 'C ', '9'),
(19, 'C ', '10'),
(20, 'C ', '15'),
(21, 'A ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `Kodegejala` int(10) NOT NULL,
  `Namagejala` varchar(250) NOT NULL,
  `Nilaidensitas` varchar(10) NOT NULL,
  PRIMARY KEY (`Kodegejala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`Kodegejala`, `Namagejala`, `Nilaidensitas`) VALUES
(1, 'Umur mental 8-9 tahun', '0.8'),
(2, 'Umur mental 3-8 tahun', '0.8'),
(3, 'Umur mental 0-3 tahun', '0.8'),
(4, 'Tampilan fisik yang berbeda (cacat fisik)', '0.9'),
(5, 'Mampu didik dan mampu latih', '0.75'),
(6, 'Mampu latih, tidak mampu didik', '0.75'),
(7, 'Tidak mampu didik dan latih', '0.75'),
(8, 'Tergantung dengan orang lain namun mampu membedaka', '0.6'),
(9, 'Mudah Lupa', '0.65'),
(10, 'Sering mengeluarkan air liur', '0.6'),
(11, 'Kemampuan bicara kurang namun dapat mengutarakan k', '0.55'),
(12, 'Dapat meminta tolong saat kesulitan', '0.5'),
(13, 'Merespon perintah sederhana', '0.45'),
(14, 'Menerangkan peristiwa sederhana', '0.4'),
(15, 'Kurang dapat mengendalikan diri (Emosional)', '0.35');

-- --------------------------------------------------------

--
-- Table structure for table `kelainan`
--

CREATE TABLE IF NOT EXISTS `kelainan` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Kodekelainan` varchar(1) NOT NULL,
  `Namakelainan` varchar(20) NOT NULL,
  `Solusi` text NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kelainan`
--

INSERT INTO `kelainan` (`No`, `Kodekelainan`, `Namakelainan`, `Solusi`) VALUES
(1, 'A', 'Tunagrahita Ringan', '  ewrwmvkbj\r\n'),
(2, 'B', 'Tunagrahita Sedang', 'as'),
(3, 'C', 'Tunagrahita Berat', 'SAf');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Kodekelainan` varchar(1) NOT NULL,
  `Namakelainan` varchar(20) NOT NULL,
  `Solusi` text NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`No`, `Kodekelainan`, `Namakelainan`, `Solusi`) VALUES
(6, 'A', 'Tunagrahita Ringan', '  '),
(7, 'B', 'Tunagrahita Sedang', ' '),
(8, 'C', 'Tunagrahita Berat', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `nama` varchar(20) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`nama`, `nilai`) VALUES
('A', 0.925),
('AB', 0.03375),
('ABC', 0.04125);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
