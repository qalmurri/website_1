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
-- Database: `com_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id_books` int(11) NOT NULL,
  `order_books` int(11) NOT NULL,
  `title_books` varchar(220) NOT NULL,
  `price_books` int(11) DEFAULT NULL,
  `total_books` int(11) DEFAULT NULL,
  `amount_books` int(11) DEFAULT NULL,
  `estimation_books` date DEFAULT NULL,
  `id_completeness` int(11) NOT NULL,
  `id_cover` int(11) NOT NULL,
  `show_books` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_books`, `order_books`, `title_books`, `price_books`, `total_books`, `amount_books`, `estimation_books`, `id_completeness`, `id_cover`, `show_books`) VALUES
(91, 1, 'Bunga Rampai', 0, 0, 0, '0000-00-00', 93, 40, 0),
(92, 2, 'Bunga Rampai2', 0, 0, 0, '0000-00-00', 94, 41, 1),
(93, 3, 'Bunga Rampai3', 0, 0, 0, '0000-00-00', 95, 42, 0);

-- --------------------------------------------------------

--
-- Table structure for table `completeness`
--

CREATE TABLE `completeness` (
  `id_completeness` int(11) NOT NULL,
  `file_completeness` int(11) NOT NULL,
  `editor_completeness` int(11) NOT NULL,
  `photo_completeness` int(11) NOT NULL,
  `foreword_completeness` int(11) NOT NULL,
  `cvbio_completeness` int(11) NOT NULL,
  `toc_completeness` int(11) NOT NULL,
  `synopsis_completeness` int(11) NOT NULL,
  `bibliografi_completeness` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completeness`
--

INSERT INTO `completeness` (`id_completeness`, `file_completeness`, `editor_completeness`, `photo_completeness`, `foreword_completeness`, `cvbio_completeness`, `toc_completeness`, `synopsis_completeness`, `bibliografi_completeness`) VALUES
(85, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cover`
--

CREATE TABLE `cover` (
  `id_cover` int(11) NOT NULL,
  `front_cover` varchar(220) NOT NULL,
  `back_cover` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cover`
--

INSERT INTO `cover` (`id_cover`, `front_cover`, `back_cover`) VALUES
(32, '0', '0'),
(33, '0', '0'),
(34, '0', '0'),
(35, '0', '0'),
(36, '0', '0'),
(37, '0', '0'),
(38, '0', '0'),
(39, '0', '0'),
(40, '0', '0'),
(41, '0', '0'),
(42, '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_books`);

--
-- Indexes for table `completeness`
--
ALTER TABLE `completeness`
  ADD PRIMARY KEY (`id_completeness`);

--
-- Indexes for table `cover`
--
ALTER TABLE `cover`
  ADD PRIMARY KEY (`id_cover`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id_books` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `completeness`
--
ALTER TABLE `completeness`
  MODIFY `id_completeness` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `cover`
--
ALTER TABLE `cover`
  MODIFY `id_cover` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
