-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 06:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `busdetails`
--

CREATE TABLE `busdetails` (
  `busNo` varchar(10) NOT NULL,
  `srcLocation` varchar(25) NOT NULL,
  `destLocation` varchar(25) NOT NULL,
  `arrTime` time(4) NOT NULL,
  `deptTme` time(4) NOT NULL,
  `stop1` varchar(25) NOT NULL,
  `stop2` varchar(25) NOT NULL,
  `stop3` varchar(25) NOT NULL,
  `stop4` varchar(25) NOT NULL,
  `stop5` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busdetails`
--

INSERT INTO `busdetails` (`busNo`, `srcLocation`, `destLocation`, `arrTime`, `deptTme`, `stop1`, `stop2`, `stop3`, `stop4`, `stop5`) VALUES
('123', 'Vadodara', 'Surat', '07:11:34.1731', '07:16:12.2663', '', '', '', '', ''),
('345', 'Ahmedabad', 'Vadodara', '16:45:00.0000', '16:52:00.0000', '', '', '', '', ''),
('123', 'Vadodara', 'Surat', '07:11:34.1731', '07:16:12.2663', '', '', '', '', ''),
('345', 'Ahmedabad', 'Vadodara', '16:45:00.0000', '16:52:00.0000', '', '', '', '', ''),
('546', 'Vadodara', 'Surat', '05:25:16.1470', '06:09:00.0000', '', '', '', '', ''),
('546', 'Vadodara', 'Surat', '05:25:16.1470', '06:09:00.0000', '', '', '', '', ''),
('123', 'Vadodara', 'Surat', '00:07:08.0090', '00:12:04.0000', 'Vasad', 'Anand', 'Nadidad', '', ''),
('123', 'Vadodara', 'Surat', '00:07:08.0090', '00:12:04.0000', 'Vasad', 'Anand', 'Nadidad', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
