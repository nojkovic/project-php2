-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 02:17 PM
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
-- Database: `adopt`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_type` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `id_user`, `id_type`, `ip`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '100.43.67.23', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(2, 1, 1, '100.43.67.23', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(3, 1, 2, '100.43.67.23', '2024-03-08 21:43:15', '2024-03-08 21:43:15'),
(4, 1, 5, '100.43.67.23', '2024-03-08 21:43:15', '2024-03-08 21:43:15'),
(5, 2, 4, '100.43.72.200', '2024-03-08 21:43:15', '2024-03-08 21:43:15'),
(6, 2, 5, '100.43.72.200', '2024-03-08 21:43:15', '2024-03-08 21:43:15'),
(7, 2, 1, '100.43.72.200', '2024-03-08 21:43:15', '2024-03-08 21:43:15'),
(8, 1, 1, '127.0.0.1', '2024-03-09 08:02:09', '2024-03-09 08:02:09'),
(9, 1, 2, '127.0.0.1', '2024-03-09 08:26:42', '2024-03-09 08:26:42'),
(10, 1, 1, '127.0.0.1', '2024-03-09 08:27:02', '2024-03-09 08:27:02'),
(11, 1, 3, '127.0.0.1', '2024-03-09 08:30:05', '2024-03-09 08:30:05'),
(12, 1, 2, '127.0.0.1', '2024-03-09 08:56:22', '2024-03-09 08:56:22'),
(13, 1, 1, '127.0.0.1', '2024-03-09 08:57:13', '2024-03-09 08:57:13'),
(14, 1, 2, '127.0.0.1', '2024-03-09 09:02:33', '2024-03-09 09:02:33'),
(15, 1, 1, '127.0.0.1', '2024-03-09 09:12:34', '2024-03-09 09:12:34'),
(16, 1, 4, '127.0.0.1', '2024-03-09 09:16:05', '2024-03-09 09:16:05'),
(17, 1, 5, '127.0.0.1', '2024-03-09 09:18:15', '2024-03-09 09:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Dog', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(2, 'Cat', '2024-03-08 21:43:14', '2024-03-08 21:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Saraa', 'sara@gmail.com', '06359721006', 'Thank you for your cooperation.', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(2, 'User', 'user@gmail.com', '06542108641', 'The team is very friendly and always there to help.', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(3, 'Sara', 'sara@gmail.com', '0655491086', 'Thank you for all.', '2024-03-09 09:11:17', '2024-03-09 09:11:17');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `description`, `year`, `month`, `image`, `id_category`, `created_at`, `updated_at`) VALUES
(1, 'Cat Eli', 'Ellie the cat is white with beautiful yellow fur.She eager for love', 1, 3, '1.jpg', 2, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(2, 'Cat Alf', 'The cat Alf is a dark yellow color, a very calm cat eager to be cuddled and loved.', 0, 5, 'g7.jpg', 2, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(3, 'Dog Aris', 'Dog Aris is a very cuddly dog, full of love and desire for a new home.', 1, 0, 'g2.jpg', 1, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(4, 'Dog Coco', 'The dog Coco is very cuddly, full of love and a very cheerful dog.It will make everyones life better.', 0, 9, 'g5.jpg', 1, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(5, 'Dog Don', 'Don the dog is a very calm and withdrawn dog. He is afraid, but he is friendly when he meets someone.', 1, 5, 'g6.jpg', 1, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(6, 'Dog Aris', 'Dog Aris is a very cuddly dog, full of love and desire for a new home.', 0, 7, 'g2.jpg', 1, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(7, 'Dog Coco', 'The dog Coco is very cuddly, full of love and a very cheerful dog.It will make everyones life better.', 0, 4, 'g5.jpg', 1, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(8, 'Dog Don', 'Don the dog is a very calm and withdrawn dog. He is afraid, but he is friendly when he meets someone.', 0, 3, 'g6.jpg', 1, '2024-03-08 21:43:14', '2024-03-08 21:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu`, `href`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(2, 'About', 'about', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(3, 'Gallery', 'gallery', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(4, 'Contact', 'contact', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(5, 'Reservation', 'reservation', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(6, 'Checkout', 'checkout', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(7, 'CheckoutAll', 'checkoutAll', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(8, 'Admin', 'admin2', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(9, 'Author', 'author', '2024-03-08 21:43:14', '2024-03-08 21:43:14');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_27_141052_create_menus_table', 1),
(6, '2024_02_27_143652_create_roles_table', 1),
(7, '2024_02_27_144129_create_user_ours_table', 1),
(8, '2024_02_28_123044_create_contacts_table', 1),
(9, '2024_02_28_145551_create_newsletters_table', 1),
(10, '2024_02_29_085046_create_categories_table', 1),
(11, '2024_02_29_092047_create_galleries_table', 1),
(12, '2024_03_01_080748_create_our_teams_table', 1),
(13, '2024_03_02_120214_create_reservations_table', 1),
(14, '2024_03_02_121649_create_reservation_lines_table', 1),
(15, '2024_03_07_181524_create_type_of_activities_table', 1),
(16, '2024_03_07_183212_create_activities_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_teams`
--

CREATE TABLE `our_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_teams`
--

INSERT INTO `our_teams` (`id`, `name`, `lastname`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Edvards', 'Doe', 'A serious worker, full of love and care for our pets', 't1.jpg', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(2, 'Sofia', 'Mark', 'Very pleasant and good with pets, pets adore her', 't2.jpg', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(3, 'Michael', 'Amet', 'A big lover of animals, especially dogs. He loves his job', 't3.jpg', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(4, 'Daniel', 'Niary', 'Very sensitive, emotional and attached to pets', 't4.jpg', '2024-03-08 21:43:14', '2024-03-08 21:43:14');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user_ours` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `id_user_ours`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(2, 2, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(3, 1, '2024-03-09 09:16:05', '2024-03-09 09:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_lines`
--

CREATE TABLE `reservation_lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `id_reservation` bigint(20) UNSIGNED NOT NULL,
  `id_gallery` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_lines`
--

INSERT INTO `reservation_lines` (`id`, `date`, `id_reservation`, `id_gallery`, `created_at`, `updated_at`) VALUES
(1, '2024-04-01', 1, 2, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(2, '2024-05-13', 2, 4, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(3, '2024-03-28', 2, 1, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(4, '2024-03-18', 3, 1, '2024-03-09 09:16:05', '2024-03-09 09:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(2, 'User', '2024-03-08 21:43:14', '2024-03-08 21:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_activities`
--

CREATE TABLE `type_of_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_activities`
--

INSERT INTO `type_of_activities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Login', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(2, 'Logout', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(3, 'AddToReservationCart', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(4, 'ReservationCart', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(5, 'Checkout', '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(6, 'RemoveToReservationCart', '2024-03-08 21:43:14', '2024-03-08 21:43:14');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_ours`
--

CREATE TABLE `user_ours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_ours`
--

INSERT INTO `user_ours` (`id`, `name`, `lastname`, `email`, `password`, `active`, `id_role`, `created_at`, `updated_at`) VALUES
(1, 'Sara ', 'Nojkovic', 'sara@gmail.com', '312dc6ec7c900fb9017bf43c6b1f81bb', 1, 1, '2024-03-08 21:43:14', '2024-03-08 21:43:14'),
(2, 'Admin ', 'Administrator', 'admin@gmail.com', '471c259f37a25e187d84be00d626811a', 1, 1, '2024-03-08 21:43:14', '2024-03-08 21:43:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_id_user_foreign` (`id_user`),
  ADD KEY `activities_id_type_foreign` (`id_type`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_id_category_foreign` (`id_category`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_teams`
--
ALTER TABLE `our_teams`
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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_id_user_ours_foreign` (`id_user_ours`);

--
-- Indexes for table `reservation_lines`
--
ALTER TABLE `reservation_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_lines_id_reservation_foreign` (`id_reservation`),
  ADD KEY `reservation_lines_id_gallery_foreign` (`id_gallery`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_of_activities`
--
ALTER TABLE `type_of_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_ours`
--
ALTER TABLE `user_ours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ours_id_role_foreign` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_teams`
--
ALTER TABLE `our_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservation_lines`
--
ALTER TABLE `reservation_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_of_activities`
--
ALTER TABLE `type_of_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_ours`
--
ALTER TABLE `user_ours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_of_activities` (`id`),
  ADD CONSTRAINT `activities_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user_ours` (`id`);

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_id_user_ours_foreign` FOREIGN KEY (`id_user_ours`) REFERENCES `user_ours` (`id`);

--
-- Constraints for table `reservation_lines`
--
ALTER TABLE `reservation_lines`
  ADD CONSTRAINT `reservation_lines_id_gallery_foreign` FOREIGN KEY (`id_gallery`) REFERENCES `galleries` (`id`),
  ADD CONSTRAINT `reservation_lines_id_reservation_foreign` FOREIGN KEY (`id_reservation`) REFERENCES `reservations` (`id`);

--
-- Constraints for table `user_ours`
--
ALTER TABLE `user_ours`
  ADD CONSTRAINT `user_ours_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
