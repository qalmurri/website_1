-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 05:02 PM
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
  `id_completeness` int(11) NOT NULL,
  `id_cover` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_books`, `order_books`, `title_books`, `id_completeness`, `id_cover`) VALUES
(55, 1, 'Bunga Rampai', 55, 2);

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
(55, 0, 0, 0, 0, 0, 0, 0, 0);

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
(2, '0', '0');

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
  MODIFY `id_books` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `completeness`
--
ALTER TABLE `completeness`
  MODIFY `id_completeness` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `cover`
--
ALTER TABLE `cover`
  MODIFY `id_cover` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
