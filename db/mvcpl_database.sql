-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 10:05 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcpl_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amenity_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenity_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenity_name`, `amenity_slug`, `created_at`, `updated_at`) VALUES
(1, 'Swiming Pool', 'swiming-pool', '2024-03-15 12:41:53', '2024-03-15 12:41:53'),
(2, 'Attached Bathroom', 'attached-bathroom', '2024-03-15 12:42:19', '2024-03-15 12:42:19'),
(3, 'Furnished Floor', 'furnished-floor', '2024-03-15 12:42:43', '2024-03-15 12:42:43'),
(4, 'Double Bed', 'double-bed', '2024-03-15 12:47:06', '2024-03-15 12:57:54'),
(10, 'On-site laundry facilities', 'on-site-laundry-facilities', '2024-03-18 00:37:23', '2024-03-18 00:37:23'),
(11, 'Restaurants or grocery stores', 'restaurants-or-grocery-stores', '2024-03-18 00:37:32', '2024-03-18 00:37:32'),
(12, 'Covered parking', 'covered-parking', '2024-03-18 00:37:44', '2024-03-18 00:37:44'),
(13, 'Controlled entry', 'controlled-entry', '2024-03-18 00:37:54', '2024-03-18 00:37:54'),
(14, 'Secure parking', 'secure-parking', '2024-03-18 00:38:03', '2024-03-18 00:38:03'),
(15, 'Security cameras', 'security-cameras', '2024-03-18 00:38:10', '2024-03-18 00:38:10'),
(16, 'Smart locks', 'smart-locks', '2024-03-18 00:38:20', '2024-03-18 00:38:20'),
(17, 'Online rent payment', 'online-rent-payment', '2024-03-18 00:38:30', '2024-03-18 00:38:30'),
(18, 'Public Garden', 'public-garden', '2024-03-18 00:38:45', '2024-03-18 00:38:45'),
(19, 'Pet Garden', 'pet-garden', '2024-03-18 00:38:56', '2024-03-18 00:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `blog_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_creator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_head` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_sub_head` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_seo_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category`, `blog_creator`, `blog_head`, `blog_sub_head`, `blog_img`, `blog_desc`, `blog_seo_title`, `blog_seo_desc`, `blog_slug`, `created_at`, `updated_at`) VALUES
(8, '20', 'Admin', 'Best flats near patna junction', 'Best flats near patna junction in affordable price', '65f7dd1d830f6.jpg', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>', 'Best flats near patna junction', 'Best flats near patna junction', 'best-flats-near-patna-junction', '2024-03-18 00:50:13', '2024-03-18 00:50:13'),
(9, '3', 'Admin', 'Best Luxuri Villa in Patna', 'Best Luxuri Villa in Patna in affordable Price', '65f7dd4a1ec5b.jpg', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>', 'Best Luxuri Villa in Patna', 'Best Luxuri Villa in Patna', 'best-luxuri-villa-in-patna', '2024-03-18 00:50:58', '2024-03-18 00:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category_name`, `blog_category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Apartment', 'apartment', '2024-03-14 09:59:53', '2024-03-14 09:59:53'),
(3, 'Luxury Villas', 'luxury-villas', '2024-03-14 10:01:07', '2024-03-15 10:57:33'),
(4, '2 BHK Bunglow', '2-bhk-bunglow', '2024-03-14 10:01:57', '2024-03-15 07:16:43'),
(20, 'Flats', 'flats', '2024-03-15 10:58:02', '2024-03-15 10:58:02'),
(21, 'New Category', 'new-category', '2024-03-17 14:25:16', '2024-03-18 01:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `callbacks`
--

CREATE TABLE `callbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `callbacks`
--

INSERT INTO `callbacks` (`id`, `mobile_number`, `created_at`, `updated_at`) VALUES
(1, '7412589655', '2024-03-16 14:09:12', '2024-03-16 14:09:12'),
(5, '7412589655', '2024-03-17 14:27:14', '2024-03-17 14:27:14'),
(6, '7412589630', '2024-03-18 01:37:53', '2024-03-18 01:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `page_url`, `email`, `mobile_number`, `requirement`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Test Developer', 'http://localhost:8000/quick-enquiry	', 'testingyoursite@gmail.com', '7696998810', 'Renovation/Remodeling', 'ok', '2024-03-16 13:10:07', '2024-03-16 13:10:07'),
(2, 'Test Developer', 'http://localhost:8000/quick-enquiry', 'testingyoursite@gmail.com', '07696998810', 'Renovation/Remodeling', 'gfddgfdgdffdgd', '2024-03-16 13:15:04', '2024-03-16 13:15:04'),
(8, 'Ramesh Kumar', 'http://localhost:8000/quick-enquiry', 'rk@gmail.com', '7696999105', 'Interior Design', 'I want to sell my property', '2024-03-18 01:33:56', '2024-03-18 01:33:56');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `location_img`, `location_slug`, `created_at`, `updated_at`) VALUES
(5, 'Patna City', '65f7db3f0eec6.png', 'patna-city', '2024-03-18 00:42:15', '2024-03-18 00:42:15'),
(6, 'Rajendra Nagar', '65f7ea58d9b4e.png', 'rajendra-nagar', '2024-03-18 01:46:40', '2024-03-18 01:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `action`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Admin created blog category', 'Blog category titled \"Test Category 1\" was created by admin', NULL, '2024-03-14 12:25:21', '2024-03-14 12:25:21'),
(5, 'Admin Deleted blog category', 'Blog category titled \"Test Category 1\" was deleted by admin', NULL, '2024-03-14 12:25:53', '2024-03-14 12:25:53'),
(6, 'Admin created blog category', 'Blog category titled \"Test Category\" was created by admin', NULL, '2024-03-14 12:57:21', '2024-03-14 12:57:21'),
(7, 'Admin Deleted blog category', 'Blog category titled \"Test Category\" was deleted by admin', NULL, '2024-03-14 13:00:15', '2024-03-14 13:00:15'),
(8, 'Admin created blog category', 'Blog category titled \"Test Category\" was created by admin', NULL, '2024-03-14 13:01:58', '2024-03-14 13:01:58'),
(9, 'Admin Deleted blog category', 'Blog category titled \"Test Category\" was deleted by admin', NULL, '2024-03-15 00:45:43', '2024-03-15 00:45:43'),
(10, 'Admin Created Blog', 'Blog titled \"Explore 11 Pre Wedding Shoot Locations in Ludhiana\" was created by admin', NULL, '2024-03-15 01:33:00', '2024-03-15 01:33:00'),
(11, 'Admin Created Blog', 'Blog titled \"lmjvxdtmkl\" was created by admin', NULL, '2024-03-15 01:49:46', '2024-03-15 01:49:46'),
(12, 'Admin Created Blog', 'Blog titled \"hcivvsgxkgv\" was created by admin', NULL, '2024-03-15 01:52:50', '2024-03-15 01:52:50'),
(13, 'Admin Created Blog', 'Blog titled \"khivkgzucrgu\" was created by admin', NULL, '2024-03-15 01:58:46', '2024-03-15 01:58:46'),
(14, 'Admin Created Blog', 'Blog titled \"bmfjlynpub\" was created by admin', NULL, '2024-03-15 02:00:20', '2024-03-15 02:00:20'),
(15, 'Admin Created Blog', 'Blog titled \"uxgobwcmn\" was created by admin', NULL, '2024-03-15 02:03:19', '2024-03-15 02:03:19'),
(16, 'Admin Edited Blog', 'Blog titled \"uxgobwcmn\" was edited by admin', NULL, '2024-03-15 06:03:15', '2024-03-15 06:03:15'),
(17, 'Admin Edited Blog', 'Blog titled \"uxgobwcmn\" was edited by admin', NULL, '2024-03-15 06:03:28', '2024-03-15 06:03:28'),
(18, 'Admin Edited Blog', 'Blog titled \"ABCEDFGHIJKLMNOPQRSTUVWXYZ\" was edited by admin', NULL, '2024-03-15 06:04:01', '2024-03-15 06:04:01'),
(19, 'Admin Edited Blog', 'Blog titled \"ABCEDFGHIJKLMNOPQRSTUVWXYZ\" was edited by admin', NULL, '2024-03-15 06:04:16', '2024-03-15 06:04:16'),
(20, 'Admin Edited Blog', 'Blog titled \"Why sport scores are killing you\" was edited by admin', NULL, '2024-03-15 06:07:19', '2024-03-15 06:07:19'),
(21, 'Admin Deleted Blog', 'Blog titled \"khivkgzucrgu\" was deleted by admin', NULL, '2024-03-15 06:20:43', '2024-03-15 06:20:43'),
(22, 'Admin Deleted Blog', 'Blog titled \"hcivvsgxkgv\" was deleted by admin', NULL, '2024-03-15 06:21:29', '2024-03-15 06:21:29'),
(23, 'Admin Deleted Blog', 'Blog titled \"lmjvxdtmkl\" was deleted by admin', NULL, '2024-03-15 06:21:38', '2024-03-15 06:21:38'),
(24, 'Admin Deleted Blog', 'Blog titled \"Explore 11 Pre Wedding Shoot Locations in Ludhiana\" was deleted by admin', NULL, '2024-03-15 06:36:43', '2024-03-15 06:36:43'),
(25, 'Admin Created Blog', 'Blog titled \"ccbwkklh\" was created by admin', NULL, '2024-03-15 06:38:16', '2024-03-15 06:38:16'),
(26, 'Admin Deleted Blog', 'Blog titled \"ccbwkklh\" was deleted by admin', NULL, '2024-03-15 06:38:29', '2024-03-15 06:38:29'),
(27, 'Admin updated blog category', 'Blog category titled \"Luxury Villa\" was updated by admin', NULL, '2024-03-15 10:57:25', '2024-03-15 10:57:25'),
(28, 'Admin updated blog category', 'Blog category titled \"Luxury Villas\" was updated by admin', NULL, '2024-03-15 10:57:33', '2024-03-15 10:57:33'),
(29, 'Admin created blog category', 'Blog category titled \"Flats\" was created by admin', NULL, '2024-03-15 10:58:02', '2024-03-15 10:58:02'),
(30, 'Admin created blog category', 'Blog category titled \"apartment\" was created by admin', NULL, '2024-03-15 11:18:56', '2024-03-15 11:18:56'),
(31, 'Admin created blog category', 'Blog category titled \"3bhk-furnished-flats\" was created by admin', NULL, '2024-03-15 11:19:29', '2024-03-15 11:19:29'),
(32, 'Admin created property category', 'Property category titled \"luxury-villa\" was created by admin', NULL, '2024-03-15 11:21:46', '2024-03-15 11:21:46'),
(33, 'Admin created property category', 'Property category titled \"dfsfsfsd-dfsdfsdf-dfsfsdfdf\" was created by admin', NULL, '2024-03-15 11:57:05', '2024-03-15 11:57:05'),
(34, 'Admin created property category', 'Property category titled \"gfgfdg-fdgfg-fgfdg-fd-fgfdgfdg\" was created by admin', NULL, '2024-03-15 11:57:15', '2024-03-15 11:57:15'),
(35, 'Admin Deleted Property category', 'Property category titled \"gfgfdg fdgfg fgfdg fd fgfdgfdg\" was deleted by admin', NULL, '2024-03-15 12:03:47', '2024-03-15 12:03:47'),
(36, 'Admin Deleted Property category', 'Property category titled \"dfsfsfsd dfsdfsdf dfsfsdfdf\" was deleted by admin', NULL, '2024-03-15 12:04:02', '2024-03-15 12:04:02'),
(37, 'Admin created property category', 'Property category titled \"dfsfsfsd-dfsdfsdf-dfsfsdfdf\" was created by admin', NULL, '2024-03-15 12:04:34', '2024-03-15 12:04:34'),
(38, 'Admin Deleted Property category', 'Property category titled \"dfsfsfsd dfsdfsdf dfsfsdfdf\" was deleted by admin', NULL, '2024-03-15 12:04:56', '2024-03-15 12:04:56'),
(39, 'Admin updated property category', 'Blog property titled \"3BHK Furnished Flats sss\" was updated by admin', NULL, '2024-03-15 12:26:38', '2024-03-15 12:26:38'),
(40, 'Admin updated property category', 'Blog property titled \"3BHK Furnished Flats\" was updated by admin', NULL, '2024-03-15 12:27:00', '2024-03-15 12:27:00'),
(41, 'Admin updated property category', 'Blog property titled \"Luxury Villa aaaaa\" was updated by admin', NULL, '2024-03-15 12:27:13', '2024-03-15 12:27:13'),
(42, 'Admin updated property category', 'Blog property titled \"Luxury Villa\" was updated by admin', NULL, '2024-03-15 12:27:22', '2024-03-15 12:27:22'),
(43, 'Admin created amenity', 'Amenity titled \"Swiming Pool\" was created by admin', NULL, '2024-03-15 12:41:53', '2024-03-15 12:41:53'),
(44, 'Admin created amenity', 'Amenity titled \"Attached Bathroom\" was created by admin', NULL, '2024-03-15 12:42:19', '2024-03-15 12:42:19'),
(45, 'Admin created amenity', 'Amenity titled \"Furnished Floor\" was created by admin', NULL, '2024-03-15 12:42:43', '2024-03-15 12:42:43'),
(46, 'Admin created amenity', 'Amenity titled \"Double Bed\" was created by admin', NULL, '2024-03-15 12:47:06', '2024-03-15 12:47:06'),
(47, 'Admin created amenity', 'Amenity titled \"fdffdfsdf\" was created by admin', NULL, '2024-03-15 12:47:17', '2024-03-15 12:47:17'),
(48, 'Admin created amenity', 'Amenity titled \"gfdgfdgfdgfdg\" was created by admin', NULL, '2024-03-15 12:47:23', '2024-03-15 12:47:23'),
(49, 'Admin Deleted Amenity', 'Amenity titled \"gfdgfdgfdgfdg\" was deleted by admin', NULL, '2024-03-15 12:50:45', '2024-03-15 12:50:45'),
(50, 'Admin Deleted Amenity', 'Amenity titled \"fdffdfsdf\" was deleted by admin', NULL, '2024-03-15 12:51:11', '2024-03-15 12:51:11'),
(51, 'Admin created amenity', 'Amenity titled \"hjgjhgjgjg\" was created by admin', NULL, '2024-03-15 12:55:54', '2024-03-15 12:55:54'),
(52, 'Admin Deleted Amenity', 'Amenity titled \"hjgjhgjgjg\" was deleted by admin', NULL, '2024-03-15 12:56:03', '2024-03-15 12:56:03'),
(53, 'Admin updated amenity', 'Amenity titled \"Double Bed\" was updated by admin', NULL, '2024-03-15 12:57:23', '2024-03-15 12:57:23'),
(54, 'Admin updated amenity', 'Amenity titled \"Double Bed dddd\" was updated by admin', NULL, '2024-03-15 12:57:37', '2024-03-15 12:57:37'),
(55, 'Admin updated amenity', 'Amenity titled \"Double Bed\" was updated by admin', NULL, '2024-03-15 12:57:54', '2024-03-15 12:57:54'),
(56, 'Admin created amenity', 'Amenity titled \"gfdgfdgfdgfdg\" was created by admin', NULL, '2024-03-15 12:58:12', '2024-03-15 12:58:12'),
(57, 'Admin Deleted Amenity', 'Amenity titled \"gfdgfdgfdgfdg\" was deleted by admin', NULL, '2024-03-15 12:58:29', '2024-03-15 12:58:29'),
(58, 'Admin created amenity', 'Amenity titled \"gfdgfdgfdgfdg\" was created by admin', NULL, '2024-03-15 12:58:46', '2024-03-15 12:58:46'),
(59, 'Admin Deleted Amenity', 'Amenity titled \"gfdgfdgfdgfdg\" was deleted by admin', NULL, '2024-03-15 12:58:59', '2024-03-15 12:58:59'),
(60, 'Admin created location', 'location titled \"Patna City\" was created by admin', NULL, '2024-03-16 01:01:40', '2024-03-16 01:01:40'),
(61, 'Admin created location', 'location titled \"Jalandhar City\" was created by admin', NULL, '2024-03-16 01:02:39', '2024-03-16 01:02:39'),
(62, 'Admin updated location', 'Location titled \"Jalandhar Cantt\" was updated by admin', NULL, '2024-03-16 01:21:59', '2024-03-16 01:21:59'),
(63, 'Admin updated location', 'Location titled \"Rajendra Nagar\" was updated by admin', NULL, '2024-03-16 01:22:39', '2024-03-16 01:22:39'),
(64, 'Admin created location', 'location titled \"hgfhfhfhgfhfg\" was created by admin', NULL, '2024-03-16 01:23:02', '2024-03-16 01:23:02'),
(65, 'Admin created location', 'location titled \"fghhgf hfghfgh bhfh\" was created by admin', NULL, '2024-03-16 01:23:28', '2024-03-16 01:23:28'),
(66, 'Admin Deleted location', 'location titled \"fghhgf hfghfgh bhfh\" was deleted by admin', NULL, '2024-03-16 01:26:28', '2024-03-16 01:26:28'),
(67, 'Admin Deleted location', 'location titled \"hgfhfhfhgfhfg\" was deleted by admin', NULL, '2024-03-16 01:27:08', '2024-03-16 01:27:08'),
(68, 'Admin Created Property', 'Property titled \"ftwvfkqx\" was created by admin', NULL, '2024-03-16 04:42:18', '2024-03-16 04:42:18'),
(69, 'Admin Updated Property', 'Property titled \"XYZ WXYU MNO\" was created by admin', NULL, '2024-03-16 04:42:53', '2024-03-16 04:42:53'),
(70, 'Admin Deleted property', 'property titled \"XYZ WXYU MNO\" was deleted by admin', NULL, '2024-03-16 04:51:24', '2024-03-16 04:51:24'),
(71, 'Admin Created Property', 'Property titled \"dngutuhjvtmbb\" was created by admin', NULL, '2024-03-16 04:52:42', '2024-03-16 04:52:42'),
(72, 'Admin Deleted property', 'property titled \"dngutuhjvtmbb\" was deleted by admin', NULL, '2024-03-16 04:53:03', '2024-03-16 04:53:03'),
(73, 'Admin Created Property', 'Property titled \"Ludhiana Heights\" was created by admin', NULL, '2024-03-16 06:53:38', '2024-03-16 06:53:38'),
(74, 'Admin Edited Blog', 'Blog titled \"2 Bedroom 1024 Sq.Ft. Apartment in New Kitchlu Nagar Ludhiana\" was edited by admin', NULL, '2024-03-16 10:48:41', '2024-03-16 10:48:41'),
(75, 'User Make Enquiry on Website', 'User With Name \"Test Developer\", Email : \"testingyoursite@gmail.com\", Mobile : \"\" submitted by user.', NULL, '2024-03-16 13:10:07', '2024-03-16 13:10:07'),
(76, 'User Make Enquiry on Website', 'User With Name \"Test Developer\", Email : \"testingyoursite@gmail.com\", Mobile : \"\" submitted by user.', NULL, '2024-03-16 13:15:04', '2024-03-16 13:15:04'),
(77, 'User Make Enquiry on Website', 'User With Name \"owdsriryvq\", Email : \"hrlrdkneimsqfy@yahoo.com\", Mobile : \"\" submitted by user.', NULL, '2024-03-16 13:34:55', '2024-03-16 13:34:55'),
(78, 'User Make Enquiry on Website', 'User With Name \"bhhimvhqk\", Email : \"dqeznkkluas@gmail.com\", Mobile : \"\" submitted by user.', NULL, '2024-03-16 13:35:12', '2024-03-16 13:35:12'),
(79, '\"baynlfjtq\" Make Enquiry on Website', 'User With Name \"baynlfjtq\", Email : \"knqvihvilop@yahoo.com\", Mobile : \"\" submitted by user.', NULL, '2024-03-16 13:37:54', '2024-03-16 13:37:54'),
(80, 'Admin Deleted enquiry', 'Enquiry with mail \"knqvihvilop@yahoo.com\" was deleted by admin', NULL, '2024-03-16 13:42:14', '2024-03-16 13:42:14'),
(81, 'Admin Deleted enquiry', 'Enquiry with mail \"dqeznkkluas@gmail.com\" was deleted by admin', NULL, '2024-03-16 13:43:39', '2024-03-16 13:43:39'),
(82, '\"Test Developer\" Make Enquiry on Website', 'User With Name \"Test Developer\", Email : \"testingyoursite@gmail.com\", Mobile : \"\" submitted by user.', NULL, '2024-03-16 13:44:30', '2024-03-16 13:44:30'),
(83, 'Admin Deleted enquiry', 'Enquiry with mail \"testingyoursite@gmail.com\" was deleted by admin', NULL, '2024-03-16 13:44:47', '2024-03-16 13:44:47'),
(84, 'Admin Deleted enquiry', 'Enquiry with mail \"hrlrdkneimsqfy@yahoo.com\" was deleted by admin', NULL, '2024-03-16 13:45:01', '2024-03-16 13:45:01'),
(85, '\"7412589655\" Callback Requested', 'Call Request With Number \"7412589655\" submitted by user.', NULL, '2024-03-16 14:09:12', '2024-03-16 14:09:12'),
(86, '\"7894561230\" Callback Requested', 'Call Request With Number \"7894561230\" submitted by user.', NULL, '2024-03-16 14:14:34', '2024-03-16 14:14:34'),
(87, '\"7412589655\" Callback Requested', 'Call Request With Number \"7412589655\" submitted by user.', NULL, '2024-03-16 14:17:12', '2024-03-16 14:17:12'),
(88, 'Admin Deleted callback', 'callback with mobile number \"7412589655\" was deleted by admin', NULL, '2024-03-16 14:17:40', '2024-03-16 14:17:40'),
(89, 'Admin Deleted callback', 'callback with mobile number \"7894561230\" was deleted by admin', NULL, '2024-03-16 14:18:52', '2024-03-16 14:18:52'),
(90, '\"7412589630\" Callback Requested', 'Call Request With Number \"7412589630\" submitted by user.', NULL, '2024-03-16 14:19:03', '2024-03-16 14:19:03'),
(91, 'Admin Deleted callback', 'callback with mobile number \"7412589630\" was deleted by admin', NULL, '2024-03-16 14:19:14', '2024-03-16 14:19:14'),
(92, '\"Test Developer\" Make Enquiry on Website', 'User With Name \"Test Developer\", Email : \"testingyoursite@gmail.com\", Mobile : \"\" submitted by user.', NULL, '2024-03-16 14:31:55', '2024-03-16 14:31:55'),
(93, 'Unknown Tried to Login !.', 'An Unknown User Tried logged in admin panel with email admin@gmail.com', NULL, '2024-03-17 11:55:30', '2024-03-17 11:55:30'),
(94, 'User Logged In.', 'User logged in admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-17 11:58:36', '2024-03-17 11:58:36'),
(95, 'User Logged In.', 'User logged in admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-17 12:10:10', '2024-03-17 12:10:10'),
(96, 'Unknown Tried to Login !.', 'An Unknown User Tried logged in admin panel with email admin@maavindheshwariflats.com', NULL, '2024-03-17 12:10:36', '2024-03-17 12:10:36'),
(97, 'User Logged In.', 'User logged in admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-17 12:10:45', '2024-03-17 12:10:45'),
(98, 'Admin Created Property', 'Property titled \"bsyurdgwj\" was created by admin', NULL, '2024-03-17 13:28:48', '2024-03-17 13:28:48'),
(99, 'Admin Created Property', 'Property titled \"Ashiana Flats\" was created by admin', NULL, '2024-03-17 13:30:36', '2024-03-17 13:30:36'),
(100, 'User Logged In.', 'User logged in admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-17 13:48:13', '2024-03-17 13:48:13'),
(101, 'Unknown Tried to Login !.', 'An Unknown User Tried logged in admin panel with email admin@maavindheshwariflats.com', NULL, '2024-03-17 14:06:23', '2024-03-17 14:06:23'),
(102, 'User Logged In.', 'User logged in admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-17 14:06:33', '2024-03-17 14:06:33'),
(103, 'User Logged In.', 'User logged in admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-17 14:07:15', '2024-03-17 14:07:15'),
(104, '1- Changed Password.', 'User changed the password of admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-17 14:10:39', '2024-03-17 14:10:39'),
(105, 'Unknown Tried to Login !.', 'An Unknown User Tried logged in admin panel with email admin@maavindheshwariflats.com', NULL, '2024-03-17 14:11:01', '2024-03-17 14:11:01'),
(106, 'User Logged In.', 'User logged in admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-17 14:11:15', '2024-03-17 14:11:15'),
(107, 'Admin created blog category', 'Blog category titled \"Test Category\" was created by admin', NULL, '2024-03-17 14:25:16', '2024-03-17 14:25:16'),
(108, '\"7412589655\" Callback Requested', 'Call Request With Number \"7412589655\" submitted by user.', NULL, '2024-03-17 14:27:14', '2024-03-17 14:27:14'),
(109, 'Unknown Tried to Login !.', 'An Unknown User Tried logged in admin panel with email admin@maavindheshwariflats.com', NULL, '2024-03-18 00:18:30', '2024-03-18 00:18:30'),
(110, 'Unknown Tried to Login !.', 'An Unknown User Tried logged in admin panel with email admin@maavindheshwariflats.com', NULL, '2024-03-18 00:18:37', '2024-03-18 00:18:37'),
(111, 'User Logged In.', 'User logged in admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-18 00:18:45', '2024-03-18 00:18:45'),
(112, 'MVCPL- Changed Password.', 'User changed the password of admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-18 00:20:47', '2024-03-18 00:20:47'),
(113, 'User Logged In.', 'User logged in admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-18 00:21:01', '2024-03-18 00:21:01'),
(114, 'Admin Deleted property', 'property titled \"Ashiana Flats\" was deleted by admin', NULL, '2024-03-18 00:23:17', '2024-03-18 00:23:17'),
(115, 'Admin Deleted property', 'property titled \"bsyurdgwj\" was deleted by admin', NULL, '2024-03-18 00:23:27', '2024-03-18 00:23:27'),
(116, 'Admin Deleted property', 'property titled \"Ludhiana Heights\" was deleted by admin', NULL, '2024-03-18 00:23:34', '2024-03-18 00:23:34'),
(117, 'Admin Deleted property', 'property titled \"Silver Galaxy Apartments\" was deleted by admin', NULL, '2024-03-18 00:23:43', '2024-03-18 00:23:43'),
(118, 'Admin created property category', 'Property category titled \"2BHK Fursnished Flats\" was created by admin', NULL, '2024-03-18 00:32:20', '2024-03-18 00:32:20'),
(119, 'Admin updated property category', 'Blog property titled \"2BHK Furnished Flats\" was updated by admin', NULL, '2024-03-18 00:32:33', '2024-03-18 00:32:33'),
(120, 'Admin created property category', 'Property category titled \"Resort\" was created by admin', NULL, '2024-03-18 00:33:10', '2024-03-18 00:33:10'),
(121, 'Admin updated property category', 'Blog property titled \"2BHK Flats\" was updated by admin', NULL, '2024-03-18 00:33:39', '2024-03-18 00:33:39'),
(122, 'Admin updated property category', 'Blog property titled \"3BHK Flats\" was updated by admin', NULL, '2024-03-18 00:33:54', '2024-03-18 00:33:54'),
(123, 'Admin Deleted Blog', 'Blog titled \"2 Bedroom 1024 Sq.Ft. Apartment in New Kitchlu Nagar Ludhiana\" was deleted by admin', NULL, '2024-03-18 00:34:33', '2024-03-18 00:34:33'),
(124, 'Admin Deleted Blog', 'Blog titled \"Why sport scores are killing you\" was deleted by admin', NULL, '2024-03-18 00:34:42', '2024-03-18 00:34:42'),
(125, 'Admin created amenity', 'Amenity titled \"On-site laundry facilities\" was created by admin', NULL, '2024-03-18 00:37:23', '2024-03-18 00:37:23'),
(126, 'Admin created amenity', 'Amenity titled \"Restaurants or grocery stores\" was created by admin', NULL, '2024-03-18 00:37:32', '2024-03-18 00:37:32'),
(127, 'Admin created amenity', 'Amenity titled \"Covered parking\" was created by admin', NULL, '2024-03-18 00:37:44', '2024-03-18 00:37:44'),
(128, 'Admin created amenity', 'Amenity titled \"Controlled entry\" was created by admin', NULL, '2024-03-18 00:37:54', '2024-03-18 00:37:54'),
(129, 'Admin created amenity', 'Amenity titled \"Secure parking\" was created by admin', NULL, '2024-03-18 00:38:03', '2024-03-18 00:38:03'),
(130, 'Admin created amenity', 'Amenity titled \"Security cameras\" was created by admin', NULL, '2024-03-18 00:38:10', '2024-03-18 00:38:10'),
(131, 'Admin created amenity', 'Amenity titled \"Smart locks\" was created by admin', NULL, '2024-03-18 00:38:20', '2024-03-18 00:38:20'),
(132, 'Admin created amenity', 'Amenity titled \"Online rent payment\" was created by admin', NULL, '2024-03-18 00:38:30', '2024-03-18 00:38:30'),
(133, 'Admin created amenity', 'Amenity titled \"Public Garden\" was created by admin', NULL, '2024-03-18 00:38:45', '2024-03-18 00:38:45'),
(134, 'Admin created amenity', 'Amenity titled \"Pet Garden\" was created by admin', NULL, '2024-03-18 00:38:56', '2024-03-18 00:38:56'),
(135, 'Admin created location', 'location titled \"Patna City\" was created by admin', NULL, '2024-03-18 00:42:15', '2024-03-18 00:42:15'),
(136, 'Admin Deleted location', 'location titled \"Jalandhar Cantt\" was deleted by admin', NULL, '2024-03-18 00:42:27', '2024-03-18 00:42:27'),
(137, 'Admin Deleted location', 'location titled \"Rajendra Nagar\" was deleted by admin', NULL, '2024-03-18 00:42:36', '2024-03-18 00:42:36'),
(138, 'Admin Created Property', 'Property titled \"Central Park View Residence\" was created by admin', NULL, '2024-03-18 00:45:33', '2024-03-18 00:45:33'),
(139, 'Admin Created Property', 'Property titled \"Sunset Hills Retreat\" was created by admin', NULL, '2024-03-18 00:47:32', '2024-03-18 00:47:32'),
(140, 'Admin Created Blog', 'Blog titled \"Best flats near patna junction\" was created by admin', NULL, '2024-03-18 00:50:13', '2024-03-18 00:50:13'),
(141, 'Admin Created Blog', 'Blog titled \"Best Luxuri Villa in Patna\" was created by admin', NULL, '2024-03-18 00:50:58', '2024-03-18 00:50:58'),
(142, 'User Logged In.', 'User logged in admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-18 01:25:59', '2024-03-18 01:25:59'),
(143, '\"Ramesh Kumar\" Make Enquiry on Website', 'User With Name \"Ramesh Kumar\", Email : \"rk@gmail.com\", Mobile : \"\" submitted by user.', NULL, '2024-03-18 01:33:56', '2024-03-18 01:33:56'),
(144, 'Admin Deleted enquiry', 'Enquiry with mail \"testingyoursite@gmail.com\" was deleted by admin', NULL, '2024-03-18 01:34:57', '2024-03-18 01:34:57'),
(145, '\"7412589630\" Callback Requested', 'Call Request With Number \"7412589630\" submitted by user.', NULL, '2024-03-18 01:37:53', '2024-03-18 01:37:53'),
(146, 'Admin updated blog category', 'Blog category titled \"New Category\" was updated by admin', NULL, '2024-03-18 01:41:27', '2024-03-18 01:41:27'),
(147, 'Admin created location', 'location titled \"Rajendra Nagar\" was created by admin', NULL, '2024-03-18 01:46:40', '2024-03-18 01:46:40'),
(148, 'Admin Created Property', 'Property titled \"Harbour View Oasis\" was created by admin', NULL, '2024-03-18 01:53:37', '2024-03-18 01:53:37'),
(149, 'User Logged In.', 'User logged in admin panel with email : admin@maavindheshwariflats.com', 1, '2024-03-18 02:09:00', '2024-03-18 02:09:00'),
(150, 'Admin Updated Property', 'Property titled \"Harbour View Oasis\" was created by admin', NULL, '2024-03-18 02:37:20', '2024-03-18 02:37:20'),
(151, 'Admin Updated Property', 'Property titled \"Harbour View Oasis\" was created by admin', NULL, '2024-03-18 02:39:32', '2024-03-18 02:39:32'),
(152, 'Admin Updated Property', 'Property titled \"Harbour View Oasis\" was created by admin', NULL, '2024-03-18 02:45:48', '2024-03-18 02:45:48');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_14_140401_create_blogs_table', 1),
(6, '2024_03_14_140541_create_blog_categories_table', 1),
(7, '2024_03_14_140601_create_properties_table', 1),
(8, '2024_03_14_140619_create_property_categories_table', 1),
(9, '2024_03_14_140715_create_amenities_table', 1),
(10, '2024_03_14_140747_create_galleries_table', 1),
(11, '2024_03_14_140823_create_enquiries_table', 1),
(12, '2024_03_14_140845_create_callbacks_table', 1),
(13, '2024_03_14_140902_create_notifications_table', 1),
(14, '2024_03_14_143127_create_logs_table', 1),
(15, '2024_03_16_061022_create_locations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_category` int(11) NOT NULL,
  `property_location` int(10) NOT NULL,
  `property_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_amenities` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_bedrooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_bathrooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_garages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_plot_size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_map_url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_mobile_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_seo_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_category`, `property_location`, `property_name`, `property_amenities`, `property_img`, `property_desc`, `property_bedrooms`, `property_bathrooms`, `property_area`, `property_garages`, `property_year`, `property_plot_size`, `property_map_url`, `property_address`, `property_mobile_num`, `property_value`, `property_seo_title`, `property_seo_desc`, `property_slug`, `status`, `created_at`, `updated_at`) VALUES
(7, 7, 5, 'Central Park View Residence', '[\"Pet Garden\",\"Public Garden\",\"Smart locks\",\"Security cameras\"]', '[\"65f7dc05ad44c.jpg\",\"65f7dc05ad74f.jpg\",\"65f7dc05ad8d7.jpg\",\"65f7dc05ada6e.jpg\"]', '<p>A luxurious apartment nestled in the heart of New York City with breathtaking views of Central Park. This residence offers top-notch amenities including a fully-equipped gym, sparkling swimming pool, and dedicated concierge service. Experience the epitome of urban living at Central Park View Residence.</p>', '2', '2', '199', '0', '2024', '200', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115132.86724301499!2d85.06064040360741!3d25.608169163529897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f29937c52d4f05%3A0x831a0e05f607b270!2sPatna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1710742475038!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '107 Frazwer Road Near Rajive Nagar Chowk', '7696998810', '4500000', 'Central Park View Residence', 'Central Park View Residence', 'central-park-view-residence', 0, '2024-03-18 00:45:33', '2024-03-18 00:45:33'),
(8, 3, 5, 'Sunset Hills Retreat', '[\"Pet Garden\",\"Controlled entry\",\"Covered parking\",\"Restaurants or grocery stores\",\"On-site laundry facilities\",\"Double Bed\",\"Furnished Floor\",\"Attached Bathroom\"]', '[\"65f7dc7c29560.jpg\",\"65f7dc7c29765.jpg\",\"65f7dc7c298f1.jpg\"]', '<p>Discover serenity at Sunset Hills Retreat, a charming house located in the scenic hills of Los Angeles. This property boasts a spacious yard perfect for outdoor gatherings, a modern kitchen ideal for culinary enthusiasts, and a cozy home theater for movie nights under the stars.</p>', '3', '2', '150', '1', '2023', '199', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115132.86724301499!2d85.06064040360741!3d25.608169163529897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f29937c52d4f05%3A0x831a0e05f607b270!2sPatna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1710742475038!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '07 Frazwer Road Near Rajive Nagar Chowk', '7696998855', '7800000', 'Sunset Hills Retreat', 'Sunset Hills Retreat', 'sunset-hills-retreat', 0, '2024-03-18 00:47:32', '2024-03-18 00:47:32'),
(9, 7, 6, 'Harbour View Oasis', '[\"Pet Garden\",\"Public Garden\",\"Security cameras\"]', '[\"65f7f834556ed.jpg\",\"65f7f83455a0e.jpg\",\"65f7f83455cfc.jpg\"]', '<p>Rooftop Pool, Private Elevator, Smart Home Technology Property Description: Indulge in luxury at Harbour View Oasis, an exquisite penthouse overlooking Sydney\'s stunning harbor. This residence features a rooftop pool with panoramic views, a private elevator for exclusive access, and state-of-the-art smart home technology for modern living at its best.</p>', '2', '2', '250', '1', '2021', '200', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3444.071166514332!2d78.05381122458178!3d30.32049350544067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929b7077923ad%3A0x490c11d246919e05!2sWindlass%20Residency%2C%20Curzon%20Rd%2C%20Dalanwala%2C%20Dehradun%2C%20Uttarakhand%20248001!5e0!3m2!1sen!2sin!4v1710746503744!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Curzon Rd, Dalanwala, Dehradun, Uttarakhand 248001', '7894561230', '5500000', 'Harbour View Oasis - Created by Sunny', 'Harbour View Oasis', 'harbour-view-oasis', 0, '2024-03-18 01:53:37', '2024-03-18 02:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `property_categories`
--

CREATE TABLE `property_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_categories`
--

INSERT INTO `property_categories` (`id`, `property_category_name`, `property_category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Apartment', 'apartment', '2024-03-15 11:18:56', '2024-03-15 11:18:56'),
(2, '3BHK Flats', '3bhk-flats', '2024-03-15 11:19:29', '2024-03-18 00:33:54'),
(3, 'Luxury Villa', 'luxury-villa', '2024-03-15 11:21:46', '2024-03-15 12:27:22'),
(7, '2BHK Flats', '2bhk-flats', '2024-03-18 00:32:20', '2024-03-18 00:33:39'),
(8, 'Resort', 'resort', '2024-03-18 00:33:10', '2024-03-18 00:33:10');

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
  `role` int(10) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MVCPL', 'admin@maavindheshwariflats.com', NULL, '$2y$12$k1QvikNMWn.Wa.5msEreAeTJZV0hNNjMMZodHLRpU5zZv7Pz1EiiK', 0, NULL, '2024-03-17 11:57:04', '2024-03-18 00:20:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_blog_slug_unique` (`blog_slug`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_blog_category_slug_unique` (`blog_category_slug`);

--
-- Indexes for table `callbacks`
--
ALTER TABLE `callbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `properties_property_slug_unique` (`property_slug`);

--
-- Indexes for table `property_categories`
--
ALTER TABLE `property_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `property_categories_property_category_slug_unique` (`property_category_slug`);

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
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `callbacks`
--
ALTER TABLE `callbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `property_categories`
--
ALTER TABLE `property_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
