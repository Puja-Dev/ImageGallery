-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2016 at 08:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `media`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `Fname` varchar(10) DEFAULT NULL,
  `Lname` varchar(10) DEFAULT NULL,
  `U_password` varchar(15) DEFAULT NULL,
  `U_email` varchar(30) NOT NULL,
  `U_dob` date DEFAULT NULL,
  `U_gender` varchar(7) DEFAULT NULL,
  `U_contact` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`U_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Fname`, `Lname`, `U_password`, `U_email`, `U_dob`, `U_gender`, `U_contact`) VALUES
('Lalit', 'punera', 'linkroad1@', 'lalit123@gmail.com', '1994-08-27', 'Male', 8445217563),
('prachi', 'sharma', 'hp123', 'prachi123@gmail.com', '1996-05-17', 'Female', 9568397720),
('Prakarti', 'singh', 'hp678#', 'prakarti@gmail.com', '1996-05-15', 'Female', 8126045890),
('pooja', 'devlal', 'hpddun', 'puja.devlal16@gmail.com', '1996-02-16', 'Female', 8057021056);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
