/*
 Navicat Premium Data Transfer

 Source Server         : ThisMySQL
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : bitly

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 20/09/2022 21:54:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_22_015115_create_short_urls_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_12_22_015214_create_short_url_visits_table', 1);
INSERT INTO `migrations` VALUES (7, '2020_02_11_224848_update_short_url_table_for_version_two_zero_zero', 1);
INSERT INTO `migrations` VALUES (8, '2020_02_12_008432_update_short_url_visits_table_for_version_two_zero_zero', 1);
INSERT INTO `migrations` VALUES (9, '2020_04_10_224546_update_short_url_table_for_version_three_zero_zero', 1);
INSERT INTO `migrations` VALUES (10, '2020_04_20_009283_update_short_url_table_add_option_to_forward_query_params', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for short_url_visits
-- ----------------------------
DROP TABLE IF EXISTS `short_url_visits`;
CREATE TABLE `short_url_visits`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `short_url_id` bigint UNSIGNED NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `operating_system` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `operating_system_version` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `browser` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `browser_version` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `referer_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `device_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `visited_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `short_url_visits_short_url_id_foreign`(`short_url_id`) USING BTREE,
  CONSTRAINT `short_url_visits_short_url_id_foreign` FOREIGN KEY (`short_url_id`) REFERENCES `short_urls` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of short_url_visits
-- ----------------------------

-- ----------------------------
-- Table structure for short_urls
-- ----------------------------
DROP TABLE IF EXISTS `short_urls`;
CREATE TABLE `short_urls`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `destination_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_short_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `single_use` tinyint(1) NOT NULL,
  `forward_query_params` tinyint(1) NOT NULL DEFAULT 0,
  `track_visits` tinyint(1) NOT NULL,
  `redirect_status_code` int NOT NULL DEFAULT 301,
  `track_ip_address` tinyint(1) NOT NULL DEFAULT 0,
  `track_operating_system` tinyint(1) NOT NULL DEFAULT 0,
  `track_operating_system_version` tinyint(1) NOT NULL DEFAULT 0,
  `track_browser` tinyint(1) NOT NULL DEFAULT 0,
  `track_browser_version` tinyint(1) NOT NULL DEFAULT 0,
  `track_referer_url` tinyint(1) NOT NULL DEFAULT 0,
  `track_device_type` tinyint(1) NOT NULL DEFAULT 0,
  `activated_at` timestamp NULL DEFAULT '2022-09-19 07:07:57',
  `deactivated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int NULL DEFAULT -1,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `short_urls_url_key_unique`(`url_key`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of short_urls
-- ----------------------------
INSERT INTO `short_urls` VALUES (9, 'https://localhost:8000/homepageView', 'k4x9e', 'http://localhost/short/k4x9e', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 01:05:29', NULL, '2022-09-19 01:05:29', '2022-09-19 01:05:29', -1);
INSERT INTO `short_urls` VALUES (10, 'https://app.slack.com/client/T040ABKCMQU/C03V7K9A90X?cdn_fallback=2', '1V9O4', 'http://localhost/short/1V9O4', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 01:52:36', NULL, '2022-09-19 01:52:36', '2022-09-19 01:52:36', -1);
INSERT INTO `short_urls` VALUES (11, 'https://app.slack.com/client/T040ABKCMQU/C03V7K9A90X?cdn_fallback=2', 'aVpge', 'http://localhost/short/aVpge', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 01:58:29', NULL, '2022-09-19 01:58:29', '2022-09-19 01:58:29', -1);
INSERT INTO `short_urls` VALUES (12, 'https://216.238.73.5:8888/files', 'MenKV', 'http://localhost/short/MenKV', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 08:13:53', NULL, '2022-09-19 08:13:53', '2022-09-19 08:13:53', -1);
INSERT INTO `short_urls` VALUES (13, 'https://app.slack.com/client/T040ABKCMQU/C03V7K9A90X?cdn_fallback=2', 'x4Lqe', 'http://localhost/short/x4Lqe', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 09:38:14', NULL, '2022-09-19 09:38:14', '2022-09-19 09:38:14', 2);
INSERT INTO `short_urls` VALUES (14, 'https://216.238.73.5:8888/files', 'xVmPe', 'http://localhost/short/xVmPe', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 09:42:25', NULL, '2022-09-19 09:42:25', '2022-09-19 09:42:25', 2);
INSERT INTO `short_urls` VALUES (15, 'https://app.slack.com/client/T040ABKCMQU/C03V7K9A90X?cdn_fallback=2', 'QV0MN', 'http://localhost/short/QV0MN', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 09:43:05', NULL, '2022-09-19 09:43:05', '2022-09-19 09:43:05', 2);
INSERT INTO `short_urls` VALUES (16, 'https://localhost:8000/homepageView', 'Y4Qre', 'http://localhost/short/Y4Qre', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 14:33:13', NULL, '2022-09-19 14:33:13', '2022-09-19 14:33:13', 3);
INSERT INTO `short_urls` VALUES (17, 'https://themeforest.net/item/hud-laravel-bootstrap-5-admin-template/36443349', 'geq1e', 'http://localhost/short/geq1e', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 14:33:43', NULL, '2022-09-19 14:33:43', '2022-09-19 14:33:43', 3);
INSERT INTO `short_urls` VALUES (18, 'https://themeforest.net/item/hud-laravel-bootstrap-5-admin-template/36443349', '5V1BN', 'http://localhost/short/5V1BN', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 15:22:21', NULL, '2022-09-19 15:22:21', '2022-09-19 15:22:21', 2);
INSERT INTO `short_urls` VALUES (19, 'https://app.slack.com/client/T040ABKCMQU/C03V7K9A90X?cdn_fallback=2', 'wVln4', 'http://localhost/short/wVln4', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 15:22:43', NULL, '2022-09-19 15:22:43', '2022-09-19 15:22:43', 2);
INSERT INTO `short_urls` VALUES (20, 'https://https://216.238.73.5:8888/files', 'PeRM4', 'http://localhost/short/PeRM4', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-19 18:32:56', NULL, '2022-09-19 18:32:56', '2022-09-19 18:32:56', 2);
INSERT INTO `short_urls` VALUES (21, 'https://themeforest.net/item/hud-laravel-bootstrap-5-admin-template/36443349', 'KVvme', 'http://localhost/short/KVvme', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-20 07:47:07', NULL, '2022-09-20 07:47:07', '2022-09-20 07:47:07', 4);
INSERT INTO `short_urls` VALUES (22, 'https://themeforest.net/item/hud-laravel-bootstrap-5-admin-template/36443349', 'be8xe', 'http://localhost/short/be8xe', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-20 07:49:52', NULL, '2022-09-20 07:49:52', '2022-09-20 07:49:52', 5);
INSERT INTO `short_urls` VALUES (23, 'https://216.238.73.5:8888/files', 'J4ZQN', 'http://localhost/short/J4ZQN', 0, 0, 1, 301, 1, 1, 1, 1, 1, 1, 1, '2022-09-20 07:51:42', NULL, '2022-09-20 07:51:42', '2022-09-20 07:51:42', 2);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'dev star', 'skywalker315@outlook.com', NULL, '$2y$10$.RBnlXCctpHSd7UkPnj1LuNJJ8bQ.19nw/BHVJDBuFQ9Pa.dOwrUO', NULL, '2022-09-19 01:58:03', '2022-09-19 01:58:03');
INSERT INTO `users` VALUES (3, 'dump', 's2@outlook.com', NULL, '$2y$10$mPf1/vx1q8sM0tbpT.uuSur/g6D8R/USl77of3mu3Og6uEDuX9u.G', NULL, '2022-09-19 14:32:38', '2022-09-19 14:32:38');
INSERT INTO `users` VALUES (4, 'dump', 's3@outlook.com', NULL, '$2y$10$p/LwKZrMP0eS04pq5vfPPeDg.O.VQIzCvP0cpvdosf1MOVtT1o9z6', NULL, '2022-09-20 07:42:04', '2022-09-20 07:42:04');
INSERT INTO `users` VALUES (5, 'dump', 's4@outlook.com', NULL, '$2y$10$1MjNHW5o8Glqys5ba.J6j.hEIUSqmrAwjbleh3.nkbee92vgUE06W', NULL, '2022-09-20 07:49:03', '2022-09-20 07:49:03');

SET FOREIGN_KEY_CHECKS = 1;
