-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2018 at 05:06 AM
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
-- Table structure for table `frontpage`
--

CREATE TABLE IF NOT EXISTS `frontpage` (
  `words_ID` int(11) NOT NULL AUTO_INCREMENT,
  `words` varchar(1000) NOT NULL,
  `pic` varchar(10000) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`words_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `frontpage`
--

INSERT INTO `frontpage` (`words_ID`, `words`, `pic`, `name`) VALUES
(1, ' but heard  but heard  but heard  but heard  but heard  but heard  but heard  but heard  but heard  but heard  but heard  but heard ', '', 'Front Info'),
(2, 'Test Deliveries Test Deliveries Test Deliveries Test Deliveries Test Deliveries Test Deliveries Test Deliveries Test Deliveries Test Deliveries ', '', 'Deliveries'),
(5, 'Test Events Test Events Test Events Test Events Test Events Test Events Test Events Test Events Test Events Test Events Test Events Test Events ', '', 'Events'),
(6, 'Click on a restaurant  and get a delivery from us', '', 'Deliverybox'),
(8, 'These are the Events That do there Advertising Tho us', '', 'AdvertisingBox');
