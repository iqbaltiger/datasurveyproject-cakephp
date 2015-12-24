-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2015 at 06:17 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ns_datasurvey`
--
CREATE DATABASE IF NOT EXISTS `ns_datasurvey` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ns_datasurvey`;

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
  `position` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorized_menus`
--

INSERT INTO `authorized_menus` (`id`, `role_id`, `name`, `parent_id`, `dominion_id`, `process_id`, `icon`, `status`, `position`) VALUES
('5316b435-3894-4902-91aa-0536f8defb25', '', 'User Management', '', '', '5316b533-a40c-44e7-a5e4-0930f8defb25', '<i class="fa fa-user icon"> <b class="bg-primary"></b> </i>', 'active', 1),
('5316b475-54b8-41a0-93bf-053af8defb25', '', 'User List', '5316b435-3894-4902-91aa-0536f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b533-a40c-44e7-a5e4-0930f8defb25', '<i class="fa fa-angle-right icon"></i> ', 'active', 0),
('5492b76b-2f5c-4fc4-9736-0544f8defb25', '', 'CMS Settings', '', '', NULL, '<i class="fa fa-fw fa-sitemap"></i>', 'active', 4),
('5492b7d4-e848-4d63-9a1d-0544f8defb25', '', 'Dominions', '5492b76b-2f5c-4fc4-9736-0544f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', NULL, '<i class="fa fa-fw fa-wrench"></i>', 'active', 1),
('5492b957-6290-4f31-a5e1-0544f8defb25', '', 'Actions', '5492b76b-2f5c-4fc4-9736-0544f8defb25', '5492b8c5-291c-452d-bc3a-0544f8defb25', NULL, '<i class="fa fa-fw fa-random"></i>', 'active', 2),
('5492b9f5-b5a0-4250-b019-0544f8defb25', '', 'Authorize Menus', '5492b76b-2f5c-4fc4-9736-0544f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', NULL, '<i class="fa fa-fw fa-list"></i>', 'active', 3),
('54b5ebd1-5500-4a58-a56b-0684f8defb25', '', 'Permissions', '5492b76b-2f5c-4fc4-9736-0544f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', NULL, '<i class="fa fa-fw fa-asterisk"></i>', 'active', 4),
('54b5ebfc-8588-4bda-9867-0684f8defb25', '', 'Roles', '5492b76b-2f5c-4fc4-9736-0544f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', NULL, '<i class="fa fa-fw fa-folder-open"></i>', 'active', 5);

-- --------------------------------------------------------

--
-- Table structure for table `dominions`
--

CREATE TABLE IF NOT EXISTS `dominions` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
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
('531468a1-73e8-409e-b656-222af8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141baa-6bcc-48ba-bee2-0b85f8defb25'),
('531468b8-3fc8-4c8e-be4d-243cf8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426cf-df84-413d-a40a-0d48f8defb25'),
('531468ba-8ff8-4424-ac8c-243cf8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426bd-a27c-476e-a691-0b85f8defb25'),
('531560a3-f210-4aa8-99c9-0e99f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426c5-1a3c-4b7c-bddf-0d48f8defb25'),
('531560a5-edfc-4f02-9488-0e99f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426ca-4694-4858-ac9d-0d48f8defb25'),
('531560b7-83f4-4391-93da-0927f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426d4-c8fc-4ad9-858d-0d48f8defb25'),
('531560b8-6338-4559-8dd6-0927f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415b5-62d0-4d99-958b-0d48f8defb25', '531426de-a1b4-4baf-aff7-1089f8defb25'),
('531560bc-3750-4207-ba98-0927f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '53142306-f410-4680-92e1-0d48f8defb25'),
('531560c8-af38-4bc0-bc6c-0f96f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '53142301-6ce4-4604-983b-0d48f8defb25'),
('531560c9-44cc-495f-b8e2-0dd4f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '5314230b-ef30-4b02-83c4-0d48f8defb25'),
('531560ca-7dd4-4943-a16c-0dd4f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141548-b7a8-4afd-8d92-0b96f8defb25', '53142310-cdbc-4ebf-85d6-0d48f8defb25'),
('531560e0-e8e4-4c73-8e48-0e99f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141523-59b0-47b8-8dde-0931f8defb25', '53141f3f-bb50-4941-90b3-0939f8defb25'),
('531560eb-d900-412b-91e4-0e99f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141a19-8ab8-4212-8df1-0d48f8defb25'),
('531560ed-cd58-4b4a-8949-0e99f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141b73-481c-4800-8c06-0d48f8defb25'),
('531560ee-dd5c-4d73-8725-0e99f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141426-c1cc-4306-8412-0ba8f8defb25', '53141b90-f0f8-4625-a854-0b9bf8defb25'),
('531560fc-927c-4b70-bb35-08eaf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141538-5218-463c-af25-0ba8f8defb25', '53141f04-d09c-47f2-9d6b-0b9bf8defb25'),
('531560fd-ef40-41a7-8d63-08eaf8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '53141538-5218-463c-af25-0ba8f8defb25', '53142061-67e8-4b81-aada-1089f8defb25'),
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
('5317ec29-e8c0-405a-842d-0505f8defb25', '53141678-618c-49b2-a33f-0931f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b533-a40c-44e7-a5e4-0930f8defb25'),
('5496c0c9-91f8-488e-b3db-0e20f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5496b80a-aa7c-43fc-97cb-0e20f8defb25', '5496b8c6-ada0-4509-b754-0e20f8defb25'),
('5496c13c-3238-4c2a-88f2-0e20f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '54969763-086c-4435-adf0-0e20f8defb25', '54969780-e370-42b8-b2a5-0e20f8defb25'),
('5496c16a-b528-4c7c-b8f5-0e20f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5496b7df-3c0c-4db3-a564-0e20f8defb25', '5496b8a4-4330-49d9-9de9-0e20f8defb25'),
('54b5f22d-ebd4-4f09-9150-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '531563d0-8d1c-4eb3-bf4b-0e8ef8defb25'),
('54b5f22d-a0e8-42c3-8024-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '531563db-570c-47c2-a6c3-0f11f8defb25'),
('54b5f22d-34c8-483b-ac8e-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '531563ef-66bc-4ce5-bf8c-0b05f8defb25'),
('54b5f22d-bb68-4790-9d69-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '53156400-40b8-4df8-a5af-0f96f8defb25'),
('54b5f22d-4208-4040-8a14-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '53156410-c53c-4b5a-bb9e-091ff8defb25'),
('54b5f22d-c8a8-4cae-bfe6-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '53141565-e924-4ee7-b6ba-0939f8defb25', '5315641d-0ac0-44a6-940f-0927f8defb25'),
('54b5f22d-c8a8-4e90-a637-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b533-a40c-44e7-a5e4-0930f8defb25'),
('54b5f22d-4f48-4bfe-ae1c-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b538-831c-40e0-a4ed-0930f8defb25'),
('54b5f22d-fe0c-44eb-8275-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b541-e3fc-4d84-b54a-0537f8defb25'),
('54b5f22d-84ac-4f80-b4e3-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b549-fd74-4083-bc68-053af8defb25'),
('54b5f22d-0b4c-4976-a23a-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b54d-2410-4fbf-bcad-053af8defb25'),
('54b5f22d-91ec-48b9-9e30-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '531415ff-0e3c-42d9-b5e2-0d43f8defb25', '5316b552-e7a0-46f0-9d49-053af8defb25'),
('54b5f22d-188c-4c7e-83bb-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b4ff-f604-4ccc-acdc-0a4af8defb25'),
('54b5f22d-9f2c-47ca-9b1a-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b506-6c84-4020-ace5-0939f8defb25'),
('54b5f22d-25cc-4af5-bd63-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b50c-5e00-49ee-885e-0939f8defb25'),
('54b5f22d-25cc-489f-aac9-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b515-fefc-4a06-a713-0536f8defb25'),
('54b5f22d-ac6c-4c2f-87b7-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b51f-98b0-4f72-a04a-0930f8defb25'),
('54b5f22d-330c-4641-a553-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316b4f6-80c4-4e4b-be27-0936f8defb25', '5316b527-3cec-4fd3-abe4-0930f8defb25'),
('54b5f22d-330c-48a4-9fa2-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e303-0164-438d-b8cd-3d2ff8defb25'),
('54b5f22d-b9ac-4cf6-b894-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e308-f4d4-4e3b-9d3e-3d2ff8defb25'),
('54b5f22d-404c-4ebf-9558-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e30e-1298-4d76-bd19-3e25f8defb25'),
('54b5f22d-404c-4aca-9542-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e313-59f8-4227-ae7b-3e25f8defb25'),
('54b5f22d-c6ec-4b1f-b406-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e31b-8c14-4be0-a1dd-3e22f8defb25'),
('54b5f22d-4d8c-4a23-b3a6-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e2f3-ac88-4b7c-923c-3e23f8defb25', '5316e324-9abc-4687-a9f0-3d2df8defb25'),
('54b5f22d-4d8c-4381-b8b8-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4ae-3388-4e53-b826-3e22f8defb25'),
('54b5f22d-d42c-4dfb-8465-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4b3-f400-4b39-b48b-3e22f8defb25'),
('54b5f22d-5b30-4a1c-94dd-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4bf-4320-47e5-82dd-3d2df8defb25'),
('54b5f22d-5b30-4965-952e-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4c7-eb84-4a31-92cb-3d2cf8defb25'),
('54b5f22d-e1d0-406a-8fb7-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4cd-f388-4a5f-b739-3d2cf8defb25'),
('54b5f22d-6870-463d-b7df-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5316e4a7-965c-4213-9cab-3e22f8defb25', '5316e4d2-6acc-49c8-9667-3d2cf8defb25'),
('54b5f22d-6870-4626-88e1-0684f8defb25', '53141664-f3c4-4696-b2b2-0d49f8defb25', '5492b8c5-291c-452d-bc3a-0544f8defb25', '5492b8fd-3a44-4f62-93fd-0544f8defb25');

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE IF NOT EXISTS `processes` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dominion_id` char(36) NOT NULL,
  PRIMARY KEY (`id`),
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
('544f4cad-dafc-42ee-8468-0e8cf8defb25', 'admin_index', '5446502c-0558-48cb-a9d5-16c8f8defb25'),
('5492b8fd-3a44-4f62-93fd-0544f8defb25', 'admin_index', '5492b8c5-291c-452d-bc3a-0544f8defb25'),
('54969780-e370-42b8-b2a5-0e20f8defb25', 'admin_index', '54969763-086c-4435-adf0-0e20f8defb25'),
('5496b8a4-4330-49d9-9de9-0e20f8defb25', 'admin_index', '5496b7df-3c0c-4db3-a564-0e20f8defb25'),
('5496b8c6-ada0-4509-b754-0e20f8defb25', 'admin_index', '5496b80a-aa7c-43fc-97cb-0e20f8defb25'),
('5496b8e3-ddbc-4b3c-beaf-0e20f8defb25', 'admin_index', '5496b81c-a464-4859-882b-0e20f8defb25');

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
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `name`, `division`, `country`, `state`, `zipcode`, `mobile`, `image`) VALUES
('53155fa7-f6e0-4c5c-b1db-0e8ef8defb25', '53155fa7-0ce4-4508-8ccc-0e8ef8defb25', 'Admin', 'Dhaka', 'Bangladesh', 'Dhaka', '1000', '01722113736', ''),
('5469d5f0-579c-4bdf-b85a-0ad8f8defb25', '5469d5f0-50e8-47e6-83fc-0ad8f8defb25', 'Shahed Hasan', 'Dhaka', 'bangladesh', 'Dhaka', '1000', '01722113736', '/img/frontend/profile/thumb/Profile_image_141118032326.jpg');

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
  `status` tinytext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role_id`, `verified_code`, `created`, `modified`, `status`) VALUES
('53155fa7-0ce4-4508-8ccc-0e8ef8defb25', 'userone', '9eaaba0c6a20cd9195d5f005b37fcd5aeca0823f', 'it06016@gmail.com', '53141664-f3c4-4696-b2b2-0d49f8defb25', 5745, '2014-03-04 11:07:51', '2014-11-19 15:19:09', 'active'),
('5469d5f0-50e8-47e6-83fc-0ad8f8defb25', 'shahin@gmail.com', 'b24934f7095e7bc95bd50301a65c4be46efb3611', 'shahin@gmail.com', '', 0, '2014-11-17 17:03:12', '2014-11-17 17:03:12', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
