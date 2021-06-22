-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 11:19 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataset_pasien`
--

CREATE TABLE `dataset_pasien` (
  `id` int(12) NOT NULL,
  `l_core` varchar(92) NOT NULL,
  `l_surf` varchar(144) NOT NULL,
  `l_o2` varchar(107) NOT NULL,
  `l_bp` varchar(103) NOT NULL,
  `surf_stbl` varchar(84) NOT NULL,
  `core_stbl` varchar(80) NOT NULL,
  `bp_stbl` varchar(76) NOT NULL,
  `comfort` varchar(91) NOT NULL,
  `decision_adm_decs` varchar(156) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dataset_pasien`
--

INSERT INTO `dataset_pasien` (`id`, `l_core`, `l_surf`, `l_o2`, `l_bp`, `surf_stbl`, `core_stbl`, `bp_stbl`, `comfort`, `decision_adm_decs`) VALUES
(1, 'mid', 'low', 'excellent', 'mid', 'stable', 'stable', 'stable', '15', 'A'),
(2, 'mid', 'high', 'excellent', 'high', 'stable', 'stable', 'stable', '10', 'S'),
(3, 'high', 'low', 'excellent', 'high', 'stable', 'stable', 'mod-stable', '10', 'A'),
(4, 'mid', 'low', 'good', 'high', 'stable', 'unstable', 'mod-stable', '15', 'A'),
(5, 'mid', 'mid', 'excellent', 'high', 'stable', 'stable', 'stable', '10', 'A'),
(6, 'high', 'low', 'good', 'mid', 'stable', 'stable', 'unstable', '15', 'S'),
(7, 'mid', 'low', 'excellent', 'high', 'stable', 'stable', 'mod-stable', '5', 'S'),
(8, 'high', 'mid', 'excellent', 'mid', 'unstable', 'unstable', 'stable', '10', 'S'),
(9, 'mid', 'high', 'good', 'mid', 'stable', 'stable', 'stable', '10', 'S'),
(10, 'mid', 'low', 'excellent', 'mid', 'unstable', 'stable', 'mod-stable', '10', 'S'),
(11, 'mid', 'mid', 'good', 'mid', 'stable', 'stable', 'stable', '15', 'A'),
(12, 'mid', 'low', 'good', 'high', 'stable', 'stable', 'mod-stable', '10', 'A'),
(13, 'high', 'high', 'excellent', 'high', 'unstable', 'stable', 'unstable', '15', 'A'),
(14, 'mid', 'high', 'good', 'mid', 'unstable', 'stable', 'mod-stable', '10', 'A'),
(15, 'mid', 'low', 'good', 'high', 'unstable', 'unstable', 'stable', '15', 'S'),
(16, 'high', 'high', 'excellent', 'high', 'unstable', 'stable', 'unstable', '10', 'A'),
(17, 'low', 'high', 'good', 'high', 'unstable', 'stable', 'mod-stable', '15', 'A'),
(18, 'mid', 'low', 'good', 'high', 'unstable', 'stable', 'stable', '10', 'A'),
(19, 'mid', 'high', 'good', 'mid', 'unstable', 'stable', 'unstable', '15', 'A'),
(20, 'mid', 'mid', 'good', 'mid', 'stable', 'stable', 'stable', '10', 'A'),
(21, 'low', 'high', 'good', 'mid', 'unstable', 'stable', 'stable', '15', 'A'),
(22, 'low', 'mid', 'excellent', 'high', 'unstable', 'stable', 'unstable', '10', 'S'),
(23, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'unstable', '15', 'A'),
(24, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '10', 'A'),
(25, 'high', 'high', 'good', 'mid', 'stable', 'stable', 'mod-stable', '10', 'A'),
(26, 'low', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '10', 'A'),
(27, 'high', 'mid', 'good', 'low', 'stable', 'stable', 'mod-stable', '10', 'A'),
(28, 'low', 'mid', 'excellent', 'high', 'stable', 'stable', 'mod-stable', '10', 'A'),
(29, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'unstable', '15', 'A'),
(30, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'unstable', '10', 'S'),
(31, 'mid', 'mid', 'good', 'high', 'unstable', 'stable', 'stable', '10', 'A'),
(32, 'low', 'low', 'good', 'mid', 'unstable', 'stable', 'unstable', '10', 'A'),
(33, 'mid', 'mid', 'excellent', 'high', 'unstable', 'stable', 'mod-stable', '10', 'A'),
(34, 'mid', 'low', 'good', 'mid', 'stable', 'stable', 'stable', '10', 'A'),
(35, 'low', 'mid', 'excellent', 'high', 'stable', 'stable', 'mod-stable', '10', 'A'),
(36, 'mid', 'mid', 'good', 'mid', 'stable', 'stable', 'stable', '10', 'A'),
(37, 'low', 'mid', 'excellent', 'mid', 'stable', 'stable', 'stable', '10', 'S'),
(38, 'low', 'low', 'good', 'mid', 'unstable', 'stable', 'unstable', '10', 'S'),
(39, 'low', 'low', 'good', 'mid', 'stable', 'stable', 'stable', '7', 'S'),
(40, 'mid', 'mid', 'good', 'high', 'unstable', 'stable', 'mod-stable', '10', 'A'),
(41, 'low', 'low', 'good', 'mid', 'unstable', 'stable', 'stable', '10', 'A'),
(42, 'low', 'mid', 'good', 'mid', 'stable', 'stable', 'stable', '15', 'S'),
(43, 'high', 'high', 'good', 'high', 'unstable', 'stable', 'stable', '15', 'S'),
(44, 'mid', 'mid', 'good', 'mid', 'stable', 'stable', 'stable', '10', 'S'),
(45, 'low', 'low', 'excellent', 'mid', 'stable', 'stable', 'stable', '10', 'A'),
(46, 'low', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '10', 'S'),
(48, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A'),
(49, 'high', 'high', 'excellent', 'high', 'stable', 'stable', 'unstable', '?', 'A'),
(50, 'mid', 'high', 'good', 'low', 'unstable', 'stable', 'stable', '10', 'A'),
(51, 'mid', 'high', 'good', 'mid', 'unstable', 'mod-stable', 'mod-stable', '10', 'A'),
(52, 'low', 'high', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A'),
(53, 'mid', 'low', 'excellent', 'high', 'unstable', 'stable', 'unstable', '10', 'A'),
(54, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'mod-stable', '10', 'S'),
(55, 'high', 'high', 'excellent', 'mid', 'unstable', 'stable', 'mod-stable', '10', 'A'),
(56, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '15', 'A'),
(57, 'high', 'mid', 'good', 'high', 'stable', 'stable', 'unstable', '15', 'A'),
(58, 'mid', 'low', 'good', 'high', 'unstable', 'stable', 'mod-stable', '10', 'A'),
(59, 'low', 'low', 'good', 'high', 'stable', 'stable', 'stable', '10', 'A'),
(60, 'mid', 'high', 'good', 'mid', 'stable', 'stable', 'mod-stable', '10', 'A'),
(61, 'mid', 'high', 'good', 'mid', 'unstable', 'stable', 'unstable', '10', 'A'),
(62, 'mid', 'low', 'excellent', 'high', 'stable', 'stable', 'stable', '10', 'A'),
(63, 'mid', 'mid', 'good', 'mid', 'stable', 'stable', 'unstable', '10', 'A'),
(64, 'mid', 'low', 'excellent', 'mid', 'stable', 'stable', 'unstable', '10', 'S'),
(65, 'high', 'mid', 'excellent', 'mid', 'unstable', 'unstable', 'unstable', '10', 'A'),
(66, 'mid', 'mid', 'good', 'high', 'stable', 'stable', 'stable', '10', 'S'),
(67, 'mid', 'low', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A'),
(68, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A'),
(69, 'mid', 'mid', 'excellent', 'high', 'stable', 'stable', 'stable', '10', 'A'),
(70, 'mid', 'mid', 'excellent', 'low', 'stable', 'stable', 'stable', '10', 'A'),
(71, 'mid', 'low', 'excellent', 'mid', 'unstable', 'unstable', 'unstable', '?', 'A'),
(72, 'low', 'low', 'excellent', 'mid', 'stable', 'stable', 'stable', '10', 'A'),
(73, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'mod-stable', '10', 'S'),
(74, 'mid', 'mid', 'excellent', 'high', 'stable', 'stable', 'stable', '10', 'A'),
(75, 'mid', 'low', 'excellent', 'high', 'stable', 'stable', 'mod-stable', '10', 'A'),
(76, 'low', 'mid', 'good', 'mid', 'stable', 'stable', 'unstable', '10', 'A'),
(77, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'mod-stable', '10', 'A'),
(78, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'unstable', '10', 'A'),
(79, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'unstable', 'stable', '10', 'S'),
(80, 'mid', 'mid', 'good', 'high', 'stable', 'stable', 'stable', '10', 'A'),
(81, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'stable', '15', 'A'),
(82, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'stable', '10', 'S'),
(84, 'high', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'unstable', '5', 'A'),
(85, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'unstable', '10', 'A'),
(86, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A'),
(87, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'stable', '15', 'S'),
(88, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '15', 'A'),
(89, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A'),
(90, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '15', 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataset_pasien`
--
ALTER TABLE `dataset_pasien`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
