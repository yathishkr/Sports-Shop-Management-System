-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2020 at 12:26 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_shop_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bookeddate` date NOT NULL,
  `branchid` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`bookeddate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookeddate`, `branchid`) VALUES
('2017-01-01', '1'),
('2016-05-31', '4'),
('2015-06-02', '2'),
('2014-03-05', '1'),
('2014-09-12', '5'),
('1999-01-31', '3'),
('1997-02-01', '2');

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

DROP TABLE IF EXISTS `buys`;
CREATE TABLE IF NOT EXISTS `buys` (
  `custid` varchar(10) DEFAULT NULL,
  `equipid` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `custid` varchar(10) NOT NULL,
  `custname` varchar(10) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `phoneno` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`custid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custid`, `custname`, `address`, `phoneno`) VALUES
('1001', 'amruth', 'bengaluru', 9980463321),
('1002', 'aarav', 'hassan', 8867567233),
('1003', 'deepika', 'mysore', 7019648666),
('1004', 'chirag', 'bengaluru', 8693213344),
('1005', 'kriti', 'bengaluru', 9986434431),
('1008', 'dss', 'ddd', 8988989898),
('1900', 'vikas', 'vijaynagar', 7019323878),
('1223', 'ssssss', 'ssss', 888888888);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
CREATE TABLE IF NOT EXISTS `discount` (
  `custid` varchar(10) NOT NULL,
  `equipid` varchar(10) NOT NULL,
  `discountpercentage` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`custid`,`equipid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`custid`, `equipid`, `discountpercentage`) VALUES
('1001', '12', '40%'),
('1003', '13', '30%'),
('1004', '11', '40%'),
('1005', '14', '25%'),
('1002', '15', '45%'),
('1002', '12', '40%'),
('1002', '14', '45%'),
('45354242', '3532', '32');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `empid` varchar(10) NOT NULL,
  `empname` varchar(10) DEFAULT NULL,
  `salary` int(6) DEFAULT NULL,
  `email` longtext,
  `branchid` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `empname`, `salary`, `email`, `branchid`) VALUES
('101', 'neerav', 15000, 'neeravm@gmail.com', '3'),
('102', 'arnav', 20000, 'arnavkp98@gmail.com', '1'),
('103', 'nischith', 10000, 'nischith97@gmail.com', '2'),
('104', 'sanvi', 18000, 'sanvijoseph@gmail.com', '4'),
('105', 'parinithi', 22000, 'parinithi23@gmail.com', '5');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `equipid` varchar(10) NOT NULL,
  `custid` varchar(10) DEFAULT NULL,
  `branchid` varchar(10) DEFAULT NULL,
  `sportsname` varchar(20) DEFAULT NULL,
  `equipname` varchar(20) DEFAULT NULL,
  `bookeddate` date DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  PRIMARY KEY (`equipid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipid`, `custid`, `branchid`, `sportsname`, `equipname`, `bookeddate`, `price`) VALUES
('11', '1002', '4', 'cricket', 'bat', '2014-03-05', 6000),
('13', '1001', '1', 'kabaddi', 'tshirt', '2015-06-15', 700),
('14', '1005', '5', 'golf', 'shoe', '2014-09-14', 6000),
('15', '1004', '42', 'volleyball', 'net', '2017-01-17', 500);

-- --------------------------------------------------------

--
-- Table structure for table `has`
--

DROP TABLE IF EXISTS `has`;
CREATE TABLE IF NOT EXISTS `has` (
  `branchid` varchar(10) DEFAULT NULL,
  `equipid` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `branchid` varchar(10) DEFAULT NULL,
  `custid` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phoneno`
--

DROP TABLE IF EXISTS `phoneno`;
CREATE TABLE IF NOT EXISTS `phoneno` (
  `custid` varchar(10) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  PRIMARY KEY (`custid`,`phoneno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
CREATE TABLE IF NOT EXISTS `shop` (
  `branchid` varchar(10) NOT NULL,
  `branchname` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`branchid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`branchid`, `branchname`, `location`) VALUES
('1', 'vijaynagar', 'bengaluru'),
('2', 'jayanagar', 'bengaluru'),
('3', 'sakaleshpur', 'hassan'),
('4', 'ashokpuram', 'mysore'),
('5', 'malleshwaram', 'bengaluru'),
('6', 'uttarahalli', 'bengaluru'),
('7', 'uttarahalli', 'bengaluru'),
('34', 'dgdf', 'sdasd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
