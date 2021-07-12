-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2018 at 11:58 PM
-- Server version: 10.1.24-MariaDB-6
-- PHP Version: 7.0.20-2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `t3_1_1`
--

CREATE TABLE `t3_1_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_2`
--

CREATE TABLE `t3_1_2` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Amount` int(12) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Duration` int(12) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_1_2`
--

INSERT INTO `t3_1_2` (`Username`, `Name`, `Amount`, `Year`, `Duration`, `id_time`) VALUES
('ietdavv', 'asdfa', 2, '07/16-06/17', 2, '1523615572062');

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_3`
--

CREATE TABLE `t3_1_3` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Award` varchar(400) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_1_3`
--

INSERT INTO `t3_1_3` (`Username`, `Name`, `Award`, `Period`, `Year`, `Agency`, `id_time`) VALUES
('ietdavv', 'asdf', 'asdfa', '23asd', '07/14-06/15', 'asdf', '1523639107412');

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_4`
--

CREATE TABLE `t3_1_4` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Duration` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Agency` varchar(300) NOT NULL,
  `Exam` varchar(300) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_5`
--

CREATE TABLE `t3_1_5` (
  `Username` varchar(200) NOT NULL,
  `Choice` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_1_5`
--

INSERT INTO `t3_1_5` (`Username`, `Choice`, `Name`, `Year`, `Link`, `id_time`) VALUES
('ietdavv', 'B', 'fasdfasdf', '07/16-06/17', 'asdfas', '1523640351404');

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_6`
--

CREATE TABLE `t3_1_6` (
  `Username` varchar(100) NOT NULL,
  `Scheme` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Funds` double NOT NULL,
  `Duration` varchar(20) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_2_2`
--

CREATE TABLE `t3_2_2` (
  `Username` varchar(200) NOT NULL,
  `Project` varchar(300) NOT NULL,
  `Principal` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Funds` double NOT NULL,
  `Duration` double NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_2_3`
--

CREATE TABLE `t3_2_3` (
  `Username` varchar(200) NOT NULL,
  `Principal` varchar(300) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Duration` double NOT NULL,
  `Project` varchar(200) NOT NULL,
  `Funds` double NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_2_3`
--

INSERT INTO `t3_2_3` (`Username`, `Principal`, `Department`, `Duration`, `Project`, `Funds`, `Agency`, `Period`, `Year`, `id_time`) VALUES
('ietdavv', 'asdf', 'asdf', 2, 'asdf', 2, 'asdf', 'sadf', '02/14-06/14', '1523641367876'),
('ietdavv', 'asdf', 'sdf', 2, 'asdfas', 2, 'asdfasd', 'asdfasd', '07/15-06/16', '1523641394030');

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_1`
--

CREATE TABLE `t3_3_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_2`
--

CREATE TABLE `t3_3_2` (
  `Username` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Datefrom` varchar(200) NOT NULL,
  `Dateto` varchar(200) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `Dateest` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_3_2`
--

INSERT INTO `t3_3_2` (`Username`, `Year`, `Name`, `Datefrom`, `Dateto`, `Link`, `Dateest`, `id_time`) VALUES
('ietdavv', '07/16-06/17', 'asdf', '2018-04-03', '2018-04-14', 'asdf', '2018-04-11', '1523643664230');

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_3`
--

CREATE TABLE `t3_3_3` (
  `Username` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(300) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_4`
--

CREATE TABLE `t3_3_4` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Nature` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Contact` varchar(300) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_1`
--

CREATE TABLE `t3_4_1` (
  `Username` varchar(200) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `YesNo` varchar(50) NOT NULL,
  `Mechanism` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_2`
--

CREATE TABLE `t3_4_2` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Award` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Details` varchar(500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_3`
--

CREATE TABLE `t3_4_3` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Number` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_4`
--

CREATE TABLE `t3_4_4` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Guide` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Reg` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_4_4`
--

INSERT INTO `t3_4_4` (`Username`, `Name`, `Department`, `Guide`, `Title`, `Reg`, `Year`, `Period`, `id_time`) VALUES
('ietdavv', 'sdf', 'asdf', 'asdf', 'asdf', 'asdfa', 'sdf', '07/17-06/18', '1523643145438');

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_5`
--

CREATE TABLE `t3_4_5` (
  `Username` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Journal` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `ISBN` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_6`
--

CREATE TABLE `t3_4_6` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `BTitle` varchar(200) NOT NULL,
  `PTitle` varchar(200) NOT NULL,
  `ProTitle` varchar(200) NOT NULL,
  `CTitle` varchar(200) NOT NULL,
  `Nation` varchar(50) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `ISBN` varchar(200) NOT NULL,
  `Inst` varchar(200) NOT NULL,
  `Publ` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_4_6`
--

INSERT INTO `t3_4_6` (`Username`, `Name`, `BTitle`, `PTitle`, `ProTitle`, `CTitle`, `Nation`, `Period`, `Year`, `ISBN`, `Inst`, `Publ`, `id_time`) VALUES
('ietdavv', 'asdf', 'asdf', 'asdf', 'asdf', 'sdf', 'sdf', 'sdf', '02/14-06/14', 'sd', 'df', 'ds', '1523643001710');

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_7`
--

CREATE TABLE `t3_4_7` (
  `Username` varchar(200) NOT NULL,
  `PTitle` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `JTitle` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `indx` varchar(200) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `cit` int(11) NOT NULL,
  `id_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_8`
--

CREATE TABLE `t3_4_8` (
  `Username` varchar(200) NOT NULL,
  `PTitle` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `JTitle` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `indx` varchar(200) NOT NULL,
  `cit` int(11) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `id_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_4_8`
--

INSERT INTO `t3_4_8` (`Username`, `PTitle`, `Name`, `JTitle`, `Year`, `indx`, `cit`, `inst`, `id_time`) VALUES
('ietdavv', 'asdf', 'asdf', 'asdf', '07/15-06/16', 'asdf', 0, '3', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `t3_5_1`
--

CREATE TABLE `t3_5_1` (
  `Username` varchar(200) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_5_2`
--

CREATE TABLE `t3_5_2` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Project` varchar(200) NOT NULL,
  `Details` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Revenue` double NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_5_3`
--

CREATE TABLE `t3_5_3` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Details` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Revenue` double NOT NULL,
  `Trainees` double NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_1`
--

CREATE TABLE `t3_6_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_2`
--

CREATE TABLE `t3_6_2` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Award` varchar(200) NOT NULL,
  `AwardG` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_6_2`
--

INSERT INTO `t3_6_2` (`Username`, `Name`, `Award`, `AwardG`, `Period`, `Year`, `id_time`) VALUES
('ietdavv', 'aasdf', 'asdf', 'asdf', 'asdf', '07/15-06/16', '1523642672342');

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_3`
--

CREATE TABLE `t3_6_3` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Award` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Teachers` double NOT NULL,
  `Students` double NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_6_3`
--

INSERT INTO `t3_6_3` (`Username`, `Name`, `Award`, `Period`, `Year`, `Teachers`, `Students`, `id_time`) VALUES
('ietdavv', 'asdf', 'asdf', '33234', '07/16-06/17', 34, 33, '1523642661372');

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_4`
--

CREATE TABLE `t3_6_4` (
  `Username` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Award` varchar(200) NOT NULL,
  `Scheme` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Teachers` double NOT NULL,
  `Students` double NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_6_4`
--

INSERT INTO `t3_6_4` (`Username`, `Name`, `Award`, `Scheme`, `Period`, `Year`, `Teachers`, `Students`, `id_time`) VALUES
('ietdavv', 'asdf', 'asdf', 'asdf', 'asdf', '07/17-06/18', 33, 33, '1523642649142');

-- --------------------------------------------------------

--
-- Table structure for table `t3_7_1`
--

CREATE TABLE `t3_7_1` (
  `Username` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Source` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Duration` double NOT NULL,
  `Nature` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_7_1`
--

INSERT INTO `t3_7_1` (`Username`, `Title`, `Agency`, `Name`, `Source`, `Period`, `Year`, `Duration`, `Nature`, `id_time`) VALUES
('ietdavv', 'asdfasd', 'fasdf', 'asdf', 'asdfas', '33', '07/16-06/17', 0, 'asdf', '1523642633326');

-- --------------------------------------------------------

--
-- Table structure for table `t3_7_2`
--

CREATE TABLE `t3_7_2` (
  `Username` varchar(200) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Agency` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Durfrom` varchar(100) NOT NULL,
  `Durto` varchar(100) NOT NULL,
  `Nature` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_7_2`
--

INSERT INTO `t3_7_2` (`Username`, `Title`, `Agency`, `Year`, `Durfrom`, `Durto`, `Nature`, `Name`, `id_time`) VALUES
('ietdavv', 'asdf', 'asdf', '07/18-06/19', '2018-03-28', '2018-04-09', 'sdaf', 'asdf', '1523644036294');

-- --------------------------------------------------------

--
-- Table structure for table `t3_7_3`
--

CREATE TABLE `t3_7_3` (
  `Username` varchar(200) NOT NULL,
  `org` varchar(200) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `duration` double NOT NULL,
  `activities` varchar(500) NOT NULL,
  `nums` double NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_7_3`
--

INSERT INTO `t3_7_3` (`Username`, `org`, `inst`, `Period`, `Year`, `duration`, `activities`, `nums`, `id_time`) VALUES
('ietdavv', 'asdf', 'asdf', 'asasdf', '02/14-06/14', 0, 'asdf', 33, '1523642061758');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t3_1_4`
--
ALTER TABLE `t3_1_4`
  ADD UNIQUE KEY `id_time` (`id_time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
