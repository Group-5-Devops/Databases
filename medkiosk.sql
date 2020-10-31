-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 11:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medkiosk`
--

-- --------------------------------------------------------

--
-- Table structure for table `med`
--

CREATE TABLE `med` (
  `id` int(11) NOT NULL,
  `MNAME` varchar(255) NOT NULL,
  `MDES` varchar(255) NOT NULL,
  `MUSE` varchar(255) NOT NULL,
  `MTYPE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `med`
--

INSERT INTO `med` (`id`, `MNAME`, `MDES`, `MUSE`, `MTYPE`) VALUES
(3, 'Paracetamol', 'Biogesic 500mg', 'Relief of fever', 'TABLET'),
(6, 'test', 'test', 'test', 'TABLET'),
(7, 'Paracetamol', 'Biogesic 300mg', 'Relief of fever', 'CAPSULE');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `MID` int(255) NOT NULL,
  `MNAME` varchar(255) NOT NULL,
  `MDES` varchar(255) NOT NULL,
  `MUSE` varchar(255) NOT NULL,
  `MTYPE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`MID`, `MNAME`, `MDES`, `MUSE`, `MTYPE`) VALUES
(2020000000, 'Mefenamic', 'Dolfenal 250mg.', 'Headache, toothache etc.', 'Syrup'),
(2020000001, 'PAracetamol', 'TEST', 'Relief of fever', 'Syrup'),
(2020000012, 'Paracetamol', 'Biogesic 300mg', 'Relief of fever', 'CAPSULE'),
(2020000013, 'mefinamic', 'test', 'Relief of fever', 'CAPSULE'),
(2020000014, 'test1', 'test1', 'test1', 'Capsul'),
(2020000015, 'Paracetamol', 'Biogesic 300mg', 'Relief of fever', 'TABLET'),
(2020000016, 'Salbutamol', '5000mg', 'cough', 'CAPSULE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(255) NOT NULL,
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `USERNAME`, `PASSWORD`, `NAME`) VALUES
(2020000001, 'ADMIN', 'ADMIN', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `med`
--
ALTER TABLE `med`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `med`
--
ALTER TABLE `med`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `MID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020000020;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020000002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
