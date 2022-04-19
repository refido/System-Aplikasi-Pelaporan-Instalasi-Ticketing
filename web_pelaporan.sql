-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 11:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_pelaporan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL COMMENT 'relation from users for login',
  `id_admin` char(5) NOT NULL COMMENT '(Generate No.Unik 5 Digit',
  `name` varchar(255) NOT NULL,
  `no_tlpn` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL COMMENT 'Aktif,\r\nNon Aktif',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `id_admin`, `name`, `no_tlpn`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'ABC34', 'Syahroni Ahmad Maulana', '081876454123', 'Aktif', '2022-01-08 12:58:21', NULL);

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
-- Table structure for table `installation_schedules`
--

CREATE TABLE `installation_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number_of_technicians` bigint(20) NOT NULL COMMENT 'banyak teknisi yang bertugas',
  `instance_id` bigint(20) NOT NULL,
  `technician_id` bigint(20) NOT NULL COMMENT 'relation from technicians for leader',
  `date_instalation` date NOT NULL,
  `status` varchar(30) NOT NULL COMMENT 'scheduled,\r\nProgress,\r\nStop,\r\nconstrained,\r\nCompeleted\r\n',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `installation_schedules`
--

INSERT INTO `installation_schedules` (`id`, `number_of_technicians`, `instance_id`, `technician_id`, `date_instalation`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 12, '2022-01-08', 'scheduled', '2022-01-08 12:40:28', '2022-01-09 12:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `instances`
--

CREATE TABLE `instances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_tlpn_pic` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `pic_name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instances`
--

INSERT INTO `instances` (`id`, `name`, `no_tlpn_pic`, `address`, `pic_name`, `created_at`, `updated_at`) VALUES
(1, 'PT JAYA NUSTANRA NET', '087898917612', 'Menara 165 Office Tower 12nd Floor, Jl. TB Simatupang No.Kav. 1, Cilandak Tim., Daerah Khusus Ibukota Jakarta 12560', 'Ahmad Tohari', '2022-01-08 12:40:28', '2022-01-09 12:40:28'),
(2, 'PT LANGGENG INDRAJAYA NET', '087898917612', 'Menara 165 Office Tower 12nd Floor, Jl. TB Simatupang No.Kav. 1, Cilandak Tim., Daerah Khusus Ibukota Jakarta 12560', 'Ahmad Fauzan', '2022-01-08 12:40:28', '2022-01-09 12:40:28'),
(3, 'PT STIR LONG NET', '087898917612', 'Menara 165 Office Tower 12nd Floor, Jl. TB Simatupang No.Kav. 1, Cilandak Tim., Daerah Khusus Ibukota Jakarta 12560', 'Santi Carzola', '2022-01-08 12:40:28', '2022-01-09 12:40:28'),
(4, 'PT LANGGENG INDRAJAYA NET', '087898917612', 'Menara 165 Office Tower 12nd Floor, Jl. TB Simatupang No.Kav. 1, Cilandak Tim., Daerah Khusus Ibukota Jakarta 12560', 'Ahmad Karlos', '2022-01-08 12:40:28', '2022-01-09 12:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL COMMENT 'relation from users for login',
  `id_manager` char(5) NOT NULL COMMENT '(Generate No.Unik 5 Digit',
  `name` varchar(255) NOT NULL,
  `no_tlpn` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL COMMENT 'Aktif,\r\nNon Aktif',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `user_id`, `id_manager`, `name`, `no_tlpn`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'ABC12', 'Ahmad Anton Firsmansyah', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programmers`
--

CREATE TABLE `programmers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL COMMENT 'relation from users for login',
  `id_programmer` char(5) NOT NULL COMMENT '(Generate No.Unik 5 Digit',
  `name` varchar(255) NOT NULL,
  `no_tlpn` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL COMMENT 'Aktif,\r\nNon Aktif',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programmers`
--

INSERT INTO `programmers` (`id`, `user_id`, `id_programmer`, `name`, `no_tlpn`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'ABC@1', 'Syamsul Arifin Bianka', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `report_installations`
--

CREATE TABLE `report_installations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schedule_id` bigint(20) NOT NULL COMMENT 'relation from installation_schedules',
  `start_installation` datetime DEFAULT NULL,
  `stop_installation` datetime DEFAULT NULL,
  `completed_installation` datetime DEFAULT NULL,
  `problem` text DEFAULT NULL COMMENT 'for explain problem',
  `condition` text DEFAULT NULL COMMENT 'for explain condition',
  `anydesk_id` varchar(255) DEFAULT NULL COMMENT 'for information of anydesk if have one',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_installations`
--

INSERT INTO `report_installations` (`id`, `schedule_id`, `start_installation`, `stop_installation`, `completed_installation`, `problem`, `condition`, `anydesk_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-01-08 16:27:40', NULL, NULL, 'internet not stable', NULL, '3243544546', '2022-01-08 12:40:28', NULL),
(2, 1, '2022-01-08 16:27:40', '2022-01-08 19:29:08', NULL, 'internet not stable', 'internet stable but not set management bw', '3243544546', '2022-01-08 12:40:28', NULL),
(3, 1, '2022-01-08 16:27:40', '2022-01-08 19:29:08', '2022-01-08 20:30:02', 'internet not stable', 'internet stable and have set management bw', '3243544546', '2022-01-08 12:40:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report_photos`
--

CREATE TABLE `report_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report_id` bigint(20) NOT NULL,
  `photos` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `technicians`
--

CREATE TABLE `technicians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL COMMENT 'relation from users for login',
  `id_technician` char(5) NOT NULL COMMENT '(Generate No.Unik 5 Digit',
  `name` varchar(255) NOT NULL,
  `no_tlpn` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL COMMENT 'Aktif,\r\nNon Aktif',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technicians`
--

INSERT INTO `technicians` (`id`, `user_id`, `id_technician`, `name`, `no_tlpn`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'ABC44', 'Bagas Pratam Pramdya Hirmawan', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28'),
(2, 6, 'ABC45', 'Bagas Madarian Hadi', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28'),
(3, 7, 'ABC46', 'Jefri Al Berto', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28'),
(4, 8, 'ABC47', 'Edward New gate', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28'),
(9, 9, 'ABC48', 'Marshal D teach', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28'),
(10, 10, 'ABC49', 'Marco Sirohige', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28'),
(11, 11, 'ABC50', 'Monkey D Dragon', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28'),
(12, 12, 'ABC51', 'Monkey D luffy', '081876454123', 'Aktif', '2022-01-08 12:40:28', '2022-01-09 12:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `technician_instance_schedules`
--

CREATE TABLE `technician_instance_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tecnician_id` bigint(20) NOT NULL COMMENT 'relation from technicians for crew',
  `schedule_id` bigint(20) NOT NULL COMMENT 'relation from installation_schedules for schedule installation',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician_instance_schedules`
--

INSERT INTO `technician_instance_schedules` (`id`, `tecnician_id`, `schedule_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, NULL, NULL),
(2, 6, 1, NULL, NULL),
(3, 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticketings`
--

CREATE TABLE `ticketings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instance_id` bigint(20) NOT NULL COMMENT 'relation from instances',
  `no_ticketing` varchar(255) DEFAULT NULL,
  `category` varchar(20) NOT NULL COMMENT '- Ticketing\r\n- Caller\r\n- Digital Signage\r\n- Hardware\r\n- Jaringan',
  `status` char(10) NOT NULL COMMENT 'Open , Proses , Pending , Close',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketings`
--

INSERT INTO `ticketings` (`id`, `instance_id`, `no_ticketing`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'TKT-0001', 'Jaringan', 'Open', '2022-01-08 12:40:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Administrator,\r\nAdmin,\r\nTeknisi,\r\nProgrammer,\r\nManager',
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Administrator Web Pelaporan', 'administrator@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28'),
(2, 'Admin', 'Admin Web Pelaporan', 'admin@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28'),
(3, 'Programmer', 'Programmer Web Pelaporan', 'programmer@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28'),
(4, 'Manager', 'Manager Web Pelaporan', 'manager@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28'),
(5, 'Teknisi', 'Teknisi Web Pelaporan', 'teknisi@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28'),
(6, 'Teknisi', 'Teknisi Dua Web Pelaporan', 'teknisidua@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28'),
(7, 'Teknisi', 'Teknisi Tiga Web Pelaporan', 'teknisitiga@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28'),
(8, 'Teknisi', 'Teknisi Empat Web Pelaporan', 'teknisiempat@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28'),
(9, 'Teknisi', 'Teknisi Lima Web Pelaporan', 'teknisilima@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28'),
(10, 'Teknisi', 'Teknisi Enam Web Pelaporan', 'teknisienam@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28'),
(11, 'Teknisi', 'Teknisi Tujuh Web Pelaporan', 'teknisitujuha@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28'),
(12, 'Teknisi', 'Teknisi Delapan Web Pelaporan', 'teknisidelapan@web_pelaporan.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', NULL, '2022-01-08 05:40:28', '2022-01-09 05:40:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `installation_schedules`
--
ALTER TABLE `installation_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instances`
--
ALTER TABLE `instances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

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
-- Indexes for table `programmers`
--
ALTER TABLE `programmers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `report_installations`
--
ALTER TABLE `report_installations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_photos`
--
ALTER TABLE `report_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicians`
--
ALTER TABLE `technicians`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `technician_instance_schedules`
--
ALTER TABLE `technician_instance_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketings`
--
ALTER TABLE `ticketings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installation_schedules`
--
ALTER TABLE `installation_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instances`
--
ALTER TABLE `instances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programmers`
--
ALTER TABLE `programmers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_installations`
--
ALTER TABLE `report_installations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report_photos`
--
ALTER TABLE `report_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `technicians`
--
ALTER TABLE `technicians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `technician_instance_schedules`
--
ALTER TABLE `technician_instance_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticketings`
--
ALTER TABLE `ticketings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
