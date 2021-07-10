-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 01:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotels`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Cname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `iny` varchar(10) NOT NULL,
  `outc` varchar(10) NOT NULL,
  `room` varchar(10) NOT NULL,
  `Rtype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Cname`, `email`, `mobile`, `iny`, `outc`, `room`, `Rtype`) VALUES
('', 'mohitrungta19@gmail.com', 4584, '', '', 'A/C', ''),
('10', 'mohitrungta19@gmail.com', 4584, '07-04-2021', '08-04-2021', 'A/C', 'single'),
('10', 'mohitrungta19@gmail.com', 4584, '07-04-2021', '08-04-2021', 'A/C', 'single'),
('10', 'mohitrungta19@gmail.com', 4584, '07-04-2021', '08-04-2021', 'A/C', 'single'),
('10', 'mohitrungta19@gmail.com', 4584, '07-04-2021', '08-04-2021', 'A/C', 'single'),
('10', 'mohitrungta19@gmail.com', 4584, '07-04-2021', '08-04-2021', 'A/C', 'single'),
('10', 'mohitrungta19@gmail.com', 4584, '07-04-2021', '08-04-2021', 'A/C', 'single'),
('10', 'mohitrungta19@gmail.com', 4584, '07-04-2021', '08-04-2021', 'A/C', 'single'),
('10', 'mohitrungta19@gmail.com', 4584, '07-04-2021', '08-04-2021', 'A/C', 'single'),
('10', 'mohitrungta19@gmail.com', 4584, '07-04-2021', '08-04-2021', 'A/C', 'single'),
('10', 'mohitrungta19@gmail.com', 4584, '07-04-2021', '08-04-2021', 'A/C', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `check`
--

CREATE TABLE `check` (
  `in` varchar(10) NOT NULL,
  `out` varchar(10) NOT NULL,
  `room` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_list`
--

CREATE TABLE `hotel_list` (
  `iny` varchar(10) NOT NULL,
  `outc` varchar(10) NOT NULL,
  `hotel_name` text NOT NULL,
  `no_of_rooms` int(3) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_list`
--

INSERT INTO `hotel_list` (`iny`, `outc`, `hotel_name`, `no_of_rooms`, `location`) VALUES
('07-04-2021', '08-04-2021', 'motel', 10, 'kolkata'),
('07-04-2021', '08-04-2021', 'zostel', 22, 'kolkata'),
('08-04-2021', '11-04-2021', 'taj', 54, 'kolkata'),
('07-04-2021', '08-04-2021', 'radisson', 17, 'kolkata'),
('11-04-2021', '17-04-2021', 'caravilla', 15, 'kolkata'),
('09-04-2021', '20-04-2021', 'natraj', 23, 'kolkata'),
('10-04-2021', '30-04-2021', 'Old Anchor', 4, 'kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` text NOT NULL,
  `Upassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `username` text NOT NULL,
  `Upassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
