-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2023 at 09:41 AM
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
-- Database: `survey_db`
--
CREATE DATABASE IF NOT EXISTS `survey_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `survey_db`;

-- --------------------------------------------------------

--
-- Table structure for table `surveydata`
--

DROP TABLE IF EXISTS `surveydata`;
CREATE TABLE IF NOT EXISTS `surveydata` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Surname` varchar(255) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  `currentDate` date NOT NULL,
  `Age` varchar(255) NOT NULL,
  `favouriteFoods` varchar(1000) NOT NULL,
  `eatingOut` int NOT NULL,
  `watchingMovies` int NOT NULL,
  `watchTv` int NOT NULL,
  `radioListener` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `surveydata`
--

INSERT INTO `surveydata` (`ID`, `Surname`, `Names`, `contactNo`, `currentDate`, `Age`, `favouriteFoods`, `eatingOut`, `watchingMovies`, `watchTv`, `radioListener`) VALUES
(1, 'v', 'd', '2023-05-23', '0000-00-00', '40', 'Pap And WorsPap And Wors ,', 2, 2, 3, 4),
(2, 'v', 'd', '2023-05-23', '0000-00-00', '25', 'Pap And WorsPap And Wors ,', 2, 2, 3, 4),
(3, 'v', 'd', '078', '0000-00-00', '22', 'Pap And WorsPap And Wors ,', 2, 2, 3, 4),
(4, 'v', 'd', '078', '2023-05-23', '12', 'Pap And WorsPap And Wors ,', 1, 2, 3, 5),
(5, 'v', 'd', '078', '2023-05-23', '12', 'Beef stir fryBeef stir fry ,', 2, 3, 2, 1),
(6, 'K', 'K', '09', '2023-05-22', '60', 'Pap And Wors', 1, 1, 4, 4),
(7, 'Vusi', 'Dlodl', '08', '2023-05-28', '15', 'Chicken stir fry', 1, 2, 2, 5),
(8, 'Vusi', 'Dlodl', '08', '2023-05-28', '19', '', 1, 2, 2, 5),
(9, 'Vusi', 'Dlodl', '08', '2023-05-28', '19', '', 1, 2, 2, 5),
(10, 'Vee', 'Dlodlo', '081', '2023-05-30', '33', 'Pasta,Pap And Wors,Beef stir fry\n', 5, 3, 2, 1),
(11, 'f', 'f', 'f', '2023-05-31', '12', '', 0, 0, 0, 0),
(12, 'f', 'f', 'f', '2023-05-31', '12', '', 0, 0, 0, 0),
(13, 'f', 'f', 'f', '2023-05-31', '12', '', 0, 0, 0, 0),
(14, 'f', 'f', 'f', '2023-05-31', '12', '', 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
