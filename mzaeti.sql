-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2014 at 11:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mzaeti`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `article_author` int(11) NOT NULL,
  `article_type` tinyint(4) NOT NULL,
  `article_title` text NOT NULL,
  `article_excerpt` text NOT NULL,
  `article_content` text,
  `article_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `config_var` varchar(100) NOT NULL,
  `config_value` varchar(100) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL,
  `user_pass` varchar(64) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_registered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_status` tinyint(4) NOT NULL DEFAULT '1',
  `user_displayname` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
