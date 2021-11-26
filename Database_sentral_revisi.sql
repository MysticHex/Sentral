-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2021 at 09:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_kilo`
--

CREATE TABLE `pesanan_kilo` (
  `nama` varchar(255) NOT NULL,
  `Kilopesanan` int(50) NOT NULL,
  `tanggal_masuk` varchar(255) NOT NULL,
  `tanggal_keluar` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Belum Dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_sat`
--

CREATE TABLE `pesanan_sat` (
  `nama` varchar(255) NOT NULL,
  `tanggal_masuk` varchar(255) NOT NULL,
  `tgl_ambil` varchar(255) NOT NULL,
  `bedcover_1` int(50) NOT NULL,
  `bedcover_2` int(50) NOT NULL,
  `pakaian_b` int(50) NOT NULL,
  `pakaian_jins` int(50) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Belum Dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan_kilo`
--
ALTER TABLE `pesanan_kilo`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `pesanan_sat`
--
ALTER TABLE `pesanan_sat`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
