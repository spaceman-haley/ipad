-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2017 at 02:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secure_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(2, '1495128650'),
(2, '1495128671'),
(2, '1495128753'),
(2, '1495129087'),
(2, '1495129107'),
(3, '1495129136'),
(1, '1495129154'),
(2, '1495129436'),
(1, '1495129465'),
(4, '1495129789'),
(4, '1495129806');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(1, 'test_user', 'test@example.com', '6ZaxN2Vzm9NUJT2y', ''),
(2, 'haley', 'haley@test.com', '8eab369b3df5d9199195b8e55252cda7a081b102565718e4fb92fe7f9982bc21b11616f16875ceb78276d3b703a03608af272ef389c6a30e5648411aa9f3bd8d', 'f49c3bbc8e88b5334825035d9d2183a222fac545965c1868e7b9debd6ba03e5c016c07ba85af41c795169f91e67ad08cf0b8a2e74ae472370e050e6a87afd052'),
(3, 'haley2', 'haley@example.com', '4493bbcbfd0d927b6f7ff405ea38a27c2e2240f49094938e31ac3fbaa0e353e935adec02c9b2218a92199eb0177341484ffa88baea131e5332e73720f53474e2', 'ec1a835737b9d0eda22644f0c9556353c3a2664dbda9a042fb77ffcadaa274d8a1b6a4090c9bc54b2af56c5f2e67e7357f9a656cc48aa5dc7f7869457ed15309'),
(4, 'haley3', 'haley@haley.com', 'a0396de66cc48e0c4048da5b566fd3de4f17420d8d19eeee381a710a76efc8fb5ae35f5c1888185d5d929669db91457109477f9780f0cf9d6b452051a776e919', 'a231176633c4ab72a36ab593453151aa8be282335d73856ecc7c5e43a06d57b6178772b6fbbcce524540e57d96beb15a5b3bc9b667b1001059d53b80739057fe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
