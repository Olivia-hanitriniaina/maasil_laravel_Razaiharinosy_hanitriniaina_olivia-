-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2021 at 04:59 PM
-- Server version: 5.7.26
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `acteur`
--

CREATE TABLE `acteur` (
  `id_acteur` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Dave Mendes', NULL, NULL),
(2, 'Steave Long', NULL, NULL),
(3, 'Davido Jackson', NULL, NULL),
(4, 'Carl Marxus', NULL, NULL),
(5, 'Joan Of Archimede', NULL, NULL),
(6, 'Doda', '2021-07-04 08:23:57', '2021-07-04 08:23:57'),
(7, 'Loum', '2021-07-04 08:27:38', '2021-07-04 08:27:38'),
(8, 'Mena', '2021-07-04 08:29:12', '2021-07-04 08:29:12'),
(9, 'Baina', '2021-07-04 08:30:54', '2021-07-04 08:30:54'),
(10, 'Peta', '2021-07-04 08:30:59', '2021-07-04 08:30:59'),
(12, 'John', '2021-07-04 09:18:56', '2021-07-04 09:18:56'),
(13, 'Jack', '2021-07-04 09:20:26', '2021-07-04 09:20:26'),
(14, 'Jean', '2021-07-04 12:10:06', '2021-07-04 12:10:06'),
(15, 'David', '2021-07-04 13:14:01', '2021-07-04 13:14:01'),
(16, 'Felana', '2021-07-04 13:14:09', '2021-07-04 13:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_article` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_author` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `text`, `id_author`, `created_at`, `updated_at`) VALUES
(10, 'Heat wave', 'The highest temperature has been recorded in New York yesterdey', 16, '2021-07-04 13:22:45', '2021-07-04 13:22:45'),
(9, 'Youtube', 'Youtube is now the top in video sharing.', 5, '2021-07-04 12:14:20', '2021-07-04 12:14:20'),
(7, 'Temperature rising', 'Global temperature is global rising the last decade.', 6, '2021-07-04 09:42:07', '2021-07-04 09:42:07'),
(8, 'Venus is active', 'Recent satellite image shows that the warmest planet in the solar system is alive.', 7, '2021-07-04 09:44:27', '2021-07-04 09:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '123456', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id_acteur` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
