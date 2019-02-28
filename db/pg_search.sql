-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 28, 2019 at 04:22 PM
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
  `a_sub` varchar(50) DEFAULT NULL,
  `a_pin` varchar(10) DEFAULT NULL,
  `a_city` varchar(20) DEFAULT 'Chennai',
  `landmarks` text,
  `a_rating` decimal(10,5) DEFAULT NULL,
  `a_visits` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chn_areas`
--

INSERT INTO `chn_areas` (`sno`, `a_id`, `a_name`, `a_sub`, `a_pin`, `a_city`, `landmarks`, `a_rating`, `a_visits`) VALUES
(10, 'CHN_ADY_001', 'Adyar', 'Adyar', '600152', 'Chennai', NULL, '7.10000', NULL),
(6, 'CHN_ALW_001', 'Alwarpet', 'Alwarpet', '600041', 'Chennai', NULL, '3.10000', NULL),
(13, 'CHN_BES_001', 'Besant Nagar', 'Besant Nagar', '600079', 'Chennai', NULL, '10.10000', NULL),
(11, 'CHN_GOP_001', 'Gopalapuram', 'Gopalapuram', '600043', 'Chennai', NULL, '8.10000', NULL),
(4, 'CHN_KAN_001', 'kandigai', 'kandigai', '600049', 'Chennai', NULL, '20.10000', NULL),
(5, 'CHN_MELK_001', 'melakottaiyur', 'melakottaiyur', '600048', 'Chennai', NULL, '21.10000', NULL),
(7, 'CHN_NUG_001', 'Nugambakkam', 'Nugambakkam', '600042', 'Chennai', NULL, '4.10000', NULL),
(12, 'CHN_OMR_001', 'OMR', 'Padur', '600044', 'Chennai', NULL, '9.10000', NULL),
(14, 'CHN_OMR_002', 'OMR', 'sholinganallur', '600099', 'Chennai', NULL, '9.11000', NULL),
(3, 'CHN_POR_001', 'porur', 'mount poonamalle road', '600157', 'Chennai', NULL, '1.10000', NULL),
(1, 'CHN_POR_002', 'porur', 'shakthi nagar', '600116', 'Chennai', NULL, '1.20000', NULL),
(2, 'CHN_TNAG_001', 't nagar', 'North Usman Road', '600156', 'Chennai', NULL, '2.10000', NULL),
(8, 'CHN_VAD_001', 'Vadapalani', 'Vadapalani', '600151', 'Chennai', NULL, '5.10000', NULL),
(9, 'CHN_VEL_001', 'Velachery', 'Velachery', '600111', 'Chennai', NULL, '6.10000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chn_pg`
--

DROP TABLE IF EXISTS `chn_pg`;
CREATE TABLE IF NOT EXISTS `chn_pg` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(30) NOT NULL,
  `a_id` varchar(30) DEFAULT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_type` int(2) DEFAULT NULL,
  `p_landmark` text,
  `p_rent_min` int(6) DEFAULT NULL,
  `p_rent_max` int(6) DEFAULT NULL,
  `p_deposit` varchar(20) DEFAULT NULL,
  `p_food` int(2) DEFAULT NULL,
  `p_sharing` int(2) DEFAULT NULL,
  `p_rating` float DEFAULT NULL,
  `p_add_date` timestamp NULL DEFAULT NULL,
  `p_dp` text,
  `p_visits` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `sno` (`sno`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chn_pg`
--

INSERT INTO `chn_pg` (`sno`, `p_id`, `a_id`, `p_name`, `p_type`, `p_landmark`, `p_rent_min`, `p_rent_max`, `p_deposit`, `p_food`, `p_sharing`, `p_rating`, `p_add_date`, `p_dp`, `p_visits`) VALUES
(1, '1', 'CHN_ADY_001', 'Homi J. Bhabha', 0, 'Behind DLF', 5500, 7500, '1.5', 1, 1, 7.5, '2019-02-04 23:04:00', NULL, NULL),
(11, '10', 'CHN_ADY_001', 'Hari Om Srivastava', 1, 'Behind DLF', 5400, 7000, '1', 2, 2, 8, '2019-02-06 09:58:00', NULL, NULL),
(2, '11', 'CHN_ADY_001', 'E. C. George Sudarshan', 0, 'Behind DLF', 5500, 7500, '1.5', 3, 1, 9, '2019-02-07 11:52:00', NULL, NULL),
(13, '12', 'CHN_ALW_001', 'Visvesvaraya', 1, 'Behind DLF', 5500, 7500, '1', 4, 2, 8, '2019-02-08 07:41:00', NULL, NULL),
(14, '13', 'CHN_ALW_001', 'Venkatraman Radhakrishnan', 0, 'Behind DLF', 5300, 7000, '1.5', 5, 1, 8, '2019-02-12 06:38:00', NULL, NULL),
(15, '14', 'CHN_BES_001', 'Meghnad Saha', 1, 'Behind DLF', 5300, 7500, '1', 1, 2, 9, '2019-02-05 06:38:00', NULL, NULL),
(16, '15', 'CHN_BES_001', 'Jagadish Chandra Bose', 0, 'Behind DLF', 5300, 7000, '1.5', 2, 1, 8, '2019-02-12 06:38:00', NULL, NULL),
(17, '16', 'CHN_BES_001', 'Vikram Sarabhai', 1, 'Behind DLF', 5300, 7500, '1', 3, 2, 7.5, '2019-02-14 06:38:00', NULL, NULL),
(18, '17', 'CHN_BES_001', 'Salim Ali', 0, 'Behind DLF', 5400, 7000, '1.5', 4, 1, 8, '2019-02-14 06:38:00', NULL, NULL),
(19, '18', 'CHN_GOP_001', 'Birbal Sahni', 1, 'Behind DLF', 5400, 7000, '1', 5, 2, 9, '2019-02-05 06:38:00', NULL, NULL),
(20, '19', 'CHN_GOP_001', 'APJ Abdul Kalam', 0, 'Behind DLF', 5400, 7500, '1.5', 1, 1, 8, '2019-02-03 06:38:00', NULL, NULL),
(3, '2', 'CHN_GOP_001', 'Abdul Kalam', 1, 'Behind DLF', 5200, 7500, '1', 2, 2, 7.5, '2019-02-03 06:38:00', NULL, NULL),
(21, '20', 'CHN_GOP_001', 'Baudhayan', 0, 'Behind DLF', 5200, 7000, '1.5', 5, 2, 8, '2019-02-12 06:38:00', NULL, NULL),
(22, '21', 'CHN_KAN_001', 'Aryabhatta', 1, 'Behind DLF', 5500, 7000, '1', 4, 2, 9, '2019-02-13 06:38:00', NULL, NULL),
(23, '22', 'CHN_NUG_001', 'Brahmgupta', 0, 'Behind DLF', 5500, 7000, '1.5', 3, 1, 8, '2019-02-13 06:38:00', NULL, NULL),
(24, '23', 'CHN_NUG_001', 'Bhaskaracharya', 1, 'Behind DLF', 5500, 7500, '1', 2, 1, 7, '2019-02-12 06:38:00', NULL, NULL),
(25, '24', 'CHN_NUG_001', 'Mahaviracharya', 0, 'Behind DLF', 5200, 7000, '1.5', 1, 1, 6.5, '2019-02-12 06:38:00', NULL, NULL),
(26, '25', 'CHN_NUG_001', 'Sulva Sutra', 1, 'Behind DLF', 5500, 7500, '1', 5, 2, 7, '2019-02-12 06:38:00', NULL, NULL),
(27, '26', 'CHN_NUG_001', 'Aryabhattiya', 0, 'Behind DLF', 5500, 7500, '2', 4, 1, 8.5, '2019-02-12 06:38:00', NULL, NULL),
(28, '27', 'CHN_OMR_001', 'Brahm Sputa Siddantika', 1, 'Behind DLF', 5200, 7000, '1', 3, 2, 9, '2019-02-13 06:38:00', NULL, NULL),
(29, '28', 'CHN_OMR_001', 'Siddanta Shiromani', 0, 'Behind DLF', 5300, 7500, '1.5', 2, 2, 8, '2019-02-13 06:38:00', NULL, NULL),
(30, '29', 'CHN_OMR_001', 'Ganit Sara Sangraha', 1, 'Behind DLF', 5000, 7000, '2', 1, 2, 7.5, '2019-02-07 01:48:00', NULL, NULL),
(4, '3', 'CHN_OMR_001', 'Chandrasekhara Venkata Raman', 0, 'Behind DLF', 5000, 7500, '1', 5, 1, 8, '2019-02-19 01:48:00', NULL, NULL),
(31, '30', 'CHN_OMR_001', 'Kanad', 1, 'Behind DLF', 5200, 7000, '2', 4, 2, 9, '2019-02-19 01:48:00', NULL, NULL),
(32, '31', 'CHN_OMR_002', 'Varahamihira', 0, 'Behind DLF', 5000, 7500, '1', 3, 1, 8.5, '2019-02-07 01:48:00', NULL, NULL),
(33, '32', 'CHN_OMR_002', 'Brhat Samhita', 1, 'Behind DLF', 5200, 7000, '2', 2, 2, 7, '2019-02-07 01:48:00', NULL, NULL),
(34, '33', 'CHN_OMR_002', 'Nagarjuna', 0, 'Behind DLF', 5200, 7500, '1', 1, 1, 8, '2019-02-07 01:48:00', NULL, NULL),
(36, '34', 'CHN_OMR_002', 'Rasaratnakara', 1, 'Behind DLF', 5200, 7000, '2', 5, 2, 9, '2019-02-07 01:48:00', NULL, NULL),
(37, '35', 'CHN_OMR_002', 'Atreya Samhita', 0, 'Behind DLF', 5200, 7500, '1', 4, 1, 8.5, '2019-02-19 05:47:00', NULL, NULL),
(38, '36-t', 'CHN_TNAG_001', 'Susruta Samhita', 1, 'Behind DLF', 5200, 7000, '1.5', 3, 2, 6, '2019-02-15 05:47:00', NULL, NULL),
(39, '37-t', 'CHN_TNAG_001', 'Charaka', 0, 'Behind DLF', 5200, 7500, '1', 2, 1, 7.5, '2019-02-15 05:47:00', NULL, NULL),
(40, '38-t', 'CHN_TNAG_001', 'Charak Samhita', 1, 'Behind DLF', 5200, 7000, '1.5', 1, 2, 9, '2019-02-15 05:47:00', NULL, NULL),
(41, '39-t', 'CHN_TNAG_001', 'Patanjali', 0, 'Behind DLF', 5200, 7500, '1', 5, 1, 8, '2019-02-19 01:48:00', NULL, NULL),
(5, '4-t', 'CHN_TNAG_001', 'Srinivasa Ramanujan', 1, 'Behind DLF', 5200, 7000, '1.5', 4, 2, 7.5, '2019-02-19 01:48:00', NULL, NULL),
(42, '40', 'CHN_VEL_001', 'Mahabhasaya', 0, 'Behind DLF', 5200, 7500, '1', 3, 1, 8, '2019-02-19 01:48:00', NULL, NULL),
(44, '41-p', 'CHN_POR_001', 'Srinivasa Ramanujan', 1, 'Behind DLF', 5200, 7500, '1.5', 2, 2, 9, '2019-02-15 05:47:00', NULL, NULL),
(45, '42-p', 'CHN_POR_001', 'A P J Abdul Kalam', 0, 'Behind DLF', 5200, 7500, '1', 1, 1, 8, '2019-02-05 06:38:00', NULL, NULL),
(46, '43-p', 'CHN_POR_001', 'Gautama Maharishi', 1, 'Behind DLF', 5200, 7000, '1.5', 5, 2, 7.5, '2019-02-05 06:38:00', NULL, NULL),
(47, '44-p', 'CHN_POR_001', 'Mokshagundam Visvesvaraya', 0, 'Behind DLF', 5000, 7500, '1', 4, 1, 6, '2019-02-05 06:38:00', NULL, NULL),
(48, '45-p', 'CHN_POR_001', 'C V Raman', 1, 'Behind DLF', 5200, 7000, '1.5', 3, 2, 8.5, '2019-02-13 06:38:00', NULL, NULL),
(49, '46', 'CHN_VAD_001', 'Vasistha', 0, 'Behind DLF', 5000, 7500, '1', 2, 1, 8, '2019-02-13 06:38:00', NULL, NULL),
(50, '47', 'CHN_VEL_001', 'Vishwamitra', 1, 'Behind DLF', 5200, 7000, '1.5', 1, 2, 9, '2019-02-05 06:38:00', NULL, NULL),
(6, '5', 'CHN_VEL_001', 'Satyendra Nath Bose', 0, 'Behind DLF', 5200, 7000, '1', 5, 1, 7.5, '2019-02-03 06:38:00', NULL, NULL),
(7, '6-p', 'CHN_POR_002', 'M. S. Swaminathan', 1, 'Behind DLF', 5200, 7500, '1.5', 4, 2, 8, '2019-02-03 06:38:00', NULL, NULL),
(8, '7', 'CHN_VAD_001', 'Raj Reddy', 0, 'Behind DLF', 5000, 7000, '1', 3, 1, 6, '2019-02-13 04:50:00', NULL, NULL),
(9, '8-p', 'CHN_POR_002', 'Har Gobind Khorana', 1, 'Behind DLF', 5200, 7500, '1.5', 2, 2, 7.5, '2019-02-12 02:45:00', NULL, NULL),
(10, '9-p', 'CHN_POR_002', 'K. S. Chandrasekharan', 0, 'Behind DLF', 5200, 7000, '1', 1, 1, 8.5, '2019-02-01 04:09:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chn_pg_details`
--

DROP TABLE IF EXISTS `chn_pg_details`;
CREATE TABLE IF NOT EXISTS `chn_pg_details` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(30) NOT NULL,
  `pic_1` text,
  `pic_2` text,
  `pic_3` text,
  `pic_4` text,
  `video` text,
  `smoking` int(1) DEFAULT NULL,
  `alcohol` int(1) DEFAULT NULL,
  `visitors` int(1) DEFAULT NULL,
  `pets` int(1) DEFAULT NULL,
  `laundry` int(1) DEFAULT NULL,
  `warden` int(1) DEFAULT NULL,
  `room_keeping` int(1) DEFAULT NULL,
  `wifi` int(1) DEFAULT NULL,
  `tv` int(1) DEFAULT NULL,
  `lift` int(1) DEFAULT NULL,
  `power_backup` int(1) DEFAULT NULL,
  `fridge` int(1) DEFAULT NULL,
  `heater` int(1) DEFAULT NULL,
  `locker` int(1) DEFAULT NULL,
  `parking` int(1) DEFAULT NULL,
  `spycam` int(1) DEFAULT NULL,
  `firstaid` int(1) DEFAULT NULL,
  `security` int(1) DEFAULT NULL,
  `map` text,
  UNIQUE KEY `sno` (`sno`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chn_pg_details`
--

INSERT INTO `chn_pg_details` (`sno`, `p_id`, `pic_1`, `pic_2`, `pic_3`, `pic_4`, `video`, `smoking`, `alcohol`, `visitors`, `pets`, `laundry`, `warden`, `room_keeping`, `wifi`, `tv`, `lift`, `power_backup`, `fridge`, `heater`, `locker`, `parking`, `spycam`, `firstaid`, `security`, `map`) VALUES
(1, '41-p', '41-p_1', '41-p_2', NULL, '41-p_4', '<iframe src=\"https://www.youtube.com/embed/oLgzs8nut3A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.31236233014!2d80.16386753431622!3d13.028912655003268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91614f29dd66e091!2sCruze+El+Barato+-+PG+For+Men+in+Porur!5e0!3m2!1sen!2sin!4v1551300301778\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(2, '42-p', '42-p_1', '42-p_2', '42-p_3', '42-p_4', '<iframe src=\"https://www.youtube.com/embed/KPDhwjmb11o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.31236233014!2d80.16386753431622!3d13.028912655003268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91614f29dd66e091!2sCruze+El+Barato+-+PG+For+Men+in+Porur!5e0!3m2!1sen!2sin!4v1551300301778\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(3, '43-p', '43-p_1', NULL, '43-p_3', '43-p_4', NULL, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL),
(4, '44-p', '44-p_1', '44-p_2', '44-p_3', '44-p_4', '<iframe src=\"https://www.youtube.com/embed/oLgzs8nut3A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.31236233014!2d80.16386753431622!3d13.028912655003268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91614f29dd66e091!2sCruze+El+Barato+-+PG+For+Men+in+Porur!5e0!3m2!1sen!2sin!4v1551300301778\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(5, '37-t', '37-p_1', '37-p_2', '37-p_3', '37-p_4', '<iframe src=\"https://www.youtube.com/embed/oLgzs8nut3A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.31236233014!2d80.16386753431622!3d13.028912655003268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91614f29dd66e091!2sCruze+El+Barato+-+PG+For+Men+in+Porur!5e0!3m2!1sen!2sin!4v1551300301778\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(6, '38-t', '38-p_1', '38-p_2', '38-p_3', '38-p_4', '<iframe src=\"https://www.youtube.com/embed/oLgzs8nut3A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.31236233014!2d80.16386753431622!3d13.028912655003268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91614f29dd66e091!2sCruze+El+Barato+-+PG+For+Men+in+Porur!5e0!3m2!1sen!2sin!4v1551300301778\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(7, '6-p', '6-p_1', '6-p_2', '6-p_3', '6-p_4', '<iframe src=\"https://www.youtube.com/embed/oLgzs8nut3A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.31236233014!2d80.16386753431622!3d13.028912655003268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91614f29dd66e091!2sCruze+El+Barato+-+PG+For+Men+in+Porur!5e0!3m2!1sen!2sin!4v1551300301778\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(8, '9-p', '9-p_1', '9-p_2', '9-p_3', '9-p_4', '<iframe src=\"https://www.youtube.com/embed/oLgzs8nut3A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.31236233014!2d80.16386753431622!3d13.028912655003268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91614f29dd66e091!2sCruze+El+Barato+-+PG+For+Men+in+Porur!5e0!3m2!1sen!2sin!4v1551300301778\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chn_areas`
--
ALTER TABLE `chn_areas` ADD FULLTEXT KEY `a_name` (`a_name`,`a_sub`,`a_pin`,`landmarks`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chn_pg`
--
ALTER TABLE `chn_pg`
  ADD CONSTRAINT `chn_pg_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `chn_areas` (`a_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `chn_pg_details`
--
ALTER TABLE `chn_pg_details`
  ADD CONSTRAINT `chn_pg_details_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `chn_pg` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
