-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2020 at 08:24 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organizational_chart`
--

-- --------------------------------------------------------


--
-- Dumping data for table `node_tree`
--

INSERT INTO `node_tree` (`idNode`, `level`, `iLeft`, `iRight`) VALUES
(1, 2, 2, 3),
(2, 2, 4, 5),
(3, 2, 6, 7),
(4, 2, 8, 9),
(5, 1, 1, 24),
(6, 2, 10, 11),
(7, 2, 12, 19),
(8, 3, 15, 16),
(9, 3, 17, 18),
(10, 2, 20, 21),
(11, 3, 13, 14),
(12, 2, 22, 23);

-- --------------------------------------------------------


--
-- Dumping data for table `node_tree_names`
--

INSERT INTO `node_tree_names` (`id`, `idNode`, `language`, `nodeName`) VALUES
(1, 1, 'english', 'Marketing'),
(2, 1, 'italian', 'Marketing'),
(3, 2, 'english', 'Helpdesk'),
(4, 2, 'italian', 'Supporto Tecnico'),
(5, 3, 'english', 'Managers'),
(6, 3, 'italian', 'Managers'),
(7, 4, 'english', 'Customer Account'),
(8, 4, 'italian', 'Assistenza Cliente'),
(9, 5, 'english', 'Docebo'),
(10, 5, 'italian', 'Docebo'),
(11, 6, 'english', 'Accounting'),
(12, 6, 'italian', 'Amministrazione'),
(13, 7, 'english', 'Sales'),
(14, 7, 'italian', 'Supporto Vendite'),
(15, 8, 'english', 'Italy'),
(16, 8, 'italian', 'Italia'),
(17, 9, 'english', 'Europe'),
(18, 9, 'italian', 'Europa'),
(19, 10, 'english', 'Developers'),
(20, 10, 'italian', 'Sviluppatori'),
(21, 11, 'english', 'North America'),
(22, 11, 'italian', 'Nord America'),
(23, 12, 'english', 'Quality Assurance'),
(24, 12, 'italian', 'Controllo Qualità');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
