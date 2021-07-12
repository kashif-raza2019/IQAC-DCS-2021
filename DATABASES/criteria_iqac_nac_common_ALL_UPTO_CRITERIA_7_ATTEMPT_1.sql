-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2018 at 12:34 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
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
-- Database: `criteria_iqac_nac_common`
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
('July 21 - June 22'),
('July 22 - June 23');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sno` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `name`, `sno`) VALUES
('admin1', 'adminone', 'DEPARTMENT OF ADMIN ONE', 1001),
('admin2', 'admintwo', 'DEPARTMENT OF ADMIN TWO', 1002),
('admin3', 'adminthree', 'DEPARTMENT OF ADMIN THREE', 1003),
('admin4', 'adminfour', 'DEPARTMENT OF ADMIN FOUR', 1004),
('admin5', 'adminfive', 'DEPARTMENT OF ADMIN FIVE', 1005),
('admin6', 'adminsix', 'DEPARTMENT OF ADMIN SIX', 1006),
('admin7', 'adminseven', 'DEPARTMENT OF ADMIN SEVEN', 1007),
('Asc', 'Ascmis_02', 'Human Resource Development Centre', 2),
('Biochem', 'Biochemmis_03', 'School of Biochemistry', 3),
('Chemsc', 'Chemscmis_04', 'School of  Chemical Sciences', 4),
('CNO', 'Cnomis_47', 'Central Office', 47),
('Compcent', 'Compcentmis_26', 'Computer Centre', 26),
('cwo', 'cwomis_39', 'Chief Warden Office', 39),
('Ddedavv', 'Ddedavvmis_32', 'Directorate of Distance Education', 32),
('Ddukkdavv', 'Ddukkdavvmis_36', 'DDU- Kaushal Kendra', 36),
('Doll', 'Dollmis_29', 'Department of Life Long Learning', 29),
('Emrcdavv', 'Emrcdavvmis_30', 'Education Multimedia Research Centre', 30),
('Ietdavv', 'Ietdavvmis_23', 'Institute of Engineering and Technology', 23),
('Iipsdavv', 'Iipsdavvmis_25', 'International Institute of Professional Studies', 25),
('Imsdavv', 'Imsdavvmis_24', 'Institute of Management Studies', 24),
('itc', 'itcmis_20', 'IT Center', 99),
('mcc', 'mccmis_38', 'Model Career Center', 38),
('pranjal', 'pranjal02', 'PRANJAL GUPTA (TESTING)', 2001),
('saif', 'saif01', 'SAIF UL REHMAN (TESTING)', 2002),
('Sees', 'Seesmis_11', 'School of Energy & Environmental Studies', 11),
('Sjmc', 'Sjmcmis_15', 'School of Journalism & Mass Comm.', 13),
('Sobiotech', 'Sobiotechmis_35', 'School of Biotechnology', 35),
('Socmrce', 'Socmrcemis_05', 'School of Commerce', 5),
('Socsit', 'Socsitmis_06', 'School of Computer Science & IT', 6),
('Sodsf', 'Sodsfmis_07', 'School of Data Science & Forecasting', 7),
('Soecon', 'Soeconmis_08', 'School of Economics', 8),
('Soedu', 'Soedumis_09', 'School of Education', 9),
('Soex', 'Soexmis_10', 'School of Electronics', 10),
('Soinstru', 'Soinstrumis_12', 'School of Instrumentation', 12),
('Solang', 'Solangmis_16', 'School of Languages', 16),
('Solaw', 'Solawmis_14', 'School of Law', 14),
('Solib', 'Solibmis_27', 'School of Library & Information Science', 27),
('Sols', 'Solsmis_15', 'School of Life Sciences', 15),
('Somath', 'Somathmis_17', 'School of Mathematics', 17),
('Sopedu', 'Sopedumis_19', 'School of Physical Education', 19),
('Sopharma', 'Sopharmamis_18', 'School of Pharmacy', 18),
('Sophy', 'Sophymis_20', 'School of Physics', 20),
('Soss', 'Sossmis_22', 'School of Social Science', 22),
('Sostat', 'Sostatmis_21', 'School of Statistics', 21),
('Soyoga', 'Soyogamis_33', 'School of yoga', 33),
('Umcdavv', 'Umcdavvmis_31', 'University Minority Cell', 31),
('vcoffice', 'vcofficemis_01', 'VC Office', 1);

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

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Username`, `Prog_code`, `Course_code`, `Course_name`) VALUES
('', '', '', ''),
('asc', '', 'Course 1', 'Orientation Course'),
('asc', '', 'Course 2', 'Refresher Course'),
('asc', '', 'Course 3 ', 'Summer/Winter'),
('asc', '', 'Course 4', 'Short Term Course'),
('asc', '', 'Course 5', 'Interaction Programme'),
('admin1', 'AD1BSC', 'abc1', 'chem'),
('admin1', 'AD1BSC', 'AD1RX2', 'APPLIED PHYSICS'),
('admin1', 'AD1MSC', 'AD1RY1', 'APPLIED MATHEMATICS'),
('admin1', 'AD1MSC', 'AD1RY2', 'APPLIED PHYSICS'),
('admin2', 'AD2BSC', 'AD2RX1', 'APPLIED MATHEMATICS'),
('admin2', 'AD2BSC', 'AD2RX2', 'APPLIED PHYSICS'),
('admin2', 'AD2BSC', 'BHAICHARA', 'RAMRAM'),
('admin2', 'AD2MSC', 'AD2RY1', 'APPLIED MATHEMATICS'),
('admin2', 'AD2MSC', 'AD2RY2', 'APPLIED PHYSICS'),
('admin3', 'AD3BSC', 'AD3RX1', 'APPLIED MATHEMATICS'),
('admin3', 'AD3BSC', 'AD3RX2', 'APPLIED PHYSICS'),
('admin3', 'AD3BSC', 'andandSS:--and', 'aNDcOLON '),
('admin3', 'AD3MSC', 'AD3RX1', 'Testing'),
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
('biochem', 'BC5A', 'BC5A 1.1', 'Analytical Biochemistry'),
('biochem', 'BC5A', 'BC5A 1.2', 'Chemistry of Biomolecules '),
('biochem', 'BC5A', 'BC5A 1.3', 'Cell Biology '),
('biochem', 'BC5A', 'BC5A 1.4', 'Microbial Biochemistry '),
('biochem', 'BC5A', 'BC5A 1.5', 'Genetics and Microbial Genetics '),
('biochem', 'BC5A', 'BC5A 1.6', 'Lab work related to courses taught '),
('biochem', 'BC5A', 'BC5A 2.1', 'Enzymology'),
('biochem', 'BC5A', 'BC5A 2.2	', 'Immunology '),
('biochem', 'BC5A', 'BC5A 2.3	', 'Metabolism I '),
('biochem', 'BC5A', 'BC5A 2.4	', 'Metabolism II '),
('biochem', 'BC5A', 'BC5A 2.5	 ', 'Nutritional Biochemistry'),
('biochem', 'BC5A', 'BC5A 2.6	 ', 'General Physiology'),
('biochem', 'BC5A', 'BC5A 2.7	 ', 'Lab work related to courses taught'),
('biochem', 'BC5A', 'BC5A 3.1	', 'Plant Biochemistry '),
('biochem', 'BC5A', 'BC5A 3.2	 ', 'Molecular Biology'),
('biochem', 'BC5A', 'BC5A 3.3	', 'Biotechnology'),
('biochem', 'BC5A', 'BC5A 3.4	', 'Clinical Biochemistry'),
('biochem', 'BC5A', 'BC5A 3.5	', 'Biostatistics '),
('biochem', 'BC5A', 'BC5A 3.6	', 'Computer Applications '),
('biochem', 'BC5A', 'BC5A 3.7	 ', 'Lab work related to courses taught'),
('biochem', 'BC5A', 'BC5A 3.8	', 'Seminar'),
('biochem', 'BC5A', 'BC5A 4.1	', 'Research Project Work '),
('biochem', 'BC5A', 'BC5A 4.2	', 'Project Work Presentation'),
('biochem', 'BC9Z', 'BC9Z I  ', 'Research Methodology'),
('biochem', 'BC9Z', 'BC9Z II  ', 'Advanced Course Biochemistry'),
('biochem', 'BC9Z', 'BC9Z III  ', 'Computer Applications'),
('biochem', 'BC9Z', 'BC9Z IV  ', 'Review of Literature'),
('sobiotech', 'BT5A', 'BT GE 502', 'Immunology'),
('sobiotech', 'BT5A', 'BT MB 501', 'Biochemistry'),
('sobiotech', 'BT5A', 'BT MB 502', 'Immunology '),
('sobiotech', 'BT5A', 'BT MB 511', 'Cell and Developmental Biology'),
('sobiotech', 'BT5A', 'BT MB 512', 'Genetics'),
('sobiotech', 'BT5A', 'BT MB 521', 'Molecular Biology'),
('sobiotech', 'BT5A', 'BT MB 522', 'Genetic Engineering'),
('sobiotech', 'BT5A', 'BT MB 531', 'Analytical Techniques '),
('sobiotech', 'BT5A', 'BT MB 532', 'Enzyme and Enzyme Technology'),
('sobiotech', 'BT5A', 'BT MB 541', 'Computer Application, Bioinformatics and Biostatistics'),
('sobiotech', 'BT5A', 'BT MB 542', 'Environmental Biotechnology'),
('sobiotech', 'BT5A', 'BT MB 551', 'Seminar and Communication Skills'),
('sobiotech', 'BT5A', 'BT MB 552', 'Genomics and Proteomics'),
('sobiotech', 'BT5A', 'BT MB 561', 'Practical'),
('sobiotech', 'BT5A', 'BT MB 562', 'Protein Engineering'),
('sobiotech', 'BT5A', 'BT MB 572', 'Cancer Genetics'),
('sobiotech', 'BT5A', 'BT MB 582', 'Seminar/ Research Skill Development '),
('sobiotech', 'BT5A', 'BT MB 592', 'Practical'),
('sobiotech', 'BT5A', 'BT MB 601', 'Bioprocess Engineering and Technology'),
('sobiotech', 'BT5A', 'BT MB 602', 'Project Work'),
('sobiotech', 'BT5A', 'BT MB 611', 'Plant Biotechnology'),
('sobiotech', 'BT5A', 'BT MB 612', 'Seminar '),
('sobiotech', 'BT5A', 'BT MB 621', 'Microbiology and Industrial Applications'),
('sobiotech', 'BT5A', 'BT MB 631', 'IPR and Biosafety'),
('sobiotech', 'BT5A', 'BT MB 641', 'Metabolic Engineering '),
('sobiotech', 'BT5A', 'BT MB 651', 'Animal Tissue Culture'),
('sobiotech', 'BT5A', 'BT MB 661a', 'Stem Cell Biology '),
('sobiotech', 'BT5A', 'BT MB 661b', 'Pharmacogenomics'),
('sobiotech', 'BT5A', 'BT MB 671', 'Seminar'),
('sobiotech', 'BT5A', 'BT MB 681', 'Research Proposal Writing Skills'),
('sobiotech', 'BT5A', 'BT MB 691', 'Practical'),
('sobiotech', 'BT5B', 'BT BI 552 ', 'Genomics and Proteomics '),
('sobiotech', 'BT5B', 'BT GE 501', 'Biomolecules'),
('sobiotech', 'BT5B', 'BT GE 511', 'Cell Biology and Genetics'),
('sobiotech', 'BT5B', 'BT GE 512', 'Genetics'),
('sobiotech', 'BT5B', 'BT GE 521', 'Molecular Biology'),
('sobiotech', 'BT5B', 'BT GE 522', 'Enzyme Technology'),
('sobiotech', 'BT5B', 'BT GE 532', 'Recombinant DNA Technology'),
('sobiotech', 'BT5B', 'BT GE 541', 'Computer Applications in Biology and Bio-statistics'),
('sobiotech', 'BT5B', 'BT GE 542', 'Bio-informatics'),
('sobiotech', 'BT5B', 'BT GE 551', 'Seminar and Communication Skills '),
('sobiotech', 'BT5B', 'BT GE 552', 'Genomics and Proteomics'),
('sobiotech', 'BT5B', 'BT GE 561', 'Practical'),
('sobiotech', 'BT5B', 'BT GE 562', 'Protein Engineering'),
('sobiotech', 'BT5B', 'BT GE 572', 'Environmental Biotechnology '),
('sobiotech', 'BT5B', 'BT GE 582', 'Seminar/ Research Skill Development'),
('sobiotech', 'BT5B', 'BT GE 592', 'Practical'),
('sobiotech', 'BT5B', 'BT GE 631', 'Microbial Technology'),
('sobiotech', 'BT5B', 'BT GE 661', 'Pharmacogenomics'),
('sobiotech', 'BT5B', 'BT GE531', 'Analytical Techniques'),
('sobiotech', 'BT5C', 'BT BI 501', 'Basic Mathematics '),
('sobiotech', 'BT5C', 'BT BI 502', 'Biological Databases and Data Analysis (Bioinformatics-I)'),
('sobiotech', 'BT5C', 'BT BI 511', 'Computer fundamentals and Biostatistics '),
('sobiotech', 'BT5C', 'BT BI 512', 'Recombinant DNA Technology'),
('sobiotech', 'BT5C', 'BT BI 521', 'Bio-molecules '),
('sobiotech', 'BT5C', 'BT BI 522', 'Design and Analysis of algorithms'),
('sobiotech', 'BT5C', 'BT BI 531', 'Cell and Developmental Biology '),
('sobiotech', 'BT5C', 'BT BI 532', 'Internet and Web Based Programming '),
('sobiotech', 'BT5C', 'BT BI 541', 'Programming in C/C+'),
('sobiotech', 'BT5C', 'BT BI 542', 'Immunoinformatics'),
('sobiotech', 'BT5C', 'BT BI 551', 'Molecular Biology'),
('sobiotech', 'BT5C', 'BT BI 561', 'Practical'),
('sobiotech', 'BT5C', 'BT BI 562', 'Enzyme and Enzyme Technology'),
('sobiotech', 'BT5C', 'BT BI 571', 'Seminar and Communication Skills'),
('sobiotech', 'BT5C', 'BT BI 572', 'Practical'),
('sobiotech', 'BT5C', 'BT BI 601', 'Machine Learning Techniques and CADD'),
('sobiotech', 'BT5C', 'BT BI 611 ', 'Structural Biology and Bioinformatics'),
('sobiotech', 'BT5C', 'BT BI 641', 'Metabolic Engineering and System Biology '),
('sobiotech', 'BT5C', 'BT BI 651', 'Pharmacogenomics'),
('chemsc', 'CH5A', 'MCH- 101', 'Inorganic Chemistry-I'),
('chemsc', 'CH5A', 'MCH- 102', 'Organic Chemistry- I'),
('chemsc', 'CH5A', 'MCH-103', 'Physical Chemistry- I'),
('chemsc', 'CH5A', 'MCH-104', 'Group Theory and Spectroscopy'),
('chemsc', 'CH5A', 'MCH-105', 'Concepts of  Mathematics '),
('chemsc', 'CH5A', 'MCH-106', 'General Biology'),
('chemsc', 'CH5A', 'MCH-107', 'Laboratory Course- I'),
('chemsc', 'CH5A', 'MCH-201', 'Inorganic Chemistry -II'),
('chemsc', 'CH5A', 'MCH-202', 'Organic Chemistry-II'),
('chemsc', 'CH5A', 'MCH-203', 'Physical Chemistry-II'),
('chemsc', 'CH5A', 'MCH-204', 'Chemistry of Drugs'),
('chemsc', 'CH5A', 'MCH-205', 'Computer Applications'),
('chemsc', 'CH5A', 'MCH-206', 'Computer Programming'),
('chemsc', 'CH5A', 'MCH-207', 'Laboratory Course-II'),
('chemsc', 'CH5A', 'MCH-301', 'Molecular  Spectroscopy '),
('chemsc', 'CH5A', 'MCH-302', 'Photochemistry'),
('chemsc', 'CH5A', 'MCH-303', 'Bio-inorganic Chemistry'),
('chemsc', 'CH5A', 'MCH-304', 'Diffraction Methods and Photoelectron  Spectroscopy'),
('chemsc', 'CH5A', 'MCH-305', 'Advanced Medicinal Chemistry '),
('chemsc', 'CH5A', 'MCH-306', 'Polymers'),
('chemsc', 'CH5A', 'MCH-307', 'Organic Synthesis'),
('chemsc', 'CH5A', 'MCH-308', 'Laboratory Course-III-Spectral Interpretation'),
('chemsc', 'CH5A', 'MCH-401', 'Analytical Chemistry '),
('chemsc', 'CH5A', 'MCH-402', 'Environmental Chemistry'),
('chemsc', 'CH5A', 'MCH-403', 'Solid State Chemistry and Materials Science'),
('chemsc', 'CH5A', 'MCH-404', 'Bio-organic Chemistry'),
('chemsc', 'CH5A', 'MCH-405', 'Organometallic Chemistry '),
('chemsc', 'CH5A', 'MCH-406', 'Chemistry of Natural Products'),
('chemsc', 'CH5A', 'MCH-407', 'Heterocyclic Chemistry'),
('chemsc', 'CH5A', 'MCH-408', 'Dissertation/ Project'),
('chemsc', 'CH5A', 'VA-01', 'Hands on Training on Instruments'),
('chemsc', 'CH5B', 'MPC- 101', 'Inorganic Chemistry -I'),
('chemsc', 'CH5B', 'MPC- 102', 'Organic Chemistry- I'),
('chemsc', 'CH5B', 'MPC- 103', 'Physical Chemistry I'),
('chemsc', 'CH5B', 'MPC- 104', 'Group Theory and Spectroscopy'),
('chemsc', 'CH5B', 'MPC- 105', 'Concepts of  Mathematics '),
('chemsc', 'CH5B', 'MPC- 106', 'General Biology'),
('chemsc', 'CH5B', 'MPC- 107', 'Laboratory Course- I'),
('chemsc', 'CH5B', 'MPC-201', 'Inorganic Chemistry -II'),
('chemsc', 'CH5B', 'MPC-202', 'Organic Chemistry- II'),
('chemsc', 'CH5B', 'MPC-203', 'Physical Chemistry-II'),
('chemsc', 'CH5B', 'MPC-204', 'Chemistry of Drugs'),
('chemsc', 'CH5B', 'MPC-205', 'Computer Applications'),
('chemsc', 'CH5B', 'MPC-206', 'Computer Programming'),
('chemsc', 'CH5B', 'MPC-207', 'Laboratory Course-II'),
('chemsc', 'CH5B', 'MPC-301', 'Molecular  Spectroscopy '),
('chemsc', 'CH5B', 'MPC-302', 'Photochemistry'),
('chemsc', 'CH5B', 'MPC-303', 'Bio-inorganic Chemistry'),
('chemsc', 'CH5B', 'MPC-304', 'Diffraction Methods and Photoelectron  Spectroscopy'),
('chemsc', 'CH5B', 'MPC-305', 'Advanced Medicinal Chemistry '),
('chemsc', 'CH5B', 'MPC-306', 'Polymers'),
('chemsc', 'CH5B', 'MPC-307', 'Organic Synthesis'),
('chemsc', 'CH5B', 'MPC-308', 'Laboratory Course-III-Spectral Interpretation'),
('chemsc', 'CH5B', 'MPC-401', 'Analytical Chemistry '),
('chemsc', 'CH5B', 'MPC-402', 'Environmental Chemistry'),
('chemsc', 'CH5B', 'MPC-403', 'Solid State Chemistry and Materials Science'),
('chemsc', 'CH5B', 'MPC-404', 'Bio-organic Chemistry'),
('chemsc', 'CH5B', 'MPC-405', 'Organometallic Chemistry '),
('chemsc', 'CH5B', 'MPC-406', 'Chemistry of Natural Products'),
('chemsc', 'CH5B', 'MPC-407', 'Heterocyclic Chemistry'),
('chemsc', 'CH5B', 'MPC-408', 'Dissertation/ Project'),
('chemsc', 'CH5C', 'CHEM- 101', 'Research Methodology'),
('chemsc', 'CH5C', 'CHEM- 102', 'Computer Applications'),
('chemsc', 'CH5C', 'CHEM- 103', 'Advanced Course: Interpretation of Spectra'),
('chemsc', 'CH5C', 'CHEM-104', 'Review of  Published Research in the relevant field'),
('socmrce', 'CM4A', 'BCM - 1110', 'English'),
('socmrce', 'CM4A', 'BCM - 1210', 'Financial Accounting'),
('socmrce', 'CM4A', 'BCM - 1310', 'Business Mathematics'),
('socmrce', 'CM4A', 'BCM - 1410', 'Business Economics'),
('socmrce', 'CM4A', 'BCM - 1510', 'Principles and practices of management'),
('socmrce', 'CM4A', 'BCM - 1610', 'Introduction to computers'),
('socmrce', 'CM4A', 'BCM - 2110', 'French'),
('socmrce', 'CM4A', 'BCM - 2210', 'Business environment in India'),
('socmrce', 'CM4A', 'BCM - 2310', 'Principle of Marketing'),
('socmrce', 'CM4A', 'BCM - 2410', 'Business Statistics'),
('socmrce', 'CM4A', 'BCM - 2510', 'Cost Accounting'),
('socmrce', 'CM4A', 'BCM - 2610', 'Database management system'),
('socmrce', 'CM4A', 'BCM - 3110', 'Business Communication and report writing'),
('socmrce', 'CM4A', 'BCM - 3210', 'Direct Taxation'),
('socmrce', 'CM4A', 'BCM - 3310', 'Management Accounting'),
('socmrce', 'CM4A', 'BCM - 3410', 'Business Legislation'),
('socmrce', 'CM4A', 'BCM - 3510', 'Human resources management'),
('socmrce', 'CM4A', 'BCM - 3610', 'Accounting information system and packages'),
('socmrce', 'CM4A', 'BCM - 4110', 'Organizational Behavior'),
('socmrce', 'CM4A', 'BCM - 4210', 'Company  Law'),
('socmrce', 'CM4A', 'BCM - 4310', 'Indirect Taxation'),
('socmrce', 'CM4A', 'BCM - 4410', 'Operations Research'),
('socmrce', 'CM4A', 'BCM - 4510', 'Fundamentals of Banking and Insurance'),
('socmrce', 'CM4A', 'BCM - 4610', 'E-commerce'),
('socmrce', 'CM4A', 'BCM - 5110', 'Corporate Accounting'),
('socmrce', 'CM4A', 'BCM - 5210', 'Corporate Tax Management'),
('socmrce', 'CM4A', 'BCM - 5310', 'Introduction to Foreign Trade'),
('socmrce', 'CM4A', 'BCM - 5410', 'Financial Institutions and Market'),
('socmrce', 'CM4A', 'BCM - 5510', 'Entrepreneurship'),
('socmrce', 'CM4A', 'BCM - 5610', 'Research Methodology'),
('socmrce', 'CM4A', 'BCM - 6110', 'Advanced Auditing'),
('socmrce', 'CM4A', 'BCM - 6210', 'Public Finance'),
('socmrce', 'CM4A', 'BCM - 6310', 'Financial Management'),
('socmrce', 'CM4A', 'BCM - 6410', 'Strategic Tax Management'),
('socmrce', 'CM4A', 'BCM - 6510', 'Management Information System'),
('socmrce', 'CM5A', 'MFT - 2101', 'Management concept and organizational behavior'),
('socmrce', 'CM5A', 'MFT - 2102', 'Global Business Environment'),
('socmrce', 'CM5A', 'MFT - 2103', 'Managerial Economics'),
('socmrce', 'CM5A', 'MFT - 2104', 'Accounting for Managers'),
('socmrce', 'CM5A', 'MFT - 2105', 'Export-Import policy, procedure and documentation'),
('socmrce', 'CM5A', 'MFT - 2106', 'World Trade Organizations'),
('socmrce', 'CM5A', 'MFT - 2107', 'Foreign Language - I (French)'),
('socmrce', 'CM5A', 'MFT - 2201', 'Quantitative Techniques for foreign trade'),
('socmrce', 'CM5A', 'MFT - 2202', 'Export-Import Management'),
('socmrce', 'CM5A', 'MFT - 2203', 'Indias Foreign Trade: Trends,Prospects and strategies'),
('socmrce', 'CM5A', 'MFT - 2204', 'International Economics and Trade Theories'),
('socmrce', 'CM5A', 'MFT - 2205', 'Financial Management'),
('socmrce', 'CM5A', 'MFT - 2206', 'Global business communication and public relation'),
('socmrce', 'CM5A', 'MFT - 2207', 'Computer Application in FT'),
('socmrce', 'CM5A', 'MFT - 2208', 'Personality Development'),
('socmrce', 'CM5A', 'MFT - 2301', 'Foreign exchange and exchange control'),
('socmrce', 'CM5A', 'MFT - 2302', 'Insurance and Risk Management in FT'),
('socmrce', 'CM5A', 'MFT - 2303', 'Multinational Financial Management'),
('socmrce', 'CM5A', 'MFT - 2304', 'International Marketing Management and Consumer Behavior'),
('socmrce', 'CM5A', 'MFT - 2305', 'International human resource management and organizational behavior'),
('socmrce', 'CM5A', 'MFT - 2306', 'International Business Laws'),
('socmrce', 'CM5A', 'MFT - 2307', 'Statistical Analysis and Research Methodology'),
('socmrce', 'CM5A', 'MFT - 2401', 'EXIM financing'),
('socmrce', 'CM5A', 'MFT - 2402', 'Taxation in Foreign Trade'),
('socmrce', 'CM5A', 'MFT - 2403', 'Export Incentives and Institutional support'),
('socmrce', 'CM5A', 'MFT - 2404', 'Export pricing and product planning'),
('socmrce', 'CM5A', 'MFT - 2405', 'International logistics and supply chain management'),
('socmrce', 'CM5A', 'MFT - 2406', 'Foreign Language - II (German)'),
('socmrce', 'CM5B', 'MAFC - 1011', 'Accounting for managers'),
('socmrce', 'CM5B', 'MAFC - 1021', 'Business Environment '),
('socmrce', 'CM5B', 'MAFC - 1031', 'Inventory accounting -MGMT and control'),
('socmrce', 'CM5B', 'MAFC - 1041', 'Managerial Economics'),
('socmrce', 'CM5B', 'MAFC - 1051', 'Quantitative Techniques for business'),
('socmrce', 'CM5B', 'MAFC - 1061', 'Computer application in business'),
('socmrce', 'CM5B', 'MAFC - 2011', 'Management accounting and financial analysis'),
('socmrce', 'CM5B', 'MAFC - 2021', 'Management concept and organizational behaviour'),
('socmrce', 'CM5B', 'MAFC - 2031', 'Corporate financial accounting'),
('socmrce', 'CM5B', 'MAFC - 2041', 'Corporate legal framework'),
('socmrce', 'CM5B', 'MAFC - 2051', 'Corporate tax planning and management'),
('socmrce', 'CM5B', 'MAFC - 2061', 'Database management system'),
('socmrce', 'CM5B', 'MAFC - 2091', 'Personality Development'),
('socmrce', 'CM5B', 'MAFC - 3011', 'Financial Institutions and Market'),
('socmrce', 'CM5B', 'MAFC - 3021', 'Project planning and control'),
('socmrce', 'CM5B', 'MAFC - 3031', 'Security analyses and portfolio management'),
('socmrce', 'CM5B', 'MAFC - 3041', 'Strategic Management and corporate restructuring'),
('socmrce', 'CM5B', 'MAFC - 3051', 'Financial management and control'),
('socmrce', 'CM5B', 'MAFC - 3061', 'E-Business and AIS'),
('socmrce', 'CM5B', 'MAFC - 4011', 'International finance'),
('socmrce', 'CM5B', 'MAFC - 4021', 'Management information and control system'),
('socmrce', 'CM5B', 'MAFC - 4031', 'International business environment'),
('socmrce', 'CM5B', 'MAFC - 4041', 'Derivatives and risk management'),
('socmrce', 'CM5B', 'MAFC - 4051', 'Advanced Auditing'),
('socmrce', 'CM5C', 'MBM - 1011', 'Accounting for Managers'),
('socmrce', 'CM5C', 'MBM - 1021', 'Banking law and practice'),
('socmrce', 'CM5C', 'MBM - 1031', 'Fundamentals of Banking system'),
('socmrce', 'CM5C', 'MBM - 1041', 'Managerial Economics'),
('socmrce', 'CM5C', 'MBM - 1051', 'Quantitative Techniques for business'),
('socmrce', 'CM5C', 'MBM - 1061', 'Computer application in business'),
('socmrce', 'CM5C', 'MBM - 2011', 'Special accounting for banking firm'),
('socmrce', 'CM5C', 'MBM - 2021', 'Communication skill for Bankers'),
('socmrce', 'CM5C', 'MBM - 2031', 'Macro economic environment and banking'),
('socmrce', 'CM5C', 'MBM - 2041', 'Foreign trade and banking finance'),
('socmrce', 'CM5C', 'MBM - 2051', 'HRM in Banks'),
('socmrce', 'CM5C', 'MBM - 2061', 'E-Commerce'),
('socmrce', 'CM5C', 'MBM - 3011', 'Financial Management'),
('socmrce', 'CM5C', 'MBM - 3021', 'Commercial bank management'),
('socmrce', 'CM5C', 'MBM - 3031', 'Risk management in banking'),
('socmrce', 'CM5C', 'MBM - 3041', 'Development and merchant banking'),
('socmrce', 'CM5C', 'MBM - 3051', 'Statistical analysis and methodology'),
('socmrce', 'CM5C', 'MBM - 3061', 'E-Banking (Including Mobile Banking)'),
('socmrce', 'CM6A', 'MFT - 5302', 'Human resources management'),
('socmrce', 'CM6A', 'MFT - 5303', 'Export-Import procedure and documentation'),
('socsit', 'CS3A', 'CS-1001', 'Fundamentals of computer and IT'),
('socsit', 'CS3A', 'CS-1501', 'Operating system basics and PC packages'),
('socsit', 'CS3A', 'CS-2402', 'Introduction to DBMS'),
('socsit', 'CS3A', 'CS-2602', 'Internet and E-Commerce'),
('socsit', 'CS3A', 'CS-3424', 'E-Governance'),
('socsit', 'CS3A', 'CS-4223', 'Programming and problem solving using java'),
('socsit', 'CS3A', 'CS-4517', 'IT Infrastructure Management'),
('socsit', 'CS3A', 'CS-5805A', 'Major Project'),
('socsit', 'CS3A', 'IC-3913', 'Financial Accounting'),
('socsit', 'CS4A', 'CS-1003	', 'Digital Logic and Computer Organization'),
('socsit', 'CS4A', 'CS-1019	', 'Basic Electricals and  Electronics'),
('socsit', 'CS4A', 'CS-1101        	', 'Mathematics – I'),
('socsit', 'CS4A', 'CS-1102', 'Mathematics- II'),
('socsit', 'CS4A', 'CS-1103	', 'Physics - I'),
('socsit', 'CS4A', 'CS-1201', 'Fundamentals of programming and Problem Solving through C - I 	'),
('socsit', 'CS4A', 'CS-1202', 'Programming and Problem Solving Using C - II'),
('socsit', 'CS4A', 'CS-1501', 'Operating System Basics and PC Packages'),
('socsit', 'CS4A', 'CS-1905A	', 'English Language Lab'),
('socsit', 'CS4A', 'CS-1905B', 'English Language Lab2'),
('socsit', 'CS4A', 'CS-2020	', 'Electronic Circuits'),
('socsit', 'CS4A', 'CS-2021	', 'Digital Electronics'),
('socsit', 'CS4A', 'CS-2111          	', 'Mathematics-III'),
('socsit', 'CS4A', 'CS-2133	', 'Statistics and Probability '),
('socsit', 'CS4A', 'CS-2222', 'Data Structure and Algorithms'),
('socsit', 'CS4A', 'CS-2302	', 'System Analysis and Design'),
('socsit', 'CS4A', 'CS-2402', 'Introduction to DBMS(SQLand PLSQL) '),
('socsit', 'CS4A', 'CS-2502	', 'Fundamentals of Operating Systems'),
('socsit', 'CS4A', 'CS-3006	', 'Microprocessor and Assembly Language programming'),
('socsit', 'CS4A', 'CS-3206', 'Database Programming using VB'),
('socsit', 'CS4A', 'CS-3207', 'Object Oriented Programming through C++ - I'),
('socsit', 'CS4A', 'CS-3210', 'JAVA Programming'),
('socsit', 'CS4A', 'CS-3505', 'Computer Graphics and Multimedia Fundamentals'),
('socsit', 'CS4A', 'CS-3604', 'Data and Computer Communication'),
('socsit', 'CS4A', 'CS-3801A', 'Mini Project'),
('socsit', 'CS4A', 'CS-3801B', 'Project'),
('socsit', 'CS4A', 'CS-3809B	', 'Comprehensive Viva'),
('', 'CS4A', 'IC-1905', 'English Language and Composition'),
('socsit', 'CS4A', 'IC-1924	', 'Hindi Language'),
('socsit', 'CS4A', 'IC-2927	', 'Environmental Awareness'),
('socsit', 'CS4A', 'IC-2928', 'Principles and Practice of Management'),
('socsit', 'CS4A', 'IC-3913          ', 'Financial Accounting'),
('socsit', 'CS4A', 'IC-3929', 'Entrepreneurship'),
('socsit', 'CS5A', 'CS-1905A', 'English Language Lab'),
('socsit', 'CS5A', 'CS-4008 ', 'Computer Architecture '),
('socsit', 'CS5A', 'CS-4022', 'Computer Organization  and  Assembly Language Programming'),
('socsit', 'CS5A', 'CS-4116', 'Discrete Structures'),
('socsit', 'CS5A', 'CS-4205', 'Programming and Problem Solving Using C'),
('socsit', 'CS5A', 'CS-4209', 'Data Structures Using C++'),
('socsit', 'CS5A', 'CS-4211', 'Object Oriented Programming using JAVA'),
('socsit', 'CS5A', 'CS-4305 ', 'Software Engineering'),
('socsit', 'CS5A', 'CS-4405', 'Database Management System'),
('socsit', 'CS5A', 'CS-4408', 'Database Application and Tools'),
('socsit', 'CS5A', 'CS-4409', 'Enterprise Resource Planning'),
('socsit', 'CS5A', 'CS-5123', 'Theory of Computation'),
('socsit', 'CS5A', 'CS-5216', 'Design and Analysis of Algorithms'),
('socsit', 'CS5A', 'CS-5308 ', 'IT Project Management'),
('socsit', 'CS5A', 'CS-5309', 'Object Oriented Analysis and Design '),
('socsit', 'CS5A', 'CS-5413', 'Data  Mining and Warehousing'),
('socsit', 'CS5A', 'CS-5511', 'Operating Systems'),
('socsit', 'CS5A', 'CS-5512', 'Compiler Design'),
('socsit', 'CS5A', 'CS-5613 ', 'Computer Networks'),
('socsit', 'CS5A', 'CS-5617', 'Internet and Web Technology'),
('socsit', 'CS5A', 'CS-5701', 'Artificial Intelligence'),
('socsit', 'CS5A', 'CS-5805B', 'Project '),
('socsit', 'CS5A', 'CS-5805C', 'Project '),
('socsit', 'CS5A', 'CS-6518', 'Cloud Computing'),
('socsit', 'CS5A', 'CS-6623', 'Mobile and Wireless Systems'),
('socsit', 'CS5A', 'IC-3912', 'Professional and Social Issues in IT'),
('socsit', 'CS5A', 'IC-4915', 'Organization and Management Concepts'),
('socsit', 'CS5A', 'IC-4916', 'Communication Skills and Report Writing'),
('socsit', 'CS5A', 'IC-4917', 'Accounting and Financial Systems'),
('socsit', 'CS5B', 'CS-1905A	', 'English Language Lab'),
('socsit', 'CS5B', 'CS-4008 	', 'Computer Architecture '),
('socsit', 'CS5B', 'CS-4022', 'Computer Organization  and  Assembly Language Programming'),
('socsit', 'CS5B', 'CS-4116', 'Discrete Structures'),
('socsit', 'CS5B', 'CS-4205', 'Programming and Problem Solving Using C'),
('socsit', 'CS5B', 'CS-4209', 'Data Structures Using C ++'),
('socsit', 'CS5B', 'CS-4211', 'Object Oriented Programming using JAVA'),
('socsit', 'CS5B', 'CS-4305', 'Software Engineering'),
('socsit', 'CS5B', 'CS-4405', 'Database Management System'),
('socsit', 'CS5B', 'CS-4408', 'Database Application and Tools'),
('socsit', 'CS5B', 'CS-4508', 'Computer Graphics and Multimedia'),
('socsit', 'CS5B', 'CS-4517', 'Linux/UNIX Administration'),
('socsit', 'CS5B', 'CS-4809B	', 'Comprehensive Viva'),
('socsit', 'CS5B', 'CS-5123', 'Theory of Computation'),
('socsit', 'CS5B', 'CS-5216', 'Design and Analysis of Algorithms '),
('socsit', 'CS5B', 'CS-5308 ', 'IT Project Management'),
('socsit', 'CS5B', 'CS-5511', 'Operating Systems'),
('socsit', 'CS5B', 'CS-5512 	', 'Compiler Design'),
('socsit', 'CS5B', 'CS-5613', 'Computer Networks'),
('socsit', 'CS5B', 'CS-5617', 'Internet and Web Technology'),
('socsit', 'CS5B', 'CS-5805B', 'Project '),
('socsit', 'CS5B', 'IC-3912', 'Professional and Social Issues in IT'),
('socsit', 'CS5B', 'IC-4915', 'Organization and Management Concepts'),
('socsit', 'CS5B', 'IC-4916', 'Communication Skills and Report Writing'),
('socsit', 'CS5C', 'CS-1905A', 'English Language Lab'),
('socsit', 'CS5C', 'CS-4008', 'Computer Architecture'),
('socsit', 'CS5C', 'CS-4022', 'CS-4022	Computer Organization  and  Assembly Language Programming'),
('socsit', 'CS5C', 'CS-4116', 'Discrete Structures'),
('socsit', 'CS5C', 'CS-4205', 'Programming and Problem Solving Using C'),
('socsit', 'CS5C', 'CS-4209', 'Data Structures Using C++'),
('socsit', 'CS5C', 'CS-4211', 'Object Oriented Programming using JAVA'),
('socsit', 'CS5C', 'CS-4305', 'Software Engineering'),
('socsit', 'CS5C', 'CS-4405', 'Database Management System'),
('socsit', 'CS5C', 'CS-4408', 'Database Application and Tools'),
('socsit', 'CS5C', 'CS-4508', 'Computer Graphics and Multimedia'),
('socsit', 'CS5C', 'CS-4517', 'Linux/UNIX Administration'),
('socsit', 'CS5C', 'CS-5123', 'Theory of Computation'),
('socsit', 'CS5C', 'CS-5216', 'Design and Analysis of Algorithms'),
('socsit', 'CS5C', 'CS-5308 ', 'IT Project Management'),
('socsit', 'CS5C', 'CS-5511', 'Operating Systems'),
('socsit', 'CS5C', 'CS-5512', 'Compiler Design'),
('socsit', 'CS5C', 'CS-5613', 'Computer Networks'),
('socsit', 'CS5C', 'CS-5617', 'Internet and Web Technology'),
('socsit', 'CS5C', 'CS-5805B', 'Project'),
('socsit', 'CS5C', 'IC-3912', 'Professional and Social Issues in IT'),
('socsit', 'CS5C', 'IC-4915', 'Organization and Management Concepts'),
('socsit', 'CS5C', 'IC-4916', 'Communication Skills and Report Writing'),
('socsit', 'CS5D', 'CS-4008', 'Computer Architecture'),
('socsit', 'CS5D', 'CS-4022', 'Computer Organization  and  Assembly Language Programming'),
('socsit', 'CS5D', 'CS-4121', 'Mathematical Foundation of Computer Science'),
('socsit', 'CS5D', 'CS-4205', 'Programming and Problem Solving Using C'),
('socsit', 'CS5D', 'CS-4209', 'Data Structures Using C++'),
('socsit', 'CS5D', 'CS-4211', 'Object Oriented Programming using JAVA'),
('socsit', 'CS5D', 'CS-4305', 'Software Engineering'),
('socsit', 'CS5D', 'CS-4405', 'Database Management System'),
('socsit', 'CS5D', 'CS-4408', 'Database Application and Tools'),
('socsit', 'CS5D', 'CS-4409A', 'Introduction to Enterprise Resource Planning'),
('socsit', 'CS5D', 'CS-4422', 'ERP Applications'),
('socsit', 'CS5D', 'CS-4517', 'IT Infrastructure Management'),
('socsit', 'CS5D', 'CS-5308 ', 'IT Project Management'),
('socsit', 'CS5D', 'CS-5511', 'Operating Systems'),
('socsit', 'CS5D', 'CS-5613', 'Computer Networks'),
('socsit', 'CS5D', 'CS-5616', 'E- Commerce'),
('socsit', 'CS5D', 'CS-5617', 'Internet and Web Technology'),
('socsit', 'CS5D', 'CS-5805B', 'Project on ERP'),
('socsit', 'CS5D', 'CS-6518', 'Cloud Computing'),
('socsit', 'CS5D', 'IC-3912', 'Professional and Social Issues in IT'),
('socsit', 'CS5D', 'IC-4915', 'Organization and Management Concepts'),
('socsit', 'CS5D', 'IC-4916', 'Communication Skills and Report Writing'),
('socsit', 'CS7A', 'CS-4223', 'Programming and problem solving using Java'),
('socsit', 'CS7A', 'CS-5010', 'Advanced Computer Architecture'),
('socsit', 'CS7A', 'CS-5309', 'Object Oriented Analysis and Design '),
('socsit', 'CS7A', 'CS-5413', 'Data  Mining and Warehousing'),
('socsit', 'CS7A', 'CS-6220', 'Internet Programming Using Java'),
('socsit', 'CS7A', 'CS-6221', 'Advanced Algorithm Design'),
('socsit', 'CS7A', 'CS-6313', 'Software Testing and Quality Assurance '),
('socsit', 'CS7A', 'CS-6418              ', 'Advanced Database Management Systems'),
('socsit', 'CS7A', 'CS-6516          ', 'Advanced Operating Systems'),
('socsit', 'CS7A', 'CS-6517', 'Advanced Compiler Design'),
('socsit', 'CS7A', 'CS-6518', 'Cloud Computing'),
('socsit', 'CS7A', 'CS-6622', 'Advanced Computer Network'),
('socsit', 'CS7A', 'CS-6623', 'Mobile and Wireless Systems'),
('socsit', 'CS7A', 'CS-6630', 'Internet of Things'),
('socsit', 'CS7A', 'CS-6711 ', 'Soft Computing'),
('socsit', 'CS7A', 'CS-6712', 'Data Science '),
('socsit', 'CS7A', 'CS-6807A', 'M.Tech. Project Phase - I'),
('socsit', 'CS7A', 'CS-6807B', 'M.Tech. Project Phase – II'),
('socsit', 'CS7A', 'IC-6921', 'Research in Computing '),
('socsit', 'CS7B', 'CS -6313', 'Software Testing and Quality Assurance'),
('socsit', 'CS7B', 'CS-4407', 'Information System Design'),
('socsit', 'CS7B', 'CS-4409', 'Enterprise Resource Planning'),
('socsit', 'CS7B', 'CS-5309', 'Object Oriented Analysis and Design '),
('socsit', 'CS7B', 'CS-5413', 'Data  Mining and Warehousing'),
('socsit', 'CS7B', 'CS-6220', 'Internet Programming Using Java'),
('socsit', 'CS7B', 'CS-6313', 'Software Testing and Quality Assurance'),
('socsit', 'CS7B', 'CS-6315', 'Usability Engineering'),
('socsit', 'CS7B', 'CS-6316        ', 'Software Reuse and Customization'),
('socsit', 'CS7B', 'CS-6317', 'Advanced Software Engineering'),
('socsit', 'CS7B', 'CS-6418', 'Advanced Database Management Systems'),
('socsit', 'CS7B', 'CS-6712', 'Data Science '),
('socsit', 'CS7B', 'CS-7314', 'Information Architecture'),
('socsit', 'CS7B', 'IC-6921', 'Research in Computing '),
('socsit', 'CS7C', 'CS-5413', 'Data  Mining and Warehousing'),
('socsit', 'CS7C', 'CS-5615', 'Information Security'),
('socsit', 'CS7C', 'CS-5618', 'Network Security'),
('socsit', 'CS7C', 'CS-6220', 'Internet Programming Using Java'),
('socsit', 'CS7C', 'CS-6518', 'Cloud Computing'),
('socsit', 'CS7C', 'CS-6623', 'Mobile and Wireless Systems'),
('socsit', 'CS7C', 'CS-6624', 'Network Management'),
('socsit', 'CS7C', 'CS-6627', 'Web Technology and Java Security'),
('socsit', 'CS7C', 'CS-6628   ', 'Legal Aspects of Information Security                            '),
('socsit', 'CS7C', 'CS-6630', 'Internet of Things'),
('socsit', 'CS7C', 'IC-6921', 'Research in Computing '),
('socsit', 'CS9Z', 'CS-ACCS', 'Advance Course in Computer Science'),
('soecon', 'EC5A', '211C', 'Theory of Consumer Behavior and Production'),
('soecon', 'EC5A', '212C', 'Macro economics (core)'),
('soecon', 'EC5A', '213C', 'Public Economics (core)'),
('soecon', 'EC5A', '214C', 'Mathematics for Economics (core)'),
('soecon', 'EC5A', '215C', 'Statics for Econmics (core)'),
('soecon', 'EC5A', '216S', 'Communication and personality development (soft skills)'),
('soecon', 'EC5A', '21V', 'Comprehensive viva voce'),
('soecon', 'EC5A', '221C', 'Theory of Market Distributrion (core)'),
('soecon', 'EC5A', '222C', 'Theories of Money and Banking'),
('soecon', 'EC5A', '223C', 'urban Planning (core)'),
('soecon', 'EC5A', '224C', 'Statistical Inferences and Research Methods (core)'),
('soecon', 'EC5A', '225C', 'Agriculture and Rural Development (core)'),
('soecon', 'EC5A', '226SF/SG', 'French/German (Soft skills)'),
('soecon', 'EC5A', '227A', 'Computer Application (Ability Enhancement)'),
('soecon', 'EC5A', '22V', 'Comprehensive viva voce'),
('soecon', 'EC5A', '231C', 'International economics (core)'),
('soecon', 'EC5A', '232C', 'Economics of development and Growth (core)'),
('soecon', 'EC5A', '233C', 'Welfare Economics (core)'),
('soecon', 'EC5A', '234D', 'Environmetal Economics (Elective Discipline)'),
('soecon', 'EC5A', '235DA', 'Mathematical Economics (Elective Discipline)'),
('soecon', 'EC5A', '235DB', 'Economics for indistries-I (Elective Discipline) '),
('soecon', 'EC5A', '236DA', 'Econometrics-I (Elective Discipline)'),
('soecon', 'EC5A', '236DB', 'Labour problems and social welafre (Elective Discipline)'),
('soecon', 'EC5A', '237G', 'Financial Markets (Elective Generic)'),
('soecon', 'EC5A', '238P', 'Term Paper or summer internship'),
('soecon', 'EC5A', '23V', 'Comprehensive viva voce'),
('soecon', 'EC5A', '242C', 'Indian Economic Policy (Core)'),
('soecon', 'EC5A', '243D', 'Economics of Social Sector and Gender ( Elective Discipline )'),
('soecon', 'EC5A', '244DA', 'Mathematical Economics-II (Elective Discipline)'),
('soecon', 'EC5A', '244DB', 'Economics for indistries-II (Elective Discipline) '),
('soecon', 'EC5A', '245DA', 'Econometrics-II (Elective Discipline)'),
('soecon', 'EC5A', '246P', 'Dissertation + viva '),
('soecon', 'EC5A', '24V', 'Comprehensive viva voce'),
('soecon', 'EC5B', '811C', 'Micro Economics(Core)'),
('soecon', 'EC5B', '812C', 'Business Statistics (Core)'),
('soecon', 'EC5B', '813C', 'Business Finance and Accounting (Core)'),
('soecon', 'EC5B', '814C', 'Principles and Practices of Management (Core)'),
('soecon', 'EC5B', '815C', 'Marketing Management (Core)'),
('soecon', 'EC5B', '816A', 'IT for Managers (Ability Enhancement)'),
('soecon', 'EC5B', '817S', 'Business Communication and Personality Development (Soft Skill)'),
('soecon', 'EC5B', '81V', 'Comprehensive Viva Voce (Virtual Credit)'),
('soecon', 'EC5B', '821C', 'Macro Economic Analysis and Policy (Core)'),
('soecon', 'EC5B', '822C', 'Operations Research (Core)'),
('soecon', 'EC5B', '823C', 'Research Methodology (Core)'),
('soecon', 'EC5B', '824C', 'Organizational Behaviour (Core)'),
('soecon', 'EC5B', '825G', 'Entrepreneurship (Elective Generic)'),
('soecon', 'EC5B', '826SF/SG', 'French/German (Soft Skill)'),
('soecon', 'EC5B', '827DA', 'Industrial and Rural Marketing (Elective Discipline)'),
('soecon', 'EC5B', '827DB', 'Financial Management (Elective Discipline)'),
('soecon', 'EC5B', '828DA', 'Marketing Research and Consumer Behaviour (Elective Discipline)'),
('soecon', 'EC5B', '828DB', 'Financial Markets and Environment (Elective Discipline)'),
('soecon', 'EC5B', '82V', 'Comprehensive Viva Voce (Virtual Credit)'),
('soecon', 'EC5B', '831C', 'Strategic Management (Core)'),
('soecon', 'EC5B', '832C', 'Econometrics (Core)'),
('soecon', 'EC5B', '833C', 'International Economics (Core)'),
('soecon', 'EC5B', '834C', 'Strategic HR and Development (Core)'),
('soecon', 'EC5B', '835C', 'Supply Chain Management and Documentation (Core)'),
('soecon', 'EC5B', '836G', 'Business Law (Elective Generic)'),
('soecon', 'EC5B', '837DA', 'Integrated Marketing Communication (Elective Discipline)'),
('soecon', 'EC5B', '837DB', 'Cost and Management Accounting (Elective Discipline)'),
('soecon', 'EC5B', '838DA', 'International Marketing (Elective Discipline)'),
('soecon', 'EC5B', '838DB', 'Security Analysis and Portfolio Management (Elective Discipline)'),
('soecon', 'EC5B', '839P', 'Summer Training Report Submission (Project Work)'),
('soecon', 'EC5B', '83V', 'Comprehensive Viva Voce (Virtual Credit)'),
('soecon', 'EC5B', '841C', 'Business Forecating and Planning Techniques (Core)'),
('soecon', 'EC5B', '842C', 'Service Marketing and CRM (Core)'),
('soecon', 'EC5B', '843A', 'Commodity Derivative and Price Risk Management (Ability Enhancement)'),
('soecon', 'EC5B', '844DA', 'Retail Marketing (Elective Discipline)'),
('soecon', 'EC5B', '844DB', 'Business Taxation (Elective Discipline)'),
('soecon', 'EC5B', '845DA', 'Sales and Distribution Management (Elective Discipline)'),
('soecon', 'EC5B', '845DB', 'Insurance and Bank Management (Elective Discipline)'),
('soecon', 'EC5B', '846P', 'MRP (Project Work)'),
('soecon', 'EC5B', '84V', 'Comprehensive Viva Voce (Virtual Credit)'),
('soecon', 'EC5C', '711C', 'Micro Economics (core)'),
('soecon', 'EC5C', '712C', 'Business Statistics (core)'),
('soecon', 'EC5C', '713C', 'Business Finance and Accounting (Core)'),
('soecon', 'EC5C', '714C', 'Financial Market and Environment (Core)'),
('soecon', 'EC5C', '715C', 'Principle and Practice of management (core)'),
('soecon', 'EC5C', '716A', 'IT for Managers (Ability Enhancement)'),
('soecon', 'EC5C', '717S', 'Business communication and personality development (Soft skill)'),
('soecon', 'EC5C', '71V', 'Comprehensive viva voce (virtual credit)'),
('soecon', 'EC5C', '72 V', 'Comprehensive viva voce (virtual credit)'),
('soecon', 'EC5C', '721C', 'Macro economics Analysis and policy (core)'),
('soecon', 'EC5C', '722C', 'Operation Research (core)'),
('soecon', 'EC5C', '723C', 'Research Methodology (core)'),
('soecon', 'EC5C', '724C', 'Corporate Finance (core)'),
('soecon', 'EC5C', '725C', 'Organizational Behaviour (core)'),
('soecon', 'EC5C', '726C', 'Banking Service operations (core)'),
('soecon', 'EC5C', '727G', 'Business Law (Elective Generic)'),
('soecon', 'EC5C', '728SF/SG', 'French/German (Soft skills)'),
('soecon', 'EC5C', '731C', 'Financial Product and Service (core)'),
('soecon', 'EC5C', '732C', 'Strategic Financial Management ( Core )'),
('soecon', 'EC5C', '733C', 'Markrting Management (core)'),
('soecon', 'EC5C', '734C', 'HRM and Accounting (core)'),
('soecon', 'EC5C', '735D', 'Security Analysis and Portfolio Managment (Elective Discipline)'),
('soecon', 'EC5C', '736D', 'Corporate Tax Planning and Management (Elective Discipline)'),
('soecon', 'EC5C', '737D', 'Principle ,Practices and Regulation of Insurance (Elective Discipline)'),
('soecon', 'EC5C', '738G', 'Entreprenuership (Elective Generic)'),
('soecon', 'EC5C', '739P', 'Summer Training report submission(Project Work)'),
('soecon', 'EC5C', '73V', 'Comprehensive viva voce (virtual credit)'),
('soecon', 'EC5C', '741C', 'Service Marekting and CRM (core)'),
('soecon', 'EC5C', '742D', 'Invsetment and Merchant Banking (Elective Discipline )'),
('soecon', 'EC5C', '743D', 'Analytical Techniques for Finance (Elective Discipline)'),
('soecon', 'EC5C', '744D', 'International Financial Market and Forex Management (Elective Discipline )'),
('soecon', 'EC5C', '745A', 'Commodity Derivatives and Price Risk Mgmt. (Ability Enhancement)'),
('soecon', 'EC5C', '746P', 'Major Research Project (project Work)'),
('soecon', 'EC5C', '74V', 'Comprehensive viva voce (virtual credit)'),
('soecon', 'EC5C', '923C', 'Business Finance and Accounting (Core)'),
('soecon', 'EC5D', '911C', 'Micro Economics(Core)'),
('soecon', 'EC5D', '912C', 'Business Statistics (Core)'),
('soecon', 'EC5D', '913C', 'International Economics (Core)'),
('soecon', 'EC5D', '914C', 'Principles and Practices of Management (Core)'),
('soecon', 'EC5D', '915C', 'Marketing Management (Core)'),
('soecon', 'EC5D', '916D', 'Organizational Behaviour (Core)'),
('soecon', 'EC5D', '917SF/SG', 'French/German (Soft Skill)'),
('soecon', 'EC5D', '91V', 'Comprehensive Viva Voce (Virtual Credit)'),
('soecon', 'EC5D', '921C', 'Macro economics Analysis and policy (core)'),
('soecon', 'EC5D', '922C', 'Operation Research (core)'),
('soecon', 'EC5D', '924C', 'Export Procedure and Documentation (core)'),
('soecon', 'EC5D', '925A', 'IT for Managers (Ability Enhancement)'),
('soecon', 'EC5D', '926D', 'Financial and Derivative Markets in India (Elective Discipline)'),
('soecon', 'EC5D', '927G', 'Entreprenuership (Elective Generic)'),
('soecon', 'EC5D', '928S', 'Business communication and personality development (Soft skill)'),
('soecon', 'EC5D', '92V', 'Comprehensive viva voce (virtual credit)'),
('soecon', 'EC5D', '931C', 'International Marketing (Core)'),
('soecon', 'EC5D', '932C', 'Strategic Management (Core)'),
('soecon', 'EC5D', '933C', 'Import Management (Core)'),
('soecon', 'EC5D', '934C', 'Research Methodology (Core)'),
('soecon', 'EC5D', '935G', 'Business Law (Elective Generic)'),
('soecon', 'EC5D', '936D', 'International Business Finance (Elective Discipline)'),
('soecon', 'EC5D', '937D', 'International Trade Logistics and Supply Chain Managemant (Elective Discipline)'),
('soecon', 'EC5D', '938D', 'International Marketing Research (Elective Discipline)'),
('soecon', 'EC5D', '939P', 'Summer Training Report (Project Work)'),
('soecon', 'EC5D', '93V', 'Comprehensive Viva Voce (Virtual Credit)'),
('soecon', 'EC5D', '941C', 'Strategic HR and Develpoment (core)'),
('soecon', 'EC5D', '942C', 'Service Marketin and CRM (core)'),
('soecon', 'EC5D', '943A', 'Consumer behaviour (Ability Enhancement)'),
('soecon', 'EC5D', '944D', 'Overseas Project Management (Elective Discipline)'),
('soecon', 'EC5D', '945D', 'Select Market and Thrust Products (Elective Discipline)'),
('soecon', 'EC5D', '946P', 'MRP (Project Work)'),
('soecon', 'EC5D', '94V', 'Comprehensive viva voce (virtual credit)'),
('soedu', 'ED4A', '511', 'Philosophical and Sociological Perspectives in Education'),
('soedu', 'ED4A', '512', 'Psychological Perspectives of Learner'),
('soedu', 'ED4A', '513', 'Classroom Management'),
('soedu', 'ED4A', '514', 'Pedagogy of School Subject-I'),
('soedu', 'ED4A', '516', 'School Experience'),
('soedu', 'ED4A', '517', 'EPC-I Reading and Reflecting'),
('soedu', 'ED4A', '518', 'Creative Expression Skills'),
('soedu', 'ED4A', '521', 'Psychological Perspectives of Learning'),
('soedu', 'ED4A', '522', 'Exploring and Developing Teaching Learning Resources'),
('soedu', 'ED4A', '523', 'Pedagogy of School Subject-II'),
('soedu', 'ED4A', '524', 'Models of Teaching'),
('', 'ED4A', '525', 'Elective/Generic Course-I'),
('soedu', 'ED4A', '525 O', 'Value Education/ Non Formal Education/ Action Research'),
('soedu', 'ED4A', '526', 'EPC-2 Arts and Aesthetics in Education'),
('soedu', 'ED4A', '527', 'EPC-3 Environment Based Project'),
('soedu', 'ED4A', '528', 'Mentorship'),
('soedu', 'ED4A', '531 O', 'Creating an Inclusive Institution'),
('soedu', 'ED4A', '532', 'Secondary Education Issues and Problem'),
('soedu', 'ED4A', '533 O', 'Curriculum Development'),
('soedu', 'ED4A', '534', 'Evaluating Educational Processes and Products'),
('soedu', 'ED4A', '535', 'School Internship'),
('soedu', 'ED4A', '536', 'EPC-4 Creative Expression Skills'),
('soedu', 'ED4A', '541', 'Management of Educational Institutions'),
('soedu', 'ED4A', '542', 'Historical Perspectives of Education'),
('soedu', 'ED4A', '543', 'Information and communication Technology in Education'),
('soedu', 'ED4A', '544 O', 'Elective/Generic Course -2'),
('soedu', 'ED4A', '545', 'EPC-5 Physical Education and Yoga'),
('soedu', 'ED4A', '546', 'School Internship-II'),
('soedu', 'ED4A', '547', 'Knowledge and Curriculum'),
('soedu', 'ED4A', '644 O', 'Creating an Inclusive Institution'),
('soedu', 'ED4A', 'N 531, 532', 'School Internship-I, II'),
('soedu', 'ED4A', 'N515', 'Knowledge and Curriculum'),
('soedu', 'ED4A', 'N533', 'EPC-2: Health, Yoga and Physical Education'),
('soedu', 'ED4A', 'N547', 'Co-Curricular Activities'),
('soedu', 'ED4A', 'New 515', 'Elective/Generic Course-I'),
('soedu', 'ED4A', 'O515', 'Development of Teaching Skill'),
('soedu', 'ED5A', '611', 'Philosophical Perspectives of Education'),
('soedu', 'ED5A', '612', 'Psychological Perspectives of Education-I'),
('soedu', 'ED5A', '613', 'Educational Research and Statistics-I'),
('soedu', 'ED5A', '614', 'Critical Reading of Literature'),
('soedu', 'ED5A', '615', 'Elective/Generic Course'),
('soedu', 'ED5A', '616', 'Dissertation-I'),
('soedu', 'ED5A', '617', 'Internship-I'),
('soedu', 'ED5A', '618', 'Co-Curricular Activities-I'),
('soedu', 'ED5A', '621', 'Sociological Perspectives of Education'),
('soedu', 'ED5A', '622 O', 'Perspectives of Teacher Education-I'),
('soedu', 'ED5A', '623', 'Educational Research and Statistics-II'),
('soedu', 'ED5A', '624', 'Academic writing and Paper Presentation'),
('soedu', 'ED5A', '625 O', 'ICT in Education'),
('soedu', 'ED5A', '626', 'Elective/Generic Course'),
('soedu', 'ED5A', '627', 'Dissertation-II'),
('soedu', 'ED5A', '628 O', 'Co-Curricular Activities-II'),
('soedu', 'ED5A', '631', 'Psychological Perspectives of Education-II'),
('soedu', 'ED5A', '632 O', 'Historical and Political Perspectives of Education'),
('soedu', 'ED5A', '633 O', 'Educational Research and Statistics-III'),
('soedu', 'ED5A', '634 O', 'Elective/Generic Course'),
('soedu', 'ED5A', '635 O', 'Dissertation-III'),
('soedu', 'ED5A', '636 O', 'Community Based Project'),
('soedu', 'ED5A', '637', 'Internship-II'),
('soedu', 'ED5A', '638 O', 'Co-Curricular Activities-III'),
('soedu', 'ED5A', '638N', 'Psychology Practical-II'),
('soedu', 'ED5A', '641 O', 'Perspectives of Teacher Education-II'),
('soedu', 'ED5A', '642', 'Educational Research and Statistics-IV'),
('soedu', 'ED5A', '643 O', 'Elective/Generic Course'),
('soedu', 'ED5A', '644 O', 'Exposure to Inclusive School'),
('soedu', 'ED5A', '645', 'Dissertation-IV'),
('soedu', 'ED5A', '646', 'Physical Education and Yoga'),
('soedu', 'ED5A', 'N 628', 'Psychology Practical- I'),
('soedu', 'ED5A', 'N 636', 'Internship-I'),
('soedu', 'ED5A', 'N611', 'Sociological Perspectives of Education'),
('soedu', 'ED5A', 'N612', 'Perspectives of Teacher Education'),
('soedu', 'ED5A', 'N625', 'Gender Studies'),
('soedu', 'ED5A', 'N629', 'Mentor-ship'),
('soedu', 'ED5A', 'N637', 'Internship-II'),
('soedu', 'ED5A', 'N643', 'Curriculum Studies'),
('soex', 'EL7A', 'EL71102', ' Linux Scripting and Networking'),
('soex', 'EL7A', 'EL71103', 'System Programming '),
('soex', 'EL7A', 'EL71104', 'Digital Signal Processing'),
('soex', 'EL7A', 'EL71105', 'Embedded Microcontroller '),
('soex', 'EL7A', 'EL71106', 'Advanced Logic Design '),
('soex', 'EL7A', 'EL71202', ' Linux Lab    '),
('soex', 'EL7A', 'EL71203', ' System Programming Lab	'),
('soex', 'EL7A', 'EL71204', 'Digital Signal Processing Lab         '),
('soex', 'EL7A', 'EL71205', ' Embedded Microcontroller Lab'),
('soex', 'EL7A', 'EL71206', 'Advanced Logic Design Lab'),
('soex', 'EL7B', 'EL71104', 'Digital Signal Processing'),
('soex', 'EL7C', 'EL71102', 'Linux Scripting and Networking'),
('soex', 'EL7C', 'EL71103', 'System Programming '),
('soex', 'EL7C', 'EL71104', 'Digital Signal Processing'),
('soex', 'EL7C', 'EL71105', 'Embedded Microcontroller '),
('soex', 'EL7C', 'EL71109', 'Wireless Networks           '),
('soex', 'EL7C', 'EL71202  ', 'Linux Lab '),
('soex', 'EL7C', 'EL71203', ' System Programming Lab'),
('soex', 'EL7C', 'EL71204', 'Digital Signal Processing Lab         '),
('soex', 'EL7C', 'EL71205', 'Embedded Microcontroller Lab'),
('emrcdavv', 'EM5A', 'M101', 'Audio Production Management '),
('emrcdavv', 'EM5A', 'M102', 'Graphics and Animation'),
('emrcdavv', 'EM5A', 'M201', 'Video Editing and Compositing'),
('emrcdavv', 'EM5A', 'M202', 'Videography and Studio Practices '),
('emrcdavv', 'EM5A', 'M301', 'Broadcast Journalism '),
('emrcdavv', 'EM5A', 'M302', 'Direction and Production for TV'),
('emrcdavv', 'EM5A', 'M401', 'Media Research Dissertation'),
('emrcdavv', 'EM5A', 'M402', 'Internship '),
('emrcdavv', 'EM5A', 'T101', 'Fundamentals of Management '),
('emrcdavv', 'EM5A', 'T102', 'Fundamentals of Communication and Media'),
('emrcdavv', 'EM5A', 'T103', 'Electronic Media and Society'),
('emrcdavv', 'EM5A', 'T104', 'Writing for Electronic Media '),
('emrcdavv', 'EM5A', 'T201', 'Advertising Management'),
('emrcdavv', 'EM5A', 'T202', 'Media Law and Ethics'),
('emrcdavv', 'EM5A', 'T203', 'Broadcast Technology Management '),
('emrcdavv', 'EM5A', 'T204', 'Media Organization and Behavior'),
('emrcdavv', 'EM5A', 'T301', 'Media Research'),
('emrcdavv', 'EM5A', 'T302', 'Media Marketing Management'),
('emrcdavv', 'EM5A', 'T303', 'Media Planning and Event Management'),
('emrcdavv', 'EM5A', 'T304', 'Digital Marketing and New Media Production'),
('emrcdavv', 'EM5A', 'T401', 'Human Resource Management'),
('emrcdavv', 'EM5A', 'T402', 'Business Strategy and Finance'),
('emrcdavv', 'EM5A', 'T403', 'PR and Corporate Communication '),
('emrcdavv', 'EM5A', 'T404', 'Entrepreneurship Development'),
('emrcdavv', 'EM6A', 'M101', 'Desktop Publishing'),
('emrcdavv', 'EM6A', 'M102', 'Basic Electronics'),
('emrcdavv', 'EM6A', 'M201', 'Communication Skills '),
('emrcdavv', 'EM6A', 'M202', 'Basic Photography '),
('emrcdavv', 'EM6A', 'M301', 'Sound Recording and Editing'),
('emrcdavv', 'EM6A', 'M302', 'Basic Videography and Lighting'),
('emrcdavv', 'EM6A', 'M401', 'Video Editing'),
('emrcdavv', 'EM6A', 'M402', 'Graphics and Animation (2D)'),
('emrcdavv', 'EM6A', 'M501', 'Video Production'),
('emrcdavv', 'EM6A', 'M502', 'Graphics and Animation (3D)'),
('emrcdavv', 'EM6A', 'M601', 'Electronic News Production'),
('emrcdavv', 'EM6A', 'M602', 'Visual Effects (VFX)'),
('emrcdavv', 'EM6A', 'M701', 'Screenplay and Dialogue Writing'),
('emrcdavv', 'EM6A', 'M702', 'Documentary Production'),
('emrcdavv', 'EM6A', 'M801', 'Media Research Dissertation'),
('emrcdavv', 'EM6A', 'M802', 'Fiction Production'),
('emrcdavv', 'EM6A', 'M901', 'Film Studies'),
('emrcdavv', 'EM6A', 'M902', 'Television Programming Studies '),
('emrcdavv', 'EM6A', 'T1001', 'Internship '),
('emrcdavv', 'EM6A', 'T1002', 'Project Report'),
('emrcdavv', 'EM6A', 'T101', 'Communicative Skills (English)'),
('emrcdavv', 'EM6A', 'T102', 'Communicative Skills (Hindi)'),
('emrcdavv', 'EM6A', 'T103', 'Communication Fundamentals'),
('emrcdavv', 'EM6A', 'T104', 'Media and Society'),
('emrcdavv', 'EM6A', 'T201', 'Communicative Skills (English)'),
('emrcdavv', 'EM6A', 'T202', 'Communicative Skills (Hindi)'),
('emrcdavv', 'EM6A', 'T203', 'Audio Visual Technology and Studios'),
('emrcdavv', 'EM6A', 'T204', 'Planning and Writing for Audio Production'),
('emrcdavv', 'EM6A', 'T301', 'Radio and Television in India'),
('emrcdavv', 'EM6A', 'T302', 'Writing for Television'),
('emrcdavv', 'EM6A', 'T303', 'Basics of Video Production'),
('emrcdavv', 'EM6A', 'T304', 'Visual Design'),
('emrcdavv', 'EM6A', 'T401', 'Creative Dramatics'),
('emrcdavv', 'EM6A', 'T402', 'Media Distribution and Storage'),
('emrcdavv', 'EM6A', 'T403', 'Media Aesthetics'),
('emrcdavv', 'EM6A', 'T404', 'Media and Literature'),
('emrcdavv', 'EM6A', 'T501', 'Media and Politics'),
('emrcdavv', 'EM6A', 'T502', 'Principles of Journalism'),
('emrcdavv', 'EM6A', 'T503', 'Media Laws'),
('emrcdavv', 'EM6A', 'T504', 'Digital Media Basics'),
('emrcdavv', 'EM6A', 'T601', 'Digital Marketing and Production'),
('emrcdavv', 'EM6A', 'T602', 'Media and Psychology'),
('emrcdavv', 'EM6A', 'T603', 'Introduction to Advertising '),
('emrcdavv', 'EM6A', 'T604', 'PR and Corporate Communication '),
('emrcdavv', 'EM6A', 'T701', 'Fundamentals of Management '),
('emrcdavv', 'EM6A', 'T702', 'Media Research'),
('emrcdavv', 'EM6A', 'T703', 'Media Planning'),
('emrcdavv', 'EM6A', 'T801', 'Art Direction'),
('emrcdavv', 'EM6A', 'T802', 'Media Organization and Behavior'),
('emrcdavv', 'EM6A', 'T803', 'Human Resource Management '),
('emrcdavv', 'EM6A', 'T901', 'Media Marketing Management'),
('emrcdavv', 'EM6A', 'T902', 'Event Management'),
('emrcdavv', 'EM6A', 'T903', 'New Media Production '),
('sees', 'EN5A', 'EM – 802', 'Financial Management '),
('sees', 'EN5A', 'EM – 803', 'Geothermal and Ocean Energy Conversion  '),
('sees', 'EN5A', 'EM – 804', 'Solar Energy Technologies  '),
('sees', 'EN5A', 'EM – 805', 'Solar Energy Laboratory '),
('sees', 'EN5A', 'EM – 806', 'Water and waste water Pollution and Control Management '),
('sees', 'EN5A', 'EM – 807', 'Air Pollution and Control Management '),
('sees', 'EN5A', 'EM – 808', 'Electrical Energy Management   '),
('sees', 'EN5A', 'EM – 809', 'Thermal Energy Management  '),
('sees', 'EN5A', 'EM – 810', 'Energy Auditing and Energy Conservation Laboratory  '),
('sees', 'EN5A', 'EM – 811', 'Energy Action Planning and Project Management '),
('sees', 'EN5A', 'EM – 812', 'Environmental Impact Assessment and  Auditing  '),
('sees', 'EN5A', 'EM – 813', 'Process Integration and Engineering Thermodynamics');
INSERT INTO `course` (`Username`, `Prog_code`, `Course_code`, `Course_name`) VALUES
('sees', 'EN5A', 'EM – 814', 'Solid Waste Management '),
('sees', 'EN5A', 'EM – 815', 'Site Visits (Renewable  / Industrial)'),
('sees', 'EN5A', 'EM – 816', 'Organization Behaviour '),
('sees', 'EN5A', 'EM – 817', 'Biomass Conversion Technologies'),
('sees', 'EN5A', 'EM – 818 ', 'Wind Energy Technologies'),
('sees', 'EN5A', 'EM – 819', 'Instrumentation and Data Base Management '),
('sees', 'EN5A', 'EM – 820', 'Biomass Laboratory '),
('sees', 'EN5A', 'EM – 823', 'Energy Conservation Management in Process of Designated Industries '),
('sees', 'EN5A', 'EM – 824', 'Energy Auditing Management Techniques'),
('sees', 'EN5A', 'EM – 825', 'Heat Transfer  Laboratory '),
('sees', 'EN5A', 'EM –821', 'Energy Conservation in Industrial Buildings'),
('sees', 'EN5A', 'EM –822', 'Heat Transfer  '),
('sees', 'EN5A', 'EM –826', 'Major Project'),
('sees', 'EN5A', 'EM-801', 'Principals and Practices of Management'),
('sees', 'EN7A', 'EN-701', 'Solar Energy '),
('sees', 'EN7A', 'EN-702', 'New and Renewable Energy Sources and Technologies'),
('sees', 'EN7A', 'EN-703', 'Engineering Thermodynamics, Heat Transfer and Process Integration'),
('sees', 'EN7A', 'EN-704', 'Water and Waste Water: Pollution & Control Technologies'),
('sees', 'EN7A', 'EN-705', 'Air and Noise Pollution: Effects and Control Technologies'),
('sees', 'EN7A', 'EN-706', 'Energy Management (Thermal)'),
('sees', 'EN7A', 'EN-707', 'Energy Management (Electrical Systems) '),
('sees', 'EN7A', 'EN-708', 'Efficient Lighting: Sources, Systems and Design Aspects'),
('sees', 'EN7A', 'EN-709', 'Green Building Technologies'),
('sees', 'EN7A', 'EN-710', 'Bio and Solid Waste Management '),
('sees', 'EN7A', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment '),
('sees', 'EN7A', 'EN-712', 'Energy Modeling and Project Management '),
('sees', 'EN7A', 'EN-713', 'Electrical Power Generation, Instrumentation, Measurements, Transmission and Distribution 2 '),
('sees', 'EN7A', 'EN-801', 'Heat Transfer and Energy Conservation Laboratory '),
('sees', 'EN7A', 'EN-802', 'Biomass and Environmental laboratory '),
('sees', 'EN7A', 'EN-803', 'Solar Thermal and Photo - Voltaic Laboratory '),
('sees', 'EN7A', 'EN-804', 'Energy Environment Software Application'),
('sees', 'EN7A', 'EN-805', 'Field Visits (Lab)'),
('sees', 'EN7A', 'EN-806', 'Seminar'),
('sees', 'EN7A', 'EN-807', 'Mini Project'),
('sees', 'EN7A', 'EN-808', 'Major Project'),
('sees', 'EN7A', 'Ph. D -703', 'Research Paper'),
('sees', 'EN7A', 'Ph.D-702', 'Computer Applications'),
('sees', 'EN9Z', 'Ph.D-701', 'Research Methodology'),
('Soinstru', 'IN5A', 'IS 401', 'MEASUREMENT -I'),
('Soinstru', 'IN5A', 'IS 402', 'MEASUREMENT -II'),
('Soinstru', 'IN5A', 'IS 403', 'PROGRAMMING IN C'),
('Soinstru', 'IN5A', 'IS 404', 'TRANSDUCERS AND ACTUATORS'),
('Soinstru', 'IN5A', 'IS 405', 'ENGINEERING MATHEMATICS'),
('Soinstru', 'IN5A', 'IS 407', 'ANALOG ELECTRONICS'),
('Soinstru', 'IN5A', 'IS 408', 'DIGITAL ELECTRONICS'),
('Soinstru', 'IN5A', 'IS 409', 'INSTRUMENTATION LAB -I'),
('Soinstru', 'IN5A', 'IS 410', 'INSTRUMENT TECHNOLOGY LAB -II'),
('Soinstru', 'IN5A', 'IS 411', 'WORKSHOP PRACTICE -I'),
('Soinstru', 'IN5A', 'IS 412', 'WORKSHOP PRACTICE -II'),
('Soinstru', 'IN5A', 'IS 413', 'COMPREHENSIVE VIVA -VOCE'),
('Soinstru', 'IN5A', 'IS 414', 'COMPREHENSIVE VIVA -VOCE'),
('Soinstru', 'IN5A', 'IS 501', 'DATA COMMUNICATON IN INSTRUMENTATON SYSTEMS'),
('Soinstru', 'IN5A', 'IS 502', 'OPTICS AND LASER BASED INSTRUMENTATION'),
('Soinstru', 'IN5A', 'IS 503', 'SIGNAL AND SYSTEMS'),
('Soinstru', 'IN5A', 'IS 504', 'ANALYTICAL INSTRUMENTATION'),
('Soinstru', 'IN5A', 'IS 505', 'MICROPROCESSORS AND INTERFACING'),
('Soinstru', 'IN5A', 'IS 506', 'PROJECT WORK'),
('Soinstru', 'IN5A', 'IS 507', 'PROCESS CONTROL INSTRUMENTATION'),
('Soinstru', 'IN5A', 'IS 508', 'COMPREHENSIVE VIVA -VOCE'),
('Soinstru', 'IN5A', 'IS 509', 'INSTRUMENTATION LAB -III'),
('Soinstru', 'IN5A', 'IS 511', 'SEMINAR'),
('Soinstru', 'IN5A', 'IS 513', 'COMPREHENSIVE VIVA -VOCE'),
('Soinstru', 'IN5A', 'IS406', 'CONTROL SYSTEM'),
('Soinstru', 'IN7A', 'FS 724', 'PYTHON FOR ANALYTICS (CBCS)'),
('Soinstru', 'IN7A', 'IS 701', 'COMPUTER PROGRAMMING AND NUMRICAL TECHNIQUES'),
('Soinstru', 'IN7A', 'IS 702', 'COMPUTER NETWORKS'),
('Soinstru', 'IN7A', 'IS 703', 'PROCESS CONTROL AND AUTOMATION'),
('Soinstru', 'IN7A', 'IS 704', 'COMPUTER CONTROLLED AND SCADA SYSTEMS'),
('Soinstru', 'IN7A', 'IS 705', 'ANALYTICAL INSTRUMENTATION'),
('Soinstru', 'IN7A', 'IS 706', 'VLSI DESIGN'),
('Soinstru', 'IN7A', 'IS 707', 'MICROCONTROLLER BASED SYSTEM DESIGN-I'),
('Soinstru', 'IN7A', 'IS 708', 'MICRO CONTROLLER BASED SYSTEM DESIGN -II'),
('Soinstru', 'IN7A', 'IS 709', 'INDUSTRIAL ELECTRONICS'),
('Soinstru', 'IN7A', 'IS 711', 'INDUSTRIAL TRANSDUCER'),
('Soinstru', 'IN7A', 'IS 715', 'MINOR PROJECT'),
('Soinstru', 'IN7A', 'IS 716', 'DIGITAL SIGNAL PROCESSING (ELECTIVE)'),
('Soinstru', 'IN7A', 'IS 717', 'INSTRUMENT TECHNOLOGY LAB -I'),
('Soinstru', 'IN7A', 'IS 718', 'INSTRUMENT TECHNOLOGY LAB -II'),
('Soinstru', 'IN7A', 'IS 719', 'COMPREHENSIVE VIVA -VOCE'),
('Soinstru', 'IN7A', 'IS 720', 'SEMINOR'),
('Soinstru', 'IN7A', 'IS 722', 'COMPREHENSIVE VIVA -VOCE'),
('Soinstru', 'IN7A', 'IS 801', 'PROJECT CUM TRAINING'),
('Soinstru', 'IN7A', 'ISC 701', 'PROCESS CONTROL AND AUTOMATION'),
('Soinstru', 'IN7A', 'ISC 702', 'COMPUTER CONTROLLED AND SCADA SYSTEMS'),
('Soinstru', 'IN7A', 'ISC 703', 'MICROCONTROLLER BASED SYSTEM DESIGN-I'),
('Soinstru', 'IN7A', 'ISC 704', 'MICRO CONTROLLER BASED SYSTEM DESIGN -II'),
('Soinstru', 'IN7A', 'ISC 705', 'INDUSTRIAL TRANSDUCER'),
('Soinstru', 'IN7A', 'ISC 706', 'VLSI DESIGN'),
('Soinstru', 'IN7A', 'ISC 707', 'INSTRUMENT TECHNOLOGY LAB -I'),
('Soinstru', 'IN7A', 'ISC 708', 'INSTRUMENT TECHNOLOGY LAB -II'),
('Soinstru', 'IN7A', 'ISC 753', 'WIRELESS SENSR PROTOCALS AND PROGRAMMING'),
('Soinstru', 'IN7A', 'ISC 755', 'EMBEDDED SYSTEM DESIGN'),
('Soinstru', 'IN7A', 'ISC 801', 'PROJECT CUM TRAING'),
('Soinstru', 'IN7A', 'ISE 720', 'COMPUTER PROGRAMMING AND NUMRICAL TECHNIQUES'),
('Soinstru', 'IN7A', 'ISE 722', 'COMPUTER NETWORKS'),
('Soinstru', 'IN7A', 'ISG 711', 'INDUSTRIAL ELECTRONICS'),
('Soinstru', 'IN7A', 'ISG 712', 'BIOMEDICAL INSTRUMENTATION'),
('Soinstru', 'IN7A', 'ISG 713', 'ANALYTICAL INSTRUMENTATION'),
('Soinstru', 'IN7A', 'ISG 716', 'DIGITAL SIGNAL PROCESSING'),
('Soinstru', 'IN7A', 'ISS 709', 'MINOR PROJECT AND PROJECT WRITING'),
('Soinstru', 'IN7A', 'ISS 710', 'SEMINOR AND COMMUNICATION SKILLS'),
('Soinstru', 'IN7A', 'ISV 731', 'COMPREHENSIVE VIVA -VOCE -I'),
('Soinstru', 'IN7A', 'ISV 732', 'COMPREHENSIVE VIVA -VOCE -II'),
('Soinstru', 'IN7B', 'IS 761', 'MINOR PROJECT AND PROJECT WRITING'),
('Soinstru', 'IN7B', 'IS 851', 'PROJECT CUM TRAINING'),
('Soinstru', 'IN7B', 'ISC 751', 'SYSTEMS DESIGN ENGINEERING'),
('Soinstru', 'IN7B', 'ISC 752', 'IOT ARCHITECTURE AND PROTOCALS'),
('Soinstru', 'IN7B', 'ISC 754', 'BIG DATA AND CLOUD COMPUTING'),
('Soinstru', 'IN7B', 'ISC 756', 'REAL TIME OPERATING SYSTEMS EMBEDDED SYSTEMS OS'),
('Soinstru', 'IN7B', 'ISC 759', 'IOT TECHNOLOGY LAB -I'),
('Soinstru', 'IN7B', 'ISC 760', 'IOT TECHNOLOGY LAB-2'),
('Soinstru', 'IN7B', 'ISC 762', 'SOFT SKILL DEVELOPMENT'),
('Soinstru', 'IN7B', 'ISE 758', 'COMMUNICATION TECHNOLOGIES FOR IOT'),
('Soinstru', 'IN7B', 'ISE 765', 'INTRODUCTION TO NANO ELECTRONICS AND MEMS/NEMS DEVICES'),
('Soinstru', 'IN7B', 'ISG 757', 'PYTHON FOR IOT'),
('Soinstru', 'IN7B', 'ISG 764', 'IOT: LEGAL ISSUES'),
('Soinstru', 'IN7B', 'ISV 766', 'COMPREHENSIVE VIVA -VOCE'),
('Soinstru', 'IN7B', 'ISV 767', 'COMPREHENSIVE VIVA -VOCE'),
('Soinstru', 'IN9Z', 'ISC 901', 'RESEARCH METHODOLOGY'),
('Soinstru', 'IN9Z', 'ISC 903', 'COMPUTER APPLICATIONS'),
('Soinstru', 'IN9Z', 'ISC 905', 'ANALYTICAL INSTRUMENTATION FOR NANO MATERIALS'),
('Soinstru', 'IN9Z', 'ISC 907', 'POWER SYSTEMS AND SIGNALS'),
('Soinstru', 'IN9Z', 'ISC 909', 'REVIEW OF PUBLISHED RESEARCH'),
('Soinstru', 'IN9Z', 'ISC 911', 'COMPREHENSIVE VIVA -VOCE'),
('doll', 'LE2A', '401/413', 'Basic Design'),
('doll', 'LE2A', '403/415', 'Basic Graphics'),
('doll', 'LE2A', '405/417', 'Services '),
('doll', 'LE2A', '407/419', 'Construction'),
('doll', 'LE2A', '409', 'Building Materials'),
('doll', 'LE2A', '411', 'Workshop'),
('doll', 'LE2A', '421', 'Estimating Costing'),
('doll', 'LE2A', 'FT- 403', 'Quality Assurance'),
('doll', 'LE4A', '101', 'Basic Design'),
('doll', 'LE4A', '102', 'Graphics '),
('doll', 'LE4A', '103', 'History of Furniture Design And Architecture'),
('doll', 'LE4A', '104', 'Building Material-1'),
('doll', 'LE4A', '106', 'Workshop'),
('doll', 'LE4A', '107', 'Family Resource Management'),
('doll', 'LE4A', '108', 'Micro Economics'),
('doll', 'LE4A', '109', 'Basic Psychological Process '),
('doll', 'LE4A', '201', 'Design-II'),
('doll', 'LE4A', '202', 'Graphics-II'),
('doll', 'LE4A', '203', 'Building Construction-I'),
('doll', 'LE4A', '204', 'Building Material- II'),
('doll', 'LE4A', '205', 'Computer Auto CAD - 2D'),
('doll', 'LE4A', '206', 'Workshop- II'),
('doll', 'LE4A', '207', 'Hygiene and Physiology'),
('doll', 'LE4A', '208', 'Indian Economy'),
('doll', 'LE4A', '209', 'Psycho-Pathology '),
('doll', 'LE4A', '301', 'Design- III'),
('doll', 'LE4A', '302', 'Services-1'),
('doll', 'LE4A', '303', 'Building Construction-II'),
('doll', 'LE4A', '304', 'Building Material III'),
('doll', 'LE4A', '305', 'Computer Auto CAD - 3D'),
('doll', 'LE4A', '306', 'Workshop- III'),
('doll', 'LE4A', '307', 'Textile and Clothing'),
('doll', 'LE4A', '308', 'Economics'),
('doll', 'LE4A', '309', 'Psychology of Human Development'),
('doll', 'LE4A', '401', 'Design- IV'),
('doll', 'LE4A', '402', 'Services-II'),
('doll', 'LE4A', '403', 'Building Construction-III'),
('doll', 'LE4A', '404', 'Estimating Costing-I'),
('doll', 'LE4A', '405', 'Computer 3D MAX-1'),
('doll', 'LE4A', '406', 'Workshop- IV'),
('doll', 'LE4A', '407', 'Home Science- Child Development'),
('doll', 'LE4A', '408', 'Economics'),
('doll', 'LE4A', '409-A', 'Social Psychology'),
('doll', 'LE4A', '501', 'Design-V'),
('doll', 'LE4A', '502', 'Services-III'),
('doll', 'LE4A', '503', 'Professional Practices'),
('doll', 'LE4A', '504', 'Working Drawing'),
('doll', 'LE4A', '505', 'Computer 3D MAX-II'),
('doll', 'LE4A', '506', 'Workshop-V'),
('doll', 'LE4A', '507', 'Home Science- Food and Nutrition'),
('doll', 'LE4A', '508', 'Economics'),
('doll', 'LE4A', '509', 'Research Methodology'),
('doll', 'LE4A', '510', 'Comprehensive Viva'),
('doll', 'LE4A', '601', 'Design-VI'),
('doll', 'LE4A', '602', 'Landscape Design'),
('doll', 'LE4A', '603', 'Internship'),
('doll', 'LE4A', '604', 'Workshop- IV'),
('doll', 'LE4A', '605', 'Home Science'),
('doll', 'LE4A', '606', 'Economics'),
('doll', 'LE4A', '607', 'Counselling Psychology'),
('doll', 'LE4B', 'FT- 102', 'Fashion Merchandising'),
('doll', 'LE4B', 'FT- 104', 'History Of Fashion'),
('doll', 'LE4B', 'FT- 105', 'FT Workshop-I'),
('doll', 'LE4B', 'FT- 201', 'Advance pattern making-II'),
('doll', 'LE4B', 'FT- 202', 'Fashion Illustration'),
('doll', 'LE4B', 'FT- 204', 'Computer Graphics'),
('doll', 'LE4B', 'FT- 205', 'Project Based on Survey'),
('doll', 'LE4B', 'FT- 301', 'Advance Garment Construction'),
('doll', 'LE4B', 'FT- 302', 'Textile Finishing Process'),
('doll', 'LE4B', 'FT- 303', ' Art Appeciation'),
('doll', 'LE4B', 'FT- 304', 'Quality Control'),
('doll', 'LE4B', 'FT- 305', 'Presentation and Portfolio'),
('doll', 'LE4B', 'FT- 402', 'Computer Aided Design'),
('doll', 'LE4B', 'FT- 502', 'Computer Aided Design'),
('doll', 'LE4B', 'FT- 503', 'Fashion Costing'),
('doll', 'LE4B', 'FT- 504', 'Project'),
('doll', 'LE4B', 'FT- 601', 'Advance In Fashion Technology'),
('doll', 'LE4B', 'FT- 603', 'Computer Aided Design-II'),
('doll', 'LE4B', 'FT- 604', 'Project-II'),
('doll', 'LE4B', 'FT-101', 'Advance pattern making'),
('doll', 'LE4B', 'FT-103', 'Design Idea'),
('doll', 'LE4B', 'FT-203', 'Traditional Indian Textile'),
('doll', 'LE4B', 'FT-401', 'Advance Garment Construction-I'),
('doll', 'LE4B', 'FT-404', 'Project Based On Internship in Fashion House'),
('doll', 'LE4B', 'FT-501', 'Sourcing Management'),
('doll', 'LE4B', 'FT-602', 'Enterprenureship'),
('solang', 'LN1A', 'FC-2018/01', 'three month certification Course'),
('solang', 'LN1B', 'GC-2018/02', 'three month certification Course'),
('solang', 'LN5A', '1008', 'M.A. Functional HIndi Translation and Literature'),
('solang', 'LN5C', '1602', 'Sanskrit Jyotish'),
('solang', 'LN5D', '1006', 'M.A. English Literature'),
('solang', 'LN5E', '1027', 'M.A. Urdu Literature'),
('solang', 'LN8E', '1222', 'M.Phil. English Literature'),
('solang', 'LN8H', '1221', 'M.Phil. Hindi Literature'),
('solang', 'LN8S', '1331', 'M.Phil. Sanskrit Lirature'),
('solang', 'LN8U', '2122', 'M.Phil. Urdu Literature'),
('ietdavv', 'ME4F', 'AMR2C1', 'Applied Mathematics-II'),
('ietdavv', 'ME4F', 'APR2C2', 'Applied Physics'),
('ietdavv', 'ME4F', 'EIR2C4', 'Electrical Engineering'),
('ietdavv', 'ME4F', 'MER2C3', 'Engineering Drawing'),
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
('imsdavv', 'MS5A', 'FT 316 F', 'Financial Statement Analysis and Valuation'),
('imsdavv', 'MS5A', 'FT 317 F ', 'Merger Acquisition and Corporate Restructuring'),
('imsdavv', 'MS5A', 'MM 107 C ', 'IT for Business Applications'),
('imsdavv', 'MS5B', 'DM 301 C', 'Managerial Economics'),
('imsdavv', 'MS5B', 'DM 302 E', 'Project Management'),
('imsdavv', 'MS5B', 'DM 303 C', 'Healthcare Services in Disaster Management'),
('imsdavv', 'MS5B', 'DM 304 C', 'Risk Disaster & Vulnerability hazard assessment '),
('imsdavv', 'MS5B', 'DM 305 C', 'Industrial Safety & Health Management'),
('imsdavv', 'MS5B', 'DM 306 E', 'Insurance & Risk Management'),
('imsdavv', 'MS5B', 'DM 307 E', 'Social & Industrial Psychology'),
('imsdavv', 'MS5B', 'DM 308 E', 'Environ. Sustainability & Climate Change'),
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
('imsdavv', 'MS5D', 'MM 101 C', 'Fundamental Of Management'),
('imsdavv', 'MS5D', 'MM 102 C ', 'Quantitative Methods'),
('imsdavv', 'MS5D', 'MM 103 C ', 'Organisational Behaviour'),
('imsdavv', 'MS5D', 'MM 104 C ', 'Business Accounting'),
('imsdavv', 'MS5D', 'MM 105 C ', 'Marketing Management'),
('imsdavv', 'MS5D', 'MM 106 C ', 'Business Ethics'),
('imsdavv', 'MS5D', 'MM 107 C ', 'IT for Business Applications'),
('imsdavv', 'MS5D', 'MM 108 C ', 'Business Communication'),
('imsdavv', 'MS5D', 'MM 301 C ', 'Data Analytics'),
('imsdavv', 'MS5D', 'MM 302 C ', 'B2B Marketing'),
('imsdavv', 'MS5D', 'MM 303 C ', 'Retailing'),
('imsdavv', 'MS5D', 'MM 304 C ', 'Product Management'),
('imsdavv', 'MS5D', 'MM 305E', 'Brand Management'),
('imsdavv', 'MS5D', 'MM 306 E', 'Public Relationship and Corporate Communication'),
('imsdavv', 'MS5D', 'MM 307 E', 'Customer Relationship Management'),
('imsdavv', 'MS5D', 'MM 310 E ', 'Social Marketing'),
('imsdavv', 'MS5E', 'HR  103 C ', 'Business Accounting'),
('imsdavv', 'MS5E', 'HR 101 C ', 'Fundamental Of Management'),
('imsdavv', 'MS5E', 'HR 102 C', 'Quantitative Methods'),
('imsdavv', 'MS5E', 'HR 104 C ', 'IT for Business Application'),
('imsdavv', 'MS5E', 'HR 105 C ', 'Business Communication'),
('imsdavv', 'MS5E', 'HR 106 C ', 'Business Ethics'),
('imsdavv', 'MS5E', 'HR 107 C ', 'Organisational Behaviour'),
('imsdavv', 'MS5E', 'HR 108 C ', 'H.R.M.'),
('imsdavv', 'MS5E', 'HR 301 C ', 'Social and Industrial Psychology'),
('imsdavv', 'MS5E', 'HR 302 C', 'Labour Law-II'),
('imsdavv', 'MS5E', 'HR 303 C', 'Manpower Planning,  Recruitment & Selection'),
('imsdavv', 'MS5E', 'HR 304 C ', 'Human Resource Information System'),
('imsdavv', 'MS5E', 'HR 306 E ', 'Training and Development'),
('imsdavv', 'MS5E', 'HR 307 E', 'Managerial Counseling'),
('imsdavv', 'MS5E', 'HR 309 E', 'Operations Management'),
('imsdavv', 'MS5E', 'HR 310 E', 'Corporate Governance'),
('imsdavv', 'MS5F', 'MB - 301', 'J2EE Programming'),
('imsdavv', 'MS5F', 'MB - 302', 'Common Architecture in  JAVA'),
('imsdavv', 'MS5F', 'MB - 305', 'Digital Marketing'),
('imsdavv', 'MS5F', 'MB - 306', 'Software engineering and Project Management'),
('imsdavv', 'MS5F', 'MB - 307 ', 'Search Engine Optimization'),
('imsdavv', 'MS5F', 'MB - 308', 'e-Commerce Application Development using PHP'),
('imsdavv', 'MS5F', 'MB - 309 ', 'Data Analytics'),
('imsdavv', 'MS5F', 'MB - 310', ' Human Resource management'),
('imsdavv', 'MS5F', 'MB 101', 'Fundamentals of Management '),
('imsdavv', 'MS5F', 'MB 102', 'Business Accounting'),
('imsdavv', 'MS5F', 'MB 103 ', 'IT for Business Application '),
('imsdavv', 'MS5F', 'MB 104', 'Business Ethics & Management By Indian Values'),
('imsdavv', 'MS5F', 'MB 105 ', 'Quantitative Methods  '),
('imsdavv', 'MS5F', 'MB 106 ', 'Organisational Behaviour'),
('imsdavv', 'MS5F', 'MB 107 ', 'Business Communication '),
('imsdavv', 'MS5F', 'MB 108 ', 'Web Design and Animation'),
('imsdavv', 'MS5G', 'MH- 101 2Y', 'Fundamentals of Management'),
('imsdavv', 'MS5G', 'MH- 102 2Y', 'Organization Behaviour'),
('imsdavv', 'MS5G', 'MH- 103 2Y', 'Business Accounting'),
('imsdavv', 'MS5G', 'MH- 104 2Y', 'Business Communication'),
('imsdavv', 'MS5G', 'MH- 105 2Y', 'IT for Business Application'),
('imsdavv', 'MS5G', 'MH- 106 2Y', 'Quantitative Methods'),
('imsdavv', 'MS5G', 'MH- 302 2Y', 'Project Management in Healthcare'),
('imsdavv', 'MS5G', 'MH- 303 2Y', 'Legislation for Health and Hospitals'),
('imsdavv', 'MS5G', 'MH- 310 2Y', 'Business Process Re-Engineering'),
('imsdavv', 'MS5G', 'MH- 312 2Y', 'Integrated Marketing Communication'),
('imsdavv', 'MS5G', 'MH-107 2Y', 'Hospital Administration'),
('imsdavv', 'MS5G', 'MH-108  2Y', 'Business Ethics & management By Indian Values'),
('imsdavv', 'MS5G', 'MH-301  2Y', 'Operations Management in Healthcare'),
('imsdavv', 'MS5G', 'MH-304  2Y', 'Health Administration'),
('imsdavv', 'MS5G', 'MH-309 2Y', 'Quality Accreditation of Healthcare Organization'),
('imsdavv', 'MS5G', 'MH-311  2Y', 'Marketing of Hospital Services'),
('imsdavv', 'MS6A', 'BE 502', 'Web Designing and Animation Tools'),
('imsdavv', 'MS6A', 'BEC 101', 'Fundamental of Computers and Programming'),
('imsdavv', 'MS6A', 'BEC 102', 'Fundamentals of e-Commerce and m-Commerce'),
('imsdavv', 'MS6A', 'BEC 103 ', 'Office Automation'),
('imsdavv', 'MS6A', 'BEC 104 ', 'Basic Electronics'),
('imsdavv', 'MS6A', 'BEC 105', 'Fundamental of Management'),
('imsdavv', 'MS6A', 'BEC 106 ', 'Business Mathematics'),
('imsdavv', 'MS6A', 'BEC 107 ', 'Hindi'),
('imsdavv', 'MS6A', 'BEC 301', 'System Analysis and Design'),
('imsdavv', 'MS6A', 'BEC 302 ', 'IT Environment'),
('imsdavv', 'MS6A', 'BEC 303', 'Object Oriented Programming using C  '),
('imsdavv', 'MS6A', 'BEC 304 ', 'Environmental Sustainability and Climate Change Mitigation'),
('imsdavv', 'MS6A', 'BEC 305', 'Quantitative Techniques'),
('imsdavv', 'MS6A', 'BEC 306', 'Cost and Management Accounting'),
('imsdavv', 'MS6A', 'BEC 307 ', 'Business Communication'),
('imsdavv', 'MS6A', 'BEC 501 ', 'Computer Graphics'),
('imsdavv', 'MS6A', 'BEC 503', 'Basics of Data Mining and Data Warehousing'),
('imsdavv', 'MS6A', 'BEC 504', 'e-Logistics and e-Supply Chain Management'),
('imsdavv', 'MS6A', 'BEC 505 ', 'Business Environment'),
('imsdavv', 'MS6A', 'BEC 506', 'Human Resource Management'),
('imsdavv', 'MS6A', 'BEC 507', 'Numerical Methods'),
('imsdavv', 'MS6A', 'ME 701 C ', 'Introduction to UNIX & LUNIX'),
('imsdavv', 'MS6A', 'ME 702 C ', 'Internet & Networks Security'),
('imsdavv', 'MS6A', 'ME 703 C ', 'OOAD Using UML'),
('imsdavv', 'MS6A', 'ME 704 C', 'Internet Scripting Lang.'),
('imsdavv', 'MS6A', 'ME 705 C', 'Advance in e-Commerce'),
('imsdavv', 'MS6A', 'ME 706 C ', 'Professional Communication & Negotiation'),
('imsdavv', 'MS6A', 'ME 707 C', 'Entrepreneurship'),
('imsdavv', 'MS6A', 'ME 708 C ', 'Search Engine Optimiz.'),
('imsdavv', 'MS6A', 'ME 901 E', 'Data Analytics'),
('imsdavv', 'MS6A', 'ME 902 E', 'Supply Chain Management'),
('imsdavv', 'MS6A', 'ME 903 E ', 'Database Framework using hibernate'),
('imsdavv', 'MS6A', 'ME 904 E ', 'Mobile Application Development'),
('imsdavv', 'MS6A', 'ME 907 C', 'Digital Marketing'),
('imsdavv', 'MS6A', 'ME 908 C', 'e-Commerce Application'),
('imsdavv', 'MS6A', 'ME 909 C ', 'Cyber Law & Business Regulatory frame work'),
('imsdavv', 'MS6A', 'ME 910 C', 'Strategic Management'),
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
('imsdavv', 'MS6B', 'MH- 703 In.', 'Operations Research in Healthcare'),
('imsdavv', 'MS6B', 'MH- 908  In.', 'Logistics and Supply Chain Management'),
('imsdavv', 'MS6B', 'MH-701  In.', 'Advanced hospital planning'),
('imsdavv', 'MS6B', 'MH-702  In.', 'MIS in Healthcare'),
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
('imsdavv', 'MS6B', 'MH-909  In.', 'Social and Industrial Psychology'),
('imsdavv', 'MS8X', 'MPM102', 'RESEARCH METHODOLOGY'),
('imsdavv', 'MS8X', 'MPM103', 'COMPUTER APPLICATIONS'),
('imsdavv', 'MS8X', 'MPM104', 'MANAGEMENT THEORY, PRACTICE AND RESEARCH ISSUES'),
('imsdavv', 'MS8X', 'MPM105', 'BEHAVIORAL and PSYCHOLOGICAL ISSUES'),
('imsdavv', 'MS8X', 'MPM1O1', 'REVIEW OF LITERATURE'),
('imsdavv', 'MS8X', 'MPM201', 'SEMINAR'),
('imsdavv', 'MS8X', 'MPM202', 'TERM PAPER/ ASSIGNMENT'),
('imsdavv', 'MS8X', 'MPM203', 'DISSERTATION/ PROJECT'),
('imsdavv', 'MS8X', 'MPM301', 'FINAL DISSERTATION/ PROJECT PRESENTATION'),
('somath', 'MT5A', 'M101', 'Differential Equations I'),
('somath', 'MT5A', 'M111', ' Field Theory'),
('somath', 'MT5A', 'M112', 'Real Analysis I'),
('somath', 'MT5A', 'M113', 'Topology I'),
('somath', 'MT5A', 'M114', 'Complex Analysis I'),
('somath', 'MT5A', 'M201', 'Differential Equations II'),
('somath', 'MT5A', 'M211', 'Advanced Abstract Algebra'),
('somath', 'MT5A', 'M212', 'Real Analysis II'),
('somath', 'MT5A', 'M213', 'Topology II'),
('somath', 'MT5A', 'M214', 'Complex Analysis II'),
('somath', 'MT5A', 'M301', 'Theory of Linear operators I'),
('somath', 'MT5A', 'M302', 'Linear Programming I'),
('somath', 'MT5A', 'M305', 'Mathematical Modelling I'),
('somath', 'MT5A', 'M311', 'Integration Theory'),
('somath', 'MT5A', 'M312', 'Functional Analysis'),
('somath', 'MT5A', 'M313', 'Partial Differential Equations'),
('somath', 'MT5A', 'M401', 'Theory of Linear operators II'),
('somath', 'MT5A', 'M402', 'Linear Programming II'),
('somath', 'MT5A', 'M403', 'Homotopy Theory'),
('somath', 'MT5A', 'M404', 'Topics in Ring Theory'),
('somath', 'MT5A', 'M405', 'Mathematical Modelling II'),
('somath', 'MT5A', 'M411', 'Mechanics'),
('somath', 'MT8X', 'MP101', 'Linear Algebra over Commutative Rings'),
('somath', 'MT8X', 'MP102', 'Homology Theory'),
('somath', 'MT8X', 'MP111', 'Review of Literature'),
('somath', 'MT8X', 'MP112', 'Research Methodology'),
('somath', 'MT8X', 'MP113', 'Computer Applications'),
('somath', 'MT9Z', 'PH111', 'Review of Literature'),
('somath', 'MT9Z', 'PH112', 'Research Methodology'),
('somath', 'MT9Z', 'PH113', 'Computer Applications'),
('somath', 'MT9Z', 'PH114', 'Advanced course in Mathematics'),
('sopedu', 'PE4A', 'BPES', 'Bachelor of Physical Education'),
('sopedu', 'PE4A', 'P-01', 'Athletics'),
('sopedu', 'PE4A', 'P-02', 'Gymnastics'),
('sopedu', 'PE4A', 'P-03', 'Yoga'),
('sopedu', 'PE4A', 'P-04', 'Conditioning and Match Practice'),
('sopedu', 'PE4A', 'P-05', 'Athletics - II'),
('sopedu', 'PE4A', 'P-06', 'Gymnastics - II'),
('sopedu', 'PE4A', 'P-07', 'Yoga - II'),
('sopedu', 'PE4A', 'P-09', 'Volleyball'),
('sopedu', 'PE4A', 'P-10', 'Weight Lifting and Training'),
('sopedu', 'PE4A', 'P-11/P-15', 'Teaching Practice'),
('sopedu', 'PE4A', 'P-13', 'Badminton/ Hockey'),
('sopedu', 'PE4A', 'P-14', 'Football/ Cricket'),
('sopedu', 'PE4A', 'P-17', 'Table Tennis'),
('sopedu', 'PE4A', 'P-18', 'Kabbadi'),
('sopedu', 'PE4A', 'P-19', 'Sports Specialization (Practical Skill)- CRI/BAD/GYM/ATH/HOC/FB/KK'),
('sopedu', 'PE4A', 'P-21', 'Kho-Kho'),
('sopedu', 'PE4A', 'P-22', 'Tennis'),
('sopedu', 'PE4A', 'P-23', 'Sports Specialization (Coaching Lesson) - CRI/BAD/GYM/ATH/HOC/FB/KK'),
('sopedu', 'PE4A', 'T-01', 'Basic and Systemic Anatomy - I'),
('sopedu', 'PE4A', 'T-02', 'Principles of Physical Education'),
('sopedu', 'PE4A', 'T-03', 'English - I'),
('sopedu', 'PE4A', 'T-04', 'Basic and Systemic Anatomy - II'),
('sopedu', 'PE4A', 'T-05', 'History of Physical Education'),
('sopedu', 'PE4A', 'T-06', 'English - II'),
('sopedu', 'PE4A', 'T-07', 'Physiology and Physiology of Exercise'),
('sopedu', 'PE4A', 'T-08', 'Educational Psychology'),
('sopedu', 'PE4A', 'T-09', 'Methods in Physical Education'),
('sopedu', 'PE4A', 'T-10', 'Kinesiology'),
('sopedu', 'PE4A', 'T-11', 'Basics of Sports Training'),
('sopedu', 'PE4A', 'T-12', 'Health Education'),
('sopedu', 'PE4A', 'T-13', 'Management of Physical Education'),
('sopedu', 'PE4A', 'T-14', 'Gym Management and Fitness Training'),
('sopedu', 'PE4A', 'T-15/T-18', 'Sports Specialization- CRI/BAD/GYM/ATH/HOC/FB/KK'),
('sopedu', 'PE4A', 'T-16', 'Test and Measurement in Physical Education'),
('sopedu', 'PE4A', 'T-17', 'Correctives and Rehabilitation in Physical Education'),
('sopedu', 'PE5A', 'MPEd 101', 'Research Process in Physical Education and Sports Sciences'),
('sopedu', 'PE5A', 'MPEd 102', 'Physiology of Exercise'),
('sopedu', 'PE5A', 'MPEd 103', 'Test, Measurement and Evaluation in Physical Education'),
('sopedu', 'PE5A', 'MPEd 104', 'Sports Journalism and Mass Media'),
('sopedu', 'PE5A', 'MPEd 201', 'Applied Statistics in Physical Education and Sports'),
('sopedu', 'PE5A', 'MPEd 202', 'Sports Biomechanics and Kinesiology'),
('sopedu', 'PE5A', 'MPEd 203', 'Athletic Care and Rehabilitation'),
('sopedu', 'PE5A', 'MPEd 204', 'Sports Technology'),
('sopedu', 'PE5A', 'MPEd 301', 'Scientific Principles of Sports Training'),
('sopedu', 'PE5A', 'MPEd 302', 'Sports Medicine'),
('sopedu', 'PE5A', 'MPEd 303', 'Physical Fitness and Wellness'),
('sopedu', 'PE5A', 'MPEd 304/MPEd 404', 'Sports Specialization- CRI/BAD/GYM/ATH/HOC/FB/KK'),
('sopedu', 'PE5A', 'MPEd 401', 'Sports Psychology'),
('sopedu', 'PE5A', 'MPEd 402', 'Health Education and Sports Nutrition'),
('sopedu', 'PE5A', 'MPEd 403', 'Sports Management OR Dissertation'),
('sopedu', 'PE5A', 'MPPC 101', 'Marking of Playfields'),
('sopedu', 'PE5A', 'MPPC 102/MPPC 202/MPPC 303/MPP', 'Conditioning and Match Practice'),
('sopedu', 'PE5A', 'MPPC 201', 'Officiating and Coaching'),
('sopedu', 'PE5A', 'MPPC 301', 'Internship and Project'),
('sopedu', 'PE5A', 'MPPC 302', 'Sports Specialization (Practical Skills)- CRI/BAD/GYM/ATH/HOC/FB/KK'),
('sopedu', 'PE5A', 'MPPC 401', 'Theory Teaching Lessons'),
('sopedu', 'PE5A', 'MPPC 402', 'Sports Specialization  (Coaching Lessons)'),
('sopedu', 'PE8X', 'PE8X', 'M.PHIL'),
('sopedu', 'PE9Z', 'Ph.D. T-01', 'Research Methodology'),
('sopedu', 'PE9Z', 'Ph.D. T-02', 'Review of Published Research in the relevant field '),
('sopedu', 'PE9Z', 'Ph.D. T-03', 'Computer Applications'),
('sopedu', 'PE9Z', 'Ph.D. T-04', 'Advance course in Physical Education '),
('sophy', 'PH5A', 'PHY-501', 'Classical Mechanics '),
('sophy', 'PH5A', 'PHY-502', 'Statistical Mechanics'),
('sophy', 'PH5A', 'PHY-503', 'Mathematical Physics'),
('sophy', 'PH5A', 'PHY-504', 'Solid State Physics-I'),
('sophy', 'PH5A', 'PHY-505', 'Quantum Mechanics-I'),
('sophy', 'PH5A', 'PHY-506', 'Classical Electrodynamics-I'),
('sophy', 'PH5A', 'PHY-507', 'Electronics'),
('sophy', 'PH5A', 'PHY-508', 'Atomic and Molecular Physics'),
('sophy', 'PH5A', 'PHY-509', 'Laboratory Course-I (Electronics)'),
('sophy', 'PH5A', 'PHY-510', 'Laboratory Course-II (Optics)'),
('sophy', 'PH5A', 'PHY-511', 'CBSC-I Numerical Techniques using C++'),
('sophy', 'PH5A', 'PHY-521', 'Classical Electrodynamics-II'),
('sophy', 'PH5A', 'PHY-522', 'Laboratory Course-IV(Microprocessor)/Research Project Work'),
('sophy', 'PH5A', 'PHY-523', 'Quantum Mechanics-II'),
('sophy', 'PH5A', 'PHY-524', 'Digital Electronics and Microprocessor'),
('sophy', 'PH5A', 'PHY-525', 'Solid State Physics-II'),
('sophy', 'PH5A', 'PHY-526', 'Laser Physics'),
('sophy', 'PH5A', 'PHY-527', 'Nuclear and Particle Physics'),
('sophy', 'PH5A', 'PHY-528', 'Plasma Physics'),
('sophy', 'PH5A', 'PHY-529', 'CBCS-II Numerical Techniques using C++'),
('sophy', 'PH5A', 'PHY-530', 'Material Science'),
('sophy', 'PH5A', 'PHY-531', 'Laboratory Course-III (Computer oriented numerical methods)/Research Project Work'),
('sophy', 'PH5A', 'PHY-532', 'Optoelectronics'),
('sophy', 'PH5A', 'PHY-534', 'Nanomaterials'),
('sophy', 'PH5A', 'PHY-536', 'Transducers and  characterization techniques'),
('sophy', 'PH7A', 'LA 701', 'Applied Optics'),
('sophy', 'PH7A', 'LA 702', 'High Voltage Engineering For Lasers'),
('sophy', 'PH7A', 'LA 703', 'Laser Physics'),
('sophy', 'PH7A', 'LA 704', 'Laser Systems and Applications'),
('sophy', 'PH7A', 'LA 705', 'Fiber Optics'),
('sophy', 'PH7A', 'LA 706', 'Semiconductor Lasers'),
('sophy', 'PH7A', 'LA 707', 'Laser Applications'),
('sophy', 'PH7A', 'LA 708', 'Free Electron Lasers'),
('sophy', 'PH7A', 'LA 709', 'Practicals-I'),
('sophy', 'PH7A', 'LA 710', 'Practicals-II'),
('sophy', 'PH7A', 'LA 712', 'Optical Communication and Optical Switching'),
('sophy', 'PH7A', 'LA 721', 'Project (Part I)'),
('sophy', 'PH7A', 'LA 722', 'Project (Part II)'),
('sophy', 'PH7A', 'LA 723', 'Numerical Techniques Based On C++'),
('sophy', 'PH7A', 'LA 724', 'Seminar'),
('sophy', 'PH8X', 'PHY-801', 'Review of Related Literature'),
('sophy', 'PH8X', 'PHY-802', 'Seminar'),
('sophy', 'PH8X', 'PHY-803', 'Research Methodology'),
('sophy', 'PH8X', 'PHY-804', 'Term Paper/Assignment'),
('sophy', 'PH8X', 'PHY-805', 'Computer Application'),
('sophy', 'PH8X', 'PHY-806', 'Dissertation /Project'),
('sophy', 'PH8X', 'PHY-807', 'Subject Specific -I'),
('sophy', 'PH8X', 'PHY-808', 'Comprehensive Viva Voce'),
('sophy', 'PH8X', 'PHY-809', 'Subject Specific -II'),
('sophy', 'PH8X', 'PHY-811', 'Comprehensive Viva'),
('iipsdavv', 'PS4A', 'IB - 101', 'Financial Accounting I'),
('iipsdavv', 'PS4A', 'IB-102', 'Business Mathematics'),
('iipsdavv', 'PS4A', 'IB-103A', 'Business Communication and Personality Development'),
('iipsdavv', 'PS4A', 'IB-105', 'Micro Economics'),
('iipsdavv', 'PS4A', 'IB-105A', 'Principles and Practices of Management'),
('iipsdavv', 'PS4A', 'IB-107', 'Computer Fundamentals'),
('iipsdavv', 'PS4A', 'IB-201', 'Financial Accounting II'),
('iipsdavv', 'PS4A', 'IB-202', 'Business Statistics'),
('iipsdavv', 'PS4A', 'IB-203', 'Business Law'),
('iipsdavv', 'PS4A', 'IB-203C', 'Hindi'),
('iipsdavv', 'PS4A', 'IB-205', 'Organizational Behaviour'),
('iipsdavv', 'PS4A', 'IB-206A', 'Programming With C++'),
('iipsdavv', 'PS4A', 'IB-301', 'Corporate Accounting'),
('iipsdavv', 'PS4A', 'IB-302', 'Cost Accounting'),
('iipsdavv', 'PS4A', 'IB-304A', 'Marketing Management'),
('iipsdavv', 'PS4A', 'IB-310A', 'RDBMS'),
('iipsdavv', 'PS4A', 'IB-311', 'Indirect Taxes'),
('iipsdavv', 'PS4A', 'IB-312', 'Operation Research'),
('iipsdavv', 'PS4A', 'IB-401', 'Income Tax'),
('iipsdavv', 'PS4A', 'IB-403', 'Management Accounting'),
('iipsdavv', 'PS4A', 'IB-404', 'Company Law '),
('iipsdavv', 'PS4A', 'IB-408', 'Entrepreneurship '),
('iipsdavv', 'PS4A', 'IB-411', 'Accounting Information System and Packages '),
('iipsdavv', 'PS4A', 'IB-412', 'Human Resource Management'),
('iipsdavv', 'PS4A', 'IB-501A', 'Advanced Accounting'),
('iipsdavv', 'PS4A', 'IB-502A', 'Indian Financial System'),
('iipsdavv', 'PS4A', 'IB-503A', 'Secretarial Practice '),
('iipsdavv', 'PS4A', 'IB-504A', 'E-Business '),
('iipsdavv', 'PS4A', 'IB-505', 'Banking and Insurance'),
('iipsdavv', 'PS4A', 'IB-510', 'Macro Economics '),
('iipsdavv', 'PS4A', 'IB-601A', 'Corporate Tax Planning '),
('iipsdavv', 'PS4A', 'IB-602', 'Auditing '),
('iipsdavv', 'PS4A', 'IB-603A', 'Public Finance and Treasury '),
('iipsdavv', 'PS4A', 'IB-605', 'Financial Management '),
('iipsdavv', 'PS4A', 'IB-610', 'International Business '),
('iipsdavv', 'PS4A', 'IB-611', 'Management Information System '),
('iipsdavv', 'PS5A', 'FT-101', 'PRINCIPLES and PRACTICES OF MANAGEMENT'),
('iipsdavv', 'PS5A', 'FT-102C', 'BUSINESS ACCOUNTING'),
('iipsdavv', 'PS5A', 'FT-104C', 'IT FOR MANAGERS-I'),
('iipsdavv', 'PS5A', 'FT-105', 'HUMAN RESOURCE MANAGEMENT'),
('iipsdavv', 'PS5A', 'FT-107D', 'MANAGERIAL ECONOMICS'),
('iipsdavv', 'PS5A', 'FT-108', 'COMPREHENSIVE VIVA'),
('iipsdavv', 'PS5A', 'FT-112A', 'BUSINESS LAWS'),
('iipsdavv', 'PS5A', 'FT-113', 'BUSINESS MATHEMATICS and STATISTICS'),
('iipsdavv', 'PS5A', 'FT-114', 'SOFT SKILLS FOR MANAGERS'),
('iipsdavv', 'PS5A', 'FT-115', 'SEMINAR'),
('iipsdavv', 'PS5B', 'APR-1***', 'Accounting and Finance for Managers'),
('iipsdavv', 'PS5B', 'APR-101B', 'Principles of Advertising Management'),
('iipsdavv', 'PS5B', 'APR-102', 'Principles of Marketing Management'),
('iipsdavv', 'PS5B', 'APR-106', 'Business Statistics and Quantitative Techniques'),
('iipsdavv', 'PS5B', 'APR-109', 'Computer Applications'),
('iipsdavv', 'PS5B', 'APR-110', 'Organizational Behavior'),
('iipsdavv', 'PS5B', 'APR-111', 'Accounting and Finance for Managers-I'),
('iipsdavv', 'PS5B', 'APR-112', 'Integrated Marketing Communications'),
('iipsdavv', 'PS5B', 'APR-113', 'Fundamentals of Management'),
('iipsdavv', 'PS5B', 'APR-2***', 'Advertising and PR Research'),
('iipsdavv', 'PS5B', 'APR-201', 'Media Planning'),
('iipsdavv', 'PS5B', 'APR-201A', 'Public Relations'),
('iipsdavv', 'PS5B', 'APR-202', 'Marketing Research'),
('iipsdavv', 'PS5B', 'APR-203', 'Creative Writing'),
('iipsdavv', 'PS5B', 'APR-204', 'Management of Ad Agency'),
('iipsdavv', 'PS5B', 'APR-205', 'Consumer Behavior'),
('iipsdavv', 'PS5B', 'APR-206A', 'Business Communication and Personality Development'),
('iipsdavv', 'PS5B', 'APR-209', 'Mass Communication'),
('iipsdavv', 'PS5B', 'APR-210', 'Enterpreunership'),
('iipsdavv', 'PS5B', 'APR-211', 'Accounting and Finance for Managers-II'),
('iipsdavv', 'PS5B', 'APR-212', 'Client Servicing and Account Planning'),
('iipsdavv', 'PS5B', 'APR-3***', 'Dissertation'),
('iipsdavv', 'PS5B', 'APR-301B', 'Rural Marketing and Communication'),
('iipsdavv', 'PS5B', 'APR-301C', 'Corporate Communication'),
('iipsdavv', 'PS5B', 'APR-302', 'Commercial Designing'),
('iipsdavv', 'PS5B', 'APR-302B', 'Consumer Behavior'),
('iipsdavv', 'PS5B', 'APR-303', 'Audio Visual Production'),
('iipsdavv', 'PS5B', 'APR-305', 'Marketing Strategies'),
('iipsdavv', 'PS5B', 'APR-306B', 'Computer Graphics'),
('iipsdavv', 'PS5B', 'APR-308', 'Service Marketing'),
('iipsdavv', 'PS5B', 'APR-310', 'Mass Communication'),
('iipsdavv', 'PS5B', 'APR-311', 'Customer Relationship Management'),
('iipsdavv', 'PS5B', 'APR-312', 'Decision Making Skills'),
('iipsdavv', 'PS5B', 'APR-314', 'Major Research Project'),
('iipsdavv', 'PS5B', 'APR-4***', 'Digital Marketing'),
('iipsdavv', 'PS5B', 'APR-401', 'Corporate Communication'),
('iipsdavv', 'PS5B', 'APR-401A', 'Rural and Retail Marketing'),
('iipsdavv', 'PS5B', 'APR-401B', 'Accounting and Finance for Managers'),
('iipsdavv', 'PS5B', 'APR-402A', 'Digital Advertising and Marketing'),
('iipsdavv', 'PS5B', 'APR-402B', 'Marketing Strategies'),
('iipsdavv', 'PS5B', 'APR-403', 'Direct Marketing and Event Management'),
('iipsdavv', 'PS5B', 'APR-404', 'Client Servicing and Account Planning'),
('iipsdavv', 'PS5B', 'APR-405C', 'Major Research Project'),
('iipsdavv', 'PS5B', 'APR-408', 'Brand Management'),
('iipsdavv', 'PS5B', 'APR-409A', 'Retail Marketing'),
('iipsdavv', 'PS5B', 'APR-411', 'Media Planning'),
('iipsdavv', 'PS5B', 'APR-412', 'Sales Promotion'),
('iipsdavv', 'PS5B', 'APR-413', 'Decision Making Skills'),
('iipsdavv', 'PS5B', 'APR-415', 'Audio Visual Production'),
('iipsdavv', 'PS5C', 'TA-101', 'Fundamental of Tourism'),
('iipsdavv', 'PS5C', 'TA-102B', 'Fundamental of Management'),
('iipsdavv', 'PS5C', 'TA-103C', 'Quantitative and Statistical Tech.'),
('iipsdavv', 'PS5C', 'TA-104B', 'Geography of Indian Tourism'),
('iipsdavv', 'PS5C', 'TA-106C', 'Principles of Tourism Marketing'),
('iipsdavv', 'PS5C', 'TA-109B', 'Fundamentals of Computer Application'),
('iipsdavv', 'PS5C', 'TA-112B', 'Accounting and Finance for Tourism'),
('iipsdavv', 'PS5C', 'TA-201A', 'French-1'),
('iipsdavv', 'PS5C', 'TA-205', 'Tourism Product of India'),
('iipsdavv', 'PS5C', 'TA-211', 'Research Methedology'),
('iipsdavv', 'PS5C', 'TA-213', 'Business Communication and Personality Development'),
('iipsdavv', 'PS5C', 'TA-214', 'Geography of International Tourism '),
('iipsdavv', 'PS5C', 'TA-215', 'Travel Agency Management'),
('iipsdavv', 'PS5C', 'TA-215A', 'Consumer Behavior'),
('iipsdavv', 'PS5C', 'TA-301A', 'French-II'),
('iipsdavv', 'PS5C', 'TA-304', 'International Tickiting'),
('iipsdavv', 'PS5C', 'TA-307', 'Hotel Operation And Management'),
('iipsdavv', 'PS5C', 'TA-313', 'Airline Management'),
('iipsdavv', 'PS5C', 'TA-314', 'Organizational Behavior'),
('iipsdavv', 'PS5C', 'TA-315', 'Service Marketing Strategies'),
('iipsdavv', 'PS5C', 'TA-316', 'Cargo Management'),
('iipsdavv', 'PS5C', 'TA-401', 'French-III'),
('iipsdavv', 'PS5C', 'TA-404', 'Foreign Exchange Management'),
('iipsdavv', 'PS5C', 'TA-405B', 'MRP'),
('iipsdavv', 'PS5C', 'TA-408', 'Entrepreneueship'),
('iipsdavv', 'PS5C', 'TA-410', 'Conference ,Convention and Event Management'),
('iipsdavv', 'PS5C', 'TA-411', 'E-commerce for Tourism'),
('iipsdavv', 'PS5C', 'TA-412', 'Decision Making Skills'),
('iipsdavv', 'PS5D', 'ES-101', 'Fundamentals of Entrepreneurship'),
('iipsdavv', 'PS5D', 'ES-102', 'Creativity and Innovation'),
('iipsdavv', 'PS5D', 'ES-103', 'Principles and Practice of Management and O.B.'),
('iipsdavv', 'PS5D', 'ES-104', 'Fundamentals of Finance'),
('iipsdavv', 'PS5D', 'ES-105', 'Human Resource Management'),
('iipsdavv', 'PS5D', 'ES-106', 'IT for Managers'),
('iipsdavv', 'PS5D', 'ES-107', 'Principles of Marketing Management '),
('iipsdavv', 'PS5D', 'ES-108', 'Comprehensive Viva'),
('iipsdavv', 'PS5D', 'ES-201', 'Social Entrepreneurship'),
('iipsdavv', 'PS5D', 'ES-202', 'Emerging Avenues for Entrepreneurs'),
('iipsdavv', 'PS5D', 'ES-203', 'Business Environment'),
('iipsdavv', 'PS5D', 'ES-204', 'Project Finance '),
('iipsdavv', 'PS5D', 'ES-205', 'Business Communication'),
('iipsdavv', 'PS5D', 'ES-206', 'Human Resource Development'),
('iipsdavv', 'PS5D', 'ES-207', 'Service Management Digital Marketing'),
('iipsdavv', 'PS5D', 'ES-208', 'Idea Generation and Business Proposal'),
('iipsdavv', 'PS5D', 'ES-209', 'Comprehensive Viva'),
('iipsdavv', 'PS5D', 'ES-301', 'Financing New Ventures and Business'),
('iipsdavv', 'PS5D', 'ES-302', 'Managing Startups Strategic Framework for SMEs'),
('iipsdavv', 'PS5D', 'ES-303', 'Introduction to Taxation'),
('iipsdavv', 'PS5D', 'ES-304', 'Contemporary Issues in Strategy'),
('iipsdavv', 'PS5D', 'ES-305', 'Production and Operation Management'),
('iipsdavv', 'PS5D', 'ES-306', 'E-Business'),
('iipsdavv', 'PS5D', 'ES-307', 'Rural and Industrial Marketing'),
('iipsdavv', 'PS5D', 'ES-308', 'Writing Business Plan'),
('iipsdavv', 'PS5D', 'ES-309', 'Comprehensive Viva'),
('iipsdavv', 'PS5D', 'ES-401', 'Legal Aspects of Business'),
('iipsdavv', 'PS5D', 'ES-402', 'Global Trends in Entrepreneurship'),
('iipsdavv', 'PS5D', 'ES-403', 'Business Ethics and Corporate Governance'),
('iipsdavv', 'PS5D', 'ES-404', 'International Business/EXIM Management'),
('iipsdavv', 'PS5D', 'ES-405', 'Issues in HR '),
('iipsdavv', 'PS5D', 'ES-406', 'Enterprise Resource Planning'),
('iipsdavv', 'PS5D', 'ES-407', 'Logistics and SCM'),
('iipsdavv', 'PS5D', 'ES-408', 'Business Startup Practicum/Incubation'),
('iipsdavv', 'PS5D', 'ES-409', 'Comprehensive Viva'),
('iipsdavv', 'PS6B', 'IT-1001B', 'FORMAL LANGUAGE THEORY'),
('iipsdavv', 'PS6B', 'IT-1001C', 'DATA MINING AND WAREHOUSING'),
('iipsdavv', 'PS6B', 'IT-1002A', 'PARALLEL PROCESSING'),
('iipsdavv', 'PS6B', 'IT-1002B', 'DESIGN PATTERNS'),
('iipsdavv', 'PS6B', 'IT-1003B', 'WIRELESS and MOBILE COMMUNICATION'),
('iipsdavv', 'PS6B', 'IT-1004A', 'INFORMATION TECHNOLOGY and PROJECT MANAGEMENT'),
('iipsdavv', 'PS6B', 'IT-1005B', 'PROJECT'),
('iipsdavv', 'PS6B', 'IT-1007', 'RESEARCH IN COMPUTING'),
('iipsdavv', 'PS6B', 'IT-1008', 'WIRELESS and MOBILE COMMUNICATION LAB'),
('iipsdavv', 'PS6B', 'IT-101', 'MATHEMATICS - I'),
('iipsdavv', 'PS6B', 'IT-101A', 'MATHEMATICS'),
('iipsdavv', 'PS6B', 'IT-102', 'STATISTICAL METHODS - I'),
('iipsdavv', 'PS6B', 'IT-103', 'PHYSICS-I'),
('iipsdavv', 'PS6B', 'IT-103A', 'PHYSICS'),
('iipsdavv', 'PS6B', 'IT-104', 'C PROGRAMMING'),
('iipsdavv', 'PS6B', 'IT-105', 'PC SOFTWARE'),
('iipsdavv', 'PS6B', 'IT-106C', 'COMMUNICATIVE ENGLISH'),
('iipsdavv', 'PS6B', 'IT-106D', 'COMMUNICATION SKILLS'),
('iipsdavv', 'PS6B', 'IT-107C', 'C PROGRAMMING LAB'),
('iipsdavv', 'PS6B', 'IT-107D', 'PC SOFTWARE LAB'),
('iipsdavv', 'PS6B', 'IT-1101', 'INDUSTRIAL PROJECT VIVA'),
('iipsdavv', 'PS6B', 'IT-1101A', 'INDUSTRIAL PROJECT VIVA'),
('iipsdavv', 'PS6B', 'IT-201', 'MATHEMATICS-II'),
('iipsdavv', 'PS6B', 'IT-201A', 'CHEMISTRY AND ENVIRONMENT SCIENCES'),
('iipsdavv', 'PS6B', 'IT-202', 'STATISTICAL METHODS - II'),
('iipsdavv', 'PS6B', 'IT-202A', 'PROBABILITY AND STATISTICAL METHODS'),
('iipsdavv', 'PS6B', 'IT-203', 'PHYSICS-II'),
('iipsdavv', 'PS6B', 'IT-203A', 'DIGITAL COMPUTER ORGANIZATION'),
('iipsdavv', 'PS6B', 'IT-204', 'BASIC ELECTRONICS'),
('iipsdavv', 'PS6B', 'IT-206B', 'PROGRAMMING WITH C++'),
('iipsdavv', 'PS6B', 'IT-207B', 'C++ PROGRAMMING LAB'),
('iipsdavv', 'PS6B', 'IT-209A', 'LAB-VIVA (COMPUTER)'),
('iipsdavv', 'PS6B', 'IT-210B', 'LAB-VIVA (ELECTRONICS)'),
('iipsdavv', 'PS6B', 'IT-210C', 'BASIC ELECTRONICS LAB'),
('iipsdavv', 'PS6B', 'IT-211', 'INTERPERSONAL COMMUNICATION'),
('iipsdavv', 'PS6B', 'IT-301', 'MATHEMATICS-III'),
('iipsdavv', 'PS6B', 'IT-301A', 'FRENCH'),
('iipsdavv', 'PS6B', 'IT-302B', 'DS WITH C++'),
('iipsdavv', 'PS6B', 'IT-304', 'DIGITAL ELECTRONICS'),
('iipsdavv', 'PS6B', 'IT-306', 'ENGINEERING DRAWING'),
('iipsdavv', 'PS6B', 'IT-307A', 'LAB-VIVA(COMPUTER)'),
('iipsdavv', 'PS6B', 'IT-307B', 'DS LAB'),
('iipsdavv', 'PS6B', 'IT-308C', 'LAB-VIVA(DIGITAL ELECTRONICS)'),
('iipsdavv', 'PS6B', 'IT-308D', 'DIGITAL ELEX.LAB'),
('iipsdavv', 'PS6B', 'IT-310', 'INTERNET TOOLS'),
('iipsdavv', 'PS6B', 'IT-311', 'LINEAR ALGEBRA'),
('iipsdavv', 'PS6B', 'IT-401', 'ACCOUNTING AND FINANCIAL MANAGEMENT - I'),
('iipsdavv', 'PS6B', 'IT-401A', 'PRINCIPLES AND PRACTICES OF MANAGEMENT'),
('iipsdavv', 'PS6B', 'IT-401B', 'IT ACT AND CYBER LAW'),
('iipsdavv', 'PS6B', 'IT-402', 'LINEAR ALGEBRA'),
('iipsdavv', 'PS6B', 'IT-402A', 'NUMERICAL ANALYSIS and DESIGN'),
('iipsdavv', 'PS6B', 'IT-403A', 'DATA BASE PROGRAMMING'),
('iipsdavv', 'PS6B', 'IT-403B', 'DATA BASE MANAGEMENT SYSTEM'),
('iipsdavv', 'PS6B', 'IT-404', 'DIGITAL COMPUTER ORGANISATION'),
('iipsdavv', 'PS6B', 'IT-405', 'UNIX'),
('iipsdavv', 'PS6B', 'IT-405A', 'UNIX OPERATING SYSTEM'),
('iipsdavv', 'PS6B', 'IT-406A', 'LAB VIVA'),
('iipsdavv', 'PS6B', 'IT-407B', 'DATA BASE MANAGEMENT SYSTEM LAB'),
('iipsdavv', 'PS6B', 'IT-407C', 'UNIX LAB'),
('iipsdavv', 'PS6B', 'IT-407D', 'UNIX OPERATING SYSTEM LAB'),
('iipsdavv', 'PS6B', 'IT-409', 'DATA AND COMPUTER COMMUNICATION'),
('iipsdavv', 'PS6B', 'IT-501A', 'ACCOUNTING AND FINANCIAL MANAGEMENT - II'),
('iipsdavv', 'PS6B', 'IT-501B', 'ACCOUNTING AND FINANCIAL MANAGEMENT'),
('iipsdavv', 'PS6B', 'IT-502A', 'MICROPROCESSOR AND ASSEMBLY LANGUAGE'),
('iipsdavv', 'PS6B', 'IT-503A', 'COMPUTER GRAPHICS and MULTIMEDIA'),
('iipsdavv', 'PS6B', 'IT-504', 'SYSTEM PROGRAMMING'),
('iipsdavv', 'PS6B', 'IT-505A', 'CORE JAVA'),
('iipsdavv', 'PS6B', 'IT-506', 'NUMERICAL ANALYSIS and DESIGN'),
('iipsdavv', 'PS6B', 'IT-507B', 'CORE JAVA LAB'),
('iipsdavv', 'PS6B', 'IT-508C', 'LAB VIVA(COMPUTER)'),
('iipsdavv', 'PS6B', 'IT-508D', 'LAB VIVA(ELEX.)'),
('iipsdavv', 'PS6B', 'IT-508E', 'MICROPROCESSOR AND ASSEMBLY LANGUAGE LAB'),
('iipsdavv', 'PS6B', 'IT-510', 'MICRO.and ASSEMBLY LANGUAGE'),
('iipsdavv', 'PS6B', 'IT-511', 'SYSTEM ANALYSIS AND DESIGN'),
('iipsdavv', 'PS6B', 'IT-512', 'DISCRETE STRUCTURES'),
('iipsdavv', 'PS6B', 'IT-601', 'PRINCIPLE AND PRACTICES OF MANAGEMENT'),
('iipsdavv', 'PS6B', 'IT-602C', 'PROGRAMMING  IN JAVA'),
('iipsdavv', 'PS6B', 'IT-603', 'DATA and COMPUTER COMMUNICATION'),
('iipsdavv', 'PS6B', 'IT-604', 'SYSTEM ANALYSIS and DESIGN'),
('iipsdavv', 'PS6B', 'IT-605', 'ANALOG ELECTRONICS'),
('iipsdavv', 'PS6B', 'IT-606A', 'PROJECT'),
('iipsdavv', 'PS6B', 'IT-608B', 'LAB-VIVA'),
('iipsdavv', 'PS6B', 'IT-608C', 'COMPUTER GRAPHICS LAB'),
('iipsdavv', 'PS6B', 'IT-608D', 'NAD LAB'),
('iipsdavv', 'PS6B', 'IT-611', 'COMPUTER ARCHITECTURE'),
('iipsdavv', 'PS6B', 'IT-612', 'SYSTEM PROGRAMMING'),
('iipsdavv', 'PS6B', 'IT-613', 'COMPUTER GRAPHICS'),
('iipsdavv', 'PS6B', 'IT-614', 'NUMERICAL ANALYSIS and DESIGN'),
('iipsdavv', 'PS6B', 'IT-701', 'COMPUTER ARCHITECTURE'),
('iipsdavv', 'PS6B', 'IT-701A', 'COMPUTER NETWORKS'),
('iipsdavv', 'PS6B', 'IT-702', 'LINEAR SYSTEMS'),
('iipsdavv', 'PS6B', 'IT-702A', 'THEORY OF COMPUTATION'),
('iipsdavv', 'PS6B', 'IT-703', 'DISCRETE STRUCTURE'),
('iipsdavv', 'PS6B', 'IT-703A', 'ADVANCED JAVA'),
('iipsdavv', 'PS6B', 'IT-705', 'OPERATING SYSTEMS'),
('iipsdavv', 'PS6B', 'IT-705A', 'OPERATING SYSTEMS'),
('iipsdavv', 'PS6B', 'IT-708', 'BIO-INFORMATICS'),
('iipsdavv', 'PS6B', 'IT-709', 'ADVANCED JAVA LAB'),
('iipsdavv', 'PS6B', 'IT-801A', 'COMPUTER NETWORK'),
('iipsdavv', 'PS6B', 'IT-801C', 'ANALYSIS and DESIGN OF ALGORITHM'),
('iipsdavv', 'PS6B', 'IT-802', 'DESIGN AND ANALYSIS OF ALGORITHMS'),
('iipsdavv', 'PS6B', 'IT-802A', 'SOFTWARE ENGINEERING'),
('iipsdavv', 'PS6B', 'IT-803B', 'ARTIFICAL INTELLIGENCE'),
('iipsdavv', 'PS6B', 'IT-805', 'CONTROL SYSTEM'),
('iipsdavv', 'PS6B', 'IT-806A', 'ARTIFICIAL INTELIGENCE LAB'),
('iipsdavv', 'PS6B', 'IT-811', 'INFORMATION SECURITY'),
('iipsdavv', 'PS6B', 'IT-813', 'ETHICS IN COMPUTER'),
('iipsdavv', 'PS6B', 'IT-814', 'ADVANCE COMPUTER ARCHITECTURE'),
('iipsdavv', 'PS6B', 'IT-901A', 'PRINCIPLES OF OPTIMIZATION'),
('iipsdavv', 'PS6B', 'IT-902A', 'COMPONENT TECHNOLOGY'),
('iipsdavv', 'PS6B', 'IT-907', 'ARTIFICIAL INTELLIGENCE'),
('iipsdavv', 'PS6B', 'IT-908A', 'OBJECT ORIENTED ANALYSIS and DESIGN'),
('iipsdavv', 'PS6B', 'IT-911', 'PROJECT'),
('iipsdavv', 'PS6B', 'IT-913', 'OPTIMIZATION TECHNIQUES'),
('iipsdavv', 'PS6B', 'IT-918', 'CLOUD COMPUTING'),
('iipsdavv', 'PS6B', 'IT-919', 'ADVANCE DATABASE MANAGEMENT SYSTEM'),
('iipsdavv', 'PS6B', 'IT-919A', 'ADBMS LAB'),
('iipsdavv', 'PS6C', 'IM - 1001', 'Industrial ProjectDissertation'),
('iipsdavv', 'PS6C', 'IM - 703B', 'Research Methodology'),
('iipsdavv', 'PS6C', 'IM - 706MB', 'Rural and Retail Management'),
('iipsdavv', 'PS6C', 'IM - 707MA', 'Sales and Distribution Management'),
('iipsdavv', 'PS6C', 'IM - 709HA', 'Human Resource Development'),
('iipsdavv', 'PS6C', 'IM - 711HB', 'Training and Development'),
('iipsdavv', 'PS6C', 'IM - 711MA', 'Consumer Behavior'),
('iipsdavv', 'PS6C', 'IM - 712HA', 'Managing People'),
('iipsdavv', 'PS6C', 'IM - 712MA', 'Integrated Marketing Communication'),
('iipsdavv', 'PS6C', 'IM - 714FA', 'Security Analysis and Portfolio Management'),
('iipsdavv', 'PS6C', 'IM - 715FA', 'Financial Market and Financial Services'),
('iipsdavv', 'PS6C', 'IM - 715FB', 'Corporate Financial Analysis'),
('iipsdavv', 'PS6C', 'IM - 716FA', 'Insurance and Banking'),
('iipsdavv', 'PS6C', 'IM - 716HB', 'Compensation and Reward Management'),
('iipsdavv', 'PS6C', 'IM - 717FB', 'Financial Planning and Wealth Management'),
('iipsdavv', 'PS6C', 'IM - 718FB', 'Financial Engineering and Risk Management'),
('iipsdavv', 'PS6C', 'IM - 719', 'Statistical Data Analysis I (SPSS/E-Views/SAS/MS EXCEL/R etc)'),
('iipsdavv', 'PS6C', 'IM - 8**', 'Statistical Data Analysis II (SPSS/E-Views/SAS/MS EXCEL/R etc)'),
('iipsdavv', 'PS6C', 'IM - 8***', 'Dissertation'),
('iipsdavv', 'PS6C', 'IM - 8****', 'Data Analytics');
INSERT INTO `course` (`Username`, `Prog_code`, `Course_code`, `Course_name`) VALUES
('iipsdavv', 'PS6C', 'IM - 802C', 'Decision Making Skills'),
('iipsdavv', 'PS6C', 'IM - 815FA', 'International Finance'),
('iipsdavv', 'PS6C', 'IM - 815HA', 'Organizational Development'),
('iipsdavv', 'PS6C', 'IM - 815HB', 'International Human Resource Management'),
('iipsdavv', 'PS6C', 'IM - 815MA', 'Product and Brand Management'),
('iipsdavv', 'PS6C', 'IM - 815MB', 'Logistics and Supply Chain Management'),
('iipsdavv', 'PS6C', 'IM - 816FA', 'Project Finance'),
('iipsdavv', 'PS6C', 'IM - 816FB', 'Bank Management'),
('iipsdavv', 'PS6C', 'IM - 816HA', 'Performance Planning and Apprasial'),
('iipsdavv', 'PS6C', 'IM - 816MA', 'Strategies and Modeling in Marketing'),
('iipsdavv', 'PS6C', 'IM - 817HA', 'Industrial Relation and Labour Laws'),
('iipsdavv', 'PS6C', 'IM - 817HB', 'HR Based BPT'),
('iipsdavv', 'PS6C', 'IM - 817MA', 'Service Marketing'),
('iipsdavv', 'PS6C', 'IM - 817MB', 'Industrial Marketing'),
('iipsdavv', 'PS6C', 'IM - 818FA', 'Corporate Tax'),
('iipsdavv', 'PS6C', 'IM - 818FB', 'Data Analytics'),
('iipsdavv', 'PS6C', 'IM - 818MB', 'Data Analytics'),
('iipsdavv', 'PS6C', 'IM - 819FB', 'Strategic Financial Management'),
('iipsdavv', 'PS6C', 'IM - 9**', 'Quality Management'),
('iipsdavv', 'PS6C', 'IM - 901C', 'Strategic Management'),
('iipsdavv', 'PS6C', 'IM - 903C', 'Business Ethics and Corporate Governance'),
('iipsdavv', 'PS6C', 'IM - 919FA', 'Multinational Financial Mangement'),
('iipsdavv', 'PS6C', 'IM - 919HA', 'HR For Business Excellence'),
('iipsdavv', 'PS6C', 'IM - 919HB', 'HR Skills'),
('iipsdavv', 'PS6C', 'IM - 919MA', 'Marketing Decisions'),
('iipsdavv', 'PS6C', 'IM - 920FA', 'Investment Management'),
('iipsdavv', 'PS6C', 'IM - 920FB', 'Corporate Restructuring '),
('iipsdavv', 'PS6C', 'IM - 920HA', 'Latest Trends in HRM'),
('iipsdavv', 'PS6C', 'IM - 920HB', 'Advanced Industrial Psychology'),
('iipsdavv', 'PS6C', 'IM - 920MA', 'Marketing Research'),
('iipsdavv', 'PS6C', 'IM - 921FB', 'Financial Research'),
('iipsdavv', 'PS6C', 'IM - 921MB', 'CRM'),
('iipsdavv', 'PS6C', 'IM -6***', 'Lab- Data Visualisation'),
('iipsdavv', 'PS6C', 'IM -705 MB', 'Digital Marketing'),
('iipsdavv', 'PS6C', 'IM -707MB', 'Global Marketing'),
('iipsdavv', 'PS6C', 'IM -714HB', 'Strategic Human Resource Management'),
('iipsdavv', 'PS6C', 'IM -715HB', 'Human Resource Planning and Audit'),
('iipsdavv', 'PS6C', 'IM -919MB', 'Direct Marketing and Event Management'),
('iipsdavv', 'PS6C', 'IM-101', 'Principles and Practices of Management'),
('iipsdavv', 'PS6C', 'IM-102', 'Financial Accounting'),
('iipsdavv', 'PS6C', 'IM-102B', 'Interpersonal Behavior and Organization Behavior'),
('iipsdavv', 'PS6C', 'IM-103', 'Business Mathematics I'),
('iipsdavv', 'PS6C', 'IM-104A', 'Fundamentals of Computer'),
('iipsdavv', 'PS6C', 'IM-104B', 'Fundamentals of Computer and Web Technology'),
('iipsdavv', 'PS6C', 'IM-105A', 'ORGANISATIONAL BEHAVIOUR'),
('iipsdavv', 'PS6C', 'IM-106C', 'Language Proficiency I- Hindi'),
('iipsdavv', 'PS6C', 'IM-106D', 'Language Proficiency I- (English)'),
('iipsdavv', 'PS6C', 'IM-110', 'Seminar 1'),
('iipsdavv', 'PS6C', 'IM-2**', 'Business Communication'),
('iipsdavv', 'PS6C', 'IM-203', 'Cost Accounting'),
('iipsdavv', 'PS6C', 'IM-204A', 'Business Mathematics-II'),
('iipsdavv', 'PS6C', 'IM-209A', 'HINDI'),
('iipsdavv', 'PS6C', 'IM-209B', 'Language Proficiency-II (English) '),
('iipsdavv', 'PS6C', 'IM-210 B', 'Programming Using C++'),
('iipsdavv', 'PS6C', 'IM-214', 'Business Law'),
('iipsdavv', 'PS6C', 'IM-215', 'HUMAN RESOURCE MANAGEMENT'),
('iipsdavv', 'PS6C', 'IM-216A', 'Business Statistics-I'),
('iipsdavv', 'PS6C', 'IM-217', 'MARKETING MANAGEMENT'),
('iipsdavv', 'PS6C', 'IM-218', 'Seminar II'),
('iipsdavv', 'PS6C', 'IM-3**', 'Language Proficiency-II (French)'),
('iipsdavv', 'PS6C', 'IM-301C', 'MARKETING MANAGEMENT'),
('iipsdavv', 'PS6C', 'IM-302', 'Management Accounting'),
('iipsdavv', 'PS6C', 'IM-304B', 'OOPS USING C++'),
('iipsdavv', 'PS6C', 'IM-305A', 'LABOR LAW'),
('iipsdavv', 'PS6C', 'IM-310A', 'FRENCH'),
('iipsdavv', 'PS6C', 'IM-311', 'QUANTITATIVE TECHNIQUES'),
('iipsdavv', 'PS6C', 'IM-311A', 'RDBMS'),
('iipsdavv', 'PS6C', 'IM-312', 'Marketing Management'),
('iipsdavv', 'PS6C', 'IM-313', 'Soft Skills for Managers'),
('iipsdavv', 'PS6C', 'IM-314', 'Managerial Economics'),
('iipsdavv', 'PS6C', 'IM-315', 'Business Statistics II'),
('iipsdavv', 'PS6C', 'IM-317', 'Seminar III'),
('iipsdavv', 'PS6C', 'IM-4**', 'Purchase and Materials Management'),
('iipsdavv', 'PS6C', 'IM-4***', 'E- Business Fundamentals'),
('iipsdavv', 'PS6C', 'IM-4****', 'Language Proficiency-III (French)'),
('iipsdavv', 'PS6C', 'IM-401C', 'INDUSTRIAL and SOCIAL PSYCHOLOGY'),
('iipsdavv', 'PS6C', 'IM-404A', 'OPERATIONS RESEARCH'),
('iipsdavv', 'PS6C', 'IM-406A', 'ECONOMICS-I(MACRO BASED)'),
('iipsdavv', 'PS6C', 'IM-406B', 'Macro Economics'),
('iipsdavv', 'PS6C', 'IM-409A', 'MULTIMEDIA and OPERATING SYSTEM'),
('iipsdavv', 'PS6C', 'IM-411', 'Income Tax'),
('iipsdavv', 'PS6C', 'IM-412', 'PRODUCTION and OPERATIONS MANAGEMENT'),
('iipsdavv', 'PS6C', 'IM-414', 'Financial Management-I'),
('iipsdavv', 'PS6C', 'IM-415', 'Quantitative Techniques'),
('iipsdavv', 'PS6C', 'IM-417', 'Human Resource Management'),
('iipsdavv', 'PS6C', 'IM-418', 'Fundamentals of  Web and Information Technology'),
('iipsdavv', 'PS6C', 'IM-419', 'Seminar IV'),
('iipsdavv', 'PS6C', 'IM-5*', 'Financial Management I'),
('iipsdavv', 'PS6C', 'IM-5**', 'Project Management'),
('iipsdavv', 'PS6C', 'IM-501A', 'FINANCIAL MANAGEMENT-I'),
('iipsdavv', 'PS6C', 'IM-501B', 'Financial Management II'),
('iipsdavv', 'PS6C', 'IM-502', 'Production and Operation Management'),
('iipsdavv', 'PS6C', 'IM-502A', 'PRODUCTIVITY and TECHNOLOGY MANAGEMENT'),
('iipsdavv', 'PS6C', 'IM-503A', 'ECONOMICS-II(MICRO BASED)'),
('iipsdavv', 'PS6C', 'IM-503B', 'Operation Research'),
('iipsdavv', 'PS6C', 'IM-504', 'MATHEMATICAL MODELLING'),
('iipsdavv', 'PS6C', 'IM-505A', 'SOFT SKILLS  FOR MANAGER'),
('iipsdavv', 'PS6C', 'IM-506', 'Marketing Strategies'),
('iipsdavv', 'PS6C', 'IM-510', 'DATA BASE MANAGEMENT SYSTEM'),
('iipsdavv', 'PS6C', 'IM-511', 'Econometrics'),
('iipsdavv', 'PS6C', 'IM-514', 'Indirect Taxes'),
('iipsdavv', 'PS6C', 'IM-6*', 'Forecasting Techniques'),
('iipsdavv', 'PS6C', 'IM-6**', 'Business Environment'),
('iipsdavv', 'PS6C', 'IM-6****', 'Fundamentals of Machine Learning and Artificial Intelligence'),
('iipsdavv', 'PS6C', 'IM-6*****', 'Financial Management II'),
('iipsdavv', 'PS6C', 'IM-6******', 'Production and Operation Management'),
('iipsdavv', 'PS6C', 'IM-601C', 'E-Business Fundamentals'),
('iipsdavv', 'PS6C', 'IM-602A', 'Entrepreneurship'),
('iipsdavv', 'PS6C', 'IM-603', 'ECONOMETRICS'),
('iipsdavv', 'PS6C', 'IM-604A', 'FINANCIAL MANAGEMENT-II'),
('iipsdavv', 'PS6C', 'IM-605', 'Purchase and Material Management'),
('iipsdavv', 'PS6C', 'IM-606', 'Project Management'),
('iipsdavv', 'PS6C', 'IM-608', 'MANAGEMENT INFORMATION TECHNOLOGY'),
('iipsdavv', 'PS6C', 'IM-608A', 'LANGUAGE PROFICIENCY-III (FRENCH)'),
('iipsdavv', 'PS6C', 'IM-609', 'INSURANCE and BANKING'),
('iipsdavv', 'PS6C', 'IM-610', 'INTERNATIONAL BUSINESS'),
('iipsdavv', 'PS6C', 'IM-611', 'BUSINESS COMMUNICATION'),
('iipsdavv', 'PS6C', 'IM-612', 'SEMINAR'),
('iipsdavv', 'PS6D', 'TM101', 'Fundamentals of Management'),
('iipsdavv', 'PS6D', 'TM102', 'Introduction to Tourism'),
('iipsdavv', 'PS6D', 'TM103', 'language Proficiency-English'),
('iipsdavv', 'PS6D', 'TM104', 'Indian History'),
('iipsdavv', 'PS6D', 'TM105', 'IT For Tourism'),
('iipsdavv', 'PS6D', 'TM106', 'Individual and Interpersonal Behaviour'),
('iipsdavv', 'PS6D', 'TM201', 'Basics Of Accounting'),
('iipsdavv', 'PS6D', 'TM202', 'Hotel Operations and Management'),
('iipsdavv', 'PS6D', 'TM203', 'French-I'),
('iipsdavv', 'PS6D', 'TM204', 'Principles of Marketing Management'),
('iipsdavv', 'PS6D', 'TM205', 'Yoga and Wellness'),
('iipsdavv', 'PS6D', 'TM206', 'Business Economics'),
('sopharma', 'PY4A', '101 (A) T', 'Remedial Mathematics'),
('sopharma', 'PY4A', '101 (B) P', 'Remedial Biology'),
('sopharma', 'PY4A', '101 (B) T', 'Remedial Biology'),
('sopharma', 'PY4A', '102 P ', 'Computer Application'),
('sopharma', 'PY4A', '102 T', 'Computer Application'),
('sopharma', 'PY4A', '103 P', 'Pharmaceutics-I (Introduction to Pharmaceutics) '),
('sopharma', 'PY4A', '103 T', 'Pharmaceutics-I (Introduction to Pharmaceutics'),
('sopharma', 'PY4A', '104 P', 'Pharmaceutical Chemistry-I (Organic-I)'),
('sopharma', 'PY4A', '104 T', 'Pharmaceutical Chemistry-I (Organic-I)'),
('sopharma', 'PY4A', '105 P', 'Pharmaceutical Chemistry-II (Inorganic)'),
('sopharma', 'PY4A', '105T', 'Pharmaceutical Chemistry-II (Inorganic)'),
('sopharma', 'PY4A', '106P', 'Communication Skills and Personality Development-I'),
('sopharma', 'PY4A', '201 T', 'Advanced Mathematics'),
('sopharma', 'PY4A', '202 P', 'Pharmaceutics-II  (Physical Pharmacy)'),
('sopharma', 'PY4A', '202 T', 'Pharmaceutics-II  (Physical Pharmacy)'),
('sopharma', 'PY4A', '203 T', 'Pharmaceutical Chemistry-III (Organic-II)'),
('sopharma', 'PY4A', '203P', 'Pharmaceutical Chemistry-III (Organic-II)'),
('sopharma', 'PY4A', '204 T', 'Pharmaceutical Microbiology'),
('sopharma', 'PY4A', '204P', 'Pharmaceutical Microbiology'),
('sopharma', 'PY4A', '205P', 'Anatomy, Physiology and Health Education-I'),
('sopharma', 'PY4A', '205T', 'Anatomy, Physiology and Health Education-I'),
('sopharma', 'PY4A', '206P', 'Communication Skills and Personality Development-II'),
('sopharma', 'PY4A', '301P', 'Pharmaceutics-III (Pharmaceutical Engineering)'),
('sopharma', 'PY4A', '301T', 'Pharmaceutics-III (Pharmaceutical Engineering)'),
('sopharma', 'PY4A', '302P', 'Pharmaceutics-IV  (Dispensing, Community and Hospital Pharmacy)'),
('sopharma', 'PY4A', '302T', 'Pharmaceutics-IV  (Dispensing, Community and Hospital Pharmacy)'),
('sopharma', 'PY4A', '303P', 'Pharmaceutical Analysis-I'),
('sopharma', 'PY4A', '303T', 'Pharmaceutical Analysis-I'),
('sopharma', 'PY4A', '304P', 'Pharmacognosy-I'),
('sopharma', 'PY4A', '304T', 'Pharmacognosy-I'),
('sopharma', 'PY4A', '305P', 'Anatomy, Physiology and Health Education-I'),
('sopharma', 'PY4A', '305T', 'Anatomy, Physiology and Health Education-I'),
('sopharma', 'PY4A', '306P', 'Communication Skills and Personality Development-III'),
('sopharma', 'PY4A', '401P', 'Pharmaceutics-V (Dosage Form Design)'),
('sopharma', 'PY4A', '401T', 'Pharmaceutics-V (Dosage Form Design)'),
('sopharma', 'PY4A', '402P', 'Pharmaceutical Analysis-II'),
('sopharma', 'PY4A', '402T', 'Pharmaceutical Analysis-II'),
('sopharma', 'PY4A', '403P', 'Pharmaceutical Chemistry-IV (Biochemistry)'),
('sopharma', 'PY4A', '403T', 'Pharmaceutical Chemistry-IV (Biochemistry)'),
('sopharma', 'PY4A', '404P', 'Pharmacognosy-II'),
('sopharma', 'PY4A', '404T', 'Pharmacognosy-II'),
('sopharma', 'PY4A', '405T', 'Pharmaceutical Jurisprudence and Ethics'),
('sopharma', 'PY4A', '406P', 'Communication Skills and Personality Development-IV'),
('sopharma', 'PY4A', '501P', 'Pharmaceutics-VI (Cosmetic Technology)'),
('sopharma', 'PY4A', '501T', 'Pharmaceutics-VI (Cosmetic Technology)'),
('sopharma', 'PY4A', '502P', 'Pharmaceutics-VII (Pharmaceutical Technology-I)'),
('sopharma', 'PY4A', '502T', 'Pharmaceutics-VII (Pharmaceutical Technology-I)'),
('sopharma', 'PY4A', '503P', 'Pharmaceutical Chemistry-V (Medicinal Chemistry-I)'),
('sopharma', 'PY4A', '503T', 'Pharmaceutical Chemistry-V (Medicinal Chemistry-I)'),
('sopharma', 'PY4A', '504P', 'Pharmacognosy-III'),
('sopharma', 'PY4A', '504T', 'Pharmacognosy-III'),
('sopharma', 'PY4A', '505P', 'Pharmacology-I'),
('sopharma', 'PY4A', '505T', 'Pharmacology-I'),
('sopharma', 'PY4A', '506P', 'Communication Skills and Personality Development-V'),
('sopharma', 'PY4A', '601P', 'Pharmaceutics-VIII (Pharmaceutical Technology-II)'),
('sopharma', 'PY4A', '601T', 'Pharmaceutics-VIII (Pharmaceutical Technology-II)'),
('sopharma', 'PY4A', '602P', 'Pharmaceutical Biotechnology'),
('sopharma', 'PY4A', '602T', 'Pharmaceutical Biotechnology'),
('sopharma', 'PY4A', '603P', 'Pharmaceutical Chemistry-VI (Medicinal Chemistry-II)'),
('sopharma', 'PY4A', '603T', 'Pharmaceutical Chemistry-VI (Medicinal Chemistry-II)'),
('sopharma', 'PY4A', '604P', 'Pharmaceutics-IX (Packaging Technology)'),
('sopharma', 'PY4A', '604T', 'Pharmaceutics-IX (Packaging Technology)'),
('sopharma', 'PY4A', '605P', 'Pharmacology-II'),
('sopharma', 'PY4A', '605T', 'Pharmacology-II'),
('sopharma', 'PY4A', '606P', 'Communication Skills and Personality Development-VI'),
('sopharma', 'PY4A', '701P', 'Pharmaceutics-X (Biopharmaceutics and '),
('sopharma', 'PY4A', '701T', 'Pharmaceutics-X (Biopharmaceutics and '),
('sopharma', 'PY4A', '702P', 'Pharmaceutical Chemistry-VII (Medicinal Chemistry-III)'),
('sopharma', 'PY4A', '702T', 'Pharmaceutical Chemistry-VII (Medicinal Chemistry-III)'),
('sopharma', 'PY4A', '703P', 'Pharmaceutical Analysis III'),
('sopharma', 'PY4A', '703T', 'Pharmaceutical Analysis III'),
('sopharma', 'PY4A', '704P', 'Pharmacology-III'),
('sopharma', 'PY4A', '704T', 'Pharmacology-III'),
('sopharma', 'PY4A', '705P', 'Communication Skills and Personality Development-VII'),
('sopharma', 'PY4A', '801T', 'Pharmacology-IV'),
('sopharma', 'PY4A', '802T', 'Pharmaceutical Industrial Management and Accountancy'),
('sopharma', 'PY4A', '803P', 'Pharmaceutical Analysis-IV'),
('sopharma', 'PY4A', '803T', 'Pharmaceutical Analysis-IV'),
('sopharma', 'PY4A', '804T', 'Elective-Drug Design,Food Science Technology,Pharmaceutical Sales and Marketing'),
('sopharma', 'PY4A', '805', 'Project Report'),
('sopharma', 'PY4A', '806', 'Professional Training'),
('sopharma', 'PY4A', 'BP101T', 'Human Anatomy and Physiology I– Theory'),
('sopharma', 'PY4A', 'BP102T', 'Pharmaceutical Analysis I – Theory'),
('sopharma', 'PY4A', 'BP103T', 'Pharmaceutics I – Theory'),
('sopharma', 'PY4A', 'BP104T', 'Pharmaceutical Inorganic Chemistry – Theory'),
('sopharma', 'PY4A', 'BP105T', 'Communication skills – Theory *'),
('sopharma', 'PY4A', 'BP106 RBT', 'Remedial Biology/'),
('sopharma', 'PY4A', 'BP106 RMT', 'Remedial Mathematics – Theory*'),
('sopharma', 'PY4A', 'BP107P', 'Human Anatomy and Physiology – Practical'),
('sopharma', 'PY4A', 'BP108P', 'Pharmaceutical Analysis I – Practical'),
('sopharma', 'PY4A', 'BP109P', 'Pharmaceutics I – Practical	'),
('sopharma', 'PY4A', 'BP110P', 'Pharmaceutical Inorganic Chemistry – Practical'),
('sopharma', 'PY4A', 'BP111P', 'Communication skills – Practical*'),
('sopharma', 'PY4A', 'BP112 RBP', 'Remedial Biology – Practical*'),
('sopharma', 'PY4A', 'BP201T', 'Human Anatomy and Physiology II – Theory'),
('sopharma', 'PY4A', 'BP202T', 'Pharmaceutical Organic Chemistry I – Theory'),
('sopharma', 'PY4A', 'BP203T', 'Biochemistry – Theory'),
('sopharma', 'PY4A', 'BP204T', 'Pathophysiology – Theory'),
('sopharma', 'PY4A', 'BP205T', 'Computer Applications in Pharmacy – Theory *'),
('sopharma', 'PY4A', 'BP206T', 'Environmental sciences – Theory '),
('sopharma', 'PY4A', 'BP207P', 'Human Anatomy and Physiology II –Practical'),
('sopharma', 'PY4A', 'BP208P', 'Pharmaceutical Organic Chemistry I– Practical'),
('sopharma', 'PY4A', 'BP209P', 'Biochemistry – Practical'),
('sopharma', 'PY4A', 'BP210P', 'Computer Applications in Pharmacy – Practical*'),
('sopharma', 'PY4A', 'BP301T', 'Pharmaceutical Organic Chemistry II – Theory'),
('sopharma', 'PY4A', 'BP302T', 'Physical Pharmaceutics I – Theory'),
('sopharma', 'PY4A', 'BP303T', 'Pharmaceutical Microbiology – Theory'),
('sopharma', 'PY4A', 'BP304T', 'Pharmaceutical Engineering – Theory'),
('sopharma', 'PY4A', 'BP305P', 'Pharmaceutical Organic Chemistry II – Practical'),
('sopharma', 'PY4A', 'BP306P', 'Physical Pharmaceutics I – Practical'),
('sopharma', 'PY4A', 'BP307P', 'Pharmaceutical Microbiology – Practical'),
('sopharma', 'PY4A', 'BP308 P', 'Pharmaceutical Engineering –Practical'),
('sopharma', 'PY4A', 'BP401T', 'Pharmaceutical Organic Chemistry III– Theory'),
('sopharma', 'PY4A', 'BP402T', 'Medicinal Chemistry I – Theory'),
('sopharma', 'PY4A', 'BP403T', 'Physical Pharmaceutics II – Theory'),
('sopharma', 'PY4A', 'BP404T', 'Pharmacology I – Theory'),
('sopharma', 'PY4A', 'BP405T', 'Pharmacognosy and Phytochemistry I– Theory'),
('sopharma', 'PY4A', 'BP406P', 'Medicinal Chemistry I – Practical'),
('sopharma', 'PY4A', 'BP407P', 'Physical Pharmaceutics II – Practical'),
('sopharma', 'PY4A', 'BP408P', 'Pharmacology I – Practical'),
('sopharma', 'PY4A', 'BP409P', 'Pharmacognosy and Phytochemistry I – Practical'),
('sopharma', 'PY4A', 'BP501T', 'Medicinal Chemistry II – Theory'),
('sopharma', 'PY4A', 'BP502T', 'Industrial PharmacyI– Theory'),
('sopharma', 'PY4A', 'BP503T', 'Pharmacology II – Theory'),
('sopharma', 'PY4A', 'BP504T', 'Pharmacognosy and Phytochemistry II– Theory'),
('sopharma', 'PY4A', 'BP505T', 'Pharmaceutical Jurisprudence  – Theory'),
('sopharma', 'PY4A', 'BP506P', 'Industrial PharmacyI – Practical'),
('sopharma', 'PY4A', 'BP507P', 'Pharmacology II – Practical'),
('sopharma', 'PY4A', 'BP508P', 'Pharmacognosy and Phytochemistry II – Practical'),
('sopharma', 'PY4A', 'BP601T', 'Medicinal Chemistry III  – Theory'),
('sopharma', 'PY4A', 'BP602T', 'Pharmacology III – Theory'),
('sopharma', 'PY4A', 'BP603T', 'Herbal Drug Technology – Theory'),
('sopharma', 'PY4A', 'BP604T', 'Biopharmaceutics and Pharmacokinetics – Theory'),
('sopharma', 'PY4A', 'BP605T', 'Pharmaceutical Biotechnology – Theory'),
('sopharma', 'PY4A', 'BP606T', 'Quality Assurance –Theory'),
('sopharma', 'PY4A', 'BP607P', 'Medicinal chemistry III – Practical'),
('sopharma', 'PY4A', 'BP608P', 'Pharmacology III – Practical'),
('sopharma', 'PY4A', 'BP609P', 'Herbal Drug Technology – Practical'),
('sopharma', 'PY4A', 'BP701T', 'Instrumental Methods of Analysis  – Theory'),
('sopharma', 'PY4A', 'BP702T', 'Industrial PharmacyII – Theory'),
('sopharma', 'PY4A', 'BP703T', 'Pharmacy Practice – Theory'),
('sopharma', 'PY4A', 'BP704T', 'Novel Drug Delivery System – Theory'),
('sopharma', 'PY4A', 'BP705P', 'Instrumental Methods of Analysis  – Practical'),
('sopharma', 'PY4A', 'BP706PS', 'Practice School*'),
('sopharma', 'PY4A', 'BP801T', 'Biostatistics and Research Methodology'),
('sopharma', 'PY4A', 'BP802T', 'Social and Preventive Pharmacy'),
('sopharma', 'PY4A', 'BP803ET', 'Pharma Marketing Management'),
('sopharma', 'PY4A', 'BP804ET', 'Pharmaceutical Regulatory Science'),
('sopharma', 'PY4A', 'BP805ET', 'Pharmacovigilance'),
('sopharma', 'PY4A', 'BP806ET', 'Quality Control and Standardization of Herbals'),
('sopharma', 'PY4A', 'BP807ET', 'Computer Aided Drug Design'),
('sopharma', 'PY4A', 'BP808ET', 'Cell and Molecular Biology'),
('sopharma', 'PY4A', 'BP809ET', 'Cosmetic Science'),
('sopharma', 'PY4A', 'BP810ET', 'Experimental Pharmacology'),
('sopharma', 'PY4A', 'BP811ET', 'Advanced Instrumentation Techniques'),
('sopharma', 'PY4A', 'BP812ET', 'Dietary Supplements and Neutraceutical'),
('sopharma', 'PY4A', 'BP813PW', 'Project Work'),
('sopharma', 'PY4A', 'MPC 106 ', 'Seminar and Assignments '),
('sopharma', 'PY4A', 'PYB-101(A)T ', 'Remedial Mathematics'),
('sopharma', 'PY4A', 'PYB-101(B)P', 'Remedial Biology Practicals'),
('sopharma', 'PY4A', 'PYB-101(B)T', 'Remedial Biology'),
('sopharma', 'PY4A', 'PYB-102T', 'Mathematics and Biostatistics'),
('sopharma', 'PY4A', 'PYB-103P', 'Pharmaceutics-I Practical'),
('sopharma', 'PY4A', 'PYB-103T', 'Pharmaceutics-I '),
('sopharma', 'PY4A', 'PYB-104P', 'Pharmaceutical Microbiology Practicals'),
('sopharma', 'PY4A', 'PYB-104T', 'Pharmaceutical Microbiology'),
('sopharma', 'PY4A', 'PYB-105P', 'Inorganic Medicinal Chemistry Practicals'),
('sopharma', 'PY4A', 'PYB-105T', 'Inorganic Medicinal Chemistry'),
('sopharma', 'PY4A', 'PYB-106P', 'Pharmaceutical Chemistry-I (Organic-I) Practicals'),
('sopharma', 'PY4A', 'PYB-106T', 'Pharmaceutical Chemistry-I (Organic-I)'),
('sopharma', 'PY4A', 'PYB-107P', 'Human Anatomy and Physiology-I Practicals'),
('sopharma', 'PY4A', 'PYB-107T', 'Human Anatomy and Physiology-I'),
('sopharma', 'PY4A', 'PYB-108P', 'Human Anatomy and Physiology-II Practicals'),
('sopharma', 'PY4A', 'PYB-108T', 'Human Anatomy and Physiology-II'),
('sopharma', 'PY4A', 'PYB-109T', 'Environmental  Science'),
('sopharma', 'PY4A', 'PYB-110P', 'Pharmacognosy-I Practicals'),
('sopharma', 'PY4A', 'PYB-110T', 'Pharmacognosy-I'),
('sopharma', 'PY4A', 'PYB-111P', 'IT Skills for Pharmacists  Practicals'),
('sopharma', 'PY4A', 'PYB-111T', 'IT Skills for Pharmacists '),
('sopharma', 'PY4A', 'PYB-113', 'Comprehensive viva-voce '),
('sopharma', 'PY4A', 'PYB-114 ', 'Comprehensive viva-voce '),
('sopharma', 'PY4A', 'PYB-201P', 'Physical Pharmacy-I Practicals'),
('sopharma', 'PY4A', 'PYB-201T', 'Physical Pharmacy-I'),
('sopharma', 'PY4A', 'PYB-202P', 'Pharmaceutics –II  Practicals'),
('sopharma', 'PY4A', 'PYB-202T', 'Pharmaceutics –II'),
('sopharma', 'PY4A', 'PYB-203P', 'Pharmaceutical Chemistry-II  (Organic-II) Practicals'),
('sopharma', 'PY4A', 'PYB-203T', 'Pharmaceutical Chemistry-II  (Organic-II)'),
('sopharma', 'PY4A', 'PYB-204P', 'Pharmaceutical Analysis-II Practicals'),
('sopharma', 'PY4A', 'PYB-204T', 'Pharmaceutical Analysis-II'),
('sopharma', 'PY4A', 'PYB-205P', 'Pharmaceutical Analysis- I Practicals'),
('sopharma', 'PY4A', 'PYB-205T', 'Pharmaceutical Analysis- I'),
('sopharma', 'PY4A', 'PYB-206P', 'Pharmaceutical Biochemistry  Practicals'),
('sopharma', 'PY4A', 'PYB-206T', 'Pharmaceutical Biochemistry'),
('sopharma', 'PY4A', 'PYB-207P', 'Pharmacognosy-II Practicals'),
('sopharma', 'PY4A', 'PYB-207T', 'Pharmacognosy-II'),
('sopharma', 'PY4A', 'PYB-208P', 'Physical Pharmacy-II Practicals'),
('sopharma', 'PY4A', 'PYB-208T', 'Physical Pharmacy-II'),
('sopharma', 'PY4A', 'PYB-209T', 'Generic Elective-I   (Health Education/ Food Science Technology)'),
('sopharma', 'PY4A', 'PYB-210T', 'Generic Elective-II  Intellectual Property Rights/ Consumer Rights'),
('sopharma', 'PY4A', 'PYB-211', 'Comprehensive viva-voce '),
('sopharma', 'PY4A', 'PYB-212', 'Comprehensive viva-voce '),
('sopharma', 'PY4A', 'PYB-301P', 'Pharmaceutics-III Practicals'),
('sopharma', 'PY4A', 'PYB-301T', 'Pharmaceutics-III'),
('sopharma', 'PY4A', 'PYB-302P', 'Pharmaceutical Engineering Practicals'),
('sopharma', 'PY4A', 'PYB-302T', 'Pharmaceutical Engineering'),
('sopharma', 'PY4A', 'PYB-303P', 'Medicinal Chemistry-I Practicals'),
('sopharma', 'PY4A', 'PYB-303T', 'Medicinal Chemistry-I'),
('sopharma', 'PY4A', 'PYB-304P', 'Medicinal Chemistry-II Practicals'),
('sopharma', 'PY4A', 'PYB-304T', 'Medicinal Chemistry-II'),
('sopharma', 'PY4A', 'PYB-305P', 'Pharmacognosy-III Practicals'),
('sopharma', 'PY4A', 'PYB-305T', 'Pharmacognosy-III'),
('sopharma', 'PY4A', 'PYB-306P', 'Pharmacology-II Practicals'),
('sopharma', 'PY4A', 'PYB-306T', 'Pharmacology-II'),
('sopharma', 'PY4A', 'PYB-307P', 'Pharmacology-I Practicals'),
('sopharma', 'PY4A', 'PYB-307T', 'Pharmacology-I'),
('sopharma', 'PY4A', 'PYB-308T', 'Pharmaceutical Biotechnology'),
('sopharma', 'PY4A', 'PYB-309T', 'DSE-I Dietary Supplements and Nutraceuticals/  Cosmetic Science'),
('sopharma', 'PY4A', 'PYB-310T', 'Pharmaceutics  Jurisprudence and Ethics'),
('sopharma', 'PY4A', 'PYB-311', 'Comprehensive viva-voce '),
('sopharma', 'PY4A', 'PYB-312T', 'Discipline Specific Elective-II Drug Design/ Packaging Technology'),
('sopharma', 'PY4A', 'PYB-314', 'Comprehensive viva-voce '),
('sopharma', 'PY4A', 'PYB-401 P', 'Pharmaceutics IV Practicals'),
('sopharma', 'PY4A', 'PYB-401 T', 'Pharmaceutics IV'),
('sopharma', 'PY4A', 'PYB-402 P', 'Pharmaceutics V (Bio-pharmaceutics and Pharmacokinetics) Practicals'),
('sopharma', 'PY4A', 'PYB-402T', 'Pharmaceutics V (Bio-pharmaceutics and Pharmacokinetics)'),
('sopharma', 'PY4A', 'PYB-403 P', 'Medicinal Chemistry-III Practicals'),
('sopharma', 'PY4A', 'PYB-403 T', 'Medicinal Chemistry-III'),
('sopharma', 'PY4A', 'PYB-404 T', 'Pharmaceutical Industrial Management and Accountancy'),
('sopharma', 'PY4A', 'PYB-405 P', 'Pharmaceutical Analysis-III Practicals'),
('sopharma', 'PY4A', 'PYB-405 T', 'Pharmaceutical Analysis-III'),
('sopharma', 'PY4A', 'PYB-406 T', 'Pharmaceutical Quality Assurance'),
('sopharma', 'PY4A', 'PYB-407 P', 'Pharmacology-III Practicals'),
('sopharma', 'PY4A', 'PYB-407 T', 'Pharmacology-III '),
('sopharma', 'PY4A', 'PYB-408 T', 'Generic Elective-III Pharmaceutical Marketing/ Clinical Pharmacy and Drug Interactions'),
('sopharma', 'PY4A', 'PYB-409 T', 'Discipline Specific Elective – III Pharmaceutical Regulatory Science / Pharmacovigilance'),
('sopharma', 'PY4A', 'PYB-410 P', 'Project Report'),
('sopharma', 'PY4A', 'PYB-411', 'Comprehensive viva voce'),
('sopharma', 'PY4A', 'PYB-412 T', 'Professional Training'),
('sopharma', 'PY4A', 'PYB-414 P', 'Comprehensive viva voce'),
('sopharma', 'PY4A', 'PYM-PC-708 T (B)', 'Product Development '),
('sopharma', 'PY4A', 'PYM-PC-803 T', 'Drug Regulatory Affairs and Quality Assurance'),
('sopharma', 'PY4A', 'PYM-PC-805', 'Research Project Phase-I '),
('sopharma', 'PY7A', 'MPC 101 T', 'Modern Pharmaceutical Analytical Techniques'),
('sopharma', 'PY7A', 'MPC 102 T', 'Advanced Organic Chemistry-I'),
('sopharma', 'PY7A', 'MPC 103 T', 'Advanced Medicinal Chemistry'),
('sopharma', 'PY7A', 'MPC 104 T', 'Chemistry of Natural Products'),
('sopharma', 'PY7A', 'MPC 105 P', 'Pharmaceutical Chemistry Practical-I'),
('sopharma', 'PY7A', 'MPC 13', 'Seminar and Viva-voce'),
('sopharma', 'PY7A', 'MPC 201 T', 'Advanced Spectral Analysis'),
('sopharma', 'PY7A', 'MPC 202 T', 'Advanced Organic Chemistry-II'),
('sopharma', 'PY7A', 'MPC 203 T', 'Computer Aided Drug Design'),
('sopharma', 'PY7A', 'MPC 204 T', 'Pharmaceutical Chemistry Practical-I'),
('sopharma', 'PY7A', 'MPC 206 P', 'Seminar and Assignments '),
('sopharma', 'PY7A', 'MPC-01', 'Modern Analytical Technique'),
('sopharma', 'PY7A', 'MPC-02', 'Product Development and Quality Assurance'),
('sopharma', 'PY7A', 'MPC-03', 'DRA and Intellectual Property Rights '),
('sopharma', 'PY7A', 'MPC-04', 'Biotechnology and Bio-statistics '),
('sopharma', 'PY7A', 'MRM 301 T', 'Research Methodology and Bio-statistics'),
('sopharma', 'PY7A', 'MRM 302', 'Journal Club'),
('sopharma', 'PY7A', 'MRM 303', 'Discussion / Presentation (Proposal Presentation)'),
('sopharma', 'PY7A', 'MRM 304', 'Research Work'),
('sopharma', 'PY7A', 'MRM 401', 'Journal Club'),
('sopharma', 'PY7A', 'MRM 402', 'Research Work'),
('sopharma', 'PY7A', 'MRM 403', 'Discussion/Final Presentation'),
('sopharma', 'PY7A', 'PYM-PC-701 T', 'Modern Analytical Techniques-I'),
('sopharma', 'PY7A', 'PYM-PC-702 T', 'Modern Analytical Techniques-II'),
('sopharma', 'PY7A', 'PYM-PC-703 T', 'Impurity Profiling and Stability Studies  '),
('sopharma', 'PY7A', 'PYM-PC-705 T', 'Medicinal Chemistry (Drug Discovery and Development)'),
('sopharma', 'PY7A', 'PYM-PC-706 T', 'Advanced Organic Chemistry'),
('sopharma', 'PY7A', 'PYM-PC-707 T (A)', 'Pharmacological Screening'),
('sopharma', 'PY7A', 'PYM-PC-708 T (A)', 'Logics in Organic Synthesis'),
('sopharma', 'PY7A', 'PYM-PC-709  P', 'Laboratory Practical-I'),
('sopharma', 'PY7A', 'PYM-PC-710  P', 'Laboratory Practical-II'),
('sopharma', 'PY7A', 'PYM-PC-711', 'Comprehensive Viva-voce'),
('sopharma', 'PY7A', 'PYM-PC-712T', 'Comprehensive Viva-voce'),
('sopharma', 'PY7A', 'PYM-PC-801 T', 'Research Methodology and Bio- statistics '),
('sopharma', 'PY7A', 'PYM-PC-802 ', 'Research Project Phase-I I and Research Project Presentation'),
('sopharma', 'PY7A', 'PYM-PC-804', 'Comprehensive viva-voce'),
('sopharma', 'PY7A', 'PYM-PC-807', 'Research Project Phase-I Presentation'),
('sopharma', 'PY7A', 'PYM-PC-809', 'Comprehensive viva voce '),
('sopharma', 'PY9Z', 'PHDC1', 'Research Methodology'),
('sopharma', 'PY9Z', 'PHDC171', 'Research Methodology'),
('sopharma', 'PY9Z', 'PHDC172', 'Research Methodology in Pharmacy'),
('sopharma', 'PY9Z', 'PHDC173', 'Computer Application'),
('sopharma', 'PY9Z', 'PHDC174', 'Review of Literature'),
('sopharma', 'PY9Z', 'PHDC175', 'Comprehensive  Viva Voce'),
('sopharma', 'PY9Z', 'PHDC2', 'Research Methodology in Pharmacy'),
('sopharma', 'PY9Z', 'PHDC3', 'Computer Application'),
('sopharma', 'PY9Z', 'PHDC4', 'Review of Literature'),
('sopharma', 'PY9Z', 'PHDC5', 'Comprehensive  Viva Voce'),
('soss', 'SS1A', 'LLPM(C)', 'Certificate in Labour Law and Personnel Management'),
('soss', 'SS1B', 'CPA(C)', 'Certificate in Consumer Psychology and Advertising'),
('soss', 'SS1C', 'GandC(C)', 'Certificate in Guidance and Counselling'),
('soss', 'SS1D', 'HRs(C)', 'Certificate in Human Rights'),
('soss', 'SS2A', 'DCPandA', 'Diploma in Consumer Psychology and Advertising'),
('soss', 'SS3A', 'PGDGC', 'P.G. Diploma in Guidance and Counselling'),
('soss', 'SS3B', 'PGDHRs', 'P.G. Diploma in Human Rights'),
('soss', 'SS3C', 'PGDLLPM', 'P.G. Diploma in Labour Law and Personnel Management'),
('soss', 'SS4A', 'B.S.W', 'Bachelor of Social Work'),
('soss', 'SS5A', 'M.S.W.', 'Master of Social Work'),
('soss', 'SS5B', 'MASOC', 'M.A. Sociology'),
('soss', 'SS5C', 'MAPS', 'M.A. Political Science'),
('soss', 'SS5D', 'MACP', 'M.A. Clinical Psychology'),
('soss', 'SS5E', 'MBARD', 'M.B.A. Rural Development'),
('soss', 'SS5F', 'MBAPAP', 'MBA PUBLIC ADMINISTRATION'),
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
('saif', 'TESTING1', 'CER1G1', 'TESTING 1'),
('pranjal', 'TESTINGP1', 'TESTING123', 'TESTING COURSE NAME');

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

-- --------------------------------------------------------

--
-- Table structure for table `help_desk`
--

CREATE TABLE `help_desk` (
  `id` int(11) NOT NULL,
  `msg_from` varchar(100) NOT NULL,
  `msg_to` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `seen` int(11) NOT NULL,
  `replied` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help_desk`
--

INSERT INTO `help_desk` (`id`, `msg_from`, `msg_to`, `msg`, `timestamp`, `seen`, `replied`) VALUES
(1, 'admin4', 'iqac', 'Good+Afternoon+Sir%2C+I+am+SOmeone+from+department+of+Admin4+%2C+Please+help+me+out.', '2018-11-17 12:23:40', 1, 0),
(2, 'admin4', 'iqac', 'Will+you+help+me+sir...%21%21%21%21', '2018-11-17 12:24:04', 1, 0),
(3, 'iqac', 'admin4', 'hi+admin+4%0A', '2018-11-17 12:28:03', 1, 0),
(4, 'iqac', 'admin4', '1234', '2018-11-17 12:28:08', 1, 0),
(5, 'admin4', 'iqac', 'hello', '2018-11-17 12:28:54', 1, 0),
(6, 'admin4', 'iqac', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fhelpdesk%2Fmsg.php', '2018-11-17 12:30:41', 1, 0),
(7, 'admin4', 'iqac', 'hi+test', '2018-11-17 12:33:17', 1, 0),
(8, 'iqac', 'admin4', 'Okay+then+all+solved.', '2018-11-17 13:43:50', 1, 0),
(9, 'iqac', 'admin1', 'here+changes+are+showing+properly+', '2018-11-17 13:52:50', 1, 0),
(10, 'iqac', 'admin4', 'Done', '2018-11-17 13:58:56', 1, 0),
(11, 'iqac', 'admin1', 'login+again+problem+in+orera+too.+..in+BACK+from+this+window..', '2018-11-17 14:12:10', 1, 0),
(12, 'iqac', 'admin1', 'login+again+problem+in+orera+too.+..in+BACK+from+this+window..', '2018-11-17 14:12:10', 1, 0),
(13, 'iqac', 'admin4', 'okay', '2018-11-17 14:18:44', 1, 0),
(14, 'iqac', 'admin1', '5.4.2%0AAlumni+contribution+during+the+last+five+years%0AA.+%C3%A2%E2%80%B0%C2%A5+100+Lakhs+%28use+less+or+more+than+in+text+mode%29%0AB.+50Lakhs+-+100+Lakhs%0AC.+20+Lakhs+-+50+Lakhs%0AD.+5+Lakhs+-+20+Lakhs%0AE.+%3C5+Lakhs+%28use+less+or+more+than+in+text+mode%29', '2018-11-17 14:21:55', 1, 0),
(15, 'iqac', 'admin1', '5.4.2%0AAlumni+contribution+during+the+last+five+years%0AA.+%C3%A2%E2%80%B0%C2%A5+100+Lakhs+%28use+less+or+more+than+in+text+mode%29%0AB.+50Lakhs+-+100+Lakhs%0AC.+20+Lakhs+-+50+Lakhs%0AD.+5+Lakhs+-+20+Lakhs%0AE.+%3C5+Lakhs+%28use+less+or+more+than+in+text+mode%29', '2018-11-17 14:21:57', 1, 0),
(16, 'iqac', 'admin1', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F17-11-2018_14-24-21error.docx', '2018-11-17 14:24:33', 1, 0),
(17, 'admin1', 'iqac', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F17-11-2018_14-24-21error.docx', '2018-11-17 14:26:02', 1, 0),
(18, 'admin1', 'iqac', 'Sir+%2C+We+have+to+update+the+notice+that+is+shown+to+all+departments.', '2018-11-17 15:03:54', 1, 0),
(19, 'sees', 'iqac', '3.4.5+data+is+not+saving+from+9+research+paper+', '2018-11-17 16:38:43', 1, 0),
(20, 'iqac', 'sees', 'we+have+found+19+rows+in+our+log+which+you+have+tried+saving%2C+those+we+have+successfully+saved+in+the+section+3.4.5.', '2018-11-17 18:37:18', 1, 0),
(21, 'iqac', 'sees', '%3Cb+style%3D%22font-color%3Ared%22%3E+Note+%3A+The+issue+was+you+have+used+special+characters+in+the+data+you+have+entered+%2C+kindly+try+avoiding+them+in+future.+%3C%2Fb%3E', '2018-11-17 18:38:52', 1, 0),
(22, 'iqac', 'sees', 'Check+your+data+now+and+proceed.', '2018-11-17 18:39:52', 1, 0),
(23, 'iqac', 'admin4', 'Have+you+seen+all+my+messages.', '2018-11-18 08:00:36', 1, 0),
(24, 'iqac', 'admin4', 'okay', '2018-11-18 08:01:00', 0, 0),
(25, 'iqac', 'sees', 'Is+your+query+resolved', '2018-11-18 08:04:19', 1, 0),
(26, 'iqac', 'sees', '%3F%3F%3F', '2018-11-18 08:04:36', 1, 0),
(27, 'sees', 'iqac', 'my+doubt', '2018-11-18 08:13:10', 1, 0),
(28, 'iqac', 'sees', 'okay+tell+me', '2018-11-18 08:14:08', 0, 0),
(29, 'admin3', 'iqac', 'Hello+Sir', '2018-11-19 17:10:36', 1, 0),
(30, 'admin3', 'iqac', '%3Cscript%3Ealert%28%27ye+bhi+possible+hai%21%27%29%3B%3C%2Fscript%3E', '2018-11-19 17:10:55', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `na_table_div_id`
--

CREATE TABLE `na_table_div_id` (
  `table` varchar(100) NOT NULL,
  `div_id` varchar(100) NOT NULL,
  `criteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `na_table_div_id`
--

INSERT INTO `na_table_div_id` (`table`, `div_id`, `criteria`) VALUES
('t1_1_1', 'ch111', 1),
('t1_1_2', 'ch112', 1),
('t1_1_3', 'ch113', 1),
('t1_2_1', 'ch121', 1),
('t1_2_2', 'ch122', 1),
('t1_3_1', 'ch131', 1),
('t1_3_2', 'ch132', 1),
('t1_3_4', 'ch134', 1),
('t1_4_1', 'ch141', 1),
('t1_4_2', 'ch142', 1),
('t2_1_1', 'ch211', 2),
('t2_1_2', 'ch212', 2),
('t2_1_3', 'ch213', 2),
('t2_2_1', 'ch221', 2),
('t2_2_2', 'ch222', 2),
('t2_2_3', 'ch223', 2),
('t2_3_1', 'ch231', 2),
('t2_3_2', 'ch232', 2),
('t2_3_3', 'ch233', 2),
('t2_4_1', 'ch241', 2),
('t2_4_2', 'ch242', 2),
('t2_4_3', 'ch243', 2),
('t2_4_4', 'ch244', 2),
('t2_4_5', 'ch245', 2),
('t2_5_1', 'ch251', 2),
('t2_5_2', 'ch252', 2),
('t2_5_3', 'ch253', 2),
('t2_5_4', 'ch254', 2),
('t2_5_5', 'ch255', 2),
('t2_6_1', 'ch261', 2),
('t2_6_2', 'ch262', 2),
('t2_6_3', 'ch263', 2),
('t2_7_1', 'ch271', 2),
('t3_1_1', 'ch311', 3),
('t3_1_2', 'ch312', 3),
('t3_1_3', 'ch313', 3),
('t3_1_4', 'ch314', 3),
('t3_1_5', 'ch315', 3),
('t3_1_6', 'ch316', 3),
('t3_2_2', 'ch322', 3),
('t3_2_3', 'ch323', 3),
('t3_3_1', 'ch331', 3),
('t3_3_2', 'ch332', 3),
('t3_3_3', 'ch333', 3),
('t3_3_4', 'ch334', 3),
('t3_4_1', 'ch341', 3),
('t3_4_2', 'ch342', 3),
('t3_4_3', 'ch343', 3),
('t3_4_4', 'ch344', 3),
('t3_4_5', 'ch345', 3),
('t3_4_6', 'ch346', 3),
('t3_4_7', 'ch347', 3),
('t3_4_8', 'ch348', 3),
('t3_5_1', 'ch351', 3),
('t3_5_2', 'ch352', 3),
('t3_5_3', 'ch353', 3),
('t3_6_1', 'ch361', 3),
('t3_6_2', 'ch362', 3),
('t3_6_3', 'ch363', 3),
('t3_6_4', 'ch364', 3),
('t3_7_1', 'ch371', 3),
('t3_7_2', 'ch372', 3),
('t3_7_3', 'ch373', 3),
('t4_1_1', 'ch411', 4),
('t4_1_2', 'ch412', 4),
('t4_1_3', 'ch413', 4),
('t4_1_4', 'ch414', 4),
('t4_2_1', 'ch421', 4),
('t4_2_2', 'ch422', 4),
('t4_2_3', 'ch423', 4),
('t4_2_4', 'ch424', 4),
('t4_2_5', 'ch425', 4),
('t4_2_6', 'ch426', 4),
('t4_2_7', 'ch427', 4),
('t4_3_1', 'ch431', 4),
('t4_3_2', 'ch432', 4),
('t4_3_3', 'ch433', 4),
('t4_3_4', 'ch434', 4),
('t4_4_1', 'ch441', 4),
('t4_4_2', 'ch442', 4),
('t5_1_1', 'ch511', 5),
('t5_1_2', 'ch512', 5),
('t5_1_3', 'ch513', 5),
('t5_1_4', 'ch514', 5),
('t5_1_5', 'ch515', 5),
('t5_1_6', 'ch516', 5),
('t5_2_1', 'ch521', 5),
('t5_2_2', 'ch522', 5),
('t5_2_3', 'ch523', 5),
('t5_3_1', 'ch531', 5),
('t5_3_2', 'ch111', 5),
('t5_3_3', 'ch533', 5),
('t5_4_1', 'ch541', 5),
('t5_4_2', 'ch542', 5),
('t5_4_3', 'ch543', 5),
('t6_1_1', 'ch611', 6),
('t6_1_2', 'ch612', 6),
('t6_2_1', 'ch621', 6),
('t6_2_2', 'ch622', 6),
('t6_2_3', 'ch623', 6),
('t6_2_4', 'ch624', 6),
('t6_3_1', 'ch631', 6),
('t6_3_2', 'ch632', 6),
('t6_3_3', 'ch633', 6),
('t6_3_3_1', 'ch6331', 6),
('t6_3_3_2', 'ch6332', 6),
('t6_3_4', 'ch634', 6),
('t6_3_5', 'ch635', 6),
('t6_4_1', 'ch641', 6),
('t6_4_2', 'ch642', 6),
('t6_4_3', 'ch643', 6),
('t6_5_1', 'ch651', 6),
('t6_5_2', 'ch652', 6),
('t6_5_3', 'ch653', 6),
('t6_5_4', 'ch654', 6),
('t6_5_5', 'ch655', 6),
('t7_1_1', 'ch711', 7),
('t7_1_10', 'ch7110', 7),
('t7_1_11', 'ch7111', 7),
('t7_1_12', 'ch7112', 7),
('t7_1_13', 'ch7113', 7),
('t7_1_14', 'ch7114', 7),
('t7_1_15', 'ch7115', 7),
('t7_1_16', 'ch7116', 7),
('t7_1_17', 'ch7117', 7),
('t7_1_18', 'ch7118', 7),
('t7_1_19', 'ch7119', 7),
('t7_1_2', 'ch712', 7),
('t7_1_3', 'ch713', 7),
('t7_1_4', 'ch714', 7),
('t7_1_5', 'ch715', 7),
('t7_1_6', 'ch716', 7),
('t7_1_7', 'ch717', 7),
('t7_1_8', 'ch718', 7),
('t7_1_9', 'ch719', 7),
('t7_2_1', 'ch721', 7),
('t7_3_1', 'ch731', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `data` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`data`) VALUES
('<b style=\"float:right; color:green; font-weight:400;\">Last Update : 18 Nov 2018</b><br><br>* CRITERIA 01 , 02 , 03 and 04 are live now.<br><br> * Upload the documents through the <b style=\"color:green;\"> URL Generator </b> (given in <b> Profile </b> Menu) and provide the links at relavant places.<br><br> * <b>Note</b> : Your data is saved only when you get the alert [ <b style=\"color:green;\"> Changes Saved Successfully </b> ] after clicking on <b> Save Changes </b> button.<br><br>  * <b>Note</b> : Avoid using special characters ex - { <c style=\"color:red;\"> &#38; , &#37; , &#63; , &#60; , &#62; , &#34; , &#39; </c> }.<br><br> * <b>Note</b> : If system says [ <b style=\"font-weight:100; color:red;\"> There was some problem with your data, Last changes were not saved, Try Again...!!! </b>] that means your data is not saved because you have used some <b>special character</b> in your data even in the <b> name </b> of <b> documents </b> you upload.<br><br> * It is <b> Good Practice </b> to <b> download </b> your data after you have saved it successfully by selecting the <b style=\"color:green;\"> Save my data </b> option in <b> profile </b> section.<br><br> * If you find any difficulty with the system then use the <b style=\"color:green;\"> Help-Desk </b> in <b> Profile </b> section.');

-- --------------------------------------------------------

--
-- Table structure for table `not_applicable`
--

CREATE TABLE `not_applicable` (
  `id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `img_div` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `not_applicable`
--

INSERT INTO `not_applicable` (`id`, `Username`, `section`, `img_div`) VALUES
(5, 'vcoffice', 't1_1_1', 'ch111'),
(6, 'vcoffice', 't1_1_2', 'ch112'),
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
(166, 'admin4', 't7_3_1', 'ch731');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `Username` varchar(30) NOT NULL,
  `Prog_code` varchar(30) NOT NULL DEFAULT '',
  `Prog_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`Username`, `Prog_code`, `Prog_name`) VALUES
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
('admin7', 'AD7MSC', 'MASTER OF SCIENCE'),
('Ietdavv', 'AS5A', 'MSc (Applied Mathematics with specialization in Computing and Informatics)'),
('Ietdavv', 'AS9A', 'Ph D Applied Chemistry'),
('Ietdavv', 'AS9B', 'Ph.D. Applied Mathematics'),
('Ietdavv', 'AS9C', 'Ph.D. Applied Physics'),
('Biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs'),
('Biochem', 'BC9Z', 'Ph.D'),
('Sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)'),
('Sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored\r\n)'),
('Sobiotech', 'BT5C', 'M.Sc. Genetic Engineering'),
('Sobiotech', 'BT9Z', 'M.Sc. Bioinformatics Ph.D'),
('Ietdavv', 'CE4F', 'B.E. (Computer Engineering) – Full Time'),
('Ietdavv', 'CE4P', 'B.E. (Computer Engineering) – Part Time'),
('Ietdavv', 'CE7A', 'ME (Computer Engineering with specialization in Software Engineering) – Full Time'),
('Ietdavv', 'CE7B', 'ME (Computer Engineering with specialization in Software Engineering) – Part Time'),
('Ietdavv', 'CE9Z', 'Ph D'),
('Chemsc', 'CH5A', 'M.Sc. Chemistry'),
('Chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry'),
('Chemsc', 'CH5C', 'Ph.D'),
('Socmrce', 'CM4A', 'B.Com(ATM)'),
('Socmrce', 'CM5A', 'MBA(FT) 2 Year'),
('Socmrce', 'CM5B', 'M.Com (AFC)'),
('Socmrce', 'CM5C', 'M.Com. (Bank Management)'),
('Socmrce', 'CM6A', 'MBA(FT) 5 Year'),
('Socmrce', 'CM8X', 'M.Phil.'),
('Socmrce', 'CM9Z', 'Ph.D'),
('Socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs'),
('Socsit', 'CS5C', 'Master of Science (Information Technology) 2yrs'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs'),
('Socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs'),
('Socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs'),
('Socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security) 2yrs'),
('Socsit', 'CS9Z', 'Doctorate in Philosophy - Ph.D (Computer Science)'),
('Ietdavv', 'CV4F', 'B.E. (Civil Engineering) – Full Time'),
('Ddukkdavv', 'DD2A', 'Diploma in Logistics and Supply (Cargo Management)'),
('Ddukkdavv', 'DD4A', 'B.Voc (Nutrition and Dietetics)'),
('Ddukkdavv', 'DD4B', 'B.Voc (Landscape Design)'),
('Ddukkdavv', 'DD4C', 'B.Voc (Handicraft)'),
('Ddedavv', 'DE5A', 'MBA(DDE)'),
('Sodsf', 'DS5A', 'M.B.A. (Business Analytics)'),
('Sodsf', 'DS5B', 'M.Sc. (Data Science and Analytics)'),
('Sodsf', 'DS7A', 'M.Tech. (Data Science)'),
('Sodsf', 'DS7B', 'M.Tech. (Big Data Analytics)'),
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
('Ietdavv', 'EI4F', 'B.E. (Electronics and Instrumentation Engineering)'),
('Ietdavv', 'EI4P', 'B.E. (Electronics and Instrumentation Engineering) – Part Time'),
('Ietdavv', 'EI7A', 'ME (Electronics engineering with specialization in Digital Instrumentation) – Full Time'),
('Ietdavv', 'EI7B', 'ME (Electronics engineering with specialization in Digital Instrumentation) – Part Time'),
('Ietdavv', 'EI9Z', 'Ph D'),
('Soex', 'EL5A', 'M.Sc Electronics'),
('Soex', 'EL5B', 'M.Sc Electronics and Communication'),
('Soex', 'EL7A', 'M.Tech Embedded Systems'),
('Soex', 'EL7B', 'M.Tech Spatial Information Technology'),
('Soex', 'EL7C', 'M.Tech Mobile Computing Technology'),
('Soex', 'EL9Z', 'Ph.D.'),
('Emrcdavv', 'EM5A', 'M.B.A. Media Management'),
('Emrcdavv', 'EM6A', 'M.Sc. EM'),
('Emrcdavv', 'EM9Z', 'Ph.D.'),
('Sees', 'EN5A', 'M.B.A (Energy Management) Distance'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular'),
('Sees', 'EN8X', 'M.Phil.'),
('Sees', 'EN9Z', 'Ph.D.'),
('Ietdavv', 'ET4F', 'B.E. (Electronics and Telecommunication Engineering) – Full Time'),
('Ietdavv', 'ET4P', 'B.E. (Electronics and Telecommunication Engineering) – Part Time'),
('Ietdavv', 'ET7A', 'ME (Electronics engineering with specialization in Digital Communication) – Full Time'),
('Ietdavv', 'ET7B', 'ME (Electronics engineering with specialization in Digital Communication) – Part Time'),
('Ietdavv', 'ET9Z', 'Ph D'),
('Soinstru', 'IN5A', 'M.Sc. Instrumentation'),
('Soinstru', 'IN7A', 'M.Tech.  (Instrumentation)'),
('Soinstru', 'IN7B', 'M.Tech. (IOT)'),
('Soinstru', 'IN9Z', 'Ph.D.'),
('Ietdavv', 'IT4F', 'B.E. (Information Technology)  - Full Time'),
('Ietdavv', 'IT4P', 'B.E. (Information Technology)  - Part Time'),
('Ietdavv', 'IT7A', 'ME (Information Technology with specialization in Information Security) – Full Time'),
('Ietdavv', 'IT7B', 'ME (Information Technology with specialization in Information Security) – Part Time'),
('Ietdavv', 'IT9Z', 'Ph D'),
('Doll', 'LE2A', 'Diploma in Interior Designing'),
('Doll', 'LE3A', 'PG Diploma in Population Education and Demography'),
('Doll', 'LE4A', 'B. Voc. Interior Design'),
('Doll', 'LE4B', 'B.Voc. Fashion Technology'),
('Doll', 'LE5A', 'M.A. Women Empowerment and Lifelong Learning'),
('Solib', 'LI4A', 'BLISC'),
('Solib', 'LI5A', 'MLISC'),
('Solaw', 'LL4A', 'B.A.LL.B.(Hons)'),
('Solaw', 'LL5A', 'LL.M.'),
('Solaw', 'LL8X', 'M.Phil.'),
('Solaw', 'LL9Z', 'Ph.D.'),
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
('Solang', 'LN9E', 'Ph.D.(English)'),
('Solang', 'LN9H', 'Ph.D. (Hindi)'),
('Solang', 'LN9S', 'Ph.D. (Sanskrit)'),
('Solang', 'LN9U', 'Ph.D. (Urdu)'),
('Solang', 'LN9Z', 'Ph.D. Philosophy'),
('Sols', 'LS5A', 'M.Sc. Life Sciences'),
('Sols', 'LS5B', 'M.Sc. Industrial Microbiology'),
('Sols', 'LS8X', 'M.Phil.'),
('Sols', 'LS9Z', 'Ph.D.'),
('Sjmc', 'MC4A', 'BA (Journalism)'),
('Sjmc', 'MC4B', 'BJ'),
('Sjmc', 'MC5A', 'MA'),
('Sjmc', 'MC8X', 'M.Phil.'),
('Sjmc', 'MC9Z', 'Ph.D.'),
('Ietdavv', 'ME4F', 'B.E. (Mechanical Engineering) – Full Time'),
('Ietdavv', 'ME4P', 'B.E. (Mechanical Engineering) – Part Time'),
('Ietdavv', 'ME7A', 'ME (Industrial Engineering and Management) - Full Time'),
('Ietdavv', 'ME7B', 'ME (Industrial Engineering and Management) - Part Time'),
('Ietdavv', 'ME7C', 'ME (Mechanical Engineering with specialization in Design and Thermal Engineering) – Full Time'),
('Ietdavv', 'ME7D', 'ME (Mechanical Engineering with specialization in Design and Thermal Engineering) – Part Time'),
('Ietdavv', 'ME9Z', 'Ph D'),
('Imsdavv', 'MS5A', 'MBA(FT)'),
('Imsdavv', 'MS5B', 'MBA(DM)'),
('Imsdavv', 'MS5C', 'MBA(FA) '),
('Imsdavv', 'MS5D', 'MBA(MM)'),
('Imsdavv', 'MS5E', 'MBA(HR)'),
('Imsdavv', 'MS5F', 'MBA(ECOMM)2YR'),
('Imsdavv', 'MS5G', 'MBA(HA) 2YR'),
('Imsdavv', 'MS6A', 'MBA(ECOMM)5YR'),
('Imsdavv', 'MS6B', 'MBA(HA) 5YR'),
('Imsdavv', 'MS8X', 'M.Phil.'),
('Imsdavv', 'MS9Z', 'Ph.D.'),
('Somath', 'MT5A', 'M.Sc.(Mathematics)'),
('Somath', 'MT8X', 'M.Phil.'),
('Somath', 'MT9Z', 'Ph.D.'),
('Sopedu', 'PE4A', 'B.P.E.S.'),
('Sopedu', 'PE5A', 'M.P.Ed.'),
('Sopedu', 'PE8X', 'M.Phil.'),
('Sopedu', 'PE9Z', 'Ph.D.'),
('Sophy', 'PH5A', 'M.Sc.(Physics)'),
('Sophy', 'PH5B', 'M.Sc. (Material Science)'),
('Sophy', 'PH7A', 'M.Tech. Laser Science and Applications'),
('Sophy', 'PH8X', 'M.Phil.'),
('Sophy', 'PH9Z', 'Ph.D.'),
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
('Iipsdavv', 'PS9B', 'Ph.D. Computer and IT'),
('Sopharma', 'PY4A', 'B.Pharm.'),
('Sopharma', 'PY7A', 'M.Pharm.'),
('Sopharma', 'PY9Z', 'Ph.D.'),
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
('Sostat', 'ST5A', 'M.Sc. Statistics'),
('Sostat', 'ST8X', 'M.Phil.'),
('Sostat', 'ST9Z', 'Ph.D.'),
('saif', 'TESTING1', 'TESTING NAME 1'),
('pranjal', 'TESTINGP1', 'TESTING NAME 1 NAME'),
('Soyoga', 'YG3A', 'P.G. Diploma in Yoga Therapy'),
('Soyoga', 'YG5A', 'M A (Yoga)');

-- --------------------------------------------------------

--
-- Table structure for table `superusers`
--

CREATE TABLE `superusers` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sno` int(2) NOT NULL
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
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_1_1`
--

INSERT INTO `t1_1_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('', 'Higher+education+shoulders+the+responsibility+of+inculcating+the+desirable+value+systems+amongst+the+students.+In+India%2C+the+cultural+pluralities+and+diversities+exist+and+it+is+essential+that+students+imbibe+the+appropriate+values+commensurate+with+social%2C+cultural%2C+economic+and+environmental+realities%2C+at+the+local%2C+national+and+universal+levels.+Today%92s+significant+developments+can+be+attributed+to+the+impact+of+developments+in+the+field+of+Science+and+Technology.++Physics+as+one+of+the+parts+of+basic+sciences+imparts+logical++develops+thinking+amongst+the+students.+The+department+is+running+Post+Graduate+programs+e.g.+M.Sc.+%28Physics%29%2C+M.Sc.+%28Material+Science%29%2C+M.Phil.+%28Physics%29%2C+M.Tech.+%28Lasers+and+Applications%29+which+in+relevance+to+the+the+local%2F+national+%2F+regional%2Fglobal++needs+of+human+resource+development.+The+objectives+of+the+post+graduate+programs+are+to+train+the+students+in+the+field+of+Physics+and+Laser+technology+and+update+their+knowledge+with+the+most+recent+developments+in+the+field.In+M.Sc.+%28Physics%29%2C+students+are+taught++Quantum+Mechanics%2C+Classical+Mechanics%2C+Mathematical+Physics%2C+Solid+state+Physics%2C+Electrodynamics%2C+Relativity%2C+Laser+Physics+etc.+While+in+M.Sc.+Material+Science%2C+more+emphasis+is+given+to+the+Material+Science+and+Nanomaterials.+The+students+are+also+sent+to+the+laboratories+of+international+repute+e.g.+Physical+Research+Laboratory+and+Plasma+Research+laboratory++In++M.Phil.++courses%2C+students+get+more+exposure+to+the+advanced+fields+of+nanoscience+and+nanophotonics.++They+are+encouraged+to+carry+out+research+work+for+their+project.+The+M.Tech+%28lasers+and+Applications%29+train+the+students+in+the+field+of+Applied+Optics%2C+Optical+Communication%2C+Fiber+Optics%2C+Free+electron+lasers+%2C+Semiconductor+lasers%2C+Nonlinear+Optics%2C+High+power+Electronics+and+various+other+kinds+of+lasers.+The+students+are+sent+to+Raja+Ramanna+Centre+of+Advanced+Technology+for+one+year+training.+The+department+also+runs+the+Ph.D.+program+and+the+research+work+carried+out+in+the+department+is+at+par+with+the+international+standards+of+research+which+is+also+evident+from+the+publications+in+the+Journals+of+International+repute.+The+students+nurtured+in+the+School+of+Physics+are+employed+in+various+institutions+starting+from+local+level+schools+to+international+level+laboratories.++++And+thus+meet+with+the+requirements+at+local%2F+regional%2Fnational+and+international+levels.++++++', '', '1.1'),
('admin1', 'asddv+++%5C%22%5C%22+%5C%22dksmfd%3F%3E%3C%23%24%40', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F27-10-2018_15-23-48elipsometer.pdf'),
('admin2', 'data+++%26+m-per+%3C+%3E+%3F+%23+%25+%5C%27+%5C%22i+am+govind%5C%22+send', '', 'google+%5C%27+i+am+govind%5C%27'),
('admin3', 'google+%3E+%3C+%3F+%26+%5C%22+%5C%27+testing', '', 'fjdkngkdsfnfgd'),
('biochem', 'School+of+Biochemistry+offers+M.Sc.+%28BC5A%29+and+Ph.+D.+%28BZ9A%29+Programmes.+The+M.Sc.+course+is+completed+in+two+years+involving+four+semesters+with+academic+flexibility+following+choice+based+credit+system.+The+M.Sc.+Biochemistry+curriculum+design+is+well+balanced+and+broad+based+for+its+applicability+to+other+disciplines%2C+which+require+biochemistry+background.+The+syllabus+covers+all+the+major+areas+of+biochemistry+which+includes+basic%2C+advanced+as+well+as+specialized+courses.+Knowledge+of+the+basic+core+courses%2C+like+Chemistry+of+biomolecules%2C+Cell+biology%2C+Analytical+biochemistry%2C+Metabolism+etc+develops+concepts+of+biochemistry+and+trains+the+learner+to+work+in+the+research+laboratories+and+research+and+development+sections+of+industries.+The+generic+courses%2C+like+Genetics%2C+Microbial+biochemistry%2C+Nutritional+biochemistry%2C+Physiology%2C+Clinical+biochemistry+etc+provide+the+knowledge+of+biochemistry+related+disciplines+such+as%2C+industrial+and+medicinal+fields.+The+other+core+courses+Enzymology%2C+Immunology%2C+Molecular+Biology%2C+Biotechnology+covered+in+the+curriculum+have+applicability+in+almost+all+the+research+laboratories+and+industries.+The+detailed+coverage+of+various+topics+is+being+inline+for+competitive+exams%2C+as+NET%2C+GATE%2C+SLET%2C+National+level+Examinations+for+JRF+etc.+that+benefits+students.+To+develop+soft+skill%2C+students+presents+seminar+on+research+papers.++For+research+skill+development%2C+students+join+various+national+level+institutes+for+their+research+project+work+during+final+semester.+After+successful+course+completion%2C+students+find+opportunities+to+join+research+or+serve+in+different+fields%2C+in+particular+Medical%2C+Agricultural%2C+Pharmaceutical%2C+Biological%2C+Food+Analysis+etc.+++', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F30-10-2018_13-04-07Write+up+for+DCS+QlM+1.1.1.docx'),
('Chemsc', 'Programme+outcomes+%28POs%29++++++Learning+objectives+of+School+of+Chemical+Sciences+essentially+focus+on+creative+learning+of+the+students+with+a+view+to+empower+them+with+contemporary+knowledge+domain+so+as+to+enhance+connectivity+thereof+towards+academic+and+industrial+institutions.+Programme+outcomes+basically+aim+at+incorporation+of+chemical+sciences+in+the+mindset+of+students+in+an+embedded+state.+With+such+association%2C+students+are+expected+to+improve+their+critical+thinking%2C+accommodating+both+logical+and+intuitive+approaches.+With+immense+association+of+scientific+approaches%2C+new+ideas+may+creep+in+the+mind+of+students+so+that+they+can+evolve+innovative+pathways.+Programme+specific+outcomes+%28PSOs%29+-Programme+specific+outcomes+pertain+to+exploration+of+knowledge+of+chemical+sciences+with+related+disciplines+in+particular+knowledge+of+synthetic+methods%2C+knowledge+and+application+of+analytical+techniques+with+specific+orientation+to+pharmaceutical+industries.+Course+outcomes+%28COs%29+%96++Course+outcomes+essentially+envision+diverse+aspects+of+chemical+sciences.+They+provide+due+priority+to+classification+mindset+rather+than+compartmentalization+mindset+and+interdependence+of+one+segment+over+the+other.+Consequently%2C+students+orient+themselves+as+pro-active+learners+with+high+priority+on+modern+areas+of+chemical+sciences+including+spectroscopic+techniques%2C+chromatographic+techniques+and+medicinal+chemistry%2C+thereby+enhancing+their+problem-+solving+skills.+Spectral+interpretation+indeed+is+a+unique+practice+prevalent+in+School+of+Chemical+Sciences.+Students+are+encouraged+to+adopt+GREEN+CHEMISTRY+whenever+possible+with+a+sound+objective+of+ensuring+environmentally+sustainable+approach+towards+society.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F02-11-2018_15-35-05DAVV+v12.pptx%2C+http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F02-11-2018_15-35-27DAVV+v12.pdf'),
('doll', 'Mission+statement+of+the+department+definition+for+the+department%5C%27s+distinctive+characteristics+in+terms+of+addressing+the+needs+of+the+local+society%2C+the+students+it+seeks+to+serve%2C+the+institution%5C%27s+tradition+and+value+orientations+%2C+its+vision+for+future.+Bridging+the+gap+between+formal+and+non+formal+education.+Matching+educational+content+relevant+to+the+learners+and+community+needs.+Providing+vocational+and+creative+educational+training+programs+to+generate+employment+opportunities.+Department+strives+hard+to+provide+value+based+education+and+inculcate+in+students+strong+character%2C+attitude+of+self+-+learning+creativity+etc.+to+match+the+needs+of+global+development.++', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F29-10-2018_12-35-33DID-+a-1.1.jpeg%2Chttp%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F29-10-2018_12-36-11DID-+b-1.1.jpeg.jpeg'),
('emrcdavv', 'Courses+are+sanctioned+and+approved+by+UGC%2C+New+Delhi.+At+present+more+than+255+students+are+studying+at+EMRC.+1.+M.Sc.+%28Electronic+Media%29+-+5+yrs.+Integrated+Course+%28B.Sc.+3+Yrs.+++M.Sc.+2+Yrs.%29+++++Seats%3A+50+nos.++++++++Eligibility%3A+Higher+Secondary+with+min.+50%25+of+marks+in+any+discipline.+Admission+through+Common+Entrance+Test+%28CET%292.+M.B.A.+Media+Management+%96+2+yrs.+Seats+%3A+40+nos.+++++++Eligibility+%3A+Graduation+with+minimum+50%25+of+marks+in+any+discipline.+++++++++Admission++through+Common+Entrance+Test+%28CET%293.+Ph.D.++Electronic+Media+Admission++through+Doctoral+Entrance+Test+%28DET%29-++Media+of+today+is+playing+an+outstanding+role+in+creating+and+shaping+of+public+opinion+and+strengthening+of+society.-+Entertainment+and+Media+industry+is+growing+at+a+rate+of+18%25+YOY+basis.+Hence%2C+there+is+large+demand+of+trained+media+professionals.-+Media+Course+are+designed+in+tune+with+the+local%2C+National%2C+International+and+Industrial+developmental+needs.+-+EMRC+has+well+defined+procedures+through+Ordinance+31+to+design+a+new+curriculum%2C+revise+and+amend+existing+ones.+-+The+core+areas+of+curriculum+covers+Television+Production%2C+Audio+Production%2C+Multimedia-Animation+%26+Graphics+Production%2C+Broadcast+++Journalism%2C+Advertising+%26+Public+Relations%2C+Literature+and+Dramatics%2C+Media+Management+and+Research.+-+The+programmes+are+designed+to+develop+confidence%2C+self-esteem%2C+communications+and+teamwork.+-+The+various+forms+of+media+%96+primarily+television%2C+newspapers%2C+digital+media+and+radio+%96+spread+and+disseminate+information.-+The+curriculum+is+updated+on+a+regular+frequency+based+on+the+feedback+received+from+Alumni%2C+Teachers%2C+Industry+Professional+and+other+stakeholders.+-+Departmental+committee+review+and+update+syllabus+every+year.-+The+system+is+adaptable+for+all+new+practices+coming+in+the+field+of+Media+and+Entertainment.+For+example+new+courses+like+Digital+Marketing%2C+Television+Programming%2C+Creative+Dramatics+and+Voice+acting+are+added+to+syllabus.-+Mandatory+courses+like+Communicative+Hindi+and+English+for+better+communication+skills+-+Mandatory+industrial+training%2Finternship+ensures+that+students+are+exposed+to+the+Industry+environment.+-+Compulsory+Master+Level+Research+dissertation.-+Courses+like+Media+and+Society%2C+Media+and+Politics%2C+Media+and+Literature%2C+Media+and+Psychology+for+better+understanding+of+the+society.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_12-22-1200Sample+Document.pdf'),
('iipsdavv', 'The+Institute+revised++syllabus+of+offered+programms+timely+as+per+industry+requirements.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F13-11-2018_13-17-18test+file.docx'),
('imsdavv', 'Curriculum+is+the+essential+ingredient+of+all+programs+at+IMS%2C+DAVV.+All+aspects+like+teaching%2C+learning+and+evaluation+or+research+and+development%2C+infrastructure+and+learning+resources%2C+student+activities+and+support+system+revolve+around+it.+The+Learning+Outcomes+for+each+program+are+designed+so+as+to+be+appropriate+to+suite+the+local+as+well+as+National+developmental+needs.+The+learning+objectives+and+course+outcome+for+each+course+are+well+defined.+The+curriculum+is+revised+on+the+basis+of+feedback+received+from+-Faculty-Employers-Alumni-StudentsThere+is+ample+flexibility+to+revise+the+curriculum+as+all+the+programs+at+IMS+are+governed+by+ordinance+31+of+the+university+which+grants+flexibility+at+department+level.++The+syllabus+review+workshop+was+conducted+in+2013%2C+2017+and+2018+where+major+structural+changes+were+incorporated+in+each+syllabus.+In+the+years+2014%2C+2015+and+2016+minor+changes+were+made.+Each+program+is+designed+to+include+elements+which+can+promote+entrepreneurship%2C+employability+and+soft+skills+among+students.+Case+Studies%2C+Role+plays%2C+industry+visits%2C+seminars+projects+etc+are+essential+part+of+curriculum.+Apart+from+this+%93Activity+Clubs%94+conduct+several+activities+which+help+in+enhancing+skills+and+subject+knowledge+of+MBA+students.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F15-11-2018_11-51-07IMS_Curriculum+Revision+Wokshop+2013.pdf%2C+http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F15-11-2018_11-51-45IMS_Curr'),
('pranjal', 'saif%40%23%26%28%29', '', 'oogle.cm'),
('Sees', 'The+school+has+started+its+M.+Tech.+program+in+Energy+Management+in+the+year+1990.+Theprogram+has+been+duly+approved+by+the+AICTE%2C+New+Delhi.The+power+crisis+in+India+is+nothing+new+but+slowly+an+emerging+sector+islikely+to+put+an+end+to+this+long-dragging+issue+of+constant+power+cuts.+And+with+the+emergenceof+a+new+sector+comes+new+career+opportunities.+Green+energy+sector%2C+comprising+solar%2C+wind%2Chydel+and+bio-mass+power+generation%2C+is+becoming+a+lucrative+career+opportunity.+To+fill+up+thisgap+School+of+Energy+%26+Environmental+Studies+has+developed+a+two-year+M.Tech+Program+inEnergy+Management+area+that+is+flexible+and+can+be+self-paced.+The+curriculum+covers+subjectssuch+as+Solar+Energy%2C+New+%26+Renewable+Energy%2C+Engineering+Thermodynamics+%26+HeatTransfer%2C+Water+and+Waste+Water%2C+Air+and+Noise+Pollution%2C+Thermal+%26+Electrical+EnergyManagement%2C+Efficient+Lighting%2C+Green+Building%2C+Bio+and+Solid+Waste+Management%2C+Sustainabledevelopment.+The+capstone+of+the+program+is+a+project+work+in+last+semester+in+which+studentsapply+the+acquired+theoretical+knowledge+in+Energy+management+to+solve+real-world+Energy+%26Environment+problems+for+the+government+and+public+sector+.This+course+also+introducesstudents+to+various+forms+of+energy+and+their+importance+in+our+lives+and+for+the+development+ofour+nation.Objectives%3A+Energy+management+is+an+interdisciplinary+field+of+engineering+that+focuses+onthe+following+objectives%3A%26%2361623%3B+To+provide+trained+manpower+with+strong+engineering+and+R+%26+D+capabilities+in+theenergy+and+environment+related+areas.%26%2361623%3B+To+provide+Auditors%2F+Managers%2FConsultants+for+Energy+and+Environment.%26%2361623%3B+To+develop+and+promote+technologies+which+are+closer+to+natural+processes.%26%2361623%3B+To+provide+testing%2C+calibration+and+third+party+certification+facilities+to+industries+andother+organizations+in+the+field+of+Energy+and+Environment.%26%2361623%3B+To+train+manpower+for+developing+projects+specifically+related+to+Clean+DevelopmentMechanism+%28CDM%29.%26%2361623%3B+To+undertake+R%26+D+and+consultancy+work+in+the+energy+and+environment+related+fields.%26%2361623%3B+To+introduce+to+the+industry+various+environment+friendly+energy+efficient+technologiesand+provide+help+in+implementing+energy+conservation+measures.Program+Outcomes+%28POs%29%26%2361623%3B+Understood+and+acquired+fundamental+knowledge+on+the+science+of+energy+and+on+boththe+conventional+and+non-conventional+energy+technologies.%26%2361623%3B+Ability+for+higher+studies%2C+policy+making%2C+engineering+and+consultancy+services+in+field+ofenergy+management.Specific+Program+Outcomes+%28SPOs%29%26%2361623%3B+Acquire+the+expertise+and+skills+needed+for+the+energy+monitoring%2C+auditing+andmanagement%2C+and+for+the+development%2C+implementation%2C+and+maintenance+and+auditing+ofEnergy+Management+Systems.%26%2361623%3B+Become+capable+of+analysis+and+design+of+energy+conversion+systems.Course+OutcomesGaining+appropriate+knowledge+on+principles+of+operation%2C+construction+andworking+of+solar+photovoltaic%2C+solar+thermal+devices+and+other+renewable+energytechnologies.+Ability+to+design+system+for+appropriate+applications+in+the+field.+Becomingaware+of+the+energy+crisis%2C+and+of+environmental+and+sustainability+concerns+associated+withthe+energy+management.+Becoming+aware+of+the+Energy+Conservation+Act%2C+2001%2C+and+of+thelegal+energy+requirements+applicable+to+the+routinely+used+thermal+and+electrical+energysystems.+Exposure+to+the+most+used+energy+planning+and+management+softwares.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F29-10-2018_14-12-15pos-1.1.1.pdf'),
('sobiotech', 'Program+specific+outcomes+%28PSOs%29M.Sc.+Biotechnology1.+Students+will+gain+and+apply+knowledge+of+Biotechnology+comprised+of+science+and+Engineering+components+to+solve+problems+related+to+field+of+biotechnology.2.++Students+will+be+able+to+design%2C+perform+experiments%2C+analyze+and+interpret+data+for+investigating+complex+problems+in+the+area+of+biotechnology+M.Sc.+Genetic+Engineering3.+Graduates+will+be+able+to+decide+and+apply+appropriate+tools+and+techniques+in+biotechnological+manipulation.4.+Graduates+will+be+able+to+justify+societal%2C+health%2C+safety+and+legal+issues+and+understand+his+responsibilities+in+biotechnological+engineering+practices.5.+Graduates+will+be+able+to+understand+the+need+and+impact+of+biotechnological+solutions+on+environment+and+societal+context+keeping+in+view+need+for+sustainable+solution.M.Sc.+Bioinformatics6.+Graduates+will+be+able+to+undertake+any+responsibility+as+an+individual+and+as+a+team+in+a+multidisciplinary+%2F+cross+cultural+environment.7.+Students+will+develop+oral+and+written+communication+skills.8.+Skilled+manpower+development+to+cater+the+need+of+software+development+and+to+conduct+Bioinformatics+research.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F02-11-2018_11-23-39Criteria+1.docx'),
('Socsit', 'Programme+outcomes+are+consistent+with+those+required+by+accrediting+bodies+such+as+the+All+India+Council+for+Technology+and+Engineering+%28AICTE%29+and+National+Assessment+and+Accreditation+Council+%28NAAC%29.+Courses+are+designed+in+various+programmes+to+develop+socially+responsible%2C+morally+strong%2C+critical+thinker%2C+and+intellectually+competent+graduates.%5CnThe+SCSIT+Programmes+Outcomes+are%3A%5Cn%2A+education+necessary+to+understand+the+impact+of+CS+%2F+IT+in+a+global+and+societal+context.%5Cn%2A+an+understanding+of+professional+and+ethical+responsibility.%5Cn%2A+an+ability+to+apply+knowledge+of+mathematics%2C+science%2C+and+IT+in+their+future+endeavors.%5Cn%2A+an+ability+to+design+a+system%2C+component+or+process+to+meet+desired+needs.%5Cn%2A+an+ability+to+work+in+team.%5Cn%2A+an+ability+to+communicate+effectively.%5CnAll+the+courses+are+designed+with+focus+on+employability%2C+innovation+and+research+pursuit+needs+of+higher+education.+Courses+are+in+high+demand+in+the+industry+and+educational+institutions.+Syllabus+revisions+or+the+introduction+of+new+courses+are+done+as+per+industry+requirement.+%5CnA+course+on+Professional+%26+social+issues+in+IT+is+a+part+of+all+PG+programmes.+The+aim+is+to+develop+professional+values+in+students+bundled+with+social%2C+legal%2C+ethical+and+business+sensitivity+and+making+them+understand+their+roles+and+responsibilities+in+professional+career+ethically.%5CnEnglish+Language+course+in+BCA+and+Communication+skills+in+all+PG+programmes+are+important+for+building+effective+communication+skills+in+students.%5Cn+The+core+courses+of+computer+science+in+all+UG+and+PG+programmes+are+meant+to+develop+technical+and+cognitive+abilities+in+all+the+students.+%5CnThe+curriculum+of+MBA+%28CM%29+programme+contains+specialization+in+ERP.+MCA+programme+courses+such+as%2C+Cloud+computing+and+Artificial+Intelligence+are+necessary+to+cope+with+the+rapid+technological+changes+in+IT+world.+IoT+and+Data+Science+are+introduced+in+M.Tech.+programme+to+acquire+knowledge+and+apply+them+to+analytical+problems+and+applications.%5CnInformation+and+computing+services+are+provided+over+the+Internet.+Cloud+computing+models+everything+%28hardware%2C+software%2C+platform%2C+storage%29+as+service.%5Cn+Course+on+Internet+of+Things+enables+to+learn+the+technology+that+is+trend+of+future+networking.+IoT+applications+are+enabling+Smart+City+initiatives+worldwide.%5Cn+Smarter+lightning%2C+smart+houses%2C+wearable%E2%80%99s+to+healthcare+are+fields+that+will+completely+transform+the+way+people+carry+out+their+everyday+tasks.+%5CnIndustries%2C+such+as+social+media%2C+insurance%2C+e-commerce%2C+transport%2C+government%2C+banking%2C+and+telecommunications+are+producing+massive+amounts+of+data+now+days.+Data+science+is+concerned+with+the+acquisition%2C+storage%2C+retrieval%2C+processing+and+finally+the+conversion+of+data+into+knowledge+where+the+quantum+of+data+is+very+large.+The+knowledge+helps+to+reform+strategies+and+working+plans+of+the+related+industries.%5CnThe+proliferation+of+information+on+Internet+leads+to+maintain+confidentiality%2C+authenticity+and+privacy+of+the+information+and+security+of+the+information+source.+A+course+on+Network+Security+is+designed+for+M.Tech.+%28NM%26IS%29+students+to+develop+network+system+security+skills.+%5CnThe+students+of+M.Tech.+final+year+take+up+research+based+projects+within+the+department+or+internship+in+the+industries+providing+hands-on+live+project.+The+outcome+of+the+research+based+projects+often+results+in+research+paper.', '', '1+SM'),
('sodsf', 'The+School+of+Future+Studies+and+Planning+was+offering+following+programmes+in+2014%3A1.+Ph.D.2.+M.Tech.+in+Future+Studies+and+Planning3.+M.Tech.+in+Systems+Management.+The+University+has+changed+the+name+of+the+school+from+School+of+Future+Studies+and+Planning+to+School+of+Data+Science+and+Forecasting+through+its+notification+dated+11%2F02%2F2016.+The+school+modified+its+existing+M.Tech.+programmes.+It+was+proposed+to+re-name+both+programmes+as+per+new+discipline+of+Data+Science.+The+Co-ordination+committee+of+the+M.P.+Universities+has+approved+re-naming+of+the+programmes+is+its+93rd+meeting+held+on+25%2F10%2F2017.+The+same+was+notified+by+the+University+through+its+notification+dated+23%2F12%2F2017.+The+syllabus+of+both+re-named+M.Tech.+programmes+was+developed+and+approved+by+the+Departmental+committee+on+____________++and+Board+of+Studies+on+______________.+The+modified+syllabus+contains+needs%2C+objectives+and+outcomes+of+the+programme%2C+programme+specific+outcomes%2C+and+course+outcomes.The+school+also+developed+new+academic+programmes+namely+M.B.A.+in+Business+Analytics+and+M.Sc.+in+Data+Science+and+Analytics.+Both+programmes+have+been+approved+by+the+Executive+Council+in+its+meeting+held+on+26%2F08%2F2016+and+notified+on+01%2F12%2F2017.+The+syllabi+of+these+programmes+was+also+developed+and+approved+by+the+Departmental+committee+on+____________++and+Board+of+Studies+on+______________.+The+school+also+started+a+new+M.Tech.+programme+in+Data+Science+for+working+Executives+after+getting+approval+of+the+Executive+Council.+The+programme+provides+learning+flexibility+to+the+working+executives.+The+learners+can+take+the+courses+as+per+their+available+time+frame.+The+detailed+syllabus+of+all+these+new+programmes+include+needs%2C+objectives+and+outcomes+of+the+programme%2C+programme+specific+outcomes%2C+and+course+outcomes.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F30-10-2018_12-58-422016-02-11+Change+in+School+Name.jpg'),
('soecon', 'MA%28ECO%29%3A-+This+Programme+is+relevant+as+it+gives+strong+linkages+to+students+with+econoimy+of+nation.+Tribal+Ecoomics%2C+Welfare+Econoics%2C+Development+Economics%2C+Mathematics+for+economic%2C+Econometrics+.+Students+know+about+the+economy+of+the+nation+and+contribute+in+academics%2C+research+and+public+services+such+as+PSC%2C+IAS+%2CIRS+etc.+++++++++MBA%28BE%29%3A-+This++Programme+is+designed+for+gaining+enterpreneurial+skills+with+blend+of+economics+and+management+.+Students+are+given+knowledge+of+Econometrics%2C+Business+Forecasting%2C+Strategic+Management+%2C+Research+Methodolgy%2C+SAPM%2CStrategic++HRM%2C++etc.+Students+are+also+given+the+choice+of+Marketing+and+Finance+Specilaisation+to+perform+in+the+market+s+per+their+expertise.+MBA%28IB%29+%3A-+This+Programme+is+specially+designed+to+train+students+in+the+field+of+export+and+import+.+Students+are+given+the+knowledge+of+Import+Management%2C+Export+procedure+and+documentation%2C+International+Business+finance%2C+Overseas+Project+management+%2C+International+logistics+%26+Supply+chain+Management%2C+International+Marketing%2C+Consumer+behaviour+etc+to+show+their+skills+in+the+field+of+International+trade+operations.+MBA%28FS%29+%3A-+This+programme+is+designed+specifiaclly+to+meet+the+financial+aspects+.+Students+are+gaining+knowledge+of+finance+related+subjects+such+as+Strategic+Financial+Management%2C+Banking+Services+and+Operations%2CTreasury+and+Risk+Management+%2C+Insurance+na+Bank+Management+%2C+financial+Markets+and+enviornment%2C+International+Forex+Management+etc+to+utilise+their+skills+in+the+financial+aspects+of+the+organisations.+++M.Phil+%26Ph.D%3A-+These++programmes+have+special+focus+on+Research+and+Academics.+Students+gain+practical+knowledge+through+field+work+experiences+.+', '', 'S1'),
('soedu', 'Curricula+of+School+of+Education+are+developed+keeping+in+view+the+local%2C+national%2C+regional+and+global+developmental+needs.+The+local+needs+are+addressed+in+B.Ed.+and+M.Ed.+courses+by+including+various+papers+in+perspective%2C+tool+and+elective+generic+courses.+Like+in+B.Ed.+and+M.Ed.+courses+in+Internship+program+various+community+based+projects+and+social+awareness+programs+are+organised+by+students+to+identify+their+needs+and+appropriate+measures+are+taken.+In+order+to+keep+pace+with+the+regional+and+global+needs+the+curricula+are+revised+as+per+NCFTE+2009+to+include+emerging+technology+driven+methodologies+in+school+subjects.+The+research+areas+chosen+by+the+candidates+are+having+relevance+with+current+problems+and+needs+of+the+society.+For+example+Inclusive+education%2C+Gender+sensitization%2C+Environmental+Education%2C+ICT+based+applications+for+benefit+of+society+.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F31-10-2018_16-14-11minutes+of+meeting++BOS.pdf'),
('soex', 'The+School+focuses+in+the+broad+area+of+Embedded+Systems.+The+broad+content+of+syllabus+and+the+course+scheme+envisions+creation+of+a+pool+of+trained+technical+manpower+which+shall+cater+to+emerging+hardware+technology+and+to+provide+industry+a+workforce+that+is+adequately+skilled%2C+ethically+oriented+and+professionally+competent.+These+areas+also+resonate+with+the+mission+and+vision+of+our+department.The+School+runs+five+Post+graduate+programmes-+Three+M+Tech+and+Two+M+Sc+in+Electronics+and+the+programme+outcome+of+the+various+programmes+is+directed+towards+achievement+of+similar+goals+albeit+at+different+levels+of+accuracy+and+maturity.+In+a+nutshell%2C+the+Programme++Outcome+can+be+elaborated+as%3A1.Engineering+knowledge%3A+An+ability+to+apply+the+knowledge+of+science%2C+mathematics%2C+engineering+principles+for+developing+problems+solving+attitude.+2.+Problem+analysis%3A+An+ability+to+analyze%2C+develop+and+implement+solutions+built+on+courses+such+as+system+design%2C+signal+processing%2C+embedded+processors+and+physical+electronics.3.Modern+tool+usage%3A+To+develop+programming+skills+for+tools+such+as+simulation%2C+synthesis%2C+verification+and+algorithm+approach+at+chip+level%2C+core+competencies+in+semiconductor%2C+ARM+for+design+and+implementation.4.+Conduct+investigations+of+complex+problems%3A+To+familiarize+with+industry+relevant+goals+and+practices+as+a+final+project+and+compile+the+findings+from+therein%2C+alongside+defending+the+analysis+of+the+achieved+solutionThe+programme+specific+outcomes+for+all+the+courses+remain+focused+on+indepth+study+of+variety+of+Microcontrollers%2C+Interfacing+issue+solving%2C+Learning+of+database+and+signal+processing+Concepts+and+adapt+themselves+to+new+research+issues.The+course+outcome+essentially+points+towards%3AStudents+are+able+to7A6112%3A+Describe+++the+differences+between+the+general+computing+system+and+the+embedded+++++system%2C+also+recognize+the+classification+of+embedded+systems..%3A+Become+aware+of++the+architecture+of++the+ATOM+processor+and+its+programming+aspects+%28assembly++Level%29%3A+Become+aware+of+interrupts%2C+hyper+threading+and+software+optimization.%3A+Design+real+time+embedded+systems+using+the+concepts+of+RTOS.%3A+Analyze+various+examples+of+embedded+systems+based+on+ATOM+processor', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F05-11-2018_14-54-24PO.docx'),
('soinstru', 'We+have+several+discussions+with+the+industries%2C+alumni%2C+students%2C+Research+centres+nearby+Indore+such+as+RRCAT%2C+Indore%2C+UGC+DAE+CSR+Indore+for+the+upgradation+and+modification+of+the+course.++On+the+demand+of+the+industry+and+various+suggestions+specially+by+the+alumni+stayed+abroad++to+start++a+new+M.Tech.+course+in+Internet+of+Things++%28IOT%29.++', '', '1'),
('sopedu', 'i.The+graduates+and+postgraduates+of+the+courses+have+a+wide+range+of+opportunity+in+different+fields.+Post+Graduate+and+Ph.Ds+are+qualified+to+be+appointed+as+Teachers+and+Sports+officer+in+Universities+Colleges+and+Physical+Education+teachers+in+Schools.ii.Other+than+these+academic+opportunities+they+will+also+be+qualified+for+appointment+as+District+Sports+Officer+%2F+Regional+sports+officer+and+other+administrative+post+in+sports+department+in+Central+and+State+undertakings.+iii.These+students+are+also+eligible+to+join+different+Forces%2C+for+examples%2C+Army%2C+Police%2C+B.S.F+etc.iv.They+are+also+eligible+to+undertake+the+higher+studies+i.e.+M.Phill%2C+Ph.D+and+D.Lit.+in+the+field+of+Physical+Education+and+Sports+Sciences.v.Pass+out+students+can+also+become+health+%2F+fitness+experts+in+health+clubs+and+habitability+industry+and+they+can+start+their+own+health+clubs.+', '', 'http://uid.dauniv.ac.in/NAC/profile/docs/20-10-2018_16-18-20M.P.Ed. College New Scheme wef 2016-17.pdf'),
('sophy', 'Higher+education+shoulders+the+responsibility+of+inculcating+the+desirable+value+systems+amongst+the+students.+In+India%2C+the+cultural+pluralities+and+diversities+exist+and+it+is+essential+that+students+imbibe+the+appropriate+values+commensurate+with+social%2C+cultural%2C+economic+and+environmental+realities%2C+at+the+local%2C+national+and+universal+levels.+Today%E2%80%99s+significant+developments+can+be+attributed+to+the+impact+of+developments+in+the+field+of+Science+and+Technology.++Physics+as+one+of+the+parts+of+basic+sciences+imparts+logical+++thinking+amongst+the+students.+The+department+is+running+Post+Graduate+programs+e.g.+M.Sc.+%28Physics%29%2C+M.Sc.+%28Physics+Material+Science%29%2C+M.Phil.+%28Physics%29%2C+M.Tech.+%28Lasers+and+Applications%29+which+are+relevant+to+the+local%2F+national+%2F+regional%2Fglobal+needs+of+human+resource+development.+The+objectives+of+the+post+graduate+programs+are+to+train+the+students+in+the+field+of+Physics+and+Laser+technology+and+update+their+knowledge+with+the+most+recent+developments+in+the+field.In+M.Sc.+%28Physics%29%2C+students+are+taught+Quantum+Mechanics%2C+Classical+Mechanics%2C+Mathematical+Physics%2C+Solid+state+Physics%2C+Electrodynamics%2C+Relativity%2C+Laser+Physics+etc.+While+in+M.Sc.+Material+Science%2C+more+emphasis+is+given+to+the+Material+Science+and+Nanomaterials.+The+students+are+also+sent+to+the+laboratories+of+international+repute+e.g.+Physical+Research+Laboratory+and+Plasma+Research+laboratory.++In++M.Phil.++courses%2C+students+get+more+exposure+to+the+advanced+fields+of+nanoscience+and+nanophotonics.++They+are+encouraged+to+carry+out+research+work+for+their+project.+The+M.Tech+%28lasers+and+Applications%29+train+the+students+in+the+field+of+Applied+Optics%2C+Optical+Communication%2C+Fiber+Optics%2C+Free+electron+lasers+%2C+Semiconductor+lasers%2C+Nonlinear+Optics%2C+High+power+Electronics+and+various+other+kinds+of+lasers.+The+students+are+sent+to+Raja+Ramanna+Centre+of+Advanced+Technology+for+one+year+training.+The+department+also+runs+the+Ph.D.+program+and+the+research+work+carried+out+in+the+department+is+at+par+with+the+international+standards+of+research+which+is+also+evident+from+the+publications+in+the+Journals+of+International+repute.+The+students+nurtured+in+the+School+of+Physics+are+employed+in+various+institutions+starting+from+local+level+schools+to+international+level+laboratories+and+thus+meet+with+the+requirements+at+local%2F+regional%2Fnational+and+international+levels.++++++', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_14-53-271.1.1.docx'),
('sostat', 'We+have+adopted+the+U+G+C+syllabus+in+totality+as+this+includes+all+the+relevant+areas+of+employ+ability+in+Govt.+and+Non-+Govt.+organizations+in+statistics.+Students+are+well+trained+in+the+recent+research+trends+in+statistics+with+various+in+house+projects+in+M.Sc.+III++and+IV+semester%2C+where+the+students+learn+to+conduct+surveys+and+data+analysis+through+different+statistical+soft+wares+.+The+School+provides+the+students+%2C+S+P+S+S+25th+version+in+the++Computer+lab+to+carryout+the+researches+and+prepare+the+presentations.+The+students+of+the+school+goes+to+other+Schools%2C+under+their+Generic+Courses+Programs++to+learn+different+application+oriented+soft+wares+%2C+like+PYTHON%2C+Machine+Learning+etc.++to+upgrade+their+ability+for+Multi+-+nationals.++++++++++', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F22-10-2018_15-20-59M.SC+Syllabus+stat.+2015-16+Choice+Based+Credit+SystemCore+Courses_2.pdf'),
('soyoga', '+', '', '+');

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

--
-- Dumping data for table `t1_1_2`
--

INSERT INTO `t1_1_2` (`Username`, `Prog_code`, `Prog_name`, `Year`, `Percent`, `Link`, `id_time`) VALUES
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'July 16 - June 17', 20, 'SCANNED COPY ', 'idid1540141050555'),
('imsdavv', 'MS5E', 'MBA(HR)', 'July 16 - June 17', 30, 'SCANNED COPY ', 'idid1540141025995'),
('imsdavv', 'MS5D', 'MBA(MM)', 'July 16 - June 17', 25, 'SCANNED COPY ', 'idid1540141003742'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'July 16 - June 17', 25, 'SCANNED COPY ', 'idid1540140960102'),
('imsdavv', 'MS5A', 'MBA(FT)', 'July 16 - June 17', 40, 'SCANNED COPY ', 'idid1540140926910'),
('imsdavv', 'MS6B', 'MBA(HA) 5YR', 'July 14 - June 15', 5, 'SCANNED COPY ', 'idid1540140841654'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'July 14 - June 15', 5, 'SCANNED COPY ', 'idid1540140704125'),
('imsdavv', 'MS5A', 'MBA(FT)', 'July 14 - June 15', 5, 'SCANNED COPY ', 'idid1540140410476'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'July 14 - June 15', 5, 'SCANNED COPY ', 'idid1540140453642'),
('imsdavv', 'MS5D', 'MBA(MM)', 'July 14 - June 15', 5, 'SCANNED COPY ', 'idid1540140474292'),
('imsdavv', 'MS5E', 'MBA(HR)', 'July 14 - June 15', 5, 'SCANNED COPY ', 'idid1540140493026'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'July 14 - June 15', 5, 'SCANNED COPY ', 'idid1540140510657'),
('imsdavv', 'MS5B', 'MBA(DM)', 'July 14 - June 15', 5, 'SCANNED COPY ', 'idid1540140543096'),
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'July 14 - June 15', 5, 'SCANNED COPY ', 'idid1540140563928'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'July 15 - June 16', 30, 'http://www.math.dauniv.ac.in/syllabus.php', 'idid1540465679066'),
('somath', 'MT8X', 'M.Phil.', 'July 14 - June 15', 30, 'http://www.dauniv.ac.in/rules/AmendmentsOrdinance21.pdf', 'idid1540465730250'),
('sopedu', 'PE9Z', 'Ph.D.', 'July 17 - June 18', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/25-10-2018_16-55-32Ph.D._Scheme_and_Syllabus 01.01.17 (Latest).pdf', 'idid1540467063201'),
('sopedu', 'PE4A', 'B.P.E.S.', 'Feb 14 - June 14', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/25-10-2018_16-48-121.1.2 SOPE BPES.pdf', 'ididididid1540466415380'),
('sopedu', 'PE5A', 'M.P.Ed.', 'July 15 - June 16', 80, 'http://uid.dauniv.ac.in/NAC/profile/docs/25-10-2018_16-49-361.1.2 M_P_Ed_Scheme_Syllabus_UTD (New 2016-17).pdf', 'idididid1540466637052'),
('sopedu', 'PE8X', 'M.Phil.', 'July 17 - June 18', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/25-10-2018_16-55-32Ph.D._Scheme_and_Syllabus 01.01.17 (Latest).pdf', 'ididid1540466761150'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'July 16 - June 17', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-10-551.1.2-Syllabus_M.Sc. PharmaChem I and III Sem 2016.pdf', 'ididididid1540478539892'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'July 16 - June 17', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_22-50-501.1.2-Syllabus_M.Sc. Chemistry I and III Sem 2016.pdf', 'ididididid1540478518709'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-09-261.1.2-Syllabus_M.Sc. PharmaChem II and IV Sem 2017.pdf', 'ididididid1540478429567'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_22-51-411.1.2-Syllabus_M.Sc. Chemistry II and IV Sem 2017.pdf', 'ididididid1540478448661'),
('pranjal', 'TESTINGP1', 'TESTING NAME 1 NAME', 'Feb 14 - June 14', 87, 'com.com()&^', 'id1540625477156'),
('doll', 'LE2A', 'Diploma in Interior Designing', 'July 15 - June 16', 50, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_12-40-01DID- a-1.1.jpeg', 'id1540842607490'),
('admin1', 'AD1BSC', 'BACHELOR OF SCIENCE', 'July 16 - June 17', 60, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_15-47-18Ratnesh_Gupta_3.pdf', 'idid1540808458466'),
('admin1', 'AD1BSC', 'BACHELOR OF SCIENCE', 'Feb 14 - June 14', 80, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_15-45-58ratnesh_gupta_1.pdf', 'idid1540808366218'),
('admin1', 'AD1MSC', 'MASTER OF SCIENCE', 'July 14 - June 15', 70, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_15-46-15ratnesh_gupta_2.pdf', 'idid1540808371579'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)&#65533;Regular', 'July 16 - June 17', 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_16-10-5316-18 (2).pdf', 'ididid1540809592092'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)&#65533;Regular', 'July 15 - June 16', 30, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_16-03-3115-17 (1).pdf', 'ididid1540809032093'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)&#65533;Regular', 'July 17 - June 18', 4.76, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_16-17-0317-19.pdf', 'idid1540810264001'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)&#65533;Regular', 'July 15 - June 16', 6.19, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_15-39-5514-16-SYLLABUS.pdf', 'ididid1540808021301'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'July 15 - June 16', 30, 'http://www.biotech.dauniv.ac.in/index.html#', 'idid1540925015474'),
('sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 'July 15 - June 16', 20, 'http://www.biotech.dauniv.ac.in/index.html#', 'idid1540924999648'),
('sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 'July 15 - June 16', 20, 'http://www.biotech.dauniv.ac.in/index.html#', 'idid1540924979663'),
('socmrce', 'CM6A', 'MBA(FT) 5 Year', 'July 17 - June 18', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_13-33-31MBA_FT__5_Yrs.Syll.pdf', 'idid1541104533712'),
('socmrce', 'CM5A', 'MBA(FT) 2 Year', 'July 17 - June 18', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-12-462_years_syllabus.pdf', 'ididid1540937719182'),
('socmrce', 'CM5B', 'M.Com (AFC)', 'July 17 - June 18', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-14-05M.Com_AFC_ NEW Final _Syllabus.doc Raj.pdf', 'ididid1540937797028'),
('socmrce', 'CM5C', 'M.Com. (Bank Management)', 'July 17 - June 18', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-15-09M.Com(BM) Final syl..pdf', 'ididid1540937863146'),
('socmrce', 'CM4A', 'B.Com(ATM)', 'July 17 - June 18', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-17-13B.Com_ATM_.pdf', 'ididid1540937992920'),
('socmrce', 'CM8X', 'M.Phil.', 'July 17 - June 18', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-16-29M.Phil. Syl.pdf', 'ididid1540937917686'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'July 18 - June 19', 5, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_16-35-55Deptal min 14.6.18.jpg', 'idid1540897026212'),
('biochem', 'BC9Z', 'Ph.D', 'July 16 - June 17', 10, 'http:http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_11-51-20PhD Course Work Syllabus - 2017.docx//uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_16-33-20BOS min 23.9.16.jpg', 'idid1540896922044'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'July 15 - June 16', 5, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_16-28-00Deptal min 1.7.15.jpg', 'idid1540896442682'),
('soex', 'EL7C', 'M.Tech Mobile Computing Technology', 'July 15 - June 16', 5, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-56-55MCT_Revision_2014to15.pdf', 'id1540971408861'),
('soex', 'EL7C', 'M.Tech Mobile Computing Technology', 'July 16 - June 17', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-55-34MCT_Revision_2015to16.pdf', 'id1540971145215'),
('soex', 'EL7C', 'M.Tech Mobile Computing Technology', 'July 14 - June 15', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-52-10MCT_Revision_2013to14.pdf', 'id1540970715228'),
('soex', 'EL7C', 'M.Tech Mobile Computing Technology', 'July 17 - June 18', 15, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_13-00-12MCT_Revision_2016to17.pdf', 'id1540971603422'),
('chemsc', 'CH5C', 'Ph.D', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_22-38-121.1.2 Syllabus for Ph.D. Course work 2016.doc', 'ididididid1540478320547'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'July 16 - June 17', 23, 's1', 'idid1540969859834'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'July 14 - June 15', 25, 's1', 'idid1540978028447'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'July 14 - June 15', 25, 's1', 'idid1540978025695'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'July 14 - June 15', 20, 's1', 'idid1540978002983'),
('soecon', 'EC5A', 'M.A. (Economics)', 'July 14 - June 15', 20, 's1', 'idid1540977876761'),
('socmrce', 'CM9Z', 'Ph.D', 'July 17 - June 18', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-17-49Ph.D. Syllabus.pdf', 'ididid1540938034855'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'July 16 - June 17', 30, 's3', 'idid1540970590324'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'July 16 - June 17', 35, 's2', 'idid1540970533973'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'July 16 - June 17', 23, 's1', 'idid1540969859834'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'July 14 - June 15', 25, 's1', 'idid1540978028447'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'July 14 - June 15', 25, 's1', 'idid1540978025695'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'July 14 - June 15', 20, 's1', 'idid1540978002983'),
('soecon', 'EC5A', 'M.A. (Economics)', 'July 14 - June 15', 20, 's1', 'idid1540977876761'),
('sobiotech', 'BT9Z', 'M.Sc. Bioinformatics&#65533;Ph.D', 'July 17 - June 18', 80, 'http://www.biotech.dauniv.ac.in/#', 'id1541183112493'),
('soedu', 'ED4A', 'B.Ed.', 'July 15 - June 16', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-39-08B.Ed. Course Structure of 2015-17.docx', 'id1541143446197'),
('soedu', 'ED4A', 'B.Ed.', 'July 17 - June 18', 25, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-39-50B.ED course restructure 2017-19.docx', 'id1541143491508'),
('soedu', 'ED4A', 'B.Ed.', 'July 18 - June 19', 15, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-40-47B.ED. course structure 2018-20.docx', 'id1541143532484'),
('soedu', 'ED5A', 'M.Ed.', 'July 15 - June 16', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-41-37M.ED. course structure 2015-17.docx', 'id1541143589407'),
('soedu', 'ED5A', 'M.Ed.', 'July 17 - June 18', 25, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-42-28M.ED. course structure 2017-19.docx', 'id1541143639503'),
('soedu', 'ED5A', 'M.Ed.', 'July 18 - June 19', 15, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-42-59M.ED. course structure 2018-20.docx', 'id1541143690490'),
('soedu', 'ED8X', 'M.Phil.', 'July 17 - June 18', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-54-47MPHIL & PHD.jpeg', 'id1541144147797'),
('soedu', 'ED9Z', 'Ph.D.', 'July 17 - June 18', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-54-47MPHIL & PHD.jpeg', 'id1541144425748'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'July 16 - June 17', 35, 's2', 'idid1540970533973'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'July 16 - June 17', 30, 's3', 'idid1540970590324'),
('soecon', 'EC5A', 'M.A. (Economics)', 'July 14 - June 15', 20, 's1', 'idid1540977876761'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'July 14 - June 15', 20, 's1', 'idid1540978002983'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'July 14 - June 15', 25, 's1', 'idid1540978025695'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'July 14 - June 15', 25, 's1', 'idid1540978028447'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'July 16 - June 17', 23, 's1', 'idid1540969859834'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'July 16 - June 17', 35, 's2', 'idid1540970533973'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'July 16 - June 17', 30, 's3', 'idid1540970590324'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'July 18 - June 19', 15, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228231469'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'July 17 - June 18', 25, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228219277'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'Feb 14 - June 14', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228019229'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'July 14 - June 15', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228066685'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'July 15 - June 16', 18, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228088637'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'July 16 - June 17', 25, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228103213'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'July 17 - June 18', 16, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228122204'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'July 18 - June 19', 15, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228134229'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'July 14 - June 15', 12, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228175621'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'Feb 14 - June 14', 15, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228162477'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'July 15 - June 16', 18, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228187749'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'July 16 - June 17', 22, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'ididid1541228205717'),
('sopharma', 'PY4A', 'B.Pharm.', 'July 14 - June 15', 15, 'http://uid.dauniv.ac.in/NAC/profile/docs/10-11-2018_17-46-58B.PHARM. SYLLABUS OLD AND CBCS.pdf', 'id1541851696277'),
('sopharma', 'PY4A', 'B.Pharm.', 'July 15 - June 16', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/10-11-2018_17-47-36B.PHARM. SYLLABUS CBCS AND PCI.pdf', 'id1541852369465'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'July 18 - June 19', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-17-481.1.2-Syllabus_M.Sc. PharmaChem I-IV Sem 2018.pdf', 'ididididid1540478725315'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'July 14 - June 15', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-26-191.1.2-M.Sc. Pharma Chemistry  2014.pdf', 'ididididid1540478623017'),
('chemsc', 'CH5C', 'Ph.D', 'July 16 - June 17', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_22-38-121.1.2 Syllabus for Ph.D. Course work 2016.doc', 'ididididid1540478604377'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'July 14 - June 15', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-06-361.1.2-M.Sc. Chemistry  2014.pdf', 'ididididid1540478653463'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'July 18 - June 19', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-00-101.1.2-M.Sc. Chemistry I-IV Sem 2018.pdf', 'ididididid1540478704252'),
('imsdavv', 'MS5B', 'MBA(DM)', 'July 16 - June 17', 20, 'SCANNED COPY ', 'idid1540141095013'),
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'July 16 - June 17', 20, 'SCANNED COPY ', 'idid1540141114717'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'July 16 - June 17', 20, 'SCANNED COPY ', 'idid1540141135829'),
('imsdavv', 'MS6B', 'MBA(HA) 5YR', 'July 16 - June 17', 20, 'SCANNED COPY ', 'idid1540141168334'),
('iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs', 'July 18 - June 19', 20, 'Nil', 'idid1542219847622'),
('iipsdavv', 'PS5B', 'MBA (APR)', 'July 18 - June 19', 29.5, 'Nil', 'id1542269021766'),
('soinstru', 'IN7A', 'M.Tech.  (Instrumentation)', 'Feb 14 - June 14', 10, '1', 'id1542270982849'),
('soinstru', 'IN7A', 'M.Tech.  (Instrumentation)', 'July 14 - June 15', 20, '2', 'id1542270995361'),
('soinstru', 'IN7A', 'M.Tech.  (Instrumentation)', 'July 15 - June 16', 25, '3', 'id1542271019544'),
('soinstru', 'IN7A', 'M.Tech.  (Instrumentation)', 'July 16 - June 17', 20, '4', 'id1542271036025'),
('soinstru', 'IN7A', 'M.Tech.  (Instrumentation)', 'July 17 - June 18', 15, '5', 'id1542271048136'),
('soinstru', 'IN9Z', 'Ph.D.', 'July 17 - June 18', 40, '6', 'id1542271063838'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'July 17 - June 18', 10, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541054049353'),
('socsit', 'CS9Z', 'Doctorate in Philosophy - Ph.D (Computer Science)', 'July 17 - June 18', 25, 'http://www.dauniv.ac.in/notices/Ordinance No. 18-Ph.D. -Revised.pdf', 'ididid1541054230830'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'July 16 - June 17', 5, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541054044599'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'July 14 - June 15', 5, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541054040397'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'Feb 14 - June 14', 5, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541054034647'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'July 17 - June 18', 8, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541053899267'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'July 16 - June 17', 10, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541053894643'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'July 14 - June 15', 5, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541053886808'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'Feb 14 - June 14', 5, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541053833163'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'July 17 - June 18', 10, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541053494240'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'July 16 - June 17', 10, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541053491370'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'July 14 - June 15', 10, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541053485674'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'Feb 14 - June 14', 10, 'http://www.scs.dauniv.ac.in/CourseSchemes.php', 'ididid1541053440628'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'July 17 - June 18', 5, 'http://www.scs.dauniv.ac.in/Previous_Student_kit.php', 'ididid1541053307672'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'July 16 - June 17', 5, 'http://www.scs.dauniv.ac.in/Previous_Student_kit.php', 'ididid1541053302203'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'July 15 - June 16', 10, 'http://www.scs.dauniv.ac.in/Previous_Student_kit.php', 'ididid1541053296484'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'July 14 - June 15', 10, 'http://www.scs.dauniv.ac.in/Previous_Student_kit.php', 'ididid1541053292578'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'Feb 14 - June 14', 10, 'http://www.scs.dauniv.ac.in/Previous_Student_kit.php', 'ididid1541053284868'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'Feb 14 - June 14', 5, 'http://www.scs.dauniv.ac.in/Previous_Student_kit.php', 'ididid1541053267649'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'Feb 14 - June 14', 5, 'http://www.scs.dauniv.ac.in/Previous_Student_kit.php', 'ididid1541053204058'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'July 16 - June 17', 5, 'http://www.scs.dauniv.ac.in/Previous_Student_kit.php', 'ididid1541053170844'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'Feb 14 - June 14', 5, 'http://www.scs.dauniv.ac.in/Previous_Student_kit.php', 'ididid1541053037985'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'July 16 - June 17', 5, 'http://www.scs.dauniv.ac.in/Previous_Student_kit.php', 'idididid1540976089916'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'July 17 - June 18', 5, 'http://www.scs.dauniv.ac.in/Previous_Student_kit.php', 'ididid1541053014088'),
('soyoga', 'YG3A', 'P.G. Diploma in Yoga Therapy', 'July 16 - June 17', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-52-45guest house order.docx', 'id1542443389540'),
('sophy', 'PH5A', 'M.Sc.(Physics)', 'Feb 14 - June 14', 5, 'http://uid.dauniv.ahttp://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_13-13-11combined.pdfc.in/NAC/profile/docs/15-11-2018_12-46-12SPR class.pdf', 'ididididididid1541855344818'),
('sophy', 'PH5B', 'M.Sc. (Material Science)', 'Feb 14 - June 14', 2, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_13-13-52combined.pdf', 'ididididididid1541856176868'),
('sophy', 'PH7A', 'M.Tech. Laser Science & Applications', 'Feb 14 - June 14', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-55-27mtech2014 to 2020.pdf', 'ididididididid1541856200386'),
('sophy', 'PH8X', 'M.Phil.', 'Feb 14 - June 14', 5, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_13-14-28combined.pdf', 'ididididididid1541856232380'),
('sophy', 'PH9Z', 'Ph.D.', '', 1, 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_14-11-36Ph.D course work 2014-2018.pdf', 'id1542492920065'),
('soss', 'SS1A', 'Certificate in Labour Law and Personnel Management', 'July 18 - June 19', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_16-03-03MSW 2014 -1.pdf', 'ididididid1542318772859'),
('soss', 'SS1B', 'Certificate in Consumer Psychology and Advertising', 'July 18 - June 19', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542318783766'),
('soss', 'SS1C', 'Certificate in Guidance and Counselling', 'July 18 - June 19', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542318803309'),
('soss', 'SS1D', 'Certificate in Human Rights', 'July 18 - June 19', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542318818173'),
('soss', 'SS2A', 'Diploma in Consumer Psychology and Advertising', 'July 18 - June 19', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542318833173'),
('soss', 'SS3A', 'P.G. Diploma in Guidance and Counselling', 'July 18 - June 19', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542318849765'),
('soss', 'SS3B', 'P.G. Diploma in Human Rights', 'July 18 - June 19', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542318865205'),
('soss', 'SS3C', 'G Diploma in Labour Law and Personnel Management', 'July 18 - June 19', 15, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542318884405'),
('soss', 'SS4A', 'Bachelor of Social Work (B.S.W.)', 'July 18 - June 19', 20, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542318906485'),
('soss', 'SS5A', 'Master of Social Work (M.S.W.)', 'July 18 - June 19', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542318923589'),
('soss', 'SS5B', 'M.A. Sociology', 'July 18 - June 19', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542318939189'),
('soss', 'SS5C', 'M.A. Political Science', 'July 18 - June 19', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319003076'),
('soss', 'SS5D', 'M.A. Clinical Psychology', 'July 18 - June 19', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319019677'),
('soss', 'SS5E', 'M.B.A. Rural Development', 'July 18 - June 19', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319035436'),
('soss', 'SS5F', 'M.B.A. Public administration and Policy', 'July 18 - June 19', 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319049532'),
('soss', 'SS8A', 'M.Phil. Geography', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319065989'),
('soss', 'SS8B', 'M.Phil. History', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319102012'),
('soss', 'SS8C', 'M.Phil. Home Science', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319120468'),
('soss', 'SS8D', 'M.Phil. Political Science', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319142948'),
('soss', 'SS8E', 'M.Phil. Psychology', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319157157'),
('soss', 'SS8f', 'M.Phil. Social Work', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319189605'),
('soss', 'SS8G', 'M.Phil. Sociology', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319208437'),
('soss', 'SS9A', 'Ph.D. Geography', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319231893'),
('soss', 'SS9B', 'Ph.D. History', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319248564'),
('soss', 'SS9C', 'Ph.D.. Home Science', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319261549'),
('soss', 'SS9D', 'Ph.D. Political Science', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319287261'),
('soss', 'SS9E', 'Ph.D. Psychology', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319302788'),
('soss', 'SS9F', 'Ph.D. Social Work', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319321796'),
('soss', 'SS9G', 'Ph.D. Sociology', 'July 17 - June 18', 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_15-10-59revised courses.xlsx', 'ididididid1542319334020'),
('solang', 'LN5A', 'M.A. Functional Hindi, Translation and Literature', 'July 15 - June 16', 15, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_14-26-15M.A. sylabus Hindi hindi 1', 'ididididid1542270211292'),
('solang', 'LN1A', 'Certificate in French', 'Feb 14 - June 14', 5, 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_15-51-08french ordinance with syllabus.pdf', 'ididid1542450181089'),
('solang', 'LN1B', 'Certificate in German', 'Feb 14 - June 14', 5, 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_18-06-56germnan syllabus pdf.pdf', 'idid1542458314280'),
('solang', 'LN5C', 'M.A. Sanskrit Jyotish', 'July 15 - June 16', 15, 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_18-08-41m.A. sanskrit jyotish syllabus word.pdf', 'id1542458469975');

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

--
-- Dumping data for table `t1_1_3`
--

INSERT INTO `t1_1_3` (`Username`, `Prog_code`, `Prog_name`, `Course_code`, `Course_name`, `Description`, `Year`, `Link`, `id_time`) VALUES
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
('sopedu', 'PE5A', 'M.P.Ed.', 'MPEd 403', 'Sports Management OR Dissertation', 'Dissertation develops research and academic quality of students', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-30-101.2.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540530967373'),
('admin2', 'AD2BSC', 'BACHELOR OF SCIENCE', 'BHAICHARA', 'RAMRAM', '\' < > ?  # ! @ \"', 'July 15 - June 16', 'FDFLDLF', 'idid1540562902093'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'BT BI 571', 'Seminar and Communication Skills', ' Skill development', 'Feb 14 - June 14', 'http://www.biotech.dauniv.ac.in/index.html#', 'id1541183956682'),
('pranjal', 'TESTINGP1', 'TESTING NAME 1 NAME', 'TESTING123', 'TESTING COURSE NAME', 'saif ^&%&*()', 'July 15 - June 16', 'hsdjkl', 'id1540625546639'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'BT BI 651', 'Pharmacogenomics', 'Employability', 'Feb 14 - June 14', 'http://www.biotech.dauniv.ac.in/index.html#', 'id1541183926751'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'BT BI 641', 'Metabolic Engineering and System Biology ', 'Employability', 'Feb 14 - June 14', 'http://www.biotech.dauniv.ac.in/index.html#', 'idid1541183749323'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-803', 'Solar Thermal and Photo - Voltaic Laboratory 0+0+3 48 II SPS ', 'Skill development', 'July 14 - June 15', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_13-49-591.1.3-EN-803-lab.docx', 'idid1540974200919'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-802', 'Biomass and Environmental laboratory 0 0 3 48 III SPS/RC ', 'Skill development', 'July 14 - June 15', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_13-48-011.1.3-EN-802 lab.docx', 'idid1540974073560'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment 3 0 0 48 I', 'Skill development/ Entrepreneurship', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-45-171.1.3-EN-711.docx', 'ididid1540970167191'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-808', 'Major Project', 'Employability/ Entrepreneurship', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-40-281.3.4- Student field projectinternships- List of studentss undertaking these projectsinternships.docx', 'ididid1540970070008'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-709', 'Green Building Technologies 2 1 0 48 III SPS', 'Employability/ Entrepreneurship', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-35-591.1.3 -EN-709.docx', 'ididid1540969783821'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-707', 'Energy Management (Electrical Systems) ', 'Employability/ Entrepreneurship', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-31-381.1.3-EN-707.docx', 'ididid1540969486591'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-708', 'Efficient Lighting: Sources, Systems and Design Aspects 2 1 0 48 III SPS ergy Management (', 'Employability/ Entrepreneurship', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-34-071.1.3-EN-708.docx', 'ididid1540969633252'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-706', 'Energy Management (Thermal)', 'Employability/ Entrepreneurship', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-28-241.1.3-EN-706.docx', 'ididid1540969348025'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-712', 'Energy Modeling and Project Management 2 1 0 48 II RNS', 'Skill development/ Entrepreneurship', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-46-101.1.3-EN-712.docx', 'ididid1540970461134'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-713', 'Electrical Power Generation, Instrumentation, Measurements, Transmission and Distribution 2 ', 'Skill development/ Entrepreneurship', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-48-341.1.3-EN-713.docx', 'ididid1540970508782'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-801', 'Heat Transfer and Energy Conservation Laboratory 0 0 3 48 I RNS', 'Skill development', 'July 14 - June 15', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_13-46-011.1.3-EN-801 lab.docx', 'idid1540973787286'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-704', 'Water and Waste Water: Pollution & Control Technologies', 'Employability/ Entrepreneurshi', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-27-021.1.3-En-704.docx', 'ididid1540969292172'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-701', 'Solar Energy ', 'Employability/ Entrepreneurshi', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-25-541.1.3-EN-701.docx', 'ididid1540969207503'),
('admin3', 'AD3BSC', 'BACHELOR OF SCIENCE', 'andandSS:--and', 'aNDcOLON ', 'ab sab batayein', 'July 15 - June 16', 'Maang lena baad me', 'id1540975345379'),
('doll', 'LE2A', 'Diploma in Interior Designing', '401/413', 'Basic Design', 'Skill Development/ Entrepreneurship', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_17-08-11DID- a-1.1.jpeg', 'id1541031514523'),
('doll', 'LE4A', 'B. Voc. Interior Design', '101', 'Basic Design', 'Skill Development/ Entrepreneurship', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_17-10-33Interior Design- Skill Subjects.docx', 'id1541031576355'),
('doll', 'LE4B', 'B.Voc. Fashion Technology', 'FT-101', 'Advance pattern making', 'Skill Development/ Entrepreneurs', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_17-13-16B.Voc I Sem.doc', 'id1541031794655'),
('doll', 'LE4B', 'B.Voc. Fashion Technology', 'FT- 301', 'Advance Garment Construction', 'Skill Development/ Entrepreneurs', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_17-14-10B.Voc II Sem.doc', 'id1541031868562'),
('doll', 'LE4B', 'B.Voc. Fashion Technology', 'FT-401', 'Advance Garment Construction-I', 'Skill Development/ Entrepreneurs', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_17-15-01B.Voc III Sem.doc', 'id1541031921703'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-804', 'Energy & Environment Software Application', 'Skill development', 'July 14 - June 15', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_13-52-161.1.3-EN-804-lab.docx', 'idid1540974322892'),
('Sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'EN-804', 'Energy Environment Software Application', 'Skill development', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_13-52-161.1.3-EN-804-lab.docx', 'id1541056954069'),
('socmrce', 'CM5C', 'M.Com. (Bank Management)', 'MBM - 2021', 'Communication skill for Bankers', 'Conducted one day workshop to enhance communication skills', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-22-35M.Com(BM) 2021.pdf', 'id1541111047496'),
('socmrce', 'CM5C', 'M.Com. (Bank Management)', 'MBM - 2051', 'HRM in Banks', 'Conducted one day seminar on HRM', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-23-27M.Com(BM) 2051.pdf', 'id1541111169314'),
('socmrce', 'CM5C', 'M.Com. (Bank Management)', 'MBM - 3061', 'E-Banking (Including Mobile Banking)', 'Conducted workshop on M-banking, E-banking system', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-24-04M.Com(BM) 3061.pdf', 'id1541111212097'),
('socmrce', 'CM5B', 'M.Com (AFC)', 'MAFC - 2091', 'Personality Development', 'Conducted mock interview and PD session', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-24-54M.Com(AFC) 2091.pdf', 'id1541111256453'),
('socmrce', 'CM5B', 'M.Com (AFC)', 'MAFC - 3061', 'E-Business and AIS', 'Conducted case writing workshop on E-business', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-25-28M.Com(AFC) 3061.pdf', 'id1541111297720'),
('socmrce', 'CM4A', 'B.Com(ATM)', 'BCM - 3110', 'Business Communication and report writing', 'Conducted workshop on resume writing,business communication letters', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-26-45B.Com(ATM) 3110.pdf', 'id1541111332973'),
('socmrce', 'CM4A', 'B.Com(ATM)', 'BCM - 4610', 'E-commerce', 'Conducted seminar types of E-commerce', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-27-40B.Com(ATM) 4610.pdf', 'id1541111415555'),
('socmrce', 'CM4A', 'B.Com(ATM)', 'BCM - 3510', 'Human resources management', 'Conducted workshop on HRM', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-28-46B.Com(ATM) 3510.pdf', 'id1541111462477'),
('socmrce', 'CM4A', 'B.Com(ATM)', 'BCM - 5510', 'Entrepreneurship', 'Conducted symposium on entrepreneurship', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-29-29B.Com(ATM) 5510.pdf', 'id1541111529225'),
('socmrce', 'CM6A', 'MBA(FT) 5 Year', 'MFT - 5302', 'Human resources management', 'Conducted workshop on HR operation', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-30-29MBA(FT) 5 Yrs. 5302.pdf', 'id1541111580024'),
('socmrce', 'CM6A', 'MBA(FT) 5 Year', 'MFT - 5303', 'Export-Import procedure and documentation', 'Conducted seminar on EXIM', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-31-14MBA(FT) 5 Yrs. 5303.pdf', 'id1541111633529'),
('socmrce', 'CM5A', 'MBA(FT) 2 Year', 'MFT - 2105', 'Export-Import policy, procedure and documentation', 'Conducted workshop on EXIM', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-32-01MBA(FT) 2 YRs 2105.pdf', 'id1541111683234'),
('socmrce', 'CM5A', 'MBA(FT) 2 Year', 'MFT - 2206', 'Global business communication and public relation', 'Conducted workshop on global business communication', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-32-45MBA(FT) 2 Yrs 2206.pdf', 'id1541111724317'),
('socmrce', 'CM5A', 'MBA(FT) 2 Year', 'MFT - 2208', 'Personality Development', 'Conducted seminar on PD traits', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-33-26MBA(FT) 2 Yrs. 2208.pdf', 'id1541111772353'),
('socmrce', 'CM5A', 'MBA(FT) 2 Year', 'MFT - 2305', 'International human resource management and organizational behavior', 'Conducted seminar on HR planning and execution', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-34-06MBA(FT) 2 Yrs. 2305.pdf', 'id1541111809070'),
('socmrce', 'CM5A', 'MBA(FT) 2 Year', 'MFT - 2405', 'International logistics and supply chain management', 'Conducted workshop on Cargo operation', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-37-44MBA(FT) 2 Yrs. 2405.pdf', 'id1541111851353'),
('sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 'BT GE 551', 'Seminar and Communication Skills ', 'Entrepreneurship', 'Feb 14 - June 14', 'http://www.biotech.dauniv.ac.in/index.html#', 'idid1541183724197'),
('sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 'BT MB 621', 'Microbiology and Industrial Applications', ' Entrepreneurship', 'Feb 14 - June 14', 'http://www.biotech.dauniv.ac.in/index.html#', 'idididid1540925191761'),
('sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 'BT MB 551', 'Seminar and Communication Skills', ' Skill development', 'Feb 14 - June 14', 'http://www.biotech.dauniv.ac.in/index.html#', 'idididid1540925205875'),
('sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 'BT GE 631', 'Microbial Technology', 'Entrepreneurship', 'Feb 14 - June 14', 'http://www.biotech.dauniv.ac.in/index.html#', 'idid1541183695443'),
('sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 'BT GE 661', 'Pharmacogenomics', 'Employability', 'Feb 14 - June 14', 'http://www.biotech.dauniv.ac.in/index.html#', 'idid1541183708558'),
('sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 'BT MB 661b', 'Pharmacogenomics', 'Employability', 'Feb 14 - June 14', 'http://www.biotech.dauniv.ac.in/index.html#', 'idididid1540925128566'),
('soedu', 'ED4A', 'B.Ed.', '543', 'Information and communication Technology in Education', 'Basic computer skill development ', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-39-53ICT.docx', 'id1541146957000'),
('soedu', 'ED4A', 'B.Ed.', '536', 'EPC-4 Creative Expression Skills', 'practice of Poster making, Storytelling, Debate, Recitation of Poems and Ex-tempore,  Mono Acting, Drama, / NukkadNatak, Mime ', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-03CREATIVE expression skill.docx', 'id1541146599528'),
('soedu', 'ED4A', 'B.Ed.', '535', 'School Internship', 'Lesson plan designing and presentation, conduction of co-curricular activities, Teachers observation and record keeping', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-30-25Internship.docx', 'id1541146357349'),
('soedu', 'ED4A', 'B.Ed.', '527', 'EPC-3 Environment Based Project', 'Project conduction on environmental based problem and awareness', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-26-41Envronment based project.docx', 'id1541146156890'),
('soedu', 'ED4A', 'B.Ed.', '526', 'EPC-2 Arts and Aesthetics in Education', 'Creation of craft material, gardening and embroidery and needle work', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-23-27Art and Aesthetics.docx', 'id1541145782149'),
('soedu', 'ED4A', 'B.Ed.', '524', 'Models of Teaching', 'Lesson plan design and practice on models of teaching', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-15-45Models of teaching.docx', 'id1541145237028'),
('soedu', 'ED4A', 'B.Ed.', '515', 'Development of Teaching Skill', 'Designing of lesson plan on teaching skills and practice', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-17-15515 Micro Teaching 2015-17.docx', 'id1541145693836'),
('soedu', 'ED4A', 'B.Ed.', '517', 'EPC-I Reading and Reflecting', 'Reading of text, literature and policy document and practice critical and creative thinking', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-06-07Reading and Reflecting.docx', 'id1541145003777'),
('soedu', 'ED4A', 'B.Ed.', '516', 'School Experience', 'Office work, Record and Register maintenance and assessment', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-03-32School Experience.docx', 'id1541144458532'),
('soedu', 'ED4A', 'B.Ed.', '545', 'EPC-5 Physical Education and Yoga', 'Practice of games and aasana', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_14-17-17Physical education and yoga.docx', 'id1541148675500'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'T101', 'Sample Document', 'Video Editing, Cinematography', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'id1541228361357'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'TEM101', 'Sample Document', 'Script Writing, Digital Media', 'July 14 - June 15', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'id1541228414565'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'BC5A 3.8', '', 'Soft Skill', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-45-25MSc 18-20.jpg', 'id1541227036803'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'BC5A 1.6', 'Lab work related to courses taught ', 'Practical Skill', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-45-25MSc 18-20.jpg', 'id1541228161457'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'BC5A 2.7 ', '', 'Practical Skill', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-45-25MSc 18-20.jpg', 'id1541228202490'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'BC5A 3.7 ', '', 'Practical Skill', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-45-25MSc 18-20.jpg', 'id1541228234277'),
('Soecon', 'EC5D', 'M.B.A. (IB)', '917SF/SG', 'French/German (Soft Skill)', 'aaaaaa', 'Feb 14 - June 14', 's15', 'id1542104897945'),
('iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs', 'IM - 717FB', 'Financial Planning and Wealth Management', 'Case study, interpretation of live data,  financial planning for an individual etc ', 'Feb 14 - June 14', 'Nil', 'id1542219891160'),
('Soecon', 'EC5C', 'M.B.A. (FS)', '738G', 'Entreprenuership (Elective Generic)', 'This subject focus to develop enterpreneurial  skills and give knowledge about various promotional schemes of government for the enterpreneurs', 'Feb 14 - June 14', 's14', 'idid1542095369667'),
('Soecon', 'EC5C', 'M.B.A. (FS)', '732C', 'Strategic Financial Management ( Core )', 'The aim here is to teach students decision making process at different levels in organisation related to stratgies of financial management to prepare them for business world ', 'Feb 14 - June 14', 's13', 'idid1542095236812'),
('Soecon', 'EC5C', 'M.B.A. (FS)', '726C', 'Banking Service operations (core)', 'This is specially designed paper for imparting knowledge of banks to help students understand about banking operations to build their carrers ', 'Feb 14 - June 14', 's12', 'idid1542095119580'),
('Soecon', 'EC5C', 'M.B.A. (FS)', '716A', 'IT for Managers (Ability Enhancement)', 'Here students are well trained for the different softwares to be ', 'Feb 14 - June 14', 's11', 'idid1542094727992'),
('Soecon', 'EC5B', 'M.B.A. (BE)', '816A', 'IT for Managers (Ability Enhancement)', 'Here students are well trained for the different softwares to be ', 'Feb 14 - June 14', 's10', 'idid1542093429578'),
('Soecon', 'EC5B', 'M.B.A. (BE)', '843A', 'Commodity Derivative and Price Risk Management (Ability Enhancement)', 'Students having finance specialisation are given the practical knowledge of stock market working ', 'Feb 14 - June 14', 's9', 'idid1542093343137'),
('Soecon', 'EC5B', 'M.B.A. (BE)', '846P', 'MRP (Project Work)', 'Students mandatorily have to theough project work to gain experiences about the organisational working and understanding ', 'Feb 14 - June 14', 's8', 'idid1542093260633'),
('Soecon', 'EC5B', 'M.B.A. (BE)', '839P', 'Summer Training Report Submission (Project Work)', 'Compulsory summer training of 45 days has to be done by the students to understand the working enviornment of the corporate world , which in turn help them in their job search', 'Feb 14 - June 14', 's7', 'idid1542093105604'),
('Soecon', 'EC5B', 'M.B.A. (BE)', '817S', 'Business Communication and Personality Development (Soft Skill)', 'Along with basic knowledge here students are trained to present and act professionally in the corporate world ', 'Feb 14 - June 14', 's6', 'idid1542093031925'),
('Soecon', 'EC5A', 'M.A. (Economics)', '227A', 'Computer Application (Ability Enhancement)', 'Advanced computer knowledge given to students to compete technically in the corporate world ', 'Feb 14 - June 14', 's5', 'idid1542092967285'),
('Soecon', 'EC5A', 'M.A. (Economics)', '226SF/SG', 'French/German (Soft skills)', 'This is an extra language provided to the students to have opportunity in the international trade as well as learning', 'Feb 14 - June 14', 's4', 'ididid1542092629246'),
('Soecon', 'EC5A', 'M.A. (Economics)', '216S', 'Communication and personality development (soft skills)', 'This subject enhances the communicative capability of the students and at the same time try to build confidence among the srudents to face the external opportunities ', 'Feb 14 - June 14', 's3', 'ididid1542092516110'),
('Soecon', 'EC5A', 'M.A. (Economics)', '246P', 'Dissertation   viva ', 'Practical training in the field of research to develop analytical and research aptitude among the students ', 'Feb 14 - June 14', 's2', 'ididid1542092443255'),
('Soecon', 'EC5A', 'M.A. (Economics)', '238P', 'Term Paper or summer internship', 'Summer training in Any profit or nonprofit organisation to understand the practical aspect of ecomnomics applicability', 'Feb 14 - June 14', 's1', 'ididid1542092366168'),
('Soecon', 'EC5A', 'M.A. (Economics)', '226SF/SG', 'French/German (Soft skills)', 'This is an extra language provided to the students to have opportunity in the international trade as well as learning', 'Feb 14 - June 14', 's4', 'idid1542092629246'),
('Soecon', 'EC5A', 'M.A. (Economics)', '246P', 'Dissertation   viva ', 'Practical training in the field of research to develop analytical and research aptitude among the students ', 'Feb 14 - June 14', 's2', 'idid1542092443255'),
('Soecon', 'EC5A', 'M.A. (Economics)', '216S', 'Communication and personality development (soft skills)', 'This subject enhances the communicative capability of the students and at the same time try to build confidence among the srudents to face the external opportunities ', 'Feb 14 - June 14', 's3', 'idid1542092516110'),
('Soecon', 'EC5A', 'M.A. (Economics)', '238P', 'Term Paper or summer internship', 'Summer training in Any profit or nonprofit organisation to understand the practical aspect of ecomnomics applicability', 'Feb 14 - June 14', 's1', 'idid1542092366168'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-306', 'Polymers', 'Training related to polymer industries', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-04-32Syllabus_M.Sc.  Chemistry I &III sem .pdf 2016.pdf', 'ididid1540622879650'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-401', 'Analytical Chemistry ', 'QC & QA oriented industrial training', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-06-10Syllabus Chemistry II and IV Sem   2017 CBCS F.doc', 'ididid1540623004289'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'MPC-305', 'Advanced Medicinal Chemistry ', 'Learning towards development of medicines for pharma industries', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-05-33Syllabus_M.Sc  Pharmaceutical Chemistry I & III sem .pdf16.pdf', 'ididid1540622795005'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-301', 'Molecular  Spectroscopy ', 'Structural interpretation of unknown compounds', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-04-32Syllabus_M.Sc.  Chemistry I &III sem .pdf 2016.pdf', 'ididid1540622670894'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-204', 'Chemistry of Drugs', 'Imparting learning experiences towards entrepreneurship', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-01-08SyllabusChemistryIIandIVSem2017CBCS F.pdf', 'idididid1540554259713'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-205', 'Computer Applications', 'Hands on experience to develop skill leading to employability', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-01-08SyllabusChemistryIIandIVSem2017CBCS F.pdf', 'idididid1540553920536'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-206', 'Computer Programming', 'Hands on experience to develop skill leading to employability', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-01-08SyllabusChemistryIIandIVSem2017CBCS F.pdf', 'idididid1540554226187'),
('chemsc', 'CH5C', 'Ph.D', 'CHEM- 103', 'Advanced Course: Interpretation of Spectra', 'Characterization studies', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-12-45New Microsoft Office Word Document.docx', 'ididid1540623181903'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-306', 'Polymers', 'Training related to polymer industries', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-04-32Syllabus_M.Sc.  Chemistry I &III sem .pdf 2016.pdf', 'idididid1540622879650'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-401', 'Analytical Chemistry ', 'QC & QA oriented industrial training', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-06-10Syllabus Chemistry II and IV Sem   2017 CBCS F.doc', 'idididid1540623004289'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'MPC-305', 'Advanced Medicinal Chemistry ', 'Learning towards development of medicines for pharma industries', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-05-33Syllabus_M.Sc  Pharmaceutical Chemistry I & III sem .pdf16.pdf', 'idididid1540622795005'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-301', 'Molecular  Spectroscopy ', 'Structural interpretation of unknown compounds', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-04-32Syllabus_M.Sc.  Chemistry I &III sem .pdf 2016.pdf', 'idididid1540622670894'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-204', 'Chemistry of Drugs', 'Imparting learning experiences towards entrepreneurship', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-01-08SyllabusChemistryIIandIVSem2017CBCS F.pdf', 'ididididid1540554259713'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-205', 'Computer Applications', 'Hands on experience to develop skill leading to employability', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-01-08SyllabusChemistryIIandIVSem2017CBCS F.pdf', 'ididididid1540553920536'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-206', 'Computer Programming', 'Hands on experience to develop skill leading to employability', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-01-08SyllabusChemistryIIandIVSem2017CBCS F.pdf', 'ididididid1540554226187'),
('chemsc', 'CH5C', 'Ph.D', 'CHEM- 103', 'Advanced Course: Interpretation of Spectra', 'Characterization studies', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_13-12-45New Microsoft Office Word Document.docx', 'idididid1540623181903'),
('imsdavv', 'MS5A', 'MBA(FT)', 'FT 101C', 'FUNDAMENTALS OF MANAGEMENT', 'Designing Hypothetical Organisation and Roles', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-12-56MBA(FT) 101C.pdf', 'ididid1542264268424'),
('imsdavv', 'MS5A', 'MBA(FT)', 'FT 104 C', 'BUSINESS ETHICS AND MANAGEMENT BY INDIAN VALUES', 'Student Conefrence on Learning Management from Indian Scriptures and Workshop on Corporate Issues by Experts', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-10-22MBA(FT) 104C.pdf', 'ididididid1540141248292'),
('imsdavv', 'MS5A', 'MBA(FT)', 'FT 301 C', 'Entrepreneurship and New Ventures', 'Case Study, Projects, Internship', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-04-14MBA(FT) 301.pdf', 'ididididid1540141304436'),
('imsdavv', 'MS5D', 'MBA(MM)', 'MM 101 C', 'Fundamental Of Management', 'Rading Biogrpahies of Successful Business Leaders, Short Films', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-25-56MBA(MM)101C.pdf', 'idid1542265074867'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'MB - 301', 'J2EE Programming', 'Live examples of web applications', 'July 17 - June 18', 'scanned copy ', 'id1542265650458'),
('soss', 'SS1A', 'Certificate in Labour Law and Personnel Management', 'LLPM(C)', 'Certificate in Labour Law and Personnel Management', '85', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542395779768'),
('soss', 'SS1B', 'Certificate in Consumer Psychology and Advertising', 'CPA(C)', 'Certificate in Consumer Psychology and Advertising', '85', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396079618'),
('soss', 'SS1C', 'Certificate in Guidance and Counselling', 'GandC(C)', 'Certificate in Guidance and Counselling', '85', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396099436'),
('soss', 'SS1D', 'Certificate in Human Rights', 'HRs(C)', 'Certificate in Human Rights', '85', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396114538'),
('soss', 'SS2A', 'Diploma in Consumer Psychology and Advertising', 'DCPandA', 'Diploma in Consumer Psychology and Advertising', '85', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396138500'),
('soss', 'SS3A', 'P.G. Diploma in Guidance and Counselling', 'PGDGC', 'P.G. Diploma in Guidance and Counselling', '90', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396156338'),
('soss', 'SS3B', 'P.G. Diploma in Human Rights', 'PGDHRs', 'P.G. Diploma in Human Rights', '75', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396173529'),
('soss', 'SS3C', 'G Diploma in Labour Law and Personnel Management', 'PGDLLPM', 'P.G. Diploma in Labour Law and Personnel Management', '75', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396193371'),
('soss', 'SS4A', 'Bachelor of Social Work (B.S.W.)', 'B.S.W', 'Bachelor of Social Work', '75', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396208145'),
('soss', 'SS5A', 'Master of Social Work (M.S.W.)', 'M.S.W.', 'Master of Social Work', '90', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396222106'),
('soss', 'SS5B', 'M.A. Sociology', 'MASOC', 'M.A. Sociology', '80', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396245244'),
('soss', 'SS5C', 'M.A. Political Science', 'MAPS', 'M.A. Political Science', '85', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396261714'),
('soss', 'SS5D', 'M.A. Clinical Psychology', 'MACP', 'M.A. Clinical Psychology', '90', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396283346'),
('soss', 'SS5E', 'M.B.A. Rural Development', 'MBARD', 'M.B.A. Rural Development', '90', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396313049'),
('soss', 'SS8A', 'M.Phil. Geography', 'MPG', 'M.Phil. Geography', '100', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396330346'),
('soss', 'SS8B', 'M.Phil. History', 'MPH', 'M.Phil.History', '75', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396387954'),
('soss', 'SS8C', 'M.Phil. Home Science', 'MPHS', 'M.Phil.Home Science', '85', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396417987'),
('soss', 'SS8D', 'M.Phil. Political Science', 'MPPS', 'M.Phil.Political Science', '85', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396447348'),
('soss', 'SS8E', 'M.Phil. Psychology', 'MPP', 'M.Phil.Pschology', '85', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396466732'),
('soss', 'SS8f', 'M.Phil. Social Work', 'MPSW', 'M.Phil.Social Work', '85', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396499370'),
('soss', 'SS8G', 'M.Phil. Sociology', 'MPSOC', 'M.Phil.Sociology', '85', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396524082'),
('soss', 'SS9A', 'Ph.D. Geography', 'PHDG', 'Ph.D. Geography', '90', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396542210'),
('soss', 'SS9B', 'Ph.D. History', 'PHDH', 'Ph.D. History', '90', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396559122'),
('soss', 'SS9C', 'Ph.D.. Home Science', 'PHDHS', 'Ph.D. Home Science', '90', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396580011'),
('soss', 'SS9D', 'Ph.D. Political Science', 'PHDPS', 'Ph.D. Political Science', '90', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396598298'),
('soss', 'SS9E', 'Ph.D. Psychology', 'PHDP', 'Ph.D. Psychology', '90', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396619994'),
('soss', 'SS9F', 'Ph.D. Social Work', 'PHDSW', 'Ph.D. Social Work', '90', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396638307'),
('soss', 'SS9G', 'Ph.D. Sociology', 'PHDSOC', 'Ph.D. Sociology', '90', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'ididid1542396660866'),
('soss', 'SS5F', 'M.B.A. Public administration and Policy', 'MBAPAP', 'MBA PUBLIC ADMINISTRATION', '90', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-29-20new courses.xlsx', 'idid1542397308042'),
('sophy', 'PH5A', 'M.Sc.(Physics)', 'PHY-509', 'Laboratory Course-I (Electronics)', 'Skill development', 'Feb 14 - June 14', 'http://uid.dauniv.ahttp://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_13-13-11combined.pdfc.in/NAC/profile/docs/15-11-2018_12-46-12SPR class.pdf', 'id1542484066207'),
('sophy', 'PH5A', 'M.Sc.(Physics)', 'PHY-511', 'CBSC-I Numerical Techniques using C  ', 'Employability', 'July 16 - June 17', 'http://uid.dauniv.ahttp://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_13-13-11combined.pdfc.in/NAC/profile/docs/15-11-2018_12-46-12SPR class.pdf', 'id1542484505899'),
('sophy', 'PH5A', 'M.Sc.(Physics)', 'PHY-526', 'Laser Physics', 'Employability', 'July 18 - June 19', 'http://uid.dauniv.ahttp://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_13-13-11combined.pdfc.in/NAC/profile/docs/15-11-2018_12-46-12SPR class.pdf', 'id1542484566960'),
('Soinstru', 'IN7A', 'M.Tech.  (Instrumentation)', 'IS 718', 'INSTRUMENT TECHNOLOGY LAB -II', 'skill development', 'Feb 14 - June 14', '1', 'id1542439790015'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'IC-3929', 'Entrepreneurship', 'Lectures, case studies & team assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542446003354'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-1905A	', '', 'Listening exercises, vocabulary work, reading and fluency building.', 'Feb 14 - June 14', '113', 'idididididididididididididid1542446950677'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-1905B', 'English Language Lab2', 'Listening exercises, vocabulary work, reading and fluency building.', 'Feb 14 - June 14', '113', 'idididididididididididididid1542446967948'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-1905A', 'English Language Lab', 'Listening exercises, vocabulary work, reading and fluency building.', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447000941'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-1905A	', '', 'Listening exercises, vocabulary work, reading and fluency building.', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447022975'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-1905A', 'English Language Lab', 'Listening exercises, vocabulary work, reading and fluency building.', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447037009'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-1201', 'Fundamentals of programming and Problem Solving through C - I 	', 'Problem solving & programming exercises, individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447057651'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-1202', 'Programming and Problem Solving Using C - II', 'Problem solving & programming exercises, individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447075062'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-1501', 'Operating System Basics and PC Packages', 'Lectures, individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447108500'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3206', 'Database Programming using VB', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447128014'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-2222', 'Data Structure and Algorithms', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447148832'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3207', 'Object Oriented Programming through C   - I', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447160367'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3210', 'JAVA Programming', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447176621'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-2402', 'Introduction to DBMS(SQLand PLSQL) ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447192193'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3505', 'Computer Graphics and Multimedia Fundamentals', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447204032'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'IC-3913          ', 'Financial Accounting', 'Lecture, FinancialÂ structure building, tally operations, individual assignment', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447247318'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'IC-2928', 'Principles and Practice of Management', 'Management case studies to enhance Â time management, critical thinking, decision making, leadership, behavioural theories', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447291410'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3801A', 'Mini Project', 'Software Development, foster collaborative team work ', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447310489'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3801B', '	Project', 'Software Development, foster collaborative team work ', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447334471'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'IC-4916', 'Communication Skills and Report Writing', 'Lectures, case studies, & reading to develop interpersonal skills and communication skills', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447348095'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'IC-4916', 'Communication Skills and Report Writing', 'Lectures, case studies, & reading to develop interpersonal skills and communication skills', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447382516'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'IC-4916', 'Communication Skills and Report Writing', 'Lectures, case studies, & reading to develop interpersonal skills and communication skills', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447395516'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447406282'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'IC-4917', 'Accounting and Financial Systems', 'Lecture, FinancialÂ structure building, tally operations, individual assignment', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447466739'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447515085'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'IC-4916', 'Communication Skills and Report Writing', 'Lectures, case studies, & reading to develop interpersonal skills and communication skills', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447683519'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4409', 'Enterprise Resource Planning', 'ERP module study and implementation, Guest practitioner', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447706293'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-4409', 'Enterprise Resource Planning', 'ERP module study and implementation, Guest practitioner', 'Feb 14 - June 14', '113', 'ididididididididididididid1542447990284'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4409A', 'Introduction to Enterprise Resource Planning', 'ERP module study and implementation, Guest practitioner', 'Feb 14 - June 14', '113', 'ididididididididididididid1542448010975'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4305 ', 'Software Engineering', 'Lectures, case studies, individual assignment', 'Feb 14 - June 14', '113', 'ididididididididididididid1542448054176'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4305', 'Software Engineering', 'Lectures, case studies, individual assignment', 'Feb 14 - June 14', '113', 'ididididididididididididid1542448277954'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4305', 'Software Engineering', 'Lectures, case studies, individual assignment', 'Feb 14 - June 14', '113', 'ididididididididididididid1542448299355'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4305', 'Software Engineering', 'Lectures, case studies, individual assignment', 'Feb 14 - June 14', '113', 'ididididididididididididid1542448315826'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4408', 'Database Application and Tools', 'Experimentation, Scenario,  Team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542448985960'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4408', 'Database Application and Tools', 'Experimentation, Scenario,  Team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449009789'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4408', 'Database Application and Tools', 'Experimentation, Scenario,  Team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449024023'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4408', 'Database Application and Tools', 'Experimentation, Scenario,  Team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449034427'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'IC-4915', 'Organization and Management Concepts', 'Lectures, case studies, skill building & team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449045357'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'IC-4915', 'Organization and Management Concepts', 'Lectures, case studies, skill building & team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449072990'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'IC-4915', 'Organization and Management Concepts', 'Lectures, case studies, skill building & team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449088706'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'IC-4915', 'Organization and Management Concepts', 'Lectures, case studies, skill building & team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449099057'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4205', 'Programming and Problem Solving Using C', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449186665'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4205', 'Programming and Problem Solving Using C', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449207944'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4205', 'Programming and Problem Solving Using C', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449218710'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4205', 'Programming and Problem Solving Using C', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449231366');
INSERT INTO `t1_1_3` (`Username`, `Prog_code`, `Prog_name`, `Course_code`, `Course_name`, `Description`, `Year`, `Link`, `id_time`) VALUES
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4209', 'Data Structures Using C  ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449240237'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4209', 'Data Structures Using C   ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449256135'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4209', 'Data Structures Using C  ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449266698'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4209', 'Data Structures Using C  ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449278102'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4405', 'Database Management System', 'System analysis, design and development, case study,  individual assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449337585'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4405', 'Database Management System', 'System analysis, design and development, case study,  individual assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449362083'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4405', 'Database Management System', 'System analysis, design and development, case study,  individual assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449373641'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4405', 'Database Management System', 'System analysis, design and development, case study,  individual assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449385410'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449402022'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449424727'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449433276'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449445092'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5617', 'Internet and Web Technology', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449472280'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-5617', 'Internet and Web Technology', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449488058'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-5617', 'Internet and Web Technology', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449501372'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-5617', 'Internet and Web Technology', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449512527'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5701', 'Artificial Intelligence', 'Lectures, Scenario,  individual assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449582348'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5413', 'Data  Mining and Warehousing', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449605055'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5216', 'Design and Analysis of Algorithms', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542449974876'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-5216', 'Design and Analysis of Algorithms ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542450078657'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-5216', 'Design and Analysis of Algorithms', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542450094720'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-6623', 'Mobile and Wireless Systems', 'Lectures, Scenario, Android programming,  individual assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542450106735'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-6623', 'Mobile and Wireless Systems', 'Lectures, Scenario, Android programming,  individual assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542450133326'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5309', 'Object Oriented Analysis and Design ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542450150058'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-5309', 'Object Oriented Analysis and Design ', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'ididididididididididid1542450478482'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-5309', 'Object Oriented Analysis and Design ', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'ididididididididididid1542450565312'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-5413', 'Data  Mining and Warehousing', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'ididididididididididid1542450612293'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-5413', 'Data  Mining and Warehousing', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'ididididididididididid1542450686488'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-5413', 'Data  Mining and Warehousing', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'ididididididididididid1542450699399'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5805C', 'Project ', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork ', 'Feb 14 - June 14', '113', 'idididididididididid1542454439300'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5805B', 'Project ', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork ', 'Feb 14 - June 14', '113', 'idididididididididid1542454466276'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-5805B', 'Project ', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork ', 'Feb 14 - June 14', '113', 'idididididididididid1542454478833'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-5805B', 'Project', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork ', 'Feb 14 - June 14', '113', 'idididididididididid1542454492893'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-5805B', 'Project on ERP', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork ', 'Feb 14 - June 14', '113', 'idididididididididid1542454503868'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'IC-3912', 'Professional and Social Issues in IT', 'Case studies related to ethics in IT profession, team assignment', 'Feb 14 - June 14', '113', 'idididididididididid1542454516503'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'IC-3912', 'Professional and Social Issues in IT', 'Case studies related to ethics in IT profession, team assignment', 'Feb 14 - June 14', '113', 'idididididididididid1542454544085'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'IC-3912', 'Professional and Social Issues in IT', 'Case studies related to ethics in IT profession, team assignment', 'Feb 14 - June 14', '113', 'idididididididididid1542454558064'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'IC-3912', 'Professional and Social Issues in IT', 'Case studies related to ethics in IT profession, team assignment', 'Feb 14 - June 14', '113', 'idididididididididid1542454574336'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4517', 'Linux/UNIX Administration', 'System administration, IT maintenance & support', 'Feb 14 - June 14', '113', 'ididididididididid1542454803202'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4517', 'Linux/UNIX Administration', 'System administration, IT maintenance & support', 'Feb 14 - June 14', '113', 'ididididididididid1542454814007'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-6313', 'Software Testing and Quality Assurance ', 'Case Studies, Individual assignment', 'Feb 14 - June 14', '113', 'ididididididididid1542454846635'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-6313', 'Software Testing and Quality Assurance', 'Case Studies, Individual assignment', 'Feb 14 - June 14', '113', 'idididididididid1542454988916'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-6316        ', 'Software Reuse and Customization', 'Case Studies, Individual assignment', 'Feb 14 - June 14', '113', 'idididididididid1542455012596'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-5618', 'Network Security', 'Lectures, Experiments, Guest practitioner', 'Feb 14 - June 14', '113', 'idididididididid1542455089030'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-6518', 'Cloud Computing', 'Network establishment, Network  management, distributed computing environment building, Hadoop framework', 'Feb 14 - June 14', '113', 'ididididididid1542455190940'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-6518', 'Cloud Computing', 'Network establishment, Network  management, distributed computing environment building, Hadoop framework', 'Feb 14 - June 14', '113', 'ididididididid1542455231882'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5308 ', 'IT Project Management', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork', 'Feb 14 - June 14', '113', 'ididididididid1542456208370'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-5308 ', 'IT Project Management', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork', 'Feb 14 - June 14', '113', 'idididididid1542456519921'),
('socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-5308 ', 'IT Project Management', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork', 'Feb 14 - June 14', '113', 'idididididid1542456538574'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-5308 ', 'IT Project Management', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork', 'Feb 14 - June 14', '113', 'idididididid1542456554502'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4517', 'IT Infrastructure Management', 'Learn organization, administration, procurement, planning & management of Infrastructure in an IT enterprise', 'Feb 14 - June 14', '113', 'idididididid1542456565179'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4422', 'ERP Applications', 'Knowledge of ERP Applications in industry and implementation.', 'Feb 14 - June 14', '113 Year OK', 'idididididid1542456620816'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-3424', 'E-Governance', 'Exposure to e-governance projects of Nation, Hands on usage', 'July 15 - June 16', '113', 'idididididid1542456671864'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-2602', 'Internet and E-Commerce', 'Problem solving & application design,  exercises,  team  assignments', 'July 15 - June 16', '113', 'idididididid1542456695472'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-1501', 'Operating system basics and PC packages', 'Lectures, individual  assignments', 'July 15 - June 16', '113', 'idididididid1542456721963'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'IC-3913', 'Financial Accounting', 'Lecture, FinancialÂ structure building, tally operations, individual assignment', 'July 15 - June 16', '113', 'idididididid1542456738697'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-4517', 'IT Infrastructure Management', 'Learn organization, administration, procurement, planning & management of Infrastructure in an IT enterprise', 'July 15 - June 16', '113', 'idididididid1542456755909'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-5805A', 'Major Project', 'Software Development, foster collaborative team work', 'July 15 - June 16', '113', 'idididididid1542456772560'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-6518', 'Cloud Computing', 'Network establishment, Network  management, distributed computing environment building, Hadoop framework', 'Feb 14 - June 14', '113', 'idididididid1542456802157'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-6518', 'Cloud Computing', 'Network establishment, Network  management, distributed computing environment building, Hadoop framework', 'Feb 14 - June 14', '113', 'idididididid1542456831398'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-6712', 'Data Science ', 'Lectures, Experiments, Guest practitioner ', 'July 16 - June 17', '113', 'idididididid1542456882005'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-6712', 'Data Science ', 'Lectures, Experiments, Guest practitioner ', 'July 16 - June 17', '113', 'idididididid1542456913447'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-6630', 'Internet of Things', 'Lectures, Experiments, case studies, team assignment', 'July 17 - June 18', '113', 'idididididid1542456938965'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-6220', 'Internet Programming Using Java', 'Web Development, Web Resource management & maintenance', 'July 17 - June 18', '113', 'idididididid1542456965530'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-6220', 'Internet Programming Using Java', 'Web Development, Web Resource management & maintenance', 'July 17 - June 18', '113', 'idididididid1542456986759'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-6220', 'Internet Programming Using Java', 'Web Development, Web Resource management & maintenance', 'July 17 - June 18', '113', 'ididididid1542457125407'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'IC-3929', 'Entrepreneurship', 'Lectures, case studies & team assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542446003354'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'IC-3929', '', 'Listening exercises, vocabulary work, reading and fluency building.', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542446950677'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-1905B', 'English Language Lab2', 'Listening exercises, vocabulary work, reading and fluency building.', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542446967948'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-1905A', 'English Language Lab', 'Listening exercises, vocabulary work, reading and fluency building.', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447000941'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-1905A	', '', 'Listening exercises, vocabulary work, reading and fluency building.', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447022975'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-1905A', 'English Language Lab', 'Listening exercises, vocabulary work, reading and fluency building.', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447037009'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-1201', 'Fundamentals of programming and Problem Solving through C - I 	', 'Problem solving & programming exercises, individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447057651'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-1202', 'Programming and Problem Solving Using C - II', 'Problem solving & programming exercises, individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447075062'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-1501', 'Operating System Basics and PC Packages', 'Lectures, individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447108500'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3206', 'Database Programming using VB', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447128014'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-2222', 'Data Structure and Algorithms', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447148832'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3207', 'Object Oriented Programming through C   - I', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447160367'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3210', 'JAVA Programming', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447176621'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-2402', 'Introduction to DBMS(SQLand PLSQL) ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447192193'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3505', 'Computer Graphics and Multimedia Fundamentals', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447204032'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'IC-3913          ', 'Financial Accounting', 'Lecture, FinancialÂ structure building, tally operations, individual assignment', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447247318'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'IC-2928', 'Principles and Practice of Management', 'Management case studies to enhance Â time management, critical thinking, decision making, leadership, behavioural theories', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447291410'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3801A', 'Mini Project', 'Software Development, foster collaborative team work ', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447310489'),
('Socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CS-3801B', '	Project', 'Software Development, foster collaborative team work ', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447334471'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'IC-4916', 'Communication Skills and Report Writing', 'Lectures, case studies, & reading to develop interpersonal skills and communication skills', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447348095'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'IC-4916', 'Communication Skills and Report Writing', 'Lectures, case studies, & reading to develop interpersonal skills and communication skills', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447382516'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'IC-4916', 'Communication Skills and Report Writing', 'Lectures, case studies, & reading to develop interpersonal skills and communication skills', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447395516'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447406282'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'IC-4917', 'Accounting and Financial Systems', 'Lecture, FinancialÂ structure building, tally operations, individual assignment', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447466739'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447515085'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'IC-4916', 'Communication Skills and Report Writing', 'Lectures, case studies, & reading to develop interpersonal skills and communication skills', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447683519'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4409', 'Enterprise Resource Planning', 'ERP module study and implementation, Guest practitioner', 'Feb 14 - June 14', '113', 'ididididididididididididididid1542447706293'),
('Socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-4409', 'Enterprise Resource Planning', 'ERP module study and implementation, Guest practitioner', 'Feb 14 - June 14', '113', 'idididididididididididididid1542447990284'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4409A', 'Introduction to Enterprise Resource Planning', 'ERP module study and implementation, Guest practitioner', 'Feb 14 - June 14', '113', 'idididididididididididididid1542448010975'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4305 ', 'Software Engineering', 'Lectures, case studies, individual assignment', 'Feb 14 - June 14', '113', 'idididididididididididididid1542448054176'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4305', 'Software Engineering', 'Lectures, case studies, individual assignment', 'Feb 14 - June 14', '113', 'idididididididididididididid1542448277954'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4305', 'Software Engineering', 'Lectures, case studies, individual assignment', 'Feb 14 - June 14', '113', 'idididididididididididididid1542448299355'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4305', 'Software Engineering', 'Lectures, case studies, individual assignment', 'Feb 14 - June 14', '113', 'idididididididididididididid1542448315826'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4408', 'Database Application and Tools', 'Experimentation, Scenario,  Team assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542448985960'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4408', 'Database Application and Tools', 'Experimentation, Scenario,  Team assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449009789'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4408', 'Database Application and Tools', 'Experimentation, Scenario,  Team assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449024023'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4408', 'Database Application and Tools', 'Experimentation, Scenario,  Team assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449034427'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'IC-4915', 'Organization and Management Concepts', 'Lectures, case studies, skill building & team assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449045357'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'IC-4915', 'Organization and Management Concepts', 'Lectures, case studies, skill building & team assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449072990'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'IC-4915', 'Organization and Management Concepts', 'Lectures, case studies, skill building & team assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449088706'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'IC-4915', 'Organization and Management Concepts', 'Lectures, case studies, skill building & team assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449099057'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4205', 'Programming and Problem Solving Using C', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449186665'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4205', 'Programming and Problem Solving Using C', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449207944'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4205', 'Programming and Problem Solving Using C', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449218710'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4205', 'Programming and Problem Solving Using C', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449231366'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4209', 'Data Structures Using C  ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449240237'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4209', 'Data Structures Using C   ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449256135'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4209', 'Data Structures Using C  ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449266698'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4209', 'Data Structures Using C  ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449278102'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4405', 'Database Management System', 'System analysis, design and development, case study,  individual assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449337585'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4405', 'Database Management System', 'System analysis, design and development, case study,  individual assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449362083'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4405', 'Database Management System', 'System analysis, design and development, case study,  individual assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449373641'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4405', 'Database Management System', 'System analysis, design and development, case study,  individual assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449385410'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449402022'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449424727'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449433276'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4211', 'Object Oriented Programming using JAVA', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449445092'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5617', 'Internet and Web Technology', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449472280'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-5617', 'Internet and Web Technology', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449488058'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-5617', 'Internet and Web Technology', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449501372'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-5617', 'Internet and Web Technology', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449512527'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5701', 'Artificial Intelligence', 'Lectures, Scenario,  individual assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449582348'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5413', 'Data  Mining and Warehousing', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449605055'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5216', 'Design and Analysis of Algorithms', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542449974876'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-5216', 'Design and Analysis of Algorithms ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542450078657'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-5216', 'Design and Analysis of Algorithms', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542450094720'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-6623', 'Mobile and Wireless Systems', 'Lectures, Scenario, Android programming,  individual assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542450106735'),
('Socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-6623', 'Mobile and Wireless Systems', 'Lectures, Scenario, Android programming,  individual assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542450133326'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5309', 'Object Oriented Analysis and Design ', 'Problem solving & programming exercises,  individual  assignments', 'Feb 14 - June 14', '113', 'ididididididididididididid1542450150058'),
('Socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-5309', 'Object Oriented Analysis and Design ', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542450478482'),
('Socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-5309', 'Object Oriented Analysis and Design ', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542450565312'),
('Socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-5413', 'Data  Mining and Warehousing', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542450612293'),
('Socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-5413', 'Data  Mining and Warehousing', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542450686488'),
('Socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-5413', 'Data  Mining and Warehousing', 'Data analytics,  case study,  individual & team assignments', 'Feb 14 - June 14', '113', 'idididididididididididid1542450699399'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5805C', 'Project ', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork ', 'Feb 14 - June 14', '113', 'ididididididididididid1542454439300'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5805B', 'Project ', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork ', 'Feb 14 - June 14', '113', 'ididididididididididid1542454466276'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-5805B', 'Project ', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork ', 'Feb 14 - June 14', '113', 'ididididididididididid1542454478833'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-5805B', 'Project', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork ', 'Feb 14 - June 14', '113', 'ididididididididididid1542454492893'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-5805B', 'Project on ERP', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork ', 'Feb 14 - June 14', '113', 'ididididididididididid1542454503868'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'IC-3912', 'Professional and Social Issues in IT', 'Case studies related to ethics in IT profession, team assignment', 'Feb 14 - June 14', '113', 'ididididididididididid1542454516503'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'IC-3912', 'Professional and Social Issues in IT', 'Case studies related to ethics in IT profession, team assignment', 'Feb 14 - June 14', '113', 'ididididididididididid1542454544085'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'IC-3912', 'Professional and Social Issues in IT', 'Case studies related to ethics in IT profession, team assignment', 'Feb 14 - June 14', '113', 'ididididididididididid1542454558064'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'IC-3912', 'Professional and Social Issues in IT', 'Case studies related to ethics in IT profession, team assignment', 'Feb 14 - June 14', '113', 'ididididididididididid1542454574336'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-4517', 'Linux/UNIX Administration', 'System administration, IT maintenance & support', 'Feb 14 - June 14', '113', 'idididididididididid1542454803202'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-4517', 'Linux/UNIX Administration', 'System administration, IT maintenance & support', 'Feb 14 - June 14', '113', 'idididididididididid1542454814007'),
('Socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-6313', 'Software Testing and Quality Assurance ', 'Case Studies, Individual assignment', 'Feb 14 - June 14', '113', 'idididididididididid1542454846635'),
('Socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-6313', 'Software Testing and Quality Assurance', 'Case Studies, Individual assignment', 'Feb 14 - June 14', '113', 'ididididididididid1542454988916'),
('Socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-6316        ', 'Software Reuse and Customization', 'Case Studies, Individual assignment', 'Feb 14 - June 14', '113', 'ididididididididid1542455012596'),
('Socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-5618', 'Network Security', 'Lectures, Experiments, Guest practitioner', 'Feb 14 - June 14', '113', 'ididididididididid1542455089030'),
('Socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-6518', 'Cloud Computing', 'Network establishment, Network  management, distributed computing environment building, Hadoop framework', 'Feb 14 - June 14', '113', 'idididididididid1542455190940'),
('Socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-6518', 'Cloud Computing', 'Network establishment, Network  management, distributed computing environment building, Hadoop framework', 'Feb 14 - June 14', '113', 'idididididididid1542455231882'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-5308 ', 'IT Project Management', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork', 'Feb 14 - June 14', '113', 'idididididididid1542456208370'),
('Socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'CS-5308 ', 'IT Project Management', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork', 'Feb 14 - June 14', '113', 'ididididididid1542456519921'),
('Socsit', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 'CS-5308 ', 'IT Project Management', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork', 'Feb 14 - June 14', '113', 'ididididididid1542456538574'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-5308 ', 'IT Project Management', 'Software Development, Team work, time & resource management, Problem solving, foster collaborative teamwork', 'Feb 14 - June 14', '113', 'ididididididid1542456554502'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4517', 'IT Infrastructure Management', 'Learn organization, administration, procurement, planning & management of Infrastructure in an IT enterprise', 'Feb 14 - June 14', '113', 'ididididididid1542456565179'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4422', 'ERP Applications', 'Knowledge of ERP Applications in industry and implementation.', 'Feb 14 - June 14', '113 Year OK', 'ididididididid1542456620816'),
('Socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-3424', 'E-Governance', 'Exposure to e-governance projects of Nation, Hands on usage', 'July 15 - June 16', '113', 'ididididididid1542456671864'),
('Socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-2602', 'Internet and E-Commerce', 'Problem solving & application design,  exercises,  team  assignments', 'July 15 - June 16', '113', 'ididididididid1542456695472'),
('Socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-1501', 'Operating system basics and PC packages', 'Lectures, individual  assignments', 'July 15 - June 16', '113', 'ididididididid1542456721963'),
('Socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'IC-3913', 'Financial Accounting', 'Lecture, FinancialÂ structure building, tally operations, individual assignment', 'July 15 - June 16', '113', 'ididididididid1542456738697'),
('Socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-4517', 'IT Infrastructure Management', 'Learn organization, administration, procurement, planning & management of Infrastructure in an IT enterprise', 'July 15 - June 16', '113', 'ididididididid1542456755909'),
('Socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-5805A', 'Major Project', 'Software Development, foster collaborative team work', 'July 15 - June 16', '113', 'ididididididid1542456772560'),
('Socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-6518', 'Cloud Computing', 'Network establishment, Network  management, distributed computing environment building, Hadoop framework', 'Feb 14 - June 14', '113', 'ididididididid1542456802157'),
('Socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-6518', 'Cloud Computing', 'Network establishment, Network  management, distributed computing environment building, Hadoop framework', 'Feb 14 - June 14', '113', 'ididididididid1542456831398'),
('Socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-6712', 'Data Science ', 'Lectures, Experiments, Guest practitioner ', 'July 16 - June 17', '113', 'ididididididid1542456882005'),
('Socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-6712', 'Data Science ', 'Lectures, Experiments, Guest practitioner ', 'July 16 - June 17', '113', 'ididididididid1542456913447'),
('Socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-6630', 'Internet of Things', 'Lectures, Experiments, case studies, team assignment', 'July 17 - June 18', '113', 'ididididididid1542456938965'),
('Socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-6220', 'Internet Programming Using Java', 'Web Development, Web Resource management & maintenance', 'July 17 - June 18', '113', 'ididididididid1542456965530'),
('Socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-6220', 'Internet Programming Using Java', 'Web Development, Web Resource management & maintenance', 'July 17 - June 18', '113', 'ididididididid1542456986759'),
('Socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-6220', 'Internet Programming Using Java', 'Web Development, Web Resource management & maintenance', 'July 17 - June 18', '113', 'idididididid1542457125407');

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

--
-- Dumping data for table `t1_2_1`
--

INSERT INTO `t1_2_1` (`Username`, `Prog_code`, `Prog_name`, `Course_code`, `Course_name`, `Year`, `Link`, `id_time`) VALUES
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
('sopedu', 'PE5A', 'M.P.Ed.', 'MPPC 402', 'Sports Specialization  (Coaching Lessons)', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-06-321.1.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'id1540529731582'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-204', 'Chemistry of Drugs', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-43-531.2.1-Chemistry of Drugs.pdf', 'idididid1540553986179'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-307', 'Organic Synthesis', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-43-231.2.1-Organic Synthesis.pdf', 'idididid1540623542779'),
('pranjal', 'TESTINGP1', 'TESTING NAME 1 NAME', 'TESTING123', 'TESTING COURSE NAME', 'July 15 - June 16', 'hdgsal*(&^$#@', 'id1540625590049'),
('chemsc', 'CH5C', 'Ph.D', 'CHEM- 103', 'Advanced Course: Interpretation of Spectra', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-46-021.2.1-INTERPRETATION OF SPECTRA.pdf', 'idididid1540623562531'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-205', 'Computer Applications', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-42-311.2.1-COMPUTER APPLICATIONS.pdf', 'ididididid1540623450120'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'BT BI 601', 'Machine Learning Techniques and CADD', 'July 15 - June 16', 'http://www.biotech.dauniv.ac.in/#', 'id1541184230705'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'BT BI 611 ', '', 'July 15 - June 16', 'http://www.biotech.dauniv.ac.in/#', 'id1541184252024'),
('soedu', 'ED4A', 'B.Ed.', '528', 'Mentorship', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_15-04-39Mentorship.docx', 'idid1541152082637'),
('soedu', 'ED4A', 'B.Ed.', '518', 'Creative Expression Skills', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_15-01-26CREATIVE expression skill.docx', 'idid1541151927718'),
('soedu', 'ED4A', 'B.Ed.', '547', 'Knowledge and Curriculum', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_15-12-13Knowledge and Curriculum.docx', 'id1541152406942'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'T101', 'Sample Document', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'id1541228464045'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'TEM101', 'Sample Document', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'id1541228482117'),
('sopharma', 'PY4A', 'B.Pharm.', 'BP609P', 'Herbal Drug Technology &#65533; Practical', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'id1542093065149'),
('sopharma', 'PY4A', 'B.Pharm.', 'BP603T', 'Herbal Drug Technology &#65533; Theory', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'id1542092918721'),
('sopharma', 'PY4A', 'B.Pharm.', 'BP502T', 'Industrial PharmacyI&#65533; Theory', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'id1542092784426'),
('sopharma', 'PY4A', 'B.Pharm.', 'BP506P', 'Industrial PharmacyI &#65533; Practical', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'id1542092872423'),
('sopharma', 'PY7A', 'M.Pharm.', 'PYM-PC-703 T', 'Impurity Profiling and Stability Studies  ', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'id1542092186487'),
('sopharma', 'PY4A', 'B.Pharm.', 'PYB-111P', 'IT Skills for Pharmacists  Practicals', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'idid1542089458024'),
('sopharma', 'PY4A', 'B.Pharm.', 'PYB-111T', 'IT Skills for Pharmacists ', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'idid1542089411271'),
('sopharma', 'PY4A', 'B.Pharm.', 'PYB-109T', 'Environmental  Science', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'idid1542089272731'),
('sopharma', 'PY7A', 'M.Pharm.', 'MPC 104 T', 'Chemistry of Natural Products', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'id1542093116694'),
('sopharma', 'PY7A', 'M.Pharm.', 'MPC 204 T', 'Pharmaceutical Chemistry Practical-I', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'id1542093167022'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'MCH-206', 'Computer Programming', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-42-451.2.1-COMPUTER PROGRAMMING.pdf', 'ididididid1540623463784'),
('iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs', 'IM -705 MB', 'Digital Marketing', 'Feb 14 - June 14', 'Nil', 'id1542219988488'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'BE 502', 'Web Designing and Animation Tools', 'Feb 14 - June 14', 'SCANNED COPY', 'idid1540226348100'),
('soinstru', 'IN7A', 'M.Tech.  (Instrumentation)', 'ISC 701', 'PROCESS CONTROL AND AUTOMATION', 'July 15 - June 16', '8', 'id1542271241353'),
('soss', 'SS1A', 'Certificate in Labour Law and Personnel Management', 'LLPM(C)', 'Certificate in Labour Law and Personnel Management', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-44-51new courses.xlsx', 'idid1542397500608'),
('soss', 'SS1B', 'Certificate in Consumer Psychology and Advertising', 'CPA(C)', 'Certificate in Consumer Psychology and Advertising', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-44-51new courses.xlsx', 'idid1542397522451'),
('soss', 'SS1C', 'Certificate in Guidance and Counselling', 'GandC(C)', 'Certificate in Guidance and Counselling', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-44-51new courses.xlsx', 'idid1542397543466'),
('soss', 'SS1D', 'Certificate in Human Rights', 'HRs(C)', 'Certificate in Human Rights', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-44-51new courses.xlsx', 'idid1542397553914'),
('soss', 'SS5B', 'M.A. Sociology', 'MASOC', 'M.A. Sociology', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-44-51new courses.xlsx', 'idid1542397568162'),
('soss', 'SS5C', 'M.A. Political Science', 'MAPS', 'M.A. Political Science', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-44-51new courses.xlsx', 'idid1542397605458'),
('soss', 'SS5D', 'M.A. Clinical Psychology', 'MACP', 'M.A. Clinical Psychology', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-44-51new courses.xlsx', 'idid1542397642522'),
('soss', 'SS5E', 'M.B.A. Rural Development', 'MBARD', 'M.B.A. Rural Development', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-44-51new courses.xlsx', 'idid1542397657554'),
('soss', 'SS5F', 'M.B.A. Public administration and Policy', 'MBAPAP', 'MBA PUBLIC ADMINISTRATION', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-44-51new courses.xlsx', 'idid1542397669681'),
('sophy', 'PH5A', 'M.Sc.(Physics)', 'PHY-511', 'CBSC-I Numerical Techniques using C  ', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-26-312015 - 2017  M.Sc Syllabus -511A.pdf', 'id1542438031524'),
('sophy', 'PH5A', 'M.Sc.(Physics)', 'PHY-529', 'CBCS-II Numerical Techniques using C  ', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-29-492015 - 2017  M.Sc Syllabus -529.pdf', 'id1542438174432'),
('sophy', 'PH5A', 'M.Sc.(Physics)', 'PHY-534', 'Nanomaterials', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-51-042017-10 SOP_MSc_Physics_Syllabus_534.pdf', 'id1542438270841'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CS-6518', 'Cloud Computing', 'July 16 - June 17', '1.2.1', 'idid1542447363679'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'IC-3912', 'Professional and Social Issues in IT', 'Feb 14 - June 14', '1.2.1', 'idid1542447400574'),
('socsit', 'CS5B', 'Master of Science (Computer Science) 2yrs', 'IC-3912	', '', 'Feb 14 - June 14', '1.2.1', 'idid1542447429775'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4409A', 'Introduction to Enterprise Resource Planning', 'July 14 - June 15', '1.2.1', 'idid1542447524240'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-4422', 'ERP Applications', 'July 14 - June 15', '1.2.1', 'idid1542447574880'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-5805B', 'Project on ERP', 'July 14 - June 15', '1.2.1', 'idid1542447633568'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'IC-3912', 'Professional and Social Issues in IT', 'Feb 14 - June 14', '1.2.1', 'idid1542447666368'),
('socsit', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 'CS-6518', 'Cloud Computing', 'July 16 - June 17', '1.2.1', 'idid1542447691558'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-6711 ', 'Soft Computing', 'July 16 - June 17', '1.2.1', 'idid1542447740911'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CS-5010', 'Advanced Computer Architecture', 'July 17 - June 18', '1.2.1', 'idid1542447769412'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'IC-6921', 'Research in Computing ', 'July 16 - June 17', '1.2.1', 'idid1542447805475'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-6712', 'Data Science ', 'July 16 - June 17', '1.2.1', 'idid1542447982095'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CS-6315', 'Usability Engineering', 'July 17 - June 18', '1.2.1', 'idid1542447989808'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CS-6630', 'Internet of Things', 'July 17 - June 18', '1.2.1', 'idid1542448144629'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-1001', 'Fundamentals of computer and IT', 'July 15 - June 16', '1.2.1', 'id1542450070171'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'cs-4223', 'Programming and problem solving using java', 'July 15 - June 16', '1.2.1', 'id1542450071851'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-1501', 'Operating system basics and PC packages', 'July 15 - June 16', '1.2.1', 'id1542450073130'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'IC-3913', 'Financial Accounting', 'July 15 - June 16', '1.2.1', 'id1542450089219'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-3424', 'E-Governance', 'July 15 - June 16', '1.2.1', 'id1542450095745'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-2402', 'Introduction to DBMS', 'July 15 - June 16', '1.2.1', 'id1542450099242'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-4517', 'IT Infrastructure Management', 'July 15 - June 16', '1.2.1', 'id1542450102418'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-2602', 'Internet and E-Commerce', 'July 15 - June 16', '1.2.1', 'id1542450112130'),
('socsit', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 'CS-5805A', 'Major Project', 'July 15 - June 16', '1.2.1', 'id1542450153898');

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

--
-- Dumping data for table `t1_2_2`
--

INSERT INTO `t1_2_2` (`Username`, `Prog_code`, `Prog_name`, `Type`, `Year`, `Link`, `id_time`) VALUES
('sostat', 'ST9Z', 'Ph.D.', 'Elective', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_12-06-51Syllabus Ph.D Course work.pdfocs/22-10-2018_16-24-55M.SC Syllabus stat. 2015-16 Choice Based Credit SystemCore Courses_2.pdf', 'idididid1540162660396'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'CBCS', 'July 15 - June 16', 'http://www.math.dauniv.ac.in/syllabus.php', 'id1540465931619'),
('pranjal', 'TESTINGP1', 'TESTING NAME 1 NAME', 'CBCS', 'July 14 - June 15', 'kxnz;lk*()&^', 'id1540625642052'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'Elective', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_17-06-18MSc 15-17.jpg', 'id1540897229553'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'CBCS', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_17-07-16MSc 18-20.jpg', 'id1540898999076'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'CBCS', 'July 15 - June 16', 'http://www.biotech.dauniv.ac.in/index.html#', 'idid1540925322684'),
('sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 'CBCS', 'July 15 - June 16', 'http://www.biotech.dauniv.ac.in/index.html#', 'idid1540925312332'),
('sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 'CBCS', 'July 15 - June 16', 'http://www.biotech.dauniv.ac.in/index.html#', 'idid1540925272198'),
('soex', 'EL7A', 'M.Tech Embedded Systems', 'Elective', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-21-54ES_Scheme_2017-19.pdf', 'id1540969037562'),
('soex', 'EL7C', 'M.Tech Mobile Computing Technology', 'Elective', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-22-26MCT_Scheme_2017-19.pdf', 'id1540969333881'),
('soex', 'EL7A', 'M.Tech Embedded Systems', 'Elective', 'July 14 - June 15', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-24-22ES_Scheme_2014-16.pdf', 'id1540969360062'),
('soex', 'EL7C', 'M.Tech Mobile Computing Technology', 'Elective', 'July 14 - June 15', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-24-42MCT_Scheme_2014-16_23122014.pdf', 'id1540969473986'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)&#65533;Regular', 'CBCS', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_14-13-49cbcs-BOS.jpg', 'id1540975414224'),
('sopedu', 'PE4A', 'B.P.E.S.', 'Elective', 'Feb 14 - June 14', 'http://www.sope.davv.ac.in/coursebpe.aspx', 'idid1539853358114'),
('sopedu', 'PE5A', 'M.P.Ed.', 'Elective', 'July 15 - June 16', 'http://www.sope.davv.ac.in/mpecourse.aspx', 'idid1539853860162'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'Elective', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/22-10-2018_16-24-55M.SC Syllabus stat. 2015-16 Choice Based Credit SystemCore Courses_2.pdf', 'ididid1540162660396'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'CBCS', 'July 14 - June 15', 'http://uid.dauniv.ac.in/NAC/profile/docs/22-10-2018_16-24-55M.SC Syllabus stat. 2015-16 Choice Based Credit SystemCore Courses_2.pdf', 'idid1540162660396'),
('socmrce', 'CM5C', 'M.Com. (Bank Management)', 'Elective', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_14-45-51M.Com(BM).pdf', 'id1541195312575'),
('socmrce', 'CM5B', 'M.Com (AFC)', 'Elective', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_14-46-33M.Com (AFC).pdf', 'id1541195356034'),
('socmrce', 'CM4A', 'B.Com(ATM)', 'Elective', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_14-47-04B.Com (ATM).pdf', 'id1541195396965'),
('socmrce', 'CM6A', 'MBA(FT) 5 Year', 'Elective', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_14-47-44MBA(FT) 5 Yrs.pdf', 'id1541195426195'),
('socmrce', 'CM5A', 'MBA(FT) 2 Year', 'Elective', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_14-48-31MBA(FT) 2 Yrs..pdf', 'id1541195475279'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1541228522989'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1541228506933'),
('soedu', 'ED4A', 'B.Ed.', 'Elective', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-09-23Elective Generic courses structure.docx', 'id1541415271848'),
('soedu', 'ED4A', 'B.Ed.', 'Elective', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-09-23Elective Generic courses structure.docx', 'id1541415352687'),
('soedu', 'ED4A', 'B.Ed.', 'Elective', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-09-23Elective Generic courses structure.docx', 'id1541415402888'),
('soedu', 'ED5A', 'M.Ed.', 'Elective', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-19-12Elective Generic M.ED..docx', 'id1541415412434'),
('soedu', 'ED5A', 'M.Ed.', 'Elective', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-19-12Elective Generic M.ED..docx', 'id1541415917941'),
('sopharma', 'PY4A', 'B.Pharm.', 'CBCS', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'id1542093223358'),
('sopharma', 'PY4A', 'B.Pharm.', 'Elective', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'id1542093252273'),
('sopharma', 'PY7A', 'M.Pharm.', 'CBCS', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'id1542093264922'),
('sopharma', 'PY7A', 'M.Pharm.', 'Elective', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_11-39-06LIST OF NEW SUBJECTS.doc', 'id1542093278970'),
('soecon', 'EC5A', 'M.A. (Economics)', 'CBCS', 'July 15 - June 16', 's1', 'id1542095594649'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'CBCS', 'July 15 - June 16', 's2', 'id1542095613226'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'CBCS', 'July 15 - June 16', 's3', 'id1542095623465'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'CBCS', 'July 15 - June 16', 's4', 'id1542095633258'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'CBCS', 'July 15 - June 16', 's5', 'id1542095645233'),
('soecon', 'EC5A', 'M.A. (Economics)', 'CBCS', 'July 15 - June 16', 's1', 'id1542095594649'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'CBCS', 'July 15 - June 16', 's2', 'id1542095613226'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'CBCS', 'July 15 - June 16', 's3', 'id1542095623465'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'CBCS', 'July 15 - June 16', 's4', 'id1542095633258'),
('soecon', 'EC5A', 'M.A. (Economics)', 'CBCS', 'July 15 - June 16', 's1', 'id1542095594649'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'CBCS', 'July 15 - June 16', 's2', 'id1542095613226'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'CBCS', 'July 15 - June 16', 's3', 'id1542095623465'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'CBCS', 'July 15 - June 16', 's4', 'id1542095633258'),
('soecon', 'EC5A', 'M.A. (Economics)', 'CBCS', 'July 15 - June 16', 's1', 'id1542095594649'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'CBCS', 'July 15 - June 16', 's2', 'id1542095613226'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'CBCS', 'July 15 - June 16', 's3', 'id1542095623465'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'CBCS', 'July 15 - June 16', 's4', 'id1542095633258'),
('iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs', 'Elective', 'Feb 14 - June 14', 'Nil', 'id1542220025189'),
('imsdavv', 'MS5A', 'MBA(FT)', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-39-13IMS_Faculty_Meeting.pdf', 'idid1540225849183'),
('imsdavv', 'MS5B', 'MBA(DM)', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-39-13IMS_Faculty_Meeting.pdf', 'idid1540225877310'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-39-13IMS_Faculty_Meeting.pdf', 'idid1540225910100'),
('imsdavv', 'MS5D', 'MBA(MM)', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-39-13IMS_Faculty_Meeting.pdf', 'idid1540225922276'),
('imsdavv', 'MS5E', 'MBA(HR)', 'CBCS', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-39-13IMS_Faculty_Meeting.pdf', 'idid1540225934316'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-39-13IMS_Faculty_Meeting.pdf', 'idid1540225945323'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-39-13IMS_Faculty_Meeting.pdf', 'idid1540225957926'),
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-39-13IMS_Faculty_Meeting.pdf', 'idid1540225968734'),
('imsdavv', 'MS6B', 'MBA(HA) 5YR', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-39-13IMS_Faculty_Meeting.pdf', 'idid1540225982366'),
('Chemsc', 'CH5A', 'M.Sc. Chemistry', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_22-50-501.1.2-Syllabus_M.Sc. Chemistry I and III Sem 2016.pdf', 'ididid1540970213292'),
('Chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'CBCS', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-10-551.1.2-Syllabus_M.Sc. PharmaChem I and III Sem 2016.pdf', 'ididid1540970324107'),
('soinstru', 'IN7A', 'M.Tech.  (Instrumentation)', 'CBCS', 'Feb 14 - June 14', '9', 'id1542271284198'),
('doll', 'LE4A', 'B. Voc. Interior Design', 'Elective', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_13-02-54mini.of meeting-1.1.3c1.jpeg.jpeg.jpeg.jpeg', 'idid1540843991160'),
('doll', 'LE4B', 'B.Voc. Fashion Technology', 'Elective', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/', 'idid1540844032783'),
('doll', 'LE4A', 'B. Voc. Interior Design', 'Elective', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_13-02-54mini.of meeting-1.1.3c1.jpeg.jpeg.jpeg.jpeg', 'ididid1540843991160'),
('doll', 'LE4B', 'B.Voc. Fashion Technology', 'Elective', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/', 'ididid1540844032783'),
('doll', 'LE5A', 'M.A. Women Empowerment and Lifelong Learning', 'Elective', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-22-16we- COURSE.docx', 'id1542399883161'),
('soss', 'SS4A', 'Bachelor of Social Work (B.S.W.)', 'CBCS', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-53-41cbcs.xlsx', 'idid1542397817689'),
('soss', 'SS5A', 'Master of Social Work (M.S.W.)', 'CBCS', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-53-41cbcs.xlsx', 'idid1542397908674'),
('soss', 'SS5B', 'M.A. Sociology', 'CBCS', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-53-41cbcs.xlsx', 'idid1542397921842'),
('soss', 'SS5C', 'M.A. Political Science', 'CBCS', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-53-41cbcs.xlsx', 'idid1542397936283'),
('soss', 'SS5D', 'M.A. Clinical Psychology', 'CBCS', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-53-41cbcs.xlsx', 'idid1542397948458'),
('soss', 'SS5E', 'M.B.A. Rural Development', 'CBCS', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-53-41cbcs.xlsx', 'idid1542398039131'),
('soss', 'SS5F', 'M.B.A. Public administration and Policy', 'CBCS', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-53-41cbcs.xlsx', 'idid1542398048121'),
('sophy', 'PH5A', 'M.Sc.(Physics)', 'CBCS', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-25-21merged.pdf', 'idid1542437993993'),
('sophy', 'PH5B', 'M.Sc. (Material Science)', 'CBCS', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-27-52merged.pdf', 'idid1542438132567'),
('sophy', 'PH5A', 'M.Sc.(Physics)', 'Elective', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-45-40SOP_MSc_Physics_Syllabus_2017_2019.pdf', 'id1542488432952'),
('ietdavv', 'CE4F', 'B.E. (Computer Engineering) ï¿½ Full Time', 'CBCS', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_16-08-161.2.2.pdf', 'id1542451478678'),
('socsit', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 'CBCS', 'July 15 - June 16', '1.2.2', 'ididid1542447526661'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'CBCS', 'July 14 - June 15', '1.2.2', 'ididid1542447641304'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'CBCS', 'July 14 - June 15', '1.2.2', 'ididid1542447662444'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'CBCS', 'July 14 - June 15', '1.2.2', 'ididid1542447707468'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'CBCS', 'July 15 - June 16', '1.2.2', 'ididid1542447731622'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'Elective', 'July 14 - June 15', '1.2.2', 'ididid1542447760949'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'Elective', 'July 14 - June 15', '1.2.2', 'ididid1542447766029'),
('socsit', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 'Elective', 'July 14 - June 15', '1.2.2', 'ididid1542447773998');

-- --------------------------------------------------------

--
-- Table structure for table `t1_3_1`
--

CREATE TABLE `t1_3_1` (
  `Username` varchar(30) NOT NULL DEFAULT '',
  `Description` text,
  `File_name` varchar(50) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_3_1`
--

INSERT INTO `t1_3_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('imsdavv', 'PROCESS+OF+COLLECTION+OF+DATA+IS+GOING+ON+', '', 'SCANNED COPY'),
('admin2', '%5C%27+%5C%22+%5C%27+%3E+%3F+%5E%25%24', '', 'fkldmlfkm'),
('pranjal', 'jkhdjah%28%29%2A%26%25', '', 'jhdsl%28%5E%25%24'),
('saif', 'safo%2A%26%5E%25%24%23%40', '', 'jsa'),
('doll', 'Department+has+started+environment+activities+wherein+various+drives+like+cleanliness%2C+sharmdan%2C+poster+competition%2C+Dana-Pani+Abhiyan%2C+best+out+of+waste%2C+short+term+training+programs+for+students+%2C+home+makers+as+well+as+senior+citizens+also.+Providing+vocational+education+and+value+added+programs+to+generate+employment+with+human+values+and+professional+ethics+into+the+curriculum.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F29-10-2018_13-44-15BROCHURE+PDF.pdf'),
('sees', 'Environmental+SustainabilityThe+goal+of+environmental+sustainability+is+to+conserve+natural+resources+and+to+develop+alternate+sources+of+power+while+reducing+pollution+and+harm+to+the+environment.+Many+of+the+projects+that+are+rooted+in+environmental+sustainability+will+involve+replanting+forests%2C+preserving+wetlands+and+protecting+natural+areas+from+resource+harvesting.+The+biggest+criticism+of+environmental+sustainability+initiatives+is+that+their+priorities+can+be+at+odds+with+the+needs+of+a+growing+industrialized+society.In+2012%2C+the+United+Nations+Conference+on+Sustainable+Development+met+to+discuss+and+develop+a+set+of+goals+to+work+towards.%95Better+standards+of+education+and+healthcare+-+particularly+as+it+pertains+to+water+quality+and+better+sanitation%95To+achieve+gender+equality%95Sustainable+economic+growth+while+promoting+jobs+and+stronger+economies%95All+of+the+above+and+more+while+tackling+the+effects+of+climate+change%2C+pollution+and+other+environmental+factors+that+can+harm+and+do+harm+people%5C%27s+health%2C+livelihoods+and+lives.%95Sustainability+to+include+health+of+the+land%2C+air+and+sea.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F31-10-2018_13-39-021.1.3-EN-710.docx'),
('chemsc', 'In+view+of+increased+importance+of+core+environmental+issues%2C+a+full-fledged+course+on+environmental+chemistry+is+offered+to+all+the+students+so+as+to+broaden+their+vision+with+focus+on+key+aspects+relevant+to+the+society.+Students+give+priority+to+green+chemistry+methods+while+executing+practicals+and+substantial+emphasis+is+given+to+the+curriculum+with+a+view+to+enrich+an+infuse+this+approach+with+an+open-mindset.+Keeping+in+view+the+strength+of+academic+flexibility%2C+students+studying+synthetic+organic+chemistry+are+encouraged+to+create+avenues+for+green+chemistry+in+a+spontaneous+mode.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F31-10-2018_15-38-06sylabus+env.+chem.docx'),
('sobiotech', 'Institution+conducted+various+programmes+including+Swachchata+programme+and+Smart+girl+training+which+inline+to+the+above+points.+However+our+course+code+BTMB631+%28IPR+%26Bioethics%29+and+BTMB542+%28Environmental+biotechnology%29+emphasized+on+the+environment%2C+Human+and+professional+ethics.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F02-11-2018_11-56-041.3.1.docx'),
('sopedu', 'NIL', '', 'NIL'),
('emrcdavv', 'Sensitization+towards+Gender%2C+Environment+and+Sustainability+and+Human+Values+and+Professional+Ethics+imparted+through+courses+like+Media+and+Society%2C+Media+Laws+%26+Ethics%2C+Media+and+Literature%2C+Film+Studies%2C+Media+and+Politics+and+Media+and+Psychology.+These+courses+extensively+covers+these+areas.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_12-22-1200Sample+Document.pdf'),
('soedu', 'Value+Education+and+Gender+Studies+as+a+theory+paper+at+B.Ed.+level.+The+practical+activities+like+Value+Analysis+Model%2C+Gender+sensitization+program%2C+breast+cancer+awareness+program%2C+AIDS+awareness+program%2C+Environmental+awareness+programs+serve+to+inculcate+important+values+among+students.+Also+the+Exhaustive+Internship+program+at+B.Ed.+and+M.Ed.+level+enhances+the+professional+ethics+among+students.+1.+Value+Education2.+Gender+Studies3.+Life+skills4.+Inclusive+Education+5.+Environmental+Education+6.+Community+based+project++etc.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F05-11-2018_16-32-59Value+Added+course.docx'),
('', 'MA%28ECO%29%3A-++In+MA+we++use+to+give+courses+related+to+the+society++such+as+Enviornmental+Economics+%2C+%2C+Business+Communication%2C+Economics+of+Social+Sector+and+Gender%2C+Labour+problems+and+Social+Welfare+%2C+Welfare+Economics%2C+Economics+of+Development+and+Growth%2C+Agriculture+and+Rural+Development+MBA%28BE%29%3A-+In+this+we+provide+subjects+such+as+Strategic+management+%28to+frame+and+understand+strategies+and+policies%29+%2C+Enterpreneurship%2C+Principles+and+practices+of+management+%2C+Strategic+HR+and+Development+etc+to+improve+students+professionally.MBA%28IB%29+%3A-+International+Business+mainly+focus+on+the+professional+way+to+know+about+trade+and+to+cultivate+it+we+have+subjects+such+as++French%2FGerman%28language%29%2C+Enterpreneurship%2C+Business+Communication+%26Personality+development%2C+Strategic+Management%2C+Consumer+Behaviour+etc.+MBA%28FS%29+%3A-+Mainly+focusing+on+financial+aspects+this+course+is+subject+to+enrich+students+with+subjects+such+as+Rural+Banking+%26+Micro+Finance%2C+Strategic+Financial+Management%2C+HRM%26Accounting+etcM.Phil+%3A-+Tribal+Economics%2C+Advanced+Agricultural+Economics%2C+etc+are+the+special+emphasis+courses+of+this+subject+for+the+societal+development.+', '', 's1'),
('soecon', 'MA%28ECO%29+%3A-+In+MA+we+offer+courses+such+as+Enviornmental+Economics%2C+Welfare+Economics%2C+Labour+Problems+and+Social+Welfare%2C+%2C+Economics+of+Social+Sector+and+Gender%2C+Agriculture+%26+Rural+Development%2C+Urban+Planning++etc+which+link+students+with+th+societal+deveolpment.+MBA%28BE%29+%3A-+In+this+subject+of+BUsiness+Economics%2C+we+offer+Organisational+Behviour%2C+Strategic+HR%26+Development%2C+Business+Communication+%26+Personality+Development%2C+Principles+%26+Practices+of+Management+%2C+Strategic+Management++to+enculculate+professionalism+in+them+.MBA%28IB%29%3A-+Here+', '', 's1'),
('iipsdavv', 'Many+subjects%2F+courses+of+various+programmes+offered+by+the+institute+which+address+the+gender%2C+environment+and+sustainability%2C+human+values+and+professional+ethics++related+aspects.', '', 'Nil'),
('asc', '', '', ''),
('soinstru', 'We+', '', '9'),
('soss', 'MSW+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F16-11-2018_13-13-34value+added.xlsx');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_3_2`
--

INSERT INTO `t1_3_2` (`Username`, `Prog_code`, `Prog_name`, `Course_code`, `Course_name`, `Year_offering`, `Frequency_in_year`, `Year_discontinuation`, `Number_of_students_offered`, `Number_of_students_completing`, `Link`, `id_time`) VALUES
('imsdavv', 'MS5A', '', 'FT 104 C', 'BUSINESS ETHICS AND MANAGEMENT BY INDIAN VALUES', 'July 14 - June 15', 1, 'Still Continuing', 120, 118, 'SCANNED COPY', 'id1540226065791'),
('imsdavv', 'MS5B', '', 'DM 303 C', 'Healthcare Services in Disaster Management', 'July 16 - June 17', 1, 'Still Continuing', 14, 14, 'SCANNED COPY', 'id1540226133293'),
('pranjal', 'TESTINGP1', '', 'TESTING123', 'TESTING COURSE NAME', 'July 14 - June 15', 329, 'July 18 - June 19', 9835, 834079, 'hdsfaoj(**%', 'id1540625715836'),
('saif', 'TESTING1', '', 'CER1G1', 'TESTING 1', 'July 14 - June 15', 87, 'July 17 - June 18', 87, 7, 'sqainsao*&^%$#', 'id1540634811043'),
('sees', 'EN7A', '', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment 3 0 0 48 I', 'July 18 - June 19', 1, 'Still Continuing', 13, 13, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-55-141.1.3-EN-711.docx', 'ididid1540971157678'),
('sees', 'EN7A', '', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment 3 0 0 48 I', 'July 17 - June 18', 1, 'Still Continuing', 17, 17, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-55-141.1.3-EN-711.docx', 'ididid1540971108096'),
('sees', 'EN7A', '', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment 3 0 0 48 I', 'July 16 - June 17', 1, 'Still Continuing', 9, 9, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-55-141.1.3-EN-711.docx', 'ididid1540971063439'),
('sees', 'EN7A', '', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment 3 0 0 48 I', 'July 15 - June 16', 1, 'Still Continuing', 18, 18, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-55-141.1.3-EN-711.docx', 'ididid1540970983192'),
('sees', 'EN7A', '', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment 3 0 0 48 I', 'July 14 - June 15', 1, 'Still Continuing', 18, 18, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-53-411.1.3-EN-711.docx', 'ididid1540970794898'),
('sees', 'EN7A', '', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment 3 0 0 48 I', 'July 18 - June 19', 1, 'Still Continuing', 13, 13, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-55-141.1.3-EN-711.docx', 'idid1540971157678'),
('sees', 'EN7A', '', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment 3 0 0 48 I', 'July 17 - June 18', 1, 'Still Continuing', 17, 17, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-55-141.1.3-EN-711.docx', 'idid1540971108096'),
('sees', 'EN7A', '', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment 3 0 0 48 I', 'July 16 - June 17', 1, 'Still Continuing', 9, 9, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-55-141.1.3-EN-711.docx', 'idid1540971063439'),
('sees', 'EN7A', '', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment 3 0 0 48 I', 'July 15 - June 16', 1, 'Still Continuing', 18, 18, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-55-141.1.3-EN-711.docx', 'idid1540970983192'),
('sees', 'EN7A', '', 'EN-711', 'Sustainable development, Environmental Auditing and Environmental Impact Assessment 3 0 0 48 I', 'July 14 - June 15', 1, 'Still Continuing', 18, 18, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-53-411.1.3-EN-711.docx', 'idid1540970794898'),
('sees', 'EN7A', '', 'EN-804', 'Energy Environment Software Application', 'July 15 - June 16', 3, 'Still Continuing', 18, 18, 'FILE COULD NOT BE UPLOADED REFRESH AND TRY AGAIN', 'id1541054508537'),
('sobiotech', 'BT5A', '', 'BT MB 661a', 'Stem Cell Biology ', 'July 18 - June 19', 1, 'Still Continuing', 50, 50, 'http://www.dauniv.ac.in/notices/Training Program Nov., 2018.pdf', 'id1541185702211'),
('sobiotech', 'BT5A', '', 'BT MB 532', 'Enzyme and Enzyme Technology', 'July 16 - June 17', 1, 'July 18 - June 19', 34, 32, 'http://www.mpbiotech.nic.in/training.html', 'id1541185643954'),
('sobiotech', 'BT5A', '', 'BT MB 532', 'Enzyme and Enzyme Technology', 'July 15 - June 16', 1, 'July 18 - June 19', 23, 23, 'http://www.mpbiotech.nic.in/training.html', 'id1541185596192'),
('sobiotech', 'BT5A', '', 'BT MB 532', 'Enzyme and Enzyme Technology', 'July 14 - June 15', 1, 'July 18 - June 19', 32, 27, 'http://www.mpbiotech.nic.in/training.html', 'id1541185540365'),
('sobiotech', 'BT5A', '', 'BT MB 532', 'Enzyme and Enzyme Technology', 'Feb 14 - June 14', 1, 'July 18 - June 19', 18, 15, 'http://www.mpbiotech.nic.in/training.html', 'id1541185053596'),
('sobiotech', 'BT5A', '', 'BT MB 542', 'Environmental Biotechnology', 'July 14 - June 15', 1, 'Still Continuing', 25, 25, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-19-24hoffmann.pdf', 'id1541185819544'),
('sobiotech', 'BT5A', '', 'BT MB 601', 'Bioprocess Engineering and Technology', 'July 15 - June 16', 1, 'Still Continuing', 25, 25, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-23-18kampmann.pdf', 'id1541186442630'),
('sobiotech', 'BT5A', '', 'BT MB 641', 'Metabolic Engineering ', 'July 17 - June 18', 1, 'Still Continuing', 25, 25, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-26-06heriez.pdf', 'id1541186671411'),
('sobiotech', 'BT5A', '', 'BT MB 552', 'Genomics and Proteomics', 'July 18 - June 19', 1, 'Still Continuing', 25, 25, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-28-22rattei.pdf', 'id1541186835203'),
('emrcdavv', 'EM5A', '', 'T101', 'Sample Document', 'July 14 - June 15', 1, 'Still Continuing', 40, 40, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1541228602510'),
('sopedu', 'PE4A', '', 'BPES', 'Bachelor of Physical Education', 'Feb 14 - June 14', 0, 'Feb 14 - June 14', 0, 0, 'NIL', 'id1541233823542'),
('emrcdavv', 'EM6A', '', 'TEM101', 'Sample Document', 'July 15 - June 16', 1, 'Still Continuing', 50, 50, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1541228633398'),
('soedu', 'ED4A', '', '525 O', 'Value Education/ Non Formal Education/ Action Research', 'July 15 - June 16', 1, 'Still Continuing', 102, 102, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_15-54-42525.docx', 'id1541500775868'),
('soedu', 'ED4A', '', '544 O', 'Elective/Generic Course -2', 'July 15 - June 16', 1, 'Still Continuing', 102, 102, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_15-59-59544.docx', 'id1541500841707'),
('soedu', 'ED4A', '', '531 O', 'Creating an Inclusive Institution', 'July 15 - June 16', 1, 'Still Continuing', 102, 102, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-03-26531.docx', 'id1541501153163'),
('soedu', 'ED4A', '', '535', 'School Internship', 'July 15 - June 16', 1, 'Still Continuing', 102, 102, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-06-47535.docx', 'id1541501362563'),
('soedu', 'ED4A', '', '546', 'School Internship-II', 'July 15 - June 16', 1, 'Still Continuing', 102, 102, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-11-52546.docx', 'id1541501560267'),
('soedu', 'ED4A', '', '517', 'EPC-I Reading and Reflecting', 'July 15 - June 16', 1, 'Still Continuing', 113, 113, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-14-37517.docx', 'id1541501870395'),
('soedu', 'ED4A', '', '526', 'EPC-2 Arts and Aesthetics in Education', 'July 15 - June 16', 1, 'Still Continuing', 102, 102, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-17-14526.docx', 'id1541502030691'),
('soedu', 'ED4A', '', '527', 'EPC-3 Environment Based Project', 'July 15 - June 16', 1, 'Still Continuing', 102, 102, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-19-44527.docx', 'id1541502190436'),
('soedu', 'ED4A', '', '536', 'EPC-4 Creative Expression Skills', 'July 15 - June 16', 1, 'Still Continuing', 102, 102, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-22-16536.docx', 'id1541502374331'),
('soedu', 'ED4A', '', '545', 'EPC-5 Physical Education and Yoga', 'July 15 - June 16', 1, 'Still Continuing', 102, 102, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-25-36545.docx', 'id1541502491627'),
('soedu', 'ED4A', '', '543', 'Information and communication Technology in Education', 'July 15 - June 16', 1, 'Still Continuing', 102, 102, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-27-58543.docx', 'id1541502711100'),
('soedu', 'ED5A', '', '622 O', 'Perspectives of Teacher Education-I', 'July 15 - June 16', 1, 'Still Continuing', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-30-25622.docx', 'id1541502829388'),
('soedu', 'ED5A', '', '641 O', 'Perspectives of Teacher Education-II', 'July 15 - June 16', 1, 'Still Continuing', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-31-40641.docx', 'id1541502976683'),
('soedu', 'ED5A', '', '636 O', 'Community Based Project', 'July 15 - June 16', 1, 'Still Continuing', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-33-08636.docx', 'id1541503051401'),
('soedu', 'ED5A', '', '614', 'Critical Reading of Literature', 'July 15 - June 16', 1, 'Still Continuing', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-44-32614.docx', 'id1541503138893'),
('soedu', 'ED5A', '', '644 O', 'Creating an Inclusive Institution', 'July 15 - June 16', 1, 'Still Continuing', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-48-45644.docx', 'id1541503824524'),
('soedu', 'ED5A', '', '634 O', 'Elective/Generic Course', 'July 15 - June 16', 2, 'Still Continuing', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-52-40COURSE 634.docx', 'id1541504078123'),
('soedu', 'ED5A', '', '617', 'Internship-I', 'July 15 - June 16', 1, 'Still Continuing', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-54-42COURSE 617.docx', 'id1541504312468'),
('soedu', 'ED5A', '', '637', 'Internship-II', 'July 15 - June 16', 1, 'Still Continuing', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-54-42COURSE 617.docx', 'id1541504432563'),
('soedu', 'ED5A', '', '616', 'Dissertation-I', 'July 15 - June 16', 1, 'July 15 - June 16', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-57-33COURSE 616.docx', 'id1541504485974'),
('soedu', 'ED5A', '', '625 O', 'ICT in Education', 'July 15 - June 16', 1, 'July 15 - June 16', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_16-59-32COURSE 625.docx', 'id1541504625044'),
('soedu', 'ED5A', '', 'N625', 'Gender Studies', 'July 17 - June 18', 1, 'Still Continuing', 25, 25, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_17-07-38625.docx', 'id1541504724205'),
('soedu', 'ED5A', '', '624', 'Academic writing and Paper Presentation', 'July 15 - June 16', 1, 'Still Continuing', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/06-11-2018_17-10-24COURSE 624.docx', 'id1541505264725'),
('iipsdavv', 'PS6C', '', 'IM - 818FA', 'Corporate Tax', 'Feb 14 - June 14', 1, 'Still Continuing', 55, 55, 'Nil', 'id1542220228760'),
('chemsc', 'CH5A', '', 'VA-01', 'Hands on Training on Instruments', 'July 17 - June 18', 1, 'July 17 - June 18', 25, 25, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-35-591.3,2 New Value added course broucher.docx', 'id1542265113078'),
('soinstru', 'IN7A', '', 'ISS 710', 'SEMINOR AND COMMUNICATION SKILLS', 'July 16 - June 17', 1, 'Still Continuing', 12, 12, '1', 'id1542271360082'),
('soss', 'SS4A', '', 'B.S.W', 'Bachelor of Social Work', 'July 14 - June 15', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406498860'),
('soss', 'SS5A', '', 'M.S.W.', 'Master of Social Work', 'July 14 - June 15', 1, 'Still Continuing', 39, 4, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406572240'),
('soss', 'SS3A', '', 'PGDGC', 'P.G. Diploma in Guidance and Counselling', 'July 14 - June 15', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406635592'),
('soss', 'SS3B', '', 'PGDHRs', 'P.G. Diploma in Human Rights', 'Feb 14 - June 14', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406684784'),
('soss', 'SS2A', '', 'DCPandA', 'Diploma in Consumer Psychology and Advertising', 'July 14 - June 15', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406720264'),
('soss', 'SS4A', '', 'B.S.W', 'Bachelor of Social Work', 'July 15 - June 16', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406753224'),
('soss', 'SS5A', '', 'M.S.W.', 'Master of Social Work', 'July 15 - June 16', 1, 'Still Continuing', 27, 36, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406794199'),
('soss', 'SS3A', '', 'PGDGC', 'P.G. Diploma in Guidance and Counselling', 'July 15 - June 16', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406831903'),
('soss', 'SS3B', '', 'PGDHRs', 'P.G. Diploma in Human Rights', 'July 15 - June 16', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406864216'),
('soss', 'SS3C', '', 'PGDLLPM', 'P.G. Diploma in Labour Law and Personnel Management', 'July 15 - June 16', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406889984'),
('soss', 'SS2A', '', 'DCPandA', 'Diploma in Consumer Psychology and Advertising', 'July 15 - June 16', 1, 'July 15 - June 16', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406913493'),
('soss', 'SS3A', '', 'PGDGC', 'P.G. Diploma in Guidance and Counselling', 'July 16 - June 17', 1, 'Still Continuing', 0, 11, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406965070'),
('soss', 'SS5A', '', 'M.S.W.', 'Master of Social Work', 'July 16 - June 17', 1, 'Still Continuing', 17, 39, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542406998663'),
('soss', 'SS3A', '', 'PGDGC', 'P.G. Diploma in Guidance and Counselling', 'July 16 - June 17', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407032336'),
('soss', 'SS3B', '', 'PGDHRs', 'P.G. Diploma in Human Rights', 'July 16 - June 17', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407062424'),
('soss', 'SS3C', '', 'PGDLLPM', 'P.G. Diploma in Labour Law and Personnel Management', 'July 16 - June 17', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407083812'),
('soss', 'SS2A', '', 'DCPandA', 'Diploma in Consumer Psychology and Advertising', 'July 16 - June 17', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407103007'),
('soss', 'SS4A', '', 'B.S.W', 'Bachelor of Social Work', 'July 17 - June 18', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407129784'),
('soss', 'SS5A', '', 'M.S.W.', 'Master of Social Work', 'July 17 - June 18', 1, 'Still Continuing', 11, 24, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407175344'),
('soss', 'SS3A', '', 'PGDGC', 'P.G. Diploma in Guidance and Counselling', 'July 17 - June 18', 1, 'Still Continuing', 0, 11, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407205136'),
('soss', 'SS3B', '', 'PGDHRs', 'P.G. Diploma in Human Rights', 'July 17 - June 18', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407230359'),
('soss', 'SS3C', '', 'PGDLLPM', 'P.G. Diploma in Labour Law and Personnel Management', 'July 17 - June 18', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407252071'),
('soss', 'SS2A', '', 'DCPandA', 'Diploma in Consumer Psychology and Advertising', 'July 17 - June 18', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407268077'),
('soss', 'SS4A', '', 'B.S.W', 'Bachelor of Social Work', 'July 18 - June 19', 1, 'Still Continuing', 12, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407300992'),
('soss', 'SS5A', '', 'M.S.W.', 'Master of Social Work', 'July 18 - June 19', 1, 'Still Continuing', 19, 17, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407330983'),
('soss', 'SS5E', '', 'MBARD', 'M.B.A. Rural Development', 'July 18 - June 19', 1, 'Still Continuing', 9, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407368176'),
('soss', 'SS3A', '', 'PGDGC', 'P.G. Diploma in Guidance and Counselling', 'July 18 - June 19', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407455511'),
('soss', 'SS3B', '', 'PGDHRs', 'P.G. Diploma in Human Rights', 'July 18 - June 19', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407497849'),
('soss', 'SS3C', '', 'PGDLLPM', 'P.G. Diploma in Labour Law and Personnel Management', 'July 18 - June 19', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407546511'),
('soss', 'SS2A', '', 'DCPandA', 'Diploma in Consumer Psychology and Advertising', 'July 18 - June 19', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407570208'),
('soss', 'SS1A', '', 'LLPM(C)', 'Certificate in Labour Law and Personnel Management', 'July 18 - June 19', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407596079'),
('soss', 'SS1B', '', 'CPA(C)', 'Certificate in Consumer Psychology and Advertising', 'July 18 - June 19', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407632295'),
('soss', 'SS1C', '', 'GandC(C)', 'Certificate in Guidance and Counselling', 'July 18 - June 19', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407661943'),
('soss', 'SS1D', '', 'HRs(C)', 'Certificate in Human Rights', 'July 18 - June 19', 1, 'Still Continuing', 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-32-30value added.xlsx', 'id1542407686255'),
('socsit', 'CS5D', '', 'CS-5616', 'E- Commerce', 'Feb 14 - June 14', 1, 'Still Continuing', 23, 23, '132', 'idid1542455292670'),
('socsit', 'CS5D', '', 'CS-4409A', 'Introduction to Enterprise Resource Planning', 'Feb 14 - June 14', 1, 'Still Continuing', 23, 23, '132', 'idid1542455427852'),
('socsit', 'CS5D', '', 'CS-5805B', 'Project on ERP', 'Feb 14 - June 14', 1, 'Still Continuing', 23, 23, '132', 'idid1542455581628'),
('socsit', 'CS4A', '', 'CS-3006	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 38, 37, '132', 'id1542455777744'),
('socsit', 'CS4A', '', 'CS-3801A	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 38, 38, '132', 'id1542455782314'),
('socsit', 'CS4A', '', 'CS-3206	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 39, 39, '132', 'id1542455785220'),
('socsit', 'CS4A', '', 'IC-2927	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 39, 36, '132', 'id1542455787738'),
('socsit', 'CS4A', '', 'IC-3913          ', 'Financial Accounting', 'Feb 14 - June 14', 1, 'Still Continuing', 41, 40, '132', 'id1542455795652'),
('socsit', 'CS4A', '', 'CS-2222	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 42, 42, '132', 'id1542455798562'),
('socsit', 'CS4A', '', 'CS-3207	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 44, 36, '132', 'id1542455801906'),
('socsit', 'CS4A', '', 'CS-2402	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 46, 41, '132', 'id1542455810594'),
('socsit', 'CS4A', '', 'CS-3505	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 51, 51, '132', 'id1542456047712'),
('socsit', 'CS4A', '', 'IC-3929	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 51, 51, '132', 'id1542456066404'),
('socsit', 'CS4A', '', 'CS-3210	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 51, 51, '132', 'id1542456069012'),
('socsit', 'CS4A', '', 'CS-3801B', '	Project', 'Feb 14 - June 14', 1, 'Still Continuing', 51, 51, '132', 'id1542456071700'),
('socsit', 'CS4A', '', 'CS-1501	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 57, 57, '132', 'id1542456275618'),
('socsit', 'CS4A', '', 'CS-1201	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 58, 57, '132', 'id1542456278844'),
('socsit', 'CS4A', '', 'CS-1202', 'Programming and Problem Solving Using C - II', 'Feb 14 - June 14', 1, 'Still Continuing', 58, 51, '132', 'id1542456281252'),
('socsit', 'CS4A', '', 'IC-2928	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 46, 46, '132', 'id1542456382248'),
('socsit', 'CS4A', '', 'CS-3801A	', '', 'Feb 14 - June 14', 1, 'Still Continuing', 46, 43, '132', 'id1542456385204'),
('socsit', 'CS4A', '', 'CS-3604', 'Data and Computer Communication', 'Feb 14 - June 14', 1, 'Still Continuing', 47, 38, '132', 'id1542456385940'),
('socsit', 'CS7B', '', 'CS-4407', 'Information System Design', 'Feb 14 - June 14', 1, 'Still Continuing', 12, 12, '132', 'id1542456765914'),
('socsit', 'CS7B', '', 'CS-6316        ', 'Software Reuse and Customization', 'Feb 14 - June 14', 1, 'Still Continuing', 12, 12, '132', 'id1542456767418'),
('socsit', 'CS7B', '', 'CS -6313', 'Software Testing and Quality Assurance', 'Feb 14 - June 14', 1, 'Still Continuing', 12, 12, '132', 'id1542456768338'),
('socsit', 'CS7B', '', 'CS-6315', 'Usability Engineering', 'Feb 14 - June 14', 1, 'Still Continuing', 12, 12, '132', 'id1542456769426'),
('socsit', 'CS7C', '', 'CS-5615', 'Information Security', 'Feb 14 - June 14', 1, 'Still Continuing', 13, 13, '132', 'id1542456998196'),
('socsit', 'CS7C', '', 'CS-6628   ', 'Legal Aspects of Information Security                            ', 'Feb 14 - June 14', 1, 'Still Continuing', 13, 13, '132', 'id1542457002442'),
('socsit', 'CS7C', '', 'CS-6624', 'Network Management', 'Feb 14 - June 14', 1, 'Still Continuing', 13, 13, '132', 'id1542457003466'),
('socsit', 'CS7C', '', 'CS-5618', 'Network Security', 'Feb 14 - June 14', 1, 'Still Continuing', 15, 15, '132', 'id1542457050122'),
('socsit', 'CS5B', '', 'CS-4508', 'Computer Graphics and Multimedia', 'Feb 14 - June 14', 1, 'Still Continuing', 29, 28, '132', 'id1542457341204'),
('socsit', 'CS5C', '', 'CS-4508', 'Computer Graphics and Multimedia', 'Feb 14 - June 14', 1, 'Still Continuing', 29, 28, '132', 'id1542457344616');

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1_3_4`
--

INSERT INTO `t1_3_4` (`Username`, `Prog_code`, `Prog_name`, `Year`, `Number_of_students_programme`, `Number_of_students_internship`, `Link`, `id_time`) VALUES
('sopedu', 'PE5A', 'M.P.Ed.', 'July 18 - June 19', 23, 23, 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-30-101.2.2 MPEd Scheme Syllabus UTD New 2016 17.pdf', 'idid1539853994867'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'July 17 - June 18', 49, 47, 's4', 'idid1541062099001'),
('soecon', 'EC5A', 'M.A. (Economics)', 'July 17 - June 18', 9, 9, 's1', 'idid1541061956115'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'Feb 14 - June 14', 22, 14, 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_12-54-44summer internship 2013-14.docx', 'id1540624936072'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'Feb 14 - June 14', 22, 14, 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_12-54-44summer internship 2013-14.docx', 'id1540624936072'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'July 14 - June 15', 30, 13, 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_12-56-26summer internship 2014-15 - .docx', 'id1540625601187'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'Feb 14 - June 14', 22, 14, 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_12-54-44summer internship 2013-14.docx', 'id1540624936072'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'July 14 - June 15', 30, 13, 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_12-56-26summer internship 2014-15 - .docx', 'id1540625601187'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'July 17 - June 18', 15, 13, 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_12-57-43summer internship 2017-18 -.docx', 'id1540625702498'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'Feb 14 - June 14', 22, 14, 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_12-54-44summer internship 2013-14.docx', 'id1540624936072'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'July 14 - June 15', 30, 13, 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_12-56-26summer internship 2014-15 - .docx', 'id1540625601187'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'July 17 - June 18', 15, 13, 'http://uid.dauniv.ac.in/NAC/profile/docs/27-10-2018_12-57-43summer internship 2017-18 -.docx', 'id1540625702498'),
('pranjal', 'TESTINGP1', 'TESTING NAME 1 NAME', 'Feb 14 - June 14', 3984, 8, 'sak&*()^%', 'id1540625763425'),
('saif', 'TESTING1', 'TESTING NAME 1', 'July 15 - June 16', 3, 45, 'safm(^(*&$&(', 'id1540634888835'),
('doll', 'LE4A', 'B. Voc. Interior Design', 'July 17 - June 18', 38, 38, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_13-56-45B.VOc. -ID-18.docx', 'id1540846936111'),
('doll', 'LE4B', 'B.Voc. Fashion Technology', 'July 17 - June 18', 25, 25, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_14-02-37B.Voc. FT, II. III.docx', 'id1540847270515'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'July 17 - June 18', 24, 24, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_17-13-04Dessertation of M.Sc. students 2018.docx', 'id1540899163180'),
('soex', 'EL7A', 'M.Tech Embedded Systems', 'July 18 - June 19', 16, 16, 'http://www.elex.dauniv.ac.in/M. Tech._Internship 2018.pdf', 'id1540966359107'),
('soex', 'EL7C', 'M.Tech Mobile Computing Technology', 'July 18 - June 19', 3, 3, 'http://www.elex.dauniv.ac.in/M. Tech._Internship 2018.pdf', 'id1540968536152'),
('soex', 'EL7A', 'M.Tech Embedded Systems', 'July 18 - June 19', 16, 16, 'http://www.elex.dauniv.ac.in/M. Tech._Internship 2018.pdf', 'id1540966359107'),
('soex', 'EL7C', 'M.Tech Mobile Computing Technology', 'July 18 - June 19', 3, 3, 'http://www.elex.dauniv.ac.in/M. Tech._Internship 2018.pdf', 'id1540968536152'),
('soex', 'EL5A', 'M.Sc Electronics', 'July 17 - June 18', 4, 4, 'http://www.elex.dauniv.ac.in/M. Sc._Internship 2018.pdf', 'id1540968587723'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)&#65533;Regular', 'July 17 - June 18', 9, 8, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_12-59-411.3.4- Student field projectinternships- List of studentss undertaking these projectsinternships.docx', 'id1540971252675'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'July 17 - June 18', 53, 51, 's2', 'idid1541062041713'),
('socsit', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 'July 17 - June 18', 17, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-59-04InternshipLetters2017-18.zip', 'ididididid1541067195402'),
('socsit', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 'July 17 - June 18', 64, 5, 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-59-04InternshipLetters2017-18.zip', 'ididididid1541067468616'),
('socsit', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 'July 17 - June 18', 13, 2, 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_15-59-04InternshipLetters2017-18.zip', 'ididididid1541067440750'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'July 17 - June 18', 12, 12, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_15-35-14m.sc. pharma project.docx', 'idididid1540623873620'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'July 17 - June 18', 36, 36, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_15-31-44M.Sc. Project 2018 - FINAL.docx', 'idididid1540623806380'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'July 17 - June 18', 45, 45, 's3', 'idid1541062093009'),
('sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 'Feb 14 - June 14', 14, 14, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187100874'),
('sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 'July 14 - June 15', 11, 11, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187173801'),
('sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 'July 15 - June 16', 12, 12, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187189610'),
('sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 'July 16 - June 17', 10, 10, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187203256'),
('sobiotech', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 'July 17 - June 18', 14, 14, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187215978'),
('sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 'Feb 14 - June 14', 11, 11, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187237722'),
('sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 'July 14 - June 15', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187262316'),
('sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 'July 15 - June 16', 13, 13, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187275369'),
('sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 'July 16 - June 17', 9, 9, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187289557'),
('sobiotech', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 'July 17 - June 18', 5, 5, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187303141'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'Feb 14 - June 14', 9, 9, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187315218'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'July 14 - June 15', 9, 9, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187336867'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'July 15 - June 16', 5, 5, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187357561'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'July 16 - June 17', 4, 4, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187371312'),
('sobiotech', 'BT5C', 'M.Sc. Genetic Engineering', 'July 17 - June 18', 6, 6, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_12-35-51M.Sc. Dissertation List last 5 yr.docx', 'id1541187385207'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'July 14 - June 15', 40, 40, 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_16-51-00EMRC_Internship_Record_2018.PDF', 'idid1541228734309'),
('soecon', 'EC8X', 'M.Phil.', 'July 17 - June 18', 6, 6, 's5', 'id1541228759687'),
('soedu', 'ED4A', 'B.Ed.', 'July 17 - June 18', 108, 108, 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_12-01-41School_letters.docx', 'id1542004625658'),
('soedu', 'ED5A', 'M.Ed.', 'July 17 - June 18', 7, 7, 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_12-07-14Community based project.docx', 'id1542005554992'),
('sopharma', 'PY4A', 'B.Pharm.', 'July 17 - June 18', 60, 60, 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_14-50-17Professional Training Final.pdf', 'id1542093347934'),
('soecon', 'EC5D', 'M.B.A. (IB)', 'July 17 - June 18', 49, 47, 's4', 'ididid1541062099001'),
('soecon', 'EC5A', 'M.A. (Economics)', 'July 17 - June 18', 9, 9, 's1', 'ididid1541061956115'),
('soecon', 'EC5B', 'M.B.A. (BE)', 'July 17 - June 18', 53, 51, 's2', 'ididid1541062041713'),
('soecon', 'EC5C', 'M.B.A. (FS)', 'July 17 - June 18', 45, 45, 's3', 'ididid1541062093009'),
('soecon', 'EC8X', 'M.Phil.', 'July 17 - June 18', 6, 6, 's5', 'idid1541228759687'),
('imsdavv', 'MS5A', 'MBA(FT)', 'July 17 - June 18', 120, 118, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-44-58IMS_Internship_2017.pdf', 'idid1540226207762'),
('imsdavv', 'MS5B', 'MBA(DM)', 'July 17 - June 18', 14, 6, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-44-58IMS_Internship_2017.pdf', 'id1542266052115'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'July 17 - June 18', 120, 110, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-44-58IMS_Internship_2017.pdf', 'id1542266076209'),
('imsdavv', 'MS5D', 'MBA(MM)', 'July 17 - June 18', 120, 100, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-44-58IMS_Internship_2017.pdf', 'id1542266091695'),
('imsdavv', 'MS5E', 'MBA(HR)', 'July 17 - June 18', 120, 112, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-44-58IMS_Internship_2017.pdf', 'id1542266108628'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'July 17 - June 18', 60, 48, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-44-58IMS_Internship_2017.pdf', 'id1542266127577'),
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'July 17 - June 18', 60, 44, 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_12-44-58IMS_Internship_2017.pdf', 'id1542266145041'),
('soinstru', 'IN7A', 'M.Tech.  (Instrumentation)', 'July 18 - June 19', 12, 12, '10', 'id1542271506084'),
('soss', 'SS3C', 'G Diploma in Labour Law and Personnel Management', 'July 18 - June 19', 3, 3, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542399875697'),
('soss', 'SS4A', 'Bachelor of Social Work (B.S.W.)', 'July 18 - June 19', 2, 2, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542399903808'),
('soss', 'SS5A', 'Master of Social Work (M.S.W.)', 'Feb 14 - June 14', 42, 42, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542399941361'),
('soss', 'SS5A', 'Master of Social Work (M.S.W.)', 'July 15 - June 16', 27, 27, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542399971744'),
('soss', 'SS5A', 'Master of Social Work (M.S.W.)', 'July 16 - June 17', 17, 17, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542399985928'),
('soss', 'SS5A', 'Master of Social Work (M.S.W.)', 'July 17 - June 18', 11, 11, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542400014968'),
('soss', 'SS5A', 'Master of Social Work (M.S.W.)', 'July 18 - June 19', 12, 12, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542400034288'),
('soss', 'SS5B', 'M.A. Sociology', 'July 18 - June 19', 5, 5, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542400098232'),
('soss', 'SS5C', 'M.A. Political Science', 'July 18 - June 19', 12, 12, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542400241865'),
('soss', 'SS5D', 'M.A. Clinical Psychology', 'July 18 - June 19', 22, 22, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542400269232'),
('soss', 'SS5E', 'M.B.A. Rural Development', 'July 18 - June 19', 9, 9, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542400296328'),
('soss', 'SS5F', 'M.B.A. Public administration and Policy', 'July 18 - June 19', 11, 11, 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-29-17FIELD PROJECT.xlsx', 'id1542400315977'),
('iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs', 'Feb 14 - June 14', 72, 28, 'Nil', 'idid1542220329808'),
('iipsdavv', 'PS5B', 'MBA (APR)', 'July 18 - June 19', 76, 13, 'Nil', 'id1542454140751');

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
('sostat', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/22-10-2018_16-41-54Feedback_2014.xls', 'id1540163212648'),
('sopedu', '4', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-44-39Feedback of SOPE Jan Apr 2016.pdf', 'id1540531135597'),
('admin2', '3', 'fcfd', 'id1540559538609'),
('saif', '3', 'dgbj$^&()^$#', 'id1540634948548'),
('pranjal', '0', 'baap ka raj', 'id1540661032437'),
('somath', '2', 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_17-46-51student feedback 2014-2018.pdf', 'id1540812060767'),
('biochem', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_17-16-42feedback Ph.D. May 18.doc', 'id1540899544222'),
('biochem', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_17-15-30feedback May 18.doc', 'id1540899442877'),
('doll', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_14-02-55saved_resource(1).html', 'id1541106795325'),
('sees', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_16-10-311.1.4-structured student feedback - graph.jpg', 'id1541069044490'),
('imsdavv', '2', 'www.ims.dauniv.ac.in', 'id1541152306923'),
('emrcdavv', '4', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'id1541228755046'),
('soecon', '1', '5', 'id1541228827758'),
('soedu', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_12-22-11Alumni feedback.pdf, http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_12-22-31Expert feedback.pdf', 'id1542005630057'),
('soecon', '1', '5', 'id1541228827758'),
('chemsc', '4', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_23-48-18Feedback from Stake holder and ATR.pdf', 'id1542133361503'),
('iipsdavv', '3', 'Nil', 'id1542220365205'),
('asc', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_16-38-2413-14 RPT.pdf', 'id1542372369926'),
('asc', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_16-38-5214-15 Rpt.pdf', 'id1542372409530'),
('asc', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_16-39-5815-16.pdf', 'id1542372433109'),
('asc', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_16-40-4416-17 RPT.pdf', 'id1542372494790'),
('asc', '1', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_16-41-1617-18 RPT.pdf', 'id1542372548885'),
('Soinstru', '4', '1', 'id1542271551313'),
('Soinstru', '4', '2', 'id1542440071655');

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
('sopedu', 'B', 'http://uid.dauniv.ac.in/NAC/profile/docs/26-10-2018_10-48-43Feedback of SOPE Jan-Apr 2016.pdf', 'id1540531343146'),
('imsdavv', 'E', 'http://uid.dauniv.ac.in/NAC/profile/docs/22-10-2018_22-05-24IMS_SUBJECT CODE FAC_12_2018.xls', 'id1540226284048'),
('saif', 'C', 'sakljsdlk*&%(', 'id1540634975038'),
('pranjal', 'A', 'jai mata di', 'id1540661074285'),
('somath', 'C', 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_17-46-51student feedback 2014-2018.pdf', 'id1540815690774'),
('biochem', 'C', 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_17-1http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-08-16feedback May 18 - Course Criteria I.doc7-56feedback May 18.doc', 'id1540899630541'),
('sostat', 'B', 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_15-53-23Feedback_2014.xls', 'id1540979829462'),
('chemsc', 'A', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_23-48-18Feedback from Stake holder and ATR.pdf', 'id1542133448501'),
('doll', 'A', 'http://uid.dauniv.ac.in/NAC/profile/docs/01-11-2018_16-24-32Faculty Feedback 2017 (1).xlsx', 'id1541115290820'),
('sees', 'C', 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_10-49-411.1.4-structured student feedback - graph.jpg', 'id1541136218200'),
('sobiotech', 'A', 'http://www.biotech.dauniv.ac.in/index.html#', 'id1541187602608'),
('biochem', 'C', 'http://uid.dahttp://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-09-15feedback Ph.D. May 18 - Course Criteria I.docuniv.ac.in/NAC/profile/docs/30-10-2018_17-18-29feedback Ph.D. May 18.doc', 'id1540899688970'),
('soecon', 'D', '5', 'id1541228711958'),
('soedu', 'C', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_12-36-22M.Ed. student satisfactioc scale.docx, http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_17-01-46B.Ed Feed Back Analysis.docx,', 'id1542006643234'),
('soecon', 'D', '5', 'id1541228711958'),
('iipsdavv', 'A', 'Nil', 'id1542220398300'),
('soinstru', 'A', '1', 'id1542271596377'),
('emrcdavv', 'A', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'id1542436343223');

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2_1_1`
--

INSERT INTO `t2_1_1` (`Username`, `Year`, `Prog_code`, `Prog_name`, `Total_Students`, `Other_state_student_number`, `Other_country_student_number`, `Link`, `id_time`) VALUES
('admin2', 'July 14 - June 15', 'AD2BSC', 'BACHELOR OF SCIENCE', 323, 78, 67, 'djskjd', 'manualid1'),
('saif', 'Feb 14 - June 14', 'TESTING1', 'TESTING NAME 1', 34, 34, 34, 'xzsd@#$^%$', 'manualid2'),
('pranjal', 'July 14 - June 15', 'TESTINGP1', 'TESTING NAME 1 NAME', 222, 555, 555, 'google.com', 'manualid3'),
('somath', 'July 18 - June 19', 'MT9Z', 'Ph.D.', 12, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid4'),
('somath', 'July 17 - June 18', 'MT9Z', 'Ph.D.', 6, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid5'),
('somath', 'July 16 - June 17', 'MT9Z', 'Ph.D.', 5, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid6'),
('somath', 'July 15 - June 16', 'MT9Z', 'Ph.D.', 5, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid7'),
('somath', 'July 14 - June 15', 'MT8X', 'M.Phil.', 9, 3, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid8'),
('somath', 'July 14 - June 15', 'MT9Z', 'Ph.D.', 6, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid9'),
('somath', 'July 15 - June 16', 'MT8X', 'M.Phil.', 9, 3, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid10'),
('somath', 'July 17 - June 18', 'MT5A', 'M.Sc.(Mathematics)', 71, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid11'),
('somath', 'July 18 - June 19', 'MT5A', 'M.Sc.(Mathematics)', 62, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid12'),
('somath', 'July 15 - June 16', 'MT5A', 'M.Sc.(Mathematics)', 86, 5, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid13'),
('somath', 'July 16 - June 17', 'MT5A', 'M.Sc.(Mathematics)', 83, 3, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid14'),
('somath', 'July 14 - June 15', 'MT5A', 'M.Sc.(Mathematics)', 81, 6, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/28-10-2018_17-36-43student data 2014-2018.pdf', 'manualid15'),
('sopedu', 'July 17 - June 18', 'PE5A', 'M.P.Ed.', 23, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_17-05-29MPEd July 2017.pdf', 'manualid16'),
('sopedu', 'July 18 - June 19', 'PE4A', 'B.P.E.S.', 70, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_17-06-39BPES July 2018.pdf', 'manualid17'),
('sopedu', 'July 17 - June 18', 'PE4A', 'B.P.E.S.', 50, 3, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_17-04-10BPES July 2017.pdf', 'manualid18'),
('sopedu', 'July 14 - June 15', 'PE5A', 'M.P.Ed.', 50, 8, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_16-57-14BPES July 2014.pdf', 'manualid19'),
('sopedu', 'July 14 - June 15', 'PE5A', 'M.P.Ed.', 30, 10, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_16-58-30MPEd July 2014.pdf', 'manualid20'),
('sopedu', 'July 14 - June 15', 'PE8X', 'M.Phil.', 11, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_16-59-52MPhil Nov 2014.pdf', 'manualid21'),
('sopedu', 'July 15 - June 16', 'PE5A', 'M.P.Ed.', 30, 5, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_17-01-14MPEd July 2015.pdf', 'manualid22'),
('sopedu', 'July 16 - June 17', 'PE4A', 'B.P.E.S.', 50, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_17-02-08BPES July 2016.pdf', 'manualid23'),
('sopedu', 'July 16 - June 17', 'PE5A', 'M.P.Ed.', 30, 3, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_17-03-07MPEd July 2016.pdf', 'manualid24'),
('sopedu', 'July 18 - June 19', 'PE5A', 'M.P.Ed.', 25, 8, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/29-10-2018_17-07-23MPEd July 2018.pdf', 'manualid25'),
('sostat', 'July 17 - June 18', 'ST5A', 'M.Sc. Statistics', 15, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-49-192017-18.docx', 'manualid26'),
('sostat', 'July 15 - June 16', 'ST5A', 'M.Sc. Statistics', 25, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_14-49-442015-16-converted.pdf', 'manualid27'),
('soex', 'July 14 - June 15', 'EL9Z', 'Ph.D.', 8, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-15-35aqar@18062015.docx', 'manualid28'),
('soex', 'July 14 - June 15', 'EL7C', 'M.Tech Mobile Computing Technology', 22, 7, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-17-16Roll_List_MTech_2014-16.xlsx', 'manualid29'),
('soex', 'July 14 - June 15', 'EL7B', 'M.Tech Spatial Information Technology', 14, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-16-45Roll_List_MTech_2014-16.xlsx', 'manualid30'),
('soex', 'July 14 - June 15', 'EL5B', 'M.Sc Electronics & Communication', 11, 4, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-17-45MSC_2014_16 Roll list.xlsx', 'manualid31'),
('soex', 'July 14 - June 15', 'EL7A', 'M.Tech Embedded Systems', 18, 7, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-16-17Roll_List_MTech_2014-16_ES.xlsx', 'manualid32'),
('soex', 'July 16 - June 17', 'EL5A', 'M.Sc Electronics', 7, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-08-30Roll_List_M.Sc._2016-18.xlsx', 'manualid33'),
('soex', 'July 16 - June 17', 'EL7C', 'M.Tech Mobile Computing Technology', 10, 3, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-08-11Roll_List_MTech_2016-18.xlsx', 'manualid34'),
('soex', 'July 16 - June 17', 'EL7A', 'M.Tech Embedded Systems', 17, 5, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-07-34AQAR_ SoEx 2016-17 @15July2017.doc', 'manualid35'),
('soex', 'July 17 - June 18', 'EL7A', 'M.Tech Embedded Systems', 24, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-01-34AQAR_ SoEx 2017-18 @13Aug2018.doc', 'manualid36'),
('sostat', 'July 16 - June 17', 'ST5A', 'M.Sc. Statistics', 18, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-48-072016-17.docx', 'manualid37'),
('sostat', 'July 14 - June 15', 'ST5A', 'M.Sc. Statistics', 30, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_14-45-582014-15-converted.pdf', 'manualid38'),
('sostat', 'July 18 - June 19', 'ST5A', 'M.Sc. Statistics', 16, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-50-242018-19.docx', 'manualid39'),
('biochem', 'July 18 - June 19', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 22, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_14-47-15QnM 2.1.1.docx', 'idid1540976654224'),
('biochem', 'July 17 - June 18', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 18, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_14-46-49QnM 2.1.1.docx', 'idid1540976649578'),
('biochem', 'July 16 - June 17', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 28, 5, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_14-46-25QnM 2.1.1.docx', 'idid1540976642403'),
('biochem', 'July 15 - June 16', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 17, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_14-46-06QnM 2.1.1.docx', 'idid1540976626830'),
('biochem', 'July 14 - June 15', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 15, 3, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/31-10-2018_14-45-28QnM 2.1.1.docx', 'idid1540975287110'),
('sobiotech', 'July 14 - June 15', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 12, 5, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190337332'),
('sobiotech', 'July 15 - June 16', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 10, 8, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190433130'),
('sobiotech', 'July 16 - June 17', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 14, 6, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190470927'),
('sobiotech', 'July 17 - June 18', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 14, 9, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190498903'),
('sobiotech', 'July 18 - June 19', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 11, 6, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190544391'),
('sobiotech', 'July 14 - June 15', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 13, 3, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190576006'),
('sobiotech', 'July 15 - June 16', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 9, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190657756'),
('sobiotech', 'July 16 - June 17', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 5, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190697845'),
('sobiotech', 'July 17 - June 18', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 2, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190736877'),
('sobiotech', 'July 18 - June 19', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 14, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190780283'),
('sobiotech', 'July 14 - June 15', 'BT5C', 'M.Sc. Genetic Engineering', 5, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190813271'),
('sobiotech', 'July 15 - June 16', 'BT5C', 'M.Sc. Genetic Engineering', 4, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190872800'),
('sobiotech', 'July 16 - June 17', 'BT5C', 'M.Sc. Genetic Engineering', 6, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190890302'),
('sobiotech', 'July 17 - June 18', 'BT5C', 'M.Sc. Genetic Engineering', 4, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190934955'),
('sobiotech', 'July 18 - June 19', 'BT5C', 'M.Sc. Genetic Engineering', 11, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/02-11-2018_13-36-18state wise students.docx', 'id1541190967539'),
('emrcdavv', 'July 18 - June 19', 'EM5A', 'M.B.A. Media Management', 40, 5, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1542108395997'),
('emrcdavv', 'July 18 - June 19', 'EM6A', 'M.Sc. EM', 54, 5, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1542108384517'),
('doll', 'Feb 14 - June 14', 'LE2A', 'Diploma in Interior Designing', 22, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-05-33DID 2014.docx', 'id1541279770329'),
('doll', 'July 14 - June 15', 'LE2A', 'Diploma in Interior Designing', 11, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-05-59DID 2015.docx', 'id1541279799617'),
('doll', 'July 15 - June 16', 'LE2A', 'Diploma in Interior Designing', 11, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-06-32DID 2016.docx', 'id1541279827379'),
('doll', 'July 16 - June 17', 'LE2A', 'Diploma in Interior Designing', 11, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-07-21DID 2017 (1).docx', 'id1541279857347'),
('doll', 'July 17 - June 18', 'LE2A', 'Diploma in Interior Designing', 16, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-12-30DID 2017 (1).docx', 'id1541279906277'),
('doll', 'July 18 - June 19', 'LE2A', 'Diploma in Interior Designing', 23, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-14-31DID 2018.docx', 'id1541280215742'),
('doll', 'Feb 14 - June 14', 'LE4A', 'B. Voc. Interior Design', 0, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-19-06000.docx', 'id1541280484837'),
('doll', 'July 14 - June 15', 'LE4A', 'B. Voc. Interior Design', 31, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-20-30BID 2014.docx', 'id1541280540333'),
('doll', 'July 15 - June 16', 'LE4A', 'B. Voc. Interior Design', 50, 4, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-21-25BID 2015.docx', 'id1541280696009'),
('doll', 'July 16 - June 17', 'LE4A', 'B. Voc. Interior Design', 50, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-22-47BID 2016.docx', 'id1541280756636'),
('doll', 'July 17 - June 18', 'LE4A', 'B. Voc. Interior Design', 50, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-25-49BID 2018.docx', 'id1541280952111'),
('doll', 'Feb 14 - June 14', 'LE4B', 'B.Voc. Fashion Technology', 0, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-26-35000.docx', 'id1541281015462'),
('doll', 'July 14 - June 15', 'LE4B', 'B.Voc. Fashion Technology', 4, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-27-56BFT -2014.docx', 'id1541281087465'),
('doll', 'July 15 - June 16', 'LE4B', 'B.Voc. Fashion Technology', 8, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-28-42BFT 2015 (2).docx', 'id1541281140898'),
('doll', 'July 16 - June 17', 'LE4B', 'B.Voc. Fashion Technology', 18, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-29-42BFT 2016 (2).docx', 'id1541281196515'),
('doll', 'July 17 - June 18', 'LE4B', 'B.Voc. Fashion Technology', 24, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-31-54BFT 2018 (1).docx', 'id1541281256083'),
('doll', 'July 18 - June 19', 'LE4B', 'B.Voc. Fashion Technology', 18, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_14-33-02BFT 2018 (1).docx', 'id1541281405195'),
('sees', 'July 15 - June 16', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 17, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_14-54-45Rajesh Singh 001-2015-16.pdf', 'ididid1542101336101'),
('sees', 'July 14 - June 15', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 17, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_14-57-02Rajesh Singh 001-2015-16.pdf', 'ididid1542101411531'),
('sees', 'Feb 14 - June 14', 'EN8X', 'M.Phil.', 7, 6, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_14-45-26criteria II-2.1.1 - pdf link -2013-14.pdf', 'ididid1542100866150'),
('sees', 'July 17 - June 18', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 17, 3, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_14-38-53criteria II-2.1.1- pdf link -2017-18.pdf', 'idididid1542100118910'),
('sees', 'July 16 - June 17', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 9, 4, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_14-51-18criteria-II 2.1.1-link pdf -2016-17.pdf', 'ididid1542101130008'),
('sees', 'July 17 - June 18', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 13, 6, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_14-31-43criteria -II-2.1.1-pdf link -2018-19.pdf', 'idididid1542098657641'),
('sees', 'Feb 14 - June 14', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 17, 6, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_16-01-14CRITERIA II -2.1.1-LIN PDF M.TECH 2013-14.pdf', 'id1542105267709'),
('emrcdavv', 'July 17 - June 18', 'EM6A', 'M.Sc. EM', 53, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1542108356341'),
('emrcdavv', 'July 17 - June 18', 'EM5A', 'M.B.A. Media Management', 42, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1542108367892'),
('emrcdavv', 'July 16 - June 17', 'EM5A', 'M.B.A. Media Management', 42, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1542108336852'),
('emrcdavv', 'July 16 - June 17', 'EM6A', 'M.Sc. EM', 51, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1542108326333'),
('emrcdavv', 'July 15 - June 16', 'EM6A', 'M.Sc. EM', 49, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1542108294974'),
('emrcdavv', 'July 15 - June 16', 'EM5A', 'M.B.A. Media Management', 41, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idid1542108314140'),
('chemsc', 'July 16 - June 17', 'CH5A', 'M.Sc. Chemistry', 39, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-57-192.1.1-Students enrolled from other States.docx', 'ididid1542187527241'),
('chemsc', 'July 17 - June 18', 'CH5A', 'M.Sc. Chemistry', 42, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-57-192.1.1-Students enrolled from other States.docx', 'ididid1542188133964'),
('emrcdavv', 'July 14 - June 15', 'EM6A', 'M.Sc. EM', 43, 3, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idididid1541228829695'),
('emrcdavv', 'July 14 - June 15', 'EM5A', 'M.B.A. Media Management', 58, 3, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-22-1200Sample Document.pdf', 'idididid1541228804662'),
('chemsc', 'July 18 - June 19', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 20, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_23-57-192.1.1-Students enrolled from other States.docx', 'ididid1542188265801'),
('iipsdavv', 'July 14 - June 15', 'PS4A', 'BCom(Hons)', 61, 0, 0, 'To be attached', 'id1542013528047'),
('iipsdavv', 'July 15 - June 16', 'PS4A', 'BCom(Hons)', 59, 1, 0, 'To be attached', 'id1542013530035'),
('iipsdavv', 'July 16 - June 17', 'PS4A', 'BCom(Hons)', 62, 1, 0, 'To be attached', 'id1542013530988'),
('iipsdavv', 'July 17 - June 18', 'PS4A', 'BCom(Hons)', 66, 0, 0, 'To be attached', 'id1542013531986'),
('soinstru', 'July 14 - June 15', 'IN7A', 'M.Tech.  (Instrumentation)', 18, 6, 0, '1', 'id1542271786990'),
('sopharma', 'July 18 - June 19', 'PY4A', 'B.Pharm.', 60, 2, 0, '10', 'idid1542267335171'),
('sopharma', 'July 17 - June 18', 'PY4A', 'B.Pharm.', 54, 0, 0, '10', 'idid1542267785687'),
('sopharma', 'July 16 - June 17', 'PY4A', 'B.Pharm.', 48, 3, 0, '10', 'idid1542267901782'),
('sopharma', 'July 15 - June 16', 'PY4A', 'B.Pharm.', 54, 0, 0, '10', 'idid1542267945833'),
('sopharma', 'July 14 - June 15', 'PY4A', 'B.Pharm.', 60, 2, 0, '10', 'idid1542267971446'),
('sopharma', 'July 18 - June 19', 'PY7A', 'M.Pharm.', 14, 0, 0, '10', 'idid1542268216435'),
('sopharma', 'July 17 - June 18', 'PY7A', 'M.Pharm.', 14, 1, 0, '10', 'idid1542268266402'),
('sopharma', 'July 16 - June 17', 'PY7A', 'M.Pharm.', 6, 0, 0, '10', 'idid1542268294633'),
('sopharma', 'July 15 - June 16', 'PY7A', 'M.Pharm.', 8, 0, 0, '10', 'idid1542268326874'),
('sopharma', 'July 14 - June 15', 'PY7A', 'M.Pharm.', 7, 1, 0, '10', 'idid1542268347632'),
('solaw', 'July 16 - June 17', 'LL4A', 'B.A.LL.B.(Hons)', 60, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-17-53Criteria-2 - BALLB16-17.xls', 'ididid1542191119905'),
('solaw', 'July 15 - June 16', 'LL5A', 'LL.M.', 35, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-17-23Criteria-2 - LLM15-16.xls', 'ididid1542191106843'),
('solaw', 'July 15 - June 16', 'LL4A', 'B.A.LL.B.(Hons)', 60, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-16-56Criteria-2 - BALLB15-16.xls', 'ididid1542191064914'),
('solaw', 'July 14 - June 15', 'LL5A', 'LL.M.', 35, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_12-56-54Criteria-2 - LLM14-15.xls', 'idididid1542094011018'),
('solaw', 'July 14 - June 15', 'LL8X', 'M.Phil.', 10, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-16-30Criteria-2 - Mphil14-15.xls', 'ididid1542191044171'),
('solaw', 'July 14 - June 15', 'LL4A', 'B.A.LL.B.(Hons)', 60, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_12-54-58Criteria-2 - BALLB14-15.xls', 'idididid1542093891122'),
('solaw', 'July 16 - June 17', 'LL5A', 'LL.M.', 35, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-18-18Criteria-2 - LLM16-17.xls', 'ididid1542191379966'),
('solaw', 'July 17 - June 18', 'LL4A', 'B.A.LL.B.(Hons)', 60, 1, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-18-41Criteria-2 - BALLB17-18.xls', 'ididid1542191401133'),
('solaw', 'July 17 - June 18', 'LL5A', 'LL.M.', 35, 2, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-19-06Criteria-2 - LLM17-18.xls', 'ididid1542191439532'),
('solaw', 'July 17 - June 18', 'LL8X', 'M.Phil.', 10, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-19-28Criteria-2 - Mphil17-18.xls', 'ididid1542191461467'),
('solaw', 'July 17 - June 18', 'LL9Z', 'Ph.D.', 28, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-19-47Criteria-2 - Ph.d17-18.xls', 'ididid1542191570580'),
('solaw', 'July 18 - June 19', 'LL4A', 'B.A.LL.B.(Hons)', 60, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-20-07Criteria-2 - BALLB18-19.xls', 'ididid1542191829227'),
('solaw', 'July 18 - June 19', 'LL5A', 'LL.M.', 35, 0, 0, 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-20-30Criteria-2 - LLM18-19.xls', 'ididid1542191847714'),
('soss', 'Feb 14 - June 14', 'SS5E', 'M.B.A. Rural Development', 4, 54, 44, '5454', 'id1542492521707'),
('admin3', 'July 14 - June 15', 'AD3BSC', 'BACHELOR OF SCIENCE', 78, 6886, 6876, '8767687', 'idid1542469590768');

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
('admin2', 'July 17 - June 18', 'AD2BSC', 'BACHELOR OF SCIENCE', 58945, 8948389, 'id1540570792022'),
('saif', 'Feb 14 - June 14', 'TESTING1', 'TESTING NAME 1', 98, 98, 'id1540635090512'),
('pranjal', 'July 14 - June 15', 'TESTINGP1', 'TESTING NAME 1 NAME', 88, 69, 'id1540661233199'),
('somath', 'July 16 - June 17', 'MT5A', 'M.Sc.(Mathematics)', 45, 84, 'id1540729101724'),
('somath', 'July 15 - June 16', 'MT5A', 'M.Sc.(Mathematics)', 45, 156, 'id1540729090485'),
('somath', 'July 14 - June 15', 'MT5A', 'M.Sc.(Mathematics)', 45, 148, 'id1540729072028'),
('somath', 'July 17 - June 18', 'MT5A', 'M.Sc.(Mathematics)', 45, 95, 'id1540729118572'),
('somath', 'July 18 - June 19', 'MT5A', 'M.Sc.(Mathematics)', 45, 81, 'id1540729164464'),
('sostat', 'July 14 - June 15', 'ST5A', 'M.Sc. Statistics', 30, 47, 'idid1540856382609'),
('sostat', 'July 15 - June 16', 'ST5A', 'M.Sc. Statistics', 25, 53, 'idid1540856422276'),
('sostat', 'July 16 - June 17', 'ST5A', 'M.Sc. Statistics', 15, 24, 'idid1540856444469'),
('sostat', 'July 17 - June 18', 'ST5A', 'M.Sc. Statistics', 15, 20, 'idid1540856478378'),
('sostat', 'July 18 - June 19', 'ST5A', 'M.Sc. Statistics', 28, 16, 'idid1540856506907'),
('sopedu', 'July 14 - June 15', 'PE4A', 'B.P.E.S.', 50, 154, 'id1540813387237'),
('sopedu', 'July 14 - June 15', 'PE5A', 'M.P.Ed.', 30, 104, 'id1540813521955'),
('sopedu', 'July 14 - June 15', 'PE9Z', 'Ph.D.', 29, 107, 'id1540813596010'),
('sopedu', 'July 16 - June 17', 'PE4A', 'B.P.E.S.', 50, 162, 'id1540813638891'),
('sopedu', 'July 17 - June 18', 'PE4A', 'B.P.E.S.', 50, 231, 'id1540813674963'),
('sopedu', 'July 18 - June 19', 'PE4A', 'B.P.E.S.', 70, 269, 'id1540813692046'),
('sopedu', 'July 18 - June 19', 'PE8X', 'M.Phil.', 20, 20, 'id1540813733999'),
('sopedu', 'July 18 - June 19', 'PE9Z', 'Ph.D.', 6, 62, 'id1540813745378'),
('sostat', 'July 14 - June 15', 'ST9Z', 'Ph.D.', 12, 6, 'idid1540856551138'),
('sostat', 'July 17 - June 18', 'ST9Z', 'Ph.D.', 11, 0, 'idid1540856579886'),
('sostat', 'July 18 - June 19', 'ST9Z', 'Ph.D.', 10, 3, 'id1540880016134'),
('soex', 'July 18 - June 19', 'EL7A', 'M.Tech Embedded Systems', 18, 16, 'id1540893388221'),
('soex', 'July 17 - June 18', 'EL7A', 'M.Tech Embedded Systems', 18, 20, 'id1540893393461'),
('soex', 'July 16 - June 17', 'EL7A', 'M.Tech Embedded Systems', 18, 55, 'id1540893396645'),
('biochem', 'July 14 - June 15', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 30, 45, 'id1540977936693'),
('biochem', 'July 15 - June 16', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 30, 50, 'id1540977951356'),
('biochem', 'July 16 - June 17', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 30, 85, 'id1540977957833'),
('biochem', 'July 17 - June 18', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 30, 74, 'id1540977975573'),
('biochem', 'July 18 - June 19', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 30, 97, 'id1540977982532'),
('admin3', 'Feb 14 - June 14', 'AD3BSC', 'BACHELOR OF SCIENCE', 1, 2, 'id1540981044466'),
('admin3', 'July 14 - June 15', 'AD3BSC', 'BACHELOR OF SCIENCE', 3, 4, 'id1540981046934'),
('admin3', 'July 15 - June 16', 'AD3BSC', 'BACHELOR OF SCIENCE', 5, 6, 'id1540981048041'),
('admin3', 'July 15 - June 16', 'AD3BSC', 'BACHELOR OF SCIENCE', 7, 8, 'id1540981048192'),
('admin3', 'July 16 - June 17', 'AD3MSC', 'MASTER OF SCIENCE', 9, 10, 'id1540981048322'),
('doll', 'July 16 - June 17', 'LE4A', 'B. Voc. Interior Design', 50, 59, 'id1541104247790'),
('doll', 'July 15 - June 16', 'LE4A', 'B. Voc. Interior Design', 50, 63, 'id1541104229574'),
('doll', 'July 14 - June 15', 'LE4A', 'B. Voc. Interior Design', 50, 36, 'id1541104203511'),
('doll', 'July 18 - June 19', 'LE2A', 'Diploma in Interior Designing', 30, 31, 'id1541104042109'),
('doll', 'July 17 - June 18', 'LE2A', 'Diploma in Interior Designing', 30, 17, 'id1541103975975'),
('doll', 'July 16 - June 17', 'LE2A', 'Diploma in Interior Designing', 30, 16, 'id1541103941631'),
('doll', 'July 15 - June 16', 'LE2A', 'Diploma in Interior Designing', 30, 19, 'id1541103897746'),
('doll', 'July 14 - June 15', 'LE2A', 'Diploma in Interior Designing', 30, 40, 'id1541103844515'),
('doll', 'July 17 - June 18', 'LE4A', 'B. Voc. Interior Design', 50, 88, 'id1541104270050'),
('doll', 'July 18 - June 19', 'LE4A', 'B. Voc. Interior Design', 50, 0, 'id1541104303578'),
('socsit', 'July 17 - June 18', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)&#65533;2yrs', 18, 18, 'idididid1541111726448'),
('socsit', 'July 18 - June 19', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 60, 169, 'ididid1541111801720'),
('socsit', 'July 16 - June 17', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 30, 15, 'ididididid1541110439736'),
('socsit', 'July 16 - June 17', 'CS5C', 'Master of Science&#65533;(Information Technology) 2yrs', 30, 9, 'idididididid1541110378656'),
('socsit', 'July 16 - June 17', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 30, 3, 'ididididid1541110533416'),
('socsit', 'July 16 - June 17', 'CS5B', 'Master of Science (Computer Science) 2yrs', 30, 51, 'idididididid1541110275464'),
('socsit', 'July 15 - June 16', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 30, 34, 'ididididididid1541109927336'),
('socsit', 'July 15 - June 16', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 18, 54, 'ididididididid1541109974969'),
('socsit', 'July 14 - June 15', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 30, 41, 'ididididididididid1541109386200'),
('socsit', 'July 15 - June 16', 'CS5C', 'Master of Science&#65533;(Information Technology) 2yrs', 30, 44, 'idididididididid1541109770751'),
('socsit', 'July 15 - June 16', 'CS5B', 'Master of Science (Computer Science) 2yrs', 30, 98, 'idididididididid1541109637095'),
('socsit', 'July 15 - June 16', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 18, 54, 'ididididididid1541109995249'),
('socsit', 'July 14 - June 15', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 18, 54, 'ididididididididid1541109424543'),
('socsit', 'July 15 - June 16', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 60, 247, 'idididididididid1541109560784'),
('socsit', 'July 14 - June 15', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 60, 227, 'ididididididididididid1541107982251'),
('socsit', 'July 14 - June 15', 'CS5C', 'Master of Science&#65533;(Information Technology) 2yrs', 30, 53, 'idididididididididid1541109343776'),
('socsit', 'July 16 - June 17', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 60, 182, 'idididididid1541110208095'),
('socsit', 'July 14 - June 15', 'CS5B', 'Master of Science (Computer Science) 2yrs', 30, 102, 'idididididididididid1541109302224'),
('socsit', 'July 14 - June 15', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 18, 54, 'ididididididididid1541109442023'),
('socsit', 'July 16 - June 17', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 18, 18, 'ididididid1541110614690'),
('socsit', 'July 16 - June 17', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)&#65533;2yrs', 18, 54, 'ididididididid1541110027047'),
('socsit', 'July 17 - June 18', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 60, 247, 'idididid1541110674791'),
('socsit', 'July 15 - June 16', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 30, 25, 'idididididid1541110102336'),
('socsit', 'July 14 - June 15', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)&#65533;2yrs', 18, 54, 'ididididididididid1541109484520'),
('socsit', 'July 16 - June 17', 'CS5B', 'Master of Science (Computer Science) 2yrs', 30, 58, 'idididid1541110757929'),
('socsit', 'July 16 - June 17', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 18, 18, 'ididididid1541110591576'),
('socsit', 'July 16 - June 17', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)&#65533;2yrs', 18, 18, 'ididididid1541110632528'),
('socsit', 'July 17 - June 18', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 30, 18, 'idididid1541110834238'),
('socsit', 'July 17 - June 18', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 18, 18, 'idididid1541111655137'),
('socsit', 'July 17 - June 18', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 18, 18, 'idididid1541111686400'),
('socsit', 'July 18 - June 19', 'CS5B', 'Master of Science (Computer Science) 2yrs', 30, 51, 'ididid1541112528368'),
('socsit', 'July 17 - June 18', 'CS5C', 'Master of Science&#65533;(Information Technology) 2yrs', 30, 18, 'idididid1541110794809'),
('socsit', 'July 17 - June 18', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 30, 10, 'idididid1541110871657'),
('socsit', 'July 18 - June 19', 'CS5C', 'Master of Science&#65533;(Information Technology) 2yrs', 30, 25, 'ididid1541112574020'),
('socsit', 'July 18 - June 19', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 18, 18, 'ididid1541112749848'),
('socsit', 'July 18 - June 19', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 30, 6, 'ididid1541112711640'),
('socsit', 'July 18 - June 19', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 30, 19, 'ididid1541112637521'),
('socsit', 'July 18 - June 19', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 18, 18, 'ididid1541112769265'),
('sobiotech', 'July 14 - June 15', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 21, 2500, 'id1541191102599'),
('sobiotech', 'July 15 - June 16', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 21, 2478, 'id1541191781607'),
('sobiotech', 'July 16 - June 17', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 21, 2450, 'id1541191786833'),
('sobiotech', 'July 17 - June 18', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 21, 2520, 'id1541191789275'),
('sobiotech', 'July 18 - June 19', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 21, 2550, 'id1541191795076'),
('sobiotech', 'July 14 - June 15', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 24, 28, 'id1541191841603'),
('sobiotech', 'July 15 - June 16', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 24, 32, 'id1541191988702'),
('sobiotech', 'July 16 - June 17', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 24, 16, 'id1541191992152'),
('sobiotech', 'July 17 - June 18', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 24, 50, 'id1541191995000'),
('sobiotech', 'July 18 - June 19', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 24, 63, 'id1541191997910'),
('sobiotech', 'July 14 - June 15', 'BT5C', 'M.Sc. Genetic Engineering', 24, 16, 'id1541192014993'),
('sobiotech', 'July 15 - June 16', 'BT5C', 'M.Sc. Genetic Engineering', 24, 13, 'id1541192024141'),
('sobiotech', 'July 16 - June 17', 'BT5C', 'M.Sc. Genetic Engineering', 24, 14, 'id1541192090310'),
('sobiotech', 'July 17 - June 18', 'BT5C', 'M.Sc. Genetic Engineering', 24, 50, 'id1541192096296'),
('sobiotech', 'July 18 - June 19', 'BT5C', 'M.Sc. Genetic Engineering', 24, 63, 'id1541192099612'),
('socsit', 'July 18 - June 19', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)&#65533;2yrs', 18, 18, 'ididid1541112782760'),
('chemsc', 'July 18 - June 19', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 20, 30, 'id1542249203396'),
('emrcdavv', 'July 18 - June 19', 'EM5A', 'M.B.A. Media Management', 40, 226, 'ididididid1541229261216'),
('emrcdavv', 'July 17 - June 18', 'EM9Z', 'Ph.D.', 5, 48, 'ididididid1541229202951'),
('emrcdavv', 'July 15 - June 16', 'EM5A', 'M.B.A. Media Management', 40, 257, 'ididididid1541229045238'),
('emrcdavv', 'July 16 - June 17', 'EM6A', 'M.Sc. EM', 50, 358, 'ididididid1541229086254'),
('emrcdavv', 'July 18 - June 19', 'EM6A', 'M.Sc. EM', 50, 369, 'ididididid1541229228407'),
('emrcdavv', 'July 15 - June 16', 'EM6A', 'M.Sc. EM', 50, 368, 'ididididid1541229012102'),
('emrcdavv', 'July 14 - June 15', 'EM5A', 'M.B.A. Media Management', 40, 246, 'ididididid1541228968206'),
('emrcdavv', 'July 14 - June 15', 'EM6A', 'M.Sc. EM', 50, 408, 'ididididid1541228876614'),
('solaw', 'July 17 - June 18', 'LL5A', 'LL.M.', 35, 120, 'idid1541234595655'),
('solaw', 'July 17 - June 18', 'LL4A', 'B.A.LL.B.(Hons)', 60, 700, 'idid1541234580345'),
('solaw', 'July 16 - June 17', 'LL5A', 'LL.M.', 35, 115, 'idid1541234562506'),
('solaw', 'July 16 - June 17', 'LL4A', 'B.A.LL.B.(Hons)', 60, 680, 'idid1541234542506'),
('solaw', 'July 15 - June 16', 'LL5A', 'LL.M.', 35, 100, 'idid1541234520817'),
('solaw', 'July 15 - June 16', 'LL4A', 'B.A.LL.B.(Hons)', 60, 650, 'idid1541234502722'),
('solaw', 'July 14 - June 15', 'LL5A', 'LL.M.', 35, 120, 'idid1541234488451'),
('solaw', 'July 14 - June 15', 'LL4A', 'B.A.LL.B.(Hons)', 60, 600, 'idid1541234166413'),
('emrcdavv', 'July 17 - June 18', 'EM5A', 'M.B.A. Media Management', 40, 266, 'ididididid1541229176927'),
('emrcdavv', 'July 17 - June 18', 'EM6A', 'M.Sc. EM', 50, 396, 'ididididid1541229149959'),
('sees', 'Feb 14 - June 14', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 18, 87, 'id1542089752674'),
('sees', 'July 14 - June 15', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 18, 63, 'id1542090246694'),
('sees', 'July 15 - June 16', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 18, 72, 'id1542090260083'),
('sees', 'July 16 - June 17', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 18, 95, 'id1542090281824'),
('sees', 'July 17 - June 18', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 18, 93, 'id1542090293875'),
('sees', 'July 18 - June 19', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 18, 68, 'id1542090317165'),
('sees', 'Feb 14 - June 14', 'EN5A', 'M.B.A (Energy Management) Distance', 60, 72, 'id1542090329128'),
('sees', 'July 14 - June 15', 'EN5A', 'M.B.A (Energy Management) Distance', 60, 77, 'id1542090348575'),
('sees', 'July 15 - June 16', 'EN5A', 'M.B.A (Energy Management) Distance', 60, 81, 'id1542090359411'),
('sees', 'July 16 - June 17', 'EN5A', 'M.B.A (Energy Management) Distance', 60, 80, 'id1542090370228'),
('sees', 'July 17 - June 18', 'EN5A', 'M.B.A (Energy Management) Distance', 60, 75, 'id1542090396176'),
('sees', 'July 18 - June 19', 'EN5A', 'M.B.A (Energy Management) Distance', 60, 71, 'id1542090411156'),
('sees', 'Feb 14 - June 14', 'EN8X', 'M.Phil.', 13, 20, 'id1542090429417'),
('sees', 'July 14 - June 15', 'EN8X', 'M.Phil.', 13, 22, 'id1542090439489'),
('sees', 'Feb 14 - June 14', 'EN9Z', 'Ph.D.', 24, 0, 'id1542090448554'),
('sees', 'July 14 - June 15', 'EN9Z', 'Ph.D.', 24, 0, 'id1542090472943'),
('sees', 'July 15 - June 16', 'EN9Z', 'Ph.D.', 24, 37, 'id1542090483031'),
('sees', 'July 16 - June 17', 'EN9Z', 'Ph.D.', 24, 88, 'id1542090500918'),
('sees', 'July 17 - June 18', 'EN9Z', 'Ph.D.', 24, 28, 'id1542090511322'),
('sees', 'July 18 - June 19', 'EN9Z', 'Ph.D.', 24, 0, 'id1542090524994'),
('emrcdavv', 'July 16 - June 17', 'EM5A', 'M.B.A. Media Management', 40, 258, 'ididididid1541229109359'),
('iipsdavv', 'July 16 - June 17', 'PS6C', 'MBA (MS) 5 Yrs', 120, 6954, 'id1542015063824'),
('iipsdavv', 'July 15 - June 16', 'PS6C', 'MBA (MS) 5 Yrs', 120, 6869, 'id1542015062743'),
('iipsdavv', 'July 14 - June 15', 'PS6C', 'MBA (MS) 5 Yrs', 120, 6514, 'id1542015061504'),
('iipsdavv', 'July 17 - June 18', 'PS5B', 'MBA (APR)', 40, 5657, 'id1542015000406'),
('iipsdavv', 'July 16 - June 17', 'PS5B', 'MBA (APR)', 40, 4656, 'id1542014996605'),
('iipsdavv', 'July 15 - June 16', 'PS5B', 'MBA (APR)', 40, 5021, 'id1542014993577'),
('iipsdavv', 'July 14 - June 15', 'PS5B', 'MBA (APR)', 40, 4973, 'id1542014988624'),
('iipsdavv', 'July 17 - June 18', 'PS5C', 'MBA (Tour)', 40, 5657, 'id1542014908932'),
('iipsdavv', 'July 16 - June 17', 'PS5C', 'MBA (Tour)', 40, 4656, 'id1542014907871'),
('iipsdavv', 'July 15 - June 16', 'PS5C', 'MBA (Tour)', 40, 5021, 'id1542014906540'),
('iipsdavv', 'July 14 - June 15', 'PS5C', 'MBA (Tour)', 40, 4973, 'id1542014903119'),
('iipsdavv', 'July 17 - June 18', 'PS6B', 'M.Tech. (IT)', 60, 2857, 'id1542014806975'),
('iipsdavv', 'July 16 - June 17', 'PS6B', 'M.Tech. (IT)', 60, 3431, 'id1542014800810'),
('iipsdavv', 'July 15 - June 16', 'PS6B', 'M.Tech. (IT)', 40, 4194, 'id1542014796109'),
('iipsdavv', 'July 14 - June 15', 'PS6B', 'M.Tech. (IT)', 40, 4477, 'id1542014789639'),
('iipsdavv', 'July 17 - June 18', 'PS6A', 'MCA(6yr)', 90, 2857, 'id1542014699744'),
('iipsdavv', 'July 16 - June 17', 'PS6A', 'MCA(6yr)', 90, 3431, 'id1542014694659'),
('iipsdavv', 'July 15 - June 16', 'PS6A', 'MCA(6yr)', 90, 4194, 'id1542014690279'),
('iipsdavv', 'July 17 - June 18', 'PS4A', 'BCom(Hons)', 60, 6890, 'id1542014393283'),
('iipsdavv', 'July 14 - June 15', 'PS6A', 'MCA(6yr)', 90, 4477, 'id1542014619361'),
('iipsdavv', 'July 16 - June 17', 'PS4A', 'BCom(Hons)', 60, 6954, 'id1542014368170'),
('iipsdavv', 'July 15 - June 16', 'PS4A', 'BCom(Hons)', 60, 6869, 'id1542014361302'),
('iipsdavv', 'July 14 - June 15', 'PS4A', 'BCom(Hons)', 60, 6514, 'idid1542013980739'),
('iipsdavv', 'July 17 - June 18', 'PS6C', 'MBA (MS) 5 Yrs', 120, 6891, 'id1542015064836'),
('iipsdavv', 'July 17 - June 18', 'PS5D', 'MBA(Ent.)', 40, 5657, 'id1542015137191'),
('solaw', 'July 18 - June 19', 'LL4A', 'B.A.LL.B.(Hons)', 60, 750, 'idid1541234611550'),
('solaw', 'July 18 - June 19', 'LL5A', 'LL.M.', 35, 121, 'idid1541234624926'),
('soedu', 'July 17 - June 18', 'ED8X', 'M.Phil.', 16, 1, 'id1542192558267'),
('soedu', 'July 16 - June 17', 'ED8X', 'M.Phil.', 16, 0, 'id1542192485667'),
('soedu', 'July 15 - June 16', 'ED8X', 'M.Phil.', 16, 0, 'id1542190309746'),
('soedu', 'July 14 - June 15', 'ED8X', 'M.Phil.', 16, 5, 'id1542190284605'),
('chemsc', 'July 17 - June 18', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 20, 15, 'ididid1542188526945'),
('chemsc', 'July 17 - June 18', 'CH5A', 'M.Sc. Chemistry', 40, 95, 'ididid1542188512040'),
('chemsc', 'July 16 - June 17', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 20, 21, 'ididid1542188497017'),
('chemsc', 'July 16 - June 17', 'CH5A', 'M.Sc. Chemistry', 40, 101, 'ididid1542188460965'),
('chemsc', 'July 15 - June 16', 'CH5A', 'M.Sc. Chemistry', 40, 116, 'ididid1542188423245'),
('chemsc', 'July 15 - June 16', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 20, 10, 'ididid1542188443797'),
('chemsc', 'July 14 - June 15', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 20, 18, 'ididid1542188393046'),
('soedu', 'Feb 14 - June 14', 'ED8X', 'M.Phil.', 16, 14, 'id1542190217400'),
('soedu', 'July 18 - June 19', 'ED5A', 'M.Ed.', 50, 16, 'id1542190171530'),
('soedu', 'July 17 - June 18', 'ED5A', 'M.Ed.', 50, 11, 'id1542190144537'),
('soedu', 'July 16 - June 17', 'ED5A', 'M.Ed.', 50, 30, 'id1542190037201'),
('soedu', 'July 15 - June 16', 'ED5A', 'M.Ed.', 50, 11, 'id1542189817738'),
('soedu', 'July 14 - June 15', 'ED5A', 'M.Ed.', 35, 35, 'id1542189769522'),
('chemsc', 'July 14 - June 15', 'CH5A', 'M.Sc. Chemistry', 40, 117, 'idididid1541153603407'),
('soedu', 'Feb 14 - June 14', 'ED5A', 'M.Ed.', 35, 35, 'id1542189722842'),
('soedu', 'July 17 - June 18', 'ED4A', 'B.Ed.', 150, 142, 'id1542189429882'),
('soedu', 'July 16 - June 17', 'ED4A', 'B.Ed.', 150, 141, 'id1542189381649'),
('soedu', 'July 15 - June 16', 'ED4A', 'B.Ed.', 150, 135, 'id1542189341305'),
('soedu', 'July 14 - June 15', 'ED4A', 'B.Ed.', 155, 155, 'id1542188888730'),
('soedu', 'Feb 14 - June 14', 'ED4A', 'B.Ed.', 155, 151, 'id1542188772729'),
('soedu', 'July 18 - June 19', 'ED8X', 'M.Phil.', 16, 3, 'id1542192590657'),
('chemsc', 'July 18 - June 19', 'CH5A', 'M.Sc. Chemistry', 40, 123, 'ididid1542188547897'),
('soinstru', 'July 14 - June 15', 'IN7A', 'M.Tech.  (Instrumentation)', 18, 140, 'id1542271815342'),
('soss', 'July 14 - June 15', 'SS4A', 'Bachelor of Social Work (B.S.W.)', 60, 0, 'id1542492780793'),
('soss', 'July 14 - June 15', 'SS5A', 'Master of Social Work (M.S.W.)', 60, 72, 'id1542492808350'),
('soss', 'July 14 - June 15', 'SS8A', 'M.Phil. Geography', 20, 15, 'id1542492837521'),
('soss', 'July 14 - June 15', 'SS8B', 'M.Phil. History', 20, 15, 'id1542492871463'),
('soss', 'July 14 - June 15', 'SS8C', 'M.Phil. Home Science', 20, 13, 'id1542492909191'),
('soss', 'July 14 - June 15', 'SS8D', 'M.Phil. Political Science', 20, 20, 'id1542492933575'),
('soss', 'July 14 - June 15', 'SS8E', 'M.Phil. Psychology', 20, 0, 'id1542492948807'),
('soss', 'July 14 - June 15', 'SS8f', 'M.Phil. Social Work', 20, 25, 'id1542492963535'),
('soss', 'July 14 - June 15', 'SS8G', 'M.Phil. Sociology', 20, 25, 'id1542492985791'),
('soss', 'July 14 - June 15', 'SS9A', 'Ph.D. Geography', 0, 58, 'id1542493718151'),
('soss', 'July 14 - June 15', 'SS9B', 'Ph.D. History', 0, 25, 'id1542493751047'),
('soss', 'July 14 - June 15', 'SS9C', 'Ph.D.. Home Science', 0, 69, 'id1542493775438'),
('soss', 'July 14 - June 15', 'SS9D', 'Ph.D. Political Science', 0, 56, 'id1542493812423'),
('soss', 'July 14 - June 15', 'SS9E', 'Ph.D. Psychology', 0, 0, 'id1542493839790'),
('soss', 'July 15 - June 16', 'SS4A', 'Bachelor of Social Work (B.S.W.)', 60, 0, 'id1542493927903'),
('soss', 'July 15 - June 16', 'SS5A', 'Master of Social Work (M.S.W.)', 60, 42, 'id1542493949167'),
('soss', 'July 15 - June 16', 'SS8A', 'M.Phil. Geography', 20, 42, 'id1542493989423'),
('soss', 'July 15 - June 16', 'SS8B', 'M.Phil. History', 20, 54, 'id1542494043719'),
('soss', 'July 15 - June 16', 'SS8C', 'M.Phil. Home Science', 20, 48, 'id1542494101887'),
('soss', 'July 15 - June 16', 'SS8D', 'M.Phil. Political Science', 20, 66, 'id1542494122143'),
('soss', 'July 15 - June 16', 'SS8E', 'M.Phil. Psychology', 20, 30, 'id1542494158551'),
('soss', 'July 15 - June 16', 'SS8f', 'M.Phil. Social Work', 20, 39, 'id1542494206239'),
('soss', 'July 15 - June 16', 'SS8G', 'M.Phil. Sociology', 20, 181, 'id1542494248927'),
('soss', 'July 15 - June 16', 'SS9A', 'Ph.D. Geography', 20, 42, 'id1542494284671'),
('soss', 'July 15 - June 16', 'SS9B', 'Ph.D. History', 20, 54, 'id1542494363913'),
('soss', 'July 15 - June 16', 'SS9C', 'Ph.D.. Home Science', 20, 48, 'id1542494413102'),
('soss', 'July 15 - June 16', 'SS9D', 'Ph.D. Political Science', 20, 66, 'id1542494428815'),
('soss', 'July 15 - June 16', 'SS9E', 'Ph.D. Psychology', 20, 30, 'id1542494443495'),
('soss', 'July 15 - June 16', 'SS9F', 'Ph.D. Social Work', 20, 39, 'id1542494457759'),
('soss', 'July 15 - June 16', 'SS9G', 'Ph.D. Sociology', 20, 181, 'id1542494475280'),
('soss', 'July 16 - June 17', 'SS4A', 'Bachelor of Social Work (B.S.W.)', 60, 0, 'id1542494555871'),
('soss', 'July 16 - June 17', 'SS5A', 'Master of Social Work (M.S.W.)', 60, 32, 'id1542494596495'),
('soss', 'July 16 - June 17', 'SS8A', 'M.Phil. Geography', 20, 0, 'id1542494626063'),
('soss', 'July 16 - June 17', 'SS8B', 'M.Phil. History', 20, 0, 'id1542494643815'),
('soss', 'July 16 - June 17', 'SS8C', 'M.Phil. Home Science', 20, 0, 'id1542494654065'),
('soss', 'July 16 - June 17', 'SS8D', 'M.Phil. Political Science', 20, 0, 'id1542494685906'),
('soss', 'July 16 - June 17', 'SS8E', 'M.Phil. Psychology', 20, 0, 'id1542494698630'),
('soss', 'July 16 - June 17', 'SS8f', 'M.Phil. Social Work', 20, 0, 'id1542494709681'),
('soss', 'July 16 - June 17', 'SS8G', 'M.Phil. Sociology', 20, 0, 'id1542494721999'),
('soss', 'July 16 - June 17', 'SS9A', 'Ph.D. Geography', 20, 0, 'id1542494733696'),
('soss', 'July 16 - June 17', 'SS9B', 'Ph.D. History', 20, 0, 'id1542494749615'),
('soss', 'July 16 - June 17', 'SS9C', 'Ph.D.. Home Science', 20, 0, 'id1542494775511'),
('soss', 'July 16 - June 17', 'SS9D', 'Ph.D. Political Science', 20, 0, 'id1542494786806'),
('soss', 'July 16 - June 17', 'SS9E', 'Ph.D. Psychology', 20, 0, 'id1542494796104'),
('soss', 'July 16 - June 17', 'SS9F', 'Ph.D. Social Work', 20, 0, 'id1542494813024'),
('soss', 'July 16 - June 17', 'SS9G', 'Ph.D. Sociology', 20, 0, 'id1542494825303'),
('soss', 'July 16 - June 17', 'SS3A', 'P.G. Diploma in Guidance and Counselling', 40, 0, 'id1542494880599'),
('soss', 'July 17 - June 18', 'SS4A', 'Bachelor of Social Work (B.S.W.)', 60, 0, 'id1542494950952'),
('soss', 'July 17 - June 18', 'SS5A', 'Master of Social Work (M.S.W.)', 60, 20, 'id1542494973863'),
('soss', 'July 17 - June 18', 'SS8A', 'M.Phil. Geography', 20, 89, 'id1542494985935'),
('soss', 'July 17 - June 18', 'SS8B', 'M.Phil. History', 20, 82, 'id1542495024159'),
('soss', 'July 17 - June 18', 'SS8C', 'M.Phil. Home Science', 20, 83, 'id1542495037023'),
('soss', 'July 17 - June 18', 'SS8D', 'M.Phil. Political Science', 20, 83, 'id1542495125919'),
('soss', 'July 17 - June 18', 'SS8E', 'M.Phil. Psychology', 20, 51, 'id1542495158791');

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
('admin2', 'July 15 - June 16', 'AD2MSC', 'MASTER OF SCIENCE', 1, 2, 3, 4, 5, 6, 78, 6, 9, 0, 'idid1540572850570'),
('saif', 'July 18 - June 19', 'TESTING1', 'TESTING NAME 1', 89, 98, 90, 76, 76, 8, 98, 87, 67, 41, 'id1540635137887'),
('pranjal', 'July 14 - June 15', 'TESTINGP1', 'TESTING NAME 1 NAME', 22, 26, 99, 69, 88, 22, 55, 66, 77, 88, 'id1540661264642'),
('somath', 'July 18 - June 19', 'MT5A', 'M.Sc.(Mathematics)', 7, 9, 6, 23, 0, 1, 1, 16, 23, 0, 'id1540729810652'),
('somath', 'July 17 - June 18', 'MT5A', 'M.Sc.(Mathematics)', 7, 9, 6, 23, 0, 1, 4, 16, 16, 0, 'id1540729772190'),
('somath', 'July 16 - June 17', 'MT5A', 'M.Sc.(Mathematics)', 7, 9, 6, 23, 0, 3, 2, 18, 20, 0, 'id1540729728730'),
('somath', 'July 15 - June 16', 'MT5A', 'M.Sc.(Mathematics)', 7, 9, 6, 23, 0, 7, 9, 18, 13, 0, 'id1540729680819'),
('somath', 'July 14 - June 15', 'MT5A', 'M.Sc.(Mathematics)', 7, 9, 6, 23, 0, 10, 3, 12, 24, 0, 'id1540729382862'),
('somath', 'July 14 - June 15', 'MT8X', 'M.Phil.', 2, 2, 1, 5, 0, 2, 2, 0, 5, 0, 'id1540729857883'),
('somath', 'July 15 - June 16', 'MT8X', 'M.Phil.', 2, 2, 1, 5, 0, 2, 2, 0, 5, 0, 'id1540730075857'),
('sopedu', 'July 14 - June 15', 'PE5A', 'M.P.Ed.', 5, 6, 4, 15, 0, 5, 6, 4, 15, 0, 'idid1540815133585'),
('sopedu', 'July 14 - June 15', 'PE4A', 'B.P.E.S.', 8, 10, 7, 22, 3, 8, 10, 7, 22, 3, 'ididid1540813840446'),
('sostat', 'July 15 - June 16', 'ST5A', 'M.Sc. Statistics', 5, 6, 4, 13, 2, 4, 0, 12, 9, 0, 'id1540880666135'),
('sostat', 'July 14 - June 15', 'ST5A', 'M.Sc. Statistics', 5, 6, 4, 13, 2, 4, 1, 11, 14, 0, 'id1540880528340'),
('sostat', 'July 16 - June 17', 'ST5A', 'M.Sc. Statistics', 5, 6, 4, 13, 2, 1, 1, 5, 11, 0, 'id1540880736059'),
('sostat', 'July 17 - June 18', 'ST5A', 'M.Sc. Statistics', 5, 6, 4, 13, 2, 3, 0, 3, 9, 0, 'id1540880816571'),
('sopedu', 'July 15 - June 16', 'PE4A', 'B.P.E.S.', 8, 10, 7, 22, 3, 8, 10, 7, 22, 3, 'id1540891932494'),
('sopedu', 'July 15 - June 16', 'PE5A', 'M.P.Ed.', 5, 6, 4, 15, 0, 5, 6, 4, 15, 0, 'id1540891976875'),
('sopedu', 'July 16 - June 17', 'PE4A', 'B.P.E.S.', 8, 10, 7, 22, 3, 8, 10, 7, 22, 3, 'id1540892036758'),
('sopedu', 'July 16 - June 17', 'PE5A', 'M.P.Ed.', 5, 6, 4, 15, 0, 5, 6, 4, 15, 0, 'id1540892263273'),
('sopedu', 'July 17 - June 18', 'PE4A', 'B.P.E.S.', 8, 10, 7, 22, 3, 8, 10, 7, 22, 3, 'id1540892293106'),
('biochem', 'July 14 - June 15', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 5, 6, 4, 13, 2, 0, 2, 3, 8, 1, 'id1540978247830'),
('biochem', 'July 15 - June 16', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 5, 6, 4, 13, 2, 1, 1, 2, 12, 0, 'id1540978432646'),
('biochem', 'July 16 - June 17', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 5, 6, 4, 13, 2, 2, 1, 10, 16, 0, 'id1540978667056'),
('biochem', 'July 17 - June 18', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 5, 6, 4, 13, 2, 2, 1, 4, 11, 0, 'id1540978674331'),
('biochem', 'July 18 - June 19', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 5, 6, 4, 13, 2, 0, 0, 4, 18, 0, 'id1540978680633'),
('emrcdavv', 'July 14 - June 15', 'EM5A', 'M.B.A. Media Management', 6, 8, 6, 18, 2, 6, 8, 6, 18, 2, 'ididid1541229603408'),
('chemsc', 'July 14 - June 15', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 3, 4, 3, 9, 1, 2, 0, 4, 6, 0, 'idid1542189191608'),
('chemsc', 'July 18 - June 19', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 3, 4, 3, 9, 1, 2, 1, 9, 8, 0, 'idid1542189708210'),
('chemsc', 'July 18 - June 19', 'CH5A', 'M.Sc. Chemistry', 6, 8, 6, 18, 2, 5, 0, 17, 20, 0, 'idid1542189700466'),
('chemsc', 'July 17 - June 18', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 3, 4, 3, 9, 1, 0, 1, 4, 5, 0, 'idid1542189687658'),
('chemsc', 'July 17 - June 18', 'CH5A', 'M.Sc. Chemistry', 6, 8, 6, 18, 2, 4, 4, 13, 19, 2, 'idid1542189681034'),
('chemsc', 'July 16 - June 17', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 3, 4, 3, 9, 1, 1, 1, 6, 6, 0, 'idid1542189660098'),
('chemsc', 'July 16 - June 17', 'CH5A', 'M.Sc. Chemistry', 6, 8, 6, 18, 2, 4, 3, 16, 16, 0, 'idid1542189635312'),
('chemsc', 'July 15 - June 16', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 3, 4, 3, 9, 1, 1, 1, 2, 1, 0, 'idid1542189473719'),
('doll', 'July 16 - June 17', 'LE2A', 'Diploma in Interior Designing', 5, 6, 4, 13, 2, 0, 0, 4, 7, 0, 'idid1541287388882'),
('doll', 'July 17 - June 18', 'LE2A', 'Diploma in Interior Designing', 5, 6, 4, 13, 2, 2, 0, 6, 8, 0, 'idid1541287433271'),
('doll', 'July 17 - June 18', 'LE4A', 'B. Voc. Interior Design', 8, 10, 7, 22, 3, 4, 0, 22, 24, 0, 'idid1541287750598'),
('doll', 'July 18 - June 19', 'LE4A', 'B. Voc. Interior Design', 8, 10, 7, 22, 3, 4, 0, 20, 26, 0, 'idid1541287799653'),
('doll', 'July 14 - June 15', 'LE2A', 'Diploma in Interior Designing', 5, 6, 4, 13, 2, 0, 0, 3, 8, 0, 'idid1541287209787'),
('doll', 'July 15 - June 16', 'LE2A', 'Diploma in Interior Designing', 5, 6, 4, 13, 2, 2, 0, 4, 8, 0, 'idid1541287347970'),
('doll', 'July 17 - June 18', 'LE4B', 'B.Voc. Fashion Technology', 8, 10, 7, 22, 3, 2, 0, 10, 12, 0, 'idid1541288011784'),
('doll', 'July 18 - June 19', 'LE4B', 'B.Voc. Fashion Technology', 8, 10, 7, 22, 3, 3, 1, 7, 7, 0, 'idid1541288059615'),
('doll', 'July 14 - June 15', 'LE4B', 'B.Voc. Fashion Technology', 8, 10, 7, 22, 3, 2, 0, 0, 2, 0, 'idid1541287840078'),
('doll', 'July 15 - June 16', 'LE4B', 'B.Voc. Fashion Technology', 8, 10, 7, 22, 3, 0, 1, 3, 4, 0, 'idid1541287917518'),
('doll', 'July 16 - June 17', 'LE4B', 'B.Voc. Fashion Technology', 8, 10, 7, 22, 3, 0, 0, 7, 11, 0, 'idid1541287958463'),
('doll', 'July 18 - June 19', 'LE2A', 'Diploma in Interior Designing', 5, 6, 4, 13, 2, 2, 0, 9, 12, 0, 'idid1541287473900'),
('doll', 'July 16 - June 17', 'LE4A', 'B. Voc. Interior Design', 8, 10, 7, 22, 3, 4, 2, 18, 26, 0, 'idid1541287618448'),
('doll', 'July 14 - June 15', 'LE4A', 'B. Voc. Interior Design', 8, 10, 7, 22, 3, 1, 0, 15, 15, 0, 'idid1541287568086'),
('doll', 'July 15 - June 16', 'LE4A', 'B. Voc. Interior Design', 8, 10, 7, 22, 3, 4, 0, 19, 27, 0, 'idid1541287511283'),
('Socsit', 'Feb 14 - June 14', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'id1541237092350'),
('Socsit', 'July 14 - June 15', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'id1541237137396'),
('chemsc', 'July 15 - June 16', 'CH5A', 'M.Sc. Chemistry', 6, 6, 6, 18, 2, 2, 4, 14, 8, 0, 'idid1542189442432'),
('emrcdavv', 'July 15 - June 16', 'EM5A', 'M.B.A. Media Management', 6, 8, 6, 18, 2, 5, 2, 6, 29, 0, 'ididid1541229620599'),
('emrcdavv', 'July 16 - June 17', 'EM5A', 'M.B.A. Media Management', 6, 8, 6, 18, 2, 5, 2, 6, 29, 0, 'ididid1541229642672'),
('emrcdavv', 'July 17 - June 18', 'EM5A', 'M.B.A. Media Management', 6, 8, 6, 18, 2, 1, 0, 3, 38, 0, 'ididid1541229659760'),
('emrcdavv', 'July 18 - June 19', 'EM5A', 'M.B.A. Media Management', 6, 8, 6, 18, 2, 5, 0, 10, 27, 0, 'ididid1541229675032'),
('emrcdavv', 'July 15 - June 16', 'EM6A', 'M.Sc. EM', 8, 10, 7, 22, 3, 2, 1, 8, 38, 0, 'ididid1541229921503'),
('emrcdavv', 'July 14 - June 15', 'EM6A', 'M.Sc. EM', 8, 10, 7, 22, 3, 8, 10, 7, 22, 3, 'ididid1541229912737'),
('emrcdavv', 'July 18 - June 19', 'EM6A', 'M.Sc. EM', 8, 10, 7, 22, 3, 10, 3, 9, 31, 0, 'ididid1541229943495'),
('emrcdavv', 'July 16 - June 17', 'EM6A', 'M.Sc. EM', 8, 10, 7, 22, 3, 2, 1, 8, 38, 0, 'ididid1541229929168'),
('emrcdavv', 'July 17 - June 18', 'EM6A', 'M.Sc. EM', 8, 10, 7, 22, 3, 9, 3, 2, 37, 0, 'ididid1541229937488'),
('sees', 'July 14 - June 15', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 3, 4, 3, 8, 0, 2, 0, 3, 12, 0, 'id1541231410466'),
('sees', 'July 14 - June 15', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 3, 4, 3, 8, 0, 3, 0, 3, 11, 0, 'id1541231271679'),
('sees', 'July 15 - June 16', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 3, 4, 3, 8, 0, 2, 0, 6, 9, 0, 'id1541231512999'),
('sees', 'July 16 - June 17', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 3, 4, 3, 8, 0, 0, 0, 2, 7, 0, 'id1541231590022'),
('sees', 'July 17 - June 18', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 3, 4, 3, 8, 0, 1, 1, 6, 9, 0, 'id1541231690899'),
('sees', 'July 18 - June 19', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 3, 4, 3, 8, 0, 0, 0, 1, 1, 0, 'id1541231745119'),
('sees', 'July 14 - June 15', 'EN5A', 'M.B.A (Energy Management) Distance', 10, 12, 8, 30, 0, 2, 1, 2, 14, 0, 'id1541231689055'),
('sees', 'July 15 - June 16', 'EN5A', 'M.B.A (Energy Management) Distance', 10, 12, 8, 30, 0, 0, 1, 3, 10, 0, 'id1541231895737'),
('sees', 'July 16 - June 17', 'EN5A', 'M.B.A (Energy Management) Distance', 10, 12, 8, 30, 0, 0, 0, 2, 9, 0, 'id1541231958443'),
('sees', 'July 17 - June 18', 'EN5A', 'M.B.A (Energy Management) Distance', 10, 12, 8, 30, 0, 2, 1, 3, 18, 0, 'id1541232002435'),
('sees', 'July 18 - June 19', 'EN5A', 'M.B.A (Energy Management) Distance', 10, 12, 8, 30, 0, 0, 0, 0, 0, 0, 'id1541232154028'),
('sees', 'Feb 14 - June 14', 'EN5A', 'M.B.A (Energy Management) Distance', 10, 12, 8, 30, 0, 0, 0, 0, 0, 0, 'id1541232197613'),
('sees', 'Feb 14 - June 14', 'EN8X', 'M.Phil.', 2, 3, 2, 6, 0, 0, 0, 1, 5, 1, 'id1541232212762'),
('sees', 'July 14 - June 15', 'EN8X', 'M.Phil.', 2, 3, 2, 6, 0, 0, 1, 1, 6, 0, 'id1541232299315'),
('sees', 'Feb 14 - June 14', 'EN9Z', 'Ph.D.', 4, 5, 3, 12, 0, 1, 0, 2, 3, 0, 'id1541232349333'),
('sees', 'July 14 - June 15', 'EN9Z', 'Ph.D.', 4, 5, 3, 12, 0, 0, 0, 0, 0, 0, 'id1541232409554'),
('sees', 'July 15 - June 16', 'EN9Z', 'Ph.D.', 4, 5, 3, 12, 0, 0, 0, 0, 0, 0, 'id1541232457934'),
('sees', 'July 16 - June 17', 'EN9Z', 'Ph.D.', 4, 5, 3, 12, 0, 0, 0, 0, 0, 0, 'id1541232488409'),
('sees', 'July 17 - June 18', 'EN9Z', 'Ph.D.', 4, 5, 3, 12, 0, 1, 0, 0, 6, 0, 'id1541232524057'),
('sees', 'July 18 - June 19', 'EN9Z', 'Ph.D.', 4, 5, 3, 12, 0, 0, 0, 0, 1, 0, 'id1541232592295'),
('iipsdavv', 'July 14 - June 15', 'PS4A', 'BCom(Hons)', 0, 0, 0, 0, 0, 9, 12, 10, 30, 0, 'id1542197454918'),
('iipsdavv', 'July 14 - June 15', 'PS6A', 'MCA(6yr)', 0, 0, 0, 0, 0, 23, 4, 20, 44, 0, 'id1542199225733'),
('iipsdavv', 'July 14 - June 15', 'PS6B', 'M.Tech. (IT)', 0, 0, 0, 0, 0, 4, 6, 10, 21, 0, 'id1542199332133'),
('iipsdavv', 'July 14 - June 15', 'PS6C', 'MBA (MS) 5 Yrs', 0, 0, 0, 0, 0, 14, 18, 12, 60, 0, 'id1542199358992'),
('iipsdavv', 'July 14 - June 15', 'PS5C', 'MBA (Tour)', 0, 0, 0, 0, 0, 5, 0, 5, 20, 0, 'id1542199388829'),
('iipsdavv', 'July 14 - June 15', 'PS5B', 'MBA (APR)', 0, 0, 0, 0, 0, 7, 1, 3, 23, 0, 'id1542199428252'),
('iipsdavv', 'July 14 - June 15', 'PS5A', 'MBA (MS) 2yrs', 0, 0, 0, 0, 0, 3, 0, 23, 33, 0, 'id1542199452916'),
('iipsdavv', 'July 15 - June 16', 'PS4A', 'BCom(Hons)', 0, 0, 0, 0, 0, 9, 11, 10, 29, 0, 'id1542199474859'),
('iipsdavv', 'July 15 - June 16', 'PS6A', 'MCA(6yr)', 0, 0, 0, 0, 0, 21, 7, 24, 40, 0, 'id1542199498638'),
('iipsdavv', 'July 15 - June 16', 'PS6B', 'M.Tech. (IT)', 0, 0, 0, 0, 0, 6, 7, 9, 18, 0, 'id1542199505152'),
('iipsdavv', 'July 15 - June 16', 'PS6C', 'MBA (MS) 5 Yrs', 0, 0, 0, 0, 0, 19, 24, 16, 67, 0, 'id1542199510144'),
('iipsdavv', 'July 15 - June 16', 'PS5C', 'MBA (Tour)', 0, 0, 0, 0, 0, 0, 1, 11, 22, 0, 'id1542199530527'),
('iipsdavv', 'July 15 - June 16', 'PS5B', 'MBA (APR)', 0, 0, 0, 0, 0, 1, 1, 8, 27, 0, 'id1542199542386'),
('iipsdavv', 'July 15 - June 16', 'PS5A', 'MBA (MS) 2yrs', 0, 0, 0, 0, 0, 1, 0, 20, 29, 0, 'id1542199557133'),
('iipsdavv', 'July 16 - June 17', 'PS4A', 'BCom(Hons)', 0, 0, 0, 0, 0, 9, 14, 9, 30, 0, 'id1542199775323'),
('iipsdavv', 'July 16 - June 17', 'PS6A', 'MCA(6yr)', 0, 0, 0, 0, 0, 16, 5, 26, 46, 0, 'id1542199836856'),
('iipsdavv', 'July 16 - June 17', 'PS6B', 'M.Tech. (IT)', 0, 0, 0, 0, 0, 11, 10, 16, 23, 0, 'id1542199850007'),
('iipsdavv', 'July 16 - June 17', 'PS6C', 'MBA (MS) 5 Yrs', 0, 0, 0, 0, 0, 20, 18, 18, 60, 0, 'id1542199855499'),
('iipsdavv', 'July 16 - June 17', 'PS5C', 'MBA (Tour)', 0, 0, 0, 0, 0, 3, 0, 10, 24, 0, 'id1542199877396'),
('iipsdavv', 'July 16 - June 17', 'PS5B', 'MBA (APR)', 0, 0, 0, 0, 0, 0, 0, 7, 32, 0, 'id1542199886050'),
('iipsdavv', 'July 16 - June 17', 'PS5A', 'MBA (MS) 2yrs', 0, 0, 0, 0, 0, 0, 0, 29, 30, 0, 'id1542199895857'),
('iipsdavv', 'July 17 - June 18', 'PS4A', 'BCom(Hons)', 0, 0, 0, 0, 0, 11, 10, 6, 39, 0, 'id1542200018172'),
('iipsdavv', 'July 17 - June 18', 'PS6A', 'MCA(6yr)', 0, 0, 0, 0, 0, 15, 3, 27, 49, 0, 'id1542201080969'),
('iipsdavv', 'July 17 - June 18', 'PS6B', 'M.Tech. (IT)', 0, 0, 0, 0, 0, 20, 2, 14, 27, 0, 'id1542201584150'),
('iipsdavv', 'July 17 - June 18', 'PS6C', 'MBA (MS) 5 Yrs', 0, 0, 0, 0, 0, 28, 9, 28, 65, 0, 'id1542201596071'),
('iipsdavv', 'July 17 - June 18', 'PS5C', 'MBA (Tour)', 0, 0, 0, 0, 0, 1, 2, 9, 18, 0, 'id1542201608974'),
('iipsdavv', 'July 17 - June 18', 'PS5B', 'MBA (APR)', 0, 0, 0, 0, 0, 5, 1, 10, 21, 0, 'id1542201616361'),
('iipsdavv', 'July 17 - June 18', 'PS5A', 'MBA (MS) 2yrs', 0, 0, 0, 0, 0, 4, 0, 17, 39, 0, 'id1542201621042'),
('iipsdavv', 'July 17 - June 18', 'PS5D', 'MBA(Ent.)', 0, 0, 0, 0, 0, 1, 0, 5, 15, 0, 'id1542201748846'),
('chemsc', 'July 14 - June 15', 'CH5A', 'M.Sc. Chemistry', 6, 8, 6, 18, 2, 6, 2, 10, 13, 0, 'idid1542188967641'),
('imsdavv', 'July 18 - June 19', 'MS6A', 'MBA(ECOMM)5YR', 19, 24, 17, 54, 6, 14, 15, 15, 40, 0, 'idid1542194232238'),
('imsdavv', 'July 17 - June 18', 'MS6B', 'MBA(HA) 5YR', 19, 24, 17, 54, 6, 19, 16, 25, 46, 0, 'idid1542195054908'),
('imsdavv', 'July 17 - June 18', 'MS5B', 'MBA(DM)', 10, 12, 8, 27, 3, 0, 0, 3, 11, 0, 'idid1542194532101'),
('imsdavv', 'July 17 - June 18', 'MS5G', 'MBA(HA) 2YR', 10, 12, 8, 27, 3, 6, 5, 5, 30, 0, 'idid1542194503356'),
('imsdavv', 'July 17 - June 18', 'MS5D', 'MBA(MM)', 19, 24, 17, 54, 6, 27, 7, 25, 58, 0, 'idid1542194373864'),
('imsdavv', 'July 17 - June 18', 'MS5E', 'MBA(HR)', 19, 24, 17, 54, 6, 19, 23, 16, 60, 0, 'idid1542194414591'),
('imsdavv', 'July 17 - June 18', 'MS5F', 'MBA(ECOMM)2YR', 10, 12, 8, 27, 3, 10, 8, 8, 22, 0, 'idid1542194447047'),
('imsdavv', 'July 17 - June 18', 'MS5C', 'MBA(FA) ', 19, 24, 17, 54, 6, 19, 20, 17, 63, 0, 'idid1542194268962'),
('imsdavv', 'July 18 - June 19', 'MS6B', 'MBA(HA) 5YR', 19, 24, 17, 54, 6, 18, 22, 15, 47, 0, 'idid1542194156392'),
('imsdavv', 'July 18 - June 19', 'MS5B', 'MBA(DM)', 10, 12, 8, 27, 3, 0, 0, 0, 0, 0, 'idid1542194138051'),
('imsdavv', 'July 18 - June 19', 'MS5G', 'MBA(HA) 2YR', 10, 12, 8, 27, 3, 8, 0, 13, 37, 0, 'idid1542194109105'),
('imsdavv', 'July 18 - June 19', 'MS5C', 'MBA(FA) ', 19, 24, 17, 54, 6, 24, 17, 18, 62, 0, 'idid1542193160961'),
('imsdavv', 'July 18 - June 19', 'MS5D', 'MBA(MM)', 19, 24, 17, 54, 6, 21, 17, 17, 66, 0, 'idid1542193966956'),
('imsdavv', 'July 18 - June 19', 'MS5E', 'MBA(HR)', 19, 24, 17, 54, 6, 23, 10, 18, 70, 0, 'idid1542194002101'),
('imsdavv', 'July 18 - June 19', 'MS5F', 'MBA(ECOMM)2YR', 10, 12, 8, 27, 3, 8, 10, 16, 24, 0, 'idid1542194029718'),
('imsdavv', 'July 17 - June 18', 'MS6A', 'MBA(ECOMM)5YR', 19, 24, 17, 54, 6, 12, 9, 9, 36, 0, 'idid1542195102574'),
('imsdavv', 'July 16 - June 17', 'MS5B', 'MBA(DM)', 10, 12, 8, 27, 3, 0, 1, 4, 9, 0, 'id1542268201122'),
('imsdavv', 'July 16 - June 17', 'MS5C', 'MBA(FA) ', 19, 24, 17, 54, 6, 21, 22, 23, 60, 0, 'id1542268283458'),
('imsdavv', 'July 16 - June 17', 'MS5D', 'MBA(MM)', 19, 24, 17, 54, 6, 30, 11, 21, 58, 0, 'id1542268349501'),
('imsdavv', 'July 16 - June 17', 'MS5E', 'MBA(HR)', 19, 24, 17, 54, 6, 28, 13, 17, 59, 0, 'id1542268394672'),
('imsdavv', 'July 16 - June 17', 'MS5F', 'MBA(ECOMM)2YR', 10, 12, 8, 27, 3, 15, 3, 12, 28, 0, 'id1542268501680'),
('imsdavv', 'July 16 - June 17', 'MS5G', 'MBA(HA) 2YR', 10, 12, 8, 27, 3, 6, 3, 13, 20, 0, 'id1542268543225'),
('imsdavv', 'July 16 - June 17', 'MS6A', 'MBA(ECOMM)5YR', 19, 24, 17, 54, 6, 14, 7, 9, 45, 0, 'id1542268580760'),
('imsdavv', 'July 16 - June 17', 'MS6B', 'MBA(HA) 5YR', 19, 24, 17, 54, 6, 16, 12, 22, 60, 0, 'id1542268610797'),
('solaw', 'July 18 - June 19', 'LL4A', 'B.A.LL.B.(Hons)', 10, 12, 8, 30, 0, 10, 12, 8, 30, 0, 'idid1541237123832'),
('solaw', 'July 18 - June 19', 'LL5A', 'LL.M.', 6, 7, 5, 17, 0, 4, 3, 5, 22, 0, 'idid1541237159094'),
('solaw', 'July 16 - June 17', 'LL5A', 'LL.M.', 6, 7, 5, 17, 0, 0, 0, 3, 14, 0, 'idid1541237012472'),
('solaw', 'July 17 - June 18', 'LL4A', 'B.A.LL.B.(Hons)', 10, 12, 8, 30, 0, 10, 12, 8, 30, 0, 'idid1541237051209'),
('solaw', 'July 17 - June 18', 'LL5A', 'LL.M.', 6, 7, 5, 17, 0, 3, 2, 6, 19, 0, 'idid1541237085392'),
('solaw', 'July 16 - June 17', 'LL4A', 'B.A.LL.B.(Hons)', 10, 12, 8, 30, 0, 10, 12, 8, 30, 0, 'idid1541236979711'),
('solaw', 'July 15 - June 16', 'LL5A', 'LL.M.', 6, 7, 5, 17, 0, 6, 4, 5, 13, 0, 'idid1541236940488'),
('solaw', 'July 14 - June 15', 'LL5A', 'LL.M.', 6, 7, 5, 17, 0, 4, 2, 9, 15, 0, 'idid1541236835298'),
('solaw', 'July 15 - June 16', 'LL4A', 'B.A.LL.B.(Hons)', 10, 12, 8, 30, 0, 10, 12, 8, 30, 0, 'idid1541236903574'),
('solaw', 'July 14 - June 15', 'LL4A', 'B.A.LL.B.(Hons)', 10, 12, 8, 30, 0, 10, 12, 8, 30, 0, 'idid1541236796505'),
('sopharma', 'July 18 - June 19', 'PY4A', 'B.Pharm.', 10, 12, 8, 30, 3, 9, 6, 16, 27, 2, 'id1542268438416'),
('sopharma', 'July 17 - June 18', 'PY4A', 'B.Pharm.', 10, 12, 8, 30, 3, 10, 10, 5, 29, 0, 'id1542268588904'),
('sopharma', 'July 16 - June 17', 'PY4A', 'B.Pharm.', 10, 12, 8, 30, 3, 9, 4, 9, 25, 1, 'id1542268681261'),
('sopharma', 'July 15 - June 16', 'PY4A', 'B.Pharm.', 10, 12, 8, 30, 10, 5, 10, 29, 0, 0, 'id1542268713777'),
('sopharma', 'July 14 - June 15', 'PY4A', 'B.Pharm.', 10, 12, 8, 30, 12, 3, 15, 30, 0, 0, 'id1542268841593'),
('sopharma', 'July 18 - June 19', 'PY7A', 'M.Pharm.', 2, 3, 2, 8, 0, 1, 0, 6, 7, 0, 'id1542268867809'),
('sopharma', 'July 17 - June 18', 'PY7A', 'M.Pharm.', 1, 2, 0, 10, 5, 3, 1, 3, 7, 0, 'id1542268902376'),
('sopharma', 'July 16 - June 17', 'PY7A', 'M.Pharm.', 1, 2, 0, 10, 5, 2, 0, 2, 2, 0, 'id1542268931109'),
('sopharma', 'July 15 - June 16', 'PY7A', 'M.Pharm.', 1, 2, 0, 10, 5, 1, 0, 1, 6, 0, 'id1542268965591'),
('sopharma', 'July 14 - June 15', 'PY7A', 'M.Pharm.', 1, 2, 0, 10, 5, 0, 0, 6, 1, 0, 'id1542268991757'),
('sopharma', 'July 18 - June 19', 'PY9Z', 'Ph.D.', 4, 5, 3, 12, 0, 3, 0, 2, 17, 0, 'id1542269014984'),
('sopharma', 'July 17 - June 18', 'PY9Z', 'Ph.D.', 4, 8, 2, 15, 0, 0, 0, 3, 10, 0, 'id1542269194733'),
('sopharma', 'July 15 - June 16', 'PY9Z', 'Ph.D.', 2, 3, 1, 7, 0, 0, 0, 0, 2, 0, 'id1542269276362'),
('sopharma', 'July 14 - June 15', 'PY9Z', 'Ph.D.', 2, 2, 2, 6, 0, 3, 1, 2, 6, 0, 'id1542269313761'),
('sobiotech', 'July 14 - June 15', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 3, 1, 5, 7, 0, 2, 0, 1, 9, 0, 'id1542400163973'),
('sobiotech', 'July 15 - June 16', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 3, 1, 5, 7, 0, 1, 0, 2, 8, 0, 'id1542400314917'),
('sobiotech', 'July 16 - June 17', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 3, 1, 5, 7, 0, 0, 0, 3, 11, 0, 'id1542400319137'),
('sobiotech', 'July 17 - June 18', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 3, 1, 5, 7, 0, 3, 0, 5, 6, 0, 'id1542400451668'),
('sobiotech', 'July 18 - June 19', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 3, 1, 5, 11, 0, 1, 0, 2, 8, 0, 'id1542400542854'),
('soecon', 'July 14 - June 15', 'EC5B', 'M.B.A. (BE)', 10, 12, 8, 27, 3, 0, 0, 0, 0, 0, 'id1542440110649'),
('soedu', 'Feb 14 - June 14', 'ED4A', 'B.Ed.', 25, 31, 22, 77, 0, 17, 22, 47, 65, 0, 'idid1542194122411'),
('soedu', 'July 14 - June 15', 'ED4A', 'B.Ed.', 25, 31, 22, 77, 0, 29, 25, 43, 58, 0, 'idid1542196084491'),
('soedu', 'July 15 - June 16', 'ED4A', 'B.Ed.', 21, 30, 24, 75, 0, 29, 31, 44, 31, 0, 'idid1542196187730'),
('soedu', 'July 16 - June 17', 'ED4A', 'B.Ed.', 21, 30, 24, 75, 0, 33, 23, 39, 47, 0, 'idid1542196696993'),
('soedu', 'July 17 - June 18', 'ED4A', 'B.Ed.', 21, 30, 24, 75, 0, 25, 28, 15, 49, 0, 'idid1542196786546'),
('soedu', 'July 14 - June 15', 'ED5A', 'M.Ed.', 6, 7, 5, 18, 0, 7, 8, 9, 11, 0, 'id1542455150705'),
('soedu', 'July 15 - June 16', 'ED5A', 'M.Ed.', 8, 10, 7, 25, 0, 2, 2, 5, 2, 0, 'id1542456007648'),
('soedu', 'July 16 - June 17', 'ED5A', 'M.Ed.', 8, 10, 7, 25, 0, 5, 1, 3, 21, 0, 'id1542456333377'),
('soedu', 'July 17 - June 18', 'ED5A', 'M.Ed.', 8, 10, 7, 25, 0, 3, 1, 1, 2, 0, 'id1542456598160'),
('soedu', 'July 18 - June 19', 'ED4A', 'B.Ed.', 21, 30, 24, 75, 0, 22, 22, 39, 45, 0, 'id1542456679057'),
('soedu', 'Feb 14 - June 14', 'ED4A', 'B.Ed.', 25, 31, 22, 77, 0, 17, 22, 47, 65, 0, 'idid1542194122411'),
('soedu', 'July 14 - June 15', 'ED4A', 'B.Ed.', 25, 31, 22, 77, 0, 29, 25, 43, 58, 0, 'idid1542196084491'),
('soedu', 'July 15 - June 16', 'ED4A', 'B.Ed.', 21, 30, 24, 75, 0, 29, 31, 44, 31, 0, 'idid1542196187730'),
('soedu', 'July 16 - June 17', 'ED4A', 'B.Ed.', 21, 30, 24, 75, 0, 33, 23, 39, 47, 0, 'idid1542196696993'),
('soedu', 'July 17 - June 18', 'ED4A', 'B.Ed.', 21, 30, 24, 75, 0, 25, 28, 15, 49, 0, 'idid1542196786546'),
('soedu', 'July 14 - June 15', 'ED5A', 'M.Ed.', 6, 7, 5, 18, 0, 7, 8, 9, 11, 0, 'id1542455150705'),
('soedu', 'July 15 - June 16', 'ED5A', 'M.Ed.', 8, 10, 7, 25, 0, 2, 2, 5, 2, 0, 'id1542456007648'),
('soedu', 'July 16 - June 17', 'ED5A', 'M.Ed.', 8, 10, 7, 25, 0, 5, 1, 3, 21, 0, 'id1542456333377'),
('soedu', 'July 17 - June 18', 'ED5A', 'M.Ed.', 8, 10, 7, 25, 0, 3, 1, 1, 2, 0, 'id1542456598160'),
('soedu', 'July 18 - June 19', 'ED4A', 'B.Ed.', 21, 30, 24, 75, 0, 24, 22, 40, 46, 0, 'id1542456679057');

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
('saif ', 'sai9%28%2A%26%25%24%29', '', 'slfhkjsd'),
('pranjal', 'jhg', '', '659'),
('saif', 'admin+test%5C%27ter', '', 'fkdjfjkkd'),
('soex', 'To+get+all+students+even+on+the+platform+of+academic+content+delivery%2C+it+is+felt+prudent+to+familiarize+all+students+across+domain+so+that+there+is+left+no+scope+of+producing+%91slow+learners%92.++This+is+achieved+by+way+of+pre-sem+preparations+in+which+basics+of+courses+across+domain+are+delivered+in+initial+2-3+weeks+time.++Remedial+classes+for+preparation+of+National+level+exams+viz.+GATE+and+NET+given+in+Time-Table.+The+classes+are+taken+up+by+the+teachers+as+well+as+the+GATE+qualified+M.Tech+students.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F30-10-2018_15-27-17AQAR_+SoEx+2017-18+%4013Aug2018.doc'),
('sopedu', 'i.+Remedial+classes+regularly+organized+in+every+semester+for+the+students+who+did+not+perform+well+in+the+previous+semester.ii.Due+to+the+nature+of+the+course+students+are+regularly+going+to+participate+in+intercollegiate+and+interuniversity+tournaments+also+they+go+++++++++for+officiating+and+conducting+tournaments+in+various+schools+and+colleges+%28which+is+part+and+partial+of+the+course%29.+iiI.Extra+classes+are+arranged+by+concerned+faculty+to+complete+their+course.+Remedial+classes%2C+test+and+assignments+are+held+for+students+++++++++++++++++failing+in+class+tests.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F30-10-2018_15-27-09New+Revised+-+BPES-I%2CIII+TIME+TABLE+JUly-Dec+2018.pdf'),
('somath', '1.For+slow+learners%2C+conducting+special+discussions%2Ftutorials.+2.Strengthening++prerequisites.+%28http%3A%2F%2Fwww.math.dauniv.ac.in%2Fsyllabus_msc-2015%28CBCS%29.pdf%293.For+advanced+learners%2C+recommending+them+to+attend+various+programmes+like+MTTS%2C+AFS%2C+Instructional+Schools+etc.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F30-10-2018_16-56-20MKR_8161.JPG%2C+http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F02-11-2018_18-03-36Mini+MTTS+Schedule-2014.pdf'),
('biochem', 'The+School+identifies+the+admitted+students+of+the+class+as+advanced+learner+and+slow+learners+based+upon+involvement+in+interaction+during+the+classes+and+test+performance.+Remedial+classes+are+arranged+for+slow+learners+and+advanced+learners+are+given+extra+time+for+discussion+about+their+querries+and+are+provided+additional+reading+material.++', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_13-16-13Sem+I+and+III+Time+Table+-+2018.docx'),
('Socsit', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa+addddddddddd++ffffffffffffffffff', '', '1'),
('iipsdavv', 'The+institution+assesses+the+learning+levels+of+the+students%2C+after+admission+and+organizes+special+Programmes+for+advanced+learners+and+slow+learners+in+the+form+of+conducting+enrichment+classes+for+the+advance+learning+of+the+students+and+also+Remedial+classes+for+slow+learners.+Apart+from+this+the+students+are+also+assigned+mentors+for+their+counselling+and+all+other+activities+that+help+in+their+overall+professional+development.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F14-11-2018_15-14-02criteria+2.2.1.doc'),
('', 'The+school+conducts+common+entrance+examinations+for+admission+in+M.Sc.+courses+of+the+department.+The+admission+is+carried+on+the+basis+of+marks+in+the+merit+of+entrance+examination+and+subsequent+counselling.+The+benchmarks+for+admission+are+relatively+high.Orientation+programs+are+conducted+at+the+beginning+of+the+year+so+that+their+social+skills%2C+as+well+as+interaction+with+the+faculty+members+and+staff%2C+improve+leading+to+a+better+learning+experience+The+institute%92s+policy+on+inclusivity+and+equity+enables+students+with+the+diverse+background+to+get+admitted+and+hence+there+are+bound+to+be+variations+in+the+levels+of+learning+%96+especially+with+regard+to+students+from+rural+and+backward+areas.+The+institute+tackles+this+diversity+as+a+challenge+and+takes+the+following+measures%3ATutorials+are+arranged+to+fill+the+gap+between+the+School%92s+curriculum+and+the+curriculum+they+have+studied+at+the+UG+level.+The+school+conducts+Tests%2C+open+interactive+discussion+with+the+students+so+as+to+identify+their+learning+levels%2C+difficulties+in+the+fundamental+knowledge+base+of+chemistry+needed+to+do+M.Sc.%2C+mathematical+problem-solving+ability%2C+computational+skills%2C+language+and+communication+deficiencies+and+logical+thinking.+These+students+are+given+special+coaching+to+overcome+these+difficulties+so+that+they+join+the+mainstream+students+within+a+short+period+of+time.Compensatory+courses+are+conducted+for+slow+learners+wherein+special+individually+focused+care+is+bestowed+on+such+students.+Faculty+members+provide+them+with+lecture+notes%2C+home+assignments%2C+tutorials%2C+presentations+etc.The+flexible+credit+system+enables+the+students+to+study+at+their+own+pace+and+earn+less%2Fmore+credits+without+violating+the+maximum%2Fminimum.For+advanced+learners+the+following+provisions+are+in+place%3ASpecial+coaching+is+provided+to+the+advanced+learners%2Fmeritorious+students+for+preparing+NET%2C+GATE%2C+and+similar+examinations.Deserving%2FAdvanced+learners+are+encouraged+to+do+their+internships+from+institutions+of+National+importance+such+as+IITs+%28Delhi%2C+Hyderabad%2C+Indore%2C+and+Bombay+etc%29%2C+IISC+Bangalore%2C+IISERs%2C+NCL+Pune%2C+and+some+leading+pharmaceutical+industries.+Competent+students+are+encouraged+to+participate+in+events+at+local+and+national+levels.More+emphasis+on+exercises+based+on+green+chemistry+approach+vis-a-vis+spectral+characterization+at+M.Sc.+level+is+the+unique+feature+of+the+department%92s+curriculum.', '', '1'),
('chemsc', 'The+school+conducts+common+entrance+examinations+for+admission+in+M.Sc.+courses+of+the+department.+The+admission+is+carried+on+the+basis+of+marks+in+the+merit+of+entrance+examination+and+subsequent+counselling.+The+benchmarks+for+admission+are+relatively+high.Orientation+programs+are+conducted+at+the+beginning+of+the+year+so+that+their+social+skills%2C+as+well+as+interaction+with+the+faculty+members+and+staff%2C+improve+leading+to+a+better+learning+experience+The+institute%92s+policy+on+inclusivity+and+equity+enables+students+with+the+diverse+background+to+get+admitted+and+hence+there+are+bound+to+be+variations+in+the+levels+of+learning+%96+especially+with+regard+to+students+from+rural+and+backward+areas.+The+institute+tackles+this+diversity+as+a+challenge+and+takes+the+following+measures%3ATutorials+are+arranged+to+fill+the+gap+between+the+School%92s+curriculum+and+the+curriculum+they+have+studied+at+the+UG+level.+The+school+conducts+Tests%2C+open+interactive+discussion+with+the+students+so+as+to+identify+their+learning+levels%2C+difficulties+in+the+fundamental+knowledge+base+of+chemistry+needed+to+do+M.Sc.%2C+mathematical+problem-solving+ability%2C+computational+skills%2C+language+and+communication+deficiencies+and+logical+thinking.+These+students+are+given+special+coaching+to+overcome+these+difficulties+so+that+they+join+the+mainstream+students+within+a+short+period+of+time.Compensatory+courses+are+conducted+for+slow+learners+wherein+special+individually+focused+care+is+bestowed+on+such+students.+Faculty+members+provide+them+with+lecture+notes%2C+home+assignments%2C+tutorials%2C+presentations+etc.The+flexible+credit+system+enables+the+students+to+study+at+their+own+pace+and+earn+less%2Fmore+credits+without+violating+the+maximum%2Fminimum.For+advanced+learners+the+following+provisions+are+in+place%3ASpecial+coaching+is+provided+to+the+advanced+learners%2Fmeritorious+students+for+preparing+NET%2C+GATE%2C+and+similar+examinations.Deserving%2FAdvanced+learners+are+encouraged+to+do+their+internships+from+institutions+of+National+importance+such+as+IITs+%28Delhi%2C+Hyderabad%2C+Indore%2C+and+Bombay+etc%29%2C+IISC+Bangalore%2C+IISERs%2C+NCL+Pune%2C+and+some+leading+pharmaceutical+industries.+Competent+students+are+encouraged+to+participate+in+events+at+local+and+national+levels.More+emphasis+on+exercises+based+on+green+chemistry+approach+vis-a-vis+spectral+characterization+at+M.Sc.+level+is+the+unique+feature+of+the+department%92s+curriculum.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F14-11-2018_19-44-462.2.1+Advance%26+slow+learners.docx'),
('emrcdavv', '-+6+Days+Intensive+Student+Induction+Programme+is+conducted+which+enables+teachers%2Fmentors+to+identify+the+strengths+of+the+students.-+Special+sessions+are+organized+for+slow+learners+by+Teacher%2FMentors.+-+Teacher%2FMentor+provides+Notes%2Flessons%2Fpresentations+and+assignments+to+students-+Students+are+encouraged+to+take+up+courses+from+MOOCS+for+earning+additional+credits.-+Flipped+Classroom+exercises.Experiential+Learning+Methods+are+also+adopted+for+better+exposure.+Remedial+classes+are+scheduled+in+each+semester+for+slow+learners.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_12-55-4300Sample+Document.pdf'),
('solaw', 'After+admission+in+first+year%2C+psychometric+assessment+of+students+is+done+to+guide+them+on+the+prospective+career+suitability.+Further%2C+a+workshop+on+Communicative+English+is+offered+to+the+students+to+improvize+their+language+skills+so+as+to+enhance+their+learning+abilities.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F13-11-2018_14-11-58Book1.xls'),
('sobiotech', 'Institute+promote+the+participation+of+advanced+learners+in+innovative+activities+such+as+writing+research+proposals+for+various+schemes+such+as+programmes+for+DST+and+Anveshan+scheme+etc.+Also%2C+we+promote+them+to+write+SOPs+for+foreign+Ph.D.+positions+and+some+of+them+joined+Ph.D.+abroad.For+slow+learners%2C+we+made+a+self+help+goup+of+advanced+learnes+to+teach+complex+topics+as+well+as+to+deliver+solution+classes.Besides%2C+teachers+also+provide+extra+classes+to+slow+learners%2C+as+and+when+they+asked.+Here+it+is+noteworthy+that+department+beleive+in+equality+and+Human+respect+and+inline+to+this+philosophy+we+don%5C%27t+differentiate+students+in+slow+learners+and+advance+learner+categories+on+paper.+We+only+put+the+names+of+students+and+the+assignments+to+be+performed+after+discussion+with+students.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F16-11-2018_13-07-042.2.1.pdf');

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
('admin2', 'July 16 - June 17', 'AD2BSC', 'BACHELOR OF SCIENCE', 3928, 8, 8, 0, 8, 'id1540573071855'),
('pranjal', 'July 15 - June 16', 'TESTINGP1', 'TESTING NAME 1 NAME', 8, 9, 76, 45, 87, 'id1540659786792'),
('somath', 'July 14 - June 15', 'MT5A', 'M.Sc.(Mathematics)', 0, 83, 0, 3, 0, 'id1540817095971'),
('somath', 'July 15 - June 16', 'MT5A', 'M.Sc.(Mathematics)', 0, 86, 0, 3, 0, 'id1540817341328'),
('somath', 'July 16 - June 17', 'MT5A', 'M.Sc.(Mathematics)', 0, 83, 0, 3, 0, 'id1540817358096'),
('somath', 'July 17 - June 18', 'MT5A', 'M.Sc.(Mathematics)', 0, 71, 0, 3, 0, 'id1540817372983'),
('somath', 'July 18 - June 19', 'MT5A', 'M.Sc.(Mathematics)', 0, 62, 0, 3, 0, 'id1540817388407'),
('somath', 'July 14 - June 15', 'MT8X', 'M.Phil.', 0, 9, 0, 3, 0, 'id1540817404855'),
('somath', 'July 15 - June 16', 'MT8X', 'M.Phil.', 0, 9, 0, 3, 0, 'id1540817437319'),
('sostat', 'July 15 - June 16', 'ST5A', 'M.Sc. Statistics', 0, 51, 0, 2, 0, 'ididid1540881832104'),
('sostat', 'July 16 - June 17', 'ST5A', 'M.Sc. Statistics', 0, 37, 0, 2, 0, 'idididid1540881477569'),
('sostat', 'July 17 - June 18', 'ST5A', 'M.Sc. Statistics', 0, 31, 0, 2, 0, 'idid1540884780446'),
('sostat', 'July 14 - June 15', 'ST5A', 'M.Sc. Statistics', 0, 52, 0, 2, 0, 'idididid1540881068785'),
('soex', 'July 14 - June 15', 'EL7A', 'M.Tech Embedded Systems', 0, 158, 0, 7, 7, 'id1540893794818'),
('soex', 'July 15 - June 16', 'EL7A', 'M.Tech Embedded Systems', 0, 133, 0, 9, 9, 'id1540893789115'),
('soex', 'July 16 - June 17', 'EL7A', 'M.Tech Embedded Systems', 0, 97, 0, 9, 9, 'id1540893785890'),
('soex', 'July 17 - June 18', 'EL7A', 'M.Tech Embedded Systems', 0, 58, 0, 8, 8, 'id1540893782706'),
('soex', 'July 18 - June 19', 'EL7A', 'M.Tech Embedded Systems', 0, 57, 0, 6, 6, 'id1540893761691'),
('sopedu', 'July 15 - June 16', 'PE4A', 'B.P.E.S.', 50, 30, 7, 7, 7, 'id1540895062684'),
('sopedu', 'July 14 - June 15', 'PE4A', 'B.P.E.S.', 50, 30, 7, 7, 7, 'id1540895003891'),
('sopedu', 'July 16 - June 17', 'PE4A', 'B.P.E.S.', 50, 30, 7, 7, 7, 'id1540895111130'),
('sopedu', 'July 17 - June 18', 'PE4A', 'B.P.E.S.', 50, 23, 7, 7, 7, 'id1540895130726'),
('sopedu', 'July 18 - June 19', 'PE4A', 'B.P.E.S.', 70, 25, 7, 7, 7, 'id1540895157674'),
('sostat', 'July 18 - June 19', 'ST5A', 'M.Sc. Statistics', 0, 30, 0, 2, 0, 'id1540978847171'),
('emrcdavv', 'July 15 - June 16', 'EM5A', 'M.B.A. Media Management', 0, 78, 7, 7, 7, 'id1542110748990'),
('biochem', 'July 14 - June 15', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 0, 35, 0, 4, 0, 'idid1541230907350'),
('biochem', 'July 15 - June 16', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 0, 30, 0, 4, 0, 'idid1541231173879'),
('biochem', 'July 16 - June 17', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 0, 39, 0, 3, 0, 'idid1541231183299'),
('biochem', 'July 17 - June 18', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 0, 42, 0, 3, 0, 'idid1541231194599'),
('biochem', 'July 18 - June 19', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 0, 38, 0, 3, 0, 'idid1541231201926'),
('sees', 'Feb 14 - June 14', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 0, 33, 0, 3, 0, 'id1541232757438'),
('sees', 'July 14 - June 15', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 0, 34, 0, 3, 0, 'id1541232853406'),
('sees', 'July 15 - June 16', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 0, 31, 0, 3, 0, 'id1541232887422'),
('sees', 'July 16 - June 17', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 0, 26, 0, 3, 0, 'id1541232988878'),
('sees', 'July 17 - June 18', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 0, 26, 0, 3, 0, 'id1541233022065'),
('sees', 'July 18 - June 19', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 0, 30, 0, 3, 0, 'id1541233042251'),
('sees', 'Feb 14 - June 14', 'EN5A', 'M.B.A (Energy Management) Distance', 0, 0, 0, 3, 0, 'id1541233068067'),
('sees', 'July 14 - June 15', 'EN5A', 'M.B.A (Energy Management) Distance', 0, 19, 0, 3, 0, 'id1541233105784'),
('sees', 'July 15 - June 16', 'EN5A', 'M.B.A (Energy Management) Distance', 0, 33, 0, 3, 0, 'id1541233139271'),
('sees', 'July 16 - June 17', 'EN5A', 'M.B.A (Energy Management) Distance', 0, 44, 0, 3, 0, 'id1541233191939'),
('sees', 'July 17 - June 18', 'EN5A', 'M.B.A (Energy Management) Distance', 0, 38, 0, 3, 0, 'id1541233212414'),
('sees', 'July 18 - June 19', 'EN5A', 'M.B.A (Energy Management) Distance', 0, 0, 0, 3, 0, 'id1541233235064'),
('sees', 'Feb 14 - June 14', 'EN8X', 'M.Phil.', 0, 7, 0, 3, 0, 'id1541233262863'),
('sees', 'July 14 - June 15', 'EN8X', 'M.Phil.', 0, 8, 0, 3, 0, 'id1541233308372'),
('sees', 'Feb 14 - June 14', 'EN9Z', 'Ph.D.', 0, 6, 0, 3, 0, 'id1541233339087'),
('sees', 'July 14 - June 15', 'EN9Z', 'Ph.D.', 0, 0, 0, 3, 0, 'id1541233414253'),
('sees', 'July 15 - June 16', 'EN9Z', 'Ph.D.', 0, 0, 0, 3, 0, 'id1541233445537'),
('sees', 'July 16 - June 17', 'EN9Z', 'Ph.D.', 0, 0, 0, 3, 0, 'id1541233465202'),
('sees', 'July 17 - June 18', 'EN9Z', 'Ph.D.', 0, 7, 0, 3, 0, 'id1541233491291'),
('sees', 'July 18 - June 19', 'EN9Z', 'Ph.D.', 0, 1, 0, 3, 0, 'id1541233532432'),
('Socsit', 'Feb 14 - June 14', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 1, 1, 1, 1, 1, 'id1541237716767'),
('doll', 'July 14 - June 15', 'LE2A', 'Diploma in Interior Designing', 11, 0, 1, 0, 0, 'id1541359453224'),
('doll', 'July 15 - June 16', 'LE2A', 'Diploma in Interior Designing', 14, 0, 1, 0, 0, 'id1541359457199'),
('doll', 'July 16 - June 17', 'LE2A', 'Diploma in Interior Designing', 11, 0, 1, 0, 0, 'id1541359577968'),
('doll', 'July 17 - June 18', 'LE2A', 'Diploma in Interior Designing', 16, 0, 1, 0, 0, 'id1541359624357'),
('doll', 'July 18 - June 19', 'LE2A', 'Diploma in Interior Designing', 23, 0, 1, 0, 0, 'id1541359659562'),
('doll', 'July 14 - June 15', 'LE4A', 'B. Voc. Interior Design', 31, 0, 1, 0, 0, 'id1541359689465'),
('doll', 'July 15 - June 16', 'LE4A', 'B. Voc. Interior Design', 50, 0, 1, 0, 0, 'id1541359735741'),
('doll', 'July 16 - June 17', 'LE4A', 'B. Voc. Interior Design', 50, 0, 1, 0, 0, 'id1541359771538'),
('doll', 'July 17 - June 18', 'LE4A', 'B. Voc. Interior Design', 50, 0, 1, 0, 0, 'id1541359800832'),
('doll', 'July 18 - June 19', 'LE4A', 'B. Voc. Interior Design', 50, 0, 1, 0, 0, 'id1541359825343'),
('doll', 'July 14 - June 15', 'LE4B', 'B.Voc. Fashion Technology', 4, 0, 1, 0, 0, 'id1541359854052'),
('doll', 'July 15 - June 16', 'LE4B', 'B.Voc. Fashion Technology', 8, 0, 1, 0, 0, 'id1541359882667'),
('doll', 'July 16 - June 17', 'LE4B', 'B.Voc. Fashion Technology', 18, 0, 1, 0, 0, 'id1541359909633'),
('doll', 'July 17 - June 18', 'LE4B', 'B.Voc. Fashion Technology', 24, 0, 1, 0, 0, 'id1541359936342'),
('doll', 'July 18 - June 19', 'LE4B', 'B.Voc. Fashion Technology', 18, 0, 1, 0, 0, 'id1541359969332'),
('chemsc', 'Feb 14 - June 14', 'CH5A', 'M.Sc. Chemistry', 0, 1, 0, 8, 8, 'id1542021842359'),
('chemsc', 'Feb 14 - June 14', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 0, 1, 0, 8, 8, 'id1542021876830'),
('chemsc', 'July 14 - June 15', 'CH5A', 'M.Sc. Chemistry', 0, 1, 0, 8, 8, 'id1542021921105'),
('chemsc', 'July 14 - June 15', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 0, 1, 0, 8, 8, 'id1542021928560'),
('chemsc', 'July 15 - June 16', 'CH5A', 'M.Sc. Chemistry', 0, 1, 0, 8, 8, 'id1542021934727'),
('chemsc', 'July 15 - June 16', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 0, 1, 0, 7, 7, 'id1542021938447'),
('chemsc', 'July 16 - June 17', 'CH5A', 'M.Sc. Chemistry', 0, 1, 0, 7, 7, 'id1542022049785'),
('chemsc', 'July 16 - June 17', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 0, 1, 0, 7, 7, 'id1542022051497'),
('chemsc', 'July 17 - June 18', 'CH5A', 'M.Sc. Chemistry', 0, 1, 0, 6, 6, 'id1542022115865'),
('chemsc', 'July 17 - June 18', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 0, 1, 0, 6, 6, 'id1542022129769'),
('chemsc', 'July 18 - June 19', 'CH5A', 'M.Sc. Chemistry', 0, 1, 0, 6, 6, 'id1542022136760'),
('chemsc', 'July 18 - June 19', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 0, 1, 0, 6, 6, 'id1542022144337'),
('emrcdavv', 'July 15 - June 16', 'EM6A', 'M.Sc. EM', 131, 18, 7, 7, 7, 'id1542110745279'),
('emrcdavv', 'Feb 14 - June 14', 'EM5A', 'M.B.A. Media Management', 0, 83, 7, 7, 7, 'id1542110585024'),
('emrcdavv', 'Feb 14 - June 14', 'EM6A', 'M.Sc. EM', 116, 10, 7, 7, 7, 'id1542109872767'),
('emrcdavv', 'July 16 - June 17', 'EM6A', 'M.Sc. EM', 138, 8, 7, 7, 7, 'id1542110842280'),
('emrcdavv', 'July 16 - June 17', 'EM5A', 'M.B.A. Media Management', 0, 84, 7, 7, 7, 'id1542110844679'),
('emrcdavv', 'July 17 - June 18', 'EM6A', 'M.Sc. EM', 158, 5, 6, 6, 6, 'id1542110920376'),
('emrcdavv', 'July 17 - June 18', 'EM5A', 'M.B.A. Media Management', 0, 84, 6, 6, 6, 'id1542110926126'),
('emrcdavv', 'July 14 - June 15', 'EM6A', 'M.Sc. EM', 115, 15, 7, 7, 7, 'id1542111392704'),
('emrcdavv', 'July 14 - June 15', 'EM5A', 'M.B.A. Media Management', 0, 99, 7, 7, 7, 'id1542111396223'),
('sopharma', 'July 18 - June 19', 'PY4A', 'B.Pharm.', 205, 28, 9, 0, 4, 'id1542269497966'),
('iipsdavv', 'July 14 - June 15', 'PS4A', 'BCom(Hons)', 61, 0, 15, 0, 20, 'id1542013696392'),
('iipsdavv', 'July 15 - June 16', 'PS4A', 'BCom(Hons)', 59, 0, 17, 0, 18, 'id1542013766815'),
('iipsdavv', 'July 16 - June 17', 'PS4A', 'BCom(Hons)', 62, 0, 13, 0, 25, 'id1542013829205'),
('iipsdavv', 'July 17 - June 18', 'PS4A', 'BCom(Hons)', 66, 0, 11, 0, 28, 'id1542013830410'),
('solaw', 'July 14 - June 15', 'LL4A', 'B.A.LL.B.(Hons)', 262, 0, 2, 0, 3, 'id1542271201111'),
('solaw', 'July 14 - June 15', 'LL5A', 'LL.M.', 0, 61, 2, 0, 3, 'id1542271293701'),
('solaw', 'July 14 - June 15', 'LL8X', 'M.Phil.', 0, 61, 2, 0, 3, 'id1542271299140'),
('solaw', 'July 15 - June 16', 'LL4A', 'B.A.LL.B.(Hons)', 269, 0, 4, 0, 1, 'id1542271308756'),
('solaw', 'July 15 - June 16', 'LL5A', 'LL.M.', 0, 55, 4, 0, 1, 'id1542271333032'),
('solaw', 'July 16 - June 17', 'LL4A', 'B.A.LL.B.(Hons)', 272, 0, 2, 0, 1, 'id1542271339055'),
('solaw', 'July 16 - June 17', 'LL5A', 'LL.M.', 0, 44, 2, 0, 1, 'id1542271357886'),
('solaw', 'July 17 - June 18', 'LL4A', 'B.A.LL.B.(Hons)', 268, 0, 1, 0, 1, 'id1542271364511'),
('solaw', 'July 17 - June 18', 'LL5A', 'LL.M.', 0, 47, 1, 0, 1, 'id1542271368814'),
('solaw', 'July 17 - June 18', 'LL8X', 'M.Phil.', 0, 8, 1, 0, 1, 'id1542271373966'),
('solaw', 'July 17 - June 18', 'LL9Z', 'Ph.D.', 0, 28, 1, 0, 1, 'id1542271381829'),
('solaw', 'July 18 - June 19', 'LL4A', 'B.A.LL.B.(Hons)', 275, 0, 1, 0, 1, 'id1542271389206'),
('solaw', 'July 18 - June 19', 'LL5A', 'LL.M.', 0, 64, 1, 0, 1, 'id1542271395038'),
('sobiotech', 'July 14 - June 15', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 0, 12, 0, 7, 7, 'id1542402859792'),
('sobiotech', 'July 15 - June 16', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 0, 11, 0, 4, 4, 'id1542403136726'),
('sobiotech', 'July 16 - June 17', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 0, 14, 0, 4, 4, 'id1542403162587'),
('sobiotech', 'July 17 - June 18', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 0, 15, 0, 3, 3, 'id1542403194479'),
('sobiotech', 'July 18 - June 19', 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 0, 11, 0, 3, 3, 'id1542403224651'),
('sobiotech', 'July 14 - June 15', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 0, 14, 0, 7, 7, 'id1542403270079'),
('sobiotech', 'July 15 - June 16', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 0, 8, 0, 4, 4, 'id1542403313984'),
('sobiotech', 'July 16 - June 17', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 0, 6, 0, 4, 4, 'id1542403345852'),
('sobiotech', 'July 17 - June 18', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 0, 2, 0, 3, 3, 'id1542403369032'),
('sobiotech', 'July 18 - June 19', 'BT5B', 'M.Sc. Biotechnology (Industry Sponsored)', 0, 10, 0, 3, 3, 'id1542403396670'),
('sobiotech', 'July 14 - June 15', 'BT5C', 'M.Sc. Genetic Engineering', 0, 5, 0, 7, 7, 'id1542403425469'),
('sobiotech', 'July 15 - June 16', 'BT5C', 'M.Sc. Genetic Engineering', 0, 6, 0, 4, 4, 'id1542403479506'),
('sobiotech', 'July 16 - June 17', 'BT5C', 'M.Sc. Genetic Engineering', 0, 6, 0, 4, 4, 'id1542403533322'),
('sobiotech', 'July 17 - June 18', 'BT5C', 'M.Sc. Genetic Engineering', 0, 4, 0, 3, 3, 'id1542403558015'),
('sobiotech', 'July 18 - June 19', 'BT5C', 'M.Sc. Genetic Engineering', 0, 9, 0, 3, 3, 'id1542403580906');

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

--
-- Dumping data for table `t2_2_3`
--

INSERT INTO `t2_2_3` (`Username`, `Name_of_student`, `Gender`, `UDID_card_number`, `Disability_type`, `Disability_percent`, `Prog_code`, `Prog_name`, `Year_enrolled`, `Year_passed`, `id_time`) VALUES
('admin2', 'djsnk', 'Male', 'kesme', 'kdmsl', 3, 'AD2BSC', 'BACHELOR OF SCIENCE', 'July 15 - June 16', 'July 16 - June 17', 'id1540573092292'),
('pranjal', 'pranjal gupta', 'Male', '25', 'loola', 100, 'TESTINGP1', 'TESTING NAME 1 NAME', 'July 14 - June 15', 'July 16 - June 17', 'id1540659831669'),
('sostat', 'nil', 'Male', 'nil', 'nil', 0, 'ST5A', 'M.Sc. Statistics', 'July 14 - June 15', 'July 15 - June 16', 'id1540883531378'),
('sopedu', 'NA', 'Male', 'NA', 'NA', 0, 'PE4A', 'B.P.E.S.', 'Feb 14 - June 14', 'July 16 - June 17', 'id1541232973947'),
('emrcdavv', '0', 'Male', '0', '0', 0, 'EM5A', 'M.B.A. Media Management', 'Feb 14 - June 14', 'July 14 - June 15', 'id1541239020034'),
('iipsdavv', 'Rachit Verma', 'Male', '4622/2014', 'physical impairement of both h', 40, 'PS6B', 'M.Tech. (IT)', 'July 14 - June 15', 'July 19 - June 20', 'id1542204540309'),
('iipsdavv', 'Debrath Chouhan', 'Male', '2347/15', 'Visual impairement', 40, 'PS6C', 'MBA (MS) 5 Yrs', 'July 16 - June 17', 'July 20 - June 21', 'id1542204768328'),
('chemsc', 'Nil', 'Male', 'Nil', 'NA', 0, 'CH5A', 'M.Sc. Chemistry', 'July 16 - June 17', 'July 17 - June 18', 'id1542206543175'),
('chemsc', 'Nil', 'Female', 'Nil', 'NA', 0, 'CH5A', 'M.Sc. Chemistry', 'July 16 - June 17', 'July 17 - June 18', 'id1542206734109'),
('sopharma', 'Rajnish Yadav', 'Male', '2349/00000/1806/0395299', 'VH-Low vision', 40, 'PY4A', 'B.Pharm.', 'July 18 - June 19', 'July 21 - June 22', 'id1542269588846'),
('sees', '0', 'Male', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542350728453'),
('sees', '0', 'Female', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542350759648'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542350555743'),
('sees', '0', 'Male', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'July 14 - June 15', 'July 15 - June 16', 'id1542350640172'),
('sees', '0', 'Female', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'July 14 - June 15', 'July 15 - June 16', 'id1542350747425'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'July 14 - June 15', 'July 15 - June 16', 'id1542350769383'),
('sees', '0', 'Male', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'July 15 - June 16', 'July 16 - June 17', 'id1542350796068'),
('sees', '0', 'Female', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'July 15 - June 16', 'July 16 - June 17', 'id1542350868274'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'July 15 - June 16', 'July 16 - June 17', 'id1542350898186'),
('sees', '0', 'Male', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'July 16 - June 17', 'July 17 - June 18', 'id1542350916930'),
('sees', '0', 'Female', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'July 16 - June 17', 'July 17 - June 18', 'id1542350939505'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 16 - June 17', 'July 17 - June 18', 'id1542350982539'),
('sees', '0', 'Male', '0', '0', 0, 'EN5A', 'M.B.A (Energy Management) Distance', 'July 17 - June 18', 'July 18 - June 19', 'id1542351005979'),
('sees', '0', 'Male', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542351519794'),
('sees', '0', 'Female', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542351543699'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542351657607'),
('sees', '0', 'Male', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 14 - June 15', 'July 15 - June 16', 'id1542351683096'),
('sees', '0', 'Female', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 14 - June 15', 'July 15 - June 16', 'id1542351705264'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 14 - June 15', 'July 15 - June 16', 'id1542351722946'),
('sees', '0', 'Male', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 15 - June 16', 'July 16 - June 17', 'id1542351745997'),
('sees', '0', 'Female', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 15 - June 16', 'July 16 - June 17', 'id1542351770764'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 15 - June 16', 'July 16 - June 17', 'id1542351789142'),
('sees', '0', 'Male', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 16 - June 17', 'July 17 - June 18', 'id1542351809300'),
('sees', '0', 'Female', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 16 - June 17', 'July 17 - June 18', 'id1542351835115'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 16 - June 17', 'July 17 - June 18', 'id1542351850928'),
('sees', '0', 'Male', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 17 - June 18', 'July 18 - June 19', 'id1542351894847'),
('sees', '0', 'Female', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 17 - June 18', 'July 18 - June 19', 'id1542351920099'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 17 - June 18', 'July 18 - June 19', 'id1542351937692'),
('sees', '0', 'Male', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 18 - June 19', 'July 19 - June 20', 'id1542351961689'),
('sees', '0', 'Female', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 18 - June 19', 'July 19 - June 20', 'id1542351987295'),
('sees', '0', 'Female', '0', '0', 0, 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'July 18 - June 19', 'July 19 - June 20', 'id1542352007071'),
('sees', '0', 'Male', '0', '0', 0, 'EN8X', 'M.Phil.', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542352026369'),
('sees', '0', 'Female', '0', '0', 0, 'EN8X', 'M.Phil.', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542352046337'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN8X', 'M.Phil.', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542352068556'),
('sees', '0', 'Male', '0', '0', 0, 'EN8X', 'M.Phil.', 'July 14 - June 15', 'July 15 - June 16', 'id1542352096104'),
('sees', '0', 'Female', '0', '0', 0, 'EN8X', 'M.Phil.', 'July 14 - June 15', 'July 15 - June 16', 'id1542352119130'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN8X', 'M.Phil.', 'July 14 - June 15', 'July 15 - June 16', 'id1542352138362'),
('sees', '0', 'Male', '0', '0', 0, 'EN9Z', 'Ph.D.', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542352165784'),
('sees', '0', 'Female', '0', '0', 0, 'EN9Z', 'Ph.D.', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542352185296'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN9Z', 'Ph.D.', 'Feb 14 - June 14', 'July 14 - June 15', 'id1542352203925'),
('sees', '0', 'Male', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 14 - June 15', 'July 15 - June 16', 'id1542352228999'),
('sees', '0', 'Female', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 14 - June 15', 'July 15 - June 16', 'id1542352245756'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 14 - June 15', 'July 15 - June 16', 'id1542352263058'),
('sees', '0', 'Male', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 15 - June 16', 'July 16 - June 17', 'id1542352284120'),
('sees', '0', 'Female', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 15 - June 16', 'July 16 - June 17', 'id1542352308964'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 15 - June 16', 'July 16 - June 17', 'id1542352328627'),
('sees', '0', 'Male', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 16 - June 17', 'July 17 - June 18', 'id1542352417055'),
('sees', '0', 'Female', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 16 - June 17', 'July 17 - June 18', 'id1542352439895'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 16 - June 17', 'July 17 - June 18', 'id1542352464295'),
('sees', '0', 'Male', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 17 - June 18', 'July 18 - June 19', 'id1542352484284'),
('sees', '0', 'Female', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 17 - June 18', 'July 18 - June 19', 'id1542352506874'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 17 - June 18', 'July 18 - June 19', 'id1542352523903'),
('sees', '0', 'Male', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 18 - June 19', 'July 19 - June 20', 'id1542352545927'),
('sees', '0', 'Female', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 18 - June 19', 'July 19 - June 20', 'id1542352569835'),
('sees', '0', 'Transgende', '0', '0', 0, 'EN9Z', 'Ph.D.', 'July 18 - June 19', 'July 19 - June 20', 'id1542352586634'),
('sobiotech', 'None', 'Male', '000000', '0000', 0, 'BT5A', 'M.Sc. Biotechnology (Through JNU)', 'July 18 - June 19', 'July 20 - June 21', 'id1542402913443'),
('ietdavv', 'RAJAT MULEY', 'Male', '435-1703-319', 'Kyphoscoliosis-Muscular Dystro', 50, 'ME4F', 'B.E. (Mechanical Engineering) ï¿½ Full Time', 'July 18 - June 19', 'July 21 - June 22', 'id1542455392432'),
('ietdavv', 'PRINCE DASHORE', 'Male', '133-VH-18', 'Visually Impaired', 40, 'CE4F', 'B.E. (Computer Engineering) ï¿½ Full Time', 'July 18 - June 19', 'July 21 - June 22', 'id1542455673829'),
('ietdavv', 'HRITIK SAHU', 'Male', '110-6-18', 'CTEV Bilateral', 40, 'CE4F', 'B.E. (Computer Engineering) ï¿½ Full Time', 'July 18 - June 19', 'July 21 - June 22', 'id1542455763945'),
('ietdavv', 'TANMAY BANSAL', 'Male', '221-04-18', 'OH (R) Upper Limb', 40, 'CE4F', 'B.E. (Computer Engineering) ï¿½ Full Time', 'July 18 - June 19', 'July 21 - June 22', 'id1542455811794'),
('ietdavv', 'ROHIT SHARMA', 'Male', '118-04-2018', 'Ankle Flat Foot', 40, 'CE4F', 'B.E. (Computer Engineering) ï¿½ Full Time', 'July 18 - June 19', 'July 21 - June 22', 'id1542455851194'),
('soedu', 'Hira Singh', 'Male', '0', 'Orthopedic', 75, 'ED4A', 'B.Ed.', 'July 18 - June 19', 'July 19 - June 20', 'id1542457339505');

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

--
-- Dumping data for table `t2_3_1`
--

INSERT INTO `t2_3_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('saif ', 'saidmsnl%26%2A%28%5E%25%23', '', 'kdjk'),
('pranjal', 'jise+mai+ki+hava+lagi....use+na+dawa+lagi+na+dua+lagi', '', 'difjd'),
('soex', '%95The+department+has+created+an+environment+of+%91learning+by+doing%92.+Every+course+has+been+clubbed+with+certain+set+of+doable+simulation+and+experimentation.+This+has+surely+imbibed+a+culture+of+creative+thinking+among+students%2C+since+their+skill+sets+get+refined+by+observing+the+concepts+getting+realized+by+working+on+those+simulation+and+other+tools.%95The+aim+for+teaching+and+learning+as+envisaged+by+department+is+to+inculcate+independent+and+critical+thinking+among+students.%95Optimum+use+of+ICT+for++knowledge+dissemination+%95Inclusion+of+MOOC+courses+to+the+extent+of+20%25+of+total+credits+required.%95Inclusion+of+minor+project+as+a+part+of+curriculum+in+almost+every+course.%95Departmental+library+is+very+rich+and+possesses+around+11000+plus+books.+Books+are+issued+to+students+as+book+bank+basis.%95All+the+M+Tech+and+MSc+programmes+being+run%2C+are+innovative+and+vocational.+In+fact%2C+two+programmes+of+the+departments+were+sanctioned+by+UGC+as+Innovative+Programme+category.+%95Ebooks%2C+PPTs+of+faculty+and+students+are+posted+on+www.elex.dauniv.ac.in%2FCourseMaterial.php%95Remedial+classes+taken++by+Faculty+and+M.Tech+students+for+academically+weak+M.Sc.+students', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F30-10-2018_15-37-09AQAR_+SoEx+2017-18+%4013Aug2018.doc'),
('sopedu', 'i.Faculties+take+part+in+intramural+competitions+as+a+house+incharge+with+the+students.+It+helps+them+to+learn+administration+and+organization+of+competitions.ii.Faculties+actively+participate+in+various+interclass+tournaments+with+students.+It+helps+them+to+learn+practical+aspects+of+sports+and+games.+iii.Regular+personal+and+group+counseling+is+provided+by+faculty+members+regarding+fitness+aspects%2C+health+aspects%2C+injuries+management%2C+psychological+preparation+etc.iv.Students+are+given+the+opportunity+to+plan+and+preparing+budget+for+the+Intramural+competition%2C+cultural+program%2C+Inter+class+tournaments+etc.+v.Students+are+given+the+opportunity+to+mark+track+and+various+play+ground+in+the+department+as+well+as+in+various+schools+so+they+get+practical+approach+to+use+their+theoretical+concepts.+vi.Our+faculties+provide+theoretical+concepts+and+practical+skills+to+students+and+in+such+a+way+that+they+can+utilize+their+soft+and+hard+skills+to+perform+best.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F30-10-2018_16-01-37New+Revised+-+BPES-I%2CIII+TIME+TABLE+JUly-Dec+2018.pdf'),
('somath', 'Students+are+encouraged+to%281%29+prepare+assignments+on+various+topics+on+subjects+of+their+choice.%282%29+give+seminars+which+carry+credits.%283%29+stay+back+after+regular+teaching+hours+to+discuss+among+themselves+and+also+with+teachers.%284%29+actively+participate+in+class+room+teaching.%285%29+Explaining++the+theory+taught+through+exercises.', '', 'Not+Applicable'),
('biochem', 'Students+are+encouraged+to+participate+in+workshops+organized+by+institutes+and+companies.+During+last+session+Biochemistry+students+have+participated+in+two+such+programs.+For+experiential+learning+trained+researchers+are+invited+to+demonstrate+the+advanced+technology+to+the+learner.+To+train+the+learner+with+an+orientation+of+problem+solving+methodology%2C+they+are+asked+to+analyse+various+experimental+results+related+to+theory+content+in+order+to+enhance+learning+experiences', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_15-46-39QlM+2.3.1.docx'),
('doll', 'Department+is+using+student-+centric+learning+activities+as+like+syllabus+related+workshops+%2C+seminars%2C+group+activities%2C+juries+%2Cpresentations%2C+participation+of+students+in+different+competitions+conduct+inter+department+and+other+institutes.+Regular+follow+ups%2Csurvey%2C+exhibition%2C++counselling+of+faculties+and+students%2C+experiential+learning+through+site+visit%2C+industry+visit%2C+educational+tour+as+well+as+practical+work+with+experts+on+live+sites.+Arrange+special+guest+lectures+on+specific+topics+also.+such+types+of+participatory+learning+activities+which+are+adopted+by+the+faculty+that+contributes+to+holistic+development+and+improved+students+learning%2C+besides+facilitating+lifelong+learning+and+knowledge+management.+Learn+with+talent+and+fun+and+earn+and+make+better+lifestyle+and+contributory+to+society+in+term+of+good+earning%2C+status+and+confidence+as+well+established+citizen+with+discipline+and+perfection.++Student+who+are+educated+may+learn+different+methods+to+use+their+creativity+and+innovation.+Department+is+giving+chance+to+shine+and+work+confidently.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F14-11-2018_13-12-58BROCHURE+PDF.pdf'),
('chemsc', 'The+curricula+designed+for+M.Sc.+programs+ensure+that+students+are+conceptually+sound%2C+able+to+apply+the+concepts+in+practical+situations%2C+analyze+the+outcomes+of+such+practical+application+and+are+in+a+position+to+ask+questions+based+on+the+analysis+and+evolve+new+techniques+and+processes+while+seeking+solutions+to+the+problems.+Further%2C+the+teaching+and+learning+methodologies+adopted+also+supplement+and+complement+theCurriculum.+The+following+measures+are+in+place+to+ensure+enhancement+of+learning+experiences%3A%95Approximately+25%25+of+the+total+credits+earned+are+assigned+for+practicals.%95Powerpoint+presentations+to+supplement+the+theoretical+concepts+and+laboratory+experiments%95Mandatory+institution+%2F+industrial+internship+for+M.Sc.+IV+semester+students.%95Industry+and+employability+centric+courses+offered+by+the+school.%95Advanced+level+of+experiments+considering+green+chemistry+%2F+eco-friendly+approaches.%95Industrial+Training+during+vacation+period+and+projects++carried+out+in+industries%95Training+imparted+for+higher+studies+%96+NET%2F+GATE%2FSET%95Multiple+Choice+Questions+%28MCQ%29+which+test+the+depth+of+understanding+of+concepts%95To+enhance+programming+skills%2C+computational+courses+are+offered%95Tutorial+hours+in+courses+to+hone+the+problem+solving+skills%95Laboratories+equipped+with+illustrative+charts+to+enhance+understanding+of+the+experiments+and+accessories+required.%95Department+organizes+expert+lecture%2Fworkshop%2Fseminars+to+inculcate+scientific+temperament+in+the+students.%95Students+are+supported+to+participate+in+scientific+competitions%2Fconferences+where+they+have+won+many+a+laurel.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F14-11-2018_20-06-57Student+centric+methods.docx'),
('emrcdavv', '-+Media+Courses+have+both+theory+and+practical+components-+Around+50%25+of+the+credits+earned+are+from+Media+Production%2Fpractical+courses.+-+Production+Assignment+and+Exercises+are+to+be+completed+in+Individual++and+team+format+so+as+to+get+an+opportunity+to+develop+individual+and+people+skills.+-+Students+take+live+projects+with+local+production+house%2Findustry+setup.-+Experiential+Learning+is+insured+in+industry+linked+projects-+Documentary+Production%2C+Short+Film%2FFiction+%26+Music+Video+production+develops+problem+solving+abilities+of+students+in+live+working+condition.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_12-55-4300Sample+Document.pdf'),
('solaw', 'Student+centric+methods+including+Power-point+presentations+and+participative+learning+methods+like+group+discussion+and+problem+solving+methods+including+cases+and+moot+court+sessions+are+conducted+to+optimize+learnings+of+the+scholars.+This+is+further+supported+by+activities+like+Legal-aid+camps%2C+thana+visits%2C+Jail+visits.+NGO+visits%2C+etc.+Further%2C+to+enhance+practical+learning+of+subjects+from+Arts+fraternity+of+B.A.LL.B.+%28Hons.%29+program%2C+the+students+are+also+taken+for+visits+to+historical+places+like+Museums%2C+forts%2C+etc.+The+students+are+also+motivated+to+undertake+internships+in+organizations+like+NGOs+for+development+of+social+concerns+and+responsibilities.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F15-11-2018_13-37-062.3.1+Student+Centric+Learning.docx'),
('iipsdavv', 'IIPS+provides+YI+membership+and+runs+student+chapter+with+Indore+Management+association.+Through+these+chapters+IIPS+provides+learning+plateform+to+the+students+wherein+they+get+an+opportunity+to+interact+with+industry+experts+and+get+an+exposure+of+their+theoretical+knowledge+applied.+', '', 'To+be+added');

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2_3_2`
--

INSERT INTO `t2_3_2` (`Username`, `Number_of_teachers_using_ICT`, `Teacher_number`, `ICT_tools`, `ICT_class_numbers`, `smart_classroom_number`, `Eresources_used`, `Link`, `id_time`) VALUES
('admin2', 6, 5, '4', 3, 7, '9', '0', 'id1540571380706'),
('saif ', 8, 9, '9hv', 0, 9, 'hg', 'jhh', 'id1540640711448'),
('pranjal', 638, 25, 'sdsf', 89, 98, 'jsaj', 'hdgsfak', 'id1540659980894'),
('soex', 6, 6, 'Overhead projectors in all classrooms and laboratories', 5, 1, '1.Internet, Wi-Fi, Multimedia projection systems are used in all class rooms. Power point Presentati', 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_15-37-09AQAR_ SoEx 2017-18 @13Aug2018.doc', 'id1540894359024'),
('sostat', 2, 2, 'IT Center', 1, 1, 'yes', 'IT center', 'id1540896959771'),
('sopedu', 7, 10, 'Computer, LCD projects, Website, Lectures on depatt. website', 4, 1, 'e-journals, PPT, e-lectures etc.', 'http://uid.dauniv.ac.in/NAC/profile/docs/30-10-2018_16-09-43Screenshot_2018-10-30 School of Physical Education Lecture(1).png', 'id1540895831460'),
('somath', 3, 3, 'Yes', 2, 0, 'Yes', 'Not Applicable', 'id1540899682615'),
('emrcdavv', 25, 7, 'Digital Projection, Computers, Multimedia Systmes, Wifi Campus, Digital Cameras, Editing Suite, Audi', 9, 9, 'E-Content, Video Lectures, MOOC on Swayam Platform', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_12-55-4300Sample Document.pdf', 'ididid1541230785697'),
('doll', 16, 12, 'LCD Projectors and Computers', 3, 0, 'Internet and Youtube', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_13-05-102.3.2.jpg', 'id1541360082925'),
('chemsc', 6, 6, 'Projectors, Wi-fi/ internet', 3, 0, 'Softwares, Website contents, e-contents', '1', 'idid1542022913593'),
('ietdavv', 72, 80, 'Projector', 999, 0, 'Moodle, NP TEL, Online Courses', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_10-38-38NAAC Empty.docx', 'id1542258658834'),
('iipsdavv', 40, 48, 'LCD projector, OHP, computers ', 1, 1, 'MOODLE,Inflibnet,NPTEL, Shoodhganga', 'To be added', 'id1542014155640');

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

--
-- Dumping data for table `t2_3_3`
--

INSERT INTO `t2_3_3` (`Username`, `Year`, `Student_number`, `Full_time_teacher`, `mentor_ratio`, `id_time`) VALUES
('saif ', 'July 16 - June 17', 45, 2, '22', 'id1540640832857'),
('pranjal', 'July 16 - June 17', 25, 25, '1', 'id1540660073391'),
('somath', 'July 15 - June 16', 100, 3, '1:33', 'id1540817747462'),
('somath', 'July 14 - June 15', 98, 3, '1:32', 'id1540817685933'),
('somath', 'July 16 - June 17', 88, 3, '1:29', 'id1540817784629'),
('somath', 'July 17 - June 18', 77, 3, '1:26', 'id1540817813943'),
('somath', 'July 18 - June 19', 74, 3, '1:25', 'id1540817858079'),
('sopedu', 'July 14 - June 15', 185, 7, '1:26', 'id1540896536167'),
('sopedu', 'July 15 - June 16', 141, 7, '1:20', 'id1540896585115'),
('sopedu', 'July 16 - June 17', 150, 7, '1:21', 'id1540896605805'),
('sopedu', 'July 17 - June 18', 140, 7, '1:20', 'id1540896624905'),
('sopedu', 'July 18 - June 19', 201, 7, '1:29', 'id1540896643199'),
('sostat', 'July 14 - June 15', 52, 2, '52:2', 'id1540974979770'),
('sostat', 'July 15 - June 16', 51, 2, '51:2', 'id1540975142997'),
('sostat', 'July 16 - June 17', 37, 2, '37:2', 'id1540975179709'),
('sostat', 'July 17 - June 18', 31, 2, '31:2', 'id1540975248001'),
('sostat', 'July 18 - June 19', 30, 2, '30:2', 'id1540975295985'),
('emrcdavv', 'July 16 - June 17', 230, 7, '1:33', 'id1542111898344'),
('emrcdavv', 'July 15 - June 16', 227, 7, '1:32', 'idid1541231282226'),
('sees', 'July 17 - June 18', 26, 3, '8.66', 'id1541223626400'),
('sees', 'July 18 - June 19', 30, 3, '10', 'id1541223870892'),
('biochem', 'July 18 - June 19', 38, 3, '1:13', 'id1541240811879'),
('doll', 'July 14 - June 15', 46, 1, '1:46', 'id1541360929822'),
('doll', 'July 15 - June 16', 72, 1, '1:72', 'id1541361069788'),
('doll', 'July 16 - June 17', 79, 1, '1:79', 'id1541361180926'),
('doll', 'July 17 - June 18', 90, 1, '1:90', 'id1541361245617'),
('doll', 'July 18 - June 19', 91, 1, '1:91', 'id1541361289614'),
('chemsc', 'July 17 - June 18', 102, 6, '17:1', 'idid1542023099770'),
('emrcdavv', 'July 14 - June 15', 229, 7, '1:33', 'idid1541231254067'),
('emrcdavv', 'Feb 14 - June 14', 209, 7, '1:30', 'idid1541230944874'),
('emrcdavv', 'July 17 - June 18', 247, 6, '1:41', 'id1542111906263'),
('iipsdavv', 'July 14 - June 15', 1791, 48, '1:37', 'id1542014329315'),
('iipsdavv', 'July 15 - June 16', 1710, 48, '1:35', 'id1542014355947'),
('iipsdavv', 'July 16 - June 17', 1628, 48, '1:34', 'id1542014364904'),
('iipsdavv', 'July 17 - June 18', 1706, 48, '1:35', 'id1542014373351'),
('ietdavv', 'July 17 - June 18', 2612, 80, '1`:32', 'idid1542260077037'),
('ietdavv', 'July 18 - June 19', 2602, 80, '1:32', 'idid1542260447575'),
('solaw', 'July 18 - June 19', 339, 3, '113:1', 'id1542272370637');

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

--
-- Dumping data for table `t2_4_1`
--

INSERT INTO `t2_4_1` (`Username`, `Teacher_name`, `Pan_no`, `Designation`, `Number_of_sanctioned_post_ug`, `Number_of_sanctioned_post_pg`, `Year_of_appointment`, `id_time`) VALUES
('saif ', 'jggk', '56', 'hk', 3, 23, '878', 'id1540641050123'),
('somath', 'Dr. Dinesh K. Panchal', 'ACJPP3219P', 'Reader', 0, 7, '2009', 'idid1540641617876'),
('somath', 'Dr. Mahesh Dumaldar', 'AFOPD8198M', 'Associate professor', 0, 7, '1999', 'idid1540641534533'),
('somath', 'Dr. K. N. Rajeswari', 'ABVPR8072P', 'Professor', 0, 7, '1989', 'idid1540641502371'),
('pranjal', 'gf', '25', 'vftu', 14, 26, '2014', 'id1540660110317'),
('sostat', 'Dr. Shakti Banerjee', 'ABMPB4109Q', 'Professor', 2, 2, '28-03-1989', 'id1540882476561'),
('sostat', 'Dr. Snigdha Banerjee', 'AFLPB9928C', 'Professor', 2, 2, '09-09-1981', 'id1540882492656'),
('soex', 'Dr. Sumant Katiyal', 'ACSPK9420G', 'Professor', 0, 10, '1990', 'id1540894677540'),
('soex', 'Dr. Abhay Kumar', 'ACNPK4916E', 'Professor', 0, 10, '1990', 'id1540894811179'),
('soex', 'Ms. Pratibha  M. Umale', 'ACFPU6371H', 'Assistant Professor', 0, 10, '2006', 'id1540895308361'),
('soex', 'Dr. Manju K. Chattopadhyay', 'AHQPC6458F', 'Assistant Professor', 0, 10, '2007', 'id1540895340271'),
('soex', 'Ms Kirti Panwar Bhati', 'AKXPP5787E', 'Assistant Professor', 0, 10, '2007', 'id1540895347624'),
('soex', 'Mr Rameez Raja Chowdhary', 'ARUPC4747K', 'Lecturer', 0, 10, '2010', 'id1540895376951'),
('soex', 'Mr. Nitesh Karmakar', 'CFDPK6821F', 'Lecturer', 0, 10, '2015', 'id1540895384519'),
('soex', 'Mr. Nitin Meena', 'ANUPM4177B', 'Lecturer', 0, 10, '2015', 'id1540895392542'),
('sopedu', 'Prof. Deepak Mehta', 'AGSPM7490A', 'Professor and HEAD', 7, 7, '1990', 'id1540896992364'),
('sopedu', 'Prof. S K Yadav', 'AAZPY3874F', 'Professor', 7, 7, '1990', 'id1540897064806'),
('sopedu', 'Prof. Sudhira Chandel', 'AATPC6392C', 'Professor', 7, 7, '1990', 'id1540897075938'),
('sopedu', 'Prof. Ajay Kumar', 'ACPPK3618R', 'Professor', 7, 7, '1991', 'id1540897090623'),
('sopedu', 'Dr. V F Peter', 'AJVPP3152C', 'Associate Professor', 7, 7, '1999', 'id1540897109865'),
('sopedu', 'Dr. Mukesh Solanki', 'ARKPS3618R', 'Senior Assistant Professor', 7, 7, '2007', 'id1540897120442'),
('sopedu', 'Dr. Vivek B Sathe', 'APHPS9564F', 'Senior Assistant Professor', 7, 7, '2007', 'id1540897129686'),
('emrcdavv', 'Dr. Narayan Patidar', 'PXPP5073Q', 'Assistant Professor', 0, 7, '2007', 'ididid1541233545342'),
('emrcdavv', 'Dr. Akhilesh Kumar Singh', 'AEXPS9153B', 'Director', 0, 7, '1991', 'ididid1541233374112'),
('emrcdavv', 'Dr. Chandan Gupta', 'ABSPG3992N', 'Professor', 0, 7, '1991', 'ididid1541233438375'),
('emrcdavv', 'Archana Somashekar', 'APFPS1162R', 'Assistant Professor', 0, 7, '2000', 'ididid1541233450534'),
('emrcdavv', 'Kamlesh Chouhan', 'AFDPC2275D', 'Assistant Professor', 0, 7, '2006', 'ididid1541233471239'),
('sees', 'Dr. R.N. Singh', 'AHFPS2856L', 'Professor', 0, 7, '3/8/2009', 'id1541233793370'),
('sees', 'Dr. S.P.Singh', 'ALYPS6462M', 'Professor and Head', 0, 7, '20/06/1990', 'id1541225209902'),
('sees', 'Dr. R.Chaudhary', 'ADOPC0402D', 'Professor', 0, 7, '25/10/1999', 'id1541233901695'),
('doll', 'Dr. Bharti Joshi', 'ADUPJO432C', 'Associate Professor', 3, 3, '1999', 'id1541361443492'),
('biochem', 'Dr S.M. Gokhale', 'ACJPG8462D', 'Reader', 0, 6, '1993', 'id1541747917022'),
('biochem', 'Dr Rekha Gadre', 'ACDPG7508C', 'Professor', 0, 6, '1989', 'id1541747695828'),
('biochem', 'Dr Meeta jain', 'AERPJ2787A', 'Reader', 0, 6, '2000', 'id1541747974011'),
('emrcdavv', 'Dr. Lalit Engle', 'AAHPI1232M', 'Assistant Professor', 0, 7, '2007', 'ididid1541233522463'),
('chemsc', 'Dr.Pratibha Sharma', 'AEXPS8018R', 'Professor', 0, 11, '1990', 'idid1542190667864'),
('chemsc', 'Dr.Sheela Joshi', 'ABHPJ9573B', 'Professor', 0, 11, '1989', 'idid1542190666705'),
('chemsc', 'Dr.H.P.S. Chauhan', 'AAYPC2710P', 'Professor', 0, 11, '1991', 'idid1542190665608'),
('chemsc', 'Dr.A.V.Bajaj', 'AEDPB2965E', 'Professor', 0, 11, '1981', 'idid1542190596078'),
('chemsc', 'Dr. Ashok Kumar', 'ACSPK9495R', 'Professor', 0, 11, '1985', 'idid1542190581230'),
('chemsc', 'Dr.Savita Khare', 'AHXPK4846L', 'Professor', 0, 11, '1990', 'idid1542190668810'),
('ietdavv', 'Mr.PRAVEEN SINGH', 'BYSPS6574E', 'ASSISTANT PROFESSOR', 99, 99, '8/17/2007', 'id1542257210039'),
('ietdavv', 'Mrs.SEEMA CHOUHAN', 'ANEPC9252B', 'ASSISTANT PROFESSOR', 99, 99, '8/22/2007', 'id1542257211041'),
('ietdavv', 'Dr.SHASHI PRAKASH', 'ACAPP3559P', 'PROFESSOR', 99, 99, '8/17/2007', 'id1542257208991'),
('ietdavv', 'Mrs.NILIMA KARANKAR', 'BCGPK5261E', 'ASSISTANT PROFESSOR', 99, 99, '8/16/2007', 'id1542257206939'),
('ietdavv', 'Dr.AJAY VERMA', 'AAQPB5230R', 'PROFESSOR', 99, 99, '8/17/2007', 'id1542257207940'),
('ietdavv', 'Dr.VRINDA TOKEKAR', 'AASPT7232R', 'PROFESSOR', 99, 99, '8/16/2007', 'id1542257203674'),
('ietdavv', 'Mr.ARPIT AGRAWAL', 'AJLPA6663M', 'ASSISTANT PROFESSOR', 99, 99, '8/16/2007', 'id1542257205905'),
('ietdavv', 'Dr.RAVI SINDAL', 'AQSPS4549L', 'PROFESSOR', 99, 99, '8/16/2007', 'id1542256929345'),
('ietdavv', 'Dr.SHARAD CHAUDHARY', 'AESPC0615F', 'ASSISTANT PROFESSOR', 99, 99, '8/16/2007', 'id1542256930424'),
('ietdavv', 'Dr.PRATOSH BANSAL', 'AEWPB6802P', 'PROFESSOR', 99, 99, '8/16/2007', 'id1542256928281'),
('ietdavv', 'Dr.RUCHI SINGH', 'ADUPS9841G', 'LECTURER ON CONTRACT', 99, 99, '11/17/2006', 'id1542256925849'),
('ietdavv', 'Mr.AMIT MITTAL', 'APJPM2025B', 'ASSISTANT PROFESSOR', 99, 99, '7/20/2007', 'id1542256927168'),
('ietdavv', 'Dr.JITENDRA SINGH', 'DNZPS4542C', 'LECTURER ON CONTRACT', 99, 99, '11/17/2006', 'id1542256921633'),
('ietdavv', 'Mr.PRAVIN KARMA', 'ALHPK0165A', 'ASSISTANT PROFESSOR', 99, 99, '10/1/2003', 'id1542256918454'),
('ietdavv', 'Dr.ASHESH TIWARI', 'ACBPT5173G', 'PROFESSOR', 99, 99, '12/31/2004', 'id1542256920557'),
('ietdavv', 'Mrs.MADHVI JANGALWA', 'AETPJ8791A', 'ASSISTANT PROFESSOR', 99, 99, '10/18/2003', 'id1542256919418'),
('ietdavv', 'Dr.UMA BHATT', 'AIFPR7716R', 'ASSISTANT PROFESSOR', 99, 99, '10/1/2003', 'id1542256915714'),
('ietdavv', 'Dr.SUWARNA TORGAL', 'ADTPT6184A', 'ASSISTANT PROFESSOR', 99, 99, '9/27/2003', 'id1542256644391'),
('ietdavv', 'Dr.PRATIBHA SINGH', 'BCNPS2153Q', 'ASSISTANT PROFESSOR', 99, 99, '10/1/2003', 'id1542256645561'),
('ietdavv', 'Mr.VIJAY KARMA', 'ALGPK9006P', 'ASSISTANT PROFESSOR', 99, 99, '9/24/2003', 'id1542256643251'),
('ietdavv', 'Mr.LALIT GEHLOD', 'AGYPG3025F', 'ASSISTANT PROFESSOR', 99, 99, '9/24/2003', 'id1542256641048'),
('ietdavv', 'Mr.PRIYADARSHI ASHOK DAHAT', 'AITPD3747J', 'ASSISTANT PROFESSOR', 99, 99, '9/24/2003', 'id1542256642189'),
('ietdavv', 'Dr.VIVEK KAPOOR', 'AKBPK4251A', 'ASSISTANT PROFESSOR', 99, 99, '9/24/2003', 'id1542256639741'),
('ietdavv', 'Mr.HEMANT MAKWANA', 'AHEPM1450D', 'ASSOCIATE PROFESSOR', 99, 99, '3/10/2003', 'id1542256634790'),
('ietdavv', 'Dr. DHIRAJ NITNAWARE', 'ADTPN4354L', 'ASSISTANT PROFESSOR', 99, 99, '1/10/2003', 'id1542256633623'),
('ietdavv', 'Mr.AJEET BERGALEY', 'AHLPB9356Q', 'LECTURER ON CONTRACT', 99, 99, '8/4/2002', 'id1542256632407'),
('ietdavv', 'Dr.SHAILENDRA SINGH KHINCHI', 'ALGPK9222M', 'ASSISTANT PROFESSOR', 99, 99, '6/2/2002', 'id1542256631240'),
('ietdavv', 'Dr.DEVENDRA SINGH VERMA', 'ADEPV2707N', 'ASSISTANT PROFESSOR', 99, 99, '9/7/2001', 'id1542256488281'),
('ietdavv', 'Mrs.MALA DUTTA', 'AEZPD4423P', 'ASSISTANT PROFESSOR', 99, 99, '4/16/2001', 'id1542256479524'),
('ietdavv', 'Dr.GOVIND MAHESHWARI', 'AKZPG4970E', 'ASSOCIATE PROFESSOR', 99, 99, '1/30/2001', 'id1542256478398'),
('ietdavv', 'Dr.VAIBHAV JAIN', 'AEUPJ2238M', 'ASSISTANT PROFESSOR', 99, 99, '11/22/2000', 'id1542256477180'),
('ietdavv', 'Dr.GEND LAL PRAJAPATI', 'BEDPP5100E', 'ASSOCIATE PROFESSOR', 99, 99, '8/17/2000', 'id1542256475285'),
('ietdavv', 'Dr.NAGENDRA SOHANI', 'ANQPS5974A', 'ASSOCIATE PROFESSOR', 99, 99, '3/23/1998', 'id1542256428033'),
('ietdavv', 'Mrs.SHIVANGI BANDE', 'ABMPB3912H', 'ASSOCIATE PROFESSOR', 99, 99, '8/10/1997', 'id1542256399647'),
('ietdavv', 'Mr. SHAHID KHILJI', 'ADXPK3103C ', 'ASSISTANT PROFESSOR', 99, 99, '1/10/1997', 'id1542256286581'),
('ietdavv', 'Dr.Sanjiv Tokekar', 'ABVPT5358A', 'PROFESSOR', 99, 99, '3192001', 'idid1542191806752'),
('ietdavv', 'Dr.SUFIA AZIZ', 'AJYPA8331R', 'ASSISTANT PROFESSOR', 99, 99, '8/24/2007', 'id1542257211964'),
('ietdavv', 'Dr.ROHIT PATHAK', 'AJZPP1616R', 'ASSISTANT PROFESSOR', 99, 99, '8/25/2007', 'id1542257213107'),
('ietdavv', 'Mr.CHANDRA SHEKHAR CHAUHAN', 'AKLPC3787B', 'ASSISTANT PROFESSOR', 99, 99, '8/30/2007', 'id1542257215490'),
('ietdavv', 'Mrs.BHAWNA NIGAM', 'AHBPN1341H', 'ASSISTANT PROFESSOR', 99, 99, '8/30/2007', 'id1542257468950'),
('ietdavv', 'Mrs.JYOTI HAWELIYA', 'BRRPS8295Q', 'ASSISTANT PROFESSOR', 99, 99, '9/7/2007', 'id1542257470128'),
('ietdavv', 'Mr.JITENDRA SONI', 'BRBPS6828R', 'ASSISTANT PROFESSOR', 99, 99, '9/8/2007', 'id1542257471074'),
('ietdavv', 'Dr.VAIBHAV NEEMA', 'ADOPN8379C', 'ASSISTANT PROFESSOR', 99, 99, '9/15/2007', 'id1542257472023'),
('ietdavv', 'Dr.DHEERAJ MANDLOI', 'AHVPM0406C', 'ASSISTANT PROFESSOR', 99, 99, '10/10/2007', 'id1542257473022'),
('ietdavv', 'Mr.ASHISH JAIN', 'AFKPJ2339E', 'ASSOCIATE PROFESSOR', 99, 99, '11/17/2007', 'id1542257473944'),
('ietdavv', 'Dr.RAKSHA UPADHYAY', 'AAMPU9444J', 'ASSOCIATE PROFESSOR', 99, 99, '11/29/2007', 'id1542257474931'),
('ietdavv', 'Mr.SANTOSH KANSAL', 'CNSPK6429C', 'LECTURER ON CONTRACT', 99, 99, '1/9/2008', 'id1542257476200'),
('ietdavv', 'Mrs.AARTI SHARAN', 'BKFPS2874G', 'LECTURER ON CONTRACT', 99, 99, '6/8/2009', 'id1542257478718'),
('ietdavv', 'Dr.AMIT GUPTA', 'AKZPG4970E', 'ASSISTANT PROFESSOR', 99, 99, '7/7/2009', 'id1542257481760'),
('solaw', 'Dr. Archana Ranka', 'ABJPC2604A', 'Reader', 5, 0, '2008', 'ididid1542178076214'),
('solaw', 'Dr. Himanshu Pandey', 'BEPPP1221Q', 'Lecturer', 5, 0, '2007', 'idid1542194045576'),
('solaw', 'Dr. Nidhi Kumar Tiwari', 'ACLPT7790D', 'Lecturer', 5, 0, '2012', 'idid1542194113206'),
('solaw', 'Ms. Deepmala Jaitpuri', 'ALLPJ1385R', 'Lecturer', 5, 0, '2012', 'idid1542194165523'),
('solaw', 'Ms. Padma Singh', 'asa', 'Lecturer', 5, 0, '2013', 'idid1542194190680'),
('solaw', 'Ms. Bharti Joshi', 'AHXPJ7472M', 'Lecturer', 5, 0, '2015', 'idid1542194222750'),
('solaw', 'Mr. Vivek Kumar Goyal', 'BBXPG5033Q', 'Lecturer', 5, 0, '2015', 'idid1542194252840'),
('solaw', 'Ms. Anamica Shrivastav', 'BVYPS6540M', 'Lecturer', 5, 0, '2015', 'idid1542194275454'),
('solaw', 'Dr. Neerja Patne', 'BAVPP0262R', 'Lecturer', 5, 0, '2016', 'idid1542194332055'),
('asc', 'Namrata Sharma', 'AMGPS9241R', 'Director/Professor', 0, 3, '1994', 'id1542268895187'),
('asc', 'Bhumesh Gupta', 'ABSPG3365R', 'Professor', 0, 3, '1989', 'id1542268977182'),
('asc', 'Jayshree Bansal', 'AIFPB4628L', 'Senior Lecturer', 0, 3, '2008', 'id1542269003572'),
('sopharma', 'Dr. Rajesh Sharma', 'AVGPS0915F', 'Professor and Head', 20, 6, '2001', 'id1542269660395'),
('sopharma', 'Dr. Gajendra Pratap Choudhary', 'AEPPC2393K', 'Reader', 20, 6, '2003', 'id1542269680195'),
('sopharma', 'Dr. Tamanna Narsinghani', 'ADQPN4205R', 'Reader', 20, 6, '2006', 'id1542269698054'),
('sopharma', 'Dr. Nidhi Dubey', 'AHRPD3968L', 'Reader', 20, 6, '2006', 'id1542269711995'),
('sopharma', 'Dr. Love Kumar  Soni', 'AQRPS1101R', 'Reader', 20, 6, '2009', 'id1542269732126'),
('sopharma', 'Dr. Rashmi Dahima', 'AKSPD1970G', 'Lecturer Stage III', 20, 6, '2003', 'id1542269746406'),
('sopharma', 'Dr. Masheer Ahmed Khan', 'ATZPK4810A', 'Lecturer Stage II', 20, 6, '2006', 'id1542269761644'),
('sopharma', 'Dr. E.Manivannan', 'AAMPE4165G', 'Lecturer', 20, 6, '2006', 'id1542269779648'),
('sopharma', 'Dr. Anupama Akanksh Parate', 'AJGPP3938H', 'Lecturer', 20, 6, '2009', 'id1542269795905'),
('sopharma', 'Dr. Mukesh Chandra Sharma', 'BQOPS9721D', 'Lecturer', 20, 6, '2009', 'id1542269822557'),
('sopharma', 'Dr. Jitendra Sainy', 'CJQPS9225N', 'Lecturer', 20, 6, '2009', 'id1542269840089'),
('sopharma', 'Mrs. Apeksha Saraf', 'AEPPL4159Q', 'Lecturer', 20, 6, '2009', 'id1542269854937'),
('sopharma', 'Dr. Gajanand Engla', 'AAJPE7619J', 'Lecturer', 20, 6, '2009', 'id1542269869237'),
('sopharma', 'Dr. Mayank Sharma', 'DXQPS7691R', 'Lecturer (on contract)', 20, 6, '2015', 'id1542269885504'),
('sopharma', 'Mr. Devashish Rathore', 'AKQPR8187F', 'Lecturer (on contract)', 20, 6, '2015', 'id1542269901503'),
('sopharma', 'Mr. Mahendra Chouhan', 'AUPPC3860M', 'Lecturer (on contract)', 20, 6, '2015', 'id1542269918121'),
('sopharma', 'Mr. Manoj Rathore', 'AYKPR6878F', 'Lecturer (on contract)', 20, 6, '2015', 'id1542269947168'),
('iipsdavv', 'Dr A K sapre', 'AEOPS2017M', 'Professor', 0, 69, '2007', 'id1542014478410'),
('iipsdavv', 'Dr B K Tripathi', 'AASPT7349F', 'Professor', 0, 69, '2007', 'id1542014522814');

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

--
-- Dumping data for table `t2_4_2`
--

INSERT INTO `t2_4_2` (`Username`, `Year`, `PHD_Teacher`, `Teacher`, `id_time`) VALUES
('ddukkdavv', 'July 17 - June 18', 0, 0, 'id1540634809784'),
('ddukkdavv', 'July 16 - June 17', 0, 0, 'id1540634797861'),
('ddukkdavv', 'July 15 - June 16', 0, 0, 'id1540634761329'),
('saif ', 'July 16 - June 17', 3233, 23, 'id1540641102233'),
('somath', 'July 14 - June 15', 3, 3, 'id1540641662425'),
('somath', 'July 15 - June 16', 3, 3, 'id1540641667576'),
('somath', 'July 16 - June 17', 3, 3, 'id1540641704660'),
('somath', 'July 17 - June 18', 3, 3, 'id1540641713018'),
('somath', 'July 18 - June 19', 3, 3, 'id1540641721723'),
('pranjal', 'July 15 - June 16', 25, 255, 'id1540660144468'),
('sostat', 'July 15 - June 16', 2, 2, 'id1540882896995'),
('sostat', 'July 14 - June 15', 2, 2, 'id1540882830859'),
('sostat', 'July 16 - June 17', 2, 2, 'id1540882911604'),
('sostat', 'July 17 - June 18', 2, 2, 'id1540882916796'),
('sostat', 'July 18 - June 19', 2, 2, 'id1540882924525'),
('soex', 'July 17 - June 18', 3, 5, 'id1540894821251'),
('sopedu', 'Feb 14 - June 14', 7, 7, 'id1540897331982'),
('sopedu', 'July 14 - June 15', 7, 7, 'id1540897344859'),
('sopedu', 'July 15 - June 16', 7, 7, 'id1540897351713'),
('sopedu', 'July 16 - June 17', 7, 7, 'id1540897358805'),
('sopedu', 'July 17 - June 18', 7, 7, 'id1540897369693'),
('sopedu', 'July 18 - June 19', 7, 7, 'id1540897378299'),
('emrcdavv', 'July 16 - June 17', 7, 4, 'idid1541233755912'),
('emrcdavv', 'July 15 - June 16', 7, 2, 'idid1541233746367'),
('emrcdavv', 'July 14 - June 15', 7, 2, 'idid1541233716951'),
('emrcdavv', 'Feb 14 - June 14', 7, 2, 'idid1541233688399'),
('sees', 'Feb 14 - June 14', 3, 3, 'id1541227603206'),
('sees', 'July 14 - June 15', 3, 3, 'id1541234075912'),
('sees', 'July 15 - June 16', 3, 3, 'id1541234079916'),
('sees', 'July 16 - June 17', 3, 3, 'id1541234086120'),
('sees', 'July 17 - June 18', 3, 3, 'id1541234092526'),
('sees', 'July 18 - June 19', 3, 3, 'id1541234095363'),
('biochem', 'July 14 - June 15', 5, 5, 'id1541588969796'),
('biochem', 'July 15 - June 16', 5, 5, 'id1541588999147'),
('biochem', 'July 16 - June 17', 3, 3, 'id1541589014486'),
('biochem', 'July 17 - June 18', 3, 3, 'id1541589024806'),
('biochem', 'July 18 - June 19', 3, 3, 'id1541589033925'),
('solaw', 'July 14 - June 15', 2, 5, 'id1542099125148'),
('solaw', 'July 15 - June 16', 3, 4, 'id1542099376131'),
('solaw', 'July 16 - June 17', 2, 5, 'id1542099463548'),
('solaw', 'July 17 - June 18', 2, 5, 'id1542099478699'),
('emrcdavv', 'July 17 - June 18', 6, 4, 'idid1541233767471'),
('emrcdavv', 'July 18 - June 19', 6, 4, 'idid1541233775991'),
('doll', 'Feb 14 - June 14', 1, 1, 'id1542227093478'),
('chemsc', 'July 14 - June 15', 8, 8, 'id1542206785262'),
('chemsc', 'July 15 - June 16', 8, 8, 'id1542206826079'),
('chemsc', 'July 16 - June 17', 7, 7, 'id1542206837805'),
('chemsc', 'July 17 - June 18', 6, 6, 'id1542206846789'),
('chemsc', 'July 18 - June 19', 6, 4, 'id1542206854124'),
('iipsdavv', 'July 14 - June 15', 27, 48, 'id1542208627126'),
('iipsdavv', 'July 15 - June 16', 29, 48, 'id1542208633521'),
('iipsdavv', 'July 16 - June 17', 31, 48, 'id1542208639271'),
('iipsdavv', 'July 17 - June 18', 35, 48, 'id1542208649146'),
('ietdavv', 'July 14 - June 15', 24, 51, 'id1542263802505'),
('ietdavv', 'July 15 - June 16', 25, 51, 'id1542263883654'),
('ietdavv', 'July 16 - June 17', 28, 51, 'id1542263901581'),
('ietdavv', 'July 17 - June 18', 30, 50, 'id1542263911975'),
('ietdavv', 'July 18 - June 19', 32, 49, 'id1542263944282'),
('imsdavv', 'Feb 14 - June 14', 20, 24, 'id1542266729734'),
('imsdavv', 'July 14 - June 15', 20, 23, 'id1542266806350'),
('imsdavv', 'July 15 - June 16', 21, 23, 'id1542266877098'),
('imsdavv', 'July 16 - June 17', 21, 22, 'id1542266891939'),
('imsdavv', 'July 17 - June 18', 21, 22, 'id1542266924746'),
('imsdavv', 'July 18 - June 19', 21, 22, 'id1542266958198'),
('asc', 'Feb 14 - June 14', 3, 3, 'id1542268700265'),
('sopharma', 'July 18 - June 19', 11, 12, 'id1542298849216'),
('sopharma', 'July 17 - June 18', 11, 12, 'id1542298895451'),
('sopharma', 'July 16 - June 17', 11, 13, 'id1542298914566'),
('sopharma', 'July 15 - June 16', 9, 13, 'id1542298938852'),
('sopharma', 'July 14 - June 15', 9, 13, 'id1542298953685');

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

--
-- Dumping data for table `t2_4_3`
--

INSERT INTO `t2_4_3` (`Username`, `Teacher_name`, `Pan_no`, `Designation`, `Name_of_Dept`, `Experience`, `id_time`) VALUES
('saif ', 'saio', '2', 'hgjh', 'hgf', '12336', 'id1540641209627'),
('somath', 'Dr. K. N. Rajeswari', 'ABVPR8072P', 'professor', 'School of Mathematics', '352', 'idid1540641748763'),
('somath', 'Dr. Mahesh Dumaldar', 'AFOPD8198M', 'Associate professor', 'School of Mathematics', '228', 'idid1540641800710'),
('somath', 'Dr. Dinesh K. Panchal', 'ACJPP3219P', 'Reader', 'School of Mathematics', '108', 'idid1540641885961'),
('pranjal', 'dgh', '2', 'gjgj', 'saif', '125', 'id1540660169054'),
('sostat', 'Dr. Snigdha Banerjee', 'AFLPB9928C', 'Professor', 'School of Statistics', '421', 'id1540883166277'),
('sostat', 'Dr. Shakti Banerjee', 'ABMPB4109Q', 'Professor', 'School of Statistics', '324', 'id1540883011017'),
('soex', 'Dr. Sumant Katiyal', 'ACSPK9420G', 'Professor ', 'School of Electronics', '396', 'id1540894847162'),
('soex', 'Dr. Abhay Kumar', 'ACNPK4916E', 'Professor ', 'School of Electronics', '336', 'id1540897782397'),
('soex', 'Ms. Pratibha  M. Umale', 'ACFPU6371H', 'Assistant Professor', 'School of Electronics', '144', 'id1540897787468'),
('soex', 'Dr. Manju K. Chattopadhyay', 'AHQPC6458F', 'Assistant Professor', 'School of Electronics', '168', 'id1540897794199'),
('soex', 'Ms Kirti Panwar Bhati', 'AKXPP5787E', 'Assistant Professor', 'School of Electronics', '134', 'id1540897799894'),
('soex', 'Mr Rameez Raja Chowdhary', 'ARUPC4747K', 'Lecturer', 'School of Electronics', '96', 'id1540897804478'),
('soex', 'Mr. Nitesh Karmakar', 'CFDPK6821F', 'Lecturer', 'School of Electronics', '60', 'id1540897809973'),
('soex', 'Mr. Nitin Meena', 'ANUPM4177B', 'Lecturer', 'School of Electronics', '48', 'id1540897816398'),
('sopedu', 'Prof. Deepak Mehta', 'AGSPM7490A', 'Professor and Head', 'School of Physical Education, DAVV', '342', 'id1540897623847'),
('sopedu', 'Prof. S K Yadav', 'AAZPY3874F', 'Professor', 'School of Physical Education, DAVV', '342', 'id1540897818551'),
('sopedu', 'Prof. Sudhira Chandel', 'AATPC6392C', 'Professor', 'School of Physical Education, DAVV', '342', 'id1540897830908'),
('sopedu', 'Prof. Ajay Kumar', 'ACPPK3618R', 'Professor', 'School of Physical Education, DAVV', '325', 'id1540897840483'),
('sopedu', 'Dr. V F Peter', 'AJVPP3152C', 'Associate Professor', 'School of Physical Education, DAVV', '228', 'id1540897850528'),
('sopedu', 'Dr. Mukesh Solanki', 'ARKPS3618R', 'Senior Assistant Professor', 'School of Physical Education, DAVV', '132', 'id1540897858978'),
('sopedu', 'Dr. Vivek B Sathe', 'APHPS9564F', 'Senior Assistant Professor', 'School of Physical Education, DAVV', '132', 'id1540897873281'),
('sees', 'Dr. S.P.Singh', 'ALYPS6462M', 'Professor and Head', 'School of Energy & Environmental Studies', '350', 'id1541234201806'),
('sees', 'Dr. R.N. Singh', 'AHFPS2856L', 'Professor ', 'School of Energy & Environmental Studies', '158', 'id1541234285657'),
('sees', 'Dr. R.Chaudhary', 'ADOPC0402D', 'Professor ', 'School of Energy & Environmental Studies', '278', 'id1541234339782'),
('emrcdavv', 'Dr. Akhilesh Kumar Singh', 'AEXPS9153B', 'Director', 'EMRC', '324', 'id1541233793655'),
('emrcdavv', 'Dr. Chandan Gupta', 'ABSPG3992N', 'Professor', 'EMRC', '324', 'id1541237126974'),
('emrcdavv', 'Archana Somashekar', 'APFPS1162R', 'Assistant Professor', 'EMRC', '228', 'id1541237178189'),
('emrcdavv', 'Kamlesh Chouhan', 'APXDPC2275D', 'Assistant Professor', 'EMRC', '126', 'id1541237200902'),
('emrcdavv', 'Dr. Lalit Engle', 'AAHPI1232M', 'Assistant Professor', 'EMRC', '252', 'id1541237218582'),
('emrcdavv', 'Dr. Narayan Patidar', 'APXPP5073Q', 'Assistant Professor', 'EMRC', '144', 'id1541237234854'),
('doll', 'Dr. Bharti Joshi', 'ADUPJO432C', 'Associate Professor', 'Department of Lifelong Learning', '228', 'id1541361598265'),
('biochem', 'Dr Rekha Gadre', 'ACDPG7508C', 'Professor', 'School of Biochemistry', '480', 'id1541589147750'),
('solaw', 'Dr. Archana Ranka', 'ABJPC2604A', 'Reader', 'Schoola of Law', '240', 'id1542178283118'),
('chemsc', 'Dr. Pratibha Sharma', 'AEXPS8018R', 'Professor', 'School of Chemical Sciences', '339', 'id1542206985638'),
('chemsc', 'Dr.Sheela Joshi', 'ABHPJ9573B', 'Professor', 'School of Chemical Sciences', '356', 'id1542206984175'),
('chemsc', 'Dr.H.P.S. Chauhan', 'AAYPC2710P', 'Professor', 'School of Chemical Sciences', '327', 'id1542206982798'),
('chemsc', 'Dr.Ashok Kumar', 'ACSPK 9495R', 'Professor', 'School of Chemical Sciences', '395', 'id1542206881462'),
('chemsc', 'Dr.A.V.Bajaj', 'AEDPB2965E', 'Professor', 'School of Chemical Sciences', '453', 'id1542206981319'),
('chemsc', 'Dr.Savita Khare', 'AHXPK4846L', 'Professor', 'School of Chemical Sciences', '338', 'id1542206987070'),
('Asc', 'Dr.Namrata Sharma', 'AMGPS9241R', 'Director/Professor', 'UGC-Human Resource Development Centre', '288', 'idid1542259845560'),
('Asc', 'Dr.Bhumesh Gupta', 'ABSPG3365R', 'Professor', 'UGC-Human Resource Development Centre', '348', 'idid1542259979822'),
('Asc', 'Dr.Jayshreee Bansal', 'AIFPB4628L', 'Senior Lecturer', 'UGC-Human Resource Development Centre', '120', 'idid1542260068887'),
('sopharma', 'Dr. Rajesh Sharma', 'AVGPS0915F', 'Professor and Head', 'School of Pharmacy', '180', 'id1542269974272'),
('sopharma', 'Dr. Gajendra Pratap Choudhary', 'AEPPC2393K', 'Reader', 'School of Pharmacy', '141', 'id1542270028780'),
('sopharma', 'Dr. Tamanna Narsinghani', 'ADQPN4205R', 'Reader', 'School of Pharmacy', '175', 'id1542270057848'),
('sopharma', 'Dr. Nidhi Dubey', 'AHRPD3968L', 'Reader', 'School of Pharmacy', '175', 'id1542270077063'),
('sopharma', 'Dr. Love Kumar  Soni', 'AQRPS1101R', 'Reader', 'School of Pharmacy', '158', 'id1542270093428'),
('sopharma', 'Dr. Rashmi Dahima', 'AKSPD1970G', 'Lecturer Stage III', 'School of Pharmacy', '180', 'id1542270109030'),
('sopharma', 'Dr. Masheer Ahmed Khan', 'ATZPK4810A', 'Lecturer Stage II', 'School of Pharmacy', '182', 'id1542270127427'),
('sopharma', 'Dr. E.Manivannan', 'AAMPE4165G', 'Lecturer', 'School of Pharmacy', '141', 'id1542270145427'),
('sopharma', 'Dr. Anupama Akanksh Parate', 'AJGPP3938H', 'Lecturer', 'School of Pharmacy', '126', 'id1542270164444'),
('sopharma', 'Dr. Mukesh Chandra Sharma', 'BQOPS9721D', 'Lecturer', 'School of Pharmacy', '144', 'id1542270180470'),
('sopharma', 'Dr. Jitendra Sainy', 'CJQPS9225N', 'Lecturer', 'School of Pharmacy', '131', 'id1542270198524'),
('sopharma', 'Mrs. Apeksha Saraf', 'AEPPL4159Q', 'Lecturer', 'School of Pharmacy', '126', 'id1542270215092'),
('sopharma', 'Dr. Gajanand Engla', 'AAJPE7619J', 'Lecturer', 'School of Pharmacy', '201', 'id1542270228674'),
('sopharma', 'Dr. Mayank Sharma', 'DXQPS7691R', 'Lecturer (on contract)', 'School of Pharmacy', '32', 'id1542270243841'),
('sopharma', 'Mr. Devashish Rathore', 'AKQPR8187F', 'Lecturer (on contract)', 'School of Pharmacy', '33', 'id1542270255087'),
('sopharma', 'Mr. Mahendra Chouhan', 'AUPPC3860M', 'Lecturer (on contract)', 'School of Pharmacy', '31', 'id1542270278180'),
('sopharma', 'Mr. Manoj Rathore', 'AYKPR6878F', 'Lecturer (on contract)', 'School of Pharmacy', '18', 'id1542270292318'),
('iipsdavv', 'Dr A K Sapre', 'AEOPS2017M', 'Professor', 'IIPS', '288', 'id1542014621580');

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2_4_4`
--

INSERT INTO `t2_4_4` (`Username`, `Year`, `Teacher_name`, `Pan_no`, `Designation`, `Name_of_Dept`, `Link`, `id_time`) VALUES
('admin2', '3892', 'ekjwe', 'kdskjdn', 'kdnskdn', 'dnsdkn', 'kdnskdn', 'id1540573118802'),
('pranjal', '56', '5', '25', 'dg', 'sa', 'trt', 'id1540660211855'),
('sostat', 'nil', 'nil', '0', 'nil', 'nil', 'nil', 'id1540884066424'),
('emrcdavv', '0', '0', '0', '0', '0', '0', 'id1541237917056'),
('biochem', '2017', 'Dr Meeta Jain', 'AERPJ2787A', 'Reader', 'Recognition Award', 'http://uid.dauniv.ac.in/NAC/profile/docs/09-11-2018_13-11-13MJ 2017.jpg', 'id1541748107340'),
('sopedu', '2018', 'Prof. Deepak Mehta', 'AGSPM7490A', 'Professor and Head', 'Recognition for Campus Cleanin', 'Nagar Nigam Certificate', 'id1542185928398'),
('iipsdavv', '2014', '00', '0000', '-', '-', '-', 'id1542208800927'),
('iipsdavv', '2015', '00', '0000', '-', '-', '-', 'id1542208803302'),
('iipsdavv', '2016', '00', '0000', '-', '-', '-', 'id1542208804744'),
('iipsdavv', '2017', '00', '0000', '-', '-', '-', 'id1542208806165'),
('ietdavv', '2017-2018', 'Dr. Vaibhav Neema', 'ADOPN8379C', 'Assistant Professor ', 'TEACHERS ASSOCIATESHIP FOR RES', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_10-55-32NAAC Empty.docx', 'id1542259697472'),
('chemsc', '2018', 'Dr. H.P.S.Chayhan', 'AAYPC2710P', 'Professor', 'Prof. S.T. Nandibewoor  Award ', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_19-57-492.4.4 Prof.S.T. Nandibewoor award.jpg', 'ididid1542208992623'),
('sopharma', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'id1542299158470'),
('sees', '0', '0', '0', '0', '0', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_12-45-462.4.4-.pdf', 'id1542352771988');

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

--
-- Dumping data for table `t2_4_5`
--

INSERT INTO `t2_4_5` (`Username`, `Year`, `Teacher_name`, `State`, `sanctioned_post_number_ug`, `sanctioned_post_number_pg`, `id_time`) VALUES
('somath', 'July 14 - June 15', 'Dr. K N Rajeswari', 'AndhraPradesh', 0, 7, 'ididid1540641945391'),
('somath', 'July 14 - June 15', 'Dr. Mahesh Dumaldar', 'M.Sc.(Maharashtra), Ph.D.(Madh', 0, 7, 'ididid1540641989296'),
('pranjal', 'July 15 - June 16', 'rty', 'gfgh', 2, 3, 'id1540660259498'),
('sostat', 'July 14 - June 15', 'nil', 'nil', 0, 6, 'id1540884223776'),
('soex', 'July 18 - June 19', 'Dr. Abhay Kumar', 'Delhi', 0, 10, 'id1540897219146'),
('soex', 'July 18 - June 19', 'Dr. Manju K. Chattopadhyay', 'Rajasthan', 0, 10, 'id1540897280626'),
('soex', 'Feb 14 - June 14', 'Dr. Rajkamal', 'Delhi', 0, 10, 'id1540897340874'),
('sopedu', 'Feb 14 - June 14', 'NIL', 'NA', 0, 0, 'id1541233028970'),
('emrcdavv', 'July 18 - June 19', '0', '0', 0, 7, 'id1541237960704'),
('doll', 'July 14 - June 15', '0', '0', 3, 0, 'id1541363358794'),
('doll', 'July 15 - June 16', '0', '0', 3, 0, 'id1541363373880'),
('doll', 'July 16 - June 17', '0', '0', 3, 0, 'id1541363382632'),
('doll', 'July 17 - June 18', '0', '0', 3, 0, 'id1541363389799'),
('doll', 'July 18 - June 19', '0', '0', 3, 0, 'id1541363395911'),
('biochem', 'July 14 - June 15', 'Dr D. Bhatnagar', 'UP', 0, 6, 'id1541589691327'),
('biochem', 'July 15 - June 16', 'Dr D. Bhatnagar', 'UP', 0, 6, 'id1541589716994'),
('chemsc', 'July 14 - June 15', 'Nil', 'NA', 0, 0, 'id1542209503554'),
('chemsc', 'July 15 - June 16', 'Nil', 'NA', 0, 0, 'id1542209513372'),
('chemsc', 'July 16 - June 17', 'Nil', 'NA', 0, 0, 'id1542209517539'),
('chemsc', 'July 17 - June 18', 'Nil', 'NA', 0, 0, 'id1542209522203'),
('chemsc', 'July 18 - June 19', 'Nil', 'NA', 0, 0, 'id1542209525883'),
('ietdavv', 'July 18 - June 19', 'Mr. Amit Jha', 'West Bangel', 99, 99, 'id1542261929525'),
('ietdavv', 'July 18 - June 19', 'Dr. Jitendra Singh', 'XYZ', 99, 99, 'id1542262619527'),
('imsdavv', 'Feb 14 - June 14', '3', 'UP, Gujarat', 0, 22, 'id1542267039152'),
('imsdavv', 'July 14 - June 15', '3', 'UP,Gujarat', 0, 22, 'id1542267117145'),
('imsdavv', 'July 15 - June 16', '3', 'UP, Gujarat', 0, 22, 'id1542267469998'),
('imsdavv', 'July 16 - June 17', '2', 'UP,Gujarat', 0, 22, 'id1542267482466'),
('imsdavv', 'July 17 - June 18', '2', 'Up,Gujarat', 0, 22, 'id1542267504017'),
('imsdavv', 'July 18 - June 19', '2', 'Up,Gujarat', 0, 22, 'id1542267515213'),
('asc', 'Feb 14 - June 14', 'Dr.Namrata Sharma', 'Uttar Pradesh', 0, 3, 'id1542268766678'),
('asc', 'Feb 14 - June 14', 'Dr.Bhumesh Gupta', 'Delhi', 0, 3, 'id1542268798095'),
('asc', 'Feb 14 - June 14', 'Dr.Jayshree Bansal', 'Rajasthan', 0, 3, 'id1542268817197'),
('solaw', 'Feb 14 - June 14', 'Ms. Padma Singh', 'Uttar Pradesh (Gorakhpur)', 3, 2, 'id1542269570899'),
('sopharma', 'July 18 - June 19', 'Dr. Nidhi Dubey', 'Gujarat', 20, 6, 'id1542270464276'),
('sopharma', 'July 18 - June 19', 'Dr. Mukesh Chandra Sharma', 'Karnataka', 20, 6, 'id1542270492517'),
('sopharma', 'July 17 - June 18', 'Dr. Nidhi Dubey', 'Gujarat', 20, 6, 'id1542270506396'),
('sopharma', 'July 17 - June 18', 'Dr. Mukesh Chandra Sharma', 'Karnataka', 20, 6, 'id1542270517811'),
('sopharma', 'July 16 - June 17', 'Dr. Nidhi Dubey', 'Gujarat', 20, 6, 'id1542270530027'),
('sopharma', 'July 16 - June 17', 'Dr. Mukesh Chandra Sharma', 'Karnataka', 20, 6, 'id1542270540545'),
('sopharma', 'July 15 - June 16', 'Dr. Nidhi Dubey', 'Gujarat', 20, 6, 'id1542270547812'),
('sopharma', 'July 15 - June 16', 'Dr. Mukesh Chandra Sharma', 'Karnataka', 20, 6, 'id1542270556976'),
('sopharma', 'July 14 - June 15', 'Dr. Nidhi Dubey', 'Gujarat', 20, 6, 'id1542270565643'),
('sopharma', 'July 14 - June 15', 'Dr. Mukesh Chandra Sharma', 'Karnataka', 20, 6, 'id1542270574276'),
('sopharma', 'Feb 14 - June 14', 'Dr. Nidhi Dubey', 'Gujarat', 20, 6, 'id1542270586091'),
('sopharma', 'Feb 14 - June 14', 'Dr. Mukesh Chandra Sharma', 'Karnataka', 20, 6, 'id1542270594409'),
('iipsdavv', 'July 17 - June 18', '00', '00', 0, 69, 'id1542014747826'),
('sees', 'Feb 14 - June 14', '0', '0', 0, 7, 'id1542352694980'),
('sees', 'July 14 - June 15', '0', '0', 0, 7, 'id1542352722525'),
('sees', 'July 15 - June 16', '0', '0', 0, 7, 'id1542352728947'),
('sees', 'July 16 - June 17', '0', '0', 0, 7, 'id1542352733261'),
('sees', 'July 17 - June 18', '0', '0', 0, 7, 'id1542352742738'),
('sees', 'July 18 - June 19', '0', '0', 0, 7, 'id1542352746970');

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

--
-- Dumping data for table `t2_5_1`
--

INSERT INTO `t2_5_1` (`Username`, `Prog_code`, `Prog_name`, `Sem`, `Exam_end_date`, `Result_date`, `id_time`) VALUES
('pranjal', 'TESTINGP1', 'TESTING NAME 1 NAME', 'semester', '225', '225\"', 'idid1540660305501'),
('sostat', 'ST5A', 'M.Sc. Statistics', 'semester', '14/05/2018', '25/05/2018', 'id1540897149394'),
('soex', 'EL7A', 'M.Tech Embedded Systems', 'semester', '15 June', '30 June', 'id1540897384898'),
('soex', 'EL7B', 'M.Tech Spatial Information Technology', 'semester', '15 June', '30 June', 'id1540897414624'),
('soex', 'EL7C', 'M.Tech Mobile Computing Technology', 'semester', '15 June', '30 June', 'id1540897417328'),
('soex', 'EL5A', 'M.Sc Electronics', 'semester', '15 June', '30 June', 'id1540897418327'),
('soex', 'EL5B', 'M.Sc Electronics & Communication', 'semester', '15 June', '30 June', 'id1540897419104'),
('sopedu', 'PE8X', 'M.Phil.', 'semester', '11.03.2016', '16.04.2016', 'id1540899596275'),
('sopedu', 'PE4A', 'B.P.E.S.', 'semester', '20.12.2016', '21.12.2016', 'id1540899619129'),
('sopedu', 'PE5A', 'M.P.Ed.', 'semester', '13.04.2016', '21.04.2016', 'id1540899578592'),
('sopedu', 'PE4A', 'B.P.E.S.', 'semester', '13.04.2016', '21.04.2016', 'id1540899554003'),
('sopedu', 'PE5A', 'M.P.Ed.', 'semester', '19.12.2015', '28.12.2015', 'id1540899360233'),
('sopedu', 'PE4A', 'B.P.E.S.', 'semester', '19.12.2015', '28.12.2015', 'id1540899329784'),
('sopedu', 'PE5A', 'M.P.Ed.', 'semester', '20.05.2015', '26.05.2015', 'id1540899214416'),
('sopedu', 'PE4A', 'B.P.E.S.', 'semester', '20.05.2015', '26.05.2015', 'id1540899186410'),
('sopedu', 'PE5A', 'M.P.Ed.', 'semester', '17.12.2014', '20.12.2014', 'idid1540898985542'),
('sopedu', 'PE4A', 'B.P.E.S.', 'semester', '17.12.2014', '19.12.2014', 'idid1540898702795'),
('sopedu', 'PE5A', 'M.P.Ed.', 'semester', '20.12.2016', '22.12.2016', 'id1540899719839'),
('sopedu', 'PE4A', 'B.P.E.S.', 'semester', '19.05.2017', '07.06.2017', 'id1540899860601'),
('sopedu', 'PE5A', 'M.P.Ed.', 'semester', '20.05.2017', '08.06.2017', 'id1540899885575'),
('sopedu', 'PE4A', 'B.P.E.S.', 'semester', '12.12.17', '04.01.2018', 'id1540900000856'),
('sopedu', 'PE5A', 'M.P.Ed.', 'semester', '13.12.2017', '04.01.2018', 'id1540900021643'),
('sopedu', 'PE4A', 'B.P.E.S.', 'semester', '18.05.2018', '26.05.2018', 'id1540900179176'),
('sopedu', 'PE5A', 'M.P.Ed.', 'semester', '19.05.2018', '26.05.2018', 'id1540900199560'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'semester', '17-12-2015', '21-12-2015', 'ididid1540902817606'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'semester', '19-12-2014', '02-01-2015', 'ididid1540902690401'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'semester', '13-04-2016', '07-05-2016', 'ididid1540902837590'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'semester', '15-05-2015', '19-05-2015', 'ididid1540902754803'),
('imsdavv', 'MS5A', 'MBA(FT)', 'semester', '15.05.2014', '30.07.2014', 'id1541144350461'),
('imsdavv', 'MS5B', 'MBA(DM)', 'semester', '15.05.2014', '12.07.014', 'id1541144385651'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'semester', '15.05.2014', '31.07.2014', 'id1541144416252'),
('imsdavv', 'MS5D', 'MBA(MM)', 'semester', '15.05.2014', '17.07.2014', 'id1541144442393'),
('imsdavv', 'MS5E', 'MBA(HR)', 'semester', '15.05.2014', '27.08.2014', 'id1541144462623'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'semester', '17.05.2014', '07.07.2014', 'id1541144484075'),
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'semester', '23.05.2014', '02.08.2014', 'id1541144506533'),
('imsdavv', 'MS6B', 'MBA(HA) 5YR', 'semester', '15.05.2014', '09.07.2014', 'id1541144526041'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'semester', '23.05.2014', '22.08.2014', 'id1541144542357'),
('imsdavv', 'MS5A', 'MBA(FT)', 'semester', '14.05.0215', '17.08.2015', 'id1541144579305'),
('imsdavv', 'MS5B', 'MBA(DM)', 'semester', '18.05.15', '27.07.15', 'id1541144597152'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'semester', '14.05.15', '03.08.15', 'id1541144615455'),
('imsdavv', 'MS5D', 'MBA(MM)', 'semester', '14.05.15', '31.07.15', 'id1541144627754'),
('imsdavv', 'MS5E', 'MBA(HR)', 'semester', '14.05.15', '28.08.15', 'id1541144640467'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'semester', '18.05.15', '20.08.15', 'id1541144652603'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'semester', '19.05.15', '17.06.15', 'id1541144668319'),
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'semester', '14.05.15', '19.08.15', 'id1541144688393'),
('imsdavv', 'MS6B', 'MBA(HA) 5YR', 'semester', '14.05.15', '17.06.15', 'id1541144701648'),
('imsdavv', 'MS5A', 'MBA(FT)', 'semester', '09.04.16', '15.07.16', 'id1541144719819'),
('imsdavv', 'MS5B', 'MBA(DM)', 'semester', '07.04.16', '02.07.16', 'id1541144732682'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'semester', '09.04.16', '29.07.16', 'id1541144748647'),
('imsdavv', 'MS5D', 'MBA(MM)', 'semester', '09.04.16', '18.07.16', 'id1541144761014'),
('imsdavv', 'MS5E', 'MBA(HR)', 'semester', '11.04.16', '21.07.16', 'id1541144772716'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'semester', '09.04.16', '29.07.16', 'id1541144784715'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'semester', '06.04.16', '02.07.16', 'id1541144806575'),
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'semester', '07.04.16', '28.07.16', 'id1541144826145'),
('imsdavv', 'MS6B', 'MBA(HA) 5YR', 'semester', '07.04.16', '13.07.16', 'id1541144839344'),
('imsdavv', 'MS5A', 'MBA(FT)', 'semester', '05.05.17', '08.08.17', 'id1541144853395'),
('imsdavv', 'MS5B', 'MBA(DM)', 'semester', '05.05.17', '11.08.17', 'id1541144875741'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'semester', '05.05.17', '08.08.17', 'id1541144890440'),
('imsdavv', 'MS5D', 'MBA(MM)', 'semester', '05.05.17', '09.08.17', 'id1541144902342'),
('imsdavv', 'MS5E', 'MBA(HR)', 'semester', '05.05.17', '16.08.17', 'id1541144915673'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'semester', '13.05.17', '17.08.17', 'id1541144962473'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'semester', '05.05.17', '09.06.17', 'id1541144976075'),
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'semester', '03.05.17', '11.08.17', 'id1541144987839'),
('imsdavv', 'MS6B', 'MBA(HA) 5YR', 'semester', '05.05.17', '24.07.17', 'id1541144999072'),
('imsdavv', 'MS5A', 'MBA(FT)', 'semester', '11.05.18', '16.07.18', 'id1541145016487'),
('imsdavv', 'MS5B', 'MBA(DM)', 'semester', '09.05.18', '17.07.18', 'id1541145023190'),
('imsdavv', 'MS5C', 'MBA(FA) ', 'semester', '09.05.18', '10.07.18', 'id1541145027704'),
('imsdavv', 'MS5D', 'MBA(MM)', 'semester', '11.05.18', '09.07.18', 'id1541145031921'),
('imsdavv', 'MS5E', 'MBA(HR)', 'semester', '14.05.18', '20.08.18', 'id1541145035203'),
('imsdavv', 'MS5F', 'MBA(ECOMM)2YR', 'semester', '09.05.18', '23.07.18', 'id1541145060334'),
('imsdavv', 'MS6A', 'MBA(ECOMM)5YR', 'semester', '07.05.18', '04.07.18', 'id1541145073669'),
('imsdavv', 'MS5G', 'MBA(HA) 2YR', 'semester', '09.05.18', '19.07.18', 'id1541145109105'),
('imsdavv', 'MS6B', 'MBA(HA) 5YR', 'semester', '05.05.18', '06.07.18', 'id1541145116728'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'semester', '19-05-2017', '24-05-2017', 'ididid1540902880770'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'semester', '15-12-2016', '30-12-2016', 'ididid1540902860269'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'semester', '14-12-2017', '29-12-2017', 'ididid1540902905826'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'semester', '18-05-2018', '20-06-2018', 'ididid1540902927362'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'semester', '25/06/2017', '30/06/2017', 'idid1541238798122'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'semester', '25/06/2016', '30/06/2016', 'idid1541238721921'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'semester', '25/06/2016', '30/06/2016', 'idid1541238714073'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'semester', '25/06/2015', '30/06/2015', 'idid1541238678497'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'semester', '25/06/2015', '30/06/2015', 'idid1541238672105'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'semester', '25/06/2014', '30/06/2014', 'idid1541238654458'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'semester', '25/06/2014', '30/06/2014', 'idid1541238587785'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 'semester', '15-05-2014', '22-05-2014', 'ididid1540900002439'),
('somath', 'MT8X', 'M.Phil.', 'semester', '15-05-2015', '19-05-2015', 'idid1541161316678'),
('somath', 'MT8X', 'M.Phil.', 'semester', '14-03-2016', '17-03-2016', 'idid1541161502824'),
('somath', 'MT8X', 'M.Phil.', 'semester', '16-12-2016', '21-12-2016', 'idid1541161584415'),
('somath', 'MT9Z', 'Ph.D.', 'semester', '11-03-2015', '06-04-2015', 'id1541242395752'),
('somath', 'MT9Z', 'Ph.D.', 'semester', '18-05-2018', '05-06-2018', 'id1541242593457'),
('doll', 'LE2A', 'Diploma in Interior Designing', 'semester', '30/5/15', '30/7/15````````````````````', 'id1541361808530'),
('doll', 'LE2A', 'Diploma in Interior Designing', 'semester', '17/6/16', '2/8/16', 'id1541361913531'),
('doll', 'LE2A', 'Diploma in Interior Designing', 'semester', '27/5/17', '26/9/17', 'id1541362016587'),
('doll', 'LE4A', 'B. Voc. Interior Design', 'semester', '28/5/15', '2/7/15', 'id1541362064215'),
('doll', 'LE4A', 'B. Voc. Interior Design', 'semester', '16/4/16', '22/7/16', 'id1541362101229'),
('doll', 'LE4A', 'B. Voc. Interior Design', 'semester', '29/5/17', '1/9/17', 'id1541362121312'),
('doll', 'LE4B', 'B.Voc. Fashion Technology', 'semester', '28/5/15', '2/7/15', 'id1541362142478'),
('doll', 'LE4B', 'B.Voc. Fashion Technology', 'semester', '9/4/16', '21/7/16', 'id1541362171208'),
('doll', 'LE4B', 'B.Voc. Fashion Technology', 'semester', '27/5/17', '20/9/17', 'id1541362191639'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'semester', '17.5.18 & 24.6.18', ' July 18', 'id1541749173865'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'semester', '15.12.17 & 21.12.17', ' Jan 18', 'id1541749821189'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'semester', '17.5.17 & 24.6.17', ' July 17', 'id1541749879532'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'semester', '21.12.16 & 22.12.16', 'Jan 17', 'id1541750015855'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'semester', '16.4.16 & 23.6.16', 'July 16', 'id1541750081105'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'semester', '17.12.15 & 17.12.15', 'Jan 16', 'id1541750112678'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'semester', '16.5.15 & 02.07.15', 'July 15', 'id1541750156510'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'semester', '22.12.14 & 22.12.14', 'Jan 15', 'id1541750219371'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'semester', '12.05.14 & 05.07.14', 'July 14', 'id1541750258317'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'semester', '26/06/2018', '30/06/2018', 'id1542097594644'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'semester', '29/06/2017', '01/07/2017', 'id1542097559170'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'semester', '28/06/2016', '30/06/2016', 'id1542097529168'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'semester', '28/06/2015', '30/06/2015', 'id1542097491938'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 'semester', '30/06/2014', '04/07/2014', 'id1542097414642'),
('sees', 'EN5A', 'M.B.A (Energy Management) Distance', 'semester', '20/06/2017', '05/07/2017', 'id1542097642310'),
('sees', 'EN5A', 'M.B.A (Energy Management) Distance', 'semester', '08/06/2018', '20/06/2018', 'id1542097677027'),
('sees', 'EN8X', 'M.Phil.', 'semester', '30/12/2014', '10/01/2015', 'id1542097700121'),
('sees', 'EN8X', 'M.Phil.', 'semester', '30/12/2015', '30/12/2015', 'id1542097730258'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'semester', '25/06/2017', '30/06/2017', 'idid1541238816570'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 'semester', '25/06/2018', '30/06/2018', 'idid1541238844178'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 'semester', '25/06/2018', '30/06/2018', 'idid1541238848369'),
('iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs', 'semester', '22.5.2014', '24.5.2014', 'id1542206436686'),
('iipsdavv', 'PS5B', 'MBA (APR)', 'semester', '21.5.2014', '24.5.2014', 'id1542206421112'),
('iipsdavv', 'PS5C', 'MBA (Tour)', 'semester', '19.5.2014', '24.5.2014', 'id1542206401851'),
('iipsdavv', 'PS6B', 'M.Tech. (IT)', 'semester', '17.5.2014', '24.5.2014', 'id1542206390497'),
('iipsdavv', 'PS6A', 'MCA(6yr)', 'semester', '19.5.2014', '24.5.2014', 'id1542206305681'),
('iipsdavv', 'PS4A', 'BCom(Hons)', 'semester', '17.5.2014', '24.5.2014', 'ididid1542014269754'),
('iipsdavv', 'PS5A', 'MBA (MS) 2yrs', 'semester', '21.5.2014', '24.5.2014', 'id1542206456078'),
('iipsdavv', 'PS4A', 'BCom(Hons)', 'semester', '14.5.2015', '23.5.2015', 'id1542206627572'),
('iipsdavv', 'PS6A', 'MCA(6yr)', 'semester', '12.5.2015', '23.5.2015', 'id1542206631208'),
('iipsdavv', 'PS6B', 'M.Tech. (IT)', 'semester', '11.5.2015', '23.5.2015', 'id1542206637595'),
('iipsdavv', 'PS5C', 'MBA (Tour)', 'semester', '16.5.2015', '23.5.2015', 'id1542206639429'),
('iipsdavv', 'PS5B', 'MBA (APR)', 'semester', '18.5.2015', '23.5.2015', 'id1542206641031'),
('iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs', 'semester', '18.5.2015', '23.5.2015', 'id1542206648483'),
('iipsdavv', 'PS5A', 'MBA (MS) 2yrs', 'semester', '18.5.2015', '23.5.2015', 'id1542206650391'),
('iipsdavv', 'PS4A', 'BCom(Hons)', 'semester', '4.4.2016', '13.4.2016', 'id1542206652461'),
('iipsdavv', 'PS6A', 'MCA(6yr)', 'semester', '30.3.2016', '13.4.2016', 'id1542206653915'),
('iipsdavv', 'PS6B', 'M.Tech. (IT)', 'semester', '29.3.2016', '13.4.2016', 'id1542206655493'),
('iipsdavv', 'PS5C', 'MBA (Tour)', 'semester', '2.4.2016', '13.4.2016', 'id1542206661670'),
('iipsdavv', 'PS5B', 'MBA (APR)', 'semester', '6.4.2016', '13.4.2016', 'id1542206668255'),
('iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs', 'semester', '4.4.2016', '13.4.2016', 'id1542206674996'),
('iipsdavv', 'PS5A', 'MBA (MS) 2yrs', 'semester', '4.4.2016', '13.4.2016', 'id1542206681470'),
('iipsdavv', 'PS4A', 'BCom(Hons)', 'semester', '3.5.2017', '17.5.2017', 'id1542207045310'),
('iipsdavv', 'PS6A', 'MCA(6yr)', 'semester', '6.5.2017', '17.5.2017', 'id1542207052578'),
('iipsdavv', 'PS6B', 'M.Tech. (IT)', 'semester', '6.5.2017', '17.5.2017', 'id1542207062547'),
('iipsdavv', 'PS5C', 'MBA (Tour)', 'semester', '11.5.2017', '17.5.2017', 'id1542207078080'),
('iipsdavv', 'PS5B', 'MBA (APR)', 'semester', '11.5.2017', '17.5.2017', 'id1542207084506'),
('iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs', 'semester', '13.5.2017', '17.5.2017', 'id1542207098819'),
('iipsdavv', 'PS5A', 'MBA (MS) 2yrs', 'semester', '13.5.2017', '17.5.2017', 'id1542207109245'),
('iipsdavv', 'PS4A', 'BCom(Hons)', 'semester', '9.5.2018', '21.5.2018', 'id1542207331096'),
('iipsdavv', 'PS6A', 'MCA(6yr)', 'semester', '11.5.2018', '21.5.2018', 'id1542207342647'),
('iipsdavv', 'PS6B', 'M.Tech. (IT)', 'semester', '10.5.2018', '21.5.2018', 'id1542207398795'),
('iipsdavv', 'PS5C', 'MBA (Tour)', 'semester', '12.5.2018', '21.5.2018', 'id1542207405638'),
('iipsdavv', 'PS5B', 'MBA (APR)', 'semester', '8.5.2018', '21.5.2018', 'id1542207413544'),
('iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs', 'semester', '4.5.2018', '21.5.2018', 'id1542207426457'),
('iipsdavv', 'PS5A', 'MBA (MS) 2yrs', 'semester', '11.5.2018', '21.5.2018', 'id1542207433899'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'semester', 'May 15, 2014', 'May 31,2014', 'id1542209678337'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'semester', 'May 15, 2014', 'May 31,2014', 'id1542209699091'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'semester', 'May 15, 2015', 'May 31,2015', 'id1542209803383'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'semester', 'May 15, 2015', 'May 31,2015', 'id1542209809802'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'semester', 'May 15, 2016', 'May 31,2016', 'id1542209814338'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'semester', 'May 15, 2016', 'May31,2016', 'id1542209817370'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'semester', 'May 15, 2017', 'May 31,2017', 'id1542209900280'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'semester', 'May 15, 2017', 'May 31,2017', 'id1542209904720'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 'semester', 'May 15, 2018', 'May 20,2018', 'id1542209910847'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 'semester', 'May 15, 2018', 'May 20,2018', 'id1542209914183'),
('ietdavv', 'CE4F', 'B.E. (Computer Engineering) ï¿½ Full Time', 'semester', '5 May 2018', '15 May 2018', 'ididid1542359622058'),
('ietdavv', 'IT4F', 'B.E. (Information Technology)  - Full Time', 'semester', '5 May 2018', '15 May 2018', 'ididid1542359786224'),
('ietdavv', 'EI4F', 'B.E. (Electronics & Instrumentation Engineering)', 'semester', '5 May 2018', '15 May 2018', 'ididid1542360485418'),
('ietdavv', 'ET4F', 'B.E. (Electronics & Telecommunication Engineering)', 'semester', '5 May 2018', '15 May 2018', 'ididid1542360543825'),
('ietdavv', 'ME4F', 'B.E. (Mechanical Engineering) ï¿½ Full Time', 'semester', '5 May 2018', '15 May 2018', 'ididid1542360615829'),
('ietdavv', 'CV4F', 'B.E. (Civil Engineering) ï¿½ Full Time', 'semester', '5 May 2018', '15 May 2018', 'id1542365569075');

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

--
-- Dumping data for table `t2_5_2`
--

INSERT INTO `t2_5_2` (`Username`, `Year`, `Complaint_no`, `Total_students`, `id_time`) VALUES
('pranjal', 'July 15 - June 16', 233, 53, 'id1540660381622'),
('sostat', 'July 16 - June 17', 0, 0, 'id1540897261274'),
('sostat', 'July 15 - June 16', 0, 0, 'id1540897252105'),
('sostat', 'July 14 - June 15', 0, 0, 'id1540897228834'),
('sostat', 'July 17 - June 18', 0, 0, 'id1540897275538'),
('sostat', 'July 18 - June 19', 0, -2, 'id1540897285891'),
('sopedu', 'July 14 - June 15', 0, 185, 'id1540900501748'),
('sopedu', 'July 15 - June 16', 0, 141, 'id1540900585532'),
('sopedu', 'July 16 - June 17', 0, 150, 'id1540900603259'),
('sopedu', 'July 17 - June 18', 0, 140, 'id1540900619252'),
('sopedu', 'July 18 - June 19', 0, 201, 'id1540900630083'),
('sees', 'Feb 14 - June 14', 0, 0, 'id1541226010505'),
('sees', 'July 14 - June 15', 0, 0, 'id1541234958245'),
('sees', 'July 15 - June 16', 0, 0, 'id1541234964088'),
('sees', 'July 16 - June 17', 0, 0, 'id1541234969467'),
('sees', 'July 17 - June 18', 0, 0, 'id1541234975913'),
('sees', 'July 18 - June 19', 0, 0, 'id1541234987739'),
('ietdavv', 'July 16 - June 17', 375, 7942, 'id1542190846864'),
('ietdavv', 'July 15 - June 16', 1332, 7673, 'id1542190839893'),
('ietdavv', 'July 15 - June 16', 534, 7647, 'id1542190707404'),
('emrcdavv', 'July 17 - June 18', 0, 247, 'idid1541238113384'),
('ietdavv', 'Feb 14 - June 14', 434, 4084, 'id1542190647090'),
('emrcdavv', 'July 14 - June 15', 0, 229, 'idid1541238058320'),
('emrcdavv', 'July 15 - June 16', 0, 227, 'idid1541238100576'),
('emrcdavv', 'July 16 - June 17', 0, 230, 'idid1541238108112'),
('emrcdavv', 'Feb 14 - June 14', 0, 209, 'idid1541238049833'),
('doll', 'July 15 - June 16', 0, 72, 'id1541362279633'),
('doll', 'July 14 - June 15', 0, 46, 'id1541362250507'),
('doll', 'July 16 - June 17', 0, 79, 'id1541362297511'),
('doll', 'July 17 - June 18', 0, 90, 'id1541362305959'),
('doll', 'July 18 - June 19', 0, 91, 'id1541362320269'),
('biochem', 'July 17 - June 18', 0, 40, 'id1541750555591'),
('biochem', 'July 16 - June 17', 0, 35, 'id1541750964600'),
('biochem', 'July 15 - June 16', 0, 30, 'id1541750983844'),
('biochem', 'July 14 - June 15', 0, 35, 'id1541751411331'),
('biochem', 'Feb 14 - June 14', 0, 44, 'id1541751487123'),
('ietdavv', 'July 17 - June 18', 409, 6558, 'id1542190852272'),
('iipsdavv', 'July 14 - June 15', 0, 1791, 'id1542207569871'),
('iipsdavv', 'July 15 - June 16', 0, 1710, 'id1542207583671'),
('iipsdavv', 'July 16 - June 17', 0, 1628, 'id1542207585271'),
('iipsdavv', 'July 17 - June 18', 0, 1706, 'id1542207586768'),
('iipsdavv', 'July 18 - June 19', 0, 1697, 'id1542207588222'),
('chemsc', 'July 17 - June 18', 0, 49, 'id1542210092550'),
('chemsc', 'July 16 - June 17', 0, 24, 'id1542210088638'),
('chemsc', 'July 15 - June 16', 0, 41, 'id1542210085158'),
('chemsc', 'July 14 - June 15', 0, 39, 'id1542210081254'),
('chemsc', 'Feb 14 - June 14', 0, 34, 'id1542210074463');

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

--
-- Dumping data for table `t2_5_3`
--

INSERT INTO `t2_5_3` (`Username`, `Year`, `No_of_application_recieved_for_reevaluation`, `Total_students`, `Marks_changed_cases`, `id_time`) VALUES
('pranjal', 'July 15 - June 16', 26, 25, 1, 'id1540660494523'),
('sostat', 'July 14 - June 15', 0, 0, 0, 'id1540897345020'),
('sostat', 'July 15 - June 16', 0, 0, 0, 'id1540897354956'),
('sostat', 'July 16 - June 17', 0, 0, 0, 'id1540897363332'),
('sostat', 'July 17 - June 18', 0, 0, 0, 'id1540897374084'),
('sostat', 'July 18 - June 19', 0, 0, 0, 'id1540897387107'),
('sopedu', 'July 14 - June 15', 0, 185, 0, 'id1540900766011'),
('sopedu', 'July 15 - June 16', 0, 141, 0, 'id1540900779223'),
('sopedu', 'July 16 - June 17', 0, 150, 0, 'id1540900789435'),
('sopedu', 'July 17 - June 18', 0, 140, 0, 'id1540900807604'),
('sopedu', 'July 18 - June 19', 0, 201, 0, 'id1540900818357'),
('sees', 'Feb 14 - June 14', 0, 0, 0, 'id1541226400636'),
('sees', 'July 14 - June 15', 0, 0, 0, 'id1541235064595'),
('sees', 'July 15 - June 16', 0, 0, 0, 'id1541235071975'),
('sees', 'July 16 - June 17', 0, 0, 0, 'id1541235082323'),
('sees', 'July 17 - June 18', 0, 0, 0, 'id1541235088999'),
('sees', 'July 18 - June 19', 0, 0, 0, 'id1541235098842'),
('emrcdavv', 'Feb 14 - June 14', 0, 221, 0, 'ididid1541238286056'),
('emrcdavv', 'July 17 - June 18', 0, 255, 0, 'ididid1541238340832'),
('emrcdavv', 'July 14 - June 15', 0, 241, 0, 'ididid1541238333200'),
('emrcdavv', 'July 15 - June 16', 0, 239, 0, 'ididid1541238336288'),
('doll', 'July 14 - June 15', 0, 46, 0, 'id1541362343316'),
('doll', 'July 15 - June 16', 0, 72, 0, 'id1541362361004'),
('doll', 'July 16 - June 17', 0, 79, 0, 'id1541362369370'),
('doll', 'July 17 - June 18', 0, 90, 0, 'id1541362377914'),
('doll', 'July 17 - June 18', 0, 91, 0, 'id1541362387705'),
('biochem', 'July 17 - June 18', 0, 40, 0, 'id1541751627086'),
('biochem', 'July 16 - June 17', 0, 35, 0, 'id1541751652346'),
('biochem', 'July 15 - June 16', 0, 30, 0, 'id1541751657413'),
('biochem', 'July 14 - June 15', 0, 35, 0, 'id1541751663272'),
('biochem', 'Feb 14 - June 14', 0, 44, 0, 'id1541751668498'),
('emrcdavv', 'July 16 - June 17', 0, 233, 0, 'ididid1541238338720'),
('iipsdavv', 'July 14 - June 15', 0, 1791, 0, 'id1542207758058'),
('iipsdavv', 'July 15 - June 16', 0, 1710, 0, 'id1542207759623'),
('iipsdavv', 'July 16 - June 17', 0, 1628, 0, 'id1542207761044'),
('iipsdavv', 'July 17 - June 18', 0, 1706, 0, 'id1542207762522'),
('iipsdavv', 'July 18 - June 19', 0, 1697, 0, 'id1542207763894'),
('chemsc', 'Feb 14 - June 14', 0, 34, 0, 'id1542210546853'),
('chemsc', 'July 14 - June 15', 0, 39, 0, 'id1542210597973'),
('chemsc', 'July 15 - June 16', 0, 41, 0, 'id1542210601260'),
('chemsc', 'July 16 - June 17', 0, 24, 0, 'id1542210605852'),
('chemsc', 'July 17 - June 18', 0, 49, 0, 'id1542210610723'),
('ietdavv', 'July 16 - June 17', 375, 7942, 135, 'id1542263142587'),
('ietdavv', 'July 15 - June 16', 1332, 7673, 452, 'id1542263068397'),
('ietdavv', 'July 14 - June 15', 534, 7647, 154, 'id1542262756430'),
('ietdavv', 'July 17 - June 18', 409, 6558, 118, 'id1542263222114');

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

--
-- Dumping data for table `t2_5_4`
--

INSERT INTO `t2_5_4` (`Username`, `Description`, `File_name`, `Link`) VALUES
('pranjal', 'djshflsak%28%29%2A%25%5E%25%2A%29%28', '', '%26%25%25%26%29%2A'),
('sopedu', 'i.Academic+Calendar+well+in+advance.+Department+plan+hosted+in+website.ii.Schedule+of+internal+and+end+semester+exams+are+notified+well+in+advance.iii.Evaluation+schedule+is+given+to+the+teachers+to+complete+their+evaluation+work+well+in+time+through+central+valuation+method.iv.+++++The+results+are+declared+within+15+days+in+each+semester+after+the+completion+of+end+semester+examination.v.Students+are+shown+the+evaluated+answer+sheets+after+the+tests+and+end+semester+examination+and+also+discuss+with+concern+faculty.vi.The+copy%2Fanswers+are+displayed+to+students++++++vii.All+faculty+members+discuss+and+decide+time+table+and+schedule+of+examination+and+invigilation+in+departmental+committee.+Computer+++++++++is+used+to+generate+students%92+list+and+attendance+sheets.iv.Department+has+developed+mechanism+for+well+conduction+of+all+examination+and+evaluation+processes.+Department+is+timely+manage+++++++++all+internal+and+end+semester+examination%2C+their+schedule%2C+time-table+and+evaluation+process.+The+department+is+following+Central+++++++++++Valuation+system+for+evaluation.+The+evaluation+work+starts+from+the+first+day+of+commencement+of+the+examination+and+results+++++++++declared+within+15+days+after+the+examination.+Result+preparation+is+done+computerized+and+results+also+uploaded+on+departmental+++++++++website.+Students+can+review+their+answer+sheet+within+10+days+after+the+declaration+of+results.+', '', 'Documents+in+File'),
('biochem', 'The+School+has+autonomy+to+conduct+the+examinations+as+per+Ordinance+14.+There+is+continuous+assessment+of+the+students+through+sessional+tests%2C+seminars+and+interactive+discussion+with+them.+All+the+tests+and+end+semester+examinations+are+conducted+strictly+as+per+academic+calender.+Continuous+assessment+keep+the+students+enganged+in+studies+throughout+the+semester.+Questions+are+framed+in+essay%2C+objective+as+well+as+problem+solving+pattern.+The+evaluation+method+follows+an+open+system%2C+in+which+answer+books+are+shown+to+the+students.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F10-11-2018_12-41-10QlM+2.5.4.docx'),
('chemsc', 'The+impact%3AResults+announced+within+a+fortnight+%28+15+days%29EXAMINATION+PROCEDURES+%2F+CONTINUOUS+INTERNAL+ASSESSMENTThe+assessment+is+done+as+per+the+University+Ordinance+31+considering%3A+%95Written+Unit++tests+%95End+semester+examination%95MCQ+based+quizzes+%95Presentations+%95Projects+%95Field+visits+%95Seminars+%95Group+discussions%2Factivities%95Assigmnents++Total+internal+assessment+at+40%25+weight+for+theory+courses+with+three+cycle+tests%2C+surprisetests%2C+quiz%2Fassignment+and+for+practical+courses+it+is+25%25+%285Credits%29.For+final+year%2FIV+semester+projects%2C+the+internal+assessment+in+the+form+of+viva+%2F+review++carries+30%25+%286+Credits%29+weight.Absolute+transparency+is+maintained+in+the+evaluation+process+as+evidenced+by+the+physical+manifestation+of+evaluated+answer+books+to+every+student.+Immediately+after+the+completion+of+examination%2C+marks+are+displayed+on+the+notice+board+of+the+department.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F14-11-2018_21-49-25ReRevisedOrdinance31.pdf'),
('doll', 'Department+had+been+working+independently+as+UTD%5C%27s+Deptt.+%2C+where+different+skill+based+courses%2C+their+teaching%2C+examination%2C+evaluations%2C+different+activities+and+events+have+been+done+successfully+and+regularly+.+Department+has+a+good+reputation+as+one+of+the+university+department+imparting+education+and+vocational+training+facilities+to+all+age+citizens.+Examinations+and++results+are+conducted+and+declared+in+time.++Academic+works+of+students+of+the+department+show+through+yearly+exhibition+in+the+department+for+all+community.+Evaluation+process+and+reforms+semester+grade+point+system+followed.+Every+year+assessment+through+UGC+approved+sector+skill+councils+at+every+level+of+B.+Voc.+Students.Department+achieved+99.9%25result+from+these+assessment+every+year.+++++++++++++++++++', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F15-11-2018_12-49-52000.docx'),
('emrcdavv', 'Examination+ProcedureStudents+register+for+examination+and+a+hall+ticket+is+issued+to+appear+in+semester+end+examination.+A+student+is+assessed+on+three+unit+test+and+a+semester+end+examination.+Two+best+attempt+of+unit+test+and+semester+end+examination+scores+constitute+the+final+result+of+student+for+a+given+subject.+Ensuring+transparency+in+exam+procedure%2C+answer+script+of+Unit+Tests+and+Semester+End+Examination+is+compulsorily+shown+to+students.+A+comprehensive+Viva-voce+is+conducted+at+the+end+of+each+semester.+As+EMRC+courses+have+equal+exposure+to+practical+subject+and+theoretical+input%2C+so+it+is+also+assessed+separately+as+Theoretical+Exam%2C+Lab+Assignments+and+Media+Production+Subjects.+Processes+Integrating+IT+Examination+Process+at+EMRC+is+completely+based+on+IT+Solutions.+Students+receives+enrollment+number+after+online+admission+process.+Complete+data+of+student+is+available+online+carrying+information+line+Name%2C+Date+of+Birth%2C+Address%2C+Enrollment+Number%2C+Previous+Qualifications%2C+email+id+and+mobile+number.+Category+%28Reserved%2FUnreserved%29+detail+is+also+available.+Examination+system+uses+student+information+from+same+data+to+generate+Hall+tickets+for+examination+and+Result+declaration.+Faculty+email+their+question+paper+to+exam+department%2C+paper+is+printed+and+distributed+to+students%2C+after+evaluating+answer+sheets+faculty+mail+marks+in+online+format%2C+later+on+it+is+collated+in+result+processing+software+to+compute+the+final+result+of+a+student.+Final+result+is+shared+to+student+on+registered+mobile+number+using+online+software.+Integration+of+IT+in+examination+system+ensures+speed%2C+accuracy+and+transparency+in+the+system.Continuous+Internal+Assessment+SystemEMRC+courses+are+predominantly+based+on+skill+enhancement%2C+so+each+subject+has+a+series++of+structured+assignments+briefed+unit+wise+and+continuous+evaluation+ensures+the+level+of+skill+attained+by+an+individual+student+at+any+given+point+of+time+in+the+course.+Apart+from+three+unit+test%2C+the+regular+assignments+gives+students+an+opportunity+to+continuously+monitor+his+progress+in+a+given+course+and+based+on+teacher+feedback%2C+he+can+improve+upon+shortcoming%2C+if+any.+This+allows+students+to+trust+course+delivery+and+motivate+to+participate+in+all+activities.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_15-15-4400Sample+Document.pdf'),
('iipsdavv', 'The+examination+pattern+and+internal+assessment+of+the+students+is+done+as+per+the+ordinance+31+which+helps+in+maintaining+the+transparency+of+the+system+by+showing+the+answer+sheets+of+internal+assessments+and+end+sem+examination+to+the+students.', '', 'To+be+added');

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

--
-- Dumping data for table `t2_5_5`
--

INSERT INTO `t2_5_5` (`Username`, `v1`, `v2`, `v3`, `v4`, `v5`, `v0`) VALUES
('pranjal', 'yes', 'yes', 'yes', 'yes', 'no', 'B Only student registration, Hall ticket issue and Result Processing'),
('sostat', 'yes', 'yes', 'yes', 'yes', 'yes', 'A 100percent automation of entire division implementation of Examination Management System (EMS)'),
('soex', 'no', 'no', 'yes', 'no', 'no', 'C Only student registration and result processing'),
('sopedu', 'no', 'yes', 'yes', 'yes', 'yes', 'B Only student registration, Hall ticket issue and Result Processing'),
('imsdavv', 'yes', 'yes', 'yes', 'yes', 'yes', 'B Only student registration, Hall ticket issue and Result Processing'),
('emrcdavv', 'yes', 'yes', 'yes', 'yes', 'no', 'A 100percent automation of entire division implementation of Examination Management System (EMS)'),
('sees', 'yes', 'yes', 'yes', 'yes', 'no', 'C Only student registration and result processing'),
('doll', 'no', 'no', 'no', 'yes', 'yes', 'D Only result processing'),
('biochem', 'no', 'no', 'no', 'no', 'no', 'E Only manual methodology'),
('iipsdavv', 'no', 'yes', 'yes', 'yes', 'yes', 'E Only manual methodology'),
('chemsc', 'no', 'yes', 'yes', 'yes', 'yes', 'D Only result processing'),
('ietdavv', 'no', 'yes', 'yes', 'yes', 'no', 'B Only student registration, Hall ticket issue and Result Processing'),
('soedu', 'yes', 'yes', 'yes', 'no', 'no', 'A 100percent automation of entire division implementation of Examination Management System (EMS)');

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

--
-- Dumping data for table `t2_6_1`
--

INSERT INTO `t2_6_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('pranjal', 'sa+kahndsnaljfnsall%5E%25%24%23%40%21%29%28%2A', '', '215'),
('somath', '1.Clearing+competitive+examinations+like+NET%2C+JRF%2C+GATE%2C+SET%2C+other+examinations+for+administrative+posts.2.Getting+selected+for+Ph.D.+in+elite+institutes+like+IITs%2C+IISERs+etc.3.Getting+placement+in+local+UG%2FPG%2C+engineering+colleges.4.+Training+students+for+competitive+examinations.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F05-11-2018_12-32-28Program+outcomes+Course+outcomes+Program+specific+outcomes.pdf'),
('sopedu', 'i.The+graduates+and+postgraduates+of+the+courses+have+a+wide+range+of+opportunity+in+different+fields.+Post+Graduate+and+Ph.Ds+are+qualified+to+be+appointed+as+Teachers+and+Sports+officer+in+Universities+Colleges+and+Physical+Education+teachers+in+Schools.ii.Other+than+these+academic+opportunities+they+will+also+be+qualified+for+appointment+as+District+Sports+Officer+%2F+Regional+sports+officer+and+other+administrative+post+in+sports+department+in+Central+and+State+undertakings.+iii.These+students+are+also+eligible+to+join+different+Forces%2C+for+examples%2C+Army%2C+Police%2C+B.S.F+etc.iv.They+are+also+eligible+to+undertake+the+higher+studies+i.e.+M.Phill%2C+Ph.D+and+D.Lit.+in+the+field+of+Physical+Education+and+Sports+Sciences.v.Pass+out+students+can+also+become+health+%2F+fitness+experts+in+health+clubs+and+hospitability+industry+and+they+can+start+their+own+health+clubs.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F31-10-2018_15-50-572.6.1+Programme+Outcome.pdf'),
('biochem', 'The+M.Sc.+Biochemistry+programme+is+broad+based+for+its+applicability+to+other+disciplines%2C+which+require+biochemistry+background.+The+coverage+of+all+the+major+areas+of+biochemistry+which+includes+basic%2C+allied+and+advanced+courses+benefits+the+learner+to+achieve+their+goal+in+different+fields%2C+in+particular+Medical%2C+Agricultural%2C+Pharmaceutical%2C+Biological%2C+Food+Analysis+etc.+The+detailed+coverage+of+various+topics+helps+the+students+to+qualify+national+level+examinations.Knowledge+of+the+basic+core+courses%2C+like+Chemistry+of+biomolecules%2C+Cell+biology%2C+Analytical+biochemistry%2C+Metabolism+etc+develops+concepts+of+biochemistry+and+trains+the+learner+to+work+in+the+research+laboratories+and+research+and+development+sections+of+industries.+The+generic+courses%2C+like+Genetics%2C+Microbial+biochemistry%2C+Nutritional+biochemistry%2C+Physiology%2C+Clinical+biochemistry+etc+provide+the+knowledge+of+biochemistry+related+disciplines+such+as%2C+industrial+and+medicinal+fields.+The+other+core+courses+Enzymology%2C+Immunology%2C+Molecular+Biology%2C+Biotechnology+covered+in+the+curriculum+have+applicability+in+almost+all+the+research+laboratories+and+industries.+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F10-11-2018_12-53-26QlM+2.6.1.docx'),
('', 'Descriptive+Text+here', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_15-15-4400Sample+Document.pdf'),
('chemsc', 'Programme+outcomes+%28POs%29++++++Learning+objectives+of+School+of+Chemical+Sciences+essentially+focus+on+creative+learning+of+the+students+with+a+view+to+empower+them+with+contemporary+knowledge+domain+so+as+to+enhance+connectivity+thereof+towards+academic+and+industrial+institutions.+Programme+outcomes+basically+aim+at+incorporation+of+chemical+sciences+in+the+mindset+of+students+in+an+embedded+state.+With+such+association%2C+students+are+expected+to+improve+their+critical+thinking%2C+accommodating+both+logical+and+intuitive+approaches.+With+immense+association+of+scientific+approaches%2C+new+ideas+may+creep+in+the+mind+of+students+so+that+they+can+evolve+innovative+pathways.+Programme+specific+outcomes+%28PSOs%29+-Programme+specific+outcomes+pertain+to+the+exploration+of+knowledge+of+chemical+sciences+with+related+disciplines+in+particular+knowledge+of+synthetic+methods%2C+knowledge+and+application+of+analytical+techniques+with+the+specific+orientation+to+pharmaceutical+industries.+Course+outcomes+%28COs%29+%96++Course+outcomes+essentially+envision+diverse+aspects+of+chemical+sciences.+They+provide+due+priority+to+classification+mindset+rather+than+compartmentalization+mindset+and+interdependence+of+one+segment+over+the+other.+Consequently%2C+students+orient+themselves+as+pro-active+learners+with+high+priority+on+modern+areas+of+chemical+sciences+including+spectroscopic+techniques%2C+chromatographic+techniques+and+medicinal+chemistry%2C+thereby+enhancing+their+problem-+solving+skills.+Spectral+interpretation+indeed+is+a+unique+practice+prevalent+in+School+of+Chemical+Sciences.+Students+are+encouraged+to+adopt+GREEN+CHEMISTRY+whenever+possible+with+a+sound+objective+of+ensuring+environmentally+sustainable+approach+towards+society.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F14-11-2018_21-20-522.6.1+POs.docx'),
('doll', 'Program+Outcomes%3A+Students+learnt+to+use+space+according+to+need+and++vastu+and+where+to+furniture+and+other+things+accordingly.+They+also+learnt+about+the+directions+and+how+to+use+them.Better+understanding+of+space+lay+out+and+designing+interiors+for+different+places.+A+good+coordination+was+established+among+students+of+all+batches.+Seniors+were+instructors+and+juniors+were+participants%2C+they+did+a+great+team+work+with+discipline.Students+got+idea+to+design+interior+of+houses%2C+shops.+Companies+etc.Beautiful+articles+were+created+using+the+items+that+would+have+just+created+garbage.+Many+innovative+ideas+also+came+out+of+the+program+in+DIY+sessions.Participants+developed+better+sketching+skills.+Students+did+paintings+on+the+walls+of+department+and+made+them+beautiful', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F15-11-2018_13-32-57000.docx'),
('emrcdavv', 'Descriptive+Text+here', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_15-15-4400Sample+Document.pdf');

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

--
-- Dumping data for table `t2_6_2`
--

INSERT INTO `t2_6_2` (`Username`, `Description`, `File_name`, `Link`) VALUES
('pranjal', 'dskflha', '', '3sf432sa13'),
('sopedu', 'i.The+syllabus+of+the+courses+is+designed+to+target+aspects+of+basic+concepts%2C+advance+course+and+subject%92s+components+and+employability.ii.We+access+our+students+in+form+of+practical+performance%2C+written+examination%2C+discussions+and+power+point+based+presentations+delivered+by+students+followed+by+viva-voce.iii.These+criteria+provide+overall+personality+and+intellectual+assessment+of+the+students.++We+are+success+on+the+intended+outcomes%2C+as+most+of+our+students+pursuing+higher+education+and+research+and+few+are+serving+government+sector+and+public+services.iv.Feedback+from+eminent+experts%2C+alumni%2C+employers+and+parents+are+regularly+taken+and+the+opinion+helps+in+quality+sustenance.+v.The+tasks+forces+have+been+set+up+for+the+students%92+performance+learning+outcomes+are+constantly+showing+improvement.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F31-10-2018_16-41-302.6.2+course+outcomes+evaluated.pdf'),
('emrcdavv', 'Descriptive+Text+Here', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F03-11-2018_15-15-4400Sample+Document.pdf'),
('somath', 'Course+outcomes+are+evaluated+through+tests+and+examinations.Program+outcomes+and+program+specific+outcomes+are+evaluated+on+the+basis+of+%28i%29+students+clearing+competitive+examinations+like+NET%2C+GATE%2C+SET%2C+civil+services+etc.%2C%28ii%29+the+nature+of+positions++alumni+of+the+department+occupy+in+various+organisations+like+elite+research+institutes%2C+universities%2C+govt+undertakings.+For+a+glimpse+follow+the++link+provided+below.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F06-11-2018_14-11-16Distinguished+Alimni+List.pdf'),
('biochem', 'Biochemistry+is+mainly+a+research+field+and+after+postgraduation%2C+the+students+have+opportunity+to+join+Ph.D.+programme.+The+students+may+find+opportunities+in+pharmaceutical+and+food+industries%2C+bioinformatics%2C+medical+fields+etc.+The+students+are+encouraged+to+join+national+level+research+institutes+for+their+project+work+so+as+to+continue+in+the+same+field+after+course+completion.+The+school+provides+all+possible+help+to+the+students+including+to+train+them+in+subject+and+to+facilitate+their+progression.+This+is+being+reflected+by+selection+in+national+and+international+qualifying+examinations%2C+NET%2C+GATE%2C+SLET%2C+GRE%2FTOEFEL%2FGMAT+etc.', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F10-11-2018_12-54-26QlM+2.6.2.docx'),
('chemsc', 'Attainment+of+Program+Educational+Objectives+%28PEOs%29+is+measured+through+Alumni+surveys.+Questionnaires+are+prepared+which+elicits+information+for+alumni+directly+and+indirectly.+This+feedback+is+analyzed+at+the+department+level+and+level+of+attainment+is+measured.Student+outcomes+%28SOs%29+and+Instructional+Objectives+%28IOs%29+are+measured+both+directly+and+indirectly.+Direct+method+involves+student+grades+and+indirect+method+involves+getting+feedback+from+students+on+SOs+and+IOs.The+attainment+levels+are+currently+fixed+at+80%25+positive+feedback+', '', 'http%3A%2F%2Fuid.dauniv.ac.in%2FNAC%2Fprofile%2Fdocs%2F14-11-2018_22-12-262.6.2+Attainment+of+Program+Outcomes.docx');

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

--
-- Dumping data for table `t2_6_3`
--

INSERT INTO `t2_6_3` (`Username`, `Prog_code`, `Prog_name`, `Total_Students`, `Passed_students`, `id_time`) VALUES
('pranjal', 'TESTINGP1', 'TESTING NAME 1 NAME', 25, 52, 'id1540660621542'),
('sostat', 'ST5A', 'M.Sc. Statistics', 16, 16, 'id1540897740043'),
('soex', 'EL7A', 'M.Tech Embedded Systems', 16, 16, 'id1540897618311'),
('soex', 'EL7C', 'M.Tech Mobile Computing Technology', 10, 10, 'id1540897622119'),
('soex', 'EL5A', 'M.Sc Electronics', 5, 5, 'id1540897628271'),
('soex', 'EL9Z', 'Ph.D.', 2, 2, 'id1540897636647'),
('somath', 'MT5A', 'M.Sc.(Mathematics)', 34, 32, 'id1540900569428'),
('sees', 'EN7A', 'M.Tech.(Energy Managment)-Regular', 9, 8, 'id1541227219409'),
('sees', 'EN5A', 'M.B.A (Energy Management) Distance', 6, 6, 'id1541238257998'),
('sees', 'EN8X', 'M.Phil.', 0, 0, 'id1541238267659'),
('emrcdavv', 'EM5A', 'M.B.A. Media Management', 42, 42, 'idid1541238908001'),
('emrcdavv', 'EM6A', 'M.Sc. EM', 55, 52, 'idid1541238901769'),
('doll', 'LE2A', 'Diploma in Interior Designing', 17, 14, 'id1541362536999'),
('doll', 'LE4A', 'B. Voc. Interior Design', 38, 28, 'id1541362598186'),
('doll', 'LE4B', 'B.Voc. Fashion Technology', 8, 4, 'id1541362635343'),
('biochem', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 24, 24, 'id1541752507600'),
('biochem', 'BC9Z', 'Ph.D', 3, 3, 'id1541752544080'),
('iipsdavv', 'PS4A', 'BCom(Hons)', 60, 60, 'id1542208205273'),
('iipsdavv', 'PS6A', 'MCA(6yr)', 38, 38, 'id1542208207523'),
('iipsdavv', 'PS6B', 'M.Tech. (IT)', 60, 60, 'id1542208208883'),
('iipsdavv', 'PS5C', 'MBA (Tour)', 34, 34, 'id1542208210269'),
('iipsdavv', 'PS5B', 'MBA (APR)', 38, 38, 'id1542208215654'),
('iipsdavv', 'PS6C', 'MBA (MS) 5 Yrs', 67, 67, 'id1542208221192'),
('iipsdavv', 'PS5A', 'MBA (MS) 2yrs', 60, 60, 'id1542208223064'),
('chemsc', 'CH5A', 'M.Sc. Chemistry', 36, 36, 'id1542214112803'),
('chemsc', 'CH5B', 'M.Sc. Pharmaceutical Chemistry', 13, 13, 'id1542214138444'),
('sopharma', 'PY4A', 'B.Pharm.', 60, 57, 'id1542270646022'),
('sopharma', 'PY7A', 'M.Pharm.', 8, 8, 'id1542270657753'),
('Sopedu', 'PE4A', 'B.P.E.S.', 39, 37, 'idid1540984634813'),
('Sopedu', 'PE8X', 'M.Phil.', 30, 30, 'idid1540984856237'),
('Sopedu', 'PE9Z', 'Ph.D.', 7, 7, 'idid1540984914351');

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

--
-- Dumping data for table `t2_7_1`
--

INSERT INTO `t2_7_1` (`Username`, `Student_Name`, `Gender`, `Category`, `State_of_Domicile`, `Nationality`, `Email_ID`, `Prog_code`, `Prog_name`, `Enrollment_ID`, `Mobile_No`, `Year`, `id_time`) VALUES
('pranjal', 'hdslghs;d', 'sakfhj', 'sd', '356', '3', 'sida', 'TESTINGP1', 'TESTING NAME 1 NAME', '25', '8109924919', 'July 14 - June 15', 'id1540660648173'),
('soex', 'HARSHITA JAIN', 'Female', 'UR', 'MP', 'Indian', 'jainharshita275@gmail.com', 'EL7A', 'M.Tech Embedded Systems', '18MTES05', '9116223802', 'July 18 - June 19', 'id1540885859196'),
('soex', 'ANKITA MODI', 'Female', 'UR', 'MP', 'Indian', 'ankitamodi334@gmail.com', 'EL7A', 'M.Tech Embedded Systems', '18MTES04', '8989104334', 'July 18 - June 19', 'id1540885798506'),
('soex', 'AKSHAY SEN', 'Male', 'OBC', 'MP', 'Indian', 'sen.akshay.kumar@gmail.com', 'EL7A', 'M.Tech Embedded Systems', '18MTES03', '8982921292', 'July 18 - June 19', 'id1540885611179'),
('soex', 'AISHVARY MANVE', 'Male', 'OBC', 'MP', 'Indian', 'amanve23@gmail.com', 'EL7A', 'M.Tech Embedded Systems', '18MTES02', '7898145240', 'July 18 - June 19', 'id1540885610379'),
('soex', 'ABHIJEET SINGH', 'Male', 'UR', 'MP', 'Indian', 'abhijeets682@gmail.com', 'EL7A', 'M.Tech Embedded Systems', '18MTES01', '8962169315', 'July 18 - June 19', 'id1540885609611'),
('soex', 'RATNESH MAGGAR', 'Male', 'OBC', 'MP', 'Indian', 'ratneshmaggar77@gmail.com', 'EL5B', 'M.Sc Electronics & Communication', '18ECN03', '9039223581', 'July 18 - June 19', 'id1540885606260'),
('soex', 'UMASHANKARI DHAKAD ', 'Female', 'OBC', 'MP', 'Indian', 'umadhakar5596@gmail.com ', 'EL5B', 'M.Sc Electronics & Communication', '18ECN04', '7357389891', 'July 18 - June 19', 'id1540885607211'),
('soex', 'AKASH SARKAR', 'Male', 'OBC', 'MP', 'Indian', 'sarkarakash493@gmail.com', 'EL5B', 'M.Sc Electronics & Communication', '18ECN01', '9993652436', 'July 18 - June 19', 'id1540884909877'),
('sopedu', 'PRADIP AGRAHARIYA ', 'M', 'SC', 'MP', 'INDIAN', 'pradeepjatav2721@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7987917349', 'July 18 - June 19', 'idid1541230400802'),
('sopedu', 'PRAGYEY VERMA ', 'M', 'SC', 'MP', 'INDIAN', 'pragyey.verma@yahoo.com', 'PE4A', 'B.P.E.S.', '0', '9977333997', 'July 18 - June 19', 'idid1541230401571'),
('sostat', 'Salonee Tare', 'F', 'GEN', 'MP', 'Indian', 'salonitare97@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1413685', '9993055976', 'July 17 - June 18', 'id1542178994563'),
('sostat', 'Shreya Khawle', 'F', 'SC', 'MP', 'Indian', 'shreyakhawle95@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1700005', '7974787970', 'July 17 - June 18', 'id1542178995395'),
('sopedu', 'LOKESH SHAH KUMRE  ', 'M', 'ST', 'MP', 'INDIAN', 'lokeshshahkumre750@gmail.com', 'PE4A', 'B.P.E.S.', '0', '6260828030', 'July 18 - June 19', 'idid1541228870879'),
('sopedu', 'LOKENDRA MEHDA ', 'M', 'ST', 'MP', 'INDIAN', 'sonumehda008@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8458968965', 'July 18 - June 19', 'idid1541228870095'),
('sopedu', 'LALSINGH CHOUHAN ', 'M', 'SC', 'MP', 'INDIAN', 'lalsingh@gmail.com', 'PE4A', 'B.P.E.S.', '0', '0', 'July 18 - June 19', 'idid1541228869279'),
('sopedu', 'HIMANI VERMA ', 'F', 'GEN', 'MP', 'INDIAN', 'coolhimaniver@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9575055087', 'July 18 - June 19', 'idid1541228712915'),
('sopedu', 'JAMUSINGH DAMOR ', 'M', 'ST', 'MP', 'INDIAN', 'jamusingh22@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7909667649', 'July 18 - June 19', 'idid1541228714091'),
('sopedu', 'JITENDRA CHOUHAN ', 'M', 'SC', 'MP', 'INDIAN', 'jitsingh8652@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8461946159', 'July 18 - June 19', 'idid1541228868319'),
('sopedu', 'JITENDRA KANESH ', 'M', 'SC', 'MP', 'INDIAN', 'jkanesh@gmail.com', 'PE4A', 'B.P.E.S.', '0', '0', 'July 18 - June 19', 'idid1541228860046'),
('sopedu', 'HARSHIT MAHESHWARI', 'M', 'GEN', 'MP', 'INDIAN', 'hmharshit123@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9074895833', 'July 18 - June 19', 'idid1541228610326'),
('sopedu', 'HEMANT KAWADKAR ', 'M', 'OBC', 'MP', 'INDIAN', 'hemantkawadkar008@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8717872989', 'July 18 - June 19', 'idid1541228711573'),
('sopedu', 'DEEPIKA DHANKA ', 'F', 'GEN', 'MP', 'INDIAN', 'dhankadeepika17@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7389431074', 'July 18 - June 19', 'ididid1541143760912'),
('sopedu', 'DHEERAJ GOYAL ', 'M', 'GEN', 'MP', 'INDIAN', 'dheerajrocks1111@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9685052522', 'July 18 - June 19', 'ididid1541143765959'),
('sopedu', 'DURGA SOLANKI ', 'F', 'ST', 'MP', 'INDIAN', 'durgadassolanki1999@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9926281948', 'July 18 - June 19', 'ididid1541143769717'),
('sopedu', 'DARSHNA PACHORI ', 'F', 'SC', 'MP', 'INDIAN', 'darshanapachori@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9893524100', 'July 18 - June 19', 'ididid1541143756656'),
('sopedu', 'BRIJPAL SINGH ', 'M', 'GEN', 'MP', 'INDIAN', 'doidiyabraj2@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9179457351', 'July 18 - June 19', 'ididid1541143751467'),
('sopedu', 'PRIYANKA THAKUR ', 'F', 'GEN', 'MP', 'INDIAN', 'priyankathakur2504@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9685082425', 'July 18 - June 19', 'idid1541230403116'),
('sopedu', 'PRAKASH NARGESH ', 'M', 'ST', 'MP', 'INDIAN', 'prakashnargesh@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8963919517', 'July 18 - June 19', 'idid1541230402360'),
('sopedu', 'NIMISHA RAJPUT ', 'F', 'GEN', 'MP', 'INDIAN', 'nimisharaput2756@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9131600281', 'July 18 - June 19', 'idid1541230399112'),
('sopedu', 'PARTH SARWAN ', 'M', 'SC', 'MP', 'INDIAN', 'parthhockey999@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9630990725', 'July 18 - June 19', 'idid1541230399978'),
('sopedu', 'AAKASH TRIPATHI ', 'M', 'GEN', 'MP', 'INDIAN', 'anshuaakash1234@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7000607815', 'July 18 - June 19', 'ididididid1541063067917'),
('sopedu', 'AJAY JAISWAL ', 'M', 'OBC', 'MP', 'INDIAN', 'ajayjaiswalindore@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9993138889', 'July 18 - June 19', 'idididid1541141648483'),
('sopedu', 'NIKITA YADAV ', 'F', 'OBC', 'MP', 'INDIAN', 'nktydv01@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9165622381', 'July 18 - June 19', 'idid1541230396241'),
('sopedu', 'NILESH SANKAT ', 'M', 'SC', 'MP', 'INDIAN', 'nileshsankat2111@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9644094921', 'July 18 - June 19', 'idid1541230398081'),
('sopedu', 'AKSHAY MAKKAD', 'M', 'GEN', 'MP', 'INDIAN', 'akshaymakkad416@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7697916709', 'July 18 - June 19', 'ididid1541143697249'),
('sopedu', 'AJIT SINGH ', 'M', 'GEN', 'MP', 'INDIAN', 'singhajit8042@gmail.com', 'PE4A', 'B.P.E.S.', '0', '6261133494', 'July 18 - June 19', 'ididid1541143578350'),
('sopedu', 'ANSHUL PATEL ', 'M', 'OBC', 'MP', 'INDIAN', 'anshulpatel1616@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9074861468', 'July 18 - June 19', 'ididid1541143724916'),
('sopedu', 'AAKASH PATEL ', 'M', 'OBC', 'MP', 'INDIAN', 'ap506322@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9171668606', 'July 18 - June 19', 'ididid1541143696031'),
('sopedu', 'AKSHITA SIRSIYA ', 'F', 'SC', 'MP', 'INDIAN', 'akshitasirsiya@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7566858130', 'July 18 - June 19', 'ididid1541143722669'),
('sopedu', 'ANIL CHOUHAN ', 'M', 'OBC', 'MP', 'INDIAN', 'anil.chouhan.311056@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9993559304', 'July 18 - June 19', 'ididid1541143723792'),
('sopedu', 'ANSUL HARDIYA ', 'M', 'OBC', 'MP', 'INDIAN', 'anshulhardia.777@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9179777064', 'July 18 - June 19', 'ididid1541143729903'),
('sopedu', 'ASHUTOSH MUKATI ', 'M', 'OBC', 'MP', 'INDIAN', 'ashutoshmukati6@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9131123445', 'July 18 - June 19', 'ididid1541143732756'),
('sopedu', 'MONIKA PATEL ', 'F', 'OBC', 'MP', 'INDIAN', 'mp.moniii67@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9111421468', 'July 18 - June 19', 'idid1541228872031'),
('sopedu', 'BANTU PARMAR ', 'M', 'ST', 'MP', 'INDIAN', 'bantuparmar821@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7389648817', 'July 18 - June 19', 'ididid1541143746401'),
('sopedu', 'AZIM KHAN PATHAN ', 'M', 'OBC', 'MP', 'INDIAN', 'azimp1896@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8770549854', 'July 18 - June 19', 'ididid1541143742076'),
('sostat', 'Prafful Sharma', 'M', 'OBC', 'MP', 'Indian', 'pawan261196@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1403111', '8718001355', 'July 17 - June 18', 'id1542178021671'),
('sostat', 'Ankit Sharma', 'M', 'GEN', 'MP', 'Indian', 'ankit3616.as@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1700002', '7024438908', 'July 17 - June 18', 'id1542178003336'),
('sostat', 'Ankita Soni', 'F', 'OBC', 'MP', 'Indian', 'ankitasoni3003@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1311567', '8120443806', 'July 17 - June 18', 'id1542178004568'),
('sostat', 'Apoorva Bhargava', 'F', 'GEN', 'MP', 'Indian', 'apoorvabha22@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1412762', '9425176287', 'July 17 - June 18', 'id1542178005695'),
('sostat', 'Astha Jain', 'F', 'GEN', 'MP', 'Indian', 'jainrimi255@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1700003', '7694066732', 'July 17 - June 18', 'id1542178006767'),
('sopedu', 'AYUSH RAJ ANTHONY ', 'M', 'GEN', 'MP', 'INDIAN', 'ayushanthony107@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9575538474', 'July 18 - June 19', 'ididid1541143737139'),
('sopedu', 'MONIKA RATAN VASAVE ', 'F', 'ST', 'MP', 'INDIAN', 'monuvasave4545@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7697111594', 'July 18 - June 19', 'idid1541230395368'),
('sostat', 'Ranveer Singh Barsensa', 'M', 'SC', 'MP', 'Indian', 'ranveerbarsena@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1312371', '8982762575', 'July 17 - June 18', 'id1542178972939'),
('sostat', 'Nikita Joshi', 'F', 'GEN', 'MP', 'Indian', 'nikitajoshi116@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1413348', '8982406700', 'July 17 - June 18', 'id1542178020512'),
('sostat', 'Kiran Malukani', 'F', 'GEN', 'MP', 'Indian', 'malukani123@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1413142', '9039288369', 'July 17 - June 18', 'id1542178019736'),
('sostat', 'Geetanjali Puranik', 'F', 'GEN', 'MP', 'Indian', 'business.geetanjali@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1412995', '7566660515', 'July 17 - June 18', 'id1542178018639'),
('sostat', 'Tanushree Desh Pande', 'F', 'GEN', 'MP', 'Indian', 'deshpande.tanu21@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1001429', '9584593380', 'July 14 - June 15', 'idididididididid1541153504510'),
('sostat', ' Anjali Raghuvanshi', 'F', 'GEN', 'MP', 'Indian', 'anjuraghuvanshi26@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1311551', '9981950179', 'July 16 - June 17', 'ididididididid1541232000172'),
('sostat', 'Arpita Yadav', 'F', 'OBC', 'MP', 'Indian', 'arpitayadav13128@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1311593', '9424540726', 'July 16 - June 17', 'ididididididid1541232001117'),
('sostat', 'Mohini Yadav', 'F', 'OBC', 'MP', 'Indian', 'yadav.mohini60@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1312050', '7509769544', 'July 16 - June 17', 'ididididid1541400466176'),
('sostat', 'Shubam Verma ', 'M', 'ST', 'MP', 'Indian', 'shuvinsh3095@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1291321', '8269236680', 'July 16 - June 17', 'id1542177786311'),
('sostat', 'Varsha Mishra', 'F', 'GEN', 'MP', 'Indian', 'varshamishra928@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1312689', '9584832918', 'July 16 - June 17', 'id1542177866768'),
('sostat', 'Yogita Mourya', 'F', 'SC', 'MP', 'Indian', 'yogimourya06@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1312761', '9826094690', 'July 16 - June 17', 'id1542177925615'),
('sostat', 'Akshay Asati', 'M', 'GEN', 'MP', 'Indian', 'akshay.asati08@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1700001', '8982136435', 'July 17 - June 18', 'id1542177999623'),
('sostat', 'Anjali Mangrola', 'F', 'OBC', 'MP', 'Indian', 'anjali.mangrola@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1412723', '9669253789', 'July 17 - June 18', 'id1542178001936'),
('sostat', 'Urvashi Mourya', 'F', 'OBC', 'MP', 'Indian', 'er.deeplourya@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1001440', '9977894206', 'July 14 - June 15', 'idididididididid1541153871325'),
('sostat', 'Vikas Pandey', 'M', 'GEN', 'MP', 'Indian', 'mikita.pandey@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1105055', '977414267', 'July 14 - June 15', 'idididididididid1541153949331'),
('sostat', 'Supriya Agrawal', 'F', 'GEN', 'MP', 'Indian', 'agrawalsupriya25@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS116086', '8718006801', 'July 14 - June 15', 'idididididididid1541153503462'),
('sostat', 'Sunil Gujarwadiya', 'M', 'SC', 'MP', 'Indian', 'NO', 'ST5A', 'M.Sc. Statistics', 'DS1102583', '9713880981', 'July 14 - June 15', 'idididididididid1541153501980'),
('sostat', 'Kirti Dhruw', 'F', 'ST', 'MP', 'Indian', 'kirtidhruw7@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS115442', '8251029997', 'July 14 - June 15', 'ididididididididid1541152385360'),
('sostat', 'Nikita Kose', 'F', 'OBC', 'MP', 'Indian', 'NO', 'ST5A', 'M.Sc. Statistics', 'DS115607', '992610788', 'July 14 - June 15', 'ididididididididid1541152519847'),
('sostat', 'Rupali Rani Kaushik', 'F', 'OBC', 'MP', 'Indian', 'rupalicpie@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS119893', '9406546700', 'July 14 - June 15', 'ididididididididid1541152916166'),
('sostat', 'Karuna Chouhan', 'F', 'SC', 'MP', 'Indian', 'NO', 'ST5A', 'M.Sc. Statistics', 'DS115425', '9074997179', 'July 14 - June 15', 'ididididididididid1541152275671'),
('sostat', 'Sudhir Bhaderiya', 'M', 'OBC', 'MP', 'Indian', 'sudhirbha143@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1102611', '9713654143', 'July 14 - June 15', 'idididididididid1541153420229'),
('Sopedu', 'AAKASH TRIPATHI ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'anshuaakash1234@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7000607815', 'July 18 - June 19', 'sopeduid1'),
('Sopedu', 'AJAY JAISWAL ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'ajayjaiswalindore@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9993138889', 'July 18 - June 19', 'sopeduid2'),
('Sopedu', 'AJIT SINGH ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'singhajit8042@gmail.com', 'PE4A', 'B.P.E.S.', '0', '6261133494', 'July 18 - June 19', 'sopeduid3'),
('Sopedu', 'AAKASH PATEL ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'ap506322@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9171668606', 'July 18 - June 19', 'sopeduid4'),
('Sopedu', 'AKSHAY MAKKAD ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'akshaymakkad416@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7697916709', 'July 18 - June 19', 'sopeduid5'),
('Sopedu', 'AKSHITA SIRSIYA ', 'FEMALE', 'SC', 'M.P.', 'INDIAN', 'akshitasirsiya@gmail.com', 'PE4A', 'B.P.E.S.', '0', '756685813', 'July 18 - June 19', 'sopeduid6'),
('Sopedu', 'ANIL CHOUHAN ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'anil.chouhan.311056@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9993559304', 'July 18 - June 19', 'sopeduid7'),
('Sopedu', 'ANSHUL PATEL ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'anshulpatel1616@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9074861468', 'July 18 - June 19', 'sopeduid8'),
('Sopedu', 'ANSUL HARDIYA ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'anshulhardia.777@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9179777064', 'July 18 - June 19', 'sopeduid9'),
('Sopedu', 'ASHISH SINGH ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'ashishrsingh@gmail.com', 'PE4A', 'B.P.E.S.', '0', '', 'July 18 - June 19', 'sopeduid10'),
('Sopedu', 'ASHUTOSH MUKATI ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'ashutoshmukati6@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9131123445', 'July 18 - June 19', 'sopeduid11'),
('Sopedu', 'AYUSH RAJ ANTHONY ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'ayushanthony107@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9575538474', 'July 18 - June 19', 'sopeduid12'),
('Sopedu', 'AZIM KHAN PATHAN ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'azimp1896@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8770549854', 'July 18 - June 19', 'sopeduid13'),
('Sopedu', 'BANTU PARMAR ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'bantuparmar821@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7389648817', 'July 18 - June 19', 'sopeduid14'),
('Sopedu', 'BRIJPAL SINGH ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'doidiyabraj2@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9179457351', 'July 18 - June 19', 'sopeduid15'),
('Sopedu', 'DARSHNA PACHORI ', 'FEMALE', 'SC', 'M.P.', 'INDIAN', 'darshanapachori@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9893524100', 'July 18 - June 19', 'sopeduid16'),
('Sopedu', 'DEEPIKA DHANKA ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'dhankadeepika17@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7389431074', 'July 18 - June 19', 'sopeduid17'),
('Sopedu', 'DHEERAJ GOYAL ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'dheerajrocks1111@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9685052522', 'July 18 - June 19', 'sopeduid18'),
('Sopedu', 'DURGA SOLANKI ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'durgadassolanki1999@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9926281948', 'July 18 - June 19', 'sopeduid19'),
('Sopedu', 'HARSHIT MAHESHWARI ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'hmharshit123@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9074895833', 'July 18 - June 19', 'sopeduid20'),
('Sopedu', 'HEMANT KAWADKAR ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'hemantkawadkar008@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8717872989', 'July 18 - June 19', 'sopeduid21'),
('Sopedu', 'HIMANI VERMA ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'coolhimaniver@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9575055087', 'July 18 - June 19', 'sopeduid22'),
('Sopedu', 'JAMUSINGH DAMOR ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'jamusingh22@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7909667649', 'July 18 - June 19', 'sopeduid23'),
('Sopedu', 'JITENDRA KANESH ', 'MALE', '', '', 'INDIAN', '', 'PE4A', 'B.P.E.S.', '0', '', 'July 18 - June 19', 'sopeduid24'),
('Sopedu', 'JITENDRA CHOUHAN ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'jitsingh8652@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8461946159', 'July 18 - June 19', 'sopeduid25'),
('Sopedu', 'LALSINGH CHOUHAN ', 'MALE', '', '', 'INDIAN', '', 'PE4A', 'B.P.E.S.', '0', '', 'July 18 - June 19', 'sopeduid26'),
('Sopedu', 'LOKENDRA MEHDA ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'sonumehda008@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8458968965', 'July 18 - June 19', 'sopeduid27'),
('Sopedu', 'LOKESH SHAH KUMRE  ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'lokeshshahkumre750@gmail.com', 'PE4A', 'B.P.E.S.', '0', '6260828030', 'July 18 - June 19', 'sopeduid28'),
('Sopedu', 'MONIKA PATEL ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'mp.moniii67@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9111421468', 'July 18 - June 19', 'sopeduid29'),
('Sopedu', 'MONIKA RATAN VASAVE ', 'FEMALE', 'ST', 'M.P.', 'INDIAN', 'monuvasave4545@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7697111594', 'July 18 - June 19', 'sopeduid30'),
('Sopedu', 'NIKITA YADAV ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'nktydv01@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9165622381', 'July 18 - June 19', 'sopeduid31'),
('Sopedu', 'NILESH DUBGE ', 'MALE', '', '', 'INDIAN', 'leave the course', 'PE4A', 'B.P.E.S.', '0', '', 'July 18 - June 19', 'sopeduid32'),
('Sopedu', 'NILESH SANKAT ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'nileshsankat2111@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9644094921', 'July 18 - June 19', 'sopeduid33'),
('Sopedu', 'NIMISHA RAJPUT ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'nimisharaput2756@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9131600281', 'July 18 - June 19', 'sopeduid34'),
('Sopedu', 'PARTH SARWAN ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'parthhockey999@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9630990725', 'July 18 - June 19', 'sopeduid35'),
('Sopedu', 'PRADIP AGRAHARIYA ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'pradeepjatav2721@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7987917349', 'July 18 - June 19', 'sopeduid36'),
('Sopedu', 'PRAGYEY VERMA ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'pragyey.verma@yahoo.com', 'PE4A', 'B.P.E.S.', '0', '9977333997', 'July 18 - June 19', 'sopeduid37'),
('Sopedu', 'PRAKASH NARGESH ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'prakashnargesh@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8963919517', 'July 18 - June 19', 'sopeduid38'),
('Sopedu', 'PRIYANKA THAKUR ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'priyankathakur2504@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9685082425', 'July 18 - June 19', 'sopeduid39'),
('Sopedu', 'PUSHPA WASKALE ', 'FEMALE', 'ST', 'M.P.', 'INDIAN', 'pushpawaskale111@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9644898139', 'July 18 - June 19', 'sopeduid40'),
('Sopedu', 'RADHA ASHKE ', 'FEMALE', 'ST', 'M.P.', 'INDIAN', 'radhaaske562@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9981924633', 'July 18 - June 19', 'sopeduid41'),
('Sopedu', 'RAHBAR SHAIKH ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'goluhashmi786@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7869282194', 'July 18 - June 19', 'sopeduid42'),
('Sopedu', 'RAHUL PRAJAPAT', 'MALE', '', '', 'INDIAN', 'leave the course', 'PE4A', 'B.P.E.S.', '0', '', 'July 18 - June 19', 'sopeduid43'),
('Sopedu', 'REENA BAGHEL ', 'FEMALE', 'ST', 'M.P.', 'INDIAN', 'reenanetballbaghel99@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8305982332', 'July 18 - June 19', 'sopeduid44'),
('Sopedu', 'REENA JAISWAL ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'reenajaiswal8188@gmail.com', 'PE4A', 'B.P.E.S.', '0', '6260758158', 'July 18 - June 19', 'sopeduid45'),
('Sopedu', 'RISHABH TRIPATHI ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'rishabhpandit143@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7389034866', 'July 18 - June 19', 'sopeduid46'),
('Sopedu', 'RISHI SINGH ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'imrishisingh07@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7509886919', 'July 18 - June 19', 'sopeduid47'),
('Sopedu', 'RITIK CHOUHAN ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'ritikchouhan30@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9993166323', 'July 18 - June 19', 'sopeduid48'),
('Sopedu', 'RITIKA MAKASHRE ', 'FEMALE', 'SC', 'M.P.', 'INDIAN', 'ritikamakashre123@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8827908598', 'July 18 - June 19', 'sopeduid49'),
('Sopedu', 'ROHIT SHARMA ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'rohit.ssss23@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9993253768', 'July 18 - June 19', 'sopeduid50'),
('Sopedu', 'SAHIL CHOUDHARY ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'ajbhai547@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7746000940', 'July 18 - June 19', 'sopeduid51'),
('Sopedu', 'SANDEEP SINGH CHOUHAN ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'sandeepsingh29041999@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8602413710', 'July 18 - June 19', 'sopeduid52'),
('Sopedu', 'SANJANA SINGH PARMAR ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'sanjanaparmar40@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7566698575', 'July 18 - June 19', 'sopeduid53'),
('Sopedu', 'SHAIJAL GEHLOT ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'shaijalgehlot24@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9993300873', 'July 18 - June 19', 'sopeduid54'),
('Sopedu', 'SHALINI KEER ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'keerak51@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7000391596', 'July 18 - June 19', 'sopeduid55'),
('Sopedu', 'SHIVAM BADRI VARFA ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'shivamvarfa19@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8224967331', 'July 18 - June 19', 'sopeduid56'),
('Sopedu', 'SHIVAM SONI ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'sonijishivam007@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9906601759', 'July 18 - June 19', 'sopeduid57'),
('Sopedu', 'SHREYA SONAWA ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'shreyasonava@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7773095388', 'July 18 - June 19', 'sopeduid58'),
('Sopedu', 'SUDESH PATIDAR ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'sudesh03patidar@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9630965956', 'July 18 - June 19', 'sopeduid59'),
('Sopedu', 'SUMAHIYA YADAV ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'prashita19yadav@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9584280104', 'July 18 - June 19', 'sopeduid60'),
('Sopedu', 'SUMMIT CHOUHAN ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'sc84866@gmail.com', 'PE4A', 'B.P.E.S.', '0', '6263529134', 'July 18 - June 19', 'sopeduid61'),
('Sopedu', 'SURAJ KARMA ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'surukarma09@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9977286068', 'July 18 - June 19', 'sopeduid62'),
('Sopedu', 'TEJSINGH PAWAR  ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'tejsinghpanwar777@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7772862031', 'July 18 - June 19', 'sopeduid63'),
('Sopedu', 'TITIKSHA PANWAR ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'titiksha18panwar@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7222991305', 'July 18 - June 19', 'sopeduid64'),
('Sopedu', 'VAISHALI ANIYA ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'aniyaganeshi@gmail.com', 'PE4A', 'B.P.E.S.', '0', '8839055995', 'July 18 - June 19', 'sopeduid65'),
('Sopedu', 'VIKALP BOHARE ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'vikalpbohare@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9630263064', 'July 18 - June 19', 'sopeduid66'),
('Sopedu', 'HARSH BIRLA ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'harsh46birla@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9111631312', 'July 18 - June 19', 'sopeduid67'),
('Sopedu', 'RITESH KHANNA ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'riteshkhanna.1432@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7000030617', 'July 18 - June 19', 'sopeduid68'),
('Sopedu', 'SIMRAN SHARMA ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'simransharma04327@gmail.com', 'PE4A', 'B.P.E.S.', '0', '7869602316', 'July 18 - June 19', 'sopeduid69'),
('Sopedu', 'RAVI PALSAWDIYA ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'ravipalsawdiya91650@gmail.com', 'PE4A', 'B.P.E.S.', '0', '9165010977', 'July 18 - June 19', 'sopeduid70'),
('Sopedu', 'AASHUTOSH SONARTIYA ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'ashutoshsonartiya99@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700570', '6263366433', 'July 17 - June 18', 'sopeduid71'),
('Sopedu', 'AKASH KUMBHKAR ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'akashkumbhkar@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700307', '7047709945', 'July 17 - June 18', 'sopeduid72'),
('Sopedu', 'AKSHANSH SAHU ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'akshanshsahu847@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700116', '9977127349', 'July 17 - June 18', 'sopeduid73'),
('Sopedu', 'ANKIT KUMAR SHARMA ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'ankit.india70@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700117', '9109877704', 'July 17 - June 18', 'sopeduid74'),
('Sopedu', 'BHAVESH WASKEL ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'bhaveshvaskel24@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700118', '7389593461', 'July 17 - June 18', 'sopeduid75'),
('Sopedu', 'BRIJESH YADAV', 'MALE', 'OBC', 'CH.', 'INDIAN', 'ibrijesh177@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700120', '8103254581', 'July 17 - June 18', 'sopeduid76'),
('Sopedu', 'BUPENDRA SINGH GURJAR ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'bsinghgurjar2408@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700119', '9669448766', 'July 17 - June 18', 'sopeduid77'),
('Sopedu', 'BURHAN BASHIR ', 'MALE', 'GEN', 'J&K', 'INDIAN', 'burhanpeer11@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700121', '8223059977', 'July 17 - June 18', 'sopeduid78'),
('Sopedu', 'CHETAN PIPLODE ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'chetanpiplode31@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700122', '9753733750', 'July 17 - June 18', 'sopeduid79'),
('Sopedu', 'DARPAN IMOLYA ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'imoliyadarpan12@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700123', '8982872030', 'July 17 - June 18', 'sopeduid80'),
('Sopedu', 'JAYANT VERMA ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'jayantverma723@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700125', '9109075664', 'July 17 - June 18', 'sopeduid81'),
('Sopedu', 'JEMA KHADIYA ', 'FEMALE', 'ST', 'M.P.', 'INDIAN', 'jemakhadiya1@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700126', '8827178737', 'July 17 - June 18', 'sopeduid82'),
('Sopedu', 'MANSWIN BAJPAI ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'manswinbajpai@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700128', '8319079588', 'July 17 - June 18', 'sopeduid83'),
('Sopedu', 'MOHIT JAGTAP ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'jagtap.333@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700129', '9754844475', 'July 17 - June 18', 'sopeduid84'),
('Sopedu', 'MONIKA DEVDA ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'monikadevda1999@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700130', '9425902410', 'July 17 - June 18', 'sopeduid85'),
('Sopedu', 'MRUDULA BUDDHIWANT ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'mrudulabuddhiwant2@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700131', '8982344386', 'July 17 - June 18', 'sopeduid86'),
('Sopedu', 'NAMIT SATHE ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'namitsathe48@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700132', '7049570067', 'July 17 - June 18', 'sopeduid87'),
('Sopedu', 'NANCY SINGH ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'krystles718@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700133', '9589930582', 'July 17 - June 18', 'sopeduid88'),
('Sopedu', 'NARENDRA S. KUSHWAH ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'matrukushwah001@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700134', '8827864761', 'July 17 - June 18', 'sopeduid89'),
('Sopedu', 'NIKHIL PATIL ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'thenikhilpatil@yahoo.co.in', 'PE4A', 'B.P.E.S.', 'DA1700135', '8103111164', 'July 17 - June 18', 'sopeduid90'),
('Sopedu', 'NIYAM JHAVRE ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'niyamzaware4811914@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700136', '9144289972', 'July 17 - June 18', 'sopeduid91'),
('Sopedu', 'RADHA RANDA ', 'FEMALE', 'ST', 'M.P.', 'INDIAN', 'radharanda5@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700137', '9171644122', 'July 17 - June 18', 'sopeduid92'),
('Sopedu', 'RADHA SHARMA ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'sharma.radha.11111@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700138', '8770075573', 'July 17 - June 18', 'sopeduid93'),
('Sopedu', 'RAJAT NEGI ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'choturajatnegi@gamil.com', 'PE4A', 'B.P.E.S.', 'DA1719124', '7415777982', 'July 17 - June 18', 'sopeduid94'),
('Sopedu', 'RICKY ADHIKARY', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'rickywedsadhikary@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700139', '7415551403', 'July 17 - June 18', 'sopeduid95'),
('Sopedu', 'RITIKA DUBEY ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'ritiidube111117@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700140', '8819932176', 'July 17 - June 18', 'sopeduid96'),
('Sopedu', 'SAHIB KOUR BHATIYA ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'sahib21bhatia@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700141', '8820667265', 'July 17 - June 18', 'sopeduid97'),
('Sopedu', 'SHAINEE RATHOD ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'shaineer@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700142', '9981722289', 'July 17 - June 18', 'sopeduid98'),
('Sopedu', 'SIMRAN JAT ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'simjat1405@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700144', '8966696753', 'July 17 - June 18', 'sopeduid99'),
('Sopedu', 'SOUNDARYA SADH ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'somusadh14@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700145', '7974226873', 'July 17 - June 18', 'sopeduid100'),
('Sopedu', 'STYRISH PAUL ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'styris.paul0729@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700146', '8109662534', 'July 17 - June 18', 'sopeduid101'),
('Sopedu', 'SUSHIL ARYA ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'benarya99@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700147', '9644067897', 'July 17 - June 18', 'sopeduid102'),
('Sopedu', 'TRIPTI YADAV ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'nishayadav77469@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700148', '7415420459', 'July 17 - June 18', 'sopeduid103'),
('Sopedu', 'VIKRANT PANWAR ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'vikrantp66@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700149', '8234822031', 'July 17 - June 18', 'sopeduid104'),
('Sopedu', 'VIRENDRA NARGAWE ', 'MALE', '', '', 'INDIAN', '', 'PE4A', 'B.P.E.S.', 'DA1700150', '', 'July 17 - June 18', 'sopeduid105'),
('Sopedu', 'VIVEK GANAWA ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'vivekganava@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700151', '7049201823', 'July 17 - June 18', 'sopeduid106'),
('Sopedu', 'YASH SARSIYA ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'yashsarsiya75@gmai.com', 'PE4A', 'B.P.E.S.', 'DA1700152', '9039398021', 'July 17 - June 18', 'sopeduid107'),
('Sopedu', 'ABHISHEK KHARE ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'abhishekkhare786@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700115', '9981127151', 'July 17 - June 18', 'sopeduid108'),
('Sopedu', 'DEEPENDRA SINGH CHOUHAN ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'dependra207@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700124', '9479790720', 'July 17 - June 18', 'sopeduid109'),
('Sopedu', 'KESHAV PATIDAR ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'keshawpatidarmhow@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700127', '', 'July 17 - June 18', 'sopeduid110'),
('Sopedu', 'YASPAL SINGH GOUD ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'syashpal994@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1700310', '7691976713', 'July 17 - June 18', 'sopeduid111'),
('Sopedu', 'ABHISHEK YADAV ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'abhishekhockey7@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616571', '8223909255', 'July 17 - June 18', 'sopeduid112'),
('Sopedu', 'PRATEEK BHAVSAR ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'prateek0652@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616597', '8109391153', 'July 17 - June 18', 'sopeduid113'),
('Sopedu', 'Ajay Dhariya ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'ajaydhariya966@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616572', '8770214677', 'July 16 - June 17', 'sopeduid114'),
('Sopedu', 'Akash Suradkar ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'suradkara43@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1403061', '9131771623', 'July 16 - June 17', 'sopeduid115'),
('Sopedu', 'Aman Tyagi ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'aman.7tyagi@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616573', '7987429622', 'July 16 - June 17', 'sopeduid116'),
('Sopedu', 'Anita Bhawar ', 'FEMALE', 'ST', 'M.P.', 'INDIAN', 'anitabhawar66@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616574', '8349551949', 'July 16 - June 17', 'sopeduid117'),
('Sopedu', 'Antim Manloi ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'antim1811421@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616576', '9109059069', 'July 16 - June 17', 'sopeduid118'),
('Sopedu', 'Ashutosh Pathrod ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'ashupathrod13@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616579', '9111570249', 'July 16 - June 17', 'sopeduid119'),
('Sopedu', 'Dhruv Singh Thakur ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'dhtuv123thakur@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616581', '7089056484', 'July 16 - June 17', 'sopeduid120'),
('Sopedu', 'Dishan Jacob ', 'MALE', 'ST', 'CH.', 'INDIAN', 'djdishan18@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616582', '8962191561', 'July 16 - June 17', 'sopeduid121'),
('Sopedu', 'Gaurav Jariya ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'jariyagaurav@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616584', '8962913900', 'July 16 - June 17', 'sopeduid122'),
('Sopedu', 'Himani Verma ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'himaniverma10013@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616586', '9575711650', 'July 16 - June 17', 'sopeduid123'),
('Sopedu', 'Khushboo Saini ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'khushboosaini1234567890@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616587', '7772059002', 'July 16 - June 17', 'sopeduid124'),
('Sopedu', 'Lokesh Zerbade ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'zarbadel@gmail.com', 'PE4A', 'B.P.E.S.', 'DC1507340', '8109061826', 'July 16 - June 17', 'sopeduid125'),
('Sopedu', 'Milind Sahebrao ', 'MALE', 'GEN', 'Mh.', 'INDIAN', 'milind143king@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616588', '8319470316', 'July 16 - June 17', 'sopeduid126'),
('Sopedu', 'Mirza Mushabbir Baig ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'm.mirza1210@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616589', '9713555527', 'July 16 - June 17', 'sopeduid127'),
('Sopedu', 'Nitesh Kumar Singh ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'nshuryavanshi11@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616590', '8962277315', 'July 16 - June 17', 'sopeduid128'),
('Sopedu', 'Parikshit Joshi ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'joshiparikshit4@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616591', '8109004902', 'July 16 - June 17', 'sopeduid129'),
('Sopedu', 'Pooja Kushwaha ', 'FEMALE', '', 'M.P.', 'INDIAN', 'pkushwah803@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616593', '8085075926', 'July 16 - June 17', 'sopeduid130'),
('Sopedu', 'Pooja Patel ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'poojapatelsep99@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616592', '9009009153', 'July 16 - June 17', 'sopeduid131'),
('Sopedu', 'Pranjali Bajpai ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'pranjalibajpai.159292@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616595', '8965825019', 'July 16 - June 17', 'sopeduid132'),
('Sopedu', 'Prashant Vasuniya ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'prashantvasuniya58484@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616596', '7987792922', 'July 16 - June 17', 'sopeduid133'),
('Sopedu', 'Pritam Tanwar ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'tanwarpritam448@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616598', '8818912888', 'July 16 - June 17', 'sopeduid134'),
('Sopedu', 'Rohit Rasgainya ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'rohit.rasgainya10@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616599', '7415464439', 'July 16 - June 17', 'sopeduid135'),
('Sopedu', 'Rohit Rawat ', 'MALE', 'GEN', 'm.P.', 'INDIAN', 'rawatrohit.indore@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1617265', '9098767422', 'July 16 - June 17', 'sopeduid136'),
('Sopedu', 'Sachin Sharma ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'sachinsharmank96@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616600', '7999372038', 'July 16 - June 17', 'sopeduid137'),
('Sopedu', 'Sanjay Sarathiya ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'ssarathiya@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616601', '7089699875', 'July 16 - June 17', 'sopeduid138'),
('Sopedu', 'Siddharth Sagre ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'sidsagre@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616603', '8878461421', 'July 16 - June 17', 'sopeduid139'),
('Sopedu', 'Suraj Sekhar ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'ssuraj1995@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616604', '9754226969', 'July 16 - June 17', 'sopeduid140'),
('Sopedu', 'Swati Birla ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'birlaswati1997@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616605', '8889249551', 'July 16 - June 17', 'sopeduid141'),
('Sopedu', 'Ujjawala Ranbhoure ', 'FEMALE', 'SC', 'M.P.', 'INDIAN', 'ujjawala.0999@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616606', '8602201428', 'July 16 - June 17', 'sopeduid142'),
('Sopedu', 'Vaibhav Yadav ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'vaibhavy58@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1617264', '8878869954', 'July 16 - June 17', 'sopeduid143'),
('Sopedu', 'Vikas Govil ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'vikasgovil99@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616608', '8823054605', 'July 16 - June 17', 'sopeduid144'),
('Sopedu', 'Yash Bhagore ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'ybhagore215@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616611', '9589078954', 'July 16 - June 17', 'sopeduid145'),
('Sopedu', 'Ku. Farjana Khan ', 'FEMALE', '', 'M.P.', 'INDIAN', '', 'PE4A', 'B.P.E.S.', 'DA1616583', '', 'July 16 - June 17', 'sopeduid146'),
('Sopedu', 'Shivam Patidar ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'shivampatidarsp0000@gmail.com', 'PE4A', 'B.P.E.S.', 'DC1503482', '8827910413', 'July 16 - June 17', 'sopeduid147'),
('Sopedu', 'Virendra Sisodiya ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'virendrasisodiya556@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616609', '8965099378', 'July 16 - June 17', 'sopeduid148'),
('Sopedu', 'Ayush Choudhary ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'ayush724111@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616580', '8120365039', 'July 16 - June 17', 'sopeduid149'),
('Sopedu', 'Vishwajeet Verma ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'vvishvajeet08@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616610', '9009535362', 'July 16 - June 17', 'sopeduid150'),
('Sopedu', 'Ashish Lal ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'rohanjust98@gmail.com', 'PE4A', 'B.P.E.S.', 'DA1616577', '8839620252', 'July 16 - June 17', 'sopeduid151'),
('Sopedu', 'Ku. Harshita Sengar ', 'FEMALE', '', 'M.P.', 'INDIAN', '', 'PE4A', 'B.P.E.S.', 'DA1616585', '', 'July 16 - June 17', 'sopeduid152'),
('Sopedu', 'AKHTAR AHMED ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'ahmadakhtar32.aa@gmail.com', 'PE5A', 'M.P.Ed.', '0', '8223097083', 'July 18 - June 19', 'sopeduid153'),
('Sopedu', 'AMAR SINGH ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'amarsingh12125@gmail.com', 'PE5A', 'M.P.Ed.', '0', '9936836483', 'July 18 - June 19', 'sopeduid154'),
('Sopedu', 'ANKIT RAI ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'rai46351@gmail.com', 'PE5A', 'M.P.Ed.', '0', '7002965064', 'July 18 - June 19', 'sopeduid155'),
('Sopedu', 'ANOOP GURJAR ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'anoopgurjar048@gmail.com', 'PE5A', 'M.P.Ed.', '0', '9575777530', 'July 18 - June 19', 'sopeduid156'),
('Sopedu', 'AASHISH DUBEY ', 'MALE', 'GEN', 'U.P.', 'INDIAN', 'aashishdubey675@gmail.com', 'PE5A', 'M.P.Ed.', '0', '9519074753', 'July 18 - June 19', 'sopeduid157'),
('Sopedu', 'ARUN PANWAR ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'arunpatel8959@gmail.com', 'PE5A', 'M.P.Ed.', '0', '8959535980', 'July 18 - June 19', 'sopeduid158'),
('Sopedu', 'BHIM SINGH ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'bhimsinghmohare@gmail.com', 'PE5A', 'M.P.Ed.', '0', '8236974123', 'July 18 - June 19', 'sopeduid159'),
('Sopedu', 'DURGESH GAUTAM ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'durgeshgautam996@gmail.com', 'PE5A', 'M.P.Ed.', '0', '9893269832', 'July 18 - June 19', 'sopeduid160'),
('Sopedu', 'JITENDRA KUMAR BHAWAR ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'jitendrabhawaro@gmail.com', 'PE5A', 'M.P.Ed.', '0', '7509372596', 'July 18 - June 19', 'sopeduid161'),
('Sopedu', 'KAVITA SIDDHARTH SARDAR ', 'FEMALE', 'SC', 'M.P.', 'INDIAN', 'sardarkavita1@gmail.com', 'PE5A', 'M.P.Ed.', '0', '9111503706', 'July 18 - June 19', 'sopeduid162'),
('Sopedu', 'MAHAK YADAV ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'mahakyadav32@gmail.com', 'PE5A', 'M.P.Ed.', '0', '9617177719', 'July 18 - June 19', 'sopeduid163'),
('Sopedu', 'MANVENDRA SINGH TOMAR ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'manvendrast13@mail.com', 'PE5A', 'M.P.Ed.', '0', '8103279564', 'July 18 - June 19', 'sopeduid164'),
('Sopedu', 'MOHAMMAD AAQUIB KHAN ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'aaquibkhan845@gmail.com', 'PE5A', 'M.P.Ed.', '0', '8839610571', 'July 18 - June 19', 'sopeduid165'),
('Sopedu', 'PRIYANSHU PARASHAR ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'priyanshuparashar96@gmail.com', 'PE5A', 'M.P.Ed.', '0', '8109275513', 'July 18 - June 19', 'sopeduid166'),
('Sopedu', 'PUNAM YADAV ', 'FEMALE', 'OBC', 'U.P.', 'INDIAN', 'yadavlolovns@gmail.com', 'PE5A', 'M.P.Ed.', '0', '7089005272', 'July 18 - June 19', 'sopeduid167'),
('Sopedu', 'RAJ KUMAR ROHIT ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'rajkumarrohit143@gmail.com', 'PE5A', 'M.P.Ed.', '0', '8085499528', 'July 18 - June 19', 'sopeduid168'),
('Sopedu', 'RAJA VISHVPAL SINGH BOSS ', 'MALE', 'SC', 'U.P.', 'INDIAN', 'rboss0868@gmail.com', 'PE5A', 'M.P.Ed.', '0', '7785051540', 'July 18 - June 19', 'sopeduid169'),
('Sopedu', 'RAVI BINJWA ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'ravibinjwa6672@gmail.com', 'PE5A', 'M.P.Ed.', '0', '8962506315', 'July 18 - June 19', 'sopeduid170'),
('Sopedu', 'ROHIT SHARMA ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'rohittwd@gmail.com', 'PE5A', 'M.P.Ed.', '0', '8982230494', 'July 18 - June 19', 'sopeduid171'),
('Sopedu', 'S. SWAPNIL IYENGAR ', 'MALE', 'GEN', 'CH.', 'INDIAN', 'swapniliyenger@gmail.com', 'PE5A', 'M.P.Ed.', '0', '9425585724', 'July 18 - June 19', 'sopeduid172'),
('Sopedu', 'SANDEEP KUMAR TIWARI ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'sandeeptiwari85005800@gmail.com', 'PE5A', 'M.P.Ed.', '0', '7415057977', 'July 18 - June 19', 'sopeduid173'),
('Sopedu', 'SANJAY DILLORE', 'MALE', 'SC', 'M.P.', 'INDIAN', 'sanjaydillore@gmail.com', 'PE5A', 'M.P.Ed.', '0', '7747973746', 'July 18 - June 19', 'sopeduid174'),
('Sopedu', 'VIKASH MOHE', 'MALE', 'SC', 'M.P.', 'INDIAN', 'vikasmohe19@gmail.com', 'PE5A', 'M.P.Ed.', '0', '7049299044', 'July 18 - June 19', 'sopeduid175'),
('Sopedu', 'YOGESH PATIDAR ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'patidaryogesh187@gmail.com', 'PE5A', 'M.P.Ed.', '0', '9575023162', 'July 18 - June 19', 'sopeduid176'),
('Sopedu', 'Ku. Aditi Kasera ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'aditihockey27@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420002', '7415257448', 'July 17 - June 18', 'sopeduid177'),
('Sopedu', 'Amit Kumar Pandey ', 'MALE', 'GEN', 'JH.', 'INDIAN', 'amitp27091992@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1700164', '7320033072', 'July 17 - June 18', 'sopeduid178'),
('Sopedu', 'Ashish Kushwah ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'kushwahashish45@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1320004', '8103089565', 'July 17 - June 18', 'sopeduid179'),
('Sopedu', 'Atul Zaniya ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'atulzaniya143@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420006', '7581873137', 'July 17 - June 18', 'sopeduid180'),
('Sopedu', 'Bablu Bhawar ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'bablubhawar123@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420007', '9589266567', 'July 17 - June 18', 'sopeduid181'),
('Sopedu', 'Ku. Divyangi Verma ', 'FEMALE', 'GEN', 'M.P.', 'INDIAN', 'mansiroopchandani@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1700568', '9691115331', 'July 17 - June 18', 'sopeduid182'),
('Sopedu', 'Isla Alawe ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'islaalawe.95@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420013', '9713586903', 'July 17 - June 18', 'sopeduid183'),
('Sopedu', 'Ku. Kamla Laviskar ', 'FEMALE', 'ST', 'M.P.', 'INDIAN', 'kamla.lavishkar@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420015', '7240906374', 'July 17 - June 18', 'sopeduid184'),
('Sopedu', 'Kamleshwar Pateliya ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'p.kamleshwar87@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420016', '8602109435', 'July 17 - June 18', 'sopeduid185'),
('Sopedu', 'Kapil Aharwal', 'MALE', 'ST', 'M.P.', 'INDIAN', 'kapilsingh.10@gmail.com', 'PE5A', 'M.P.Ed.', 'DA0905632', '8519069006', 'July 17 - June 18', 'sopeduid186'),
('Sopedu', 'Ku. Krittika Verma ', 'FEMALE', 'OBC', 'M.P.', 'INDIAN', 'krittikawilltalk@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1700569', '8823072761', 'July 17 - June 18', 'sopeduid187'),
('Sopedu', 'Mohsin Khan ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'moinkh.9@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1700165', '8827297262', 'July 17 - June 18', 'sopeduid188'),
('Sopedu', 'Naresh Kushwaha ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'nareshkushwah123@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420020', '9685085532', 'July 17 - June 18', 'sopeduid189'),
('Sopedu', 'Neelesh Dhurwey ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'n.d.dhurvey@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1260155', '9685037473', 'July 17 - June 18', 'sopeduid190'),
('Sopedu', 'Ravindra Patidar ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'ravindrabadiya420@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1309876', '9713938773', 'July 17 - June 18', 'sopeduid191'),
('Sopedu', 'Santosh Mehta ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'santoshmehta9753@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420028', '9753082064', 'July 17 - June 18', 'sopeduid192'),
('Sopedu', 'Shankar Sinduriya ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'sinduriyashankar@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420029', '9630457884', 'July 17 - June 18', 'sopeduid193'),
('Sopedu', 'Sourabh Chhatiye', 'MALE', 'SC', 'M.P.', 'INDIAN', 'sourabhchhatiye@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420042', '9977265047', 'July 17 - June 18', 'sopeduid194'),
('Sopedu', 'Sourabh Kaithwas ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'sourabhkaithwas3@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420032', '9589586598', 'July 17 - June 18', 'sopeduid195'),
('Sopedu', 'Swapnil Meda ', 'MALE', 'ST', 'M.P.', 'INDIAN', 'swapnilmeda@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420034', '9669679949', 'July 17 - June 18', 'sopeduid196'),
('Sopedu', 'Udham Singh Dohare ', 'MALE', 'SC', 'M.P.', 'INDIAN', 'udhamdohare@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1420036', '8103383172', 'July 17 - June 18', 'sopeduid197'),
('Sopedu', 'Vijay Yadav ', 'MALE', 'OBC', 'M.P.', 'INDIAN', 'vjyadav349@gmail.com', 'PE5A', 'M.P.Ed.', 'DA1700166', '7566597505', 'July 17 - June 18', 'sopeduid198'),
('Sopedu', 'Yogeshwar Raj Rathore ', 'MALE', 'GEN', 'M.P.', 'INDIAN', 'yogeshr013@gmail.com', 'PE5A', 'M.P.Ed.', 'DC1110302', '8871596762', 'July 17 - June 18', 'sopeduid199'),
('sostat', 'Prachi Soni', 'F', 'OBC', 'MP', 'Indian', 'soni.prachi834@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS115689', '9630840949', 'July 14 - June 15', 'ididididididididid1541152913006'),
('sostat', 'Anjali Gupta', 'F', 'GEN', 'MP', 'Indian', '07anjaligupta@yahoo.com', 'ST5A', 'M.Sc. Statistics', 'DX1133445', '8602496177', 'July 14 - June 15', 'idididididididididid1541140938152'),
('sostat', 'Anjali Pariche', 'F', 'SC', 'MP', 'Indian', 'no', 'ST5A', 'M.Sc. Statistics', 'DS1101956', '9893786665', 'July 14 - June 15', 'idididididididididid1541141657431'),
('sostat', 'Anshu jain', 'F', 'GEN', 'MP', 'Indian', 'jainanshu30may@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS115111', '9827081471', 'July 14 - June 15', 'idididididididididid1541141659703'),
('sostat', 'Anuradha Singh', 'F', 'GEN', 'MP', 'Indian', 'anamikasinghbaghel03@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1109507', '9424579223', 'July 14 - June 15', 'idididididididididid1541144498815'),
('sostat', 'Pooja Sachan', 'F', 'OBC', 'MP', 'Indian', 'sachanpooja2911@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS115671', '9329847289', 'July 14 - June 15', 'ididididididididid1541152882006'),
('sostat', 'Mohnish Rajpal', 'M', 'GEN', 'MP', 'Indian', 'mohnishrajpal@yahoo.in', 'ST5A', 'M.Sc. Statistics', 'DS1102548', '7566430333', 'July 14 - June 15', 'ididididididididid1541152518470'),
('Soinstru', 'Aksara Sahu', 'Female', 'OBC', 'MP', 'Indian', 'aksharasahu@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1800037', '7748942666', 'July 18 - June 19', 'id1541753834953'),
('Soinstru', 'Shivam Soni', 'Male', 'OBC', 'MP', 'Indian', 'shivam.soni80@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1800039', '8109514189', 'July 18 - June 19', 'id1541754017819'),
('Soinstru', 'Hemant Sing Dhanwar', 'Male', 'ST', 'MP', 'Indian', 'ashuhemantsingh@gmail.com', 'IN7B', 'M.Tech. (IOT)', 'DE14285', '8962307327', 'July 18 - June 19', 'id1541753397755'),
('Soinstru', 'Sumer Singh', 'Male', 'General', 'UP', 'Indian', 'sumerfeb@gmail.com', 'IN7B', 'M.Tech. (IOT)', 'DE1800043', '7007071318', 'July 18 - June 19', 'id1541753654225'),
('Soinstru', 'Purvi Billore', 'Female', 'General', 'MP', 'Indian', 'purvi.billore@gmail.com', 'IN7B', 'M.Tech. (IOT)', 'DE14320', '9753438440', 'July 18 - June 19', 'id1541753144161'),
('Soinstru', 'Shivani Shrivastava', 'Female', 'General', 'MP', 'Indian', 'shivanishrivastava83@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1800040', '9926397006', 'July 18 - June 19', 'id1541752721463'),
('Soinstru', 'Shafqat Khan', 'Female', 'General', 'MP', 'Indian', 'khanshafqat786@gmail.com', 'IN7B', 'M.Tech. (IOT)', 'DE1800042', '7415121075', 'July 18 - June 19', 'id1541752502169'),
('Soinstru', 'Priya Jayaswal', 'Female', 'General', 'Rajasthan', 'Indian', 'priyamamtajaiswal@gmail.com', 'IN7B', 'M.Tech. (IOT)', 'DE1800041', '9468630925', 'July 18 - June 19', 'id1541751202158'),
('Soinstru', 'Vaibhav Pandey', 'Male', 'General', 'UP', 'Indian', 'vp09676@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1700905', '8604280036', 'July 17 - June 18', 'idid1541418425087'),
('Soinstru', 'Aditya Narayan Gupta', 'Male', 'OBC', 'UP', 'Indian', 'aditya_narayan@yahoo.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1700894', '8565065002', 'July 17 - June 18', 'idid1541416342605');
INSERT INTO `t2_7_1` (`Username`, `Student_Name`, `Gender`, `Category`, `State_of_Domicile`, `Nationality`, `Email_ID`, `Prog_code`, `Prog_name`, `Enrollment_ID`, `Mobile_No`, `Year`, `id_time`) VALUES
('Soinstru', 'Krishna Kumar', 'Male', 'General', 'UP', 'Indian', 'krishnakumar001live@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1700898', '7376412588', 'July 17 - June 18', 'idid1541417047637'),
('Soinstru', 'Jitendra Pal', 'Male', 'OBC', 'MP', 'Indian', 'jitendra.pal26@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1700897', '8962755316', 'July 17 - June 18', 'idid1541416730980'),
('Soinstru', 'Apoorv Shukla', 'Male', 'General', 'UP', 'Indian', 'apoorvshukla97@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1700895', '9415456142', 'July 17 - June 18', 'idid1541416447568'),
('Soinstru', 'Neeraj Keriya', 'Male', 'OBC', 'MP', 'Indian', 'neerajkeriya@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1700900', '7509588525', 'July 17 - June 18', 'idid1541417503311'),
('Soinstru', 'Nitin Solanki', 'Male', 'ST', 'MP', 'Indian', 'nks_79@yahoo.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1700901', '9407408699', 'July 17 - June 18', 'idid1541417654083'),
('Soinstru', 'Kushagra Vardhan', 'Male', 'OBC', 'UP', 'Indian', 'kushagravardhan94@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1700899', '9410888596', 'July 17 - June 18', 'idid1541417341454'),
('Soinstru', 'Rajendra Puware', 'Male', 'SC', 'MP', 'Indian', 'rajendrapuware18@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE13346', '9977850434', 'July 17 - June 18', 'idid1541418116548'),
('Soinstru', 'Radha Krishna Bajpi', 'Male', 'General', 'UP', 'Indian', 'radhakrishna0700@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1700903', '9026169708', 'July 17 - June 18', 'idid1541417950432'),
('Soinstru', 'Pushpakar Yadhav', 'Male', 'OBC', 'UP', 'Indian', 'pushpakar_y@rediffmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1700902', '9532673015', 'July 17 - June 18', 'idid1541417801686'),
('Soinstru', 'Ujjawal Tripathi', 'Male', 'General', 'UP', 'Indian', 'ujjwaltri113@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1700904', '8726308945', 'July 17 - June 18', 'idid1541418257681'),
('Soinstru', 'Priyanka Soni', 'Female', 'OBC', 'MP', 'Indian', 'priyapp2227@gmail.com', 'IN7A', 'M.Tech.  (Instrumentation)', 'DE1800038', '9407294002', 'July 18 - June 19', 'id1541754195580'),
('sostat', 'Gopal Patil', 'M', 'GEN', 'MP', 'Indian', 'gopalalwaysonline@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1102925', '9201330464', 'July 14 - June 15', 'idididididididididid1541144947894'),
('sostat', 'Kritisha Verma', 'F', 'GEN', 'MP', 'Indian', 'chayneshverma0715@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1100075', '8989462893', 'July 14 - June 15', 'ididididididididid1541152517336'),
('sostat', 'Arvind Shrivastava', 'M', 'GEN', 'MP', 'Indian', 'abhi21shrivastava@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS115132', '9770228636', 'July 14 - June 15', 'idididididididididid1541144586463'),
('sostat', 'Atul Kumar Shukla', 'M', 'GEN', 'MP', 'Indian', 'shuklaatul032@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1102597', '9685230353', 'July 14 - June 15', 'idididididididididid1541144854830'),
('sostat', 'Ankit Yadav', 'M', 'OBC', 'MP', 'Indian', 'ankityadavsvim@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1002933', '9893953323', 'July 14 - June 15', 'idididididididididid1541141658639'),
('sostat', 'Jyoti Dixit', 'F', 'GEN', 'MP', 'Indian', 'djyoti401@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS115383', '9406662741', 'July 14 - June 15', 'idididididididididid1541144949989'),
('sostat', 'Mohini Mallick', 'F', 'GEN', 'MP', 'Indian', 'monamallick999@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1312047', '7566794685', 'July 16 - June 17', 'ididididididid1541233490408'),
('sostat', 'Shweta Pandey', 'F', 'GEN', 'MP', 'Indian', 'NO', 'ST5A', 'M.Sc. Statistics', 'DS116031', '8109786058', 'July 14 - June 15', 'idididididididid1541153416021'),
('sostat', 'Bhagyashree Vaidhya', 'F', 'GEN', 'MP', 'Indian', 'bhagyashreevaidhya25@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1311652', '8085406493', 'July 16 - June 17', 'ididididididid1541232345347'),
('sostat', 'Ashish Dhakad', 'M', 'OBC', 'MP', 'Indian', 'ashishdhakad51@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1311611', '7415627161', 'July 16 - June 17', 'ididididididid1541232270307'),
('sostat', 'Jagruti Mahajan', 'F', 'OBC', 'MP', 'Indian', 'mahajanjagruti09@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS115364', '9039551757', 'July 14 - June 15', 'idididididididididid1541144948878'),
('sostat', 'Kiran Patidar', 'F', 'OBC', 'MP', 'Indian', 'patidarkiran1610@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1302468', '8103846472', 'July 16 - June 17', 'ididididididid1541233415697'),
('sostat', 'Pooja Patidar', 'F', 'OBC', 'MP', 'Indian', 'poojapgdc@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1600002', '9993480892', 'July 16 - June 17', 'idid1542176772592'),
('sostat', 'Divya Gupta', 'F', 'GEN', 'MP', 'Indian', 'guptadivya908@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1311758', '7806013325', 'July 16 - June 17', 'ididididididid1541232405076'),
('sostat', 'Sagar Dadhich', 'M', 'GNE', 'MP', 'Indian', 'dadhichsagar98@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1312445', '7692915480', 'July 16 - June 17', 'idid1542176769592'),
('sostat', 'Tushar Suryavanshi', 'M', 'OBC', 'Out of MP', 'Indian', 's.tushar2909@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1423684', '8109945991', 'July 14 - June 15', 'idididididididid1541153780331'),
('sostat', ' Neha Tiwari', 'F', 'GEN', 'MP', 'Indian', 'nehatiwari44444@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1600001', '9179844627', 'July 16 - June 17', 'idid1542177073649'),
('sostat', 'Nitin Jamariya', 'M', 'GEN', 'MP', 'Indian', 'nitinjamriya222@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1312131', '9691766560', 'July 16 - June 17', 'idid1542176973432'),
('sostat', 'Surbhi Choudhary', 'F', 'SC', 'MP', 'Indian', 'surbhichoudhary221096@gmail.com', 'ST5A', 'M.Sc. Statistics', 'DS1413953', '8359953605', 'July 17 - June 18', 'id1542179454870'),
('sostat', 'Mrs. Smita Jain ', 'F', 'GEN', 'MP', 'Indian', 'smita_313@yahoo.com', 'ST9Z', 'Ph.D.', 'DS997752', '9009000380', 'July 15 - June 16', 'id1542179620446'),
('sostat', 'Mr. Gaurav Manjrekar ', 'M', 'GEN', 'MP', 'Indian', 'gourav_28@yahoo.com', 'ST9Z', 'Ph.D.', 'DX0508620', '9926006007', 'July 15 - June 16', 'id1542179638438'),
('sostat', 'Ms.Bharti  Agrawal ', 'F', 'GEN', 'MP', 'Indian', 'bhartiagrawal7682@gmail.com', 'ST9Z', 'Ph.D.', 'DS990161', '9691229909', 'July 15 - June 16', 'id1542179641021'),
('sostat', 'Mrs. Sunita Khurana', 'F', 'GEN', 'MP', 'Indian', 'khurana.sunita001@gmail.com', 'ST9Z', 'Ph.D.', 'DS085049', '9630043344', 'July 15 - June 16', 'id1542179642318'),
('sostat', 'Mr. Rajesh Gupta ', 'M', 'GEN', 'MP', 'Indian', 'rguptaboston@gmail.com', 'ST9Z', 'Ph.D.', 'DS9802254', '9407894855', 'Feb 14 - June 14', 'id1542179644853'),
('Chemsc', 'SHREYA JAIN', 'F', 'GENERAL', 'U.P.', 'INDIAN', 'shreyajainjn@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1519194', '7400606075', 'July 18 - June 19', 'ididmanualid34'),
('Chemsc', 'SHIVANI TRIPATHI', 'F', '_', '_', 'INDIAN', '_', 'CH5A', 'M.Sc. Chemistry', '_', '_', 'July 18 - June 19', 'ididmanualid33'),
('Chemsc', 'SHIVANI RATHORE', 'F', 'OBC', 'M.P.', 'INDIAN', 'rshivani191@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1517884', '9574900054', 'July 18 - June 19', 'ididmanualid32'),
('Chemsc', 'SHIVANI JAIN', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'dimpyjain49@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1800027', '7770944443', 'July 18 - June 19', 'ididmanualid31'),
('Chemsc', 'SHIVAM KUMAR PUROHIT', 'M', 'GENERAL', 'M.P.', 'INDIAN', 'spurohit249@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1519192', '9589072757', 'July 18 - June 19', 'ididmanualid30'),
('Chemsc', 'SHIKHAR MAKWANA', 'M', 'OBC', 'M.P.', 'INDIAN', 'shikharmakwana457@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1800026', '8871776678', 'July 18 - June 19', 'ididmanualid29'),
('Chemsc', 'SHEETAL PANVE', 'F', 'SC', 'M.P.', 'INDIAN', 'sheetalpanwe@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1500665', '9826645057', 'July 18 - June 19', 'ididmanualid28'),
('Chemsc', 'RISHABH RATHORE', 'M', 'OBC', 'M.P.', 'INDIAN', 'rishabhrathore473@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1513763', '8878081835', 'July 18 - June 19', 'ididmanualid27'),
('Chemsc', 'PREMLATA DESHMUKH', 'F', 'OBC', 'M.P.', 'INDIAN', 'premlatadeshmukh101@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1502860', '9407024268', 'July 18 - June 19', 'ididmanualid26'),
('Chemsc', 'PRASHUBHA YADAV', 'F', 'OBC', 'M.P.', 'INDIAN', 'prashu08yadav@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS', '7441190093', 'July 18 - June 19', 'ididmanualid25'),
('Chemsc', 'PRADEEP PATEL', 'M', 'OBC', 'M.P.', 'INDIAN', 'pradeep.patel2908@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1301249', '9301398487', 'July 18 - June 19', 'ididmanualid24'),
('Chemsc', 'PANKAJ RATHORE', 'M', 'OBC', 'M.P.', 'INDIAN', 'at.pnkj@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1513668', '9584590337', 'July 18 - June 19', 'ididmanualid23'),
('Chemsc', 'NILESH MALVIYA ', 'M', 'OBC', 'M.P.', 'INDIAN', 'nilesh97malviya@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1501394', '8817136602', 'July 18 - June 19', 'ididmanualid22'),
('Chemsc', 'NIKITA NEERAJ', 'F', 'SC', 'M.P.', 'INDIAN', 'nikitaneeraj94@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1401922', '9039657452', 'July 18 - June 19', 'ididmanualid21'),
('Chemsc', 'NIKITA MAHAJAN', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'nikitamhjn190697@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1513648', '9407489478', 'July 18 - June 19', 'ididmanualid20'),
('Chemsc', 'NIDHI BHAGAT', 'F', 'OBC', 'M.P.', 'INDIAN', 'nidhi16bhagat@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1414777', '8085056058', 'July 18 - June 19', 'ididmanualid19'),
('Chemsc', 'NANDINI SINGH', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'nandinisingh997@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1509828', '7804854407', 'July 18 - June 19', 'ididmanualid18'),
('Chemsc', 'MUSKAN PATEL', 'F', 'OBC', 'M.P.', 'INDIAN', 'Pmuskan852@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1800025', '9425752822', 'July 18 - June 19', 'ididmanualid17'),
('Chemsc', 'MEGHA SHARMA', 'F', 'OBC', 'M.P.', 'INDIAN', 'megha.sharma2u@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1513604', '8109497478', 'July 18 - June 19', 'ididmanualid16'),
('Chemsc', 'KIRTI KAUSHAL', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'kaushalkirti96@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1514013', '7415530793', 'July 18 - June 19', 'ididmanualid15'),
('Chemsc', 'KIRAN MAYAWAD', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'kkm2197@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1800024', '8989799612', 'July 18 - June 19', 'ididmanualid14'),
('Chemsc', 'JAGPAL SINGH YADAV', 'M', 'OBC', 'M.P.', 'INDIAN', 'jagpalyadav147@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1413062', '7773843487', 'July 18 - June 19', 'ididmanualid13'),
('Chemsc', 'DIVYA RANI GUPTA', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'divyagupta260468@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1800023', '8989446168', 'July 18 - June 19', 'ididmanualid12'),
('Chemsc', 'CHAITALI DARGAR', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'daragar_chaiatali@ymail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1513987', '9589822346', 'July 18 - June 19', 'ididmanualid11'),
('Chemsc', 'BHAVANA SHAKTAWAT', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'shaktawatbhavana17@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1514915', '9754350820', 'July 18 - June 19', 'ididmanualid10'),
('Chemsc', 'BATUL ADIL', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'batuladil8484@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1513429', '7509501946', 'July 18 - June 19', 'ididmanualid9'),
('Chemsc', 'ATAL DAVE', 'M', 'GENERAL', 'M.P.', 'INDIAN', 'ataldave.17@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1518742', '9575569039', 'July 18 - June 19', 'ididmanualid8'),
('Chemsc', 'ASHIMA BASHA', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'ashimabasha94@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1800022', '9424884549', 'July 18 - June 19', 'ididmanualid7'),
('Chemsc', 'ARWA PITHAWALA', 'F', 'GENERAL', 'M.P.', 'INDIAN', '_', 'CH5A', 'M.Sc. Chemistry', 'DS', '8226078653', 'July 18 - June 19', 'ididmanualid6'),
('Chemsc', 'ANKUR KHAPRE', 'M', 'OBC', 'M.P.', 'INDIAN', 'ankurpawar26@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1800021', '8827700339', 'July 18 - June 19', 'ididmanualid5'),
('Chemsc', 'ANEETA DEVI PRAJAPATI', 'F', 'SC', 'M.P.', 'INDIAN', 'aneetadeviprajapati2007@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1513377', '8602548921', 'July 18 - June 19', 'ididmanualid4'),
('Chemsc', 'ANIKET PANCHAL', 'M', 'OBC', 'M.P.', 'INDIAN', 'anipanchal09@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1800121', '8435122379', 'July 18 - June 19', 'ididmanualid3'),
('Chemsc', 'AISHWARYA JAHLA', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'Aish.jhala@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS', '9669165169', 'July 18 - June 19', 'ididmanualid2'),
('Chemsc', 'AANSHI BAJAJ', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'aanshibajaj98@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1517852', '9826756451', 'July 18 - June 19', 'ididmanualid1'),
('Chemsc', 'SHUBHAM PATEL', 'M', 'OBC', 'M.P.', 'INDIAN', 'patelshubham668@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1513851', '7771997277', 'July 18 - June 19', 'ididmanualid35'),
('Chemsc', 'SONALI MAJUMDAR', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'sonallimajumdar25@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1800028', '7089566801', 'July 18 - June 19', 'ididmanualid36'),
('Chemsc', 'SUNIL MANDLOI', 'M', 'SC', 'M.P.', 'INDIAN', 'mandloisunil21@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1514835', '9826889477', 'July 18 - June 19', 'ididmanualid37'),
('Chemsc', 'TOSHI KARAHE', 'F', 'GENERAL', 'M.P.', 'INDIAN', 'toshikarahe@hotmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1501444', '8319291759', 'July 18 - June 19', 'ididmanualid38'),
('Chemsc', 'VIKESH BARPETE', 'M', 'OBC', 'M.P.', 'INDIAN', 'vikeshbarpete@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1502787', '9770858032', 'July 18 - June 19', 'ididmanualid39'),
('Chemsc', 'YASHWANI CHANDEL', 'F', 'SC', 'M.P.', 'INDIAN', 'yavichandel220@gmail.com', 'CH5A', 'M.Sc. Chemistry', 'DS1501605', '8517088220', 'July 18 - June 19', 'ididmanualid40'),
('sopharma', 'Aakash Jain', 'Male', 'UR', 'MP', 'Indian', 'aakashraag01@gmail.com', 'PY4A', 'B.Pharm.', '41801', '7869019823', 'July 18 - June 19', 'id1542270734908'),
('biochem', 'Shreya Likhi', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'shreyalikhi12345@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1515101', '7580813160', 'July 18 - June 19', 'idididid1542019341794'),
('biochem', 'Shruti Shukla ', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'srsshukla98.s@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1510609', '9826888065', 'July 18 - June 19', 'idididid1542019385516'),
('biochem', 'Swati Kushwah', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'swatikushwah19234@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS116112', '9630335404', 'July 17 - June 18', 'ididididididididididid1541837239689'),
('biochem', 'Saurabh Jore', 'Male', 'Gen', 'Madhya Pradesh', 'Indian', 'saurabhsjore@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1513822', '9826723844', 'July 18 - June 19', 'idididid1542019211324'),
('biochem', 'Sailesh Mahadule', 'Female', 'OBC', 'Madhya Pradesh', 'Indian', 'saileshmahadule1904@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1700126', '9009708487', 'July 17 - June 18', 'ididididididididididid1541837231700'),
('biochem', 'Shruti Agrawal', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'shruti1752@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1510608', '9753517239', 'July 18 - June 19', 'idididid1542019370956'),
('biochem', 'Mitali Bhate', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'mitali1757@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1514025', '9009809093', 'July 18 - June 19', 'ididididididididid1541870014840'),
('biochem', 'Shubham Dashore', 'Male', 'Gen', 'Madhya Pradesh', 'Indian', 'shubhamdasore2606@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1517918', '9179336800', 'July 18 - June 19', 'idididid1542019399640'),
('biochem', ' Kisalay Jha', 'Male', 'Gen', 'Karnataka', 'Indian', 'sirfkisalay@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1800032', '7908920434', 'July 18 - June 19', 'ididididididididid1541869983489'),
('biochem', 'Mahima Nandeshwar', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'mahima97nandeshwar@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1800138', '9691136814', 'July 18 - June 19', 'ididididididididid1541869997016'),
('biochem', 'Simran Tolani', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'simran121tolani@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1409997', '9893312894', 'July 17 - June 18', 'ididididididididididid1541837233351'),
('biochem', 'Ankita Bele', 'Female', 'SC', 'Madhya Pradesh', 'Indian', 'ankitabele12@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1412734', '94258770493865621173', 'July 17 - June 18', 'ididididididididididid1541834425374'),
('biochem', 'S.Priyanka', 'Female', 'Gen', 'Andhra Pradesh', 'Indian', 'priyankasrirangam10396@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1700122', '5896 4067 5464', 'July 17 - June 18', 'ididididididididididid1541836674408'),
('biochem', 'Sonu Barfa', 'Female', 'OBC', 'Madhya Pradesh', 'Indian', 'sonubarfa18@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1413901', '8458813890', 'July 17 - June 18', 'ididididididididididid1541837234563'),
('biochem', 'Julie Meena', 'Female', 'OBC', 'Madhya Pradesh', 'Indian', 'drdeepakmeena@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1403434', '9713159731', 'July 17 - June 18', 'ididididididididididid1541835917742'),
('biochem', 'Priya Sawner', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'prajput0505@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1413476', '7766 5580 4689', 'July 17 - June 18', 'ididididididididididid1541836667515'),
('biochem', 'Manisha Singh', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'manishasengar@yahoo.in', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1700121', '9630429083', 'July 17 - June 18', 'ididididididididididid1541835927327'),
('biochem', 'Himanshi Jain', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'jainhimanshi3.hj@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS17000123', '7692005540', 'July 17 - June 18', 'ididididididididididid1541835916302'),
('biochem', 'Apoorva Rawal', 'Female', 'Gen', 'Karnataka', 'Indian', 'apoorvarawal@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1700120', '7049386562', 'July 17 - June 18', 'ididididididididididid1541835913509'),
('biochem', 'Pooja Yadav', 'Female', 'OBC', 'Madhya Pradesh', 'Indian', 'yadavpooja720@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1309508', '8897 3699 9620', 'July 17 - June 18', 'ididididididididididid1541836666043'),
('biochem', 'Ankita Choudhary ', 'Female', 'OBC', 'Madhya Pradesh', 'Indian', 'choudhary.ankita144@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1500898', '8827249060', 'July 18 - June 19', 'ididididididididid1541869011979'),
('biochem', 'Ranu Warkade', 'Female', 'ST', 'Madhya Pradesh', 'Indian', 'ranuwarkade@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1700125', '6748 7988 4333', 'July 17 - June 18', 'ididididididididididid1541836673359'),
('biochem', 'Priyanka Kumawat', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'priyankakumawat1509@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1413485', '7370 3735 7413', 'July 17 - June 18', 'ididididididididididid1541836668933'),
('biochem', 'Lokendra Borana ', 'Male', 'OBC', 'Madhya Pradesh', 'Indian', 'lokendraborana@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1402448', '9644097757', 'July 17 - June 18', 'ididididididididididid1541835924147'),
('biochem', 'Anushka Pandey', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'cutyanupandey061@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1409955', '8602651600', 'July 17 - June 18', 'ididididididididididid1541835062218'),
('biochem', 'Kirti Shastri', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'kshastri108@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1800137', '8269265022', 'July 18 - June 19', 'ididididididididid1541869963787'),
('biochem', 'Aayushi Jain', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'ayushijain614@yahoo.in', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1412631', '8871513278', 'July 18 - June 19', 'idididididididididid1541838452685'),
('biochem', 'Diksha Nema', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'dikshanema12@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1800136', '9893371294', 'July 18 - June 19', 'ididididididididid1541869425351'),
('biochem', 'Patrika Soni', 'Female', 'Gen', 'Chattisgadh', 'Indian', 'patrikasoni@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1800139', '9109805330', 'July 18 - June 19', 'idididididididid1541928551700'),
('biochem', 'Ashiwini Kumrawat', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'ashkumrawat786@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1412798', '7869274144', 'July 18 - June 19', 'ididididididididid1541869345096'),
('biochem', 'Suhani Sethiya', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'suhanis557755@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1413918', '8989675302', 'July 18 - June 19', 'idididid1542019891878'),
('biochem', 'Dinesh singh Patel', 'Male', 'Gen', 'Madhya Pradesh', 'Indian', 'drajput841@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1503502', '8889935309', 'July 18 - June 19', 'ididididididididid1541869725708'),
('biochem', 'Disha Mishra', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'dishamishrabiotech@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1800031', '8319905685', 'July 18 - June 19', 'ididididididididid1541869750949'),
('biochem', 'Prachi Sahu', 'Female', 'OBC', 'Madhya Pradesh', 'Indian', 'sahuprachi988@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1800033', '8435606578', 'July 18 - June 19', 'idididididid1541936153291'),
('biochem', 'Trishla Sehgal', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'trishsehgal1998@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1800034', '7415410950', 'July 18 - June 19', 'id1542278758269'),
('biochem', 'Unnati Jain', 'Female', 'Gen', 'Madhya Pradesh', 'Indian', 'unna.j1997@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1800140', '8982621516', 'July 18 - June 19', 'id1542278961627'),
('biochem', 'Vishal Patidar', 'Male', 'OBC', 'Madhya Pradesh', 'Indian', 'hawdiagol999@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1800035', '8120534435', 'July 18 - June 19', 'id1542279077766'),
('biochem', 'Yojna Dighe', 'Female', 'Gen', 'dhya Pradesh', 'Indian', 'oratorship@gmail.com', 'BC5A', 'Master of Science (Biochemistry) 2yrs', 'DS1510620', '9630430483', 'July 18 - June 19', 'id1542279197908'),
('solaw', 'AAKANKSHA PATEL', 'Female', 'OBC', 'MADHYA PRADESH', 'Indian', 'aaku2041@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600001', '7354462616', 'July 16 - June 17', 'id1542273250937'),
('solaw', 'ADITI GOUD', 'Female', 'GEN', 'MADHYA PRADESH', 'Indian', 'aditisingh7598@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600002', '9977421502', 'July 16 - June 17', 'id1542273651419'),
('solaw', 'AKSHAT BHANDARI', 'Male', 'GEN', 'MADHYA PRADESH', 'Indian', 'akshatbhandari0000@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600003', '9584870354', 'July 16 - June 17', 'id1542273856341'),
('solaw', 'ANCHAL MISHRA ', 'Female', 'GEN', 'MADHYA PRADESH', 'Indian', 'anchalmishra0407@gmail.com ', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600005', '8602701880', 'July 16 - June 17', 'id1542274327841'),
('solaw', 'ANUJ SINGH CHAUHAN', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'Anuj481998@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600007', '8461899277', 'July 16 - June 17', 'id1542274367356'),
('solaw', 'ANUSHKA SHARMA', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'anushka29998@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600008', '8349705894', 'July 16 - June 17', 'id1542274389700'),
('solaw', 'DEEPAK SURYAVANSHI', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'deepaksuryavanshi1998@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600010', '9981889699', 'July 16 - June 17', 'id1542275032922'),
('solaw', 'DEVESH MEV', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'deveshmev1998@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600011', '9644110001', 'July 16 - June 17', 'id1542275034189'),
('solaw', 'GARGI SHARMA', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'gargisharma2597@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600013', '8959738630', 'July 16 - June 17', 'id1542275071587'),
('solaw', 'HARSHWARDHAN SINGH RATHORE', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'harshwardhanrathore34@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600014', '9617218222', 'July 16 - June 17', 'id1542275560922'),
('solaw', 'HONEY AGRAWAL', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'agrawal2498@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600016', '777087868', 'July 16 - June 17', 'id1542275565418'),
('solaw', 'JAY CHANDANI', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'jaychandani1996@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600017', '9039388335', 'July 16 - June 17', 'id1542275566649'),
('solaw', 'KANISHKA RATHORE', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'Kannirathore@gmail.com ', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600019', '8982116636', 'July 16 - June 17', 'id1542275568297'),
('solaw', 'MANPREET KAUR GURTATTA', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'manpreetkaur.gurtatta@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600022', '9669649022', 'July 16 - June 17', 'id1542276200524'),
('solaw', 'MAYANK JAIN', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'jainmayank590@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600023', '8517813587', 'July 16 - June 17', 'id1542276202621'),
('solaw', 'MEENA GARG', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'Meenal2508@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600024', '9826099350', 'July 16 - June 17', 'id1542276203868'),
('solaw', 'NIKITA SINGH RAJAWAT', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'Vineta2016@rediffmail.com ', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600027', '8889855945', 'July 16 - June 17', 'id1542276206180'),
('solaw', 'NISHIT KUROPPA', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'nishukuroppa@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600028', '8989415101', 'July 16 - June 17', 'id1542276207300'),
('solaw', 'NOOPUR MANDOWARA', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'mandowaranoopur05@gmail.com ', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600029', '9713741010', 'July 16 - June 17', 'id1542276209460'),
('solaw', 'PIYUSH LASHKARI', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'piyushlashkari1998@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600031', '7869504701', 'July 16 - June 17', 'id1542277316167'),
('solaw', 'PRITESH KUMAR PATEL', 'Male', 'A', 'MADHYA PRADESH', 'Indian', '8120381982pp@gmail.com ', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600033', '8120381982', 'July 16 - June 17', 'id1542277318894'),
('solaw', 'PRIYANSHI RANJAN', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'priyanshibpl@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600034', '8718800644', 'July 16 - June 17', 'id1542277320239'),
('solaw', 'PRIYANSHI TRIPATHI', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'priyanshi22.pt@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600035', '8819048698', 'July 16 - June 17', 'id1542277321615'),
('solaw', 'PRIYANSHU RANJAN', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'Priyanshur2601@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600036', '9131974463', 'July 16 - June 17', 'id1542277865552'),
('solaw', 'RAGHAV SHUKLA', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'raghavs1590@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600039', '7000913247', 'July 16 - June 17', 'id1542277869112'),
('solaw', 'RASHI SIRPURKAR', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'sirpurkar04@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600040', '9340822273', 'July 16 - June 17', 'id1542277870415'),
('solaw', 'ROSHI DANTRE', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'Roshidantre1999@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600042', '8989689008', 'July 16 - June 17', 'id1542278248377'),
('solaw', 'SANDEEP RAWAT', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'sprawat070@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600043', '8719980440', 'July 16 - June 17', 'id1542278250928'),
('solaw', 'SHASHANK SAHU', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'sahushashank09@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600045', '9425094750', 'July 16 - June 17', 'id1542278252024'),
('solaw', 'SHIKHA UIKEY', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'Shikhauikey95@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600046', '9109485334', 'July 16 - June 17', 'id1542278253479'),
('solaw', 'SHREYA UIKEY', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'Shreyauikey21031998@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600047', '7247379360', 'July 16 - June 17', 'id1542278639427'),
('solaw', 'SHWETA KHER', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'Shwetakher9@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600048', '9522410288', 'July 16 - June 17', 'id1542278649163'),
('solaw', 'TANISHKA VAISHNAV', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'Tanishkavaishnav14@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600049', '9179148805', 'July 16 - June 17', 'id1542278650148'),
('solaw', 'VAISHALI CHOUHAN', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'vaishalichouhan102@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600051', '7024476475', 'July 16 - June 17', 'id1542278655782'),
('solaw', 'YASH SHARMA', 'Male', 'A', 'MADHYA PRADESH', 'Indian', 'sharmayash0299@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600052', '7747882373', 'July 16 - June 17', 'id1542279012417'),
('solaw', 'ANUSHKA SAMDANI', 'Female', 'A', 'MADHYA PRADESH', 'Indian', 'anushka.samdani847@gmail.com', 'LL4A', 'B.A.LL.B.(Hons)', 'DL1600059', '8109084600', 'July 16 - June 17', 'id1542279025791'),
('sees', 'TUSHAR PAWAR', 'Male', 'GEN', 'M.P', 'No', 'tusharpawar0950@gmail.com', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '7869160480', 'July 18 - June 19', 'idid1542257037440'),
('sees', 'SHRAVAN YADAV', 'Male', 'OBC', 'U.P.', 'No', 'shravanyadavEE@gmail.com', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '7587504534', 'July 18 - June 19', 'idid1542257060106'),
('sees', 'VAIBHAV PANDEY', 'Male', 'GEN', 'M.P.', 'No', 'vaibhav01pande@gmail.com ', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '8085663714', 'July 18 - June 19', 'idid1542257286199'),
('sees', 'ASHISH KUMAR', 'Male', 'GEN', 'U.P.', 'No', 'ashishnandan58@gmail.com ', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '7417073522', 'July 18 - June 19', 'idid1542257289747'),
('sees', 'PUSHPENDRA SINGH', 'Male', 'GEN', 'U.P.', 'No', 'pyadav119497@gmail.com ', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '9455998398', 'July 18 - June 19', 'idid1542257572558'),
('sees', 'ADITYA KUMAR', 'Male', 'GEN', 'BIHAR', 'No', 'adiyakumar4645@gmail.com ', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '8986954645', 'July 18 - June 19', 'idid1542257645797'),
('sees', 'RISHABH GUPTA', 'Male', 'GEN', 'M.P.', 'No', 'guptaa.rishaabh@gmail.com', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '8982777354', 'July 18 - June 19', 'idid1542257715310'),
('sees', 'TASHMEER KHAN', 'Female', 'GEN', 'M.P.', 'No', 'tashmeerkhan@yahoo.com ', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '8602556056', 'July 18 - June 19', 'idid1542257828782'),
('sees', 'AMIT KUMAR', 'Male', 'GEN', 'BIHAR', 'No', 'jhaji.nic.@gmail.com', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '8435965444', 'July 18 - June 19', 'idid1542257933817'),
('sees', 'PRIYA PATIDAR', 'Female', 'OBC', 'M.P.', 'No', 'priyapatidar318@gmail.com ', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '8103558856', 'July 18 - June 19', 'idid1542258000257'),
('sees', 'ANISH KUAMR PANDEY', 'Male', 'GEN', 'M.P.', 'No', 'a4anishpandey@gmail.com ', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '9039157762', 'July 18 - June 19', 'idid1542258087657'),
('sees', 'DEEPAK KUMAR', 'Male', 'GEN', 'U.P.', 'No', 'deepaksharma7044@gmail.com', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '9990805108', 'July 18 - June 19', 'idid1542258176818'),
('sees', 'NITYA SHARMA', 'Female', 'GEN', 'M.P.', 'No', 'sharmanitya108@gmail.com', 'EN7A', 'M.Tech.(Energy Managment)-Regular', '0', '8818861761', 'July 18 - June 19', 'idid1542258282214');

-- --------------------------------------------------------

--
-- Table structure for table `t3_1_1`
--

CREATE TABLE `t3_1_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_1_1`
--

INSERT INTO `t3_1_1` (`Username`, `descr`, `Link`, `id_time`) VALUES
('admin1', '', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_16-00-48Ac susceptibility measurements of magnetic monolayers.pdf', 'TA3_1_1'),
('admin3', 'google \' > < ? # 2 4 #$ \" kdlfm \"', 'dlfmdfm \' \" dmf < > ? & difm', 'TA3_1_1'),
('admin4', 'google\nkb\nn.bn', 'testing', 'TA3_1_1'),
('chemsc', 'Research is the foundation of knowledge that brings new energy, builds state of the art facilities, promotes research publications, develops collaborations and becomes part of the active academic community. Research and developmental activities create and disseminate new knowledge across domains, promote innovation which in turn, motivate better learning and teaching among faculty members and students. Rapid growth in scientific knowledge is an indication of the quest for discovery and has an impact on economic and societal development. \nScience, technology and innovation are often initiated at the University research environment and it is also the mission of our University. Research, Innovation and Entrepreneurship are the guiding principles of the academic policy of Devi Ahilya University (DAVV), Indore as these are often incorporated in the courses. However, this advancement of new knowledge can be initiated in an appropriate research environment. Hence a guiding research policy was conceptualized in 2013 which is subsequently updated in 2018 to oversee, promote and encourage research bent of minds in the campus.\n', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_20-16-50Research Policy.pdf', 'TA3_1_1'),
('doll', 'Program Outcomes: Students learnt to use space according to need and  vastu and where to furniture and other things accordingly. They also learnt about the directions and how to use them.\nBetter understanding of space lay out and designing interiors for different places. \nA good coordination was established among students of all batches. Seniors were instructors and juniors were participants, they did a great team work with discipline.\nStudents got idea to design interior of houses, shops. Companies etc.\nBeautiful articles were created using the items that would have just created garbage. \nMany innovative ideas also came out of the program in DIY sessions.\nParticipants developed better sketching skills. \nStudents did paintings on the walls of department and made them beautiful\n', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_13-26-39000.docx', 'TA3_1_1'),
('emrcdavv', 'Descriptive text here', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_17-16-43final_research_policy_22032018.pdf', 'TA3_1_1'),
('iipsdavv', 'http://www.dauniv.ac.in/notices/Research Policy January 02, 2014.pdf', 'http://www.dauniv.ac.in/notices/Research Policy January 02, 2014.pdf', 'TA3_1_1'),
('pranjal', 'Saif \'31*&^$#', 'sa', 'TA3_1_1'),
('saif', 'saif)(*&^^%%$@!\'', 'asdjk*(*(^&^&^?\'', 'TA3_1_1'),
('socsit', 'http://www.dauniv.ac.in/ResearchFelloship.php', 'http://www.dauniv.ac.in/ResearchFelloship.php', 'TA3_1_1'),
('solaw', 'The institute , being a university teaching department, follows the standard policy for promotion of research proposed by the parent university. The policy promotes the research activities among the teachers by offering sponsor ships for research paper publications, attending national/international conferences, seminars, symposiums, etc. Further, every year the teachers across different cadres are rewarded on the basis of the research activities undertaken by them. ', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_13-57-103.1.1 Promotion of Research activities.docx', 'TA3_1_1'),
('sophy', 'School of Physics has very rich research culture as evident from the number of research projects as well as national and international level collaborations and a large number of research publications in journals of international repute.\nKeeping in view that the promotion of research is the key element for sustaining the quality of academics in the department; the department focusses on, (i) procuring financial support from various organizations through research proposals, (ii). Develop manpower in the frontline area of research by involving students in the projects (iii) Share research facilities with other national and international level research institutions. \n The faculty members are encouraged to undertake research projects in frontline area of Physics.All the faculty members have research projects funded by various agencies e.g. DST,DRDO,SERB,UGC etc.\nSharing of knowledge especially theoretical and practical findings of research through various media enhances quality of teaching and learning. Good quality research can be carried out through the collaboration with the national and International level research institutes. All the faculty members collaborate with other organizations. The collaboration also includes training the students at these laboratories. The collaborative endeavour is made impactful via the formal memorandum of understanding (MOU) with the institutions\n Interdisciplinary research is promoted and practiced in the department. The department facilitates to develop research laboratories in various areas of research and has research laboratories in the fields of material science, lasers. The students have the advantage of carrying out their projects in these laboratories.    \nResearch orientation of the faculty imparts up-to-date knowledge to the students and prepares them to participate in the frontline areas of research in Physics. Research insight in the department is reflected via various research output such as - doctoral, post-doctoral, projects, obtained and number of research publications detailed in the forthcoming sections. \n\n\n', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_05-50-063.1.1.docx', 'TA3_1_1');

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
('admin3', 'fdhfjkdhjf', 757, 'July 14 - June 15', 87, '1540926040322'),
('saif', 'saif', 33, 'July 14 - June 15', 23, '1540994481585'),
('sopedu', 'NIL', 0, 'Feb 14 - June 14', 1, '1541233952210'),
('emrcdavv', '-', 0, 'Feb 14 - June 14', 2, '1541239146857'),
('soex', 'Mr. Rameez R. Chowdhary', 1, 'July 14 - June 15', 24, '1541950886892'),
('soex', 'Dr. Manju K. Chattopadhyay', 60000, 'July 14 - June 15', 24, '1541950865117'),
('soex', 'Ms. Kirti Panwar Bhati', 1, 'July 14 - June 15', 24, '1541950486113'),
('admin1', 'a', 1, 'Feb 14 - June 14', 1, '1542018918487'),
('iipsdavv', 'D. Sujata Parwani', 65000, 'July 14 - June 15', 24, '1542100157237'),
('socsit', 'Dr. Ajay Tiwari', 70000, 'July 15 - June 16', 12, '1542104797143'),
('socsit', 'Dr. Ugrasen Suman', 95000, 'July 15 - June 16', 12, '1542104682251'),
('chemsc', 'Dr.Savita Khare', 1, 'July 14 - June 15', 24, '1542259418372'),
('sopharma', 'Mrs. Apeksha Saraf', 92000, 'July 14 - June 15', 24, '1542270820397'),
('sopharma', 'Dr. Gajanand Engla', 90000, 'July 15 - June 16', 24, '1542270845048'),
('sopharma', 'Mr. Devashish Rathore', 80000, 'July 15 - June 16', 24, '1542270857863'),
('sopharma', 'Dr. Mayank Sharma', 95000, 'July 15 - June 16', 24, '1542270874151'),
('admin4', 'hjhf', 45354, 'July 14 - June 15', 67, '1542302256049'),
('sees', 'Dr. S.P. Singh ', 0, 'Feb 14 - June 14', 12, '1542345267268'),
('sees', 'Dr. S.P. Singh ', 0, 'July 14 - June 15', 12, '1542345450955'),
('sees', 'Dr. S.P. Singh ', 0, 'July 15 - June 16', 12, '1542345471794'),
('sees', 'Dr. S.P. Singh ', 0, 'July 16 - June 17', 12, '1542345667521'),
('sees', 'Dr. S.P. Singh ', 0, 'July 17 - June 18', 12, '1542345670810'),
('sees', 'Dr. S.P. Singh ', 0, 'July 18 - June 19', 12, '1542345682252'),
('sees', 'Dr. Rubuna Chaudhary ', 0, 'Feb 14 - June 14', 12, '1542345721174'),
('sees', 'Dr. Rubuna Chaudhary ', 0, 'July 14 - June 15', 12, '1542345745218'),
('sees', 'Dr. Rubuna Chaudhary ', 0, 'July 15 - June 16', 12, '1542345750937'),
('sees', 'Dr. Rubuna Chaudhary ', 0, 'July 16 - June 17', 12, '1542345754003'),
('sees', 'Dr. Rubuna Chaudhary ', 0, 'July 17 - June 18', 12, '1542345759284'),
('sees', 'Dr. Rubuna Chaudhary ', 0, 'July 18 - June 19', 12, '1542345762169'),
('sees', 'Dr. R. N. Singh', 0, 'Feb 14 - June 14', 12, '1542345798445'),
('sees', 'Dr. R. N. Singh', 0, 'July 14 - June 15', 12, '1542345826294'),
('sees', 'Dr. R. N. Singh', 0, 'July 15 - June 16', 12, '1542345829050'),
('sees', 'Dr. R. N. Singh', 0, 'July 16 - June 17', 12, '1542345833401'),
('sees', 'Dr. R. N. Singh', 0, 'July 17 - June 18', 12, '1542345835744'),
('sees', 'Dr. R. N. Singh', 0, 'July 18 - June 19', 12, '1542345850669'),
('ietdavv', 'Dr. Vaibhav Neema', 100000, 'Feb 14 - June 14', 24, '1542351804321'),
('ietdavv', 'Mr. Lalit Gehlot', 50000, 'July 15 - June 16', 999, '1542352047372'),
('ietdavv', 'Dr. Pratosh Bansal', 90000, 'July 15 - June 16', 999, '1542352098796'),
('ietdavv', 'Dr. Dheeraj Nitnaware', 100000, 'July 14 - June 15', 999, '1542352153664'),
('ietdavv', 'Dr. Swarna Torgal', 100000, 'July 14 - June 15', 999, '1542352197678'),
('ietdavv', 'Dr. Vaibhav Jain', 100000, 'July 14 - June 15', 999, '1542352228281'),
('ietdavv', 'Dr. Raksh Upadhyay', 78000, 'July 15 - June 16', 999, '1542352294361'),
('ietdavv', 'Dr. Uma Rathore', 65000, 'July 15 - June 16', 999, '1542352353111'),
('ietdavv', 'Dr. Devendra Verma', 70000, 'July 15 - June 16', 999, '1542352376329'),
('ietdavv', 'Mr. Vijay Karma', 100000, 'July 15 - June 16', 999, '1542352401630'),
('ietdavv', 'Mrs. Madhavi Jangalwa', 50000, 'July 15 - June 16', 999, '1542352540207'),
('ietdavv', 'Dr. Vivek Kapoor', 80000, 'July 14 - June 15', 12, '1542352589165'),
('ietdavv', 'Dr. Vaibhav Neema', 100000, 'Feb 14 - June 14', 24, '1542351804321'),
('ietdavv', 'Mr. Lalit Gehlot', 50000, 'July 15 - June 16', 999, '1542352047372'),
('ietdavv', 'Dr. Pratosh Bansal', 90000, 'July 15 - June 16', 999, '1542352098796'),
('ietdavv', 'Dr. Dheeraj Nitnaware', 100000, 'July 14 - June 15', 999, '1542352153664'),
('ietdavv', 'Dr. Swarna Torgal', 100000, 'July 14 - June 15', 999, '1542352197678'),
('ietdavv', 'Dr. Vaibhav Jain', 100000, 'July 14 - June 15', 999, '1542352228281'),
('ietdavv', 'Dr. Raksh Upadhyay', 78000, 'July 15 - June 16', 999, '1542352294361'),
('ietdavv', 'Dr. Uma Rathore', 65000, 'July 15 - June 16', 999, '1542352353111'),
('ietdavv', 'Dr. Devendra Verma', 70000, 'July 15 - June 16', 999, '1542352376329'),
('ietdavv', 'Mr. Vijay Karma', 100000, 'July 15 - June 16', 999, '1542352401630'),
('ietdavv', 'Mrs. Madhavi Jangalwa', 50000, 'July 15 - June 16', 999, '1542352540207'),
('ietdavv', 'Dr. Vivek Kapoor', 80000, 'July 14 - June 15', 12, '1542352589165'),
('ietdavv', 'Dr. Vaibhav Neema', 100000, 'Feb 14 - June 14', 24, '1542351804321'),
('ietdavv', 'Mr. Lalit Gehlot', 50000, 'July 15 - June 16', 999, '1542352047372'),
('ietdavv', 'Dr. Pratosh Bansal', 90000, 'July 15 - June 16', 999, '1542352098796'),
('ietdavv', 'Dr. Dheeraj Nitnaware', 100000, 'July 14 - June 15', 999, '1542352153664'),
('ietdavv', 'Dr. Swarna Torgal', 100000, 'July 14 - June 15', 999, '1542352197678'),
('ietdavv', 'Dr. Vaibhav Jain', 100000, 'July 14 - June 15', 999, '1542352228281'),
('ietdavv', 'Dr. Raksh Upadhyay', 78000, 'July 15 - June 16', 999, '1542352294361'),
('ietdavv', 'Dr. Uma Rathore', 65000, 'July 15 - June 16', 999, '1542352353111'),
('ietdavv', 'Dr. Devendra Verma', 70000, 'July 15 - June 16', 999, '1542352376329'),
('ietdavv', 'Mr. Vijay Karma', 100000, 'July 15 - June 16', 999, '1542352401630'),
('ietdavv', 'Mrs. Madhavi Jangalwa', 50000, 'July 15 - June 16', 999, '1542352540207'),
('ietdavv', 'Dr. Vivek Kapoor', 80000, 'July 14 - June 15', 12, '1542352589165');

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
('admin3', 'dlkfjdklgfdj', 'l98789fd', '2015', 'July 14 - June 15', 'kdjkfj', '1540926049001'),
('saif', 'saif', 'saif', '87', 'July 15 - June 16', 'saigf', '1540994574765'),
('emrcdavv', '-', '-', '-', 'Feb 14 - June 14', '-', '1541239186577'),
('doll', '0', '0', '0', 'July 14 - June 15', '0', '1541363785884'),
('admin1', 'a', 'b', '1', 'July 14 - June 15', '1', '1542018941209'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'Feb 14 - June 14', 'Nil', '1542100333520'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'July 14 - June 15', 'Nil', '1542100372327'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'July 15 - June 16', 'Nil', '1542100383335'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'July 16 - June 17', 'Nil', '1542100393996'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'July 17 - June 18', 'Nil', '1542100406348'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'July 18 - June 19', 'Nil', '1542100418172'),
('sopedu', 'NIL', 'NA', 'NA', 'July 18 - June 19', 'NA', '1542186332095'),
('soex', 'NIL', 'NIL', 'NIL', 'July 18 - June 19', 'NIL', '1542259147911'),
('sopharma', 'Nil', 'Nil', 'Nil', 'July 18 - June 19', 'Nil', '1542270911064'),
('chemsc', 'Nil', 'Nil', 'Nil', 'July 17 - June 18', 'Nil', '1542259514427'),
('sees', '0', '0', '0', 'Feb 14 - June 14', '0', '1542345921771'),
('sees', '0', '0', '0', 'July 14 - June 15', '0', '1542345944594'),
('sees', '0', '0', '0', 'July 15 - June 16', '0', '1542345954351'),
('sees', '0', '0', '0', 'July 16 - June 17', '0', '1542345960487'),
('sees', '0', '0', '0', 'July 17 - June 18', '0', '1542345971459'),
('sees', '0', '0', '0', 'July 18 - June 19', '0', '1542345978854');

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

--
-- Dumping data for table `t3_1_4`
--

INSERT INTO `t3_1_4` (`Username`, `Name`, `Year`, `Duration`, `Type`, `Agency`, `Exam`, `id_time`) VALUES
('admin3', 'Manoj Patidar', 'July 15 - June 16', '30', 'googlyness', 'google', 'codejam', '1540961379324'),
('emrcdavv', '0', 'Feb 14 - June 14', '2', '0', '0', '0', '1541239229842'),
('doll', '0', 'July 14 - June 15', '0', '0', '0', '0', '1541363835017'),
('somath', 'Sanjay Chouhan', 'July 18 - June 19', '60', 'JRF-CSIR', 'CSIR', 'NET', '1541657675635'),
('biochem', 'Dr Amit Singh Yadav', 'July 17 - June 18', '12', 'Senior Research Associate', 'CSIR', 'Interview', '1541839393500'),
('biochem', 'Dr Sunita Kataria', 'July 17 - June 18', '36', 'Woman Scientist', 'DST', '', '1541839503872'),
('biochem', 'Mr Rajkumar', 'July 16 - June 17', '18', 'Project Fellow', 'UGC', 'GATE, NET', '1541839597970'),
('biochem', 'Dr Sunita Shukla', 'July 15 - June 16', '36', 'Woman Scientist', 'ICMR', '', '1541839746235'),
('biochem', 'Dr Sonal Dhamgaye', 'July 15 - June 16', '36', 'Project Fellow', 'UGC-DAE', '', '1541839804077'),
('biochem', 'Dr Jayesh Vaishnav', 'July 15 - June 16', '12', 'Project Fellow', 'UGC', 'GATE, NET', '1541839876385'),
('biochem', 'Ms Mamta Hirve', 'July 15 - June 16', '36', 'RG - JRF, SRF', 'UGC', '', '1541839996002'),
('biochem', 'Ms Pooja Yadav', 'July 14 - June 15', '48', 'NF - JRF, SRF', 'UGC', '', '1541840101071'),
('soex', 'Kapil Kushwaha', 'Feb 14 - June 14', '24', 'Golden Jubilee fellowship', 'University', 'NET', '1542011810602'),
('soex', 'Hemlata Pal', 'July 15 - June 16', '6', 'Golden Jubilee fellowship', 'University', '', '1542011921727'),
('iipsdavv', 'Namit Dehariya', 'Feb 14 - June 14', '24', 'Research Fellow', 'ICSSR', 'Interview', '1542100454059'),
('iipsdavv', 'Matreye Jain', 'July 15 - June 16', '24', 'Research Fellow', 'UGC', 'Interview', '1542100514494'),
('socsit', 'Mr. Devesh K Lal', 'July 14 - June 15', '60', 'JRF', 'CSIR', 'NET JRF', '1542105098230'),
('biochem', 'Ms Ankita Joshi', 'July 15 - June 16', '24', 'Golden Jubilee', 'UGC 12th Plan', '', '1542106947920'),
('sostat', 'Swati Agrawal', 'Feb 14 - June 14', '00', '00', '00', 'net', '1542181113008'),
('chemsc', 'Jagat Singh Kirar', 'Feb 14 - June 14', '36', 'RGNF-JRF', 'UGC', 'NET,GATE', '1542267065539'),
('chemsc', 'Monika Ahuja', 'Feb 14 - June 14', '24', 'CSIR-SRF', 'CSIR', 'GATE', '1542267300299'),
('chemsc', 'Gagandeep Kour Reen', 'July 15 - June 16', '36', 'MANF-JRF', 'UGC', 'NET', '1542267356980'),
('chemsc', 'Prakash Barfa', 'July 16 - June 17', '36', 'JRF', 'CSIR', 'NET,SET', '1542267442787'),
('chemsc', 'Twinkle Solanki', 'July 17 - June 18', '36', 'JRF', 'UGC', 'NET,SET', '1542267489773'),
('chemsc', 'Ashok Waskle', 'July 17 - June 18', '36', 'JRF', 'CSIR', 'NET,SET', '1542267534139'),
('chemsc', 'Ujla Daswani', 'Feb 14 - June 14', '0', 'Nil', 'Nil', 'Nil', '1542267569882'),
('chemsc', 'Nitin Dubey', 'Feb 14 - June 14', '36', 'JRF/SRF', 'DRDO', 'Nil', '1542267677628'),
('chemsc', 'Ritambhara Dwivedi', 'July 15 - June 16', '0', 'Nil', 'Nil', 'Nil', '1542267721388'),
('chemsc', 'Geetanjali Pandey', 'July 15 - June 16', '0', 'Nil', 'Nil', 'Nil', '1542267779290'),
('chemsc', 'Preeti Shrivastav', 'Feb 14 - June 14', '0', 'Nil', 'Nil', 'Nil', '1542267816523'),
('chemsc', 'Nitin Carpentar', 'July 14 - June 15', '0', 'Nil', 'Nil', 'Nil', '1542267883571'),
('chemsc', 'Swati Parashar', 'July 15 - June 16', '0', 'Nil', 'Nil', 'Nil', '1542267923866'),
('chemsc', 'Hitesh Malvia', 'July 15 - June 16', '0', 'Nil', 'Nil', 'Nil', '1542267957153'),
('chemsc', 'Prerna Kumari', 'Feb 14 - June 14', '0', 'Nil', 'Nil', 'Nil', '1542267993210'),
('chemsc', 'Prabhakar Sharma', 'Feb 14 - June 14', '24', 'Project Fellow', 'MPCST', 'GATE', '1542268016306'),
('chemsc', 'Swati Dubey', 'July 15 - June 16', '0', 'Nil', 'Nil', 'Nil', '1542268086493'),
('chemsc', 'Sheetal Gupta', 'July 15 - June 16', '0', 'Nil', 'Nil', 'Nil', '1542268124570'),
('chemsc', 'Prabal Bandyopadhyay', 'Feb 14 - June 14', '36', 'JRF', 'DRDO', ' In Project', '1542268161342'),
('chemsc', 'Jitendra Singh', 'Feb 14 - June 14', '0', 'Nil', 'Nil', 'Nil', '1542268224514'),
('chemsc', 'Pankaj Patidar', 'Feb 14 - June 14', '36', 'JRF', 'UGC', 'NET,GATE', '1542268257962'),
('chemsc', 'Prasad Gokhale', 'Feb 14 - June 14', '0', 'Nil', 'Nil', 'Nil', '1542268297738'),
('chemsc', 'Sheenu Bhadoriya', 'Feb 14 - June 14', '0', 'Nil', 'Nil', 'Nil', '1542268331978'),
('chemsc', 'Neena Shrivastav', 'Feb 14 - June 14', '0', 'Nil', 'Nil', 'Nil', '1542268357105'),
('chemsc', 'Jaswant Carpentar', 'Feb 14 - June 14', '24', 'Project fellow', 'UGC', 'Project fellow', '1542268405846'),
('chemsc', 'Akrati Verma', 'Feb 14 - June 14', '0', 'Nil', 'Nil', 'Nil', '1542268427687'),
('chemsc', 'Pawan Kumar Sharma', 'Feb 14 - June 14', '0', 'NIl', 'Nil', 'Nil', '1542268516291'),
('chemsc', 'Anju Pathak', 'Feb 14 - June 14', '0', 'Nil', 'NIl', 'Nil', '1542268542107'),
('chemsc', 'Sapana Joshi', 'Feb 14 - June 14', '24', 'JRF', 'MPCST', 'Nil', '1542268577434'),
('chemsc', 'Ravi Vishwakarma', 'Feb 14 - June 14', '0', 'Nil', 'Nil', 'NET,SET', '1542268624451'),
('chemsc', 'Sunil Patidar', 'Feb 14 - June 14', '0', 'Nil', 'Nil', 'NET,GATE', '1542268655078'),
('chemsc', 'Nishi Sharma', 'July 17 - June 18', '0', 'Nil', 'Nil', 'Nil', '1542268684285'),
('chemsc', 'Monika Yadav', 'July 17 - June 18', '0', 'NIl', 'Nil', 'Nil', '1542268724378'),
('chemsc', 'Navdeep Sharma', 'July 17 - June 18', '0', 'Nil', 'Nil', 'Nil', '1542268785247'),
('chemsc', 'Deepika Geedkar', 'July 18 - June 19', '36', 'JRF', 'MPCST', 'Nil', '1542268799439'),
('chemsc', 'Ravi Sugandhi', 'July 17 - June 18', '0', 'Nil', 'Nil', 'Nil', '1542268867442'),
('sopharma', 'Dr. Mithun Singh Rajput', 'July 18 - June 19', '24', 'NPDF by SERB-DST', 'DST, New Delhi', 'Nil', '1542270930545'),
('sopharma', 'Dr. Sunanda Panda', 'July 16 - June 17', '36', 'WOS-A by DST', 'DST, New Delhi', 'Nil', '1542270964041'),
('sopharma', 'Ms. Nidhi Gupta', 'July 14 - June 15', '60', 'DST-INSPIRE Fellowship', 'DST, New Delhi', 'Nil', '1542270992627'),
('sees', 'Vikas Ahirwar', 'Feb 14 - June 14', '24', 'JRF', 'Rajiv Gandhi Fellowship (RGNF', '0', '1542349537030'),
('sees', 'Vikas Ahirwar', 'July 15 - June 16', '36', 'SRF', 'Rajiv Gandhi Fellowship (RGNF', '0', '1542349643540'),
('sees', 'Shaishav Sharma', 'July 14 - June 15', '12', 'JRF', 'M.P. Biotechnology Council, M.P.', '0', '1542349720814'),
('sees', 'Satyendra Tripathi', 'July 14 - June 15', '12', 'JRF', 'DST, New Delhi', '0', '1542349787302'),
('sees', 'Chandan Singh', 'Feb 14 - June 14', '12', 'SRF', 'National Renewable Energy Fellowship(NRE), New Delhi', '0', '1542349842751'),
('sees', 'Shukti Tomar', 'Feb 14 - June 14', '12', 'SRF', 'National Renewable Energy Fellowship(NRE), New Delhi', '0', '1542349952883');

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
('admin3', 'C', 'dsjbfkjd', 'Feb 14 - June 14', 'dkjsnkjfs', '1540919503444'),
('emrcdavv', 'A', 'Animation Art Studio', 'Feb 14 - June 14', 'http://www.emrcdavv.edu.in/infrastructures.html', '1541239769818'),
('emrcdavv', 'A', 'Radio Broadcast Station', 'Feb 14 - June 14', 'http://www.emrcdavv.edu.in/infrastructures.html', '1541239792723'),
('emrcdavv', 'A', 'Audio Video Editing Compositing', 'Feb 14 - June 14', 'http://www.emrcdavv.edu.in/infrastructures.html', '1541239793515'),
('emrcdavv', 'A', 'Multimedia Lab', 'Feb 14 - June 14', 'http://www.emrcdavv.edu.in/infrastructures.html', '1541239794323'),
('emrcdavv', 'A', 'Video Editing Suites 6', 'Feb 14 - June 14', 'http://www.emrcdavv.edu.in/infrastructures.html', '1541239796274'),
('emrcdavv', 'A', 'Audio Video Recording Studio 1', 'Feb 14 - June 14', 'http://www.emrcdavv.edu.in/infrastructures.html', '1541239797091'),
('emrcdavv', 'A', 'Audio Video Recording Studio 2', 'Feb 14 - June 14', 'http://www.emrcdavv.edu.in/infrastructures.html', '1541239797762'),
('emrcdavv', 'A', 'Photography Studio', 'Feb 14 - June 14', 'http://www.emrcdavv.edu.in/infrastructures.html', '1541239799083'),
('emrcdavv', 'A', 'Production Control Room', 'Feb 14 - June 14', 'http://www.emrcdavv.edu.in/infrastructures.html', '1541239800770'),
('emrcdavv', 'A', 'Video Editing Suites 4', 'Feb 14 - June 14', 'http://www.emrcdavv.edu.in/infrastructures.html', '1541239802458'),
('emrcdavv', 'A', 'Central Studio Facility', 'Feb 14 - June 14', 'http://www.emrcdavv.edu.in/infrastructures.html', '1541239987573'),
('biochem', 'A', 'Animal House', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/10-11-2018_14-39-38Merged.pdf', '1541840367353'),
('socsit', 'D', 'Research/Statistical Databases', 'Feb 14 - June 14', 'http://research.dauniv.ac.in:8080/', '1542104109725'),
('sopedu', 'A', 'At University Level', 'Feb 14 - June 14', 'University Level', '1542186513364'),
('sostat', 'E', 'nil', 'Feb 14 - June 14', 'nil', '1542188527491'),
('iipsdavv', 'A', 'University Level', 'Feb 14 - June 14', 'University Level', '1542270758370'),
('solaw', 'D', 'Data bases', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_14-01-503.1.5 Facilities.docx', '1542270619511'),
('chemsc', 'A', 'Central Fabrication facility', 'Feb 14 - June 14', '1', '1542259591909'),
('sees', 'E', '0', 'Feb 14 - June 14', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_10-58-05criteria-3 -3.1.5.pdf', '1542346052572'),
('sees', 'E', '0', 'July 14 - June 15', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_10-58-05criteria-3 -3.1.5.pdf', '1542346079391'),
('sees', 'E', '0', 'July 15 - June 16', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_10-58-05criteria-3 -3.1.5.pdf', '1542346117941'),
('sees', 'E', '0', 'July 16 - June 17', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_10-58-05criteria-3 -3.1.5.pdf', '1542346124981'),
('sees', 'E', '0', 'July 17 - June 18', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_10-58-05criteria-3 -3.1.5.pdf', '1542346130432'),
('sees', 'E', '0', 'July 18 - June 19', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_10-58-05criteria-3 -3.1.5.pdf', '1542346137192');

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

--
-- Dumping data for table `t3_1_6`
--

INSERT INTO `t3_1_6` (`Username`, `Scheme`, `Agency`, `Year`, `Funds`, `Duration`, `id_time`) VALUES
('admin3', 'djskfkjn', 'kkdskfj', 'Feb 14 - June 14', 78787, '9009', '1540919517860'),
('emrcdavv', '0', '0', 'Feb 14 - June 14', 0, '2', '1541240025683'),
('soex', 'Visvesvaraya  PhD Scheme', 'Department of Electronics and Information Technology (DeITy)', 'July 15 - June 16', 6700000, '60', '1541417352396'),
('sopedu', 'UGC SAP DRS-I', 'UGC', 'July 16 - June 17', 9600000, '60', '1542187298564'),
('iipsdavv', 'University Level', 'University Level', 'Feb 14 - June 14', 1000000, '22', '1542270891580'),
('chemsc', 'UGC-SAP DRS-I', 'UGC', 'July 15 - June 16', 12600000, '60', '1542259861242'),
('sees', '0', '0', 'Feb 14 - June 14', 0, '12', '1542346583430'),
('sees', '0', '0', 'July 14 - June 15', 0, '12', '1542346598543'),
('sees', '0', '0', 'July 15 - June 16', 0, '12', '1542346613325'),
('sees', '0', '0', 'July 16 - June 17', 0, '12', '1542346644532'),
('sees', '0', '0', 'July 17 - June 18', 0, '12', '1542346651763'),
('sees', '0', '0', 'July 18 - June 19', 0, '12', '1542346662013');

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

--
-- Dumping data for table `t3_2_2`
--

INSERT INTO `t3_2_2` (`Username`, `Project`, `Principal`, `Department`, `Year`, `Funds`, `Duration`, `id_time`) VALUES
('admin3', 'dfkdlj', 'knfkdlnfnd', 'lkfndklgnlkgn', 'July 15 - June 16', 84739, 9878, '1540919529878'),
('saif', 'SAIF UR RAHMAN KHAN', 'SHAFI UR RAHMNA KHAN', 'ENGINEERING', 'July 16 - June 17', 876, 874, '1540994891620'),
('emrcdavv', 'NMEICT', 'Dr. Akhilesh Kumar Singh', 'CEC-UGC', 'Feb 14 - June 14', 11523000, 36, '1541240086611'),
('emrcdavv', 'MOOC for SWAYAM Platform', 'Dr. Akhilesh Kumar Singh', 'CEC-UGC', 'Feb 14 - June 14', 5455000, 60, '1541240140092'),
('biochem', 'Research Project', 'Dr Rekha Gadre', 'School of Biochemistry', 'July 14 - June 15', 7.38, 36, '1541844932436'),
('biochem', 'UGC Major Research Project', 'Dr Meeta Jain', 'School of Biochemistry', 'July 14 - June 15', 13.9, 36, '1541844746205'),
('iipsdavv', '“A Study Of Impact Of Vocational Training On Women Empowerment With Special Reference  To Low Income Segment”', 'Dr.Jyoti Sharma(principal investigator) and Dr.Anshu Bhati (Co investigator) ', 'International Institute of Professional Studies,DAVV', 'July 15 - June 16', 491600, 36, '1542187450631'),
('iipsdavv', '“Dynamics of Marketing of Vegetables and fruits: A Study for Farmers and Market Intermediaries in Indore District”', 'Dr.Yamini Karmarkar(principal investigator)', 'International Institute of Professional Studies,DAVV', 'July 17 - June 18', 753400, 60, '1542187529983'),
('iipsdavv', 'Internet Banking Service Quality Dimension and its Impact on Customer Satisfaction: A Study in Context of Indore District in Madhya Pradesh', 'Dr.Geeta Sharma (Principal Investigator) and Dr.Surendra Malviya(Co investigator', 'International Institute of Professional Studies,DAVV', 'July 15 - June 16', 261225, 24, '1542187375152'),
('sopedu', 'UGC SAP DRS-I', 'Prof. Deepak Mehta', 'School of Physical Education', 'July 16 - June 17', 9600000, 60, '1542187511760'),
('iipsdavv', '“E-learning in Open and Distance Education: A Comprehensive study of University of Madhya Pradesh”', 'Dr.Manish Sitlani(principal investigator) and Dr.Kapil Jain(co investigator)', 'International Institute of Professional Studies,DAVV', 'July 15 - June 16', 313600, 24, '1542187173666'),
('iipsdavv', 'Holistic Development', 'Dr.Sujata Parwani  (principal investigator)', 'International Institute of Professional Studies,DAVV', 'July 17 - June 18', 65000, 18, '1542187638662'),
('soex', 'NIL', 'NIL', 'nil', 'July 18 - June 19', 0, 1, '1542261308966'),
('chemsc', 'DRDO', 'Dr. Ashok Kumar', 'School of Chemical Sciences', 'Feb 14 - June 14', 4484000, 36, '1542260167970'),
('chemsc', 'MPCST', 'Dr. Pratibha Sharma', 'School of Chemical Sciences', 'July 17 - June 18', 780000, 36, '1542260044281'),
('chemsc', 'MPCST', 'Dr.H.P.S. Chauhan', 'School of Chemical Sciences', 'Feb 14 - June 14', 783000, 24, '1542260281218'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies ', 'July 14 - June 15', 911000, 12, '1542437765000'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 16 - June 17', 911000, 12, '1542438016208'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 16 - June 17', 1026000, 12, '1542438061699'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 17 - June 18', 1026000, 12, '1542438133990'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies ', 'July 14 - June 15', 911000, 12, '1542437765000'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 16 - June 17', 911000, 12, '1542438016208'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 16 - June 17', 1026000, 12, '1542438061699'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 17 - June 18', 1026000, 12, '1542438133990'),
('sees', 'Biogas Development Training Center', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 14 - June 15', 2025059, 12, '1542438210791'),
('sees', 'Biogas Development Training Center', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 15 - June 16', 1116303, 12, '1542438289971'),
('sees', 'Biogas Development Training Center', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 16 - June 17', 3090600, 12, '1542438297186'),
('sees', 'Biogas Development Training Center', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 17 - June 18', 135000, 12, '1542438301607'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies ', 'July 14 - June 15', 911000, 12, '1542437765000'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 16 - June 17', 911000, 12, '1542438016208'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 16 - June 17', 1026000, 12, '1542438061699'),
('sees', 'Regional Test Center -Cum-Technical Backup Unit For Solar Thermal Devices', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 17 - June 18', 1026000, 12, '1542438133990'),
('sees', 'Biogas Development Training Center', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 14 - June 15', 2025059, 12, '1542438210791'),
('sees', 'Biogas Development Training Center', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 15 - June 16', 1116303, 12, '1542438289971'),
('sees', 'Biogas Development Training Center', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 16 - June 17', 3090600, 12, '1542438297186'),
('sees', 'Biogas Development Training Center', 'Dr. S.P. Singh', 'School of Energy and Environmental Studies', 'July 17 - June 18', 135000, 12, '1542438301607');

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
('admin3', 'fkjdjfkj', 'jknfdkjfdkn', 84738, 'jdshkjfnh', 879, 'kdjnfjndfkj', '49389', 'Feb 14 - June 14', '1540919549972'),
('biochem', 'Dr Meeta Jain', 'Reader', 36, 'UGC Major Research Project', 13.9, 'UGC', '2015', 'July 14 - June 15', '1541841232921'),
('biochem', 'Dr Rekha Gadre', 'Professor', 36, 'Research Project', 7.38, 'UGC-DAE', '2015', 'July 14 - June 15', '1541841331469'),
('soex', 'NIL', 'NIL', 2018, 'NIL', 0, 'NIL', 'NIL', 'July 18 - June 19', '1542260059497'),
('sopharma', 'Dr. Mrs. Anupama Parate', 'Lecturer', 36, 'Molecular Modeling, Synthesis and Evaluation of some substituted Benzimidazoles as Angiotensin II receptor antagonists and partial PPAR-g agonists: Dual active agents', 300000, 'MPCST, Bhopal', '2015', 'July 15 - June 16', '1542299572238'),
('chemsc', 'Dr. Ashok Kumar', 'Professor', 36, 'Efficient Construction of Novel Triazoles as Potential Therapeutics: A Classical  Versus Click Chemistry Approach ', 4484000, 'DRDO, New Delhi', '2014', 'Feb 14 - June 14', '1542291529094'),
('chemsc', 'Dr.H.P.S. Chauhan', 'Professor', 24, 'Studies on the synthesis and characterization of some group 15 metals nano complexes with sulphur donor ligands', 783000, 'MPCST,Bhopal', '2014', 'July 14 - June 15', '1542291702423'),
('chemsc', 'Dr.Pratibha Sharma / Dr. Ashok Kumar', 'Professor', 36, 'Heterogeneous Nanocatalytic Synthetic Approaches for the Design and Development of Heterocyclic Azolo Scaffolds', 780000, 'MPCST,Bhopal', '2018', 'July 17 - June 18', '1542291772382'),
('emrcdavv', 'Dr. Akhilesh Kumar Singh', 'Director', 24, 'MOOC SWAYAM Platform', 5455000, 'CEC-UGC', '2016', 'July 18 - June 19', '1541240264244'),
('emrcdavv', 'Dr. Akhilesh Kumar Singh', 'Director', 60, 'NMEICT', 11523000, 'CEC-UGC', '2011', 'Feb 14 - June 14', '1541240230076');

-- --------------------------------------------------------

--
-- Table structure for table `t3_3_1`
--

CREATE TABLE `t3_3_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_3_1`
--

INSERT INTO `t3_3_1` (`Username`, `descr`, `Link`, `id_time`) VALUES
('admin3', 'google descr \' \" < >  ? % &', 'google link \' \" < >  ? % &', 'TA3_3_1'),
('saif', 'SAIIF bkbksfal*&&*^$%$$*)(_)_(()&*&%&^%#', 'GOOGLE&*&^%&*(', 'TA3_3_1'),
('emrcdavv', 'Descriptive Text Here', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_15-47-5500Sample Document.pdf', 'TA3_3_1'),
('soex', 'Students have formed a group and organize sessions \'Algotronix\' series', '0', 'TA3_3_1'),
('chemsc', 'Common incubation centre has been established in  IET, DAVV, Indore campus for students and faculty involved in innovative activities.\n', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_20-36-49Incubation centre.docx', 'TA3_3_1'),
('socsit', 'NA', 'NA', 'TA3_3_1');

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
('admin3', 'July 15 - June 16', 'fdskf', '2018-10-01', '2018-10-31', 'nfdnkfnkfn', '2018-09-07', '1540926096294'),
('emrcdavv', 'Feb 14 - June 14', 'IPR', '2014-02-04', '2014-05-05', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_15-47-5500Sample Document.pdf', '2014-05-01', '1541240414804'),
('chemsc', 'July 17 - June 18', 'Instrumental Techniques in Chemical Sciences’', '2017-08-02', '2017-08-02', 'MoU ', '0001-01-01', '1542261049258'),
('sopharma', 'July 16 - June 17', 'Molecular Biology Experiments', '2016-10-06', '2016-10-07', '11', '0001-01-01', '1542271093186'),
('sopharma', 'July 16 - June 17', 'Basic and Applied Immunology: An Industrial Perspective', '2017-01-27', '2017-01-28', '11', '0001-01-01', '1542271172514');

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

--
-- Dumping data for table `t3_3_3`
--

INSERT INTO `t3_3_3` (`Username`, `Title`, `Name`, `Agency`, `Period`, `Year`, `Category`, `id_time`) VALUES
('admin3', 'akeb', 'kjkjsfk', 'jkbfkdbkdj', 'fkdnfkndfk', 'Feb 14 - June 14', 'kjfdnfkndfk', '1540919661360'),
('emrcdavv', '-', '-', '-', '-', 'Feb 14 - June 14', '-', '1541240496484'),
('soex', 'Innovation ', 'Murtuza, Jitendra', 'IIM, Indore', '2017', 'July 17 - June 18', 'Student', '1541418433715'),
('biochem', 'Best paper presentation award', 'Dr Venkat Are', 'Association of Indian Universities, New Delhi', '2017', 'July 17 - June 18', 'Research Scholar', '1541845458548'),
('biochem', 'Excellence in Research Award ', 'Dr Sunuta Kataria', 'Astha Foundation, Meerut', '2017', 'July 17 - June 18', 'Scientist', '1541846102766'),
('biochem', 'Best paper presentation award', 'Dr Venkat Are', 'Association of Indian Universities, New Delhi', '2017', 'July 17 - June 18', 'Research Scholar', '1541845458548'),
('biochem', 'Excellence in Research Award ', 'Dr Sunuta Kataria', 'Astha Foundation, Meerut', '2017', 'July 17 - June 18', 'Research Scholar', '1541846102766'),
('biochem', 'Best Presentation Award ', 'Dr Meeta Jain', 'World Environment Congress, Banglore', '2018', 'July 17 - June 18', 'Teacher', '1541846196773'),
('soex', 'Assisted robotics', 'Bhupendra Gupta, Apeksha, Alok Pindoriya', 'AIU Summit', '2018', 'July 17 - June 18', 'Student', '1541418350724'),
('soex', 'Award for Academic and Research', 'Ms. Kirti Panwar Bhati', 'Devi Ahilya University, Indore', '2018', 'July 17 - June 18', 'Teacher ', '1541944420214'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'Nil', 'Feb 14 - June 14', 'Nil', '1542107433180'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'Nil', 'July 14 - June 15', 'Nil', '1542107449218'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'Nil', 'July 15 - June 16', 'Nil', '1542107461739'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'Nil', 'July 16 - June 17', 'Nil', '1542107478138'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'Nil', 'July 17 - June 18', 'Nil', '1542107490217'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'Nil', 'July 18 - June 19', 'Nil', '1542107503987'),
('sostat', 'research recognitation', 'Dr. Snigdha Banerjee', 'DAVV Indore', '2016', 'July 16 - June 17', 'Teacher', '1542181793727'),
('doll', ' Innovation and Entrepreneurship challenge- 2018', 'Tanishek Joshi', 'DAVV Industry Partnership Cell ', '2018', 'July 17 - June 18', 'Student', '1542314873148'),
('doll', ' Innovation and Entrepreneurship challenge- 2018', 'Neetu Joshi', 'DAVV Industry Partnership Cell nd Entrepreneurship challenge- 2018', '2018', 'July 17 - June 18', 'Student', '1542315209379'),
('doll', ' Innovation and Entrepreneurship challenge- 2018', 'Kratika Lashkari', 'DAVV Industry Partnership Cell ', '2018', 'July 17 - June 18', 'Student', '1542315257818'),
('doll', ' Innovation and Entrepreneurship challenge- 2018', 'Muskan Danotiya', 'DAVV Industry Partnership Cell ', '2018', 'July 17 - June 18', 'Student', '1542315307634'),
('doll', ' Innovation and Entrepreneurship challenge- 2018', 'Anshul Singh', 'DAVV Industry Partnership', '2018', 'July 17 - June 18', 'Student', '1542315364715'),
('doll', ' Innovation and Entrepreneurship challenge- 2018', 'Pawan Makwana', 'DAVV Industry Partnership', '2018', 'July 17 - June 18', 'Student', '1542315427168'),
('doll', ' Innovation and Entrepreneurship challenge- 2018', 'Sonali Gupta', 'DAVV Industry Partnership', '2018', 'July 17 - June 18', 'Student', '1542315623401'),
('sopharma', 'Nil', 'Nil', 'Nil', 'Nil', 'July 18 - June 19', 'Nil', '1542299668021'),
('Sees', 'ac', 'ac', 'ac', 'ac', 'Feb 14 - June 14', 'ac', '1542413458329'),
('chemsc', 'Synthesis and DFT studies ..', 'Ujla Daswani ', 'Indian Science Congress , Kolkata', '2018', 'July 17 - June 18', 'Research Scholar', '1542269058902'),
('chemsc', 'Synthesis catalytic activity', 'Gagandeep Kour Reen', 'Madhya Pradesh Council of Science and Technology, Bhopal', '2017', 'July 16 - June 17', 'Research Scholar', '1542269443873'),
('chemsc', '1', 'Gagandeep Kour Reen', 'Indian Council of Chemist, Agra', '2016', 'July 16 - June 17', 'Research Scholar', '1542447753050'),
('chemsc', '1', 'Prakash Barfa', 'Department of Chemistry, Delhi University, New Delhi', '2018', 'July 17 - June 18', 'Research Scholar', '1542447984882'),
('chemsc', '1', 'Nitin Dubey', 'Department of Chemistry, Holkar Science College, Indore', '2015', 'July 15 - June 16', 'Research Scholar', '1542448126263'),
('chemsc', '1', 'Nitin Carpentar', 'Indian Council of Chemist, Agra', '2015', 'July 15 - June 16', 'Research Scholar', '1542448310701'),
('chemsc', '1', 'Dr. H. P. S. Chauhan', 'Indian Council of Chemist, Agra', '2017', 'July 17 - June 18', 'Professor', '1542448492838'),
('chemsc', '1', 'Dr. Pratibha Sharma', 'Devi Ahilya VIshwavidyalaya, Indore', '2017', 'July 16 - June 17', 'Professor', '1542448571940'),
('chemsc', '1', 'Dr. Ashok Kumar', 'Devi Ahilya VIshwavidyalaya, Indore', '2018', 'July 17 - June 18', 'Professor', '1542448578801'),
('chemsc', '1', 'Gagandeep Kour Reen', 'Department of Chemistry, Holkar Science College, Indore', '2018', 'July 18 - June 19', 'Research Scholar', '1542448724354'),
('chemsc', '1', 'Swati Parashar', 'Department of Chemistry, Holkar Science College, Indore', '2018', 'July 18 - June 19', 'Research Scholar', '1542448811650'),
('chemsc', '1', 'Ritambhara Dwivedi', 'School of Chemical Sciences, Davv, Indore', '2018', 'July 17 - June 18', 'Research Scholar', '1542448852674');

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

--
-- Dumping data for table `t3_3_4`
--

INSERT INTO `t3_3_4` (`Username`, `Name`, `Nature`, `Period`, `Year`, `Contact`, `id_time`) VALUES
('admin3', 'Littlehelp', 'College Level Platform', '2017', 'July 14 - June 15', '7000189190', '1540961413268'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'July 14 - June 15', 'Nil', '1542107577048'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'Feb 14 - June 14', 'Nil', '1542107566417'),
('emrcdavv', 'SJY Production - Knocksense Platform', 'Digital Production ', '2017', 'July 17 - June 18', 'Sanjay Thakur', '1541244353597'),
('emrcdavv', 'Wadhwani Enterprise', 'Digital Solution', '2018', 'July 17 - June 18', 'Sunny Wadhwani', '1541240688933'),
('emrcdavv', 'Indore Page Ek Number', 'Merchandize Platform', '2014', 'Feb 14 - June 14', 'Rahul Sethiya', '1541240518293'),
('emrcdavv', 'GiftsVilla', 'Handmade Gift Store', '2016', 'July 16 - June 17', 'Rashi Wadhwa Vaishali Raheja', '1541240651733'),
('emrcdavv', 'Matrix Production ', 'Video Production', '2017', 'July 16 - June 17', 'Gajendra Singh Rahod', '1541240617173'),
('emrcdavv', 'MP360 Degree', 'Digital Media Agency', '2015', 'July 14 - June 15', 'Atul Tiwari', '1541240576245'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'July 15 - June 16', 'Nil', '1542107590080'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'July 16 - June 17', 'Nil', '1542107602927'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'July 17 - June 18', 'Nil', '1542107630192'),
('iipsdavv', 'Nil', 'Nil', 'Nil', 'July 18 - June 19', 'Nil', '1542107640594'),
('sostat', 'Shubhangi Upabhyay', 'data analyst', '2016', 'July 15 - June 16', 'Canopus Pvt. Ltd', '1542181979371'),
('sostat', 'Mohini Mallik', 'data analyst', '2018', 'July 17 - June 18', 'Canopus Pvt. Ltd', '1542182116060'),
('sostat', 'Mohini Yadav', 'data analyst', '2018', 'July 17 - June 18', 'Canopus Pvt. Ltd', '1542182141432'),
('sostat', 'Anjali Raghuvanshi', 'data analyst', '2018', 'July 17 - June 18', 'Canopus Pvt. Ltd', '1542182159904'),
('sostat', 'Divya gupta', 'data analyst', '2018', 'July 17 - June 18', 'Canopus Pvt. Ltd', '1542182198339'),
('soex', 'Kiran Robotix Automachine Technologies OPC PVT LTD, Indore', 'Technical', '2016', 'July 15 - June 16', 'Sharad Sharma', '1542261703916'),
('soex', 'Engineer Philosophy, Indore', 'GIS Mapping based ', '2015', 'July 15 - June 16', 'Akshay Upadhyay', '1542261932994'),
('soex', 'GoMap Software Solutionz Pvt Ltd., Indore', 'GIS Mapping based ', '2015', 'July 15 - June 16', 'Ms. Deepali Shrivastava', '1542261970543'),
('chemsc', 'Nil', 'Nil', 'Nil', 'July 17 - June 18', 'Nil', '1542266736356'),
('sopharma', 'Nil', 'Nil', 'Nil', 'July 18 - June 19', 'Nil', '1542299698707'),
('sees', '0', '0', '0', 'Feb 14 - June 14', '0', '1542346964635'),
('sees', '0', '0', '0', 'July 14 - June 15', '0', '1542346976807'),
('sees', '0', '0', '0', 'July 15 - June 16', '0', '1542346986927'),
('sees', '0', '0', '0', 'July 16 - June 17', '0', '1542346996420'),
('sees', '0', '0', '0', 'July 17 - June 18', '0', '1542347004971'),
('sees', '0', '0', '0', 'July 17 - June 18', '0', '1542347013281');

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

--
-- Dumping data for table `t3_4_1`
--

INSERT INTO `t3_4_1` (`Username`, `URL`, `YesNo`, `Mechanism`, `id_time`) VALUES
('admin3', 'essdgd', 'dgfgfd', 'hfhfghf', '1540919717452'),
('emrcdavv', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_15-47-5500Sample Document.pdf', 'YES', 'Weblink', '1541240745661'),
('soex', 'http://uid.dauniv.ac.in/NAC/profile/docs/11-11-2018_19-34-41Plagiarism_Merged.pdf', 'Yes', 'Use of Urkund software for plagiarism detection in M.Tech. Major Project Thesis', '1541944907486'),
('iipsdavv', 'http://www.clib.dauniv.ac.in/CPBLIS507.pdf', 'Yes', 'Software', '1542271127209'),
('sees', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_11-22-123.4.1-.pdf', 'no', 'no', '1542347340359'),
('chemsc', 'Research Policy Link', 'Yes', 'Through Software ', '1542262148892'),
('socsit', 'https://www.inflibnet.ac.in/', 'Yes', 'Online', '1542441057953');

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

--
-- Dumping data for table `t3_4_2`
--

INSERT INTO `t3_4_2` (`Username`, `Name`, `Award`, `Agency`, `Period`, `Year`, `Details`, `id_time`) VALUES
('admin3', 'dgdfg', 'gfdfdfdd', 'fdfgfdhh', '3432', 'July 15 - June 16', 'rgffhfd', '1540919733675'),
('emrcdavv', '-', '-', '-', '-', 'Feb 14 - June 14', '-', '1541240784021'),
('biochem', 'Dr Meeta Jain', 'Recognitio Award for Reasearch', 'DAVV, Indore', '2017', 'July 16 - June 17', 'Certificate', '1541845685106'),
('iipsdavv', 'NIL', 'NIL', 'NIL', '2014', 'Feb 14 - June 14', '000', '1542271164032'),
('sees', '0', '0', '0', '0', 'Feb 14 - June 14', '0', '1542347385219'),
('sees', '0', '0', '0', '0', 'July 14 - June 15', '0', '1542347994609'),
('sees', '0', '0', '0', '0', 'July 16 - June 17', '0', '1542348008642'),
('sees', '0', '0', '0', '0', 'July 17 - June 18', '0', '1542348027161'),
('sees', '0', '0', '0', '0', 'July 18 - June 19', '0', '1542348038861');

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

--
-- Dumping data for table `t3_4_3`
--

INSERT INTO `t3_4_3` (`Username`, `Name`, `Number`, `Year`, `id_time`) VALUES
('admin3', 'fdg', 'fhfddhf', 'July 14 - June 15', '1540919758454'),
('emrcdavv', '-', '-', 'Feb 14 - June 14', '1541240796556'),
('soex', 'Manju', '1', 'July 17 - June 18', '1542262030481'),
('soex', 'Kirti', '2', 'July 17 - June 18', '1542262041304'),
('chemsc', 'NIL', 'nil', 'July 17 - June 18', '1542262270641'),
('iipsdavv', 'NIL', 'NIL', 'Feb 14 - June 14', '1542271213056'),
('sopharma', 'Nil', 'Nil', 'July 18 - June 19', '1542299724101'),
('sees', '0', '0', 'Feb 14 - June 14', '1542348349648'),
('sees', '0', '0', 'July 14 - June 15', '1542348358203'),
('sees', '0', '0', 'July 15 - June 16', '1542348363300'),
('sees', '0', '0', 'July 16 - June 17', '1542348368198'),
('sees', '0', '0', 'July 17 - June 18', '1542348374321'),
('sees', '0', '0', 'July 18 - June 19', '1542348379639');

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
('admin3', 'fhfhhh', ' DEPARTMENT OF ADMIN THREE ', 'ffffdd', 'hfhfghgfh', '53435', '4534', 'July 15 - June 16', '1540919773425'),
('somath', 'Naresh Berwal', ' SCHOOL OF MATHEMATICS ', 'D. K. Panchal', 'SOME ASPECTS OF Wavelet AND ITS APPLICATION', '2011', '2014', 'July 14 - June 15', '1541658176021'),
('somath', 'Richa Jain', ' SCHOOL OF MATHEMATICS ', 'Manisha Sakkale, K. N. Rajeswari', 'x', '2013', '2018', 'July 17 - June 18', '1541658411001'),
('biochem', 'Ritu Tyagi', ' SCHOOL OF BIOCHEMISTRY ', 'Dr D. Bhatnagar, Co Supervisor Dr Poonam Rana, New Delhi', 'Metabonomic approach for the identification biomarkers for tungsten alloy based heavy metals induced chemical toxicity using NMR  spectroscopy and imaging', '2009', '2015', 'July 14 - June 15', '1542182651953'),
('biochem', 'Deepti Dixit', ' SCHOOL OF BIOCHEMISTRY ', 'Dr D. Bhatnagar', 'Antioxidant and Radioprotective effects ofherbal and natural products against gamma radiation induced oxidative stress  ', '2009', '2014', 'July 14 - June 15', '1542182566485'),
('biochem', 'Ankita Joshi', ' SCHOOL OF BIOCHEMISTRY ', 'Dr D. Bhatnagar', 'Antioxidative, antidiabetic and antiinfammatory activity of some medicinal plants', '2013', '2018', 'July 17 - June 18', '1542101992850'),
('biochem', 'Vaishali Mourya', ' SCHOOL OF BIOCHEMISTRY ', 'Dr Meeta Jain, Co Supervisor Dr Anita Rani,', 'Association mapping for protein content in soybean germplasm lines', '2010', '2017', 'July 17 - June 18', '1542099118429'),
('biochem', 'Sonal Dhamgaye', ' SCHOOL OF BIOCHEMISTRY ', 'Dr Rekha Gadre', 'Evaluation of salinity stress on the key enzymes of nitrogen assimilation in Phaseolus vulgaris', '2010', '2017', 'July 16 - June 17', '1541847561125'),
('biochem', 'Venkat Are', ' SCHOOL OF BIOCHEMISTRY ', 'Dr Rekha Gadre, Co-supervisor Dr Ravindra Makde, RRCAT, Indore', 'Structural and functional characterization of aminopeptidase P fold proteins ', '2015', '2018', 'July 18 - June 19', '1541847635088'),
('biochem', 'Samatha Gunapati', ' SCHOOL OF BIOCHEMISTRY ', 'Dr Rekha Gadre, Co Supervisor Dr V.A. Sane, NBRI, Lucknow', 'Isolation and Characterization of Draught related NAC Transcription factor from Cotton roots (Gossipium herbacium)', '2011', '2015', 'July 14 - June 15', '1541847472914'),
('biochem', 'Ankit Kelotra', ' SCHOOL OF BIOCHEMISTRY ', 'Dr. S. M. Gokhale / Dr. Anil Bidwai', 'Computational drug design for some crucial target proteins in Psoriasis.', '2009', '2016', 'July 16 - June 17', '1542006137319'),
('biochem', 'Antariksha Tyagi', ' SCHOOL OF BIOCHEMISTRY ', 'Dr. S. M. Gokhale / Dr. Sribash Roy', 'Studies on global gene expression and adaptability of different ecotypes of Arabidopsis thaliana along altitudinal gradient.', '2010', '2017', 'July 16 - June 17', '1542006492787'),
('biochem', 'Swati Tiwary ', ' SCHOOL OF BIOCHEMISTRY ', 'Dr Meeta Jain', 'Osmotic stress- induced changes on chlorophyll  metabolism and antioxidative system in maize leaves', '2009', '2015', 'July 14 - June 15', '1542096619644'),
('biochem', 'Reena Rawal', ' SCHOOL OF BIOCHEMISTRY ', 'Dr. S. M. Gokhale / Dr. Vineet Kumar', 'Introgression of null allel of Lipoxygenase-2 into high yielding soybean cultivar using marker-assisted selection.', '2010', '2016', 'July 16 - June 17', '1542006381933'),
('sostat', 'Ms. Vaishali Maheahwari', ' SCHOOL OF STATISTICS ', 'Dr. Snigdha Banerjee', 'Productivity optimization : A comparative study of SMEs', '2011', '2017', 'July 17 - June 18', '1542183185978'),
('sostat', 'Mr. Jalaj Katare', ' SCHOOL OF STATISTICS ', 'Dr. Snigdha Banerjee', 'e-Governance practices: A study of local administration', '2011', '2017', 'July 17 - June 18', '1542183102913'),
('biochem', 'Seema Kelotra', ' SCHOOL OF BIOCHEMISTRY ', 'Dr Meeta Jain', 'Ligand binding studies with some caspases using computational methods', '2009', '2016', 'July 16 - June 17', '1542098939125'),
('biochem', ' Prakash Malviya', ' SCHOOL OF BIOCHEMISTRY ', 'Dr Meeta Jain, Co Supervisor Dr Sai Prasad', 'Studies on physiological and biochemical changes  in       relation to grain yield, quality and drought tolerance  in durum wheat genotypes', '2010', '2016', 'July 15 - June 16', '1542098827929'),
('sostat', 'Mr. Sanjeeb Meithei', ' SCHOOL OF STATISTICS ', 'Dr. Snigdha Banerjee', 'Stochastic inventory models : studies on lead time, price and other factors', '2007', '2014', 'July 14 - June 15', '1542182660627'),
('sostat', 'Ms. swati Agrawal ', ' SCHOOL OF STATISTICS ', 'Dr. Snigdha Banerjee', 'Inventory Management for deteriorating items with different types of demands, deteriorations and storage facilities ', '2008', '2014', 'July 14 - June 15', '1542182758467'),
('biochem', 'Sharad Saurabh', ' SCHOOL OF BIOCHEMISTRY ', 'Dr Meeta Jain, Co Supervisor Dr P.K. Singh', 'Purification and characterization of MBLs from wild species of genus Allium and cloning of genes', '2010', '2015', 'July 14 - June 15', '1542101054051'),
('biochem', 'Jayesh Vaishnav', ' SCHOOL OF BIOCHEMISTRY ', 'Dr Meeta Jain', 'Effect of salt stress on chlorophyll metabolism and antioxidative system in maize', '2010', '2018', 'July 18 - June 19', '1542099677177'),
('biochem', ' Harsha Lad', ' SCHOOL OF BIOCHEMISTRY ', 'Dr D. Bhatnagar', 'Antioxidative and antiarthritic activity of herbal products in rheumatic arthritis', '2011', '2015', 'July 15 - June 16', '1542182803329'),
('biochem', 'Vartika Sinha', ' SCHOOL OF BIOCHEMISTRY ', 'Dr D. Bhatnagar, Co Supervisor Dr Meera Bhalla Sarin, New Delhi', 'Papaya leaf curl virus: Molecular characterization and generation of resistance in model plant', '2011', '2016', 'July 15 - June 16', '1542182832014'),
('sostat', 'Mr. Ashish Sharma', ' SCHOOL OF STATISTICS ', 'Dr. Snigdha Banerjee', 'studies on probabilistic and deterministic inventory models with demand related to price, time and other factors ', '2007', '2014', 'July 14 - June 15', '1542182571899'),
('sostat', 'Ms. Rashmi Awad', ' SCHOOL OF STATISTICS ', 'Dr. Shakti Banerjee', 'nil', '2013', '2018', 'July 18 - June 19', '1542183240514'),
('soinstru', 'Sheetal Soni', ' SCHOOL OF INSTRUMENTATION ', 'Prof. Ratnesh Gupta', 'To study the Mechanical properties and Electronic structure of Laser Treated Materials', '2011', '2016', 'July 15 - June 16', '1542259507498'),
('sopharma', 'Mr. Ganesh Prasad Mishra', ' SCHOOL OF PHARMACY ', 'Dr. Rajesh Sharma', 'Structure based design, synthesis and evaluation of few novel PPAR agonists as hypoglycemic agents', '2009', '2016', 'July 16 - June 17', '1542299743604'),
('sopharma', 'Mr. Jitendra Sainy', ' SCHOOL OF PHARMACY ', 'Dr. Rajesh Sharma', 'Design, synthesis and evaluation of some  novel thiolactones as anti-malarial agents', '2009', '2016', 'July 16 - June 17', '1542299780885'),
('sopharma', 'Mr.Shailendra Singh Solanki', ' SCHOOL OF PHARMACY ', 'Dr. Love Kumar Soni and Dr. R.K.Maheshwari', 'Studies on Mixed Solvency Concept in Formulation Development of Poorly Water Soluble Drugs', '2011', '2016', 'July 16 - June 17', '1542299828757'),
('sopharma', 'Mrs. Tamanna Narsinghani', ' SCHOOL OF PHARMACY ', 'Dr. Rajesh Sharma', 'Computer assisted molecular modeling, synthesis  and biological evaluation of some new anti-inflammatory agents', '2011', '2017', 'July 16 - June 17', '1542299854398'),
('sopharma', 'Mr. Sachin Jain', ' SCHOOL OF PHARMACY ', 'Dr. G.P. Choudhary and Dr. D.K. Jain', 'Study of anti-fertility activity and chemical characterization of active constituents of Jatropha gossypifolia Linn', '2011', '2017', 'July 16 - June 17', '1542299891414'),
('sopharma', 'Ms. Sweta Srivastava', ' SCHOOL OF PHARMACY ', 'Dr. G.P. Choudhary', 'Antitussive and Mast cell stabilizing activity of some indigenous plant extracts and herbal formulations of promising extract', '2011', '2017', 'July 16 - June 17', '1542299911779'),
('sopharma', 'Mohd. Rizwan Khan ', ' SCHOOL OF PHARMACY ', 'Dr. Love Kumar Soni', 'Design, Synthesis and Evaluation of Benztriazole for Anti-Fungal Activity', '2011', '2017', 'July 17 - June 18', '1542299990558'),
('sopharma', 'Mr.Gajanand Engla', ' SCHOOL OF PHARMACY ', 'Dr. Love Kumar Soni and Dr. V.K.Dixit', 'Synthesis, Formulation and Evaluation of Some Selected Microspheres of Certain Biodegradable Polymers', '2011', '2017', 'July 17 - June 18', '1542300040988'),
('sopharma', 'Mr.Mayank Sharma', ' SCHOOL OF PHARMACY ', 'Dr. Rajesh Sharma and Dr. D.K. Jain', ' Formulation development and evaluation of nanotechnology based oral dosage forms of  certain beta blockers and anticonvulsants', '2011', '2017', 'July 17 - June 18', '1542300069955'),
('sopharma', 'Ms. Prachi Patil', ' SCHOOL OF PHARMACY ', 'Dr. Rajesh Sharma', 'Investigation on Combined Chemical and Microbiological Synthesis of Exemastane: An Aromatase Inhibitor Used for the Treatment of Breast Cancer', '2012', '2018', 'July 17 - June 18', '1542300121388'),
('sees', 'chandan singh', ' SCHOOL OF ENERGY  ', 'Dr. Rubina Chaudhary', 'Ooptimization of solar energy', '2009', '2014', 'Feb 14 - June 14', '1542413549499'),
('sees', 'Devendra Kumar joshi', ' SCHOOL OF ENERGY  ', 'Dr. R.N. Singh', 'Design, development and performance evaluation of energy efficient hybrid air conditioning system ', '2011', '2015', 'July 15 - June 16', '1542370845705'),
('doll', 'asffd dgfgf', ' DEPARTMENT OF LIFE LONG LEARNING ', 'cvbc', 'cvbc', 'cvbc', 'cvc', 'Feb 14 - June 14', '1542501270236'),
('admin1', 'à¤—à¥‚à¤—à¤² à¤²à¥‰à¤—à¤¿à¤¨', ' DEPARTMENT OF ADMIN ONE ', 'google', 'google', '2019', '2901', 'July 14 - June 15', '1542453380634'),
('chemsc', 'Nitin Dubey', ' SCHOOL OF  CHEMICAL SCIENCES ', 'Dr.Ashok Kumar', 'Synthetic, Therapeutic and Electroanalytical Aspects of Some Triazole and Benzotriazole Derivatives', '2013', '2018', 'July 17 - June 18', '1542262320120'),
('chemsc', 'Jitendra Singh', ' SCHOOL OF  CHEMICAL SCIENCES ', 'Dr. Pratibha Sharma', 'Synthetic and Electrochemical Studies on Biologically Significant Î²-Lactam and Purine Heterocyclic Systems', '2011', '2014', 'Feb 14 - June 14', '1542266869956'),
('chemsc', 'Prerna Kumari', ' SCHOOL OF  CHEMICAL SCIENCES ', 'Dr. Pratibha Sharma', 'Studies on Synthesis, Biological  and Electroanalytical Aspects of Quinazoline and its Derivatives', '2015', '2017', 'July 17 - June 18', '1542451999566'),
('chemsc', 'Prabhakar Sharma', ' SCHOOL OF  CHEMICAL SCIENCES ', 'Dr. Rajendra Prasad', 'Studies on Reaction Mechanism of few Reactions Catalyzed by Solid Catalyst', '2013', '2017', 'July 17 - June 18', '1542452207154'),
('chemsc', 'Prabal Ratan Bandyopadhyay', ' SCHOOL OF  CHEMICAL SCIENCES ', 'Dr. Pratibha Sharma', 'Synthetic and Electrochemical Studies on Biologically Significant Benzimidazoles, Purines and their Precursors ', '2009', '2014', 'Feb 14 - June 14', '1542452289182'),
('chemsc', 'Pankaj Patidar', ' SCHOOL OF  CHEMICAL SCIENCES ', 'Dr. K. K. Pandey', 'Structure and Bonding of Ylidyne Complexes [Ln-M=E-R](M=Cr, Mo, W; E= Si, Ge, Sn, Pb; R= Cp, MeS): A DFT Study', '2010', '2014', 'Feb 14 - June 14', '1542453192485'),
('chemsc', 'Sheenu Bhadoriya', ' SCHOOL OF  CHEMICAL SCIENCES ', 'Dr. Rajendra Prasad', 'ahdgbs', '0000', '2015', 'July 14 - June 15', '1542453563422'),
('chemsc', 'Neena Shrivastav', ' SCHOOL OF  CHEMICAL SCIENCES ', 'Dr. Rajendra Prasad', 'Stochastic Petrinets and Simulation of few Chemical Reactions', '0000', '2015', 'July 14 - June 15', '1542453666247'),
('chemsc', 'Jaswant Carpentar', ' SCHOOL OF  CHEMICAL SCIENCES ', 'Dr. H. P. S. Chauhan', 'Antimony (III) Derivatives with some mixed Sulpher and / or Oxygen Donor Ligands', '2011', '2015', 'July 14 - June 15', '1542453813284'),
('iipsdavv', 'Dr.A.K.Sapre', ' INTERNATIONAL INSTITUTE OF PROFESSIONAL STUDIES ', 'Dr.Swati Dhavale (Post Doc.)', 'Medical Tourism in Maharashtra: An Exploratory Study', '27-May-16', 'Ongoing 2016', 'July 16 - June 17', '1542455250024');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_4_5`
--

INSERT INTO `t3_4_5` (`Username`, `Title`, `Name`, `Department`, `Journal`, `Period`, `Year`, `ISBN`, `Link`, `id_time`) VALUES
('admin3', 'title', 'name', 'dept', 'name', '2018', 'Feb 14 - June 14', 'isab', 'link \' google ? > < & li', '1540820903068'),
('soex', 'Standard Deviation (SD) based Data Filtering Techniques for Body Sensor Network Data', 'B Tiwari and A. Kumar', 'School of Electronics', 'Int. J. of Data science (Inderscience)', '2015', 'July 15 - June 16', '2053-082X', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-16-34IJDS 1(2) Paper 6.pdf', '1541414969093'),
('soex', 'Designing Sparse Sensing Matrix for Compressive Sensing to reconstruct High Resolution Medical Images', 'V Tiwari, P Bansod and A Kumar', 'School of Electronics', 'Cogent Engineering', '2015', 'July 15 - June 16', 'https://doi.org/10.1080/23311916.2015.1017244', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-11-45CS_medical_cogent.pdf', '1541414523129'),
('soex', 'Role Based Access Control through On-Demand Classification of Electronic Health Record', 'B Tiwari and A. Kumar', 'School of Electronics', 'Int. J. of Electronic Healthcare (IJEH)-Inderscience', '2015', 'July 15 - June 16', '1741-8461', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-14-08IJEH 8(1) Paper 2.pdf', '1541414787109'),
('soex', 'Multivariate autoregressive model for ECG signal forecasting', 'S Kansal, P Bansod and A Kumar', 'School of Electronics', 'Int J of Multivariate Data Analysis (Inderscience)', '2017', 'July 17 - June 18', '2396-8311', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-01-43paper1-2017.pdf', '1541414158854'),
('soex', 'Backstepping based Adaptive Control for Underactuated Systems', 'A Kulkarni and A. Kumar', 'School of Electronics', 'International Journal of System Control and Information Processing ', '2015', 'July 14 - June 15', '1759-9342', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-36-39paper1-2015.pdf', '1541415604476'),
('soex', 'Achieving compression with high-quality reconstructed US colour and grey images at reduced sampling rate', 'V Tiwari, P Bansod and A Kumar', 'School of Electronics', 'International Journal of Signal and Imaging Systems Engineering (Inderscience)', '2017', 'July 17 - June 18', '1748-0701', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_15-47-27paper_12018.pdf', '1541412056375'),
('soex', 'Comparative study of Orchestrated, Centralised and Decentralised Approaches for Orchestrator based Task Allocation and Collision Avoidance using Network Controlled Robots', 'Rameez Raja Chowdhary, Dr. Manju K Chattopadhyay, and Dr. Raj Kamal', 'School of Electronics', 'Journal of KSU computer and information sciences', '2018 ', 'July 17 - June 18', '1319-1578', 'http://uid.dauniv.ac.in/NAC/profile/docs/11-11-2018_18-49-00KSU paper.pdf', '1541942239428'),
('soex', 'Multiscale Edge Based Approach for Face Identification', 'S Joshi and A Kumar', 'School of Electronics', 'International Journal of Science and Research (IJSR)', '2014', 'July 14 - June 15', '2319-7064', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-25-21paper_IJSR.pdf', '1541415313223'),
('soex', 'Low-Power and High-Speed Technique for logic Gates in 20nm Double-Gate FinFET  Technology', 'A Priydarshi, Manju K Chattopadhyay', 'School of Electronics', 'IOP Publishing: Journal of Physics: Conference Series, ', '2016', 'July 16 - June 17', '/doi.org/10.1088/1742-6596/755/1/012055', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_17-19-05Low-Power_and_High-Speed_Technique_for_logic_Gates.pdf', '1541418171553'),
('soex', 'Orchestration of Robotic Platform and Implementation of Adaptive Self-Learning Neuro-Fuzzy Controller', 'Rameez Raja Chowdhary, Manju K. Chattopadhyay, and Raj Kamal', 'School of Electronics', 'Journal of Electronic Design Technology', '2017', 'July 17 - June 18', '2229-6980', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_17-11-02Rameez STM 2018.pdf', '1541418276433'),
('soex', 'Physiological Value Based Privacy Preservation of Patients?s Data using Ellitic Curve Cryptography', 'B Tiwari and A. Kumar', 'School of Electronics', 'Health Informatics ?An International Journal (HIIJ)', '2014', 'Feb 14 - June 14', '2319-2046', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_16-19-432113hiij01.pdf', '1541415082443'),
('soex', 'CT Image Reconstruction from Sparse Projections Using Adaptive Total Generalized Variation with Soft Thresholding', 'V Tiwari, P Bansod and A Kumar', 'School of Electronics', 'Int. J. of Biomedical Engineering and Technology (Inderscience)', '2018', 'July 18 - June 19', '1752-6426', 'http://uid.dauniv.ac.in/NAC/profile/docs/05-11-2018_15-49-36paper_2_2018.docx', '1541411388390'),
('soinstru', 'Improvement of oxidation resistance of TiCN ï¬lms prepared by laser alloying', 'Ratnesh Gupta â€¢ Sheetal Soni â€¢ D. M. Phase', 'School of Instrumentation, Devi Ahilya University, Khandwa Road, Indore 452001, India ', 'Appl. Phys. A ', '2015', 'July 14 - June 15', ' 1432-0630', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_14-26-14appl phys A 2015.pdf', '1542272295415'),
('soinstru', 'Tailoring optical properties of TiO2-Cr co-sputtered films using swift heavy ions', 'Ratnesh Gupta a,â‡‘, Sagar Sen a, D.M. Phase b, D.K. Avasthi c, Ajay Gupta', 'School of Instrumentation, Devi Ahilya University, Khandwa Road, Indore 452001, India ', 'Applied surface science', '2018', 'July 17 - June 18', '0169-4332 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_14-27-09Sagar_Sen_ASS.pdf', '1542272487357'),
('soinstru', 'Piezoelectric Energy Harvesting via Shoe Sole', 'Ashish Gupta, Asharfilal Sharma ', 'School of Instrumentation, Devi Ahilya University, Khandwa Road, Indore 452001, India ', ' International Journal of New Technology and Research (IJNTR) ', '2015', 'July 15 - June 16', '2454-4116', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_14-33-46soi-2.pdf', '1542272716156'),
('soinstru', 'An efficient Piezoelectric Energy Harvester ', 'Ashish Gupta, Asharfilal Sharma ', 'School of Instrumentation, Devi Ahilya University, Khandwa Road, Indore 452001, India ', 'International Journal of Current Engineering and Technology ', '2015', 'July 15 - June 16', '2277 â€“ 4106', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_14-36-51soi_3.pdf', '1542272983515'),
('soinstru', 'Implementation Of Soft-Switching Boost Converter With A Resonant Circuit   ', '  Pramesh Kumar Choudhary, Nitin Gupta   ', 'School of Instrumentation, Devi Ahilya University, Khandwa Road, Indore 452001, India ', 'INTERNATIONAL JOURNAL OF TECHNOLOGY ENHANCEMENTS AND EMERGING ENGINEERING RESEARCH', '2014', 'July 14 - June 15', '2347-4289', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_14-39-34SOi_4.pdf', '1542273129398'),
('soinstru', 'Indian Sign Language Recognition Using SVM', 'J. L. Raheja, A. Mishra, and A. Chaudhary', 'School of Instrumentation, Devi Ahilya University, Khandwa Road, Indore 452001, India ', ' Pattern Recognition and Image Analysis', '2015', 'July 15 - June 16', '10546618', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_14-47-38SOi_6.pdf', '1542273656432'),
('biochem', 'Impact of Essential Micronutrient, Zn, on Growth and Chlorophyll Biosynthesis in Young Zea mays Seedlings', 'Radhika (Chinchalkar) Waghmare and Rekha Gadre', 'School of Biochemistry', 'American J of Plant Science', '2018', 'July 18 - June 19', 'ISSN Print:?2158-2742', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_11-08-022018 RG4.jpg', '1542000564879'),
('biochem', 'Marker assisted backcross selection for genetic removal of lipoxygenase-2         from popular soybean (Glycine max) variety JS 97-52: Parental polymorphism         survey and hybridity validation', 'Reena Rawal, Vineet Kumar, Anita Rani, S M Gokhale and S M Husain', 'School of Biochemistry', 'Indian Journal of Agricultural Sciences ', '2014', 'Feb 14 - June 14', 'ISSN: 0019-5022', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_13-25-272014 SMG1.jpg', '1542008808485'),
('biochem', 'Enzymatic cleavage of cell surface proteins of pig and cow erythrocytes and its                  effect on concanavalin-mediated agglutinability', 'Savita Sharma and Sadashiv M. Gokhale ', 'School of Biochemistry', 'Indian J Biochem Biophys ', '2014', 'July 14 - June 15', 'Online ISSN: 0975-0959Print ISSN: 0301-1208 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_13-30-062014 SMG2.jpg', '1542009089553'),
('biochem', 'A comparative study of the membrane proteins of some mammalian           erythrocytes identified by mass spectrometry', 'Savita Sharma, Vinny Punjabi, Surekha M. Zingde and Sadashiv M. Gokhale', 'School of Biochemistry', 'J. Membrane Biology', '2014', 'July 14 - June 15', 'Online ISSN: 1432-1424Print ISSN: 0022-2631 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_13-27-492014 SMG2.jpg', '1542008950741'),
('biochem', 'Salinity stress effects being mediated via nitric oxide in common bean (Phaseolus vulgaris) seedlings', 'Sonal Dhamgaye and  Rekha Gadre', 'School of Biochemistry', 'J.Bio.Innov', '2018', 'July 18 - June 19', 'ISSN:?0019-5502?', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_11-05-542018 RG3.jpg', '1542000410659'),
('biochem', 'Growth retardation at different stages of bean seedlings developed from seeds exposed to synchrotron X ray beam.', 'Sonal Dhamgaye, Vishal Dhamgaye and Rekha Gadre', 'School of Biochemistry', 'Advances in Biological Chemistry', '2018', 'July 17 - June 18', 'ISSN Print:?2162-2183', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_11-03-182018 RG2.jpg', '1542000263576'),
('biochem', 'Salinity stress effects on growth and nitrate assimilation in bean seedlings likely to be mediated via Nitric Oxide', 'Dhamgaye, S., Gadre, R. ', 'School of Biochemistry', 'J Stress Physiol. Biochem.', '2015', 'July 15 - June 16', 'ISSN 1997-0838', 'http://uid.dauniv.ac.in/NAC/profile/docs/11-11-2018_16-14-122015 RG3.jpg', '1541932440492'),
('biochem', 'Modulation of ? Aminolevulinic Acid Dehydratase Activity by the Sorbitol Induced Osmotic Stress in Maize Leaf Segments.', 'M. Jain, S. Tiwary, and R. Gadre', 'School of Biochemistry', 'Biochemistry (Moscow)', '2018', 'July 17 - June 18', 'ISSN 0006[1]2979', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_11-00-532018 RG.jpg', '1541999279563'),
('biochem', 'Cotton leaf curl Burewala virus with intact or mutant transcriptional activator proteins: complexity of cotton leaf curl disease', 'Kumar, J., Gunapati, S., Alok, A., Lalit, A., Gadre, R., Sharma, N. C., Roy, J.K. and Singh, S. P. ', 'School of Biochemistry', 'Arch Virol', '2015', 'July 14 - June 15', 'ISSN:?0304-8608 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/11-11-2018_16-06-272015 RG.jpg', '1541931778508'),
('biochem', 'Crystal structure and dynamics of Spt16 N-domain of FACT complex from Cicer arietinum.', 'Venkat N. Are, Biplab Ghosh, Ashwani Kumar, Rekha Gadre, Ravindra D. Makde*', 'School of Biochemistry', 'International Journal Biological Macromolecules', '2016', 'July 16 - June 17', 'ISSN:?0141-8130 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/11-11-2018_16-21-162016 RG2.jpg', '1541932934250'),
('biochem', 'Effect of arsenic on d-aminolevulinic acid formation in greening maize leaf segments.', 'Jain, M., Thapa, M., Pradhan, P., Meena, S., Vaishnav, J. and Gadre, R. ', 'School of Biochemistry', 'Ind J Plant Physiol.', '2015', 'July 14 - June 15', 'ISSN:0019-5502', 'http://uid.dauniv.ac.in/NAC/profile/docs/11-11-2018_16-10-252015 RG2.jpg', '1541932201460'),
('biochem', 'Differential effect of aluminium on enzymes of nitrogen assimilation in excised bean leaf segments', 'Gupta, P., Sarengetham, J., Dhamgaye, S. and Gadre, R ', 'School of Biochemistry', 'Advances in Biological Chemistry', '2016', 'July 16 - June 17', 'ISSN Print:?2162-2183', 'http://uid.dauniv.ac.in/NAC/profile/docs/11-11-2018_16-35-342016 RG4.jpg', '1541933376274'),
('biochem', 'Influence of Selenium Supplementation on ?-Aminolevulinic Acid Formation in Greening Maize Leaf Segments.', 'Meeta Jain, Mahija Panwar and Rekha Gadre', 'School of Biochemistry', 'Research Journal of Phytochemistry', '2017', 'July 17 - June 18', 'ISSN 18193471', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_10-41-492017 RG2.jpg', '1541998951794'),
('biochem', 'Osmotic stress induced changes in chlorophyll biosynthesis and antioxidative system in light grown maize leaves.', 'Tiwary, S., Gadre, R., Jain, M. ', 'School of Biochemistry', 'J Bio Innv. ', '2016', 'July 15 - June 16', 'ISSN:?0019-5502?', 'http://uid.dauniv.ac.in/NAC/profile/docs/11-11-2018_16-18-432016 RG.jpg', '1541932701591'),
('biochem', 'Expression of GhNAC2 from G. herbaceum improves root growth and imparts tolerance to drought in transgenic cotton and Arabidopsis', 'Gunapati, S., Ram Naresh, Ranjan, S., Hans, A., Nigam, D., Verma, P.C., Gadre, R., Pathre, U., Sane, A., and Sane V. ', 'School of Biochemistry', 'Scientic Reports', '2016', 'July 16 - June 17', 'ISSN?2045-2322 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/11-11-2018_16-25-062016 RG3.jpg', '1541933127711'),
('biochem', 'Crystal structure of a novel prolidase from Deinococcus radiodurans identifies new subfamily of bacterial prolidases', 'Are VN, Jamdar SN, Ghosh B, Goyal VD, Kumar A, Neema S, Gadre R, Makde RD', 'School of Biochemistry', 'Proteins. Structure, Function and Bioinformatics', '2017', 'July 17 - June 18', 'ISSN:1097-0134', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_10-44-132017 RG3.jpg', '1541999121290'),
('biochem', 'Cadmium effects on enzymes of ammonia assimilation in excised etiolated maize leaf segments during greening : A mechanistic approach.', 'Sarengetham, J., Dhamgaye, S. and Gadre, R ', 'School of Biochemistry', 'American J Plant Science', '2017', 'July 17 - June 18', 'ISSN Print:?2158-2742', 'http://uid.dauniv.ac.in/NAC/profile/docs/12-11-2018_10-39-002017 RG.jpg', '1541998784301'),
('biochem', 'Modulation of Î´ Aminolevulinic Acid Dehydratase Activity by the Sorbitol Induced Osmotic Stress in Maize Leaf Segments.', 'M. Jain, S. Tiwary, and R. Gadre', 'School of Biochemistry', 'Biochemistry (Moscow)', '2018', 'July 17 - June 18', 'ISSN 0006-2979', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_16-09-472018 MJ1.jpg', '1542363192193'),
('chemsc', 'From Molecules to Devices', 'Ujla Daswani, Usha Singh, Pratibha Sharma, Ashok Kumar ', 'School of Chemical Sciences', 'J.Phys. Chem. C (ACS)', '2018', 'July 17 - June 18', '1932-7455', 'doi.org/10.1021/acs.jpcc.8b04070 ', '1542269105710'),
('chemsc', 'Synthesis and Photophysical Properties of Î± â€“Pyrone-fused-pyrido[3,2,1-jk]carbozolone Derivative: DFT/TD-DFT Insights', 'Monika Ahuja, Soumen Biswas, Pratibha Sharma and Sampak Samantha', 'School of Chemical Sciences', 'Chemistry Select (Wiley)', '2018', 'July 17 - June 18', '2365-6549', 'doi.org/10.1002/slct.201800369 ', '1542280607683'),
('chemsc', 'A Submicellar Liquid Chromatographic Method for Quantitative Determination of Muscle Relaxant Drug Baclofen Solubilized System', 'Hitesh Malvia, Ashok Kumar, Pratibha Sharma, Ritesh Mishra', 'School of Chemical Sciences', 'Asian Journal of Chemistry', '2017', 'July 16 - June 17', '0975-427X', 'doi.org/10.14233/ajchem.2017.20541 ', '1542280757617'),
('chemsc', 'A Micellar Liquid Chromatographic Method for the Determination of Azosemide in Solubilized System', 'Malvia, Ashok Kumar, Pratibha Sharma, Ritesh Mishra', 'School of Chemical Sciences', 'Journal of Surfactants and Detergents', '2017', 'July 16 - June 17', '1097-3958', 'doi.org/10.1007/s11743-017-2008-y ', '1542281022965'),
('chemsc', 'Exploration of Antioxidant Activity of Newly Synthesized Azo Flavones and its Correlation with Electrochemical Parameters along with the Study of their Redox Behaviour', 'Ashok Kumar, Pratibha Sharma, Pawan Kumar Sharma', 'School of Chemical Sciences', 'Journal of Analytical Chemistry', '2017', 'July 17 - June 18', '1520-6882', '10.1134/s1061934817100094 ', '1542281312690'),
('chemsc', 'In vitro and in silico evaluation of 2-(substituted phenyl) oxazolo [4,5-b]pyridine derivatives as potential antibacterial agents', 'Gagandeep Kour Reen, Ashok Kumar and Pratibha Sharma', 'School of Chemical Sciences', 'Medicinal Chemistry Research', '2017', 'July 17 - June 18', '1554-8120', 'doi.org/10.1007/s00044-017-2026-3 ', '1542281368786'),
('chemsc', 'ZnO Nanoparticle-Catalyzed Multicomponent Reaction for the Synthesis of 1,4-Diaryl Dihydropyridines', 'Gagandeep Kour Reen, Monika Ahuja, Ashok Kumar, Rajesh Patidar and Pratibha Sharma', 'School of Chemical Sciences', 'Organic Preparations and Procedures International', '2017', 'July 16 - June 17', '0375-9512', 'doi.org/10.1080/00304948.2017.1320927 ', '1542281369986'),
('chemsc', 'A DFT-assisted mechanism for evolution of the ammoxidation of 2-chlorotoluene (2-CLT) to 2-chlorobenzonitrile (2-CLBN) over alumina-supported V 2 O 5 catalyst prepared by a solution combustion meth', 'R. Dwivedi, P. Sharma, A. Sisodiya, M. S. Batra, R. Prasad', 'School of Chemical Sciences', 'Journal of Catalysis ', '2017', 'July 16 - June 17', '0021-9517', 'doi.org/10.1016/j.jcat.2016.10.033 ', '1542281371057'),
('chemsc', 'A new NBS/oxone promoted one pot cascade synthesis of 2-aminobenzimidazoles/ 2-aminobenzoxazoles: a facile approach', 'Ujla Daswani, Nitin Dubey, Pratibha Sharma and Ashok Kumar', 'School of Chemical Sciences', 'New Journal of Chemistry ', '2016', 'July 16 - June 17', '1369-9261', 'doi.org/10.1039/c6nj00478d ', '1542281376193'),
('chemsc', 'A Typical NEDDA Cycloaddition Strategy between C-3- and N-Substituted Indoles and Butadienes Using Silica-supported Copper Triï¬‚ate as an Eï¬ƒcient Catalytic System: A Correlative Experimental an', 'Monika Ahuja, Gagandeep Kour Reen, Ashok Kumar and Pratibha Sharma', 'School of Chemical Sciences', 'Chemistry Letters ', '2016', 'July 16 - June 17', '1348-0715', 'doi.org/10.1246/cl.160155 ', '1542281377322'),
('chemsc', 'Dissociation dynamics of host-guest interaction between substituted calix[4]-arene and 4-chloronitrobenzene', 'Ashok Kumar, Pratibha Sharma, Pawan Kumar Sharma, Monika Ahuja, Gergely Matisz, Laszlo Kollar, Sandor Kunsagi-Mate', 'School of Chemical Sciences', 'Indian Journal of Chemistry ', '2016', 'July 16 - June 17', '2347-3878', 'doi.org/10.1007/s10847-008-9469-6 ', '1542281378090'),
('chemsc', 'A comprehensive account of spectral, Hartree Fock, and Density Functional Theory studies of 2-chlorobenzothiazole', 'Ujla Daswani, Pratibha Sharma, and Ashok Kumar ', 'School of Chemical Sciences', 'Journal of Molecular Structure ', '2015', 'July 14 - June 15', '0022-2860', 'doi.org/10.1016/j.molstruc.2014.09.044 ', '1542343567584'),
('chemsc', 'Acid Catalyzed Silica Supported One Pot Benzoylation Route to Synthesize 2-(Substituted Phenyl)oxazolo[4,5- b]pyridines Under Ambient Conditions', 'Gagandeep Kour Reen, Premansh Dudhe, Monika Ahuja, Ashok Kumar, and Pratibha Sharma', 'School of Chemical Sciences', 'Synthetic Communications', '2015', 'July 14 - June 15', '1535-2432', 'doi.org/10.1080/00397911.2015.1056797 ', '1542343737083'),
('chemsc', 'Contribution of reactivity indexes in the formation of Î²-lactams through [2 2] cycloaddition between substituted ketenes and imines', 'Pratibha Sharma, Monika Ahuja, Ashok Kumar, and Vinita Sahu', 'School of Chemical Sciences', 'Chemical Physics Letters ', '2015', 'July 14 - June 15', '0009-2614', 'doi.org/10.1016/j.cplett.2015.04.005 ', '1542343888363'),
('chemsc', 'A click chemistry strategy to synthesize geraniol-coupled 1,4-disubstituted 1,2,3-triazoles and exploration of their microbicidal and antioxidant potential with molecular docking profile', 'Nitin Dubey, Mukesh C. Sharma, Ashok Kumar, and Pratibha Sharma', 'School of Chemical Sciences', 'Medicinal Chemistry Research', '2015', 'July 14 - June 15', '1554-8120', 'doi.org/10.1007/s00044-015-1329-5 ', '1542344007272'),
('chemsc', 'Clay-Supported Cu(II) Catalyst: An Efficient, Heterogeneous, and Recyclable Catalyst for Synthesis of 1,4-Disubstituted 1,2,3-Triazoles from Alloxan-Derived Terminal Alkyne and Substituted Azides Usin', 'Nitin Dubey, Pratibha Sharma, Ashok Kumar', 'School of Chemical Sciences', 'Synthetic Communications', '2015', 'July 15 - June 16', '1535-2432', 'doi.org/10.1080/00397911.2015.1099675 ', '1542344122138'),
('chemsc', 'Structural insights for substituted acyl sulfonamides and acyl sulfamides derivatives of imidazole as angiotensin II receptor antagonists using molecular modeling approach', 'Mukesh C. Sharma, Smita Sharma, Pratibha Sharma, Ashok Kumar, K.S. Bhadoriya', 'School of Chemical Sciences', 'Journal of the Taiwan Institute of Chemical Engineers', '2014', 'Feb 14 - June 14', '1876-1070', 'doi.org/10.1016/j.jtice.2013.08.002 ', '1542350361634'),
('chemsc', 'Titania nanomaterials: efficient and recyclable heterogeneous catalysts for the solvent-free synthesis of poly-substituted quinolines via Friedlander hetero-annulation', 'Prabal Bandyopadhyay, G. K. Prasad, Manisha Sathe, Pratibha Sharma, Ashok Kumar, M. P. Kaushik', 'School of Chemical Sciences', 'RSC Advances ', '2014', 'Feb 14 - June 14', '2046-2069', 'doi.org/10.1039/c3ra46128a ', '1542350716004'),
('chemsc', 'Antibacterial and free radical scavenging potential of synthesized 7-hydroxy-2-aryl-6-aryldiazenyl-4H-chromen-4-ones', 'Pawan Kumar Sharma, Prabal Bandyopadhyay, Pratibha Sharma, Ashok Kumar', 'School of Chemical Sciences', 'Medicinal Chemistry Research', '2014', 'Feb 14 - June 14', '1554-8120', 'doi.org/10.1007/s00044-014-0938-8 ', '1542351104490'),
('chemsc', 'Impact of global and local reactivity descriptors on the hetero-diels-alder reaction of enaminothione with various electrophiles ', 'VINITA SAHU, PRATIBHA SHARMA, ASHOK KUMAR', 'School of Chemical Sciences', 'Journal of the Chilean Chemical Society', '2014', 'Feb 14 - June 14', '0717-9707', 'doi.org/10.4067/s0717-97072014000100019 ', '1542352453151'),
('chemsc', 'QSAR and microbial studies on synthesized 2, 3 diphenylquinoline derivatives', 'Pratibha Sharma, Premansh Dudhe, Ashok Kumar', 'School of Chemical Sciences', 'Drug Invention Today ', '2014', 'July 14 - June 15', '0975-7619', 'http://jprsolutions.info/newfiles/journal-file-574d1897639bf8.68687518.pdf', '1542352757351'),
('chemsc', 'Synthesis and Evaluation of Antioxidant Properties of Some Synthesized Quinazoline and 1,4-Diazepine Derivatives', 'Pratibha Sharma, Premansh Dudhe, Ashok Kumar', 'School of Chemical Sciences', 'Journal of Pharmacy Research', '2014', 'July 14 - June 15', '0974-6943', 'http://jprsolutions.info/files/final-file-57f25df91d53f3.29036843.pdf', '1542352884279'),
('chemsc', 'QSAR and pharmacophore approach on substituted imidazole derivatives as angiotensin II receptor antagonists', 'Mukesh C. Sharma, Smita Sharma, Pratibha Sharma, Ashok Kumar, Kamlendra Singh Bhadoriya', 'School of Chemical Sciences', 'Medicinal Chemistry Research', '2014', 'Feb 14 - June 14', '1554-8120', 'doi.org/10.1007/s00044-013-0638-9 ', '1542352965032'),
('chemsc', 'Pharmacophore and QSAR modeling of some structurally diverse azaaurones derivatives as anti-malarial activity', 'MC Sharma, S Sharma, P Sharma and A Kumar', 'School of Chemical Sciences', 'Medicinal Chemistry Research', '2014', 'Feb 14 - June 14', '1554-8120', 'doi.org/10.1007/s00044-013-0609-1 ', '1542353244696'),
('chemsc', 'Comparative QSAR and pharmacophore analysis for a series of 2, 4-dihydro-3H-1, 2, 4-triazol-3-ones derivatives as angiotensin II AT1 receptor antagonists', 'MC Sharma, S Sharma, P Sharma, A Kumar, KS Bhadoriya', 'School of Chemical Sciences', 'Medicinal Chemistry Research', '2014', 'Feb 14 - June 14', '1554-8120', 'doi.org/10.1007/s00044-013-0831-x ', '1542353316181'),
('chemsc', 'Synthesis, Solid State NMR and Powder X-Ray Diffraction Studies on Ethane-1,2-Dithiolatobismuth(III) Alkyl Dithiocarbonates', 'H. P. S. Chauhan, Abhilasha Bakshi, Jaswant Carpenter, Sapana Joshi', 'School of Chemical Sciences', 'Phosphorus, Sulfur, and Silicon and the Related Elements', '2014', 'July 14 - June 15', '1563-5325', 'doi.org/10.1080/10426507.2014.885975 ', '1542355021722'),
('chemsc', 'Synthetic aspects, spectral, thermal studies and antimicrobial screening on bis(N,Nâ€“      dimethyldithiocarbamatoâ€“S,Sâ€™)antimony(III) complexes with oxo or thio donor  ligands ', 'H.P.S. Chauhan, Jaswant Carpenter, Sapana Joshi', 'School of Chemical Sciences', 'Spectrochimica Acta Part A: Molecular and Biomolecular Spectroscopy', '2014', 'July 14 - June 15', '1386-1425', 'doi.org/10.1016/j.saa.2014.03.054 ', '1542355261267'),
('chemsc', 'Mixed bis(morpholine-4-dithiocarbamato-S,Sâ€²)antimony(III) complexes: synthesis, characterization and biological studies', 'H. P. S. Chauhan, Jaswant Carpenter, Sapana Joshi', 'School of Chemical Sciences', 'Applied Organometallic Chemistry', '2014', 'Feb 14 - June 14', '1099-0739', 'doi.org/10.1002/aoc.3169 ', '1542355391576'),
('chemsc', 'Nano ranged 1,3-dithia-2-stannacyclopentane(IV) alkyldithiocarbonates: solid-state NMR, powder X-ray diffraction and thermal decomposition studies', 'H.P.S. Chauhan, Abhilasha Bakshi, Sapana Joshi, Jaswant Carpenter', 'School of Chemical Sciences', 'Journal of Molecular Structure', '2015', 'July 14 - June 15', '0022-2860', 'doi.org/10.1016/j.molstruc.2014.11.009 ', '1542355508054'),
('chemsc', 'Ethane-1,2-dithiolato bridged (Î¼2) complexes of bis(N,N-diorganodithiocarbamato-S,Sâ€²)antimony(III)', 'Jaswant Carpenter, Sapana Joshi, H. P. S. Chauhan', 'School of Chemical Sciences', 'Journal of Thermal Analysis and Calorimetry', '2015', 'July 14 - June 15', '1588-2926 ', 'doi.org/10.1007/s10973-015-4394-6 ', '1542355616362'),
('chemsc', 'Synthetic, spectral, thermal and powder X-ray diffraction studies of bis(O-alkyldithiocarbonato-S,Sâ€²) antimony(III) dialkyldithiocarbamates', 'H.P.S. Chauhan, Sapana Joshi, Jaswant Carpenter', 'School of Chemical Sciences', 'Spectrochimica Acta Part A: Molecular and Biomolecular Spectroscopy', '2015', 'July 14 - June 15', '1386-1425 ', 'doi.org/10.1016/j.saa.2014.10.057 ', '1542355718148'),
('chemsc', ' Structural investigation on toluene-3,4-dithiolatoantimony(III)    alkyldithiocarbonate complexes thermal, powder XRD and biological studies', 'Harendra Pratap Singh Chauhan, Sapana Joshi, Abhilasha Bakshi, Jaswant Carpenter', 'School of Chemical Sciences', 'New Journal of Chemistry', '2015', 'July 14 - June 15', '2046-2069 ', 'doi.org/10.1039/c4nj02094d ', '1542355823380'),
('chemsc', 'Synthesis, characterization and single crystal X-ray analysis of chlorobis(N,N-dimethyldithiocarbamato-S,Sâ€²)antimony(III)', 'H.P.S. Chauhan, Jaswant Carpenter', 'School of Chemical Sciences', 'Journal of Saudi Chemical Society', '2015', 'July 15 - June 16', '1386-1425', 'doi.org/10.1016/j.jscs.2013.11.008 ', '1542356911671'),
('chemsc', 'Mixed bismuth(III) complexes with sulfur donor ligands', 'H. P. S. Chauhan, Sapana Joshi, Jaswant Carpenter', 'School of Chemical Sciences', 'Journal of Thermal Analysis and Calorimetry', '2015', 'July 15 - June 16', '1588-2926', 'doi.org/10.1007/s10973-015-5164-1 ', '1542357085252'),
('chemsc', 'Preparation, spectroscopic characterization and antimicrobial activities of mixed metal (Sb and Bi) bridged derivatives with mixed sulfur donor ligands', 'Sapana Joshi, H.P.S. Chauhan, Nitin Carpenter', 'School of Chemical Sciences', 'Journal of Molecular Structure', '2017', 'July 16 - June 17', '0022-2860', 'doi.org/10.1016/j.molstruc.2016.08.063 ', '1542357255444'),
('chemsc', 'Preparation, spectroscopic, thermal and powder X-ray diffraction characterization, and antimicrobial activities of mixed bis(O ,O â€²-diisopropyldithiophosphato-S ,S â€²)antimony(III) derivatives with', 'Sumit Bhatiya, H.P.S. Chauhan, Nitin Carpenter', 'School of Chemical Sciences', 'Applied Organometallic Chemistry', '2017', 'July 17 - June 18', '1099-0739', 'doi.org/10.1002/aoc.4026 ', '1542357382574'),
('chemsc', 'Modeling of Sulmazole Analogues as Cardiotonic Agents', 'Teena Pareek, A.V. Bajaj and Dheeraj Mandloi', 'School of Chemical Sciences', 'Der Pharma Chemica', '2016', 'July 16 - June 17', '0975-413X', 'https://www.derpharmachemica.com/pharma-chemica/modeling-of-sulmazole-analogues-as-cardiotonic-agents.pdf', '1542358195574'),
('chemsc', 'Liquid phase solvent-free oxidation of styrene over iron zirconium phosphate using tert-butylhydroperoxide as an oxidant', 'S. Khare, R. Chokhare, P. Shrivastava and  J. S. Kirar', 'School of Chemical Sciences', 'Indian Journal of Chemistry', '2015', 'July 15 - June 16', '0975-0983', 'https://doi.org/10.1007/s10562-015-1647-8  ', '1542361673535'),
('chemsc', 'Catalytic oxidation of cyclohexene by Î±-zirconium phosphate intercalated Mn(Salen) using 70% tert-butylhydroperoxide as an oxidant ', 'S. Khare, P. Shrivastava, R. Chokhare, J. S. Kirar, S. Parashar', 'School of Chemical Sciences', 'Indian Journal of Chemistry', '2016', 'July 16 - June 17', '0975-0975', '	http://nopr.niscair.res.in/handle/123456789/39737', '1542361953202'),
('chemsc', 'Heterogeneous catalyst Mn(salicylaldimine) complex covalently bonded to Î±-titanium phosphate: Synthesis, characterization and catalytic activity for oxidation of cyclohexane ', 'S. Khare, P. Shrivastava, J. S. Kirar and S. Parashar', 'School of Chemical Sciences', 'Indian Journal of Chemistry', '2016', 'July 15 - June 16', '0975-0983', 'http://nopr.niscair.res.in/bitstream/123456789/34112/1/IJCA 55A(4) 403-412.pdf', '1542362252439'),
('chemsc', 'Liquid phase solvent-less cyclohexane oxidation catalyzed by covalently anchored transition-metal Schiff base complex on Î±-titanium phosphate', 'S. Khare and P. Shrivastava', 'School of Chemical Sciences', 'Catal. Lett', '2015', 'July 15 - June 16', '1572-879X', ' https://doi.org/10.1007/s10562-015-1647-8 ', '1542362927353'),
('chemsc', 'Solvent-free oxidation of cyclohexane over covalently anchored transition-metal salicylaldimine complexes to Î±-zirconium phosphate using tert-butylhydroperoxide', 'S. Khare and P. Shrivastava', 'School of Chemical Sciences', 'J. Mol. Catal. A: Chem', '2016', 'July 16 - June 17', '1381-1169 ', 'https://doi.org/10.1016/j.molcata.2015.10.010 ', '1542363111987'),
('chemsc', 'Catalytic performance of Metal-Salen intercalated into Î±-zirconium phosphate in solvent-free liquid phase oxidation of cyclohexane ', 'S. Khare, P. Shrivastava, R. Chokhare, J. S. Kirar and S. Parashar', 'School of Chemical Sciences', 'J. Porous Mater', '2017', 'July 16 - June 17', '1573-4854  ', 'https://www.mdpi.com/2073-4344/7/6/190/htm', '1542363290374'),
('chemsc', 'Cu(II) Schiff base complex intercalated into layered double hydroxide for selective oxidation of ethylbenzene under solvent-free conditions ', 'J. S. Kirar and S. Khare', 'School of Chemical Sciences', 'RSC, Adv', '2018', 'July 18 - June 19', '2046-2069', 'ttps://doi.org/10.1039/c8ra03165g ', '1542363588173'),
('chemsc', 'Selective oxidation of ethylbenzene to acetophenone over Cr(III) Schiff base complex intercalated into layered double hydroxide', 'J. S. Kirar and S. Khare', 'School of Chemical Sciences', 'Applied Organometal. Chem', '2018', 'July 17 - June 18', '1099-0739', 'https://doi.org/10.1002/aoc.4408 ', '1542363746699'),
('chemsc', 'Oxidation of benzyl alcohol in slurry phase over nanoporous ZrV2O7 catalyst and determination of reaction mechanism using DFT', 'S. K. Joshi, N. Sohani, S. Khare and R. Prasad', 'School of Chemical Sciences', 'Asian Journal of Chemistry', '2018', 'July 17 - June 18', '0975-427X ', 'https://doi.org/10.14233/ajchem.2018.21193 ', '1542363879178'),
('chemsc', 'Synthesis, spectroscopic characterization and antibacterial screening of novel Mannich bases of Ganciclovir', 'Sheela Joshi, Purti Bilgaiyan, Anju Pathak', 'School of Chemical Sciences', 'Arabian Journal of Chemistry', '2017', 'July 16 - June 17', '1878-5352', 'doi.org/10.1016/j.arabjc.2013.02.013 ', '1542366867217'),
('chemsc', 'Synthesis, spectroscopic characterization and Antibacterial screening of some new cefotaxime sodium derivatives', 'Sheela Joshi, Anju Shukla, Rahul Singh Jhala', 'School of Chemical Sciences', 'Arabian Journal of Chemistry', '2015', 'July 14 - June 15', '1878-5352', 'doi.org/10.1016/j.arabjc.2014.12.031 ', '1542367025194'),
('chemsc', 'Synthesis, spectral characterization and in vitro antibacterial activity of amino methylated derivatives of cefuroxime axetil ', 'Sheela Joshi  and Anju Shukla ', 'School of Chemical Sciences', 'Der Pharma Chemica', '2016', 'July 16 - June 17', '0975-413X', 'https://www.derpharmachemica.com/pharma-chemica/synthesis-spectral-characterization-and-in-vitro-antibacterial-activity-of-amino-methylated-derivatives-of-cefuroxime-ax.pdf', '1542367153142'),
('chemsc', 'MOLECULAR MODELING STUDIES OF N, N -DISUBSTITUTED DERIVATIVES AS POTENT UREASE INHIBITORS', 'Sheetal Gupta, Amritlal Bajaj', 'School of Chemical Sciences', 'Journal of Drug Delivery and Therapeutics', '2017', 'July 16 - June 17', '2250-1177', 'file:///C:/Users/DELL/Downloads/1619-Article Text-4429-1-10-20171222.pdf', '1542367506309'),
('chemsc', 'Extra precision glide docking, free energy calculation and molecular dynamics studies of 1,2-diarylethane derivatives as potent urease inhibitors', ' Sheetal Gupta, A. V. Bajaj', 'School of Chemical Sciences', 'Journal of Molecular Modeling', '2018', 'July 18 - June 19', '0948-5023', 'doi.org/10.1007/s00894-018-3787-4 ', '1542367606539'),
('chemsc', 'ANTIBA.CTERIAL SCREENING OF NEWLY SYNTHESIZED MANNICH BASES DERIVED FROM 5H-DIBENZO[B,F]AZEPINE-5- CORBOXAMIDE AGAINST GRAM POSITIVE AND GRAM NEGATIVE PATHOGENS', 'Sheela Joshi and Kapil Vyas', 'School of Chemical Sciences', 'World Journal of Pharmaceutical Research', '2017', 'July 17 - June 18', ' 2277â€“ 7105', 'file:///C:/Users/DELL/Downloads/article_wjpr_KapilVyas2017.pdf', '1542368073491'),
('chemsc', 'Synthesis of some novel phosphorylated and thiophosphorylated benzimidazoles and benzothiazoles and their evaluation for larvicidal potential to Aedes albopictus and Culex quinquefasciatus', ' Prabal Bandyopadhyay, Manisha Sathe, Sachin N. Tikar, Ruchi Yadav, Pratibha Sharma, Ashok Kumar, M.P. Kaushik', 'School of Chemical Sciences', 'Bioorganic and Medicinal Chemistry Letters', '2014', 'July 14 - June 15', '0960-894X', 'doi.org/10.1016/j.bmcl.2014.04.082 ', '1542433680251'),
('chemsc', 'SYNTHESIS, SPECTROSCOPIC CHARACTERIZATION AND ANTIBACTERIAL SCREENING OF MEDICINALLY IMPORTANT MANNICH BASES DERIVED FROM 5HDIBENZO [B, F] AZEPINE-5-CORBOXAMIDE', 'Sheela Joshi and Kapil Vyas', 'School of Chemical Sciences', 'KAAV INTERNATIONAL JOURNAL OF SCIENCE', '2017', 'July 17 - June 18', '2348-5477', 'http://www.kaavpublications.org/journals/journal-3/abstract/abstract-1351.pdf', '1542438626149'),
('chemsc', 'Use of Balaban Index, Zagrebâ€™s Index And Kier and Hallâ€™s Valency Connectivity Indices In Modeling Cardiotonic Agents- Cardio-Selective Î²-Blockers', 'Teena Pareek, A.V. Bajaj and Dheeraj Mandloi', 'School of Chemical Sciences', 'International Journal of Scientific and Engineering Research', '2014', 'Feb 14 - June 14', '2229-5518', 'https://www.ijser.org/paper/Use-Of-Balaban-Index-Zagrebs-Index-And-Kier-Halls.html', '1542439165904'),
('chemsc', 'Synthesis, characterization and catalytic of covalently bonded transition-metal salicylaldimine complex to Î±-zirconium phosphate for oxidation of cyclohexane under solvent-free condition', 'S. Khare and P. Shrivastava', 'School of Chemical Sciences', 'Asian Journal of Chemical and Environmental Research', '2014', 'July 14 - June 15', '0974-3049', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-14-44S.Khare, Asian Journal of Chemical and Environmental Research .docx', '1542440098844'),
('chemsc', 'Catalytic liquid phase oxidation of cyclohexane with tert-butylhydroperoxide over transition metal exchanged Î±-zirconium phosphate', 'S. Khare, P. Shrivastava, R. Chokhare, J. S. Kirar and S. Parashar', 'School of Chemical Sciences', 'Indian Journal of Chemistry', '2018', 'July 17 - June 18', 'O975-0975', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-23-46S. Khare Indian Journal of Chemistry.docx', '1542440599913'),
('chemsc', 'Antibacterial screening of novel Mannich bases of 5H-dibenzo [b,f]azepine-5-corboxamide', 'Sheela Joshi and Kapil Vyas', 'School of Chemical Sciences', 'Research Journal of Recent Sciences', '2017', 'July 17 - June 18', ' 2277 - 2502', 'http://www.isca.in/rjrs/archive/v6/i10/2.ISCA-RJRS-2017-080.pdf', '1542441728606'),
('sophy', 'Effect of La and Pb substitution on structural and electrical properties of parent and La/Pb co doped BiFeO3 multiferroic', 'Poorva Sharma, Dinesh Varshney', 'School of Physics', 'Advance Material Letter', '2014', 'July 14 - June 15', '0976-3961', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-32-022014 13 DDV PS UGC AML 5 71 BiLaPbFeO MFCe.pdf', '1542355347607'),
('sophy', 'Structural, magnetic and dielectric properties of Pr-modified BiFeO3 multiferroic', 'Dinesh Varshney, Poorva Sharma, S. Satapathy and P. K. Gupta', 'School of Physics', 'Journal of Alloy and Compounds', '2014', 'July 14 - June 15', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-39-452014 14 DDV PS UGC JAC 584 232 BPFO MFCe.pdf', '1542355904549'),
('sophy', 'Structural, electrical and magnetic properties of Bi0.825Pb0.175FeO3and Bi0.725La0.1Pb0.175FeO3 multiferroics', 'Dinesh Varshney, Poorva Sharma, S. Satapathy and P. K. Gupta', 'School of Physics', 'Materials  Research  Bulletin', '2014', 'July 14 - June 15', '0025-5408', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-42-522014 15 DDV PS UGC MRB 49 345 BPbFO MFCe.pdf', '1542356024452'),
('sophy', 'Effect of Pr substitution on structural and electrical properties of BiFeO3 ceramics', 'Poorva Sharma, Dinesh Varshney, S. Satapathy and P. K. Gupta', 'School of Physics', 'Materials Chemistry and Physics', '2014', 'Feb 14 - June 14', '0254-0584', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-45-432014 16 DDV PS UGC MCAP 143 629 BLaPbFO MFCe.pdf', '1542356205791'),
('sophy', 'First-principles investigation on structural, elastic, electronic and thermodynamic properties of filled skutterudite PrFe4P12 compound for thermoelectric applications', 'M. Ameri, B. Abdelmounaim, M. Sebane, R. Khenata, Dinesh Varshney, B. Bouhafs, Y. Al-Douri and K. Boudia', 'School of Physics', 'Molecular Simulations', '2014', 'July 14 - June 15', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-48-432014 17 25 DDV MA GMOS 40 15 1236 1243 PrFe4P12 HPPT.pdf', '1542356378916'),
('sophy', 'First-Principles Calculations of Structural, Electronic, Optical, and Thermodynamic Properties of CdS, CdTe and Their Ternary Alloys CdS1-xTex (0.0 â‰¤ x â‰¤ 1.0)', 'M. Ameri, S. Mesbah, Y. Al-Douri, B. Bouhafs, Dinesh Varshney and I. Ameri', 'School of Physics', 'Acta Physica Polonica A', '2014', 'July 14 - June 15', '0587-4246', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-51-322014 18 DDV MA APPA 125 1110 CdSTe HPPT.pdf', '1542356628120'),
('sophy', 'Structural, elastic, electronic and thermodynamic properties of uranium filled skutterudites UFe4P12: First principle method', 'M. Ameri, S. Amel, B. Abidri, I. Ameri, Y. Al-Douri, B. Bouhafs, Dinesh Varshney, A. Aze-Eddine, and L. Nadia', 'School of Physics', 'Materials Science in Semiconductor Processing ', '2014', 'July 14 - June 15', '1369-8001', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-54-312014 19 DDV MA MSSP 27 368 Skutterudites UFe4P12 HPPT.pdf', '1542356769106'),
('sophy', 'First-Principles  Investigation  of  the  Structural, CaxZn1-xS Alloys', 'M. Ameri, A. Aze-Eddine, I. Ameri, Y. Al-Douri, Dinesh Varshney, B. Bouhafs, N. E. Bouzouira, and D. Hachemane', 'School of Physics', 'Chinese Journal of Physics', '2014', 'July 14 - June 15', '1369-8001', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-56-302014 20 DDV MA CJP 52 3 1120 CaZnS HPPT.pdf', '1542356891426'),
('sophy', 'Substitutional effects on structural and magnetotransport properties of La0.85-xSmxK0.15MnO3 (x  = 0.05, 0.1 and 0.15)											', 'Dinesh Varshney, and M. W. Shaikh', 'School of Physics', 'J. Alloys and Compounds', '2014', 'July 14 - June 15', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-59-082014 21 DDV MWS UGC JAC 589 558 LaSmKMnO CMRe.pdf', '1542357046221'),
('sophy', 'Structural and electrical properties of Pr1âˆ’xSrxMnO3 (x = 0.25, 0.3, 0.35 and 0.4) manganites', 'M. W. Shaikh and Dinesh Varshney', 'School of Physics', 'Materials Science in Semiconductor Processing ', '2014', 'July 14 - June 15', '1369-8001', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-00-542014 22 DDV MWS MSSP 27 418 426 PrSrMnO CMRe.pdf', '1542357170064'),
('sophy', 'Structural and Magneto-transport studies of magnetic ion doping for monovalent-doped LaMnO3 manganites											', 'Dinesh Varshney and Neha Dodiya', 'School of Physics', 'Journal of Materials Research', '2014', 'July 14 - June 15', '0884-2914', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-03-212014 23 DDV ND UGC JMR 29 1183 LaSmNaMnO CMRt.pdf', '1542357285186'),
('sophy', 'Metallic and Semiconducting Resistivity behaviour of La0.7Ca0.3-xKxMnO3 (x = 0.05, 0.1) manganites', 'Dinesh Varshney and Neha Dodiya', 'School of Physics', 'Journal of Theoretical and Applied Physics', '2014', 'July 14 - June 15', '2251-7235', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-06-322014 24 DDV ND UGC LaCaKMnO JTAP.pdf', '1542357427143'),
('sophy', 'Study of Elastic moduli and thermal properties of RMnO3 (R = La, Nd) compounds	', 'Dinesh Varshney and Dinesh Choudhary', 'School of Physics', 'International Journal of Computational Materials Science and Engineering', '2014', 'July 14 - June 15', '2047-6841', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-09-322014 25 DDV DC IJCMSE 3 1450011 RMO CT CMRt.pdf', '1542357610289'),
('sophy', 'Interpretation of temperature dependent thermoelectric power behaviour of La0.67Ba0.33MnO3 Manganites', 'Dinesh Varshney, E. Khan and Dinesh Choudhary', 'School of Physics', 'Molecular Physics', '2014', 'July 14 - June 15', '1362-3028', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-12-382014 26 DDV DC UGC MP 112 3183 LBMO TEP CMRt.pdf', '1542357795864'),
('sophy', 'Thermal conductivity in the ferromagnetic metallic phase of monovalent Ag doped manganites', 'Dinesh Varshney, E. Khan, and Dinesh Choudhary', 'School of Physics', 'International Journal of Computational Materials Science and Engineering', '2014', 'July 14 - June 15', '2047-6841', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-16-572014 27 DDV DC IJCMSE 3 3 1450015 1 17 LaAgMnO3 Tc CMRt.pdf', '1542357978946'),
('sophy', 'Role  of  phonon  drag  and  carrier  diffusion		in  thermoelectric  Power  of	Polycrystalline La0.97Na0.03MnO3 Manganites', 'Dinesh Varshney and Dinesh Choudhary', 'School of Physics', 'Journal  of  Advanced  Ceramics', '2014', 'July 14 - June 15', '2226-4108', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-21-582014 23 DDV ND UGC JMR 29 1183 LaSmNaMnO CMRt.pdf', '1542358237572'),
('sophy', 'Cu doping effect of hematite (Î±-Fe2-xCuxO3): Effect on the structural and magnetic properties', 'Arvind Yogi and Dinesh Varshney', 'School of Physics', 'Materials Science in Semiconductor Processing', '2014', 'July 14 - June 15', '1369-8001', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-24-242014 29 DDV AY UGC MSISP 21 38 FeCu2O3 HMTEe.pdf', '1542358536421'),
('sophy', 'Structural, electrical and magnetoresistance of titanium-doped iron (II, III) oxide (Fe3O4) thin films deposited on strontium titanate, alumina, silicon, and float glass.			', 'Dinesh Varshney and Arvind Yogi', 'School of Physics', 'Materials Science in Semiconductor Processing', '2014', 'July 14 - June 15', '1369-8001', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-27-192014 30 DDV AY UGC MSISP 26 33 FeTi3O4 TFT MGTEe.pdf', '1542358731048'),
('sophy', ' Structural, vibrational, and magnetic properties of Ti substituted bulk hematite:  -Fe2 xTixO3', 'Dinesh Varshney and Arvind Yogi', 'School of Physics', 'Journal  of  Advanced  Ceramics', '2014', 'July 14 - June 15', '2226-4108', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-40-492014 31 DDV AY UDC JACE 3(4) 269-277 FeTi2O3 HMTEe.pdf', '1542359547995'),
('sophy', 'Influence of divalent metal cation Zinc Doping on the Structural and Magnetic characterization of hemataite: Î±-Fe2O3.											', 'Dinesh Varshney and Arvind Yogi', 'School of Physics', 'Journal of Molecular Structure', '2014', 'July 14 - June 15', '0022-2860', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-42-162014 32 DDV AY UGC JMS 1075 1 FeZn2O3 HMTEe.pdf', '1542359665342'),
('sophy', 'Structural and electrical transport properties of ZnxFe3âˆ’xO4 thin film deposited on Si (111) by pulsed-laser deposition', 'Dinesh Varshney and Arvind Yogi', 'School of Physics', 'Optik âˆ’  Int. J. Light Electron Optics', '2014', 'July 14 - June 15', '0030-4026', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-43-542014 33 DDV AY UDC Optik 125 6629â€“6633 FeZn3O4 TFT MGTEe.pdf', '1542359754185'),
('sophy', 'Structural, vibrational and dielectric study of Ni doped spinel Co ferrites: Co1-xNixFe2O4 (x = 0.0, 0.5, 1.0). ', 'Ashwini Kumar, Poorva Sharma and Dinesh Varshney', 'School of Physics', 'Ceramics International', '2014', 'July 14 - June 15', '0272-8842', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-45-282014 34 DDV AK PS CERI UDC 40 12855 CoNiFe2O4 FETEe.pdf', '1542359857490'),
('sophy', 'Normal and superconducting state specific heat of Mg1-xAlxB2, (0 < x < 0.2)', 'Dinesh Varshney, Swati Bhatnagar, Meenu Varshney and Namita Singh', 'School of Physics', 'Molecular Simulations', '2014', 'July 14 - June 15', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-49-362014 35 DDV SB GMOS 40 15 p1 7 CT MgAlB HTSC.pdf', '1542359943955'),
('sophy', 'Pressure induced structural phase transition and elastic properties of rare earth Pr chalcogenides and pnictides.', 'Dinesh Varshney, Swarna Shriya, Meenu Varshney and R. Khenata', 'School of Physics', 'Phase Transition', '2014', 'July 14 - June 15', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-51-572014 36 DDV SS PrXY PT Two Body HPPT.pdf', '1542360193134'),
('sophy', 'Electrical Transport in the Ferromagnetic state of Silver substituted manganites La1-xAgxMnO3 (x = 0.05 and 0.1).', 'Dinesh Varshney, Dinesh Choudhary and E. Khan', 'School of Physics', 'Journal of Materials Research', '2014', 'July 14 - June 15', '0884-2914', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-58-032014 43 DDV DC EK JMR 00 00 LaAgMnO RT CMR.pdf', '1542360334921'),
('sophy', 'Role of Density Profiles for the Nonlinear Propagation of Intense Laser Beam through Plasma Channel ', 'Sonu Sen, Meenu Asthana Varshney and Dinesh Varshney', 'School of Physics', 'Advances in Optical Technologies', '2014', 'July 14 - June 15', '2090-7826', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-02-272014 10 DDV MV SS AIOT 1 7 Hindawi LPI.pdf', '1542360712732'),
('sophy', 'Distribution regimes of intense laser beam in a self-consistent plasma channel', 'Sonu Sen, Meenu Asthana Varshney and Dinesh Varshney', 'School of Physics', 'Applied Physics B: Lasers and Optics ', '2014', 'July 14 - June 15', '1432-0649', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-03-502014 11 DDV MV SS APB 116 811 819 LPI.pdf', '1542360965196'),
('sophy', ' Enhanced propagation and focusing of an intense laser beam in high density magnetized plasma', 'Sonu Sen, Meenu Asthana Varshney and Dinesh Varshney', 'School of Physics', 'High Energy Density Physics', '2014', 'July 14 - June 15', '1574-1818', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-05-452014 12 DDV MV SS HED 11 80 RSFMP LPI.pdf', '1542361073181'),
('sophy', 'Gyanvani Radio Based Education: Study of Scope for integrating it with Edusat â€“ A Case Study of 	Madhya Pradesh Bhoj (Open) University.', 'D. Singh, R. Shrivastava, and Dinesh Varshney', 'School of Physics', 'International Journal of Computer Science and Engineering System', '2014', 'July 14 - June 15', '0973-4406 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-11-232014 39 DDV DS IJCSES 8 26 32 Gyanvani CS.pdf', '1542361408686'),
('sophy', 'Development of Software to Improve the Effectiveness of Delivery and Understanding of Content by the End User in Distance Education.			', 'D. Singh, R. Shrivastava, and Dinesh Varshney', 'School of Physics', 'International Journal of Engineering Science and Technology', '2014', 'July 14 - June 15', '0975-5462', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-14-382014 40 DDV DS IJEST 6 4 89 98 Software CS.pdf', '1542361499133'),
('sophy', 'Identification and statistical analysis of the problems associated with Edusat based distance learning with special reference to Madhya Pradesh Bhoj (Open) University, Bhopal.			', 'D. Singh, R. Shrivastava, and Dinesh Varshney', 'School of Physics', 'Int. Journal of Soft Computing and Engineering', '2014', 'July 14 - June 15', '2231-2307 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-16-222014 41 DDV DS IJSCE 4 2 60 69 Statistical CS.pdf', '1542361725263'),
('sophy', 'Structural and magneto-transport properties of (1-x) La0.67Sr0.33MnO3 (LSMO)   (x) BaTiO3 (BTO) composites', 'Dinesh Varshney, and Mashkoor Ahmad Dar', 'School of Physics', 'J. Alloys and Compounds', '2015', 'July 15 - June 16', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-21-142015 08 DDV MAD MPCST JAC 619 122  LSMO BTO COMP.pdf', '1542361866142'),
('sophy', 'Structural, mechanical and electronic properties of sodium based fluoroperovskites NaXF3 ( X = M g , Z n ) from first-principle calculations.', 'R. Arar, R. Khenata, Dinesh Varshney, T. Ouahrani, Y. Al-Douri, G. Murtaza, A. Bouhemadou, A. H. Reshak, D. Rached', 'School of Physics', 'Materials Science in Semiconductor Processing', '2015', 'July 15 - June 16', '1369-8001', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-23-062015 10 DDV RK MSISP 33 127 135 NaMgZnF3 DFT.pdf', '1542362090413');
INSERT INTO `t3_4_5` (`Username`, `Title`, `Name`, `Department`, `Journal`, `Period`, `Year`, `ISBN`, `Link`, `id_time`) VALUES
('sophy', 'Structural and Ferroic Properties of La, Nd, and Dy Doped BiFeO3 Ceramics', 'Ashwini Kumar, Poorva Sharma and Dinesh Varshney', 'School of Physics', 'Journal of Ceramics ', '2015', 'July 15 - June 16', '0272-8842', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-28-252015 12 DDV AKD UDC BiReFeO Ceramics MFC.pdf', '1542362202973'),
('sophy', 'Structural and transport properties of La1-xAgxMnO3 (x = 0.075, 0.1, 0.125 and 0.15) manganites', 'M. W. Shaikh, I. Mansuri, M. A. Dar and Dinesh Varshney', 'School of Physics', 'Materials Science in Semiconductor Processing', '2015', 'July 15 - June 16', '1369-8001', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-34-512015 14 DDV MWS MPCST MSISP 35 10 LaAgMnO CMR.pdf', '1542362522429'),
('sophy', 'Structural, electronic and thermodynamic properties of half-metallic Co2CrZ (Z = Ga, Ge and As) alloys: First-principles calculations.', 'M. Ameri, A. Aze-Eddine, I. Ameri, Y. Al-Douri, Dinesh Varshney, B. Bouhafs, N. E. Bouzouira, and D. Hachemane', 'School of Physics', 'Materials Science in Semiconductor Processing', '2015', 'July 15 - June 16', '1369-8001', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-37-492015 15 DDV MA MSISP 38 126 Co2CrZ DFT.pdf', '1542362909667'),
('sophy', 'Room temperature structure vibrational and dielectric properties of Ho modified YMnO3.', 'Dinesh Varshney, Poorva Sharma, and Ashwini Kumar', 'School of Physics', 'Materials Research Express ', '2015', 'July 15 - June 16', '2053-1591', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-39-362015 16 DDV PS MPCST MREx 2 76102 YHoMnO3 MFC.pdf', '1542363084989'),
('sophy', 'Effect of sintering temperature on structure and multiferroic properties of Bi0.825Sm0.175FeO3 ceramics', 'Poorva Sharma, S. Satapathy, Dinesh Varshney, P.K. Gupta', 'School of Physics', 'Materials Chemistry and Physics', '2015', 'July 15 - June 16', '0254-0584', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-43-132015 17 DDV PS MCAP 162 Bi0.825Sm0.175FeO3 BSFO 469 MFCe.pdf', '1542363192713'),
('sophy', 'On the synthesis, structural, optical and magnetic properties of nano-size Zn-MgO', 'Dinesh Varshney, and Sonam Dwivedi', 'School of Physics', 'Superlattices and microstructures', '2015', 'July 15 - June 16', '0749-6036', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-47-502015 18 DDV SD MPCST SLAM ZnMgO 85 886 NMT.pdf', '1542363555719'),
('sophy', 'Enhanced magneticresponseinsingle-phaseBi0.80La0.15A0.05FeO3Î´ (AÂ¼Ca, Sr,Ba)ceramics', 'Poorva Sharma, Ashwini Kumar and Dinesh Varshney', 'School of Physics', 'Solid State Communications', '2015', 'July 15 - June 16', '0038-1098 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-49-242015 19 DDV PS UDC SSC 220 6 BiLaCaSrBaFeO MFC.pdf', '1542363685744'),
('sophy', 'Structural, elastic, electronic optical and thermodynamic properties of ZnAl2S4', 'A. Haddou, G. Murtaz, H. Khachai, R. Khenata, S. Bin Omran, Naeem Ullah, Dinesh Varshney, A. Bouhemadou', 'School of Physics', 'Int. J. of Thermo Physics', '2015', 'July 15 - June 16', '0195-928X', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_11-58-192015 20 DDV RK IJOT 36 2940 ZnAl2S4 DFT.pdf', '1542436181656'),
('sophy', 'Structural and optical properties of Ni substituted CaCu3Ti4-xNixO12', 'Dinesh Varshney, and Ashwini Kumar', 'School of Physics', 'Optik âˆ’ Int. J. Light Electron Optics', '2015', 'July 15 - June 16', '0030-4026', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-00-442015 21 DDV AKD MPCST Optik 126 3437 CCTO MFC.pdf', '1542436331671'),
('sophy', 'Structural, electronic, optical and thermodynamic properties of copper halide ternary alloy CuCl1-xIx (0.0 < x < 1.0): First Principal method.', 'M. Ameri, D. Hachemane, I. Ameri, B. Abidri, B. Ali, B. Bouhafs, Dinesh Varshney, and Y. Al-Douri', 'School of Physics', 'Chinese Journal of Physics', '2015', 'July 15 - June 16', '1369-8001', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-02-582015 22 DDV MA CJOP 53 CuClI 040802 DFT.pdf', '1542436482892'),
('sophy', 'Elastic and thermodynamical properties of cubic (3C) Silicon Carbide under High-Pressure and high-Temperature', 'Dinesh Varshney, S. Shriya, M. Varshney, N. Singh and R. Khenata', 'School of Physics', 'Journal of Theoretical and Applied Physics', '2015', 'July 15 - June 16', '2251-7235', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-06-142015 23 DDV SS JTAP 9 221 SiC15 HPPT.pdf', '1542436596707'),
('sophy', 'Synthesis, structural, Raman spectroscopic and paramagnetic properties of Sn doped NiO nanoparticles', 'Dinesh Varshney, and Sonam Dwivedi', 'School of Physics', 'Superlattices and microstructures', '2015', 'July 15 - June 16', '0749-6036', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-08-412015 24 DDV SD MPCST SLAM 86 430 SnNiO NMT.pdf', '1542436793870'),
('sophy', 'Structural and dielectric studies of hexagonal ZnO nanoparticles', 'Dinesh Varshney, K. Verma and Sonam Dwivedi', 'School of Physics', 'Optik âˆ’ Int. J. Light Electron Optics', '2015', 'July 15 - June 16', '0030-4026', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-10-302015 25 DDV SD MPCST IJLEO126 4232 ZnO NMT.pdf', '1542436939472'),
('sophy', 'Thermal conductivity of Mg(B0.94C0.06)2 superconductors: Role of electron and lattice- impurity scattering', 'Dinesh Varshney, Swati Bhatnagar, Meenu Varshney and Namita Singh', 'School of Physics', 'Molecular Simulations ', '2015', 'July 15 - June 16', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-12-182015 26 DDV NS SB GMOS 41 1466 MgBC HTSC.pdf', '1542437048759'),
('sophy', '3d transition metal doped Zn0.95Tm0.05O (Tm = Mn, Co, Ni, Cu): Structure, microstructure, Raman, dielectric constant and magnetism.', 'Dinesh Varshney, and Sonam Dwivedi', 'School of Physics', 'Materials Research Express', '2015', 'July 15 - June 16', '2053-  1591', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-13-462015 27 DDV SD MPCST MREx 2 106102 ZnTmO NMT.pdf', '1542437155295'),
('sophy', 'Pressure induced stiffening, thermal softening of bulk modulus and brittle nature of Mercury Chalcogenides', 'Dinesh Varshney, Swarna Shriya, Raju Sapkale, Meenu Varshney and M. Ameri', 'School of Physics', 'International Journal of Computational Materials Science and Engineering', '2015', 'July 15 - June 16', '2047-6841', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-16-492015 29 DDV SS MA IJCMSE HgX 4 1550015 41 p HPPT.pdf', '1542437243237'),
('sophy', 'Microstructural properties, Electrical behavior and low field magnetoresistance of (1-x) La0.67Sr0.33MnO3 (LSMO)   (x) Ni0.5Zn0.5Fe2O4 (NZFO) composites', 'M. A. Dar and Dinesh Varshney', 'School of Physics', 'Solid State Communications', '2015', 'July 15 - June 16', '0038-1098', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-18-452015 30 DDV MD UDC SSC 224 LSMO NiZnFETE 24 COMP.pdf', '1542437425510'),
('sophy', 'Ab initio calculations of structural, elastic, electronic and thermodynamic properties of the Cerium filled skutterudite CeRu4P12 under the effect of the pressure.', 'Mokhtar Berrahal, Mohammed Ameri, Y. Al-Douri, Dinesh Varshney, Ibrahim Ameri, Mohamed Boubchir, Djamel Boublenza and Bennadji Abderrahim', 'School of Physics', 'Materials Science-Poland', '2015', 'July 15 - June 16', '2083-1331', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-20-142015 31 DDV MA MSP 33 699 CeRu4P12 DFT HPPT.pdf', '1542437541938'),
('sophy', 'Structural transition and enhanced ferromagnetic properties of La, Nd, Gd and Dy doped BiFeO3 ceramics', 'Ashwini Kumar and Dinesh Varshney', 'School of Physics', ' Journal of Electronic Materials', '2015', 'July 15 - June 16', '0038-1098', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-21-552015 32 DDV AKD UDC JEMS Bi0.8LaNdGdDyFeO3 44 4354 MFC.pdf', '1542437630635'),
('sophy', 'Rare earth ion (La and Pb) substitution induced Structural and Multiferroic properties of Bi Ferrite ', 'Poorva Sharma, Ashwini Kumar and Dinesh Varshney', 'School of Physics', 'Journal of Advanced Ceramics', '2015', 'July 15 - June 16', '2226-4108', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-24-212015 33 DDV PS UDC JACE 4 292 BiLaPbFeO3 MFC.pdf', '1542437731715'),
('sophy', 'Investigations of the structural, electronic, magnetic and half-metallic behavior of Co2MnZ (Z = Al, Ge, Si, Ga) full-Heusler compounds', 'F. Dahmane, B. Doumi, Y. Mogulkoc, A. Tadjer, Deo Prakash, K. D. Verma, Dinesh Varshney, M. A. Ghebouli, S. Bin Omran, and R. Khenata', 'School of Physics', 'Journal of Superconductivity incorporating Novel magnetism', '2016', 'July 16 - June 17', '1557-1947', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-32-242016 14 JSCYINM 29 809â€“ 817.pdf', '1542437878843'),
('sophy', 'Influence of layers growth on the proprieties of the superlattice (BeTe)n/(ZnSe)m', 'A. Haddou, G. Murtaza, H. Khachai, R. Khenata, S. Bin Omran, Naeem Ullah, Dinesh Varshney, A. Bouhemadou', 'School of Physics', 'Materials Science-Poland', '2016', 'July 16 - June 17', '2083-1331', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-33-562016 13 MS Poland 34(1) 115â€“125 DFT.pdf', '1542438360777'),
('sophy', 'First-principles calculations of structural, elastic, thermodynamic, electronic and magnetic investigations of the filled skutterudite alloy UFe4Sb12', 'S. Daho, M. Ameri, Y. Al Douri, D. Bensaid, Dinesh Varshney, and I. Ameri', 'School of Physics', 'Materials Science in Semiconductor Processing ', '2016', 'July 16 - June 17', '1369-8001', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-36-132016 15 DDV MA MSSP 41 102 UFe4Sb12 DFT.pdf', '1542438452881'),
('sophy', 'Structural, electronic and magnetic properties of Fe2-based full Heusler alloys: A first principle study', 'F. Dahmane, Y. Mogulkoc, B. Doumi, A.Tadjer, R. Khenata, S. Bin Omran, D. P. Rai, G. Murtaza, and Dinesh Varshney', 'School of Physics', 'Journal of Magnetism and Magnetic Materials ', '2016', 'July 16 - June 17', '0304-8853', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-37-522016 16 DDV RK JMMM 407 167 Fe2XAl (Cr,Mn,Ni).pdf', '1542438590592'),
('sophy', 'Structural, elastic, thermodynamic and electronic properties of LuX (X=N, Bi and Sb) compounds: First principles calculations', 'M. Ameri, Faiza Bennar, Slamani Amel, Ibrahim Ameri, Y. Al-Douri and Dinesh Varshney', 'School of Physics', 'Phase Transition ', '2016', 'July 16 - June 17', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-41-57Structural elastic thermodynamic and electronic properties of LuX X N Bi and Sb compounds first principles calculations.pdf', '1542438690777'),
('sophy', 'Thermal conductivity of ferromagnetic metallic La0.95Ag0.05MnO3 manganites: Role of carrier, spin waves and lattice- impurity scattering', 'Dinesh Varshney, Dinesh Choudhary, Meenu Varshney and Namita Singh', 'School of Physics', 'Molecular Simulations ', '2016', 'July 16 - June 17', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-43-302016 17 Molecular Simulation 42(2) 110â€“121.pdf', '1542438934668'),
('sophy', 'High pressure and temperature induced structural, elastic and thermodynamical properties of Strontium Chalcogenides', 'Dinesh Varshney, Swarna Shriya, Sanjay Jain and R. Khenata', 'School of Physics', 'Journal of Theoretical and Applied Physics', '2016', 'July 16 - June 17', '2251-7235', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-47-252016 22 DDV SJ JTAP SrX 1 31 HPPT.pdf', '1542439026943'),
('sophy', 'Mechanically induced stiffening, thermally driven softening and brittle nature of SiC ', 'Dinesh Varshney, Swarna Shriya, Sanjay Jain, Meenu Varshney and R. Khenata', 'School of Physics', 'Journal of Advanced Ceramics', '2016', 'July 16 - June 17', '2226-4108 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-49-292016 19 DDV SS JACE SiC33.pdf', '1542439264362'),
('sophy', 'Structure, morphology, optical and magnetic response of ZnO, Mn3O4 and doped Zn0.5Mn0.5O nanoparticles as synthesized by chemical co precipitation method', 'Dinesh Varshney, and Sonam Dwivedi', 'School of Physics', 'Semiconductor Science and Technology', '2016', 'July 16 - June 17', '1361-6641 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-06-152016 20 DDV SD MPCST SSAT 31 3507 ZnO Mn3O4 Zn0.5Mn0.5O NMT.pdf', '1542439388569'),
('sophy', 'Improved dielectric and ferroelectric properties of dual-site substituted rhombohedral structured BiFeO3 multiferroics', 'Pallavi Saxena, Ashwini Kumar, Poorva Sharma and Dinesh Varshney', 'School of Physics', 'J. Alloys and Compounds ', '2016', 'July 16 - June 17', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-08-052016 21 DDV PSax UDC JAC 682 418 BLFNO MFC.pdf', '1542440397278'),
('sophy', 'First-Principle Study of the Structural, Electronic, and Optical Properties of Cubic InNxP1â€“x Ternary Alloys under Hydrostatic Pressure', 'I. Hattabi, A. Abdiche, R. Moussa, R. Riane, K. Hadji, F. Soyalp, Dinesh Varshney, S.V. Syrotyuk and R. Khenata', 'School of Physics', 'Zeitschrift fuer Naturforschung B', '2016', 'July 16 - June 17', '1865-  7117', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-09-362016 25 Z Naturforsch InN, InP 2016 71 (9) 783 796 DFT.pdf', '1542440502527'),
('sophy', 'Effect of La and Ni substitution on structure, dielectric and ferroelectric properties of BiFeO3 ceramics', 'Ashwini Kumar, Poorva Sharma, Wenbo Yang, Jingdong Shen, Dinesh Varshney, and Qi Li', 'School of Physics', 'Ceramics International', '2016', 'July 16 - June 17', '0272-8842', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-12-012016 24 DDV AK CI 42 14805 MFC.pdf', '1542440592179'),
('sophy', 'Evaluation of Information retrieval: Precision and recall', 'Monika Arora, Uma Kanjilal, and Dinesh Varshney', 'School of Physics', 'International Journal of Indian Culture and Business Management ', '2016', 'July 16 - June 17', '1753-0814 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-16-422016 50 DDV MArora IJICBM 12 224 Data Recall CS.pdf', '1542440739387'),
('sophy', 'High pressure structural phase transition and electronic properties of the Alkali Hydrides compounds XH (X=Li, Na)', 'R. Jaradat, M. Abu-Jafar, I. Abdelraziq, R. Khenata, Dinesh Varshney, S. Bin Omran, S. Al-Qaisi', 'School of Physics', 'Phase Transition ', '2017', 'July 17 - June 18', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-19-332017 07 DDV RK PT 90 914 927 XH X Li Na DFT.pdf', '1542441023081'),
('sophy', 'Multiband and mid-infrared optical conductivity in the normal state of Mg(B1-xCx)2 superconductors ', 'Namita Singh, Roopam Sharma, R. Khenata and Dinesh Varshney', 'School of Physics', 'International Journal of Materials Science ', '2017', 'July 17 - June 18', '0973-4589', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-21-252017 08 DDV NS RS RK OC IJoMS 12 162 164 HTSC.pdf', '1542441191448'),
('sophy', 'Pressure and temperature dependence of the structural, elastic and thermodynamic properties of potassium telluride: First-principles calculations', 'N. Tayebi, K. Bidai, M. Ameri, S. Amel, I. Ameri, Y Al-Douri, and Dinesh Varshney', 'School of Physics', 'Chinese  Journal  of  Physics ', '2017', 'July 17 - June 18', '0577-9073', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-23-512017 10 DDV MA CJOP KTe 55 (2017) 769â€“779 DFT.pdf', '1542441303255'),
('sophy', 'Pressure effect on structural, electronic and thermodynamic investigations of Europium filled skutterudite EuFe4Sb12: LDA and LSDA approximations', 'Bennadji Abderrahim, Mohammed Ameri, Djelloul Hachemane, Y Al-Douri, I Ameri, Dinesh Varshney, CH Voon', 'School of Physics', 'Chinese  Journal  of  Physics', '2017', 'July 17 - June 18', '0577-9073', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-24-552017 09 DDV MA CJOP EuFeSb 55 (2017) 386â€“399 DFT.pdf', '1542441453338'),
('sophy', 'Effect of Chromium Substitution on Crystal and Lattice Structure of Soft Manganese Zinc Ferrites ', 'A. Yadav, and Dinesh Varshney', 'School of Physics', 'Modern Physics Letters B ', '2017', 'July 17 - June 18', '0217-9849', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-26-122017 11 DDV AY MnZnCrFETE MPLB 31 1750513 FETE.pdf', '1542441515873'),
('sophy', 'Phonon drag and carrier diffusion contribution to heat transport of superconductor MgB2 ', 'Roopam Sharma, Namita Singh, Khurshid Akhtar, R. Khenata and Dinesh Varshney', 'School of Physics', ' International Journal of Computational Materials Science and Engineering', '2017', 'July 17 - June 18', '2047-6841', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-27-412017 12 DDV NS IJCMSE 1750008 TEP MgB HTSC.pdf', '1542441594299'),
('sophy', 'First-principles calculations of pressure and temperature dependence of thermodynamic properties of anti-perovskite BiNBa3 compound', 'K. Bidai, M. Ameri, S. Amel, I. Ameri, Y. Al-Douri, Dinesh Varshney, C.H. Voon', 'School of Physics', 'Chinese  Journal  of  Physics', '2017', 'July 17 - June 18', '0577-9073', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-29-322017 24 DDV MA CJOP 55 2144â€“2155 BiNBa3 DFT.pdf', '1542441678566'),
('sophy', 'Structural and dielectric properties of copper substituted Mg-Zn spinel ferrites ', 'A. Yadav, and Dinesh Varshney', 'School of Physics', 'Journal of Superconductivity incorporating Novel magnetism', '2017', 'July 17 - June 18', '1557-1947', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-30-492017 13 DDV AY JSCYIM UDC 30 MgZnCuFETE 1297â€“1302 FETE.pdf', '1542441789306'),
('sophy', 'Effect of d-block element substitution on structural and dielectric properties on Iron Cobaltite ', 'Pallavi Saxena and Dinesh Varshney', 'School of Physics', 'J.  Alloys  and  Compounds  ', '2017', 'July 17 - June 18', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-32-362017 14 DDV PalS TmFeCoO JAC UDC 705 320 326 COETE.pdf', '1542441869877'),
('sophy', 'Structural and multiferroic properties of Bi0.885Sm0.115FeO3', 'Poorva Sharma, Pallavi Saxena, Ashwini Kumar, and Dinesh Varshney', 'School of Physics', 'J.  Alloys  and  Compounds', '2017', 'July 17 - June 18', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-33-442017 15 DDV PalS JAC UDC 706 609 615 BSmFO MFC.pdf', '1542441972005'),
('sophy', 'Influence of transition metal Cr2  doping on structural, electrical and optical properties of Mg-Zn aluminates', 'M. Saleem and Dinesh Varshney', 'School of Physics', 'J.  Alloys  and  Compounds  ', '2017', 'July 17 - June 18', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-34-512017 16 DDV MSM UDC JAC 708 397 403 AlETE.pdf', '1542442044773'),
('sophy', 'Effect of d-block element Co2  substitution on structural, MÃ¶ssbauer and Dielectric properties of spinel copper ferrites', 'M. A. Dar, and Dinesh Varshney', 'School of Physics', 'Journal of Magnetism and Magnetic Materials ', '2017', 'July 17 - June 18', '0304-  8853', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-36-012017 17 DDV MAD MPCST JMMM 436 101â€“112 CuCo FETE.pdf', '1542442110101'),
('sophy', 'Crystal structure, phonon modes and dielectric properties of 3d Cu2  ion doped multiferroic Co1-x CuxCr2O4 (x = 0.0, 0.5) chromites', 'P. Choudhary and Dinesh Varshney', 'School of Physics', 'Materials Research Express ', '2017', 'July 17 - June 18', '2053-  1591', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-37-322017 19 DDV PC MRX CoCuCr2O4 4 076110 CRETE MFC.pdf', '1542442179805'),
('sophy', 'Structural, electrical and enhanced low field magneto-transport properties of La0.7Sr0.3MnO3 and (1-x) La0.7Ca0.2Sr0.1MnO3 (LCSMO)   (x) MgO composites', 'M. A. Dar, and Dinesh Varshney', 'School of Physics', 'J.  Alloys  and  Compounds  ', '2017', 'July 17 - June 18', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-39-162017 18 DDV MAD MPCST JAC 724 674 683 MgO LSMO COMP.pdf', '1542442269796'),
('sophy', 'Structural, vibrational and dielectric behavior of Co1-xMxCr2O4 (M = Zn, Mg, Cu and x = 0.0, 0.5) spinel chromites', 'P. Choudhary and Dinesh Varshney', 'School of Physics', 'J.  Alloys  and  Compounds  ', '2017', 'July 17 - June 18', '0925-8388', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-40-202017 21 DDV PC UDC JAC 725 415 424 CoZnMgCu CRETE MFC.pdf', '1542442373839'),
('sophy', 'Second order nonlinear magneto-refraction and its dependence on field strength and detuning parameter in InSb semiconductors', 'N. Singh and Dinesh Varshney', 'School of Physics', 'Optik âˆ’  Int. J. Light Electron Optics', '2017', 'July 17 - June 18', '0030-4026', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-41-362017 20 DDV NS NMR PAP OPTIK 145 387 397 NLO.pdf', '1542442440404'),
('sophy', 'Impact of Rare Earth Gd3  Ions on Structural and Magnetic Properties of Ni0.5Zn0.5Fe2âˆ’xGdxO4 Spinel Ferrite: Useful for Advanced Spintronic Technologies', 'Ashwini Kumar, Jingdong Shen, Wenbo Yang, Poorva Sharma, Dinesh Varshney, and Qi Li', 'School of Physics', 'Journal of Superconductivity incorporating Novel magnetism ', '2017', 'July 17 - June 18', '1557-1947', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-50-112017 23 DDV AK JSCYIM NiZnGd FETE.pdf', '1542442515102'),
('sophy', 'First-principles Investigation on the Mechanical and Electronic Properties of Novel Pb1-xCexY alloys (Y = S, Se, and Te): An ab initio study', 'M. Zenasni, M. El Amine Monir, H. Baltach, Xiao-Wei Sun, Dinesh Varshney*, S. Bin Omran, M. Sehil, R. Khenata', 'School of Physics', 'Materials Research Express', '2017', 'July 17 - June 18', '2053-  1591', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_13-51-322017 22 DDV RK MRX PbCexY 4 095903 DFT.pdf', '1542443032453'),
('sophy', 'Structures and properties of Mg0.95Mn0.01TM0.04O (TM = Co, Ni, and Cu) nanoparticles synthesized by solâ€“gel auto combustion technique', 'M. A. Dar, and Dinesh Varshney', 'School of Physics', 'RSC Advances ', '2018', 'July 17 - June 18', '14120 â€“ 14128', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_14-04-452018 14 DDV MDar MgMnTmO RSCA 8 14120 28 NMT.pdf', '1542443220854'),
('sophy', 'Structural and temperature dependent dielectric behavior of Cr and Zn doped MnFe2O4 nano ferrites', 'A. Yadav, and Dinesh Varshney', 'School of Physics', 'Superlattices and microstructures ', '2018', 'July 17 - June 18', '0749-6036', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_14-06-382018 05 DDV AY SLAM MnZnCrMnFETE 113 UDC 153-159 FETE.pdf', '1542443906629'),
('sophy', 'Structural, thermal, and transport properties of La0.67Sr0.33MnO3 nanoparticles synthesized via the solâ€“gel auto-combustion technique', 'M. Saleem and Dinesh Varshney', 'School of Physics', 'RSC Advances ', '2018', 'July 17 - June 18', '1600 â€“ 1609', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_14-09-402018 04 DDV MSM LSMO RSC Adv 08 1600 1609 CMR.pdf', '1542444120975'),
('sophy', 'Structural, electronic, optical, thermodynamic and elastic properties of the zinc-blende AlxIn1-xN ternary alloys: A first principles calculations', 'R. Moussaa, A. Abdicheb, R. Khenatab,  X.T. Wangc, Dinesh Varshneyd, Xiao Wei Sune, S. Bin Omranf, A. Bouhemadoug, D.P. Raih', 'School of Physics', 'Journal of Physics and Chemistry of Solids', '2018', 'July 17 - June 18', '0022-3697', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_14-13-232018 13 DDV RK AlInN JPCS 119 36 AlxIn1-xN DFT.pdf', '1542444199992'),
('sophy', 'Synthesis, structural, optical and dielectric properties of transition metal doped ZnMnO nanoparticles by sol-gel combustion technique', 'M.A. Dar, Dinesh Varshney', 'School of Physics', 'Superlattices and Microstructures', '2018', 'July 17 - June 18', '0749-6036', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_14-15-282018 01 DDV MAD SLAM ZnMnO 114 MPCST 340-354 NMT.pdf', '1542444428305'),
('sophy', 'Dielectric relaxation behavior and impedance studies of Cu2  ion doped Mg â€“ Zn spinel Nanoferrites', 'Pankaj Choudhary, and Dinesh Varshney', 'School of Physics', 'Solid State Communication', '2018', 'July 17 - June 18', '0038-1098', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_14-17-102018 03 DDV PC MgZnCuFETE SGAC SSC 271 89 96 FETE.pdf', '1542444548904'),
('sophy', 'Elucidation of structural, vibrational and dielectric properties of transition metal (Co2 ) doped spinel Mg-Zn chromites', 'Pankaj Choudhary, and Dinesh Varshney', 'School of Physics', 'Journal of Magnetism and Magnetic Materials', '2018', 'July 17 - June 18', '0304-8853', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_14-20-182018 02 DDV PC MgZnCoCr2O4 JMMM 454 274 CRETE.pdf', '1542444652357'),
('doll', 'To study the opinions of middle and higher school teachers with reference of inclusion of population education in school curriculum', 'Dr. Bharti Joshi', 'Department of Lifelong Learning', 'Vidhywarta, National Interdisciplinary Multilingual referred Journal ', '2014', 'Feb 14 - June 14', '2319-9318', 'http://uid.dauniv.ac.in/NAC/profile/docs/15-11-2018_14-02-47000.docx', '1542316362171'),
('doll', 'Daughters go School', 'Dr. Bharti Joshi', 'Department of Lifelong Learning', 'Vidhywarta, National Interdisciplinary Multilingual referred Journal ', '2014', 'Feb 14 - June 14', '2319-9318', '000', '1542316478171'),
('doll', 'Lifelong Learning at Devi Ahilya University', 'Dr. Bharti Joshi', 'Department of Lifelong Learning', 'International Indo Global Journal of applied Management Science', '2014', 'July 14 - June 15', '2320-7892', '000', '1542316554803'),
('doll', 'Psychoanalysis of Happiness', 'Dr. Bharti Joshi', 'Department of Lifelong Learning', 'Naveen Shodh Sansar, International Multidisciplinary refereed Journal', '2014', 'July 14 - June 15', '2320-8767', '000', '1542500479874'),
('doll', 'Water Management-Today and tomorrow ', 'Dr. Bharti Joshi', 'Department of Lifelong Learning', 'Naveen Shodh Sansar, International Multidisciplinary refereed Journal', '2014', 'July 14 - June 15', '2320-8767', '000', '1542500995642'),
('iipsdavv', 'Â A Survey on Energy Aware Scheduling in Green Cloud Computing', 'Vivek Â Shrivastava', 'IIPS DAVV Indore', 'Â Global Journal of Multidisciplinary Studies', 'Â 2017', 'July 16 - June 17', 'Â 23480459', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_14-58-27Energy aware scheduling in Green Cloud (1).pdf', '1542446991545'),
('iipsdavv', 'Â IAR Improved Advance Reservation in IaaS Clouds', 'Â Vivek Shrivastava,  D. S. Bhilare, , and P. Gupta', 'Â International Institute of Professional Studies, DAVV', 'International Journal of Computer Applications', 'Â 2016', 'July 16 - June 17', 'Â 09758887', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_15-10-12IAR Improved Advanced Researvation lease shrivastava-2016-ijca-911767.pdf', '1542447789028'),
('iipsdavv', 'Â SAFETY: A Framework for Secure IaaS Clouds', 'Vivek Â Shrivastava D.S. Bhilare', 'International Institute of Professional Studies, DAVV', 'Â International Journal of Advanced Networking and Applications', 'Â 2015', 'July 14 - June 15', 'Â 09750282', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_15-25-09SAFETY A Framework for Secure IaaS Clouds Vivek Shrivastava DS Bhilare.pdf', '1542448669773'),
('iipsdavv', 'Â A Security Aware Leasing Policy and Algorithm for IaaS Clouds', 'Â Vivek Â Shrivastava D.S. Bhilare', 'Â International Institute of Professional Studies, DAVV', 'Â International Journal of Engineering Research and Technology', 'Â 2015', 'July 14 - June 15', 'Â 09743154', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_16-50-35A Security Aware Leasing Policy and Algorithm for IaaS clouds.pdf', '1542453763341'),
('iipsdavv', 'Â CRI: A Novel Rating Based Leasing Policy and Algorithm for Efficient Resource Management in IaaS Clouds', 'Â Vivek Â Shrivastava D.S. Bhilare', 'Â International Institute of Professional Studies, DAVV', 'Â International Journal of Computer Science and Information Technologies', 'Â 2014', 'Feb 14 - June 14', 'Â 09759646', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_17-03-14CRI.pdf', '1542454012052'),
('iipsdavv', 'Â mEDF: Deadline Driven Algorithm for Minimizing Response Time and Completion Time in IaaS Clouds', 'Â Vivek Â Shrivastava D.S. Bhilare', 'Â International Institute of Professional Studies, DAVV', 'Â International Journal of Application or Innovation in Engineering and Management (IJAIEM)', 'Â 2014', 'Feb 14 - June 14', 'Â 23194847', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_17-06-54mEDF.pdf', '1542454852297'),
('socsit', 'Software Evolution-based Aspect Mining: A Novel Approach', 'Dr. Sanjay Tanwani, Dr. Yasmin Sheikh', 'SCSIT, IIPS', 'International Journal of Data Mining and Emerging Technologies', '2017', 'July 17 - June 18', 'ISBN', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_16-35-58List of Journal.docx', '1542451933042'),
('emrcdavv', 'Utilization of Open Courseware amongst Students of Higher Learning Institutions in India', 'Patidar, N. and Singh, A.K.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'International Journal of Interdisciplinary Research and Innovations', '2018', 'July 18 - June 19', '2348-1226', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_16-52-22NP_IJIRI_2018.pdf', '1541241223574'),
('emrcdavv', 'Perception of Male and Female Students towards Need of Open Courseware in Institutions of Higher Learning and Its Associated Factors: A Comparative Study', 'Patidar, N. and Singh, A.K.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'IJRAR- International Journal of Research and Analytical Reviews', '2018', 'July 18 - June 19', '2348-1269', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_16-54-34NP_ijrar_2018.pdf', '1542367572191'),
('emrcdavv', 'Perception of Male and Female Youth towards Utilization of Open Course Ware in Institutions of Higher Learning and Its Associated Factors: A Comparative Study', 'Patidar, N. and Singh, A.K.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'KAAV International Journal of Economics, Commerce and Business Management', '2017', 'July 17 - June 18', '2348-4969', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_17-00-34NP KAAV 2017.pdf', '1542367758035'),
('emrcdavv', 'Perception of Television Viewing Media Professional towards New Knowledge Management and its Associated Factors: A Comparative Study', 'Engle, L. and Singh, A.K.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'International Journal of Interdisciplinary Research and Innovations', '2018', 'July 18 - June 19', '2348-1226', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_17-06-13LI_IJIRI_2018.pdf', '1542368122339'),
('emrcdavv', 'Perception of Male and Female Media Professional towards New Knowledge Management and its Associated Factors: A Comparative Study', 'Engle, L. and Singh, A.K.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'IJRAR- International Journal of Research and Analytical Reviews', '2018', 'July 18 - June 19', '2348-1269', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_17-09-20LI_ijrar_2018.pdf', '1542368391321'),
('emrcdavv', 'Perception of Male and Female Youth towards Relevance of ETV programs in New Media Age and its Associated Factors: A Comparative Study', 'Mourya, R. K. and Singh, A.K.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'KAAV International Journal of Economics, Commerce and Business Management', '2017', 'July 17 - June 18', '2348-4969', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_17-35-18RM_KAAV_2017.pdf', '1542369975065'),
('emrcdavv', 'Exploring the effective MOOC Development Methodology for SWAYAM', 'Jain, R. and Singh, A.K.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'University News', '2018', 'July 18 - June 19', '0566-2257', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_17-39-04RJ_University News_2018.pdf', '1542370137208'),
('emrcdavv', 'A Study of Factors Associated with Utilization of Open Course Ware as perceived by Students of Higher Learning Institutions', 'Patidar, N. and Singh, A.K.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'Jamia Journal of Education', '2017', 'July 17 - June 18', '2348-3490', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_17-48-42NP_Jamia_2016.pdf', '1542370362324'),
('emrcdavv', 'A Study of Factors Associated with Need of Open Course Ware as perceived by Students of Higher Learning Institutions', 'Patidar, N.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'Journal of Engineering, Sciences and Management Education', '2016', 'July 16 - June 17', '0976-0121', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_17-53-09NP_NITTR_2016.pdf', '1542370961447'),
('emrcdavv', 'Learning Concepts in the Era of ICT: A Brief Journey', 'Singh, A.K. and Jain, R.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'Journal of Engineering, Sciences and Management Education', '2016', 'July 16 - June 17', '0976-0121', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_17-56-19AKS_RJ_NITTR_2016.pdf', '1542371234129'),
('emrcdavv', 'Factors Associated With Electronic Media Advertising on Consumerism As Perceived By Youth', 'Pandey, D. and Singh, A.K.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'International Journal of Social Science and Humanities Research', '2016', 'July 16 - June 17', '2348-3164', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_18-21-50Dhara-IJIRI.pdf', '1542372605538'),
('emrcdavv', 'Smartphone as an e-Learning Resource', 'Singh, A.K., Patidar, N. and Engle, L.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'International Journal of Social Science and Humanities Research', '2015', 'July 15 - June 16', '2348-3164', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_18-28-22LI,NP,AKS_2015.pdf', '1542372969050'),
('emrcdavv', 'Perception of youth towards relevance of educational television programs in new media age', 'Mourya, R. K., Patidar, N. and Singh, A. K.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'International Journal of Social Sciences and Interdisciplinary Research', '2015', 'July 15 - June 16', '2277-677X', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_11-50-23IJSSIR NP, RKM, AKS.pdf', '1542435624042'),
('emrcdavv', 'Utilization and Need of e-Learning Content amongst Students of Higher Learning Institutions in India', 'Mourya, R.K. and Patidar N.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'International Journal of Social Science and Humanities Research', '2015', 'July 15 - June 16', '2348-3164', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_11-55-51NP RKM_IJSSHR_2015.pdf', '1542435902559'),
('emrcdavv', 'Enriching Higher Education with Technology based Learning', 'Jain, R. and Singh, A.K.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'Samajiki Sandarsh', '2015', 'July 14 - June 15', '2348-0076', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_12-10-51RJ Samajik Sandarbh.pdf', '1542436473344'),
('emrcdavv', 'A Study of Factors associated with New Knowledge Management amongst Media Professional', 'Engle, L.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'Journal of Engineering, Sciences and Management Education', '2016', 'July 16 - June 17', '0976-0121', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_17-41-24LI_NITTR.pdf', '1542456804139'),
('emrcdavv', 'Effectiveness of Educational Television Programs in Terms of Awareness of Villagers towards Village Community Development', 'Gour, H.', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'Journal of Engineering, Sciences and Management Education', '2016', 'July 16 - June 17', '0976-0121', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_17-58-45HG_NITTTR.pdf', '1542457848065'),
('Sees', '1.	To study the performance of biocarriers in moving bed biofilm reactor (MBBR) technology and kinetics of biofilm for retrofitting the existing aerobic treatment systems - A Review, ', 'Anjali Barwal and Rubina Chaudhary', 'School of energy and Environmental Studies', 'Reviews in Environmental Science and Bio/technology', '2014', 'Feb 14 - June 14', '1569-1705', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-30-412014_1.pdf', '1542354783910'),
('Sees', '2.	A review on management of chrome tanned leather shavings: a holistic paradigm to combat the environmental issues Environmental Science and Pollution Research', ' Pati A Chaudhary R Subramani S', 'School of energyand Environmental Studies', 'Environ. Sci.Pollut. Res. Int. ', '2014', 'Feb 14 - June 14', ' 0944-1344', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_13-40-332014_2.pdf', '1542355675222'),
('Sees', '1.	Influence of pH on Photocatalytic Reduction, Adsorption and Deposition of Metal Ions: Speciation Modeling', 'Rajendra Singh Thakur Rubina Chaudhary ChandanSingh', 'School of energyand Environmental Studies', 'Journal of Desalination and Water Treatment ', '2014', 'July 14 - June 15', '1944-3994', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-03-392014_3.pdf', '1542357095085'),
('Sees', '2.	Comparisons of two methods for methane emission at proposed landfill site and their contribution to climate change Indore City', 'Rubina Chaudhary Rohit Garg', 'School of energyand Environmental Studies', 'International Journal of Application or Innovation in Engineering Management ', '2014', 'Feb 14 - June 14', '2319-4847 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-14-432014_4.pdf', '1542357547806'),
('Sees', '1.	Preliminary Study on Photocatalytic Treatment of Synthetic and Industrial Wastewater by Using UV Radiation ', 'Chandan Singh Rubina Chaudhary Rajendra Singh Thakur', 'School of energyand Environmental Studies', 'Indian Journal of Water Works Association ', '2014', 'Feb 14 - June 14', '0970-275X', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-20-092014_5.pdf', '1542358297301'),
('Sees', '2.	An integrated approach towards eco-friendly urban environment through strategic environmental assessment', 'Rubina Chaudhary and Sarvesh Kumar Pandey', 'School of energyand Environmental Studies', 'International Journal of Advanced Research and Technology ', '2014', 'Feb 14 - June 14', '2347-7490', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-27-422014_7.pdf', '1542358746833'),
('Sees', '3.	A mini assessment and study of the Compactibility of different pozzolonic materials for stabilization of different waste', 'RanaPratap Singh Rubina Chaudhary and Shukti Tomar', 'School of energyand Environmental Studies', 'Indian Journal of Water works Association', '2014', 'Feb 14 - June 14', '0970-275X ', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-30-582014_5.pdf', '1542359026876'),
('Sees', '1.	Impact of carrier filling ratio on oxygen uptake  transfer rate volumetric oxygen transfer coefficient and energy saving potential in a lab scale MBBR', 'Anjali Barwal Rubina Chaudhary', 'School of energyand Environmental Studies', 'Journal of Water Process Engineering', '2015', 'July 15 - June 16', '2214-7144', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-39-012015_2.pdf', '1542359310132'),
('Sees', '2.	Soybean plant growth study conducted using purified protein hydrolysate based fertilizer made from chrome tanned leather waste', 'Rubina Chaudhary AnupamaPati', 'School of energyand Environmental Studies', 'Environmental Science and Pollution Research', '2015', 'July 15 - June 16', '0944-1344', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-45-552015_3.pdf', '1542359928467'),
('Sees', '3.	Purification of protein hydrolyate recovered from chrome tanned leather shaving waste', 'Rubina Chaudhary Anupama Pati', 'School of energyand Environmental Studies', 'Journal of American Leather Chemists Association', '2015', 'July 15 - June 16', '0002-9726', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-54-052015_4.pdf', '1542360473634'),
('Sees', '4.	Response Surface Methodology Used for Characterization and Optimization of Photocatalytic and Oxidant for The Treatment of Municipal Wastewater', 'Chandan Singh Rubina Chaudhary', 'School of energyand Environmental Studies', 'Environmental Progress and Sustainable Energy', '2015', 'July 15 - June 16', '1944-7450', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_14-59-052015_5.pdf', '1542360674567'),
('Sees', '1.	Performance Evaluation of Developed Concrete through Long Term Leaching, Durability and TCLP', 'Rubina Chaudhary and Smita Badur karmakar', 'School of energyand Environmental Studies', 'Journal of Environmental Science  Engineering', '2015', 'July 15 - June 16', '0367-827X', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-04-412015_1.pdf', '1542361026021'),
('Sees', '2.	Feasibility Study  And Application Of Different  Industrial Sludge For Landfilling Vegetative Propagation  By Using Flyash, Soil And Chemical Coagulant', 'Rubina Chaudhary ShuktiTomar Rana Pratap Singh', 'School of energyand Environmental Studies', 'Indian Journal of Environmental Protection', '2015', 'July 15 - June 16', '0253-7141', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-07-582015_6.pdf', '1542361196826'),
('Sees', '3.	Introduction of fixed film bioreactor FFBR for treatment of nitrogenous wastewater with variable concentration and hydraulic retention time under ambient conditions', 'Anjali Barwal Rubina Chaudhary', 'School of energyand Environmental Studies', 'Journal of Environmental Science Engineering', '2015', 'July 15 - June 16', '0367-827', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-10-452015_7.pdf', '1542361405044'),
('Sees', '4.	Performance study of CETP for Small Scale Industrial Wastewater Management', ', Chandan Singh and Rubina Chaudhary', 'School of energyand Environmental Studies', 'Indian Journal of Water works Association', '2015', 'July 15 - June 16', '0970-275X', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-13-222015_8.pdf', '1542361569803'),
('Sees', ' 5.	The Feasibility Study of an Activated Sludge System for the Treatment of Municipality Sewage the Energy Conservation Opportunities in STP ', 'Manisha Gaur Dr Rubina Chaudhary and  Dharm R Jangid', 'School of energyand Environmental Studies', 'Indian Water Works Association', '2015', 'July 15 - June 16', '0970-275X', 'http://uid.dauniv.ac.in/NAC/profile/docs/16-11-2018_15-16-462015_9.pdf', '1542361735317'),
('Sees', '6.   Role of indicators to attain sustainability of advanced waste water technologies: a mini review ', 'Rubina Chaudhary and Amar Pandey', 'School of energyand Environmental Studies', 'Indian Journal of Environmental Protection ', '2016', 'July 15 - June 16', '0253-7141', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_15-57-52scanner_20181117_155857.jpg', '1542449918875'),
('Sees', '7.	Effectiveness of solar photo-Fenton process for simultaneous detoxification of heavy metals and disinfection in municipal wastewater by using response surface method', 'Anjali Barwal and Rubina Chaudhary ', 'School of energyand Environmental Studies', 'Environmental Progress and sustainable Energy ', '2016', 'July 16 - June 17', '1944-7450', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_16-07-02Barwal_et_al-2017-Environmental_Progress_&_Sustainable_Energy.pdf', '1542450875798'),
('Sees', '8.	Holistic approach to sustainability initiatives in Indian cement industry: Future challenges and commitment,', 'Anjali Barwal and Rubina Chaudhary ', 'School of energyand Environmental Studies', 'Sky J. of Soil Science and Environmental Management,', '2016', 'July 15 - June 16', '2315-8794 ', 'http://uid.dauniv.ac.in/NAC/profile/docs/17-11-2018_16-12-022016_1.pdf', '1542451504516');

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
('somath', '8.Gupta, Seema, K. N. Rajeshwari, and P. C. Jha. ', 'Recent Advances in Mathematics, Statistics and Computer Science', 'Fuzzy DEA Cross-Efficiency Model for Ranking and Performance Evaluation Using Ideal and Anti-Ideal Decision Making Units', '-', '-', 'National', '2016', 'July 16 - June 17', 'ISBN:  978-9814696166', 'School of Mathematics', 'World Scientific', '1541748719157'),
('somath', 'Seema Gupta and Chandra Prakash Bhatt', 'Retail Marketing in India Trends and Future Insights', 'Performance Assessment of 52 Countries Across the Globe in Retail Sector and Ranking Based on TOPSIS', '-', '-', 'National', '2016', 'July 15 - June 16', 'ISBN: 978-1-7863541-0-5 ', 'School of Mathematics', 'Emerald Publishing', '1541750418718'),
('somath', '7.Seema Gupta, K. N. Rajeshwari  and P. C. Jha. ', 'Analytics in Operations/Supply Chain Management', 'A Goal Programming Approach to Self-Cross Best Evaluation for DEA Problem', '-', '-', 'National', '2016', 'July 15 - June 16', 'ISBN: 978-9384588946', 'School of Mathematics', 'I K International Publishing House', '1541748287550'),
('somath', 'Seema Gupta and Jyoti Dhingra Darbari ', 'National Conference on Advances in Computer and information Technology ', 'Rough Set Theory Approach for Analysing the Global Retail Sales Performance', 'National Conference on Advances in Computer and information Technology ', 'National Conference on Advances in Computer and information Technology ', 'National', '2016', 'July 16 - June 17', 'ISBN: 978-93-5258-249-5', 'School of Mathematics', '-', '1541751438322'),
('Soex', 'aa', 'bb', 'cc', 'dd', 'ee', 'aa', '1111', 'Feb 14 - June 14', '90', 'aa', 'aa', '1542109670564'),
('sostat', 'nil', 'nil', 'nil', 'nil', 'nil', 'nil', 'nil', 'Feb 14 - June 14', 'nil', 'nil', 'nil', '1542188384308'),
('chemsc', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'July 17 - June 18', 'Nil', 'Nil', 'Nil', '1542262592606'),
('sees', 'Dr R N Singh', 'Waste Management: Challenges, Threats and Opportunities', 'Waste to Energy Technology', 'N/A', 'N/A', 'international', '2015', 'July 15 - June 16', '978-1-63482-150-6', 'School of Energy and Environmental Studies, DAVV, Indore', 'Nova Science Publishers ', '1542192180314'),
('sees', 'Dr R N Singh', 'Low Carbon Energy Supply - Trends, Technology, Management', 'Thermo- Chemical Conversion of Solid Biomass', 'N/A', 'N/A', 'international', '2018', 'July 17 - June 18', '978-981-10-7325-0', 'School of Energy and Environmental Studies, DAVV, Indore', 'Springer Nature Singapore Pte Ltd', '1542192429838'),
('admin3', 'dgdfgd', 'gfhffd', 'fhfhfh', 'fhfghfg', 'gfdhdfhd', 'gfddfh', '65546', 'July 14 - June 15', '654', '65466', '6546', '1540919798279'),
('soinstru', '-', '-', '-', 'Structural characterization and electronic structure of laser treated TiN thin film', 'DAE Solid State Physics Symposium', 'national', '2012', 'Feb 14 - June 14', '1551-7616', ' School of Instrumentation, Devi Ahilya University, Khandwa road, Indore-452001, India', 'Sheetal Soni, K.G.M. Nair, D.M. Phase,Ratnesh Gupta', '1542266975253'),
('soinstru', '-', '-', '-', 'Formation of titanium carbonitride film by laser treatment: Structural and transport properties ', 'DAE Solid State Physics Symposium', 'national', '2015', 'July 14 - June 15', '1551-7616', ' School of Instrumentation, Devi Ahilya University, Khandwa road, Indore-452001, India', 'Sheetal Soni, A. Pandey, A. K. Sinha, and Ratnesh Gupta ', '1542267230546'),
('soinstru', '-', '-', '-', 'Influence of preparation methods on the optical and electronic properties of Cr-doped TiO2 thin films', 'DAE Solid State Physics Symposium,Bhubneshver', 'national', '2017', 'July 16 - June 17', '1551-7616', ' School of Instrumentation, Devi Ahilya University, Khandwa road, Indore-452001, India', 'Sagar Sen, Ajay Gupta, D. M. Phase, and Ratnesh Gupta', '1542267338917'),
('soinstru', '-', '-', '-', 'Influence of substrate temperature on the electronic and optical properties of Cr doped TiO2', 'DAE Solid State Physics Symposium ,New Delhi', 'national', '2016', 'July 16 - June 17', '1551-7616', ' School of Instrumentation, Devi Ahilya University, Khandwa road, Indore-452001, India', 'Sagar Sen, M. Gupta, and Ratnesh Gupta ', '1542267411575'),
('soinstru', '-', '-', '-', 'Design and Simulations of ZnO-based Piezoelectric Energy Harvester ', 'International Conference on Smart Materials, Structures and Systems Bangalore, India', 'International', '2017', 'July 17 - June 18', '-', ' School of Instrumentation, Devi Ahilya University, Khandwa road, Indore-452001, India', 'Sukirti Gupta, Amit Tanwar, R. Mukhiya, S. Santosh Kumar', '1542267485205'),
('soinstru', '-', '-', '-', 'A Practical Prototype Development to Simulate and Control the Movements of an AUV using ARM9 based Microcontroller', 'International conference on current trendcomputer,electrical,electronics and communication', 'International', '2017', 'July 17 - June 18', '-', ' School of Instrumentation, Devi Ahilya University, Khandwa road, Indore-452001, India', 'Sekhar Gangisetty,Anirban Nag ,Surendra Singh Patel ', '1542267699527'),
('soinstru', '-', '-', '-', 'A robust H- Infinity based depth controlof an autonomousunderwater vehical', 'International conference on advanced electronic system', 'International', '2013', 'Feb 14 - June 14', '-', ' School of Instrumentation, Devi Ahilya University, Khandwa road, Indore-452001, India', 'Anirban Nag,Surendra Singh Patel,Kaushal Kishore,S.A. Akbar', '1542267918157'),
('sopharma', 'Dr. Love Kumar Soni', 'Quinazolinone derivatives as anti-microbial agents: designing, Synthesis and Evaluation', 'NA', 'NA', 'NA', 'NA', '2018', 'July 17 - June 18', '978-613-5-84916-5', 'School of Pharmacy, Devi Ahilya Vishwavidyalaya, Indore', 'LAP Lambert Academic Publishing, Germany ', '1542300201285'),
('sopharma', 'Dr. Love Kumar Soni and Dr. Tamanna Narsinghani', 'QSAR in Drug Discovery and Development: From rational designing to computer assisted designing techniques', 'NA', 'NA', 'NA', 'NA', '2018', 'July 17 - June 18', '978-613-7-32998-6', 'School of Pharmacy, Devi Ahilya Vishwavidyalaya, Indore', 'LAP Lambert Academic Publishing, Germany ', '1542300288241'),
('sopharma', 'Dr. Love Kumar Soni and Dr. Gajanand Engla', 'Practical Medicinal Chemistry-I', 'NA', 'NA', 'NA', 'NA', '2018', 'July 17 - June 18', '978-81-936309-7-6', 'School of Pharmacy, Devi Ahilya Vishwavidyalaya, Indore', 'Paging Publishers, New Delhi ', '1542300339181'),
('sopharma', 'Dr. Love Kumar Soni and Dr. Gajanand Engla', 'Synthesis, Formulation and Evaluation of Some Selected Microspheres', 'NA', 'NA', 'NA', 'NA', '2017', 'July 17 - June 18', '978-620-2-07900-6', 'School of Pharmacy, Devi Ahilya Vishwavidyalaya, Indore', 'LAP Lambert Academic Publishing, Germany ', '1542300394309'),
('sopharma', 'Dr. Rashmi Dahima', 'Technological Aspects on food science: from plinth to zenith ', 'NA', 'NA', 'NA', 'NA', '2016', 'July 16 - June 17', '978-365-9-89149-6', 'School of Pharmacy, Devi Ahilya Vishwavidyalaya, Indore', 'LAP Lambert Academic Publishing, Germany ', '1542300448507'),
('sopharma', 'Dr. Anupama Parate', 'The Synthetic Variants of Angiotensin II Receptor Antagonists', 'NA', 'NA', 'NA', 'NA', '2015', 'July 15 - June 16', '978-3-659-â€‹47277-0', 'School of Pharmacy, Devi Ahilya Vishwavidyalaya, Indore', 'LAP Lambert Academic Publishing, Germany ', '1542300497388'),
('sopharma', 'Dr. Nidhi Dubey', 'Chromatographic methods for marker based quantitation of polyherbal oils', 'NA', 'NA', 'NA', 'NA', '2014', 'July 14 - June 15', '978-3-8484-0161-1', 'School of Pharmacy, Devi Ahilya Vishwavidyalaya, Indore', 'LAP Lambert Academic Publishing, Germany ', '1542300539002'),
('sopharma', 'Dr. Nidhi Dubey', 'Microspheres -A novel approach to drug delivery for anticancer drug ', 'NA', 'NA', 'NA', 'NA', '2014', 'July 14 - June 15', '978-3-659-21120-1', 'School of Pharmacy, Devi Ahilya Vishwavidyalaya, Indore', 'LAP Lambert Academic Publishing, Germany ', '1542300584921'),
('sopharma', 'Dr. Nidhi Dubey', 'Quality parameters for herbal drug formulations - current perspective ', 'NA', 'NA', 'NA', 'NA', '2014', 'July 14 - June 15', '978-3-659-55122-2', 'School of Pharmacy, Devi Ahilya Vishwavidyalaya, Indore', 'LAP Lambert Academic Publishing, Germany ', '1542300628252'),
('sopharma', 'Dr. Nidhi Dubey', 'Validation of HPLC Method in Sethis HPLC: High Performance Liquid Chromatography: Quantitative Analysis of Pharmaceutical formulation', 'NA', 'NA', 'NA', 'NA', '2015', 'July 15 - June 16', '9788123926537', 'School of Pharmacy, Devi Ahilya Vishwavidyalaya, Indore', 'CBS publishers and distributors, New Delhi', '1542300688898'),
('iipsdavv', 'Â Ms Kirti Vijayvargia', 'In Pioneer Journal of IT and Management,10(1),', ' Stepping towards e-Governance through Enhanced File Tracking System: A Functional Model using Integrated Support of ICT.', 'In Pioneer Journal of IT and Management,10(1),', '18th National Conference Sponsored by UGC On Mapping for Excellence: Challenges Ahead (Management).', 'Â National', '2014', 'Feb 14 - June 14', 'Â ISSN-0974-8954', 'IIPS,DAVV', '.In Pioneer Journal of IT and Management', '1542448498642'),
('iipsdavv', 'Dr. Anshu Bhati', 'nil', 'A Systematic Literature Review to Study Influence of Socio-Economic Factors on Women Entrepreneurship', ' 1st International Conference on Dynamism of Global Era and changing Global Practices', '1st International Conference on Dynamism of Global Era and changing Global Practices', 'International', '2016', 'July 15 - June 16', 'nil', 'IIPS DAVV', 'Acropolis Institute of Management Studies and Research', '1542451576453'),
('iipsdavv', 'Dr. Anshu Bhati', 'nil', 'A Study of Radio as a Societal Development Tool Amongst Youth in India presented', ' IInd International Conference on Envisioning 2030 â€“ The Path Ahead Globally', ' IInd International Conference on Envisioning 2030 â€“ The Path Ahead Globally', 'International', '2014', 'July 14 - June 15', 'nil', 'IIPS DAVV', ' Maharaja Ranjit Singh Group of Institutions.', '1542452768170'),
('emrcdavv', 'Patidar, N. and Singh, A.K.', 'Transformation in Business Governance', 'Awareness Study of Open Course Ware Amongst Students of Higher Learning Institutions', 'Paradigm Shift in Innovative Business Management', '5th International Conference 2016', 'International', '2017', 'July 16 - June 17', '978-93-5213-495-3', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'Shroff Publishers and Distributors Pvt. Ltd., Mumbai', '1541241377334'),
('emrcdavv', 'Mourya, R. K. and Singh, A.K.', 'Transformation in Business Governance', 'A Study of Factors Associated with Relevance of Educational Television Programs Amongst Youth in New Media Age', 'Paradigm Shift in Innovative Business Management', '5th International Conference 2016', 'International', '2017', 'July 16 - June 17', '978-93-5213-495-3', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'Shroff Publishers and Distributors Pvt. Ltd., Mumbai', '1542438730406'),
('emrcdavv', 'Engle, L., Patidar N. and Singh, A.K.', 'Innovative Business Management â€“ A Contemporary Approach', 'Comparison of Content and Management Executive in terms of Perception towards Knowledge Management', 'Paradigm Shift in Innovative Business Management', '3rd International Conference', 'International', '2015', 'July 14 - June 15', '13 978-93-5110-105-5', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'Shroff Publishers and Distributors Pvt. Ltd., Mumbai', '1542438904620'),
('emrcdavv', 'Patidar N., Engle, L. and Singh, A.K.', 'Innovative Business Management â€“ A Contemporary Approach', 'Perception of Internet Users towards Public Relations Efforts by Corporate Houses through Social Media', 'Paradigm Shift in Innovative Business Management', '3rd International Conference', 'International', '2015', 'July 14 - June 15', '13 978-93-5110-105-5', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'Shroff Publishers and Distributors Pvt. Ltd., Mumbai', '1542439752211'),
('emrcdavv', 'Jain, R. and Singh, A.K.', 'Innovative Strategies in Transitional Economy', 'Exploring the E-Learning Potential', 'Paradigm Shift in Innovative Business Management', '5th International Conference 2016', 'International', '2017', 'July 16 - June 17', '978-93-5213-493-9', 'EDUCATION MULTIMEDIA RESEARCH CENTRE', 'Shroff Publishers and Distributors Pvt. Ltd., Mumbai', '1542456104952');

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
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_4_7`
--

INSERT INTO `t3_4_7` (`Username`, `PTitle`, `Name`, `JTitle`, `Year`, `indx`, `inst`, `cit`, `id_time`) VALUES
('admin3', 'tdgtdg', 'gdgdd', 'fhfhfhfdd', 'July 14 - June 15', 'hfjhdfhfdd', 'hfddfhdhdf', 4543, '2147483647'),
('soex', 'Cogent Engineering', 'Basant Tiwari, Abhay Kumar', 'International journal of electronic healthcare', 'July 14 - June 15', 'i10', 'School of Electronics, Devi Ahilya University, Indore', 10, '2147483647'),
('soex', 'Speech pitch shifting using complex continuous wavelet transform', 'Abhay Kumar, Renuka Jain', 'India Conference, 2006 Annual IEEE', 'July 15 - June 16', 'h-6', 'School of Electronics, Devi Ahilya University, Indore', 7, '2147483647'),
('soex', 'Design of multimodal biometrics system based on feature level fusion Authors', 'SC Joshi, Abhay Kumar', 'Intelligent Systems and Control (ISCO), 2016 10th International Conference on', 'July 15 - June 16', 'h-6', 'School of Electronics, Devi Ahilya University, Indore', 6, '2147483647'),
('soex', 'Designing sparse sensing matrix for compressive sensing to reconstruct high resolution medical images', 'V Tiwari, PP Bansod, A Kumar', 'Cogent Engineering', 'July 14 - June 15', 'i10', 'School of Electronics, Devi Ahilya University, Indore', 15, '2147483647'),
('admin3', 'fjdfkjhk', 'u9', 'kjhkhk', 'Feb 14 - June 14', 'r98e0r8', '098098', 980980, '1542263604194');

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
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_4_8`
--

INSERT INTO `t3_4_8` (`Username`, `PTitle`, `Name`, `JTitle`, `Year`, `indx`, `cit`, `inst`, `id_time`) VALUES
('admin3', 'kfdhjfh', '8797', '9798hk', 'July 14 - June 15', '90790', 9798798, '8979', '1542263736617');

-- --------------------------------------------------------

--
-- Table structure for table `t3_5_1`
--

CREATE TABLE `t3_5_1` (
  `Username` varchar(200) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_5_1`
--

INSERT INTO `t3_5_1` (`Username`, `Link`, `id_time`) VALUES
('admin3', 'google', '1540961803120'),
('admin3', 'facebook', '1540961785273'),
('emrcdavv', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_16-03-5600Sample Document.pdf', '1541241453519'),
('sostat', 'Noi', '1542188715481'),
('chemsc', ' Consultancy Policy', '1542262754005'),
('iipsdavv', 'NIL', '1542271302469');

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

--
-- Dumping data for table `t3_5_2`
--

INSERT INTO `t3_5_2` (`Username`, `Name`, `Project`, `Details`, `Year`, `Revenue`, `id_time`) VALUES
('admin3', 'dkfdjffjdk', 'fdhgkfhgjfdk', 'kdfhdkjhfdjkgf', 'July 15 - June 16', 989, '1540926017019'),
('emrcdavv', '-', '-', '-', 'Feb 14 - June 14', 125845654, '1541241462614'),
('sostat', 'nil', 'nil', 'nil', 'Feb 14 - June 14', 0, '1542188745265'),
('chemsc', 'Nil', 'Nil', 'Nil', 'July 17 - June 18', 0, '1542262813340'),
('iipsdavv', 'NIL', 'NIL', 'NIL', 'Feb 14 - June 14', 0, '1542271340008');

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

--
-- Dumping data for table `t3_5_3`
--

INSERT INTO `t3_5_3` (`Username`, `Name`, `Title`, `Details`, `Year`, `Revenue`, `Trainees`, `id_time`) VALUES
('admin3', 'dshkj', 'kjhkjdhfk', '493849', 'July 14 - June 15', 787, 8789, '1540925999130'),
('emrcdavv', '-', '-', '-', 'Feb 14 - June 14', 12123123, 10, '1541241486390'),
('sostat', 'nil', 'nil', 'nil', 'Feb 14 - June 14', 0, 0, '1542188816339'),
('chemsc', 'Nil', 'Nil', 'Nil', 'July 17 - June 18', 0, 0, '1542262908115'),
('iipsdavv', 'NIL', 'NIL', 'NIL', 'Feb 14 - June 14', 0, 0, '1542271373103');

-- --------------------------------------------------------

--
-- Table structure for table `t3_6_1`
--

CREATE TABLE `t3_6_1` (
  `Username` varchar(100) NOT NULL,
  `descr` varchar(2500) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_6_1`
--

INSERT INTO `t3_6_1` (`Username`, `descr`, `Link`, `id_time`) VALUES
('admin3', 'google         fetch_rows_331_link(); \' \"         fetch_rows_331_link();', 'google         fetch_rows_331_link(); \' \"         fetch_rows_331_link();', 'TA3_6_1'),
('emrcdavv', 'Descriptive Text Here', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_16-03-5600Sample Document.pdf', 'TA3_6_1'),
('saif', '21639836957665&^%&^%^*^*^86%^&%*%*', 'sjdk', 'TA3_6_1');

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
('admin3', 'dfdskjfd', 'kdhfkdshfk', 'kjdfhksdjsdk', '48394', 'July 14 - June 15', '1540925852674'),
('emrcdavv', 'Tiranga Yatra', 'Certificate of Appreciation', 'IDA- Indore Development Authority', '2018', 'July 18 - June 19', '1541241530127'),
('emrcdavv', 'Voter Awareness Campaign', 'Certificate of Appreciation', 'District Administration', '2018', 'July 18 - June 19', '1541241601823'),
('sostat', 'Research', 'recognition', 'mp govt', '2017', 'July 17 - June 18', '1542188898740'),
('chemsc', 'Nil', 'Nil', 'Nil', 'Nil', 'July 17 - June 18', '1542263002955'),
('sees', '0', '0', '0', '0', 'Feb 14 - June 14', '1542439484130'),
('sees', '0', '0', '0', '0', 'July 14 - June 15', '1542439522710'),
('sees', '0', '0', '0', '0', 'July 15 - June 16', '1542439527492'),
('sees', '0', '0', '0', '0', 'July 16 - June 17', '1542439528386'),
('sees', '0', '0', '0', '0', 'July 17 - June 18', '1542439529715'),
('sees', '0', '0', '0', '0', 'July 18 - June 19', '1542439571666');

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
('admin3', 'lfsdgfsdkl', 'klhdklffdflk', '459', 'July 14 - June 15', 4384, 945849, '1540925867514'),
('emrcdavv', 'Tiranga Yatra', 'IDA', '2018', 'July 18 - June 19', 5, 80, '1541241539294'),
('emrcdavv', 'Voter Awareness Campaign', 'District Administration', '2018', 'July 18 - June 19', 5, 250, '1541241767263'),
('biochem', 'Health Check up', 'DAVV, Indore', '2018', 'July 17 - June 18', 2, 16, '1542064002452'),
('biochem', 'Meditation Workshop', 'Heartfulness Institute, indore', '2018', 'July 17 - June 18', 2, 25, '1542064102526'),
('biochem', 'Tiranga Abhiyan', 'NSS, DAVV, Indore', '2018', 'July 18 - June 19', 2, 10, '1542064197013'),
('sostat', 'nil', 'nil', '00', 'Feb 14 - June 14', 0, 0, '1542189036860'),
('sees', '0', '0', '0', 'Feb 14 - June 14', 0, 0, '1542350153129'),
('sees', '0', '0', '0', 'July 14 - June 15', 0, 0, '1542350165611'),
('sees', '0', '0', '0', 'July 15 - June 16', 0, 0, '1542350184281'),
('sees', '0', '0', '0', 'July 16 - June 17', 0, 0, '1542350195677'),
('sees', '0', '0', '0', 'July 17 - June 18', 0, 0, '1542350211612'),
('sees', '0', '0', '0', 'July 18 - June 19', 0, 0, '1542350226730'),
('socsit', 'Campus Cleaning', 'NSS', '2016', 'July 16 - June 17', 2, 18, '1542457140154'),
('socsit', 'Yoga', 'NSS', '2016', 'July 16 - June 17', 5, 35, '1542457197992'),
('socsit', 'Plantation', 'NSS', '2016', 'July 16 - June 17', 10, 40, '1542457198842'),
('socsit', 'Polythene Prohibition', 'NSS', '2016', 'July 16 - June 17', 4, 20, '1542457199439'),
('socsit', 'Lecture', 'NSS', '2016', 'July 16 - June 17', 10, 90, '1542457200091'),
('socsit', 'Traffic Control/ Women Literacy', 'NSS', '2016', 'July 16 - June 17', 4, 30, '1542457201773'),
('socsit', 'Yoga and Meditation', 'NSS', '2016', 'July 16 - June 17', 4, 20, '1542457202400'),
('socsit', 'Cashless Transaction Awareness', 'NSS', '2016', 'July 16 - June 17', 5, 50, '1542457203024'),
('socsit', 'Literacy Mission', 'NSS', '2016', 'July 16 - June 17', 10, 25, '1542457203675'),
('socsit', 'Samarpan (Cloths for poor Children)', 'NSS', '2017', 'July 17 - June 18', 2, 30, '1542457465069'),
('socsit', 'Digital Dakiya, Digital India', 'NSS', '2017', 'July 17 - June 18', 5, 25, '1542457466351'),
('socsit', 'Health Camp, Blood Donation', 'NSS', '2017', 'July 17 - June 18', 15, 50, '1542457467060'),
('socsit', 'Campus Cleaning', 'NSS', '2017', 'July 17 - June 18', 2, 18, '1542457469843'),
('socsit', 'Plantation', 'NSS', '2017', 'July 17 - June 18', 10, 40, '1542457470856'),
('socsit', 'Swachcha Bharat Mission', 'NSS', '2017', 'July 17 - June 18', 5, 70, '1542457514219'),
('socsit', 'NSS Day', 'NSS', '2017', 'July 17 - June 18', 4, 80, '1542457515428'),
('socsit', 'Orientation Programme', 'NSS', '2017', 'July 17 - June 18', 5, 80, '1542457516282'),
('socsit', 'Youth Parliament', 'NSS', '2017', 'July 17 - June 18', 0, 50, '1542457518333'),
('socsit', 'Digital India Workshop', 'NSS', '2017', 'July 17 - June 18', 8, 50, '1542457546625'),
('socsit', 'Yoga', 'NSS', '2017', 'July 17 - June 18', 5, 35, '1542457547412'),
('socsit', 'Vivekanand Week Competition', 'NSS', '2018', 'July 17 - June 18', 0, 20, '1542457549116'),
('socsit', 'Blood Donation/HIV awareness', 'NSS', '2018', 'July 17 - June 18', 10, 60, '1542457551429');

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
('admin3', 'dfsfkjd', 'khdfkjdhfdkjh', 'kjhfdkjfhdkj', 'fldkjfdlkfjdlk', 'July 15 - June 16', 58349549, 743974, '1540925917256'),
('emrcdavv', '-', '-', '-', '2018', 'July 17 - June 18', 5, 225, '1541241835087'),
('soex', 'Run For Vote Marathon', 'Indore Collectorate ', 'Run For Vote Marathon', '2018', 'July 18 - June 19', 3, 5, '1541949890650'),
('soex', 'Mera Tiranga Mera Abhimaan ', 'DAVV, Loknirman Manch, IDA', 'Tiranga Yatra', '2018', 'July 18 - June 19', 1, 18, '1541419090973'),
('biochem', 'Swachha Bharat', 'DAVV, Indore', 'Swachha Bharat Abhiyan', '2015', 'July 15 - June 16', 2, 15, '1542064417326'),
('biochem', 'Swachha Bharat', 'DAVV, Indore', 'Swachha Bharat Abhiyan', '2016', 'July 16 - June 17', 3, 30, '1542064491140'),
('biochem', 'Swachha Bharat', 'DAVV, Indore', 'Swachha Bharat Abhiyan', '2017', 'July 17 - June 18', 3, 15, '1542064494097'),
('biochem', 'Swachha Bharat', 'DAVV, Indore', 'Swachha Bharat Abhiyan', '2018', 'July 18 - June 19', 3, 15, '1542064495434'),
('chemsc', 'Training to the girls ', 'NGO in Collaboration with DAVV', 'Smart Girl ', '2018', 'July 17 - June 18', 1, 0, '1542263240893'),
('chemsc', 'Cleanilness', 'University', 'Swachhta Abhiyan ', '2017', 'July 17 - June 18', 6, 102, '1542263369254'),
('socsit', 'Swachcha Bharat Abhiyan', 'NSS', 'Swachch Bharat ', '2017,2018', 'July 17 - June 18', 5, 50, '1542457907331'),
('socsit', 'Blood Donation, HIV awareness', 'NSS', 'AIDS Awareness', '2018', 'July 17 - June 18', 10, 60, '1542457908433');

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_7_1`
--

INSERT INTO `t3_7_1` (`Username`, `Title`, `Agency`, `Name`, `Source`, `Period`, `Year`, `Duration`, `Nature`, `Link`, `id_time`) VALUES
('admin3', 'a', 'b', 'c', 'b', '32', 'July 15 - June 16', 6, 'h', 'google \'  &h', '1540823629251'),
('emrcdavv', '-', '-', '-', '-', '0', 'July 18 - June 19', 0, '-', 'http://uid.dauniv.ac.in/NAC/profile/docs/03-11-2018_16-14-5100Sample Document.pdf', '1541241965599'),
('biochem', 'one-to-one collaboration', 'NBRI, Lucknow, Dr P.K. Singh,  Principle Scientist, Mo No 9415269300', 'Sharad Saurabh', 'None', '60', 'Feb 14 - June 14', 2010, 'Student Ph.D.', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_15-32-17Sharad Collab.jpg', '1542189147721'),
('biochem', 'one-to-one collaboration', 'NMR Research Center, INMAS DRDO, New Delhi Dr Poonam Rana, Scientist C', 'Ms Ritu Tyagi', 'None', '72', 'Feb 14 - June 14', 2009, 'Student Ph.D.', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_14-15-48Ritu Collab.jpg', '1542183090466'),
('biochem', 'one-to-one collaboration', 'School of Life Sciences, JNU, New Delhi Dr Neera Bhalla Sareen, Professor', 'Ms Vartika Sinha', 'None', '60', 'Feb 14 - June 14', 2009, 'Student Ph.D.', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_14-16-10Vartika Collab.jpg', '1542184237925'),
('biochem', 'one-to-one collaboration', 'RRCAT, Indore, Dr Ravindra Makde, Principal Scientist, Mobile No 9826397627', 'Mr Venkat N Are', 'None', '36', 'July 14 - June 15', 2015, 'Student Ph.D.', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_16-56-52RG Collab 2.jpg', '1542107591611'),
('biochem', 'one-to-one collaboration', 'NBRI, Lucknow, Dr V.A. Sane, Scientist ', 'Ms Samatha Gunapati', 'None', '48', 'Feb 14 - June 14', 2011, 'Student Ph.D.', 'http://uid.dauniv.ac.in/NAC/profile/docs/13-11-2018_16-49-29RG Collab1.jpg', '1542107152777'),
('biochem', 'one-to-one collaboration', 'IARI, Regional Station, Indore, Dr Sai Prasad,  Director, Mobile No 9425957920', 'Prakash Maviya', 'None', '72', 'Feb 14 - June 14', 2010, 'Student Ph.D.', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_15-36-19Prakash Collab.jpg', '1542189369941'),
('biochem', 'one-to-one collaboration', 'DSR, Indore, Dr Anita Rani, Principal Scientist, Mobile No 9329682779', 'Vaishali Mourya', 'None', '72', 'Feb 14 - June 14', 2010, 'Student Ph.D.', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_15-36-42Vaishali Collab.jpg', '1542189378905'),
('socsit', 'Ph.D', 'University of Phayao, Thailand', 'Mr. Phonrob Sawasdee', 'NA', '60', 'July 17 - June 18', 2018, 'PhD', 'http://www.dauniv.ac.in/DET18/FinalResult-Ph.D.-4.1611208.pdf', '1542458055851'),
('socsit', 'Ph.D', 'University of Phayao, Thailand', 'Mrs. Nichapa Yodmuangchai', 'NA', '60', 'July 17 - June 18', 2018, 'PhD', 'http://www.dauniv.ac.in/DET18/FinalResult-Ph.D.-4.1611208.pdf', '1542458056652');

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t3_7_2`
--

INSERT INTO `t3_7_2` (`Username`, `Title`, `Agency`, `Year`, `Durfrom`, `Durto`, `Nature`, `Name`, `Link`, `id_time`) VALUES
('admin3', 'dkjsdn', 'jnkdnff', 'July 14 - June 15', '2018-12-29', '2018-12-31', 'fdfjd', 'fdkjnfk', 'http://localhost/PROJECTS/univ_data_gathering/NAC/profile/docs/29-10-2018_20-15-47OPERATING SYSTEM ROUND -1 FIRDAY 2019 . - Gate @ Zeal.pdf', '1540823996524'),
('saif', 'saif ', 'hkdjsa;', 'July 14 - June 15', '2016-11-30', '2018-11-30', 'basic', 'akjs', 'googke', '1540998089208'),
('biochem', 'M.Sc. Project work ', 'As per linked document', 'July 15 - June 16', '2016-01-01', '2016-06-30', 'Dissertation', 'As per linked document ', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-43-59MSc project works - 2016.doc', '1542193333115'),
('biochem', 'M.Sc. Project work ', 'As per linked document', 'July 14 - June 15', '2015-01-01', '2015-06-30', 'Dissertation ', 'As per linked document ', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-38-38MSc project works - 2015.doc', '1542192957033'),
('biochem', 'M.Sc. Project work ', 'As per linked document', 'Feb 14 - June 14', '2014-01-01', '2014-06-30', 'Dissertation ', 'As per linked document ', 'http://uid.dauniv.ac.in/NAC/profile/docs/14-11-2018_16-32-19MSc project work -2014.doc', '1542192383499');

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
('admin3', 'lkgfdkglhkfl', 'lkdjfkglfddljd', '2014', 'July 14 - June 15', 9454, '58497', 98789, '1540925947574'),
('emrcdavv', 'Digital Lounge - CEC', '-', '2007', 'Feb 14 - June 14', 120, '--', 6, '1541242093447'),
('emrcdavv', 'Gyanwani - IGNOU', '-', '2006', 'Feb 14 - June 14', 120, '--', 6, '1541242073943'),
('emrcdavv', 'CEC-UGC', 'UGC', '2014', 'Feb 14 - June 14', 480, '-', 6, '1541762007692'),
('soex', 'Scientech, Indore', 'Scientech Indore', '2018', 'July 18 - June 19', 60, 'Internship of Students, Training Support, Reseach work', 6, '1541418660519'),
('soex', 'MP Police Reforms', 'MP Police Reforms', '2018', 'July 18 - June 19', 12, '12 Live projects of MP Police Reforms are assigned to students under the supervision of faculty members of University', 50, '1541949198761'),
('chemsc', 'PG Tech Research Institute ', 'School of Chemical Sciences', '2017', 'July 17 - June 18', 36, 'Training ', 26, '1542269600221'),
('ietdavv', 'Raja Ramanna Centre for Advanced Technology (RRCAT), Indore', 'IET DAVV Indore', '2014', 'July 14 - June 15', 60, 'Research', 6, '1542456010851'),
('ietdavv', 'HireMee, A unit of KAAM Service Pvt. Ltd. Banglore', 'IET DAVV Indore', '2018', 'July 17 - June 18', 60, 'Employability', 5, '1542456100854'),
('ietdavv', 'Techracers', 'IET DAVV Indore', '2018', 'July 17 - June 18', 60, 'Research', 5, '1542456153897');

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_1`
--

CREATE TABLE `t4_1_1` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_1_1`
--

INSERT INTO `t4_1_1` (`Username`, `Description`, `File_name`, `link`) VALUES
('admin3', '%5C%22+%5C%27+%3C+%3E+%3F+%25+%24+%23+%26+%2A', '', 'dnfkldn+%5C%22+%5C%27+%3C+%3E+%3F+%25+%24+%23+%26+%2A'),
('socsit', 'The+institution+has+adequate+facilities+for+teaching+-+learning.+There+are+9+classrooms+where+two+classrooms+are+ICT+enabled.+Institute+also+have+ICT+enabled+two+seminar+halls+and+one+faculty+meeting+room.+This+facility+is+also+used+for+teaching+and+learning+whenever+required.The+institute+has+two+seminar+halls+with+capacity+of+250+and+110+people+respectively.+The+halls+are+equipped+with+upto+date+LCD+Projectors+and+audio+system.+These+halls+are+at+the+disposal+for+students+of+various+institutes', '', 'www.scs.dauniv.ac.in'),
('chemsc', 'The+school+has+adequate+number+of+facilities+for+teaching-learning+viz.%2C+class+rooms%2C+seminar+hall%2C+conference+room%2C+laboratories%2C+computer+lab+and+library+which+are+extensively+utilized+by+the+students+and+research+scholars.+Classrooms+are+equipped+with+LCD+projectors%2C+computers+and+are+connected+with+campus+network.+Entire+campus+is+net-worked+though+optic+fibre+cable+and+also+by+Wi-Fi.School+has+well+equipped+laboratories+to+cater+to+the+needs+of+practical+course+work+of+the+stude', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t4_1_2`
--

CREATE TABLE `t4_1_2` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_1_2`
--

INSERT INTO `t4_1_2` (`Username`, `Description`, `File_name`, `Link`) VALUES
('admin3', 'FB+%5C%22+%5C%27+%3C+%3E+%3F+%25+%24+%23+%26+%2A', '', '%5C%22+%5C%27+%3C+%3E+%3F+%25+%24+%23+%26+%2A'),
('admin4', 'google', '', 'list'),
('socsit', 'The+institute+houses+a+table+tennis+facility+to+students.+There+is+a+sports+club+managed+by+the+stud', '', 'www.scs.dauniv.ac.in'),
('chemsc', 'School+is+availing+the+facilities+provided+by+School+of+Physical+Education+and+School+of+Yoga%2C+whi', '', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_1_3`
--

INSERT INTO `t4_1_3` (`Username`, `totalc`, `totals`, `lcd`, `lan`, `semi`) VALUES
('emrcdavv', 9, 1, 9, 9, 1),
('Asc', 2, 1, 2, 3, 1),
('sopharma', 5, 1, 5, 5, 1),
('chemsc', 3, 1, 3, 3, 1),
('socsit', 12, 3, 1, 12, 3);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_1_4`
--

INSERT INTO `t4_1_4` (`Username`, `budgeta`, `budgetu`, `yeara`, `id_time`) VALUES
('socsit', 2500000, 96298, 'Feb 14 - June 14', 'id1542448609457'),
('socsit', 3000000, 201196, 'July 14 - June 15', 'id1542448653140'),
('socsit', 2000000, 325000, 'July 15 - June 16', 'id1542448654645'),
('socsit', 2130000, 106000, 'July 16 - June 17', 'id1542448660918'),
('socsit', 2600000, 45500, 'July 17 - June 18', 'id1542448665503');

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

--
-- Dumping data for table `t4_2_1`
--

INSERT INTO `t4_2_1` (`Username`, `nameil`, `nature`, `version`, `yearat`, `id_time`) VALUES
('chemsc', 'NA', 'NA', 'NA', 'July 17 - June 18', 'idid1542296783082'),
('admin4', 'fkjdhfk', 'khfdkhfk', 'kfhdkjfh', 'July 14 - June 15', 'id1542372442543'),
('socsit', 'Software for University Libraries (SOUL)', 'Partially', '2.0', 'Feb 14 - June 14', 'id1542448761243');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_2_2`
--

INSERT INTO `t4_2_2` (`Username`, `nameb`, `namep`, `nameau`, `numc`, `yearp`, `id_time`) VALUES
('Chemsc', 'Nil', 'Nil', 'Nil', 0, 'Feb 14 - June 14', 'id1542296859120'),
('socsit', 'Nil', 'Nil', 'Nil', 0, 'Feb 14 - June 14', 'id1542448831260');

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
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL,
  `choice_423` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_2_3`
--

INSERT INTO `t4_2_3` (`Username`, `mem`, `sub`, `name`, `eres`, `validityf`, `validityt`, `report`, `access`, `Link`, `id_time`, `choice_423`) VALUES
('admin3', 'member', 'subdslndlsnd', 'ldknslknsl', '9879', 98789, 98, '808908khkh', 'noli', 'link 423', 'ididididid1542086990385', 'Any  2 of the above'),
('admin3', 'jshkdh', 'kjdhkshfk', 'kfjdhkjdhkdh', '786', 1973, 76, '483954', 'jdjljls', 'idjlsdij', 'id1542087186548', 'Any  2 of the above'),
('socsit', 'Nil', 'Nil', 'Nil', '0', 0, 0, 'Nil', 'No', 'Nil', 'id1542448896265', 'None of the above');

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

--
-- Dumping data for table `t4_2_4`
--

INSERT INTO `t4_2_4` (`Username`, `books`, `journals`, `year`, `budget`, `subscriptions`, `id_time`) VALUES
('socsit', '575000', '0', 'Feb 14 - June 14', '600000', '0', 'id1542449123808'),
('socsit', '575000', '0', 'July 14 - June 15', '425000', '0', 'id1542449146308'),
('socsit', '220000', '0', 'July 15 - June 16', '325000', '0', 'id1542449150156'),
('socsit', '0', '0', 'July 16 - June 17', '300000', '0', 'id1542449154346'),
('socsit', '0', '0', 'July 17 - June 18', '500000', '0', 'id1542449159299');

-- --------------------------------------------------------

--
-- Table structure for table `t4_2_5`
--

CREATE TABLE `t4_2_5` (
  `Username` varchar(100) NOT NULL,
  `ereso` varchar(100) NOT NULL,
  `det` varchar(100) NOT NULL,
  `raccess` varchar(100) NOT NULL,
  `Link` varchar(256) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_2_5`
--

INSERT INTO `t4_2_5` (`Username`, `ereso`, `det`, `raccess`, `Link`, `id_time`) VALUES
('admin3', 'f-resource', 'facebook', 'no', 'link 4250', 'id1542086963922'),
('admin3', 'e-resource', 'google', 'yes', 'link 425', 'idid1542086943118'),
('socsit', 'Nil', 'Nil', 'No', 'Nil', '1542449304358');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_2_6`
--

INSERT INTO `t4_2_6` (`Username`, `last`, `method`, `users`, `teachers`, `students`) VALUES
('socsit', '150', 'Average', 0, 4, 150);

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
  `Link` varchar(256) NOT NULL,
  `choice_427` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_2_7`
--

INSERT INTO `t4_2_7` (`Username`, `teacher`, `module`, `platform`, `datel`, `Link`, `choice_427`, `id_time`) VALUES
('admin3', 'fdlfj', 'ljflkdjflkj', 'lkjdlfjldk', 'July 14 - June 15', 'klsklfkld', 'Any 2 of the above', 'idididid1542042828196'),
('chemsc', 'Nil', 'Nil', 'Nil', 'Feb 14 - June 14', 'Nil', 'None of the above', 'id1542437403866'),
('socsit', 'Nil', 'Nil', 'Nil', 'Feb 14 - June 14', 'Nil', 'None of the above', 'id1542449478041');

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_1`
--

CREATE TABLE `t4_3_1` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(1000) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_3_1`
--

INSERT INTO `t4_3_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('admin3', 'POLICY+%5C%22+%5C%27+%3C+%3E+%3F+%25+%24+%23+%26+%2A', '', 'MAKER+%5C%22+%5C%27+%3C+%3E+%3F+%25+%24+%23+%26+%2A'),
('socsit', 'Institute+frequently+updates+its+IT+facilities+with+state+of+the+art+printers%2C+switches%2C+desktop+computers%2C+LCD+projectors+and+so+on.+Institute+furnishes+its+students+to+use+internet+provided+by+the+central+facility+of+the+university.+Students+have+the+access+to+internet+through+computer+laboratories+or+Wi-Fi+connectivity.+Student+can+access+Wi-Fi+throughout+the+premise+as+various+hotspots+are+installed+at+several+locations+around+the+campus.+Students+can+access+video+tutorials+as+well+as+lecture+notes+over+the+internet.+Classrooms+are+also+equipped+with+ICT+facilities+to+enable+efficient+student+teacher+interactions.+', '', 'www.scs.dauniv.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_2`
--

CREATE TABLE `t4_3_2` (
  `Username` varchar(100) NOT NULL,
  `numbers` int(100) NOT NULL,
  `numberc` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_3_2`
--

INSERT INTO `t4_3_2` (`Username`, `numbers`, `numberc`) VALUES
('socsit', 575, 272),
('chemsc', 102, 22);

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_3`
--

CREATE TABLE `t4_3_3` (
  `Username` varchar(100) NOT NULL,
  `choice_433` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_3_3`
--

INSERT INTO `t4_3_3` (`Username`, `choice_433`) VALUES
('Emrcdavv', 'greater than or equal to 1 GBPS'),
('socsit', 'less than 50 MBPS'),
('chemsc', '500 MBPS - 1 GBPS');

-- --------------------------------------------------------

--
-- Table structure for table `t4_3_4`
--

CREATE TABLE `t4_3_4` (
  `Username` varchar(100) NOT NULL,
  `namee` varchar(100) NOT NULL,
  `linkm` varchar(100) NOT NULL,
  `id_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_3_4`
--

INSERT INTO `t4_3_4` (`Username`, `namee`, `linkm`, `id_time`) VALUES
('socsit', 'Educational Multimedia Research Center, DAVV', 'http://www.emrcdavv.edu.in', 'id1542449623890'),
('chemsc', 'Media centre', ' At EMRC', 'id1542449523360'),
('chemsc', 'Recording facility', 'At EMRC', 'id1542449553149');

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

--
-- Dumping data for table `t4_4_1`
--

INSERT INTO `t4_4_1` (`Username`, `Year`, `ass_budget_academic`, `expenditure_academic`, `ass_budget_physical`, `expenditure_physical`, `id_time`) VALUES
('socsit', 'Feb 14 - June 14', '1400000', '1094800', '2500000', '96298', 'id1542449668475'),
('socsit', 'July 14 - June 15', '1094000', '1201150', '3000000', '201194', 'id1542449671960'),
('socsit', 'July 15 - June 16', '3375000', '2840800', '2000000', '325000', 'id1542449674429'),
('socsit', 'July 16 - June 17', '2975000', '584651', '2130000', '192736', 'id1542449676713'),
('socsit', 'July 17 - June 18', '3650000', '405384', '3100000', '145500', 'id1542449690455');

-- --------------------------------------------------------

--
-- Table structure for table `t4_4_2`
--

CREATE TABLE `t4_4_2` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4_4_2`
--

INSERT INTO `t4_4_2` (`Username`, `Description`, `File_name`, `Link`) VALUES
('admin3', 'DESC+%5C%22+%5C%27+%3C+%3E+%3F+%25+%24+%23+%26+%2A', '', 'LAST+%5C%22+%5C%27+%3C+%3E+%3F+%25+%24+%23+%26+%2A'),
('socsit', 'Students+can+access+the+laboratory+as+per+assigned+in+the+academic+time+table+while+all+students+can+access+library+any+time+of+the+day.+Whenever+required+students+can+use+seminar+halls+for+performing+any+events+and+workshops.+For+sports+related+events+students+must+take+permission+from+School+of+Physical+Education+to+access+the+facilities.Maintaining+these+facilities+undergo+various+procedures+as+per+the+rules+and+regulations+of+the+university.', '', 'www.scs.dauniv.ac.in'),
('', 'The+department%2F+University+has+a+well+mechanized+system+and+procedures+for+maintenance+and+utilization+of+infrastructural+facilities.+An+overview+of+all+such+activities+is+as+follows%3A%95There+is+a+dedicated+engineering+section+in+the+University+which+overseas+periodically+maintenance+of+building+infrastructure.+Adequate+budgetary+provisions+are+made+for+such+maintenance.%95The+electricity+related+maintenance+is+carried+out+by+a+dedicated+electrician+appointed+by+the+University+and+supervised+by+the+engineering+section.%95There+is+committed+IT+centre+maintaining+very+diligently+all+the+network%2F+website+related+issues.%95Computer+labs+are+maintained+by+in+house+technicians.+However+services+of+private+professionals+are+also+hired+upon+specific+requirements.%95Cleanliness+is+maintained+by+the+dedicated+staff+appointed+for+the+purpose.%95Maintenance+of+Laboratories+and+library+is+done+by+the+technical%2Fsupport+++staff+of+the+department', '', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t5_1_1`
--

INSERT INTO `t5_1_1` (`Username`, `Year`, `name_of_scheme`, `number_of_students_benefited_govt_scheme`, `id_time`) VALUES
('iqac', 'July 16 - June 17', 'hhlkhklh', 797, 'id1542696549298');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t5_1_2`
--

INSERT INTO `t5_1_2` (`Username`, `Year`, `name_of_scheme`, `number_of_student_benefited`, `id_time`) VALUES
('iqac', 'July 16 - June 17', 'gkjgjg', 6879, 'id1542696558749');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t5_1_3`
--

INSERT INTO `t5_1_3` (`Username`, `name_of_capability_enhancement_scheme`, `year_of_implementation`, `number_of_students_enrolled`, `name_of_agencies_involved`, `id_time`, `choice_513`) VALUES
('iqac', '79yhi', 'July 14 - June 15', 978797987, '87987', 'id1542696568209', 'Any 3 of the above');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t5_1_4`
--

INSERT INTO `t5_1_4` (`Username`, `Year`, `name_of_scheme`, `number_of_benefited_students_by_guidance_for_competitive_exam`, `number_of_benefited_students_by_career_counselling_activities`, `number_of_students_passed_in_competitive_exams`, `number_of_students_placed`, `id_time`) VALUES
('iqac', 'July 16 - June 17', 'khj', 97878, 997987, 7987, 789797, 'id1542696577967');

-- --------------------------------------------------------

--
-- Table structure for table `t5_1_5`
--

CREATE TABLE `t5_1_5` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `FIle_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t5_1_5`
--

INSERT INTO `t5_1_5` (`Username`, `Description`, `FIle_name`, `Link`) VALUES
('iqac', '%3Bdljsfjfdjfj', '', 'fjdkfjldjfd');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t5_1_6`
--

INSERT INTO `t5_1_6` (`Username`, `Year`, `number_of_grievances_appealed`, `number_of_grievances_redressed`, `number_of_days`, `id_time`) VALUES
('iqac', 'July 17 - June 18', 97897, 9778, 98, 'id1542696599753');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t5_2_1`
--

INSERT INTO `t5_2_1` (`Username`, `Year`, `program_graduated_from`, `prog_name`, `number_of_student_placed`, `name_of_employer_with_details`, `package_received`, `id_time`) VALUES
('socsit', 'Feb 14 - June 14', 'CS3A', 'Post Graduate Diploma in Computer Applications (PGDCA) 1yr', 2, 'abc', '3.2', 'idid1542451671227'),
('socsit', 'Feb 14 - June 14', 'CS4A', 'Bachelor of Computer Application - BCA (3yrs)/ BCA Hons. (4yrs)', 2, 'zxc', '3', 'idid1542452404860'),
('socsit', 'Feb 14 - June 14', 'CS5A', 'Master of Computer Applications - MCA (3yrs)/ MCA Lateral (2yrs)', 2, '2', '2', 'idid1542452413583'),
('socsit', 'July 14 - June 15', 'CS5B', 'Master of Science (Computer Science) 2yrs', 2, '2', '2', 'idid1542452414518'),
('socsit', 'July 14 - June 15', 'CS5C', 'Master of Scienceï¿½(Information Technology) 2yrs', 2, '2', '2', 'idid1542452415483'),
('socsit', 'July 14 - June 15', 'CS5D', 'Master of Business Administration (Computer Management) 2yrs', 2, '2', '2', 'idid1542452417375'),
('socsit', 'July 14 - June 15', 'CS7A', 'Master of Technology - M.Tech (Computer Science) 2yrs', 2, '2', '2', 'idid1542452418232'),
('socsit', 'July 17 - June 18', 'CS7B', 'Master of Technology - M.Tech (Information Architecture and Software Engineering) 2yrs', 2, '2', '2', 'idid1542452419030'),
('socsit', 'July 15 - June 16', 'CS7C', 'Master of Technology - M.Tech (Network Management and Information Security)ï¿½2yrs', 2, '2', '2', 'idid1542452419770'),
('socsit', 'July 14 - June 15', 'CS9Z', 'Doctorate in Philosophy - Ph.D (Computer Science)', 2, '2', '2', 'idid1542452420575');

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

--
-- Dumping data for table `t5_2_3`
--

INSERT INTO `t5_2_3` (`Username`, `Year`, `rollnumber`, `exam`, `id_time`) VALUES
('iqac', 'July 15 - June 16', '7978', 'GATE', 'id1542696627633');

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

--
-- Dumping data for table `t5_3_1`
--

INSERT INTO `t5_3_1` (`Username`, `Year`, `award_medal`, `national_international`, `sports_cultural`, `aadhar_student_id`, `name_of_student`, `id_time`) VALUES
('iqac', 'July 15 - June 16', 'khkjhj', 'hkjh', 'jkhk', 'hkj', 'hk', 'id1542696643613');

-- --------------------------------------------------------

--
-- Table structure for table `t5_3_2`
--

CREATE TABLE `t5_3_2` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t5_3_2`
--

INSERT INTO `t5_3_2` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', 'dslfndslkfjlfjdslfjds', '', 'lkjdljsdlfsdkjf');

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

--
-- Dumping data for table `t5_3_3`
--

INSERT INTO `t5_3_3` (`Username`, `Year`, `name_of_activity`, `id_time`) VALUES
('iqac', 'July 14 - June 15', 'd.,fmd.fms', 'id1542696655911');

-- --------------------------------------------------------

--
-- Table structure for table `t5_4_1`
--

CREATE TABLE `t5_4_1` (
  `Username` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `File_name` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t5_4_1`
--

INSERT INTO `t5_4_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', 'dljddkslfjskjkf', '', 'djflsfdjslkfls');

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

--
-- Dumping data for table `t5_4_2`
--

INSERT INTO `t5_4_2` (`Username`, `name_of_alums_alumni_association`, `aadar_pan`, `year_of_graduation`, `year_of_contribution`, `quantum_of_contribution`, `id_time`, `choice_542`) VALUES
('iqac', 'dskfsdkfjl', 'jljdkslfj', '2018', 'July 14 - June 15', '797009', 'id1542696671660', '20 Lakhs-50 Lakhs');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t5_4_3`
--

INSERT INTO `t5_4_3` (`Username`, `Year`, `date_fo_meetings`, `numbers_of_members_attended`, `total_number_of_alumni_enrolled`, `id_time`) VALUES
('iqac', 'July 14 - June 15', '275760-06-07', 6686, 76876, 'id1542696701136');

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

--
-- Dumping data for table `t6_1_1`
--

INSERT INTO `t6_1_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'okay+google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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

--
-- Dumping data for table `t6_1_2`
--

INSERT INTO `t6_1_2` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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

--
-- Dumping data for table `t6_2_1`
--

INSERT INTO `t6_2_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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

--
-- Dumping data for table `t6_2_2`
--

INSERT INTO `t6_2_2` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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

--
-- Dumping data for table `t6_2_3`
--

INSERT INTO `t6_2_3` (`Username`, `PD_C`, `PD_Y`, `PD_L`, `AD_C`, `AD_Y`, `AD_L`, `FA_C`, `FA_Y`, `FA_L`, `SA_C`, `SA_Y`, `SA_L`, `EX_C`, `EX_Y`, `EX_L`, `CHOICE`) VALUES
('iqac', 'fljdlf', 'July 14 - June 15', 'LINK1', 'dkshkdhd', 'July 14 - June 15', 'LINK2', 'dshdk', 'July 15 - June 16', 'LINK3', 'dskdks', 'July 14 - June 15', 'LINK4', 'dskbdkh', 'July 14 - June 15', 'LINK5', 'B Any 4 of the above');

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
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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
('iqac', 'July 15 - June 16', 'dhkhfhk', 'khkdjhfkj', 'kjhdksdhfk', 'kjhdkjhfh', 897, 'id1542696358393');

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

--
-- Dumping data for table `t6_3_3_1`
--

INSERT INTO `t6_3_3_1` (`Username`, `Year`, `Title_teaching`, `Date_from`, `Date_to`, `Participants_no_teach`, `id_time`) VALUES
('iqac', 'July 17 - June 18', 'khdksjh', '2017-10-29', '2016-10-30', 97987, 'idid1542696374984');

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
('iqac', 'July 16 - June 17', 'fkdkfkjd', '2016-10-30', '2016-10-29', 5, 'id1542696412142');

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
('iqac', 'July 15 - June 16', '78789', '798798789', '0007-08-09', '275760-09-08', 'id1542696444398');

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
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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
('iqac', 'July 15 - June 16', '87987', '97987979', '7879897', 'id1542696456887');

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
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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
('iqac', 'July 16 - June 17', 'jhkjhjh', '275760-08-07', '275760-06-07', 68686, 6968, 'id1542696465869');

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
('iqac', 'July 16 - June 17', 'iyuy', 'yiuyy', 'uyiyu', 'yu', 'iyiyi', 'id1542696479933');

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
('iqac', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs', '', 'google+my+name+%5C%22+%5C%27+%3E+%3C+%3F+php+%26+node.%2Fjs');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t7_1_1`
--

INSERT INTO `t7_1_1` (`Username`, `year`, `titlep`, `datef`, `datet`, `numm`, `numf`, `id_time`) VALUES
('iqac', 'July 15 - June 16', 'GOOGLE', '2018-12-31', '2018-12-31', 200, 304, 'id1542694920583');

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

--
-- Dumping data for table `t7_1_2`
--

INSERT INTO `t7_1_2` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', '%5C%22Insert+into+t7_1_2+Values%28%5C%27%5C%22.%24_SESSION%5B%5C%27username%5C%27%5D.%5C%22%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27desc%5C%27%5D%29.%5C%22%5C%27%2C%5C%27%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27link%5C%27%5D%29.%5C%22%5C%27%29%5C%22%3B', '', 'google+docs');

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

--
-- Dumping data for table `t7_1_3`
--

INSERT INTO `t7_1_3` (`Username`, `powerreq`, `powert`, `ren`, `reng`, `es`) VALUES
('iqac', '68768776876', '76786', '8767', '686', '786');

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

--
-- Dumping data for table `t7_1_4`
--

INSERT INTO `t7_1_4` (`Username`, `tl`, `led`, `ls`) VALUES
('iqac', '8787', '97897', '8977');

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

--
-- Dumping data for table `t7_1_5`
--

INSERT INTO `t7_1_5` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', '%5C%22Insert+into+t7_1_2+Values%28%5C%27%5C%22.%24_SESSION%5B%5C%27username%5C%27%5D.%5C%22%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27desc%5C%27%5D%29.%5C%22%5C%27%2C%5C%27%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27link%5C%27%5D%29.%5C%22%5C%27%29%5C%22%3B', '', '%5C%22Insert+into+t7_1_2+Values%28%5C%27%5C%22.%24_SESSION%5B%5C%27username%5C%27%5D.%5C%22%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27desc%5C%27%5D%29.%5C%22%5C%27%2C%5C%27%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27link%5C%27%5D%29.%5C%22%5C%27%29%5C%22%3B');

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

--
-- Dumping data for table `t7_1_6`
--

INSERT INTO `t7_1_6` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', '%5C%22Insert+into+t7_1_2+Values%28%5C%27%5C%22.%24_SESSION%5B%5C%27username%5C%27%5D.%5C%22%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27desc%5C%27%5D%29.%5C%22%5C%27%2C%5C%27%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27link%5C%27%5D%29.%5C%22%5C%27%29%5C%22%3B', '', '%5C%22Insert+into+t7_1_2+Values%28%5C%27%5C%22.%24_SESSION%5B%5C%27username%5C%27%5D.%5C%22%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27desc%5C%27%5D%29.%5C%22%5C%27%2C%5C%27%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27link%5C%27%5D%29.%5C%22%5C%27%29%5C%22%3B');

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

--
-- Dumping data for table `t7_1_7`
--

INSERT INTO `t7_1_7` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', '%5C%22Insert+into+t7_1_2+Values%28%5C%27%5C%22.%24_SESSION%5B%5C%27username%5C%27%5D.%5C%22%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27desc%5C%27%5D%29.%5C%22%5C%27%2C%5C%27%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27link%5C%27%5D%29.%5C%22%5C%27%29%5C%22%3B', '', '%5C%22Insert+into+t7_1_2+Values%28%5C%27%5C%22.%24_SESSION%5B%5C%27username%5C%27%5D.%5C%22%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27desc%5C%27%5D%29.%5C%22%5C%27%2C%5C%27%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27link%5C%27%5D%29.%5C%22%5C%27%29%5C%22%3B');

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

--
-- Dumping data for table `t7_1_8`
--

INSERT INTO `t7_1_8` (`Username`, `Year`, `budget_green`, `expenditure_green`, `annual_expenditure`, `id_time`) VALUES
('iqac', 'July 15 - June 16', '7898778', '97897', '89798', 'id1542695113427');

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

--
-- Dumping data for table `t7_1_9`
--

INSERT INTO `t7_1_9` (`Username`, `pf`, `lift`, `ramp`, `braille`, `rest`, `scribes`, `special`, `other`, `id_time`, `choice_719`) VALUES
('iqac', 'uyguyg', 'yug', 'uygyu', 'gug', 'ug', 'uyg', 'ug', 'yu', 'id1542695128686', 'Any  2 of the above');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t7_1_10`
--

INSERT INTO `t7_1_10` (`Username`, `Year`, `name`, `date_from`, `date_to`, `issue`, `num_participants`, `id_time`) VALUES
('iqac', 'July 16 - June 17', '7686', '0876-06-07', '0786-06-07', '786876', 8688, 'id1542695141082');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t7_1_11`
--

INSERT INTO `t7_1_11` (`Username`, `Year`, `name`, `date_from`, `date_to`, `issue`, `num_participants`, `id_time`) VALUES
('iqac', 'July 14 - June 15', 'hkhk', '275760-08-09', '8979-07-08', '897878', 97879, 'id1542695213318');

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_12`
--

CREATE TABLE `t7_1_12` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t7_1_12`
--

INSERT INTO `t7_1_12` (`Username`, `yes_no`, `link`) VALUES
('iqac', 'dhs', 'djfkkjdkf');

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_13`
--

CREATE TABLE `t7_1_13` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t7_1_13`
--

INSERT INTO `t7_1_13` (`Username`, `yes_no`, `link`) VALUES
('iqac', 'yes', 'google.com');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t7_1_14`
--

INSERT INTO `t7_1_14` (`Username`, `Year`, `sno`, `title`, `date_from`, `date_to`, `participants`, `link`, `id_time`) VALUES
('iqac', 'July 15 - June 16', '97987', '897879', '0079-09-09', '275760-09-08', 897987, '97987', 'ididid1542695595963');

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_15`
--

CREATE TABLE `t7_1_15` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t7_1_15`
--

INSERT INTO `t7_1_15` (`Username`, `yes_no`, `link`) VALUES
('iqac', 'NO', 'YESno');

-- --------------------------------------------------------

--
-- Table structure for table `t7_1_16`
--

CREATE TABLE `t7_1_16` (
  `Username` varchar(100) NOT NULL,
  `yes_no` varchar(10) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t7_1_16`
--

INSERT INTO `t7_1_16` (`Username`, `yes_no`, `link`) VALUES
('iqac', 'GO', 'DNFJDK');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t7_1_17`
--

INSERT INTO `t7_1_17` (`Username`, `Year`, `name_of_activity`, `date_from`, `date_to`, `num_participants`, `id_time`) VALUES
('iqac', 'July 16 - June 17', 'kdkjdhfkj', '0079-08-07', '275760-09-08', 87899, 'id1542695889883');

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

--
-- Dumping data for table `t7_1_18`
--

INSERT INTO `t7_1_18` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', '%5C%22Insert+into+t7_1_2+Values%28%5C%27%5C%22.%24_SESSION%5B%5C%27username%5C%27%5D.%5C%22%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27desc%5C%27%5D%29.%5C%22%5C%27%2C%5C%27%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27link%5C%27%5D%29.%5C%22%5C%27%29%5C%22%3B', '', '%5C%22Insert+into+t7_1_2+Values%28%5C%27%5C%22.%24_SESSION%5B%5C%27username%5C%27%5D.%5C%22%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27desc%5C%27%5D%29.%5C%22%5C%27%2C%5C%27%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27link%5C%27%5D%29.%5C%22%5C%27%29%5C%22%3B');

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

--
-- Dumping data for table `t7_1_19`
--

INSERT INTO `t7_1_19` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', 'f%2C%2Cdfmnmkdlfk', '', 'dksmdlsdjk');

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

--
-- Dumping data for table `t7_2_1`
--

INSERT INTO `t7_2_1` (`Username`, `title`, `objective`, `context`, `practice`, `evidence`, `problem`, `notes`, `id_time`) VALUES
('iqac', 'ATTENDANCE1', '2ATTENDENCE', '3ATTENDENCE', '4ATTENDENCE', '5ATTENDENCE', '6ATTENDENCE', '7ATTENDENCE', 'id1542694810514'),
('iqac', 'LATE1', 'LATE2', 'LATE3', 'LATE4', 'LATE5', 'LATE6', 'LATE7', 'id1542694861334');

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

--
-- Dumping data for table `t7_3_1`
--

INSERT INTO `t7_3_1` (`Username`, `Description`, `File_name`, `Link`) VALUES
('iqac', '%5C%22Insert+into+t7_1_2+Values%28%5C%27%5C%22.%24_SESSION%5B%5C%27username%5C%27%5D.%5C%22%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27desc%5C%27%5D%29.%5C%22%5C%27%2C%5C%27%5C%27%2C%5C%27%5C%22.urlencode%28%24_GET%5B%5C%27link%5C%27%5D%29.%5C%22%5C%27%29%5C%22%3B', '', '++++++++%3Cbr%3E++++++++++%3Cinput+type%3D%5C%22text%5C%22+id%3D%5C%22link6_1_1%5C%22+placeholder%3D%5C%22Link+of+the+relevant+document%5C%22+style%3D%5C%22margin-left%3A80px%3B+width%3A930px%3B%5C%22+required%3E++++++++++%3Cbr%3E');

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
  ADD PRIMARY KEY (`Prog_code`,`Course_code`),
  ADD KEY `Course_code_2` (`Course_code`);

--
-- Indexes for table `eval_report`
--
ALTER TABLE `eval_report`
  ADD PRIMARY KEY (`Username`);

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
-- Indexes for table `t3_6_1`
--
ALTER TABLE `t3_6_1`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `help_desk`
--
ALTER TABLE `help_desk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `not_applicable`
--
ALTER TABLE `not_applicable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
