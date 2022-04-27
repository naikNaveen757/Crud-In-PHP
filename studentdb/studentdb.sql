-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 06:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `regno` varchar(25) NOT NULL,
  `studname` char(25) NOT NULL,
  `dob` date NOT NULL,
  `course` char(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`regno`, `studname`, `dob`, `course`, `gender`, `phoneno`, `addr`) VALUES
('MCA101', 'Minhaz', '2000-06-27', 'MCA', 'M', '7795626615', 'Ganjimatt'),
('MCA102', 'Sarfaraz', '2007-03-21', 'MBA', 'M', '7406936890', 'Belupu'),
('MCA103', 'Ashton', '2001-06-05', 'Mtech', 'M', '9148382577', 'Ajekar'),
('MCA104', 'Akash', '2005-11-17', 'MCA', 'M', '9535469868', 'Donderangadi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`regno`(15)),
  ADD UNIQUE KEY `phoneno` (`phoneno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
