-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2016 at 11:16 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kipande`
--
CREATE DATABASE IF NOT EXISTS `kipande` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kipande`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `centre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `centre`) VALUES
(1, 'hoslack', 'hhlbbcnofn', 'Mombasa County');

-- --------------------------------------------------------

--
-- Table structure for table `bankcards`
--

CREATE TABLE IF NOT EXISTS `bankcards` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `cardtype` varchar(100) DEFAULT NULL,
  `cardnumber` int(100) NOT NULL,
  `sprovider` varchar(100) NOT NULL,
  `centre` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bankcards`
--

INSERT INTO `bankcards` (`id`, `fname`, `mname`, `lname`, `cardtype`, `cardnumber`, `sprovider`, `centre`, `Status`) VALUES
(1, 'hoslack', 'ochieng', 'owino', 'ATM card', 2147483647, 'Postbank', '', 'No'),
(2, 'ghghf', 'kjhjbjhb', 'jhghj', 'ghfchggvh', 9876788, 'bcghfvhg', '', 'No'),
(3, 'hfhv', 'hjghjgh', 'hhghj', 'gvnbv', 767687, 'jbbvb', '', 'No'),
(4, 'ygjhg', 'hjghjgh', 'hvhvghg', 'hghfghvgh', 757678567, 'hhgfgh', '', 'No'),
(5, 'hvhgfg', 'gjhghg', 'hhjgh', 'fhghgfhjhgfh', 2147483647, 'hgfhg', '', 'No'),
(6, 'gffhf', 'kghjg', 'hghjghjv', 'bhjjbghjghv', 987867567, ' nbvbbvn', '', 'No'),
(7, 'erre', 'gh', 'hjghj', 'bnbnbv', 7676, 'bbnb', 'Nairobi Moi Avenue', 'No'),
(8, 'Suzzy', 'Adhiambo', 'Haggai', 'ATM card', 767687, 'Postbank', 'Mombasa County', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `centres`
--

CREATE TABLE IF NOT EXISTS `centres` (
  `id` int(100) NOT NULL,
  `centrename` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `admin` varchar(100) NOT NULL,
  PRIMARY KEY (`centrename`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centres`
--

INSERT INTO `centres` (`id`, `centrename`, `region`, `description`, `admin`) VALUES
(21, 'Bungoma County', 'Western ', 'Post Office, Moi Avenue Road, Bungoma Town', 'Martin'),
(22, 'Busia County', 'Western ', 'Post Office, Opposite Government Offices', 'Ezekiel'),
(7, 'Embu County', 'Eastern', 'Post Office, Opposite County Commissioner''s Office, Meru-Nairobi Highway, Embu Town', 'Walter'),
(28, 'Huduma City Square', 'Nairobi & Central', 'Haile Selassie Avenue, Next to Technical University of Kenya', 'Steve'),
(29, 'Huduma Eastleigh', 'Nairobi & Central', 'Eastleigh Eleventh Street', 'Mutisya'),
(27, 'Huduma GPO', 'Nairobi & Central', 'Teleposta Building, Kenyatta Avenue', 'Julius'),
(30, 'Huduma Kibra', 'Nairobi & Central', 'District Commissioner''s Office, Kibera Drive ', 'Mugenya'),
(31, 'Huduma Makadara', 'Nairobi & Central ', 'City County Offices-Eastlands Revenue Building off Jogoo Road, Next to DC Makadara', 'Wambui'),
(5, 'Isiolo County', 'Eastern ', 'Post Office,Hospital Road,off Isiolo-Marsabit Highway', 'Amon'),
(19, 'Kajiado County', 'Central & South Rift', 'Post Office, Nairobi-Namanga Highway', 'Pharis'),
(20, 'Kakamega County', 'Western ', 'Post Office, Kakamega-Kisumu Highway', 'Frank'),
(13, 'Kiambu County', 'Nairobi & Central ', 'Assistant County Commissioner''s Office(DO), Opposite Thika Stadium, Thika Town', 'Brian'),
(25, 'Kisii County ', 'Western ', 'Post Office, Kisii-Migori Road, Kisii Town', 'Wycklife'),
(24, 'Kisumu County', 'Western ', 'Former PC Office, Prosperity House Next To Central Bank', 'Collins'),
(8, 'Kitui County', 'Eastern ', 'Post Office, Opposite Catholic Church, Kitui Town', 'John'),
(2, 'Kwale County', 'Coast ', 'Kwale-Kinango Road, Opposite National Police Service', 'Emmanuel'),
(17, 'Laikipia County', 'Central & South Rift', 'County Commissioner''s Office, Nanyuki Town', 'Daniel'),
(9, 'Machakos County', 'Eastern', 'Post Office, Opposite Cathedral Church, Machakos Town', 'Alphonce'),
(10, 'Makueni County', 'Eastern', 'Post Office, Next to County Commissioners Office, Wote Town', 'Ken'),
(6, 'Meru County', 'Eastern ', 'Post Office, Opposite County Commissioner''s Office, Meru-Makutano Highway, Meru Town', 'George'),
(1, 'Mombasa County', 'Coast', 'General Post Office, Opposite Safaricom Customer care, Digo Road, Mombasa\r\n\r\nContact: 0725567255', 'hoslack'),
(18, 'Nakuru County', 'Central & South Rift', 'GPO, Next to Merica Hotel, Kenyatta Avenue', 'Apollo'),
(26, 'Nyamira County', 'Western', 'Post Office, Konate-Nyamira Road', 'Humphry'),
(11, 'Nyandarua County', 'Nairobi & Central ', 'County Commissioner''s Office, Olkalou Township', 'Enock'),
(12, 'Nyeri County ', 'Nairobi & Central', 'Former Provincial Commissioner''s Office, Nyeri Town', 'Ian'),
(23, 'Siaya County', 'Western', 'post Office, Kisumu-Busia Highway, Opposite KCB', 'Josiah'),
(3, 'Taita-Taveta County', 'Coast', 'CDF Office, Wundanyi', 'Mwalumbi'),
(16, 'Trans Nzoia County', 'North Rift', 'Kitale Post Office, Mak-Asembo Road', 'Shamir'),
(14, 'Turkana County', 'North Rift', 'County Commissioner''s Office, Lodwar', 'Eliud'),
(15, 'Uasin Gishu County', 'North Rift ', 'Post Office, Eldoret-Kitale Road, Eldoret Town', 'Eric'),
(4, 'Wajir County', 'Northern ', 'County Commissioner''s Office, next to Wajir county Assembly', 'Dahir');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE IF NOT EXISTS `certificates` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `certtype` varchar(100) DEFAULT NULL,
  `institution` varchar(100) NOT NULL,
  `certnumber` int(100) NOT NULL,
  `centre` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `fname`, `mname`, `lname`, `certtype`, `institution`, `certnumber`, `centre`, `Status`) VALUES
(1, 'hhghj', 'hhjghjg', 'jhhgjgj', 'jhjhhgjkh', 'hjkhkjhjk', 8987889, '', 'No'),
(2, 'hos', 'ochieng', 'owino', 'KCSE', 'Lenana School', 32473959, '', 'Yes'),
(3, 'Suzzy', 'Adhiambo', 'Haggai', 'Bsc', 'Kenyatta University', 2147483647, 'Mombasa County', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `collected`
--

CREATE TABLE IF NOT EXISTS `collected` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `centre` varchar(100) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `collected`
--

INSERT INTO `collected` (`id`, `fname`, `mname`, `lname`, `centre`, `c_date`) VALUES
(1, 'hoslack', '', 'ochieng', 'Nairobi', '2016-03-22 22:05:48'),
(2, 'Gaudent', '', 'Akeyo', 'Nairobi', '2016-03-22 22:58:15'),
(3, 'Kelvin', '', 'Gauki', 'Thika', '2016-03-22 23:08:03'),
(4, 'fiona', '', 'murie', 'Bungoma', '2016-03-23 20:11:11'),
(5, 'Oliver', '', 'Kundu', 'Nairobi', '2016-03-23 20:36:20'),
(6, 'hoslack', '', 'ochieng', 'Nairobi', '2016-04-16 12:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `collegeid`
--

CREATE TABLE IF NOT EXISTS `collegeid` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `idnumber` int(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `centre` varchar(100) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `collegeid`
--

INSERT INTO `collegeid` (`id`, `fname`, `mname`, `lname`, `idnumber`, `institution`, `centre`, `Status`) VALUES
(1, 'Oliver', NULL, 'Kundu', 38622203, '', 'Nairobi', 'Yes'),
(2, 'hoslack', 'ochieng', 'owino', 32473959, 'UON', '', 'No'),
(3, 'hvhgfg', 'hjghjgh', 'jhghj', 8677, 'Kenyatta University', 'Mombasa County', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `nationalid`
--

CREATE TABLE IF NOT EXISTS `nationalid` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `idnumber` int(100) NOT NULL,
  `centre` varchar(100) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `nationalid`
--

INSERT INTO `nationalid` (`id`, `fname`, `mname`, `lname`, `idnumber`, `centre`, `Status`) VALUES
(1, 'hoslack', NULL, 'ochieng', 32473959, 'Nairobi', 'Yes'),
(2, 'Gaudent', NULL, 'Akeyo', 32343212, 'Nairobi', 'Yes'),
(24, 'samson', NULL, 'rapando', 32179386, 'chiromo', ''),
(25, 'Kennedy', NULL, 'Rayolah', 27558729, 'Nairobi', ''),
(26, 'Oliver', NULL, 'Kundu', 38622203, 'Bungoma', 'Yes'),
(27, 'fiona', NULL, 'murie', 34828723, 'Bungoma', 'Yes'),
(28, 'Micheal', NULL, 'Kalume', 32945632, 'Mombasa', 'Yes'),
(29, 'Kelvin', NULL, 'Gauki', 32616981, 'Thika', 'Yes'),
(30, 'Ben', NULL, 'Githae', 1323973, 'Muranga', 'No'),
(33, 'hoslack', 'ochieng', 'owino', 0, '', 'No'),
(34, 'hoslack', 'ochieng', 'owino', 0, '', 'No'),
(35, 'Cynthia', 'Akoth', 'Atieno', 8, '', 'No'),
(36, 'jhfkjshfk', 'hkjfkshfksj', 'gskjfhskjh', 7, '', 'No'),
(37, 'gsdjfgdskjgf', 'ghkjghjg', 'kjgjhfhjgkj', 9, '', 'No'),
(38, 'ghggf', 'ggghghg', 'dfdfsd', 0, '', 'No'),
(39, 'hvhgfg', 'hjghjgh', 'hghjghjv', 8787876, 'Mombasa County', 'No'),
(40, 'hvhgfg', 'hjghjgh', 'jhghj', 6756, 'Mombasa County', 'No'),
(41, 'hvhgfg', 'hjghjgh', 'hghjghjv', 656, 'Mombasa County', 'No'),
(42, 'Joseph ', 'Mutiga', 'Kirega', 32498723, 'Mombasa County', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `passports`
--

CREATE TABLE IF NOT EXISTS `passports` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `pnumber` int(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `centre` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `passports`
--

INSERT INTO `passports` (`id`, `fname`, `mname`, `lname`, `pnumber`, `country`, `centre`, `Status`) VALUES
(1, 'hoslack', 'ochieng', 'owino', 32473959, 'Kenya', '', 'No');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
