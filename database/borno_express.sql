-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2024 at 05:24 PM
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
-- Database: `borno_express`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) NOT NULL,
  `name` varchar(222) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `vehicle_number` varchar(222) NOT NULL,
  `capacity` varchar(222) NOT NULL,
  `type` varchar(222) NOT NULL,
  `model` varchar(222) NOT NULL,
  `driver_name` varchar(222) NOT NULL,
  `driver_contact` varchar(222) DEFAULT NULL,
  `seat_count` int(10) DEFAULT 0,
  `trip` int(10) DEFAULT 0,
  `status` varchar(222) DEFAULT "Active"
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `id` bigint(20) NOT NULL,
  `name` varchar(222) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `age` varchar(222) DEFAULT '18',
  `gender` varchar(222) NOT NULL,
  `phone_number` varchar(222) NOT NULL,
  `emergency_number` varchar(222) NOT NULL,
  `first_contact_number` varchar(222) DEFAULT NULL,
  `ticket_id` varchar(222) NOT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `age`, `gender`, `phone_number`, `emergency_number`, `first_contact_number`, `ticket_id`, `address`) VALUES
(1, '111', '2024-10-24 17:12:49', '2024-10-24 17:12:49', NULL, '11', 'Human', '111', '111', '111', '671a8011a19e9', '111'),
(2, '111', '2024-10-24 17:29:36', '2024-10-24 17:29:36', NULL, '11', 'Human', '111', '111', '111', '671a84005e115', '111'),
(3, 'Muhammad Tukur', '2024-10-24 17:56:18', '2024-10-24 17:56:18', NULL, '12', 'Human', '08165141519', '08165141519', '08165141519', '671a8a4237ce0', 'Polo Maiduguri'),
(4, 'Ali Mustapha Shettima', '2024-10-24 18:09:51', '2024-10-24 18:09:51', NULL, '25', 'Human', '08165141619', '08165141519', '08165141519', '671a8d6f68cd3', 'Maiduguri, Borno State, Nigeria  TopNotch Sevice Next to Kuru Yoghurt Ramat Polytechnic, Maiduguri.'),
(5, 'Adamu Usman', '2024-10-25 15:07:27', '2024-10-25 15:07:27', NULL, '28', 'Human', '0907654323', '08076654334', '08066776787', '671bb42f17519', 'kfhosgghuo');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` bigint(20) NOT NULL,
  `name` varchar(222) NOT NULL,
  `departure` varchar(222) NOT NULL,
  `destination` varchar(222) NOT NULL,
  `status` varchar(222) DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadate_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) NOT NULL,
  `ticket_id` varchar(222) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `vehicle_id` varchar(222) NOT NULL,
  `passenger_id` varchar(222) DEFAULT NULL,
  `emergency_contact` varchar(222) NOT NULL DEFAULT '08165141519',
  `destination` varchar(222) NOT NULL,
  `departure` varchar(222) NOT NULL,
  `status` varchar(222) DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `ticket_id`, `created_at`, `update_at`, `deleted_at`, `vehicle_id`, `passenger_id`, `emergency_contact`, `destination`, `departure`, `status`) VALUES
(1, '671a7f86d3152', '2024-10-24 17:10:30', '2024-10-24 17:10:30', NULL, '1', NULL, '111', '111', 'Borno Express Maiduguri', 'Success'),
(2, '671a7fb8beeae', '2024-10-24 17:11:20', '2024-10-24 17:11:20', NULL, '1', NULL, '111', '111', 'Borno Express Maiduguri', 'Success'),
(3, '671a7fea6d6dd', '2024-10-24 17:12:10', '2024-10-24 17:12:10', NULL, '1', NULL, '111', '111', 'Borno Express Maiduguri', 'Success'),
(4, '671a8011a19e9', '2024-10-24 17:12:49', '2024-10-24 17:12:49', NULL, '1', NULL, '111', '111', 'Borno Express Maiduguri', 'Success'),
(5, '671a84005e115', '2024-10-24 17:29:36', '2024-10-24 17:29:36', NULL, '1', NULL, '111', '111', 'Borno Express Maiduguri', 'Success'),
(6, '671a8a4237ce0', '2024-10-24 17:56:18', '2024-10-24 17:56:18', NULL, '1', NULL, '08165141519', 'Lagos', 'Borno Express Maiduguri', 'Success'),
(7, '671a8d6f68cd3', '2024-10-24 18:09:51', '2024-10-24 18:09:51', NULL, '1', NULL, '08165141519', 'Lagos', 'Borno Express Maiduguri', 'Success'),
(8, '671bb42f17519', '2024-10-25 15:07:27', '2024-10-25 15:07:27', NULL, '1', NULL, '08076654334', 'jigawa', 'Borno Express Maiduguri', 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(222) NOT NULL DEFAULT 'Anonymous',
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(222) NOT NULL DEFAULT 'Active',
  `address` varchar(222) NOT NULL,
  `phone_number` varchar(222) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `profile_picture` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`, `status`, `address`, `phone_number`, `is_admin`, `profile_picture`) VALUES
(1, 'Anonymous', 'email@mail.com', '$2y$10$6OXi3tRvXWoSnn2d83ZnbeBO5GRrIBLfAbMLa285k.GNWgMisKlrm', '2024-10-20 17:43:25', '2024-10-20 17:43:25', NULL, '0', '', '', 0, NULL),
(3, 'Anonymous', 'user2@pass.word', '$2y$10$bN2iUjxLWpG.Hoe/HkV2xu54qaLxwN5fzCsdBNlQASweRWe9wTP3O', '2024-10-20 17:45:07', '2024-10-20 17:45:07', NULL, '0', '', '', 0, NULL),
(4, 'Anonymous', 'a@b.c', '$2y$10$4CEPTNohCOL6mCS77KQFEemsYwDKC3gw32rTxOP1VsD6/NTy4uER2', '2024-10-24 14:04:16', '2024-10-24 14:04:16', NULL, '0', '', '', 0, NULL),
(5, 'Anonymous', 'alimustaphashettima@gmail.com', '$2y$10$o/Bu1WpxLdmCc.Y34DbaIOdEQ8k9zsnHDZ/gvuaIVkRPlLds1R5mu', '2024-10-25 15:14:52', '2024-10-25 15:14:52', NULL, '0', '', '', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
