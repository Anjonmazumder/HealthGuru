-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2015 at 06:06 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diseases_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE IF NOT EXISTS `diseases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `diseases_effects`
--

CREATE TABLE IF NOT EXISTS `diseases_effects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disease_id` int(11) NOT NULL,
  `effect` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `diseases_foods`
--

CREATE TABLE IF NOT EXISTS `diseases_foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disease_id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_desc` text NOT NULL,
  `food_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `diseases_foods`
--

INSERT INTO `diseases_foods` (`id`, `disease_id`, `food_name`, `food_desc`, `food_image`) VALUES
(1, 1, 'Green Tea', 'very important', 'Koala.jpg'),
(2, 2, 'grass', 'hhhahhhshhshhhs', 'Penguins.jpg'),
(3, 3, 'wefewf', 'wefwefwef', 'Tulips.jpg'),
(4, 4, '', '', ''),
(5, 5, '', '', ''),
(6, 6, '', '', ''),
(7, 7, '', '', ''),
(8, 8, '', '', ''),
(9, 9, '', '', ''),
(10, 10, '', '', ''),
(11, 11, '', '', ''),
(12, 12, '', '', ''),
(13, 13, 'jajjajjja', 'vevevve', '12.88339972'),
(14, 13, 'dsfesf', 'sdfdsfs', '13'),
(15, 14, 'qwd', 'qqwdqwd', '14.Walt-Disney-Dream-Facebook-Profile-Timeline-Cover.jpg'),
(16, 14, 'qwdqwd', 'qwdqwd', '14.images (5).jpg'),
(17, 15, 'qwdqw', 'qwdqwd', '15images (2).jpg'),
(18, 15, 'qwdsqwd', 'qwd', '15Walt-Disney-Dream-Facebook-Profile-Timeline-Cover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `diseases_symptoms`
--

CREATE TABLE IF NOT EXISTS `diseases_symptoms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disease_id` int(11) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `disease_image`
--

CREATE TABLE IF NOT EXISTS `disease_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disease_id` int(11) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE IF NOT EXISTS `login_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `login_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `user_id`, `login_time`) VALUES
(30, 4, '2015-07-26 09:32:11'),
(31, 4, '2015-07-26 09:37:44'),
(32, 4, '2015-07-26 15:01:11'),
(33, 4, '2015-07-26 15:13:31'),
(34, 4, '2015-07-26 15:20:20'),
(35, 4, '2015-07-26 15:30:00'),
(36, 4, '2015-07-26 15:41:21'),
(37, 4, '2015-07-26 16:05:10'),
(38, 3, '2015-07-26 16:17:14'),
(39, 4, '2015-07-26 16:21:30'),
(40, 3, '2015-07-26 16:29:37'),
(41, 4, '2015-07-26 16:31:09'),
(42, 4, '2015-07-26 16:33:56'),
(43, 4, '2015-07-26 17:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `continent` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'general',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `sex`, `continent`, `type`) VALUES
(3, 'anjonmazumder@gmail.com', 'Anjon', '202cb962ac59075b964b07152d234b70', 'Male', '', 'general'),
(4, 'an@an.com', 'an', '202cb962ac59075b964b07152d234b70', 'Male', '', 'admin'),
(5, 'sagar@gmail.com', 'sagar', '15de21c670ae7c3f6f3f1f37029303c9', 'Male', '1', 'general');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
