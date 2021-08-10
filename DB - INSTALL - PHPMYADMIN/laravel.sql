-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 06:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses_by_admin`
--

CREATE TABLE `courses_by_admin` (
  `id` int(255) NOT NULL,
  `course_name` text NOT NULL,
  `number_of_tutors` int(255) DEFAULT NULL,
  `number_of_students` int(255) DEFAULT NULL,
  `course_sub_title` text NOT NULL,
  `course_short_escription` text NOT NULL,
  `course_description` text NOT NULL,
  `preview_image` text,
  `course_status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rating` text,
  `course_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_by_admin`
--

INSERT INTO `courses_by_admin` (`id`, `course_name`, `number_of_tutors`, `number_of_students`, `course_sub_title`, `course_short_escription`, `course_description`, `preview_image`, `course_status`, `created_at`, `updated_at`, `rating`, `course_price`) VALUES
(1, 'Fish management', NULL, NULL, 'Lorem', 'Lorem Ipsum', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'bg-title-01.jpg', 'active', '2021-08-08 12:03:51', '2021-08-08 04:26:21', NULL, ''),
(2, 'Animal Production', NULL, NULL, 'Lorem', 'Lorem Ipsum', '<p> 								Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo 								risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi 								leo risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi 								leo risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi 								leo risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi 								leo risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi 								leo risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 							</p>', 'bg-title-02.jpg', 'active', '2021-08-08 05:24:05', '2021-08-08 05:24:05', NULL, ''),
(3, 'Crop Production', NULL, NULL, 'Lorem', 'Lorem Ipsum', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', '544750.jpg', 'active', '2021-08-08 05:29:09', '2021-08-08 05:29:09', NULL, ''),
(4, 'Data Structures', NULL, NULL, 'Lorem', 'Lorem Ipsum', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'analytics-1024x633-min-1.png', 'active', '2021-08-08 05:37:02', '2021-08-08 05:37:02', NULL, ''),
(5, 'Basics To Linguistics Linguistics', NULL, NULL, 'Lorem', 'Lorem Ipsum', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'naweriindustries.jpg', 'active', '2021-08-08 05:49:39', '2021-08-08 05:49:39', NULL, ''),
(6, 'Culture & Tradition', NULL, NULL, 'Lorem', 'Lorem Ipsum Dolor Et...', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'asa.jpg', 'active', '2021-08-08 05:50:41', '2021-08-08 05:50:41', NULL, ''),
(7, 'Digital Security', NULL, NULL, 'Lorem', 'Lorem Ipsum Dolor Et...', 'Overview\r\nCourse Description\r\n<p> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. <br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. <br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. <br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. <br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. <br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. </p>', 'advanced  edu.PNG', 'inactive', '2021-08-09 09:56:12', '2021-08-08 11:13:46', NULL, '8');

-- --------------------------------------------------------

--
-- Table structure for table `course_applications`
--

CREATE TABLE `course_applications` (
  `id` int(255) NOT NULL,
  `course_id` text NOT NULL,
  `tutor_id` text NOT NULL,
  `cv_name` text NOT NULL,
  `identifications` text NOT NULL,
  `application_status` text,
  `user_brief` text NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_applications`
--

INSERT INTO `course_applications` (`id`, `course_id`, `tutor_id`, `cv_name`, `identifications`, `application_status`, `user_brief`, `created_at`, `updated_at`, `message`) VALUES
(1, '7', '5', 'Author.pdf', 'NATIONAL ID REJECTED.PNG', NULL, '<h4 style=\"font-family: Poppins, sans-serif;\">Overview</h4><div class=\"row\"><div class=\"col-md-12 col-lg-12\" style=\"width: 766px;\"><h5 class=\"m-b5\">Course Description</h5>In publishing and graphic design.</div></div>', '2021-08-09 09:25:43', '2021-08-09 09:25:43', NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_07_143208_access_level', 2),
(5, '2021_08_07_143347_user_type', 3),
(6, '2021_08_07_143426_add_paid_to_users_table', 4);

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
-- Table structure for table `tutors_for_courses`
--

CREATE TABLE `tutors_for_courses` (
  `id` int(255) NOT NULL,
  `course_id` text NOT NULL,
  `tutor_id` text NOT NULL,
  `date_enrolled` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_ratings`
--

CREATE TABLE `tutor_ratings` (
  `id` int(255) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_rated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `access_level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `access_level`, `user_type`, `profile_photo`) VALUES
(1, 'Naweri Industries', 'naweriyclinton@gmail.com', NULL, '$2y$10$VhZgGzEy0mEJN/0j7iFHpu5TtHuLgkAkvTQ5kcYiRcN8aQs2GKCgS', NULL, '2021-08-07 07:50:35', '2021-08-08 03:40:54', 'student', 'admin', '217448847_4395057680555137_3366115619447771148_n.jpg'),
(2, 'Larry Page', 'nawerientertainment@gmail.com', NULL, '$2y$10$XAU.L2V6Ic5Rm7xJrHi8.eNOXBPRvKqw/ULFKXYr8uAM1QovZdon6', NULL, '2021-08-07 07:55:56', '2021-08-07 07:55:56', 'tutor', 'ordinary', ''),
(3, 'mathew Aubrey', 'mathews1720@gmail.com', NULL, '$2y$10$qSlCcwkzeLzOGPIEG.zZ1eYnEX37KTcEsRJtF3rz6gaX5HqhwSYUO', NULL, '2021-08-08 07:01:58', '2021-08-08 23:43:51', 'student', 'ordinary', 'chris-henry-lxTJcja_Cv0-unsplash.jpg'),
(4, 'Barry Ogle', 'barry@hotmail.com', NULL, '$2y$10$GiHjSzWTWDcDaFPsNcYfpeM8WZhc3XF3xdRL6Iq0HQv91yiyHmvNq', NULL, '2021-08-08 07:05:49', '2021-08-08 07:05:49', 'student', 'ordinary', NULL),
(5, 'Keiser William', 'keisar@gmail.com', NULL, '$2y$10$7QF.CiYYXKyMZWKqRIx4VO8o/nzGH7Q13hcNzJy6aTj9WwT/KaCa.', NULL, '2021-08-08 07:07:49', '2021-08-08 07:07:49', 'tutor', 'ordinary', NULL),
(6, 'Zana Aubrey', 'zana@naweri.xyz', NULL, '$2y$10$mPG/25vdN5jKEsCheF2WWu5OWL2sYa4.lzK3BxfGyVvQnCG2XCNVK', NULL, '2021-08-08 07:12:39', '2021-08-08 07:13:22', 'tutor', 'ordinary', 'chris-henry-70-dtgGmrJY-unsplash.jpg'),
(7, 'John Doe', 'john@johndoe.com', NULL, '$2y$10$1QsxieYUCICJo9xy5yNcQOdy/I3gYO.2MqoOH/r.UWegR4CP3DYGS', NULL, '2021-08-08 07:15:51', '2021-08-08 07:15:51', 'tutor', 'ordinary', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses_by_admin`
--
ALTER TABLE `courses_by_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_applications`
--
ALTER TABLE `course_applications`
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
-- Indexes for table `tutors_for_courses`
--
ALTER TABLE `tutors_for_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_ratings`
--
ALTER TABLE `tutor_ratings`
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
-- AUTO_INCREMENT for table `courses_by_admin`
--
ALTER TABLE `courses_by_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_applications`
--
ALTER TABLE `course_applications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tutors_for_courses`
--
ALTER TABLE `tutors_for_courses`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor_ratings`
--
ALTER TABLE `tutor_ratings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
