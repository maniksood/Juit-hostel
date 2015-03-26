-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2015 at 11:52 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fps2`
--
CREATE DATABASE IF NOT EXISTS `fps2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fps2`;

-- --------------------------------------------------------

--
-- Table structure for table `print_orders`
--

CREATE TABLE IF NOT EXISTS `print_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `copies` int(11) NOT NULL,
  `paper` varchar(50) NOT NULL,
  `take_away` varchar(100) NOT NULL,
  `instructions` text NOT NULL,
  `file_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `print_orders`
--

INSERT INTO `print_orders` (`id`, `name`, `email`, `copies`, `paper`, `take_away`, `instructions`, `file_name`) VALUES
(1, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', 'iidgskbhlius', ''),
(2, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', 'jvhb', 'Course Description Jan June 2013.doc'),
(3, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Cmder.exe'),
(4, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Cmder.exe'),
(5, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf'),
(6, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf'),
(7, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', 'jygkh', 'Course Description Jan June 2013.doc'),
(8, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc'),
(9, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf'),
(10, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf'),
(11, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', ''),
(12, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', ''),
(13, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf'),
(14, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc'),
(15, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 2 - Differences between UNIX and Windows.doc'),
(16, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 2 - Differences between UNIX and Windows.doc'),
(17, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf'),
(18, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf'),
(19, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 1 - UNIX OS Basics.pdf'),
(20, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Course Description Jan June 2013.doc'),
(21, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'UNIX 5.doc'),
(22, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Reading # 2 - Differences between UNIX and Windows.doc'),
(23, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf'),
(24, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', 'yupeee', 'R Graphics Cookbook.pdf'),
(25, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'R Graphics Cookbook.pdf'),
(26, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'R Graphics Cookbook.pdf'),
(27, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf'),
(28, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf'),
(29, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf'),
(30, 'Manik Sood', 'me@maniksood.me', 1, 'A4 - Normal 75 GSM', 'Open cafe 08:15 am', '', 'Rails for PHP Developers.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `verified` varchar(10) NOT NULL,
  `wallet` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `verified`, `wallet`) VALUES
(1, 'Manik Sood', 'me@maniksood.me', '1234', 'yes', 10),
(2, 'Satyam Kapoor', 'me@satyamkapoor.com', '1234', 'no', -1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
