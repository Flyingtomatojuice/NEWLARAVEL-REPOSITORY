-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 06:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `file`, `content`, `created_at`, `updated_at`) VALUES
(12, 'Cute couple', 'images/52bdba949576e6bcec5682a4993bfb58.jfif|images/3fb04953d95a94367bb133f862402bce.jpg', 'This cute couple spotted in the philippines.', '2022-08-11 11:17:29', '2022-08-11 11:17:29'),
(13, 'DepEd ‘quick fix’: Supplier must replace laptops if slow!', 'images/794288f252f45d35735a13853e605939.jpeg', 'MANILA, Philippines — Teachers who have received the overpriced but slow laptops that were recently flagged by the Commission on Audit (COA) may get a proper replacement device, according to the Department of Education (DepEd).\r\n\r\nBut this would not happen soon as DepEd would need to first evaluate the claim that the laptops, purchased by the Procurement Service of the Department of Budget and Management (PS-DBM) for P2.3 billion, were indeed slow, DepEd spokesperson Michael Poa said in a press conference on Wednesday.\r\n\r\nRead more: https://newsinfo.inquirer.net/1644622/deped-quick-fix-supplier-must-replace-laptops-if-slow#ixzz7bfUyMqxn\r\nFollow us: @inquirerdotnet on Twitter | inquirerdotnet on Facebook', '2022-08-11 15:04:52', '2022-08-11 15:04:52'),
(14, 'China military ‘completes tasks’ around Taiwan, plans regular patrols', 'images/b7b58836dc941cc4ba33d16dab6e3059.jpeg', 'BEIJING/TAIPEI — China’s military has “completed various tasks” around Taiwan but will conduct regular patrols, it said on Wednesday, potentially signaling an end to days of war games but also that Beijing will keep up its pressure on the island.\r\n\r\nFurious at a visit to Taipei last week by U.S. House of Representatives Speaker Nancy Pelosi, China had extended its largest-ever exercises around the self-ruled island it claims as its own beyond the four days originally scheduled.\r\n\r\n\r\n\r\nRead more: https://newsinfo.inquirer.net/1644835/china-military-completes-tasks-around-taiwan-plans-regular-patrols#ixzz7bfVfZxN1\r\nFollow us: @inquirerdotnet on Twitter | inquirerdotnet on Facebook', '2022-08-11 15:06:35', '2022-08-11 15:06:35'),
(15, 'Technology', 'images/cee8d6b7ce52554fd70354e37bbf44a2.jpg|images/b44afe91b8a427a6be2078cc89bd6f9b.jpg|images/08ad21c6f9da6bdf51ae0b971f43d96d.jpg|images/2d13d901966a8eaa7f9c943eba6a540b.jpg', 'Technology is the result of accumulated knowledge and application of skills, methods, and processes used in industrial production and scientific research. Technology is embedded in the operation of all machines and electronic devices, with or without detailed knowledge of their function, for the intended purpose of an organization. The technologies of society consist of what is known as systems. Systems operate by obtaining an input, altering this input through what is known as a process, and then producing an outcome that achieves the intended purpose of the system.', '2022-08-11 15:08:32', '2022-08-11 15:08:32'),
(16, 'Sample', 'images/60106888f8977b71e1f15db7bc9a88d1.png', 'Sample', '2022-08-12 03:10:09', '2022-08-12 03:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthplace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `user_id`, `profile_pic`, `firstname`, `lastname`, `middlename`, `birthday`, `age`, `birthplace`, `gender`, `email`, `phonenumber`, `address`, `postalcode`, `password`, `agreement`, `created_at`, `updated_at`) VALUES
(13, '2022A00001', 'images/dcacff2565700c8f88f59cf4a16f9dfc.png', 'Siegfried', 'Bajura', 'Sejera', '1999-11-19', '22 years old', 'Antipolo', 'Male', 'siegfried@gmail.com', '09123123', 'Antipolo Citteh', '1870', '$2y$10$aslWcoLz3ZetzP9p8CTViO.9Y6JMraz6daK8d169kr//8Whqm0MYi', 1, '2022-08-14 07:06:19', '2022-08-14 07:07:21'),
(14, '2022A000014', NULL, 'Segfred', 'Bajora', 'Sejera', NULL, NULL, NULL, NULL, 'segfred.bajora.9@gmail.com', NULL, NULL, NULL, '$2y$10$bK7xQzSKGLjlXIW5tQERROelpyRHecAgoxg7dOCvdip27ZpDnd6GO', 1, '2022-08-14 08:04:57', '2022-08-14 08:04:57'),
(15, '2022A000015', NULL, 'Bagong', 'nayon', 'tayo', NULL, NULL, NULL, NULL, 'bagongnayongate1.@gmail.com', NULL, NULL, NULL, '$2y$10$WNKbIaresYfPnBRvsQELO.zgvfy5Mewny3E9yeQEBpFny9F/swrMC', 1, '2022-08-14 08:08:23', '2022-08-14 08:08:23');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_26_214236_create__applicants_table', 1),
(6, '2022_08_01_052435_create_announcement_table', 2),
(7, '2022_08_02_172714_add_role_to_users', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(45, '2022ADMIN2', 'Segfred', 'segfred.bajora.0@gmail.com', NULL, '$2y$10$d.a02LctbEAlQkvoCavDdOPLyPva4E/qW3ROnND/HOQ7fAEBt2Sta', NULL, '2022-08-07 11:08:38', '2022-08-07 11:08:38', 'admin'),
(79, '2022A00001', 'Siegfried Sejera Bajura', 'siegfried@gmail.com', NULL, '$2y$10$tSf64CI.6YhhvnIV/efYLutW/ETMWqKrpGgdZSPJmZ2ba8wWfdAqu', NULL, '2022-08-14 07:06:19', '2022-08-14 07:06:19', 'applicant'),
(80, '2022A000014', 'Segfred Sejera Bajora', 'segfred.bajora.9@gmail.com', NULL, '$2y$10$PrEExMjwb4tSSpXxh9..R.TwqlhQDEKwfuoALarswqYCGRCUqmX5i', NULL, '2022-08-14 08:04:57', '2022-08-14 08:04:57', 'applicant'),
(82, '2022A000015', 'Bagong tayo nayon', 'bagongnayongate1.@gmail.com', NULL, '$2y$10$RQImCpGSzBH2bmlfypBmA.vwjFiWehxIDudbF07iumqbPX.4fmTpy', NULL, '2022-08-14 08:08:23', '2022-08-14 08:08:23', 'applicant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
