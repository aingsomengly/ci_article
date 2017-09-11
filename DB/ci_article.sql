-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2015 at 07:23 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_article`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE IF NOT EXISTS `tbl_article` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `public_date` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`art_id`),
  KEY `u_id` (`u_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`art_id`, `title`, `description`, `public_date`, `image`, `u_id`, `cat_id`) VALUES
(1, 'hrd', '<p>this is hrd</p>', '2015-11-25', 'bef401f85945f502135ab7c493c8f2a1.png', 1, 1),
(10, 'dd', '<p>this is dd</p>\r\n', '2015-11-27 04:25:54', '6e592c4c613a0587d3ea9470c700ebf4.JPG', 1, 1),
(12, 'aaaa', '<p>this is teat</p>\r\n', '2015-11-27 04:27:51', 'default.jpg', 1, 1),
(13, 'chhoin', '<p>this is chkhoin</p>\r\n', '2015-11-27 04:28:05', 'b66bacc22fc53413f868b9e29e1d7959.JPG', 1, 1),
(14, 'aaa', '<p>this is aaa</p>\r\n', '2015-11-30 15:24:20', 'default.jpg', 1, 1),
(15, 'aaaaaa', '<p>aaaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n', '2015-11-30 15:24:28', 'default.jpg', 1, 1),
(16, 'aaaaaaaa', '<p>aaaaaa</p>\r\n', '2015-11-30 15:39:48', 'default.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`) VALUES
(1, 'News'),
(2, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_user` varchar(255) DEFAULT NULL,
  `u_password` varchar(255) DEFAULT NULL,
  `u_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `u_user`, `u_password`, `u_type`) VALUES
(1, 'chhoinz', '123z', 'Admin'),
(2, 'tong', '123', 'user'),
(3, 'dara', '123', 'user'),
(16, 'hello', '123', 'User'),
(19, 'chhoin', '123z', 'Admin'),
(20, 'a', '123', 'User'),
(21, 'b', '123', 'Admin'),
(22, 'c', '123', 'Admin'),
(23, 'd', '123', 'Admin'),
(24, 'f', '123', 'Admin'),
(25, 'g', '123', 'Admin'),
(26, 'h', '123', 'Admin'),
(27, 'aaa', '123', 'Admin'),
(28, 'aa', '123', 'Admin'),
(29, 'aaaa', '123z', 'Admin'),
(30, 'aaaaa', '123', 'Admin'),
(31, 'aaaaaa', '123', 'Admin'),
(34, 'zzz', '123', 'Admin'),
(35, '[removed]alert(''hi'');[removed]', '123', 'Admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD CONSTRAINT `tbl_article_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `tbl_user` (`u_id`),
  ADD CONSTRAINT `tbl_article_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `tbl_category` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
