-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 04:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_maheswarien`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wedding_date` date NOT NULL,
  `number_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_wedding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('waiting','down_payment') COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_payment` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `customer`, `location`, `wedding_date`, `number_phone`, `location_wedding`, `status`, `total_payment`, `created_at`, `updated_at`) VALUES
(8, 'melawati', 'indrakila', '2023-01-31', '0856565656', 'indrakila', 'waiting', 200000, '2023-01-25 17:37:13', '2023-01-25 17:40:48'),
(9, 'nurhasanah', 'dawuan', '2023-02-08', '08121288689', 'fitra hotel', 'waiting', 3000000, '2023-01-25 17:38:13', '2023-01-25 17:41:02'),
(10, 'novia', 'majalengka', '2023-03-10', '08126789904', 'majalengka', 'down_payment', 100000, '2023-01-25 17:39:20', '2023-01-25 17:39:20'),
(11, 'hera nurjanah', 'Panyingkiran', '2023-02-14', '08777886790', 'Panyingkiran', 'waiting', 3000000, '2023-01-25 17:40:31', '2023-01-25 17:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`id`, `product_id`, `booking_id`, `created_at`, `updated_at`) VALUES
(12, 6, 8, NULL, NULL),
(13, 7, 9, NULL, NULL),
(14, 6, 10, NULL, NULL),
(15, 7, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_19_053104_create_product_table', 2),
(6, '2022_11_19_054513_create_booking_table', 3),
(7, '2022_11_19_055501_create_booking_detail_table', 3),
(8, '2022_11_19_062228_create_testimoni_table', 4),
(9, '2022_11_20_000000_create_users_table', 5),
(10, '2022_11_20_054513_create_booking_table', 6),
(11, '2022_11_28_054513_create_booking_table', 7),
(12, '2022_11_25_000000_create_users_table', 8),
(13, '2022_12_25_000000_create_users_table', 9),
(14, '2022_12_20_053104_create_product_table', 10),
(15, '2022_12_27_000000_create_users_table', 11),
(16, '2022_12_28_054513_create_booking_table', 12),
(17, '2023_01_18_125240_create_schedules_table', 13),
(18, '2023_01_17_185927_create_events_table', 14),
(19, '2023_01_19_185927_create_events_table', 15),
(20, '2022_01_11_054513_create_booking_table', 16),
(21, '2022_11_28_062228_create_testimoni_table', 17),
(22, '2023_01_22_053104_create_product_table', 18),
(23, '2023_01_22_054513_create_booking_table', 18),
(24, '2023_01_22_055501_create_booking_detail_table', 18),
(25, '2023_01_25_054513_create_booking_table', 19);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `type` enum('package','equipment','additional','entertainment','upacara_adat') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `type`, `description`, `created_at`, `updated_at`) VALUES
(6, 'Legiseu', 200000, 'package', '<ul><li>Banyak</li></ul>', '2023-01-24 06:07:12', '2023-01-24 06:07:12'),
(7, 'Abimana', 3000000, 'package', '<p><b>banyak pokoknya mah</b></p><p>gak dulu skrg mahh</p><p>ok atuhh</p><p>siap</p><p><b>ok</b></p>', '2023-01-24 06:13:23', '2023-01-24 06:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_date` date NOT NULL,
  `massage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `customer_name`, `customer_date`, `massage`, `image`, `created_at`, `updated_at`) VALUES
(2, 'melinda', '2023-01-31', '“Terima Kasih Ya Alloh semua acara berjalan dengan lancar tanpa ada hambatan dan penuh dengan bahagia. Terimakasih juga buat Maheswari Enterprise yang sudah mewujudkan impian pernikahan aku\"”', '1674577721.png', '2023-01-24 09:28:44', '2023-01-25 16:27:10'),
(3, 'Intan Krisdian', '2022-08-29', '\" Gak Nyesel Bnaget Sewa WO maheswari, acara jadi gak sepidan orang-orangnya itu keren-keren dan humble\"', '1674690189.png', '2023-01-25 16:43:11', '2023-01-25 16:43:11'),
(4, 'Nur Rizka', '2022-09-23', '\"cuma mau bilang, kalian hebat!! mapaporit wo, acaraku terhandle dengan epik\"', '1674690470.png', '2023-01-25 16:47:50', '2023-01-25 16:47:50'),
(5, 'Shopia', '2023-01-02', '\"Maheswari the best makasih udah bikin weddingdrem ku terwujud\"', '1674690651.png', '2023-01-25 16:50:52', '2023-01-25 16:50:52'),
(6, 'Lena Agustins', '2022-04-22', '\"sumpah recomended banget wo ini, akang etehnya ganteng dan cantik terus ramah-ramah dan ceria. soal kinerja jangan diragukan lagi!\"', '1674690841.png', '2023-01-25 16:54:02', '2023-01-25 16:55:39');

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
  `role` enum('owner','admin','bendahara') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'maheswari@gmail.com', NULL, '$2y$10$NjsAC0cYHYi3mGyyIEpqruYBKh3VbA.bJFfxZRXnYj.XV4TlWuK/G', 'owner', NULL, '2023-01-13 01:19:52', '2023-01-13 01:19:52'),
(3, 'Rifa Nurfalah', 'mpotmpot37@gmail.com', NULL, '$2y$10$5JtH7twww8NBwE6nUCh3Bezm11VBc5XZ5zo3tC9uSnUUnpXrnEmdS', 'bendahara', NULL, '2023-01-16 08:16:35', '2023-01-16 08:16:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
