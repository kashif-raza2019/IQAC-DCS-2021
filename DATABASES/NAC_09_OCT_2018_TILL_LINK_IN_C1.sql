-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2018 at 08:00 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NAC`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `Year` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
('vcoffice', 'vcofficemis_01', 'VC Office', 1),
('Asc', 'Ascmis_02', 'Human Resource Development Centre', 2),
('Biochem', 'Biochemmis_03', 'School of Biochemistry', 3),
('Chemsc', 'Chemscmis_04', 'School of  Chemical Sciences', 4),
('Socmrce', 'Socmrcemis_05', 'School of Commerce', 5),
('Socsit', 'Socsitmis_06', 'School of Computer Science & IT', 6),
('Sodsf', 'Sodsfmis_07', 'School of Data Science & Forecasting', 7),
('Soecon', 'Soeconmis_08', 'School of Economics', 8),
('Soedu', 'Soedumis_09', 'School of Education', 9),
('Soex', 'Soexmis_10', 'School of Electronics', 10),
('Sees', 'Seesmis_11', 'School of Energy & Environmental Studies', 11),
('Soinstru', 'Soinstrumis_12', 'School of Instrumentation', 12),
('Sjmc', 'Sjmcmis_15', 'School of Journalism & Mass Comm.', 13),
('Solang', 'Solangmis_16', 'School of Languages', 16),
('Somath', 'Somathmis_17', 'School of Mathematics', 17),
('Sopharma', 'Sopharmamis_18', 'School of Pharmacy', 18),
('Sopedu', 'Sopedumis_19', 'School of Physical Education', 19),
('Sophy', 'Sophymis_20', 'School of Physics', 20),
('Sostat', 'Sostatmis_21', 'School of Statistics', 21),
('Soss', 'Sossmis_22', 'School of Social Science', 22),
('Ietdavv', 'Ietdavvmis_23', 'Institute of Engineering & Technology', 23),
('Imsdavv', 'Imsdavvmis_24', 'Institute of Management Studies', 24),
('Iipsdavv', 'Iipsdavvmis_25', 'International Institute of Professional Studies', 25),
('Compcent', 'Compcentmis_26', 'Computer Centre', 26),
('Solib', 'Solibmis_27', 'School of Library & Information Science', 27),
('Doll', 'Dollmis_29', 'Department of Life Long Learning', 29),
('Emrcdavv', 'Emrcdavvmis_30', 'Education Multimedia Research Centre', 30),
('Umcdavv', 'Umcdavvmis_31', 'University Minority Cell', 31),
('Ddedavv', 'Ddedavvmis_32', 'Directorate of Distance Education', 32),
('Soyoga', 'Soyogamis_33', 'School of yoga', 33),
('Sobiotech', 'Sobiotechmis_35', 'School of Biotechnology', 35),
('Ddukkdavv', 'Ddukkdavvmis_36', 'DDU- Kaushal Kendra', 36),
('Solaw', 'Solawmis_14', 'School of Law', 14),
('Sols', 'Solsmis_15', 'School of Life Sciences', 15),
('cwo', 'cwomis_39', 'Chief Warden Office', 39),
('mcc', 'mccmis_38', 'Model Career Center', 38),
('CNO', 'Cnomis_47', 'Central Office', 47),
('itc', 'itcmis_20', 'IT Center', 99),
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Username`, `Prog_code`, `Course_code`, `Course_name`) VALUES
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
('admin7', 'AD7MSC', 'AD7RY2', 'APPLIED PHYSICS'),
('ietdavv', 'ME4F', 'CER3W1', 'DISCRETE STRUCTURE');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `Username` varchar(30) NOT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`Username`, `Prog_code`, `Prog_name`) VALUES
('Socmrce', 'CM8X', 'M.Phil.'),
('Socmrce', 'CM5C', 'M.Com. (Bank Management)'),
('Socmrce', 'CM5B', 'M.Com (AFC)'),
('Socmrce', 'CM4A', 'B.Com(ATM)'),
('Socmrce', 'CM6A', 'MBA(FT) 5 Year'),
('Socmrce', 'CM5A', 'MBA(FT) 2 Year'),
('Chemsc', 'CH5C', 'Ph.D'),
('Chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry'),
('Chemsc', 'CH5A', 'M.Sc. Chemistry'),
('Sobiotech', 'BT9Z', 'M.Sc. Bioinformatics Ph.D'),
('Sobiotech', 'BT5C', 'M.Sc. Genetic Engineering'),
('Sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored\r\n)'),
('Sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)'),
('Biochem', 'BC9Z', 'Ph.D'),
('Biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs'),
('Socmrce', 'CM9Z', 'Ph.D'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs'),
('Socsit', 'CS5C', 'Master of Science (Information Technology) 2yrs'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs'),
('Socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr'),
('Socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs'),
('Socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs'),
('Socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security) 2yrs'),
('Socsit', 'CS9Z', 'Doctorate in Philosophy - Ph.D (Computer Science)'),
('Sodsf', 'DS7A', 'M.Tech. (Data Science)'),
('Sodsf', 'DS7B', 'M.Tech. (Big Data Analytics)'),
('Sodsf', 'DS5A', 'M.B.A. (Business Analytics)'),
('Sodsf', 'DS5B', 'M.Sc. (Data Science & Analytics)'),
('Sodsf', 'DS9Z', 'Ph.D.'),
('Soecon', 'EC5A', 'M.A. (Economics)'),
('Soecon', 'EC5B', 'M.B.A. (BE)'),
('Soecon', 'EC5C', 'M.B.A. (FS)'),
('Soecon', 'EC5D', 'M.B.A. (IB)'),
('Soecon', 'EC8X', 'M.Phil.'),
('Soecon', 'EC9Z', 'Ph.D.'),
('Soedu', 'ED4A', 'B.Ed.'),
('Soedu', 'ED5A', 'M.Ed.'),
('Soedu', 'ED8X', 'M.Phil.'),
('Soedu', 'ED9Z', 'Ph.D.'),
('Soex', 'EL7A', 'M.Tech Embedded Systems'),
('Soex', 'EL7B', 'M.Tech Spatial Information Technology'),
('Soex', 'EL7C', 'M.Tech Mobile Computing Technology'),
('Soex', 'EL5A', 'M.Sc Electronics'),
('Soex', 'EL5B', 'M.Sc Electronics & Communication'),
('Soex', 'EL9Z', 'Ph.D.'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment) Regular'),
('Sees', 'EN5A', 'M.B.A (Energy Management) Distance'),
('Sees', 'EN8X', 'M.Phil.'),
('Sees', 'EN9Z', 'Ph.D.'),
('Soinstru', 'IN7A', 'M.Tech.  (Instrumentation)'),
('Soinstru', 'IN7B', 'M.Tech. (IOT)'),
('Soinstru', 'IN5A', 'M.Sc. Instrumentation'),
('Soinstru', 'IN9Z', 'Ph.D.'),
('Sjmc', 'MC4A', 'BA (Journalism)'),
('Sjmc', 'MC5A', 'MA'),
('Sjmc', 'MC4B', 'BJ'),
('Sjmc', 'MC8X', 'M.Phil.'),
('Sjmc', 'MC9Z', 'Ph.D.'),
('Solaw', 'LL4A', 'B.A.LL.B.(Hons)'),
('Solaw', 'LL5A', 'LL.M.'),
('Solaw', 'LL8X', 'M.Phil.'),
('Solaw', 'LL9Z', 'Ph.D.'),
('Sols', 'LS5A', 'M.Sc. Life Sciences'),
('Sols', 'LS5B', 'M.Sc. Industrial Microbiology'),
('Sols', 'LS8X', 'M.Phil.'),
('Sols', 'LS9Z', 'Ph.D.'),
('Solang', 'LN1A', 'Certificate in French'),
('Solang', 'LN1B', 'Certificate in German'),
('Solang', 'LN1C', 'Certificate in Translation and Literature'),
('Solang', 'LN1D', 'Certificate in Performing Arts'),
('Solang', 'LN2A', 'Diploma in Performing Arts'),
('Solang', 'LN2B', 'Diploma in Dramatics'),
('Solang', 'LN3A', 'P.G. Diploma Advanced Translation and Functional Hindi'),
('Solang', 'LN4A', 'B.A. (Performing Arts)'),
('Solang', 'LN5A', 'M.A. Functional Hindi, Translation and Literature'),
('Solang', 'LN5B', 'M.A. Sanskrit Literature'),
('Solang', 'LN5C', 'M.A. Sanskrit Jyotish'),
('Solang', 'LN5D', 'M.A. English Literature'),
('Solang', 'LN5E', 'M.A. Urdu Literature'),
('Solang', 'LN5F', 'M.A. Performing Arts'),
('Solang', 'LN8E', 'M.Phil. English'),
('Solang', 'LN8H', 'M.Phil. Hindi'),
('Solang', 'LN8S', 'M.Phil. Sanskrit'),
('Solang', 'LN8U', 'M.Phil. Urdu'),
('Solang', 'LN9H', 'Ph.D. (Hindi)'),
('Solang', 'LN9E', 'Ph.D.(English)'),
('Solang', 'LN9S', 'Ph.D. (Sanskrit)'),
('Solang', 'LN9U', 'Ph.D. (Urdu)'),
('Solang', 'LN9Z', 'Ph.D. Philosophy'),
('Somath', 'MT5A', 'M.Sc.(Mathematics)'),
('Somath', 'MT8X', 'M.Phil.'),
('Somath', 'MT9Z', 'Ph.D.'),
('Sopharma', 'PY4A', 'B.Pharm.'),
('Sopharma', 'PY7A', 'M.Pharm.'),
('Sopharma', 'PY9Z', 'Ph.D.'),
('Sopedu', 'PE4A', 'B.P.E.S.'),
('Sopedu', 'PE5A', 'M.P.Ed.'),
('Sopedu', 'PE8X', 'M.Phil.'),
('Sopedu', 'PE9Z', 'Ph.D.'),
('Sophy', 'PH5A', 'M.Sc.(Physics)'),
('Sophy', 'PH5B', 'M.Sc. (Material Science)'),
('Sophy', 'PH7A', 'M.Tech. Laser Science & Applications'),
('Sophy', 'PH8X', 'M.Phil.'),
('Sophy', 'PH9Z', 'Ph.D.'),
('Sostat', 'ST5A', 'M.Sc. Statistics'),
('Sostat', 'ST8X', 'M.Phil.'),
('Sostat', 'ST9Z', 'Ph.D.'),
('Soss', 'SS1A', 'Certificate in Labour Law and Personnel Management'),
('Soss', 'SS1B', 'Certificate in Consumer Psychology and Advertising'),
('Soss', 'SS1C', 'Certificate in Guidance and Counselling'),
('Soss', 'SS1D', 'Certificate in Human Rights'),
('Soss', 'SS2A', 'Diploma in Consumer Psychology and Advertising'),
('Soss', 'SS3A', 'P.G. Diploma in Guidance and Counselling'),
('Soss', 'SS3B', 'P.G. Diploma in Human Rights'),
('Soss', 'SS3C', 'G Diploma in Labour Law and Personnel Management'),
('Soss', 'SS4A', 'Bachelor of Social Work (B.S.W.)'),
('Soss', 'SS5A', 'Master of Social Work (M.S.W.)'),
('Soss', 'SS5B', 'M.A. Sociology'),
('Soss', 'SS5C', 'M.A. Political Science'),
('Soss', 'SS5D', 'M.A. Clinical Psychology'),
('Soss', 'SS5E', 'M.B.A. Rural Development'),
('Soss', 'SS5F', 'M.B.A. Public administration and Policy'),
('Soss', 'SS8A', 'M.Phil. Geography'),
('Soss', 'SS8B', 'M.Phil. History'),
('Soss', 'SS8C', 'M.Phil. Home Science'),
('Soss', 'SS8D', 'M.Phil. Political Science'),
('Soss', 'SS8E', 'M.Phil. Psychology'),
('Soss', 'SS8f', 'M.Phil. Social Work'),
('Soss', 'SS8G', 'M.Phil. Sociology'),
('Soss', 'SS9A', 'Ph.D. Geography'),
('Soss', 'SS9B', 'Ph.D. History'),
('Soss', 'SS9C', 'Ph.D.. Home Science'),
('Soss', 'SS9D', 'Ph.D. Political Science'),
('Soss', 'SS9E', 'Ph.D. Psychology'),
('Soss', 'SS9F', 'Ph.D. Social Work'),
('Soss', 'SS9G', 'Ph.D. Sociology'),
('Solib', 'LI4A', 'BLISC'),
('Solib', 'LI5A', 'MLISC'),
('Soyoga', 'YG5A', 'M A (Yoga)'),
('Soyoga', 'YG3A', 'P.G. Diploma in Yoga Therapy'),
('Doll', 'LE2A', 'Diploma in Interior Designing'),
('Doll', 'LE3A', 'PG Diploma in Population Education and Demography'),
('Doll', 'LE4A', 'B. Voc. Interior Design'),
('Doll', 'LE4B', 'B.Voc. Fashion Technology'),
('Doll', 'LE5A', 'M.A. Women Empowerment and Lifelong Learning'),
('Ddukkdavv', 'DD4A', 'B.Voc (Nutrition & Dietetics)'),
('Ddukkdavv', 'DD4B', 'B.Voc (Landscape Design)'),
('Ddukkdavv', 'DD4C', 'B.Voc (Handicraft)'),
('Ddukkdavv', 'DD2A', 'Diploma in Logistics & Supply (Cargo Management)'),
('Emrcdavv', 'EM5A', 'M.B.A. Media Management'),
('Emrcdavv', 'EM6A', 'M.Sc. EM'),
('Emrcdavv', 'EM9Z', 'Ph.D.'),
('Ddedavv', 'DE5A', 'MBA(DDE)'),
('Ietdavv', 'ME4F', 'B.E. (Mechanical Engineering) – Full Time'),
('Ietdavv', 'ME4P', 'B.E. (Mechanical Engineering) – Part Time'),
('Ietdavv', 'ME7A', 'ME (Industrial Engineering & Management) - Full Time'),
('Ietdavv', 'ME7B', 'ME (Industrial Engineering & Management) - Part Time'),
('Ietdavv', 'ME7C', 'ME (Mechanical Engineering with specialization in Design & Thermal Engineering) – Full Time'),
('Ietdavv', 'ME7D', 'ME (Mechanical Engineering with specialization in Design & Thermal Engineering) – Part Time'),
('Ietdavv', 'ME9Z', 'Ph D'),
('Ietdavv', 'CE4F', 'B.E. (Computer Engineering) – Full Time'),
('Ietdavv', 'CE4P', 'B.E. (Computer Engineering) – Part Time'),
('Ietdavv', 'CE7A', 'ME (Computer Engineering with specialization in Software Engineering) – Full Time'),
('Ietdavv', 'CE7B', 'ME (Computer Engineering with specialization in Software Engineering) – Part Time'),
('Ietdavv', 'CE9Z', 'Ph D'),
('Ietdavv', 'IT4F', 'B.E. (Information Technology)  - Full Time'),
('Ietdavv', 'IT4P', 'B.E. (Information Technology)  - Part Time'),
('Ietdavv', 'IT7A', 'ME (Information Technology with specialization in Information Security) – Full Time'),
('Ietdavv', 'IT7B', 'ME (Information Technology with specialization in Information Security) – Part Time'),
('Ietdavv', 'IT9Z', 'Ph D'),
('Ietdavv', 'CV4F', 'B.E. (Civil Engineering) – Full Time'),
('Ietdavv', 'ET4F', 'B.E. (Electronics & Telecommunication Engineering) – Full Time'),
('Ietdavv', 'ET4P', 'B.E. (Electronics & Telecommunication Engineering) – Part Time'),
('Ietdavv', 'ET7A', 'ME (Electronics engineering with specialization in Digital Communication) – Full Time'),
('Ietdavv', 'ET7B', 'ME (Electronics engineering with specialization in Digital Communication) – Part Time'),
('Ietdavv', 'ET9Z', 'Ph D'),
('Ietdavv', 'EI4F', 'B.E. (Electronics & Instrumentation Engineering)'),
('Ietdavv', 'EI4P', 'B.E. (Electronics & Instrumentation Engineering) – Part Time'),
('Ietdavv', 'EI7A', 'ME (Electronics engineering with specialization in Digital Instrumentation) – Full Time'),
('Ietdavv', 'EI7B', 'ME (Electronics engineering with specialization in Digital Instrumentation) – Part Time'),
('Ietdavv', 'EI9Z', 'Ph D'),
('Ietdavv', 'AS5A', 'MSc (Applied Mathematics with specialization in Computing & Informatics)'),
('Ietdavv', 'AS9A', 'Ph D Applied Chemistry'),
('Ietdavv', 'AS9B', 'Ph.D. Applied Mathematics'),
('Ietdavv', 'AS9C', 'Ph.D. Applied Physics'),
('Imsdavv', 'MS9Z', 'Ph.D.'),
('Imsdavv', 'MS5A', 'MBA(FT)'),
('Imsdavv', 'MS5B', 'MBA(DM)'),
('Imsdavv', 'MS5C', 'MBA(FA) '),
('Imsdavv', 'MS5D', 'MBA(MM)'),
('Imsdavv', 'MS5E', 'MBA(HR)'),
('Imsdavv', 'MS5F', 'MBA(ECOMM)2YR'),
('Imsdavv', 'MS6A', 'MBA(ECOMM)5YR'),
('Imsdavv', 'MS5G', 'MBA(HA) 2YR'),
('Imsdavv', 'MS6B', 'MBA(HA) 5YR'),
('Imsdavv', 'MS8X', 'M.Phil.'),
('Iipsdavv', 'PS4A', 'BCom(Hons)'),
('Iipsdavv', 'PS5A', 'MBA (MS) 2yrs'),
('Iipsdavv', 'PS5B', 'MBA (APR)'),
('Iipsdavv', 'PS5C', 'MBA (Tour)'),
('Iipsdavv', 'PS5D', 'MBA(Ent.)'),
('Iipsdavv', 'PS6A', 'MCA(6yr)'),
('Iipsdavv', 'PS6B', 'M.Tech. (IT)'),
('Iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs'),
('Iipsdavv', 'PS6D', 'MBA (Tourism)-5 Yrs'),
('Iipsdavv', 'PS9A', 'Ph.D. Management'),
('Iipsdavv', 'PS9B', 'Ph.D. Computer & IT'),
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t1_3_1`
--

CREATE TABLE `t1_3_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t1_4_1`
--

CREATE TABLE `t1_4_1` (
  `Username` varchar(30) DEFAULT NULL,
  `opt` varchar(50) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `id_time` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t1_4_2`
--

CREATE TABLE `t1_4_2` (
  `Username` varchar(30) DEFAULT NULL,
  `opt` varchar(50) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `id_time` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_2_1`
--

CREATE TABLE `t2_2_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_3_1`
--

CREATE TABLE `t2_3_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_5_4`
--

CREATE TABLE `t2_5_4` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_6_1`
--

CREATE TABLE `t2_6_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_6_2`
--

CREATE TABLE `t2_6_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_7_1`
--

CREATE TABLE `t2_7_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Student_Name` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `State_of_Domicile` varchar(30) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Enrollment_ID` varchar(30) DEFAULT NULL,
  `Mobile_No` varchar(20) DEFAULT NULL,
  `Year` varchar(30) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_1`
--

CREATE TABLE `t3_1_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_1`
--

CREATE TABLE `t3_3_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_5_1`
--

CREATE TABLE `t3_5_1` (
  `Username` varchar(200) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_1`
--

CREATE TABLE `t3_6_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_1_2`
--

CREATE TABLE `t6_1_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_1`
--

CREATE TABLE `t6_2_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_2`
--

CREATE TABLE `t6_2_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_4`
--

CREATE TABLE `t6_2_4` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_1`
--

CREATE TABLE `t6_3_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_5`
--

CREATE TABLE `t6_3_5` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_4_1`
--

CREATE TABLE `t6_4_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_4_3`
--

CREATE TABLE `t6_4_3` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_1`
--

CREATE TABLE `t6_5_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_2`
--

CREATE TABLE `t6_5_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_5`
--

CREATE TABLE `t6_5_5` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Indexes for table `t2_7_1`
--
ALTER TABLE `t2_7_1`
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
