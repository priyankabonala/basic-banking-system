-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 06:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sr` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sr`, `name`, `email`, `message`) VALUES
(1, 'Priya',	'priya95@gmail.com', 'This is demo paragraph!'),
(3, 'Ranjan',	'ranjan44@gmail.com', 'This is a para!'),
(6, 'Priyanka Sharma', 'ps@gmail.com', 'this is my new contact email'),
(18, 'Knjal', 'kn33@gmaill.com', 'Awesome!'),
(24, 'Priyanka Sharma', 'priyankasharma302002@gmail.com', 'What is the python course fee?'),
(26, 'Himesh', 'hs56@gmail.com', 'Hello!'),
(30, 'Lavanya', 'lavanya@gmail.com', 'joy!!');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sr` int(11) NOT NULL,
  `sender` varchar(10) NOT NULL,
  `receiver` varchar(10) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sr`, `sender`, `receiver`, `amount`, `status`) VALUES
(1, '7311780855', '5353112532', 200, 'succeed'),
(2, '', '', 0, 'failed'),
(3, '', '', 0, 'failed'),
(4, '', '', 0, 'failed'),
(5, '', '', 0, 'failed'),
(6, '7311780855', '5353112532', 100, 'succeed'),
(7, '7311780855', '5353112532', 0, 'failed'),
(8, '7311780855', '4001286186', 200, 'succeed'),
(9, '7311780855', '4001286186', 500, 'succeed'),
(10, '3917416800', '4001286186', 14000, 'failed'),
(11, '', '', 0, 'failed'),
(12, '7311780855', '4001286186', 9950000, 'succeed'),
(13, '4001286186', '7311780855', 500, 'succeed'),
(14, '4001286186', '5353112532', 800, 'succeed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sr` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `accno` varchar(10) NOT NULL,
  `blc` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sr`, `name`, `email`, `accno`, `blc`) VALUES
(1, 'lovely','lovely@gmail.com', '5353112532', 21100),
(2, 'Kajal', 'kajal@gmail.com', '7311780855', 10000),
(3, 'Aani', 'Aani9@gmail.com', '4001286186', 10010000),
(4, 'preeti', 'preeti@gmail.com', '1097481093', 16000),
(5, 'Monika', 'Monika@gmail.com', '5859722581', 18200),
(6, 'Lavanya', 'lavanya@gmail.com', '4920438199', 20000),
(7, 'Kusum', 'kusum@gmail.com', '9304807119', 16100),
(8, 'Vicky', 'vicky@gmail.com', '1384625500', 10900),
(9, 'Rani', 'rani33@gmail.com', '3917416800', 13900),
(10, 'Stephen', 'stephen6@gmail.com', '5002694111', 19000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
