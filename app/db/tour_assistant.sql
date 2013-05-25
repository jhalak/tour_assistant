-- phpMyAdmin SQL Dump
-- version 3.5.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2013 at 02:43 PM
-- Server version: 5.1.69-0ubuntu0.11.10.1
-- PHP Version: 5.3.6-13ubuntu3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tour_assistant`
--

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

DROP TABLE IF EXISTS `costs`;
CREATE TABLE IF NOT EXISTS `costs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `description` text,
  `tour_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `costs`
--

INSERT INTO `costs` (`id`, `amount`, `description`, `tour_id`, `created`, `modified`) VALUES
(1, 2000, '', 2, '2013-05-20 18:50:45', '2013-05-20 18:50:45'),
(2, 5000, '', 3, '2013-05-21 15:57:37', '2013-05-21 15:57:37'),
(3, 2000, '', 5, '2013-05-21 18:03:40', '2013-05-21 18:03:40'),
(4, 27, '', 1, '2013-05-25 14:26:39', '2013-05-25 14:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

DROP TABLE IF EXISTS `deposits`;
CREATE TABLE IF NOT EXISTS `deposits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `description` text,
  `tour_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `amount`, `description`, `tour_id`, `member_id`, `created`, `modified`) VALUES
(1, 1000, '', 2, 3, '2013-05-20 18:50:54', '2013-05-20 18:50:54'),
(2, 2000, '', 3, 6, '2013-05-21 15:57:49', '2013-05-21 15:57:49'),
(3, 4000, '', 3, 7, '2013-05-21 15:58:02', '2013-05-21 15:58:02'),
(4, 1000, '', 5, 10, '2013-05-21 18:03:49', '2013-05-21 18:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Admin', '2013-05-05 18:15:05', '2013-05-05 18:15:05'),
(2, 'User', '2013-05-05 18:17:23', '2013-05-05 18:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `user_id`) VALUES
(1, 'Test member 1', 1),
(2, 'Test member 2', 1),
(8, 'Test member_2', 14),
(6, 'Tuntuli', 14),
(7, 'Sakib', 14),
(9, 'Test member_2', 15),
(10, 'iMunshi', 15),
(11, 'Jhalak', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members_tours`
--

DROP TABLE IF EXISTS `members_tours`;
CREATE TABLE IF NOT EXISTS `members_tours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `members_tours`
--

INSERT INTO `members_tours` (`id`, `member_id`, `tour_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(4, 6, 3),
(5, 7, 3),
(6, 8, 4),
(7, 9, 5),
(8, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

DROP TABLE IF EXISTS `tours`;
CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `name`, `description`, `user_id`) VALUES
(1, 'Rangamati', 'efasdfasdf', 1),
(2, 'Bogura', 'sadf asdf ', 8),
(3, 'Hatirjhil', 'Janina ', 14),
(4, 'Rajshahi', '', 14),
(5, 'Rajshahi', 'asdf asdf', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'Jhalak', 'jhalak@tasawr.com', 'jhalak', '48cbc3ec8fd8837ea0dbdc27aef23cba9d4a91b7', 1, '2013-05-05 18:37:48', '2013-05-25 14:41:05'),
(15, 'iMunshi', 'munshi@tasawr.com', 'imunshi', '3cbad36ce94d176880a7cb2d2b32bb182be4ae3e', 2, '2013-05-21 18:02:36', '2013-05-21 18:02:36'),
(13, 'Testy', 'test3@tasawr.com', 'testy', '18610a60c03f75e6a86af1d82604ef207f99983a', 2, '2013-05-21 14:12:29', '2013-05-21 14:12:29'),
(14, 'Sakib', 'sakib@tasawr.com', 'sakib', '18610a60c03f75e6a86af1d82604ef207f99983a', 2, '2013-05-21 15:55:41', '2013-05-21 15:55:41'),
(12, 'Test', 'test@tasawr.com', 'test', '18610a60c03f75e6a86af1d82604ef207f99983a', 2, '2013-05-21 14:10:35', '2013-05-21 14:10:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
