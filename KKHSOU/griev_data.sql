-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 25, 2019 at 05:48 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `griev_redres`
--

-- --------------------------------------------------------

--
-- Table structure for table `griev_data`
--

DROP TABLE IF EXISTS `griev_data`;
CREATE TABLE IF NOT EXISTS `griev_data` (
  `gd_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ph_no` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `g_area` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `g_about` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `action_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `reply` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remarks` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reserve5` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reserve6` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reserve7` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`gd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `griev_data`
--

INSERT INTO `griev_data` (`gd_id`, `name`, `email`, `ph_no`, `address`, `g_area`, `g_about`, `action_status`, `reply`, `remarks`, `reserve5`, `reserve6`, `reserve7`) VALUES
(1, 'test', 'fdsfsf@dggd.com', '+91 1234567890', 'terst', 'Administration', 'fdgsdfhfshs', '1', 'dasffasf', 'adwadwadwad', NULL, NULL, NULL),
(2, 'test', 'fdsfsf@dggd.com', '+91 1234567890', 'tests', 'Caste Discrimination (For SC & ST)', 'tsest', '2', 'asdsadfasda', 'dasdasdwdawdawd', NULL, NULL, NULL),
(3, 'test', 'fdsfsf@dggd.com', '+91 1234567890', 'gjhgjkkj', 'Caste Discrimination (For SC & ST)', 'jfjhjhvjh', '0', NULL, NULL, NULL, NULL, NULL),
(4, 'test', 'fdsfsf@dggd.com', '+91 1234567890', 'hkhkjhkjh', 'Caste Discrimination (For SC & ST)', 'hkjhhihhoh', '0', NULL, NULL, NULL, NULL, NULL),
(5, 'test', 'fdsfsf@dggd.com', '+91 1234567890', 'test', 'Caste Discrimination (For SC & ST)', 'test', '0', NULL, NULL, NULL, NULL, NULL),
(6, 'test', 'fdsfsf@dggd.com', '+91 1234567890', 'asdasasas', 'Academic', 'dadadsadas', '0', NULL, NULL, NULL, NULL, NULL),
(7, 'test', 'fdsfsf@dggd.com', '+91 1234567890', 'sfsdfdsdf', 'Examination', 'fsfsdfsdfsdf', '0', NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
