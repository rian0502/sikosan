-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 10:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikosan`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'administrator, level entitas yang mengurusi seluruh sistem'),
(2, 'customer', 'customer, level entitas yang hanya dapat melakukan pencarian kost'),
(3, 'owner', 'owner, level entitas yang dapat melakukan untuk memasarkan kosannya');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 4),
(2, 5),
(3, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'admin@gmail.com', 1, '2022-11-15 20:40:07', 1),
(2, '::1', 'owner1@gmail.com', 2, '2022-11-15 20:41:57', 1),
(3, '::1', 'owner2@gmail.com', 3, '2022-11-15 20:45:23', 1),
(4, '::1', 'customer1@gmail.com', 4, '2022-11-15 20:47:09', 1),
(5, '::1', 'customer2@gmail.com', 5, '2022-11-15 20:48:22', 1),
(6, '::1', 'admin@gmail.com', 1, '2022-11-15 21:54:06', 1),
(7, '::1', 'rfanstd24@gmail.com', NULL, '2022-11-19 19:54:55', 0),
(8, '::1', 'customer1@gmail.com', NULL, '2022-11-19 19:56:26', 0),
(9, '::1', 'customer1@gmail.com', 4, '2022-11-19 19:57:06', 1),
(10, '::1', 'customer2@gmail.com', 5, '2022-11-19 19:57:43', 1),
(11, '::1', 'admin@gmail.com', 1, '2022-11-19 20:03:35', 1),
(12, '::1', 'customer1@gmail.com', 4, '2022-11-19 20:09:35', 1),
(13, '::1', 'admin@gmail.com', 1, '2022-11-21 08:06:22', 1),
(14, '::1', 'customer2@gmail.com', 5, '2022-11-21 08:35:11', 1),
(15, '::1', 'customer1@gmail.com', 4, '2022-11-21 08:35:52', 1),
(16, '::1', 'customer2@gmail.com', 5, '2022-11-21 08:41:25', 1),
(17, '::1', 'admin@gmail.com', 1, '2022-11-21 14:02:28', 1),
(18, '::1', 'customer1@gmail.com', 4, '2022-11-21 14:15:54', 0),
(19, '::1', 'customer1@gmail.com', 4, '2022-11-21 14:16:29', 1),
(20, '::1', 'customer2@gmail.com', 5, '2022-11-21 14:17:00', 1),
(21, '::1', 'customer1@gmail.com', 4, '2022-11-21 14:43:49', 1),
(22, '::1', 'customer2@gmail.com', 5, '2022-11-21 14:44:20', 1),
(23, '::1', 'customer1@gmail.com', 4, '2022-11-21 15:45:58', 1),
(24, '::1', 'customer1@gmail.com', 4, '2022-11-21 15:56:28', 1),
(25, '::1', 'customer2@gmail.com', 5, '2022-11-21 15:57:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foto_kosan`
--

CREATE TABLE `foto_kosan` (
  `id_kosan` int(11) UNSIGNED NOT NULL,
  `id_foto` int(11) UNSIGNED NOT NULL,
  `nama_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foto_kosan`
--

INSERT INTO `foto_kosan` (`id_kosan`, `id_foto`, `nama_foto`) VALUES
(1, 1, '1668519779_721d2de77456e72e9c18.jpg'),
(1, 2, '1668519779_62ee9adae451b91cdfff.jpg'),
(2, 3, '1668519886_6e210f6bf8ae9de1dfdf.jpg'),
(2, 4, '1668519886_df8a5675cde4d783258c.jpg'),
(3, 5, '1668519969_1ceae67459718386ab1d.jpg'),
(3, 6, '1668519969_14ce00f9cd85d0aa50b7.jpg'),
(4, 7, '1668520012_2a0464578c6b9aa00869.jpg'),
(4, 8, '1668520012_ee6ce9031ed262c524db.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) UNSIGNED NOT NULL,
  `id_kosan` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `komentar` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kosan`
--

CREATE TABLE `kosan` (
  `id_kosan` int(11) UNSIGNED NOT NULL,
  `namaKost` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `type` enum('Putra','Putri','Campur') NOT NULL,
  `idPemilik` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kosan`
--

INSERT INTO `kosan` (`id_kosan`, `namaKost`, `alamat`, `kota`, `deskripsi`, `fasilitas`, `harga`, `type`, `idPemilik`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kosan Owner 1 - 1', 'Kampung Baru', 'Bandar Lampung', 'Lengkap', 'Kasur', 500000, 'Putra', 2, '2022-11-15 20:42:59', '2022-11-15 20:42:59', NULL),
(2, 'Kosan Owner 1 - 2', 'Pasar Rabu', 'Lampung Barat', 'Lengkap', 'Kasur', 500000, 'Putra', 2, '2022-11-15 20:44:46', '2022-11-15 20:44:46', NULL),
(3, 'Kosan Owner 2 - 1', 'Kedaton', 'Bandar Lampung', 'Lengkap', 'Kasur', 500000, 'Campur', 3, '2022-11-15 20:46:09', '2022-11-15 20:46:09', NULL),
(4, 'Kosan Owner 2 - 2', 'Kampung Baru', 'Bandar Lampung', 'Lengkap', 'Kasur', 500000, 'Campur', 3, '2022-11-15 20:46:52', '2022-11-15 20:46:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(24, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1668519324, 1),
(25, '2022-10-14-150527', 'App\\Database\\Migrations\\Kosan', 'default', 'App', 1668519324, 1),
(26, '2022-10-14-150528', 'App\\Database\\Migrations\\FotoKosan', 'default', 'App', 1668519324, 1),
(27, '2022-10-30-145214', 'App\\Database\\Migrations\\Wishlist', 'default', 'App', 1668519324, 1),
(28, '2022-11-03-151609', 'App\\Database\\Migrations\\Komentar', 'default', 'App', 1668519324, 1),
(29, '2022-11-03-151620', 'App\\Database\\Migrations\\ReplyKomentar', 'default', 'App', 1668519324, 1),
(30, '2022-11-10-114023', 'App\\Database\\Migrations\\ReportKosan', 'default', 'App', 1668519324, 1),
(31, '2022-11-15-085255', 'App\\Database\\Migrations\\ReportKomentar', 'default', 'App', 1668519324, 1),
(32, '2022-11-15-135026', 'App\\Database\\Migrations\\ReportReplyKomentar', 'default', 'App', 1668520298, 2),
(41, '2022-11-15-154213', 'App\\Database\\Migrations\\ReportKomentar', 'default', 'App', 1669017844, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reply_komentar`
--

CREATE TABLE `reply_komentar` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_komentar` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `reply` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report_komentar`
--

CREATE TABLE `report_komentar` (
  `id_report_komentar` int(11) UNSIGNED NOT NULL,
  `id_komentar` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_user_komentar` int(11) UNSIGNED NOT NULL,
  `laporan_komentar` text NOT NULL,
  `komentar_dilaporkan` text NOT NULL,
  `isReply` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_komentar`
--

INSERT INTO `report_komentar` (`id_report_komentar`, `id_komentar`, `id_user`, `id_user_komentar`, `laporan_komentar`, `komentar_dilaporkan`, `isReply`, `created_at`, `updated_at`) VALUES
(19, 6, 5, 4, 'Komentar ini mengandung pelecehan', 'AAA', 0, '2022-11-21 16:11:15', '2022-11-21 16:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `report_kosan`
--

CREATE TABLE `report_kosan` (
  `id_report` int(11) UNSIGNED NOT NULL,
  `id_kosan` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `report` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_kosan`
--

INSERT INTO `report_kosan` (`id_report`, `id_kosan`, `id_user`, `report`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 'Kosan Jelek', '2022-11-15 20:48:02', '2022-11-15 20:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `notlp` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namaLengkap`, `notlp`, `email`, `foto`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '082141053886', 'admin@gmail.com', NULL, '$2y$10$YUBG8ET3h4kByP5trbvxwe1lB0RyexxOmtX/i3jUef1tzgH2IWKru', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-15 20:36:29', '2022-11-15 20:36:29', NULL),
(2, 'Owner 1', '0821414274474', 'owner1@gmail.com', NULL, '$2y$10$Asfpm0ToPRrAeeZKTd00h.Og7ZCHkTvthYeeU7XqRdeGnlaj9XANC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-15 20:37:33', '2022-11-15 20:37:33', NULL),
(3, 'Owner 2', '08212418475', 'owner2@gmail.com', NULL, '$2y$10$aGs0Y5ipcneAy.814XOuXuEjGbY19JHSYGH9.GHvex8YkGLTtivUa', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-15 20:38:07', '2022-11-15 20:38:07', NULL),
(4, 'Customer 1', '082418471847', 'customer1@gmail.com', NULL, '$2y$10$3gfCMpm0DiCqVoK9G1ghMOX2UEtjmoyjRSmnH4AXevy8a6E78ZGW6', NULL, NULL, NULL, NULL, 'banned', 'Celup', 1, 0, '2022-11-15 20:38:42', '2022-11-21 16:10:26', NULL),
(5, 'Customer 2', '0821657645376', 'customer2@gmail.com', NULL, '$2y$10$tCX5lI7K0zu3MlSCR64adOcrE0ixdPA.xNuXFfIzomhRSPNA8jes6', NULL, NULL, NULL, NULL, 'banned', 'Haha', 1, 0, '2022-11-15 20:39:11', '2022-11-21 16:20:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(11) UNSIGNED NOT NULL,
  `id_kosan` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `id_kosan`, `id_user`) VALUES
(1, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `foto_kosan`
--
ALTER TABLE `foto_kosan`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `foto_kosan_id_kosan_foreign` (`id_kosan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `komentar_id_kosan_foreign` (`id_kosan`),
  ADD KEY `komentar_id_user_foreign` (`id_user`);

--
-- Indexes for table `kosan`
--
ALTER TABLE `kosan`
  ADD PRIMARY KEY (`id_kosan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply_komentar`
--
ALTER TABLE `reply_komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_komentar_id_komentar_foreign` (`id_komentar`),
  ADD KEY `reply_komentar_id_user_foreign` (`id_user`);

--
-- Indexes for table `report_komentar`
--
ALTER TABLE `report_komentar`
  ADD PRIMARY KEY (`id_report_komentar`);

--
-- Indexes for table `report_kosan`
--
ALTER TABLE `report_kosan`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto_kosan`
--
ALTER TABLE `foto_kosan`
  MODIFY `id_foto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kosan`
--
ALTER TABLE `kosan`
  MODIFY `id_kosan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `reply_komentar`
--
ALTER TABLE `reply_komentar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `report_komentar`
--
ALTER TABLE `report_komentar`
  MODIFY `id_report_komentar` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `report_kosan`
--
ALTER TABLE `report_kosan`
  MODIFY `id_report` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `foto_kosan`
--
ALTER TABLE `foto_kosan`
  ADD CONSTRAINT `foto_kosan_id_kosan_foreign` FOREIGN KEY (`id_kosan`) REFERENCES `kosan` (`id_kosan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_id_kosan_foreign` FOREIGN KEY (`id_kosan`) REFERENCES `kosan` (`id_kosan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reply_komentar`
--
ALTER TABLE `reply_komentar`
  ADD CONSTRAINT `reply_komentar_id_komentar_foreign` FOREIGN KEY (`id_komentar`) REFERENCES `komentar` (`id_komentar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reply_komentar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
