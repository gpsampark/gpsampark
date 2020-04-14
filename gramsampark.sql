-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2020 at 07:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(6, 'ABCDE', 'Male', 'abcde@gmail.com', '1234567890', 'hassan', 3, 1517, 'comp opertr'),
(8, 'tp admin', 'Female', 'tpadmin@cd.com', '234756', 'gfh hgvf hjfv vfkuj						', 2, 1517001, 'tp head'),
(9, 'nayana', 'Male', 'nayana@gmail.com', '23465875', 'hgskhtjg jhkdgs rhjd rskjhg 						                                    ', 1, 1517001001, 'Attender'),
(10, 'Pooka K N', 'Female', 'poojakn@gmail.com', '7536374647', 'xdfghbkshnd kjhl', 1, 1517001002, 'abcde'),
(11, 'gowthami', 'Female', 'gowthami@gmail.com', '8543476253', 'sjfde jhseg ayhgwa uiyg', 1, 1517002001, 'ahvj '),
(12, 'ADMIN', 'Male', 'sysadmin@gmail.com', '7865434567', 'sm,ndbfk  bsdjkbfjhsagdijyh', 4, 1515, 'System Admin');

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

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`exp_id`, `user_id`, `gp_code`, `project_id`, `rem_processing`, `cur_processing`, `rem_completed`, `cur_completed`, `month`, `year`) VALUES
(5, 9, 1517001001, 2, 1, 2, 3, 4, 4, 2020),
(6, 9, 1517001001, 9, 5, 6, 7, 8, 4, 2020),
(7, 9, 1517001001, 2, 2, 3, 4, 5, 1, 2012),
(8, 9, 1517001001, 9, 6, 7, 8, 9, 1, 2012),
(9, 10, 1517001002, 2, 5, 6, 7, 8, 1, 2012),
(10, 10, 1517001002, 9, 4, 3, 5, 6, 1, 2012),
(11, 10, 1517001002, 2, 6, 7, 8, 5, 4, 2020),
(12, 10, 1517001002, 9, 3, 3, 5, 6, 4, 2020),
(13, 11, 1517002001, 2, 8, 7, 6, 4, 1, 2012),
(14, 11, 1517002001, 9, 5, 6, 8, 4, 1, 2012),
(15, 11, 1517002001, 2, 9, 4, 6, 7, 4, 2020),
(16, 11, 1517002001, 9, 3, 8, 6, 5, 4, 2020);

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
(12, 'admin', 'admin', 4),
(11, 'gowthami', 'gowthami', 1),
(9, 'nayana', 'nayana', 1),
(10, 'pooja', 'pooja', 1),
(6, 'sharmila', 'sharmila', 3),
(8, 'tpadmin', 'tpadmin', 2);

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
(1, '1.', 'Individual Works', 0, 6),
(2, '1.a.', 'Land Development', 1, 6),
(9, '5.', 'Cemetery Development', 1, 6);

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
(1517001001, 1517001, 'Athani'),
(1517001002, 1517001, 'abcde'),
(1517002001, 1517002, 'Karajaga');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `exp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `project_list`
--
ALTER TABLE `project_list`
  MODIFY `pid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
