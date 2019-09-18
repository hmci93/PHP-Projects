-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2019 at 11:16 AM
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
-- Database: `app_status`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_details`
--

DROP TABLE IF EXISTS `app_details`;
CREATE TABLE IF NOT EXISTS `app_details` (
  `ad_id` int(100) NOT NULL AUTO_INCREMENT,
  `sl_no` varchar(200) DEFAULT NULL,
  `receipt_date` varchar(200) DEFAULT NULL,
  `letter_no` varchar(200) NOT NULL,
  `letter_date` varchar(200) DEFAULT NULL,
  `postage` varchar(500) DEFAULT NULL,
  `received_from` varchar(1500) DEFAULT NULL,
  `purpose` varchar(2000) DEFAULT NULL,
  `assigned_to` varchar(1000) DEFAULT NULL,
  `status` varchar(1500) DEFAULT NULL,
  `remarks` varchar(2500) DEFAULT NULL,
  `block_status` int(50) NOT NULL DEFAULT '0',
  `reserve1` varchar(200) DEFAULT NULL,
  `reserve2` varchar(200) DEFAULT NULL,
  `reserve3` varchar(200) DEFAULT NULL,
  `reserve4` varchar(200) DEFAULT NULL,
  `reserve5` varchar(200) DEFAULT NULL,
  `reserve6` varchar(200) DEFAULT NULL,
  `reserve7` varchar(200) DEFAULT NULL,
  `reserve8` varchar(200) DEFAULT NULL,
  `reserve9` varchar(200) DEFAULT NULL,
  `reserve10` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_details`
--

INSERT INTO `app_details` (`ad_id`, `sl_no`, `receipt_date`, `letter_no`, `letter_date`, `postage`, `received_from`, `purpose`, `assigned_to`, `status`, `remarks`, `block_status`, `reserve1`, `reserve2`, `reserve3`, `reserve4`, `reserve5`, `reserve6`, `reserve7`, `reserve8`, `reserve9`, `reserve10`) VALUES
(1, '1', '02-01-2019', '', '15-12-2018', 'Speed post', 'Gogamukh College,', 'Appplication for withheld Results of BA 6th sem. Exam. 2018. Challan xerox copy submit.', 'OSD', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2', '01-02-2019', '', '16-12-2018', 'Speed post', 'Gogamukh College, Nomal Ch. Borpatra,En.no.16020788', 'Appplication for withheld Results of BA 6th sem. Exam. 2018. Challan xerox copy submit.', 'OSD', 'Done, Dt.30-01-19', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '12', '01-02-2019', '', '16-12-2018', 'Speed post', 'Mankacher College, En.no.15030223,15030233,15030235.', 'Application for correction of Totel Marks in DELED Consolidated M/S  2018, Original Submit.', 'OSD', 'Done, Dt.17-01-19', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
