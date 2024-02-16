-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 12:33 PM
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
-- Database: `login27`
--
CREATE DATABASE IF NOT EXISTS `login27` DEFAULT CHARACTER SET latin1 COLLATE latin1_german1_ci;
USE `login27`;

-- --------------------------------------------------------

--
-- Table structure for table `benutzerdaten`
--

CREATE TABLE `benutzerdaten` (
  `Absender` varchar(40) COLLATE latin1_german1_ci NOT NULL,
  `Empfaeger` varchar(40) COLLATE latin1_german1_ci NOT NULL,
  `Nachricht` text COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `benutzerdaten`
--

INSERT INTO `benutzerdaten` (`Absender`, `Empfaeger`, `Nachricht`) VALUES
('Test', 'Test', 'fsdf');

-- --------------------------------------------------------

--
-- Table structure for table `logindaten`
--

CREATE TABLE `logindaten` (
  `Name` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `Passwort` varchar(30) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `logindaten`
--

INSERT INTO `logindaten` (`Name`, `Passwort`) VALUES
('Test', '1234'),
('', ''),
('Test23', '1111');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
