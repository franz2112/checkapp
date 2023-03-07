-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220423.6d54ac471a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 04:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checkapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meetingLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `clinic_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Confirming',
  `paymentstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctor`, `consultation`, `date`, `time`, `reason`, `specialId`, `meetingLink`, `status`, `clinic_id`, `user_id`, `created_at`, `updated_at`, `state`, `paymentstatus`) VALUES
(30, '6', 'Face-to-Face', '2022-12-13', '9:30am', 'asd', NULL, NULL, 'Decline', 2, 5, '2022-12-10 22:40:58', '2022-12-15 07:35:05', 'Confirming', NULL),
(31, '6', 'Online', '2022-12-13', '4pm', 'axdf', NULL, 'asd', 'Decline', 2, 1, '2022-12-11 04:39:02', '2022-12-15 07:35:46', 'Confirming', NULL),
(32, '4', 'Face-to-Face', '2022-12-15', '2pm', 'dxfcg', NULL, NULL, 'Decline', 1, 30, '2022-12-13 03:44:51', '2022-12-13 03:44:51', 'Confirming', NULL),
(33, '6', 'Face-to-Face', '2022-12-16', '8pm', 'asdfssdf', NULL, NULL, 'Approve', 2, 1, '2022-12-13 14:17:16', '2022-12-13 17:45:50', 'Completed', NULL),
(34, '4', 'Face-to-Face', '2022-12-15', '8:30am', 'dfg', NULL, NULL, 'Decline', 1, 1, '2022-12-13 17:48:57', '2022-12-16 01:02:12', 'Confirming', NULL),
(35, '13', 'Face-to-Face', '2022-12-16', '3:30pm', 'headache', NULL, NULL, 'Decline', 7, 30, '2022-12-13 18:31:36', '2022-12-13 19:15:40', 'Confirming', NULL),
(36, '14', 'Online', '2022-12-19', '8:30am', 'ubo', NULL, NULL, 'pending', 9, 35, '2022-12-13 22:02:19', '2022-12-13 22:07:09', 'Confirming', NULL),
(37, '14', 'Face-to-Face', '2022-12-19', '10:30am', 'Headache', NULL, NULL, 'Approve', 9, 1, '2022-12-13 22:13:35', '2022-12-18 18:47:50', 'Completed', NULL),
(38, '14', 'Face-to-Face', '2022-12-19', '2pm', 'HeadAche', NULL, NULL, 'Approve', 9, 29, '2022-12-18 05:02:10', '2022-12-18 05:12:31', 'Completed', NULL),
(39, '14', 'Face-to-Face', '2022-12-19', '6am', 'virtigo', NULL, NULL, 'Approve', 9, 1, '2022-12-18 18:23:04', '2022-12-18 19:21:09', 'Completed', NULL),
(40, '14', 'Face-to-Face', '2022-12-19', '5pm', 'hello world', NULL, NULL, 'Approve', 9, 1, '2022-12-18 21:11:04', '2022-12-18 21:13:27', 'Completed', NULL),
(41, '14', 'Face-to-Face', '2022-12-19', '6:30pm', 'sdlkfjasdj', NULL, NULL, 'Approve', 9, 1, '2022-12-18 21:47:49', '2022-12-18 22:55:13', 'Waiting', NULL),
(42, '14', 'Face-to-Face', '2022-12-19', '8pm', 'sdilfhoi', NULL, NULL, 'Approve', 9, 1, '2022-12-18 22:03:31', '2022-12-18 22:07:59', 'Completed', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_sets`
--

CREATE TABLE `appointment_sets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_sets`
--

INSERT INTO `appointment_sets` (`id`, `doctor_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 4, '2022-11-14', '2022-11-12 19:00:52', '2022-11-12 19:00:52'),
(2, 4, '2022-11-10', '2022-11-13 01:17:21', '2022-11-13 01:17:21'),
(4, 4, '2022-11-29', '2022-11-13 02:00:50', '2022-11-13 02:00:50'),
(5, 4, '2022-11-16', '2022-11-13 16:48:18', '2022-11-13 16:48:18'),
(6, 4, '2022-12-09', '2022-11-18 21:44:20', '2022-11-18 21:44:20'),
(7, 4, '2022-12-08', '2022-11-19 20:49:43', '2022-11-19 20:49:43'),
(8, 4, '2022-11-28', '2022-11-23 19:12:12', '2022-11-23 19:12:12'),
(9, 11, '2022-11-25', '2022-11-23 20:13:36', '2022-11-23 20:13:36'),
(10, 11, '2022-12-01', '2022-11-23 20:13:42', '2022-11-23 20:13:42'),
(11, 10, '2022-12-01', '2022-11-23 20:16:12', '2022-11-23 20:16:12'),
(12, 10, '2022-11-27', '2022-11-23 20:16:22', '2022-11-23 20:16:22'),
(13, 5, '2022-12-03', '2022-11-24 01:41:04', '2022-11-24 01:41:04'),
(14, 6, '2022-12-13', '2022-12-04 05:35:18', '2022-12-04 05:35:18'),
(15, 6, '2022-12-16', '2022-12-04 08:14:20', '2022-12-04 08:14:20'),
(16, 6, '2022-12-30', '2022-12-04 09:51:24', '2022-12-04 09:51:24'),
(17, 12, '2022-12-23', '2022-12-05 05:34:50', '2022-12-05 05:34:50'),
(18, 6, '2022-12-08', '2022-12-05 23:30:45', '2022-12-05 23:30:45'),
(19, 4, '2022-12-15', '2022-12-13 03:37:29', '2022-12-13 03:37:29'),
(20, 13, '2022-12-16', '2022-12-13 18:30:38', '2022-12-13 18:30:38'),
(21, 14, '2022-12-19', '2022-12-13 21:56:58', '2022-12-13 21:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clinicname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ofname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `olname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ccontact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `qrimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`id`, `clinicname`, `ofname`, `olname`, `caddress`, `cemail`, `Ccontact`, `Profile`, `Proof`, `status`, `created_at`, `updated_at`, `user_id`, `qrimage`, `street`) VALUES
(1, 'ClinicName Clinic', 'Owners', 'Name', '123 Owners Address St. Brgy. GPS ', 'clinic@gmail.com', '09872635461', '1666110593.jpg', '1666110593.pdf', 'registered', '2022-10-18 00:29:53', '2022-10-19 15:56:41', 2, NULL, ''),
(2, 'Diagnostic Clinic', 'Gerald', 'Anderson', 'Korondal City, South Cotabato', 'diagnostic@gmail.com', '092397129127', '1666229172.jpg', '1666229172.pdf', 'registered', '2022-10-19 09:26:12', '2022-12-04 09:51:50', 4, '1670128783.png', ''),
(3, 'clincsample Clinic', 'fritz', 'tuazon', 'clinicadress', 'docgtor@gmail.com', '091231234522', '1666681975.jpg', '1666681975.png', 'pending', '2022-10-24 15:12:55', '2022-10-24 15:14:52', 23, NULL, ''),
(4, 'ClinicName1 Clinic', 'fritz2', 'Anderson2', 'Korondal City south cot', 'Doctor@email.com', '091232481254', '1666888014.png', '1666888014.pdf', 'pending', '2022-10-27 00:26:54', '2022-10-27 00:35:45', 25, NULL, ''),
(5, 'Helping Hands Clinic', 'Johnny', 'Bravo', '631 Browning Lane', 'theJbravo@yahoo.com', '09233456789', '1666917486.jpg', '1666917486.pdf', 'pending', '2022-10-27 08:38:06', '2022-10-27 08:39:04', 27, NULL, ''),
(7, 'Tuna Clinic', 'fritz', 'tuna', '123 south cot', 'fritz@gmail.com', '0929831239', '1670984478.png', '1670984478.txt', 'registered', '2022-12-13 18:21:18', '2022-12-13 18:34:20', 32, '1670985260.png', ''),
(8, 'Esteves Clinic', 'christ', 'esteves', 'surallah', 'esteves@gmail.com', '09231234421', '1670989272.png', '1670989274.txt', 'pending', '2022-12-13 19:41:14', '2022-12-13 19:42:05', 33, NULL, ''),
(9, 'Francis Clinic', 'Francis', 'Solmayor', 'Korondal City', 'francissol@gmail.com', '09332434', '1670997169.png', '1670997169.txt', 'registered', '2022-12-13 21:52:49', '2022-12-13 21:55:19', 34, '1670997319.png', ''),
(10, 'sdf', 'asdf', 'asdf', 'Korondalad City, Brgy. Avanceña', 'asdfsdf@gmail.com', '12324523543', NULL, NULL, 'pending', '2022-12-17 23:15:51', '2022-12-17 23:15:51', NULL, NULL, 'sfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Dfname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dlname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bdate` date NOT NULL,
  `Specialization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Demail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinic_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `Dfname`, `Dlname`, `Gender`, `Bdate`, `Specialization`, `Demail`, `Dphone`, `file`, `clinic_id`, `created_at`, `updated_at`) VALUES
(4, 'fritzs', 'tuazom', 'Male', '2022-10-20', 'Cardiologists', 'Doctorsamp@gmail.com', '+63 (48) 290 1907', '1666254845.jpg', 1, '2022-10-19 16:34:05', '2022-11-13 16:27:38'),
(5, 'Doctor', 'Sample', 'Male', '2021-06-30', 'Cardiologists', 'Doctorsamp1@gmail.com', '+63 (48) 290 1908', '1666255082.jpg', 1, '2022-10-19 16:38:02', '2022-11-04 22:47:44'),
(6, 'Doctor4', 'Sample4', 'Male', '2022-10-22', 'Cardiologists', 'Doctorsamp4@gmail.com', '+63 (48) 290 1907', '1667539095.jpg', 2, '2022-10-19 16:38:52', '2022-12-04 09:50:07'),
(7, 'franc', 'sol', 'Male', '2022-10-26', 'Cardiologists', 'Doctorsamp4@gmail.com', '+63 (48) 290 190122', '1666682874.jpg', 3, '2022-10-24 15:27:54', '2022-10-24 15:27:54'),
(8, 'franz', 'sol', 'Male', '2022-10-18', 'General', 'Doctorsamp4@gmail.com', '+63 (48) 290 19055', '1666889087.jpg', 3, '2022-10-27 00:44:47', '2022-10-27 00:44:47'),
(9, 'Gil', 'Jason', 'Male', '2022-10-29', 'Cardiologists', 'Doctorsamp4@gmail.com', '+63 (48) 290 19053', '1666889470.jpg', 4, '2022-10-27 00:51:10', '2022-10-27 00:51:10'),
(10, 'Julio', 'Cecil', 'Male', '2022-10-20', 'Gynecology', 'drfixyou@gmail.com', '09345678910', '1666917694.jpg', 5, '2022-10-27 08:41:34', '2022-10-27 08:41:34'),
(11, 'Mer', 'Chris', 'Male', '2022-11-18', 'General', 'drfixyou2@gmail.com', '+63 (48) 290 19012', '1667631423.jpg', 1, '2022-11-03 05:18:15', '2022-11-04 22:57:03'),
(12, 'Gil', 'Jason', 'Male', '2022-12-13', 'General', 'Gil@gmail.com', '09123332812', '1670247235.png', 2, '2022-12-05 05:33:55', '2022-12-05 05:33:55'),
(13, 'fritz', 'tuna', 'Male', '2022-12-15', 'General', 'fritz@gmail.com', '09123123123', '1670985017.png', 7, '2022-12-13 18:30:17', '2022-12-13 18:30:17'),
(14, 'Fritz', 'Tuazon', 'Male', '2022-12-06', 'General', 'fritz@gmail.com', '09123123123', '1670997364.png', 9, '2022-12-13 21:56:04', '2022-12-13 21:56:04');

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
-- Table structure for table `medical_records`
--

CREATE TABLE `medical_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointments_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_records`
--

INSERT INTO `medical_records` (`id`, `result`, `appointments_id`, `created_at`, `updated_at`) VALUES
(3, 'you have cough', 37, '2022-12-16 21:24:36', '2022-12-16 21:24:36'),
(4, 'Confirm headache', 33, '2022-12-16 21:39:08', '2022-12-16 21:39:08'),
(5, 'Gastritis', 38, '2022-12-18 05:20:50', '2022-12-18 05:20:50'),
(9, 'dfn', 39, '2022-12-18 19:35:47', '2022-12-18 19:35:47'),
(10, 'francis', 40, '2022-12-18 21:59:15', '2022-12-18 21:59:15');

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
(54, '2014_10_12_000000_create_users_table', 1),
(55, '2014_10_12_100000_create_password_resets_table', 1),
(56, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(57, '2019_08_19_000000_create_failed_jobs_table', 1),
(58, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(59, '2022_09_23_225628_create_sessions_table', 1),
(83, '2022_10_18_081354_create_doctors_table', 2),
(84, '2022_10_18_161017_create_clinics_table', 2),
(85, '2022_10_20_154219_create_appointments_table', 2),
(95, '2022_11_03_090658_create_appointment_sets_table', 3),
(96, '2022_11_07_013353_create_times_table', 3),
(98, '2022_12_04_041951_add_qrimage_to_clinics_table', 5),
(100, '2022_12_02_155848_create_notifications_table', 6),
(109, '2022_12_15_001521_create_medical_records_table', 7),
(110, '2022_12_17_021643_create_prescriptions_table', 7),
(111, '2022_12_18_070848_add_street_to_clinic_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointments_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `prescription`, `appointments_id`, `created_at`, `updated_at`) VALUES
(1, 'Paracetamol', 33, '2022-12-17 01:26:07', '2022-12-17 01:26:07'),
(2, 'Antihistamine', 38, '2022-12-18 05:23:25', '2022-12-18 05:23:25'),
(5, 'haoids', 37, '2022-12-18 19:35:18', '2022-12-18 19:35:18'),
(6, 'dflksd', 39, '2022-12-18 19:36:01', '2022-12-18 19:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dHmmsY8uVGfaIfNmdpxsTT0VMQvdIVTq76CidjtY', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:108.0) Gecko/20100101 Firefox/108.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiS25OSUxlU0FFME5LaVI1TTdkU0pBSVRWRGMxWlk1alBEWVRjRTN0TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL3Byb2ZpbGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRmZ05vUWZkY3RkS2ozU0ouVlRwS2xlRVh2TC5XVEFpWWliUkhWT3QyYlJvTXhPN2tEcEFoUyI7fQ==', 1671547465),
('LAeUY5gE5LcDOBlbeiovDsJGgcjOKC36RmblKn1I', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:108.0) Gecko/20100101 Firefox/108.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieHoybzVUTTMyZjRmNEVVdEx0U0hIZ21kQ2VyVXlQY3g4SE4zeUd0eSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VzZXIvcHJvZmlsZSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvdXNlci9wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1671547345),
('mspTXu081JGqrxwVct51FWQetDkUj5KgyYyIRZgR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYUJzZ09HdmJUVnRrNzhWN0I4amt4Ym9DRVFWMU1IQmtmRUxUdTB5aCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC93ZWxjb21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1678203617),
('P1GbepZB5nnXuYEDbhXJQw7To3oHbjS07rriTWbb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRmFhQm1zUzRGZk9OR3I2SDJCV1h3RThXWXA3bDJFN29GT2pwQjZxWSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1678203608),
('Xx3oumDbGvBN9bPrMdkUjtjBUHSPRySueQ1TXORt', 30, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/110.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY3ZkdzhnTUVXamx6bTBGZzVNMXMxSkJFcWhEQ2p5dmI2Z2pJM2hlViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjMwO30=', 1677424508);

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointmentSet_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `appointmentSet_id`, `status`, `time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '6am', '2022-11-12 19:00:52', '2022-12-18 18:23:04'),
(6, 5, 0, '10am', '2022-11-13 16:48:18', '2022-11-13 16:48:18'),
(7, 5, 0, '12pm', '2022-11-13 16:48:18', '2022-11-13 16:48:18'),
(70, 6, 1, '10:30am', '2022-11-19 19:06:47', '2022-12-13 22:13:35'),
(71, 6, 0, '11:30am', '2022-11-19 19:06:47', '2022-12-06 00:58:50'),
(72, 6, 1, '6:30pm', '2022-11-19 19:06:47', '2022-12-18 21:47:49'),
(82, 4, 1, '6am', '2022-11-19 19:11:03', '2022-12-18 18:23:04'),
(83, 4, 0, '7:30am', '2022-11-19 19:11:03', '2022-11-19 19:11:03'),
(84, 4, 0, '6pm', '2022-11-19 19:11:03', '2022-11-19 19:11:03'),
(120, 2, 0, '7am', '2022-11-20 01:21:50', '2022-11-20 01:21:50'),
(121, 2, 0, '1:30pm', '2022-11-20 01:21:50', '2022-11-20 01:21:50'),
(122, 8, 1, '6am', '2022-11-23 19:12:12', '2022-12-18 18:23:04'),
(123, 8, 0, '11:30am', '2022-11-23 19:12:12', '2022-12-06 00:58:50'),
(124, 8, 1, '3:30pm', '2022-11-23 19:12:12', '2022-12-13 18:31:36'),
(125, 8, 0, '6pm', '2022-11-23 19:12:12', '2022-11-23 19:12:12'),
(126, 9, 0, '7am', '2022-11-23 20:13:36', '2022-11-23 20:13:36'),
(127, 9, 1, '10:30am', '2022-11-23 20:13:36', '2022-12-13 22:13:35'),
(128, 10, 1, '9:30am', '2022-11-23 20:13:42', '2022-12-10 22:40:58'),
(129, 10, 1, '8pm', '2022-11-23 20:13:42', '2022-12-18 22:03:31'),
(130, 11, 0, '7am', '2022-11-23 20:16:12', '2022-11-23 20:16:12'),
(131, 11, 1, '10:30am', '2022-11-23 20:16:12', '2022-12-13 22:13:35'),
(132, 11, 0, '5:30pm', '2022-11-23 20:16:12', '2022-11-23 20:16:12'),
(133, 12, 0, '6:30am', '2022-11-23 20:16:22', '2022-11-23 20:16:22'),
(134, 12, 0, '7:30am', '2022-11-23 20:16:22', '2022-11-23 20:16:22'),
(135, 12, 0, '11am', '2022-11-23 20:16:22', '2022-11-23 20:16:22'),
(136, 12, 1, '5pm', '2022-11-23 20:16:22', '2022-12-18 21:11:04'),
(137, 13, 0, '9am', '2022-11-24 01:41:04', '2022-11-24 01:41:04'),
(138, 13, 1, '6:30pm', '2022-11-24 01:41:04', '2022-12-18 21:47:49'),
(139, 7, 1, '6am', '2022-12-01 14:58:25', '2022-12-18 18:23:04'),
(140, 7, 0, '12:30pm', '2022-12-01 14:58:25', '2022-12-01 18:03:58'),
(150, 14, 1, '9:30am', '2022-12-04 09:42:46', '2022-12-10 22:40:58'),
(151, 14, 1, '4pm', '2022-12-04 09:42:46', '2022-12-11 04:39:02'),
(152, 15, 1, '6am', '2022-12-04 09:43:13', '2022-12-18 18:23:04'),
(153, 15, 1, '10:30am', '2022-12-04 09:43:13', '2022-12-13 22:13:35'),
(154, 15, 0, '4:30pm', '2022-12-04 09:43:13', '2022-12-04 09:43:13'),
(155, 15, 1, '8pm', '2022-12-04 09:43:13', '2022-12-18 22:03:31'),
(156, 16, 0, '7:30am', '2022-12-04 09:51:24', '2022-12-04 09:51:24'),
(161, 17, 0, '8am', '2022-12-05 05:35:32', '2022-12-05 05:35:32'),
(162, 17, 1, '10:30am', '2022-12-05 05:35:32', '2022-12-13 22:13:35'),
(163, 17, 1, '4pm', '2022-12-05 05:35:32', '2022-12-11 04:39:02'),
(164, 17, 0, '4:30pm', '2022-12-05 05:35:33', '2022-12-05 05:35:33'),
(165, 17, 1, '5pm', '2022-12-05 05:35:33', '2022-12-18 21:11:04'),
(166, 18, 1, '6am', '2022-12-05 23:30:45', '2022-12-18 18:23:04'),
(167, 18, 0, '11:30am', '2022-12-05 23:30:45', '2022-12-06 00:58:50'),
(168, 18, 0, '3pm', '2022-12-05 23:30:45', '2022-12-05 23:30:45'),
(169, 18, 0, '4:30pm', '2022-12-05 23:30:45', '2022-12-05 23:30:45'),
(170, 18, 1, '8pm', '2022-12-05 23:30:45', '2022-12-18 22:03:31'),
(171, 19, 1, '8:30am', '2022-12-13 03:37:29', '2022-12-13 22:02:19'),
(172, 19, 1, '2pm', '2022-12-13 03:37:29', '2022-12-18 05:02:10'),
(173, 19, 0, '7pm', '2022-12-13 03:37:29', '2022-12-13 03:37:29'),
(174, 20, 1, '6am', '2022-12-13 18:30:38', '2022-12-18 18:23:04'),
(175, 20, 1, '3:30pm', '2022-12-13 18:30:38', '2022-12-13 18:31:36'),
(185, 21, 0, '6am', '2022-12-18 19:05:54', '2022-12-18 19:05:54'),
(186, 21, 0, '8:30am', '2022-12-18 19:05:54', '2022-12-18 19:05:54'),
(187, 21, 0, '10:30am', '2022-12-18 19:05:54', '2022-12-18 19:05:54'),
(188, 21, 0, '2pm', '2022-12-18 19:05:54', '2022-12-18 19:05:54'),
(189, 21, 1, '5pm', '2022-12-18 19:05:54', '2022-12-18 21:11:04'),
(190, 21, 0, '6pm', '2022-12-18 19:05:54', '2022-12-18 19:05:54'),
(191, 21, 1, '6:30pm', '2022-12-18 19:05:54', '2022-12-18 21:47:49'),
(192, 21, 0, '7pm', '2022-12-18 19:05:54', '2022-12-18 19:05:54'),
(193, 21, 1, '8pm', '2022-12-18 19:05:54', '2022-12-18 22:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `mname`, `lname`, `address`, `email`, `email_verified_at`, `phone`, `usertype`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'fuser', 'fuser', 'fuser', 'user address', 'user@gmail.com', NULL, '09090909090', '0', '$2y$10$fgNoQfdctdKj3SJ.VTpKleEXvL.WTAiYibRHVOt2bRoMxO7kDpAhS', NULL, NULL, NULL, 'KTkEh0tk77UhXV9Cb92L6YwpwEL62s2uLLIv9fM79cMQFvrsyeprjm3nh2wc', NULL, 'profile-photos/ICCmjwujrT2GKcrhhuFVoboJ3eniLZiAWn3JQGG0.jpg', '2022-10-16 18:30:53', '2022-12-20 06:44:24'),
(2, 'fclinic1', 'mclinic1', 'lclinic1', 'clinicaddree', 'clinic@gmail.com', NULL, '09283891721', '1', '$2y$10$3GaPHWQMIiTz7ZQXNvosHuBF7UZZH1zvhTmA4zTyIR.1CGhHPrrJq', NULL, NULL, NULL, 'GFt4HvhwbC45ExvtEtoWWAQllNHtYTF30dBJDP5PBJDpx71foZgNa74Lm3iL', NULL, NULL, '2022-10-16 18:31:54', '2022-10-19 23:56:41'),
(3, 'fadmin1', 'madmin1', 'ladmin1', 'admin address', 'Addev@gmail.com', NULL, '09283891722', '2', '$2y$10$u6eRrlr9nRHUvULmYsCLVeaY6z.CNqwKI95ewL3G4D9mPAZlxFnqa', NULL, NULL, NULL, 'QHSK2FtIfxWZsuqKpBYwJ3MVvBlzKnJ1CSelQOr9CIeGOV6D1l3RYMNOuaHn', NULL, NULL, '2022-10-16 18:33:08', '2022-10-16 18:33:08'),
(4, 'Geranld', 'E', 'Anderson', 'Korondal City', 'diagnostic@gmail.com', NULL, '092838917226', '1', '$2y$10$pzcp6d.zcDGyWYGgme/WZumHuBu1pZvBYFkmPFQcgw4ygx0Pwygke', NULL, NULL, NULL, 'bxBy0ppHD5vjYvatlZUcFExlD0UUirp93WujjNg7b1X4RsgWB8iHpqw8mlna', NULL, NULL, '2022-10-16 19:37:58', '2022-10-19 23:46:02'),
(5, 'Fuser1', 'Fuser1', 'Fuser1', 'User1 Adress', 'User1@gmail.com', NULL, '09283891724', '0', '$2y$10$tnQGjELmj71nxBEY4HYPGe0Kjx1DeJIk/SKD3SIbuiKzWxln410cW', NULL, NULL, NULL, 'HlskkyRRTEqAgOlns4VYStL9N2TN5dtfGhuYbA6uR1vSAvT4QVfdNhK8ky4f', NULL, 'profile-photos/PC53kjJuehC2J2yz3wgrSgzyNG4U9USmWzcIvVxN.jpg', '2022-10-23 21:24:45', '2022-12-10 09:52:50'),
(21, 'fuser2', 'muser2', 'luser2', 'user2Address2', 'user2@gmail.com', NULL, '09079032441', '0', '$2y$10$f9IrPE3/.C19596dfs.Rle4inn8h4W105YJ.h8Mx4TshG2KDHSYvO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-24 18:45:38', '2022-10-24 18:45:38'),
(22, 'gil jason', 't', 'tuna', 'Tuna adress', 'Tuna@gmail.com', NULL, '09283891723', '0', '$2y$10$dt3SqirzV6kYAhXgLIYv3.xihKLMY3ARRfi9CQO/xRLREQW0wkqOK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-24 23:03:58', '2022-10-24 23:03:58'),
(23, 'doctor2', 'h', 'Sample', 'Adresssample', 'docgtor@gmail.com', NULL, '09283891787', '1', '$2y$10$DB0nt74NIKLaJv7DHF6Uj.okWAchM9lkkW7jhefz/AYrdNm.ErZtm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-24 23:07:16', '2022-10-24 23:14:52'),
(24, 'frtiz', 'm', 'Tyuaz', 'Adress', 'Email@gmail.ciom', NULL, '09123123431', '0', '$2y$10$TDtVW6AKvsmWcMRiWvYbkuBv7fy6EDOkAIiAD0FGAUPe/jBKlFjTK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-27 08:17:23', '2022-10-27 08:17:23'),
(25, 'Doctor', 'sda', 'SOl', 'Clinicadress', 'Doctor@email.com', NULL, '0909090904', '1', '$2y$10$0maR6WZjdRMNScimXOe3euQRKrkMjD0JdmdnlPILUsDHWoWek2TYG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-27 08:32:57', '2022-10-27 08:35:45'),
(26, 'Sara', 'P', 'Dela Cruz', '471 Boring Lane', 'Sara@gmail.com', NULL, '0912234567', '0', '$2y$10$zz6doGHRw6ZrNWdDXJpqXudeSUwwfSylEZs3yrjj4TwIC2bSwWWI6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-27 16:30:09', '2022-10-27 16:30:09'),
(27, 'Johnny', 'a', 'Bravo', '631 Browning Lane', 'theJbravo@yahoo.com', NULL, '09233456789', '1', '$2y$10$d9.WluOXtFwTsjHxdCW3de7fBqS6yWzWBsAeatwT5VqQQAa2DAQKW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-27 16:35:52', '2022-10-27 16:39:04'),
(28, 'Fritz', 'L', 'Tuazon', 'San Koronadal City', 'Tuaz@gmail.com', NULL, '09273617382', '0', '$2y$10$7xJ18kyA6RhP6nHz0s/nZOnMUT/USKLFI.KcaxR7uIAtcZR2iCJLW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-04 19:05:27', '2022-12-04 19:05:27'),
(29, 'Fritz', 'Fritz', 'Fritz', 'Sitio Guadalupe, Brgy. Sabn Isidro, Koronadal City, South Cotabato', 'fritz123.tuazon08@gmail.com', NULL, '09105344829', '0', '$2y$10$.PuLbaBc5pFhlbpqz8tgS.xmKiFGV0JVyoBs5WRzCxdl4Bim13zUW', 'eyJpdiI6IkREbTNxaFJWMU5CVWNpZ0hmL3ZEZmc9PSIsInZhbHVlIjoiQ2xKL0tBcnE4SHlaaEJGTk4xUm55U0N4aUdHaDk0MWJ4SGpEMVZwZTJKRT0iLCJtYWMiOiI1ODQ0NzQyMDhiMGVhZTljMzRmMWVjZmZhMmQ4YmNiOWMxN2MyYmM5OTkwYjQzMTliMTI3MWJmMjVjYjNlNzBlIiwidGFnIjoiIn0=', 'eyJpdiI6IlFkaXkzRUlrZ2UxK3BpMnJJZWtpRUE9PSIsInZhbHVlIjoibVpMN0duVFZjT2FaMUNUczh3Rm03UkJ4SWsyMTcvSmpiWHRzYTM2eDNLTzNKUlJGK3E5ZVY5SUpoSXlxSy9WNkgvaXgydjBkeVE2NWVQcVRTdUwxdW5TTUxKYVNXSmQ2RmxZTXN4TDBDWGRGVWRXNXNZc0cwWDhENmJvWkNYcTJsN1VJWW5lSitSWUt2dWNkVnBFb2YxT201MFNsckxGL2YxODV5b3ZlRzNjSGpMZ04yZUN2R0crdXVqQ1Y3YzUxaGpXaEdzdWlCQnROTmVFRnRFaXV6aHZSMXdVZDUxMm9MMXhjUzhXMnAvRENtUE5zNVpYS0doYXg0dFNTWWp2MlQ3a2JWSEZCY1hyUWIxMFI1MWZkTEE9PSIsIm1hYyI6ImQ4MGZkNGU3ZmY3MmNmMDg2NjM2ZDliZGY1NDE5Y2JjYjQ4YTQ1ZGVjNWM1ZTg0OWUwNDE3MGNkOGVmYjZmNDQiLCJ0YWciOiIifQ==', '2022-12-04 21:37:15', NULL, NULL, 'profile-photos/HrrGjJ5QFC8vy6tp6FHt529FxfELwugIBjllQR08.jpg', '2022-12-04 21:31:45', '2022-12-18 04:49:06'),
(30, 'francis', 'sar', 'solmayor', 'koronadal city', 'francis@gmail.com', NULL, '09123124121', '0', '$2y$10$ynX9UyShGdkdZhRE6PpGFeW9/A9UkWdCXx/rqxhfk8thzxBBT1OV.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-05 05:19:30', '2022-12-05 05:19:30'),
(31, 'francis', 'mich', 'solm', '123kor city', 'franz@gmail.com', NULL, '09123182467', '0', '$2y$10$DRzYyiUVPgO5RA8YwV9H9ObHoVCMASQERgKGsOrIDjsbxU.xkQ7k2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-13 18:13:39', '2022-12-13 18:13:39'),
(32, 'fritz', 'l', 'tuna', '123south cot', 'fritz@gmail.com', NULL, '09123818274', '1', '$2y$10$SHRUsfntIF6bTsOIBcl1POh8nos0nG9EW7jd6DKHFIB49snTzQg2.', NULL, NULL, NULL, '7tnBgTew6VjMSTYFXBLaYDOy5tkTGZFbOpLkqUGpE954OHo75oexSKVsKFGy', NULL, NULL, '2022-12-13 18:16:52', '2022-12-13 18:26:56'),
(33, 'Christian', 'R', 'Esteves', 'Surallah', 'esteves@gmail.com', NULL, '09123712780', '1', '$2y$10$vC13xeBYgrGW6x8HokV9V.GOJ20elWQo63lGFTlLXs5JLtvc55lNu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-13 19:37:37', '2022-12-13 19:42:05'),
(34, 'francis', 's', 'Solmayor', 'Korcitu', 'francissol@gmail.com', NULL, '09342379872', '1', '$2y$10$GO686Ek5VAxMiMhVUhM7yeSAfJttww0hw009CEhaAfj0R/aqdloFq', NULL, NULL, NULL, 'hNwL4W9xI3BFwWMqmEzaIyi5svJcRRcC6chgTZf0yZrHXE1g32i6U5TnqCrF', NULL, NULL, '2022-12-13 21:49:38', '2022-12-13 21:53:39'),
(35, 'Fritz', 'Lotche', 'Tuazon', 'Kor', 'fritztuazon08@gmail.com', NULL, '09569316387', '0', '$2y$10$loLBmGrHiVCPGovTN/9YkenyHfIXprNKPc9yim2eVplaUUA.L28cu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-13 21:59:34', '2022-12-13 21:59:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_clinic_id_foreign` (`clinic_id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`);

--
-- Indexes for table `appointment_sets`
--
ALTER TABLE `appointment_sets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clinics_cemail_unique` (`cemail`),
  ADD UNIQUE KEY `clinics_ccontact_unique` (`Ccontact`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_clinic_id_index` (`clinic_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `appointment_sets`
--
ALTER TABLE `appointment_sets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_records`
--
ALTER TABLE `medical_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_clinic_id_foreign` FOREIGN KEY (`clinic_id`) REFERENCES `clinics` (`id`),
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



