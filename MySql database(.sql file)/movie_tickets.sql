-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2020 at 09:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_tickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `user_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `timing` datetime NOT NULL,
  `valid` tinyint(1) NOT NULL DEFAULT 1,
  `ticket_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`user_name`, `phone`, `timing`, `valid`, `ticket_id`) VALUES
('kuchi', '9123920678', '2020-09-01 09:00:00', 1, 4),
('vinay', '8323920678', '2020-09-01 09:00:00', 1, 5),
('anuj', '8923920678', '2020-09-01 09:00:00', 1, 6),
('dhairya', '8923920678', '2020-09-01 09:00:00', 1, 7),
('harsh', '3923920678', '2020-09-01 12:00:00', 1, 8),
('rashi', '9823920678', '2020-09-01 12:00:00', 1, 9),
('shankul', '9823920678', '2020-09-01 12:00:00', 1, 10),
('ishan', '9823920678', '2020-09-01 12:00:00', 1, 11),
('rohit', '1234583949', '2020-09-01 09:00:00', 1, 14),
('Sagar', '1234583949', '2020-09-01 12:00:00', 1, 30),
('Mahi', '789879234', '2020-09-01 09:00:00', 1, 31),
('Mani Reddy', '9118792340', '2020-09-01 09:00:00', 1, 32),
('Madhu', '9448792340', '2020-09-01 12:00:00', 1, 33),
('Harshita', '8448792340', '2020-09-01 12:00:00', 1, 34),
('Marshita', '7448792340', '2020-09-01 09:00:00', 1, 35),
('vinay kumar reddy', '6648792340', '2020-09-03 09:00:00', 1, 36),
('Anuj reddy', '6648792340', '2020-09-03 09:00:00', 1, 37),
('Harsh sri', '6648792340', '2020-09-03 09:00:00', 1, 38),
('srikanth', '6648792340', '2020-09-03 09:00:00', 1, 39),
('mohan', '6648792340', '2020-09-03 09:00:00', 1, 40),
('Madhu sudhana', '9848792340', '2020-09-03 12:00:00', 1, 41),
('Suryansh', '9448792340', '2020-09-03 12:00:00', 1, 42),
('Anveshika', '9448792340', '2020-09-03 12:00:00', 1, 43),
('Manoj', '546792340', '2020-09-03 12:00:00', 1, 44),
('Tiwari', '946792340', '2020-09-03 09:00:00', 1, 45),
('Panday', '896792340', '2020-09-03 09:00:00', 1, 46),
('Pandu', '896792340', '2020-09-03 09:00:00', 1, 47),
('Vinodh', '896792340', '2020-09-03 09:00:00', 1, 48),
('Vinodh', '896792340', '2020-09-03 12:00:00', 1, 49),
('Binod', '996792340', '2020-09-04 12:00:00', 1, 50),
('Sagar', '996792340', '2020-09-04 12:00:00', 1, 51),
('Reddy', '886792340', '2020-09-04 12:00:00', 1, 52),
('Moldireddy', '886732340', '2020-09-04 12:00:00', 1, 53),
('Moldireddy', '886732340', '2020-09-04 09:00:00', 1, 54);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
