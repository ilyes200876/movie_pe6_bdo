-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 26, 2023 at 10:51 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `release_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `release_date`) VALUES
(1, 'Harry Potter and the sorcerer stone', '0000-00-00'),
(2, 'Harry Potter and the chamber of secrets', '0000-00-00'),
(3, 'Harry Potter and the prisonner of azkaban', '0000-00-00'),
(4, 'Harry Potter and the goblet of fire', '0000-00-00'),
(5, 'Harry potter and the order of the phoenix', '0000-00-00'),
(6, 'Harry Potter and the half-blood prince', '0000-00-00'),
(7, 'Harry Potter and the deathly hallows', '0000-00-00'),
(8, 'the lord of the rings the fellowship of the ring', '0000-00-00'),
(9, 'the lord of the rings the two towers', '0000-00-00'),
(10, 'spiderman far from home', '0000-00-00'),
(11, 'spiderman new generation', '0000-00-00'),
(12, 'spiderman no way home', '0000-00-00'),
(13, 'spiderman across the spider verse', '0000-00-00'),
(14, 'Harry Potter and the sorcerer stone', '0000-00-00'),
(15, 'Harry Potter and the chamber of secrets', '0000-00-00'),
(16, 'Harry Potter and the prisonner of azkaban', '0000-00-00'),
(17, 'Harry Potter and the goblet of fire', '0000-00-00'),
(18, 'Harry potter and the order of the phoenix', '0000-00-00'),
(19, 'Harry Potter and the half-blood prince', '0000-00-00'),
(20, 'Harry Potter and the deathly hallows', '0000-00-00'),
(21, 'the lord of the rings the fellowship of the ring', '0000-00-00'),
(22, 'the lord of the rings the two towers', '0000-00-00'),
(23, 'spiderman far from home', '0000-00-00'),
(24, 'spiderman new generation', '0000-00-00'),
(25, 'spiderman no way home', '0000-00-00'),
(26, 'spiderman across the spider verse', '0000-00-00'),
(27, '(Prince of Persia: The Sands of Time', '0000-00-00'),
(28, 'Iron man', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
