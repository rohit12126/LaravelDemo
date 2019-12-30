-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2019 at 03:09 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.2.24-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('harish.chapter247@gmail.com', '$2y$10$rp/ri5xc5.RAcbRr3tVCYOm9dsmZ7DBdXnxo25OD5Ei60GeYq.PCe', '2019-10-16 08:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL COMMENT '{1:admin,2:user}',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'harish.chapter247@gmail.com', '$2y$10$vBEmsqSCcwE9xC2cGpFyUe1ftta.Z8ytveEG3CtyyzwIpnw35ojuC', 1, NULL, '2019-10-16 13:51:02', '2019-10-17 09:09:19'),
(3, 'Ronny Kuphal', 'torrey47@keebler.com', '$2y$10$oqMjiKijogcx3OZ/rS5F..T.GVLnd705bgyM0/vmItd.MuKHVkCvC', 2, NULL, '2019-10-18 13:52:47', '2019-10-18 13:52:47'),
(4, 'Luella Keebler', 'gloria.erdman@langworth.com', '$2y$10$j4hdew4o/jjXi.zApazlV.OyTVEUwp7sLyeqLNCCG5rIQPYwGxOzm', 2, NULL, '2019-10-18 13:52:47', '2019-10-18 13:52:47'),
(5, 'Kamron Kreiger', 'vaughn.kutch@luettgen.com', '$2y$10$8yDiJ68I3q7AqQ4jzLXydOfJLMk1Ih5yz3yITzJVhhDo1nvsKcyFy', 2, NULL, '2019-10-18 13:52:47', '2019-10-18 13:52:47'),
(6, 'Idell Walsh', 'krystel04@hyatt.com', '$2y$10$Mjbk7gg0wn5ALqLrUwVeGOPVCDHT3HJbGaHzoJoTFtGzg2iLBlGta', 2, NULL, '2019-10-18 13:52:47', '2019-10-18 13:52:47'),
(7, 'Miss Rosemarie Raynor I', 'addie.stark@dach.com', '$2y$10$gsDb78qQx/W66DYshCX6COd9z6onOCvUxgwXZK7Op2WUsUayj6Rvm', 2, NULL, '2019-10-18 13:52:47', '2019-10-18 13:52:47'),
(8, 'August Stiedemann III', 'lemuel.gutmann@littel.org', '$2y$10$N8YmPGGaVXroRRUbpRIZiO8YTA0RontMKOlfp3vsZAqn5h/kZictK', 2, NULL, '2019-10-18 13:52:47', '2019-10-18 13:52:47'),
(9, 'Mrs. Lillie Quitzon PhD', 'rkoepp@cole.info', '$2y$10$bQNKta1xpinbpDnpRpmTeeuan6pyFkB7PvwHrOd4p.Jh1YkMpOL7y', 2, NULL, '2019-10-18 13:52:47', '2019-10-18 13:52:47'),
(10, 'Winona Corkery', 'myron.bosco@hotmail.com', '$2y$10$0IWS/zf3fw0bM3J728Esa.cWrM8IDOmyqwL.wg/UrKpbvlPY55dse', 2, NULL, '2019-10-18 13:52:48', '2019-10-18 13:52:48'),
(11, 'Mr. Akeem Kovacek', 'qwaters@haag.org', '$2y$10$C83uohGpiAEIj69E.k27GeBqZDSBXCNK.nBUbDXdhinVhwVUofNe6', 2, NULL, '2019-10-18 13:52:48', '2019-10-18 13:52:48'),
(12, 'Crystel Champlin', 'rodger15@gmail.com', '$2y$10$Kdo0yhT1893SceO4QuLeKu72Hm7aV18VRFvnXMxL4rjOY9SVz/9.W', 2, NULL, '2019-10-18 13:52:48', '2019-10-18 13:52:48'),
(13, 'Renee Kutch II', 'ffranecki@zboncak.org', '$2y$10$PducgKhLk9fLh45GQndFRO0pR7MnAgvo5/orZFibw3wDKyuvujnvW', 2, NULL, '2019-10-18 13:53:25', '2019-10-18 13:53:25'),
(14, 'Mr. Sherwood Koepp', 'feest.bradly@emard.biz', '$2y$10$QbIIlCl3TfrGjl9kjl.qs.3F4RTTUUxtb6uMvQpZ4Lj6x9c07s0gO', 2, NULL, '2019-10-18 13:53:25', '2019-10-18 13:53:25'),
(15, 'Brian Braun', 'schumm.chad@parisian.biz', '$2y$10$BVr7EiTZ0Gp/VqX2x26UYuWmpaEo8o3W55rNOac10qmiPj45NBVRq', 2, NULL, '2019-10-18 13:53:26', '2019-10-18 13:53:26'),
(16, 'Johathan Mann', 'bgibson@yahoo.com', '$2y$10$w58phudQ2FJWzcLAma7aMetvwBzic2zZnT5TdoEDi6Ot9ODwe5Ery', 2, NULL, '2019-10-18 13:53:26', '2019-10-18 13:53:26'),
(17, 'Nash Rogahn', 'linwood.bernhard@hotmail.com', '$2y$10$usmOsKYWxtXG7CkzB6yLzeQupVmD4oDtgSjPqq48n9d35zfXZdnFO', 2, NULL, '2019-10-18 13:53:26', '2019-10-18 13:53:26'),
(18, 'Marcos Schneider', 'turcotte.macy@hotmail.com', '$2y$10$Jun9LLbB4PTLjKOZkzZVtONg2vQGGx09OWi/2ZYoHTjMFT/3dUuZS', 2, NULL, '2019-10-18 13:53:26', '2019-10-18 13:53:26'),
(19, 'Hettie Lueilwitz', 'feeney.dane@gmail.com', '$2y$10$BMGPn5XfUgszsXOc0bHQHObnL7/44h2uYQANoYhBtNGq4kN0O0CWC', 2, NULL, '2019-10-18 13:53:26', '2019-10-18 13:53:26'),
(20, 'Dr. Junius Mueller DDS', 'lbartell@sawayn.info', '$2y$10$QcSypnhSKaCLoJTbCz20be5mQS8H25mLFO4466SCeud3DXq8G.vV2', 2, NULL, '2019-10-18 13:53:26', '2019-10-18 13:53:26'),
(21, 'Prof. Lelah Konopelski DVM', 'vicente57@gmail.com', '$2y$10$QduD/0pjY0fNrCPHMjlI..8RTWKjb6DKbf/4./MY8pAiixFwPfrO2', 2, NULL, '2019-10-18 13:53:26', '2019-10-18 13:53:26'),
(22, 'Jimmie Heller', 'bergnaum.shyann@nikolaus.com', '$2y$10$PxoygjD5.yPyT3K5GY15FuOcMRB95/E0b7Q3GC067mx3oYpmWLf9S', 2, NULL, '2019-10-18 13:53:26', '2019-10-18 13:53:26'),
(23, 'Ms. Audie Zulauf IV', 'melisa10@gmail.com', '$2y$10$DDahi8ILuW3rqQjT58RCS.fl58i7/6TU8ogPr4yRVbybopR3Jk2pC', 2, NULL, '2019-10-18 14:00:41', '2019-10-18 14:00:41'),
(24, 'Prof. Lavon Shields DDS', 'gulgowski.karley@yahoo.com', '$2y$10$vdoyrGH1c8oh9DJTnW2ZoeS0mag3hW9qJRoSx4iRbgn7iVI85rNkK', 2, NULL, '2019-10-18 14:00:41', '2019-10-18 14:00:41'),
(25, 'Colin Schuster', 'dzboncak@crooks.info', '$2y$10$1WuWaJJ4XRAFkoKlU98x1OIa9xLIfSnXCDtRg0jJmH72fpo9v36sm', 2, NULL, '2019-10-18 14:00:41', '2019-10-18 14:00:41'),
(26, 'Wellington Cronin', 'susanna.pouros@yahoo.com', '$2y$10$1aN2BuCwLTsikMvQasJ8mu3qZlK67URGn2I5btvEcYuf65pcJ0Ax2', 2, NULL, '2019-10-18 14:00:41', '2019-10-18 14:00:41'),
(27, 'Graciela Rolfson', 'ludwig.spencer@green.com', '$2y$10$HRBe441VCemf2hduvWJt2OnggVj1ViTF/qqKq2bOPdFxHeOprvH2C', 2, NULL, '2019-10-18 14:00:41', '2019-10-18 14:00:41'),
(28, 'Margie Medhurst', 'vbuckridge@hills.com', '$2y$10$6hJXIjEgLh6a14u2o6lFse3KhuJCEX1qK7CMWxbfLcfF4uHqgLwR2', 2, NULL, '2019-10-18 14:00:41', '2019-10-18 14:00:41'),
(29, 'Ursula Purdy', 'alexzander.windler@hotmail.com', '$2y$10$bIMaiZogYY2tTV8s9aIzg.FzczRvffMw0tacjYrHiHAcn/PPHPO6i', 2, NULL, '2019-10-18 14:00:41', '2019-10-18 14:00:41'),
(30, 'Lue Waters', 'ferry.jules@gmail.com', '$2y$10$.mCuwSjNdA4ZjwkwqHbMvOnHKy6R/VabbvnoWwsRdHnIqix04wOIi', 2, NULL, '2019-10-18 14:00:41', '2019-10-18 14:00:41'),
(31, 'Alan Waters', 'angie.labadie@gislason.biz', '$2y$10$qXb2xjwHP6F.LmUBbepq.uGHGy5IX4slnNMwuvJGuYNfmZCl20.Du', 2, NULL, '2019-10-18 14:00:42', '2019-10-18 14:00:42'),
(32, 'Letha Ledner', 'zdickens@lowe.biz', '$2y$10$GXsBM.wMK8d8S4kS3x9n6.DayE6W031xZDgUG8DB4ykoD61VaqqzG', 2, NULL, '2019-10-18 14:00:42', '2019-10-18 14:00:42'),
(33, 'Admin', 'admin@gmail.com', '$2y$10$w.0uE3/qZVX/r9M7m5WGpOMGubtP9tv.XyP/vnxpI3UPeCvMpDw5y', 1, NULL, '2019-10-18 14:00:42', '2019-10-18 14:00:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
