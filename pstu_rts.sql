-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 06:34 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pstu_rts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_role` tinyint(4) DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `admin_role`, `photo`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@gmail.com', 'superadmin', 1, 'public/images/admins/1556265063.png', '$2y$10$cW9KVqhUuLOearR9Uhr9yeiUBnxRPJvY3KsjttKr77tKMNZab7Ncm', 1, 'oco48EdqWF3jM5aVlzPM99wJkGhGXC3qYceeoFJs0Vm6MXH6AZogyWuQGdyk', '2019-03-25 01:00:00', '2019-04-26 01:51:05'),
(2, 'Admin', 'admin@gmail.com', 'admin', 2, NULL, '$2y$10$3eUb3dspSaecGyAWo0jOp.r2N83ZUQRYaJMh/058e3apUV5XSmlQq', 1, 'sZE0KVFsqcRuovw6Eu0YQ5VywZRgduSp3CXwxauqRtiDsrVYRl7z8dZWYhxK', '2019-03-25 01:00:00', '2019-04-26 02:15:22'),
(3, 'aaaaaa', 'afzalsabbir.bd@gmail.com', 'aaaaaa', 3, NULL, '$2y$10$P1rFOIiR1hB4IdUDBw/KKenlpz9LK80jAw/IWulwNUXF6hnc90lzu', 1, NULL, '2019-04-25 13:46:07', '2019-04-25 13:46:07'),
(4, 'bbbbbb', 'afzalbd1@gmail.comk', 'bbbbbb', 3, NULL, '$2y$10$wpvJp1iVMxNM6Tkzn9IRwe6CftljT2xXkj13euFuV.mJorisuC17y', 1, NULL, '2019-04-25 13:47:19', '2019-04-25 13:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin_access_infos`
--

CREATE TABLE `admin_access_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin_access_infos`
--

INSERT INTO `admin_access_infos` (`id`, `admin_id`, `ip`, `country`, `device`, `browser`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 21:23:58', '2019-04-13 21:23:58'),
(2, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 21:32:58', '2019-04-13 21:32:58'),
(3, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 09:54:11', '2019-04-13 09:54:11'),
(4, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 09:54:28', '2019-04-13 09:54:28'),
(5, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-13 11:15:57', '2019-04-13 11:15:57'),
(6, 1, '::1', 'US', 'PC', 'Chrome', 1, '2019-04-14 07:02:21', '2019-04-14 07:02:21'),
(7, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-15 12:30:22', '2019-04-15 12:30:22'),
(8, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-16 12:40:57', '2019-04-16 12:40:57'),
(9, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-18 12:56:28', '2019-04-18 12:56:28'),
(10, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 09:40:46', '2019-04-19 09:40:46'),
(11, 1, '127.0.0.1', NULL, 'PC', 'Firefox', 1, '2019-04-19 09:52:12', '2019-04-19 09:52:12'),
(12, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 09:52:53', '2019-04-19 09:52:53'),
(13, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-19 10:10:57', '2019-04-19 10:10:57'),
(14, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-21 13:35:26', '2019-04-21 13:35:26'),
(15, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 11:19:55', '2019-04-23 11:19:55'),
(16, 2, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 12:18:56', '2019-04-23 12:18:56'),
(17, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-23 12:19:59', '2019-04-23 12:19:59'),
(18, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-25 09:33:47', '2019-04-25 09:33:47'),
(19, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-25 11:28:26', '2019-04-25 11:28:26'),
(20, 1, '::1', NULL, 'PC', 'Firefox', 1, '2019-04-25 22:14:32', '2019-04-25 22:14:32'),
(21, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-04-30 05:41:04', '2019-04-30 05:41:04'),
(22, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-06-14 21:44:09', '2019-06-14 21:44:09'),
(23, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-06-16 18:09:28', '2019-06-16 18:09:28'),
(24, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-06-16 18:13:28', '2019-06-16 18:13:28'),
(25, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-06-18 13:23:04', '2019-06-18 13:23:04'),
(26, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-06-18 15:07:24', '2019-06-18 15:07:24'),
(27, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-06-18 15:38:08', '2019-06-18 15:38:08'),
(28, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-06-25 18:35:02', '2019-06-25 18:35:02'),
(29, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-06-25 19:12:12', '2019-06-25 19:12:12'),
(30, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-07 18:35:32', '2019-07-07 18:35:32'),
(31, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-09 05:46:15', '2019-07-09 05:46:15'),
(32, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-15 06:44:45', '2019-07-15 06:44:45'),
(33, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-23 04:04:40', '2019-07-23 04:04:40'),
(34, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-23 06:43:03', '2019-07-23 06:43:03'),
(35, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-23 06:59:42', '2019-07-23 06:59:42'),
(36, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-25 18:03:16', '2019-07-25 18:03:16'),
(37, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-25 19:59:24', '2019-07-25 19:59:24'),
(38, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-29 06:37:36', '2019-07-29 06:37:36'),
(39, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-29 07:30:20', '2019-07-29 07:30:20'),
(40, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-29 17:20:02', '2019-07-29 17:20:02'),
(41, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-30 06:25:47', '2019-07-30 06:25:47'),
(42, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-30 18:00:04', '2019-07-30 18:00:04'),
(43, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-30 20:36:28', '2019-07-30 20:36:28'),
(44, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-07-31 07:56:55', '2019-07-31 07:56:55'),
(45, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-01 16:45:40', '2019-08-01 16:45:40'),
(46, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-02 10:21:50', '2019-08-02 10:21:50'),
(47, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-02 15:44:55', '2019-08-02 15:44:55'),
(48, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-02 21:05:23', '2019-08-02 21:05:23'),
(49, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-02 21:54:32', '2019-08-02 21:54:32'),
(50, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-02 21:56:17', '2019-08-02 21:56:17'),
(51, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-03 07:14:46', '2019-08-03 07:14:46'),
(52, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-03 10:54:47', '2019-08-03 10:54:47'),
(53, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-03 18:25:46', '2019-08-03 18:25:46'),
(54, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-03 19:32:33', '2019-08-03 19:32:33'),
(55, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-04 05:13:57', '2019-08-04 05:13:57'),
(56, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-04 05:26:31', '2019-08-04 05:26:31'),
(57, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-08-04 05:57:05', '2019-08-04 05:57:05'),
(58, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-09-22 05:39:58', '2019-09-22 05:39:58'),
(59, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-10-14 05:32:46', '2019-10-14 05:32:46'),
(60, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-10-14 05:40:50', '2019-10-14 05:40:50'),
(61, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-10-14 14:19:01', '2019-10-14 14:19:01'),
(62, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-10-24 05:40:13', '2019-10-24 05:40:13'),
(63, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-12-18 04:41:18', '2019-12-18 04:41:18'),
(64, 1, '::1', NULL, 'PC', 'Chrome', 1, '2019-12-18 05:00:40', '2019-12-18 05:00:40'),
(65, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-01-04 16:05:42', '2020-01-04 16:05:42'),
(66, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-01-05 05:55:05', '2020-01-05 05:55:05'),
(67, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-01-05 14:02:56', '2020-01-05 14:02:56'),
(68, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-01-05 17:06:02', '2020-01-05 17:06:02'),
(69, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-01-14 05:28:05', '2020-01-14 05:28:05'),
(70, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-03 15:53:20', '2020-02-03 15:53:20'),
(71, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-08 13:39:04', '2020-02-08 13:39:04'),
(72, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-09 14:17:48', '2020-02-09 14:17:48'),
(73, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-10 06:04:35', '2020-02-10 06:04:35'),
(74, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-10 15:26:46', '2020-02-10 15:26:46'),
(75, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-11 06:18:48', '2020-02-11 06:18:48'),
(76, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-11 10:43:44', '2020-02-11 10:43:44'),
(77, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-11 18:59:39', '2020-02-11 18:59:39'),
(78, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-12 05:36:45', '2020-02-12 05:36:45'),
(79, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-12 08:28:26', '2020-02-12 08:28:26'),
(80, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-13 06:25:16', '2020-02-13 06:25:16'),
(81, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-13 07:10:36', '2020-02-13 07:10:36'),
(82, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-22 19:39:58', '2020-02-22 19:39:58'),
(83, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-22 20:04:55', '2020-02-22 20:04:55'),
(84, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-23 06:59:09', '2020-02-23 06:59:09'),
(85, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-25 16:41:40', '2020-02-25 16:41:40'),
(86, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-26 06:04:44', '2020-02-26 06:04:44'),
(87, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-26 14:54:42', '2020-02-26 14:54:42'),
(88, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-27 05:46:38', '2020-02-27 05:46:38'),
(89, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-27 06:15:07', '2020-02-27 06:15:07'),
(90, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-27 06:19:53', '2020-02-27 06:19:53'),
(91, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-29 13:26:19', '2020-02-29 13:26:19'),
(92, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-29 14:08:28', '2020-02-29 14:08:28'),
(93, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-29 16:59:44', '2020-02-29 16:59:44'),
(94, 1, '::1', NULL, 'PC', 'Chrome', 1, '2020-02-29 17:24:25', '2020-02-29 17:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `menu_position` int(10) UNSIGNED DEFAULT NULL COMMENT '0 - Left | 1 - Left In | 2 - Right Top',
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu`, `menu_bn`, `parent_id`, `menu_position`, `icon`, `url`, `route`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'ড্যাশবোর্ড', NULL, 0, 'fa fa-dashboard', '/admin', 'admin.home', 1, 1, '2019-03-24 23:02:05', '2019-03-24 23:02:05'),
(2, 'Menu Permission', 'মেনু পারমিশন', NULL, 0, 'fa fa-diamond', '/admin/role', 'admin.role.index', 900, 1, '2019-03-24 22:44:32', '2019-06-14 23:06:38'),
(3, 'Action', 'একশন', 2, 0, 'fa fa-home', '/admin/role', 'admin.role.index', 1, 1, '2019-04-23 05:27:09', '2019-04-23 05:27:09'),
(4, 'Assign', 'অনুমতি প্রদান', 3, 1, 'fa fa-pencil', '/admin/role/assign', 'admin.role.assign', 1, 1, '2019-03-24 22:48:50', '2019-04-23 05:27:39'),
(5, 'Site Settings', 'সাইট সেটিংস', NULL, 0, 'fa fa-sliders', '/admin/setting', 'admin.setting.index', 500, 1, '2019-04-10 16:30:44', '2019-04-10 20:33:10'),
(6, 'Change Password', 'পাসওয়ার্ড পরিবর্তন', NULL, 2, 'fa fa-cog', '/admin/change-password', 'admin.password.form', 2, 1, '2019-03-24 22:42:35', '2019-04-23 06:20:29'),
(7, 'Log Activity', 'লগ এক্টিভিটি', NULL, 0, 'fa fa-history', '/admin/log', 'admin.log.index', 950, 1, '2019-03-24 22:46:37', '2019-06-14 23:06:54'),
(23, 'All Admin', 'সকল এডমিন', NULL, 2, 'fa fa-users', '/admin/all-admin', 'admin.all_admin.index', 1, 1, '2019-04-10 20:37:34', '2019-04-23 05:43:40'),
(24, 'Add Admin', 'এডমিন যোগ করুন', 23, 0, 'fa fa-plus', '/admin/all-admin/add', 'admin.all_admin.add', 2, 1, '2019-04-10 20:39:51', '2019-04-10 20:39:51'),
(25, 'Action', 'একশন', 23, 0, 'fa fa-home', '/admin/all-admin', 'admin.all_admin.index', 1, 1, '2019-04-23 06:27:34', '2019-04-23 06:27:34'),
(26, 'Edit', 'এডিট', 25, 1, 'fa fa-pencil', NULL, 'admin.all_admin.edit', 1, 1, '2019-04-10 20:40:57', '2019-04-23 06:28:07'),
(27, 'Delete', 'ডিলিট', 25, 1, 'fa fa-trash', NULL, 'admin.all_admin.delete', 2, 1, '2019-04-10 20:42:59', '2019-04-23 06:28:13'),
(28, 'Backup', 'ব্যাকআপ', NULL, 0, 'fa fa-database', '/admin/backup', 'admin.backup.index', 1000, 1, '2019-04-18 21:49:55', '2019-06-14 23:07:17'),
(29, 'Action', 'কার্যক্রম', 28, 0, 'fa fa-home', '/admin/backup', 'admin.backup.index', 1, 0, '2019-04-18 21:51:23', '2019-04-18 21:54:34'),
(30, 'Download', 'ডাউনলোড', 29, 1, 'fa fa-download', NULL, 'admin.backup.index', 1, 1, '2019-04-18 21:52:24', '2019-04-18 21:52:24'),
(31, 'Delete', 'ডিলিট', 29, 1, 'fa fa-trash', NULL, 'admin.backup.index', 2, 1, '2019-04-18 21:52:58', '2019-04-18 21:52:58'),
(32, 'SMS', 'এসএমএস', NULL, 0, 'fa fa-envelope', NULL, NULL, 499, 1, NULL, '2019-06-14 23:02:09'),
(33, 'Send', 'প্রেরন', 32, 0, 'fa fa-commenting', 'admin/sms/send', 'admin.sms.send', 1, 1, NULL, '2019-06-14 23:00:46'),
(34, 'Custom', 'কাস্টম', 32, 0, 'fa fa-comment-o', 'admin/sms/custom', 'admin.sms.custom', 2, 1, NULL, '2019-06-14 23:01:06'),
(35, 'Report', 'প্রতিবেদন', 32, 0, 'fa fa-indent', 'admin/sms/report', 'admin.sms.report', 3, 1, NULL, '2019-06-14 23:01:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_03_26_200821_create_admins_table', 1),
(2, '2019_03_04_084037_create_menus_table', 1),
(3, '2019_03_05_074453_create_roles_table', 1),
(4, '2019_03_06_090310_create_admin_access_infos_table', 1),
(5, '2019_03_25_140240_create_password_resets_table', 1),
(6, '2019_03_25_140240_create_users_table', 1),
(7, '2019_03_25_140140_create_units_table', 2),
(8, '2019_03_25_140157_create_categories_table', 2),
(9, '2019_03_25_140207_create_sub_categories_table', 2),
(10, '2019_03_25_140231_create_brands_table', 2),
(11, '2019_04_10_152516_create_settings_table', 2),
(12, '2019_06_18_191332_create_projects_table', 3),
(13, '2019_06_18_191342_create_proposals_table', 3),
(14, '2020_01_05_121619_create_technologies_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nabidaman2@gmail.com', '$2y$10$dpi.5BNI/NyKvDjldUC8EO9.ru7bq.ngtb0LS48.xNspyrAJfgQfi', '2020-02-13 06:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` date NOT NULL,
  `duration_date` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_of_fund` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `code`, `description`, `file`, `end_date`, `duration_date`, `user_id`, `designation`, `source_of_fund`, `start_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Innovation of new varieties of fruits', 'rtc-121', 'eeeeeeeeeeeeeeeeeeeeeeee', '1582701339.ppt', '2020-07-25', NULL, 13, 'Professor', 'Administration', '2020-02-28', 9, '2020-02-26 07:15:39', '2020-02-26 16:11:06'),
(3, 'varieties fruits', 'rtc-121', 'aaaaaaaaaaaaaaa', '1582735269.docx', '2020-02-29', NULL, NULL, NULL, 'Administration', '2020-02-13', 9, '2020-02-26 16:41:09', '2020-02-29 13:50:12'),
(4, 'Innovation of new varieties of fruits', 'rtc-121', 'wwwwwwwwwwwwwwww', '1582735969.docx', '2020-02-28', NULL, NULL, NULL, 'Administration', '2020-02-13', 9, '2020-02-26 16:52:49', '2020-02-26 16:54:41'),
(5, 'Innovation of new varieties of fruits', 'rtc-121', 'what', '1582982903.docx', '2020-02-28', NULL, NULL, NULL, 'Administration', '2020-02-20', 9, '2020-02-29 13:28:23', '2020-02-29 13:50:04'),
(6, 'anatomy', 'rtc-121', 'sssssssssssssssssssss', '1582984296.docx', '2020-11-27', NULL, 13, 'Professor', 'Administration', '2020-02-27', 9, '2020-02-29 13:51:36', '2020-02-29 13:56:53'),
(7, 'BBology', 'rtc-121', 'sssssssssssssssssssssssssssssssss', '1582984892.docx', '2020-02-29', NULL, 13, 'Professor', 'Administration', '2020-02-01', 9, '2020-02-29 13:58:13', '2020-02-29 14:08:44'),
(8, 'aqurium', 'PROJECT-01', 'fhudhfdksf', '1582995657.docx', '2020-02-29', NULL, NULL, NULL, 'Administration', '2020-02-07', 9, '2020-02-29 17:00:57', '2020-02-29 17:27:20'),
(9, 'Innovation of new varieties of fruits', 'rtc-121', 'ddddddddddddddddddddddddddddddddd', '1582997152.docx', '2020-03-20', NULL, 16, 'student', 'Administration', '2020-02-21', 9, '2020-02-29 17:25:52', '2020-02-29 17:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `description`, `file`, `project_id`, `user_id`, `designation`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fgfd', '1560870742.docx', 2, 1, NULL, 9, '2019-06-18 15:10:48', '2020-02-29 13:55:13'),
(2, 'hhgghhihkkk', NULL, 2, 2, NULL, 9, '2019-06-25 19:00:01', '2019-07-25 18:45:08'),
(3, 'gfddgf', NULL, 2, 2, NULL, 9, '2019-06-25 19:53:07', '2019-07-25 18:45:13'),
(4, 'jhjhkdfhk', NULL, 7, 2, NULL, 9, '2019-07-23 04:07:46', '2020-02-26 06:05:26'),
(5, 'i am intested about this project', NULL, 8, 2, NULL, 9, '2019-07-23 06:47:20', '2020-02-26 06:06:08'),
(6, 'tanna sohan', NULL, 12, 3, NULL, 9, '2019-07-29 18:08:01', '2019-07-29 18:08:40'),
(7, 'Networking project', NULL, 13, 2, NULL, 9, '2019-08-02 21:03:26', '2020-02-26 06:06:26'),
(8, 'plant disease project', NULL, 9, 2, NULL, 9, '2019-08-02 21:04:55', '2020-02-26 07:26:15'),
(9, 'v', '1564898207.docx', 2, 2, NULL, 9, '2019-08-02 21:16:23', '2020-02-26 07:26:07'),
(10, 'microprocessor project', NULL, 15, 2, NULL, 9, '2019-08-02 21:17:37', '2020-02-29 13:55:19'),
(11, 'i want to do this project', NULL, 16, 4, NULL, 9, '2019-08-03 18:31:50', '2020-02-29 13:55:24'),
(12, 'ytyiggh', NULL, 9, 2, NULL, 9, '2019-10-14 05:36:43', '2020-02-29 13:55:29'),
(13, 'fdgdfh', NULL, 6, 2, NULL, 9, '2019-10-14 14:53:10', '2020-02-29 13:55:35'),
(14, 'dsafds', NULL, 6, 2, 'Professor', 9, '2019-10-14 15:41:34', '2020-02-29 13:55:40'),
(15, 'plant is needed for us', NULL, 9, 2, 'Professor', 9, '2019-10-24 05:43:47', '2020-02-29 13:55:46'),
(16, 'plant', NULL, 9, 2, 'Professor', 9, '2019-12-18 05:07:34', '2020-02-29 13:55:51'),
(17, 'networrk', NULL, 2, 13, 'Professor', 9, '2020-01-05 17:12:08', '2020-02-29 13:55:56'),
(18, 'The most popular form of project network is activity on node (AON) (as shown above), the other one is activity on arrow (AOA).\r\n\r\nThe condition for a valid project network is that it doesn\'t contain any circular references.\r\n\r\nProject dependencies can also be depicted by a predecessor table. Although such a form is very inconvenient for human analysis, project management software often offers such a view for data entry.', NULL, 13, 16, 'student', 9, '2020-02-09 15:38:05', '2020-02-29 13:56:01'),
(19, 'jjhgkjfjd', NULL, 2, 13, 'Professor', 9, '2020-02-11 19:04:17', '2020-02-29 13:56:24'),
(20, 'tttttttttttt', NULL, 25, 16, 'Professor', 9, '2020-02-13 07:14:16', '2020-02-29 13:56:30'),
(21, 'agro', NULL, 22, 13, 'Professor', 9, '2020-02-23 06:58:04', '2020-02-29 13:56:35'),
(22, 'fgasdfasddafasd', NULL, 6, 13, 'Professor', 9, '2020-02-29 13:53:18', '2020-02-29 13:56:40'),
(23, 'eeeeeeeeeeeeeeeeeeeeee', NULL, 7, 13, 'Professor', 9, '2020-02-29 14:02:17', '2020-02-29 14:08:29'),
(24, 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', NULL, 9, 16, 'student', 9, '2020-02-29 17:26:38', '2020-02-29 17:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu` text COLLATE utf8mb4_unicode_ci,
  `sub_menu` text COLLATE utf8mb4_unicode_ci,
  `in_body` text COLLATE utf8mb4_unicode_ci,
  `admin_id` int(10) DEFAULT NULL,
  `role` tinyint(3) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `menu`, `sub_menu`, `in_body`, `admin_id`, `role`, `status`, `created_at`, `updated_at`) VALUES
(9, '[\"32\",\"1\",\"28\",\"2\",\"7\",\"23\",\"5\",\"6\"]', '[\"3\",\"33\",\"35\",\"34\",\"24\",\"25\",\"29\"]', '[\"30\",\"4\",\"31\",\"11\",\"27\",\"16\",\"22\",\"21\",\"17\",\"26\",\"12\"]', 1, 1, 1, '2019-04-25 22:41:31', '2019-06-14 23:04:04'),
(10, '[\"2\",\"7\",\"28\"]', '[\"29\",\"3\"]', '[\"30\",\"4\",\"31\"]', 4, 3, 1, '2019-04-26 00:33:57', '2019-04-26 01:42:30'),
(12, '[\"23\",\"1\",\"6\",\"5\",\"2\",\"28\",\"7\"]', '[\"29\",\"3\",\"25\",\"24\"]', '[\"30\",\"26\",\"31\",\"4\",\"21\",\"17\",\"11\",\"12\",\"16\",\"22\",\"27\"]', 2, 2, 1, '2019-04-26 01:33:19', '2019-06-14 23:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `title_en`, `title_bn`, `email`, `mobile`, `facebook`, `twitter`, `youtube`, `linkedin`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'public/images/settings/logo-1556222447.png', 'public/images/settings/favicon-1556222459.png', 'Demo', 'ডেমো', 'superadmin@Restaurent-Bill.com', '01234567890', 'https://fb.com/Demo', 'twitter', 'youtube', 'linkedin', 'City: Mymensingh\r\nCountry: Bangladesh\r\nState: Mymensingh Division\r\nZipcode: 2200', '1', '2019-04-10 12:00:00', '2019-04-25 14:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `sms_records`
--

CREATE TABLE `sms_records` (
  `id` int(11) NOT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `sms` longtext COLLATE utf8_unicode_ci,
  `sending_date` date DEFAULT NULL,
  `sms_count` tinyint(3) DEFAULT '1',
  `send_by` int(11) DEFAULT NULL,
  `is_send` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sms_records`
--

INSERT INTO `sms_records` (`id`, `mobile`, `sms`, `sending_date`, `sms_count`, `send_by`, `is_send`) VALUES
(1, '01624390079', 'Hi Khairul vai', '2019-04-30', NULL, 1, 1),
(2, '01515255819', 'sgfhgfhg', '2019-04-30', 1, 1, 1),
(3, '01624390079', 'sgfhgfhg', '2019-04-30', 1, 1, 1),
(4, '01969481541', 'sgfhgfhg', '2019-04-30', 1, 1, 1),
(5, '01515255819', 'hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you', '2019-04-30', 2, 1, 1),
(6, '01624390079', 'hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you hey khairul vai, how are you', '2019-04-30', 2, 1, 1),
(7, '01515255819', 'ssds', '2019-04-30', 1, 1, 1),
(8, '01624390079', 'ssds', '2019-04-30', 1, 1, 1),
(9, '01969481541', 'ssds', '2019-04-30', 1, 1, 1),
(10, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(11, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(12, '01624390079', 'd', '2019-04-30', 1, 1, 1),
(13, '01713576627', 'hey', '2019-04-30', 1, 1, 1),
(14, '01969481541', 'hey', '2019-04-30', 1, 1, 1),
(15, '01515255819', 'h', '2019-04-30', 1, 1, 1),
(16, '01969481541', 'h', '2019-04-30', 1, 1, 1),
(17, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(18, '01515255819', 'd', '2019-04-30', 1, 1, 1),
(19, '01515255819', 's', '2019-04-30', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`) VALUES
(1, 'পটুয়াখালী প্রযুক্তি বিশ্ববিদ্যালয়ে বিলুপ্তপ্রায় ‘কাঁটাবহরীর’ নতুন জাত উদ্ভাবন', 'শহুরে জীবনে অপরিচিত হলেও দেশের দক্ষিণাঞ্চলে একটি জনপ্রিয় ফল কাঁটাবহরী বা বঁইচি। গ্রামগঞ্জে সাধারণত ক্ষেতের পাশে ঝোপঝাড়ে বেশি জন্মায় এটি। পাওয়া যায় পাহাড়ের ঢালেও। গাছ ঝোপালো এবং গাছের শাখা কাটাযুক্ত। এ কারণে ফলটি কাটাবহরী নামেও পরিচিত।\r\n\r\nবর্তমানে বন উজাড় হওয়ায় গাছটি বিলুপ্ত প্রজাতির তালিকায়। সাধারণত ফাল্গুন-চৈত্র মাসে ফুল ধরে বঁইচি গাছে। পাঁচ পাপড়িযুক্ত ক্ষুদ্রাকৃতির ফুল। জ্যৈষ্ঠ মাস থেকে ফল পাকতে শুরু করে। কাঁচা ফল গোলাকার সবুজ। পাকলে রক্ত বেগুনি রং পায়। অনেকটা কালো জাম ফলের মতো। গোলাকার আঙ্গুরের মতো বঁইচি খেতে অম্ল ও মিষ্টি স্বাদযুক্ত।\r\n\r\nবৈজ্ঞানিক নাম Flacourtia indica, পরিবার Selicaceae। ইংরেজি নাম Governor\'s Plum। বঁইচি গাছের মূলের রস নিউমোনিয়া এবং পাতার নির্যাস জ্বর, কফ ও ডায়রিয়া নিরাময়ে ব্যবহৃত হয়। পাতা ও মূল অনেকে সাপের কামড়ের প্রতিষেধক হিসেবে ব্যবহার করে। বাকলের অংশ তিলের তেলের সঙ্গে মিশিয়ে বাতের ব্যথা নিরাময়ে মালিশ তৈরি করা হয়। কিন্তু জনপ্রিয় এই ফলটি এখনো বাণিজ্যিকভাবে এর বাজারজাত শুরু হয়নি। প্রচুর পুষ্টি ও ঔষধিগুণ সমৃদ্ধ এই গাছ রক্ষায়ও কোনো  ধরনের উদ্যোগ নেওয়া হয়নি। এই গাছ রক্ষা হয়নি তেমন কোনো  গবেষনাও।\r\n\r\nবঁইচি নিয়ে দেশে ব্যাপক-বিস্তৃত কোন গবেষণা না হলেও পটুয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের উদ্যানতত্ত্ব বিভাগের অধ্যাপক ড. মাহবুব রব্বানী আট বছর ধরে বঁইচি ফল নিয়ে গবেষণা চালাচ্ছেন। সম্প্রতি এটাকে কৃষি মন্ত্রণালয় থেকে অনুমতি দিয়েছে। কৃষি মন্ত্রণালয়ের অধীনে জাতীয় বীজ বোর্ড পিএসটিইউ বঁইচি-১ নামে এই ফলের অনুমোদন দিয়েছে।\r\n\r\nড. মাহবুব কালের কণ্ঠকে বলেন, বর্তমানে বিলুপ্তপ্রায় গুরুত্বপূর্ণ ফল বঁইচি। ফলটি বাংলাদেশের গ্রাম অঞ্চলে প্রাকৃতিকভাবে জন্মে। অবহেলা, অযত্ন এবং নির্বিচার কেটে ফেলার কারণে ফলটি অনেকটা বিলুপ্তির পথে। গবেষণায় দেখা গেছে, এই ফলের পুরুষ ও স্ত্রী- দুই ধরনের গাছ রয়েছে। জোড় কলম এবং শাখা কলমের মাধ্যমে স্ত্রী গাছের বংশবিস্তার করে দুই থেকে তিন বছরের মধ্যে ফল পাওয়া সম্ভব। বাজারে এই ফলের প্রচুর চাহিদা রয়েছে। কারণ এতে আছে ভিটামিন, মিনারেল এবং অ্যান্টিঅক্সিডেন্ট। কৃষি মন্ত্রণালয় থেকে এই ফলের অনুমোদন দিয়েছে, আগামী বছর থেকে এটি আমরা কৃষকের মাঝে বিস্তৃত পরিসরে ছড়িয়ে দিতে পারবো।\r\n\r\nড. মাহবুব জানান, বর্তমানে পটুয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের জার্মপ্লাজম সেন্টারে ১০টি মাতৃগাছ, ৫০টি জোড় কলম এবং ২০০ এর অধিক চারা আছে।\r\n\r\nবঁইচি গবেষনায় জড়িত পিএইচডি শিক্ষার্থী চিত্র রঞ্জন সরকার এবং মাস্টার্সের শিক্ষার্থী সুস্মিতা বড়াল। ড. মাহবুব বলেন, এরইমধ্যে বাহ্যিক বৈশিষ্ট্য, পুষ্পায়ন এবং ফল ধারণের বৈশিষ্ট্যাবলী শনাক্ত সম্পন্ন হয়েছে। এ ছাড়া বিভিন্ন রাসায়নিক উপাদান নির্ণয় করা সম্ভব হয়েছে। বর্তমানে ডিএনএ পর্যায়ে শনাক্তকরণ কাজ চলছে।', NULL, '2020-02-12 08:33:30', '2020-02-12 08:42:59'),
(2, 'পবিপ্রবি শিক্ষার্থীদের অনন্য উদ্ভাবন', 'উদ্যান ফসলের নতুন আটটি জাত উদ্ভাবন করেছে পটুয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয় (পবিপ্রবি)। এই আটটি জাত ইতোমধ্যেই নিবন্ধিত হয়েছে জাতীয় বীজ বোর্ডে। আজ (১৬ সেপ্টেম্বর) কৃষি মন্ত্রণালয়ের অ্যাসিস্ট্যান্ট সিড টেকনোলজিস্ট (সিড উইং) মানিক কর্মকার এ তথ্য নিশ্চিত করেছেন।\r\n\r\nপবিপ্রবি উদ্ভাবিত নতুন জাতগুলো হলো-এক. পিএসটিউ ডেউয়া-১ (বড় আকারের), দুই. পিএসটিউ ডেউয়া-২ (মাঝারি আকারের), তিন. পিএসটিউ বিলাতিগাব-১ (বড় আকারের, নাবি জাত ও বীজহীন), চার. পিএসটিউ বিলাতিগাব-২ (মাঝারি আকারের, নাবি জাত ও বীজহীন), পাঁচ. পিএসটিউ বাতাবিলেবু-১ (আগামজাত, রসালো, লাল বর্ণের), ছয়. পিএসটিউ কামরাঙ্গা-১ (নিয়মিত ফল ধারণকারী বারমাসি জাতের মিষ্টি কামরাঙ্গা), সাত. পিএসটিউ কামরাঙ্গা-২ (নিয়মিত ফল ধারণকারী বারমাসি জাতের মিষ্টি কামরাঙ্গা) এবং আট. পিএসটিউ তেঁতুল-১ (নিয়মিত ফলধারণকারী বারমাসি জাতের মিষ্টি তেঁতুল)।\r\n\r\nবিশ্ববিদ্যালয়ের উদ্যানতত্ত্ব বিভাগের চেয়ারম্যান ড. মাহবুব রব্বানী বলেন, আমরা এই প্রথম দেশের কৃষি খাতে নতুন ৮টি জাত নিবন্ধিত করেছি। আমাদের ল্যাবে আরও কিছু জাত নিয়ে গবেষণা চলছে। আগামী ডিসেম্বরের মধ্যে আশা করি, আরও নতুন কিছু জাত আমরা উদ্ভাবন করতে পাররো।', NULL, '2020-02-12 08:41:16', '2020-02-12 08:41:16'),
(3, 'পবিপ্রবিতে উদ্ভাবিত হলো “পিএসটিইউ ভ্যাজাইনো-স্যারভাইকাল ডিভাইস ”পবিপ্রবিতে উদ্ভাবিত হলো “পিএসটিইউ ভ্যাজাইনো-স্যারভাইকাল ডিভাইস ”', 'সোমবার, ২৮শে অক্টোবর, ২০১৯ইং দুপর ১২টায় এক প্রেস বিজ্ঞপ্তিতে এই ডিভাইস সম্পর্কে বিস্তারিত আলোচনা করেন ডিভাইসের উদ্ভাবক।এসময় আরো উপস্থিত ছিলেন অনুষদীয় ডিন অধ্যাপক ড. মোঃ মামুন -অর- রশিদ, মেডিসিন, সার্জারী এন্ড অবস্টেট্রিক্স বিভাগের চেয়ারম্যান অধ্যাপক ডাঃ মোহাম্মদ আনিসুর রহমান , সহযোগী অধ্যাপক ড. মোহাম্মদ লালমদ্দিন মোল্লা, সহযোগী অধ্যাপক ড. দিব্যেন্দু বিশ্বাস, ডাঃ এস. এম হানিফ, ডাঃ দীপা পাল। উদ্ভাবিত ডিভাইসটির মূল্য ও পার্শ্বপ্রতিক্রিয়া সম্পর্কে ড. অসীত কুমার পাল জানান, “আকৃতি অনুসারে এর প্রস্তুত মূল্য ২০০-৫০০ টাকা এবং উক্ত ডিভাইসটির কোনরূপ পার্শ্বপ্রতিক্রিয়া নেই”।\r\n\r\nউদ্ভাবিত ডিভাইসের প্রস্তুত প্রনালীঃ ডিভাইসটি এস এস (Stainless Steel) পাইপ (১.০০ এমএম) দ্বারা বিশেষ কৌশলে এবং পরিমাপে প্রাণীর প্রজাতি অনুসারে প্রস্তুত করা হয়েছে।\r\n\r\nপরিমাপঃ গরু/মহিষঃ •\r\n\r\nবড় উন্নত জাতঃ পরীক্ষণ পাইপ- দৈর্ঘ্য ১২”× ব্যাস ২” এবং হাতল- ধৈর্য্য ৫” × ব্যাস ১”\r\n\r\n•মধ্যম জাতঃ পরীক্ষণ পাইপ- দৈর্ঘ্য ১০”× ব্যাস ১.৫” এবং হাতল- ধৈর্য্য ৫” × ব্যাস ১”\r\n\r\n•দেশি ছোট জাতঃ পরীক্ষণ পাইপ- দৈর্ঘ্য ৮”× ব্যাস ১” এবং হাতল- ধৈর্য্য ৫” × ব্যাস ১”\r\n\r\nছাগল/ভেড়াঃ\r\n\r\n•বড় উন্নত জাতঃ পরীক্ষণ পাইপ- দৈর্ঘ্য ৬”× ব্যাস ০.৭৫” এবং হাতল- ধৈর্য্য ৫” × ব্যাস.০.৭৫”\r\n\r\n•ছোট দেশি জাতঃপরীক্ষণ পাইপ- দৈর্ঘ্য ৬”× ব্যাস ০.৫” এবং হাতল- ধৈর্য্য ৫” × ব্যাস ০.৫”\r\n\r\nউদ্ভাবিত ডিভাইটির ব্যবহারঃ উক্ত ডিভাইসটি নিম্নোক্ত কাজে ব্যবহার করা যাবে- ১. প্রাণীর সারভিক্স এর বর্হিমুখ (External orifice) দেখতে সহায়তা করবে। ২. স্যারভাইকাল কৃত্রিম প্রজনন এর (Cervix AI) জন্য ব্যবহার করা যাবে। ৩. ভ্যাজাইনাল ও স্যারভাইকাল প্রদাহ দেখতে সহায়তা করবে। ৪. গর্ভবতী প্রাণীর বাচ্চা প্রসবের সময় জরায়ুমুখ খুলছে কি না দেখতে সহায়তা করবে। ৫. কৃত্রিম প্রজনন এর সময় সারভিক্স এর মধ্যে সহজেই কৃত্রিম প্রজনন পাইপ (AI gun) প্রবেশ করানো যাবে। ৬. জরায়ু হতে সংক্রামক দূষিত পদার্থ অপসারণ করতে সহায়তা করবে। ৭. কৃত্রিম প্রজনন টেকনিশিয়ানদের কৃত্রিম প্রজনন করতে সহায়তা করবে।', NULL, '2020-02-12 08:53:00', '2020-02-12 08:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` tinyint(4) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL,
  `upazilla_id` int(10) UNSIGNED DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `username`, `image`, `user_role`, `password`, `country`, `district_id`, `upazilla_id`, `address`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 'demo@gmail.com', '01515255819', 'demo', NULL, 1, '$2y$10$tQVwD5VequDrZsgg5NUaHexmp3fGf.XI7zylpDEqSxf9WJITYiRWO', NULL, NULL, NULL, '', '1', NULL, NULL, NULL),
(2, 'sohan', 'sohan@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$ewyJV.a9Wxu79DBk/Y0IE.XrQ2NA/a83Kx/A3O9q0SeCXADFeHh3C', NULL, NULL, NULL, NULL, '1', NULL, '2019-06-25 18:57:14', '2019-06-25 18:57:14'),
(3, 'tanna', 'tanna@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$d.j4BL6leDTNU/ynXblwNujHbPiVsAZR4EHKwkWkLo7Cf2BogtAle', NULL, NULL, NULL, NULL, '1', NULL, '2019-07-29 18:07:02', '2019-07-29 18:07:02'),
(4, 'Aman', 'aman@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$69ZpvYzT.lSbUyPVt4sC8eFOt7umOFiFHEvjebgv0uZ9e06ApuVPi', NULL, NULL, NULL, NULL, '1', NULL, '2019-08-03 18:31:01', '2019-08-03 18:31:01'),
(13, 'Sohan', 'sohan.cse.pstu@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$PtH5lazCfmQQBrjMJKESTeXeiSM6BVmdvjZ.g/q.567qbWrmXzcba', NULL, NULL, NULL, NULL, '1', 'yEDeXZaePV4M2xAFXFXxijBZo3C1nyLSErjPhmBagkQBvg7odWqssGDA6Ayr', '2020-01-05 16:53:52', '2020-01-05 16:54:07'),
(16, 'tanna', 'nabidaman2@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$hYRS0XWHOzlz4qmFeVABUePWCZcYk0BRnew.XawNGi2oOJQyOh0cm', NULL, NULL, NULL, NULL, '1', 'IHL1KBQdDs4BM5OPz28ohkNudNtAO7pnOk1nLRg6aIu4uGByXum1oDbhMLP5', '2020-02-03 16:06:20', '2020-02-03 16:09:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `admins_email_unique` (`email`) USING BTREE,
  ADD UNIQUE KEY `admins_username_unique` (`username`) USING BTREE;

--
-- Indexes for table `admin_access_infos`
--
ALTER TABLE `admin_access_infos`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `admin_access_infos_admin_id_foreign` (`admin_id`) USING BTREE;

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sms_records`
--
ALTER TABLE `sms_records`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE,
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`) USING BTREE,
  ADD UNIQUE KEY `users_username_unique` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_access_infos`
--
ALTER TABLE `admin_access_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sms_records`
--
ALTER TABLE `sms_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_access_infos`
--
ALTER TABLE `admin_access_infos`
  ADD CONSTRAINT `admin_access_infos_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
