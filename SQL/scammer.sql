-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 10:58 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scammer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin-iSCAM ', 'iscam@iscam.com', '$2y$10$zc4kzEfqBrOmICXkNMjHmu9Pdd/rvzhdISxZLgMd9EDM7tHg7dApm', NULL, '2019-11-03 06:42:59', '2019-11-03 06:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `parent_id`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(36, 3, 29, NULL, 'User Friendly dan sangat membantu', '2019-11-22 10:12:42', '2019-11-22 10:12:42', NULL),
(37, 2, 29, 36, 'Thank you for supporting us.', '2019-11-22 10:13:59', '2019-11-22 10:13:59', NULL),
(40, 6, 29, NULL, 'Easy to Use', '2019-11-24 09:55:56', '2019-11-24 09:55:56', NULL);

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
(3, '2019_10_15_181214_create_reports_table', 2),
(5, '2019_10_27_161436_create_scammers_table', 4),
(6, '2019_10_27_172031_create_scammers_table', 5),
(7, '2019_10_27_175420_create_scammers_table', 6),
(22, '2014_10_12_000000_create_users_table', 7),
(23, '2014_10_12_100000_create_password_resets_table', 7),
(24, '2019_10_15_184040_create_reports_table', 7),
(25, '2019_10_27_180717_create_scammers_table', 7),
(26, '2019_11_02_181205_create_admins_table', 7),
(27, '2019_11_02_185315_create_boss_table', 8),
(28, '2019_11_03_134917_create_admins_table', 9),
(29, '2019_11_07_194218_create_reports_table', 10),
(30, '2019_11_07_201457_add_user_id_to_reports', 11),
(31, '2019_11_07_201538_add_prove_to_reports', 11),
(32, '2019_11_12_211818_create_posts_comments_table', 11),
(33, '2019_11_12_225817_create_posts_comments_table', 12),
(34, '2019_11_13_013852_create_posts_comments_table', 13),
(35, '2019_11_19_202601_create_reportscam_table', 14),
(36, '2019_11_19_232028_create_reportscam_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(29, 'Feedback About Our System', 'Please give your feedback about our system. Thanks', '2019-11-13 14:52:30', '2019-11-13 14:52:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reportscam`
--

CREATE TABLE `reportscam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reportscam`
--

INSERT INTO `reportscam` (`id`, `name`, `phone`, `email`, `bank_name`, `bank_account`, `platform`, `product`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Aw Kah Chuan', '0111679088', 'NO', 'CIMB', '07290041471522', 'Mudah.my', 'Motocycle/Car/Accessories', '1574253850.jpeg', '2019-11-20 04:44:10', '2019-11-20 04:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `scammers`
--

CREATE TABLE `scammers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scammers`
--

INSERT INTO `scammers` (`id`, `name`, `phone`, `email`, `bank_name`, `bank_account`, `platform`, `product`, `created_at`, `updated_at`) VALUES
(1, 'Megat Muhammad Razlan Bin Haji Ramlan', '0126017876', 'NO', 'CIMB', '12260081476524', 'Facebook', 'Mobile&Gadgets', '2019-11-02 10:53:51', '2019-11-02 10:53:51'),
(2, 'Muhammad Ikhtiaruddi', '0182586331', 'NO', 'Maybank', '164258506143', 'Facebook', 'Mobile&Gadgets', '2019-11-02 10:55:18', '2019-11-02 10:55:18'),
(3, 'Mohd Fazerin Bin Kumar', '01116892800', 'NO', 'Bank Rakyat', '220871148013', 'Mudah.my', 'Motocycle/Car/Accessories', '2019-11-03 09:04:37', '2019-11-03 09:04:37'),
(4, 'Zuhair Ahmad', '0149457115', 'NO', 'Maybank', '152068672487', 'Facebook', 'Motocycle/Car/Accessories', '2019-11-03 09:05:47', '2019-11-03 09:05:47'),
(5, 'Zuhair Ahmad', '0194194141', 'NO', 'Maybank', '152068672487', 'Facebook', 'Motocycle/Car/Accessories', '2019-11-03 09:06:20', '2019-11-03 09:06:20'),
(6, 'Mohd Fakhri Mat Ghani', '01119431595', 'NO', 'Maybank', '153083259609', 'Mudah.my', 'Mobile&Gadgets', '2019-11-03 09:07:21', '2019-11-03 09:07:21'),
(7, 'Mohd Shazmie Bin Norsharin', '0129704120', 'NO', 'Hong Leong', '19000011090', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:08:12', '2019-11-03 09:08:12'),
(8, 'Mohd Hafiz Bin Alwaludin', '01111909956', 'NO', 'Maybank', '162405088285', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:09:15', '2019-11-03 09:09:15'),
(9, 'Murugan Nair', '0163946465', 'NO', 'CIMB', '05080097499526', 'Mudah.my', 'Mobile&Gadgets', '2019-11-03 09:11:31', '2019-11-03 09:11:31'),
(10, 'Diyana', '0126776484', 'NO', 'Maybank', '154101017069', 'Facebook', 'Clothing', '2019-11-03 09:13:16', '2019-11-03 09:13:16'),
(11, 'Nur Farah Binti Ramli', '0126330119', 'NO', 'RHB', '11241500166519', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:14:23', '2019-11-03 09:14:23'),
(12, 'Chin Su Ling', '01126413015', 'minion_s91@yahoo.com', 'Maybank', '880612235686', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:15:34', '2019-11-03 09:15:34'),
(13, 'Li Zhia Jun', '0195832452', 'NO', 'Maybank', '112308078737', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:17:21', '2019-11-03 09:17:21'),
(14, 'Lee Chi Soon', '0195832452', 'NO', 'Maybank', '112308078737', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:17:51', '2019-11-03 09:17:51'),
(15, 'Iskandar Shabini Bin Zabidi Muhammad Amir Asyraf', '0134843239', 'kandaqpoyo@yahoo.com', 'Maybank', '158305376515', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:20:27', '2019-11-03 09:20:27'),
(16, 'Iskandar Shabini Bin Zabidi Muhammad Amir Asyraf', '0185744389', 'kandaqpoyo@yahoo.com', 'Maybank', '158305376515', 'Facebook', 'Cosmetic/HealthCare', '2019-11-03 09:20:59', '2019-11-03 09:20:59'),
(17, 'Muhammad Izzat Bin Mad Saad', '0163055351', 'NO', 'CIMB', '12189999721208', 'Facebook', 'Clothing', '2019-11-03 09:22:54', '2019-11-03 09:22:54'),
(18, 'Muhammad Izzat Bin Mad Saad', '0137556193', 'NO', 'Maybank', '162115948208', 'Facebook', 'Clothing', '2019-11-03 09:23:55', '2019-11-03 09:23:55'),
(19, 'Mohamad Fariq Bin Abang', '0107946979', 'NO', 'CIMB', '11110026689527', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:25:38', '2019-11-03 09:25:38'),
(20, 'Kairul Izlan', '0199564521', 'khairullah@tnb.com.my', 'Maybank', '152050332338', 'Mudah.my', 'Services', '2019-11-03 09:27:22', '2019-11-03 09:27:22'),
(21, 'Stell Edora Ng Su Fatt', '0135595794', 'NO', 'CIMB', '14710001909202', 'Facebook', 'Jewellery/Gold', '2019-11-03 09:33:21', '2019-11-03 09:33:21'),
(22, 'Nur Asyikin Bin Razali', '01740410009', 'NO', 'Maybank', '157139795048', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:37:52', '2019-11-03 09:37:52'),
(23, 'Nur Asyikin Bin Razali', '0175111080', 'NO', 'Maybank', '157139795048', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:38:55', '2019-11-03 09:38:55'),
(24, 'Kamarulzaman Bin Abd Rahim', '0133563089', 'NO', 'Maybank', '163028773403', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:41:08', '2019-11-03 09:41:08'),
(25, 'Sajid Ali', '0105438156', 'NO', 'Giro', '1013429000119134', 'Mudah.my', 'Mobile&Gadgets', '2019-11-03 09:42:37', '2019-11-03 09:42:37'),
(26, 'Sajid Ali', '0105438156', 'NO', 'Giro', '1013429000119134', 'Mudah.my', 'Mobile&Gadgets', '2019-11-03 09:42:37', '2019-11-03 09:42:37'),
(27, 'Fitrah Binti Abdullah', '01119587633', 'NO', 'CIMB', '12030415693526', 'Facebook', 'Jewellery/Gold', '2019-11-03 09:44:19', '2019-11-03 09:44:19'),
(28, 'Muhamad Hafisul Izam', '0127207429', 'NO', 'Giro', '0114441000023388', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:45:22', '2019-11-03 09:45:22'),
(29, 'Muhamad Hafisul Izam', '01127790915', 'NO', 'Giro', '0114441000023388', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:45:58', '2019-11-03 09:45:58'),
(30, 'Muhammad Nazirul Bin Jailani', '0173618713', 'NO', 'CIMB', '14660012288525', 'Facebook', 'Mobile&Gadgets', '2019-11-03 09:47:21', '2019-11-03 09:47:21'),
(31, 'Sharin Nawawi Bin Ahmad', '0197906260', 'NO', 'Maybank', '164128581427', 'Facebook', 'Cosmetic/HealthCare', '2019-11-03 09:49:20', '2019-11-03 09:49:20'),
(32, 'Sharin Nawawi Bin Ahmad', '0197906260', 'NO', 'CIMB', '14360078704523', 'Facebook', 'Cosmetic/HealthCare', '2019-11-03 09:49:55', '2019-11-03 09:49:55'),
(33, 'Mohamad Radzihan Bin Rolly', '0103941033', 'NO', 'CIMB', '06010762150520', 'Mudah.my', 'Mobile&Gadgets', '2019-11-07 14:40:14', '2019-11-07 14:40:14'),
(34, 'Mohd Muslim Bin Ismail', '0116395639', 'NO', 'Maybank', '156011997713', 'Mudah.my', 'Mobile&Gadgets', '2019-11-07 14:42:30', '2019-11-07 14:42:30'),
(35, 'Mohd Idris Bin Mohd Nasir', '0122151196', 'NO', 'Maybank', '162441017484', 'Mudah.my', 'Mobile&Gadgets', '2019-11-07 15:12:29', '2019-11-07 15:12:29'),
(36, 'Nurasyikin Binti Yaacob', '0174861080', 'NO', 'CIMB', '02040006115203', 'Facebook', 'Cosmetic/HealthCare', '2019-11-07 15:55:44', '2019-11-07 15:55:44'),
(37, 'Siti Nuraishah Binti Zainudin', '0127899506', 'NO', 'Maybank', '151593114070', 'Facebook', 'Baby Product/Toys', '2019-11-07 16:04:04', '2019-11-07 16:04:04'),
(38, 'Muhammad Amir', '0133443118', 'NO', 'Maybank', '151204168142', 'Mudah.my', 'Motocycle/Car/Accessories', '2019-11-07 16:07:00', '2019-11-07 16:07:00'),
(39, 'Nurul Huda Binti Abd Wahab', '0173901790', 'NO', 'CIMB', '12100018694526', 'Facebook', 'Mobile&Gadgets', '2019-11-07 16:09:24', '2019-11-07 16:09:24'),
(40, 'Darussalam Bin Masrun', '01123119727', 'NO', 'Maybank', '162870006964', 'Facebook', 'Baby Product/Toys', '2019-11-07 16:10:28', '2019-11-07 16:10:28'),
(41, 'Siti Zainum Binti Salim', '01116650932', 'NO', 'Maybank', '162311801009', 'Facebook', 'Baby Product/Toys', '2019-11-07 16:11:36', '2019-11-07 16:11:36'),
(42, 'Amyzan Syafiqi', '0142617138', 'NO', 'Giro', '051174100033013', 'Facebook', 'Mobile&Gadgets', '2019-11-07 16:12:50', '2019-11-07 16:12:50'),
(43, 'Amyzan Syafiqi', '0142617138', 'NO', 'Maybank', '155015277017', 'Facebook', 'Mobile&Gadgets', '2019-11-07 16:13:51', '2019-11-07 16:13:51'),
(44, 'Tan Kok @on', '0167045955', 'NO', 'Maybank', '101133324375', 'Mudah.my', 'Motocycle/Car/Accessories', '2019-11-07 16:15:02', '2019-11-07 16:15:02'),
(45, 'Wong Foong Ling', '0167045955', 'NO', 'Public Bank', '4628385314', 'Mudah.my', 'Motocycle/Car/Accessories', '2019-11-07 16:15:56', '2019-11-07 16:15:56'),
(46, 'Edward Stephen Anak Anthony', '0138407505', 'NO', 'Maybank', '161239022664', 'Mudah.my', 'Mobile&Gadgets', '2019-11-07 16:17:18', '2019-11-07 16:17:18'),
(47, 'Muhammad Samhan', '0136454103', 'NO', 'Maybank', '162106902222', 'Facebook', 'Clothing', '2019-11-07 16:22:19', '2019-11-07 16:22:19'),
(48, 'Mohammad Fazrin Zuha', '0125715707', 'NO', 'Maybank', '157250054518', 'Facebook', 'Mobile&Gadgets', '2019-11-07 16:27:18', '2019-11-07 16:27:18'),
(49, 'Mohd Fadzlee Bin Sanai', '0148825074', 'NO', 'CIMB', '11110025059523', 'Facebook', 'Mobile&Gadgets', '2019-11-07 16:28:26', '2019-11-07 16:28:26'),
(50, 'Faizal Bin Johari', '0146409910', 'NO', 'Maybank', '153039037627', 'Mudah.my', 'Motocycle/Car/Accessories', '2019-11-07 16:30:06', '2019-11-07 16:30:06'),
(56, 'Najmi hamdie', '6011550072252412', 'muhdnajmiey89@gmail.com', 'Giro', '111111', 'Facebook', 'Baby Product/Toys', '2019-11-20 19:50:35', '2019-11-22 10:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin-iSCAM ', 'iscam@iscam.com', NULL, '$2y$10$Z52r065ok10G7MFD1/yE6.CxyLWgc/2BHS6uV7QQdowZ7pZuBmTwO', NULL, '2019-11-07 14:44:04', '2019-11-07 14:44:04'),
(3, 'Naqib Rostam', 'naqib123@gmail.com', NULL, '$2y$10$UBnwxodlL/aMrsGWN7cv/uPnyJKlIRqG1ouxDfNJ.MjTzNqn8x59S', NULL, '2019-11-12 18:34:31', '2019-11-12 18:34:31'),
(4, 'Najmi', 'muhdnajmiey89@gmail.com', NULL, '$2y$10$Gks8PkxP19bXj.HUlD7sTu5HwKmXZf.c4tKxtoMgiMDjOcWFR7RU.', NULL, '2019-11-13 13:29:20', '2019-11-13 13:29:20'),
(6, 'Yende', 'yende@gmail.com', NULL, '$2y$10$dP3x/5Cpd..UK93iUlnu8eDriXCBZg8gkWXSFhbR0aWBnPwXcu3im', '9zKRyZmJSM7bvfOsBlG7JCaBqSUoeRyiez8bQ9aeNTnSMjz0tkOPoxHUJqrL', '2019-11-24 08:23:04', '2019-11-24 11:39:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportscam`
--
ALTER TABLE `reportscam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scammers`
--
ALTER TABLE `scammers`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reportscam`
--
ALTER TABLE `reportscam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `scammers`
--
ALTER TABLE `scammers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
