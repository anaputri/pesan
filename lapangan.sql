-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 04:26 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ria', '123');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_lapangan`
--

CREATE TABLE `jenis_lapangan` (
  `id` int(11) NOT NULL,
  `jns_lapangan` varchar(20) NOT NULL,
  `harga_perjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_lapangan`
--

INSERT INTO `jenis_lapangan` (`id`, `jns_lapangan`, `harga_perjam`) VALUES
(1, 'Matras', 150000),
(6, 'Rumput', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `sewa_lapangan`
--

CREATE TABLE `sewa_lapangan` (
  `id` int(11) NOT NULL,
  `nama_tim` varchar(20) NOT NULL,
  `tgl_booking` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `noTelp` varchar(12) NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `id_lapangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa_lapangan`
--

INSERT INTO `sewa_lapangan` (`id`, `nama_tim`, `tgl_booking`, `jam_masuk`, `jam_keluar`, `noTelp`, `tgl_bayar`, `harga`, `id_lapangan`) VALUES
(1, 'horizone', '2012-02-02', '08:00:00', '09:00:00', '082230166126', '2012-02-02', 150000, '1'),
(3, 'Merah1', '2012-02-05', '19:00:00', '20:00:00', '082230167543', NULL, NULL, '1'),
(4, 'Merah Putih1', '2012-05-02', '08:00:00', '09:00:00', '082230166134', NULL, NULL, '1'),
(6, 'lady benere dewe', '2012-02-02', '08:00:00', '09:00:00', '082230166123', '2012-02-02', 100000, '2'),
(7, 'DG', '2012-02-02', '08:00:00', '09:00:00', '08155555555', '2012-02-02', 100000, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_lapangan`
--
ALTER TABLE `jenis_lapangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewa_lapangan`
--
ALTER TABLE `sewa_lapangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lapangan` (`id_lapangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_lapangan`
--
ALTER TABLE `jenis_lapangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sewa_lapangan`
--
ALTER TABLE `sewa_lapangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jenis_lapangan`
--
ALTER TABLE `jenis_lapangan`
  ADD CONSTRAINT `jenis_lapangan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `sewa_lapangan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
