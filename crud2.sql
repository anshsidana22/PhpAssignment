-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 09:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud2`
--

CREATE TABLE `crud2` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pmark` int(255) NOT NULL,
  `cmark` int(255) NOT NULL,
  `mmark` int(255) NOT NULL,
  `bmark` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud2`
--

INSERT INTO `crud2` (`fname`, `lname`, `rollno`, `email`, `pmark`, `cmark`, `mmark`, `bmark`) VALUES
('0', '0', '3743', '0', 122, 32, 323, 32),
('0', '0', '3743', '0', 122, 32, 323, 32),
('Akshay', 'Waghmare', '3743', 'akshaywaghmarecc@gmail.com', 122, 32, 323, 32),
('Akshay', 'Waghmare', '3743', 'akshaywaghmarecc@gmail.com', 122, 32, 323, 32),
('Vasu ', 'Singla', '8888888888', 'vasusingla@iiita.ac.in', 89, 98, 12, 55);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
