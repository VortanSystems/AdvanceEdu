-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 06:21 PM
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
(1, 'Fish management', NULL, NULL, 'Lorem', 'Lorem Ipsum', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'image_3.jpg', 'active', '2021-08-11 13:43:14', '2021-08-08 04:26:21', NULL, '77'),
(2, 'Information Management', NULL, NULL, 'Lorem', 'Lorem Ipsum', '<p> 								Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo 								risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi 								leo risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi 								leo risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi 								leo risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi 								leo risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 								<br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi 								leo risus, porta ac consectetur ac, vestibulum at eros. 								<br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum 								faucibus dolor auctor. 								<br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 								Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. 							</p>', 'image_9.jpg', 'active', '2021-08-13 16:26:46', '2021-08-08 05:24:05', NULL, '200'),
(3, 'Crop Production', NULL, NULL, 'Lorem', 'Lorem Ipsum', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'image_6.jpg', 'active', '2021-08-11 13:42:35', '2021-08-08 05:29:09', NULL, '89'),
(4, 'Data Structures', NULL, NULL, 'Lorem', 'Lorem Ipsum', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'image_5.jpg', 'active', '2021-08-13 16:08:25', '2021-08-08 05:37:02', NULL, '150'),
(5, 'Basics To Linguistics Linguistics', NULL, NULL, 'Lorem', 'Lorem Ipsum', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'image_9.jpg', 'active', '2021-08-11 13:41:50', '2021-08-08 05:49:39', NULL, '125'),
(6, 'Professional Photography', NULL, NULL, 'Lorem', 'Lorem Ipsum Dolor Et...', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'image_5.jpg', 'inactive', '2021-08-11 13:16:13', '2021-08-08 05:50:41', NULL, '180'),
(7, 'Digital Security', NULL, NULL, 'Lorem', 'Lorem Ipsum Dolor Et...', 'Overview\r\nCourse Description\r\n<p> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. <br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. <br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. <br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. <br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. <br> Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. <br> Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. <br> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. </p>', 'image_4.jpg', 'active', '2021-08-11 18:20:29', '2021-08-08 11:13:46', NULL, '8');

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
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL,
  `message` text,
  `number_of_students` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_applications`
--

INSERT INTO `course_applications` (`id`, `course_id`, `tutor_id`, `cv_name`, `identifications`, `application_status`, `created_at`, `updated_at`, `message`, `number_of_students`) VALUES
(1, '4', '2', 'image_8.jpg', 'image_12.jpg', 'approved', '2021-08-12 05:56:45', '2021-08-12 05:56:45', NULL, '0'),
(2, '1', '6', 'image_7.jpg', 'image_1.jpg', 'declined', '2021-08-12 05:57:59', '2021-08-12 05:57:59', NULL, '0'),
(3, '4', '6', 'image_10.jpg', 'image_6.jpg', 'approved', '2021-08-12 05:58:05', '2021-08-12 05:58:05', 'Include A Message Such As How To Get Started...Include A Message Such As How To Get Started...Include A Message Such As How To Get Started...Include A Message Such As How To Get Started...Include A Message Such As How To Get Started...', '0'),
(4, '6', '8', '1_DIpg-kS0ZbdJ9XxThTp4kw.jpeg', 'profile-2.jpg', 'approved', '2021-08-12 17:03:41', '2021-08-12 17:03:41', 'Include A Message Such As How To Get Started...Include A Message Such As How To Get Started...Include A Message Such As How To Get Started...Include A Message Such As How To Get Started...Include A Message Such As How To Get Started...Include A Message Such As How To Get Started...Include A Message Such As How To Get Started...', '0');

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
-- Table structure for table `library_or_store`
--

CREATE TABLE `library_or_store` (
  `id` int(255) NOT NULL,
  `item_name` text NOT NULL,
  `item_type` text NOT NULL,
  `author` text NOT NULL,
  `number_of_times_used` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('naweriyclinton@gmail.com', '$2y$10$BLVrxHVs08V/VBOFSRTOV.PAkalgBGblk4zc6MnmBRwjRqg40U8ui', '2021-08-12 02:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `students_enrolled`
--

CREATE TABLE `students_enrolled` (
  `id` int(255) NOT NULL,
  `student_id` text,
  `tutor_id` text,
  `course_id` text,
  `payment_status` text,
  `acceptence_status` text,
  `course_status` text,
  `created_at` text,
  `updated_at` text,
  `payment_ref` text,
  `payment_method` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings_general`
--

CREATE TABLE `system_settings_general` (
  `id` int(255) NOT NULL,
  `support_email` text,
  `site_name` text,
  `site_phone` text,
  `address` text,
  `site_mission` text,
  `site_brief` text,
  `copyright_text` text,
  `metatitle` text,
  `metaimage` text,
  `metafavicon` text,
  `metalogo` text,
  `metadescription` text,
  `metakeywords` text,
  `landing_card_image_1` text,
  `landing_card_image_2` text,
  `landing_card_image_3` text,
  `landing_card_title_1` text,
  `landing_card_title_2` text,
  `landing_card_title_3` text,
  `landing_card_text_1` text,
  `landing_card_text_2` text,
  `landing_card_text_3` text,
  `meta_black_logo` text,
  `slider_three_title` text,
  `slider_three_title_large` text,
  `slider_three_sub_title` text,
  `slider_three_button_1_text` text,
  `slider_three_button_2_text` text,
  `slider_three_button_1_link` text,
  `slider_three_button_2_link` text,
  `slider_two_title` text,
  `slider_two_title_large` text,
  `slider_two_sub_title` text,
  `slider_two_button_1_text` text,
  `slider_two_button_2_text` text,
  `slider_two_button_1_link` text,
  `slider_two_button_2_link` text,
  `slider_one_title` text,
  `slider_one_title_large` text,
  `slider_one_sub_title` text,
  `slider_one_button_1_text` text,
  `slider_one_button_2_text` text,
  `slider_one_button_1_link` text,
  `slider_one_button_2_link` text,
  `slider_one_image` text,
  `slider_two_image` text,
  `slider_three_image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_settings_general`
--

INSERT INTO `system_settings_general` (`id`, `support_email`, `site_name`, `site_phone`, `address`, `site_mission`, `site_brief`, `copyright_text`, `metatitle`, `metaimage`, `metafavicon`, `metalogo`, `metadescription`, `metakeywords`, `landing_card_image_1`, `landing_card_image_2`, `landing_card_image_3`, `landing_card_title_1`, `landing_card_title_2`, `landing_card_title_3`, `landing_card_text_1`, `landing_card_text_2`, `landing_card_text_3`, `meta_black_logo`, `slider_three_title`, `slider_three_title_large`, `slider_three_sub_title`, `slider_three_button_1_text`, `slider_three_button_2_text`, `slider_three_button_1_link`, `slider_three_button_2_link`, `slider_two_title`, `slider_two_title_large`, `slider_two_sub_title`, `slider_two_button_1_text`, `slider_two_button_2_text`, `slider_two_button_1_link`, `slider_two_button_2_link`, `slider_one_title`, `slider_one_title_large`, `slider_one_sub_title`, `slider_one_button_1_text`, `slider_one_button_2_text`, `slider_one_button_1_link`, `slider_one_button_2_link`, `slider_one_image`, `slider_two_image`, `slider_three_image`) VALUES
(1, 'support@website.com', 'Website Name', '+1-1234567890', '11386, Ntinda-Road,  Kampala-Uganda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', '&copy Website Name || All Rights Reserved Website Company', 'Website Name', 'slide1.jpg', 'favicon.png', 'logo-white.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is', 'EduChamp : Education HTML Template,EduChamp : Education HTML Template,EduChamp : Education HTML Template,EduChamp : Education HTML Template,EduChamp : Education HTML Template', 'slide1.jpg', 'pic2.jpg', 'pic3.jpg', 'Best Industry Leaders', 'Learn Courses Online', 'Book, Library & Store', '<i class=\"fa fa-bank text-primary\"></i>', '<i class=\"fa fa-bank text-primary\"></i>', '<i class=\"fa fa-bank text-primary\"></i>', 'logo.png', 'Batter Education For A Better', 'Welcome To University', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', 'Contact Us', 'Read More', '/', '/', 'Batter Education For A Better', 'Welcome To University', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', 'Contact Us', 'Read More', '/', '/', 'Batter Education For A Better', 'Welcome To University', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', 'Contact Us', 'Read More', '/', '/', 'slide1.jpg', 'slide1.jpg', 'slide1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tutors_for_courses`
--

CREATE TABLE `tutors_for_courses` (
  `id` int(255) NOT NULL,
  `course_id` text NOT NULL,
  `tutor_id` text NOT NULL,
  `applicationId` text,
  `tutor_status` text,
  `number_of_students` text,
  `updated_at` text,
  `created_at` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors_for_courses`
--

INSERT INTO `tutors_for_courses` (`id`, `course_id`, `tutor_id`, `applicationId`, `tutor_status`, `number_of_students`, `updated_at`, `created_at`) VALUES
(1, '4', '6', '3', 'active', '0', '2021-08-13 06:21:18', '2021-08-13 06:21:18'),
(2, '6', '8', '4', 'active', '0', '2021-08-13 07:15:52', '2021-08-13 07:15:52');

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
  `profile_photo` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_students` text COLLATE utf8mb4_unicode_ci,
  `user_status_activity` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `access_level`, `user_type`, `profile_photo`, `phone`, `address`, `number_of_students`, `user_status_activity`) VALUES
(1, 'AdvancedEdu Administration', 'naweriyclinton@gmail.com', NULL, '$2y$10$WanLZugZJ80h5hWNpuxLLu/Wnqf9E6cZYQuzzUb29.7gjgCg7SXge', NULL, '2021-08-07 07:50:35', '2021-08-16 00:39:38', 'student', 'admin', '217448847_4395057680555137_3366115619447771148_n.jpg', '0751021147', 'plot 1, masumba avenue', NULL, 'active'),
(2, 'Larry Page', 'nawerientertainment@gmail.com', NULL, '$2y$10$XAU.L2V6Ic5Rm7xJrHi8.eNOXBPRvKqw/ULFKXYr8uAM1QovZdon6', NULL, '2021-08-07 07:55:56', '2021-08-12 05:05:47', 'tutor', 'ordinary', 'profile-2.jpg', '', '', '3', 'active'),
(3, 'mathew Aubrey', 'mathews1720@gmail.com', NULL, '$2y$10$qSlCcwkzeLzOGPIEG.zZ1eYnEX37KTcEsRJtF3rz6gaX5HqhwSYUO', NULL, '2021-08-08 07:01:58', '2021-08-08 23:43:51', 'student', 'ordinary', 'chris-henry-lxTJcja_Cv0-unsplash.jpg', '', '', NULL, 'active'),
(4, 'Barry Ogle', 'barry@hotmail.com', NULL, '$2y$10$GiHjSzWTWDcDaFPsNcYfpeM8WZhc3XF3xdRL6Iq0HQv91yiyHmvNq', NULL, '2021-08-08 07:05:49', '2021-08-08 07:05:49', 'student', 'ordinary', NULL, '', '', NULL, 'active'),
(5, 'Keiser William', 'keisar@gmail.com', NULL, '$2y$10$7QF.CiYYXKyMZWKqRIx4VO8o/nzGH7Q13hcNzJy6aTj9WwT/KaCa.', NULL, '2021-08-08 07:07:49', '2021-08-08 07:07:49', 'tutor', 'ordinary', NULL, '', '', NULL, 'active'),
(6, 'Zana Aubrey', 'zana@naweri.xyz', NULL, '$2y$10$mPG/25vdN5jKEsCheF2WWu5OWL2sYa4.lzK3BxfGyVvQnCG2XCNVK', NULL, '2021-08-08 07:12:39', '2021-08-12 10:02:47', 'tutor', 'ordinary', 'chris-henry-70-dtgGmrJY-unsplash.jpg', '0751021147', 'plot 1, masumba avenue', '2', 'active'),
(7, 'John Doe', 'john@johndoe.com', NULL, '$2y$10$1QsxieYUCICJo9xy5yNcQOdy/I3gYO.2MqoOH/r.UWegR4CP3DYGS', NULL, '2021-08-08 07:15:51', '2021-08-12 04:59:49', 'student', 'ordinary', 'profile-2.jpg', '0751021147', 'plot 1, masumba avenue', NULL, 'active'),
(8, 'Lorna Anders', 'lorna@gmail.com', NULL, '$2y$10$dVOg0MyzYU4kLQXvAsmDyeOoyChybCjQap1Bp2Z.bcn7r55MT9Beu', NULL, '2021-08-12 03:06:55', '2021-08-13 07:25:12', 'tutor', 'ordinary', 'profile-2.jpg', '+256751021147', '12483 CA', NULL, 'active');

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
-- Indexes for table `library_or_store`
--
ALTER TABLE `library_or_store`
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
-- Indexes for table `students_enrolled`
--
ALTER TABLE `students_enrolled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings_general`
--
ALTER TABLE `system_settings_general`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_or_store`
--
ALTER TABLE `library_or_store`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students_enrolled`
--
ALTER TABLE `students_enrolled`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_settings_general`
--
ALTER TABLE `system_settings_general`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutors_for_courses`
--
ALTER TABLE `tutors_for_courses`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutor_ratings`
--
ALTER TABLE `tutor_ratings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
