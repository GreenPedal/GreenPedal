-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2018 at 08:17 PM
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
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `Menu_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Bus_ID` int(255) NOT NULL,
  `Cat_ID` int(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `SmallPrice` varchar(5) NOT NULL,
  `BigPrice` varchar(6) NOT NULL,
  `pic` varchar(500) NOT NULL,
  PRIMARY KEY (`Menu_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Menu_ID`, `Bus_ID`, `Cat_ID`, `name`, `Description`, `SmallPrice`, `BigPrice`, `pic`) VALUES
(1, 11, 1, 'Roasted Broccoli', 'tossed in bread crumbs, parmesan, garlic, chili flakes, olive oil', '$8.00', '', ''),
(2, 11, 1, 'Bomb Beets', 'twice roasted beets topped w/goat cheese, toasted walnuts & beet greens', '$9.00', '', ''),
(3, 11, 2, 'Greek Salad', 'romaine, red onions, kalamatas, cucumbers, cherry tomatoes, feta, house made lemon thyme vinaigrette', '', '', ''),
(4, 11, 2, 'Caesar Salad', 'romaine, house made croutons, shaved parmesan, house made caesar dressing', '', '', ''),
(5, 11, 2, 'Arugula Salad ', 'arugula, green apple, goat cheese, toasted sunflower seeds, house lemon thyme vinaigrette', '', '', ''),
(6, 11, 3, 'heirloom', 'spinach, bacon, mushrooms, onions, garlic, ricotta, gorgonzola', '', '', ''),
(7, 11, 3, 'New Original', 'sausage, onions, mushroom, red bell', '', '', ''),
(8, 11, 3, 'Bixby', 'sausage, feta cheese, green olives, red bells, sun-dried tomatoes', '', '', ''),
(9, 11, 3, 'Slider', 'meatball, mushrooms, onions, roasted garlic, extra cheese', '', '', ''),
(10, 11, 3, 'Heritage', 'extra cheese, pepperoni, sausage, chicken, meatball', '', '', ''),
(11, 11, 3, 'Baked Chicken & Broccoli', 'roasted garlic, ricotta, onion', '', '', ''),
(12, 11, 4, 'Fontina Margherita', 'basil, fontina, fresh mozzarella, cherry tomatoes, garlic, olive oil base', '', '', ''),
(13, 11, 4, 'Bounty', 'squash, onions, mushrooms, red bells, kalamata olives, fresh garlic', '', '', ''),
(14, 11, 4, 'Napoli', 'uncured pepperoni & salami, kalamata olives, onion, pepperoncini, asiago', '', '', ''),
(15, 11, 4, 'Sweet and Spicy', 'pepperoni, pineapple, jalapeno, garlic, onion', '', '', ''),
(16, 11, 4, 'Pesto Potato', 'pesto, red potatoes, ricotta, roasted garlic', '', '', ''),
(17, 11, 6, 'Inga''s Olallieberry Pie', '', '$9.00', '', ''),
(18, 11, 6, 'Revival Vanilla Ice Cream ', '', '$4.00', '', ''),
(19, 11, 1, 'Spicy Baked Chicken Wings ', 'served w/house ranch & celery sticks', '$11.0', '', '');
