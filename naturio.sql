-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 29, 2025 at 11:43 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naturio`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` time DEFAULT NULL,
  `services` json DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`, `appointment_date`, `appointment_time`, `services`) VALUES
(3, 'Hussein S Mortada', 'hsenmortada2112@gmail.com', '76977996', 'Nothing', '2025-03-28 10:10:37', '2025-03-28 10:10:37', '2025-03-30', '17:05:00', '\"[\\\"service 1\\\"]\"'),
(2, 'fatima yassine', 'fatim@gmail.com', '70991380', 'THank you', '2025-03-28 09:57:30', '2025-03-28 09:57:30', '2025-04-01', '13:00:00', '\"[\\\"service 2\\\"]\"'),
(4, 'wfa', 'hjuehfu@gmail.com', '344', 'qfae', '2025-03-28 10:43:37', '2025-03-28 10:43:37', '2025-03-28', '02:03:00', '\"[\\\"service 1\\\"]\"');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Fatima', 'Hello', '2025-03-28 07:39:42', '2025-03-28 07:39:42'),
(2, 'Hussein', 'Amazing', '2025-03-28 07:40:38', '2025-03-28 07:40:38'),
(3, 'hussein', 'wijf', '2025-03-28 10:46:04', '2025-03-28 10:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_27_131152_create_products_table', 2),
(6, '2025_03_27_133231_create_services_table', 3),
(7, '2025_03_28_084526_create_orders_table', 4),
(8, '2025_03_28_092954_create_feedback_table', 5),
(9, '2025_03_28_095247_create_appointments_table', 6),
(10, '2025_03_28_115329_add_fields_to_appointments_table', 7),
(11, '2025_03_28_124631_create_personal_access_tokens_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `items`, `created_at`, `updated_at`) VALUES
(1, 'hussein mortada', '76977', 'beirut', '{\"1\": {\"id\": 1, \"name\": \"Product Test 1\", \"image\": \"products/JiJyEyGhF1Gvb4XrEDvhmrVWvtsiXoN8zViryxku.png\", \"price\": \"150.00\", \"quantity\": 1}, \"5\": {\"id\": 5, \"name\": \"xxx\", \"image\": \"products/i0kl4kKr7QjVv9oHT00YaXFdDeezfVLxsN6oFFNP.jpg\", \"price\": \"233.00\", \"quantity\": 1}}', '2025-03-28 06:53:37', '2025-03-28 06:53:37'),
(2, 'moh', '0980', 'okolwefsefgs', '{\"1\": {\"id\": 1, \"name\": \"Product Test 1\", \"image\": \"products/JiJyEyGhF1Gvb4XrEDvhmrVWvtsiXoN8zViryxku.png\", \"price\": \"150.00\", \"quantity\": 1}, \"4\": {\"id\": 4, \"name\": \"Vitamin C Serum\", \"image\": \"products/d8iOzlOCsnFOzXE0CxHwUMfozmvf0A8kypfdDxTd.jpg\", \"price\": \"8.50\", \"quantity\": 1}, \"5\": {\"id\": 5, \"name\": \"xxx\", \"image\": \"products/i0kl4kKr7QjVv9oHT00YaXFdDeezfVLxsN6oFFNP.jpg\", \"price\": \"233.00\", \"quantity\": 1}}', '2025-03-28 06:54:10', '2025-03-28 06:54:10'),
(3, 'microsoft', '92548', 'beirut lebanon', '{\"4\": {\"id\": 4, \"name\": \"Vitamin C Serum\", \"image\": \"products/d8iOzlOCsnFOzXE0CxHwUMfozmvf0A8kypfdDxTd.jpg\", \"price\": \"8.50\", \"quantity\": 1}}', '2025-03-28 06:59:36', '2025-03-28 06:59:36'),
(4, 'hussein', '93849', 'kdjwkfjaekg', '{\"1\": {\"id\": 1, \"name\": \"Product Test 1\", \"image\": \"products/JiJyEyGhF1Gvb4XrEDvhmrVWvtsiXoN8zViryxku.png\", \"price\": \"150.00\", \"quantity\": 1}, \"3\": {\"id\": 3, \"name\": \"Hair Treatment\", \"image\": \"products/Gu1TgK9k0UHXm4t6UCXE7WOcnViwCNvdQwQsLCU5.jpg\", \"price\": \"12.00\", \"quantity\": 1}, \"6\": {\"id\": 6, \"name\": \"yyyy\", \"image\": \"products/a3j1PHjlpuBbuKfJcvLhfVCjrkp7hc3oRG2LtNTQ.jpg\", \"price\": \"20.00\", \"quantity\": 1}}', '2025-03-28 07:10:10', '2025-03-28 07:10:10'),
(5, 'hussein', '980', 'j', '{\"1\": {\"id\": 1, \"name\": \"Product Test 1\", \"image\": \"products/JiJyEyGhF1Gvb4XrEDvhmrVWvtsiXoN8zViryxku.png\", \"price\": \"150.00\", \"quantity\": 1}, \"3\": {\"id\": 3, \"name\": \"Hair Treatment\", \"image\": \"products/Gu1TgK9k0UHXm4t6UCXE7WOcnViwCNvdQwQsLCU5.jpg\", \"price\": \"12.00\", \"quantity\": 2}, \"4\": {\"id\": 4, \"name\": \"Vitamin C Serum\", \"image\": \"products/d8iOzlOCsnFOzXE0CxHwUMfozmvf0A8kypfdDxTd.jpg\", \"price\": \"8.50\", \"quantity\": 1}, \"5\": {\"id\": 5, \"name\": \"xxx\", \"image\": \"products/i0kl4kKr7QjVv9oHT00YaXFdDeezfVLxsN6oFFNP.jpg\", \"price\": \"233.00\", \"quantity\": 1}}', '2025-03-28 11:03:56', '2025-03-28 11:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Product Test 1', 'Product test 1 lorum ipsom', '150.00', 'products/JiJyEyGhF1Gvb4XrEDvhmrVWvtsiXoN8zViryxku.png', '2025-03-27 11:25:24', '2025-03-27 11:25:24'),
(2, 'Sum Cream', 'Sum Cream', '7.00', 'products/RJsUzD22vpbj20m5rkhwYNxfwW7WsxXDY7UGktMd.jpg', '2025-03-27 11:55:46', '2025-03-27 12:21:15'),
(3, 'Hair Treatment', 'Hair Treatment', '12.00', 'products/Gu1TgK9k0UHXm4t6UCXE7WOcnViwCNvdQwQsLCU5.jpg', '2025-03-27 12:20:20', '2025-03-27 12:20:20'),
(4, 'Vitamin C Serum', 'Vitamin C Serum', '8.50', 'products/d8iOzlOCsnFOzXE0CxHwUMfozmvf0A8kypfdDxTd.jpg', '2025-03-27 12:20:40', '2025-03-27 12:20:40'),
(5, 'xxx', 'xxx', '233.00', 'products/i0kl4kKr7QjVv9oHT00YaXFdDeezfVLxsN6oFFNP.jpg', '2025-03-27 12:41:24', '2025-03-27 12:41:24'),
(6, 'yyyy', 'yyyy', '20.00', 'products/a3j1PHjlpuBbuKfJcvLhfVCjrkp7hc3oRG2LtNTQ.jpg', '2025-03-27 12:41:46', '2025-03-27 12:41:46'),
(7, 'Product test  #10', 'jfiuehufgh', '25.00', 'products/FZkE4zDugI4QW4sF9vkg7eb4ftGP9dUAD2f007OB.jpg', '2025-03-28 10:38:38', '2025-03-28 10:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'service 1', 'service 1', '123.00', 'services/ulbXOIalWMH6cWEgCRvCKrZYiVyhNhjnVaCK68LE.png', '2025-03-27 11:54:43', '2025-03-27 11:54:43'),
(2, 'service 2', 'hello', '230.00', 'services/nViW4C9n4Jje3vb60vhwLgfuzmLcjKw0YDsqfNzA.png', '2025-03-27 11:55:12', '2025-03-27 11:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('XWiFMfMrqKehz2c39Wg8SkCysDhqrY4uY4f4RN0T', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:136.0) Gecko/20100101 Firefox/136.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVmx2bzU2YlREV0JLY0lnbTNqVFlMMXZ3YU1OajkweWpuVWRITXFIMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mZWVkYmFja3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6ImJhc2tldCI7YToyOntpOjU7YTo1OntzOjI6ImlkIjtpOjU7czo0OiJuYW1lIjtzOjM6Inh4eCI7czo1OiJwcmljZSI7czo2OiIyMzMuMDAiO3M6NToiaW1hZ2UiO3M6NTM6InByb2R1Y3RzL2kwa2w0a0tyN1FqVnY5b0hUMDBZYVhGZERlZXpmVkx4c042b0ZGTlAuanBnIjtzOjg6InF1YW50aXR5IjtpOjI7fWk6MTthOjU6e3M6MjoiaWQiO2k6MTtzOjQ6Im5hbWUiO3M6MTQ6IlByb2R1Y3QgVGVzdCAxIjtzOjU6InByaWNlIjtzOjY6IjE1MC4wMCI7czo1OiJpbWFnZSI7czo1MzoicHJvZHVjdHMvSmlKeUV5R2hGMUd2YjRYckVEdmhtclZXdnRzaVhvTjh6VmlyeXhrdS5wbmciO3M6ODoicXVhbnRpdHkiO2k6MTt9fX0=', 1743172741),
('ohUfqpSQdZo6Qx2Hn0BfwfIiXnAxDPpnlOVp442u', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:136.0) Gecko/20100101 Firefox/136.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibzNaT211OFgzVXhacGNXWHBNNm9XdzhwWFlFdW5Zb0NCN0tsd2pRRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1743171570);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
