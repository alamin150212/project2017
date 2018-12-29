-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 05:43 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routine`
--

-- --------------------------------------------------------

--
-- Table structure for table `hms_hall`
--

CREATE TABLE `hms_hall` (
  `id` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `provost` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rms_day_year_term_routine`
--

CREATE TABLE `rms_day_year_term_routine` (
  `id` varchar(40) NOT NULL,
  `day_id` varchar(40) NOT NULL,
  `year_id` varchar(40) NOT NULL,
  `term_id` varchar(40) NOT NULL,
  `routine_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rms_day_year_term_routine`
--

INSERT INTO `rms_day_year_term_routine` (`id`, `day_id`, `year_id`, `term_id`, `routine_id`) VALUES
('{0A0EB5F8-C9B2-4185-9896-710C5FE4B3E9}', '1', '1', '1', '{0A0EB5F8-C9B2-4185-9896-710C5FE4B3E9}'),
('{0B5E08ED-FBEB-431F-9AE4-0F95E8BD328A}', '1', '1', '1', '{0B5E08ED-FBEB-431F-9AE4-0F95E8BD328A}'),
('{4B565F74-00B7-4ACD-8570-D138331A6105}', '1', '3', '1', '{4B565F74-00B7-4ACD-8570-D138331A6105}'),
('{722FECCB-9F32-4781-A1FA-EAF6FDD8020B}', '1', '1', '2', '{722FECCB-9F32-4781-A1FA-EAF6FDD8020B}'),
('{9C231204-34D6-4973-9A3E-C5762F92CA7C}', '2', '2', '1', '{9C231204-34D6-4973-9A3E-C5762F92CA7C}'),
('{A27A7D5D-6EDD-4620-BE02-542152655A48}', '2', '1', '1', '{A27A7D5D-6EDD-4620-BE02-542152655A48}'),
('{B3AA4C13-8953-4AE9-9018-48DF12DCD453}', '1', '1', '2', '{B3AA4C13-8953-4AE9-9018-48DF12DCD453}'),
('{CF875826-32F7-42A9-AFDB-EAB99B0C13D0}', '1', '1', '1', '{CF875826-32F7-42A9-AFDB-EAB99B0C13D0}');

-- --------------------------------------------------------

--
-- Table structure for table `rms_routine`
--

CREATE TABLE `rms_routine` (
  `id` varchar(40) NOT NULL,
  `year_id` varchar(40) NOT NULL,
  `term_id` varchar(40) NOT NULL,
  `course_id` varchar(40) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `day_id` varchar(40) NOT NULL,
  `time_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rms_routine`
--

INSERT INTO `rms_routine` (`id`, `year_id`, `term_id`, `course_id`, `user_id`, `day_id`, `time_id`) VALUES
('{0A0EB5F8-C9B2-4185-9896-710C5FE4B3E9}', '1', '1', '1', 'test@test.com', '1', '1'),
('{0B5E08ED-FBEB-431F-9AE4-0F95E8BD328A}', '1', '1', '1', 'test@test.com', '1', '3'),
('{4B565F74-00B7-4ACD-8570-D138331A6105}', '3', '1', '1', 'test@test.com', '1', '3'),
('{722FECCB-9F32-4781-A1FA-EAF6FDD8020B}', '1', '2', '1', 'test@test.com', '1', '4'),
('{9C231204-34D6-4973-9A3E-C5762F92CA7C}', '2', '1', '2', 'test@test.com', '2', '3'),
('{A27A7D5D-6EDD-4620-BE02-542152655A48}', '1', '1', '1', 'test@test.com', '2', '9'),
('{B3AA4C13-8953-4AE9-9018-48DF12DCD453}', '1', '2', '1', 'test@test.com', '1', '9'),
('{CF875826-32F7-42A9-AFDB-EAB99B0C13D0}', '1', '1', '1', 'test@test.com', '1', '7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `ID` varchar(40) NOT NULL,
  `CourseNo` varchar(40) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Credit` double NOT NULL,
  `CourseTypeID` varchar(40) NOT NULL,
  `DisciplineID` varchar(40) NOT NULL,
  `IsDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`ID`, `CourseNo`, `Title`, `Credit`, `CourseTypeID`, `DisciplineID`, `IsDeleted`) VALUES
('1', 'CSE 1101', 'C Programming', 3, '1', '1', 0),
('2', 'CSE 1203', 'Object Oriented Programming', 3, '2', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_sessional_type`
--

CREATE TABLE `tbl_course_sessional_type` (
  `ID` varchar(40) NOT NULL,
  `Name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_sessional_type`
--

INSERT INTO `tbl_course_sessional_type` (`ID`, `Name`) VALUES
('1', 60),
('2', 30),
('3', 15),
('4', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_type`
--

CREATE TABLE `tbl_course_type` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `SessionalTypeID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_type`
--

INSERT INTO `tbl_course_type` (`ID`, `Name`, `SessionalTypeID`) VALUES
('1', 'Project', '1'),
('2', 'Thesis', '2'),
('3', 'Research', '3'),
('4', 'Project', '4'),
('5', 'Thesis', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discipline`
--

CREATE TABLE `tbl_discipline` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ShortCode` varchar(20) DEFAULT NULL,
  `SchoolID` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discipline`
--

INSERT INTO `tbl_discipline` (`ID`, `Name`, `ShortCode`, `SchoolID`) VALUES
('1', 'Computer Science & Engineering', 'CSE', '1'),
('2', 'Mathematics', 'MATH', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discussion`
--

CREATE TABLE `tbl_discussion` (
  `ID` varchar(40) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `CategoryID` varchar(40) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Tag` varchar(200) NOT NULL,
  `CreationDate` datetime NOT NULL,
  `CreatorID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discussion`
--

INSERT INTO `tbl_discussion` (`ID`, `Title`, `CategoryID`, `Description`, `Tag`, `CreationDate`, `CreatorID`) VALUES
('{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'what is oop', '{3D212234-2F34-4AB0-83EF-1A772068403B}', 'describe oop', 'oop', '2017-04-29 00:00:00', 'mkazi078@uottawa.ca'),
('{DA408BD0-9C9E-46F6-8CF2-00A631B06A26}', 'what is c#', '{44CAEE8D-A9D7-48C8-A2EA-A7463E00FCD6}', 'this is c#', 'oop', '2017-04-29 00:00:00', 'mkazi078@uottawa.ca');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discussion_category`
--

CREATE TABLE `tbl_discussion_category` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discussion_category`
--

INSERT INTO `tbl_discussion_category` (`ID`, `Name`) VALUES
('{3D212234-2F34-4AB0-83EF-1A772068403B}', 'java'),
('{44CAEE8D-A9D7-48C8-A2EA-A7463E00FCD6}', 'c#'),
('{974DE90C-BCAC-4FA3-8B9B-518A3CE6834A}', 'programming contest');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discussion_comment`
--

CREATE TABLE `tbl_discussion_comment` (
  `CommentID` varchar(50) NOT NULL,
  `DiscussionID` varchar(40) NOT NULL,
  `Comment` varchar(300) NOT NULL,
  `CreatorID` varchar(40) NOT NULL,
  `CommentTime` datetime NOT NULL,
  `CommentIDTop` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discussion_comment`
--

INSERT INTO `tbl_discussion_comment` (`CommentID`, `DiscussionID`, `Comment`, `CreatorID`, `CommentTime`, `CommentIDTop`) VALUES
('{00AADED4-6799-4F2C-BECB-ED50F7B03DDE}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'new comment', 'mkazi078@uottawa.ca', '2017-06-26 19:18:08', NULL),
('{1634B01B-5F82-43EF-96F8-E6149F488424}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'it is PIE', 'mkazi078@uottawa.ca', '0000-00-00 00:00:00', NULL),
('{550A15FC-06B8-43DF-83EE-097E35920170}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'little difficult', 'mohidul@gmail.com', '0000-00-00 00:00:00', NULL),
('{A15517C2-883F-4E5E-B0AC-9A1DB556741F}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'Polymorphism, inheritence, encapsulation', 'mkazi078@uottawa.ca', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

CREATE TABLE `tbl_permission` (
  `ID` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission`
--

INSERT INTO `tbl_permission` (`ID`, `Name`, `Category`) VALUES
('COURSE_C', 'COURSE_C', 'COURSE'),
('COURSE_D', 'COURSE_D', 'COURSE'),
('COURSE_R', 'COURSE_R', 'COURSE'),
('COURSE_SESSIONAL_TYPE_C', 'COURSE_SESSIONAL_TYPE_C', 'COURSE_SESSIONAL_TYPE'),
('COURSE_SESSIONAL_TYPE_D', 'COURSE_SESSIONAL_TYPE_D', 'COURSE_SESSIONAL_TYPE'),
('COURSE_SESSIONAL_TYPE_R', 'COURSE_SESSIONAL_TYPE_R', 'COURSE_SESSIONAL_TYPE'),
('COURSE_SESSIONAL_TYPE_U', 'COURSE_SESSIONAL_TYPE_U', 'COURSE_SESSIONAL_TYPE'),
('COURSE_TYPE_C', 'COURSE_TYPE_C', 'COURSE_TYPE'),
('COURSE_TYPE_D', 'COURSE_TYPE_D', 'COURSE_TYPE'),
('COURSE_TYPE_R', 'COURSE_TYPE_R', 'COURSE_TYPE'),
('COURSE_TYPE_U', 'COURSE_TYPE_U', 'COURSE_TYPE'),
('COURSE_U', 'COURSE_U', 'COURSE'),
('DISCIPLINE_C', 'DISCIPLINE_C', 'DISCIPLINE'),
('DISCIPLINE_D', 'DISCIPLINE_D', 'DISCIPLINE'),
('DISCIPLINE_R', 'DISCIPLINE_R', 'DISCIPLINE'),
('DISCIPLINE_U', 'DISCIPLINE_U', 'DISCIPLINE'),
('DISCUSSION_C', 'DISCUSSION_C', 'DISCUSSION'),
('DISCUSSION_CAT_C', 'DISCUSSION_CAT_C', 'DISCUSSION CATEGORY'),
('DISCUSSION_CAT_D', 'DISCUSSION_CAT_D', 'DISCUSSION CATEGORY'),
('DISCUSSION_CAT_R', 'DISCUSSION_CAT_R', 'DISCUSSION CATEGORY'),
('DISCUSSION_CAT_U', 'DISCUSSION_CAT_U', 'DISCUSSION CATEGORY'),
('DISCUSSION_COMMENT_C', 'DISCUSSION_COMMENT_C', 'DISCUSSION COMMENT'),
('DISCUSSION_COMMENT_D', 'DISCUSSION_COMMENT_D', 'DISCUSSION COMMENT'),
('DISCUSSION_COMMENT_R', 'DISCUSSION_COMMENT_R', 'DISCUSSION COMMENT'),
('DISCUSSION_COMMENT_U', 'DISCUSSION_COMMENT_U', 'DISCUSSION COMMENT'),
('DISCUSSION_D', 'DISCUSSION_D', 'DISCUSSION'),
('DISCUSSION_R', 'DISCUSSION_R', 'DISCUSSION'),
('DISCUSSION_U', 'DISCUSSION_U', 'DISCUSSION'),
('HALL_C', 'HALL_C', 'HALL'),
('HALL_D', 'HALL_D', 'HALL'),
('HALL_R', 'HALL_R', 'HALL'),
('HALL_U', 'HALL_U', 'HALL'),
('PERMISSION_C', 'PERMISSION_C', 'PERMISSION'),
('PERMISSION_D', 'PERMISSION_D', 'PERMISSION'),
('PERMISSION_R', 'PERMISSION_R', 'PERMISSION'),
('PERMISSION_U', 'PERMISSION_U', 'PERMISSION'),
('POSITION_C', 'POSITION_C', 'POSITION'),
('POSITION_D', 'POSITION_D', 'POSITION'),
('POSITION_R', 'POSITION_R', 'POSITION'),
('POSITION_U', 'POSITION_U', 'POSITION'),
('ROLE_C', 'ROLE_C', 'ROLE'),
('ROLE_D', 'ROLE_D', 'ROLE'),
('ROLE_R', 'ROLE_R', 'ROLE'),
('ROLE_U', 'ROLE_U', 'ROLE'),
('ROUTINE_C', 'ROUTINE_C', 'ROUTINE'),
('ROUTINE_D', 'ROUTINE_D', 'ROUTINE'),
('ROUTINE_R', 'ROUTINE_R', 'ROUTINE'),
('ROUTINE_U', 'ROUTINE_U', 'ROUTINE'),
('SCHOOL_C', 'SCHOOL_C', 'SCHOOL'),
('SCHOOL_D', 'SCHOOL_D', 'SCHOOL'),
('SCHOOL_R', 'SCHOOL_R', 'SCHOOL'),
('SCHOOL_U', 'SCHOOL_U', 'SCHOOL'),
('TERM_C', 'TERM_C', 'TERM'),
('TERM_D', 'TERM_D', 'TERM'),
('TERM_R', 'TERM_R', 'TERM'),
('TERM_U', 'TERM_U', 'TERM'),
('USER_C', 'USER_C', 'USER'),
('USER_D', 'USER_D', 'USER'),
('USER_R', 'USER_R', 'USER'),
('USER_U', 'USER_U', 'USER'),
('YEAR_C', 'YEAR_C', 'YEAR'),
('YEAR_D', 'YEAR_D', 'YEAR'),
('YEAR_R', 'YEAR_R', 'YEAR'),
('YEAR_U', 'YEAR_U', 'YEAR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`ID`, `Name`) VALUES
('{1BFE76DB-C2AA-4FAA-A23B-F43E6150A2F6}', 'Section Officer'),
('{2E024DF5-BD45-4EF2-A5E3-43BCA3E9777F}', 'Pro-vice Chancellor'),
('{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}', 'Assistant Professor'),
('{7CDA1F32-A2F8-4469-B5A8-C2038FCE1F9A}', 'Lecturer'),
('{818DE12F-60CC-42E4-BAEC-48EAAED65179}', 'Dean of School'),
('{928EE9FF-E02D-470F-9A6A-AD0EB38B848F}', 'Vice Chancellor'),
('{92FDDA3F-1E91-4AA3-918F-EB595F85790C}', 'Daywise Worker'),
('{932CB0EE-76C2-448E-A40E-2D167EECC479}', 'Registrar'),
('{ADA027D3-21C1-47AF-A21D-759CAFCFE58D}', 'Assistant Registrar'),
('{B76EB035-EA26-4CEB-B029-1C6129574D98}', 'Librarian'),
('{B78C7A7B-4D38-4025-8170-7B8C9F291946}', 'Head of Discipline'),
('{C27B6BCF-FB83-4F3D-85CA-B7870D8B12D0}', 'Associate Professor'),
('{EB4880E2-01B3-4C6E-A2C9-89B6E5427C0A}', 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`ID`, `Name`) VALUES
('administrator', 'Administrator'),
('hall assign', 'Hall Assign'),
('registration coordinator', 'Registration Coordinator'),
('student', 'Student'),
('stuff', 'Stuff'),
('tabulator', 'Tabulator'),
('teacher', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role_permission`
--

CREATE TABLE `tbl_role_permission` (
  `Row` int(11) NOT NULL,
  `RoleID` varchar(40) NOT NULL,
  `PermissionID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role_permission`
--

INSERT INTO `tbl_role_permission` (`Row`, `RoleID`, `PermissionID`) VALUES
(1646, 'student', 'DISCUSSION_C'),
(1647, 'student', 'DISCUSSION_D'),
(1648, 'student', 'DISCUSSION_R'),
(1649, 'student', 'DISCUSSION_U'),
(1650, 'student', 'DISCUSSION_CAT_C'),
(1651, 'student', 'DISCUSSION_CAT_D'),
(1652, 'student', 'DISCUSSION_CAT_R'),
(1653, 'student', 'DISCUSSION_CAT_U'),
(1654, 'student', 'DISCUSSION_COMMENT_C'),
(1655, 'student', 'DISCUSSION_COMMENT_D'),
(1656, 'student', 'DISCUSSION_COMMENT_R'),
(1657, 'student', 'DISCUSSION_COMMENT_U'),
(1809, 'hall assign', 'TERM_C'),
(1810, 'hall assign', 'TERM_D'),
(1811, 'hall assign', 'TERM_R'),
(1812, 'hall assign', 'TERM_U'),
(1813, 'hall assign', 'USER_C'),
(1814, 'hall assign', 'USER_D'),
(1815, 'hall assign', 'USER_R'),
(1816, 'hall assign', 'USER_U'),
(1817, 'hall assign', 'YEAR_C'),
(1818, 'hall assign', 'YEAR_D'),
(1819, 'hall assign', 'YEAR_R'),
(1820, 'hall assign', 'YEAR_U'),
(1881, 'administrator', 'COURSE_C'),
(1882, 'administrator', 'COURSE_D'),
(1883, 'administrator', 'COURSE_R'),
(1884, 'administrator', 'COURSE_U'),
(1885, 'administrator', 'COURSE_SESSIONAL_TYPE_C'),
(1886, 'administrator', 'COURSE_SESSIONAL_TYPE_D'),
(1887, 'administrator', 'COURSE_SESSIONAL_TYPE_R'),
(1888, 'administrator', 'COURSE_SESSIONAL_TYPE_U'),
(1889, 'administrator', 'COURSE_TYPE_C'),
(1890, 'administrator', 'COURSE_TYPE_D'),
(1891, 'administrator', 'COURSE_TYPE_R'),
(1892, 'administrator', 'COURSE_TYPE_U'),
(1893, 'administrator', 'DISCIPLINE_C'),
(1894, 'administrator', 'DISCIPLINE_D'),
(1895, 'administrator', 'DISCIPLINE_R'),
(1896, 'administrator', 'DISCIPLINE_U'),
(1897, 'administrator', 'DISCUSSION_C'),
(1898, 'administrator', 'DISCUSSION_D'),
(1899, 'administrator', 'DISCUSSION_R'),
(1900, 'administrator', 'DISCUSSION_U'),
(1901, 'administrator', 'DISCUSSION_CAT_C'),
(1902, 'administrator', 'DISCUSSION_CAT_D'),
(1903, 'administrator', 'DISCUSSION_CAT_R'),
(1904, 'administrator', 'DISCUSSION_CAT_U'),
(1905, 'administrator', 'DISCUSSION_COMMENT_C'),
(1906, 'administrator', 'DISCUSSION_COMMENT_D'),
(1907, 'administrator', 'DISCUSSION_COMMENT_R'),
(1908, 'administrator', 'DISCUSSION_COMMENT_U'),
(1909, 'administrator', 'PERMISSION_C'),
(1910, 'administrator', 'PERMISSION_D'),
(1911, 'administrator', 'PERMISSION_R'),
(1912, 'administrator', 'PERMISSION_U'),
(1913, 'administrator', 'POSITION_C'),
(1914, 'administrator', 'POSITION_D'),
(1915, 'administrator', 'POSITION_R'),
(1916, 'administrator', 'POSITION_U'),
(1917, 'administrator', 'ROLE_C'),
(1918, 'administrator', 'ROLE_D'),
(1919, 'administrator', 'ROLE_R'),
(1920, 'administrator', 'ROLE_U'),
(1921, 'administrator', 'ROUTINE_C'),
(1922, 'administrator', 'ROUTINE_D'),
(1923, 'administrator', 'ROUTINE_R'),
(1924, 'administrator', 'ROUTINE_U'),
(1925, 'administrator', 'SCHOOL_C'),
(1926, 'administrator', 'SCHOOL_D'),
(1927, 'administrator', 'SCHOOL_R'),
(1928, 'administrator', 'SCHOOL_U'),
(1929, 'administrator', 'TERM_C'),
(1930, 'administrator', 'TERM_D'),
(1931, 'administrator', 'TERM_R'),
(1932, 'administrator', 'TERM_U'),
(1933, 'administrator', 'USER_C'),
(1934, 'administrator', 'USER_D'),
(1935, 'administrator', 'USER_R'),
(1936, 'administrator', 'USER_U'),
(1937, 'administrator', 'YEAR_C'),
(1938, 'administrator', 'YEAR_D'),
(1939, 'administrator', 'YEAR_R'),
(1940, 'administrator', 'YEAR_U');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_routine_day`
--

CREATE TABLE `tbl_routine_day` (
  `ID` varchar(40) NOT NULL,
  `routineDay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_routine_day`
--

INSERT INTO `tbl_routine_day` (`ID`, `routineDay`) VALUES
('1', 'Sunday'),
('2', 'Monday'),
('3', 'Tuesday'),
('4', 'Wednesday'),
('5', 'Thursday');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_routine_time`
--

CREATE TABLE `tbl_routine_time` (
  `ID` varchar(40) NOT NULL,
  `TimeSlot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_routine_time`
--

INSERT INTO `tbl_routine_time` (`ID`, `TimeSlot`) VALUES
('1', '8-8.50'),
('2', '8.50-9.40'),
('3', '9.40-10.30'),
('4', '10.50-11.40'),
('5', '11.40-12.30'),
('6', '12.30-1.20'),
('7', '2.30-3.20'),
('8', '3.20-4.10'),
('9', '4.10-5.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school`
--

CREATE TABLE `tbl_school` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DeanID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school`
--

INSERT INTO `tbl_school` (`ID`, `Name`, `DeanID`) VALUES
('1', 'SET', 'test@test.com'),
('2', 'Life Science', 'another@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term`
--

CREATE TABLE `tbl_term` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_term`
--

INSERT INTO `tbl_term` (`ID`, `Name`) VALUES
('1', '1st'),
('2', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` varchar(40) NOT NULL,
  `UniversityID` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `IsLogged` smallint(1) DEFAULT NULL,
  `IsArchived` smallint(1) DEFAULT NULL,
  `IsDeleted` smallint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `UniversityID`, `Email`, `Password`, `FirstName`, `LastName`, `Status`, `IsLogged`, `IsArchived`, `IsDeleted`) VALUES
('another1@test.com', '020205', 'another1@test.com', '123', 'Another1', 'Test ', 'approved', NULL, NULL, NULL),
('another@test.com', '020202', 'another@test.com', '123', 'Another', 'Test     ', 'approved', NULL, NULL, NULL),
('super@test.com', '020203', 'super@test.com', '123', 'Super', 'Test', 'approved', NULL, NULL, NULL),
('test1@test.com', '140201', 'test1@test.com', '123', 'test', 'test', 'approved', NULL, NULL, NULL),
('test@test.com', '020201', 'test@test.com', '123', 'I AM', 'ADMIN ', 'approved', NULL, NULL, NULL),
('working@test.com', '020204', 'working@test.com', '123', 'Working', 'Test', 'pending', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `ID` varchar(40) NOT NULL,
  `FatherName` varchar(100) DEFAULT NULL,
  `MotherName` varchar(100) DEFAULT NULL,
  `PermanentAddress` varchar(200) DEFAULT NULL,
  `HomePhone` varchar(20) DEFAULT NULL,
  `CurrentAddress` varchar(200) DEFAULT NULL,
  `MobilePhone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`ID`, `FatherName`, `MotherName`, `PermanentAddress`, `HomePhone`, `CurrentAddress`, `MobilePhone`) VALUES
('another1@test.com', NULL, NULL, NULL, NULL, NULL, NULL),
('another@test.com', NULL, NULL, NULL, NULL, NULL, NULL),
('super@test.com', NULL, NULL, NULL, NULL, NULL, NULL),
('test1@test.com', NULL, NULL, NULL, NULL, NULL, NULL),
('test@test.com', 'My father', 'My mother', 'My address', '04100000', 'Same', '0171100000'),
('working@test.com', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_discipline`
--

CREATE TABLE `tbl_user_discipline` (
  `UserID` varchar(40) NOT NULL,
  `DisciplineID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_position`
--

CREATE TABLE `tbl_user_position` (
  `ID` int(11) NOT NULL,
  `UserID` varchar(40) NOT NULL,
  `PositionID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_position`
--

INSERT INTO `tbl_user_position` (`ID`, `UserID`, `PositionID`) VALUES
(4, '{693F944F-328D-433A-9F94-459D92841645}', '{EB4880E2-01B3-4C6E-A2C9-89B6E5427C0A}'),
(14, '{E0F0AE1A-AECF-46C1-A148-4485036F3CCF}', '{EB4880E2-01B3-4C6E-A2C9-89B6E5427C0A}'),
(16, '{A4F96981-F014-46F6-BB93-87500C3CBB03}', '{7CDA1F32-A2F8-4469-B5A8-C2038FCE1F9A}'),
(17, '{0B2F4F89-2048-4504-AB17-0412CC624A05}', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(19, '{8104FB4F-8E63-489D-8D90-DB45A9A2327B}', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(21, '{8B24B76D-9969-4F71-ABC4-6EE59355C686}', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(24, '{9E2E6363-A0FF-4C0F-B58F-D162725FB702}', '{C27B6BCF-FB83-4F3D-85CA-B7870D8B12D0}'),
(30, 'mohidul@gmail.com', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(37, 'mkazi078@uottawa.ca', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(41, 'test@test.com', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(44, 'another@test.com', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(45, 'another@test.com', '{ADA027D3-21C1-47AF-A21D-759CAFCFE58D}'),
(46, 'another@test.com', '{C27B6BCF-FB83-4F3D-85CA-B7870D8B12D0}'),
(47, 'another@test.com', '{92FDDA3F-1E91-4AA3-918F-EB595F85790C}'),
(48, 'another@test.com', '{818DE12F-60CC-42E4-BAEC-48EAAED65179}'),
(49, 'another@test.com', '{B78C7A7B-4D38-4025-8170-7B8C9F291946}'),
(50, 'another@test.com', '{7CDA1F32-A2F8-4469-B5A8-C2038FCE1F9A}'),
(51, 'another@test.com', '{B76EB035-EA26-4CEB-B029-1C6129574D98}'),
(52, 'another@test.com', '{2E024DF5-BD45-4EF2-A5E3-43BCA3E9777F}'),
(53, 'another@test.com', '{EB4880E2-01B3-4C6E-A2C9-89B6E5427C0A}'),
(54, 'another@test.com', '{932CB0EE-76C2-448E-A40E-2D167EECC479}'),
(55, 'another@test.com', '{1BFE76DB-C2AA-4FAA-A23B-F43E6150A2F6}'),
(56, 'another@test.com', '{928EE9FF-E02D-470F-9A6A-AD0EB38B848F}'),
(57, 'another1@test.com', '{1BFE76DB-C2AA-4FAA-A23B-F43E6150A2F6}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `ID` int(11) NOT NULL,
  `UserID` varchar(40) NOT NULL,
  `RoleID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`ID`, `UserID`, `RoleID`) VALUES
(105, 'test@test.com', 'administrator'),
(106, 'test@test.com', 'teacher'),
(109, 'another@test.com', 'student'),
(110, 'super@test.com', 'student'),
(111, 'working@test.com', 'student'),
(113, 'another1@test.com', 'hall assign'),
(114, 'test1@test.com', 'hall assign');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE `tbl_year` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`ID`, `Name`) VALUES
('1', '1st'),
('2', '2nd'),
('3', '3rd'),
('4', '4th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hms_hall`
--
ALTER TABLE `hms_hall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rms_day_year_term_routine`
--
ALTER TABLE `rms_day_year_term_routine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `day_id` (`day_id`),
  ADD KEY `year_id` (`year_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `routine_id` (`routine_id`);

--
-- Indexes for table `rms_routine`
--
ALTER TABLE `rms_routine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `year_id` (`year_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `time_id` (`time_id`),
  ADD KEY `day_id` (`day_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CourseTypeID` (`CourseTypeID`),
  ADD KEY `DisciplineID` (`DisciplineID`);

--
-- Indexes for table `tbl_course_sessional_type`
--
ALTER TABLE `tbl_course_sessional_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_course_type`
--
ALTER TABLE `tbl_course_type`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SessionalTypeID` (`SessionalTypeID`);

--
-- Indexes for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SchoolID` (`SchoolID`);

--
-- Indexes for table `tbl_discussion`
--
ALTER TABLE `tbl_discussion`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_discussion_category`
--
ALTER TABLE `tbl_discussion_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_discussion_comment`
--
ALTER TABLE `tbl_discussion_comment`
  ADD PRIMARY KEY (`CommentID`);

--
-- Indexes for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  ADD PRIMARY KEY (`Row`);

--
-- Indexes for table `tbl_routine_day`
--
ALTER TABLE `tbl_routine_day`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_routine_time`
--
ALTER TABLE `tbl_routine_time`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_school`
--
ALTER TABLE `tbl_school`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DeanID` (`DeanID`);

--
-- Indexes for table `tbl_term`
--
ALTER TABLE `tbl_term`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `UniversityID` (`UniversityID`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user_position`
--
ALTER TABLE `tbl_user_position`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `RoleID` (`RoleID`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  MODIFY `Row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1941;
--
-- AUTO_INCREMENT for table `tbl_user_position`
--
ALTER TABLE `tbl_user_position`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `rms_day_year_term_routine`
--
ALTER TABLE `rms_day_year_term_routine`
  ADD CONSTRAINT `rms_day_year_term_routine_ibfk_1` FOREIGN KEY (`term_id`) REFERENCES `tbl_term` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rms_day_year_term_routine_ibfk_2` FOREIGN KEY (`day_id`) REFERENCES `tbl_routine_day` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rms_day_year_term_routine_ibfk_3` FOREIGN KEY (`year_id`) REFERENCES `tbl_year` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rms_day_year_term_routine_ibfk_4` FOREIGN KEY (`routine_id`) REFERENCES `rms_routine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rms_routine`
--
ALTER TABLE `rms_routine`
  ADD CONSTRAINT `rms_routine_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rms_routine_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `tbl_course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rms_routine_ibfk_3` FOREIGN KEY (`term_id`) REFERENCES `tbl_term` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rms_routine_ibfk_4` FOREIGN KEY (`year_id`) REFERENCES `tbl_year` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rms_routine_ibfk_5` FOREIGN KEY (`time_id`) REFERENCES `tbl_routine_time` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rms_routine_ibfk_6` FOREIGN KEY (`day_id`) REFERENCES `tbl_routine_day` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD CONSTRAINT `tbl_course_ibfk_1` FOREIGN KEY (`CourseTypeID`) REFERENCES `tbl_course_type` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_course_ibfk_2` FOREIGN KEY (`DisciplineID`) REFERENCES `tbl_discipline` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_course_type`
--
ALTER TABLE `tbl_course_type`
  ADD CONSTRAINT `tbl_course_type_ibfk_1` FOREIGN KEY (`SessionalTypeID`) REFERENCES `tbl_course_sessional_type` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  ADD CONSTRAINT `tbl_discipline_ibfk_1` FOREIGN KEY (`SchoolID`) REFERENCES `tbl_school` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_school`
--
ALTER TABLE `tbl_school`
  ADD CONSTRAINT `tbl_school_ibfk_1` FOREIGN KEY (`DeanID`) REFERENCES `tbl_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD CONSTRAINT `tbl_user_role_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `tbl_role` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_user_role_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `tbl_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
