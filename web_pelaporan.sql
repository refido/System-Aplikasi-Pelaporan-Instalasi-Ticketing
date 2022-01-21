/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : web_pelaporan

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 18/01/2022 10:32:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_admin` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '(Generate No.Unik 5 Digit',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_tlpn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Aktif,\r\nNon Aktif',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'ABC34', 'Syahroni Ahmad Maulana', '081876454123', 'Aktif', '2022-01-08 12:58:21', NULL);
INSERT INTO `admins` VALUES (2, 'ABC12', 'Daffa Kun', 'asd', 'asd', '2022-01-16 03:06:45', '2022-01-16 03:10:41');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, '01', 'kesehatan', '2022-01-08 12:40:28', '2022-01-09 12:40:28');
INSERT INTO `categories` VALUES (2, '02', 'pemeritah', '2022-01-14 04:22:30', '2022-01-14 04:22:30');
INSERT INTO `categories` VALUES (3, '03', 'industry', '2022-01-08 12:40:28', '2022-01-09 12:40:28');

-- ----------------------------
-- Table structure for components
-- ----------------------------
DROP TABLE IF EXISTS `components`;
CREATE TABLE `components`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of components
-- ----------------------------
INSERT INTO `components` VALUES (1, '01', 'ticketing', NULL, NULL);
INSERT INTO `components` VALUES (2, '02', 'caller', NULL, NULL);
INSERT INTO `components` VALUES (3, '03', 'digital signame', NULL, NULL);
INSERT INTO `components` VALUES (4, '04', 'hardware', NULL, NULL);
INSERT INTO `components` VALUES (5, '05', 'jaringan', NULL, NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for installation_schedules
-- ----------------------------
DROP TABLE IF EXISTS `installation_schedules`;
CREATE TABLE `installation_schedules`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `number_of_technicians` bigint(20) NOT NULL COMMENT 'banyak teknisi yang bertugas',
  `instance_id` bigint(20) NOT NULL,
  `technician_id` bigint(20) NOT NULL COMMENT 'relation from technicians for leader',
  `date_instalation` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 baru\r\n2 proses',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of installation_schedules
-- ----------------------------
INSERT INTO `installation_schedules` VALUES (1, 'AA134', 3, 1, 12, '2022-01-08', 1, '2022-01-08 12:40:28', '2022-01-09 12:40:28');

-- ----------------------------
-- Table structure for instances
-- ----------------------------
DROP TABLE IF EXISTS `instances`;
CREATE TABLE `instances`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_tlpn_pic` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pic_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of instances
-- ----------------------------
INSERT INTO `instances` VALUES (1, 2, 'PT JAYA NUSTANRA NET', '087898917612', 'Menara 165 Office Tower 12nd Floor, Jl. TB Simatupang No.Kav. 1, Cilandak Tim., Daerah Khusus Ibukota Jakarta 12560', 'Ahmad Tohari', NULL, '2022-01-08 12:40:28', '2022-01-09 12:40:28');
INSERT INTO `instances` VALUES (2, 2, 'PT LANGGENG INDRAJAYA NET', '087898917612', 'Menara 165 Office Tower 12nd Floor, Jl. TB Simatupang No.Kav. 1, Cilandak Tim., Daerah Khusus Ibukota Jakarta 12560', 'Ahmad Fauzan', NULL, '2022-01-08 12:40:28', '2022-01-09 12:40:28');
INSERT INTO `instances` VALUES (3, 1, 'PT STIR LONG NET', '087898917612', 'Menara 165 Office Tower 12nd Floor, Jl. TB Simatupang No.Kav. 1, Cilandak Tim., Daerah Khusus Ibukota Jakarta 12560', 'Santi Carzola', NULL, '2022-01-08 12:40:28', '2022-01-09 12:40:28');
INSERT INTO `instances` VALUES (4, 2, 'PT LANGGENG INDRAJAYA NET', '087898917612', 'Menara 165 Office Tower 12nd Floor, Jl. TB Simatupang No.Kav. 1, Cilandak Tim., Daerah Khusus Ibukota Jakarta 12560', 'Ahmad Karlos', NULL, '2022-01-08 12:40:28', '2022-01-09 12:40:28');

-- ----------------------------
-- Table structure for managers
-- ----------------------------
DROP TABLE IF EXISTS `managers`;
CREATE TABLE `managers`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_manager` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '(Generate No.Unik 5 Digit',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_tlpn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Aktif,\r\nNon Aktif',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of managers
-- ----------------------------
INSERT INTO `managers` VALUES (1, 'ABC12', 'Ahmad Anton Firsmansyah', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for programmers
-- ----------------------------
DROP TABLE IF EXISTS `programmers`;
CREATE TABLE `programmers`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_programmer` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '(Generate No.Unik 5 Digit',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_tlpn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Aktif,\r\nNon Aktif',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of programmers
-- ----------------------------
INSERT INTO `programmers` VALUES (1, 'ABC@1', 'Syamsul Arifin Bianka', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');

-- ----------------------------
-- Table structure for report_installations
-- ----------------------------
DROP TABLE IF EXISTS `report_installations`;
CREATE TABLE `report_installations`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `schedule_id` bigint(20) NOT NULL COMMENT 'relation from installation_schedules',
  `start_installation` datetime(0) NULL DEFAULT NULL,
  `start_training` datetime(0) NULL DEFAULT NULL,
  `complete_training` datetime(0) NULL DEFAULT NULL,
  `completed_installation` datetime(0) NULL DEFAULT NULL,
  `component_id` bigint(20) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 proses\r\n2 selesai',
  `jumlah_caller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'android' COMMENT 'android / dekstop',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of report_installations
-- ----------------------------
INSERT INTO `report_installations` VALUES (1, 1, '2022-01-08 16:27:40', NULL, NULL, NULL, 1, 1, 'android', '2022-01-08 12:40:28', NULL);
INSERT INTO `report_installations` VALUES (2, 1, '2022-01-08 16:27:40', '2022-01-08 19:29:08', NULL, NULL, 2, 2, 'android', '2022-01-08 12:40:28', NULL);
INSERT INTO `report_installations` VALUES (3, 1, '2022-01-08 16:27:40', '2022-01-08 19:29:08', NULL, '2022-01-08 20:30:02', 3, 2, 'android', '2022-01-08 12:40:28', NULL);

-- ----------------------------
-- Table structure for report_photos
-- ----------------------------
DROP TABLE IF EXISTS `report_photos`;
CREATE TABLE `report_photos`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `report_id` bigint(20) NOT NULL,
  `photos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of report_photos
-- ----------------------------

-- ----------------------------
-- Table structure for technician_instance_schedules
-- ----------------------------
DROP TABLE IF EXISTS `technician_instance_schedules`;
CREATE TABLE `technician_instance_schedules`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tecnician_id` bigint(20) NOT NULL COMMENT 'relation from technicians for crew',
  `schedule_id` bigint(20) NOT NULL COMMENT 'relation from installation_schedules for schedule installation',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of technician_instance_schedules
-- ----------------------------
INSERT INTO `technician_instance_schedules` VALUES (1, 5, 1, NULL, NULL);
INSERT INTO `technician_instance_schedules` VALUES (2, 6, 1, NULL, NULL);
INSERT INTO `technician_instance_schedules` VALUES (3, 7, 1, NULL, NULL);

-- ----------------------------
-- Table structure for technicians
-- ----------------------------
DROP TABLE IF EXISTS `technicians`;
CREATE TABLE `technicians`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_technician` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '(Generate No.Unik 5 Digit',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_tlpn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Aktif,\r\nNon Aktif',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of technicians
-- ----------------------------
INSERT INTO `technicians` VALUES (1, 'ABC44', 'Bagas Pratam Pramdya Hirmawan', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');
INSERT INTO `technicians` VALUES (2, 'ABC45', 'Bagas Madarian Hadi', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');
INSERT INTO `technicians` VALUES (3, 'ABC46', 'Jefri Al Berto', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');
INSERT INTO `technicians` VALUES (4, 'ABC47', 'Edward New gate', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');
INSERT INTO `technicians` VALUES (9, 'ABC48', 'Marshal D teach', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');
INSERT INTO `technicians` VALUES (10, 'ABC49', 'Marco Sirohige', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');
INSERT INTO `technicians` VALUES (11, 'ABC50', 'Monkey D Dragon', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');
INSERT INTO `technicians` VALUES (12, 'ABC51', 'Monkey D luffy', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');

-- ----------------------------
-- Table structure for ticketings
-- ----------------------------
DROP TABLE IF EXISTS `ticketings`;
CREATE TABLE `ticketings`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `instance_id` bigint(20) NOT NULL COMMENT 'relation from instances',
  `technician_id` bigint(20) NOT NULL,
  `date_created` date NULL DEFAULT NULL,
  `date_complete` date NULL DEFAULT NULL,
  `no_ticketing` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `component_id` bigint(20) NOT NULL,
  `problem` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `solving` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `status` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Open , Proses , Pending , Close',
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ticketings
-- ----------------------------
INSERT INTO `ticketings` VALUES (1, 2, 1, '2022-01-14', '2022-01-14', 'TKT-0001', 1, 'internet not connected', 'cable is crash , has been replaced', 'Open', '2022-01-08 12:40:28', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Administrator,\r\nAdmin,\r\nTeknisi,\r\nProgrammer,\r\nManager',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Administrator', 'Administrator Web Pelaporan', 'administrator@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 12:40:28', '2022-01-09 12:40:28');

SET FOREIGN_KEY_CHECKS = 1;
