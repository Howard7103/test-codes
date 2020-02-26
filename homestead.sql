-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 02 月 26 日 02:49
-- 伺服器版本： 5.7.13
-- PHP 版本： 7.2.13-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `homestead`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'system', '系統管理', '2020-02-26 10:18:51', '2020-02-26 10:18:51'),
(2, 'post', '文章管理', '2020-02-26 10:19:02', '2020-02-26 10:19:02'),
(3, 'topic', '專題管理', '2020-02-26 10:19:11', '2020-02-26 10:19:11'),
(4, 'notice', '通知管理', '2020-02-26 10:19:20', '2020-02-26 10:19:20');

-- --------------------------------------------------------

--
-- 資料表結構 `admin_permission_role`
--

CREATE TABLE `admin_permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin_permission_role`
--

INSERT INTO `admin_permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 3, 2, NULL, NULL),
(3, 4, 3, NULL, NULL),
(4, 4, 4, NULL, NULL),
(5, 1, 2, NULL, NULL),
(6, 1, 3, NULL, NULL),
(7, 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'firstUser', '系統管理', '2020-02-26 10:19:47', '2020-02-26 10:19:47'),
(3, 'test02', '文章管理', '2020-02-26 10:20:15', '2020-02-26 10:20:15'),
(4, '888', '專題管理 ＆ 通知管理', '2020-02-26 10:20:37', '2020-02-26 10:20:37');

-- --------------------------------------------------------

--
-- 資料表結構 `admin_role_user`
--

CREATE TABLE `admin_role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin_role_user`
--

INSERT INTO `admin_role_user` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 3),
(2, 3, 4),
(3, 4, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(3, 'firstUser', '$2y$10$Nmiim3Fxyvo9v09npi.t/uyj.tsKqNRoTE0txfDKJfHMHy8ArpalS', '2020-02-26 10:08:47', '2020-02-26 10:08:47'),
(4, 'test02', '$2y$10$KCOPnvSS4DfCdln/Drd9wOFd4DXxDXLkqRSXJ78kCJuXExLpg1M5K', '2020-02-26 10:09:04', '2020-02-26 10:09:04'),
(5, '888', '$2y$10$XXtYqNNLoFnI7y9YBLQbM.k8gj3PXYgNThxf6lZJEEJQrJDLDR0IC', '2020-02-26 10:09:24', '2020-02-26 10:09:24');

-- --------------------------------------------------------

--
-- 資料表結構 `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 8, 2, '讚讚讚', '2020-02-26 10:31:13', '2020-02-26 10:31:13');

-- --------------------------------------------------------

--
-- 資料表結構 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `fans`
--

CREATE TABLE `fans` (
  `id` int(10) UNSIGNED NOT NULL,
  `fan_id` int(11) NOT NULL DEFAULT '0',
  `star_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_05_022040_create_posts_table', 1),
(5, '2020_02_10_092254_create_comments_table', 1),
(6, '2020_02_10_131211_create_zans_table', 1),
(7, '2020_02_12_165708_create_fans_table', 1),
(8, '2020_02_12_174913_create_topics_table', 1),
(9, '2020_02_12_174922_create_post_topics_table', 1),
(10, '2020_02_17_092337_create_admin_users_table', 1),
(11, '2020_02_17_133924_alert_posts_table', 1),
(12, '2020_02_18_101441_create_permision_and_roles', 1),
(13, '2020_02_18_101441_create_permission_and_roles', 1),
(14, '2020_02_20_134333_create_notice_table', 1),
(15, '2020_02_20_171726_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `notices`
--

INSERT INTO `notices` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, '這個是通知標題', '這個是通知標題', '2020-02-26 10:25:09', '2020-02-26 10:25:09');

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `permision_and_roles`
--

CREATE TABLE `permision_and_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `created_at`, `updated_at`, `status`) VALUES
(4, 'sadasdasd', '<p>s<em>adasdasdsadasdasdsadasdasdsadasdasdsadasdas</em>d</p>', 3, '2020-02-26 10:14:58', '2020-02-26 10:21:45', 1),
(5, '456789', '<p><strong>456789456789</strong></p>', 3, '2020-02-26 10:15:24', '2020-02-26 10:21:45', 1),
(6, '我有權限了', '<p>我有權限了我有權限了</p>', 2, '2020-02-26 10:15:40', '2020-02-26 10:21:45', 1),
(7, '這是寫文章測試', '<p>這是寫文章測試</p>', 2, '2020-02-26 10:15:46', '2020-02-26 10:21:44', 1),
(8, '888888888', '<p>888888888</p>', 4, '2020-02-26 10:15:59', '2020-02-26 10:21:44', 1),
(9, '寫文章後台通過測試', '<p>寫文章後台通過測試</p>', 2, '2020-02-26 10:24:40', '2020-02-26 10:25:49', -1),
(10, '寫文章後台通過測試', '<p>寫文章後台通過測試</p>', 2, '2020-02-26 10:26:15', '2020-02-26 10:26:15', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `post_topics`
--

CREATE TABLE `post_topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL DEFAULT '0',
  `topic_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `post_topics`
--

INSERT INTO `post_topics` (`id`, `post_id`, `topic_id`, `created_at`, `updated_at`) VALUES
(1, 6, 1, '2020-02-26 10:30:30', '2020-02-26 10:30:30'),
(2, 10, 2, '2020-02-26 10:30:38', '2020-02-26 10:30:38');

-- --------------------------------------------------------

--
-- 資料表結構 `topics`
--

CREATE TABLE `topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `topics`
--

INSERT INTO `topics` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '旅遊', '2020-02-26 10:21:26', '2020-02-26 10:21:26'),
(2, '專題測試', '2020-02-26 10:21:34', '2020-02-26 10:21:34');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'firstUser', 'firstUser@gmail.com', NULL, '$2y$10$cghpm8LR713B8cbIvGOzMelHAGCptVf7M7F99RKyBKSXIn4fzPpwi', NULL, '2020-02-26 09:47:44', '2020-02-26 09:47:44'),
(3, 'test02', '456@gmail.com', NULL, '$2y$10$p4yxHaR.G4p438Y5d06HUufIh7/jcl1DVGu/ab155DBItKht2z3gO', NULL, '2020-02-26 10:09:34', '2020-02-26 10:09:34'),
(4, '888', '888@gmail.com', NULL, '$2y$10$nErARfvZVPv1foIpqpgRJeN4KhYpZrjeaM0piFs.0PA.llO3OEdbe', NULL, '2020-02-26 10:09:46', '2020-02-26 10:09:46');

-- --------------------------------------------------------

--
-- 資料表結構 `user_notice`
--

CREATE TABLE `user_notice` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `notice_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user_notice`
--

INSERT INTO `user_notice` (`id`, `user_id`, `notice_id`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 4, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `zans`
--

CREATE TABLE `zans` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `zans`
--

INSERT INTO `zans` (`id`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2020-02-26 09:47:55', '2020-02-26 09:47:55'),
(2, 8, 2, '2020-02-26 10:30:59', '2020-02-26 10:30:59');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin_permission_role`
--
ALTER TABLE `admin_permission_role`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin_role_user`
--
ALTER TABLE `admin_role_user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `fans`
--
ALTER TABLE `fans`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 資料表索引 `permision_and_roles`
--
ALTER TABLE `permision_and_roles`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `post_topics`
--
ALTER TABLE `post_topics`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 資料表索引 `user_notice`
--
ALTER TABLE `user_notice`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `zans`
--
ALTER TABLE `zans`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin_permission_role`
--
ALTER TABLE `admin_permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin_role_user`
--
ALTER TABLE `admin_role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `fans`
--
ALTER TABLE `fans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `permision_and_roles`
--
ALTER TABLE `permision_and_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `post_topics`
--
ALTER TABLE `post_topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_notice`
--
ALTER TABLE `user_notice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `zans`
--
ALTER TABLE `zans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
