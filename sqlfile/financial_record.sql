-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2024 at 02:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `financial_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pemasukans`
--

CREATE TABLE `kategori_pemasukans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_pemasukan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_pemasukans`
--

INSERT INTO `kategori_pemasukans` (`id`, `kategori_pemasukan`, `created_at`, `updated_at`) VALUES
(3, 'Sewa', '2024-11-10 11:21:36', '2024-11-10 11:26:31'),
(4, 'Gaji', '2024-11-10 11:21:49', '2024-11-10 11:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pengeluarans`
--

CREATE TABLE `kategori_pengeluarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_pengeluaran` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_pengeluarans`
--

INSERT INTO `kategori_pengeluarans` (`id`, `kategori_pengeluaran`, `created_at`, `updated_at`) VALUES
(1, 'makan', '2024-11-10 13:18:50', '2024-11-10 13:18:50'),
(2, 'transportasi', '2024-11-10 13:18:57', '2024-11-10 13:18:57'),
(3, 'snack', '2024-11-10 13:19:01', '2024-11-10 13:19:01'),
(4, 'peralatan', '2024-11-10 13:19:07', '2024-11-10 13:19:07');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_10_151950_create_pemasukans_table', 1),
(5, '2024_11_10_152403_create_kategori_pemasukans_table', 1),
(6, '2024_11_10_165705_create_kategori_pengeluarans_table', 1),
(7, '2024_11_10_194427_create_pengeluarans_table', 2);

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
-- Table structure for table `pemasukans`
--

CREATE TABLE `pemasukans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemasukans`
--

INSERT INTO `pemasukans` (`id`, `nama`, `kategori_id`, `tanggal`, `jumlah`, `created_at`, `updated_at`) VALUES
(4, 'gajian', 4, '2024-11-11', 3000000, '2024-11-10 11:44:09', '2024-11-10 18:38:32'),
(5, 'sewa masuk', 3, '2024-11-11', 700000, '2024-11-10 11:44:56', '2024-11-10 18:38:42'),
(10, 'uang bulanan', 4, '2024-11-10', 1500000, '2024-11-10 13:23:19', '2024-11-10 18:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluarans`
--

CREATE TABLE `pengeluarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengeluarans`
--

INSERT INTO `pengeluarans` (`id`, `nama`, `kategori_id`, `tanggal`, `jumlah`, `created_at`, `updated_at`) VALUES
(2, 'pecel ayam', 1, '2024-11-10', 15000, '2024-11-10 13:21:40', '2024-11-10 13:21:40'),
(3, 'pertalite', 2, '2024-11-11', 38000, '2024-11-10 13:22:12', '2024-11-10 13:22:12'),
(4, 'shampoo', 4, '2024-11-11', 40000, '2024-11-10 13:22:30', '2024-11-10 13:22:30'),
(5, 'bubur ayam', 1, '2024-11-11', 15000, '2024-11-10 18:29:33', '2024-11-10 18:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fYdkF3Bs444NP9F5oYgXn3tXiXT6laYU2yCmkDft', 11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOW5HcnAzTWRZeU5vQmZjUjJTSUZpc1plSFpkNzRQalpZNlBuS1dsdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMTt9', 1731289990);

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Odell Quigley V', 'mckenna.schimmel@example.net', '2024-11-10 10:56:12', '$2y$12$CaT7curCsELFn9Tfvag7ceor9BtB10qGHTsQIXb0O1hQcpTBzyUgu', 'XlKaZtleYX', '2024-11-10 10:56:12', '2024-11-10 10:56:12'),
(2, 'Adaline Champlin', 'sim.kuhic@example.org', '2024-11-10 10:56:12', '$2y$12$CaT7curCsELFn9Tfvag7ceor9BtB10qGHTsQIXb0O1hQcpTBzyUgu', 'hgb9HC0PE5', '2024-11-10 10:56:12', '2024-11-10 10:56:12'),
(3, 'Neva Turcotte', 'lemuel.kessler@example.com', '2024-11-10 10:56:12', '$2y$12$CaT7curCsELFn9Tfvag7ceor9BtB10qGHTsQIXb0O1hQcpTBzyUgu', 'pL4FJWHvYm', '2024-11-10 10:56:12', '2024-11-10 10:56:12'),
(4, 'Nona Swaniawski', 'jveum@example.net', '2024-11-10 10:56:12', '$2y$12$CaT7curCsELFn9Tfvag7ceor9BtB10qGHTsQIXb0O1hQcpTBzyUgu', '6TcBC4RODs', '2024-11-10 10:56:12', '2024-11-10 10:56:12'),
(5, 'Irma Brakus', 'karlie26@example.net', '2024-11-10 10:56:12', '$2y$12$CaT7curCsELFn9Tfvag7ceor9BtB10qGHTsQIXb0O1hQcpTBzyUgu', 'p4opAijypR', '2024-11-10 10:56:12', '2024-11-10 10:56:12'),
(6, 'Pietro Bashirian', 'oschumm@example.org', '2024-11-10 10:56:12', '$2y$12$CaT7curCsELFn9Tfvag7ceor9BtB10qGHTsQIXb0O1hQcpTBzyUgu', 'GZsEuh7Wol', '2024-11-10 10:56:12', '2024-11-10 10:56:12'),
(7, 'Ewald Towne', 'rosendo57@example.net', '2024-11-10 10:56:12', '$2y$12$CaT7curCsELFn9Tfvag7ceor9BtB10qGHTsQIXb0O1hQcpTBzyUgu', 'D1qXeNaPoj', '2024-11-10 10:56:12', '2024-11-10 10:56:12'),
(8, 'Cora Walter', 'terrance61@example.net', '2024-11-10 10:56:12', '$2y$12$CaT7curCsELFn9Tfvag7ceor9BtB10qGHTsQIXb0O1hQcpTBzyUgu', 'ICUcJaGZmF', '2024-11-10 10:56:12', '2024-11-10 10:56:12'),
(9, 'Grady O\'Hara', 'novella.braun@example.net', '2024-11-10 10:56:12', '$2y$12$CaT7curCsELFn9Tfvag7ceor9BtB10qGHTsQIXb0O1hQcpTBzyUgu', 'v4bDzTs8J7', '2024-11-10 10:56:12', '2024-11-10 10:56:12'),
(10, 'Mr. Royce Doyle III', 'afeeney@example.org', '2024-11-10 10:56:12', '$2y$12$CaT7curCsELFn9Tfvag7ceor9BtB10qGHTsQIXb0O1hQcpTBzyUgu', 'dds6Pz36cU', '2024-11-10 10:56:12', '2024-11-10 10:56:12'),
(11, 'admin', 'admin@gmail.com', NULL, '$2y$12$blcrcIBwSt81klRtKqUHDuKqDRlQ/kzUl.PkeR2ivJ7oD7D5RYEr6', NULL, '2024-11-10 11:20:00', '2024-11-10 11:20:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_pemasukans`
--
ALTER TABLE `kategori_pemasukans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_pengeluarans`
--
ALTER TABLE `kategori_pengeluarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pemasukans`
--
ALTER TABLE `pemasukans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_pemasukans`
--
ALTER TABLE `kategori_pemasukans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_pengeluarans`
--
ALTER TABLE `kategori_pengeluarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemasukans`
--
ALTER TABLE `pemasukans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemasukans`
--
ALTER TABLE `pemasukans`
  ADD CONSTRAINT `pemasukans_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_pemasukans` (`id`);

--
-- Constraints for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD CONSTRAINT `pengeluarans_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_pengeluarans` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
