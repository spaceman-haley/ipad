-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2017 at 10:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipad`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapman`
--

DROP TABLE IF EXISTS `chapman`;
CREATE TABLE `chapman` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `found` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapman`
--

INSERT INTO `chapman` (`ID`, `serial`, `description`, `funding`, `location`, `found`) VALUES
(1, 132, 'iPad mini', 'Title 1', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dawson`
--

DROP TABLE IF EXISTS `dawson`;
CREATE TABLE `dawson` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `found` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dawson`
--

INSERT INTO `dawson` (`ID`, `serial`, `description`, `funding`, `location`, `found`) VALUES
(1, 111, 'iPad Air', 'SIG', '', 'true'),
(2, 122, 'iPad again', 'SIG', '23', 'true'),
(3, 333, 'iPad test', 'Title 1', '23', 'true'),
(4, 555, 'Ipad', 'SIG', '43', 'true'),
(5, 6667, 'ipad', '', '', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `highlands`
--

DROP TABLE IF EXISTS `highlands`;
CREATE TABLE `highlands` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `found` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lakewood`
--

DROP TABLE IF EXISTS `lakewood`;
CREATE TABLE `lakewood` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `found` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mcdonnell`
--

DROP TABLE IF EXISTS `mcdonnell`;
CREATE TABLE `mcdonnell` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `found` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mlk`
--

DROP TABLE IF EXISTS `mlk`;
CREATE TABLE `mlk` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `found` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `montview`
--

DROP TABLE IF EXISTS `montview`;
CREATE TABLE `montview` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `found` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `montview`
--

INSERT INTO `montview` (`ID`, `serial`, `description`, `funding`, `location`, `found`) VALUES
(1, 132, 'iPad mini', 'Title 1', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `morris`
--

DROP TABLE IF EXISTS `morris`;
CREATE TABLE `morris` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `found` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ridgecrest`
--

DROP TABLE IF EXISTS `ridgecrest`;
CREATE TABLE `ridgecrest` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `found` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rollinghills`
--

DROP TABLE IF EXISTS `rollinghills`;
CREATE TABLE `rollinghills` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `found` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shereford`
--

DROP TABLE IF EXISTS `shereford`;
CREATE TABLE `shereford` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `found` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `westlawn`
--

DROP TABLE IF EXISTS `westlawn`;
CREATE TABLE `westlawn` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `found` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapman`
--
ALTER TABLE `chapman`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dawson`
--
ALTER TABLE `dawson`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `highlands`
--
ALTER TABLE `highlands`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lakewood`
--
ALTER TABLE `lakewood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mcdonnell`
--
ALTER TABLE `mcdonnell`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mlk`
--
ALTER TABLE `mlk`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `montview`
--
ALTER TABLE `montview`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `morris`
--
ALTER TABLE `morris`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ridgecrest`
--
ALTER TABLE `ridgecrest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rollinghills`
--
ALTER TABLE `rollinghills`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shereford`
--
ALTER TABLE `shereford`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `westlawn`
--
ALTER TABLE `westlawn`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapman`
--
ALTER TABLE `chapman`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dawson`
--
ALTER TABLE `dawson`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `highlands`
--
ALTER TABLE `highlands`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lakewood`
--
ALTER TABLE `lakewood`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mcdonnell`
--
ALTER TABLE `mcdonnell`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mlk`
--
ALTER TABLE `mlk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `montview`
--
ALTER TABLE `montview`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `morris`
--
ALTER TABLE `morris`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ridgecrest`
--
ALTER TABLE `ridgecrest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rollinghills`
--
ALTER TABLE `rollinghills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shereford`
--
ALTER TABLE `shereford`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `westlawn`
--
ALTER TABLE `westlawn`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
