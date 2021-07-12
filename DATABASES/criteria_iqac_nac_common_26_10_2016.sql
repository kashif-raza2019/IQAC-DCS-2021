-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2018 at 03:12 PM
-- Server version: 5.5.61-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `criteria_iqac_nac_common`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE IF NOT EXISTS `academic_year` (
  `Year` varchar(30) NOT NULL,
  KEY `Year` (`Year`)
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

CREATE TABLE IF NOT EXISTS `academic_year2` (
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

CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sno` int(2) NOT NULL,
  PRIMARY KEY (`username`)
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

CREATE TABLE IF NOT EXISTS `course` (
  `Username` varchar(30) NOT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Course_code` varchar(30) DEFAULT NULL,
  `Course_name` varchar(100) DEFAULT NULL,
  UNIQUE KEY `Course_code` (`Course_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Username`, `Prog_code`, `Course_code`, `Course_name`) VALUES
('sopedu', 'PE4A', 'T-02', 'Principles of Physical Education'),
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
('sopedu', 'PE5A', 'MPEd 102', 'Physiology of Exercise'),
('sopedu', 'PE8X', 'PE8X', 'M.PHIL'),
('sopedu', 'PE9Z', 'Ph.D. T-02', 'Review of Published Research in the relevant field '),
('sobiotech', 'BT5A', 'BT5A', 'M.Sc Biotechnology'),
('asc', '', 'Course 1', 'Orientation Course'),
('asc', '', 'Course 2', 'Refresher Course'),
('asc', '', 'Course 3 ', 'Summer/Winter'),
('asc', '', 'Course 4', 'Short Term Course'),
('asc', '', 'Course 5', 'Interaction Programme'),
('soex', 'EL7A', 'EL71104A', 'Digital Signal Processing'),
('soex', 'EL7C', 'EL71109C', 'Wireless Networks           '),
('soex', 'EL7C', 'EL71105C', 'Embedded Microcontroller '),
('soex', 'EL7C', 'EL71102C', 'Linux Scripting and Networking'),
('soex', 'EL7A', 'EL71105A ', 'Embedded Microcontroller '),
('soex', 'EL7A', 'EL71106A ', 'Advanced Logic Design '),
('soex', 'EL7A', 'EL71102A', ' Linux Scripting and Networking'),
('soex', 'EL7A', 'EL71103A ', 'System Programming '),
('soex', 'EL7A', 'EL71202A', ' Linux Lab    '),
('soex', 'EL7A', 'EL71203A', ' System Programming Lab	'),
('soex', 'EL7A', 'EL71204A ', 'Digital Signal Processing Lab         '),
('soex', 'EL7A', 'EL71205A', ' Embedded Microcontroller Lab'),
('soex', 'EL7A', 'EL71206A ', 'Advanced Logic Design Lab'),
('soex', 'EL7C', 'EL71103C', 'System Programming '),
('soex', 'EL7C', 'EL71104C ', 'Digital Signal Processing'),
('soex', 'EL7C', 'EL71202C    ', 'Linux Lab '),
('soex', 'EL7C', 'EL71203C', ' System Programming Lab'),
('soex', 'EL7C', 'EL71204C ', 'Digital Signal Processing Lab         '),
('soex', 'EL7C', 'EL71205C ', 'Embedded Microcontroller Lab'),
('soex', 'EL7B', 'EL71104B', 'Digital Signal Processing'),
('imsdavv', 'MS5A', 'FT 101C', 'FUNDAMENTALS OF MANAGEMENT'),
('imsdavv', 'MS5A', 'FT 102C', 'QUANTITATIVE METHODS'),
('imsdavv', 'MS5A', 'FT 103 C', 'BUSINESS ACCOUNTING'),
('imsdavv', 'MS5A', 'FT 104 C', 'BUSINESS ETHICS AND MANAGEMENT BY INDIAN VALUES'),
('imsdavv', 'MS5A', 'FT 105 C', 'Marketing Management - I'),
('imsdavv', 'MS5A', 'FT 106 C', 'Organisational Behaviour'),
('imsdavv', 'MS5A', 'FT 107 C', 'Business Communication'),
('imsdavv', 'MS5A', 'FT 108 C', 'Managerial Economics'),
('imsdavv', 'MS5A', 'FT 301 C', 'Entrepreneurship and New Ventures'),
('imsdavv', 'MS5A', 'FT 302 C', 'Project Management'),
('imsdavv', 'MS5A', 'FT 304 M', 'Product and Brand Management'),
('imsdavv', 'MS5A', 'FT 305 M ', 'Consumer Behaviour'),
('imsdavv', 'MS5A', 'FT 306 M', 'Sales and Distribution Management'),
('imsdavv', 'MS5A', 'FT 307 M', 'B 2 B Marketing'),
('imsdavv', 'MS5A', 'FT 309 M', 'Supply Chain Management'),
('imsdavv', 'MS5A', 'FT 311 M', 'Retail Marketing'),
('imsdavv', 'MS5A', 'FT 312 F', 'Financial Risk and Derivatives'),
('imsdavv', 'MS5A', 'FT 313 F', 'Insurance and Bank Management'),
('imsdavv', 'MS5A', 'FT 314 F', 'Financial Market Products & Services'),
('imsdavv', 'MS5A', 'FT 315 F', 'Investment Analysis and Portfolio Management'),
('imsdavv', 'MS5A', 'FT 317 F ', 'Merger Acquisition and Corporate Restructuring'),
('imsdavv', 'MS5A', 'FT 316 F', 'Financial Statement Analysis and Valuation'),
('imsdavv', 'MS5C', 'FA 101 C ', 'Fundamentals of Management'),
('imsdavv', 'MS5C', 'FA 102 C ', 'Quantitative Methods'),
('imsdavv', 'MS5C', 'FA 103 C', 'Financial Accounting and Reporting'),
('imsdavv', 'MS5C', 'FA 104 C', 'IT for Business Applications'),
('imsdavv', 'MS5C', 'FA 105 C ', 'Business Communication'),
('imsdavv', 'MS5C', 'FA 106 C', 'Business Ethics and Management by Indian Values'),
('imsdavv', 'MS5C', 'FA 107 C ', 'Indian Financial System'),
('imsdavv', 'MS5C', 'FA 108 C ', 'Micro Economics'),
('imsdavv', 'MS5C', 'FA 301 C ', 'Financial Risk and Derivatives '),
('imsdavv', 'MS5C', 'FA 302 C ', 'Direct Taxation'),
('imsdavv', 'MS5C', 'FA 303 C ', 'Insurance and Bank Management'),
('imsdavv', 'MS5C', 'FA 304 C ', 'Investement Analysis and Portfolio Management'),
('imsdavv', 'MS5C', 'FA 305 E', 'Financial Statement Analysis and Valuation'),
('imsdavv', 'MS5C', 'FA 306 E', 'Project Management'),
('imsdavv', 'MS5C', 'FA 307 E ', 'Merger Acquisition and Corporate Restructuring'),
('imsdavv', 'MS5C', 'FA 308 E ', 'Financial Institutions and Market Regulation'),
('imsdavv', 'MS5F', 'MB - 301', 'J2EE Programming'),
('imsdavv', 'MS5F', 'MB - 302', 'Common Architecture in  JAVA'),
('imsdavv', 'MS5F', 'MB - 305', 'Digital Marketing'),
('imsdavv', 'MS5F', 'MB - 306', 'Software engineering and Project Management'),
('imsdavv', 'MS5F', 'MB - 307 ', 'Search Engine Optimization'),
('imsdavv', 'MS5F', 'MB - 308', 'e-Commerce Application Development using PHP'),
('imsdavv', 'MS5F', 'MB - 309 ', 'Data Analytics'),
('imsdavv', 'MS5F', 'MB - 310', ' Human Resource management'),
('imsdavv', 'MS5D', 'MM 101 C', 'Fundamental Of Management'),
('imsdavv', 'MS5D', 'MM 108 C ', 'Business Communication'),
('imsdavv', 'MS5D', 'MM 104 C ', 'Business Accounting'),
('imsdavv', 'MS5D', 'MM 105 C ', 'Marketing Management'),
('imsdavv', 'MS5D', 'MM 102 C ', 'Quantitative Methods'),
('imsdavv', 'MS5D', 'MM 103 C ', 'Organisational Behaviour'),
('imsdavv', 'MS5D', 'MM 106 C ', 'Business Ethics'),
('imsdavv', 'MS5D', 'MM 107 C ', 'IT for Business Application'),
('imsdavv', 'MS5D', 'MM 305 E ', 'Brand Management'),
('imsdavv', 'MS5D', 'MM 310 E ', 'Social Marketing'),
('imsdavv', 'MS5D', 'MM 307 E', 'Customer Relationship Management'),
('imsdavv', 'MS5D', 'MM 306 E', 'Public Relationship and Corporate Communication'),
('imsdavv', 'MS5D', 'MM 301 C ', 'Data Analytics'),
('imsdavv', 'MS5D', 'MM 303 C ', 'Retailing'),
('imsdavv', 'MS5D', 'MM 302 C ', 'B2B Marketing'),
('imsdavv', 'MS5D', 'MM 304 C ', 'Product Management'),
('imsdavv', 'MS5E', 'HR 101 C ', 'Fundamental Of Management'),
('imsdavv', 'MS5E', 'HR 107 C ', 'Organisational Behaviour'),
('imsdavv', 'MS5E', 'HR 105 C ', 'Business Communication'),
('imsdavv', 'MS5E', 'HR 102 C', 'Quantitative Methods'),
('imsdavv', 'MS5E', 'HR 106 C ', 'Business Ethics'),
('imsdavv', 'MS5E', 'HR 104 C ', 'IT for Business Application'),
('imsdavv', 'MS5E', 'HR 108 C ', 'H.R.M.'),
('imsdavv', 'MS5E', 'HR  103 C ', 'Business Accounting'),
('imsdavv', 'MS5E', 'HR 306 E ', 'Training and Development'),
('imsdavv', 'MS5E', 'HR 304 C ', 'Human Resource Information System'),
('imsdavv', 'MS5E', 'HR 309 E', 'Operations Management'),
('imsdavv', 'MS5E', 'HR 301 C ', 'Social and Industrial Psychology'),
('imsdavv', 'MS5E', 'HR 302 C', 'Labour Law-II'),
('imsdavv', 'MS5E', 'HR 310 E', 'Corporate Governance'),
('imsdavv', 'MS5E', 'HR 307 E', 'Managerial Counseling'),
('imsdavv', 'MS5E', 'HR 303 C', 'Manpower Planning,  Recruitment & Selection'),
('imsdavv', 'MS6A', 'ME 708 C ', 'Search Engine Optimiz.'),
('imsdavv', 'MS6A', 'ME 701 C ', 'Introduction to UNIX & LUNIX'),
('imsdavv', 'MS6A', 'ME 707 C', 'Entrepreneurship'),
('imsdavv', 'MS6A', 'ME 706 C ', 'Professional Communication & Negotiation'),
('imsdavv', 'MS6A', 'ME 705 C', 'Advance in e-Commerce'),
('imsdavv', 'MS6A', 'ME 704 C', 'Internet Scripting Lang.'),
('imsdavv', 'MS6A', 'ME 703 C ', 'OOAD Using UML'),
('imsdavv', 'MS6A', 'ME 702 C ', 'Internet & Networks Security'),
('imsdavv', 'MS6A', 'ME 904 E ', 'Mobile Application Development'),
('imsdavv', 'MS6A', 'ME 903 E ', 'Database Framework using hibernate'),
('imsdavv', 'MS6A', 'ME 901 E', 'Data Analytics'),
('imsdavv', 'MS6A', 'ME 910 C', 'Strategic Management'),
('imsdavv', 'MS6A', 'ME 909 C ', 'Cyber Law & Business Regulatory frame work'),
('imsdavv', 'MS6A', 'ME 907 C', 'Digital Marketing'),
('imsdavv', 'MS6A', 'ME 902 E', 'Supply Chain Management'),
('imsdavv', 'MS6A', 'ME 908 C', 'e-Commerce Application'),
('imsdavv', 'MS6B', 'MH-701  In.', 'Advanced hospital planning'),
('imsdavv', 'MS6B', 'MH-702  In.', 'MIS in Healthcare'),
('imsdavv', 'MS6B', 'MH- 703 In.', 'Operations Research in Healthcare'),
('imsdavv', 'MS6B', 'MH-704 In.', 'Prof. Communication and Negotiation Skills'),
('imsdavv', 'MS6B', 'MH-705  In', 'IR and Labour laws'),
('imsdavv', 'MS6B', 'MH-706  In.', 'Taxation in Healthcare'),
('imsdavv', 'MS6B', 'MH-707  In.', 'Hospital Operations –clinical services'),
('imsdavv', 'MS6B', 'MH-708  In.', 'Entrepreneurship'),
('imsdavv', 'MS6B', 'MH-901  In.', 'Strategic Management for Healthcare'),
('imsdavv', 'MS6B', 'MH-902  In', 'Hospital Operations – Supportive Services'),
('imsdavv', 'MS6B', 'MH-903  In.', 'Compensation and Reward Management'),
('imsdavv', 'MS6B', 'MH-904  In.', 'Regulations for Hospitals'),
('imsdavv', 'MS6B', 'MH-906  In.', 'Contemporary issues in Healthcare'),
('imsdavv', 'MS6B', 'MH-907  In.', 'Business Process Re Engineering'),
('imsdavv', 'MS6B', 'MH- 908  In.', 'Logistics and Supply Chain Management'),
('imsdavv', 'MS6B', 'MH-909  In.', 'Social and Industrial Psychology'),
('imsdavv', 'MS5G', 'MH- 101 2Y', 'Fundamentals of Management'),
('imsdavv', 'MS5G', 'MH- 102 2Y', 'Organization Behaviour'),
('imsdavv', 'MS5G', 'MH- 103 2Y', 'Business Accounting'),
('imsdavv', 'MS5G', 'MH- 104 2Y', 'Business Communication'),
('imsdavv', 'MS5G', 'MH- 105 2Y', 'IT for Business Application'),
('imsdavv', 'MS5G', 'MH- 106 2Y', 'Quantitative Methods'),
('imsdavv', 'MS5G', 'MH-107 2Y', 'Hospital Administration'),
('imsdavv', 'MS5G', 'MH-108  2Y', 'Business Ethics & management By Indian Values'),
('imsdavv', 'MS5G', 'MH- 302 2Y', 'Project Management in Healthcare'),
('imsdavv', 'MS5G', 'MH- 303 2Y', 'Legislation for Health and Hospitals'),
('imsdavv', 'MS5G', 'MH-301  2Y', 'Operations Management in Healthcare'),
('imsdavv', 'MS5G', 'MH-304  2Y', 'Health Administration'),
('imsdavv', 'MS5G', 'MH- 312 2Y', 'Integrated Marketing Communication'),
('imsdavv', 'MS5G', 'MH- 310 2Y', 'Business Process Re-Engineering'),
('imsdavv', 'MS5G', 'MH-311  2Y', 'Marketing of Hospital Services'),
('imsdavv', 'MS5G', 'MH-309 2Y', 'Quality Accreditation of Healthcare Organization'),
('imsdavv', 'MS5B', 'DM 301 C', 'Managerial Economics'),
('imsdavv', 'MS5B', 'DM 302 E', 'Project Management'),
('imsdavv', 'MS5B', 'DM 303 C', 'Healthcare Services in Disaster Management'),
('imsdavv', 'MS5B', 'DM 304 C', 'Risk Disaster & Vulnerability hazard assessment '),
('imsdavv', 'MS5B', 'DM 305 C', 'Industrial Safety & Health Management'),
('imsdavv', 'MS5B', 'DM 306 E', 'Insurance & Risk Management'),
('imsdavv', 'MS5B', 'DM 307 E', 'Social & Industrial Psychology'),
('imsdavv', 'MS5B', 'DM 308 E', 'Environ. Sustainability & Climate Change'),
('imsdavv', 'MS6A', 'BEC 101', 'Fundamental of Computers and Programming'),
('imsdavv', 'MS6A', 'BEC 102', 'Fundamentals of e-Commerce and m-Commerce'),
('imsdavv', 'MS6A', 'BEC 103 ', 'Office Automation'),
('imsdavv', 'MS6A', 'BEC 104 ', 'Basic Electronics'),
('imsdavv', 'MS6A', 'BEC 105', 'Fundamental of Management'),
('imsdavv', 'MS6A', 'BEC 106 ', 'Business Mathematics'),
('imsdavv', 'MS6A', 'BEC 107 ', 'Hindi'),
('imsdavv', 'MS6A', 'BEC 301', 'System Analysis and Design'),
('imsdavv', 'MS6A', 'BEC 302 ', 'IT Environment'),
('imsdavv', 'MS6A', 'BEC 303', 'Object Oriented Programming using C++'),
('imsdavv', 'MS6A', 'BEC 304 ', 'Environmental Sustainability and Climate Change Mitigation'),
('imsdavv', 'MS6A', 'BEC 305', 'Quantitative Techniques'),
('imsdavv', 'MS6A', 'BEC 306', 'Cost and Management Accounting'),
('imsdavv', 'MS6A', 'BEC 307 ', 'Business Communication'),
('imsdavv', 'MS6A', 'BEC 501 ', 'Computer Graphics'),
('imsdavv', 'MS6A', 'BE 502', 'Web Designing and Animation Tools'),
('imsdavv', 'MS6A', 'BEC 503', 'Basics of Data Mining and Data Warehousing'),
('imsdavv', 'MS6A', 'BEC 504', 'e-Logistics and e-Supply Chain Management'),
('imsdavv', 'MS6A', 'BEC 505 ', 'Business Environment'),
('imsdavv', 'MS6A', 'BEC 506', 'Human Resource Management'),
('imsdavv', 'MS6A', 'BEC 507', 'Numerical Methods'),
('imsdavv', 'MS6B', 'BH 101', 'FUNDAMENTALS OF MANAGEMENT'),
('imsdavv', 'MS6B', 'BH 102 ', 'Introduction to Human Physiology & Biochemistry'),
('imsdavv', 'MS6B', 'BH 103 ', 'Business Statistics I'),
('imsdavv', 'MS6B', 'BH 104', 'Introduction to Human Anatomy'),
('imsdavv', 'MS6B', 'BH 105', 'Fundamentals of Computers'),
('imsdavv', 'MS6B', 'BH 106', 'Introduction to Hospital & Healthcare'),
('imsdavv', 'MS6B', 'BH 107 ', 'Hindi'),
('imsdavv', 'MS6B', 'BH 301', 'R.D.B.M.S'),
('imsdavv', 'MS6B', 'BH 302', 'Introduction to Pharmacology'),
('imsdavv', 'MS6B', 'BH 303', 'Cost and Management Accounting'),
('imsdavv', 'MS6B', 'BH 304', 'Introduction to Hospital Administration'),
('imsdavv', 'MS6B', 'BH 305', 'Basics of Community Medicine'),
('imsdavv', 'MS6B', 'BH 306 ', 'Introduction to Economics'),
('imsdavv', 'MS6B', 'BH 307', 'Environmental Sustainability & Climate Change Mitigation'),
('imsdavv', 'MS6B', 'BH 501', 'Quantitative Techniques'),
('imsdavv', 'MS6B', 'BH 502 ', 'Introduction to Obstetrics & Gynecology'),
('imsdavv', 'MS6B', 'BH 503', 'Introduction to Surgery'),
('imsdavv', 'MS6B', 'BH 504', 'Introduction to Health Administration'),
('imsdavv', 'MS6B', 'BH 505', 'System Analysis and Design'),
('imsdavv', 'MS6B', 'BH 506 ', 'Individual & Interpersonal Behaviour'),
('imsdavv', 'MS6B', 'BH 507', 'Medical Laws & Medical Ethics'),
('sopedu', 'PE4A', 'T-01', 'Basic and Systemic Anatomy - I'),
('sopedu', 'PE4A', 'T-03', 'English - I'),
('sopedu', 'PE4A', 'P-01', 'Athletics'),
('sopedu', 'PE4A', 'P-02', 'Gymnastics'),
('sopedu', 'PE4A', 'P-03', 'Yoga'),
('sopedu', 'PE4A', 'P-04', 'Conditioning and Match Practice'),
('sopedu', 'PE4A', 'T-04', 'Basic and Systemic Anatomy - II'),
('sopedu', 'PE4A', 'T-05', 'History of Physical Education'),
('sopedu', 'PE4A', 'T-06', 'English - II'),
('sopedu', 'PE4A', 'P-05', 'Athletics - II'),
('sopedu', 'PE4A', 'P-06', 'Gymnastics - II'),
('sopedu', 'PE4A', 'P-07', 'Yoga - II'),
('chemsc', 'CH5A', 'CHEM 101', 'Inorganic Chemistry-I'),
('sopedu', 'PE4A', 'T-07', 'Physiology and Physiology of Exercise'),
('sopedu', 'PE4A', 'T-08', 'Educational Psychology'),
('sopedu', 'PE4A', 'T-09', 'Methods in Physical Education'),
('sopedu', 'PE4A', 'P-09', 'Volleyball'),
('sopedu', 'PE4A', 'P-10', 'Weight Lifting and Training'),
('sopedu', 'PE4A', 'P-11/P-15', 'Teaching Practice'),
('sopedu', 'PE4A', 'T-10', 'Kinesiology'),
('sopedu', 'PE4A', 'T-11', 'Basics of Sports Training'),
('sopedu', 'PE4A', 'T-12', 'Health Education'),
('sopedu', 'PE4A', 'P-13', 'Badminton/ Hockey'),
('sopedu', 'PE4A', 'P-14', 'Football/ Cricket'),
('sopedu', 'PE4A', 'T-13', 'Management of Physical Education'),
('sopedu', 'PE4A', 'T-14', 'Gym Management and Fitness Training'),
('sopedu', 'PE4A', 'T-15/T-18', 'Sports Specialization- CRI/BAD/GYM/ATH/HOC/FB/KK'),
('sopedu', 'PE4A', 'P-17', 'Table Tennis'),
('sopedu', 'PE4A', 'P-18', 'Kabbadi'),
('sopedu', 'PE4A', 'P-19', 'Sports Specialization (Practical Skill)- CRI/BAD/GYM/ATH/HOC/FB/KK'),
('sopedu', 'PE4A', 'T-16', 'Test and Measurement in Physical Education'),
('sopedu', 'PE4A', 'T-17', 'Correctives and Rehabilitation in Physical Education'),
('sopedu', 'PE4A', 'P-21', 'Kho-Kho'),
('sopedu', 'PE4A', 'P-22', 'Tennis'),
('sopedu', 'PE4A', 'P-23', 'Sports Specialization (Coaching Lesson) - CRI/BAD/GYM/ATH/HOC/FB/KK'),
('sopedu', 'PE5A', 'MPEd 101', 'Research Process in Physical Education and Sports Sciences'),
('sopedu', 'PE5A', 'MPEd 302', 'Sports Medicine'),
('sopedu', 'PE5A', 'MPPC 201', 'Officiating and Coaching'),
('sopedu', 'PE5A', 'MPEd 301', 'Scientific Principles of Sports Training'),
('sopedu', 'PE5A', 'MPEd 203', 'Athletic Care and Rehabilitation'),
('sopedu', 'PE5A', 'MPPC 102/MPPC 202/MPPC 303/MPP', 'Conditioning and Match Practice'),
('sopedu', 'PE5A', 'MPEd 201', 'Applied Statistics in Physical Education and Sports'),
('sopedu', 'PE5A', 'MPEd 202', 'Sports Biomechanics and Kinesiology'),
('sopedu', 'PE5A', 'MPEd 104', 'Sports Journalism and Mass Media'),
('sopedu', 'PE5A', 'MPPC 101', 'Marking of Playfields'),
('sopedu', 'PE5A', 'MPEd 204', 'Sports Technology'),
('sopedu', 'PE5A', 'MPEd 103', 'Test, Measurement and Evaluation in Physical Education'),
('sopedu', 'PE5A', 'MPEd 303', 'Physical Fitness and Wellness'),
('sopedu', 'PE5A', 'MPEd 304/MPEd 404', 'Sports Specialization- CRI/BAD/GYM/ATH/HOC/FB/KK'),
('sopedu', 'PE5A', 'MPPC 301', 'Internship and Project'),
('sopedu', 'PE5A', 'MPPC 302', 'Sports Specialization (Practical Skills)- CRI/BAD/GYM/ATH/HOC/FB/KK'),
('sopedu', 'PE5A', 'MPEd 401', 'Sports Psychology'),
('sopedu', 'PE5A', 'MPEd 402', 'Health Education and Sports Nutrition'),
('sopedu', 'PE5A', 'MPEd 403', 'Sports Management OR Dissertation'),
('sopedu', 'PE5A', 'MPPC 401', 'Theory Teaching Lessons'),
('sopedu', 'PE5A', 'MPPC 402', 'Sports Specialization  (Coaching Lessons)'),
('sopedu', 'PE9Z', 'Ph.D. T-01', 'Research Methodology'),
('sopedu', 'PE9Z', 'Ph.D. T-03', 'Computer Applications'),
('sopedu', 'PE9Z', 'Ph.D. T-04', 'Advance course in Physical Education '),
('sopedu', 'PE4A', 'BPES', 'Bachelor of Physical Education'),
('imsdavv', 'MS5F', 'MB 101', 'Fundamentals of Management '),
('imsdavv', 'MS5F', 'MB 102', 'Business Accounting'),
('imsdavv', 'MS5F', 'MB 103 ', 'IT for Business Application '),
('imsdavv', 'MS5F', 'MB 104', 'Business Ethics & Management By Indian Values'),
('imsdavv', 'MS5F', 'MB 105 ', 'Quantitative Methods  '),
('imsdavv', 'MS5F', 'MB 106 ', 'Organisational Behaviour'),
('imsdavv', 'MS5F', 'MB 107 ', 'Business Communication '),
('imsdavv', 'MS5F', 'MB 108 ', 'Web Design and Animation'),
('somath', 'MT5A', 'M111', ' Field Theory'),
('somath', 'MT5A', 'M112', 'Real Analysis I'),
('somath', 'MT5A', 'M113', 'Topology I'),
('somath', 'MT5A', 'M114', 'Complex Analysis I'),
('somath', 'MT5A', 'M101', 'Differential Equations I'),
('somath', 'MT5A', 'M211', 'Advanced Abstract Algebra'),
('somath', 'MT5A', 'M212', 'Real Analysis II'),
('somath', 'MT5A', 'M213', 'Topology II'),
('somath', 'MT5A', 'M214', 'Complex Analysis II'),
('somath', 'MT5A', 'M201', 'Differential Equations II'),
('somath', 'MT5A', 'M311', 'Integration Theory'),
('somath', 'MT5A', 'M312', 'Functional Analysis'),
('somath', 'MT5A', 'M313', 'Partial Differential Equations'),
('somath', 'MT5A', 'M301', 'Theory of Linear operators I'),
('somath', 'MT5A', 'M302', 'Linear Programming I'),
('somath', 'MT5A', 'M305', 'Mathematical Modelling I'),
('somath', 'MT5A', 'M411', 'Mechanics'),
('somath', 'MT5A', 'M401', 'Theory of Linear operators II'),
('somath', 'MT5A', 'M402', 'Linear Programming II'),
('somath', 'MT5A', 'M403', 'Homotopy Theory'),
('somath', 'MT5A', 'M404', 'Topics in Ring Theory'),
('somath', 'MT5A', 'M405', 'Mathematical Modelling II'),
('somath', 'MT8X', 'MP111', 'Review of Literature'),
('somath', 'MT8X', 'MP112', 'Research Methodology'),
('somath', 'MT8X', 'MP113', 'Computer Applications'),
('somath', 'MT8X', 'MP101', 'Linear Algebra over Commutative Rings'),
('somath', 'MT8X', 'MP102', 'Homology Theory'),
('soss', 'SS1D', 'HRs(C)', 'Certificate in Human Rights'),
('soss', 'SS1C', 'G&C(C)', 'Certificate in Guidance and Counselling'),
('soss', 'SS1A', 'LLPM(C)', 'Certificate in Labour Law and Personnel Management'),
('soss', 'SS1B', 'CPA(C)', 'Certificate in Consumer Psychology and Advertising'),
('soss', 'SS2A', 'DCP&A', 'Diploma in Consumer Psychology and Advertising'),
('soss', 'SS3A', 'PGDGC', 'P.G. Diploma in Guidance and Counselling'),
('soss', 'SS3B', 'PGDHRs', 'P.G. Diploma in Human Rights'),
('soss', 'SS3C', 'PGDLLPM', 'P.G. Diploma in Labour Law and Personnel Management'),
('soss', 'SS4A', 'B.S.W', 'Bachelor of Social Work'),
('soss', 'SS5A', 'M.S.W.', 'Master of Social Work'),
('soss', 'SS5B', 'MASOC', 'M.A. Sociology'),
('soss', 'SS5C', 'MAPS', 'M.A. Political Science'),
('soss', 'SS5D', 'MACP', 'M.A. Clinical Psychology'),
('soss', 'SS5E', 'MBARD', 'M.B.A. Rural Development'),
('soss', 'SS8A', 'MPG', 'M.Phil. Geography'),
('soss', 'SS8B', 'MPH', 'M.Phil.History'),
('soss', 'SS8C', 'MPHS', 'M.Phil.Home Science'),
('soss', 'SS8D', 'MPPS', 'M.Phil.Political Science'),
('soss', 'SS8E', 'MPP', 'M.Phil.Pschology'),
('soss', 'SS8f', 'MPSW', 'M.Phil.Social Work'),
('soss', 'SS8G', 'MPSOC', 'M.Phil.Sociology'),
('soss', 'SS9A', 'PHDG', 'Ph.D. Geography'),
('soss', 'SS9B', 'PHDH', 'Ph.D. History'),
('soss', 'SS9C', 'PHDHS', 'Ph.D. Home Science'),
('soss', 'SS9D', 'PHDPS', 'Ph.D. Political Science'),
('soss', 'SS9E', 'PHDP', 'Ph.D. Psychology'),
('soss', 'SS9F', 'PHDSW', 'Ph.D. Social Work'),
('soss', 'SS9G', 'PHDSOC', 'Ph.D. Sociology'),
('chemsc', 'CH5A', 'CHEM 102', 'Organic Chemistry I');

-- --------------------------------------------------------

--
-- Table structure for table `eval_report`
--

CREATE TABLE IF NOT EXISTS `eval_report` (
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

CREATE TABLE IF NOT EXISTS `programme` (
  `Username` varchar(30) NOT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  UNIQUE KEY `Prog_code` (`Prog_code`)
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

CREATE TABLE IF NOT EXISTS `superusers` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sno` int(2) NOT NULL,
  PRIMARY KEY (`username`)
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

CREATE TABLE IF NOT EXISTS `t1_1_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_1_1`
--

INSERT INTO `t1_1_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('sopedu', 'i.The+graduates+and+postgraduates+of+the+courses+have+a+wide+range+of+opportunity+in+different+fields.+Post+Graduate+and+Ph.Ds+are+qualified+to+be+appointed+as+Teachers+and+Sports+officer+in+Universities+Colleges+and+Physical+Education+teachers+in+Schools.ii.Other+than+these+academic+opportunities+they+will+also+be+qualified+for+appointment+as+District+Sports+Officer+%2F+Regional+sports+officer+and+other+administrative+post+in+sports+department+in+Central+and+State+undertakings.+iii.These+students+are+also+eligible+to+join+different+Forces%2C+for+examples%2C+Army%2C+Police%2C+B.S.F+etc.iv.They+are+also+eligible+to+undertake+the+higher+studies+i.e.+M.Phill%2C+Ph.D+and+D.Lit.+in+the+field+of+Physical+Education+and+Sports+Sciences.v.Pass+out+students+can+also+become+health+%2F+fitness+experts+in+health+clubs+and+habitability+industry+and+they+can+start+their+own+health+clubs.+', '', 'http://uid.dauniv.ac.in/NAC/profile/docs/20-10-2018_16-18-20M.P.Ed. College New Scheme wef 2016-17.pdf'),
('admin1', 'asddv++', '', 'http://uid.dauniv.ac.in/NAC/profile/docs/22-10-2018_14-34-21psi.docx'),
('sostat', '', '', 'http://uid.dauniv.ac.in/NAC/profile/docs/22-10-2018_15-20-59M.SC Syllabus stat. 2015-16 Choice Based Credit SystemCore Courses_2.pdf'),
('imsdavv', 'PROCESS+OF+DATA+COLLECTION+IS+GOING+ON+', '', 'SCANNED COPY');

-- --------------------------------------------------------

--
-- Table structure for table `t1_1_2`
--

CREATE TABLE IF NOT EXISTS `t1_1_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Year` varchar(50) DEFAULT NULL,
  `Percent` float DEFAULT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_1_2`
--

INSERT INTO `t1_1_2` (`Username`, `Prog_code`, `Prog_name`, `Year`, `Percent`, `Link`, `id_time`) VALUES
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'July 14 - June 15', 5, 'SCANNED COPY ', 'id1540140563928'),
('imsdavv', 'MS5B', 'MBA(DM)', 'July 14 - June 15', 5, 'SCANNED COPY ', 'id1540140543096'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'July 14 - June 15', 5, 'SCANNED COPY ', 'id1540140510657'),
('imsdavv', 'MS5E', 'MBA(HR)', 'July 14 - June 15', 5, 'SCANNED COPY ', 'id1540140493026'),
('imsdavv', 'MS5D', 'MBA(MM)', 'July 14 - June 15', 5, 'SCANNED COPY ', 'id1540140474292'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'July 14 - June 15', 5, 'SCANNED COPY ', 'id1540140453642'),
('imsdavv', 'MS5A', 'MBA(FT)', 'July 14 - June 15', 5, 'SCANNED COPY ', 'id1540140410476'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'July 14 - June 15', 5, 'SCANNED COPY ', 'id1540140704125'),
('imsdavv', 'MS6B', 'MBA(HA) 5YR', 'July 14 - June 15', 5, 'SCANNED COPY ', 'id1540140841654'),
('imsdavv', 'MS5A', 'MBA(FT)', 'July 16 - June 17', 40, 'SCANNED COPY ', 'id1540140926910'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'July 16 - June 17', 25, 'SCANNED COPY ', 'id1540140960102'),
('imsdavv', 'MS5D', 'MBA(MM)', 'July 16 - June 17', 25, 'SCANNED COPY ', 'id1540141003742'),
('imsdavv', 'MS5E', 'MBA(HR)', 'July 16 - June 17', 30, 'SCANNED COPY ', 'id1540141025995'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'July 16 - June 17', 20, 'SCANNED COPY ', 'id1540141050555'),
('imsdavv', 'MS5B', 'MBA(DM)', 'July 16 - June 17', 20, 'SCANNED COPY ', 'id1540141095013'),
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'July 16 - June 17', 20, 'SCANNED COPY ', 'id1540141114717'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'July 16 - June 17', 20, 'SCANNED COPY ', 'id1540141135829'),
('imsdavv', 'MS6B', 'MBA(HA) 5YR', 'July 16 - June 17', 20, 'SCANNED COPY ', 'id1540141168334'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'July 15 - June 16', 30, 'http://www.math.dauniv.ac.in/syllabus.php', 'idid1540465679066'),
('somath', 'MT8X', 'M.Phil.', 'July 14 - June 15', 30, 'http://www.dauniv.ac.in/rules/AmendmentsOrdinance21.pdf', 'idid1540465730250'),
('sopedu', 'PE8X', 'M.Phil.', 'July 17 - June 18', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/25-10-2018_16-55-32Ph.D._Scheme_and_Syllabus 01.01.17 (Latest).pdf', 'idid1540466761150'),
('sopedu', 'PE4A', 'B.P.E.S.', 'Feb 14 - June 14', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/25-10-2018_16-48-121.1.2 SOPE BPES.pdf', 'idididid1540466415380'),
('sopedu', 'PE5A', 'M.P.Ed.', 'July 15 - June 16', 80, 'http://uid.dauniv.ac.in/NAC/profile/docs/25-10-2018_16-49-361.1.2 M_P_Ed_Scheme_Syllabus_UTD (New 2016-17).pdf', 'ididid1540466637052'),
('sopedu', 'PE9Z', 'Ph.D.', 'July 17 - June 18', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/25-10-2018_16-55-32Ph.D._Scheme_and_Syllabus 01.01.17 (Latest).pdf', 'id1540467063201'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'July 14 - June 15', 10, '1', 'id1540478320547'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'July 14 - June 15', 10, '2', 'id1540478429567'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'July 15 - June 16', 10, '3', 'id1540478448661'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'July 15 - June 16', 10, '4', 'id1540478518709'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'July 16 - June 17', 10, '5', 'id1540478539892'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'July 16 - June 17', 10, '6', 'id1540478564931'),
('chemsc', 'CH5C', 'Ph.D', 'July 16 - June 17', 100, '6', 'id1540478604377'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'July 17 - June 18', 10, '7', 'id1540478623017'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'July 17 - June 18', 10, '8', 'id1540478653463'),
('chemsc', 'CH5C', 'Ph.D', 'July 17 - June 18', 20, '9', 'id1540478671078'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'July 18 - June 19', 10, '10', 'id1540478704252'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'July 18 - June 19', 10, '11', 'id1540478725315');

-- --------------------------------------------------------

--
-- Table structure for table `t1_1_3`
--

CREATE TABLE IF NOT EXISTS `t1_1_3` (
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

--
-- Dumping data for table `t1_1_3`
--

INSERT INTO `t1_1_3` (`Username`, `Prog_code`, `Prog_name`, `Course_code`, `Course_name`, `Description`, `Year`, `Link`, `id_time`) VALUES
('imsdavv', 'MS5A', 'MBA(FT)', 'FT 301 C', 'Entrepreneurship and New Ventures', 'Case Study, Projects, Internship', 'July 16 - June 17', 'SCANNED COPY', 'id1540141304436'),
('imsdavv', 'MS5A', 'MBA(FT)', 'FT 104 C', 'BUSINESS ETHICS AND MANAGEMENT BY INDIAN VALUES', 'Case Study, Projects, Internship', 'July 16 - June 17', 'SCANNED COPY', 'id1540141248292'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'M302', 'Linear Programming I', 'Problem solving', 'Feb 14 - June 14', 'http://www.math.dauniv.ac.in/syllabus.php', 'id1540469497224'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'M402', 'Linear Programming II', 'Problem solving', 'Feb 14 - June 14', 'http://www.math.dauniv.ac.in/syllabus.php', 'id1540469542590'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'M305', 'Mathematical Modelling I', 'Problem solving', 'July 15 - June 16', 'http://www.math.dauniv.ac.in/syllabus.php', 'id1540469550566'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'M405', 'Mathematical Modelling II', 'Problem solving', 'July 15 - June 16', 'http://www.math.dauniv.ac.in/syllabus.php', 'id1540469557886'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPPC 401', 'Theory Teaching Lessons', 'Through theory teaching lessons develops teaching abilities of students', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-30-101.2.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540530820636'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPPC 402', 'Sports Specialization  (Coaching Lessons)', 'Develops coaching abilities of students', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-30-101.2.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540530886862'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPPC 302', 'Sports Specialization (Practical Skills)- CRI/BAD/GYM/ATH/HOC/FB/KK', 'Develops practical skills in different games and sports', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-30-101.2.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540530759708'),
('sopedu', 'PE4A', 'B.P.E.S.', 'P-19', 'Sports Specialization (Practical Skill)- CRI/BAD/GYM/ATH/HOC/FB/KK', 'Practical skills development in different sports specializations', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-23-101.1.2 SOPE BPES.pdf', 'idididid1540530088690'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPPC 102/MPPC 202/MPPC 303/MPP', 'Conditioning and Match Practice', 'Skill development in different sports', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-30-101.2.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'idididid1540530230268'),
('sopedu', 'PE4A', 'B.P.E.S.', 'P-23', 'Sports Specialization (Coaching Lesson) - CRI/BAD/GYM/ATH/HOC/FB/KK', 'Develops sports coaching abilility of students', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-23-101.1.2 SOPE BPES.pdf', 'idididid1540530160923'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPPC 301', 'Internship and Project', 'Develops employability and skill development through Internship and Projects in different schools', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-30-101.2.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'idid1540530660648'),
('sopedu', 'PE4A', 'B.P.E.S.', 'P-04', 'Conditioning and Match Practice', 'Skill development in different games and sports', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-23-101.1.2 SOPE BPES.pdf', 'idididididid1540529829491'),
('sopedu', 'PE4A', 'B.P.E.S.', 'P-11/P-15', 'Teaching Practice', 'Develops practical teaching ability of students', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-23-101.1.2 SOPE BPES.pdf', 'ididididid1540529942519'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPPC 201', 'Officiating and Coaching', 'Develops officiating and coaching abilities of students', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-30-101.2.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'ididid1540530343910'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 403', 'Sports Management OR Dissertation', 'Dissertation develops research and academic quality of students', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-30-101.2.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540530967373');

-- --------------------------------------------------------

--
-- Table structure for table `t1_2_1`
--

CREATE TABLE IF NOT EXISTS `t1_2_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Course_code` varchar(30) DEFAULT NULL,
  `Course_name` varchar(100) DEFAULT NULL,
  `Year` varchar(30) DEFAULT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_2_1`
--

INSERT INTO `t1_2_1` (`Username`, `Prog_code`, `Prog_name`, `Course_code`, `Course_name`, `Year`, `Link`, `id_time`) VALUES
('imsdavv', 'MS5A', 'MBA(FT)', 'FT 104 C', 'BUSINESS ETHICS AND MANAGEMENT BY INDIAN VALUES', 'Feb 14 - June 14', 'SCANNED COPY', 'id1540226348100'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'M305', 'Mathematical Modelling I', 'July 15 - June 16', 'http://www.math.dauniv.ac.in/MATHEMATICAL MODELING-CBCS-sem III.pdf', 'id1540469791285'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'M405', 'Mathematical Modelling II', 'July 15 - June 16', 'http://www.math.dauniv.ac.in/M405MathematicalModelling.pdf', 'id1540469798365'),
('admin7', 'AD7BSC', 'BACHELOR OF SCIENCE', 'AD7RX1', 'APPLIED MATHEMATICS', 'July 14 - June 15', 'google', 'idididid1540480860060'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 401', 'Sports Psychology', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540529660726'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 403', 'Sports Management OR Dissertation', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540529634664'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 401', 'Sports Psychology', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540529477146'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 402', 'Health Education and Sports Nutrition', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540529511302'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPPC 302', 'Sports Specialization (Practical Skills)- CRI/BAD/GYM/ATH/HOC/FB/KK', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540529384331'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 301', 'Scientific Principles of Sports Training', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540529342213'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 204', 'Sports Technology', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'ididid1540529128673'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 202', 'Sports Biomechanics and Kinesiology', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'ididid1540529071496'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 304/MPEd 404', 'Sports Specialization- CRI/BAD/GYM/ATH/HOC/FB/KK', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'idid1540529317026'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 203', 'Athletic Care and Rehabilitation', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'ididid1540529094273'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 104', 'Sports Journalism and Mass Media', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'idididid1540528980486'),
('sopedu', 'PE4A', 'B.P.E.S.', 'P-23', 'Sports Specialization (Coaching Lesson) - CRI/BAD/GYM/ATH/HOC/FB/KK', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_09-51-381.1.2 SOPE BPES.pdf', 'ididididididid1540528305833'),
('sopedu', 'PE4A', 'B.P.E.S.', 'T-15/T-18', 'Sports Specialization- CRI/BAD/GYM/ATH/HOC/FB/KK', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_09-51-381.1.2 SOPE BPES.pdf', 'ididididididididid1540527976394'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 102', 'Physiology of Exercise', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'idididid1540528921973'),
('sopedu', 'PE4A', 'B.P.E.S.', 'P-19', 'Sports Specialization (Practical Skill)- CRI/BAD/GYM/ATH/HOC/FB/KK', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_09-51-381.1.2 SOPE BPES.pdf', 'idididididididid1540528102087'),
('sopedu', 'PE4A', 'B.P.E.S.', 'P-19', 'Sports Specialization (Practical Skill)- CRI/BAD/GYM/ATH/HOC/FB/KK', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_09-51-381.1.2 SOPE BPES.pdf', 'idididididid1540528606542'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 101', 'Research Process in Physical Education and Sports Sciences', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'ididididid1540528673128'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 301', 'Scientific Principles of Sports Training', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'idid1540529211568'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPPC 201', 'Officiating and Coaching', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'ididid1540529152337'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 103', 'Test, Measurement and Evaluation in Physical Education', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'idididid1540528950559'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 201', 'Applied Statistics in Physical Education and Sports', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'ididid1540529042933'),
('sopedu', 'PE4A', 'B.P.E.S.', 'P-04', 'Conditioning and Match Practice', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_09-51-381.1.2 SOPE BPES.pdf', 'idididididid1540528565927'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPPC 101', 'Marking of Playfields', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'ididid1540529018174'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 303', 'Physical Fitness and Wellness', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'idid1540529276272'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 302', 'Sports Medicine', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'idid1540529232098'),
('sopedu', 'PE5A', 'M.P.Ed.', 'MPPC 402', 'Sports Specialization  (Coaching Lessons)', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540529731582');

-- --------------------------------------------------------

--
-- Table structure for table `t1_2_2`
--

CREATE TABLE IF NOT EXISTS `t1_2_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Year` varchar(30) DEFAULT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_2_2`
--

INSERT INTO `t1_2_2` (`Username`, `Prog_code`, `Prog_name`, `Type`, `Year`, `Link`, `id_time`) VALUES
('sopedu', 'PE5A', 'M.P.Ed.', 'Elective', 'July 15 - June 16', 'http://www.sope.davv.ac.in/mpecourse.aspx', 'idid1539853860162'),
('sopedu', 'PE4A', 'B.P.E.S.', 'Elective', 'Feb 14 - June 14', 'http://www.sope.davv.ac.in/coursebpe.aspx', 'idid1539853358114'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'CBCS', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/22-10-2018_16-24-55M.SC Syllabus stat. 2015-16 Choice Based Credit SystemCore Courses_2.pdf', 'id1540162660396'),
('imsdavv', 'MS5A', 'MBA(FT)', 'CBCS', 'July 16 - June 17', 'SCANNED COPY', 'id1540225849183'),
('imsdavv', 'MS5B', 'MBA(DM)', 'CBCS', 'July 16 - June 17', 'SCANNED COPY', 'id1540225877310'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'CBCS', 'July 16 - June 17', 'SCANNED COPY', 'id1540225910100'),
('imsdavv', 'MS5D', 'MBA(MM)', 'CBCS', 'July 16 - June 17', 'SCANNED COPY', 'id1540225922276'),
('imsdavv', 'MS5E', 'MBA(HR)', 'CBCS', 'July 15 - June 16', 'SCANNED COPY', 'id1540225934316'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'CBCS', 'July 16 - June 17', 'SCANNED COPY', 'id1540225945323'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'CBCS', 'July 16 - June 17', 'SCANNED COPY', 'id1540225957926'),
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'CBCS', 'July 16 - June 17', 'SCANNED COPY', 'id1540225968734'),
('imsdavv', 'MS6B', 'MBA(HA) 5YR', 'CBCS', 'July 16 - June 17', 'SCANNED COPY', 'id1540225982366'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'CBCS', 'July 15 - June 16', 'http://www.math.dauniv.ac.in/syllabus.php', 'id1540465931619');

-- --------------------------------------------------------

--
-- Table structure for table `t1_3_1`
--

CREATE TABLE IF NOT EXISTS `t1_3_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_3_1`
--

INSERT INTO `t1_3_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('imsdavv', 'PROCESS+OF+COLLECTION+OF+DATA+IS+GOING+ON+', '', 'SCANNED COPY');

-- --------------------------------------------------------

--
-- Table structure for table `t1_3_2`
--

CREATE TABLE IF NOT EXISTS `t1_3_2` (
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

--
-- Dumping data for table `t1_3_2`
--

INSERT INTO `t1_3_2` (`Username`, `Prog_code`, `Prog_name`, `Course_code`, `Course_name`, `Year_offering`, `Frequency_in_year`, `Year_discontinuation`, `Number_of_students_offered`, `Number_of_students_completing`, `Link`, `id_time`) VALUES
('imsdavv', 'MS5A', '', 'FT 104 C', 'BUSINESS ETHICS AND MANAGEMENT BY INDIAN VALUES', 'July 14 - June 15', 1, 'Still Continuing', 120, 118, 'SCANNED COPY', 'id1540226065791'),
('imsdavv', 'MS5B', '', 'DM 303 C', 'Healthcare Services in Disaster Management', 'July 16 - June 17', 1, 'Still Continuing', 14, 14, 'SCANNED COPY', 'id1540226133293');

-- --------------------------------------------------------

--
-- Table structure for table `t1_3_4`
--

CREATE TABLE IF NOT EXISTS `t1_3_4` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Year` varchar(30) DEFAULT NULL,
  `Number_of_students_programme` int(11) DEFAULT NULL,
  `Number_of_students_internship` int(11) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_3_4`
--

INSERT INTO `t1_3_4` (`Username`, `Prog_code`, `Prog_name`, `Year`, `Number_of_students_programme`, `Number_of_students_internship`, `Link`, `id_time`) VALUES
('sopedu', 'PE5A', 'M.P.Ed.', 'July 18 - June 19', 23, 23, 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-30-101.2.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'idid1539853994867'),
('imsdavv', 'MS5A', 'MBA(FT)', 'July 17 - June 18', 120, 118, 'SCANNED COPY', 'id1540226207762');

-- --------------------------------------------------------

--
-- Table structure for table `t1_4_1`
--

CREATE TABLE IF NOT EXISTS `t1_4_1` (
  `Username` varchar(30) DEFAULT NULL,
  `opt` varchar(50) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `id_time` varchar(30) NOT NULL,
  PRIMARY KEY (`id_time`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_4_1`
--

INSERT INTO `t1_4_1` (`Username`, `opt`, `url`, `id_time`) VALUES
('sostat', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/22-10-2018_16-41-54Feedback_2014.xls', 'id1540163212648'),
('sopedu', '4', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-44-39Feedback of SOPE Jan Apr 2016.pdf', 'id1540531135597');

-- --------------------------------------------------------

--
-- Table structure for table `t1_4_2`
--

CREATE TABLE IF NOT EXISTS `t1_4_2` (
  `Username` varchar(30) DEFAULT NULL,
  `opt` varchar(50) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `id_time` varchar(30) NOT NULL,
  PRIMARY KEY (`id_time`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_4_2`
--

INSERT INTO `t1_4_2` (`Username`, `opt`, `url`, `id_time`) VALUES
('sopedu', 'B', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-48-43Feedback of SOPE Jan-Apr 2016.pdf', 'id1540531343146'),
('imsdavv', 'E', 'http://uid.dauniv.ac.in/NAC/profile/docs/22-10-2018_22-05-24IMS_SUBJECT CODE FAC_12_2018.xls', 'id1540226284048');

-- --------------------------------------------------------

--
-- Table structure for table `t2_1_1`
--

CREATE TABLE IF NOT EXISTS `t2_1_1` (
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

CREATE TABLE IF NOT EXISTS `t2_1_2` (
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

CREATE TABLE IF NOT EXISTS `t2_1_3` (
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

CREATE TABLE IF NOT EXISTS `t2_2_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_2_2`
--

CREATE TABLE IF NOT EXISTS `t2_2_2` (
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

CREATE TABLE IF NOT EXISTS `t2_2_3` (
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
  `id_time` varchar(100) NOT NULL,
  UNIQUE KEY `id_time` (`id_time`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_3_1`
--

CREATE TABLE IF NOT EXISTS `t2_3_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_3_2`
--

CREATE TABLE IF NOT EXISTS `t2_3_2` (
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

CREATE TABLE IF NOT EXISTS `t2_3_3` (
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

CREATE TABLE IF NOT EXISTS `t2_4_1` (
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

CREATE TABLE IF NOT EXISTS `t2_4_2` (
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

CREATE TABLE IF NOT EXISTS `t2_4_3` (
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

CREATE TABLE IF NOT EXISTS `t2_4_4` (
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

CREATE TABLE IF NOT EXISTS `t2_4_5` (
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

CREATE TABLE IF NOT EXISTS `t2_5_1` (
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

CREATE TABLE IF NOT EXISTS `t2_5_2` (
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

CREATE TABLE IF NOT EXISTS `t2_5_3` (
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

CREATE TABLE IF NOT EXISTS `t2_5_4` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_5_5`
--

CREATE TABLE IF NOT EXISTS `t2_5_5` (
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

CREATE TABLE IF NOT EXISTS `t2_6_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_6_2`
--

CREATE TABLE IF NOT EXISTS `t2_6_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_6_3`
--

CREATE TABLE IF NOT EXISTS `t2_6_3` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Total_Students` int(11) DEFAULT NULL,
  `Passed_students` int(11) DEFAULT NULL,
  `id_time` varchar(100) NOT NULL,
  PRIMARY KEY (`id_time`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_7_1`
--

CREATE TABLE IF NOT EXISTS `t2_7_1` (
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
  `id_time` varchar(100) NOT NULL,
  PRIMARY KEY (`id_time`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_1`
--

CREATE TABLE IF NOT EXISTS `t3_1_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_2`
--

CREATE TABLE IF NOT EXISTS `t3_1_2` (
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

CREATE TABLE IF NOT EXISTS `t3_1_3` (
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

CREATE TABLE IF NOT EXISTS `t3_1_4` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Duration` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Agency` varchar(300) NOT NULL,
  `Exam` varchar(300) NOT NULL,
  `id_time` varchar(100) NOT NULL,
  UNIQUE KEY `id_time` (`id_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_5`
--

CREATE TABLE IF NOT EXISTS `t3_1_5` (
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

CREATE TABLE IF NOT EXISTS `t3_1_6` (
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

CREATE TABLE IF NOT EXISTS `t3_2_2` (
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

CREATE TABLE IF NOT EXISTS `t3_2_3` (
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

CREATE TABLE IF NOT EXISTS `t3_3_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_2`
--

CREATE TABLE IF NOT EXISTS `t3_3_2` (
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

CREATE TABLE IF NOT EXISTS `t3_3_3` (
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

CREATE TABLE IF NOT EXISTS `t3_3_4` (
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

CREATE TABLE IF NOT EXISTS `t3_4_1` (
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

CREATE TABLE IF NOT EXISTS `t3_4_2` (
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

CREATE TABLE IF NOT EXISTS `t3_4_3` (
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

CREATE TABLE IF NOT EXISTS `t3_4_4` (
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

CREATE TABLE IF NOT EXISTS `t3_4_5` (
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

CREATE TABLE IF NOT EXISTS `t3_4_6` (
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

CREATE TABLE IF NOT EXISTS `t3_4_7` (
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

CREATE TABLE IF NOT EXISTS `t3_4_8` (
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

CREATE TABLE IF NOT EXISTS `t3_5_1` (
  `Username` varchar(200) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_5_2`
--

CREATE TABLE IF NOT EXISTS `t3_5_2` (
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

CREATE TABLE IF NOT EXISTS `t3_5_3` (
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

CREATE TABLE IF NOT EXISTS `t3_6_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_2`
--

CREATE TABLE IF NOT EXISTS `t3_6_2` (
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

CREATE TABLE IF NOT EXISTS `t3_6_3` (
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

CREATE TABLE IF NOT EXISTS `t3_6_4` (
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

CREATE TABLE IF NOT EXISTS `t3_7_1` (
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

CREATE TABLE IF NOT EXISTS `t3_7_2` (
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

CREATE TABLE IF NOT EXISTS `t3_7_3` (
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

CREATE TABLE IF NOT EXISTS `t4_1_1` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_2`
--

CREATE TABLE IF NOT EXISTS `t4_1_2` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_3`
--

CREATE TABLE IF NOT EXISTS `t4_1_3` (
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

CREATE TABLE IF NOT EXISTS `t4_1_4` (
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

CREATE TABLE IF NOT EXISTS `t4_2_1` (
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

CREATE TABLE IF NOT EXISTS `t4_2_2` (
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

CREATE TABLE IF NOT EXISTS `t4_2_3` (
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

CREATE TABLE IF NOT EXISTS `t4_2_4` (
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

CREATE TABLE IF NOT EXISTS `t4_2_5` (
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

CREATE TABLE IF NOT EXISTS `t4_2_6` (
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

CREATE TABLE IF NOT EXISTS `t4_2_7` (
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

CREATE TABLE IF NOT EXISTS `t4_3_1` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(1000) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_2`
--

CREATE TABLE IF NOT EXISTS `t4_3_2` (
  `Username` varchar(100) NOT NULL,
  `numbers` int(100) NOT NULL,
  `numberc` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_3`
--

CREATE TABLE IF NOT EXISTS `t4_3_3` (
  `Username` varchar(100) NOT NULL,
  `choice_433` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_4`
--

CREATE TABLE IF NOT EXISTS `t4_3_4` (
  `Username` varchar(100) NOT NULL,
  `namee` varchar(100) NOT NULL,
  `linkm` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_4_1`
--

CREATE TABLE IF NOT EXISTS `t4_4_1` (
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

CREATE TABLE IF NOT EXISTS `t4_4_2` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_1`
--

CREATE TABLE IF NOT EXISTS `t5_1_1` (
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

CREATE TABLE IF NOT EXISTS `t5_1_2` (
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

CREATE TABLE IF NOT EXISTS `t5_1_3` (
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

CREATE TABLE IF NOT EXISTS `t5_1_4` (
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

CREATE TABLE IF NOT EXISTS `t5_1_5` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `FIle_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_6`
--

CREATE TABLE IF NOT EXISTS `t5_1_6` (
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

CREATE TABLE IF NOT EXISTS `t5_2_1` (
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

CREATE TABLE IF NOT EXISTS `t5_2_2` (
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

CREATE TABLE IF NOT EXISTS `t5_2_3` (
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

CREATE TABLE IF NOT EXISTS `t5_3_1` (
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

CREATE TABLE IF NOT EXISTS `t5_3_2` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_3_3`
--

CREATE TABLE IF NOT EXISTS `t5_3_3` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `name_of_activity` varchar(1000) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_4_1`
--

CREATE TABLE IF NOT EXISTS `t5_4_1` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_4_2`
--

CREATE TABLE IF NOT EXISTS `t5_4_2` (
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

CREATE TABLE IF NOT EXISTS `t5_4_3` (
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

CREATE TABLE IF NOT EXISTS `t6_1_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_1_2`
--

CREATE TABLE IF NOT EXISTS `t6_1_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_1`
--

CREATE TABLE IF NOT EXISTS `t6_2_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_2`
--

CREATE TABLE IF NOT EXISTS `t6_2_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_3`
--

CREATE TABLE IF NOT EXISTS `t6_2_3` (
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

CREATE TABLE IF NOT EXISTS `t6_2_4` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_1`
--

CREATE TABLE IF NOT EXISTS `t6_3_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_2`
--

CREATE TABLE IF NOT EXISTS `t6_3_2` (
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

CREATE TABLE IF NOT EXISTS `t6_3_3` (
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

CREATE TABLE IF NOT EXISTS `t6_3_3_1` (
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

CREATE TABLE IF NOT EXISTS `t6_3_3_2` (
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

CREATE TABLE IF NOT EXISTS `t6_3_4` (
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

CREATE TABLE IF NOT EXISTS `t6_3_5` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_4_1`
--

CREATE TABLE IF NOT EXISTS `t6_4_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_4_2`
--

CREATE TABLE IF NOT EXISTS `t6_4_2` (
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

CREATE TABLE IF NOT EXISTS `t6_4_3` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_1`
--

CREATE TABLE IF NOT EXISTS `t6_5_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_2`
--

CREATE TABLE IF NOT EXISTS `t6_5_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_3`
--

CREATE TABLE IF NOT EXISTS `t6_5_3` (
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

CREATE TABLE IF NOT EXISTS `t6_5_4` (
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

CREATE TABLE IF NOT EXISTS `t6_5_5` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_1`
--

CREATE TABLE IF NOT EXISTS `t7_1_1` (
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

CREATE TABLE IF NOT EXISTS `t7_1_2` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_3`
--

CREATE TABLE IF NOT EXISTS `t7_1_3` (
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

CREATE TABLE IF NOT EXISTS `t7_1_4` (
  `Username` varchar(100) NOT NULL,
  `tl` varchar(100) NOT NULL,
  `led` decimal(10,0) NOT NULL,
  `ls` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_5`
--

CREATE TABLE IF NOT EXISTS `t7_1_5` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_6`
--

CREATE TABLE IF NOT EXISTS `t7_1_6` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_7`
--

CREATE TABLE IF NOT EXISTS `t7_1_7` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_8`
--

CREATE TABLE IF NOT EXISTS `t7_1_8` (
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

CREATE TABLE IF NOT EXISTS `t7_1_9` (
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

CREATE TABLE IF NOT EXISTS `t7_1_10` (
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

CREATE TABLE IF NOT EXISTS `t7_1_11` (
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

CREATE TABLE IF NOT EXISTS `t7_1_12` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_13`
--

CREATE TABLE IF NOT EXISTS `t7_1_13` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_14`
--

CREATE TABLE IF NOT EXISTS `t7_1_14` (
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

CREATE TABLE IF NOT EXISTS `t7_1_15` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_16`
--

CREATE TABLE IF NOT EXISTS `t7_1_16` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(10) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_17`
--

CREATE TABLE IF NOT EXISTS `t7_1_17` (
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

CREATE TABLE IF NOT EXISTS `t7_1_18` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_19`
--

CREATE TABLE IF NOT EXISTS `t7_1_19` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_2_1`
--

CREATE TABLE IF NOT EXISTS `t7_2_1` (
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

CREATE TABLE IF NOT EXISTS `t7_3_1` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(1000) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
