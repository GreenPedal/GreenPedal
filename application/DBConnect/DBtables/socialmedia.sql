-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2018 at 07:39 AM
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
-- Table structure for table `socialmedia`
--

CREATE TABLE IF NOT EXISTS `socialmedia` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Bus_ID` int(255) NOT NULL,
  `WebSite` varchar(100) NOT NULL,
  `Pic` varchar(400) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`ID`, `Bus_ID`, `WebSite`, `Pic`) VALUES
(1, 0, 'https://www.facebook.com/GreenPed/', 'facebook.jpg'),
(2, 0, 'https://www.instagram.com/greenpedalcouriers831/', 'instagram.jpg'),
(3, 0, 'https://www.yelp.com/biz/green-pedal-couriers-monterey', 'yelp.jpg'),
(4, 11, 'https://www.facebook.com/heirloompizzaco/', 'facebook.jpg'),
(5, 11, 'https://www.yelp.com/biz/heirloom-pizza-monterey-4', 'yelp.jpg'),
(6, 11, 'https://www.instagram.com/heirloompizzaco/', 'instagram.jpg'),
(7, 11, 'https://twitter.com/heirloompizzaco', 'twitter.jpg');
