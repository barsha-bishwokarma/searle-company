-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2026 at 12:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `searle_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1778403348),
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1778403348;', 1778403348);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`, `parent_id`) VALUES
(13, 'Pharmaceutical', 'pharmaceutical', NULL, NULL, '2026-04-27 01:43:51', '2026-04-27 01:43:51', NULL),
(14, 'Biopharmaceutical', 'biopharmaceutical', NULL, NULL, '2026-04-27 01:45:32', '2026-04-27 01:45:32', NULL),
(15, 'Nutraceutical', 'nutraceutical', NULL, NULL, '2026-04-27 01:47:55', '2026-04-27 01:47:55', NULL),
(16, 'Nutrition', 'nutrition', NULL, NULL, '2026-04-27 01:48:23', '2026-04-27 01:48:23', NULL),
(17, 'Consumer', 'consumer', NULL, NULL, '2026-04-27 01:48:49', '2026-04-27 01:48:49', NULL),
(18, 'Medical Devices and Disposables', 'medical-devices-and-disposables', NULL, NULL, '2026-04-27 01:49:52', '2026-04-27 01:49:52', NULL),
(19, 'Analgesic & Muscle-Relaxant', 'analgesic-muscle-relaxant', NULL, NULL, '2026-04-27 02:06:13', '2026-04-27 02:06:13', 13),
(20, 'Anti-Allergy & Anti-Tussive', 'anti-allergy-anti-tussive', NULL, NULL, '2026-04-27 02:06:36', '2026-04-27 02:06:36', 13),
(21, 'Gastrointestinal', 'gastrointestinal', NULL, NULL, '2026-04-27 02:06:59', '2026-04-27 02:06:59', 13),
(22, 'Hepatology', 'hepatology', NULL, NULL, '2026-04-27 02:07:26', '2026-04-27 02:07:26', 13),
(23, 'Orthopedics & Rheumatology', 'orthopedics-rheumatology', NULL, NULL, '2026-04-27 02:07:56', '2026-04-27 02:07:56', 13),
(24, 'Respiratory', 'respiratory', NULL, NULL, '2026-04-27 02:08:30', '2026-04-27 02:08:30', 13),
(25, 'Herbal Supplements', 'herbal-supplements', NULL, NULL, '2026-04-27 02:09:50', '2026-04-27 02:09:50', 15),
(26, 'Probiotics & Enzymes', 'probiotics-enzymes', NULL, NULL, '2026-04-27 02:10:08', '2026-04-27 02:10:08', 15),
(27, 'Vitamins & Minerals', 'vitamins-minerals', NULL, NULL, '2026-04-27 02:10:29', '2026-04-27 02:10:29', 15),
(28, 'Baby Cereals', 'baby-cereals', NULL, NULL, '2026-04-27 02:14:43', '2026-04-27 02:14:43', 16),
(29, 'Clinical Nutrition', 'clinical-nutrition', NULL, NULL, '2026-04-27 02:15:08', '2026-04-27 02:15:08', 16),
(30, 'Mead Johnsons Division', 'mead-johnsons-division', NULL, NULL, '2026-04-27 02:15:34', '2026-04-27 02:15:34', 15),
(31, 'Nurtumil Division', 'nurtumil-division', NULL, NULL, '2026-04-27 02:16:05', '2026-04-27 02:16:05', 16),
(32, 'Nurture Intelligence Division', 'nurture-intelligence-division', NULL, NULL, '2026-04-27 02:16:24', '2026-04-27 02:16:24', 16),
(33, 'Blood Transfusion', 'blood-transfusion', NULL, NULL, '2026-04-27 02:18:24', '2026-04-27 02:18:24', 18),
(34, 'Critical Care & Anaesthesia', 'critical-care-anaesthesia', NULL, NULL, '2026-04-27 02:18:46', '2026-04-27 02:18:46', 18),
(35, 'IV Administration', 'iv-administration', NULL, NULL, '2026-04-27 02:19:07', '2026-04-27 02:19:07', 18),
(36, 'Ophthalmology', 'ophthalmology', NULL, NULL, '2026-04-27 02:19:45', '2026-04-27 02:19:45', 18);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'barsha', 'bishwokarma', '98113645049', 'barsha49@gmail.com', 'oiuer[ewr', '2026-05-09 10:10:07', '2026-05-09 10:10:07'),
(2, 'barsha', 'bishwokarma', '98113645049', 'barsha49@gmail.com', 'ppppppppppp', '2026-05-09 12:00:41', '2026-05-09 12:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plant_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `plant_name`, `image`, `description`, `location`, `created_at`, `updated_at`) VALUES
(5, 'Searle-Bel Belgium Plant', 'facilities/01KPZ19NGZTDKJ0NGPXPAXV976.jpg', 'hhhhhhhhh', 'Rue de la fagne 6, 4920 Harzé, Belgium', '2026-04-24 00:17:09', '2026-04-24 00:17:09'),
(6, 'Searle Pharmaceutical Plant S.I.T.E', 'facilities/01KPZ1KK0K850RQ052AE6RBW22.jpg', 'Searle is operating to lead in improving the quality of human life. It is among the most rapidly growing pharmaceutical companies that was originally founded in the USA in 1888 by Gideon D. Searle. It was incorporated as a Private Limited Company in Pakistan in 1965 as a subsidiary of G.D. Searle & Co., USA. In 1965 inception of Searle as G.D. Searle Co. USA. Where the production of Aldactone, Lomotil, Diodoquin, Ovulen, Neomycin Sulphate, Probanthine, and Hydryllin started.', 'F-319, S.I.T.E. Area, Karachi', '2026-04-24 00:22:34', '2026-04-24 00:22:34'),
(7, 'Searle HealthCare', 'facilities/01KPZ1QJCTXP87Z7XXSNPVSAG3.jpg', 'Searle Healthcare Division was established in September 2020 to cater to nutrition supplement category products. The facility covers an area of 8000 sq. ft. It is a dedicated facility for healthcare products including Nutraceuticals & Probiotics. The state-of-the-art manufacturing facility has the following sections;\n\nTablet Section (Nutraceutical)', 'F-319, S.I.T.E. Area, Karachi', '2026-04-24 00:24:45', '2026-04-24 00:24:45'),
(8, 'Nextar, Searle Biosciences (Pvt.) Limited', 'facilities/01KPZ1VG5Y36ZXNBQY7415MKHR.jpg', 'Searle Biosciences (Pvt.) Limited aims for a strong global standing in the development and manufacture of Biosimilar Products and dedicates itself to improving the local and global healthcare system', 'E-58 Port Qasim , karachi', '2026-04-24 00:26:54', '2026-04-24 00:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `governances`
--

CREATE TABLE `governances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `governances`
--

INSERT INTO `governances` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Board of Directors', '<table><tbody><tr><td rowspan=\"1\" colspan=\"1\"><p>Mr. Arshad Anis</p></td><td rowspan=\"1\" colspan=\"1\"><p>Chairman</p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Mr. Tahir Ahmed</p></td><td rowspan=\"1\" colspan=\"2\"><p>Chief Executive Officer</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Mr. S. Nadeem Ahmed</p></td><td rowspan=\"1\" colspan=\"2\"><p>Executive Director</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Mr. Zubair Razzak Palwala</p></td><td rowspan=\"1\" colspan=\"2\"><p>Non-Executive Director</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Mr. Munis Abdullah</p></td><td rowspan=\"1\" colspan=\"2\"><p>Non-Executive Director</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Ms. Shaista Khaliq Rehman</p></td><td rowspan=\"1\" colspan=\"2\"><p>Independent Director</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Vacant</p></td><td rowspan=\"1\" colspan=\"2\"><p>Independent Director</p></td></tr></tbody></table>', '2026-05-07 02:38:59', '2026-05-07 02:38:59'),
(2, 'Audit committee', '<table><tbody><tr><td rowspan=\"1\" colspan=\"1\"><p>Ms. Shaista Khaliq Rehman</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"334\"><p>Chairperson</p></td><th rowspan=\"1\" colspan=\"1\" data-colwidth=\"25\"><p></p></th></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Mr. Zubair Razzak Palwala</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"334\"><p>Member</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"25\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Mr. Munis Abdullah</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"334\"><p>Member</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"25\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Mr. Mudassir Habib Khan</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"334\"><p>Secretary</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"25\"><p></p></td></tr></tbody></table>', '2026-05-07 03:00:37', '2026-05-07 03:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`id`, `title`, `file`, `type`, `language`, `created_at`, `updated_at`) VALUES
(2, 'Notice of agm', '01KQ19DCC8F4QNDNH0J4TTCJ7X.pdf', 'agm', 'en', '2026-04-24 21:17:29', '2026-05-09 10:23:56'),
(3, 'Notice of agm', '01KQ19GMYQ29Y10G4QEV5NNV0Q.pdf', 'agm', 'ur', '2026-04-24 21:19:16', '2026-05-09 10:23:56'),
(4, 'Proxy form', '01KQ19JPBAH4WYZFZWG976ZYW5.pdf', 'agm', 'en', '2026-04-24 21:20:23', '2026-05-09 10:23:56'),
(5, 'Notice of EOGM', '01KQ1AGRPVXF5WRAY6XP6HBT2C.pdf', 'eogm', 'en', '2026-04-24 21:36:48', '2026-05-09 10:23:56'),
(6, 'Website Compliance Certificate', '01KQ1AM6ZAN796CS71S309X8CH.pdf', 'website_compliance', 'en', '2026-04-24 21:38:41', '2026-05-09 10:23:56'),
(7, 'Proxy form', '01KQ1ARE6DHR573ESYWH7153DA.pdf', 'eogm', 'ur', '2026-04-24 21:40:59', '2026-05-09 10:23:56'),
(8, 'Corporate Briefing Session 2022', '01KQ1CRKVW3DPATHM6ZY8WB4T9.pdf', 'corporate_briefing', 'en', '2026-04-24 22:16:02', '2026-05-09 10:23:56'),
(9, '1st Quarter Report 30-09-2024', '01KQ1HKX471NATMPAWS2D4SD39.pdf', 'financial_report', 'en', '2026-04-24 23:40:51', '2026-05-09 10:23:56'),
(10, '2nd Quarter Report 31-12-2024', '01KQ1HP5WRKTBZQ9ZSRW41ZK5Y.pdf', 'financial_report', 'en', '2026-04-24 23:42:05', '2026-05-09 10:23:56'),
(11, 'Annual Report 2024', '01KQ1HRX3F9XEP0R3WYBA7ZNH7.pdf', 'financial_report', 'en', '2026-04-24 23:43:35', '2026-05-09 10:23:56'),
(12, 'Annual Report 2023', '01KQ1HTH56T2AEYWVNXKVFAHRW.pdf', 'financial_report', 'en', '2026-04-24 23:44:28', '2026-05-09 10:23:56'),
(13, 'Annual Report 2022', '01KQ1HZVZ95XZ9VAN99G41KBQF.pdf', 'financial_report', 'en', '2026-04-24 23:47:23', '2026-05-09 10:23:56'),
(14, 'Financial Highlights', '01KQ1J1G4CY059NZBRYE4RXYKT.pdf', 'financial_highlights', 'en', '2026-04-24 23:48:16', '2026-05-09 10:23:56'),
(15, 'Ratio Analysis', '01KQ1J6X7TB5W80S8NVT2AK1P4.pdf', 'ratio_analysis', 'en', '2026-04-24 23:51:14', '2026-05-09 10:23:56'),
(16, 'Shareholder Information Form', '01KQ1JA8196QC5NGX85J2J884S.pdf', 'shareholder_form', 'en', '2026-04-24 23:53:03', '2026-05-09 10:23:56'),
(17, 'Final Notice to Shareholders', '01KQ1JC3PN37H79WS3RPX9SM1X.pdf', 'shareholder_form', 'en', '2026-04-24 23:54:04', '2026-05-09 10:23:56'),
(18, 'Pattern of Shareholding 2024', '01KQ1JG692HBDD0EC2J8SNHH5C.pdf', 'shareholding_pattern', 'en', '2026-04-24 23:56:18', '2026-05-09 10:23:56'),
(19, 'Notice of EOGM', '01KR0WMKQXZKRFW5PBEHC4C0HH.pdf', 'information', 'en', '2026-05-07 03:49:56', '2026-05-07 03:49:56'),
(20, 'List of total unclaimed dividend and shares', '01KR0WYAB5VTMFNB9S1PG1QQW8.pdf', 'information', 'en', '2026-05-07 03:55:14', '2026-05-07 03:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `investor_queries`
--

CREATE TABLE `investor_queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `postal_address` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `postal_zip` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `interest` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investor_queries`
--

INSERT INTO `investor_queries` (`id`, `name`, `organization`, `postal_address`, `city`, `postal_zip`, `country`, `email`, `telephone`, `fax`, `url`, `interest`, `message`, `created_at`, `updated_at`) VALUES
(1, 'barsa', 'ekl', '30493', 'drn', '3090489', 'NEP', 'barsha49@gmail.com', '98113645049', NULL, NULL, NULL, 'OOIUU', '2026-05-09 11:04:31', '2026-05-09 11:04:31'),
(2, 'Barsha Bishwokarma', 'codeit', '500700', 'drn', '039409', 'nepal', 'bishwokarmabarsha@gmail.com', '025677', NULL, NULL, NULL, 'hey saddie! how\'re you doing?', '2026-05-09 11:05:46', '2026-05-09 11:05:46'),
(3, 'Barsha Bishwokarma', 'codeit', '500700', 'drn', '039409', 'nepal', 'bishwokarmabarsha@gmail.com', '025677', NULL, NULL, NULL, 'k xa khabar vukkad', '2026-05-09 12:03:26', '2026-05-09 12:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `description`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'Membership of industry association', '<p>PPMA: MS-082</p>', NULL, '2026-05-07 04:27:12', '2026-05-07 04:27:12'),
(2, 'Gender Pay Gap Statement', '<p>Gender Pay Gap Statement</p>', '01KR5SP60QM56EY6AW5Z126AB1.pdf', '2026-05-09 01:34:34', '2026-05-09 01:34:34'),
(3, 'Last date of website update', '<p>Last update on: May 9, 2026</p>', NULL, '2026-05-09 01:35:57', '2026-05-09 01:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_04_20_071910_create_brands_table', 2),
(5, '2026_04_20_072006_create_categories_table', 2),
(6, '2026_04_20_072650_create_products_table', 2),
(7, '2026_04_20_075640_create_facilities_table', 2),
(8, '2026_04_20_075806_create_news_table', 2),
(9, '2026_04_20_075953_create_contacts_table', 2),
(10, '2026_04_20_080020_create_partners_table', 2),
(11, '2026_04_20_080102_create_investors_table', 2),
(12, '2026_04_23_022044_add_parent_id_to_categories_table', 3),
(13, '2026_04_23_022628_add_fields_to_products_table', 3),
(14, '2026_04_23_022949_remove_brand_id_from_products_table', 3),
(15, '2026_04_25_142251_update_products_table_add_fields', 4),
(16, '2026_05_05_083005_create_partners_table', 5),
(17, '2026_05_05_091659_remove_logo_from_partners_table', 6),
(18, '2026_05_06_090147_create_directors_table', 7),
(19, '2026_05_06_090338_create_governance_items_table', 7),
(20, '2026_05_06_150600_create_governances_table', 8),
(21, '2026_05_06_160803_add_type_to_governances_table', 9),
(22, '2026_05_07_020158_create_company_profiles_and_related_tables', 10),
(23, '2026_05_07_060604_create_company_profiles_table', 11),
(24, '2026_05_07_071213_create_profile_companies_table', 12),
(25, '2026_05_07_080906_create_governances_table', 13),
(26, '2026_05_07_094655_create_media_table', 14),
(27, '2026_05_07_100744_make_pdf_nullable_in_media_table', 15),
(28, '2026_05_09_143334_create_investor_queries_table', 16),
(29, '2026_05_09_155341_create_contacts_table', 17),
(30, '2026_05_10_074048_create_site_settings_table', 18),
(31, '2026_05_10_090607_create_nav_items_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `nav_items`
--

CREATE TABLE `nav_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav_items`
--

INSERT INTO `nav_items` (`id`, `label`, `url`, `parent_id`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Home', '/', NULL, 1, 1, '2026-05-10 04:25:44', '2026-05-10 04:31:08'),
(2, 'About Us', '/about', NULL, 2, 1, '2026-05-10 04:28:45', '2026-05-10 04:32:59'),
(3, 'Products', '/product', NULL, 3, 1, '2026-05-10 04:35:13', '2026-05-10 04:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `slug`, `published_at`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(2, 'Dr. Syed Nadeem Ahmed has been appointed as “Ambassador-at- Large” by Mr. Muhammad Shehbaz Sharif', '𝗗𝗿. 𝗦𝘆𝗲𝗱 𝗡𝗮𝗱𝗲𝗲𝗺 𝗔𝗵𝗺𝗲𝗱 (CEO, The Searle Company Limited) has been appointed as “𝗔𝗺𝗯𝗮𝘀𝘀𝗮𝗱𝗼𝗿-𝗮𝘁- 𝗟𝗮𝗿𝗴𝗲” by 𝗠𝗿. 𝗠𝘂𝗵𝗮𝗺𝗺𝗮𝗱 𝗦𝗵𝗲𝗵𝗯𝗮𝘇 𝗦𝗵𝗮𝗿𝗶𝗳 (Honorable Prime Minister Islamic Republic of Pakistan). This prestigious appointment recognizes his significant contributions to the Healthcare sector of Pakistan and its positive influence on the overall well-being of the country.', '01KQPS2GXR9SXC4C52W0C0H7FJ.jpg', 'dr-syed-nadeem-ahmed-has-been-appointed-as-ambassador-at-large-by-mr-muhammad-shehbaz-sharif', '2026-05-03 11:20:05', '𝗗𝗿. 𝗦𝘆𝗲𝗱 𝗡𝗮𝗱𝗲𝗲𝗺 𝗔𝗵𝗺𝗲𝗱 (CEO, The Searle Company Limited) has been appointed as “𝗔𝗺𝗯𝗮𝘀𝘀𝗮𝗱𝗼𝗿-𝗮𝘁- 𝗟𝗮𝗿𝗴𝗲” by 𝗠𝗿. 𝗠𝘂𝗵𝗮𝗺𝗺𝗮𝗱 𝗦𝗵𝗲𝗵𝗯𝗮𝘇 𝗦𝗵𝗮𝗿𝗶𝗳 (Honorable Prime Minister Islamic Republic of Pakistan). This prestigious appointment recognizes his significant contributions to the Healthcare sector of Pakistan and its positive influence on the overall well-being of the country.', NULL, '2026-05-03 05:35:13', '2026-05-03 05:35:13'),
(3, 'Dr. Syed Nadeem Ahmed met with Mr. Mian Muhammad Shehbaz Sharif', 'Dr. Syed Nadeem Ahmed (Group Managing Director IBL & CEO The Searle Company Limited) met with Mr. Mian Muhammad Shehbaz Sharif (Honorable Prime Minister Islamic Republic of Pakistan)\n\nIn a meeting held at Islamabad on January 4, 2023, Mr. Syed Nadeem Ahmed explained to the Honourable Prime Minister about the latest challenges being faced by the Pharmaceutical Industry of Pakistan and their possible solutions.\n\nOur heartfelt gratitude to the Prime Minister for taking time and listening during the current economic downturn.\n\nRecent key challenges include expected shortages of medicines due to an increase in the rate of materials and production costs, along with problems faced in the importation/clearance of materials. Further, Mr. Ahmed also shared his thoughts on up-gradation of the regulatory authority & framework which can expedite the licensing, product registration & price fixation process of the pharmaceutical products.\n\nThe prime minister assured his best support to facilitate Pakistan’s pharmaceutical industry in ensuring a smooth supply of the medicines.', '01KQPW41WNN22SBG7Z80PEH6HS.jpg', 'dr-syed-nadeem-ahmed-met-with-mr-mian-muhammad-shehbaz-sharif', '2026-05-03 12:13:24', 'Dr. Syed Nadeem Ahmed (Group Managing Director IBL & CEO The Searle Company Limited) met with Mr. Mian Muhammad Shehbaz Sharif (Honorable Prime Minister Islamic Republic of Pakistan) In a meeting held at Islamabad on January 4, 2023, Mr. Syed Nadeem Ahmed explained to the Honourable Prime Minister about the latest challenges being faced by', NULL, '2026-05-03 06:28:29', '2026-05-03 06:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner_name`, `created_at`, `updated_at`) VALUES
(1, 'Alfa Vitamins Laboratories Inc. , USA', '2026-05-05 03:39:21', '2026-05-05 03:39:21'),
(2, 'Astra Zeneca , UK', '2026-05-05 03:51:59', '2026-05-05 03:51:59'),
(3, 'Belourhte S.A. , Belgium', '2026-05-05 03:52:16', '2026-05-05 03:52:16'),
(4, 'Biosidus S.A. , Argentina', '2026-05-05 03:52:27', '2026-05-05 03:52:27'),
(5, 'Beximco Pharma, Bangladesh', '2026-05-05 03:52:38', '2026-05-05 03:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `generic` varchar(255) DEFAULT NULL,
  `ingredients` varchar(255) DEFAULT NULL,
  `form` varchar(255) DEFAULT NULL,
  `strength` varchar(255) DEFAULT NULL,
  `presentation` text DEFAULT NULL,
  `indication` text DEFAULT NULL,
  `uses` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `generic`, `ingredients`, `form`, `strength`, `presentation`, `indication`, `uses`, `image`, `pdf`, `slug`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(7, 21, 'AcoEaze', 'Acotiamide', NULL, 'Tablets', '100mg', '20\'s', 'Functional Dyspepsia', NULL, '01KQ700VWTB1YG3WWYX2DYJVPE.jpg', '01KQ700VX3VJW2SFEKM26WS3PN.pdf', 'acoeaze', NULL, NULL, '2026-04-27 02:28:48', '2026-04-27 02:28:48'),
(8, 21, 'Adosetron', 'Ondansetron', NULL, 'Injection & Tablet', 'Injection: 8mg/4ml,  Tablet: 8mg', 'Injection: Pack of 5\'s x 4ml, Tablet: Pack of 12\'s', 'To prevent nausea and vomiting caused by cancer chemotherapy, radiation therapy or surgery', NULL, '01KQBH7E0T4BKNWHDYGATC5GH3.jpg', '01KQBH7E18GWDAJHY15AR90XQ0.pdf', 'adosetron', NULL, NULL, '2026-04-28 20:46:27', '2026-04-28 20:46:27'),
(9, 23, 'Adronil', 'Ibandronate Sodium', NULL, 'Tablets & Injection', 'Tablet: 150mg, Injection: 3mg/3m', 'Tablet: Pack of 1\'s, Injection: Pack of 1\'s', 'For treatment of postmenopausal osteoporosis to reduce risk of fractures', NULL, '01KQBHGJ0T3N56AN4794WE71TZ.jpg', '01KQBHGJ1862M0PFDKKMYEKSV2.pdf', 'adronil', NULL, NULL, '2026-04-28 20:51:26', '2026-04-28 20:51:26'),
(10, 23, 'Bufexo', 'Ibuprofen', NULL, 'Tablet', '400mg', 'Pack of 10\'s', 'Relief of mild to moderate pain, fever and inflammation', NULL, '01KQBHNQMB6XPHB5WTZG54TBDJ.jpg', '01KQBHNQNXPW3716ZPMKA125DV.pdf', 'bufexo', NULL, NULL, '2026-04-28 20:54:15', '2026-04-28 20:54:15'),
(11, 14, 'Cizumab', 'Bevacizumab', NULL, 'Injection', '100mg/4ml & 400mg/16ml', 'Pack of 1\'s', 'Treatment of various cancers', NULL, '01KQBJBYM788Q5RK84HG55PABH.jpg', '01KQBJBYMJTY6XZZVVD259JSJ7.pdf', 'cizumab', NULL, NULL, '2026-04-28 21:06:23', '2026-04-28 21:06:23'),
(12, 14, 'Actinib', 'Tofacitinib', NULL, 'Tofacitinib', '5mg & 10mg', 'Available in pack of 10’s', 'Rheumatoid Arthritis, Ankylosing Spondylitis, Psoriatic Arthritis, Juvenile Idiopathic Arthritis, Ulcerative Colitis.', NULL, '01KQBJH8EMDT7FAAM753RKV3KY.png', '01KQBJH8F3436EXXA7AA2D0C2N.pdf', 'actinib', NULL, NULL, '2026-04-28 21:09:17', '2026-04-28 21:09:17'),
(13, 25, 'Hylixia', 'Ivy Leaf Extract', NULL, 'Syrup & Drops', 'Syrup: 35mg/5ml  Drops: 20mg/ml', 'Syrup: Available in pack of 120ml\n\nDrops: Available in pack of 20ml\n\n', 'It provide relief from excess mucus and painful coughing bouts. It act as expectorant and help in reducing chest congestion involving hoarseness of voice', NULL, '01KQBJW6VKVN3KNSGZX5Q2D74C.png', '01KQBJW6W0GH66PN6YYA3ER60X.pdf', 'hylixia', NULL, NULL, '2026-04-28 21:15:16', '2026-04-28 21:15:16'),
(14, 25, 'Hylixia plus', 'Ivy Leaf Extract + Thyme + Licorice', NULL, 'Syrup', '35mg + 20mg + 25mg', 'Available in pack of 120ml\n\n', 'Expectorant', NULL, '01KQBK339BW8919RY8PXQYH9YR.png', NULL, 'hylixia-plus', NULL, NULL, '2026-04-28 21:19:02', '2026-04-28 21:19:02'),
(15, 26, 'Combined Clostridium Butyricum & Bifidobacterium Powder (Gutcare)', 'Bifidobacterium + Clostridium Butyricum', NULL, 'Sachet, Capsule', '500mg (Not less than 1.0×107 CFU & 1.0×106 CFU)', 'Sachet: Available in pack of 10’s\n\nCapsule: Available in pack of 12’s', 'Acute diarrhea resulting from acute and non specific infections & Intestinal flora inbalance caused by antibiotics', NULL, '01KQBKBRW9M38R5R6DWXZ69XKT.jpg', NULL, 'combined-clostridium-butyricum-bifidobacterium-powder-gutcare', NULL, NULL, '2026-04-28 21:23:46', '2026-04-28 21:23:46'),
(16, 27, 'Essential Plus', 'Multivitamin & mineral', NULL, 'Tablet', 'NA', 'Available in pack of 30’s', 'Helps aid the normal function of the immune system, the heart and support general wellbeing', NULL, '01KQBKKFKHRYBADQWA9DPXCJGZ.jpg', '01KQBKKFKX3J393VSGHA76GCFE.pdf', 'essential-plus', NULL, NULL, '2026-04-28 21:27:59', '2026-04-28 21:27:59'),
(17, 28, 'Prep-Up Rice', NULL, NULL, 'cereal', NULL, '175g Powder in Soft Pack', NULL, 'Prep-Up Rice is the safest choice as the first weaning food for infants because it contains single ingredient to avoid food allergies. It is the best choice for the nutritional management during diarrhea as its completely lactose free', '01KQEE7RRKJGX7PMMK9P9PSXWF.jpg', NULL, 'prep-up-rice', NULL, NULL, '2026-04-29 23:51:55', '2026-04-29 23:51:55'),
(18, 28, 'Prep-Up Rice Milk', NULL, NULL, 'cereal', NULL, 'Available in tin pack of 175g', NULL, 'Supplement to provide healthy weaning choices to the baby.', '01KQEEBFEKA8B2TP7TPFDXD7TM.jpg', NULL, 'prep-up-rice-milk', NULL, NULL, '2026-04-29 23:53:57', '2026-04-29 23:53:57'),
(19, 30, 'Enfagrow A+3', NULL, NULL, 'Dry Powder Milk', NULL, 'Available in tin pack of 400g & 800g', NULL, 'Stage 3 – Nutrition formula for children for 1-3 years', '01KQEEFHTYQG6ZWFAJA7DG5BCX.jpg', NULL, 'enfagrow-a3', NULL, NULL, '2026-04-29 23:56:10', '2026-04-29 23:56:10'),
(20, 30, 'Enfagrow A+4', NULL, NULL, 'Dry Powder Milk', NULL, 'Available in tin pack of 400g & 800g', NULL, 'Stage 4 – Nutrition formula for children for 3 years and above', '01KQEEHNGQAQ235YP7T5V4BY58.jpg', NULL, 'enfagrow-a4', NULL, NULL, '2026-04-29 23:57:19', '2026-04-29 23:57:19'),
(21, 30, 'Enfamama A+', NULL, NULL, NULL, NULL, 'Available in tin pack of 400g', NULL, 'Available in tin pack of 400g', '01KQEEMHJQCFZGSMFEPFE2FHXE.jpg', NULL, 'enfamama-a', NULL, NULL, '2026-04-29 23:58:54', '2026-04-29 23:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `profile_companies`
--

CREATE TABLE `profile_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_companies`
--

INSERT INTO `profile_companies` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Details of permissible of business activities', '<p>The main objective of the Company is to manufacture, process, refine, sell buy and deal in drugs, drug sundries, chemical, gynecic, therapeutical, antibiotic, pharmaceutical, herbal, bacteriological and biological products and presentations of all kinds and household, industrial, patent and proprietary articles or every description.</p>', '2026-05-07 01:39:59', '2026-05-07 01:39:59'),
(2, 'Company registrations', '<table><tbody><tr><td rowspan=\"1\" colspan=\"1\"><p>Company Registration #</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"364\"><p>0002161</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>National Tax Number</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"364\"><p>0712026-5</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Sales Tax Registration #</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"364\"><p>02-01-2100-002-82</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Karachi Chamber of Commerce and Industry</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"364\"><p>33104</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Drugs Manufacturing Licence #</p></td><td rowspan=\"1\" colspan=\"1\" data-colwidth=\"364\"><p>000016 (Karachi Plant)<br>000647 (Lahore Plant)</p></td></tr></tbody></table>', '2026-05-07 01:46:47', '2026-05-07 03:27:18'),
(3, 'Registered office and production facilities', '<p><strong>Head Office:</strong><br>One IBL Centre, 2nd Floor, Plot # 1,<br>Block 7 &amp; 8, D.M.C.H.S,<br>Tipu Sultan Road, Off Shahra-e-Faisal,<br>Karachi – Pakistan.<br>Tel: +92 21 371 70 200-201<br>Fax: +92 21 371 70 224-225<br>Email : <a href=\"mailto:info@searlecompany.com\">info@searlecompany.com</a></p><p><strong>Factory (Karachi):</strong><br>F-319, S.I.T.E., Karachi<br>Tel: 92-21-3257 8001 (7 lines)<br>Fax: 92-21-3256 4667</p><p><strong>Factory (Lahore):</strong><br>32-Km Multan Road, Lahore<br>Tel: 92-42-3616 9990, 3616 9992<br>Fax: 92-42-3538 0040</p><p><strong>Searle Consumer Plant (Karachi):</strong><br>Plot No. E-44 &amp; E-45, Northwestern<br>Industrial Zone, Port Qasim, Karachi.<br>Tell: 021-34154055</p>', '2026-05-07 02:05:40', '2026-05-07 02:05:40'),
(4, 'Detail of associated company', '<table><tbody><tr><td rowspan=\"1\" colspan=\"1\"><p>International Brands (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><th rowspan=\"1\" colspan=\"1\"><p></p></th></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>IBL HealthCare Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblhc.com/\">www.iblhc.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Searle Pharmaceuticals (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Searle Laboratories (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Searle BioSciences (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>IBL Future Technologies (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.ft.com.pk/\">www.ft.com.pk</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Nextar Pharma (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Searle IV Solutions (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Stellar Ventures (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>IBL Frontier Markets (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Prime Health (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>MyCart (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.mycart.pk/\">www.mycart.pk</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>United Brands Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>IBL Operations (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>IBL Logistic (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>IBL Unisys (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Universal Ventures (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>United Retail (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Universal Retail (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>The IBL Company (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>IBL Holding (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Rashid Abdulla Foundation</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.iblgrp.com/\">www.iblgrp.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>The Recovery House</p></td><td rowspan=\"1\" colspan=\"1\"><p>–</p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>The Citizen Foundation</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"http://www.tcf.org.pk/\">www.tcf.org.pk</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Lumina Consultancy Services (SMC-Pvt) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p>–</p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Management Association of Pakistan</p></td><td rowspan=\"1\" colspan=\"1\"><p>–</p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Xenith PR (Private) Limited</p></td><td rowspan=\"1\" colspan=\"1\"><p><a href=\"https://xenithpr.com/\">https://xenithpr.com</a></p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p>Charity Right Pakistan</p></td><td rowspan=\"1\" colspan=\"1\"><p>–</p></td><td rowspan=\"1\" colspan=\"1\"><p></p></td></tr></tbody></table>', '2026-05-07 02:09:01', '2026-05-07 02:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FcOuxkCT1Fy11giCO2wy1FqjOG4We6CE0ViXno4d', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36 Edg/147.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiU1VLUXV1czQyVzBsYUVmOEJicVlkZWoyeHhKU21wc2ZENVJkODlWaiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToyOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjtzOjU6InJvdXRlIjtzOjQ6ImhvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2NDoiYzY3NDVjYzcwYjBiYzk5MzdlOWVkZDM2NmRiZWYzZjdjNmZhMTY3YzE5ODk4OTA3YzA1OTMyZWZmNjY3NmU0MCI7czo2OiJ0YWJsZXMiO2E6Mjp7czo0MDoiNmQ2MTlkMDBjYmE4MTFjOTczNjUxM2JjMTZkMmJjNmFfY29sdW1ucyI7YTo1OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6Mzoia2V5IjtzOjU6ImxhYmVsIjtzOjM6IktleSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToidmFsdWUiO3M6NToibGFiZWwiO3M6NToiVmFsdWUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6InR5cGUiO3M6NToibGFiZWwiO3M6NDoiVHlwZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImNyZWF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IkNyZWF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IlVwZGF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO319czo0MDoiNzc3ZTI4OTAzODQ0ZTllNWU0MTZhOTFkNzgyOWUzYTBfY29sdW1ucyI7YTo3OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToibGFiZWwiO3M6NToibGFiZWwiO3M6NToiTGFiZWwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjM6InVybCI7czo1OiJsYWJlbCI7czozOiJVcmwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJwYXJlbnQubGFiZWwiO3M6NToibGFiZWwiO3M6NjoiUGFyZW50IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJvcmRlciI7czo1OiJsYWJlbCI7czo1OiJPcmRlciI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6OToiaXNfYWN0aXZlIjtzOjU6ImxhYmVsIjtzOjY6IkFjdGl2ZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImNyZWF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IkNyZWF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO31pOjY7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IlVwZGF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO319fXM6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1778409749),
('ij9WSy4v0dETUsO8BU914W5HVPGVm4UdIl88FBmg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.119.0 Chrome/142.0.7444.265 Electron/39.8.8 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzFZeVUyaUNPN1ZmaHd5eFVOSnNiemdxdWdwM0pqMTI5aHpydWhoNSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1778407042);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `key`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'logo', '01KR8HHHYX8B66K6P4EDH0ND24.png', 'image', '2026-05-10 03:09:57', '2026-05-10 03:09:57'),
(2, 'email', 'info@searlecompany.com ', 'text', '2026-05-10 03:11:43', '2026-05-10 03:11:43'),
(3, 'address', 'One IBL Centre - Karachi', 'text', '2026-05-10 03:12:09', '2026-05-10 03:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Barsha Bishwokarma', 'bishwokarmabarsha49@gmail.com', NULL, '$2y$12$Au23ONAYXkoYgYN8iCjk8e5ebhTERjK58jYjWQ8aFLz28CkqXQGk.', '3Cluyqa4YUSczm0aQMkO3v7A4O5PLo3ef1cA0ju845UaqEZAUEEQ3S3EygmD', '2026-04-21 23:59:20', '2026-04-21 23:59:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `governances`
--
ALTER TABLE `governances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_queries`
--
ALTER TABLE `investor_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_items`
--
ALTER TABLE `nav_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nav_items_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `profile_companies`
--
ALTER TABLE `profile_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `site_settings_key_unique` (`key`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `governances`
--
ALTER TABLE `governances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `investor_queries`
--
ALTER TABLE `investor_queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `nav_items`
--
ALTER TABLE `nav_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `profile_companies`
--
ALTER TABLE `profile_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `nav_items`
--
ALTER TABLE `nav_items`
  ADD CONSTRAINT `nav_items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `nav_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
