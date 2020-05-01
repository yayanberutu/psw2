-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 10:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilu`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggotapartai`
--
create database if not exists `pemilu`;

USE `pemilu`;


CREATE TABLE `anggotapartai` (
  `id` int(11) NOT NULL,
  `id_partai` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggotapartai`
--

INSERT INTO `anggotapartai` (`id`, `id_partai`, `name`, `date_time`) VALUES
(22, 1, 'ariel', '2019-03-03 16:03:03'),
(23, 2, 'luna', '2019-03-06 03:03:51'),
(24, 1, 'demian', '2019-03-06 03:03:31'),
(25, 2, 'valak', '2019-03-06 03:03:24'),
(28, 2, 'leri', '2019-03-06 03:03:51'),
(29, 3, 'jacky', '2019-03-06 03:03:42'),
(30, 3, 'bambang', '2019-03-06 03:03:58'),
(31, 1, 'gary', '2019-03-06 04:03:18'),
(33, 2, 'user', '2019-03-06 05:03:05'),
(34, 3, 'pasha', '2019-03-06 07:03:21'),
(35, 1, 'kader', '2019-03-08 09:03:30'),
(36, 1, 'riana', '2019-03-16 15:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `partai`
--

CREATE TABLE `partai` (
  `id_partai` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `image` varchar(45) NOT NULL,
  `ketua` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partai`
--

INSERT INTO `partai` (`id_partai`, `name`, `image`, `ketua`) VALUES
(1, 'red', 'red.png', 'Daniel'),
(2, 'green', 'green.png', 'Noah'),
(3, 'blue', 'blue.png', 'Jhony');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`) VALUES
(1, 'kader', 'kader', 0),
(2, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggotapartai`
--
ALTER TABLE `anggotapartai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_anggotapartai` (`id_partai`);

--
-- Indexes for table `partai`
--
ALTER TABLE `partai`
  ADD PRIMARY KEY (`id_partai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggotapartai`
--
ALTER TABLE `anggotapartai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggotapartai`
--
ALTER TABLE `anggotapartai`
  ADD CONSTRAINT `fk_anggotapartai` FOREIGN KEY (`id_partai`) REFERENCES `partai` (`id_partai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
