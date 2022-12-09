-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 08:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(50) NOT NULL,
  `check_in` text NOT NULL,
  `check_out` text NOT NULL,
  `Adults` int(20) NOT NULL,
  `children` int(20) DEFAULT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `check_in`, `check_out`, `Adults`, `children`, `phone`) VALUES
(1, '2022-11-29', '2022-11-29', 1, NULL, '06666565'),
(14, '2022-11-28', '2022-11-29', 3, 1, '16265959591'),
(15, '2022-11-29', '2022-11-30', 11, 1, '16265959591'),
(16, '2022-11-29', '2022-11-30', 2759, 1234, '01303316004'),
(17, '2022-11-29', '2022-11-30', 2759, 1234, '01303316004'),
(18, '2022-11-29', '2022-11-30', 2759, 1234, '01303316004'),
(19, '2022-11-29', '2022-11-30', 2759, 1234, '01303316004'),
(20, '2022-12-01', '2022-12-05', 2, 0, '01780945820'),
(26, '2022-12-01', '2022-12-03', 1, 1, '1234'),
(27, '2022-12-01', '2022-12-28', 5, 1, '0987654321'),
(28, '2022-12-02', '2022-12-03', 1, 1, '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
