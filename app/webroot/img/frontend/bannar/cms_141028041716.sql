-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2014 at 09:59 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ns_riksha_paint`
--
CREATE DATABASE IF NOT EXISTS `ns_riksha_paint` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ns_riksha_paint`;

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` char(36) NOT NULL,
  `type` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `slug`, `image`, `created`, `modified`) VALUES
('5448ecfe-5890-4584-a94b-0fb0f8defb25', 'Md. Rafique', '', '/img/frontend/artists/thumb/Artist_image_141023055645.jpg', '2014-10-23 17:56:46', '2014-10-23 17:56:46'),
('544c66f6-8448-49a2-911f-0f34f8defb25', 'Md. Tanvir', '', '/img/frontend/artists/thumb/Artist_image_141026091357.jpg', '2014-10-26 09:13:58', '2014-10-26 09:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `authorized_menus`
--

CREATE TABLE IF NOT EXISTS `authorized_menus` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `dominion_id` char(36) DEFAULT NULL,
  `process_id` char(36) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` tinytext NOT NULL,
  `order` int(3) NOT NULL DEFAULT '0',
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorized_menus`
--

INSERT INTO `authorized_menus` (`id`, `name`, `parent_id`, `dominion_id`, `process_id`, `icon`, `status`, `order`) VALUES
('5316b032-44a4-4390-a78b-0936f8defb25', 'Site Management', '', '', NULL, '<i class="fa fa-sitemap icon"> <b class="bg-danger"></b> </i>', 'active', 0),
('5316b33d-d7c4-4d38-8cf4-053af8defb25', 'Contents', '5316b032-44a4-4390-a78b-0936f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141a04-2238-4e14-91d4-0b96f8defb25', '<i class="fa fa-file-text-o icon"> <b class="bg-primary dker"></b> </i>', 'active', 1),
('5316b39d-0c88-4fce-a678-0938f8defb25', 'Menus', '5316b032-44a4-4390-a78b-0936f8defb25', '531566be-47bc-4366-b244-091ff8defb25', '531566ce-aa0c-4260-b7c7-0dd4f8defb25', '<i class="fa fa-link icon"> <b class="bg-success"></b> </i>', 'active', 2),
('5316b435-3894-4902-91aa-0536f8defb25', 'User Management', '', '', '5316b533-a40c-44e7-a5e4-0930f8defb25', '<i class="fa fa-user icon"> <b class="bg-primary"></b> </i>', 'active', 1),
('5316b475-54b8-41a0-93bf-053af8defb25', 'User List', '5316b435-3894-4902-91aa-0536f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b533-a40c-44e7-a5e4-0930f8defb25', '<i class="fa fa-angle-right icon"></i> ', 'active', 0),
('5316e2b8-a698-4dcd-b766-3d2bf8defb25', 'Dominions', '5316b435-3894-4902-91aa-0536f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b4ff-f604-4ccc-acdc-0a4af8defb25', '<i class="fa fa-angle-right icon"></i> ', 'inactive', 0),
('5316e364-e244-4acd-a667-3f83f8defb25', 'Authorized Menus', '5316b435-3894-4902-91aa-0536f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e308-f4d4-4e3b-9d3e-3d2ff8defb25', '<i class="fa fa-angle-right icon"></i>', 'inactive', 0),
('5316e504-a540-4773-8611-3d2bf8defb25', 'Role List', '5316b435-3894-4902-91aa-0536f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4ae-3388-4e53-b826-3e22f8defb25', '<i class="fa fa-angle-right icon"></i>', 'inactive', 0),
('5316e593-3a2c-4631-bd7f-3d2ff8defb25', 'Sliders', '5316b032-44a4-4390-a78b-0936f8defb25', '531415e6-4208-43ca-9440-0b96f8defb25', '5315664d-5094-4065-9fbd-0927f8defb25', '<i class="fa fa-camera icon"> <b class="bg-info"></b> </i>', 'active', 5),
('5316e6ca-4f00-4b2e-b60c-3e23f8defb25', 'Social Link', '5316b032-44a4-4390-a78b-0936f8defb25', '531568ef-f7c8-45fa-81f4-091ff8defb25', '531568fa-8c34-459d-aa7b-0f96f8defb25', '<i class="fa fa-share-square-o icon"> <b class="bg-info"></b> </i>', 'active', 7),
('5316e71b-3790-4804-9442-3d2df8defb25', 'Site Settings', '', '5316e744-af6c-4608-b381-3e52f8defb25', '5316f452-b4b0-4970-b685-40f2f8defb25', '<i class="fa fa-cogs icon"> <b class="bg-danger"></b> </i>', 'active', 2),
('5327e1bf-efa8-4012-bff6-0da8f8defb25', 'News Manager', '5316b032-44a4-4390-a78b-0936f8defb25', '5327e0bf-f4cc-4b40-880b-0da3f8defb25', '5327e0fa-15a8-4310-afd1-0e12f8defb25', '<i class="fa fa-bullhorn icon"> <b class="bg-info"></b> </i>', 'active', 6),
('54465099-4d98-416e-ba68-16c8f8defb25', 'Paints', '5316b032-44a4-4390-a78b-0936f8defb25', '5446502c-0558-48cb-a9d5-16c8f8defb25', '544f4cad-dafc-42ee-8468-0e8cf8defb25', '<i class="fa fa-picture-o icon"> <b class="bg-danger"></b> </i>', 'active', 4),
('5448cfa6-be64-4f71-a98b-0fb0f8defb25', 'Artists', '5316b032-44a4-4390-a78b-0936f8defb25', '5448cef0-3920-4d59-84ae-0fb0f8defb25', '544f4c9c-1008-4283-aaa9-0e8cf8defb25', '<i class="fa fa-users icon"> <b class="bg-success"></b> </i>', 'active', 3);

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE IF NOT EXISTS `configurations` (
  `id` char(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `google_analytics` varchar(255) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `address` text,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `google_location` longtext NOT NULL,
  `status` tinytext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `title`, `slogan`, `meta_keywords`, `meta_description`, `google_analytics`, `domain`, `contact_email`, `address`, `phone`, `fax`, `google_location`, `status`, `created`, `modified`) VALUES
('52f85cf6-4ebc-4be9-b7d6-1064f8defb25', 'Riksha Paint', 'Riksha Paint', 'Riksha Paint', 'Riksha Paint', '', 'www.bopiloil.com', 'leo@nogorsolutions.com', 'Dhaka', '+88 01912252095 ', ' +88 02 9142995', '<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=road+No+8,+Niketon,+Gulshan+1,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=&amp;sll=23.788212,90.403554&amp;sspn=0.011624,0.020084&amp;ie=UTF8&amp;hq=&amp;hnear=Road+No+8,+Gulshan,+Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.788212,90.403554&amp;spn=0.011625,0.020084&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=road+No+8,+Niketon,+Gulshan+1,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=&amp;sll=23.788212,90.403554&amp;sspn=0.011624,0.020084&amp;ie=UTF8&amp;hq=&amp;hnear=Road+No+8,+Gulshan,+Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.788212,90.403554&amp;spn=0.011625,0.020084&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>', '', '2014-02-10 11:00:38', '2014-10-28 14:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` char(36) NOT NULL,
  `menu_id` char(36) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `status` tinytext CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `slug`, `description`, `image`, `path`, `status`, `created`, `modified`) VALUES
('53243574-0ebc-4636-8412-15f9f8defb25', '', 'Introduction', 'introduction-2', '<p>Basumati Oasis Petroleum Industries Limited (BOPIL) is foreign joint venture multinational manufacturing company in Bangladesh established in Savar, Dhaka in 2012. Basumati is a renowned group of companies in Bangladesh tagged with Oasis, which is a leading edge supplier of lubricants technology, marketing a wide range of products around the globe. The superior performance of Oasis products is a result of many decades of pioneering technology and applied research, which enables BOPIL to uphold its status as quality manufacturer. BOPIL&acirc;&euro;&trade;s quality lubricants have been specifically to meet the demanding requirements of a wide range of plant and equipment used in most sectors of the economy and this handbook provides detailed information on the international range of Industrial and marine products. The performance features, performance levels and key properties and described in such a manner as to aid appropriate lubricant selection.</p>\r\n\r\n<p>Every effort has been made to ensure that the information is up-to-date and accurate. It should be pointed out, however, that typical values quoted for lubricants physical properties may vary within a specific range one-production batch to another, All products marketed by BOPIL, however, confirm to BOPIL&nbsp; strict internal quality requirements, which are of the highest international standard.</p>\r\n\r\n<p>At BOPIL, R &amp; D is a continuous process with dedicated efforts for improvising the existing standards with the help of sophisticated technology in order to improve not only the performance but also the environmental compatibility to top it all. We have a well-organized and well-implemented quality control system empowering local and foreign expertise to ensure that the specified quality is achieved at every stage of production. Each and every batch, which leaves the plant, is checked and tested in a well-equipped laboratory to ensure that the finished product meets all the international standards and specifications. It should also be made clear that product recommendations are, by necessity, made in general terms and should never take precedence over any recommendation made by the original equipment manufacturer. Our technical service engineers provide comprehensive technical advice training and services to our valued customers regarding various applications of oli products in different types of machineries and processes as and when required.</p>\r\n', '/img/frontend/content/Content_image_141022032819.jpg', NULL, 'published', '2014-03-15 17:11:48', '2014-10-22 15:28:19'),
('532436c0-8f9c-448a-80e4-14def8defb25', '', 'Mission', 'mission', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', NULL, 'published', '2014-03-15 17:17:20', '2014-03-15 17:17:20'),
('532436d5-0d00-4760-903c-1635f8defb25', '', 'Vision', 'vision', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', NULL, 'published', '2014-03-15 17:17:41', '2014-03-15 17:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `content_files`
--

CREATE TABLE IF NOT EXISTS `content_files` (
  `id` char(36) NOT NULL,
  `content_id` char(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content_file` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_files`
--

INSERT INTO `content_files` (`id`, `content_id`, `title`, `content_file`, `created`, `modified`) VALUES
('54252940-9a3c-48cd-b038-1210f8defb25', '53243574-0ebc-4636-8412-15f9f8defb25', 'Pdf File test', '/files/content_file/content_file_140926025216.pdf', '2014-09-26 14:52:16', '2014-09-26 19:15:01');

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
('53141426-c1cc-4306-8412-0ba8f8defb25', 'Contents'),
('53141523-59b0-47b8-8dde-0931f8defb25', 'FileManagers'),
('53141538-5218-463c-af25-0ba8f8defb25', 'PageMakers'),
('53141548-b7a8-4afd-8d92-0b96f8defb25', 'PageManagers'),
('53141557-020c-4f2f-b628-0d43f8defb25', 'Pages'),
('53141565-e924-4ee7-b6ba-0939f8defb25', 'Permissions'),
('5314157b-58f8-43f6-a8d8-04d6f8defb25', 'PhotoGalleries'),
('531415b5-62d0-4d99-958b-0d48f8defb25', 'Photos'),
('531415c7-d874-48b5-9b69-0931f8defb25', 'Profiles'),
('531415d5-053c-454c-a150-0ba8f8defb25', 'SliderContents'),
('531415e6-4208-43ca-9440-0b96f8defb25', 'Sliders'),
('531415ff-0e3c-42d9-b5e2-0d43f8defb25', 'Users'),
('5314160e-1778-43a1-8d3e-0939f8defb25', 'Configurations'),
('531566be-47bc-4366-b244-091ff8defb25', 'Menus'),
('531568ef-f7c8-45fa-81f4-091ff8defb25', 'SocialLinks'),
('5316b4f6-80c4-4e4b-be27-0936f8defb25', 'Dominions'),
('5316e2f3-ac88-4b7c-923c-3e23f8defb25', 'AuthorizedMenus'),
('5316e4a7-965c-4213-9cab-3e22f8defb25', 'Roles'),
('5316e744-af6c-4608-b381-3e52f8defb25', 'configurations'),
('5327e0bf-f4cc-4b40-880b-0da3f8defb25', 'News'),
('5329203f-7484-47ae-b37e-0af2f8defb25', 'Activities'),
('5446502c-0558-48cb-a9d5-16c8f8defb25', 'Paints'),
('5448cef0-3920-4d59-84ae-0fb0f8defb25', 'Artists');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` char(36) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text,
  `bannar` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `meta_tag` text,
  `meta_description` text,
  `status` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `type`, `position`, `title`, `slug`, `description`, `bannar`, `url`, `meta_tag`, `meta_description`, `status`, `created`, `modified`) VALUES
('53415e3b-6368-4210-880e-1410f8defb25', 0, '', 'header', 'About', 'about', '<p>About Us</p>\r\n', '', '', '', '', 'active', '2014-04-06 20:01:31', '2014-04-06 20:01:31'),
('534178e3-7ed4-41b0-a33a-1410f8defb25', 53415000, 'content', 'header', 'The Beatles', '', '<p>The Beatles are unquestionably the best and most important band in rock history, as well as the most compelling story. Almost miraculously, they embodied the apex of the form artistically, commercially, culturally and spiritually at just the right time, the tumultuous &#39;60s, when music had the power to literally change the world (or at least to give the impression that it could, which may be the same thing). The Beatles are the archetype: there is no term in the language analogous to &ldquo;Beatlemania.&rdquo; Three lads from Liverpool &mdash; John Lennon, Paul McCartney and George Harrison &mdash; came together at a time of great cultural fluidity in 1960 (with bit players Stu Sutcliffe and Pete Best), absorbed and recapitulated American rock &lsquo;n&rsquo; roll and British pop history unto that point, hardened into a razor sharp unit playing five amphetamine-fueled sets a night in the tough port town of Hamburg, Germany, returned to Liverpool, found their ideal manager in Brian Epstein and ideal producer in George Martin, added the final piece of the puzzle when Ringo Starr replaced Best on drums, and released their first single in the U.K., &ldquo;Love Me Do/P.S. I Love You,&rdquo; all by October of 1962.</p>\r\n', '/img/frontend/bannar/thumb/cms_140418090155.jpg', '', '', '', 'active', '2014-04-06 21:55:15', '2014-04-18 21:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` char(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `start_date_time` date NOT NULL,
  `end_date_time` date NOT NULL,
  `status` tinytext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `start_date_time`, `end_date_time`, `status`, `created`, `modified`, `user_id`) VALUES
('5327f09f-83a4-43d9-944b-0fddf8defb25', 'Coming Soon We will launch website of BOPIL', 'Coming Soon We will launch website of BOPIL', '2014-03-18', '2014-03-31', 'published', '2014-03-18 13:07:11', '2014-03-18 13:07:11', NULL),
('5327f0c3-639c-48ce-ab59-0ee5f8defb25', 'News 2', 'News 2', '2014-03-19', '2014-03-27', 'published', '2014-03-18 13:07:47', '2014-03-18 13:07:47', NULL),
('5327f0f7-ccc4-4023-8653-0f4cf8defb25', 'News 3', 'News 3', '2014-03-11', '2014-03-17', 'published', '2014-03-18 13:08:38', '2014-03-18 13:20:44', NULL),
('5327f10b-8a58-4fa4-ac0f-0f4bf8defb25', 'News 4', 'News 4', '2014-03-20', '2014-03-28', 'published', '2014-03-18 13:08:59', '2014-03-18 13:08:59', NULL),
('544f4992-2534-469e-8272-0e8cf8defb25', 'Test News', 'Test News', '2014-10-28', '2014-10-21', 'draft', '2014-10-28 13:45:22', '2014-10-28 13:45:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paints`
--

CREATE TABLE IF NOT EXISTS `paints` (
  `id` char(36) NOT NULL,
  `artist_id` char(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `featured` int(11) DEFAULT NULL,
  `view_number` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paints`
--

INSERT INTO `paints` (`id`, `artist_id`, `title`, `slug`, `image`, `artist_name`, `description`, `size`, `price`, `featured`, `view_number`, `created`, `modified`) VALUES
('544c63db-1fb0-4560-81bf-0f34f8defb25', '5448ecfe-5890-4584-a94b-0fb0f8defb25', 'Animal Band Party', 'animal-band-party-2', '/img/frontend/paints/thumb/Paint_image_141026090042.jpg', '', 'Test', '11â€³x26â€³', '150', NULL, NULL, '2014-10-26 09:00:43', '2014-10-26 09:00:43'),
('544c651e-5ab4-4672-a1a4-0f34f8defb25', '5448ecfe-5890-4584-a94b-0fb0f8defb25', 'Bird of Bangladesh', 'bird-of-bangladesh-2', '/img/frontend/paints/thumb/Paint_image_141026090605.jpg', '', 'fgf', '11â€³x26â€³', '150', NULL, NULL, '2014-10-26 09:06:06', '2014-10-26 09:06:06'),
('544f29d8-c7fc-45f1-bc61-0e8cf8defb25', '544c66f6-8448-49a2-911f-0f34f8defb25', 'Casino Royel', 'casino-royel', '/img/frontend/paints/thumb/Paint_image_141028112959.jpg', '', 'Casino Royel', '11â€³x26â€³', '155', NULL, NULL, '2014-10-28 11:30:00', '2014-10-28 11:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` char(36) NOT NULL,
  `role_id` char(36) NOT NULL,
  `dominion_id` char(36) NOT NULL,
  `process_id` char(36) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `dominion_id`, `process_id`) VALUES
('531464da-f7a8-4a0d-8425-1fedf8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141b90-f0f8-4625-a854-0b9bf8defb25'),
('531464db-e998-47bc-9305-1fedf8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141b9d-33e0-405d-b17e-0f56f8defb25'),
('531464dd-4760-4b31-bc22-1fedf8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141523-59b0-47b8-8dde-0931f8defb25', '53141a8b-b684-4b54-84a9-0f56f8defb25'),
('531464de-5a94-42f6-830f-1fedf8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141523-59b0-47b8-8dde-0931f8defb25', '53141f16-270c-4a73-a6ef-0b85f8defb25'),
('531464e0-b430-4580-a85a-1fedf8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141538-5218-463c-af25-0ba8f8defb25', '53142061-67e8-4b81-aada-1089f8defb25'),
('531464e0-1994-49bb-9efb-1fedf8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141538-5218-463c-af25-0ba8f8defb25', '531420c1-7914-4d94-8bbf-0b85f8defb25'),
('531468a1-73e8-409e-b656-222af8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141baa-6bcc-48ba-bee2-0b85f8defb25'),
('531468b8-3fc8-4c8e-be4d-243cf8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426cf-df84-413d-a40a-0d48f8defb25'),
('531468ba-8ff8-4424-ac8c-243cf8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426bd-a27c-476e-a691-0b85f8defb25'),
('53156098-8e58-417b-8dae-0927f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141538-5218-463c-af25-0ba8f8defb25', '53141f04-d09c-47f2-9d6b-0b9bf8defb25'),
('5315609c-e6dc-438c-923b-0927f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141523-59b0-47b8-8dde-0931f8defb25', '53141f2e-fe60-4b3f-90e7-0d49f8defb25'),
('531560a3-f210-4aa8-99c9-0e99f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426c5-1a3c-4b7c-bddf-0d48f8defb25'),
('531560a5-edfc-4f02-9488-0e99f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426ca-4694-4858-ac9d-0d48f8defb25'),
('531560b7-83f4-4391-93da-0927f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426d4-c8fc-4ad9-858d-0d48f8defb25'),
('531560b8-6338-4559-8dd6-0927f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426de-a1b4-4baf-aff7-1089f8defb25'),
('531560bc-3750-4207-ba98-0927f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '53142306-f410-4680-92e1-0d48f8defb25'),
('531560c8-af38-4bc0-bc6c-0f96f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '53142301-6ce4-4604-983b-0d48f8defb25'),
('531560c9-44cc-495f-b8e2-0dd4f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '5314230b-ef30-4b02-83c4-0d48f8defb25'),
('531560ca-7dd4-4943-a16c-0dd4f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '53142310-cdbc-4ebf-85d6-0d48f8defb25'),
('531560cc-7750-4a30-9ce6-0dd4f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '5314232e-13f4-4a8b-9041-0b9bf8defb25'),
('531560cc-bfb0-4d88-a3ce-0f96f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '5314231e-9c50-444e-997a-1089f8defb25'),
('531560df-7890-44af-ab1f-0e99f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141523-59b0-47b8-8dde-0931f8defb25', '53141f20-01b4-4fe1-8249-0f56f8defb25'),
('531560e0-e8e4-4c73-8e48-0e99f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141523-59b0-47b8-8dde-0931f8defb25', '53141f3f-bb50-4941-90b3-0939f8defb25'),
('531560eb-d900-412b-91e4-0e99f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141a19-8ab8-4212-8df1-0d48f8defb25'),
('531560ed-cd58-4b4a-8949-0e99f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141b73-481c-4800-8c06-0d48f8defb25'),
('531560ee-dd5c-4d73-8725-0e99f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141b90-f0f8-4625-a854-0b9bf8defb25'),
('531560fc-927c-4b70-bb35-08eaf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141538-5218-463c-af25-0ba8f8defb25', '53141f04-d09c-47f2-9d6b-0b9bf8defb25'),
('531560fd-ef40-41a7-8d63-08eaf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141538-5218-463c-af25-0ba8f8defb25', '53142061-67e8-4b81-aada-1089f8defb25'),
('53156121-3604-40a0-bdd8-0e8ef8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '53142301-6ce4-4604-983b-0d48f8defb25'),
('53156126-44d0-4afb-9bc0-0e9af8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '5314231e-9c50-444e-997a-1089f8defb25'),
('53156127-5508-4e1f-b3d9-0e9af8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '5314232e-13f4-4a8b-9041-0b9bf8defb25'),
('53156141-2bd4-4196-b431-0dd4f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426bd-a27c-476e-a691-0b85f8defb25'),
('53156145-d060-4401-89da-0dd4f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426ca-4694-4858-ac9d-0d48f8defb25'),
('53156146-0128-4563-9cbf-0dd4f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426cf-df84-413d-a40a-0d48f8defb25'),
('53156147-eb14-44fb-811b-0dd4f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426de-a1b4-4baf-aff7-1089f8defb25'),
('53156a74-d8cc-4693-a5e6-11c1f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141b73-481c-4800-8c06-0d48f8defb25'),
('53156a74-c0d8-4f30-878a-11c1f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141a19-8ab8-4212-8df1-0d48f8defb25'),
('53156a75-af4c-41df-9644-11c1f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141a04-2238-4e14-91d4-0b96f8defb25'),
('5315717c-9db0-49dd-af5d-0f96f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531566be-47bc-4366-b244-091ff8defb25', '53156706-71cc-4d03-bc24-0b05f8defb25'),
('53157183-27e8-409f-b944-1326f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531568ef-f7c8-45fa-81f4-091ff8defb25', '5315692b-a8c8-42d7-aa26-1215f8defb25'),
('53157190-cc78-4111-8a15-1215f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5314160e-1778-43a1-8d3e-0939f8defb25', '531563a1-57bc-471b-ae5e-1054f8defb25'),
('531571a3-aed8-4011-9c5f-091ff8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415d5-053c-454c-a150-0ba8f8defb25', '531565b6-dfd0-41c2-bc5b-091ff8defb25'),
('531571a7-d458-4a3d-a612-091ff8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415e6-4208-43ca-9440-0b96f8defb25', '53156688-720c-4bc1-bfd8-0b05f8defb25'),
('53159f41-29a0-4a39-bf09-137cf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141a04-2238-4e14-91d4-0b96f8defb25'),
('53159fe3-1928-4b68-ae8b-1a99f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141baa-6bcc-48ba-bee2-0b85f8defb25'),
('5315b53b-b324-43c9-9fc9-24b7f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141523-59b0-47b8-8dde-0931f8defb25', '53141a8b-b684-4b54-84a9-0f56f8defb25'),
('5315b54c-67e8-4e71-b43b-25ccf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415e6-4208-43ca-9440-0b96f8defb25', '5315664d-5094-4065-9fbd-0927f8defb25'),
('5315b556-42f8-45f5-bef0-24baf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415e6-4208-43ca-9440-0b96f8defb25', '53156658-f2e4-4389-b822-0dd4f8defb25'),
('5315b55a-1f64-47c5-833c-24baf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415e6-4208-43ca-9440-0b96f8defb25', '53156663-83d8-44e2-b32b-1054f8defb25'),
('5317ec29-e8c0-405a-842d-0505f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b533-a40c-44e7-a5e4-0930f8defb25');

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE IF NOT EXISTS `processes` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dominion_id` char(36) NOT NULL,
  KEY `id` (`id`)
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
('544f4cad-dafc-42ee-8468-0e8cf8defb25', 'admin_index', '5446502c-0558-48cb-a9d5-16c8f8defb25');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `skypee` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`, `phone`, `skypee`) VALUES
('5314324f-504c-4130-9431-1225f8defb25', '5314324f-4224-4636-a2b0-1225f8defb25', 'Md. Razib', 'Hossain', 'dhaka', '', '', '', '', ''),
('53143c61-1b80-4348-85b7-12c1f8defb25', '53143c61-a6f8-4326-ab6c-12c1f8defb25', 'Shahin', '', 'dhaka', '', '', '', '', ''),
('53155ba1-2aa8-4497-866f-0dd5f8defb25', '53155ba0-f92c-4cdb-896c-0dd5f8defb25', 'Md. Razib', '', 'dhaka', '', '', '', '', ''),
('53155f0c-1e28-45ad-beba-0dd3f8defb25', '53155f0b-5768-4d74-93e7-0dd3f8defb25', 'Md. Razib', 'Hossain', 'dhaka', '', '', '', '', ''),
('53155fa7-f6e0-4c5c-b1db-0e8ef8defb25', '53155fa7-0ce4-4508-8ccc-0e8ef8defb25', 'Admin', '', 'Dhaka', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `id` char(36) NOT NULL,
  `paint_id` char(36) NOT NULL,
  `rate` int(11) NOT NULL,
  `user_id` char(36) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinytext,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `status`, `created`, `modified`) VALUES
('53141664-f3c4-4696-b2b2-0d49f8defb25', 'Admin', 'admin', 'active', '2014-03-03 11:43:00', '2014-03-03 11:43:00'),
('53141678-618c-49b2-a33f-0931f8defb25', 'User', 'user', 'active', '2014-03-03 11:43:20', '2014-03-03 11:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` char(36) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `meta_tag` text NOT NULL,
  `meta_description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_files`
--

CREATE TABLE IF NOT EXISTS `site_files` (
  `id` char(36) NOT NULL,
  `menu_id` char(36) DEFAULT NULL,
  `content_id` char(36) DEFAULT NULL,
  `parent_id` char(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_files`
--

INSERT INTO `site_files` (`id`, `menu_id`, `content_id`, `parent_id`, `title`, `file`, `created`, `modified`) VALUES
('535123c0-89a0-4b8d-9525-0c64f8defb25', '534178e3-7ed4-41b0-a33a-1410f8defb25', '', '', 'File1', '/files/frontend/cms_140418070814.docx', '2014-04-18 19:08:16', '2014-04-18 19:08:16'),
('535123dc-be68-4027-872e-0c64f8defb25', '534178e3-7ed4-41b0-a33a-1410f8defb25', '', '', 'File2', '/files/frontend/cms_140418070843.doc', '2014-04-18 19:08:44', '2014-04-18 19:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` char(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'inactive',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `slug`, `width`, `height`, `status`, `created`, `modified`) VALUES
('53243e87-0904-40f6-b2e6-16f2f8defb25', 'Home Page Slider', '', 0, 0, 'active', '2014-03-15 17:50:31', '2014-03-15 17:50:31'),
('5430dbc2-f0ec-4514-8121-14c4f8defb25', 'Home Slider', 'home-slider', 0, 0, 'active', '2014-10-05 11:48:50', '2014-10-05 11:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `slider_contents`
--

CREATE TABLE IF NOT EXISTS `slider_contents` (
  `id` char(36) NOT NULL,
  `slider_id` char(36) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `width` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `slider_contents`
--

INSERT INTO `slider_contents` (`id`, `slider_id`, `caption`, `description`, `image`, `width`, `height`, `status`) VALUES
('5430d404-1588-4709-b296-14c4f8defb25', '53243e87-0904-40f6-b2e6-16f2f8defb25', 'Cms Slider', 'Cms Slider', 'frontend/slider/slider_1412486146.jpg', '488', '275', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE IF NOT EXISTS `social_links` (
  `id` char(36) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `icon`, `title`, `url`) VALUES
('544f3360-57d0-4b68-827e-0e8cf8defb25', '/img/frontend/sociallink/thumb/SocialLink_icon_141028121039.png', 'Facebook', 'http://facebook.com'),
('544f33af-206c-413a-9858-0e8cf8defb25', '/img/frontend/sociallink/thumb/SocialLink_icon_141028121158.png', 'Linkedin', 'http://linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` char(36) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role_id` varchar(36) CHARACTER SET utf8 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinytext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `created`, `modified`, `status`) VALUES
('5314324f-4224-4636-a2b0-1225f8defb25', 'razib', 'razibdpi@gmail.com', 'b24934f7095e7bc95bd50301a65c4be46efb3611', '53141664-f3c4-4696-b2b2-0d49f8defb25', '2014-03-03 13:42:07', '2014-03-04 12:45:23', 'active'),
('53143c61-a6f8-4326-ab6c-12c1f8defb25', 'sahin', 'sahin@gmail.com', 'b24934f7095e7bc95bd50301a65c4be46efb3611', '53141678-618c-49b2-a33f-0931f8defb25', '2014-03-03 14:25:04', '2014-03-04 12:45:34', 'active'),
('53155f0b-5768-4d74-93e7-0dd3f8defb25', 'razib1', 'razib@gmail.com', 'b24934f7095e7bc95bd50301a65c4be46efb3611', '53141678-618c-49b2-a33f-0931f8defb25', '2014-03-04 11:05:15', '2014-03-04 12:45:45', 'active'),
('53155fa7-0ce4-4508-8ccc-0e8ef8defb25', 'admin', 'admin@example.com', 'b24934f7095e7bc95bd50301a65c4be46efb3611', '53141664-f3c4-4696-b2b2-0d49f8defb25', '2014-03-04 11:07:51', '2014-03-04 12:45:55', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
