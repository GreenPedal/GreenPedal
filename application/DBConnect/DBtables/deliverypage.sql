-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2018 at 05:05 AM
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
-- Table structure for table `deliverypage`
--

CREATE TABLE IF NOT EXISTS `deliverypage` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `words` varchar(10000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `deliverypage`
--

INSERT INTO `deliverypage` (`ID`, `name`, `pic`, `words`) VALUES
(1, 'DeliveryInfo', '', 'We Deliver all over monterey with We Deliver all over monterey with We Deliver all over monterey with We Deliver all over monterey with We Deliver all over monterey with We Deliver all over monterey with We Deliver all over monterey with We Deliver all over monterey with '),
(2, 'Deliveriesbox', '', 'These are the companies we do all there deliveries for.. click on one and we set up a delivery today'),
(3, 'otherDeliveries', '', 'If you would like us to deliver your packages, court documents, food, medical transportation click here and answer some questions. ');
