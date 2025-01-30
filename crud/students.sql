-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2025 at 10:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `REG_NO` varchar(5) NOT NULL,
  `ADM_DATE` date NOT NULL,
  `CLASS` varchar(10) NOT NULL,
  `AADHAR` varchar(12) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `F_NAME` varchar(100) NOT NULL,
  `M_NAME` varchar(100) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `PHN` varchar(13) NOT NULL,
  `ADRESS` varchar(500) NOT NULL,
  `FEES` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`REG_NO`, `ADM_DATE`, `CLASS`, `AADHAR`, `NAME`, `DOB`, `F_NAME`, `M_NAME`, `GENDER`, `PHN`, `ADRESS`, `FEES`) VALUES
('12234', '2025-01-22', '4', '12345', 'wsdfgbn', '2025-01-30', 'ASDFGHJK', 'SADFGHNM', 'Male', '764532', 'asdf', '2025-01-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`REG_NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
