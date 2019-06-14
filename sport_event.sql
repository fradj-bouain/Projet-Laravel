-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 14 juin 2019 à 13:52
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sport_event`
--

-- --------------------------------------------------------

--
-- Structure de la table `admines`
--

DROP TABLE IF EXISTS `admines`;
CREATE TABLE IF NOT EXISTS `admines` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admines_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admines`
--

INSERT INTO `admines` (`id`, `name`, `email`, `job`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rami', 'rami@gmail.com', 'dahen', NULL, '$2y$10$w/nLNgckXfnOfFkySCJsUey0.3u9TxqIAWoeZ2yPvV2MATPVlxZzK', 'JRcsCvb1qLT1YSSHvMXbuYQVisyWTQeoIBRaHwkrbm1EbV5aEwoYlNpbRO7s', '2019-04-10 11:28:47', '2019-04-10 11:28:47');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=289 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `url`, `photo`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(266, 1, 'helooo', 'ggeruzu', 'public/JIOKa6o0H3ygvykjWjDovaw3hScXVyM0lvZ4RhgQ.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:21:35', '2019-04-21 12:21:35'),
(267, 1, 'helooo', 'ggeruzu', 'public/7R7dEVGvMJYiBdMAxmKNEc5BQfe7EoLgCvH5GT53.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:21:50', '2019-04-21 12:21:50'),
(268, 1, 'helooo', 'ggeruzu', 'public/BbkX5osRoB2nM7w1NH609l3BaZJkXQDZ9L2j4reV.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:22:24', '2019-04-21 12:22:24'),
(265, 1, 'fredj harid1223', 'hegzuduez', 'public/m4jDjr1BdobpoFW7rxtCHnvPLg8dOnklekB3UwzG.jpeg', 'thanks for ever', NULL, '2019-04-16 06:18:35', '2019-04-16 06:22:03'),
(269, 1, 'helooo', 'ggeruzu', 'public/ZeDTjl3luxOlZQaElM7LE3YihzM6WoDq0nQUxMR9.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:23:55', '2019-04-21 12:23:55'),
(270, 1, 'helooo', 'ggeruzu', 'public/PMrL1QtyMyBHpTRHng8Sg2Aac231OZJAorhjaqdH.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:24:48', '2019-04-21 12:24:48'),
(271, 1, 'helooo', 'ggeruzu', 'public/JOLYZCdh0S1O6Hsq2CJ1WLK7EecsfQe3dAfEtrdx.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:26:10', '2019-04-21 12:26:10'),
(272, 1, 'helooo', 'ggeruzu', 'public/pUQR2eqcbWyiBJjNUpyN8gX7Xt6VyRk8skWHSWgo.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:26:56', '2019-04-21 12:26:56'),
(273, 1, 'helooo', 'ggeruzu', 'public/o8eDvBQr7ojHUHsiMIZKhLSQLCvQJtPEzJMRt7W8.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:27:10', '2019-04-21 12:27:10'),
(274, 1, 'helooo', 'ggeruzu', 'public/PeNZoT27SH8qzyTDnBsEZEqVTUiV1PVY5UoXhLG4.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:27:18', '2019-04-21 12:27:18'),
(275, 1, 'helooo', 'ggeruzu', 'public/4rPY8pJlMhF6dKEfEQI4WYVqV5Sp9oyFdKLynfMf.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:27:41', '2019-04-21 12:27:41'),
(276, 1, 'helooo', 'ggeruzu', 'public/adasTbu8LMQCEXG2NUwKrRx7TF9BMuQzyk8jVl9Z.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:30:10', '2019-04-21 12:30:10'),
(277, 1, 'helooo', 'ggeruzu', 'public/PmADWhFXM5bnyOE1m6BTDflcRMBNQYTrLNmXVwwV.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:33:28', '2019-04-21 12:33:28'),
(278, 1, 'helooo', 'ggeruzu', 'public/nYaGvoYRFJoennTAVMkB8c7SoCdnT39iM35XexRt.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:34:37', '2019-04-21 12:34:37'),
(279, 1, 'helooo', 'ggeruzu', 'public/Hk3j2H56DmwqNmgKOlP1aIJGW9Bm7MZVCl2Yol6H.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:35:13', '2019-04-21 12:35:13'),
(280, 1, 'helooo', 'ggeruzu', 'public/jpo1ssEZHVze7nr2GqO9eOtfrEaT12bSA0OZ0wTX.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:36:27', '2019-04-21 12:36:27'),
(281, 1, 'helooo', 'ggeruzu', 'public/C9sv03mh57FlennhIcaz1yvEpJWU96VsdftJbvo8.jpeg', 'helooo i am fradj', NULL, '2019-04-21 12:37:45', '2019-04-21 12:37:45'),
(282, 6, 'ana je ma appel', 'fexhalerdy', 'public/UcS3edWQc47m2JvZgBuJvlgeLwkLM9rF8xOBacIR.jpeg', 'videa aploo', NULL, '2019-04-21 12:44:48', '2019-04-21 12:44:48'),
(283, 6, 'ana je ma appel', 'fexhalerdy', 'public/5u8uxkOlFp5ik1Tbh0G9gilNMtUSKYphcG0YFmPj.jpeg', 'thanks for ever', NULL, '2019-04-21 12:54:42', '2019-04-21 12:54:42'),
(284, 6, 'ana je ma appel', 'fexhalerdy', 'public/5ewO9ksbiqafFditDKiCRriHARz2Pp5khWngt54O.jpeg', 'azkda,llaz,ldlkz,l,dlz', NULL, '2019-04-21 13:12:10', '2019-04-21 13:12:10'),
(285, 6, 'ana je ma appel', 'fexhalerdy', 'public/Aj1tYkLeYMT0Cb1ZmGwL5iFPTzUW0PhjmGO22zex.jpeg', 'hhhhh mila li3ib', NULL, '2019-04-21 13:30:01', '2019-04-21 13:30:01'),
(286, 1, 'ana je ma appel', 'fexhalerdy', 'public/2CeWx2EuMCJ1OuZk2oJYskGMt0d3blO3aiiDLGqz.jpeg', 'wzealenla', NULL, '2019-04-21 13:34:49', '2019-04-21 13:34:49'),
(287, 1, 'ana je ma appel', 'fexhalerdy', 'public/vOKOTzNc5jAFblfbMS4gAWg20Mc6UqiJaR0zDYkk.jpeg', 'efnzknfkezk', NULL, '2019-04-21 13:39:21', '2019-04-21 13:39:21'),
(288, 1, 'ana je ma appel', 'fexhalerdy', 'public/5aGJkIgdRJV132EB3v9P5Xw7s1cp9zfkHWuBt0lW.jpeg', 'jwnckndckjdskkc', NULL, '2019-04-21 13:57:27', '2019-04-21 13:57:27'),
(260, 1, 'bouain ali', 'my names ali', 'public/qtNW6AGoQvMNyRw0y7GwyWnVzrippBcfdxX5hCSG.jpeg', 'thanks for ever', NULL, '2019-04-07 12:12:05', '2019-04-07 12:12:05'),
(263, 1, 'fredejbouain', 'my names fradj', 'public/mrRf2bfG1xLFQ3jelCZkIGGLEnN6sOhxY1e4IiN2.jpeg', 'thanks for ever', NULL, '2019-04-10 08:24:21', '2019-04-10 08:24:21'),
(262, 1, 'bouain ali', 'my names fradj', 'public/EH4wrFCkZlS8S0V0oRs5o01xf2P6btheUgorMyr0.jpeg', 'thanks for creat', NULL, '2019-04-09 08:32:05', '2019-04-09 08:32:05'),
(261, 1, 'fredejbouain', 'my names fradj', 'public/BVXsLvgvvuRqqxEUb7AaFaZ7HHk8qvd7XWCFkGWe.jpeg', 'thanks for ever', NULL, '2019-04-07 12:12:51', '2019-04-07 12:12:51');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

DROP TABLE IF EXISTS `infos`;
CREATE TABLE IF NOT EXISTS `infos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `infos_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

DROP TABLE IF EXISTS `inscriptions`;
CREATE TABLE IF NOT EXISTS `inscriptions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscris`
--

DROP TABLE IF EXISTS `inscris`;
CREATE TABLE IF NOT EXISTS `inscris` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inscris_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_06_150943_create_contacts_table', 1),
(4, '2018_12_06_210327_create_inscriptions_table', 1),
(5, '2019_01_16_195742_create_categories_table', 1),
(6, '2019_01_27_112703_creat_infos_table', 1),
(7, '2019_01_27_112749_creat_salles_table', 1),
(8, '2019_01_29_194856_add_column_photo_categories', 1),
(9, '2019_01_30_153735_create_inscris_table', 1),
(10, '2019_02_05_105326_create_admines_table', 1),
(11, '2019_02_22_215106_add_column_is_admin_users', 2),
(12, '2019_02_22_215356_add_column_user_id', 2),
(13, '2019_02_27_210925_add_column_user_id', 3),
(14, '2019_03_13_103029_add_column_user_id', 4),
(15, '2019_03_13_103809_add_column_user_id', 5),
(16, '2019_03_13_125436_add_column_photo_infos', 6),
(17, '2019_03_13_134954_add_column_photo_salles', 7),
(18, '2019_03_13_142213_add_column_photo_categories', 8),
(19, '2019_04_09_101419_create_notifications_table', 9),
(20, '2019_04_17_212004_add_column_subject_contacts', 10);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('077ab772-3f0e-4b94-b527-0d206290306d', 'App\\Notifications\\newnotification', 'App\\User', 1, '{\"user\":\"you have a new category ana je ma appel added by bouain \"}', '2019-04-21 13:57:27', '2019-04-21 13:57:27', '2019-04-21 13:57:27'),
('c4eca7c4-92db-4a06-9ced-04af119d1883', 'App\\Notifications\\newnotification', 'App\\User', 6, '{\"user\":\"you have a new category ana je ma appel added by bouain \"}', NULL, '2019-04-21 13:57:27', '2019-04-21 13:57:27'),
('f55ac48b-893e-458d-9875-3ef0219698bb', 'App\\Notifications\\newnotification', 'App\\User', 1, '{\"user\":\"we have new categoryana je ma appeladded by bouain ali\"}', '2019-04-21 13:47:31', '2019-04-21 13:30:01', '2019-04-21 13:47:31'),
('17ec74b1-481e-4c92-935c-67232ed70893', 'App\\Notifications\\newnotification', 'App\\User', 6, '{\"user\":\"we have new categoryana je ma appeladded by bouain ali\"}', NULL, '2019-04-21 13:30:01', '2019-04-21 13:30:01'),
('9891524b-79cc-4497-ac5e-ed1ef8128855', 'App\\Notifications\\newnotification', 'App\\User', 6, '{\"user\":\" <h2>you have a new category<\\/h2> <h5>ana je ma appel <\\/h5>added by bouain \"}', NULL, '2019-04-21 13:39:21', '2019-04-21 13:39:21'),
('1b804fb4-1940-4296-9088-0f94d5c85ddc', 'App\\Notifications\\newnotification', 'App\\User', 1, '{\"user\":\" <h2>you have a new category<\\/h2> <h5>ana je ma appel <\\/h5>added by bouain \"}', '2019-04-21 13:47:31', '2019-04-21 13:39:21', '2019-04-21 13:47:31'),
('2810a646-f066-4591-be3c-f19b39453010', 'App\\Notifications\\newnotification', 'App\\User', 1, '{\"user\":\" we have new categoryana je ma appeladded by bouain \"}', '2019-04-21 13:47:31', '2019-04-21 13:34:49', '2019-04-21 13:47:31'),
('0d6c87bc-908f-4fe7-b42c-41ec029a37ed', 'App\\Notifications\\newnotification', 'App\\User', 6, '{\"user\":\" we have new categoryana je ma appeladded by bouain \"}', NULL, '2019-04-21 13:34:49', '2019-04-21 13:34:49');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `salles_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`id`, `user_id`, `name`, `url`, `photo`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(41, 1, 'bouain ali', 'my names ali', 'public/0D70bLBeMLQz06LuVtneK8oxCd9BLPygSjFInc4n.jpeg', 'thanks for ever  evry body', NULL, '2019-04-07 09:40:30', '2019-04-16 06:22:41');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `prenom`, `adresse`, `telephone`, `date`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'bouain', 'hello', 'ferig', '51681984', '2019-02-21', 'fredejguide@gmail.com', NULL, '$2y$10$WGqsm7yaZj.C/rdNmbPKA.X8k7aKduZUEvOPA4CNsGlhJ8CdND8Nm', 'mZhKqof7A15SxiPrcykUA23xE4qUH9Vi8vZxTl1HEaD7dSGIglGHooYdchUb', '2019-02-22 20:40:01', '2019-02-22 20:40:01', 1),
(6, 'bouain ali', 'herli', 'fredej', '51651561', '2019-04-19', 'sami@gmail.com', NULL, '$2y$10$44i0JgJexC.Mw/jYpkGWIO0eFljr/BK2.l5gxGCQNoMl4AXcX1mau', 'xNrWUZjFjW669A87vJKxVjqpbwJkxmunGNsThxToKLwVg78PsZ0tkkriMHTk', '2019-04-16 15:33:24', '2019-04-16 15:33:24', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
