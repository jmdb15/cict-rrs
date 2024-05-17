-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 02:05 PM
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
(9, '2020101630', 'jemuel.banag.d@bulsu.edu.ph', 'student', '$2y$11$XnmFSoj/659RSDiFPde9puxNwPUWKCgVQ/EWLdPLiXLR.FemeMOnu', 0, '2024-05-01 16:11:30', NULL, NULL),
(10, '2020100001', 'machristina.mellizo.s@bulsu.edu.ph', 'student', '$2y$11$sCaYjMPW1TPyOKaxLoUVju0PRgmw1k6nWXmh8SjpCvMBETwo3hubi', 0, '2024-05-01 16:17:52', NULL, NULL),
(11, '2020106425', 'dharyll.flores.r@bulsu.edu.ph', 'faculty', '$2y$11$3mEmb7LBQ9hoXFTDubXbluv2dIn3vjAvXYccyqw2cvFj6.n7g1LNe', 0, '2024-05-01 16:17:48', NULL, NULL),
(12, '2020100002', 'jamesmarvic.marasigan.s@bulsu.edu.ph', 'admin', '$2y$11$TteVhfl75KUk265Trk/6oOMOAacuBCvxtkelwnxbg.mJO5Kh4gFXq', 0, '2024-05-01 16:17:57', NULL, NULL),
(13, '2020100003', 'charlesgabriel.mendoza.c@bulsu.edu.ph', 'student', '$2y$11$U/evmavfSm96p1x5HRjaj.u.VABJuJnuoTP5g7WoWKx4LDxX/pXfq', 0, '2024-05-01 16:18:01', NULL, NULL),
(14, '2020100004', 'kenneth.nicolas@bulsu.edu.ph', 'student', '$2y$11$wBhs3kqWC5OPBFdLS9pzOu6tmVQEgDzjUushLEp.oFP1G4f.Kv6q2', 0, NULL, NULL, NULL),
(15, '2020100005', 'johnkimcarlos.felizardo@bulsu.edu.ph', 'student', '$2y$11$N23VTBRDAJin8Owes0WShO.H9vLsZmB7mWMrhGUHRE.NWiePTkPk2', 0, NULL, NULL, NULL),
(16, '2020100006', 'darlene.sanantonio@bulsu.edu.ph', 'student', '$2y$11$l3qZV.RY5RZ7JstJQsuITu.H3930nAuuKWRh3usU4zBz0PELLr2Ta', 0, NULL, NULL, NULL),
(17, '2020100007', 'denesse.antonio@bulsu.edu.ph', 'student', '$2y$11$aA/CqAcARPo62pn5V3oPseWtFttFzoop.7Uj9J0UNDRQDWdtGlJhi', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `account_id` varchar(50) NOT NULL,
  `studies_id` varchar(50) DEFAULT NULL,
  `activity` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `account_id`, `studies_id`, `activity`, `created_at`) VALUES
(40, '2020101630', NULL, 'Logged in', '2024-05-02 00:11:13'),
(41, '2020101630', NULL, 'Uploaded a Research: BulSU-Map', '2024-05-02 00:12:58'),
(42, '2020100001', NULL, 'Logged in', '2024-05-02 00:13:56'),
(43, '2020106425', NULL, 'Logged in', '2024-05-02 00:14:21'),
(44, '2020100002', NULL, 'Logged in', '2024-05-02 00:14:55'),
(45, '2020100003', NULL, 'Logged in', '2024-05-02 00:15:31'),
(46, '2020100004', NULL, 'Logged in', '2024-05-02 00:15:57'),
(47, '2020100005', NULL, 'Logged in', '2024-05-02 00:16:30'),
(48, '2020100006', NULL, 'Logged in', '2024-05-02 00:17:08'),
(49, '2020100007', NULL, 'Logged in', '2024-05-02 00:17:37'),
(50, '2020100001', NULL, 'Logged in', '2024-05-02 00:18:16'),
(51, '2020100001', NULL, 'Uploaded a Research: Qoobee\'s Taste', '2024-05-02 00:19:14'),
(52, '2020100001', NULL, 'Uploaded a Research: Sleep, Rest and Eat', '2024-05-02 00:20:45'),
(53, '2020100003', NULL, 'Logged in', '2024-05-02 00:20:56'),
(54, '2020100003', NULL, 'Uploaded a Research: Store and Stack', '2024-05-02 00:21:53'),
(55, '2020100002', NULL, 'Logged in', '2024-05-02 00:22:08'),
(56, '2020100002', NULL, 'Uploaded a Research: UR OOTD\'s', '2024-05-02 00:22:54'),
(57, '2020100003', NULL, 'Logged in', '2024-05-02 00:23:05'),
(58, '2020100003', NULL, 'Uploaded a Research: ShotsOnUs', '2024-05-02 00:25:23'),
(59, '2020101630', NULL, 'Logged in', '2024-05-02 00:25:35'),
(60, '2020106425', NULL, 'Logged in', '2024-05-02 00:26:05'),
(61, '2020106425', NULL, 'Uploaded a Research: CAL-Flix', '2024-05-02 00:28:34'),
(62, '2020101630', NULL, 'Logged in', '2024-05-02 00:28:49'),
(63, '2020101630', NULL, 'Logged in', '2024-05-02 08:12:56'),
(64, '2020101630', '26', 'Viewed a Research: ShotsOnUs', '2024-05-02 08:37:05'),
(66, '2020101630', NULL, 'Uploaded a Survey: Blood Bank Management System Survey', '2024-05-02 09:07:36'),
(67, '2020106425', NULL, 'Logged in', '2024-05-02 09:25:58'),
(68, '2020100001', NULL, 'Logged in', '2024-05-02 09:27:58'),
(69, '2020100001', NULL, 'Uploaded a Survey: Blood Bank Management System Survey', '2024-05-02 09:32:49'),
(70, '2020106425', NULL, 'Logged in', '2024-05-02 09:33:14'),
(71, '2020106425', NULL, 'Logged in', '2024-05-02 14:40:47'),
(72, '2020106425', NULL, 'Logged in', '2024-05-02 14:41:34'),
(73, '2020100001', NULL, 'Logged in', '2024-05-02 14:43:41'),
(74, '2020106425', NULL, 'Logged in', '2024-05-02 14:45:40'),
(75, '2020100003', NULL, 'Logged in', '2024-05-02 15:20:27'),
(76, '2020106425', NULL, 'Logged in', '2024-05-06 09:31:01'),
(77, '2020106425', NULL, 'Responded on a Survey: ', '2024-05-06 13:14:58'),
(78, '2020106425', NULL, 'Logged in', '2024-05-07 12:38:00'),
(79, '2020101630', NULL, 'Logged in', '2024-05-07 12:45:18'),
(80, '2020101630', NULL, 'Logged in', '2024-05-07 12:51:14'),
(81, '2020101630', NULL, 'Logged in', '2024-05-07 19:24:59'),
(82, '2020106425', NULL, 'Logged in', '2024-05-07 20:36:46'),
(83, '2020106425', NULL, 'Logged in', '2024-05-07 20:40:16'),
(84, '2020106425', NULL, 'Logged in', '2024-05-07 22:05:00'),
(85, '2020100002', NULL, 'Logged in', '2024-05-07 22:06:07'),
(86, '2020100001', NULL, 'Logged in', '2024-05-08 01:18:40'),
(87, '2020100001', NULL, 'Logged in', '2024-05-08 12:17:20'),
(88, '2020100001', NULL, 'Uploaded a Survey: haha', '2024-05-08 12:21:29'),
(89, '2020100002', NULL, 'Logged in', '2024-05-08 12:21:44'),
(90, '2020100002', NULL, 'Uploaded a Survey: haha', '2024-05-08 12:30:28'),
(91, '2020100001', NULL, 'Logged in', '2024-05-08 12:31:01'),
(92, '2020100001', NULL, 'Logged in', '2024-05-08 13:21:28'),
(93, '2020101630', NULL, 'Report for download request transaction are generated', '2024-05-08 13:56:13'),
(94, '2020100002', NULL, 'Logged in', '2024-05-08 15:44:27'),
(95, '2020100002', NULL, 'Logged in', '2024-05-08 15:45:54'),
(96, '2020100002', '22', 'Requested download for: Offical Website of a Coffee Shop', '2024-05-08 15:46:10'),
(97, '2020100002', NULL, 'Logged in', '2024-05-08 16:44:14'),
(98, '2020100002', NULL, 'Logged in', '2024-05-09 20:04:15'),
(99, '2020100002', '22', 'Viewed a Research: Offical Website of a Coffee Shop', '2024-05-09 20:04:17'),
(100, '2020100002', '26', 'Viewed a Research: A WEB-BASED BOOKING SYSTEM FOR WACKY SHOTS PHOTO AND PRINTING SHOP', '2024-05-09 20:04:21'),
(101, '2020100001', NULL, 'Logged in', '2024-05-09 21:06:23'),
(102, '2020100001', '22', 'Viewed a Research: Offical Website of a Coffee Shop', '2024-05-09 21:06:36'),
(103, '2020100001', '26', 'Viewed a Research: A WEB-BASED BOOKING SYSTEM FOR WACKY SHOTS PHOTO AND PRINTING SHOP', '2024-05-09 21:06:47'),
(104, '2020101630', NULL, 'Logged in', '2024-05-11 00:04:15'),
(105, '2020101630', '21', 'Viewed a Research: Campus Map for Bulacan State University', '2024-05-11 00:04:27'),
(106, '2020101630', '21', 'Requested download for: Campus Map for Bulacan State University', '2024-05-11 00:04:35'),
(107, '2020101630', '23', 'Viewed a Research: A Booking System for the Sleep, Rest and Eat Hotel', '2024-05-11 00:04:48'),
(108, '2020101630', '23', 'Requested download for: A Booking System for the Sleep, Rest and Eat Hotel', '2024-05-11 00:04:52'),
(109, '2020101630', '22', 'Viewed a Research: Offical Website of a Coffee Shop', '2024-05-11 00:06:43'),
(110, '2020101630', '22', 'Requested download for: Offical Website of a Coffee Shop', '2024-05-11 00:06:46'),
(111, '2020100001', NULL, 'Logged in', '2024-05-11 00:35:09'),
(112, '2020100001', NULL, 'Logged in', '2024-05-11 00:36:31'),
(113, '2020100001', '21', 'Requested download for: Campus Map for Bulacan State University', '2024-05-11 00:36:36'),
(114, '2020106425', NULL, 'Logged in', '2024-05-11 00:36:46'),
(115, '2020106425', '27', 'Requested download for: A web-based streaming platform for the College of Arts and Letters', '2024-05-11 00:36:52'),
(116, '2020100003', NULL, 'Logged in', '2024-05-11 00:37:02'),
(117, '2020100003', '26', 'Requested download for: A WEB-BASED BOOKING SYSTEM FOR WACKY SHOTS PHOTO AND PRINTING SHOP', '2024-05-11 00:37:06'),
(118, '2020101630', NULL, 'Logged in', '2024-05-17 19:03:18'),
(119, '2020101630', NULL, 'Uploaded a Research: bago researhc lang: eto yung bago', '2024-05-17 20:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `account_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `academic_rank` varchar(50) NOT NULL DEFAULT 'none',
  `course` varchar(100) DEFAULT 'none',
  `specialization` varchar(50) DEFAULT 'none',
  `year` int(11) DEFAULT NULL,
  `section` varchar(10) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `points` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`account_id`, `first_name`, `middle_name`, `last_name`, `image`, `academic_rank`, `course`, `specialization`, `year`, `section`, `sex`, `points`) VALUES
('2020100001', 'Christina', NULL, 'Mellizo', NULL, 'none', 'none', 'none', NULL, NULL, NULL, 1),
('2020100002', 'James Marvic', NULL, 'Marasigan', NULL, 'none', 'Bachelor of Science in Information Technology', 'none', NULL, NULL, NULL, 1),
('2020100003', 'Charles Gabriel', NULL, 'Mendoza', NULL, 'none', 'none', 'none', NULL, NULL, NULL, 1),
('2020100004', 'Kenneth', NULL, 'Nicolas', NULL, 'none', 'blis', 'none', NULL, NULL, NULL, 0),
('2020100005', 'John Kim Carlos ', NULL, 'Felizardo', NULL, 'none', 'blis', 'none', NULL, NULL, NULL, 0),
('2020100006', 'Darlene', NULL, 'San Antonio', NULL, 'none', 'bsis', 'none', NULL, NULL, NULL, 0),
('2020100007', 'Denesse', NULL, 'Antonio', NULL, 'none', 'none', 'none', NULL, NULL, NULL, 0),
('2020101630', 'Jemuel', '', 'Banag', NULL, 'none', 'Bachelor of Science in Information Technology', 'none', 1, '', 'male', 5),
('2020106425', 'Dharyll', '', 'Flores', NULL, 'Associate Professor III', 'none', 'none', 0, '', 'male', 1);

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
(7, 1, '2024-05-08 15:46:10', '2024-05-11 00:37:40', '22', '2020100002'),
(8, 1, '2024-05-11 00:04:35', '2024-05-11 00:33:49', '21', '2020101630'),
(9, 1, '2024-05-11 00:04:52', '2024-05-11 00:44:21', '23', '2020101630'),
(10, 1, '2024-05-11 00:06:46', '2024-05-11 00:39:05', '22', '2020101630'),
(11, 1, '2024-05-11 00:36:36', '2024-05-11 00:37:23', '21', '2020100001'),
(12, 1, '2024-05-11 00:36:52', '2024-05-11 00:45:14', '27', '2020106425'),
(13, 1, '2024-05-11 00:37:06', '2024-05-11 00:39:14', '26', '2020100003');

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
(15, '2024-05-06 13:14:58', '2020106425', '19');

-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

CREATE TABLE `studies` (
  `id` int(11) NOT NULL,
  `research_title` text NOT NULL,
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
  `is_archived` int(11) NOT NULL DEFAULT 0,
  `is_approved` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studies`
--

INSERT INTO `studies` (`id`, `research_title`, `authors`, `panels`, `accession`, `adviser`, `tags`, `month_yr`, `description`, `file`, `cover`, `created_at`, `account_id`, `is_archived`, `is_approved`) VALUES
(21, 'Campus Map for Bulacan State University', '[\"Emily Johnson\",\"Alexander Smith,\",\"Sophia Martinez\",\"Liam Brown\",\"Olivia Davis\"]', '[\"Mr. Ethan Wilson\",\"Ms. Ava Taylor\",\"Mr. Noah Anderson\",\"Ms. Isabella Garcia\",\"Mr, Mason Thompson\",\"\"]', '2023-93242-42', 'Ms. Lorraine Lim', '[\"Map\",\"University\"]', '12/2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ut vero molestias natus fugiat doloribus deserunt ipsum quos tempora suscipit amet soluta cum, veniam optio consequuntur architecto, neque vel incidunt quam nemo, beatae esse! Possimus eaque reprehenderit praesentium temporibus? Repellat nulla placeat nemo eos earum, ad enim aliquid quas vitae illo, illum voluptatibus et. Magni vel vitae ad enim commodi, unde reiciendis, quasi voluptatum necessitatibus sequi neque fugit modi facere dolores pariatur, id error libero soluta sed corporis saepe voluptas a minima incidunt? Totam, amet! Quidem tempore, deserunt accusamus aspernatur quibusdam perferendis adipisci ipsum quod atque enim facere, cumque suscipit quae alias. Ex ratione explicabo culpa rerum soluta nemo. Omnis laboriosam deleniti quo, atque pariatur optio itaque nisi nemo. Dolor ab suscipit iste, ea ad illo. Tempore et laborum, perferendis delectus saepe possimus non eaque pariatur ullam est debitis explicabo sed optio facere accusamus architecto ipsa odio quasi repellendus dicta. Aut harum pariatur quae laudantium dignissimos. Perspiciatis expedita exercitationem laboriosam reiciendis nihil mollitia vitae sapiente obcaecati temporibus, earum repellat ipsum magnam accusamus modi dicta ab? Numquam laboriosam molestias atque quis, adipisci magnam ea eius dolorum quo temporibus est, alias voluptas minima non tenetur maxime cum. Nam exercitationem reiciendis illum at esse, id harum cupiditate molestias maiores ex. Facere hic molestias rerum officiis reprehenderit ullam distinctio maxime, delectus consequuntur cupiditate officia quasi, eligendi, unde sed quaerat sequi suscipit quas itaque. Vitae labore, reiciendis non dolores quidem, eveniet quam exercitationem at quis voluptates vel saepe sed ducimus laudantium qui eius atque odit cum placeat dolore laboriosam! Exercitationem accusamus nobis tempora praesentium dolores? Saepe cupiditate nemo eligendi est, molestias quae, perferendis id animi iusto modi voluptate nobis doloremque odio esse illo nesciunt voluptates dignissimos omnis tempore soluta obcaecati aliquid et incidunt. Illum repellendus similique numquam non recusandae, explicabo eum, facilis fugit error itaque consequuntur.', '66326a0acd7e51.63851035.pdf', '66326a0acd7ec3.80900826.jpg', '2024-05-07 00:12:58', '2020101630', 1, 1),
(22, 'Offical Website of a Coffee Shop', '[\"Juan dela Cruz\",\"Christina Mellizo\",\"Angelica Reyes, Gabriela Cruz\",\"Victor Rivera\"]', '[\"Mr. Angelo Lim\",\"Mr. Eduardo Santos\",\"Ms. Patricia Fernandez\",\"Ms. Bianca Rivera\",\"\"]', '2023-42353-12', 'Ms. Lorraine Lim', '[\"Food\",\"Coffee\",\"Business\"]', '12/2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ut vero molestias natus fugiat doloribus deserunt ipsum quos tempora suscipit amet soluta cum, veniam optio consequuntur architecto, neque vel incidunt quam nemo, beatae esse! Possimus eaque reprehenderit praesentium temporibus? Repellat nulla placeat nemo eos earum, ad enim aliquid quas vitae illo, illum voluptatibus et. Magni vel vitae ad enim commodi, unde reiciendis, quasi voluptatum necessitatibus sequi neque fugit modi facere dolores pariatur, id error libero soluta sed corporis saepe voluptas a minima incidunt? Totam, amet! Quidem tempore, deserunt accusamus aspernatur quibusdam perferendis adipisci ipsum quod atque enim facere, cumque suscipit quae alias. Ex ratione explicabo culpa rerum soluta nemo. Omnis laboriosam deleniti quo, atque pariatur optio itaque nisi nemo. Dolor ab suscipit iste, ea ad illo. Tempore et laborum, perferendis delectus saepe possimus non eaque pariatur ullam est debitis explicabo sed optio facere accusamus architecto ipsa odio quasi repellendus dicta. Aut harum pariatur quae laudantium dignissimos. Perspiciatis expedita exercitationem laboriosam reiciendis nihil mollitia vitae sapiente obcaecati temporibus, earum repellat ipsum magnam accusamus modi dicta ab? Numquam laboriosam molestias atque quis, adipisci magnam ea eius dolorum quo temporibus est, alias voluptas minima non tenetur maxime cum. Nam exercitationem reiciendis illum at esse, id harum cupiditate molestias maiores ex. Facere hic molestias rerum officiis reprehenderit ullam distinctio maxime, delectus consequuntur cupiditate officia quasi, eligendi, unde sed quaerat sequi suscipit quas itaque. Vitae labore, reiciendis non dolores quidem, eveniet quam exercitationem at quis voluptates vel saepe sed ducimus laudantium qui eius atque odit cum placeat dolore laboriosam! Exercitationem accusamus nobis tempora praesentium dolores? Saepe cupiditate nemo eligendi est, molestias quae, perferendis id animi iusto modi voluptate nobis doloremque odio esse illo nesciunt voluptates dignissimos omnis tempore soluta obcaecati aliquid et incidunt. Illum repellendus similique numquam non recusandae, explicabo eum, facilis fugit error itaque consequuntur.', '66326b822bef06.81778747.pdf', '66326b822befb5.76516125.jpg', '2024-05-02 00:19:14', '2020100001', 0, 1),
(23, 'A Booking System for the Sleep, Rest and Eat Hotel', '[\"Emily Johnson\",\"Alexander Smith\",\"Sophia Martinez, Liam Brown\",\"Olivia Davis\",\"\"]', '[\"Ms. Patricia Fernandez\",\"Mr. Ethan Wilson\",\"Ms. Ava Taylor\",\"Ms. Bianca Rivera\",\"\"]', '2023-42353-12', 'Mr. Aaron Paul Dela Rosa', '[\"Booking\",\"Business\"]', '12/2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ut vero molestias natus fugiat doloribus deserunt ipsum quos tempora suscipit amet soluta cum, veniam optio consequuntur architecto, neque vel incidunt quam nemo, beatae esse! Possimus eaque reprehenderit praesentium temporibus? Repellat nulla placeat nemo eos earum, ad enim aliquid quas vitae illo, illum voluptatibus et. Magni vel vitae ad enim commodi, unde reiciendis, quasi voluptatum necessitatibus sequi neque fugit modi facere dolores pariatur, id error libero soluta sed corporis saepe voluptas a minima incidunt? Totam, amet! Quidem tempore, deserunt accusamus aspernatur quibusdam perferendis adipisci ipsum quod atque enim facere, cumque suscipit quae alias. Ex ratione explicabo culpa rerum soluta nemo. Omnis laboriosam deleniti quo, atque pariatur optio itaque nisi nemo. Dolor ab suscipit iste, ea ad illo. Tempore et laborum, perferendis delectus saepe possimus non eaque pariatur ullam est debitis explicabo sed optio facere accusamus architecto ipsa odio quasi repellendus dicta. Aut harum pariatur quae laudantium dignissimos. Perspiciatis expedita exercitationem laboriosam reiciendis nihil mollitia vitae sapiente obcaecati temporibus, earum repellat ipsum magnam accusamus modi dicta ab? Numquam laboriosam molestias atque quis, adipisci magnam ea eius dolorum quo temporibus est, alias voluptas minima non tenetur maxime cum. Nam exercitationem reiciendis illum at esse, id harum cupiditate molestias maiores ex. Facere hic molestias rerum officiis reprehenderit ullam distinctio maxime, delectus consequuntur cupiditate officia quasi, eligendi, unde sed quaerat sequi suscipit quas itaque. Vitae labore, reiciendis non dolores quidem, eveniet quam exercitationem at quis voluptates vel saepe sed ducimus laudantium qui eius atque odit cum placeat dolore laboriosam! Exercitationem accusamus nobis tempora praesentium dolores? Saepe cupiditate nemo eligendi est, molestias quae, perferendis id animi iusto modi voluptate nobis doloremque odio esse illo nesciunt voluptates dignissimos omnis tempore soluta obcaecati aliquid et incidunt. Illum repellendus similique numquam non recusandae, explicabo eum, facilis fugit error itaque consequuntur.', '66326bdd6f1421.17266129.pdf', '66326bdd6f14b4.83441834.jpg', '2024-05-02 00:20:45', '2020100001', 0, 1),
(24, 'An Inventory System of Bare Company', '[\"Emily Johnson\",\"Alexander Smith\",\"Sophia Martinez\",\"Liam Brown\",\"Olivia Davis\",\"\"]', '[\"Ms. Patricia Fernandez\",\"Mr. Ethan Wilson\",\"Ms. Ava Taylor\",\"Ms. Bianca Rivera\"]', '2023-42353-12', 'Ms. Lorraine Lim', '[\"Business\",\"System\",\"Inventory\"]', '12/2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ut vero molestias natus fugiat doloribus deserunt ipsum quos tempora suscipit amet soluta cum, veniam optio consequuntur architecto, neque vel incidunt quam nemo, beatae esse! Possimus eaque reprehenderit praesentium temporibus? Repellat nulla placeat nemo eos earum, ad enim aliquid quas vitae illo, illum voluptatibus et. Magni vel vitae ad enim commodi, unde reiciendis, quasi voluptatum necessitatibus sequi neque fugit modi facere dolores pariatur, id error libero soluta sed corporis saepe voluptas a minima incidunt? Totam, amet! Quidem tempore, deserunt accusamus aspernatur quibusdam perferendis adipisci ipsum quod atque enim facere, cumque suscipit quae alias. Ex ratione explicabo culpa rerum soluta nemo. Omnis laboriosam deleniti quo, atque pariatur optio itaque nisi nemo. Dolor ab suscipit iste, ea ad illo. Tempore et laborum, perferendis delectus saepe possimus non eaque pariatur ullam est debitis explicabo sed optio facere accusamus architecto ipsa odio quasi repellendus dicta. Aut harum pariatur quae laudantium dignissimos. Perspiciatis expedita exercitationem laboriosam reiciendis nihil mollitia vitae sapiente obcaecati temporibus, earum repellat ipsum magnam accusamus modi dicta ab? Numquam laboriosam molestias atque quis, adipisci magnam ea eius dolorum quo temporibus est, alias voluptas minima non tenetur maxime cum. Nam exercitationem reiciendis illum at esse, id harum cupiditate molestias maiores ex. Facere hic molestias rerum officiis reprehenderit ullam distinctio maxime, delectus consequuntur cupiditate officia quasi, eligendi, unde sed quaerat sequi suscipit quas itaque. Vitae labore, reiciendis non dolores quidem, eveniet quam exercitationem at quis voluptates vel saepe sed ducimus laudantium qui eius atque odit cum placeat dolore laboriosam! Exercitationem accusamus nobis tempora praesentium dolores? Saepe cupiditate nemo eligendi est, molestias quae, perferendis id animi iusto modi voluptate nobis doloremque odio esse illo nesciunt voluptates dignissimos omnis tempore soluta obcaecati aliquid et incidunt. Illum repellendus similique numquam non recusandae, explicabo eum, facilis fugit error itaque consequuntur.', '66326c218ee2a3.95011809.pdf', '66326c218ee337.49292862.jpg', '2024-05-02 00:21:53', '2020100001', 0, 0),
(25, 'E-Commerce Website of a Clothing Shop', '[\"Emily Johnson\",\"Alexander Smith\",\"Sophia Martinez, Liam Brown\",\"Olivia Davis\"]', '[\"Ms. Patricia Fernandez\",\"Mr. Ethan Wilson\",\"Ms. Ava Taylor\",\"Ms. Bianca Rivera\",\"\"]', '2023-42353-12', 'Mr. Aaron Paul Dela Rosa', '[\"Clothes\",\"Ecommerce\"]', '12/2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ut vero molestias natus fugiat doloribus deserunt ipsum quos tempora suscipit amet soluta cum, veniam optio consequuntur architecto, neque vel incidunt quam nemo, beatae esse! Possimus eaque reprehenderit praesentium temporibus? Repellat nulla placeat nemo eos earum, ad enim aliquid quas vitae illo, illum voluptatibus et. Magni vel vitae ad enim commodi, unde reiciendis, quasi voluptatum necessitatibus sequi neque fugit modi facere dolores pariatur, id error libero soluta sed corporis saepe voluptas a minima incidunt? Totam, amet! Quidem tempore, deserunt accusamus aspernatur quibusdam perferendis adipisci ipsum quod atque enim facere, cumque suscipit quae alias. Ex ratione explicabo culpa rerum soluta nemo. Omnis laboriosam deleniti quo, atque pariatur optio itaque nisi nemo. Dolor ab suscipit iste, ea ad illo. Tempore et laborum, perferendis delectus saepe possimus non eaque pariatur ullam est debitis explicabo sed optio facere accusamus architecto ipsa odio quasi repellendus dicta. Aut harum pariatur quae laudantium dignissimos. Perspiciatis expedita exercitationem laboriosam reiciendis nihil mollitia vitae sapiente obcaecati temporibus, earum repellat ipsum magnam accusamus modi dicta ab? Numquam laboriosam molestias atque quis, adipisci magnam ea eius dolorum quo temporibus est, alias voluptas minima non tenetur maxime cum. Nam exercitationem reiciendis illum at esse, id harum cupiditate molestias maiores ex. Facere hic molestias rerum officiis reprehenderit ullam distinctio maxime, delectus consequuntur cupiditate officia quasi, eligendi, unde sed quaerat sequi suscipit quas itaque. Vitae labore, reiciendis non dolores quidem, eveniet quam exercitationem at quis voluptates vel saepe sed ducimus laudantium qui eius atque odit cum placeat dolore laboriosam! Exercitationem accusamus nobis tempora praesentium dolores? Saepe cupiditate nemo eligendi est, molestias quae, perferendis id animi iusto modi voluptate nobis doloremque odio esse illo nesciunt voluptates dignissimos omnis tempore soluta obcaecati aliquid et incidunt. Illum repellendus similique numquam non recusandae, explicabo eum, facilis fugit error itaque consequuntur.', '66326c5ebae258.10529335.pdf', '66326c5ebae331.88962551.jpg', '2024-05-02 00:22:54', '2020100002', 0, 0),
(26, 'A WEB-BASED BOOKING SYSTEM FOR WACKY SHOTS PHOTO AND PRINTING SHOP', '[\"Hael Leightton Rei A. Cruz\",\"Tristan Maree DL. Dionisio\",\"Israel DR. Lizarondo\",\"Charles Gabriel C. Mendoza\",\"Abby Clarisse N. Romualdo\",\"\"]', '[\"Mr. Lester Phil M. Cruz\",\"Mrs. Michelle C. Tansinsin\",\"Mr. Jeffrey A, Cervantes\",\"\"]', '2023-42358-12', 'Mr. Gabriel M. Galang', '[\"Business\",\"Booking\"]', '12/2023', 'The project addresses the operational challenges faced by Wacky Shots Photo and\r\nPrinting Shop through the creation of a web-based booking system. The client\'s primary\r\nissues included overlapping bookings and physical record loss. To accomplish this, a mixed\r\nmethodology was employed. The study adopted a descriptive approach, involving an\r\nextensive review of related literature and systems, along with data collection to thoroughly\r\nanalyze the existing issues and propose effective solutions. Additionally, a developmental\r\nresearch method was utilized, given the aim to create and assess the quality and\r\neffectiveness of the system. The project utilized both expert and random sampling methods\r\nwith a total of 92 respondents, comprising 20 IT experts and 72 potential end-users of the\r\nsystem. The research instrument employed was a survey based on ISO/IEC 25010. The\r\nresulting system successfully integrated important features such as service, appointment,\r\nand payment management. According to survey results, the system achieved an overall\r\nmean of 3.35, interpreted as \"agree,\" indicating a general agreement among respondents\r\nthat the system meets necessary criteria and requirements. Deploying this system is\r\nexpected to enhance Wacky Shots\' operations, improving service quality and user\r\nsatisfaction. ium dignissimos. Perspiciatis expedita exercitationem laboriosam reiciendis nihil mollitia vitae sapiente obcaecati temporibus, earum repellat ipsum magnam accusamus modi dicta ab? Numquam laboriosam molestias atque quis, adipisci magnam ea eius dolorum quo temporibus est, alias voluptas minima non tenetur maxime cum. Nam exercitationem reiciendis illum at esse, id harum cupiditate molestias maiores ex. Facere hic molestias rerum officiis reprehenderit ullam distinctio maxime, delectus consequuntur cupiditate officia quasi, eligendi, unde sed quaerat sequi suscipit quas itaque. Vitae labore, reiciendis non dolores quidem, eveniet quam exercitationem at quis voluptates vel saepe sed ducimus laudantium qui eius atque odit cum placeat dolore laboriosam! Exercitationem accusamus nobis tempora praesentium dolores? Saepe cupiditate nemo eligendi est, molestias quae, perferendis id animi iusto modi voluptate nobis doloremque odio esse illo nesciunt voluptates dignissimos omnis tempore soluta obcaecati aliquid et incidunt. Illum repellendus similique numquam non recusandae, explicabo eum, facilis fugit error itaque consequuntur.', '66326cf327f359.85410221.pdf', '66326cf327f3c1.74389482.jpg', '2024-05-02 00:25:23', '2020100001', 0, 1),
(27, 'A web-based streaming platform for the College of Arts and Letters', '[\"Darlene San Antonio\",\"Denesse Antonio\",\"Dharyll Flores\",\"James Marvic Marasigan\",\"Jose Manuel Tansinsin\"]', '[\"Ms. Michelle Tansinsin\",\"Mr. Gabriel Galang\",\"Mr Jeff Cervantes\"]', '2023-42333-12', 'Mr. Aaron Paul Dela Rosa', '[\"Web-based\",\"University\"]', '12/2023', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ut vero molestias natus fugiat doloribus deserunt ipsum quos tempora suscipit amet soluta cum, veniam optio consequuntur architecto, neque vel incidunt quam nemo, beatae esse! Possimus eaque reprehenderit praesentium temporibus? Repellat nulla placeat nemo eos earum, ad enim aliquid quas vitae illo, illum voluptatibus et. Magni vel vitae ad enim commodi, unde reiciendis, quasi voluptatum necessitatibus sequi neque fugit modi facere dolores pariatur, id error libero soluta sed corporis saepe voluptas a minima incidunt? Totam, amet! Quidem tempore, deserunt accusamus aspernatur quibusdam perferendis adipisci ipsum quod atque enim facere, cumque suscipit quae alias. Ex ratione explicabo culpa rerum soluta nemo. Omnis laboriosam deleniti quo, atque pariatur optio itaque nisi nemo. Dolor ab suscipit iste, ea ad illo. Tempore et laborum, perferendis delectus saepe possimus non eaque pariatur ullam est debitis explicabo sed optio facere accusamus architecto ipsa odio quasi repellendus dicta. Aut harum pariatur quae laudantium dignissimos. Perspiciatis expedita exercitationem laboriosam reiciendis nihil mollitia vitae sapiente obcaecati temporibus, earum repellat ipsum magnam accusamus modi dicta ab? Numquam laboriosam molestias atque quis, adipisci magnam ea eius dolorum quo temporibus est, alias voluptas minima non tenetur maxime cum. Nam exercitationem reiciendis illum at esse, id harum cupiditate molestias maiores ex. Facere hic molestias rerum officiis reprehenderit ullam distinctio maxime, delectus consequuntur cupiditate officia quasi, eligendi, unde sed quaerat sequi suscipit quas itaque. Vitae labore, reiciendis non dolores quidem, eveniet quam exercitationem at quis voluptates vel saepe sed ducimus laudantium qui eius atque odit cum placeat dolore laboriosam! Exercitationem accusamus nobis tempora praesentium dolores? Saepe cupiditate nemo eligendi est, molestias quae, perferendis id animi iusto modi voluptate nobis doloremque odio esse illo nesciunt voluptates dignissimos omnis tempore soluta obcaecati aliquid et incidunt. Illum repellendus similique numquam non recusandae, explicabo eum, facilis fugit error itaque consequuntur.', '66326db26271d6.35405067.pdf', '66326db2627264.34140698.jpg', '2024-05-02 00:28:34', '2020106425', 0, 1);

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
  `is_gforms` int(11) NOT NULL DEFAULT 0,
  `is_archived` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `survey_name`, `respondents`, `url`, `description`, `account_id`, `deadline`, `created_at`, `filename`, `is_gforms`, `is_archived`) VALUES
(19, 'try url 1', 5, 'http://gmail.com', 'haha haha', '2020101630', '2024-05-07 00:00:00', '2024-05-06 11:00:51', 'asdfgh', 1, 1),
(20, 'haha', 4, '', 'haha', '2020100001', '2024-05-09 00:00:00', '2024-05-08 12:21:29', 'gaga', 1, 0),
(21, 'haha', 5, 'hahahahahahahahaha', ' ha', '2020100002', '2024-05-10 00:00:00', '2024-05-08 12:30:28', 'ha', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
