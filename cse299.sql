-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2019 at 06:28 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse299`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `thana_id` int(11) NOT NULL,
  `road_no` int(11) NOT NULL,
  `house_no` int(11) NOT NULL,
  `flat_no` int(11) NOT NULL,
  `distance` int(2) NOT NULL,
  `image` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`id`, `user_id`, `district_id`, `thana_id`, `road_no`, `house_no`, `flat_no`, `distance`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 2, 27, 768, 10, '1555232994gettyimages-159087139-612x612.jpg', '2019-04-14 03:09:54', '2019-04-14 03:09:54'),
(3, 4, 2, 4, 7, 34, 2, 6, '1555413866gettyimages-159087139-612x612.jpg', '2019-04-16 05:24:26', '2019-04-16 05:24:26'),
(6, 3, 1, 1, 22, 27, 6, 7, '1556520492gettyimages-159087139-612x612.jpg', '2019-04-29 00:48:12', '2019-04-29 00:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(2, 'Coxes Bazar', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(3, 'Gazipur', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(4, 'Chittagong', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(5, 'Sylhet', '2019-04-15 12:32:51', '2019-04-15 12:32:51'),
(6, 'Barishal', '2019-04-15 12:34:07', '2019-04-15 12:34:07'),
(7, 'Feni', '2019-04-15 13:04:56', '2019-04-15 13:04:56'),
(8, 'পাবনা', '2019-04-16 05:43:08', '2019-04-16 05:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_05_175046_create_profiles_table', 1),
(4, '2019_04_05_180706_create_roles_table', 1),
(5, '2019_04_07_152118_create_districts_table', 1),
(6, '2019_04_07_165636_create_thanas_table', 1),
(7, '2019_04_08_152109_create_apartments_table', 2),
(8, '2019_04_18_143456_create_orders_table', 3),
(9, '2019_04_26_041417_add_apartment_to_thanas_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `host_id` int(11) NOT NULL,
  `apartment_id` int(11) NOT NULL,
  `accepted` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `host_id`, `apartment_id`, `accepted`, `created_at`, `updated_at`) VALUES
(15, 5, 2, 1, 1, '2019-04-20 03:43:50', '2019-04-20 04:40:27'),
(17, 1, 2, 1, 0, '2019-04-20 04:41:57', '2019-04-20 04:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `role_id`, `image`, `phone`, `created_at`, `updated_at`) VALUES
(1, 2, '2', '1555703880user.png', '01913505019', '2019-04-14 02:51:06', '2019-04-19 13:58:00'),
(2, 3, '2', '1555757094circled-user-male-skin-type-1-2.png', '01913606019', '2019-04-16 04:42:28', '2019-04-20 04:44:54'),
(3, 4, '2', '1555413702Xiaomi-Mi-Backpack-Classic-Business-Backpacks-17L-Capacity-Students-Laptop-Bag-Men-Women-Bags-For-15.jpg_640x640.jpg', '01964276697', '2019-04-16 05:21:42', '2019-04-16 05:21:42'),
(4, 5, '1', '1555704036circled-user-male-skin-type-1-2.png', '01680053141', '2019-04-16 05:35:59', '2019-04-19 14:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'User', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(2, 'Host', '2019-04-14 02:48:07', '2019-04-14 02:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE `thanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` int(11) NOT NULL,
  `thana` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanas`
--

INSERT INTO `thanas` (`id`, `district_id`, `thana`, `created_at`, `updated_at`) VALUES
(1, 1, 'Uttara', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(2, 1, 'Banani', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(3, 1, 'Gulshan', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(4, 2, 'Lal Dighi', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(5, 2, 'Kolatoli', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(6, 3, 'Jaydep Pur', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(7, 3, 'Pubail', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(8, 4, 'Nakhal Para', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(9, 4, 'Airport', '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(10, 5, 'Moulobi Bazar', '2019-04-15 12:51:45', '2019-04-15 12:51:45'),
(11, 6, 'Barai', '2019-04-15 12:52:57', '2019-04-15 12:52:57'),
(12, 7, 'Chagol Maria', '2019-04-15 13:05:22', '2019-04-15 13:05:22'),
(13, 1, 'Bashundhara', '2019-04-16 04:45:11', '2019-04-16 04:45:11'),
(14, 2, 'Teknaf', '2019-04-16 05:23:37', '2019-04-16 05:23:37'),
(15, 8, 'আতাইকুলা', '2019-04-16 05:44:03', '2019-04-16 05:44:03'),
(16, 8, 'পাবনা', '2019-04-20 05:01:14', '2019-04-20 05:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `email_verified_at`, `password`, `completed`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Salman Rahman Auvi', 'salman.auvi@gmail.com', 1, NULL, '$2y$10$ZKjQpmbI01Lb4g5mvj4GcOJeYaHHDVxJhoWKXmBA3j//cpIaPnd7.', 1, NULL, '2019-04-14 02:48:07', '2019-04-14 02:48:07'),
(2, 'Mr Rahim', 'rahim@gmail.com', 0, NULL, '$2y$10$W0QWLJWV9xb5Zl8/Hg7Eq.3UlwfjQynLunDdHCw5yKG82LbcJYp.u', 1, NULL, '2019-04-14 02:50:34', '2019-04-14 02:51:06'),
(3, 'Mr Shajib', 'shajib@gmail.com', 0, NULL, '$2y$10$h8h2tsTVnWeSahgvFoaIfeTl2EHsde86qIj3q4ilz6jmhESKqYPMK', 1, NULL, '2019-04-16 04:41:00', '2019-04-16 04:42:28'),
(4, 'Mr sakhawat', 'sakhwat@gmail.com', 0, NULL, '$2y$10$q0OXGm0blqX4TpC3bca7weI/fQQiBMEAoJmXJOBsiYLmpFFIiRJDi', 1, NULL, '2019-04-16 05:20:43', '2019-04-16 05:21:42'),
(5, 'Mr Samiul', 'samiul@gmail.com', 0, NULL, '$2y$10$R6ye0sHVo9Q54i5hV7M9De3mCf0chf1BG709oNM8prjaF4lP2Ep3i', 1, NULL, '2019-04-16 05:35:39', '2019-04-16 05:35:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanas`
--
ALTER TABLE `thanas`
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
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `thanas`
--
ALTER TABLE `thanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
