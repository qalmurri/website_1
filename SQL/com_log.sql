-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Nov 25, 2022 at 02:09 AM
=======
-- Generation Time: Nov 24, 2022 at 05:02 PM
>>>>>>> d8eab171a4e8ed248fe534d706ef5059af5d9c3b
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
(4, 'buat kk');

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
  `note_log` varchar(220) NOT NULL,
  `date_log` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `id_member`, `id_crud`, `id_action`, `note_log`, `date_log`) VALUES
(227, 3, 1, 4, 'Bunga Rampai', '2022-11-23 21:06:48'),
(228, 3, 1, 1, '1669205234', '2022-11-23 21:08:29'),
(229, 2, 1, 2, '1669212525', '2022-11-23 21:08:45'),
(230, 2, 1, 1, '1669212525', '2022-11-23 21:08:50'),
(231, 3, 1, 2, '1669212536', '2022-11-23 21:08:56'),
(232, 3, 1, 4, 'Bunga Rampai ke 2', '2022-11-23 21:09:02'),
(233, 3, 1, 4, '123', '2022-11-23 21:12:34'),
(234, 3, 1, 4, '123', '2022-11-23 21:12:44'),
(235, 3, 1, 1, '1669212536', '2022-11-23 21:17:46'),
(236, 2, 1, 2, '1669213071', '2022-11-23 21:17:51'),
(237, 2, 3, 3, '', '2022-11-23 21:19:07'),
(238, 2, 3, 3, '', '2022-11-23 21:26:32'),
(239, 2, 1, 1, '1669213071', '2022-11-23 22:36:43'),
(240, 3, 1, 2, '1669217809', '2022-11-23 22:36:49'),
(241, 3, 1, 1, '1669217809', '2022-11-23 22:36:55'),
(242, 2, 1, 2, '1669217819', '2022-11-23 22:36:59'),
(243, 2, 1, 2, '1669244691', '2022-11-24 06:04:51'),
(244, 2, 1, 3, '1669244691', '2022-11-24 06:07:31'),
(245, 3, 1, 3, '1669244858', '2022-11-24 06:07:38'),
(246, 3, 1, 4, 'Malang Selatan', '2022-11-24 06:14:55'),
(247, 3, 1, 3, '1669245910', '2022-11-24 06:25:10'),
(248, 3, 1, 4, 'Dengan Ini Saya Menyatakan Bahwa Website Sepenuhnya mengalami kenaikan', '2022-11-24 06:25:39'),
(249, 3, 1, 4, 'Bunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBunga RampaiBung', '2022-11-24 06:56:55'),
(250, 2, 1, 3, '1669282545', '2022-11-24 16:35:45'),
(251, 2, 1, 3, '1669282545', '2022-11-24 16:37:44'),
(252, 3, 1, 3, '1669282669', '2022-11-24 16:37:49'),
(253, 3, 1, 4, 'dengan demikian', '2022-11-24 17:08:45'),
(254, 3, 1, 4, 'Bunga Rampai', '2022-11-24 17:30:58'),
(255, 3, 1, 4, 'Desa Wisata', '2022-11-24 17:31:22'),
(256, 3, 1, 4, 'Test bisa gak', '2022-11-24 17:32:34'),
(257, 3, 1, 3, '1669304350', '2022-11-24 22:39:10'),
<<<<<<< HEAD
(258, 3, 1, 4, 'Bunga Rampai', '2022-11-24 22:56:05'),
(259, 2, 1, 3, '1669338422', '2022-11-25 08:07:02');
=======
(258, 3, 1, 4, 'Bunga Rampai', '2022-11-24 22:56:05');
>>>>>>> d8eab171a4e8ed248fe534d706ef5059af5d9c3b

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
  MODIFY `id_action` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id_crud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
<<<<<<< HEAD
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;
=======
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;
>>>>>>> d8eab171a4e8ed248fe534d706ef5059af5d9c3b
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
