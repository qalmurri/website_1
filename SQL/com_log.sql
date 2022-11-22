-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 02:15 AM
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
(3, 'foto profil');

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
(132, 2, 1, 2, '1669041554', '2022-11-21 21:39:14'),
(133, 2, 1, 1, '1669041554', '2022-11-21 21:39:19'),
(134, 2, 1, 2, '1669041951', '2022-11-21 21:45:51'),
(135, 2, 1, 1, '1669041951', '2022-11-21 22:01:21'),
(136, 2, 1, 2, '1669042887', '2022-11-21 22:01:27'),
(137, 2, 1, 1, '1669042887', '2022-11-21 22:42:27'),
(138, 3, 1, 2, '1669045353', '2022-11-21 22:42:33'),
(139, 3, 3, 3, '', '2022-11-21 22:43:44'),
(140, 3, 1, 1, '1669045353', '2022-11-21 22:43:47'),
(141, 2, 1, 2, '1669045431', '2022-11-21 22:43:51'),
(142, 2, 1, 1, '1669045431', '2022-11-21 22:44:36'),
(143, 2, 1, 2, '1669045480', '2022-11-21 22:44:40'),
(144, 2, 1, 1, '1669045480', '2022-11-21 22:44:45'),
(145, 3, 1, 2, '1669045490', '2022-11-21 22:44:50'),
(146, 3, 1, 1, '1669045490', '2022-11-21 22:44:51'),
(147, 2, 1, 2, '1669045494', '2022-11-21 22:44:54'),
(148, 2, 1, 1, '1669045494', '2022-11-21 22:46:11'),
(149, 2, 1, 2, '1669045575', '2022-11-21 22:46:15'),
(150, 2, 3, 3, '', '2022-11-21 22:47:06'),
(151, 3, 1, 2, '1669045656', '2022-11-21 22:47:36'),
(152, 3, 1, 1, '1669045656', '2022-11-21 22:48:35'),
(153, 2, 1, 2, '1669045800', '2022-11-21 22:50:00'),
(154, 2, 1, 1, '1669045800', '2022-11-21 22:50:06'),
(155, 2, 1, 2, '1669045810', '2022-11-21 22:50:10'),
(156, 3, 1, 2, '1669045817', '2022-11-21 22:50:17'),
(157, 3, 1, 1, '1669045817', '2022-11-21 22:51:47'),
(158, 3, 1, 2, '1669045994', '2022-11-21 22:53:14'),
(159, 3, 1, 1, '1669045994', '2022-11-21 22:53:22'),
(160, 3, 1, 2, '1669046311', '2022-11-21 22:58:31'),
(161, 3, 3, 3, '', '2022-11-21 22:58:39'),
(162, 3, 1, 1, '1669046311', '2022-11-21 22:58:44'),
(163, 2, 1, 2, '1669046715', '2022-11-21 23:05:15'),
(164, 2, 1, 2, '1669046728', '2022-11-21 23:05:28'),
(165, 3, 1, 2, '1669046736', '2022-11-21 23:05:36'),
(166, 3, 1, 1, '1669046736', '2022-11-21 23:05:41'),
(167, 3, 1, 2, '1669046749', '2022-11-21 23:05:49'),
(168, 3, 3, 3, '', '2022-11-21 23:05:54'),
(169, 3, 3, 3, '', '2022-11-21 23:19:22'),
(170, 3, 1, 1, '1669046749', '2022-11-21 23:19:28'),
(171, 2, 1, 2, '1669078631', '2022-11-22 07:57:11'),
(172, 2, 1, 1, '1669078631', '2022-11-22 08:02:57'),
(173, 3, 1, 2, '1669078980', '2022-11-22 08:03:00'),
(174, 3, 1, 1, '1669078980', '2022-11-22 08:03:05'),
(175, 2, 1, 2, '1669078991', '2022-11-22 08:03:11'),
(176, 2, 3, 3, '', '2022-11-22 08:09:54'),
(177, 3, 1, 2, '1669079413', '2022-11-22 08:10:13'),
(178, 3, 1, 1, '1669079413', '2022-11-22 08:10:24'),
(179, 3, 1, 2, '1669079527', '2022-11-22 08:12:07'),
(180, 3, 1, 1, '1669079527', '2022-11-22 08:12:24'),
(181, 2, 1, 2, '1669079570', '2022-11-22 08:12:50'),
(182, 2, 1, 2, '1669079586', '2022-11-22 08:13:06');

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
  MODIFY `id_action` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id_crud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
