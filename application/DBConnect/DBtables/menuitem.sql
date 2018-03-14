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
-- Table structure for table `menuitem`
--

CREATE TABLE IF NOT EXISTS `menuitem` (
  `Item_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Menu_ID` int(255) NOT NULL,
  `Bus_ID` int(255) NOT NULL,
  `Item_name` varchar(255) NOT NULL,
  UNIQUE KEY `Item_ID` (`Item_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `menuitem`
--

INSERT INTO `menuitem` (`Item_ID`, `Menu_ID`, `Bus_ID`, `Item_name`) VALUES
(1, 1, 11, 'tossed in bread crumbs,'),
(2, 1, 11, 'parmesan,'),
(3, 1, 11, 'garlic,'),
(4, 1, 11, 'chili flakes,'),
(5, 1, 11, 'olive oil');
