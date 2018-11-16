-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2018 at 03:17 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdop`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password_1` varchar(100) NOT NULL,
  `password_2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectinfo`
--

DROP TABLE IF EXISTS `projectinfo`;
CREATE TABLE IF NOT EXISTS `projectinfo` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `startdate` varchar(100) NOT NULL,
  `enddate` varchar(100) NOT NULL,
  `projectfield` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectinfo`
--

INSERT INTO `projectinfo` (`pid`, `pname`, `details`, `startdate`, `enddate`, `projectfield`) VALUES
(11, 'aws', 'hfhkvhkghkgkhgiuyg', '1998-01-01', '1998-05-01', 'android');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL,
  `skillname` char(40) DEFAULT NULL,
  `description` char(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skillname`, `description`, `username`) VALUES
(1, 'android', 'sdasdasdsad', 'wasd');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `name` varchar(50) NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `registrationid` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `collegename`, `department`, `registrationid`, `course`, `email`, `gender`, `message`, `dob`, `username`, `password`) VALUES
('Vishnu', 'gecpkd', 'CSE', 'SIXTEEN', 'cse', 'vichuprasadk@gmail.com', 'male', 'hghaghsahgs', '1998-08-09', 'Pkd16cs61', '8cc942105eff9e22d65391793e74ad03'),
('fgfddgd', 'sees', 'CSE', 'abcd', 'cse', 'vishnu1998prasad@gmailsef.com', 'male', 'hghaghsahgs', '7787-09-09', 'Pkd16cs68', 'e10adc3949ba59abbe56e057f20f883e'),
('ravi', 'gecpkd', 'CSE', 'SIXTEEN', 'cse', 'vishnu1998prasad@gmail876t.com', 'Female', 'hghaghsahgs', '4555-12-12', 'abc46', 'e10adc3949ba59abbe56e057f20f883e'),
('Vishnu', 'gecpkd', 'CSE', 'abcd', 'cse', 'vishnu1998prasad@gmail876t33.com', 'male', 'hghaghsahgs', '1222-12-12', 'abc123', 'e10adc3949ba59abbe56e057f20f883e'),
('rasmi', 'gec', 'CSE', 'abcd12', 'vp', 'rasmi@gmail.com', 'female', 'hgsdhgsj', '1987-09-08', 'rasmi123', 'a8f5f167f44f4964e6c998dee827110c'),
('Drisya p', 'gec pkd', 'CSE', 'pkd16it027', 'BTECH', 'drisyasreedevi@gmail.com', 'female', '', '2018-01-27', 'pkd16it027', 'd09dac6186dbf1c481e344a2021fe7c2'),
('ram', 'nss', 'cse', 'avc123', 'edc', 'ram@gmail.com', 'Select', 'abcd', '1987-08-09', 'abcd123', 'b23cf2d0fb74b0ffa0cf4c70e6e04926'),
('surej', 'gecpkd', 'cse', '16b145', 'pdd', 'surej@gmail.com', 'Select', 'sydfsydydf', '1998-03-02', 'suraj123', '794fd8df6686e85e0d8345670d2cd4ae'),
('a', 'a', 'a', 'a', 'a', 'a', 'male', 'a', '2018-11-16', 'admin', 'admin'),
('a', 'a', 'a', 'a', 'a', 'a', 'male', 'a', '2018-11-16', 'admin', 'admin'),
('aaa', 'aaa', 'aaaaaa', 'aaaa', 'aaaa', 'aaa@aaaaa.com', 'Select', 'aaaaaa', '1789-08-07', 'aaaa', '74b87337454200d4d33f80c4663dc5e5'),
('aaaasa', 'asas', 'asas', 'assas', 'abb', 'a@gmailvbn.csasom', 'male', 'sdasdas', '1321-03-03', 'wasd', 'c96dd568316deb9d8c7dec73b4c27cbb'),
('sarasammaji', 'asa', 'ssdsa', 'sdasa', 'sdsadsa', 'sdasadas@hh.com', 'female', 'vfgyudfgs', '7777-03-06', 'vp98', '1963fd70e789022f6f5b11498f992404');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
