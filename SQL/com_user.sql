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
-- Database: `com_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username_login` varchar(220) NOT NULL,
  `password_login` varchar(220) NOT NULL,
  `token_login` int(11) DEFAULT NULL,
  `id_member` int(11) NOT NULL,
  `id_setting` int(11) NOT NULL,
  `id_section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username_login`, `password_login`, `token_login`, `id_member`, `id_setting`, `id_section`) VALUES
(1, 'admin', '123', 1670039755, 2, 1, 1),
(2, 'admin2', '123', 1670041236, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `name_member` varchar(220) NOT NULL,
  `image_member` varchar(220) DEFAULT NULL,
  `description_member` varchar(220) DEFAULT NULL,
  `id_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `name_member`, `image_member`, `description_member`, `id_part`) VALUES
(2, 'Admin', '2_1.jpg', 'Saya disini sebagai Admin', 1),
(3, 'Wigati', '3_maxresdefault.jpg', '', 3),
(30, 'Andrea Hirata', NULL, NULL, 5),
(31, 'Tere Liye', NULL, NULL, 5),
(32, 'Haidar Musyafa', NULL, NULL, 5),
(33, 'Raditya Dika', NULL, NULL, 5),
(34, 'Ika Natassa', NULL, NULL, 5),
(35, 'Eka Kurniawan', NULL, NULL, 5),
(36, 'Valerie Patkar', NULL, NULL, 5),
(37, 'Erisca Febriani', NULL, NULL, 5),
(38, 'Pramodyea Ananta Toer', NULL, NULL, 5),
(39, 'Ahmad Fuadi', '3_Logo Magerlur.png', NULL, 5),
(40, 'Murni Ramli', NULL, NULL, 5),
(41, 'Suwarto', NULL, NULL, 5),
(42, 'Agung Wibowo', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `id_part` int(11) NOT NULL,
  `name_part` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`id_part`, `name_part`) VALUES
(1, 'Admin'),
(2, 'Head'),
(3, 'Secretariat'),
(4, 'Designer'),
(5, 'Author'),
(6, 'Layouter'),
(7, 'Writer'),
(8, 'Apprenticeship'),
(9, 'Store');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id_section` int(11) NOT NULL,
  `name_section` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id_section`, `name_section`) VALUES
(1, 'company'),
(2, 'apprenticeship'),
(3, 'bookstore');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `header` int(11) NOT NULL,
  `home` int(11) NOT NULL,
  `footer` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `header`, `home`, `footer`) VALUES
(1, 11, 11, 'index'),
(2, 13, 13, 'index');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`id_part`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id_section`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id_section` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
