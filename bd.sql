-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2013 at 06:51 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nstu_hall`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept_info`
--

CREATE TABLE IF NOT EXISTS `dept_info` (
  `Dept_id` int(15) NOT NULL AUTO_INCREMENT,
  `Short_name` varchar(11) NOT NULL,
  `Full_name` varchar(50) NOT NULL,
  PRIMARY KEY (`Dept_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `dept_info`
--

INSERT INTO `dept_info` (`Dept_id`, `Short_name`, `Full_name`) VALUES
(1, 'CSTE', 'Computer Science & Telecommunication '),
(2, 'ACCE', 'Applied Chemistry & Chemical Engineering '),
(3, 'FIMS', 'Fisheries & Marine Science'),
(4, 'MB', 'Microbiology'),
(5, 'Farmacy', 'Pharmacy'),
(6, 'Math', 'Mathmatic'),
(7, 'Genitic', 'Genitic'),
(8, 'English', 'English'),
(9, 'ICT', 'Information &Communication Technology'),
(10, 'ESHS', 'Environmental Science and Hazard Studies'),
(11, 'FTNS', 'Food Technology and Nutrition  Science'),
(12, 'Economic', 'Economic');

-- --------------------------------------------------------

--
-- Table structure for table `mill_info`
--

CREATE TABLE IF NOT EXISTS `mill_info` (
  `mill_id` int(7) NOT NULL AUTO_INCREMENT,
  `current_mill` int(12) NOT NULL,
  `total_mill` int(12) NOT NULL,
  `Payment_TK` int(22) NOT NULL,
  `student_id` int(12) NOT NULL,
  PRIMARY KEY (`mill_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `mill_info`
--

INSERT INTO `mill_info` (`mill_id`, `current_mill`, `total_mill`, `Payment_TK`, `student_id`) VALUES
(1, 2, 15, 500, 1),
(2, 2, 21, 430, 2),
(3, 1, 24, 320, 3),
(4, 2, 32, 800, 4),
(5, 2, 23, 500, 5),
(6, 3, 32, 660, 6),
(7, 2, 33, 500, 7),
(8, 3, 31, 700, 8),
(9, 2, 24, 600, 9),
(10, 2, 27, 600, 10),
(11, 2, 43, 600, 11),
(12, 1, 54, 1000, 12),
(13, 2, 44, 500, 13),
(14, 2, 23, 432, 14),
(15, 2, 40, 300, 15),
(16, 3, 30, 450, 16);

-- --------------------------------------------------------

--
-- Table structure for table `room_info`
--

CREATE TABLE IF NOT EXISTS `room_info` (
  `Room_id` int(5) NOT NULL AUTO_INCREMENT,
  `Room_num` int(5) NOT NULL,
  `Floor_num` varchar(12) NOT NULL,
  `Student_id` int(5) NOT NULL,
  PRIMARY KEY (`Room_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`Room_id`, `Room_num`, `Floor_num`, `Student_id`) VALUES
(1, 100, 'Groundfloor', 1),
(2, 100, 'Groundfloor', 2),
(3, 201, 'Firstfloor', 3),
(4, 201, 'Firstfloor', 4),
(5, 300, 'Secondfloor', 5),
(6, 300, 'Secondfloor', 6),
(7, 301, 'Secondfloor', 7),
(8, 301, 'Secondfloor', 8),
(9, 101, 'Groundfloor', 9),
(10, 101, 'Groundfloor', 10),
(11, 110, 'Groundfloor', 11),
(12, 120, 'Groundfloor', 12),
(13, 150, 'Groundfloor', 13),
(14, 159, 'Groundfloor', 14),
(15, 330, 'Secondfloor', 15),
(16, 349, 'Secondfloor', 16);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `Student_id` int(11) NOT NULL AUTO_INCREMENT,
  `Student_name` varchar(15) NOT NULL,
  `Dept_id` int(11) NOT NULL,
  `Session` varchar(11) NOT NULL,
  `Home_district` varchar(15) NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`Student_id`, `Student_name`, `Dept_id`, `Session`, `Home_district`) VALUES
(1, 'Shahadat', 1, '2009-10', 'Nilphamary'),
(2, 'Raihan', 1, '2009-10', 'Feni'),
(3, 'Moin', 2, '2009-10', 'Dhaka'),
(4, 'Akram', 3, '2009-10', 'Noakhali'),
(5, 'Tokhin', 1, '2009-10', 'Cox-bazar'),
(6, 'Mahmud', 1, '2009-10', 'Shylet'),
(7, 'Sobuj', 3, '2008-9', 'Borisal'),
(8, 'Monir', 2, '2008-9', 'Commila'),
(9, 'Saddam', 2, '2009-10', 'Tangile'),
(10, 'Farid', 3, '2009-10', 'Tangile'),
(11, 'Joni', 5, '2009-10', 'Dhaka'),
(12, 'anjel', 6, '2010-11', 'Commila'),
(13, 'Robi', 4, '2010-11', 'Feni'),
(14, 'murad', 8, '2010-11', 'Bogra'),
(15, 'hamja', 2, '2010-11', 'borisal'),
(16, 'Salie', 3, '2010-11', 'Nilphamary');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(25) NOT NULL,
  `country` varchar(15) NOT NULL,
  `birthday` varchar(21) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `firstname` (`firstname`,`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `country`, `birthday`) VALUES
(1, 'Shahadat', 'Bithil', 'Shahadat123', '5a325ceae386c7e8a303835d79842588', 'Bithil@gmail.com', ' Bangladesh', '27November,1989'),
(2, 'tokhin', 'marma', 'tokhin', '554e9fd65d620914f4341bb83eb67f32', 'tokhin@yahoo.com', ' Pakistan', '18October,1990'),
(3, 'mahamud', 'Bishal', 'mahamud', '1715009e206a9a2f75678f8806bccf21', 'mahamud@gmail.com', ' Bangladesh', '13June,1990'),
(4, 'niloy', 'banik', 'niloy12', '1a89e85ca8ed022bf57f849d88f12b42', 'Bishal@gmail.com', ' Sri-Lanka', '15September,1987');
