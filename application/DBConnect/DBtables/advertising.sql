-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2018 at 05:04 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geen pedal`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertising`
--

CREATE TABLE IF NOT EXISTS `advertising` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pic` varchar(10000) NOT NULL,
  `words` varchar(10000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `advertising`
--

INSERT INTO `advertising` (`ID`, `name`, `pic`, `words`) VALUES
(7, 'Advertisinginfo', '', 'This is where we tell u about advertising This is where we tell u about advertisingThis is where we tell u about advertisingThis is where we tell u about advertisingThis is where we tell u about advertisingThis is where we tell u about advertisingThis is where we tell u about advertisingThis is where we tell u about advertising'),
(8, 'BikeValet', '', 'We do bike Valet for events.. chink in you bike and don''t have to worry about it tell you have to go home'),
(9, 'box1', '', 'Distribution'),
(10, 'Box2', '', 'Festival Promotion '),
(11, 'box3', '', 'Business Exposure/Promotion'),
(12, 'box1info', '', 'test on box 1 test on box 1 test on box 1 test on box 1 test on box 1 test on box 1 test on box 1 test on box 1 test on box 1 test on box 1 '),
(13, 'box2info', '', 'test one box2 test one box2 test one box2 test one box2 test one box2 test one box2 test one box2 test one box2 test one box2 '),
(14, 'box3info', '', ' test on box 3 ');
