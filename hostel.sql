-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2015 at 01:14 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel`
--
CREATE DATABASE IF NOT EXISTS `hostel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hostel`;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `complaint` text NOT NULL,
  `free_time` varchar(50) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `room_no` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`complaint_id`),
  UNIQUE KEY `complaint_id` (`complaint_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=201500002 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaint_id`, `date`, `user_id`, `name`, `complaint`, `free_time`, `phone_no`, `room_no`, `status`) VALUES
(201500000, '22/01/2015', 121502, 'Satyam Kapoor', 'First Complaint Testing', '02:00pm to 04:00pm', '9736140578', 'H-1-37', 'pending'),
(201500001, '22/01/2015', 131620, 'Manik Sood', 'Second Test Complaint', 'anytime', '9805022218', 'H-11-2', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `server-complaints`
--

CREATE TABLE IF NOT EXISTS `server-complaints` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `complaint` text NOT NULL,
  `free_time` varchar(20) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`complaint_id`),
  UNIQUE KEY `complaint_id` (`complaint_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `server-complaints`
--

INSERT INTO `server-complaints` (`complaint_id`, `date`, `user_id`, `name`, `complaint`, `free_time`, `phone_no`, `room_no`, `status`) VALUES
(7, '22/01/2015', 131620, 'Manik Sood', 'Password Reset', '', '', '', 'Unavailable'),
(8, '22/01/2015', 131620, 'Manik Sood', 'Password Reset', '', '', '', 'Invalid Info'),
(9, '22/01/2015', 131620, 'Manik Sood', 'Lan Port Damaged', '2:00pm to 4:00 pm', '9805022218', 'H-11-2', 'Completed'),
(10, '22/01/2015', 131620, 'Manik Sood', 'Password Reset', '', '', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(121502, 'Satyam Kapoor', 'satyamkapoor@outlook.com', '194ba7a32e90b1a69b44bbf6f7cbdf75'),
(131620, 'Manik Sood', 'maniksood95@gamil.com', '07faa7ffdc6987ee73a98f784a3f5f1d');

-- --------------------------------------------------------

--
-- Table structure for table `warden-complaints`
--

CREATE TABLE IF NOT EXISTS `warden-complaints` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `complaint` text NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `room_no` varchar(50) NOT NULL,
  PRIMARY KEY (`complaint_id`),
  UNIQUE KEY `complaint_id` (`complaint_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
