-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 07:21 AM
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
-- Database: `telkadhanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

CREATE TABLE `attendance_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('present','absent','halfday','null') DEFAULT NULL,
  `fuel` enum('yes','no') DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brokerage_bills`
--

CREATE TABLE `brokerage_bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contractno` bigint(20) UNSIGNED NOT NULL,
  `contractdate` varchar(255) NOT NULL,
  `purchaser` bigint(20) UNSIGNED NOT NULL,
  `seller` bigint(20) UNSIGNED NOT NULL,
  `weight` varchar(255) NOT NULL,
  `tanker` varchar(255) NOT NULL,
  `transporter` varchar(255) NOT NULL,
  `agent` varchar(255) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `pono` varchar(255) NOT NULL,
  `comm` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brokerage_bills`
--

INSERT INTO `brokerage_bills` (`id`, `contractno`, `contractdate`, `purchaser`, `seller`, `weight`, `tanker`, `transporter`, `agent`, `invoice`, `pono`, `comm`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-10-07', 2, 3, '50', 'MP61561', 'transporter1', 'agent1', '1', '1324657985', '100', '2023-10-07 02:15:08', '2023-10-07 02:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `cash_books`
--

CREATE TABLE `cash_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `reason` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `paid_by` varchar(255) NOT NULL,
  `paid_to` varchar(255) NOT NULL,
  `note` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cash_books`
--

INSERT INTO `cash_books` (`id`, `date`, `reason`, `amount`, `paid_by`, `paid_to`, `note`, `created_at`, `updated_at`) VALUES
(1, '2023-10-09', 1, 100, 'me', 'you', 'Lunch tea', '2023-10-09 03:20:55', '2023-10-09 03:20:55'),
(2, '2023-10-09', 2, 500, 'me', 'you', 'Weekly Fuel to employee', '2023-10-09 03:21:37', '2023-10-09 03:21:37'),
(3, '2023-10-09', 3, 50, 'me', 'you', 'Flipkart', '2023-10-09 03:23:21', '2023-10-09 03:23:21'),
(4, '2023-10-09', 3, 100, 'me', 'you', 'Amazon', '2023-10-09 03:28:03', '2023-10-09 03:28:03'),
(5, '2023-10-09', 4, 56, 'me', 'you', 'testing', '2023-10-09 03:41:48', '2023-10-09 03:41:48'),
(6, '2023-10-09', 5, 63, 'me', 'you', 'testing2', '2023-10-09 03:42:20', '2023-10-09 03:42:20'),
(7, '2023-10-09', 6, 212, 'me', 'you', NULL, '2023-10-09 03:46:25', '2023-10-09 03:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `contract_notes`
--

CREATE TABLE `contract_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderno` bigint(20) UNSIGNED DEFAULT NULL,
  `date` date NOT NULL,
  `purchaser` varchar(255) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `commodity` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `time` date NOT NULL,
  `condition` longtext DEFAULT NULL,
  `charge` int(11) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `version` int(11) NOT NULL DEFAULT 1,
  `status` enum('cancelled','pending','delivered') NOT NULL DEFAULT 'pending',
  `remaining` varchar(255) DEFAULT '0',
  `delivered` varchar(255) NOT NULL DEFAULT '0',
  `fdate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pfirm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contract_notes`
--

INSERT INTO `contract_notes` (`id`, `orderno`, `date`, `purchaser`, `seller`, `commodity`, `quantity`, `rate`, `time`, `condition`, `charge`, `gst`, `version`, `status`, `remaining`, `delivered`, `fdate`, `created_at`, `updated_at`, `pfirm`) VALUES
(1, 1, '2023-10-07', '2', '3', 'Soya Acid Oil', '450', '67.5', '2023-10-17', 'Container should be sealed.', 100, '18', 1, 'pending', '400', '50', '2023-10-30', '2023-10-07 01:30:43', '2023-10-07 02:15:08', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `adhaar` varchar(255) DEFAULT NULL,
  `pan` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `salary` bigint(20) DEFAULT NULL,
  `bank` longtext DEFAULT NULL,
  `members` int(11) DEFAULT NULL,
  `joining` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses_categories`
--

CREATE TABLE `expenses_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses_categories`
--

INSERT INTO `expenses_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tea and Snacks', '2023-10-09 03:20:35', '2023-10-09 03:20:35'),
(2, 'Fuel', '2023-10-09 03:21:10', '2023-10-09 03:21:10'),
(3, 'Courier', '2023-10-09 03:22:59', '2023-10-09 03:22:59'),
(4, 'category1', '2023-10-09 03:41:27', '2023-10-09 03:41:27'),
(5, 'category2', '2023-10-09 03:42:01', '2023-10-09 03:42:01'),
(6, 'category3', '2023-10-09 03:46:07', '2023-10-09 03:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `extra_fields`
--

CREATE TABLE `extra_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fid` bigint(20) NOT NULL,
  `sign` enum('employee','client') NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `family_members`
--

CREATE TABLE `family_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `pan` varchar(255) DEFAULT NULL,
  `adhaar` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `firms`
--

CREATE TABLE `firms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pan` varchar(255) DEFAULT NULL,
  `tanno` varchar(255) DEFAULT NULL,
  `fssai` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gst` varchar(255) DEFAULT NULL,
  `iec` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `bank` longtext DEFAULT NULL,
  `comm` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firms`
--

INSERT INTO `firms` (`id`, `name`, `email`, `pan`, `tanno`, `fssai`, `phone`, `gst`, `iec`, `address`, `bank`, `comm`, `created_at`, `updated_at`) VALUES
(1, 'Manojkumar Rameshchandra Agrawal (Bhaya)', 'firm1@gmail.com', 'ABPPA9801R', NULL, NULL, '1234567890', NULL, NULL, 'firm1 address 1', '<p>Account Name: Manojkumar Rameshchandra Agrawal<br>Account No: 00362560010643<br>IFSC Code: HDFC0000036<br>Bank Name: HDFC<br>Branch Name: SOUTH TUKOGANJ.INDORE<br>&nbsp;</p>', '100', '2023-10-07 00:02:50', '2023-10-07 00:27:31');

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
(5, '2023_09_15_061513_create_employees_table', 2),
(7, '2023_09_15_062843_create_attendance_records_table', 3),
(8, '2023_09_18_120923_create_cash_books_table', 4),
(9, '2023_09_18_122759_add_column_to_table_cash_books', 5),
(10, '2023_09_19_051552_add_column_to_cash_books_table', 6),
(11, '2023_09_19_100011_add_column_to_users_table', 7),
(12, '2023_09_20_070707_create_contract_notes_table', 8),
(13, '2023_09_21_051057_add_column_to_contract_notes_table', 9),
(14, '2023_09_21_053359_add_new_column_to_contract_notes_table', 10),
(15, '2014_10_12_100000_create_password_resets_table', 11),
(16, '2023_09_22_060317_add_column_to_attendance_records_table', 11),
(17, '2023_09_22_064821_add_column_to_employees_table', 12),
(18, '2023_09_22_075358_create_family_members_table', 13),
(20, '2023_09_22_112031_create_expenses_categories_table', 14),
(21, '2023_09_22_112645_add_column_to_cash_books_table', 15),
(22, '2023_09_22_113710_add_column_to_cash_books_table', 16),
(23, '2023_09_25_041829_add_column_to_users_table', 17),
(24, '2023_09_26_091809_create_delivery_books_table', 18),
(25, '2023_09_27_034958_add_column_to_contract_notes_table', 19),
(26, '2023_09_27_070349_add_column_to_table_contract_notes', 20),
(28, '2023_09_27_111510_create_brokerage_bills_table', 21),
(29, '2023_09_28_045926_add_column_to_contract_notes_table', 22),
(30, '2023_09_28_091501_add_column_to_brokerage_bills_table', 23),
(31, '2023_09_29_033137_add_column_to_brokerage_bills_table', 24),
(32, '2023_10_06_044554_create_extra_fields_table', 25),
(33, '2023_10_06_064001_add_column_to_employees_table', 26),
(34, '2023_10_06_125105_add_column_to_users_table', 27),
(35, '2023_10_07_032800_create_firms_table', 28),
(36, '2023_10_07_033352_add_column_to_users_table', 29),
(38, '2023_10_07_074011_create_table_brokerage_bills', 30),
(39, '2023_10_09_040633_add_column_to_contract_notes_table', 31),
(40, '2023_10_10_035047_add_column_to_users_table', 32);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` enum('admin','client') NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `pan` varchar(255) DEFAULT NULL,
  `gst` varchar(255) DEFAULT NULL,
  `fassi` varchar(255) DEFAULT NULL,
  `iec` varchar(255) DEFAULT NULL,
  `faddress` longtext DEFAULT NULL,
  `baddress` longtext DEFAULT NULL,
  `bank` longtext DEFAULT NULL,
  `cperson` varchar(255) DEFAULT NULL,
  `cnumber` bigint(20) DEFAULT NULL,
  `firm` bigint(20) UNSIGNED DEFAULT NULL,
  `tanno` varchar(255) DEFAULT NULL,
  `comm` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `invoiceno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `password`, `address`, `pan`, `gst`, `fassi`, `iec`, `faddress`, `baddress`, `bank`, `cperson`, `cnumber`, `firm`, `tanno`, `comm`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `invoiceno`) VALUES
(1, 'Aayush', 'admin@gmail.com', 'admin', 0, '$2y$10$HEEFnMt2PcX./FxO1aePJewK90REonpCDsnUwXdGdZg9hsYZYMjrC', '0', NULL, NULL, NULL, NULL, '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-06 22:12:37', '2023-10-06 22:12:37', '01A'),
(2, 'NutriVita Oil, Indore', 'c1@gmail.com', 'client', 7894561236, '$2y$10$KaxFiTxN2wsuPgVfalydjOafY0WEOeX77SKIVS2Db..dCBxC6NGEq', 'address 1', '741258963256', '798465132465', '132465798', '132465798', 'address 2', 'address 3', '<p>Account Name: c1<br>Account No: 123<br>IFSC Code: SB125IN<br>Bank Name: SBI<br>Branch Name: Indore<br>Any Other Remarks: None<br>&nbsp;</p>', 'c1', 7412589635, 1, '789654123654', '100', NULL, NULL, '2023-10-06 22:28:00', '2023-10-07 00:56:40', '02A'),
(3, 'Fortune Edible Oil, kota', 'c2@gmail.com', 'client', 7984651325, '$2y$10$7GaXwNzcrwinwX5vpfuv8OcEMvKaiTuXjtBjt5x5HqkpsMet7Jeli', 'address 1', '132465113246', '798465132465', '465132465798', '132465', 'address 2', 'address 3', '<p>Account Name: xyz1<br>Account No: 1231<br>IFSC Code: 132465<br>Bank Name: SBI<br>Branch Name: Indore<br>Any Other Remarks: None<br>&nbsp;</p>', 'c2', 1234651325, 1, '798465132465', '100', NULL, NULL, '2023-10-07 01:28:52', '2023-10-07 01:28:52', '03A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_records_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `brokerage_bills`
--
ALTER TABLE `brokerage_bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brokerage_bills_contractno_foreign` (`contractno`);

--
-- Indexes for table `cash_books`
--
ALTER TABLE `cash_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cash_books_reason_foreign` (`reason`);

--
-- Indexes for table `contract_notes`
--
ALTER TABLE `contract_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses_categories`
--
ALTER TABLE `expenses_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_fields`
--
ALTER TABLE `extra_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `family_members`
--
ALTER TABLE `family_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `family_members_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `firms`
--
ALTER TABLE `firms`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_firm_foreign` (`firm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brokerage_bills`
--
ALTER TABLE `brokerage_bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cash_books`
--
ALTER TABLE `cash_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contract_notes`
--
ALTER TABLE `contract_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses_categories`
--
ALTER TABLE `expenses_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `extra_fields`
--
ALTER TABLE `extra_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_members`
--
ALTER TABLE `family_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firms`
--
ALTER TABLE `firms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD CONSTRAINT `attendance_records_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `brokerage_bills`
--
ALTER TABLE `brokerage_bills`
  ADD CONSTRAINT `brokerage_bills_contractno_foreign` FOREIGN KEY (`contractno`) REFERENCES `contract_notes` (`id`);

--
-- Constraints for table `cash_books`
--
ALTER TABLE `cash_books`
  ADD CONSTRAINT `cash_books_reason_foreign` FOREIGN KEY (`reason`) REFERENCES `expenses_categories` (`id`);

--
-- Constraints for table `family_members`
--
ALTER TABLE `family_members`
  ADD CONSTRAINT `family_members_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_firm_foreign` FOREIGN KEY (`firm`) REFERENCES `firms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
