-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 03:06 AM
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
(68, '2014_10_12_000000_create_users_table', 6),
(69, '2014_10_12_100000_create_password_resets_table', 6),
(70, '2019_08_19_000000_create_failed_jobs_table', 6),
(71, '2021_05_18_121416_create_proparty_types_table', 6),
(72, '2021_05_29_003305_create_proparties_table', 6),
(73, '2021_05_29_210637_create_rooms_table', 6),
(74, '2021_05_30_030944_create_owners_table', 6),
(75, '2021_06_05_014431_create_property_images_table', 6);

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
(1, '2021-06-09 09:35:27', '2021-06-09 09:35:27', 'Ronaldo', '+447439185360', 'ronaldo@gmail.com', '30 Mainstreet\r\neastHam\r\nlondon'),
(2, '2021-06-09 10:46:00', '2021-06-09 10:46:00', 'srijathee', '+447439180360', 'srijathee@gmail.com', 'vanniyasingam road,\r\nLondon SW12 TR4'),
(3, '2021-06-09 10:46:00', '2021-06-09 10:46:00', 'srijathee', '+447439180360', 'srijathee@gmail.com', 'vanniyasingam road,\r\nLondon SW12 TR4'),
(4, '2021-06-09 10:57:39', '2021-06-09 10:57:39', 'adam', '+447439180360', 'adam@gmail.com', 'MainStreet,\r\nLondon W12 Q2\r\nLondon'),
(5, '2021-06-09 13:36:10', '2021-06-09 13:36:10', 'BoxRoom', '+447439180360', 'boxroom4rent@gmail.com', 'Empress Works\r\nCorbridge Crescent, London, E2 9DS');

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
  `first_pastcode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_pastcode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `is_publish` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proparties`
--

INSERT INTO `proparties` (`id`, `created_at`, `updated_at`, `catagery`, `type`, `age`, `minimum_term`, `door_no`, `door_name`, `first_pastcode`, `second_pastcode`, `post_town`, `post_city`, `post_country`, `display_address`, `condition_of_property`, `furnished_property`, `accessability`, `heating_type`, `is_burglar_alarm`, `is_cctv`, `bill`, `enquiry_contact`, `enquiry_email`, `sale_condition`, `rent_condition`, `no_of_bedrooms`, `no_of_bathrooms`, `no_of_halls`, `no_of_reseptions`, `floors`, `parking`, `garden`, `internal_area`, `land_area`, `area_unit`, `price`, `price_flag`, `rent_frequency`, `deposite`, `deposite_flag`, `admin_fee_max`, `admin_fee_exe`, `admin_fee_flag`, `date_intake`, `date_published`, `date_revoked`, `property_details`, `further_details`, `property_details_display`, `owner`, `is_publish`) VALUES
(1, '2021-06-09 09:33:59', '2021-06-09 09:35:27', 'for sale', 4, 'New', NULL, 306, 'Jathees', 'SW10', '9UH', 'Fulham Road', 'London', 'London', 'Fulham Road\r\nLondon, SW10 9UH', 'Fully Decorated', '[\"Bed and sofa included\",\"Kitchen Items are included\"]', '[\"Seperate Enterance\"]', '[\"Gas\",\"Combi Boilder\"]', 1, 1, NULL, '+9155112627626', 'boxroom4rent@gmail.com', '[\"No condition\"]', '[null]', 5, 4, 2, 1, 2, '[\"Allocated\",\"Garage\"]', '[\"Back Garden\",\"Front Garden\"]', '2089', '2500', 'sq ft', 1400000, 1, NULL, NULL, 0, 140000, 7000, 0, '2021-06-01', '2021-06-09', '2021-07-09', 'A rare opportunity to acquire a freehold investment and development opportunity in Chelsea.\r\n\r\nEssentially two adjoining buildings, currently configured with two independent commercial retail premises on the ground floor, with two further residential flats arranged over the first and second floors, each arranged laterally.\r\n\r\nWith a gross internal area of circa 786 sq ft, accommodation for flat 1 on the first floor comprises three bedrooms, two bathrooms, a reception room and separate kitchen. This property is currently let, with the tenancy due to run until 24th November 2021 with the current rent paid as £1,650.00 per month.', '[\"Development opportunity\",\"Freehold\",\"Mixed commercial and residential uses\",\"Renowned central London location\",\"Restricted viewing\"]', 0, 1, 1),
(2, '2021-06-09 10:03:01', '2021-06-09 10:03:01', 'for sale', 7, 'Mid 40', NULL, 409, 'john', 'SW5', '9TF', 'Trebovir Road', 'Earl\'s Count', 'London', 'Kensington Mansions\r\nTrebovir Road, Earl\'s Count,\r\nLondon, SW5 9TF', 'Fully Decorated', '[\"Bed and sofa included\",\"Kitchen Items are included\"]', '[\"Ground floor Access\"]', '[\"Central\"]', 1, 1, NULL, '+9155112627626', 'boxroo4rent@gmail.com', '[\"No condition\"]', '[null]', 4, 3, 2, 1, 2, '[\"Allocated\"]', '[\"Back Garden\",\"Front Garden\"]', '2101', '3000', 'sq m', 2750000, 1, NULL, NULL, 0, 27500, 10000, 1, '2021-06-05', '2021-06-09', '2021-07-31', 'Kensington Mansions is an attractive and highly desirable red brick period mansion block renowned for its large lateral apartments and benefits such as a porter and access into a beautiful communal garden.\r\n\r\nThis particular apartment is located within the northern terrace of the building, allowing for a south facing aspect from the spacious open plan double reception room. These rooms extend to a combined impressive width of approximately 33 feet creating a superb feeling of space within the living accommodation. In addition to the stunning reception rooms the apartment further offers a welcoming entrance hall, a spacious kitchen/breakfast room, four double bedrooms, two en suite bathrooms plus an additional guest bathroom.\r\n\r\nThe current owners carried out significant works to create a wonderful family home', '[\"Well presented throughout\",\"Share of freehold\",\"Porter\",\"Access into a beautiful communal garden\"]', 1, 1, 1),
(3, '2021-06-09 10:43:11', '2021-06-09 10:46:00', 'for sale', 1, 'Mid 40', NULL, 65, 'cheyne', 'SW10', 'ODJ', 'Cheyne Walk', 'London', 'London', 'Cheyne Walk\r\nLondon, SW10 ODJ', 'Fully Decorated', '[\"Bed and sofa included\",\"Kitchen Items are included\"]', '[\"Ground floor Access\",\"Shared corridor\"]', '[\"Combi Boilder\"]', 1, 1, NULL, '+9155112627626', 'boxroom4rent@gmail.com', '[\"No condition\"]', '[null]', 4, 2, 3, 1, 2, '[\"Allocated\"]', '[\"Terrace\"]', '1564', '2554', 'sq ft', 3650000, 1, NULL, NULL, 0, 36500, 4999, 0, '2021-06-08', '2021-06-09', '2021-07-09', 'Located in an enviable position boasting superb views of the river is this stunning Grade II listed Georgian townhouse offering 4 double bedrooms and an abundance of charm & character.\r\n\r\nThe versatile accommodation retains many charming original features and is presented in excellent order throughout; it briefly comprises: Reception hall, superb bespoke open-plan dining kitchen, utility room and guest WC. The lower ground floor lends itself superbly to a home office, hobbies room or children\'s play area and has its own independent entrance from the front. To the first floor there is a beautifully appointed bathroom with separate shower and elegant double reception room offering superb views of the river. There are also four double bedrooms arranged over the second and third floors as well as a further family bathroom, also with a separate shower and double wash hand basin.', '[\"Beautiful Georgian townhouse\",\"Excellent entertaining space\",\"Lovely rear garden\",\"Four double bedrooms\",\"Many charming original features\"]', 1, 2, 1),
(4, '2021-06-09 10:56:43', '2021-06-09 10:57:39', 'for let', 7, 'Mid 40', '1 month', 45, 'cherin', 'SW5', '9QN', 'Cromwell Crescent', 'London', 'London', 'Cromwell Crescent\r\nLondon, SW5 9QN', 'Fully Decorated', '[\"Bed and sofa included\",\"Kitchen Items are included\"]', '[\"Ground floor Access\",\"Seperate Enterance\",\"Shared corridor\"]', '[\"Central\"]', 1, 1, 'Excluded', '+9155112627626', 'boxroo4rent@gmail.com', '[null]', '[\"No Pets\",\"No Parties\",\"Only for family\"]', 2, 2, 1, 0, 1, '[\"On Street\"]', '[\"Terrace\"]', '816', NULL, 'sq ft', 550, 1, 'Monthly', 1100, 1, NULL, NULL, 0, '2021-06-08', '2021-06-09', '2021-06-30', 'With bundles of natural light throughout, a charming two bedroom, two bathroom period conversion enjoying a generous size double reception and close proximity to transport links of Earls Court and Kensington High Street.', '[\"Two double bedrooms\",\"Wooden floors\",\"Council Tax Band = F\",\"Open planned kitchen reception\",\"Guest W\\/C\"]', 0, 4, 1),
(5, '2021-06-09 11:18:11', '2021-06-09 11:18:11', 'for let', 1, 'New', '1 year', 207, 'martin', 'N1', '2HP', 'Canonbury Grove', 'Canonbury', 'London', 'Canonbury Grove\r\nCanonbury, London\r\nN1, 2HP', 'Fully Decorated', NULL, '[\"Seperate Enterance\"]', '[\"Central\"]', 0, 0, 'Shared', '+9155112627626', 'boxroom4rent@gmail.com', '[null]', '[\"No condition\"]', 4, 2, 2, 1, 1, '[\"On Street\"]', '[\"Terrace\"]', '1564', NULL, 'sq ft', 1100, 1, 'Monthly', 2200, 1, NULL, NULL, 0, '2021-06-07', '2021-06-09', '2021-07-10', 'The property offers a large double reception room, modern fitted kitchen leading to a south east facing garden, three double bedrooms, additional study/office and a family bathroom.\r\n\r\nThe property is ideally situated on Canonbury Grove within the Tyndale School catchment area and the shops cafes and restaurants of Upper Street. Angel and Highbury & Islington stations are also within easy reach.', '[\"Private South Facing Garden\",\"Family Home\",\"4 bedrooms\",\"Council Tax Band = G\",\"Newly Refurbished\"]', 1, 4, 1),
(6, '2021-06-09 13:10:37', '2021-06-09 13:10:37', 'for let', 4, 'Newly build', '2-5 year', 505, 'Jathees', 'E14', '9QG', 'George Street', 'Canary Wharf', 'London', 'George Street\r\nCanary Wharf,\r\nLondon, E14 9QG', 'Fully Decorated', '[\"Bed and sofa included\",\"Kitchen Items are included\"]', '[\"Ground floor Access\",\"Shared corridor\"]', '[\"Central\"]', 1, 1, 'Shared', '+9155112627626', 'boxroom4rent@gmail.com', '[null]', '[\"No Pets\",\"No Smokers\",\"No Parties\"]', 3, 2, 1, 1, 2, '[\"Allocated\"]', '[\"Back Garden\"]', '1111', '2000', 'sq m', 999, 1, 'Monthly', 5000, 1, 1000, 999, 0, '2021-06-01', '2021-06-10', '2021-07-10', 'Forming part of Canary Wharfs new district Wood Wharf with on-site 24/7 concierge, 10 George Street is home to 327 apartments designed and built to accommodate the most discerning Tenant.\r\n\r\nLuxury fittings, furniture by Camerich, Siemens appliances, cooling and heating system, 350MB Virgin internet and 6,000 Sqft of enviable amenities space.\r\n\r\nMost apartments have a private balcony and you can make use of the social spaces to relax and unwind, to work or study from home. Sit on the terrace overlooking the south dock with amazing river views beyond the landscaped gardens.\r\n\r\nStudios, 1, 2 & 3 bedroom apartments are available', '[\"Council Tax Awaiting Banding\",\"Sleep Suites for guests\",\"South Facing Terrace\",\"High-speed broadband, TV & license included in rent Residents lounge and Private Dining\",\"Exclusive rental accommodation on the Canary Wharf estate\",\"Gym Studio\"]', 1, 3, 1),
(7, '2021-06-09 13:24:24', '2021-06-09 13:24:24', 'for let', 1, 'New', '1 year', 505, 'Randallo', 'SW10', '9NR', 'Redcliffe Road', 'Chelsea', 'London', 'Redcliffe Road\r\nChelsea, London,\r\n SW10 9NR', 'Fully Decorated', '[\"Bed and sofa included\"]', '[\"Ground floor Access\",\"Shared corridor\"]', '[\"Combi Boilder\"]', 1, 1, 'Excluded', '+9155112627626', 'boxroom4rent@gmail.com', '[null]', '[\"Allow 2 bedrooms\",\"weekly payment\",\"No Pets\"]', 3, 2, 1, 1, 1, '[\"Allocated\"]', '[\"Communal Garden\"]', '745', NULL, 'sq ft', 2000, 1, 'Monthly', 5000, 1, 500, 1000, 0, '2021-06-08', '2021-06-09', '2021-07-10', NULL, '[null]', 0, 1, 1),
(8, '2021-06-09 13:35:39', '2021-06-09 13:36:10', 'for sale', 1, 'Newly build', 'long-term', 34, 'john', 'E2', '9DS', 'Empress Works', 'Corbridge Crescent', 'London', 'Empress Works\r\nCorbridge Crescent, London, E2 9DS', 'Require Painting', NULL, '[\"Seperate Enterance\"]', '[\"Central\"]', 0, 0, 'Included', '+9155112627626', 'boxroom4rent@gmail.com', '[\"No condition\"]', '[null]', 2, 2, 1, 1, 2, '[\"On Street\"]', '[\"Terrace\"]', '538', '694', 'sq ft', 695000, 1, NULL, NULL, 0, 6500, 5000, 0, '2021-06-06', '2021-06-07', '2021-07-07', 'Empress Works is a collection of 50 warehouse-style apartments and 5 re-commissioned regency cottages situated in the heart of vibrant East London, on the site of the historic Empress Coaches.\r\n\r\nSet around a central, cobbled courtyard, each of the 5 apartment blocks has a large communal roof terrace with unrivalled views of the canal and cityscape. Amenities include concierge and on-site gym, designed to reflect the Empress Works ethos of timeless style and elegant living.', '[\"Virtual viewing available\",\"Private balcony to each apartment\",\"Roof top terraces with City of London views\",\"Canal-facing apartments & cottages\",\"0.2 miles to Cambridge Heath Overground Station\"]', 1, 5, 1),
(9, '2021-06-09 13:48:05', '2021-06-09 14:02:07', 'for let', 2, 'Mid 40', '1 year', 45, 'gupta', 'W8', '6AA', 'Cope Place', 'Kensington', 'London', 'Cope Place\r\nKensington, London, W8 6AA', 'Fully Decorated', '[\"Bed and sofa included\",\"Kitchen Items are included\"]', '[\"Ground floor Access\"]', '[\"Gas\"]', 0, 1, NULL, '+9155112627626', 'boxroom4rent@gmail.com', '[\"No condition\"]', '[null]', 5, 4, 2, 3, 1, '[\"Allocated\"]', '[\"Front Garden\"]', NULL, NULL, NULL, 16950, 1, 'Quarter', 40000, 1, 8000, 3400, 0, '2021-06-01', '2021-06-03', '2021-06-30', 'A really immaculate unfurnished house which was completely renovated a few years ago. The house provides a modern feel with excellent bathrooms and a great kitchen. There are wood floors throughout the property and no carpet. Ground floor double reception room, bedroom 4/study, first floor two double bedrooms, shower room en suite, bathroom, second floor with principal bedroom with en suite shower room and air conditioning, lower ground floor kitchen/breakfast room with modern fittings and all machines, utility room, bedroom 5/office with en suite shower room. Doors to garden. Garage.', '[\"Modern house with wood floors\",\"Fully fitted kitchen and breakfast room\",\"Patio garden\",\"Council Tax Band = G\",null]', 1, 4, 1),
(10, '2021-06-09 14:08:34', '2021-06-09 14:08:34', 'for sale', 5, 'Mid 40', NULL, 34, 'Jathee', 'EC1R', '1YE', 'Myddelton Square', 'Ilford', 'London', 'Myddelton Square\r\nLondon, EC1R 1YE', 'Require Painting', NULL, NULL, '[\"Central\",\"Gas\"]', 1, 1, NULL, '+9155112627626', 'boxroom4rent@gmail.com', '[\"No condition\"]', '[null]', 5, 3, 1, 1, 3, '[\"Allocated\",\"Garage\"]', '[\"Front Garden\"]', '3000', '4000', 'sq ft', 3750000, 1, NULL, NULL, 0, 37000, 14999, 1, '2021-06-09', '2021-06-09', '2021-07-09', 'An imposing grade II listed house positioned on the South side of Myddelton Square.\r\n\r\nThe internal floor area exceeds 3,000 square feet, arranged over five floors which is currently configured as five bedrooms, three reception rooms and three bathrooms.\r\n\r\nThe rear of the house faces South and the far reaching views from the rear windows look directly at St Pauls Cathedral.', '[\"Five storey Georgian Home\",\"Circa 3,000 square feet\",\"Direct views over Myddelton Square\",\"South facing rear elevation with garden and terrace\",\"Grade II listed\"]', 1, 3, 1);

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
(1, 'Terraced', '2021-06-09 09:26:36', '2021-06-09 09:26:36'),
(2, 'End of Terraced', '2021-06-09 09:26:44', '2021-06-09 09:26:44'),
(3, 'Estate', '2021-06-09 09:26:56', '2021-06-09 09:26:56'),
(4, 'House', '2021-06-09 09:27:04', '2021-06-09 09:27:04'),
(5, 'Bangalow', '2021-06-09 09:27:10', '2021-06-09 09:27:10'),
(6, 'Villa', '2021-06-09 09:27:23', '2021-06-09 09:27:23'),
(7, 'Flat', '2021-06-09 09:57:14', '2021-06-09 09:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_main` tinyint(1) DEFAULT NULL,
  `proparty_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `image`, `is_main`, `proparty_id`, `created_at`, `updated_at`) VALUES
(1, 'images/properties/1702103432413031.jpg', 0, 1, NULL, '2021-06-10 23:08:38'),
(2, 'images/properties/1702103432717133.jpg', 0, 1, NULL, '2021-06-10 23:08:38'),
(3, 'images/properties/1702103432854965.jpg', 0, 1, NULL, '2021-06-10 23:08:38'),
(4, 'images/properties/1702103432895753.jpg', 0, 1, NULL, '2021-06-10 23:08:38'),
(5, 'images/properties/1702103432954824.jpg', 0, 1, NULL, '2021-06-10 23:08:38'),
(6, 'images/properties/1702103432994151.jpg', 0, 1, NULL, '2021-06-10 23:08:38'),
(7, 'images/properties/1702103433143491.jpg', 0, 1, NULL, '2021-06-10 23:08:38'),
(8, 'images/properties/1702103433183889.jpg', 0, 1, NULL, '2021-06-10 23:08:38'),
(9, 'images/properties/1702103433226854.jpg', 1, 1, NULL, '2021-06-10 23:08:38'),
(10, 'images/properties/1702103433266288.jpg', 0, 1, NULL, '2021-06-10 23:08:38'),
(11, 'images/properties/1702103433387144.jpg', 0, 1, NULL, '2021-06-10 23:08:38'),
(12, 'images/properties/1702103433428246.jpg', 0, 1, NULL, '2021-06-10 23:08:38'),
(14, 'images/properties/1702106083180547.jpg', 0, 2, NULL, '2021-06-09 10:37:56'),
(15, 'images/properties/1702106083348844.jpg', 0, 2, NULL, '2021-06-09 10:37:56'),
(16, 'images/properties/1702106083389054.png', 0, 2, NULL, '2021-06-09 10:37:56'),
(17, 'images/properties/1702106083603730.jpg', 0, 2, NULL, '2021-06-09 10:37:56'),
(18, 'images/properties/1702106083643600.jpg', 0, 2, NULL, '2021-06-09 10:37:56'),
(19, 'images/properties/1702106083729708.jpg', 0, 2, NULL, '2021-06-09 10:37:56'),
(20, 'images/properties/1702106084385308.jpg', 0, 2, NULL, '2021-06-09 10:37:56'),
(21, 'images/properties/1702106084425119.jpg', 0, 2, NULL, '2021-06-09 10:37:56'),
(22, 'images/properties/1702106084499923.jpg', 0, 2, NULL, '2021-06-09 10:37:56'),
(23, 'images/properties/1702106084540295.jpg', 1, 2, NULL, '2021-06-09 10:37:56'),
(24, 'images/properties/1702106084581203.jpg', 0, 2, NULL, '2021-06-09 10:37:56'),
(25, 'images/properties/1702106084655334.jpg', 0, 2, NULL, '2021-06-09 10:37:56'),
(26, 'images/properties/1702106892930294.jpg', 0, 3, NULL, '2021-06-09 10:50:33'),
(27, 'images/properties/1702106893016986.jpg', 0, 3, NULL, '2021-06-09 10:50:33'),
(28, 'images/properties/1702106893055864.jpg', 0, 3, NULL, '2021-06-09 10:50:33'),
(29, 'images/properties/1702106893164647.jpg', 0, 3, NULL, '2021-06-09 10:50:33'),
(30, 'images/properties/1702106893224358.jpg', 0, 3, NULL, '2021-06-09 10:50:33'),
(31, 'images/properties/1702106893456656.jpg', 1, 3, NULL, '2021-06-09 10:50:33'),
(32, 'images/properties/1702106893498024.jpg', 0, 3, NULL, '2021-06-09 10:50:33'),
(33, 'images/properties/1702106893587866.jpg', 0, 3, NULL, '2021-06-09 10:50:33'),
(34, 'images/properties/1702107685241766.jpg', 0, 4, NULL, '2021-06-09 11:03:08'),
(35, 'images/properties/1702107685304823.jpg', 0, 4, NULL, '2021-06-09 11:03:08'),
(36, 'images/properties/1702107685343988.jpg', 0, 4, NULL, '2021-06-09 11:03:08'),
(37, 'images/properties/1702107685383952.jpg', 0, 4, NULL, '2021-06-09 11:03:08'),
(38, 'images/properties/1702107685427421.jpg', 1, 4, NULL, '2021-06-09 11:03:08'),
(39, 'images/properties/1702107685468851.jpg', 0, 4, NULL, '2021-06-09 11:03:08'),
(40, 'images/properties/1702107685510379.jpg', 0, 4, NULL, '2021-06-09 11:03:08'),
(41, 'images/properties/1702115301668504.jpg', 0, 5, NULL, '2021-06-09 13:04:10'),
(42, 'images/properties/1702115301757486.jpg', 0, 5, NULL, '2021-06-09 13:04:10'),
(43, 'images/properties/1702115301843677.jpg', 1, 5, NULL, '2021-06-09 13:04:10'),
(44, 'images/properties/1702115302003101.jpg', 0, 5, NULL, '2021-06-09 13:04:10'),
(45, 'images/properties/1702115302042181.jpg', 0, 5, NULL, '2021-06-09 13:04:10'),
(46, 'images/properties/1702115302081194.jpg', 0, 5, NULL, '2021-06-09 13:04:10'),
(47, 'images/properties/1702115302174338.jpg', 0, 5, NULL, '2021-06-09 13:04:10'),
(48, 'images/properties/1702116292672523.jpg', 0, 6, NULL, '2021-06-09 13:20:04'),
(49, 'images/properties/1702116292730445.jpg', 1, 6, NULL, '2021-06-09 13:20:04'),
(50, 'images/properties/1702116292868739.jpeg', 0, 6, NULL, '2021-06-09 13:20:04'),
(51, 'images/properties/1702116293018160.jpg', 0, 6, NULL, '2021-06-09 13:20:04'),
(52, 'images/properties/1702116293058747.jpg', 0, 6, NULL, '2021-06-09 13:20:04'),
(53, 'images/properties/1702116293098935.jpg', 0, 6, NULL, '2021-06-09 13:20:04'),
(55, 'images/properties/1702116293202158.jpg', 0, 6, NULL, '2021-06-09 13:20:04'),
(56, 'images/properties/1702116851655759.jpg', 0, 7, NULL, '2021-06-09 13:28:51'),
(57, 'images/properties/1702116851750826.jpg', 0, 7, NULL, '2021-06-09 13:28:51'),
(58, 'images/properties/1702116851839130.jpg', 0, 7, NULL, '2021-06-09 13:28:51'),
(59, 'images/properties/1702116851911651.jpg', 1, 7, NULL, '2021-06-09 13:28:51'),
(60, 'images/properties/1702116852064738.jpg', 0, 7, NULL, '2021-06-09 13:28:51'),
(61, 'images/properties/1702117628030537.jpg', 0, 8, NULL, '2021-06-09 13:41:11'),
(62, 'images/properties/1702117628121908.jpg', 1, 8, NULL, '2021-06-09 13:41:11'),
(63, 'images/properties/1702117628193308.jpg', 0, 8, NULL, '2021-06-09 13:41:11'),
(64, 'images/properties/1702117628257016.jpg', 0, 8, NULL, '2021-06-09 13:41:11'),
(65, 'images/properties/1702117628327263.jpg', 0, 8, NULL, '2021-06-09 13:41:11'),
(66, 'images/properties/1702117628475075.jpg', 0, 8, NULL, '2021-06-09 13:41:11'),
(67, 'images/properties/1702117628547980.jpg', 0, 8, NULL, '2021-06-09 13:41:11'),
(68, 'images/properties/1702118325427394.jpg', 0, 9, NULL, '2021-06-09 13:52:14'),
(69, 'images/properties/1702118325642213.jpg', 0, 9, NULL, '2021-06-09 13:52:14'),
(70, 'images/properties/1702118325681870.jpg', 0, 9, NULL, '2021-06-09 13:52:14'),
(71, 'images/properties/1702118325791805.jpg', 0, 9, NULL, '2021-06-09 13:52:14'),
(72, 'images/properties/1702118325879808.jpg', 0, 9, NULL, '2021-06-09 13:52:14'),
(73, 'images/properties/1702118326053187.jpg', 0, 9, NULL, '2021-06-09 13:52:14'),
(74, 'images/properties/1702118326092560.jpg', 0, 9, NULL, '2021-06-09 13:52:14'),
(75, 'images/properties/1702118326131510.jpg', 1, 9, NULL, '2021-06-09 13:52:14'),
(76, 'images/properties/1702119381790563.jpg', 0, 10, NULL, '2021-06-09 14:09:04'),
(77, 'images/properties/1702119381837743.jpg', 1, 10, NULL, '2021-06-09 14:09:04'),
(78, 'images/properties/1702119381943301.jpg', 0, 10, NULL, '2021-06-09 14:09:04'),
(79, 'images/properties/1702119382038509.jpg', 0, 10, NULL, '2021-06-09 14:09:04'),
(80, 'images/properties/1702119382132891.jpg', 0, 10, NULL, '2021-06-09 14:09:04'),
(81, 'images/properties/1702119382171417.jpg', 0, 10, NULL, '2021-06-09 14:09:04'),
(82, 'images/properties/1702119382210924.jpg', 0, 10, NULL, '2021-06-09 14:09:04'),
(83, 'images/properties/1702119382257963.jpg', 0, 10, NULL, '2021-06-09 14:09:04'),
(84, 'images/properties/1702243952902219.jpg', NULL, 1, NULL, NULL),
(86, 'images/properties/1702264392716234.jpg', NULL, 10, NULL, NULL);

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
(30, NULL, NULL, 'hall 1', '50.00', '50.00', 'feet', '2500', 'sq feet', 10);

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
(1, 'BoxRoom4Rend', 'boxroom4rent@gmail.com', NULL, '$2y$10$cPbeplcUm.JkQZf0eejZkuPPwqFiy6o8K.2Q1qpi6wxMXP7cfoakG', NULL, '2021-06-09 09:26:23', '2021-06-09 09:26:23');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proparties`
--
ALTER TABLE `proparties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `proparty_types`
--
ALTER TABLE `proparty_types`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
