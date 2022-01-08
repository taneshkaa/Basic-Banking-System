-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 08:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsfbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `balance` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(101, 'Priya Sharma', 'psharma@gmail.com', 10500),
(101, 'Priya Sharma', 'psharma@gmail.com', 10500),
(102, 'Rajesh Verma', 'verma121@gmail.com', 49500),
(102, 'Rajesh Verma', 'verma121@gmail.com', 49500),
(103, 'Siya Saxena', 'siya@gmail.com', 14600),
(103, 'Siya Saxena', 'siya@gmail.com', 14600),
(104, 'Dev Malhotra ', 'malhotra02@gmail.com', 29900),
(104, 'Dev Malhotra ', 'malhotra02@gmail.com', 29900),
(105, 'Sanjayy', 'sanjayy@gmail.com', 25000),
(105, 'Sanjayy', 'sanjayy@gmail.com', 25000),
(106, 'JIM', 'j@gmail.com', 0),
(106, 'JIM', 'j@gmail.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
