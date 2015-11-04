-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2015 at 06:46 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suiscas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Admin_name` varchar(30) NOT NULL,
  `Family_name` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE IF NOT EXISTS `discussion` (
  `dis_id` int(11) NOT NULL,
  `Content` varchar(2000) NOT NULL,
  `Date` date NOT NULL,
  `Commented_By` varchar(15) NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `forum_id` int(11) NOT NULL,
  `forum_title` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `posted_by` varchar(15) NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL,
  `Content` varchar(2000) NOT NULL,
  `Time` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `Send_to` varchar(15) NOT NULL,
  `Sent_by` varchar(15) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL,
  `Content` varchar(3000) NOT NULL,
  `Time` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Posted_by` varchar(15) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notif_id` int(11) NOT NULL,
  `Content` varchar(200) NOT NULL,
  `Time` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Send_by` varchar(15) NOT NULL,
  `sent_to` varchar(15) NOT NULL,
  PRIMARY KEY (`notif_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_ID` int(11) NOT NULL,
  `Reply_cont` varchar(2000) NOT NULL,
  `time` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Commented_By` varchar(15) NOT NULL,
  `topic_id` varchar(30) NOT NULL,
  PRIMARY KEY (`post_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Stud_id` varchar(15) NOT NULL,
  `message_id` int(11) NOT NULL,
  `Immigration_S` varchar(30) NOT NULL,
  `AppNature` varchar(12) NOT NULL,
  `VisaType` varchar(30) NOT NULL,
  `year` varchar(15) NOT NULL,
  `schoolYear` varchar(10) NOT NULL,
  `schoolRep` varchar(50) NOT NULL,
  `schoolRep_Num` int(11) NOT NULL,
  `passportNum` varchar(15) NOT NULL,
  `ArrivalDate` date NOT NULL,
  `Pass_ ExpDate` date NOT NULL,
  `Flight_Num` int(11) NOT NULL,
  `place_issue` varchar(20) NOT NULL,
  `Last_day_date` date NOT NULL,
  `LastNam` varchar(30) NOT NULL,
  `FirstNam` varchar(20) NOT NULL,
  `MiddleNam` varchar(15) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `BirthCountry` varchar(30) NOT NULL,
  `Nationality` varchar(40) NOT NULL,
  `CivilStatus` varchar(10) NOT NULL,
  `hight` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `ContactNum` bigint(20) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `SSRN` bigint(20) NOT NULL,
  `email_add` varchar(30) NOT NULL,
  `PhilipinAdd` varchar(70) NOT NULL,
  `Barangay` varchar(30) NOT NULL,
  `provincZipCode` int(11) NOT NULL,
  `Abroad_add` varchar(70) NOT NULL,
  `city` varchar(20) NOT NULL,
  `countryZipCode` int(11) NOT NULL,
  `guardianName` varchar(70) NOT NULL,
  `App_relationship` varchar(70) NOT NULL,
  `guardian_PhilipinAdd` varchar(70) NOT NULL,
  `g_Barangay` varchar(30) NOT NULL,
  `g_ProvincZipCode` int(11) NOT NULL,
  `g_countryZipCode` int(11) NOT NULL,
  `g_ContactNum` bigint(20) NOT NULL,
  `g_Mobile` bigint(20) NOT NULL,
  `schoolName` varchar(70) NOT NULL,
  `School_Acc_Num` varchar(30) NOT NULL,
  `s_PhilipinAdd` varchar(70) NOT NULL,
  `s_Barangay` varchar(30) NOT NULL,
  `s_ProvincZipCode` int(11) NOT NULL,
  `s_countryZipCode` int(11) NOT NULL,
  `s_PhilippinNum` bigint(20) NOT NULL,
  `s_Mobile` bigint(20) NOT NULL,
  `registeredScool_add` varchar(70) NOT NULL,
  `sR_ProvincZipCod` int(11) NOT NULL,
  `sR_Barangay` varchar(70) NOT NULL,
  `sR_countryZipCode` int(11) NOT NULL,
  `sR_PhilippinNum` bigint(20) NOT NULL,
  `sR_Mobile` bigint(20) NOT NULL,
  `ACR` varchar(20) NOT NULL,
  `IssuanceDat` date NOT NULL,
  `I_ExpiryDat` date NOT NULL,
  ` i_CRN` varchar(15) NOT NULL,
  `s_FBAdd` varchar(40) NOT NULL,
  `s_FBUsrNam` varchar(40) NOT NULL,
  `s_SUISCASUserNam` varchar(40) NOT NULL,
  `s_SUISCASPass` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
  `thread_ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `Posted_by` varchar(15) NOT NULL,
  `Comment_by` varchar(15) NOT NULL,
  PRIMARY KEY (`thread_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
