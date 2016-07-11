-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2016 at 04:11 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `save`
--

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `Name` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Rool_No` int(10) NOT NULL,
  `Sem` int(2) NOT NULL,
  `Sub-Code` varchar(7) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Sec-Marks` int(3) NOT NULL,
  `Max-Marks` int(3) NOT NULL,
  `Pass/Fail` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`Name`, `Username`, `Rool_No`, `Sem`, `Sub-Code`, `Subject`, `Sec-Marks`, `Max-Marks`, `Pass/Fail`) VALUES
('Vishesh', 'Vishcse', 1, 2, 'cs333', 'Blah Blah', 90, 100, 'pass'),
('Varun', 'Varunit', 2, 8, 'it553', 'Brrrr', 80, 100, 'pass'),
('Vishesh', 'Vishcse', 1, 2, 'cs333', 'Blah Blah', 90, 100, 'pass'),
('Varun', 'Varunit', 2, 8, 'it553', 'Brrrr', 80, 100, 'pass'),
('Vishesh', 'Vishcse', 1, 3, 'cs955', 'AI', 99, 100, 'Pass'),
('Vishesh', 'Vishcse', 1, 2, 'cs456', 'Google', 60, 100, 'Pass'),
('Vishesh', 'Vishcse', 1, 2, 'cs789', 'Yahoo', 80, 100, 'Pass'),
('Vishesh', 'Vishcse', 1, 2, 'cs786', 'Pandora', 40, 100, 'Fail'),
('Vishesh', 'Vishcse', 1, 3, 'cs123', 'apple', 100, 100, 'pass'),
('Vishesh', 'Vishcse', 1, 3, 'cs901', 'Microsoft', 0, 100, 'Fail');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
