-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 09:02 AM
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

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`id`, `employee_id`, `status`, `fuel`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 'halfday', NULL, '2023-09-18', '2023-09-18 01:40:59', '2023-09-18 01:41:31'),
(2, 3, 'present', NULL, '2023-09-18', '2023-09-18 01:40:59', '2023-09-18 01:41:31'),
(3, 2, 'present', NULL, '2023-09-17', '2023-09-18 06:09:36', '2023-09-18 06:09:36'),
(4, 3, 'present', NULL, '2023-09-17', '2023-09-18 06:09:36', '2023-09-18 06:09:36'),
(5, 2, 'present', NULL, '2023-09-19', '2023-09-19 02:40:57', '2023-09-19 02:40:57'),
(6, 3, 'present', NULL, '2023-09-19', '2023-09-19 02:40:57', '2023-09-19 02:40:57'),
(7, 2, 'present', NULL, '2023-09-21', '2023-09-21 05:40:49', '2023-09-21 05:40:49'),
(8, 3, 'absent', NULL, '2023-09-21', '2023-09-21 05:40:49', '2023-09-21 05:40:49'),
(9, 4, 'halfday', NULL, '2023-09-21', '2023-09-21 05:40:49', '2023-09-21 05:40:49'),
(10, 2, 'present', 'yes', '2023-09-22', '2023-09-22 00:46:08', '2023-09-22 00:46:08'),
(11, 3, 'halfday', 'yes', '2023-09-22', '2023-09-22 00:46:08', '2023-09-22 00:46:08'),
(12, 4, 'absent', 'no', '2023-09-22', '2023-09-22 00:46:08', '2023-09-22 00:46:08'),
(13, 2, 'present', 'yes', '2023-09-26', '2023-09-26 06:44:41', '2023-09-26 06:44:41'),
(14, 3, 'present', 'yes', '2023-09-26', '2023-09-26 06:44:41', '2023-09-26 06:44:41'),
(15, 4, 'present', 'yes', '2023-09-26', '2023-09-26 06:44:41', '2023-09-26 06:44:41'),
(16, 5, 'absent', 'no', '2023-09-26', '2023-09-26 06:44:41', '2023-09-26 06:44:41'),
(17, 6, 'halfday', 'yes', '2023-09-26', '2023-09-26 06:44:41', '2023-09-26 06:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `brokerage_bills`
--

CREATE TABLE `brokerage_bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contractno` bigint(20) UNSIGNED NOT NULL,
  `contractdate` date NOT NULL,
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
(2, 10, '2023-09-21', 1, 3, '7', 'MP4654976', 'transporter1', 'agent1', '1', '4845656532', '100', '2023-09-28 22:23:49', '2023-09-28 22:23:49'),
(3, 6, '2023-09-27', 3, 3, '25', 'MP86496656', 'transporter2', 'agent2', '2', '45451264951', '100', '2023-09-28 23:54:20', '2023-09-28 23:54:20'),
(4, 9, '2023-09-26', 3, 5, '25', 'MP7865245', 'transporter3', 'agent3', '3', '45026532655', '100', '2023-09-29 00:56:03', '2023-09-29 00:56:03'),
(5, 9, '2023-09-26', 3, 5, '25', 'MP7865245', 'transporter3', 'agent3', '3', '45026532655', '100', '2023-09-29 00:56:29', '2023-09-29 00:56:29');

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
(1, '2023-09-22', 1, 100, 'me', 'you', NULL, '2023-09-22 06:44:48', '2023-09-22 06:44:48'),
(2, '2023-09-22', 1, 50, 'aayush', 'you', 'petrol mehnga h', '2023-09-22 06:47:44', '2023-09-22 06:47:44'),
(3, '2023-09-26', 2, 100, 'xyz', 'you', '****', '2023-09-26 06:54:01', '2023-09-26 06:54:01');

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
  `condition` longtext NOT NULL,
  `charge` int(11) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `version` int(11) NOT NULL DEFAULT 1,
  `status` enum('cancelled','pending','delivered') NOT NULL DEFAULT 'pending',
  `remaining` varchar(255) DEFAULT '0',
  `delivered` varchar(255) NOT NULL DEFAULT '0',
  `fdate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contract_notes`
--

INSERT INTO `contract_notes` (`id`, `orderno`, `date`, `purchaser`, `seller`, `commodity`, `quantity`, `rate`, `time`, `condition`, `charge`, `gst`, `version`, `status`, `remaining`, `delivered`, `fdate`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-09-21', '1', '1', 'oil', '7', '100', '2023-09-07', 'testing', 100, '18', 1, 'pending', NULL, '', '2023-09-07', '2023-09-21 00:30:14', '2023-09-21 00:30:14'),
(2, 1, '2023-09-21', '1', '1', 'oil', '7', '100', '2023-09-05', 'testing 1', 100, '18', 2, 'pending', NULL, '', '2023-09-05', '2023-09-21 00:53:12', '2023-09-21 00:53:12'),
(3, 2, '2023-09-21', '1', '1', 'oil', '456', '100', '2023-10-17', 'testingggg', 50, '18', 1, 'pending', NULL, '', '2023-10-17', '2023-09-21 01:39:03', '2023-09-21 01:39:03'),
(4, 3, '2023-09-21', '1', '2', 'oil', '7', '100', '2023-09-30', 'testinggg', 100, '18', 1, 'pending', NULL, '', '2023-09-30', '2023-09-21 06:09:22', '2023-09-21 06:09:22'),
(5, 3, '2023-09-21', '1', '2', 'oil', '7', '100', '2023-09-30', 'testinggg', 100, '18', 2, 'pending', NULL, '', '2023-09-30', '2023-09-21 06:17:52', '2023-09-21 06:17:52'),
(6, 4, '2023-09-27', '3', '3', 'oil', '7', '100', '2023-10-05', 'cv b mn', 50, '4798465498764', 1, 'pending', '0', '7', '2023-10-05', '2023-09-25 02:18:33', '2023-09-28 23:54:20'),
(7, 5, '2023-09-25', '1', '3', 'oil', '456', '100', '2023-09-30', 'frhgsh', 50, '18', 1, 'pending', NULL, '', '2023-09-30', '2023-09-25 03:23:51', '2023-09-25 03:23:51'),
(8, 5, '2023-09-25', '5', '6', 'oil', '456', '100', '2023-09-30', 'frhgsh', 50, '18', 2, 'pending', NULL, '', '2023-09-30', '2023-09-26 05:02:02', '2023-09-26 05:02:02'),
(9, 6, '2023-09-26', '3', '5', 'oil', '45', '100', '2023-09-29', 'testing', 49, '18', 1, 'pending', '20', '25', '2023-09-30', '2023-09-26 05:03:13', '2023-09-29 00:56:29'),
(10, 1, '2023-09-21', '1', '3', 'oil', '7', '100', '2023-09-24', 'testing 1', 100, '18', 3, 'delivered', NULL, '14', '2023-09-24', '2023-09-26 23:53:18', '2023-09-28 22:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_books`
--

CREATE TABLE `delivery_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderno` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `purchaser` varchar(255) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `commodity` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `deliverydate` date NOT NULL,
  `charge` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `version` int(11) NOT NULL DEFAULT 1,
  `deliver_quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `adhaar` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `salary` bigint(20) NOT NULL,
  `bank` longtext NOT NULL,
  `members` int(11) NOT NULL,
  `joining` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `age`, `adhaar`, `pan`, `phone`, `salary`, `bank`, `members`, `joining`, `created_at`, `updated_at`) VALUES
(2, 'Aayush Patidar', 24, '', '', 9982414226, 100000, '', 0, '2023-06-15', '2023-09-15 02:46:02', '2023-09-15 02:47:20'),
(3, 'Aman', 26, '', '', 741852963, 100000, '', 0, '2023-09-15', '2023-09-15 09:11:47', '2023-09-15 09:11:47'),
(4, 'employee 1', 23, '', '', 7418529635, 100000, '', 0, '2023-09-21', '2023-09-21 05:37:20', '2023-09-21 05:37:20'),
(5, 'employee 2', 25, '963285217412', 'KN665669JID56', 9638527415, 50000, 'SBI8596396IN', 2, '2023-09-22', '2023-09-22 02:34:43', '2023-09-22 02:34:43'),
(6, 'employee 3', 25, '963285217412', 'KN665669JID56', 9638527415, 50000, 'SBI8596396IN', 2, '2023-09-22', '2023-09-22 02:35:16', '2023-09-22 02:35:34');

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
(1, 'Fuel expenses', '2023-09-22 06:37:33', '2023-09-22 06:37:33'),
(2, 'Ent', '2023-09-26 06:53:24', '2023-09-26 06:53:24');

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
  `phone` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `adhaar` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `family_members`
--

INSERT INTO `family_members` (`id`, `employee_id`, `name`, `phone`, `pan`, `adhaar`, `relation`, `created_at`, `updated_at`) VALUES
(1, 5, 'member 2', '8527419635', 'FGH852741963', '963574129875', 'relation 2', '2023-09-22 02:34:43', '2023-09-22 02:34:43'),
(2, 6, 'member 1', '7418529635', '985675DFGHJ', '963574159635', 'relation 1', '2023-09-22 02:35:16', '2023-09-22 02:35:16'),
(3, 6, 'member 2', '8527419635', 'FGH852741963', '963574129875', 'relation 2', '2023-09-22 02:35:16', '2023-09-22 02:35:16'),
(4, 2, 'member 1', '7418529635', 'FGHJK987956FD', '789596324712', 'relation 1', '2023-09-22 04:45:58', '2023-09-22 04:45:58'),
(5, 3, 'member 1', '7418529635', 'IJHBV65132GFHJK', '741859638512', 'relation 1', '2023-09-22 04:51:13', '2023-09-22 04:51:37');

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
(31, '2023_09_29_033137_add_column_to_brokerage_bills_table', 24);

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
  `email` varchar(255) NOT NULL,
  `role` enum('admin','client') NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `pan` varchar(255) DEFAULT NULL,
  `gst` varchar(255) DEFAULT NULL,
  `fassi` varchar(255) DEFAULT NULL,
  `iec` varchar(255) DEFAULT NULL,
  `faddress` longtext NOT NULL,
  `baddress` longtext NOT NULL,
  `bank` longtext NOT NULL,
  `cperson` varchar(255) DEFAULT NULL,
  `cnumber` bigint(20) DEFAULT NULL,
  `tanno` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `password`, `address`, `pan`, `gst`, `fassi`, `iec`, `faddress`, `baddress`, `bank`, `cperson`, `cnumber`, `tanno`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aayush Patidar', 'aayushpatidar04@gmail.com', 'client', 9982414226, '$2y$10$KT32FZADCcTL2whFmhVWCeG90orn3I3CeppAgAkBHzBwEYrEGSWhK', 'address 1', '', '', '', NULL, '', '', '', '', 0, '', NULL, NULL, '2023-09-19 23:06:58', '2023-09-19 23:06:58'),
(2, 'Aman', 'aman@gmail.com', 'client', 7418529635, '$2y$10$lgTtCDR3NMFZ6le73OC.GOhdTMIuF0OSyWbgQ6jLREHXvuVTGuQ1u', 'address 2', '', '', '', NULL, '', '', '', '', 0, '', NULL, NULL, '2023-09-21 06:02:16', '2023-09-21 06:02:16'),
(3, 'client 1', 'client1@gmail.com', 'client', 9875432165, '$2y$10$kgafSczbOOU01M.QbCbbBekMc9GV5aLRv/tCIoVmFKCb/yftA6e5y', 'address 3', 'FTYHUJ8456H', '4798465498764', '4694984641658794', NULL, 'NRK Business Park, Vijay Nagar', 'kjj-pioh,sdfkghofksd\r\nsgjisdog[f .psfd[ghfsd', 'FHJIOhl iojkLPO jmpsofkl[gh,m,fsd[', 'contact1', 6456479891, '654932696898', NULL, NULL, '2023-09-24 23:36:02', '2023-09-24 23:36:02'),
(4, 'Admin', 'admin@gmail.com', 'admin', 0, '$2y$10$1gtqCasP1y8wjd09h6O1oOLvyVaLMb8.uaQ.8tNz70wH.Q86gpSi.', '0', '0', '0', '0', NULL, '0', '0', '0', '0', 0, '0', NULL, NULL, '2023-09-25 01:19:10', '2023-09-25 01:19:10'),
(5, 'client 2', 'client2@gmail.com', 'client', 7418529636, '$2y$10$i2qquN/42BcmwZ2mFLCeUee9yRpUE9ofg6Fghu4TstUANK8aFZwlW', 'Indore', 'G47579JKJHJK', '5855655555585', '55845545545558', '55845655', 'Bhopal', 'Dubai', '<p>Account Name: xyx<br>Account No: 123<br>IFSC Code: SBI65695<br>Bank Name: SBI<br>Branch Name: Indore<br>Any Other Remarks: None</p>', 'Client a', 7894612634, '478546632699', NULL, NULL, '2023-09-26 00:37:54', '2023-09-26 00:37:54'),
(6, 'client 3', 'client3@gmail.com', 'client', 7418529635, '$2y$10$tAIGmg16T1WC4xFQ8c7Tu.B7yrSMFTRt4iXHaXyB8QPipjZO/pV2q', 'NRK Business Park, Vijay Nagar', 'KN665669JID56', '4798465498764', '55845545545558', '55845655', 'intouch', 'zfsdg', '<p>Account Name:<br>Account No:<br>IFSC Code:<br>Bank Name:<br>Branch Name:<br>Any Other Remarks:</p><h2>.dfsgb.</h2>', 'dfg', 7845123265, '478546632699', NULL, NULL, '2023-09-26 01:01:25', '2023-09-26 01:01:25');

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
  ADD KEY `brokerage_bills_contractno_foreign` (`contractno`),
  ADD KEY `brokerage_bills_purchaser_foreign` (`purchaser`),
  ADD KEY `brokerage_bills_seller_foreign` (`seller`);

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
-- Indexes for table `delivery_books`
--
ALTER TABLE `delivery_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_books_orderno_foreign` (`orderno`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `brokerage_bills`
--
ALTER TABLE `brokerage_bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cash_books`
--
ALTER TABLE `cash_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contract_notes`
--
ALTER TABLE `contract_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `delivery_books`
--
ALTER TABLE `delivery_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expenses_categories`
--
ALTER TABLE `expenses_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_members`
--
ALTER TABLE `family_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `brokerage_bills_contractno_foreign` FOREIGN KEY (`contractno`) REFERENCES `contract_notes` (`id`),
  ADD CONSTRAINT `brokerage_bills_purchaser_foreign` FOREIGN KEY (`purchaser`) REFERENCES `contract_notes` (`id`),
  ADD CONSTRAINT `brokerage_bills_seller_foreign` FOREIGN KEY (`seller`) REFERENCES `contract_notes` (`id`);

--
-- Constraints for table `cash_books`
--
ALTER TABLE `cash_books`
  ADD CONSTRAINT `cash_books_reason_foreign` FOREIGN KEY (`reason`) REFERENCES `expenses_categories` (`id`);

--
-- Constraints for table `delivery_books`
--
ALTER TABLE `delivery_books`
  ADD CONSTRAINT `delivery_books_orderno_foreign` FOREIGN KEY (`orderno`) REFERENCES `contract_notes` (`id`);

--
-- Constraints for table `family_members`
--
ALTER TABLE `family_members`
  ADD CONSTRAINT `family_members_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
