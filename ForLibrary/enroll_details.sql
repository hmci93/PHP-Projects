-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2019 at 06:32 PM
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
-- Database: `ens`
--

-- --------------------------------------------------------

--
-- Table structure for table `enroll_details`
--

DROP TABLE IF EXISTS `enroll_details`;
CREATE TABLE IF NOT EXISTS `enroll_details` (
  `ed_id` int(50) NOT NULL AUTO_INCREMENT,
  `RgNo` varchar(100) NOT NULL,
  `RgBatch` varchar(100) NOT NULL,
  `RgName` varchar(200) NOT NULL,
  `RgFather` varchar(200) NOT NULL,
  `RgMother` varchar(200) NOT NULL,
  `RgCgCode` varchar(100) NOT NULL,
  `RgCoCode` varchar(100) NOT NULL,
  `reserve1` varchar(200) NOT NULL,
  `reserve2` varchar(200) NOT NULL,
  `reserve3` varchar(200) NOT NULL,
  `reserve4` varchar(200) NOT NULL,
  `reserve5` varchar(200) NOT NULL,
  `reserve6` varchar(200) NOT NULL,
  `reserve7` varchar(200) NOT NULL,
  `reserve8` varchar(200) NOT NULL,
  `reserve9` varchar(200) NOT NULL,
  `reserve10` varchar(200) NOT NULL,
  PRIMARY KEY (`ed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enroll_details`
--

INSERT INTO `enroll_details` (`ed_id`, `RgNo`, `RgBatch`, `RgName`, `RgFather`, `RgMother`, `RgCgCode`, `RgCoCode`, `reserve1`, `reserve2`, `reserve3`, `reserve4`, `reserve5`, `reserve6`, `reserve7`, `reserve8`, `reserve9`, `reserve10`) VALUES
(1, '18000001', '1801023561', 'ADIP TALUKDAR', 'LT. JAGADISH TALUKDAR', 'ARATI TALUKDAR', '102', 'BA.', '', '', '', '', '', '', '', '', '', ''),
(2, '18008772', '18010213555', 'ANAMIKA KALITA', 'BHABENDRA NATH KALITA', 'ANITA KALITA', '102', 'MA', '', '', '', '', '', '', '', '', '', ''),
(3, '18008773', '1801022880', 'ANJU ROY KALITA', 'ARUN CHANDRA ROY', 'REBATI ROY', '102', 'MA', '', '', '', '', '', '', '', '', '', ''),
(4, '18008768', '1801028383', 'ASHIM KALITA', 'NRIPEN KALITA', 'LABANYA BARMAN', '102', 'MA', '', '', '', '', '', '', '', '', '', ''),
(5, '18000002', '18010211212', 'BALEN BARO', 'DULAL BARO', 'LANDI BARO', '102', 'BA.', '', '', '', '', '', '', '', '', '', ''),
(6, '18000003', '1801026378', 'BASUDEV RAMCHIARY', 'PRAFFULO RAMCHIARY', 'PHULONTI RAMCHIARY', '102', 'BA.', '', '', '', '', '', '', '', '', '', ''),
(7, '18000011', '1801027239', 'BELI TALUKDAR', 'PRADIP TALUKDAR', 'DAMAYANTI TALUKDAR', '102', 'BA.', '', '', '', '', '', '', '', '', '', ''),
(8, '18008769', '18010212654', 'BHABESH ROY', 'ANIL KR ROY', 'KANCHAN ROY', '102', 'MA', '', '', '', '', '', '', '', '', '', ''),
(9, '18000004', '18010210745', 'BIDYADHAR BASUMATARY', 'DHARANIDHAR BASUMATARY', 'ARGE BARO', '102', 'BA.', '', '', '', '', '', '', '', '', '', ''),
(10, '18008770', '1801026607', 'DAIMALU RAMCHIARY', 'GOPAL RAMCHIARY', 'LEELA RAMCHIARY', '102', 'MA', '', '', '', '', '', '', '', '', '', ''),
(11, '18000012', '1801027637', 'DEIZY DAS', 'AMULYA DAS', 'BHANITA DAS', '102', 'BA.', '', '', '', '', '', '', '', '', '', ''),
(12, '18000013', '1801027618', 'DIMPI TALUKDAR', 'GANESH TALUKDAR', 'JAYA TALUKDAR', '102', 'BA.', '', '', '', '', '', '', '', '', '', ''),
(13, '18000014', '1801025127', 'GITUMANI DAS', 'KIRAN CHANDRA DAS', 'DHARITRI DAS', '102', 'BA.', '', '', '', '', '', '', '', '', '', ''),
(14, '18000006', '180102205', 'HIMANGSHU KALITA', 'KHARGESWAR KALITA', 'PRANITA KALITA', '102', 'BA.', '', '', '', '', '', '', '', '', '', ''),
(15, '18008774', '1801027454', 'JONALI PATHAK', 'ATI RAM PATHAK', 'HARMAYA PATHAK', '102', 'MA', '', '', '', '', '', '', '', '', '', ''),
(16, '18000007', '18010213393', 'KAUSHIK CHOUDHURY', 'PARESH CHOUDHURY', 'BHANITA CHOUDHURY', '102', 'BA.', '', '', '', '', '', '', '', '', '', ''),
(17, '18000015', '1801028737', 'MOUSUMI PATGIRI', 'KHAGEN PATGIRI', 'JEUTI PATGIRI', '102', 'BA.', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
