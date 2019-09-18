-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2018 at 07:17 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uba1`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar_cov`
--

CREATE TABLE `aadhar_cov` (
  `ac_id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `with_aadhar` int(30) NOT NULL,
  `without_aadhar` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadhar_cov`
--

INSERT INTO `aadhar_cov` (`ac_id`, `v_id`, `caste`, `with_aadhar`, `without_aadhar`) VALUES
(1, 1, 'SC', 0, 174),
(2, 1, 'ST', 0, 25),
(3, 1, 'OBC', 0, 160),
(4, 1, 'GEN', 0, 99),
(5, 2, 'SC', 5, 681),
(6, 2, 'ST', 0, 0),
(7, 2, 'OBC', 0, 0),
(8, 2, 'GEN', 0, 0),
(9, 3, 'SC', 0, 13),
(10, 3, 'ST', 0, 186),
(11, 3, 'OBC', 0, 60),
(12, 3, 'GEN', 0, 0),
(13, 4, 'SC', 0, 4),
(14, 4, 'ST', 0, 4),
(15, 4, 'OBC', 0, 603),
(16, 4, 'GEN', 0, 21),
(17, 5, 'SC', 0, 4),
(18, 5, 'ST', 0, 226),
(19, 5, 'OBC', 0, 69),
(20, 5, 'GEN', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bank_cov`
--

CREATE TABLE `bank_cov` (
  `bc_id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `with_bank` int(30) NOT NULL,
  `without_bank` int(30) NOT NULL,
  `total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_cov`
--

INSERT INTO `bank_cov` (`bc_id`, `v_id`, `caste`, `with_bank`, `without_bank`, `total`) VALUES
(1, 1, 'SC', 109, 40, 149),
(2, 1, 'ST', 14, 8, 22),
(3, 1, 'OBC', 79, 50, 129),
(4, 1, 'GEN', 59, 24, 83),
(5, 2, 'SC', 399, 172, 571),
(6, 2, 'ST', 0, 0, 0),
(7, 2, 'OBC', 0, 0, 0),
(8, 2, 'GEN', 0, 0, 0),
(9, 3, 'SC', 5, 4, 9),
(10, 3, 'ST', 107, 49, 156),
(11, 3, 'OBC', 25, 27, 52),
(12, 3, 'GEN', 0, 0, 0),
(13, 4, 'SC', 1, 1, 2),
(14, 4, 'ST', 2, 0, 2),
(15, 4, 'OBC', 222, 226, 448),
(16, 4, 'GEN', 8, 6, 14),
(17, 5, 'SC', 4, 0, 4),
(18, 5, 'ST', 132, 72, 204),
(19, 5, 'OBC', 18, 43, 61),
(20, 5, 'GEN', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `compost_pit`
--

CREATE TABLE `compost_pit` (
  `cmpst_pit` varchar(100) NOT NULL,
  `vill_data` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drainage_linked`
--

CREATE TABLE `drainage_linked` (
  `drnage_lnk_to_hsehld` varchar(100) NOT NULL,
  `vill_data` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drink_wtr_fac`
--

CREATE TABLE `drink_wtr_fac` (
  `dr_wtr_id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `particulars` varchar(100) NOT NULL,
  `village_data` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drink_wtr_fac`
--

INSERT INTO `drink_wtr_fac` (`dr_wtr_id`, `v_id`, `particulars`, `village_data`) VALUES
(1, 1, 'Piped Water', 9),
(2, 1, 'Community Tap', 60),
(3, 1, 'Hand Pump', 38),
(4, 1, 'Open Well', 13),
(5, 2, 'Piped Water', 41),
(6, 2, 'Community Tap', 6),
(7, 2, 'Hand Pump', 114),
(8, 2, 'Open Well', 9),
(9, 3, 'Piped Water', 0),
(10, 3, 'Community Tap', 0),
(11, 3, 'Hand Pump', 11),
(12, 3, 'Open Well', 8),
(13, 4, 'Piped Water', 22),
(14, 4, 'Community Tap', 41),
(15, 4, 'Hand Pump', 4),
(16, 4, 'Open Well', 77),
(17, 5, 'Piped Water', 2),
(18, 5, 'Community Tap', 5),
(19, 5, 'Hand Pump', 53),
(20, 5, 'Open Well', 2);

-- --------------------------------------------------------

--
-- Table structure for table `d_profile`
--

CREATE TABLE `d_profile` (
  `v_id` int(30) NOT NULL,
  `v_name` varchar(100) NOT NULL,
  `total_household` varchar(70) NOT NULL,
  `total_population` varchar(70) NOT NULL,
  `gender_ratio` varchar(70) NOT NULL,
  `average_members_per_family` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_profile`
--

INSERT INTO `d_profile` (`v_id`, `v_name`, `total_household`, `total_population`, `gender_ratio`, `average_members_per_family`) VALUES
(1, 'BHASKAR NAGAR', '111', '458', '936 Females per 1000 Males', '4'),
(2, 'JANKHONA GAON', '168', '686', '960 Females per 1000 Males', '4'),
(3, 'KURUKANI BASTI', '152', '632', '1026 Females per 1000 Males', '4'),
(4, 'KOKILAMUKH MISSING GAON', '62', '259', '962 Females per 1000 Males', '4'),
(5, 'PAHUKOTIA SHYAM GAON', '63', '299', '954 Females per 1000 Males', '5');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `e_id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `particulars` varchar(100) NOT NULL,
  `village_data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`e_id`, `v_id`, `particulars`, `village_data`) VALUES
(1, 1, 'Literacy Rate male', '88.56'),
(2, 1, 'Literacy rate female', '80.54'),
(3, 1, 'Total Literacy rate', '84.50'),
(9, 2, 'Literacy Rate male', '87.14'),
(10, 2, 'Literacy rate female', '79.76'),
(11, 2, 'Total Literacy rate', '83.53'),
(17, 3, 'Literacy Rate male', '75.76'),
(18, 3, 'Literacy rate female', '70.08'),
(19, 3, 'Total Literacy rate', '72.97'),
(28, 4, 'Literacy Rate male', '70.19'),
(29, 4, 'Literacy rate female', '60.63'),
(30, 4, 'Total Literacy rate', '65.35'),
(36, 5, 'Literacy Rate male', '81.70'),
(37, 5, 'Literacy rate female', '70.55'),
(38, 5, 'Total Literacy rate', '76.25');

-- --------------------------------------------------------

--
-- Table structure for table `edu_lvl`
--

CREATE TABLE `edu_lvl` (
  `edu_id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `education_level` varchar(100) NOT NULL,
  `male` int(30) NOT NULL,
  `female` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edu_lvl`
--

INSERT INTO `edu_lvl` (`edu_id`, `v_id`, `education_level`, `male`, `female`) VALUES
(1, 1, 'Not Literate', 27, 43),
(2, 1, 'Literate', 32, 31),
(3, 1, 'Completed Class 5', 37, 31),
(4, 1, 'Class 8th', 37, 40),
(5, 1, 'Class 10th', 65, 43),
(6, 1, 'Class 12th', 30, 30),
(7, 1, 'ITI Diploma', 2, 0),
(8, 1, 'Graduate', 6, 3),
(9, 1, 'Post Graduate/Professional', 0, 0),
(10, 1, 'Computer Literate', 16, 18),
(11, 2, 'Not Literate', 45, 68),
(12, 2, 'Literate', 44, 41),
(13, 2, 'Completed Class 5', 32, 35),
(14, 2, 'Class 8th', 82, 93),
(15, 2, 'Class 10th', 55, 51),
(16, 2, 'Class 12th', 76, 35),
(17, 2, 'ITI Diploma', 2, 0),
(18, 2, 'Graduate', 13, 11),
(19, 2, 'Post Graduate/Professional', 1, 2),
(20, 2, 'Computer Literate', 37, 26),
(21, 3, 'Not Literate', 32, 38),
(22, 3, 'Literate', 19, 7),
(23, 3, 'Completed Class 5', 7, 10),
(24, 3, 'Class 8th', 33, 31),
(25, 3, 'Class 10th', 16, 21),
(26, 3, 'Class 12th', 23, 14),
(27, 3, 'ITI Diploma', 0, 0),
(28, 3, 'Graduate', 1, 6),
(29, 3, 'Post Graduate/Professional', 1, 0),
(30, 3, 'Computer Literate', 6, 7),
(31, 4, 'Not Literate', 93, 126),
(32, 4, 'Literate', 86, 72),
(33, 4, 'Completed Class 5', 59, 69),
(34, 4, 'Class 8th', 47, 33),
(35, 4, 'Class 10th', 25, 17),
(36, 4, 'Class 12th', 1, 3),
(37, 4, 'ITI Diploma', 0, 0),
(38, 4, 'Graduate', 1, 0),
(39, 4, 'Post Graduate/Professional', 0, 0),
(40, 4, 'Computer Literate', 5, 3),
(41, 5, 'Not Literate', 28, 43),
(42, 5, 'Literate', 16, 16),
(43, 5, 'Completed Class 5', 23, 17),
(44, 5, 'Class 8th', 30, 18),
(45, 5, 'Class 10th', 28, 35),
(46, 5, 'Class 12th', 21, 11),
(47, 5, 'ITI Diploma', 0, 0),
(48, 5, 'Graduate', 6, 5),
(49, 5, 'Post Graduate/Professional', 1, 1),
(50, 5, 'Computer Literate', 19, 6);

-- --------------------------------------------------------

--
-- Table structure for table `gen_wise_pop`
--

CREATE TABLE `gen_wise_pop` (
  `g_id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `0_5_years` int(30) NOT NULL,
  `6_18_years` int(30) NOT NULL,
  `19_45_years` int(30) NOT NULL,
  `46_and_above` int(30) NOT NULL,
  `total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gen_wise_pop`
--

INSERT INTO `gen_wise_pop` (`g_id`, `v_id`, `gender`, `0_5_years`, `6_18_years`, `19_45_years`, `46_and_above`, `total`) VALUES
(1, 1, 'Male', 19, 57, 124, 35, 235),
(2, 1, 'Female', 17, 46, 122, 36, 221),
(3, 2, 'Male', 38, 73, 162, 76, 349),
(4, 2, 'Female', 27, 73, 162, 73, 335),
(5, 3, 'Male', 46, 88, 136, 42, 312),
(6, 3, 'Female', 32, 97, 153, 38, 320),
(7, 4, 'Male', 10, 33, 67, 22, 132),
(8, 4, 'Female', 8, 35, 71, 13, 127),
(9, 5, 'Male', 9, 32, 75, 37, 153),
(10, 5, 'Female', 10, 23, 82, 31, 146);

-- --------------------------------------------------------

--
-- Table structure for table `govt_scheme`
--

CREATE TABLE `govt_scheme` (
  `gs_id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `sl_no` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `benificiary_households` int(30) DEFAULT NULL,
  `benificiary_individuals` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `govt_scheme`
--

INSERT INTO `govt_scheme` (`gs_id`, `v_id`, `sl_no`, `name`, `benificiary_households`, `benificiary_individuals`) VALUES
(1, 1, 1, 'PM Ujjwala Yojana', 10, NULL),
(2, 1, 2, 'PM Awas Yojana', 6, NULL),
(3, 1, 3, 'Fasal Bima Yojana', 0, NULL),
(4, 1, 4, 'Krishi Sinchai Yojana', 0, NULL),
(5, 1, 5, 'Jan Aushadi Yojana', 1, NULL),
(6, 1, 6, 'Swachh Bharat Mission Toilet', 56, NULL),
(7, 1, 7, 'Soil Health Card', 0, NULL),
(8, 1, 8, 'Kisan Credit Card', 0, NULL),
(9, 1, 1, 'PM Jan Dhan Yojana', NULL, 2),
(10, 1, 2, 'Sukanya Samridhi Yojana', NULL, 1),
(11, 1, 3, 'Mudra Yojana', NULL, 0),
(12, 1, 4, 'Jivan Jyoti Bima Yojana', NULL, 0),
(13, 1, 5, 'Suraksha Bima Yojana', NULL, 0),
(14, 1, 6, 'Atal Pension Yojana', NULL, 1),
(15, 1, 7, 'Kaushal Vikas Yojana', NULL, 0),
(16, 1, 8, 'Ladli Lakshmi Yojana', NULL, 1),
(17, 1, 9, 'Janani Suraksha Yojana', NULL, 1),
(18, 2, 1, 'PM Ujjwala Yojana', 38, NULL),
(19, 2, 2, 'PM Awas Yojana', 31, NULL),
(20, 2, 3, 'Fasal Bima Yojana', 2, NULL),
(21, 2, 4, 'Krishi Sinchai Yojana', 0, NULL),
(22, 2, 5, 'Jan Aushadi Yojana', 0, NULL),
(23, 2, 6, 'Swachh Bharat Mission Toilet', 4, NULL),
(24, 2, 7, 'Soil Health Card', 0, NULL),
(25, 2, 8, 'Kisan Credit Card', 0, NULL),
(26, 2, 1, 'PM Jan Dhan Yojana', NULL, 37),
(27, 2, 2, 'Sukanya Samridhi Yojana', NULL, 0),
(28, 2, 3, 'Mudra Yojana', NULL, 0),
(29, 2, 4, 'Jivan Jyoti Bima Yojana', NULL, 0),
(30, 2, 5, 'Suraksha Bima Yojana', NULL, 1),
(31, 2, 6, 'Atal Pension Yojana', NULL, 17),
(32, 2, 7, 'Kaushal Vikas Yojana', NULL, 0),
(33, 2, 8, 'Ladli Lakshmi Yojana', NULL, 5),
(34, 2, 9, 'Janani Suraksha Yojana', NULL, 72),
(35, 3, 1, 'PM Ujjwala Yojana', 1, NULL),
(36, 3, 2, 'PM Awas Yojana', 0, NULL),
(37, 3, 3, 'Fasal Bima Yojana', 0, NULL),
(38, 3, 4, 'Krishi Sinchai Yojana', 0, NULL),
(39, 3, 5, 'Jan Aushadi Yojana', 0, NULL),
(40, 3, 6, 'Swachh Bharat Mission Toilet', 47, NULL),
(41, 3, 7, 'Soil Health Card', 0, NULL),
(42, 3, 8, 'Kisan Credit Card', 0, NULL),
(43, 3, 1, 'PM Jan Dhan Yojana', NULL, 0),
(44, 3, 2, 'Sukanya Samridhi Yojana', NULL, 0),
(45, 3, 3, 'Mudra Yojana', NULL, 0),
(46, 3, 4, 'Jivan Jyoti Bima Yojana', NULL, 0),
(47, 3, 5, 'Suraksha Bima Yojana', NULL, 0),
(48, 3, 6, 'Atal Pension Yojana', NULL, 0),
(49, 3, 7, 'Kaushal Vikas Yojana', NULL, 0),
(50, 3, 8, 'Ladli Lakshmi Yojana', NULL, 0),
(51, 3, 9, 'Janani Suraksha Yojana', NULL, 1),
(52, 4, 1, 'PM Ujjwala Yojana', 1, NULL),
(53, 4, 2, 'PM Awas Yojana', 3, NULL),
(54, 4, 3, 'Fasal Bima Yojana', 0, NULL),
(55, 4, 4, 'Krishi Sinchai Yojana', 0, NULL),
(56, 4, 5, 'Jan Aushadi Yojana', 0, NULL),
(57, 4, 6, 'Swachh Bharat Mission Toilet', 95, NULL),
(58, 4, 7, 'Soil Health Card', 0, NULL),
(59, 4, 8, 'Kisan Credit Card', 0, NULL),
(60, 4, 1, 'PM Jan Dhan Yojana', NULL, 93),
(61, 4, 2, 'Sukanya Samridhi Yojana', NULL, 4),
(62, 4, 3, 'Mudra Yojana', NULL, 0),
(63, 4, 4, 'Jivan Jyoti Bima Yojana', NULL, 0),
(64, 4, 5, 'Suraksha Bima Yojana', NULL, 0),
(65, 4, 6, 'Atal Pension Yojana', NULL, 0),
(66, 4, 7, 'Kaushal Vikas Yojana', NULL, 0),
(67, 4, 8, 'Ladli Lakshmi Yojana', NULL, 0),
(68, 4, 9, 'Janani Suraksha Yojana', NULL, 0),
(69, 5, 1, 'PM Ujjwala Yojana', 7, NULL),
(70, 5, 2, 'PM Awas Yojana', 7, NULL),
(71, 5, 3, 'Fasal Bima Yojana', 0, NULL),
(72, 5, 4, 'Krishi Sinchai Yojana', 0, NULL),
(73, 5, 5, 'Jan Aushadi Yojana', 0, NULL),
(74, 5, 6, 'Swachh Bharat Mission Toilet', 26, NULL),
(75, 5, 7, 'Soil Health Card', 0, NULL),
(76, 5, 8, 'Kisan Credit Card', 0, NULL),
(77, 5, 1, 'PM Jan Dhan Yojana', NULL, 1),
(78, 5, 2, 'Sukanya Samridhi Yojana', NULL, 0),
(79, 5, 3, 'Mudra Yojana', NULL, 0),
(80, 5, 4, 'Jivan Jyoti Bima Yojana', NULL, 0),
(81, 5, 5, 'Suraksha Bima Yojana', NULL, 0),
(82, 5, 6, 'Atal Pension Yojana', NULL, 0),
(83, 5, 7, 'Kaushal Vikas Yojana', NULL, 0),
(84, 5, 8, 'Ladli Lakshmi Yojana', NULL, 0),
(85, 5, 9, 'Janani Suraksha Yojana', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `h_id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `particulars` varchar(100) NOT NULL,
  `village_data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`h_id`, `v_id`, `particulars`, `village_data`) VALUES
(1, 1, 'Primary Health centres', '1'),
(2, 1, 'Number of primary health centres per thousand population', '2.18'),
(3, 1, 'Civil Hospital', 'no'),
(4, 1, 'Major Health Problem', 'NERVE PROBLEM, HANDICAPE'),
(5, 2, 'Primary Health centres', '1'),
(6, 2, 'Number of primary health centres per thousand population', '1.46'),
(7, 2, 'Civil Hospital', 'no'),
(8, 2, 'Major Health Problem', 'NT, BLIND, DISABILITY'),
(9, 3, 'Primary Health centres', 'no'),
(10, 3, 'Number of primary health centres per thousand population', '0'),
(11, 3, 'Civil Hospital', 'no'),
(12, 3, 'Major Health Problem', 'NERVE'),
(13, 4, 'Primary Health centres', 'no'),
(14, 4, 'Number of primary health centres per thousand population', '0'),
(15, 4, 'Civil Hospital', 'no'),
(16, 4, 'Major Health Problem', 'CHEST PAIN, PAIN BODY\r\n'),
(17, 5, 'Primary Health centres', 'no'),
(18, 5, 'Number of primary health centres per thousand population', '0'),
(19, 5, 'Civil Hospital', 'no'),
(20, 5, 'Major Health Problem', 'HIGH PRESSURE, LOW PRESSURE, HEARING');

-- --------------------------------------------------------

--
-- Table structure for table `houses_among_houshld`
--

CREATE TABLE `houses_among_houshld` (
  `hou_id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `kutcha` int(30) NOT NULL,
  `semi_pucca` int(30) NOT NULL,
  `pucca` int(30) NOT NULL,
  `homeless` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses_among_houshld`
--

INSERT INTO `houses_among_houshld` (`hou_id`, `v_id`, `caste`, `kutcha`, `semi_pucca`, `pucca`, `homeless`) VALUES
(1, 1, 'SC', 20, 12, 9, 0),
(2, 1, 'ST', 2, 2, 2, 0),
(3, 1, 'OBC', 14, 15, 10, 0),
(4, 1, 'GEN', 9, 9, 7, 0),
(5, 2, 'SC', 69, 31, 68, 0),
(6, 2, 'ST', 0, 0, 0, 0),
(7, 2, 'OBC', 0, 0, 0, 0),
(8, 2, 'GEN', 0, 0, 0, 0),
(9, 3, 'SC', 2, 1, 0, 0),
(10, 3, 'ST', 34, 9, 3, 0),
(11, 3, 'OBC', 11, 1, 1, 0),
(12, 3, 'GEN', 0, 0, 0, 0),
(13, 4, 'SC', 1, 0, 0, 0),
(14, 4, 'ST', 1, 0, 0, 0),
(15, 4, 'OBC', 128, 10, 5, 2),
(16, 4, 'GEN', 5, 0, 0, 0),
(17, 5, 'SC', 0, 1, 0, 0),
(18, 5, 'ST', 33, 8, 8, 0),
(19, 5, 'OBC', 13, 0, 0, 0),
(20, 5, 'GEN', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hsehld_wt_or_wot`
--

CREATE TABLE `hsehld_wt_or_wot` (
  `hsld_toilet_id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `with_toilet` int(30) NOT NULL,
  `without_toilet` int(30) NOT NULL,
  `total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsehld_wt_or_wot`
--

INSERT INTO `hsehld_wt_or_wot` (`hsld_toilet_id`, `v_id`, `caste`, `with_toilet`, `without_toilet`, `total`) VALUES
(1, 1, 'SC', 40, 1, 41),
(2, 1, 'ST', 6, 0, 6),
(3, 1, 'OBC', 37, 2, 39),
(4, 1, 'GEN', 25, 0, 25),
(5, 2, 'SC', 115, 53, 168),
(6, 2, 'ST', 0, 0, 0),
(7, 2, 'OBC', 0, 0, 0),
(8, 2, 'GEN', 0, 0, 0),
(9, 3, 'SC', 2, 1, 3),
(10, 3, 'ST', 41, 5, 46),
(11, 3, 'OBC', 13, 0, 0),
(12, 3, 'GEN', 0, 0, 0),
(13, 4, 'SC', 0, 1, 1),
(14, 4, 'ST', 1, 0, 1),
(15, 4, 'OBC', 103, 42, 145),
(16, 4, 'GEN', 2, 3, 5),
(17, 5, 'SC', 1, 0, 1),
(18, 5, 'ST', 47, 2, 49),
(19, 5, 'OBC', 2, 11, 13),
(20, 5, 'GEN', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hse_hld_waste`
--

CREATE TABLE `hse_hld_waste` (
  `hsld_wst__id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `particulars` varchar(100) NOT NULL,
  `village_data` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hse_hld_waste`
--

INSERT INTO `hse_hld_waste` (`hsld_wst__id`, `v_id`, `particulars`, `village_data`) VALUES
(1, 1, 'Door Step', 0),
(2, 1, 'Common Point', 3),
(3, 1, 'No Collection System', 108),
(4, 2, 'Door Step', 0),
(5, 2, 'Common Point', 0),
(6, 2, 'No Collection System', 168),
(7, 3, 'Door Step', 0),
(8, 3, 'Common Point', 0),
(9, 3, 'No Collection System', 62),
(10, 4, 'Door Step', 0),
(11, 4, 'Common Point', 0),
(12, 4, 'No Collection System', 152),
(13, 5, 'Door Step', 0),
(14, 5, 'Common Point', 2),
(15, 5, 'No Collection System', 61);

-- --------------------------------------------------------

--
-- Table structure for table `land_use_pattern`
--

CREATE TABLE `land_use_pattern` (
  `land_use_pattern` varchar(255) NOT NULL,
  `nos` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration_scen`
--

CREATE TABLE `migration_scen` (
  `catagory` varchar(100) NOT NULL,
  `tot_pop` int(4) NOT NULL,
  `tot_mig` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pl_caste`
--

CREATE TABLE `pl_caste` (
  `pl_id` int(30) NOT NULL,
  `v_id` int(30) NOT NULL,
  `caste` varchar(70) NOT NULL,
  `bpl` int(30) NOT NULL,
  `apl` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pl_caste`
--

INSERT INTO `pl_caste` (`pl_id`, `v_id`, `caste`, `bpl`, `apl`) VALUES
(1, 1, 'SC', 38, 3),
(2, 1, 'ST', 6, 0),
(3, 1, 'OBC', 37, 2),
(4, 1, 'GEN', 24, 1),
(5, 2, 'SC', 136, 32),
(6, 2, 'ST', 0, 0),
(7, 2, 'OBC', 0, 0),
(8, 2, 'GEN', 0, 0),
(9, 3, 'SC', 3, 0),
(10, 3, 'ST', 45, 1),
(11, 3, 'OBC', 13, 0),
(12, 3, 'GEN', 0, 0),
(13, 4, 'SC', 1, 0),
(14, 4, 'ST', 1, 0),
(15, 4, 'OBC', 145, 0),
(16, 4, 'GEN', 5, 0),
(17, 5, 'SC', 1, 0),
(18, 5, 'ST', 36, 13),
(19, 5, 'OBC', 13, 0),
(20, 5, 'GEN', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `use_of_toi`
--

CREATE TABLE `use_of_toi` (
  `caste_sec` varchar(100) NOT NULL,
  `private` int(3) NOT NULL,
  `community` int(3) NOT NULL,
  `open_def` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vill_infrastructure`
--

CREATE TABLE `vill_infrastructure` (
  `basic_amanaties` varchar(100) NOT NULL,
  `loc_in_vill` varchar(100) NOT NULL,
  `nos` int(4) NOT NULL,
  `dist_in_km` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadhar_cov`
--
ALTER TABLE `aadhar_cov`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `bank_cov`
--
ALTER TABLE `bank_cov`
  ADD PRIMARY KEY (`bc_id`);

--
-- Indexes for table `drink_wtr_fac`
--
ALTER TABLE `drink_wtr_fac`
  ADD PRIMARY KEY (`dr_wtr_id`);

--
-- Indexes for table `d_profile`
--
ALTER TABLE `d_profile`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `edu_lvl`
--
ALTER TABLE `edu_lvl`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `gen_wise_pop`
--
ALTER TABLE `gen_wise_pop`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `govt_scheme`
--
ALTER TABLE `govt_scheme`
  ADD PRIMARY KEY (`gs_id`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `houses_among_houshld`
--
ALTER TABLE `houses_among_houshld`
  ADD PRIMARY KEY (`hou_id`);

--
-- Indexes for table `hsehld_wt_or_wot`
--
ALTER TABLE `hsehld_wt_or_wot`
  ADD PRIMARY KEY (`hsld_toilet_id`);

--
-- Indexes for table `hse_hld_waste`
--
ALTER TABLE `hse_hld_waste`
  ADD PRIMARY KEY (`hsld_wst__id`);

--
-- Indexes for table `pl_caste`
--
ALTER TABLE `pl_caste`
  ADD PRIMARY KEY (`pl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aadhar_cov`
--
ALTER TABLE `aadhar_cov`
  MODIFY `ac_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `bank_cov`
--
ALTER TABLE `bank_cov`
  MODIFY `bc_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `drink_wtr_fac`
--
ALTER TABLE `drink_wtr_fac`
  MODIFY `dr_wtr_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `d_profile`
--
ALTER TABLE `d_profile`
  MODIFY `v_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `e_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `edu_lvl`
--
ALTER TABLE `edu_lvl`
  MODIFY `edu_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `gen_wise_pop`
--
ALTER TABLE `gen_wise_pop`
  MODIFY `g_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `govt_scheme`
--
ALTER TABLE `govt_scheme`
  MODIFY `gs_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `h_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `houses_among_houshld`
--
ALTER TABLE `houses_among_houshld`
  MODIFY `hou_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hsehld_wt_or_wot`
--
ALTER TABLE `hsehld_wt_or_wot`
  MODIFY `hsld_toilet_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hse_hld_waste`
--
ALTER TABLE `hse_hld_waste`
  MODIFY `hsld_wst__id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pl_caste`
--
ALTER TABLE `pl_caste`
  MODIFY `pl_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
