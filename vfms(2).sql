-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2016 at 12:51 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vfms`
--
CREATE DATABASE IF NOT EXISTS `vfms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vfms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_username` (`admin_username`,`admin_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` bigint(15) NOT NULL AUTO_INCREMENT,
  `booking_building` varchar(30) NOT NULL,
  `booking_room` varchar(30) NOT NULL,
  `booking_real_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `booking_start_date` varchar(30) NOT NULL,
  `booking_end_date` varchar(30) NOT NULL,
  `booking_start_time` varchar(30) NOT NULL,
  `booking_end_time` varchar(30) NOT NULL,
  `booking_user_email` varchar(70) NOT NULL,
  `booking_organization` varchar(140) NOT NULL,
  `booking_event_name` varchar(140) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_building`, `booking_room`, `booking_real_time`, `booking_start_date`, `booking_end_date`, `booking_start_time`, `booking_end_time`, `booking_user_email`, `booking_organization`, `booking_event_name`) VALUES
(4, 'FET', 'FET001', '2016-02-06 05:06:26.079782', '02/28/2016', '02/28/2016', 'jkkk', '11:00', 'dennismuchiri0@gmail', 'Christian Union', 'ee'),
(5, 'FET', 'FET001', '2016-02-06 05:07:58.511082', '02/28/2016', '02/28/2016', '7:00am', '11:00', 'dennismuchiri0@gmail', 'Christian Union', 'errr'),
(6, 'FET', 'FET001', '2016-02-06 05:09:31.965030', '02/28/2016', '02/28/2016', '7:00am', '11:00', 'dennismuchiri0@gmail', 'Christian Union', 'eee');

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE IF NOT EXISTS `building` (
  `building_id` varchar(10) NOT NULL,
  `building_name` varchar(30) NOT NULL,
  PRIMARY KEY (`building_id`),
  UNIQUE KEY `building_name` (`building_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`building_id`, `building_name`) VALUES
('002', 'ASSEMBLY HALL'),
('001', 'FET');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` varchar(10) NOT NULL,
  `room_name` varchar(30) NOT NULL,
  `building_name` varchar(30) NOT NULL,
  PRIMARY KEY (`room_id`),
  UNIQUE KEY `room_name` (`room_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_name`, `building_name`) VALUES
('001', 'FET001', 'FET'),
('002', 'FET002', 'FET'),
('003', 'FET003', 'FET'),
('004', 'AH001', 'ASSEMBLY HALL'),
('005', 'AH002', 'ASSEMBLY HALL'),
('006', 'AH003', 'ASSEMBLY HALL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone_no`) VALUES
(1, 'dennis', 'dennis', 'dennismuchiri0@gmail', '+254708333028');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE IF NOT EXISTS `venue` (
  `venue_id` varchar(10) NOT NULL,
  `venue_name` varchar(140) NOT NULL,
  `venue_room_name` varchar(30) NOT NULL,
  `venue_status` varchar(20) NOT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
