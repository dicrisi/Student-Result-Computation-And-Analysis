-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2024 at 10:00 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marklist`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE IF NOT EXISTS `mark` (
  `mid` int(50) NOT NULL AUTO_INCREMENT,
  `regno` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `exam` varchar(50) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `output1` varchar(50) NOT NULL,
  `output2` varchar(50) NOT NULL,
  `output3` varchar(50) NOT NULL,
  `output4` varchar(50) NOT NULL,
  `output5` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `calculate` varchar(50) NOT NULL,
  `percen` varchar(50) NOT NULL,
  `gradeOutput` varchar(50) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`mid`, `regno`, `id`, `exam`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `output1`, `output2`, `output3`, `output4`, `output5`, `batch`, `calculate`, `percen`, `gradeOutput`) VALUES
(1, '613018106044', '1', 'internal1', 'java', 'bigdata', 'C++', 'django', 'artificial intelligence', '67', '65', '67', '64', '89', '2018-2020', '339', '67.8', 'C'),
(3, '613018106045', '4', 'Model', 'java', 'bigdata', 'c++', 'AI', 'django', '90', '87', '67', '79', '98', '2019-2021', '408', '81.6', 'A'),
(4, '613018106046', '5', 'internal2', 'cloudcomputing', 'java', 'python', 'html', 'c++', '67', '90', '67', '90', '100', '2020-2022', '413', '82', 'A'),
(6, '213543456', '7', 'internal2', 'bigdata', 'cloudcomputing', 'html', 'AI', 'c++', '97', '97', '97', '98', '98', '2021-2023', '487', '97.40', 'A'),
(7, '213543456', '7', 'internal1', 'bigdata', 'django', 'django', 'c++', 'java', '100', '100', '85', '93', '94', ' 2021-2023', '472', '94.40', 'A'),
(10, '613018106045', '4', 'internal1', 'java', 'bigdata', 'cloudcomputing', 'html', 'python', '70', '56', '45', '35', '54', '2019-2021', '371', '74.20', 'A'),
(12, '213543457', '8', 'internal1', 'java', 'django', 'AI', 'cloudcomputing', 'c++', '70', '70', '70', '70', '70', '2018-2020', '500', '100.00', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `stureg`
--

CREATE TABLE IF NOT EXISTS `stureg` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `uimg` varchar(50) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pmob` varchar(50) NOT NULL,
  `col` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `sslc` varchar(50) NOT NULL,
  `psslc` varchar(50) NOT NULL,
  `hsc` varchar(50) NOT NULL,
  `phsc` varchar(50) NOT NULL,
  `ug` varchar(50) NOT NULL,
  `pug` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `bloodgrp` varchar(50) NOT NULL,
  `community` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `stureg`
--

INSERT INTO `stureg` (`id`, `name`, `pwd`, `uimg`, `regno`, `address`, `dept`, `email`, `mob`, `pname`, `pmob`, `col`, `dob`, `sslc`, `psslc`, `hsc`, `phsc`, `ug`, `pug`, `batch`, `bloodgrp`, `community`) VALUES
(1, 'rindhiya', '1234', 'profile.jpg', '613018106044', 'mdu', 'ECE', 'rin@gmail.com', '9047872534', 'bharathi', '8248482476', 'hosteller', '2024-03-13', '90', 'ABC school', '80', 'ABC school', '82', 'QRS college', '2021-2023', 'A+', 'RIO'),
(4, 'sakshii', '1234', 'profile.jpg', '613018106045', 'cbe', 'csc', 'sakshi@gmail.com', '6374034643', 'jeyakodi', '9067873544', 'hosteller', '2024-02-29', '68', 'ABC school', '98', 'ABC school', '78', 'RS college', '2020-2022', 'B+', 'ABY'),
(6, 'shrii', '1234', 'profile.jpg', '613018106046', 'cbe', 'IT', 'shri@gmail.com', '1234567890', 'jeyakodi', '9067873544', 'dayscholor', '2024-03-19', '88', 'ABC school', '89', 'ABC school', '98', 'RS College', '2019-2021', 'A+', 'ABC'),
(7, 'rs', 'rs', 'profile.jpg', '213543456', 'gandhipuram', 'Bsc', 'rs@gmail.com', '9047872534', 'penny', '8248482478', 'hosteller', '2024-04-17', '89', 'sms school', 'sms school', '78', '89', 'sms college', '2018-2020', 'O+', 'abcd'),
(8, 'kavi', '1234', 'profile.jpg', '213543457', 'theni', 'Bsc', 'kavi@gmail.com', '9047872534', 'Singam', '8248482478', 'hosteller', '2024-04-25', '89', 'avs school', 'abcschool', '78', '89', 'vetri college', '2018-2020', 'a+', 'opl'),
(9, 'saro', '1234', 'profile.jpg', '213543450', 'gandhipuram', 'ECE', 'saro@gmail.com', '9047872534', 'penny', '8248482478', 'hosteller', '2024-04-11', '89', 'sms school', 'abcschool', '78', '78', 'pmt vollege', '2024-2026', 'B+', 'olp');
