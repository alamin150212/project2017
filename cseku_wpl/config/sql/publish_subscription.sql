-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2017 at 04:36 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publish_subscription`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_subscriber`
--

CREATE TABLE `tbl_add_subscriber` (
  `InstituteID` varchar(255) NOT NULL,
  `CategoryID` varchar(255) NOT NULL,
  `SubscriberID` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_add_subscriber`
--

INSERT INTO `tbl_add_subscriber` (`InstituteID`, `CategoryID`, `SubscriberID`) VALUES
('{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', '{A0720964-0C13-4CFA-814E-93292FE6571F}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}'),
('{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', '{A0720964-0C13-4CFA-814E-93292FE6571F}', '{BC6BD37B-CCFE-4AEE-BEA9-19373F26201C}'),
('{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', '{A0720964-0C13-4CFA-814E-93292FE6571F}', '{4C24798C-C6A8-4373-A3CE-535EE86003C6}'),
('{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', '{A0720964-0C13-4CFA-814E-93292FE6571F}', '{7051B474-DB05-466B-B1F6-EE9B9EF0F83A}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_child_cat`
--

CREATE TABLE `tbl_child_cat` (
  `CatID` varchar(250) NOT NULL,
  `UserID` varchar(255) NOT NULL,
  `InstituteID` varchar(255) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `ParentID` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_child_cat`
--

INSERT INTO `tbl_child_cat` (`CatID`, `UserID`, `InstituteID`, `Name`, `ParentID`) VALUES
('{A0720964-0C13-4CFA-814E-93292FE6571F}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', '{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', 'CSE', '{49988349-A2E2-4CA7-8EE1-D2EDE5313B86}'),
('{9017C924-23AD-4F02-B93F-672BF29B1EF7}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', '{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', 'CSE13', '{A0720964-0C13-4CFA-814E-93292FE6571F}'),
('{A2BEE5EA-2586-4DF1-AECE-0091D72C32A0}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', '{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', 'Life Science School', '{F4C1C6A4-E216-4FF8-8C41-D7E039890EF1}'),
('{F4C1C6A4-E216-4FF8-8C41-D7E039890EF1}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', '{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', 'KU', '0'),
('{49988349-A2E2-4CA7-8EE1-D2EDE5313B86}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', '{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', 'SET School', '{F4C1C6A4-E216-4FF8-8C41-D7E039890EF1}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `ID` varchar(255) NOT NULL,
  `CategoryID` varchar(255) NOT NULL,
  `PublisherID` varchar(255) NOT NULL,
  `PublisherName` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`ID`, `CategoryID`, `PublisherID`, `PublisherName`, `Image`) VALUES
('{979DA4FB-078B-460F-9E81-4277EF41450D}', '{E34BEA30-914E-4A61-A358-70DC813077F3}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', 'Binayak', 'uploads/e32ab9a722.jpg'),
('{01868BCF-AC76-4C60-8183-E92633C0EF8F}', '{391AAD5B-4D59-47BF-8D9D-6B0D7C6D0A6B}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', 'Binayak', 'uploads/4467eaa5f9.jpg'),
('{7938021D-158C-4DB9-B610-3478BBBDAA03}', '{391AAD5B-4D59-47BF-8D9D-6B0D7C6D0A6B}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', 'Binayak', 'uploads/65e8a3452d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `ID` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`ID`, `Name`, `Image`) VALUES
('{8AD1D117-B4DB-4325-BE01-7CB8BE0AFA14}', 'poem of binayak', 'uploads/hotat bristy.docx'),
('{F48A2CF4-D4FA-4D98-982C-4EAA467FC358}', 'koushiks Father', 'uploads/19113751_1991991214363677_8668836943281170310_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_institution`
--

CREATE TABLE `tbl_institution` (
  `ID` varchar(255) NOT NULL,
  `UserID` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_institution`
--

INSERT INTO `tbl_institution` (`ID`, `UserID`, `Name`, `Address`) VALUES
('{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', 'KU', 'khulna university');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_publisher`
--

CREATE TABLE `tbl_new_publisher` (
  `InstituteID` varchar(255) NOT NULL,
  `CategoryID` varchar(255) NOT NULL,
  `PublisherID` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_new_publisher`
--

INSERT INTO `tbl_new_publisher` (`InstituteID`, `CategoryID`, `PublisherID`) VALUES
('{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', '{A0720964-0C13-4CFA-814E-93292FE6571F}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `ID` varchar(100) NOT NULL,
  `ChildCatID` varchar(255) NOT NULL,
  `PubCatID` varchar(255) NOT NULL,
  `PublisherID` varchar(100) NOT NULL,
  `Notice` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`ID`, `ChildCatID`, `PubCatID`, `PublisherID`, `Notice`) VALUES
('{69044946-98D4-42B7-8907-9BDA1BB87DFC}', '{E02DA3CB-B0DC-4193-A4C3-96056EE63F11}', '{E02DA3CB-B0DC-4193-A4C3-96056EE63F11}', '{99E9852D-B301-4694-9503-2ED5BC6E6B74}', 'CSE 13 is the best');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

CREATE TABLE `tbl_permission` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Category` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission`
--

INSERT INTO `tbl_permission` (`ID`, `Name`, `Category`) VALUES
('PUBLISHER_C', 'PUBLISHER_C', 'PUBLISHER'),
('PUBLISHER_R', 'PUBLISHER_R', 'PUBLISHER'),
('PUBLISHER_U', 'PUBLISHER_U', 'PUBLISHER'),
('PUBLISHER_D', 'PUBLISHER_D', 'PUBLISHER'),
('SUBSCRIBER_C', 'SUBSCRIBER_C', 'SUBSCRIBER'),
('SUBSCRIBER_R', 'SUBSCRIBER_R', 'SUBSCRIBER'),
('SUBSCRIBER_U', 'SUBSCRIBER_U', 'SUBSCRIBER'),
('SUBSCRIBER_D', 'SUBSCRIBER_D', 'SUBSCRIBER'),
('NOTICE_C', 'NOTICE_C', 'NOTICE'),
('NOTICE_R', 'NOTICE_R', 'NOTICE'),
('NOTICE_U', 'NOTICE_U', 'NOTICE'),
('NOTICE_D', 'NOTICE_D', 'NOTICE'),
('CATEGORY_C', 'CATEGORY_C', 'CATEGORY'),
('CATEGORY_R', 'CATEGORY_R', 'CATEGORY'),
('CATEGORY_U', 'CATEGORY_U', 'CATEGORY'),
('CATEGORY_D', 'CATEGORY_D', 'CATEGORY'),
('CONTENT_C', 'CONTENT_C', 'CONTENT'),
('CONTENT_R', 'CONTENT_R', 'CONTENT'),
('CONTENT_U', 'CONTENT_U', 'CONTENT'),
('CONTENT_D', 'CONTENT_D', 'CONTENT'),
('ROLE_C', 'ROLE_C', 'ROLE'),
('ROLE_R', 'ROLE_R', 'ROLE'),
('ROLE_U', 'ROLE_U', 'ROLE'),
('ROLE_D', 'ROLE_D', 'ROLE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profileimage`
--

CREATE TABLE `tbl_profileimage` (
  `id` int(11) NOT NULL,
  `UserID` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profileimage`
--

INSERT INTO `tbl_profileimage` (`id`, `UserID`, `Image`) VALUES
(6, '{99E9852D-B301-4694-9503-2ED5BC6E6B74}', 'uploads/16a2803b64.jpg'),
(5, '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', 'uploads/faac2a1fd2.jpg'),
(4, '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', 'uploads/ac97e07194.jpg'),
(7, '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', 'uploads/72c2ad2ad1.jpg'),
(8, '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', 'uploads/a869189680.jpg'),
(9, '{99E9852D-B301-4694-9503-2ED5BC6E6B74}', 'uploads/451a595000.jpg'),
(10, '{BC6BD37B-CCFE-4AEE-BEA9-19373F26201C}', 'uploads/6a05f748f3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `ReqID` varchar(255) NOT NULL,
  `InstituteID` varchar(255) NOT NULL,
  `SubscriberID` varchar(255) NOT NULL,
  `CatID` varchar(255) NOT NULL,
  `Status` int(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`ReqID`, `InstituteID`, `SubscriberID`, `CatID`, `Status`) VALUES
('{44C730A8-A24A-4A44-BDC8-486B96008D49}', '{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', '{4C24798C-C6A8-4373-A3CE-535EE86003C6}', '{A0720964-0C13-4CFA-814E-93292FE6571F}', 1),
('{37C913E4-B0A6-4196-871B-E59851F4BC23}', '{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', '{7051B474-DB05-466B-B1F6-EE9B9EF0F83A}', '{A0720964-0C13-4CFA-814E-93292FE6571F}', 1),
('{FFA94883-E737-4A86-B018-5B4ECC068167}', '{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', '{BC6BD37B-CCFE-4AEE-BEA9-19373F26201C}', '{A0720964-0C13-4CFA-814E-93292FE6571F}', 1),
('{35D5BC7B-5586-4565-8059-5EF5428095E1}', '{D08AC5B6-F748-4BC6-90A0-40BED78AB73E}', '{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', '{A0720964-0C13-4CFA-814E-93292FE6571F}', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`ID`, `Name`) VALUES
('{300B373F-2D63-4322-9ED7-D93598D0DE0F}', 'Publisher'),
('{500F283F-B6B7-4FD5-8248-67FED50A04C5}', 'Subscriber'),
('{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'Admin');

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
(225, '{3477F777-3F53-408B-9773-249C5937C2B8}', 'COURSE_C'),
(226, '{3477F777-3F53-408B-9773-249C5937C2B8}', 'COURSE_D'),
(227, '{3477F777-3F53-408B-9773-249C5937C2B8}', 'FILE_C'),
(228, '{3477F777-3F53-408B-9773-249C5937C2B8}', 'FILE_D'),
(229, '{3477F777-3F53-408B-9773-249C5937C2B8}', 'FILE_R'),
(230, '{3477F777-3F53-408B-9773-249C5937C2B8}', 'FILE_U'),
(231, '{3477F777-3F53-408B-9773-249C5937C2B8}', 'POSITION_C'),
(232, '{3477F777-3F53-408B-9773-249C5937C2B8}', 'POSITION_D'),
(233, '{3477F777-3F53-408B-9773-249C5937C2B8}', 'POSITION_R'),
(234, '{3477F777-3F53-408B-9773-249C5937C2B8}', 'POSITION_U'),
(441, '{1AF8A832-4C03-49C7-8071-C71D4EB4FC57}', 'FILE_C'),
(442, '{1AF8A832-4C03-49C7-8071-C71D4EB4FC57}', 'FILE_D'),
(443, '{1AF8A832-4C03-49C7-8071-C71D4EB4FC57}', 'SURVEY_U'),
(444, '{1AF8A832-4C03-49C7-8071-C71D4EB4FC57}', 'TERM_U'),
(557, '{9CC63B6A-99BD-4710-B675-9881B5F7337A}', 'CLUB_D'),
(558, '{9CC63B6A-99BD-4710-B675-9881B5F7337A}', 'CLUB_R'),
(559, '{9CC63B6A-99BD-4710-B675-9881B5F7337A}', 'COURSE_D'),
(560, '{9CC63B6A-99BD-4710-B675-9881B5F7337A}', 'PROJECT_C'),
(561, '{9CC63B6A-99BD-4710-B675-9881B5F7337A}', 'PROJECT_D'),
(562, '{9CC63B6A-99BD-4710-B675-9881B5F7337A}', 'PROJECT_R'),
(563, '{9CC63B6A-99BD-4710-B675-9881B5F7337A}', 'PROJECT_U'),
(564, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'CLUB_C'),
(565, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'CLUB_D'),
(566, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'CLUB_R'),
(567, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'CLUB_U'),
(568, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'COURSE_C'),
(569, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'COURSE_D'),
(570, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'COURSE_R'),
(571, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'COURSE_U'),
(572, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'DISCIPLINE_C'),
(573, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'DISCIPLINE_D'),
(574, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'DISCIPLINE_R'),
(575, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'DISCIPLINE_U'),
(576, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'FILE_C'),
(577, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'FILE_D'),
(578, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'FILE_R'),
(579, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'FILE_U'),
(580, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'POSITION_C'),
(581, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'POSITION_D'),
(582, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'POSITION_R'),
(583, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'POSITION_U'),
(584, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'PROJECT_C'),
(585, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'PROJECT_D'),
(586, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'PROJECT_R'),
(587, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'PROJECT_U'),
(588, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'ROLE_C'),
(589, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'ROLE_D'),
(590, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'ROLE_R'),
(591, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'ROLE_U'),
(592, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SCHOOL_C'),
(593, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SCHOOL_D'),
(594, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SCHOOL_R'),
(595, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SCHOOL_U'),
(596, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SESSION_C'),
(597, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SESSION_D'),
(598, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SESSION_R'),
(599, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SESSION_U'),
(600, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SURVEY_C'),
(601, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SURVEY_D'),
(602, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SURVEY_R'),
(603, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'SURVEY_U'),
(604, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'TERM_C'),
(605, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'TERM_D'),
(606, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'TERM_R'),
(607, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'TERM_U'),
(608, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'USER_C'),
(609, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'USER_D'),
(610, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'USER_R'),
(611, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'USER_U'),
(612, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'YEAR_C'),
(613, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'YEAR_D'),
(614, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'YEAR_R'),
(615, '{F9C458F2-5298-441F-AE63-7514029760C4}', 'YEAR_U'),
(625, '{500F283F-B6B7-4FD5-8248-67FED50A04C5}', 'NOTICE_C'),
(626, '{500F283F-B6B7-4FD5-8248-67FED50A04C5}', 'NOTICE_R'),
(627, '{500F283F-B6B7-4FD5-8248-67FED50A04C5}', 'NOTICE_U'),
(628, '{500F283F-B6B7-4FD5-8248-67FED50A04C5}', 'NOTICE_D'),
(629, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'PUBLISHER_C'),
(630, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'PUBLISHER_R'),
(631, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'PUBLISHER_U'),
(632, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'PUBLISHER_D'),
(633, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'SUBSCRIBER_C'),
(634, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'SUBSCRIBER_R'),
(635, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'SUBSCRIBER_U'),
(636, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'SUBSCRIBER_D'),
(637, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'NOTICE_C'),
(638, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'NOTICE_R'),
(639, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'NOTICE_U'),
(640, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'NOTICE_D'),
(641, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'CATEGORY_C'),
(642, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'CATEGORY_R'),
(643, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'CATEGORY_U'),
(644, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'CATEGORY_D'),
(645, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'CONTENT_C'),
(646, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'CONTENT_R'),
(647, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'CONTENT_U'),
(648, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'CONTENT_D'),
(649, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'ROLE_C'),
(650, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'ROLE_R'),
(651, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'ROLE_U'),
(652, '{3BB9B37A-01E4-493B-A283-0448547E6BB0}', 'ROLE_D');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` varchar(255) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `Address`) VALUES
('{4A8BC16B-A271-4B6D-BE1C-5B443A7E0B2E}', 'Binayak', 'Ray', 'csebinayak.ku@gmail.com', '1212', 'khulna university'),
('{4C24798C-C6A8-4373-A3CE-535EE86003C6}', 'Sohel', 'Rana', 'sohel@gmail.com', '130209', 'khulna university'),
('{BC6BD37B-CCFE-4AEE-BEA9-19373F26201C}', 'Biswajit', 'Kumar', 'biswa@gmail.com', '130235', 'khulna university'),
('{7051B474-DB05-466B-B1F6-EE9B9EF0F83A}', 'Shamim', 'Hasan', 'nayan@gmail.com', '130240', 'BB Hall'),
('{99E9852D-B301-4694-9503-2ED5BC6E6B74}', 'Masum', 'Moral', 'masum@gmail.com', '130217', 'khulna university');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_child_cat`
--
ALTER TABLE `tbl_child_cat`
  ADD PRIMARY KEY (`CatID`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_institution`
--
ALTER TABLE `tbl_institution`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_new_publisher`
--
ALTER TABLE `tbl_new_publisher`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_profileimage`
--
ALTER TABLE `tbl_profileimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`ReqID`);

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
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_profileimage`
--
ALTER TABLE `tbl_profileimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  MODIFY `Row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=653;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
