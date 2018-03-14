-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2018 at 08:02 PM
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
-- Table structure for table `menu_category`
--

CREATE TABLE IF NOT EXISTS `menu_category` (
  `Cat_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Cat_name` varchar(255) NOT NULL,
  `Bus_ID` int(255) NOT NULL,
  `SmallPrice` varchar(5) NOT NULL,
  `BigPrice` varchar(5) NOT NULL,
  PRIMARY KEY (`Cat_ID`),
  UNIQUE KEY `Cat_ID` (`Cat_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `menu_category`
--

INSERT INTO `menu_category` (`Cat_ID`, `Cat_name`, `Bus_ID`, `SmallPrice`, `BigPrice`) VALUES
(1, 'Appetizers\r\n', 11, '', ''),
(2, 'Salads', 11, '$9.00', '$12.0'),
(3, 'Deep Dish Pizza', 11, '$20.0', '$27.0'),
(4, 'Thin Crust Pizza', 11, '$20.0', '$27.0'),
(5, 'Build Your Own', 11, '', ''),
(6, 'Desserts', 11, '', '');
