-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2024 at 01:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `link`, `image`, `type`, `created_at`, `updated_at`) VALUES
(1, 'https://github.com/afzal-swe/Today-News-newsportal-project-Dynamic/commits/main', 'images/ads/66a97b553e479.jpg', 2, '2024-07-30 17:46:29', '2024-07-30 18:27:23'),
(6, 'https://github.com/afzal-swe/Today-News-newsportal-project-Dynamic/commits/main', 'images/ads/66a98607bc609.png', 1, '2024-07-30 18:32:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_bn`, `category_en`, `slug`, `soft_delete`, `status`, `created_at`, `updated_at`) VALUES
(11, 'বাংলাদেশ', 'Bangladesh', 'banglades', '0', '1', '2024-07-17 03:38:30', NULL),
(12, 'অপরাধ', 'Crime', 'opradh', '0', '1', '2024-07-17 03:39:36', NULL),
(13, 'রাজনীতি', 'Politics', 'rajneeti', '0', '1', '2024-07-17 03:40:09', NULL),
(14, 'বিশ্ব', 'World', 'bisw', '0', '1', '2024-07-17 03:40:44', NULL),
(15, 'বাণিজ্য', 'Trade', 'banijz', '0', '1', '2024-07-17 03:41:14', NULL),
(16, 'মতামত', 'Opinion', 'mtamt', '0', '1', '2024-07-17 03:41:36', NULL),
(17, 'খেলা', 'Sports', 'khela', '0', '1', '2024-07-17 03:41:52', NULL),
(18, 'বিনোদন', 'Entertainment', 'binodn', '0', '1', '2024-07-17 03:42:17', NULL),
(19, 'চাকরি', 'Job', 'cakri', '0', '1', '2024-07-17 03:42:32', NULL),
(20, 'জীবনযাপন', 'Lifestyle', 'jeebnzapn', '0', '1', '2024-07-17 03:43:06', NULL),
(22, 'আন্তর্জাতিক', 'International', 'antrjatik', '0', '1', '2024-07-18 13:42:34', NULL),
(25, 'test', 'test', 'test', '0', NULL, '2024-08-27 18:01:34', '2024-08-27 18:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint UNSIGNED NOT NULL,
  `district_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_bn`, `district_en`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, 'বরিশাল', 'Barisal', 'brisal', '1', '2024-07-18 04:59:07', '2024-07-18 04:59:21'),
(4, 'ঢাকা', 'Dhaka', 'dhaka', '1', '2024-07-18 05:52:52', NULL),
(5, 'চট্টগ্রাম', 'Chittagong', 'cttgram', '1', '2024-07-18 13:50:09', NULL),
(6, 'খুলনা', 'Khulna', 'khulna', '1', '2024-07-18 13:50:52', NULL),
(7, 'সিলেট', 'Sylhet', 'silet', '1', '2024-07-18 13:51:23', NULL),
(8, 'রাজশাহী', 'Rajshahi', 'rajsahee', '1', '2024-07-25 01:33:59', NULL),
(9, 'রংপুর', 'Rangpur', 'rngpur', '1', '2024-07-25 01:34:24', NULL),
(10, 'ময়মনসিংহ', 'Mymensingh', 'mzmnsingh', '1', '2024-07-25 01:34:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livetv`
--

CREATE TABLE `livetv` (
  `id` bigint UNSIGNED NOT NULL,
  `embed_code` text COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livetv`
--

INSERT INTO `livetv` (`id`, `embed_code`, `status`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fr2MRsrzeYM?si=AChfIjYwNXWLYrSQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 1, '2024-07-25 16:40:33', '2024-07-25 16:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_09_124258_create_role_table', 2),
(6, '2024_07_16_210903_create_categories_table', 3),
(7, '2024_07_16_211050_create_subcategory_table', 3),
(8, '2024_07_18_070451_create_districts_table', 4),
(10, '2024_07_18_072846_create_sub_districts_table', 5),
(12, '2024_07_18_121236_create_posts_table', 6),
(13, '2024_07_25_142528_create_socials_table', 7),
(14, '2024_07_25_142726_crate_seos_table', 7),
(15, '2024_07_25_211817_create_prayers_table', 8),
(16, '2024_07_25_215821_create_livetv_table', 9),
(17, '2024_07_25_225245_create_notices_table', 10),
(18, '2024_07_25_233637_create_websites_table', 11),
(21, '2024_07_26_004453_create_photos_table', 12),
(22, '2024_07_26_210701_create_videos_table', 12),
(23, '2024_07_30_223152_create_ads_table', 13),
(25, '2024_07_31_040600_create_settings_table', 14),
(26, '2024_09_03_124357_create_social_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint UNSIGNED NOT NULL,
  `notice_bn` text COLLATE utf8mb4_unicode_ci,
  `notice_en` text COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_bn`, `notice_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aaaaaaaaaasdaf', 'bbbbbbbbbbsadf', 1, '2024-07-25 17:26:02', '2024-08-28 02:07:32');

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo`, `title_bn`, `title_en`, `type`, `created_at`, `updated_at`) VALUES
(1, 'images/photo_gallery/66a77b11720a9.jpg', 'সহিংসতায় নিহতের সংখ্যা জানালো স্বরাষ্ট্র মন্ত্রণালয়', 'The number of people killed in the violence was reported by the Ministry of Home Affairs', '1', '2024-07-29 05:20:49', NULL),
(2, 'images/photo_gallery/66a77c0de8b59.jpg', 'কারফিউ শিথিলের সময় বাড়ল', 'Curfew relaxation time increased', '0', '2024-07-29 05:25:01', NULL),
(3, 'images/photo_gallery/66a77cbf02f75.jpg', '৬ সমন্বয়ক ছাড়া পাচ্ছেন কবে? যা বললেন ডিবিপ্রধান', 'When you get without 6 coordinators? What the DB chief said', '0', '2024-07-29 05:27:59', NULL),
(4, 'images/photo_gallery/66a77ceac966f.jpg', 'চট্টগ্রামে কোটা আন্দোলনকারীদের সঙ্গে ছাত্রলীগের সংঘর্ষ, সাংবাদিক আহত', 'Chhatra League clashes with quota activists in Chittagong, journalist injured', '0', '2024-07-29 05:28:42', NULL),
(5, 'images/photo_gallery/66a77d107b1ea.jpg', 'মোংলা বন্দর দিয়ে প্রথমবার রসুন আমদানি', 'First import of garlic through Mongla port', '0', '2024-07-29 05:29:20', NULL),
(6, 'images/photo_gallery/66a77e947f8af.jpg', 'রসুনের যত স্বাস্থ্য উপকারিতা', 'So many health benefits of garlic', '0', '2024-07-29 05:35:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `cat_id` int DEFAULT NULL,
  `subcat_id` int DEFAULT NULL,
  `dist_id` int DEFAULT NULL,
  `subdist_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_en` text COLLATE utf8mb4_unicode_ci,
  `details_bn` text COLLATE utf8mb4_unicode_ci,
  `tags_en` text COLLATE utf8mb4_unicode_ci,
  `tags_bn` text COLLATE utf8mb4_unicode_ci,
  `headline` int DEFAULT NULL,
  `first_section` int DEFAULT NULL,
  `first_section_thumbnail` int DEFAULT NULL,
  `bigthumbnail` int DEFAULT NULL,
  `post_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `subcat_id`, `dist_id`, `subdist_id`, `user_id`, `title_en`, `title_bn`, `image`, `details_en`, `details_bn`, `tags_en`, `tags_bn`, `headline`, `first_section`, `first_section_thumbnail`, `bigthumbnail`, `post_date`, `post_month`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 12, 13, 3, 38, 8, 'Can\'t accept the way Metrorail has been destroyed: PM1', 'মেট্রোরেল যেভাবে ধ্বংস করেছে মানতে পারছি না: প্রধানমন্ত্রী1', 'images/post_images/66a573568eb43.jpg', 'Prime Minister Sheikh Hasina cannot accept the manner in which the attackers destroyed the metro rail. He said that the countrymen should stand against those who are destroying the development that the government is doing.\r\n\r\nHe said these things while visiting the Mirpur-10 metro rail station which was damaged during the quota movement on Thursday (July 25) morning. At the time, he also said that those who committed this violence should be judged by the people of the country.\r\n\r\nAnd the Prime Minister urged the public to come forward to stop the vandals.\r\n\r\nThe Prime Minister said that it will be ensured that common people can reach the workplace without any problems. Efforts will be made to make the country financially prosperous. It cannot be failed that this country has been freed by people\'s blood.\r\n\r\nRegretfully, Sheikh Hasina said, what kind of mentality is it to destroy the structures that make people\'s lives easier? Although Dhaka city is stuck in traffic jam, metro rail has given relief. I cannot believe that modern technology has destroyed this transport like this.', 'হামলাকারীরা মেট্রোরেল যেভাবে ধ্বংস করেছে তা কোনোভাবেই মানতে পারছেন না প্রধানমন্ত্রী শেখ হাসিনা। \r\n\r\nবৃহস্পতিবার (২৫ জুলাই) সকালে কোটা আন্দোলনের সময় ক্ষতিগ্রস্ত মিরপুর-১০ মেট্রোরেল স্টেশন পরিদর্শনে গিয়ে তিনি এসব কথা বলেন। এসময় তিনি আরও বলেন, এ তাণ্ডব যারা করেছে, তাদের বিচার দেশবাসীকে করতে হবে।\r\n\r\nএবং ধ্বংসযজ্ঞকারীদের রুখে দিতে জনসাধারণকে এগিয়ে আসার আহ্বান জানান প্রধানমন্ত্রী।\r\nপ্রধানমন্ত্রী বলেন, সাধারণ মানুষ যেন নির্বিঘ্নে কর্মক্ষেত্র পৌঁছাতে পারে সেটা সুনিশ্চিত করা হবে। দেশ যেন আর্থিকভাবে সচ্ছল হতে পারে সেই চেষ্টা করা হবে। এ দেশ মানুষ রক্ত দিয়ে স্বাধীন করেছে সেটা ব্যর্থ হতে পারে না।\r\n\r\nআক্ষেপ করে শেখ হাসিনা বলেন, যে স্থাপনাগুলো মানুষের জীবনকে সহজ করে সেগুলো ধ্বংস করা আসলে কোন ধরনের মানসিকতা। ঢাকা শহর যানজটে নাকাল থাকলেও মেট্রোরেল স্বস্তি দিয়েছে। আধুনিক প্রযুক্তির এই পরিবহন এভাবে ধ্বংস করেছে তা মানতে পারছি না।', 'PM, Metrorail,', 'প্রধানমন্ত্রী, মেট্রোরেল,', 1, 1, 1, 1, '27-07-2024', 'July', 'cant-accept-the-way-metrorail-has-been-destroyed-pm1', '1', '2024-07-25 02:30:13', '2024-07-27 16:40:58'),
(4, 12, 13, 4, 66, 8, 'Office time 9am-3pm till Tuesday', 'প্রতিরোধে না নামায় ‘ভাঙবে’ আওয়ামী লীগের আরও কমিটি', 'images/post_images/66a57a47f40ae.jpg', 'All government offices will remain operational for six hours—from 9:00am to 3:00pm—for the next three days from Sunday.\r\n\r\nPublic Administration Minister Farhad Hossain informed the matter on Saturday (July 27) afternoon.\r\n\r\nBanks and courts would set their office hours, he added.\r\n\r\nThe ongoing curfew will be relaxed in Dhaka from 8am to 5pm for the next three days, Minister said. \r\n\r\nEarlier on Friday (July 19) midnight, the government deployed the army and imposed the curfew on until 10am Sunday with a two-hour break on Saturday. \r\n\r\nLater, the government extended the curfew by relaxing the restrictions for several hours every day.\r\n\r\nBDST: 1729 HRS, JULY 27, 2024\r\nMN/SMS', 'ঢাকা: শিক্ষার্থীদের কোটা সংস্কার আন্দোলনকে কেন্দ্র করে সারা দেশে ঘটে যাওয়া সহিংসতা, ধ্বংসাত্মক ঘটনা প্রতিরোধে ক্ষমতাসীন আওয়ামী লীগের দলীয় ব্যর্থতা সামনে চলে এসেছে। খোদ দলের ভেতর থেকেই এ অভিযোগ উঠেছে।\r\n\r\nআর এই ব্যর্থতার দায়ে দলের বিভিন্ন স্তরের কমিটি ভেঙে দেওয়া ও পুনর্গঠনের মাধ্যমে সাংগঠনিক শুদ্ধি অভিযান চালানোর চিন্তা-ভাবনা চলছে।\r\nকোটা আন্দোলনকে কেন্দ্র করে সম্প্রতি ঢাকাসহ সারা দেশে যে ব্যাপক সন্ত্রাস, সহিংসতা, সংঘাত, ধ্বংসযজ্ঞসহ হতাহতের ঘটনা ঘটে তা প্রতিরোধে আওয়ামী লীগের নেতাকর্মীদের ভূমিকার মূল্যায়ন শুরু করেছেন দলটির নীতিনির্ধারকরা। এ সন্ত্রাসী কর্মকাণ্ডের বিরুদ্ধে দলের নেতাকর্মীরা রাস্তায় নামলে এ ধরণের ঘটনা প্রতিরোধ করা যেত বলে তারা মনে করছেন। তবে দলের নেতাকর্মীদের মধ্যে সেই ধরণের ভূমিকা বা প্রতিরোধমূলক অবস্থান নিতে দেখা যায়নি। এ জন্য দলের বিভিন্ন স্তরের কমিটির দায়িত্বশীল নেতাদের দায়ী করা হচ্ছে।  \r\n\r\nকোটা আন্দোলনের এক পর্যায়ে পরিস্থিতি অস্থিতিশীল হয়ে উঠতে থাকলে আওয়ামী লীগের পক্ষ থেকে বলা হয়- ‘আন্দোলন এখন শিক্ষার্থীদের হাতের নেই’। এই আন্দোলন সরকার বিরোধীদের হাতে চলে গেছে এবং সরকার উৎখাতের আন্দোলনে পরিণত হয়েছে।\r\n\r\nগত ১৭ জুলাই দলের এক যৌথ সভায় আওয়ামী লীগের সাধারণ সম্পাদক এবং সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের দলের নেতাকর্মীদের প্রতিরোধ গড়ে তোলার আহ্বান জানিয়ে বলেন, আপনারা ওয়ার্ডে ওয়ার্ডে প্রস্তুত হয়ে যান। নেত্রীর পক্ষ থেকে নির্দেশ দিচ্ছি সারা দেশে শক্ত অবস্থান নিয়ে এই অশুভ অপশক্তিকে প্রতিহত করতে হবে। এখন কোটা নিয়ে আন্দোলন সাধারণ শিক্ষার্থীদের আন্দোলন নেই। এখানে সরাসরি বিএনপি-জামায়াত, ছাত্রদল-ছাত্র শিবির এই আন্দোলনকে সরকার উৎখাতের আন্দোলনে পরিণত করতে চাচ্ছে। এই পরিস্থিতি মোকাবিলা আমাদের করতেই হবে।\r\n\r\nআওয়ামী লীগের কেন্দ্রীয় কয়েকজন নেতার সঙ্গে কথা বলে জানা যায়, ওই দিনের পর পরিস্থিতি যখন আরও অবনতি ও অস্থিতিশীল হয়ে উঠে তখনও দলের কেন্দ্র থেকে দায়িত্বশীল নেতাদের বার বার নির্দেশ দেওয়া হয় বিভিন্ন এলাকায় প্রতিরোধ গড়ে তুলতে, নেতাকর্মীদের সাথে নিয়ে অবস্থান নিতে। কিন্তু তারা সারা দেয়নি এবং অনেকের সঙ্গে যোগাযোগ করে নেতাদের পাওয়া যায়নি। দায়িত্বশীল নেতাদের নীরব ভূমিকার কারণে ধ্বংসাত্মক কর্মকাণ্ডের বিরুদ্ধে দলীয়ভাবে কোনো রাজনৈতিক প্রতিরোধ গড়ে তোলা সম্ভব হয়নি। ওই সব নেতাদের এই অবস্থানকে অনেকেই অনেকভাবে মূল্যায়ন করছেন।\r\n\r\nআওয়ামী লীগের ওই নেতারা আরও জানান, দীর্ঘদিন দল ক্ষমতায় থাকার কারণে নেতাকর্মীরা ‘রিল্যাক্স মুডে’ থাকতে অভ্যস্ত হয়ে পড়েছে ৷ আবার গা বাঁচিয়ে চলার প্রবণতাও দেখা দিয়েছে। তবে কে কার চেয়ে বড়, কার ক্ষমতা বেশি এ নিয়ে নিজেদের মধ্যে প্রতিযোগিতা আছে। ক্ষমতাকে ব্যবহার করে কীভাবে অর্থ সম্পদ করা যায় সে মানসিকতা অনেককে পেয়ে বসেছে। আবার নিজের গ্রুপ ভারি করতে প্রভাবশালী নেতারা অযোগ্যদেরকে বিভিন্ন কমিটিতে ঢুকিয়েছে ও গুরুত্বপূর্ণ পদেও দিয়েছে ৷\r\n\r\nএদের মধ্যে আওয়ামী লীগ ও মুক্তিযুদ্ধের চেতনা বিরোধী রাজনৈতিক মতাদর্শের বিভিন্ন দল থেকে আসা লোকজনও রয়েছে ৷ আওয়ামী লীগের কমিটিগুলোর পাশাপাশি সহযোগী সংগঠনগুলোর একই অবস্থা৷ দলের কিছু কর্মসূচিতে এরা ব্যানার নিয়ে আসে, প্রত্যেকেই নিজেদের বড় বড় জমায়েত দেখানোর চেষ্টা করে৷ সংকটের সময় ওই নেতারা যারা বিভিন্ন কমিটিতে নেতৃত্বে রয়েছে তারা প্রতিরোধ গড়ে তুলতে এগিয়ে আসেনি৷ তাদের খুঁজে পাওয়া যায়নি, গা ঢাকা দিয়ে থেকেছে। শক্ত প্রতিরোধ গড়ে তোলা গেলে এই পরিস্থিতি মোকাবিলা করা সম্ভব হতো বলে তারা মনে করেন।\r\n\r\nগত ২৫ জুলাই রংপুরে এক মতবিনিময় সভায় স্বরাষ্ট্রমন্ত্রী আসাদুজ্জামান খান কামাল বলেছেন, রংপুরে আওয়ামী লীগের নেতারা ফেল করেছেন, তারা ঘুরে দাঁড়ালেই দুর্বৃত্তরা নাশকতা করতে পারত না।\r\n\r\nআওয়ামী লীগের নেতাকর্মীদের উদ্দেশ্য স্বরাষ্ট্রমন্ত্রী বলেন, আপনারা ফেল করায় তারা এসব করতে সাহস পেয়েছে এবং করেছে। ঘুরে দাঁড়ালেই আর এসব করতে পারত না। আমার কষ্ট হয়, আপনাদের পার্টি অফিস যখন ভাঙচুর করল, তখন আপনারা নাই। অথচ, পার্টি অফিস ভাঙচুর ও অগ্নিসংযোগের ভিডিওতে দেখা গেল মাত্র কয়েকজন এ ঘটনা ঘটিয়েছে।\r\n\r\nএই পরিস্থিতিতে গত কয়েক দিনে ঢাকায় দলের বিভিন্ন স্তরের নেতাকর্মীদের নিয়ে বেশ কয়েকটি সভা করেছেন আওয়ামী লীগের নীতি নির্ধারক পর্যায়ের নেতারা। সেখানে বিভিন্ন স্তরের দায়িত্বশীল নেতাদের বিরুদ্ধে এই ব্যর্থতা ও নিষ্ক্রিয় ভূমিকার অভিযোগ উঠে এসেছে। ইতোমধ্যে ঢাকা মহানগর উত্তর ও দক্ষিণ আওয়ামী লীগের নেতাকর্মী ও দলীয় এমপিদের নিয়ে কয়েকটি সভা হয়েছে। এ সব সভায় যে সব অভিযোগ এসেছে তার ভিত্তিতে বিভিন্ন কমিটি ভেঙে দেওয়া ও কমিটি পুনর্গঠনের বিষয়টি নিয়ে ভাবা হচ্ছে।\r\n\r\nতাৎক্ষণিকভাবে, গত ২৫ জুলাই এক সভায় ঢাকা মহানগর উত্তরের মোহাম্মদপুর, আদাবর ও শেরে বাংলানগর থানার ২৭ ইউনিট কমিটি ভেঙে দেওয়া হয়েছে।\r\n\r\nএ বিষয়ে জানতে চাইলে ঢাকা মহানগর উত্তর আওয়ামী লীগের দপ্তর সম্পাদক উইলিয়াম প্রলয় সামাদ্দার বাপ্পী বাংলানিউজকে বলেন, ২৭ ইউনিট কমিটি ভেঙে দেওয়ার সিদ্ধান্ত হয়েছে৷ এই সব কমিটির কাউকে আন্দোলন মোকাবিলায় খুঁজে পাওয়া যায়নি ৷ এরা দলের কোনো কর্মসুচিতে আসেনি এ কারণে ভেঙে দেওয়া হয়েছে।\r\n\r\nএকাধিক সূত্র জানিয়েছে, ঢাকা উত্তরের এ কমিটিগুলোর মতো আরও অনেক কমিটির বিষয়ে মূল্যায়ন হবে ; এমনকি ভেঙেও দেওয়া হবে। শুধু ঢাকায় নয় সারা দেশেই এ ধরণের সাংগঠনিক শুদ্ধি অভিযান চালানো হবে। পরিস্থিতি আরও উন্নতি হলে দলের সাংগঠনিক এ বিষগুলোতে হাত দেওয়া হবে। তবে এ বিষয় নিয়ে দলের নেতারা এখনই কোনো মন্তব্য করতে বা কোনো কথা বলতে চাচ্ছেন না।\r\n\r\nবাংলাদেশ সময়: ২২৫০ ঘণ্টা, জুলাই ২৭, ২০২৪\r\nএসকে/এমজে', 'Special Correspondent,banglanews24.com', 'স্পেশাল করেসপন্ডেন্ট,বাংলানিউজটোয়েন্টিফোর.কম', 1, 1, NULL, NULL, '28-07-2024', 'July', 'office-time-9am-3pm-till-tuesday', '1', '2024-07-27 16:52:55', '2024-07-28 01:40:55'),
(5, 12, 12, 4, 66, 8, 'Metrorail\'s two damaged stations will not be operational even in a year: Bridges Minister', 'মেট্রোরেলের ক্ষতিগ্রস্ত দুটি স্টেশন এক বছরেও চালু করা সম্ভব হবে না: সেতুমন্ত্রী', 'images/post_images/66a57d53961f2.jpg', 'Dhaka: Awami League General Secretary and Road Transport and Bridges Minister Obaidul Quader has said that it will not be possible to open the two damaged stations of the metro rail in Dhaka during the quota reform movement.\r\n\r\nHe told reporters after inspecting the damaged Setu building in Banani of the capital on Saturday (July 27) afternoon.\r\n\r\nThe bridge minister said that metro rail Kazipara and Mirpur-10 stations were destroyed. Experts said that it will not be possible to bring the equipment and make it operational even in a year.', 'ঢাকা: কোটা সংস্কার আন্দোলন চলাকালে ঢাকায় মেট্রোরেলের ক্ষতিগ্রস্ত স্টেশন দুটি আগামী এক বছরেও চালু করা সম্ভব হবে না বলে জানিয়েছেন আওয়ামী লীগের সাধারণ সম্পাদক এবং সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের।\r\n\r\nশনিবার (২৭ জুলাই) দুপুরে রাজধানীর বনানীতে ক্ষতিগ্রস্ত সেতু ভবন পরিদর্শন শেষে সাংবাদিকদের তিনি এ কথা জানান।\r\n\r\nসেতুমন্ত্রী বলেন, মেট্রোরেলের কাজীপাড়া ও মিরপুর-১০ স্টেশন ধ্বংসপ্রাপ্ত। এটা এক বছরেও যন্ত্রপাতি এনে সচল করা সম্ভব হবে না বলে এক্সপার্টরা জানিয়েছেন।\r\n\r\nবন্ধ মেট্রোরেল কবে নাগাদ চলাচল করতে পারে- সাংবাদিকদের এ ধরনের এক প্রশ্নের উত্তরে ওবায়দুল কাদের বলেন, প্রধানমন্ত্রী শেখ হাসিনা যে সিদ্ধান্ত নেবেন, ওই সিদ্ধান্তের ওপর আমরা পর্যায়ক্রমে যেখানে যা করার সেটা করবো। তার সিদ্ধান্তের আগে আমরা কোনো কিছু করতে চাই না। তিনি সবকিছু গভীরভাবে পর্যবেক্ষণ করছেন এবং তিনি (প্রধানমন্ত্রী) সশরীরে বিটিভিসহ বিভিন্ন ধ্বংসপ্রাপ্ত স্থাপনায় গেছেন, সেগুলো প্রত্যক্ষভাবে দেখেছেন। সবকিছুর ক্ষয়ক্ষতির হিসাব তার কাছে আছে। কী অবস্থায়, কখন, কোনটা চালু করা যাবে আমি এ মুহূর্তে বলতে পারছি না।\r\n\r\nআওয়ামী লীগের সাধারণ সম্পাদক বলেন, এটা সাধারণ ছাত্র-ছাত্রীদের কাজ নয়। তারা কোটার মধ্যে সীমাবদ্ধ ছিল। বিএনপি-জামায়াত তাদের দীর্ঘদিনের ব্যর্থতা অবসানের জন্য রাজনৈতিক মতলবে ছাত্রদের এ আন্দোলনের ওপর ভর করেছে । ২০১৮ সালে তারা ব্যর্থ হয়েছে, নির্বাচনের আগে অক্টোবর মাসে তারা ব্যর্থ হয়েছে, নির্বাচনে হেরে যাওয়ার ভয়ে তারা অংশ নেয়নি; আজ ক্ষমতার লিপসা তাদের পেয়ে বসেছে। বিএনপি-জামায়াত এখন আর গণতন্ত্র মানে না; তারা আগুন নিয়ে নেমেছে, অস্ত্র নিয়ে নেমেছে। আজ কত মানুষের প্রাণপ্রদীপ নিভে গেছে সে হিসাব পুরোপুরি এখনও আসেনি। শিশুদেরও কেউ কেউ মারা গেছে। জানালা বন্ধ করতে গিয়ে গুলি লেগে মারা গেছে। রাস্তায় শিশু গুলির আঘাতে রক্তাক্ত হয়ে মারা গেছে।\r\n\r\nবাংলাদেশ সময়: ১৭৩১ ঘণ্টা, জুলাই ২৭, ২০২৪\r\nএসকে/আরবি', 'Special Correspondent,banglanewstwentyfour.com', 'স্পেশাল করেসপন্ডেন্ট,বাংলানিউজটোয়েন্টিফোর.কম', 1, 1, NULL, NULL, '28-07-2024', 'July', 'metrorails-two-damaged-stations-will-not-be-operational-even-in-a-year-bridges-minister', '1', '2024-07-27 17:05:55', '2024-07-28 01:41:17'),
(6, 12, 12, 4, 66, 8, 'New schedule of bank transactions', 'ব্যাংক লেনদেনের নতুন সময়সূচি', 'images/post_images/66a57e6e1f112.jpg', 'Dhaka: Bank transactions will continue from 10 am to 3 pm tomorrow from Sunday to Tuesday. After the transaction, other activities will continue till 3:30 pm.\r\n\r\nOn Saturday (July 27), responsible sources of Bangladesh Bank gave this information.\r\n\r\nAfter the conflict-violence surrounding the quota reform movement, public and private offices including bank transactions were opened on a limited basis from Wednesday during the curfew. Before this there are three days (Sunday, Monday and Tuesday) of general holidays in the last week.\r\n\r\nA curfew was imposed across the country on Friday (19 July) night amid a tense situation across the country after violence erupted over the quota reform movement. Army was deployed. Curfew is still in force.\r\n\r\nMeanwhile, Public Administration Minister Farhad Hossain said that all public and private offices will be open from Sunday to Tuesday from 9 am to 3 pm.  \r\n\r\nBangladesh Time: 1826 hours, July 27, 2024\r\nZA/SAH', 'ঢাকা: আগামীকাল রোববার থেকে মঙ্গলবার পর্যন্ত ব্যাংকগুলোর লেনদেন চলবে সকাল ১০টা থেকে বিকেল ৩টা পর্যন্ত। লেনদেনের পরে অন্যান্য কার্যক্রম পরিচালনা চলবে সাড়ে ৩টা পর্যন্ত।\r\n\r\nশনিবার (২৭ জুলাই) বাংলাদেশ ব্যাংকের দায়িত্বশীল সূত্র এ তথ্য জানিয়েছে।\r\n\r\nকোটা সংস্কার আন্দোলন ঘিরে সংঘাত-সহিংসতার পর কার্ফু মধ্যে বুধবার থেকে সীমিত পরিসরে ব্যাংকের লেনদেনসহ সরকারি-বেসরকারি অফিস চালু হয়। এর আগে গত সপ্তাহে তিনদিন (রবি, সোম ও মঙ্গলবার) সাধারণ ছুটি থাকে।\r\n\r\nকোটা সংস্কার আন্দোলনকে কেন্দ্র করে সহিংসতা-সংঘাত ছড়িয়ে পড়ার পর দেশ জুড়ে উত্তপ্ত অবস্থার প্রেক্ষিতে শুক্রবার (১৯ জুলাই) রাত সারা দেশে কারফিউ জারি করা হয়। মোতায়েন করা হয় সেনাবাহিনী। এখনো কারফিউ বলবত আছে।  \r\n\r\nএদিকে জনপ্রশাসনমন্ত্রী ফরহাদ হোসেন জানিয়েছেন, রোববার থেকে মঙ্গলবার পর্যন্ত সকাল ৯টা থেকে বিকেল ৩টা পর্যন্ত সব সরকারি-বেসরকারি অফিস চলবে।  \r\n\r\nবাংলাদেশ সময়: ১৮২৬ ঘণ্টা, জুলাই ২৭, ২০২৪\r\nজেডএ/এসএএইচ', 'Senior Correspondent,banglanewstwentyfour.com', 'সিনিয়র করেসপন্ডেন্ট,বাংলানিউজটোয়েন্টিফোর.কম', 1, 1, NULL, NULL, '28-07-2024', 'July', 'new-schedule-of-bank-transactions', '1', '2024-07-27 17:10:38', '2024-07-28 01:42:02'),
(7, 11, 13, 3, 39, 8, '16-hour curfew is also relaxed in Barisal on Sunday', 'বরিশালে রোববার ১৬ ঘণ্টা কারফিউ শিথিলও', 'images/post_images/66a57f6a325b6.jpg', 'Barisal: Curfew will be relaxed from 6 am to 10 pm on Sunday (July 28) in the city and district.\r\n\r\nBarisal Metropolitan Police Commissioner Jihadul Kabir and Deputy Commissioner Shahidul Islam said that the curfew will be relaxed for 16 hours on Saturday (July 27) night.\r\n\r\nThey also said that the curfew will remain in effect from 10 pm till further orders.\r\n\r\nWhile the curfew is relaxed, all public gatherings, processions and gatherings have been banned in the interest of peace and order and public safety.\r\n\r\nBangladesh Time: 2302 hours, July 27, 2024\r\nMS/MJ', 'বরিশাল: নগ‌র ও জেলায় রোববার (২৮ জুলাই) সকাল ৬টা থেকে রাত ১০টা পর্যন্ত কারফিউ শিথিল থাকবে।\r\n\r\nশনিবার (২৭ জুলাই) রাতে বরিশাল মেট্রোপ‌লিটন পু‌লিশের ক‌মিশনার জিহাদুল ক‌বির ও জেলা প্রশাসক শ‌হিদুল ইসলাম ১৬ ঘণ্টা কারফিউ শিথিল থাকবে বলে জানান।\r\n\r\nতারা আরও জানান, রাত ১০টার পর থেকে পরবর্তী নির্দেশ না দেওয়া পর্যন্ত অনির্দিষ্টকালের জন্য কারফিউ বহাল থাকবে।\r\n\r\nকারফিউ শিথিল থাকাকালীন শান্তি শৃঙ্খলা ও জন‌নিরাপত্তার স্বা‌র্থে সকল প্রকার গণজমায়েত, মি‌ছিল ও জনসমাবেশ নিষিদ্ধ ঘোষণা করা হয়েছে।\r\n\r\nবাংলাদেশ সময়: ২৩০২ ঘণ্টা, জুলাই ২৭, ২০২৪\r\nএমএস/এমজে', 'Curfew relaxed for 16 hours in Barisal on Sunday Staff Correspondent,banglanewstwentyfour.com', 'বরিশালে রোববার ১৬ ঘণ্টা কারফিউ শিথিল স্টাফ করেসপন্ডেন্ট,বাংলানিউজটোয়েন্টিফোর.কম', 1, 1, NULL, NULL, '28-07-2024', 'July', '16-hour-curfew-is-also-relaxed-in-barisal-on-sunday', '1', '2024-07-27 17:14:50', '2024-07-27 18:27:45'),
(8, 11, 13, 4, 66, 8, '9 thousand arrested in 11 days', '১১ দিনে গ্রেপ্তার ৯ হাজার', 'images/post_images/66a5820ef273c.PNG', 'Arrests by law enforcement agencies across the country have continued in the wake of protests, skirmishes, clashes, vandalism and arson in connection with the quota reform movement in government jobs. The total number of arrests in 11 days till Saturday has crossed 9 thousand.\r\n\r\nProthom Alo representatives collected total arrest data for the last 11 days (July 17-27) from police sources in 56 metros and districts of the country. In some of these districts, a number of persons have been arrested in old cases. Apart from this, more information about arrests in several districts has been reported. In all, 9 thousand 121 people have been arrested across the country including the capital Dhaka till yesterday. Earlier, till last Friday, there were more than 6,500 arrests across the country.\r\n\r\nStudents started a continuous program on July 1 to demand reform of the quota system. On July 15, after the clashes surrounding the students\' movement in Dhaka University, protests spread almost all over the country. From the next day, attacks, clashes, violence, vandalism, arson and casualties occurred in different parts of the country including Dhaka. Cases have been filed in these incidents at various places. There are still cases in different places.\r\n\r\nA large number of those arrested so far are leaders and activists of BNP and Jamaat-e-Islami and affiliated organizations of the two parties. Apart from this, the top leaders of various parties who are in simultaneous movement with BNP are also being arrested.', 'সরকারি চাকরিতে কোটা সংস্কার আন্দোলনকে কেন্দ্র করে বিক্ষোভ, সংঘর্ষ, সংঘাত, ভাঙচুর ও অগ্নিসংযোগের ঘটনায় সারা দেশে আইনশৃঙ্খলা রক্ষাকারী বাহিনীর গ্রেপ্তার অভিযান অব্যাহত রয়েছে। গতকাল শনিবার পর্যন্ত ১১ দিনে মোট গ্রেপ্তারের সংখ্যা ৯ হাজার ছাড়িয়েছে।\r\n\r\nপ্রথম আলোর প্রতিনিধিরা দেশের ৫৬টি মহানগর ও জেলার পুলিশ সূত্র থেকে গত ১১ দিনের (১৭-২৭ জুলাই) মোট গ্রেপ্তারের তথ্য সংগ্রহ করেছেন। এর মধ্যে কয়েকটি জেলায় কিছুসংখ্যক ব্যক্তিকে পুরোনো মামলায় গ্রেপ্তার দেখানো হয়েছে। এ ছাড়া বেশ কিছু জেলায় গ্রেপ্তারের আরও তথ্য জানা গেছে। সব মিলিয়ে গতকাল পর্যন্ত রাজধানী ঢাকাসহ সারা দেশে গ্রেপ্তার হয়েছেন ৯ হাজার ১২১ জন। এর আগে গত শুক্রবার পর্যন্ত সারা দেশে সাড়ে ছয় হাজারের বেশি গ্রেপ্তারের তথ্য ছিল।\r\n\r\nকোটাপ্রথা সংস্কারের দাবিতে শিক্ষার্থীরা লাগাতার কর্মসূচি শুরু করেন ১ জুলাই। ১৫ জুলাই ঢাকা বিশ্ববিদ্যালয়ে শিক্ষার্থীদের আন্দোলন ঘিরে সংঘর্ষের পর বিক্ষোভ ছড়িয়ে পড়ে প্রায় সারা দেশে। এর পরদিন থেকে এই আন্দোলনকে কেন্দ্র করে ঢাকাসহ দেশের বিভিন্ন জায়গায় হামলা, সংঘর্ষ, সহিংসতা, ভাঙচুর, অগ্নিসংযোগ ও হতাহতের ঘটনা ঘটে। বিভিন্ন জায়গায় এসব ঘটনায় মামলা করা হয়েছে। এখনো বিভিন্ন জায়গায় মামলা হচ্ছে।\r\n\r\nএখন পর্যন্ত গ্রেপ্তার করা ব্যক্তিদের একটি বড় অংশ বিএনপি ও জামায়াতে ইসলামী এবং দল দুটির অঙ্গ-সহযোগী সংগঠনের নেতা-কর্মী। পাশাপাশি বিএনপির সঙ্গে যুগপৎ আন্দোলনে থাকা বিভিন্ন দলের শীর্ষস্থানীয় নেতাদেরও গ্রেপ্তার করা হচ্ছে।\r\n\r\nগতকাল মেট্রোরেলে হামলা ও অগ্নিসংযোগের মামলায় বিএনপির চেয়ারপারসনের উপদেষ্টা জহির উদ্দিন স্বপন ও বিএনপির আন্তর্জাতিক বিষয়ক সম্পাদক নাসির উদ্দিন আহমেদকে তিন দিনের রিমান্ডে নিয়ে জিজ্ঞাসাবাদ করার অনুমতি দেন আদালত। এ ছাড়া রামপুরায় বাংলাদেশ টেলিভিশন (বিটিভি) ভবনে আগুন ও ভাঙচুরের মামলায় বিএনপির যুগ্ম মহাসচিব শহীদ উদ্দীন চৌধুরী এ্যানিসহ তিনজনের সাত দিনের রিমান্ড মঞ্জুর করেন আদালত।\r\n\r\nবিএনপির মহাসচিব মির্জা ফখরুল ইসলাম আলমগীর গতকাল এক বিবৃতিতে দাবি করেছেন, এখন পর্যন্ত তাঁদের দলের ৩৫ জন কেন্দ্রীয় নেতা ও অসংখ্য নেতা-কর্মীকে গ্রেপ্তার করা হয়েছে। কোটা সংস্কার আন্দোলনে সরকার সৃষ্ট সন্ত্রাসের মাধ্যমে কোমলমতি শিক্ষার্থীদের হত্যা-নির্যাতনের পর এখন আইনশৃঙ্খলা রক্ষাকারী বাহিনী দিয়ে সাজানো মামলা দায়েরের মাধ্যমে বিরোধী মতের নেতাদের হত্যা, গ্রেপ্তার, গুলি করে আদালতে ওঠানোর আগেই নির্যাতন করে পঙ্গু করা হচ্ছে এবং বিচার বিভাগকে দিয়ে রিমান্ডে নিয়ে আবারও নির্যাতন চালানো হচ্ছে।\r\n\r\nকোটা সংস্কার আন্দোলনকে ঘিরে সংঘর্ষ ও অগ্নিসংযোগের ঘটনা বেশি ঘটেছে রাজধানী ঢাকা ও এর আশপাশে। রাজধানীর উত্তরা, যাত্রাবাড়ী, মহাখালী, বাড্ডা, রামপুরা, মোহাম্মদপুর, ধানমন্ডি, মিরপুর, আজিমপুর, নীলক্ষেতসহ প্রায় পুরো রাজধানীতে সংঘর্ষের ঘটনা ঘটেছিল। ঘটনার পর মামলা ও গ্রেপ্তারও বেশি হচ্ছে রাজধানী ও এর চারপাশে।\r\n\r\n২১ জুলাই রাত থেকে রাজধানীতে চিরুনি অভিযান শুরু করে পুলিশ ও র‍্যাব। রাজধানীর বিভিন্ন এলাকায় গ্রেপ্তার অভিযানে ‘ব্লক রেইড’ দেওয়া হচ্ছে। সহিংসতায় কারা জড়িত ছিলেন, তা বের করতে ভিডিও ফুটেজ ও ছবি বিশ্লেষণ করে তালিকাও করা হয়েছে।\r\n\r\nঢাকা মেট্রোপলিটন পুলিশ (ডিএমপি) গতকাল বিকেলে জানায়, গতকাল পর্যন্ত রাজধানীর বিভিন্ন থানায় মোট ২০৭টি মামলা হয়েছে। মোট ২ হাজার ৫৩৬ জনকে গ্রেপ্তার করা হয়েছে। এর মধ্যে গতকাল গ্রেপ্তার হয়েছেন ২৫২ জন।\r\n\r\nঅন্যদিকে র‍্যাব জানিয়েছে, নাশকতার অভিযোগে সাম্প্রতিক সময়ে তারা ২৯০ জনকে গ্রেপ্তার করেছে। এর মধ্যে ঢাকায় ৭১ জন ও ঢাকার বাইরে ২১৯ জন।\r\n\r\nঢাকা মহানগরের বাইরে ঢাকা জেলার সাভার, ধামরাই, আশুলিয়া, কেরানীগঞ্জ, নবাবগঞ্জ ও দোহারেও চলছে গ্রেপ্তার অভিযান। জেলা পুলিশ সূত্র জানায়, ঢাকা মহানগরের বাইরে ঢাকা জেলায় গতকাল নতুন করে আরও ৪টি মামলা হয়েছে। এ নিয়ে ঢাকা জেলার বিভিন্ন থানায় মোট মামলার সংখ্যা দাঁড়িয়েছে ২৪। এসব মামলায় গতকাল পর্যন্ত ২০০ জনকে গ্রেপ্তার করা হয়।\r\n\r\nরাজধানী ঢাকার পার্শ্ববর্তী নারায়ণগঞ্জ ও গাজীপুরেও আন্দোলন ঘিরে বিক্ষোভ, সংঘর্ষ, অগ্নিসংযোগের ঘটনা ঘটেছিল। সেখানেও গ্রেপ্তার অভিযান অব্যাহত আছে। নারায়ণগঞ্জে শুক্রবার রাত থেকে গতকাল দুপুর পর্যন্ত আরও ৫১ জনকে গ্রেপ্তার করা হয়েছে। সেখানে গতকাল আরও ২টি মামলা হয়েছে। গতকাল পর্যন্ত নারায়ণগঞ্জে ২৪টি মামলা হয়েছে। মোট গ্রেপ্তার করা হয়েছে ৪৮৭ জনকে।\r\n\r\nগাজীপুরেও গতকাল আরেকটি নতুন মামলা হয়েছে। গতকাল পর্যন্ত গাজীপুরে মামলা হয়েছে ৩৭টি। মোট গ্রেপ্তার ৩৯৬ জন।\r\n\r\nকোটা সংস্কার আন্দোলনকে ঘিরে সংঘর্ষ ও নিহতের ঘটনায় চট্টগ্রাম মহানগরীতে গতকাল নতুন আরও একটি মামলা হয়েছে। গতকাল আকবরশাহ থানায় এই মামলা হয়। গতকাল পর্যন্ত চট্টগ্রাম মহানগর ও জেলা মিলিয়ে মোট মামলা হয়েছে ৩০টি। গতকাল পর্যন্ত এসব মামলায় ৮৮৪ জনকে গ্রেপ্তার করেছে পুলিশ।\r\n\r\nঢাকা ও চট্টগ্রামের বাইরে উত্তরাঞ্চলের রাজশাহী, বগুড়া ও রংপুরে মামলা এবং গ্রেপ্তার তুলনামূলক বেশি। রংপুরে গতকাল পর্যন্ত মোট ১২টি মামলায় ১৮৫ জনকে গ্রেপ্তার করা হয়। রাজশাহীতে গতকাল পর্যন্ত মোট ১৭টি মামলায় গ্রেপ্তার করা হয়েছে ৩৪৫ জনকে। আর বগুড়ায় মোট ১৫টি মামলায় গতকাল পর্যন্ত ২৯৬ জনকে গ্রেপ্তার করা হয়।\r\n\r\nঢাকার আদালতে ভিড়\r\nনাশকতার বিভিন্ন মামলায় গ্রেপ্তার ১৭২ জনকে কারাগারে পাঠানোর আদেশ দিয়েছেন আদালত। ঢাকার সিএমএম আদালত গতকাল এ আদেশ দেন।\r\n\r\nগ্রেপ্তার হওয়া ব্যক্তিদের স্বজনেরা আদালতের সামনে ভিড় করেন। কয়েকজন আসামির আইনজীবীরা দাবি করছেন, হয়রানির উদ্দেশ্যে তাঁদের গ্রেপ্তার করা হচ্ছে। তবে পুলিশের পক্ষ থেকে আদালতকে জানানো হয়েছে, সুনির্দিষ্ট অভিযোগে আসামিদের গ্রেপ্তার করা হয়।\r\n\r\nচকবাজার থানার মামলায় আলামিন নামের এক তরুণকে গ্রেপ্তার করে ঢাকার আদালতে হাজির করা হয়। ছেলের সঙ্গে দেখা করার জন্য মা মাকছুদা খাতুন আদালতে আসেন দুপুর ১২টার দিকে। বিকেল ৪টার সময়ও ছেলের সঙ্গে তাঁর দেখা হয়নি। মাকছুদা খাতুন প্রথম আলোকে বলেন, নিউমার্কেট থেকে বাসায় ফেরার পথে পুলিশ তাঁর ছেলেকে ধরে নিয়ে যায়। পরে তাঁর মুঠোফোনে আন্দোলনের ভিডিও দেখে তাঁকে গ্রেপ্তার করে। মাকছুদা খাতুনের দাবি, তাঁর ছেলে আন্দোলনে ছিল না।\r\n\r\nআদাবর থানার নাশকতার মামলায় শেখ রেদোয়ান ও তাঁর বাবা শেখ জাকির হোসেনকে গ্রেপ্তার করে গতকাল আদালতে হাজির করা হয়। সন্তানকে দেখার জন্য দুপুর ১২টার দিকে আদালতে আসেন সুমাইয়া খাতুন। তিনি প্রথম আলোকে বলেন, তাঁরা থাকেন মোহাম্মদপুরে। মধ্যরাতে গিয়ে তাঁর স্বামী ও ছেলেকে গ্রেপ্তার করে পুলিশ। নাশকতার কোনো ঘটনার সঙ্গে তাঁর ছেলে ও স্বামী জড়িত নন বলে দাবি করেন সুমাইয়া খাতুন।', 'own reporter', 'নিজস্ব প্রতিবেদক', 1, 1, NULL, 1, '27-07-2024', 'July', '9-thousand-arrested-in-11-days', '1', '2024-07-27 17:26:06', NULL),
(9, 11, 12, 4, 66, 8, 'Nurul Haque was tortured on remand, wife alleged in the press conference', 'রিমান্ডে নুরুল হককে নির্যাতন করা হয়েছে, সংবাদ সম্মেলনে অভিযোগ স্ত্রীর', 'images/post_images/66a58358869c3.webp', 'The president of Gana Odhikar Parishad Nurul Haque Noor has been remanded and tortured by his wife Maria Akhter. He said that Nurul fainted three to four times without being able to bear the torture.\r\n\r\nMaria Noor made this complaint at a press conference at Dhaka Reporters Unity on Saturday demanding the release of detainees including Nurul Haque Noor, stop torture on remand and demand treatment. At that time, he said, despite repeated requests to the court, he did not get a chance to meet Nurul.\r\n\r\nMaria Akhtar alleged that Nurul Haque was tortured by hanging her legs upwards. Injections were pushed into his body, electric shocks were given.\r\n\r\nIn the press conference, Nurul\'s wife demanded to arrange her husband\'s medical treatment. He said, \"I don\'t have to do politics, I don\'t need to.\" We don\'t have much to ask for. I will not allow my husband to do politics. Just return him to us.\'', 'গণ অধিকার পরিষদের সভাপতি নুরুল হক নূরকে রিমান্ডে নিয়ে নির্যাতন করা হয়েছে বলে অভিযোগ করেছেন তাঁর স্ত্রী মারিয়া আক্তার। তিনি বলেছেন, নির্যাতন সহ্য করতে না পেয়ে তিন থেকে চারবার অজ্ঞান হয়ে গিয়েছিলেন নুরুল।\r\n\r\nশনিবার ঢাকা রিপোর্টার্স ইউনিটিতে ‘নুরুল হক নূরসহ আটকৃতদের মুক্তি, রিমান্ডে নির্যাতন বন্ধ ও চিকিৎসার দাবিতে’ সংবাদ সম্মেলনে এ অভিযোগ করেন মারিয়া নূর। এ সময় তিনি বলেন, আদালতকে বারবার অনুরোধ করার পরেও নুরুলের সঙ্গে দেখা করার সুযোগ পাননি।\r\n\r\nমারিয়া আক্তার অভিযোগ করেন, নুরুল হকের দুটি পা ওপরের দিকে ঝুলিয়ে নির্যাতন করা হয়েছে। তাঁর শরীরে ইনজেকশন পুশ করা হয়েছে, ইলেকট্রিক শক দেওয়া হয়েছে।\r\n\r\nসংবাদ সম্মেলনে স্বামীর সুচিকিৎসার ব্যবস্থা করার দাবি জানান নুরুলের স্ত্রী। তিনি বলেন, ‘আমার রাজনীতি করতে হবে না, দরকার নেই। আমাদের খুব চাওয়া-পাওয়ার কিছু নেই। আমার স্বামীকে আমি রাজনীতি করতে দেব না। শুধু ওকে আমাদের কাছে ফেরত দিন।’', 'own reporter', 'নিজস্ব প্রতিবেদক', 1, 1, NULL, NULL, '27-07-2024', 'July', 'nurul-haque-was-tortured-on-remand-wife-alleged-in-the-press-conference', '1', '2024-07-27 17:31:36', NULL),
(11, 11, 13, 4, 66, 8, 'Why is State Minister Palak active on Facebook?', 'ফেসবুকে কেন সক্রিয় প্রতিমন্ত্রী পলক', 'images/post_images/66a5eec7c8986.png', 'State Minister for Posts, Telecommunications and Information Technology Junaid Ahmed Palak said that if the Facebook authorities behave responsibly and comply with the laws of the country, their platform will be open in the country.\r\n\r\nFacebook and TikTok cannot be used even after broadband internet connection is restored. But the state minister himself is active on these platforms. However, he also explained it.\r\n\r\nProtests and violence centered around the quota reform movement in government jobs. The government imposed a curfew from midnight on July 19, which is still in force with occasional relaxations. The country\'s mobile internet services were shut down as the 4G network was shut down from midnight on July 17 before the curfew. The next day on July 18, the broadband internet connection was also stopped from 9:30 PM. The entire country was without internet.\r\n\r\nAfter being without internet for five days, internet connection was given to some institutions on a limited basis on July 23 night. The next day, on July 24, broadband internet was launched across the country; However, internet service is still not as normal as it used to be. Apart from this, mobile internet is still closed.\r\n\r\nEven though the broadband connection is on, the Metar platforms Facebook, Instagram, WhatsApp are down. Apart from this, TikTok is also closed. The state minister told reporters on July 23, \"I am still not sure how much we can actually allow for social media.\"\r\n\r\nSoon after the launch of broadband internet on July 23, the state minister started posting from his verified Facebook page. He is constantly posting information about his various activities on his Facebook. Apart from this, he is also doing live broadcasting of various events. He is also active on Instagram. Apart from this, he is also posting from his verified TikTok account.\r\n\r\nThere is criticism among the citizens that Facebook is closed for common people and the state minister is using it himself. When asked about the matter, Junaid Ahmed told Prothom Alo last Saturday night that he is active on social media to inform people of correct information to prevent rumours. He also said that the important institutions of the government including him can also remain active in this way.\r\nThere is criticism among the citizens that Facebook is closed for common people and the state minister is using it himself. When asked about the matter, Junaid Ahmed told Prothom Alo last Saturday night that he is active on social media to inform people of correct information to prevent rumours. He also said that the important institutions of the government including him can also remain active in this way.', 'ফেসবুক কর্তৃপক্ষ দায়িত্বশীল আচরণ করলে এবং দেশের আইন মেনে চললে তাদের প্ল্যাটফর্ম দেশে উন্মুক্ত হবে বলে জানিয়েছিলেন ডাক, টেলিযোগাযোগ ও তথ্যপ্রযুক্তি প্রতিমন্ত্রী জুনাইদ আহ্‌মেদ পলক।\r\n\r\nব্রডব্যান্ড ইন্টারনেট সংযোগ ফিরলেও ফেসবুক ও টিকটক ব্যবহার করা যাচ্ছে না। কিন্তু প্রতিমন্ত্রী নিজে এসব প্ল্যাটফর্মে সক্রিয় রয়েছেন। অবশ্য এর ব্যাখ্যাও তিনি দিয়েছেন।\r\n\r\nসরকারি চাকরিতে কোটা সংস্কার আন্দোলনকে কেন্দ্র করে বিক্ষোভ ও সহিংসতা হয়। সরকার ১৯ জুলাই মধ্যরাত থেকে কারফিউ জারি করে, যা সময়-সময় শিথিল রেখে এখনো বলবৎ রয়েছে। কারফিউর আগেই ১৭ জুলাই মধ্যরাত থেকে ফোর-জি নেটওয়ার্ক বন্ধ করায় দেশের মোবাইল ইন্টারনেট সেবা বন্ধ হয়ে যায়। এর পরের দিন ১৮ জুলাই রাত পৌনে নয়টা থেকে ব্রডব্যান্ড ইন্টারনেট সংযোগও বন্ধ হয়ে যায়। এতে পুরো দেশই ইন্টারনেট–বিচ্ছিন্ন ছিল।\r\n\r\nপাঁচ দিন ইন্টারনেট–বিহীন থাকার পর ২৩ জুলাই রাতে সীমিত পরিসরে অগ্রাধিকার ভিত্তিতে কিছু প্রতিষ্ঠানের জন্য ইন্টারনেট সংযোগ দেওয়া হয়। পরদিন ২৪ জুলাই সারা দেশেই ব্রডব্যান্ড ইন্টারনেট চালু হয়; যদিও ইন্টারনেট সেবা এখনো আগের মতো স্বাভাবিক নয়। এ ছাড়া মোবাইল ইন্টারনেট এখনো বন্ধ।\r\n\r\nব্রডব্যান্ড সংযোগ চালু হলেও মেটার প্ল্যাটফর্ম ফেসবুক, ইনস্টাগ্রাম, হোয়াটসঅ্যাপ বন্ধ রয়েছে। এ ছাড়া টিকটকও বন্ধ রয়েছে। প্রতিমন্ত্রী ২৩ জুলাই সাংবাদিকদের বলেছিলেন, ‘সামাজিক যোগাযোগমাধ্যমের বিষয়টি এখনো আমি নিশ্চিত বলতে পারছি না যে কতটুকু আমরা আসলে অ্যালাউ (অনুমোদন) করতে পারব।’\r\n\r\n২৩ জুলাই ব্রডব্যান্ড ইন্টারনেট চালুর পরপরই প্রতিমন্ত্রী নিজের ভেরিফায়েড ফেসবুক পেজ থেকে পোস্ট দেওয়া শুরু করেন। তিনি প্রতিনিয়তই নিজের বিভিন্ন কর্মকাণ্ডের তথ্য নিজের ফেসবুকে পোস্ট করে আসছেন। এ ছাড়া বিভিন্ন আয়োজনের সরাসরি সম্প্রচারও করছেন তিনি। ইনস্টাগ্রামেও তিনি সক্রিয় রয়েছেন। এ ছাড়া তাঁর ভেরিফায়েড টিকটক অ্যাকাউন্ট থেকেও তিনি পোস্ট করছেন।\r\n\r\nসাধারণ মানুষের জন্য ফেসবুক বন্ধ রেখে প্রতিমন্ত্রী নিজে তা ব্যবহার করছেন—এমন সমালোচনা রয়েছে নাগরিকদের মধ্যে। বিষয়টি নিয়ে জানতে চাওয়া হলে গতকাল শনিবার রাতে জুনাইদ আহ্‌মেদ প্রথম আলোকে বলেন, গুজব প্রতিরোধে মানুষকে সঠিক তথ্য জানাতে তিনি সামাজিক যোগাযোগমাধ্যমে সক্রিয় রয়েছেন। তিনি আরও বলেন, তিনিসহ সরকারের গুরুত্বপূর্ণ প্রতিষ্ঠানগুলোও এভাবে সক্রিয় থাকতে পারবে।\r\nফেসবুকের মতো যেসব প্ল্যাটফর্ম বন্ধ রয়েছে, সেগুলো মূলধারার গণমাধ্যম ব্যবহার করতে পারলে গুজব ঠেকাতে সহায়ক হতো কি না, তা জানতে চাইলে প্রতিমন্ত্রী বলেন, এ ব্যাপারে তাঁরা ভাবছেন।\r\n\r\nসামাজিক যোগাযোগমাধ্যমগুলো কবে বাংলাদেশে সবার জন্য চালু হবে, তা জানতে চাইলে জুনাইদ আহ্‌মেদ বলেন, এটা ফেসবুক, টিকটকই বলতে পারবে। তারা বাংলাদেশের সংবিধান, আইন মানবে কি না এবং নিজেদের যে গাইডলাইন আছে, সেটা ঠিকমতো মেনে চলবে কি না, এসব নিয়ে চিঠি দেওয়া হয়েছে। তারা যদি এসে ব্যাখ্যা দিয়ে যায়, তখন সরকার চালুর বিষয়ে সিদ্ধান্তে আসবে।', 'Suhada Afrin', 'সুহাদা আফরিন', 1, 1, NULL, NULL, '28-07-2024', 'July', 'why-is-state-minister-palak-active-on-facebook', '1', '2024-07-28 01:09:59', '2024-07-28 01:43:00'),
(12, 13, 12, 4, 66, 8, 'Metrorail Mirpur-10 and Kazipara station not possible to open even in a year: Obaidul Quader', 'মেট্রোরেল মিরপুর-১০ ও কাজীপাড়া স্টেশন এক বছরেও চালু করা সম্ভব নয়: ওবায়দুল কাদের', 'images/post_images/66a5fe57144a7.jpeg', 'Road Transport and Bridges Minister Obaidul Quader said that Mirpur-10 and Kazipara stations, which were affected by the attacks centered on the quota reform movement, will not be operational even in a year. He said that metro rail Kazipara and Mirpur-10 stations were destroyed. Experts said, it will not be possible to bring the equipment and make it operational even in a year.\r\n\r\nHe said these things while talking to reporters after visiting the damaged setu building in Banani of the capital on Saturday. Earlier, Prime Minister Sheikh Hasina visited the damaged bridge building.\r\n\r\nIn response to the question of when the metro rail movement can start, the bridge minister said, \"We will do what we can in phases based on the decision taken by Prime Minister Sheikh Hasina.\" We don\'t want to do anything before His decision. He is observing everything closely and he has directly visited various destroyed structures including BTV.\'\'\r\n\r\nObaidul Quader said, there is an account of the damage of everything. Under what conditions, when, which will be launched - cannot be said at the moment. The minister also admitted that people are suffering due to lack of metro rail.', 'কোটা সংস্কার আন্দোলনকে কেন্দ্র করে হামলার ঘটনায় ক্ষতিগ্রস্ত মিরপুর-১০ ও কাজীপাড়া স্টেশন এক বছরেও চালু করা সম্ভব নয় বলে জানিয়েছেন সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের। তিনি বলেন, মেট্রোরেলের কাজীপাড়া ও মিরপুর-১০ স্টেশন ধ্বংসপ্রাপ্ত। বিশেষজ্ঞরা জানিয়েছেন, এটা এক বছরেও যন্ত্রপাতি এনে সচল করা সম্ভব হবে না।\r\n\r\nআজ শনিবার রাজধানীর বনানীতে ক্ষতিগ্রস্ত সেতু ভবন পরিদর্শন শেষে সাংবাদিকদের সঙ্গে আলাপকালে তিনি এসব কথা বলেন। এর আগে প্রধানমন্ত্রী শেখ হাসিনা ক্ষতিগ্রস্ত সেতু ভবন পরিদর্শন করেন।\r\n\r\nমেট্রোরেল চলাচল কবে শুরু হতে পারে, এমন প্রশ্নের জবাবে সেতুমন্ত্রী বলেন, ‘প্রধানমন্ত্রী শেখ হাসিনা যে সিদ্ধান্ত নেবেন, ওই সিদ্ধান্তের ওপর আমরা পর্যায়ক্রমে যেখানে যা করার, সেটা করব। তাঁর সিদ্ধান্তের আগে আমরা কোনো কিছু করতে চাই না। তিনি সবকিছু গভীরভাবে পর্যবেক্ষণ করছেন এবং তিনি প্রত্যক্ষভাবে বিটিভিসহ বিভিন্ন ধ্বংসপ্রাপ্ত স্থাপনায় গেছেন।’\r\n\r\nওবায়দুল কাদের বলেন, সবকিছুর ক্ষয়ক্ষতির হিসাব আছে। কী অবস্থায়, কখন, কোনটা চালু করা যাবে—এই মুহূর্তে বলা যাচ্ছে না। মেট্রোরেল না থাকায় মানুষের ভোগান্তি হচ্ছে বলেও স্বীকার করেন মন্ত্রী।', 'special representative', 'বিশেষ প্রতিনিধি', 1, 1, NULL, 1, '28-07-2024', 'July', 'metrorail-mirpur-10-and-kazipara-station-not-possible-to-open-even-in-a-year-obaidul-quader', '1', '2024-07-28 02:16:23', '2024-07-28 02:18:28'),
(13, 13, 12, 4, 66, 8, 'Law enforcement forces were not instructed to fire: Minister of State for Shipping', 'আইনশৃঙ্খলা বাহিনীকে গুলির নির্দেশনা দেওয়া ছিল না: নৌপরিবহন প্রতিমন্ত্রী', 'images/post_images/66a60047f113f.jpg', 'Law and order forces were not instructed to fire. But how the Rangpur student was shot and killed is a matter of investigation. We demand a proper investigation into it. At the same time, whoever shot the student of Residential Model School, we also demand fair trial. Because, he is not supposed to go to the place where the student was shot.\r\n\r\nState Minister for Shipping Khalid Mahmud Chowdhury said these things in an exchange meeting at the district Awami League party office in Basuniapatti area of ​​Dinajpur city on Saturday afternoon. At this time, he visited the affected party office. During the July 18 agitation, the party office was vandalized and set on fire. District Awami League general secretary Altafuzzaman, vice president Abul Kalam Azad, joint general secretary Farukuzzaman Chowdhury and others were present in the meeting along with the state minister.\r\n\r\nAddressing the local Awami League leaders and workers, Khalid Mahmud Chowdhury said, \"We give slogans, Sheikh Hasina is not afraid and has not left the streets.\" But we can\'t live on the streets. I will give slogans but not be on the streets, that cannot be. Politics is not a place for luxury. I have entered politics means I have given myself to the masses.\'\r\n\r\nAddressing BNP and Jamaat-Shibir, the state minister said that conspiracies against Bangladesh have come again and again. As they (BNP) could not succeed in any conspiracy, they tried to set Bangladesh on fire by exploiting the protesting thoughts of students on a settled issue. What they have done in Dhaka city, it is a conscientious person, a freedom-loving person, of the liberation war Conscious people cannot. Bangladesh Awami League has also done agitations and struggles on various issues, but has never vandalized any office-court or arson.\r\n\r\nRegarding the police firing on the protestors, the state minister said, \'Today, a strong attempt is being made to blame this killing on us, on the law and order forces. The law and order forces are protecting Bangladesh from various dangers. Ensuring the safety of people. Today, that law enforcement force is being questioned. The Army, which has won the praise of the country for its various activities in peacekeeping missions, is being made and propagated false video content against them today.\r\n\r\nUrging the leaders and workers to unite, Khalid Mahmud said, \"If the Awami League is united, why is there no one in the world who can defeat Jamaat-Shibir?\"', '‘আইনশৃঙ্খলা বাহিনীকে কোনো ধরনের গুলির নির্দেশনা দেওয়া ছিল না। কিন্তু রংপুরের ছাত্রটি কীভাবে গুলিবিদ্ধ হয়ে হত্যাকাণ্ডের শিকার হলো, সেটি তদন্তের বিষয়। আমরা সেটার সঠিক তদন্তের দাবি জানাই। একইসঙ্গে রেসিডেনসিয়াল মডেল স্কুলের শিক্ষার্থীকে কে বা কারা গুলি করেছে, আমরা তারও সুষ্ঠু বিচার দাবি করি। কারণ, ওই শিক্ষার্থী যেখানে গুলিবিদ্ধ হয়েছে, সেখানে তার যাওয়ার কথা নয়।’\r\n\r\nআজ শনিবার দুপুরে দিনাজপুর শহরের বাসুনিয়াপট্টি এলাকায় জেলা আওয়ামী লীগের দলীয় কার্যালয়ে মতবিনিময় সভায় এসব কথা বলেন নৌপরিবহন প্রতিমন্ত্রী খালিদ মাহমুদ চৌধুরী। এ সময় তিনি ক্ষতিগ্রস্ত দলীয় কার্যালয়টি পরিদর্শন করেন। ১৮ জুলাই আন্দোলনের সময় দলীয় কার্যালয়ে ভাঙচুর ও অগ্নিসংযোগের ঘটনা ঘটেছিল। সভায় প্রতিমন্ত্রীর সঙ্গে উপস্থিত ছিলেন জেলা আওয়ামী লীগের সাধারণ সম্পাদক আলতাফুজ্জামান, সহসভাপতি আবুল কালাম আজাদ, যুগ্ম সাধারণ সম্পাদক ফারুকুজ্জামান চৌধুরী প্রমুখ।\r\n\r\nস্থানীয় আওয়ামী লীগের নেতা–কর্মীদের উদ্দেশে খালিদ মাহমুদ চৌধুরী বলেছেন, ‘আমরা স্লোগান দিই, শেখ হাসিনা ভয় নাই রাজপথ ছাড়ি নাই। কিন্তু আমরা রাজপথে থাকতে পারি নাই। স্লোগান দেব অথচ রাজপথে থাকব না, সেটা হতে পারে না। রাজনীতি কোনো আয়েশ করার জায়গা নয়। আমি রাজনীতিতে নাম লিখিয়েছি মানে বৃহৎ জনগোষ্ঠীর কাছে নিজেকে বিলিয়ে দিয়েছি।’\r\n\r\nবিএনপি ও জামায়াত–শিবিরকে উদ্দেশ্য করে প্রতিমন্ত্রী বলেন, বাংলাদেশের ওপর ষড়যন্ত্র বারবার এসেছে। কোনো ষড়যন্ত্রই তারা (বিএনপি) সফল হতে পারেনি বলেই একটি মীমাংসিত ইস্যুকে কেন্দ্র করে ছাত্রদের প্রতিবাদী চিন্তাভাবনাকে কাজে লাগিয়ে তাঁরা বাংলাদেশকে জ্বালিয়ে দেওয়ার চেষ্টা করেছে। ঢাকা শহরে তারা যা করেছে, এটা কোন বিবেকবান মানুষ, স্বাধীনতাকামী মানুষ, মুক্তিযুদ্ধের চেতনাকামী মানুষ করতে পারে না। বাংলাদেশ আওয়ামী লীগও নানা ইস্যুতে আন্দোলন-সংগ্রাম করেছে, কিন্তু কখনো কোনো অফিস-আদালত ভাঙচুর ও আগুন সন্ত্রাস করে নাই।’\r\n\r\nআন্দোলনকারীদের ওপর পুলিশের গুলি চালানোর বিষয়ে প্রতিমন্ত্রী বলেন, ‘আজকে এই হত্যাকাণ্ড আমাদের ওপর, আইনশৃঙ্খলা বাহিনীর ওপর চাপিয়ে দেওয়ার দৃঢ় চেষ্টা করা হচ্ছে। যে আইনশৃঙ্খলা বাহিনী বাংলাদেশকে নানা ধরনের বিপদ থেকে রক্ষা করছে। মানুষের নিরাপত্তা নিশ্চিত করছে। আজকে সেই আইনশৃঙ্খলা বাহিনীকে প্রশ্নবিদ্ধ করা হচ্ছে। যে সেনাবাহিনী শান্তি মিশনে গিয়ে বিভিন্ন কর্মকাণ্ডর দ্বারা দেশের প্রশংসা কুড়িয়েছে, আজকে তাদের বিরুদ্ধে মিথ্যা ভিডিও কনটেন্ট বানিয়ে সেগুলো প্রচার করা হচ্ছে।’\r\n\r\nনেতা–কর্মীদের ঐক্যবদ্ধ হওয়ার আহ্বান জানিয়ে খালিদ মাহমুদ বলেন, ‘আওয়ামী লীগ ঐক্যবদ্ধ হলে জামায়াত-শিবির কেন পৃথিবীর এমন কেউ নাই যারা আমাদের পরাজিত করবে।’', 'Dinajpur representative', 'প্রতিনিধি দিনাজপুর', 1, NULL, NULL, NULL, '28-07-2024', 'July', 'law-enforcement-forces-were-not-instructed-to-fire-minister-of-state-for-shipping', '1', '2024-07-28 02:24:39', '2024-07-28 03:35:33'),
(14, 13, 12, 4, 66, 8, 'The black flag march of the Democratic Student Alliance to demand the resignation of the government', 'সরকারের পদত্যাগ দাবিতে কালো পতাকা মিছিল গণতান্ত্রিক ছাত্র জোটের', 'images/post_images/66a611d17c44c.JPG', 'Calling the killing of students in the quota reform movement as a \'genocide\', the Democratic Students\' Union held a black flag march demanding the resignation of the government, opening of educational institutions, etc. The black flag procession started from Press Club and ended at Purana Paltan intersection. The leaders and activists of Democratic Student Alliance held a short rally there.\r\n\r\nOn Sunday (July 28) the procession started at 1:15 pm. The leaders and activists of the coalition also demanded the withdrawal of curfew, withdrawal of cases, release of imprisoned students. From the procession, they started chanting various anti-government slogans.\r\n\r\nSpeakers in the rally said that the students\' quota reform movement has turned into a public uprising. The government carried out brutal killings to suppress the uprising. Students have been picked up from their homes. We are holding a black flag march in protest.\r\n\r\nRagib Naeem, the central coordinator of the Democratic Students\' Union and president of the students\' union, said that there is no opportunity to separate the students as a movement. From 9-year-old children to 50-year-old people have been killed. This killing carried out in such a short time is not only murder, but genocide. Come, people from all walks of life join the movement to resign this dictatorial government. Until this government falls, our movement will continue.\r\n\r\nRafiqul Zaman Farid, General Secretary of Student Front, Dilip Roy, President of Revolutionary Student Alliance, Chhayedul Haque Nishan, President of Democratic Student Council, Deepa Mallick, Vice President of Bangladesh Student Federation, Amal Tripura, General Secretary of Pahari Student Council and others were also present.', 'কোটা সংস্কার আন্দোলনে গুলিবিদ্ধ হয়ে শিক্ষার্থীদের নিহত হওয়ার ঘটনাকে ‘গণহত্যা’ দাবি করে সরকারের পদত্যাগ, শিক্ষা প্রতিষ্ঠান খুলে দেওয়াসহ বিভিন্ন দাবিতে কালো পতাকা মিছিল করেছে গণতান্ত্রিক ছাত্র জোট। প্রেসক্লাব থেকে শুরু হওয়া কালো পতাকা মিছিলটি পুরানা পল্টন মোড়ে গিয়ে শেষ হয়। সেখানে সংক্ষিপ্ত সমাবেশ করেন গণতান্ত্রিক ছাত্র জোটের নেতাকর্মীরা।\r\n\r\nরবিবার (২৮ জুলাই) দুপুর পৌনে ১টায় মিছিল শুরু হয়। কারফিউ প্রত্যাহার, মামলা দিয়ে তুলে নেওয়া, বন্দি ছাত্রদের মুক্তির দাবিও জানান জোটের নেতাকর্মীরা। মিছিল থেকে তারা সরকারবিরোধী বিভিন্ন স্লোগান দিতে থাকেন।\r\n\r\nসমাবেশে বক্তারা বলেন, ছাত্রদের কোটা সংস্কার আন্দোলন গণঅভ্যূত্থানে রূপ নিয়েছে। সেই গণঅভ্যূত্থান দমনের জন্য সরকার নৃশংস হত্যাকাণ্ড চালিয়েছে। বাসা-বাড়ি থেকে ছাত্রদের তুলে নেওয়া হয়েছে। আমরা এর প্রতিবাদে কালো পতাকা মিছিল করছি।\r\n\r\nগণতান্ত্রিক ছাত্র জোটের কেন্দ্রীয় সমন্বয়ক ও ছাত্র ইউনিয়নের সভাপতি রাগীব নাঈম বলেন, ছাত্রদের আন্দোলন বলে আর আলাদা করার সুযোগ নেই। ৯ বছরের শিশু থেকে ৫০ বছরের মানুষকে হত্যা করা হয়েছে। এত কম সময় চালানো এই হত্যাকাণ্ড শুধু হত্যা নয়, গণহত্যা। আসুন, সব শ্রেণি-পেশার মানুষ এই স্বৈরাচারী সরকারের পদত্যাগের আন্দোলনে যোগ দিন। যতদিন এই সরকারের পতন না হবে, ততদিন আমাদের এই আন্দোলন চলবে।\r\n\r\nএ সময় আরও উপস্থিত ছিলেন ছাত্র ফ্রণ্টের সাধারণ সম্পাদক রাফিকুল জামান ফরিদ, বিপ্লবী ছাত্র মৈত্রীর সভাপতি দিলীপ রায়, গণতান্ত্রিক ছাত্র কাউন্সিলের সভাপতি ছায়েদুল হক নিশান, বাংলাদেশ ছাত্র ফেডারেশনের সহ-সভাপতি দীপা মল্লিক, পাহাড়ি ছাত্র পরিষদের সাধারণ সম্পাদক অমল ত্রিপুরা প্রমুখ।', 'Bangla Tribune reports', 'বাংলা ট্রিবিউন রিপোর্ট', 1, NULL, NULL, NULL, '28-07-2024', 'July', 'the-black-flag-march-of-the-democratic-student-alliance-to-demand-the-resignation-of-the-government', '1', '2024-07-28 03:39:29', NULL);
INSERT INTO `posts` (`id`, `cat_id`, `subcat_id`, `dist_id`, `subdist_id`, `user_id`, `title_en`, `title_bn`, `image`, `details_en`, `details_bn`, `tags_en`, `tags_bn`, `headline`, `first_section`, `first_section_thumbnail`, `bigthumbnail`, `post_date`, `post_month`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(15, 13, 13, 4, 66, 8, 'Why are 3 coordinators of the quota movement in custody, said the Home Minister', 'কোটা আন্দোলনের ৩ সমন্বয়ক কেন হেফাজতে, জানালেন স্বরাষ্ট্রমন্ত্রী', 'images/post_images/66a6144610dec.jpg', 'Home Minister Asaduzzaman Khan Kamal said that the three leaders of the quota reform movement (the three coordinators of the anti-discrimination student movement) have been taken into police custody. \"One in three told his father on the phone, \'I\'m in hiding to be safe,\'\" he said. They spread such news on social media. On receiving such news, I have taken them into safe custody.We are asking them who wants to attack them. After these inquiries, I will decide what action can be taken about them.\r\n\r\nHe said this in response to a question from reporters at the Narayanganj District Police Superintendent\'s office on Saturday (July 27). Earlier, the minister visited various establishments affected by the violent attack in Narayanganj demanding quota reform.\r\n\r\nMentioning that a group is spreading rumors on social media, the Home Minister said, \'Such rumors are being spread - which even common people cannot be okay with hearing. getting confused You are journalists, you will save the countrymen from rumours. They have spread rumors on one side and attacked on the other. Such a concerted attack can only be undertaken by dedicated forces. Which is with Jamaat-BNP and militants.We are getting proof that it is their organized movement and attack. The police force dealt with them with great patience.\r\n\r\nRequesting the truth to be presented without spreading rumours, he said, \'You have also seen how many young children are being brought forward. Used them as human shields. That\'s why our police had to take time.When they moved away, then the police took action. My request is that you take a stand against those who are spreading rumours. You will tell the countrymen what is the real story.\r\n\r\nMentioning that the students have been misguided, the minister said, \"Many of those who have died are ordinary people who have misguided the students during the students\' movement.\" Apart from this, many of our Awami League and Chhatra League have accepted martyrdom. Three policemen have accepted martyrdom. A policeman was killed and hanged.Narsingdi Jail was breached and prisoners and militants were taken out and weapons looted. Apart from this, they vandalized and burnt the Narayanganj district and metropolitan Awami League offices. Their outrage was the police and Awami League. In order to kill this policeman today, various places including the police station were set on fire.\r\n\r\nMentioning that the quota has now gone to 98 percent merit, he said, \'You know we who fought the liberation war. Their children have already passed 30 years. So the quota of freedom fighters will no longer be with the freedom fighters. It\'s already gone to merit list. 98 percent have gone now in Medha.\r\n\r\nPointing out that the quota agitating students are not controlled by themselves, the minister said, \"We thought that the students would immediately welcome it and withdraw the agitation and go back to the educational institutions.\" But we sadly saw that they did not do that. Because they are not controlled by them. This has been proved by seeing the play of destruction in the last few days.\r\n\r\nReferring to the violent rampage, the Home Minister said, \"Two members of you journalists have been killed. How they neglected a female journalist. They are enemies of the people and the country. They burnt the bridge building that had our Padma bridge documents, data and plans. Destroyed the relief building, burnt the BTV building, set fire to the Dream Metrorail and Elevated Express.\r\n\r\nIGP Chowdhury Abdullah Al Mamun, Dhaka Range DIG Nurul Islam, RAB-11 CEO Tanveer Mahmud Pasha, Narayanganj District Commissioner Mahmudul Haque, Narayanganj Superintendent of Police Golam Mostafa Russell and others were also present.', 'কোটা সংস্কার আন্দোলনের তিন নেতাকে (বৈষম্যবিরোধী ছাত্র আন্দোলনের তিন সমন্বয়ক) পুলিশ হেফাজতে নেওয়া হয়েছে বলে জানিয়েছেন স্বরাষ্ট্রমন্ত্রী আসাদুজ্জামান খান কামাল। তিনি বলেছেন, ‘তিন জনের মধ্যে একজন তার বাবাকে ফোনে বলেছেন, ‘‘আমি আত্মগোপনে রয়েছি নিরাপদে থাকার জন্য’’। সোশ্যাল মিডিয়াতে তারা এরকম খবর প্রচার করেছে। এরকম খবর পেয়ে তাদেরকে সেফ কাস্টোডিতে নিয়েছি। আমরা তাদের কাছে জিজ্ঞাসাবাদ করছি, কারা তাদের আক্রমণ করতে চায়। এসব জিজ্ঞাসাবাদ শেষে সিদ্ধান্ত নেবো তাদের বিষয়ে কী ব্যবস্থা গ্রহণ করা যায়।’\r\n\r\nশনিবার (২৭ জুলাই) দুপুরে নারায়ণগঞ্জ জেলা পুলিশ সুপারের কার্যালয়ে সাংবাদিকদের এক প্রশ্নের জবাবে তিনি এ কথা বলেন। এর আগে কোটা সংস্কারের দাবিতে নারায়ণগঞ্জে সহিংস হামলায় ক্ষতিগ্রস্ত বিভিন্ন স্থাপনা পরিদর্শন করেন মন্ত্রী।\r\n\r\nএকটি মহল সামাজিক যোগাযোগমাধ্যমে গুজব ছড়াচ্ছে উল্লেখ করে স্বরাষ্ট্রমন্ত্রী বলেন, ‘এমন গুজব ছড়াচ্ছে- যেগুলো শুনে সাধারণ মানুষও ঠিক থাকতে পারে না। বিভ্রান্ত হচ্ছে। আপনারা সাংবাদিক, আপনারা গুজব থেকে দেশবাসীকে বাঁচাবেন। এরা একদিকে গুজব ছড়িয়েছে, আরেকদিকে আক্রমণ করেছে। এই রকম সংঘবদ্ধ আক্রমণ শুধুমাত্র ডেডিকেটেড ফোর্সরা করতে পারে। যেটা জামায়াত-বিএনপি ও জঙ্গিদের কাছে রয়েছে। আমরা প্রমাণ পাচ্ছি, এটি তাদের সংঘবদ্ধ আন্দোলন ও আক্রমণ। পুলিশ বাহিনী এগুলোকে অত্যন্ত ধৈর্যের সঙ্গে মোকাবিলা করেছেন।’\r\n\r\nগুজব না ছড়িয়ে সত্য ঘটনা তুলে ধরার জন্য অনুরোধ করে তিনি বলেন, ‘আপনারা এটাও দেখেছেন কতগুলো বাচ্চা-বাচ্চা ছেলে ওদের বয়স হয়নি, তাদেরকেও সামনে নিয়ে আসছে। তাদেরকে মানবঢাল হিসেবে ব্যবহার করেছে। সেজন্য আমাদের পুলিশকে সময় নিতে হয়েছে। তারা সরে গেলে তারপর পুলিশ ব্যবস্থা নিয়েছে। আমার অনুরোধ হলো যারা গুজব ছড়াচ্ছে- তাদের বিরুদ্ধে আপনাদের অবস্থান থাকবে। সত্যি ঘটনা কী সেটা আপনারা দেশবাসীকে জানাবেন।’\r\n\r\nছাত্রদের মিসগাইড করা হয়েছে উল্লেখ করে মন্ত্রী বলেন, ‘ছাত্রদের আন্দোলনের ফাঁকে ছাত্রদের মিসগাইড করে যে হত্যাকাণ্ডগুলো ঘটিয়েছে, যারা মৃত্যুবরণ করেছেন এদের অনেকে সাধারণ মানুষ। এ ছাড়া আমাদের আওয়ামী লীগের এবং ছাত্রলীগের অনেকে শাহাদাত বরণ করেছেন। তিন জন পুলিশ শাহাদাত বরণ করেছেন। এক পুলিশ সদস্যকে মেরে ঝুলিয়ে রেখেছেন। নরসিংদী জেলখানা ভেঙে কয়েদিসহ জঙ্গিদের বের করে দিয়েছে, অস্ত্র লুট করে নিয়েছে। এ ছাড়া নারায়ণগঞ্জ জেলা ও মহানগর আওয়ামী লীগ অফিস কার্যালয় তারা ভাঙচুর করে পুড়িয়ে দিয়েছে। তাদের আক্রোশ ছিল পুলিশ ও আওয়ামী লীগ। এই পুলিশকে আজকে হত্যার উদ্দেশে থানাসহ বিভিন্ন স্থানে অগ্নিসংযোগ করা হয়েছে।’\r\n\r\nকোটা এখন ৯৮ শতাংশ মেধায় চলে গেছে উল্লেখ করে তিনি বলেন, ‘আপনারা জানেন আমরা যারা মুক্তিযুদ্ধ করেছি। তাদের সন্তানদের ইতোমধ্যে ৩০ বছর পার হয়ে গেছে। সুতরাং মুক্তিযোদ্ধাদের কোটা এখন আর মুক্তিযোদ্ধাদের কাছে থাকবে না। এটা অলরেডি মেধার তালিকায় চলে গেছে। মেধায় এখন ৯৮ শতাংশ চলে গেছে।’\r\n\r\nকোটা আন্দোলনকারী ছাত্ররা নিজেদের দ্বারা নিয়ন্ত্রিত নয় বলে উল্লেখ করে মন্ত্রী বলেন, ‘আমরা ভেবেছিলাম, ছাত্ররা তাৎক্ষণিকভাবে এটাকে স্বাগত জানাবে এবং আন্দোলন উইথড্র করবে এবং শিক্ষা প্রতিষ্ঠানে ফিরে যাবে। কিন্তু আমরা দুঃখের সঙ্গে দেখলাম যে, তারা সেই কাজটি করেনি। কারণ তারা তাদের দ্বারা কন্ট্রোলড নয়। এটি প্রমাণ হয়েছে গত কয়েকদিনে ধ্বংসের লীলাখেলা দেখে।’\r\n\r\nসহিংস তাণ্ডবের কথা উল্লেখ করে স্বরাষ্ট্রমন্ত্রী বলেন, ‘যারা সাংবাদিকতা করেন আপনাদের দুই সদস্য নিহত হয়েছে। এক নারী সাংবাদিককে ওরা কীভাবে নাজাহেল করেছে। এরা জনগণ ও দেশের শত্রু। আমাদের পদ্মা সেতুর ডকুমেন্ট, ডেটা ও প্ল্যান ছিল সেই সেতু ভবন তারা পুড়িয়ে দিয়েছে। ত্রাণ ভবন বিনষ্ট করেছে, বিটিভি ভবন পুড়িয়ে দিয়েছে, স্বপ্নের মেট্রোরেল ও এলিভেটেড এক্সপ্রেসে অগ্নিসংযোগ করেছে।’\r\n\r\n‘নারায়ণগঞ্জের চাষাঢ়া-সাইনবোর্ডসহ বিভিন্ন স্থানে ওরা পুলিশের ওপর হামলা করেছে। পুলিশের পিকআপ ভ্যান ভাঙচুরসহ অগ্নিসংযোগ করেছে। পিবিআই অফিস, পাসপোর্ট অফিস, পুলিশ বক্স ভাঙচুর ও অগ্নিসংযোগ করেছে, সদর মডেল থানা আক্রমণের চেষ্টা, মদরপুর মোড়ে হামলা করে কর্তব্যরত ছয় পুলিশ সদস্যকে গুরুতর জখম করা হয়, মদনপুর দুটি পুলিশ বক্স ভাঙচুর ও অগ্নিসংযোগ, শিল্প পুলিশ, বিজিবি ব্যাটালিয়নসহ যুব উন্নয়ন অফিসে ওপরে হামলা করা হয়। শিমরাইল হাইওয়ে পুলিশ ক্যাম্প ভবন আক্রমণ করে মা হাসপাতাল থেকে দুই নবজাতক, সাত গর্ভবতীসহ ১৭ জনকে উদ্ধার করে যৌথ বাহিনী। আটকে পড়া হাইওয়ে পুলিশের ৩১ পুলিশ সদস্যকে উদ্ধার করা হয়। শিমরাইল ডাচ বাংলা ব্যাংক কার্যালয় থেকে আগুনে পুড়ে যাওয়া তিন ব্যক্তির পুড়ে যাওয়া লাশ উদ্ধার করা হয়। এসব ঘটনায় নারায়ণগঞ্জের বিভিন্ন থানায় মামলা হয়েছে। এতে ৪৮৭ জনকে গ্রেফতার করা হয়েছে’- উল্লেখ করেন মন্ত্রী।\r\n\r\nএ সময় আরও উপস্থিত ছিলেন- আইজিপি চৌধুরী আবদুল্লাহ আল মামুন, ঢাকা রেঞ্জের ডিআইজি নুরুল ইসলাম, র‌্যাব-১১ এর সিইও তানভীর মাহমুদ পাশা, নারায়ণগঞ্জ জেলা প্রশাসক মাহমুদুল হক, নারায়ণগঞ্জ পুলিশ সুপার গোলাম মোস্তফা রাসেলসহ প্রমুখ।', 'Narayanganj representative', 'নারায়ণগঞ্জ প্রতিনিধি', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'why-are-3-coordinators-of-the-quota-movement-in-custody-said-the-home-minister', '1', '2024-07-28 03:49:58', NULL),
(16, 14, 15, NULL, NULL, 8, 'Hezbollah\'s plan, Israel\'s threat - two sides ready for war?', 'হিজবুল্লাহর পরিকল্পনা, ইসরায়েলের হুমকি-যুদ্ধের জন্য প্রস্তুত দুই পক্ষ ?', 'images/post_images/66a621f920d7e.png', 'Hezbollah is preparing for different scenarios. Because the ongoing conflict with Israel is threatening to turn into something bigger. Israeli Prime Minister Benjamin Netanyahu said in a statement on Sunday (July 28) that they are considering ending the Rafah offensive and shifting operations to Lebanon. In a special report, Qatar-based media Al Jazeera reported this news.\r\n\r\nHezbollah leader Hassan Nasrallah has been saying repeatedly since October that they can and will fight until a cease-fire is agreed to in Gaza.\r\n\r\nEven if Israel commits the bulk of its military forces to Lebanon, Hezbollah will remain steadfast in its position, analysts believe.\r\n\r\nIsraeli military action in Lebanon is feared to have regional and possibly international ramifications.\r\n\r\nAmal Saad, author of two books on Hezbollah, said, \"I don\'t think Hezbollah will come to the talks unless there is a cease-fire in Gaza.\" Their battle will continue.\r\n\r\nThe truce is being hampered by Netanyahu\'s hardline coalition partners demanding the complete defeat of Hamas before the war ends. Even Israeli officials, however, remain skeptical of Hamas\' defeat.\r\n\r\nOn June 19, Nasrallah demonstrated the strength of his party. Said that there are more than 100,000 fighters in his group. Although regional armed group chiefs showed interest in joining his party, he initially declined. But he also expressed that he was overwhelmed by their proposal.\r\n\r\nEarlier, he released drone footage of the occupation of the Israeli city of Haifa. He also released videos of targets between Israel and the Mediterranean Sea. That is, when the war starts, they will be hit.\r\n\r\nImad Salamey, a political scientist at the Lebanese American University, said Hezbollah was demonstrating options for escalating the war to Israel.\r\n\r\nNasrallah also threatened Cyprus. If the European Union country supports Israel, it will not be abandoned. Cyprus has said it will not cooperate militarily with Israel.\r\n\r\nThreatening Cyprus is implicitly asking the EU to refrain from supporting Israel, Salamey said.\r\n\r\nKarim Emil Bitar, a professor of international relations at Saint Joseph University in Beirut, said Hezbollah has probably developed a strategy for a limited and prolonged war in southern Lebanon, and a strategy for a massive full-scale war.\r\n\r\nSome analysts believe a limited ground offensive in southern Lebanon is possible, although it would result in heavy casualties on both sides.\r\n\r\nAlthough Hezbollah and the Iranian government know that such an attack would be extremely risky and destructive for Lebanon, Bitar said.\r\n\r\nUS Special Envoy Amos Hochstein recently visited Tel Aviv and Beirut. He made clear to Hezbollah, it would be a mistake to assume that the US could prevent Israel from starting a larger war.\r\n\r\nThe issues of diplomacy and military action are intertwined. Both sides are taking these issues into consideration. But Bitar said, we are in a situation which is very unstable. Any miscalculation on either side could push the region into a new full-blown conflict.', 'হিজবুল্লাহ বিভিন্ন পরিস্থিতির জন্য প্রস্তুতি নিচ্ছে। কারণ ইসরায়েলের সঙ্গে চলমান সংঘাত আর বড় কিছুতে পরিণত হওয়ার হুমকি পাচ্ছে তারা। রবিবার (২৮ জুলাই) ইসরায়েলি প্রধানমন্ত্রী বেনিয়ামিন নেতানিয়াহু এক বিবৃতিতে জানিয়েছে, তারা রাফাহ আক্রমণ বন্ধ করে লেবাননের দিকে অভিযান স্থানান্তরের কথা ভাবছে। বিশেষ প্রতিবেদনে কাতারভিত্তিক সংবাদমাধ্যম আল জাজিরা এ খবর জানিয়েছে।\r\n\r\nহিজবুল্লাহ নেতা হাসান নাসরাল্লাহ অক্টোবর থেকেই বারবার বলে আসছেন, গাজায় যুদ্ধবিরতি সম্মত না হওয়া পর্যন্ত তারা লড়াই করতে পারে এবং করবে।\r\n\r\nএমনকি ইসরায়েল যদি তার সামরিক বাহিনীর সিংহভাগ লেবাননের দিকে দেয়, তবু হিজবুল্লাহ তার অবস্থানে অনঢ় থাকবে বলে মনে করছেন বিশ্লেষকরা।\r\n\r\nলেবাননে ইসরায়েলি সামরিক পদক্ষেপ আঞ্চলিক এবং সম্ভবত আন্তর্জাতিকভাবে ছড়িয়ে পড়ার আশঙ্কা করা হচ্ছে।\r\n\r\nহিজবুল্লাহর উপর দুটি বইয়ের লেখক আমাল সাদ বলেছেন, আমি মনে করি না গাজায় যুদ্ধবিরতি না হলে হিজবুল্লাহ আলোচনায় আসবে। তাদের যুদ্ধ চলমান থাকবে।\r\n\r\nনেতানিয়াহুর কট্টরপন্থী জোটের অংশীদাররা যুদ্ধ শেষ হওয়ার আগে হামাসের সম্পূর্ণ পরাজয় দাবি করার কারণে যুদ্ধবিরতি বাধাগ্রস্ত হচ্ছে। যদিও ইসরায়েলি কর্মকর্তাদের মধ্যেও হামাসের পরাজয় নিয়ে সংশয় রয়েছে।\r\n\r\nগত ১৯ জুন নাসরাল্লাহ তার দলের শক্তি প্রদর্শন করেছেন। জানিয়েছেন, তার দলে এক লাখের বেশি যোদ্ধা রয়েছে। আঞ্চলিক সশস্ত্র গোষ্ঠী প্রধানরা তার দলে যোগ দেওয়ার আগ্রহ দেখালেও, প্রাথমিকভাবে তিনি তা প্রত্যাখ্যান করেছেন। কিন্তু তাদের প্রস্তাবে তিনি যে অভিভূত সেটিও জানিয়েছিলেন।\r\n\r\nএর আগে, তিনি ইসরায়েলি শহর হাইফা দখলের ড্রোন ফুটেজ প্রকাশ করেছিলেন। এছাড়া ইসরায়েল ও ভূমধ্যসাগরের মধ্যবর্তী লক্ষ্যবস্তুগুলোর ভিডিও প্রকাশ করেছেন। অর্থাৎ যুদ্ধ শুরু হলে এগুলোতে আঘাত করা হবে।\r\n\r\nলেবানিজ আমেরিকান ইউনিভার্সিটির রাষ্ট্রবিজ্ঞানী ইমাদ সালামেয় বলেছেন, হিজবুল্লাহ ইসরায়েলের কাছে যুদ্ধের প্রসারিত করার বিকল্পগুলি প্রদর্শন করছে।\r\n\r\nনাসরুল্লাহ সাইপ্রাসকেও হুমকি দিয়েছিলেন। ইউরোপীয় ইউনিয়নভুক্ত দেশটি ইসরায়েলকে সমর্থন করলে, ছেড়ে দেওয়া হবে না বলে জানিয়েছিলেন। সাইপ্রাস ইসরায়েলকে সামরিকভাবে সহযোগিতা না করার কথা জানিয়েছে।\r\n\r\nসালামেয় বলেছেন, সাইপ্রাসকে হুমকি মানে ইসরায়েলকে সমর্থনের বিষয়ে পরোক্ষভাবে ইউরোপীয় ইউনিয়নকে বিরত থাকতে বলা।\r\n\r\nবৈরুতে সেন্ট জোসেফ বিশ্ববিদ্যালয়ের আন্তর্জাতিক সম্পর্কের অধ্যাপক করিম এমিল বিতার বলেছেন, দক্ষিণ লেবাননে একটি সীমিত ও দীর্ঘস্থায়ী যুদ্ধের ক্ষেত্রে হিজবুল্লাহ সম্ভবত একটি কৌশল তৈরি করেছে এবং ব্যাপক পূর্ণ-স্কেল যুদ্ধের জন্যও একটি কৌশল প্রস্তুত করেছে।\r\n\r\nকিছু বিশ্লেষক বিশ্বাস করেন, দক্ষিণ লেবাননে সীমিত স্থল আক্রমণ সম্ভব, যদিও এতে উভয় পক্ষের ব্যাপক প্রাণহানি ঘটবে।\r\n\r\nযদিও হিজবুল্লাহ ও ইরান সরকার জানে যে, এ ধরনের আক্রমণ লেবাননের জন্য অত্যন্ত ঝুঁকিপূর্ণ এবং ধ্বংসাত্মক হবে বলে জানান বিতার।\r\n\r\nমার্কিন বিশেষ দূত আমোস হোচস্টেইন সম্প্রতি তেল আবিব এবং বৈরুতে সফর করেছেন। তিনি হিজবুল্লাহকে স্পষ্ট করেছেন, এটি অনুমান করা ভুল হবে যে যুক্তরাষ্ট্র ইসরায়েলকে বৃহত্তর যুদ্ধ শুরু করতে বাধা দিতে পারে।\r\n\r\nকূটনীতি এবং সামরিক পদক্ষেপের বিষয়গুলো পরস্পর সংযুক্ত। দুই পক্ষই এই বিষয়গুলিকে বিবেচনায় নিচ্ছে। তবে বিতার জানিয়েছেন, আমরা এমন একটি পরিস্থিতিতে রয়েছি যা অত্যন্ত অস্থির। উভয় পক্ষের যে কোনও ভুল গণনা এই অঞ্চলকে একটি নতুন পূর্ণাঙ্গ সংঘাতের দিকে নিয়ে যেতে পারে।', 'International Desk', 'আন্তর্জাতিক ডেস্ক', 1, NULL, NULL, 1, '28-07-2024', 'July', 'hezbollahs-plan-israels-threat-two-sides-ready-for-war', '1', '2024-07-28 04:48:25', NULL),
(17, 14, 16, NULL, NULL, 8, 'Three students die in Delhi coaching center floods, students protest', 'দিল্লির কোচিং সেন্টারে বন্যায় তিন শিক্ষার্থীর মৃত্যু, ছাত্রদের বিক্ষোভ', 'images/post_images/66a62370dfaa3.JPG', 'Three students drowned in the basement of a coaching center in Delhi\'s Rajendra Nagar, the Indian capital. They went to the basement library of the coaching center on Saturday (July 27) evening. There suddenly rain water started entering. Although many people went out as the water rose, the three students were trapped. They died in the basement. Due to this, student protests started in Delhi. Indian media NDTV reported this news.\r\n\r\nAccording to the police, at least 30 to 35 students had gone to study in the basement library of the coaching center. Suddenly water started entering there. Seven feet of the nine-foot-deep basement was flooded. While some managed to get out naturally, the rest were pulled up by ropes.\r\n\r\nThe police and fire brigade went to the spot after receiving the information. Three dead bodies were recovered by removing the water from there through the pump.\r\n\r\nCentral Deputy Commissioner of Police M Harshvardhan said a criminal case has been registered in this regard.', 'ভারতের রাজধানী দিল্লির রাজেন্দ্র নগরের একটি কোচিং সেন্টারের বেসমেন্টে জমা পানিতে ডুবে তিন শিক্ষার্থীর মৃত্যু হয়েছে। শনিবার (২৭ জুলাই) সন্ধ্যায় ওই কোচিং সেন্টারের বেসমেন্টের লাইব্রেরিতে গিয়েছিলেন তারা। সেখানেই হঠাৎ বৃষ্টির পানি ঢুকতে শুরু করে। পানি বাড়তে থাকায় অনেকেই বেড়িয়ে গেলেও, ওই তিন শিক্ষার্থী আটকা পড়ে। বেসমেন্টেই তাদের মৃত্যু হয়। এর জেরে দিল্লিতে ছাত্রদের বিক্ষোভ শুরু হয়েছে। ভারতের সংবাদমাধ্যম এনডিটিভি এ খবর জানিয়েছে।\r\n\r\nপুলিশ জানিয়েছে, কোচিং সেন্টারটির বেসমেন্টের লাইব্রেরিতে পড়তে গিয়েছিলেন অন্তত ৩০ থেকে ৩৫ জন শিক্ষার্থী।হঠাৎ সেখানে পানি ঢুকতে শুরু করে। নয় ফুট গভীর বেসমেন্টের সাত ফুটই জলমগ্ন হগয়ে পড়ে। কেউ কেউ স্বাভাবিকভাবে বেড়িয়ে আসতে পারলেও, বাকিদের দড়ি দিয়ে টেনে তোলা হয়।\r\n\r\nখবর পেয়ে ঘটনাস্থলে যায় পুলিশ ও দমকল বাহিনী। পাম্পের মাধ্যমে সেখান থেকে পানি সরিয়ে তিন মৃতদেহ উদ্ধার করা হয়।\r\n\r\nকেন্দ্রীয় ডেপুটি কমিশনার অফ পুলিশ এম হর্ষবর্ধন বলেছেন, এই বিষয়ে একটি ফৌজদারি মামলা দায়ের করা হয়েছে।', 'International Desk', 'আন্তর্জাতিক ডেস্ক', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'three-students-die-in-delhi-coaching-center-floods-students-protest', '1', '2024-07-28 04:54:40', NULL),
(18, 14, 15, 3, NULL, 8, '\'Vote in November, never vote again\'', '‘নভেম্বরের নির্বাচনে ভোট দিন, আর কখনও ভোট দিতে হবে না’', 'images/post_images/66a625db1c645.jpg', 'Republican presidential candidate Donald Trump has told the Christian community that if they vote for him in the November election, they will never have to vote again if they elect him for a four-year term. Trump said these things while campaigning in Florida on Friday (July 26). But it is not clear what exactly he meant by this word.\r\n\r\n\"Dear Christians, you need to get out of your house and vote, for four more years,\" Trump said. Never have to do it again. You know, it will be finalized so that you don\'t need to vote anymore.\'\r\n\r\n \r\n\"Dear friends, I love you. I am a Christian. I tell you, go to the polling station and vote for me. If we become president this time, we will fix it so well that you don\'t have to vote anymore. Trump said.\r\n\r\nRead more: Netanyahu\'s meeting with Trump\r\n\r\nIt is not clear what the former US president, accused of inciting the 2020 Capitol Hill riots, meant by his words.\r\n\r\n\r\nMeanwhile, Kamala Harris\'s campaign did not directly comment on Trump\'s statement. But his spokesman, Jason Singer, described Trump\'s overall speech as \"outlandish\" and \"backward-looking.\"\r\nTrump has previously said he would be a dictator for a day in closing the southern border with Mexico when he returns to office in November. However, he later dismissed his comment as a joke.', 'রিপাবলিকান প্রেসিডেন্ট প্রার্থী ডোনাল্ড ট্রাম্প খ্রিস্টান সম্প্রদায়ের উদ্দেশে বলেছেন, তারা যদি আগামী নভেম্বরের নির্বাচনে তাকে ভোট দিয়ে চার বছরের জন্য প্রেসিডেন্ট নির্বাচিত করেন তাহলে আর কখনও তাদের ভোট দিতে হবে না। শুক্রবার ( ২৬ জুলাই) ফ্লোরিডায় নির্বাচনী প্রচারণা চালানোর সময় এসব কথা বলেন ট্রাম্প। তবে এই কথার মাধ্যমে তিনি ঠিক কী বোঝাতে চেয়েছেন তা স্পষ্ট নয়।\r\n\r\nট্রাম্প বলেন, ‘প্রিয় খ্রিস্টান সম্প্রদায়, আপনাদের ঘর থেকে বের হতে হবে এবং ভোট দিতে হবে, আরও চার বছরের জন্য। আর কখনও এটি করতে হবে না। আপনারা কি জানেন, এটা একেবারে চূড়ান্ত করে ফেলা হবে, যাতে আপনাদের আর ভোট দেয়ার প্রয়োজন না হয়।’\r\n\r\n \r\n‘প্রিয় বন্ধুরা, আমি আপনাদের ভালোবাসি। আমি একজন খ্রিস্টান। আমি আপনাদের বলছি, ভোটকেন্দ্রে যাবেন এবং আমাকে ভোট দেবেন। এবার প্রেসিডেন্ট হলে আমরা এটা এত ভালোভাবে ঠিক করে ফেলব যে আর আপনাদের ভোট দিতে হবে না।’ বলেন ট্রাম্প।\r\n\r\nআরও পড়ুন:ট্রাম্পের সঙ্গে নেতানিয়াহুর বৈঠক\r\n\r\n২০২০ সালে ক্যাপিটল হিল দাঙ্গায় উসকানি দেয়ার ঘটনায় অভিযুক্ত যুক্তরাষ্ট্রের সাবেক প্রেসিডেন্ট তার এই কথাগুলো দিয়ে কী বোঝাতে চেয়েছেন তা পরিষ্কার নয়।\r\n\r\n\r\nএদিকে কমলা হ্যারিসের প্রচার শিবির ট্রাম্পের এই কথা নিয়ে সরাসরি কোনো মন্তব্য করেনি। তবে তার মুখপাত্র জেসন সিঙ্গার ট্রাম্পের সামগ্রিক বক্তৃতাকে ‘উদ্ভট’ এবং ‘অনগ্রসর দৃষ্টিভঙ্গি’ বলে বর্ণনা করেছেন।\r\n \r\nট্রাম্প এর আগে বলেছিলেন যে, নভেম্বরে ক্ষমতায় ফিরলে মেক্সিকোর সঙ্গে দক্ষিণ সীমান্ত বন্ধ করে দেয়ার ক্ষেত্রে তিনি একদিনের জন্য স্বৈরশাসক হবেন। পরে অবশ্য তিনি তার মন্তব্যকে কৌতুক বলে উড়িয়ে দেন।', 'International Desk', 'আন্তর্জাতিক ডেস্ক', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'vote-in-november-never-vote-again', '1', '2024-07-28 05:04:59', '2024-07-28 05:06:20'),
(19, 14, 15, 3, NULL, 8, 'Jamaat-Shibir terrorists infiltrated quota movement in disguise: Prime Minister', 'কোটা আন্দোলনে ছদ্মবেশে জামায়াত-শিবিরের সন্ত্রাসীরা অনুপ্রবেশ করে : প্রধানমন্ত্রী', 'images/post_images/66a627661ba7d.png', 'Prime Minister Sheikh Hasina said Jamaat-Shibir terrorists had initially entered under the guise of participants in the quota reform movement, maintaining a low profile. But later they dangerously moved to the forefront of the movement.\r\n\r\nSpanish Ambassador to Bangladesh Gabriel Maria Cistiaga Ochoa de Chinchicru met the Prime Minister at Ganabhaban on Sunday (July 28). The Prime Minister said these things during the meeting. \r\n\r\n \r\nLater, the press secretary of the Prime Minister. Naimul Islam Khan briefed the journalists after the meeting.\r\n\r\nTerrorists have actually attacked those establishments, which highlights the success the government has achieved after working for the welfare of the people. In this context, Sheikh Hasina mentioned the Covid Hospital, Metrorail, Expressway, Setubhaban, Disaster Management Building and Data Center.', 'প্রধানমন্ত্রী শেখ হাসিনা বলেছেন, জামায়াত-শিবিরের সন্ত্রাসীরা প্রাথমিকভাবে লো প্রোফাইল বজায় রেখে কোটা সংস্কার আন্দোলনে অংশগ্রহণকারীদের ছদ্মবেশে প্রবেশ করেছিল। ‘কিন্তু পরে তারা বিপজ্জনকভাবে আন্দোলনের সামনের সারিতে চলে আসে।\r\n\r\nরোববার (২৮ জুলাই) গণভবনে প্রধানমন্ত্রীর সঙ্গে সাক্ষাৎ করেন বাংলাদেশে নিযুক্ত স্পেনের রাষ্ট্রদূত গ্যাব্রিয়েল মারিয়া সিসতিয়াগা ওচহোয়া ডি চিনচিক্রু। এ সাক্ষাৎকালে প্রধানমন্ত্রী এসব কথা বলেন। \r\n\r\n \r\nপরে প্রধানমন্ত্রীর প্রেস সচিব মো. নাইমুল ইসলাম খান সাক্ষাৎ শেষে সাংবাদিকদের ব্রিফ করেন।\r\n\r\nসন্ত্রাসীরা আসলে সেই স্থাপনাগুলোতে হামলা করেছে, যা জনগণের কল্যাণে কাজ করার পর সরকার যে সাফল্য অর্জন করেছে তা তুলে ধরছে। এই প্রসঙ্গে কোভিড হাসপাতাল, মেট্রোরেল, এক্সপ্রেসওয়ে, সেতুভবন, দুর্যোগ ব্যবস্থাপনা ভবন এবং ডেটা সেন্টারের কথা উল্লেখ করেন শেখ হাসিনা।', 'Prime Minister', 'প্রধানমন্ত্রী', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'jamaat-shibir-terrorists-infiltrated-quota-movement-in-disguise-prime-minister', '1', '2024-07-28 05:10:25', '2024-07-28 05:11:34'),
(20, 15, NULL, NULL, NULL, 8, 'The price of vegetables has decreased, potatoes, onions and eggs have gone up', 'কমেছে সবজির দাম, চড়া আলু পেঁয়াজ ডিম', 'images/post_images/66a62c183f847.jpg', 'Traffic and communication systems have started functioning after several days of agitation and blockade over quota reforms. It is becoming normal to supply goods to the whole country with the capital. In this, the prices of most of the daily necessities have started to decrease. Some relief has returned to the market as the unbridled situation is overcome. But the prices of potatoes, onions and eggs are still high.\r\n\r\nThis picture was seen on Friday (July 26) by visiting Mohammadpur Krishi Market, Town Hall Kacha Bazar and Karwan Bazar in the capital.\r\n\r\n \r\nAs the market moves around, the unbridled prices of goods around the blockade-movement have started to come down a bit. The price of almost every vegetable has come down by Tk 20 to Tk 30 per kg.\r\n\r\nChichinga, Patol, Dhyandash and Eggplant are being sold at Tk 50 to Tk 80 per kg in the markets. A week ago, the buyer had to pay 80 to 120 taka to buy these vegetables at different markets. However, the price of tomato and cabbage has not decreased. Tomatoes are being sold at Tk 200 per kg, while the tomato is being sold at Tk 100 per kg.\r\n\r\nThe price of raw chili has decreased. Last week it was bought at the rate of Tk 600 per kg, but it has come down to Tk 200 in today\'s market. Apart from this, gourds and papayas are being sold at Tk 50 to Tk 60 per piece reduced by Tk 10 to Tk 20.', 'কোটা সংস্কার নিয়ে টানা কদিনের আন্দোলন-অবরোধের পর সচল হতে শুরু করেছে যান চলাচল ও যোগাযোগব্যবস্থা। স্বাভাবিক হচ্ছে রাজধানীর সঙ্গে সারা দেশের পণ্য সরবরাহ ব্যবস্থাও। এতে কমতে শুরু করেছে নিত্যপ্রয়োজনীয় বেশিরভাগ পণ্যের দাম। লাগামহীন অবস্থা কাটিয়ে উঠায় কিছুটা স্বস্তি ফিরেছে বাজারে। তবে আলু, পেঁয়াজ ও ডিমের দাম এখনও চড়া।\r\n\r\nশুক্রবার (২৬ জুলাই) রাজধানীর মোহাম্মদপুর কৃষি মার্কেট, টাউন হল কাঁচা বাজার ও কারওয়ান বাজার ঘুরে এ চিত্র দেখা গেছে।\r\n\r\n \r\nবাজার ঘুরে দেখা যায়, অবরোধ-আন্দোলনকে ঘিরে পণ্যের লাগামহীন দাম কিছুটা কমতে শুরু করেছে। প্রায় প্রতিটি সবজির দাম কেজিতে ২০ থেকে ৩০ টাকা পর্যন্ত কমেছে।\r\n\r\nবাজারগুলোতে চিচিঙ্গা, পটোল, ঢ্যাঁড়শ ও বেগুন বিক্রি হচ্ছে ৫০ থেকে ৮০ টাকা কেজি। সপ্তাহখানেক আগে বাজারভেদে এসব সবজি কিনতে ক্রেতাকে গুনতে হয় ৮০ থেকে ১২০ টাকা। তবে দাম কমেনি টমেটো ও বরবটির। টমেটো বিক্রি হচ্ছে ২০০ টাকা কেজি দরে, আর বরবটি ১০০ টাকা।\r\n\r\nদাম কমেছে কাঁচা মরিচের। গত সপ্তাহে ৬শ টাকা কেজি দরে কিনতে হলেও আজকের বাজারে নেমেছে ২০০ টাকায়। এছাড়া প্রতি পিস ১০ থেকে ২০ টাকা কমে লাউ ও পেঁপে বিক্রি হচ্ছে ৫০ থেকে ৬০ টাকায়।', 'Mahmud Shamsul Arefin', 'মাহমুদ শামসুল আরেফিন', NULL, NULL, NULL, 1, '28-07-2024', 'July', 'the-price-of-vegetables-has-decreased-potatoes-onions-and-eggs-have-gone-up', '1', '2024-07-28 05:31:36', NULL),
(21, 15, NULL, NULL, NULL, 8, 'The price of vegetables has decreased, potatoes, onions, and eggs have gone up', 'কমেছে সবজির দাম, চড়া আলু পেঁয়াজ ডিম', 'images/post_images/66a62ce605acd.jpg', 'Traffic and communication systems have started functioning after several days of agitation and blockade over quota reforms. It is becoming normal to supply goods to the whole country with the capital. In this, the prices of most of the daily necessities have started to decrease. Some relief has returned to the market as the unbridled situation is overcome. But the prices of potatoes, onions and eggs are still high.\r\n\r\nThis picture was seen on Friday (July 26) by visiting Mohammadpur Krishi Market, Town Hall Kacha Bazar and Karwan Bazar in the capital.\r\n\r\n \r\nAs the market moves around, unrestrained prices of goods around the blockade-movement have started to come down a bit. The price of almost every vegetable has come down by Tk 20 to Tk 30 per kg.\r\n\r\nChichinga, Patol, Dhyandash and Eggplant are being sold at Tk 50 to Tk 80 per kg in the markets. A week ago, the buyer had to pay 80 to 120 taka to buy these vegetables at different markets. However, the price of tomato and cabbage has not decreased. Tomatoes are being sold at Tk 200 per kg, while the tomato is being sold at Tk 100 per kg.', 'কোটা সংস্কার নিয়ে টানা কদিনের আন্দোলন-অবরোধের পর সচল হতে শুরু করেছে যান চলাচল ও যোগাযোগব্যবস্থা। স্বাভাবিক হচ্ছে রাজধানীর সঙ্গে সারা দেশের পণ্য সরবরাহ ব্যবস্থাও। এতে কমতে শুরু করেছে নিত্যপ্রয়োজনীয় বেশিরভাগ পণ্যের দাম। লাগামহীন অবস্থা কাটিয়ে উঠায় কিছুটা স্বস্তি ফিরেছে বাজারে। তবে আলু, পেঁয়াজ ও ডিমের দাম এখনও চড়া।\r\n\r\nশুক্রবার (২৬ জুলাই) রাজধানীর মোহাম্মদপুর কৃষি মার্কেট, টাউন হল কাঁচা বাজার ও কারওয়ান বাজার ঘুরে এ চিত্র দেখা গেছে।\r\n\r\n \r\nবাজার ঘুরে দেখা যায়, অবরোধ-আন্দোলনকে ঘিরে পণ্যের লাগামহীন দাম কিছুটা কমতে শুরু করেছে। প্রায় প্রতিটি সবজির দাম কেজিতে ২০ থেকে ৩০ টাকা পর্যন্ত কমেছে।\r\n \r\nবাজারগুলোতে চিচিঙ্গা, পটোল, ঢ্যাঁড়শ ও বেগুন বিক্রি হচ্ছে ৫০ থেকে ৮০ টাকা কেজি। সপ্তাহখানেক আগে বাজারভেদে এসব সবজি কিনতে ক্রেতাকে গুনতে হয় ৮০ থেকে ১২০ টাকা। তবে দাম কমেনি টমেটো ও বরবটির। টমেটো বিক্রি হচ্ছে ২০০ টাকা কেজি দরে, আর বরবটি ১০০ টাকা।', 'Mahmud Shamsul Arefin', 'মাহমুদ শামসুল আরেফিন', NULL, NULL, NULL, 1, '28-07-2024', 'July', 'the-price-of-vegetables-has-decreased-potatoes-onions-and-eggs-have-gone-up', '1', '2024-07-28 05:35:02', NULL),
(22, 15, 12, 3, NULL, 8, 'The price of vegetables has decreased, potatoes, onions, and eggs have gone up', 'কমেছে সবজির দাম, চড়া আলু পেঁয়াজ ডিম', 'images/post_images/66a62e180d6d3.jpg', 'Traffic and communication systems have started functioning after several days of agitation and blockade over quota reforms. It is becoming normal to supply goods to the whole country with the capital. In this, the prices of most of the daily necessities have started to decrease. Some relief has returned to the market as the unbridled situation is overcome. But the prices of potatoes, onions and eggs are still high.\r\n\r\nThis picture was seen on Friday (July 26) by visiting Mohammadpur Krishi Market, Town Hall Kacha Bazar and Karwan Bazar in the capital.\r\n\r\n \r\nAs the market moves around, unrestrained prices of goods around the blockade-movement have started to come down a bit. The price of almost every vegetable has come down by Tk 20 to Tk 30 per kg.\r\n\r\nChichinga, Patol, Dhyandash and Eggplant are being sold at Tk 50 to Tk 80 per kg in the markets. A week ago, the buyer had to pay 80 to 120 taka to buy these vegetables at different markets. However, the price of tomato and cabbage has not decreased. Tomatoes are being sold at Tk 200 per kg, while the tomato is being sold at Tk 100 per kg.', 'কোটা সংস্কার নিয়ে টানা কদিনের আন্দোলন-অবরোধের পর সচল হতে শুরু করেছে যান চলাচল ও যোগাযোগব্যবস্থা। স্বাভাবিক হচ্ছে রাজধানীর সঙ্গে সারা দেশের পণ্য সরবরাহ ব্যবস্থাও। এতে কমতে শুরু করেছে নিত্যপ্রয়োজনীয় বেশিরভাগ পণ্যের দাম। লাগামহীন অবস্থা কাটিয়ে উঠায় কিছুটা স্বস্তি ফিরেছে বাজারে। তবে আলু, পেঁয়াজ ও ডিমের দাম এখনও চড়া।\r\n\r\nশুক্রবার (২৬ জুলাই) রাজধানীর মোহাম্মদপুর কৃষি মার্কেট, টাউন হল কাঁচা বাজার ও কারওয়ান বাজার ঘুরে এ চিত্র দেখা গেছে।\r\n\r\n \r\nবাজার ঘুরে দেখা যায়, অবরোধ-আন্দোলনকে ঘিরে পণ্যের লাগামহীন দাম কিছুটা কমতে শুরু করেছে। প্রায় প্রতিটি সবজির দাম কেজিতে ২০ থেকে ৩০ টাকা পর্যন্ত কমেছে।\r\n \r\nবাজারগুলোতে চিচিঙ্গা, পটোল, ঢ্যাঁড়শ ও বেগুন বিক্রি হচ্ছে ৫০ থেকে ৮০ টাকা কেজি। সপ্তাহখানেক আগে বাজারভেদে এসব সবজি কিনতে ক্রেতাকে গুনতে হয় ৮০ থেকে ১২০ টাকা। তবে দাম কমেনি টমেটো ও বরবটির। টমেটো বিক্রি হচ্ছে ২০০ টাকা কেজি দরে, আর বরবটি ১০০ টাকা।', 'Mahmud Shamsul Arefin', 'মাহমুদ শামসুল আরেফিন', NULL, NULL, NULL, 1, '28-07-2024', 'July', 'the-price-of-vegetables-has-decreased-potatoes-onions-and-eggs-have-gone-up', '1', '2024-07-28 05:40:08', '2024-07-28 05:42:28'),
(23, 15, 13, 3, NULL, 8, 'Commodity Market Manipulation, Advice to Follow India\'s \'Mandi Concept\'', 'নিত্যপণ্যের বাজারে কারসাজি, ভারতের ‘মান্ডি কনসেপ্ট’ অনুসরণের পরামর্শ', 'images/post_images/66a6303603bc8.jpg', 'It is reported that an additional one and a half thousand crores of rupees have been looted in one month only on potatoes and onions due to shortage. Helpless consumers to such business syndicates! Stating that this anarchy is going on because the farmers\' products are going into the hands of hoarders, analysts say that despite knowing everything about the people involved, the government authorities are not taking strict action for the sake of free market economy.\r\n\r\nNo matter what the situation, everyone is bound to go to one place - from the working class to the high class. Its name is the daily market. Exceeding rationality where prices often rise, rarely fall slightly. But in the meantime, the price of the product was increased several times by showing various excuses. The business syndicate takes hundreds of crores of rupees from the consumer\'s pocket against each product in a strategic way.\r\n\r\nThe review shows that there is no shortage of supply in the market. But the price is increasing gradually. Potatoes are being sold at Tk 60 to Tk 70 and onion at Tk 120 per kg. But during the season, the production cost of potato is 16 taka and onion is 34 taka, which is 50 and 80 taka a month ago. About Tk 1,620 crore has been withdrawn from the market in one month due to the increased price of these two products.\r\n \r\nRead more: Go for a trip, there are sweets in the store!\r\n\r\nSupply chain experts feel that syndicates have become stronger as the inventory of products has gone into the hands of traders. Various departments of the government know the information about the manipulation of everyday products. But due to the free market economy, the responsible have become flexible. As there is no specific law to control market manipulation, the stakeholders feel that no initiative or decision of the government is getting any practical benefit.\r\n\r\nDirector General of Agriculture Extension Department Badal Chandra Biswas told the news, \"Earlier, if a farmer had 300 maunds of potatoes, he might have sold 100 maunds and kept 200 maunds himself in cold storage. It is not available now. Now all the potatoes are bought by the middlemen from the farmers. Those of us who believe in free market economy, do business - the government will not control them. Price, production cost and step by step, if there is any price in any place, it will be the reasonable price, but we calculate it carefully.\r\n\r\nRead more: Vegetable prices reduced, potatoes, onions, eggs high\r\n \r\nTherefore, in such a context, the expert advises to follow India\'s \'Mandi Concept\' to give farmers a fair price and stop anarchy in the price of agricultural products.\r\n\r\nIn this regard, the supply chain expert said. Mujibul Haque said, \'There is a minimum price markup. If that price markup goes down, the farmer can keep those products in the mandi. Farmers can sell from that market and take money. The government then stocks it through various banks and later sells it through those banks at a profit. By doing this, the market remains stable all the time. So we can precisely follow their Mandi concept model here.', 'ঘাটতির দোহাই দিয়ে এক মাসে শুধু আলু-পেঁয়াজেই অতিরিক্ত দেড় হাজার কোটি টাকা লুট হয়েছে বলে জানা গেছে। এমন ব্যবসায়ী সিন্ডিকেটের কাছে অসহায় ভোক্তারা! কৃষকের পণ্য মজুদদারদের হাতে চলে যাওয়ায় এই নৈরাজ্য চলছে জানিয়ে বিশ্লেষকরা বলছেন, জড়িতদের বিষয়ে সব জেনেও মুক্তবাজার অর্থনীতির দোহাই দিয়ে কঠোর পদক্ষেপ নিচ্ছে না সরকারি কর্তৃপক্ষ।\r\n\r\nপরিস্থিতি যেমনই হোক না কেন, একটা জায়গায় যেতে বাধ্য সবাই- খেটে খাওয়া থেকে উচ্চ পর্যায়ের মানুষ। নাম তার নিত্যপণ্যের বাজার। যৌক্তিকতাকে ছাপিয়ে যেখানে হরহামেশা বাড়ে দাম, কদাচিৎ কমে কিছুটা। কিন্তু এর মধ্যেই নানা অজুহাত দেখিয়ে কয়েকগুণ বাড়িয়ে দেয়া হয় পণ্যের দাম। কৌশলী পন্থায় প্রতিটি পণ্যের বিপরীতে কয়েকশ কোটি টাকা ভোক্তার পকেট থেকে তুলে নেয় ব্যবসায়ী সিন্ডিকেট।\r\n\r\n \r\nপর্যালোচনায় দেখা যায়, সরবরাহ সংকট নেই বাজারে। কিন্তু দফায় দফায় বাড়ছে দাম। আলু প্রতিকেজি ৬০ থেকে ৭০ টাকা ও পেঁয়াজ বিক্রি হচ্ছে ১২০ টাকায়। কিন্তু মৌসুমে কৃষক পর্যায়ে যার উৎপাদন ব্যয় হয়েছে আলুতে সর্বোচ্চ ১৬ টাকা ও পেঁয়াজে ৩৪ টাকা, যা এক মাস আগেও খুচরায় এ দুটি পণ্য বিক্রি হয়েছে ৫০ ও ৮০ টাকায়। এই দুটি পণ্যে বাড়তি দামে এক মাসেই বাজার থেকে তুলে নেয়া হয়েছে প্রায় ১ হাজার ৬২০ কোটি টাকা।\r\n \r\nআরও পড়ুন: বেড়াতে যাবেন, দোকানে মিষ্টি আছে তো!\r\n \r\nসাপ্লাই চেইন বিশেষজ্ঞরা মনে করেন, পণ্যের মজুদদারি ব্যবসায়ীদের হাতে চলে যাওয়ায় সিন্ডিকেট হয়েছে শক্তিশালী। নিত্যপণ্য নিয়ে কারসাজির তথ্য জানে সরকারের বিভিন্ন দফতর। কিন্তু মুক্তবাজার অর্থনীতির দোহাই দিয়ে নমনীয় হয়ে পড়েছে দায়বদ্ধরা। বাজার কারসাজি নিয়ন্ত্রণে সুনির্দিষ্ট আইন না থাকায় সরকারের কোনো উদ্যোগ বা সিদ্ধান্তের বাস্তবিক কোনো সুফল মিলছে না বলে মনে করেন সংশ্লিষ্টরা।\r\n \r\nকৃষি সম্প্রসারণ অধিদফতরের মহাপরিচালক বাদল চন্দ্র বিশ্বাস সময় সংবাদকে বলেন, ‘আগে একজন চাষির ৩০০ মণ আলু হলে তিনি হয়ত ১০০ মণ বিক্রি করতেন এবং ২০০ মণ নিজেই কোল্ডস্টোরেজে রাখতেন। এখন সেরকম পাওয়া যায় না। এখন সব আলুই মধ্যস্বত্বভোগীরা চাষির কাছ থেকে কিনে নিয়ে যান। আমরা যারা মুক্তবাজার অর্থনীতি বিশ্বাস করি, ব্যবসা করি- সরকার তো তাদেরকে নিয়ন্ত্রণ করবে না। দাম, উৎপাদন খরচ এবং ধাপে ধাপে কোন জায়াগায় কোন মূল্য হলে যৌক্তিক মূল্যটা হবে, সেটা কিন্তু আমরা চুলচেরা হিসাব করে দেই।’\r\n \r\nআরও পড়ুন: কমেছে সবজির দাম, চড়া আলু পেঁয়াজ ডিম\r\n \r\nতাই এমন প্রেক্ষাপটে কৃষকদের ন্যায্যমূল্য দেয়া ও কৃষিপণ্যের দাম নিয়ে অরাজকতা বন্ধে ভারতের ‘মান্ডি কনসেপ্ট’ অনুসরণের পরামর্শ বিশেষজ্ঞের।\r\n \r\nএ বিষয়ে সাপ্লাই চেইন বিশেষজ্ঞ মো. মুজিবুল হক বলেন, ‘ন্যূনতম একটা প্রাইস মার্কআপ করা আছে। সেই প্রাইস মার্কআপটা নিচে চলে গেলে মান্ডিতে কৃষক ওই পণ্যগুলো রেখে দিতে পারে। কৃষক ওই মান্ডি থেকে বিক্রি করতে পারেন, টাকা নিতে পারেন। সরকার তখন ওইটাকে বিভিন্ন ব্যাংকের মাধ্যমে স্টক করে পরবর্তীকালে প্রফিটে ওই ব্যাংকগুলোর মাধ্যমে বিক্রি করে। এতে করে যেটা হয়, তাতে বাজারটা স্থিতিশীল থাকে সব সময়। তাই আমরাও এখানে সুনির্দিষ্টভাবে তাদের এই মান্ডি কনসেপ্ট মডেলটা অনুসরণ করতে পারি।’', 'everyday products', 'নিত্যপণ্যের', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'commodity-market-manipulation-advice-to-follow-indias-mandi-concept', '1', '2024-07-28 05:49:10', '2024-07-28 05:50:41'),
(24, 15, 13, NULL, NULL, 8, 'Curfew egg-chicken new manipulation', 'কারফিউতে ডিম-মুরগি নিয়ে নতুন কারসাজি', 'images/post_images/66a63174816f5.jpg', 'The prices of eggs and chickens have suddenly increased in the market. Dozens of eggs and kilos of broiler chickens are almost double century by location. It has been alleged that several gangs are manipulating the egg-chicken market by using the curfew.\r\n\r\nOn Tuesday (July 23), it was seen that eggs are being sold at Tk 20 per dozen more than the market price in various raw markets of the capital.\r\n \r\n\r\nApart from this, broiler chicken is priced at Tk 180-190 per kg in the market. Broiler chicken is being sold at Tk 200-210 per kg in some local markets.\r\n\r\nThe sellers claim that the prices have increased due to lack of supply. However, poultry related people say that since these food products are not under the curfew, increasing the price is nothing more than creating manipulation in the market.\r\n\r\nIn this regard, Bangladesh Poultry Association President Suman Howladar said that although chickens cost 175 taka per kg, chickens have to be sold at 135-140 taka per kg in these few days. The wholesalers are buying chicken at such a cheap price and selling it in the market at a high price.\r\n\r\nSimilarly, in the case of eggs, Suman said that the wholesalers are not buying more eggs from one place by bringing cars. They are filling the car by visiting different places. Farmers are being told that there is no demand for eggs in Dhaka, so the price cannot be higher.\r\n \r\nOn the other hand, even if the curfew is lifted, there will be instability in the egg-chicken market, Suman said, although the price of poultry feed has been reduced in all countries, the price has not been reduced in Bangladesh yet.  If this continues, there will be no relief in the chicken and egg market in the country.', 'হঠাৎ করেই বাজারে বেড়েছে ডিম ও মুরগির দাম। বিশেষ করে স্থানভেদে ডিমের ডজন এবং ব্রয়লার মুরগির কেজি প্রায় ডাবল সেঞ্চুরি ছুঁই ছুঁই। কারফিউর সুযোগ কাজে লাগিয়ে একাধিক চক্র ডিম-মুরগির বাজারে কারসাজি করছে বলে উঠেছে অভিযোগ।\r\n\r\nমঙ্গলবার (২৩ জুলাই) রাজধানীর বিভিন্ন কাঁচাবাজার ঘুরে দেখা যায়, বাজারের দামের তুলনায় মুদির দোকানে ডজনপ্রতি ২০ টাকা বেশিতে বিক্রি হচ্ছে ডিম।\r\n \r\n\r\nএছাড়া বাজারে ব্রয়লার মুরগির কেজি ঠেকেছে ১৮০-১৯০ টাকায়। এলাকাভিত্তিক কিছু বাজারে ব্রয়লার মুরগি ২০০-২১০ টাকা কেজিতে বিক্রি হচ্ছে।\r\n \r\nবিক্রেতাদের দাবি, সরবরাহ না থাকায় দাম বেড়েছে। তবে পোল্ট্রি সংশ্লিষ্টরা বলছেন, এসব খাদ্যপণ্য কারফিউয়ের আওতাধীন না হওয়ায় এ দাম বাড়ানো বাজারে কারসাজি তৈরি ছাড়া আর কিছু না।\r\n\r\nএ প্রসঙ্গে বাংলাদেশ পোল্ট্রি অ্যাসোসিয়েশনের সভাপতি সুমন হাওলাদার বলেন, কেজিপ্রতি মুরগির পেছনে ১৭৫ টাকা খরচ হলেও এ কয়দিনে মুরগি বিক্রি করতে হয়েছে ১৩৫-১৪০ টাকা কেজিতে। পাইকাররা এত সস্তায় মুরগি কিনে বাজারে বিক্রি করছে উচ্চমূল্যে।\r\n\r\nএকইভাবে ডিমের ক্ষেত্রে কৃত্রিম সংকট সৃষ্টির প্রসঙ্গ টেনে সুমন বলেন, পাইকাররা গাড়ি নিয়ে এসে এক জায়গা থেকে একবারে বেশি ডিম কিনছে না। নানা জায়গায় ঘুরে ঘুরে গাড়ি ভর্তি করছে তারা। খামারিদের বলা হচ্ছে, ঢাকায় ডিমের চাহিদা নেই, তাই দাম বেশি দেয়া যাবে না।\r\n \r\nঅন্যদিকে কারফিউ তুলে নেয়া হলেও ডিম-মুরগির বাজারে অস্থিরতা বিরাজ করবে জানিয়ে সুমন বলেন, সব দেশে পোল্ট্রি ফিডের দাম কমানো হলেও বাংলাদেশে এখনো দাম হ্রাস করা হয়নি।  এভাবে চলতে থাকলে দেশে ডিম-মুরগির বাজারে স্বস্তি আসবে না।', 'Curfew', 'কারফিউতে', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'curfew-egg-chicken-new-manipulation', '1', '2024-07-28 05:54:28', NULL),
(25, 15, 13, NULL, NULL, 8, 'Commodity Market Manipulation, Advice to Follow India\'s \'Mandi Concept\'', 'নিত্যপণ্যের বাজারে কারসাজি, ভারতের ‘মান্ডি কনসেপ্ট’ অনুসরণের পরামর্শ', 'images/post_images/66a63b02b817a.png', 'It is reported that an additional one and a half thousand crores of rupees have been looted in one month only on potatoes and onions due to shortage. Helpless consumers to such business syndicates! Stating that this anarchy is going on because the farmers\' products are going into the hands of hoarders, analysts say that despite knowing everything about the people involved, the government authorities are not taking strict action for the sake of free market economy.\r\n\r\nNo matter what the situation, everyone is bound to go to one place - from the working class to the high class. Its name is the daily market. Exceeding rationality where prices often rise, rarely fall slightly. But in the meantime, the price of the product was increased several times by showing various excuses. In a strategic way, against each product, hundreds of crores of rupees are taken from the pocket of the consumer by the business syndicate.\r\n\r\nThe review shows that there is no shortage of supply in the market. But the price is increasing gradually. Potatoes are being sold at Tk 60 to Tk 70 and onion at Tk 120 per kg. But during the season, the production cost of potato is 16 taka and onion is 34 taka, which is 50 and 80 taka a month ago. About Tk 1,620 crore has been withdrawn from the market in one month due to the increased price of these two products.\r\n \r\nRead more: Go for a trip, there are sweets in the store!\r\n\r\nSupply chain experts feel that syndicates have become stronger as the inventory of products has gone into the hands of traders. Various departments of the government know about the manipulation of everyday products. But due to the free market economy, the responsible have become flexible. As there is no specific law to control market manipulation, the stakeholders feel that no initiative or decision of the government is getting any practical benefit.\r\n\r\nDirector General of Agriculture Extension Department Badal Chandra Biswas told the news, \"Earlier, if a farmer had 300 maunds of potatoes, he might have sold 100 maunds and kept 200 maunds himself in cold storage. It is not available now. Now all the potatoes are bought by the middlemen from the farmers. Those of us who believe in free market economy, do business - the government will not control them. Price, production cost and step by step, if there is any price in any place, it will be the reasonable price, but we calculate it carefully.\r\n\r\nRead more: Vegetable prices reduced, potatoes, onions, eggs high\r\n \r\nTherefore, in such a context, the expert advises to follow India\'s \'Mandi Concept\' to give farmers a fair price and stop anarchy in the price of agricultural products.\r\n\r\nIn this regard, the supply chain expert said. Mujibul Haque said, \'There is a minimum price markup. If that price markup goes down, the farmer can keep those products in the mandi. Farmers can sell from that market and take money. The government then stocks it through various banks and later sells it through those banks at a profit. By doing this, the market remains stable all the time. So we can precisely follow their Mandi concept model here.', 'ঘাটতির দোহাই দিয়ে এক মাসে শুধু আলু-পেঁয়াজেই অতিরিক্ত দেড় হাজার কোটি টাকা লুট হয়েছে বলে জানা গেছে। এমন ব্যবসায়ী সিন্ডিকেটের কাছে অসহায় ভোক্তারা! কৃষকের পণ্য মজুদদারদের হাতে চলে যাওয়ায় এই নৈরাজ্য চলছে জানিয়ে বিশ্লেষকরা বলছেন, জড়িতদের বিষয়ে সব জেনেও মুক্তবাজার অর্থনীতির দোহাই দিয়ে কঠোর পদক্ষেপ নিচ্ছে না সরকারি কর্তৃপক্ষ।\r\n\r\nপরিস্থিতি যেমনই হোক না কেন, একটা জায়গায় যেতে বাধ্য সবাই- খেটে খাওয়া থেকে উচ্চ পর্যায়ের মানুষ। নাম তার নিত্যপণ্যের বাজার। যৌক্তিকতাকে ছাপিয়ে যেখানে হরহামেশা বাড়ে দাম, কদাচিৎ কমে কিছুটা। কিন্তু এর মধ্যেই নানা অজুহাত দেখিয়ে কয়েকগুণ বাড়িয়ে দেয়া হয় পণ্যের দাম। কৌশলী পন্থায় প্রতিটি পণ্যের বিপরীতে কয়েকশ কোটি টাকা ভোক্তার পকেট থেকে তুলে নেয় ব্যবসায়ী সিন্ডিকেট।\r\n\r\n \r\nপর্যালোচনায় দেখা যায়, সরবরাহ সংকট নেই বাজারে। কিন্তু দফায় দফায় বাড়ছে দাম। আলু প্রতিকেজি ৬০ থেকে ৭০ টাকা ও পেঁয়াজ বিক্রি হচ্ছে ১২০ টাকায়। কিন্তু মৌসুমে কৃষক পর্যায়ে যার উৎপাদন ব্যয় হয়েছে আলুতে সর্বোচ্চ ১৬ টাকা ও পেঁয়াজে ৩৪ টাকা, যা এক মাস আগেও খুচরায় এ দুটি পণ্য বিক্রি হয়েছে ৫০ ও ৮০ টাকায়। এই দুটি পণ্যে বাড়তি দামে এক মাসেই বাজার থেকে তুলে নেয়া হয়েছে প্রায় ১ হাজার ৬২০ কোটি টাকা।\r\n \r\nআরও পড়ুন: বেড়াতে যাবেন, দোকানে মিষ্টি আছে তো!\r\n \r\nসাপ্লাই চেইন বিশেষজ্ঞরা মনে করেন, পণ্যের মজুদদারি ব্যবসায়ীদের হাতে চলে যাওয়ায় সিন্ডিকেট হয়েছে শক্তিশালী। নিত্যপণ্য নিয়ে কারসাজির তথ্য জানে সরকারের বিভিন্ন দফতর। কিন্তু মুক্তবাজার অর্থনীতির দোহাই দিয়ে নমনীয় হয়ে পড়েছে দায়বদ্ধরা। বাজার কারসাজি নিয়ন্ত্রণে সুনির্দিষ্ট আইন না থাকায় সরকারের কোনো উদ্যোগ বা সিদ্ধান্তের বাস্তবিক কোনো সুফল মিলছে না বলে মনে করেন সংশ্লিষ্টরা।\r\n \r\nকৃষি সম্প্রসারণ অধিদফতরের মহাপরিচালক বাদল চন্দ্র বিশ্বাস সময় সংবাদকে বলেন, ‘আগে একজন চাষির ৩০০ মণ আলু হলে তিনি হয়ত ১০০ মণ বিক্রি করতেন এবং ২০০ মণ নিজেই কোল্ডস্টোরেজে রাখতেন। এখন সেরকম পাওয়া যায় না। এখন সব আলুই মধ্যস্বত্বভোগীরা চাষির কাছ থেকে কিনে নিয়ে যান। আমরা যারা মুক্তবাজার অর্থনীতি বিশ্বাস করি, ব্যবসা করি- সরকার তো তাদেরকে নিয়ন্ত্রণ করবে না। দাম, উৎপাদন খরচ এবং ধাপে ধাপে কোন জায়াগায় কোন মূল্য হলে যৌক্তিক মূল্যটা হবে, সেটা কিন্তু আমরা চুলচেরা হিসাব করে দেই।’\r\n \r\nআরও পড়ুন: কমেছে সবজির দাম, চড়া আলু পেঁয়াজ ডিম\r\n \r\nতাই এমন প্রেক্ষাপটে কৃষকদের ন্যায্যমূল্য দেয়া ও কৃষিপণ্যের দাম নিয়ে অরাজকতা বন্ধে ভারতের ‘মান্ডি কনসেপ্ট’ অনুসরণের পরামর্শ বিশেষজ্ঞের।\r\n \r\nএ বিষয়ে সাপ্লাই চেইন বিশেষজ্ঞ মো. মুজিবুল হক বলেন, ‘ন্যূনতম একটা প্রাইস মার্কআপ করা আছে। সেই প্রাইস মার্কআপটা নিচে চলে গেলে মান্ডিতে কৃষক ওই পণ্যগুলো রেখে দিতে পারে। কৃষক ওই মান্ডি থেকে বিক্রি করতে পারেন, টাকা নিতে পারেন। সরকার তখন ওইটাকে বিভিন্ন ব্যাংকের মাধ্যমে স্টক করে পরবর্তীকালে প্রফিটে ওই ব্যাংকগুলোর মাধ্যমে বিক্রি করে। এতে করে যেটা হয়, তাতে বাজারটা স্থিতিশীল থাকে সব সময়। তাই আমরাও এখানে সুনির্দিষ্টভাবে তাদের এই মান্ডি কনসেপ্ট মডেলটা অনুসরণ করতে পারি।’', 'everyday products', 'নিত্যপণ্যের', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'commodity-market-manipulation-advice-to-follow-indias-mandi-concept', '1', '2024-07-28 06:35:14', NULL);
INSERT INTO `posts` (`id`, `cat_id`, `subcat_id`, `dist_id`, `subdist_id`, `user_id`, `title_en`, `title_bn`, `image`, `details_en`, `details_bn`, `tags_en`, `tags_bn`, `headline`, `first_section`, `first_section_thumbnail`, `bigthumbnail`, `post_date`, `post_month`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(26, 16, 13, NULL, NULL, 8, 'Let there be a committee with independent and impartial persons', 'স্বাধীন-নিরপেক্ষ ব্যক্তিদের নিয়ে কমিটি হোক', 'images/post_images/66a64c7ba208d.png', 'The recent nationwide quota reform movement created a violent situation across the country. More than two hundred people lost their lives and thousands of people were injured. At one point the situation became so critical that the government had to deploy the army and impose a curfew.\r\n\r\nAlthough the curfew has been relaxed somewhat, the situation is not completely normal. However, the government is gradually lifting the curfew and has announced that the office-courts will run regularly from Sunday. It is expected that the communication system will also be fully operational.\r\n\r\nBut many questions have arisen in the public mind regarding the investigation and prosecution of the incidents of casualties and attacks. Justice requires a fair and credible investigation of any incident. Meanwhile, the government has commissioned an inquiry headed by Justice Khondkar Diliruzzaman.\r\n\r\nAccording to experts, that would not be of much help in the murder case. This commission, constituted under the Inquiry Act-1952, will find out the cause of the problem and make a recommendation for its solution. Moreover, the commission is said to investigate the six killings that took place on the first day of the violence. Most of the killings took place after the formation of the Diliruzzaman Commission. It is not clear whether the next incident will come into their activities or not. However, Awami League general secretary Obaidul Quader said that the commission will investigate each murder.\r\n\r\nAn independent and impartial commission of inquiry must be formed if there is to be a fair trial of murder and sabotage. Among the eight-point demands put forward by the leaders of the quota reform movement, there is a demand for an investigation into the killings. Government ministers have also promised to investigate each incident. Apart from this, they are blaming the opposition for the destruction of many state structures. If you have evidence in this regard, it should also be disclosed before the nation. Then the culprit can be identified by the evidence.\r\n\r\nAnother question, if the students were not involved in sabotage as claimed by the ruling party, why are there cases against them one after another. Many students have already been arrested. Apart from this, the government has not yet given any information about how many people have died in the violence across the country. As a result, it is natural to have doubts in the public mind. Many of the victims have not been autopsied. But no murder trial is possible without an autopsy. In that case, the postmortem of every dead person should be done properly.\r\n\r\nIt is very clear from media reports or videos of the time that Abu Saeed, a student of Begum Rokeya University in Rangpur, died in direct firing by the police. However, as stated in the police FIR, the protesters continued to fire from different directions and pelted pieces of bricks. At one stage, a student was seen lying on the ground.\r\n\r\nHow can people keep trust if the investigation and cases continue in this line on behalf of the police. Where the police are accused, there is doubt about how acceptable the investigation committee formed by the police will be. For this reason, the demand for the formation of an inquiry committee with independent and impartial persons should be taken into consideration. Measures should be taken to ensure credible investigations.', 'দেশব্যাপী সাম্প্রতিক কোটা সংস্কার আন্দোলনকে কেন্দ্র করে সারা দেশে একটা সহিংস পরিস্থিতি তৈরি হয়েছিল। এতে দুই শতাধিক মানুষের প্রাণহানি এবং কয়েক হাজার মানুষ আহত হয়েছেন। একপর্যায়ে পরিস্থিতি এতটাই নাজুক হয়ে পড়ে যে সরকারকে সেনাবাহিনী মোতায়েন ও কারফিউ জারি করতে হয়েছে।\r\n\r\nকারফিউ কিছুটা শিথিল হলেও পরিস্থিতি পুরোপুরি স্বাভাবিক হয়নি। তবে সরকার পর্যায়ক্রমে কারফিউ তুলে নিচ্ছে এবং আজ রোববার থেকে অফিস–আদালত নিয়মিতভাবে চলবে বলে ঘোষণা দিয়েছে। সেই সঙ্গে যোগাযোগব্যবস্থাও পুরোপুরি সচল হবে আশা করা যায়।\r\n\r\nকিন্তু হতাহত ও হামলার ঘটনার তদন্ত ও বিচার নিয়ে জনমনে নানা প্রশ্ন উঠেছে। ন্যায়বিচারের জন্য যেকোনো ঘটনার সুষ্ঠু ও বিশ্বাসযোগ্য তদন্ত প্রয়োজন। ইতিমধ্যে সরকার বিচারপতি খোন্দকার দিলীরুজ্জামানের নেতৃত্বে তদন্ত কমিশন করেছে।\r\n\r\nবিশেষজ্ঞদের মতে, সেটি হত্যার বিচারে খুব একটা সহায়ক হবে না। ইনকোয়ারি অ্যাক্ট-১৯৫২-এর অধীনে গঠিত এই কমিশন সমস্যার কারণ খুঁজে বের করবে এবং এর সমাধানে একটা সুপারিশ করবে। তদুপরি এই কমিশন সহিংসতার প্রথম দিনে সংঘটিত ছয়টি হত্যার বিষয়ে তদন্ত করবে বলে জানানো হয়েছে। বেশির ভাগ হত্যাকাণ্ড হয়েছে দিলীরুজ্জামান কমিশন গঠনের পর। পরের ঘটনাবলি তাদের কার্যক্রমে আসবে কি না, সেটা পরিষ্কার নয়। আওয়ামী লীগের সাধারণ সম্পাদক ওবায়দুল কাদের যদিও বলেছেন, প্রতিটি হত্যার তদন্ত করবে কমিশন।\r\n\r\nহত্যা ও নাশকতার সুষ্ঠু বিচার হতে হলে স্বাধীন ও নিরপেক্ষ তদন্ত কমিশন গঠন করতে হবে। কোটা সংস্কার আন্দোলনের নেতারা যে আট দফা দাবি পেশ করেছেন, তার মধ্যে হত্যার ঘটনাগুলো তদন্তের কথাও আছে। সরকারের মন্ত্রীরাও প্রতিটি ঘটনা তদন্ত করার কথা বলেছেন। এর পাশাপাশি তাঁরা অনেক রাষ্ট্রীয় স্থাপনা ধ্বংসের জন্য বিরোধীদের দায়ী করছেন। এ বিষয়ে তঁাদের হাতে তথ্যপ্রমাণ থাকলে সেটাও জাতির সামনে প্রকাশ করা উচিত। এরপর আলামত ধরে অপরাধী চিহ্নিত করা যেতে পারে।\r\n\r\nআরেকটি প্রশ্ন, ক্ষমতাসীনদের দাবি অনুযায়ী শিক্ষার্থীরা যদি নাশকতায় জড়িত না হয়ে থাকেন, তাঁদের বিরুদ্ধে কেন একের পর এক মামলা হচ্ছে। ইতিমধ্যে অনেক শিক্ষার্থী গ্রেপ্তারও হয়েছেন। এ ছাড়া সারা দেশে সহিংসতায় কত লোক মারা গেছেন, সে সম্পর্কে এখনো সরকারের পক্ষ থেকে কোনো তথ্য দেওয়া হয়নি। ফলে জনমনে সংশয় দেখা দেওয়া স্বাভাবিক। নিহতদের অনেকেরই ময়নাতদন্ত হয়নি। কিন্তু ময়নাতদন্ত ছাড়া কোনো হত্যার বিচার সম্ভব নয়। সে ক্ষেত্রে প্রত্যেক নিহত ব্যক্তির ময়নাতদন্ত সুষ্ঠুভাবে সম্পন্ন করতে হবে।\r\n\r\nসংবাদমাধ্যমের তথ্য বা সে সময়কার ভিডিওতে এটা অনেকটাই স্পষ্ট যে রংপুরে বেগম রোকেয়া বিশ্ববিদ্যালয়ের শিক্ষার্থী আবু সাঈদ পুলিশের সরাসরি গুলিতে মারা গেছেন। অথচ পুলিশের এফআইআরে বলা হয়েছে, বিক্ষোভকারীরা বিভিন্ন দিক থেকে গুলি ছুড়তে থাকে এবং ইটের টুকরা নিক্ষেপ করতে থাকে। একপর্যায়ে এক শিক্ষার্থীকে মাটিতে লুটিয়ে পড়তে দেখা গেছে।\r\n\r\nপুলিশের পক্ষ থেকে এই ধারায় তদন্ত ও মামলা চলতে থাকলে মানুষ কীভাবে ভরসা রাখবে। যেখানে পুলিশ অভিযুক্ত, সেখানে পুলিশের দ্বারা গঠিত তদন্ত কমিটি কতটা গ্রহণযোগ্য হবে, সে বিষয়েও সন্দেহ আছে। এ কারণেই স্বাধীন ও নিরপেক্ষ ব্যক্তিদের নিয়ে তদন্ত কমিটি গঠনের যে দাবি উঠেছে, তা বিবেচনায় নিতে হবে। বিশ্বাসযোগ্য তদন্ত নিশ্চিত করার ব্যবস্থা নিতে হবে।', 'Nationwide', 'দেশব্যাপী', NULL, NULL, NULL, 1, '28-07-2024', 'July', 'let-there-be-a-committee-with-independent-and-impartial-persons', '1', '2024-07-28 07:49:47', NULL),
(27, 16, 13, NULL, NULL, 8, 'Chittagong administration should take action', 'চট্টগ্রাম প্রশাসনকে পদক্ষেপ নিতে হবে', 'images/post_images/66a64e45b2424.png', 'Landslides occur in Sylhet, Chittagong and Cox\'s Bazar districts only when there is heavy rain. It also causes loss of life. We are facing such incidents every monsoon. Although the administration has taken various measures, the landslides cannot be prevented in any way. Meanwhile, the weather news is that heavy to moderate rain may occur in Chittagong due to the low pressure created in North Bay of Bengal. A landslide warning has also been issued for the same reason. As a result, there is no doubt that the local administration and related authorities will have to prepare.\r\n\r\nAccording to the Patenga Meteorological Department, 76 mm of rain has been recorded in the previous 24 hours till three o\'clock last Tuesday. Especially since Monday night it was raining non-stop. Under the influence of low pressure, North Bay of Bengal is turbulent now. Due to this, Chittagong, Mongla, Cox\'s Bazar and Payra seaports have been asked to show permanent warning signal number 3.\r\n\r\nA warning of light to moderate, and moderate to heavy rain has been issued at some places. Landslide warnings have also been issued for the same reason. The low pressure also raised the tide height by 1 feet. Several areas including Agrabad, CDA residences of the city were inundated by tidal water on Tuesday afternoon.\r\n\r\nAfter the terrible landslide in Chittagong in 2007, a hill management committee was formed with representatives of local administration and other government authorities. In almost every meeting of that committee, it is decided to evacuate the vulnerable residents of different hills and cut off the service ie electricity-gas-water connection. However, this did not materialize.A similar decision was taken in the 28th meeting of the committee last June. The same question has to be asked again and again, how are electricity, gas or water connections provided in the illegal settlements built by cutting the hills?\r\n\r\nAccording to the administration, permanent eviction from the hills and their rehabilitation is a time-consuming matter. Although some of them have been resettled in various places including shelter projects, most of the people at risk do not want to leave the mountains.\r\n\r\nThere is no denying the fact that people suffering from river erosion and lack of employment are forced to settle in big cities. Although they live in slums in Dhaka city, in Sylhet and Chittagong, their refuge is the mountains. Illegal settlements are being built there by cutting mountains. There is no way to stop free felling of mountains. Our question is why no strict action can be taken against Paharkhekods even if their names appear in newspapers.\r\n\r\nStrong steps should be taken towards rehabilitation of vulnerable residents in the hills. It is not possible to prevent landslides and loss of life without cutting the hills and stopping the illegal settlements.', 'ভারী বৃষ্টি হলেই সিলেট, চট্টগ্রাম ও কক্সবাজার জেলায় পাহাড়ধসের ঘটনা ঘটছে। এতে প্রাণহানিও হয়। প্রতি বর্ষায় আমরা এমন ঘটনার সম্মুখীন হচ্ছি। প্রশাসন বিভিন্ন ধরনের পদক্ষেপ নিলেও কোনোভাবেই পাহাড়ধসের ঘটনা ঠেকানো যাচ্ছে না। এর মধ্যে আবহাওয়ার সংবাদ হচ্ছে, উত্তর বঙ্গোপসাগরে সৃষ্ট লঘুচাপের কারণে চট্টগ্রামে ভারী থেকে মাঝারি বৃষ্টি হতে পারে। একই কারণে পাহাড়ধসের সতর্কবার্তাও জারি করা হয়েছে। ফলে স্থানীয় প্রশাসন ও সংশ্লিষ্ট কর্তৃপক্ষগুলোকে প্রস্তুতি নিতে হবে, তাতে কোনো সন্দেহ নেই।\r\n\r\nপতেঙ্গা আবহাওয়া দপ্তর থেকে জানা যাচ্ছে, গত মঙ্গলবার বেলা তিনটা পর্যন্ত আগের ২৪ ঘণ্টায় ৭৬ মিলিমিটার বৃষ্টি রেকর্ড করা হয়েছে। বিশেষ করে সোমবার রাত থেকে থেমে থেমে বৃষ্টি হচ্ছিল। লঘুচাপের প্রভাবে উত্তর বঙ্গোপসাগর এলাকা উত্তাল রয়েছে এখন। এ কারণে চট্টগ্রাম, মোংলা, কক্সবাজার ও পায়রা সমুদ্রবন্দরকে ৩ নম্বর স্থায়ী সতর্কসংকেত দেখাতে বলা হয়েছে।\r\n\r\nহালকা থেকে মাঝারি, আবার কোথাও কোথাও মাঝারি থেকে ভারী বৃষ্টির সতর্কতা জারি করা হয়েছে। একই কারণে পাহাড়ধস হওয়ার সতর্কতাও দেওয়া হয়েছে। লঘুচাপের কারণে জোয়ারের উচ্চতাও ১ ফুট বেড়েছে। জোয়ারের পানিতে মঙ্গলবার দুপুরে নগরের আগ্রাবাদ, সিডিএ আবাসিকসহ কয়েকটি এলাকা তলিয়ে গেছে।\r\n\r\n২০০৭ সালে চট্টগ্রামে ভয়াবহ পাহাড়ধসের পর স্থানীয় প্রশাসন ও সরকারি আরও কর্তৃপক্ষের প্রতিনিধি নিয়ে করা হয় পাহাড় ব্যবস্থাপনা কমিটি। ওই কমিটির প্রায় প্রতিটি সভায় বিভিন্ন পাহাড়ের ঝুঁকিপূর্ণ বাসিন্দাদের উচ্ছেদ ও সেবা অর্থাৎ বিদ্যুৎ–গ্যাস–পানি সংযোগ বিচ্ছিন্ন করার সিদ্ধান্ত হয়ে থাকে। তবে এটি বাস্তবায়িত হতে দেখা যায়নি সেভাবে। গত জুন মাসেও কমিটির ২৮তম সভায় একই ধরনের সিদ্ধান্ত হয়েছে। ঘুরেফিরে একই প্রশ্ন করতে হচ্ছে, পাহাড় কেটে গড়ে তোলা অবৈধ বসতিগুলোতে কীভাবে বিদ্যুৎ, গ্যাস বা পানির সংযোগ দেওয়া হয়?\r\n\r\nপ্রশাসনের বক্তব্য হচ্ছে, পাহাড় থেকে স্থায়ীভাবে উচ্ছেদ এবং তাদের পুনর্বাসন সময়সাপেক্ষ ব্যাপার। আশ্রয়ণ প্রকল্পসহ বিভিন্ন জায়গায় তাদের মধ্যে কিছু ব্যক্তিকে পুনর্বাসন করা হলেও ঝুঁকিতে থাকা অধিকাংশ মানুষই পাহাড় ছেড়ে যেতে চান না।\r\n\r\nনদীভাঙন ও কর্মসংস্থানের অভাবে ভুক্তভোগী মানুষেরা বাধ্য হয়ে বড় শহরগুলোতে থিতু হচ্ছেন, এই বাস্তবতা অস্বীকার করার সুযোগ নেই। ঢাকা শহরে বস্তিতে তাঁদের ঠাঁই হলেও সিলেট ও চট্টগ্রামের ক্ষেত্রে তাঁদের আশ্রয় হচ্ছে পাহাড়। পাহাড় কেটে সেখানে অবৈধ বসতি নির্মাণ করা হচ্ছে। অবাধে পাহাড় কাটা কোনোভাবে বন্ধ করা যাচ্ছে না। পাহাড়খেকোদের নাম পত্রপত্রিকায় এলেও তাঁদের বিরুদ্ধে কড়া ব্যবস্থা নেওয়া যাচ্ছে না কেন, সেটিই আমাদের প্রশ্ন।\r\n\r\nপাহাড়ে ঝুঁকিপূর্ণ বাসিন্দাদের পুনর্বাসনের দিকে জোরালো পদক্ষেপ নিতে হবে। পাহাড় কেটে অবৈধ বসতি বন্ধ করা ছাড়া পাহাড়ধস ও এতে প্রাণহানি রোখা সম্ভব নয়।', 'To the administration', 'প্রশাসনকে', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'chittagong-administration-should-take-action', '1', '2024-07-28 07:57:25', NULL),
(28, 16, 13, NULL, NULL, 8, 'Return to normal', 'স্বাভাবিক অবস্থা ফিরিয়ে আনুন', 'images/post_images/66a65044047f0.png', 'The country\'s economy is already under pressure due to dollar-crisis, decrease in foreign exchange reserves, increase in prices of daily commodities. There is no doubt that the violence caused by the student quota reform movement, imposition of curfew, draconian measures like shutdown of internet services have put the economy in a difficult situation.\r\n\r\nBusinessmen feel that Bangladesh has suffered a huge loss due to the closure of export-oriented factories. Abdul Mannan, president of BGMEA, an association of garment industry owners, said that the financial loss of around 11 thousand crore rupees has been caused due to the few days of stagnation. Out of this, the direct export of BGMEA has suffered a loss of Tk 6,400 crore. According to Mohammad Hatem, executive president of BKMEA, the association of knitwear industry owners, if a factory is closed for a day, there is a financial loss of 160 million dollars, which is 1,728 million taka in local currency.\r\n\r\nThe executive director of the private research institute Policy Research Institute. Ahsan H. Mansoor said, the economy has lost more than 84 thousand crore rupees in the last one week. Due to the ongoing stagnation, the economy has lost about 12 thousand crores per day. The damage to the economy may be measured in terms of money, but the damage to the image of the country cannot be measured.\r\n\r\nThe international trade of the country\'s banks is completely dependent on the Internet. In order to open an import-export letter of credit (LC), foreign banks have to be contacted through various channels including e-mail. Communication with foreign banks and buyers and sellers was completely stopped due to internet shutdown. Limited internet service was launched last Wednesday. Production has started in factories. Banks, government and private offices were also open for a limited time for the last two days.About 7,819 import-export invoices were submitted online by users for customs clearance at the Chittagong Custom House on Wednesday. The unloading of goods from the port has also started in full swing.\r\n\r\nAfter the communication with other parts of the country was stopped, the train and road communication also started on Thursday. But if the wheels of the economy are to be fully operational, the crisis that has arisen around the quota reform movement must be completely eliminated. The government\'s policy makers have said that they will take a final decision on the matter after seeing the situation on Friday.\r\n\r\nBut when the government thinks everything is normal, then why delay to open everything? Whatever needs to be done to restore normalcy in public life, must be done now. On the one hand, government policy makers say that the students are not involved in the violence and destruction caused by the quota movement, on the other hand, cases are being filed one after another in the name of an unknown number of agitators.This is certainly a contradictory position. Already, some leaders of the quota reform movement were taken away from their homes and alleged to be tortured. They need to be properly investigated.\r\n\r\nThe country\'s economy has suffered a lot. Over two hundred people lost their lives over a non-political issue like quota reform. Many are permanently crippled. Lost sight. This damage cannot be allowed to increase. Government should take legal action against those who destroyed property, subject to investigation. But innocent people cannot be harassed. \r\n\r\nTo restore normalcy in public life, security and democratic rights of all citizens should be ensured as well as a fear-free environment.', 'ডলার–সংকট, বৈদেশিক মুদ্রার রিজার্ভ কমে যাওয়া, নিত্যপণ্যের মূল্যবৃদ্ধির কারণে দেশের অর্থনীতি আগে থেকেই বেশ চাপে। শিক্ষার্থীদের কোটা সংস্কার আন্দোলনকে কেন্দ্র করে সৃষ্ট সহিংসতা, কারফিউ জারি, ইন্টারনেট সেবা বন্ধের মতো কঠোর পদক্ষেপ যে অর্থনীতিকে কঠিন অবস্থার মধ্যে ঠেলে দিয়েছে, সে বিষয়ে কোনো সন্দেহ নেই।\r\n\r\nরপ্তানিমুখী কারখানা বন্ধ থাকায় বাংলাদেশের বিশাল ক্ষতি হয়েছে বলে মনে করেন ব্যবসায়ীরা। পোশাকশিল্পের মালিকদের সংগঠন বিজিএমইএর সভাপতি আবদুল মান্নান বলেছেন, কয়েক দিনের স্থবিরতায় প্রায় ১১ হাজার কোটি টাকার আর্থিক ক্ষতি হয়েছে। এর মধ্যে বিজিএমইএর সরাসরি রপ্তানিতে ক্ষতি হয়েছে ৬ হাজার ৪০০ কোটি টাকা। নিট পোশাকশিল্পের মালিকদের সংগঠন বিকেএমইএর নির্বাহী সভাপতি মোহাম্মদ হাতেমের মতে, এক দিন কারখানা বন্ধ থাকলে ১৬ কোটি ডলারের আর্থিক ক্ষতি হয়, যা দেশি মুদ্রায় ১ হাজার ৭২৮ কোটি টাকা।\r\n\r\nবেসরকারি গবেষণাপ্রতিষ্ঠান পলিসি রিসার্চ ইনস্টিটিউটের নির্বাহী পরিচালক ড. আহসান এইচ মনসুর বলেছেন, গত এক সপ্তাহে অর্থনীতির ক্ষতি হয়েছে ৮৪ হাজার কোটি টাকার বেশি। চলমান স্থবিরতায় দিনে অর্থনীতির ক্ষতি হয়েছে প্রায় ১২ হাজার কোটি টাকা। অর্থনীতির ক্ষতি হয়তো টাকার অঙ্কে মাপা যায়, কিন্তু দেশের ভাবমূর্তির যে ক্ষতি হয়েছে, তা মাপার কোনো বাটখারা নেই।\r\n\r\nদেশের ব্যাংকগুলোর আন্তর্জাতিক বাণিজ্য পুরোপুরি ইন্টারনেটনির্ভর। আমদানি-রপ্তানির ঋণপত্র (এলসি) খোলার জন্য বিদেশি ব্যাংকগুলোর সঙ্গে ই-মেইলসহ বিভিন্ন মাধ্যমে যোগাযোগ করতে হয়। ইন্টারনেট বন্ধ থাকায় বিদেশি ব্যাংক ও ক্রেতা-বিক্রেতাদের সঙ্গে যোগাযোগ পুরোপুরি বন্ধ ছিল। গত বুধবার সীমিত পরিসরে ইন্টারনেট সেবা চালু হয়েছে। শিল্পকারখানাগুলোতে উৎপাদন শুরু হয়েছে। ব্যাংক, সরকারি–বেসরকারি দপ্তরও গত দুই দিন সীমিত সময়ের জন্য চালু ছিল। বুধবার চট্টগ্রাম কাস্টম হাউসে শুল্কায়নের জন্য প্রায় ৭ হাজার ৮১৯টি আমদানি-রপ্তানি চালানের নথি অনলাইনে দাখিল করেছেন ব্যবহারকারীরা। বন্দর থেকে পণ্য খালাসও পুরোদমে শুরু হয়েছে।\r\n\r\nঢাকার সঙ্গে দেশের অন্যান্য এলাকার যোগাযোগ বন্ধ থাকার পর গতকাল বৃহস্পতিবার ট্রেন ও সড়ক যোগাযোগও চালু হয়েছে। কিন্তু অর্থনীতির চাকা পুরোপুরি সচল করতে হলে কোটা সংস্কার আন্দোলনকে ঘিরে যে সংকট তৈরি হয়েছে, সেটা পুরোপুরি দূর করতে হবে। সরকারের নীতিনির্ধারকেরা শুক্রবারের পরিস্থিতি দেখে এ বিষয়ে চূড়ান্ত সিদ্ধান্ত নেওয়ার কথা বলেছেন।\r\n\r\nকিন্তু যখন সরকার সবকিছু স্বাভাবিক মনে করছে, তখন সবকিছু খুলে দিতে দেরি কেন? জনজীবনে স্বাভাবিক অবস্থা ফিরিয়ে আনতে যা করার, এখনই করতে হবে। সরকারের নীতিনির্ধারকেরা একদিকে বলেছেন কোটা আন্দোলনকে কেন্দ্র করে সৃষ্ট সহিংসতা ও ধ্বংসযজ্ঞের সঙ্গে শিক্ষার্থীরা জড়িত নন, অন্যদিকে অজ্ঞাতসংখ্যক আন্দোলনকারীর নামে একের পর এক মামলা করা হচ্ছে। এটা নিশ্চিতভাবেই স্ববিরোধী অবস্থান। ইতিমধ্যে কোটা সংস্কার আন্দোলনের কয়েকজন নেতাকে বাড়ি থেকে তুলে নিয়ে নির্যাতন করার অভিযোগ এসেছে। এগুলোর সুষ্ঠু তদন্ত হওয়া প্রয়োজন।\r\n\r\nদেশের অর্থনীতির অনেক ক্ষতি হয়েছে। কোটা সংস্কারের মতো একটি অরাজনৈতিক ইস্যুকে কেন্দ্র করে দুই শতাধিক মানুষের প্রাণহানি ঘটেছে। অনেকে চিরতরে পঙ্গু হয়ে গেছেন। দৃষ্টিশক্তি হারিয়েছেন। এই ক্ষতি আর বাড়তে দেওয়া যায় না। যাঁরা সম্পদ ধ্বংস করেছেন, তদন্ত সাপেক্ষে তাঁদের বিরুদ্ধে সরকার আইনি ব্যবস্থা নিক। কিন্তু নির্দোষ কাউকে হয়রানি করা যাবে না। \r\n\r\nজনজীবনে স্বাভাবিক অবস্থা ফিরিয়ে আনতে সব নাগরিকের নিরাপত্তা ও গণতান্ত্রিক অধিকারের পাশাপাশি ভয়হীন পরিবেশ নিশ্চিত করা হোক।', 'normal', 'স্বাভাবিক', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'return-to-normal', '1', '2024-07-28 08:05:56', NULL),
(29, 16, 13, NULL, NULL, 8, 'Why is the cost of living so low in this country?', 'এই দেশে জীবনের মূল্য কেন এত কম', 'images/post_images/66a6515282fde.png', 'Last Thursday (July 18) I went to Dhaka Medical College Hospital with a colleague. It was 10:30 pm. Despite this, there is a crowd of people in front of the emergency department of the hospital. Ambulances arrive one after the other with a few minute intervals.\r\n\r\nAlmost all of those who were being taken down from the ambulance had injuries on their bodies. Some are bleeding, some are limping, some are in such bad condition that they are being taken to the emergency department on stretchers. Talking to friends, relatives or rescuers who were with them, it was found that some of them were injured by police bullets or rubber bullets, some others were victims of Chhatra League-Youth League attacks.\r\n\r\nOn the way to enter the hospital through the emergency department, I saw four to five people standing around a stretcher. When approached, the body of a 24 to 25-year-old youth was found on a stretcher. There was a scruffy man in a lungi-fatua standing with a bewildered look.\r\n\r\nIt was revealed that he is the father of the dead young man. Their home is in Daudkandi Upazila of Comilla. The boy studied in Dhaka and lived in Badda. He left home that afternoon. In the afternoon, someone from Dhaka Medical called and informed the relatives about the death.', 'গত বৃহস্পতিবার (১৮ জুলাই) অফিস শেষ করে এক সহকর্মীর সঙ্গে গিয়েছিলাম ঢাকা মেডিকেল কলেজ হাসপাতালে। তখন রাত সাড়ে ১০টা। এরপরও হাসপাতালের জরুরি বিভাগের সামনে লোকজনের ভিড়। কয়েক মিনিট বিরতি দিয়ে একের পর এক অ্যাম্বুলেন্স আসছে।\r\n\r\nঅ্যাম্বুলেন্স থেকে যাঁদের নামানো হচ্ছিল, তাঁদের প্রায় সবার শরীরে আঘাতের চিহ্ন। কেউ রক্তাক্ত, কেউ খুঁড়িয়ে হাঁটছেন, কারও কারও অবস্থা এতই খারাপ যে স্ট্রেচারে করে জরুরি বিভাগে নিয়ে যাওয়া হচ্ছে। তাঁদের সঙ্গে থাকা বন্ধু, স্বজন বা উদ্ধারকারীর সঙ্গে কথা বলে জানা গেল, তাঁরা কেউ পুলিশের ছররা গুলি বা রাবার বুলেটে আহত হয়েছেন, কেউ আবার কেউ ছাত্রলীগ-যুবলীগের হামলার শিকার হয়েছেন।\r\n\r\nজরুরি বিভাগ দিয়ে হাসপাতালের ভেতর দিকে যাওয়ার পথেই দেখি, একটি স্ট্রেচার ঘিরে চার থেকে পাঁচজন লোক দাঁড়িয়ে আছেন। কাছে গিয়ে দেখা গেল, স্ট্রেচারে ২৪ থেকে ২৫ বছরের এক তরুণের মৃতদেহ। সেখানে লুঙ্গি-ফতুয়া পরা শ্মশ্রুমণ্ডিত এক লোক বিমর্ষ চেহারায় দাঁড়িয়ে ছিলেন।\r\n\r\nকথা বলে জানা গেল, তিনিই সেই মৃত তরুণের বাবা। তাঁদের বাড়ি কুমিল্লার দাউদকান্দি উপজেলায়। ছেলেটি ঢাকায় পড়াশোনা করতেন, থাকতেন বাড্ডায়। তিনি সেদিন দুপুরে বাসা থেকে বের হয়েছিলেন। বিকেলে ঢাকা মেডিকেল থেকে কেউ একজন ফোন দিয়ে স্বজনদের মৃত্যুর কথা জানান।', 'Manzurul Islam', 'মনজুরুল ইসলাম', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'why-is-the-cost-of-living-so-low-in-this-country', '1', '2024-07-28 08:10:26', NULL),
(30, 17, 6, NULL, NULL, 8, 'Stokes\' 24 ball fifty, England won by 87 runs in 7.2 overs', '২৪ বলে ফিফটি স্টোকসের, ৭.২ ওভারে ৮৭ রান তুলে জিতল ইংল্যান্ড', 'images/post_images/66a65f8bb37d0.jpg', 'After England\'s 6 overs in Edgbaston\'s run chase, a Cricinfo reader commented, \'England\'s great powerplay is over.\'If you don\'t know which edition England are playing, you can assume it\'s T20 . Not really.\r\n\r\nEngland was playing the Test at Edgbaston. The third day win target was 82 runs. The hosts have crossed that in 7.2 overs, meaning 11.59 runs per over! No team has ever won a Test run chase with a target of at least 80 runs so quickly.\r\n\r\nComing to open the innings for the second time in his career, England captain Ben Stokes played an innings of 55 runs off 28 balls, Ben Duckett remained unbeaten on 25 runs off 16 balls. The two hit 13 fours and 2 sixes. England also confirmed the upset of the West Indies in the three-match series by winning by 10 wickets.', 'বার্মিংহামের এজবাস্টনে রান তাড়ায় ইংল্যান্ডের ৬ ওভার শেষ হওয়ার পর ক্রিকইনফোর বল বাই বল কমেন্ট্রিতে এক পাঠক মন্তব্য করলেন, ‘ইংল্যান্ডের দারুণ এক পাওয়ারপ্লে শেষ হলো।’ ইংল্যান্ড কার সঙ্গে কোন সংস্করণে খেলছে, সেটি জানা না থাকলে আপনি ধরে নিতেই পারেন, টি-টোয়েন্টির কথা হচ্ছে। আদতে সেটি নয়।\r\n\r\nএজবাস্টনে ইংল্যান্ড টেস্টই খেলছিল। তাতে তৃতীয় দিন জয়ের লক্ষ্য ছিল ৮২ রান। ৭.২ ওভারেই সেটি পেরিয়ে গেছে স্বাগতিকেরা, মানে ওভারপ্রতি তুলেছে ১১.৫৯ রান! টেস্টে রান তাড়ায় কমপক্ষে ৮০ রানের লক্ষ্যে এত দ্রুতগতিতে তুলে এর আগে জেতেনি কোনো দল।\r\n\r\nক্যারিয়ারে দ্বিতীয়বার ইনিংস ওপেন করতে এসে ইংল্যান্ড অধিনায়ক বেন স্টোকস খেলেছেন ২৮ বলে ৫৫ রানের ইনিংস, বেন ডাকেট অপরাজিত থাকেন ১৬ বলে ২৫ রানে। দুজন মিলে মেরেছেন ১৩টি চার ও ২টি ছক্কা। ১০ উইকেটে জিতে ওয়েস্ট ইন্ডিজকে তিন ম্যাচ সিরিজে ধবলধোলাইও নিশ্চিত করেছে ইংল্যান্ড।', 'of Birmingham', 'বার্মিংহামের', NULL, NULL, NULL, 1, '28-07-2024', 'July', 'stokes-24-ball-fifty-england-won-by-87-runs-in-72-overs', '1', '2024-07-28 09:11:07', NULL),
(31, 17, 6, NULL, NULL, 8, 'Stokes will not play in T20 World Cup', 'স্টোকস টি-টোয়েন্টি বিশ্বকাপে খেলবেন না', 'images/post_images/66a660bf0e3cf.jpg', 'Ben Stokes will not play in the ICC T20 World Cup. The England and Wales Cricket Board (ECB) has informed today that the English all-rounder is not interested in playing the World Cup to be held in the West Indies and the United States in June.\r\n\r\nIn the future, he wants to focus on returning as a complete all-rounder. With this goal in mind, Stokes will play in the first class for the county team Durham. Earlier, England\'s Test captain had withdrawn himself from the IPL.', 'আইসিসি টি-টোয়েন্টি বিশ্বকাপে খেলবেন না বেন স্টোকস। ইংল্যান্ড অ্যান্ড ওয়েলস ক্রিকেট বোর্ডের (ইসিবি) পক্ষ থেকে আজ জানানো হয়েছে, জুনে ওয়েস্ট ইন্ডিজ ও যুক্তরাষ্ট্রে অনুষ্ঠিত হতে যাওয়া বিশ্বকাপ খেলতে এই ইংলিশ অলরাউন্ডার আগ্রহী নন।\r\n\r\nভবিষ্যতে তিনি পূর্ণাঙ্গ অলরাউন্ডার হিসেবে ফেরার দিকেই মনোযোগ দিতে চান। এই লক্ষ্য সামনে রেখে কাউন্টি দল ডারহামের হয়ে প্রথম শ্রেণিতে খেলবেন স্টোকস। এর আগে আইপিএল থেকেও নিজেকে সরিয়ে নিয়েছিলেন ইংল্যান্ডের টেস্ট অধিনায়ক।', 'game desk', 'খেলা ডেস্ক', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'stokes-will-not-play-in-t20-world-cup', '1', '2024-07-28 09:16:15', NULL),
(32, 17, 6, NULL, NULL, 8, 'Umpire Erasmus regrets more about the mistakes of the 2019 World Cup final', '২০১৯ বিশ্বকাপ ফাইনালের যে ভুল নিয়ে বেশি আক্ষেপ আম্পায়ার এরাসমাসের', 'images/post_images/66a661786ccbc.webp', 'In the memorable final of the 2019 World Cup, it was Ben Stokes\' decision to give away 6 runs after being 4 with the bat. However, the umpire, Erasmus, is more upset about another \'mistake\' in that match.\r\n\r\nThe South African A umpire retired after New Zealand\'s Christchurch Test against Australia last month. After that, Sharfuddaula Ibn Shahid came as the first Bangladeshi in the elite panel.\r\n\r\nErasmus, who was on the ICC Elite Panel from 2010 to 2024, has overseen 82 Tests, 124 ODIs and 43 T20Is for men from the field in his long career. In addition, the three-time umpire of the year has also served 18 women\'s T20. A colorful career has also seen several controversial matches.\r\n\r\nErasmus was the television umpire at the time of Jonny Bairstow\'s stumping incident in the last Ashes. In the World Cup, Angelo Mathews became the first person to be timed out in international cricket in the match against Bangladesh, Erasmus was on the service field. He was on-field duty with Kumar Dharmasena in the 2019 World Cup final at Lord\'s.', '২০১৯ বিশ্বকাপের স্মরণীয় সে ফাইনালে বেন স্টোকসের ব্যাটে লেগে ৪ হওয়ার পর ভুলে ৬ রান দেওয়ার সিদ্ধান্ত তো ছিলই। তবে সে ম্যাচের আরেকটি ‘ভুল’ নিয়ে আক্ষেপটা বেশি আম্পায়ার মারাই এরাসমাসের।\r\n\r\nগত মাসে অস্ট্রেলিয়ার বিপক্ষে নিউজিল্যান্ডের ক্রাইস্টচার্চ টেস্ট দিয়ে অবসরে গেছেন দক্ষিণ আফ্রিকান এ আম্পায়ার। এরপর এলিট প্যানেলে প্রথম বাংলাদেশি হিসেবে এসেছেন শরফুদ্দৌলা ইবনে শহীদ।\r\n\r\n২০১০ সাল থেকে ২০২৪ সাল পর্যন্ত আইসিসির এলিট প্যানেলে থাকা এরাসমাস তাঁর দীর্ঘ ক্যারিয়ারে মাঠে থেকে পরিচালনা করেছেন পুরুষদের ৮২টি টেস্ট, ১২৪টি ওয়ানডে ও ৪৩টি টি-টোয়েন্টি। পাশাপাশি ১৮টি নারী টি-টোয়েন্টির দায়িত্বও পালন করেছেন তিনবারের বর্ষসেরা এ আম্পায়ার। বর্ণিল ক্যারিয়ারে বিতর্কিত ম্যাচও দেখেছেন বেশ কয়েকটি।\r\n\r\nসর্বশেষ অ্যাশেজে জনি বেয়ারস্টোর সেই স্টাম্পিংয়ের ঘটনার সময় টেলিভিশন আম্পায়ার ছিলেন এরাসমাস। বিশ্বকাপে অ্যাঞ্জেলো ম্যাথুস প্রথম ব্যক্তি হিসেবে আন্তর্জাতিক ক্রিকেটে টাইমড আউট হয়েছিলেন বাংলাদেশের সঙ্গে ম্যাচে, সেবার মাঠেই ছিলেন এরাসমাস। ২০১৯ বিশ্বকাপ ফাইনালে লর্ডসে কুমার ধর্মসেনার সঙ্গে অন ফিল্ড দায়িত্বে ছিলেন তিনি।', 'World Cup', 'বিশ্বকাপ', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'umpire-erasmus-regrets-more-about-the-mistakes-of-the-2019-world-cup-final', '1', '2024-07-28 09:19:20', NULL),
(33, 17, 7, NULL, NULL, 8, 'England\'s tiebreaker woes at Euros, Styris-Neesham punch from New Zealand', 'ইউরোতে ইংল্যান্ডের টাইব্রেকার দুঃখ, নিউজিল্যান্ড থেকে খোঁচা স্টাইরিস-নিশামের', 'images/post_images/66a6620c4db30.JPG', 'It has been two years since the World Cup final. But even after all these days, Jimmy Neesham and Scott Styris of New Zealand could not forget the sadness of losing in that final. Of course, despite being so close to their first World Cup, the pain of losing in such a strange way may not be forgotten in a lifetime.\r\n\r\nFor that reason or not, these two current and former cricketers of New Zealand pulled the pain of cricket into football and punched England!\r\n\r\nEngland lost a tiebreaker 3-2 to Italy in the Euro final yesterday at their football-holy Wembley. England\'s second international title, the first to reach the final of an international tournament in 55 years, is yet to come. If you tune in to the tune of the English, you have to say, football did not return home!\r\n\r\nBut Styris-Nisham\'s thought about it! New Zealand lost to England in the final of the Cricket World Cup by a strange rule, pulling it out and punching the two with the tiebreaker rule in the Euro.', 'দুই বছর হয়ে গেছে বিশ্বকাপের ফাইনালের। কিন্তু এত দিনেও সেই ফাইনালে অদ্ভুতুড়ে নিয়মে হারের দুঃখ ভুলতে পারেননি নিউজিল্যান্ডের জিমি নিশাম আর স্কট স্টাইরিস। অবশ্য নিজেদের প্রথম বিশ্বকাপের এত কাছে গিয়েও এমন অদ্ভুতুড়ে নিয়মে হারের দুঃখ একজীবনেও হয়তো ভোলার নয়।\r\n\r\nসে কারণেই কি না, ক্রিকেটের দুঃখ ফুটবলে টেনে এনে ইংল্যান্ডকে খোঁচা মারলেন নিউজিল্যান্ডের বর্তমান ও সাবেক এই দুই ক্রিকেটার!\r\n\r\nনিজেদের ফুটবল–তীর্থ ওয়েম্বলিতে কাল ইউরোর ফাইনালে ইতালির কাছে টাইব্রেকারে ৩-২ ব্যবধানে হেরেছে ইংল্যান্ড। ৫৫ বছর পর প্রথম কোনো আন্তর্জাতিক টুর্নামেন্টের ফাইনালে ওঠা ইংল্যান্ডের দ্বিতীয় আন্তর্জাতিক শিরোপা জেতা আর হলো না। ইংলিশদের সুরে সুর মেলালে বলতে হয়, ফুটবল ঘরে ফিরল না!\r\n\r\nকিন্তু তা নিয়ে ভাবতে বয়েই গেছে স্টাইরিস-নিশামদের! ক্রিকেট বিশ্বকাপের ফাইনালে অদ্ভুতুড়ে নিয়মে এই ইংল্যান্ডের কাছেই হেরেছিল নিউজিল্যান্ড, সেটি টেনে এনে ইউরোতে টাইব্রেকারের নিয়ম নিয়ে খোঁচা মারলেন দুজন।', 'in euros', 'ইউরোতে', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'englands-tiebreaker-woes-at-euros-styris-neesham-punch-from-new-zealand', '1', '2024-07-28 09:21:48', NULL),
(34, 18, 11, 3, NULL, 8, 'Ranveer opens his mouth for the first time on the severe criticism of \'Animal\'', '‘অ্যানিমেল’ নিয়ে তীব্র সমালোচনা, প্রথমবার মুখ খুললেন রণবীর', 'images/post_images/66a662da2f4e1.jpg', 'Ranbir Kapoor is not on social media. Kalebhadre also gave an interview to the media. So while last year\'s film \'Animal\', directed by Sandeep Reddy Bhanga, was heavily criticized, the actor was not available for comment. Finally, Ranveer gave an interview on Nikhil Kamath\'s YouTube channel. Apart from criticizing \'Animal\', he talked about various topics.\r\n\r\nI don\'t agree with them, but at this stage of life I don\'t want to get into a debate with anyone. If I don\'t like my work, I\'m sorry, I\'ll try better next time.\r\nRanbir Kapoor\r\n\r\nAlthough \'Animal\' was a huge commercial success, critics called the movie \'misogynistic\'. Javed Akhtar, Kangana Ranaut and many Bollywood actors and producers were also vocal in criticizing the movie.', 'রণবীর কাপুর সামাজিক যোগাযোগমাধ্যমে নেই। গণমাধ্যমেও সাক্ষাৎকারে দেন কালেভদ্রে। তাই গত বছর তাঁর অভিনীত, সন্দীপ রেড্ডি ভাঙ্গা পরিচালিত ‘অ্যানিমেল’ সিনেমাটি নিয়ে যখন তীব্র সমালোচনা চলছে, অভিনেতার বক্তব্য পাওয়া যায়নি। অবশেষে নিখিল কামাথের ইউটিউব চ্যানেলে সাক্ষাৎকার দিয়েছেন রণবীর। ‘অ্যানিমেল’ নিয়ে সমালোচনা ছাড়াও কথা বলেছেন নানা প্রসঙ্গে।\r\n\r\nআমি তাঁদের সঙ্গে একমত নই, তবে জীবনের এই পর্যায়ে এসে কারও সঙ্গে বিতর্কে জড়াতে চাইনি। আমার কাজ যদি পছন্দ না হয়, তাহলে দুঃখ প্রকাশ করে এটাই বলতে পারি, পরের বার আরও ভালোভাবে চেষ্টা করব।\r\nরণবীর কাপুর\r\n‘অ্যানিমেল’ ব্যাপকভাবে ব্যবসায়িক সাফল্য পেলেও সিনেমাটিকে ‘নারীবিদ্বেষী’ বলে অভিহিত করেন সমালোচকেরা। জাভেদ আখতার, কঙ্গনা রৌনতসহ বলিউডের অনেক অভিনয়শিল্পী, নির্মাতারও সিনেমাটির সমালোচনায় মুখর ছিলেন।', 'Animal', 'অ্যানিমেল', NULL, NULL, NULL, 1, '28-07-2024', 'July', 'ranveer-opens-his-mouth-for-the-first-time-on-the-severe-criticism-of-animal', '1', '2024-07-28 09:25:14', '2024-07-28 09:25:20'),
(35, 18, 11, NULL, NULL, 8, 'Dhanush did not have to look back since then', 'সেই থেকে আর পেছনে তাকাতে হয়নি ধানুশকে', 'images/post_images/66a663efc6b6e.jpg', 'He is a popular south actor. He is famous not only as an actor but also as a singer and producer. Although he is a popular actor, he once wanted to work as a hotel cook. Wanted to be a chef. But because of family roots with acting, you have to walk that way. Became one of the popular actors. Actor Dhanush\'s birthday today. You can check the information about him.\r\n\r\nDhanush\'s father and brother are film people. The beginning is easy. Dhanush made his film debut in 2002 with the help of director brother Selvaragavan. But he had to appear in seven films in a row to make it. These movies were average. Although some movies brought him praise, he still could not join the box office race. Photo: Instagram\r\n\r\nEven when the career was not standing even after doing one movie, he still signed his name in new movies. Because, he had already learned from his family, \"If you have hard work and honesty, success will come.\" After only four years, he came into the limelight with the movie \'Pudhu Pettai\'. Since then, there was no looking back in the career.', 'দক্ষিণের জনপ্রিয় অভিনেতা তিনি। শুধু অভিনেতাই নন, একাধারে গায়ক ও প্রযোজক হিসেবে তাঁর খ্যাতি রয়েছে। জনপ্রিয় অভিনেতা হলেও একসময় ইচ্ছা ছিল হোটেলের পাচকের চাকরির। চেয়েছিলেন শেফ হবেন। কিন্তু অভিনয়ের সঙ্গে পরিবারের শিকড় থাকায় সেই পথেই হাঁটতে হয়। হয়ে ওঠেন জনপ্রিয় অভিনেতাদের একজন। সেই অভিনেতা ধানুশের আজ জন্মদিন। তাঁকে নিয়ে তথ্যগুলো দেখে নিতে পারেন।\r\n\r\nধানুশের বাবা ও ভাই সিনেমার মানুষ। শুরুটা সহজেই হয়। পরিচালক ভাই সেলভারাগবনের হাত ধরে ধানুশ ২০০২ সালে সিনেমায় নাম লেখান। কিন্তু তাঁকে জায়গা করে নিতে পরপর সাতটি সিনেমায় নাম লেখাতে হয়েছে। এ সিনেমাগুলো ছিল গড়পড়তা। কিছু সিনেমা তাঁকে প্রশংসা এনে দিলেও তখনো বক্স অফিস দৌড়ে শামিল হতে পারেননি।ছবি : ইনস্টাগ্রাম\r\n\r\nএকের পর এক সিনেমা করেও যখন ক্যারিয়ার দাঁড়াচ্ছিল না, তখনো তিনি নতুন নতুন সিনেমায় নাম লিখিয়েছেন। কারণ, পরিবার থেকে আগেই শিখেছিলেন, ‘পরিশ্রম আর সততা থাকলে সাফল্য আসবেই।’ মাত্র চার বছর পরই ‘পুধু পেত্তাই’ সিনেমা দিয়ে তুমুল আলোচনায় চলে আসেন। সেই থেকে ক্যারিয়ারে আর পেছনে তাকাতে হয়নি।', 'To Dhanush', 'ধানুশকে', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'dhanush-did-not-have-to-look-back-since-then', '1', '2024-07-28 09:29:51', NULL),
(36, 18, 10, NULL, NULL, 8, 'As if Shafin was born in the mouth of the spoon of music', 'যেন সুরের চামচ মুখে জন্মেছিলেন শাফিন', 'images/post_images/66a664bbc5807.jpg', 'With a bass guitar in his hand, he raised his voice, \'Give it back\', \'Today is your birthday\'. Band star Shafin Ahmed has written a separate chapter in the history of rock music of Bangladesh in song and guitar.\r\n\r\nHis voice is completely different. He sings very well. It is very difficult to sing while playing the bass at the same time. That\'s what sets him apart,\' says lyricist and composer Prince Mahmood about Shafin Ahmed.\r\n\r\nShafin has sung about 10 songs, including \'Aaj Jandini Tomar\', \'Ki Kari Sab Bule Jay\', written by Prince Mahmud. Apart from Miles, he has written and composed most of Shafin\'s popular singles.\r\n\r\nIn his four-decade career, Shafin gave many hit songs including \'Phirye Dao\', \'Chand Tara Surya\', \'Jala Jala Antare\', \'Phir Ele Na\', \'Hello Dhaka\'. This 63-year-old star died on Thursday morning Bangladesh time due to heart disease while performing a concert in the United States. His death has cast a shadow of mourning in the music industry.', 'হাতে বেজ গিটার, কণ্ঠে তুলেছেন ‘ফিরিয়ে দাও’, ‘আজ জন্মদিন তোমার’। গান-গিটারে বাংলাদেশের রক সংগীত ইতিহাসে আলাদা অধ্যায় রচনা করে চিরবিদায় নিলেন ব্যান্ড তারকা শাফিন আহমেদ।\r\n\r\n‘ওনার কণ্ঠটা একদমই আলাদা। অত্যন্ত সুরে গান করেন। একই সঙ্গে বেজ বাজিয়ে গান করা ভীষণ কঠিন কাজ। এটিই তাঁকে আলাদা করেছে, ’ শাফিন আহমদকে নিয়ে বললেন গীতিকার ও সুরকার প্রিন্স মাহমুদ।\r\n\r\nপ্রিন্স মাহমুদের লেখা ‘আজ জন্মদিন তোমার’, ‘কী করে সব ভুলে যাই’সহ ১০ টির মতো গান গেয়েছেন শাফিন। মাইলসের বাইরে শাফিনের বেশির ভাগ জনপ্রিয় একক গানের কথা ও সুর করেছেন তিনি।\r\n\r\nচার দশকের ক্যারিয়ারে ‘ফিরিয়ে দাও’, ‘চাঁদ তারা সূর্য’, ‘জ্বালা জ্বালা অন্তরে’, ‘ফিরে এলে না’, ‘হ্যালো ঢাকা’সহ বহু হিট গান উপহার দিয়েছেন শাফিন। যুক্তরাষ্ট্রে কনসার্ট করতে গিয়ে হৃদ্রোগে আক্রান্ত হয়ে বাংলাদেশ সময় গতকাল বৃহস্পতিবার সকালে মারা গেছেন ৬৩ বছর বয়সী এই তারকা। তাঁর মৃত্যুতে সংগীতাঙ্গনে শোকের ছায়া নেমে এসেছে।', 'Shafin', 'শাফিন', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'as-if-shafin-was-born-in-the-mouth-of-the-spoon-of-music', '1', '2024-07-28 09:33:15', NULL),
(37, 18, 11, NULL, NULL, 8, '\"Please don\'t go, you won\'t find me again\" - Shafin\'s request before death', '‘তোমরা যেয়ো না প্লিজ, আমাকে আর পাবা না’—মৃত্যুর আগে শাফিনের আকুতি', 'images/post_images/66a665a497780.jpg', 'Shafin Ahmed, the popular star of the band, who was supposed to sing on the stage in Virginia in the United States, did not sing at the end due to illness. Another popular singer of the country, Samina Chowdhury, sang on the same stage on July 20. After four days of the program, Shafin Ahmed came to know that he had left the illusion of the world forever. The news of Shafin Ahmed\'s death was unbelievable to Samina Chowdhury. This news was also very painful to bear.\r\n\r\nSamina Chowdhury, who is in the United States, said that her husband Ijaz Khan went to see Shafin Ahmed with Swapan while he was under treatment in the hospital. Samina Chowdhury also said that she requested them to stay in the hospital. In a Facebook post, Samina wrote, \'One of the organizers of Robin and Virginia\'s Swapnabaaz program told Pallab, Shafin Bhai is no more!\'', 'যুক্তরাষ্ট্রের ভার্জিনিয়ার যে মঞ্চে গাইবার কথা ছিল ব্যান্ডের জনপ্রিয় তারকা শাফিন আহমেদের, অসুস্থতায় শেষ পর্যন্ত গাওয়া হয়নি তাঁর। ২০ জুলাই একই মঞ্চে সেদিন গেয়েছিলেন দেশের আরেক জনপ্রিয় সংগীতশিল্পী সামিনা চৌধুরী। অনুষ্ঠানের চার দিনের মাথায় জানতে পারেন শাফিন আহমেদ চিরতরে পৃথিবীর মায়া ত্যাগ করেছেন। শাফিন আহমেদের মৃত্যুর খবর অবিশ্বাস্য ছিল সামিনা চৌধুরীর কাছে। এই খবর সহ্য করাটাও ছিল ভীষণ কষ্টদায়ক।\r\n\r\nযুক্তরাষ্ট্রে থাকা সামিনা চৌধুরী জানালেন, হাসপাতালে চিকিৎসাধীন অবস্থায় স্বামী ইজাজ খান স্বপনসহ গিয়েছিলেন শাফিন আহমেদকে দেখতে। হাসপাতালে তাঁদের থাকার অনুরোধ করেছিলেন বলেও জানালেন সামিনা চৌধুরী। ফেসবুক পোস্টে সামিনা লিখেছেন, ‘রবিন এবং ভার্জিনিয়ার স্বপ্নবাজের অনুষ্ঠান আয়োজকদের একজন পল্লব জানালেন, শাফিন ভাই আর নেই!’', 'United States', 'যুক্তরাষ্ট্রের', NULL, NULL, NULL, NULL, '28-07-2024', 'July', 'please-dont-go-you-wont-find-me-again-shafins-request-before-death', '1', '2024-07-28 09:37:08', NULL),
(38, 12, 13, 3, 38, 8, 'Can\'t accept the way Metrorail has been destroyed: PM1', 'মেট্রোরেল যেভাবে ধ্বংস করেছে মানতে পারছি না: প্রধানমন্ত্রী1', 'images/post_images/66a573568eb43.jpg', 'Prime Minister Sheikh Hasina cannot accept the manner in which the attackers destroyed the metro rail. He said that the countrymen should stand against those who are destroying the development that the government is doing.\r\n\r\nHe said these things while visiting the Mirpur-10 metro rail station which was damaged during the quota movement on Thursday (July 25) morning. At the time, he also said that those who committed this violence should be judged by the people of the country.\r\n\r\nAnd the Prime Minister urged the public to come forward to stop the vandals.\r\n\r\nThe Prime Minister said that it will be ensured that common people can reach the workplace without any problems. Efforts will be made to make the country financially prosperous. It cannot be failed that this country has been freed by people\'s blood.\r\n\r\nRegretfully, Sheikh Hasina said, what kind of mentality is it to destroy the structures that make people\'s lives easier? Although Dhaka city is stuck in traffic jam, metro rail has given relief. I cannot believe that modern technology has destroyed this transport like this.', 'হামলাকারীরা মেট্রোরেল যেভাবে ধ্বংস করেছে তা কোনোভাবেই মানতে পারছেন না প্রধানমন্ত্রী শেখ হাসিনা। \r\n\r\nবৃহস্পতিবার (২৫ জুলাই) সকালে কোটা আন্দোলনের সময় ক্ষতিগ্রস্ত মিরপুর-১০ মেট্রোরেল স্টেশন পরিদর্শনে গিয়ে তিনি এসব কথা বলেন। এসময় তিনি আরও বলেন, এ তাণ্ডব যারা করেছে, তাদের বিচার দেশবাসীকে করতে হবে।\r\n\r\nএবং ধ্বংসযজ্ঞকারীদের রুখে দিতে জনসাধারণকে এগিয়ে আসার আহ্বান জানান প্রধানমন্ত্রী।\r\nপ্রধানমন্ত্রী বলেন, সাধারণ মানুষ যেন নির্বিঘ্নে কর্মক্ষেত্র পৌঁছাতে পারে সেটা সুনিশ্চিত করা হবে। দেশ যেন আর্থিকভাবে সচ্ছল হতে পারে সেই চেষ্টা করা হবে। এ দেশ মানুষ রক্ত দিয়ে স্বাধীন করেছে সেটা ব্যর্থ হতে পারে না।\r\n\r\nআক্ষেপ করে শেখ হাসিনা বলেন, যে স্থাপনাগুলো মানুষের জীবনকে সহজ করে সেগুলো ধ্বংস করা আসলে কোন ধরনের মানসিকতা। ঢাকা শহর যানজটে নাকাল থাকলেও মেট্রোরেল স্বস্তি দিয়েছে। আধুনিক প্রযুক্তির এই পরিবহন এভাবে ধ্বংস করেছে তা মানতে পারছি না।', 'PM, Metrorail,', 'প্রধানমন্ত্রী, মেট্রোরেল,', 1, 1, 1, 1, '27-07-2024', 'July', 'cant-accept-the-way-metrorail-has-been-destroyed-pm1', '1', '2024-07-25 02:30:13', '2024-07-27 16:40:58'),
(39, 12, 13, 3, 38, 8, 'Can\'t accept the way Metrorail has been destroyed: PM1', 'মেট্রোরেল যেভাবে ধ্বংস করেছে মানতে পারছি না: প্রধানমন্ত্রী1', 'images/post_images/66a573568eb43.jpg', 'Prime Minister Sheikh Hasina cannot accept the manner in which the attackers destroyed the metro rail. He said that the countrymen should stand against those who are destroying the development that the government is doing.\r\n\r\nHe said these things while visiting the Mirpur-10 metro rail station which was damaged during the quota movement on Thursday (July 25) morning. At the time, he also said that those who committed this violence should be judged by the people of the country.\r\n\r\nAnd the Prime Minister urged the public to come forward to stop the vandals.\r\n\r\nThe Prime Minister said that it will be ensured that common people can reach the workplace without any problems. Efforts will be made to make the country financially prosperous. It cannot be failed that this country has been freed by people\'s blood.\r\n\r\nRegretfully, Sheikh Hasina said, what kind of mentality is it to destroy the structures that make people\'s lives easier? Although Dhaka city is stuck in traffic jam, metro rail has given relief. I cannot believe that modern technology has destroyed this transport like this.', 'হামলাকারীরা মেট্রোরেল যেভাবে ধ্বংস করেছে তা কোনোভাবেই মানতে পারছেন না প্রধানমন্ত্রী শেখ হাসিনা। \r\n\r\nবৃহস্পতিবার (২৫ জুলাই) সকালে কোটা আন্দোলনের সময় ক্ষতিগ্রস্ত মিরপুর-১০ মেট্রোরেল স্টেশন পরিদর্শনে গিয়ে তিনি এসব কথা বলেন। এসময় তিনি আরও বলেন, এ তাণ্ডব যারা করেছে, তাদের বিচার দেশবাসীকে করতে হবে।\r\n\r\nএবং ধ্বংসযজ্ঞকারীদের রুখে দিতে জনসাধারণকে এগিয়ে আসার আহ্বান জানান প্রধানমন্ত্রী।\r\nপ্রধানমন্ত্রী বলেন, সাধারণ মানুষ যেন নির্বিঘ্নে কর্মক্ষেত্র পৌঁছাতে পারে সেটা সুনিশ্চিত করা হবে। দেশ যেন আর্থিকভাবে সচ্ছল হতে পারে সেই চেষ্টা করা হবে। এ দেশ মানুষ রক্ত দিয়ে স্বাধীন করেছে সেটা ব্যর্থ হতে পারে না।\r\n\r\nআক্ষেপ করে শেখ হাসিনা বলেন, যে স্থাপনাগুলো মানুষের জীবনকে সহজ করে সেগুলো ধ্বংস করা আসলে কোন ধরনের মানসিকতা। ঢাকা শহর যানজটে নাকাল থাকলেও মেট্রোরেল স্বস্তি দিয়েছে। আধুনিক প্রযুক্তির এই পরিবহন এভাবে ধ্বংস করেছে তা মানতে পারছি না।', 'PM, Metrorail,', 'প্রধানমন্ত্রী, মেট্রোরেল,', 1, 1, 1, 1, '27-07-2024', 'July', 'cant-accept-the-way-metrorail-has-been-destroyed-pm1', '1', '2024-07-25 02:30:13', '2024-07-27 16:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `prayers`
--

CREATE TABLE `prayers` (
  `id` bigint UNSIGNED NOT NULL,
  `fajr_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fajr_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dhuhr_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dhuhr_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asr_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asr_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maghrib_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maghrib_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isha_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isha_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jummah_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jummah_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prayers`
--

INSERT INTO `prayers` (`id`, `fajr_en`, `fajr_bn`, `dhuhr_en`, `dhuhr_bn`, `asr_en`, `asr_bn`, `maghrib_en`, `maghrib_bn`, `isha_en`, `isha_bn`, `jummah_en`, `jummah_bn`, `created_at`, `updated_at`) VALUES
(1, '4:30 AM', '৪ : ৩০ পূর্বাহন', '1:30 PM', '১ : ৩০ অপরাহন', '5:00 PM', '৫ : ০০ অপরাহন', '6:45 PM', '৬ : ৪৫ অপরাহন', '8:15 PM', '৮ : ১৫ অপরাহন', '1:30 PM', '১ : ৩০ অপরাহন', '2024-07-25 15:47:10', '2024-07-25 15:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Supper Admin', '1', '2024-07-09 08:02:26', NULL),
(2, 'Admin', '1', '2024-07-09 09:32:21', NULL),
(3, 'Only Editor', '1', '2024-07-09 09:32:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint UNSIGNED NOT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `google_analytics` text COLLATE utf8mb4_unicode_ci,
  `google_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytics` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_author`, `meta_title`, `meta_keyword`, `meta_description`, `google_analytics`, `google_verification`, `alexa_analytics`, `created_at`, `updated_at`) VALUES
(1, 'News', 'Bhola News', 'newsportal', 'this is a', 'as', 'dsaf', 'dsafs', '2024-07-25 15:02:43', '2024-07-25 15:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wname_bn` text COLLATE utf8mb4_unicode_ci,
  `wname_en` text COLLATE utf8mb4_unicode_ci,
  `address_bn` text COLLATE utf8mb4_unicode_ci,
  `address_en` text COLLATE utf8mb4_unicode_ci,
  `phone_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `wname_bn`, `wname_en`, `address_bn`, `address_en`, `phone_bn`, `phone_en`, `email`, `created_at`, `updated_at`) VALUES
(2, 'images/setting/66cef5a361e26.png', 'ভোলা নিউজ', 'Bhola News', 'Banasree Block-B, Road-5, House-21 Dhaka', 'Banasree Block-B, Road-5, House-21 Dhaka', '01811178307', '01811178307', 'afzalbhola07@gmail.com', '2024-08-28 04:02:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `youtube`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com', 'https://www.twitter.com', 'https://youtube', 'https://instagram', 'https://linkedin', '2024-07-25 14:30:27', '2024-07-25 14:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `subcategory_bn`, `subcategory_en`, `status`, `created_at`, `updated_at`) VALUES
(6, '17', 'ক্রিকেট', 'Cricket', '1', '2024-07-18 13:30:23', '2024-07-18 13:31:05'),
(7, '17', 'ফুটবল', 'Football', '1', '2024-07-18 13:32:33', NULL),
(8, '17', 'অন্যান্য', 'Others', '1', '2024-07-18 13:34:23', NULL),
(9, '18', 'ঢালিউড', 'Dallywood', '1', '2024-07-18 13:35:10', NULL),
(10, '18', 'বলিউড', 'Bollywood', '1', '2024-07-18 13:35:54', NULL),
(11, '18', 'হলিউড', 'Hollywood', '1', '2024-07-18 13:36:24', NULL),
(12, '11', 'সরকার', 'Government', '1', '2024-07-18 13:39:13', NULL),
(13, '11', 'জনসংখ্যা', 'Population', '1', '2024-07-18 13:39:54', NULL),
(14, '11', 'দুর্ঘটনা', 'Accident', '1', '2024-07-18 13:40:14', NULL),
(15, '22', 'আমেরিকা', 'America', '1', '2024-07-18 13:43:40', NULL),
(16, '22', 'ভারত', 'India', '1', '2024-07-18 13:44:21', NULL),
(17, '12', 'পাকিস্তান', 'Pakistan', '1', '2024-07-18 13:45:04', '2024-07-25 00:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `sub_districts`
--

CREATE TABLE `sub_districts` (
  `id` bigint UNSIGNED NOT NULL,
  `district_id` bigint UNSIGNED NOT NULL,
  `subdistrict_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subdistrict_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_districts`
--

INSERT INTO `sub_districts` (`id`, `district_id`, `subdistrict_bn`, `subdistrict_en`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(10, 5, 'কুমিল্লা', 'Comilla', 'comilla', '1', '2024-07-25 01:44:19', NULL),
(11, 5, 'ফেনী', 'Feni', 'feni', '1', '2024-07-25 01:45:00', NULL),
(12, 5, 'ব্রাহ্মণবাড়িয়া', 'Brahmanbaria', 'brahmanbaria', '1', '2024-07-25 01:45:34', NULL),
(13, 5, 'রাঙ্গামাটি', 'Rangamati', 'rangamati', '1', '2024-07-25 01:46:02', NULL),
(14, 5, 'নোয়াখালী', 'Noakhali', 'noakhali', '1', '2024-07-25 01:46:27', NULL),
(15, 5, 'চাঁদপুর', 'Chandpur', 'chandpur', '1', '2024-07-25 01:46:53', NULL),
(16, 5, 'লক্ষ্মীপুর', 'Lakshmipur', 'lakshmipur', '1', '2024-07-25 01:47:20', NULL),
(17, 5, 'চট্টগ্রাম', 'Chittagong', 'chittagong', '1', '2024-07-25 01:47:47', NULL),
(18, 5, 'কক্সবাজার', 'Cox\'s Bazar', 'coxs-bazar', '1', '2024-07-25 01:48:14', NULL),
(19, 5, 'খাগড়াছড়ি', 'reed', 'reed', '1', '2024-07-25 01:49:23', NULL),
(20, 5, 'বান্দরবান', 'Bandarban', 'bandarban', '1', '2024-07-25 01:49:53', NULL),
(21, 10, 'নেত্রকোণা', 'corner of eye', 'corner-of-eye', '1', '2024-07-25 01:51:24', NULL),
(22, 10, 'জামালপুর', 'Jamalpur', 'jamalpur', '1', '2024-07-25 01:51:55', NULL),
(23, 10, 'ময়মনসিংহ', 'Mymensingh', 'mymensingh', '1', '2024-07-25 01:52:22', NULL),
(24, 10, 'শেরপুর', 'Sherpur', 'sherpur', '1', '2024-07-25 01:52:51', NULL),
(25, 9, 'কুড়িগ্রাম', 'Kurigram', 'kurigram', '1', '2024-07-25 01:53:38', NULL),
(26, 9, 'রংপুর', 'Rangpur', 'rangpur', '1', '2024-07-25 01:53:57', NULL),
(27, 9, 'ঠাকুরগাঁও', 'Thakurgaon', 'thakurgaon', '1', '2024-07-25 01:54:20', NULL),
(28, 9, 'গাইবান্ধা', 'gay bandha', 'gay-bandha', '1', '2024-07-25 01:54:46', NULL),
(29, 9, 'নীলফামারী', 'Nilphamari', 'nilphamari', '1', '2024-07-25 01:55:22', NULL),
(30, 9, 'লালমনিরহাট', 'Lalmonirhat', 'lalmonirhat', '1', '2024-07-25 01:55:47', NULL),
(31, 9, 'দিনাজপুর', 'Dinajpur', 'dinajpur', '1', '2024-07-25 01:56:17', NULL),
(32, 9, 'পঞ্চগড়', 'Panchagarh', 'panchagarh', '1', '2024-07-25 01:56:37', NULL),
(33, 7, 'সিলেট', 'Sylhet', 'sylhet', '1', '2024-07-25 01:58:00', NULL),
(34, 7, 'মৌলভীবাজার', 'Moulvibazar', 'moulvibazar', '1', '2024-07-25 01:58:23', NULL),
(35, 7, 'হবিগঞ্জ', 'Habiganj', 'habiganj', '1', '2024-07-25 01:58:43', NULL),
(36, 7, 'সুনামগঞ্জ', 'Sunamganj', 'sunamganj', '1', '2024-07-25 01:59:04', NULL),
(37, 3, 'বরগুনা', 'Barguna', 'barguna', '1', '2024-07-25 01:59:44', NULL),
(38, 3, 'ভোলা', 'Bhola', 'bhola', '1', '2024-07-25 02:00:24', NULL),
(39, 3, 'বরিশাল', 'Barisal', 'barisal', '1', '2024-07-25 02:00:50', NULL),
(40, 3, 'পিরোজপুর', 'Pirojpur', 'pirojpur', '1', '2024-07-25 02:01:14', NULL),
(41, 3, 'পটুয়াখালী', 'Patuakhali', 'patuakhali', '1', '2024-07-25 02:01:35', NULL),
(42, 3, 'ঝালকাঠি', 'Jhalakathi', 'jhalakathi', '1', '2024-07-25 02:01:55', NULL),
(43, 6, 'ঝিনাইদহ', 'Jhenaidah', 'jhenaidah', '1', '2024-07-25 02:03:02', NULL),
(44, 6, 'বাগেরহাট', 'Bagerhat', 'bagerhat', '1', '2024-07-25 02:03:34', NULL),
(45, 6, 'খুলনা', 'Khulna', 'khulna', '1', '2024-07-25 02:03:56', NULL),
(46, 6, 'মাগুরা', 'Magura', 'magura', '1', '2024-07-25 02:04:18', NULL),
(47, 6, 'কুষ্টিয়া', 'wrestling', 'wrestling', '1', '2024-07-25 02:04:49', NULL),
(48, 6, 'চুয়াডাঙ্গা', 'Chuadanga', 'chuadanga', '1', '2024-07-25 02:05:18', NULL),
(49, 6, 'নড়াইল', 'Narail', 'narail', '1', '2024-07-25 02:06:12', NULL),
(50, 6, 'মেহেরপুর', 'Meherpur', 'meherpur', '1', '2024-07-25 02:06:35', NULL),
(51, 6, 'সাতক্ষীরা', 'Satkhira', 'satkhira', '1', '2024-07-25 02:06:56', NULL),
(52, 6, 'যশোর', 'Jessore', 'jessore', '1', '2024-07-25 02:07:18', NULL),
(53, 8, 'নওগাঁ', 'Naogaon', 'naogaon', '1', '2024-07-25 02:07:41', NULL),
(54, 8, 'চাঁপাইনবাবগঞ্জ', 'Chapainawabganj', 'chapainawabganj', '1', '2024-07-25 02:08:04', NULL),
(55, 8, 'জয়পুরহাট', 'Joypurhat', 'joypurhat', '1', '2024-07-25 02:08:28', NULL),
(56, 8, 'নাটোর', 'of nature', 'of-nature', '1', '2024-07-25 02:08:57', NULL),
(57, 8, 'রাজশাহী', 'Rajshahi', 'rajshahi', '1', '2024-07-25 02:09:17', NULL),
(58, 8, 'বগুড়া', 'Bogra', 'bogra', '1', '2024-07-25 02:09:37', NULL),
(59, 8, 'পাবনা', 'Pabna', 'pabna', '1', '2024-07-25 02:09:57', NULL),
(60, 8, 'সিরাজগঞ্জ', 'Sirajganj', 'sirajganj', '1', '2024-07-25 02:10:19', NULL),
(61, 4, 'ফরিদপুর', 'Faridpur', 'faridpur', '1', '2024-07-25 02:11:11', NULL),
(62, 4, 'গোপালগঞ্জ', 'Gopalganj', 'gopalganj', '1', '2024-07-25 02:11:46', NULL),
(63, 4, 'মাদারীপুর', 'Madaripur', 'madaripur', '1', '2024-07-25 02:12:26', NULL),
(64, 4, 'রাজবাড়ী', 'Rajbari', 'rajbari', '1', '2024-07-25 02:13:04', NULL),
(65, 4, 'মুন্সিগঞ্জ', 'Munshiganj', 'munshiganj', '1', '2024-07-25 02:13:30', NULL),
(66, 4, 'ঢাকা', 'Dhaka', 'dhaka', '1', '2024-07-25 02:13:49', NULL),
(67, 4, 'মানিকগঞ্জ', 'Manikganj', 'manikganj', '1', '2024-07-25 02:14:08', NULL),
(68, 4, 'কিশোরগঞ্জ', 'Kishoreganj', 'kishoreganj', '1', '2024-07-25 02:14:28', NULL),
(69, 4, 'টাঙ্গাইল', 'Tangail', 'tangail', '1', '2024-07-25 02:14:53', NULL),
(70, 4, 'নারায়ণগঞ্জ', 'Narayanganj', 'narayanganj', '1', '2024-07-25 02:15:17', NULL),
(71, 4, 'শরীয়তপুর', 'Shariatpur', 'shariatpur', '1', '2024-07-25 02:15:38', NULL),
(72, 4, 'গাজীপুর', 'Gazipur', 'gazipur', '1', '2024-07-25 02:15:58', NULL),
(73, 4, 'নরসিংদী', 'Narsingdi', 'narsingdi', '1', '2024-07-25 02:16:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `email`, `phone`, `address`, `parmission`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Md.Afzal Hossen', 'afzal-swe', 'afzal@gmail.com', '01811178307', 'Banasree Block-B, Road-5, House-21 Dhaka', '1', '1', NULL, '$2y$10$t3ZZAOBG.EY5CBPusKdgSOf5H7HrjbkYdu2.9kHMVdYmY.PPnV0da', NULL, NULL, NULL),
(11, 'afzal', 'afzal', 'afzaaal@gmail.com', '01811178307', 'Banasree Block-B, Road-5, House-21 Dhaka', NULL, '1', NULL, '$2y$10$/pkKt549jIDcnzQh746YB.pWlr52LmOP1rWuN2HIvmOmmYa7YpaHG', NULL, '2024-07-16 14:08:44', '2024-07-16 14:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_socials`
--

CREATE TABLE `user_socials` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embed_code` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title_bn`, `title_en`, `embed_code`, `type`, `created_at`, `updated_at`) VALUES
(1, 'কিভাবে আপনার জিমেইল একাউন্টে গুগল সাইট তৈরি করবেন (বাংলা টিউটোরিয়াল)', 'How to making google sites in your gmail account (bangla tutorial)', 'w4oL1Y33HgA?si=hxzuG_Z8ZceT1yBp', '1', '2024-07-29 05:59:09', NULL),
(2, 'কম্পিউটার নেটওয়ার্কিং (বাংলা টিউটোরিয়াল)', 'Computer Networking (Bangla tutorial)', 'cBhMc1UzupA?si=IxGu8bIXqmgVBMkE', '0', '2024-07-29 06:05:26', NULL),
(3, 'ভূমিকা সমাবেশ প্রোগ্রামিং ভাষা (বাংলা টিউটোরিয়াল)', 'Introducation Assembly Programming Language (Bangla Tutorial)', 'yYV2VEXMlYI?si=TLVCx3cHJx-2DnHy', '0', '2024-07-29 06:06:25', NULL),
(4, 'লারাভেল বেসিক টু অ্যাডভান্স ইন্টারভিউ প্রশ্ন অংশ - 1', 'Laravel Basic To Advance Interview Question part-1', 'kI8nEuIxlIw?si=mKYOL4HriHSS4zTU', '0', '2024-07-29 06:08:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint UNSIGNED NOT NULL,
  `website_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `website_name_bn`, `website_name_en`, `website_link`, `created_at`, `updated_at`) VALUES
(3, 'খবর', 'news', 'http://localhost/phpmyadmin/index.php?route=/sql&db=news-portal&table=websites&pos=0', '2024-07-25 18:28:02', '2024-07-25 18:37:01'),
(4, 'দৈনিক কালের কন্ঠ', 'Daily voice', 'https://www.news24bd.tv/details/137812', '2024-07-27 05:32:20', NULL),
(5, 'দৈনিক কালের কণ্ঠ', 'kalerkantho', 'https://www.allbanglanewspapersbd.com/kalerkantho/', '2024-07-27 05:32:32', NULL),
(6, 'দৈনিক কালের কন্ঠ', 'Daily Kaler Kantho', 'https://bn.wikipedia.org/wiki/%E0%A6%A6%E0%A7%88%E0%A6%A8%E0%A6%BF%E0%A6%95_%E0%A6%95%E0%A6%BE%E0%A6%B2%E0%A7%87%E0%A6%B0_%E0%A6%95%E0%A6%A3%E0%A7%8D%E0%A6%A0', '2024-07-27 05:33:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `livetv`
--
ALTER TABLE `livetv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayers`
--
ALTER TABLE `prayers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_districts`
--
ALTER TABLE `sub_districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_districts_district_id_foreign` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_socials`
--
ALTER TABLE `user_socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livetv`
--
ALTER TABLE `livetv`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `prayers`
--
ALTER TABLE `prayers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sub_districts`
--
ALTER TABLE `sub_districts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_socials`
--
ALTER TABLE `user_socials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_districts`
--
ALTER TABLE `sub_districts`
  ADD CONSTRAINT `sub_districts_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
