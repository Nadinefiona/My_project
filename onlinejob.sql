-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 05:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinejob`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `app_id` int(12) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(15) NOT NULL,
  `phoneNo` int(40) DEFAULT NULL,
  `dofb` varchar(40) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `cv` tinytext DEFAULT NULL,
  `letter` tinytext DEFAULT NULL,
  `country` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `sector` varchar(15) NOT NULL,
  `nationalId` int(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`app_id`, `fname`, `lname`, `email`, `phoneNo`, `dofb`, `gender`, `cv`, `letter`, `country`, `district`, `sector`, `nationalId`) VALUES
(2, NULL, 'BYUKUSENGE', 'nadinefiona9@gm', 1234, '2022-07-06', NULL, '(3)MATHEMATICS_FOR_ENGINNERS_III_CSE_2022_FOURIER_SERIES.pdf', 'assignment   of    OS(1).pdf', 'Rwanda', 'muhanga', 'Nyamabuye', 145454545);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, ' Fiona', '', 'f@gmail.com', '123'),
(2, ' Fiona', '', 'f@gmail.com', '123'),
(3, ' aline', '', 'al@gmail.com', '123'),
(4, ' sds', '', 'dsd@gmail.com', 'ww'),
(5, ' ', '', '', ''),
(6, ' ', '', '', ''),
(7, ' ', '', '', ''),
(8, ' ', '', '', ''),
(9, ' ', '', '', ''),
(10, ' ', '', '', ''),
(11, ' ', '', '', ''),
(12, ' yvette', '', 'y@gmail.com', '1223'),
(13, ' dgf', '', 'dhd@jhd', '123'),
(14, ' dgf', '', 'dhd@jhd', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `app_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
