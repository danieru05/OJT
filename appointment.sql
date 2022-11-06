-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 04:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_custodian`
--
CREATE DATABASE IF NOT EXISTS `appointment` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `appointment`;

-- --------------------------------------------------------


CREATE TABLE `categ` (
  `categ_id` int(10) UNSIGNED NOT NULL,
  `names` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `availables` (
  `avail_id` int(10) UNSIGNED NOT NULL,
  `categ` varchar(500) DEFAULT NULL,
  `names` varchar(500) DEFAULT NULL,
  `avail` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `booking` (
  `book_id` int(10) UNSIGNED NOT NULL,
  `id` varchar(500) DEFAULT NULL,
  `names` varchar(500) DEFAULT NULL,
  `categ` varchar(500) DEFAULT NULL,
  `dates` varchar(500) DEFAULT NULL,
  `purpose` varchar(500) DEFAULT NULL,
  `approve` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slip`
--

INSERT INTO `categ` (`categ_id`, `names`) VALUES
(1, 'Computer Laboratory'),
(2, 'Hostel');

INSERT INTO `availables` (`avail_id`, `categ`,`names`,`avail`) VALUES
(1, 'Computer Laboratory', 'Computer Laboratory - PC', 30),
(2, 'Hostel', 'Rooms', 30);

INSERT INTO `booking` (`book_id`,`id`,`names`,`categ`,`dates`,`purpose`) VALUES
(1, '201810888', 'Surname, First Name M.I','Computer Laboratory - PC','Wednesday, 28 September, 2022', 'Research');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slip`
--
ALTER TABLE `categ`
  ADD PRIMARY KEY (`categ_id`);

ALTER TABLE `availables`
  ADD PRIMARY KEY (`avail_id`);

ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slip`
--
ALTER TABLE `categ`
  MODIFY `categ_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

ALTER TABLE `availables`
  MODIFY `avail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

ALTER TABLE `booking`
  MODIFY `book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

