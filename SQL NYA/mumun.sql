-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2018 at 01:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mumun`
--

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2018_02_01_070209_create_siswas_table', 1);

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
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cita_cita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nis`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `cita_cita`, `hobi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 12, 'udin', 'Bandung', '1998-02-12', 'Junti', 'TNI', 'Lari', 'ha.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cahaya', 'gilang@gmail.com', '$2y$10$0FaDBIAo3ziRPM6ddB7mBuwsgqYPteHyi6iZMSMv5u8bHc67iXZoS', 'WOu4DfKHwJb8xERtnD2fIvqIjtkGkMUiinocovHxWf4ttplXh4YQA4KAj5Qu', '2018-02-02 05:50:07', '2018-02-02 05:50:07'),
(2, 'Cahaya', 'gilangg@gmail.com', '$2y$10$yGk5XSHcvmVC1nMSS6ckeOxabMEZ1tY2w/Pl43Rt8.fWPniHfkfQC', 'Der6dkq2Yxwjp1pnHWPFtRVQ1OAsXYQdfxpaW85140U6EDE1hJCr469pkZng', '2018-02-02 06:00:03', '2018-02-02 06:00:03'),
(3, 'Cahaya', 'cahaya@gmail.com', '$2y$10$z9CnvpxVQaV4pbtIZMzaeuwjtmgb2x034VJ3TSY7fKjSgdnC7xycy', 'oPusyqrubLb3fOUkVInoZi6eyuMhBuAiww54CFLVjCOW45S2fW7RO6hLcjeg', '2018-02-02 06:11:12', '2018-02-02 06:11:12'),
(4, 'mimin', 'mimin@gmail.com', '$2y$10$7sKN8LNsWrRNE/uWQhKvReRf8NhBscmJcI6A0Mbo0ZJuiNDuPPHd2', 'QnIaI9k6CumJxd9gRbrhhVFijRhFagV7llxXkRk6JHXNWPtzRnin13kmGnXD', '2018-02-02 06:16:12', '2018-02-02 06:16:12'),
(5, 'Cahaya', 'baba@gmail.com', '$2y$10$hqKLsc0EnVS31g.Vj2/hquEqd6aPMZWilvxEyigpqgPNTItHT1272', 'FeaxGWEgl2cEBbaN90fLDFK25StFkn2irB7pgRmr5BI6qs5gIMbFohnJn534', '2018-02-03 00:27:59', '2018-02-03 00:27:59'),
(6, 'CAH', 'cah@gmail.com', '$2y$10$AyGlDt9qr7M2I8sj1m270./Rdtpoc00Vo1Dqyk1ShADLrmvpHmn7e', '4EXAc0EyUJQFUxkd1IODcKu63srClBfgxEQZok005wk1YY8Mo41LhuQnT6Pr', '2018-02-03 04:18:49', '2018-02-03 04:18:49');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
