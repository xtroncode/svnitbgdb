-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2013 at 09:38 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donordb`
--
CREATE DATABASE IF NOT EXISTS `donordb` DEFAULT CHARACTER SET latin1 COLLATE latin1_bin;
USE `donordb`;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `BG` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Contact` varchar(10) CHARACTER SET utf8 NOT NULL,
  `City` varchar(30) CHARACTER SET utf8 NOT NULL,
  `State` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Pin` varchar(6) CHARACTER SET utf8 NOT NULL,
  `Age` int(3) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
