-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 08:12 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_models`
--

CREATE TABLE `crud_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crud_models`
--

INSERT INTO `crud_models` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(9, 'jaime3', '$2y$10$b61Z/Obd1thN.BsqC13olefCnz1omhSvpgtooJvK9NU/eIepn4MUq', 'jramosjr@gmail.com1', '2017-06-15 18:15:41', '2017-06-15 18:15:41'),
(10, 'jaime5', '$2y$10$B4vwSLesPA4086zapEzlK.dqXVOEnQKQ21rQYvByawxq9iqCFOTMO', 'jramosjr@gmail.com2', '2017-06-15 18:23:29', '2017-06-15 18:23:29'),
(12, 'jaime11', '$2y$10$R.HkSpVd12eve5XAPguc8uHsMcEwZEGGhmhJfrg15eGXuLocuHani', 'jarhen20@yahoo.com1', '2017-06-15 22:12:12', '2017-06-15 22:12:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_models`
--
ALTER TABLE `crud_models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_models`
--
ALTER TABLE `crud_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
