-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 12:16 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `com_category`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id_category` int(11) NOT NULL,
  `id_books` int(11) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id_category`, `id_books`, `id_member`) VALUES
(43, 84, 23),
(44, 84, 23),
(45, 84, 19),
(46, 84, 22),
(47, 84, 23),
(48, 84, 25),
(49, 86, 24),
(50, 86, 16),
(51, 86, 25),
(52, 86, 25),
(53, 86, 25),
(54, 86, 24),
(55, 86, 16),
(56, 86, 23),
(57, 86, 18),
(58, 86, 26),
(59, 86, 21),
(60, 86, 20),
(61, 86, 22),
(62, 86, 19),
(63, 86, 17),
(64, 85, 17),
(65, 85, 25),
(66, 85, 16),
(67, 85, 24),
(68, 93, 25),
(69, 91, 25),
(70, 91, 24),
(71, 91, 16),
(72, 91, 23),
(73, 91, 18),
(74, 91, 26),
(75, 91, 21),
(76, 91, 20),
(77, 91, 22),
(78, 91, 19),
(79, 91, 17),
(80, 92, 25),
(81, 92, 24),
(82, 92, 16),
(83, 92, 23),
(84, 92, 18),
(85, 92, 26),
(86, 92, 21),
(87, 92, 20),
(88, 92, 22),
(89, 92, 19),
(90, 92, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
