-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 03:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cict`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `is_archived` int(11) NOT NULL DEFAULT 0,
  `verified_at` timestamp NULL DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_expiration` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `number`, `email`, `type`, `password`, `is_archived`, `verified_at`, `reset_token`, `reset_expiration`) VALUES
(1, '2020101630', 'jemuel.banag.d@bulsu.edu.ph', 'student', '81dc9bdb52d04dc20036dbd8313ed055', 0, NULL, NULL, NULL),
(2, '2020102020', 'jamesmarvic@gmail.com', 'student', '25d55ad283aa400af464c76d713c07ad', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `account_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`account_id`, `first_name`, `middle_name`, `last_name`, `image`, `contact`) VALUES
('2020101630', 'Jemuel', 'middle_name', 'Banag', NULL, NULL),
('2020102020', 'James Marvic', 'Reyes', 'Marasigan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `studies_id` varchar(255) NOT NULL,
  `account_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `status`, `created_at`, `updated_at`, `studies_id`, `account_id`) VALUES
(1, 0, '2024-04-01 13:20:18', NULL, '7', '2020102020'),
(2, 0, '2024-03-28 13:51:29', NULL, '6', '2020102020');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `account_id` varchar(255) NOT NULL,
  `survey_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `created_at`, `account_id`, `survey_id`) VALUES
(1, '2024-03-13 16:33:30', '2020102020', '8'),
(2, '2024-03-14 09:13:50', '2020102020', '8'),
(3, '2024-03-14 15:31:27', '2020102020', '8'),
(4, '2024-03-14 15:36:20', '2020102020', '8'),
(5, '2024-03-14 15:46:44', '2020102020', '9'),
(6, '2024-03-14 15:47:30', '2020102020', '9'),
(7, '2024-03-14 16:36:07', '2020102020', '9');

-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

CREATE TABLE `studies` (
  `id` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `research_title` varchar(255) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `panels` varchar(255) NOT NULL,
  `accession` varchar(255) NOT NULL,
  `adviser` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `month_yr` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `account_id` varchar(255) NOT NULL,
  `is_archived` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studies`
--

INSERT INTO `studies` (`id`, `project_title`, `research_title`, `authors`, `panels`, `accession`, `adviser`, `tags`, `month_yr`, `description`, `file`, `cover`, `created_at`, `account_id`, `is_archived`) VALUES
(6, 'BulSU-Map', 'Campus Map for Bulacan State University', '[\"Emily Johnson, Alexander Smith, Sophia Martinez, Liam Brown, Olivia Davis\"]', '[\"Mr. Ethan Wilson, Ms. Ava Taylor, Mr. Noah Anderson, Ms. Isabella Garcia, Mr, Mason Thompson\"]', '2023-93242-42', 'Aaron Paul', '[\"University\",\"Map\",\"Directory\"]', '12/2023', 'lorem something', '65ee9bc2db4c98.86663470.pdf', '65ee9bc2db4f64.71028596.jpg', '2024-03-21 14:04:04', '2020102020', 1),
(7, 'Qoobees Taste', 'Offical Website of a Coffee Shop', '[\"Juan dela Cruz\",\"Christina Mellizo\",\"Angelica Reyes\",\"Gabriela Cruz, Victor Rivera\",\"\"]', '[\"Mr. Angelo Lim\",\"Mr. Eduardo Santos\",\"Ms. Patricia Fernandez\",\"Ms. Bianca Rivera\",\"\"]', '2023-42353-12', 'Ms. Lorraine Lim', '[\"Coffee\",\"Business\"]', '', ' df,kjghbnzxdkfg sljg zsefkjsehb te kfhzas e  sekjlftzha sse;zaewsiigt W#EE#ikifju ugsegksjlhehbfg   awelifuktrrhgha gsiukfzags ', '65ee9c3d034f14.44075536.pdf', '65ee9c3d035096.89062834.jpg', '2024-02-07 14:04:04', '2020102020', 1),
(8, 'UR OOTDs', 'E-Commerce Website of a Clothing Shop', '[\"Emily Johnson\",\"Alexander Smith\",\"Sophia Martinez\",\"Liam Brown\",\"Olivia Davis\",\"\"]', '[\"Ms. Patricia Fernandez\",\"Mr. Ethan Wilson\",\"Ms. Ava Taylor\",\"Ms. Bianca Rivera\",\"\"]', '2023-42353-12', 'Ms. Lorraine Lim', '[\"Ecommerce\",\"Clothes\"]', '12/2023', 'lorem ipsum abdulum masimulum', '65ee9c85c384a1.84321643.pdf', '65ee9c85c38610.39548220.jpg', '2024-03-11 14:04:04', '2020102020', 1),
(9, 'Store and Stack', 'An Inventory System of Bare Company', '[\"Emily Johnson, Alexander Smith, Sophia Martinez, Liam Brown, Olivia Davis\"]', '[\"Ms. Patricia Fernandez\",\"Mr. Ethan Wilson\",\"Ms. Ava Taylor\",\"Ms. Bianca Rivera\",\"\"]', '2023-42353-12', 'Ms. Lorraine Lim', '[\"Business\",\"Inventory\",\"System\"]', '12/2023', ' xjhfgtxdhgttjhyfg   yftj dth drt hdsr t ', '65ee9cbedcf3d7.32567185.pdf', '65ee9cbedcf9a0.41203227.jpg', '2024-03-03 14:04:04', '2020102020', 0),
(10, 'Sleep, Rest and Eat', 'A Booking System for the Sleep, Rest and Eat Hotel', '[\"Emily Johnson\",\"Alexander Smith\",\"Sophia Martinez\",\"Liam Brown\",\"Olivia Davis\"]', '[\"Ms. Patricia Fernandez\",\"Mr. Ethan Wilson\",\"Ms. Ava Taylor\",\"Ms. Bianca Rivera\",\"\"]', '2023-42353-12', 'Ms. Lorraine Lim', '[\"Business\",\"Calendar\",\"Booking\"]', '12/2023', 'sdfd fsgb dfgtfh gth fgts hfgt thyfrh gft fr ty trd trhdtrh trtrd d r y te  e yd grads r', '65ee9d06b0d870.51997595.pdf', '65ee9d06b0da26.50928185.jpg', '2024-01-10 14:04:04', '2020102020', 0),
(11, 'Kirbys Firing Range', 'Basta about kay kirby', '[\"James\",\"Gab\",\"Dharyll\"]', '[\"Marvic\",\"Marasigan\",\"Mendoza\"]', '2023-42383-12', 'Flores', '[\"Business\",\"Community\"]', '02/2024', 'DSA FDSA GRDS FGR HDSFGT DSFGRRED GDSA FGR DSFGRAADSA FDSA FDSA FEDS FDSA FSD FSA D SDAFSDA F DSAFDS FGADSF DSA FDSF', '65ee9dc91e7af3.97679936.pdf', '65ee9dc91e7c39.81173740.jpg', '2024-02-13 14:04:04', '2020102020', 0);

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(11) NOT NULL,
  `survey_name` varchar(255) NOT NULL,
  `respondents` int(11) NOT NULL,
  `url` text DEFAULT NULL,
  `description` text NOT NULL,
  `account_id` varchar(255) NOT NULL,
  `deadline` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `filename` varchar(255) NOT NULL,
  `is_archived` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `survey_name`, `respondents`, `url`, `description`, `account_id`, `deadline`, `created_at`, `filename`, `is_archived`) VALUES
(8, 'sample 10', 8, '', 'hahaha', '2020102020', '2024-03-20 00:00:00', '2024-02-07 16:32:42', '1710232362.js', 1),
(9, 'Sample 2 na medyo maayos', 10, '', 'hahahaha', '2020102020', '2024-03-30 00:00:00', '2024-03-26 15:43:16', '1710402196.js', 0),
(10, '', 0, '', '', '2020102020', '0000-00-00 00:00:00', '2024-03-31 18:35:39', '1710671739.js', 0),
(11, '', 0, '', '', '2020102020', '0000-00-00 00:00:00', '2024-03-12 18:37:35', '1710671855.js', 0),
(12, '', 0, '', '', '2020102020', '0000-00-00 00:00:00', '2024-03-27 18:38:34', '1710671914.js', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studies`
--
ALTER TABLE `studies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
