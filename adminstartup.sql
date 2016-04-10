-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2016 at 09:36 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adminstartup`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL,
  `createdDate` datetime NOT NULL,
  `modifiedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `createdDate`, `modifiedDate`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', '2016-04-10 07:30:32', '2016-04-10 10:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `startuptv`
--

CREATE TABLE IF NOT EXISTS `startuptv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `btnText` text NOT NULL,
  `currentHost` varchar(512) NOT NULL,
  `bio` text NOT NULL,
  `topic` text NOT NULL,
  `div1` varchar(512) NOT NULL,
  `div2` varchar(512) NOT NULL,
  `div3` varchar(512) NOT NULL,
  `div1Text` text NOT NULL,
  `div2Text` text NOT NULL,
  `div3Text` text NOT NULL,
  `extraDiv` varchar(512) NOT NULL,
  `createdDate` datetime NOT NULL,
  `modifiedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `startuptv`
--

INSERT INTO `startuptv` (`id`, `btnText`, `currentHost`, `bio`, `topic`, `div1`, `div2`, `div3`, `div1Text`, `div2Text`, `div3Text`, `extraDiv`, `createdDate`, `modifiedDate`) VALUES
(1, 'startuptv', 'xyz', 'abc', 'sfsdf', 'uploadImg/heartwork.png1460230001.png', 'uploadImg/twitter.png1460230020.png', 'uploadImg/heartwork.png1460230041.png', '<p>\r\n\r\n</p><h3>Responsive design</h3><p>Responsive in design, one template = fits many screens. A "single-page" base template with magical powers.</p><p><a target="_blank" rel="nofollow">Find out more</a></p>\r\n\r\n<br><p></p>', '<p>\r\n\r\n</p><h3>Built with Twitter Bootstrap</h3><p><i>"Sleek, intuitive, and powerful front-end framework for faster and easier web development."</i></p><p>LandingStrip is built to work with <strong>Twitter Bootstrap</strong>, which makes it easily modifiable, lean and clean.</p><p><a target="_blank" rel="nofollow">Find out more</a></p>\r\n\r\n<br><p></p>', '<p>\r\n\r\n\r\n\r\n</p><h3>Crafted with love.</h3><p><i>"Absolutely enjoyed the process of crafting a sharp and consistent tone for LandingStrip. Tried to mold a template where people can clearly get their intent across with a single-page using a story-like flow."</i></p><p><strong>- Ace Subido</strong></p><p><a target="_blank" rel="nofollow">Find out who we are</a></p>\r\n\r\n\r\n\r\n<p></p>', '', '0000-00-00 00:00:00', '2016-04-09 22:58:40');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
