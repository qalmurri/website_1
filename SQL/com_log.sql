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
-- Database: `com_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `id_action` int(11) NOT NULL,
  `name_action` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`id_action`, `name_action`) VALUES
(1, 'logout'),
(2, 'login'),
(3, 'foto profil'),
(4, 'buat kk'),
(5, 'tambah penulis');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id_crud` int(11) NOT NULL,
  `name_crud` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id_crud`, `name_crud`) VALUES
(1, 'Create'),
(2, 'Read'),
(3, 'Update'),
(4, 'Delete');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_crud` int(11) NOT NULL,
  `id_action` int(11) NOT NULL,
  `id_target` int(11) DEFAULT NULL,
  `note_log` varchar(220) NOT NULL,
  `date_log` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `id_member`, `id_crud`, `id_action`, `id_target`, `note_log`, `date_log`) VALUES
(326, 3, 1, 4, 85, 'Bunga Rampai', '2022-11-26 09:06:00'),
(327, 3, 1, 5, 15, 'Pak Baru', '2022-11-26 09:06:05'),
(328, 3, 1, 3, NULL, '1669491910', '2022-11-27 02:45:10'),
(329, 3, 1, 4, 86, 'Hukum Rimba', '2022-11-27 02:46:01'),
(330, 3, 1, 4, 87, 'Perjuangan Sesaat', '2022-11-27 02:46:25'),
(331, 3, 1, 3, NULL, '1669491910', '2022-11-27 02:56:48'),
(332, 3, 1, 3, NULL, '1669492651', '2022-11-27 02:57:31'),
(333, 3, 1, 3, NULL, '1669492651', '2022-11-27 02:59:17'),
(334, 2, 1, 3, NULL, '1669492766', '2022-11-27 02:59:26'),
(335, 2, 1, 3, NULL, '1669492766', '2022-11-27 03:00:44'),
(336, 3, 1, 3, NULL, '1669492850', '2022-11-27 03:00:50'),
(337, 3, 1, 3, NULL, '1669492850', '2022-11-27 03:02:51'),
(338, 3, 1, 3, NULL, '1669492998', '2022-11-27 03:03:18'),
(339, 3, 1, 3, NULL, '1669520057', '2022-11-27 10:34:17'),
(340, 3, 1, 5, 16, 'Pak Sarjono', '2022-11-27 10:41:10'),
(341, 3, 1, 5, 17, 'pak lek', '2022-11-27 10:41:14'),
(342, 3, 1, 5, 18, 'pak kintil', '2022-11-27 10:41:31'),
(343, 3, 1, 5, 19, '123123', '2022-11-27 10:41:35'),
(344, 3, 1, 5, 20, 'Pak Sarjono', '2022-11-27 10:41:37'),
(345, 3, 1, 5, 21, 'pak sarjono', '2022-11-27 10:41:42'),
(346, 3, 1, 5, 22, 'a', '2022-11-27 10:41:52'),
(347, 3, 1, 5, 23, 'b', '2022-11-27 10:41:56'),
(348, 3, 1, 5, 24, 'c', '2022-11-27 10:41:59'),
(349, 3, 1, 5, 25, 'e', '2022-11-27 10:42:02'),
(350, 3, 1, 5, 26, 'd', '2022-11-27 10:42:04'),
(351, 3, 1, 4, 88, 'Halusinasi', '2022-11-27 14:53:39'),
(352, 3, 1, 4, 89, 'Bunga Rampai', '2022-11-27 14:57:45'),
(353, 3, 1, 4, 90, 'Bunga Rampai', '2022-11-27 14:58:32'),
(354, 3, 1, 4, 91, 'Bunga Rampai6', '2022-11-27 15:01:27'),
(355, 3, 1, 4, 92, 'Bunga Rampai7', '2022-11-27 15:01:36'),
(356, 3, 1, 4, 93, 'Bunga Rampai', '2022-11-27 15:02:01'),
(357, 3, 1, 4, 94, 'Bunga Rampai2', '2022-11-27 15:02:20'),
(358, 3, 1, 4, 95, 'Bunga Rampai3', '2022-11-27 15:02:28'),
(359, 3, 1, 3, NULL, '1669520057', '2022-11-27 15:09:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id_action`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id_crud`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `id_action` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id_crud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
