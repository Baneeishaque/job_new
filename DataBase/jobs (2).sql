-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 10:27 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobs`
--
CREATE DATABASE IF NOT EXISTS `jobs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jobs`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `iduser` int(11) NOT NULL,
  `email` mediumtext,
  `password` mediumtext,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `experience` varchar(45) DEFAULT NULL,
  `key_skills` varchar(45) DEFAULT NULL,
  `professional_background` varchar(45) DEFAULT NULL,
  `education` varchar(45) DEFAULT NULL,
  `education_other` varchar(45) DEFAULT NULL,
  `resume` mediumtext,
  `otp` varchar(100) NOT NULL,
  `status` varchar(45) NOT NULL,
  `company_following` longtext NOT NULL,
  `jobs_applied` longtext NOT NULL,
  `last_posted_notification` mediumtext NOT NULL,
  `photo` mediumtext NOT NULL,
  `mail` mediumtext NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`iduser`, `email`, `password`, `name`, `address`, `country`, `state`, `city`, `mobile`, `experience`, `key_skills`, `professional_background`, `education`, `education_other`, `resume`, `otp`, `status`, `company_following`, `jobs_applied`, `last_posted_notification`, `photo`, `mail`) VALUES
(1, 'dcb75c5ef01734a745b0aa65c75062b9', '25d55ad283aa400af464c76d713c07ad', 'Sajeer Babu.K', 'india', 'India', 'kerala', 'tirur', '9048886804', '1', 'php,mysql,javascript', 'PHP Developer', 'diploma', 'none', 'doc.pdf', 'wsyo', 'verified', ',,1,', ',,1,', '', '', 'sajeerbabu.k@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

DROP TABLE IF EXISTS `employer`;
CREATE TABLE IF NOT EXISTS `employer` (
  `idemployer` int(11) NOT NULL,
  `email` mediumtext,
  `password` mediumtext,
  `company_name` varchar(45) DEFAULT NULL,
  `company_type` varchar(45) DEFAULT NULL,
  `industry_type` varchar(500) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `pincode` varchar(45) DEFAULT NULL,
  `contact_number` varchar(45) DEFAULT NULL,
  `contact_person` varchar(45) DEFAULT NULL,
  `current_employer` varchar(45) NOT NULL,
  `designation` varchar(45) NOT NULL,
  `photo` mediumtext NOT NULL,
  `role_in_hiring` varchar(45) NOT NULL,
  `otp` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `following` longtext NOT NULL,
  `mail` mediumtext NOT NULL,
  PRIMARY KEY (`idemployer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`idemployer`, `email`, `password`, `company_name`, `company_type`, `industry_type`, `address`, `country`, `state`, `city`, `pincode`, `contact_number`, `contact_person`, `current_employer`, `designation`, `photo`, `role_in_hiring`, `otp`, `status`, `following`, `mail`) VALUES
(1, 'dcb75c5ef01734a745b0aa65c75062b9', '25d55ad283aa400af464c76d713c07ad', 'infotech', 'company', 'Software Services', 'eztrxtcyvubhjnmk', 'India', 'kerala', 'tirur', '6255982', '9048886804', 'sajeer', 'head of recruiting', 'md', 'itechlogo.jpg', 'company', 'dbad', 'verified', ',,1,', 'sajeerbabu.k@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `idjob` int(45) NOT NULL,
  `idemployer` int(45) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `experience` varchar(45) NOT NULL,
  `minsalary` varchar(45) NOT NULL,
  `maxsalary` varchar(45) NOT NULL,
  `vacancies` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `industrytype` varchar(500) NOT NULL,
  `role` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `fromdate` varchar(45) NOT NULL,
  `expirydate` varchar(45) NOT NULL,
  `publish` varchar(45) NOT NULL,
  `keyword` varchar(2000) NOT NULL,
  `applied` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`idjob`, `idemployer`, `title`, `description`, `experience`, `minsalary`, `maxsalary`, `vacancies`, `location`, `industrytype`, `role`, `qualification`, `fromdate`, `expirydate`, `publish`, `keyword`, `applied`) VALUES
(1, 1, 'php developer', 'xrdcfvghbjnkml', '1', '8145', '98294', '10', 'chennai', 'Software Services', 'developer', 'diploma', '2015-03-07', '2015-03-16', '', 'php,javascript,html,mysql', ',,1,');

-- --------------------------------------------------------

--
-- Table structure for table `messages_posted_employee`
--

DROP TABLE IF EXISTS `messages_posted_employee`;
CREATE TABLE IF NOT EXISTS `messages_posted_employee` (
  `iduser` mediumtext NOT NULL,
  `idmessage` mediumtext NOT NULL,
  `message` mediumtext NOT NULL,
  `idjob` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages_posted_employee`
--

INSERT INTO `messages_posted_employee` (`iduser`, `idmessage`, `message`, `idjob`) VALUES
('1', '2015-03-06 22:10:00', 'Click Here To View Your Matching Job', '1'),
('1', '2015-03-06 22:10:06', 'Click Here To View Your Matching Job', '1'),
('1', '2015-03-06 22:10:13', 'Click Here To View Your Matching Job', '1');

-- --------------------------------------------------------

--
-- Table structure for table `posted_notification_employee`
--

DROP TABLE IF EXISTS `posted_notification_employee`;
CREATE TABLE IF NOT EXISTS `posted_notification_employee` (
  `idposted_notification_employee` int(255) NOT NULL,
  `iduser` mediumtext NOT NULL,
  `no` int(255) NOT NULL,
  `opened` mediumtext NOT NULL,
  `idjob` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posted_notification_employee`
--

INSERT INTO `posted_notification_employee` (`idposted_notification_employee`, `iduser`, `no`, `opened`, `idjob`) VALUES
(1, '1', 0, 'yes', '1');

-- --------------------------------------------------------

--
-- Table structure for table `resume_granted_info`
--

DROP TABLE IF EXISTS `resume_granted_info`;
CREATE TABLE IF NOT EXISTS `resume_granted_info` (
  `iduser` mediumtext NOT NULL,
  `idresume` mediumtext NOT NULL,
  `resume_name` mediumtext NOT NULL,
  `idemployer` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume_granted_info`
--

INSERT INTO `resume_granted_info` (`iduser`, `idresume`, `resume_name`, `idemployer`) VALUES
('1', '2015-03-06 22:19:45', 'doc.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `resume_granted_notification`
--

DROP TABLE IF EXISTS `resume_granted_notification`;
CREATE TABLE IF NOT EXISTS `resume_granted_notification` (
  `id_resume_granted_notification` int(255) NOT NULL,
  `idemployer` mediumtext NOT NULL,
  `no` int(255) NOT NULL,
  `opened` mediumtext NOT NULL,
  `iduser` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume_granted_notification`
--

INSERT INTO `resume_granted_notification` (`id_resume_granted_notification`, `idemployer`, `no`, `opened`, `iduser`) VALUES
(1, '1', 0, 'yes', '1');

-- --------------------------------------------------------

--
-- Table structure for table `resume_notification_employee`
--

DROP TABLE IF EXISTS `resume_notification_employee`;
CREATE TABLE IF NOT EXISTS `resume_notification_employee` (
  `idresume_notification_employee` int(255) NOT NULL,
  `iduser` mediumtext NOT NULL,
  `no` int(255) NOT NULL,
  `opened` mediumtext NOT NULL,
  `idemployer` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume_notification_employee`
--

INSERT INTO `resume_notification_employee` (`idresume_notification_employee`, `iduser`, `no`, `opened`, `idemployer`) VALUES
(1, '1', 0, 'yes', '1');

-- --------------------------------------------------------

--
-- Table structure for table `resume_notification_info`
--

DROP TABLE IF EXISTS `resume_notification_info`;
CREATE TABLE IF NOT EXISTS `resume_notification_info` (
  `iduser` mediumtext NOT NULL,
  `idinfo` mediumtext NOT NULL,
  `idemployer` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume_notification_info`
--

INSERT INTO `resume_notification_info` (`iduser`, `idinfo`, `idemployer`) VALUES
('1', '2015-03-06 22:17:10', '1'),
('1', '2015-03-06 22:18:01', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
