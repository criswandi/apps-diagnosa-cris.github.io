-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 01:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `criswandi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Namaadmin` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Namaadmin`, `Username`, `password`) VALUES
('aaa', 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `basispengetahuan`
--

CREATE TABLE `basispengetahuan` (
  `id` int(11) NOT NULL,
  `Kodekelainan` varchar(10) NOT NULL,
  `Kodegejala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`id`, `Kodekelainan`, `Kodegejala`) VALUES
(35, 'D ', '1'),
(38, 'D ', '2'),
(39, 'D ', '3'),
(40, 'A ', '3'),
(41, 'A ', '4'),
(42, 'A ', '5'),
(43, 'A ', '6'),
(44, 'B ', '6'),
(45, 'B ', '7'),
(46, 'B ', '8'),
(47, 'B ', '9'),
(48, 'C ', '9'),
(49, 'C ', '10'),
(50, 'C ', '11'),
(51, 'C ', '12'),
(52, 'C ', '13');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `Kodegejala` int(10) NOT NULL,
  `Namagejala` varchar(250) NOT NULL,
  `Nilaidensitas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`Kodegejala`, `Namagejala`, `Nilaidensitas`) VALUES
(1, 'Busuk Kecil Cokelat dan Tidak Lunak', '0.5'),
(2, 'Tanama Berkerut', '0.7'),
(3, 'Serangan Kutu Kebul', '0.8'),
(4, 'Busuk Berwarna agak kemerahan dan kecil', '0.6'),
(5, 'Tanaman tampak kusam dan layu', '0.6'),
(6, 'Busuk hitam besar', '0.5'),
(7, 'Hama kutu pada buah', '0.6'),
(8, 'Batang berlendir putih', '0.5'),
(9, 'Batang berair', '0.7'),
(10, 'Terdapat Bintik hitam pada batang', '0.7'),
(11, 'Tanaman berwarna kekuningan', '0.8'),
(12, 'Batang tampak melepuh', '0.5'),
(13, 'Batang tampak bercak hitam', '0.8');

-- --------------------------------------------------------

--
-- Table structure for table `kelainan`
--

CREATE TABLE `kelainan` (
  `No` int(11) NOT NULL,
  `Kodekelainan` varchar(1) NOT NULL,
  `Namakelainan` varchar(20) NOT NULL,
  `Solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelainan`
--

INSERT INTO `kelainan` (`No`, `Kodekelainan`, `Namakelainan`, `Solusi`) VALUES
(2, 'A', 'Antraknosa', 'Pemupukkan'),
(3, 'B', 'Mosaik', 'Pemupukkan'),
(4, 'C', 'Busuk Hitam', '  Pemotong Batang Busuk'),
(6, 'D', 'Busuk cokelat', 'Pemotongan tanaman yang telah terserang busuk cokelat, kemudian berikan basamid pada lubang bekas pemotongan tersebut');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `No` int(11) NOT NULL,
  `Kodekelainan` varchar(1) NOT NULL,
  `Namakelainan` varchar(20) NOT NULL,
  `Solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `temp` (
  `nama` varchar(20) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`nama`, `nilai`) VALUES
('D', 0.311927),
('A', 0.622018),
('AD', 0.0440367),
('AB', 0.0110092),
('ABCD', 0.0110092);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `basispengetahuan`
--
ALTER TABLE `basispengetahuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`Kodegejala`);

--
-- Indexes for table `kelainan`
--
ALTER TABLE `kelainan`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basispengetahuan`
--
ALTER TABLE `basispengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `kelainan`
--
ALTER TABLE `kelainan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
