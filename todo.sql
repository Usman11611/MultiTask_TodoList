-- Name: Usman Haider        MultiTask-TodoList      Date:03/23/2024
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 04:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cit_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT, -- Unique ID for each todo item
  `priority` int NOT NULL DEFAULT 0, -- Priority of the todo item
  `todo` varchar(255) NOT NULL, -- Description of the todo item
  `Deadline` date NOT NULL, -- Deadline for completing the todo item
  `status` tinyint(1) NOT NULL DEFAULT 0, -- Status of the todo item (completed or not)
  `created_at` datetime NOT NULL DEFAULT current_timestamp(), -- Timestamp for creation of the todo item
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(), -- Timestamp for last update of the todo item
  PRIMARY KEY (`id`) -- Primary key constraint on the ID
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Sample data for `todo` table
INSERT INTO `todo` (`id`, `priority`, `todo`, `Deadline`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Saturday Lab Class Exam', '2022-01-15', 1, '2022-01-13 20:38:37', '2022-01-13 21:17:52'),
(2, 2, 'Coding for 6 hours', '2022-01-22', 1, '2022-01-13 20:51:20', '2022-01-13 21:21:13'),
(4, 3, 'Going to Market', '2022-01-21', 1, '2022-01-13 21:18:34', '2022-01-13 21:21:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
