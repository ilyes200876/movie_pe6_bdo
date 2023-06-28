-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2023 at 02:23 PM
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
-- Table structure for table `actor`
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE IF NOT EXISTS `actor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`id`, `first_name`, `last_name`) VALUES
(1, 'Daniel', 'Radcliffe'),
(2, 'emma', 'watson'),
(3, 'Tom', 'Holland'),
(4, 'Chris', 'Miller'),
(5, 'Jake', 'Gyllenhaal'),
(6, 'Gemma', 'Arterton');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `release_date`) VALUES
(1, 'Harry Potter and the sorcerer stone', '1997-10-02'),
(2, 'Harry Potter and the chamber of secrets', '1998-05-20'),
(3, 'Harry Potter and the prisonner of azkaban', '1999-07-30'),
(4, 'Harry Potter and the goblet of fire', '0200-11-20'),
(5, 'Harry potter and the order of the phoenix', '2003-12-08'),
(6, 'Harry Potter and the half-blood prince', '2005-09-15'),
(7, 'Harry Potter and the deathly hallows', '2007-02-28'),
(8, 'the lord of the rings the fellowship of the ring', '2001-12-20'),
(9, 'the lord of the rings the two towers', '2002-10-12'),
(10, 'spiderman far from home', '2019-05-12'),
(11, 'spiderman new generation', '2018-10-12'),
(12, 'spiderman no way home', '2018-10-10'),
(13, 'spiderman across the spider verse', '2023-10-12'),
(14, '(Prince of Persia: The Sands of Time', '2010-02-20'),
(15, 'Iron man', '2008-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `movieactor`
--

DROP TABLE IF EXISTS `movieactor`;
CREATE TABLE IF NOT EXISTS `movieactor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_actor` int NOT NULL,
  `id_movie` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_actor` (`id_actor`,`id_movie`),
  KEY `actor_index` (`id_actor`),
  KEY `movie_index` (`id_movie`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movieactor`
--

INSERT INTO `movieactor` (`id`, `id_actor`, `id_movie`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 10),
(8, 3, 11),
(9, 4, 10),
(10, 4, 11),
(11, 5, 14),
(12, 6, 14);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movieactor`
--
ALTER TABLE `movieactor`
  ADD CONSTRAINT `movieactor_ibfk_1` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movieactor_ibfk_2` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
