-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2021 at 02:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient_database`
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
  `decision_adm_decs` varchar(156) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dataset_pasien`
--

INSERT INTO `dataset_pasien` (`id`, `l_core`, `l_surf`, `l_o2`, `l_bp`, `surf_stbl`, `core_stbl`, `bp_stbl`, `comfort`, `decision_adm_decs`, `updated_at`, `created_at`) VALUES
(2, 'mid', 'high', 'excellent', 'high', 'stable', 'stable', 'stable', '10', 'S', NULL, NULL),
(3, 'high', 'low', 'excellent', 'high', 'stable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(4, 'mid', 'low', 'good', 'high', 'stable', 'unstable', 'mod-stable', '15', 'A', NULL, NULL),
(5, 'mid', 'mid', 'excellent', 'high', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(6, 'high', 'low', 'good', 'mid', 'stable', 'stable', 'unstable', '15', 'S', NULL, NULL),
(7, 'mid', 'low', 'excellent', 'high', 'stable', 'stable', 'mod-stable', '5', 'S', NULL, NULL),
(8, 'high', 'mid', 'excellent', 'mid', 'unstable', 'unstable', 'stable', '10', 'S', NULL, NULL),
(9, 'mid', 'high', 'good', 'mid', 'stable', 'stable', 'stable', '10', 'S', NULL, NULL),
(10, 'mid', 'low', 'excellent', 'mid', 'unstable', 'stable', 'mod-stable', '10', 'S', NULL, NULL),
(11, 'mid', 'mid', 'good', 'mid', 'stable', 'stable', 'stable', '15', 'A', NULL, NULL),
(12, 'mid', 'low', 'good', 'high', 'stable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(13, 'high', 'high', 'excellent', 'high', 'unstable', 'stable', 'unstable', '15', 'A', NULL, NULL),
(14, 'mid', 'high', 'good', 'mid', 'unstable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(15, 'mid', 'low', 'good', 'high', 'unstable', 'unstable', 'stable', '15', 'S', NULL, NULL),
(16, 'high', 'high', 'excellent', 'high', 'unstable', 'stable', 'unstable', '10', 'A', NULL, NULL),
(17, 'low', 'high', 'good', 'high', 'unstable', 'stable', 'mod-stable', '15', 'A', NULL, NULL),
(18, 'mid', 'low', 'good', 'high', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(19, 'mid', 'high', 'good', 'mid', 'unstable', 'stable', 'unstable', '15', 'A', NULL, NULL),
(20, 'mid', 'mid', 'good', 'mid', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(21, 'low', 'high', 'good', 'mid', 'unstable', 'stable', 'stable', '15', 'A', NULL, NULL),
(22, 'low', 'mid', 'excellent', 'high', 'unstable', 'stable', 'unstable', '10', 'S', NULL, NULL),
(23, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'unstable', '15', 'A', NULL, NULL),
(24, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(25, 'high', 'high', 'good', 'mid', 'stable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(26, 'low', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(27, 'high', 'mid', 'good', 'low', 'stable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(28, 'low', 'mid', 'excellent', 'high', 'stable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(29, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'unstable', '15', 'A', NULL, NULL),
(30, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'unstable', '10', 'S', NULL, NULL),
(31, 'mid', 'mid', 'good', 'high', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(32, 'low', 'low', 'good', 'mid', 'unstable', 'stable', 'unstable', '10', 'A', NULL, NULL),
(33, 'mid', 'mid', 'excellent', 'high', 'unstable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(34, 'mid', 'low', 'good', 'mid', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(35, 'low', 'mid', 'excellent', 'high', 'stable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(36, 'mid', 'mid', 'good', 'mid', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(37, 'low', 'mid', 'excellent', 'mid', 'stable', 'stable', 'stable', '10', 'S', NULL, NULL),
(38, 'low', 'low', 'good', 'mid', 'unstable', 'stable', 'unstable', '10', 'S', NULL, NULL),
(39, 'low', 'low', 'good', 'mid', 'stable', 'stable', 'stable', '7', 'S', NULL, NULL),
(40, 'mid', 'mid', 'good', 'high', 'unstable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(41, 'low', 'low', 'good', 'mid', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(42, 'low', 'mid', 'good', 'mid', 'stable', 'stable', 'stable', '15', 'S', NULL, NULL),
(43, 'high', 'high', 'good', 'high', 'unstable', 'stable', 'stable', '15', 'S', NULL, NULL),
(44, 'mid', 'mid', 'good', 'mid', 'stable', 'stable', 'stable', '10', 'S', NULL, NULL),
(45, 'low', 'low', 'excellent', 'mid', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(46, 'low', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '10', 'S', NULL, NULL),
(48, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(49, 'high', 'high', 'excellent', 'high', 'stable', 'stable', 'unstable', '?', 'A', NULL, NULL),
(50, 'mid', 'high', 'good', 'low', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(51, 'mid', 'high', 'good', 'mid', 'unstable', 'mod-stable', 'mod-stable', '10', 'A', NULL, NULL),
(52, 'low', 'high', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(53, 'mid', 'low', 'excellent', 'high', 'unstable', 'stable', 'unstable', '10', 'A', NULL, NULL),
(54, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'mod-stable', '10', 'S', NULL, NULL),
(55, 'high', 'high', 'excellent', 'mid', 'unstable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(56, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '15', 'A', NULL, NULL),
(57, 'high', 'mid', 'good', 'high', 'stable', 'stable', 'unstable', '15', 'A', NULL, NULL),
(58, 'mid', 'low', 'good', 'high', 'unstable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(59, 'low', 'low', 'good', 'high', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(60, 'mid', 'high', 'good', 'mid', 'stable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(61, 'mid', 'high', 'good', 'mid', 'unstable', 'stable', 'unstable', '10', 'A', NULL, NULL),
(62, 'mid', 'low', 'excellent', 'high', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(63, 'mid', 'mid', 'good', 'mid', 'stable', 'stable', 'unstable', '10', 'A', NULL, NULL),
(64, 'mid', 'low', 'excellent', 'mid', 'stable', 'stable', 'unstable', '10', 'S', NULL, NULL),
(65, 'high', 'mid', 'excellent', 'mid', 'unstable', 'unstable', 'unstable', '10', 'A', NULL, NULL),
(66, 'mid', 'mid', 'good', 'high', 'stable', 'stable', 'stable', '10', 'S', NULL, NULL),
(67, 'mid', 'low', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(68, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(69, 'mid', 'mid', 'excellent', 'high', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(70, 'mid', 'mid', 'excellent', 'low', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(71, 'mid', 'low', 'excellent', 'mid', 'unstable', 'unstable', 'unstable', '?', 'A', NULL, NULL),
(72, 'low', 'low', 'excellent', 'mid', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(73, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'mod-stable', '10', 'S', NULL, NULL),
(74, 'mid', 'mid', 'excellent', 'high', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(75, 'mid', 'low', 'excellent', 'high', 'stable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(76, 'low', 'mid', 'good', 'mid', 'stable', 'stable', 'unstable', '10', 'A', NULL, NULL),
(77, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'mod-stable', '10', 'A', NULL, NULL),
(78, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'unstable', '10', 'A', NULL, NULL),
(79, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'unstable', 'stable', '10', 'S', NULL, NULL),
(80, 'mid', 'mid', 'good', 'high', 'stable', 'stable', 'stable', '10', 'A', NULL, NULL),
(81, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'stable', '15', 'A', NULL, NULL),
(82, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'stable', '10', 'S', NULL, NULL),
(84, 'high', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'unstable', '5', 'A', NULL, NULL),
(85, 'mid', 'mid', 'excellent', 'mid', 'stable', 'stable', 'unstable', '10', 'A', NULL, NULL),
(86, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(87, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'stable', '15', 'S', NULL, NULL),
(88, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '15', 'A', NULL, NULL),
(89, 'mid', 'mid', 'excellent', 'mid', 'unstable', 'stable', 'stable', '10', 'A', NULL, NULL),
(90, 'mid', 'mid', 'good', 'mid', 'unstable', 'stable', 'stable', '15', 'S', NULL, NULL),
(93, 'HIGH', 'HIGH', 'HIGH', 'HIGH', 'STABLE', 'HIGH', 'HIGH', '1', 'A', '2021-07-02 02:38:39', '2021-07-02 02:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(12) NOT NULL,
  `l_core` varchar(92) NOT NULL,
  `l_surf` varchar(144) NOT NULL,
  `l_o2` varchar(107) NOT NULL,
  `l_bp` varchar(103) NOT NULL,
  `surf_stbl` varchar(84) NOT NULL,
  `core_stbl` varchar(80) NOT NULL,
  `bp_stbl` varchar(76) NOT NULL,
  `comfort` varchar(91) NOT NULL,
  `result_a` varchar(30) NOT NULL,
  `result_s` varchar(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataset_pasien`
--
ALTER TABLE `dataset_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataset_pasien`
--
ALTER TABLE `dataset_pasien`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
