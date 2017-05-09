-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 12:55 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

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
  `funding` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapman`
--

INSERT INTO `chapman` (`ID`, `serial`, `description`, `funding`) VALUES
(1, 132, 'iPad mini', 'Title 1');

-- --------------------------------------------------------

--
-- Table structure for table `dawson`
--

DROP TABLE IF EXISTS `dawson`;
CREATE TABLE `dawson` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dawson`
--

INSERT INTO `dawson` (`ID`, `serial`, `description`, `funding`) VALUES
(1, 111, 'iPad Air', 'SIG');

-- --------------------------------------------------------

--
-- Table structure for table `morris`
--

DROP TABLE IF EXISTS `morris`;
CREATE TABLE `morris` (
  `ID` int(11) NOT NULL,
  `serial` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `morris`
--

INSERT INTO `morris` (`ID`, `serial`, `description`, `funding`) VALUES
(1, 1234, 'iPad 4', 'Title 1'),
(2, 12345, 'Ipad 2', 'SIG');

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
-- Indexes for table `morris`
--
ALTER TABLE `morris`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `morris`
--
ALTER TABLE `morris`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
