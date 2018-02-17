-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 10:13 AM
-- Server version: 10.1.10-MariaDB-log
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroommobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `Id_Mobil` varchar(10) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Tipe` varchar(20) NOT NULL,
  `Pintu` int(11) NOT NULL,
  `Tahun_Produksi` varchar(4) NOT NULL,
  `Negara_Pembuat` varchar(20) NOT NULL,
  `Jenis_Produksi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`Id_Mobil`, `Merk`, `Model`, `Tipe`, `Pintu`, `Tahun_Produksi`, `Negara_Pembuat`, `Jenis_Produksi`) VALUES
('M10001', 'Toyota', 'All New Avanza', '1.5 Veloz A/T', 5, '2011', 'Jepang', 'CKD'),
('M10002', 'Toyota', 'All New Avanza', '1.5 Veloz M/T', 5, '2011', 'Jepang', 'CBU'),
('M20001', 'Honda', 'All New City', 'VTEC 1.5 M/T', 4, '2010', 'Jepang', 'CKD'),
('M20002', 'Honda', 'All New Accord', '3.5L V6 A/T', 4, '2010', 'Jepang', 'CKD'),
('M30001', 'Audi', 'A5', '3.2 FSI Quattro', 4, '2010', 'Jepang', 'CBU'),
('M40002', 'BMW', '3 Series', '320i Steptronic', 4, '2010', 'Jerman', 'CBU'),
('M6001', 'Kawasaki', 'A4', '1.5 Veloz A/T', 4, '2017', 'Jepang', 'CBU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`Id_Mobil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
