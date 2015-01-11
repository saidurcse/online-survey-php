-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2015 at 11:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `createsurvey`
--

CREATE TABLE IF NOT EXISTS `createsurvey` (
  `surveytitleid` int(11) NOT NULL AUTO_INCREMENT,
  `surveytitle` varchar(100) NOT NULL,
  `activeDeactive` int(11) NOT NULL,
  PRIMARY KEY (`surveytitleid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `createsurvey`
--

INSERT INTO `createsurvey` (`surveytitleid`, `surveytitle`, `activeDeactive`) VALUES
(6, 'Test1', 1),
(7, 'Test2', 0),
(8, 'Test3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questionupload`
--

CREATE TABLE IF NOT EXISTS `questionupload` (
  `quesid` int(11) NOT NULL AUTO_INCREMENT,
  `surveytitleid` int(11) NOT NULL,
  `questitle` varchar(250) NOT NULL,
  `type` varchar(20) NOT NULL,
  `option1` varchar(250) NOT NULL,
  `label1` varchar(250) NOT NULL,
  `option2` varchar(250) NOT NULL,
  `label2` varchar(250) NOT NULL,
  `option3` varchar(250) NOT NULL,
  `label3` varchar(250) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`quesid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `questionupload`
--

INSERT INTO `questionupload` (`quesid`, `surveytitleid`, `questitle`, `type`, `option1`, `label1`, `option2`, `label2`, `option3`, `label3`, `count`) VALUES
(34, 6, 'Do You Like Programming ?', '1', 'Yes', '1', 'No', '2', '', '', 2),
(38, 6, 'Do You Like Cycling?', '2', 'Yes', '1', 'No', '2', 'Other', '3', 3),
(44, 6, 'Please share your suggestion.', '3', '', '', '', '', '', '', 0),
(45, 6, 'Do you like Samsung?', '1', 'Yes', '1', 'No', '2', 'Other', '3', 3),
(46, 6, 'Do you like Dhaka ?', '2', 'Yes', '1', 'No', '2', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `result_store`
--

CREATE TABLE IF NOT EXISTS `result_store` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `surveytitleid` int(11) NOT NULL,
  `ans1` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `result_store`
--

INSERT INTO `result_store` (`res_id`, `surveytitleid`, `ans1`) VALUES
(13, 0, NULL),
(14, 6, 'Yes~0#No~0'),
(15, 6, 'Yes~0#No~0'),
(16, 6, 'Yes~0#No~0'),
(17, 6, 'Yes~0#No~0'),
(18, 6, 'Yes~0#No~0');

-- --------------------------------------------------------

--
-- Table structure for table `surveyresult`
--

CREATE TABLE IF NOT EXISTS `surveyresult` (
  `guestId` int(11) NOT NULL AUTO_INCREMENT,
  `surveytitleid` int(11) DEFAULT NULL,
  `ans1` varchar(250) DEFAULT NULL,
  `ans2` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`guestId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2147483647 ;

--
-- Dumping data for table `surveyresult`
--

INSERT INTO `surveyresult` (`guestId`, `surveytitleid`, `ans1`, `ans2`) VALUES
(4, NULL, NULL, NULL),
(7, NULL, NULL, NULL),
(8, NULL, NULL, NULL),
(9, NULL, NULL, NULL),
(32, NULL, NULL, NULL),
(34, NULL, NULL, NULL),
(54, NULL, NULL, NULL),
(324, NULL, NULL, NULL),
(544, 6, '', ''),
(547, 6, 'No', NULL),
(1234, NULL, NULL, NULL),
(2312, NULL, NULL, NULL),
(3245, 6, 'Yes', NULL),
(21342, NULL, NULL, NULL),
(23124, 6, NULL, NULL),
(123467, NULL, NULL, NULL),
(231246, NULL, NULL, NULL),
(435678, NULL, NULL, NULL),
(12342141, 6, 'Yes', NULL),
(2147483647, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
