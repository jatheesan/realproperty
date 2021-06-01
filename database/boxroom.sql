-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 09:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxroom`
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
(6, '2021_05_29_100034_create_rooms_table', 2),
(7, '2021_05_29_203150_create_rooms_table', 3),
(8, '2021_05_29_203535_create_rooms_table', 4),
(9, '2021_05_29_210005_create_rooms_table', 5),
(12, '2014_10_12_000000_create_users_table', 6),
(13, '2014_10_12_100000_create_password_resets_table', 6),
(14, '2019_08_19_000000_create_failed_jobs_table', 6),
(15, '2021_05_18_121416_create_proparty_types_table', 6),
(16, '2021_05_29_003305_create_proparties_table', 6),
(17, '2021_05_29_210637_create_rooms_table', 6),
(18, '2021_05_30_030944_create_owners_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `created_at`, `updated_at`, `name`, `contact_no`, `email`, `address`) VALUES
(1, '2021-06-01 00:38:23', '2021-06-01 00:38:23', 'srijathee', '+441234567890', 'srijathee@gmail.com', '209 Mainstreet,\r\nEastHam\r\nE12 6SA'),
(2, '2021-06-01 00:39:31', '2021-06-01 00:39:31', 'srijatheesan', '+447439185360', 'srijatheesan@gmail.com', '79 Springfield drive,\r\nIlford\r\nIG2 6QS'),
(3, '2021-06-01 01:01:22', '2021-06-01 01:01:22', 'john', '+447439185360', 'john@gmail.com', '209 Mainstreet,\r\nhemal,\r\nUK');

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
-- Table structure for table `proparties`
--

CREATE TABLE `proparties` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `catagery` enum('for sale','for let','shared accommodation') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(10) UNSIGNED DEFAULT NULL,
  `age` enum('Mid 90','Mid 40','New','Newly build') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_term` enum('1 month','3 month','1 year','2-5 year','long-term') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `door_no` int(11) DEFAULT NULL,
  `door_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_pastcode` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_pastcode` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition_of_property` enum('Require Painting','Fully Decorated') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished_property` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accessability` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heating_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_burglar_alarm` tinyint(1) DEFAULT NULL,
  `is_cctv` tinyint(1) DEFAULT NULL,
  `bill` enum('Included','Excluded','Shared') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rent_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_details_display` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_bedrooms` int(11) DEFAULT NULL,
  `no_of_halls` int(11) DEFAULT NULL,
  `no_of_reseptions` int(11) DEFAULT NULL,
  `floors` int(11) DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garden` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internal_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_flag` tinyint(1) DEFAULT NULL,
  `rent_frequency` enum('Monthly','Quarter','Half','Annual') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposite` int(11) DEFAULT NULL,
  `deposite_flag` tinyint(1) DEFAULT NULL,
  `admin_fee_max` int(11) DEFAULT NULL,
  `admin_fee_exe` int(11) DEFAULT NULL,
  `admin_fee_flag` tinyint(1) DEFAULT NULL,
  `date_intake` date DEFAULT NULL,
  `date_published` date DEFAULT NULL,
  `date_revoked` date DEFAULT NULL,
  `owner` int(10) UNSIGNED DEFAULT NULL,
  `is_publish` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proparties`
--

INSERT INTO `proparties` (`id`, `created_at`, `updated_at`, `catagery`, `type`, `age`, `minimum_term`, `door_no`, `door_name`, `first_pastcode`, `second_pastcode`, `post_town`, `post_city`, `post_country`, `display_address`, `condition_of_property`, `furnished_property`, `accessability`, `heating_type`, `is_burglar_alarm`, `is_cctv`, `bill`, `enquiry_contact`, `enquiry_email`, `sale_condition`, `rent_condition`, `property_details`, `property_details_display`, `no_of_bedrooms`, `no_of_halls`, `no_of_reseptions`, `floors`, `parking`, `garden`, `internal_area`, `land_area`, `price`, `price_flag`, `rent_frequency`, `deposite`, `deposite_flag`, `admin_fee_max`, `admin_fee_exe`, `admin_fee_flag`, `date_intake`, `date_published`, `date_revoked`, `owner`, `is_publish`) VALUES
(1, '2021-06-01 00:53:01', '2021-06-01 00:53:01', 'for sale', 3, 'Newly build', '2-5 year', 406, 'Jathees', 'E12', '6SA', 'EastHam', 'Ilford', 'UK', 'E12 6SA\r\nEastHam\r\nIlfort,\r\nUK.', 'Fully Decorated', '[\"Bed and sofa included\",\"Kitchen Items are included\"]', '[\"Ground floor Access\",\"Seperate Enterance\"]', '[\"Gas\"]', 1, 0, 'Shared', '+9155112627626', 'admin@gmail.com', 'No smoking', 'No Pets', 'Ghost property', 'Ghost property,\r\nNo Pets,\r\nNo smoking', 2, 1, 2, 3, '[\"Allocated\",\"Garage\",\"Driveway\"]', '[\"Front Garden\"]', '12*13', '20*15', 100000, 1, 'Annual', 200000, 1, 1000, 4000, 0, '2021-06-01', '2021-06-01', '2021-07-01', 2, 1),
(2, '2021-06-01 00:56:15', '2021-06-01 01:01:22', 'for let', 1, 'Mid 90', '1 month', 407, 'john', 'E12', '6TR', 'WastHam', 'Ilford', 'UK', 'E12 6TR,\r\nWastHam,\r\nIlford,\r\nUK', 'Require Painting', '[\"Kitchen Items are included\"]', '[\"Ground floor Access\"]', '[\"Central\",\"Gas\"]', 0, 1, 'Included', '+91551135627626', 'admin@gmail.com', 'No Parties', 'No Parties', 'No Parties', 'No Parties', 5, 2, 2, 2, '[\"Allocated\"]', '[\"Front Garden\"]', '12*13', '20*15', 500000, 1, 'Monthly', 100000, 1, 1000, 2000, 0, '2021-05-31', '2021-06-01', '2021-06-30', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `proparty_types`
--

CREATE TABLE `proparty_types` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proparty_types`
--

INSERT INTO `proparty_types` (`type_id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Terraced', '2021-06-01 00:35:42', '2021-06-01 00:35:42'),
(2, 'End of Terraced', '2021-06-01 00:35:58', '2021-06-01 00:35:58'),
(3, 'Bangalow', '2021-06-01 00:36:10', '2021-06-01 00:36:10'),
(4, 'Estate', '2021-06-01 00:36:26', '2021-06-01 00:36:26'),
(5, 'Standalone', '2021-06-01 00:36:33', '2021-06-01 00:36:33'),
(6, 'Flat', '2021-06-01 00:36:40', '2021-06-01 00:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_length` decimal(5,2) DEFAULT NULL,
  `room_width` decimal(5,2) DEFAULT NULL,
  `room_dimention_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_dimention_display` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_area_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `created_at`, `updated_at`, `room_name`, `room_length`, `room_width`, `room_dimention_unit`, `room_dimention_display`, `room_area_unit`, `property_id`) VALUES
(1, NULL, NULL, 'Bed Room 1', '56.50', '34.90', 'feet', '56.5*34.9', 'sq ft', 1),
(2, NULL, NULL, 'Bed Room 2', '50.00', '50.00', 'feet', '50.0*50.0', 'sq feet', 1),
(3, NULL, NULL, 'hall', '100.00', '34.80', 'm', '100.0*34.8', 'sq m', 1),
(4, NULL, NULL, 'Reception', '45.00', '34.90', 'm', '45.0*34.9', 'sq m', 1);

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
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `proparties`
--
ALTER TABLE `proparties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proparties_type_index` (`type`),
  ADD KEY `proparties_owner_index` (`owner`);

--
-- Indexes for table `proparty_types`
--
ALTER TABLE `proparty_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proparties`
--
ALTER TABLE `proparties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proparty_types`
--
ALTER TABLE `proparty_types`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
