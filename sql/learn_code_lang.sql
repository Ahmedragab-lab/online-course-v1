-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 02:50 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_code_lang`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `slug`, `status`, `link`, `track_id`, `created_at`, `updated_at`) VALUES
(17, 'laravel', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'laravel', 0, 'https://www.google.com/search?q=laravel&tbm=isch&tbs=isz:m&client=opera&hs=VPb&hl=ar&sa=X&ved=0CAMQpwVqFwoTCIivscLzhvICFQAAAAAdAAAAABAC&biw=1865&bih=939#imgrc=FJOP-D-6wJVlRM&imgdii=hzPMAhP0Ayla7M', 4, '2021-07-28 21:22:45', '2021-07-28 21:22:45'),
(18, 'livewire', 'dddddddddddddddddddddd', 'livewire', 0, 'https://www.google.com/search?q=laravel&tbm=isch&tbs=isz:m&client=opera&hs=VPb&hl=ar&sa=X&ved=0CAMQpwVqFwoTCIivscLzhvICFQAAAAAdAAAAABAC&biw=1865&bih=939#imgrc=FJOP-D-6wJVlRM&imgdii=hzPMAhP0Ayla7M', 4, '2021-07-28 21:23:23', '2021-07-28 21:23:23'),
(20, 'laravel courses', 'hhhhhhhhhhhhhhhhhhhhh', 'laravel-courses', 1, 'https://www.udemy.com/cart/success/638341410/', 5, '2021-07-28 22:33:11', '2021-07-28 22:33:11'),
(21, 'node js', 'java script', 'node-js', 0, 'https://www.youtube.com/watch?v=V6t3tWN2tNk&list=PLftLUHfDSiZ7-RAsH8NskS7AYofykW_WN&index=37', 4, '2021-07-31 13:56:15', '2021-08-02 13:09:06'),
(22, 'python', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'python', 0, 'https://www.youtube.com/watch?v=V6t3tWN2tNk&list=PLftLUHfDSiZ7-RAsH8NskS7AYofykW_WN&index=37', 6, '2021-07-31 13:57:16', '2021-07-31 13:57:16'),
(23, 'java script', 'basics java from 0 to hero', 'java-script', 0, 'https://github.com/Mohamed-Gamal-Mubarek/Online-Course/compare/at-front?expand=1', 4, '2021-08-02 09:56:17', '2021-08-02 09:56:17'),
(24, 'kotlin', 'kotlin basics', 'kotlin', 0, 'https://laravel.com/docs/8.x/validation', 4, '2021-08-03 11:45:56', '2021-08-03 11:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2021_07_23_175118_create_photos_table', 1),
(5, '2021_07_23_180240_create_tracks_table', 1),
(6, '2021_07_23_180546_create_courses_table', 1),
(7, '2021_07_23_181611_create_videos_table', 1),
(8, '2021_07_23_182146_create_quizzes_table', 1),
(9, '2021_07_23_182355_create_questions_table', 1),
(10, '2021_07_23_185006_users_tracks_pivot', 1),
(11, '2021_07_23_185653_users_courses_pivot', 1),
(12, '2021_07_23_185819_quiz_user_pivot', 1);

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
-- Table structure for table `photoable`
--

CREATE TABLE `photoable` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photoable_id` int(11) NOT NULL,
  `photoable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photoable`
--

INSERT INTO `photoable` (`id`, `filename`, `photoable_id`, `photoable_type`, `created_at`, `updated_at`) VALUES
(2, '2.jpg', 1, 'App\\Models\\Course', NULL, NULL),
(3, '1627513425_166776916_2891274867775062_417591432873530250_n_0_.jpg', 13, 'App\\Models\\Course', '2021-07-28 21:03:45', '2021-07-28 21:03:45'),
(4, '1627513493_logo3_.png', 14, 'App\\Models\\Course', '2021-07-28 21:04:53', '2021-07-28 21:04:53'),
(5, '1627518533_5f8071b3990de90982aae76d_0_VIMJUYR9ZGVkJjYd_.png', 15, 'App\\Models\\Course', '2021-07-28 21:12:25', '2021-07-28 22:28:53'),
(6, '1627514146_default_.jpg', 16, 'App\\Models\\Course', '2021-07-28 21:15:46', '2021-07-28 21:15:46'),
(7, '1627518588_download_.jpg', 17, 'App\\Models\\Course', '2021-07-28 21:22:45', '2021-07-28 22:29:48'),
(8, '1627947909_ini9_.png', 18, 'App\\Models\\Course', '2021-07-28 21:23:23', '2021-08-02 21:45:09'),
(9, '1627571446_186543008_10159668016750774_7595019725240883050_n_.jpg', 19, 'App\\Models\\Course', '2021-07-28 21:27:20', '2021-07-29 13:10:46'),
(10, '1627584138_default_.jpg', 20, 'App\\Models\\Course', '2021-07-28 22:33:11', '2021-07-29 16:42:18'),
(11, '1627947856_blog_online-classroom_laravel_1200x600_.png', 21, 'App\\Models\\Course', '2021-07-31 13:56:15', '2021-08-02 21:44:16'),
(12, '1627904886_laravel-img_.png', 22, 'App\\Models\\Course', '2021-07-31 13:57:16', '2021-08-02 09:48:06'),
(13, '1627905432_unnamed_.png', 23, 'App\\Models\\Course', '2021-08-02 09:56:17', '2021-08-02 09:57:12'),
(14, '1627998356_gggg_.png', 24, 'App\\Models\\Course', '2021-08-03 11:45:56', '2021-08-03 11:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `right_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_user`
--

CREATE TABLE `quiz_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'php', '2021-07-26 16:59:55', '2021-07-26 17:36:58'),
(5, 'laravel', '2021-07-26 17:36:04', '2021-07-26 17:36:04'),
(6, 'python', '2021-07-26 17:36:25', '2021-07-26 17:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `track_user`
--

CREATE TABLE `track_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `track_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `admin` int(11) NOT NULL DEFAULT 0,
  `score` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `score`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'wolf', 'wolf@gmail.com', NULL, '$2y$10$yhcHxRjkzn5ZkHhiV7juG.irUIOBkyT4gfH9ar89YdIdX4/rpwWEu', 1, 0, 'Se9x2wyLPQB9KdjGJA1Othx52notrfiw8XRajHK9SQ1qGInknx9GMPOeSVKi', '2021-07-23 17:57:17', '2021-07-23 17:57:17'),
(2, 'mohamed ali', 'mo@gmail.com', NULL, '$2y$10$3yvhvJpefCHzOB52w6YoLeEW.lxCzknt1dz/N9DWQDPdlTS/qMARO', 1, 0, NULL, '2021-07-23 18:20:48', '2021-07-23 18:20:48'),
(7, 'ahmed ali ali moky', 'ali@yahoo.com', NULL, '$2y$10$FTKFoMDrj0PD777eVhgAc.QYINxzwgOeZsbJDwHjKqqiqpjywKMJ.', 1, 0, NULL, '2021-07-25 08:29:59', '2021-07-25 18:06:48'),
(12, 'adel emam', 'adel_emam@gmail.com', NULL, '$2y$10$p7RGTGM8Ro6cBSkxOr0NQ.jFh3I61HzCAu/j1j.IkYlBJqjoStAmu', 0, 0, NULL, '2021-07-25 17:57:07', '2021-07-25 18:20:01'),
(13, 'ahmed ibrahim', 'ibrahim@gmail.com', NULL, '$2y$10$OeuUqsadkWbW5PwhBXvn8eeWZRYdynXPO.i2ZajjOMQVnzLkSMr8K', 0, 0, NULL, '2021-07-25 17:57:42', '2021-07-25 18:14:40'),
(15, 'fifi abdo', 'fifi@gmail.com', NULL, '$2y$10$Ju2ShyswSjB.oyx2Kw7evOO1NRIUkXjRo18xhcvfaBvusIlqHkklS', 0, 0, NULL, '2021-07-25 18:21:25', '2021-07-25 18:21:25'),
(16, 'aa', 'aa@gmail.com', NULL, '$2y$10$.Qm4L9VGWUHYyBFTjPyuoeG.uytJ2qi1/T5cbcQM7RBjCXrXeC5be', 1, 0, NULL, '2021-07-25 18:25:14', '2021-07-25 18:25:14'),
(17, '3513521', 'wdd@gmail.com', NULL, '$2y$10$mnbmOMT.65U9dQYdCG.ebu49yva8H50OXS0H2qJnOL0Ct7WsLHgMe', 1, 0, NULL, '2021-07-25 18:42:02', '2021-07-25 18:42:02'),
(19, '7777777777', 'hgghghjj@gmail.com', NULL, '$2y$10$xdpUK5TdJRbjMLjPsfYji.CpVIQ58KnD/B9WC/6LqAolJzU55Fisi', 0, 0, NULL, '2021-07-25 18:47:17', '2021-07-25 18:49:21'),
(20, 'vvvvv', 'vv@gmail.com', NULL, '$2y$10$Lt56wX1s4EyJdgMy0b/nWO3q487JUgh42o5rJD5Vqs7cgsQFR/tnW', 0, 0, NULL, '2021-07-25 19:11:30', '2021-07-25 19:11:30'),
(21, 'zzzzz', 'zz@z.com', NULL, '$2y$10$sFcR.ZLTwjGrHzdMAU3kvu3k5XuZCNCJS8ZtbKv/WYuBVh3pZ21J2', 0, 0, NULL, '2021-07-25 20:08:42', '2021-07-25 20:08:42'),
(22, 'koria', 'qq@gmail.com', NULL, '$2y$10$9mBWsCLm7LawKzCkeksaW.GOMW9cCuq3aYfdMo3VrImo/3UjDc1bG', 0, 0, NULL, '2021-07-26 15:18:43', '2021-07-26 15:52:13'),
(23, 'aaa', 'aaa@gmail.com', NULL, '$2y$10$LZi7AcrscdSZOoqGVOp7eu.mSvNynE4yYczuh1QSn/bjvtCIBUVFO', 0, 0, NULL, '2021-07-26 15:20:58', '2021-07-26 15:20:58'),
(25, 'mahmod abd el aziz', 'abd-elaziz@gmail.com', NULL, '$2y$10$x2w5OjP1SGDL5aTRL2cZo.VEcgLYBsVjiA0A8b4DkLMxNBRcPL9Uu', 1, 0, NULL, '2021-07-26 15:48:52', '2021-07-26 15:48:52'),
(26, 'banzima', 'banzima@gmail.com', NULL, '$2y$10$7Yv69cS6ZK2CS0rZeWay/OnYClhEm0ErT00zIFqdrvN4ZuHAQ/6oO', 0, 0, NULL, '2021-07-26 15:51:24', '2021-07-26 15:51:24'),
(27, 'mmmmm', 'mm@gmail.com', NULL, '$2y$10$sUjeJnHZve4anplCaaKrteOQfUfxL6XgxBXL3X61m2DwNMDr1oVhq', 1, 0, NULL, '2021-07-27 16:44:49', '2021-07-27 16:44:49'),
(28, 'nnnnn', 'nn@gmail.com', NULL, '$2y$10$5MbBxp3yKd5TKpH2DCv8auEejCg5tVgY3YZAI2vY9dzl9FyZPDpwu', 0, 0, NULL, '2021-07-27 16:46:14', '2021-07-27 16:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `link`, `course_id`, `created_at`, `updated_at`) VALUES
(2, 'hospital mora soft', 'https://www.youtube.com/embed/a1I3tcALTlc', 18, '2021-07-29 20:34:38', '2021-07-29 22:00:30'),
(3, 'invoices', ' https://www.youtube.com/embed/5qTqsb_DpcY', 20, '2021-07-29 21:29:22', '2021-07-29 21:56:40'),
(5, 'livewire', 'https://www.youtube.com/embed/xFx_KhP5lXg?list=PLtFbQRDJ11kEXHMMcWsKUaiO3b3epajIe', 18, '2021-08-03 17:31:16', '2021-08-03 17:31:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_track_id_foreign` (`track_id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD KEY `course_user_user_id_foreign` (`user_id`),
  ADD KEY `course_user_course_id_foreign` (`course_id`);

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
-- Indexes for table `photoable`
--
ALTER TABLE `photoable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_course_id_foreign` (`course_id`);

--
-- Indexes for table `quiz_user`
--
ALTER TABLE `quiz_user`
  ADD KEY `quiz_user_user_id_foreign` (`user_id`),
  ADD KEY `quiz_user_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track_user`
--
ALTER TABLE `track_user`
  ADD KEY `track_user_user_id_foreign` (`user_id`),
  ADD KEY `track_user_track_id_foreign` (`track_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_course_id_foreign` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `photoable`
--
ALTER TABLE `photoable`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_track_id_foreign` FOREIGN KEY (`track_id`) REFERENCES `tracks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_user`
--
ALTER TABLE `course_user`
  ADD CONSTRAINT `course_user_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quiz_user`
--
ALTER TABLE `quiz_user`
  ADD CONSTRAINT `quiz_user_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `quiz_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `track_user`
--
ALTER TABLE `track_user`
  ADD CONSTRAINT `track_user_track_id_foreign` FOREIGN KEY (`track_id`) REFERENCES `tracks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `track_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
