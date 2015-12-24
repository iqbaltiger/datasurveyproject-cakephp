-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2015 at 08:19 AM
-- Server version: 5.5.40-36.1
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nogorsn_imli`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorized_menus`
--

CREATE TABLE IF NOT EXISTS `authorized_menus` (
  `id` char(36) NOT NULL,
  `role_id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `dominion_id` char(36) DEFAULT NULL,
  `process_id` char(36) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` tinytext NOT NULL,
  `position` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorized_menus`
--

INSERT INTO `authorized_menus` (`id`, `role_id`, `name`, `parent_id`, `dominion_id`, `process_id`, `icon`, `status`, `position`) VALUES
('5316b435-3894-4902-91aa-0536f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', 'User Management', '', '', '', '<i class="fa fa-user icon"> <b class="bg-primary"></b> </i>', 'Active', 1),
('5316b475-54b8-41a0-93bf-053af8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', 'User List', '5316b435-3894-4902-91aa-0536f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b533-a40c-44e7-a5e4-0930f8defb25', '<i class="fa fa-angle-right icon"></i> ', 'Active', 0),
('5492b76b-2f5c-4fc4-9736-0544f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', 'CMS Settings', '', '', '', '<i class="fa fa-fw fa-sitemap"></i>', 'Active', 4),
('5492b7d4-e848-4d63-9a1d-0544f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', 'Dominions', '5492b76b-2f5c-4fc4-9736-0544f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '', '<i class="fa fa-fw fa-wrench"></i>', 'Active', 1),
('5492b957-6290-4f31-a5e1-0544f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', 'Actions', '5492b76b-2f5c-4fc4-9736-0544f8defb25', '5492b8c5-291c-452d-bc3a-0544f8defb25', '', '<i class="fa fa-fw fa-random"></i>', 'Active', 2),
('5492b9f5-b5a0-4250-b019-0544f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', 'Authorize Menus', '5492b76b-2f5c-4fc4-9736-0544f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '', '<i class="fa fa-fw fa-list"></i>', 'Active', 3),
('54b5ebd1-5500-4a58-a56b-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', 'Permissions', '5492b76b-2f5c-4fc4-9736-0544f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '', '<i class="fa fa-fw fa-asterisk"></i>', 'Active', 4),
('54b5ebfc-8588-4bda-9867-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', 'Roles', '5492b76b-2f5c-4fc4-9736-0544f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '', '<i class="fa fa-fw fa-folder-open"></i>', 'Active', 5),
('54bc7f88-c204-4c63-be56-0c44f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', 'Dashboard', '', '53141557-020c-4f2f-b628-0d43f8defb25', '53141a8b-b684-4b54-84a9-0f56f8defb25', '<i class="fa fa-tachometer"></i>', 'Active', 0),
('54e9617f-f880-4fc0-b79c-0558f8defb25', '54e95830-d13c-42ad-814c-0558f8defb25', 'Dashboard', '', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-52cc-4b96-8b48-0558f8defb25', '<i class="fa fa-tachometer"></i>', 'Active', 0),
('54e96275-6e60-4f2c-810f-0558f8defb25', '54e95858-0a34-4b31-8c75-0558f8defb25', 'Dashboard', '', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-600c-4bb6-9f3a-0558f8defb25', '<i class="fa fa-tachometer"></i>', 'Active', 0),
('54e9a16f-d968-4cc3-9087-01b0c0b99bfc', '', 'Dashboard', '', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-600c-4bb6-9f3a-0558f8defb25', '<i class="fa fa-tachometer"></i>', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `community_interview`
--

CREATE TABLE IF NOT EXISTS `community_interview` (
  `id` int(11) NOT NULL,
  `interview_pattern` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `community_interview`
--

INSERT INTO `community_interview` (`id`, `interview_pattern`) VALUES
(1, 'community'),
(2, 'community'),
(3, 'community'),
(4, 'community'),
(5, 'community'),
(6, 'community'),
(7, 'community'),
(8, 'community'),
(9, 'community'),
(10, 'community'),
(11, 'community'),
(12, 'community'),
(13, 'community'),
(14, 'community');

-- --------------------------------------------------------

--
-- Table structure for table `community_question_701`
--

CREATE TABLE IF NOT EXISTS `community_question_701` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `followers_percentage` int(11) DEFAULT NULL,
  `preclassical` int(11) DEFAULT NULL,
  `christianity` int(11) DEFAULT NULL,
  `buddhism` int(11) DEFAULT NULL,
  `hinduism` int(11) DEFAULT NULL,
  `islam` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `community_question_702`
--

CREATE TABLE IF NOT EXISTS `community_question_702` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `ans_a` varchar(100) DEFAULT NULL,
  `ans_b` varchar(100) DEFAULT NULL,
  `ans_c` varchar(100) DEFAULT NULL,
  `ans_d` varchar(100) DEFAULT NULL,
  `ans_e` varchar(100) DEFAULT NULL,
  `ans_f` varchar(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_b1_parts`
--

CREATE TABLE IF NOT EXISTS `community_section_b_b1_parts` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(4) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_b1_parts`
--

INSERT INTO `community_section_b_b1_parts` (`id`, `interview_id`, `question_no`, `question`, `answer`) VALUES
(1, 1, 201, 'What is the name of the Division?', '5'),
(2, 1, 202, 'What is the name of the District?', ''),
(3, 1, 203, 'What is the name of the Upazila?', '3'),
(4, 1, 204, 'What is the name of the Union/ Municipality?', 'test'),
(5, 1, 205, 'What is the name of the Union/ Municipality?', ''),
(6, 1, 206, 'What is the name of the Union/ Municipality?', ''),
(7, 1, 207, 'What is the name of the Union/ Municipality?', ''),
(8, 1, 208, 'What is the name of the Union/ Municipality?', ''),
(9, 1, 209, 'What is the name of the Union/ Municipality?', ''),
(10, 1, 210, 'What is the name of the Union/ Municipality?', ''),
(11, 1, 211, 'What is the name of the Union/ Municipality?', ''),
(12, 1, 251, 'How long ago was the primarysettlement unit (village/ punji/ para/ basti/ moholla) established?', ''),
(13, 1, 252, 'How many households live currently in this primary settlement unit (village/ punji/ para/ basti/ moholla)?', ''),
(14, 1, 253, 'How many households lived in the primary settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', ''),
(15, 1, 254, 'How many households (approx.) living here today/now have moved to the primary settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', ''),
(16, 1, 255, 'How many households (approx.) have left the primary settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', ''),
(17, 1, 205, 'What is the name of the Union/ Municipality?', ''),
(18, 1, 206, 'What is the name of the Union/ Municipality?', ''),
(19, 1, 207, 'What is the name of the Union/ Municipality?', ''),
(20, 1, 208, 'What is the name of the Union/ Municipality?', ''),
(21, 1, 209, 'What is the name of the Union/ Municipality?', ''),
(22, 1, 210, 'What is the name of the Union/ Municipality?', ''),
(23, 1, 211, 'What is the name of the Union/ Municipality?', ''),
(24, 1, 251, 'How long ago was the primarysettlement unit (village/ punji/ para/ basti/ moholla) established?', ''),
(25, 1, 252, 'How many households live currently in this primary settlement unit (village/ punji/ para/ basti/ moholla)?', ''),
(26, 1, 253, 'How many households lived in the primary settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', ''),
(27, 1, 254, 'How many households (approx.) living here today/now have moved to the primary settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', ''),
(28, 1, 255, 'How many households (approx.) have left the primary settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', ''),
(29, 1, 251, 'How long ago was the primarysettlement unit (village/ punji/ para/ basti/ moholla) established?', ''),
(30, 1, 252, 'How many households live currently in this primary settlement unit (village/ punji/ para/ basti/ moholla)?', ''),
(31, 1, 253, 'How many households lived in the primary settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', ''),
(32, 1, 254, 'How many households (approx.) living here today/now have moved to the primary settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', ''),
(33, 1, 255, 'How many households (approx.) have left the primary settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', ''),
(34, 1, 251, 'How long ago was the primarysettlement unit (village/ punji/ para/ basti/ moholla) established?', ''),
(35, 1, 252, 'How many households live currently in this primary settlement unit (village/ punji/ para/ basti/ moholla)?', ''),
(36, 1, 253, 'How many households lived in the primary settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', ''),
(37, 1, 254, 'How many households (approx.) living here today/now have moved to the primary settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', ''),
(38, 1, 255, 'How many households (approx.) have left the primary settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', '');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_b2_location`
--

CREATE TABLE IF NOT EXISTS `community_section_b_b2_location` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_b2_location`
--

INSERT INTO `community_section_b_b2_location` (`id`, `interview_id`, `question_no`, `question`, `answer`) VALUES
(1, 1, 211, 'Major settlement type', '0'),
(2, 1, 212, 'If rural settlement, what is the type and pattern?', '5'),
(3, 1, 213, 'What is the local name of the settlement unit (village/ para/ punji)?', 'qweertert'),
(4, 1, 214, 'What is the latitude of the center of the settlement unit (village/ para/ punji)?', 'qwerqwer'),
(5, 1, 215, 'What is the longitude of the center of the settlement unit (village/ para/ punji)?', 'werqwer'),
(6, 1, 216, 'What is the altitude (MASL) of the settlement unit (village/ para/ punji)?', 'asdfasdfasdf'),
(7, 1, 217, 'Comments based on observation (if any)', 'asdfasdf'),
(8, 1, 218, 'If Urban settlement, what is the type and class of settlement type based on population size?', '2'),
(9, 1, 219, 'What is the name of the urban locality (para/ basti/ moholla)?', 'asdfasdf'),
(10, 1, 220, 'What is the latitude of the center of the urban locality (para/ basti/ moholla)?', 'dfdfgdf'),
(11, 1, 221, 'What is the longitude of the center of the urban locality (para/ basti/ moholla)?', 'gdsfgsdfg'),
(12, 1, 222, 'What is the altitude (MASL) of the urban locality (para/ basti/ moholla)?', 'sdfgsdfgsd'),
(13, 1, 223, 'Comments based on observation (if any)', 'sdfgdsfgsdfg');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_b3_infrastructure`
--

CREATE TABLE IF NOT EXISTS `community_section_b_b3_infrastructure` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_b3_infrastructure`
--

INSERT INTO `community_section_b_b3_infrastructure` (`id`, `interview_id`, `question_no`, `question`, `answer`) VALUES
(1, 1, 231, 'How many households (approx.) in the settlement unit (village/ Punji/ para/ basti/ moholla) have access to (=use) safe drinking water?', 'sdfsadf'),
(2, 1, 232, 'What is the size of that community settlement Unit (village/ punji/ para/ basti/ moholla) center?', '4'),
(3, 1, 233, 'What are the major sources of drinking water for the majority population of the settlement unit (villagers/ punji/ para/ basti/ moholla)?', '3'),
(4, 1, 234, 'Others (Describe)', 'asdfsadf'),
(5, 1, 235, 'How many households (approx.) in the settlement unit (village/ punji/ para/ basti/ moholla) have access to electricity (from public or private suppliers)?', 'asdfsdf'),
(6, 1, 236, 'Is there any NGO health center in the settlement unit (village/ Punji/ para/ basti/ moholla)?', '1'),
(7, 1, 237, 'Is there any NGO health center in the settlement unit (village/ Punji/ para/ basti/ moholla)?', 'asdfsdf'),
(8, 1, 238, 'Does the settlement unit (village/ Punji/ para/ basti/ moholla) have at least one road useable by cars during all seasons?', '1'),
(9, 1, 239, 'If â€˜noâ€™: what is the distance in kilometers to the nearest road usable during all seasons?', 'asdfsdf'),
(10, 1, 240, 'Is there a river within the settlement unit (village/ Punji/ para/ basti/ moholla) boundaries that is navigable during all seasons?', '1'),
(11, 1, 241, 'If â€˜noâ€™: what is the distance to the nearest river that is navigable during all seasons?', 'sdfsdf'),
(12, 1, 242, 'What are the available Cell phone Network in the settlement unit (village/ Punji/ para/ basti/ moholla) center?', '3');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_b3_infrastructure_second_parts`
--

CREATE TABLE IF NOT EXISTS `community_section_b_b3_infrastructure_second_parts` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `distance` varchar(25) NOT NULL,
  `transport` varchar(25) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_b3_infrastructure_second_parts`
--

INSERT INTO `community_section_b_b3_infrastructure_second_parts` (`id`, `interview_id`, `question_no`, `question`, `distance`, `transport`, `time`) VALUES
(1, 1, 244, 'Weekly Hat/ Bazaar', 'asdfasf', 'asdfasdf', 'asdf'),
(2, 1, 245, 'Bazaar for buying major consumption goods', 'asdfasdf', 'asdfasdf', 'asdf'),
(3, 1, 246, 'Bazaar where agricultural products are sold', 'asdfasdf', 'asdfasdf', 'asdf'),
(4, 1, 247, 'Primary School', 'asdfasdf', 'asdfasdf', 'asdf'),
(5, 1, 248, 'Secondary School', 'asdfsadf', 'asdfasdf', 'asdfsa'),
(6, 1, 249, 'College', 'asdfsadf', 'asdfsadf', 'asdfsadf');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_b4_demographics`
--

CREATE TABLE IF NOT EXISTS `community_section_b_b4_demographics` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_b4_demographics`
--

INSERT INTO `community_section_b_b4_demographics` (`id`, `interview_id`, `question_no`, `question`, `answer`) VALUES
(14, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(15, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(16, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(17, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(18, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(19, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(20, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(21, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(22, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(23, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(24, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(25, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(26, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(27, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(28, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(29, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(30, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(31, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(32, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(33, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(34, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(35, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(36, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(37, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(38, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(39, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(40, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(41, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(42, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(43, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(44, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(45, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(46, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(47, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(48, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(49, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(50, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(51, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(52, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(53, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(54, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(55, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(56, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(57, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(58, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(59, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(60, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(61, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(62, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(63, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(64, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(65, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(66, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(67, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(68, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(69, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(70, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(71, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(72, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(73, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(74, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(75, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(76, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(77, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(78, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg'),
(79, 1, 251, 'How long ago was the settlement unit (village/punji/ para/ basti/moholla) established?', '1'),
(80, 1, 252, 'How many households live currently in this settlement unit (village/ punji/ para/ basti/ moholla)?', 'sdfgsdfg'),
(81, 1, 253, 'How many households lived in the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 'sdfgsdfgsdfg'),
(82, 1, 254, 'How many households (approx.) living here today/now have moved to the settlement unit (village/ punji/ para/ basti/ moholla) in the past 10 years (in-migration)?', 'dfgsdfgsdfg'),
(83, 1, 255, 'How many households (approx.) have left the settlement unit (village/ punji/ para/ basti/ moholla) over the past 10 years (out-migration)?', 'dfgdsfgsdfg');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_b4_demographic_second_parts`
--

CREATE TABLE IF NOT EXISTS `community_section_b_b4_demographic_second_parts` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_b4_demographic_second_parts`
--

INSERT INTO `community_section_b_b4_demographic_second_parts` (`id`, `interview_id`, `question_no`, `question`, `male`, `female`, `total`) VALUES
(7, 1, 256, 'What is the current population of the settlement unit (village/ punji/ para/ basti/ moholla)?', 89, 55, 44),
(8, 1, 257, 'What was the total population of the settlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 3, 3333, 33);

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_b5_ethnic_cultural_unit_part_fifth`
--

CREATE TABLE IF NOT EXISTS `community_section_b_b5_ethnic_cultural_unit_part_fifth` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans_0` varchar(255) NOT NULL,
  `ans_1` varchar(255) NOT NULL,
  `ans_2` varchar(255) NOT NULL,
  `ans_3` varchar(255) NOT NULL,
  `ans_4` varchar(255) NOT NULL,
  `ans_5` varchar(255) NOT NULL,
  `ans_6` varchar(255) NOT NULL,
  `ans_7` varchar(255) NOT NULL,
  `ans_8` varchar(255) NOT NULL,
  `ans_9` varchar(255) NOT NULL,
  `ans_10` varchar(255) NOT NULL,
  `ans_11` varchar(255) NOT NULL,
  `ans_12` varchar(255) NOT NULL,
  `other` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_b5_ethnic_cultural_unit_part_fifth`
--

INSERT INTO `community_section_b_b5_ethnic_cultural_unit_part_fifth` (`id`, `interview_id`, `question_no`, `question`, `ans_0`, `ans_1`, `ans_2`, `ans_3`, `ans_4`, `ans_5`, `ans_6`, `ans_7`, `ans_8`, `ans_9`, `ans_10`, `ans_11`, `ans_12`, `other`) VALUES
(41, 1, 267, 'What are the basis of community integration of settlement Unit (village/ punji/ para/ basti/ moholla)?', 'Lacking or low compared to community segments or larger polity', 'By common residence only', 'Overlapping Kin ties', 'Common social or economic status', 'Common Identity, dialect, subculture', 'Common political ties', '0', '0', '', '', '', '', '', ''),
(42, 1, 268, 'What are the <b>PROMINENT COMMUNITY CEREMONIALS</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?', 'Rites of passage', 'Calendrical', 'Magical or religious', 'Individual sponsored and communally attended (e.g., potlatch)', '0', '', '', '', '', '', '', '', '', ''),
(43, 1, 269, 'What are the <b>PROMINENT COMMUNITY CEREMONIAL ELEMENTS</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?', 'Feasting and/or drinking', '0', 'Entertainment', '0', 'Sports and Games', '0', '', '', '', '', '', '', '', ''),
(44, 1, 270, 'What is the pattern of <b>COMMUNITY LEADERSHIP</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?', '0', '0', 'Single local leader', 'Dual/plural headmen', '0', 'Local councils', 'Single local leader and subordinates', '0', '0', '', '', '', '', ''),
(45, 1, 271, 'What is the pattern of <b>LOCAL POLITICAL SUCCESSION (PRIMARY)</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?', '0', '0', '0', 'Informal consensus', 'Electoral process', 'Patrilineal', '0', '0', '0', '0', '', '', '', ''),
(46, 1, 272, 'What is the pattern of <b>LOCAL POLITICAL SUCCESSION (SECONDARY UNIT)', '0', '0', '0', 'Informal consensus', '0', 'Patrilineal', 'Matrilineal', '0', '0', '0', '0', '', '', ''),
(47, 1, 273, 'What is the nature of social stratification within the <b>Primary Settlement Unit</b>(village/ punji/ para/ basti/ moholla)</b>?', '0', 'Wealth distinctions', 'Elite (based on control of land or other resources)', '0', '0', '0', '', '', '', '', '', '', '', ''),
(48, 1, 274, 'What is the nature of social stratification within <b>Larger Society</b>?', '0', 'Wealth distinctions', 'Elite (based on control of land or other resources)', '0', '0', '0', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_b5_ethnic_cultural_unit_part_forth`
--

CREATE TABLE IF NOT EXISTS `community_section_b_b5_ethnic_cultural_unit_part_forth` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `total_household` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `total_pupulation` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_b5_ethnic_cultural_unit_part_forth`
--

INSERT INTO `community_section_b_b5_ethnic_cultural_unit_part_forth` (`id`, `interview_id`, `question_no`, `question`, `group_name`, `total_household`, `male`, `female`, `total_pupulation`, `comment`) VALUES
(38, 1, 266, 'Name and number of households of the    MINORITY RELIGIOUS/ CASTES GROUPS living currently in this settlement unit (village/punji/ para/ basti/ moholla)?', 'dfgsd', 123, 234, 234234, 5345, 'qwerqwer'),
(39, 1, 266, 'Name and number of households of the    MINORITY RELIGIOUS/ CASTES GROUPS living currently in this settlement unit (village/punji/ para/ basti/ moholla)?', 'asdfa', 123123, 23445, 345, 345, 'qwerqwer'),
(40, 1, 266, 'Name and number of households of the    MINORITY RELIGIOUS/ CASTES GROUPS living currently in this settlement unit (village/punji/ para/ basti/ moholla)?', 'asdfasdf', 1231, 4535, 345, 23423, 'qwerwqerwqer');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_b5_ethnic_cultural_unit_part_one`
--

CREATE TABLE IF NOT EXISTS `community_section_b_b5_ethnic_cultural_unit_part_one` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_b5_ethnic_cultural_unit_part_one`
--

INSERT INTO `community_section_b_b5_ethnic_cultural_unit_part_one` (`id`, `interview_id`, `question_no`, `question`, `answer`) VALUES
(29, 1, 261, 'How    many different INDIGENOUS/ETHNIC GROUPS are living in the settlement unit (village/para/ basti/ moholla)?', 'asdasdfasdf'),
(30, 1, 263, 'How    many different OCCUPATIONAL GROUPS are living in the settlement unit (village/    para/ basti/ moholla)?', 'asdfasdfasdfasdfasdf'),
(31, 1, 265, 'How many different MINORITY RELIGIOUS/ CASTES GROUPS are living in the settlement unit (village/ para/ basti/ moholla)?', 'asdfasdfasdfsadfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_b5_ethnic_cultural_unit_part_three`
--

CREATE TABLE IF NOT EXISTS `community_section_b_b5_ethnic_cultural_unit_part_three` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `total_household` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `total_pupulation` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_b5_ethnic_cultural_unit_part_three`
--

INSERT INTO `community_section_b_b5_ethnic_cultural_unit_part_three` (`id`, `interview_id`, `question_no`, `question`, `group_name`, `total_household`, `male`, `female`, `total_pupulation`, `comment`) VALUES
(38, 1, 264, 'Name and number of households of the OCCUPATIONAL GROUPS living currently in this settlement unit (village/punji/para/ basti/ moholla)?', 'sdfasdf', 234, 234234, 234234, 2342, 'asdf'),
(39, 1, 264, 'Name and number of households of the OCCUPATIONAL GROUPS living currently in this settlement unit (village/punji/para/ basti/ moholla)?', 'asdfasdf', 234234, 234234, 234234, 234234, 'asdf'),
(40, 1, 264, 'Name and number of households of the OCCUPATIONAL GROUPS living currently in this settlement unit (village/punji/para/ basti/ moholla)?', 'asdfsadf', 234234, 234234, 234234, 234, 'asdfasdf'),
(41, 1, 264, 'Name and number of households of the OCCUPATIONAL GROUPS living currently in this settlement unit (village/punji/para/ basti/ moholla)?', 'asdfsadf', 234234, 234, 234, 234, 'asdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_b5_ethnic_cultural_unit_part_two`
--

CREATE TABLE IF NOT EXISTS `community_section_b_b5_ethnic_cultural_unit_part_two` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `total_household` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `total_pupulation` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_b5_ethnic_cultural_unit_part_two`
--

INSERT INTO `community_section_b_b5_ethnic_cultural_unit_part_two` (`id`, `interview_id`, `question_no`, `question`, `group_name`, `total_household`, `male`, `female`, `total_pupulation`, `comment`) VALUES
(32, 1, 262, 'Name and number of households of the INDIGENOUS/ETHNIC GROUPS livening currently in this settlement unit (village/Punji/ para/ basti/ moholla)?', 'asdfasdf', 23, 21341, 2342, 234, 'asdfasdf'),
(33, 1, 262, 'Name and number of households of the INDIGENOUS/ETHNIC GROUPS livening currently in this settlement unit (village/Punji/ para/ basti/ moholla)?', 'asdfasdf', 234, 234234, 234, 234, 'sdfasdf'),
(34, 1, 262, 'Name and number of households of the INDIGENOUS/ETHNIC GROUPS livening currently in this settlement unit (village/Punji/ para/ basti/ moholla)?', 'asdfsad', 324234, 234, 234, 2342, 'sadfsadf'),
(35, 1, 262, 'Name and number of households of the INDIGENOUS/ETHNIC GROUPS livening currently in this settlement unit (village/Punji/ para/ basti/ moholla)?', 'asdfsad', 24323, 234, 234, 234, 'asdfsdf'),
(36, 1, 262, 'Name and number of households of the INDIGENOUS/ETHNIC GROUPS livening currently in this settlement unit (village/Punji/ para/ basti/ moholla)?', 'asdfsadf', 4234, 234, 34, 234, 'sadfsdf'),
(37, 1, 262, 'Name and number of households of the INDIGENOUS/ETHNIC GROUPS livening currently in this settlement unit (village/Punji/ para/ basti/ moholla)?', 'dhsdfh', 2342, 234, 234, 234999, 'asdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_second_part`
--

CREATE TABLE IF NOT EXISTS `community_section_b_second_part` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `male` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_second_part`
--

INSERT INTO `community_section_b_second_part` (`id`, `interview_id`, `question_no`, `question`, `male`, `female`, `total`) VALUES
(3, 1, 256, 'What is the current population of the primarysettlement unit (village/ punji/ para/ basti/ moholla)?', 12, 123, 123),
(4, 1, 257, 'What was the total population of the primarysettlement unit (village/ punji/ para/ basti/ moholla) 10 years ago?', 123, 123, 123123);

-- --------------------------------------------------------

--
-- Table structure for table `community_section_b_third_part`
--

CREATE TABLE IF NOT EXISTS `community_section_b_third_part` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans_0` varchar(255) NOT NULL,
  `ans_1` varchar(255) NOT NULL,
  `ans_2` varchar(255) NOT NULL,
  `ans_3` varchar(255) NOT NULL,
  `ans_4` varchar(255) NOT NULL,
  `ans_5` varchar(255) NOT NULL,
  `ans_6` varchar(255) NOT NULL,
  `ans_7` varchar(255) NOT NULL,
  `ans_8` varchar(255) NOT NULL,
  `ans_9` varchar(255) NOT NULL,
  `ans_10` varchar(255) NOT NULL,
  `ans_11` varchar(255) NOT NULL,
  `other` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_b_third_part`
--

INSERT INTO `community_section_b_third_part` (`id`, `interview_id`, `question_no`, `question`, `ans_0`, `ans_1`, `ans_2`, `ans_3`, `ans_4`, `ans_5`, `ans_6`, `ans_7`, `ans_8`, `ans_9`, `ans_10`, `ans_11`, `other`) VALUES
(1, 1, 268, 'What are the <b>PROMINENT COMMUNITY CEREMONIALS</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', ''),
(2, 1, 269, 'What are the <b>PROMINENT COMMUNITY CEREMONIAL ELEMENTS</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', ''),
(3, 1, 270, 'What is the pattern of <b>COMMUNITY LEADERSHIP</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?', 'No centralized local leadership', '0', '0', '0', '0', 'Local councils', '0', '0', '0', '', '', '', ''),
(4, 1, 271, 'What is the pattern of <b>LOCAL POLITICAL SUCCESSION (PRIMARY)</b> of that settlement Unit (village/ punji/ para/ basti/ moholla)?', '0', '0', '0', '0', '0', '0', '0', '0', 'Membership of a certain clan', '0', '', '', 'asdasd'),
(5, 1, 272, 'What is the pattern of <b>LOCAL POLITICAL SUCCESSION (SECONDARY UNIT)', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', ''),
(6, 1, 273, 'What is the nature of social stratification within the <b>Primary Settlement Unit</b>(village/ punji/ para/ basti/ moholla)</b>?', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', ''),
(7, 1, 274, 'What is the nature of social stratification within <b>Larger Society</b>?', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_c_part_one`
--

CREATE TABLE IF NOT EXISTS `community_section_c_part_one` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans_0` varchar(255) NOT NULL,
  `ans_1` varchar(255) NOT NULL,
  `ans_2` varchar(255) NOT NULL,
  `ans_3` varchar(255) NOT NULL,
  `ans_4` varchar(255) NOT NULL,
  `ans_5` varchar(255) NOT NULL,
  `ans_6` varchar(255) NOT NULL,
  `ans_7` varchar(255) NOT NULL,
  `ans_8` varchar(255) NOT NULL,
  `ans_9` varchar(255) NOT NULL,
  `ans_10` varchar(255) NOT NULL,
  `other` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_c_part_one`
--

INSERT INTO `community_section_c_part_one` (`id`, `interview_id`, `question_no`, `question`, `ans_0`, `ans_1`, `ans_2`, `ans_3`, `ans_4`, `ans_5`, `ans_6`, `ans_7`, `ans_8`, `ans_9`, `ans_10`, `other`) VALUES
(1, 1, 304, 'What do people of the community understand by the function of marriage?', 'Regulates & legitimizes sexual access', 'Provides means of giving birth to and rearing of children', 'Division of labor between males and females', 'Marriage sets up economic exchange between kin groups', 'Marriage regulates & legitimizes inheritance patterns for children', '0', '0', '0', '', '', '', 'sdfasdf'),
(2, 1, 307, 'What are the modes of exchange (of goods and services) in marriage?', 'Bride Price or wealth, to brideâ€™s family', 'Bride Service, to brideâ€™s family', '0', 'Gift Exchange, reciprocal', '0', '0', '0', '', '0', '', '', ''),
(3, 1, 334, 'What do people of the community understand by the function of marriage?', '0', 'Infertility of wife', 'To get son', '0', '', '', '', '', '', '', '', ''),
(4, 1, 346, 'What are the consequences of Marriage outside the indigenous/ ethnic group for males?', '0', 'Offspring are not accepted as to be own ethnic group member', 'Prohibited but ignored or not addressed', 'Prohibited but accepted if done', '0', 'Prohibited & have to perform certain rituals and sacrifices', '0', '0', '', '', '', ''),
(5, 1, 334, 'What do people of the community understand by the function of marriage?', '0', '0', '0', 'Prohibited but accepted if done', 'Prohibited & have to undergo trial in village or community court', 'Prohibited & have to perform certain rituals and sacrifices', 'Prohibited & expelled from community/ ethnic group', '0', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_c_part_three`
--

CREATE TABLE IF NOT EXISTS `community_section_c_part_three` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `generation` varchar(50) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_c_part_three`
--

INSERT INTO `community_section_c_part_three` (`id`, `interview_id`, `question_no`, `generation`, `question`, `answer`) VALUES
(1, 1, 361, 'Third Generation', 'Ego''s Father''s Father', 'asdfasdf'),
(2, 1, 361, 'Third Generation', 'Ego''s Father''s Mother', 'asdfasdfa'),
(3, 1, 361, 'Third Generation', 'Ego''s Mother''s Father', 'asdfasdf'),
(4, 1, 361, 'Third Generation', 'Ego''s Mother''s Mother', 'asdfasdfasdf'),
(5, 1, 361, 'Second Generation', 'Ego''s Mother', 'asdfasdf'),
(6, 1, 361, 'Second Generation', 'Ego''s Father''s Elder Brother', 'asdffb'),
(7, 1, 361, 'Second Generation', 'Ego''s Father''s Elder Brother''s Wife', 'fgh'),
(8, 1, 361, 'Second Generation', 'Ego''s Father''s Younger Brother', 'dfhgert'),
(9, 1, 361, 'Second Generation', 'Ego''s Father''s Younger Brother''s Wife', 'ADEasd'),
(10, 1, 361, 'Second Generation', 'Ego''s Father''s Elder Sister', 'ASDF'),
(11, 1, 361, 'Second Generation', 'Ego''s Father''s Elder Sister''s Husband', 'XCVDC'),
(12, 1, 361, 'Second Generation', 'Ego''s Father''s Younger Sister', 'Wawd'),
(13, 1, 361, 'Second Generation', 'Ego''s Father''s Younger Sister''s HusbandEgo''s Mother''s Elder Brother', 'ASDasd'),
(14, 1, 361, 'Second Generation', 'Ego''s Mother''s Elder Brother''s Wife', 'ASDXCV'),
(15, 1, 361, 'Second Generation', 'Ego''s Mother''s Elder Brother', 'EFE'),
(16, 1, 361, 'Second Generation', 'Ego''s Mother''s Younger Brother''s Wife', 'were'),
(17, 1, 361, 'Second Generation', 'Ego''s Mother''s Elder Sister', 'asdfasf'),
(18, 1, 361, 'Second Generation', 'Ego''s Mother''s Elder Sister''s Husband', 'asdfasd'),
(19, 1, 361, 'Second Generation', 'go''s Mother''s Younger Sister', 'asdfasd'),
(20, 1, 361, 'Second Generation', 'Ego''s Mother''s Younger Sister''s Husband', 'asdfasdf'),
(21, 1, 361, 'Second Generation', 'go''s Mother''s Younger Sister', 'qwer'),
(22, 1, 361, 'Second Generation', 'Ego''s Mother''s Younger Sister''s Husband', 'sdfsadf'),
(23, 1, 361, 'Own Generation', 'Ego''s Elder Brother', 'sdfasdf'),
(24, 1, 361, 'Own Generation', 'Ego''s Elder Brother', 'asdfasdf'),
(25, 1, 361, 'Own Generation', 'Ego''s Younger Brother', 'asdfasdf'),
(26, 1, 361, 'Own Generation', 'Ego''s Elder Sister', 'asdfasdf'),
(27, 1, 361, 'Own Generation', 'Ego''s Younger Sister', 'asdfasdf'),
(28, 1, 361, 'Own Generation', 'Ego''s Father''s Sister''s Son', 'asdfasdf'),
(29, 1, 361, 'Own Generation', 'Ego''s Father''s Sister''s Daughter', 'asdfsadf'),
(30, 1, 361, 'Own Generation', 'Ego''s Father''s Brother''s Son', 'asdfasdf'),
(31, 1, 361, 'Own Generation', 'Ego''s Father''s Brother''s Daughter', 'asdfasdf'),
(32, 1, 361, 'Own Generation', 'Ego''s Mother''s Sister''s Son', 'sadfsadf'),
(33, 1, 361, 'Own Generation', 'Ego''s Mother''s Sister''s Daughter', 'asdfsadf'),
(34, 1, 361, 'Own Generation', 'Ego''s Mother''s Brother''s Son', 'asdfsadf'),
(35, 1, 361, 'Own Generation', 'Ego''s Mother''s Brother''s Daughter ', 'asdfsadfgsdgsdg'),
(36, 1, 361, 'Third Generation', 'Ego''s Son', 'asdfasdf'),
(37, 1, 361, 'Third Generation', 'Ego''s Daughter', 'asdfsad'),
(38, 1, 361, 'Third Generation', 'Ego''s Son', 'asdfsadf'),
(39, 1, 361, 'Third Generation', 'Ego''s Daughter', 'asdfsadf'),
(40, 1, 361, 'Third Generation', 'Ego''s Sister''s Son', 'sadfsdf'),
(41, 1, 361, 'Third Generation', 'Ego''s Sister''s Daughter', 'asdfsadf'),
(42, 1, 361, 'Third Generation', 'Ego''s Brother''s Son', 'asdfsadf'),
(43, 1, 361, 'Third Generation', 'Ego''s Brother''s Daughter', 'asdfsadf'),
(44, 1, 361, 'Third Generation', 'Ego''s Cousin Sister''s Son', 'sadfsdf'),
(45, 1, 361, 'Third Generation', 'Ego''s Cousin Sister''s Daughter', 'sadfsdf'),
(46, 1, 361, 'Third Generation', 'Ego''s Cousin Brother''s Son', 'sadfsdf'),
(47, 1, 361, 'Third Generation', 'Ego''s Cousin Brother''s Daughter', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `community_section_c_part_two`
--

CREATE TABLE IF NOT EXISTS `community_section_c_part_two` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_no` int(4) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `community_section_c_part_two`
--

INSERT INTO `community_section_c_part_two` (`id`, `interview_id`, `question_no`, `question`, `answer`) VALUES
(1, 1, 301, 'Age of Woman at Establishment of marriage: first marriage', '3'),
(2, 1, 302, 'Age of Man at Establishment of marriage: first marriage', '3'),
(3, 1, 303, 'Degree of marriage celebration', '2'),
(4, 1, 305, 'What kind of regulation is used for executing marriage agreements?', '3'),
(5, 1, 306, 'Who presides over marriage ceremony or performs marriage rituals? ', '2'),
(6, 1, 308, 'What kind of regulation is used for executing marriage agreements?', '3'),
(7, 1, 309, 'Who presides over marriage ceremony or performs marriage rituals? ', '2'),
(8, 1, 310, 'What is the composition of domestic organization?', '7'),
(9, 1, 311, 'What is the type of post marital residence with kins within first year of marriage?', '3'),
(10, 1, 312, 'What is the type of post marital residence with kins after first year of marriage?', '6'),
(11, 1, 313, 'What is the way of organizing marriage in the community?', '4'),
(12, 1, 314, 'What is the major type of descent?', '0'),
(13, 1, 315, 'What is the Largest Patrilineal Kin Group?', '3'),
(14, 1, 316, 'What is the Largest Patrilineal Exogamous Group (If Different from previous question)?', '4'),
(15, 1, 317, 'What is the Largest Matrilineal Kin Group?', '3'),
(16, 1, 318, 'What is the Largest Matrilineal Exogamous Group (If Different from previous question)?', '3'),
(17, 1, 319, 'What is the Largest Kin Group (if not the Patrilineal and Matrilineal ones)/', '4'),
(18, 1, 320, 'What is the form of cousin marriages (If practiced or allowed)?', '6'),
(19, 1, 321, 'What is the subtype of cousin marriages (If practiced or allowed)?', '4'),
(20, 1, 322, 'Whether cousin marriages are preferred rather than just permitted? ', '5'),
(21, 1, 323, 'What are the subtypes of cousin marriages (Preferred rather than just Permitted)?', '4'),
(22, 1, 331, 'Attitude towards Divorce', '4'),
(23, 1, 332, 'Frequency of Divorce', '2'),
(24, 1, 333, 'Can men in your community marry more than once in presence of first wife?', '1'),
(25, 1, 335, 'Is it necessary to obtain the permission from the first wife for second marriage?', '2'),
(26, 1, 336, 'Can women in your community remarry if divorced/ separated/ widowed?', '2'),
(27, 1, 337, 'Widow Remarriage: Choice of Partner', '2'),
(28, 1, 338, 'Frequency of premarital sexual behavior of Males?', '1'),
(29, 1, 339, 'Frequency of premarital sexual behavior of Females?', '1'),
(30, 1, 340, 'What are the Norms of Premarital Sexual Behavior of Boys?', '1'),
(31, 1, 341, 'What are the Norms of Premarital Sexual Behavior of Girls?', '4'),
(32, 1, 342, 'Frequency of Post-marital/ Extramarital sexual behavior of Males?', '3'),
(33, 1, 343, 'Frequency of Post-marital/ Extramarital sexual behavior of Females?', '3'),
(34, 1, 344, 'What are the Norms of Postmarital Sexual Behavior of men? ', '2'),
(35, 1, 345, 'What are the Norms of Postmarital Sexual Behavior of women? ', '1'),
(36, 1, 351, 'What is the Inheritance Rule for Real Property (Land)?', '1'),
(37, 1, 352, 'What is the Inheritance Distribution for Real Property (Land)?', '2'),
(38, 1, 353, 'What is the Inheritance Rule for Movable Property?', '0'),
(39, 1, 354, 'What is the Inheritance Distribution for Movable Property?', '1'),
(40, 1, 362, 'What is the type of kinship terms for cousins? ', '6'),
(41, 1, 362, 'What is the type of kinship terms for cousins? ', '3');

-- --------------------------------------------------------

--
-- Table structure for table `comm_section_a_constructions`
--

CREATE TABLE IF NOT EXISTS `comm_section_a_constructions` (
  `id` int(11) NOT NULL,
  `question_no` int(4) NOT NULL,
  `role` varchar(150) NOT NULL,
  `role_value` varchar(255) NOT NULL,
  `personal_information_id` int(11) NOT NULL,
  `other` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comm_section_a_constructions`
--

INSERT INTO `comm_section_a_constructions` (`id`, `question_no`, `role`, `role_value`, `personal_information_id`, `other`) VALUES
(1, 501, 'How many rooms are there in the Dwelling?', '', 1, ''),
(2, 502, 'What is the Type of Ground Plan of the Prevailing Dwelling?', '0', 1, ''),
(3, 503, 'What is the Type of Floor Level of the Prevailing Dwelling?', '0', 1, ''),
(4, 504, 'What is the Type of Wall Material of the Prevailing Dwelling?', '1', 1, ''),
(5, 505, 'What is the Type of Roofing Materials of the Prevailing Dwelling? ', '0', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `comm_section_a_data_files`
--

CREATE TABLE IF NOT EXISTS `comm_section_a_data_files` (
  `id` int(11) NOT NULL,
  `personal_information_id` int(11) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `topic_a` varchar(250) NOT NULL,
  `file_name_a` varchar(200) NOT NULL,
  `folder_name_a` varchar(200) NOT NULL,
  `topic_a_1` varchar(250) NOT NULL,
  `file_name_a_1` varchar(200) NOT NULL,
  `folder_name_a_1` varchar(200) NOT NULL,
  `topic_a_2` varchar(250) NOT NULL,
  `file_name_a_2` varchar(200) NOT NULL,
  `folder_name_a_2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comm_section_a_data_files`
--

INSERT INTO `comm_section_a_data_files` (`id`, `personal_information_id`, `file_type`, `topic_a`, `file_name_a`, `folder_name_a`, `topic_a_1`, `file_name_a_1`, `folder_name_a_1`, `topic_a_2`, `file_name_a_2`, `folder_name_a_2`) VALUES
(0, 0, 'Audio Recordings', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Video Footage', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Photographs', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Audio Recordings', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Video Footage', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Photographs', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Audio Recordings', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Video Footage', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Photographs', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comm_section_a_quality_controls`
--

CREATE TABLE IF NOT EXISTS `comm_section_a_quality_controls` (
  `id` int(11) NOT NULL,
  `personal_information_id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `by_whom` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comm_section_a_quality_controls`
--

INSERT INTO `comm_section_a_quality_controls` (`id`, `personal_information_id`, `task`, `date`, `by_whom`, `status`) VALUES
(0, 0, 'Field Supervision ', '', '', ''),
(0, 0, 'Checking and Submission', '', '', ''),
(0, 0, 'Reviewing and Finalize ', '', '', ''),
(0, 0, 'Error Checking & Probing ', '', '', ''),
(0, 0, 'Accepted for Processing', '', '', ''),
(0, 0, 'Field Supervision ', '', '', ''),
(0, 0, 'Checking and Submission', '', '', ''),
(0, 0, 'Reviewing and Finalize ', '', '', ''),
(0, 0, 'Error Checking & Probing ', '', '', ''),
(0, 0, 'Accepted for Processing', '', '', ''),
(0, 0, 'Field Supervision ', '', '', ''),
(0, 0, 'Checking and Submission', '', '', ''),
(0, 0, 'Reviewing and Finalize ', '', '', ''),
(0, 0, 'Error Checking & Probing ', '', '', ''),
(0, 0, 'Accepted for Processing', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comm_section_a_reference_informations`
--

CREATE TABLE IF NOT EXISTS `comm_section_a_reference_informations` (
  `id` int(11) NOT NULL,
  `personal_information_id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `by_whom` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comm_section_a_respondent_informations`
--

CREATE TABLE IF NOT EXISTS `comm_section_a_respondent_informations` (
  `id` int(11) NOT NULL,
  `personal_information_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `participant_a` varchar(150) NOT NULL,
  `designation_a` varchar(100) NOT NULL,
  `phone_number_a` varchar(20) NOT NULL,
  `participant_a_2` varchar(20) NOT NULL,
  `designation_a_2` varchar(100) NOT NULL,
  `phone_number_a_2` varchar(20) NOT NULL,
  `participant_a_3` varchar(100) NOT NULL,
  `designation_a_3` varchar(100) NOT NULL,
  `phone_number_a_3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comm_section_a_respondent_informations`
--

INSERT INTO `comm_section_a_respondent_informations` (`id`, `personal_information_id`, `category`, `participant_a`, `designation_a`, `phone_number_a`, `participant_a_2`, `designation_a_2`, `phone_number_a_2`, `participant_a_3`, `designation_a_3`, `phone_number_a_3`) VALUES
(0, 0, 'GO Officials', '', '', '', '', '', '', '', '', ''),
(0, 0, 'NGO Officials', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Local Government', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Group Discussion', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Community Key Informants', '', '', '', '', '', '', '', '', ''),
(0, 0, 'GO Officials', '', '', '', '', '', '', '', '', ''),
(0, 0, 'NGO Officials', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Local Government', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Group Discussion', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Community Key Informants', '', '', '', '', '', '', '', '', ''),
(0, 0, 'GO Officials', '', '', '', '', '', '', '', '', ''),
(0, 0, 'NGO Officials', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Local Government', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Group Discussion', '', '', '', '', '', '', '', '', ''),
(0, 0, 'Community Key Informants', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comm_section_d_dropdown`
--

CREATE TABLE IF NOT EXISTS `comm_section_d_dropdown` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question_401` varchar(100) DEFAULT NULL,
  `question_41_other` varchar(100) DEFAULT NULL,
  `question_0` varchar(100) DEFAULT NULL,
  `question_0_other` varchar(100) DEFAULT NULL,
  `question_1` varchar(100) DEFAULT NULL,
  `question_1_other` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comm_section_f`
--

CREATE TABLE IF NOT EXISTS `comm_section_f` (
  `id` int(11) NOT NULL,
  `question_no` int(4) NOT NULL,
  `question` varchar(150) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `personal_information_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comm_section_f`
--

INSERT INTO `comm_section_f` (`id`, `question_no`, `question`, `answer`, `personal_information_id`) VALUES
(1, 601, 'What are the types of <b>Jurisdictional Hierarchy</b> within and beyond local community?', '1', 1),
(2, 602, 'What is the type of <b>Administrative Hierarchy</b> in the ethnic specific political system? ', '', 1),
(3, 611, 'What is the Succession to the Office of Local Village head? (Lowest Level Co-residential Unit)', '', 1),
(4, 612, 'What is the <b>Type of Hereditary Succession</b> to the Office of Local Village head? (Lowest Level Co-residential Unit)', '', 1),
(5, 613, 'What is the Succession to the Office of the Mouza Head/ Headman? (Secondary Level Unit)', '', 1),
(6, 614, 'What is the <b>Type of Hereditary Succession</b> to the Office of the Union/ Pargana/ Mouza Head/ Headman? (Secondary Level Unit', '', 1),
(7, 621, 'Political Role Differentiation: Full Time Specialists and their Differentiation from Others in the Society', '', 1),
(8, 622, 'Political and Religious Differentiation', '0', 1),
(9, 623, 'Perceptions of Political Leaders Benevolence as seen by Society', '0', 1),
(10, 624, 'Removal of Leaders who are incompetent or disliked', '2', 1),
(11, 625, 'Decision Making Bodies: How most decisions are made', '1', 1),
(12, 626, 'Political Participation: Range of Community Decision Making, which may be of a formal or informal nature', '0', 1),
(13, 627, 'Conflict (Social or Political) in the Local Community', '0', 1),
(14, 628, 'Dominant Mode of Conflict Management in Local Community (Lowest Level Co-residential Unit)', '0', 1),
(15, 629, 'Dominant Mode of Conflict Management in Local Community (Secondary Level regional Unit)', '0', 1),
(16, 630, 'Conflict (Social or Political) between members of different indigenous ethnic groups', '1', 1),
(17, 631, 'Dominant Mode of Conflict Management between members of different indigenous ethnic groups.', '1', 1),
(18, 632, 'Formal Sanctions and Enforcement Specialists for Community Decisions (e.g., Police)', '1', 1),
(19, 633, 'Conflict (Social or Political) between members of indigenous ethnic groups and Majority (Bangali) People', '0', 1),
(20, 634, 'Dominant Mode of Conflict Management between members of indigenous ethnic groups and Majority (Bangali) Ethnic group', '3', 1),
(21, 635, 'Attitude towards the members of other indigenous ethnic groups', '0', 1),
(22, 636, 'Attitude towards the members of Majority (Bangali) Ethnic Group', '0', 1),
(23, 637, 'Contact with the members of other indigenous ethnic groups', '1', 1),
(24, 638, 'Contact with the members of Majority (Bangali) Ethnic Group', '0', 1),
(25, 639, 'Female Participation in Public Political Arenas, Relative to Males', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comparaison_marker`
--

CREATE TABLE IF NOT EXISTS `comparaison_marker` (
  `id` int(11) NOT NULL,
  `attribute_values` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `bangla_equivalent` varchar(100) DEFAULT NULL,
  `english_equivalent` varchar(100) DEFAULT NULL,
  `target_ipa` varchar(100) DEFAULT NULL,
  `personnel_information_id` int(11) DEFAULT NULL,
  `table_attribute_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comparaison_marker`
--

INSERT INTO `comparaison_marker` (`id`, `attribute_values`, `status`, `bangla_equivalent`, `english_equivalent`, `target_ipa`, `personnel_information_id`, `table_attribute_type`) VALUES
(1, 'i. marks plural', 0, 'à¦¬à¦¾à¦–à¦¾à¦°-à¦¬à¦¾à¦–à¦¾à¦°', 'many', 'bakÊ°ar-bakÊ°ar ', 18, 'reduplication_marker'),
(2, 'ii. aspect', 0, 'à¦®à¦°-à¦®à¦°', '', 'mor-mor', 18, 'reduplication_marker'),
(3, 'iii. emphatic', NULL, '', '', '', 18, 'reduplication_marker'),
(4, 'iv. importance', NULL, 'à¦¬à¦¾à¦–à¦¾à¦°-à¦¬à¦¾à¦–à¦¾à¦°', '', 'bakÊ°ar-bakÊ°ar', 18, 'reduplication_marker'),
(5, 'Other(specify)', NULL, '', '', '', 18, 'reduplication_marker'),
(6, 'Male', 0, ' à¦®à¦°à¦¦', '', 'morodÌª', 18, 'gender_marker'),
(7, 'Female', 0, 'à¦¤à¦¿à¦®à¦¥', '', ' tÌªimotÌªÊ°', 18, 'gender_marker'),
(8, 'Neuter', 0, 'à¦¸à¦¾à¦“à§Ÿà¦¾', '', 'saoa', 18, 'gender_marker'),
(9, 'Other', NULL, '', '', '', 18, 'gender_marker'),
(10, 'i. singular-plural', 0, 'à¦®à¦°à¦¦-à¦®à¦°à¦¦à¦—à§à¦²à¦¾', '', '', 18, 'number_marker'),
(11, 'ii. singular-dual- plural', 0, 'à¦¦à§à¦‡à¦¦à¦¾à¦¹  à¦•à¦²à¦¸à¦¾', '', '', 18, 'number_marker'),
(12, 'iii. other(specify)', NULL, '', '', '', 18, 'number_marker'),
(13, 'i. marks plural', 0, 'a', 'b', 'c', 2, 'reduplication_marker'),
(14, 'ii. aspect', 1, 'a', 'b', 'c', 2, 'reduplication_marker'),
(15, 'iii. emphatic', 0, 'a', 'b', 'c', 2, 'reduplication_marker'),
(16, 'iv. importance', 1, 'a', 'b', 'c', 2, 'reduplication_marker'),
(17, 'Other(specify)', 0, 'a', 'b', 'c', 2, 'reduplication_marker'),
(18, 'Male', 0, 'a', 'b', 'a', 2, 'gender_marker'),
(19, 'Female', 1, 'a', 'b', 'a', 2, 'gender_marker'),
(20, 'Neuter', 0, 'a', 'b', 'a', 2, 'gender_marker'),
(21, 'Other', 1, 'a', 'b', 'a', 2, 'gender_marker'),
(22, 'i. singular-plural', 0, 'aa', 'b', 'c', 2, 'number_marker'),
(23, 'ii. singular-dual- plural', 1, 'a', 'b', 'c', 2, 'number_marker'),
(24, 'iii. other(specify)', 0, 'a', 'b', 'c', 2, 'number_marker'),
(25, 'i. initial', 0, 'aa', NULL, 'bb', 2, 'location_marker'),
(26, 'ii. immediately preverbal position', 1, 'a', NULL, 'bb', 2, 'location_marker'),
(27, 'iii. in situ', 0, 'aa', NULL, 'bb', 2, 'location_marker'),
(28, 'iv. other', 1, 'aaa', NULL, 'bb', 2, 'location_marker'),
(29, 'i. SOV', 0, 'a', 'p', 'p', 2, 'word_order_marker'),
(30, 'ii. SOV/rigid', 1, 'a', 'b', 'b', 2, 'word_order_marker'),
(31, 'iii. c)SOV/free', 0, 'a', 'b', 'b', 2, 'word_order_marker'),
(32, 'iv. SVO', 1, 'a', 'b', 'b', 2, 'word_order_marker'),
(33, 'v. SVO/free', 0, 'a', 'b', 'b', 2, 'word_order_marker'),
(34, 'vi. SVO/V2 â€“ verb second', 1, 'a', 'b', 'b', 2, 'word_order_marker'),
(35, 'vii. VSO', 0, 'a', 'b', 'd', 2, 'word_order_marker'),
(36, 'viii. VOS', 1, 'a', 'b', 'd', 2, 'word_order_marker'),
(37, 'ix. OVS', 0, 'a', 'b', 'd', 2, 'word_order_marker'),
(38, 'x. OSV', 1, 'a', 'b', 'd', 2, 'word_order_marker'),
(39, 'xi. V1 â€“ verb initial', 0, 'a', 'b', 'd', 2, 'word_order_marker'),
(40, 'xii. V2 â€“ verb second', 0, 'a', 'b', 'd', 2, 'word_order_marker'),
(41, 'xiii. free second', 0, 'a', 'b', 'd', 2, 'word_order_marker'),
(42, 'xiv. other', 0, 'a', 'b', 'd', 2, 'word_order_marker');

-- --------------------------------------------------------

--
-- Table structure for table `com_section_d_402`
--

CREATE TABLE IF NOT EXISTS `com_section_d_402` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `dependencies` varchar(100) DEFAULT NULL,
  `agriculture` varchar(100) DEFAULT NULL,
  `service_labor_selling` varchar(100) DEFAULT NULL,
  `handicrafts` varchar(100) DEFAULT NULL,
  `horticulture` varchar(100) DEFAULT NULL,
  `fishing_animal` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `difference_list`
--

CREATE TABLE IF NOT EXISTS `difference_list` (
  `id` int(11) NOT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `difference_name` varchar(100) DEFAULT NULL,
  `choice` int(11) DEFAULT NULL,
  `past` varchar(100) DEFAULT NULL,
  `present` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `difference_list`
--

INSERT INTO `difference_list` (`id`, `personnel_information_id`, `difference_name`, `choice`, `past`, `present`) VALUES
(1, 18, 'Pronunciation', 1, '', ''),
(2, 18, 'Vocabulary', 1, '', ''),
(3, 18, 'Use of specific type of sentences', 1, '', ''),
(4, 18, 'Mixing of other language', 1, '', ''),
(5, 18, 'Way of speaking', 1, '', ''),
(6, 18, 'Other', 1, '', ''),
(7, 2, 'Pronunciation', NULL, '', ''),
(8, 2, 'Vocabulary', 1, '', ''),
(9, 2, 'Use of specific type of sentences', NULL, '', ''),
(10, 2, 'Mixing of other language', 0, '', ''),
(11, 2, 'Way of speaking', NULL, '', ''),
(12, 2, 'Other', NULL, '', ''),
(13, 19, 'Pronunciation', NULL, '', ''),
(14, 19, 'Vocabulary', NULL, '', ''),
(15, 19, 'Use of specific type of sentences', NULL, '', ''),
(16, 19, 'Mixing of other language', NULL, '', ''),
(17, 19, 'Way of speaking', NULL, '', ''),
(18, 19, 'Other', NULL, '', ''),
(19, 21, 'Pronunciation', NULL, '', ''),
(20, 21, 'Vocabulary', NULL, '', ''),
(21, 21, 'Use of specific type of sentences', NULL, '', ''),
(22, 21, 'Mixing of other language', NULL, '', ''),
(23, 21, 'Way of speaking', NULL, '', ''),
(24, 21, 'Other', NULL, '', ''),
(25, 22, 'Pronunciation', 0, '', ''),
(26, 22, 'Vocabulary', 0, 'curut', 'biri'),
(27, 22, 'Use of specific type of sentences', 1, '', ''),
(28, 22, 'Mixing of other language', 1, '', ''),
(29, 22, 'Way of speaking', NULL, '', ''),
(30, 22, 'Other', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `domain_language_tongue`
--

CREATE TABLE IF NOT EXISTS `domain_language_tongue` (
  `id` int(11) NOT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `domain_name` varchar(100) DEFAULT NULL,
  `mother_tongue` varchar(100) DEFAULT NULL,
  `language_2_3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domain_language_tongue`
--

INSERT INTO `domain_language_tongue` (`id`, `personnel_information_id`, `domain_name`, `mother_tongue`, `language_2_3`) VALUES
(1, 18, 'Counting', '', 'Bangla'),
(2, 18, 'Singing', '', 'Bangla'),
(3, 18, 'joking', 'Banai', ''),
(4, 18, 'Shopping', '', 'Bangla'),
(5, 18, 'Story telling', 'Banai', ''),
(6, 18, 'Discussing', 'Banai', ''),
(7, 18, 'praying', '', 'Bangla'),
(8, 18, 'Quarrelling', 'Banai', ''),
(9, 18, 'Abusing/scolding', 'Banai', ''),
(10, 18, 'Family gathering', 'Banai', ''),
(11, 18, 'Village meeting', 'Banai', ''),
(12, 2, 'Counting', '', ''),
(13, 2, 'Singing', '', ''),
(14, 2, 'joking', '', ''),
(15, 2, 'Shopping', '', ''),
(16, 2, 'Story telling', '', ''),
(17, 2, 'Discussing', '', ''),
(18, 2, 'praying', '', ''),
(19, 2, 'Quarrelling', '', ''),
(20, 2, 'Abusing/scolding', '', ''),
(21, 2, 'Family gathering', '', ''),
(22, 2, 'Village meeting', '', ''),
(23, 19, 'Counting', '', 'Bangla,Garo'),
(24, 19, 'Singing', '', 'Bangla,Garo'),
(25, 19, 'joking', '', 'Bangla,Garo'),
(26, 19, 'Shopping', '', 'Bangla,Garo'),
(27, 19, 'Story telling', '', 'Bangla,Garo'),
(28, 19, 'Discussing', '', 'Bangla,Garo'),
(29, 19, 'praying', '', 'Bangla,Garo'),
(30, 19, 'Quarrelling', '', 'Bangla,Garo'),
(31, 19, 'Abusing/scolding', '', 'Bangla,Garo'),
(32, 19, 'Family gathering', 'Banai', ''),
(33, 19, 'Village meeting', '', 'Bangla'),
(34, 21, 'Counting', '', 'Bangla,Garo'),
(35, 21, 'Singing', '', 'Bangla,Garo'),
(36, 21, 'joking', '', 'Bangla,Garo'),
(37, 21, 'Shopping', '', 'Bangla,Garo'),
(38, 21, 'Story telling', '', 'Bangla,Garo'),
(39, 21, 'Discussing', '', 'Bangla,Garo'),
(40, 21, 'praying', '', 'Bangla,Garo'),
(41, 21, 'Quarrelling', '', 'Bangla,Garo'),
(42, 21, 'Abusing/scolding', '', 'Bangla,Garo'),
(43, 21, 'Family gathering', 'Banai', ''),
(44, 21, 'Village meeting', '', 'Bangla'),
(45, 22, 'Counting', '', 'Bangla'),
(46, 22, 'Singing', '', 'banla'),
(47, 22, 'joking', '', 'bangla'),
(48, 22, 'Shopping', '', 'bangla'),
(49, 22, 'Story telling', '', 'bangla'),
(50, 22, 'Discussing', '', 'bangla'),
(51, 22, 'praying', '', 'bangla'),
(52, 22, 'Quarrelling', '', 'bangla'),
(53, 22, 'Abusing/scolding', '', 'bangla'),
(54, 22, 'Family gathering', '', 'bangla'),
(55, 22, 'Village meeting', '', 'bangla');

-- --------------------------------------------------------

--
-- Table structure for table `dominions`
--

CREATE TABLE IF NOT EXISTS `dominions` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dominions`
--

INSERT INTO `dominions` (`id`, `name`) VALUES
('53141557-020c-4f2f-b628-0d43f8defb25', 'Pages'),
('53141565-e924-4ee7-b6ba-0939f8defb25', 'Permissions'),
('531415c7-d874-48b5-9b69-0931f8defb25', 'Profiles'),
('531415ff-0e3c-42d9-b5e2-0d43f8defb25', 'Users'),
('5316b4f6-80c4-4e4b-be27-0936f8defb25', 'Dominions'),
('5316e2f3-ac88-4b7c-923c-3e23f8defb25', 'AuthorizedMenus'),
('5316e4a7-965c-4213-9cab-3e22f8defb25', 'Roles'),
('5492b8c5-291c-452d-bc3a-0544f8defb25', 'Processes');

-- --------------------------------------------------------

--
-- Table structure for table `feature_of_consonant_sounds`
--

CREATE TABLE IF NOT EXISTS `feature_of_consonant_sounds` (
  `id` int(11) NOT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `polsive_p` varchar(100) DEFAULT NULL,
  `polsive_t` varchar(100) DEFAULT NULL,
  `polsive_k` varchar(100) DEFAULT NULL,
  `polsive_b` varchar(100) DEFAULT NULL,
  `polsive_d` varchar(100) DEFAULT NULL,
  `polsive_g` varchar(100) DEFAULT NULL,
  `nasal_m` varchar(100) DEFAULT NULL,
  `nasal_n` varchar(100) DEFAULT NULL,
  `nasal_last` varchar(100) DEFAULT NULL,
  `fricative_f` varchar(100) DEFAULT NULL,
  `fricative_f_next` varchar(100) DEFAULT NULL,
  `fricative_s` varchar(100) DEFAULT NULL,
  `fricative_integration` varchar(100) DEFAULT NULL,
  `fricative_h` varchar(100) DEFAULT NULL,
  `fricative_voiced_v` varchar(100) DEFAULT NULL,
  `fricative_voiced_sigma` varchar(100) DEFAULT NULL,
  `fricative_voiced_sigma_z` varchar(100) DEFAULT NULL,
  `fricative_voiced_last` varchar(100) DEFAULT NULL,
  `fricative_voiceless_tf` varchar(100) DEFAULT NULL,
  `fricative_voiced_dz` varchar(100) DEFAULT NULL,
  `approximant_w` varchar(100) DEFAULT NULL,
  `approximant_r` varchar(100) DEFAULT NULL,
  `approximant_j` varchar(100) DEFAULT NULL,
  `lateral_l` varchar(100) DEFAULT NULL,
  `lateral_j` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature_of_consonant_sounds`
--

INSERT INTO `feature_of_consonant_sounds` (`id`, `personnel_information_id`, `polsive_p`, `polsive_t`, `polsive_k`, `polsive_b`, `polsive_d`, `polsive_g`, `nasal_m`, `nasal_n`, `nasal_last`, `fricative_f`, `fricative_f_next`, `fricative_s`, `fricative_integration`, `fricative_h`, `fricative_voiced_v`, `fricative_voiced_sigma`, `fricative_voiced_sigma_z`, `fricative_voiced_last`, `fricative_voiceless_tf`, `fricative_voiced_dz`, `approximant_w`, `approximant_r`, `approximant_j`, `lateral_l`, `lateral_j`) VALUES
(1, 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 2, '1', '3', '3', '1', '3', '3', '4', '4', '4', '2', '2', '2', '2', '2', '5', '5', '5', '5', '1', '1', '1', '1', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `feature_of_vowel_sounds`
--

CREATE TABLE IF NOT EXISTS `feature_of_vowel_sounds` (
  `id` int(11) NOT NULL,
  `vowel_i` varchar(100) DEFAULT NULL,
  `vowel_e` varchar(100) DEFAULT NULL,
  `vowel_a` varchar(100) DEFAULT NULL,
  `vowel_c` varchar(100) DEFAULT NULL,
  `vowel_o` varchar(100) DEFAULT NULL,
  `vowel_u` varchar(100) DEFAULT NULL,
  `articulation` varchar(100) DEFAULT NULL,
  `personnel_information_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature_of_vowel_sounds`
--

INSERT INTO `feature_of_vowel_sounds` (`id`, `vowel_i`, `vowel_e`, `vowel_a`, `vowel_c`, `vowel_o`, `vowel_u`, `articulation`, `personnel_information_id`) VALUES
(1, '', '', '', '', '', '', 'Sonorant', 19),
(2, '', '', '', '', '', '', 'Syllabic', 19),
(3, '', '', '', '', '', '', 'Voiced', 19),
(4, '', '', '', '', '', '', 'High', 19),
(5, '', '', '', '', '', '', 'Low', 19),
(6, '', '', '', '', '', '', 'Back', 19),
(7, '', '', '', '', '', '', 'Round', 19),
(8, '', '', '', '', '', '', 'Tense', 19),
(9, '1', '1', '1', '1', '1', '1', 'Sonorant', 18),
(10, '1', '1', '1', '1', '1', '1', 'Syllabic', 18),
(11, '1', '1', '1', '1', '1', '1', 'Voiced', 18),
(12, '1', '1', '0', '0', '1', '1', 'High', 18),
(13, '0', '0', '1', '1', '0', '0', 'Low', 18),
(14, '0', '0', '0', '1', '1', '1', 'Back', 18),
(15, '0', '0', '0', '1', '1', '1', 'Round', 18),
(16, '0', '0', '0', '0', '0', '0', 'Tense', 18),
(17, 'a', 'a', 'a', 'a', 'a', 'a', 'Sonorant', 2),
(18, 'b', 'b', 'b', 'b', 'b', 'b', 'Syllabic', 2),
(19, 'v', 'c', 'c', 'c', 'c', 'c', 'Voiced', 2),
(20, 'a', 'a', 'a', 'a', 'a', 'a', 'High', 2),
(21, 'b', 'b', 'b', 'b', 'b', 'b', 'Low', 2),
(22, 'f', 'f', 'f', 'f', 'f', 'f', 'Back', 2),
(23, 'g', 'g', 'g', 'g', 'g', 'g', 'Round', 2),
(24, 'd', 'd', 'd', 'd', 'd', 'd', 'Tense', 2);

-- --------------------------------------------------------

--
-- Table structure for table `household_section_g5_711`
--

CREATE TABLE IF NOT EXISTS `household_section_g5_711` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer_a` varchar(100) NOT NULL,
  `answer_b` varchar(100) NOT NULL,
  `answer_primary_other` varchar(100) NOT NULL,
  `answer_secondary_other` varchar(100) NOT NULL,
  `yes_no_ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `household_section_g5_711`
--

INSERT INTO `household_section_g5_711` (`id`, `interview_id`, `question`, `answer_a`, `answer_b`, `answer_primary_other`, `answer_secondary_other`, `yes_no_ans`) VALUES
(1, 5, '1', '99', '99', 'sss', 'uiyiuy', '1'),
(2, 5, '2', 'data[1][HouseholdSectionG5711][answer_a]', 'data[1][HouseholdSectionG5711][answer_b]', '', '', '1'),
(3, 5, '3', 'data[2][HouseholdSectionG5711][answer_a]', 'data[2][HouseholdSectionG5711][answer_b]', '', '', '1'),
(4, 5, '4', 'data[3][HouseholdSectionG5711][answer_a]', 'data[3][HouseholdSectionG5711][answer_b]', '', '', '1'),
(5, 5, '5', 'data[4][HouseholdSectionG5711][answer_a]', 'data[4][HouseholdSectionG5711][answer_b]', '', '', '1'),
(6, 5, '6', 'data[5][HouseholdSectionG5711][answer_a]', 'data[5][HouseholdSectionG5711][answer_b]', '', '', '1'),
(7, 5, '7', 'data[6][HouseholdSectionG5711][answer_a]', 'data[6][HouseholdSectionG5711][answer_b]', '', '', '1'),
(8, 5, '8', 'data[7][HouseholdSectionG5711][answer_a]', 'data[7][HouseholdSectionG5711][answer_b]', '', '', '1'),
(9, 5, '9', 'data[8][HouseholdSectionG5711][answer_a]', 'data[8][HouseholdSectionG5711][answer_b]', '', '', '1'),
(10, 5, '10', 'data[9][HouseholdSectionG5711][answer_a]', 'data[9][HouseholdSectionG5711][answer_b]', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `household_section_g6_712`
--

CREATE TABLE IF NOT EXISTS `household_section_g6_712` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `total_collection` varchar(100) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `gift_giving_and_own` varchar(100) DEFAULT NULL,
  `sale_and_exchange` varchar(100) DEFAULT NULL,
  `price_per_unit` varchar(100) DEFAULT NULL,
  `total_price` varchar(100) DEFAULT NULL,
  `expenses` varchar(100) DEFAULT NULL,
  `net_earning` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `household_section_g6_712`
--

INSERT INTO `household_section_g6_712` (`id`, `interview_id`, `total_collection`, `unit`, `gift_giving_and_own`, `sale_and_exchange`, `price_per_unit`, `total_price`, `expenses`, `net_earning`) VALUES
(1, 0, 'data[0][HouseholdSectionG6712][total_collection]', 'data[0][HouseholdSectionG6712][unit]', 'data[0][HouseholdSectionG6712][gift_giving_and_own]', 'data[0][HouseholdSectionG6712][sale_and_exchange]', 'data[0][HouseholdSectionG6712][price_per_unit]', 'data[0][HouseholdSectionG6712][total_price]', 'data[0][HouseholdSectionG6712][expenses]', 'data[0][HouseholdSectionG6712][net_earning]'),
(2, 0, 'data[1][HouseholdSectionG6712][total_collection]', 'data[1][HouseholdSectionG6712][unit]', 'data[1][HouseholdSectionG6712][gift_giving_and_own]', 'data[1][HouseholdSectionG6712][sale_and_exchange]', 'data[1][HouseholdSectionG6712][price_per_unit]', 'data[1][HouseholdSectionG6712][total_price]', 'data[1][HouseholdSectionG6712][expenses]', 'data[1][HouseholdSectionG6712][net_earning]'),
(3, 0, 'data[2][HouseholdSectionG6712][total_collection]', 'data[2][HouseholdSectionG6712][unit]', 'data[2][HouseholdSectionG6712][gift_giving_and_own]', 'data[2][HouseholdSectionG6712][sale_and_exchange]', 'data[2][HouseholdSectionG6712][price_per_unit]', 'data[2][HouseholdSectionG6712][total_price]', 'data[2][HouseholdSectionG6712][expenses]', 'data[2][HouseholdSectionG6712][net_earning]'),
(4, 0, 'data[3][HouseholdSectionG6712][total_collection]', 'data[3][HouseholdSectionG6712][unit]', 'data[3][HouseholdSectionG6712][gift_giving_and_own]', 'data[3][HouseholdSectionG6712][sale_and_exchange]', 'data[3][HouseholdSectionG6712][price_per_unit]', 'data[3][HouseholdSectionG6712][total_price]', 'data[3][HouseholdSectionG6712][expenses]', 'data[3][HouseholdSectionG6712][net_earning]'),
(5, 0, 'data[4][HouseholdSectionG6712][total_collection]', 'data[4][HouseholdSectionG6712][unit]', 'data[4][HouseholdSectionG6712][gift_giving_and_own]', 'data[4][HouseholdSectionG6712][sale_and_exchange]', 'data[4][HouseholdSectionG6712][price_per_unit]', 'data[4][HouseholdSectionG6712][total_price]', 'data[4][HouseholdSectionG6712][expenses]', 'data[4][HouseholdSectionG6712][net_earning]'),
(6, 0, 'data[5][HouseholdSectionG6712][total_collection]', 'data[5][HouseholdSectionG6712][unit]', 'data[5][HouseholdSectionG6712][gift_giving_and_own]', 'data[5][HouseholdSectionG6712][sale_and_exchange]', 'data[5][HouseholdSectionG6712][price_per_unit]', 'data[5][HouseholdSectionG6712][total_price]', 'data[5][HouseholdSectionG6712][expenses]', 'data[5][HouseholdSectionG6712][net_earning]'),
(7, 0, 'data[6][HouseholdSectionG6712][total_collection]', 'data[6][HouseholdSectionG6712][unit]', 'data[6][HouseholdSectionG6712][gift_giving_and_own]', 'data[6][HouseholdSectionG6712][sale_and_exchange]', 'data[6][HouseholdSectionG6712][price_per_unit]', 'data[6][HouseholdSectionG6712][total_price]', 'data[6][HouseholdSectionG6712][expenses]', 'data[6][HouseholdSectionG6712][net_earning]'),
(8, 5, 'data[0][HouseholdSectionG6712][total_collection]', 'data[0][HouseholdSectionG6712][unit]', 'data[0][HouseholdSectionG6712][gift_giving_and_own]', 'data[0][HouseholdSectionG6712][sale_and_exchange]', 'data[0][HouseholdSectionG6712][price_per_unit]', 'data[0][HouseholdSectionG6712][total_price]', 'data[0][HouseholdSectionG6712][expenses]', 'data[0][HouseholdSectionG6712][net_earning]'),
(9, 5, 'data[1][HouseholdSectionG6712][total_collection]', 'data[1][HouseholdSectionG6712][unit]', 'data[1][HouseholdSectionG6712][gift_giving_and_own]', 'data[1][HouseholdSectionG6712][sale_and_exchange]', 'data[1][HouseholdSectionG6712][price_per_unit]', 'data[1][HouseholdSectionG6712][total_price]', 'data[1][HouseholdSectionG6712][expenses]', 'data[1][HouseholdSectionG6712][net_earning]'),
(10, 5, 'data[2][HouseholdSectionG6712][total_collection]', 'data[2][HouseholdSectionG6712][unit]', 'data[2][HouseholdSectionG6712][gift_giving_and_own]', 'data[2][HouseholdSectionG6712][sale_and_exchange]', 'data[2][HouseholdSectionG6712][price_per_unit]', 'data[2][HouseholdSectionG6712][total_price]', 'data[2][HouseholdSectionG6712][expenses]', 'data[2][HouseholdSectionG6712][net_earning]'),
(11, 5, 'data[3][HouseholdSectionG6712][total_collection]', 'data[3][HouseholdSectionG6712][unit]', 'data[3][HouseholdSectionG6712][gift_giving_and_own]', 'data[3][HouseholdSectionG6712][sale_and_exchange]', 'data[3][HouseholdSectionG6712][price_per_unit]', 'data[3][HouseholdSectionG6712][total_price]', 'data[3][HouseholdSectionG6712][expenses]', 'data[3][HouseholdSectionG6712][net_earning]'),
(12, 5, 'data[4][HouseholdSectionG6712][total_collection]', 'data[4][HouseholdSectionG6712][unit]', 'data[4][HouseholdSectionG6712][gift_giving_and_own]', 'data[4][HouseholdSectionG6712][sale_and_exchange]', 'data[4][HouseholdSectionG6712][price_per_unit]', 'data[4][HouseholdSectionG6712][total_price]', 'data[4][HouseholdSectionG6712][expenses]', 'data[4][HouseholdSectionG6712][net_earning]'),
(13, 5, 'data[5][HouseholdSectionG6712][total_collection]', 'data[5][HouseholdSectionG6712][unit]', 'data[5][HouseholdSectionG6712][gift_giving_and_own]', 'data[5][HouseholdSectionG6712][sale_and_exchange]', 'data[5][HouseholdSectionG6712][price_per_unit]', 'data[5][HouseholdSectionG6712][total_price]', 'data[5][HouseholdSectionG6712][expenses]', 'data[5][HouseholdSectionG6712][net_earning]'),
(14, 5, 'data[6][HouseholdSectionG6712][total_collection]', 'data[6][HouseholdSectionG6712][unit]', 'data[6][HouseholdSectionG6712][gift_giving_and_own]', 'data[6][HouseholdSectionG6712][sale_and_exchange]', 'data[6][HouseholdSectionG6712][price_per_unit]', 'data[6][HouseholdSectionG6712][total_price]', 'data[6][HouseholdSectionG6712][expenses]', 'data[6][HouseholdSectionG6712][net_earning]');

-- --------------------------------------------------------

--
-- Table structure for table `household_section_g7_713`
--

CREATE TABLE IF NOT EXISTS `household_section_g7_713` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `household_section_g7_713`
--

INSERT INTO `household_section_g7_713` (`id`, `interview_id`, `question`, `answer`) VALUES
(1, 5, 'Money sent from abroad', 'data[0][HouseholdSectionG7713][answer]'),
(2, 5, 'Aid from Governmental and non-Governmental organization', 'data[1][HouseholdSectionG7713][answer]'),
(3, 5, 'Gifts or help from relatives and friends', 'data[2][HouseholdSectionG7713][answer]'),
(4, 5, 'Pension', 'pension test'),
(5, 5, 'Rent from house or land', 'tttest'),
(6, 5, 'my question test', 'data[5][HouseholdSectionG7713][answer]'),
(7, 5, 'my question', 'data[5][HouseholdSectionG7713][answer]');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE IF NOT EXISTS `interview` (
  `id` int(11) NOT NULL,
  `interview_pattern` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `interview_pattern`) VALUES
(1, 'cultural'),
(2, 'cultural'),
(3, 'cultural'),
(4, 'cultural'),
(5, 'cultural'),
(6, 'cultural'),
(7, 'cultural'),
(8, 'cultural'),
(9, 'cultural'),
(10, 'cultural'),
(11, 'cultural'),
(12, 'cultural'),
(13, 'cultural'),
(14, 'cultural'),
(15, 'cultural'),
(16, 'cultural'),
(17, 'cultural'),
(18, 'cultural'),
(19, 'cultural'),
(20, 'cultural'),
(21, 'cultural'),
(22, 'cultural'),
(23, 'cultural'),
(24, 'cultural'),
(25, 'cultural'),
(26, 'cultural'),
(27, 'cultural'),
(28, 'cultural'),
(29, 'cultural'),
(30, 'cultural'),
(31, 'cultural'),
(32, 'cultural'),
(33, 'cultural');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `id` int(11) NOT NULL,
  `material_type` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `material_name` varchar(100) NOT NULL,
  `year_of_publication` varchar(100) NOT NULL,
  `reamrk` varchar(100) NOT NULL,
  `personnel_information_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `material_language`
--

CREATE TABLE IF NOT EXISTS `material_language` (
  `id` int(11) NOT NULL,
  `material_laguage_value` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `remark` varchar(100) NOT NULL,
  `material_name` varchar(100) NOT NULL,
  `material_year` varchar(100) NOT NULL,
  `personnel_information_id` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_language`
--

INSERT INTO `material_language` (`id`, `material_laguage_value`, `status`, `remark`, `material_name`, `material_year`, `personnel_information_id`) VALUES
(1, 'Grammar', 1, '', '', '', 18),
(2, 'Dictionary', 1, '', '', '', 18),
(3, 'Textbook', 1, '', '', '', 18),
(4, 'Newspaper', 1, '', '', '', 18),
(5, 'Magazine', 1, '', '', '', 18),
(6, 'Written literature', 1, '', '', '', 18),
(7, 'folklore', 1, '', '', '', 18),
(8, 'Literacy material', 1, '', '', '', 18),
(9, 'other', 1, '', '', '', 18),
(10, 'Grammar', 1, '', '', '', 19),
(11, 'Dictionary', 1, '', '', '', 19),
(12, 'Textbook', 1, '', '', '', 19),
(13, 'Newspaper', 1, '', '', '', 19),
(14, 'Magazine', 1, '', '', '', 19),
(15, 'Written literature', 1, '', '', '', 19),
(16, 'folklore', 1, '', '', '', 19),
(17, 'Literacy material', 1, '', '', '', 19),
(18, 'other', 1, '', '', '', 19),
(19, 'Grammar', 1, '', '', '', 21),
(20, 'Dictionary', 1, '', '', '', 21),
(21, 'Textbook', 1, '', '', '', 21),
(22, 'Newspaper', 1, '', '', '', 21),
(23, 'Magazine', 1, '', '', '', 21),
(24, 'Written literature', 1, '', '', '', 21),
(25, 'folklore', 1, '', '', '', 21),
(26, 'Literacy material', 1, '', '', '', 21),
(27, 'other', 1, '', '', '', 21),
(28, 'Grammar', 1, '', '', '', 22),
(29, 'Dictionary', 1, '', '', '', 22),
(30, 'Textbook', 1, '', '', '', 22),
(31, 'Newspaper', 1, '', '', '', 22),
(32, 'Magazine', 1, '', '', '', 22),
(33, 'Written literature', 1, '', '', '', 22),
(34, 'folklore', 1, '', '', '', 22),
(35, 'Literacy material', 1, '', '', '', 22),
(36, 'other', 1, '', '', '', 22);

-- --------------------------------------------------------

--
-- Table structure for table `morphology`
--

CREATE TABLE IF NOT EXISTS `morphology` (
  `id` int(11) NOT NULL,
  `target_bangla_script` varchar(100) DEFAULT NULL,
  `transcription_ipa` varchar(100) DEFAULT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `english_word` varchar(100) DEFAULT NULL,
  `morphology_type` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=838 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `morphology`
--

INSERT INTO `morphology` (`id`, `target_bangla_script`, `transcription_ipa`, `personnel_information_id`, `english_word`, `morphology_type`, `status`) VALUES
(1, 'à¦¶à¦¾à¦¦à¦¾', 'ÊƒadÌªa', 19, 'white', 'noun_color', 0),
(2, 'à¦•à¦¾à¦²à§‹', 'kalo', 19, 'black', 'noun_color', 0),
(3, 'à¦°à¦¾à¦™à¦¾', 'raÅ‹a', 19, 'red', 'noun_color', 0),
(4, 'à¦¨à¦¿à¦²', 'nil', 19, 'blue', 'noun_color', 0),
(5, 'à¦•à¦®à¦²à¦¾', 'komla', 19, 'orange', 'noun_color', 0),
(6, 'à¦¬à¦¾à¦‡à¦—à§à¦¨à¦¿', 'baiguni', 19, 'purple', 'noun_color', 0),
(7, 'à¦¶à§‹à¦¬à§à¦¯', 'Êƒobuz', 19, 'green', 'noun_color', 0),
(8, 'à¦“à¦²à¦¦à¦¿', 'oldÌªi', 19, 'yellow', 'noun_color', 0),
(9, NULL, NULL, 19, NULL, NULL, 0),
(10, 'à¦†à¦•à¦¾à¦¶', 'akaÊƒ', 19, 'sky', 'noun_religion', 0),
(11, 'à¦¬à¦¾à¦“', ' bao', 19, 'wind', 'noun_religion', 0),
(12, 'à¦ªà¦¾à¦¨à¦¿', 'pani', 19, 'water', 'noun_religion', 0),
(13, 'à¦†à¦—à§à¦¨', 'agun', 19, 'fire', 'noun_religion', 0),
(14, 'à¦®à¦¾à¦¡à¦¿/à¦®à¦¾à¦Ÿà¦¿', 'madi/mati', 19, 'soil', 'noun_religion', 0),
(15, 'à¦¦à§à¦¨à¦¿à¦¯à¦¼à¦¾', 'Ì™dÌªuniya', 19, 'earth', 'noun_religion', 0),
(16, 'à¦ªà§à¦¯à¦¾à¦•', 'pÃ¦k', 19, 'mud', 'noun_religion', 0),
(17, 'à¦¯à¦™à§à¦—à¦²', 'zÉ”Å‹gÉ”l', 19, 'forest', 'noun_religion', 0),
(18, 'à¦–à§à¦¯à¦¾à¦¤', 'kÊ°Ã¦tÌªi', 19, 'field', 'noun_religion', 0),
(19, 'à¦®à§à¦¯à¦¾à¦˜', 'mÃ¦gÊ°', 19, 'cloud', 'noun_religion', 0),
(20, 'à¦®à§à¦¯à¦¾à¦˜', 'mÃ¦gÊ°', 19, 'rain', 'noun_religion', 0),
(21, 'à¦­à¦—à¦¬à¦¾à¦¨', 'bÊ°É”goban', 19, 'god', 'noun_religion', 0),
(22, 'à¦­à¦—à¦¬à¦¾à¦¨', 'bÊ°É”goban', 19, 'god', 'noun_religion', 0),
(23, 'à¦†à¦¨à¦¨à§à¦¦', 'anondÌªÉ”', 19, 'festival', 'noun_religion', 0),
(24, 'à¦¬à¦¾à¦¯à§‡à¦«à¦¸à¦¿à¦²', 'bazefosil', 19, 'crop', 'noun_religion', 0),
(25, 'à¦—à¦¾à¦™', 'gaÅ‹', 19, 'river', 'noun_religion', 0),
(26, 'à¦ªà¦¾à¦¹à¦¾à¦¡à¦¼', 'pahar', 19, 'hill', 'noun_religion', 0),
(27, 'à¦¯à¦°à§à¦¨à¦¾', 'zÉ”rna', 19, 'fountain', 'noun_religion', 0),
(28, 'à¦¹à¦²à¦¾à¦•', 'hÉ”lak', 19, 'light', 'noun_religion', 0),
(29, 'à¦†à¦¨à§à¦¦à¦¾à¦°', 'andÌªÊ°ar', 19, 'Dark', 'noun_religion', 0),
(30, 'à¦¬à§à¦¯à¦¾à¦²à¦¾', 'bÃ¦la', 19, 'Sun', 'noun_religion', 0),
(31, 'à¦‰à¦¤à§à¦¤à¦°', 'utÌªtÌªÉ”r', 19, 'North', 'noun_religion', 0),
(32, 'à¦¦à§‹à¦•à§à¦·à¦¿à¦£', 'dÌªokkÊ°in', 19, 'South', 'noun_religion', 0),
(33, 'à¦ªà§‚à¦¬', 'pub', 19, 'East', 'noun_religion', 0),
(34, 'à¦ªà¦šà§à¦šà¦¿à¦®', 'poccim', 19, 'West', 'noun_religion', 0),
(35, 'à¦®à¦°à§à¦®', 'mÉ”rmÉ”', 19, 'Birth', 'noun_religion', 0),
(36, 'à¦®à¦°à¦¾', 'mÉ”ra', 19, 'Death', 'noun_religion', 0),
(37, 'à¦§à¦²à¦¾', 'dÌªÌ„Ê°É”la', 18, 'white', 'noun_color', 0),
(38, 'à¦•à¦¾à¦²à¦¾', 'kala', 18, 'black', 'noun_color', 0),
(39, 'à¦°à¦¾à¦™à¦¾', 'raÉ³a', 18, 'red', 'noun_color', 0),
(40, 'à¦¨à§€à¦²', 'nil', 18, 'blue', 'noun_color', 0),
(41, 'à¦•à¦®à¦²à¦¾', 'kÉ”mla', 18, 'orange', 'noun_color', 0),
(42, 'à¦¬à¦¾à¦‡à¦—à§à¦¨à¦°à¦‚', 'baigunrÉ”Å‹', 18, 'purple', 'noun_color', 0),
(43, 'à¦¸à¦¬à§à¦¸', 'ÊƒÉ”bus', 18, 'green', 'noun_color', 0),
(44, 'à¦¹à¦¿à¦²à¦¦à¦¾', 'hildÌªa', 18, 'yellow', 'noun_color', 0),
(45, NULL, NULL, 18, NULL, NULL, 0),
(46, 'à¦¦à¦¿à¦¨', 'dÌªin ', 18, 'sky', 'noun_religion', 0),
(47, 'à¦¬à¦¾à¦¤à¦¾à¦¸', 'batÌªaÊƒ', 18, 'wind', 'noun_religion', 0),
(48, 'à¦ªà¦¾à¦¨à¦¿à¦¹', 'panih', 18, 'water', 'noun_religion', 0),
(49, 'à¦œà§à¦‡', 'ÉŸui', 18, 'fire', 'noun_religion', 0),
(50, 'à¦­à§à¦‡', 'bÊ°ui ', 18, 'soil', 'noun_religion', 0),
(51, 'à¦¦à§à¦¨à¦¿à¦¯à¦¼à¦¾', 'dÌªuniya', 18, 'earth', 'noun_religion', 0),
(52, 'à¦•à¦¦à¦‚', 'kÃ¦dÌªÉ”Å‹', 18, 'mud', 'noun_religion', 0),
(53, 'à¦¬à¦¨', 'bÉ”n ', 18, 'forest', 'noun_religion', 0),
(54, 'à¦«à¦¸à¦¿à¦² à¦–à§‡à¦¤', 'pÊ°oÊƒil kÊ°Ã¦tÌª', 18, 'field', 'noun_religion', 0),
(55, 'à¦®à§‡à¦—', 'mÃ¦g ', 18, 'cloud', 'noun_religion', 0),
(56, 'à¦®à§‡à¦•', 'mek ', 18, 'rain', 'noun_religion', 0),
(57, 'à¦­à¦—à¦¬à¦¾à¦¨', 'bÊ°É”goban ', 18, 'god', 'noun_religion', 0),
(58, 'à¦¦à§‡à¦“', 'dÌªÃ¦u ', 18, 'god', 'noun_religion', 0),
(59, 'à¦‰à§Žà¦¸à¦¬', 'utÌªsob', 18, 'festival', 'noun_religion', 0),
(60, 'à¦«à¦¸à¦¿à¦²', 'pÊ°osil ', 18, 'crop', 'noun_religion', 0),
(61, 'à¦—à¦¾à¦™', 'gaÅ‹ ', 18, 'river', 'noun_religion', 0),
(62, 'à¦¦à¦¾à¦¹à¦¾', 'dÌªaha ', 18, 'hill', 'noun_religion', 0),
(63, 'à¦à¦°à¦¨à¦¾', 'ÉŸÊ°É”rna ', 18, 'fountain', 'noun_religion', 0),
(64, 'à¦œà§à¦¨à¦¾à¦•', 'ÉŸunak ', 18, 'light', 'noun_religion', 0),
(65, 'à¦†à¦¨à§à¦¦à¦¾à¦°', 'andÌªar ', 18, 'Dark', 'noun_religion', 0),
(66, 'à¦¬à§‡à¦²à¦¾à¦¹', 'belah ', 18, 'Sun', 'noun_religion', 0),
(67, 'à¦‰à¦¤à§à¦¤à§à¦°', 'utÌªtÌªur ', 18, 'North', 'noun_religion', 0),
(68, 'à¦¦à¦•à§à¦·à¦¿à¦£', 'dÌªukkÊ°in', 18, 'South', 'noun_religion', 0),
(69, 'à¦ªà§à¦¬', ' pub', 18, 'East', 'noun_religion', 0),
(70, 'à¦ªà¦šà§à¦šà¦¿à¦®', 'poccim', 18, 'West', 'noun_religion', 0),
(71, 'à¦œà¦°à¦®à§‹', 'ÉŸÉ”rmo ', 18, 'Birth', 'noun_religion', 0),
(72, 'à¦®à¦°à¦¾à¦¹', 'mÉ”rah', 18, 'Death', 'noun_religion', 0),
(73, '', 'puÊƒa ÉŸontÌªu ', 18, 'pet', 'morphology_animals', 0),
(74, 'à¦—à¦°à§à¦¹', 'goruh ', 18, 'Ox', 'morphology_animals', 0),
(75, 'à¦—à¦¾à¦‡à¦®à¦¾à¦“', 'gaimao ', 18, 'cow', 'morphology_animals', 0),
(76, 'à¦¹à¦¾à¦—à¦²', 'hagol ', 18, 'Goat', 'morphology_animals', 0),
(77, 'à¦­à§‡à¦°à¦¾', 'bÊ°Ã¦ra ', 18, 'Ram', 'morphology_animals', 0),
(78, 'à¦¹à§à¦¯à¦¼à¦¾à¦°', 'huar', 18, 'Pig', 'morphology_animals', 0),
(79, 'à¦¹à¦¾à¦™à¦¸', ' haÅ‹os ', 18, 'Duck', 'morphology_animals', 0),
(80, 'à¦ªà§à¦–à¦¿', 'pukÊ°i ', 18, 'Bird', 'morphology_animals', 0),
(81, 'à¦˜à§‹à¦°à¦¾à¦¹', 'gÊ°orah ', 18, 'Horse', 'morphology_animals', 0),
(82, 'à¦¸à¦¿à¦‚à¦¹', 'siÅ‹ho ', 18, 'Lion', 'morphology_animals', 0),
(83, 'à¦•à§à¦•à§à¦²', 'kukul ', 18, 'Ship', 'morphology_animals', 0),
(84, 'à¦¬à¦¿à¦²à¦¾à¦‡', 'bilai ', 18, 'Dog', 'morphology_animals', 0),
(85, 'à¦šà¦°à§‡à¦¹', 'cÉ”reh ', 18, 'Chicken', 'morphology_animals', 0),
(86, 'à¦•à¦¸à§à¦¤à§à¦°', 'kostÌªur', 18, 'Pegion', 'morphology_animals', 0),
(87, '', 'ÉŸontÌªu', 18, 'Wild animals', 'morphology_animals', 0),
(88, 'à¦•à¦¾à¦‰à¦¯à¦¼à¦¾', '  kaua ', 18, 'Crow', 'morphology_animals', 0),
(89, 'à¦‡à¦¨à§à¦¦à§à¦°', 'indÌªur  ', 18, 'Big Mouse', 'morphology_animals', 0),
(90, 'à¦•à¦¾à¦•à¦°à¦¾', 'kakra', 18, 'Lobster', 'morphology_animals', 0),
(91, 'à¦®à¦¾à¦¿à¦›', 'masi ', 18, 'Fly', 'morphology_animals', 0),
(92, 'à¦®à¦¶à¦¾à¦¹', 'moÊƒah ', 18, 'Mosquito', 'morphology_animals', 0),
(93, 'à¦šà¦°à§‡à¦•à¦¾à¦¨à¦¾', 'cÉ”rekana', 18, 'Butterfly', 'morphology_animals', 0),
(94, 'à¦¬à§‡à¦‚', ' bÃ¦Å‹ ', 18, 'Frog', 'morphology_animals', 0),
(95, 'à¦®à¦¾à¦•à¦°à¦¾à¦¹', 'makrah ', 18, 'Spider', 'morphology_animals', 0),
(96, 'à¦•à¦¾à¦šà§à¦›à§à¦¯à¦¼à¦¾', 'kaccÊ°ua ', 18, 'Turtle', 'morphology_animals', 0),
(97, 'à¦ªà§‹à¦•à¦¾à¦¹', 'pokah', 18, 'Insect', 'morphology_animals', 0),
(98, 'à¦‰à¦–à§à¦¨', 'ukÊ°un', 18, 'Lice', 'morphology_animals', 0),
(99, '', '', 18, 'Death', 'morphology_animals', 0),
(100, 'à¦†à¦®', 'am', 18, 'Mango', 'noun_fruits', 0),
(101, 'à¦•à¦¾à¦¹à§‹à¦²', ' kahol ', 18, 'Jack fruit', 'noun_fruits', 0),
(102, 'à¦®à¦¿à¦¥à¦¾', 'mitÌªÊ°a ', 18, 'Sweet', 'noun_fruits', 0),
(103, 'à¦¬à¦¾à¦¨à§à¦¦à¦¾à¦•à§‹à¦¬à¦¿', 'bandÌªÌªakobi ', 18, 'Cabbage', 'noun_fruits', 0),
(104, 'à¦­à¦—', 'bÊ°É”g ', 18, 'Hunger', 'noun_fruits', 0),
(105, 'à¦¤à¦¿à¦°à¦¾à¦¸', 'tÌªiras ', 18, 'Thirst', 'noun_fruits', 0),
(106, 'à¦ªà¦¿à¦¥à¦¾à¦¹', 'pitÊ°ah', 18, 'Cake', 'noun_fruits', 0),
(107, 'à¦°à§à¦¤à¦¿', ' rutÌªi ', 18, 'Cake', 'noun_fruits', 0),
(108, 'à¦¹à¦¿à¦¦à§à¦¦à§', 'hidÌªdÌªÌªu', 18, 'Boil', 'noun_fruits', 0),
(109, '', ' bÊ°atÌª ', 18, 'Rice', 'noun_fruits', 0),
(110, 'à¦¹à¦¾à¦—', 'hag ', 18, 'Curry', 'noun_fruits', 0),
(111, 'à¦¡à¦¿à¦®à¦¾à¦¹', 'dimah', 18, 'Egg', 'noun_fruits', 0),
(112, 'à¦®à¦§à§', ' modÌªhu ', 18, 'Papaya', 'noun_fruits', 0),
(113, 'à¦¬à¦¿à¦¸à§à¦¨', 'bisun', 18, 'Seed', 'noun_fruits', 0),
(114, '', ' pÊ°ul ', 18, 'Flower', 'noun_fruits', 0),
(115, 'à¦®à¦¾à¦¸', 'mas', 18, 'Fish', 'noun_fruits', 0),
(116, 'à¦®à¦¾à¦¸à¦¾à¦‚', ' masaÅ‹ ', 18, 'Meat', 'noun_fruits', 0),
(117, 'à¦¦à¦¾à¦²', 'dÌªal', 18, 'Pearl', 'noun_fruits', 0),
(118, '', ' kÉ”la ', 18, 'banana', 'noun_fruits', 0),
(119, 'à¦à§à¦²', 'ÉŸÊ°ul ', 18, 'soup', 'noun_fruits', 0),
(120, 'à¦¹à§à¦—à¦°à¦¾à¦®', 'hugram', 18, 'guava', 'noun_fruits', 0),
(121, 'à¦—à¦¾à¦¸', ' gas', 18, 'tree', 'noun_fruits', 0),
(122, 'à¦ªà¦¦à§à¦®à¦¹', ' pÉ”dÌºÌºdÌªo ', 18, 'lotus', 'noun_fruits', 0),
(123, 'à¦¬à¦¾à¦¶', 'baÊƒ ', 18, 'bamboo', 'noun_fruits', 0),
(124, '', 'lebu', 18, 'lemon', 'noun_fruits', 0),
(125, '', ' pÊ°É”l', 18, 'fruit', 'noun_fruits', 0),
(126, 'à¦®à¦¤', ' motÌª ', 18, 'wine', 'noun_fruits', 0),
(127, 'à¦²à¦¬à¦£', 'lÉ”bon ', 18, 'salt', 'noun_fruits', 0),
(128, 'à¦¦à¦‡', 'dÌªoi ', 18, 'curd', 'noun_fruits', 0),
(129, 'à¦§à¦¾à¦¨', 'dÌªÊ°an', 18, 'paddy', 'noun_fruits', 0),
(130, 'à¦—à¦®', ' gÉ”m', 18, 'wheat', 'noun_fruits', 0),
(131, 'à¦¹à§à¦°à§', ' huru', 18, 'mustard', 'noun_fruits', 0),
(132, 'à¦®à¦°à¦¿à¦œ', ' moriÉŸ ', 18, 'pepper', 'noun_fruits', 0),
(133, 'à¦ªà¦¿à¦¯à¦¼à¦¾à¦¸', 'pias', 18, 'onion', 'noun_fruits', 0),
(134, 'à¦•à¦šà§ ', ' kocu', 18, 'edible root', 'noun_fruits', 0),
(135, 'à¦šà§à¦•à¦¾ à¦¬à¦¾à¦‡à¦—à¦¨', ' cukabaygÉ”n', 18, 'tomato', 'noun_fruits', 0),
(136, 'à¦•à§à¦®à¦°à¦¾à¦¹', ' kumrah ', 18, 'pumpkin', 'noun_fruits', 0),
(137, 'à¦¹à¦¿à¦®à¦¾à¦¹', 'himah ', 18, 'bean', 'noun_fruits', 0),
(138, 'à¦†à¦²à§à¦¹', 'aluh ', 18, 'potato', 'noun_fruits', 0),
(139, 'à¦¹à¦¾à¦•', 'hak', 18, 'greenleaf', 'noun_fruits', 0),
(140, 'à¦¬à¦¾à¦¯à¦¼à¦—à¦¨', ' baygÉ”n ', 18, 'Eggplant', 'noun_fruits', 0),
(141, 'à¦¹à§‡à¦™à¦¸', 'hÃ¦Å‹oÊƒ', 18, 'Cucumber', 'noun_fruits', 0),
(142, 'à¦¦à§à¦¤', ' dÌªut ', 18, 'milk', 'noun_fruits', 0),
(143, 'à¦šà§à¦•à¦¾à¦¹', 'cukah ', 18, 'bitter', 'noun_fruits', 0),
(144, 'à¦à¦¾à¦²à¦¾à¦¹', ' ÉŸÊ°alah', 18, 'biting', 'noun_fruits', 0),
(145, 'à¦«à§‹à¦¶à¦¾', 'foÊƒa', 19, 'pet', 'morphology_animals', 0),
(146, 'à¦—à¦°à§', 'goru', 19, 'Ox', 'morphology_animals', 0),
(147, 'à¦—à¦¾à¦‡', 'gai', 19, 'cow', 'morphology_animals', 0),
(148, 'à¦¸à¦¾à¦—à¦²', 'sagol', 19, 'Goat', 'morphology_animals', 0),
(149, 'à¦¬à§à¦¯à¦¾à¦°à¦¾', 'bÃ¦ram', 19, 'Ram', 'morphology_animals', 0),
(150, 'à¦•à¦¾à¦²à¦¾à¦–à¦¾à¦¶à¦¿', 'kalakÊ°aÊƒi', 19, 'Pig', 'morphology_animals', 0),
(151, 'à¦¹à¦¾à¦™à¦¶', 'haÅ‹É”Êƒ', 19, 'Duck', 'morphology_animals', 0),
(152, 'à¦«à¦¾à¦–à¦¿', 'fakÊ°i', 19, 'Bird', 'morphology_animals', 0),
(153, 'à¦—à§‹à¦°à¦¾', 'gora', 19, 'Horse', 'morphology_animals', 0),
(154, 'à¦¶à¦¿à¦™à¦¹', 'ÊƒiÅ‹hÉ”', 19, 'Lion', 'morphology_animals', 0),
(155, 'à¦•à§à¦¤à§à¦¤à¦¾', 'kutÌªtÌªa', 19, 'Ship', 'morphology_animals', 0),
(156, 'à¦¬à¦¿à¦²à¦¾à¦‡', 'bilai', 19, 'Dog', 'morphology_animals', 0),
(157, 'à¦¸à§à¦°à§à¦‡', 'surui', 19, 'Chicken', 'morphology_animals', 0),
(158, 'à¦•à¦‡à¦¤à¦°', 'koitÌªÉ”r', 19, 'Pegion', 'morphology_animals', 0),
(159, 'à¦¯à¦¿à¦¬à¦¯à¦¾à¦¨à§‹à¦¯à¦¼à¦¾à¦°', 'zibzanoar', 19, 'Wild animals', 'morphology_animals', 0),
(160, 'à¦•à¦¾à¦‰à¦¯à¦¼à¦¾', 'kaua', 19, 'Crow', 'morphology_animals', 0),
(161, 'à¦‡à¦¨à§à¦¦à§à¦°', 'indÌªur', 19, 'Big Mouse', 'morphology_animals', 0),
(162, 'à¦•à¦¾à¦•à§à¦°à¦¾', 'kakra', 19, 'Lobster', 'morphology_animals', 0),
(163, 'à¦®à¦¾à¦¸à¦¿', 'maÊƒi', 19, 'Fly', 'morphology_animals', 0),
(164, 'à¦®à¦¶à¦¾', 'mÉ”Êƒa', 19, 'Mosquito', 'morphology_animals', 0),
(165, 'à¦«à§à¦°à§‹à¦¯à¦¾à¦«à§‹à¦¤à¦¿', 'frozafotÌªi', 19, 'Butterfly', 'morphology_animals', 0),
(166, 'à¦¬à§à¦¯à¦¾à¦‚', 'bÃ¦Å‹', 19, 'Frog', 'morphology_animals', 0),
(167, 'à¦®à¦¾à¦•à¦°', 'makÉ”r', 19, 'Spider', 'morphology_animals', 0),
(168, 'à¦•à¦¾à¦¤à§à¦¤à§‹à¦¯à¦¼à¦¾', 'katÌªtÌªowa', 19, 'Turtle', 'morphology_animals', 0),
(169, 'à¦«à§‹à¦•à¦¾', 'foka', 19, 'Insect', 'morphology_animals', 0),
(170, 'à¦‰à¦•à§à¦¨', 'ukun', 19, 'Lice', 'morphology_animals', 0),
(171, 'à¦®à¦°à¦¾', 'mÉ”ra', 19, 'Death', 'morphology_animals', 0),
(172, 'à¦†à¦®', 'am', 19, 'Mango', 'noun_fruits', 0),
(173, 'à¦•à¦¾à¦¡à¦²', 'kadÉ”l', 19, 'Jack fruit', 'noun_fruits', 0),
(174, 'à¦®à¦¿à¦¸à§à¦Ÿà¦¿', 'misti', 19, 'Sweet', 'noun_fruits', 0),
(175, 'à¦¬à¦¾à¦¨à§à¦¦à¦¾à¦•à§‹à¦«à¦¿, à¦«à¦¾à¦¤à¦¾à¦•à§‹à¦«à¦¿', 'bandakofi, fatakofi', 19, 'Cabbage', 'noun_fruits', 0),
(176, 'à¦–à¦¿à¦¦à¦¾', 'kÊ°idÌªa', 19, 'Hunger', 'noun_fruits', 0),
(177, 'à¦¤à¦¿à¦°à¦¾à¦¶', 'tÌªiraÊƒ', 19, 'Thirst', 'noun_fruits', 0),
(178, 'à¦«à¦¿à¦¡à¦¾', 'fida', 19, 'Cake', 'noun_fruits', 0),
(179, 'à¦²à§à¦¡à¦¿', 'ludi', 19, 'Cake', 'noun_fruits', 0),
(180, 'à¦¹à¦¿à¦¦à§à¦¦à§‹', 'hidÌªdÌªo', 19, 'Boil', 'noun_fruits', 0),
(181, 'à¦¬à¦¾à¦¤', 'batÌª', 19, 'Rice', 'noun_fruits', 0),
(182, 'à¦®à§‹à¦¦à§', 'modu', 19, 'Curry', 'noun_fruits', 0),
(183, 'à¦¡à¦¿à¦®à¦¾', 'dima', 19, 'Egg', 'noun_fruits', 0),
(184, 'à¦«à§‡à¦«à§‡', 'fefe', 19, 'Papaya', 'noun_fruits', 0),
(185, 'à¦—à§‹à¦¡à¦¾', 'goda', 19, 'Seed', 'noun_fruits', 0),
(186, 'à¦«à§à¦²', 'pÊ°ul', 19, 'Flower', 'noun_fruits', 0),
(187, 'à¦®à¦¾à¦¸', 'mas', 19, 'Fish', 'noun_fruits', 0),
(188, 'à¦®à¦¾à¦¶à¦¾à¦‚', 'maÊƒaÅ‹', 19, 'Meat', 'noun_fruits', 0),
(189, 'à¦¡à¦¾à¦‡à¦²', 'dail', 19, 'Pearl', 'noun_fruits', 0),
(190, 'à¦•à¦²à¦¾', 'kÉ”la', 19, 'banana', 'noun_fruits', 0),
(191, 'à¦¯à§‹à¦²', 'zol', 19, 'soup', 'noun_fruits', 0),
(192, 'à¦¹à§‹à¦¬à§à¦°à¦¿', 'hobri', 19, 'guava', 'noun_fruits', 0),
(193, 'à¦—à¦¾à¦¸', 'gas', 19, 'tree', 'noun_fruits', 0),
(194, 'à¦«à¦¦à§à¦¦', 'fÉ”dÌªdÌªÉ”', 19, 'lotus', 'noun_fruits', 0),
(195, 'à¦¬à¦¾à¦¶', 'baÊƒ', 19, 'bamboo', 'noun_fruits', 0),
(196, 'à¦²à¦¿à¦®à§à¦¬à§', 'limbu', 19, 'lemon', 'noun_fruits', 0),
(197, 'à¦«à¦²', 'pÊ°É”l', 19, 'fruit', 'noun_fruits', 0),
(198, 'à¦®à¦¤', 'mÉ”tÌª', 19, 'wine', 'noun_fruits', 0),
(199, 'à¦²à¦¬à¦¨', 'lÉ”bÉ”n', 19, 'salt', 'noun_fruits', 0),
(200, 'à¦¦à¦‡', 'dÌªoi', 19, 'curd', 'noun_fruits', 0),
(201, 'à¦¦à¦¾à¦¨', 'dÌªan', 19, 'paddy', 'noun_fruits', 0),
(202, 'à¦—à¦®', 'gÉ”m', 19, 'wheat', 'noun_fruits', 0),
(203, 'à¦¹à¦°à§', 'horu', 19, 'mustard', 'noun_fruits', 0),
(204, 'à¦®à¦°à¦¿à¦¸', 'moris', 19, 'pepper', 'noun_fruits', 0),
(205, 'à¦«à¦¿à¦¯à¦¼à¦¾à¦‡à¦¸', 'fiais', 19, 'onion', 'noun_fruits', 0),
(206, 'à¦•à§‹à¦¸à§', 'kosu', 19, 'edible root', 'noun_fruits', 0),
(207, 'à¦¸à§à¦•à§à¦•à¦¾ à¦¬à¦¾à¦‡à¦—à§à¦¨', 'sukka baigun', 19, 'tomato', 'noun_fruits', 0),
(208, 'à¦•à§à¦®à§à¦°à¦¾', 'kumra', 19, 'pumpkin', 'noun_fruits', 0),
(209, 'à¦¸à¦¿à¦®', 'sim', 19, 'bean', 'noun_fruits', 0),
(210, 'à¦†à¦²à§', 'alu', 19, 'potato', 'noun_fruits', 0),
(211, 'à¦¹à¦¾à¦•', 'hak', 19, 'greenleaf', 'noun_fruits', 0),
(212, 'à¦¬à¦¾à¦‡à¦—à§à¦¨', 'baigun', 19, 'Eggplant', 'noun_fruits', 0),
(213, 'à¦¹à¦¶à¦¾', 'hÉ”Êƒa', 19, 'Cucumber', 'noun_fruits', 0),
(214, 'à¦¦à§à¦¦', 'dÌªudÌª ', 19, 'milk', 'noun_fruits', 0),
(215, 'à¦¤à¦¿à¦¤à¦¾', 'tÌªitÌªa', 19, 'bitter', 'noun_fruits', 0),
(216, 'à¦¯à¦¾à¦²', 'zal', 19, 'biting', 'noun_fruits', 0),
(217, 'à¦¸à¦¾à¦¶à¦¿', 'saÊƒi', 19, 'farmer', 'noun_professions', 0),
(218, 'à¦—à¦¿à¦¨à§à¦¨à¦¿', 'ginni', 19, 'housewife', 'noun_professions', 0),
(219, 'à¦®à¦¾à¦¶à¦Ÿà¦°', 'maÊƒtor', 19, 'teacher', 'noun_professions', 0),
(220, 'à¦—à§à¦¶à¦¾à¦‡/à¦—à§à¦°à§', 'guÊƒai/guru', 19, 'monk', 'noun_professions', 0),
(221, 'à¦•à§‹à¦¬à¦¿à¦°à¦¾à¦¯', 'kobiraz', 19, 'local doctor', 'noun_professions', 0),
(222, 'à¦¨à§‹à¦–', '', 19, 'nail', 'noun_professions', 0),
(223, 'à¦®à§à¦–/à¦®à§à¦¹', '', 19, 'mouse', 'noun_professions', 0),
(224, 'à¦¨à¦¾à¦•/à¦®à§à¦¹', '', 19, 'nose', 'noun_professions', 0),
(225, 'à¦•à¦¾à¦¨', '', 19, 'ear', 'noun_professions', 0),
(226, 'à¦•à¦«à¦¾à¦²', '', 19, 'forhead', 'noun_professions', 0),
(227, 'à¦ à§à¦Ÿ', '', 19, 'lip', 'noun_professions', 0),
(228, 'à¦¦à¦¾à¦¤', '', 19, 'tooth', 'noun_professions', 0),
(229, 'à¦¯à¦¿à¦¬', '', 19, 'tongue', 'noun_professions', 0),
(230, 'à¦¸à§‹à¦•', '', 19, 'eye', 'noun_professions', 0),
(231, 'à¦—à¦²à¦¾', '', 19, 'Throat', 'noun_professions', 0),
(232, 'à¦«à§à¦¯à¦¾à¦Ÿ', '', 19, 'belly', 'noun_professions', 0),
(233, 'à¦°à¦•à§à¦¤', '', 19, 'blood', 'noun_professions', 0),
(234, '', '', 19, 'breast', 'noun_professions', 0),
(235, '', '', 19, 'sex organ', 'noun_professions', 0),
(236, '', '', 19, 'sex organ', 'noun_professions', 0),
(237, '', '', 19, 'hips', 'noun_professions', 0),
(238, 'à¦¸à§à¦²', '', 19, 'hair', 'noun_professions', 0),
(239, 'à¦¬à¦¾à¦¬à¦¾', 'baba', 19, 'father', 'noun_human_kinship', 0),
(240, 'à¦®à¦¾', 'ma', 19, 'mother', 'noun_human_kinship', 0),
(241, 'à¦¤à§à¦¯à¦¾à¦®à§à¦ªà¦¾', 'tÌªÃ¦mpa', 19, 'son', 'noun_human_kinship', 0),
(242, 'à¦¤à§à¦¯à¦¾à¦®à§à¦ªà¦¿', 'tÌªempi', 19, 'daughter', 'noun_human_kinship', 0),
(243, 'à¦¬à¦¾à¦‡', 'bai', 19, 'brother', 'noun_human_kinship', 0),
(244, 'à¦¬à§à¦‡à¦¨', 'buin', 19, 'sister', 'noun_human_kinship', 0),
(245, 'à¦†à¦¬à§', 'abu', 19, 'grand father', 'noun_human_kinship', 0),
(246, 'à¦¦à¦¾à¦¦à¦¿', 'dÌªadÌªi', 19, 'grand mother', 'noun_human_kinship', 0),
(247, 'à¦•à¦¾à¦•à¦¾', 'sasa', 19, 'uncle', 'noun_human_kinship', 0),
(248, 'à¦«à¦¿à¦¶à¦¿', 'fiÊƒi', 19, 'aunt', 'noun_human_kinship', 0),
(249, 'à¦®à§à¦‡', 'mui', 19, 'maternal aunt', 'noun_human_kinship', 0),
(250, 'à¦®à¦¾à¦®à¦¾', 'mama', 19, 'maternal uncle', 'noun_human_kinship', 0),
(251, 'à¦•à¦¾à¦•à¦¿', 'kaki', 19, 'aunt', 'noun_human_kinship', 0),
(252, 'à¦®à¦¾à¦®à¦¿', 'mami', 19, 'aunt', 'noun_human_kinship', 0),
(253, 'à¦¬à§à¦°à¦¾', 'bura', 19, 'old man', 'noun_human_kinship', 0),
(254, 'à¦¬à§à¦°à¦¿', 'buri', 19, 'old woman', 'noun_human_kinship', 0),
(255, 'à¦¤à§à¦¯à¦¾à¦®à§à¦ªà¦¾-à¦¤à§‡à¦®à§à¦ªà¦¿', 'tÌªempa-tÌªempi', 19, 'child', 'noun_human_kinship', 0),
(256, 'à¦¬à¦¾à¦¬à¦¾', 'baba', 19, 'father', 'noun_human_kinship', 0),
(257, 'à¦®à¦¾à¦‡à¦ªà§', 'maipu', 19, 'woman', 'noun_human_kinship', 0),
(258, 'à¦¸à§à¦¯à¦¾à¦‚à¦°à¦¾', 'sÃ¦Å‹ra', 19, 'young man', 'noun_human_kinship', 0),
(259, 'à¦¸à§à¦¯à¦¾à¦‚à¦°à¦¿', 'sÃ¦Å‹ri', 19, 'young lady', 'noun_human_kinship', 0),
(260, 'à¦¬à¦¿à¦¯à¦¼à¦¾à¦‡à¦¤à§à¦¤à¦¾', 'biaitÌªtÌªa', 19, 'married', 'noun_human_kinship', 0),
(261, 'à¦¬à¦¿à¦¦à¦¬à¦¾', 'bidÌªba', 19, 'widow', 'noun_human_kinship', 0),
(262, 'à¦–à§à¦¯à¦¾à¦²à¦¾', 'kÊ°Ã¦la', 19, 'game', 'noun_cultural', 0),
(263, 'à¦¨à¦¾à¦¸', 'nas', 19, 'dance', 'noun_cultural', 0),
(264, 'à¦—à¦¾à¦¨', 'gan', 19, 'song', 'noun_cultural', 0),
(265, 'à¦†à¦²à¦¾à¦ª', 'alap', 19, 'story', 'noun_cultural', 0),
(266, 'à¦¸à¦°à¦¾', 'sÉ”ra', 19, 'rhyme', 'noun_cultural', 0),
(267, 'à¦¡à§‹à¦²', 'dol', 19, 'durm', 'noun_cultural', 0),
(268, '', '', 19, 'kortal', 'noun_cultural', 0),
(269, 'à¦¡à¦¾à¦‡à¦¨à¦¾-à¦¤à¦¬à§à¦²à¦¾', 'daina-tÌªÉ”bla', 19, 'tobla', 'noun_cultural', 0),
(270, 'à¦¬à¦¾à¦¶à¦¿', 'baÊƒi', 19, 'flute', 'noun_cultural', 0),
(271, 'à¦†à¦‚à¦—à¦¾à¦«à§à¦¯à¦¾à¦¨à§à¦Ÿ', 'aÅ‹gafant', 19, 'dress', 'noun_cultural', 0),
(272, 'à¦…à§à¦¯à¦¾', 'Ã¦k', 19, 'one', 'noun_numerics', 0),
(273, '', 'dÌªui', 19, 'two', 'noun_numerics', 0),
(274, '', 'tÌªin', 19, 'three', 'noun_numerics', 0),
(275, '', 'sair', 19, 'four', 'noun_numerics', 0),
(276, '', 'fas', 19, 'five', 'noun_numerics', 0),
(277, '', 'soeÌ¯', 19, 'six', 'noun_numerics', 0),
(278, '', 'ÊƒatÌª', 19, 'seven', 'noun_numerics', 0),
(279, '', 'at', 19, 'eight', 'noun_numerics', 0),
(280, '', 'nÉ”eÌ¯', 19, 'nine', 'noun_numerics', 0),
(281, '', 'dÌªÉ”Êƒ', 19, 'ten', 'noun_numerics', 0),
(282, '', 'egarÉ”', 19, 'eleven', 'noun_numerics', 0),
(283, '', 'biÊƒ / kuri', 19, 'twenty', 'noun_numerics', 0),
(284, '', 'ekuÊƒ', 19, 'twentyone', 'noun_numerics', 0),
(285, '', 'pÉ”ncaÊƒ', 19, 'fifty', 'noun_numerics', 0),
(286, '', 'Ã¦kÊƒÉ”', 19, 'hundred', 'noun_numerics', 0),
(287, '', 'Ã¦khaza', 19, 'one thousand', 'noun_numerics', 0),
(288, '', 'hali', 19, 'bunch(four in number)', 'noun_numerics', 0),
(289, '', 'pÉ”tÌªÊ°É”m', 19, 'first', 'noun_numerics', 0),
(290, '', 'dÌªitÌªio', 19, 'second', 'noun_numerics', 0),
(291, '', 'Ã¦kbar', 19, 'one time', 'noun_numerics', 0),
(292, '', 'dÌªuibar', 19, 'two time', 'noun_numerics', 0),
(293, 'à¦…à§à¦¯à¦¾à¦•', '', 19, 'one', 'noun_numerics', 0),
(294, 'à¦¦à§à¦‡', '', 19, 'two', 'noun_numerics', 0),
(295, 'à¦¤à¦¿à¦¨', '', 19, 'three', 'noun_numerics', 0),
(296, 'à¦¸à¦¾à¦‡à¦°', '', 19, 'four', 'noun_numerics', 0),
(297, 'à¦«à¦¾à¦¸', '', 19, 'five', 'noun_numerics', 0),
(298, 'à¦¸à§Ÿ', '', 19, 'six', 'noun_numerics', 0),
(299, 'à¦¶à¦¾à¦¤', '', 19, 'seven', 'noun_numerics', 0),
(300, 'à¦†à¦Ÿ', '', 19, 'eight', 'noun_numerics', 0),
(301, 'à¦¨à§Ÿ', '', 19, 'nine', 'noun_numerics', 0),
(302, 'à¦¦à¦¶', '', 19, 'ten', 'noun_numerics', 0),
(303, 'à¦…à§à¦¯à¦¾à¦—à¦¾à¦°', '', 19, 'eleven', 'noun_numerics', 0),
(304, 'à¦¬à¦¿à¦¶/à¦•à§à¦°à¦¿', '', 19, 'twenty', 'noun_numerics', 0),
(305, 'à¦…à§à¦¯à¦¾à¦•à§à¦¶', '', 19, 'twentyone', 'noun_numerics', 0),
(306, 'à¦ªà¦žà§à¦šà¦¾à¦¶', '', 19, 'fifty', 'noun_numerics', 0),
(307, 'à¦†à¦•à¦¶', '', 19, 'hundred', 'noun_numerics', 0),
(308, 'à¦…à§à¦¯à¦¾à¦•à¦¹à¦¾à¦¯à¦¾à¦°', '', 19, 'one thousand', 'noun_numerics', 0),
(309, 'à¦¹à¦¾à¦²à¦¿', '', 19, 'bunch(four in number)', 'noun_numerics', 0),
(310, 'à¦ªà¦¥à¦®', '', 19, 'first', 'noun_numerics', 0),
(311, 'à¦¦à¦¿à¦¤à¦¿à§Ÿà§‹', '', 19, 'second', 'noun_numerics', 0),
(312, 'à¦…à§à¦¯à¦¾à¦•à¦¬à¦¾à¦°', '', 19, 'one time', 'noun_numerics', 0),
(313, 'à¦¦à§à¦‡à¦¬à¦¾à¦°', '', 19, 'two time', 'noun_numerics', 0),
(314, 'à¦…à§à¦¯à¦¾à¦•', '', 19, 'one', 'noun_numerics', 0),
(315, 'à¦¦à§à¦‡', '', 19, 'two', 'noun_numerics', 0),
(316, 'à¦¤à¦¿à¦¨', '', 19, 'three', 'noun_numerics', 0),
(317, 'à¦¸à¦¾à¦‡à¦°', '', 19, 'four', 'noun_numerics', 0),
(318, 'à¦«à¦¾à¦¸', '', 19, 'five', 'noun_numerics', 0),
(319, 'à¦¸à§Ÿ', '', 19, 'six', 'noun_numerics', 0),
(320, 'à¦¶à¦¾à¦¤', '', 19, 'seven', 'noun_numerics', 0),
(321, 'à¦†à¦Ÿ', '', 19, 'eight', 'noun_numerics', 0),
(322, 'à¦¨à§Ÿ', '', 19, 'nine', 'noun_numerics', 0),
(323, 'à¦¦à¦¶', '', 19, 'ten', 'noun_numerics', 0),
(324, 'à¦…à§à¦¯à¦¾à¦—à¦¾à¦°', '', 19, 'eleven', 'noun_numerics', 0),
(325, 'à¦¬à¦¿à¦¶/à¦•à§à¦°à¦¿', '', 19, 'twenty', 'noun_numerics', 0),
(326, 'à¦…à§à¦¯à¦¾à¦•à§à¦¶', '', 19, 'twentyone', 'noun_numerics', 0),
(327, 'à¦ªà¦žà§à¦šà¦¾à¦¶', '', 19, 'fifty', 'noun_numerics', 0),
(328, 'à¦…à§à¦¯à¦¾à¦•à¦¶', '', 19, 'hundred', 'noun_numerics', 0),
(329, 'à¦…à§à¦¯à¦¾à¦•à¦¹à¦¾à¦¯à¦¾à¦°', '', 19, 'one thousand', 'noun_numerics', 0),
(330, 'à¦¹à¦¾à¦²à¦¿', '', 19, 'bunch(four in number)', 'noun_numerics', 0),
(331, 'à¦ªà¦¥à¦®', '', 19, 'first', 'noun_numerics', 0),
(332, 'à¦¦à¦¿à¦¤à¦¿à§Ÿà§‹', '', 19, 'second', 'noun_numerics', 0),
(333, 'à¦…à§à¦¯à¦¾à¦•à¦¬à¦¾à¦°', '', 19, 'one time', 'noun_numerics', 0),
(334, 'à¦¦à§à¦‡à¦¬à¦¾à¦°', '', 19, 'two time', 'noun_numerics', 0),
(335, NULL, NULL, 18, NULL, NULL, 0),
(336, 'à¦•à§ƒà¦·à¦…à¦•', 'kriÊƒÉ”k ', 18, 'farmer', 'noun_professions', 0),
(337, 'grihini', ' grihini ', 18, 'housewife', 'noun_professions', 0),
(338, 'à¦®à¦¾à¦¸à§à¦¤à¦°', 'mastÌªor', 18, 'teacher', 'noun_professions', 0),
(339, 'à¦§à¦®', ' tÊ°akur ', 18, 'monk', 'noun_professions', 0),
(340, 'à¦•à¦¬à¦¿à¦°à¦¾à¦œ', 'kobiraÉŸ', 18, 'local doctor', 'noun_professions', 0),
(341, '', 'à¦¨à§à¦•', 18, 'nail', 'noun_professions', 0),
(342, '', 'à¦®à§à¦•', 18, 'mouse', 'noun_professions', 0),
(343, '', 'à¦¨à¦¾à¦—', 18, 'nose', 'noun_professions', 0),
(344, '', '', 18, 'ear', 'noun_professions', 0),
(345, '', 'à¦•à§‹à¦ªà¦¾à¦²', 18, 'forhead', 'noun_professions', 0),
(346, '', 'à¦¥à§à¦¤', 18, 'lip', 'noun_professions', 0),
(347, '', 'à¦¦à¦¾à¦¤', 18, 'tooth', 'noun_professions', 0),
(348, '', 'à¦œà¦¿à¦¬à¦¬à¦¾à¦¹', 18, 'tongue', 'noun_professions', 0),
(349, '', 'à¦šà§à¦•', 18, 'eye', 'noun_professions', 0),
(350, '', 'à¦—à¦¾à¦²à¦¾', 18, 'Throat', 'noun_professions', 0),
(351, '', 'à¦ªà§‡à¦¤', 18, 'belly', 'noun_professions', 0),
(352, '', '', 18, 'blood', 'noun_professions', 0),
(353, '', '', 18, 'breast', 'noun_professions', 0),
(354, '', '', 18, 'sex organ', 'noun_professions', 0),
(355, '', '', 18, 'sex organ', 'noun_professions', 0),
(356, '', '', 18, 'hips', 'noun_professions', 0),
(357, '', '', 18, 'hair', 'noun_professions', 0),
(358, '', 'à¦—à¦¾à¦“', 18, 'body', 'noun_professions', 0),
(359, '', '', 18, 'head', 'noun_professions', 0),
(360, '', '', 18, 'hand', 'noun_professions', 0),
(361, '', 'à¦ à§‡à¦‚', 18, 'leg', 'noun_professions', 0),
(362, '', 'à¦…à¦¾à¦™à§à¦²', 18, 'finger', 'noun_professions', 0),
(363, '', 'à¦¨à§à¦•', 18, 'nail', 'noun_professions', 0),
(364, '', 'à¦®à§à¦•', 18, 'mouse', 'noun_professions', 0),
(365, '', 'à¦¨à¦¾à¦—', 18, 'nose', 'noun_professions', 0),
(366, '', '', 18, 'ear', 'noun_professions', 0),
(367, '', 'à¦•à§‹à¦ªà¦¾à¦²', 18, 'forhead', 'noun_professions', 0),
(368, '', 'à¦¥à§à¦¤', 18, 'lip', 'noun_professions', 0),
(369, '', 'à¦¦à¦¾à¦¤', 18, 'tooth', 'noun_professions', 0),
(370, '', 'à¦œà¦¿à¦¬à¦¬à¦¾à¦¹', 18, 'tongue', 'noun_professions', 0),
(371, '', 'à¦šà§à¦•', 18, 'eye', 'noun_professions', 0),
(372, '', 'à¦—à¦¾à¦²à¦¾', 18, 'Throat', 'noun_professions', 0),
(373, '', 'à¦ªà§‡à¦¤', 18, 'belly', 'noun_professions', 0),
(374, '', '', 18, 'blood', 'noun_professions', 0),
(375, '', '', 18, 'breast', 'noun_professions', 0),
(376, '', '', 18, 'sex organ', 'noun_professions', 0),
(377, '', '', 18, 'sex organ', 'noun_professions', 0),
(378, '', '', 18, 'hips', 'noun_professions', 0),
(379, '', '', 18, 'hair', 'noun_professions', 0),
(380, 'à¦…à§à¦¯à¦¾à¦¯à¦•à¦¾', 'azka', 19, 'Today', 'noun_temporal', 0),
(381, 'à¦•à¦¾à¦²à§à¦•à¦¾', 'kalka', 19, 'Tomorrow', 'noun_temporal', 0),
(382, 'à¦—à§‡à¦¸à§‡à¦•à¦¾à¦‡à¦²à§‡', 'gesekaile', 19, 'Yesterday', 'noun_temporal', 0),
(383, 'à¦¶à¦•à¦¾à¦²', 'ÊƒÉ”kal', 19, 'morning', 'noun_temporal', 0),
(384, 'à¦¬à¦¿à¦¯à¦¼à§‡à¦²', 'biel', 19, 'afternoon', 'noun_temporal', 0),
(385, 'à¦¶à¦‡à¦¨à§à¦¦à¦¾', 'ÊƒÉ”mpa', 19, 'evening', 'noun_temporal', 0),
(386, 'à¦°à¦¾à¦‡à¦¤', 'raitÌª', 19, 'night', 'noun_temporal', 0),
(387, 'à¦—à¦°à¦®à¦•à¦¾à¦²', 'gÉ”rÉ”mkal', 19, 'summer', 'noun_temporal', 0),
(388, 'à¦¬à¦¾à¦¦à¦²à¦¾à¦¦à¦¿à¦¨', 'badÌªladÌªin', 19, 'rainy season', 'noun_temporal', 0),
(389, 'à¦¶à¦¿à¦¤', 'ÊƒitÌª', 19, 'winter', 'noun_temporal', 0),
(390, 'à¦°à¦‡à¦¬à¦¾à¦°', 'roibar', 19, 'sunday', 'noun_temporal', 0),
(391, 'à¦¶à§‹à¦®à¦¬à¦¾à¦°', 'Êƒombar', 19, 'monday', 'noun_temporal', 0),
(392, 'à¦®à¦‚à¦—à¦²à§à¦¬à¦¾à¦°', 'moÅ‹golbar', 19, 'tuesday', 'noun_temporal', 0),
(393, 'à¦¬à§à¦¦à¦¬à¦¾à¦°', 'ÌªbudÌªbar', 19, 'wednesday', 'noun_temporal', 0),
(394, 'à¦¬à¦¿à¦¶à¦¶à§à¦¦à¦¬à¦¾à¦°', 'biÊƒÊƒudÌªbar', 19, 'thursday', 'noun_temporal', 0),
(395, 'à¦¶à§à¦•à§à¦•à§à¦°à¦¬à¦¾à¦°', 'Êƒukkurbar', 19, 'friday', 'noun_temporal', 0),
(396, 'à¦¶à§‹à¦¨à¦¿à¦¬à¦¾à¦°', 'Êƒonibar', 19, 'saturday', 'noun_temporal', 0),
(397, 'à¦¦à¦¿à¦¨', 'din', 19, 'day', 'noun_temporal', 0),
(398, 'à¦¶à¦ªà§à¦¤à¦¾', 'ÊƒÉ”ptÌª', 19, 'week', 'noun_temporal', 0),
(399, 'à¦¬à¦¸à§‹à¦°', 'bÉ”sor', 19, 'year', 'noun_temporal', 0),
(400, 'à¦—à¦¾à¦“', '', 18, 'body', 'noun_professions', 0),
(401, '', '', 18, 'head', 'noun_professions', 0),
(402, '', '', 18, 'hand', 'noun_professions', 0),
(403, 'à¦ à§‡à¦‚', '', 18, 'leg', 'noun_professions', 0),
(404, 'à¦…à¦¾à¦™à§à¦²', '', 18, 'finger', 'noun_professions', 0),
(405, 'à¦¨à§à¦•', '', 18, 'nail', 'noun_professions', 0),
(406, 'à¦®à§à¦•', '', 18, 'mouse', 'noun_professions', 0),
(407, 'à¦¨à¦¾à¦—', '', 18, 'nose', 'noun_professions', 0),
(408, '', '', 18, 'ear', 'noun_professions', 0),
(409, 'à¦•à§‹à¦ªà¦¾à¦²', '', 18, 'forhead', 'noun_professions', 0),
(410, 'à¦¥à§à¦¤', '', 18, 'lip', 'noun_professions', 0),
(411, 'à¦¦à¦¾à¦¤', '', 18, 'tooth', 'noun_professions', 0),
(412, 'à¦œà¦¿à¦¬à¦¬à¦¾à¦¹', '', 18, 'tongue', 'noun_professions', 0),
(413, 'à¦šà§à¦•', '', 18, 'eye', 'noun_professions', 0),
(414, 'à¦—à¦¾à¦²à¦¾', '', 18, 'Throat', 'noun_professions', 0),
(415, 'à¦ªà§‡à¦¤', '', 18, 'belly', 'noun_professions', 0),
(416, '', '', 18, 'blood', 'noun_professions', 0),
(417, '', '', 18, 'breast', 'noun_professions', 0),
(418, '', '', 18, 'sex organ', 'noun_professions', 0),
(419, '', '', 18, 'sex organ', 'noun_professions', 0),
(420, '', '', 18, 'hips', 'noun_professions', 0),
(421, '', '', 18, 'hair', 'noun_professions', 0),
(422, '', '', 18, 'body', 'noun_professions', 0),
(423, '', '', 18, 'head', 'noun_professions', 0),
(424, '', '', 18, 'hand', 'noun_professions', 0),
(425, '', '', 18, 'leg', 'noun_professions', 0),
(426, '', '', 18, 'finger', 'noun_professions', 0),
(427, '', '', 18, 'nail', 'noun_professions', 0),
(428, '', '', 18, 'mouse', 'noun_professions', 0),
(429, '', '', 18, 'nose', 'noun_professions', 0),
(430, '', '', 18, 'ear', 'noun_professions', 0),
(431, '', '', 18, 'forhead', 'noun_professions', 0),
(432, '', '', 18, 'lip', 'noun_professions', 0),
(433, '', '', 18, 'tooth', 'noun_professions', 0),
(434, '', '', 18, 'tongue', 'noun_professions', 0),
(435, '', '', 18, 'eye', 'noun_professions', 0),
(436, '', '', 18, 'Throat', 'noun_professions', 0),
(437, '', '', 18, 'belly', 'noun_professions', 0),
(438, '', '', 18, 'blood', 'noun_professions', 0),
(439, '', '', 18, 'breast', 'noun_professions', 0),
(440, '', '', 18, 'sex organ', 'noun_professions', 0),
(441, '', '', 18, 'sex organ', 'noun_professions', 0),
(442, '', '', 18, 'hips', 'noun_professions', 0),
(443, '', '', 18, 'hair', 'noun_professions', 0),
(444, 'à¦¬à¦¾à¦¬à¦¾', 'baba', 18, 'father', 'noun_human_kinship', 0),
(445, 'à¦†à¦‡à¦¯à¦¼à§‡', 'aie', 18, 'mother', 'noun_human_kinship', 0),
(446, 'à¦ªà§‹à¦²à¦¾', 'pola', 18, 'son', 'noun_human_kinship', 0),
(447, 'à¦à¦¿à¦“', 'ÉŸÊ°io ', 18, 'daughter', 'noun_human_kinship', 0),
(448, 'à¦¦à¦¾à¦¦à¦¾', 'dÌªadÌªa ', 18, 'brother', 'noun_human_kinship', 0),
(449, 'à¦¬à§à¦‡à¦¨à§€', 'buini ', 18, 'sister', 'noun_human_kinship', 0),
(450, 'à¦†à¦œà¦…', 'aÉŸÉ” ', 18, 'grand father', 'noun_human_kinship', 0),
(451, 'à¦†à¦¬à§', 'abu ', 18, 'grand mother', 'noun_human_kinship', 0),
(452, 'à¦•à¦¾à¦•à¦¾', 'kaka ', 18, 'uncle', 'noun_human_kinship', 0),
(453, 'à¦ªà¦¿à¦ªà¦¿', 'pipi ', 18, 'aunt', 'noun_human_kinship', 0),
(454, 'à¦®à¦¾à¦¹à¦¿', 'mahi ', 18, 'maternal aunt', 'noun_human_kinship', 0),
(455, 'à¦®à¦¾à¦¹à¦¿', 'mahi ', 18, 'maternal uncle', 'noun_human_kinship', 0),
(456, 'à¦•à¦¾à¦•à§€', ' kaki ', 18, 'aunt', 'noun_human_kinship', 0),
(457, 'à¦®à¦¾à¦®à¦¿', 'mami', 18, 'aunt', 'noun_human_kinship', 0),
(458, 'à¦¬à§à¦°à¦¾', 'bura', 18, 'old man', 'noun_human_kinship', 0),
(459, 'à¦¬à§à¦°à¦¿', 'buri', 18, 'old woman', 'noun_human_kinship', 0),
(460, 'à¦¸à¦¾à¦“à¦¯à¦¼à¦¾', 'saoa', 18, 'child', 'noun_human_kinship', 0),
(461, 'à¦¬à¦¾à¦¬à¦¾', 'baba', 18, 'father', 'noun_human_kinship', 0),
(462, 'à¦¤à¦¿à¦®à¦¤', 'tÌªimÉ”tÌª ', 18, 'woman', 'noun_human_kinship', 0),
(463, 'à¦šà§‡à¦‚à¦°à¦¾', 'cÃ¦Å‹ra ', 18, 'young man', 'noun_human_kinship', 0),
(464, 'à¦—à¦¾à¦¬à§à¦°', 'gabur ', 18, 'young lady', 'noun_human_kinship', 0),
(465, 'à¦¬à¦¿à¦¯à¦¼à¦¾à¦•à¦°à¦¾', 'biakÉ”ra ', 18, 'married', 'noun_human_kinship', 0),
(466, 'à¦¨à¦¾à¦°à§€à¦¹', 'narih', 18, 'widow', 'noun_human_kinship', 0),
(467, 'à¦–à§‡à¦²à¦¾à¦¹', 'kÊ°Ã¦la', 18, 'game', 'noun_cultural', 0),
(468, 'à¦¨à¦¾à¦¸', ' naÊƒ ', 18, 'dance', 'noun_cultural', 0),
(469, 'à¦—à¦¾à¦¹à¦¨', 'gahon', 18, 'song', 'noun_cultural', 0),
(470, 'à¦—à¦ª', ' gÉ”p ', 18, 'story', 'noun_cultural', 0),
(471, '', 'cÊ°É”ra', 18, 'rhyme', 'noun_cultural', 0),
(472, 'à¦¨à¦¾à¦°à¦¦à¦¿', ' nardÌªi ', 18, 'durm', 'noun_cultural', 0),
(473, 'à¦•à¦°à¦¤à¦¾à¦²', 'kÉ”rotÌªal ', 18, 'kortal', 'noun_cultural', 0),
(474, 'à¦¤à¦¬à¦²à¦¾', 'tÌªÉ”bla', 18, 'tobla', 'noun_cultural', 0),
(475, 'à¦¬à¦¾à¦¹à¦¿', ' bahi ', 18, 'flute', 'noun_cultural', 0),
(476, 'à¦ªà§‹à¦¶à¦¾à¦•', 'poÊƒak ', 18, 'dress', 'noun_cultural', 0),
(477, 'à¦–à§‡à¦²à¦¾à¦¹', '', 18, 'game', 'noun_cultural', 0),
(478, 'à¦¨à¦¾à¦¸', '', 18, 'dance', 'noun_cultural', 0),
(479, 'à¦—à¦¾à¦¹à¦¨', '', 18, 'song', 'noun_cultural', 0),
(480, 'à¦—à¦ª', '', 18, 'story', 'noun_cultural', 0),
(481, '', '', 18, 'rhyme', 'noun_cultural', 0),
(482, 'à¦¨à¦¾à¦°à¦¾à¦¦', '', 18, 'durm', 'noun_cultural', 0),
(483, '', '', 18, 'kortal', 'noun_cultural', 0),
(484, '', '', 18, 'tobla', 'noun_cultural', 0),
(485, 'à¦¬à¦¾à¦¹à¦¿', '', 18, 'flute', 'noun_cultural', 0),
(486, '', '', 18, 'dress', 'noun_cultural', 0),
(487, 'à¦…à§à¦¯à¦¾à¦•', 'Ã¦k', 18, 'one', 'noun_numerics', 0),
(488, '', '', 18, 'two', 'noun_numerics', 0),
(489, '', '', 18, 'three', 'noun_numerics', 0),
(490, '', '', 18, 'four', 'noun_numerics', 0),
(491, 'à¦ªà¦¾à¦¸', 'pas ', 18, 'five', 'noun_numerics', 0),
(492, '', '', 18, 'six', 'noun_numerics', 0),
(493, '', '', 18, 'seven', 'noun_numerics', 0),
(494, 'à¦†à¦Ÿ', '', 18, 'eight', 'noun_numerics', 0),
(495, '', '', 18, 'nine', 'noun_numerics', 0),
(496, '', '', 18, 'ten', 'noun_numerics', 0),
(497, 'à¦…à§à¦¯à¦¾à¦—à¦¾à¦°à§‹', 'Ã¦garo  ', 18, 'eleven', 'noun_numerics', 0),
(498, '', '', 18, 'twenty', 'noun_numerics', 0),
(499, '', '', 18, 'twentyone', 'noun_numerics', 0),
(500, '', '', 18, 'fifty', 'noun_numerics', 0),
(501, 'à¦…à§à¦¯à¦¾à¦•à¦¶à§‹', '  Ã¦kÊƒo', 18, 'hundred', 'noun_numerics', 0),
(502, '', ' Ã¦khaÉŸar ', 18, 'one thousand', 'noun_numerics', 0),
(503, '', '', 18, 'bunch(four in number)', 'noun_numerics', 0),
(504, '', '', 18, 'first', 'noun_numerics', 0),
(505, '', '', 18, 'second', 'noun_numerics', 0),
(506, '', 'Ã¦kbar', 18, 'one time', 'noun_numerics', 0),
(507, '', '', 18, 'two time', 'noun_numerics', 0),
(508, '', '', 18, 'one', 'noun_numerics', 0),
(509, '', '', 18, 'two', 'noun_numerics', 0),
(510, '', '', 18, 'three', 'noun_numerics', 0),
(511, '', '', 18, 'four', 'noun_numerics', 0),
(512, 'à¦ªà¦¾à¦¸', '', 18, 'five', 'noun_numerics', 0),
(513, '', '', 18, 'six', 'noun_numerics', 0),
(514, '', '', 18, 'seven', 'noun_numerics', 0),
(515, 'à¦…à¦¾à¦¤', '', 18, 'eight', 'noun_numerics', 0),
(516, '', '', 18, 'nine', 'noun_numerics', 0),
(517, '', '', 18, 'ten', 'noun_numerics', 0),
(518, '', '', 18, 'eleven', 'noun_numerics', 0),
(519, '', '', 18, 'twenty', 'noun_numerics', 0),
(520, '', '', 18, 'twentyone', 'noun_numerics', 0),
(521, '', '', 18, 'fifty', 'noun_numerics', 0),
(522, '', '', 18, 'hundred', 'noun_numerics', 0),
(523, '', '', 18, 'one thousand', 'noun_numerics', 0),
(524, '', '', 18, 'bunch(four in number)', 'noun_numerics', 0),
(525, 'à¦ªà¦‡à¦²à¦¾', '', 18, 'first', 'noun_numerics', 0),
(526, '', '', 18, 'second', 'noun_numerics', 0),
(527, '', '', 18, 'one time', 'noun_numerics', 0),
(528, '', '', 18, 'two time', 'noun_numerics', 0),
(529, 'à¦†à¦®à¦¿', 'ami', 19, 'I', 'noun_pronoun', 0),
(530, 'à¦†à¦®à¦°à¦¾', 'amra', 19, 'We', 'noun_pronoun', 0),
(531, 'à¦¤à§à¦‡', 'tÌªui', 19, 'You', 'noun_pronoun', 0),
(532, 'à¦¤à§‹à¦°à¦¾', 'tÌªora', 19, 'You', 'noun_pronoun', 0),
(533, 'à¦¶à§‡', 'Êƒe', 19, 'He/She', 'noun_pronoun', 0),
(534, 'à¦¤à¦¾à¦°à¦¾', 'tÌªara', 19, 'They', 'noun_pronoun', 0),
(535, 'à¦¹à§‡', 'he', 19, 'He', 'noun_pronoun', 0),
(536, 'à¦†à¦ªà¦¨à§‡', 'apne', 19, 'You', 'noun_pronoun', 0),
(537, 'à¦¨à¦¿à¦œ', 'niz', 19, 'Own', 'noun_pronoun', 0),
(538, '', '', 19, 'Self', 'noun_pronoun', 0),
(539, 'à¦¶à¦¯à¦¼à¦‚', 'ÊƒÉ”yÉ”Å‹', 19, 'Self', 'noun_pronoun', 0),
(540, 'à¦à¦‡', 'ei', 19, 'this', 'noun_pronoun', 0),
(541, '', '', 19, 'this', 'noun_pronoun', 0),
(542, 'à¦…à§à¦¯à¦¾à¦°à¦¾', 'amra', 19, 'the', 'noun_pronoun', 0),
(543, '', '', 19, 'this', 'noun_pronoun', 0),
(544, 'à¦¹à§‡à¦‡à¦—à§à¦²à¦¾', 'heigula', 19, 'that', 'noun_pronoun', 0),
(545, 'à¦¶à¦¬', 'ÊƒÉ”b', 19, 'all', 'noun_pronoun', 0),
(546, 'à¦¬à§à¦¯à¦¾à¦¬à¦¾à¦•/à¦¬à§à¦¯à¦¾à¦•', 'bÃ¦bak', 19, 'all', 'noun_pronoun', 0),
(547, 'à¦•à¦¿à¦¸à§', 'kisu', 19, 'some', 'noun_pronoun', 0),
(548, 'à¦†à¦«à¦¨à§‡', 'afne', 19, 'you', 'noun_pronoun', 0),
(549, 'à¦¯à§‡', 'ze', 19, 'that', 'noun_pronoun', 0),
(550, 'à¦¯à§à¦¯à¦¾à¦¨', 'zÃ¦n', 19, 'as', 'noun_pronoun', 0),
(551, 'à¦¯à¦¾à¦°à¦¾', 'zara', 19, 'who', 'noun_pronoun', 0),
(552, 'à¦•à§à¦¯à¦¾à¦¡à¦¾', 'kÃ¦da', 19, 'who', 'noun_pronoun', 0),
(553, 'à¦•à¦¿', 'ki', 19, 'what', 'noun_pronoun', 0),
(554, 'à¦•à¦¿', 'ki', 19, 'what', 'noun_pronoun', 0),
(555, 'à¦•à¦¾à¦°', 'kar', 19, 'whose', 'noun_pronoun', 0),
(556, '', '', 19, 'where', 'noun_pronoun', 0),
(557, 'à¦•à¦¿à¦¯à¦¼à§‡', 'kie', 19, 'whereby', 'noun_pronoun', 0),
(558, 'à¦“à¦‡à¦¨à§à¦¨', 'oinno', 19, 'other', 'noun_pronoun', 0),
(559, '', '', 19, 'another', 'noun_pronoun', 0),
(560, 'à¦«à¦°à§‡', 'fore', 19, 'after', 'noun_pronoun', 0),
(561, 'à¦†à¦œà¦¿à¦•à¦¾à¦¹', 'aÉŸikah', 18, 'Today', 'noun_temporal', 0),
(562, 'à¦†à¦—à¦¾à¦®à§€à¦•à¦¾à¦²à¦•à¦¾à¦¹', ' agamikalkah', 18, 'Tomorrow', 'noun_temporal', 0),
(563, 'à¦•à¦¾à¦²à¦•à¦¾à¦¹', ' kalkah ', 18, 'Yesterday', 'noun_temporal', 0),
(564, 'à¦­à¦¿à¦¯à¦¼à¦¾à¦¨', 'bÊ°ian', 18, 'morning', 'noun_temporal', 0),
(565, 'à¦¬à§à¦¯à¦¾à¦²à¦¾à¦­à¦¾à¦Ÿà¦¿', ' bÃ¦labÊ°atÌªi ', 18, 'afternoon', 'noun_temporal', 0),
(566, 'à¦¸à§à¦¨à§à¦¦à¦¾à¦¹', 'sundÌªah', 18, 'evening', 'noun_temporal', 0),
(567, 'à¦°à¦¾à¦¤à¦¿', ' ratÌªiÌ½ ', 18, 'night', 'noun_temporal', 0),
(568, '', '', 18, 'summer', 'noun_temporal', 0),
(569, 'à¦¬à¦¾à¦°à¦¸à¦¾à¦¹', 'barsah', 18, 'rainy season', 'noun_temporal', 0),
(570, 'à¦¦à¦¾à¦‡à¦¯à¦¼à¦¾/à¦œà¦¾à¦°', ' dÌªaiya', 18, 'winter', 'noun_temporal', 0),
(571, '', '', 18, 'sunday', 'noun_temporal', 0),
(572, '', '', 18, 'monday', 'noun_temporal', 0),
(573, '', '', 18, 'tuesday', 'noun_temporal', 0),
(574, 'à¦¬à§à¦¦à¦¬à¦¾à¦°', ' budÌªbar ', 18, 'wednesday', 'noun_temporal', 0),
(575, 'à¦¬à¦¿à¦¸à§à¦¦à¦¬à¦¾à¦°', 'bisudÌªbar ', 18, 'thursday', 'noun_temporal', 0),
(576, 'à¦¶à§à¦•à§à¦°à¦¬à¦¾à¦°', 'Êƒukurbar', 18, 'friday', 'noun_temporal', 0),
(577, '', '', 18, 'saturday', 'noun_temporal', 0),
(578, '', '', 18, 'day', 'noun_temporal', 0),
(579, '', '', 18, 'week', 'noun_temporal', 0),
(580, 'à¦¬à¦¸à¦°', ' boÊƒor', 18, 'year', 'noun_temporal', 0),
(581, 'à¦®à¦‡', ' mÉ”i', 18, 'I', 'noun_pronoun', 0),
(582, 'à¦†à¦®à¦°à¦¾', ' amra', 18, 'We', 'noun_pronoun', 0),
(583, 'à¦¤à¦¯à¦¼', 'tÌªÉ”i ', 18, 'You', 'noun_pronoun', 0),
(584, 'à¦¤à§‹à¦°à¦¾à¦¹', ' tÌªorai', 18, 'You', 'noun_pronoun', 0),
(585, 'à¦…à¦‡', ' É”i ', 18, 'He/She', 'noun_pronoun', 0),
(586, 'à¦…à§à¦¯à¦¾à¦°à¦¾', 'Ã¦ra', 18, 'They', 'noun_pronoun', 0),
(587, 'à¦…à¦‡', ' É”i ', 18, 'He', 'noun_pronoun', 0),
(588, 'à¦†à¦ªà¦¨à§‡à¦¹', 'apneh ', 18, 'You', 'noun_pronoun', 0),
(589, 'à¦¨à¦¿à¦œà§‡à¦²à¦¾', 'niÉŸela ', 18, 'Own', 'noun_pronoun', 0),
(590, '', '  ', 18, 'Self', 'noun_pronoun', 0),
(591, 'à¦¨à¦¿à¦œà§‡à¦‡à¦¹', 'niÉŸeih', 18, 'Self', 'noun_pronoun', 0),
(592, '', '', 18, 'this', 'noun_pronoun', 0),
(593, 'à¦‡', ' i', 18, 'this', 'noun_pronoun', 0),
(594, '', '', 18, 'the', 'noun_pronoun', 0),
(595, 'à¦“à¦‡', ' oi', 18, 'this', 'noun_pronoun', 0),
(596, '', '', 18, 'that', 'noun_pronoun', 0),
(597, 'à¦¬à§à¦¯à¦¾à¦¬à¦¾à¦•', ' bÃ¦bak ', 18, 'all', 'noun_pronoun', 0),
(598, 'à¦¬à§à¦¯à¦¾à¦•', 'bÃ¦k ', 18, 'all', 'noun_pronoun', 0),
(599, 'à¦…à¦²à§à¦ª', 'É”lpo ', 18, 'some', 'noun_pronoun', 0),
(600, 'à¦¤à¦¯à¦¼', 'tÉ”i ', 18, 'you', 'noun_pronoun', 0),
(601, '', '', 18, 'that', 'noun_pronoun', 0),
(602, '', '', 18, 'as', 'noun_pronoun', 0),
(603, 'à¦¯à¦¾à¦‡', 'ÉŸai', 18, 'who', 'noun_pronoun', 0),
(604, 'à¦•à¦¾à¦‡', ' kai', 18, 'who', 'noun_pronoun', 0),
(605, '', '', 18, 'what', 'noun_pronoun', 0),
(606, '', '', 18, 'what', 'noun_pronoun', 0),
(607, 'à¦•à¦¾à¦²à¦¾', ' kalah', 18, 'whose', 'noun_pronoun', 0),
(608, 'à¦•à§‹à¦®à¦¾à¦¯à¦¼', ' komai ', 18, 'where', 'noun_pronoun', 0),
(609, 'à¦•à¦¿à¦‚à¦•à¦¾', 'kiÅ‹ka', 18, 'whereby', 'noun_pronoun', 0),
(610, '', '', 18, 'other', 'noun_pronoun', 0),
(611, 'à¦ªà¦°à§‡à¦²à¦¾', ' porela', 18, 'another', 'noun_pronoun', 0),
(612, '', '', 18, 'after', 'noun_pronoun', 0),
(613, 'à¦¦à§à¦¯à¦¾à¦“à§Ÿà¦¾', 'dÌªÃ¦oa', 18, 'Give', 'morphology_verb', 0),
(614, 'à¦•à¦¿ à¦¨à¦¾à¦¹', 'kinah', 18, 'Purchase', 'morphology_verb', 0),
(615, 'à¦¦à§à¦¯à¦¾à¦–à¦¾', 'dÌªÃ¦kÊ°a', 18, 'See', 'morphology_verb', 0),
(616, '', '', 18, 'Call', 'morphology_verb', 0),
(617, 'à¦–à¦¾à¦¬à§', ' kÊ°abu', 18, 'Eat', 'morphology_verb', 0),
(618, 'à¦¯à¦¾à¦¬à§à¦šà§‡', ' ÉŸabuce', 18, 'Go', 'morphology_verb', 0),
(619, '', '', 18, 'Do', 'morphology_verb', 0),
(620, 'à¦¢à§‡à¦•à¦¾ à¦¦à§‡à¦“à¦¯à¦¼à¦¾', ' dÊ°Ã¦ka dÃ¦oa ', 18, 'Push', 'morphology_verb', 0),
(621, '', '', 18, 'Use', 'morphology_verb', 0),
(622, 'à¦¬à§‡à¦°à¦¾à¦‡', 'berai ', 18, 'walk', 'morphology_verb', 0),
(623, 'à¦•à¦¾à¦®', 'kam', 18, 'Work', 'morphology_verb', 0),
(624, 'à¦•à¦¾à¦¨à§à¦¦à¦¾', ' kandÌªa ', 18, 'Cry', 'morphology_verb', 0),
(625, 'à¦—à§à¦¨à¦¿à¦¤', 'guntÌªi', 18, 'Count', 'morphology_verb', 0),
(626, 'à¦¯à§à¦—à¦¾à¦° à¦•à¦°à¦¾', ' ÉŸugar kÉ”ra ', 18, 'Collect', 'morphology_verb', 0),
(627, '', '', 18, 'To Like', 'morphology_verb', 0),
(628, '', '', 18, 'To Help', 'morphology_verb', 0),
(629, 'à¦ªà¦¾à¦¸à§‡', 'pase ', 18, 'To get', 'morphology_verb', 0),
(630, 'à¦­à¦¾à¦²à¦¾à¦ªà¦¾à¦‡', 'bÊ°alapai', 18, 'love', 'morphology_verb', 0),
(631, 'à¦¬à¦¿à¦‡à¦¯à¦¼à¦¾à¦¹', ' bieah kÉ”ra', 18, 'To Marry', 'morphology_verb', 0),
(632, 'à¦¹à§à¦¨à¦¾', ' huna', 18, 'To Listen', 'morphology_verb', 0),
(633, 'à¦¥à§à¦¬à¦¾', ' tÊ°uba ', 18, 'To Pick', 'morphology_verb', 0),
(634, '', '', 18, 'Use', 'morphology_verb', 0),
(635, 'à¦¡à§‹à¦•à¦°à¦¾', 'dokra', 18, 'shout', 'morphology_verb', 0),
(636, '', '', 18, 'write', 'morphology_verb', 0),
(637, '', '', 18, 'and', 'morphology_conjunction', 0),
(638, 'à¦¬à§‡à¦¦à§‡à¦‡à¦¤à§‹', 'bedÌªeitÌªo', 18, 'so', 'morphology_conjunction', 0),
(639, '', '', 18, 'or', 'morphology_conjunction', 0),
(640, '', '', 18, 'or', 'morphology_conjunction', 0),
(641, '', '', 18, 'Or', 'morphology_conjunction', 0),
(642, '', '', 18, 'Otherwise', 'morphology_conjunction', 0),
(643, 'à¦¨à¦¹à¦¯à¦¼', ' nÉ” hÉ”i ', 18, 'or', 'morphology_conjunction', 0),
(644, '', '', 18, 'Or', 'morphology_conjunction', 0),
(645, 'à¦•à§à¦¨', 'kun ', 18, 'But', 'morphology_conjunction', 0),
(646, 'à¦à¦²à¦¾à¦ªà¦°à§‡à¦“', 'Ã¦lapÉ”reo', 18, 'moreover', 'morphology_conjunction', 0),
(647, '', '', 18, 'So', 'morphology_conjunction', 0),
(648, 'à¦•à§‹à¦¹à¦¾à¦“', ' kohao ', 18, 'Open', 'verbal_adjective', 0),
(649, '', '', 18, 'hurry', 'verbal_adjective', 0),
(650, 'à¦†à¦¸à§à¦¤à§‡', 'astÌªe ', 18, 'slow', 'verbal_adjective', 0),
(651, 'à¦…à¦²à§à¦ª', 'É”lpo ', 18, 'Little', 'verbal_adjective', 0),
(652, 'à¦ªà¦°à§‡', 'pore ', 18, 'Later', 'verbal_adjective', 0),
(653, '', '', 18, 'sleeping', 'verbal_adjective', 0),
(654, '', '', 18, 'More than hundred', 'verbal_adjective', 0),
(655, 'à¦¹à¦‡à¦¨à§‡ à¦°à¦¾à¦–', 'huinÃ¦ rakh', 18, 'Listen Up', 'verbal_adjective', 0),
(656, 'à¦¬à¦¾à¦–à¦¾à¦°', '', 18, 'Many', 'qunatifiers', 0),
(657, '', '', 18, 'Some', 'qunatifiers', 0),
(658, 'à¦…à¦²à§à¦ªà¦¸à¦¾', '', 18, 'Little', 'qunatifiers', 0),
(659, '', '', 18, 'Some', 'qunatifiers', 0),
(660, 'à¦¬à¦¾à¦–à¦¾à¦°à¦›à¦¿', '', 18, 'Plenty', 'qunatifiers', 0),
(661, 'à¦à¦•à¦Ÿà¦¿ à¦ªà¦¾', '', 18, 'A Piece', 'qunatifiers', 0),
(662, '', '', 18, 'full', 'qunatifiers', 0),
(663, '', '', 18, 'that', 'demonstrative_articles', 0),
(664, 'à¦Ÿà¦¾', '', 18, 'That', 'demonstrative_articles', 0),
(665, '', '', 18, 'One Object', 'demonstrative_articles', 0),
(666, '', '', 18, 'One Object', 'demonstrative_articles', 0),
(667, '', '', 18, 'Some Objects', 'demonstrative_articles', 0),
(668, '', '', 18, 'Some Objects', 'demonstrative_articles', 0),
(669, '', '', 18, 'All', 'demonstrative_articles', 0),
(670, 'à¦—à¦¿à¦²à¦¾', '', 18, 'All', 'demonstrative_articles', 0),
(671, 'à¦Ÿà¦¾à¦•à¦¾-à¦ªà¦¯à¦¼à¦¸à¦¾', '', 18, 'Riches', 'reduplicated_word_list', 0),
(672, 'à¦œà§à¦¬à¦°à¦œà§à¦¬à¦°', '', 18, 'Feeling Fever', 'reduplicated_word_list', 0),
(673, 'à¦¬à¦¾à¦–à¦¾à¦° à¦¬à¦¾à¦–à¦¾à¦°', '', 18, 'Many', 'reduplicated_word_list', 0),
(674, '', '', 18, 'Jingle', 'reduplicated_word_list', 0),
(675, 'à¦¬à¦¾à¦œà¦¾à¦°-à¦˜à¦¾à¦Ÿ', '', 18, 'Market', 'reduplicated_word_list', 0),
(676, '', '', 19, 'pet', 'morphology_animals', 0),
(677, '', 'goru', 19, 'Ox', 'morphology_animals', 0),
(678, '', 'v', 19, 'cow', 'morphology_animals', 0),
(679, '', '', 19, 'Goat', 'morphology_animals', 0),
(680, '', '', 19, 'Ram', 'morphology_animals', 0),
(681, '', '', 19, 'Pig', 'morphology_animals', 0),
(682, '', '', 19, 'Duck', 'morphology_animals', 0),
(683, '', '', 19, 'Bird', 'morphology_animals', 0),
(684, '', '', 19, 'Horse', 'morphology_animals', 0),
(685, '', '', 19, 'Lion', 'morphology_animals', 0),
(686, '', '', 19, 'Ship', 'morphology_animals', 0),
(687, '', '', 19, 'Dog', 'morphology_animals', 0),
(688, '', '', 19, 'Chicken', 'morphology_animals', 0),
(689, '', '', 19, 'Pegion', 'morphology_animals', 0),
(690, '', '', 19, 'Wild animals', 'morphology_animals', 0),
(691, '', '', 19, 'Crow', 'morphology_animals', 0),
(692, '', '', 19, 'Big Mouse', 'morphology_animals', 0),
(693, '', '', 19, 'Lobster', 'morphology_animals', 0),
(694, '', '', 19, 'Fly', 'morphology_animals', 0),
(695, '', '', 19, 'Mosquito', 'morphology_animals', 0),
(696, '', '', 19, 'Butterfly', 'morphology_animals', 0),
(697, '', '', 19, 'Frog', 'morphology_animals', 0),
(698, '', '', 19, 'Spider', 'morphology_animals', 0),
(699, '', '', 19, 'Turtle', 'morphology_animals', 0),
(700, '', '', 19, 'Insect', 'morphology_animals', 0),
(701, '', '', 19, 'Lice', 'morphology_animals', 0),
(702, '', '', 19, 'Death', 'morphology_animals', 0),
(703, 'à¦¦à§à¦¯à¦¾à¦“à¦¨', 'dÌªÃ¦on', 19, 'Give', 'morphology_verb', 0),
(704, '', '', 19, 'Purchase', 'morphology_verb', 0),
(705, '', '', 19, 'See', 'morphology_verb', 0),
(706, '', '', 19, 'Call', 'morphology_verb', 0),
(707, '', '', 19, 'Eat', 'morphology_verb', 0),
(708, '', '', 19, 'Go', 'morphology_verb', 0),
(709, '', '', 19, 'Do', 'morphology_verb', 0),
(710, '', '', 19, 'Push', 'morphology_verb', 0),
(711, '', '', 19, 'Use', 'morphology_verb', 0),
(712, '', '', 19, 'walk', 'morphology_verb', 0),
(713, '', '', 19, 'Work', 'morphology_verb', 0),
(714, '', '', 19, 'Cry', 'morphology_verb', 0),
(715, '', '', 19, 'Count', 'morphology_verb', 0),
(716, '', '', 19, 'Collect', 'morphology_verb', 0),
(717, '', '', 19, 'To Like', 'morphology_verb', 0),
(718, '', '', 19, 'To Help', 'morphology_verb', 0),
(719, '', '', 19, 'To get', 'morphology_verb', 0),
(720, '', '', 19, 'love', 'morphology_verb', 0),
(721, '', '', 19, 'To Marry', 'morphology_verb', 0),
(722, '', '', 19, 'To Listen', 'morphology_verb', 0),
(723, '', '', 19, 'To Pick', 'morphology_verb', 0),
(724, '', '', 19, 'Use', 'morphology_verb', 0),
(725, '', '', 19, 'shout', 'morphology_verb', 0),
(726, '', '', 19, 'write', 'morphology_verb', 0),
(727, NULL, NULL, 18, NULL, NULL, 0),
(728, 'à¦—à¦¾à¦“', ' gao', 18, 'body', 'noun_professions', 0),
(729, 'à¦®à¦¾à¦¤à¦¾', ' matÌªa', 18, 'head', 'noun_professions', 0),
(730, 'à¦¹à¦¾à¦¤', ' hatÌª', 18, 'hand', 'noun_professions', 0),
(731, 'à¦ à§à¦¯à¦¾à¦‚', 'tÊ°Ã¦Å‹', 18, 'leg', 'noun_professions', 0),
(732, 'à¦†à¦™à§à¦²', ' aÅ‹ul ', 18, 'finger', 'noun_professions', 0),
(733, 'à¦¨à§à¦•', 'nuk ', 18, 'nail', 'noun_professions', 0),
(734, 'à¦®à§à¦•', 'muk ', 18, 'mouse', 'noun_professions', 0),
(735, 'à¦¨à¦¾à¦—', 'nag ', 18, 'nose', 'noun_professions', 0),
(736, 'à¦•à¦¾à¦¨', 'kan', 18, 'ear', 'noun_professions', 0),
(737, 'à¦•à§‹à¦ªà¦¾à¦²', ' kopal', 18, 'forhead', 'noun_professions', 0),
(738, 'à¦¥à§à¦¤', ' tÌªÊ°utÌª ', 18, 'lip', 'noun_professions', 0),
(739, 'à¦¦à¦¾à¦¤', 'dÌªatÌª', 18, 'tooth', 'noun_professions', 0),
(740, 'à¦œà¦¿à¦¬à§à¦¬à¦¾à¦¹', ' ÉŸibbah', 18, 'tongue', 'noun_professions', 0),
(741, 'à¦šà§à¦•', ' cuk ', 18, 'eye', 'noun_professions', 0),
(742, 'à¦—à¦¾à¦²à¦¾', 'gala', 18, 'Throat', 'noun_professions', 0),
(743, 'à¦ªà§à¦¯à¦¾à¦¤', ' pÃ¦tÌª', 18, 'belly', 'noun_professions', 0),
(744, 'à¦°à¦•à§à¦¤', ' rÉ”ktÌªo', 18, 'blood', 'noun_professions', 0),
(745, '', '', 18, 'breast', 'noun_professions', 0),
(746, '', '', 18, 'sex organ', 'noun_professions', 0),
(747, '', '', 18, 'sex organ', 'noun_professions', 0),
(748, '', '', 18, 'hips', 'noun_professions', 0),
(749, 'à¦šà§à¦²', ' cul', 18, 'hair', 'noun_professions', 0),
(750, 'à¦—à¦¾à¦“', ' gao', 18, 'body', 'noun_professions', 0),
(751, 'à¦®à¦¾à¦¤à¦¾', ' matÌªa', 18, 'head', 'noun_professions', 0),
(752, 'à¦¹à¦¾à¦¤', ' hatÌª', 18, 'hand', 'noun_professions', 0),
(753, 'à¦ à§à¦¯à¦¾à¦‚', 'tÊ°Ã¦Å‹', 18, 'leg', 'noun_professions', 0),
(754, 'à¦†à¦™à§à¦²', ' aÅ‹ul ', 18, 'finger', 'noun_professions', 0),
(755, 'à¦¨à§à¦•', 'nuk ', 18, 'nail', 'noun_professions', 0),
(756, 'à¦®à§à¦•', 'muk ', 18, 'mouse', 'noun_professions', 0),
(757, 'à¦¨à¦¾à¦—', 'nag ', 18, 'nose', 'noun_professions', 0),
(758, 'à¦•à¦¾à¦¨', 'kan', 18, 'ear', 'noun_professions', 0),
(759, 'à¦•à§‹à¦ªà¦¾à¦²', ' kopal', 18, 'forhead', 'noun_professions', 0),
(760, 'à¦¥à§à¦¤', ' tÌªÊ°utÌª ', 18, 'lip', 'noun_professions', 0),
(761, 'à¦¦à¦¾à¦¤', 'dÌªatÌª', 18, 'tooth', 'noun_professions', 0),
(762, 'à¦œà¦¿à¦¬à§à¦¬à¦¾à¦¹', ' ÉŸibbah', 18, 'tongue', 'noun_professions', 0),
(763, 'à¦šà§à¦•', ' cuk ', 18, 'eye', 'noun_professions', 0),
(764, 'à¦—à¦¾à¦²à¦¾', 'gala', 18, 'Throat', 'noun_professions', 0),
(765, 'à¦ªà§à¦¯à¦¾à¦¤', ' pÃ¦tÌª', 18, 'belly', 'noun_professions', 0),
(766, 'à¦°à¦•à§à¦¤', ' rÉ”ktÌªo', 18, 'blood', 'noun_professions', 0),
(767, '', '', 18, 'breast', 'noun_professions', 0),
(768, '', '', 18, 'sex organ', 'noun_professions', 0),
(769, '', '', 18, 'sex organ', 'noun_professions', 0),
(770, '', '', 18, 'hips', 'noun_professions', 0),
(771, 'à¦šà§à¦²', ' cul', 18, 'hair', 'noun_professions', 0),
(772, NULL, NULL, 18, NULL, NULL, 0),
(773, '', '', 18, 'body', 'noun_professions', 0),
(774, '', '', 18, 'head', 'noun_professions', 0),
(775, '', '', 18, 'hand', 'noun_professions', 0),
(776, '', '', 18, 'leg', 'noun_professions', 0),
(777, '', '', 18, 'finger', 'noun_professions', 0),
(778, '', '', 18, 'nail', 'noun_professions', 0),
(779, '', '', 18, 'mouse', 'noun_professions', 0),
(780, '', '', 18, 'nose', 'noun_professions', 0),
(781, '', '', 18, 'ear', 'noun_professions', 0),
(782, '', '', 18, 'forhead', 'noun_professions', 0),
(783, '', '', 18, 'lip', 'noun_professions', 0),
(784, '', '', 18, 'tooth', 'noun_professions', 0),
(785, '', '', 18, 'tongue', 'noun_professions', 0),
(786, '', '', 18, 'eye', 'noun_professions', 0),
(787, '', '', 18, 'Throat', 'noun_professions', 0),
(788, '', '', 18, 'belly', 'noun_professions', 0),
(789, '', '', 18, 'blood', 'noun_professions', 0),
(790, '', '', 18, 'breast', 'noun_professions', 0),
(791, '', '', 18, 'sex organ', 'noun_professions', 0),
(792, '', '', 18, 'sex organ', 'noun_professions', 0),
(793, '', '', 18, 'hips', 'noun_professions', 0),
(794, '', '', 18, 'hair', 'noun_professions', 0),
(795, NULL, NULL, 19, NULL, NULL, 0),
(796, 'à¦¬à¦¾à¦–à¦¾à¦°', ' bakÊ°ar', 18, 'Many', 'qunatifiers', 0),
(797, '', '', 18, 'Some', 'qunatifiers', 0),
(798, 'à¦…à¦²à§à¦ªà¦¸à¦¾', ' É”lposa', 18, 'Little', 'qunatifiers', 0),
(799, '', '', 18, 'Some', 'qunatifiers', 0),
(800, 'à¦¬à¦¾à¦–à¦¾à¦°à¦›à¦¿', ' bakÊ°arcÊ°i ', 18, 'Plenty', 'qunatifiers', 0),
(801, 'à¦à¦•à¦Ÿà¦¿ à¦ªà¦¾', 'ekti pa ', 18, 'A Piece', 'qunatifiers', 0),
(802, '', '', 18, 'full', 'qunatifiers', 0),
(803, '', 'ta', 18, 'that', 'demonstrative_articles', 0),
(804, 'à¦Ÿà¦¾', '', 18, 'That', 'demonstrative_articles', 0),
(805, '', '', 18, 'One Object', 'demonstrative_articles', 0),
(806, '', '', 18, 'One Object', 'demonstrative_articles', 0),
(807, '', '', 18, 'Some Objects', 'demonstrative_articles', 0),
(808, '', '', 18, 'Some Objects', 'demonstrative_articles', 0),
(809, '', '', 18, 'All', 'demonstrative_articles', 0),
(810, 'à¦—à¦¿à¦²à¦¾', ' gila ', 18, 'All', 'demonstrative_articles', 0),
(811, 'à¦Ÿà¦¾à¦•à¦¾-à¦ªà¦¯à¦¼à¦¸à¦¾', 'taka pÉ”iÊƒa', 18, 'Riches', 'reduplicated_word_list', 0),
(812, 'à¦œà§à¦¬à¦°à¦œà§à¦¬à¦°', ' ÉŸÉ”r ÉŸÉ”r', 18, 'Feeling Fever', 'reduplicated_word_list', 0),
(813, 'à¦¬à¦¾à¦–à¦¾à¦° à¦¬à¦¾à¦–à¦¾à¦°', ' bakÊ°ar bakÊ°ar ', 18, 'Many', 'reduplicated_word_list', 0),
(814, '', '', 18, 'Jingle', 'reduplicated_word_list', 0),
(815, 'à¦¬à¦¾à¦œà¦¾à¦°-à¦˜à¦¾à¦Ÿ', 'baÉŸar gÊ°at', 18, 'Market', 'reduplicated_word_list', 0),
(816, 'à¦¶à§‹à¦°à¦¿à¦°', 'Êƒorir', 19, 'body', 'noun_professions', 0),
(817, 'à¦®à¦¾à¦¤à¦¾', 'matÌªa', 19, 'head', 'noun_professions', 0);
INSERT INTO `morphology` (`id`, `target_bangla_script`, `transcription_ipa`, `personnel_information_id`, `english_word`, `morphology_type`, `status`) VALUES
(818, 'à¦¹à¦¾à¦¤', 'hatÌª', 19, 'hand', 'noun_professions', 0),
(819, 'à¦ªà¦¾', 'pa', 19, 'leg', 'noun_professions', 0),
(820, 'à¦†à¦‚à¦—à§à¦²', 'aÅ‹gul', 19, 'finger', 'noun_professions', 0),
(821, 'à¦¨à§‹à¦–', 'nokÊ°', 19, 'nail', 'noun_professions', 0),
(822, 'à¦®à§à¦•, à¦®à§à¦¹', 'mukÊ°', 19, 'mouse', 'noun_professions', 0),
(823, 'à¦¨à¦¾à¦•, à¦¨à¦¾à¦¹', 'nak, nah', 19, 'nose', 'noun_professions', 0),
(824, 'à¦•à¦¾à¦¨', 'kan', 19, 'ear', 'noun_professions', 0),
(825, 'à¦•à¦«à¦¾à¦²', 'kÉ”fal', 19, 'forhead', 'noun_professions', 0),
(826, 'à¦ à§à¦Ÿ', 'tÊ°ut', 19, 'lip', 'noun_professions', 0),
(827, 'à¦¦à¦¾à¦¤', 'dÌªatÌª', 19, 'tooth', 'noun_professions', 0),
(828, 'à¦¯à¦¿à¦¬à¦²à¦¾', 'zibla', 19, 'tongue', 'noun_professions', 0),
(829, 'à¦¸à§‹à¦•', 'sok', 19, 'eye', 'noun_professions', 0),
(830, 'à¦—à¦²à¦¾', 'gÉ”la', 19, 'Throat', 'noun_professions', 0),
(831, 'à¦«à§à¦¯à¦¾à¦Ÿ', 'fÃ¦t', 19, 'belly', 'noun_professions', 0),
(832, 'à¦°à¦•à§à¦¤', 'rÉ”ktÌªÉ”', 19, 'blood', 'noun_professions', 0),
(833, '', '', 19, 'breast', 'noun_professions', 0),
(834, '', '', 19, 'sex organ', 'noun_professions', 0),
(835, '', '', 19, 'sex organ', 'noun_professions', 0),
(836, '', '', 19, 'hips', 'noun_professions', 0),
(837, 'à¦¸à§à¦²', 'sul', 19, 'hair', 'noun_professions', 0);

-- --------------------------------------------------------

--
-- Table structure for table `numbers_gender`
--

CREATE TABLE IF NOT EXISTS `numbers_gender` (
  `id` int(11) NOT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `11b_ans` text NOT NULL,
  `11c_phonologically` text NOT NULL,
  `11c_morphologically` text NOT NULL,
  `12b_ans` text NOT NULL,
  `12ci_semantic_ans` text NOT NULL,
  `12cii_morphological_ans` text NOT NULL,
  `12ciii_phonological_ans` text NOT NULL,
  `12di_gender_mark` text NOT NULL,
  `12dii_lexical_categories` text NOT NULL,
  `12diii_lexical_categories` text NOT NULL,
  `13cia` text NOT NULL,
  `13cib` text NOT NULL,
  `13ciia` text NOT NULL,
  `13ciib` text NOT NULL,
  `13ciiia` text NOT NULL,
  `13ciiib` text NOT NULL,
  `13dia` text NOT NULL,
  `13dib` text NOT NULL,
  `13diia` text NOT NULL,
  `13diib` text NOT NULL,
  `13ei_gender` text NOT NULL,
  `13ei_case` text NOT NULL,
  `13eiii_person` text NOT NULL,
  `13eiv_other` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numbers_gender`
--

INSERT INTO `numbers_gender` (`id`, `personnel_information_id`, `11b_ans`, `11c_phonologically`, `11c_morphologically`, `12b_ans`, `12ci_semantic_ans`, `12cii_morphological_ans`, `12ciii_phonological_ans`, `12di_gender_mark`, `12dii_lexical_categories`, `12diii_lexical_categories`, `13cia`, `13cib`, `13ciia`, `13ciib`, `13ciiia`, `13ciiib`, `13dia`, `13dib`, `13diia`, `13diib`, `13ei_gender`, `13ei_case`, `13eiii_person`, `13eiv_other`) VALUES
(1, 18, '', '', '', '', '', '', '', '', 'à¦¸à§à¦¨à§à¦¦à¦°-à¦¸à§à¦¨à§à¦¦à¦°à§€ ( Êƒundor-Êƒundori)\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n9\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 2, '', '', '', '', '', '', '', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `office_use`
--

CREATE TABLE IF NOT EXISTS `office_use` (
  `id` int(11) NOT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `linguistic_collector_name` varchar(100) DEFAULT NULL,
  `linguistic_date` varchar(100) DEFAULT NULL,
  `linguistic_remarks` text,
  `socioculture_collector_name` varchar(100) DEFAULT NULL,
  `socioculture_date` varchar(100) DEFAULT NULL,
  `socioculture_remarks` text
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_use`
--

INSERT INTO `office_use` (`id`, `personnel_information_id`, `linguistic_collector_name`, `linguistic_date`, `linguistic_remarks`, `socioculture_collector_name`, `socioculture_date`, `socioculture_remarks`) VALUES
(1, 8, 'safiq', 'Feb 26, 2015', '', '', 'Feb 25, 2015', ''),
(2, 11, '', '', '', '', '', ''),
(3, 18, '', '', '', 'Amolendo Kosh', 'Mar 01, 2015', ''),
(4, 19, 'Md. Saroar Amin (Rhidoy)', 'Mar 02, 2015', '', 'Abdul Gaffar', 'Mar 02, 2015', ''),
(5, 20, 'Shovon Rangsa', 'Mar 02, 2015', '', 'Saniujjaman', 'Mar 02, 2015', ''),
(6, 21, '', '', '', 'JOYNAL ABEDIN', 'Mar 02, 2015', ''),
(7, 22, '', '', '', 'Amolendo Kosh', 'Mar 03, 2015', ''),
(8, 2, 'aa', 'Mar 25, 2015', 'asa', 'aa', 'Mar 25, 2015', 'asa');

-- --------------------------------------------------------

--
-- Table structure for table `oral_literature`
--

CREATE TABLE IF NOT EXISTS `oral_literature` (
  `id` int(11) NOT NULL,
  `oral_literature_value` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `remark` varchar(100) NOT NULL,
  `personnel_information_id` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oral_literature`
--

INSERT INTO `oral_literature` (`id`, `oral_literature_value`, `status`, `remark`, `personnel_information_id`) VALUES
(1, 'Folk tales', 1, '', 18),
(2, 'Songs', 0, 'Have not preserved.', 18),
(3, 'Religious literature', 1, '', 18),
(4, 'Radio literature', 1, '', 18),
(5, 'Film /short film literature', 1, '', 18),
(6, 'other literature', 1, '', 18),
(7, 'Folk tales', 0, 'Have not found', 19),
(8, 'Songs', 0, 'Have not found', 19),
(9, 'Religious literature', 1, '', 19),
(10, 'Radio literature', 1, '', 19),
(11, 'Film /short film literature', 1, '', 19),
(12, 'other literature', 1, '', 19),
(13, 'Folk tales', 0, 'Have not found', 21),
(14, 'Songs', 0, 'Have not found', 21),
(15, 'Religious literature', 1, '', 21),
(16, 'Radio literature', 1, '', 21),
(17, 'Film /short film literature', 1, '', 21),
(18, 'other literature', 1, '', 21),
(19, 'Folk tales', 1, '', 22),
(20, 'Songs', 0, 'Haveno collection', 22),
(21, 'Religious literature', 1, '', 22),
(22, 'Radio literature', 1, '', 22),
(23, 'Film /short film literature', 1, '', 22),
(24, 'other literature', NULL, '', 22);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` char(36) NOT NULL,
  `role_id` char(36) NOT NULL,
  `dominion_id` char(36) NOT NULL,
  `process_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `dominion_id`, `process_id`) VALUES
('531560eb-d900-412b-91e4-0e99f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141a19-8ab8-4212-8df1-0d48f8defb25'),
('531560ed-cd58-4b4a-8949-0e99f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141b73-481c-4800-8c06-0d48f8defb25'),
('531560ee-dd5c-4d73-8725-0e99f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141b90-f0f8-4625-a854-0b9bf8defb25'),
('531560fc-927c-4b70-bb35-08eaf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141538-5218-463c-af25-0ba8f8defb25', '53141f04-d09c-47f2-9d6b-0b9bf8defb25'),
('531560fd-ef40-41a7-8d63-08eaf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141538-5218-463c-af25-0ba8f8defb25', '53142061-67e8-4b81-aada-1089f8defb25'),
('53156141-2bd4-4196-b431-0dd4f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426bd-a27c-476e-a691-0b85f8defb25'),
('53156145-d060-4401-89da-0dd4f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426ca-4694-4858-ac9d-0d48f8defb25'),
('53156146-0128-4563-9cbf-0dd4f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426cf-df84-413d-a40a-0d48f8defb25'),
('53156147-eb14-44fb-811b-0dd4f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426de-a1b4-4baf-aff7-1089f8defb25'),
('53159f41-29a0-4a39-bf09-137cf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141a04-2238-4e14-91d4-0b96f8defb25'),
('53159fe3-1928-4b68-ae8b-1a99f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141baa-6bcc-48ba-bee2-0b85f8defb25'),
('5315b53b-b324-43c9-9fc9-24b7f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141523-59b0-47b8-8dde-0931f8defb25', '53141a8b-b684-4b54-84a9-0f56f8defb25'),
('5315b54c-67e8-4e71-b43b-25ccf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415e6-4208-43ca-9440-0b96f8defb25', '5315664d-5094-4065-9fbd-0927f8defb25'),
('5315b556-42f8-45f5-bef0-24baf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415e6-4208-43ca-9440-0b96f8defb25', '53156658-f2e4-4389-b822-0dd4f8defb25'),
('5315b55a-1f64-47c5-833c-24baf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415e6-4208-43ca-9440-0b96f8defb25', '53156663-83d8-44e2-b32b-1054f8defb25'),
('5317ec29-e8c0-405a-842d-0505f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b533-a40c-44e7-a5e4-0930f8defb25'),
('54e95f34-4994-470e-b509-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-52cc-4b96-8b48-0558f8defb25'),
('54e95f34-d034-487a-95d4-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-600c-4bb6-9f3a-0558f8defb25'),
('54e95f34-56d4-4737-8233-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-d96c-4585-8592-0558f8defb25'),
('54e95f34-dd74-486a-a8e1-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '531563d0-8d1c-4eb3-bf4b-0e8ef8defb25'),
('54e95f34-6414-402a-8f12-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '531563db-570c-47c2-a6c3-0f11f8defb25'),
('54e95f34-eb18-493f-b7b2-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '531563ef-66bc-4ce5-bf8c-0b05f8defb25'),
('54e95f34-71b8-4667-ba91-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '53156400-40b8-4df8-a5af-0f96f8defb25'),
('54e95f34-71b8-4e97-bdba-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '53156410-c53c-4b5a-bb9e-091ff8defb25'),
('54e95f34-f858-47f5-b8e3-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '5315641d-0ac0-44a6-940f-0927f8defb25'),
('54e95f34-0598-41e2-9f45-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b533-a40c-44e7-a5e4-0930f8defb25'),
('54e95f34-8c38-4add-9afe-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b538-831c-40e0-a4ed-0930f8defb25'),
('54e95f34-12d8-4237-891f-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b541-e3fc-4d84-b54a-0537f8defb25'),
('54e95f34-9978-419a-9124-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b549-fd74-4083-bc68-053af8defb25'),
('54e95f34-2018-4ee7-a61e-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b54d-2410-4fbf-bcad-053af8defb25'),
('54e95f34-a6b8-4b86-8377-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b552-e7a0-46f0-9d49-053af8defb25'),
('54e95f34-2d58-44c6-9537-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b4ff-f604-4ccc-acdc-0a4af8defb25'),
('54e95f34-b3f8-40a2-8a98-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b506-6c84-4020-ace5-0939f8defb25'),
('54e95f34-b3f8-40cc-b151-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b50c-5e00-49ee-885e-0939f8defb25'),
('54e95f34-3a98-44e3-9e15-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b515-fefc-4a06-a713-0536f8defb25'),
('54e95f34-47d8-4b74-a3e5-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b51f-98b0-4f72-a04a-0930f8defb25'),
('54e95f34-ce78-497d-9cda-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b527-3cec-4fd3-abe4-0930f8defb25'),
('54e95f34-5518-4e0f-8cbf-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e303-0164-438d-b8cd-3d2ff8defb25'),
('54e95f34-dc1c-41b3-98df-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e308-f4d4-4e3b-9d3e-3d2ff8defb25'),
('54e95f34-dc1c-4dc3-a961-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e30e-1298-4d76-bd19-3e25f8defb25'),
('54e95f34-62bc-4e78-883e-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e313-59f8-4227-ae7b-3e25f8defb25'),
('54e95f34-e95c-4717-ba01-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e31b-8c14-4be0-a1dd-3e22f8defb25'),
('54e95f34-6ffc-4534-8c10-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e324-9abc-4687-a9f0-3d2df8defb25'),
('54e95f34-f69c-463d-9cb5-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4ae-3388-4e53-b826-3e22f8defb25'),
('54e95f34-7d3c-4e34-9e01-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4b3-f400-4b39-b48b-3e22f8defb25'),
('54e95f34-03dc-4675-b90b-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4bf-4320-47e5-82dd-3d2df8defb25'),
('54e95f34-8a7c-487b-82c5-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4c7-eb84-4a31-92cb-3d2cf8defb25'),
('54e95f34-111c-4f6f-b57a-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4cd-f388-4a5f-b739-3d2cf8defb25'),
('54e95f34-111c-4a3a-9bda-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4d2-6acc-49c8-9667-3d2cf8defb25'),
('54e95f34-97bc-4a2e-84eb-0558f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5492b8c5-291c-452d-bc3a-0544f8defb25', '5492b8fd-3a44-4f62-93fd-0544f8defb25'),
('54e97e54-c958-4ad9-b4e6-0558f8defb25', '54e95830-d13c-42ad-814c-0558f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-52cc-4b96-8b48-0558f8defb25'),
('54e97e54-7284-44e7-9ba2-0558f8defb25', '54e95830-d13c-42ad-814c-0558f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-600c-4bb6-9f3a-0558f8defb25'),
('54e97e54-f924-4771-86eb-0558f8defb25', '54e95830-d13c-42ad-814c-0558f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-d96c-4585-8592-0558f8defb25'),
('54e97e9c-4064-4d30-881a-0558f8defb25', '54e95858-0a34-4b31-8c75-0558f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-52cc-4b96-8b48-0558f8defb25'),
('54e97e9d-97a0-4240-b76b-0558f8defb25', '54e95858-0a34-4b31-8c75-0558f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-600c-4bb6-9f3a-0558f8defb25'),
('54e97e9d-1e40-493f-ae35-0558f8defb25', '54e95858-0a34-4b31-8c75-0558f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-d96c-4585-8592-0558f8defb25'),
('54e97f89-1470-4c7b-b6d0-0558f8defb25', '54e95872-abbc-4f70-98c7-0558f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-52cc-4b96-8b48-0558f8defb25'),
('54e97f89-8054-4aeb-b4cb-0558f8defb25', '54e95872-abbc-4f70-98c7-0558f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-600c-4bb6-9f3a-0558f8defb25'),
('54e97f89-06f4-4a6c-95e8-0558f8defb25', '54e95872-abbc-4f70-98c7-0558f8defb25', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-d96c-4585-8592-0558f8defb25'),
('54e9a07d-80ec-4f9c-a1da-72ecc0b99bfc', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-52cc-4b96-8b48-0558f8defb25'),
('54e9a07d-3140-4764-95e6-72ecc0b99bfc', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-600c-4bb6-9f3a-0558f8defb25'),
('54e9a07d-5ed0-4447-87e4-72ecc0b99bfc', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', '53141557-020c-4f2f-b628-0d43f8defb25', '54e95ddd-d96c-4585-8592-0558f8defb25');

-- --------------------------------------------------------

--
-- Table structure for table `personnel_informations`
--

CREATE TABLE IF NOT EXISTS `personnel_informations` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) DEFAULT NULL,
  `age` varchar(100) NOT NULL,
  `indigenous_group` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `language_one` varchar(100) NOT NULL,
  `language_two` varchar(100) NOT NULL,
  `language_three` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `upazilla` varchar(100) NOT NULL,
  `union` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `user_id` char(36) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnel_informations`
--

INSERT INTO `personnel_informations` (`id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `age`, `indigenous_group`, `language`, `language_one`, `language_two`, `language_three`, `district`, `upazilla`, `union`, `village`, `longitude`, `latitude`, `user_id`) VALUES
(2, 'Iqbal', 'Hussain', '0', 'Nov 27, 1986', '80', 'Bangladeshi', 'Bangla', 'Bangla One', 'Bangola Two', 'Bangla Three', '0', 'd', 'hgfhgfh', 'hfghgf', 'fghfgh', 'fghfghf', '53155fa7-0ce4-4508-8ccc-0e8ef8defb25'),
(18, 'Basonti Rani', 'Banai', '1', 'Sep 12, 1965', '50', 'Banai', 'Banai', 'Banai', 'Bangla', 'Garo', 'Mymensingh', 'Dhobaura', 'Ghoshgaon', 'Ganoi', '', '', '54eda055-cb04-4292-864d-2dd8c0b99bfc'),
(19, 'Kolmilota Koli', 'Dalu', '1', 'Jan 01, 1989', '26', 'Dalu', 'Mymensingh Dialect', 'Mymensingh Dialect', 'Garo (Mandi)', 'Hajong', 'MYMENSINGH', 'Haluaghat', 'Uttar Monikura', '', '', '', '54eda0f5-f6f0-43b4-8674-382fc0b99bfc'),
(20, 'Monoronjon', 'Dalu', '0', 'Jan 01, 1978', '37', 'Dalu', 'Mymensingh Dialect', 'Mymensingh Dialect', 'Garo (Mandi)', 'Hajong', 'Mymensingh', 'Haluaghat', 'Joyramkura', '', '', '', '54eda0f5-f6f0-43b4-8674-382fc0b99bfc'),
(21, 'GOURAB', 'BANAI', '0', 'Dec 14, 1994', '20', 'BANAI', 'BANAI', 'BANAI', 'BANGLA', 'GARO(MANDI)', 'MYMENSINGH', 'DHOBAURA', 'GUSHGAON', 'GANOI', '', '', '54eda16e-d614-4bb1-82d2-3fe4c0b99bfc'),
(22, 'Tapan', 'Dalu', '0', 'Dec 05, 1985', '30', 'Dalu', 'Dalu', 'Banla', '', '', 'Mymensingh', 'Haluaghat', 'Haluaghat', 'Beparipara', '', '', '54eda2dc-4ec4-461c-8795-5620c0b99bfc');

-- --------------------------------------------------------

--
-- Table structure for table `phonetic_sound_samples`
--

CREATE TABLE IF NOT EXISTS `phonetic_sound_samples` (
  `id` int(11) NOT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `ipa_symbol` varchar(100) DEFAULT NULL,
  `bangla` varchar(100) DEFAULT NULL,
  `bangla_word` varchar(100) DEFAULT NULL,
  `ipa_word` varchar(100) DEFAULT NULL,
  `answer_choice` varchar(100) DEFAULT NULL,
  `target_ipa` varchar(100) DEFAULT NULL,
  `bangla_equivalent` varchar(100) DEFAULT NULL,
  `phonetic_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=217 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonetic_sound_samples`
--

INSERT INTO `phonetic_sound_samples` (`id`, `personnel_information_id`, `ipa_symbol`, `bangla`, `bangla_word`, `ipa_word`, `answer_choice`, `target_ipa`, `bangla_equivalent`, `phonetic_type`) VALUES
(1, 19, 'i', 'à¦‡', NULL, 'iccÊ±a', '1', NULL, 'à¦‡à¦šà§à¦›à¦¾', 'vowel'),
(2, 19, 'e', 'à¦', NULL, 'er', '1', NULL, 'à¦à¦°', 'vowel'),
(3, 19, 'Ã¦', 'à¦…à§à¦¯à¦¾', NULL, 'Ã¦kÊ±É”n', '1', NULL, 'à¦…à§à¦¯à¦¾à¦–à¦¨', 'vowel'),
(4, 19, 'a', 'à¦†', NULL, 'akaÊƒ', '1', NULL, 'à¦†à¦•à¦¾à¦¶', 'vowel'),
(5, 19, 'É”', 'à¦…', NULL, 'É”stÌªrÉ”', '1', NULL, 'à¦…à¦¸à§à¦¤à§à¦°', 'vowel'),
(6, 19, 'o', 'à¦“', NULL, 'ozu', '1', NULL, 'à¦“à¦¯à§', 'vowel'),
(7, 19, 'u', 'à¦‰', NULL, 'uni', '1', NULL, 'à¦‰à¦¨à¦¿', 'vowel'),
(8, 19, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(9, 19, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(10, 19, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(11, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 19, 'à¦•', NULL, NULL, 'kasi', '1', NULL, 'à¦•à¦¾à¦¸à¦¿', 'consonant'),
(13, 19, 'à¦–', NULL, NULL, 'kÊ±asa', '1', NULL, 'à¦–à¦¾à¦¸à¦¾', 'consonant'),
(14, 19, 'à¦—', NULL, NULL, 'gaÅ‹/gÉ”rÉ”m', '1', NULL, 'à¦—à¦¾à¦™/à¦—à¦°à¦®', 'consonant'),
(15, 19, 'à¦˜', NULL, NULL, 'gaÅ‹', '1', NULL, 'à¦—à¦¾à¦‚', 'consonant'),
(16, 19, 'à¦™', NULL, NULL, 'gaÅ‹', '1', NULL, 'à¦—à¦¾à¦‚', 'consonant'),
(17, 19, 'à¦š', NULL, NULL, 'sÉ”l', '0', NULL, 'à¦¸à¦²', 'consonant'),
(18, 19, 'à¦›', NULL, NULL, '', '0', NULL, '', 'consonant'),
(19, 19, 'à¦œ', NULL, NULL, '', '0', NULL, '', 'consonant'),
(20, 19, 'à¦', NULL, NULL, '', '0', NULL, '', 'consonant'),
(21, 19, 'à¦Ÿ', NULL, NULL, 'tuli', '1', NULL, 'à¦Ÿà§à¦²à¦¿', 'consonant'),
(22, 19, 'à¦ ', NULL, NULL, 'tÊ±ai', '1', NULL, 'à¦ à¦¾à¦‡', 'consonant'),
(23, 19, 'à¦¡', NULL, NULL, 'dail/duli', '1', NULL, 'à¦¡à¦¾à¦‡à¦²/à¦¡à§à¦²à¦¿', 'consonant'),
(24, 19, 'à¦¢', NULL, NULL, '', '0', NULL, '', 'consonant'),
(25, 19, 'à¦¤', NULL, NULL, 'tÌªuli', '1', NULL, 'à¦¤à¦¾à¦²à¦¾', 'consonant'),
(26, 19, 'à¦¥', NULL, NULL, 'tÌªÊ°al', '1', NULL, 'à¦¥à¦¾à¦²', 'consonant'),
(27, 19, 'à¦¦', NULL, NULL, 'dÌªadÌªi', '1', NULL, 'à¦¦à¦¾à¦¦à§€', 'consonant'),
(28, 19, 'à¦§', NULL, NULL, '', '0', NULL, '', 'consonant'),
(29, 19, 'à¦¨', NULL, NULL, 'nana', '0', NULL, 'à¦¨à¦¾à¦¨à¦¾', 'consonant'),
(30, 19, 'à¦ª', NULL, NULL, 'pakÊ±a', '1', NULL, 'à¦ªà¦¾à¦–à¦¾', 'consonant'),
(31, 19, 'à¦«', NULL, NULL, 'pÊ±oring', '1', NULL, 'à¦«à¦°à¦¿à¦‚', 'consonant'),
(32, 19, 'à¦¬', NULL, NULL, 'bÉ”k', '1', NULL, 'à¦¬à¦•', 'consonant'),
(33, 19, 'à¦­', NULL, NULL, '', '0', NULL, '', 'consonant'),
(34, 19, 'à¦®', NULL, NULL, 'mama', '1', NULL, 'à¦®à¦¾à¦®à¦¾', 'consonant'),
(35, 19, 'à¦°', NULL, NULL, 'rani', '1', NULL, 'à¦°à¦¾à¦¨à§€', 'consonant'),
(36, 19, 'à¦²', NULL, NULL, 'lobÊ±', '1', NULL, 'à¦²à§‹à¦­', 'consonant'),
(37, 19, 'à¦¶', NULL, NULL, 'ÊƒÉ”tÌª', '1', NULL, 'à¦¶à§Ž', 'consonant'),
(38, 19, 'à¦¸', NULL, NULL, 'sim', '1', NULL, 'à¦¸à¦¿à¦®', 'consonant'),
(39, 19, 'à¦¹', NULL, NULL, 'hasa', '1', NULL, 'à¦¹à¦¾à¦¸à¦¾', 'consonant'),
(40, 19, 'à¦¡à¦¼', NULL, NULL, '', '0', NULL, '', 'consonant'),
(41, 19, 'à¦¢à¦¼', NULL, NULL, '', '0', NULL, '', 'consonant'),
(42, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 20, 'i', 'à¦‡', NULL, '', '1', NULL, '', 'vowel'),
(44, 20, 'e', 'à¦', NULL, '', '1', NULL, '', 'vowel'),
(45, 20, 'Ã¦', 'à¦…à§à¦¯à¦¾', NULL, '', '1', NULL, '', 'vowel'),
(46, 20, 'a', 'à¦†', NULL, '', '1', NULL, '', 'vowel'),
(47, 20, 'É”', 'à¦…', NULL, '', '1', NULL, '', 'vowel'),
(48, 20, 'o', 'à¦“', NULL, '', '1', NULL, '', 'vowel'),
(49, 20, 'u', 'à¦‰', NULL, '', '1', NULL, '', 'vowel'),
(50, 20, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(51, 20, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(52, 20, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(53, 18, 'i', 'à¦‡', NULL, 'inka ', '1', NULL, 'à¦‡à¦¨à¦•à¦¾', 'vowel'),
(54, 18, 'e', 'à¦', NULL, 'elai ', '1', NULL, 'à¦à¦²à¦¾à¦‡', 'vowel'),
(55, 18, 'Ã¦', 'à¦…à§à¦¯à¦¾', NULL, 'Ã¦lah ', '1', NULL, 'à¦à¦²à¦¾à¦¹', 'vowel'),
(56, 18, 'a', 'à¦†', NULL, 'amrah ', '1', NULL, 'à¦†à¦®à¦°à¦¾à¦¹', 'vowel'),
(57, 18, 'É”', 'à¦…', NULL, 'É”Å‹ka', '1', NULL, 'à¦…à¦™à¦•à¦¾', 'vowel'),
(58, 18, 'o', 'à¦“', NULL, ' olah ', '1', NULL, ' à¦“à¦²à¦¾à¦¹', 'vowel'),
(59, 18, 'u', 'à¦‰', NULL, 'kun', '1', NULL, 'à¦•à§à¦¨', 'vowel'),
(60, 18, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(61, 18, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(62, 18, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(63, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 18, 'à¦•', NULL, NULL, 'kala', '1', NULL, 'à¦•à¦¾à¦²à¦¾', 'consonant'),
(65, 18, 'à¦–', NULL, NULL, 'kÊ°ay ', '1', NULL, 'à¦–à¦¾à¦¯à¦¼', 'consonant'),
(66, 18, 'à¦—', NULL, NULL, 'gahÉ”n', '1', NULL, 'à¦—à¦¾à¦¹à¦¨', 'consonant'),
(67, 18, 'à¦˜', NULL, NULL, 'gÊ°umabÉ”h', '1', NULL, 'à¦˜à§à¦®à¦¾à¦¬à¦¹', 'consonant'),
(68, 18, 'à¦™', NULL, NULL, 'gaÅ‹ ', '1', NULL, 'à¦—à¦¾à¦™', 'consonant'),
(69, 18, 'à¦š', NULL, NULL, 'cale ', '1', NULL, 'à¦šà¦¾à¦²', 'consonant'),
(70, 18, 'à¦›', NULL, NULL, '', '', NULL, '', 'consonant'),
(71, 18, 'à¦œ', NULL, NULL, 'ÉŸui ', '1', NULL, 'à¦œà§à¦‡', 'consonant'),
(72, 18, 'à¦', NULL, NULL, 'ÉŸÊ°ala', '1', NULL, 'à¦à¦¾à¦²à¦¾', 'consonant'),
(73, 18, 'à¦Ÿ', NULL, NULL, '', '', NULL, '', 'consonant'),
(74, 18, 'à¦ ', NULL, NULL, ' tÊ°eladÌ¯i ', '1', NULL, 'à¦ à§‡à¦²à¦¾à¦¿à¦¦', 'consonant'),
(75, 18, 'à¦¡', NULL, NULL, '', '', NULL, '', 'consonant'),
(76, 18, 'à¦¢', NULL, NULL, ' ', '', NULL, '', 'consonant'),
(77, 18, 'à¦¤', NULL, NULL, ' tÌªÉ”lah ', '1', NULL, 'à¦¤à¦²à¦¾à¦¹', 'consonant'),
(78, 18, 'à¦¥', NULL, NULL, ' tÌªÊ°ali', '1', NULL, 'à¦¥à¦¾à¦¿à¦²', 'consonant'),
(79, 18, 'à¦¦', NULL, NULL, 'dÌªaha', '1', NULL, 'à¦¦à¦¾à¦¹à¦¾', 'consonant'),
(80, 18, 'à¦§', NULL, NULL, 'dÌªÊ°aÅ‹É”r', '1', NULL, 'à¦§à¦¾à¦™à¦°', 'consonant'),
(81, 18, 'à¦¨', NULL, NULL, 'naÉŸay ', '1', NULL, 'à¦¨à¦¾à¦¯à¦¾à¦¯à¦¼', 'consonant'),
(82, 18, 'à¦ª', NULL, NULL, 'pace ', '1', NULL, 'à¦ªà¦¾à§‡à¦š', 'consonant'),
(83, 18, 'à¦«', NULL, NULL, 'pÊ°É”sil ', '1', NULL, 'à¦«à¦¸à¦¿à¦²', 'consonant'),
(84, 18, 'à¦¬', NULL, NULL, 'bÉ”ga ', '1', NULL, 'à¦¬à¦—à¦¾', 'consonant'),
(85, 18, 'à¦­', NULL, NULL, 'bÊ°ui ', '1', NULL, 'à¦­à§à¦‡', 'consonant'),
(86, 18, 'à¦®', NULL, NULL, 'mÉ”lah ', '1', NULL, 'à¦®à¦²à¦¾à¦¹', 'consonant'),
(87, 18, 'à¦°', NULL, NULL, 'ratÌªi', '1', NULL, 'à¦°à¦¾à¦¿à¦¤', 'consonant'),
(88, 18, 'à¦²', NULL, NULL, 'las ', '1', NULL, 'à¦²à¦¾à¦¸', 'consonant'),
(89, 18, 'à¦¶', NULL, NULL, 'ÊƒÉ”bbai', '1', NULL, 'à¦¶à¦¬à¦¬à¦¾à¦‡', 'consonant'),
(90, 18, 'à¦¸', NULL, NULL, '', '', NULL, '', 'consonant'),
(91, 18, 'à¦¹', NULL, NULL, 'hag', '1', NULL, 'à¦¹à¦¾à¦—', 'consonant'),
(92, 18, 'à¦¡à¦¼', NULL, NULL, '', '', NULL, '', 'consonant'),
(93, 18, 'à¦¢à¦¼', NULL, NULL, '', '', NULL, '', 'consonant'),
(94, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 20, 'à¦•', NULL, NULL, '', '', NULL, '', 'consonant'),
(96, 20, 'à¦–', NULL, NULL, '', '', NULL, '', 'consonant'),
(97, 20, 'à¦—', NULL, NULL, '', '', NULL, '', 'consonant'),
(98, 20, 'à¦˜', NULL, NULL, '', '', NULL, '', 'consonant'),
(99, 20, 'à¦™', NULL, NULL, '', '', NULL, '', 'consonant'),
(100, 20, 'à¦š', NULL, NULL, '', '', NULL, '', 'consonant'),
(101, 20, 'à¦›', NULL, NULL, '', '', NULL, '', 'consonant'),
(102, 20, 'à¦œ', NULL, NULL, '', '', NULL, '', 'consonant'),
(103, 20, 'à¦', NULL, NULL, '', '', NULL, '', 'consonant'),
(104, 20, 'à¦Ÿ', NULL, NULL, '', '', NULL, '', 'consonant'),
(105, 20, 'à¦ ', NULL, NULL, '', '', NULL, '', 'consonant'),
(106, 20, 'à¦¡', NULL, NULL, '', '', NULL, '', 'consonant'),
(107, 20, 'à¦¢', NULL, NULL, '', '', NULL, '', 'consonant'),
(108, 20, 'à¦¤', NULL, NULL, '', '', NULL, '', 'consonant'),
(109, 20, 'à¦¥', NULL, NULL, '', '', NULL, '', 'consonant'),
(110, 20, 'à¦¦', NULL, NULL, '', '', NULL, '', 'consonant'),
(111, 20, 'à¦§', NULL, NULL, '', '', NULL, '', 'consonant'),
(112, 20, 'à¦¨', NULL, NULL, '', '', NULL, '', 'consonant'),
(113, 20, 'à¦ª', NULL, NULL, '', '', NULL, '', 'consonant'),
(114, 20, 'à¦«', NULL, NULL, '', '', NULL, '', 'consonant'),
(115, 20, 'à¦¬', NULL, NULL, '', '', NULL, '', 'consonant'),
(116, 20, 'à¦­', NULL, NULL, '', '', NULL, '', 'consonant'),
(117, 20, 'à¦®', NULL, NULL, '', '', NULL, '', 'consonant'),
(118, 20, 'à¦°', NULL, NULL, '', '', NULL, '', 'consonant'),
(119, 20, 'à¦²', NULL, NULL, '', '', NULL, '', 'consonant'),
(120, 20, 'à¦¶', NULL, NULL, '', '', NULL, '', 'consonant'),
(121, 20, 'à¦¸', NULL, NULL, '', '', NULL, '', 'consonant'),
(122, 20, 'à¦¹', NULL, NULL, '', '', NULL, '', 'consonant'),
(123, 20, 'à§œ', NULL, NULL, '', '', NULL, '', 'consonant'),
(124, 20, 'à§', NULL, NULL, '', '', NULL, '', 'consonant'),
(125, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 21, 'i', 'à¦‡', NULL, '', '1', NULL, 'à¦‡à¦‚à¦•à¦¾à¦‡', 'vowel'),
(130, 21, 'e', 'à¦', NULL, '', '1', NULL, 'à¦à¦–à¦²à¦¾à¦‡', 'vowel'),
(131, 21, 'Ã¦', 'à¦…à§à¦¯à¦¾', NULL, '', '1', NULL, 'à¦®à§à¦¯à¦¾à¦²à¦¾à¦¨à¦¿', 'vowel'),
(132, 21, 'a', 'à¦†', NULL, '', '1', NULL, 'à¦†à¦®à¦²à¦¾', 'vowel'),
(133, 21, 'É”', 'à¦…', NULL, '', '1', NULL, 'à¦®à§Ÿ', 'vowel'),
(134, 21, 'o', 'à¦“', NULL, '', '1', NULL, 'à¦“à¦²à¦¾', 'vowel'),
(135, 21, 'u', 'à¦‰', NULL, '', '1', NULL, 'à¦‰à¦—à¦²à¦¾', 'vowel'),
(136, 21, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(137, 21, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(138, 21, '', '', NULL, '', NULL, NULL, '', 'vowel'),
(139, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 21, 'à¦•', NULL, NULL, '', '', NULL, 'à¦•à¦°à§‡à¦•', 'consonant'),
(141, 21, 'à¦–', NULL, NULL, '', '', NULL, 'à¦–à§à§œà¦¿', 'consonant'),
(142, 21, 'à¦—', NULL, NULL, '', '', NULL, 'à¦—à¦¾à¦‰', 'consonant'),
(143, 21, 'à¦˜', NULL, NULL, '', '', NULL, 'à¦˜à¦°', 'consonant'),
(144, 21, 'à¦™', NULL, NULL, '', '', NULL, 'à¦ à§à¦¯à¦‚', 'consonant'),
(145, 21, 'à¦š', NULL, NULL, '', '', NULL, 'à¦šà§‡à¦‚à§œà¦¿', 'consonant'),
(146, 21, 'à¦›', NULL, NULL, '', '', NULL, 'à¦²à¦¾à¦›', 'consonant'),
(147, 21, 'à¦œ', NULL, NULL, '', '', NULL, 'à¦œà§à¦‡', 'consonant'),
(148, 21, 'à¦', NULL, NULL, '', '', NULL, 'à¦à¦¾à¦²à¦¾', 'consonant'),
(149, 21, 'à¦Ÿ', NULL, NULL, '', '', NULL, '', 'consonant'),
(150, 21, 'à¦ ', NULL, NULL, '', '', NULL, 'à¦ à§à¦¯à¦‚', 'consonant'),
(151, 21, 'à¦¡', NULL, NULL, '', '', NULL, '', 'consonant'),
(152, 21, 'à¦¢', NULL, NULL, '', '', NULL, '', 'consonant'),
(153, 21, 'à¦¤', NULL, NULL, '', '', NULL, 'à¦¤à§Ÿ', 'consonant'),
(154, 21, 'à¦¥', NULL, NULL, '', '', NULL, 'à¦¥à¦¾à¦²à¦¿', 'consonant'),
(155, 21, 'à¦¦', NULL, NULL, '', '', NULL, 'à¦¦à§à¦‡à¦•à¦°à¦¾', 'consonant'),
(156, 21, 'à¦§', NULL, NULL, '', '', NULL, 'à¦§à¦“à¦²à¦¾', 'consonant'),
(157, 21, 'à¦¨', NULL, NULL, '', '', NULL, 'à¦¨à¦¾à¦°à¦•à§à¦²', 'consonant'),
(158, 21, 'à¦ª', NULL, NULL, '', '', NULL, 'à¦ªà§à¦–à¦¿', 'consonant'),
(159, 21, 'à¦«', NULL, NULL, '', '', NULL, 'à¦«à¦¿à¦‡à¦²à§à¦²à¦¾', 'consonant'),
(160, 21, 'à¦¬', NULL, NULL, '', '', NULL, 'à¦¬à¦¿à¦²à¦¾à¦‡', 'consonant'),
(161, 21, 'à¦­', NULL, NULL, '', '', NULL, 'à¦­à¦¿à§Ÿà¦¾à¦¨', 'consonant'),
(162, 21, 'à¦®', NULL, NULL, '', '', NULL, 'à¦®à¦¾à¦‡à¦¦à¦¾à¦¨à¦¿', 'consonant'),
(163, 21, 'à¦°', NULL, NULL, '', '', NULL, 'à¦°à¦¾à¦™à§à¦—à¦¾', 'consonant'),
(164, 21, 'à¦²', NULL, NULL, '', '', NULL, 'à¦²à¦¾à¦›', 'consonant'),
(165, 21, 'à¦¶', NULL, NULL, '', '', NULL, 'à¦¶à¦¾à¦“à§Ÿà¦¾', 'consonant'),
(166, 21, 'à¦¸', NULL, NULL, '', '', NULL, '', 'consonant'),
(167, 21, 'à¦¹', NULL, NULL, '', '', NULL, 'à¦¹à¦¾à¦ªà¦¾à¦²', 'consonant'),
(168, 21, 'à§œ', NULL, NULL, '', '', NULL, 'à¦–à§à§œà¦¿', 'consonant'),
(169, 21, 'à§', NULL, NULL, '', '', NULL, '', 'consonant'),
(170, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, 2, 'i', 'à¦‡', NULL, 'aa', '1', NULL, 'bb', 'vowel'),
(175, 2, 'e', 'à¦', NULL, 'aa', '0', NULL, 'bb', 'vowel'),
(176, 2, 'Ã¦', 'à¦…à§à¦¯à¦¾', NULL, 'aa', '1', NULL, 'bb', 'vowel'),
(177, 2, 'a', 'à¦†', NULL, 'aa', '0', NULL, 'bbb', 'vowel'),
(178, 2, 'É”', 'à¦…', NULL, 'aa', '1', NULL, 'bb', 'vowel'),
(179, 2, 'o', 'à¦“', NULL, 'aa', '0', NULL, 'bb', 'vowel'),
(180, 2, 'u', 'à¦‰', NULL, 'aa', '1', NULL, 'bb', 'vowel'),
(181, 2, 'ss', 'ff', NULL, 'aa', NULL, NULL, 'aa', 'vowel'),
(182, 2, 'ss', 'ff', NULL, 'aa', NULL, NULL, 'aa', 'vowel'),
(183, 2, 'ss', 'ff', NULL, 'aa', NULL, NULL, 'aa', 'vowel'),
(184, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 2, 'à¦•', NULL, NULL, 'aa', '1', NULL, 'b', 'consonant'),
(186, 2, 'à¦–', NULL, NULL, 'aa', '0', NULL, 'b', 'consonant'),
(187, 2, 'à¦—', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(188, 2, 'à¦˜', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(189, 2, 'à¦™', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(190, 2, 'à¦š', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(191, 2, 'à¦›', NULL, NULL, 'aaa', '0', NULL, 'b', 'consonant'),
(192, 2, 'à¦œ', NULL, NULL, 'aa', '0', NULL, 'b', 'consonant'),
(193, 2, 'à¦', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(194, 2, 'à¦Ÿ', NULL, NULL, 'aaa', '0', NULL, 'b', 'consonant'),
(195, 2, 'à¦ ', NULL, NULL, 'a', '0', NULL, 'b', 'consonant'),
(196, 2, 'à¦¡', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(197, 2, 'à¦¢', NULL, NULL, 'a', '0', NULL, 'b', 'consonant'),
(198, 2, 'à¦¤', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(199, 2, 'à¦¥', NULL, NULL, 'a', '0', NULL, 'b', 'consonant'),
(200, 2, 'à¦¦', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(201, 2, 'à¦§', NULL, NULL, 'a', '0', NULL, 'b', 'consonant'),
(202, 2, 'à¦¨', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(203, 2, 'à¦ª', NULL, NULL, 'a', '0', NULL, 'b', 'consonant'),
(204, 2, 'à¦«', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(205, 2, 'à¦¬', NULL, NULL, 'a', '0', NULL, 'b', 'consonant'),
(206, 2, 'à¦­', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(207, 2, 'à¦®', NULL, NULL, 'a', '0', NULL, 'b', 'consonant'),
(208, 2, 'à¦°', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(209, 2, 'à¦²', NULL, NULL, 'a', '0', NULL, 'b', 'consonant'),
(210, 2, 'à¦¶', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(211, 2, 'à¦¸', NULL, NULL, 'a', '0', NULL, 'b', 'consonant'),
(212, 2, 'à¦¹', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(213, 2, 'à§œ', NULL, NULL, 'a', '0', NULL, 'b', 'consonant'),
(214, 2, 'à§', NULL, NULL, 'a', '1', NULL, 'b', 'consonant'),
(215, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(216, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE IF NOT EXISTS `processes` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dominion_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `processes`
--

INSERT INTO `processes` (`id`, `name`, `dominion_id`) VALUES
('53141a04-2238-4e14-91d4-0b96f8defb25', 'index', '53141426-c1cc-4306-8412-0ba8f8defb25'),
('53141a19-8ab8-4212-8df1-0d48f8defb25', 'add', '53141426-c1cc-4306-8412-0ba8f8defb25'),
('53141a8b-b684-4b54-84a9-0f56f8defb25', 'admin_index', '53141523-59b0-47b8-8dde-0931f8defb25'),
('53141b73-481c-4800-8c06-0d48f8defb25', 'view', '53141426-c1cc-4306-8412-0ba8f8defb25'),
('53141b90-f0f8-4625-a854-0b9bf8defb25', 'edit', '53141426-c1cc-4306-8412-0ba8f8defb25'),
('53141b9d-33e0-405d-b17e-0f56f8defb25', 'delete', '53141426-c1cc-4306-8412-0ba8f8defb25'),
('53141baa-6bcc-48ba-bee2-0b85f8defb25', 'all', '53141426-c1cc-4306-8412-0ba8f8defb25'),
('53141f04-d09c-47f2-9d6b-0b9bf8defb25', 'admin_index', '53141538-5218-463c-af25-0ba8f8defb25'),
('53141f16-270c-4a73-a6ef-0b85f8defb25', 'admin_add', '53141523-59b0-47b8-8dde-0931f8defb25'),
('53141f20-01b4-4fe1-8249-0f56f8defb25', 'admin_edit', '53141523-59b0-47b8-8dde-0931f8defb25'),
('53141f2e-fe60-4b3f-90e7-0d49f8defb25', 'all', '53141523-59b0-47b8-8dde-0931f8defb25'),
('53141f3f-bb50-4941-90b3-0939f8defb25', 'admin_delete', '53141523-59b0-47b8-8dde-0931f8defb25'),
('53142061-67e8-4b81-aada-1089f8defb25', 'admin_add', '53141538-5218-463c-af25-0ba8f8defb25'),
('531420c1-7914-4d94-8bbf-0b85f8defb25', 'all', '53141538-5218-463c-af25-0ba8f8defb25'),
('53142301-6ce4-4604-983b-0d48f8defb25', 'add', '53141548-b7a8-4afd-8d92-0b96f8defb25'),
('53142306-f410-4680-92e1-0d48f8defb25', 'all', '53141548-b7a8-4afd-8d92-0b96f8defb25'),
('5314230b-ef30-4b02-83c4-0d48f8defb25', 'index', '53141548-b7a8-4afd-8d92-0b96f8defb25'),
('53142310-cdbc-4ebf-85d6-0d48f8defb25', 'delete', '53141548-b7a8-4afd-8d92-0b96f8defb25'),
('5314231e-9c50-444e-997a-1089f8defb25', 'edit', '53141548-b7a8-4afd-8d92-0b96f8defb25'),
('5314232e-13f4-4a8b-9041-0b9bf8defb25', 'view', '53141548-b7a8-4afd-8d92-0b96f8defb25'),
('531426bd-a27c-476e-a691-0b85f8defb25', 'add', '531415b5-62d0-4d99-958b-0d48f8defb25'),
('531426c5-1a3c-4b7c-bddf-0d48f8defb25', 'all', '531415b5-62d0-4d99-958b-0d48f8defb25'),
('531426ca-4694-4858-ac9d-0d48f8defb25', 'index', '531415b5-62d0-4d99-958b-0d48f8defb25'),
('531426cf-df84-413d-a40a-0d48f8defb25', 'view', '531415b5-62d0-4d99-958b-0d48f8defb25'),
('531426d4-c8fc-4ad9-858d-0d48f8defb25', 'delete', '531415b5-62d0-4d99-958b-0d48f8defb25'),
('531426de-a1b4-4baf-aff7-1089f8defb25', 'edit', '531415b5-62d0-4d99-958b-0d48f8defb25'),
('53156245-bb98-4aa3-a01b-0e8ef8defb25', 'admin_view', '5314160e-1778-43a1-8d3e-0939f8defb25'),
('53156396-daac-422e-9b6e-0dd4f8defb25', 'admin_edit', '5314160e-1778-43a1-8d3e-0939f8defb25'),
('531563a1-57bc-471b-ae5e-1054f8defb25', 'all', '5314160e-1778-43a1-8d3e-0939f8defb25'),
('531563d0-8d1c-4eb3-bf4b-0e8ef8defb25', 'admin_index', '53141565-e924-4ee7-b6ba-0939f8defb25'),
('531563db-570c-47c2-a6c3-0f11f8defb25', 'admin_view', '53141565-e924-4ee7-b6ba-0939f8defb25'),
('531563ef-66bc-4ce5-bf8c-0b05f8defb25', 'admin_add', '53141565-e924-4ee7-b6ba-0939f8defb25'),
('53156400-40b8-4df8-a5af-0f96f8defb25', 'admin_edit', '53141565-e924-4ee7-b6ba-0939f8defb25'),
('53156410-c53c-4b5a-bb9e-091ff8defb25', 'admin_delete', '53141565-e924-4ee7-b6ba-0939f8defb25'),
('5315641d-0ac0-44a6-940f-0927f8defb25', 'all', '53141565-e924-4ee7-b6ba-0939f8defb25'),
('53156457-d934-4fa0-a988-08eaf8defb25', 'index', '5314157b-58f8-43f6-a8d8-04d6f8defb25'),
('53156467-ac68-41ef-bc15-0e99f8defb25', 'view', '5314157b-58f8-43f6-a8d8-04d6f8defb25'),
('53156475-2c14-4428-a919-0e8ef8defb25', 'add', '5314157b-58f8-43f6-a8d8-04d6f8defb25'),
('53156481-8c78-4044-a27f-0f11f8defb25', 'edit', '5314157b-58f8-43f6-a8d8-04d6f8defb25'),
('5315648b-1cb4-4ec2-ade3-0b05f8defb25', 'delete', '5314157b-58f8-43f6-a8d8-04d6f8defb25'),
('53156497-ba44-4c19-b0ab-0f96f8defb25', 'admin_index', '5314157b-58f8-43f6-a8d8-04d6f8defb25'),
('531564a6-ab58-46b8-8522-091ff8defb25', 'admin_view', '5314157b-58f8-43f6-a8d8-04d6f8defb25'),
('531564b3-a420-4f6e-a2ed-0927f8defb25', 'admin_add', '5314157b-58f8-43f6-a8d8-04d6f8defb25'),
('531564bf-ea0c-4a6f-b64a-0dd4f8defb25', 'admin_edit', '5314157b-58f8-43f6-a8d8-04d6f8defb25'),
('531564d5-9e80-4dcf-a8e6-1054f8defb25', 'admin_delete', '5314157b-58f8-43f6-a8d8-04d6f8defb25'),
('531564e3-1568-48f1-bd34-0e99f8defb25', 'all', '5314157b-58f8-43f6-a8d8-04d6f8defb25'),
('53156508-33b4-4732-815d-0e8ef8defb25', 'admin_index', '531415b5-62d0-4d99-958b-0d48f8defb25'),
('53156514-1cec-499e-8666-0f11f8defb25', 'admin_view', '531415b5-62d0-4d99-958b-0d48f8defb25'),
('5315652a-95d8-42d5-970d-0f96f8defb25', 'admin_add', '531415b5-62d0-4d99-958b-0d48f8defb25'),
('53156536-2844-49ce-90a8-091ff8defb25', 'admin_edit', '531415b5-62d0-4d99-958b-0d48f8defb25'),
('53156546-efe0-4424-b18b-0927f8defb25', 'admin_delete', '531415b5-62d0-4d99-958b-0d48f8defb25'),
('53156581-bbdc-4a30-bce7-0e99f8defb25', 'admin_index', '531415d5-053c-454c-a150-0ba8f8defb25'),
('5315658b-a104-4f20-b57b-0e8ef8defb25', 'admin_view', '531415d5-053c-454c-a150-0ba8f8defb25'),
('53156596-1738-42fb-8b2f-0f11f8defb25', 'admin_add', '531415d5-053c-454c-a150-0ba8f8defb25'),
('531565a3-9868-40ef-ae44-0b05f8defb25', 'admin_edit', '531415d5-053c-454c-a150-0ba8f8defb25'),
('531565ae-fa58-43c2-9635-0f96f8defb25', 'admin_delete', '531415d5-053c-454c-a150-0ba8f8defb25'),
('531565b6-dfd0-41c2-bc5b-091ff8defb25', 'all', '531415d5-053c-454c-a150-0ba8f8defb25'),
('5315664d-5094-4065-9fbd-0927f8defb25', 'admin_index', '531415e6-4208-43ca-9440-0b96f8defb25'),
('53156658-f2e4-4389-b822-0dd4f8defb25', 'admin_view', '531415e6-4208-43ca-9440-0b96f8defb25'),
('53156663-83d8-44e2-b32b-1054f8defb25', 'admin_add', '531415e6-4208-43ca-9440-0b96f8defb25'),
('53156671-a258-4406-84bc-0e99f8defb25', 'admin_edit', '531415e6-4208-43ca-9440-0b96f8defb25'),
('5315667b-43b8-4e24-8548-0e8ef8defb25', 'admin_delete', '531415e6-4208-43ca-9440-0b96f8defb25'),
('53156688-720c-4bc1-bfd8-0b05f8defb25', 'all', '531415e6-4208-43ca-9440-0b96f8defb25'),
('531566ce-aa0c-4260-b7c7-0dd4f8defb25', 'admin_index', '531566be-47bc-4366-b244-091ff8defb25'),
('531566e2-9d60-4b27-b9d4-08eaf8defb25', 'admin_view', '531566be-47bc-4366-b244-091ff8defb25'),
('531566ea-316c-4118-b546-0e99f8defb25', 'admin_add', '531566be-47bc-4366-b244-091ff8defb25'),
('531566f4-3ef8-49da-9c34-0e8ef8defb25', 'admin_edit', '531566be-47bc-4366-b244-091ff8defb25'),
('531566ff-8208-41fd-b4b5-0b05f8defb25', 'admin_delete', '531566be-47bc-4366-b244-091ff8defb25'),
('53156706-71cc-4d03-bc24-0b05f8defb25', 'all', '531566be-47bc-4366-b244-091ff8defb25'),
('531568fa-8c34-459d-aa7b-0f96f8defb25', 'admin_index', '531568ef-f7c8-45fa-81f4-091ff8defb25'),
('53156903-62b8-4dd7-8650-11c9f8defb25', 'admin_view', '531568ef-f7c8-45fa-81f4-091ff8defb25'),
('5315690c-a5f0-4288-abf5-08eaf8defb25', 'admin_add', '531568ef-f7c8-45fa-81f4-091ff8defb25'),
('53156916-0ee8-44db-b485-11f6f8defb25', 'admin_edit', '531568ef-f7c8-45fa-81f4-091ff8defb25'),
('53156920-ce50-4d51-9b98-1214f8defb25', 'admin_delete', '531568ef-f7c8-45fa-81f4-091ff8defb25'),
('5315692b-a8c8-42d7-aa26-1215f8defb25', 'all', '531568ef-f7c8-45fa-81f4-091ff8defb25'),
('5316b4ff-f604-4ccc-acdc-0a4af8defb25', 'admin_index', '5316b4f6-80c4-4e4b-be27-0936f8defb25'),
('5316b506-6c84-4020-ace5-0939f8defb25', 'admin_add', '5316b4f6-80c4-4e4b-be27-0936f8defb25'),
('5316b50c-5e00-49ee-885e-0939f8defb25', 'admin_edit', '5316b4f6-80c4-4e4b-be27-0936f8defb25'),
('5316b515-fefc-4a06-a713-0536f8defb25', 'admin_delete', '5316b4f6-80c4-4e4b-be27-0936f8defb25'),
('5316b51f-98b0-4f72-a04a-0930f8defb25', 'all', '5316b4f6-80c4-4e4b-be27-0936f8defb25'),
('5316b527-3cec-4fd3-abe4-0930f8defb25', 'admin_view', '5316b4f6-80c4-4e4b-be27-0936f8defb25'),
('5316b533-a40c-44e7-a5e4-0930f8defb25', 'admin_index', '531415ff-0e3c-42d9-b5e2-0d43f8defb25'),
('5316b538-831c-40e0-a4ed-0930f8defb25', 'admin_view', '531415ff-0e3c-42d9-b5e2-0d43f8defb25'),
('5316b541-e3fc-4d84-b54a-0537f8defb25', 'admin_add', '531415ff-0e3c-42d9-b5e2-0d43f8defb25'),
('5316b549-fd74-4083-bc68-053af8defb25', 'admin_edit', '531415ff-0e3c-42d9-b5e2-0d43f8defb25'),
('5316b54d-2410-4fbf-bcad-053af8defb25', 'admin_delete', '531415ff-0e3c-42d9-b5e2-0d43f8defb25'),
('5316b552-e7a0-46f0-9d49-053af8defb25', 'all', '531415ff-0e3c-42d9-b5e2-0d43f8defb25'),
('5316e303-0164-438d-b8cd-3d2ff8defb25', 'all', '5316e2f3-ac88-4b7c-923c-3e23f8defb25'),
('5316e308-f4d4-4e3b-9d3e-3d2ff8defb25', 'admin_index', '5316e2f3-ac88-4b7c-923c-3e23f8defb25'),
('5316e30e-1298-4d76-bd19-3e25f8defb25', 'admin_add', '5316e2f3-ac88-4b7c-923c-3e23f8defb25'),
('5316e313-59f8-4227-ae7b-3e25f8defb25', 'admin_edit', '5316e2f3-ac88-4b7c-923c-3e23f8defb25'),
('5316e31b-8c14-4be0-a1dd-3e22f8defb25', 'admin_view', '5316e2f3-ac88-4b7c-923c-3e23f8defb25'),
('5316e324-9abc-4687-a9f0-3d2df8defb25', 'admin_delete', '5316e2f3-ac88-4b7c-923c-3e23f8defb25'),
('5316e4ae-3388-4e53-b826-3e22f8defb25', 'admin_index', '5316e4a7-965c-4213-9cab-3e22f8defb25'),
('5316e4b3-f400-4b39-b48b-3e22f8defb25', 'admin_view', '5316e4a7-965c-4213-9cab-3e22f8defb25'),
('5316e4bf-4320-47e5-82dd-3d2df8defb25', 'admin_edit', '5316e4a7-965c-4213-9cab-3e22f8defb25'),
('5316e4c7-eb84-4a31-92cb-3d2cf8defb25', 'admin_add', '5316e4a7-965c-4213-9cab-3e22f8defb25'),
('5316e4cd-f388-4a5f-b739-3d2cf8defb25', 'admin_delete', '5316e4a7-965c-4213-9cab-3e22f8defb25'),
('5316e4d2-6acc-49c8-9667-3d2cf8defb25', 'all', '5316e4a7-965c-4213-9cab-3e22f8defb25'),
('5316e748-3e14-4d4e-b1c8-3e52f8defb25', 'all', '5316e744-af6c-4608-b381-3e52f8defb25'),
('5316e754-3f84-41a4-a56b-3d2bf8defb25', 'admin_view', '5316e744-af6c-4608-b381-3e52f8defb25'),
('5316e75c-2e70-461a-96ab-3d2bf8defb25', 'admin_edit', '5316e744-af6c-4608-b381-3e52f8defb25'),
('5316f452-b4b0-4970-b685-40f2f8defb25', 'admin_index', '5316e744-af6c-4608-b381-3e52f8defb25'),
('5316f5de-3538-429d-9691-3e23f8defb25', 'admin_edit', '53141538-5218-463c-af25-0ba8f8defb25'),
('5316f5e5-0c38-4e6e-98d7-3e23f8defb25', 'admin_view', '53141538-5218-463c-af25-0ba8f8defb25'),
('5316f5eb-aeb4-4e48-8eaa-3e23f8defb25', 'admin_delete', '53141538-5218-463c-af25-0ba8f8defb25'),
('5327e0dd-4888-4ae1-b778-0da8f8defb25', 'index', '5327e0bf-f4cc-4b40-880b-0da3f8defb25'),
('5327e0e8-956c-4f78-8593-0daaf8defb25', 'view', '5327e0bf-f4cc-4b40-880b-0da3f8defb25'),
('5327e0fa-15a8-4310-afd1-0e12f8defb25', 'admin_index', '5327e0bf-f4cc-4b40-880b-0da3f8defb25'),
('5327e103-c628-499e-a63c-0dbbf8defb25', 'admin_view', '5327e0bf-f4cc-4b40-880b-0da3f8defb25'),
('5327e10c-40a0-4c6d-be3d-0da7f8defb25', 'admin_add', '5327e0bf-f4cc-4b40-880b-0da3f8defb25'),
('5327e115-6b88-4c08-9a27-0c59f8defb25', 'admin_edit', '5327e0bf-f4cc-4b40-880b-0da3f8defb25'),
('5327e121-939c-4f9d-8ae9-0da1f8defb25', 'admin_delete', '5327e0bf-f4cc-4b40-880b-0da3f8defb25'),
('5329204a-6a58-422b-aed0-0acdf8defb25', 'index', '5329203f-7484-47ae-b37e-0af2f8defb25'),
('53292053-73f0-42dd-adc8-0ad4f8defb25', 'view', '5329203f-7484-47ae-b37e-0af2f8defb25'),
('53292095-b75c-4067-9a8a-098ff8defb25', 'admin_index', '5329203f-7484-47ae-b37e-0af2f8defb25'),
('544f4c9c-1008-4283-aaa9-0e8cf8defb25', 'admin_index', '5448cef0-3920-4d59-84ae-0fb0f8defb25'),
('544f4cad-dafc-42ee-8468-0e8cf8defb25', 'admin_index', '5446502c-0558-48cb-a9d5-16c8f8defb25'),
('5492b8fd-3a44-4f62-93fd-0544f8defb25', 'admin_index', '5492b8c5-291c-452d-bc3a-0544f8defb25'),
('54969780-e370-42b8-b2a5-0e20f8defb25', 'admin_index', '54969763-086c-4435-adf0-0e20f8defb25'),
('5496b8a4-4330-49d9-9de9-0e20f8defb25', 'admin_index', '5496b7df-3c0c-4db3-a564-0e20f8defb25'),
('5496b8c6-ada0-4509-b754-0e20f8defb25', 'admin_index', '5496b80a-aa7c-43fc-97cb-0e20f8defb25'),
('5496b8e3-ddbc-4b3c-beaf-0e20f8defb25', 'admin_index', '5496b81c-a464-4859-882b-0e20f8defb25'),
('54e95ddd-52cc-4b96-8b48-0558f8defb25', 'admin_index', '53141557-020c-4f2f-b628-0d43f8defb25'),
('54e95ddd-600c-4bb6-9f3a-0558f8defb25', 'admin_cultural_dashboard', '53141557-020c-4f2f-b628-0d43f8defb25'),
('54e95ddd-d96c-4585-8592-0558f8defb25', 'admin_linguistics', '53141557-020c-4f2f-b628-0d43f8defb25');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `division` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(11) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `name`, `division`, `country`, `state`, `zipcode`, `mobile`, `image`) VALUES
('53155fa7-f6e0-4c5c-b1db-0e8ef8defb25', '53155fa7-0ce4-4508-8ccc-0e8ef8defb25', 'Admin', 'Dhaka', 'Bangladesh', 'Dhaka', '1000', '01722113736', ''),
('5469d5f0-579c-4bdf-b85a-0ad8f8defb25', '5469d5f0-50e8-47e6-83fc-0ad8f8defb25', 'Shahed Hasan', 'Dhaka', 'bangladesh', 'Dhaka', '1000', '01722113736', '/img/frontend/profile/thumb/Profile_image_141118032326.jpg'),
('54e95ba8-2238-4972-b719-0558f8defb25', '54e95ba8-9b98-4487-95e5-0558f8defb25', 'Linguistics Data Surveyer', '', '', '', '', '', ''),
('54e95cb5-3d7c-41dd-82f0-0558f8defb25', '54e95cb5-b6dc-490b-81da-0558f8defb25', 'House Hold Data Surveyer', '', '', '', '', '', ''),
('54e95d02-2d54-4a75-98d5-0558f8defb25', '54e95d02-a6b4-4098-aafc-0558f8defb25', 'Community Data Surveyer', '', '', '', '', '', ''),
('54e9a05b-577c-4ca4-a969-7141c0b99bfc', '54e9a05b-f0a4-4916-8f31-7141c0b99bfc', 'Cultural', '', '', '', '', '', ''),
('54e9a267-7cb4-49fa-8150-0f57c0b99bfc', '54e9a267-0424-4b98-8ff9-0f57c0b99bfc', 'language test', '', '', '', '', '', ''),
('54eda055-6aa4-47cd-a6de-2dd8c0b99bfc', '54eda055-cb04-4292-864d-2dd8c0b99bfc', 'Md Jaoynal Abedin', '', '', '', '', '01779480923', ''),
('54eda0f5-cda4-46f3-ba7e-382fc0b99bfc', '54eda0f5-f6f0-43b4-8674-382fc0b99bfc', 'Md Sarwar Amin', '', '', '', '', '', ''),
('54eda16e-338c-436f-bb1f-3fe4c0b99bfc', '54eda16e-d614-4bb1-82d2-3fe4c0b99bfc', 'Md ABul Hazzat Shohag', '', '', '', '', '01675699754', ''),
('54eda1ea-1cd8-400c-b80a-4765c0b99bfc', '54eda1ea-79dc-4859-bdf8-4765c0b99bfc', 'Md Daloar Hossain', '', '', '', '', '01723265467', ''),
('54eda273-6b84-4413-ba1e-5024c0b99bfc', '54eda273-914c-4bcd-ad00-5024c0b99bfc', 'Sanyuzzaman Pavel', '', '', '', '', '', ''),
('54eda2dc-6d58-48de-af05-5620c0b99bfc', '54eda2dc-4ec4-461c-8795-5620c0b99bfc', 'Amolendo kosh', '', '', '', '', '', ''),
('54eda329-d590-4c94-9b38-5a8cc0b99bfc', '54eda329-5724-47ba-8713-5a8cc0b99bfc', 'Subhan Rangsa', '', '', '', '', '', ''),
('54eda3e3-8450-4dd8-876c-64dac0b99bfc', '54eda3e3-b9b8-4e1f-9af1-64dac0b99bfc', 'Md Adbul Gaffar', '', '', '', '', '01722449192', ''),
('54eed9aa-72bc-475c-93f3-0448c0b99bfc', '54eed9aa-881c-475d-a8db-0448c0b99bfc', 'research', '', '', '', '', '', ''),
('54eedf87-6758-4b78-a1fc-52f5c0b99bfc', '54eedf87-d370-483e-af78-52f5c0b99bfc', 'Kamal Abu Naser Chowdhury', '', '', '', '', '', ''),
('54f4603f-9058-49dc-81ed-0ff7c0b99bfc', '54f4603f-3218-4727-90cf-0ff7c0b99bfc', 'Gobinda Chandra Deb', '', '', '', '', '', ''),
('54f46074-6268-478d-89cf-12a7c0b99bfc', '54f46074-c458-4c68-ad0f-12a7c0b99bfc', 'Maruf Ahmed', '', '', '', '', '', ''),
('54f460ab-d578-4e0b-b2f7-1583c0b99bfc', '54f460ab-638c-4949-ab8d-1583c0b99bfc', 'Harunor Rashid', '', '', '', '', '', ''),
('54f460d7-4430-4d1b-b113-17afc0b99bfc', '54f460d7-1878-4271-b50c-17afc0b99bfc', 'Mohammad Mozamel Haque', '', '', '', '', '', ''),
('54f4611c-24ec-4b69-9dc3-1bacc0b99bfc', '54f4611c-9bb4-43df-a91f-1bacc0b99bfc', 'Md Abu Sayed', '', '', '', '', '', ''),
('54f4614f-54f4-4464-aa1d-1f36c0b99bfc', '54f4614f-ef48-4e95-bdfa-1f36c0b99bfc', 'Ali Ahmed', '', '', '', '', '', ''),
('54f46178-c610-49c6-85c4-21efc0b99bfc', '54f46178-436c-42a5-8b48-21efc0b99bfc', 'Md Kibria Tusar', '', '', '', '', '', ''),
('54f461a2-cf24-4e12-b1c3-2550c0b99bfc', '54f461a2-ae80-47c7-b12c-2550c0b99bfc', 'Shah Mostafizur Rahman', '', '', '', '', '', ''),
('54f461d7-929c-4548-9777-2831c0b99bfc', '54f461d7-ed84-4593-a1cb-2831c0b99bfc', 'Maksudur Rahman', '', '', '', '', '', ''),
('54f46240-91d0-47aa-82af-2d14c0b99bfc', '54f46240-06a4-4365-8d4e-2d14c0b99bfc', 'Amit Dutta', '', '', '', '', '', ''),
('54f5b600-884c-475d-b9ae-2449c0b99bfc', '54f5b600-e1a4-4fa9-a6e3-2449c0b99bfc', 'Md. Shadequr Rahman', '', '', '', '', '', ''),
('54f5b67e-6230-45ce-908d-2f4dc0b99bfc', '54f5b67e-a054-4d41-8191-2f4dc0b99bfc', 'Md. Sifatullah', '', '', '', '', '', ''),
('54f5b709-efc4-4c9a-b9c2-395ec0b99bfc', '54f5b709-60b0-4b9a-8e46-395ec0b99bfc', 'Nurnnabi Sarker', '', '', '', '', '', ''),
('54f5b776-62a0-4d82-a6e7-423ac0b99bfc', '54f5b776-eba0-4004-b87f-423ac0b99bfc', 'Rubaiet Hossain', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `question_type`
--

CREATE TABLE IF NOT EXISTS `question_type` (
  `id` int(11) NOT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `question_20a` varchar(100) NOT NULL,
  `questioin_20b` varchar(100) NOT NULL,
  `question_21a` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_type`
--

INSERT INTO `question_type` (`id`, `personnel_information_id`, `question_20a`, `questioin_20b`, `question_21a`) VALUES
(1, 2, 'aa', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `access_controller` varchar(100) NOT NULL,
  `login_url` varchar(100) NOT NULL,
  `status` tinytext,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `access_controller`, `login_url`, `status`, `created`, `modified`) VALUES
('53141664-f3c4-4696-b2b2-0d49f8defb25', 'Admin', 'admin', '', '', 'active', '2014-03-03 11:43:00', '2014-03-03 11:43:00'),
('53141678-618c-49b2-a33f-0931f8defb25', 'User', 'user', '', '', 'active', '2014-03-03 11:43:20', '2014-03-03 11:43:20'),
('54e95830-d13c-42ad-814c-0558f8defb25', 'Linguistics', 'linguistics-2', 'linguistics', 'pages/admin_index', 'active', '2015-02-22 10:16:48', '2015-02-22 12:13:57'),
('54e95858-0a34-4b31-8c75-0558f8defb25', 'Household', 'household-2', 'cultural', 'pages/admin_cultural_dashboard', 'active', '2015-02-22 10:17:28', '2015-02-22 12:15:14'),
('54e95872-abbc-4f70-98c7-0558f8defb25', 'Community', 'community-2', 'community', 'pages/admin_cultural_dashboard', 'active', '2015-02-22 10:17:54', '2015-02-22 12:16:16'),
('54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 'Cultural', 'cultural', 'cultural', 'pages/admin_cultural_dashboard', 'active', '2015-02-22 15:23:41', '2015-02-22 15:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `sectiond_householdinfo`
--

CREATE TABLE IF NOT EXISTS `sectiond_householdinfo` (
  `id` int(11) NOT NULL,
  `number_hhm` int(11) NOT NULL,
  `name_household_head` varchar(100) NOT NULL,
  `start_with_household_head` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `maritial_status` varchar(100) NOT NULL,
  `education_level` varchar(100) NOT NULL,
  `primary_occupation` varchar(100) NOT NULL,
  `secondary_occupation` varchar(100) NOT NULL,
  `other_occupation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_705`
--

CREATE TABLE IF NOT EXISTS `section_705` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `description_of_animals` varchar(100) DEFAULT NULL,
  `primary_number` varchar(100) DEFAULT NULL,
  `sale_and_exchange` varchar(100) DEFAULT NULL,
  `lost_and_deceased` varchar(100) DEFAULT NULL,
  `purchased_gift` varchar(100) DEFAULT NULL,
  `reproduction` varchar(100) DEFAULT NULL,
  `total_number` varchar(100) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `total_present_value` varchar(100) DEFAULT NULL,
  `yes_no_ans` varchar(100) DEFAULT NULL,
  `gift_own_use` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_705`
--

INSERT INTO `section_705` (`id`, `interview_id`, `description_of_animals`, `primary_number`, `sale_and_exchange`, `lost_and_deceased`, `purchased_gift`, `reproduction`, `total_number`, `unit`, `total_present_value`, `yes_no_ans`, `gift_own_use`) VALUES
(1, 0, NULL, 'data[0][Section705][primary_number]', 'data[0][Section705][sale_and_exchange]', 'data[0][Section705][lost_and_deceased]', 'data[0][Section705][purchased_gift]', 'data[0][Section705][reproduction]', 'data[0][Section705][total_number]', 'data[0][Section705][unit]', 'data[0][Section705][total_present_value]', '1', 'data[0][Section705][gift_own_use]'),
(2, 0, NULL, 'data[1][Section705][primary_number]', 'data[1][Section705][sale_and_exchange]', 'data[1][Section705][lost_and_deceased]', 'data[1][Section705][purchased_gift]', 'data[1][Section705][reproduction]', 'data[1][Section705][total_number]', 'data[1][Section705][unit]', 'data[1][Section705][total_present_value]', '1', 'data[1][Section705][gift_own_use]'),
(3, 0, NULL, 'data[2][Section705][primary_number]', 'data[2][Section705][sale_and_exchange]', 'data[2][Section705][lost_and_deceased]', 'data[2][Section705][purchased_gift]', 'data[2][Section705][reproduction]', 'data[2][Section705][total_number]', 'data[2][Section705][unit]', 'data[2][Section705][total_present_value]', '1', 'data[2][Section705][gift_own_use]'),
(4, 0, NULL, 'data[3][Section705][primary_number]', 'data[3][Section705][sale_and_exchange]', 'data[3][Section705][lost_and_deceased]', 'data[3][Section705][purchased_gift]', 'data[3][Section705][reproduction]', 'data[3][Section705][total_number]', 'data[3][Section705][unit]', 'data[3][Section705][total_present_value]', '1', 'data[3][Section705][gift_own_use]'),
(5, 0, NULL, 'data[4][Section705][primary_number]', 'data[4][Section705][sale_and_exchange]', 'data[4][Section705][lost_and_deceased]', 'data[4][Section705][purchased_gift]', 'data[4][Section705][reproduction]', 'data[4][Section705][total_number]', 'data[4][Section705][unit]', 'data[4][Section705][total_present_value]', '1', 'data[4][Section705][gift_own_use]'),
(6, 0, NULL, 'data[5][Section705][primary_number]', 'data[5][Section705][sale_and_exchange]', 'data[5][Section705][lost_and_deceased]', 'data[5][Section705][purchased_gift]', 'data[5][Section705][reproduction]', 'data[5][Section705][total_number]', 'data[5][Section705][unit]', 'data[5][Section705][total_present_value]', '1', 'data[5][Section705][gift_own_use]'),
(7, 0, NULL, 'data[6][Section705][primary_number]', 'data[6][Section705][sale_and_exchange]', 'data[6][Section705][lost_and_deceased]', 'data[6][Section705][purchased_gift]', 'data[6][Section705][reproduction]', 'data[6][Section705][total_number]', 'data[6][Section705][unit]', 'data[6][Section705][total_present_value]', '1', 'data[6][Section705][gift_own_use]'),
(8, 0, NULL, 'data[7][Section705][primary_number]', 'data[7][Section705][sale_and_exchange]', 'data[7][Section705][lost_and_deceased]', 'data[7][Section705][purchased_gift]', 'data[7][Section705][reproduction]', 'data[7][Section705][total_number]', 'data[7][Section705][unit]', 'data[7][Section705][total_present_value]', '1', 'data[7][Section705][gift_own_use]'),
(9, 0, NULL, 'data[8][Section705][primary_number]', 'data[8][Section705][sale_and_exchange]', 'data[8][Section705][lost_and_deceased]', 'data[8][Section705][purchased_gift]', 'data[8][Section705][reproduction]', 'data[8][Section705][total_number]', 'data[8][Section705][unit]', 'data[8][Section705][total_present_value]', '1', 'data[8][Section705][gift_own_use]'),
(10, 5, 'Cow', 'data[0][Section705][primary_number]', 'data[0][Section705][sale_and_exchange]', 'data[0][Section705][lost_and_deceased]', 'data[0][Section705][purchased_gift]', 'data[0][Section705][reproduction]', 'data[0][Section705][total_number]', 'data[0][Section705][unit]', 'data[0][Section705][total_present_value]', '1', 'Sylhet'),
(11, 5, 'Buffalo', 'data[1][Section705][primary_number]', 'data[1][Section705][sale_and_exchange]', 'data[1][Section705][lost_and_deceased]', 'data[1][Section705][purchased_gift]', 'data[1][Section705][reproduction]', 'data[1][Section705][total_number]', 'data[1][Section705][unit]', 'data[1][Section705][total_present_value]', '1', 'data[1][Section705][gift_own_use]'),
(12, 5, 'Goat', 'data[2][Section705][primary_number]', 'data[2][Section705][sale_and_exchange]', 'data[2][Section705][lost_and_deceased]', 'data[2][Section705][purchased_gift]', 'data[2][Section705][reproduction]', 'data[2][Section705][total_number]', 'data[2][Section705][unit]', 'data[2][Section705][total_present_value]', '1', 'data[2][Section705][gift_own_use]'),
(13, 5, 'Sheep', 'data[3][Section705][primary_number]', 'data[3][Section705][sale_and_exchange]', 'data[3][Section705][lost_and_deceased]', 'data[3][Section705][purchased_gift]', 'data[3][Section705][reproduction]', 'data[3][Section705][total_number]', 'data[3][Section705][unit]', 'data[3][Section705][total_present_value]', '1', 'data[3][Section705][gift_own_use]'),
(14, 5, 'Pig', 'data[4][Section705][primary_number]', 'data[4][Section705][sale_and_exchange]', 'data[4][Section705][lost_and_deceased]', 'data[4][Section705][purchased_gift]', 'data[4][Section705][reproduction]', 'data[4][Section705][total_number]', 'data[4][Section705][unit]', 'data[4][Section705][total_present_value]', '1', 'data[4][Section705][gift_own_use]'),
(15, 5, 'Duck', 'data[5][Section705][primary_number]', 'data[5][Section705][sale_and_exchange]', 'data[5][Section705][lost_and_deceased]', 'data[5][Section705][purchased_gift]', 'data[5][Section705][reproduction]', 'data[5][Section705][total_number]', 'data[5][Section705][unit]', 'data[5][Section705][total_present_value]', '1', 'data[5][Section705][gift_own_use]'),
(16, 5, 'Chicken', 'data[6][Section705][primary_number]', 'data[6][Section705][sale_and_exchange]', 'data[6][Section705][lost_and_deceased]', 'data[6][Section705][purchased_gift]', 'data[6][Section705][reproduction]', 'data[6][Section705][total_number]', 'data[6][Section705][unit]', 'data[6][Section705][total_present_value]', '1', 'data[6][Section705][gift_own_use]'),
(17, 5, 'Pigeon', 'data[7][Section705][primary_number]', 'data[7][Section705][sale_and_exchange]', 'data[7][Section705][lost_and_deceased]', 'data[7][Section705][purchased_gift]', 'data[7][Section705][reproduction]', 'data[7][Section705][total_number]', 'data[7][Section705][unit]', 'data[7][Section705][total_present_value]', '1', 'data[7][Section705][gift_own_use]'),
(18, 5, 'Others', 'data[8][Section705][primary_number]', 'data[8][Section705][sale_and_exchange]', 'data[8][Section705][lost_and_deceased]', 'data[8][Section705][purchased_gift]', 'data[8][Section705][reproduction]', 'data[8][Section705][total_number]', 'data[8][Section705][unit]', 'data[8][Section705][total_present_value]', '1', 'data[8][Section705][gift_own_use]');

-- --------------------------------------------------------

--
-- Table structure for table `section_706`
--

CREATE TABLE IF NOT EXISTS `section_706` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `type_of_production` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `gift_own_use` varchar(100) DEFAULT NULL,
  `sale_and_exchange` varchar(100) DEFAULT NULL,
  `price_per_kg` varchar(100) DEFAULT NULL,
  `total_price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_706`
--

INSERT INTO `section_706` (`id`, `interview_id`, `type_of_production`, `amount`, `unit`, `gift_own_use`, `sale_and_exchange`, `price_per_kg`, `total_price`) VALUES
(25, 5, 'Meat', 'data[0][Section706][amount]', 'our test', 'data[0][Section706][gift_own_use]', 'data[0][Section706][sale_and_exchange]', 'data[0][Section706][price_per_kg]', 'data[0][Section706][total_price]'),
(26, 5, 'Milk', 'data[1][Section706][amount]', 'data[1][Section706][unit]', 'data[1][Section706][gift_own_use]', 'data[1][Section706][sale_and_exchange]', 'data[1][Section706][price_per_kg]', 'data[1][Section706][total_price]'),
(27, 5, 'Butter', 'data[2][Section706][amount]', 'data[2][Section706][unit]', 'data[2][Section706][gift_own_use]', 'data[2][Section706][sale_and_exchange]', 'data[2][Section706][price_per_kg]', 'data[2][Section706][total_price]'),
(28, 5, 'Cheese', 'data[3][Section706][amount]', 'data[3][Section706][unit]', 'data[3][Section706][gift_own_use]', 'data[3][Section706][sale_and_exchange]', 'data[3][Section706][price_per_kg]', 'data[3][Section706][total_price]'),
(29, 5, 'Ghee', 'data[4][Section706][amount]', 'data[4][Section706][unit]', 'data[4][Section706][gift_own_use]', 'data[4][Section706][sale_and_exchange]', 'data[4][Section706][price_per_kg]', 'data[4][Section706][total_price]'),
(30, 5, 'Egg', 'data[5][Section706][amount]', 'data[5][Section706][unit]', 'data[5][Section706][gift_own_use]', 'data[5][Section706][sale_and_exchange]', 'data[5][Section706][price_per_kg]', 'data[5][Section706][total_price]'),
(31, 5, 'Skin', 'data[6][Section706][amount]', 'data[6][Section706][unit]', 'data[6][Section706][gift_own_use]', 'data[6][Section706][sale_and_exchange]', 'data[6][Section706][price_per_kg]', 'data[6][Section706][total_price]'),
(32, 5, 'Organic fertilizer', 'data[7][Section706][amount]', 'data[7][Section706][unit]', 'data[7][Section706][gift_own_use]', 'data[7][Section706][sale_and_exchange]', 'data[7][Section706][price_per_kg]', 'data[7][Section706][total_price]'),
(33, 5, 'Others______', 'data[8][Section706][amount]', 'data[8][Section706][unit]', 'data[8][Section706][gift_own_use]', 'data[8][Section706][sale_and_exchange]', 'data[8][Section706][price_per_kg]', 'data[8][Section706][total_price]');

-- --------------------------------------------------------

--
-- Table structure for table `section_707`
--

CREATE TABLE IF NOT EXISTS `section_707` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `purchased_value_unit` varchar(100) NOT NULL,
  `total_purchased_value` varchar(100) NOT NULL,
  `areas_expenditure` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_707`
--

INSERT INTO `section_707` (`id`, `interview_id`, `unit`, `amount`, `purchased_value_unit`, `total_purchased_value`, `areas_expenditure`) VALUES
(1, 5, '2', '5698', 'hfghfgh', 'fghfgh', 'Livestock feed'),
(2, 5, '', '', '', '', 'Price for using pasture (If any)'),
(3, 5, '', '', '', '', 'Vaccination, medicine and miscellaneous expenses '),
(4, 5, '', '', '', '', 'Construction and maintenance of animal housing'),
(5, 5, 'eee', 'rrr', 'ttt', 'yy', 'Labour employment if necessary'),
(6, 5, 'yy', 'uu', 'ii', '333', 'test3'),
(7, 5, '', '', '', '', 'your name');

-- --------------------------------------------------------

--
-- Table structure for table `section_708`
--

CREATE TABLE IF NOT EXISTS `section_708` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `type_of_fish` varchar(100) DEFAULT NULL,
  `place_collection` varchar(100) DEFAULT NULL,
  `others_place_collection` varchar(100) DEFAULT NULL,
  `total_collection` varchar(100) DEFAULT NULL,
  `gift_own_use` varchar(100) DEFAULT NULL,
  `sale_and_exchange` varchar(100) DEFAULT NULL,
  `price_per_kg` varchar(100) DEFAULT NULL,
  `total_price` varchar(100) DEFAULT NULL,
  `expenses` varchar(100) DEFAULT NULL,
  `total_earnings` varchar(100) DEFAULT NULL,
  `yes_no_ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_708`
--

INSERT INTO `section_708` (`id`, `interview_id`, `type_of_fish`, `place_collection`, `others_place_collection`, `total_collection`, `gift_own_use`, `sale_and_exchange`, `price_per_kg`, `total_price`, `expenses`, `total_earnings`, `yes_no_ans`) VALUES
(25, 5, 'Bhetki', '01', 'data[0][Section708][others_place_collection]', 'dhaka', 'data[0][Section708][gift_own_use]', 'data[0][Section708][sale_and_exchange]', 'data[0][Section708][price_per_kg]', 'data[0][Section708][total_price]', 'data[0][Section708][expenses]', 'data[0][Section708][total_earnings]', '1'),
(26, 5, 'Paissa/ Faissa', '01', 'data[1][Section708][others_place_collection]', 'data[1][Section708][total_collection]', 'data[1][Section708][gift_own_use]', 'data[1][Section708][sale_and_exchange]', 'data[1][Section708][price_per_kg]', 'data[1][Section708][total_price]', 'data[1][Section708][expenses]', 'data[1][Section708][total_earnings]', '1'),
(27, 5, 'Tengra', '01', 'data[2][Section708][others_place_collection]', 'data[2][Section708][total_collection]', 'data[2][Section708][gift_own_use]', 'data[2][Section708][sale_and_exchange]', 'data[2][Section708][price_per_kg]', 'data[2][Section708][total_price]', 'data[2][Section708][expenses]', 'data[2][Section708][total_earnings]', '1'),
(28, 5, 'Shrimp', '01', 'data[3][Section708][others_place_collection]', 'data[3][Section708][total_collection]', 'data[3][Section708][gift_own_use]', 'data[3][Section708][sale_and_exchange]', 'data[3][Section708][price_per_kg]', 'data[3][Section708][total_price]', 'data[3][Section708][expenses]', 'data[3][Section708][total_earnings]', '1'),
(29, 5, 'Coral', '01', 'data[4][Section708][others_place_collection]', 'data[4][Section708][total_collection]', 'data[4][Section708][gift_own_use]', 'data[4][Section708][sale_and_exchange]', 'data[4][Section708][price_per_kg]', 'data[4][Section708][total_price]', 'data[4][Section708][expenses]', 'data[4][Section708][total_earnings]', '1'),
(30, 5, 'Kaing', '01', 'data[5][Section708][others_place_collection]', 'data[5][Section708][total_collection]', 'data[5][Section708][gift_own_use]', 'data[5][Section708][sale_and_exchange]', 'data[5][Section708][price_per_kg]', 'data[5][Section708][total_price]', 'data[5][Section708][expenses]', 'data[5][Section708][total_earnings]', '1'),
(31, 5, 'Rupchanda', '01', 'data[6][Section708][others_place_collection]', 'data[6][Section708][total_collection]', 'data[6][Section708][gift_own_use]', 'data[6][Section708][sale_and_exchange]', 'data[6][Section708][price_per_kg]', 'data[6][Section708][total_price]', 'data[6][Section708][expenses]', 'data[6][Section708][total_earnings]', '1'),
(32, 5, 'Crab', '01', 'data[7][Section708][others_place_collection]', 'data[7][Section708][total_collection]', 'data[7][Section708][gift_own_use]', 'data[7][Section708][sale_and_exchange]', 'data[7][Section708][price_per_kg]', 'data[7][Section708][total_price]', 'data[7][Section708][expenses]', 'data[7][Section708][total_earnings]', '1'),
(33, 5, 'Rui', '01', 'data[8][Section708][others_place_collection]', 'data[8][Section708][total_collection]', 'data[8][Section708][gift_own_use]', 'data[8][Section708][sale_and_exchange]', 'data[8][Section708][price_per_kg]', 'data[8][Section708][total_price]', 'data[8][Section708][expenses]', 'data[8][Section708][total_earnings]', '1'),
(34, 5, 'Katla', '01', 'data[9][Section708][others_place_collection]', 'data[9][Section708][total_collection]', 'data[9][Section708][gift_own_use]', 'data[9][Section708][sale_and_exchange]', 'data[9][Section708][price_per_kg]', 'data[9][Section708][total_price]', 'data[9][Section708][expenses]', 'data[9][Section708][total_earnings]', '1'),
(35, 5, 'Boal', '01', 'data[10][Section708][others_place_collection]', 'data[10][Section708][total_collection]', 'data[10][Section708][gift_own_use]', 'data[10][Section708][sale_and_exchange]', 'data[10][Section708][price_per_kg]', 'data[10][Section708][total_price]', 'data[10][Section708][expenses]', 'data[10][Section708][total_earnings]', '1'),
(36, 5, 'Kali Baush', '99', 'data[11][Section708][others_place_collection]', 'data[11][Section708][total_collection]', 'data[11][Section708][gift_own_use]', 'data[11][Section708][sale_and_exchange]', 'data[11][Section708][price_per_kg]', 'data[11][Section708][total_price]', 'data[11][Section708][expenses]', 'data[11][Section708][total_earnings]', '1'),
(37, 5, 'Chitol', '01', 'data[12][Section708][others_place_collection]', 'data[12][Section708][total_collection]', 'data[12][Section708][gift_own_use]', 'data[12][Section708][sale_and_exchange]', 'data[12][Section708][price_per_kg]', 'data[12][Section708][total_price]', 'data[12][Section708][expenses]', 'data[12][Section708][total_earnings]', '1'),
(38, 5, 'Aiyr', '01', 'data[13][Section708][others_place_collection]', 'data[13][Section708][total_collection]', 'data[13][Section708][gift_own_use]', 'data[13][Section708][sale_and_exchange]', 'data[13][Section708][price_per_kg]', 'data[13][Section708][total_price]', 'data[13][Section708][expenses]', 'data[13][Section708][total_earnings]', '1'),
(39, 5, 'Foli', '01', 'data[14][Section708][others_place_collection]', 'data[14][Section708][total_collection]', 'data[14][Section708][gift_own_use]', 'data[14][Section708][sale_and_exchange]', 'data[14][Section708][price_per_kg]', 'data[14][Section708][total_price]', 'data[14][Section708][expenses]', 'data[14][Section708][total_earnings]', '1'),
(40, 5, 'Ilish', '01', 'data[15][Section708][others_place_collection]', 'data[15][Section708][total_collection]', 'data[15][Section708][gift_own_use]', 'data[15][Section708][sale_and_exchange]', 'data[15][Section708][price_per_kg]', 'data[15][Section708][total_price]', 'data[15][Section708][expenses]', 'data[15][Section708][total_earnings]', '1'),
(41, 5, 'Pabda', '01', 'data[16][Section708][others_place_collection]', 'data[16][Section708][total_collection]', 'data[16][Section708][gift_own_use]', 'data[16][Section708][sale_and_exchange]', 'data[16][Section708][price_per_kg]', 'data[16][Section708][total_price]', 'data[16][Section708][expenses]', 'data[16][Section708][total_earnings]', '1'),
(42, 5, 'Poa', '01', 'data[17][Section708][others_place_collection]', 'data[17][Section708][total_collection]', 'data[17][Section708][gift_own_use]', 'data[17][Section708][sale_and_exchange]', 'data[17][Section708][price_per_kg]', 'data[17][Section708][total_price]', 'data[17][Section708][expenses]', 'data[17][Section708][total_earnings]', '1'),
(43, 5, 'Ritha', '01', 'data[18][Section708][others_place_collection]', 'data[18][Section708][total_collection]', 'data[18][Section708][gift_own_use]', 'data[18][Section708][sale_and_exchange]', 'data[18][Section708][price_per_kg]', 'data[18][Section708][total_price]', 'data[18][Section708][expenses]', 'data[18][Section708][total_earnings]', '1'),
(44, 5, 'data[19][Section708][type_of_fish]', '01', 'data[19][Section708][others_place_collection]', 'data[19][Section708][total_collection]', 'data[19][Section708][gift_own_use]', 'data[19][Section708][sale_and_exchange]', 'data[19][Section708][price_per_kg]', 'data[19][Section708][total_price]', 'data[19][Section708][expenses]', 'data[19][Section708][total_earnings]', '1'),
(45, 5, 'data[20][Section708][type_of_fish]', '01', 'data[20][Section708][others_place_collection]', 'data[20][Section708][total_collection]', 'data[20][Section708][gift_own_use]', 'data[20][Section708][sale_and_exchange]', 'data[20][Section708][price_per_kg]', 'data[20][Section708][total_price]', 'data[20][Section708][expenses]', 'data[20][Section708][total_earnings]', '1');

-- --------------------------------------------------------

--
-- Table structure for table `section_709`
--

CREATE TABLE IF NOT EXISTS `section_709` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `type_of_fish` varchar(100) DEFAULT NULL,
  `place_collection` varchar(100) DEFAULT NULL,
  `others_place_collection` varchar(100) DEFAULT NULL,
  `total_collection` varchar(100) DEFAULT NULL,
  `gift_own_use` varchar(100) DEFAULT NULL,
  `sale_and_exchange` varchar(100) DEFAULT NULL,
  `price_per_kg` varchar(100) DEFAULT NULL,
  `total_price` varchar(100) DEFAULT NULL,
  `expenses` varchar(100) DEFAULT NULL,
  `total_earnings` varchar(100) DEFAULT NULL,
  `yes_no_ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_709`
--

INSERT INTO `section_709` (`id`, `interview_id`, `type_of_fish`, `place_collection`, `others_place_collection`, `total_collection`, `gift_own_use`, `sale_and_exchange`, `price_per_kg`, `total_price`, `expenses`, `total_earnings`, `yes_no_ans`) VALUES
(1, 5, 'Rui', '99', 'data[0][Section709][others_place_collection]', 'mytest', 'data[0][Section709][gift_own_use]', 'data[0][Section709][sale_and_exchange]', 'data[0][Section709][price_per_kg]', 'data[0][Section709][total_price]', 'data[0][Section709][expenses]', 'data[0][Section709][total_earnings]', '1'),
(2, 5, 'Pangas', '01', 'data[1][Section709][others_place_collection]', 'data[1][Section709][total_collection]', 'data[1][Section709][gift_own_use]', 'data[1][Section709][sale_and_exchange]', 'data[1][Section709][price_per_kg]', 'data[1][Section709][total_price]', 'data[1][Section709][expenses]', 'data[1][Section709][total_earnings]', '1'),
(3, 5, 'Silvercarp/ Grasscarp', '01', 'data[2][Section709][others_place_collection]', 'data[2][Section709][total_collection]', 'data[2][Section709][gift_own_use]', 'data[2][Section709][sale_and_exchange]', 'data[2][Section709][price_per_kg]', 'data[2][Section709][total_price]', 'data[2][Section709][expenses]', 'data[2][Section709][total_earnings]', '1'),
(4, 5, 'Crab', '01', 'data[3][Section709][others_place_collection]', 'data[3][Section709][total_collection]', 'data[3][Section709][gift_own_use]', 'data[3][Section709][sale_and_exchange]', 'data[3][Section709][price_per_kg]', 'data[3][Section709][total_price]', 'data[3][Section709][expenses]', 'data[3][Section709][total_earnings]', '1'),
(5, 5, 'Puti', '01', 'data[4][Section709][others_place_collection]', 'data[4][Section709][total_collection]', 'data[4][Section709][gift_own_use]', 'data[4][Section709][sale_and_exchange]', 'data[4][Section709][price_per_kg]', 'data[4][Section709][total_price]', 'data[4][Section709][expenses]', 'data[4][Section709][total_earnings]', '1'),
(6, 5, 'Shing/Magur', '01', 'data[5][Section709][others_place_collection]', 'data[5][Section709][total_collection]', 'data[5][Section709][gift_own_use]', 'data[5][Section709][sale_and_exchange]', 'data[5][Section709][price_per_kg]', 'data[5][Section709][total_price]', 'data[5][Section709][expenses]', 'data[5][Section709][total_earnings]', '1'),
(7, 5, 'Koi', '01', 'data[6][Section709][others_place_collection]', 'data[6][Section709][total_collection]', 'data[6][Section709][gift_own_use]', 'data[6][Section709][sale_and_exchange]', 'data[6][Section709][price_per_kg]', 'data[6][Section709][total_price]', 'data[6][Section709][expenses]', 'data[6][Section709][total_earnings]', '1'),
(8, 5, 'Baim', '01', 'data[7][Section709][others_place_collection]', 'data[7][Section709][total_collection]', 'data[7][Section709][gift_own_use]', 'data[7][Section709][sale_and_exchange]', 'data[7][Section709][price_per_kg]', 'data[7][Section709][total_price]', 'data[7][Section709][expenses]', 'data[7][Section709][total_earnings]', '1'),
(9, 5, 'Baila', '01', 'data[8][Section709][others_place_collection]', 'data[8][Section709][total_collection]', 'data[8][Section709][gift_own_use]', 'data[8][Section709][sale_and_exchange]', 'data[8][Section709][price_per_kg]', 'data[8][Section709][total_price]', 'data[8][Section709][expenses]', 'data[8][Section709][total_earnings]', '1'),
(10, 5, 'Tengra', '01', 'data[9][Section709][others_place_collection]', 'data[9][Section709][total_collection]', 'data[9][Section709][gift_own_use]', 'data[9][Section709][sale_and_exchange]', 'data[9][Section709][price_per_kg]', 'data[9][Section709][total_price]', 'data[9][Section709][expenses]', 'data[9][Section709][total_earnings]', '1'),
(11, 5, 'Shorputi', '01', 'data[10][Section709][others_place_collection]', 'data[10][Section709][total_collection]', 'data[10][Section709][gift_own_use]', 'data[10][Section709][sale_and_exchange]', 'data[10][Section709][price_per_kg]', 'data[10][Section709][total_price]', 'data[10][Section709][expenses]', 'data[10][Section709][total_earnings]', '1'),
(12, 5, 'Taki', '01', 'data[11][Section709][others_place_collection]', 'data[11][Section709][total_collection]', 'data[11][Section709][gift_own_use]', 'data[11][Section709][sale_and_exchange]', 'data[11][Section709][price_per_kg]', 'data[11][Section709][total_price]', 'data[11][Section709][expenses]', 'data[11][Section709][total_earnings]', '1'),
(13, 5, 'Shol', '01', 'data[12][Section709][others_place_collection]', 'data[12][Section709][total_collection]', 'data[12][Section709][gift_own_use]', 'data[12][Section709][sale_and_exchange]', 'data[12][Section709][price_per_kg]', 'data[12][Section709][total_price]', 'data[12][Section709][expenses]', 'data[12][Section709][total_earnings]', '1'),
(14, 5, 'Gojar', '01', 'data[13][Section709][others_place_collection]', 'data[13][Section709][total_collection]', 'data[13][Section709][gift_own_use]', 'data[13][Section709][sale_and_exchange]', 'data[13][Section709][price_per_kg]', 'data[13][Section709][total_price]', 'data[13][Section709][expenses]', 'data[13][Section709][total_earnings]', '1'),
(15, 5, 'Katla', '01', 'data[14][Section709][others_place_collection]', 'data[14][Section709][total_collection]', 'data[14][Section709][gift_own_use]', 'data[14][Section709][sale_and_exchange]', 'data[14][Section709][price_per_kg]', 'data[14][Section709][total_price]', 'data[14][Section709][expenses]', 'data[14][Section709][total_earnings]', '1'),
(16, 5, 'Nilotica', '01', 'data[15][Section709][others_place_collection]', 'data[15][Section709][total_collection]', 'data[15][Section709][gift_own_use]', 'data[15][Section709][sale_and_exchange]', 'data[15][Section709][price_per_kg]', 'data[15][Section709][total_price]', 'data[15][Section709][expenses]', 'data[15][Section709][total_earnings]', '1'),
(17, 5, 'Telapia', '01', 'data[16][Section709][others_place_collection]', 'data[16][Section709][total_collection]', 'data[16][Section709][gift_own_use]', 'data[16][Section709][sale_and_exchange]', 'data[16][Section709][price_per_kg]', 'data[16][Section709][total_price]', 'data[16][Section709][expenses]', 'data[16][Section709][total_earnings]', '1'),
(18, 5, 'Mrigel', '02', 'data[17][Section709][others_place_collection]', 'data[17][Section709][total_collection]', 'data[17][Section709][gift_own_use]', 'data[17][Section709][sale_and_exchange]', 'data[17][Section709][price_per_kg]', 'data[17][Section709][total_price]', 'data[17][Section709][expenses]', 'data[17][Section709][total_earnings]', '1'),
(19, 5, 'Kachki', '99', 'test', 'data[18][Section709][total_collection]', 'data[18][Section709][gift_own_use]', 'data[18][Section709][sale_and_exchange]', 'data[18][Section709][price_per_kg]', 'data[18][Section709][total_price]', 'data[18][Section709][expenses]', 'data[18][Section709][total_earnings]', '1'),
(20, 5, 'our test', '01', 'data[19][Section709][others_place_collection]', 'data[19][Section709][total_collection]', 'data[19][Section709][gift_own_use]', 'data[19][Section709][sale_and_exchange]', 'data[19][Section709][price_per_kg]', 'data[19][Section709][total_price]', 'data[19][Section709][expenses]', 'data[19][Section709][total_earnings]', '1'),
(21, 5, 'data[20][Section709][type_of_fish]', '01', 'data[20][Section709][others_place_collection]', 'data[20][Section709][total_collection]', 'data[20][Section709][gift_own_use]', 'data[20][Section709][sale_and_exchange]', 'data[20][Section709][price_per_kg]', 'data[20][Section709][total_price]', 'data[20][Section709][expenses]', 'data[20][Section709][total_earnings]', '1'),
(22, 5, 'data[21][Section709][type_of_fish]', '02', 'data[21][Section709][others_place_collection]', 'data[21][Section709][total_collection]', 'data[21][Section709][gift_own_use]', 'data[21][Section709][sale_and_exchange]', 'data[21][Section709][price_per_kg]', 'data[21][Section709][total_price]', 'data[21][Section709][expenses]', 'data[21][Section709][total_earnings]', '1'),
(23, 5, 'data[22][Section709][type_of_fish]', '01', 'data[22][Section709][others_place_collection]', 'data[22][Section709][total_collection]', 'data[22][Section709][gift_own_use]', 'data[22][Section709][sale_and_exchange]', 'data[22][Section709][price_per_kg]', 'data[22][Section709][total_price]', 'data[22][Section709][expenses]', 'data[22][Section709][total_earnings]', '1'),
(24, 5, 'data[23][Section709][type_of_fish]', '01', 'data[23][Section709][others_place_collection]', 'data[23][Section709][total_collection]', 'data[23][Section709][gift_own_use]', 'data[23][Section709][sale_and_exchange]', 'data[23][Section709][price_per_kg]', 'data[23][Section709][total_price]', 'data[23][Section709][expenses]', 'data[23][Section709][total_earnings]', '1');

-- --------------------------------------------------------

--
-- Table structure for table `section_710`
--

CREATE TABLE IF NOT EXISTS `section_710` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `type_of_game` varchar(100) DEFAULT NULL,
  `place_hunting` varchar(100) DEFAULT NULL,
  `others_place_hunting` varchar(100) DEFAULT NULL,
  `total_collection` varchar(100) DEFAULT NULL,
  `gift_own_use` varchar(100) DEFAULT NULL,
  `sale_and_exchange` varchar(100) DEFAULT NULL,
  `price_per_kg` varchar(100) DEFAULT NULL,
  `total_price` varchar(100) DEFAULT NULL,
  `expenses` varchar(100) DEFAULT NULL,
  `total_earnings` varchar(100) DEFAULT NULL,
  `yes_no_ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_710`
--

INSERT INTO `section_710` (`id`, `interview_id`, `type_of_game`, `place_hunting`, `others_place_hunting`, `total_collection`, `gift_own_use`, `sale_and_exchange`, `price_per_kg`, `total_price`, `expenses`, `total_earnings`, `yes_no_ans`) VALUES
(1, 5, 'Fowl', '01', 'data[0][Section710][others_place_hunting]', 'data[0][Section710][total_collection]', 'data[0][Section710][gift_own_use]', 'data[0][Section710][sale_and_exchange]', 'bangladesh', 'data[0][Section710][total_price]', 'data[0][Section710][expenses]', 'data[0][Section710][total_earnings]', '0'),
(2, 5, 'Rabbit', '01', 'data[1][Section710][others_place_hunting]', 'data[1][Section710][total_collection]', 'data[1][Section710][gift_own_use]', 'data[1][Section710][sale_and_exchange]', 'data[1][Section710][price_per_kg]', 'data[1][Section710][total_price]', 'data[1][Section710][expenses]', 'data[1][Section710][total_earnings]', '0'),
(3, 5, 'Wild boar', '01', 'data[2][Section710][others_place_hunting]', 'data[2][Section710][total_collection]', 'data[2][Section710][gift_own_use]', 'data[2][Section710][sale_and_exchange]', 'data[2][Section710][price_per_kg]', 'data[2][Section710][total_price]', 'data[2][Section710][expenses]', 'data[2][Section710][total_earnings]', '0'),
(4, 5, 'Snakes', '01', 'data[3][Section710][others_place_hunting]', 'data[3][Section710][total_collection]', 'data[3][Section710][gift_own_use]', 'data[3][Section710][sale_and_exchange]', 'data[3][Section710][price_per_kg]', 'data[3][Section710][total_price]', 'data[3][Section710][expenses]', 'data[3][Section710][total_earnings]', '0'),
(5, 5, 'Birds', '01', 'data[4][Section710][others_place_hunting]', 'data[4][Section710][total_collection]', 'data[4][Section710][gift_own_use]', 'data[4][Section710][sale_and_exchange]', 'data[4][Section710][price_per_kg]', 'data[4][Section710][total_price]', 'data[4][Section710][expenses]', 'data[4][Section710][total_earnings]', '0'),
(6, 5, 'Rats', '01', 'data[5][Section710][others_place_hunting]', 'data[5][Section710][total_collection]', 'data[5][Section710][gift_own_use]', 'data[5][Section710][sale_and_exchange]', 'data[5][Section710][price_per_kg]', 'data[5][Section710][total_price]', 'data[5][Section710][expenses]', 'data[5][Section710][total_earnings]', '0'),
(7, 5, 'Gaur/Goyal', '01', 'data[6][Section710][others_place_hunting]', 'data[6][Section710][total_collection]', 'data[6][Section710][gift_own_use]', 'data[6][Section710][sale_and_exchange]', 'data[6][Section710][price_per_kg]', 'data[6][Section710][total_price]', 'data[6][Section710][expenses]', 'data[6][Section710][total_earnings]', '0'),
(8, 5, 'data[7][Section710][type_of_game]', '01', 'data[7][Section710][others_place_hunting]', 'data[7][Section710][total_collection]', 'data[7][Section710][gift_own_use]', 'data[7][Section710][sale_and_exchange]', 'data[7][Section710][price_per_kg]', 'data[7][Section710][total_price]', 'data[7][Section710][expenses]', 'data[7][Section710][total_earnings]', '0'),
(9, 5, 'data[8][Section710][type_of_game]', '01', 'data[8][Section710][others_place_hunting]', 'data[8][Section710][total_collection]', 'data[8][Section710][gift_own_use]', 'data[8][Section710][sale_and_exchange]', 'data[8][Section710][price_per_kg]', 'data[8][Section710][total_price]', 'data[8][Section710][expenses]', 'data[8][Section710][total_earnings]', '0'),
(10, 5, 'data[9][Section710][type_of_game]', '01', 'data[9][Section710][others_place_hunting]', 'data[9][Section710][total_collection]', 'data[9][Section710][gift_own_use]', 'data[9][Section710][sale_and_exchange]', 'data[9][Section710][price_per_kg]', 'data[9][Section710][total_price]', 'data[9][Section710][expenses]', 'data[9][Section710][total_earnings]', '0'),
(11, 5, 'data[10][Section710][type_of_game]', '01', 'data[10][Section710][others_place_hunting]', 'data[10][Section710][total_collection]', 'data[10][Section710][gift_own_use]', 'data[10][Section710][sale_and_exchange]', 'data[10][Section710][price_per_kg]', 'data[10][Section710][total_price]', 'data[10][Section710][expenses]', 'data[10][Section710][total_earnings]', '0'),
(12, 5, 'data[11][Section710][type_of_game]', '01', 'data[11][Section710][others_place_hunting]', 'data[11][Section710][total_collection]', 'data[11][Section710][gift_own_use]', 'data[11][Section710][sale_and_exchange]', 'data[11][Section710][price_per_kg]', 'data[11][Section710][total_price]', 'data[11][Section710][expenses]', 'data[11][Section710][total_earnings]', '0');

-- --------------------------------------------------------

--
-- Table structure for table `section_g_a`
--

CREATE TABLE IF NOT EXISTS `section_g_a` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `type_of_land` varchar(100) DEFAULT NULL,
  `amount_owned_land` int(11) DEFAULT NULL,
  `amount_land_cultivation` int(11) DEFAULT NULL,
  `main_crop` varchar(100) DEFAULT NULL,
  `second_main_crop` varchar(100) DEFAULT NULL,
  `other_crops` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_g_a`
--

INSERT INTO `section_g_a` (`id`, `interview_id`, `type_of_land`, `amount_owned_land`, `amount_land_cultivation`, `main_crop`, `second_main_crop`, `other_crops`) VALUES
(1, 5, '1. Agricultural land', 0, 0, 'data[Section_GA_Upper_Marker][0][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][0][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][0][SectionGA][other_crops]'),
(2, 5, '2. Domestic land (Homestead and yard)', 0, 0, 'data[Section_GA_Upper_Marker][1][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][1][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][1][SectionGA][other_crops]'),
(3, 5, '3. Horticultural land near the household', 500, 300, 'Main Crop ', 'Second main crop', 'Other Crops'),
(4, 5, '4. Herding pasture', 0, 0, 'data[Section_GA_Upper_Marker][3][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][3][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][3][SectionGA][other_crops]'),
(5, 5, '5. Agricultural forest', 800, 900, 'fggf', 'fgfdg', 'fgfd'),
(6, 5, '6. Fallow land', 0, 0, 'data[Section_GA_Upper_Marker][5][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][5][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][5][SectionGA][other_crops]'),
(7, 5, '7. Other Khas land (C.P.R- Common property)', 0, 0, 'data[Section_GA_Upper_Marker][6][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][6][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][6][SectionGA][other_crops]'),
(8, 5, 'Land given for sharecropping (Including 1-6)', NULL, NULL, '', '', ''),
(9, 5, 'Land taken for sharecropping (Excluding 1-6)', NULL, NULL, '', '', ''),
(10, 5, 'Land mortgaged (Including 1-6)', NULL, NULL, '', '', ''),
(11, 5, 'Land taken on mortgage (Including 1-6)', NULL, NULL, '', '', ''),
(12, 5, 'Land leased (Including 1-6)', 856, 555, 'gdfgfdg', 'dgfdg', 'fgfdg'),
(13, 5, 'Land taken on lease (Excluding 1-6)', NULL, NULL, '', '', ''),
(14, 5, 'Land given for sharecropping (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][7][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][other_crops]'),
(15, 5, 'Land taken for sharecropping (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][8][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][other_crops]'),
(16, 5, 'Land mortgaged (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][9][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][other_crops]'),
(17, 5, 'Land taken on mortgage (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][10][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][other_crops]'),
(18, 5, 'Land leased (Including 1-6)', 856, 555, 'gdfgfdg', 'dgfdg', 'fgfdg'),
(19, 5, 'Land taken on lease (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][12][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][other_crops]'),
(20, 5, 'Land given for sharecropping (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][7][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][other_crops]'),
(21, 5, 'Land taken for sharecropping (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][8][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][other_crops]'),
(22, 5, 'Land mortgaged (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][9][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][other_crops]'),
(23, 5, 'Land taken on mortgage (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][10][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][other_crops]'),
(24, 5, 'Land leased (Including 1-6)', 856, 555, 'gdfgfdg', 'dgfdg', 'fgfdg'),
(25, 5, 'Land taken on lease (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][12][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][other_crops]'),
(26, 5, 'Land given for sharecropping (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][7][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][other_crops]'),
(27, 5, 'Land taken for sharecropping (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][8][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][other_crops]'),
(28, 5, 'Land mortgaged (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][9][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][other_crops]'),
(29, 5, 'Land taken on mortgage (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][10][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][other_crops]'),
(30, 5, 'Land leased (Including 1-6)', 856, 555, 'gdfgfdg', 'dgfdg', 'fgfdg'),
(31, 5, 'Land taken on lease (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][12][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][other_crops]'),
(32, 5, 'Land given for sharecropping (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][7][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][other_crops]'),
(33, 5, 'Land taken for sharecropping (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][8][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][other_crops]'),
(34, 5, 'Land mortgaged (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][9][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][other_crops]'),
(35, 5, 'Land taken on mortgage (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][10][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][other_crops]'),
(36, 5, 'Land leased (Including 1-6)', 856, 555, 'gdfgfdg', 'dgfdg', 'fgfdg'),
(37, 5, 'Land taken on lease (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][12][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][other_crops]'),
(38, 5, 'Land given for sharecropping (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][7][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][other_crops]'),
(39, 5, 'Land taken for sharecropping (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][8][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][other_crops]'),
(40, 5, 'Land mortgaged (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][9][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][other_crops]'),
(41, 5, 'Land taken on mortgage (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][10][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][other_crops]'),
(42, 5, 'Land leased (Including 1-6)', 856, 555, 'gdfgfdg', 'dgfdg', 'fgfdg'),
(43, 5, 'Land taken on lease (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][12][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][other_crops]'),
(44, 5, 'Land given for sharecropping (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][7][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][7][SectionGA][other_crops]'),
(45, 5, 'Land taken for sharecropping (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][8][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][8][SectionGA][other_crops]'),
(46, 5, 'Land mortgaged (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][9][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][9][SectionGA][other_crops]'),
(47, 5, 'Land taken on mortgage (Including 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][10][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][10][SectionGA][other_crops]'),
(48, 5, 'Land leased (Including 1-6)', 856, 555, 'gdfgfdg', 'dgfdg', 'fgfdg'),
(49, 5, 'Land taken on lease (Excluding 1-6)', 0, 0, 'data[Section_GA_Upper_Marker][12][SectionGA][main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][second_main_crop]', 'data[Section_GA_Upper_Marker][12][SectionGA][other_crops]');

-- --------------------------------------------------------

--
-- Table structure for table `section_h`
--

CREATE TABLE IF NOT EXISTS `section_h` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_h`
--

INSERT INTO `section_h` (`id`, `interview_id`, `question`, `answer`) VALUES
(1, 5, 'Agriculture (self-owned and share-cropped)', 'Agriculture (self-owned and share-cropped)'),
(2, 5, 'Poultry and livestock', ''),
(3, 5, 'Fish cultivation', ''),
(4, 5, 'Tree selling', ''),
(5, 5, 'Job (including bonus)', ''),
(6, 5, 'Business', ''),
(7, 5, 'Labour', ''),
(8, 5, 'Rickshaw/van pulling', 'Rickshaw/van pulling'),
(9, 5, 'House/shop Rent', ''),
(10, 5, 'Remittance', ''),
(11, 5, 'Scholarship/Tuition', ''),
(12, 5, 'Support/allowance/relief/ VGD/ VGF card', ''),
(13, 5, 'Handicrafts', 'Handicrafts'),
(14, 5, 'Others (please mention the details)', ''),
(15, 5, 'Others (please mention the details)', ''),
(16, 5, 'Gross Annual Income:', ''),
(17, 5, 'Expenditure', ''),
(18, 5, 'Agriculture (crop production,livestock and poutry, fish etc.)', 'Agriculture (crop production,livestock and poutry, fish etc.)'),
(19, 5, 'Non agriculture sector (investment in business and other expenditure)', ''),
(20, 5, 'Food', ''),
(21, 5, 'Dress', ''),
(22, 5, 'Building /repairing house', 'Building /repairing house 908'),
(23, 5, 'House/ land rent', ''),
(24, 5, 'Education', ''),
(25, 5, 'Health/treatment', ''),
(26, 5, 'Entertainment', ''),
(27, 5, 'Conveyance', ''),
(28, 5, 'Electricity/Water/Gas', 'Electricity/Water/Gas 	'),
(29, 5, 'Kerosene', ''),
(30, 5, 'Other FuelExpences', ''),
(31, 5, 'Other regular payable bills', ''),
(32, 5, 'Loan repayment', ''),
(33, 5, 'Others', ''),
(34, 5, 'Total Expenditure', ''),
(35, 5, 'Total annual expenditure', 'Total annual expenditure 	'),
(36, 5, 'Gross Annual Income:', ''),
(37, 5, 'Total annual expenditure', 'Total annual expenditure 	999'),
(38, 5, 'Gross Annual Income:', ''),
(39, 5, 'Total annual expenditure', 'Total annual expenditure 	99'),
(40, 5, 'Gross Annual Income:', ''),
(41, 5, 'Total annual expenditure', 'Total annual expenditure 	'),
(42, 5, 'Gross Annual Income:', ''),
(43, 5, 'Total annual expenditure', 'Total annual expenditure 	'),
(44, 5, 'Gross Annual Income:', ''),
(45, 5, 'Total annual expenditure', 'Total annual expenditure 	 90'),
(46, 5, 'Gross Annual Income:', 'Gross Annual Income: '),
(47, 5, 'Total annual expenditure', 'Total annual expenditure 	'),
(48, 5, 'Gross Annual Income:', ''),
(49, 5, 'Total annual expenditure', 'Total annual expenditure 	90');

-- --------------------------------------------------------

--
-- Table structure for table `section_i_food_consumption`
--

CREATE TABLE IF NOT EXISTS `section_i_food_consumption` (
  `id` int(11) NOT NULL,
  `how_many_days` int(11) DEFAULT NULL,
  `interview_id` int(11) DEFAULT NULL,
  `food_items_name` varchar(100) DEFAULT NULL,
  `primary_source` varchar(100) DEFAULT NULL,
  `secondary_source` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `purchase_price` int(11) DEFAULT NULL,
  `reason_of_proverty_other` varchar(100) DEFAULT NULL,
  `type_of_coping` varchar(100) DEFAULT NULL,
  `reason_of_proverty` varchar(100) DEFAULT NULL,
  `coping` varchar(100) DEFAULT NULL,
  `other_primary_source` varchar(100) DEFAULT NULL,
  `other_secondary_source` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_i_food_consumption`
--

INSERT INTO `section_i_food_consumption` (`id`, `how_many_days`, `interview_id`, `food_items_name`, `primary_source`, `secondary_source`, `amount`, `purchase_price`, `reason_of_proverty_other`, `type_of_coping`, `reason_of_proverty`, `coping`, `other_primary_source`, `other_secondary_source`) VALUES
(1, 6, 5, 'Rice', '01', '01', 100, 500, '', '', '', '', 'fgdfg', 'dfgdfg'),
(2, 5, 5, 'Bread/ Wheat', '01', '01', 300, 600, '', '', '', '', '', ''),
(3, NULL, 5, 'Potato/ Sweet potato', '01', '01', NULL, NULL, '', '', '', '', '', ''),
(4, NULL, 5, 'Groundnuts/ Pulses', '01', '01', NULL, NULL, '', '', '', '', '', ''),
(5, NULL, 5, 'Fish', '01', '01', NULL, NULL, '', '', '', '', '', ''),
(6, NULL, 5, 'Meat- sheep/goat/beef/ poultry', '01', '01', NULL, NULL, '', '', '', '', '', ''),
(7, NULL, 5, 'Eggs', '01', '01', NULL, NULL, '', '', '', '', '', ''),
(8, NULL, 5, 'Milk and dairy products', '01', '01', NULL, NULL, '', '', '', '', '', ''),
(9, NULL, 5, 'Oil, fats and butter', '01', '01', NULL, NULL, '', '', '', '', '', ''),
(10, NULL, 5, 'Vegetables', '01', '01', NULL, NULL, '', '', '', '', '', ''),
(11, NULL, 5, 'Fruits', '01', '01', NULL, NULL, '', '', '', '', '', ''),
(12, NULL, 5, 'Sweets, sugar', '01', '01', NULL, NULL, '', '', '', '', '', ''),
(13, NULL, 5, 'Others (Please specify) ____________', '01', '01', NULL, NULL, '', '', '', '', '', ''),
(14, NULL, 5, 'Others (Please specify)____________', '01', '01', NULL, NULL, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `section_j`
--

CREATE TABLE IF NOT EXISTS `section_j` (
  `id` int(11) NOT NULL,
  `track_row_id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `hh_id` int(11) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `month` varchar(100) DEFAULT NULL,
  `type_of_ailments` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `receive_treatment` varchar(100) DEFAULT NULL,
  `where_receive_treatment` varchar(100) DEFAULT NULL,
  `not_taking_treatment` varchar(100) DEFAULT NULL,
  `1001_ans` varchar(100) DEFAULT NULL,
  `other_answer_treatment` varchar(100) DEFAULT NULL,
  `other_answer_not_taking_treatment` varchar(100) DEFAULT NULL,
  `ailments_others` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_j`
--

INSERT INTO `section_j` (`id`, `track_row_id`, `interview_id`, `hh_id`, `sex`, `year`, `month`, `type_of_ailments`, `duration`, `receive_treatment`, `where_receive_treatment`, `not_taking_treatment`, `1001_ans`, `other_answer_treatment`, `other_answer_not_taking_treatment`, `ailments_others`) VALUES
(1, 0, 5, 3, '0', '4', '5', '99', '44', '02', '99', '99', '01', '54545', 'rterte', 'gfdfgdfgdf'),
(2, 1, 5, 0, '1', '7676', '566', '04', '4545', '02', '03', '02', '01', '', '', ''),
(3, 2, 5, NULL, '0', '', '', '01', '', '01', '01', '01', '01', '', '', ''),
(4, 3, 5, NULL, '0', '', '', '01', '', '01', '01', '01', '01', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `section_question_answer_cultural`
--

CREATE TABLE IF NOT EXISTS `section_question_answer_cultural` (
  `id` int(11) NOT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=172 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_question_answer_cultural`
--

INSERT INTO `section_question_answer_cultural` (`id`, `personnel_information_id`, `question`, `answer`) VALUES
(27, 0, 'What is your name?', ''),
(28, 0, 'How long ago was this household formed (seedefinition of household)?', ''),
(29, 0, 'How long have you been living continuously in this para/ village?', ''),
(30, 0, 'To which ethnic group do you belong?', ''),
(31, 0, 'What is your religion?', ''),
(32, 0, 'In what month and year were you born?', ''),
(33, 0, 'How old were you at your last birthday?', ''),
(34, 0, 'Where were you born?', ''),
(35, 0, 'Where did your parents live?', ''),
(36, 0, 'How many times have you shifted/ relocated/migrated your residence since the place you were born?', ''),
(37, 0, 'If they had lived elsewhere then reasons of migration?', ''),
(38, 0, 'If they had lived elsewhere then reasons of migration?', ''),
(39, 0, 'What is the highest level of school you attended?', ''),
(40, 0, 'What is your occupation, that is, what kind of work do you mainly do?', ''),
(41, 0, 'Location of the house of the respondent', ''),
(42, 0, 'Type of ownership of the house', ''),
(43, 0, 'What is the roof of the main house made up of? (Please circle the specific code after observation)', ''),
(44, 0, 'What is the wall of the main house made up of? (Please circle the specific code after observation', ''),
(45, 0, 'What is the floor of the main house made up of? (Please circle the specific code after observation)', ''),
(46, 0, 'How many houses/rooms are there in the household', ''),
(47, 0, 'What is your name?', ''),
(48, 0, 'How long ago was this household formed (seedefinition of household)?', ''),
(49, 0, 'How long have you been living continuously in this para/ village?', ''),
(50, 0, 'To which ethnic group do you belong?', ''),
(51, 0, 'What is your religion?', ''),
(52, 0, 'In what month and year were you born?', ''),
(53, 0, 'How old were you at your last birthday?', ''),
(54, 0, 'Where were you born?', ''),
(55, 0, 'Where did your parents live?', ''),
(56, 0, 'How many times have you shifted/ relocated/migrated your residence since the place you were born?', ''),
(57, 0, 'If they had lived elsewhere then reasons of migration?', ''),
(58, 0, 'If they had lived elsewhere then reasons of migration?', ''),
(59, 0, 'What is the highest level of school you attended?', ''),
(60, 0, 'What is your occupation, that is, what kind of work do you mainly do?', ''),
(61, 0, 'Location of the house of the respondent', ''),
(62, 0, 'Type of ownership of the house', ''),
(63, 0, 'What is the roof of the main house made up of? (Please circle the specific code after observation)', ''),
(64, 0, 'What is the wall of the main house made up of? (Please circle the specific code after observation', ''),
(65, 0, 'What is the floor of the main house made up of? (Please circle the specific code after observation)', ''),
(66, 0, 'How many houses/rooms are there in the household', ''),
(67, 0, 'What is your name?', ''),
(68, 0, 'How long ago was this household formed (seedefinition of household)?', ''),
(69, 0, 'How long have you been living continuously in this para/ village?', ''),
(70, 0, 'To which ethnic group do you belong?', ''),
(71, 0, 'What is your religion?', ''),
(72, 0, 'In what month and year were you born?', ''),
(73, 0, 'How old were you at your last birthday?', ''),
(74, 0, 'Where were you born?', ''),
(75, 0, 'Where did your parents live?', ''),
(76, 0, 'How many times have you shifted/ relocated/migrated your residence since the place you were born?', ''),
(77, 0, 'If they had lived elsewhere then reasons of migration?', ''),
(78, 0, 'If they had lived elsewhere then reasons of migration?', ''),
(79, 0, 'What is the highest level of school you attended?', ''),
(80, 0, 'What is your occupation, that is, what kind of work do you mainly do?', ''),
(81, 0, 'Location of the house of the respondent', ''),
(82, 0, 'Type of ownership of the house', ''),
(83, 0, 'What is the roof of the main house made up of? (Please circle the specific code after observation)', ''),
(84, 0, 'What is the wall of the main house made up of? (Please circle the specific code after observation', ''),
(85, 0, 'What is the floor of the main house made up of? (Please circle the specific code after observation)', ''),
(86, 0, 'How many houses/rooms are there in the household', ''),
(87, 0, 'What is your name?', 'What is your name?'),
(88, 0, 'How long ago was this household formed (seedefinition of household)?', '01'),
(89, 0, 'How long have you been living continuously in this para/ village?', '02'),
(90, 0, 'To which ethnic group do you belong?', 'To which ethnic group do you belong?'),
(91, 0, 'What is your religion?', 'fgg'),
(92, 0, 'In what month and year were you born?', 'fgfdg'),
(93, 0, 'How old were you at your last birthday?', 'fgdfg'),
(94, 0, 'Where were you born?', 'fdgdf'),
(95, 0, 'Where did your parents live?', 'fgfdg'),
(96, 0, 'How many times have you shifted/ relocated/migrated your residence since the place you were born?', '04'),
(97, 0, 'If they had lived elsewhere then reasons of migration?', '02'),
(98, 0, 'If they had lived elsewhere then reasons of migration?', '01'),
(99, 0, 'What is the highest level of school you attended?', '04'),
(100, 0, 'What is your occupation, that is, what kind of work do you mainly do?', '02'),
(101, 0, 'Location of the house of the respondent', '03'),
(102, 0, 'Type of ownership of the house', '05'),
(103, 0, 'What is the roof of the main house made up of? (Please circle the specific code after observation)', '04'),
(104, 0, 'What is the wall of the main house made up of? (Please circle the specific code after observation', '02'),
(105, 0, 'What is the floor of the main house made up of? (Please circle the specific code after observation)', '05'),
(106, 0, 'How many houses/rooms are there in the household', 'fgfdg');

-- --------------------------------------------------------

--
-- Table structure for table `semi_vowels`
--

CREATE TABLE IF NOT EXISTS `semi_vowels` (
  `id` int(11) NOT NULL,
  `vowels_sign` varchar(100) NOT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `similar_bangla_word` varchar(100) NOT NULL,
  `ipa_word` varchar(100) NOT NULL,
  `meaning` varchar(100) NOT NULL,
  `type_of_vowels` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semi_vowels`
--

INSERT INTO `semi_vowels` (`id`, `vowels_sign`, `personnel_information_id`, `status`, `similar_bangla_word`, `ipa_word`, `meaning`, `type_of_vowels`) VALUES
(1, '0', 19, 1, '', '', '', 'nasalized_vowels'),
(2, '1', 19, 1, '', '', '', 'nasalized_vowels'),
(3, '2', 19, 1, '', '', '', 'nasalized_vowels'),
(4, '3', 19, 1, '', '', '', 'nasalized_vowels'),
(5, '4', 19, 1, '', '', '', 'nasalized_vowels'),
(6, '5', 19, 1, '', '', '', 'nasalized_vowels'),
(7, '6', 19, 1, '', '', '', 'nasalized_vowels'),
(8, '', 19, NULL, '', '', '', ''),
(9, '', 19, NULL, '', '', '', ''),
(10, '', 19, NULL, '', '', '', ''),
(11, 'ai', 19, 0, '', '', '', 'semi_vowels'),
(12, 'ae', 19, 0, '', '', '', 'semi_vowels'),
(13, 'au', 19, 0, '', '', '', 'semi_vowels'),
(14, 'ao', 19, 0, '', '', '', 'semi_vowels'),
(15, '0', 18, 1, '', '', '', 'nasalized_vowels'),
(16, '1', 18, 1, '', '', '', 'nasalized_vowels'),
(17, '2', 18, 1, '', '', '', 'nasalized_vowels'),
(18, '3', 18, 1, '', '', '', 'nasalized_vowels'),
(19, '4', 18, 1, '', '', '', 'nasalized_vowels'),
(20, '5', 18, 1, '', '', '', 'nasalized_vowels'),
(21, '6', 18, 1, '', '', '', 'nasalized_vowels'),
(22, '', 18, NULL, '', '', '', ''),
(23, '', 18, NULL, '', '', '', ''),
(24, '', 18, NULL, '', '', '', ''),
(25, 'ai', 18, 0, 'à¦à¦²à¦¾à¦‡', 'Ã¦laiÌ¯ ', 'à¦à¦–à¦¨', 'semi_vowels'),
(26, 'ae', 18, 0, 'à¦¬à¦¾à¦¯à¦¼', 'bayÌ¯ ', 'à¦¦à¦¿à¦•à§‡', 'semi_vowels'),
(27, 'au', 18, 0, 'à¦—à¦¾à¦‰', 'gauÌ¯ ', 'à¦¶à¦°à§€à¦°', 'semi_vowels'),
(28, 'ao', 18, 0, 'à¦—à¦¾à¦‡à¦®à¦¾à¦“', 'gaimaoÌ¯  ', 'à¦—à¦¾à¦­à§€', 'semi_vowels'),
(29, '0', 18, 1, '', '', '', 'nasalized_vowels'),
(30, '1', 18, 1, '', '', '', 'nasalized_vowels'),
(31, '2', 18, 1, '', '', '', 'nasalized_vowels'),
(32, '3', 18, 1, '', '', '', 'nasalized_vowels'),
(33, '4', 18, 1, '', '', '', 'nasalized_vowels'),
(34, '5', 18, 1, '', '', '', 'nasalized_vowels'),
(35, '6', 18, 1, '', '', '', 'nasalized_vowels'),
(36, '', 18, NULL, '', '', '', ''),
(37, '', 18, NULL, '', '', '', ''),
(38, '', 18, NULL, '', '', '', ''),
(39, 'ai', 18, 0, 'à¦à¦²à¦¾à¦‡', '', 'à¦à¦–à¦¨', 'semi_vowels'),
(40, 'ae', 18, 0, 'à¦¬à¦¾à¦¯à¦¼', '', 'à¦¦à¦¿à§‡à¦•', 'semi_vowels'),
(41, 'au', 18, 0, 'à¦—à¦¾à¦‰', '', 'à¦¶à¦°à§€à¦°', 'semi_vowels'),
(42, 'ao', 18, 0, 'à¦—à¦¾à¦‡à¦®à¦¾à¦“', '', 'à¦—à¦¾à¦­à§€', 'semi_vowels'),
(43, '0', 2, 0, 'aa', 'b', 'n', 'nasalized_vowels'),
(44, '1', 2, 1, 'a', 'b', 'n', 'nasalized_vowels'),
(45, '2', 2, 0, 'a', 'b', 'n', 'nasalized_vowels'),
(46, '3', 2, 0, 'a', 'b', 'n', 'nasalized_vowels'),
(47, '4', 2, 1, 'a', 'b', 'n', 'nasalized_vowels'),
(48, '5', 2, 1, 'a', 'b', 'n', 'nasalized_vowels'),
(49, '6', 2, 0, 'a', 'b', 'n', 'nasalized_vowels'),
(50, 's', 2, NULL, 'g', 't', 'y', ''),
(51, 's', 2, NULL, 'g', 't', 'y', ''),
(52, 's', 2, NULL, 'g', 't', 'y', ''),
(53, 'ai', 2, 0, 'ee', 'rr', 'qq', 'semi_vowels'),
(54, 'ae', 2, 1, 'ee', 'rr', 'qq', 'semi_vowels'),
(55, 'au', 2, 0, 'ee', 'rr', 'qq', 'semi_vowels'),
(56, 'ao', 2, 1, 'ee', 'rr', 'qq', 'semi_vowels');

-- --------------------------------------------------------

--
-- Table structure for table `sentence_type`
--

CREATE TABLE IF NOT EXISTS `sentence_type` (
  `id` int(11) NOT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans_a` varchar(100) DEFAULT NULL,
  `ans_b` varchar(100) DEFAULT NULL,
  `ans_c` varchar(100) DEFAULT NULL,
  `ans_d` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sentence_type`
--

INSERT INTO `sentence_type` (`id`, `personnel_information_id`, `question`, `ans_a`, `ans_b`, `ans_c`, `ans_d`) VALUES
(1, 2, 'Simple Sentence', 'aa', 'aa', 'aa', NULL),
(2, 2, 'Compound Sentence', 'aa', 'aa', 'aa', NULL),
(3, 2, 'Complex Sentence', 'aa', NULL, NULL, NULL),
(4, 2, 'Declarative Sentence', 'aa', 'aa', 'aa', NULL),
(5, 2, 'Interrogative Sentence', 'aa', 'aa', 'aa', NULL),
(6, 2, 'Exclamatory Sentence', 'aa', 'aa', 'aa', 'aa'),
(7, 2, 'Imperative Sentence', 'aa', 'aa', NULL, NULL),
(8, 2, 'Conditional Sentence', 'aa', 'aa', NULL, NULL),
(9, 2, 'positive sentence', 'aa', 'aa', 'aa', NULL),
(10, 2, 'Negative sentence', 'aa', 'aa', 'aa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socio_culture`
--

CREATE TABLE IF NOT EXISTS `socio_culture` (
  `id` int(11) NOT NULL,
  `personnel_information_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `ans_a` varchar(100) NOT NULL,
  `ans_b` varchar(100) NOT NULL,
  `ans_c` varchar(100) NOT NULL,
  `ans_d` varchar(100) NOT NULL,
  `ans_e` varchar(100) DEFAULT NULL,
  `other_box_text` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=331 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socio_culture`
--

INSERT INTO `socio_culture` (`id`, `personnel_information_id`, `question_no`, `ans_a`, `ans_b`, `ans_c`, `ans_d`, `ans_e`, `other_box_text`) VALUES
(1, 18, 1, 'mother_tongue', '0', '0', '0', NULL, ''),
(2, 18, 2, 'ans_a', '0', '0', '0', NULL, ''),
(3, 18, 3, 'ans_a', '0', '0', '0', NULL, ''),
(4, 18, 4, '0', '', '', '', NULL, ''),
(5, 18, 5, 'Prestigious', '0', '0', '', NULL, ''),
(6, 18, 6, '0', '0', 'Bad', '', NULL, ''),
(7, 18, 7, '0', '', '', '', NULL, ''),
(8, 18, 8, 'Karitash, Bangladesh Adibashi Forum.', '', '', '', NULL, ''),
(9, 18, 28, '0', 'No', '', '0', NULL, ''),
(10, 18, 29, '0', 'Two', '0', '0', NULL, ''),
(11, 18, 30, '0', '0', '0', 'More', '0', 'Garo'),
(12, 18, 31, '0', '0', '0', '0', NULL, ''),
(13, 18, 32, 'Yes', '0', '0', '0', '0', ''),
(14, 18, 33, 'Yes', '0', '0', '', '0', ''),
(15, 18, 34, 'Yes', '0', '0', '', NULL, ''),
(16, 18, 35, 'Yes', '0', '0', '0', '0', ''),
(17, 18, 36, 'Yes', '0', '', '', NULL, ''),
(18, 18, 18, '0', 'Other', '', '', NULL, 'Mother tongue'),
(19, 18, 19, 'Yes', '0', '', '', NULL, ''),
(20, 18, 20, 'Yes', '0', '', '', NULL, ''),
(21, 18, 21, 'mother_tongue', '0', '0', '', NULL, ''),
(22, 18, 22, '0', 'No', '', '', NULL, ''),
(23, 18, 23, '0', 'No', '', '', NULL, ''),
(24, 18, 24, 'Yes', '0', '', '', NULL, ''),
(25, 18, 25, 'Hajong', 'Koch', 'Hodi', '', NULL, ''),
(26, 18, 26, 'Yes', '0', '', '', NULL, ''),
(27, 18, 27, '0', 'No', '', '', NULL, ''),
(28, 18, 37, 'Bangla', '', '', '', NULL, ''),
(29, 18, 39, '0', 'No', '', '', NULL, ''),
(30, 18, 40, '0', '', '', '', NULL, ''),
(31, 18, 41, '0', 'No', '', '', NULL, ''),
(32, 18, 42, '0', '', '', '', NULL, ''),
(33, 18, 43, '0', 'No', '', '', NULL, ''),
(34, 18, 44, 'Yes', '0', '', '', NULL, ''),
(35, 18, 45, 'Yes', '0', '', '', NULL, ''),
(36, 18, 46, 'Yes', '0', '', '', NULL, ''),
(37, 18, 47, '0', 'No', '', '', NULL, ''),
(38, 18, 48, '0', 'No', '', '', NULL, ''),
(39, 18, 49, '0', 'No', '', '', NULL, ''),
(40, 18, 50, '0', '0', '0', '0', NULL, ''),
(41, 18, 51, 'Yes', '0', '', '', NULL, ''),
(42, 18, 52, '0', '0', 'Roman', '', NULL, ''),
(43, 18, 28, '0', '0', '', '0', NULL, ''),
(44, 18, 29, '0', '0', '0', '0', NULL, ''),
(45, 18, 30, '0', '0', '0', '0', '0', ''),
(46, 18, 31, '0', '0', '0', '0', NULL, ''),
(47, 18, 32, '0', '0', '0', '0', '0', ''),
(48, 18, 33, '0', '0', '0', '', '0', ''),
(49, 18, 34, '0', '0', '0', '', NULL, ''),
(50, 18, 35, '0', '0', '0', '0', '0', ''),
(51, 18, 36, '0', '0', '', '', NULL, ''),
(52, 18, 28, '0', '0', '', '0', NULL, ''),
(53, 18, 29, '0', '0', '0', '0', NULL, ''),
(54, 18, 30, '0', '0', '0', '0', '0', ''),
(55, 18, 31, '0', '0', '0', '0', NULL, ''),
(56, 18, 32, '0', '0', '0', '0', '0', ''),
(57, 18, 33, '0', '0', '0', '', '0', ''),
(58, 18, 34, '0', '0', '0', '', NULL, ''),
(59, 18, 35, '0', '0', '0', '0', '0', ''),
(60, 18, 36, '0', '0', '', '', NULL, ''),
(61, 2, 28, '0', '0', '', 'Other', NULL, ''),
(62, 2, 29, '0333', '0', 'Three', '0', NULL, ''),
(63, 2, 30, '0555', '0', '0', 'More', '0', ''),
(64, 2, 31, '0', '0', '0', '0', NULL, ''),
(65, 2, 32, '0', '0', 'English', '0', '0', ''),
(66, 2, 33, '0', 'No', '0', '', '0', ''),
(67, 2, 34, '0', '0', '0', '', NULL, ''),
(68, 2, 35, '0', '0', '0', '0', '0', ''),
(69, 2, 36, '0', '0', '', '', NULL, ''),
(70, 18, 28, '0', 'No', '', '0', NULL, ''),
(71, 18, 29, '0', 'Two', '0', '0', NULL, ''),
(72, 18, 30, '0', '0', '0', 'More', '0', 'Garo'),
(73, 18, 31, '0', '0', '0', '0', NULL, ''),
(74, 18, 32, 'Yes', '0', '0', '0', 'Other', 'Garo'),
(75, 18, 33, 'Yes', '0', '0', '', '0', ''),
(76, 18, 34, 'Yes', '0', '0', '', NULL, ''),
(77, 18, 35, 'Yes', '0', '0', '0', '0', ''),
(78, 18, 36, 'Yes', '0', '', '', NULL, ''),
(79, 19, 1, 'mother_tongue', '0', '0', '0', NULL, ''),
(80, 19, 2, 'ans_a', '0', '0', '0', NULL, ''),
(81, 19, 3, 'ans_a', '0', '0', '0', NULL, ''),
(82, 19, 4, '0', '', '', '', NULL, ''),
(83, 19, 5, '0', '0', 'Normal', '', NULL, ''),
(84, 19, 6, '0', '0', 'Bad', '', NULL, ''),
(85, 19, 7, '0', '', '', '', NULL, ''),
(86, 19, 8, 'Karitash', '', '', '', NULL, ''),
(87, 19, 28, '0', 'No', '', '0', NULL, ''),
(88, 19, 29, '0', '0', '0', 'More', NULL, ''),
(89, 19, 30, '0', '0', '0', 'More', 'English', 'Garo,Hajong,Hindi'),
(90, 19, 31, '0', '0', '0', '0', NULL, 'Garo,Hajong'),
(91, 19, 32, 'Yes', '0', '0', '0', '0', 'Garo,Hajong'),
(92, 19, 33, 'Yes', '0', '0', '', '0', ''),
(93, 19, 34, '0', '0', '0', '', NULL, ''),
(94, 19, 35, '0', 'No', '0', 'mother_tongue', '0', ''),
(95, 19, 36, '0', 'No', '', '', NULL, ''),
(96, 19, 18, '0', '0', '', '', NULL, 'Mother tongue'),
(97, 19, 19, '0', 'No', '', '', NULL, ''),
(98, 19, 20, '0', 'No', '', '', NULL, ''),
(99, 19, 21, 'mother_tongue', '0', '0', '', NULL, ''),
(100, 19, 22, '0', 'No', '', '', NULL, ''),
(101, 19, 23, '0', 'No', '', '', NULL, ''),
(102, 19, 24, '0', 'No', '', '', NULL, ''),
(103, 19, 25, '', '', '', '', NULL, ''),
(104, 19, 26, '0', 'No', '', '', NULL, ''),
(105, 19, 27, '0', 'No', '', '', NULL, ''),
(106, 19, 37, 'Bangla', '', '', '', NULL, ''),
(107, 19, 39, '0', 'No', '', '', NULL, ''),
(108, 19, 40, '', '', '', '', NULL, ''),
(109, 19, 41, '0', '0', '', '', NULL, ''),
(110, 19, 42, '', '', '', '', NULL, ''),
(111, 19, 43, '0', '0', '', '', NULL, ''),
(112, 19, 44, 'Yes', '0', '', '', NULL, ''),
(113, 19, 45, 'Yes', '0', '', '', NULL, ''),
(114, 19, 46, 'Yes', '0', '', '', NULL, ''),
(115, 19, 47, '0', '0', '', '', NULL, ''),
(116, 19, 48, '0', '0', '', '', NULL, ''),
(117, 19, 49, '0', 'No', '', '', NULL, ''),
(118, 19, 50, '0', '0', '0', '0', NULL, ''),
(119, 19, 51, 'Yes', '0', '', '', NULL, ''),
(120, 19, 52, '0', '0', 'Roman', '', NULL, ''),
(121, 19, 28, '0', '0', '', '0', NULL, ''),
(122, 19, 29, '0', '0', '0', '0', NULL, ''),
(123, 19, 30, '0', '0', '0', '0', '0', ''),
(124, 19, 31, '0', '0', '0', '0', NULL, ''),
(125, 19, 32, '0', '0', '0', '0', '0', ''),
(126, 19, 33, '0', '0', '0', '', '0', ''),
(127, 19, 34, '0', '0', '0', '', NULL, ''),
(128, 19, 35, '0', '0', '0', '0', '0', ''),
(129, 19, 36, '0', '0', '', '', NULL, ''),
(130, 2, 28, '0', '0', '', '', NULL, ''),
(131, 2, 29, '', '', '', '', NULL, ''),
(132, 2, 30, 'sss', '', '', '', NULL, ''),
(133, 2, 31, '0', 'No', '', '', NULL, ''),
(134, 2, 32, '0', 'No', '', '', NULL, ''),
(135, 2, 33, 'Yes', '0', '', '', NULL, ''),
(136, 2, 34, '0', 'No', '', '', NULL, ''),
(137, 2, 35, 'Yes', '0', '', '', NULL, ''),
(138, 2, 36, '0', 'No', '', '', NULL, ''),
(139, 2, 28, '1', '', '', '', NULL, ''),
(140, 2, 29, 'hh', '', '', '', NULL, ''),
(141, 2, 30, 'hhh', '', '', '', NULL, ''),
(142, 2, 31, '0', '', '', '', NULL, ''),
(143, 2, 32, '0', '', '', '', NULL, ''),
(144, 2, 33, '1', '', '', '', NULL, ''),
(145, 2, 34, '0', '', '', '', NULL, ''),
(146, 2, 35, '1', '', '', '', NULL, ''),
(147, 2, 36, '1', '', '', '', NULL, ''),
(148, 2, 28, '1', '', '', '', NULL, ''),
(149, 2, 29, 'yrtyrtyytr', '', '', '', NULL, ''),
(150, 2, 30, 'dfgdfg', '', '', '', NULL, ''),
(151, 2, 31, '0', '', '', '', NULL, ''),
(152, 2, 32, '1', '', '', '', NULL, ''),
(153, 2, 33, '0', '', '', '', NULL, ''),
(154, 2, 34, '', '', '', '', NULL, ''),
(155, 2, 35, '1', '', '', '', NULL, ''),
(156, 2, 36, '0', '', '', '', NULL, ''),
(157, 2, 28, '1', '', '', '', NULL, ''),
(158, 2, 29, 'yrtyrtyytr', '', '', '', NULL, ''),
(159, 2, 30, 'dfgdfg', '', '', '', NULL, ''),
(160, 2, 31, '0', '', '', '', NULL, ''),
(161, 2, 32, '1', '', '', '', NULL, ''),
(162, 2, 33, '0', '', '', '', NULL, ''),
(163, 2, 34, '', '', '', '', NULL, ''),
(164, 2, 35, '1', '', '', '', NULL, ''),
(165, 2, 36, '0', '', '', '', NULL, ''),
(166, 21, 1, 'mother_tongue', '0', '0', '0', NULL, ''),
(167, 21, 2, 'ans_a', '0', '0', '0', NULL, ''),
(168, 21, 3, 'ans_a', '0', '0', '0', NULL, ''),
(169, 21, 4, '0', '', '', '', NULL, ''),
(170, 21, 5, '0', '0', 'Normal', '', NULL, ''),
(171, 21, 6, '0', '0', 'Bad', '', NULL, ''),
(172, 21, 7, '0', '', '', '', NULL, ''),
(173, 21, 8, 'Karitash', '', '', '', NULL, ''),
(174, 21, 28, '0', '0', '', '0', NULL, ''),
(175, 21, 29, '0', '0', '0', 'More', NULL, ''),
(176, 21, 30, '0', '0', '0', 'More', 'English', 'Garo,Hajong,Hindi'),
(177, 21, 31, 'Bangla', '0', '0', 'Other', NULL, 'Garo,Hajong'),
(178, 21, 32, '1', 'Bangla', '0', '0', 'Other', 'Garo,Hajong'),
(179, 21, 33, '1', '0', '0', '', '0', ''),
(180, 21, 34, '0', '0', '0', '', NULL, ''),
(181, 21, 35, '0', '0', '0', 'mother_tongue', '0', ''),
(182, 21, 36, '0', 'No', '', '', NULL, ''),
(183, 21, 18, '0', '0', '', '', NULL, ''),
(184, 21, 19, '0', 'No', '', '', NULL, ''),
(185, 21, 20, '0', 'No', '', '', NULL, ''),
(186, 21, 21, 'mother_tongue', '0', '0', '', NULL, ''),
(187, 21, 22, '0', 'No', '', '', NULL, ''),
(188, 21, 23, '0', 'No', '', '', NULL, ''),
(189, 21, 24, '0', 'No', '', '', NULL, ''),
(190, 21, 25, '', '', '', '', NULL, ''),
(191, 21, 26, '0', 'No', '', '', NULL, ''),
(192, 21, 27, '0', 'No', '', '', NULL, ''),
(193, 21, 37, 'Bangla', '', '', '', NULL, ''),
(194, 21, 39, '0', 'No', '', '', NULL, ''),
(195, 21, 40, '', '', '', '', NULL, ''),
(196, 21, 41, '0', '0', '', '', NULL, ''),
(197, 21, 42, '', '', '', '', NULL, ''),
(198, 21, 43, '0', '0', '', '', NULL, ''),
(199, 21, 44, 'Yes', '0', '', '', NULL, ''),
(200, 21, 45, 'Yes', '0', '', '', NULL, ''),
(201, 21, 46, '0', '0', '', '', NULL, ''),
(202, 21, 47, '0', '0', '', '', NULL, ''),
(203, 21, 48, '0', '0', '', '', NULL, ''),
(204, 21, 49, '0', 'No', '', '', NULL, ''),
(205, 21, 50, '0', '0', '0', '0', NULL, ''),
(206, 21, 51, 'Yes', '0', '', '', NULL, ''),
(207, 21, 52, '0', '0', 'Roman', '', NULL, ''),
(208, 21, 28, '0', '0', '', '0', NULL, ''),
(209, 21, 29, '0', '0', '0', 'More', NULL, ''),
(210, 21, 30, '0', '0', '0', 'More', 'English', 'Garo,Hajong,Hindi'),
(211, 21, 31, 'Bangla', '0', '0', 'Other', NULL, 'Garo,Hajong'),
(212, 21, 32, '0', 'Bangla', '0', '0', 'Other', 'Garo,Hajong'),
(213, 21, 33, 'mother_tongue', '0', '0', '', '0', ''),
(214, 21, 34, 'mother_tongue', '0', '0', '', NULL, ''),
(215, 21, 35, '0', '0', '0', 'mother_tongue', '0', ''),
(216, 21, 36, '0', 'No', '', '', NULL, ''),
(217, 21, 28, '0', '0', '', '0', NULL, ''),
(218, 21, 29, '0', '0', '0', '0', NULL, ''),
(219, 21, 30, '0', '0', '0', '0', '0', ''),
(220, 21, 31, '0', '0', '0', '0', NULL, ''),
(221, 21, 32, '0', '0', '0', '0', '0', ''),
(222, 21, 33, '0', '0', '0', '', '0', ''),
(223, 21, 34, '0', '0', '0', '', NULL, ''),
(224, 21, 35, '0', '0', '0', '0', '0', ''),
(225, 21, 36, '0', '0', '', '', NULL, ''),
(226, 2, 28, '', '', '', '', NULL, ''),
(227, 2, 29, '', '', '', '', NULL, ''),
(228, 2, 30, '', '', '', '', NULL, ''),
(229, 2, 31, '', '', '', '', NULL, ''),
(230, 2, 32, '', '', '', '', NULL, ''),
(231, 2, 33, '', '', '', '', NULL, ''),
(232, 2, 34, '', '', '', '', NULL, ''),
(233, 2, 35, '', '', '', '', NULL, ''),
(234, 2, 36, '', '', '', '', NULL, ''),
(235, 2, 9, '0', 'Bangla', '', '0', NULL, ''),
(236, 2, 10, '0', '0', '0', '0', NULL, ''),
(237, 2, 11, '0', 'Marma', '0', '0', '0', ''),
(238, 2, 12, '0', '0', 'Mro', '0', NULL, ''),
(239, 2, 13, '0', '0', '0', '0', '0', ''),
(240, 2, 14, '0', '0', '0', '', '0', ''),
(241, 2, 15, 'mother_tongue', '0', '0', '', NULL, ''),
(242, 2, 16, 'Bangla', '0', '0', '0', '0', ''),
(243, 2, 17, '0', 'No', '', '', NULL, ''),
(244, 21, 28, '0', '0', '', '0', NULL, ''),
(245, 21, 29, '0', '0', '0', '0', NULL, ''),
(246, 21, 30, '0', '0', '0', '0', '0', ''),
(247, 21, 31, '0', '0', '0', '0', NULL, ''),
(248, 21, 32, '0', '0', '0', '0', '0', ''),
(249, 21, 33, '0', '0', '0', '', '0', ''),
(250, 21, 34, '0', '0', '0', '', NULL, ''),
(251, 21, 35, '0', '0', '0', '0', '0', ''),
(252, 21, 36, '0', '0', '', '', NULL, ''),
(253, 21, 28, '0', '0', '', '0', NULL, ''),
(254, 21, 29, '0', '0', '0', 'More', NULL, ''),
(255, 21, 30, '0', '0', '0', 'More', 'English', 'Garo,Hajong,Hindi'),
(256, 21, 31, 'Bangla', '0', '0', '0', NULL, ''),
(257, 21, 32, '0', 'Bangla', '0', '0', 'Other', 'Garo,Hajong'),
(258, 21, 33, 'mother_tongue', '0', '0', '', '0', ''),
(259, 21, 34, 'mother_tongue', '0', '0', '', NULL, ''),
(260, 21, 35, '0', '0', '0', 'mother_tongue', '0', ''),
(261, 21, 36, '0', 'No', '', '', NULL, ''),
(262, 21, 28, '0', '0', '', '0', NULL, ''),
(263, 21, 29, '0', '0', '0', '0', NULL, ''),
(264, 21, 30, '0', '0', '0', '0', '0', ''),
(265, 21, 31, '0', '0', '0', '0', NULL, ''),
(266, 21, 32, '0', '0', '0', '0', '0', ''),
(267, 21, 33, '0', '0', '0', '', '0', ''),
(268, 21, 34, '0', '0', '0', '', NULL, ''),
(269, 21, 35, '0', '0', '0', '0', '0', ''),
(270, 21, 36, '0', '0', '', '', NULL, ''),
(271, 21, 9, 'mother_tongue', '0', '', '0', NULL, ''),
(272, 21, 10, '0', '0', '0', 'More', NULL, ''),
(273, 21, 11, '0', '0', '0', 'More', 'English', 'Garo,Hajong,Hindi'),
(274, 21, 12, 'Bangla', '0', '0', '0', NULL, ''),
(275, 21, 13, 'mother_tongue', 'Bangla', '0', '0', 'Other', 'Garo,Hajong'),
(276, 21, 14, 'mother_tongue', '0', '0', '', '0', ''),
(277, 21, 15, 'mother_tongue', '0', '0', '', NULL, ''),
(278, 21, 16, '0', '0', '0', 'mother_tongue', '0', ''),
(279, 21, 17, '0', 'No', '', '', NULL, ''),
(280, 22, 1, 'mother_tongue', '0', '0', '0', NULL, ''),
(281, 22, 2, 'ans_a', '0', '0', '0', NULL, ''),
(282, 22, 3, 'ans_a', '0', '0', '0', NULL, ''),
(283, 22, 4, '0', '', '', '', NULL, ''),
(284, 22, 5, 'Prestigious', '0', '0', '', NULL, ''),
(285, 22, 6, '0', '0', 'Bad', '', NULL, ''),
(286, 22, 7, '', '0', '', '', NULL, ''),
(287, 22, 8, '', '', '', '', NULL, ''),
(288, 22, 9, 'mother_tongue', '0', '', '0', NULL, ''),
(289, 22, 10, '0', '0', 'Three', '0', NULL, ''),
(290, 22, 11, '0', '0', '0', 'More', '0', 'Garo'),
(291, 22, 12, 'Bangla', '0', '0', 'Other', NULL, 'Garo'),
(292, 22, 13, '0', 'Bangla', '0', '0', '0', ''),
(293, 22, 14, 'mother_tongue', '0', '0', '', '0', ''),
(294, 22, 15, 'mother_tongue', '0', '0', '', NULL, ''),
(295, 22, 16, '0', '0', '0', 'mother_tongue', '0', ''),
(296, 22, 17, 'Yes', '0', '', '', NULL, ''),
(297, 22, 18, 'Bangla', '0', '', '', NULL, ''),
(298, 22, 19, '0', 'No', '', '', NULL, ''),
(299, 22, 20, '0', 'No', '', '', NULL, ''),
(300, 22, 21, '0', 'bangla', '0', '', NULL, ''),
(301, 22, 22, '0', 'No', '', '', NULL, ''),
(302, 22, 23, 'Yes', '0', '', '', NULL, ''),
(303, 22, 24, 'Yes', '0', '', '', NULL, ''),
(304, 22, 25, 'hajong', 'bonsi', 'hodi', '', NULL, ''),
(305, 22, 26, 'Yes', '0', '', '', NULL, ''),
(306, 22, 27, 'Yes', '0', '', '', NULL, ''),
(307, 22, 28, '0', '', '', '', NULL, ''),
(308, 22, 29, '', '', '', '', NULL, ''),
(309, 22, 30, '', '', '', '', NULL, ''),
(310, 22, 31, '', '', '', '', NULL, ''),
(311, 22, 32, '1', '', '', '', NULL, ''),
(312, 22, 33, '1', '', '', '', NULL, ''),
(313, 22, 34, '0', '', '', '', NULL, ''),
(314, 22, 35, '0', '', '', '', NULL, ''),
(315, 22, 36, '0', '', '', '', NULL, ''),
(316, 22, 37, '', '', '', '', NULL, ''),
(317, 22, 39, '0', 'No', '', '', NULL, ''),
(318, 22, 40, '', '', '', '', NULL, ''),
(319, 22, 41, '0', 'No', '', '', NULL, ''),
(320, 22, 42, '', '', '', '', NULL, ''),
(321, 22, 43, 'Yes', '0', '', '', NULL, ''),
(322, 22, 44, 'Yes', '0', '', '', NULL, ''),
(323, 22, 45, 'Yes', '0', '', '', NULL, ''),
(324, 22, 46, 'Yes', '0', '', '', NULL, ''),
(325, 22, 47, '0', 'No', '', '', NULL, ''),
(326, 22, 48, '0', '0', '', '', NULL, ''),
(327, 22, 49, '0', 'No', '', '', NULL, ''),
(328, 22, 50, '0', '0', '0', '0', NULL, ''),
(329, 22, 51, 'Yes', '0', '', '', NULL, ''),
(330, 22, 52, 'Bangla', '0', '0', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE IF NOT EXISTS `story` (
  `id` int(11) NOT NULL,
  `personnel_information_id` int(11) DEFAULT NULL,
  `story` text
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `personnel_information_id`, `story`) VALUES
(3, 3, 'This is a story'),
(4, 18, 'gaula pasei gaÅ‹. oi gaÅ‹la pasei kÉ”mla o huru namer magubÊ°atÌ¯ar tÌ¯Ê°akiban. Ã¦kdÌ¯in huruÉ”la magu kÉ”mlage kule aÉŸika ÉŸui ÉŸalaboga kÊ°uri anibo dÌ¯ahabai  ÉŸaiya . kÉ”tÌ¯Ê°ara huina kÉ”mla kole tÌ¯É”i kÊ°uri anibo ÉŸabo? Ã¦la ÉŸauara tÌ¯Ê°ik nÉ” hay. karhon, ahibo pÉ”tÌ¯Ê°e tÌ¯É”y katÌ¯ pÊ°Ã¦labo pay. pore ÉŸÉ”khon andÌ¯ar hole moi ÉŸÉ”khon baire ÉŸabo É”bÃ¦la  kÊ°urir upor poirÃ¦ ÉŸaitÌ¯e pare/poribo pay. tÌ¯auki paniniu bÊ°iÉŸibo pay. pore huroola maguge ÊƒahoÊƒ dÌ¯ile mÉ”i pÉ”tÌ¯Ê°ni khuri na pÊ°Ã¦labo. pÉ”re huru khuri anibo ÉŸale. É”i gÊ°É”rni ahibo pÉ”tÌ¯Ê°ni É”lpo khuri pÊ°illÃ¦ ahile ratÌ¯inika kÉ”mla udÌ¯ani poria bÊ°iÉŸah kapor dÌ¯Ã¦ho gÊ°É”rbai ahile. oi É”bÃ¦la bakÊ°ar/ tÌ¯antÌ¯i rag hole. dÌ¯ukre huruge kuleh tÌ¯É”i ÉŸodÌ¯i mÉ”la kÉ”tÌ¯Ê°ara hunitÌ¯o tÌ¯ahole muga iÅ‹kaka bÊ°iÉŸibo na lagilo hÉ”y. hurura É”lpo laÉŸ  pale aro kule tÌ¯É”y mora kÊ°urira ÉŸoinika ÉŸaila tÌ¯É”la kapor cupor gila hukkÃ¦ dÌ¯ibo pay.  '),
(5, 18, 'gaula pasei gaÅ‹. oi gaÅ‹la pasei kÉ”mla o huru namer magubÊ°atÌ¯ar tÌ¯Ê°akiban. Ã¦kdÌ¯in huruÉ”la magu kÉ”mlage kule aÉŸika ÉŸui ÉŸalaboga kÊ°uri anibo dÌ¯ahabai  ÉŸaiya . kÉ”tÌ¯Ê°ara huina kÉ”mla kole tÌ¯É”i kÊ°uri anibo ÉŸabo? Ã¦la ÉŸauara tÌ¯Ê°ik nÉ” hay. karhon, ahibo pÉ”tÌ¯Ê°e tÌ¯É”y katÌ¯ pÊ°Ã¦labo pay. pore ÉŸÉ”khon andÌ¯ar hole moi ÉŸÉ”khon baire ÉŸabo É”bÃ¦la  kÊ°urir upor poirÃ¦ ÉŸaitÌ¯e pare/poribo pay. tÌ¯auki paniniu bÊ°iÉŸibo pay. pore huroola maguge ÊƒahoÊƒ dÌ¯ile mÉ”i pÉ”tÌ¯Ê°ni khuri na pÊ°Ã¦labo. pÉ”re huru khuri anibo ÉŸale. É”i gÊ°É”rni ahibo pÉ”tÌ¯Ê°ni É”lpo khuri pÊ°illÃ¦ ahile ratÌ¯inika kÉ”mla udÌ¯ani poria bÊ°iÉŸah kapor dÌ¯Ã¦ho gÊ°É”rbai ahile. oi É”bÃ¦la bakÊ°ar/ tÌ¯antÌ¯i rag hole. dÌ¯ukre huruge kuleh tÌ¯É”i ÉŸodÌ¯i mÉ”la kÉ”tÌ¯Ê°ara hunitÌ¯o tÌ¯ahole muga iÅ‹kaka bÊ°iÉŸibo na lagilo hÉ”y. hurura É”lpo laÉŸ  pale aro kule tÌ¯É”y mora kÊ°urira ÉŸoinika ÉŸaila tÌ¯É”la kapor cupor gila hukkÃ¦ dÌ¯ibo pay.  '),
(6, 2, 'ffhhgIII999'),
(7, 18, ''),
(8, 18, ''),
(9, NULL, 'gaula lÉ”gei gaÅ‹.u gaÅ‹la baratÌ¯ei komla ar hÉ”ru namla ÉŸaÅ‹ai bÉ”u tÌ¯Ê°akbun.ekdÌ¯ina,hÉ”ru ola magu komlagu kÉ”ilo,aÉŸi kÊ°uri anbÉ”ga ÉŸÉ”Å‹gÉ”l bay ÉŸabÉ”.i kÉ”tÌ¯Ê°ara huinna komla kÉ”ilo  tÌ¯É”y kÊ°uri anbÉ” ÉŸabÉ”?ela ÉŸaowa thik naubÉ”.karÉ”n ahibor bela tÉ”y kÊ°uri pÊ°iilla dÌ¯ibÉ” pay.pÉ”re bilabatÌ¯ini ÉŸibila mÉ”y bar bay ÉŸabÉ”.ubila kÊ°uri uprÉ”ni paribÉ” pay.hÉ”ru ola maguga sahÉ”s dÌ¯ilÉ”.ar kÉ”ilo mÉ”i kÊ°uri na pÊ°elabo.pÉ”re hÉ”ru kÊ°uri anbuga ÉŸale.pÉ”re gÊ°É”rÉ”ni ahabela É”lpÉ” kÊ°uri pÊ°eilla ailo.ratÌ¯ini komla udÌ¯ani ÉŸaiya puira mÉ”ÊƒÉ”n bÊ°iÉŸa kapuÉ½ niya gÊ°É”r bar ahilo.pÉ”re komla bakÊ°ar rag dÌ¯ule.dÌ¯uikra hÉ”ruga kÉ”ilo tÌ¯É”y ÉŸÉ”dÌ¯i mÉ”la kÉ”tÌ¯Ê°ara hunÉ”tÌ¯ tÌ¯aile aÉŸi mÉ”la bÊ°iÉŸibugana hale hÉ”y.hÉ”ru  lacÊ° pailÉ”.pÉ”re kÉ”ilo mÉ”la ana kÊ°urini ÉŸui ÉŸailla kapuÉ½a huka dÌ¯i. '),
(10, NULL, 'gaula lÉ”gei gaÅ‹.u gaÅ‹la baratÌ¯ei komla ar hÉ”ru namla ÉŸaÅ‹la bÉ”u tÌ¯Ê°akbun.ekdÌ¯ina,hÉ”ru ola magu komlagu kÉ”ilu,aÉŸi kÊ°uri aanbÉ”ga ÉŸÉ”Å‹gÉ”l bay ÉŸabÉ”.i kÉ”tÌ¯Ê°ara huinna komla kÉ”ilo tÌ¯É”y kÊ°uri anbÉ” ÉŸabÉ”?ela ÉŸaowa thik naubÉ”.karÉ”n ahibor bela tÉ”y kÊ°uri pÊ°iila dÌ¯ibÉ” pay.pÉ”re bilabatÌ¯ini ÉŸibila mÉ”y bar bay ÉŸabÉ”.ubila kÊ°ri uprÉ”ni paribÉ” pay.hÉ”ru ola maguga sahÉ”s dÌ¯ilÉ”.ar kÉ”ilo mÉ”i kÊ°uri na pÊ°elabo.pÉ”re hÉ”ru kÊ°uri anbuga ÉŸale.pÉ”re gÊ°É”rÉ”ni ahabela É”lpÉ” kÊ°uri pÊ°eilla ailo.ratÌ¯ini komla udÌ¯ani ÉŸaiya puira mÉ”ÊƒÉ”n bÊ°iÉŸa kapuÉ½ niya gÊ°É”r bar ahilo.pÉ”re komla bakÊ°ar rag dÌ¯ule.dÌ¯uikra hÉ”ruga kÉ”ilo tÌ¯É”y ÉŸÉ”dÌ¯i mÉ”na kÉ”tÌ¯Ê°ara hunÉ”tÌ¯ tÌ¯aile aÉŸi mÉ”la bÊ°iÉŸibugana hale hÉ”y.hÉ”ru lacÊ° pailÉ”.pÉ”re kÉ”ilo mÉ”la ana kÊ°urini ÉŸui ÉŸailla kapuÉ½a huka dÌ¯i.'),
(11, NULL, 'gaula lÉ”gei gaÅ‹.u gaÅ‹la baratÌ¯ei komla ar hÉ”ru namla ÉŸaÅ‹la bÉ”u tÌ¯Ê°akbun.ekdÌ¯ina,hÉ”ru ola magu komlagu kÉ”ilu,aÉŸi kÊ°uri aanbÉ”ga ÉŸÉ”Å‹gÉ”l bay ÉŸabÉ”.i kÉ”tÌ¯Ê°ara huinna komla kÉ”ilo tÌ¯É”y kÊ°uri anbÉ” ÉŸabÉ”?ela ÉŸaowa thik naubÉ”.karÉ”n ahibor bela tÉ”y kÊ°uri pÊ°iila dÌ¯ibÉ” pay.pÉ”re bilabatÌ¯ini ÉŸibila mÉ”y bar bay ÉŸabÉ”.ubila kÊ°ri uprÉ”ni paribÉ” pay.hÉ”ru ola maguga sahÉ”s dÌ¯ilÉ”.ar kÉ”ilo mÉ”i kÊ°uri na pÊ°elabo.pÉ”re hÉ”ru kÊ°uri anbuga ÉŸale.pÉ”re gÊ°É”rÉ”ni ahabela É”lpÉ” kÊ°uri pÊ°eilla ailo.ratÌ¯ini komla udÌ¯ani ÉŸaiya puira mÉ”ÊƒÉ”n bÊ°iÉŸa kapuÉ½ niya gÊ°É”r bar ahilo.pÉ”re komla bakÊ°ar rag dÌ¯ule.dÌ¯uikra hÉ”ruga kÉ”ilo tÌ¯É”y ÉŸÉ”dÌ¯i mÉ”na kÉ”tÌ¯Ê°ara hunÉ”tÌ¯ tÌ¯aile aÉŸi mÉ”la bÊ°iÉŸibugana hale hÉ”y.hÉ”ru lacÊ° pailÉ”.pÉ”re kÉ”ilo mÉ”la ana kÊ°urini ÉŸui ÉŸailla kapuÉ½a huka dÌ¯i.'),
(12, NULL, 'test'),
(13, NULL, 'test'),
(14, NULL, 'Gourab Test'),
(15, NULL, 'Gourab Test  89'),
(16, NULL, 'This is test. 789'),
(17, NULL, 'This is test. 789'),
(18, 21, 'gaula lÉ”gei gaÅ‹.u gaÅ‹la baratÌ¯ei komla ar hÉ”ru namla ÉŸaÅ‹la bÉ”u tÌ¯Ê°akbun.ekdÌ¯ina,hÉ”ru ola magu komlagu kÉ”ilu,aÉŸi kÊ°uri aanbÉ”ga ÉŸÉ”Å‹gÉ”l bay ÉŸabÉ”.i kÉ”tÌ¯Ê°ara huinna komla kÉ”ilo tÌ¯É”y kÊ°uri anbÉ” ÉŸabÉ”?ela ÉŸaowa thik naubÉ”.karÉ”n ahibor bela tÉ”y kÊ°uri pÊ°iila dÌ¯ibÉ” pay.pÉ”re bilabatÌ¯ini ÉŸibila mÉ”y bar bay ÉŸabÉ”.ubila kÊ°ri uprÉ”ni paribÉ” pay.hÉ”ru ola maguga sahÉ”s dÌ¯ilÉ”.ar kÉ”ilo mÉ”i kÊ°uri na pÊ°elabo.pÉ”re hÉ”ru kÊ°uri anbuga ÉŸale.pÉ”re gÊ°É”rÉ”ni ahabela É”lpÉ” kÊ°uri pÊ°eilla ailo.ratÌ¯ini komla udÌ¯ani ÉŸaiya puira mÉ”ÊƒÉ”n bÊ°iÉŸa kapuÉ½ niya gÊ°É”r bar ahilo.pÉ”re komla bakÊ°ar rag dÌ¯ule.dÌ¯uikra hÉ”ruga kÉ”ilo tÌ¯É”y ÉŸÉ”dÌ¯i mÉ”na kÉ”tÌ¯Ê°ara hunÉ”tÌ¯ tÌ¯aile aÉŸi mÉ”la bÊ°iÉŸibugana hale hÉ”y.hÉ”ru lacÊ° pailÉ”.pÉ”re kÉ”ilo mÉ”la ana kÊ°urini ÉŸui ÉŸailla kapuÉ½a huka dÌ¯i.'),
(19, 20, 'test'),
(20, 22, 'à¦—à¦¾à¦®à§‡à¦° à¦ªà¦¾à¦¶à§‡à¦‡ à¦—à¦¾à¦™ à¦¸à§‡à¦‡ à¦—à¦¾à¦™à§‡à¦° à¦¤à§€à¦°à§‡ à¦•à¦®à¦²à¦¾ à¦“ à¦¹à¦°à§ à¦¨à¦¾à¦®à§‡à¦° à¦à¦• à¦œà¦¾à¦®à¦¾à¦‡ -à¦¬à¦‰  à¦¥à¦¾à¦•à¦¤à§· à¦à¦•à¦¦à¦¿à¦¨ à¦¹à¦°à§ à¦¤à¦¾à¦° à¦¬à¦‰à¦•à§‡ à¦¬à¦²à¦² à¦…à¦¾à¦¸ à¦²à¦¾à¦•à¦°à¦¿ à¦…à¦¾à¦¨à¦¤à§‡ à¦¬à¦¨à§‡ à¦¯à¦¾à¦¬à§· à¦à¦•à¦¥à¦¾ à¦¶à§à¦¨à§‡ à¦•à¦®à¦²à¦¾ à¦¬à¦²à¦² à¦¤à§à¦‡ à¦²à¦¾à¦•à¦°à¦¿ à¦…à¦¾à¦¨à¦¤à§‡ à¦¯à¦¾à¦¬à¦¿? à¦à¦–à¦¨ à¦¯à¦¾à¦“à¦¯à¦¼à¦¾à¦° à¦ à¦¿à¦• à¦¹à¦¬à§‡ à¦¨à¦¾à§· à¦•à§‡à¦²à¦¾à¦‡à¦—à¦—à¦—à§‡ à¦¯à¦¾à¦“à¦¯à¦¼à¦¾à¦° à¦ªà¦¥à§‡ à¦¤à§à¦‡ à¦²à¦¾à¦•à¦°à¦¿ à¦«à§‡à¦²à¦¾à¦‡à¦¯à¦¼à¦¾ à¦¦à¦¿à¦¸à§· à¦ªà¦°à§‡ à¦¸à¦¨à§à¦¦à¦¾ à¦¬à§‡à¦²à¦¾à¦¯à¦¼ à¦…à¦¾à¦®à¦¿ à¦¬à¦¾à¦‡à¦°à§‡à¦¯à¦¾à¦¬à¦¾à¦° à¦¸à¦®à¦¯à¦¼ à¦ªà¦¡à¦¼à§‡ à¦¯à¦¾à¦¬à§· à¦¨à¦¾ à¦²à§‡ à¦ªà¦°à§‡ à¦—à¦¿à¦¯à¦¼à§‡ à¦œà¦²à§‡ à¦­à¦¿à¦œà¦œà¦¾ à¦¯à¦¾à¦¬à§· à¦¹à¦°à§ à¦¤à¦¾à¦° à¦¬à¦‰à¦•à§‡ à¦…à¦­à¦¯à¦¼ à¦¦à¦¿à¦²à§·à§· à¦•à¦‡à¦² à¦…à¦¾à¦®à¦¿ à¦ªà¦¥à§‡ à¦²à¦¾à¦•à¦°à¦¿ à¦«à§‡à¦²à¦¾à¦‡à¦¯à¦¼à¦¾ à¦¦à¦¿à¦¬à§‹ à¦¨à¦¾à§· à¦ªà¦°à§‡ à¦¹à¦°à§ à¦²à¦¾à¦• à¦°à¦¿ à¦¨à¦¿à¦…à¦¾à¦‡à¦¤à§‡ à¦—à§‡à¦²à§· à¦¸à§‡ à¦˜à¦°à§‡ à¦¯à¦¾à¦“à¦¯à¦¼à¦¾à¦° à¦¸à¦®à¦¯à¦¼ à¦ªà¦¥à§‡ à¦•à¦¿à¦›à§ à¦²à¦¾à¦•à¦°à¦¿ à¦«à§‡à¦²à§‡ à¦…à¦¾à¦‡à¦²à§‹à§· à¦°à¦¾à¦‡à¦¤à§‡ à¦•à¦®à¦²à¦¾ à¦ªà¦‡à¦°à¦¾ à¦—à¦¿à¦¯à¦¼à¦¾ à¦­à¦¿à¦œà¦œà¦¾ à¦•à¦¾à¦ªà§à¦°à§‡ à¦…à¦¾à¦‡à¦²à§‹à§· à¦ªà¦°à§‡ à¦¸à§‡ à¦°à¦¾à¦— à¦•à¦°à¦¹à§‡à§· à¦šà¦¿à¦•à¦•à¦¾à¦° à¦ªà¦¾à¦‡à¦°à¦¾ à¦¹à¦°à§à¦°à§‡ à¦•à¦‡à¦›à§‡ à¦¤à§à¦‡ à¦¯à¦¦à¦¿ à¦…à¦¾à¦®à¦¾à¦° à¦•à¦¥à¦¾ à¦¹à§à¦¨à¦¤à¦¿ à¦¤à¦¾à¦²à§‡ à¦…à¦¾à¦¸à¦•à§‡ à¦…à¦¾à¦®à¦¾à¦• à¦­à¦¿à¦œà¦¤à§‡ à¦²à¦¾à¦—à¦¤à§‹ à¦¨à¦¾à§· à¦¹à¦°à§ à¦à¦•à¦Ÿà§ à¦¶à¦°à¦® à¦ªà¦¾à¦‡à¦›à§‡ à¦à¦¬à¦‚ à¦•à¦‡à¦²à¦¤à§à¦‡ à¦…à¦¾à¦®à¦¾à¦° à¦…à¦¾à¦¨à¦¾ à¦²à¦¾à¦•à¦°à¦¿à¦—à§à¦²à§‹ à¦…à¦¾à¦—à§à¦¨ à¦œà¦¾à¦²à¦¾à¦‡à¦¯à¦¼à¦¾à¦•à¦¾à¦ªà¦°à¦—à§à¦²à§‹à¦¶à§à¦•à¦¾à¦‡à¦¯à¦¼à¦¾ à¦¦à§‡à¦“à§·');

-- --------------------------------------------------------

--
-- Table structure for table `total_production_cost_703_g`
--

CREATE TABLE IF NOT EXISTS `total_production_cost_703_g` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `areas_production_expenditure` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `sale_price_per_unit` varchar(100) DEFAULT NULL,
  `total_purchase_value` varchar(100) DEFAULT NULL,
  `source_agricultural_input` varchar(100) DEFAULT NULL,
  `other_source_agricultural_input` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_production_cost_703_g`
--

INSERT INTO `total_production_cost_703_g` (`id`, `interview_id`, `areas_production_expenditure`, `amount`, `unit`, `sale_price_per_unit`, `total_purchase_value`, `source_agricultural_input`, `other_source_agricultural_input`) VALUES
(1, 0, 'Seed', 'data[0][TotalProductionCost703G][amount]', 'data[0][TotalProductionCost703G][unit]', 'data[0][TotalProductionCost703G][sale_price_per_unit]', 'data[0][TotalProductionCost703G][total_purchase_value]', 'data[0][TotalProductionCost703G][source_agricultural_input]', NULL),
(2, 0, 'Urea', 'data[1][TotalProductionCost703G][amount]', 'data[1][TotalProductionCost703G][unit]', 'data[1][TotalProductionCost703G][sale_price_per_unit]', 'data[1][TotalProductionCost703G][total_purchase_value]', 'data[1][TotalProductionCost703G][source_agricultural_input]', NULL),
(3, 0, 'Potaseum', 'data[2][TotalProductionCost703G][amount]', 'data[2][TotalProductionCost703G][unit]', 'data[2][TotalProductionCost703G][sale_price_per_unit]', 'data[2][TotalProductionCost703G][total_purchase_value]', 'data[2][TotalProductionCost703G][source_agricultural_input]', NULL),
(4, 0, 'Gypsum', 'data[3][TotalProductionCost703G][amount]', 'data[3][TotalProductionCost703G][unit]', 'data[3][TotalProductionCost703G][sale_price_per_unit]', 'data[3][TotalProductionCost703G][total_purchase_value]', 'data[3][TotalProductionCost703G][source_agricultural_input]', NULL),
(5, 0, 'Others', 'data[4][TotalProductionCost703G][amount]', 'data[4][TotalProductionCost703G][unit]', 'data[4][TotalProductionCost703G][sale_price_per_unit]', 'data[4][TotalProductionCost703G][total_purchase_value]', 'data[4][TotalProductionCost703G][source_agricultural_input]', NULL),
(6, 0, 'Irrigation', 'data[5][TotalProductionCost703G][amount]', 'data[5][TotalProductionCost703G][unit]', 'data[5][TotalProductionCost703G][sale_price_per_unit]', 'data[5][TotalProductionCost703G][total_purchase_value]', 'data[5][TotalProductionCost703G][source_agricultural_input]', NULL),
(7, 0, 'Organic fertilizer', 'data[6][TotalProductionCost703G][amount]', 'data[6][TotalProductionCost703G][unit]', 'data[6][TotalProductionCost703G][sale_price_per_unit]', 'data[6][TotalProductionCost703G][total_purchase_value]', 'data[6][TotalProductionCost703G][source_agricultural_input]', NULL),
(8, 0, 'Insecticide', 'data[7][TotalProductionCost703G][amount]', 'data[7][TotalProductionCost703G][unit]', 'data[7][TotalProductionCost703G][sale_price_per_unit]', 'data[7][TotalProductionCost703G][total_purchase_value]', 'data[7][TotalProductionCost703G][source_agricultural_input]', NULL),
(9, 0, 'Rented machinery (Tractor)', 'data[8][TotalProductionCost703G][amount]', 'data[8][TotalProductionCost703G][unit]', 'data[8][TotalProductionCost703G][sale_price_per_unit]', 'data[8][TotalProductionCost703G][total_purchase_value]', 'data[8][TotalProductionCost703G][source_agricultural_input]', NULL),
(10, 0, 'Employing agricultural labour', 'data[9][TotalProductionCost703G][amount]', 'data[9][TotalProductionCost703G][unit]', 'data[9][TotalProductionCost703G][sale_price_per_unit]', 'data[9][TotalProductionCost703G][total_purchase_value]', 'data[9][TotalProductionCost703G][source_agricultural_input]', NULL),
(11, 0, 'Transportation and marketing', 'data[10][TotalProductionCost703G][amount]', 'data[10][TotalProductionCost703G][unit]', 'data[10][TotalProductionCost703G][sale_price_per_unit]', 'data[10][TotalProductionCost703G][total_purchase_value]', 'data[10][TotalProductionCost703G][source_agricultural_input]', NULL),
(12, 0, 'Other expenses (Please mention)', 'data[11][TotalProductionCost703G][amount]', 'data[11][TotalProductionCost703G][unit]', 'data[11][TotalProductionCost703G][sale_price_per_unit]', 'data[11][TotalProductionCost703G][total_purchase_value]', 'data[11][TotalProductionCost703G][source_agricultural_input]', NULL),
(13, 0, 'Other expenses (Please mention) ', 'data[12][TotalProductionCost703G][amount]', 'data[12][TotalProductionCost703G][unit]', 'data[12][TotalProductionCost703G][sale_price_per_unit]', 'data[12][TotalProductionCost703G][total_purchase_value]', 'data[12][TotalProductionCost703G][source_agricultural_input]', NULL),
(14, 5, 'Seed', 'emnitei', 'data[0][TotalProductionCost703G][unit]', 'data[0][TotalProductionCost703G][sale_price_per_unit]', 'data[0][TotalProductionCost703G][total_purchase_value]', '99', 'testetst'),
(15, 5, 'Urea', 'data[1][TotalProductionCost703G][amount]', 'data[1][TotalProductionCost703G][unit]', 'data[1][TotalProductionCost703G][sale_price_per_unit]', 'data[1][TotalProductionCost703G][total_purchase_value]', '01', ''),
(16, 5, 'Potaseum', 'data[2][TotalProductionCost703G][amount]', 'data[2][TotalProductionCost703G][unit]', 'data[2][TotalProductionCost703G][sale_price_per_unit]', 'data[2][TotalProductionCost703G][total_purchase_value]', '01', ''),
(17, 5, 'Gypsum', 'data[3][TotalProductionCost703G][amount]', 'data[3][TotalProductionCost703G][unit]', 'data[3][TotalProductionCost703G][sale_price_per_unit]', 'data[3][TotalProductionCost703G][total_purchase_value]', '01', ''),
(18, 5, 'Others', 'data[4][TotalProductionCost703G][amount]', 'data[4][TotalProductionCost703G][unit]', 'data[4][TotalProductionCost703G][sale_price_per_unit]', 'data[4][TotalProductionCost703G][total_purchase_value]', '01', ''),
(19, 5, 'Irrigation', 'data[5][TotalProductionCost703G][amount]', 'data[5][TotalProductionCost703G][unit]', 'data[5][TotalProductionCost703G][sale_price_per_unit]', 'data[5][TotalProductionCost703G][total_purchase_value]', '01', ''),
(20, 5, 'Organic fertilizer', 'data[6][TotalProductionCost703G][amount]', 'data[6][TotalProductionCost703G][unit]', 'data[6][TotalProductionCost703G][sale_price_per_unit]', 'data[6][TotalProductionCost703G][total_purchase_value]', '01', ''),
(21, 5, 'Insecticide', 'data[7][TotalProductionCost703G][amount]', 'data[7][TotalProductionCost703G][unit]', 'data[7][TotalProductionCost703G][sale_price_per_unit]', 'data[7][TotalProductionCost703G][total_purchase_value]', '01', ''),
(22, 5, 'Rented machinery (Tractor)', 'data[8][TotalProductionCost703G][amount]', 'data[8][TotalProductionCost703G][unit]', 'data[8][TotalProductionCost703G][sale_price_per_unit]', 'data[8][TotalProductionCost703G][total_purchase_value]', '01', ''),
(23, 5, 'Employing agricultural labour', 'data[9][TotalProductionCost703G][amount]', 'data[9][TotalProductionCost703G][unit]', 'data[9][TotalProductionCost703G][sale_price_per_unit]', 'data[9][TotalProductionCost703G][total_purchase_value]', '01', ''),
(24, 5, 'Transportation and marketing', 'data[10][TotalProductionCost703G][amount]', 'data[10][TotalProductionCost703G][unit]', 'data[10][TotalProductionCost703G][sale_price_per_unit]', 'data[10][TotalProductionCost703G][total_purchase_value]', '01', ''),
(25, 5, 'Other expenses (Please mention)', 'data[11][TotalProductionCost703G][amount]', 'data[11][TotalProductionCost703G][unit]', 'data[11][TotalProductionCost703G][sale_price_per_unit]', 'data[11][TotalProductionCost703G][total_purchase_value]', '01', ''),
(26, 5, 'Other expenses (Please mention) ', 'data[12][TotalProductionCost703G][amount]', 'data[12][TotalProductionCost703G][unit]', 'data[12][TotalProductionCost703G][sale_price_per_unit]', 'data[12][TotalProductionCost703G][total_purchase_value]', '01', '');

-- --------------------------------------------------------

--
-- Table structure for table `total_production_g`
--

CREATE TABLE IF NOT EXISTS `total_production_g` (
  `id` int(11) NOT NULL,
  `interview_id` int(11) DEFAULT NULL,
  `produced_crops_name` varchar(100) DEFAULT NULL,
  `amount_of_land` varchar(100) DEFAULT NULL,
  `amount_total_production` varchar(100) DEFAULT NULL,
  `production_unit` varchar(100) DEFAULT NULL,
  `own_use` varchar(100) DEFAULT NULL,
  `total_sale` varchar(100) DEFAULT NULL,
  `sale_price` varchar(100) DEFAULT NULL,
  `total_sale_price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_production_g`
--

INSERT INTO `total_production_g` (`id`, `interview_id`, `produced_crops_name`, `amount_of_land`, `amount_total_production`, `production_unit`, `own_use`, `total_sale`, `sale_price`, `total_sale_price`) VALUES
(1, 5, 'Aus', 'sylhet', 'data[Total_Production_Marker][0][TotalProductionG][amount_total_production]', 'data[Total_Production_Marker][0][TotalProductionG][production_unit]', 'data[Total_Production_Marker][0][TotalProductionG][own_use]', 'data[Total_Production_Marker][0][TotalProductionG][total_sale]', 'data[Total_Production_Marker][0][TotalProductionG][sale_price]', 'data[Total_Production_Marker][0][TotalProductionG][total_sale_price]'),
(2, 5, 'Aman', 'data[Total_Production_Marker][1][TotalProductionG][amount_of_land]', 'data[Total_Production_Marker][1][TotalProductionG][amount_total_production]', 'data[Total_Production_Marker][1][TotalProductionG][production_unit]', 'data[Total_Production_Marker][1][TotalProductionG][own_use]', 'data[Total_Production_Marker][1][TotalProductionG][total_sale]', 'data[Total_Production_Marker][1][TotalProductionG][sale_price]', 'data[Total_Production_Marker][1][TotalProductionG][total_sale_price]'),
(3, 5, 'Boro', 'data[Total_Production_Marker][2][TotalProductionG][amount_of_land]', 'data[Total_Production_Marker][2][TotalProductionG][amount_total_production]', 'data[Total_Production_Marker][2][TotalProductionG][production_unit]', 'data[Total_Production_Marker][2][TotalProductionG][own_use]', 'data[Total_Production_Marker][2][TotalProductionG][total_sale]', 'data[Total_Production_Marker][2][TotalProductionG][sale_price]', 'data[Total_Production_Marker][2][TotalProductionG][total_sale_price]'),
(4, 5, 'Wheat', 'data[Total_Production_Marker][3][TotalProductionG][amount_of_land]', 'data[Total_Production_Marker][3][TotalProductionG][amount_total_production]', 'data[Total_Production_Marker][3][TotalProductionG][production_unit]', 'data[Total_Production_Marker][3][TotalProductionG][own_use]', 'data[Total_Production_Marker][3][TotalProductionG][total_sale]', 'data[Total_Production_Marker][3][TotalProductionG][sale_price]', 'data[Total_Production_Marker][3][TotalProductionG][total_sale_price]'),
(5, 5, 'Mustard', 'data[Total_Production_Marker][4][TotalProductionG][amount_of_land]', 'data[Total_Production_Marker][4][TotalProductionG][amount_total_production]', 'data[Total_Production_Marker][4][TotalProductionG][production_unit]', 'data[Total_Production_Marker][4][TotalProductionG][own_use]', 'data[Total_Production_Marker][4][TotalProductionG][total_sale]', 'data[Total_Production_Marker][4][TotalProductionG][sale_price]', 'data[Total_Production_Marker][4][TotalProductionG][total_sale_price]'),
(6, 5, 'Others__', 'data[Total_Production_Marker][5][TotalProductionG][amount_of_land]', 'data[Total_Production_Marker][5][TotalProductionG][amount_total_production]', 'data[Total_Production_Marker][5][TotalProductionG][production_unit]', 'data[Total_Production_Marker][5][TotalProductionG][own_use]', 'data[Total_Production_Marker][5][TotalProductionG][total_sale]', 'data[Total_Production_Marker][5][TotalProductionG][sale_price]', 'data[Total_Production_Marker][5][TotalProductionG][total_sale_price]'),
(7, 5, 'Others__', 'data[Total_Production_Marker][6][TotalProductionG][amount_of_land]', 'data[Total_Production_Marker][6][TotalProductionG][amount_total_production]', 'data[Total_Production_Marker][6][TotalProductionG][production_unit]', 'data[Total_Production_Marker][6][TotalProductionG][own_use]', 'data[Total_Production_Marker][6][TotalProductionG][total_sale]', 'data[Total_Production_Marker][6][TotalProductionG][sale_price]', 'data[Total_Production_Marker][6][TotalProductionG][total_sale_price]');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` char(36) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `verified_code` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinytext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role_id`, `verified_code`, `created`, `modified`, `status`) VALUES
('53155fa7-0ce4-4508-8ccc-0e8ef8defb25', 'admin', 'f9f48bce68c0d0a5b493b7c23db1d9a96e2c3638', 'it06016@gmail.com', '53141664-f3c4-4696-b2b2-0d49f8defb25', 5745, '2014-03-04 11:07:51', '2015-02-22 18:16:38', 'active'),
('5469d5f0-50e8-47e6-83fc-0ad8f8defb25', 'shahin@gmail.com', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'shahin@gmail.com', '', 0, '2014-11-17 17:03:12', '2014-11-17 17:03:12', ''),
('54e95ba8-9b98-4487-95e5-0558f8defb25', 'linguistics', '02dfb29be7cab428c33b77cabbcbbbbd8519afca', 'lin@gmail.com', '54e95830-d13c-42ad-814c-0558f8defb25', 0, '2015-02-22 10:31:36', '2015-02-25 17:17:08', 'active'),
('54e95cb5-b6dc-490b-81da-0558f8defb25', 'household', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'hh@gmail.com', '54e95858-0a34-4b31-8c75-0558f8defb25', 0, '2015-02-22 10:36:05', '2015-02-22 10:36:05', 'active'),
('54e95d02-a6b4-4098-aafc-0558f8defb25', 'community', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'community@gmail.com', '54e95872-abbc-4f70-98c7-0558f8defb25', 0, '2015-02-22 10:37:22', '2015-02-22 10:37:22', 'active'),
('54e9a05b-f0a4-4916-8f31-7141c0b99bfc', 'cultural', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'cultural@gmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-02-22 15:24:43', '2015-02-22 15:24:43', 'active'),
('54e9a267-0424-4b98-8ff9-0f57c0b99bfc', 'language', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'sh@gmail.com', '54e95830-d13c-42ad-814c-0558f8defb25', 0, '2015-02-22 15:33:27', '2015-02-22 15:33:27', 'active'),
('54eda055-cb04-4292-864d-2dd8c0b99bfc', 'jabedin', '526aca5cd316bec03288e4f801af87b7a67c17a0', 'abedin@gmail.com', '54e95830-d13c-42ad-814c-0558f8defb25', 0, '2015-02-25 16:13:41', '2015-02-25 16:13:41', 'active'),
('54eda0f5-f6f0-43b4-8674-382fc0b99bfc', 'hridoyorheart', '691f54aac37311de3d34a03d551450daf334ce87', 'hridoyorheart@yahoo.com', '54e95830-d13c-42ad-814c-0558f8defb25', 0, '2015-02-25 16:16:21', '2015-02-25 16:16:21', 'active'),
('54eda16e-d614-4bb1-82d2-3fe4c0b99bfc', 'hazzatshohag', 'b812cdc2344c3cd77083788aec8ce4295f3fb083', 'Hazzatshohag@gmail.com', '54e95830-d13c-42ad-814c-0558f8defb25', 0, '2015-02-25 16:18:22', '2015-02-26 12:10:30', 'active'),
('54eda1ea-79dc-4859-bdf8-4765c0b99bfc', 'daloardipu', 'e4f51515041e8c67dc5747afe7d7629118ed9b83', 'daloardipu@yahoo.com', '54e95830-d13c-42ad-814c-0558f8defb25', 0, '2015-02-25 16:20:26', '2015-02-25 16:20:26', 'active'),
('54eda273-914c-4bcd-ad00-5024c0b99bfc', 'sanyuzzaman', '669a0c38068eed44221ad1282466494527e9e2a5', 'sanyuzzaman.354@gmail.com', '54e95830-d13c-42ad-814c-0558f8defb25', 0, '2015-02-25 16:22:43', '2015-02-26 12:09:06', 'active'),
('54eda2dc-4ec4-461c-8795-5620c0b99bfc', 'amolkosh', 'b0d2160371d6c5bbbf2e11fa00347709643e01b6', 'amol.kosh@yahoo.com', '54e95830-d13c-42ad-814c-0558f8defb25', 0, '2015-02-25 16:24:28', '2015-02-26 12:11:04', 'active'),
('54eda329-5724-47ba-8713-5a8cc0b99bfc', 'bsrangsa', '72ba76b0a4aa129ec876df973ba2dca6aa5d0fc7', 'bsrangsa@gmail.com', '54e95830-d13c-42ad-814c-0558f8defb25', 0, '2015-02-25 16:25:45', '2015-02-26 12:09:55', 'active'),
('54eda3e3-b9b8-4e1f-9af1-64dac0b99bfc', 'gaffar88du', 'd711ee52b3a7ef370e83885439f5833b6b959887', 'gaffar88du@gmail.com', '54e95830-d13c-42ad-814c-0558f8defb25', 0, '2015-02-25 16:28:51', '2015-02-25 16:28:51', 'active'),
('54eed9aa-881c-475d-a8db-0448c0b99bfc', 'research', '5da844d5fe3399814c4f60f7671b1c1bd1dfbd3d', 'asad.du.ac.bd@gmail.com', '54e95830-d13c-42ad-814c-0558f8defb25', 0, '2015-02-26 14:30:34', '2015-02-26 14:30:34', 'active'),
('54eedf87-d370-483e-af78-52f5c0b99bfc', 'kamal Chowdhury', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'kamalch57@yahoo.com', '53141664-f3c4-4696-b2b2-0d49f8defb25', 0, '2015-02-26 14:55:35', '2015-02-26 14:55:35', 'active'),
('54f4603f-3218-4727-90cf-0ff7c0b99bfc', 'devmrinal', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'dev.mrinal@hotmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-02 19:06:07', '2015-03-03 19:50:06', 'active'),
('54f46074-c458-4c68-ad0f-12a7c0b99bfc', 'salma_akter27', '1a2a69280684c5cb64cccfe8ef451565d79c7fca', 'salma_akter27@yahoo.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-02 19:07:00', '2015-03-02 19:15:58', 'active'),
('54f460ab-638c-4949-ab8d-1583c0b99bfc', 'harry', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'harry@sustnews24.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-02 19:07:55', '2015-03-03 19:49:22', 'active'),
('54f460d7-1878-4271-b50c-17afc0b99bfc', 'anpdipu08', 'c7c5324d55126e99a16d3f2fc0d1576a9aad6e95', 'anp.dipu08@yahoo.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-02 19:08:39', '2015-03-03 19:44:08', 'active'),
('54f4611c-9bb4-43df-a91f-1bacc0b99bfc', 'sayedsust', '60234d6797dd239360400d261b14622e3c61722d', 'syed.sust.anp@gmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-02 19:09:48', '2015-03-03 19:45:26', 'active'),
('54f4614f-ef48-4e95-bdfa-1f36c0b99bfc', 'aliahmed', '9908bdb2fb8fd2cb797c2c23cf08faacf7e54a60', 'aliahmedanp71@gmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-02 19:10:39', '2015-03-03 19:53:55', 'active'),
('54f46178-436c-42a5-8b48-21efc0b99bfc', 'mdtusar90', 'a9715ab4f098276d7c65dadcd586adf01b7092e2', 'md.tusar90@gmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-02 19:11:20', '2015-03-03 19:47:41', 'active'),
('54f461a2-ae80-47c7-b12c-2550c0b99bfc', 'razibru28', 'a0f31ffa80f64a7b5961ba98340b9ce143154b63', 'razib.ru28@gmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-02 19:12:02', '2015-03-03 19:52:47', 'active'),
('54f461d7-ed84-4593-a1cb-2831c0b99bfc', 'rahmanshajib', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'rahman.shajib@gmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-02 19:12:55', '2015-03-03 19:51:14', 'active'),
('54f46240-06a4-4365-8d4e-2d14c0b99bfc', 'amitdutta', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'amitdutta@gmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-02 19:14:40', '2015-03-03 19:40:50', 'active'),
('54f5b600-e1a4-4fa9-a6e3-2449c0b99bfc', 'srabonshadeq', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'srabonshadeq@gmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-03 19:24:16', '2015-03-03 19:39:23', 'active'),
('54f5b67e-a054-4d41-8191-2f4dc0b99bfc', 'sifatky', '1b8442a965ffec1668b20d67e706dbfa21b8c676', 'sifat.ky@gmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-03 19:26:22', '2015-03-03 19:42:17', 'active'),
('54f5b709-60b0-4b9a-8e46-395ec0b99bfc', 'robin7sarol', 'd9cc947a8739912147905352db5ac4092f10f3d8', 'robin7sarol@gmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-03 19:28:41', '2015-03-03 19:28:41', 'active'),
('54f5b776-eba0-4004-b87f-423ac0b99bfc', 'rubaiethossain', '382e4e159edb641a85fde94ac1267717526e0eb1', 'rubaiet.hossain@gmail.com', '54e9a01d-ea00-42a6-ab97-6d97c0b99bfc', 0, '2015-03-03 19:30:30', '2015-03-03 19:46:46', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `wf_process`
--

CREATE TABLE IF NOT EXISTS `wf_process` (
  `id` int(11) NOT NULL,
  `wf_process_title` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `ipa_word` varchar(100) DEFAULT NULL,
  `bangla_equivalent` varchar(100) DEFAULT NULL,
  `personnel_information_id` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wf_process`
--

INSERT INTO `wf_process` (`id`, `wf_process_title`, `status`, `ipa_word`, `bangla_equivalent`, `personnel_information_id`) VALUES
(1, 'Prefixation', 0, 'a', 'b', '2'),
(2, 'Suffixation', 1, 'a', 'b', '2'),
(3, 'Infixation', 1, 'a', 'b', '2'),
(4, 'Circumfixation', 0, 'a', 'b', '2'),
(5, 'Prfixal-Sufixal Derivation', 0, 'a', 'b', '2'),
(6, 'Prefixal-Infixal Derivation', 1, 'a', 'b', '2'),
(7, 'Infixal-Sufixal Derivation', 0, 'a', 'b', '2'),
(8, 'Root-and-Pattern Derivation (Transfixation)', 1, 'a', 'b', '2'),
(9, 'Vowel alternation', 0, 'a', 'b', '2'),
(10, 'Prefixation With Vowel alternation', 1, 'a', 'b', '2'),
(11, 'Suffixation With Vowel alternation', 0, 'a', 'b', '2'),
(12, 'Consonant alternation', 1, 'a', 'b', '2'),
(13, 'Compounding', 0, 'a', 'b', '2'),
(14, 'Incorporation', 1, 'a', 'b', '2'),
(15, 'Reduplication', 0, 'a', 'b', '2'),
(16, 'Conversion', 1, 'a', 'b', '2'),
(17, 'Back formation/Subtraction', 0, 'a', 'bb', '2'),
(18, 'Blending', 1, 'a', 'b', '2'),
(19, 'Clipping', 0, 'a', 'b', '2'),
(20, 'Other productive process', 1, 'a', 'b', '2'),
(21, 'Prefixation', 0, 'nÉ”habo', 'à¦¨à¦¹à¦¾à§‡à¦¬à¦¾', '18'),
(22, 'Suffixation', 0, 'tÌªimÉ”tÌªgila', 'à¦¤à¦¿à¦®à¦¤à¦—à¦¿à¦²à¦¾', '18'),
(23, 'Infixation', 1, '', '', '18'),
(24, 'Circumfixation', NULL, '', '', '18'),
(25, 'Prfixal-Sufixal Derivation', NULL, '', '', '18'),
(26, 'Prefixal-Infixal Derivation', NULL, '', '', '18'),
(27, 'Infixal-Sufixal Derivation', NULL, '', '', '18'),
(28, 'Root-and-Pattern Derivation (Transfixation)', 0, 'baÉŸargÊ±at', 'à¦¬à¦¾à¦œà¦¾à¦°à¦˜à¦¾à¦Ÿ', '18'),
(29, 'Vowel alternation', 1, '', '', '18'),
(30, 'Prefixation With Vowel alternation', NULL, '', '', '18'),
(31, 'Suffixation With Vowel alternation', NULL, '', '', '18'),
(32, 'Consonant alternation', NULL, '', '', '18'),
(33, 'Compounding', NULL, '', '', '18'),
(34, 'Incorporation', NULL, '', '', '18'),
(35, 'Reduplication', NULL, '', '', '18'),
(36, 'Conversion', 0, 'kandÌªadokra', 'à¦•à¦¾à¦¨à§à¦¦à¦¾-à¦¡à§‹à¦•à¦°à¦¾', '18'),
(37, 'Back formation/Subtraction', NULL, '', '', '18'),
(38, 'Blending', NULL, '', '', '18'),
(39, 'Clipping', NULL, '', '', '18'),
(40, 'Other productive process', NULL, '', '', '18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorized_menus`
--
ALTER TABLE `authorized_menus`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `community_interview`
--
ALTER TABLE `community_interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_question_701`
--
ALTER TABLE `community_question_701`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_question_702`
--
ALTER TABLE `community_question_702`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_b1_parts`
--
ALTER TABLE `community_section_b_b1_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_b2_location`
--
ALTER TABLE `community_section_b_b2_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_b3_infrastructure`
--
ALTER TABLE `community_section_b_b3_infrastructure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_b3_infrastructure_second_parts`
--
ALTER TABLE `community_section_b_b3_infrastructure_second_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_b4_demographics`
--
ALTER TABLE `community_section_b_b4_demographics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_b4_demographic_second_parts`
--
ALTER TABLE `community_section_b_b4_demographic_second_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_b5_ethnic_cultural_unit_part_fifth`
--
ALTER TABLE `community_section_b_b5_ethnic_cultural_unit_part_fifth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_b5_ethnic_cultural_unit_part_forth`
--
ALTER TABLE `community_section_b_b5_ethnic_cultural_unit_part_forth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_b5_ethnic_cultural_unit_part_one`
--
ALTER TABLE `community_section_b_b5_ethnic_cultural_unit_part_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_b5_ethnic_cultural_unit_part_three`
--
ALTER TABLE `community_section_b_b5_ethnic_cultural_unit_part_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_b5_ethnic_cultural_unit_part_two`
--
ALTER TABLE `community_section_b_b5_ethnic_cultural_unit_part_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_second_part`
--
ALTER TABLE `community_section_b_second_part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_b_third_part`
--
ALTER TABLE `community_section_b_third_part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_c_part_one`
--
ALTER TABLE `community_section_c_part_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_c_part_three`
--
ALTER TABLE `community_section_c_part_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_section_c_part_two`
--
ALTER TABLE `community_section_c_part_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comm_section_d_dropdown`
--
ALTER TABLE `comm_section_d_dropdown`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comparaison_marker`
--
ALTER TABLE `comparaison_marker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com_section_d_402`
--
ALTER TABLE `com_section_d_402`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `difference_list`
--
ALTER TABLE `difference_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domain_language_tongue`
--
ALTER TABLE `domain_language_tongue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dominions`
--
ALTER TABLE `dominions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_of_consonant_sounds`
--
ALTER TABLE `feature_of_consonant_sounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_of_vowel_sounds`
--
ALTER TABLE `feature_of_vowel_sounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `household_section_g5_711`
--
ALTER TABLE `household_section_g5_711`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `household_section_g6_712`
--
ALTER TABLE `household_section_g6_712`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `household_section_g7_713`
--
ALTER TABLE `household_section_g7_713`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material_language`
--
ALTER TABLE `material_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `morphology`
--
ALTER TABLE `morphology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numbers_gender`
--
ALTER TABLE `numbers_gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_use`
--
ALTER TABLE `office_use`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oral_literature`
--
ALTER TABLE `oral_literature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD KEY `id` (`id`);

--
-- Indexes for table `personnel_informations`
--
ALTER TABLE `personnel_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phonetic_sound_samples`
--
ALTER TABLE `phonetic_sound_samples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_type`
--
ALTER TABLE `question_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectiond_householdinfo`
--
ALTER TABLE `sectiond_householdinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_705`
--
ALTER TABLE `section_705`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_706`
--
ALTER TABLE `section_706`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_707`
--
ALTER TABLE `section_707`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_708`
--
ALTER TABLE `section_708`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_709`
--
ALTER TABLE `section_709`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_710`
--
ALTER TABLE `section_710`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_g_a`
--
ALTER TABLE `section_g_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_h`
--
ALTER TABLE `section_h`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_i_food_consumption`
--
ALTER TABLE `section_i_food_consumption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_j`
--
ALTER TABLE `section_j`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_question_answer_cultural`
--
ALTER TABLE `section_question_answer_cultural`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semi_vowels`
--
ALTER TABLE `semi_vowels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sentence_type`
--
ALTER TABLE `sentence_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socio_culture`
--
ALTER TABLE `socio_culture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_production_cost_703_g`
--
ALTER TABLE `total_production_cost_703_g`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_production_g`
--
ALTER TABLE `total_production_g`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `wf_process`
--
ALTER TABLE `wf_process`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `community_interview`
--
ALTER TABLE `community_interview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `community_question_701`
--
ALTER TABLE `community_question_701`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `community_question_702`
--
ALTER TABLE `community_question_702`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `community_section_b_b1_parts`
--
ALTER TABLE `community_section_b_b1_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `community_section_b_b2_location`
--
ALTER TABLE `community_section_b_b2_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `community_section_b_b3_infrastructure`
--
ALTER TABLE `community_section_b_b3_infrastructure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `community_section_b_b3_infrastructure_second_parts`
--
ALTER TABLE `community_section_b_b3_infrastructure_second_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `community_section_b_b4_demographics`
--
ALTER TABLE `community_section_b_b4_demographics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `community_section_b_b4_demographic_second_parts`
--
ALTER TABLE `community_section_b_b4_demographic_second_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `community_section_b_b5_ethnic_cultural_unit_part_fifth`
--
ALTER TABLE `community_section_b_b5_ethnic_cultural_unit_part_fifth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `community_section_b_b5_ethnic_cultural_unit_part_forth`
--
ALTER TABLE `community_section_b_b5_ethnic_cultural_unit_part_forth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `community_section_b_b5_ethnic_cultural_unit_part_one`
--
ALTER TABLE `community_section_b_b5_ethnic_cultural_unit_part_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `community_section_b_b5_ethnic_cultural_unit_part_three`
--
ALTER TABLE `community_section_b_b5_ethnic_cultural_unit_part_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `community_section_b_b5_ethnic_cultural_unit_part_two`
--
ALTER TABLE `community_section_b_b5_ethnic_cultural_unit_part_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `community_section_b_second_part`
--
ALTER TABLE `community_section_b_second_part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `community_section_b_third_part`
--
ALTER TABLE `community_section_b_third_part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `community_section_c_part_one`
--
ALTER TABLE `community_section_c_part_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `community_section_c_part_three`
--
ALTER TABLE `community_section_c_part_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `community_section_c_part_two`
--
ALTER TABLE `community_section_c_part_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `comm_section_d_dropdown`
--
ALTER TABLE `comm_section_d_dropdown`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comparaison_marker`
--
ALTER TABLE `comparaison_marker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `com_section_d_402`
--
ALTER TABLE `com_section_d_402`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `difference_list`
--
ALTER TABLE `difference_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `domain_language_tongue`
--
ALTER TABLE `domain_language_tongue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `feature_of_consonant_sounds`
--
ALTER TABLE `feature_of_consonant_sounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feature_of_vowel_sounds`
--
ALTER TABLE `feature_of_vowel_sounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `household_section_g5_711`
--
ALTER TABLE `household_section_g5_711`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `household_section_g6_712`
--
ALTER TABLE `household_section_g6_712`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `household_section_g7_713`
--
ALTER TABLE `household_section_g7_713`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `material_language`
--
ALTER TABLE `material_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `morphology`
--
ALTER TABLE `morphology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=838;
--
-- AUTO_INCREMENT for table `numbers_gender`
--
ALTER TABLE `numbers_gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `office_use`
--
ALTER TABLE `office_use`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `oral_literature`
--
ALTER TABLE `oral_literature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `personnel_informations`
--
ALTER TABLE `personnel_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `phonetic_sound_samples`
--
ALTER TABLE `phonetic_sound_samples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT for table `question_type`
--
ALTER TABLE `question_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sectiond_householdinfo`
--
ALTER TABLE `sectiond_householdinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `section_705`
--
ALTER TABLE `section_705`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `section_706`
--
ALTER TABLE `section_706`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `section_707`
--
ALTER TABLE `section_707`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `section_708`
--
ALTER TABLE `section_708`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `section_709`
--
ALTER TABLE `section_709`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `section_710`
--
ALTER TABLE `section_710`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `section_g_a`
--
ALTER TABLE `section_g_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `section_h`
--
ALTER TABLE `section_h`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `section_i_food_consumption`
--
ALTER TABLE `section_i_food_consumption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `section_j`
--
ALTER TABLE `section_j`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `section_question_answer_cultural`
--
ALTER TABLE `section_question_answer_cultural`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=172;
--
-- AUTO_INCREMENT for table `semi_vowels`
--
ALTER TABLE `semi_vowels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `sentence_type`
--
ALTER TABLE `sentence_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `socio_culture`
--
ALTER TABLE `socio_culture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=331;
--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `total_production_cost_703_g`
--
ALTER TABLE `total_production_cost_703_g`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `total_production_g`
--
ALTER TABLE `total_production_g`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `wf_process`
--
ALTER TABLE `wf_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
