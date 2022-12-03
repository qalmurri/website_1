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
(401, 2, 1, 3, NULL, '1670039755', '2022-12-03 11:20:32'),
(402, 3, 1, 3, NULL, '1670041236', '2022-12-03 11:20:36'),
(403, 3, 1, 4, 106, 'Desain Pembelajaran Gaming Berbasis Learning Progression: Meningkatkan Pedagogical Content Knowledge Guru melalui Pembelajaran yang Bermakna dan Menyenangkan', '2022-12-03 11:22:38'),
(404, 3, 1, 5, 40, 'Murni Ramli', '2022-12-03 11:22:53'),
(405, 3, 1, 4, 107, 'Manajemen Perubahan dan Resolusi Konflik: Studi kasus dalam Pembangunan Objek Wisata di Pedesaan', '2022-12-03 11:32:36'),
(406, 3, 1, 5, 41, 'Suwarto', '2022-12-03 11:32:55'),
(407, 3, 1, 5, 42, 'Agung Wibowo', '2022-12-03 11:33:07'),
(408, 3, 3, 3, NULL, '3_maxresdefault.jpg', '2022-12-03 11:35:23'),
(409, 3, 1, 4, 108, 'Testing', '2022-12-03 12:00:56');

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
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=410;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
