-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 07:09 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animeee`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `no` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_tlpn` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`no`, `user`, `email`, `password`, `nama`, `no_tlpn`, `alamat`) VALUES
(1, 'Bustomi', 'tomblok.id@gmail.com', 'elangputih', 'bustomiii', '085369578510', 'Kampung Baru Bandar Lampung'),
(5, 'fuads', 'assd', 'aaa', 'aaa', 'aaa', 'aaa'),
(7, 'b', 'b', 'b', 'b', 'b', 'b'),
(8, 'b', 'b', 'b', 'b', 'b', 'b'),
(9, 'l', 'l', 'l', 'l', 'l', 'l'),
(10, 'sigit', 'sigitt53@gmail.com', 'sigit', '', '', ''),
(11, 'tro', '', '', '', '', ''),
(12, 'z', 'z', 'z', 'z', 'z', 'z'),
(13, 'm', 'm', 'm', 'm', 'm', 'm'),
(14, 'm', 'm', 'm', 'm', 'm', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `animeee`
--

CREATE TABLE `animeee` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `animeee`
--
ALTER TABLE `animeee`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `animeee`
--
ALTER TABLE `animeee`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
