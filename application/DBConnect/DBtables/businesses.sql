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
-- Table structure for table `businesses`
--

CREATE TABLE IF NOT EXISTS `businesses` (
  `Bus_ID` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `website` varchar(100) NOT NULL,
  `motto` varchar(100) NOT NULL,
  `about` varchar(30000) NOT NULL,
  `Open` time NOT NULL,
  `Close` time NOT NULL,
  `Pic` varchar(50) NOT NULL,
  PRIMARY KEY (`Bus_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`Bus_ID`, `name`, `address`, `lat`, `lng`, `website`, `motto`, `about`, `Open`, `Close`, `Pic`) VALUES
(11, 'Heirloom Pizza', '700 cass street #102 monterey, ca 93940', 36.606216, -121.898460, 'https://www.toasttab.com/heirloom-pizza-co-cass-street/v2/online-order#!/', 'heirloom pizza co... it''s how deep dish is done!', 'In 1987, michael foley started out as a delivery boy at woodstock’s pizza in santa barbara, california. this is where he learned to navigate, organize and deliver quality with a smile, incidentally obtaining a bachelor’s degree from ucsb. earning a woodstock’s management position during his 7-year stint, michael learned the importance of details and how a culture of camaraderie and teamwork was critical to the success of the restaurant.    In 2005, michael brought his values and skills to little star pizza in san francisco, where, over the course of 11 years, he helped to brand and elevate that excellent establishment into one of sf’s premier deep-dish pizza destinations.   heirloom pizza co. is the culmination of 17 years in the pizza business and you don’t get there without learning a few things:  the staff is critical to success. keep the menu simple and maintain the highest standards in quality. the details matter. lead by example. heirloom’s goal is to embed itself in the fabric of our neighborhood and the monterey bay peninsula community. a destination for locals and tourists alike.', '00:00:00', '00:00:00', 'pizza.jpg'),
(17, 'weed', '0', 36.614906, -121.842628, 'https://wheresweed.com/', 'weed is all goood', 'i smoke alot of weed yes it do.. come and some with me', '00:00:00', '00:00:00', 'Gorillas Breath OG 11.8.16.jpg');
