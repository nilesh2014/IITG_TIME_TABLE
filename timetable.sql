-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2016 at 04:53 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Id` int(10) NOT NULL,
  `course_no` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `date_mid` varchar(100) NOT NULL,
  `date_end` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `remarks` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Id`, `course_no`, `course_name`, `date_mid`, `date_end`, `time`, `venue`, `remarks`) VALUES
(1, 'CS 203', 'Formal Language and Automata Theory', '29-FEB-2016 Monday', '30-April-2016 Tuesday', '9AM to 11AM/12PM', '2204', 'Closed book/notes '),
(2, 'CS 204', 'Algorithms', '03-Mar-2016 Thursday', '04-May-2016 Wednesday', '9AM to 11AM/12PM', '2204', 'Closed book/notes '),
(3, 'CS 222', 'Computer Organization & Architecture', '02-Mar-2016 Wednesday', '03-May-2016 Tuesday', '9AM to 11AM/12PM', '2204', 'Closed book/notes '),
(4, 'CS 223', 'Hardware lab', 'NA', 'NA', 'NA', 'NA', 'NA '),
(5, 'CS 242', 'Software Engineering', '01-Mar-2016 Tuesday', '02-May-2016 Monday', '9AM to 11AM/12PM', '2204', 'Open notes '),
(6, 'CS 244', 'Software  Programming Lab', 'NA', 'NA', 'NA', 'NA', 'NA '),
(7, 'CS 243', 'Software Engineering Lab', 'NA', 'NA', 'NA', 'NA', 'NA '),
(8, 'HS 226', 'Macroeconomics', '05-Mar-2016 Saturday', '06-May-2016 Friday', '9AM to 11AM/12PM', '2204', 'Closed book/notes ');

-- --------------------------------------------------------

--
-- Table structure for table `roll`
--

CREATE TABLE `roll` (
  `Id` int(10) NOT NULL,
  `roll_no` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roll`
--

INSERT INTO `roll` (`Id`, `roll_no`, `name`, `course`, `type`) VALUES
(1, 140101001, 'ABHINAV PRINCE', 'CS 203', 'c'),
(2, 140101001, 'ABHINAV PRINCE', 'CS 204', 'c'),
(3, 140101001, 'ABHINAV PRINCE', 'CS 222', 'c'),
(4, 140101001, 'ABHINAV PRINCE', 'CS 223', 'c'),
(5, 140101001, 'ABHINAV PRINCE', 'CS 242', 'c'),
(6, 140101001, 'ABHINAV PRINCE', 'CS 244', 'c'),
(7, 140101001, 'ABHINAV PRINCE', 'CS 243', 'c'),
(8, 140101001, 'ABHINAV PRINCE', 'HS 226', 'c'),
(9, 140101002, 'ABHINAV KUMAR', 'CS 204', 'C'),
(10, 140101002, 'ABHINAV KUMAR', 'CS 203', 'C'),
(11, 140101002, 'ABHINAV KUMAR', 'CS 222', 'C'),
(12, 140101002, 'ABHINAV KUMAR', 'CS 242', 'C'),
(13, 140101002, 'ABHINAV KUMAR', 'CS 243', 'C'),
(20, 140101003, 'manish regar', 'CS 203', 'c'),
(21, 140101003, 'manish regar', 'CS 222', 'c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `roll`
--
ALTER TABLE `roll`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `roll`
--
ALTER TABLE `roll`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
