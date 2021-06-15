-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2015 at 07:48 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`adminid`, `adminname`, `uname`, `password`, `contactno`, `email`) VALUES
(1, 'admin', 'admin', 'admin', '9999999999', 'admin@gmail.com'),
(2, 'a', 'a', 'a', '5555555555', 'a@j.n');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `sid` int(3) NOT NULL,
  `subcode` varchar(100) NOT NULL,
  `totalclass` int(100) NOT NULL,
  `attendedclass` int(100) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sid`, `subcode`, `totalclass`, `attendedclass`, `percentage`) VALUES
(1, 'mca502', 23, 16, 69.5652),
(3, 'mca502', 50, 40, 80),
(4, 'mca101', 45, 34, 75.5556),
(5, 'mca502', 50, 34, 68),
(3, 'mca505', 40, 30, 75);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `emailid`, `contactno`, `subject`, `message`) VALUES
(7, 'raju', 'raju@gmail.com', '7777777777', 'update contact number', 'hello sir,\r\nmy mobile number is changed update it in your record\r\nnew number 888888888.\r\nmy sid is 45.\r\n\r\n\r\nthank you..');

-- --------------------------------------------------------

--
-- Table structure for table `internal`
--

CREATE TABLE IF NOT EXISTS `internal` (
  `sid` int(3) NOT NULL,
  `subcode` varchar(6) NOT NULL,
  `finternal` int(2) NOT NULL,
  `sinternal` int(2) NOT NULL,
  `assignment` int(2) NOT NULL,
  `tmarks` int(2) NOT NULL,
  `omarks` int(2) NOT NULL,
  `result` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal`
--

INSERT INTO `internal` (`sid`, `subcode`, `finternal`, `sinternal`, `assignment`, `tmarks`, `omarks`, `result`) VALUES
(1, 'mca501', 1, 2, 3, 50, 6, 'fail'),
(3, 'mca501', 8, 6, 12, 50, 26, 'pass'),
(4, 'mca101', 12, 6, 12, 50, 30, 'pass'),
(5, 'mca501', 8, 9, 10, 50, 27, 'pass'),
(1, 'mca502', 10, 5, 12, 50, 27, 'pass'),
(1, 'mca503', 5, 4, 8, 50, 17, 'fail'),
(14, 'mca501', 1, 1, 1, 50, 3, 'fail');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `sid` int(4) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `cyear` varchar(100) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`sid`, `firstname`, `middlename`, `lastname`, `course`, `cyear`, `cast`, `dob`, `gender`, `address`, `contactno`, `emailid`) VALUES
(6, 'raju', 'sdfs', 'sdfs', 'MCA', 'First', 'OPEN', '12/2/1990', 'Male', 'hhhh', '9999999999', 'raju@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
