-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 08 2023 г., 14:19
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mustaqil_ish_issiqxona`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `greenhouses`
--

CREATE TABLE `greenhouses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `greenhouses`
--

INSERT INTO `greenhouses` (`id`, `name`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Issiqxona D-200', 15000000, 'Sed congue suscipit purus, eu fringilla velit elementum eu. Nunc ornare ultrices velit eu dictum. Nullam sollicitudin eleifend bibendum. Aliquam efficitur tellus at viverra auctor. Cras tristique laoreet vestibulum. Nunc dignissim elit ut mollis aliquam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', '1686148313-.webp', '2023-06-07 09:31:53', '2023-06-08 06:02:56'),
(5, 'Issiqxona M-200', 25000000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consequat urna eget feugiat rhoncus. Nunc ultrices orci magna, ac interdum nibh dignissim non. Nullam sed nisi sodales, sollicitudin orci tempor, semper est. Donec pulvinar metus non facilisis condimentum. Ut dapibus tortor eget est volutpat, vitae tempor quam hendrerit. Aliquam accumsan dolor in felis luctus sodales sit amet a est. Pellentesque tincidunt diam risus, id aliquet risus gravida nec. Curabitur convallis eu felis ut blandit. Maecenas consectetur augue eu semper blandit. Proin vehicula velit ut aliquam euismod. Quisque mi orci, convallis iaculis lacus et, placerat malesuada nunc.', '1686222135-.jpg', '2023-06-08 06:02:15', '2023-06-08 06:03:06'),
(6, 'Issiqxona M-201', 23000000, 'Morbi hendrerit justo ipsum, ut suscipit orci vulputate eu. In magna dolor, venenatis non facilisis sed, tristique sit amet magna. Nunc in malesuada orci. Ut cursus tempus congue. Fusce dignissim tellus sit amet lobortis aliquam. Etiam non ante in libero auctor eleifend eget vel dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut feugiat dolor ex, eget mollis diam elementum ac. Nam accumsan interdum magna ut maximus.', '1686222366-.jpg', '2023-06-08 06:06:06', '2023-06-08 06:06:06'),
(7, 'Issiqxona M-202', 25000000, 'Suspendisse potenti. Donec ligula libero, porta ullamcorper diam eu, ullamcorper pretium elit. Maecenas faucibus libero eget cursus porttitor. Nulla nec risus nibh. Aenean porttitor dui sed orci rutrum, non placerat magna bibendum. Donec cursus ante semper magna fringilla, et luctus eros efficitur. Maecenas et purus sit amet neque feugiat iaculis in vel lorem. Pellentesque feugiat metus in ligula aliquet tincidunt. Praesent efficitur a turpis id congue.', '1686222392-.jpg', '2023-06-08 06:06:32', '2023-06-08 06:06:32'),
(8, 'Issiqxona M-203', 30000000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consequat urna eget feugiat rhoncus. Nunc ultrices orci magna, ac interdum nibh dignissim non. Nullam sed nisi sodales, sollicitudin orci tempor, semper est. Donec pulvinar metus non facilisis condimentum. Ut dapibus tortor eget est volutpat, vitae tempor quam hendrerit. Aliquam accumsan dolor in felis luctus sodales sit amet a est. Pellentesque tincidunt diam risus, id aliquet risus gravida nec. Curabitur convallis eu felis ut blandit. Maecenas consectetur augue eu semper blandit. Proin vehicula velit ut aliquam euismod. Quisque mi orci, convallis iaculis lacus et, placerat malesuada nunc.', '1686222429-.jpg', '2023-06-08 06:07:09', '2023-06-08 06:07:09'),
(9, 'Issiqxona M-204', 33000000, 'Cras purus velit, convallis vel massa sit amet, laoreet vehicula felis. Etiam ac velit orci. Nam et ex vel turpis consectetur suscipit sit amet volutpat justo. Pellentesque sodales tortor a lectus tempor mattis. Proin rutrum viverra orci, in euismod neque egestas non. Nulla laoreet dolor non massa pretium, luctus tempor sem dapibus. Nulla facilisi. Donec lobortis fermentum arcu. Phasellus eros tellus, varius vitae dolor eget, rhoncus imperdiet sapien. Mauris sit amet nulla nec metus laoreet tristique. Donec tincidunt sem ex, luctus consequat tellus faucibus et. Curabitur felis augue, bibendum ac leo ut, viverra condimentum ipsum. Vestibulum lacus nunc, maximus eu commodo vitae, tempor sit amet libero. Donec aliquet vitae ligula in egestas. Fusce consequat velit at arcu aliquam vehicula.', '1686222464-.jpg', '2023-06-08 06:07:44', '2023-06-08 06:07:44'),
(10, 'Issiqxona D-201', 41000000, 'Sed congue suscipit purus, eu fringilla velit elementum eu. Nunc ornare ultrices velit eu dictum. Nullam sollicitudin eleifend bibendum. Aliquam efficitur tellus at viverra auctor. Cras tristique laoreet vestibulum. Nunc dignissim elit ut mollis aliquam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', '1686222531-.jpg', '2023-06-08 06:08:51', '2023-06-08 06:08:51'),
(11, 'Issiqxona D-202', 42000000, 'Morbi hendrerit justo ipsum, ut suscipit orci vulputate eu. In magna dolor, venenatis non facilisis sed, tristique sit amet magna. Nunc in malesuada orci. Ut cursus tempus congue. Fusce dignissim tellus sit amet lobortis aliquam. Etiam non ante in libero auctor eleifend eget vel dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut feugiat dolor ex, eget mollis diam elementum ac. Nam accumsan interdum magna ut maximus.', '1686222565-.jpg', '2023-06-08 06:09:25', '2023-06-08 06:09:25'),
(12, 'Issiqxona D-203', 12000000, 'Suspendisse potenti. Donec ligula libero, porta ullamcorper diam eu, ullamcorper pretium elit. Maecenas faucibus libero eget cursus porttitor. Nulla nec risus nibh. Aenean porttitor dui sed orci rutrum, non placerat magna bibendum. Donec cursus ante semper magna fringilla, et luctus eros efficitur. Maecenas et purus sit amet neque feugiat iaculis in vel lorem. Pellentesque feugiat metus in ligula aliquet tincidunt. Praesent efficitur a turpis id congue.', '1686222593-.jpg', '2023-06-08 06:09:53', '2023-06-08 06:09:53');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_07_105902_create_greenhouses_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `greenhouses`
--
ALTER TABLE `greenhouses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `greenhouses`
--
ALTER TABLE `greenhouses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
