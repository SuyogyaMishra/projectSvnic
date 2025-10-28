-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2025 at 10:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svnic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions_table`
--

CREATE TABLE `admissions_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `class_applied` varchar(255) NOT NULL,
  `stream` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions_table`
--

INSERT INTO `admissions_table` (`id`, `full_name`, `email`, `phone`, `dob`, `gender`, `class_applied`, `stream`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Suyogya Mishra', 'suyogma@gmail.com', '6386369558', '2021-11-30', 'Female', '1-8', NULL, 'Gali No.14\r\nS BLOCK\r\nVIKAS NAGAR UTTAM NAGAR', 3, '2025-09-04 08:58:09', '2025-09-05 12:32:29'),
(2, 'Suyogya Mishra', 'S@gmail.com', '6386369558', '2021-12-10', 'Male', '1-8', NULL, 'Gali No.14\r\nS BLOCK\r\nVIKAS NAGAR UTTAM NAGAR', 4, '2025-09-04 08:59:50', '2025-09-05 13:07:00'),
(3, 'Suyogya Mishra', 'suyogmishr@gmail.com', '6386369558', '2021-12-24', 'Male', '1-8', NULL, 'Gali No.14\r\nS BLOCK\r\nVIKAS NAGAR UTTAM NAGAR', 3, '2025-09-04 09:01:56', '2025-09-05 13:07:16'),
(4, 'Shivam Mishra', 'Suyogya_Mishra@gmail.com', '6386369558', '2021-12-09', 'Male', '1-8', NULL, 'Gali No.14\r\nS BLOCK\r\nVIKAS NAGAR UTTAM NAGAR', 3, '2025-09-04 09:03:38', '2025-09-05 13:12:24'),
(5, 'SUYOGYA MISHRA', 'sachin@gmail.com', '8851677539', '2021-12-14', 'Female', '9-10', 'Home Science', 'ikauna', 3, '2025-09-04 09:07:23', '2025-09-06 10:24:02'),
(6, 'Suyogya Mishra', 'suyogmashra@gmail.com', '6386369558', '2021-12-02', 'Female', '1-8', NULL, 'Gali No.14\r\nS BLOCK\r\nVIKAS NAGAR UTTAM NAGAR', 4, '2025-09-04 09:11:06', '2025-10-13 11:12:53'),
(7, 'Suyogya Mishra', 'suyogyamishr@gmail.com', '6386369558', '2021-12-30', 'Male', '1-8', NULL, 'Subhash Chandra Bose lnter college\r\nIkauna', 3, '2025-10-13 11:11:57', '2025-10-22 04:26:23'),
(8, 'Shhivanshi', 'shivanshi@gmail.com', '9120014134', '2021-12-14', 'Female', '11-12', 'Commerce', 'Gali No -14', 4, '2025-10-20 01:39:14', '2025-10-20 05:02:40'),
(9, 'Suyogya Mishra', 'suyogyamishra63@gmail.com', '6386369558', '2021-12-01', 'Male', '1-8', NULL, 'Subhash Chandra Bose lnter college\r\nIkauna', 2, '2025-10-20 01:43:08', '2025-10-20 05:02:56'),
(10, 'Shivanshi Mishra', 'sm@gmail.com', '6386369558', '2021-12-01', 'Female', '9-10', 'Home Science', 'Subhash Chandra Bose lnter college\r\nIkauna', 2, '2025-10-27 11:37:08', '2025-10-27 11:38:24');

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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sbjx  m', 'suyogma@gmail.com', 'admissions', 'axvsb hhdb', 2, '2025-08-30 12:13:38', '2025-10-03 00:24:45'),
(2, 'Suyogya Mishra', 'suyogyamishr@gmail.com', 'admissions', 'hii my self suyogya mishra and i want to tell you that', 2, '2025-09-04 00:02:12', '2025-10-20 03:59:56'),
(3, 'Sonia Mishra', 'sonia@gmail.com', 'academics', 'Explain about the school', 2, '2025-09-04 00:03:31', '2025-09-04 04:12:28'),
(4, 'Suyogya Mishra', 'suyogyamishr@gmail.com', 'academics', 'guhb', 2, '2025-09-04 02:50:31', '2025-09-04 04:12:36'),
(5, 'Shrya', 'Gupta@gmail.com', 'admissions', 'tell me message', 2, '2025-09-04 04:17:54', '2025-09-04 04:18:26'),
(6, 'Anuradha', 'Anu@gmail.com', 'general', 'this is the checicnjc', 2, '2025-09-04 04:24:34', '2025-09-04 04:24:49'),
(7, 'Suyigya', 'dhhsxhjsx@gmail.com', 'general', 'cvsgjcvschbsvc gnsncvvshmc', 2, '2025-09-04 09:08:04', '2025-09-05 13:12:32'),
(8, 'Suyigya', 'dhhsxhjsx@gmail.com', 'general', 'cvsgjcvschbsvc gnsncvvshmc', 2, '2025-09-04 09:08:05', '2025-09-06 09:54:22'),
(9, 'Suyogya Mishra', 'Suyogya_Mishra@gmail.com', 'admissions', 'zxzwxzw', 2, '2025-09-05 13:14:05', '2025-10-20 04:54:09'),
(10, 'Shivanshi Didi', 'Shivanshi@gmail.com', 'general', 'ebchiebchievc n bhcgawhc hicsbvhscv', 2, '2025-09-06 10:35:22', '2025-10-20 04:54:41'),
(11, 'ghhv hhb', 'Suyogy@gmail.com', 'general', 'ggggggggggggggggggggggggg', 1, '2025-10-03 00:24:18', '2025-10-03 00:24:18'),
(12, 'S', 's2@gmail.com', 'admissions', 'hg', 2, '2025-10-20 00:12:48', '2025-10-20 04:54:21'),
(13, 'Akanshka Pandey', 'akanshi2@gmail.com', 'general', 'xsdcfvbn', 1, '2025-10-20 03:57:44', '2025-10-20 03:57:44'),
(14, 'akku', 'akku@gmail.com', 'academics', 'FGHJ', 2, '2025-10-20 03:58:02', '2025-10-22 06:26:35'),
(15, 'A', 'S@GMAIL.COM', 'admissions', 'DDF', 2, '2025-10-20 03:59:02', '2025-10-22 06:36:29'),
(16, 'Shivanshi Mishra', 'mr.suyogyamishra@gmail.com', 'general', '52631563.2.', 2, '2025-10-24 11:37:54', '2025-10-28 03:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `file_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `event_date`, `description`, `file_id`, `created_at`, `updated_at`) VALUES
(3, 'Suyogya Mishra', '2025-10-21', '\\vik', 12, '2025-09-06 15:49:35', '2025-10-20 05:01:06'),
(7, 'Diwali Pujan', '2025-10-30', 'asdfvgbhnjmk,.', 14, '2025-10-20 05:00:32', '2025-10-22 02:42:40'),
(8, 'Suyogya Mishra', '2025-10-07', 'nbvc', 15, '2025-10-22 03:54:02', '2025-10-22 03:54:02'),
(9, 'dfvgb', '2025-10-01', 'sdcfvgbhn', 16, '2025-10-22 03:55:28', '2025-10-22 03:55:28');

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
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `razorpay_order_id` varchar(255) DEFAULT NULL,
  `razorpay_payment_id` varchar(255) DEFAULT NULL,
  `razorpay_signature` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `currency` varchar(10) NOT NULL DEFAULT 'INR',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '0=created, 1=paid, 2=failed, 3=refunded',
  `receipt` varchar(255) DEFAULT NULL,
  `paid_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `student_id`, `razorpay_order_id`, `razorpay_payment_id`, `razorpay_signature`, `amount`, `currency`, `status`, `receipt`, `paid_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_1_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(2, 2, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_2_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(3, 3, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_3_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(4, 4, NULL, NULL, NULL, 1300.00, 'INR', 0, 'rcpt_4_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(5, 5, NULL, NULL, NULL, 900.00, 'INR', 0, 'rcpt_5_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(6, 6, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_6_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(7, 7, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_7_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(8, 8, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_8_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(9, 9, NULL, NULL, NULL, 900.00, 'INR', 0, 'rcpt_9_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(10, 10, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_10_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(11, 11, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_11_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(12, 12, NULL, NULL, NULL, 1300.00, 'INR', 0, 'rcpt_12_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(13, 13, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_13_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(14, 14, NULL, NULL, NULL, 900.00, 'INR', 0, 'rcpt_14_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(15, 15, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_15_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(16, 16, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_16_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(17, 17, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_17_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(18, 18, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_18_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(19, 19, NULL, NULL, NULL, 1300.00, 'INR', 0, 'rcpt_19_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(20, 20, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_20_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(21, 21, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_21_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(22, 22, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_22_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(23, 23, NULL, NULL, NULL, 900.00, 'INR', 0, 'rcpt_23_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(24, 24, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_24_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(25, 25, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_25_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(26, 26, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_26_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(27, 27, NULL, NULL, NULL, 900.00, 'INR', 0, 'rcpt_27_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(28, 28, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_28_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(29, 29, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_29_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(30, 30, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_30_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(31, 31, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_31_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(32, 32, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_32_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(33, 33, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_33_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(34, 34, NULL, NULL, NULL, 900.00, 'INR', 0, 'rcpt_34_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(35, 35, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_35_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(36, 36, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_36_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(37, 37, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_37_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(38, 38, NULL, NULL, NULL, 900.00, 'INR', 0, 'rcpt_38_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(39, 39, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_39_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(40, 40, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_40_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(41, 41, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_41_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(42, 42, NULL, NULL, NULL, 1300.00, 'INR', 0, 'rcpt_42_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(43, 43, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_43_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(44, 44, NULL, NULL, NULL, 900.00, 'INR', 0, 'rcpt_44_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(45, 45, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_45_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(46, 46, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_46_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(47, 47, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_47_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(48, 48, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_48_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(49, 49, NULL, NULL, NULL, 1300.00, 'INR', 0, 'rcpt_49_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(50, 50, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_50_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(51, 51, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_51_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(52, 52, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_52_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(53, 53, NULL, NULL, NULL, 900.00, 'INR', 0, 'rcpt_53_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(54, 54, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_54_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(55, 55, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_55_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(56, 56, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_56_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(57, 57, NULL, NULL, NULL, 900.00, 'INR', 0, 'rcpt_57_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(58, 58, NULL, NULL, NULL, 1100.00, 'INR', 0, 'rcpt_58_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(59, 59, NULL, NULL, NULL, 1200.00, 'INR', 0, 'rcpt_59_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(60, 60, NULL, NULL, NULL, 1000.00, 'INR', 0, 'rcpt_60_1761550004', NULL, '2025-10-27 01:56:11', '2025-10-27 01:56:44'),
(61, 61, 'order_RYq1GtPOsttjKX', '', NULL, 1600.00, 'INR', 0, '', NULL, '2025-10-27 01:56:11', '2025-10-28 03:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_path`, `file_name`) VALUES
(1, 'uploads/events/RbFRQoCUrCUw55wyx9L7b9abQuSVRKxoHCH5rjYy.jpg', 'erdigram.jpg'),
(2, 'uploads/events/uwbBqIz23tU6qxKa7xcOjxENA7hEUlMbGzcqFbY4.jpg', 'erdigram.jpg'),
(3, 'uploads/events/yPwSmBWlqgwS17n5ZHwG6UAk0NdugJsGlteuTnVY.jpg', 'erdigram.jpg'),
(5, 'uploads/events/KTommdmj8RnZO59VkEqWAuqHXfTSEdp7X2rnHQue.png', 'Screenshot 2025-03-22 204317.png'),
(6, 'uploads/events/mUSRQz7ZUXhTVSTKPnch6Q2KkwohBy2ac7xuUwie.png', 'Screenshot 2025-06-13 060654.png'),
(8, 'uploads/events/COEYXm0iGHEOivACRBq0GC8F3s4VjH7pwrAyI8PW.png', 'Screenshot 2025-01-05 194902.png'),
(9, 'uploads/events/GcboEjj9nq1nyKdiwP2vD7V16LzWrBLdazBp53S2.png', 'Screenshot 2025-01-11 234052.png'),
(12, 'uploads/events/qXyaAkREjYGp6SL05I8sQpgFEv7tCrEgdEFRi5NJ.jpg', 'img dfd.jpg'),
(14, 'uploads/events/1Nb91Gxqh8Yn6EPca2YTWX2sgtWTqjlF4xXcCPty.jpg', 'aai.jpg'),
(15, 'uploads/events/PAIzj89LOwByi2h6QUE00eSEXxN8MUIlUTalNfqw.jpg', 'internship aggre.jpg'),
(16, 'uploads/events/1fEhalz8r8depmO9Zh15EE7WewqSkQpQbX3iMNSK.jpg', 'testreport.jpg');

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
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `max_marks` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `exam_type` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `student_id`, `subject`, `max_marks`, `score`, `exam_type`, `semester`, `created_at`, `updated_at`) VALUES
(1, 14, 'gsh', 44, 444, NULL, NULL, '2025-10-25 11:52:56', '2025-10-25 11:52:56'),
(2, 23, 'English', 100, 48, NULL, NULL, '2025-10-25 11:57:00', '2025-10-25 11:57:00'),
(3, 23, 'Math', 100, 50, NULL, NULL, '2025-10-25 11:57:00', '2025-10-25 11:57:00'),
(4, 23, 'Scince', 100, 100, NULL, NULL, '2025-10-25 11:57:00', '2025-10-25 11:57:00'),
(5, 23, 's scince', 100, 65, NULL, NULL, '2025-10-25 11:57:00', '2025-10-25 11:57:00'),
(6, 23, 'art', 100, 89, NULL, NULL, '2025-10-25 11:57:00', '2025-10-25 11:57:00'),
(7, 61, 'HINDI', 100, 99, NULL, NULL, '2025-10-26 03:07:56', '2025-10-26 03:07:56'),
(8, 61, 'English', 100, 95, NULL, NULL, '2025-10-26 03:07:56', '2025-10-26 03:07:56'),
(9, 61, 'BIOLOGY', 100, 95, NULL, NULL, '2025-10-26 03:07:56', '2025-10-26 03:07:56'),
(10, 61, 'PHYSICS', 100, 98, NULL, NULL, '2025-10-26 03:07:56', '2025-10-26 03:07:56'),
(11, 61, 'CHEMISTRY', 100, 99, NULL, NULL, '2025-10-26 03:07:56', '2025-10-26 03:07:56');

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
(4, '2025_08_30_171328_create_contacts_table', 2),
(5, '2025_09_04_110224_create_admissions_table', 3),
(6, '2025_10_20_144613_students', 4),
(7, '2025_10_24_121103_create_users_table', 5),
(8, '2025_10_25_163401_create_marks_table', 6),
(9, '2025_10_27_061154_fee', 7);

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
-- Table structure for table `school_info`
--

CREATE TABLE `school_info` (
  `id` int(11) NOT NULL,
  `Students` bigint(20) NOT NULL,
  `Teachers` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_info`
--

INSERT INTO `school_info` (`id`, `Students`, `Teachers`) VALUES
(1, 1500, 20);

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
('0sechLl0QWZteYzL43rMNuY2kdiXwacg11Sy5ebS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa2RsYzA5U1JtNVNZMDlUT1VOcU56VktVVmg2TTBFOVBTSXNJblpoYkhWbElqb2ljbWxyTlhOb1FWaHZlblJ4ZDI5c1kyNUVSRlk0VDNSTlRHSlBSR28xVm0xdVYyeExUMVJUVUdWVlZsbzJlWFkyUlZkMmVrRTFjSEZMZGxabU1WbG1XV2ROZUVsakswcDZTRE51VEZKUFZFeE9NV2R2YlVkUVRtVklSbk0zVkdSblRHMHhZalJPYkN0NFFWbFJjWEpZY0dvdldIaFpjWEJHVm01bE56bFZZVWRyY25jeUswSm5USGN2UlVWeFpHRkRhMnBCWkhCQ1puQkphakpIWVN0bWFUQTVOU3RoUlhCTlVqaElUbFkwV0ZOaFJsUmtWMDQyVm5GQ0syeHpZMkpHUVVvM1VsSm1SRzFGVjFnM1dHNTRRWHBITURGUGFtOUVhRm8yY0ZSTmFFSTRORGhVYTBzMWNrOXRNV2M1ZG1Sc09UVTBTa2RCVjFJeldWVmpaMWQyUms5VE5VcHRkblJCTWxkSmJETmFhMVJITmpOMmJYYzlQU0lzSW0xaFl5STZJakZqT1dZNU5HVXpZbU0xWWprd05qRm1aRE5oTlRZeVpUTXdaR0UzTmprelltSmhZV1JpWVdVd09EUTJaakU0T0RVNFlUSTNOV00yTlRNMFl6WTFabVlpTENKMFlXY2lPaUlpZlE9PQ==', 1760458460),
('1rYmmkFpgNI0K3efebOCNKhrtM4xHAFqzIXVAgoE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRTluZmxZZzNUTmlMWVBZVmplaVJUd2ZuZjhsZFRXNDU1Uld2Qkx4cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1760517275),
('2dbsOwxPus0sEiPOMRYG2oL8KcER8BQJkupsrAkW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJamhtUzNOTVExUTFZMkpNTDNkWVlpOUNiMnRoZUVFOVBTSXNJblpoYkhWbElqb2liMk5oTmxsd2VHUkJSa1phVkZadlVFdEdkVXBaWldwSWVYbEhVMHR5UVRaTlVUQTFlVzVSY0VwU2JFODNWM3BCVnpGVFZqaFJWaXRzV0ZsNFFrdFNabnAyYVhwQllVc3pjMU5KYTBaWFFubHRSRXhDVFc1MFQyZFhZM1psTlVsS2JucHZjMXBtYzNOVWNuTkxSRTgxUlZSR2RVODFkakp1ZHpWRVFUVkZNRmhIWlZaVlRqVklaWEExVjJWcGQwbHhURE5qVTNFd1FWcHRVWGN5Vm10Mk9UQm5UM0kzV21Od1ZXWmtiVlIzVmxadFp6SlRhRWxJVFdoNWNuWXZUVGxVVUZadlZIQmpNVUpCWVV0R1dpdENaRmxUYzJOb2RFcHNXVFZZTkV0QllrSklWM0ZKZWtWV1lqbEZVMmRPYjBGUFkwMDNSQzg0WW1wck5EWnVOVkJUYWlJc0ltMWhZeUk2SW1aa1kyRTVOMlZoWXpNd01qZzVZelExT1RBMVpUWmtZekZqT0RrNE1HVTFNVE00T1dKa01UUTFZMkl3WTJGak56QXlaamhsTjJabE1XTTRPV1kxTmpJaUxDSjBZV2NpT2lJaWZRPT0=', 1760463440),
('3GLumE3aoDNtrbZMkwXEVQuIafiws3V326u6JWeQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJakowUTBSQlRrZEliMGhMYjI0MldVNUNWVVpSY21jOVBTSXNJblpoYkhWbElqb2lVVXh5UVU1UWMwdEJVMDlWVEN0TlYweG9jbWRHWlhGRmRqbEpSR2hLYkVZdlJrOUNPVFUzUjBGeVYzcHNjRVJ1U0RsdlJ5dE9lRE4xY0VWblVHVjNVbEZvTlc1eldGWTJlRlphY1hsNWJsSmFUaXRJVEZCTFkxQjBkVGxRYVhCR1MwTk5PV2RGTkdsMlZFMXFhRWhKU0M5NmIyZE1USGhUVmtWTVZsRXJPRnBUZVV0RE5EaHBUSGc1UkM5S1owdHhRakUzVWk5ME1EaHNXa1ZVT0RCVmNsWjBiemhTTkVVdk5tUjRiemh5TlhkcVZISlJOall5YUZwTlJURmpaaTh3WXpJMlZtTkxla2hoYml0dWIyMW5VMGxIYjI1eWRVdFNMM2hhU0Zac01UVnVTbkJrVGpCRk1XZGpWekp6VFdKbVUwSlhRVzQ1T0dJelQyTTVUMnhPTUNJc0ltMWhZeUk2SW1JM01qaGlPV1JpWWprd05ETTVaVEZqT1RObE16TTJZamRpWldJM09ERTFPRE0wT1RZM01ERmhPV0pqT0dJMlpESTJaVFJrTnpNM09XTTRNV1JqWVdRaUxDSjBZV2NpT2lJaWZRPT0=', 1760463667),
('bfDHqiY8GVRC0zC6yT1fTV9ZJ9gdteqVufuW5rlc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbFZCYkVwcFdrczVNVXBsYUdWbVZTOWpjRE4xTTNjOVBTSXNJblpoYkhWbElqb2lOamN5WjFKeU0wWlhaRXcwV2xSWWJtOUxkM1JWVWlzd2MzY3hNMU55VEc1M2MwMHZkblJzYlVacU5rSlNMMU5PT1dsQ2JVMWxaVXRSVDA4elZrZFlZbFEzYWtSa1RYcEhWMGw1VWpCelowSnFObVJvZFU1T1lVTk5ha3hZVjFWTk1GUlZRMkoxYjA5eWNFRmxSazFtVFVreVExQTBVVXcyZVZWQk5HMUZSVzlJVXpKRVdGTjFRbmxQUWpaVk9FNDFWSFZPTkZJclMxQXlVbWt2UVVwNFpsQXZSMU0yUlRRNGNFcDRObEJrTVcwMGN5ODJhakIzYTNkcVYxVm9NV3BJYkRJelFqQnRPR1ZwZVhSV2JWTlVVRFpMWXpoS2FtdEJaMFYzY1dvNE9YUjRSR3RSZFVaelNFYzVPV3d5VDFsNmQwd3pTMGszVmtWUE5HbGhhemR6TDFsSFdtcEJUVU5pTjFvMWRuSldTMDU2YzJFemVVRTlQU0lzSW0xaFl5STZJalpsWkdRM1pERTNZVFJtT0RNMU1HTTBNMkV4T0Rrelpqa3pObVE1WmpVeE5Ea3lZVGczWkRSbE5UWmlOelJqTlRBM056ZzRaRGsxWTJNMk5qWTFZVFlpTENKMFlXY2lPaUlpZlE9PQ==', 1760464134),
('CU6ayKuMiD4MmboKEg2QkCLwftoc7xuikD8KtUnW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa3R0U0ZsQldEbHdla3hXTDI5cU5qWlNWRGc1Wm1jOVBTSXNJblpoYkhWbElqb2lkVXhFT1hCRWFsQkliV3RoSzNsbVJFd3dUQzlFTkRkWlQxaFFTMlpQTWt4dE1VbE5VRzFoU3pWR1VpOUJhMWhXYUZadU1rRXhRakJ4UkVJNVVrSXJVbVZEYVVoVFprcEJWak4wTVdNM01EbFNUSEUxVDFBM05XUmpZWFJ5U3pOT1NFYzNlSFZTZGtSU1pXMVFhRzFJZVVKaFJtcHJPVFp6T0ZwMlRXTnBObU5hUkRKRWJITm5SRkV4UldOaWQxTmhTbVJxVm1wUWFGUndPRFl5WVhCamN6RkVUMkpCT1ZKcFkwTnJlbGRJZURkalpWVnljbTVOVDNjdmJXZEJiakIyUVdKS2VWcHNjRGQ0TTFCTUwzQkJWbm9yTkZGd1p6QTNXVXB6TDA1Q1IxSnpTVW9yUWtabWJGTmhWVGxoWlZkM0wxUjJZbGR2WmxFcmFWUnhXWFJsVGlJc0ltMWhZeUk2SW1aaFpUVmpNMk5pTVRsbU5EWmlZelpqWVRnek5EQTFOVGM0WlRFMk5XWTFabUU1TkRsa01USXdNalEwT1dNM09XRTVZVEkwWlRFeU9UaGxZMlF5WmpraUxDSjBZV2NpT2lJaWZRPT0=', 1760463746),
('dbsHDH2BEkIr2rVrICGnERSVbIaMkQgiJVy06DSk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYVJUZnFTT21qT1VXb1ZWYjZIbkxTMGtxeVR0TlhFanlMcnIyMmc2OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbmxvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1760508772),
('dY6nPVhB5tk3mjVbE8zbmtVc3BaPxppZyiunVdD1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa2R1Um1VMGVVbDFjbXRzUldsdFdtTTNlRGQ2WldjOVBTSXNJblpoYkhWbElqb2lkVzFNWnpBclJEVnBNa0puWkVrNWFETm1OalV2VXpCaGFGUXJSRGxpTUZnM056ZGxSVlZRVEUxUGF6RXJNM2RtZEVsRGFtWkpObUZpTUc5eFVHdEhPRzFtVldsTWNtWklTekZDWVVWR1FtVXpOR0ZLSzB4cGFYbE9hbkJsTWxCQlkzSXpkRTFrTm5aMVVXOTFZbFF4VTFoS1dGSXJhV2RHT1ZCWlQyVnNlR2hCTkU4elNHTkhiRXgzVEZkdk1GUndUak5TVnpSWGJtMWtjRnB4TjI4eWVHcFRZMGh3V1ZGT1QwaEtRMmxFZVVjdldIZENjREZsVUZCM0wxcHpNRzR3VVRnNU0xWjBlbWxUWTFGMGEwSlhNR3RaUkdvdk5GZERRemhHZVd4UVpUaHpSRE14ZUZscVprbHlTV1pGYVhSTFRIQTRiak5RYTJzMFlVSmtSMHRwVFNJc0ltMWhZeUk2SWpkaVpXRmhOMll3T0RVMk5ERTFPRFpqTXpJMFpUQXhNVEkwTnpFek1tWTJaV1kxTW1GbE5tWTJNREEwTnpaaE5UWTROemszT0dVd1pUZ3hNekk1T1RBaUxDSjBZV2NpT2lJaWZRPT0=', 1760373906),
('e2aKSvx5PeHxsby6Ph4E3nUKTdFYOrSBYXESraPJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJakpPZUhGMVlVazBZaXRxUlVKWGNreFdWVzlVTjJjOVBTSXNJblpoYkhWbElqb2lkVGQwVm5Wa05WQnVVVGQ2TWtWUGMzaFNaVkkwVm00clZFbG1ZV05LUkcxa1JFTlJWV05PWTBJMWJqTXJVMlJxWkc4NGJFVkRaMGs1Y2s5bVozWnNSMVJuVUVGc1FuRm1hWGN4Wkc1TVlVMXRRbGRzTVVZM1EzTkJiVXBpU0ZjclR5OXdjV2sxVUdsdVNsSkNZemg0TWtKQ1N6bG9ZVmhNWWtWblNFYzVjMmc0WmtwdFkzaGhNWGxpVm05WFVURXhiWHBPUzFOU1VFOU9OVEJSTVRrd2N6ZGpaR0kyTlZoSWNXVndURUpOTVRRdkswSlhTMGgwYW5sTVRsVlBlWEZqU0ZsRkszZG9hekJPWVRFeU5WSXlRalZHTlZaMGFXazViV2QyVUhkMVRXcDNNRGRtVTBRMlExSklaRVoxUWpSeWJuRTRiSHBLZUhoc1NtVkhORkE0WVNJc0ltMWhZeUk2SWpkaFpHUTJOREl5T0RReE0yUm1PRGs0WW1FeFltSXhaREkzWldWbVlXUmpPVFZpTW1Sa1pEZzBNVFE0WXpFMVl6Y3haVEl5Tm1Jd1pEUmhZbU0wTldNaUxDSjBZV2NpT2lJaWZRPT0=', 1760463618),
('ea4B7uW6CKOoODDO0ACpkq4vnlQmk42dAxr9y4aI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbk5QTkRWeGVqTlZTSEpYZUUxcE1saElka2xhZG1jOVBTSXNJblpoYkhWbElqb2lhMFY2TUVOWFUwVktXRmd5UlZSVmFWSnVVVTEwWjJ4SlQyUnNhR04wVWtObE56QkRUMjVDTUc5amNUZDNSbUZ5VjNBeVFra3djREpETkZWTk9GY3JTV3REY0d4V1EybGpWeloyZGpCNlpYZHlNbnB5YjJWcVpHSk5kbFZFZFhGRFlXcFNXV3BYVTJ0U01FWmlVWE5aY2toSFp6Sm9WR1ZzVEZZd1VYRnVaMFJQTjNOMGVWQmlSU3RpYzBaT2FrTkpTakZHT1dOV05EWjBlSFl4Wm5OV05IbHRPVWhOVlZodUsydFNlVGhUWmpCWlJITlBlbTFZVDBWbVZGSTNNR2NyTDFSSGRWcDNUVmxWWkdoclMzSktkR2x3Vnk5TU16UlNjU3RRUVhJeFduVnZjM1YxSzFGcVRtOVFTM3A1WkZSYVZVZENTMjl6UzFkUVNIVkdia0ZJZDJ0RUsycHZXbXAxYjA5bFZVOXBSM1Z6VTFZdlZuYzlQU0lzSW0xaFl5STZJbUl5Wmpkak0ySm1ZbU13TTJRNU5HSXpPVE14TkdNeU9UVXdNMlk0TjJJMk56TXpOMkpqWkRkaU16VmhOamt5WmpjMVpXRTRaREF4WVdVM01HVTVNV1VpTENKMFlXY2lPaUlpZlE9PQ==', 1760464143),
('fjaOcFyD3R2u0SklenBHHVM3dDwKcdN7fXj2zjzC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbXBuZGxWaGVIRndTVzlxVkc4eFFWUnVNaTgxUzFFOVBTSXNJblpoYkhWbElqb2llbVZaY0VkWU9WRTVSek0wZFZGdGExTnRVMVpXUXpoUlpHSk5SVk55ZFVWd2EwcFpiRTB6ZUM5RlpsaEdUSFpvTTB4SlZIZHlhbE14V0VoVlVsTTVjMEkzYUhGTk9GQXplWFl2YUZvdmVsaHBVVTR5WTBOUVluUlJjVUptT1U5WVZHaE1aRFpNT0RKc2RHVlNNVlZRZG5kT1UweExaMnh2WW10amEwMWFiV3BVVGtVeVdWcDNNR2xhVWpoa1pVTnlVMnhSUldabmVscGpaRVJHZWtWT1NsSXhkbTFoTjB0Tk0wWlBhRVZJWXpaQ1dsVjJTVUZsUVVZelJXNVFXV1ZGY210UGJuaExTM3BrV1VKMk4wMXdZM2gzTlVwRmNVZEdNR2R2VkRSa1JVcFJTa1pyZFRaRFQzVmlPVGxSU1cxSEwwcDRXRzQ0VFN0TFFuSkdSbU54VGlJc0ltMWhZeUk2SWpNMU5HUmpNV0psWXpVMU9XWTRNVEJsTW1ZM01UUTVOR1JrWmpFM1lqZ3dabUppTlRnMU5EbGtPR1ZsTkROaU5tSmlaRGt5TjJZMU1qTm1PR00yT1dZaUxDSjBZV2NpT2lJaWZRPT0=', 1760463674),
('gabcES43UzGMWlbMauIvXPWmu1YXiyZd3nQPFUlI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJaXRzYzBvMVpqUlpkV2xaY0VzM2FVWTBhSFk0VUZFOVBTSXNJblpoYkhWbElqb2lTVzlzYWpsbWIzSXdlRWhqWm1STlVFSnpPU3RGYmpWaVV6ZFdVM1Y0UVZObE5XVmlTQ3RPUWk5eVdUSllWbVoxY1VwbVNYcDBXa1JXVm1KNkwyTnNiRVZJU1RsaldWRjJSVXBzUVUxSlNVb3lka2hOVFVFd1RsSnhObGhCVDBOVFZ6QkdaWFE0Vm5kcVVHTkViQzl3WkRKd09YWnRaazVuTWs0clRrZFBRM0poY2paWWVVbEdSVlZYUWpGMVZ6RmtVVTVFWjAxbVIzaE1Ua2gxUlhCdGJXSlViemwzVUhaQlMyaG1kVEE1UjAxbWRHMVVUV0Y1YmpaR1FqUXZRUzlVWWs1V2NtTk9NakJUTWpNck4zZG5TV1pVVTA1d2VFNXBWMGRVZGxsbVVXeEtja3AzTTJ0SmEyZ3JjbVJ4ZUZkeU9HaDBTRGxUVlVWT1pXTlZkbkpwYVNJc0ltMWhZeUk2SW1NNE16a3dNVGt6TjJFMk1HWm1aVGhoWmpJeU1HVTNORGsxTW1VMlpqY3dNR0kzWm1JME5HUXpNRFptWWpSbE0yTmhOV1k0T0dZeU1XVXpZMkl4TVRBaUxDSjBZV2NpT2lJaWZRPT0=', 1760463447),
('H1XUazBCX6xQMyAJoTf1tZGETocY8yIAMS5beyvW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJazlsTVZCTmNtRlpUVWRoUzNaNlMyMVVNVWhFWmtFOVBTSXNJblpoYkhWbElqb2liMncwVVRWU01HdEJNbVpDTkd4eFZVZFJaMVI1ZURKUmRXTllkbU5CVmxWbU5GWkVlR052T0hSWWNrcFBORkJ4Y1RkbmNuQXhWVmx1UldveldFaG5NMVpvZUZsbFRsZHVMMUV3WjFGamIzSjJaVk5PWVhWblVXa3hWRmRIYVZFd0x6UklNM2RuYldONUsxcGhlRkkyV0d3M2MxZFdUR1ZOSzFwYWMwMXpNWFoxY2xoUFpYTjRSVVp5VGpsSmJVRkVZVGMwVGpGSWVHUlVOSHBXUXpCTlkyRmxTVVppYmxKSFMwUmtVMlZ1VlVKcmMzcHBTbGxwV0hwVlZGaHpiaTgwTUZOTGFta3pOMDFoWWxsYWQyTlpPR1o0VmtOclEzTXdPVVpFTkZJeVRVOTRaMWhMYVV0a2FXcE1jRlZFVG0xQllXaDNORFYzV21GTFZqSTBaMWRtZVVGNVpVeEZhV2hvY2pSTlRHMTFNRTlIWXpoMmEyYzlQU0lzSW0xaFl5STZJbVJrTVdOallqWmlNekJtTXpFNU1qa3dOMk5qWkRWbE5UVmxaVFl5WldWaVl6Qm1ZbUU0T0dFME5XWTJaREZqTnpCaU9EZzVOMk5oT1RNNFlUQTBNbVlpTENKMFlXY2lPaUlpZlE9PQ==', 1759470885),
('hmBK38KUk9ZjP3cnNPnK7VKajDTJznFzmAnpmfNI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJalk1TVZRdmNFTllZWFZ4UWtKb01qWXJVRGd3UVhjOVBTSXNJblpoYkhWbElqb2lNalpNU1c1b05IZFBWamQ1U1hoMVYwbzNiak50T1U5UlRUUm5UV1JSWmtkYWRWZzNPRkZhVWtwRGNHOW5SblV3YW1kTGJGQjRjMFpUVURsaFUweE1ZV3hVV2sxaVJIZ3hjMjB6YURjeFRWUnNjR1Y0TUVreWJuQnhaR1JwWjBkaGMxRndObUpGTUU5S01UUkpVbkZGYVdodWMyZFBhV1JTUTJsdU1tOWxXbUpWVURaSGJscFFWWEpEVldnM1VtRXJWbU56VUZObmEySjVaM2x4UlhoNU5EQnFZek5QU2xodloyOHJXVk5ZTTNOblEydFBOVEpKWm01UFoxcHNhVmxtZUdWRk9HUTVUMFZWVTJOSEsxaEVVM1F6V1ZwYWRWbFpOemxrTm1OM09TOVNZbXBSVERWdVdub3pURTl1ZW5SRVQwcHVaSEJKUW10c2FWbHhaVTFoT1dnMVEyRm5NemhpVTNaaVNFcE1PR3hhUVVkMlNIYzlQU0lzSW0xaFl5STZJalE1WTJFMk5qWTBOalUyTUdGa1pXVmpPR05pTlRjeU1URXlaR1ZrTlRVMFlUa3hZMkV4TlRSalpXSXpZekF5T0RabFpXSmlZVFV6TmpFeE1XRXhNaklpTENKMFlXY2lPaUlpZlE9PQ==', 1760458365),
('JG120FCSpW1KlBxUOOpyZhhm2gpLJdDJQBGdmrUt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJblJFT0cwd2VFNXFUbEJvTTNOd09GcG5kM1k0UlhjOVBTSXNJblpoYkhWbElqb2llbUp1U0VWR2RGTkRLMWRuUTFGcWFqQkhVa2xuY2pVeWFHWmhhRlZKWWxsWGRsTnJjMDQyWkV4YVpYSjBVWEZOZFZoVGNrVmhOR3c0ZGtRd0syRjZOMFZhUW5OeFkwcHFhUzlVZFZkSmVYaGtNVU5JVFc1RVQxSnhVRm96YkdKNmN5c3pOR1owYlUwclYxbDNSVWQ1VDBGUFVWQnVSV2d2TjFKSGRrNVljQ3RST1RSaWFXUkplVGxvYmxSM05tZFNTRkZLY1hSQ09IWmlaRUpyWkZocE9FTnFjVGxpYW10blZFaHhXbmRzUldSaU5FdG9kbEpMYUM5V1ZWaFlaVTVPUkcwclpXdG5jRGhoYjNwVWRsWndPWE41WkUxQ1FqUlNOV1pyUkVnMFlUQk1ZMVpZWjJ4dWVHVkhOWEpyU1hSalVIcFBRMmxwUkVsTmNrSmhVbU5MTTJSWmRqQXpiR2RJZGs5MWJFTmtjMWd6TTBGVFVIYzlQU0lzSW0xaFl5STZJbVUzWVdObVptVTRNR1UxTjJGa09ERmhabUl4T0dGbE5qYzJOV1V3TWpJd09XVTVNalpoWXpRMFkyWmhOalEzWkRVd01EWmxZalZoWmpabU1EZzBNalFpTENKMFlXY2lPaUlpZlE9PQ==', 1760463844),
('k50i1ceyal6XLRGwN2DcqT3ca8TpwTpHG45QUCiH', NULL, '127.0.0.1', 'Thunder Client (https://www.thunderclient.com)', 'ZXlKcGRpSTZJbWRNTHpOalZIcHlWV2xwTmtkWGNFRnBOMUlyTVZFOVBTSXNJblpoYkhWbElqb2lUMWxGY0ZSc1dtWTNTR28xUzIxSVFWUjROMjVCYld4S0wzY3dPSHAxTUROaGR6VlJRa2xoTWpabVRIVjZkamwxUlZCSlVuVXpjazFYTkd0R1ZUTnVlbk0wVjJKUmVUaG5lbGxSYlZWQmRHMWxWelVyTTB0NVkzRmxia0ZuU21sR01pdDVZbFJEU1dWV1VHOUZiRU4xTm5ZM056QlFlRFpJT0VaUFZ6Vm1lRmROU2tSVlZHOVNUbTVZTDJscUsyVXJSalJIVkZsbWVHRjBXbUphUmxrMU9VdHNhbnBHWjFSWWNGaDVOVGRPZG5aTkszaFpTR3BwVENzMlJHeENNVFpVYkhSNWNVVTNVa2cxTmtkbFpHeHlRemRwY0djclpuYzVRMmd3YW5FM1pWRlhlakV4Tkd4WWJIVmhOSFZHTXpndlVrVkpTelJCTTFGemRtMTBZVkk1TVZkQ2NsUk9OSEphUjFNMVYyeHhhMDlQYVUxMmFGRTlQU0lzSW0xaFl5STZJbVV6WTJWbE5tWXhaalUxWkRBd01tVmlPR1kyT1RCa09UVTFabVl6WVRVMll6VTBOVFZoTkRsbE5HRTRaV014TTJSbVlUWmxPVE5pTkdVMk56aGtZV1lpTENKMFlXY2lPaUlpZlE9PQ==', 1760458039),
('mhEjoKJOQqAeWDwp0VnIxggos31xkXRfNy1FCZcR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJakJWVHpnd1NGaEtkVk5rZUN0aFJtVTVNRWM1TjFFOVBTSXNJblpoYkhWbElqb2laakI1WXpWWGRXWmhTM1JyVldoalJtSjBTa3hpUmxabVpuWXhkMkZLZDJOUGRHOUVlRk4xV1hGVk0yeFVXamhzTVd4U05qWXhNbmhTY1dwcFZ6ZzJTVVEwTDIxUVFXMTVlbUYxUW0xaVYzYzNPV0U0YVRSa056TmpSMXBVV2tsaVMwdDNORE0wVlVweFlreElXbGRLU2xGc2RXb3hNVFpzUzI5U1JtbEVNV2RXTW5wNVZsUkZRM1pNUzJaeGJFTjBTekZXYkVGTFRFcHBiVU5SZFhCbU5sSjNRVzVxTWpWdk1FOXpjMDlTV1doNlJtMVBkRUpFU21WdlpuaFRaa2RQY1VSSWVucEtVVFJaVHpkcVNETXhXbTFQTlVJMGNEbEJabEJEU1hSbUwxWjVUMEl5TDB4NGNrZFZabUV4S3pCWVRWSnNjVzkxSzFWRGFubHRNemx1WnlJc0ltMWhZeUk2SWpJeE4yRTRPREptTnpKalltUTRZMkppTnprMk5qQmtabVptWWpjM05tVXhZamxoWldGa04yVmlPR1kzWmpNMk9XWXhObVl3TVRKak9XRTNZbUUwWm1JaUxDSjBZV2NpT2lJaWZRPT0=', 1760463456),
('qi4RYcS7Lk9KgmOa58MtqRzh87SfSiuCtF8c8yST', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbkZTUzFOT1ZFVkhaV3A0YlVwQ09WQTNiRnBSTlZFOVBTSXNJblpoYkhWbElqb2lOVkZyTUZKVllrSk9UR1VyY1RKamIzQnVZMGxyWjFCMU1FNDVVQzlKWVRReVNWVjBTWGhRWVV0UVozSm5TVnBwY3pCck0wczNiRlJTU0doWmVUUlFMMEZtZVZSTVRWRnpNbTAyU214TlVETTRUVUZRTTIxeFdFd3Jhamx5WVZSVVJXMHpOakJXVDBWWlVtdG9TMHByZDNjeFRtcFdhV1UyTjFCQlUycGliak56UkhWb1RGbzRTRXBQVm1kVGFIbHFTM2cyZEdwaWJuUm9TRGxxUmtoSk1VSlViVU5CTlVsMWMxWnFLM1ZMVFRKMFFVMVlRMXB1VjJwSlpUUTFibWwwTjBSRlJITjZla2s1ZEZJNVRFaFhSekV2Y1hReWNXRkRNak41WlcxdlVYaEdSeXQyU25GWU5TOXJlazlpYlVwMVdsSmlVMlpxZDBwNWFHVm5aa1EwWVVzM1dtMVNUbmR3UzNGVGFESk5OMFZDVEdGMFVFRTlQU0lzSW0xaFl5STZJbUptWmpBeE1tUTBaVGsxTXpobU1EUXlaV0ZrT0RZME1HTXdaVGs0WmpWa01tTXpaR1JqWkdJNU1tRTJOMlptTnpNeFlXSTNORGRrWW1ObE4yUTFaamtpTENKMFlXY2lPaUlpZlE9PQ==', 1760464151),
('TrWP1DqaiHZroluuglFKV1QWXoN6REeiQ3zQ6LvS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJa3haU25wRWVGUlVNMFpvT0ROVVVsVlVlVlJTU1ZFOVBTSXNJblpoYkhWbElqb2llSEphY0hFd1owNUJhVlkwVlU4MWVUZDNUMkZWYjNSWU9IbFlOMVpSUVZRMVZWWjNiVUphU21kaGVHTnpTVTVqYlZoT1VXaHdUbEJvWW1JemVXUnZNVzUxTVhsVFkySndkMGQ0ZFhsc1ZXRm1SR3N5Vm1sRU1YTkJSbXcwWjFOMFFXTlhWalpLUjFod01ERnZSazVLWm1oS01ra3pOVFU1YzI1QlN6UkhZM0k1UzBkR2VrWlVVbW81VHpoUFNUbGtSMk4wYWsxUVRtWXhSWGhtY3pKWk16Rk5iWFJ3SzBKSVRVTlVNbXRUUzJaT1VYTTRkRE5VTlhsdFRFSXlZWFo2VTFCWU16WjVXbEpwV2k5RFZqTkhTREJ5UkdWVWQxWmxkR3RzZEVWWk1VMTBUWFY0ZVVvMVRWbDBTSHBoY1hvMFFWRmpRVEp2YTJGMVZqUjRXVEIyVUNJc0ltMWhZeUk2SW1FMU5HTTNOemczWldWak9XWXlPV1kzTUdZM1l6VXhPVGRrWkRWaU5ERTFNamRpTXpCaU1URm1ZalJsT0dFeFpHVmhaVGsyTjJabU9URmtZbVJpT0RFaUxDSjBZV2NpT2lJaWZRPT0=', 1760463449),
('Ujn2gTSOMkwVLK5vRAvjHhhEQd7SyG9Vz8X5JvO8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJblp6WlZnM2FXNTFNVTl5ZWs0MVlUSjZXbWN5VTBFOVBTSXNJblpoYkhWbElqb2lXSE5EYlZacVNsWkZiME50YWsxeGFEWkRPRUYyWlZWSlQyZHpNMEl4TXpaR2QySlBhM2RqZUN0clF6TmlhVFZsUkhaaVlWUTNObFJoTUcxQmFYRjRUM2hXTms5bVFWSlFkbmcyVlRsdk1sWkdNMHhxVkZSNVNIUnRURU5HT0hKck1UTjVValpSTWpSRFYxVnpkbEF5VFVac2NGUktORTlNZDJkM01FaFVRVlZ3Y0VZMlRsSmxTMFo2V1ZOdFdYSjZhMFZHZGtGMVJHSm5iMVpoVlcxdWEyVlRWazV6TDBsTVpXSmxPV05vTm5GTGMwSnNlWHBQTWt4M1NHUkRWSGR5UkVKbVZIa3JVVEo0V1dsU1NVRnhZMEpqY1dsWk5UbHRkeTkxVmlzclpUSlhXVkpsY0RKbFduaHpaRzl5T0ZKaVZFNUhVRE15Um1adU5VOVRjVlpQYlVGSmVUY3JkMmhQWTBWQlVGUkNVVnBaUlU4M1FVRTlQU0lzSW0xaFl5STZJamM0TTJJeU1tTXhOVGcwTXpCbVptSTFNamcyWmpabE9EUTRNamszWXpCaU5qYzJOVFE0TURSbU9ERm1aRFV3WXpKaU5qRmlZVGMyWkdRNE9UVmlZV0lpTENKMFlXY2lPaUlpZlE9PQ==', 1760463838),
('VXrnhutDkkNClXUbL4CEd6U2L9X79izdFAJurYEY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbHBEV1dkaVlsSmlOV3BSWkdOd1QyWm5TVzlTY1ZFOVBTSXNJblpoYkhWbElqb2lVMWxXV21Sc1VIaGpWemh2WTJOVmVqUk5kMWRZVFRCaE1tVnZaemxOWjNKTVlWSnhTMGgxZVcxbFRtaHRURTAzY1dsMFJtRjZRMjFPV0dKQk4zaG5NREF3V0RSdk9UWkxjRVZxUkZKeU5UWmhWbFJOWkdoYUsyWm5iazR5ZWtwck1YUlJPVEpXTVdGNFRIZG9abEJqV1hWa1VuQm5TMFk1U1dkNk4xcFRkRFZ2TjBoU2VHSjVPVmRxZG5waWJXbFJSek5rVGtGNlVWRkRhRU5sV1dKWlRrZ3ZLMkUzSzBadWRYcHFaMUJpYlVZMU9UUm5MMEZGWm1nNVV5c3hkelJKVVVwSFdIcE9lbUZaYm01UlpXTnBSbFF3Y3lzMU5rcHBXVlJLTWxWT2FEaFBjMlJ6YWxwMGMyVlVXSGxWVHpRMWFHOVBhMDh2YVdsTGJGSkRiRXRxVVNJc0ltMWhZeUk2SWpobFpEVmlNV1k0TVRSaFl6TTVNR0k1TW1FeU5USXdNbVZsWlRJNFpqUTBaVE5qTnpnME1tUmlaVFJsWWpka09EZ3lNbUZsTVRRMk5XSmtNbU5tWldFaUxDSjBZV2NpT2lJaWZRPT0=', 1760463695),
('WFRAF0Ztqk6mC7OaV32TsdA0K9s9pJ9VRQQoSeAl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJazE0ZDNNME5ESXZNV3BZYm5rd1UxSmhhMUJ1WjBFOVBTSXNJblpoYkhWbElqb2lWazgwUTJWV2FsRlhPWGxZWjNGRFowUkliMko0WkhsQ2JsTmhTRzlQVjB4TksyWkZObEJzVW5CRFFXUkJVelZ2WjNGNk1EWXlNSFpNTnpCMFdHOUtiRXd4ZVZSb1YwbG9jVGhsZGxjd1YycHRNakJzZVRkV0swOXdla0pYTUdKU1dtUllNemQ1VFVSV0wyRlpNbVkxYTJGTVVXUTJia2R2TkhscFVYRllia0ZSTVhSUmJYbzBRMU55Y1hFeVRURnZZMHRGUjBrdlUxWTVkR1p4ZUcxQ2FEWnFlbmRKVkVSc2IzWm1Oa2xZTUd4NFNWTkthalEzUTJwQmFEWXJXalUxV2poaVNYQk5ha3QyTUhKNGVucFhSeXRTUzNkWU9EWkJielI0YmpCaVZIaFRabUZyUlU1dEszUmxNekpGTmxOM1lqQjNjeXM0Wm1oNFNsa3lSRE5QYWs5TmVrMXhUVEJrZVcxWmRISnBlbWhyTVRKNGQyYzlQU0lzSW0xaFl5STZJbUUxTkRjMU1XTmlZV05oTnpJM04yVmhZVE0xTTJJNU1HSm1NV1psWlRneVlqSTVNemsyWlRKbU9EaGlaVFU1TWpFME1HWTJOVFpsWkRabVptWXdNMkVpTENKMFlXY2lPaUlpZlE9PQ==', 1760458384),
('wGPVummex5R43SsH0fA1mSujtBHZbW9cDPMstgAo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbGxPTkc5NmVYUktMMWx2TVZGNmJXcEtkbEpyUVVFOVBTSXNJblpoYkhWbElqb2lTSHBNZUdkaE1VdE1VM2RzY25wSEwxRjNiaTgwVDJ0blFVb3djWGRzZVRORmFubFFiMEZzZVZkTFJXTlJlalJOYm5KT1NDOHJVVVl6ZGtGU04zYzRSVkJqUlZFelZtWTBSMmhLTDJsUE1tWTVZVUZEV2xCR1JIQlFjRUpJVFVFd2JsaDZPRUkzWkN0VmJGQTJRVFpOTUZFMksyeFZORTQ1VVZwUGJYTmtRMjgxU1doWUswcFNTR2hUTjBoR2JUZGxOMmh2VVRoMVIwOWFka1UyZUZVdldXcGhWbXRoYzFFM2MxZEdVMGxRTXpob1kzcEpRbTVCWkdWUmQzRjZOM0V3ZUhCVVptUldSSE5TYnpCME1YQlBPVVl5TjNSU2N6SjZhbVZ3UlhWVFUyZHpXWGhDWlVaWlUzWXJlRGxYUjFNck1GQkRaMjQ1ZUU0M2JHOVhLekJXYzJSMU1WVkZTRzR5Wnl0cU1XcFhaVFV3VWxJMllrRTlQU0lzSW0xaFl5STZJbVJqWlRZd05EVTVOakF3TlRBM05ETTFZVEV4WTJOa01UazNaV1EwWWpsak1tSTBZbVJrTXpNeE16YzRaamszTnpGaVpUZzRPVEEyWVRNeFpETXlZVFlpTENKMFlXY2lPaUlpZlE9PQ==', 1760463846),
('ygsn4MThhDmGeVaEFyp3bFuSFlC7yGqUmytCkKSu', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'ZXlKcGRpSTZJbEZqZUdwS01WbEZjMjlTV1U1MFRqWkxjVEpPVmtFOVBTSXNJblpoYkhWbElqb2lRbGx2VGpSdFVHeGplU3N2ZVdoa05FSnljRVIyWmxaWGVHeGxjazFqT0VnNE9DdDBjMlZ2YmxkeVNHcDJOemxsZEdOblJHMXpWbnBtZVdOdVNXUlVhMGhhZUhaeFZWQlRhSFpDT0dseGNsQXpibVV2UjBrNVkybzNaV2RqUTJkeU1HazNTa3RDZW1GSWFtbDBNRTh2V0RSRmJraGlaREo0ZWxKUVEyOUNXREZVVWxwa1MwVm1lbU5ZTVV4dFZIZEtaVVpZVWxweFlubEllRXR3ZFU5MlZVTjBLMVJsV1U1dlRteHBhMEZtZFU4MlRWSlhkMlowWlhWQ016SkRaMDFwVTNwaVkyVmhWaXN4YzFWQ1MzRXdPRXd6ZDBKQlNrMTJjRnBIVHpjMU9ETTNWMjlpVTBkbU4zUkVNMmRPYVhkVFNUUXpiR1JXYTB0bVIzbDNLMnR6U2lJc0ltMWhZeUk2SWpZNFlqSTRabU5pTW1FeU1HUTVNekUzT0RBd056Z3lObU0yTVRVeFpHSmhaVFV5WmpkbU5URXhNR0ptTkdaa01tWmpNakptWXpkak5EYzNNelF5TkRNaUxDSjBZV2NpT2lJaWZRPT0=', 1760463407);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admission_no` varchar(255) NOT NULL,
  `roll_no` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `date_of_birth` date NOT NULL,
  `class` varchar(255) NOT NULL,
  `section` varchar(255) DEFAULT NULL,
  `admission_year` year(4) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `guardian_phone` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `leaving_reson` varchar(255) DEFAULT NULL,
  `cunduct` varchar(255) DEFAULT NULL,
  `tc_status` tinyint(4) DEFAULT NULL COMMENT '1=>Request, 2 =>\r\nGenreted',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `admission_no`, `roll_no`, `first_name`, `last_name`, `gender`, `date_of_birth`, `class`, `section`, `admission_year`, `address`, `phone`, `email`, `father_name`, `mother_name`, `guardian_phone`, `status`, `leaving_reson`, `cunduct`, `tc_status`, `created_at`, `updated_at`) VALUES
(1, 'ADM1001', '1', 'Aarav', 'Sharma', 'Male', '2010-05-12', '5', 'A', '2018', '12 MG Road, Mumbai', '9876543210', 'aarav.sharma@gmail.com', 'Rakesh Sharma', 'Sunita Sharma', '9876501234', 'Active', NULL, NULL, 1, NULL, NULL),
(2, 'ADM1002', '2', 'Ananya', 'Gupta', 'Female', '2012-11-20', '7', 'B', '2019', '45 Sector 22, Delhi', '9876512340', 'ananya.gupta@gmail.com', 'Rajesh Gupta', 'Pooja Gupta', '9876512341', 'Active', NULL, NULL, 1, NULL, NULL),
(3, 'ADM1003', '3', 'Vihaan', 'Verma', 'Male', '2011-03-15', '6', 'C', '2018', '78 Park Street, Kolkata', '9876523450', 'vihaan.verma@gmail.com', 'Sandeep Verma', 'Neha Verma', '9876523451', 'Inactive', NULL, NULL, 1, NULL, NULL),
(4, 'ADM1004', '4', 'Ishita', 'Patel', 'Female', '2009-07-30', '8', 'D', '2017', '32 MG Road, Ahmedabad', '9876534560', 'ishita.patel@gmail.com', 'Manish Patel', 'Anjali Patel', '9876534561', 'Active', NULL, NULL, 1, NULL, NULL),
(5, 'ADM1005', '5', 'Rohan', 'Mehta', 'Male', '2013-01-10', '4', 'A', '2020', '56 Hill View, Pune', '9876545670', 'rohan.mehta@gmail.com', 'Ashok Mehta', 'Rekha Mehta', '9876545671', 'Active', NULL, NULL, 1, NULL, NULL),
(6, 'ADM1006', '6', 'Saanvi', 'Reddy', 'Female', '2012-09-25', '7', 'B', '2019', '22 MG Road, Hyderabad', '9876556780', 'saanvi.reddy@gmail.com', 'Kiran Reddy', 'Latha Reddy', '9876556781', 'Inactive', NULL, NULL, 1, NULL, NULL),
(7, 'ADM1007', '7', 'Arjun', 'Kumar', 'Male', '2011-06-18', '6', 'C', '2018', '15 Park Lane, Bangalore', '9876567890', 'arjun.kumar@gmail.com', 'Raj Kumar', 'Priya Kumar', '9876567891', 'Active', NULL, NULL, 1, NULL, NULL),
(8, 'ADM1008', '8', 'Tanya', 'Singh', 'Female', '2010-12-05', '5', 'D', '2017', '88 MG Road, Lucknow', '9876578900', 'tanya.singh@gmail.com', 'Sanjay Singh', 'Anita Singh', '9876578901', 'Active', NULL, NULL, 1, NULL, NULL),
(9, 'ADM1009', '9', 'Kabir', 'Chopra', 'Male', '2013-08-22', '4', 'A', '2020', '33 Green Park, Delhi', '9876589010', 'kabir.chopra@gmail.com', 'Vikram Chopra', 'Radhika Chopra', '9876589011', 'Inactive', NULL, NULL, 1, NULL, NULL),
(10, 'ADM1010', '10', 'Mira', 'Joshi', 'Female', '2011-02-14', '6', 'B', '2018', '77 Rose Street, Mumbai', '9876590120', 'mira.joshi@gmail.com', 'Harish Joshi', 'Neeta Joshi', '9876590121', 'Active', NULL, NULL, 1, NULL, NULL),
(11, 'ADM1011', '11', 'Krishna', 'Shah', 'Male', '2012-05-03', '7', 'C', '2019', '19 Park Avenue, Ahmedabad', '9876591230', 'krishna.shah@gmail.com', 'Anil Shah', 'Maya Shah', '9876591231', 'Active', NULL, NULL, 1, NULL, NULL),
(12, 'ADM1012', '12', 'Nisha', 'Desai', 'Female', '2009-10-17', '8', 'D', '2017', '40 MG Road, Surat', '9876592340', 'nisha.desai@gmail.com', 'Ramesh Desai', 'Meera Desai', '9876592341', 'Inactive', NULL, NULL, 1, NULL, NULL),
(13, 'ADM1013', '13', 'Aditya', 'Agarwal', 'Male', '2010-03-28', '5', 'A', '2018', '28 Hill Street, Jaipur', '9876593450', 'aditya.agarwal@gmail.com', 'Sanjay Agarwal', 'Sunita Agarwal', '9876593451', 'Active', NULL, NULL, 1, NULL, NULL),
(14, 'ADM1014', '14', 'Pooja', 'Khan', 'Female', '2013-07-12', '4', 'B', '2020', '11 MG Road, Bangalore', '9876594560', 'pooja.khan@gmail.com', 'Imran Khan', 'Farah Khan', '9876594561', 'Inactive', NULL, NULL, 1, NULL, '2025-10-22 06:58:21'),
(15, 'ADM1015', '15', 'Raghav', 'Malhotra', 'Male', '2011-11-05', '6', 'C', '2018', '55 Park Street, Delhi', '9876595670', 'raghav.malhotra@gmail.com', 'Deepak Malhotra', 'Shalini Malhotra', '9876595671', 'Inactive', NULL, NULL, 1, NULL, NULL),
(16, 'ADM1016', '16', 'Sakshi', 'Rai', 'Female', '2012-04-20', '7', 'D', '2019', '36 MG Road, Patna', '9876596780', 'sakshi.rai@gmail.com', 'Ravi Rai', 'Sunita Rai', '9876596781', 'Active', NULL, NULL, 1, NULL, NULL),
(17, 'ADM1017', '17', 'Yash', 'Verma', 'Male', '2010-09-15', '5', 'A', '2018', '44 Rose Street, Lucknow', '9876597890', 'yash.verma@gmail.com', 'Anand Verma', 'Rekha Verma', '9876597891', 'Active', NULL, NULL, 1, NULL, NULL),
(18, 'ADM1018', '18', 'Anika', 'Sharma', 'Female', '2011-06-30', '6', 'B', '2018', '77 Hill View, Pune', '9876598900', 'anika.sharma@gmail.com', 'Rajesh Sharma', 'Pooja Sharma', '9876598901', 'Inactive', NULL, NULL, 1, NULL, NULL),
(19, 'ADM1019', '19', 'Dev', 'Patel', 'Male', '2009-01-20', '8', 'C', '2017', '12 MG Road, Ahmedabad', '9876599010', 'dev.patel@gmail.com', 'Manish Patel', 'Anjali Patel', '9876599011', 'Active', NULL, NULL, 1, NULL, NULL),
(20, 'ADM1020', '20', 'Meera', 'Kaur', 'Female', '2012-12-25', '7', 'D', '2019', '33 Park Avenue, Delhi', '9876590122', 'meera.kaur@gmail.com', 'Harjit Kaur', 'Simran Kaur', '9876590123', 'Active', NULL, NULL, 1, NULL, NULL),
(21, 'ADM1021', '21', 'Arnav', 'Singh', 'Male', '2011-03-05', '6', 'A', '2018', '21 Hill Lane, Jaipur', '9876591124', 'arnav.singh@gmail.com', 'Vikram Singh', 'Rita Singh', '9876591125', 'Inactive', NULL, NULL, 1, NULL, NULL),
(22, 'ADM1022', '22', 'Diya', 'Verma', 'Female', '2010-07-15', '5', 'B', '2017', '67 MG Road, Patna', '9876592126', 'diya.verma@gmail.com', 'Raj Verma', 'Neha Verma', '9876592127', 'Active', NULL, NULL, 1, NULL, NULL),
(23, 'ADM1023', '23', 'Krish', 'Shah', 'Male', '2013-02-18', '4', 'C', '2020', '89 Park Street, Delhi', '9876593128', 'krish.shah@gmail.com', 'Sanjay Shah', 'Pooja Shah', '9876593129', 'Active', NULL, NULL, 1, NULL, NULL),
(24, 'ADM1024', '24', 'Ira', 'Agarwal', 'Female', '2012-05-20', '7', 'D', '2019', '13 Rose Avenue, Mumbai', '9876594130', 'ira.agarwal@gmail.com', 'Anil Agarwal', 'Maya Agarwal', '9876594131', 'Inactive', NULL, NULL, 1, NULL, NULL),
(25, 'ADM1025', '25', 'Shaurya', 'Patel', 'Male', '2011-08-25', '6', 'A', '2018', '35 MG Road, Ahmedabad', '9876595132', 'shaurya.patel@gmail.com', 'Manish Patel', 'Anjali Patel', '9876595133', 'Active', NULL, NULL, 1, NULL, NULL),
(26, 'ADM1026', '26', 'Anaya', 'Mehta', 'Female', '2010-11-12', '5', 'B', '2017', '55 Hill Street, Pune', '9876596134', 'anaya.mehta@gmail.com', 'Rakesh Mehta', 'Sunita Mehta', '9876596135', 'Active', NULL, NULL, 1, NULL, NULL),
(27, 'ADM1027', '27', 'Ritvik', 'Kumar', 'Male', '2013-03-30', '4', 'C', '2020', '78 Park Lane, Bangalore', '9876597136', 'ritvik.kumar@gmail.com', 'Raj Kumar', 'Priya Kumar', '9876597137', 'Inactive', NULL, NULL, 1, NULL, '2025-10-22 02:20:11'),
(28, 'ADM1028', '28', 'Kiara', 'Singh', 'Female', '2011-06-05', '6', 'D', '2018', '22 MG Road, Lucknow', '9876598138', 'kiara.singh@gmail.com', 'Sanjay Singh', 'Anita Singh', '9876598139', 'Active', NULL, NULL, 1, NULL, NULL),
(29, 'ADM1029', '29', 'Ayaan', 'Chopra', 'Male', '2012-09-14', '7', 'A', '2019', '44 Green Park, Delhi', '9876599140', 'ayaan.chopra@gmail.com', 'Vikram Chopra', 'Radhika Chopra', '9876599141', 'Active', NULL, NULL, 1, NULL, NULL),
(30, 'ADM1030', '30', 'Tara', 'Joshi', 'Female', '2010-12-20', '5', 'B', '2017', '19 Rose Street, Mumbai', '9876590142', 'tara.joshi@gmail.com', 'Harish Joshi', 'Neeta Joshi', '9876590143', 'Inactive', NULL, NULL, 1, NULL, NULL),
(31, 'ADM1031', '31', 'Aryan', 'Sharma', 'Male', '2011-05-14', '6', 'A', '2018', '14 MG Road, Mumbai', '9876591144', 'aryan.sharma@gmail.com', 'Rakesh Sharma', 'Sunita Sharma', '9876501145', 'Active', NULL, NULL, 1, NULL, NULL),
(32, 'ADM1032', '32', 'Riya', 'Gupta', 'Female', '2012-08-20', '7', 'B', '2019', '22 Sector 22, Delhi', '9876592146', 'riya.gupta@gmail.com', 'Rajesh Gupta', 'Pooja Gupta', '9876512147', 'Active', NULL, NULL, 1, NULL, NULL),
(33, 'ADM1033', '33', 'Sai', 'Verma', 'Male', '2010-11-11', '5', 'C', '2017', '35 Park Street, Kolkata', '9876593148', 'sai.verma@gmail.com', 'Sandeep Verma', 'Neha Verma', '9876523149', 'Inactive', NULL, NULL, 1, NULL, NULL),
(34, 'ADM1034', '34', 'Anvi', 'Patel', 'Female', '2013-02-18', '4', 'D', '2020', '46 MG Road, Ahmedabad', '9876594150', 'anvi.patel@gmail.com', 'Manish Patel', 'Anjali Patel', '9876534151', 'Active', NULL, NULL, 1, NULL, NULL),
(35, 'ADM1035', '35', 'Arya', 'Mehta', 'Male', '2011-07-25', '6', 'A', '2018', '58 Hill View, Pune', '9876595152', 'arya.mehta@gmail.com', 'Ashok Mehta', 'Rekha Mehta', '9876545153', 'Active', NULL, NULL, 1, NULL, NULL),
(36, 'ADM1036', '36', 'Myra', 'Reddy', 'Female', '2012-03-12', '7', 'B', '2019', '23 MG Road, Hyderabad', '9876596154', 'myra.reddy@gmail.com', 'Kiran Reddy', 'Latha Reddy', '9876556155', 'Inactive', NULL, NULL, 1, NULL, NULL),
(37, 'ADM1037', '37', 'Vivaan', 'Kumar', 'Male', '2010-06-05', '5', 'C', '2017', '17 Park Lane, Bangalore', '9876597156', 'vivaan.kumar@gmail.com', 'Raj Kumar', 'Priya Kumar', '9876567157', 'Active', NULL, NULL, 1, NULL, NULL),
(38, 'ADM1038', '38', 'Diya', 'Singh', 'Female', '2013-12-28', '4', 'D', '2020', '89 MG Road, Lucknow', '9876598158', 'diya.singh@gmail.com', 'Sanjay Singh', 'Anita Singh', '9876578159', 'Active', NULL, NULL, 1, NULL, NULL),
(39, 'ADM1039', '39', 'Kabir', 'Chopra', 'Male', '2011-09-22', '6', 'A', '2018', '34 Green Park, Delhi', '9876599160', 'kabir.chopra@gmail.com', 'Vikram Chopra', 'Radhika Chopra', '9876589161', 'Inactive', NULL, NULL, 1, NULL, NULL),
(40, 'ADM1040', '40', 'Mira', 'Joshi', 'Female', '2010-01-15', '5', 'B', '2017', '78 Rose Street, Mumbai', '9876590162', 'mira.joshi@gmail.com', 'Harish Joshi', 'Neeta Joshi', '9876590163', 'Active', NULL, NULL, 1, NULL, NULL),
(41, 'ADM1041', '41', 'Krishna', 'Shah', 'Male', '2012-05-30', '7', 'C', '2019', '21 Park Avenue, Ahmedabad', '9876591164', 'krishna.shah@gmail.com', 'Anil Shah', 'Maya Shah', '9876591165', 'Active', NULL, NULL, 1, NULL, NULL),
(42, 'ADM1042', '42', 'Nisha', 'Desai', 'Female', '2009-10-22', '8', 'D', '2017', '43 MG Road, Surat', '9876592166', 'nisha.desai@gmail.com', 'Ramesh Desai', 'Meera Desai', '9876592167', 'Inactive', NULL, NULL, 1, NULL, NULL),
(43, 'ADM1043', '43', 'Aditya', 'Agarwal', 'Male', '2010-03-11', '5', 'A', '2018', '27 Hill Street, Jaipur', '9876593168', 'aditya.agarwal@gmail.com', 'Sanjay Agarwal', 'Sunita Agarwal', '9876593169', 'Active', NULL, NULL, 1, NULL, NULL),
(44, 'ADM1044', '44', 'Pooja', 'Khan', 'Female', '2013-07-20', '4', 'B', '2020', '12 MG Road, Bangalore', '9876594170', 'pooja.khan@gmail.com', 'Imran Khan', 'Farah Khan', '9876594171', 'Active', NULL, NULL, 1, NULL, NULL),
(45, 'ADM1045', '45', 'Raghav', 'Malhotra', 'Male', '2011-11-05', '6', 'C', '2018', '56 Park Street, Delhi', '9876595172', 'raghav.malhotra@gmail.com', 'Deepak Malhotra', 'Shalini Malhotra', '9876595173', 'Inactive', NULL, NULL, 1, NULL, NULL),
(46, 'ADM1046', '46', 'Sakshi', 'Rai', 'Female', '2012-04-20', '7', 'D', '2019', '37 MG Road, Patna', '9876596174', 'sakshi.rai@gmail.com', 'Ravi Rai', 'Sunita Rai', '9876596175', 'Active', NULL, NULL, 1, NULL, NULL),
(47, 'ADM1047', '47', 'Yash', 'Verma', 'Male', '2010-09-15', '5', 'A', '2018', '45 Rose Street, Lucknow', '9876597176', 'yash.verma@gmail.com', 'Anand Verma', 'Rekha Verma', '9876597177', 'Active', NULL, NULL, 1, NULL, NULL),
(48, 'ADM1048', '48', 'Anika', 'Sharma', 'Female', '2011-06-30', '6', 'B', '2018', '78 Hill View, Pune', '9876598178', 'anika.sharma@gmail.com', 'Rajesh Sharma', 'Pooja Sharma', '9876598179', 'Inactive', NULL, NULL, 1, NULL, NULL),
(49, 'ADM1049', '49', 'Dev', 'Patel', 'Male', '2009-01-20', '8', 'C', '2017', '13 MG Road, Ahmedabad', '9876599180', 'dev.patel@gmail.com', 'Manish Patel', 'Anjali Patel', '9876599181', 'Active', NULL, NULL, 1, NULL, NULL),
(50, 'ADM1050', '50', 'Meera', 'Kaur', 'Female', '2012-12-25', '7', 'D', '2019', '34 Park Avenue, Delhi', '9876590182', 'meera.kaur@gmail.com', 'Harjit Kaur', 'Simran Kaur', '9876590183', 'Active', NULL, NULL, 1, NULL, NULL),
(51, 'ADM1051', '51', 'Arnav', 'Singh', 'Male', '2011-03-05', '6', 'A', '2018', '22 Hill Lane, Jaipur', '9876591184', 'arnav.singh@gmail.com', 'Vikram Singh', 'Rita Singh', '9876591185', 'Inactive', NULL, NULL, 1, NULL, NULL),
(52, 'ADM1052', '52', 'Diya', 'Verma', 'Female', '2010-07-15', '5', 'B', '2017', '68 MG Road, Patna', '9876592186', 'diya.verma@gmail.com', 'Raj Verma', 'Neha Verma', '9876592187', 'Active', NULL, NULL, 1, NULL, NULL),
(53, 'ADM1053', '53', 'Krish', 'Shah', 'Male', '2013-02-18', '4', 'C', '2020', '90 Park Street, Delhi', '9876593188', 'krish.shah@gmail.com', 'Sanjay Shah', 'Pooja Shah', '9876593189', 'Active', NULL, NULL, 1, NULL, NULL),
(54, 'ADM1054', '54', 'Ira', 'Agarwal', 'Female', '2012-05-20', '7', 'D', '2019', '14 Rose Avenue, Mumbai', '9876594180', 'ira.agarwal@gmail.com', 'Anil Agarwal', 'Maya Agarwal', '9876594181', 'Inactive', NULL, NULL, 1, NULL, NULL),
(55, 'ADM1055', '55', 'Shaurya', 'Patel', 'Male', '2011-08-25', '6', 'A', '2018', '36 MG Road, Ahmedabad', '9876595182', 'shaurya.patel@gmail.com', 'Manish Patel', 'Anjali Patel', '9876595183', 'Active', NULL, NULL, 1, NULL, NULL),
(56, 'ADM1056', '56', 'Anaya', 'Mehta', 'Female', '2010-11-12', '5', 'B', '2017', '56 Hill Street, Pune', '9876596184', 'anaya.mehta@gmail.com', 'Rakesh Mehta', 'Sunita Mehta', '9876596185', 'Active', NULL, NULL, 1, NULL, NULL),
(57, 'ADM1057', '57', 'Ritvik', 'Kumar', 'Male', '2013-03-30', '4', 'C', '2020', '79 Park Lane, Bangalore', '9876597186', 'ritvik.kumar@gmail.com', 'Raj Kumar', 'Priya Kumar', '9876597187', 'Inactive', NULL, NULL, 1, NULL, NULL),
(58, 'ADM1058', '58', 'Kiara', 'Singh', 'Female', '2011-06-05', '6', 'D', '2018', '23 MG Road, Lucknow', '9876598188', 'kiara.singh@gmail.com', 'Sanjay Singh', 'Anita Singh', '9876598189', 'Active', NULL, NULL, 1, NULL, NULL),
(59, 'ADM1059', '59', 'Ayaan', 'Chopra', 'Male', '2012-09-14', '7', 'A', '2019', '45 Green Park, Delhi', '9876599180', 'ayaan.chopra@gmail.com', 'Vikram Chopra', 'Radhika Chopra', '9876599181', 'Active', NULL, NULL, 1, NULL, NULL),
(60, 'ADM1060', '60', 'Tara', 'Joshi', 'Female', '2010-12-20', '5', 'B', '2017', '20 Rose Street, Mumbai', '9876590182', 'tara.joshi@gmail.com', 'Harish Joshi', 'Neeta Joshi', '9876590183', 'Inactive', NULL, NULL, 1, NULL, NULL),
(61, 'Svnic01', '061', 'Shivanshi ', 'Mishra', 'Female', '2008-01-01', '11', 'B', '2005', 'Ajad Nagar , Ikauna , Shrawasti', '6386369558', 'shivasnhi@gmail.com', 'Gyan Prakash Mishra', 'Sanju Mishra', '8851677536', 'Active', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathersname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fathersname`, `email`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Suyogya', 'Gyan Prakash Mishra', 'suyogyamishr@gmail.com', '$2y$10$uC2nWKGnIZmGeW0wedDNpeLChDBgMXGjDLwquOITJEn3jX6c5AqEq', 1, 1, '2025-10-24 07:39:26', '2025-10-24 07:39:26'),
(3, 'admin', 'admin@123', 'admin@gmail.com', '$2y$10$qZT9qc2WPZKTNgDODo/Gdu9Vf4hh/XSAoYUVOUnVa8Pi4/KT4xlrK', 2, 1, '2025-10-25 05:32:41', '2025-10-25 05:32:41'),
(4, 'Shivanshi Mishra', 'GGGGG', 'aarav.sharma@gmail.com', '$2y$10$HqM0bFKUD3PE.6GSdjSMWOPO.8LDxKjp1zo9HSoucSs7DEE5P3He6', 1, 1, '2025-10-25 06:32:14', '2025-10-25 06:32:14'),
(5, 'ananya', 'dddd', 'ananya.gupta@gmail.com', '$2y$10$bQDFjLth.j.Acqm/vCnL..06bsWfPdDPrI27rqyiAgUsArG983lma', 2, 1, '2025-10-25 06:34:38', '2025-10-25 06:34:38'),
(6, 'Krish Shah', 'Raja ram Shah', 'krish.shah@gmail.com', '$2y$10$iINdkWtk.VwCbgE5Y8OqOeap9Tzx5R1jP/udNPE4xdN2Dn/iyKxQC', 1, 1, '2025-10-25 11:59:56', '2025-10-25 11:59:56'),
(7, 'Shivanshi Mishra', 'Gyan Prakash Mishra', 'shivasnhi@gmail.com', '$2y$10$qZT9qc2WPZKTNgDODo/Gdu9Vf4hh/XSAoYUVOUnVa8Pi4/KT4xlrK', 1, 1, '2025-10-26 02:26:01', '2025-10-26 02:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `web_content`
--

CREATE TABLE `web_content` (
  `id` int(11) NOT NULL,
  `HeroTitle` varchar(255) NOT NULL,
  `Hero_Description` varchar(255) DEFAULT NULL,
  `Years` int(255) NOT NULL,
  `Student` int(255) NOT NULL,
  `Success` int(255) NOT NULL,
  `Mission_Statement` varchar(255) DEFAULT NULL,
  `Vision_Statement` varchar(255) DEFAULT NULL,
  `schoolPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_content`
--

INSERT INTO `web_content` (`id`, `HeroTitle`, `Hero_Description`, `Years`, `Student`, `Success`, `Mission_Statement`, `Vision_Statement`, `schoolPic`) VALUES
(1, 'Welcome to SVNIC', 'Nurturing young minds from Nursery to Grade 12 with excellence, compassion, and innovation.', 25, 1200, 95, 'To provide quality education that empowers students to become confident, creative, and compassionate global citizens.', 'To be a leading educational institution that inspires lifelong learning, critical thinking, and social responsibility.', 'uploads/cFLjkAqEOjTWKHq2RwVjfB2Wfsog6LCmr1jDSx4e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions_table`
--
ALTER TABLE `admissions_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admissions_table_email_unique` (`email`);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file_id` (`file_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fees_student_id_foreign` (`student_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marks_student_id_foreign` (`student_id`);

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
-- Indexes for table `school_info`
--
ALTER TABLE `school_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_admission_no_unique` (`admission_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_content`
--
ALTER TABLE `web_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissions_table`
--
ALTER TABLE `admissions_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school_info`
--
ALTER TABLE `school_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `web_content`
--
ALTER TABLE `web_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`);

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `fees_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
