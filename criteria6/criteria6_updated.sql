-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2018 at 02:45 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `criteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `t6_1_1`
--

CREATE TABLE `t6_1_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_1_2`
--

CREATE TABLE `t6_1_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_1`
--

CREATE TABLE `t6_2_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_2`
--

CREATE TABLE `t6_2_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_3`
--

CREATE TABLE `t6_2_3` (
  `Username` varchar(100) NOT NULL,
  `PD_C` varchar(100) NOT NULL,
  `PD_Y` varchar(100) NOT NULL,
  `AD_C` varchar(100) NOT NULL,
  `AD_Y` varchar(100) NOT NULL,
  `FA_C` varchar(100) NOT NULL,
  `FA_Y` varchar(100) NOT NULL,
  `SA_C` varchar(100) NOT NULL,
  `SA_Y` varchar(100) NOT NULL,
  `EX_C` varchar(100) NOT NULL,
  `EX_Y` varchar(100) NOT NULL,
  `CHOICE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_4`
--

CREATE TABLE `t6_2_4` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_2_4`
--

INSERT INTO `t6_2_4` (`Username`, `Description`, `File_name`, `Link`) VALUES
('admin1', 'flds', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_1`
--

CREATE TABLE `t6_3_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_3_1`
--

INSERT INTO `t6_3_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('admin1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_2`
--

CREATE TABLE `t6_3_2` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Teacher_name` varchar(100) NOT NULL,
  `Pan_no` varchar(30) NOT NULL,
  `conference_name` varchar(100) NOT NULL,
  `proffessional_body_name` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_3_2`
--

INSERT INTO `t6_3_2` (`Username`, `Year`, `Teacher_name`, `Pan_no`, `conference_name`, `proffessional_body_name`, `amount`, `id_time`) VALUES
('admin1', 'July 17 - June 18', 'Ram', 'QWSMA1324', 'dnlwkla', 'dlakdnadk', 1322, 'id1523157446608');

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_3`
--

CREATE TABLE `t6_3_3` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Sno` varchar(100) NOT NULL,
  `Title_teaching` varchar(100) NOT NULL,
  `Title_non_teaching` varchar(100) NOT NULL,
  `Dates_from_to` varchar(100) NOT NULL,
  `Participants_no_teach` int(11) NOT NULL,
  `Participants_no_non_teach` int(11) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_3_3`
--

INSERT INTO `t6_3_3` (`Username`, `Year`, `Sno`, `Title_teaching`, `Title_non_teaching`, `Dates_from_to`, `Participants_no_teach`, `Participants_no_non_teach`, `id_time`) VALUES
('admin1', 'July 18 - June 19', '1', 'saklLKSND', 'KDNL', 'KNCKL', 39, 9, 'idididid1523159485270'),
('admin1', 'July 14 - June 15', '2', 'DNSF', 'KFSK', 'KNDF', 32, 4, 'ididid1523159576580'),
('admin1', 'July 17 - June 18', '3', 'ASN', 'KDLKSN', 'KNDLSN', 34, 53, 'idid1523159609487'),
('admin1', 'July 16 - June 17', '4', 'GJKJ', 'KJHKJ', 'LKJLK', 9879, 8798, 'id1523159656140'),
('admin1', 'July 17 - June 18', '5', 'N', 'NKLNLK', 'NK', 8, 98, 'id1523159701036');

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_3_1`
--

CREATE TABLE `t6_3_3_1` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Title_teaching` varchar(100) NOT NULL,
  `Date_from` varchar(30) NOT NULL,
  `Date_to` varchar(30) NOT NULL,
  `Participants_no_teach` int(11) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_3_3_1`
--

INSERT INTO `t6_3_3_1` (`Username`, `Year`, `Title_teaching`, `Date_from`, `Date_to`, `Participants_no_teach`, `id_time`) VALUES
('admin1', 'Feb 14 - June 14', 'NSS1', '2018-04-09', '2018-04-15', 12, 'ididididididididididididididididid1523548278750'),
('admin1', 'July 16 - June 17', 'TEST2', '2018-04-02', '2018-04-03', 101, 'idididididididididididididididid1523548613326');

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_3_2`
--

CREATE TABLE `t6_3_3_2` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Title_non_teaching` varchar(100) NOT NULL,
  `Date_from` varchar(30) NOT NULL,
  `Date_to` varchar(30) NOT NULL,
  `Participants_no_non_teach` int(11) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_3_3_2`
--

INSERT INTO `t6_3_3_2` (`Username`, `Year`, `Title_non_teaching`, `Date_from`, `Date_to`, `Participants_no_non_teach`, `id_time`) VALUES
('admin1', 'July 14 - June 15', 'jhdj', '2018-04-19', '2018-04-19', 382, 'ididididid1523554429775');

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_4`
--

CREATE TABLE `t6_3_4` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Teacher_number` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Dates_from` varchar(30) NOT NULL,
  `Date_to` varchar(30) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_3_4`
--

INSERT INTO `t6_3_4` (`Username`, `Year`, `Teacher_number`, `Title`, `Dates_from`, `Date_to`, `id_time`) VALUES
('admin1', 'July 14 - June 15', '12', 'GOOGLE', '2018-04-02', '2018-04-03', 'idididid1523550996678'),
('admin1', 'Feb 14 - June 14', '21', 'FB', '2018-04-11', '2018-04-24', 'ididid1523551202288');

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_5`
--

CREATE TABLE `t6_3_5` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_3_5`
--

INSERT INTO `t6_3_5` (`Username`, `Description`, `File_name`, `Link`) VALUES
('admin1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t6_4_1`
--

CREATE TABLE `t6_4_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_4_1`
--

INSERT INTO `t6_4_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('admin1', 'OFO CYCLE', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t6_4_2`
--

CREATE TABLE `t6_4_2` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Agency` varchar(100) NOT NULL,
  `Fund` varchar(100) NOT NULL,
  `Initiative` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_4_2`
--

INSERT INTO `t6_4_2` (`Username`, `Year`, `Agency`, `Fund`, `Initiative`, `id_time`) VALUES
('admin1', 'July 17 - June 18', 'OFO', '2.34', 'CYCLE', 'id1523162153624');

-- --------------------------------------------------------

--
-- Table structure for table `t6_4_3`
--

CREATE TABLE `t6_4_3` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_4_3`
--

INSERT INTO `t6_4_3` (`Username`, `Description`, `File_name`, `Link`) VALUES
('admin1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_1`
--

CREATE TABLE `t6_5_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_5_1`
--

INSERT INTO `t6_5_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('admin1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_2`
--

CREATE TABLE `t6_5_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_5_2`
--

INSERT INTO `t6_5_2` (`Username`, `Description`, `File_name`, `Link`) VALUES
('admin1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_3`
--

CREATE TABLE `t6_5_3` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Quality_name` varchar(100) NOT NULL,
  `Date_from` varchar(30) NOT NULL,
  `Date_to` varchar(30) NOT NULL,
  `Duration` double NOT NULL,
  `participant_no` int(11) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_5_3`
--

INSERT INTO `t6_5_3` (`Username`, `Year`, `Quality_name`, `Date_from`, `Date_to`, `Duration`, `participant_no`, `id_time`) VALUES
('admin1', 'July 15 - June 16', 'djks', '2018-04-27', '2018-04-19', 389, 2, 'idid1523552892834'),
('admin1', 'July 15 - June 16', 'djsnkj', '2018-04-27', '2018-04-29', 3, 122, 'id1523552932875');

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_4`
--

CREATE TABLE `t6_5_4` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `t1` varchar(100) NOT NULL,
  `t2` varchar(30) NOT NULL,
  `t3` varchar(100) NOT NULL,
  `t4` varchar(100) NOT NULL,
  `t5` varchar(30) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_5_4`
--

INSERT INTO `t6_5_4` (`Username`, `Year`, `t1`, `t2`, `t3`, `t4`, `t5`, `id_time`) VALUES
('admin1', 'July 15 - June 16', 'Yes', 'No', 'No', 'No', 'No', 'id1523166090035');

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_5`
--

CREATE TABLE `t6_5_5` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_5_5`
--

INSERT INTO `t6_5_5` (`Username`, `Description`, `File_name`, `Link`) VALUES
('admin1', 'BALA GURU SWAMI C  ', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
