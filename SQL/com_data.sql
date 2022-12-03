-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 06:28 AM
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
  `id_specification` int(11) NOT NULL,
  `id_production` int(11) NOT NULL,
  `show_books` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_books`, `order_books`, `title_books`, `price_books`, `total_books`, `amount_books`, `estimation_books`, `id_completeness`, `id_cover`, `id_specification`, `id_production`, `show_books`) VALUES
(104, 1, 'Desain Pembelajaran Gaming Berbasis Learning Progression: Meningkatkan Pedagogical Content Knowledge Guru melalui Pembelajaran yang Bermakna dan Menyenangkan', 40000, 400000, 10, '2022-12-03', 106, 53, 0, 0, 1),
(105, 2, 'Manajemen Perubahan dan Resolusi Konflik: Studi kasus dalam Pembangunan Objek Wisata di Pedesaan', 20000, 200000, 10, '2022-12-04', 107, 54, 0, 0, 1),
(106, 3, 'Testing', 0, 0, 0, '0000-00-00', 108, 55, 1, 1, 0);

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
  `text_synopsis_completeness` varchar(220) NOT NULL,
  `bibliografi_completeness` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completeness`
--

INSERT INTO `completeness` (`id_completeness`, `file_completeness`, `editor_completeness`, `photo_completeness`, `foreword_completeness`, `cvbio_completeness`, `toc_completeness`, `synopsis_completeness`, `text_synopsis_completeness`, `bibliografi_completeness`) VALUES
(98, 0, 0, 0, 0, 0, 0, 0, '', 0),
(99, 0, 0, 0, 0, 0, 0, 0, '', 0),
(100, 0, 0, 0, 0, 0, 0, 0, '', 0),
(101, 0, 0, 0, 0, 0, 0, 0, '', 0),
(102, 0, 0, 0, 0, 0, 0, 0, '', 0),
(103, 0, 0, 0, 0, 0, 0, 0, '', 0),
(104, 0, 0, 0, 0, 0, 0, 0, '', 0),
(105, 0, 0, 0, 0, 0, 0, 0, '', 0),
(106, 0, 0, 0, 0, 0, 0, 0, '', 0),
(107, 0, 0, 0, 0, 0, 0, 0, '', 0),
(108, 0, 0, 0, 0, 0, 0, 0, '', 0);

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
(45, '0', '0'),
(46, '0', '0'),
(47, '0', '0'),
(48, '0', '0'),
(49, '0', '0'),
(50, '0', '0'),
(51, '0', '0'),
(52, '0', '0'),
(53, '0', '0'),
(54, '0', '0'),
(55, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id_production` int(11) NOT NULL,
  `process_production` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`id_production`, `process_production`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `di_specification` int(11) NOT NULL,
  `pages_specification` int(11) NOT NULL,
  `isbn_specification` int(11) NOT NULL,
  `eisbn_specification` int(11) NOT NULL,
  `size_specification` varchar(220) NOT NULL,
  `paper_specification` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`di_specification`, `pages_specification`, `isbn_specification`, `eisbn_specification`, `size_specification`, `paper_specification`) VALUES
(1, 0, 0, 0, '', '');

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
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id_production`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`di_specification`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id_books` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `completeness`
--
ALTER TABLE `completeness`
  MODIFY `id_completeness` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `cover`
--
ALTER TABLE `cover`
  MODIFY `id_cover` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id_production` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
  MODIFY `di_specification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
