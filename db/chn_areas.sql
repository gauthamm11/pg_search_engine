-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2019 at 01:15 PM
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
-- Database: `pg_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `chn_areas`
--

DROP TABLE IF EXISTS `chn_areas`;
CREATE TABLE IF NOT EXISTS `chn_areas` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `a_id` varchar(30) NOT NULL,
  `a_name` varchar(30) DEFAULT NULL,
  `a_sub` varchar(30) DEFAULT NULL,
  `a_pin` varchar(10) DEFAULT NULL,
  `a_city` varchar(20) DEFAULT 'Chennai',
  `landmarks` text,
  `a_rating` decimal(10,5) DEFAULT NULL,
  `a_visits` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chn_areas`
--

INSERT INTO `chn_areas` (`sno`, `a_id`, `a_name`, `a_sub`, `a_pin`, `a_city`, `landmarks`, `a_rating`, `a_visits`) VALUES
(4, 'CHN_KAN_001', 'kandigai', 'kandigai', '600049', 'Chennai', NULL, '20.10000', NULL),
(5, 'CHN_MELK_001', 'melakottaiyur', 'melakottaiyur', '600048', 'Chennai', NULL, '21.10000', NULL),
(3, 'CHN_POR_001', 'porur', 'mount poonamalle road', '600157', 'Chennai', NULL, '1.10000', NULL),
(1, 'CHN_POR_002', 'porur', 'shakthi nagar', '600116', 'Chennai', NULL, '1.20000', NULL),
(2, 'CHN_TNAG_001', 't nagar', 'North Usman Road', '600156', 'Chennai', NULL, '2.10000', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
