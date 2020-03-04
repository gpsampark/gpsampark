-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2020 at 04:32 AM
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
(6, 'Anand Kammar', 'Male', 'rc.anandkammar@gmail.com', '7204993889', 'Karajaga						                                                            ', 3, 1516, 'comp opertr'),
(8, 'pooja', 'Female', 'abcdef@cd.com', '234756', 'gfh hgvf hjfv vfkuj						', 2, 1516001, 'tp head'),
(9, 'mahesh', 'Male', 'mahesh@gmail.com', '23465875', 'hgskhtjg jhkdgs rhjd rskjhg 						                        ', 1, 1516001001, 'j hb j');

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
(1516, 'Karnataka', 'Hassan');

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
(6, 'anand', 'manu', 3),
(9, 'mahesh', '1234', 1),
(8, 'pooja', '1234', 2);

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
(1516001, 1516, 'ALUR'),
(1516002, 1516, 'ARSIKERE'),
(1516003, 1516, 'ARKALGUD'),
(1516004, 1516, 'BELUR'),
(1516005, 1516, 'CHANNARAYAPATNA'),
(1516006, 1516, 'HASSAN'),
(1516007, 1516, 'HOLENARSIPUR'),
(1516008, 1516, 'SAKALESHPUR');

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
(1516001001, 1516001, 'KADALU'),
(1516001002, 1516001, 'BYRAPURA'),
(1516001003, 1516001, 'KUNDOORU'),
(1516001004, 1516001, 'HANCHUR'),
(1516001005, 1516001, 'KANATTUR'),
(1516001006, 1516001, 'HUNASAVALLI'),
(1516001007, 1516001, 'MADABALU'),
(1516001008, 1516001, 'TALUR'),
(1516001009, 1516001, 'MALLAPUR'),
(1516001010, 1516001, 'DODDAKANAGAL'),
(1516001011, 1516001, 'PALYA'),
(1516001012, 1516001, 'ABBANA'),
(1516001013, 1516001, 'MAGGE'),
(1516001014, 1516001, 'GANGIGERE'),
(1516001015, 1516001, 'KARAGODU'),
(1516002001, 1516002, 'YADAVANAHALLI'),
(1516002002, 1516002, 'D.M.KURKE'),
(1516002003, 1516002, 'KANAKATTE'),
(1516002004, 1516002, 'KARAGUNDA'),
(1516002005, 1516002, 'KALYADI'),
(1516002006, 1516002, 'KALGUNDI'),
(1516002007, 1516002, 'KURUVANKA'),
(1516002008, 1516002, 'KAMASAMUDRA'),
(1516002009, 1516002, 'KACHIGATTA'),
(1516002010, 1516002, 'K.SHANKARANAHALLI'),
(1516002011, 1516002, 'KENKERE'),
(1516002012, 1516002, 'KONDENALU'),
(1516002013, 1516002, 'KOLAGUNDA'),
(1516002014, 1516002, 'CHAGACHAGERE'),
(1516002015, 1516002, 'PURALEHALLI'),
(1516002016, 1516002, 'JAJUR'),
(1516002017, 1516002, 'JAVAGAL'),
(1516002018, 1516002, 'J.C.PUR'),
(1516002019, 1516002, 'RANGAPURA'),
(1516002020, 1516002, 'RAMPURA'),
(1516002021, 1516002, 'DUMMENAHALLI'),
(1516002022, 1516002, 'UNDIGANAALU'),
(1516002023, 1516002, 'BANDUR'),
(1516002024, 1516002, 'BANAVARA'),
(1516002025, 1516002, 'BAGIVALU'),
(1516002026, 1516002, 'BAGESHPUR'),
(1516002027, 1516002, 'BENDEKERE'),
(1516002028, 1516002, 'BELAGUMBA'),
(1516002029, 1516002, 'NARASIPURA'),
(1516002030, 1516002, 'NERLIGE'),
(1516002031, 1516002, 'TALALUR'),
(1516002032, 1516002, 'MADALU'),
(1516002033, 1516002, 'MURUNDI'),
(1516002034, 1516002, 'MUDUDI'),
(1516002035, 1516002, 'SHANEGERE'),
(1516002036, 1516002, 'LALANAKERE'),
(1516002037, 1516002, 'GANDASI'),
(1516002038, 1516002, 'ARAKERE'),
(1516002039, 1516002, 'AGGUNDA'),
(1516002040, 1516002, 'HIRIYUR'),
(1516002041, 1516002, 'HANDRAALU'),
(1516002042, 1516002, 'HABBANAGATTA'),
(1516002043, 1516002, 'HARANAHALLI'),
(1516002044, 1516002, 'HEGGTTA'),
(1516002045, 1516002, 'GIJIHALLI'),
(1516003001, 1516003, 'YALAGATHAVALLI'),
(1516003002, 1516003, 'KATTIMALLENAHALLI'),
(1516003003, 1516003, 'KATTEPURA'),
(1516003004, 1516003, 'KALENAHALLI'),
(1516003005, 1516003, 'KONANUR'),
(1516003006, 1516003, 'KERALAPURA'),
(1516003007, 1516003, 'RUDRAPATNA'),
(1516003008, 1516003, 'RAMANATHAPURA'),
(1516003009, 1516003, 'DODDABEMMATHI'),
(1516003010, 1516003, 'DODDAMAGGE'),
(1516003011, 1516003, 'BANNUR'),
(1516003012, 1516003, 'BASAVAPATNA'),
(1516003013, 1516003, 'BELAVADI'),
(1516003014, 1516003, 'BYCHANAHALLI'),
(1516003015, 1516003, 'LAKKURAU'),
(1516003016, 1516003, 'VIJAPURA FOREST'),
(1516003017, 1516003, 'VADDRAHALLI'),
(1516003018, 1516003, 'MALLIPATNA'),
(1516003019, 1516003, 'GANJALAGODU'),
(1516003020, 1516003, 'GANGUR'),
(1516003021, 1516003, 'SARAGOOR'),
(1516003022, 1516003, 'SANTEMARURU'),
(1516003023, 1516003, 'AGRAHARA'),
(1516003024, 1516003, 'HANDRANGI'),
(1516003025, 1516003, 'HULIKAL'),
(1516003026, 1516003, 'HEBBALE'),
(1516003027, 1516003, 'HONNVALLI'),
(1516003028, 1516003, 'HOLALAGODU'),
(1516003029, 1516003, 'CHIKKAHALLI'),
(1516003030, 1516003, 'ALADAHALLI'),
(1516003031, 1516003, 'HEGGADIHALLI'),
(1516003032, 1516003, 'KORATIKERE'),
(1516003033, 1516003, 'TARAGALALE'),
(1516003034, 1516003, 'MOKALI'),
(1516003035, 1516003, 'KADUVINAHOSAHAL'),
(1516003036, 1516003, 'HANYALU');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `exp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_list`
--
ALTER TABLE `project_list`
  MODIFY `pid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
