-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 02:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_url_shortener`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2019_12_22_015115_create_short_urls_table', 1),
(6, '2019_12_22_015214_create_short_url_visits_table', 1),
(7, '2020_02_11_224848_update_short_url_table_for_version_two_zero_zero', 1),
(8, '2020_02_12_008432_update_short_url_visits_table_for_version_two_zero_zero', 1),
(9, '2020_04_10_224546_update_short_url_table_for_version_three_zero_zero', 1),
(10, '2020_04_20_009283_update_short_url_table_add_option_to_forward_query_params', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `short_urls`
--

CREATE TABLE `short_urls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_short_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `single_use` tinyint(1) NOT NULL,
  `forward_query_params` tinyint(1) NOT NULL DEFAULT 0,
  `track_visits` tinyint(1) NOT NULL,
  `redirect_status_code` int(11) NOT NULL DEFAULT 301,
  `track_ip_address` tinyint(1) NOT NULL DEFAULT 0,
  `track_operating_system` tinyint(1) NOT NULL DEFAULT 0,
  `track_operating_system_version` tinyint(1) NOT NULL DEFAULT 0,
  `track_browser` tinyint(1) NOT NULL DEFAULT 0,
  `track_browser_version` tinyint(1) NOT NULL DEFAULT 0,
  `track_referer_url` tinyint(1) NOT NULL DEFAULT 0,
  `track_device_type` tinyint(1) NOT NULL DEFAULT 0,
  `activated_at` timestamp NULL DEFAULT '2022-09-18 22:07:57',
  `deactivated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `short_urls`
--

INSERT INTO `short_urls` (`id`, `destination_url`, `url_key`, `default_short_url`, `single_use`, `forward_query_params`, `track_visits`, `redirect_status_code`, `track_ip_address`, `track_operating_system`, `track_operating_system_version`, `track_browser`, `track_browser_version`, `track_referer_url`, `track_device_type`, `activated_at`, `deactivated_at`, `created_at`, `updated_at`, `users_id`) VALUES
(9, 'https://localhost:8000/homepageView', 'k4x9e', 'http://localhost/short/k4x9e', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 01:05:29', NULL, '2022-09-19 01:05:29', '2022-09-19 01:05:29', -1),
(10, 'https://app.slack.com/client/T040ABKCMQU/C03V7K9A90X?cdn_fallback=2', '1V9O4', 'http://localhost/short/1V9O4', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 01:52:36', NULL, '2022-09-19 01:52:36', '2022-09-19 01:52:36', -1),
(11, 'https://app.slack.com/client/T040ABKCMQU/C03V7K9A90X?cdn_fallback=2', 'aVpge', 'http://localhost/short/aVpge', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 01:58:29', NULL, '2022-09-19 01:58:29', '2022-09-19 01:58:29', -1),
(12, 'https://216.238.73.5:8888/files', 'MenKV', 'http://localhost/short/MenKV', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 08:13:53', NULL, '2022-09-19 08:13:53', '2022-09-19 08:13:53', -1),
(13, 'https://app.slack.com/client/T040ABKCMQU/C03V7K9A90X?cdn_fallback=2', 'x4Lqe', 'http://localhost/short/x4Lqe', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 09:38:14', NULL, '2022-09-19 09:38:14', '2022-09-19 09:38:14', 2),
(14, 'https://216.238.73.5:8888/files', 'xVmPe', 'http://localhost/short/xVmPe', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 09:42:25', NULL, '2022-09-19 09:42:25', '2022-09-19 09:42:25', 2),
(15, 'https://app.slack.com/client/T040ABKCMQU/C03V7K9A90X?cdn_fallback=2', 'QV0MN', 'http://localhost/short/QV0MN', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 09:43:05', NULL, '2022-09-19 09:43:05', '2022-09-19 09:43:05', 2),
(16, 'https://localhost:8000/homepageView', 'Y4Qre', 'http://localhost/short/Y4Qre', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 14:33:13', NULL, '2022-09-19 14:33:13', '2022-09-19 14:33:13', 3),
(17, 'https://themeforest.net/item/hud-laravel-bootstrap-5-admin-template/36443349', 'geq1e', 'http://localhost/short/geq1e', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 14:33:43', NULL, '2022-09-19 14:33:43', '2022-09-19 14:33:43', 3),
(18, 'https://themeforest.net/item/hud-laravel-bootstrap-5-admin-template/36443349', '5V1BN', 'http://localhost/short/5V1BN', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 15:22:21', NULL, '2022-09-19 15:22:21', '2022-09-19 15:22:21', 2),
(19, 'https://app.slack.com/client/T040ABKCMQU/C03V7K9A90X?cdn_fallback=2', 'wVln4', 'http://localhost/short/wVln4', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 15:22:43', NULL, '2022-09-19 15:22:43', '2022-09-19 15:22:43', 2),
(20, 'https://https://216.238.73.5:8888/files', 'PeRM4', 'http://localhost/short/PeRM4', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 18:32:56', NULL, '2022-09-19 18:32:56', '2022-09-19 18:32:56', 2),
(21, 'https://themeforest.net/item/hud-laravel-bootstrap-5-admin-template/36443349', 'KVvme', 'http://localhost/short/KVvme', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-20 07:47:07', NULL, '2022-09-20 07:47:07', '2022-09-20 07:47:07', 4),
(22, 'https://themeforest.net/item/hud-laravel-bootstrap-5-admin-template/36443349', 'be8xe', 'http://localhost/short/be8xe', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-20 07:49:52', NULL, '2022-09-20 07:49:52', '2022-09-20 07:49:52', 5),
(23, 'https://216.238.73.5:8888/files', 'J4ZQN', 'http://localhost/short/J4ZQN', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-20 07:51:42', NULL, '2022-09-20 07:51:42', '2022-09-20 07:51:42', 2);

-- --------------------------------------------------------

--
-- Table structure for table `short_url_visits`
--

CREATE TABLE `short_url_visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_url_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operating_system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operating_system_version` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser_version` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referer_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visited_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'dev star', 'skywalker315@outlook.com', NULL, '$2y$10$.RBnlXCctpHSd7UkPnj1LuNJJ8bQ.19nw/BHVJDBuFQ9Pa.dOwrUO', NULL, '2022-09-19 01:58:03', '2022-09-19 01:58:03'),
(3, 'dump', 's2@outlook.com', NULL, '$2y$10$mPf1/vx1q8sM0tbpT.uuSur/g6D8R/USl77of3mu3Og6uEDuX9u.G', NULL, '2022-09-19 14:32:38', '2022-09-19 14:32:38'),
(4, 'dump', 's3@outlook.com', NULL, '$2y$10$p/LwKZrMP0eS04pq5vfPPeDg.O.VQIzCvP0cpvdosf1MOVtT1o9z6', NULL, '2022-09-20 07:42:04', '2022-09-20 07:42:04'),
(5, 'dump', 's4@outlook.com', NULL, '$2y$10$1MjNHW5o8Glqys5ba.J6j.hEIUSqmrAwjbleh3.nkbee92vgUE06W', NULL, '2022-09-20 07:49:03', '2022-09-20 07:49:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `short_urls`
--
ALTER TABLE `short_urls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `short_urls_url_key_unique` (`url_key`);

--
-- Indexes for table `short_url_visits`
--
ALTER TABLE `short_url_visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `short_url_visits_short_url_id_foreign` (`short_url_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `short_urls`
--
ALTER TABLE `short_urls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `short_url_visits`
--
ALTER TABLE `short_url_visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `short_url_visits`
--
ALTER TABLE `short_url_visits`
  ADD CONSTRAINT `short_url_visits_short_url_id_foreign` FOREIGN KEY (`short_url_id`) REFERENCES `short_urls` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
