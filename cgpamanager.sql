-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 07:08 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgpamanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `cgpa`
--

CREATE TABLE `cgpa` (
  `id` int(255) NOT NULL,
  `seminterName` varchar(255) NOT NULL,
  `courseId` varchar(255) NOT NULL,
  `courseGrade` varchar(255) NOT NULL,
  `courseCredit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cgpa`
--

INSERT INTO `cgpa` (`id`, `seminterName`, `courseId`, `courseGrade`, `courseCredit`) VALUES
(6, 'spring2015', 'ENG101', '2.3', '3'),
(7, 'spring2015', 'MAT104', '4.0', '3'),
(8, 'spring2015', 'PHY101', '3.0', '3'),
(9, 'spring2015', 'PHY101L', '3.7', '1'),
(10, 'summer2015', 'ENG102', '2.7', '3'),
(11, 'summer2015', 'PHY102', '3.0', '3'),
(12, 'summer2015', 'PHY102L', '3.0', '1'),
(13, 'summer2015', 'CSC101', '2.7', '3'),
(14, 'summer2015', 'CSC101L', '2.7', '1'),
(15, 'Autumn2015', 'MAT212', '4.0', '3'),
(16, 'Autumn2015', 'ANT101', '3.7', '3'),
(17, 'Autumn2015', 'HEA101', '2.7', '3'),
(18, 'Autumn2015', 'CSC201', '2.7', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cgpa`
--
ALTER TABLE `cgpa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cgpa`
--
ALTER TABLE `cgpa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
