-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 11:20 AM
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
-- Database: `boxroom4rent`
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
(4, '2021_05_18_121416_create_proparty_types_table', 1),
(5, '2021_05_29_003305_create_proparties_table', 1),
(6, '2021_05_29_210637_create_rooms_table', 1),
(7, '2021_05_30_030944_create_owners_table', 1),
(8, '2021_06_05_014431_create_property_images_table', 1),
(9, '2021_06_28_001736_create_properties_table', 1);

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
(1, '2021-07-07 01:02:20', '2021-07-07 01:02:20', 'Box', '+44218734298', 'box@gmail.com', 'gdf hfytr.jgg\r\ngioko,m mklgn4\r\nlondon');

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
('boxroom4rent@gmail.com', '$2y$10$wpK8vCNgvpDyxOEj8AXDyuuLIkzbz51SkkNVRHb1p7/tRVTFOcr7e', '2021-06-30 02:10:08');

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
  `first_pastcode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_pastcode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_street_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `no_of_bedrooms` int(11) DEFAULT NULL,
  `no_of_bathrooms` int(11) DEFAULT NULL,
  `no_of_halls` int(11) DEFAULT NULL,
  `no_of_reseptions` int(11) DEFAULT NULL,
  `floors` int(11) DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garden` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internal_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `property_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `further_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_details_display` tinyint(1) DEFAULT NULL,
  `owner` int(10) UNSIGNED DEFAULT NULL,
  `is_complete` tinyint(1) DEFAULT NULL,
  `is_publish` tinyint(1) DEFAULT NULL,
  `is_sold` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Terraced', '2021-06-28 07:21:01', '2021-06-28 07:21:01'),
(2, 'End of Terraced', '2021-06-28 07:21:26', '2021-06-28 07:21:26'),
(3, 'Estate', '2021-06-28 07:21:39', '2021-06-28 07:21:39'),
(4, 'House', '2021-06-28 07:21:50', '2021-06-28 07:21:50'),
(5, 'Bangalow', '2021-06-28 07:21:59', '2021-06-28 07:21:59'),
(6, 'Villa', '2021-06-28 07:22:12', '2021-06-28 07:22:12'),
(7, 'Flate', '2021-06-28 07:22:20', '2021-06-28 07:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `catagery` enum('for sale','for let','for shared') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(10) UNSIGNED DEFAULT NULL,
  `age` enum('Pre','Post','MidAge') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_term` enum('1 month','6 month','12 month','long term') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `door_no` int(11) DEFAULT NULL,
  `door_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_line_of_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_address_line1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_address_line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_address` tinyint(1) DEFAULT NULL,
  `condition_of_property` enum('Require Painting','Fully Decorated') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition_furnished` enum('Fully','Partial','None') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_type` enum('Shared Entry','Seperate Entry') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heating_type` enum('Central','Independent') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill` enum('Fully Included','Partial') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_burglar_alarm` tinyint(1) DEFAULT NULL,
  `is_cctv` tinyint(1) DEFAULT NULL,
  `is_swimmingpool` tinyint(1) DEFAULT NULL,
  `enquiry_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enquiry_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rent_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `bathrooms` int(11) DEFAULT NULL,
  `halls` int(11) DEFAULT NULL,
  `reseptions` int(11) DEFAULT NULL,
  `floors` int(11) DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garden` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internal_area` decimal(5,1) DEFAULT NULL,
  `land_area` decimal(5,1) DEFAULT NULL,
  `area_unit` enum('sq m','sq cm','sq mm','sq ft','sq inch') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_flag` tinyint(1) DEFAULT NULL,
  `rent_frequency` enum('Weekly','Monthly','Quarter','Half','Annual') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposite` int(11) DEFAULT NULL,
  `deposite_flag` tinyint(1) DEFAULT NULL,
  `admin_fee_max` int(11) DEFAULT NULL,
  `admin_fee_exe` int(11) DEFAULT NULL,
  `admin_fee_flag` tinyint(1) DEFAULT NULL,
  `date_intake` date DEFAULT NULL,
  `date_published` date DEFAULT NULL,
  `date_revoked` date DEFAULT NULL,
  `property_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `further_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_details_display` tinyint(1) DEFAULT NULL,
  `owner` int(10) UNSIGNED DEFAULT NULL,
  `is_complete` tinyint(1) DEFAULT NULL,
  `is_publish` tinyint(1) DEFAULT NULL,
  `is_sold` tinyint(1) DEFAULT NULL,
  `is_let` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `catagery`, `type`, `age`, `minimum_term`, `door_no`, `door_name`, `first_postcode`, `second_postcode`, `street_name`, `second_line_of_address`, `post_town`, `post_city`, `post_country`, `display_address_line1`, `display_address_line2`, `display_address`, `condition_of_property`, `condition_furnished`, `access_type`, `heating_type`, `bill`, `is_burglar_alarm`, `is_cctv`, `is_swimmingpool`, `enquiry_contact`, `enquiry_email`, `sale_condition`, `rent_condition`, `bedrooms`, `bathrooms`, `halls`, `reseptions`, `floors`, `parking`, `garden`, `internal_area`, `land_area`, `area_unit`, `price`, `price_flag`, `rent_frequency`, `deposite`, `deposite_flag`, `admin_fee_max`, `admin_fee_exe`, `admin_fee_flag`, `date_intake`, `date_published`, `date_revoked`, `property_details`, `further_details`, `property_details_display`, `owner`, `is_complete`, `is_publish`, `is_sold`, `is_let`, `created_at`, `updated_at`) VALUES
(1, 'for sale', 5, 'Post', NULL, 505, 'jonh', 'W12', 'E22', 'Main Street', 'Abbey Wood', 'Abbey Wood', 'London', 'London', 'Abbey Wood, Landon', 'W12 E22', 0, 'Require Painting', 'Partial', 'Shared Entry', 'Central', NULL, 0, 0, 0, '+448761235478', 'boxroom@gmail.com', '[\"Balcony or Terrace to all apartments\",\"Transport Links include on-site Crossrail station\",\"Limited incentive of 6 months\' rent-free worth from \\u00a33,750 available\"]', NULL, 2, 1, 1, 0, 1, '[\"Driveway\"]', '[\"Back Garden\",\"Front Garden\"]', '775.0', '1140.9', 'sq ft', 133750, 0, NULL, NULL, 0, 10000, 10000, 0, '2021-06-27', '2021-06-28', NULL, 'The apartments at Royal Arsenal boast high specification throughout and are ready to move into straight away. All homes have a private balcony or a terrace.\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"20 minutes from Canary Wharf\",\"5 minutes from London City Airport\",\"Thames path cycle and walk route - less than 5 minute walk\",\"Artisan patisserie and caf\\u00e9 on your doorstep\",\"Close walk to high street\",\"Balcony or terrace to all apartments\"]', 0, NULL, 0, 0, 1, 0, '2021-06-28 07:25:04', '2021-07-15 23:15:29'),
(2, 'for sale', 3, 'MidAge', NULL, 306, 'jatheesan', 'SW10', '9UH', 'Main Street', 'Sub Street', 'Fulham Road', 'London', 'London', 'Main Street, Fulham Road', 'SW10 9UH', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Independent', 'Partial', 0, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"No condition\"]', NULL, 3, 2, 1, 1, 2, '[\"Driveway\"]', '[\"Communal Garden\"]', '783.5', '999.0', 'sq m', 125000, 1, NULL, NULL, 1, 20000, 30000, 1, '2021-06-27', '2021-06-28', NULL, 'Open-plan kitchen/living area with fully integrated appliances\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"\\u00a3125,000 for 25% share. Full Market Value \\u00a3500,000.\",\"Private balcony\",\"Double sized bedrooms\",\"Limited incentive of 6 months\' rent-free worth \\u00a33,750 available\",\"Open-plan kitchen\\/living area with fully integrated appliances\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:27:22', '2021-07-14 01:25:21'),
(3, 'for let', 7, 'Pre', '12 month', 409, 'jathees', 'UB6', '0FQ', 'Carnaby Street', 'second Street', NULL, 'Tillermans Court', 'London', 'Tillermans Court', 'Grenan Square, Greenford, UB6 0FQ', 1, 'Require Painting', 'Fully', 'Seperate Entry', 'Central', 'Fully Included', 1, 1, 1, '+448761235478', 'boxroom@gmail.com', NULL, '[\"No Children\'s play\",\"Resident lounge\",\"No Pets\"]', 1, 1, 1, 0, 1, '[\"Allocated\"]', '[\"Terrace\"]', '604.0', '700.0', 'sq ft', 345, 1, 'Weekly', 600, 1, 100, 100, 1, '2021-06-25', '2021-06-28', NULL, 'Greenford Quay is an exciting new waterfront neighbourhood in West London, the largest purpose-designed for renters\' development in the UK, directly managed by Greystar.\r\n\r\nRent a brand new apartment in this pet friendly development, with 24/7 on site management and direct access to 100 hectares of historic woodland.\r\n\r\nResidents benefit from a private gym, rooftop terraces, therapy rooms, cinema rooms and residents lounge.\r\n\r\nPet friendly apartments available (at an additional £50 per calendar month - Dog. £35 per calendar month - Cat)\r\n\r\nParking available subject to additional cost by separate negotiation, subject to availability at an additional £125 per calendar month.\r\n\r\nStudios, 1, 2 & 3 bedroom apartments available.', '[\"Private residential gym with personal training options\",\"State of the art cinema room\",\"On-site Concierge and Management team\",\"Pet friendly; price available upon request.\",\"Council Tax Band = C\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:30:58', '2021-07-14 01:25:45'),
(4, 'for sale', 5, 'Post', NULL, 505, 'jonh', 'W12', 'E22', 'Main Street', 'Abbey Wood', 'Abbey Wood', 'London', 'London', 'Abbey Wood, Landon', 'W12 E22', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Central', NULL, 1, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"Balcony or Terrace to all apartments\",\"Transport Links include on-site Crossrail station\",\"Limited incentive of 6 months\' rent-free worth from \\u00a33,750 available\"]', NULL, 2, 1, 1, 0, 1, '[\"Driveway\"]', '[\"Back Garden\",\"Front Garden\"]', '775.0', '1140.9', 'sq ft', 133750, 1, NULL, NULL, 0, 10000, 10000, 1, '2021-06-27', '2021-06-28', NULL, 'The apartments at Royal Arsenal boast high specification throughout and are ready to move into straight away. All homes have a private balcony or a terrace.\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"20 minutes from Canary Wharf\",\"5 minutes from London City Airport\",\"Thames path cycle and walk route - less than 5 minute walk\",\"Artisan patisserie and caf\\u00e9 on your doorstep\",\"Close walk to high street\",\"Balcony or terrace to all apartments\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:25:04', '2021-07-14 01:26:28'),
(5, 'for shared', 6, 'MidAge', NULL, 306, 'jatheesan', 'SW10', '9UH', 'Main Street', 'Sub Street', 'Fulham Road', 'London', 'London', 'Main Street, Fulham Road', 'SW10 9UH', 1, 'Fully Decorated', 'Partial', 'Seperate Entry', 'Independent', 'Fully Included', 0, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"No condition\"]', NULL, 3, 2, 2, 2, 2, '[\"Driveway\"]', '[\"Communal Garden\"]', '783.5', '999.0', 'sq m', 14500, 1, 'Annual', NULL, 1, 20000, 30000, 1, '2021-06-27', '2021-06-28', NULL, 'Open-plan kitchen/living area with fully integrated appliances\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"\\u00a3125,000 for 25% share. Full Market Value \\u00a3500,000.\",\"Private balcony\",\"Double sized bedrooms\",\"Limited incentive of 6 months\' rent-free worth \\u00a33,750 available\",\"Open-plan kitchen\\/living area with fully integrated appliances\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:27:22', '2021-07-15 23:40:39'),
(6, 'for let', 7, 'Pre', '12 month', 409, 'jathees', 'UB6', '0FQ', 'Carnaby Street', 'second Street', NULL, 'Tillermans Court', 'London', 'Tillermans Court', 'Grenan Square, Greenford, UB6 0FQ', 1, 'Require Painting', 'Fully', 'Seperate Entry', 'Central', 'Fully Included', 1, 1, 1, '+448761235478', 'boxroom@gmail.com', NULL, '[\"No Children\'s play\",\"Resident lounge\",\"No Pets\"]', 1, 1, 1, 0, 1, '[\"Allocated\"]', '[\"Terrace\"]', '604.0', '700.0', 'sq ft', 200, 1, 'Weekly', 600, 1, 100, 100, 1, '2021-06-25', '2021-06-28', NULL, 'Greenford Quay is an exciting new waterfront neighbourhood in West London, the largest purpose-designed for renters\' development in the UK, directly managed by Greystar.\r\n\r\nRent a brand new apartment in this pet friendly development, with 24/7 on site management and direct access to 100 hectares of historic woodland.\r\n\r\nResidents benefit from a private gym, rooftop terraces, therapy rooms, cinema rooms and residents lounge.\r\n\r\nPet friendly apartments available (at an additional £50 per calendar month - Dog. £35 per calendar month - Cat)\r\n\r\nParking available subject to additional cost by separate negotiation, subject to availability at an additional £125 per calendar month.\r\n\r\nStudios, 1, 2 & 3 bedroom apartments available.', '[\"Private residential gym with personal training options\",\"State of the art cinema room\",\"On-site Concierge and Management team\",\"Pet friendly; price available upon request.\",\"Council Tax Band = C\"]', 1, NULL, 1, 1, 0, 1, '2021-06-28 07:30:58', '2021-07-15 23:21:57'),
(7, 'for shared', 5, 'Pre', NULL, 505, 'jonh', 'W12', 'E22', 'Main Street', 'Abbey Wood', 'Abbey Wood', 'London', 'London', 'Abbey Wood, Landon', 'W12 E22', 1, 'Fully Decorated', 'Partial', 'Seperate Entry', 'Independent', NULL, 1, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"Balcony or Terrace to all apartments\",\"Transport Links include on-site Crossrail station\",\"Limited incentive of 6 months\' rent-free worth from \\u00a33,750 available\"]', NULL, 2, 1, 1, 0, 1, '[\"Driveway\"]', '[\"Back Garden\",\"Front Garden\"]', '775.0', '1140.9', 'sq ft', 15000, 1, 'Annual', NULL, 0, 10000, 10000, 1, '2021-06-27', '2021-06-28', NULL, 'The apartments at Royal Arsenal boast high specification throughout and are ready to move into straight away. All homes have a private balcony or a terrace.\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"20 minutes from Canary Wharf\",\"5 minutes from London City Airport\",\"Thames path cycle and walk route - less than 5 minute walk\",\"Artisan patisserie and caf\\u00e9 on your doorstep\",\"Close walk to high street\",\"Balcony or terrace to all apartments\"]', 1, NULL, 1, 1, 0, 1, '2021-06-28 07:25:04', '2021-07-15 23:22:19'),
(8, 'for sale', 3, 'MidAge', NULL, 306, 'jatheesan', 'SW10', '9UH', 'Main Street', 'Sub Street', 'Fulham Road', 'London', 'London', 'Main Street, Fulham Road', 'SW10 9UH', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Independent', 'Partial', 0, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"No condition\"]', NULL, 3, 2, 1, 1, 2, '[\"Driveway\"]', '[\"Communal Garden\"]', '783.5', '999.0', 'sq m', 125000, 1, NULL, NULL, 1, 20000, 30000, 1, '2021-06-27', '2021-06-28', NULL, 'Open-plan kitchen/living area with fully integrated appliances\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"\\u00a3125,000 for 25% share. Full Market Value \\u00a3500,000.\",\"Private balcony\",\"Double sized bedrooms\",\"Limited incentive of 6 months\' rent-free worth \\u00a33,750 available\",\"Open-plan kitchen\\/living area with fully integrated appliances\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:27:22', '2021-07-14 01:28:10'),
(9, 'for let', 7, 'Pre', '12 month', 409, 'jathees', 'UB6', '0FQ', 'Carnaby Street', 'second Street', NULL, 'Tillermans Court', 'London', 'Tillermans Court', 'Grenan Square, Greenford, UB6 0FQ', 1, 'Require Painting', 'Fully', 'Seperate Entry', 'Central', 'Fully Included', 1, 1, 1, '+448761235478', 'boxroom@gmail.com', NULL, '[\"No Children\'s play\",\"Resident lounge\",\"No Pets\"]', 1, 1, 1, 0, 1, '[\"Allocated\"]', '[\"Terrace\"]', '604.0', '700.0', 'sq ft', 500, 1, 'Monthly', 600, 1, 100, 100, 1, '2021-06-25', '2021-06-28', NULL, 'Greenford Quay is an exciting new waterfront neighbourhood in West London, the largest purpose-designed for renters\' development in the UK, directly managed by Greystar.\r\n\r\nRent a brand new apartment in this pet friendly development, with 24/7 on site management and direct access to 100 hectares of historic woodland.\r\n\r\nResidents benefit from a private gym, rooftop terraces, therapy rooms, cinema rooms and residents lounge.\r\n\r\nPet friendly apartments available (at an additional £50 per calendar month - Dog. £35 per calendar month - Cat)\r\n\r\nParking available subject to additional cost by separate negotiation, subject to availability at an additional £125 per calendar month.\r\n\r\nStudios, 1, 2 & 3 bedroom apartments available.', '[\"Private residential gym with personal training options\",\"State of the art cinema room\",\"On-site Concierge and Management team\",\"Pet friendly; price available upon request.\",\"Council Tax Band = C\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:30:58', '2021-07-14 01:29:05'),
(10, 'for sale', 5, 'Post', NULL, 505, 'jonh', 'W12', 'E22', 'Main Street', 'Abbey Wood', 'Abbey Wood', 'London', 'London', 'Abbey Wood, Landon', 'W12 E22', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Central', NULL, 1, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"Balcony or Terrace to all apartments\",\"Transport Links include on-site Crossrail station\",\"Limited incentive of 6 months\' rent-free worth from \\u00a33,750 available\"]', NULL, 2, 1, 1, 0, 1, '[\"Driveway\"]', '[\"Back Garden\",\"Front Garden\"]', '775.0', '1140.9', 'sq ft', 133750, 1, NULL, NULL, 0, 10000, 10000, 1, '2021-06-27', '2021-06-28', NULL, 'The apartments at Royal Arsenal boast high specification throughout and are ready to move into straight away. All homes have a private balcony or a terrace.\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"20 minutes from Canary Wharf\",\"5 minutes from London City Airport\",\"Thames path cycle and walk route - less than 5 minute walk\",\"Artisan patisserie and caf\\u00e9 on your doorstep\",\"Close walk to high street\",\"Balcony or terrace to all apartments\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:25:04', '2021-07-14 01:29:17'),
(11, 'for sale', 3, 'MidAge', NULL, 306, 'jatheesan', 'SW10', '9UH', 'Main Street', 'Sub Street', 'Fulham Road', 'London', 'London', 'Main Street, Fulham Road', 'SW10 9UH', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Independent', 'Partial', 0, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"No condition\"]', NULL, 3, 2, 1, 1, 2, '[\"Driveway\"]', '[\"Communal Garden\"]', '783.5', '999.0', 'sq m', 125000, 1, NULL, NULL, 1, 20000, 30000, 1, '2021-06-27', '2021-06-28', NULL, 'Open-plan kitchen/living area with fully integrated appliances\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"\\u00a3125,000 for 25% share. Full Market Value \\u00a3500,000.\",\"Private balcony\",\"Double sized bedrooms\",\"Limited incentive of 6 months\' rent-free worth \\u00a33,750 available\",\"Open-plan kitchen\\/living area with fully integrated appliances\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:27:22', '2021-07-14 01:29:31'),
(12, 'for let', 7, 'Pre', '12 month', 409, 'jathees', 'UB6', '0FQ', 'Carnaby Street', 'second Street', NULL, 'Tillermans Court', 'London', 'Tillermans Court', 'Grenan Square, Greenford, UB6 0FQ', 1, 'Require Painting', 'Fully', 'Seperate Entry', 'Central', 'Fully Included', 1, 1, 1, '+448761235478', 'boxroom@gmail.com', NULL, '[\"No Children\'s play\",\"Resident lounge\",\"No Pets\"]', 1, 1, 1, 0, 1, '[\"Allocated\"]', '[\"Terrace\"]', '604.0', '700.0', 'sq ft', 5000, 1, 'Quarter', 600, 1, 100, 100, 1, '2021-06-25', '2021-06-28', NULL, 'Greenford Quay is an exciting new waterfront neighbourhood in West London, the largest purpose-designed for renters\' development in the UK, directly managed by Greystar.\r\n\r\nRent a brand new apartment in this pet friendly development, with 24/7 on site management and direct access to 100 hectares of historic woodland.\r\n\r\nResidents benefit from a private gym, rooftop terraces, therapy rooms, cinema rooms and residents lounge.\r\n\r\nPet friendly apartments available (at an additional £50 per calendar month - Dog. £35 per calendar month - Cat)\r\n\r\nParking available subject to additional cost by separate negotiation, subject to availability at an additional £125 per calendar month.\r\n\r\nStudios, 1, 2 & 3 bedroom apartments available.', '[\"Private residential gym with personal training options\",\"State of the art cinema room\",\"On-site Concierge and Management team\",\"Pet friendly; price available upon request.\",\"Council Tax Band = C\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:30:58', '2021-07-14 01:29:59'),
(13, 'for sale', 5, 'Post', NULL, 505, 'jonh', 'W12', 'E22', 'Main Street', 'Abbey Wood', 'Abbey Wood', 'London', 'London', 'Abbey Wood, Landon', 'W12 E22', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Central', NULL, 1, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"Balcony or Terrace to all apartments\",\"Transport Links include on-site Crossrail station\",\"Limited incentive of 6 months\' rent-free worth from \\u00a33,750 available\"]', NULL, 2, 1, 1, 0, 1, '[\"Driveway\"]', '[\"Back Garden\",\"Front Garden\"]', '775.0', '1140.9', 'sq ft', 133750, 1, NULL, NULL, 0, 10000, 10000, 1, '2021-06-27', '2021-06-28', NULL, 'The apartments at Royal Arsenal boast high specification throughout and are ready to move into straight away. All homes have a private balcony or a terrace.\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"20 minutes from Canary Wharf\",\"5 minutes from London City Airport\",\"Thames path cycle and walk route - less than 5 minute walk\",\"Artisan patisserie and caf\\u00e9 on your doorstep\",\"Close walk to high street\",\"Balcony or terrace to all apartments\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:25:04', '2021-07-14 01:30:12'),
(14, 'for sale', 3, 'MidAge', NULL, 306, 'jatheesan', 'SW10', '9UH', 'Main Street', 'Sub Street', 'Fulham Road', 'London', 'London', 'Main Street, Fulham Road', 'SW10 9UH', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Independent', 'Partial', 0, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"No condition\"]', NULL, 3, 2, 1, 1, 2, '[\"Driveway\"]', '[\"Communal Garden\"]', '783.5', '999.0', 'sq m', 125000, 1, NULL, NULL, 1, 20000, 30000, 1, '2021-06-27', '2021-06-28', NULL, 'Open-plan kitchen/living area with fully integrated appliances\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"\\u00a3125,000 for 25% share. Full Market Value \\u00a3500,000.\",\"Private balcony\",\"Double sized bedrooms\",\"Limited incentive of 6 months\' rent-free worth \\u00a33,750 available\",\"Open-plan kitchen\\/living area with fully integrated appliances\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:27:22', '2021-07-14 01:31:00'),
(15, 'for let', 7, 'Pre', '12 month', 409, 'jathees', 'UB6', '0FQ', 'Carnaby Street', 'second Street', NULL, 'Tillermans Court', 'London', 'Tillermans Court', 'Grenan Square, Greenford, UB6 0FQ', 1, 'Require Painting', 'Fully', 'Seperate Entry', 'Central', 'Fully Included', 1, 1, 1, '+448761235478', 'boxroom@gmail.com', NULL, '[\"No Children\'s play\",\"Resident lounge\",\"No Pets\"]', 1, 1, 1, 0, 1, '[\"Allocated\"]', '[\"Terrace\"]', '604.0', '700.0', 'sq ft', 1000, 1, 'Monthly', 600, 1, 100, 100, 1, '2021-06-25', '2021-06-28', NULL, 'Greenford Quay is an exciting new waterfront neighbourhood in West London, the largest purpose-designed for renters\' development in the UK, directly managed by Greystar.\r\n\r\nRent a brand new apartment in this pet friendly development, with 24/7 on site management and direct access to 100 hectares of historic woodland.\r\n\r\nResidents benefit from a private gym, rooftop terraces, therapy rooms, cinema rooms and residents lounge.\r\n\r\nPet friendly apartments available (at an additional £50 per calendar month - Dog. £35 per calendar month - Cat)\r\n\r\nParking available subject to additional cost by separate negotiation, subject to availability at an additional £125 per calendar month.\r\n\r\nStudios, 1, 2 & 3 bedroom apartments available.', '[\"Private residential gym with personal training options\",\"State of the art cinema room\",\"On-site Concierge and Management team\",\"Pet friendly; price available upon request.\",\"Council Tax Band = C\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:30:58', '2021-07-14 01:31:26'),
(16, 'for shared', 5, 'Post', NULL, 505, 'jonh', 'W12', 'E22', 'Main Street', 'Abbey Wood', 'Abbey Wood', 'London', 'London', 'Abbey Wood, Landon', 'W12 E22', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Central', NULL, 1, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"Balcony or Terrace to all apartments\",\"Transport Links include on-site Crossrail station\",\"Limited incentive of 6 months\' rent-free worth from \\u00a33,750 available\"]', NULL, 2, 1, 1, 0, 1, '[\"Driveway\"]', '[\"Back Garden\",\"Front Garden\"]', '775.0', '1140.9', 'sq ft', 150, 1, 'Weekly', NULL, 0, 10000, 10000, 1, '2021-06-27', '2021-06-28', NULL, 'The apartments at Royal Arsenal boast high specification throughout and are ready to move into straight away. All homes have a private balcony or a terrace.\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"20 minutes from Canary Wharf\",\"5 minutes from London City Airport\",\"Thames path cycle and walk route - less than 5 minute walk\",\"Artisan patisserie and caf\\u00e9 on your doorstep\",\"Close walk to high street\",\"Balcony or terrace to all apartments\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:25:04', '2021-07-14 01:31:45'),
(17, 'for sale', 3, 'MidAge', NULL, 306, 'jatheesan', 'SW10', '9UH', 'Main Street', 'Sub Street', 'Fulham Road', 'London', 'London', 'Main Street, Fulham Road', 'SW10 9UH', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Independent', 'Partial', 0, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"No condition\"]', NULL, 3, 2, 1, 1, 2, '[\"Driveway\"]', '[\"Communal Garden\"]', '783.5', '999.0', 'sq m', 5000000, 1, NULL, NULL, 1, 20000, 30000, 1, '2021-06-27', '2021-06-28', NULL, 'Open-plan kitchen/living area with fully integrated appliances\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"\\u00a3125,000 for 25% share. Full Market Value \\u00a3500,000.\",\"Private balcony\",\"Double sized bedrooms\",\"Limited incentive of 6 months\' rent-free worth \\u00a33,750 available\",\"Open-plan kitchen\\/living area with fully integrated appliances\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:27:22', '2021-07-14 01:32:24'),
(18, 'for let', 7, 'Pre', '12 month', 409, 'jathees', 'UB6', '0FQ', 'Carnaby Street', 'second Street', NULL, 'Tillermans Court', 'London', 'Tillermans Court', 'Grenan Square, Greenford, UB6 0FQ', 1, 'Require Painting', 'Fully', 'Seperate Entry', 'Central', 'Fully Included', 1, 1, 1, '+448761235478', 'boxroom@gmail.com', NULL, '[\"No Children\'s play\",\"Resident lounge\",\"No Pets\"]', 1, 1, 1, 0, 1, '[\"Allocated\"]', '[\"Terrace\"]', '604.0', '700.0', 'sq ft', 10000, 1, 'Annual', 600, 1, 100, 100, 1, '2021-06-25', '2021-06-28', NULL, 'Greenford Quay is an exciting new waterfront neighbourhood in West London, the largest purpose-designed for renters\' development in the UK, directly managed by Greystar.\r\n\r\nRent a brand new apartment in this pet friendly development, with 24/7 on site management and direct access to 100 hectares of historic woodland.\r\n\r\nResidents benefit from a private gym, rooftop terraces, therapy rooms, cinema rooms and residents lounge.\r\n\r\nPet friendly apartments available (at an additional £50 per calendar month - Dog. £35 per calendar month - Cat)\r\n\r\nParking available subject to additional cost by separate negotiation, subject to availability at an additional £125 per calendar month.\r\n\r\nStudios, 1, 2 & 3 bedroom apartments available.', '[\"Private residential gym with personal training options\",\"State of the art cinema room\",\"On-site Concierge and Management team\",\"Pet friendly; price available upon request.\",\"Council Tax Band = C\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:30:58', '2021-07-14 01:32:43'),
(19, 'for shared', 5, 'Post', NULL, 505, 'jonh', 'W12', 'E22', 'Main Street', 'Abbey Wood', 'Abbey Wood', 'London', 'London', 'Abbey Wood, Landon', 'W12 E22', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Central', NULL, 1, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"Balcony or Terrace to all apartments\",\"Transport Links include on-site Crossrail station\",\"Limited incentive of 6 months\' rent-free worth from \\u00a33,750 available\"]', NULL, 2, 1, 1, 0, 1, '[\"Driveway\"]', '[\"Back Garden\",\"Front Garden\"]', '775.0', '1140.9', 'sq ft', 150000, 1, 'Half', NULL, 0, 10000, 10000, 1, '2021-06-27', '2021-06-28', NULL, 'The apartments at Royal Arsenal boast high specification throughout and are ready to move into straight away. All homes have a private balcony or a terrace.\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"20 minutes from Canary Wharf\",\"5 minutes from London City Airport\",\"Thames path cycle and walk route - less than 5 minute walk\",\"Artisan patisserie and caf\\u00e9 on your doorstep\",\"Close walk to high street\",\"Balcony or terrace to all apartments\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:25:04', '2021-07-14 01:33:12'),
(20, 'for sale', 3, 'MidAge', NULL, 306, 'jatheesan', 'SW10', '9UH', 'Main Street', 'Sub Street', 'Fulham Road', 'London', 'London', 'Main Street, Fulham Road', 'SW10 9UH', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Independent', 'Partial', 0, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"No condition\"]', NULL, 3, 2, 1, 1, 2, '[\"Driveway\"]', '[\"Communal Garden\"]', '783.5', '999.0', 'sq m', 1805000, 1, NULL, NULL, 1, 20000, 30000, 1, '2021-06-27', '2021-06-28', NULL, 'Open-plan kitchen/living area with fully integrated appliances\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"\\u00a3125,000 for 25% share. Full Market Value \\u00a3500,000.\",\"Private balcony\",\"Double sized bedrooms\",\"Limited incentive of 6 months\' rent-free worth \\u00a33,750 available\",\"Open-plan kitchen\\/living area with fully integrated appliances\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:27:22', '2021-07-14 01:33:39'),
(21, 'for let', 7, 'Pre', '12 month', 409, 'jathees', 'UB6', '0FQ', 'Carnaby Street', 'second Street', NULL, 'Tillermans Court', 'London', 'Tillermans Court', 'Grenan Square, Greenford, UB6 0FQ', 1, 'Require Painting', 'Fully', 'Seperate Entry', 'Central', 'Fully Included', 1, 1, 1, '+448761235478', 'boxroom@gmail.com', NULL, '[\"No Children\'s play\",\"Resident lounge\",\"No Pets\"]', 1, 1, 1, 0, 1, '[\"Allocated\"]', '[\"Terrace\"]', '604.0', '700.0', 'sq ft', 300, 1, 'Weekly', 600, 1, 100, 100, 1, '2021-06-25', '2021-06-28', NULL, 'Greenford Quay is an exciting new waterfront neighbourhood in West London, the largest purpose-designed for renters\' development in the UK, directly managed by Greystar.\r\n\r\nRent a brand new apartment in this pet friendly development, with 24/7 on site management and direct access to 100 hectares of historic woodland.\r\n\r\nResidents benefit from a private gym, rooftop terraces, therapy rooms, cinema rooms and residents lounge.\r\n\r\nPet friendly apartments available (at an additional £50 per calendar month - Dog. £35 per calendar month - Cat)\r\n\r\nParking available subject to additional cost by separate negotiation, subject to availability at an additional £125 per calendar month.\r\n\r\nStudios, 1, 2 & 3 bedroom apartments available.', '[\"Private residential gym with personal training options\",\"State of the art cinema room\",\"On-site Concierge and Management team\",\"Pet friendly; price available upon request.\",\"Council Tax Band = C\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:30:58', '2021-07-14 01:34:07'),
(22, 'for sale', 5, 'Post', NULL, 505, 'jonh', 'W12', 'E22', 'Main Street', 'Abbey Wood', 'Abbey Wood', 'London', 'London', 'Abbey Wood, Landon', 'W12 E22', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Central', NULL, 1, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"Balcony or Terrace to all apartments\",\"Transport Links include on-site Crossrail station\",\"Limited incentive of 6 months\' rent-free worth from \\u00a33,750 available\"]', NULL, 2, 1, 1, 0, 1, '[\"Driveway\"]', '[\"Back Garden\",\"Front Garden\"]', '775.0', '1140.9', 'sq ft', 2500000, 1, NULL, NULL, 0, 10000, 10000, 1, '2021-06-27', '2021-06-28', NULL, 'The apartments at Royal Arsenal boast high specification throughout and are ready to move into straight away. All homes have a private balcony or a terrace.\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"20 minutes from Canary Wharf\",\"5 minutes from London City Airport\",\"Thames path cycle and walk route - less than 5 minute walk\",\"Artisan patisserie and caf\\u00e9 on your doorstep\",\"Close walk to high street\",\"Balcony or terrace to all apartments\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:25:04', '2021-07-14 01:34:37'),
(23, 'for sale', 3, 'MidAge', NULL, 306, 'jatheesan', 'SW10', '9UH', 'Main Street', 'Sub Street', 'Fulham Road', 'London', 'London', 'Main Street, Fulham Road', 'SW10 9UH', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Independent', 'Partial', 0, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"No condition\"]', NULL, 3, 2, 1, 1, 2, '[\"Driveway\"]', '[\"Communal Garden\"]', '783.5', '999.0', 'sq m', 1250000, 1, NULL, NULL, 1, 20000, 30000, 1, '2021-06-27', '2021-06-28', NULL, 'Open-plan kitchen/living area with fully integrated appliances\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"\\u00a3125,000 for 25% share. Full Market Value \\u00a3500,000.\",\"Private balcony\",\"Double sized bedrooms\",\"Limited incentive of 6 months\' rent-free worth \\u00a33,750 available\",\"Open-plan kitchen\\/living area with fully integrated appliances\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:27:22', '2021-07-14 01:34:54'),
(24, 'for let', 7, 'Pre', '12 month', 409, 'jathees', 'UB6', '0FQ', 'Carnaby Street', 'second Street', NULL, 'Tillermans Court', 'London', 'Tillermans Court', 'Grenan Square, Greenford, UB6 0FQ', 1, 'Require Painting', 'Fully', 'Seperate Entry', 'Central', 'Fully Included', 1, 1, 1, '+448761235478', 'boxroom@gmail.com', NULL, '[\"No Children\'s play\",\"Resident lounge\",\"No Pets\"]', 1, 1, 1, 0, 1, '[\"Allocated\"]', '[\"Terrace\"]', '604.0', '700.0', 'sq ft', 800, 1, 'Monthly', 600, 1, 100, 100, 1, '2021-06-25', '2021-06-28', NULL, 'Greenford Quay is an exciting new waterfront neighbourhood in West London, the largest purpose-designed for renters\' development in the UK, directly managed by Greystar.\r\n\r\nRent a brand new apartment in this pet friendly development, with 24/7 on site management and direct access to 100 hectares of historic woodland.\r\n\r\nResidents benefit from a private gym, rooftop terraces, therapy rooms, cinema rooms and residents lounge.\r\n\r\nPet friendly apartments available (at an additional £50 per calendar month - Dog. £35 per calendar month - Cat)\r\n\r\nParking available subject to additional cost by separate negotiation, subject to availability at an additional £125 per calendar month.\r\n\r\nStudios, 1, 2 & 3 bedroom apartments available.', '[\"Private residential gym with personal training options\",\"State of the art cinema room\",\"On-site Concierge and Management team\",\"Pet friendly; price available upon request.\",\"Council Tax Band = C\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:30:58', '2021-07-14 01:35:11'),
(25, 'for shared', 5, 'Pre', NULL, 505, 'jonh', 'W12', 'E22', 'Main Street', 'Abbey Wood', 'Abbey Wood', 'London', 'London', 'Abbey Wood, Landon', 'W12 E22', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Central', NULL, 1, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"Balcony or Terrace to all apartments\",\"Transport Links include on-site Crossrail station\",\"Limited incentive of 6 months\' rent-free worth from \\u00a33,750 available\"]', NULL, 2, 1, 1, 0, 1, '[\"Driveway\"]', '[\"Back Garden\",\"Front Garden\"]', '775.0', '1140.9', 'sq ft', 3500000, 1, NULL, NULL, 0, 10000, 10000, 1, '2021-06-27', '2021-06-28', NULL, 'The apartments at Royal Arsenal boast high specification throughout and are ready to move into straight away. All homes have a private balcony or a terrace.\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"20 minutes from Canary Wharf\",\"5 minutes from London City Airport\",\"Thames path cycle and walk route - less than 5 minute walk\",\"Artisan patisserie and caf\\u00e9 on your doorstep\",\"Close walk to high street\",\"Balcony or terrace to all apartments\"]', 1, NULL, 1, 1, 0, 0, '2021-06-28 07:25:04', '2021-07-14 01:35:31'),
(26, 'for sale', 3, 'MidAge', NULL, 306, 'jatheesan', 'SW10', '9UH', 'Main Street', 'Sub Street', 'Fulham Road', 'London', 'London', 'Main Street, Fulham Road', 'SW10 9UH', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Independent', 'Partial', 0, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"No condition\"]', NULL, 3, 2, 1, 1, 2, '[\"Driveway\"]', '[\"Communal Garden\"]', '783.5', '999.0', 'sq m', 1640000, 1, NULL, NULL, 1, 20000, 30000, 1, '2021-06-27', '2021-06-28', NULL, 'Open-plan kitchen/living area with fully integrated appliances\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"\\u00a3125,000 for 25% share. Full Market Value \\u00a3500,000.\",\"Private balcony\",\"Double sized bedrooms\",\"Limited incentive of 6 months\' rent-free worth \\u00a33,750 available\",\"Open-plan kitchen\\/living area with fully integrated appliances\"]', 1, NULL, 0, 0, 0, 0, '2021-06-28 07:27:22', '2021-07-14 01:35:50'),
(27, 'for let', 7, 'Pre', '12 month', 409, 'jathees', 'UB6', '0FQ', 'Carnaby Street', 'second Street', NULL, 'Tillermans Court', 'London', 'Tillermans Court', 'Grenan Square, Greenford, UB6 0FQ', 1, 'Require Painting', 'Fully', 'Seperate Entry', 'Central', 'Fully Included', 1, 1, 1, '+448761235478', 'boxroom@gmail.com', NULL, '[\"No Children\'s play\",\"Resident lounge\",\"No Pets\"]', 1, 1, 1, 0, 1, '[\"Allocated\"]', '[\"Terrace\"]', '604.0', '700.0', 'sq ft', 1720, 1, 'Monthly', 600, 1, 100, 100, 1, '2021-06-25', '2021-06-28', NULL, 'Greenford Quay is an exciting new waterfront neighbourhood in West London, the largest purpose-designed for renters\' development in the UK, directly managed by Greystar.\r\n\r\nRent a brand new apartment in this pet friendly development, with 24/7 on site management and direct access to 100 hectares of historic woodland.\r\n\r\nResidents benefit from a private gym, rooftop terraces, therapy rooms, cinema rooms and residents lounge.\r\n\r\nPet friendly apartments available (at an additional £50 per calendar month - Dog. £35 per calendar month - Cat)\r\n\r\nParking available subject to additional cost by separate negotiation, subject to availability at an additional £125 per calendar month.\r\n\r\nStudios, 1, 2 & 3 bedroom apartments available.', '[\"Private residential gym with personal training options\",\"State of the art cinema room\",\"On-site Concierge and Management team\",\"Pet friendly; price available upon request.\",\"Council Tax Band = C\"]', 1, NULL, 0, 1, 0, 0, '2021-06-28 07:30:58', '2021-07-14 01:36:15'),
(28, 'for shared', 5, 'Post', NULL, 505, 'jonh', 'W12', 'E22', 'Main Street', 'Abbey Wood', 'Abbey Wood', 'London', 'London', 'Abbey Wood, Landon', 'W12 E22', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Central', NULL, 1, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"Balcony or Terrace to all apartments\",\"Transport Links include on-site Crossrail station\",\"Limited incentive of 6 months\' rent-free worth from \\u00a33,750 available\"]', NULL, 2, 1, 1, 0, 1, '[\"Driveway\"]', '[\"Back Garden\",\"Front Garden\"]', '775.0', '1140.9', 'sq ft', 649, 1, 'Monthly', NULL, 0, 10000, 10000, 1, '2021-06-27', '2021-06-28', NULL, 'The apartments at Royal Arsenal boast high specification throughout and are ready to move into straight away. All homes have a private balcony or a terrace.\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"20 minutes from Canary Wharf\",\"5 minutes from London City Airport\",\"Thames path cycle and walk route - less than 5 minute walk\",\"Artisan patisserie and caf\\u00e9 on your doorstep\",\"Close walk to high street\",\"Balcony or terrace to all apartments\"]', 1, NULL, 1, 0, 0, 0, '2021-06-28 07:25:04', '2021-07-14 01:36:50'),
(29, 'for sale', 3, 'MidAge', NULL, 306, 'jatheesan', 'SW10', '9UH', 'Main Street', 'Sub Street', 'Fulham Road', 'London', 'London', 'Main Street, Fulham Road', 'SW10 9UH', 1, 'Require Painting', 'Partial', 'Shared Entry', 'Independent', 'Partial', 0, 1, 1, '+448761235478', 'boxroom@gmail.com', '[\"No condition\"]', NULL, 3, 2, 1, 1, 2, '[\"Driveway\"]', '[\"Communal Garden\"]', '783.5', '999.0', 'sq m', 695000, 1, NULL, NULL, 1, 20000, 30000, 1, '2021-06-27', '2021-06-28', NULL, 'Open-plan kitchen/living area with fully integrated appliances\r\n\r\nRoyal Arsenal Riverside is home to the new cultural quarter\', giving it a creative and vibrant feel. Exciting developments in the area will include a 450 seat theatre and a performance courtyard. Within the development there is a wide array of restaurants, bars and pubs suited for all dining preferences, plus numerous opportunities to enjoy the great outdoors.\r\nIn addition to this there are several schools located in Royal Arsenal Riverside that provide high levels of education. St Peters Primary School achieved an outstanding report from Ofsted. There is also the Millennium Performing Arts College and the University of Greenwich within close distance.', '[\"\\u00a3125,000 for 25% share. Full Market Value \\u00a3500,000.\",\"Private balcony\",\"Double sized bedrooms\",\"Limited incentive of 6 months\' rent-free worth \\u00a33,750 available\",\"Open-plan kitchen\\/living area with fully integrated appliances\"]', 1, NULL, 0, 0, 0, 0, '2021-06-28 07:27:22', '2021-07-14 01:37:14');
INSERT INTO `properties` (`id`, `catagery`, `type`, `age`, `minimum_term`, `door_no`, `door_name`, `first_postcode`, `second_postcode`, `street_name`, `second_line_of_address`, `post_town`, `post_city`, `post_country`, `display_address_line1`, `display_address_line2`, `display_address`, `condition_of_property`, `condition_furnished`, `access_type`, `heating_type`, `bill`, `is_burglar_alarm`, `is_cctv`, `is_swimmingpool`, `enquiry_contact`, `enquiry_email`, `sale_condition`, `rent_condition`, `bedrooms`, `bathrooms`, `halls`, `reseptions`, `floors`, `parking`, `garden`, `internal_area`, `land_area`, `area_unit`, `price`, `price_flag`, `rent_frequency`, `deposite`, `deposite_flag`, `admin_fee_max`, `admin_fee_exe`, `admin_fee_flag`, `date_intake`, `date_published`, `date_revoked`, `property_details`, `further_details`, `property_details_display`, `owner`, `is_complete`, `is_publish`, `is_sold`, `is_let`, `created_at`, `updated_at`) VALUES
(30, 'for let', 7, 'Pre', '12 month', 409, 'jathees', 'UB6', '0FQ', 'Carnaby Street', 'second Street', NULL, 'Tillermans Court', 'London', 'Tillermans Court', 'Grenan Square, Greenford, UB6 0FQ', 1, 'Require Painting', 'Fully', 'Seperate Entry', 'Central', 'Fully Included', 1, 1, 1, '+448761235478', 'boxroom@gmail.com', NULL, '[\"No Children\'s play\",\"Resident lounge\",\"No Pets\"]', 1, 1, 1, 0, 1, '[\"Allocated\"]', '[\"Terrace\"]', '604.0', '700.0', 'sq ft', 1250, 1, 'Quarter', 600, 1, 100, 100, 1, '2021-06-25', '2021-06-28', NULL, 'Greenford Quay is an exciting new waterfront neighbourhood in West London, the largest purpose-designed for renters\' development in the UK, directly managed by Greystar.\r\n\r\nRent a brand new apartment in this pet friendly development, with 24/7 on site management and direct access to 100 hectares of historic woodland.\r\n\r\nResidents benefit from a private gym, rooftop terraces, therapy rooms, cinema rooms and residents lounge.\r\n\r\nPet friendly apartments available (at an additional £50 per calendar month - Dog. £35 per calendar month - Cat)\r\n\r\nParking available subject to additional cost by separate negotiation, subject to availability at an additional £125 per calendar month.\r\n\r\nStudios, 1, 2 & 3 bedroom apartments available.', '[\"Private residential gym with personal training options\",\"State of the art cinema room\",\"On-site Concierge and Management team\",\"Pet friendly; price available upon request.\",\"Council Tax Band = C\"]', 1, NULL, 1, 0, 0, 0, '2021-06-28 07:30:58', '2021-07-14 01:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_main` tinyint(1) DEFAULT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `image`, `is_main`, `property_id`, `room_id`, `created_at`, `updated_at`) VALUES
(2, 'images/properties/1702103432717133.jpg', 0, 1, NULL, NULL, '2021-06-10 23:08:38'),
(3, 'images/properties/1702103432854965.jpg', 0, 1, NULL, NULL, '2021-06-10 23:08:38'),
(4, 'images/properties/1702103432895753.jpg', 0, 1, NULL, NULL, '2021-06-10 23:08:38'),
(5, 'images/properties/1702103432954824.jpg', 0, 1, NULL, NULL, '2021-06-10 23:08:38'),
(6, 'images/properties/1702103432994151.jpg', 0, 1, NULL, NULL, '2021-06-10 23:08:38'),
(7, 'images/properties/1702103433143491.jpg', 0, 1, NULL, NULL, '2021-06-10 23:08:38'),
(8, 'images/properties/1702103433183889.jpg', 0, 1, NULL, NULL, '2021-06-10 23:08:38'),
(9, 'images/properties/1702103433226854.jpg', 1, 1, NULL, NULL, '2021-06-10 23:08:38'),
(10, 'images/properties/1702103433266288.jpg', 0, 1, NULL, NULL, '2021-06-10 23:08:38'),
(11, 'images/properties/1702103433387144.jpg', 0, 1, NULL, NULL, '2021-06-10 23:08:38'),
(12, 'images/properties/1702103433428246.jpg', 0, 1, NULL, NULL, '2021-06-10 23:08:38'),
(14, 'images/properties/1702106083180547.jpg', 0, 2, NULL, NULL, '2021-06-09 10:37:56'),
(15, 'images/properties/1702106083348844.jpg', 0, 2, NULL, NULL, '2021-06-09 10:37:56'),
(16, 'images/properties/1702106083389054.png', 0, 2, NULL, NULL, '2021-06-09 10:37:56'),
(17, 'images/properties/1702106083603730.jpg', 0, 2, NULL, NULL, '2021-06-09 10:37:56'),
(18, 'images/properties/1702106083643600.jpg', 0, 2, NULL, NULL, '2021-06-09 10:37:56'),
(19, 'images/properties/1702106083729708.jpg', 0, 2, NULL, NULL, '2021-06-09 10:37:56'),
(20, 'images/properties/1702106084385308.jpg', 0, 2, NULL, NULL, '2021-06-09 10:37:56'),
(21, 'images/properties/1702106084425119.jpg', 0, 2, NULL, NULL, '2021-06-09 10:37:56'),
(22, 'images/properties/1702106084499923.jpg', 0, 2, NULL, NULL, '2021-06-09 10:37:56'),
(23, 'images/properties/1702106084540295.jpg', 1, 2, NULL, NULL, '2021-06-09 10:37:56'),
(24, 'images/properties/1702106084581203.jpg', 0, 2, NULL, NULL, '2021-06-09 10:37:56'),
(25, 'images/properties/1702106084655334.jpg', 0, 2, NULL, NULL, '2021-06-09 10:37:56'),
(26, 'images/properties/1702106892930294.jpg', 0, 3, NULL, NULL, '2021-06-09 10:50:33'),
(27, 'images/properties/1702106893016986.jpg', 0, 3, NULL, NULL, '2021-06-09 10:50:33'),
(28, 'images/properties/1702106893055864.jpg', 0, 3, NULL, NULL, '2021-06-09 10:50:33'),
(29, 'images/properties/1702106893164647.jpg', 0, 3, NULL, NULL, '2021-06-09 10:50:33'),
(30, 'images/properties/1702106893224358.jpg', 0, 3, NULL, NULL, '2021-06-09 10:50:33'),
(31, 'images/properties/1702106893456656.jpg', 1, 3, NULL, NULL, '2021-06-09 10:50:33'),
(32, 'images/properties/1702106893498024.jpg', 0, 3, NULL, NULL, '2021-06-09 10:50:33'),
(33, 'images/properties/1702106893587866.jpg', 0, 3, NULL, NULL, '2021-06-09 10:50:33'),
(34, 'images/properties/1702107685241766.jpg', 0, 4, NULL, NULL, '2021-06-09 11:03:08'),
(35, 'images/properties/1702107685304823.jpg', 0, 4, NULL, NULL, '2021-06-09 11:03:08'),
(36, 'images/properties/1702107685343988.jpg', 0, 4, NULL, NULL, '2021-06-09 11:03:08'),
(37, 'images/properties/1702107685383952.jpg', 0, 4, NULL, NULL, '2021-06-09 11:03:08'),
(38, 'images/properties/1702107685427421.jpg', 1, 4, NULL, NULL, '2021-06-09 11:03:08'),
(39, 'images/properties/1702107685468851.jpg', 0, 4, NULL, NULL, '2021-06-09 11:03:08'),
(40, 'images/properties/1702107685510379.jpg', 0, 4, NULL, NULL, '2021-06-09 11:03:08'),
(41, 'images/properties/1702115301668504.jpg', 0, 5, NULL, NULL, '2021-06-09 13:04:10'),
(42, 'images/properties/1702115301757486.jpg', 0, 5, NULL, NULL, '2021-06-09 13:04:10'),
(43, 'images/properties/1702115301843677.jpg', 1, 5, NULL, NULL, '2021-06-09 13:04:10'),
(44, 'images/properties/1702115302003101.jpg', 0, 5, NULL, NULL, '2021-06-09 13:04:10'),
(45, 'images/properties/1702115302042181.jpg', 0, 5, NULL, NULL, '2021-06-09 13:04:10'),
(46, 'images/properties/1702115302081194.jpg', 0, 5, NULL, NULL, '2021-06-09 13:04:10'),
(47, 'images/properties/1702115302174338.jpg', 0, 5, NULL, NULL, '2021-06-09 13:04:10'),
(48, 'images/properties/1702116292672523.jpg', 0, 6, NULL, NULL, '2021-06-09 13:20:04'),
(49, 'images/properties/1702116292730445.jpg', 1, 6, NULL, NULL, '2021-06-09 13:20:04'),
(50, 'images/properties/1702116292868739.jpeg', 0, 6, NULL, NULL, '2021-06-09 13:20:04'),
(51, 'images/properties/1702116293018160.jpg', 0, 6, NULL, NULL, '2021-06-09 13:20:04'),
(52, 'images/properties/1702116293058747.jpg', 0, 6, NULL, NULL, '2021-06-09 13:20:04'),
(53, 'images/properties/1702116293098935.jpg', 0, 6, NULL, NULL, '2021-06-09 13:20:04'),
(55, 'images/properties/1702116293202158.jpg', 0, 6, NULL, NULL, '2021-06-09 13:20:04'),
(56, 'images/properties/1702116851655759.jpg', 0, 7, NULL, NULL, '2021-06-09 13:28:51'),
(57, 'images/properties/1702116851750826.jpg', 0, 7, NULL, NULL, '2021-06-09 13:28:51'),
(58, 'images/properties/1702116851839130.jpg', 0, 7, NULL, NULL, '2021-06-09 13:28:51'),
(59, 'images/properties/1702116851911651.jpg', 1, 7, NULL, NULL, '2021-06-09 13:28:51'),
(60, 'images/properties/1702116852064738.jpg', 0, 7, NULL, NULL, '2021-06-09 13:28:51'),
(61, 'images/properties/1702117628030537.jpg', 0, 8, NULL, NULL, '2021-06-09 13:41:11'),
(62, 'images/properties/1702117628121908.jpg', 1, 8, NULL, NULL, '2021-06-09 13:41:11'),
(63, 'images/properties/1702117628193308.jpg', 0, 8, NULL, NULL, '2021-06-09 13:41:11'),
(64, 'images/properties/1702117628257016.jpg', 0, 8, NULL, NULL, '2021-06-09 13:41:11'),
(65, 'images/properties/1702117628327263.jpg', 0, 8, NULL, NULL, '2021-06-09 13:41:11'),
(66, 'images/properties/1702117628475075.jpg', 0, 8, NULL, NULL, '2021-06-09 13:41:11'),
(67, 'images/properties/1702117628547980.jpg', 0, 8, NULL, NULL, '2021-06-09 13:41:11'),
(68, 'images/properties/1702118325427394.jpg', 0, 9, NULL, NULL, '2021-06-09 13:52:14'),
(69, 'images/properties/1702118325642213.jpg', 0, 9, NULL, NULL, '2021-06-09 13:52:14'),
(70, 'images/properties/1702118325681870.jpg', 0, 9, NULL, NULL, '2021-06-09 13:52:14'),
(71, 'images/properties/1702118325791805.jpg', 0, 9, NULL, NULL, '2021-06-09 13:52:14'),
(72, 'images/properties/1702118325879808.jpg', 0, 9, NULL, NULL, '2021-06-09 13:52:14'),
(73, 'images/properties/1702118326053187.jpg', 0, 9, NULL, NULL, '2021-06-09 13:52:14'),
(74, 'images/properties/1702118326092560.jpg', 0, 9, NULL, NULL, '2021-06-09 13:52:14'),
(75, 'images/properties/1702118326131510.jpg', 1, 9, NULL, NULL, '2021-06-09 13:52:14'),
(76, 'images/properties/1702119381790563.jpg', 0, 10, NULL, NULL, '2021-06-09 14:09:04'),
(77, 'images/properties/1702119381837743.jpg', 1, 10, 27, NULL, '2021-06-09 14:09:04'),
(78, 'images/properties/1702119381943301.jpg', 0, 10, 28, NULL, '2021-06-09 14:09:04'),
(79, 'images/properties/1702119382038509.jpg', 0, 10, 27, NULL, '2021-06-09 14:09:04'),
(80, 'images/properties/1702119382132891.jpg', 0, 10, NULL, NULL, '2021-06-09 14:09:04'),
(81, 'images/properties/1702119382171417.jpg', 0, 10, 29, NULL, '2021-06-09 14:09:04'),
(82, 'images/properties/1702119382210924.jpg', 0, 10, NULL, NULL, '2021-06-09 14:09:04'),
(83, 'images/properties/1702119382257963.jpg', 0, 10, 29, NULL, '2021-06-09 14:09:04'),
(84, 'images/properties/1702243952902219.jpg', NULL, 1, NULL, NULL, NULL),
(86, 'images/properties/1702264392716234.jpg', NULL, 10, NULL, NULL, NULL),
(87, 'images/properties/1703160349577970.jpg', 0, 11, 54, NULL, '2021-06-28 09:22:00'),
(88, 'images/properties/1703160349622860.jpg', 0, 11, 54, NULL, '2021-06-28 09:22:00'),
(89, 'images/properties/1703160349662208.jpg', 0, 11, 54, NULL, '2021-06-28 09:22:00'),
(90, 'images/properties/1703160849932097.jpg', 0, 11, 55, NULL, '2021-06-28 09:22:00'),
(91, 'images/properties/1703160850028177.jpg', 0, 11, 55, NULL, '2021-06-28 09:22:00'),
(92, 'images/properties/1703160850070985.jpg', 0, 11, 56, NULL, '2021-06-28 09:22:00'),
(93, 'images/properties/1703160850111435.png', 0, 11, 56, NULL, '2021-06-28 09:22:00'),
(94, 'images/properties/1703160850332373.jpg', 1, 11, 56, NULL, '2021-06-28 09:22:00'),
(95, 'images/properties/1703160850372937.jpg', 0, 11, 56, NULL, '2021-06-28 09:22:00'),
(96, 'images/properties/1703160850461539.jpg', 0, 11, 56, NULL, '2021-06-28 09:22:00'),
(97, 'images/properties/1703160851117633.jpg', 0, 11, 56, NULL, '2021-06-28 09:22:00'),
(98, 'images/properties/1703160851158074.jpg', 0, 11, 56, NULL, '2021-06-28 09:22:00'),
(99, 'images/properties/1703160851198192.jpg', 0, 11, 56, NULL, '2021-06-28 09:22:00'),
(100, 'images/properties/1703160851306677.jpg', 0, 11, 56, NULL, '2021-06-28 09:22:00'),
(101, 'images/properties/1703160851366556.jpg', 0, 11, 56, NULL, '2021-06-28 09:22:00'),
(102, 'images/properties/1703162125771970.jpg', 0, 11, 58, NULL, '2021-06-28 09:22:00'),
(103, 'images/properties/1703162125831979.jpg', 0, 11, 58, NULL, '2021-06-28 09:22:00'),
(104, 'images/properties/1703162125874800.jpg', 0, 11, 59, NULL, '2021-06-28 09:22:00'),
(105, 'images/properties/1703162125916400.jpg', 0, 11, 59, NULL, '2021-06-28 09:22:00'),
(106, 'images/properties/1703162125955948.jpg', 0, 11, 59, NULL, '2021-06-28 09:22:00'),
(107, 'images/properties/1703162126047764.jpg', 0, 11, 59, NULL, '2021-06-28 09:22:00'),
(108, 'images/properties/1703162126133660.jpg', 0, 11, 60, NULL, '2021-06-28 09:22:00'),
(109, 'images/properties/1703162126174189.jpg', 0, 11, 60, NULL, '2021-06-28 09:22:00'),
(110, 'images/properties/1703162126242727.jpg', 0, 11, 60, NULL, '2021-06-28 09:22:00'),
(111, 'images/properties/1703162754602239.jpg', 0, 11, 61, NULL, '2021-06-28 09:22:00'),
(112, 'images/properties/1703162754652450.jpg', 0, 11, 62, NULL, '2021-06-28 09:22:00'),
(113, 'images/properties/1703162754814908.jpg', 0, 11, 63, NULL, '2021-06-28 09:22:00'),
(114, 'images/properties/1703162754907535.jpg', 0, 11, 64, NULL, '2021-06-28 09:22:00'),
(115, 'images/properties/1703162878142572.jpg', 0, 11, 65, NULL, '2021-06-28 09:22:00'),
(116, 'images/properties/1703162878206840.jpg', 0, 11, 66, NULL, '2021-06-28 09:22:00'),
(117, 'images/properties/1703165664339804.jpg', 0, 11, NULL, NULL, '2021-06-28 09:22:00'),
(118, 'images/properties/1703820815772443.jpg', 0, 12, 69, NULL, '2021-06-28 09:22:12'),
(119, 'images/properties/1703820815817586.jpg', 1, 12, 69, NULL, '2021-06-28 09:22:12'),
(120, 'images/properties/1703821329707096.jpg', NULL, 1, NULL, NULL, NULL),
(121, 'images/properties/1703821466990397.jpg', 0, 16, 70, NULL, '2021-06-28 09:23:08'),
(122, 'images/properties/1703821467071096.jpg', 0, 16, 71, NULL, '2021-06-28 09:23:08'),
(123, 'images/properties/1703821467257815.jpg', 0, 16, 71, NULL, '2021-06-28 09:23:08'),
(124, 'images/properties/1703821467299830.jpg', 0, 16, 72, NULL, '2021-06-28 09:23:08'),
(125, 'images/properties/1703821467356809.jpg', 1, 16, 72, NULL, '2021-06-28 09:23:08'),
(126, 'images/properties/1703821655509459.png', 0, 13, 73, NULL, '2021-06-28 09:22:20'),
(127, 'images/properties/1703821655731749.png', 0, 13, 74, NULL, '2021-06-28 09:22:20'),
(128, 'images/properties/1703821655995739.jpg', 1, 13, 75, NULL, '2021-06-28 09:22:20'),
(130, 'images/properties/1703821758795247.jpg', 1, 14, 77, NULL, '2021-06-28 09:22:40'),
(131, 'images/properties/1703821758885083.jpg', 0, 14, 78, NULL, '2021-06-28 09:22:40'),
(132, 'images/properties/1703821758926547.jpg', 0, 14, 79, NULL, '2021-06-28 09:22:40'),
(133, 'images/properties/1703821862520813.jpg', 1, 15, 80, NULL, '2021-06-28 09:29:51'),
(134, 'images/properties/1703821862600576.jpg', 0, 15, 80, NULL, '2021-06-28 09:29:51'),
(135, 'images/properties/1703821862642334.jpg', 0, 15, 81, NULL, '2021-06-28 09:29:51'),
(136, 'images/properties/1703821862682728.jpg', 0, 15, 81, NULL, '2021-06-28 09:29:51'),
(137, 'images/properties/1703821862806263.jpg', 0, 15, 82, NULL, '2021-06-28 09:29:51'),
(138, 'images/properties/1703821941675961.jpg', 0, 25, 83, NULL, '2021-06-28 09:24:42'),
(139, 'images/properties/1703821941792765.jpg', 1, 25, 84, NULL, '2021-06-28 09:24:42'),
(140, 'images/properties/1703821941830962.jpg', 0, 25, 84, NULL, '2021-06-28 09:24:42'),
(141, 'images/properties/1703821972256236.jpg', 1, 24, 85, NULL, '2021-06-28 09:24:31'),
(142, 'images/properties/1703822083506174.jpg', 1, 23, 87, NULL, '2021-06-28 09:24:23'),
(143, 'images/properties/1703822161616230.jpg', 1, 22, 88, NULL, '2021-06-28 09:24:13'),
(144, 'images/properties/1703822161661065.jpg', 0, 22, 89, NULL, '2021-06-28 09:24:13'),
(145, 'images/properties/1703822161702237.jpg', 0, 22, 90, NULL, '2021-06-28 09:24:13'),
(146, 'images/properties/1703822228574181.jpg', 1, 21, 91, NULL, '2021-06-28 09:23:51'),
(147, 'images/properties/1703822228665725.jpg', 0, 21, 92, NULL, '2021-06-28 09:23:51'),
(148, 'images/properties/1703822228762485.jpg', 0, 21, 93, NULL, '2021-06-28 09:23:51'),
(149, 'images/properties/1703822270099560.jpg', 0, 20, 94, NULL, '2021-06-28 09:24:00'),
(150, 'images/properties/1703822325708212.jpg', 0, 19, 95, NULL, '2021-06-28 09:23:39'),
(151, 'images/properties/1703822325818228.jpg', 0, 19, 96, NULL, '2021-06-28 09:23:39'),
(152, 'images/properties/1703822325860519.jpg', 1, 19, 96, NULL, '2021-06-28 09:23:39'),
(153, 'images/properties/1703822401824709.jpg', 0, 20, 97, NULL, '2021-06-28 09:24:00'),
(154, 'images/properties/1703822401874007.jpeg', 1, 20, 98, NULL, '2021-06-28 09:24:00'),
(155, 'images/properties/1703822402025828.jpg', 0, 20, 98, NULL, '2021-06-28 09:24:00'),
(156, 'images/properties/1703822488673966.jpg', 1, 18, 99, NULL, '2021-06-28 09:23:29'),
(157, 'images/properties/1703822570118382.jpg', 1, 17, 100, NULL, '2021-06-28 09:23:19'),
(158, 'images/properties/1703822570213047.jpg', 0, 17, 101, NULL, '2021-06-28 09:23:19'),
(159, 'images/properties/1703822570336875.jpg', 0, 17, 102, NULL, '2021-06-28 09:23:19');

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
(1, NULL, NULL, 'Bed Room 1', '23.50', '23.50', 'm', '23.5*23.5', 'sq m', 1),
(2, NULL, NULL, 'Bed Room 2', '23.50', '23.50', 'm', '23.5*23.5', 'sq m', 1),
(3, NULL, '2021-06-09 09:39:23', 'Bed Room 3', '23.00', '23.00', 'cm', '13*34', 'sq cm', 1),
(4, NULL, NULL, 'hall 1', '120.00', '60.00', 'm', '120*60', 'sq m', 1),
(5, NULL, NULL, 'hall 2', '120.00', '60.00', 'm', '120*60', 'sq m', 1),
(6, NULL, NULL, 'reception', '120.00', '60.00', 'm', '120*60', 'sq m', 1),
(7, NULL, NULL, 'Bed Room 1', '45.00', '45.00', 'm', '45*45', 'sq m', 2),
(8, NULL, NULL, 'Bed Room 3', '45.00', '45.00', 'm', '45*45', 'sq m', 2),
(9, NULL, NULL, 'hall 1', '90.00', '45.00', 'm', '90*45', 'sq m', 2),
(10, NULL, NULL, 'Bed Room 1', '65.00', '65.00', 'feet', '65*65', 'sq ft', 3),
(11, NULL, NULL, 'Bed Room 2', '65.00', '65.00', 'm', '65*65', 'sq m', 3),
(12, NULL, NULL, 'hall 1', '100.00', '67.50', 'feet', '100*67.5', 'sq feet', 3),
(13, NULL, NULL, 'Bed Room 1', '55.00', '55.00', 'm', '55*55', 'sq m', 4),
(14, NULL, NULL, 'Bed Room 2', '55.00', '65.00', 'feet', '55*65', 'sq feet', 4),
(15, NULL, NULL, 'hall 1', '105.00', '65.00', 'feet', '105*65', 'sq feet', 4),
(16, NULL, NULL, 'Bed Room 1', '45.00', '40.00', 'm', '45*40', 'sq m', 5),
(17, NULL, NULL, 'hall 1', '65.00', '50.00', 'm', '65*50', 'sq m', 5),
(18, NULL, NULL, 'hall 2', '76.00', '40.00', 'cm', '76*40', 'sq cm', 5),
(19, NULL, NULL, 'Bed Room 1', '10.30', '9.50', 'm', '10.3*9.5', 'sq m', 6),
(20, NULL, NULL, 'Bed Room 3', '10.30', '9.50', 'm', '10.3*9.5', 'sq m', 6),
(21, NULL, NULL, 'hall 1', '110.30', '49.50', 'feet', '110.3*49.5', 'sq feet', 6),
(22, NULL, NULL, 'Bed Room 1', '40.00', '40.00', 'inche', '1600', 'sq inch', 7),
(23, NULL, NULL, 'hall 1', '60.00', '30.00', 'inche', '1800', 'sq inch', 7),
(24, NULL, NULL, 'Bed Room 1', '20.00', '20.00', 'feet', '400', 'sq ft', 8),
(25, NULL, NULL, 'Bed Room 2', '30.00', '20.00', 'feet', '600', 'sq m', 8),
(26, NULL, NULL, 'Bed Room 1', '100.00', '50.00', 'feet', '5000', 'sq ft', 9),
(27, NULL, NULL, 'Bed Room 1', '34.00', '20.00', 'feet', '680', 'sq ft', 10),
(28, NULL, NULL, 'Bed Room 2', '34.00', '30.00', 'feet', '1020', 'sq feet', 10),
(29, NULL, NULL, 'Bed Room 3', '34.00', '23.00', 'feet', '782', 'sq feet', 10),
(30, NULL, NULL, 'hall 1', '50.00', '50.00', 'feet', '2500', 'sq feet', 10),
(40, NULL, NULL, 'hall 2', '33.00', '33.00', 'm', '33*33', 'sq m', 11),
(41, NULL, NULL, 'hall 3', '33.00', '33.00', 'cm', '66*66', 'sq cm', 11),
(42, NULL, NULL, 'hall 2', '44.00', '44.00', 'm', '44*44', 'sq m', 3),
(43, NULL, NULL, 'Bed Room 3', '45.00', '55.00', 'feet', '45*55', 'sq ft', 3),
(44, NULL, NULL, 'Bed Room 3', '45.00', '55.00', 'feet', '45*55', 'sq ft', 3),
(45, NULL, NULL, 'Bed Room 3', '45.00', '55.00', 'feet', '45*55', 'sq ft', 3),
(49, NULL, NULL, 'Bed Room 3', '90.00', '90.00', 'm', '810', 'sq m', 11),
(50, NULL, NULL, 'hall 2', '67.00', '67.00', 'm', '66*66', 'sq m', 11),
(51, NULL, NULL, 'Bed Room 3', '50.00', '50.00', 'feet', '2500', 'sq ft', 11),
(52, NULL, NULL, 'Bed Room 3', '51.00', '51.00', 'm', '2601', 'sq m', 11),
(53, NULL, NULL, 'Bed Room 3', '12.00', '12.00', 'mm', '22', 'sq cm', 11),
(54, NULL, NULL, 'Bed Room 3', '12.00', '12.00', 'mm', '22', 'sq cm', 11),
(55, NULL, NULL, 'hall 1', '1.00', '1.00', 'm', '11', 'sq m', 11),
(56, NULL, NULL, 'hall 2', '2.00', '2.00', 'inche', '22', 'sq inch', 11),
(57, NULL, NULL, 'hall 3', '3.00', '3.00', 'feet', '33', 'sq feet', 11),
(58, NULL, NULL, 'hall 4', '2.00', '3.00', 'm', '23', 'sq m', 11),
(59, NULL, NULL, 'hall 5', '2.00', '3.00', 'cm', '23', 'sq cm', 11),
(60, NULL, NULL, 'hall 6', '2.00', '3.00', 'mm', '23', 'sq mm', 11),
(61, NULL, NULL, 'Bath Room 1', '34.00', '34.00', 'cm', '33*33', 'sq cm', 11),
(62, NULL, NULL, 'Bath Room 2', '33.00', '33.00', 'inche', '33*33', 'sq inch', 11),
(63, NULL, NULL, 'Bath Room 1', '34.00', '34.00', 'cm', '33*33', 'sq cm', 11),
(64, NULL, NULL, 'Bath Room 2', '33.00', '33.00', 'inche', '33*33', 'sq inch', 11),
(65, NULL, NULL, 'Bath Room 3', '1.00', '1.00', 'cm', '11', 'sq cm', 11),
(66, NULL, NULL, 'Bath Room 4', '1.00', '1.00', 'cm', '11', 'sq cm', 11),
(67, NULL, NULL, 'Bath Room 1', '23.00', '22.00', 'feet', '23*22', 'sq ft', 12),
(68, NULL, NULL, 'hall 1', '55.00', '50.00', 'feet', '55*50', 'sq ft', 12),
(69, NULL, NULL, 'Bed Room 2', '34.00', '33.00', 'm', '34*33', 'sq m', 12),
(70, NULL, NULL, 'Bath Room 1', '65.00', '12.00', 'm', '232', 'sq m', 16),
(71, NULL, NULL, 'Bed Room 3', '65.00', '23.00', 'mm', '345', 'sq mm', 16),
(72, NULL, NULL, 'hall 2', '53.00', '23.00', 'inche', '234', 'sq feet', 16),
(73, NULL, NULL, 'Bed Room 1', '23.00', '45.00', 'm', '66*66', 'sq m', 13),
(74, NULL, NULL, 'Bed Room 2', '23.00', '43.00', 'm', '66*66', 'sq m', 13),
(75, NULL, NULL, 'Bath Room 1', '23.00', '24.00', 'm', '66*66', 'sq m', 13),
(76, NULL, NULL, 'hall 1', '65.00', '43.00', 'feet', '33*33', 'sq ft', 14),
(77, NULL, NULL, 'hall 2', '65.00', '45.00', 'feet', '55*44', 'sq feet', 14),
(78, NULL, NULL, 'Bed Room 1', '56.00', '55.00', 'feet', '45*55', 'sq feet', 14),
(79, NULL, NULL, 'Bath Room 1', '45.00', '45.00', 'feet', '45*55', 'sq feet', 14),
(80, NULL, NULL, 'hall 1', '76.00', '67.00', 'm', '33*33', 'sq m', 15),
(81, NULL, NULL, 'hall 2', '56.00', '67.00', 'm', '44*44', 'sq m', 15),
(82, NULL, NULL, 'Bed Room', '67.00', '56.00', 'm', '44*44', 'sq m', 15),
(83, NULL, NULL, 'Bed Room 1', '65.00', '66.00', 'inche', '66*66', 'sq inch', 25),
(84, NULL, NULL, 'Bath Room 2', '44.00', '45.00', 'inche', '66*66', 'sq inch', 25),
(85, NULL, NULL, 'hall 1', '23.00', '23.00', 'mm', '55*44', 'sq mm', 24),
(86, NULL, NULL, 'Bed Room', '76.00', '65.00', 'm', '66*66', 'sq m', 23),
(87, NULL, NULL, 'hall', '23.00', '34.00', 'cm', '33*33', 'sq cm', 23),
(88, NULL, NULL, 'Bed Room 1', '34.00', '23.00', 'm', '66*66', 'sq m', 22),
(89, NULL, NULL, 'Bath Room 2', '75.00', '54.00', 'm', '66*66', 'sq m', 22),
(90, NULL, NULL, 'Bath Room 1', '53.00', '23.00', 'm', '66*66', 'sq m', 22),
(91, NULL, NULL, 'hall 1', '65.00', '34.00', 'cm', '22*22', 'sq cm', 21),
(92, NULL, NULL, 'hall 2', '43.00', '34.00', 'mm', '66*66', 'sq mm', 21),
(93, NULL, NULL, 'hall 3', '23.00', '23.00', 'feet', '55*44', 'sq mm', 21),
(94, NULL, NULL, 'Bed Room 1', '45.00', '45.00', 'mm', '33*33', 'sq mm', 20),
(95, NULL, NULL, 'Bed Room', '12.00', '22.00', 'm', '66*66', 'sq m', 19),
(96, NULL, NULL, 'hall', '21.00', '22.00', 'cm', '44*44', 'sq cm', 19),
(97, NULL, NULL, 'Bath Room 1', '45.00', '22.00', 'inche', '66*66', 'sq inch', 20),
(98, NULL, NULL, 'Bed Room 1', '23.00', '34.00', 'inche', '66*66', 'sq inch', 20),
(99, NULL, NULL, 'hall 1', '123.00', '44.00', 'm', '33*33', 'sq m', 18),
(100, NULL, NULL, 'Bed Room 1', '87.00', '21.00', 'm', '66*66', 'sq m', 17),
(101, NULL, NULL, 'Bed Room 2', '67.00', '33.00', 'm', '33*33', 'sq m', 17),
(102, NULL, NULL, 'Bath Room 1', '45.00', '22.00', 'm', '55*44', 'sq m', 17);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'BoxRoom', 'boxroom4rent@gmail.com', '(0208) 599 2555', 'Ihomes Lettings & Management,\r\nSuite 1,\r\n976 Eastern Ave,\r\nNewbury Park,\r\nIG2 7JD.', 'boxroomstyle/images/avatar.png', NULL, '$2y$10$Q9mztXobe/nTAMephfOk..HKxUGZUv9EPZbiEpk.fiIJI4kHy8Yzm', NULL, '2021-06-28 07:18:04', '2021-06-28 07:18:04');

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
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_type_index` (`type`),
  ADD KEY `properties_owner_index` (`owner`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proparties`
--
ALTER TABLE `proparties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proparty_types`
--
ALTER TABLE `proparty_types`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
