-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2018 at 01:50 AM
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
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `Year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`Year`) VALUES
('Feb 14 - June 14'),
('Feb 14 - June 14'),
('July 14 - June 15'),
('July 14 - June 15'),
('July 15 - June 16'),
('July 15 - June 16'),
('July 16 - June 17'),
('July 16 - June 17'),
('July 17 - June 18'),
('July 17 - June 18'),
('July 18 - June 19'),
('July 18 - June 19');

-- --------------------------------------------------------

--
-- Table structure for table `academic_year2`
--

CREATE TABLE `academic_year2` (
  `Year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_year2`
--

INSERT INTO `academic_year2` (`Year`) VALUES
('July 14 - June 15'),
('July 15 - June 16'),
('July 16 - June 17'),
('July 17 - June 18'),
('July 18 - June 19'),
('July 19 - June 20'),
('July 20 - June 21'),
('July 21 - June 22'),
('July 14 - June 15'),
('July 15 - June 16'),
('July 16 - June 17'),
('July 17 - June 18'),
('July 18 - June 19'),
('July 19 - June 20'),
('July 20 - June 21'),
('July 21 - June 22');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sno` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `name`, `sno`) VALUES
('admin1', 'adminone', 'DEPARTMENT OF ADMIN ONE', 1),
('admin2', 'admintwo', 'DEPARTMENT OF ADMIN TWO', 2),
('admin3', 'adminthree', 'DEPARTMENT OF ADMIN THREE', 3),
('admin4', 'adminfour', 'DEPARTMENT OF ADMIN FOUR', 4),
('admin5', 'adminfive', 'DEPARTMENT OF ADMIN FIVE', 5),
('admin6', 'adminsix', 'DEPARTMENT OF ADMIN SIX', 6),
('admin7', 'adminseven', 'DEPARTMENT OF ADMIN SEVEN', 7);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Username` varchar(30) NOT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Course_code` varchar(30) DEFAULT NULL,
  `Course_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Username`, `Prog_code`, `Course_code`, `Course_name`) VALUES
('ietdavv', 'BECS', 'CER4C1', 'Discrete Structure'),
('ietdavv', 'BECS', 'CER3C1', 'Applied Mathematics-III'),
('ietdavv', 'BECS', 'CER4C2', 'Operating System'),
('ietdavv', 'BETC', 'TCR4C1', 'COA'),
('ietdavv', 'BEMECH', 'MER4C1', 'Industrial Engineering'),
('ietdavv', 'BEMECH', 'CER4C4', 'Mechatronics'),
('iipsdavv', 'ABCDE', 'QWEQW', 'RQWRWQRWE'),
('admin1', 'AD1BSC', 'AD1RX1', 'APPLIED MATHEMATICS'),
('admin1', 'AD1BSC', 'AD1RX2', 'APPLIED PHYSICS'),
('admin1', 'AD1MSC', 'AD1RY1', 'APPLIED MATHEMATICS'),
('admin1', 'AD1MSC', 'AD1RY2', 'APPLIED PHYSICS'),
('admin2', 'AD2BSC', 'AD2RX1', 'APPLIED MATHEMATICS'),
('admin2', 'AD2BSC', 'AD2RX2', 'APPLIED PHYSICS'),
('admin2', 'AD2MSC', 'AD2RY1', 'APPLIED MATHEMATICS'),
('admin2', 'AD2MSC', 'AD2RY2', 'APPLIED PHYSICS'),
('admin3', 'AD3BSC', 'AD3RX1', 'APPLIED MATHEMATICS'),
('admin3', 'AD3BSC', 'AD3RX2', 'APPLIED PHYSICS'),
('admin3', 'AD3MSC', 'AD3RY1', 'APPLIED MATHEMATICS'),
('admin3', 'AD3MSC', 'AD3RY2', 'APPLIED PHYSICS'),
('admin4', 'AD4BSC', 'AD4RX1', 'APPLIED MATHEMATICS'),
('admin4', 'AD4BSC', 'AD4RX2', 'APPLIED PHYSICS'),
('admin4', 'AD4MSC', 'AD4RY1', 'APPLIED MATHEMATICS'),
('admin4', 'AD4MSC', 'AD4RY2', 'APPLIED PHYSICS'),
('admin5', 'AD5BSC', 'AD5RX1', 'APPLIED MATHEMATICS'),
('admin5', 'AD5BSC', 'AD5RX2', 'APPLIED PHYSICS'),
('admin5', 'AD5MSC', 'AD5RY1', 'APPLIED MATHEMATICS'),
('admin5', 'AD5MSC', 'AD5RY2', 'APPLIED PHYSICS'),
('admin6', 'AD6BSC', 'AD6RX1', 'APPLIED MATHEMATICS'),
('admin6', 'AD6BSC', 'AD6RX2', 'APPLIED PHYSICS'),
('admin6', 'AD6MSC', 'AD6RY1', 'APPLIED MATHEMATICS'),
('admin6', 'AD6MSC', 'AD6RY2', 'APPLIED PHYSICS'),
('admin7', 'AD7BSC', 'AD7RX1', 'APPLIED MATHEMATICS'),
('admin7', 'AD7BSC', 'AD7RX2', 'APPLIED PHYSICS'),
('admin7', 'AD7MSC', 'AD7RY1', 'APPLIED MATHEMATICS'),
('admin7', 'AD7MSC', 'AD7RY2', 'APPLIED PHYSICS');

-- --------------------------------------------------------

--
-- Table structure for table `eval_report`
--

CREATE TABLE `eval_report` (
  `Username` varchar(200) CHARACTER SET latin1 NOT NULL,
  `Year` varchar(200) CHARACTER SET latin1 NOT NULL,
  `partof` varchar(200) CHARACTER SET latin1 NOT NULL,
  `progname` varchar(400) CHARACTER SET latin1 NOT NULL,
  `teaching_sanctioned_UG` int(11) NOT NULL,
  `teaching_filled_UG` int(11) NOT NULL,
  `teaching_sanctioned_PG` int(11) NOT NULL,
  `teaching_filled_PG` int(11) NOT NULL,
  `research_projects_received` int(11) NOT NULL,
  `research_projects_totalgrants` int(11) NOT NULL,
  `nationalproj` varchar(500) CHARACTER SET latin1 NOT NULL,
  `interproj` varchar(500) CHARACTER SET latin1 NOT NULL,
  `dept_projects_funded` int(11) NOT NULL,
  `dept_projects_total_grants` int(11) NOT NULL,
  `special_research` int(11) NOT NULL,
  `papers_published` int(11) NOT NULL,
  `books_ISBN` int(11) NOT NULL,
  `citation_range` int(11) NOT NULL,
  `citation_avg` int(11) NOT NULL,
  `impact_range` int(11) NOT NULL,
  `impact_avg` int(11) NOT NULL,
  `hindex` int(11) NOT NULL,
  `patents` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `area_consultancy` varchar(500) CHARACTER SET latin1 NOT NULL,
  `awards_faculty` int(11) NOT NULL,
  `awards_phd` int(11) NOT NULL,
  `award_students` int(11) NOT NULL,
  `examinations_cleared` int(11) NOT NULL,
  `host` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `other` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `scholars` int(11) NOT NULL,
  `trash` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eval_report`
--

INSERT INTO `eval_report` (`Username`, `Year`, `partof`, `progname`, `teaching_sanctioned_UG`, `teaching_filled_UG`, `teaching_sanctioned_PG`, `teaching_filled_PG`, `research_projects_received`, `research_projects_totalgrants`, `nationalproj`, `interproj`, `dept_projects_funded`, `dept_projects_total_grants`, `special_research`, `papers_published`, `books_ISBN`, `citation_range`, `citation_avg`, `impact_range`, `impact_avg`, `hindex`, `patents`, `area_consultancy`, `awards_faculty`, `awards_phd`, `award_students`, `examinations_cleared`, `host`, `other`, `scholars`, `trash`) VALUES
('admin1', '11', 'Yes', '1111', 11111, 12222, 3333, 344455, 5555, 6666, '77778', '8888', 99, 91000, 1111, 12222, 21333, 3114144, 41551555, 156161, 17771, 18881, '9995152', '200002', 111112, 23222222, 2333, 324444, '25555', '526266', 662477, 'Save'),
('admin2', '12', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, '', '', 0, 'Save');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `Username` varchar(30) NOT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`Username`, `Prog_code`, `Prog_name`) VALUES
('ietdavv', 'BECS', 'Computer Engineering'),
('ietdavv', 'BEIT', 'Information Technology Engineering'),
('ietdavv', 'BETC', 'Electronics and Tele.'),
('ietdavv', 'BEEI', 'Electronics and Instr.'),
('ietdavv', 'BEMECH', 'Mechanical Engineering'),
('ietdavv', 'BECIVIL', 'Civil Engineering'),
('iipsdavv', 'ABCDE', 'SDNDKDFKDNDSKDF'),
('admin1', 'AD1BSC', 'BACHELOR OF SCIENCE'),
('admin1', 'AD1MSC', 'MASTER OF SCIENCE'),
('admin2', 'AD2BSC', 'BACHELOR OF SCIENCE'),
('admin2', 'AD2MSC', 'MASTER OF SCIENCE'),
('admin3', 'AD3BSC', 'BACHELOR OF SCIENCE'),
('admin3', 'AD3MSC', 'MASTER OF SCIENCE'),
('admin4', 'AD4BSC', 'BACHELOR OF SCIENCE'),
('admin4', 'AD4MSC', 'MASTER OF SCIENCE'),
('admin5', 'AD5BSC', 'BACHELOR OF SCIENCE'),
('admin5', 'AD5MSC', 'MASTER OF SCIENCE'),
('admin6', 'AD6BSC', 'BACHELOR OF SCIENCE'),
('admin6', 'AD6MSC', 'MASTER OF SCIENCE'),
('admin7', 'AD7BSC', 'BACHELOR OF SCIENCE'),
('admin7', 'AD7MSC', 'MASTER OF SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `superusers`
--

CREATE TABLE `superusers` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sno` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superusers`
--

INSERT INTO `superusers` (`username`, `password`, `name`, `sno`) VALUES
('iqac', '1qac', 'SUPERUSER', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t1_1_1`
--

CREATE TABLE `t1_1_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_1_1`
--

INSERT INTO `t1_1_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('ietdavv', 'evvd ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t1_1_2`
--

CREATE TABLE `t1_1_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Year` varchar(50) DEFAULT NULL,
  `Percent` float DEFAULT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_1_2`
--

INSERT INTO `t1_1_2` (`Username`, `Prog_code`, `Prog_name`, `Year`, `Percent`, `id_time`) VALUES
('ietdavv', 'BECIVIL', 'Civil Engineering', 'Feb 14 - June 14', 13, 'id1523193963361');

-- --------------------------------------------------------

--
-- Table structure for table `t1_1_3`
--

CREATE TABLE `t1_1_3` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Course_code` varchar(30) DEFAULT NULL,
  `Course_name` varchar(100) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Year` varchar(30) DEFAULT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_1_3`
--

INSERT INTO `t1_1_3` (`Username`, `Prog_code`, `Prog_name`, `Course_code`, `Course_name`, `Description`, `Year`, `id_time`) VALUES
('ietdavv', 'BECS', 'Computer Engineering', 'CER3C1', 'Applied Mathematics-III', 'sss', 'July 14 - June 15', 'id1523193997490');

-- --------------------------------------------------------

--
-- Table structure for table `t1_2_1`
--

CREATE TABLE `t1_2_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Course_code` varchar(30) DEFAULT NULL,
  `Course_name` varchar(100) DEFAULT NULL,
  `Year` varchar(30) DEFAULT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_2_1`
--

INSERT INTO `t1_2_1` (`Username`, `Prog_code`, `Prog_name`, `Course_code`, `Course_name`, `Year`, `id_time`) VALUES
('ietdavv', 'BECS', 'Computer Engineering', 'CER3C1', 'Applied Mathematics-III', 'July 17 - June 18', 'id1523194040327');

-- --------------------------------------------------------

--
-- Table structure for table `t1_2_2`
--

CREATE TABLE `t1_2_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Year` varchar(30) DEFAULT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_2_2`
--

INSERT INTO `t1_2_2` (`Username`, `Prog_code`, `Prog_name`, `Type`, `Year`, `id_time`) VALUES
('ietdavv', 'BECS', 'Computer Engineering', 'Elective', 'July 14 - June 15', 'id1523194058042');

-- --------------------------------------------------------

--
-- Table structure for table `t1_3_1`
--

CREATE TABLE `t1_3_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_3_1`
--

INSERT INTO `t1_3_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('ietdavv', 'fwsvrb ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t1_3_2`
--

CREATE TABLE `t1_3_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Course_code` varchar(30) DEFAULT NULL,
  `Course_name` varchar(100) DEFAULT NULL,
  `Year_offering` varchar(30) DEFAULT NULL,
  `Frequency_in_year` int(11) DEFAULT NULL,
  `Year_discontinuation` varchar(30) DEFAULT NULL,
  `Number_of_students_offered` int(11) DEFAULT NULL,
  `Number_of_students_completing` int(11) DEFAULT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_3_2`
--

INSERT INTO `t1_3_2` (`Username`, `Prog_code`, `Prog_name`, `Course_code`, `Course_name`, `Year_offering`, `Frequency_in_year`, `Year_discontinuation`, `Number_of_students_offered`, `Number_of_students_completing`, `id_time`) VALUES
('ietdavv', 'BECS', '', 'CER3C1', 'Applied Mathematics-III', 'July 14 - June 15', 2, 'Still Continuing', 21, 21, 'id1523194100203');

-- --------------------------------------------------------

--
-- Table structure for table `t1_3_4`
--

CREATE TABLE `t1_3_4` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Year` varchar(30) DEFAULT NULL,
  `Number_of_students_programme` int(11) DEFAULT NULL,
  `Number_of_students_internship` int(11) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_3_4`
--

INSERT INTO `t1_3_4` (`Username`, `Prog_code`, `Prog_name`, `Year`, `Number_of_students_programme`, `Number_of_students_internship`, `id_time`) VALUES
('ietdavv', 'BECIVIL', 'Civil Engineering', 'Feb 14 - June 14', 12, 423, 'id1523194290648');

-- --------------------------------------------------------

--
-- Table structure for table `t1_4_1`
--

CREATE TABLE `t1_4_1` (
  `Username` varchar(30) DEFAULT NULL,
  `opt` varchar(50) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `id_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_4_1`
--

INSERT INTO `t1_4_1` (`Username`, `opt`, `url`, `id_time`) VALUES
('ietdavv', '1', 'c', 'id1523194311996');

-- --------------------------------------------------------

--
-- Table structure for table `t1_4_2`
--

CREATE TABLE `t1_4_2` (
  `Username` varchar(30) DEFAULT NULL,
  `opt` varchar(50) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `id_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_4_2`
--

INSERT INTO `t1_4_2` (`Username`, `opt`, `url`, `id_time`) VALUES
('admin1', 'A', '2wcds', 'id1523635640557');

-- --------------------------------------------------------

--
-- Table structure for table `t2_1_1`
--

CREATE TABLE `t2_1_1` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL,
  `Prog_name` varchar(100) NOT NULL,
  `Total_Students` int(11) NOT NULL,
  `Other_state_student_number` int(11) NOT NULL,
  `Other_country_student_number` int(11) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2_1_1`
--

INSERT INTO `t2_1_1` (`Username`, `Year`, `Prog_code`, `Prog_name`, `Total_Students`, `Other_state_student_number`, `Other_country_student_number`, `id_time`) VALUES
('admin1', 'Feb 14 - June 14', 'AD1BSC', 'BACHELOR OF SCIENCE', 1, 2, 3, 'id1523635660388');

-- --------------------------------------------------------

--
-- Table structure for table `t2_1_2`
--

CREATE TABLE `t2_1_2` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL,
  `Prog_name` varchar(100) NOT NULL,
  `Seats` int(11) NOT NULL,
  `Applications_recieved` int(11) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2_1_2`
--

INSERT INTO `t2_1_2` (`Username`, `Year`, `Prog_code`, `Prog_name`, `Seats`, `Applications_recieved`, `id_time`) VALUES
('admin1', 'Feb 14 - June 14', 'AD1MSC', 'MASTER OF SCIENCE', 1, 2, 'id1523635687014');

-- --------------------------------------------------------

--
-- Table structure for table `t2_1_3`
--

CREATE TABLE `t2_1_3` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL,
  `Prog_name` varchar(100) NOT NULL,
  `SC_1` int(11) NOT NULL,
  `ST_1` int(11) NOT NULL,
  `OBC_1` int(11) NOT NULL,
  `GEN_1` int(11) NOT NULL,
  `OTH_1` int(11) NOT NULL,
  `SC_2` int(11) NOT NULL,
  `ST_2` int(11) NOT NULL,
  `OBC_2` int(11) NOT NULL,
  `GEN_2` int(11) NOT NULL,
  `OTH_2` int(11) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2_1_3`
--

INSERT INTO `t2_1_3` (`Username`, `Year`, `Prog_code`, `Prog_name`, `SC_1`, `ST_1`, `OBC_1`, `GEN_1`, `OTH_1`, `SC_2`, `ST_2`, `OBC_2`, `GEN_2`, `OTH_2`, `id_time`) VALUES
('admin1', 'July 14 - June 15', 'AD1BSC', 'BACHELOR OF SCIENCE', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'id1523635708689');

-- --------------------------------------------------------

--
-- Table structure for table `t2_2_1`
--

CREATE TABLE `t2_2_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2_2_1`
--

INSERT INTO `t2_2_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('ietdavv', 'qwert', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t2_2_2`
--

CREATE TABLE `t2_2_2` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL,
  `Prog_name` varchar(100) NOT NULL,
  `UG_students` int(11) NOT NULL,
  `PG_students` int(11) NOT NULL,
  `UG_only_teachers` int(11) NOT NULL,
  `PG_only_teachers` int(11) NOT NULL,
  `UG_PG_teachers` int(11) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2_2_2`
--

INSERT INTO `t2_2_2` (`Username`, `Year`, `Prog_code`, `Prog_name`, `UG_students`, `PG_students`, `UG_only_teachers`, `PG_only_teachers`, `UG_PG_teachers`, `id_time`) VALUES
('admin1', 'Feb 14 - June 14', 'AD1BSC', 'BACHELOR OF SCIENCE', 1, 2, 3, 4, 5, 'id1523635753788');

-- --------------------------------------------------------

--
-- Table structure for table `t2_2_3`
--

CREATE TABLE `t2_2_3` (
  `Username` varchar(30) NOT NULL,
  `Name_of_student` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `UDID_card_number` varchar(50) NOT NULL,
  `Disability_type` varchar(30) NOT NULL,
  `Disability_percent` double NOT NULL,
  `Prog_code` varchar(30) NOT NULL,
  `Prog_name` varchar(100) NOT NULL,
  `Year_enrolled` varchar(30) NOT NULL,
  `Year_passed` varchar(30) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_3_1`
--

CREATE TABLE `t2_3_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_3_2`
--

CREATE TABLE `t2_3_2` (
  `Username` varchar(30) NOT NULL,
  `Number_of_teachers_using_ICT` int(11) NOT NULL,
  `Teacher_number` int(11) NOT NULL,
  `ICT_tools` varchar(100) NOT NULL,
  `ICT_class_numbers` int(11) NOT NULL,
  `smart_classroom_number` int(11) NOT NULL,
  `Eresources_used` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_3_3`
--

CREATE TABLE `t2_3_3` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Student_number` int(11) NOT NULL,
  `Full_time_teacher` int(11) NOT NULL,
  `mentor_ratio` varchar(30) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_4_1`
--

CREATE TABLE `t2_4_1` (
  `Username` varchar(30) NOT NULL,
  `Teacher_name` varchar(50) NOT NULL,
  `Pan_no` varchar(30) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Number_of_sanctioned_post_ug` int(11) NOT NULL,
  `Number_of_sanctioned_post_pg` int(11) NOT NULL,
  `Year_of_appointment` varchar(30) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_4_2`
--

CREATE TABLE `t2_4_2` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `PHD_Teacher` int(11) NOT NULL,
  `Teacher` int(11) NOT NULL,
  `id_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_4_3`
--

CREATE TABLE `t2_4_3` (
  `Username` varchar(30) NOT NULL,
  `Teacher_name` varchar(50) NOT NULL,
  `Pan_no` varchar(30) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Name_of_Dept` varchar(100) NOT NULL,
  `Experience` varchar(30) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_4_4`
--

CREATE TABLE `t2_4_4` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Teacher_name` varchar(50) NOT NULL,
  `Pan_no` varchar(30) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Name_of_Dept` varchar(30) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_4_5`
--

CREATE TABLE `t2_4_5` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Teacher_name` varchar(50) NOT NULL,
  `State` varchar(30) NOT NULL,
  `sanctioned_post_number_ug` int(11) NOT NULL,
  `sanctioned_post_number_pg` int(11) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_5_1`
--

CREATE TABLE `t2_5_1` (
  `Username` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL,
  `Prog_name` varchar(50) NOT NULL,
  `Sem` varchar(30) NOT NULL,
  `Exam_end_date` varchar(30) NOT NULL,
  `Result_date` varchar(30) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_5_2`
--

CREATE TABLE `t2_5_2` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Complaint_no` int(11) NOT NULL,
  `Total_students` int(11) NOT NULL,
  `id_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_5_3`
--

CREATE TABLE `t2_5_3` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `No_of_application_recieved_for_reevaluation` int(11) NOT NULL,
  `Total_students` int(11) NOT NULL,
  `Marks_changed_cases` int(11) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_5_4`
--

CREATE TABLE `t2_5_4` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_5_5`
--

CREATE TABLE `t2_5_5` (
  `Username` varchar(30) NOT NULL,
  `v1` varchar(20) NOT NULL,
  `v2` varchar(20) NOT NULL,
  `v3` varchar(20) NOT NULL,
  `v4` varchar(20) NOT NULL,
  `v5` varchar(20) NOT NULL,
  `v0` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_6_1`
--

CREATE TABLE `t2_6_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_6_2`
--

CREATE TABLE `t2_6_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_6_3`
--

CREATE TABLE `t2_6_3` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Total_Students` int(11) DEFAULT NULL,
  `Passed_students` int(11) DEFAULT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_1`
--

CREATE TABLE `t3_1_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_1_1`
--

INSERT INTO `t3_1_1` (`Username`, `descr`, `id_time`) VALUES
('admin1', '', 'TA1_1_1');

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

--
-- Dumping data for table `t3_6_1`
--

INSERT INTO `t3_6_1` (`Username`, `descr`, `id_time`) VALUES
('admin1', '', 'TAaa1_1_1');

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

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_1`
--

CREATE TABLE `t4_1_1` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_2`
--

CREATE TABLE `t4_1_2` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_3`
--

CREATE TABLE `t4_1_3` (
  `Username` varchar(100) NOT NULL,
  `totalc` int(11) NOT NULL,
  `totals` int(11) NOT NULL,
  `lcd` int(50) NOT NULL,
  `lan` int(50) NOT NULL,
  `semi` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_4`
--

CREATE TABLE `t4_1_4` (
  `Username` varchar(100) NOT NULL,
  `budgeta` int(100) NOT NULL,
  `budgetu` int(100) NOT NULL,
  `yeara` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_2_1`
--

CREATE TABLE `t4_2_1` (
  `Username` varchar(100) NOT NULL,
  `nameil` varchar(100) NOT NULL,
  `nature` varchar(100) NOT NULL,
  `version` varchar(100) NOT NULL,
  `yearat` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_2_2`
--

CREATE TABLE `t4_2_2` (
  `Username` varchar(100) NOT NULL,
  `nameb` varchar(100) NOT NULL,
  `namep` varchar(100) NOT NULL,
  `nameau` varchar(100) NOT NULL,
  `numc` int(11) NOT NULL,
  `yearp` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_2_3`
--

CREATE TABLE `t4_2_3` (
  `Username` varchar(100) NOT NULL,
  `mem` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `eres` varchar(100) NOT NULL,
  `validityf` int(100) NOT NULL,
  `validityt` int(100) NOT NULL,
  `report` varchar(225) NOT NULL,
  `access` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL,
  `choice_423` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_2_4`
--

CREATE TABLE `t4_2_4` (
  `Username` varchar(100) NOT NULL,
  `books` varchar(100) NOT NULL,
  `journals` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `subscriptions` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_2_5`
--

CREATE TABLE `t4_2_5` (
  `Username` varchar(100) NOT NULL,
  `ereso` varchar(100) NOT NULL,
  `det` varchar(100) NOT NULL,
  `raccess` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_2_6`
--

CREATE TABLE `t4_2_6` (
  `Username` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `users` int(11) NOT NULL,
  `teachers` int(11) NOT NULL,
  `students` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_2_7`
--

CREATE TABLE `t4_2_7` (
  `Username` varchar(100) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `module` varchar(100) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `datel` varchar(100) NOT NULL,
  `choice_427` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_1`
--

CREATE TABLE `t4_3_1` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(1000) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_2`
--

CREATE TABLE `t4_3_2` (
  `Username` varchar(100) NOT NULL,
  `numbers` int(100) NOT NULL,
  `numberc` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_3`
--

CREATE TABLE `t4_3_3` (
  `Username` varchar(100) NOT NULL,
  `choice_433` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_4`
--

CREATE TABLE `t4_3_4` (
  `Username` varchar(100) NOT NULL,
  `namee` varchar(100) NOT NULL,
  `linkm` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_4_1`
--

CREATE TABLE `t4_4_1` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `ass_budget_academic` varchar(100) NOT NULL,
  `expenditure_academic` varchar(100) NOT NULL,
  `ass_budget_physical` varchar(100) NOT NULL,
  `expenditure_physical` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_4_2`
--

CREATE TABLE `t4_4_2` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_1`
--

CREATE TABLE `t5_1_1` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `name_of_scheme` varchar(200) NOT NULL,
  `number_of_students_benefited_govt_scheme` int(10) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_2`
--

CREATE TABLE `t5_1_2` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `name_of_scheme` varchar(1000) NOT NULL,
  `number_of_student_benefited` int(20) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_3`
--

CREATE TABLE `t5_1_3` (
  `Username` varchar(100) NOT NULL,
  `name_of_capability_enhancement_scheme` varchar(100) NOT NULL,
  `year_of_implementation` varchar(30) NOT NULL,
  `number_of_students_enrolled` int(11) NOT NULL,
  `name_of_agencies_involved` varchar(200) NOT NULL,
  `id_time` varchar(100) NOT NULL,
  `choice_513` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_4`
--

CREATE TABLE `t5_1_4` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `name_of_scheme` varchar(100) NOT NULL,
  `number_of_benefited_students_by_guidance_for_competitive_exam` int(10) NOT NULL,
  `number_of_benefited_students_by_career_counselling_activities` int(10) NOT NULL,
  `number_of_students_passed_in_competitive_exams` int(10) NOT NULL,
  `number_of_students_placed` int(10) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_5`
--

CREATE TABLE `t5_1_5` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `FIle_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_6`
--

CREATE TABLE `t5_1_6` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `number_of_grievances_appealed` int(30) NOT NULL,
  `number_of_grievances_redressed` int(30) NOT NULL,
  `number_of_days` int(30) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_2_1`
--

CREATE TABLE `t5_2_1` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `program_graduated_from` varchar(100) NOT NULL,
  `prog_name` varchar(1000) NOT NULL,
  `number_of_student_placed` int(10) NOT NULL,
  `name_of_employer_with_details` varchar(200) NOT NULL,
  `package_received` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_2_2`
--

CREATE TABLE `t5_2_2` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `number_students_enrolled_higher_education` int(10) NOT NULL,
  `program_graduated_from` varchar(100) NOT NULL,
  `dept_graduated_from` varchar(100) NOT NULL,
  `name_of_institution_joined` varchar(200) NOT NULL,
  `name_of_program_admitted_to` varchar(200) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_2_3`
--

CREATE TABLE `t5_2_3` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `rollnumber` varchar(10000) NOT NULL,
  `exam` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_3_1`
--

CREATE TABLE `t5_3_1` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `award_medal` varchar(100) NOT NULL,
  `national_international` varchar(20) NOT NULL,
  `sports_cultural` varchar(30) NOT NULL,
  `aadhar_student_id` varchar(1000) NOT NULL,
  `name_of_student` varchar(1000) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_3_2`
--

CREATE TABLE `t5_3_2` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_3_3`
--

CREATE TABLE `t5_3_3` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `name_of_activity` varchar(1000) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_4_1`
--

CREATE TABLE `t5_4_1` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_4_2`
--

CREATE TABLE `t5_4_2` (
  `Username` varchar(100) NOT NULL,
  `name_of_alums_alumni_association` varchar(1000) NOT NULL,
  `aadar_pan` varchar(1000) NOT NULL,
  `year_of_graduation` varchar(100) NOT NULL,
  `year_of_contribution` varchar(30) NOT NULL,
  `quantum_of_contribution` varchar(1000) NOT NULL,
  `id_time` varchar(100) NOT NULL,
  `choice_542` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_4_3`
--

CREATE TABLE `t5_4_3` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `date_fo_meetings` varchar(1000) NOT NULL,
  `numbers_of_members_attended` int(30) NOT NULL,
  `total_number_of_alumni_enrolled` int(30) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_1`
--

CREATE TABLE `t7_1_1` (
  `Username` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `titlep` varchar(100) NOT NULL,
  `datef` varchar(100) NOT NULL,
  `datet` varchar(100) NOT NULL,
  `numm` int(10) NOT NULL,
  `numf` int(10) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_2`
--

CREATE TABLE `t7_1_2` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_3`
--

CREATE TABLE `t7_1_3` (
  `Username` varchar(100) NOT NULL,
  `powerreq` varchar(100) NOT NULL,
  `powert` varchar(100) NOT NULL,
  `ren` varchar(100) NOT NULL,
  `reng` varchar(100) NOT NULL,
  `es` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_4`
--

CREATE TABLE `t7_1_4` (
  `Username` varchar(100) NOT NULL,
  `tl` varchar(100) NOT NULL,
  `led` decimal(10,0) NOT NULL,
  `ls` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_5`
--

CREATE TABLE `t7_1_5` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_6`
--

CREATE TABLE `t7_1_6` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_7`
--

CREATE TABLE `t7_1_7` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_8`
--

CREATE TABLE `t7_1_8` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `budget_green` varchar(100) NOT NULL,
  `expenditure_green` varchar(100) NOT NULL,
  `annual_expenditure` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_9`
--

CREATE TABLE `t7_1_9` (
  `Username` varchar(100) NOT NULL,
  `pf` varchar(100) NOT NULL,
  `lift` varchar(100) NOT NULL,
  `ramp` varchar(100) NOT NULL,
  `braille` varchar(100) NOT NULL,
  `rest` varchar(100) NOT NULL,
  `scribes` varchar(100) NOT NULL,
  `special` varchar(100) NOT NULL,
  `other` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL,
  `choice_719` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_10`
--

CREATE TABLE `t7_1_10` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `date_from` varchar(1000) NOT NULL,
  `date_to` varchar(1000) NOT NULL,
  `issue` varchar(1000) NOT NULL,
  `num_participants` int(10) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_11`
--

CREATE TABLE `t7_1_11` (
  `Username` varchar(1000) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `date_from` varchar(30) NOT NULL,
  `date_to` varchar(30) NOT NULL,
  `issue` varchar(1000) NOT NULL,
  `num_participants` int(10) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_12`
--

CREATE TABLE `t7_1_12` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_13`
--

CREATE TABLE `t7_1_13` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_14`
--

CREATE TABLE `t7_1_14` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `sno` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_from` varchar(30) NOT NULL,
  `date_to` varchar(30) NOT NULL,
  `participants` int(10) NOT NULL,
  `link` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_15`
--

CREATE TABLE `t7_1_15` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_16`
--

CREATE TABLE `t7_1_16` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(10) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_17`
--

CREATE TABLE `t7_1_17` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `name_of_activity` varchar(500) NOT NULL,
  `date_from` varchar(30) NOT NULL,
  `date_to` varchar(30) NOT NULL,
  `num_participants` int(10) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_18`
--

CREATE TABLE `t7_1_18` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_19`
--

CREATE TABLE `t7_1_19` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_2_1`
--

CREATE TABLE `t7_2_1` (
  `Username` varchar(100) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `objective` varchar(5000) NOT NULL,
  `context` varchar(5000) NOT NULL,
  `practice` varchar(5000) NOT NULL,
  `evidence` varchar(5000) NOT NULL,
  `problem` varchar(5000) NOT NULL,
  `notes` varchar(5000) NOT NULL,
  `id_time` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_3_1`
--

CREATE TABLE `t7_3_1` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(1000) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD KEY `Year` (`Year`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD UNIQUE KEY `Course_code` (`Course_code`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD UNIQUE KEY `Prog_code` (`Prog_code`);

--
-- Indexes for table `superusers`
--
ALTER TABLE `superusers`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `t2_2_3`
--
ALTER TABLE `t2_2_3`
  ADD UNIQUE KEY `id_time` (`id_time`);

--
-- Indexes for table `t2_6_3`
--
ALTER TABLE `t2_6_3`
  ADD PRIMARY KEY (`id_time`);

--
-- Indexes for table `t3_1_4`
--
ALTER TABLE `t3_1_4`
  ADD UNIQUE KEY `id_time` (`id_time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
