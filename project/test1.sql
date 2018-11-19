-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 11:26 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `health_data`
--

CREATE TABLE `health_data` (
  `trans_id` varchar(256) NOT NULL,
  `data` varchar(256) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_data`
--

INSERT INTO `health_data` (`trans_id`, `data`, `time`) VALUES
('d055d2174e8481225feb84ee7e47ca24a950f34ced47b30905c8e0dece3f14a7', 'head ache', '2018-11-15 07:41:49'),
('025c3b156cdc46ccf984037e675a29b6e956210f192dd83871ae6548d32ea693', 'heart', '2018-11-15 07:42:03'),
('2bd9899c326a1f64e59c7808867945fb6d192fae95cca94432edb3abe25c7a20', 'BRAIN', '2018-11-15 08:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `register_db`
--

CREATE TABLE `register_db` (
  `person_id` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_db`
--

INSERT INTO `register_db` (`person_id`) VALUES
('c3Zyb2hpdGg5IDEyMzQ1Njc4OTAgc3Zyb2hpdGg5QGdtYWlsLmNvbSAwOTg3NjU0MzIxIDUyMjAwMg=='),
('YXNkIDAwMCBhc2RAYXNkIDExMSAyMjI=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_db`
--
ALTER TABLE `register_db`
  ADD PRIMARY KEY (`person_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
