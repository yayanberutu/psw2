-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 01:28 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

CREATE DATABASE clan
USE clan
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `clan`;

USE `clan`;

CREATE TABLE `admins` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anggotapartai`
--

CREATE TABLE `anggotapartai` (
  `id` INT(11) NOT NULL,
  `id_partai` INT(11) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `date_time` DATETIME NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggotapartai`
--

INSERT INTO `anggotapartai` (`id`, `id_partai`, `name`, `date_time`) VALUES
(1, 1, 'anton', '2019-03-02 11:03:26'),
(2, 2, 'citra', '2019-03-01 11:03:26'),
(3, 3, 'julian', '2019-03-03 11:03:26'),
(4, 2, 'user', '2019-03-08 01:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `partai`
--

CREATE TABLE `partai` (
  `id_partai` INT(11) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `img` VARCHAR(220) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partai`
--

INSERT INTO `partai` (`id_partai`, `name`, `img`) VALUES
(1, 'senju', 'senju.jpg'),
(2, 'uciha', 'uchiha.jpg'),
(3, 'uzumaki', 'uzumaki.png');

-- --------------------------------------------------------

--
-- Table structure for table `pemilikpartai`
--

CREATE TABLE `pemilikpartai` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilikpartai`
--

INSERT INTO `pemilikpartai` (`id`, `name`, `password`) VALUES
(1, 'uzumaki', 'uzumaki'),
(2, 'senju', 'senju'),
(3, 'uchiha', 'uchiha');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pemilikpartai`
--
ALTER TABLE `pemilikpartai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggotapartai`
--
ALTER TABLE `anggotapartai`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partai`
--
ALTER TABLE `partai`
  MODIFY `id_partai` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemilikpartai`
--
ALTER TABLE `pemilikpartai`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
