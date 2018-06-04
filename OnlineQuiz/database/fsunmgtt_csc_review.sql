-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2018 at 02:31 PM
-- Server version: 10.1.31-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fsunmgtt_csc_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Middlename` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `Imagename` varchar(255) NOT NULL,
  `Imagepath` varchar(255) NOT NULL,
  `Imagetype` varchar(255) NOT NULL,
  `Deleted` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`ID`, `Firstname`, `Lastname`, `Middlename`, `Address`, `Gender`, `Age`, `Score`, `Remarks`, `Imagename`, `Imagepath`, `Imagetype`, `Deleted`) VALUES
(1, 'Sri', 'Nidhi', '-', 'Sekkalai', 'FEMALE', 20, 19, 'PASSED', 'default.png', 'uploaded_pic/default.png', 'PNG', 0),
(3, 'Godha', 'Lakshmi', '-', 'Chennai', 'FEMALE', 34, 2, 'FAILED', 'default.png', 'uploaded_pic/default.png', 'PNG', 0),
(4, 'Sow', 'Sri', '-', 'Sekkalai', 'FEMALE', 29, 17, 'PASSED', 'default.png', 'uploaded_pic/default.png', 'PNG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`) VALUES
(2, 'sowmi', 'sowmi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
