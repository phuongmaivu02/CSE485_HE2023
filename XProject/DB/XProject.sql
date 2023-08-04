-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 04, 2023 at 12:37 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `XProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `salary` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `address`, `salary`) VALUES
(1, 'R', 'Crookall', 48),
(2, 'Wanids Manchett', 'Manchett', 47),
(3, 'Chris Downgate', 'Downgate', 26),
(4, 'Arabella Younglove', 'Younglove', 29),
(5, 'Erl St. Quintin', 'St. Quintin', 94),
(6, 'Roxi Harry', 'Harry', 25),
(7, 'Kira Shrimpling', 'Shrimpling', 36),
(8, 'Bogey Foro', 'Foro', 11),
(9, 'Nicola Kinghorn', 'Kinghorn', 45),
(10, 'Sibella Marples', 'Marples', 78),
(11, 'Janelle McTear', 'McTear', 43),
(12, 'Beverlee Whiteland', 'Whiteland', 54),
(13, 'Nariko Lossman', 'Lossman', 75),
(14, 'Elvin Stronack', 'Stronack', 10),
(15, 'Bellanca Rookeby', 'Rookeby', 1),
(16, 'Julie Dinsale', 'Dinsale', 37),
(17, 'Lanita Gurg', 'Gurg', 55),
(18, 'Garland Jonson', 'Jonson', 87),
(19, 'Pansie Nassau', 'Nassau', 72),
(20, 'Marty Mazzia', 'Mazzia', 99),
(21, 'Charil Baskwell', 'Baskwell', 14),
(22, 'Lynsey Reavey', 'Reavey', 7),
(23, 'Eward England', 'England', 31),
(24, 'Byrle Rothery', 'Rothery', 91),
(25, 'Isidro Dugald', 'Dugald', 13),
(26, 'Melonie Attwell', 'Attwell', 64),
(27, 'Chicky Mingasson', 'Mingasson', 57),
(28, 'Terza Tomlett', 'Tomlett', 44),
(29, 'Koressa Plumptre', 'Plumptre', 36),
(30, 'Jessie Sterre', 'Sterre', 18),
(31, 'Kerianne Scatchar', 'Scatchar', 47),
(32, 'Clio Bence', 'Bence', 94),
(33, 'Gaylene Blinde', 'Blinde', 12),
(34, 'Debby Ferroli', 'Ferroli', 56),
(35, 'Corrianne Strangeways', 'Strangeways', 89),
(36, 'Aubrie Oloshkin', 'Oloshkin', 1),
(37, 'Beatrice Cicetti', 'Cicetti', 4),
(38, 'Sorcha Chippindall', 'Chippindall', 65),
(39, 'Cecilla Rebbeck', 'Rebbeck', 35),
(40, 'Keane Thewles', 'Thewles', 9),
(41, 'Codie Meiningen', 'Meiningen', 30),
(42, 'Alic Pulver', 'Pulver', 6),
(43, 'Silvan Hughf', 'Hughf', 73),
(44, 'Rosemary Thornton-Dewhirst', 'Thornton-Dewhirst', 2),
(45, 'Carline Schaben', 'Schaben', 42),
(46, 'Cele Rosenblad', 'Rosenblad', 68),
(47, 'Karia Auten', 'Auten', 68),
(48, 'Lauryn O\'Haire', 'O\'Haire', 81),
(49, 'Jen Spinelli', 'Spinelli', 23),
(50, 'Iona Gavan', 'Gavan', 53);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
