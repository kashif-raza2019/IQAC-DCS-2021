-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2021 at 07:43 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `criteria_iqac_nac_common`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `Year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `academic_year2`
--

CREATE TABLE `academic_year2` (
  `Year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sno` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `name`, `sno`, `status`) VALUES
('admin1', 'adminone', 'DEPARTMENT OF ADMIN ONE', 1001, 1),
('admin2', 'admintwo', 'DEPARTMENT OF ADMIN TWO', 1002, 0),
('admin3', 'adminthree', 'DEPARTMENT OF ADMIN THREE', 1003, 0),
('admin4', 'adminfour', 'DEPARTMENT OF ADMIN FOUR', 1004, 0),
('admin5', 'adminfive', 'DEPARTMENT OF ADMIN FIVE', 1005, 0),
('admin6', 'adminsix', 'DEPARTMENT OF ADMIN SIX', 1006, 0),
('admin7', 'adminseven', 'DEPARTMENT OF ADMIN SEVEN', 1007, 0),
('Asc', 'Ascmis_02', 'Human Resource Development Centre', 2, 1),
('Biochem', 'Biochemmis_03', 'School of Biochemistry', 3, 1),
('Chemsc', 'Davvchemistry', 'School of  Chemical Sciences', 4, 1),
('CNO', 'Cnomis_47', 'Central Office', 47, 0),
('Compcent', 'Compcentmis_26', 'Computer Centre', 26, 0),
('cwo', 'cwomis_39', 'Chief Warden Office', 39, 0),
('Ddedavv', 'Ddedavvmis_32', 'Directorate of Distance Education', 32, 0),
('Ddukkdavv', 'Ddukkdavvmis_36', 'DDU- Kaushal Kendra', 36, 1),
('Doll', 'Dollmis_29', 'Department of Life Long Learning', 29, 1),
('dswdavv', 'dswdavvmis_52', 'DSW', 52, 0),
('Emrcdavv', 'Emrcdavvmis_30', 'Education Multimedia Research Centre', 30, 1),
('examofficedavv', 'examofficedavvmis_53', 'EXAM OFFICE', 53, 1),
('Ietdavv', 'Ietdavvmis_23', 'Institute of Engineering and Technology', 23, 1),
('Iipsdavv', 'Iipsdavvmis_25', 'International Institute of Professional Studies', 25, 1),
('Imsdavv', 'Imsdavvmis_24', 'Institute of Management Studies', 24, 1),
('itc', 'itcmis_20', 'IT Center', 99, 0),
('mcc', 'mccmis_38', 'Model Career Center', 38, 0),
('nssdavv', 'nssdavvmis_51', 'NATIONAL SERVICE SCHEME', 51, 1),
('office61', 'officedavvmis_61', 'DEPARTMENT OF OFFICE-61', 61, 0),
('office62', 'officedavvmis_62', 'DEPARTMENT OF OFFICE-62', 62, 0),
('office63', 'officedavvmis_63', 'DEPARTMENT OF OFFICE-63', 63, 0),
('office64', 'officedavvmis_64', 'DEPARTMENT OF OFFICE-64', 64, 0),
('office65', 'officedavvmis_65', 'DEPARTMENT OF OFFICE-65', 65, 0),
('pranjal', 'pranjal02', 'PRANJAL GUPTA (TESTING)', 2001, 0),
('saif', 'saif01', 'SAIF UL REHMAN (TESTING)', 2002, 0),
('Sees', 'Seesmis_11', 'School of Energy and Environmental Studies', 11, 1),
('Sjmc', 'Sjmcmis_15', 'School of Journalism and Mass Comm.', 13, 1),
('Sobiotech', 'Sobiotechmis_35', 'School of Biotechnology', 35, 1),
('Socmrce', 'Socmrcemis_05', 'School of Commerce', 5, 1),
('Socsit', 'Socsitmis_06', 'School of Computer Science and IT', 6, 1),
('Sodsf', 'Sodsfmis_07', 'School of Data Science and Forecasting', 7, 1),
('Soecon', 'Soeconmis_08', 'School of Economics', 8, 1),
('Soedu', 'Soedumis_09', 'School of Education', 9, 1),
('Soex', 'Soexmis_10', 'School of Electronics', 10, 1),
('Soinstru', 'Soinstrumis_12', 'School of Instrumentation', 12, 1),
('Solang', 'Solangmis_16', 'School of Languages', 16, 1),
('Solaw', 'Solawmis_14', 'School of Law', 14, 1),
('Solib', 'Solibmis_27', 'School of Library and Information Science', 27, 1),
('Sols', 'Solsmis_15', 'School of Life Sciences', 15, 1),
('Somath', 'Somathmis_17', 'School of Mathematics', 17, 1),
('Sopedu', 'Sopedumis_19', 'School of Physical Education', 19, 1),
('Sopharma', 'Sopharmamis_18', 'School of Pharmacy', 18, 1),
('Sophy', 'Sophymis_20', 'School of Physics', 20, 1),
('Soss', 'Sossmis_22', 'School of Social Science', 22, 1),
('Sostat', 'Sostatmis_21', 'School of Statistics', 21, 1),
('Soyoga', 'Soyogamis_33', 'School of yoga', 33, 1),
('sportsdavv', 'sportsdavvmis_54', 'SPORTS', 54, 0),
('Umcdavv', 'Umcdavvmis_31', 'University Minority Cell', 31, 0),
('vcoffice', 'vcofficemis_01', 'VC Office', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Username` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL DEFAULT '',
  `Course_code` varchar(30) NOT NULL DEFAULT '',
  `Course_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eval_report`
--

CREATE TABLE `eval_report` (
  `Username` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sid` int NOT NULL,
  `sub_dept` text NOT NULL,
  `Year of Establishment` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Is the Department part of a School/Faculty of the University` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Names of programmes offered` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Number of teaching posts Sanctioned UG` int NOT NULL,
  `Number of teaching posts Filled UG` int NOT NULL,
  `Number of teaching posts Sanctioned PG` int NOT NULL,
  `Number of teaching posts Filled PG` int NOT NULL,
  `Number of Research Projects` int NOT NULL,
  `Total grants received` int NOT NULL,
  `National collaboration` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `International collaboration` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Departmental projects funded by Central Institutes` int NOT NULL,
  `Departmental projects funded by Central Institutes (Total Grant)` int NOT NULL,
  `Special research laboratories sponsored by / created by industry` int NOT NULL,
  `Number of Papers published` int NOT NULL,
  `Number of Books with ISBN` int NOT NULL,
  `Number of Citation Index range` varchar(11) NOT NULL,
  `Number of Citation Index average` int NOT NULL,
  `Number of Impact Factor range` varchar(11) NOT NULL,
  `Number of Impact Factor average` int NOT NULL,
  `Number of h-index` int NOT NULL,
  `Details of patents and income generated` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Areas of consultancy and income generated` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Faculty Awards` text NOT NULL,
  `Phd Awards` int NOT NULL,
  `Student Awards` int NOT NULL,
  `Students Cleared Competitive Exams` int NOT NULL,
  `doctoral, post-doctoral students (Host University)` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `doctoral, post-doctoral students (other University)` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `scholars Getting Financial Assistance` int NOT NULL,
  `trash` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `help_desk`
--

CREATE TABLE `help_desk` (
  `id` int NOT NULL,
  `msg_from` varchar(100) NOT NULL,
  `msg_to` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `seen` int NOT NULL,
  `replied` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `na_table_div_id`
--

CREATE TABLE `na_table_div_id` (
  `table` varchar(100) NOT NULL,
  `div_id` varchar(100) NOT NULL,
  `criteria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `data` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `not_applicable`
--

CREATE TABLE `not_applicable` (
  `id` int NOT NULL,
  `Username` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `img_div` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `not_applicable`
--

INSERT INTO `not_applicable` (`id`, `Username`, `section`, `img_div`) VALUES
(25, 'admin1', 't1_1_1', 'ch111'),
(26, 'admin1', 't1_4_1', 'ch141'),
(27, 'admin1', 't1_4_2', 'ch142'),
(28, 'admin1', 't2_1_1', 'ch211'),
(29, 'admin1', 't3_1_1', 'ch311'),
(30, 'admin4', 't1_1_1', 'ch111'),
(31, 'admin4', 't1_1_2', 'ch112'),
(32, 'admin4', 't1_1_3', 'ch113'),
(33, 'admin4', 't1_2_1', 'ch121'),
(34, 'admin4', 't1_2_2', 'ch122'),
(35, 'admin4', 't1_3_1', 'ch131'),
(36, 'admin4', 't1_3_2', 'ch132'),
(37, 'admin4', 't1_3_4', 'ch134'),
(38, 'admin4', 't1_4_1', 'ch141'),
(39, 'admin4', 't1_4_2', 'ch142'),
(40, 'admin4', 't2_1_1', 'ch211'),
(41, 'admin4', 't2_1_2', 'ch212'),
(42, 'admin4', 't2_1_3', 'ch213'),
(43, 'admin4', 't2_2_1', 'ch221'),
(44, 'admin4', 't2_2_2', 'ch222'),
(45, 'admin4', 't2_2_3', 'ch223'),
(46, 'admin4', 't2_3_1', 'ch231'),
(47, 'admin4', 't2_3_2', 'ch232'),
(48, 'admin4', 't2_3_3', 'ch233'),
(49, 'admin4', 't2_4_1', 'ch241'),
(50, 'admin4', 't2_4_2', 'ch242'),
(51, 'admin4', 't2_4_3', 'ch243'),
(52, 'admin4', 't2_4_4', 'ch244'),
(53, 'admin4', 't2_4_5', 'ch245'),
(54, 'admin4', 't2_5_1', 'ch251'),
(55, 'admin4', 't2_5_2', 'ch252'),
(56, 'admin4', 't2_5_3', 'ch253'),
(57, 'admin4', 't2_5_4', 'ch254'),
(58, 'admin4', 't2_5_5', 'ch255'),
(59, 'admin4', 't2_6_1', 'ch261'),
(60, 'admin4', 't2_6_2', 'ch262'),
(61, 'admin4', 't2_6_3', 'ch263'),
(62, 'admin4', 't2_7_1', 'ch271'),
(63, 'admin4', 't3_1_1', 'ch311'),
(64, 'admin4', 't3_1_2', 'ch312'),
(65, 'admin4', 't3_1_3', 'ch313'),
(66, 'admin4', 't3_1_4', 'ch314'),
(67, 'admin4', 't3_1_5', 'ch315'),
(68, 'admin4', 't3_1_6', 'ch316'),
(69, 'admin4', 't3_2_2', 'ch322'),
(70, 'admin4', 't3_2_3', 'ch323'),
(71, 'admin4', 't3_3_1', 'ch331'),
(72, 'admin4', 't3_3_2', 'ch332'),
(73, 'admin4', 't3_3_3', 'ch333'),
(74, 'admin4', 't3_3_4', 'ch334'),
(75, 'admin4', 't3_4_1', 'ch341'),
(76, 'admin4', 't3_4_2', 'ch342'),
(77, 'admin4', 't3_4_3', 'ch343'),
(78, 'admin4', 't3_4_4', 'ch344'),
(79, 'admin4', 't3_4_5', 'ch345'),
(80, 'admin4', 't3_4_6', 'ch346'),
(81, 'admin4', 't3_4_7', 'ch347'),
(82, 'admin4', 't3_4_8', 'ch348'),
(83, 'admin4', 't3_5_1', 'ch351'),
(84, 'admin4', 't3_5_2', 'ch352'),
(85, 'admin4', 't3_5_3', 'ch353'),
(86, 'admin4', 't3_6_1', 'ch361'),
(87, 'admin4', 't3_6_2', 'ch362'),
(88, 'admin4', 't3_6_3', 'ch363'),
(89, 'admin4', 't3_6_4', 'ch364'),
(90, 'admin4', 't3_7_1', 'ch371'),
(91, 'admin4', 't3_7_2', 'ch372'),
(92, 'admin4', 't3_7_3', 'ch373'),
(93, 'admin4', 't4_1_1', 'ch411'),
(94, 'admin4', 't4_1_2', 'ch412'),
(95, 'admin4', 't4_1_3', 'ch413'),
(96, 'admin4', 't4_1_4', 'ch414'),
(97, 'admin4', 't4_2_1', 'ch421'),
(98, 'admin4', 't4_2_2', 'ch422'),
(99, 'admin4', 't4_2_3', 'ch423'),
(100, 'admin4', 't4_2_4', 'ch424'),
(101, 'admin4', 't4_2_5', 'ch425'),
(102, 'admin4', 't4_2_6', 'ch426'),
(103, 'admin4', 't4_2_7', 'ch427'),
(104, 'admin4', 't4_3_1', 'ch431'),
(105, 'admin4', 't4_3_2', 'ch432'),
(106, 'admin4', 't4_3_3', 'ch433'),
(107, 'admin4', 't4_3_4', 'ch434'),
(108, 'admin4', 't4_4_1', 'ch441'),
(109, 'admin4', 't4_4_2', 'ch442'),
(110, 'admin4', 't5_1_1', 'ch511'),
(111, 'admin4', 't5_1_2', 'ch512'),
(112, 'admin4', 't5_1_3', 'ch513'),
(113, 'admin4', 't5_1_4', 'ch514'),
(114, 'admin4', 't5_1_5', 'ch515'),
(115, 'admin4', 't5_1_6', 'ch516'),
(116, 'admin4', 't5_2_1', 'ch521'),
(117, 'admin4', 't5_2_2', 'ch522'),
(118, 'admin4', 't5_2_3', 'ch523'),
(119, 'admin4', 't5_3_1', 'ch531'),
(120, 'admin4', 't5_3_2', 'ch111'),
(121, 'admin4', 't5_3_3', 'ch533'),
(122, 'admin4', 't5_4_1', 'ch541'),
(123, 'admin4', 't5_4_2', 'ch542'),
(124, 'admin4', 't5_4_3', 'ch543'),
(125, 'admin4', 't6_1_1', 'ch611'),
(126, 'admin4', 't6_1_2', 'ch612'),
(127, 'admin4', 't6_2_1', 'ch621'),
(128, 'admin4', 't6_2_2', 'ch622'),
(129, 'admin4', 't6_2_3', 'ch623'),
(130, 'admin4', 't6_2_4', 'ch624'),
(131, 'admin4', 't6_3_1', 'ch631'),
(132, 'admin4', 't6_3_2', 'ch632'),
(133, 'admin4', 't6_3_3', 'ch633'),
(134, 'admin4', 't6_3_3_1', 'ch6331'),
(135, 'admin4', 't6_3_3_2', 'ch6332'),
(136, 'admin4', 't6_3_4', 'ch634'),
(137, 'admin4', 't6_3_5', 'ch635'),
(138, 'admin4', 't6_4_1', 'ch641'),
(139, 'admin4', 't6_4_2', 'ch642'),
(140, 'admin4', 't6_4_3', 'ch643'),
(141, 'admin4', 't6_5_1', 'ch651'),
(142, 'admin4', 't6_5_2', 'ch652'),
(143, 'admin4', 't6_5_3', 'ch653'),
(144, 'admin4', 't6_5_4', 'ch654'),
(145, 'admin4', 't6_5_5', 'ch655'),
(146, 'admin4', 't7_1_1', 'ch711'),
(147, 'admin4', 't7_1_10', 'ch7110'),
(148, 'admin4', 't7_1_11', 'ch7111'),
(149, 'admin4', 't7_1_12', 'ch7112'),
(150, 'admin4', 't7_1_13', 'ch7113'),
(151, 'admin4', 't7_1_14', 'ch7114'),
(152, 'admin4', 't7_1_15', 'ch7115'),
(153, 'admin4', 't7_1_16', 'ch7116'),
(154, 'admin4', 't7_1_17', 'ch7117'),
(155, 'admin4', 't7_1_18', 'ch7118'),
(156, 'admin4', 't7_1_19', 'ch7119'),
(157, 'admin4', 't7_1_2', 'ch712'),
(158, 'admin4', 't7_1_3', 'ch713'),
(159, 'admin4', 't7_1_4', 'ch714'),
(160, 'admin4', 't7_1_5', 'ch715'),
(161, 'admin4', 't7_1_6', 'ch716'),
(162, 'admin4', 't7_1_7', 'ch717'),
(163, 'admin4', 't7_1_8', 'ch718'),
(164, 'admin4', 't7_1_9', 'ch719'),
(165, 'admin4', 't7_2_1', 'ch721'),
(166, 'admin4', 't7_3_1', 'ch731'),
(252, 'vcoffice', 't1_1_1', 'ch111'),
(253, 'vcoffice', 't1_1_2', 'ch112'),
(254, 'vcoffice', 't1_1_3', 'ch113'),
(255, 'vcoffice', 't1_2_1', 'ch121'),
(256, 'vcoffice', 't1_2_2', 'ch122'),
(257, 'vcoffice', 't1_3_1', 'ch131'),
(258, 'vcoffice', 't1_3_2', 'ch132'),
(259, 'vcoffice', 't1_3_4', 'ch134'),
(260, 'vcoffice', 't1_4_1', 'ch141'),
(261, 'vcoffice', 't1_4_2', 'ch142'),
(520, 'Sopedu', 't6_2_2', 'ch622'),
(521, 'Sopedu', 't6_2_3', 'ch623'),
(522, 'Sopedu', 't6_3_1', 'ch631'),
(523, 'Sopedu', 't6_3_3', 'ch633'),
(524, 'Sopedu', 't6_4_3', 'ch643'),
(525, 'Sopedu', 't7_1_12', 'ch7112'),
(526, 'Sopedu', 't7_1_16', 'ch7116'),
(527, 'Sopedu', 't7_1_6', 'ch716'),
(528, 'Sophy', 't4_1_2', 'ch412'),
(529, 'Sophy', 't4_2_1', 'ch421'),
(530, 'Sophy', 't4_2_2', 'ch422'),
(531, 'Sophy', 't4_2_3', 'ch423'),
(532, 'Sophy', 't4_2_5', 'ch425'),
(533, 'Sophy', 't4_2_6', 'ch426'),
(534, 'Sophy', 't4_2_7', 'ch427'),
(535, 'Sophy', 't4_3_1', 'ch431'),
(536, 'Sophy', 't4_3_3', 'ch433'),
(537, 'Sophy', 't4_3_4', 'ch434'),
(630, 'Somath', 't1_3_1', 'ch131'),
(631, 'Somath', 't1_3_2', 'ch132'),
(632, 'Somath', 't1_3_4', 'ch134'),
(633, 'Somath', 't2_2_3', 'ch223'),
(634, 'Somath', 't2_4_4', 'ch244'),
(635, 'Somath', 't2_5_2', 'ch252'),
(636, 'Somath', 't2_5_3', 'ch253'),
(637, 'Somath', 't2_5_4', 'ch254'),
(638, 'Somath', 't2_5_5', 'ch255'),
(639, 'Somath', 't3_1_1', 'ch311'),
(640, 'Somath', 't3_1_2', 'ch312'),
(641, 'Somath', 't3_1_3', 'ch313'),
(642, 'Somath', 't3_1_5', 'ch315'),
(643, 'Somath', 't3_1_6', 'ch316'),
(644, 'Somath', 't3_2_2', 'ch322'),
(645, 'Somath', 't3_2_3', 'ch323'),
(646, 'Somath', 't3_3_1', 'ch331'),
(647, 'Somath', 't3_3_2', 'ch332'),
(648, 'Somath', 't3_3_3', 'ch333'),
(649, 'Somath', 't3_3_4', 'ch334'),
(650, 'Somath', 't3_4_1', 'ch341'),
(651, 'Somath', 't3_4_2', 'ch342'),
(652, 'Somath', 't3_4_3', 'ch343'),
(653, 'Somath', 't3_4_6b', 'ch346b'),
(654, 'Somath', 't3_4_6c', 'ch346c'),
(655, 'Somath', 't3_4_8', 'ch348'),
(656, 'Somath', 't3_5_1', 'ch351'),
(657, 'Somath', 't3_5_2', 'ch352'),
(658, 'Somath', 't3_5_3', 'ch353'),
(659, 'Somath', 't3_6_1', 'ch361'),
(660, 'Somath', 't3_6_2', 'ch362'),
(661, 'Somath', 't3_6_3', 'ch363'),
(662, 'Somath', 't3_6_4', 'ch364'),
(663, 'Somath', 't3_7_2', 'ch372'),
(664, 'Somath', 't3_7_3', 'ch373'),
(665, 'Somath', 't4_1_2', 'ch412'),
(666, 'Somath', 't4_2_1', 'ch421'),
(667, 'Somath', 't4_2_3', 'ch423'),
(668, 'Somath', 't4_2_5', 'ch425'),
(669, 'Somath', 't4_2_6', 'ch426'),
(670, 'Somath', 't4_2_7', 'ch427'),
(671, 'Somath', 't4_3_1', 'ch431'),
(672, 'Somath', 't4_3_3', 'ch433'),
(673, 'Somath', 't4_3_4', 'ch434'),
(674, 'Somath', 't4_4_2', 'ch442'),
(675, 'Somath', 't5_1_3', 'ch513'),
(676, 'Somath', 't5_1_4', 'ch514'),
(677, 'Somath', 't5_1_5', 'ch515'),
(678, 'Somath', 't5_1_6', 'ch516'),
(679, 'Somath', 't5_3_1', 'ch531'),
(680, 'Somath', 't5_4_2', 'ch542'),
(752, 'Solaw', 't1_3_2', 'ch132'),
(753, 'Solaw', 't2_2_3', 'ch223'),
(822, 'Chemsc', 't3_4_6b', 'ch346b'),
(823, 'Chemsc', 't3_4_6c', 'ch346c'),
(824, 'Chemsc', 't4_2_3', 'ch423'),
(825, 'Chemsc', 't4_2_5', 'ch425'),
(826, 'Chemsc', 't4_2_6', 'ch426'),
(827, 'Chemsc', 't4_2_7', 'ch427'),
(828, 'Chemsc', 't5_1_5', 'ch515'),
(829, 'Chemsc', 't6_2_2', 'ch622'),
(830, 'Chemsc', 't6_3_3', 'ch633'),
(831, 'Chemsc', 't6_4_3', 'ch643'),
(832, 'Chemsc', 't6_5_1', 'ch651'),
(833, 'Chemsc', 't6_5_2', 'ch652'),
(834, 'Chemsc', 't6_5_3', 'ch653'),
(835, 'Chemsc', 't6_5_5', 'ch655'),
(836, 'Chemsc', 't7_1_1', 'ch711'),
(837, 'Chemsc', 't7_1_11', 'ch7111'),
(838, 'Chemsc', 't7_1_12', 'ch7112'),
(839, 'Chemsc', 't7_1_15', 'ch7115'),
(840, 'Chemsc', 't7_1_16', 'ch7116'),
(841, 'Chemsc', 't7_1_17', 'ch7117'),
(842, 'Chemsc', 't7_1_19', 'ch7119'),
(843, 'Chemsc', 't7_1_3', 'ch713'),
(844, 'Chemsc', 't7_1_4', 'ch714'),
(845, 'Chemsc', 't7_1_6', 'ch716'),
(846, 'Chemsc', 't7_1_7', 'ch717'),
(847, 'Chemsc', 't7_1_8', 'ch718'),
(954, 'Sostat', 't1_3_1', 'ch131'),
(955, 'Sostat', 't3_1_2', 'ch312'),
(956, 'Sostat', 't3_1_6', 'ch316'),
(957, 'Sostat', 't3_2_2', 'ch322'),
(958, 'Sostat', 't3_2_3', 'ch323'),
(959, 'Sostat', 't3_4_2', 'ch342'),
(960, 'Sostat', 't3_4_3', 'ch343'),
(961, 'Sostat', 't3_7_1', 'ch371'),
(962, 'Sostat', 't3_7_2', 'ch372'),
(963, 'Sostat', 't3_7_3', 'ch373'),
(964, 'Sostat', 't4_1_2', 'ch412'),
(965, 'Sostat', 't5_1_3', 'ch513'),
(966, 'Sostat', 't5_1_4', 'ch514'),
(967, 'Sostat', 't5_1_5', 'ch515'),
(968, 'Sostat', 't5_2_3', 'ch523'),
(969, 'Sostat', 't5_3_2', 'ch111'),
(970, 'Sostat', 't5_4_1', 'ch541'),
(971, 'Biochem', 't1_2_1', 'ch121'),
(972, 'Biochem', 't1_3_1', 'ch131'),
(973, 'Biochem', 't1_3_2', 'ch132'),
(974, 'Biochem', 't2_2_3', 'ch223'),
(975, 'Biochem', 't3_1_2', 'ch312'),
(976, 'Biochem', 't3_1_3', 'ch313'),
(977, 'Biochem', 't3_1_6', 'ch316'),
(978, 'Biochem', 't3_3_1', 'ch331'),
(979, 'Biochem', 't3_3_4', 'ch334'),
(980, 'Biochem', 't3_4_1', 'ch341'),
(981, 'Biochem', 't3_4_3', 'ch343'),
(982, 'Biochem', 't3_5_1', 'ch351'),
(983, 'Biochem', 't3_5_2', 'ch352'),
(984, 'Biochem', 't3_5_3', 'ch353'),
(985, 'Biochem', 't3_6_1', 'ch361'),
(986, 'Biochem', 't3_6_2', 'ch362'),
(987, 'Biochem', 't3_7_3', 'ch373'),
(988, 'Biochem', 't4_1_2', 'ch412'),
(989, 'Biochem', 't4_2_1', 'ch421'),
(990, 'Biochem', 't4_2_2', 'ch422'),
(991, 'Biochem', 't4_2_3', 'ch423'),
(992, 'Biochem', 't4_2_5', 'ch425'),
(993, 'Biochem', 't4_3_4', 'ch434'),
(994, 'Biochem', 't5_1_4', 'ch514'),
(995, 'Biochem', 't5_1_5', 'ch515'),
(996, 'Biochem', 't5_3_1', 'ch531'),
(997, 'Biochem', 't5_3_2', 'ch111'),
(998, 'Biochem', 't5_3_3', 'ch533'),
(999, 'Biochem', 't5_4_1', 'ch541'),
(1000, 'Biochem', 't5_4_2', 'ch542'),
(1001, 'Biochem', 't5_4_3', 'ch543'),
(1002, 'Biochem', 't6_2_2', 'ch622'),
(1003, 'Biochem', 't6_2_3', 'ch623'),
(1004, 'Biochem', 't6_2_4', 'ch624'),
(1005, 'Biochem', 't6_3_1', 'ch631'),
(1006, 'Biochem', 't6_3_2', 'ch632'),
(1007, 'Biochem', 't6_3_3', 'ch633'),
(1008, 'Biochem', 't6_3_4', 'ch634'),
(1009, 'Biochem', 't6_3_5', 'ch635'),
(1010, 'Biochem', 't6_4_1', 'ch641'),
(1011, 'Biochem', 't6_4_2', 'ch642'),
(1012, 'Biochem', 't6_5_4', 'ch654'),
(1013, 'Biochem', 't6_5_5', 'ch655'),
(1014, 'Biochem', 't7_1_1', 'ch711'),
(1015, 'Biochem', 't7_1_10', 'ch7110'),
(1016, 'Biochem', 't7_1_11', 'ch7111'),
(1017, 'Biochem', 't7_1_12', 'ch7112'),
(1018, 'Biochem', 't7_1_15', 'ch7115'),
(1019, 'Biochem', 't7_1_16', 'ch7116'),
(1020, 'Biochem', 't7_1_18', 'ch7118'),
(1021, 'Biochem', 't7_1_6', 'ch716'),
(1022, 'Biochem', 't7_1_7', 'ch717'),
(1140, 'Sopharma', 't2_2_1', 'ch221'),
(1141, 'Sopharma', 't2_3_1', 'ch231'),
(1142, 'Sopharma', 't2_5_4', 'ch254'),
(1143, 'Sopharma', 't3_1_1', 'ch311'),
(1144, 'Sopharma', 't3_1_5', 'ch315'),
(1145, 'Sopharma', 't3_1_6', 'ch316'),
(1146, 'Sopharma', 't3_3_1', 'ch331'),
(1147, 'Sopharma', 't3_3_4', 'ch334'),
(1148, 'Sopharma', 't3_4_1', 'ch341'),
(1149, 'Sopharma', 't3_4_2', 'ch342'),
(1150, 'Sopharma', 't3_5_1', 'ch351'),
(1151, 'Sopharma', 't3_6_1', 'ch361'),
(1152, 'Sopharma', 't3_7_1', 'ch371'),
(1153, 'Sopharma', 't3_7_2', 'ch372'),
(1154, 'Sopharma', 't3_7_3', 'ch373'),
(1155, 'Sopharma', 't4_1_1', 'ch411'),
(1156, 'Sopharma', 't4_1_2', 'ch412'),
(1157, 'Sopharma', 't4_2_1', 'ch421'),
(1158, 'Sopharma', 't4_2_2', 'ch422'),
(1159, 'Sopharma', 't4_2_3', 'ch423'),
(1160, 'Sopharma', 't4_2_5', 'ch425'),
(1161, 'Sopharma', 't4_3_1', 'ch431'),
(1162, 'Sopharma', 't4_3_2', 'ch432'),
(1163, 'Sopharma', 't4_3_3', 'ch433'),
(1164, 'Sopharma', 't4_3_4', 'ch434'),
(1165, 'Sopharma', 't4_4_2', 'ch442'),
(1166, 'Sopharma', 't5_1_3', 'ch513'),
(1167, 'Sopharma', 't5_1_4', 'ch514'),
(1168, 'Sopharma', 't5_1_5', 'ch515'),
(1169, 'Sopharma', 't5_3_2', 'ch111'),
(1170, 'Sopharma', 't5_4_1', 'ch541'),
(1171, 'Sopharma', 't5_4_2', 'ch542'),
(1172, 'Sopharma', 't6_1_1', 'ch611'),
(1173, 'Sopharma', 't6_1_2', 'ch612'),
(1174, 'Sopharma', 't6_2_2', 'ch622'),
(1175, 'Sopharma', 't6_2_3', 'ch623'),
(1176, 'Sopharma', 't6_2_4', 'ch624'),
(1177, 'Sopharma', 't6_3_1', 'ch631'),
(1178, 'Sopharma', 't6_3_5', 'ch635'),
(1179, 'Sopharma', 't6_4_1', 'ch641'),
(1180, 'Sopharma', 't6_4_3', 'ch643'),
(1181, 'Sopharma', 't6_5_1', 'ch651'),
(1182, 'Sopharma', 't6_5_2', 'ch652'),
(1183, 'Sopharma', 't6_5_3', 'ch653'),
(1184, 'Sopharma', 't6_5_4', 'ch654'),
(1185, 'Sopharma', 't6_5_5', 'ch655'),
(1186, 'Sopharma', 't7_1_10', 'ch7110'),
(1187, 'Sopharma', 't7_1_11', 'ch7111'),
(1188, 'Sopharma', 't7_1_12', 'ch7112'),
(1189, 'Sopharma', 't7_1_13', 'ch7113'),
(1190, 'Sopharma', 't7_1_15', 'ch7115'),
(1191, 'Sopharma', 't7_1_16', 'ch7116'),
(1192, 'Sopharma', 't7_1_18', 'ch7118'),
(1193, 'Sopharma', 't7_1_19', 'ch7119'),
(1194, 'Sopharma', 't7_1_2', 'ch712'),
(1195, 'Sopharma', 't7_1_3', 'ch713'),
(1196, 'Sopharma', 't7_1_4', 'ch714'),
(1197, 'Sopharma', 't7_1_5', 'ch715'),
(1198, 'Sopharma', 't7_1_6', 'ch716'),
(1199, 'Sopharma', 't7_1_7', 'ch717'),
(1200, 'Sopharma', 't7_1_8', 'ch718'),
(1201, 'Sees', 't3_7_1', 'ch371'),
(1202, 'Sees', 't6_2_3', 'ch623'),
(1203, 'Sees', 't6_3_3', 'ch633'),
(1204, 'Sees', 't6_3_4', 'ch634'),
(1205, 'Sees', 't7_1_10', 'ch7110'),
(1211, 'Solib', 't3_1_1', 'ch311'),
(1212, 'Solib', 't3_1_2', 'ch312'),
(1213, 'Solib', 't3_1_3', 'ch313'),
(1214, 'Solib', 't3_1_4', 'ch314'),
(1215, 'Solib', 't3_1_5', 'ch315'),
(1216, 'Solib', 't3_1_6', 'ch316'),
(1217, 'Solib', 't3_2_2', 'ch322'),
(1218, 'Solib', 't3_2_3', 'ch323'),
(1219, 'Solib', 't3_3_1', 'ch331'),
(1220, 'Solib', 't3_3_2', 'ch332'),
(1221, 'Solib', 't3_3_3', 'ch333'),
(1222, 'Solib', 't3_3_4', 'ch334'),
(1223, 'Solib', 't3_4_1', 'ch341'),
(1224, 'Solib', 't3_4_2', 'ch342'),
(1225, 'Solib', 't3_4_3', 'ch343'),
(1226, 'Solib', 't3_4_4', 'ch344'),
(1227, 'Solib', 't3_4_7', 'ch347'),
(1228, 'Solib', 't3_4_8', 'ch348'),
(1229, 'Solib', 't3_5_1', 'ch351'),
(1230, 'Solib', 't3_5_2', 'ch352'),
(1231, 'Solib', 't3_5_3', 'ch353'),
(1232, 'Solib', 't3_6_1', 'ch361'),
(1233, 'Solib', 't3_6_2', 'ch362'),
(1234, 'Solib', 't3_6_3', 'ch363'),
(1235, 'Solib', 't3_6_4', 'ch364'),
(1236, 'Solib', 't3_7_1', 'ch371'),
(1237, 'Solib', 't3_7_2', 'ch372'),
(1238, 'Solib', 't3_7_3', 'ch373'),
(1270, 'Sjmc', 't2_2_1', 'ch221'),
(1271, 'Sjmc', 't2_4_4', 'ch244'),
(1272, 'Sjmc', 't2_4_5', 'ch245'),
(1273, 'Sjmc', 't2_5_2', 'ch252'),
(1274, 'Sjmc', 't2_5_3', 'ch253'),
(1275, 'Sjmc', 't2_7_1', 'ch271'),
(1276, 'Sjmc', 't3_1_1', 'ch311'),
(1277, 'Sjmc', 't3_1_2', 'ch312'),
(1278, 'Sjmc', 't3_1_3', 'ch313'),
(1279, 'Sjmc', 't3_1_4', 'ch314'),
(1280, 'Sjmc', 't3_1_5', 'ch315'),
(1281, 'Sjmc', 't3_1_6', 'ch316'),
(1282, 'Sjmc', 't3_2_2', 'ch322'),
(1283, 'Sjmc', 't3_2_3', 'ch323'),
(1284, 'Sjmc', 't3_3_2', 'ch332'),
(1285, 'Sjmc', 't3_3_3', 'ch333'),
(1286, 'Sjmc', 't3_3_4', 'ch334'),
(1287, 'Sjmc', 't3_4_1', 'ch341'),
(1288, 'Sjmc', 't3_4_2', 'ch342'),
(1289, 'Sjmc', 't3_4_3', 'ch343'),
(1290, 'Sjmc', 't3_4_7', 'ch347'),
(1291, 'Sjmc', 't3_4_8', 'ch348'),
(1292, 'Sjmc', 't3_5_1', 'ch351'),
(1293, 'Sjmc', 't3_5_2', 'ch352'),
(1294, 'Sjmc', 't3_5_3', 'ch353'),
(1295, 'Sjmc', 't6_2_2', 'ch622'),
(1296, 'Sjmc', 't6_2_3', 'ch623'),
(1297, 'Sjmc', 't6_4_2', 'ch642'),
(1298, 'Sjmc', 't6_4_3', 'ch643'),
(1330, 'Socsit', 't2_2_3', 'ch223'),
(1331, 'Socsit', 't2_4_4', 'ch244'),
(1332, 'Socsit', 't2_4_5', 'ch245'),
(1333, 'Socsit', 't2_5_2', 'ch252'),
(1334, 'Socsit', 't2_5_3', 'ch253'),
(1335, 'Socsit', 't6_5_5', 'ch655'),
(1922, 'Doll', 't1_2_1', 'ch121'),
(1923, 'Doll', 't2_2_3', 'ch223'),
(1924, 'Doll', 't3_1_2', 'ch312'),
(1925, 'Doll', 't3_1_5', 'ch315'),
(1926, 'Doll', 't3_1_6', 'ch316'),
(1927, 'Doll', 't3_2_2', 'ch322'),
(1928, 'Doll', 't3_2_3', 'ch323'),
(1929, 'Doll', 't3_3_1', 'ch331'),
(1930, 'Doll', 't3_3_4', 'ch334'),
(1931, 'Doll', 't3_5_1', 'ch351'),
(1932, 'Doll', 't3_6_1', 'ch361'),
(1933, 'Doll', 't3_6_2', 'ch362'),
(1934, 'Doll', 't3_7_1', 'ch371'),
(1935, 'Doll', 't3_7_3', 'ch373'),
(1936, 'Doll', 't4_1_4', 'ch414'),
(1937, 'Doll', 't4_2_1', 'ch421'),
(1938, 'Doll', 't4_2_2', 'ch422'),
(1939, 'Doll', 't4_2_3', 'ch423'),
(1940, 'Doll', 't4_2_5', 'ch425'),
(1941, 'Doll', 't4_2_6', 'ch426'),
(1942, 'Doll', 't4_2_7', 'ch427'),
(1943, 'Doll', 't4_3_4', 'ch434'),
(1944, 'Doll', 't4_4_1', 'ch441'),
(1945, 'Doll', 't4_4_2', 'ch442'),
(1946, 'Doll', 't5_1_2', 'ch512'),
(1947, 'Doll', 't5_1_3', 'ch513'),
(1948, 'Doll', 't5_1_4', 'ch514'),
(1949, 'Doll', 't5_1_5', 'ch515'),
(1950, 'Doll', 't5_1_6', 'ch516'),
(1951, 'Doll', 't5_2_3', 'ch523'),
(1952, 'Doll', 't5_3_2', 'ch111'),
(1953, 'Doll', 't5_4_2', 'ch542'),
(1954, 'Doll', 't5_4_3', 'ch543'),
(1955, 'Doll', 't6_1_1', 'ch611'),
(1956, 'Doll', 't6_1_2', 'ch612'),
(1957, 'Doll', 't6_2_1', 'ch621'),
(1958, 'Doll', 't6_2_2', 'ch622'),
(1959, 'Doll', 't6_2_3', 'ch623'),
(1960, 'Doll', 't6_2_4', 'ch624'),
(1961, 'Doll', 't6_3_1', 'ch631'),
(1962, 'Doll', 't6_3_2', 'ch632'),
(1963, 'Doll', 't6_3_5', 'ch635'),
(1964, 'Doll', 't6_4_1', 'ch641'),
(1965, 'Doll', 't6_4_2', 'ch642'),
(1966, 'Doll', 't6_4_3', 'ch643'),
(1967, 'Doll', 't6_5_1', 'ch651'),
(1968, 'Doll', 't6_5_2', 'ch652'),
(1969, 'Doll', 't6_5_3', 'ch653'),
(1970, 'Doll', 't6_5_4', 'ch654'),
(1971, 'Doll', 't6_5_5', 'ch655'),
(1972, 'Doll', 't7_1_1', 'ch711'),
(1973, 'Doll', 't7_1_10', 'ch7110'),
(1974, 'Doll', 't7_1_11', 'ch7111'),
(1975, 'Doll', 't7_1_12', 'ch7112'),
(1976, 'Doll', 't7_1_14', 'ch7114'),
(1977, 'Doll', 't7_1_15', 'ch7115'),
(1978, 'Doll', 't7_1_16', 'ch7116'),
(1979, 'Doll', 't7_1_18', 'ch7118'),
(1980, 'Doll', 't7_1_19', 'ch7119'),
(1981, 'Doll', 't7_1_2', 'ch712'),
(1982, 'Doll', 't7_1_3', 'ch713'),
(1983, 'Doll', 't7_1_4', 'ch714'),
(1984, 'Doll', 't7_1_6', 'ch716'),
(1985, 'Doll', 't7_1_8', 'ch718'),
(1986, 'Doll', 't7_1_9', 'ch719'),
(2001, 'Soedu', 't3_1_1', 'ch311'),
(2002, 'Soedu', 't3_1_2', 'ch312'),
(2003, 'Soedu', 't3_1_3', 'ch313'),
(2004, 'Soedu', 't3_1_5', 'ch315'),
(2005, 'Soedu', 't3_1_6', 'ch316'),
(2006, 'Soedu', 't3_2_2', 'ch322'),
(2007, 'Soedu', 't3_2_3', 'ch323'),
(2008, 'Soedu', 't3_3_1', 'ch331'),
(2009, 'Soedu', 't3_3_2', 'ch332'),
(2010, 'Soedu', 't3_3_3', 'ch333'),
(2011, 'Soedu', 't3_3_4', 'ch334'),
(2012, 'Soedu', 't3_4_1', 'ch341'),
(2013, 'Soedu', 't3_4_2', 'ch342'),
(2014, 'Soedu', 't3_4_3', 'ch343'),
(2015, 'Soedu', 't3_4_7', 'ch347'),
(2016, 'Soedu', 't3_4_8', 'ch348'),
(2017, 'Soedu', 't3_5_1', 'ch351'),
(2018, 'Soedu', 't3_5_2', 'ch352'),
(2019, 'Soedu', 't3_5_3', 'ch353'),
(2020, 'Soedu', 't3_6_2', 'ch362'),
(2021, 'Soedu', 't3_7_1', 'ch371'),
(2022, 'Soedu', 't3_7_3', 'ch373'),
(2023, 'Soedu', 't4_2_2', 'ch422'),
(2024, 'Soedu', 't4_2_3', 'ch423'),
(2025, 'Soedu', 't4_4_1', 'ch441'),
(2026, 'Soedu', 't5_1_2', 'ch512'),
(2027, 'Soedu', 't5_1_3', 'ch513'),
(2028, 'Soedu', 't5_1_4', 'ch514'),
(2029, 'Soedu', 't5_1_5', 'ch515'),
(2030, 'Soedu', 't5_3_2', 'ch111'),
(2031, 'Soedu', 't5_4_1', 'ch541'),
(2032, 'Soedu', 't5_4_3', 'ch543'),
(2033, 'Soedu', 't6_1_1', 'ch611'),
(2034, 'Soedu', 't6_2_2', 'ch622'),
(2035, 'Soedu', 't6_2_3', 'ch623'),
(2036, 'Soedu', 't6_3_1', 'ch631'),
(2037, 'Soedu', 't6_3_2', 'ch632'),
(2038, 'Soedu', 't6_3_3', 'ch633'),
(2039, 'Soedu', 't6_4_1', 'ch641'),
(2040, 'Soedu', 't6_4_2', 'ch642'),
(2041, 'Soedu', 't6_5_3', 'ch653'),
(2042, 'Soedu', 't6_5_5', 'ch655'),
(2043, 'Soedu', 't7_1_10', 'ch7110'),
(2044, 'Soedu', 't7_1_12', 'ch7112'),
(2045, 'Soedu', 't7_1_19', 'ch7119'),
(2046, 'Soedu', 't7_1_3', 'ch713'),
(2047, 'Soedu', 't7_1_4', 'ch714'),
(2048, 'Soedu', 't7_1_5', 'ch715'),
(2049, 'Soedu', 't7_1_6', 'ch716'),
(2050, 'Soedu', 't7_1_7', 'ch717'),
(2051, 'Soedu', 't7_1_8', 'ch718'),
(2052, 'Asc', 't1_1_2', 'ch112'),
(2053, 'Asc', 't1_1_3', 'ch113'),
(2054, 'Asc', 't1_2_1', 'ch121'),
(2055, 'Asc', 't1_2_2', 'ch122'),
(2056, 'Asc', 't1_3_2', 'ch132'),
(2057, 'Asc', 't1_3_4', 'ch134'),
(2058, 'Asc', 't1_4_2', 'ch142'),
(2059, 'Asc', 't2_1_2', 'ch212'),
(2060, 'Asc', 't2_1_3', 'ch213'),
(2061, 'Asc', 't2_2_1', 'ch221'),
(2062, 'Asc', 't2_2_2', 'ch222'),
(2063, 'Asc', 't2_2_3', 'ch223'),
(2064, 'Asc', 't2_3_2', 'ch232'),
(2065, 'Asc', 't2_3_3', 'ch233'),
(2066, 'Asc', 't2_4_4', 'ch244'),
(2067, 'Asc', 't2_5_1', 'ch251'),
(2068, 'Asc', 't2_5_2', 'ch252'),
(2069, 'Asc', 't2_5_3', 'ch253'),
(2070, 'Asc', 't2_5_4', 'ch254'),
(2071, 'Asc', 't2_5_5', 'ch255'),
(2072, 'Asc', 't2_6_2', 'ch262'),
(2073, 'Asc', 't2_6_3', 'ch263'),
(2074, 'Asc', 't2_7_1', 'ch271'),
(2075, 'Asc', 't3_1_1', 'ch311'),
(2076, 'Asc', 't3_1_2', 'ch312'),
(2077, 'Asc', 't3_1_3', 'ch313'),
(2078, 'Asc', 't3_1_4', 'ch314'),
(2079, 'Asc', 't3_1_5', 'ch315'),
(2080, 'Asc', 't3_1_6', 'ch316'),
(2081, 'Asc', 't3_2_2', 'ch322'),
(2082, 'Asc', 't3_2_3', 'ch323'),
(2083, 'Asc', 't3_3_1', 'ch331'),
(2084, 'Asc', 't3_3_2', 'ch332'),
(2085, 'Asc', 't3_3_3', 'ch333'),
(2086, 'Asc', 't3_3_4', 'ch334'),
(2087, 'Asc', 't3_4_1', 'ch341'),
(2088, 'Asc', 't3_4_2', 'ch342'),
(2089, 'Asc', 't3_4_3', 'ch343'),
(2090, 'Asc', 't3_4_4', 'ch344'),
(2091, 'Asc', 't3_4_7', 'ch347'),
(2092, 'Asc', 't3_4_8', 'ch348'),
(2093, 'Asc', 't3_5_1', 'ch351'),
(2094, 'Asc', 't3_5_2', 'ch352'),
(2095, 'Asc', 't3_5_3', 'ch353'),
(2096, 'Asc', 't3_6_1', 'ch361'),
(2097, 'Asc', 't3_6_2', 'ch362'),
(2098, 'Asc', 't3_6_3', 'ch363'),
(2099, 'Asc', 't3_6_4', 'ch364'),
(2100, 'Asc', 't3_7_1', 'ch371'),
(2101, 'Asc', 't3_7_2', 'ch372'),
(2102, 'Asc', 't3_7_3', 'ch373'),
(2103, 'Asc', 't4_1_2', 'ch412'),
(2104, 'Asc', 't4_1_4', 'ch414'),
(2105, 'Asc', 't4_2_2', 'ch422'),
(2106, 'Asc', 't4_2_6', 'ch426'),
(2107, 'Asc', 't4_2_7', 'ch427'),
(2108, 'Asc', 't4_3_2', 'ch432'),
(2109, 'Asc', 't4_3_4', 'ch434'),
(2110, 'Asc', 't4_4_2', 'ch442'),
(2111, 'Asc', 't5_1_1', 'ch511'),
(2112, 'Asc', 't5_1_2', 'ch512'),
(2113, 'Asc', 't5_1_3', 'ch513'),
(2114, 'Asc', 't5_1_4', 'ch514'),
(2115, 'Asc', 't5_1_5', 'ch515'),
(2116, 'Asc', 't5_1_6', 'ch516'),
(2117, 'Asc', 't5_2_1', 'ch521'),
(2118, 'Asc', 't5_2_2', 'ch522'),
(2119, 'Asc', 't5_2_3', 'ch523'),
(2120, 'Asc', 't5_3_1', 'ch531'),
(2121, 'Asc', 't5_3_2', 'ch111'),
(2122, 'Asc', 't5_3_3', 'ch533'),
(2123, 'Asc', 't5_4_1', 'ch541'),
(2124, 'Asc', 't5_4_2', 'ch542'),
(2125, 'Asc', 't5_4_3', 'ch543'),
(2126, 'Asc', 't6_1_1', 'ch611'),
(2127, 'Asc', 't6_1_2', 'ch612'),
(2128, 'Asc', 't6_2_1', 'ch621'),
(2129, 'Asc', 't6_2_2', 'ch622'),
(2130, 'Asc', 't6_2_3', 'ch623'),
(2131, 'Asc', 't6_2_4', 'ch624'),
(2132, 'Asc', 't6_3_1', 'ch631'),
(2133, 'Asc', 't6_3_2', 'ch632'),
(2134, 'Asc', 't6_4_2', 'ch642'),
(2135, 'Asc', 't6_4_3', 'ch643'),
(2136, 'Asc', 't6_5_1', 'ch651'),
(2137, 'Asc', 't6_5_2', 'ch652'),
(2138, 'Asc', 't6_5_3', 'ch653'),
(2139, 'Asc', 't6_5_4', 'ch654'),
(2140, 'Asc', 't6_5_5', 'ch655'),
(2141, 'Asc', 't7_1_10', 'ch7110'),
(2142, 'Asc', 't7_1_11', 'ch7111'),
(2143, 'Asc', 't7_1_12', 'ch7112'),
(2144, 'Asc', 't7_1_13', 'ch7113'),
(2145, 'Asc', 't7_1_14', 'ch7114'),
(2146, 'Asc', 't7_1_15', 'ch7115'),
(2147, 'Asc', 't7_1_16', 'ch7116'),
(2148, 'Asc', 't7_1_17', 'ch7117'),
(2149, 'Asc', 't7_1_18', 'ch7118'),
(2150, 'Asc', 't7_1_2', 'ch712'),
(2151, 'Asc', 't7_1_3', 'ch713'),
(2152, 'Asc', 't7_1_4', 'ch714'),
(2153, 'Asc', 't7_1_5', 'ch715'),
(2154, 'Asc', 't7_1_6', 'ch716'),
(2155, 'Asc', 't7_1_8', 'ch718'),
(2156, 'Asc', 't7_1_9', 'ch719'),
(2207, 'Soex', 't1_3_1', 'ch131'),
(2208, 'Soex', 't1_3_2', 'ch132'),
(2209, 'Soex', 't2_5_4', 'ch254'),
(2210, 'Soex', 't2_5_5', 'ch255'),
(2211, 'Soex', 't3_1_5', 'ch315'),
(2212, 'Soex', 't3_3_2', 'ch332'),
(2213, 'Soex', 't3_4_8', 'ch348'),
(2214, 'Soex', 't3_5_1', 'ch351'),
(2215, 'Soex', 't4_2_2', 'ch422'),
(2216, 'Soex', 't4_2_3', 'ch423'),
(2217, 'Soex', 't4_2_5', 'ch425'),
(2218, 'Soex', 't4_2_6', 'ch426'),
(2219, 'Soex', 't4_3_1', 'ch431'),
(2220, 'Soex', 't5_1_5', 'ch515'),
(2221, 'Soex', 't5_3_2', 'ch111'),
(2222, 'Soex', 't5_4_1', 'ch541'),
(2223, 'Soex', 't6_2_2', 'ch622'),
(2224, 'Soex', 't6_2_3', 'ch623'),
(2225, 'Soex', 't6_3_1', 'ch631'),
(2226, 'Soex', 't6_4_1', 'ch641'),
(2227, 'Soex', 't6_5_3', 'ch653'),
(2228, 'Soex', 't6_5_4', 'ch654'),
(2229, 'Soex', 't6_5_5', 'ch655'),
(2281, 'Solang', 't1_3_1', 'ch131'),
(2282, 'Solang', 't1_3_4', 'ch134'),
(2283, 'Solang', 't2_4_4', 'ch244'),
(2284, 'Solang', 't3_1_2', 'ch312'),
(2285, 'Solang', 't3_1_3', 'ch313'),
(2286, 'Solang', 't3_1_5', 'ch315'),
(2287, 'Solang', 't3_1_6', 'ch316'),
(2288, 'Solang', 't3_2_2', 'ch322'),
(2289, 'Solang', 't3_2_3', 'ch323'),
(2290, 'Solang', 't3_3_1', 'ch331'),
(2291, 'Solang', 't3_3_2', 'ch332'),
(2292, 'Solang', 't3_3_3', 'ch333'),
(2293, 'Solang', 't3_3_4', 'ch334'),
(2294, 'Solang', 't3_4_1', 'ch341'),
(2295, 'Solang', 't3_4_2', 'ch342'),
(2296, 'Solang', 't3_4_3', 'ch343'),
(2297, 'Solang', 't3_4_7', 'ch347'),
(2298, 'Solang', 't3_4_8', 'ch348'),
(2299, 'Solang', 't3_5_1', 'ch351'),
(2300, 'Solang', 't3_5_2', 'ch352'),
(2301, 'Solang', 't3_5_3', 'ch353'),
(2302, 'Solang', 't3_6_2', 'ch362'),
(2303, 'Solang', 't3_7_1', 'ch371'),
(2304, 'Solang', 't3_7_3', 'ch373'),
(2305, 'Solang', 't5_2_2', 'ch522'),
(2306, 'Solang', 't5_4_1', 'ch541'),
(2307, 'Solang', 't5_4_2', 'ch542'),
(2308, 'Solang', 't5_4_3', 'ch543'),
(2309, 'Solang', 't6_2_2', 'ch622'),
(2310, 'Solang', 't6_2_3', 'ch623'),
(2311, 'Solang', 't6_3_1', 'ch631'),
(2312, 'Solang', 't6_3_2', 'ch632'),
(2313, 'Solang', 't6_3_3', 'ch633'),
(2314, 'Solang', 't6_3_4', 'ch634'),
(2315, 'Solang', 't6_3_5', 'ch635'),
(2316, 'Solang', 't6_4_1', 'ch641'),
(2317, 'Solang', 't6_4_3', 'ch643'),
(2318, 'Solang', 't7_1_1', 'ch711'),
(2319, 'Solang', 't7_1_11', 'ch7111'),
(2320, 'Solang', 't7_1_12', 'ch7112'),
(2321, 'Solang', 't7_1_14', 'ch7114'),
(2322, 'Solang', 't7_1_15', 'ch7115'),
(2323, 'Solang', 't7_1_16', 'ch7116'),
(2324, 'Solang', 't7_1_18', 'ch7118'),
(2325, 'Solang', 't7_1_19', 'ch7119'),
(2326, 'Solang', 't7_1_3', 'ch713'),
(2327, 'Solang', 't7_1_4', 'ch714'),
(2328, 'Solang', 't7_1_5', 'ch715'),
(2329, 'Solang', 't7_1_8', 'ch718'),
(2330, 'Solang', 't7_2_1', 'ch721'),
(2331, 'Ddukkdavv', 't1_2_2', 'ch122'),
(2332, 'Ddukkdavv', 't2_1_1', 'ch211'),
(2333, 'Ddukkdavv', 't2_2_3', 'ch223'),
(2334, 'Ddukkdavv', 't2_3_3', 'ch233'),
(2335, 'Ddukkdavv', 't2_4_1', 'ch241'),
(2336, 'Ddukkdavv', 't2_4_2', 'ch242'),
(2337, 'Ddukkdavv', 't2_4_3', 'ch243'),
(2338, 'Ddukkdavv', 't2_4_4', 'ch244'),
(2339, 'Ddukkdavv', 't2_4_5', 'ch245'),
(2340, 'Ddukkdavv', 't3_1_1', 'ch311'),
(2341, 'Ddukkdavv', 't3_1_2', 'ch312'),
(2342, 'Ddukkdavv', 't3_1_3', 'ch313'),
(2343, 'Ddukkdavv', 't3_1_4', 'ch314'),
(2344, 'Ddukkdavv', 't3_1_5', 'ch315'),
(2345, 'Ddukkdavv', 't3_1_6', 'ch316'),
(2346, 'Ddukkdavv', 't3_2_2', 'ch322'),
(2347, 'Ddukkdavv', 't3_2_3', 'ch323'),
(2348, 'Ddukkdavv', 't3_3_1', 'ch331'),
(2349, 'Ddukkdavv', 't3_3_2', 'ch332'),
(2350, 'Ddukkdavv', 't3_3_3', 'ch333'),
(2351, 'Ddukkdavv', 't3_3_4', 'ch334'),
(2352, 'Ddukkdavv', 't3_4_1', 'ch341'),
(2353, 'Ddukkdavv', 't3_4_2', 'ch342'),
(2354, 'Ddukkdavv', 't3_4_3', 'ch343'),
(2355, 'Ddukkdavv', 't3_4_4', 'ch344'),
(2356, 'Ddukkdavv', 't3_4_5', 'ch345'),
(2357, 'Ddukkdavv', 't3_4_6', 'ch346'),
(2358, 'Ddukkdavv', 't3_4_6b', 'ch346b'),
(2359, 'Ddukkdavv', 't3_4_6c', 'ch346c'),
(2360, 'Ddukkdavv', 't3_4_7', 'ch347'),
(2361, 'Ddukkdavv', 't3_4_8', 'ch348'),
(2362, 'Ddukkdavv', 't3_5_1', 'ch351'),
(2363, 'Ddukkdavv', 't3_5_2', 'ch352'),
(2364, 'Ddukkdavv', 't3_5_3', 'ch353'),
(2365, 'Ddukkdavv', 't3_6_2', 'ch362'),
(2366, 'Ddukkdavv', 't3_6_3', 'ch363'),
(2367, 'Ddukkdavv', 't3_7_1', 'ch371'),
(2368, 'Ddukkdavv', 't3_7_3', 'ch373'),
(2369, 'Ddukkdavv', 't4_2_1', 'ch421'),
(2370, 'Ddukkdavv', 't4_2_2', 'ch422'),
(2371, 'Ddukkdavv', 't4_2_3', 'ch423'),
(2372, 'Ddukkdavv', 't4_2_4', 'ch424'),
(2373, 'Ddukkdavv', 't4_2_5', 'ch425'),
(2374, 'Ddukkdavv', 't4_2_6', 'ch426'),
(2375, 'Ddukkdavv', 't4_2_7', 'ch427'),
(2376, 'Ddukkdavv', 't4_3_4', 'ch434'),
(2377, 'Ddukkdavv', 't4_4_1', 'ch441'),
(2378, 'Ddukkdavv', 't4_4_2', 'ch442'),
(2379, 'Ddukkdavv', 't5_1_2', 'ch512'),
(2380, 'Ddukkdavv', 't5_1_4', 'ch514'),
(2381, 'Ddukkdavv', 't5_1_5', 'ch515'),
(2382, 'Ddukkdavv', 't5_3_1', 'ch531'),
(2383, 'Ddukkdavv', 't5_3_2', 'ch111'),
(2384, 'Ddukkdavv', 't5_3_3', 'ch533'),
(2385, 'Ddukkdavv', 't5_4_2', 'ch542'),
(2386, 'Ddukkdavv', 't6_2_3', 'ch623'),
(2387, 'Ddukkdavv', 't6_3_2', 'ch632'),
(2388, 'Ddukkdavv', 't6_4_1', 'ch641'),
(2389, 'Ddukkdavv', 't6_4_2', 'ch642'),
(2390, 'Ddukkdavv', 't6_5_1', 'ch651'),
(2391, 'Ddukkdavv', 't6_5_2', 'ch652'),
(2392, 'Ddukkdavv', 't6_5_3', 'ch653'),
(2393, 'Ddukkdavv', 't6_5_4', 'ch654'),
(2394, 'Ddukkdavv', 't6_5_5', 'ch655'),
(2395, 'Ddukkdavv', 't7_1_14', 'ch7114'),
(2396, 'Ddukkdavv', 't7_1_8', 'ch718'),
(2397, 'Ddukkdavv', 't7_1_9', 'ch719'),
(2398, 'Ietdavv', 't3_1_5', 'ch315'),
(2399, 'Ietdavv', 't3_1_6', 'ch316'),
(2400, 'Ietdavv', 't3_3_2', 'ch332'),
(2401, 'Ietdavv', 't3_5_2', 'ch352'),
(2402, 'Ietdavv', 't3_5_3', 'ch353'),
(2403, 'Ietdavv', 't4_3_4', 'ch434'),
(2404, 'Ietdavv', 't5_1_4', 'ch514'),
(2405, 'Ietdavv', 't5_1_5', 'ch515'),
(2406, 'Ietdavv', 't5_3_1', 'ch531'),
(2407, 'Ietdavv', 't5_4_2', 'ch542'),
(2408, 'Ietdavv', 't6_2_2', 'ch622'),
(2409, 'Ietdavv', 't6_3_1', 'ch631'),
(2410, 'Ietdavv', 't6_4_1', 'ch641'),
(2411, 'Ietdavv', 't6_4_2', 'ch642'),
(2412, 'Ietdavv', 't7_1_1', 'ch711');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `Username` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL DEFAULT '',
  `Prog_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `superuser` int NOT NULL,
  `admin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_department`
--

CREATE TABLE `sub_department` (
  `id` int NOT NULL,
  `Username` varchar(100) NOT NULL,
  `sub_dept` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `superusers`
--

CREATE TABLE `superusers` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sno` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Username` varchar(30) NOT NULL DEFAULT '',
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_1_1`
--

INSERT INTO `t1_1_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('', '', '', ''),
('admin1', 'asddv+++%5C%22%5C%22+%5C%22dksmfd%3F%3E%3C%23%24%40', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F27-10-2018_15-23-48elipsom'),
('admin2', 'data+++%26+m-per+%3C+%3E+%3F+%23+%25+%5C%27+%5C%22i+am+govind%5C%22+send', '', 'google+%5C%27+i+am+govind%5C%27'),
('admin7', 'google%0Adata', '', 'dshkljdssjkd'),
('biochem', 'School+of+Biochemistry+offers+M.Sc.+%28BC5A%29+and+Ph.+D.+%28BZ9A%29+Programmes.+The+M.Sc.+course+is+completed+in+two+years+involving+four+semesters+with+academic+flexibility+following+choice+based+credit+system.+The+M.Sc.+Biochemistry+curriculum+design+is+well+balanced+and+broad+based+for+its+applicability+to+other+disciplines%2C+which+require+biochemistry+background.+The+syllabus+covers+all+the+major+areas+of+biochemistry+which+includes+basic%2C+advanced+as+well+as+specialized+courses.+Knowledge+of+the+basic+core+courses%2C+like+Chemistry+of+biomolecules%2C+Cell+biology%2C+Analytical+biochemistry%2C+Metabolism+etc+develops+concepts+of+biochemistry+and+trains+the+learner+to+work+in+the+research+laboratories+and+research+and+development+sections+of+industries.+The+generic+courses%2C+like+Genetics%2C+Microbial+biochemistry%2C+Nutritional+biochemistry%2C+Physiology%2C+Clinical+biochemistry+etc+provide+the+knowledge+of+biochemistry+related+disciplines+such+as%2C+industrial+and+medicinal+fields.+The+other+core+courses+Enzymology%2C+Immunology%2C+Molecular+Biology%2C+Biotechnology+covered+in+the+curriculum+have+applicability+in+almost+all+the+research+laboratories+and+industries.+The+detailed+coverage+of+various+topics+is+being+inline+for+competitive+exams%2C+as+NET%2C+GATE%2C+SLET%2C+National+level+Examinations+for+JRF+etc.+that+benefits+students.+To+develop+soft+skill%2C+students+presents+seminar+on+research+papers.++For+research+skill+development%2C+students+join+various+national+level+institutes+for+their+research+project+work+during+final+semester.+After+successful+course+completion%2C+students+find+opportunities+to+join+research+or+serve+in+different+fields%2C+in+particular+Medical%2C+Agricultural%2C+Pharmaceutical%2C+Biological%2C+Food+Analysis+etc.+++', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F30-10-2018_13-04-07Write+up+for+DCS+QlM+1.1.1.docx'),
('chemsc', 'Programme+outcomes+%28POs%29++++++Learning+objectives+of+School+of+Chemical+Sciences+essentially+focus+on+creative+learning+of+the+students+with+a+view+to+empower+them+with+contemporary+knowledge+domain+so+as+to+enhance+connectivity+thereof+towards+academic+and+industrial+institutions.+Programme+outcomes+basically+aim+at+incorporation+of+chemical+sciences+in+the+mindset+of+students+in+an+embedded+state.+With+such+association%2C+students+are+expected+to+improve+their+critical+thinking%2C+accommodating+both+logical+and+intuitive+approaches.+With+immense+association+of+scientific+approaches%2C+new+ideas+may+creep+in+the+mind+of+students+so+that+they+can+evolve+innovative+pathways.+Programme+specific+outcomes+%28PSOs%29+-Programme+specific+outcomes+pertain+to+exploration+of+knowledge+of+chemical+sciences+with+related+disciplines+in+particular+knowledge+of+synthetic+methods%2C+knowledge+and+application+of+analytical+techniques+with+specific+orientation+to+pharmaceutical+industries.+Course+outcomes+%28COs%29+%C3%A2%E2%82%AC%E2%80%9C++Course+outcomes+essentially+envision+diverse+aspects+of+chemical+sciences.+They+provide+due+priority+to+classification+mindset+rather+than+compartmentalization+mindset+and+interdependence+of+one+segment+over+the+other.+Consequently%2C+students+orient+themselves+as+pro-active+learners+with+high+priority+on+modern+areas+of+chemical+sciences+including+spectroscopic+techniques%2C+chromatographic+techniques+and+medicinal+chemistry%2C+thereby+enhancing+their+problem-+solving+skills.+Spectral+interpretation+indeed+is+a+unique+practice+prevalent+in+School+of+Chemical+Sciences.+Students+are+encouraged+to+adopt+GREEN+CHEMISTRY+whenever+possible+with+a+sound+objective+of+ensuring+environmentally+sustainable+approach+towards+society.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fchemsc_03-12-2018_22-12-091.1.1PO%2CPSO+%26CO.docx'),
('ddukkdavv', 'The+current+skill+development+landscape+of+the+country+has+its+inherent+deficiencies+due+to+dealing+between+the+skill+taught+in+institution+and+the+requirements+of+industries.+In+order+to+ensure+that+the+graduates+possess+adequate+knowledge+and+skills+for+employment+and+entrepreneurship%2C+The+higher+education+system+needs+to+incorporate+the+skill+requirement+of+industries+from+various+sectors+in+its+curriculum+in+an+innovative+and+flexible+manner.%0AIn+the+view+of+this%2C+Deen+Dayal+Udadhyay+Kaushal+Kendra+%28DDU-KK%29%2C+a+UGC+scheme++for+skill+development+has+been+established+in+DAVV+Indore+and+is+responsible+to+impart+education+to+the+youngsters+from+the+diversified+regions+so+as+to+satisfy+the+need+of+industries+around+the+city.+Board+of+Management+%28BOM%29+has+been+established+as+per+UGC+norms+and+meetings+were+held+to+decide+about+the+key+components+of+outcome+based+educationa+at+DDU-KK+such+as+Vision%2C+Mission%2C+Programme+Outcomes+and+Programme+Specific+Outcomes.+Also%2C++BOM+instructed+to+form+Board+of+Studies+%28BOS%29+as+per+the+norms+of+UGC+and+to+develop+the+course+curriculum+along+with+Course+Outcomes.%0A+The+curriculum+have+been+framed+with+Course+Outcomes+for+the+courses+allocated+by+UGC+to+DAVV+are+as+per+the+aforesaid+aim+of+UGC+and+developed++by+involving+the+stakeholders+such+as+Academicians%2C+Industry+Experts%2C+a+student+representative+in+this+venture.+%0A', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fddukkdavv_17-12-2018_14-07-221.1.1+Final.pdf'),
('doll', 'Mission+statement+of+the+department+definition+for+the+department%5C%27s+distinctive+characteristics+in+terms+of+addressing+the+needs+of+the+local+society%2C+the+students+it+seeks+to+serve%2C+the+institution%5C%27s+tradition+and+value+orientations+%2C+its+vision+for+future.+Bridging+the+gap+between+formal+and+non+formal+education.+Matching+educational+content+relevant+to+the+learners+and+community+needs.+Providing+vocational+and+creative+educational+training+programs+to+generate+employment+opportunities.+Department+strives+hard+to+provide+value+based+education+and+inculcate+in+students+strong+character%2C+attitude+of+self+-+learning+creativity+etc.+to+match+the+needs+of+global+development.++', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F29-10-2018_12-35-33DID-+a-1.1.jpeg'),
('emrcdavv', 'Courses+are+sanctioned+and+approved+by+UGC%2C+New+Delhi.+At+present+more+than+255+students+are+studying+at+EMRC.+1.+M.Sc.+%28Electronic+Media%29+-+5+yrs.+Integrated+Course+%28B.Sc.+3+Yrs.+++M.Sc.+2+Yrs.%29+++++Seats%3A+50+nos.++++++++Eligibility%3A+Higher+Secondary+with+min.+50%25+of+marks+in+any+discipline.+Admission+through+Common+Entrance+Test+%28CET%292.+M.B.A.+Media+Management+%C3%A2%E2%82%AC%E2%80%9C+2+yrs.+Seats+%3A+40+nos.+++++++Eligibility+%3A+Graduation+with+minimum+50%25+of+marks+in+any+discipline.+++++++++Admission++through+Common+Entrance+Test+%28CET%293.+Ph.D.++Electronic+Media+Admission++through+Doctoral+Entrance+Test+%28DET%29-++Media+of+today+is+playing+an+outstanding+role+in+creating+and+shaping+of+public+opinion+and+strengthening+of+society.-+Entertainment+and+Media+industry+is+growing+at+a+rate+of+18%25+YOY+basis.+Hence%2C+there+is+large+demand+of+trained+media+professionals.-+Media+Course+are+designed+in+tune+with+the+local%2C+National%2C+International+and+Industrial+developmental+needs.+-+EMRC+has+well+defined+procedures+through+Ordinance+31+to+design+a+new+curriculum%2C+revise+and+amend+existing+ones.+-+The+core+areas+of+curriculum+covers+Television+Production%2C+Audio+Production%2C+Multimedia-Animation+%26+Graphics+Production%2C+Broadcast+++Journalism%2C+Advertising+%26+Public+Relations%2C+Literature+and+Dramatics%2C+Media+Management+and+Research.+-+The+programmes+are+designed+to+develop+confidence%2C+self-esteem%2C+communications+and+teamwork.+-+The+various+forms+of+media+%C3%A2%E2%82%AC%E2%80%9C+primarily+television%2C+newspapers%2C+digital+media+and+radio+%C3%A2%E2%82%AC%E2%80%9C+spread+and+disseminate+information.-+The+curriculum+is+updated+on+a+regular+frequency+based+on+the+feedback+received+from+Alumni%2C+Teachers%2C+Industry+Professional+and+other+stakeholders.+-+Departmental+committee+review+and+update+syllabus+every+year.-+The+system+is+adaptable+for+all+new+practices+coming+in+the+field+of+Media+and+Entertainment.+For+example+new+courses+like+Digital+Marketing%2C+Television+Programming%2C+Creative+Dramatics+and+Voice+acting+are+added+to+syllabus.-+Mandatory+courses+like+Communicative+Hindi+and+English+for+better+communication+skills+-+Mandatory+industrial+training%2Finternship+ensures+that+students+are+exposed+to+the+Industry+environment.+-+Compulsory+Master+Level+Research+dissertation.-+Courses+like+Media+and+Society%2C+Media+and+Politics%2C+Media+and+Literature%2C+Media+and+Psychology+for+better+understanding+of+the+society.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Femrcdavv_15-12-2018_20-00-35EMRC+Program+Outcome.pdf'),
('ietdavv', 'Institute+of+Engineering+%26+Technology%2C+a+University+teaching+Department+of+Devi+Ahilya+Vishwavidyalaya+popularly+known+as+IET-DAVV+has+been+established+1996.+It+is++in+the+forefront+imparting+high+quality+technical+education+and+is+one+among+the+top+two+Institutes+in+the+state+of+Madhya+Pradesh.+IET+offers+six+undergraduate+programs+and+seven+post+graduate++regular+programs.+All+regular+engineering+programs+are+approved+by+AICTE.+The+detail+of+Programs+is+as+follow%3A%0AUndergraduate+Programs%3A%0A1.%09Bachelor+of+Engineering+%28B.E%29+in+Mechanical+Engineering%0A2.%09Bachelor+of+Engineering+%28B.E%29+in+Computer+Engineering%0A3.%09Bachelor+of+Engineering+%28B.E%29+in+Electronics+and+Instrumentation+Engineering%0A4.%09Bachelor+of+Engineering+%28B.E%29+in+Information+Technology%0A5.%09Bachelor+of+Engineering+%28B.E%29+in+Electronics+and+Telecommunication+Engineering%0A6.%09Bachelor+of+Engineering+%28B.E%29+in+Civil+Engineering%0APostgraduate+Programs%3A%0A1.%09Master+of+Engineering+%28M.E%29+in+Computer+Engineering+with+specialization+in+Software+Engg.%0A2.%09Master+of+Engineering+%28M.E%29+in+Mechanical+Engineering+with+specialization+in+Design+and+Thermal+Engg.%0A3.%09Master+of+Engineering+%28M.E%29+in+Electronics+and+Instrumentation+Engineering+with+specialization+in+Digital+Instrumentation.%0A4.%09Master+of+Engineering+%28M.E%29+in+Electronics+and+Telecommunication+Engineering+with+specialization+in+Digital+Communication.%0A5.%09Master+of+Engineering+%28M.E%29+in+Information+Technology+with+specialization+in+Information+Technology.%0A6.%09Master+of+Engineering+%28M.E%29+in+Industrial+Engineering+and+Management%0A7.%09Master+of+Science+%28M.Sc%29+in+Applied+Mathematics+with+specialization+in+Computing+%26+Informatics+%0AIET+DAVV+adapted+the+program+outcomes+of+NBA.+Specific+program+outcomes+are+defined+for+each+program.+All+courses+have+defined+learning+objectives+and+learning+outcomes.+IET+DAVV+is+established+research+centre+with+Ph.D+programs+in+5+engineering+subjects.+All+UG%2FPG%2FDoctoral+programs+conducted++under+Faculty+of+Engineering+of+DAVV.+IET+also+offers+part+time+under+graduate+and+post+graduate+programs+in+some+branches+of+S+engineering.++IET+also+adapted+CBCS+scheme+from+academic+2015-16.+%0A', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fietdavv_07-12-2018_14-16-19Minutes+of+Dept+committee+about+syllabus.pdf'),
('iipsdavv', 'The+institute+provides+ample+opportunities+to+students+with+a+rigorous%2C+intellectually+challenging+curriculum+with+flexibility+to+allow+students+to+tailor+their+education+to+meet+their+professional+and+personal+interests+and+goals.+It+provides+a+collaborative+learning+environment+that+weaves+technology+and+management+into+everyday+life.+This+martinet+institute+offers+integrated+post-graduate+courses+in+the+fields+of+computer+and+management+which+students+join+directly+after+schooling.+Addition+to+that+institute+serves+specialized+courses+in+advertisement%2Ctourism+and+public+relations+management+as+well.+Students+of+this+institute+are+placed+in+the+best+companies+of+the+world.+Innovative+academic+programmes+offered+by+the+institute+incorporate+a+tradition+of+academic+excellence+and+experimental+learning+with+an+emphasis+on+team-work.+The+curriculum+of+various+programmes+develop+the+skills+needed+to+succeed+in+a+competitive+global+environment.++The+Institute+revised++courses+timely+as+per+industry+requirements+and+feedback+received+from+various+stakeholders.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fiipsdavv_22-12-2018_18-18-50all+ordinance+workshops+syllabus+etc.pdf'),
('imsdavv', 'Curriculum+is+the+essential+ingredient+of+all+programs+at+IMS%2C+DAVV.+All+aspects+like+teaching%2C+learning+and+evaluation+or+research+and+development%2C+infrastructure+and+learning+resources%2C+student+activities+and+support+system+revolve+around+it.+The+Learning+Outcomes+for+each+program+are+designed+so+as+to+be+appropriate+to+suite+the+local+as+well+as+National+developmental+needs.+The+learning+objectives+and+course+outcome+for+each+course+are+well+defined.+The+curriculum+is+revised+on+the+basis+of+feedback+received+from+-Faculty-Employers-Alumni-StudentsThere+is+ample+flexibility+to+revise+the+curriculum+as+all+the+programs+at+IMS+are+governed+by+ordinance+31+of+the+university+which+grants+flexibility+at+the+department+level.++The+syllabus+review+workshop+was+conducted+in+2013%2C+2017+and+2018+where+major+structural+changes+were+incorporated+in+each+syllabus.+In+the+years+2014%2C+2015+and+2016+minor+changes+were+made.+Each+program+is+designed+to+include+elements+which+can+promote+entrepreneurship%2C+employability+and+soft+skills+among+students.+Case+Studies%2C+Role+plays%2C+industry+visits%2C+seminars+projects+etc+are+an+essential+part+of+the+curriculum.+Apart+from+this+conduct+several+activities+which+help+in+enhancing+skills+and+subject+knowledge+of+MBA+students.+All+the+programs+at+IMS+are+approved+by+Board+of+Studies%2C+Faculty+of+Management%2C+DAVV+at+the+time+of+their+inception.+Thereafter+the+programs+are+governed+by+Ordinance+31of+the+University.+The+department+has+the+flexibility+to+revise+the+syllabus+and+course+contents%2C+which+is+done+through+regular+workshops+and+feedback+received+from+different+stakeholders+namely+industry%2C+students%2C+teachers%2C+parents%2C+and+alumni.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fimsdavv_06-12-2018_12-40-51IMS_Criteria+1.1.pdf'),
('pranjal', 'saif%40%23%26%28%29', '', 'oogle.cm'),
('sees', 'The+school+has+started+its+M.+Tech.+program+in+Energy+Management+in+the+year+1990.+Theprogram+has+been+duly+approved+by+the+AICTE%2C+New+Delhi.The+power+crisis+in+India+is+nothing+new+but+slowly+an+emerging+sector+islikely+to+put+an+end+to+this+long-dragging+issue+of+constant+power+cuts.+And+with+the+emergenceof+a+new+sector+comes+new+career+opportunities.+Green+energy+sector%2C+comprising+solar%2C+wind%2Chydel+and+bio-mass+power+generation%2C+is+becoming+a+lucrative+career+opportunity.+To+fill+up+thisgap+School+of+Energy+%26+Environmental+Studies+has+developed+a+two-year+M.Tech+Program+inEnergy+Management+area+that+is+flexible+and+can+be+self-paced.+The+curriculum+covers+subjectssuch+as+Solar+Energy%2C+New+%26+Renewable+Energy%2C+Engineering+Thermodynamics+%26+HeatTransfer%2C+Water+and+Waste+Water%2C+Air+and+Noise+Pollution%2C+Thermal+%26+Electrical+EnergyManagement%2C+Efficient+Lighting%2C+Green+Building%2C+Bio+and+Solid+Waste+Management%2C+Sustainabledevelopment.+The+capstone+of+the+program+is+a+project+work+in+last+semester+in+which+studentsapply+the+acquired+theoretical+knowledge+in+Energy+management+to+solve+real-world+Energy+%26Environment+problems+for+the+government+and+public+sector+.This+course+also+introducesstudents+to+various+forms+of+energy+and+their+importance+in+our+lives+and+for+the+development+ofour+nation.Objectives%3A+Energy+management+is+an+interdisciplinary+field+of+engineering+that+focuses+onthe+following+objectives%3A%26%2361623%3B+To+provide+trained+manpower+with+strong+engineering+and+R+%26+D+capabilities+in+theenergy+and+environment+related+areas.%26%2361623%3B+To+provide+Auditors%2F+Managers%2FConsultants+for+Energy+and+Environment.%26%2361623%3B+To+develop+and+promote+technologies+which+are+closer+to+natural+processes.%26%2361623%3B+To+provide+testing%2C+calibration+and+third+party+certification+facilities+to+industries+andother+organizations+in+the+field+of+Energy+and+Environment.%26%2361623%3B+To+train+manpower+for+developing+projects+specifically+related+to+Clean+DevelopmentMechanism+%28CDM%29.%26%2361623%3B+To+undertake+R%26+D+and+consultancy+work+in+the+energy+and+environment+related+fields.%26%2361623%3B+To+introduce+to+the+industry+various+environment+friendly+energy+efficient+technologiesand+provide+help+in+implementing+energy+conservation+measures.Program+Outcomes+%28POs%29%26%2361623%3B+Understood+and+acquired+fundamental+knowledge+on+the+science+of+energy+and+on+boththe+conventional+and+non-conventional+energy+technologies.%26%2361623%3B+Ability+for+higher+studies%2C+policy+making%2C+engineering+and+consultancy+services+in+field+ofenergy+management.Specific+Program+Outcomes+%28SPOs%29%26%2361623%3B+Acquire+the+expertise+and+skills+needed+for+the+energy+monitoring%2C+auditing+andmanagement%2C+and+for+the+development%2C+implementation%2C+and+maintenance+and+auditing+ofEnergy+Management+Systems.%26%2361623%3B+Become+capable+of+analysis+and+design+of+energy+conversion+systems.Course+OutcomesGaining+appropriate+knowledge+on+principles+of+operation%2C+construction+andworking+of+solar+photovoltaic%2C+solar+thermal+devices+and+other+renewable+energytechnologies.+Ability+to+design+system+for+appropriate+applications+in+the+field.+Becomingaware+of+the+energy+crisis%2C+and+of+environmental+and+sustainability+concerns+associated+withthe+energy+management.+Becoming+aware+of+the+Energy+Conservation+Act%2C+2001%2C+and+of+thelegal+energy+requirements+applicable+to+the+routinely+used+thermal+and+electrical+energysystems.+Exposure+to+the+most+used+energy+planning+and+management+softwares.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F29-10-2018_14-12-15pos-1.1.1.pdf'),
('sjmc', 'We+implemented++curricula+which+are+industry+linked%2C+academic+oriented+and+both+are+useful++for+the+present++generation+of+media+students.+.+The++course+includes+%0AA%29%09Subject+Orientation%0AB%29%09Interdisciplinary+background+%0AC%29%09Theoretical+Research+and+field+survey.%0A%0AWe+design+our+curricula+with+related+to+journalism+undergraduates+programmes+equipped+with+relevant+infrastructure.+We+take+the+consolidate+opinion+and+requirement+of+Media+industry++experts+regarding++expected+necessary+skills++and+qualifications+in+human++resources++%0AExisting+curricula+will+be+revised+either+by+regrouping+or+formulating+a+new+one%0A%0AThe+teaching-learning++programmes++organized+through+lectures%2C+tutorials%2C+practical%2C+projects%2C+presentations%2C+workshops%2C+seminars+and+symposium%2C+Internship%2C++hands-on+training+using+ICT+extensively.+Practical+sessions+are+incorporated+as+an+important+component+in+most+of+the+papers%2C+with+hands-on+training+with+use+of+various+equipment%2C+such+as+Audio-video%2C+Cameras%2C+Editing+Machines+etc.%0AProgram+outcome%0AJournalism+is+the+correspondence+of+information+between+the+news+and+the+general+population.+Journalism+is+fundamentally+founded+upon+standards+of+truth%2C+autonomy%2C+and+transparency.+Mass+communication+tools+such+as+radio%2C+TV%2C+portable%2C+web-based+social+networking+fall+within+the+purview+of+mass+communication.%0AA+journalist+or+writer+covers+relevant+information+or+data+related+to+business%2C+culture%2C+governmental+issues%2C+financial+matters%2C+history%2C+amusement%2C+and+games%2C+etc.%0AB.A.+Journalism+%26+Mass+Communication+program+is+best+suited+for+eligible+candidates+with+interest+in%2C+and+aptitude+for+investigation+and+reporting+of+happenings%2C+issues%2C+trends%2C+and+stories+around+the+world+to+a+vast+audience+through+mediums+like+newspapers%2C+magazine%2C+television%2C+internet%2C+etc.%0ASuch+candidates+would+ideally+possess+the+ability+to+think+analytically%2C+and+write+across+platforms%2C+including+web+writing+and+copy+editing.%0AB.A.+Journalism+%26+Mass+Communication+course+has+been+designed+to+train+enrolled+students+in+skills+of+editing%2C+writing%2C+photographing%2C+etc.+Such+professionals+are+typically+employed+with+newspapers%2C+periodicals+and+magazines%2C+central+information+services%2C+press+information+bureaus%2C+websites%2C+AIR+and+TV+channels.%0ASuccessful+graduates+of+the+course+can+also+take+up+job+positions+involving+writing+for+multimedia+and+the+web%2C+such+as+writing+news+and+other+articles.+They+must+have+the+requisite+skills+for+writing+precise+news+stories+adaptive+to+contexts+and+settings.+Student+must+also+be+aware+of+media+laws%2C+ethics+which+are+an+important+tool+in+this+field+as+media+works+under+the+framework+of+certain+social+ethics.%0A%0ACourse+outcome%0ACandidates+have+a+lot+of+career+opportunities+in+print+and+electronic+media+%3A+editors%2C+columnists%2C+correspondents%2C+freelance+writers%2C+news+analysts%2C+photojournalists%2C+reporters.+%0AOther+areas+are+newspapers%2C+periodicals+and+magazines%2C+central+information+service%2C+press+information+bureau%2C+websites%2C+digital+marketing%2C+digital+media%2C+news+channels%2C+entertainment+channels%2C+acting%2C+television+production.%0AStudents+also+find+good+jobs+in+radio+production%2C+public+relations%2C+nongovernmental+organizations%2C+publishing+house%2C+corporate+sector+and+many+other+sectors.%0ATeaching+is+also+one+of+the+best+options+with+them+after+passing+the+course+along+with+further+study+options.%0A%0A%0A%0A', '', 'SJMChttp%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsjmc_06-12-2018_13-50-16bj+%281%29.pdf%2C+http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsjmc_06-12-2018_14-21-34syllabus.pdf%2C+http'),
('sobiotech', 'Program+specific+outcomes+%28PSOs%29M.Sc.+Biotechnology1.+Students+will+gain+and+apply+knowledge+of+Biotechnology+comprised+of+science+and+Engineering+components+to+solve+problems+related+to+field+of+biotechnology.2.++Students+will+be+able+to+design%2C+perform+experiments%2C+analyze+and+interpret+data+for+investigating+complex+problems+in+the+area+of+biotechnology+M.Sc.+Genetic+Engineering3.+Graduates+will+be+able+to+decide+and+apply+appropriate+tools+and+techniques+in+biotechnological+manipulation.4.+Graduates+will+be+able+to+justify+societal%2C+health%2C+safety+and+legal+issues+and+understand+his+responsibilities+in+biotechnological+engineering+practices.5.+Graduates+will+be+able+to+understand+the+need+and+impact+of+biotechnological+solutions+on+environment+and+societal+context+keeping+in+view+need+for+sustainable+solution.M.Sc.+Bioinformatics6.+Graduates+will+be+able+to+undertake+any+responsibility+as+an+individual+and+as+a+team+in+a+multidisciplinary+%2F+cross+cultural+environment.7.+Students+will+develop+oral+and+written+communication+skills.8.+Skilled+manpower+development+to+cater+the+need+of+software+development+and+to+conduct+Bioinformatics+research.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F02-11-2018_11-23-39Criteria+1.docx'),
('socmrce', 'Every+academic+year+all+syllabus+of+specialised+subjects+are+revised+with+due+consultation+of+industry+and+academic+experts.+All+experts+specialised+in+foreign+trade%2Cinternational+business%2C+foreign+trade+policy%2C+tax+policy%2C+consumer+behaviour%2C+marketing+research%2C+e-business%2C+e-+marketing%2C+MIS%2C+e-commerce%2CHRM%2CAudit%2C+Financial+management%2C+Research+methodology+etc.+', '', 'http%3A%2F%2Fwww.commerce.dauniv.ac.in%2F'),
('socsit', 'Programme+outcomes+are+consistent+with+those+required+by+accrediting+bodies+such+as+the+All+India+Council+for+Technology+and+Engineering+%28AICTE%29+and+National+Assessment+and+Accreditation+Council+%28NAAC%29.+Courses+are+designed+in+various+programmes+to+develop+socially+responsible%2C+morally+strong%2C+critical+thinker%2C+and+intellectually+competent+graduates.%0AThe+SCSIT+Programmes+Outcomes+are%3A%0A%2A+education+necessary+to+understand+the+impact+of+CS+%2F+IT+in+a+global+and+societal+context.%0A%2A+an+understanding+of+professional+and+ethical+responsibility.%0A%2A+an+ability+to+apply+knowledge+of+mathematics%2C+science%2C+and+IT+in+their+future+endeavors.%0A%2A+an+ability+to+design+a+system%2C+component+or+process+to+meet+desired+needs.%0A%2A+an+ability+to+work+in+team.%0A%2A+an+ability+to+communicate+effectively.%0AAll+the+courses+are+designed+with+focus+on+employability%2C+innovation+and+research+pursuit+needs+of+higher+education.+Courses+are+in+high+demand+in+the+industry+and+educational+institutions.+Syllabus+revisions+or+the+introduction+of+new+courses+are+done+as+per+industry+requirement.+%0AA+course+on+Professional+%26+social+issues+in+IT+is+a+part+of+all+PG+programmes.+The+aim+is+to+develop+professional+values+in+students+bundled+with+social%2C+legal%2C+ethical+and+business+sensitivity+and+making+them+understand+their+roles+and+responsibilities+in+professional+career+ethically.%0AEnglish+Language+course+in+BCA+and+Communication+skills+in+all+PG+programmes+are+important+for+building+effective+communication+skills+in+students.%0A+The+core+courses+of+computer+science+in+all+UG+and+PG+programmes+are+meant+to+develop+technical+and+cognitive+abilities+in+all+the+students.+%0AThe+curriculum+of+MBA+%28CM%29+programme+contains+specialization+in+ERP.+MCA+programme+courses+such+as%2C+Cloud+computing+and+Artificial+Intelligence+are+necessary+to+cope+with+the+rapid+technological+changes+in+IT+world.+IoT+and+Data+Science+are+introduced+in+M.Tech.+programme+to+acquire+knowledge+and+apply+them+to+analytical+problems+and+applications.%0AInformation+and+computing+services+are+provided+over+the+Internet.+Cloud+computing+models+everything+%28hardware%2C+software%2C+platform%2C+storage%29+as+service.%0A+Course+on+Internet+of+Things+enables+to+learn+the+technology+that+is+trend+of+future+networking.+IoT+applications+are+enabling+Smart+City+initiatives+worldwide.%0A+Smarter+lightning%2C+smart+houses%2C+wearable%C3%83%C6%92%C3%82%C2%A2%C3%83%C2%A2%C3%A2%E2%82%AC%C5%A1%C3%82%C2%AC%C3%83%C2%A2%C3%A2%E2%82%AC%C5%BE%C3%82%C2%A2s+to+healthcare+are+fields+that+will+completely+transform+the+way+people+carry+out+their+everyday+tasks.+%0AIndustries%2C+such+as+social+media%2C+insurance%2C+e-commerce%2C+transport%2C+government%2C+banking%2C+and+telecommunications+are+producing+massive+amounts+of+data+now+days.+Data+science+is+concerned+with+the+acquisition%2C+storage%2C+retrieval%2C+processing+and+finally+the+conversion+of+data+into+knowledge+where+the+quantum+of+data+is+very+large.+The+knowledge+helps+to+reform+strategies+and+working+plans+of+the+related+industries.%0AThe+proliferation+of+information+on+Internet+leads+to+maintain+confidentiality%2C+authenticity+and+privacy+of+the+information+and+security+of+the+information+source.+A+course+on+Network+Security+is+designed+for+M.Tech.+%28NM%26IS%29+students+to+develop+network+system+security+skills.+%0AThe+students+of+M.Tech.+final+year+take+up+research+based+projects+within+the+department+or+internship+in+the+industries+providing+hands-on+live+project.+The+outcome+of+the+research+based+projects+often+results+in+research+paper.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsocsit_05-12-2018_17-46-44SCSIT_PROGRAMME_OUTCOMES.pdf'),
('sodsf', 'The+School+of+Future+Studies+and+Planning+was+offering+following+programmes+in+2014%3A%0A1.+Ph.D.+%0A2.+M.Tech.+in+Future+Studies+and+Planning+%0A3.+M.Tech.+in+Systems+Management.+%0AThe+University+has+changed+the+name+of+the+school+from+School+of+Future+Studies+and+Planning+to+School+of+Data+Science+and+Forecasting+through+its+notification+dated+11%2F02%2F2016.+The+school+modified+its+existing+M.Tech.+programmes.+It+was+proposed+to+re-name+both+programmes+as+per+new+discipline+of+Data+Science.+The+Co-ordination+committee+of+the+M.P.+Universities+has+approved+re-naming+of+the+programmes+is+its+93rd+meeting+held+on+25%2F10%2F2017.+The+same+was+notified+by+the+University+through+its+notification+dated+23%2F12%2F2017.+The+syllabus+of+both+re-named+M.Tech.+programmes+was+developed+and+approved+by+the+Departmental+committee+on+10%2F03%2F2016+and+27%2F04%2F2018.+The+modified+syllabus+contains+needs%2C+objectives+and+outcomes+of+the+programme%2C+programme+specific+outcomes%2C+and+course+outcomes.The+school+also+developed+new+academic+programmes+namely+M.B.A.+in+Business+Analytics+and+M.Sc.+in+Data+Science+and+Analytics.+Both+programmes+have+been+approved+by+the+Executive+Council+in+its+meeting+held+on+26%2F08%2F2016+and+notified+on+01%2F12%2F2017.+The+syllabi+of+these+new+programmes+was+also+developed+and+approved+by+the+Departmental+committee+on+12%2F04%2F2017.+The+school+also+started+a+new+M.Tech.+programme+in+Data+Science+for+working+Executives+after+getting+approval+of+the+Executive+Council.+The+programme+provides+learning+flexibility+to+the+working+executives.+The+learners+can+take+the+courses+as+per+their+available+time+frame.+The+detailed+syllabus+of+all+these+new+programmes+include+needs%2C+objectives+and+outcomes+of+the+programme%2C+programme+specific+outcomes%2C+and+course+outcomes.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F30-10-2018_12-58-422016-02-11+Change+in+School+Name.jpg'),
('soecon', 'MA%28ECO%29%3A-+This+Programme+is+relevant+as+it+gives+strong+linkages+to+students+with+econoimy+of+nation.+Tribal+Ecoomics%2C+Welfare+Econoics%2C+Development+Economics%2C+Mathematics+for+economic%2C+Econometrics+.+Students+know+about+the+economy+of+the+nation+and+contribute+in+academics%2C+research+and+public+services+such+as+PSC%2C+IAS+%2CIRS+etc.++++++%0AMBA%28BE%29%3A-+This++Programme+is+designed+for+gaining+enterpreneurial+skills+with+blend+of+economics+and+management+.+Students+are+given+knowledge+of+Econometrics%2C+Business+Forecasting%2C+Strategic+Management+%2C+Research+Methodolgy%2C+SAPM%2CStrategic++HRM%2C++etc.+Students+are+also+given+the+choice+of+Marketing+and+Finance+Specilaisation+to+perform+in+the+market+s+per+their+expertise.+MBA%28IB%29+%3A-+This+Programme+is+specially+designed+to+train+students+in+the+field+of+export+and+import+.+Students+are+given+the+knowledge+of+Import+Management%2C+Export+procedure+and+documentation%2C+International+Business+finance%2C+Overseas+Project+management+%2C+International+logistics+%26+Supply+chain+Management%2C+International+Marketing%2C+Consumer+behaviour+etc+to+show+their+skills+in+the+field+of+International+trade+operations.+MBA%28FS%29+%3A-+This+programme+is+designed+specifiaclly+to+meet+the+financial+aspects+.+Students+are+gaining+knowledge+of+finance+related+subjects+such+as+Strategic+Financial+Management%2C+Banking+Services+and+Operations%2CTreasury+and+Risk+Management+%2C+Insurance+na+Bank+Management+%2C+financial+Markets+and+enviornment%2C+International+Forex+Management+etc+to+utilise+their+skills+in+the+financial+aspects+of+the+organisations.+++M.Phil+%26Ph.D%3A-+These++programmes+have+special+focus+on+Research+and+Academics.+Students+gain+practical+knowledge+through+field+work+experiences+.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsoecon_12-12-2018_13-17-53syllbus+review+meeting.pdf'),
('soedu', 'Curricula+of+School+of+Education+are+developed+keeping+in+view+the+local%2C+national%2C+regional+and+global+developmental+needs.+The+local+needs+are+addressed+in+B.Ed.+and+M.Ed.+courses+by+including+various+papers+in+perspective%2C+tool+and+elective+generic+courses.+Like+in+B.Ed.+and+M.Ed.+courses+in+Internship+program+various+community+based+projects+and+social+awareness+programs+are+organised+by+students+to+identify+their+needs+and+appropriate+measures+are+taken.+In+order+to+keep+pace+with+the+regional+and+global+needs+the+curricula+are+revised+as+per+NCFTE+2009+to+include+emerging+technology+driven+methodologies+in+school+subjects.+The+research+areas+chosen+by+the+candidates+are+having+relevance+with+current+problems+and+needs+of+the+society.+For+example+Inclusive+education%2C+Gender+sensitization%2C+Environmental+Education%2C+ICT+based+applications+for+benefit+of+society+.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F31-10-2018_16-14-11minutes+of+meeting++BOS.pdf%2C+http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsoedu_04-12-2018_17-25-38NCTE+gadget+app'),
('Soex', 'The+School+focuses+in+the+broad+area+of+Embedded+Systems.+The+broad+content+of+syllabus+and+the+course+scheme+envisions+creation+of+a+pool+of+trained+technical+manpower+which+shall+cater+to+emerging+hardware+technology+and+to+provide+industry+a+workforce+that+is+adequately+skilled%2C+ethically+oriented+and+professionally+competent.+These+areas+also+resonate+with+the+mission+and+vision+of+our+department.The+School+runs+five+Post+graduate+programmes-+Three+M+Tech+and+Two+M+Sc+in+Electronics+and+the+programme+outcome+of+the+various+programmes+is+directed+towards+achievement+of+similar+goals+albeit+at+different+levels+of+accuracy+and+maturity.+In+a+nutshell%2C+the+Programme++Outcome+can+be+elaborated+as%3A1.Engineering+knowledge%3A+An+ability+to+apply+the+knowledge+of+science%2C+mathematics%2C+engineering+principles+for+developing+problems+solving+attitude.+2.+Problem+analysis%3A+An+ability+to+analyze%2C+develop+and+implement+solutions+built+on+courses+such+as+system+design%2C+signal+processing%2C+embedded+processors+and+physical+electronics.3.Modern+tool+usage%3A+To+develop+programming+skills+for+tools+such+as+simulation%2C+synthesis%2C+verification+and+algorithm+approach+at+chip+level%2C+core+competencies+in+semiconductor%2C+ARM+for+design+and+implementation.4.+Conduct+investigations+of+complex+problems%3A+To+familiarize+with+industry+relevant+goals+and+practices+as+a+final+project+and+compile+the+findings+from+therein%2C+alongside+defending+the+analysis+of+the+achieved+solutionThe+programme+specific+outcomes+for+all+the+courses+remain+focused+on+indepth+study+of+variety+of+Microcontrollers%2C+Interfacing+issue+solving%2C+Learning+of+database+and+signal+processing+Concepts+and+adapt+themselves+to+new+research+issues.The+course+outcome+essentially+points+towards%3AStudents+are+able+to7A6112%3A+Describe+++the+differences+between+the+general+computing+system+and+the+embedded+++++system%2C+also+recognize+the+classification+of+embedded+systems..%3A+Become+aware+of++the+architecture+of++the+ATOM+processor+and+its+programming+aspects+%28assembly++Level%29%3A+Become+aware+of+interrupts%2C+hyper+threading+and+software+optimization.%3A+Design+real+time+embedded+systems+using+the+concepts+of+RTOS.%3A+Analyze+various+examples+of+embedded+systems+based+on+ATOM+processor', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsoex_05-12-2018_13-19-17MCT_Scheme_2017-19.pdf%2C++http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsoex_04-12-2018_16-19-58ES+Scheme+2018-20.pdf'),
('Soinstru', 'We+have+several+discussions+with+the+industries%2C+alumni%2C+students%2C+Research+centres+nearby+Indore+such+as+RRCAT%2C+Indore%2C+UGC+DAE+CSR+Indore+for+the+upgradation+and+modification+of+the+course.++On+the+demand+of+the+industry+and+various+suggestions+specially+by+the+alumni+stayed+abroad++to+start++a+new+M.Tech.+course+in+Internet+of+Things++%28IOT%29.++From+the+academic+year+2018-19%2Cwe+have+started+a+new+course+after+the+permission+from+Board+of+Studies+and+approval+from+the+faculty+of+Engineering+Science%2C+Academic+council+of+Devi+AHilya+Univ+and+from+the+Executive+council+of+DAVV%2C+Indore.++%0AWe+are+continuously+modifying+the+syllabus+of+M.Tech.+%28Instrumentation%29+program+as+well+as+we+are+obtaining+the+approval+from+The+All+India+Council+of+Technical+Education%2C+New+Delhi.++', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2FSoinstru_14-12-2018_12-29-59MTECH_INSTR_2015.pdf%2C++++http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2FSoinstru_14-12-2018_12-29-02AICTE_A'),
('solang', '%5C%22Details++of+programme+syllabus+revision+in+last+05+year%0A%0AThe+Courses+are+are+as+follows+are+as+follows+-+%0A%28i%29+M.Phil.++-+English+Literature%2C+Hindi+Literature%2C+Sanskrit++Literature+and+Urdu++Literature.%0A%28ii%29+M.A.+-+English+Literature%2C+Hindi+Literature%2C+Sanskrit%2FJyotish+and+Urdu++Literature.+%2802+Year+-+04+Semester+Programme%29%0A%28iii%29+PG+Diploma+-+Hindi+Translation+%2801+year+-+02+Semester+Programme%29+%0A%28iv%29+Certification+Course+-+French%2FGerman+Languages+%2803+Months+Duration%29%0A%28v%29+Performing+Arts+-+Drama%2C+Dance%2C+Music+%0A++++++++%28+Diploma+-+01+year%2C+%0A++++++++++Degree+-+UG+03+year%2C+PG+02+year%2C+%0A++++++++++Certificate+-+06+Months%29%0A+%0ADuring+the+entire+process+of+Programme+syllabus+revision%2C+utmost+care+has+been+taken+to+ensure+that+they+retain+over+a+long+period+of+time+their+relevance+in+the+context+of+contemporary+developmental+requirements+at+the+local%2C+National%2C+regional+and+global+levels.+Asimilar+perspective+prompted+the+location+and+enumeration+of+the+learning+objectives.+Programme+outcomes+and+programme+specific+outcome+too+were+determined+on+logical+lines+in+accordance+with+the+laws+of+probabilitiy.+Besides+experts+in+the+academic+domain%2C+the+views+of+the+teachers+and+the+taught+too+wewe+given+adequate+weightage.+%0A+%0A+%5BRelevant+document+photocopies+enclosed%5D.%5C%22%0A', '', '123'),
('solaw', 'The+curriculum+proposed+for+B.A.LL.B.+%28Hons.+%29+program+and+LL.M.+%28Business+Law%29+Program+has+a+relevance+to+Local%2Fregional%2Fnational%2Fglobal+development+needs+and+not+only+Local+Laws+like+MPLRC+are+taught%2C+but+also+subjects+of+global+relevance+like+Business+Laws%2F+Corporate+Laws+of+national+importance+and+subjects+like+Information+Technology+Law+and+Intellectual+Property+Laws+are+also+taught.+Not+only+all+the+courses+are+supported+with+Course+Objectives+and+Course+outcomes%2C+but+also+program+outcomes+are+part+and+parcel+of+Curriculum+design.+The+syllabus+revision+exercise+for+all+the+courses+of+all+the+programs+was++undertaken+in+2015%2C+the+new+syllabus+being+effective+from+July+2015+session.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsolaw_15-12-2018_14-01-35Syllabus.zip'),
('solib', 'The+BLIS+program+is+designed+to+educate+the+students+in+the+fundamental+and+basic+theories+and+practices+of+Library+and+Information+Science.+Application+of+ICT+tools+in+LIS.MLISC+program+is+designed+to+train+the+students+in+the+advanced+techniques+and+tools+for+managing+libraries+of+the+21st+century.+Detailed+study+of+automated+library+practices+and+virtual+libraries.%0A%0AEarlier+BLIS+and+MLIS+course+were+conducted+on+elective+patter+since+2017-18.+But+as+per+the+university+instruction%2C+CBCS+pattern+was+introduced+from+the+session+2018-19.', '', 'Meeting+minutes+'),
('sols', 'Programme+offered+by+School+of+Life+Sciences+Include+MSc+Life+Sciences%2C+MSc+Industrial+Microbiology%2C+MPhil+Life+Sciences%2C+PhD+Life+Sciences.%0AProgramme+outcome+For+MSc+Life+Sciences+and+MSc+Industrial+Microbiology%3A+%0A1.+Students+will+be+able+to+understand+identify++and+analyse+problems+related+to+Life+Sciences+.and+find+conclusions+with+basic+knowledge+in+the+field+of+Life+Sceinces.%0A%0A2.Students+will+be+able+to+design+experiments%2C+perform+experiments+%2C+analyse+data+and+interpret+it+and+will+be+able+to+draw+conclusions+from+it+in+the+relevant+field+of+Life+Sciences%0A%0A3.Students+have++knowledge+and+will+be+able+to+decide+and+apply+appropriate+tools+and+techniques+currently+used+in+Life+Sciences+%0A%0A4.Students+will+be+able+to+justify+health+safety++ethical+and+IPR+issues+in+Life+Science+research%0A%0A5.Students+will+be+able+to+understand+the+need+and+impact+of+biochemical+solutions+on+environmental+and+societal+context+keeping+in+view+need+for+sustainable+solutions.%0APO+for+IM%2C+for+MPhil+and+PhD+course+is+attached+as+PDF.link.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsols_07-12-2018_13-13-11PO+Life+Science+2.pdf%2Chttp%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsols_07-12-2018_13-13-54CO+Life+science+2.'),
('somath', 'Relevant+document+is+attached.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F05-11-2018_12-32-28Program+outcomes+Course+outcomes+Program+specific+outcomes.pdf'),
('sopedu', 'i.The+graduates+and+postgraduates+of+the+courses+have+a+wide+range+of+opportunity+in+different+fields.+Post+Graduate+and+Ph.ds+are+qualified+to+be+appointed+as+Teachers+and+Sports+officer+in+Universities+Colleges+and+Physical+Education+teachers+in+Schools.ii.Other+than+these+academic+opportunities+they+are+also++qualified+for+appointments+as+District+Sports+Officer+%2F+Regional+sports+officers+and+other+administrative+post+in+sports+department+in+Central+and+State+undertakings.+iii.These+students+are+also+eligible+to+join+different+Forces%2C+for+examples%2C+Army%2C+Police%2C+B.S.F+etc.iv.They+are+also+eligible+to+undertake+the+higher+studies+i.e.+M.Phill%2C+Ph.D+and+D.Lit.+in+the+field+of+Physical+Education+and+Sports+Sciences.v.Pass+out+students+can+also+become+health+%2F+fitness+experts+in+health+clubs+and+habitability+industry+and+they+can+start+their+own+health+clubs.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsopedu_24-12-2018_12-07-581.1.1+M+of+M+and+Syllabus.pdf'),
('sopharma', 'Curricula+developed+under+CBCS+scheme+%28w.e.f.+academic+session+2015-2016%29+and+adopted+curricula+%28w.e.f+from+academic+session+2016-2017%2C+prescribed+by+Pharmacy+Council+of+India%2C+New+Delhi%29+fulfills+needs+of+academic+institutions%2C+Pharmaceutical+Industries+and+Research+Organization+at+National+and+International+level.%0A%0AProgram+outcome+and+Program+Specific+outcome+of+B.Pharm.+and+M.Pharm.+%28Pharmaceutical+Chemistry%29.%0AScheme+and+Syllabus+under+CBCS+scheme+were+implemented+from+the+academic+year+2015-2016.%0ACourse+Outcome+for+B.Pharm.+and++M.Pharm.+%28Pharmaceutical+Chemistry%29.%0AFrom+the+academic+year+2016-2017%2C+scheme+and+syllabus+prescribed+by+the+Pharmacy+Council+of+India+for+B.Pharm.+and+M.Pharm.+%28Pharmaceutical+Chemistry%29+were+adopted.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsopharma_17-12-2018_19-34-12CR.1.1.1+MINUTES.pdf'),
('sophy', 'Higher+education+shoulders+the+responsibility+of+inculcating+the+desirable+value+systems+amongst+the+students.+In+India%2C+the+cultural+pluralities+and+diversities+exist+and+it+is+essential+that+students+imbibe+the+appropriate+values+commensurate+with+social%2C+cultural%2C+economic+and+environmental+realities%2C+at+the+local%2C+national+and+universal+levels.+Today%C3%A2%E2%82%AC%E2%84%A2s+significant+developments+can+be+attributed+to+the+impact+of+developments+in+the+field+of+Science+and+Technology.++Physics+as+one+of+the+parts+of+basic+sciences+imparts+logical+++thinking+amongst+the+students.+The+department+is+running+Post+Graduate+programs+e.g.+M.Sc.+%28Physics%29%2C+M.Sc.+%28Physics+Material+Science%29%2C+M.Phil.+%28Physics%29%2C+M.Tech.+%28Lasers+and+Applications%29+which+are+relevant+to+the+local%2F+national+%2F+regional%2Fglobal+needs+of+human+resource+development.+The+objectives+of+the+post+graduate+programs+are+to+train+the+students+in+the+field+of+Physics+and+Laser+technology+and+update+their+knowledge+with+the+most+recent+developments+in+the+field.In+M.Sc.+%28Physics%29%2C+students+are+taught+Quantum+Mechanics%2C+Classical+Mechanics%2C+Mathematical+Physics%2C+Solid+state+Physics%2C+Electrodynamics%2C+Relativity%2C+Laser+Physics+etc.+While+in+M.Sc.+Material+Science%2C+more+emphasis+is+given+to+the+Material+Science+and+Nanomaterials.+The+students+are+also+sent+to+the+laboratories+of+international+repute+e.g.+Physical+Research+Laboratory+and+Plasma+Research+laboratory.++In++M.Phil.++courses%2C+students+get+more+exposure+to+the+advanced+fields+of+nanoscience+and+nanophotonics.++They+are+encouraged+to+carry+out+research+work+for+their+project.+The+M.Tech+%28lasers+and+Applications%29+train+the+students+in+the+field+of+Applied+Optics%2C+Optical+Communication%2C+Fiber+Optics%2C+Free+electron+lasers+%2C+Semiconductor+lasers%2C+Nonlinear+Optics%2C+High+power+Electronics+and+various+other+kinds+of+lasers.+The+students+are+sent+to+Raja+Ramanna+Centre+of+Advanced+Technology+for+one+year+training.+The+department+also+runs+the+Ph.D.+program+and+the+research+work+carried+out+in+the+department+is+at+par+with+the+international+standards+of+research+which+is+also+evident+from+the+publications+in+the+Journals+of+International+repute.+The+students+nurtured+in+the+School+of+Physics+are+employed+in+various+institutions+starting+from+local+level+schools+to+international+level+laboratories+and+thus+meet+with+the+requirements+at+local%2F+regional%2Fnational+and+international+levels.++++++', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_14-53-271.1.1.docx');
INSERT INTO `t1_1_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('soss', 'Program+outcome%2C+Specific+outcome+and+course+outcome+of+the+following+programs%0AM.S.W.+1.To+generate+in+students+a+sensitivity+for+society%2C+community+and+groups.%0A2.Special+training+for+dealing+with+day+to+day+adjustment+problems+faced+by+individual%2C+groups+and+communities.%0A3.The+training+helps+in+Imbibing+practical+aspect+of+professional+knowledge%2C+which+helps+in+solving+the+problem.%0AM.Phil.+Geography%091.The+M.Phil+course+offers+an+opportunity+for+the+post+graduates+to+acquire++both+theoretical+and+practical+knowledge+in+the+Research+field.+%0A2.This+programme+is+essential+for+those+who+want+to+be+in+teaching+profession.+%0A3.It+is+also+indispensable+for+those+who+want+to+be+researchers.+students+learn+to+produce+new+solutions+for+the+geographical+issues+in+the+environmental+surrounding.%0AM.Phil.+History%091.The+M.Phil+course+offers+an+opportunity+for+the+post+graduates+to+acquire++both+theoretical+and+practical+knowledge+in+the+Research+field.+%0A2.This+programme+is+essential+for+those+who+want+to+be+in+teaching+profession.+%0A3.It+is+also+indispensable+for+those+who+want+to+be+researchers.Aims+to+produce+managers+and+consultants+for+business+houses%2C+government%2C+research+institutions+and+other+organisations.%0AM.Phil.+Home+Science%091.The+M.Phil+course+offers+an+opportunity+for+the+post+graduates+to+acquire++both+theoretical+and+practical+knowledge+in+the+Research+field.+%09%0A2.This+programme+is+essential+for+those+who+want+to+be+in+teaching+profession.+It+is+also+indispensable+for+those+who+want+to+be+researchers.%0A3.The+objective+of+the+programme+is+to+foster+the+growth%2C+development+and+wellbeing+of+individual+families+and+communities%2C+utilising+the+findings+and+advances+of+science+and+technology.%0AM.Phil.+Political+Science%091.The+M.Phil+course+offers+an+opportunity+for+the+post+graduates+to+acquire++both+theoretical+and+practical+knowledge+in+the+Research+field.+%0A2.This+programme+is+essential+for+those+who+want+to+be+in+teaching+profession.+It+is+also+indispensable+for+those+who+want+to+be+researchers.%0A3.To+acquaint+students+with+research+based+understanding+in+the+field+of+political+science+such+as+political+thoughts%2C+policies+and+governement+programes.%0AM.Phil.+Psychology%091.To+provide+basic+training+required+for+undertaking+research+work+and+to+train+students.+in+conducting+research+in+different+areas+of+Psychology.%09%0A2.This+programme+is+essential+for+those+who+want+to+be+in+teaching+profession.+It+is+also+indispensable+for+those+who+want+to+be+researchers.%0A3.The+research+oriented+minds+gets+better+acquainted+with+further+advancement+in+research.+This+will+help+in+better+growth+in+the+field+of+research+%0AM.Phil.+Social+Work%091.The+M.Phil+course+offers+an+opportunity+for+the+post+graduates+to+acquire++both+theoretical+and+practical+knowledge+in+the+Research+field.+%09%0A2.This+programme+is+essential+for+those+who+want+to+be+in+teaching+profession.+It+is+also+indispensable+for+those+who+want+to+be+researchers.%0A%C3%85%E2%80%9CResearch+based+knowledge+of+various+techniques+applied+in+solving+the+contemporaray+issues.%0AM.Phil.+Sociology%091.The+M.Phil+course+offers+an+opportunity+for+the+post+graduates+to+acquire++both+theoretical+and+practical+knowledge+in+the+Research+field.+%09%0A2.This+programme+is+essential+for+those+who+want+to+be+in+teaching+profession.+It+is+also+indispensable+for+those+who+want+to+be+researchers.%0A3.Research+based+knowledge+of+contemorary+social+issues%2C+thoughts+and+various+theories+to+apply+in+field%0APh.D.+Geography%091.Doctoral+programmes+comprise+a+customised+scientific+supervision+of+the+highest+quality+as+well+as+a+joint+programme+comprising+teaching%2C+seminars+or+internships.%0A2.Helps+in+applying+knowledge+of+research+studies+to+practice%2C+and%2C+under+supervision%2C+evaluate+one%5C%27s+own+practice+interventions+and+those+of+other+relevant+systems.%0A3.Developing+in+theories+in+the+particular+field+of+study+which+will+help+in+bridging+the+gap+in+the+existing+literature.%0APh.D.+History%091.Doctoral+programmes+comprise+a+customised+scientific+supervision+of+the+highest+quality+as+well+as+a+joint+programme+comprising+teaching%2C+seminars+or+internships.%09%0A2.Helps+in+applying+knowledge+of+research+studies+to+practice%2C+and%2C+under+supervision%2C+evaluate+one%5C%27s+own+practice+interventions+and+those+of+other+relevant+systems.%0A3.Developing+in+theories+in+the+particular+field+of+study+which+will+help+in+bridging+the+gap+in+the+existing+literature.%0APh.D.+History%091.Doctoral+programmes+comprise+a+customised+scientific+supervision+of+the+highest+quality+as+well+as+a+joint+programme+comprising+teaching%2C+seminars+or+internships.%0A2.Helps+in+applying+knowledge+of+research+studies+to+practice%2C+and%2C+under+supervision%2C+evaluate+one%5C%27s+own+practice+interventions+and+those+of+other+relevant+systems.%0A3.Developing+in+theories+in+the+particular+field+of+study+which+will+help+in+bridging+the+gap+in+the+existing+literature.%09%0APh.D.+Political+Science%091.Doctoral+programmes+comprise+a+customised+scientific+supervision+of+the+highest+quality+as+well+as+a+joint+programme+comprising+teaching%2C+seminars+or+internships.%0A2.Helps+in+applying+knowledge+of+research+studies+to+practice%2C+and%2C+under+supervision%2C+evaluate+one%5C%27s+own+practice+interventions+and+those+of+other+relevant+systems.%0A3.Developing+in+theories+in+the+particular+field+of+study+which+will+help+in+bridging+the+gap+in+the+existing+literature.%0APh.D.+Psychology%091.Doctoral+programmes+comprise+a+customised+scientific+supervision+of+the+highest+quality+as+well+as+a+joint+programme+comprising+teaching%2C+seminars+or+internships.%0A2.Helps+in+applying+knowledge+of+research+studies+to+practice%2C+and%2C+under+supervision%2C+evaluate+one%5C%27s+own+practice+interventions+and+those+of+other+relevant+systems.%0A3.Developing+in+theories+in+the+particular+field+of+study+which+will+help+in+bridging+the+gap+in+the+existing+literature.%0APh.D.+Social+Work%091.Doctoral+programmes+comprise+a+customised+scientific+supervision+of+the+highest+quality+as+well+as+a+joint+programme+comprising+teaching%2C+seminars+or+internships.%09%0A2.Helps+in+applying+knowledge+of+research+studies+to+practice%2C+and%2C+under+supervision%2C+evaluate+one%5C%27s+own+practice+interventions+and+those+of+other+relevant+systems.%09%0A3.Developing++theories+in+the+particular+field+of+study+which+will+help+in+bridging+the+gap+in+the+existing+literature.%0APh.D.+Sociology%091.+Doctoral+programmes+comprise+a+customised+scientific+supervision+of+the+highest+quality+as+well+as+a+joint+programme+comprising+teaching%2C+seminars+or+internships.%0A2.Helps+in+applying+knowledge+of+research+studies+to+practice%2C+and%2C+under+supervision%2C+evaluate+one%5C%27s+own+practice+interventions+and+those+of+other+relevant+systems.%0A3.Developing+theories+in+the+particular+field+of+study+which+will+help+in+bridging+the+gap+in+the+existing+literature.%0ACertificate+in+Labour+Law+and+Personnel+Management%091.+An+inhand+experience+of+the+basic+labour+laws+both+of+central+as+well+state+government.%09%0A2.+Specifically+designed+curricula+to+provide+basic+and+an+indepth+knowledge+of+the+compliances+pertaining+to+labour+laws.%09%0A3.+Students+get+special+training+in+the+field+which+a+pre-requisite+elibilty+to+work+closely+with+management%0ACertificate+in+Consumer+Psychology+and+Advertising%091.+Consumer+psychology+is+the+study+of+how+people++thoughts%2C+beliefs%2C+perceptions+and+feelings+influence+their+buying+habits+for+services+and+goods.+%0A2.Consumer+psychologists+study+the+buying+habits+of+individuals%2C+groups+and+organizations+and+the+manner+in+which+they+select%2C+pay+for%2C+use+and+dispose+of+products+and+services.%0A3.Consumer+psychologists+use+this+information+to+develop+marketing+techniques+for+targeting+potential+new+customers+and+for+reaching+out+to+them+to+buy+products%2C+and+also+to+help+companies+maintain+their+current+customers.%0ACertificate+in+Guidance+and+Counselling%09+1.Is+aimed+at+developing+professionals+in+this+vital+field%2C+which+is+gaining+greater+salience+in+the+present+times+both+from+social%2C+and+employment+perspectives.%0A2.By+developing+the+requisite+knowledge%2C+understanding%2C+attitudes+and+skills+in+the+area+of+Counselling+and+Family+Therapy%2C+this+unique+programme+of+study+would+help+to+train+professional+cadres+in+the+field%2C+equipping+them+for+both+wage-employment+and+self-employment%2C+and+thus+fill+the+existing+lacuna.%0A3.The+programme+is+of+special+helps+to+people+who+wants+to+understand+counselling+such+as+professionals+who+is+or+working+with+humans.%0ACertificate+in+Human+Rights%091.+An+indepth+knowledge+of+basic+human+rights%2C+specifically+goverened+by+international+conventions.%0A2.The+course+looks+at+Human+Rights+from+a+global+perspective.+It+aims+to+be+dynamic+and+innovative+through+the+initiation+of+participatory+processes+between+the+students+and+the+faculty.%09%0A3.It+provides+a+strong+theoretical+background+on+the+developing+debates%2C+along+with+%5C%27hands+on%5C%27+experience+of+issues+being+tackled+by+non-governmental+organizations+%28NGO%5C%27s%29+and+other+institutions.%0ADiploma+in+Consumer+Psychology+and+Advertising%09+1.Consumer+psychology+is+the+study+of+how+people%C3%83%C6%92%C3%86%E2%80%99%C3%83%E2%80%9A%C3%82%C2%A2%C3%83%C6%92%C3%82%C2%A2%C3%83%C2%A2%C3%A2%E2%80%9A%C2%AC%C3%85%C2%A1%C3%83%E2%80%9A%C3%82%C2%AC%C3%83%C6%92%C3%82%C2%A2%C3%83%C2%A2%C3%A2%E2%80%9A%C2%AC%C3%85%C2%BE%C3%83%E2%80%9A%C3%82%C2%A2s+thoughts%2C+beliefs%2C+perceptions+and+feelings+influence+their+buying+habits+for+services+and+goods.+%09%0A2.Consumer+psychologists+study+the+buying+habits+of+individuals%2C+groups+and+organizations+and+the+manner+in+which+they+select%2C+pay+for%2C+use+and+dispose+of+products+and+services%09%0A3.Consumer+psychologists+use+this+information+to+develop+marketing+techniques+for+targeting+potential+new+customers+and+for+reaching+out+to+them+to+buy+products%2C+and+also+to+help+companies+maintain+their+current+customers.%0AP.G.+Diploma+in+Guidance+and+Counselling%091.Is+aimed+at+developing+professionals+in+this+vital+field%2C+which+is+gaining+greater+salience+in+the+present+times+both+from+social%2C+and+employment+perspectives.%09%0A2.By+developing+the+requisite+knowledge%2C+understanding%2C+attitudes+and+skills+in+the+area+of+Counselling+and+Family+Therapy%2C+this+unique+programme+of+study+would+help+to+train+professional+cadres+in+the+field%2C+equipping+them+for+both+wage-employment+and+self-employment%2C+and+thus+fill+the+existing+lacuna.%09%0AThe+programme+is+of+special+helps+to+people+who+wants+to+understand+counselling+such+as+professionals+who+is%2For+working+with+humans.%0AP.G.+Diploma+in+Human+Rights%091.An+indepth+knowledge+of+basic+human+rights%2C+specifically+goverened+by+international+conventions.%0A2.The+course+looks+at+Human+Rights+from+a+global+perspective.+It+aims+to+be+dynamic+and+innovative+through+the+initiation+of+participatory+processes+between+the+students+and+the+faculty.%0A3.It+provides+a+strong+theoretical+background+on+the+developing+debates%2C+along+with+%5C%27hands+on%5C%27+experience+of+issues+being+tackled+by+non-governmental+organizations+%28NGO%5C%27s%29+and+other+institutions.%0APG+Diploma+in+Labour+Law+and+Personnel+Management%091.An+inhand+experience+of+the+basic+labour+laws+both+of+central+as+well+state+government.%09%0A2.Specifically+designed+curricula+to+provide+basic+and+an+indepth+knowledge+of+the+compliances+pertaining+to+labour+laws.%0A3.Students+get+special+training+in+the+field+which+a+pre-requisite+elibilty+to+work+closely+with+management%0ABachelor+of+Social+Work+%28B.S.W.%29%091.Understanding+of+the+basic+concepts+related+to+social+work+which+helps+in+forming+a+base+for+further+studies.%0A2.Special+training+backed+by+field+work+helps+in+better+understanding+of+the+day+to+day+problems.%09%0A3.Field+work+that+is+an+indispensible+part+of+the+curricula%2C+imparts+practical+experience+of+solving+problems+of+individual%2C+groups+and+communities.%0AM.A.+Sociology1.The+students+would+be+able+to+understand+the+various+theoretical+alternatives+for+the+sociological+interpretation+in+understanding+the+sociological+issues.+%09%0A2.The+students+would+be+able+to+have+application+of+methodological+tools+in+understanding+the+empirical+verification+which+in+turn+help+in+formulating+the+social+planning+and+policies.+%09%0A3.The+students+would+be+able+to+understand+societies%2C+human+behavior+and+various+social+problems.%0AM.A.+Political+Science+1.The+students+understand+the+basic+principles+of+Politics++including+governing+institutions+and+branches%2C+political+wings+and+organizations.%0A2.Demonstrate+the+ability+to+apply+their+knowledge+of+politics+by+using+the+major+analytic+and+theoretical+frameworks+in+several+subfields+of+political+science.%0A3.Students+will+demonstrate+the+ability+to+ask+relevant+research+questions+pertaining+to+Political+Science+in+their+research+papers+and+internship+experiences.%0AM.A.+Clinical+Psychology%09+1.Developing+skills%2C+attitudes+and+values+needed+to+apply+psychological+insight+to+lived+reality.%09%0A2.An+indepth+knowledge+of+theoretical+as+well+as+applicable+knowledge+in+the+field+of+psychology.%0A3+Students+will+demonstrate+the+ability+to+ask+relevant+research+questions+pertaining+to+Political+Science+in+their+research+papers+and+internship+experiences.%0AM.B.A.+Rural+Development+1.The+primary+objective+of+the+coursework+is+to+facilitate+integrative+learning%2C+so+that+graduates+are+able+to+walk+into+professional+roles+with+ease%2C+and+play+a+vital+role+both+at+the+operational+and+strategic+levels+in+their+jobs.%0A2.The+course+will+allow+the+students+to+specialize+in+domains+such+as+Financial+Inclusion%2C+Rural+Health%2C+and+Livelihood+Enhancement%2C+all+of+which+are+areas+of+high+demand.%0A3.Strong+fieldwork+and+organizational+skills+based+on+off+campus+learning+experiences+so+that+once+they+graduate%2C+students+can+hit+the+ground+running.%0AM.B.A.+Public+administration+and+Policy%091.Discuss+the+major+theories+and+concepts+of+Public+Administration+and+its+subfields.%09%0A2.Discuss+how+political+factors+shape+policy+formulation+and+implementation.%09%0A3.Demonstrate+critical+thinking%2C+including+the+ability+to+form+an+argument%2C+detect+fallacies%2C+and+martial+evidence%2C+about+key+issues+of+public+policy+and+administration%0A', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsoss_08-12-2018_12-03-16program+outcome+criteria+2.docx'),
('sostat', 'We+have+adopted+the+U+G+C+syllabus+in+totality+as+this+includes+all+the+relevant+areas+of+employ+ability+in+Govt.+and+Non-+Govt.+organizations+in+statistics.+Students+are+well+trained+in+the+recent+research+trends+in+statistics+with+various+in+house+projects+in+M.Sc.+III++and+IV+semester%2C+where+the+students+learn+to+conduct+surveys+and+data+analysis+through+different+statistical+softwares+.+The+School+provides+the+students+%2C+S+P+S+S+25th+version+in+the++Computer+lab+to+carryout+the+researches+and+prepare+the+presentations+and+data+analysis.+The+students+of+the+school+goes+to+other+Schools%2C+under+their+Generic+Courses+Programs++to+learn+different+application+oriented+soft+wares+%2C+like+PYTHON%2C+Machine+Learning+etc.++to+upgrade+their+ability+for+Multinationals.++', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsostat_14-12-2018_16-32-41BOS+Minutes.docx'),
('soyoga', 'The+Curricula+developed+at+our+P.G.+Diploma+in+Yoga+Therapy+and+Post+Graduate+%28M.A.%29+in+YOGA+has+great+relevance+to+the+local%2Fregional%2Fnational+and+global+developmental+needs.+%0ASubject+Curricula+contents+in+both+programs+and+courses%2C+duration+with+their+relevance+to+meet+following+learning+objectives%3A%0AFundamentals+of+Yoga+-+Helps+students+aware+of+the+genesis+of+Yoga%2C+8+%28Ashtang%29+real+science+behind+Yoga.+Practically+performing+with+demonstrations+and+detailed+major+and+minor+technical+aspects+of+each+Asanas+and+Kriyas.++%0APatanjali+Yog+Sutra+-+Greatly+deals+with+the+transformation+of+complete+thought+process+and+changes+one+internally+towards+being+much+better+human+during+the+course+of+time.+%0AYoga+Counselling+and+Psycho+Therapy+-+Understanding+the+patients+core+problem.+Nurturing+essential+qualities+of+effective+Counselor.+Learning+methods+and+techniques+to+effectively+%0AAnatomy%2C+Pathology+and+Physiology+-++Learning+human+body+systems%2C+diseases+cure+helps+in+applying+group+of+Asanas+with+Yoga+therapy+to+cure+people+from+their+pains+and+diseases+with+time.++Scientific+Analysis+of+Asanas+and+Pranayam%5C%27s+are+deeply+studied+in+our+Post+Graduate+Program.+%0AAyurveda+-+Ancient+Land%5C%27s+System+of+Cure%0AEastern+Philosophies+%C3%A2%E2%82%AC%E2%80%9C+Broader+and+deeper+frame+of+mind+with+multi+perception.+%0AGita+-+Great+management+lessons+to+teach+today%5C%27s+generation+to+how+to+life+effectively+in+all+aspects+of+life.+%0A%0AThe+Final+Outcomes+of+the+Programs+and+Courses+run+by+the+Department+are+%3A+%0A%0AEmployment+Opportunities+%3A+%0A1.+P.G+diploma+courses+have+opportunities+in+Schools%2C+Central+Government+Departments%2C+Yoga+Center.+%0A2.+The+Post+Graduates+and+P.h.D.%5C%27s++are+qualified+to+be+appointed+as+Teachers+and+Yoga+instructors+in+Universities%2C+Colleges%2C+health+center+and+other+health+departments+of+Ayush+ministry.%0AEntrepreneurship+%3A+%0A1.Apart+from+these+academic+opportunities+they+can+open+their+own+Yoga+Studios%2C+Hospitals%2C+Corporate+workshops.%0A2.+Freelancers%2C+Home+Visits%2C+Yoga+Clinics.+%0AFurther+Studies+%3A%0AStudents+who+wish+to+plunge+into+the+field+deeply+and+make+strong+foundation+of+the+career+by+doing+further+studies+like+M.Phill%2C+Ph.D++in+the+field+of+yoga+education.+%0AResearch+%3A+%0A%0A%0ATheir+is+a+great+scope+of+research+on+Yoga.+Research+has+great+scope+in+context+to+every+aspect+of+Yoga+and+Medical+Science+and+to+solve+complexities+of+modern+life+with+Patanjali+Yog+Sutra+and+Gita+understanding+.%0A%0A%0A%0A', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2Fsoyoga_16-12-2018_12-30-46pdfjoiner%281%29.pdf'),
('Username', 'Description', 'File_name', 'Link');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t1_3_1`
--

CREATE TABLE `t1_3_1` (
  `Username` varchar(30) NOT NULL DEFAULT '',
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Frequency_in_year` int DEFAULT NULL,
  `Year_discontinuation` varchar(30) DEFAULT NULL,
  `Number_of_students_offered` int DEFAULT NULL,
  `Number_of_students_completing` int DEFAULT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t1_3_4`
--

CREATE TABLE `t1_3_4` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Year` varchar(30) DEFAULT NULL,
  `Number_of_students_programme` int DEFAULT NULL,
  `Number_of_students_internship` int NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t1_4_1`
--

CREATE TABLE `t1_4_1` (
  `Username` varchar(30) DEFAULT NULL,
  `opt` varchar(50) DEFAULT NULL,
  `url` varchar(2000) DEFAULT NULL,
  `id_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t1_4_2`
--

CREATE TABLE `t1_4_2` (
  `Username` varchar(30) DEFAULT NULL,
  `opt` varchar(50) DEFAULT NULL,
  `url` varchar(2000) DEFAULT NULL,
  `id_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_1_1`
--

CREATE TABLE `t2_1_1` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL,
  `Prog_name` varchar(100) NOT NULL,
  `Total_Students` int NOT NULL,
  `Other_state_student_number` int NOT NULL,
  `Other_country_student_number` int NOT NULL,
  `Link` varchar(2560) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_1_2`
--

CREATE TABLE `t2_1_2` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL,
  `Prog_name` varchar(100) NOT NULL,
  `Seats` int NOT NULL,
  `Applications_recieved` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_1_3`
--

CREATE TABLE `t2_1_3` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL,
  `Prog_name` varchar(100) NOT NULL,
  `SC_1` int NOT NULL,
  `ST_1` int NOT NULL,
  `OBC_1` int NOT NULL,
  `GEN_1` int NOT NULL,
  `OTH_1` int NOT NULL,
  `SC_2` int NOT NULL,
  `ST_2` int NOT NULL,
  `OBC_2` int NOT NULL,
  `GEN_2` int NOT NULL,
  `OTH_2` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_2_1`
--

CREATE TABLE `t2_2_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_2_2`
--

CREATE TABLE `t2_2_2` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL,
  `Prog_name` varchar(100) NOT NULL,
  `UG_students` int NOT NULL,
  `PG_students` int NOT NULL,
  `UG_only_teachers` int NOT NULL,
  `PG_only_teachers` int NOT NULL,
  `UG_PG_teachers` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_3_2`
--

CREATE TABLE `t2_3_2` (
  `Username` varchar(30) NOT NULL,
  `Number_of_teachers_using_ICT` int NOT NULL,
  `Teacher_number` int NOT NULL,
  `ICT_tools` varchar(100) NOT NULL,
  `ICT_class_numbers` int NOT NULL,
  `smart_classroom_number` int NOT NULL,
  `Eresources_used` varchar(100) NOT NULL,
  `Link` varchar(2560) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_3_3`
--

CREATE TABLE `t2_3_3` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `Student_number` int NOT NULL,
  `Full_time_teacher` int NOT NULL,
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
  `Number_of_sanctioned_post_ug` int NOT NULL,
  `Number_of_sanctioned_post_pg` int NOT NULL,
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
  `PHD_Teacher` int NOT NULL,
  `Teacher` int NOT NULL,
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
  `Link` varchar(2560) NOT NULL,
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
  `sanctioned_post_number_ug` int NOT NULL,
  `sanctioned_post_number_pg` int NOT NULL,
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
  `Complaint_no` int NOT NULL,
  `Total_students` int NOT NULL,
  `id_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_5_3`
--

CREATE TABLE `t2_5_3` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `No_of_application_recieved_for_reevaluation` int NOT NULL,
  `Total_students` int NOT NULL,
  `Marks_changed_cases` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_5_4`
--

CREATE TABLE `t2_5_4` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
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
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_6_2`
--

CREATE TABLE `t2_6_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t2_6_3`
--

CREATE TABLE `t2_6_3` (
  `Username` varchar(30) DEFAULT NULL,
  `Prog_code` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(100) DEFAULT NULL,
  `Total_Students` int DEFAULT NULL,
  `Passed_students` int DEFAULT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_1`
--

CREATE TABLE `t3_1_1` (
  `Username` varchar(100) NOT NULL,
  `descr` text NOT NULL,
  `Link` varchar(2560) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_2`
--

CREATE TABLE `t3_1_2` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Amount` varchar(12) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Duration` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_5`
--

CREATE TABLE `t3_1_5` (
  `Username` varchar(200) NOT NULL,
  `Choice` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `Link` varchar(5000) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_1`
--

CREATE TABLE `t3_3_1` (
  `Username` varchar(100) NOT NULL,
  `descr` text NOT NULL,
  `Link` varchar(2560) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `Link` varchar(3000) NOT NULL,
  `Dateest` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_1`
--

CREATE TABLE `t3_4_1` (
  `Username` varchar(200) NOT NULL,
  `URL` varchar(2000) NOT NULL,
  `YesNo` varchar(50) NOT NULL,
  `Mechanism` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_5`
--

CREATE TABLE `t3_4_5` (
  `Username` varchar(200) NOT NULL,
  `Title` varchar(2000) NOT NULL,
  `Name` varchar(2000) NOT NULL,
  `Department` varchar(2000) NOT NULL,
  `Journal` varchar(2000) NOT NULL,
  `Period` varchar(200) NOT NULL,
  `Year` varchar(200) NOT NULL,
  `ISBN` varchar(200) NOT NULL,
  `Link` varchar(2560) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_6b`
--

CREATE TABLE `t3_4_6b` (
  `id` int NOT NULL,
  `Username` text NOT NULL,
  `tname` text NOT NULL,
  `aname` text NOT NULL,
  `ptitle` text NOT NULL,
  `prestype` text NOT NULL,
  `cname` text NOT NULL,
  `host` text NOT NULL,
  `nori` text NOT NULL,
  `sdate` text NOT NULL,
  `edate` text NOT NULL,
  `duration` text NOT NULL,
  `year` text NOT NULL,
  `affinst` text NOT NULL,
  `finance` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t3_4_6c`
--

CREATE TABLE `t3_4_6c` (
  `id` int NOT NULL,
  `Username` text NOT NULL,
  `tname` text NOT NULL,
  `wname` text NOT NULL,
  `host` text NOT NULL,
  `nori` text NOT NULL,
  `sdate` text NOT NULL,
  `edate` text NOT NULL,
  `duration` text NOT NULL,
  `year` text NOT NULL,
  `affinst` text NOT NULL,
  `finance` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `cit` int NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `cit` int NOT NULL,
  `inst` varchar(200) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t3_5_1`
--

CREATE TABLE `t3_5_1` (
  `Username` varchar(200) NOT NULL,
  `Link` varchar(2000) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_1`
--

CREATE TABLE `t3_6_1` (
  `Username` varchar(100) NOT NULL,
  `descr` text NOT NULL,
  `Link` varchar(2000) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `Link` varchar(2000) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `Link` varchar(2000) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_1`
--

CREATE TABLE `t4_1_1` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_2`
--

CREATE TABLE `t4_1_2` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_3`
--

CREATE TABLE `t4_1_3` (
  `Username` varchar(100) NOT NULL,
  `totalc` int NOT NULL,
  `totals` int NOT NULL,
  `lcd` int NOT NULL,
  `lan` int NOT NULL,
  `semi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_4`
--

CREATE TABLE `t4_1_4` (
  `Username` varchar(100) NOT NULL,
  `budgeta` int NOT NULL,
  `budgetu` int NOT NULL,
  `yeara` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_2_2`
--

CREATE TABLE `t4_2_2` (
  `Username` varchar(100) NOT NULL,
  `nameb` varchar(100) NOT NULL,
  `namep` varchar(100) NOT NULL,
  `nameau` varchar(100) NOT NULL,
  `numc` int NOT NULL,
  `yearp` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `validityf` int NOT NULL,
  `validityt` int NOT NULL,
  `report` varchar(225) NOT NULL,
  `access` varchar(100) NOT NULL,
  `Link` varchar(2000) NOT NULL,
  `id_time` varchar(100) NOT NULL,
  `choice_423` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_2_5`
--

CREATE TABLE `t4_2_5` (
  `Username` varchar(100) NOT NULL,
  `ereso` varchar(100) NOT NULL,
  `det` varchar(100) NOT NULL,
  `raccess` varchar(100) NOT NULL,
  `Link` varchar(2000) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_2_6`
--

CREATE TABLE `t4_2_6` (
  `Username` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `users` int NOT NULL,
  `teachers` int NOT NULL,
  `students` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Link` varchar(2000) NOT NULL,
  `choice_427` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_1`
--

CREATE TABLE `t4_3_1` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(1000) NOT NULL,
  `Link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_2`
--

CREATE TABLE `t4_3_2` (
  `Username` varchar(100) NOT NULL,
  `numbers` int NOT NULL,
  `numberc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_3`
--

CREATE TABLE `t4_3_3` (
  `Username` varchar(100) NOT NULL,
  `choice_433` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_4`
--

CREATE TABLE `t4_3_4` (
  `Username` varchar(100) NOT NULL,
  `namee` varchar(100) NOT NULL,
  `linkm` varchar(100) NOT NULL,
  `id_time` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t4_4_2`
--

CREATE TABLE `t4_4_2` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_1`
--

CREATE TABLE `t5_1_1` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `name_of_scheme` varchar(200) NOT NULL,
  `number_of_students_benefited_govt_scheme` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_2`
--

CREATE TABLE `t5_1_2` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `name_of_scheme` varchar(1000) NOT NULL,
  `number_of_student_benefited` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_3`
--

CREATE TABLE `t5_1_3` (
  `Username` varchar(100) NOT NULL,
  `name_of_capability_enhancement_scheme` varchar(100) NOT NULL,
  `year_of_implementation` varchar(30) NOT NULL,
  `number_of_students_enrolled` int NOT NULL,
  `name_of_agencies_involved` varchar(200) NOT NULL,
  `id_time` varchar(100) NOT NULL,
  `choice_513` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_4`
--

CREATE TABLE `t5_1_4` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `name_of_scheme` varchar(100) NOT NULL,
  `number_of_benefited_students_by_guidance_for_competitive_exam` int NOT NULL,
  `number_of_benefited_students_by_career_counselling_activities` int NOT NULL,
  `number_of_students_passed_in_competitive_exams` int NOT NULL,
  `number_of_students_placed` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_5`
--

CREATE TABLE `t5_1_5` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `FIle_name` varchar(100) NOT NULL,
  `Link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_6`
--

CREATE TABLE `t5_1_6` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `number_of_grievances_appealed` int NOT NULL,
  `number_of_grievances_redressed` int NOT NULL,
  `number_of_days` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_2_1`
--

CREATE TABLE `t5_2_1` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `program_graduated_from` varchar(100) NOT NULL,
  `prog_name` varchar(1000) NOT NULL,
  `number_of_student_placed` int NOT NULL,
  `name_of_employer_with_details` varchar(200) NOT NULL,
  `package_received` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_2_2`
--

CREATE TABLE `t5_2_2` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `number_students_enrolled_higher_education` int NOT NULL,
  `program_graduated_from` varchar(100) NOT NULL,
  `dept_graduated_from` varchar(100) NOT NULL,
  `name_of_institution_joined` varchar(200) NOT NULL,
  `name_of_program_admitted_to` varchar(200) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_3_2`
--

CREATE TABLE `t5_3_2` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_3_3`
--

CREATE TABLE `t5_3_3` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `name_of_activity` varchar(1000) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_4_1`
--

CREATE TABLE `t5_4_1` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t5_4_3`
--

CREATE TABLE `t5_4_3` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(30) NOT NULL,
  `date_fo_meetings` varchar(1000) NOT NULL,
  `numbers_of_members_attended` int NOT NULL,
  `total_number_of_alumni_enrolled` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_1_1`
--

CREATE TABLE `t6_1_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_1_2`
--

CREATE TABLE `t6_1_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_1`
--

CREATE TABLE `t6_2_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_2`
--

CREATE TABLE `t6_2_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_2_3`
--

CREATE TABLE `t6_2_3` (
  `Username` varchar(100) NOT NULL,
  `PD_C` varchar(1000) NOT NULL,
  `PD_Y` varchar(1000) NOT NULL,
  `PD_L` varchar(1000) NOT NULL,
  `AD_C` varchar(1000) NOT NULL,
  `AD_Y` varchar(1000) NOT NULL,
  `AD_L` varchar(1000) NOT NULL,
  `FA_C` varchar(1000) NOT NULL,
  `FA_Y` varchar(1000) NOT NULL,
  `FA_L` varchar(1000) NOT NULL,
  `SA_C` varchar(1000) NOT NULL,
  `SA_Y` varchar(1000) NOT NULL,
  `SA_L` varchar(1000) NOT NULL,
  `EX_C` varchar(1000) NOT NULL,
  `EX_Y` varchar(1000) NOT NULL,
  `EX_L` varchar(1000) NOT NULL,
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
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_3_1`
--

CREATE TABLE `t6_3_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
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
  `Participants_no_teach` int NOT NULL,
  `Participants_no_non_teach` int NOT NULL,
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
  `Participants_no_teach` int NOT NULL,
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
  `Participants_no_non_teach` int NOT NULL,
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
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_4_1`
--

CREATE TABLE `t6_4_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
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
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_1`
--

CREATE TABLE `t6_5_1` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t6_5_2`
--

CREATE TABLE `t6_5_2` (
  `Username` varchar(30) DEFAULT NULL,
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
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
  `participant_no` int NOT NULL,
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
  `Username` varchar(30) NOT NULL DEFAULT '',
  `Description` varchar(3500) DEFAULT NULL,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(2000) DEFAULT NULL
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
  `numm` int NOT NULL,
  `numf` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_2`
--

CREATE TABLE `t7_1_2` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_4`
--

CREATE TABLE `t7_1_4` (
  `Username` varchar(100) NOT NULL,
  `tl` varchar(100) NOT NULL,
  `led` decimal(10,0) NOT NULL,
  `ls` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_5`
--

CREATE TABLE `t7_1_5` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_6`
--

CREATE TABLE `t7_1_6` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_7`
--

CREATE TABLE `t7_1_7` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `num_participants` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `num_participants` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_12`
--

CREATE TABLE `t7_1_12` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_13`
--

CREATE TABLE `t7_1_13` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `participants` int NOT NULL,
  `link` text NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_15`
--

CREATE TABLE `t7_1_15` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_16`
--

CREATE TABLE `t7_1_16` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(10) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `num_participants` int NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_18`
--

CREATE TABLE `t7_1_18` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_19`
--

CREATE TABLE `t7_1_19` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t7_3_1`
--

CREATE TABLE `t7_3_1` (
  `Username` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `File_name` varchar(1000) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t9_1_1`
--

CREATE TABLE `t9_1_1` (
  `Username` varchar(30) NOT NULL,
  `Prog_Code` varchar(100) NOT NULL,
  `Prog_Name` varchar(1000) NOT NULL,
  `Year` varchar(1000) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t9_1_2`
--

CREATE TABLE `t9_1_2` (
  `Username` varchar(100) NOT NULL,
  `Prog_Code` varchar(100) NOT NULL,
  `Prog_Name_Added` varchar(1000) NOT NULL,
  `Prog_Name_Drpoed` varchar(1000) NOT NULL,
  `Year_add_drop` varchar(100) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t9_2_1`
--

CREATE TABLE `t9_2_1` (
  `Username` varchar(100) NOT NULL,
  `Year_of_Enrollment` varchar(100) NOT NULL,
  `Student_name` varchar(1000) NOT NULL,
  `Student_Enrollment_no` varchar(100) NOT NULL,
  `Date_of_Enrollment` varchar(100) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t9_2_2`
--

CREATE TABLE `t9_2_2` (
  `Username` varchar(100) NOT NULL,
  `Year_of_Passing` varchar(100) NOT NULL,
  `Name_of_Student` varchar(1000) NOT NULL,
  `Enrollment_number` varchar(100) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t9_2_3`
--

CREATE TABLE `t9_2_3` (
  `Username` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Name_of_Student` varchar(1000) NOT NULL,
  `Date_of_appearing_in_exam` varchar(100) NOT NULL,
  `Roll_number` varchar(100) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t9_3_2a`
--

CREATE TABLE `t9_3_2a` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `id_number` varchar(1000) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Designation` varchar(2000) NOT NULL,
  `Date_of_joining` varchar(100) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t9_3_2b`
--

CREATE TABLE `t9_3_2b` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `id_number` varchar(1000) NOT NULL,
  `year_joined_left` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Designation` varchar(2000) NOT NULL,
  `Date_of_joining` varchar(100) NOT NULL,
  `Date_of_leaving` varchar(200) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t9_3_3`
--

CREATE TABLE `t9_3_3` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Number_of_post` varchar(1000) NOT NULL,
  `LInk` varchar(1000) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t9_4_1`
--

CREATE TABLE `t9_4_1` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Number_of_eligible_application_recieved` varchar(1000) NOT NULL,
  `LInk` varchar(1000) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t9_4_2`
--

CREATE TABLE `t9_4_2` (
  `Username` varchar(30) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `NUmber_of_seats_enmarked` varchar(1000) NOT NULL,
  `LInk` varchar(1000) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_additional_data`
--

CREATE TABLE `t_additional_data` (
  `Username` varchar(200) NOT NULL,
  `Section` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Link` varchar(10000) NOT NULL,
  `deactive` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_additional_data`
--

INSERT INTO `t_additional_data` (`Username`, `Section`, `Type`, `Link`, `deactive`, `id`) VALUES
('admin7', 't1_3_4', 'other', 'http://localhost/PROJECTS/univ_data_gathering/NAC/additional_data/docs_add/admin7_05-12-2018_00-05-22_page-loa', 1, 1),
('admin7', 't2_3_1', 'additional', 'http://localhost/PROJECTS/univ_data_gathering/NAC/additional_data/docs_add/admin7_05-12-2018_00-06-25_-var-www-html-.txt', 1, 2),
('admin7', 't2_2_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/admin7_05-12-2018_00-07-21_921.csv', 1, 3),
('admin7', 't2_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/admin7_05-12-2018_00-07-43_civil_dim_1.jpg', 1, 4),
('admin3', 't2_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/admin3_05-12-2018_00-25-03_921.csv', 1, 5),
('admin3', 't2_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/admin3_05-12-2018_00-25-11_923.csv', 1, 6),
('admin2', 't2_2_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/admin2_05-12-2018_00-48-27_logo_1.5.png', 1, 7),
('admin2', 't2_3_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/admin2_05-12-2018_00-48-43_OPERATING SYSTEM ROUND -1 FIRDAY 2019 . - Gate @ Zeal.pdf', 1, 8),
('admin1', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/admin1_05-12-2018_01-44-40_insect-pest-of-rice-4-638.jpg', 1, 9),
('iipsdavv', 't1_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_10-27-05_1.1.2.pdf', 1, 10),
('iipsdavv', 't1_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_10-41-17_ERP_syllabus.pdf', 1, 11),
('iipsdavv', 't1_1_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_10-54-19_Enterprise Computing Technique.pdf', 1, 12),
('iipsdavv', 't1_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_10-56-18_IC-1005B  Multimedia Computing.pdf', 1, 13),
('iipsdavv', 't1_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_10-58-07_IC-1108B   Cloud Computing.pdf', 1, 14),
('iipsdavv', 't1_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_10-59-30_IC-1107B  Research in Computing.pdf', 1, 15),
('iipsdavv', 't1_2_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_11-12-09_IC-212 French.pdf', 1, 16),
('iipsdavv', 't1_2_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_11-13-29_IC-514     Organization  Behavior.pdf', 1, 17),
('iipsdavv', 't1_2_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_11-16-07_ERP_syllabus.pdf', 1, 18),
('iipsdavv', 't1_2_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_11-18-22_IC-1108B   Cloud Computing.pdf', 1, 19),
('iipsdavv', 't1_2_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_13-09-02_schemes scan.pdf', 1, 20),
('iipsdavv', 't1_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_13-23-41_IC-202B Chemistry ', 1, 21),
('iipsdavv', 't1_3_4', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_13-40-29_industry training.xlsx', 1, 22),
('iipsdavv', 't1_3_4', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_13-42-26_industry training.pdf', 1, 23),
('admin4', 't1_1_1', 'other', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/admin4_05-12-2018_16-17-54_DAVV proposal v2.0(1).pdf', 1, 24),
('iipsdavv', 't5_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-31-56_Sanctio_DO_SCST.pdf', 0, 25),
('iipsdavv', 't5_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-32-19_Sanctio_DO_SCST__1_.pdf', 0, 26),
('iipsdavv', 't5_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-33-34_Sanctio_DO_SCST__2_.pdf', 0, 27),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-33-46_ordinance_MCA_Scan.pdf', 1, 28),
('iipsdavv', 't5_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-33-55_Sanctio_DO_SCST__3_.pdf', 0, 29),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-34-30_schems_2013.pdf', 1, 30),
('iipsdavv', 't5_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-34-34_Sanctio_DO_SCST__4_.pdf', 0, 31),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-34-50_schemes scan_2016.pdf', 1, 32),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-36-58_ordinance_MCA_Scan.pdf', 0, 33),
('iipsdavv', 't5_1_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-37-41_Report_Expert_advice_2018_2019.pdf', 1, 34),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-39-23_workshop.pdf', 0, 35),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-40-57_syllabus_2013_14.pdf', 1, 36),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_16-58-04_Syllabus_2016_merge.pdf', 1, 37),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_17-03-37_program outcome.pdf', 0, 38),
('iipsdavv', 't1_3_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_17-18-50_English Communication.pdf', 0, 39),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_18-10-44_ordinance-117.pdf', 0, 40),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_18-17-15_M.Tech-sheme-2013.pdf', 0, 41),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_18-31-48_M.Tech-scheme-2015-converted.pdf', 0, 42),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_18-34-13_M.Tech-sheme-2016.pdf', 0, 43),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_18-39-35_Mtech -objective.docx', 0, 44),
('sopharma', 't5_2_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_05-12-2018_19-43-29_NAAC_DCS_sopharma_t5_2_2(05-12-2018_19-34-21)_higher studies.csv', 1, 45),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_22-30-24_1.1.1.docx', 1, 46),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_22-37-21_Ordinance B. Com. H.pdf', 1, 47),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_22-37-54_scheme 17-18-1.pdf', 1, 48),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_23-00-12_Ordinance B. Com. H.pdf', 0, 49),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_23-00-35_Program outcomes- B.Com. H..docx', 0, 50),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_23-00-59_scheme course revision work shop B.Com.H. 17-18-1.pdf', 0, 51),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_23-01-22_scheme course revision work shop B.Com.H.scheme 17-18-2.pdf', 0, 52),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_23-03-17_Syllabus  B.Com. H. INDIRECT TAXES 2014-15 old (1).pdf', 0, 53),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_05-12-2018_23-04-02_Syllabus B. Com. (Hon.) 2015-16(1).pdf', 0, 54),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_09-00-54_MBA FT 2 yrs.docx', 0, 55),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_09-02-00_mba Ft syllabus revision workshop july 2-20181204173738.pdf', 0, 56),
('iipsdavv', 't3_7_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_09-13-19_IMG-20180529-WA0006.jpg', 0, 57),
('iipsdavv', 't3_7_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_09-14-10_IMG-20180529-WA0007-1.jpg', 0, 58),
('iipsdavv', 't1_3_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_12-15-34_IC-212 French.pdf', 0, 59),
('iipsdavv', 't5_1_6', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_13-24-03_antiragging 2016.JPG', 0, 60),
('iipsdavv', 't5_1_6', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_13-24-52_Order_antiragging_6.2.18.jpg', 0, 61),
('iipsdavv', 't5_1_6', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_13-25-23_Order_StudentGreCell 2018.jpg', 0, 62),
('iipsdavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_13-46-03_5.3.3 Sports and Cultural Activities.pdf', 1, 63),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-00-10_Syllabus MBA APR 2014 -15.pdf', 0, 64),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-03-12_Syllabus MBA APR 2015-16 and 2016-17.pdf', 0, 65),
('biochem', 't1_1_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/biochem_06-12-2018_14-24-47_M.Sc 18-20 Highltd.jpg', 0, 66),
('biochem', 't1_1_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/biochem_06-12-2018_14-25-49_PhD CW 2018-1 Highltd.jpg', 1, 67),
('biochem', 't1_1_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/biochem_06-12-2018_14-28-52_PhD CW 2018-1 Highltd.jpg', 0, 68),
('biochem', 't1_1_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/biochem_06-12-2018_14-29-33_M.Sc 18-20 Highltd.jpg', 0, 69),
('iipsdavv', 't3_6_3', 'other', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-40-27_IMG_20181205_230138.jpg', 0, 70),
('iipsdavv', 't3_6_3', 'other', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-40-47_IMG_20181205_230416.jpg', 0, 71),
('iipsdavv', 't3_6_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-41-16_IMG_20181205_230856.jpg', 0, 72),
('iipsdavv', 't3_6_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-41-55_IMG_20181205_231241.jpg', 1, 73),
('iipsdavv', 't3_6_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-42-45_IMG_20181205_231241.jpg', 0, 74),
('iipsdavv', 't3_6_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-43-14_IMG_20181205_235857.jpg', 0, 75),
('iipsdavv', 't3_6_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-44-01_IMG_20181206_000400.jpg', 0, 76),
('iipsdavv', 't3_6_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-44-19_IMG_20181206_000656.jpg', 0, 77),
('iipsdavv', 't3_6_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-44-45_IMG_20181206_001139.jpg', 0, 78),
('iipsdavv', 't3_6_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-45-24_IMG_20181206_000400.jpg', 0, 79),
('iipsdavv', 't3_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-47-25_IMG_20181205_220337.jpg', 0, 80),
('iipsdavv', 't3_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-47-43_IMG_20181205_220438.jpg', 0, 81),
('iipsdavv', 't3_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-47-56_IMG_20181205_220525.jpg', 0, 82),
('iipsdavv', 't3_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-48-17_IMG_20181205_220525.jpg', 0, 83),
('iipsdavv', 't3_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-48-38_IMG_20181205_220843.jpg', 0, 84),
('iipsdavv', 't3_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-48-52_IMG_20181205_221046.jpg', 0, 85),
('iipsdavv', 't3_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-49-06_IMG_20181205_221250.jpg', 0, 86),
('iipsdavv', 't3_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_14-49-21_IMG_20181205_225825.jpg', 0, 87),
('ietdavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/ietdavv_06-12-2018_15-02-27_5.3.3 additional Youth_festival_report.pdf', 0, 88),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-07-43_MBA(TA)2yrs14-16.pdf', 0, 89),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-07-57_MBA(TA)2yrs15-17.pdf', 0, 90),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-08-08_MBA(TA)2yrs16-18.pdf', 0, 91),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-08-21_MBA (TA)2Yrs Batch 2017-2019.pdf', 0, 92),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-08-34_MBA (TA)2Yrs Batch 2018-2020.pdf', 0, 93),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-11-11_MBA(TA)14-16SCH.pdf', 0, 94),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-11-33_MBA(TA)15-17SCH.pdf', 0, 95),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-11-45_MBA(TA)16-18SCH.pdf', 0, 96),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-11-58_MBA(TA)16-18SCH.pdf', 0, 97),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-12-11_MBA(TA)17-19SCH.pdf', 0, 98),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-12-26_MBA(TA)18-20SCH.pdf', 0, 99),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-12-39_Nomanclature 004.pdf', 0, 100),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-12-50_Nomanclature 002.pdf', 0, 101),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-13-01_Nomanclature 003.pdf', 0, 102),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_16-36-22_2k14Batch_M.Tech.pdf', 0, 103),
('examofficedavv', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_06-12-2018_17-11-12_aidtostudent.pdf', 0, 104),
('examofficedavv', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_06-12-2018_17-11-45_studentaccident.pdf', 0, 105),
('examofficedavv', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_06-12-2018_17-12-08_studenthandicapt.pdf', 0, 106),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_06-12-2018_17-59-51_Syllabus 5yrs.pdf', 0, 107),
('sodsf', 't1_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sodsf_06-12-2018_18-29-05_2016-03-10-MoM.pdf', 0, 108),
('sodsf', 't1_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sodsf_06-12-2018_18-29-30_2017-04-12-MoM.pdf', 0, 109),
('sodsf', 't1_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sodsf_06-12-2018_18-29-44_2018-04-27-MoM.pdf', 0, 110),
('sodsf', 't1_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sodsf_06-12-2018_18-30-21_2017-12-01-New Programmes.pdf', 0, 111),
('sodsf', 't1_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sodsf_06-12-2018_18-30-33_2017-12-23-Change in Programmes Title.pdf', 0, 112),
('ietdavv', 't1_3_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/ietdavv_07-12-2018_00-34-09_NAAC_DCS_ietdavv_t1_1_3(06-12-2018_16-09-32).csv', 1, 113),
('ietdavv', 't1_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/ietdavv_07-12-2018_00-36-05_NAAC_DCS_ietdavv_t1_1_3(06-12-2018_16-09-32).csv', 0, 114),
('biochem', 't7_1_14', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/biochem_07-12-2018_12-53-39_IMG-20180812-WA0072.jpg', 1, 115),
('biochem', 't7_1_14', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/biochem_07-12-2018_13-06-52_Tiranga Abhiyan Pictures.docx', 0, 116),
('biochem', 't7_1_17', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/biochem_07-12-2018_13-09-30_Photographs 2015 to upload.docx', 0, 117),
('biochem', 't7_1_17', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/biochem_07-12-2018_13-19-24_Photo Meditation, Swachhata 2018.docx', 0, 118),
('iipsdavv', 't5_4_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_12-15-09_Alumni Meet MCA 19.5.18.pdf', 0, 119),
('iipsdavv', 't5_4_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_12-15-54_Alumni-contribution-iips.pdf', 0, 120),
('iipsdavv', 't7_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_14-16-22_Electricity Bills.pdf', 0, 121),
('iipsdavv', 't7_1_4', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_14-19-50_LED Lights.pdf', 0, 122),
('iipsdavv', 't7_1_9', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_14-53-45_Photograph of Ramp.pdf', 0, 123),
('iipsdavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_17-23-41_Guidance to competitive exams USIEF.pdf', 0, 124),
('iipsdavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_17-24-08_campus to corporate .pdf', 0, 125),
('iipsdavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_17-24-31_Personal Counselling (1).pdf', 0, 126),
('iipsdavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_17-24-46_Report_Expert_advice_2018_2019.pdf', 0, 127),
('iipsdavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_17-25-08_Soft skill development workshop.pdf', 0, 128),
('iipsdavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_17-25-48_Titans Newsletter VOL 1 FEB 2018.. (1).pdf', 0, 129),
('iipsdavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_17-26-13_titans newsletter VOL 4.pdf', 0, 130),
('iipsdavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_17-26-44_Titans Newsletter volume-3.pdf', 0, 131),
('iipsdavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_17-27-12_titans newsletter volume 2.pdf', 0, 132),
('iipsdavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_12-12-2018_17-27-28_Workshop Digital Marketing APR Sep 18.pdf', 0, 133),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-24-07_Chandni Gunaparthi.pdf', 0, 134),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-24-23_Dhananjay-parihar.pdf', 0, 135),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-24-50_Exodus-mbata.pdf', 0, 136),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-25-04_hrydesh-kapoor.pdf', 0, 137),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-25-21_Nilesh khatri', 0, 138),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-25-37_Nilesh Khatri-TT.pdf', 0, 139),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-25-52_Nilesh Khatri-TT.pdf', 0, 140),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-26-06_Nilesh Khatri-utd.pdf', 0, 141),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-26-20_pradeep-National Debate- 2017.pdf', 0, 142),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-26-37_pradeep-State level 3rd 2014.pdf', 0, 143),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-27-24_pradeep-State level debate 1st 2016-17.pdf', 0, 144),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-27-40_pradeep-State level Quiz 1st 2016.pdf', 0, 145),
('iipsdavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-27-55_pradeep-Youth Festival Zonal 3rd 2015-16.pdf', 0, 146),
('iipsdavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-59-29_5.3.3.(Feb-june14) .pdf', 0, 147),
('iipsdavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-59-42_5.3.3.(2014-15) .pdf', 0, 148),
('iipsdavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_16-59-53_5.3.3.(2015-16) .pdf', 0, 149),
('iipsdavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_17-00-11_5.3.3.(2016-17).pdf', 0, 150),
('iipsdavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_17-00-23_5.3.3.(2017-18).pdf', 0, 151),
('iipsdavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_13-12-2018_17-00-35_5.3.3.(2018-19).pdf', 0, 152),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_11-36-25_DSC_0246.JPG', 1, 153),
('emrcdavv', 't2_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_14-12-2018_15-02-10_213emrc.PDF', 0, 154),
('emrcdavv', 't3_2_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_14-12-2018_15-03-59_321n322emrc.PDF', 0, 155),
('emrcdavv', 't3_4_4', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_14-12-2018_15-05-24_344emrc.PDF', 0, 156),
('emrcdavv', 't4_1_4', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_14-12-2018_15-12-13_414emrc.PDF', 0, 157),
('emrcdavv', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_14-12-2018_15-13-34_512emrc.PDF', 0, 158),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-52-17_DSC_0246.JPG', 0, 159),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-53-18_DSC_0247.JPG', 0, 160),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-53-48_DSC_0248.JPG', 0, 161),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-54-20_DSC_0249.JPG', 0, 162),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-54-54_DSC_0390.JPG', 0, 163),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-55-32_DSC_0391.JPG', 0, 164),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-56-08_DSC_0531.JPG', 0, 165),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-56-35_DSC_0533.JPG', 0, 166),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-57-05_DSC_0533.JPG', 0, 167),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-57-31_DSC_0536.JPG', 0, 168),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-58-08_DSC_0538.JPG', 0, 169),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-58-51_DSC_0556.JPG', 0, 170),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_15-59-30_DSC_0576.JPG', 0, 171),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-00-03_DSC_0649.JPG', 0, 172),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-00-54_DSC_1166.JPG', 0, 173),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-01-32_DSC_1200.JPG', 0, 174),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-02-07_DSC_1460.JPG', 0, 175),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-02-38_DSC_1622.JPG', 0, 176),
('biochem', 't6_5_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/biochem_14-12-2018_16-15-52_DQAC Activities Biochemistry.docx', 0, 177),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-22-50_DSC_8792.JPG', 0, 178),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-23-14_DSC_8966.JPG', 0, 179),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-23-51_DSC_8966.JPG', 0, 180),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-24-11_DSC_9099.JPG', 0, 181),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-24-42_DSC_9197.JPG', 0, 182),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-25-05_DSC_9253.JPG', 0, 183),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-25-35_DSC_9253.JPG', 0, 184),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-25-55_IMG_1527.JPG', 0, 185),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-26-21_IMG_1789.JPG', 0, 186),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-26-45_IMG_1828.JPG', 0, 187),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-27-06_MKR_0844.JPG', 0, 188),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-27-48_MKR_0891.JPG', 0, 189),
('examofficedavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-28-21_MKR_0980.JPG', 0, 190),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-28-48_MKR_1085.JPG', 0, 191),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-29-13_MKR_1222.JPG', 0, 192),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-29-38_MKR_1250.JPG', 0, 193),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-30-06_MKR_1845.JPG', 0, 194),
('examofficedavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-30-35_MKR_2048.JPG', 0, 195),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-30-59_MKR_2093.JPG', 0, 196),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-31-19_MKR_2122.JPG', 0, 197),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-31-42_MKR_2171.JPG', 0, 198),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-32-07_MKR_2439.JPG', 0, 199),
('examofficedavv', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-32-34_MKR_2818.JPG', 0, 200),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-33-10_MKR_3074.JPG', 0, 201),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-34-15_MKR_3085.JPG', 0, 202),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-34-45_MKR_3263.JPG', 0, 203),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-35-11_MKR_3286.JPG', 0, 204),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-35-36_MKR_3368.JPG', 0, 205),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-35-58_MKR_3435.JPG', 0, 206),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-36-20_MKR_3586.JPG', 0, 207),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-36-58_MKR_3755.JPG', 0, 208),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-37-30_MKR_3952.JPG', 0, 209),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-38-03_MKR_3958.JPG', 0, 210),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-38-45_MKR_3959.JPG', 0, 211),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-39-11_MKR_3980.JPG', 0, 212),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-39-38_MKR_4032.JPG', 0, 213),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-40-06_MKR_4046.JPG', 0, 214),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-40-30_MKR_4091.JPG', 0, 215),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-40-58_MKR_4124.JPG', 0, 216),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-41-33_MKR_4137.JPG', 0, 217),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-41-57_MKR_4278.JPG', 0, 218),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-42-21_MKR_4286.JPG', 0, 219),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-42-48_MKR_4298.JPG', 0, 220),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-43-18_MKR_4328.JPG', 0, 221),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-43-59_MKR_4575.JPG', 0, 222),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-44-28_MKR_4603.JPG', 0, 223),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-44-58_MKR_4670.JPG', 0, 224),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-45-17_MKR_4686.JPG', 0, 225),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-45-39_MKR_4686.JPG', 0, 226),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-46-01_MKR_4696.JPG', 0, 227),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-46-21_MKR_4911.JPG', 0, 228),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-46-46_MKR_4938.JPG', 0, 229),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-47-11_MKR_5013.JPG', 0, 230),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-47-29_MKR_5159.JPG', 0, 231),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-50-10_IMG_6556.JPG', 0, 232),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-50-27_IMG_6659.JPG', 0, 233),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-50-47_IMG_6669.JPG', 0, 234),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-51-20_IMG_6721.JPG', 0, 235),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-51-34_IMG_6761.JPG', 0, 236),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-51-52_IMG_6776.JPG', 0, 237),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-52-11_IMG_6815.JPG', 0, 238),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-52-36_IMG_6989.JPG', 0, 239),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-52-56_IMG_7154.JPG', 0, 240),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-53-21_IMG_7201.JPG', 0, 241),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-53-46_IMG_7897.JPG', 0, 242),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-54-18_IMG_7901.JPG', 0, 243),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-54-51_IMG_8178.JPG', 0, 244),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-55-16_IMG_8204.JPG', 0, 245),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-55-58_IMG_8208.JPG', 0, 246),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-56-23_IMG_8230.JPG', 0, 247),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-56-51_MKR_0167.JPG', 0, 248),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-57-18_MKR_0228.JPG', 0, 249),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-57-43_MKR_0236.JPG', 0, 250),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-58-12_MKR_0413.JPG', 0, 251),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-58-33_MKR_0462.JPG', 0, 252),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-59-00_MKR_0533.JPG', 0, 253),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-59-29_MKR_0650.JPG', 0, 254),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_16-59-52_MKR_0666.JPG', 0, 255),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-00-14_MKR_0706.JPG', 0, 256),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-00-41_MKR_0716.JPG', 0, 257),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-01-16_MKR_0794.JPG', 0, 258),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-01-36_MKR_0934.JPG', 0, 259),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-01-58_MKR_1087.JPG', 0, 260),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-02-24_MKR_1128.JPG', 0, 261),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-02-47_MKR_1156.JPG', 0, 262),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-03-06_MKR_1315.JPG', 0, 263),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-03-36_MKR_1470.JPG', 0, 264),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-03-57_MKR_1775.JPG', 0, 265),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-04-16_MKR_1777.JPG', 0, 266),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-04-40_MKR_1778.JPG', 0, 267),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-05-00_MKR_1780.JPG', 0, 268),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-05-40_MKR_2319.JPG', 0, 269),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-06-04_MKR_2325.JPG', 0, 270),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-06-36_MKR_2459.JPG', 0, 271),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-06-57_MKR_2491.JPG', 0, 272),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-07-22_MKR_2525.JPG', 0, 273),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-07-56_MKR_2529.JPG', 0, 274),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-08-32_MKR_2543.JPG', 0, 275),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-09-00_MKR_9333.JPG', 0, 276),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-09-56_MKR_9333.JPG', 0, 277),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-10-44_MKR_9366.JPG', 0, 278),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-11-22_MKR_9398.JPG', 0, 279),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-11-48_MKR_9432.JPG', 0, 280),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-12-15_MKR_9447.JPG', 0, 281),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-12-52_MKR_9477.JPG', 0, 282),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-13-18_MKR_9489.JPG', 0, 283),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-13-37_MKR_9501.JPG', 0, 284),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-14-02_MKR_9535.JPG', 0, 285),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-14-28_MKR_9572.JPG', 0, 286),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-14-57_MKR_9581.JPG', 0, 287),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-15-24_MKR_9582.JPG', 0, 288),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-15-46_MKR_9607.JPG', 0, 289),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-16-06_MKR_9660.JPG', 0, 290),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-16-33_MKR_9671.JPG', 0, 291),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-16-52_MKR_9695.JPG', 0, 292),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-17-16_MKR_9781.JPG', 0, 293),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-17-39_MKR_9826.JPG', 0, 294),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-17-59_MKR_9917.JPG', 0, 295),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_14-12-2018_17-18-18_MKR_9980.JPG', 0, 296),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_14-12-2018_17-39-21_2014-2020.pdf', 0, 297),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_14-12-2018_17-40-38_2015-2021.pdf', 0, 298),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_14-12-2018_17-41-05_2016-2022.pdf', 0, 299),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_14-12-2018_17-41-30_2017-2023.pdf', 0, 300),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_14-12-2018_17-42-15_2018-2024.pdf', 0, 301),
('iipsdavv', 't3_7_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_14-12-2018_18-36-39_IMG-20180529-WA0006.jpg', 0, 302),
('iipsdavv', 't3_7_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_14-12-2018_18-37-01_IMG-20180529-WA0007.jpg', 0, 303),
('iipsdavv', 't3_7_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_14-12-2018_18-38-58_IIPS 1 17.jpg', 0, 304),
('iipsdavv', 't3_7_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_14-12-2018_18-39-13_IIPS 2 17.jpg', 0, 305),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_15-12-2018_14-11-06_Nomanclature 004.pdf', 0, 306),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_15-12-2018_14-11-24_Nomanclature 002.pdf', 0, 307),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_15-12-2018_15-35-29_2015 revised complete scheme MBA(MS) 2yrs.pdf', 0, 308),
('iipsdavv', 't3_7_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_15-12-2018_17-30-47_YI MOU 2017.pdf', 0, 309),
('iipsdavv', 't3_7_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_15-12-2018_17-31-11_YI MOU 2018.pdf', 0, 310),
('soyoga', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/soyoga_16-12-2018_13-21-22_revised syllabus 10.pdf', 0, 311),
('socsit', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_16-12-2018_22-02-48_SCSIT_COURSE_OUTCOMES.pdf', 0, 312),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_12-13-26_MKR_9671.JPG', 0, 313),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_12-19-32_photos.zip', 1, 314),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-02-59_IMG-20181215-WA0000.jpg', 0, 315),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-03-20_IMG-20181215-WA0001.jpg', 0, 316),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-03-41_IMG-20181215-WA0002.jpg', 0, 317),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-04-04_IMG-20181215-WA0003.jpg', 0, 318),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-04-23_IMG-20181215-WA0004.jpg', 0, 319),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-04-43_IMG-20181215-WA0005.jpg', 0, 320),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-05-00_IMG-20181215-WA0006.jpg', 0, 321),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-05-18_IMG-20181215-WA0007.jpg', 0, 322),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-05-35_IMG-20181215-WA0008.jpg', 0, 323);
INSERT INTO `t_additional_data` (`Username`, `Section`, `Type`, `Link`, `deactive`, `id`) VALUES
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-06-04_IMG-20181215-WA0009.jpg', 0, 324),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-06-24_IMG-20181215-WA0010.jpg', 0, 325),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-06-45_IMG-20181215-WA0011.jpg', 0, 326),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-07-06_IMG-20181215-WA0012.jpg', 0, 327),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-07-24_IMG-20181215-WA0013.jpg', 0, 328),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_13-07-41_IMG-20181215-WA0014.jpg', 0, 329),
('socsit', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_13-15-24_Harshal.jpg', 1, 330),
('socsit', 't5_3_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_13-17-04_Genesis_2017.pdf', 0, 331),
('socsit', 't5_3_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_13-17-53_Report_Genesis-2017.pdf', 0, 332),
('socsit', 't5_3_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_13-18-27_GENESIS_SCHEDULE_2018.pdf', 0, 333),
('socsit', 't5_3_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_13-23-46_Induction-2014.pdf', 0, 334),
('socsit', 't5_3_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_13-24-11_Induction-2015.pdf', 0, 335),
('socsit', 't5_3_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_13-24-47_Induction-2016.pdf', 0, 336),
('socsit', 't5_3_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_13-25-13_Induction-2017.pdf', 0, 337),
('socsit', 't5_3_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_13-25-36_Induction-2018.pdf', 0, 338),
('socsit', 't5_4_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_13-26-14_Alumni-meet-2015.pdf', 1, 339),
('socsit', 't5_4_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_13-26-44_Alumni-meet-2018.pdf', 1, 340),
('iipsdavv', 't6_5_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_14-09-16_Word IQAC 2018.pdf', 0, 341),
('socsit', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_14-21-28_Harshal-Aadhaar.jpg', 1, 342),
('iipsdavv', 't5_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_14-54-01_5.1.1 Summary Sheet.pdf', 0, 343),
('iipsdavv', 't5_2_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_14-55-03_5.2.2 Student progression to Higher Education (1).pdf', 0, 344),
('iipsdavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_15-18-10_Retech report .pdf', 0, 345),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_15-21-36_complete syllabus 2k17-19.pdf', 0, 346),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_15-22-01_complete syllabus 2k16-18.pdf', 0, 347),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_15-22-24_complete syllabus 2k15-17.pdf', 0, 348),
('iipsdavv', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_15-22-48_complete syllabus 2k14-16.pdf', 0, 349),
('examofficedavv', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-33-03_AccidentAid.pdf', 0, 350),
('examofficedavv', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-33-31_financiallyweaker.pdf', 0, 351),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-35-20_20132014.jpg', 0, 352),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-35-42_201320141.jpg', 0, 353),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-36-15_201320142.jpg', 0, 354),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-36-48_201320143.jpg', 0, 355),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-37-05_201320144.jpg', 0, 356),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-37-26_201320145.jpg', 0, 357),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-37-51_201320146.jpg', 0, 358),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-38-13_201320147.jpg', 0, 359),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-38-29_201320148.jpg', 0, 360),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-38-50_201320149.jpg', 0, 361),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-39-43_2013201410.jpg', 0, 362),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-40-03_2013201411.jpg', 0, 363),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-40-24_2013201412.jpg', 0, 364),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-40-52_2013201412.jpg', 0, 365),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-41-13_2013201413.jpg', 0, 366),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-45-57_unifest20162017.jpg', 0, 367),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-46-15_unifest201620171.jpg', 0, 368),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-46-30_unifest201620172.jpg', 0, 369),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-46-48_unifest201620173.jpg', 0, 370),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-47-08_unifest201620174.jpg', 0, 371),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-47-24_unifest201620175.jpg', 0, 372),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-47-45_unifest201620176.jpg', 0, 373),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-48-05_unifest201620177.jpg', 0, 374),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-48-25_unifest201620178.jpg', 0, 375),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-48-43_unifest201620179.jpg', 0, 376),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-48-59_unifest2016201710.jpg', 0, 377),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-49-17_unifest2016201711.jpg', 0, 378),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-50-24_20172018.pdf', 0, 379),
('examofficedavv', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-51-07_youth2018.pdf', 0, 380),
('examofficedavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-52-50_2015.pdf', 0, 381),
('examofficedavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-54-12_2016.pdf', 0, 382),
('examofficedavv', 't5_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_17-12-2018_15-54-50_2017.pdf', 0, 383),
('socsit', 't5_1_6', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_16-21-12_5.1.6_report.pdf', 0, 384),
('socsit', 't5_1_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_16-27-34_5.1.4.pdf', 0, 385),
('iipsdavv', 't4_1_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_16-30-20_Budget 14-18.pdf', 0, 386),
('iipsdavv', 't4_2_4', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_16-31-03_Budget 14-18.pdf', 0, 387),
('iipsdavv', 't4_2_6', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_16-32-27_Issue Lib Student Register125.pdf', 0, 388),
('iipsdavv', 't4_4_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_16-33-12_Budget 14-18.pdf', 0, 389),
('socsit', 't5_1_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_16-46-42_5.1.3.pdf', 0, 390),
('socsit', 't5_1_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_16-47-03_5.1.3.4.pdf', 0, 391),
('socsit', 't1_2_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-00-22_CBCS_2013-2018.pdf', 0, 392),
('socsit', 't1_3_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-03-32_SCS_IT_COURSE_OUTCOMES_ValueAddedCourses_1_3_2.pdf', 0, 393),
('socsit', 't5_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-27-26_5.1.1.pdf', 1, 394),
('socsit', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-27-53_5.1.2.pdf', 0, 395),
('socsit', 't5_2_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-40-22_5.2.1.pdf', 0, 396),
('socsit', 't5_2_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-40-54_5.2.3.pdf', 1, 397),
('iipsdavv', 't6_5_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_17-46-08_AQAR 2014-2015.pdf', 0, 398),
('iipsdavv', 't6_5_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_17-46-30_AQAR-2015-2016.pdf', 0, 399),
('socsit', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-46-42_1Scheme_JulDec2013.pdf', 0, 400),
('iipsdavv', 't6_5_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_17-46-58_IIPS_AQAR_2016-2017(1).pdf', 0, 401),
('socsit', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-47-17_2Scheme_JanMay2014.pdf', 0, 402),
('iipsdavv', 't6_5_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_17-47-25_AQAR_2017-2018_iips.pdf', 0, 403),
('socsit', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-47-44_3Scheme_JulDec2014.pdf', 0, 404),
('socsit', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-48-09_4Scheme_JanMay2015.pdf', 0, 405),
('socsit', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-48-26_5Scheme_JulDec2015.pdf', 0, 406),
('socsit', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-48-37_6Scheme_JanMay2016.pdf', 0, 407),
('socsit', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-48-46_7Scheme_JulDec2016.pdf', 0, 408),
('socsit', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-48-59_8Scheme_JanMay2017.pdf', 0, 409),
('socsit', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-49-12_9Scheme_JulDec2017.pdf', 0, 410),
('socsit', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-49-24_10Scheme_JanMay2018.pdf', 0, 411),
('socsit', 't1_2_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-49-54_11Scheme_PGDCA_JulDec2015-16.pdf', 0, 412),
('socsit', 't5_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_17-50-41_5.1.1updated.pdf', 0, 413),
('iipsdavv', 't6_5_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_17-53-07_academic Audit report.pdf', 0, 414),
('socsit', 't5_2_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_17-12-2018_18-01-32_5.2.3.updated.pdf', 0, 415),
('iipsdavv', 't6_5_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_18-29-09_Management_DAVV_NIRF 2018.pdf', 0, 416),
('iipsdavv', 't6_5_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_18-29-26_Management_DAVV_NIRF_2019.pdf', 0, 417),
('iipsdavv', 't6_5_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_18-29-48_Management-Full Report-MHRD, National Institutional Ranking Framework (NIRF)2017.pdf', 0, 418),
('iipsdavv', 't7_1_11', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_18-35-49_Camp 2016 17.pdf', 1, 419),
('iipsdavv', 't7_1_11', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_18-56-57_7.1.11.pdf', 1, 420),
('iipsdavv', 't7_1_17', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_21-16-19_Desktop.rar', 1, 421),
('iipsdavv', 't7_1_7', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_17-12-2018_21-35-54_Tree plantation drive 2 -- 2014-15 (1).pdf', 1, 422),
('iipsdavv', 't7_1_7', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_09-13-42_tree.pdf', 1, 423),
('iipsdavv', 't7_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_10-58-58_Gender.pdf', 0, 424),
('iipsdavv', 't7_1_17', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_11-00-54_Pledge Taking Ceremony.pdf', 0, 425),
('iipsdavv', 't7_1_14', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_13-00-59_Participation_in_Mera_Tiranga_Mera_Abhiyan_for_creating_world_record_18_19.docx', 0, 426),
('somath', 't1_4_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/somath_18-12-2018_13-01-44_Feedback Analysis for July to December 2018.pdf', 0, 427),
('socsit', 't5_3_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_18-12-2018_13-09-34_Shweta-certificates and aadhar.pdf', 1, 428),
('iipsdavv', 't7_1_7', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_15-04-42_iipsdavv_18-12-2018_09-13-42_tree (1).pdf', 0, 429),
('iipsdavv', 't7_1_14', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_15-34-42_Constitution Day 16.pdf', 0, 430),
('iipsdavv', 't7_1_14', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_15-35-03_Constitution Day 18.pdf', 0, 431),
('iipsdavv', 't7_1_14', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_15-35-23_Mock Parliament 17.pdf', 0, 432),
('iipsdavv', 't7_1_14', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_15-35-42_Marathon Drive 18.pdf', 0, 433),
('iipsdavv', 't7_1_14', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_15-37-27_7.1.14 a.pdf', 0, 434),
('examofficedavv', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_18-12-2018_16-15-40_2013-14.pdf', 0, 435),
('examofficedavv', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_18-12-2018_16-16-11_2014-15.pdf', 0, 436),
('somath', 't1_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/somath_18-12-2018_16-16-25_syllabus_msc-2015(CBCS).pdf', 0, 437),
('examofficedavv', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_18-12-2018_16-16-53_2015-16.pdf', 0, 438),
('examofficedavv', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_18-12-2018_16-17-30_2016-17.pdf', 0, 439),
('examofficedavv', 't5_1_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_18-12-2018_16-18-02_2017-18.pdf', 0, 440),
('somath', 't1_4_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/somath_18-12-2018_16-19-19_Alumni Feedback-ATR-December 2018.pdf', 0, 441),
('somath', 't1_4_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/somath_18-12-2018_16-19-48_Feedback Analysis for July to December 2018.pdf', 0, 442),
('iipsdavv', 't7_1_11', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_16-29-47_7.1.11.pdf', 0, 443),
('somath', 't2_2_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/somath_18-12-2018_16-30-34_Mini MTTS Schedule-2014.pdf', 0, 444),
('somath', 't7_1_13', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/somath_18-12-2018_16-36-00_School of Mathematics-core values.pdf', 0, 445),
('iipsdavv', 't7_2_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_18-12-2018_17-23-08_merged7.2.1.pdf', 0, 446),
('examofficedavv', 't5_1_6', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/examofficedavv_18-12-2018_17-45-34_ragging-converted.pdf', 0, 447),
('sees', 't3_4_7', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_19-12-2018_10-35-58_Citation calculation.xlsx', 1, 448),
('sees', 't7_1_11', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_19-12-2018_11-47-27_SEES-RTC-CESR Reports 2017-18 to 13-14 (5)-7.11.1.pdf', 1, 449),
('sees', 't7_1_11', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_19-12-2018_11-50-02_SEES-RTC-CESR Reports 2017-18 to 13-14 (5)-7.1.11.pdf', 0, 450),
('emrcdavv', 't2_5_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_19-12-2018_15-38-52_ReRevisedOrdinance31.pdf', 0, 451),
('emrcdavv', 't2_5_5', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_19-12-2018_15-39-13_ReRevisedOrdinance31.pdf', 0, 452),
('emrcdavv', 't2_5_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_19-12-2018_15-42-26_AttainmentbyResults.pdf', 0, 453),
('emrcdavv', 't2_5_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_19-12-2018_15-42-43_Time table.PDF', 0, 454),
('emrcdavv', 't5_4_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_19-12-2018_17-15-35_0EMRCalumni.JPG', 0, 455),
('somath', 't1_4_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/somath_19-12-2018_18-10-24_Feedback Analysis-ATR-Semester I- July to December 2017.pdf', 0, 456),
('somath', 't1_4_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/somath_19-12-2018_18-10-46_Feedback Analysis-ATR-Semester II- January to June 2018.pdf', 0, 457),
('somath', 't1_4_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/somath_19-12-2018_18-11-04_Feedback Analysis-ATR-Semester III- July  to December 2018.pdf', 0, 458),
('sees', 't3_6_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_15-12-39_training report.docx', 1, 459),
('sees', 't7_1_11', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_15-16-46_7.1.11-addition.pdf', 0, 460),
('sees', 't3_6_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_15-18-36_training report.pdf', 0, 461),
('sees', 't9_2_2', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_15-20-28_922 (5).csv', 0, 462),
('sees', 't9_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_15-23-08_9.3.3.csv', 0, 463),
('sees', 't9_3_3', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_15-23-39_Vacant Seat-SEES.pdf', 0, 464),
('sees', 't3_4_8', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-11-44_Dr.S.P. Sir -h index web of scs.-2014.-2.xls', 1, 465),
('sees', 't3_4_8', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-12-00_mam- h index web of scs.-2014.xls', 1, 466),
('sees', 't3_4_8', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-12-14_mam h index-web of science -2015.xls', 1, 467),
('sees', 't3_4_8', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-12-34_mam-h index-web of science -2016.xls', 1, 468),
('sees', 't3_4_8', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-13-08_mam-h index web of science -2017.xls', 1, 469),
('', 't7_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/_20-12-2018_16-13-45_Social responcibility-NAAC.docx', 0, 470),
('sees', 't7_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-15-04_Social responcibility-NAAC.docx', 0, 471),
('sees', 't3_4_7', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-32-52_Citation calculation (3).pdf', 0, 472),
('sees', 't3_4_8', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-39-27_Dr.S.P. Sir -h index web of scs.-2014.-2.pdf', 0, 473),
('sees', 't3_4_8', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-39-51_mam- h index web of scs.-2014.pdf', 0, 474),
('sees', 't3_4_8', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-40-08_mam h index-web of science -2015.pdf', 0, 475),
('sees', 't3_4_8', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-40-30_mam-h index-web of science -2016.pdf', 0, 476),
('sees', 't3_4_8', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_20-12-2018_16-41-01_mam-h index web of science -2017.pdf', 0, 477),
('emrcdavv', 't1_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_21-12-2018_11-55-19_Minutes of Syllabus Review June 2014.pdf', 0, 478),
('emrcdavv', 't1_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_21-12-2018_11-55-30_Minutes of Syllabus Review June 2015.pdf', 0, 479),
('emrcdavv', 't1_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_21-12-2018_11-55-40_Minutes of Syllabus Review June 2016.pdf', 0, 480),
('emrcdavv', 't1_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_21-12-2018_11-55-48_Minutes of Syllabus Review June 2017.pdf', 0, 481),
('emrcdavv', 't1_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/emrcdavv_21-12-2018_11-55-58_Minutes of Syllabus Review June 2018.pdf', 0, 482),
('sees', 't3_4_5', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_22-12-2018_12-01-25_2018 DDJO20  Engine.pdf', 1, 483),
('sees', 't3_4_5', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_22-12-2018_12-01-57_2017 Mahua Flower  Bioethanol.pdf', 1, 484),
('sees', 't3_4_5', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_22-12-2018_12-02-33_2015 Noise Human health.pdf', 1, 485),
('sopharma', 't1_1_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_22-12-2018_12-24-17_CR.1.1.1 A.pdf', 0, 486),
('sopharma', 't1_1_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_22-12-2018_12-36-14_CR.1.1.2A.pdf', 0, 487),
('sopharma', 't1_1_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_22-12-2018_12-37-21_CR.1.1.2B.pdf', 0, 488),
('sopharma', 't1_1_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_22-12-2018_12-38-31_CR.1.1.2C.pdf', 0, 489),
('sopharma', 't1_1_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_22-12-2018_12-39-04_CR.1.1.2D.pdf', 0, 490),
('sopharma', 't1_1_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_22-12-2018_12-39-38_CR.1.1.2F.pdf', 0, 491),
('sopharma', 't1_1_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_22-12-2018_12-40-02_CR.1.1.2E.pdf', 0, 492),
('sopharma', 't2_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_22-12-2018_12-55-16_CR.1.1.1B.pdf', 0, 493),
('sopharma', 't2_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_22-12-2018_13-00-36_CR.1.1.1D.pdf', 0, 494),
('sopharma', 't2_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_22-12-2018_13-00-53_CR.1.1.1E.pdf', 0, 495),
('sopharma', 't2_6_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sopharma_22-12-2018_13-03-08_CR.1.1.1C.pdf', 0, 496),
('sees', 't3_4_8', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_22-12-2018_13-28-40_h-INDEX CALCULATION-3.4.8.pdf', 0, 497),
('iipsdavv', 't5_1_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_13-33-35_Sanctio_DO_SCST__5_.pdf', 0, 498),
('sees', 't3_4_8', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/sees_22-12-2018_14-04-23_Evaluation report - h-index   Im F.  citaion number.pdf', 0, 499),
('iipsdavv', 't3_4_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-09-16_PHD CRITERIA-3 _ International Institute of Professional Studies _ Information Gathering System _ 2018-12-22 13_51_24.pdf', 0, 500),
('iipsdavv', 't3_1_4', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-20-08_3.1.4 criteria iii.pdf', 0, 501),
('iipsdavv', 't3_2_2', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-20-43_3.2.2 criteria iii.pdf', 0, 502),
('iipsdavv', 't3_2_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-21-00_3.2.3 criteria iii.pdf', 0, 503),
('iipsdavv', 't6_5_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-29-54_fbb 2014.pdf', 0, 504),
('iipsdavv', 't6_5_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-30-42_fb 2015.pdf', 0, 505),
('iipsdavv', 't6_5_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-31-07_fb 2016.pdf', 0, 506),
('iipsdavv', 't6_5_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-31-30_fb 2017.pdf', 0, 507),
('iipsdavv', 't6_5_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-32-10_fb 2018.pdf', 0, 508),
('iipsdavv', 't6_5_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-32-33_fbb 2014.pdf', 0, 509),
('iipsdavv', 't6_5_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-32-49_fb 2015.pdf', 0, 510),
('iipsdavv', 't6_5_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-33-03_fb 2016.pdf', 0, 511),
('iipsdavv', 't6_5_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-33-16_fb 2017.pdf', 0, 512),
('iipsdavv', 't6_5_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_15-33-31_fb 2018.pdf', 0, 513),
('iipsdavv', 't6_5_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_22-12-2018_16-15-38_iipsdavv_17-12-2018_16-16-20ilovepdf_merged.pdf', 0, 514),
('socsit', 't5_4_3', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_24-12-2018_11-42-32_Alumni-meet-merged file.pdf', 0, 515),
('socsit', 't5_3_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_24-12-2018_12-08-25_Prity-kratika-merged.pdf', 1, 516),
('socsit', 't5_3_1', 'additional', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/socsit_24-12-2018_12-27-46_Final-Harshal-Meenal-Shweta-Prity-Kratika.pdf', 0, 517),
('iipsdavv', 't7_2_1', 'supporting', 'http://uid.dauniv.ac.in/NAC/additional_data/docs_add/iipsdavv_24-12-2018_13-50-47_FB_2014_to_2018.pdf', 0, 518);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`Year`),
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
  ADD PRIMARY KEY (`Prog_code`,`Course_code`),
  ADD KEY `Course_code_2` (`Course_code`);

--
-- Indexes for table `eval_report`
--
ALTER TABLE `eval_report`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `help_desk`
--
ALTER TABLE `help_desk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `na_table_div_id`
--
ALTER TABLE `na_table_div_id`
  ADD PRIMARY KEY (`table`);

--
-- Indexes for table `not_applicable`
--
ALTER TABLE `not_applicable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`Prog_code`),
  ADD UNIQUE KEY `Prog_code` (`Prog_code`);

--
-- Indexes for table `sub_department`
--
ALTER TABLE `sub_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superusers`
--
ALTER TABLE `superusers`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `t1_1_1`
--
ALTER TABLE `t1_1_1`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `t1_3_1`
--
ALTER TABLE `t1_3_1`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `t3_1_1`
--
ALTER TABLE `t3_1_1`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `t3_1_4`
--
ALTER TABLE `t3_1_4`
  ADD UNIQUE KEY `id_time` (`id_time`);

--
-- Indexes for table `t3_4_6b`
--
ALTER TABLE `t3_4_6b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t3_4_6c`
--
ALTER TABLE `t3_4_6c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t3_6_1`
--
ALTER TABLE `t3_6_1`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `t5_4_1`
--
ALTER TABLE `t5_4_1`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `t6_5_5`
--
ALTER TABLE `t6_5_5`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `t9_1_1`
--
ALTER TABLE `t9_1_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t9_1_2`
--
ALTER TABLE `t9_1_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t9_2_1`
--
ALTER TABLE `t9_2_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t9_2_2`
--
ALTER TABLE `t9_2_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t9_2_3`
--
ALTER TABLE `t9_2_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t9_3_2a`
--
ALTER TABLE `t9_3_2a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t9_3_2b`
--
ALTER TABLE `t9_3_2b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t9_3_3`
--
ALTER TABLE `t9_3_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t9_4_1`
--
ALTER TABLE `t9_4_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t9_4_2`
--
ALTER TABLE `t9_4_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_additional_data`
--
ALTER TABLE `t_additional_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `help_desk`
--
ALTER TABLE `help_desk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `not_applicable`
--
ALTER TABLE `not_applicable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2413;

--
-- AUTO_INCREMENT for table `sub_department`
--
ALTER TABLE `sub_department`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t3_4_6b`
--
ALTER TABLE `t3_4_6b`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t3_4_6c`
--
ALTER TABLE `t3_4_6c`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t9_1_1`
--
ALTER TABLE `t9_1_1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t9_1_2`
--
ALTER TABLE `t9_1_2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t9_2_1`
--
ALTER TABLE `t9_2_1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t9_2_2`
--
ALTER TABLE `t9_2_2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t9_2_3`
--
ALTER TABLE `t9_2_3`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t9_3_2a`
--
ALTER TABLE `t9_3_2a`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t9_3_2b`
--
ALTER TABLE `t9_3_2b`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t9_3_3`
--
ALTER TABLE `t9_3_3`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t9_4_1`
--
ALTER TABLE `t9_4_1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t9_4_2`
--
ALTER TABLE `t9_4_2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_additional_data`
--
ALTER TABLE `t_additional_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=519;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
