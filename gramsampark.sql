-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2020 at 04:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gramsampark`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `privilege` int(4) NOT NULL,
  `pcode` bigint(20) NOT NULL,
  `desig` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `gender`, `email`, `phone`, `address`, `privilege`, `pcode`, `desig`) VALUES
(6, 'Roopa', 'Female', 'roopa@gmail.com', '7204993889', 'Karajaga						                                                                                    ', 3, 1516, 'comp opertr'),
(8, 'pooja', 'Female', 'abcdef@cd.com', '234756', 'gfh hgvf hjfv vfkuj						', 2, 1516001, 'tp head'),
(9, 'mahesh', 'Male', 'mahesh@gmail.com', '23465875', 'hgskhtjg jhkdgs rhjd rskjhg 						                                    ', 1, 1516001001, 'Attender'),
(11, 'Nayana ', 'Female', 'nayana@gmail.com', '23423425', 'dfgh dhgdf hfdg hdf', 1, 1516001002, 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `district_list`
--

CREATE TABLE `district_list` (
  `zp_code` bigint(20) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district_list`
--

INSERT INTO `district_list` (`zp_code`, `state_name`, `district_name`) VALUES
(1517, 'Karnatak', 'Belagavi');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `exp_id` int(5) NOT NULL,
  `user_id` int(10) NOT NULL,
  `gp_code` bigint(20) NOT NULL,
  `project_id` int(4) NOT NULL,
  `rem_processing` bigint(20) NOT NULL,
  `cur_processing` bigint(20) NOT NULL,
  `rem_completed` bigint(20) NOT NULL,
  `cur_completed` bigint(20) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `privilege`) VALUES
(6, 'admin', 'admin', 3),
(9, 'mahesh', '1234', 1),
(11, 'nayana', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_list`
--

CREATE TABLE `project_list` (
  `pid` int(4) NOT NULL,
  `slno` varchar(10) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `visibility` int(3) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_list`
--

INSERT INTO `project_list` (`pid`, `slno`, `project_name`, `visibility`, `uid`) VALUES
(1, '1', 'Individual Works', 0, 6),
(2, '1.a.', 'Land Development', 1, 6),
(3, '1.b.', 'Horticulture Development', 1, 6),
(4, '1.c.', 'Silk Development', 1, 6),
(5, '1.d.', 'Forest Planting', 1, 6),
(21, '10', 'Anganwadi Centers', 1, 6),
(22, '11', 'Rural warehouses', 1, 6),
(23, '12', 'Quarter construction', 1, 6),
(24, '13', 'Rural garden construction, rural gardening, village beautification and planting(in public places)', 1, 6),
(6, '2', 'Sheep/Cow Dodger	', 1, 6),
(7, '3', 'Farmers Kana', 1, 6),
(8, '4', 'Play ground', 1, 6),
(9, '5', 'Cemetery Development', 1, 6),
(10, '6', 'Our Village, Our water', 0, 6),
(11, '6.a.', 'Harvesting water', 1, 6),
(12, '6.b.', 'Check dams (including multi arch check dams)	', 1, 6),
(13, '6.c.', 'Farm pits', 1, 6),
(14, '6.d.', 'Kichidi dam', 1, 6),
(15, '6.e.', 'Reclamation of traditional water bodies', 1, 6),
(16, '6.f.', 'River reclamation', 1, 6),
(17, '6.g', 'Replenishment units of tube wells', 1, 6),
(18, '7', 'Our village lake', 1, 6),
(19, '8', 'Our yard, our way	', 1, 6),
(20, '9', 'Rajiv Gandhi Service Center', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `taluk_list`
--

CREATE TABLE `taluk_list` (
  `tp_code` bigint(20) NOT NULL,
  `zp_code` bigint(20) NOT NULL,
  `taluk_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taluk_list`
--

INSERT INTO `taluk_list` (`tp_code`, `zp_code`, `taluk_name`) VALUES
(1517001, 1517, 'Athani'),
(1517002, 1517, 'Hukkeri'),
(1517003, 1517, 'Chikkodi'),
(1517004, 1517, 'Raibag'),
(1517005, 1517, 'Gokak');

-- --------------------------------------------------------

--
-- Table structure for table `village_list`
--

CREATE TABLE `village_list` (
  `gp_code` bigint(20) NOT NULL,
  `tp_code` bigint(20) NOT NULL,
  `village_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `village_list`
--

INSERT INTO `village_list` (`gp_code`, `tp_code`, `village_name`) VALUES
(1517001001, 1517001, 'Athani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district_list`
--
ALTER TABLE `district_list`
  ADD PRIMARY KEY (`zp_code`),
  ADD UNIQUE KEY `district_name` (`district_name`),
  ADD UNIQUE KEY `state` (`state_name`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`exp_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `gp_code` (`gp_code`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `login_ibfk_1` (`id`);

--
-- Indexes for table `project_list`
--
ALTER TABLE `project_list`
  ADD PRIMARY KEY (`slno`),
  ADD UNIQUE KEY `id` (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `taluk_list`
--
ALTER TABLE `taluk_list`
  ADD PRIMARY KEY (`tp_code`),
  ADD UNIQUE KEY `taluk_name` (`taluk_name`),
  ADD KEY `taluk_list_ibfk_1` (`zp_code`);

--
-- Indexes for table `village_list`
--
ALTER TABLE `village_list`
  ADD PRIMARY KEY (`gp_code`),
  ADD UNIQUE KEY `village` (`village_name`),
  ADD KEY `village_list_ibfk_1` (`tp_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `exp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project_list`
--
ALTER TABLE `project_list`
  MODIFY `pid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD CONSTRAINT `expenditure_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project_list` (`pid`),
  ADD CONSTRAINT `expenditure_ibfk_3` FOREIGN KEY (`gp_code`) REFERENCES `village_list` (`gp_code`),
  ADD CONSTRAINT `expenditure_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `project_list`
--
ALTER TABLE `project_list`
  ADD CONSTRAINT `project_list_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `admin` (`id`);

--
-- Constraints for table `taluk_list`
--
ALTER TABLE `taluk_list`
  ADD CONSTRAINT `taluk_list_ibfk_1` FOREIGN KEY (`zp_code`) REFERENCES `district_list` (`zp_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `village_list`
--
ALTER TABLE `village_list`
  ADD CONSTRAINT `village_list_ibfk_1` FOREIGN KEY (`tp_code`) REFERENCES `taluk_list` (`tp_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
