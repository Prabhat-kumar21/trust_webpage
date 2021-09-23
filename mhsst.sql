-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2016 at 01:38 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mhsst`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_information`
--

CREATE TABLE IF NOT EXISTS `donation_information` (
`did` int(10) unsigned NOT NULL,
  `dname` varchar(100) DEFAULT NULL,
  `demail` varchar(100) DEFAULT NULL,
  `dmno` varchar(10) DEFAULT NULL,
  `damount` float(10,2) DEFAULT NULL,
  `dmessage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_information`
--

INSERT INTO `donation_information` (`did`, `dname`, `demail`, `dmno`, `damount`, `dmessage`) VALUES
(1, 'Test', 'test@test.com', '9999999999', 10000.00, 'testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_information`
--
ALTER TABLE `donation_information`
 ADD PRIMARY KEY (`did`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_information`
--
ALTER TABLE `donation_information`
MODIFY `did` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
