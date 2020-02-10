-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 09, 2019 at 05:21 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Serial_no` int(10) NOT NULL,
  `Rollno` varchar(10) NOT NULL,
  `Sudent_name` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `project` varchar(250) NOT NULL,
  `Institude` varchar(200) NOT NULL,
  `Duration` date NOT NULL,
  `Nature_of_training` varchar(20) NOT NULL,
  `Domain` varchar(50) NOT NULL,
  `Stipend` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Serial_no`, `Rollno`, `Sudent_name`, `class`, `project`, `Institude`, `Duration`, `Nature_of_training`, `Domain`, `Stipend`) VALUES
(1, '16ucse060', 'veera', '3 year cse', '', 'kcet', '2019-04-16', 'internship', 'iot', '5000'),
(2, '16ucse050', 'sathish', '3 year cse', '', 'kcet', '2019-04-16', 'internship', 'ethikal hacking', '10000'),
(3, '16ucse099', 'selva', '3 year cse', '', 'kcet', '2019-04-16', 'internship', 'ethikal hacking', '10000'),
(4, '16ucse090', 'karan', '3 year cse', '', 'kcet', '2019-04-18', '1 month', 'Android', '20000'),
(5, '', '', '', '', '', '0000-00-00', '', '', ''),
(6, '', '', '', '', '', '0000-00-00', '', '', ''),
(7, '', '', '', '', '', '0000-00-00', '', '', ''),
(8, '16ucse009', 'aadhi', 'a', 'ai', 'apple', '2019-06-02', 'one month', 'ai', '10000'),
(9, '', '', '', '', '', '0000-00-00', '', '', ''),
(10, '', '', '', '', '', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Serial_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
