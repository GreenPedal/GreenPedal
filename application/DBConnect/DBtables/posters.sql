-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2018 at 05:07 AM
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
-- Table structure for table `posters`
--

CREATE TABLE IF NOT EXISTS `posters` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `website` mediumtext NOT NULL,
  `pic` varchar(10000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posters`
--

INSERT INTO `posters` (`ID`, `name`, `website`, `pic`) VALUES
(1, 'facebook', 'https://www.w3schools.com/default.asp', '16585067_1885194671712135_8744720394394533888_n.jpg'),
(2, 'fingus', 'https://www.facebook.com/', 'FungusFair_17Poster.jpg');
