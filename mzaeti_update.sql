-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2014 at 01:22 AM
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
  `article_type` enum('page','article','image','document') DEFAULT NULL,
  `article_category` enum('news','regulation','gallery','about','contact') DEFAULT NULL,
  `article_title_id` text,
  `article_title_en` text,
  `article_excerpt` text NOT NULL,
  `article_content_id` text,
  `article_content_en` text,
  `downloadable_content` text,
  `downloadable_content_extra` text,
  `article_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_date`, `article_author`, `article_type`, `article_category`, `article_title_id`, `article_title_en`, `article_excerpt`, `article_content_id`, `article_content_en`, `downloadable_content`, `downloadable_content_extra`, `article_status`) VALUES
(1, '2014-12-04 19:30:40', 1, 'document', 'regulation', 'Regulation Title 1', 'Regulation Title 1', 'Regulation-Title-1', 'Regulation Desc 1', 'Regulation Desc 1', 'Getting_Started.pdf', NULL, 1),
(2, '2014-12-04 19:35:01', 1, 'document', 'regulation', 'Regulation Title 2', 'Regulation Title 2', 'regulation-title-2', 'Regulation Desc 2', 'Regulation Desc 2', 'Getting_Started1.pdf', NULL, 1),
(3, '2014-12-04 19:54:57', 1, 'document', 'regulation', 'Regulation Title 3', 'Regulation Title 3', 'regulation-title-3', 'Regulation Desc 3', 'Regulation Desc 3', 'Getting_Started2.pdf', NULL, 1),
(4, '2014-12-04 20:42:13', 1, 'document', 'regulation', 'Regulation Title 4', 'Regulation Title 4', 'regulation-title-4', 'Regulation Description 4', 'Regulation Description 4', 'Getting_Started3.pdf', NULL, 1),
(5, '2014-12-05 04:33:40', 1, 'document', 'regulation', 'Regulation Title 5', 'Regulation Title 5', 'regulation-title-5', 'test 5', 'test 5', 'Getting_Started4.pdf', NULL, 1),
(6, '2014-12-05 06:20:33', 1, 'image', 'gallery', 'test image 12', 'test image 12', 'test-image-12', 'fdsafads', 'fdsafads', 'JSP_13472.jpg', 'thumb250_1417735233JSP_13472.jpg', 1),
(7, '2014-12-05 06:41:57', 1, 'image', 'gallery', 'Title image', 'Title image', 'title-image', 'Desc image', 'Desc image', 'JSP_13473.jpg', 'thumb250_1417736517_JSP_13473.jpg', 1),
(8, '2014-12-05 06:43:59', 1, 'image', 'gallery', 'fdsa', 'fdsa', 'fdsa', 'fdsafdas', 'fdsafdas', 'IMG_1253.JPG', 'thumb250_1417736639_IMG_1253.JPG', 1),
(9, '2014-12-05 06:50:14', 1, 'image', 'gallery', 'test image 4', 'test image 4', 'test-image-4', 'desc 4', 'desc 4', 'big250_1417737014_IMG_1254.JPG', 'thumb250_1417737014_IMG_1254.JPG', 1),
(10, '2014-12-05 06:52:02', 1, 'image', 'gallery', 'test image 4', 'test image 4', 'test-image-4', 'desc img 5', 'desc img 5', 'big250_1417737122_IMG_1259.JPG', 'thumb250_1417737122_IMG_1259.JPG', 1),
(11, '2014-12-05 06:53:18', 1, 'image', 'gallery', 'test image 45', 'test image 45', 'test-image-45', 'safdasfda', 'safdasfda', 'big500_1417737198_IMG_12591.JPG', 'thumb250_1417737198_IMG_12591.JPG', 1),
(12, '2014-12-05 06:56:04', 1, 'image', 'gallery', 'fdasfd', 'fdasfd', 'fdasfd', 'asfasfas', 'asfasfas', 'big500_1417737364_IMG_1255.JPG', 'thumb250_1417737364_IMG_1255.JPG', 1),
(13, '2014-12-05 06:57:02', 1, 'image', 'gallery', 'dfasa', 'dfasa', 'dfasa', 'fdsafdas', 'fdsafdas', 'big500_1417737422_IMG_0855.JPG', 'thumb250_1417737422_IMG_0855.JPG', 1),
(14, '2014-12-05 07:00:31', 1, 'image', 'gallery', 'adf', 'adf', 'adf', 'fdasfas', 'fdasfas', 'big500_1417737631_IMG_0866.JPG', 'thumb250_1417737631_IMG_0866.JPG', 1),
(15, '2014-12-05 07:02:14', 1, 'image', 'gallery', 'asdfdas', 'asdfdas', 'asdfdas', 'fdasfdas', 'fdasfdas', 'big500_1417737734_IMG_0865.JPG', 'thumb250_1417737734_IMG_0865.JPG', 1);

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
-- Table structure for table `temp_images`
--

CREATE TABLE IF NOT EXISTS `temp_images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_title` text,
  `image_desc` text,
  `image_path` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `temp_images`
--

INSERT INTO `temp_images` (`image_id`, `image_title`, `image_desc`, `image_path`) VALUES
(1, 'test image 12', 'fdsafdas', 'JSP_1347.jpg'),
(2, 'test image 12', 'fdsafdas', 'JSP_1346.jpg'),
(3, 'test image 12', 'fdsafdas', 'JSP_13461.jpg'),
(4, 'test image 12', 'fdsafads', 'JSP_13471.jpg'),
(5, 'test image 12', 'fdsafads', 'JSP_13472.jpg'),
(6, 'Title image', 'Desc image', 'JSP_13473.jpg'),
(7, 'fdsa', 'fdsafdas', 'IMG_1253.JPG'),
(8, 'test image 4', 'desc 4', 'IMG_1254.JPG'),
(9, 'test image 4', 'desc img 5', 'IMG_1259.JPG'),
(10, 'test image 45', 'safdasfda', 'IMG_12591.JPG'),
(11, 'fdasfd', 'asfasfas', 'IMG_1255.JPG'),
(12, 'dfasa', 'fdsafdas', 'IMG_0855.JPG'),
(13, 'adf', 'fdasfas', 'IMG_0866.JPG'),
(14, 'asdfdas', 'fdasfdas', 'IMG_0865.JPG'),
(15, 'afas', 'fdasfasf', 'IMG_0862.JPG');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_pass`, `user_email`, `user_registered`, `user_status`, `user_displayname`) VALUES
(1, 'admin', '9bdcfa03b992043dd33833d9dd2a7857', 'admin@aeti.or.id', '2014-12-04 15:56:45', 1, 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
