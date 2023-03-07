-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220423.6d54ac471a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 11:18 PM
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
(13, 5, '2022-12-01', '2022-11-24 01:41:04', '2022-11-24 01:41:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_sets`
--
ALTER TABLE `appointment_sets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_sets`
--
ALTER TABLE `appointment_sets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



