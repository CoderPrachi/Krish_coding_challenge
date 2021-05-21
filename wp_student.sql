-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 10:21 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_student`
--

CREATE TABLE `wp_student` (
  `student_name` varchar(50) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `email_id` varchar(50) NOT NULL,
  `marks_sub1` int(5) NOT NULL,
  `marks_sub2` int(5) NOT NULL,
  `marks_sub3` int(5) NOT NULL,
  `marks_sub4` int(5) NOT NULL,
  `marks_sub5` int(5) NOT NULL,
  `total_marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_student`
--

INSERT INTO `wp_student` (`student_name`, `phone_number`, `email_id`, `marks_sub1`, `marks_sub2`, `marks_sub3`, `marks_sub4`, `marks_sub5`, `total_marks`) VALUES
('Priya', '8098768905', 'patilprachi9991@gmail.com', 9, 9, 9, 9, 9, 45),
('Prachi', '7758054838', 'pspatil@mitaoe.ac.in', 10, 10, 10, 10, 10, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_student`
--
ALTER TABLE `wp_student`
  ADD PRIMARY KEY (`email_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
